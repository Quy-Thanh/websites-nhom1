<?php
// Lấy ID sản phẩm từ yêu cầu DELETE
$productID = $_GET['product_id'];

// Kiểm tra xem ID đã được gửi đúng không
if (empty($productID)) {
    http_response_code(400);
    echo "Yêu cầu không hợp lệ";
    exit();
}

// Kết nối đến cơ sở dữ liệu
$servername = 'localhost';
$username = 'root';
$password = 'MyDream@01022003';
$dbname = 'websites_nhom1';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Xử lý yêu cầu DELETE
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    // Xóa thông tin từ bảng `product_detail`
    $sql = "DELETE FROM product_detail WHERE product_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $productID);

    if ($stmt->execute()) {
        // Kiểm tra xem có bản ghi bị ảnh hưởng bởi câu lệnh DELETE hay không
        if ($stmt->affected_rows > 0) {
            // Xóa thông tin từ bảng `products`
            $sql = "DELETE FROM products WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $productID);

            if ($stmt->execute()) {
                // Kiểm tra xem có bản ghi bị ảnh hưởng bởi câu lệnh DELETE hay không
                if ($stmt->affected_rows > 0) {
                    // Xóa thông tin thành công
                    http_response_code(200);
                    echo "Xóa thông tin sản phẩm thành công";
                } else {
                    http_response_code(404);
                    echo "Không tìm thấy sản phẩm";
                }
            } else {
                http_response_code(500);
                echo "Lỗi: " . $stmt->error;
            }
        } else {
            http_response_code(404);
            echo "Không tìm thấy sản phẩm";
        }
    } else {
        http_response_code(500);
        echo "Lỗi: " . $stmt->error;
    }
} else {
    http_response_code(400);
    echo "Yêu cầu không hợp lệ";
}

// Đóng kết nối tới cơ sở dữ liệu
$conn->close();
?>
