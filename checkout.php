<?php include 'niru_collection.php' ?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.hostlin.com/Hatbazar/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2024 11:27:10 GMT -->

<!-- Mirrored from rabbiroots.com/cart by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 10:24:36 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Rabbiroots - Checkout</title>

    <!-- Fav Icon -->
    <link rel="icon" href="public/assets/images/rabbiroots.ico" type="image/x-icon">




</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper ltr">



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


                <!-- page-title -->
                <section class="page-title centred pt_20 pb_70">
                    <div class="large-container">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </section>
                <!-- page-title end -->


                <!-- checkout-section -->
                <section class="checkout-section pb_80">
                    <form method="post" action="PAY/easebuzz.php?api_name=initiate_payment">
                        <input type="hidden" name="txnid" value="<?=generateRandomCHAR_INT(10)?>">
                        <input type="hidden" name="productinfo" value="Rabbiroots"> 
                        <input type="hidden" name="surl" value="http://localhost/rabbiroot_SIT/paymentDone.php">
                        <input type="hidden" name="furl" value="http://localhost/rabbiroot_SIT/paymentFail.php">
                        <input type="hidden" name="udf1" value="<?=$_SESSION['OID']?>">
                    <div class="large-container">
                        <div class="sec-title centred pb_30">
                            <h2>Checkout</h2>
                        </div>
                        <div class="inner-container">
                            <div class="row clearfix">
                                <div class="col-lg-8 col-md-12 col-sm-12 billing-column">
                                    <div class="billing-content mr_30">
                                        <h3>Billing Details</h3>
                                        <div class="form-inner">
                                          
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 field-column">
                                                        <div class="form-group">
                                                            <label>Full Name<span>*</span></label>
                                                            <input type="text" value="<?=givedata($conn,"user_master","reg_no",$_SESSION['tokenID'],"name")?>"  name="firstname">
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                                        <div class="form-group">
                                                            <label>Email Address<span>*</span></label>
                                                            <input type="email" value="<?=givedata($conn,"user_master","reg_no",$_SESSION['tokenID'],"email")?>" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                                        <div class="form-group">
                                                            <label>Phone Number<span>*</span></label>
                                                            <input type="text" value="<?=givedata($conn,"user_master","reg_no",$_SESSION['tokenID'],"mobile_no")?>" name="phone">
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-lg-12 col-md-12 col-sm-12 field-column">
                                                        <div class="form-group">
                                                            <label>Address<span>*</span></label>
                                                            <input type="text" value="<?=givedata($conn,"address_master","user_token_id",$_SESSION['tokenID'],"address")?>" name="address">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                                        <div class="form-group">
                                                            <label>Town / City<span>*</span></label>
                                                            <input type="text" value="<?=givedata($conn,"address_master","user_token_id",$_SESSION['tokenID'],"city")?>" name="city">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                                        <div class="form-group">
                                                            <label>Postcode / ZIP<span>*</span></label>
                                                            <input type="text" value="<?=givedata($conn,"address_master","user_token_id",$_SESSION['tokenID'],"pincode")?>" name="zip">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 order-column">
                                    <div class="order-box">
                                        <h3>Order Summary</h3>
                                        <div class="order-info">
                                            <div class="title-box">
                                                <span class="text">Product</span>
                                                <span class="text">total</span>
                                            </div>
                                            <div class="order-product">

                                            <?php
                                            $guest_key=$_SESSION['tokenID'];
                                            $oid=$_SESSION['OID'];

										   $sql = "SELECT * FROM cart_master where login_key='$guest_key' AND flag='0'";
										   $result = mysqli_query($conn, $sql);
										   while($row = mysqli_fetch_assoc($result)) {
												   $timepstamp=$row['timestamp'];
													$timepstamp=date_create("".$timepstamp);
                                                    $product_key=$row['product_key'];
                                                    $subtotal=$subtotal+$row['total'];
			                                        ?>
                                                     <div class="single-item">
                                                    <div class="product-box">
                                                        <figure class="image-box"><img
                                                                src="ADMIN//<?=givedata($conn,"products","p_key",$product_key,"filepath")?>" alt="">
                                                        </figure>
                                                        <h6><?=givedata($conn,"products","p_key",$product_key,"product_title")?></h6>
                                                    </div>
                                                    <h4>Rs. <?=$row['total']?></h4>
                                                </div>

                                                <?php
                                           }
                                           ?>
                                            
                                            </div>
                                            <ul class="cost-box">
                                                <li>
                                                    <h4><span>Subtotal</span></h4>
                                                    <h4>Rs. <?=givedata($conn,"order_master","order_id",$oid,"total")?></h4>
                                                </li>
                                                <li>
                                                    <h4><span>Free Shipping</span></h4>
                                                    <h4><span>Rs. 0</span></h4>
                                                </li>
                                            </ul>
                                            <div class="total-box">
                                                <h4><span>Total</span></h4>
                                                <h4>Rs. <?=givedata($conn,"order_master","order_id",$oid,"total")?></h4>
                                                <?php
                                                $aamt=givedata($conn,"order_master","order_id",$oid,"total");
                    $amt=number_format( (float) $aamt, 2, '.', '');
                                                ?>
                                                <input type="text" name="amount" value="<?=$amt?>">
                                            </div>
                                            <div class="payment-option">
                                              
                                                <ul class="other-payment">
                                                    
                                                    <li>
                                                        <div class="check-box mb_12">
                                                            <input class="check" type="radio" id="checkbox5"
                                                                name="same">
                                                            <label for="checkbox5">Credit/Debit Cards or Paypal</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="text-box pt_10">
                                                    <p>By completing your purchase your agree to these terms of service.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="btn-box pt_40">
                                                <button type="submit" class="theme-btn btn-one">Make Payment</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                        </form>
                </section>
                <!-- checkout-section end -->


                <!-- cta-style-two -->
                <section class="cta-style-two centred pb_120">
                    <div class="large-container">
                        <div class="inner-container">
                            <div class="pattern-layer"
                                style="background-image: url(public/assets/images/shape/shape-10.png);"></div>
                            <div class="image-layer">
                                <figure class="image p_absolute t_0 l_25" data-parallax='{"x": -100}'><img
                                        src="public/assets/images/resource/cta-3.png" alt=""></figure>
                                <figure class="image p_absolute t_0 r_25" data-parallax='{"x": 100}'><img
                                        src="public/assets/images/resource/cta-4.png" alt=""></figure>
                            </div>
                            <div class="content-box p_relative z_1">
                                <h2>Super Discount on First Purchase</h2>
                                <a href="shop.php" class="theme-btn btn-one">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- cta-style-two end -->

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


                <!-- main-footer -->
                <?php include 'footer.php'; ?>
                <!-- main-footer end -->

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

        <!-- Mirrored from azim.hostlin.com/Hatbazar/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2024 11:27:12 GMT -->

        <!-- Mirrored from rabbiroots.com/cart by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 10:24:37 GMT -->

</html>