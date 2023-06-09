<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Checkout</title>
</head>

<style type="text/css">
  h1 {
  font-size: 2em;
  margin-top: 0;
  } 

  form {
    width: 500px;
    margin: 0 auto;
  }

  input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
  }

  input[type="submit"] {
    background-color: #000;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
  }

  .checkbox {
    margin-bottom: 10px;
  }

  .shipping-address {
    display: none;
  }

  input[type="checkbox"]:checked + .shipping-address {
    display: block;
  }
</style>
<?php
session_start();
if (isset($_POST['place_order'])) {
    // Check if the payment method is selected
    if (isset($_POST['payment_method'])) {
        $selectedPaymentMethod = $_POST['payment_method'];
        $name_receiver = $_POST['name_receiver'];
        $phone_receiver = $_POST['phone_receiver'];
        $address_receiver = $_POST['address_receiver'];
        $note = $_POST['note'];

        $_SESSION['name_receiver'] = $name_receiver;
        $_SESSION['phone_receiver'] = $phone_receiver;
        $_SESSION['address_receiver'] = $address_receiver;
        $_SESSION['note'] = $note;
        $_SESSION['selectedPaymentMethod'] = $selectedPaymentMethod;

        if (empty($selectedPaymentMethod) or empty($name_receiver) or empty($phone_receiver)or empty($address_receiver)){
            echo "<script>alert('Vui lòng điền đầy đủ thông tin');</script>";
        } else {
          header("Location: ../bill/index.php");
        }
    } else if (empty($selectedPaymentMethod) or empty($name_receiver) or empty($phone_receiver)or empty($address_receiver)) {
        // Payment method not selected
        echo "<script>alert('Vui lòng điền đầy đủ thông tin');</script>";
    }
}

?>

<body>
  <form action="index.php" method="post">

    <input type="hidden" name="total" value="<?php echo $total; ?>">


    <h2>Payment Information</h2>

    <input type="text" name="name_receiver" placeholder="Full Name">
    <input type="text" name="phone_receiver" placeholder="Phone">
    <input type="text" name="address_receiver" placeholder="Address">
    <input type="text" name="note" placeholder="note">

    <h2>Payment Method</h2>

    <input type="radio" name="payment_method" value="credit card"> Credit Card
    <input type="radio" name="payment_method" value="cash"> Cash

    <h2>Place Order</h2>  
    <input type="submit" name="place_order" value="Place Order">

  </form>
</body>
</html>
