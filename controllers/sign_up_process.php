<?php
// Check for POST method and retrieve registration information from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $email = $_POST["email"];

    // Check if password and confirm password match
    if ($password != $confirm_password) {
        $error = "Mật khẩu và xác nhận mật khẩu không khớp!";
    } else {
        // Save registration information to the database
        // For example, add a new account to the "UserAccount" table

        // Connect to the database using configuration information from the config.php file
        include_once "../config/config.php";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname_database", $username_database, $password_database);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Check if the username already exists in the database
            $stmt = $conn->prepare("SELECT * FROM UserAccount WHERE user_name = :user_name");
            $stmt->bindParam(':user_name', $user_name);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                // Username already exists
                $error = "Tên người dùng đã được sử dụng. Vui lòng chọn tên người dùng khác!";
            } else {
                // Add a new account to the database
                $stmt = $conn->prepare("INSERT INTO UserAccount (user_name, password, email) VALUES (:user_name, :password, :email)");
                $stmt->bindParam(':user_name', $user_name);
                $stmt->bindParam(':password', $password);
                $stmt->bindParam(':email', $email);
                $stmt->execute();

                // Registration successful
                // Perform necessary actions after successful registration
                // For example, redirect the user to the login page, display a success message, etc.
                header("Location: ../templates/login/index.php");
                exit();
            }
        } catch (PDOException $e) {
            // Handle connection or query errors
            $error = "Đăng ký không thành công. Vui lòng thử lại!";
            echo $e->getMessage();
        }

        // Close the database connection
        $conn = null;
    }
}
?>

