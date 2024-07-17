<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Growmore Technoline India Pvt Ltd.</title>
    <meta name="description" content="SkillGro - Online Courses & Education Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'include/tittle.php'; ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
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

<?php include 'include/header.php'; ?>
    <!-- header-area-end -->
    <?php include 'include/config.php'; ?>

    <!-- main-area -->
    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title">Student Login</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Login</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape-wrap">
                <img src="assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
                <img src="assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
                <img src="assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
                <img src="assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
                <img src="assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- singUp-area -->
        <section class="singUp-area section-py-120">
            <div class="container text-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-6 col-lg-8 ">
                        <div class="singUp-wrap">
                            <img src="assets/img/logo/growmore_logo.png" width="220"><br> 
                            <center><img src="./oc-email-verification (1).svg" width="230"></center> <br>
            
                            <div class="account__social">
                            </div>
            
                            <form action="login.php" method="POST" class="account__form" onsubmit="return validateForm()">
                                <div class="form-grp">
                                    <input id="mobile_no" type="text" name="mobile_no" placeholder="Enter Register Mobile No">
                                </div>
                                <div class="form-grp">
                                    <div class="g-recaptcha" data-sitekey="6Lcc2PopAAAAAMd5BDlx0Fey4HOn5FWhwKXY06ke"></div>
                                </div>
                                <button type="submit" class="btn btn-two arrow-btn">Send OTP <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- singUp-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <?php include 'include/footer.php'; ?>
    <!-- footer-area-end -->

    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.odometer.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/tween-max.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/tg-cursor.min.js"></script>
    <script src="assets/js/vivus.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/svg-inject.min.js"></script>
    <script src="assets/js/jquery.circleType.js"></script>
    <script src="assets/js/jquery.lettering.min.js"></script>
    <script src="assets/js/plyr.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        SVGInject(document.querySelectorAll("img.injectable"));

        function validateForm() {
            var mobileNo = document.getElementById("mobile_no").value.trim();
            if (mobileNo === "") {
                alert("Please enter your mobile number.");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>

<?php
// Include your database connection configuration
include 'include/config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate recaptcha if needed
    // $recaptchaResponse = $_POST['g-recaptcha-response'];
    // $secretKey = 'your_secret_key';
    // $url = 'https://www.google.com/recaptcha/api/siteverify';
    // $data = ['secret' => $secretKey, 'response' => $recaptchaResponse];
    // $options = [
    //     'http' => [
    //         'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
    //         'method' => 'POST',
    //         'content' => http_build_query($data)
    //     ]
    // ];
    // $context = stream_context_create($options);
    // $result = file_get_contents($url, false, $context);
    // $resultJson = json_decode($result);
    // if (!$resultJson->success) {
    //     die('Failed recaptcha verification');
    // }

    // Get mobile number from form
    $mobileNumber = $_POST['mobile_no'];

    // Query to check if the mobile number exists in your database
    $query = "SELECT * FROM `tbl-admission` WHERE `mobile-number` = '$mobileNumber'";
    $result = mysqli_query($conn, $query);

    // Check if query was successful
    if ($result) {
        // Check if a row was returned (mobile number exists)
        if (mysqli_num_rows($result) > 0) {
            // Mobile number exists, proceed to OTP verification page
            header("Location: otp-login.php");
            exit;
        } else {
            // Mobile number does not exist
            echo "<script>alert('Mobile number not found. Please enter a registered mobile number.');</script>";
        }
    } else {
        // Query failed
        echo "Error: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>
