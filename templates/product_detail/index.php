<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo "name"; ?></title>
</head>
<style type="text/css">
body {
  margin: 0;
  padding: 0;
  font-size: 17px;
  line-height: 1.4705882353;
  font-weight: 400;
  letter-spacing: -0.022em;
  font-family: SF Pro Text,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
  background-color: #fff;
  color: #1d1d1f;
  font-style: normal;
  font-synthesis: none;
  -webkit-font-smoothing: antialiased;
  direction: ltr;
  text-align: left;
  min-width: 320px;
}

h1 {
  font-size: 24px;
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 10px;
}

h2 {
  font-size: 18px;
  font-weight: 500;
  margin-top: 0;
  margin-bottom: 10px;
}

p {
  margin-top: 0;
  margin-bottom: 10px;
}

img {
  max-width: 100%;
}

select {
  width: 100%;
}

form {
  margin: 0 auto;
  width: 400px;
}

.container {
  max-width: 600px;
  margin: 0 auto;
}

.product-info {
  margin-top: 20px;
}

.product-image {
  float: left;
  width: 200px;
  margin-right: 20px;
}

.product-details {
  float: left;
  width: 400px;
}

.product-name {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 10px;
}

.product-price {
  font-size: 18px;
  font-weight: 500;
  margin-bottom: 10px;
}

.product-description {
  margin-bottom: 20px;
}

</style>
<body>
<header>
	<?php include '../../includes/navbar/index.php'; ?>
</header>
<?php
if (isset($_GET['data'])) {
    // Giải mã dữ liệu JSON đã được mã hóa
    $jsonData = urldecode($_GET['data']);

    // Phân tích dữ liệu JSON thành mảng
    $productData = json_decode($jsonData, true);

    // Kiểm tra xem phân tích dữ liệu JSON có thành công hay không
    if ($productData !== null) {
        // Hiển thị thông tin sản phẩm
        $id = $productData['id'];
        $name = $productData['name'];
        $description = $productData['description'];
        $price = $productData['price'];
        $cpu = $productData['cpu'];
        $ram = $productData['ram'];
        $storage = $productData['storage'];
        $graphic_card = $productData['graphic_card'];
        $display = $productData['display'];
    } else {
        echo "Lỗi khi phân tích dữ liệu JSON.";
    }
} else {
    echo "Không tìm thấy dữ liệu JSON.";
}
?>
<form action="../checkout/index.php">

	<div>
		<h1><?php echo $name; ?></h1>
		<div>
			<select>
				<option>red</option>
				<option>green</option>
				<option>red</option>
			</select>
		</div>
		<div class="product-descriotion">
			<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/macbook-air-space-gray-select-201810?wid=452&hei=420&fmt=jpeg&qlt=95&.v=1664472289661">
			<h2>DISPLAY <?php echo $display; ?></h2>
			<h2>CPU <?php echo $cpu; ?></h2>
			<h2>RAM <?php echo $ram; ?></h2>
			<h2>Storage <?php echo $storage; ?></h2>
			<h2>GRAPHIC CARD <?php echo $graphic_card; ?></h2>
			<h2>Price:  <?php echo $price; ?></h2>
			<button><a href='../checkout/index.php?id=<?php echo $id; ?>'>Buy now</a></button>
			<button href="../checkout/index.php">Add to card</button>
		</div>


		<div class="product-review">
			<h2>The same <?php echo $display; ?></h2>
			<h2>Description and review <?php echo $description; ?></h2>
		</div>
	</div>

</form>
</body>
</html>






