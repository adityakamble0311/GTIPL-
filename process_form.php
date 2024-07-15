<?php
// Include the database configuration file
include 'include/config.php';

// Initialize variables to store form data
$course_id = mysqli_real_escape_string($con, $_POST['course_id']);
$course_name = mysqli_real_escape_string($con, $_POST['course_name']);
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

// Check if course_offer_cost is set in the POST data
if (isset($_POST['course_offer_cost'])) {
    $course_offer_cost = mysqli_real_escape_string($con, $_POST['course_offer_cost']);
} else {
    echo "Course offer cost is missing.";
    exit;
}

// File upload handling
$adhar_card_image = '';
if (isset($_FILES['adharCardImage']) && $_FILES['adharCardImage']['error'] == UPLOAD_ERR_OK) {
    $upload_dir = 'uploads/';
    $adhar_card_image = $upload_dir . basename($_FILES['adharCardImage']['name']);
    move_uploaded_file($_FILES['adharCardImage']['tmp_name'], $adhar_card_image);
}

// Insert data into database table tbl_admissions
$sql = "INSERT INTO tbl_admissions (course_id, course_name, course_cost, first_name, middle_name, last_name, mobile_number, email, gender, date_of_birth, city, pincode, college_school_name, location, reference, adhar_card_image, created_at)
        VALUES ('$course_id', '$course_name', '$course_offer_cost', '$first_name', '$middle_name', '$last_name', '$mobile_number', '$email', '$gender', '$dob', '$city', '$pincode', '$college_school_name', '$location', '$reference', '$adhar_card_image', NOW())";

if ($con->query($sql) === TRUE) {
    // Successfully inserted

    // Razorpay integration
    require 'vendor/autoload.php'; // Ensure you have included the Composer autoloader

    // Initialize Razorpay API
    $api = new Razorpay\Api\Api('rzp_test_v79g6opCXDslcd', 'VgYGZM21S3C8mzAxxIlZ6W9b');

    // Create an order in Razorpay
    $orderData = [
        'receipt'         => 'rcptid_11',
        'amount'          => $course_offer_cost * 100, // Amount in paisa
        'currency'        => 'INR',
        'payment_capture' => 1 // Auto capture
    ];

    $razorpayOrder = $api->order->create($orderData);

    $orderId = $razorpayOrder['id'];

    // Pass these details to Razorpay checkout
    $razorpayOrderData = [
        "key"               => "rzp_test_v79g6opCXDslcd",
        "amount"            => $course_offer_cost * 100,
        "name"              => $course_name,
        "description"       => "Course Payment",
        "image"             => "assets/img/logo/webicon.png",
        "prefill"           => [
            "name"              => $first_name . ' ' . $last_name,
            "email"             => $email,
            "contact"           => $mobile_number,
        ],
        "notes"             => [
            "address"           => $location,
            "merchant_order_id" => $orderId,
        ],
        "theme"             => [
            "color"             => "#F37254"
        ],
        "order_id"          => $orderId,
    ];

    // Encode the order data and pass to the Razorpay checkout script
    $jsonRazorpayOrderData = json_encode($razorpayOrderData);
    ?>

    <html>
    <head>
        <title>Redirecting to Razorpay</title>
    </head>
    <body>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
            var options = <?php echo $jsonRazorpayOrderData; ?>;
            var rzp = new Razorpay(options);
            rzp.open();
        </script>
    </body>
    </html>
    <?php
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Close connection
$con->close();
?>
