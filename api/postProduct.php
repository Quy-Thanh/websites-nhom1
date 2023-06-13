<?php
// Lấy dữ liệu từ yêu cầu POST
$data = json_decode(file_get_contents("php://input"), true);

// Kiểm tra xem dữ liệu đã được gửi đúng không
if (!isset($data['name']) || !isset($data['price']) || !isset($data['description']) || !isset($data['image']) || !isset($data['cpu']) || !isset($data['ram']) || !isset($data['storage']) || !isset($data['graphic_card']) || !isset($data['display'])) {
    http_response_code(400);
    echo "Yêu cầu không hợp lệ";
    exit();
}

// Truy xuất thông tin từ mảng $data
$name = $data['name'];
$price = $data['price'];
$description = $data['description'];
$image = $data['image'];
$cpu = $data['cpu'];
$ram = $data['ram'];
$storage = $data['storage'];
$graphic_card = $data['graphic_card'];
$display = $data['display'];

// Kết nối đến cơ sở dữ liệu
$servername = 'localhost';
$username = 'root';
$password = 'MyDream@01022003';
$dbname = 'websites_nhom1';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Xử lý yêu cầu POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Thêm thông tin vào bảng `products`
    $sql = "INSERT INTO products (name, price, description, image) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $price, $description, $image);

    if ($stmt->execute()) {
        // Lấy ID mới nhất được tạo trong bảng `products`
        $productID = $stmt->insert_id;

        // Thêm thông tin vào bảng `product_detail`
        $sql = "INSERT INTO product_detail (product_id, cpu, ram, storage, graphic_card, display) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isssss", $productID, $cpu, $ram, $storage, $graphic_card, $display);

        if ($stmt->execute()) {
            // Thêm thông tin thành công
            $response = [
                'status' => 200,
                'message' => 'Thêm thông tin sản phẩm thành công',
                'product_id' => $productID
            ];
            http_response_code(200);
            echo json_encode($response);
        } else {
            http_response_code(500);
            echo "Lỗi: " . $stmt->error;
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
