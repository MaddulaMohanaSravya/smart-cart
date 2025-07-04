<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Comparison Tool</title>
    <style>
        /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

/* Header styling */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #007bff;
    padding: 20px 30px;
    color: white;
}

#website-logo {
    width: 200px; /* Proper size adjustment for the logo */
    height: auto;
}

header h1 {
    font-size: 28px; /* Matches desired title size */
    font-weight: bold;
    margin-left: 20px;
}

header p {
    display: none; /* Removed subtitle text */
}

.search-container {
    display: flex;
    align-items: center;
}

.search-bar {
    width: 400px; /* Larger width for search bar */
    height: 35px;
    padding: 5px 10px;
    border: none;
    border-radius: 5px 0 0 5px;
}

#search-icon {
    width: 35px;
    height: 35px;
    background-color: white;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
}

.auth-buttons button {
    font-size: 18px; /* Enlarged buttons */
    padding: 10px 20px;
    margin-left: 10px;
    background-color: white;
    color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.auth-buttons button:hover {
    background-color: #e7e7e7;
}


/* Center Form Elements Inside Modal */
form {
    display: flex;
    flex-direction: column;
    gap: 10px; /* Spacing between form fields */
}

/* Input Fields Styling */
form input {
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Buttons */
form button, button {
    padding: 10px;
    font-size: 14px;
    color: white;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    
}

form button:hover, button:hover {
    background-color: #0056b3;
}

/* Close Button */
button {
    margin-top: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

/* Background Overlay */
.modal-overlay {
    display: none; /* Hidden by default */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Lightened background */
    z-index: 1000; /* Below the modal */
}


/* Main Content Layout */
.main-content {
    display: flex;
    width: 100%;
    padding: 20px;
    gap: 20px;
}

/* Left Panel */
.left-panel {
    flex: 1;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    font-size: 16px;
    line-height: 1.8;
}

.left-panel h3 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #007bff;
}

.left-panel ul {
    list-style: none;
}

.left-panel ul li {
    margin-bottom: 10px;
}

.left-panel ul li strong {
    font-weight: bold;
}
.cart{
    margin: 30px;
}

/* Right Panel: Categories */
.categories {
    flex: 4;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.categories h2 {
    font-size: 22px;
    margin-bottom: 20px;
}

.category-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.category-card {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    width: calc(30% - 10px); /* Ensures cards fit properly */
    text-align: center;
    margin: 10px 0;
    padding: 10px;
    cursor: pointer;
    transition: transform 0.2s;
}

.category-card:hover {
    transform: scale(1.05);
}

.category-card img {
    width: 140px; /* Matches the larger size seen in the screenshot */
    height: 140px;
    object-fit: cover;
    margin-bottom: 10px;
}

.category-card p {
    font-size: 16px;
    font-weight: bold;
}
.footer {
    background-color: #007bff;
    color: white;
    text-align: center;
    display: flex;
    justify-content: center; /* Centers content horizontally */
    align-items: center; /* Centers content vertically */
    padding: 10px 0;
    margin-top: 20px;
}
/* Footer */
footer {
    text-align: center;
    padding: 20px;
    background-color: #007bff;
    color: white;
    margin-top: 20px;
}
footer p {
    margin: 10px 0;
    font-size: 14px;
}

footer a {
    color: white;
    text-decoration: underline;
}

footer a:hover {
    text-decoration: none;
}

</style>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="http://localhost/miniproject/photos/logo.png" alt="Website Logo" id="website-logo">
        </div>
        <h1>SMART CART</h1>
        <div class="search-container">
            <input class="search-bar" type="text" id="search-bar" placeholder="Search for products..." oninput="searchProducts()">
            <img class="search-icon" src="http://localhost/miniproject/photos/search-icon.png" alt="Search Icon" id="search-icon" onclick="searchProducts()">
        </div>
        <div class="auth-buttons">
            <button class="logout-button" onclick="window.location.href='index.php';">Log Out</button>
        </div>
    </header>
    <main class="main-content">
        <!-- Left Section: Compare, Predict, Save -->
        <section class="left-panel">
            <h3>Compare, Predict, and Save with Visual Insights</h3>
            <p>SmartCart helps you compare prices and vies real life product photos, making shopping smarter and easier</p>
            <img class = cart src="http://localhost/miniproject/photos/cart.png">
        </section>

        <!-- Right Section: Categories -->
        <section class="categories" id="categories">
            <h2>Shop by Categories</h2>
            <div class="category-container">
                <div class="category-card" onclick="location.href='http://localhost/miniproject/indexcos.php';">
                    <img src="http://localhost/miniproject/photos/cosmetics.png" alt="Cosmetics">
                    <p>Cosmetics</p>
                </div>
                <div class="category-card" onclick="location.href='http://localhost/miniproject/indexele.php';">
                    <img src="http://localhost/miniproject/photos/electronics.png" alt="Electronics">
                    <p>Electronics</p>
                </div>
                <div class="category-card" onclick="location.href='http://localhost/miniproject/indexfash.php';">
                    <img src="http://localhost/miniproject/photos/fashion.png" alt="Fashion">
                    <p>Fashion</p>
                </div>
                <div class="category-card" onclick="location.href='http://localhost/miniproject/indexhk.php';">
                    <img src="http://localhost/miniproject/photos/home-kitchen.png" alt="Home & Kitchen">
                    <p>Home & Kitchen</p>
                </div>
                <div class="category-card" onclick="location.href='http://localhost/miniproject/indexjew.php';">
                    <img src="http://localhost/miniproject/photos/jewellery.png" alt="Jewellery">
                    <p>Jewellery</p>
                </div>
                <div class="category-card" onclick="location.href='http://localhost/miniproject/indextoy.php';">
                    <img src="http://localhost/miniproject/photos/toys.png" alt="Jewellery">
                    <p>Toys</p>
                </div>
            </div>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 SMART CART. All rights reserved.</p>
        <p>
            SMART CART is your ultimate shopping companion, helping you compare prices, predict trends, and save on your favorite products.  
            For queries, reach out to us at <a href="mailto:support@smartcart.com" style="color: white; text-decoration: underline;">support@smartcart.com</a>.  
            Follow us on <a href="#" style="color: white; text-decoration: underline;">Facebook</a>,  
            <a href="#" style="color: white; text-decoration: underline;">Twitter</a>, and  
            <a href="#" style="color: white; text-decoration: underline;">Instagram</a>.
        </p>
    </footer>
</body>

</html>