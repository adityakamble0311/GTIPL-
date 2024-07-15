<?php
// Include the database configuration file
include 'include/config.php';

// Include Razorpay PHP SDK
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;

// Fetch the Razorpay order ID from the session
session_start();
$razorpayOrderId = $_SESSION['razorpay_order_id'];

// Initialize Razorpay API
$api = new Api('rzp_test_C756JzZS3p7QbM', 'Lm7AP3ofs3nIdIUNE23XcHqz');

// Fetch the payment details
$success = true;
$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false) {
    $razorpayPaymentId = $_POST['razorpay_payment_id'];
    $razorpaySignature = $_POST['razorpay_signature'];

    // Verify payment signature
    try {
        $attributes = array(
            'razorpay_order_id' => $razorpayOrderId,
            'razorpay_payment_id' => $razorpayPaymentId,
            'razorpay_signature' => $razorpaySignature
        );

        $api->utility->verifyPaymentSignature($attributes);

        // Payment successful
        $success = true;
    } catch (SignatureVerificationError $e) {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

// Update the database based on payment status
if ($success) {
    // Update payment status and transaction ID in the database
    $transaction_id = $razorpayPaymentId;
    $payment_status = 'success';

    $stmt = $con->prepare("UPDATE tbl_admissions SET transaction_id = ?, payment_status = ? WHERE course_id = ? AND transaction_id = ''");
    $stmt->bind_param('ssi', $transaction_id, $payment_status, $course_id);

    // Execute query
    if ($stmt->execute()) {
        echo "Payment successful!";
        // Redirect to a success page
        header("Location: confirmation.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "Payment failed: " . $error;
    // Redirect to a failure page
    header("Location: failure.php");
    exit();
}
?>
