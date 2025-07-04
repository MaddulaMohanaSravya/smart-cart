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
    margin-top: 20px;
    width: 100%;
    height: auto;
    border-radius: 8px;
}
.hk{
    text-align: center;
    color: #007bff;
}
/* Right Panel: Products */
.products {
    flex: 4;
    overflow-y: auto;
    height:78vh;
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
                <button onclick="index.php">Log Out</button>
            <?php endif; ?>
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="main-content">
        <!-- Left Section: Compare, Predict, Save -->
        <section class="left-panel">
            <h2>Compare, Predict, Save</h2>
            <p>Compare, Predict, and Save with Visual Insights</p>
            <img src="http://localhost/miniproject/photos/home-kitchen.png" alt="Fashion Image">
            <h3 class = "hk">Home and Kitchen</h3>
        </section>

        <!-- Right Section: Product List -->
        <section class="products">
            <h2>Available Products</h2>
            <div class="product-list" style="display: flex; flex-direction: column; gap: 20px;">
                <!-- Product 1 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align:left;">VJoyJolt JoyFul 24pc</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/917BTSQCT6L.AC_UL320.jpg" alt="Product 1 Image" style="width: 150px;">
                        </div>
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.6)</p>
                            <p>Reviews: 15356 reviews</p>
                            <p>
                                Price: ₹3402
                                <a href="https://www.amazon.com/JoyJolt-Borosilicate-Containers-Airtight-Container/dp/B09N4ZKCH6/ref=sr_1_1?crid=3PB6Y0080KFOR&currency=INR&dib=eyJ2IjoiMSJ9.2q6doW9D0NPrAv_DrBJ00lb8YXEfmDqRdMkeCiy-VOj8Hu3tZP6FoAQa1opkunqFzw5_NwDEsmgfmwqwVgxNxskURWQjI4jJyHuN_NQP-su" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/hkrew/hk1.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.1)</p>
                            <p>Reviews: 1,150 reviews</p>
                            <p>
                                Price: ₹479
                                <a href="https://www.flipkart.com/verymiss-premium-makeup-foundation/p/xyz" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/hkrew/hk1f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/hkrew/hk1g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align:left;">Mixing Bowls with Airtight Lids Set</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/71XR3lo00cL.AC_UL320.jpg" alt="Product 2 Image" style="width: 150px;">
                        </div>
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.7)</p>
                            <p>Reviews: 1979 reviews</p>
                            <p>
                                Price: ₹3917
                                <a href="https://www.amazon.com/Airtight-Stainless-Attachments-Non-Slip-Bottoms/dp/B0BWHJ1FNK/ref=sr_1_2?crid=3PB6Y0080KFOR&currency=INR&dib=eyJ2IjoiMSJ9.2q6doW9D0NPrAv_DrBJ00lb8YXEfmDqRdMkeCiy-VOj8Hu3tZP6FoAQa1opkunqFzw5_NwDEsmgfmwqwVgxNxskURWQjI4jJyHuN_NQP-suy-j" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/hkrew/hk2.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.4)</p>
                            <p>Reviews: 3,320 reviews</p>
                            <p>
                                Price: ₹1,259
                                <a href="https://www.flipkart.com/makeup-kit-eyeshadows-highlighters/p/abc" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/hkrew/hk2f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/hkrew/hk2g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                </div>
        
                <!-- Product 3 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align: left;">Cook N Home Kitchen Cookware Sets</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/71E78wbAAzL.AC_UL320.jpg" alt="Product 3 Image" style="width: 150px;">
                        </div>
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.5)</p>
                            <p>Reviews: 8,112 reviews</p>
                            <p>
                                Price: ₹2,569
                                <a href="https://www.amazon.com/Cook-Home-12-Piece-Stainless-Cookware/dp/B0038KR8XG/ref=sr_1_3?crid=3PB6Y0080KFOR&currency=INR&dib=eyJ2IjoiMSJ9.2q6doW9D0NPrAv_DrBJ00lb8YXEfmDqRdMkeCiy-VOj8Hu3tZP6FoAQa1opkunqFzw5_NwDEsmgfmwqwVgxNxskURWQjI4jJyHuN_NQP-suy-j" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/hkrew/hk3.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.2)</p>
                            <p>Reviews: 5,890 reviews</p>
                            <p>
                                Price: ₹1,199
                                <a href="https://www.flipkart.com/cookware-kitchen-set/p/xyz" target="_blank">click here</a>
                            </p>
                            <div style="text-align:left;">
                                <img src="http://localhost/miniproject/hkrew/hk3f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/hkrew/hk1g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                </div>
        
                <!-- Product 4 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align:left;">Calphalon Nonstick Bakeware Set</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/71Y+XxNuquL.AC_UL320.jpg" alt="UP IN & OVER Splash & Play 100 Play Balls" alt="Product 4 Image" style="width: 150px;">
                        </div>
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.8)</p>
                            <p>Reviews: 12,389 reviews</p>
                            <p>
                                Price: ₹3,990
                                <a href="https://www.amazon.com/Calphalon-Nonstick-2-Piece-Bakeware-Sheet/dp/B072K54J1G" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/hkrew/hk4.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.3)</p>
                            <p>Reviews: 9,004 reviews</p>
                            <p>
                                Price: ₹2,200
                                <a href="https://www.flipkart.com/bakeware-nonstick-set/p/xyz" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/hkrew/hk4f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/hkrew/hk2g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                </div>
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