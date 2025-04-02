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
    <link rel="stylesheet" href="../css/product.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>

    <section class="home" id="home">
        <div class="overlay"></div>
        <div class="content">
            <h1>Welcome to <span class="shop-sheesh">Shop'sheesh</span></h1>
            <p>Your one-stop shop for the best tech & accessories!</p>
            <button class="btn">Shop Now</button>
        </div>
    </section>

    <div class="container">
        <!-- Filters Section -->
        <div class="filter-container">
            <button class="filter-toggle" onclick="toggleFilter()">Filter Products</button>

            <div class="filters">
                <h3>Filter Products</h3>
                <?php foreach ($filters as $id => $options): ?>
                    <select id="<?= $id ?>" onchange="filterProducts()">
                        <?php foreach ($options as $value => $label): ?>
                            <option value="<?= $value ?>"><?= htmlspecialchars($label) ?></option>
                        <?php endforeach; ?>
                    </select>
                <?php endforeach; ?>
                <button class="enter-btn">Enter</button>
            </div>
        </div>

        <!-- Product Section -->
        <section class="products">
            <?php foreach ($products as $product): ?>
                <div class="product-card" data-price="<?= $product[2] ?>" data-color="<?= $product[3] ?>">
                    <img src="<?= $product[0] ?>" alt="<?= htmlspecialchars($product[1]) ?>">
                    <h3><?= htmlspecialchars($product[1]) ?></h3>
                    <p class="price">$<?= $product[2] ?>.00</p>
                    <div class="button-container">
                        <button class="btn-cart" onclick="addToCart(this)">
                            <i class="bx bx-cart-add"></i> Add to Cart
                        </button>
                        <button class="btn-detail">
                            <i class="bx bx-show"></i> View Details
                        </button>
                        <button class="btn-favorite" onclick="addToFavorites(this)">&hearts;</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </div>

    <script src="../JAVA/product.js"></script>

    <?php include("../DATA/footer.php"); ?>>

</body>


</html>