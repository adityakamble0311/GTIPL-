<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Growmore Technoline India Pvt Ltd.</title>
    <?php include 'include/tittle.php'; ?>
    <meta name="description" content="SkillGro - Online Courses & Education Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
    <style>
    .countdown {
      display: inline-block;
      padding: 10px 20px;
      margin-top: 20px;
      background-color: #007BFF;
      color: white;
      font-size: 20px;
      font-weight: bold;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .countdown span {
      display: inline-block;
      min-width: 30px;
    }
    .countdown .time-label {
      margin-left: 5px;
      font-size: 14px;
      font-weight: normal;
    }
  </style>


</head>

<body>

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="tg-flaticon-arrowhead-up"></i>
    </button>
    <!-- Scroll-top-end-->
    <?php include 'include/header.php'; ?>

    <!-- main-area -->
    <main class="main-area fix">
        <!-- banner-area -->
        <section class="banner-area-two banner-bg-two tg-motion-effects"
            data-background="assets/img/banner/banner_bg02.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="banner__content-two">
                            <h3 class="title" data-aos="fade-right" data-aos-delay="400">
                                Unlocking Success with
                                <span class="position-relative">
                                    <svg x="0px" y="0px" preserveAspectRatio="none" viewBox="10 10 90 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.74438 7.70565C69.7006 -1.18799 136.097 -2.38304 203.934 4.1205C207.178 4.48495 209.422 7.14626 208.933 10.0534C206.793 23.6481 205.415 36.5704 204.801 48.8204C204.756 51.3291 202.246 53.5582 199.213 53.7955C136.093 59.7623 74.1922 60.5985 13.5091 56.3043C10.5653 56.0924 7.84371 53.7277 7.42158 51.0325C5.20725 38.2627 2.76333 25.6511 0.0898448 13.1978C-0.465589 10.5873 1.61173 8.1379 4.73327 7.70565"
                                            fill="currentcolor" />
                                    </svg>
                                    Cutting Edges
                                </span>
                                IT Training at Growmore Technoline India Pvt Ltd.
                            </h3>
                            <div class="banner__btn-two" data-aos="fade-right" data-aos-delay="600">
                                <a href="courses.php" class="btn arrow-btn"> Enroll Now <img
                                        src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                                <!-- <a href="https://www.youtube.com/watch?v=b2Az7_lLh3g" class="play-btn popup-video"><i class="fas fa-play"></i> Watch Our <br> Class Demo</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-8">
                        <div class="banner__images-two tg-svg">
                            <img src="assets/img/banner/output.png" alt="img" height="590" class="main-img">
                            <div class="shape big-shape" data-aos="fade-up" data-aos-delay="600">
                                <!-- <img src="assets/img/banner/h2_banner_shape01.svg" alt="shape" class="injectable tg-motion-effects1"> -->
                            </div>
                            <span class="svg-icon" id="banner-svg"
                                data-svg-icon="assets/img/banner/h2_banner_shape02.svg"></span>
                            <div class="about__enrolled" data-aos="fade-right" data-aos-delay="200">
                                <p class="title"><span>Many</span> Enrolled Students</p>
                                <img src="Home_image/student_grp.png" alt="img">
                            </div>
                            <div class="banner__student" data-aos="fade-left" data-aos-delay="200">
                                <div class="icon">
                                    <img src="Home_image/h2_banner_icon.svg" alt="img" class="injectable">
                                </div>
                                <div class="content">
                                    <span>Total Students</span>
                                    <h4 class="title">15K</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/banner/h2_banner_shape03.svg" alt="shape" class="line-shape-two" data-aos="fade-right"
                data-aos-delay="1600">
        </section>
        <!-- banner-area-end -->

        <!-- brand-area -->
        <div class="brand-area brand-area-two">
            <div class="container-fluid">
                <div class="marquee_mode">
                <?php
                for ($i = 0; $i < 10; $i++) {
                    echo '<div class="brand__item">';
                    // echo '<a href="#"><img src="assets/img/logo/webicon.png" height="40" width="40" alt="star"></a>';
                    echo '<h3 style="color:white">Growmore Technoline India Pvt Ltd.</h3>';
                    echo '<a href="#"><img src="assets/img/logo/webicon.png" height="40" width="40" alt="star"></a>';
                    echo '</div>';
                }
                ?>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- features-area -->
        <section class="features__area-two section-pt-120 section-pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section__title text-center mb-40">
                            <span class="sub-title">Our Top Services</span>
                            <h2 class="title">Achieve Your Goal With Growmore</h2>
                            <p>Join us for a transformative journey into coding excellence, mastering the full stack.
                                Unleash your potential with our concise and comprehensive Full Stack Development
                                program.</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="features__item-wrap"> -->
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="features__item-two">
                                <div class="features__content-two">
                                    <div class="content-top">
                                        <div class="features__icon-two">
                                            <i class="fa fa-globe fa-2x" class="injectable"></i>
                                        </div>
                                        <h2 class="title">Domain Registration</h2>
                                    </div>
                                    <p>Secure Your Digital Identity with Expert Domain Registration Services.</p>
                                </div>
                                <div class="features__item-shape">
                                    <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="features__item-two">
                                <div class="features__content-two">
                                    <div class="content-top">
                                        <div class="features__icon-two">
                                            <i class="fa fa-laptop-code fa-2x"></i>
                                        </div>
                                        <h2 class="title">Web Development</h2>
                                    </div>
                                    <p>Reliable Web Development Solutions for Seamless Online Presence.</p>
                                </div>
                                <div class="features__item-shape">
                                    <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 ">
                            <div class="features__item-two ">
                                <div class="features__content-two">
                                    <div class="content-top ">
                                        <div class="features__icon-two">
                                            <i class="fa fa-chalkboard-teacher fa-2x"></i>
                                        </div>
                                        <h2 class="title ">Training & Internship</h2>
                                    </div>
                                    <p>Future The IT Talent Through Comprehensive Training and Internship Programs.</p>
                                </div>
                                <div class="features__item-shape">
                                    <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="features__item-two">
                                <div class="features__content-two">
                                    <div class="content-top">
                                        <div class="features__icon-two">
                                            <i class="fa fa-paint-brush fa-2x"></i>
                                        </div>
                                        <h2 class="title">Web Development & Designs </h2>
                                    </div>
                                    <p>Crafting Engaging Digital Experiences Through Expert Web Development and Design.</p>
                                </div>
                                <div class="features__item-shape">
                                    <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="features__item-two">
                                <div class="features__content-two">
                                    <div class="content-top">
                                        <div class="features__icon-two">
                                            <i class="fa fa-mobile-alt fa-2x"></i>
                                        </div>
                                        <h2 class="title">Mobile App Development</h2>
                                    </div>
                                    <p>Turning Your Vision into Innovative Mobile Apps.</p>
                                </div>
                                <div class="features__item-shape">
                                    <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="features__item-two">
                                <div class="features__content-two">
                                    <div class="content-top">
                                        <div class="features__icon-two">
                                            <i class="fa fa-cogs fa-2x"></i>
                                        </div>
                                        <h2 class="title">IT Consulting & Advisory</h2>
                                    </div>
                                    <p>Guiding Your Technology Journey with Expert IT Consulting and Advisory.</p>
                                </div>
                                <div class="features__item-shape">
                                    <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="features__item-two">
                                <div class="features__content-two">
                                    <div class="content-top">
                                        <div class="features__icon-two">
                                            <i class="fa fa-shopping-cart fa-2x"></i>
                                        </div>
                                        <h2 class="title">E-commerce Solutions</h2>
                                    </div>
                                    <p>Empowering Your Online Business with Tailored E-commerce Solutions.</p>
                                </div>
                                <div class="features__item-shape">
                                    <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-4 col-md-6">
                            <div class="features__item-two">
                                <div class="features__content-two">
                                    <div class="content-top">
                                        <div class="features__icon-two">
                                            <img src="assets/img/icons/h2_features_icon02.svg" alt="img" class="injectable">
                                        </div>
                                        <h2 class="title">Effective Courses</h2>
                                    </div>
                                    <p>The effective courses feature delivers structured, high-quality content designed by experts to ensure comprehensive learning and skill development.</p>
                                </div>
                                <div class="features__item-shape">
                                    <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-4 col-md-6">
                            <div class="features__item-two">
                                <div class="features__content-two">
                                    <div class="content-top">
                                        <div class="features__icon-two">

                                            <i class="fa fa-tasks fa-2x"></i>
                                        </div>
                                        <h2 class="title">IT Project Management</h2>
                                    </div>
                                    <p>
                                        Turning Vision into Reality with Expert IT Project Management.</p>
                                </div>
                                <div class="features__item-shape">
                                    <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="features__item-two">
                                <div class="features__content-two">
                                    <div class="content-top">
                                        <div class="features__icon-two">
                                            <i class="fa fa-shopping-cart fa-2x"></i>
                                        </div>
                                        <h2 class="title">Soft Skills </h2>
                                    </div>
                                    <p>Soft skills are essential interpersonal qualities that enable effective communications.</p>
                                </div>
                                <div class="features__item-shape">
                                    <img src="assets/img/others/features_item_shape.svg" alt="img" class="injectable">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <!-- about-area -->
        <section class="about-area-two tg-motion-effects section-pb-120">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="faq__img-wrap tg-svg">
                            <div class="faq__round-text">
                                <div class="curved-circle">
                                    * Education * System * can * Make * Change *
                                </div>
                            </div>
                            <div class="faq__img faq__img-two">
                                <img src="assets/img/banner/student.png" alt="img">
                                <div class="shape-one">
                                    <img src="assets/img/others/faq_shape01.svg" class="injectable tg-motion-effects4"
                                        alt="img">
                                </div>
                                <div class="shape-two">
                                    <span class="svg-icon" id="faq-two-svg"
                                        data-svg-icon="assets/img/others/faq_shape02.svg"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <div class="section__title">
                                <span class="sub-title">Get More About Us</span>
                                <h2 class="title">

                                    <span class="position-absolute">
                                        <svg x="0px" y="0px" preserveAspectRatio="none" viewBox="10 10 90 30"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.74438 7.70565C69.7006 -1.18799 136.097 -2.38304 203.934 4.1205C207.178 4.48495 209.422 7.14626 208.933 10.0534C206.793 23.6481 205.415 36.5704 204.801 48.8204C204.756 51.3291 202.246 53.5582 199.213 53.7955C136.093 59.7623 74.1922 60.5985 13.5091 56.3043C10.5653 56.0924 7.84371 53.7277 7.42158 51.0325C5.20725 38.2627 2.76333 25.6511 0.0898448 13.1978C-0.465589 10.5873 1.61173 8.1379 4.73327 7.70565"
                                                fill="currentcolor" />
                                        </svg>
                                        Growmore Technoline India Pvt Ltd.
                                    </span>
                                    <br>
                                </h2>
                            </div>
                            <p class="desc">Join us for a transformative journey into coding excellence, mastering the
                                full stack. Unleash your potential
                                with our concise and comprehensive Full Stack Development program.</p>
                            <ul class="about__info-list list-wrap">
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">
                                        Classroom Training</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">Online Training</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">Job Oriented Training</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">Expert Instructors</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">Flexible Learning Options</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">Career Support</p>
                                </li>
                            </ul>
                            <div class="tg-button-wrap">
                                <a href="about-us.php" class="btn arrow-btn">Start Free Trial <img
                                        src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

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

            // Show All Courses button
            echo '<div class="text-center mt-4 mb-4">';
            echo '<a href="courses.php" class="btn btn-primary">Show All Courses <img src="assets/img/icons/right_arrow.svg" alt="img"  class="injectable"></a>';
            echo '</div>';

        } else {
            echo 'No courses found.';
        }

        // Close database connection
        mysqli_close($con);
        ?>


        <!-- 
        <section class="work__area section-py-120">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-9">
                        <div class="about__images work__images">
                            <img src="assets/img/others/about_img.png" alt="img" class="main-img">
                            <img src="assets/img/others/about_shape.svg" alt="img" class="shape alltuchtopdown">
                            <a href="https://www.youtube.com/watch?v=b2Az7_lLh3g" class="popup-video">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="28" viewBox="0 0 22 28" fill="none">
                                    <path d="M0.19043 26.3132V1.69421C0.190288 1.40603 0.245303 1.12259 0.350273 0.870694C0.455242 0.6188 0.606687 0.406797 0.79027 0.254768C0.973854 0.10274 1.1835 0.0157243 1.39936 0.00193865C1.61521 -0.011847 1.83014 0.0480663 2.02378 0.176003L20.4856 12.3292C20.6973 12.4694 20.8754 12.6856 20.9999 12.9535C21.1245 13.2214 21.1904 13.5304 21.1904 13.8456C21.1904 14.1608 21.1245 14.4697 20.9999 14.7376C20.8754 15.0055 20.6973 15.2217 20.4856 15.3619L2.02378 27.824C1.83056 27.9517 1.61615 28.0116 1.40076 27.9981C1.18536 27.9847 0.97607 27.8983 0.792638 27.7472C0.609205 27.596 0.457661 27.385 0.352299 27.1342C0.246938 26.8833 0.191236 26.6008 0.19043 26.3132Z" fill="currentcolor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="work__content">
                            <div class="section__title mb-20">
                                <span class="sub-title">Free Workshop</span>
                                <h2 class="title">Join Our Free Workshops</h2>
                            </div>
                            <p>Edhen an unknown printer took a galley of type and scrambled it to make a type specimen bookas survived not only five centuries.Edhen an unknown printer took a galley of type and scrambled.</p>
                            <div class="work__list-wrap">
                                <div class="work__list-box">
                                    <div class="work__list-box-top">
                                        <div class="icon">
                                            <i class="flaticon-profit"></i>
                                        </div>
                                        <h4 class="title">Smooth Virtual Live Classes</h4>
                                    </div>
                                    <p>Edhen an unknown printer Rtook galley of type scrambled.</p>
                                </div>
                                <div class="work__list-box">
                                    <div class="work__list-box-top">
                                        <div class="icon">
                                            <i class="flaticon-mortarboard"></i>
                                        </div>
                                        <h4 class="title">99% Graduation Complete</h4>
                                    </div>
                                    <p>Edhen an unknown printer Rtook galley of type scrambled.</p>
                                </div>
                            </div>
                            <div class="tg-button-wrap">
                                <a href="contact.php" class="btn arrow-btn">Quick Join Now <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
 -->
        <!-- fact-area-two -->
        <section class="fact__area-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="fact__inner-wrap-two">
                            <div class="section__title white-title mb-30">
                                <h2 class="title">Many of
                                    <span class="position-relative">
                                        <svg x="0px" y="0px" preserveAspectRatio="none" viewBox="0 0 209 59" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.74438 7.70565C69.7006 -1.18799 136.097 -2.38304 203.934 4.1205C207.178 4.48495 209.422 7.14626 208.933 10.0534C206.793 23.6481 205.415 36.5704 204.801 48.8204C204.756 51.3291 202.246 53.5582 199.213 53.7955C136.093 59.7623 74.1922 60.5985 13.5091 56.3043C10.5653 56.0924 7.84371 53.7277 7.42158 51.0325C5.20725 38.2627 2.76333 25.6511 0.0898448 13.1978C-0.465589 10.5873 1.61173 8.1379 4.73327 7.70565"
                                                fill="currentcolor" />
                                        </svg>
                                        courses
                                    </span>
                                    authored by industry experts
                                </h2>
                            </div>
                            <div class="fact__item-wrap">
                                <div class="fact__item">
                                    <h2 class="count"><span class="odometer" data-count="350"></span>+</h2>
                                    <p>Active Students</p>
                                </div>
                                <div class="fact__item">
                                    <h2 class="count"><span class="odometer" data-count="20"></span>+</h2>
                                    <p>Best Instructors</p>
                                </div>
                            </div>
                            <div class="fact__img-wrap tg-svg">
                                <img src="Home_image/fact_img.png" alt="img">
                                <div class="shape-one">
                                    <img src="assets/img/others/fact_shape01.svg" alt="img" class="injectable">
                                </div>
                                <div class="shape-two">
                                    <span class="svg-icon" id="fact-btn"
                                        data-svg-icon="assets/img/others/fact_shape02.svg"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-two-end -->

        <!--         <section class="instructor__area-three instructor__bg" data-background="assets/img/bg/instructor_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section__title text-center mb-40">
                            <span class="sub-title">Skilled Introduce</span>
                            <h2 class="title">Our Top Class & Professional Instructors in One Place</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="swiper-container instructor-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="instructor__item-three">
                                        <div class="instructor__thumb-three">
                                            <img src="assets/img/instructor/h2_instructor01.png" alt="img">
                                            <div class="shape-one">
                                                <img src="assets/img/instructor/h2_instructor_img_shape01.svg" alt="img" class="injectable">
                                            </div>
                                        </div>
                                        <div class="instructor__content-three">
                                            <div class="ratting-wrap">
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span>(4.8 Ratings)</span>
                                            </div>
                                            <h2 class="title">Olivia Mia</h2>
                                            <span class="designation">Web Design</span>
                                            <p>SkillGro The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                            <div class="instructor__social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="tg-button-wrap">
                                                <a href="instructor-details.php" class="btn arrow-btn">Join My Class <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="instructor__item-three">
                                        <div class="instructor__thumb-three">
                                            <img src="assets/img/instructor/h2_instructor02.png" alt="img">
                                            <div class="shape-one">
                                                <img src="assets/img/instructor/h2_instructor_img_shape01.svg" alt="img" class="injectable">
                                            </div>
                                        </div>
                                        <div class="instructor__content-three">
                                            <div class="ratting-wrap">
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span>(4.8 Ratings)</span>
                                            </div>
                                            <h2 class="title">William Hope</h2>
                                            <span class="designation">Digital Marketing</span>
                                            <p>SkillGro The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                            <div class="instructor__social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="tg-button-wrap">
                                                <a href="instructor-details.php" class="btn arrow-btn">Join My Class <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="instructor__item-three">
                                        <div class="instructor__thumb-three">
                                            <img src="assets/img/instructor/h2_instructor03.png" alt="img">
                                            <div class="shape-one">
                                                <img src="assets/img/instructor/h2_instructor_img_shape01.svg" alt="img" class="injectable">
                                            </div>
                                        </div>
                                        <div class="instructor__content-three">
                                            <div class="ratting-wrap">
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span>(4.8 Ratings)</span>
                                            </div>
                                            <h2 class="title">Sophia Ava</h2>
                                            <span class="designation">Web Development</span>
                                            <p>SkillGro The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                            <div class="instructor__social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="tg-button-wrap">
                                                <a href="instructor-details.php" class="btn arrow-btn">Join My Class <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="instructor__item-three">
                                        <div class="instructor__thumb-three">
                                            <img src="assets/img/instructor/h2_instructor04.png" alt="img">
                                            <div class="shape-one">
                                                <img src="assets/img/instructor/h2_instructor_img_shape01.svg" alt="img" class="injectable">
                                            </div>
                                        </div>
                                        <div class="instructor__content-three">
                                            <div class="ratting-wrap">
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span>(4.8 Ratings)</span>
                                            </div>
                                            <h2 class="title">Mark Jukarberg</h2>
                                            <span class="designation">UX Design Lead</span>
                                            <p>SkillGro The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                            <div class="instructor__social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="tg-button-wrap">
                                                <a href="instructor-details.php" class="btn arrow-btn">Join My Class <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="instructor__item-three">
                                        <div class="instructor__thumb-three">
                                            <img src="assets/img/instructor/h2_instructor05.png" alt="img">
                                            <div class="shape-one">
                                                <img src="assets/img/instructor/h2_instructor_img_shape01.svg" alt="img" class="injectable">
                                            </div>
                                        </div>
                                        <div class="instructor__content-three">
                                            <div class="ratting-wrap">
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span>(4.8 Ratings)</span>
                                            </div>
                                            <h2 class="title">David Millar</h2>
                                            <span class="designation">UX/UI Design</span>
                                            <p>SkillGro The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                            <div class="instructor__social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="tg-button-wrap">
                                                <a href="instructor-details.php" class="btn arrow-btn">Join My Class <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="instructor__item-three">
                                        <div class="instructor__thumb-three">
                                            <img src="assets/img/instructor/h2_instructor04.png" alt="img">
                                            <div class="shape-one">
                                                <img src="assets/img/instructor/h2_instructor_img_shape01.svg" alt="img" class="injectable">
                                            </div>
                                        </div>
                                        <div class="instructor__content-three">
                                            <div class="ratting-wrap">
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span>(4.8 Ratings)</span>
                                            </div>
                                            <h2 class="title">Mark Jukarberg</h2>
                                            <span class="designation">UX Design Lead</span>
                                            <p>SkillGro The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                            <div class="instructor__social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="tg-button-wrap">
                                                <a href="instructor-details.php" class="btn arrow-btn">Join My Class <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="instructor__item-three">
                                        <div class="instructor__thumb-three">
                                            <img src="assets/img/instructor/h2_instructor03.png" alt="img">
                                            <div class="shape-one">
                                                <img src="assets/img/instructor/h2_instructor_img_shape01.svg" alt="img" class="injectable">
                                            </div>
                                        </div>
                                        <div class="instructor__content-three">
                                            <div class="ratting-wrap">
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span>(4.8 Ratings)</span>
                                            </div>
                                            <h2 class="title">Olivia Mia</h2>
                                            <span class="designation">Web Design</span>
                                            <p>SkillGro The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                                            </p>
                                            <div class="instructor__social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="tg-button-wrap">
                                                <a href="instructor-details.php" class="btn arrow-btn">Join My Class <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <div class="instructor-slider-dot">
                            <div class="swiper instructor-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <button><img src="assets/img/instructor/instructor_nav01.png" alt="img"></button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button><img src="assets/img/instructor/instructor_nav02.png" alt="img"></button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button><img src="assets/img/instructor/instructor_nav03.png" alt="img"></button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button><img src="assets/img/instructor/instructor_nav04.png" alt="img"></button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button><img src="assets/img/instructor/h2_instructor05.png" alt="img"></button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button><img src="assets/img/instructor/instructor_nav04.png" alt="img"></button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button><img src="assets/img/instructor/instructor_nav03.png" alt="img"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="instructor__nav-two">
                                <div class="instructor-button-prev"><i class="flaticon-arrow-right"></i></div>
                                <div class="instructor-button-next"><i class="flaticon-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="instructor__shape">
                <img src="assets/img/instructor/h2_instructor_shape.png" alt="img" class="alltuchtopdown">
            </div>
        </section>
 --> <!-- instructor-area-end -->
        <br><br>
        <!-- newsletter-area -->
        <!-- <section class="newsletter__area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="newsletter__img-wrap">
                            <img src="Home_image/newsletter_img.png" alt="img">
                            <img src="assets/img/others/newsletter_shape01.png" alt="img" data-aos="fade-up" data-aos-delay="400">
                            <img src="assets/img/others/newsletter_shape02.png" alt="img" class="alltuchtopdown">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="newsletter__content">
                            <h2 class="title">Want to stay <span>informed</span> about <br> new <span>courses & study?</span></h2>
                            <div class="newsletter__form">
                                <form action="#">
                                    <input type="email" placeholder="Type your e-mail">
                                    <button type="submit" class="btn">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="newsletter__shape">
                <img src="assets/img/others/newsletter_shape03.png" alt="img" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section> -->
        <!-- newsletter-area-end -->

        <!-- event-area -->
        <!-- <section class="event__area section-pt-120 section-pb-90">
            <div class="container">
                <div class="event__inner-wrap">
                    <div class="row">
                        <div class="col-30">
                            <div class="event__content">
                                <div class="section__title mb-20">
                                    <span class="sub-title">Upcoming Events</span>
                                    <h2 class="title">Join Our Community And Make it Bigger</h2>
                                </div>
                                <p>Edhen an unknown printer took a galley acrambled make a type specimen bookas centuries.Edhen anderely unknown printer took a galley.</p>
                                <div class="tg-button-wrap">
                                    <a href="events.php" class="btn arrow-btn">See All Events <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-70">
                            <div class="event__item-wrap">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event__item shine__animate-item">
                                            <div class="event__item-thumb">
                                                <a href="events-details.php" class="shine__animate-link"><img src="assets/img/events/event_thumb01.jpg" alt="img"></a>
                                            </div>
                                            <div class="event__item-content">
                                                <span class="date">25 June, 2024</span>
                                                <h2 class="title"><a href="events-details.php">The Accessible Target Sizes Cheatsheet</a></h2>
                                                <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>United Kingdom</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event__item shine__animate-item">
                                            <div class="event__item-thumb">
                                                <a href="events-details.php" class="shine__animate-link"><img src="assets/img/events/event_thumb02.jpg" alt="img"></a>
                                            </div>
                                            <div class="event__item-content">
                                                <span class="date">25 June, 2024</span>
                                                <h2 class="title"><a href="events-details.php">Exactly How Technology Can Make Reading</a></h2>
                                                <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>Tokyo Japan</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event__item shine__animate-item">
                                            <div class="event__item-thumb">
                                                <a href="events-details.php" class="shine__animate-link"><img src="assets/img/events/event_thumb03.jpg" alt="img"></a>
                                            </div>
                                            <div class="event__item-content">
                                                <span class="date">25 June, 2024</span>
                                                <h2 class="title"><a href="events-details.php">Aewe Creating Futures Through Technology</a></h2>
                                                <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>New Work</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event__shape">
                <img src="assets/img/events/event_shape.png" alt="img" class="alltuchtopdown">
            </div>
        </section>
         --><!-- event-area-end -->

        <!-- blog-area -->
        <!-- <section class="blog__post-area blog__post-area-two">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section__title text-center mb-40">
                            <span class="sub-title">News & Blogs</span>
                            <h2 class="title">Our Latest News Feed</h2>
                            <p>when known printer took a galley of type scrambl edmake</p>
                        </div>
                    </div>
                </div>
                <div class="row gutter-20">
                    <div class="col-xl-3 col-md-6">
                        <div class="blog__post-item shine__animate-item">
                            <div class="blog__post-thumb">
                                <a href="blog-details.php" class="shine__animate-link"><img src="assets/img/blog/blog_post01.jpg" alt="img"></a>
                                <a href="blog.php" class="post-tag">Marketing</a>
                            </div>
                            <div class="blog__post-content">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>20 July, 2024</li>
                                        <li><i class="flaticon-user-1"></i>by <a href="blog-details.php">Admin</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.php">How To Become idiculously Self-Aware In 20 Minutes</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="blog__post-item shine__animate-item">
                            <div class="blog__post-thumb">
                                <a href="blog-details.php" class="shine__animate-link"><img src="assets/img/blog/blog_post02.jpg" alt="img"></a>
                                <a href="blog.php" class="post-tag">Students</a>
                            </div>
                            <div class="blog__post-content">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>20 July, 2024</li>
                                        <li><i class="flaticon-user-1"></i>by <a href="blog-details.php">Admin</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.php">Get Started With UI Design With Tips To Speed</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="blog__post-item shine__animate-item">
                            <div class="blog__post-thumb">
                                <a href="blog-details.php" class="shine__animate-link"><img src="assets/img/blog/blog_post03.jpg" alt="img"></a>
                                <a href="blog.php" class="post-tag">Science</a>
                            </div>
                            <div class="blog__post-content">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>20 July, 2024</li>
                                        <li><i class="flaticon-user-1"></i>by <a href="blog-details.php">Admin</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.php">Make Your Own Expanding Contracting Content</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="blog__post-item shine__animate-item">
                            <div class="blog__post-thumb">
                                <a href="blog-details.php" class="shine__animate-link"><img src="assets/img/blog/blog_post04.jpg" alt="img"></a>
                                <a href="blog.php" class="post-tag">Agency</a>
                            </div>
                            <div class="blog__post-content">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>20 July, 2024</li>
                                        <li><i class="flaticon-user-1"></i>by <a href="blog-details.php">Admin</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.php">What we are capable to usually discovered</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         --><!-- blog-area-end -->
        <br><br>
        <!-- instructor-area-two -->
        <section class="instructor__area-four">
            <div class="container">
                <div class="instructor__item-wrap-two">
                    <div class="row">
                        <!-- <div class="col-xl-6">
                            <div class="instructor__item-two tg-svg">
                                <div class="instructor__thumb-two">
                                    <img src="assets/img/instructor/instructor_two01.png" alt="img">
                                    <div class="shape-one">
                                        <img src="assets/img/instructor/instructor_shape01.svg" alt="img" class="injectable">
                                    </div>
                                    <div class="shape-two">
                                        <span class="svg-icon" id="instructor-svg" data-svg-icon="assets/img/instructor/instructor_shape02.svg"></span>
                                    </div>
                                </div>
                                <div class="instructor__content-two">
                                    <h3 class="title"><a href="contact.php">Become a Instructor</a></h3>
                                    <p>To take a trivial example, which of us undertakes physical exercise yes is this happen here.</p>
                                    <div class="tg-button-wrap">
                                        <a href="contact.php" class="btn arrow-btn">Apply Now <img src="assets/img/icons/right_arrow.svg" alt="img"  class="injectable"></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-7">
                                    <div class="instructor__item-two tg-svg">
                                        <div class="instructor__thumb-two">
                                            <img src="assets/img/icons/offer.png" alt="img" height="420" width="370px">
                                            <div class="shape-one">
                                                <img src="assets/img/instructor/instructor_shape01.svg" alt="img"
                                                    class="injectable">
                                            </div>
                                            <div class="shape-two">
                                                <span class="svg-icon" id="instructor-svg-two"
                                                    data-svg-icon="assets/img/instructor/instructor_shape02.svg"></span>
                                            </div>
                                        </div>
                                        <div class="instructor__content-two">
                                            <h3 class="title"><a href="contact.html">This Monsoon Offer till 31 July</a></h3>
                                            <p>This monsoon season, soak up knowledge with our exclusive Monsoon Offer
                                                on a wide range of courses.
                                                Whether you’re looking to upskill, switch careers, or simply indulge
                                                your passion, we have something for everyone.
                                                Don’t miss this chance..!!</p>
                                                <div class="countdown" id="countdown"></div> 
                                                <br> <br>
                                            <div class="tg-button-wrap">
                                                <a href="contact.html" class="btn arrow-btn">Get Offer <img
                                                        src="assets/img/icons/right_arrow.svg" alt="img"
                                                        class="injectable"></a> 
                                            </div>
                                            <br>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- instructor-area-two-end -->

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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>

    <script>
        SVGInject(document.querySelectorAll("img.injectable"));
    </script>
    <script>
        var swiper = new Swiper('.courses-swiper-active', {
            slidesPerView: 'auto', // Number of slides per view (auto adjusts based on container width)
            spaceBetween: 20, // Space between slides
            loop: true, // Enable loop mode
            pagination: {
                el: '.swiper-pagination',
                clickable: true, // Enable clickable pagination bullets
            },
        });
    </script>
     <script>
    function countdownTimer() {
      const countdownElement = document.getElementById('countdown');
      const endDate = new Date('July 31, 2024 23:59:59').getTime();
      const now = new Date().getTime();
      const timeLeft = endDate - now;

      const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
      const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

      countdownElement.innerHTML = `
        <span>${days}</span><span class="time-label">d</span> 
        <span>${hours}</span><span class="time-label">h</span> 
        <span>${minutes}</span><span class="time-label">m</span> 
        <span>${seconds}</span><span class="time-label">s</span>
      `;

      if (timeLeft < 0) {
        clearInterval(timerInterval);
        countdownElement.innerHTML = "Offer has ended!";
      }
    }

    const timerInterval = setInterval(countdownTimer, 1000);
  </script>
</body>

</html>