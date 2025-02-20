<?php
include 'niru_collection.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $token_id = generateRandomString(15);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO contact_us(token_id,name,email,phone_no,subject,msg,response,flag) VALUES('$token_id','$name','$email','$phone_no','$subject','$msg','','0')";
    if ($conn->query($sql)) {
        ?>
        <script>alert("Saved Done"); window.location.href = "contact.php"; </script>
        <?php
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.hostlin.com/Hatbazar/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2024 11:27:35 GMT -->

<!-- Mirrored from rabbiroots.com/contact by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 10:25:11 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- Fav Icon -->
    <link rel="icon" href="public/assets/images/rabbiroots.ico" type="image/x-icon">

    <title>Rabbiroots - Contact-Us</title>









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
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">




    </head>


    <!-- page wrapper -->

    <body>

        <div class="boxed_wrapper ltr">




            <!-- main header -->
            <?php include 'header.php'; ?>
            <!-- End header -->








            <!-- contact-section -->
            <section class="contact-section pb_10">
                <div class="large-container">
                    <div class="sec-title centred pt-40 pb_70">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="inner-container pt-3">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                                <div class="info-box">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-50"></i></div>
                                        <h4>Corporate Office</h4>
                                        <p>S IT Solutions Pvt. Ltd. Office no. 509/510,
                                            C Wing 4th Floor, Mega Center, Magarpatta
                                            Road, Hadapsar 411028</p>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-50"></i></div>
                                        <h4>Main Warehouse</h4>
                                        <p>S IT Solutions Pvt. Ltd. Office no. 509/510,
                                            C Wing 4th Floor, Mega Center, Magarpatta
                                            Road, Hadapsar 411028</p>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-51"></i></div>
                                        <h4>Email Address</h4>
                                        <p><a href="mailto:support@example.com">support@example.com</a><br /><a
                                                href="mailto:contact@example.com">contact@example.com</a></p>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-52"></i></div>
                                        <h4>Phone Number</h4>
                                        <p><a href="tel:2085440141">+(208) 544 -0141</a><br /><a
                                                href="tel:2085440142">+(208) 544 -0142</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                                <div class="form-inner">
                                    <form method="post" id="contact-form">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <label>Name <span style="color:red">*</span></label>
                                                <input type="text" name="name" id="name" placeholder="" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <label>Phone Number <span style="color:red">*</span></label>
                                                <input type="text" maxlength="10" name="phone_no" id="phone_no" placeholder=""
                                                    required>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <label>Email Address <span style="color:red">*</span></label>
                                                <input type="email" name="email" id="email" placeholder="" required>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <label>Subject <span style="color:red">*</span></label>
                                                <input type="text" name="subject" id="subject" placeholder="" required>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <label>Write Message <span style="color:red">*</span></label>
                                                <textarea name="msg" id="msg" placeholder=""></textarea>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                                <button type="submit" class="theme-btn btn-one" name="submit-form">Send
                                                    Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-section end -->


            <!-- google-map -->
            <section class="google-map pb_80">
                <div class="large-container">
                    <div class="inner-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55945.16225505631!2d-73.90847969206546!3d40.66490264739892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1601263396347!5m2!1sen!2sbd"
                            width="100%" height="500" frameborder="0" style="border:0; width: 100%" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </section>
            <!-- google-map end -->






            <!-- highlights-section -->
            <section class="highlights-section alternat-2 pt-1">
                <div class="large-container">
                    <div class="inner-container clearfix">
                        <div class="shape" style="background-image: url(assets/images/shape/shape-10.html);"></div>
                        <div class="highlights-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><img src="public/assets/images/icons/icon-20.png" alt=""></div>
                                <h5>Same day Product Delivery</h5>
                            </div>
                        </div>
                        <div class="highlights-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><img src="public/assets/images/icons/icon-21.png" alt=""></div>
                                <h5>100% Customer Satisfaction</h5>
                            </div>
                        </div>
                        <div class="highlights-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><img src="public/assets/images/icons/icon-22.png" alt=""></div>
                                <h5>Help and access is our mission</h5>
                            </div>
                        </div>
                        <div class="highlights-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><img src="public/assets/images/icons/icon-23.png" alt=""></div>
                                <h5>100% quality Car Accessories</h5>
                            </div>
                        </div>
                        <div class="highlights-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><img src="public/assets/images/icons/icon-24.png" alt=""></div>
                                <h5>24/7 Support for Clients</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- highlights-section -->


            <!-- main-footer -->
            <?php include 'footer.php'; ?>
            <!-- main-footer end -->






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
    </body><!-- End of .page_wrapper -->

    <!-- Mirrored from azim.hostlin.com/Hatbazar/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2024 11:27:36 GMT -->

    <!-- Mirrored from rabbiroots.com/contact by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 10:25:11 GMT -->

</html>