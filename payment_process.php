<?php
// Include the database configuration file
include 'include/config.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Assuming you have fetched necessary details like $order_id and $amount from database or previous page
$order_id = $_GET['course_id']; // Get order ID from query parameter
$amount = $_GET['amount']; // Get amount from query parameter

// Fetch user details from database based on course_id (assuming you have stored these details during form submission)
$sql = "SELECT first_name, last_name, email, mobile_number FROM tbl_admissions WHERE course_id = '$order_id'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Fetch user details
    $row = $result->fetch_assoc();
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $email = $row['email'];
    $mobile_number = $row['mobile_number'];
} else {
    // Handle error if no record found
    echo "Error: No user found for course ID: " . $order_id;
    exit;
}

$con->close();
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
        "key": "rzp_test_C756JzZS3p7QbM", // Replace with your actual Razorpay key ID
        "amount": "<?php echo $amount; ?>", // Amount in paise (e.g., 2000 for ₹20.00)
        "currency": "INR",
        "name": "Your Company Name", // Replace with your company name
        "description": "Payment for Admission",
        "image": "https://your-company-logo-url.com/logo.png", // Replace with your company logo URL
        "order_id": "<?php echo $order_id; ?>",
        "handler": function (response){
            // Handle success callback after payment success
            // You can redirect to a thank you page or do further processing
            console.log(response);
            alert('Payment successful! Payment ID: ' + response.razorpay_payment_id);
            window.location = 'confirmation.php'; // Redirect to thank you page
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
            "color": "#F37254" // Customize theme color to match your website
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
