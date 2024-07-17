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

  

    <!-- header-area -->
    <?php include 'include/header.php'; ?>
    <!-- header-area-end -->



    <!-- main-area -->
    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title">All Courses</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.php">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Courses</span>
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

        <!-- all-courses -->
        <section class="all-courses-area section-py-120">
            <div class="container">
                <div class="row">
                <?php
        // Include database connection file
        include 'include/config.php'; // Adjust path as per your project structure
        
        // SQL query to fetch all courses
        $sql = "SELECT * FROM `tbl_courses`";
        $result = mysqli_query($con, $sql);

        // Check if any courses are found
        if (mysqli_num_rows($result) > 0) {
            // Start the grid container
            echo '<div class="row">';

            // Counter for limiting courses to display initially
            $limit = 4;
            $count = 0;

            // Output HTML structure for each course using PHP
            while ($row = mysqli_fetch_assoc($result)) {
                // Extract course details from $row
                $course_id = $row['course_id'];
                $course_name = $row['course_name'];
                $course_description = $row['course_description'];
                $course_actual_cost = $row['course_cost']; // Actual cost
                $course_offer_cost = $row['course_offer_cost'];   // Offer cost
                $course_image = $row['course_image'];
                $course_webpage = $row['course_webpage']; // Assuming this is where the course links to
                $course_lessons = $row['course_lessons']; // Number of lessons
                $course_duration = $row['course_duration']; // Course duration
                $course_quizzes = $row['course_quizzes']; // Number of quizzes
        
                // Determine if there's an offer price
                if (!empty($course_offer_cost)) {
                    $price_html = '<del>' . $course_actual_cost . '</del> ₹' . $course_offer_cost;
                } else {
                    $price_html = '₹' . $course_actual_cost;
                }

                // Outputting HTML for each course card
                echo '<div class="col-lg-3 col-md-6 col-sm-6 mb-30">'; // Adjusted grid classes for 4 cards per row
                echo '<div class="courses__item courses__item-two shine__animate-item">';
                echo '<div class="courses__item-thumb courses__item-thumb-two">';
                echo '<a href="course-details.php?course_id=' . $course_id . '" class="shine__animate-link">';
                echo '<img src="' . $course_image . '" alt="' . $course_name . '">';
                echo '</a>';
                echo '</div>';
                echo '<div class="courses__item-content courses__item-content-two">';
                echo '<ul class="courses__item-meta list-wrap">';
                echo '<li class="courses__item-tag">';
                echo '<a href="' . $course_webpage . '">Development</a>'; // Link example, adjust as needed
                echo '</li>';
                echo '<li class="price">' . $price_html . '</li>'; // Display actual cost and offer cost if available
                echo '</ul>';
                echo '<h5 class="title"><a href="course-details.php?course_id=' . $course_id . '">' . $course_name . '</a></h5>';
                echo '<div class="courses__item-content-bottom">';
                // echo '<p>' . $course_description . '</p>'; // Display course description if needed
                echo '</div>';
                echo '</div>';
                echo '<div class="courses__item-bottom-two">';
                echo '<ul class="list-wrap">';
                echo '<li><i class="flaticon-book"></i>' . $course_lessons . '</li>'; // Number of lessons
                echo '<li><i class="flaticon-clock"></i>' . $course_duration . '</li>'; // Course duration
                echo '<li><i class="flaticon-mortarboard"></i>' . $course_quizzes . '</li>'; // Number of quizzes
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</div>';

                // Increment counter
                $count++;

                // Break the loop if the limit is reached
                if ($count >= $limit) {
                    break;
                }
            }

            // End the grid container
            echo '</div>';

           

        } else {
            echo 'No courses found.';
        }

        // Close database connection
        mysqli_close($con);
        ?>

                </div>
            </div>
        </section>
        <!-- all-courses-end -->

    </main>
    <!-- main-area-end -->


    <br> <br> 
    <?php include 'include/footer.php'; ?>
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