<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #f8f8f8;
  display: flex;
  justify-content: center; /* Center the icons horizontally */
}

li {
  display: inline-block;
  margin-right: 10px;
  align-self: flex-start;
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
ul.account {
  list-style-type: none;
  margin: 0;
  padding: 0;
  position: relative;
  display: flex;
  flex-direction: column; /* Change flex-direction to column */
}

ul.account li {
  display: none;
}

ul.account li:first-child {
  display: block;
}

ul.account.active li {
  display: block;
}

ul.account li a {
  display: block;
  padding: 10px;
  text-decoration: none;
  color: #333;
}

ul.account li a:hover {
  background-color: #ddd;
}

</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,300,0,200" />
<?php
session_start();
$base_url = 'http://localhost/websites-nhom1/';

echo '<ul>';

if (!isset($_SESSION["user_name"])) {
    echo '<li><a href="' . $base_url . 'index.php"><span class="material-symbols-outlined">laptop_mac</span></a></li>';
    echo '<li><a href="' . $base_url . 'index.php">Store</a></li>';
    echo '<li><a href="' . $base_url . 'index.php">Laptop</a></li>';
    echo '<li><a href="' . $base_url . 'index.php">Items</a></li>';
    echo '<li><a href="' . $base_url . 'index.php"><span class="material-symbols-outlined">search</span></a></li>';
    echo '<li><a href="' . $base_url . 'templates/order/index.php">Order</a></li>';
    echo '<li><a href="' . $base_url . 'templates/support/index.php">Support</a></li>';
    echo '<li><a href="' . $base_url . 'templates/contact_sales/index.php">Contact sales</a></li>';
    echo '<li><a href="' . $base_url . 'templates/login/index.php">Login</a></li>';
    echo '<li><a href="' . $base_url . 'templates/sign_up/index.php">Sign up</a></li>';
} else {
    echo '<li><a href="' . $base_url . 'user/dashboard.php"><span class="material-symbols-outlined">laptop_mac</span></a></li>';
    echo '<li><a href="' . $base_url . 'user/dashboard.php">Store</a></li>';
    echo '<li><a href="' . $base_url . 'user/dashboard.php">Laptop</a></li>';
    echo '<li><a href="' . $base_url . 'user/dashboard.php">Items</a></li>';
    echo '<li><a href="' . $base_url . 'user/dashboard.php"><span class="material-symbols-outlined">search</span></a></li>';
    echo '<li><a href="' . $base_url . 'templates/order/index.php">Order</a></li>';
    echo '<li><a href="' . $base_url . 'templates/support/index.php">Support</a></li>';
    echo '<li><a href="' . $base_url . 'templates/favourite/index.php">Favourite</a></li>';
    echo '<li><a href="' . $base_url . 'templates/card/index.php"><span class="material-symbols-outlined">shopping_cart</span></a></li>';
    echo '<li>';
    include 'account.php';
    echo '</li>';
}

echo '</ul>';
?>
