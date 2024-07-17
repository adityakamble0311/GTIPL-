<?php
// Include the database configuration file
include 'include/config.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $course_id = mysqli_real_escape_string($con, $_POST['course_id']);
    $course_name = mysqli_real_escape_string($con, $_POST['course_name']);
    $course_offer_cost = mysqli_real_escape_string($con, $_POST['course_offer_cost']);
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $middle_name = mysqli_real_escape_string($con, $_POST['middle_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $mobileNumber = mysqli_real_escape_string($con, $_POST['mobileNumber']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $pincode = mysqli_real_escape_string($con, $_POST['pincode']);
    $collegeSchoolName = mysqli_real_escape_string($con, $_POST['collegeSchoolName']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $reference = mysqli_real_escape_string($con, $_POST['reference']);
    $adharCardImage = $_FILES['adharCardImage']['name'];

    // File upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($adharCardImage);

    // Check if file uploaded successfully
    if (move_uploaded_file($_FILES['adharCardImage']['tmp_name'], $target_file)) {
        // Insert data into the database
        $sql = "INSERT INTO tbl_admissions (course_id, course_name, course_offer_cost, first_name, middle_name, last_name, mobile_number, email, gender, date_of_birth, city, pincode, college_school_name, location, reference, adhar_card_image) 
                VALUES ('$course_id', '$course_name', '$course_offer_cost', '$first_name', '$middle_name', '$last_name', '$mobileNumber', '$email', '$gender', '$dob', '$city', '$pincode', '$collegeSchoolName', '$location', '$reference', '$adharCardImage')";

        // Print the SQL query for debugging
        echo "SQL Query: " . $sql . "<br>";

        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $con->close();
} else {
    echo "Invalid request method.";
}
?>
