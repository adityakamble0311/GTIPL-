<?php
// Include the database configuration file
include 'include/config.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Validate and fetch query parameters
$order_id = isset($_GET['course_id']) ? $_GET['course_id'] : '';
$amount = isset($_GET['amount']) ? $_GET['amount'] : '';

if (empty($order_id) || empty($amount)) {
    echo "Error: Missing order ID or amount.";
    exit;
}

// Fetch user details from database based on course_id
$sql = "SELECT first_name, last_name, email, mobile_number FROM tbl_admissions WHERE course_id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("s", $order_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch user details
    $row = $result->fetch_assoc();
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $email = $row['email'];
    $mobile_number = $row['mobile_number'];
} else {
    // Handle error if no record found
    echo "Error: No user found for course ID: " . htmlspecialchars($order_id);
    exit;
}

$stmt->close();
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
    document.addEventListener("DOMContentLoaded", function() {
        var amountInPaise = <?php echo $amount * 100; ?>; // Convert amount to paise
        console.log("Amount in paise: " + amountInPaise); // Debugging: Log the amount

        var options = {
            "key": "rzp_test_C756JzZS3p7QbM",
            "amount": amountInPaise.toString(),
            "currency": "INR",
            "name": "Your Company Name", 
            "description": "Payment for Admission",
            "image": "https://your-company-logo-url.com/logo.png", 
            "order_id": "<?php echo htmlspecialchars($order_id); ?>",
            "handler": function (response){
                console.log(response);
                alert('Payment successful! Payment ID: ' + response.razorpay_payment_id);
                window.location = 'confirmation.php';
            },
            "prefill": {
                "name": "<?php echo htmlspecialchars($first_name . ' ' . $last_name); ?>",
                "email": "<?php echo htmlspecialchars($email); ?>",
                "contact": "<?php echo htmlspecialchars($mobile_number); ?>"
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#F37254"
            }
        };

        console.log("Razorpay options: ", options); 

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
    });
    </script>
</body>
</html>
