<nav>
    <ul>
        <li><a href="index.php"><img src="path/to/logo.png" alt="Logo"></a></li>
        <li>
            <input type="text" placeholder="search ..." name="search_bar">
            <input type="submit" value="Search" name="search_bar_submit">
        </li>
        <li><a href="#">Customer care</a></li>
        <li><a href="#">Contact sales</a></li>
        <li><a href="#">Cart</a></li>
    </ul>
    <div>
        <?php
        // Đường dẫn tuyệt đối đến thư mục gốc của trang web
        $base_url = 'http://localhost/websites-nhom1/';

        // Kiểm tra phiên đăng nhập
        session_start();

        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (!isset($_SESSION["user_name"])) {
            echo '<a href="' . $base_url . 'templates/login/index.php">Login</a>';
            echo '<a href="' . $base_url . 'templates/sign_up/index.php">Sign up</a>';
        } else {
            echo '<a href="' . $base_url . 'user/log_out.php">Log out</a>';
        }
        ?>
    </div>
</nav>