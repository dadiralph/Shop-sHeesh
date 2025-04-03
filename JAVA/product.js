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

// Toggle search bar visibility
document.querySelector('.search-toggle').addEventListener('click', function() {
    let searchBox = document.querySelector('.search-box');
    searchBox.style.display = (searchBox.style.display === 'flex') ? 'none' : 'flex';
});

function toggleSearch() {
    const searchContainer = document.getElementById('search-container');
    searchContainer.style.display = searchContainer.style.display === 'none' || searchContainer.style.display === '' ? 'block' : 'none';
}


// Toggle cart display
document.addEventListener("DOMContentLoaded", function () {
    const cartItemsCount = document.querySelector(".cart-items");
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    function updateCartCount() {
        cartItemsCount.textContent = cart.length;
    }

    function addToCart(button) {
        const productCard = button.closest(".product-card");
        if (!productCard) return; // Prevents errors if productCard is null

        // Ensure price and stock are numbers, else default to 0
        const price = parseFloat(productCard.dataset.price);
        const stock = parseInt(productCard.dataset.stock);

        if (isNaN(price) || isNaN(stock)) {
            console.error("Invalid price or stock value");
            return;
        }

        const product = {
            id: productCard.dataset.price + productCard.dataset.color, 
            image: productCard.querySelector("img").src,
            name: productCard.querySelector("h3").textContent,
            price: price,
            color: productCard.dataset.color,
            quantity: 1, // Default quantity is 1
            stock: stock // Read stock value from the data-stock attribute
        };

        // Check if product is already in cart
        const existingProduct = cart.find(item => item.id === product.id);
        if (existingProduct) {
            if (existingProduct.quantity < existingProduct.stock) {
                existingProduct.quantity += 1; // Increase quantity if product is already in cart and stock allows
            }
        } else {
            cart.push(product);
        }

        localStorage.setItem("cart", JSON.stringify(cart));
        updateCartCount();
        loadCartItems(); // Refresh the cart items display
    }

    function removeFromCart(productId) {
        cart = cart.filter(item => item.id !== productId);
        localStorage.setItem("cart", JSON.stringify(cart));
        updateCartCount();
        loadCartItems(); // Refresh cart items display
    }

    function adjustQuantity(productId, action) {
        const product = cart.find(item => item.id === productId);
        if (!product) return;

        // Ensure we are modifying a valid quantity
        if (action === 'increase' && product.quantity < product.stock) {
            product.quantity += 1; // Increase quantity only if stock allows
        } else if (action === 'decrease' && product.quantity > 1) {
            product.quantity -= 1; // Decrease quantity if greater than 1
        }

        localStorage.setItem("cart", JSON.stringify(cart));
        loadCartItems(); // Refresh the cart items display
    }

    // Load cart items into the cart display
    function loadCartItems() {
        let cartDisplay = cart.map(item =>
            `<div class="cart-item">
                <img src="${item.image}" alt="${item.name}" style="width: 50px;">
                <div>
                    <p>${item.name}</p>
                    <div class="quantity">
                        <button class="btn-decrease" data-id="${item.id}">-</button>
                        <p>${item.quantity}</p>
                        <button class="btn-increase" data-id="${item.id}">+</button>
                    </div>
                </div>
                <button class="btn-remove" data-id="${item.id}">Remove</button>
            </div>`).join("");

        // Calculate the total price
        const totalPrice = cart.reduce((total, item) => {
            const price = parseFloat(item.price);
            const quantity = parseInt(item.quantity);

            if (!isNaN(price) && !isNaN(quantity)) {
                return total + (price * quantity);
            } else {
                return total;
            }
        }, 0);

        // Display cart items
        const cartContainer = document.querySelector(".cart-container .cart-items-list");
        cartContainer.innerHTML = cartDisplay || "";

        // Add total price above the checkout button
        const checkoutButton = document.querySelector(".cart-container .btn-checkout");

        // Remove the total price if it already exists
        const existingTotalPrice = document.querySelector(".cart-container .total-price");
        if (existingTotalPrice) {
            existingTotalPrice.remove();
        }

        // Add the total price if cart is not empty
        if (cart.length > 0) {
            const totalPriceElement = document.createElement("p");
            totalPriceElement.classList.add("total-price");
            totalPriceElement.innerHTML = `<strong>Total Price: $${totalPrice.toFixed(2)}</strong>`;
            checkoutButton.insertAdjacentElement('beforebegin', totalPriceElement);

            // Remove the empty cart message if present
            const emptyCartMessage = document.querySelector(".cart-container .empty-cart-message");
            if (emptyCartMessage) {
                emptyCartMessage.remove();
            }
        } else {
            // If cart is empty, display a message above the checkout button
            const emptyCartMessage = document.querySelector(".cart-container .empty-cart-message");
            if (!emptyCartMessage) {
                const newEmptyMessage = document.createElement("p");
                newEmptyMessage.classList.add("empty-cart-message");
                newEmptyMessage.innerHTML = `<strong>Your cart is empty.</strong>`;
                checkoutButton.insertAdjacentElement('beforebegin', newEmptyMessage);
            }
        }

        // Attach event listeners to quantity buttons
        document.querySelectorAll(".btn-decrease").forEach(button => {
            button.addEventListener("click", function () {
                adjustQuantity(this.dataset.id, 'decrease');
            });
        });

        document.querySelectorAll(".btn-increase").forEach(button => {
            button.addEventListener("click", function () {
                adjustQuantity(this.dataset.id, 'increase');
            });
        });

        // Attach event listeners to remove buttons
        document.querySelectorAll(".btn-remove").forEach(button => {
            button.addEventListener("click", function () {
                removeFromCart(this.dataset.id);
            });
        });
    }

    // Attach event listeners to "Add to Cart" buttons
    document.querySelectorAll(".btn-cart").forEach(button => {
        button.addEventListener("click", function () {
            addToCart(this);
        });
    });

    // Toggle cart display
    document.querySelector(".cart-toggle").addEventListener("click", function () {
        const cartContainer = document.querySelector(".cart-container");
        cartContainer.style.display = (cartContainer.style.display === "none" || cartContainer.style.display === "") ? "block" : "none";
        loadCartItems(); // Refresh cart items when toggling
    });

    // Initial update of cart count and cart items
    updateCartCount();
    loadCartItems();
});









