<?php
// Include Razorpay PHP SDK
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;

// Fetch the Razorpay order ID from the session
session_start();
$razorpayOrderId = $_SESSION['razorpay_order_id'];

// Initialize Razorpay API
$api = new Api('your_api_key', 'your_api_secret');

// Fetch the order details
$order = $api->order->fetch($razorpayOrderId);

// Render the payment page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <!-- Include your CSS files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="container">
        <h2>Complete Your Payment</h2>
        <form action="verify_payment.php" method="POST">
            <script
                src="https://checkout.razorpay.com/v1/checkout.js"
                data-key="your_api_key"
                data-amount="<?php echo $order['amount']; ?>"
                data-currency="INR"
                data-order_id="<?php echo $razorpayOrderId; ?>"
                data-buttontext="Pay with Razorpay"
                data-name="Your Site Name"
                data-description="Course Payment"
                data-image="https://your_logo_url"
                data-prefill.name="<?php echo $first_name; ?>"
                data-prefill.email="<?php echo $email; ?>"
                data-theme.color="#F37254"
            ></script>
            <input type="hidden" name="order_id" value="<?php echo $razorpayOrderId; ?>">
        </form>
    </div>
</body>
</html>
