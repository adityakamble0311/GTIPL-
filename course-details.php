<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Growmore Technoline India Pvt Ltd.</title>
    <meta name="description" content="SkillGro - Online Courses & Education Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/webicon.png">
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
    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .courses__details-area {
            display: flex;
            flex-wrap: wrap;
        }
        .courses__details-sidebar {
            position: sticky;
            top: 80px; /* Adjust as needed */
        }
    </style>
</head>

<body>

<!-- Scroll-top -->
<button class="scroll__top scroll-to-target" data-target="html">
    <i class="tg-flaticon-arrowhead-up"></i>
</button>
<!-- Scroll-top-end-->

<!-- header-area -->
<?php include 'include/header.php'; ?>
<!-- header-area-end -->

<!-- main-area -->
<main class="main-area fix">

    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg breadcrumb__bg-two" data-background="assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index.html">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index.html">Courses</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Resolving Conflicts Between Designers And Engineers</span>
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
    </div>
    <!-- breadcrumb-area-end -->

    <!-- courses-details-area -->
    <section class="courses__details-area section-py-120">
        <div class="container">
            <div class="row courses__details-wrapper">

                <!-- Main Content Area -->
                <div class="col-xl-9 col-lg-8 order-2 order-lg-1">
                    <!-- Course Details fetched dynamically -->
                    <?php
                    include 'include/config.php';
                    if (isset($_GET['course_id']) && filter_var($_GET['course_id'], FILTER_VALIDATE_INT)) {
                        $course_id = mysqli_real_escape_string($con, $_GET['course_id']);
                        $sql = "SELECT * FROM tbl_courses WHERE course_id = $course_id";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $course_name = $row["course_name"];
                            $course_description = $row["course_description"];
                            $course_deatils_img = $row["course_deatils_img"];
                            $module_1 = $row["module_1"];
                            $module_2 = $row["module_2"];
                            $module_3 = $row["module_3"];
                            // Add more fields as needed

                            // Output HTML for the fetched course details
                            echo '<div class="courses__details-thumb">';
                            echo '<img src="'.$course_deatils_img.'" alt="'.$course_name.'">';
                            echo '</div>';
                            echo '<div class="courses__details-content">';
                            echo '<h2 class="title">'.$course_name.'</h2>';
                            echo '</div>';
                            
                            // HTML for tabs and tab content
                            echo '<ul class="nav nav-tabs" id="myTab" role="tablist">';

                            // Overview tab
                            echo '<li class="nav-item" role="presentation">';
                            echo '<button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview-tab-pane" type="button" role="tab" aria-controls="overview-tab-pane" aria-selected="true">Overview</button>';
                            echo '</li>';

                            // Curriculum tab
                            echo '<li class="nav-item" role="presentation">';
                            echo '<button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum-tab-pane" type="button" role="tab" aria-controls="curriculum-tab-pane" aria-selected="false">Curriculum</button>';
                            echo '</li>';

                            // Benefits tab
                            echo '<li class="nav-item" role="presentation">';
                            echo '<button class="nav-link" id="benefits-tab" data-bs-toggle="tab" data-bs-target="#benefits-tab-pane" type="button" role="tab" aria-controls="benefits-tab-pane" aria-selected="false">Benefits</button>';
                            echo '</li>';
                            echo '</ul>';

                            echo '<div class="tab-content" id="myTabContent">';
                            echo '<div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">';
                            echo '<div class="courses__overview-wrap">';
                            echo '<h3 class="title">Course Description</h3>';
                            echo '<p>'.$course_description.'</p>';
                            echo '<h3 class="title">What you\'ll get from this course?</h3>';
                            echo '<ul class="about__info-list list-wrap">';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Total of 45 lectures conducted</p></li>';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Expert instructors in web development</p></li>';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Hands-on projects and assignments</p></li>';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Interactive learning environment</p></li>';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Certification upon completion</p></li>';
                            echo '</ul>';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="tab-pane fade" id="curriculum-tab-pane" role="tabpanel" aria-labelledby="curriculum-tab" tabindex="0">';
                            echo '<div class="courses__curriculum-wrap">';
                            echo '<h3 class="title">Course Curriculum</h3>';
                            echo '<div class="accordion" id="accordionExample">';
                            echo '<div class="accordion-item">';
                            echo '<h2 class="accordion-header" id="headingOne">';
                            echo '<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">';
                            echo 'Module 1: '.$module_1;
                            echo '</button>';
                            echo '</h2>';
                            echo '<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">';
                            echo '<div class="accordion-body">';
                            echo '<ul class="about__info-list list-wrap">';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Lesson 1: Introduction to '.$module_1.'</p></li>';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Lesson 2: Advanced Techniques in '.$module_1.'</p></li>';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Lesson 3: Practical Applications in '.$module_1.'</p></li>';
                            echo '</ul>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="accordion-item">';
                            echo '<h2 class="accordion-header" id="headingTwo">';
                            echo '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">';
                            echo 'Module 2: '.$module_2;
                            echo '</button>';
                            echo '</h2>';
                            echo '<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">';
                            echo '<div class="accordion-body">';
                            echo '<ul class="about__info-list list-wrap">';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Lesson 1: Introduction to '.$module_2.'</p></li>';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Lesson 2: Advanced Techniques in '.$module_2.'</p></li>';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Lesson 3: Practical Applications in '.$module_2.'</p></li>';
                            echo '</ul>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="accordion-item">';
                            echo '<h2 class="accordion-header" id="headingThree">';
                            echo '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">';
                            echo 'Module 3: '.$module_3;
                            echo '</button>';
                            echo '</h2>';
                            echo '<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">';
                            echo '<div class="accordion-body">';
                            echo '<ul class="about__info-list list-wrap">';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Lesson 1: Introduction to '.$module_3.'</p></li>';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Lesson 2: Advanced Techniques in '.$module_3.'</p></li>';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Lesson 3: Practical Applications in '.$module_3.'</p></li>';
                            echo '</ul>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';

                            // Add more modules as needed

                            echo '</div>';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="tab-pane fade" id="benefits-tab-pane" role="tabpanel" aria-labelledby="benefits-tab" tabindex="0">';
                            echo '<div class="courses__benefits-wrap">';
                            echo '<h3 class="title">Benefits of Taking This Course</h3>';
                            echo '<ul class="about__info-list list-wrap">';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Hands-on experience with industry-standard tools</p></li>';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Direct interaction with experienced professionals</p></li>';
                            echo '<li class="about__info-list-item"><i class="flaticon-angle-right"></i><p class="content">Practical knowledge applicable to real-world scenarios</p></li>';
                            echo '</ul>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            
                        } else {
                            echo '<div class="alert alert-danger" role="alert">No course found with the given ID.</div>';
                        }
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Invalid course ID.</div>';
                    }
                    ?>
                    <!-- End of Course Details fetched dynamically -->
                </div>

                
