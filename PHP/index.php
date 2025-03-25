<?php
$pageTitle = "Shop'sheesh";
$userName = "Longadog Jr.";
$categories = [
    ["img" => "../Images/Product1.jpg", "alt" => "Big Spring Sale", "name" => "Shop all"],
    ["img" => "../Images/Product2.jpg", "alt" => "Under $25", "name" => "Under $25"],
    ["img" => "../Images/Product1.jpg", "alt" => "Home", "name" => "Home"],
    ["img" => "../Images/Product2.jpg", "alt" => "Fashion & Beauty", "name" => "Fashion"],
    ["img" => "../Images/Product1.jpg", "alt" => "Organization", "name" => "Organization"],
    ["img" => "../Images/Product1.jpg", "alt" => "Patio", "name" => "Patio"],
    ["img" => "../Images/Product2.jpg", "alt" => "Outdoors", "name" => "Outdoors"]
];
$products = [
    ["img" => "../Images/Product8.jpg", "alt" => "Laptop", "discount" => "13% off", "deal" => "Big Spring Deal", "price" => "$1,399.99", "old_price" => "$1,599.99", "name" => "Lenovo Legion 5i - 16” Display"],
    ["img" => "../Images/Product6.jpg", "alt" => "SSD", "discount" => "40% off", "deal" => "Big Spring Deal", "price" => "$279.99", "old_price" => "$464.99", "name" => "SAMSUNG 990 PRO SSD 4TB"],
    ["img" => "../Images/Product8.jpg", "alt" => "Tablet", "discount" => "25% off", "deal" => "Big Spring Deal", "price" => "$199.99", "old_price" => "$265.00", "name" => "SAMSUNG Galaxy Tab S6 Lite"],
    ["img" => "../Images/Product6.jpg", "alt" => "Laptop", "discount" => "25% off", "deal" => "Big Spring Deal", "price" => "$299.99", "old_price" => "$399.99", "name" => "15.6-FHD-Laptop"],
    ["img" => "../Images/Product8.jpg", "alt" => "Monitor", "discount" => "35% off", "deal" => "Big Spring Deal", "price" => "$219.99", "old_price" => "$339.99", "name" => "SAMSUNG 32” UJ59 4K UHD"],
    ["img" => "../Images/Product6.jpg", "alt" => "Accessories", "discount" => "55% off", "deal" => "Big Spring Deal", "price" => "$62.99", "old_price" => "$139.99", "name" => "WOLFBOX MF100 Accessories"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="icon" href="../Images/lowgow.png" />
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
</head>
<body>
<header>
    <a href="#" class="logo"><i class="bx bxs-basket"></i><span class="shop-sheesh">Shop'sheesh</span></a>
    <ul class="nav-list">
        <li class="nav-item"><a href="#home" class="nav-link active-link">Home</a></li>
        <li><a href="#Category" class="nav-link">Categories</a></li>
        <li><a href="Products.php" class="nav-link">Products</a></li>
        <li><a href="#About" class="nav-link">About</a></li>
        <li><a href="#Contact" class="nav-link">Contact</a></li>
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
        <span><?php echo $userName; ?></span>
        <i class='bx bx-caret-down'></i>
    </div>
</header>
<section class="home" id="home">
    <div class="content">
        <h1>Welcome to <span class="shop-sheesh">Shop'sheesh</span></h1>
        <p>Where you can find the best products for your needs</p>
        <button class="btn">Shop Now</button>
    </div>
    <img src="../Images/heroimg.png" alt="Headphones">
</section>

<!-- Categories Section -->
<div class="deals-container">
    <h2 class="saveup">Save up to 40%</h2>
    <div class="scroll-wrapper">
        <button class="scroll-btn left-btn" onclick="scrollLeft('category-container')">&#9664;</button>
        <div class="category-container" id="category-container">
            <?php foreach ($categories as $category): ?>
                <div class="category-card">
                    <img src="<?php echo $category['img']; ?>" alt="<?php echo $category['alt']; ?>">
                    <p><?php echo $category['name']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="scroll-btn right-btn" onclick="scrollRight('category-container')">&#9654;</button>
    </div>
</div>

<!-- Products Section -->
<div class="deals-container">
    <h2 class="h2-head">Deals on PCs and gaming</h2>
    <div class="scroll-wrapper">
        <button class="scroll-btn left-btn" onclick="scrollLeft('product-container')">&#9664;</button>
        <div class="product-container" id="product-container">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <img src="<?php echo $product['img']; ?>" alt="<?php echo $product['alt']; ?>">
                    <span class="discount"><?php echo $product['discount']; ?></span>
                    <span class="deal-tag"><?php echo $product['deal']; ?></span>
                    <p class="price"><?php echo $product['price']; ?> <span class="old-price"><?php echo $product['old_price']; ?></span></p>
                    <p class="product-name"><?php echo $product['name']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="scroll-btn right-btn" onclick="scrollRight('product-container')">&#9654;</button>
    </div>
</div>

<script src="../JAVA/index.js"></script>
</body>
</html>
