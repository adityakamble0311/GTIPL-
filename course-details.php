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

    <!--Preloader-->
    <!-- <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="assets/img/logo/preloader.svg" alt="Preloader"></div>
            </div>
        </div>
    </div> -->
    <!--Preloader-end -->

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
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="courses__details-thumb">
                            <img src="assets/img/courses/courses_details.jpg" alt="img">
                        </div>
                        <div class="courses__details-content">
                            <ul class="courses__item-meta list-wrap">
                                <li class="courses__item-tag">
                                    <a href="course.html">Development</a>
                                </li>
                                <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                            </ul>
                            <h2 class="title">Resolving Conflicts Between Designers And Engineers</h2>
                            <div class="courses__details-meta">
                                <ul class="list-wrap">
                                    <li class="author-two">
                                        <img src="assets/img/courses/course_author001.png" alt="img">
                                        By
                                        <a href="#">David Millar</a>
                                    </li>
                                    <li class="date"><i class="flaticon-calendar"></i>24/07/2024</li>
                                    <li><i class="flaticon-mortarboard"></i>2,250 Students</li>
                                </ul>
                            </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview-tab-pane" type="button" role="tab" aria-controls="overview-tab-pane" aria-selected="true">Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum-tab-pane" type="button" role="tab" aria-controls="curriculum-tab-pane" aria-selected="false">Curriculum</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="instructors-tab" data-bs-toggle="tab" data-bs-target="#instructors-tab-pane" type="button" role="tab" aria-controls="instructors-tab-pane" aria-selected="false">Instructors</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane" aria-selected="false">reviews</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
                                    <div class="courses__overview-wrap">
                                        <h3 class="title">Course Description</h3>
                                        <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.dolor sit amet, consectetur adipiscing elited do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <h3 class="title">What you'll learn in this course?</h3>
                                        <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                                        <ul class="about__info-list list-wrap">
                                            <li class="about__info-list-item">
                                                <i class="flaticon-angle-right"></i>
                                                <p class="content">Work with color & Gradients & Grids</p>
                                            </li>
                                            <li class="about__info-list-item">
                                                <i class="flaticon-angle-right"></i>
                                                <p class="content">All the useful shortcuts</p>
                                            </li>
                                            <li class="about__info-list-item">
                                                <i class="flaticon-angle-right"></i>
                                                <p class="content">Be able to create Flyers, Brochures, Advertisements</p>
                                            </li>
                                            <li class="about__info-list-item">
                                                <i class="flaticon-angle-right"></i>
                                                <p class="content">How to work with Images & Text</p>
                                            </li>
                                        </ul>
                                        <p class="last-info">Morem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magn.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="curriculum-tab-pane" role="tabpanel" aria-labelledby="curriculum-tab" tabindex="0">
                                    <div class="courses__curriculum-wrap">
                                        <h3 class="title">Course Curriculum</h3>
                                        <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"  aria-expanded="true" aria-controls="collapseOne">
                                                        Introduction
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="list-wrap">
                                                            <li class="course-item open-item">
                                                                <a href="https://www.youtube.com/watch?v=b2Az7_lLh3g" class="course-item-link popup-video">
                                                                    <span class="item-name">Course Installation</span>
                                                                    <div class="course-item-meta">
                                                                        <span class="item-meta duration">03:03</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="course-item">
                                                                <a href="#" class="course-item-link">
                                                                    <span class="item-name">Create a Simple React App</span>
                                                                    <div class="course-item-meta">
                                                                        <span class="item-meta duration">07:48</span>
                                                                        <span class="item-meta course-item-status">
                                                                            <img src="assets/img/icons/lock.svg" alt="icon">
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="course-item">
                                                                <a href="#" class="course-item-link">
                                                                    <span class="item-name">React for the Rest of us</span>
                                                                    <div class="course-item-meta">
                                                                        <span class="item-meta duration">10:48</span>
                                                                        <span class="item-meta course-item-status">
                                                                            <img src="assets/img/icons/lock.svg" alt="icon">
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Capacitance and Inductance
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="list-wrap">
                                                            <li class="course-item">
                                                                <a href="#" class="course-item-link">
                                                                    <span class="item-name">Course Installation</span>
                                                                    <div class="course-item-meta">
                                                                        <span class="item-meta duration">07:48</span>
                                                                        <span class="item-meta course-item-status">
                                                                            <img src="assets/img/icons/lock.svg" alt="icon">
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="course-item">
                                                                <a href="#" class="course-item-link">
                                                                    <span class="item-name">Create a Simple React App</span>
                                                                    <div class="course-item-meta">
                                                                        <span class="item-meta duration">07:48</span>
                                                                        <span class="item-meta course-item-status">
                                                                            <img src="assets/img/icons/lock.svg" alt="icon">
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="course-item">
                                                                <a href="#" class="course-item-link">
                                                                    <span class="item-name">React for the Rest of us</span>
                                                                    <div class="course-item-meta">
                                                                        <span class="item-meta duration">10:48</span>
                                                                        <span class="item-meta course-item-status">
                                                                            <img src="assets/img/icons/lock.svg" alt="icon">
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Final Audit
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="list-wrap">
                                                            <li class="course-item">
                                                                <a href="#" class="course-item-link">
                                                                    <span class="item-name">Course Installation</span>
                                                                    <div class="course-item-meta">
                                                                        <span class="item-meta duration">07:48</span>
                                                                        <span class="item-meta course-item-status">
                                                                            <img src="assets/img/icons/lock.svg" alt="icon">
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="course-item">
                                                                <a href="#" class="course-item-link">
                                                                    <span class="item-name">Create a Simple React App</span>
                                                                    <div class="course-item-meta">
                                                                        <span class="item-meta duration">07:48</span>
                                                                        <span class="item-meta course-item-status">
                                                                            <img src="assets/img/icons/lock.svg" alt="icon">
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="course-item">
                                                                <a href="#" class="course-item-link">
                                                                    <span class="item-name">React for the Rest of us</span>
                                                                    <div class="course-item-meta">
                                                                        <span class="item-meta duration">10:48</span>
                                                                        <span class="item-meta course-item-status">
                                                                            <img src="assets/img/icons/lock.svg" alt="icon">
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="instructors-tab-pane" role="tabpanel" aria-labelledby="instructors-tab" tabindex="0">
                                    <div class="courses__instructors-wrap">
                                        <div class="courses__instructors-thumb">
                                            <img src="assets/img/courses/course_instructors.png" alt="img">
                                        </div>
                                        <div class="courses__instructors-content">
                                            <h2 class="title">Mark Jukarberg</h2>
                                            <span class="designation">UX Design Lead</span>
                                            <p class="avg-rating"><i class="fas fa-star"></i>(4.8 Ratings)</p>
                                            <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                                            <div class="instructor__social">
                                                <ul class="list-wrap justify-content-start">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab" tabindex="0">
                                    <div class="courses__rating-wrap">
                                        <h2 class="title">Reviews</h2>
                                        <div class="course-rate">
                                            <div class="course-rate__summary">
                                                <div class="course-rate__summary-value">4.8</div>
                                                <div class="course-rate__summary-stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="course-rate__summary-text">
                                                    12 Ratings
                                                </div>
                                            </div>
                                            <div class="course-rate__details">
                                                <div class="course-rate__details-row">
                                                    <div class="course-rate__details-row-star">
                                                        5
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="course-rate__details-row-value">
                                                        <div class="rating-gray"></div>
                                                        <div class="rating" style="width:80%;" title="80%"></div>
                                                        <span class="rating-count">2</span>
                                                    </div>
                                                </div>
                                                <div class="course-rate__details-row">
                                                    <div class="course-rate__details-row-star">
                                                        4
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="course-rate__details-row-value">
                                                        <div class="rating-gray"></div>
                                                        <div class="rating" style="width:50%;" title="50%"></div>
                                                        <span class="rating-count">1</span>
                                                    </div>
                                                </div>
                                                <div class="course-rate__details-row">
                                                    <div class="course-rate__details-row-star">
                                                        3
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="course-rate__details-row-value">
                                                        <div class="rating-gray"></div>
                                                        <div class="rating" style="width:0%;" title="0%"></div>
                                                        <span class="rating-count">0</span>
                                                    </div>
                                                </div>
                                                <div class="course-rate__details-row">
                                                    <div class="course-rate__details-row-star">
                                                        2
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="course-rate__details-row-value">
                                                        <div class="rating-gray"></div>
                                                        <div class="rating" style="width:0%;" title="0%"></div>
                                                        <span class="rating-count">0</span>
                                                    </div>
                                                </div>
                                                <div class="course-rate__details-row">
                                                    <div class="course-rate__details-row-star">
                                                        1
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="course-rate__details-row-value">
                                                        <div class="rating-gray"></div>
                                                        <div class="rating" style="width:0%;" title="0%"></div>
                                                        <span class="rating-count">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-review-head">
                                            <div class="review-author-thumb">
                                                <img src="assets/img/courses/review-author.png" alt="img">
                                            </div>
                                            <div class="review-author-content">
                                                <div class="author-name">
                                                    <h5 class="name">Jura Hujaor <span>2 Days ago</span></h5>
                                                    <div class="author-rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <h4 class="title">The best LMS Design System</h4>
                                                <p>Maximus ligula eleifend id nisl quis interdum. Sed malesuada tortor non turpis semper bibendum nisi porta, malesuada risus nonerviverra dolor. Vestibulum ante ipsum primis in faucibus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="courses__details-sidebar">
                            <div class="courses__details-video">
                                <img src="assets/img/courses/course_thumb02.jpg" alt="img">
                                <a href="https://www.youtube.com/watch?v=YwrHGratByU" class="popup-video"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="courses__cost-wrap">
                                <span>This Course Fee:</span>
                                <h2 class="title">$18.00 <del>$32.00</del></h2>
                            </div>
                            <div class="courses__information-wrap">
                                <h5 class="title">Course includes:</h5>
                                <ul class="list-wrap">
                                    <li>
                                        <img src="assets/img/icons/course_icon01.svg" alt="img" class="injectable">
                                        Level
                                        <span>Expert</span>
                                    </li>
                                    <li>
                                        <img src="assets/img/icons/course_icon02.svg" alt="img" class="injectable">
                                        Duration
                                        <span>11h 20m</span>
                                    </li>
                                    <li>
                                        <img src="assets/img/icons/course_icon03.svg" alt="img" class="injectable">
                                        Lessons
                                        <span>12</span>
                                    </li>
                                    <li>
                                        <img src="assets/img/icons/course_icon04.svg" alt="img" class="injectable">
                                        Quizzes
                                        <span>145</span>
                                    </li>
                                    <li>
                                        <img src="assets/img/icons/course_icon05.svg" alt="img" class="injectable">
                                        Certifications
                                        <span>Yes</span>
                                    </li>
                                    <li>
                                        <img src="assets/img/icons/course_icon06.svg" alt="img" class="injectable">
                                        Graduation
                                        <span>25K</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="courses__payment">
                                <h5 class="title">Secure Payment:</h5>
                                <img src="assets/img/others/payment.png" alt="img">
                            </div>
                            <div class="courses__details-social">
                                <h5 class="title">Share this course:</h5>
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="courses__details-enroll">
                                <div class="tg-button-wrap">
                                    <a href="courses.html" class="btn btn-two arrow-btn">
                                        See All Instructors
                                        <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- courses-details-area-end -->

    </main>
    <!-- main-area-end -->



    <!-- footer-area -->
    <footer class="footer__area">
        <div class="footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer__widget">
                            <div class="logo mb-35">
                                <a href="index.html"><img src="assets/img/logo/secondary_logo.svg" alt="img"></a>
                            </div>
                            <div class="footer__content">
                                <p>when an unknown printer took galley of type and scrambled it to make pspecimen bookt has.</p>
                                <ul class="list-wrap">
                                    <li>463 7th Ave, NY 10018, USA</li>
                                    <li>+123 88 9900 456</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__widget">
                            <h4 class="footer__widget-title">Useful Links</h4>
                            <div class="footer__link">
                                <ul class="list-wrap">
                                    <li><a href="events-details.html">Our values</a></li>
                                    <li><a href="events-details.html">Our advisory board</a></li>
                                    <li><a href="events-details.html">Our partners</a></li>
                                    <li><a href="events-details.html">Become a partner</a></li>
                                    <li><a href="events-details.html">Work at Future Learn</a></li>
                                    <li><a href="events-details.html">Quizlet Plus</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__widget">
                            <h4 class="footer__widget-title">Our Company</h4>
                            <div class="footer__link">
                                <ul class="list-wrap">
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="instructor-details.html">Become Teacher</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="instructor-details.html">Instructor</a></li>
                                    <li><a href="events-details.html">Events</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer__widget">
                            <h4 class="footer__widget-title">Get In Touch</h4>
                            <div class="footer__contact-content">
                                <p>when an unknown printer took <br> galley type and scrambled</p>
                                <ul class="list-wrap footer__social">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <img src="assets/img/icons/facebook.svg" alt="img" class="injectable">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <img src="assets/img/icons/twitter.svg" alt="img" class="injectable">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <img src="assets/img/icons/whatsapp.svg" alt="img" class="injectable">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <img src="assets/img/icons/instagram.svg" alt="img" class="injectable">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <img src="assets/img/icons/youtube.svg" alt="img" class="injectable">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="app-download">
                                <a href="#"><img src="assets/img/others/google-play.svg" alt="img"></a>
                                <a href="#"><img src="assets/img/others/apple-store.svg" alt="img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="copy-right-text">
                            <p>© 2010-2024 skillgro.com. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="footer__bottom-menu">
                            <ul class="list-wrap">
                                <li><a href="contact.html">Term of Use</a></li>
                                <li><a href="contact.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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