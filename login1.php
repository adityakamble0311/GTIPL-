<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SkillGro - Online Courses & Education Template</title>
    <meta name="description" content="SkillGro - Online Courses & Education Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
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

    <style>
    .otp-input {
            width: 90px;
            height: 70px;
            margin: 10px;
            font-size: 24px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .otp-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }
    </style>
</head>

<body></body>

<section class="singUp-area section-py-120">
    <div class="container text-center">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-6 col-lg-8 ">
                <div class="singUp-wrap">

                    <img src="./oc-unlock.svg" width="300">
                    <h2 class="title"> Student Login </h2>
                    <!-- <p> We send a </p> -->
                    <div class="account__social">
                        <!-- <a href="#" class="account__social-btn">
                                    <img src="assets/img/icons/google.svg" alt="img">
                                    Continue with google
                                </a> -->
                    </div>

                    <form action="#" class="account__form">
                        <div class="form-grp">
                            <!-- <input id="mobile_no" type="text" placeholder="Enter Mobile No"> -->
                            <p> We sent a verification code to your via sms. Enter the code from your register mobile
                                no.</p>
                        </div>
                        <!-- <div class="form-grp">
                                <div class="g-recaptcha" data-sitekey="6Lcc2PopAAAAAMd5BDlx0Fey4HOn5FWhwKXY06ke"></div>
                                </div> -->
                        <!-- <div class="mb-4">
                            <input type="text" class="form-control form-control-single-number" name="box"
                                id="twoStepVerificationSrCodeInput2" placeholder="" aria-label="" maxlength="1"
                                autocomplete="off" autocapitalize="off" spellcheck="false">
                        </div> -->

                        <div class="otp-container">
                            <input type="text" maxlength="1" class="otp-input" oninput="moveToNext(this, 'otp2')"
                                id="otp1">
                            <input type="text" maxlength="1" class="otp-input" oninput="moveToNext(this, 'otp3')"
                                id="otp2">
                            <input type="text" maxlength="1" class="otp-input" oninput="moveToNext(this, 'otp4')"
                                id="otp3">
                            <input type="text" maxlength="1" class="otp-input" id="otp4">
                        </div>

                        <div class="account__check">
                            <!-- <div class="account__check-remember">
                                        <input type="checkbox" class="form-check-input" value="" id="terms-check">
                                        <label for="terms-check" class="form-check-label">Remember me</label>
                                    </div> -->
                            <!-- <div class="account__check-forgot">
                                        <a href="registration.html">Forgot Password?</a>
                                    </div> -->
                        </div>
                        <button type="submit" class="btn btn-two arrow-btn"> Verify <img
                                src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></button>
                    </form>
                    <!-- <div class="account__switch">
                                <p>Don't have an account?<a href="registration.html">Sign Up</a></p>
                            </div> -->
                </div>
            </div>
        </div>
    </div>
</section>


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
        function moveToNext(current, nextFieldID) {
            if (current.value.length >= 1) {
                document.getElementById(nextFieldID).focus();
            }
        }
</script>
</body>

</html>