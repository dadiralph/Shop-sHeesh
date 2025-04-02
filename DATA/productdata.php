<?php

// Define filters
$filters = [
    "typeFilter" => ["Headphone Type", "over-ear" => "Over-Ear", "in-ear" => "In-Ear", "on-ear" => "On-Ear"],
    "priceFilter" => ["Price", "low" => "Low to High", "high" => "High to Low"],
    "reviewFilter" => ["Review", "high" => "High to Low", "low" => "Low to High"],
    "colorFilter" => ["Color", "black" => "Black", "white" => "White", "blue" => "Blue"]
];

// Define products
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
$dropdowns = [
    'Motor Parts',
    'Home Decore',
    'Gadgets',
    'Appliances',
    'Computer Parts',
    'Shoes',
    'Jackets'
];

$flashsales = [
    ["image" => "../Images/laptop.jpg", "name" => "Gaming laptop"],
    ["image" => "../Images/mechkey.jpg", "name" => "Mechanical Keyboard"],
    ["image" => "../Images/mouse.jpg", "name" => "Wireless Mouse"],
    ["image" => "../Images/gamechair.jpg", "name" => "Gaming Chair"],
    ["image" => "../Images/monitor.jpg", "name" => "Curved Monitor"],
    ["image" => "../Images/headset.jpg", "name" => "Gaming Headset"],
    ["image" => "../Images/pad.jpg", "name" => "RGB Mousepad"],
    ["image" => "../Images/desk.jpg", "name" => "Gaming Desk"],
    ["image" => "../Images/cam.jpg", "name" => "Webcam"]
];

$gadgets = [
    ["img" => "../Images/set1.jpg", "alt" => "Smartwatch", "discount" => "20% OFF", "deal" => "Limited Time", "price" => "$199", "old_price" => "$250", "name" => "Smartwatch Pro"],
    ["img" => "../Images/set1.jpg", "alt" => "Bluetooth Earbuds", "discount" => "15% OFF", "deal" => "Today Only", "price" => "$85", "old_price" => "$100", "name" => "Bluetooth Earbuds"],
    ["img" => "../Images/set2.jpg", "alt" => "VR Headset", "discount" => "30% OFF", "deal" => "Weekend Deal", "price" => "$299", "old_price" => "$400", "name" => "VR Headset 360"],
    ["img" => "../Images/set3.jpg", "alt" => "Portable Speaker", "discount" => "25% OFF", "deal" => "Limited Stock", "price" => "$120", "old_price" => "$160", "name" => "Portable Speaker"],
    ["img" => "../Images/set4.jpg", "alt" => "Action Camera", "discount" => "40% OFF", "deal" => "Special Deal", "price" => "$150", "old_price" => "$250", "name" => "Action Camera HD"],
    ["img" => "../Images/set5.jpg", "alt" => "Smart Home Hub", "discount" => "10% OFF", "deal" => "New Arrival", "price" => "$80", "old_price" => "$90", "name" => "Smart Home Hub"],
    ["img" => "../Images/set6.jpg", "alt" => "Wireless Charger", "discount" => "15% OFF", "deal" => "Flash Sale", "price" => "$30", "old_price" => "$35", "name" => "Wireless Charger"],
    ["img" => "../Images/set7.jpg", "alt" => "Fitness Tracker", "discount" => "20% OFF", "deal" => "Best Seller", "price" => "$50", "old_price" => "$60", "name" => "Fitness Tracker"],
    ["img" => "../Images/set8.jpg", "alt" => "Smart Thermostat", "discount" => "25% OFF", "deal" => "Limited Time", "price" => "$120", "old_price" => "$160", "name" => "Smart Thermostat"],
    ["img" => "../Images/set9.jpg", "alt" => "Wireless Earbuds", "discount" => "30% OFF", "deal" => "Best Price", "price" => "$70", "old_price" => "$100", "name" => "Wireless Earbuds Pro"]
];

$shirts = [
    ["img" => "../Images/set7.jpg", "alt" => "Casual Shirt", "discount" => "10% OFF", "deal" => "Limited Time", "price" => "$35", "old_price" => "$40", "name" => "Casual Shirt"],
    ["img" => "../Images/set6.jpg", "alt" => "Polo Shirt", "discount" => "15% OFF", "deal" => "New Arrival", "price" => "$45", "old_price" => "$55", "name" => "Classic Polo"],
    ["img" => "../Images/set4.jpg", "alt" => "Denim Jacket", "discount" => "30% OFF", "deal" => "Hot Sale", "price" => "$60", "old_price" => "$85", "name" => "Denim Jacket"],
    ["img" => "../Images/set12.jpg", "alt" => "Formal Shirt", "discount" => "20% OFF", "deal" => "Best Seller", "price" => "$50", "old_price" => "$65", "name" => "Formal Shirt"],
    ["img" => "../Images/set5.jpg", "alt" => "Graphic Tee", "discount" => "25% OFF", "deal" => "Flash Sale", "price" => "$25", "old_price" => "$30", "name" => "Graphic Tee"],
    ["img" => "../Images/set6.jpg", "alt" => "Hoodie", "discount" => "15% OFF", "deal" => "Weekend Deal", "price" => "$40", "old_price" => "$50", "name" => "Comfort Hoodie"],
    ["img" => "../Images/set22.jpg", "alt" => "Flannel Shirt", "discount" => "20% OFF", "deal" => "Limited Stock", "price" => "$55", "old_price" => "$70", "name" => "Flannel Shirt"],
    ["img" => "../Images/set19.jpg", "alt" => "Turtleneck Sweater", "discount" => "30% OFF", "deal" => "Best Price", "price" => "$70", "old_price" => "$100", "name" => "Turtleneck Sweater"],
    ["img" => "../Images/set18.jpg", "alt" => "Short Sleeve Shirt", "discount" => "10% OFF", "deal" => "New Arrival", "price" => "$30", "old_price" => "$35", "name" => "Short Sleeve Shirt"],
    ["img" => "../Images/set15.jpg", "alt" => "Long Sleeve Shirt", "discount" => "15% OFF", "deal" => "Best Seller", "price" => "$45", "old_price" => "$50", "name" => "Long Sleeve Shirt"]
];

