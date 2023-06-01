<style type="text/css">h1 {
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

// Get the cart items from the session
$cart = $_SESSION['cart'];

// Calculate the total price
$total = 0;
foreach ($cart as $item) {
  $total += $item['quantity'] * $item['price'];
}

// Display the checkout form
?>
<?php

// If the form is submitted, process the order
if (isset($_POST['submit'])) {
  // $_SESSION['shipping_name'] = $_POST['shipping_name'];
  // $_SESSION['shipping_email'] = $_POST['shipping_email'];
  // $_SESSION['shipping_address'] = $_POST['shipping_address'];
  // $_SESSION['shipping_city'] = $_POST['shipping_city'];
  // $_SESSION['shipping_state'] = $_POST['shipping_state'];
  // $_SESSION['shipping_zip'] = $_POST['shipping_zip'];

  // Get the payment method
  $payment_method = $_POST['payment_method'];

  // Process the order
  switch ($payment_method) {
    case 'credit_card':
      $url = '../credit_checkout/index.php';

            header('Location: ' . $url);
            exit;
      break;
    case 'paypal':
      // Process the PayPal payment
      break;
  }

  // Redirect to the success page
  header('Location: success.php');

}

?>


<h1>Checkout</h1>

<form action="index.php" method="post">

  <input type="hidden" name="total" value="<?php echo $total; ?>">

  <h2>Shipping Address</h2>

  <input type="text" name="shipping_name" placeholder="Full Name">
  <input type="text" name="shipping_email" placeholder="Email">
  <input type="text" name="shipping_address" placeholder="Address">
  <input type="text" name="shipping_city" placeholder="City">
  <input type="text" name="shipping_state" placeholder="State">
  <input type="text" name="shipping_zip" placeholder="Zip">

  <h2>Payment Method</h2>

  <input type="radio" name="payment_method" value="credit_card"> Credit Card
  <input type="radio" name="payment_method" value="cash"> Cash

  <h2>Place Order</h2>

  <input type="submit" value="Place Order">

</form>

