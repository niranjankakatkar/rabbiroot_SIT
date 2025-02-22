<?php
include 'niru_collection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $password = $_POST['password'];
    $flag = "0";
    $key_ = generateRandomCHAR_INT(10);

    // Check if the user already exists
    $check_query = "SELECT * FROM user_master WHERE email='$email' OR mobile_no='$mobile_no'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        // User already exists
        echo "<script>alert('User already exists. Please try logging in.'); window.location.href='login.php';</script>";
    } else {
        // Insert new user
        $sql = "INSERT INTO user_master(name, email, mobile_no, password, reg_no,active_flag) VALUES('$full_name', '$email', '$mobile_no', '$password', '$key_','1')";

        if ($conn->query($sql)) {
            echo "<script>alert('User Registered successfully.'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Registration failed. Please try again later.');</script>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>RabbiRoots - Login</title>

    <!-- Fav Icon -->
    <link rel="icon" href="public/assets/images/rabbiroots.ico" type="image/x-icon">


</head>


<!-- page wrapper -->

<body>


    <!-- Fav Icon -->
    <link rel="icon" href="public/assets/images/rabbiroots.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="assets/css/module-css/shop-sidebar.html" rel="stylesheet">
    <link href="public/assets/css/odometer.css" rel="stylesheet">
    <link href="public/assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="public/assets/css/flaticon.css" rel="stylesheet">
    <link href="public/assets/css/owl.css" rel="stylesheet">
    <link href="public/assets/css/bootstrap.css" rel="stylesheet">
    <link href="public/assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="public/assets/css/animate.css" rel="stylesheet">
    <link href="public/assets/css/nice-select.css" rel="stylesheet">
    <link href="public/assets/css/elpath.css" rel="stylesheet">
    <link href="public/assets/css/color.css" id="jssDefault" rel="stylesheet">
    <link href="public/assets/css/rtl.css" rel="stylesheet">
    <link href="public/assets/css/style.css" rel="stylesheet">
    <link href="public/assets/css/module-css/header.css" rel="stylesheet">
    <link href="public/assets/css/module-css/featured.css" rel="stylesheet">
    <link href="public/assets/css/module-css/banner.css" rel="stylesheet">
    <link href="public/assets/css/module-css/shop.css" rel="stylesheet">
    <link href="public/assets/css/module-css/ads.css" rel="stylesheet">
    <link href="public/assets/css/module-css/cta.css" rel="stylesheet">
    <link href="public/assets/css/module-css/offers.css" rel="stylesheet">
    <link href="public/assets/css/module-css/news.css" rel="stylesheet">
    <link href="public/assets/css/module-css/highlights.css" rel="stylesheet">
    <link href="public/assets/css/module-css/footer.css" rel="stylesheet">
    <link href="public/assets/css/responsive.css" rel="stylesheet">
    <link href="public/assets/css/jquery-ui.css" rel="stylesheet">
    <link href="public/assets/css/module-css/page-title.css" rel="stylesheet">
    <link href="public/assets/css/module-css/shop-details.css" rel="stylesheet">
    <link href="public/assets/css/module-css/deals.css" rel="stylesheet">
    <link href="public/assets/css/responsive.css" rel="stylesheet">
    <link href="public/assets/css/odometer.css" rel="stylesheet">
    <link href="public/assets/css/module-css/contact.css" rel="stylesheet">
    <link href="public/assets/css/module-css/about.css" rel="stylesheet">
    <link href="public/assets/css/module-css/apps.css" rel="stylesheet">
    <link href="public/assets/css/module-css/blog-sidebar.css" rel="stylesheet">
    <link href="public/assets/css/module-css/error.css" rel="stylesheet">
    <link href="public/assets/css/module-css/testimonial.css" rel="stylesheet">
    <link href="public/assets/css/module-css/cart.css" rel="stylesheet">
    <link href="public/assets/css/shop-page.html" rel="stylesheet">
    <link href="public/assets/css/module-css/checkout.css" rel="stylesheet">
    <link href="public/assets/css/module-css/shop-sidebar.css" rel="stylesheet">
    <link href="public/assets/css/module-css/shop-page.css" rel="stylesheet">
    <link href="public/assets/css/module-css/login.css" rel="stylesheet">
    <link href="public/assets/css/module-css/account.css" rel="stylesheet">
    <link href="public/assets/css/module-css/discount.css" rel="stylesheet">
    <link href="public/assets/css/module-css/product-details.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">




    </head>


    <!-- page wrapper -->

    <body>

        <div class="boxed_wrapper ltr">




            <?php include 'header.php'; ?>


            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><i class="fas fa-times"></i></div>
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.php"><img src="assets/images/logo.html" alt="" title=""></a>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                    <div class="contact-info">
                        <h4>Contact Info</h4>
                        <ul>
                            <li>Chicago 12, Melborne City, USA</li>
                            <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                            <li><a href="mailto:info@example.com">info@example.com</a></li>
                        </ul>
                    </div>
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="index.php"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.php"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index.php"><span class="fab fa-pinterest-p"></span></a></li>
                            <li><a href="index.php"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index.php"><span class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->





            <div class="boxed_wrapper ltr">


                <!-- Sign-Up Section -->
                <section class="sign-section pb_80 pt_20">
                    <div class="large-container">
                        <div class="sec-title centred pb_30">
                            <h3>Sign Up</h3>
                        </div>
                        <div class="form-inner">
                            <form autocomplete="off" method="post" accept-charset="utf-8" id="registrationForm">
                                <!-- Full Name -->
                                <div class="form-group">
                                    <label for="full_name">Full Name <span style="color: red;">*</span></label>
                                    <input type="text" id="full_name" onkeypress="return /[0-9a-zA-Z]/i.test(event.key)"
                                        name="full_name" placeholder="Enter your Name" required>
                                </div>

                                <!-- Email -->
                                <div class="form-group">
                                    <label for="email">Email <span>*</span></label>
                                    <input type="email" id="email" name="email" placeholder="Enter your Email" required>
                                </div>

                                <!-- Mobile Number -->
                                <div class="form-group">
                                    <label for="mobile_no">Mobile Number <span style="color: red;">*</span></label>
                                    <input type="text" id="mobile_no" name="mobile_no"
                                        placeholder="Enter your Mobile Number" required pattern="[0-9]{10}"
                                        title="Please enter a valid 10-digit mobile number ">
                                </div>


                                <!-- Password -->
                                <div class="form-group" style="position: relative;">
                                    <label for="password">Password <span style="color: red;">*</span></label>
                                    <input type="password" id="password" name="password"
                                        placeholder="Enter your Password" required>
                                    <!-- Eye Icon -->
                                    <span id="togglePassword"
                                        style="position: absolute; top: 70%; right: 10px; transform: translateY(-50%); cursor: pointer; color: #666; font-size: 18px;">
                                        <i class="fa fa-eye" id="toggleIcon"></i>
                                    </span>
                                </div>

                                <!-- Terms and Privacy -->
                                <div class="other-option">
                                    <div class="form-check ps-0 m-0 remember-box">
                                        <input class="checkbox_animated check-box" type="checkbox" id="flexCheckDefault"
                                            required>
                                        <label class="form-check-label" for="flexCheckDefault">I agree with
                                            <span style="color: #062d6a;">Terms</span> and <span
                                                style="color: #062d6a;">Privacy</span></label>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group message-btn">
                                    <button type="submit" id="submitButton" class="theme-btn btn-one">Sign Up</button>
                                </div>
                            </form>



                            <!-- Alternative Options -->
                            <div class="other-log-in" style="text-align: center; margin: 20px 0;">
                                <h6 style="margin: 10px 0; font-size: 14px; color: #666;">or</h6>
                            </div>

                            <div class="sign-up-box" style="text-align: center; margin-top: 20px;">
                                <h4 style="margin-bottom: 10px; font-size: 16px; font-weight: bold; color: #333;">
                                    Already have an account?</h4>
                                <a href="login.php"
                                    style="color: #007bff; text-decoration: none; font-size: 14px; font-weight: bold;">
                                    Log In
                                </a>
                            </div>
                        </div>
                    </div>



                    <div class="container-fluid-lg w-100" id="otp_div" style="display:NONE">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                                <div class="image-contain">
                                    <img src="../assets/images/inner-page/otp.png" class="img-fluid" alt="">
                                </div>
                            </div>

                            <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <div class="log-in-box">
                                        <div class="log-in-title">
                                            <h3 class="text-title">Please enter the one time password to verify your
                                                account</h3>
                                            <h5 class="text-content">A code has been sent to mail </h5>
                                        </div>
                                        <form id="otpForm" method="post">
                                            <div id="otp" class="inputs d-flex flex-row justify-content-center">
                                                <input class="text-center form-control rounded" type="text" id="first"
                                                    maxlength="1" placeholder="0">
                                                <input class="text-center form-control rounded" type="text" id="second"
                                                    maxlength="1" placeholder="0">
                                                <input class="text-center form-control rounded" type="text" id="third"
                                                    maxlength="1" placeholder="0">
                                                <input class="text-center form-control rounded" type="text" id="fourth"
                                                    maxlength="1" placeholder="0">
                                                <input class="text-center form-control rounded" type="text" id="fifth"
                                                    maxlength="1" placeholder="0">
                                                <input class="text-center form-control rounded" type="text" id="sixth"
                                                    maxlength="1" placeholder="0">
                                            </div>

                                            <div class="send-box pt-4">
                                                <h5>Didn't get the code? <a href="javascript:void(0)"
                                                        class="theme-color fw-bold">Resend
                                                        It</a></h5>
                                            </div>

                                            <button id="submitButton_OTP" class="btn btn-animation w-100 mt-3"
                                                type="submit">Validate</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <input type="hidden" name="signup_key" id="signup_key" value="">


                <!-- highlights-section -->
                <section class="highlights-section alternat-2 pt-1">
                    <div class="large-container">
                        <div class="inner-container clearfix">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-10.html);"></div>
                            <div class="highlights-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><img src="public/assets/images/icons/icon-20.png" alt="">
                                    </div>
                                    <h5>Same day Product Delivery</h5>
                                </div>
                            </div>
                            <div class="highlights-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><img src="public/assets/images/icons/icon-21.png" alt="">
                                    </div>
                                    <h5>100% Customer Satisfaction</h5>
                                </div>
                            </div>
                            <div class="highlights-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><img src="public/assets/images/icons/icon-22.png" alt="">
                                    </div>
                                    <h5>Help and access is our mission</h5>
                                </div>
                            </div>
                            <div class="highlights-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><img src="public/assets/images/icons/icon-23.png" alt="">
                                    </div>
                                    <h5>100% quality Car Accessories</h5>
                                </div>
                            </div>
                            <div class="highlights-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><img src="public/assets/images/icons/icon-24.png" alt="">
                                    </div>
                                    <h5>24/7 Support for Clients</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- highlights-section -->

                <?php include 'footer.php'; ?>


                <!-- jequery plugins -->
                <script src="public/assets/js/jquery.js"></script>
                <script src="public/assets/js/bootstrap.min.js"></script>
                <script src="public/assets/js/owl.js"></script>
                <script src="public/assets/js/wow.js"></script>
                <script src="public/assets/js/validation.js"></script>
                <script src="public/assets/js/jquery.fancybox.js"></script>
                <script src="public/assets/js/appear.js"></script>
                <script src="public/assets/js/isotope.js"></script>
                <script src="public/assets/js/parallax-scroll.js"></script>
                <script src="public/assets/js/jquery.nice-select.min.js"></script>
                <script src="public/assets/js/scrolltop.min.js"></script>
                <script src="public/assets/js/language.js"></script>
                <script src="public/assets/js/countdown.js"></script>
                <script src="public/assets/js/jquery-ui.js"></script>
                <script src="public/assets/js/parallax.min.js"></script>
                <script src="public/assets/js/jquery.bootstrap-touchspin.js"></script>
                <script src="public/assets/js/countdown.js"></script>

                <!-- main-js -->
                <script src="public/assets/js/script.js"></script>



                <script>
                    // Get the eye icon and password input
                    const togglePassword = document.getElementById('togglePassword');
                    const passwordInput = document.getElementById('password');
                    const toggleIcon = document.getElementById('toggleIcon');

                    // Add event listener to the icon
                    togglePassword.addEventListener('click', function () {
                        // Check if password type is password, then change it to text
                        if (passwordInput.type === 'password') {
                            passwordInput.type = 'text';
                            toggleIcon.classList.remove('fa-eye-slash');
                            toggleIcon.classList.add('fa-eye');
                        } else {
                            passwordInput.type = 'password';
                            toggleIcon.classList.remove('fa-eye');
                            toggleIcon.classList.add('fa-eye-slash');
                        }
                    });


                    // OTP Auto-Focus Functionality

                    document.addEventListener("DOMContentLoaded", function () {
                        const inputs = document.querySelectorAll("#otp input");

                        inputs.forEach((input, index) => {
                            input.addEventListener("input", (e) => {
                                const value = e.target.value;

                                // Move to next input if value is entered
                                if (value.length === 1 && index < inputs.length - 1) {
                                    inputs[index + 1].focus();
                                }
                            });

                            input.addEventListener("keydown", (e) => {
                                if (e.key === "Backspace" && !e.target.value && index > 0) {
                                    // Move to the previous input if Backspace is pressed
                                    inputs[index - 1].focus();
                                }
                            });
                        });
                    });

                    $(document).ready(function () {
                        $("#submitButton_OTP").click(function (event) {
                            event.preventDefault(); // Prevent default form submission

                            let form = $("#otpForm");

                            let url = "signup_form_OTP.php";

                            var key = document.getElementById("signup_key").value;
                            var otp = document.getElementById("first").value + "" + document.getElementById("second").value + "" + document.getElementById("third").value + "" + document.getElementById("fourth").value + "" + document.getElementById("fifth").value + "" + document.getElementById("sixth").value;

                            $.ajax({
                                type: "POST",
                                url: url,
                                data: { signupkey: key, user_otp: otp }, // Serialize form data
                                success: function (data) {
                                    console.log('my message' + data);
                                    let mydata = data.split("__AJAX-");
                                    var word = "" + mydata[1];
                                    let ans = "" + word.localeCompare("Done ");

                                    if (ans == 0) {

                                        window.location.href = 'sign-up.php';


                                    } else {
                                        alert("Error occurred while submitting the form")
                                    }
                                },
                                error: function (data) {
                                    alert("Error occurred while submitting the form");
                                }
                            });
                        });
                    });



                </script>

    </body><!-- End of .page_wrapper -->


</html>