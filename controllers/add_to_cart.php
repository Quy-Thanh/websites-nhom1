<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$userName = $_SESSION['user_name'];

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Kết nối tới cơ sở dữ liệu
    include_once "../config/config.php";
    $connection = mysqli_connect($servername, $username_database, $password_database, $dbname_database);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Kiểm tra xem sản phẩm có tồn tại trong cơ sở dữ liệu không
    $query = "SELECT * FROM product WHERE IDProduct = $productId";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        $productData = mysqli_fetch_assoc($result);

        // Lấy thông tin sản phẩm
        $name = $productData['Name'];
        $price = $productData['Price'];
        $quantity = 1; // Số lượng mặc định khi thêm vào giỏ hàng

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        $query = "SELECT * FROM cart WHERE product_id = $productId";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) > 0) {
            // Sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng lên 1
            $row = mysqli_fetch_assoc($result);
            $quantity += $row['quantity'];
            $query = "UPDATE cart SET quantity = $quantity WHERE product_id = $productId";
            mysqli_query($connection, $query);
        } else {
            // Sản phẩm chưa tồn tại trong giỏ hàng, thêm vào giỏ hàng
            $query = "INSERT INTO cart (customer_name, product_id, quantity, price) VALUES ('$userName', $productId, $quantity, $price)";
            mysqli_query($connection, $query);
        }

        // Chuyển hướng về trang sản phẩm
        header("Location: ../user/dashboard.php");
        exit();
    } else {
        echo "Product not found.";
    }

    // Đóng kết nối cơ sở dữ liệu
    mysqli_close($connection);
} else {
    echo "Invalid request.";
}
?>
