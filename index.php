<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="path/to/logo.png" alt="Logo">
            </a>
        </div>
        <div>
            <input type="text" placeholder="search ..." name="search_bar">
            <input type="submit" value="Search" name="search_bar_submit">
        </div>
        <div>
            <a href="#">Customer care</a>
            <a href="#">Contact sales</a>
            <a href="#">Cart</a>
            <a href="./templates/login/index.php">Login</a>
            <a href="./templates/sign_up/index.php">Sign up</a>
        </div>
    </header>
    <div>
        <div>
            <?php include './includes/categories/index.php'; ?>
            <img src="https://laptop88.vn/media/banner/08_Mar1d47a608c5346ac1803f841e33159012.jpg">
        </div>
        <div>
            <h1>Xin chào, thế giới!</h1>
            <p>Chào mừng đến với trang web của chúng tôi. Đây là trang chủ.</p>
            <p>Hãy khám phá và tìm hiểu thêm về chúng tôi.</p>
        </div>
    </div>
</body>
</html>