<!-- Sidebar (Updated with Dynamic Data) -->
<div class="col-xl-3 col-lg-4 order-1 order-lg-2">
    <div class="courses__details-sidebar">
        <!-- Sidebar Content Here -->
        <?php
        // Include the database configuration file
        include 'include/config.php';

        // Check if course_id is set and is a valid integer
        if (isset($_GET['course_id']) && filter_var($_GET['course_id'], FILTER_VALIDATE_INT)) {
            // Sanitize course_id to prevent SQL injection
            $course_id = mysqli_real_escape_string($con, $_GET['course_id']);

            // SQL query to fetch course details for the given course_id
            $sql = "SELECT * FROM tbl_courses WHERE course_id = $course_id";

            // Execute query
            $result = $con->query($sql);

            // Check if a course is found
            if ($result->num_rows > 0) {
                // Fetch course details
                $row = $result->fetch_assoc();

                // Extracting values from the row
                $course_cost = $row["course_cost"];
                $course_offer_cost = $row["course_offer_cost"];
                $course_duration = $row["course_duration"];
                $course_lessons = $row["course_lessons"];
                $course_quizzes = $row["course_quizzes"];
                $course_certifications = $row["course_certifications"];

                // Output HTML for course cost
                echo '<div class="courses__cost-wrap">';
                echo '<span>This Course Fee:</span>';
                echo '<h2 class="title">₹' . $course_offer_cost . ' <del>₹' . $course_cost . '</del></h2>';
                echo '</div>';

                // Output HTML for course information
                echo '<div class="courses__information-wrap">';
                echo '<h5 class="title">Course includes:</h5>';
                echo '<ul class="list-wrap">';
                echo '<li><img src="assets/img/icons/course_icon02.svg" alt="img" class="injectable"> Duration <span>' . $course_duration . '</span></li>';
                echo '<li><img src="assets/img/icons/course_icon03.svg" alt="img" class="injectable"> Lessons <span>' . $course_lessons . '</span></li>';
                echo '<li><img src="assets/img/icons/course_icon04.svg" alt="img" class="injectable"> Quizzes <span>' . $course_quizzes . '</span></li>';
                echo '<li><img src="assets/img/icons/course_icon05.svg" alt="img" class="injectable"> Certifications <span>' . $course_certifications . '</span></li>';
                echo '</ul>';
                echo '</div>';

                // Output HTML for secure payment
                echo '<div class="courses__payment">';
                echo '<h5 class="title">Secure Payment:</h5>';
                echo '<img src="assets/img/others/payment_mode.png" alt="img">';
                echo '</div>';

                // Output HTML for enrollment button
                echo '<div class="courses__details-enroll">';
                echo '<div class="tg-button-wrap">';
                echo '<a href="addmission_form.php?course_id=' . urlencode($course_id) . '" class="btn btn-two arrow-btn">Enroll Now <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>';
                echo '</div>';
                echo '</div>';

            } else {
                echo "<p>Course not found.</p>";
            }
        } else {
            echo "<p>Invalid course ID.</p>";
        }

        // Close connection
        $con->close();
        ?>
    </div>
</div>
<!-- End Sidebar -->
            </div>
        </div>
    </section>
    <!-- courses-details-area-end -->

</main>
<!-- main-area-end -->
<br><br><br><br>
<!-- footer-area -->
<?php include 'include/footer.php'; ?>
<!-- footer-area-end -->

<!-- scroll-to-top -->
<div id="back-top" style="display: none;">
    <a class="btn" href="#"><i class="fas fa-level-up-alt"></i></a>
</div>
<!-- scroll-to-top-end -->

<!-- jquery -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<!-- popper -->
<script src="assets/js/popper.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- appear -->
<script src="assets/js/jquery.appear.js"></script>
<!-- owl-carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- magnific-popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- mixitup -->
<script src="assets/js/mixitup.min.js"></script>
<!-- wow -->
<script src="assets/js/wow.min.js"></script>
<!-- nice-select -->
<script src="assets/js/jquery.nice-select.min.js"></script>
<!-- meanmenu -->
<script src="assets/js/jquery.meanmenu.min.js"></script>
<!-- countdown -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- slick -->
<script src="assets/js/slick.min.js"></script>
<!-- sticky -->
<script src="assets/js/jquery.sticky-sidebar.min.js"></script>
<!-- scrollbar -->
<script src="assets/js/perfect-scrollbar.min.js"></script>
<!-- main-js -->
<script src="assets/js/main.js"></script>

</body>
</html>
