// Toggle search bar visibility
document.querySelector('.search-toggle').addEventListener('click', function() {
    let searchBox = document.querySelector('.search-box');
    searchBox.style.display = (searchBox.style.display === 'flex') ? 'none' : 'flex';
});

function toggleSearch() {
    const searchContainer = document.getElementById('search-container');
    if (searchContainer.style.display === 'none' || searchContainer.style.display === '') {
        searchContainer.style.display = 'block';
    } else {
        searchContainer.style.display = 'none';
    }
}

function searchProducts() {
    let input = document.getElementById('search').value.toLowerCase();
    let products = document.querySelectorAll('.product-card');
    products.forEach(product => {
        let name = product.getElementsByTagName('h3')[0].innerText.toLowerCase();
        if (name.includes(input)) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
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
                container.style.transition = "none"; // Remove transition to prevent abrupt movement
                container.insertBefore(container.lastElementChild, container.firstElementChild); // Move last item to start
                container.style.transform = "translateX(0)"; // Reset position
            }, 500);
        }

        function scrollRight() {
            container.style.transition = "transform 0.5s ease-in-out";
            container.style.transform = `translateX(-${scrollAmount}px)`;

            setTimeout(() => {
                container.style.transition = "none"; // Remove transition
                container.appendChild(container.firstElementChild); // Move first item to end
                container.style.transform = "translateX(0)"; // Reset position
            }, 500);
        }

        document.querySelector(`.left-btn[onclick="scrollLeft('${containerId}')"]`).addEventListener("click", scrollLeft);
        document.querySelector(`.right-btn[onclick="scrollRight('${containerId}')"]`).addEventListener("click", scrollRight);
    }

    setupInfiniteScroll("category-container");
    setupInfiniteScroll("product-container");
});
