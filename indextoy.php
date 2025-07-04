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
    margin-bottom: 30px;
    width: 100%;
    height: auto;
    border-radius: 8px;
}
.Cosmetics{
    text-align: center;
    color: #007bff;
}
/* Right Panel: Products */
.products {
    flex: 4;
    overflow-y: auto;
    height: 85vh;
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
            <img src="http://localhost/miniproject/photos/toys.png" alt="Electronics Image">
            <h3 class = "Cosmetics">Toys</h3>
        </section>

        <!-- Right Section: Product List -->
        <section class="products">
            <h2>Available Products</h2>
            <div class="product-list" style="display: flex; flex-direction: column; gap: 20px;">
                <!-- Product 1 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align:left;">UP IN & OVER Splash & Play 100 Play Balls</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <!-- Image -->
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/91+dWYJXKCL.AC_UL320.jpg" alt="UP IN & OVER Splash & Play 100 Play Balls" style="width: 150px;">
                        </div>
                        <!-- Amazon Details -->
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.5)</p>
                            <p>Reviews: 3,382 reviews</p>
                            <p>
                                Price: ₹1,702.57
                                <a href="https://www.amazon.com/Bestway-OVER-Splash-Play-Balls/dp/B003OW5H0O/ref=sr_1_1?crid=1D3OZT93B8NM5&dib=eyJ2IjoiMSJ9.MIdWEbJouFhBLnXVYrg91GuG6jIztD6gDH65yR5g49APTNGlW5tcmsOT0YvkQIV-GfQwIuHa4oAzLXKdeMxSoZJnSgAnbOn5lQUP5BLD4MlByP6jODnXyP4lEyqof7snqGKVk3UsSQ2q" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/toyrew/toy1.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <!-- Flipkart Details -->
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.2)</p>
                            <p>Reviews: 15 reviews</p>
                            <p>
                                Price: ₹859
                                <a href="https://www.flipkart.com/maanit-big-ball-pool-tub-free-50-balls/p/itmaa810c9848f66?pid=OTYFVY4WJSPDNP4S&lid=LSTOTYFVY4WJSPDNP4SD9SZRN&marketplace=FLIPKART&q=play+balls&store=tng%2Flhf&srno=s_1_6&otracker=AS_QueryStore_OrganicAutoSuggest_1_10_na_na_na&otracker1=AS_QueryStore_OrganicAutoSuggest_1_10_na_na_na&fm=search-autosuggest&iid=6d4ac99d-0523-40d4-9d00-a6e65f900600.OTYFVY4WJSPDNP4S.SEARCH&ppt=sp&ppn=sp&ssid=zqftypc8s00000001735143106518&qH=c1c1e678bb76715a" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/toyrew/toy1f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/toyrew/toy1g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                </div>
        
                <!-- Product 2 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align:left;">H2OGO! Inflatable Beach Ball 16"</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <!-- Image -->
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/817DtPtO4gL.AC_UL320.jpg" alt="Toys" style="width: 150px;">
                        </div>
                        <!-- Amazon Details -->
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.2)</p>
                            <p>Reviews: 475 reviews</p>
                            <p>
                                Price: ₹428.86
                                <a href="https://www.amazon.com/H2OGO-Inflatable-Beach-Ball-16/dp/B003Y8KANM/ref=sr_1_3?crid=1D3OZT93B8NM5&dib=eyJ2IjoiMSJ9.MIdWEbJouFhBLnXVYrg91GuG6jIztD6gDH65yR5g49APTNGlW5tcmsOT0YvkQIV-GfQwIuHa4oAzLXKdeMxSoZJnSgAnbOn5lQUP5BLD4MlByP6jODnXyP4lEyqof7snqGKVk3UsSQ2q" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/toyrew/toy2.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <!-- Flipkart Details -->
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐ (2.9)</p>
                            <p>Reviews: 7 reviews</p>
                            <p>
                                Price: ₹398
                                <a href="https://www.flipkart.com/vibgyor-products-beach-ball-swimming-soccer-soft-volleyball-kids-game-rainbow-balls-inflatable/p/itmd6820bedda05e?pid=IFPGN3C6QVV8TXYV&lid=LSTIFPGN3C6QVV8TXYVRFKANK&marketplace=FLIPKART&q=beach+ball&store=search.flipkart.com&srno=s_1_6&otracker=search&otracker1=search&fm=Search&iid=68f8f1f5-4e87-4e8b-ac8e-9b5ad805e1a1.IFPGN3C6QVV8TXYV.SEARCH&ppt=sp&ppn=sp&ssid=ufxe20elz40000001735143377678&qH=1c49d03945610f17" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/toyrew/toy2f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/toyrew/toy2g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                </div>
        
                <!-- Product 3 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align: left;">TEKFUN LCD Writing Tablet Doodle Board</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/71vU5Trr9PL.AC_UL320.jpg" alt="Toys" style="width: 150px;">
                        </div>
                        <!-- Amazon Details -->
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.6)</p>
                            <p>Reviews: 23,505 reviews</p>
                            <p>
                                Price: ₹1,701.99
                                <a href="https://www.amazon.com/sspa/click?ie=UTF8&spc=MTo2NTQwMTkyMjQ4NTQ2NzcxOjE3MzUxMjYzMjU6c3BfYnRmOjMwMDU2OTg5MjE1NDgwMjo6MDo6&url=%2FTEKFUN-Writing-Tablet-Colorful-Drawing%2Fdp%2FB085NDS2R8%2Fref%3Dsr_1_17_sspa%3Fcrid%3D1D3OZT93B8NM5%26dib%3DeyJ2IjoiMSJ9.MId" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/toyrew/toy3.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <!-- Flipkart Details -->
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.0)</p>
                            <p>Reviews: 379 reviews</p>
                            <p>
                                Price: ₹726
                                <a href="https://www.flipkart.com/moozmob-child-writing-tab-kids-tablet-pen-drawing-combo-pack-4/p/itme7b9db4db4fcc?pid=ETYGHFNPESAGPHZ4&lid=LSTETYGHFNPESAGPHZ4T4BXAP&marketplace=FLIPKART&q=Writing+tablet+doodle+board&store=tng%2Ffkw%2Fcz8&srno=s_1_3&otracker=search&fm=Search&iid=12e8ec51-b3b1-455b-88ec-1de0b7098294.ETYGHFNPESAGPHZ4.SEARCH&ppt=sp&ppn=sp&ssid=nri83sxphs0000001735143963673&qH=ba4e49b611de0ad0" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/toyrew/toy3f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/toyrew/toy1g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                </div>
        
                <!-- Product 4 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align: left;">Magnet Robot Toy</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/719Byy6qGGL.AC_UL320.jpg" alt="Toys" style="width: 150px;">
                        </div>
                        <!-- Amazon Details -->
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.3)</p>
                            <p>Reviews: 32 reviews</p>
                            <p>
                                Price: ₹2,553.41
                                <a href="https://www.amazon.com/sspa/click?ie=UTF8&spc=MTo2NTQwMTkyMjQ4NTQ2NzcxOjE3MzUxMjYzMjU6c3BfbXRmOjMwMDU5MDM1NzM3MzMwMjo6MDo6&url=%2FMSKOLER-Magnet-Robot-Years-Boys%2Fdp%2FB0D9PVTDTS%2Fref%3Dsr_1_11_sspa%3Fcrid%3D1D3OZT93B8NM5%26dib%3DeyJ2IjoiMSJ9.MIdWEbJouF" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/toyrew/toy4.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <!-- Flipkart Details -->
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.5)</p>
                            <p>Reviews: 6 reviews</p>
                            <p>
                                Price: ₹1,899
                                <a href="https://www.flipkart.com/kiditos-magnetic-sticks-building-blocks-educational-toys-kids-age-3-years-84-pcs/p/itm819067fba9f19?pid=BLCGVG8HUSWQHGPG&lid=LSTBLCGVG8HUSWQHGPGBJEINE&marketplace=FLIPKART&q=Magnet+Robot+Toys+-+Magnet+Stacking+Transform+Toy+for+Kids+with+Storage+Box&store=tng&srno=s_1_4&otracker=search&otracker1=search&fm=Search&iid=862f5dde-6636-4099-9eeb-74b262460c01.BLCGVG8HUSWQHGPG.SEARCH&ppt=sp&ppn=sp&ssid=6qtgnouq740000001735144305888&qH=6f692c572c253166" target="_blank">click here</a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/toyrew/toy4f.jpg" alt="Flipkart Review Image" style="width: 250px;">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/toyrew/toy2g.jpg" alt="Flipkart Review Image" style="width: 250px;">
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