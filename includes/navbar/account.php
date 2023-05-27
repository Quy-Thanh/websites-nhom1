<style>
ul.account {
  list-style-type: none;
  margin: 0;
  padding: 0;
  position: relative;
}

ul.account li {
  display: none;
}

ul.account li:first-child {
  display: block;
}

ul.account:hover li {
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

<?php
$base_url = 'http://localhost/websites-nhom1/';
echo '<ul class="account">';
echo '<li><a href="' . $base_url . 'templates/profile/information.php">Profile</a></li>';
echo '<li><a href="' . $base_url . 'templates/profile/account.php">Account</a></li>';
echo '<li><a href="#">history</a></li>';
echo '<li><a href="#">voucher</a></li>';
echo '<li><a href="#">upgrade</a></li>';
echo '<li><a href="#">help</a></li>';
echo '<li><a href="#">setting</a></li>';
echo '<li></li>';
echo '</ul>';
?>
