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
    width: 200px;
    height: auto;
}

header h1 {
    font-size: 28px;
    font-weight: bold;
    margin-left: 20px;
}

.search-container {
    display: flex;
    align-items: center;
}

.search-bar {
    width: 400px;
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

/* Auth Buttons */
.auth-buttons {
    display: flex;
    align-items: center;
}

.auth-buttons button {
    font-size: 18px;
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

.left-panel h2 {
    font-size: 22px;
    margin-bottom: 10px;
    color: #007bff;
}

.left-panel img {
    margin-top: 50px;
    width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 50px;
}
.Cosmetics{
    text-align: center;

    color: #007bff;
}
/* Right Panel: Products */
.products {
    flex: 4;
    overflow-y: auto;
    height: 70vh;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.products h2 {
    font-size: 22px;
    margin-bottom: 20px;
}

.product-list ul {
    list-style: none;
    padding: 0;
}

.product-list li {
    padding: 10px 0;
    border-bottom: 1px solid #ddd;
    font-size: 18px;
}

/* Footer */
footer {
    text-align: center;
    padding:20px;
    background-color: #007bff;
    color: white;
    margin-top: 10px;
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
    <!-- Header Section -->
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
            <?php if (isset($_SESSION['user'])): ?>
                <p> <?= htmlspecialchars($_SESSION['user']); ?></p>
                <button onclick="window.location.href='http://localhost/miniproject/index.php'">Log Out</button>
            <?php endif; ?>
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="main-content">
        <!-- Left Section: Compare, Predict, Save -->
        <section class="left-panel">
            <h2>Compare, Predict, Save</h2>
            <p>Compare, Predict, and Save with Visual Insights</p>
            <img src="http://localhost/miniproject/photos/cosmetics.png" alt="Cosmetics Image">
            <h3 class = "Cosmetics">Cosmetics</h3>
        </section>

        <!-- Right Section: Product List -->
        <section class="products">
            <h2>Available Products</h2>
            <div class="product-list" style="display: flex; flex-direction: column; gap: 20px;">
                <!-- Product 1 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <!-- Title -->
                    <h3 style="text-align:left;">Verymiss Premium Makeup Kit</h3>
                    <!-- Content -->
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <!-- Image -->
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/61Yeo9Sv0iL.AC_UL320.jpg" alt="Verymiss Premium Makeup Foundation" style="width: 150px;">
                        </div>
                        <!-- Amazon Details -->
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐ (3.6)</p>
                            <p>Reviews: 5 reviews</p>
                            <p>
                                Price: ₹649
                                <a href="https://www.amazon.in/sspa/click?ie=UTF8&spc=MToxMDMzOTA5NjIwOTM5ODEwOjE3MzQ3OTE0ODQ6c3BfYXRmX25leHQ6MzAwMzIwOTQxNzU1OTMyOjowOjo&url=%2FVerymiss-Premium-Makeup-Foundatin-Compact%2Fdp%2FB0D8W9NGJ8%2Fref%3Dsr_1_49_sspa%3Fcrid%3D2NN00M6WMSDNK%26dib%3DeyJ2Ijo" target="_blank">
                                    click here
                                </a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/cosrew/cos1.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <!-- Flipkart Details -->
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.1)</p>
                            <p>Reviews: 1,150 reviews</p>
                            <p>
                                Price: ₹479
                                <a href="https://www.flipkart.com/verymiss-premium-makeup-foundation/p/xyz" target="_blank">
                                    click here
                                </a>
                            </p>
                            <div style="text-align: left; padding-top: 20px;">
                                Review Image not Found..
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/cosrew/cos1g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                </div>
            
                <!-- Product 2 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align:left;">Colors Queen cat Walk Makeup kit </h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/71XZPrbve+L.AC_UL320.jpg" alt="Makeup Kit" style="width: 150px;">
                        </div>
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.2)</p>
                            <p>Reviews: 10 reviews</p>
                            <p>
                                Price: ₹899
                                <a href="https://www.amazon.in/sspa/click?ie=UTF8&spc=MToxMDMzOTA5NjIwOTM5ODEwOjE3MzQ3OTE0ODQ6c3BfYXRmX25leHQ6MzAwNDI1MDgwMDk0NzMyOjowOjo&url=%2FMakeup-Kit-Eyeshadows-Highlighters-Applicator%2Fdp%2FB0DGLMTFH6%2Fref%3Dsr_1_50_sspa%3Fcrid%3D2NN00M6WMSDNK%26dib%3DeyJ" target="_blank">
                                    click here
                                </a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/cosrew/cos2.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.4)</p>
                            <p>Reviews: 3,320 reviews</p>
                            <p>
                                Price: ₹200
                                <a href="t https://dl.flipkart.com/s/RrHX3BNNNN" target="_blank">
                                    click here
                                </a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/cosrew/cos2f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/cosrew/cos2g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                    <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                        <h3 style="text-align: left;">Whimsy 7 pcs Organic Beauty Kit</h3>
                        <div style="display: flex; gap: 20px; align-items: flex-start;">
                            <div style="text-align: center;">
                                <img src="https://m.media-amazon.com/images/I/61a+CgDXLqL.AC_UL320.jpg" alt="Makeup Kit" style="width: 150px;">
                            </div>
                            <div style="flex: 1;">
                                <h4>Amazon</h4>
                                <p>Rating: ⭐⭐⭐⭐ (4.2)</p>
                                <p>Reviews: 64 reviews</p>
                                <p> Price: ₹1150
                                    <a href="https://www.amazon.in/sspa/click?ie=UTF8&spc=MToxMDMzOTA5NjIwOTM5ODEwOjE3MzQ3OTE0ODQ6c3BfYXRmX25leHQ6MzAwMDg0Nzk5NTIyODMyOjowOjo&url=%2FWhimsy-Friendly-Birthday-Non-Toxic-Accessory%2Fdp%2FB0BZ8T2ZMV%2Fref%3Dsr_1_51_sspa%3Fcrid%3D2NN00M6WMSDNK%26dib%3DeyJ2" target="_blank">
                                        click here</a>
                                </p>
                                <div style="text-align: left;">
                                    <img src="http://localhost/miniproject/cosrew/cos3.jpg" alt="Flipkart Review Image" style="width: 150px;">
                                </div>
                            </div>
                            <div style="flex: 1;">
                                <h4>Flipkart</h4>
                                <p>Rating: ⭐⭐⭐⭐ (4.4)</p>
                                <p>Reviews: 3,320 reviews</p>
                                <p>
                                    Price: ₹1,259
                                    <a href="https://www.flipkart.com/makeup-kit-eyeshadows-highlighters/p/abc" target="_blank">
                                        click here
                                    </a>
                                </p>
                                <div style="text-align: left;">
                                    <img src="http://localhost/miniproject/cosrew/cos3f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                                </div>
                            </div>
                            <div style="text-align: center;">
                                <img src="http://localhost/miniproject/cosrew/cos1g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                            </div>
                        </div>
                        <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                            <h3 style="text-align: left;">Spekta Bridal Makeup Kit</h3>
                            <div style="display: flex; gap: 20px; align-items: flex-start;">
                                <div style="text-align: center;">
                                    <img src="https://m.media-amazon.com/images/I/51g2unDLuDL.AC_UL320.jpg" alt="Makeup Kit" style="width: 150px;">
                                </div>
                                <div style="flex: 1;">
                                    <h4>Amazon</h4>
                                    <p>Rating: ⭐⭐⭐⭐ (4.5)</p>
                                    <p>Reviews: 29 reviews</p>
                                    <p>
                                        Price: ₹999
                                        <a href="https://www.amazon.in/sspa/click?ie=UTF8&spc=MToxMDMzOTA5NjIwOTM5ODEwOjE3MzQ3OTE0ODQ6c3BfYXRmX25leHQ6MzAwMjY1Njg1NDU4MzMyOjowOjo&url=%2FSpekta-Bridal-Makeup-Women-products%2Fdp%2FB0CX5B52QL%2Fref%3Dsr_1_52_sspa%3Fcrid%3D2NN00M6WMSDNK%26dib%3DeyJ2IjoiMSJ9." target="_blank">
                                            click here
                                        </a>
                                    </p>
                                    <div style="text-align: left;">
                                        <img src="http://localhost/miniproject/cosrew/cos4.jpg" alt="Flipkart Review Image" style="width: 150px;">
                                    </div>
                                </div>
                                <div style="flex: 1;">
                                    <h4>Flipkart</h4>
                                    <p>Rating: ⭐⭐⭐⭐ (4.4)</p>
                                    <p>Reviews: 3,320 reviews</p>
                                    <p>
                                        Price: ₹1,259
                                        <a href="https://www.flipkart.com/makeup-kit-eyeshadows-highlighters/p/abc" target="_blank">
                                            click here
                                        </a>
                                    </p>
                                    <div style="text-align: left;">
                                        <img src="http://localhost/miniproject/cosrew/cos4f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                                    </div>
                                </div>
                                <div style="text-align: center;">
                                    <img src="http://localhost/miniproject/cosrew/cos2g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                                </div>
                            </div>
                </div>
            
                <!-- Repeat for Products 3 and 4 -->
            </div>
            
        </section>
    </main>

    <!-- Footer Section -->
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

    <script src="script.js"></script>
</body>
</html>