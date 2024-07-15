<?php
// Include the database configuration file
include 'include/config.php';

// Initialize variables
$course_name = "";
$course_cost = "";

// Check if course_id is set and is a valid integer
if (isset($_GET['course_id']) && filter_var($_GET['course_id'], FILTER_VALIDATE_INT)) {
    // Sanitize course_id to prevent SQL injection
    $course_id = mysqli_real_escape_string($con, $_GET['course_id']);

    // SQL query to fetch course details for the given course_id
    $sql = "SELECT * FROM tbl_courses WHERE course_id = $course_id";

    // Execute query
    $result = $con->query($sql);

    // Check if query execution was successful
    if ($result) {
        // Check if a course is found
        if ($result->num_rows > 0) {
            // Fetch course details
            $row = $result->fetch_assoc();
            $course_name = $row["course_name"];
            $course_offer_cost = $row["course_offer_cost"];;
        
        } else {
            echo "Course not found.";
            exit; // Exit if course not found
        }
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
        exit; // Exit on database query error
    }
} else {
    echo "Invalid course ID.";
    exit; // Exit if course_id parameter is missing or invalid
}

// Close connection
$con->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <!-- Include your CSS files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon-skillgro.css">
    <link rel="stylesheet" href="assets/css/flaticon-skillgro-new.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/default-icons.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/plyr.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/tg-cursor.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!-- Include your header -->
    <?php include 'include/header.php'; ?>

    <!-- Main content area -->
    <main class="main-area fix">
        <!-- Breadcrumb area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <!-- Your breadcrumb content -->
        </section>
        <!-- Breadcrumb area end -->

        <!-- Admission form area -->
        <section class="singUp-area section-py-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="singUp-wrap">
                            <h2 class="title">Fill Details & Make Payment</h2>
                            <p>Hey there! Ready to join the courses? We just need a few details from you to get started. Let's do this!</p>

                          <form id="internshipForm" method="post" action="process_form.php?course_id=<?php echo urlencode($course_id); ?>" enctype="multipart/form-data">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="course_name" placeholder="Course" value="<?php echo htmlspecialchars($course_name . ' - ' . $course_offer_cost); ?>" readonly>
                                            <label for="course_name">Course You Have Selected</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                                            <label for="first_name">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="middle_name" placeholder="Middle Name" required>
                                            <label for="middle_name">Middle Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                                            <label for="last_name">Last Name</label>
                                        </div>
                                    </div>
                                   <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="mobileNumber" placeholder="Mobile Number" required>
                                            <label for="mobileNumber">Mobile Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" placeholder="Email Id" required>
                                            <label for="email">Email Id</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" name="gender" required>
                                                <option value="" disabled selected>Select Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <label for="gender">Gender</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" name="dob" placeholder="Date of Birth" required>
                                            <label for="dob">Date of Birth</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="city" placeholder="City" required>
                                            <label for="city">City</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="pincode" placeholder="Pincode" required>
                                            <label for="pincode">Pincode</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="collegeSchoolName" placeholder="College / School Name" required>
                                            <label for="collegeSchoolName">College/ School Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-select" name="location" required>
                                                <option value="" disabled selected>Select Location</option>
                                                <option value="Pune">Pune</option>
                                            </select>
                                            <label for="location">Select Location</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-select" name="reference" required>
                                                <option value="" disabled selected>Select Reference</option>
                                                <option value="Social Media">Social Media</option>
                                                <option value="College Group">College Group</option>
                                                <option value="Friends">Friends</option>
                                                <option value="Family">Family</option>
                                            </select>
                                            <label for="reference">Reference</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" name="adharCardImage" id="adharCardImage" accept="image/*" required>
                                            <label for="adharCardImage">Upload Adhar Card Front & Back Photo</label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-12">
                                        <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div>
                                    </div> -->
                                </div>
                                <div class="col-12">
                                    <input type="hidden" name="course_id" value="<?php echo $course_id;?>">
                                    <a href="process_form.php?course_id=' . urlencode($course_id) .'"><button class="btn btn-primary w-100 py-3" type="submit" name="btn_submit">Submit & Pay</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Admission form area end -->
    </main>
    <!-- Main area end -->

    <!-- Include your footer -->
    <?php include 'include/footer.php'; ?>

    <!-- Include your JavaScript files -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Your other scripts -->

</body>

</html>
