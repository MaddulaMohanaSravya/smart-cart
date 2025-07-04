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
.fashion{
    text-align: center;
    color: #007bff;
}
/* Right Panel: Products */
.products {
    flex: 4;
    overflow-y: auto;
    height:75vh;
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
            <img src="http://localhost/miniproject/photos/fashion.png" alt="Fashion Image">
            <h3 class = "fashion">Fashion</h3>
        </section>

        <!-- Right Section: Product List -->
        <section class="products">
            <h2>Available Products</h2>
            <div class="product-list" style="display: flex; flex-direction: column; gap: 20px;">
                <!-- Product 1 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <!-- Title -->
                    <h3 style="text-align:left;">Women's White Cotton Blend Straight Kurta, Trousers Suit Set</h3>
                    <!-- Content -->
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <!-- Image -->
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/7180zu+VbNL.AC_UL320.jpg" alt="Verymiss Premium Makeup Foundation" style="width: 150px;">
                        </div>
                        <!-- Amazon Details -->
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐ (3.6)</p>
                            <p>Reviews: 5 reviews</p>
                            <p>
                                Price: ₹479
                                <a href="https://www.amazon.in/sspa/click?ie=UTF8&spc=MTo1MTE2NDI4MDY2NDY5MzQ4OjE3MzQ3OTMwNzM6c3BfYXRmOjMwMDI2ODc2OTcyNzMzMjo6MDo6&url=%2FAurelia-Womens-Straight-Trousers-Set_23AUAS14508-504914_XS%2Fdp%2FB0CDLY4CKL%2Fref%3Dsr_1_1_sspa%3Fcrid%3D26WD2TC899IPQ%26dib%" target="_blank">
                                    click here
                                </a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/fashrew/fash1.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <!-- Flipkart Details -->
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.1)</p>
                            <p>Reviews: 1,150 reviews</p>
                            <p>
                                Price: ₹760
                                <a href="https://dl.flipkart.com/s/R7qV7BNNNN" target="_blank">
                                    clcik here
                                </a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/fashrew/fash1f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/fashrew/fash1g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                </div>
            
                <!-- Product 2 -->
                <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                    <h3 style="text-align:left;">COOFANDY Mens Knit Polo Sweater</h3>
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="text-align: center;">
                            <img src="https://m.media-amazon.com/images/I/81apxT0GFxL.AC_UL320.jpg" alt="Makeup Kit" style="width: 150px;">
                        </div>
                        <div style="flex: 1;">
                            <h4>Amazon</h4>
                            <p>Rating: ⭐⭐⭐ (4.3)</p>
                            <p>Reviews: 218 reviews</p>
                            <p>
                                Price: ₹3320
                                <a href="https://www.amazon.com/sspa/click?ie=UTF8&spc=MTozNjA2MDA0NjEyMTQ4OTk1OjE3MzUyMTI4NDA6c3BfYXRmOjMwMDM1MjAxNzQzNjIwMjo6MDo6&url=%2FCOOFANDY-Sweater-Textured-Pullover-Sweaters%2Fdp%2FB0D6R5HN8N%2Fref%3Dsr_1_1_sspa%3Fcrid%3D1J2SJZGCH3JQ2%26dib%3DeyJ2IjoiMSJ9.Jin0dDaC0ICwFKa0DJxvI_2c0HkFiUhyHVftPOnWWgNacya_e_6QdM-dI4d83OOFTVXeIG4n_TnSeMLUyZ5KGEp9Had-yKYCvuJEaPMxphaR1ZonThAYdKUhuzmdX3N9mP7XeavFzu9LD7U4udjhrUWAju0bkZtQ-COv6pFmzv-eAt2K_lQFv_th-QLDG1Qiw9zZ8000rZ-_Lx9JA8Sb-95pIlU0H1QJ54M3V4PpmLQhz2V8fLfF1DXBToXOY8Z1saMykR-tVs5v5FjVuBfOAv4speMWtPq8HwKS8PTtPQA.o15HQmV3RiqOwhcJpxHGpoAzWpoU3ggJ5zLiRni487A%26dib_tag%3Dse%26keywords%3Dmens%2Bfall%2Bfashion%26qid%3D1735212840%26s%3Dapparel%26sprefix%3Dmens%2Bfashion%252Cfashion-mens-clothing%252C304%26sr%3D1-1-spons%26sp_csd%3Dd2lkZ2V0TmFtZT1zcF9hdGY%26psc%3D1" target="_blank">
                                    clcik here
                                </a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/fashrew/fash2.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="flex: 1;">
                            <h4>Flipkart</h4>
                            <p>Rating: ⭐⭐⭐⭐ (4.4)</p>
                            <p>Reviews: 3,320 reviews</p>
                            <p>
                                Price: ₹1580
                                <a href="https://dl.flipkart.com/s/R73IFqNNNN" target="_blank">
                                    click here
                                </a>
                            </p>
                            <div style="text-align: left;">
                                <img src="http://localhost/miniproject/fashrew/fash2f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img src="http://localhost/miniproject/fashrew/fash2g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                        </div>
                    </div>
                    <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                        <h3 style="text-align: left;">Women Solid Silk Kurta with Straight Pant Set</h3>
                        <div style="display: flex; gap: 20px; align-items: flex-start;">
                            <div style="text-align: center;">
                                <img src="https://m.media-amazon.com/images/I/61cTi6i43+L.AC_UL320.jpg" alt="Makeup Kit" style="width: 150px;">
                            </div>
                            <div style="flex: 1;">
                                <h4>Amazon</h4>
                                <p>Rating: ⭐⭐⭐⭐⭐(5)</p>
                                <p>Reviews: 10 reviews</p>
                                <p>
                                    Price: ₹1580
                                    <a href="https://www.amazon.in/sspa/click?ie=UTF8&spc=MTo1MTE2NDI4MDY2NDY5MzQ4OjE3MzQ3OTMwNzM6c3BfYXRmOjMwMDQxODUxNzk3NjczMjo6MDo6&url=%2FW-Woman-Kurta-Straight-Pant_23AUSTWS10486-217560_2XL%2Fdp%2FB0CJM5G66C%2Fref%3Dsr_1_3_sspa%3Fcrid%3D26WD2TC899IPQ%26dib%3DeyJ2" target="_blank">
                                        clcik here
                                    </a>
                                </p>
                                <div style="text-align: left;">
                                    <img src="http://localhost/miniproject/fashrew/fash3.jpg" alt="Flipkart Review Image" style="width: 150px;">
                                </div>
                            </div>
                            <div style="flex: 1;">
                                <h4>Flipkart</h4>
                                <p>Rating: ⭐⭐⭐⭐ (4.4)</p>
                                <p>Reviews: 3,320 reviews</p>
                                <p>
                                    Price: ₹1580
                                    <a href="https://dl.flipkart.com/s/hzz6EVuuuN" target="_blank">
                                        click here
                                    </a>
                                </p>
                                <div style="text-align: left;">
                                    <img src="http://localhost/miniproject/fashrew/fash3f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                                </div>
                            </div>
                            <div style="text-align: center;">
                                <img src="http://localhost/miniproject/fashrew/fash1g.jpg" alt="Flipkart Review Image" style="width: 250px;">
                            </div>
                        </div>
                        <div class="product-item" style="display: flex; flex-direction: column; gap: 10px;">
                            <h3 style="text-align: left;">PURE CHAMP Mens Athletic Workout Jogger </h3>
                            <div style="display: flex; gap: 20px; align-items: flex-start;">
                                <div style="text-align: center;">
                                    <img src="https://m.media-amazon.com/images/I/81R6L3aVSHL.AC_UL320.jpg" alt="Makeup Kit" style="width: 150px;">
                                </div>
                                <div style="flex: 1;">
                                    <h4>Amazon</h4>
                                    <p>Rating: ⭐⭐⭐ (3.6)</p>
                                    <p>Reviews: 14552 reviews</p>
                                    <p>
                                        Price: ₹3405
                                        <a href="https://www.amazon.com/sspa/click?ie=UTF8&spc=MToxMjMyMDY2NzQ3NTY0MTg1OjE3MzUyMTM1NjA6c3BfbXRmOjMwMDI2MDYwNDkzNTAwMjo6MDo6&url=%2FPURE-CHAMP-Athletic-Sweatpants-Drawstring%2Fdp%2FB09ZD1VP4J%2Fref%3Dsr_1_14_sspa%3Fcrid%3DD3F78BBT7SCU%26dib%3DeyJ2IjoiMSJ9.ZHwgG-QMVPd8azROMxZOz-HeZjbt-8HY2NUR7cBLqNjWOla1llYZeEMhMki8PhjBA2wR_rSi3mZ-jgBSBCaolfSMQA-R3aTAKGijMPUSFeWbLrKWX7J-gGyQDiL-8dQ4GHk7wgZFHKYAGFoPFHkAwKixSNLIHG6B-MyV_Psuoa4Va7Ex5MArTYDq3KhuwJliBQTG57nCPp64ozgfizrUat9apbnzRtRoV0bYzhUSFLD7ce1DWeZHvlLKmUdXiIoj6IauxsW2t-IvwNJ9sMZr4gNZSpTSkUt1hEVQr0XALVU.Bt8xMKdtOf0fGwwA4GKX6c9Qiox0LqTm-TUHPsZBHx4%26dib_tag%3Dse%26keywords%3Dmens%2Bpants%26qid%3D1735213560%26s%3Dapparel%26sprefix%3Dmens%2B%252Cfashion-mens-clothing%252C385%26sr%3D1-14-spons%26sp_csd%3Dd2lkZ2V0TmFtZT1zcF9tdGY%26psc%3D1" target="_blank">
                                            clcik here
                                        </a>
                                    </p>
                                    <div style="text-align: left;">
                                        <img src="http://localhost/miniproject/fashrew/fash4.jpg" alt="Flipkart Review Image" style="width: 150px;">
                                    </div>
                                </div>
                                <div style="flex: 1;">
                                    <h4>Flipkart</h4>
                                    <p>Rating: ⭐⭐⭐⭐ (4.4)</p>
                                    <p>Reviews: 3,320 reviews</p>
                                    <p>
                                        Price: ₹1380
                                        <a href="https://dl.flipkart.com/s/R7CJ50NNNN" target="_blank">
                                            click here
                                        </a>
                                    </p>
                                    <div style="text-align: left;">
                                        <img src="http://localhost/miniproject/fashrew/fash4f.jpg" alt="Flipkart Review Image" style="width: 150px;">
                                    </div>
                                </div>
                                <div style="text-align: center;">
                                    <img src="http://localhost/miniproject/fashrew/fash2g.jpg" alt="Flipkart Review Image" style="width: 250px;">
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