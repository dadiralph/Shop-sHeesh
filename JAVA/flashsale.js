document.addEventListener("DOMContentLoaded", function () {
    function setupInfiniteScroll(containerClass) {
        const container = document.querySelector(`.${containerClass}`);
        if (!container) return; // Skip if container is missing

        const cards = Array.from(container.children);
        if (cards.length < 2) return; // Not enough items for looping

        const scrollWrapper = container.parentElement; // Get the wrapper div
        const scrollAmount = cards[0].offsetWidth + 20; // Adjust for margins

        // Clone first and last items for seamless infinite effect
        container.appendChild(cards[0].cloneNode(true)); // Clone first item
        container.insertBefore(cards[cards.length - 1].cloneNode(true), cards[0]); // Clone last item

        let isScrolling = false;

        function scrollLeft() {
            if (isScrolling) return;
            isScrolling = true;

            container.style.transition = "transform 0.5s ease-in-out";
            container.style.transform = `translateX(${scrollAmount}px)`;

            setTimeout(() => {
                container.style.transition = "none";
                container.insertBefore(container.lastElementChild, container.firstElementChild);
                container.style.transform = "translateX(0)";
                isScrolling = false;
            }, 500);
        }

        function scrollRight() {
            if (isScrolling) return;
            isScrolling = true;

            container.style.transition = "transform 0.5s ease-in-out";
            container.style.transform = `translateX(-${scrollAmount}px)`;

            setTimeout(() => {
                container.style.transition = "none";
                container.appendChild(container.firstElementChild);
                container.style.transform = "translateX(0)";
                isScrolling = false;
            }, 500);
        }

        // Attach event listeners to buttons
        const leftButton = scrollWrapper.querySelector(".left-btn");
        const rightButton = scrollWrapper.querySelector(".right-btn");

        if (leftButton && rightButton) {
            leftButton.addEventListener("click", scrollLeft);
            rightButton.addEventListener("click", scrollRight);
        }
    }

    // Apply to all containers
    setupInfiniteScroll("gadgets-container");
    setupInfiniteScroll("shirts-container");
    setupInfiniteScroll("appliances-container");
    setupInfiniteScroll("home-decor-container");
});

// Toggle search bar visibility
document.querySelector('.search-toggle').addEventListener('click', function() {
    let searchBox = document.querySelector('.search-box');
    searchBox.style.display = (searchBox.style.display === 'flex') ? 'none' : 'flex';
});

function toggleSearch() {
    const searchContainer = document.getElementById('search-container');
    searchContainer.style.display = searchContainer.style.display === 'none' || searchContainer.style.display === '' ? 'block' : 'none';
}


// countdown.js

function updateCountdown(saleStartTime, saleEndTime) {
    const countdownElement = document.getElementById("countdown");

    function calculateTimeLeft() {
        const now = new Date().getTime();

        if (now < saleStartTime) {
            // Countdown to Sale Start
            const timeLeft = saleStartTime - now;
            updateDisplay("Sale Starts in: ", timeLeft);
            return;
        }

        // Countdown to Sale End
        const timeLeft = saleEndTime - now;
        if (timeLeft <= 0) {
            countdownElement.innerHTML = "Sale Ended!";
            return;
        }

        updateDisplay("", timeLeft);
    }

    function updateDisplay(prefix, timeLeft) {
        const hours = Math.floor((timeLeft / (1000 * 60 * 60)) % 24);
        const minutes = Math.floor((timeLeft / (1000 * 60)) % 60);
        const seconds = Math.floor((timeLeft / 1000) % 60);
        countdownElement.innerHTML = `${prefix}${hours.toString().padStart(2, "0")} : ${minutes.toString().padStart(2, "0")} : ${seconds.toString().padStart(2, "0")}`;
    }

    setInterval(calculateTimeLeft, 1000);
    calculateTimeLeft();
}

window.onload = function() {
    const countdownElement = document.getElementById("countdown");

    if (!countdownElement) return;

    const saleStartTime = parseInt(countdownElement.dataset.saleStartTime, 10);
    const saleEndTime = parseInt(countdownElement.dataset.saleEndTime, 10);

    if (isNaN(saleStartTime) || isNaN(saleEndTime)) {
        console.error("Invalid sale start or end time.");
        return;
    }

    updateCountdown(saleStartTime, saleEndTime);
};

// Add to Cart Functionality
// This function is called when the "Add to Cart" button is clicked

document.addEventListener("DOMContentLoaded", function () {
    const cartItemsCount = document.querySelector(".cart-items");
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    function updateCartCount() {
        cartItemsCount.textContent = cart.length;
    }
    function addToCart(button) {
        const productCard = button.closest(".product-card");
        const product = {
            id: productCard.dataset.price + productCard.dataset.color, 
            image: productCard.querySelector("img").src,
            name: productCard.querySelector("h3").textContent,
            price: productCard.dataset.price,
            color: productCard.dataset.color
        };

        // Check if product is already in cart
        if (!cart.some(item => item.id === product.id)) {
            cart.push(product);
            localStorage.setItem("cart", JSON.stringify(cart));
            updateCartCount();
        }
    }

    function removeFromCart(productId) {
        cart = cart.filter(item => item.id !== productId);
        localStorage.setItem("cart", JSON.stringify(cart));
        updateCartCount();
    }

    // Attach event listeners to buttons after DOM is ready
    document.querySelectorAll(".btn-cart").forEach(button => {
        button.addEventListener("click", function () {
            addToCart(this);
        });
    });

    updateCartCount();
});


// add cart Functionality
document.querySelector(".cart-toggle").addEventListener("click", function () {
    let cartContainer = document.querySelector(".cart-container");
    cartContainer.style.display = (cartContainer.style.display === "none" || cartContainer.style.display === "") ? "block" : "none";

    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    let cartDisplay = cart.map(item => 
        `<div class="cart-item">
            <img src="${item.image}" alt="${item.name}" style="width: 50px;">
            <p>${item.name} - $${item.price}</p>
            <button onclick="removeFromCart('${item.id}')">Remove</button>
        </div>`
    ).join("");

    cartContainer.innerHTML = cartDisplay || "<p>Your cart is empty</p>";
});
