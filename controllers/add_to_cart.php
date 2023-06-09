<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();
$userName = $_SESSION['user_name'];

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Connect to the database
    include_once "../config/config.php";
    $connection = mysqli_connect($servername, $username_database, $password_database, $dbname_database);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the product exists in the database
    $query = "SELECT * FROM products WHERE id = $productId";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        $productData = mysqli_fetch_assoc($result);

        // Get product information
        $name = $productData['name'];
        $price = $productData['price'];
        $quantity = 1; // Default quantity when adding to cart

        // Check if the product already exists in the cart
        $query = "SELECT * FROM cart WHERE product_id = $productId";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) > 0) {
            // Product already exists in the cart, increase the quantity by 1
            $row = mysqli_fetch_assoc($result);
            $quantity += $row['quantity'];
            $query = "UPDATE cart SET quantity = $quantity WHERE product_id = $productId";
            mysqli_query($connection, $query);
        } else {
            // Product doesn't exist in the cart, add it as a new item
            $query = "INSERT INTO cart (customer_name, product_id, quantity, price) VALUES ('$userName', $productId, $quantity, $price)";
            mysqli_query($connection, $query);
        }

        // Redirect back to the product page
        header("Location: ../user/dashboard.php");
        exit();
    } else {
        echo "Product not found.";
    }

    // Close the database connection
    mysqli_close($connection);
} else {
    echo "Invalid request.";
}
?>
