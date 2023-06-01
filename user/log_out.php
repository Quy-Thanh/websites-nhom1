<?php
// Khởi động phiên làm việc
session_start();

// Xóa tất cả các biến phiên
session_unset();

// Hủy bỏ phiên làm việc
session_destroy();

// Chuyển hướng người dùng đến trang đăng nhập sau khi đăng xuất thành công
$base_url = 'http://localhost/websites-nhom1/';
header("Location: ".$base_url."index.php");
exit();
?>
