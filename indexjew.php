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
    margin-bottom: 20px;
    width: 100%;
    height: auto;
    border-radius: 8px;
}
.jew{
    text-align: center;
    color: #007bff;
}
/* Right Panel: Products */
.products {
    flex: 4;
    background-color: #fff;
    overflow-y: auto;
    height: 80vh;
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
            <img src="http://localhost/miniproject/photos/jewellery.png" alt="Fashion Image">
            <h3 class = "jew">Jewellery</h3>
        </section>

        <!-- Right Section: Product List -->
        <section class="products">
            <h2>Available Products</h2>
            <div class="product-list" style="display: flex; flex-direction: column; gap: 20px;">
                <!-- Product 1 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <!-- Title -->
                    <h3 style="text-align:left;">TRYNDI Necklace Gifts</h3>
                    <!-- Content -->
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <!-- Image -->
                        <div style="text-align: center; ">
                            <img src="https://m.media-amazon.com/images/I/6181Ls1lFWL.AC_UL320.jpg" alt="Verymiss Premium Makeup Foundation" style="width: 150px;">
                        </div>
                        <!-- Amazon Details -->
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.7)</p>
                            <p>Reviews: 417 reviews</p>
                            <p>
                                Price: ₹6907
                                <a href="https://www.amazon.com/sspa/click?ie=UTF8&spc=MTo1OTQ2MjM1MjgyNTY0MzU6MTczNTEyNjcwNDpzcF9hdGY6MzAwMDY0NDExODYyNDAyOjowOjo&url=%2FTRYNDI-Necklace-Gifts-Wife-Husband%2Fdp%2FB0BH36R7G5%2Fref%3Dsr_1_1_sspa%3Fcrid%3D16DVUP23A2ZD3%26dib%3DeyJ2IjoiMSJ9.kSceEfZHZ" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/jewrew/jew1.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <!-- Flipkart Details -->
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.1)</p>
                            <p>Reviews: 1,150 reviews</p>
                            <p>
                                Price: ₹479
                                <a href="https://www.flipkart.com/verymiss-premium-makeup-foundation/p/xyz" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/jewrew/jew1f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: left;">
                            <img src="http://localhost/miniproject/jewrew/jew1g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                </div>
        
                <!-- Product 2 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align:left;">DEARMAY Gold Bracelets</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="text-align: center;padding-top: 50px">
                            <img src="https://m.media-amazon.com/images/I/61olk363CTL.AC_UL320.jpg" alt="Makeup Kit" style="width: 150px;">
                        </div>
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.4)</p>
                            <p>Reviews: 2338 reviews</p>
                            <p>
                                Price: ₹1361
                                <a href="https://www.amazon.com/DEARMAY-Bracelets-Jewelry-Stackable-Paperclip/dp/B0C6PX9HK7/ref=sr_1_2?crid=16DVUP23A2ZD3&dib=eyJ2IjoiMSJ9.kSceEfZHZNQiCz-GA78Oac7IYy2PXO4MCAkUYETPKeQ_l3OWTavUrdQzspu9mkQWGpga3uAF0a_ug0OpeaGiLnlIB707mjYZeO6hCK81OdWljYCp7Iz5koJmHOLSr" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/jewrew/jew2.jpg" alt="Flipkart Review Image" style="width: 150px;">
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
                                <img src="http://localhost/miniproject/jewrew/jew2f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: left;">
                            <img src="http://localhost/miniproject/jewrew/jew2g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                </div>
        
                <!-- Product 3 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align: left;">Swarovski Infinity Heart Jewelry</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="text-align: center;padding-top: 75px">
                            <img src="https://m.media-amazon.com/images/I/61kApAhkziL.AC_UL320.jpg" alt="Makeup Kit" style="width: 150px;">
                        </div>
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.6)</p>
                            <p>Reviews: 11142 reviews</p>
                            <p>
                                Price: ₹7594
                                <a href="https://www.amazon.com/Swarovski-Infinity-Bracelet-Rose-Gold-Crystals/dp/B0814Y1G6Z/ref=sr_1_3?crid=16DVUP23A2ZD3&dib=eyJ2IjoiMSJ9.kSceEfZHZNQiCz-GA78Oac7IYy2PXO4MCAkUYETPKeQ_l3OWTavUrdQzspu9mkQWGpga3uAF0a_ug0OpeaGiLnlIB707mjYZeO6hCK81OdWljYCp7Iz5koJmHOLS" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/jewrew/jew3.jpg" alt="Flipkart Review Image" style="width: 150px;">
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
                                <img src="http://localhost/miniproject/jewrew/jew3f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: left;">
                            <img src="http://localhost/miniproject/jewrew/jew1g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                </div>
        
                <!-- Product 4 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align: left;">Rise From the Ashes Phoenix Necklace</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/71TK+4-S5TL.AC_UL320.jpg" alt="Makeup Kit" style="width: 150px;">
                        </div>
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.7)</p>
                            <p>Reviews: 3429 reviews</p>
                            <p>
                                Price: ₹3149
                                <a href="https://www.amazon.com/Kate-Lynn-Christmas-Necklaces-Anniversary/dp/B07QNTSKB9/ref=sr_1_5?crid=16DVUP23A2ZD3&dib=eyJ2IjoiMSJ9.kSceEfZHZNQiCz-GA78Oac7IYy2PXO4MCAkUYETPKeQ_l3OWTavUrdQzspu9mkQWGpga3uAF0a_ug0OpeaGiLnlIB707mjYZeO6hCK81OdWljYCp7Iz5koJmHOLSrMept" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/jewrew/jew5.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.4)</p>
                            <p>Reviews: 3,320 reviews</p>
                            <p>
                                Price: ₹1,259
                                <a href="#" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/jewrew/jew5f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: left;">
                            <img src="http://localhost/miniproject/jewrew/jew2g.jpg" alt="Flipkart Review Image" style="width: 250px;">
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