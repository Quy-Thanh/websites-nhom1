<?php
// Kiểm tra phiên đăng nhập
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION["user_name"])) {
    // Người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
    header("Location: ./templates/login/index.php");
    exit();
}
?>