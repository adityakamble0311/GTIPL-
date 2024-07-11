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

    <!-- Preloader-->
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
                    <div class="col-xl-3 col-lg-4 order-2 order-lg-0">
                        <aside class="courses__sidebar">
                            <div class="courses-widget">
                                <h4 class="widget-title">Categories</h4>
                                <div class="courses-cat-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_1">
                                                <label class="form-check-label" for="cat_1">Art & Design (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_2">
                                                <label class="form-check-label" for="cat_2">Business (12)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_3">
                                                <label class="form-check-label" for="cat_3">Data Science (7)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_4">
                                                <label class="form-check-label" for="cat_4">Development (10)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_5">
                                                <label class="form-check-label" for="cat_5">Finance (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_6">
                                                <label class="form-check-label" for="cat_6">Health & Fitness (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_7">
                                                <label class="form-check-label" for="cat_7">Lifestyle (9)</label>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="show-more">
                                        <a href="#">Show More +</a>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-widget">
                                <h4 class="widget-title">Language</h4>
                                <div class="courses-cat-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="lang_1">
                                                <label class="form-check-label" for="lang_1">All Language</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="lang_2">
                                                <label class="form-check-label" for="lang_2">Arabic (11)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="lang_3">
                                                <label class="form-check-label" for="lang_3">English (53)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="lang_4">
                                                <label class="form-check-label" for="lang_4">Spanish (22)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="show-more">
                                    <a href="#">Show More +</a>
                                </div>
                            </div>
                            <div class="courses-widget">
                                <h4 class="widget-title">Price</h4>
                                <div class="courses-cat-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="price_1">
                                                <label class="form-check-label" for="price_1">All Price</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="price_2">
                                                <label class="form-check-label" for="price_2">Free</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="price_3">
                                                <label class="form-check-label" for="price_3">Paid</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="courses-widget">
                                <h4 class="widget-title">Skill level</h4>
                                <div class="courses-cat-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="difficulty_1">
                                                <label class="form-check-label" for="difficulty_1">All Skills</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="difficulty_2">
                                                <label class="form-check-label" for="difficulty_2">Beginner (55)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="difficulty_3">
                                                <label class="form-check-label" for="difficulty_3">Intermediate (22)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="difficulty_4">
                                                <label class="form-check-label" for="difficulty_4">High (42)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="courses-widget">
                                <h4 class="widget-title">Instructors</h4>
                                <div class="courses-cat-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ins_1">
                                                <label class="form-check-label" for="ins_1">David Millar (10)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ins_2">
                                                <label class="form-check-label" for="ins_2">Wade Warren (13)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ins_3">
                                                <label class="form-check-label" for="ins_3">Jenny Wilson (22)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ins_4">
                                                <label class="form-check-label" for="ins_4">Jacob Jones (42)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="show-more">
                                    <a href="#">Show More +</a>
                                </div>
                            </div>
                            <div class="courses-widget">
                                <h4 class="widget-title">Ratings</h4>
                                <div class="courses-rating-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <div class="rating">
                                                    <ul class="list-wrap">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span>(42)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <div class="rating">
                                                    <ul class="list-wrap">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span>(23)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <div class="rating">
                                                    <ul class="list-wrap">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span>(11)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <div class="rating">
                                                    <ul class="list-wrap">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span>(7)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <div class="rating">
                                                    <ul class="list-wrap">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span>(3)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="courses-top-wrap courses-top-wrap">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="courses-top-left">
                                        <p>Showing 250 total results</p>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="d-flex justify-content-center justify-content-md-end align-items-center flex-wrap">
                                        <div class="courses-top-right m-0 ms-md-auto">
                                            <span class="sort-by">Sort By:</span>
                                            <div class="courses-top-right-select">
                                                <select name="orderby" class="orderby">
                                                    <option value="Most Popular">Most Popular</option>
                                                    <option value="popularity">popularity</option>
                                                    <option value="average rating">average rating</option>
                                                    <option value="latest">latest</option>
                                                    <option value="latest">latest</option>
                                                </select>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs courses__nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid" type="button" role="tab" aria-controls="grid" aria-selected="true">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 1H2C1.44772 1 1 1.44772 1 2V6C1 6.55228 1.44772 7 2 7H6C6.55228 7 7 6.55228 7 6V2C7 1.44772 6.55228 1 6 1Z"  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M16 1H12C11.4477 1 11 1.44772 11 2V6C11 6.55228 11.4477 7 12 7H16C16.5523 7 17 6.55228 17 6V2C17 1.44772 16.5523 1 16 1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M6 11H2C1.44772 11 1 11.4477 1 12V16C1 16.5523 1.44772 17 2 17H6C6.55228 17 7 16.5523 7 16V12C7 11.4477 6.55228 11 6 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M16 11H12C11.4477 11 11 11.4477 11 12V16C11 16.5523 11.4477 17 12 17H16C16.5523 17 17 16.5523 17 16V12C17 11.4477 16.5523 11 16 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="false">
                                                    <svg width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 6C0.67 6 0 6.67 0 7.5C0 8.33 0.67 9 1.5 9C2.33 9 3 8.33 3 7.5C3 6.67 2.33 6 1.5 6ZM1.5 0C0.67 0 0 0.67 0 1.5C0 2.33 0.67 3 1.5 3C2.33 3 3 2.33 3 1.5C3 0.67 2.33 0 1.5 0ZM1.5 12C0.67 12 0 12.68 0 13.5C0 14.32 0.68 15 1.5 15C2.32 15 3 14.32 3 13.5C3 12.68 2.33 12 1.5 12ZM5.5 14.5H17.5C18.05 14.5 18.5 14.05 18.5 13.5C18.5 12.95 18.05 12.5 17.5 12.5H5.5C4.95 12.5 4.5 12.95 4.5 13.5C4.5 14.05 4.95 14.5 5.5 14.5ZM5.5 8.5H17.5C18.05 8.5 18.5 8.05 18.5 7.5C18.5 6.95 18.05 6.5 17.5 6.5H5.5C4.95 6.5 4.5 6.95 4.5 7.5C4.5 8.05 4.95 8.5 5.5 8.5ZM4.5 1.5C4.5 2.05 4.95 2.5 5.5 2.5H17.5C18.05 2.5 18.5 2.05 18.5 1.5C18.5 0.95 18.05 0.5 17.5 0.5H5.5C4.95 0.5 4.5 0.95 4.5 1.5Z" fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                                <div class="row courses__grid-wrap row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-sm-1">
                                    <div class="col">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb01.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Development</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">Learning JavaScript With Imagination</a></h5>
                                                <p class="author">By <a href="#">David Millar</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$15.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb02.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Design</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">The Complete Graphic Design for Beginners</a></h5>
                                                <p class="author">By <a href="#">Jenny Wilson</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$19.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb03.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Marketing</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.3 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">Learning Digital Marketing on Facebook</a></h5>
                                                <p class="author">By <a href="#">Wade Warren</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$24.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb04.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Business</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">Financial Analyst Training & Investing Course</a></h5>
                                                <p class="author">By <a href="#">Robert Fox</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$12.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb05.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Data Science</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">Data Analysis & Visualization Masterclass</a></h5>
                                                <p class="author">By <a href="#">Guy Hawkins</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$27.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb06.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Mathematic</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.7 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">Master the Fundamentals of Math</a></h5>
                                                <p class="author">By <a href="#">Sawpawlo Mark</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$10.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb07.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Business</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">How To Build A Localized Website With Hugo And Strapi</a></h5>
                                                <p class="author">By <a href="#">David Millar</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$11.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb08.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Desing</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">Designing Effective Pricing Plans UX</a></h5>
                                                <p class="author">By <a href="#">Sawpawlo Mark</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$17.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb09.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Language</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.6 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">Accelerating UX Maturity With A Breakthrough Project</a></h5>
                                                <p class="author">By <a href="#">David Millar</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$22.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb10.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Creative</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.7 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">Demystifying The New Gatsby Framework</a></h5>
                                                <p class="author">By <a href="#">Jack & Jon</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$29.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb11.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Data</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">Voice Control Usability Considerations For Partially</a></h5>
                                                <p class="author">By <a href="#">Lily Rebeca</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$12.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb12.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Finance</a>
                                                    </li>
                                                    <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">Things I Wish I’d Known Earlier In My Career</a></h5>
                                                <p class="author">By <a href="#">Sawpawlo Mark</a></p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <h5 class="price">$9.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav class="pagination__wrap mt-30">
                                    <ul class="list-wrap">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="courses.php">2</a></li>
                                        <li><a href="courses.php">3</a></li>
                                        <li><a href="courses.php">4</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                                <div class="row courses__list-wrap row-cols-1">
                                    <div class="col">
                                        <div class="courses__item courses__item-three shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb01.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Development</a>
                                                        <div class="avg-rating">
                                                            <i class="fas fa-star"></i> (4.8 Reviews)
                                                        </div>
                                                    </li>
                                                    <li class="price"><del>$29.00</del>$15.00</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">Resolving Conflicts Between Designers And Engineers</a></h5>
                                                <p class="author">By <a href="#">David Millar</a></p>
                                                <p class="info">when an unknown printer took a galley of type and scrambled type specimen book It has survived not only.</p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item courses__item-three shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb02.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Design</a>
                                                        <div class="avg-rating">
                                                            <i class="fas fa-star"></i> (4.5 Reviews)
                                                        </div>
                                                    </li>
                                                    <li class="price">$41.00</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">Powerful Image Optimization Tools for this year</a></h5>
                                                <p class="author">By <a href="#">Jenny Wilson</a></p>
                                                <p class="info">when an unknown printer took a galley of type and scrambled type specimen book It has survived not only.</p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item courses__item-three shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb03.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Marketing</a>
                                                        <div class="avg-rating">
                                                            <i class="fas fa-star"></i> (4.6 Reviews)
                                                        </div>
                                                    </li>
                                                    <li class="price"><del>$24.00</del>$12.00</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">Learning JavaScript With Imagination</a></h5>
                                                <p class="author">By <a href="#">Wade Warren</a></p>
                                                <p class="info">when an unknown printer took a galley of type and scrambled type specimen book It has survived not only.</p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item courses__item-three shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb04.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Finance</a>
                                                        <div class="avg-rating">
                                                            <i class="fas fa-star"></i> (4.9 Reviews)
                                                        </div>
                                                    </li>
                                                    <li class="price"><del>$32.00</del>$19.00</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">Resolving Conflicts Between Designers And Engineers</a></h5>
                                                <p class="author">By <a href="#">Robert Fox</a></p>
                                                <p class="info">when an unknown printer took a galley of type and scrambled type specimen book It has survived not only.</p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item courses__item-three shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb05.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Data Science</a>
                                                        <div class="avg-rating">
                                                            <i class="fas fa-star"></i> (4.7 Reviews)
                                                        </div>
                                                    </li>
                                                    <li class="price"><del>$50.00</del>$40.00</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">A Look At Remix And The Differences With Next.js</a></h5>
                                                <p class="author">By <a href="#">Guy Hawkins</a></p>
                                                <p class="info">when an unknown printer took a galley of type and scrambled type specimen book It has survived not only.</p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item courses__item-three shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb06.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Mathematic</a>
                                                        <div class="avg-rating">
                                                            <i class="fas fa-star"></i> (4.8 Reviews)
                                                        </div>
                                                    </li>
                                                    <li class="price"><del>$30.00</del>$19.00</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">An Accessibility-First Approach To Chart Visual</a></h5>
                                                <p class="author">By <a href="#">Sawpawlo Mark</a></p>
                                                <p class="info">when an unknown printer took a galley of type and scrambled type specimen book It has survived not only.</p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item courses__item-three shine__animate-item">
                                            <div class="courses__item-thumb">
                                                <a href="course-details.php" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb07.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.php">Development</a>
                                                        <div class="avg-rating">
                                                            <i class="fas fa-star"></i> (4.6 Reviews)
                                                        </div>
                                                    </li>
                                                    <li class="price">$11.00</li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.php">How To Build A Localized Website With Hugo And Strapi</a></h5>
                                                <p class="author">By <a href="#">Robert Fox</a></p>
                                                <p class="info">when an unknown printer took a galley of type and scrambled type specimen book It has survived not only.</p>
                                                <div class="courses__item-bottom">
                                                    <div class="button">
                                                        <a href="course-details.php">
                                                            <span class="text">Enroll Now</span>
                                                            <i class="flaticon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav class="pagination__wrap mt-30">
                                    <ul class="list-wrap">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="courses.php">2</a></li>
                                        <li><a href="courses.php">3</a></li>
                                        <li><a href="courses.php">4</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- all-courses-end -->

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
                                <a href="index.php"><img src="assets/img/logo/secondary_logo.svg" alt="img"></a>
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
                                    <li><a href="events-details.php">Our values</a></li>
                                    <li><a href="events-details.php">Our advisory board</a></li>
                                    <li><a href="events-details.php">Our partners</a></li>
                                    <li><a href="events-details.php">Become a partner</a></li>
                                    <li><a href="events-details.php">Work at Future Learn</a></li>
                                    <li><a href="events-details.php">Quizlet Plus</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__widget">
                            <h4 class="footer__widget-title">Our Company</h4>
                            <div class="footer__link">
                                <ul class="list-wrap">
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="instructor-details.php">Become Teacher</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="instructor-details.php">Instructor</a></li>
                                    <li><a href="events-details.php">Events</a></li>
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
                                <li><a href="contact.php">Term of Use</a></li>
                                <li><a href="contact.php">Privacy Policy</a></li>
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