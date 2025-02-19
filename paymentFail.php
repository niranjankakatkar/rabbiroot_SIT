<?php

include 'niru_collection.php';
$oid = $_SESSION['OID'];
$sql="update order_master set status='fail' where order_id='$oid'";
if($conn->query($sql))
{}

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rabbiroots.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 10:24:38 GMT -->
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
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">




    </head>


    <!-- page wrapper -->

    <body>

        <div class="boxed_wrapper ltr">



        <?php include 'header.php'; ?>
                <!-- End header -->


                    <div class="container mt-5 mb-5">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-5 text-center p-4"
                                style="background: white; border-radius: 20px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                                <div style="font-size: 50px; color: #FF0000; margin-bottom: 20px;">❌</div>
                                <h3 class="fw-bold">Payment Failed</h3>
                                <p>Oops! Something went wrong while processing your payment.<br>
                                    Please try again or contact support if the issue persists.</p>
                                <a href="#" class="btn mt-2"
                                    style="background: linear-gradient(to right, #ff4b2b, #ff416c); color: white; border: none; padding: 12px 20px; border-radius: 8px; font-size: 16px; transition: 0.3s; text-decoration: none;">
                                    Try Again
                                </a>
                            </div>
                        </div>
                    </div>



                    <!-- highlights-section -->
                    <section class="highlights-section alternat-2 pt-1">
                        <div class="large-container">
                            <div class="inner-container clearfix">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-10.html);">
                                </div>
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


                    <!-- main-footer -->
                    <footer class="main-footer">
                        <div class="widget-section p_relative pt_25 pb_25">
                            <div class="large-container">
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                        <div class="footer-widget logo-widget">
                                            <figure class="footer-logo mb_25"><a href="index.html"><img
                                                        src="public/assets/images/logo.png" alt=""
                                                        style="height: 120px; width: 150px;"></a></figure>
                                            <div class="widget-content">
                                                <ul class="info mb_25 clearfix">
                                                    <li>57 heol isaf Station Road, Cardiff, UK</li>
                                                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                                                </ul>
                                                <!-- <div class="form-inner">
                                        <form method="post" action="https://azim.hostlin.com/Hatbazar/contact.html">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Email Address" required>
                                                <button type="submit"><i class="icon-12"></i></button>
                                            </div>
                                        </form>
                                    </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                        <div class="footer-widget links-widget">
                                            <div class="widget-title mb_20">
                                                <h4>Resources</h4>
                                            </div>
                                            <div class="widget-content">
                                                <ul class="links-list clearfix">
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="ShopDetails.html">Shop Details</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                        <div class="footer-widget links-widget">
                                            <div class="widget-title mb_20">
                                                <h4>Support</h4>
                                            </div>
                                            <div class="widget-content">
                                                <ul class="links-list clearfix">
                                                    <li><a href="index.html">Reviews</a></li>
                                                    <li><a href="contact-2.html">Contact</a></li>
                                                    <li><a href="index.html">Return Policy</a></li>
                                                    <li><a href="index.html">Online Support</a></li>
                                                    <li><a href="index.html">Money Back</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                        <div class="footer-widget links-widget">
                                            <div class="widget-title mb_20">
                                                <h4>Store Info</h4>
                                            </div>
                                            <div class="widget-content">
                                                <ul class="links-list clearfix">
                                                    <li><a href="shop.html">Best Seller</a></li>
                                                    <li><a href="shop.html">Top Sold Items</a></li>
                                                    <li><a href="shop.html">New Arrivals</a></li>
                                                    <li><a href="shop.html">Flash Sale</a></li>
                                                    <li><a href="shop.html">Discount Products</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                             <div class="footer-widget download-widget">
                                <div class="widget-title mb_20">
                                    <h4>Download Our App</h4>
                                </div>
                                <div class="widget-content">
                                    <p>Stay inform about upcoming events, webinars, and exciting happenings.</p>
                                    <div class="download-btn mt_35">
                                        <a href="about.html" class="apple-store">
                                            <img src="https://rabbiroots.com/public/assets/images/icons/icon-18.png" alt="">
                                            <span>Download on</span>
                                            App Store
                                        </a>
                                        <a href="about.html" class="play-store">
                                            <img src="https://rabbiroots.com/public/assets/images/icons/icon-19.png" alt="">
                                            <span>Get it on</span>
                                            Google Play
                                        </a>
                                    </div>
                                </div>
                             </div>
                        </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom">
                            <div class="large-container">
                                <div class="bottom-inner">
                                    <ul class="footer-card">
                                        <li><a href="index.html"><img src="public/assets/images/icons/card-2.png"
                                                    alt=""></a></li>
                                        <li><a href="index.html"><img src="public/assets/images/icons/card-4.png"
                                                    alt=""></a></li>
                                        <li><a href="index.html"><img src="public/assets/images/icons/card-6.png"
                                                    alt=""></a></li>
                                    </ul>
                                    <div class="copyright">
                                        <p>Copyright &copy; 2024 <a href="index.html">RabbiRoots</a>, Inc. All Rights
                                            Reserved</p>
                                    </div>
                                    <ul class="social-links">
                                        <li><a href="index.html"><i class="icon-13"></i></a></li>
                                        <li><a href="index.html"><i class="icon-14"></i></a></li>
                                        <li><a href="index.html"><i class="icon-15"></i></a></li>
                                        <li><a href="index.html"><i class="icon-16"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- main-footer end -->



                    <!--Scroll to top-->
                    <div class="scroll-to-top">
                        <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
                            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
                        </svg>
                    </div>

                </div>


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

    <!-- Mirrored from azim.hostlin.com/Hatbazar/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2024 11:27:23 GMT -->

    <!-- Mirrored from rabbiroots.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 10:24:38 GMT -->

</html>