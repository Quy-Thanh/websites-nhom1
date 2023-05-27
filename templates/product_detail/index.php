<!-- Trang thông tin chi tiết sản phẩm -->
<?php
// Kiểm tra xem tham số "id" đã được truyền qua URL hay chưa
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    print($productId);
    echo "There";

    // Thực hiện truy vấn hoặc tìm kiếm thông tin sản phẩm dựa trên productId
    // Ví dụ:
    // $product = getProductById($productId);

    // Sau đó, hiển thị thông tin sản phẩm
    // Ví dụ:
    // echo '<h1>' . $product['name'] . '</h1>';
    // echo '<p>' . $product['description'] . '</p>';
    // echo '<p>Giá: ' . $product['price'] . '</p>';
} else {
    echo 'Không tìm thấy sản phẩm.';
}
?>
