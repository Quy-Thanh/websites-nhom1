<?php
// Kiểm tra yêu cầu phải là phương thức GET
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
  http_response_code(405); // Phương thức không được phép
  echo json_encode(['error' => 'Method Not Allowed']);
  exit();
}

// Kiểm tra và lấy ID sản phẩm từ tham số truy vấn
if (!isset($_GET['id'])) {
  http_response_code(400); // Bad Request
  echo json_encode(['error' => 'Missing product ID']);
  exit();
}

$productId = $_GET['id'];

// Kết nối đến cơ sở dữ liệu
$servername = 'localhost';
$username = 'root';
$password = 'MyDream@01022003';
$dbname = 'your_database';

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Truy vấn cơ sở dữ liệu để lấy thông tin sản phẩm
$sql = "SELECT * FROM products WHERE id = $productId";
$result = $conn->query($sql);

// Kiểm tra kết quả truy vấn
if ($result->num_rows === 0) {
    http_response_code(404); // Not Found
    echo json_encode(['error' => 'Product not found']);
    exit();
}

// Lấy dữ liệu sản phẩm từ kết quả truy vấn
$productData = $result->fetch_assoc();

// Trả về dữ liệu sản phẩm dưới dạng JSON
header('Content-Type: application/json');
echo json_encode($productData);

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>