$appliances = [
    ["img" => "../Images/set12.jpg", "alt" => "Air Fryer", "discount" => "35% OFF", "deal" => "Today Only", "price" => "$99", "old_price" => "$150", "name" => "Air Fryer Pro"],
    ["img" => "../Images/set11.jpg", "alt" => "Microwave Oven", "discount" => "20% OFF", "deal" => "Limited Stock", "price" => "$180", "old_price" => "$230", "name" => "Microwave Oven"],
    ["img" => "../Images/set10.jpg", "alt" => "Blender", "discount" => "15% OFF", "deal" => "Best Price", "price" => "$50", "old_price" => "$60", "name" => "High-Speed Blender"],
    ["img" => "../Images/set1.jpg", "alt" => "Coffee Maker", "discount" => "25% OFF", "deal" => "Flash Sale", "price" => "$70", "old_price" => "$90", "name" => "Coffee Maker Pro"],
    ["img" => "../Images/set8.jpg", "alt" => "Vacuum Cleaner", "discount" => "30% OFF", "deal" => "Weekend Deal", "price" => "$120", "old_price" => "$170", "name" => "Robot Vacuum"],
    ["img" => "../Images/set18.jpg", "alt" => "Electric Kettle", "discount" => "10% OFF", "deal" => "New Arrival", "price" => "$40", "old_price" => "$45", "name" => "Electric Kettle"],
    ["img" => "../Images/set17.jpg", "alt" => "Toaster Oven", "discount" => "20% OFF", "deal" => "Limited Time", "price" => "$60", "old_price" => "$75", "name" => "Toaster Oven"],
    ["img" => "../Images/set12.jpg", "alt" => "Food Processor", "discount" => "15% OFF", "deal" => "Best Seller", "price" => "$80", "old_price" => "$95", "name" => "Food Processor"],
    ["img" => "../Images/set19.jpg", "alt" => "Stand Mixer", "discount" => "25% OFF", "deal" => "Hot Sale", "price" => "$150", "old_price" => "$200", "name" => "Stand Mixer"],
    ["img" => "../Images/set20.jpg", "alt" => "Slow Cooker", "discount" => "30% OFF", "deal" => "Best Price", "price" => "$70", "old_price" => "$100", "name" => "Slow Cooker"]
    
];

$home_decor = [
    ["img" => "../Images/set21.jpg", "alt" => "Wall Art", "discount" => "25% OFF", "deal" => "Style Your Home", "price" => "$45", "old_price" => "$60", "name" => "Canvas Wall Art"],
    ["img" => "../Images/set14.jpg", "alt" => "LED Lamps", "discount" => "15% OFF", "deal" => "Modern Style", "price" => "$25", "old_price" => "$35", "name" => "Smart LED Lamp"],
    ["img" => "../Images/set13.jpg", "alt" => "Throw Pillows", "discount" => "20% OFF", "deal" => "Comfort & Style", "price" => "$30", "old_price" => "$40", "name" => "Decorative Throw Pillows"],
    ["img" => "../Images/set12.jpg", "alt" => "Rug", "discount" => "30% OFF", "deal" => "Cozy Home", "price" => "$80", "old_price" => "$115", "name" => "Area Rug"],
    ["img" => "../Images/set11.jpg", "alt" => "Curtains", "discount" => "10% OFF", "deal" => "Elegant Look", "price" => "$50", "old_price" => "$55", "name" => "Blackout Curtains"],
    ["img" => "../Images/set10.jpg", "alt" => "Wall Clock", "discount" => "15% OFF", "deal" => "Timeless Design", "price" => "$40", "old_price" => "$50", "name" => "Vintage Wall Clock"],
    ["img" => "../Images/set9.jpg", "alt" => "Table Lamp", "discount" => "20% OFF", "deal" => "dino","price" => "$35", "old_price" => "$45", "name" => "Modern Table Lamp"],
    ["img" => "../Images/set2.jpg", "alt" => "Decorative Vases", "discount" => "25% OFF", "deal" => "", "price" => "$20", "old_price" => "$30", "name" => "Ceramic Vases"],
    ["img" => "../Images/set3.jpg", "alt" => "Wall Shelves", "discount" => "30% OFF", "deal" => "waps", "price" => "$60", "old_price" => "$85", "name" => "Floating Wall Shelves"],
    ["img" => "../Images/set12.jpg", "alt" => "Indoor Plants", "discount" => "15% OFF", "deal" => "stol", "price" => "$15", "old_price" => "$20", "name" => "Artificial Indoor Plants"]
];



// Set the timezone to EST (Eastern Standard Time)
date_default_timezone_set('America/New_York');

// Calculate next Monday at 9 AM
$nextMonday = strtotime("next monday 09:00:00") * 1000; // Convert to milliseconds for JS

// Calculate next Friday at 6 PM
$nextFriday = strtotime("next friday 18:00:00") * 1000; // Convert to milliseconds for JS

?>