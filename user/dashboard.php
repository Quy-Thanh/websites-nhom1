<?php include './includes/session/check_login.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <!-- Định dạng CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<style type="text/css">

</style>
<body>
    <header>
        <nav>
            <?php include '../includes/navbar/index.php'; ?>
        </nav>
    </header>
    <!-- Định dạng giao diện của trang Dashboard -->
    <?php include '../includes/filter/index.php'; ?>
    <?php   include '../includes/items/index.php'; ?>
    <!-- Các phần tử giao diện và chức năng khác của trang Dashboard -->

</body>
</html>