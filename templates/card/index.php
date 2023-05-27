<!DOCTYPE html>
<html>
<head>
    <title>Giỏ hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .cart-item-image {
            flex: 0 0 100px;
            margin-right: 20px;
        }

        .cart-item-image img {
            width: 100%;
            height: auto;
        }

        .cart-item-details {
            flex-grow: 1;
        }

        .cart-item-name {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .cart-item-price {
            color: #888;
            margin-bottom: 5px;
        }

        .cart-item-quantity {
            margin-bottom: 5px;
        }

        .cart-item-remove {
            flex: 0 0 50px;
            text-align: center;
        }

        .cart-item-remove a {
            color: #f44336;
            text-decoration: none;
        }

        .cart-total {
            text-align: right;
            font-weight: bold;
            margin-top: 20px;
        }

        .cart-action {
            text-align: right;
            margin-top: 20px;
        }

        .cart-action a {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Giỏ hàng</h1>

        <div class="cart-item">
            <div class="cart-item-image">
                <img src="product1.jpg" alt="Product Image">
            </div>
            <div class="cart-item-details">
                <div class="cart-item-name">Sản phẩm 1</div>
                <div class="cart-item-price">$10</div>
                <div class="cart-item-quantity">Số lượng: 1</div>
            </div>
            <div class="cart-item-remove">
                <a href="#">Xóa</a>
            </div>
        </div>

        <div class="cart-item">
            <div class="cart-item-image">
                <img src="product2.jpg" alt="Product Image">
            </div>
            <div class="cart-item-details">
                <div class="cart-item-name">Sản phẩm 2</div>
                <div class="cart-item-price">$20</div>
                <div class="cart-item-quantity">Số lượng: 2</div>
            </div>
            <div class="cart-item-remove">
                <a href="#">Xóa</a>
            </div>
        </div>

        <div class="cart-total">Tổng cộng: $50</div>

        <div class="cart-action">
            <a href="#">Tiếp tục mua hàng</a>
            <a href="#">Thanh toán</a>
        </div>
    </div>
</body>
</html>
