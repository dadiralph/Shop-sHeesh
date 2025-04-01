<?php
include("../DATA/data.php");
include("../DATA/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="icon" href="../Images/lowgow.png" />
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
   

    <div class="banner">
        <div class="slider">
            <?php foreach ($banners as $index => $banner) { ?>
                <div class="slide <?php echo $index === 0 ? 'active' : ''; ?>">
                    <div class="content">
                        <h2>Latest Smartphone Deals</h2>
                        <h3><?php echo $banner["name"]; ?></h3>
                        <p>Yours at <strong><?php echo $banner["price_per_month"]; ?></strong> per month</p>
                        <p><?php echo $banner["offer"]; ?></p>
                        <div class="freebies">
                            <span>EXCLUSIVE FREEBIES:</span>
                            <?php foreach ($banner["freebies"] as $freebie) { ?>
                                <span class="badge"><?php echo $freebie; ?></span>
                            <?php } ?>
                        </div>
                        <a href="<?php echo $banner["shop_link"]; ?>" class="shop-btn">Shop Now</a>
                    </div>
                    <div class="image">
                        <img src="<?php echo $banner["image"]; ?>" alt="<?php echo $banner["name"]; ?>">
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- Left and Right Navigation Buttons -->
        <button class="prev-btn">&#10094;</button>
        <button class="next-btn">&#10095;</button>

        <!-- Indicators -->
        <div class="indicators">
            <?php foreach ($banners as $index => $banner) { ?>
                <span class="indicator <?php echo $index === 0 ? 'active' : ''; ?>"></span>
            <?php } ?>
        </div>
    </div>

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
            <h2>Fla<i class='bx bxs-zap'></i>h Sale</h2>
            <div class="timer" id="countdown" data-sale-start-time="<?php echo $nextMonday; ?>" data-sale-end-time="<?php echo $nextFriday; ?>">
                On Sale Now! Ending in: <span>Loading...</span>
            </div>
            <a href="Products.php" class="shop-all">SHOP ALL PRODUCTS</a>
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
        <h2 class="h2-head">Deals on <Span>PCs and gaming</Span></h2>
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
    < <div class="deals-container">
        <h2 class="jacket">Jackets <span>Mega Discount</span></h2>
        <div class="scroll-wrapper">
            <button class="scroll-btn left-btn" onclick="scrollLeft('jacket-container')">&#9664;</button>
            <div class="jacket-container" id="jacket-container">
                <?php foreach ($jackets as $jacket): ?>
                    <div class="product-card">
                        <img src="<?php echo $jacket['img']; ?>" alt="<?php echo $jacket['alt']; ?>">
                        <span class="discount"><?php echo $jacket['discount']; ?></span>
                        <span class="deal-tag"><?php echo $jacket['deal']; ?></span>
                        <p class="price"><?php echo $jacket['price']; ?> <span class="old-price"><?php echo $jacket['old_price']; ?></span></p>
                        <p class="product-name"><?php echo $jacket['name']; ?></p>
                        <button class="btn-buy-now" onclick="buyNow('<?php echo $jacket['name']; ?>')">Buy Now</button>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="scroll-btn right-btn" onclick="scrollRight('jacket-container')">&#9654;</button>
        </div>
        </div>

        <script src="../JAVA/index.js"></script>
</body>

</html>