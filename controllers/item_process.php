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
    $sql = "SELECT * FROM products";
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
    foreach ($result as $row) {
        echo "<div class='product-item'>";
        echo "<a href='../controllers/item_detail_process.php?id=". $row["id"]."'>";
        echo "<img src='" . $row["image"] . "' alt='Product Image'>";
        echo "<h2>" . $row["name"] . "</h2>";
        echo "<p>Price: $" . $row["price"] . "</p>";
        echo "<p>Description: " . $row["description"] . "</p>";
        echo "</a>";
        echo "</div>";
    }
} else {
    echo "There are no items.";
}

?>
