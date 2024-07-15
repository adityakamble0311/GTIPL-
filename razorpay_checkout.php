<?php
$order_id = $_GET['order_id']; // Get order ID from query parameter
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razorpay Checkout</title>
    <!-- Include your Razorpay checkout.js script -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
    <script>
    var options = {
        "key": "rzp_test_C756JzZS3p7QbM", // Enter your Razorpay key ID here
        "amount": "<?php echo $amount; ?>", // Amount in paise
        "currency": "INR",
        "name": "Your Company Name",
        "description": "Payment for Admission",
        "image": "https://your-company-logo-url.com/logo.png",
        "order_id": "<?php echo $order_id; ?>",
        "handler": function (response){
            // Handle success callback after payment success
            // You can redirect to a thank you page or do further processing
            console.log(response);
            alert('Payment successful! Payment ID: ' + response.razorpay_payment_id);
            window.location = 'thank_you.php'; // Redirect to thank you page
        },
        "prefill": {
            "name": "<?php echo $first_name . ' ' . $last_name; ?>",
            "email": "<?php echo $email; ?>",
            "contact": "<?php echo $mobile_number; ?>"
        },
        "notes": {
            "address": "Razorpay Corporate Office"
        },
        "theme": {
            "color": "#F37254"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.on('payment.failed', function (response){
        // Handle error callback if payment fails
        console.log(response.error.code);
        console.log(response.error.description);
        console.log(response.error.source);
        console.log(response.error.step);
        console.log(response.error.reason);
        console.log(response.error.metadata.order_id);
        console.log(response.error.metadata.payment_id);
        alert('Payment failed! Please try again.');
    });
    rzp1.open();
    </script>
</body>
</html>
