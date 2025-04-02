<?php
// footer.php

// Include data.php file to use the dynamic content
include('data.php');
?>

<footer>
    <div class="footer-top">
        <div class="promo-banners">
            <img src="../Images/banner1.jpg" alt="Cash-in to Win">
            <img src="../Images/banner2.jpg" alt="Installment Plans">
            <img src="../Images/banner3.jpg" alt="Save More">
        </div>
    </div>
    <div class="footer-middle">
        <div class="customer-care">
            <h4>Customer Care</h4>
            <ul>
                <?php foreach ($customerCareLinks as $linkText => $linkUrl): ?>
                    <li><a href="<?= $linkUrl ?>"><?= $linkText ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="about-Shopsheesh">
            <h4>Shop'sheesh</h4>
            <ul>
                <?php foreach ($ShopsheeshLinks as $linkText => $linkUrl): ?>
                    <li><a href="<?= $linkUrl ?>"><?= $linkText ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="app-download">
            <h4>Always Better</h4>
            <a href="#"><img src="../Images/appstore.jpg" alt="App Store"></a>
            <a href="#"><img src="../Images/playstore.jpg" alt="Google Play"></a>
            <a href="#"><img src="../Images/appgal.jpg" alt="App Gallery"></a>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="payment-methods">
            <h4>Payment Methods</h4>
            <?php foreach ($paymentMethods as $methodName => $methodImage): ?>
                <img src="<?= $methodImage ?>" alt="<?= $methodName ?>">
            <?php endforeach; ?>
        </div>
        <div class="delivery-services">
            <h4>Delivery Services</h4>
            <?php foreach ($deliveryServices as $serviceName => $serviceImage): ?>
                <img src="<?= $serviceImage ?>" alt="<?= $serviceName ?>">
            <?php endforeach; ?>
        </div>
        <div class="verified-by">
            <h4>Verified by</h4>
            <?php foreach ($verifiedBy as $certification => $certImage): ?>
                <img src="<?= $certImage ?>" alt="<?= $certification ?>">
            <?php endforeach; ?>
        </div>
    </div>

    <div class="footer-legal">
        <p>&copy; 2025 Shop'sheesh. All rights reserved.</p>
        <p class="terms">
            <a href="#">Terms of Service</a> | <a href="#">Privacy Policy</a>
        </p>
        <p>Follow us on:
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-youtube'></i></a>
        </p>
        <p>Country Available:</p>
        <p>
            <a href="#"><span class="flag"><img src="../Images/us-icon.png"></span></a>
            <a href="#"><span class="flag"><img src="../Images/uk-icon.png"></span></a>
            <a href="#"><span class="flag"><img src="../Images/fr-icon.png"></span></a>
            <a href="#"><span class="flag"><img src="../Images/de-icon.png"></span></a>
        </p>

    </div>

</footer>