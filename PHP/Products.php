<?php
header("Content-type: text/html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop'sheesh</title>
    <link rel="icon" href="../Images/lowgow.png" />
    <link rel="stylesheet" href="../css/product.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
</head>
<body>
    <header>
        <a href="#" class="logo"><i class="bx bxs-basket"></i><span class="shop-sheesh">Shop'sheesh</span></a>
        <ul class="nav-list">
            <?php
                $nav_items = ["Home" => "index.php", "Categories" => "#Category", "Products" => "#Product", "About" => "#About", "Contact" => "#Contact"];
                foreach ($nav_items as $name => $link) {
                    echo "<li><a href='$link' class='nav-link'>$name</a></li>";
                }
            ?>
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
            <span>Longadog Jr.</span>
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

    <div class="filters">
        <?php
            $filters = [
                "typeFilter" => ["Headphone Type", "over-ear" => "Over-Ear", "in-ear" => "In-Ear", "on-ear" => "On-Ear"],
                "priceFilter" => ["Price", "low" => "Low to High", "high" => "High to Low"],
                "reviewFilter" => ["Review", "high" => "High to Low", "low" => "Low to High"],
                "colorFilter" => ["Color", "black" => "Black", "white" => "White", "blue" => "Blue"]
            ];
            foreach ($filters as $id => $options) {
                echo "<select id='$id' onchange='filterProducts()'>";
                foreach ($options as $value => $label) {
                    echo "<option value='$value'>$label</option>";
                }
                echo "</select>";
            }
        ?>
    </div>

    <section class="products">
    <?php
        $products = [
            ["../Images/Product1.jpg", "Wireless Earbuds", "89", "black"],
            ["../Images/Product2.jpg", "AirPods Max", "559", "red"],
            ["../Images/Product3.jpg", "Bose BT Headphones", "299", "black"],
            ["../Images/Product4.jpg", "VIVEFOX Headphones", "99", "red"],
            ["../Images/Product5.jpg", "Sony Headphones", "150", "blue"]
            
        ];
        foreach ($products as $product) {
            echo "<div class='product-card' data-price='{$product[2]}' data-color='{$product[3]}'>";
            echo "<img src='{$product[0]}' alt='{$product[1]}'>";
            echo "<h3>{$product[1]}</h3>";
            echo "<p class='price'>\${$product[2]}.00</p>";
            echo "<div class='button-container'>";
            echo "<button class='btn-cart' onclick='addToCart(this)'>
            <box-icon name='cart-add' size='sm'></box-icon> Add to Cart
            </button>";
            echo "<button class='btn-detail'>
            <box-icon name='detail' size='sm' color='#ffffff'></box-icon> View Details
            </button>";
            echo "<button class='btn-favorite' onclick='addToFavorites(this)'>&hearts;</button>";
            echo "</div></div>";
        }
    ?>
</section>

    <script src="../JAVA/product.js"></script>  
</body>
</html>
