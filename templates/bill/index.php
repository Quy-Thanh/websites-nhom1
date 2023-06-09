	<?php
session_start();

$selectedIds = $_SESSION['selectedIds'];

// Kết nối đến cơ sở dữ liệu
include_once "../../config/config.php";
$connection = mysqli_connect($servername, $username_database, $password_database, $dbname_database);
if (!$connection) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

// Chuẩn bị truy vấn
$query = "SELECT c.id, c.quantity, c.price, p.name, c.product_id
          FROM cart c
          INNER JOIN products p ON c.product_id = p.id
          ORDER BY p.name ASC";

$result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Bill</title>
  <style>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      padding: 20px;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: 0 auto;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f9f9f9;
      font-weight: normal;
      color: #555;
    }

    td {
      color: #333;
    }

    .total {
      font-weight: bold;
    }

    .button {
      text-align: center;
    }

    .button a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .button a:hover {
      background-color: #0056b3;
    }
    .info {
	  margin-bottom: 20px;
	}

	.info-item {
	  margin-bottom: 10px;
	}
  </style>
</head>
<body>
  <div class="container">
  <h1>Thông tin đặt hàng</h1>
  <div class="info">
    <p class="info-item"><strong>Người nhận hàng:</strong> <?php echo $_SESSION['name_receiver']; ?></p>
    <p class="info-item"><strong>Số điện thoại:</strong> <?php echo $_SESSION['phone_receiver']; ?></p>
    <p class="info-item"><strong>Địa chỉ nhận hàng:</strong> <?php echo $_SESSION['address_receiver']; ?></p>
    <p class="info-item"><strong>Ghi chú:</strong> <?php echo $_SESSION['note']; ?></p>
    <p class="info-item"><strong>Phương thức thanh toán:</strong> <?php echo $_SESSION['selectedPaymentMethod']; ?></p>
  </div>
<?php

// Kiểm tra kết quả truy vấn và hiển thị hóa đơn
if (mysqli_num_rows($result) > 0) {
	$total = 0;
    echo "<table border='1'>";
    echo "<tr><td>Mã sản phẩm</td><td>Tên sản phẩm</td><td>Giá</td><td>Số lượng</td><td>Thành tiền</td></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        $productId = $row['product_id'];
        $productName = $row['name'];
        $productPrice = $row['price'];
        $productQuantity = $row['quantity'];
        $totalEachProduct = $productPrice * $productQuantity;
        $total += $totalEachProduct;
        echo "<tr><td>$productId</td><td>$productName</td><td>$productPrice</td><td>$productQuantity</td><td>$totalEachProduct</td></tr>";
    }
    if($total > 100)
    {
    	$tax = 10;
    } else {
    	$tax = 0;
    }
    $total_after_tax = $total * (1+($tax/100));
    echo "<tr><td colspan='4'>Tổng tiền trước thuế</td><td>$total</td></tr>";
    echo "<tr><td colspan='4'>Thuế</td><td>$tax%</td></tr>";
    echo "<tr><td colspan='4'>Tổng tiền sau thuế</td><td>$total_after_tax</td></tr>";
    echo "</table>";
} else {
    echo "Không có sản phẩm nào trong giỏ hàng của khách hàng.";
}

// Đóng kết nối cơ sở dữ liệu
mysqli_close($connection);
?>
    <div class="button">
      <a href="../../user/dashboard.php">Gửi thông tin đặt hàng và chờ xác nhận</a>
    </div>
  </div>
</body>
</html>
