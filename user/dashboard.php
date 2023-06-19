<?php include '../includes/session/check_login.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laptop 99 - Top 10 sản phẩm hàng đầu</title>
    <meta name="description" content="Laptop 99 - Cung cấp các sản phẩm laptop hàng đầu với giá cả phải chăng.">
    <meta name="keywords" content="laptop, sản phẩm, giá rẻ">
    <link rel="stylesheet" href="../assets/product_item.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,200,0,200" />
    <script src="../js/view_item.js"></script>
</head>
<style>
        .another-product {
            margin-top: 50px;
        }
        
        .another-product h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .all-product {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        
        .product-item {
            background-color: #f4f6f8;
            padding: 20px;
            border-radius: 5px;
        }
        
        .product-item a {
            text-decoration: none;
            color: #333;
        }
        
        .product-item img {
            width: 100%;
            max-width: 200px;
            height: auto;
        }
        
        .product-item h2 {
            font-size: 18px;
            margin-top: 10px;
            margin-bottom: 5px;
        }
        
        .product-item p {
            font-size: 14px;
            margin-top: 5px;
            margin-bottom: 10px;
        }
        
        .product-item p:last-child {
            margin-bottom: 0;
        }
        
        footer {
            background-color: #f4f6f8;
            padding: 20px 0;
            color: #333;
            margin-top: 50px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        
        .footer-section {
            flex: 1;
            margin-right: 40px;
        }
        
        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }
        
        .footer-section p {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        
        .social-icons {
            display: flex;
        }
        
        .social-icons a {
            margin-right: 10px;
            color: #333;
            font-size: 16px;
        }
        
        .footer-bottom {
            background-color: #ddd;
            padding: 10px 0;
            text-align: center;
            font-size: 12px;
        }
    </style>
<body>
    <header>
        <nav>
            <?php include '../includes/navbar/index.php'; ?>
        </nav>
    </header>

    <div class="container">
        <div class="product-container">
            <h1>Top 10 sản phẩm hàng đầu</h1>
            <div class="product-list">
                <?php include '../includes/items/index.php'; ?>
            </div>
            <button class="prev-btn"><span class="material-symbols-outlined">arrow_back</span></button>
            <button class="next-btn"><span class="material-symbols-outlined">arrow_forward</span></button>
        </div>
    </div>

    <div class="another-product">
        <h2>Các sản phẩm khác tại cửa hàng</h2>
        <div class="filter-container">
            <?php include '../includes/filter/index.php'; ?>
        </div>
        <div class="all-product">
            <?php
            include_once "../config/config.php";
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname_database", $username_database, $password_database);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                die("Kết nối đến cơ sở dữ liệu thất bại: " . $e->getMessage());
            }

            try {
                $base_url = 'http://localhost/websites-nhom1/';
                include_once $base_url . 'config/database.php';
                $sql = "SELECT * FROM product LIMIT 20";
                $result = $conn->query($sql);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            } finally {
                if ($conn !== null) {
                    $conn = null;
                }
            }

            if ($result->rowCount() > 0) {
                foreach ($result as $row) {
                    echo "<div class='product-item'>";
                    echo "<a href='../controllers/item_detail_process.php?id=". $row["IDProduct"]."'>";
                    echo "<img src='" . $row["Image"] . "' alt='Product Image'>";
                    echo "<h2>" . $row["NameProduct"] . "</h2>";
                    echo "<p>Price:" . $row["Price"] . " VND </p>";
                    echo "<p>Description: " . $row["Description"] . "</p>";
                    echo "</a>";
                    echo "</div>";
                }
            } else {
                echo "There are no items.";
            }
            ?>
        </div>
    </div>
    <footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Address: 123 ABC Street, XYZ City</p>
                <p>Email: info@example.com</p>
                <p>Phone: 123-456-7890</p>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2023 Laptop 99. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
