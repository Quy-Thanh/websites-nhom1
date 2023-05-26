<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .login-form {
            max-width: 300px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 5px;
        }
        .form-group .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Lofin</h1>
    <div class="login-form">
        <form method="post" action="../../controllers/login_process.php">
            <div class="form-group">
                <label for="user_name">User name:</label>
                <input type="text" id="user_name" name="user_name" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
	<?php
    // Hiển thị thông báo lỗi (nếu có)
    if (isset($error)) {
        echo '<p style="color: red;">' . $error . '</p>';
    }
    ?>
    </div>
</body>
</html>
