<!DOCTYPE html>
<html>
<head>
    <title>Order</title>
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

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="text"],
        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Order</h1>

        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="product">Product:</label>
            <select id="product" name="product" required>
                <option value="">Select a product</option>
                <option value="Product 1">Product 1</option>
                <option value="Product 2">Product 2</option>
                <option value="Product 3">Product 3</option>
            </select>

            <input type="submit" value="Place Order">
        </form>
    </div>
</body>
</html>
