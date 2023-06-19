<style>
    .product-item {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 10px;
    }
    
    .product-item img {
        width: 150px;
        height: auto;
    }
    
    .product-item h2 {
        font-size: 18px;
        margin: 10px 0;
    }
    
    .product-item p {
        margin: 5px 0;
    }
</style>
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
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
} finally {
    if ($conn !== null) {
        $conn = null;
    }
}
// Kiểm tra và hiển thị danh sách sản phẩm
if ($result->rowCount() > 0) {
    $count = 0; // Biến đếm số lượng sản phẩm đã hiển thị

    foreach ($result as $row) {
        if ($count < 10) {
            echo "<div class='product-item'>";
            echo "<a href='../controllers/item_detail_process.php?id=". $row["IDProduct"]."'>";
            echo "<img src='" . $row["Image"] . "' alt='Product Image'>";
            echo "<h2>" . $row["NameProduct"] . "</h2>";
            echo "<p>Price:" . $row["Price"] . " VND </p>";
            echo "<p>Description: " . $row["Description"] . "</p>";
            echo "</a>";
            echo "</div>";
    
            $count++; // Tăng biến đếm sau khi hiển thị một sản phẩm
        } else {
            break; // Dừng vòng lặp sau khi hiển thị 10 sản phẩm
        }
    }
    
} else {
    echo "There are no items.";
}

?>
