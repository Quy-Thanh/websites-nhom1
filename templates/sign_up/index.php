<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .sign_up-form {
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
    <h1>Sign up</h1>
    <div class="sign_up-form">
        <form action="../../controllers/sign_up_process.php" method="POST">
            <div class="form-group">
                <label for="user_name">User name:</label>
                <input type="text" id="user_name" name="user_name" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Sign up">
            </div>
        </form>
    </div>
</body>
</html>
