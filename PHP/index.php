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

$jackets = [
    ["img" => "../Images/Product1.jpg", "alt" => "Jacket", "discount" => "13% off", "deal" => "Big Spring Deal", "price" => "$1,000.99", "old_price" => "$599.99", "name" => "Varcity” Display"],
    ["img" => "../Images/Product2.jpg", "alt" => "Jacket", "discount" => "40% off", "deal" => "Big Spring Deal", "price" => "$700.99", "old_price" => "$500.99", "name" => "Snow"],
    ["img" => "../Images/Product1.jpg", "alt" => "Jacket", "discount" => "25% off", "deal" => "Big Spring Deal", "price" => "$1,400.99", "old_price" => "$1,000.00", "name" => "Unique"],
    ["img" => "../Images/Product2.jpg", "alt" => "Jacket", "discount" => "25% off", "deal" => "Big Spring Deal", "price" => "$299.99", "old_price" => "99.99", "name" => "Adidas"],
    ["img" => "../Images/Product1.jpg", "alt" => "Jacket", "discount" => "35% off", "deal" => "Big Spring Deal", "price" => "$3,000.99", "old_price" => "$2,500.99", "name" => "Lacoste"],
    ["img" => "../Images/Product2.jpg", "alt" => "Jacket", "discount" => "55% off", "deal" => "Big Spring Deal", "price" => "$2,500", "old_price" => "$2,000.99", "name" => "Olgoods store"]
];

$flashsales = [
    ["name" => "BAOFENG 888S", "image" => "../Images/Product1.jpg"],
    ["name" => "OPPO", "image" => "../Images/Product1.jpg"],
    ["name" => "Photobook", "image" => "../Images/Product1.jpg"],
    ["name" => "Liver", "image" => "../Images/Product1.jpg"],
    ["name" => "DESKTOP SET", "image" => "../Images/Product1.jpg"],
    ["name" => "UGREEN", "image" => "../Images/Product1.jpg"],
    ["name" => "BUY 1 TAKE 2", "image" => "../Images/Product1.jpg"],
    ["name" => "JBL", "image" => "../Images/Product1.jpg"],
    ["name" => "SAMSUNG", "image" => "../Images/Product1.jpg"],
    ["name" => "HUAWEI", "image" => "../Images/Product1.jpg"],
    ["name" => "SONY", "image" => "../Images/Product1.jpg"]

];


// Set the timezone to EST (Eastern Standard Time)
date_default_timezone_set('America/New_York');

// Calculate next Monday at 9 AM
$nextMonday = strtotime("next monday 09:00:00") * 1000; // Convert to milliseconds for JS

// Calculate next Friday at 6 PM
$nextFriday = strtotime("next friday 18:00:00") * 1000; // Convert to milliseconds for JS

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

<div class="top-section">
        <div class="topup">
            <i class="bx bx-wallet"></i>
            <p>Top up & pay bills</p>
        </div>
        <div class="lazmall">
            <i class="bx bx-store-alt"></i>
            <p>Shop best brands</p>
        </div>
        <div class="vouchers">
            <i class="bx bx-gift"></i>
            <p>Vouchers</p>
        </div>
    </div>


    <div class="flash-sale">
        <div class="flash-sale-header">
        <h2><i class='bx bxs-zap'></i> Flash Sale</h2>
            <div class="timer" id="countdown" data-sale-start-time="<?php echo $nextMonday; ?>" data-sale-end-time="<?php echo $nextFriday; ?>">
                On Sale Now! Ending in: <span>Loading...</span>
            </div>
            <a href="#" class="shop-all">SHOP ALL PRODUCTS</a>
        </div>
        
        <div class="flash-sale-products-wrapper">
            <div class="flash-sale-products">
                <?php foreach ($flashsales as $flashsale): ?>
                    <div class="product">
                        <img src="<?php echo $flashsale['image']; ?>" alt="<?php echo $flashsale['name']; ?>">
                        <p class="product-name"><?php echo $flashsale['name']; ?></p>
                    </div>
                <?php endforeach; ?>
                
            </div>
        </div>
    </div>


    
<!-- Categories Section -->
<div class="deals-container">
    <h2 class="saveup">Save up to <span>40%</span></h2>
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
                    <!-- Buy Now Button -->
                    <button class="btn-buy-now" onclick="buyNow('<?php echo $product['name']; ?>')">Buy Now</button>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="scroll-btn right-btn" onclick="scrollRight('product-container')">&#9654;</button>
    </div>
</div>

<!-- Jackets Section -->
<div class="deals-container">
    <h2 class="jacket">Jackets <span>Mega Discount</span></h2>
    <div class="scroll-wrapper">
        <button class="scroll-btn left-btn" onclick="scrollLeft('product-container')">&#9664;</button>
        <div class="product-container" id="product-container">
            <?php foreach ($jackets as $jacket): ?>
                <div class="product-card">
                    <img src="<?php echo $jacket['img']; ?>" alt="<?php echo $jacket['alt']; ?>">
                    <span class="discount"><?php echo $jacket['discount']; ?></span>
                    <span class="deal-tag"><?php echo $jacket['deal']; ?></span>
                    <p class="price"><?php echo $jacket['price']; ?> <span class="old-price"><?php echo $jacket['old_price']; ?></span></p>
                    <p class="product-name"><?php echo $jacket['name']; ?></p>
                    <!-- Buy Now Button -->
                    <button class="btn-buy-now" onclick="buyNow('<?php echo $jacket['name']; ?>')">Buy Now</button>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="scroll-btn right-btn" onclick="scrollRight('product-container')">&#9654;</button>
    </div>
</div>

<script src="../JAVA/index.js"></script>
</body>
</html>
