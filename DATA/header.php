<?php


// Ensure $currentPage and $userName are defined before including this file
if (!isset($currentPage)) {
    $currentPage = basename($_SERVER['PHP_SELF']); // Get the current file name
}

if (!isset($userName)) {
    $userName = "Guest"; // Default username if not set
}

// Define categories for the dropdown if not set
if (!isset($dropdowns)) {
    $dropdowns = ["Motor Parts", "Home Decore 2", "Gadgets", "Appliances", "Computer Parts", "Shoes", "Jackets"]; // Example categories
}
?>

<header>
    <a href="#" class="logo"><i class="bx bxs-basket"></i><span class="shop-sheesh">Shop'sheesh</span></a>
    <ul class="nav-list">
        <li><a href="index.php" class="nav-link <?php echo ($currentPage == 'index.php') ? 'active-link' : ''; ?>">Home</a></li>

        <li class="nav-item dropdown">
            <a href="#" class="nav-link <?php echo ($currentPage == 'category.php') ? 'active-link' : ''; ?>">Categories</a>
            <ul class="dropdown-menu">
                <?php
                // Loop to create each category item in the dropdown
                foreach ($dropdowns as $dropdown) {
                    echo "<li><a href='#' class='dropdown-item'>$dropdown</a></li>";
                }
                ?>
            </ul>
        </li>

        <li><a href="Products.php" class="nav-link <?php echo ($currentPage == 'Products.php') ? 'active-link' : ''; ?>">Products</a></li>
        <li><a href="about.php" class="nav-link <?php echo ($currentPage == 'about.php') ? 'active-link' : ''; ?>">About</a></li>
        <li><a href="flashsale.php" class="nav-link <?php echo ($currentPage == 'flashsale.php') ? 'active-link' : ''; ?>">Flash <span>SALE</span></a></li>
    </ul>
    <button class="cart-toggle"><i class='bx bx-cart'></i></button>
    <span class="cart-items">0</span>
    <button class="search-toggle"><i class='bx bx-search'></i></button>
    <div class="search-box">
        <input type="text" placeholder="Search products..." class="search-input">
        <button class="search-btn"><i class='bx bx-search'></i></button>
    </div>
    <div class="profile">
        <img src="../Images/profile.png" alt="profile">
        <span><?php echo htmlspecialchars($userName); ?></span>
        <i class='bx bx-caret-down'></i>
    </div>
</header>
