<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #f8f8f8;
}

li {
  display: inline-block;
  margin-right: 10px;
}

li a {
  display: block;
  padding: 10px;
  text-decoration: none;
  color: #333;
}

li a:hover {
  background-color: #ddd;
}

li input[type="text"],
li input[type="submit"] {
  padding: 6px 10px;
}

li input[type="submit"] {
  background-color: #333;
  color: #fff;
  border: none;
  cursor: pointer;
}



</style>
<?php
session_start();
// Đường dẫn tuyệt đối đến thư mục gốc của trang web
$base_url = 'http://localhost/websites-nhom1/';
// Kiểm tra phiên đăng nhập
echo '<ul>';
        if (!isset($_SESSION["user_name"])) {
            echo '<li><a href="' . $base_url . 'index.php"><img src="path/to/logo.png" alt="Logo"></a></li>';
            echo '<li><a href="' . $base_url . 'index.php">Store</a></li>';
            echo '<li><a href="' . $base_url . 'index.php">Laptop</a></li>';
            echo '<li><a href="' . $base_url . 'index.php">Items</a></li>';
            echo '<li><a href="' . $base_url . 'index.php"><img src="path/to/logo.png" alt="Search"></a></li>';
            echo '<li><a href="#">Order</a></li>';
            echo '<li><a href="index.php"">Support</a></li>';
            echo '<li><a href="index.php"">Contact sales</a></li>';
            echo '<li><a href="' . $base_url . 'templates/login/index.php">Login</a></li>';
            echo '<li><a href="' . $base_url . 'templates/sign_up/index.php">Sign up</a></li>';
        } else {
            echo '<li><a href="' . $base_url . 'user/dashboard.php"><img src="path/to/logo.png" alt="Logo"></a></li>';
            echo '<li><a href="' . $base_url . 'user/dashboard.php">Store</a></li>';
            echo '<li><a href="' . $base_url . 'user/dashboard.php">Laptop</a></li>';
            echo '<li><a href="' . $base_url . 'user/dashboard.php">Items</a></li>';
            echo '<li><a href="' . $base_url . 'user/dashboard.php"><img src="path/to/logo.png" alt="Search"></a></li>';
            echo '<li><a href="' . $base_url . 'templates/order/index.php">Order</a></li>';
            echo '<li><a href="' . $base_url . 'templates/support/index.php">Support</a></li>';
            echo '<li><a href="' . $base_url . 'templates/favourite/index.php">Favourite</a></li>';
            echo '<li><a href="' . $base_url . 'templates/card/index.php">Cart</a></li>';
            echo '<li>';
            include 'account.php';
            echo '</li>';
        }
echo '</ul>';
?>