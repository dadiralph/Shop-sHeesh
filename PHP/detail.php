<?php
include("../PHP/index.php");
require("../DATA/data.php");
require("../DATA/header.php");
require("../DATA/productdata.php");

// Get the selected product from URL
$productName = isset($_GET['product']) ? urldecode($_GET['product']) : null;
$selectedProduct = null;

// Find the selected product from the list
foreach ($products as $product) {
    if ($product['name'] === $productName) {
        $selectedProduct = $product;
        break;
    }
}

// If no product found, show error
if (!$selectedProduct) {
    die("Product not found.");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="icon" href="../Images/lowgow.png" />
    <link rel="stylesheet" href="../css/detail.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>

<main>
        
<section class="product-container">
        <div class="product-image">
            <img src="<?php echo $selectedProduct['img']; ?>" alt="<?php echo $selectedProduct['alt']; ?>">
        </div>
        <div class="product-details">
            <h2><?php echo $selectedProduct['name']; ?></h2>
            <div class="price-section">
                <p class="price">$<?php echo $selectedProduct['price']; ?></p>
                <p class="old-price">$<?php echo $selectedProduct['old_price']; ?></p>
            </div>
            <p class="deal"><?php echo $selectedProduct['deal']; ?></p>
            <button class="add-to-cart">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
        </div>
    </section>
        
    </main>


<?php include("../DATA/footer.php"); ?>>
</body>
</html>

