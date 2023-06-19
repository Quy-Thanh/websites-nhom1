<style>
ul.account {
  list-style-type: none;
  margin: 0;
  padding: 10px;
  position: relative;
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

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var accountMenu = document.querySelector('.account');
    var accountToggle = accountMenu.querySelector('li:first-child');

    accountToggle.addEventListener('click', function() {
      accountMenu.classList.toggle('active');
    });
  });
  </script>

<?php
echo '<ul class="account">';
echo '<li>Account</li>';
echo '<li><a href="' . $base_url . 'templates/profile/index.php">Profile</a></li>';
echo '<li><a href="templates/profile/information.php">history</a></li>';
echo '<li><a href="#">voucher</a></li>';
echo '<li><a href="#">upgrade</a></li>';
echo '<li><a href="#">help</a></li>';
echo '<li><a href="#">setting</a></li>';
echo '<li><a href="./user/log_out.php">logout</a></li>';
echo '<li></li>';
echo '</ul>';
?>
