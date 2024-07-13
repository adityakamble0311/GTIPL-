<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Growmore Technoline India Pvt Ltd.</title>
    <meta name="description" content="SkillGro - Online Courses & Education Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'include/tittle.php'; ?>
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"> -->
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

    <!--Preloader-->
    <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="assets/img/logo/preloader.svg" alt="Preloader"></div>
            </div>
        </div>
    </div>
    <!--Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="tg-flaticon-arrowhead-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <?php include 'include/header.php'; ?>

    <!-- main-area -->
    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title">Admission Form </h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">SingUp</span>
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
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="singUp-wrap">
                            <h2 class="title"> Fill Details & Make Payment </h2>
                            <p>Hey there! Ready to join the courses? We just need a few details from you to get started. Let's do this!</p>
                            <!-- <div class="account__social">
                                <a href="#" class="account__social-btn">
                                    <img src="assets/img/icons/google.svg" alt="img">
                                    Continue with google
                                </a>
                            </div> -->
            
                            <form id="internshipForm" method="post" action="#" enctype="multipart/form-data" onsubmit="return validateForm()">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="a1" placeholder="Course" value="Training + Internship - INR.2499.00" readonly="">
                                        <label for="a1">Course You Have Selected</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="a2" placeholder="First Name" required="">
                                        <label for="a2">First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="a3" placeholder="Middle Name" required="">
                                        <label for="a3">Middle Name</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="a4" placeholder="Last Name" required="">
                                        <label for="a4">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" name="a5" placeholder="Mobile Number" required="">
                                        <label for="a5">Mobile Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="a6" placeholder="Email Id" required="">
                                        <label for="a6">Email Id</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="a7" required="">
                                            <option value="" disabled="" selected="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <label for="gender">Gender</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" name="a8" placeholder="Date of Birth" required="">
                                        <label for="dob">Date of Birth</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="a9" placeholder="City" required="">
                                        <label for="a3">City</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="a10" placeholder="Pincode" required="">
                                        <label for="a4">Pincode</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="b7" placeholder="College / School Name" required="">
                                        <label for="a4">College/ School Name</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <select class="form-select" name="b8" required="">
                                            <option value="" disabled="" selected="">Select Location</option>
                                            <option value="Pune">Pune</option>
                                        </select>
                                        <label for="gender">Select Location</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <select class="form-select" name="b9" required="">
                                            <option value="" disabled="" selected="">Reference</option>
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
                                        <input type="file" class="form-control" name="image" id="image" accept="image/*" required="">
                                        <label for="image">Upload Adhar Card Front & Back Photo</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="g-recaptcha" data-sitekey="6Lcc2PopAAAAAMd5BDlx0Fey4HOn5FWhwKXY06ke"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-ic37zzq1cwec" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lcc2PopAAAAAMd5BDlx0Fey4HOn5FWhwKXY06ke&amp;co=aHR0cHM6Ly9ncm93bW9yZXRlY2hub2xpbmUuY29tOjQ0Mw..&amp;hl=en&amp;v=-80zvSY9h4i8O-ocN2P5qTJk&amp;size=normal&amp;cb=hovsh4k9mrnf"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" id="submitApplicationBtn" name="btn_submit">Submit &amp; Pay</button>
                                </div>
                            </div>
                        </form>
                            <!-- <form action="#" class="account__form">
                                <div class="row gutter-20">
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <label for="fast-name">First Name</label>
                                            <input type="text" id="fast-name" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <label for="last-name">Middle name</label>
                                            <input type="text" id="middle-name" placeholder="Middle name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <label for="last-name">Last name</label>
                                            <input type="text" id="last-name" placeholder="Last name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" placeholder="email">
                                </div>
                                <div class="form-grp">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" placeholder="password">
                                </div>
                                <div class="form-grp">
                                    <label for="confirm-password">Confirm Password</label>
                                    <input type="password" id="confirm-password" placeholder="Confirm Password">
                                </div>
                                <button type="submit" class="btn btn-two arrow-btn">Sign Up<img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></button>
                            </form> -->
                            <!-- <div class="account__switch">
                                <p>Already have an account?<a href="login.html">Login</a></p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- singUp-area-end -->

    </main>
    <!-- main-area-end -->

    <br> <br> ><br>
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
    </script>
</body>

</html>