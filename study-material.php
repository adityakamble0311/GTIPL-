<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SkillGro - Online Courses & Education Template</title>
    <meta name="description" content="SkillGro - Online Courses & Education Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
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

<!-- main-area -->
<main class="main-area">

    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg breadcrumb__bg-three" data-background="assets/img/bg/breadcrumb_bg.jpg">
        <div class="breadcrumb__shape-wrap">
            <img src="assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
            <img src="assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
            <img src="assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
            <img src="assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- dashboard-area -->
    <section class="dashboard__area section-pb-120">
        <div class="container">
            <div class="dashboard__top-wrap">
                <div class="dashboard__top-bg" data-background="assets/img/cover.png"></div>
                <div class="dashboard__instructor-info">
                    <div class="dashboard__instructor-info-left">
                        <div class="thumb">
                            <img src="assets/img/courses/details_instructors02.jpg" alt="img">
                        </div>
                        <div class="content">
                            <h4 class="title">Mayur Pawar</h4>
                            <ul class="list-wrap">
                               
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
              
                <div class="row">
                    <div class="col-lg-3">
                        <div class="dashboard__sidebar-wrap">
                            <div class="dashboard__sidebar-title mb-20">
                                <h6 class="title">Welcome, Mayur</h6>
                            </div>
                            <nav class="dashboard__sidebar-menu">
                                <ul class="list-wrap">
                                    <li>
                                        <a href="student-dashboard.php">
                                            <i class="fas fa-home"></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="student-profile.php">
                                            <i class="skillgro-avatar"></i>
                                            My Profile
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="student-enrolled-courses.php">
                                            <i class="skillgro-book"></i>
                                            Study Material
                                        </a>
                                    </li>
                                   
                                </ul>
                            </nav>
                            <div class="dashboard__sidebar-title mt-30 mb-20">
                                <h6 class="title">User</h6>
                            </div>
                            <nav class="dashboard__sidebar-menu">
                                <ul class="list-wrap">
                                   
                                    <li>
                                        <a href="index.php">
                                            <i class="skillgro-logout"></i>
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="dashboard__content-wrap dashboard__content-wrap-two">
                            <div class="dashboard__content-title">
                                <h4 class="title">Enrolled Courses</h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="dashboard__nav-wrap">
                                        <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button"
                                                    role="tab" aria-controls="all-tab-pane" aria-selected="true">
                                                    All Material
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button"
                                                    role="tab" aria-controls="design-tab-pane" aria-selected="false">
                                                    Videos
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="business-tab" data-bs-toggle="tab" data-bs-target="#business-tab-pane" type="button"
                                                    role="tab" aria-controls="business-tab-pane" aria-selected="false">
                                                    Files
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content" id="courseTabContent">
                                        <!-- Files To be Added -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- dashboard-area-end -->

    </main>
    <!-- main-area-end -->


<br><br><br><br>
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