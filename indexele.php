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
    margin-bottom: 50px;
    width: 100%;
    height: auto;
    border-radius: 8px;
}
.Electronics{
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
            <img src="http://localhost/miniproject/photos/electronics.png" alt="Electronics Image">
            <h3 class = "Electronics">Electronics</h3>
        </section>

        <!-- Right Section: Product List -->
        <section class="products">
            <h2>Available Products</h2>
            <div class="product-list" style="display: flex; flex-direction: column; gap: 20px;">
        
                <!-- Product 1 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align: left;">IETS Supercharged Laptop Cooling pad</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/71mNXFjWXtL.AC_UY218.jpg" alt="IETS Supercharged Laptop Cooling pad" style="width: 150px;">
                        </div>
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.4)</p>
                            <p>Reviews: 26 reviews</p>
                            <p>
                                Price: ₹7661
                                <a href="https://www.amazon.com/sspa/click?ie=UTF8&spc=MToyNzE2ODc0Mjg2Mzc0MDA2OjE3MzUxMjU2NTk6c3BfYXRmOjMwMDQ5Nzc2NjI2MzMwMjo6MDo6&url=%2FIETS-Supercharged-Continuously-13-19inch-Filtration%2Fdp%2FB0DJ6N9YTL%2Fref%3Dsr_1_1_sspa%3Fcrid%3D8SK7DRXV1MRF%26dib%3DeyJ2I" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/elerew/ele1.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.1)</p>
                            <p>Reviews: 1,150 reviews</p>
                            <p>
                                Price: ₹1599
                                <a href="https://dl.flipkart.com/s/hHyBzFuuuN" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/elerew/ele1f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/elerew/ele1g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                </div>
        
                <!-- Product 2 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align: left;">Samsung Galaxy Tab A9+ Tablet 11” 64GB Android Tablet</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/61d46oYQgdL.AC_UY218.jpg" alt="Samsung Galaxy Tab A9+" style="width: 150px;">
                        </div>
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.5)</p>
                            <p>Reviews: 7927 reviews</p>
                            <p>
                                Price: ₹12,770
                                <a href="https://www.amazon.com/SAMSUNG-Android-Speakers-Upgraded-Graphite/dp/B0CLF3VPMV/ref=sr_1_2?crid=8SK7DRXV1MRF&dib=eyJ2IjoiMSJ9.J8tc8lESc5G2lPTTu96gzhi1rIq-cRHAqPvTiUhCrz25YS7iqtfc0ywpg1zWgMoBBVstsveVhRiF4D6Oi_c6UAAv5su1GnTE_FlT0C8AWZlXcz29sqvbUIkR6mtAzLAOB" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/elerew/ele2.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.4)</p>
                            <p>Reviews: 3,320 reviews</p>
                            <p>
                                Price: ₹15,999
                                <a href="https://dl.flipkart.com/dl/samsung-galaxy-tab-a9-4-gb-ram-64-rom-11-0-inch-wi-fi-only-tablet-graphite/p/itmf660d58032ed5?pid=TABGTF4GMVHXVG84&cmpid=product.share.pp&_refId=PP.d0b2a8da-3cb2-439a-8589-2ab0c0c53d73.TABGTF4GMVHXVG84&_appId=WA" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/elerew/ele2f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/elerew/ele2g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                </div>
        
                <!-- Product 3 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align: left;">Meta Quest 3S 128GB — Get Batman</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/61I3wFgn5rL.AC_UY218.jpg" alt="Meta Quest 3S" style="width: 150px;">
                        </div>
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.4)</p>
                            <p>Reviews: 1078 reviews</p>
                            <p>
                                Price: ₹30,000
                                <a href="https://www.amazon.com/Meta-Quest-3S-128GB-All-One/dp/B0DDK1WM9K/ref=sr_1_3?crid=8SK7DRXV1MRF&dib=eyJ2IjoiMSJ9.J8tc8lESc5G2lPTTu96gzhi1rIq-cRHAqPvTiUhCrz25YS7iqtfc0ywpg1zWgMoBBVstsveVhRiF4D6Oi_c6UAAv5su1GnTE_FlT0C8AWZlXcz29sqvbUIkR6mtAzLAOB0_g1r9YYwgP3uuN" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/elerew/ele3.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.4)</p>
                            <p>Reviews: 3,320 reviews</p>
                            <p>
                                Price: ₹59,990
                                <a href="https://dl.flipkart.com/s/RrZKbZNNNN" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/elerew/ele3f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/elerew/ele1g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                </div>
        
                <!-- Product 4 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align: left;">Bluetooth Speaker with HD Sound</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/81djh1gfUwL.AC_UY218.jpg" alt="Bluetooth Speaker" style="width: 150px;">
                        </div>
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.4)</p>
                            <p>Reviews: 18,764 reviews</p>
                            <p>
                                Price: ₹3404
                                <a href="https://www.amazon.com/Bluetooth-Waterproof-Playtime-Portable-Electronic/dp/B0BRKPVZB4/ref=sr_1_4?crid=8SK7DRXV1MRF&dib=eyJ2IjoiMSJ9.J8tc8lESc5G2lPTTu96gzhi1rIq-cRHAqPvTiUhCrz25YS7iqtfc0ywpg1zWgMoBBVstsveVhRiF4D6Oi_c6UAAv5su1GnTE_FlT0C8AWZlXcz29sqvbUIkR6m" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/elerew/ele4.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.4)</p>
                            <p>Reviews: 3,320 reviews</p>
                            <p>
                                Price: ₹483
                                <a href="https://dl.flipkart.com/s/hzhCikuuuN" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/elerew/ele4f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/elerew/ele2g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                </div>
        
                <!-- Product 5 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align: left;">LC-dolida Sleep Headphones</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/81hJ4SQSJFL.AC_UY218.jpg" alt="LC-dolida Sleep Headphones" style="width: 150px;">
                        </div>
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.2)</p>
                            <p>Reviews: 32,874 reviews</p>
                            <p>
                                Price: ₹2553
                                <a href="https://www.amazon.com/Headphones-Bluetooth-LC-dolida-Ultra-Thin-Meditation/dp/B07T6FNLQV/ref=sr_1_5?crid=8SK7DRXV1MRF&dib=eyJ2IjoiMSJ9.J8tc8lESc5G2lPTTu96gzhi1rIq-cRHAqPvTiUhCrz25YS7iqtfc0ywpg1zWgMoBBVstsveVhRiF4D6Oi_c6UAAv5su1GnTE_FlT0C8AWZlXcz29sqvbUIk" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/elerew/ele5.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.4)</p>
                            <p>Reviews: 3,320 reviews</p>
                            <p>
                                Price: ₹759
                                <a href="https://dl.flipkart.com/dl/modinity-bluetooth-headphones-perytong-skin-friendly-wireless-music-sleep-eye-mask/p/itm006e8c9ee5947?pid=EMKGP6HQBDQHNFMF&cmpid=product.share.pp&_refId=PP.8c11e65f-e85a-4aea-bb79-2b04a5f10caa.EMKGP6HQBDQHNFMF&_appId=WA" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/elerew/ele5f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/elerew/ele1g.jpg" alt="Flipkart Review Image" style="width: 250px;">
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