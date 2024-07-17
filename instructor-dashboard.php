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
<?php include 'include/config.php'; ?>

<?php
// Fetch the total number of students from the database
$sql = "SELECT COUNT(*) as total FROM `tbl_admissions`";
$result = $con->query($sql);
$total_students = 0;
$total_students = 0;
if ($result) {
    $row = $result->fetch_assoc();
    $total_students = $row['total'];
} else {
    // If the query failed, output the error for debugging purposes
    echo "Error: " . $con->error;
}

// Fetch the total number of courses from the database
$sql_courses = "SELECT COUNT(*) as total FROM `tbl_courses`";
$result_courses = $con->query($sql_courses);

$total_courses = 0;
if ($result_courses) {
    $row_courses = $result_courses->fetch_assoc();
    $total_courses = $row_courses['total'];
} else {
    echo "Error: " . $con->error;
}
?>

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
                
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="dashboard__sidebar-wrap">
                        
                        <nav class="dashboard__sidebar-menu">
                            <ul class="list-wrap">
                                <li class="active">
                                    <a href="instructor-dashboard.php">
                                        <i class="fas fa-home"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="all-faculty.php">
                                        <i class="skillgro-avatar"></i>
                                        All Faculties
                                    </a>
                                </li>
                                <li>
                                    <a href="all-students.php">
                                        <i class="skillgro-book"></i>
                                        All Students
                                    </a>
                                </li>
                                <li>
                                    <a href="add-course.php">
                                        <i class="skillgro-label"></i>
                                        Add Course
                                    </a>
                                </li>
                                <li>
                                    <a href="add-faculty.php">
                                        <i class="skillgro-book-2"></i>
                                        Add Faculty
                                    </a>
                                </li>
                                
                            </ul>
                        </nav>
                        
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
                    <div class="dashboard__content-wrap dashboard__content-wrap-two mb-60">
                        <div class="dashboard__content-title">
                            <h4 class="title">Dashboard</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="dashboard__counter-item">
                                    <div class="icon">
                                        <i class="skillgro-book"></i>
                                    </div>
                                    <div class="content">
                                        <span class="count odometer" data-count="<?php echo $total_courses; ?>"></span>
                                        <p>TOTAL COURSES</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="dashboard__counter-item">
                                    <div class="icon">
                                        <i class="skillgro-tutorial"></i>
                                    </div>
                                    <div class="content">
                                        <span class="count odometer" data-count="<?php echo $total_students; ?>"></span>
                                        <p>TOTAL STUDENTS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="dashboard__counter-item">
                                    <div class="icon">
                                        <i class="skillgro-diploma-1"></i>
                                    </div>
                                    <div class="content">
                                        <span class="count odometer" data-count="10"></span>
                                        <p>TOTAL FACULTY</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="dashboard__content-wrap">
                        <div class="dashboard__content-title">
                            <h4 class="title">My Courses</h4>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="dashboard__review-table">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Course Name</th>
                                                <th>Enrolled</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="course-details.php">Internship & Training</a>
                                                </td>
                                                <td>
                                                    <p class="color-black">0</p>
                                                </td>
                                               
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="course-details.php">Web Development</a>
                                                </td>
                                                <td>
                                                    <p class="color-black">0</p>
                                                </td>
                                               
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="course-details.php">Python Development</a>
                                                </td>
                                                <td>
                                                    <p class="color-black">0</p>
                                                </td>
                                               
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="course-details.php">Machine Learning</a>
                                                </td>
                                                <td>
                                                    <p class="color-black">0</p>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="course-details.php">Artificial Intelligence</a>
                                                </td>
                                                <td>
                                                    <p class="color-black">0</p>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="course-details.php">Data Science</a>
                                                </td>
                                                <td>
                                                    <p class="color-black">0</p>
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="load-more-btn text-center mt-20">
                            <a href="#" class="link-btn">Browse All Course <img src="assets/img/icons/right_arrow.svg" alt="" class="injectable"></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dashboard-area-end -->

</main>
<!-- main-area-end -->

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
