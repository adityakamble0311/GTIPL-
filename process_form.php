<?php
// Include the database configuration file
include 'include/config.php';

// Include Composer's autoload file
require 'vendor/autoload.php';

use Razorpay\Api\Api;
use Razorpay\Api\Errors\BadRequestError;

// Initialize variables with default values
$course_id = "";
$course_name = "";
$course_offer_cost = 0; // Initialize as integer or float
$first_name = "";
$middle_name = "";
$last_name = "";
$mobile_number = "";
$email = "";
$gender = "";
$dob = "";
$city = "";
$pincode = "";
$college_school_name = "";
$location = "";
$reference = "";
$adhar_card_image = "";

// Check if course_id is set and is a valid integer
if (isset($_POST['course_id']) && filter_var($_POST['course_id'], FILTER_VALIDATE_INT)) {
    // Sanitize course_id to prevent SQL injection
    $course_id = mysqli_real_escape_string($con, $_POST['course_id']);

    try {
        // Fetch course details including course_offer_cost from tbl_courses
        $sql = "SELECT course_name, course_offer_cost FROM tbl_courses WHERE course_id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param('i', $course_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $course_name = $row['course_name'];
            $course_offer_cost = floatval($row['course_offer_cost']);
        } else {
            echo "Course not found.";
            exit;
        }

        // Collect and sanitize remaining form data
        $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
        $middle_name = mysqli_real_escape_string($con, $_POST['middle_name']);
        $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
        $mobile_number = mysqli_real_escape_string($con, $_POST['mobileNumber']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
        $dob = mysqli_real_escape_string($con, $_POST['dob']);
        $city = mysqli_real_escape_string($con, $_POST['city']);
        $pincode = mysqli_real_escape_string($con, $_POST['pincode']);
        $college_school_name = mysqli_real_escape_string($con, $_POST['collegeSchoolName']);
        $location = mysqli_real_escape_string($con, $_POST['location']);
        $reference = mysqli_real_escape_string($con, $_POST['reference']);
        $adhar_card_image = $_FILES['adharCardImage']['name'];

        // Upload Adhar card image
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["adharCardImage"]["name"]);
        move_uploaded_file($_FILES["adharCardImage"]["tmp_name"], $target_file);

        // Initialize Razorpay API with your API Key and Secret Key
        $api = new Api('rzp_test_C756JzZS3p7QbM', 'Lm7AP3ofs3nIdIUNE23XcHqz');

        // Check Razorpay minimum amount requirement for INR (example)
        $min_amount_in_paise = 1000; // Example: Razorpay's minimum amount in paise for INR transactions

        // Ensure the order amount meets or exceeds the minimum amount
        $order_amount = max($course_offer_cost * 100, $min_amount_in_paise); // Convert to paise

        // Create Razorpay order
        $orderData = [
            'receipt'         => strval($course_id), // Use course_id as receipt (must be a string)
            'amount'          => $order_amount,
            'currency'        => 'INR',
            'payment_capture' => 1 // auto capture
        ];

        $razorpayOrder = $api->order->create($orderData);

        // Store the order ID in the session to verify the payment later
        session_start();
        $_SESSION['razorpay_order_id'] = $razorpayOrder['id'];

        // Prepare data to store in the database
        $payment_status = 'pending';
        $transaction_id = '';

        $stmt = $con->prepare("INSERT INTO tbl_admissions (course_id, course_name, course_offer_cost, first_name, middle_name, last_name, mobile_number, email, gender, dob, city, pincode, college_school_name, location, reference, adhar_card_image, transaction_id, payment_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('isssssssssssssssss', $course_id, $course_name, $course_offer_cost, $first_name, $middle_name, $last_name, $mobile_number, $email, $gender, $dob, $city, $pincode, $college_school_name, $location, $reference, $adhar_card_image, $transaction_id, $payment_status);

        // Execute query
        if ($stmt->execute()) {
            // Redirect to payment page
            header("Location: payment.php?order_id=" . $razorpayOrder['id']);
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    } catch (BadRequestError $e) {
        echo "Razorpay Error: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid course ID.";
}
?>
