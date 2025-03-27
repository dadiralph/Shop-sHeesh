<div class="main-container">
        <aside class="filters">
            <h3>Filter Products</h3>
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
        </aside>


        $products = [
                ["../Images/Product1.jpg", "Wireless Earbuds", "89", "black"],
                ["../Images/Product2.jpg", "AirPods Max", "559", "red"],
                ["../Images/Product3.jpg", "Bose BT Headphones", "299", "black"],
                ["../Images/Product4.jpg", "VIVEFOX Headphones", "99", "red"],
                ["../Images/Product5.jpg", "Sony Headphones", "150", "blue"],
                ["../Images/Product6.jpg", "Beats Headphones", "349", "black"],
                ["../Images/Product7.jpg", "JBL Headphones", "199", "white"],
                ["../Images/Product8.jpg", "Sennheiser Headphones", "249", "black"],
                ["../Images/Product9.jpg", "Jabra Headphones", "179", "black"],
                ["../Images/Product10.jpg", "JBL Headphones", "199", "white"]


            ];