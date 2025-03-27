document.addEventListener("DOMContentLoaded", function() {

    // Toggle Search Bar Visibility
    document.querySelector('.search-toggle').addEventListener('click', function() {
        let searchBox = document.querySelector('.search-box');
        searchBox.classList.toggle('active');
    });

    // Toggle Filters Sidebar Visibility
    document.querySelector('.filter-toggle').addEventListener('click', function() {
        let filterSidebar = document.querySelector('.filters');
        filterSidebar.classList.toggle('active');

        // Change button text when toggled
        const buttonText = filterSidebar.classList.contains('active') ? "✖ Close Filters" : "☰ Filters";
        this.textContent = buttonText;
    });

    // Add to Cart Function
    function addToCart(button) {
        alert(button.previousElementSibling.innerText + ' added to cart!');
    }

    // Add to Favorites Toggle Function
    function addToFavorites(button) {
        button.classList.toggle("active");
        button.style.color = button.classList.contains("active") ? "darkred" : "red";
    }

    // Assign functions to buttons in the product cards
    document.querySelectorAll('.btn-cart').forEach(button => {
        button.addEventListener('click', function() {
            addToCart(button);
        });
    });

    document.querySelectorAll('.btn-favorite').forEach(button => {
        button.addEventListener('click', function() {
            addToFavorites(button);
        });
    });

});