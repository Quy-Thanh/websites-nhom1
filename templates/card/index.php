<?php
session_start();
$userName = $_SESSION['user_name'];
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
</head>
<style type="text/css">
    body {
        font-family: Arial, sans-serif;
    }

    form {
        margin: 20px;
    }

    label {
        font-weight: bold;
    }

    img {
        width: 200px;
        margin-bottom: 10px;
    }

    .product {
        border: 1px solid #ccc;
        margin-bottom: 10px;
    }

    .product-image {
        width: 100%;
    }

    .product-info {
        padding: 10px;
    }

    .quantity {
        margin-bottom: 10px;
    }

    .quantity input {
        width: 50px;
        margin-right: 10px;
    }

    .submit {
        cursor: pointer;
        padding: 2px 6px;
    }
</style>
<body>
    <form action="./index.php" method="post">
        <?php
        include_once "../../config/config.php";
        $kn = mysqli_connect($servername, $username_database, $password_database, $dbname_database);
        if (!$kn) {
            die("Kết nối không thành công: " . mysqli_connect_error());
        }
        

        $query = "SELECT products.name, products.image, products.price, cart.id, cart.quantity, cart.total FROM products JOIN cart ON products.id = cart.product_id WHERE cart.customer_name = '$userName'";
        $result = mysqli_query($kn, $query);

        if (mysqli_num_rows($result) > 0) {
            $selectedIds = array(); // Initialize an array to store the selected IDs
            while ($row = mysqli_fetch_assoc($result)) {
                $productId = $row['id'];
                $selectedIds[] = $productId; // Add each product ID to the selected IDs array
                $productImage = $row['image'];
                $productName = $row['name'];
                $productPrice = $row['price'];
                $productQuantity = $row['quantity'];
                ?>
                <div class="product">
                    <div class="product-image">
                        <img width="200px" src="<?php echo $productImage; ?>" /><br>
                        <input type="hidden" name="productImage[<?php echo $productId; ?>]" value="<?php echo $productImage; ?>">
                    </div>
                    <div class="product-info">  
                        <label>Name:</label> <?php echo $productName; ?><br>
                        <input type="hidden" name="productName[<?php echo $productId; ?>]" value="<?php echo $productName; ?>">
                        <label>Price:</label> <?php echo $productPrice; ?><br>
                        <input type="hidden" name="productPrice[<?php echo $productId; ?>]" value="<?php echo $productPrice; ?>">
                    </div>
                    <div class="quantity" data-product-id="<?php echo $productId; ?>">
                        <label>Quantity:</label>
                        <input type="number" name="quantity[<?php echo $productId; ?>]" value="<?php echo $productQuantity; ?>" min="0" step="1">
                        <input type="submit" class="increase" name="increaseButton[]" value="▲">
                        <input type="submit" class="decrease" name="decreaseButton[]" value="▼">  
                        <input type="submit" class="delete" name="delete[<?php echo $productId; ?>]" value="Delete">
                    </div>
                </div>
                <hr />
                <?php
            }
        } else {
            echo "<h1>Bạn chưa có sản phẩm nào trong giỏ hàng!</h1>";
            echo "<script>alert('Hãy thêm sản phẩm vào giỏ hàng để theo dõi!');</script>";
        }
        mysqli_close($kn);
        ?>
        <div>
            <?php
                if (count($selectedIds) > 0) {
                    echo "<input type='submit' value='Xác nhận thông tin và thanh toán' name='submit'>";
                    if (isset($_POST['submit'])) {
                            foreach ($_POST['quantity'] as $productId => $productQuantity) {
                                // Perform actions for each selected product ID and quantity
                                $kn = mysqli_connect($servername, $username_database, $password_database, $dbname_database);
                                $query = "UPDATE cart SET quantity = '$productQuantity' WHERE id = '$productId'";
                                $result = mysqli_query($kn, $query);
                                mysqli_close($kn);
                            }
                            echo '<script>window.location.href = "../checkout/index.php";</script>';
                            exit(); // Đảm bảo dừng thực thi mã PHP sau khi chuyển hướng
                    }
                }
                if (isset($_POST['delete'])) {
                    $kn = mysqli_connect($servername, $username_database, $password_database, $dbname_database);

                    foreach ($_POST['delete'] as $productId => $value) {
                        // Perform actions for each selected product ID
                        $query = "DELETE FROM cart WHERE id = '$productId' AND customer_name = '$userName'";
                        $result = mysqli_query($kn, $query);
                    }

                    mysqli_close($kn);
                    echo '<script>window.location.href = "./index.php";</script>';
                    exit();
                }
            ?>
        </div>
    </form>
    <script>
        // JavaScript code to increase quantity
        const increaseButtons = document.querySelectorAll('.increase');
        increaseButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const quantityInput = this.parentNode.querySelector('input[type="number"]');
                quantityInput.stepUp();
            });
        });

        // JavaScript code to decrease quantity
        const decreaseButtons = document.querySelectorAll('.decrease');
        decreaseButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const quantityInput = this.parentNode.querySelector('input[type="number"]');
                quantityInput.stepDown();
            });
        });
    </script>
</body>
</html>
