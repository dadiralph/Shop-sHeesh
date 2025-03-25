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