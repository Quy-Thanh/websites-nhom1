<?php
// Check for POST method and retrieve login information from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];

    // Connect to the database using configuration information from the config.php file
    include_once "../config/config.php";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname_database", $username_database, $password_database);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare and execute the query to check login information
        $stmt = $conn->prepare("SELECT * FROM UserAccount WHERE user_name = :user_name AND password = :password");
        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        // Check query result
        if ($stmt->rowCount() > 0) {
            // Login successful
            // Redirect the user to the home page
            session_start();
            $_SESSION["user_name"] = $user_name;
            header("Location: ../user/dashboard.php");
            exit();
        } else {
            // Login failed
            header("Location: ../templates/login/index.php");
            $error = "Thông tin đăng nhập không hợp lệ!";
        }
    } catch (PDOException $e) {
        // Handle connection or query errors
        $error = "Đăng nhập không thành công. Vui lòng thử lại!";
        echo $e->getMessage();
    }

    // Close the database connection
    $conn = null;
}
?>
