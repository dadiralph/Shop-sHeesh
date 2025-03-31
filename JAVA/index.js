// Toggle search bar visibility
document.querySelector('.search-toggle').addEventListener('click', function() {
    let searchBox = document.querySelector('.search-box');
    searchBox.style.display = (searchBox.style.display === 'flex') ? 'none' : 'flex';
});

function toggleSearch() {
    const searchContainer = document.getElementById('search-container');
    searchContainer.style.display = searchContainer.style.display === 'none' || searchContainer.style.display === '' ? 'block' : 'none';
}

function addToCart(button) {
    alert(button.previousElementSibling.innerText + ' added to cart!');
}

document.addEventListener("DOMContentLoaded", function () {
    function setupInfiniteScroll(containerId) {
        const container = document.getElementById(containerId);
        const cards = [...container.children];
        const scrollAmount = cards[0].offsetWidth + 20; // Adjust based on card width & gap

        // Duplicate first and last items for seamless looping
        container.appendChild(cards[0].cloneNode(true)); // Clone first item
        container.insertBefore(cards[cards.length - 1].cloneNode(true), cards[0]); // Clone last item

        function scrollLeft() {
            container.style.transition = "transform 0.5s ease-in-out";
            container.style.transform = `translateX(${scrollAmount}px)`;

            setTimeout(() => {
                container.style.transition = "none";
                container.insertBefore(container.lastElementChild, container.firstElementChild);
                container.style.transform = "translateX(0)";
            }, 500);
        }

        function scrollRight() {
            container.style.transition = "transform 0.5s ease-in-out";
            container.style.transform = `translateX(-${scrollAmount}px)`;

            setTimeout(() => {
                container.style.transition = "none";
                container.appendChild(container.firstElementChild);
                container.style.transform = "translateX(0)";
            }, 500);
        }

        // Attach event listeners to the buttons
        const leftButton = document.querySelector(`.left-btn[onclick="scrollLeft('${containerId}')"]`);
        const rightButton = document.querySelector(`.right-btn[onclick="scrollRight('${containerId}')"]`);

        leftButton.addEventListener("click", scrollLeft);
        rightButton.addEventListener("click", scrollRight);
    }

    setupInfiniteScroll("category-container");
    setupInfiniteScroll("product-container");
    setupInfiniteScroll("jacket-container"); // Apply the infinite scroll for jackets
});

function buyNow(productName) {
    alert("You have selected: " + productName); // this can be expanded to handle the purchase logic
}




// countdown.js

// Function to update the countdown timer
function updateCountdown(saleStartTime, saleEndTime) {
    const countdownElement = document.getElementById("countdown");

    function calculateTimeLeft() {
        const now = new Date().getTime();
        
        // If the current time is before the sale start, show the countdown to start
        if (now < saleStartTime) {
            const timeLeft = saleStartTime - now;
            const hours = Math.floor((timeLeft / (1000 * 60 * 60)) % 24);
            const minutes = Math.floor((timeLeft / (1000 * 60)) % 60);
            const seconds = Math.floor((timeLeft / 1000) % 60);
            countdownElement.innerHTML = `Sale Starts in: ${hours.toString().padStart(2, "0")} : ${minutes.toString().padStart(2, "0")} : ${seconds.toString().padStart(2, "0")}`;
            return;
        }
        
        // If the current time is within the sale, show the countdown to the end
        const timeLeft = saleEndTime - now;

        if (timeLeft <= 0) {
            countdownElement.innerHTML = "Sale Ended!";
            return;
        }

        const hours = Math.floor((timeLeft / (1000 * 60 * 60)) % 24);
        const minutes = Math.floor((timeLeft / (1000 * 60)) % 60);
        const seconds = Math.floor((timeLeft / 1000) % 60);

        countdownElement.innerHTML = `${hours.toString().padStart(2, "0")} : ${minutes.toString().padStart(2, "0")} : ${seconds.toString().padStart(2, "0")}`;
    }

    setInterval(calculateTimeLeft, 1000); // Update every second
    calculateTimeLeft(); // Run immediately
}

// Start the countdown when the page loads
window.onload = function() {
    const saleStartTime = document.getElementById("countdown").dataset.saleStartTime;
    const saleEndTime = document.getElementById("countdown").dataset.saleEndTime;
    updateCountdown(parseInt(saleStartTime), parseInt(saleEndTime)); // Pass start and end time
};