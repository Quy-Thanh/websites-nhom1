<?php include './includes/session/check_login.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <!-- Định dạng CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
    <header>
        <?php include '../includes/navbar/index.php'; ?>
    </header>
    <!-- Định dạng giao diện của trang Dashboard -->
    <h1>Welcome, <?php echo $user_name; ?>!</h1>
    <p>This is your user dashboard.</p>

    <!-- Các phần tử giao diện và chức năng khác của trang Dashboard -->
</body>
</html>