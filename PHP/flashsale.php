<?php
// Include the header file for navigation and user info
include("../DATA/header.php");
include("../DATA/productdata.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop'sheesh</title>
    <link rel="icon" href="../Images/lowgow.png" />
    <link rel="stylesheet" href="../css/flashsale.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<body>

<!-- Flash Sale Section -->
<div class="flash-sale">
    <div class="flash-sale-header">
        <h2>Fla<i class='bx bxs-zap'></i>h Sale</h2>
        <div class="timer" 
     id="countdown" 
     data-sale-start-time="<?php echo $nextMonday; ?>" 
     data-sale-end-time="<?php echo $nextFriday; ?>">
    On Sale Now! Ending in: <span>Loading...</span>
</div>
        <a href="flashsale.php" class="shop-all">SHOP ALL PRODUCTS</a>
    </div>

    <div class="flash-sale-products-wrapper">
        <div class="flash-sale-products">
            <?php foreach ($flashsales as $flashsale): ?>
                <div class="product">
                    <img src="<?php echo $flashsale['image']; ?>" alt="<?php echo $flashsale['name']; ?>" class="product-image">
                    <p class="product-name"><?php echo $flashsale['name']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Gadgets Section -->
<div class="deals-container">
    <h2>Gadgets <span>Hot Deals</span></h2>
    <div class="scroll-wrapper">
    <button class="scroll-btn left-btn" data-target="gadgets-container">&#9664;</button>
        <div class="gadgets-container">
            <?php foreach ($gadgets as $gadget): ?>
                <div class="product-card">
                    <img src="<?php echo $gadget['img']; ?>" alt="<?php echo $gadget['alt']; ?>">
                    <span class="discount"><?php echo $gadget['discount']; ?></span>
                    <p class="price"><?php echo $gadget['price']; ?> <span class="old-price"><?php echo $gadget['old_price']; ?></span></p>
                    <p class="product-name"><?php echo $gadget['name']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="scroll-btn right-btn" data-target="gadgets-container">&#9654;</button>
    </div>
</div>

<!-- Shirts for Men Section -->
<div class="deals-container">
    <h2>Shirts for Men <span>Fashion Sale</span></h2>
    <div class="scroll-wrapper">
    <button class="scroll-btn left-btn" data-target="shirts-container">&#9664;</button>  
        <div class="shirts-container">
            <?php foreach ($shirts as $shirt): ?>
                <div class="product-card">
                    <img src="<?php echo $shirt['img']; ?>" alt="<?php echo $shirt['alt']; ?>">
                    <span class="discount"><?php echo $shirt['discount']; ?></span>
                    <p class="price"><?php echo $shirt['price']; ?> <span class="old-price"><?php echo $shirt['old_price']; ?></span></p>
                    <p class="product-name"><?php echo $shirt['name']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="scroll-btn right-btn" data-target="shirts-container">&#9654;</button>
    </div>
</div>

<!-- Appliances Section -->
<div class="deals-container">
    <h2>Appliances <span>Big Savings</span></h2>
    <div class="scroll-wrapper">
    <button class="scroll-btn left-btn" data-target="appliances-container">&#9664;</button>     
        <div class="appliances-container">
            <?php foreach ($appliances as $appliance): ?>
                <div class="product-card">
                    <img src="<?php echo $appliance['img']; ?>" alt="<?php echo $appliance['alt']; ?>">
                    <span class="discount"><?php echo $appliance['discount']; ?></span>
                    <p class="price"><?php echo $appliance['price']; ?> <span class="old-price"><?php echo $appliance['old_price']; ?></span></p>
                    <p class="product-name"><?php echo $appliance['name']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="scroll-btn right-btn" data-target="appliances-container">&#9654;</button>
    </div>
</div>

<!-- Home Decor Section -->
<div class="deals-container">
    <h2>Home Decore <span>Style Your Space</span></h2>
    <div class="scroll-wrapper">
    <button class="scroll-btn left-btn" data-target="home-decor-container">&#9664;</button>
        <div class="home-decor-container">
            <?php foreach ($home_decor as $decor): ?>
                <div class="product-card">
                    <img src="<?php echo $decor['img']; ?>" alt="<?php echo $decor['alt']; ?>">
                    <span class="discount"><?php echo $decor['discount']; ?></span>
                    <p class="price"><?php echo $decor['price']; ?> <span class="old-price"><?php echo $decor['old_price']; ?></span></p>
                    <p class="product-name"><?php echo $decor['name']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="scroll-btn right-btn" data-target="home-decor-container">&#9654;</button>
    </div>
</div>

<script src="../JAVA/flashsale.js"></script>
<?php include("../DATA/footer.php"); ?>>
</body>
</html>