<?php

include 'niru_collection.php';
$pid=$_GET['i'];

?>
<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Rabbiroots - Shop-Details</title>

    <!-- Fav Icon -->
    <link rel="icon" href="public/assets/images/rabbiroots.ico" type="image/x-icon">

</head>



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





            <div class="boxed_wrapper ltr">

                <!-- shop-details -->
                <section class="shop-details pb_70">
                    <div class="large-container pt-5">
                        <div class="product-details-content mb_50">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="bxslider">
                                        <div class="slider-content">
                                            <div class="image-inner">
                                                <!-- Main Large Image -->
                                                <div class="image-box">
                                                    <figure class="image">
                                                        <img id="mainImage" style="height:500px;" 
                                                            src="ADMIN//<?=givedata($conn,"products","p_key",$pid,"filepath")?>"
                                                            alt="Main Image">
                                                    </figure>
                                                </div>

                                                <!-- Thumbnails -->
                                                <div class="slider-pager">
                                                    <ul class="thumb-box clearfix">
                                                        <li>
                                                            <!-- Link to change the big image -->
                                                            <a href="ADMIN//<?=givedata($conn,"products","p_key",$pid,"filepath")?>"
                                                                onclick="document.getElementById('mainImage').src=this.href; return false;">
                                                                <figure>
                                                                    <img style="height:150px;" src="ADMIN//<?=givedata($conn,"products","p_key",$pid,"filepath")?>"
                                                            
                                                                        alt="Thumbnail 1">
                                                                </figure>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="ADMIN//<?=givedata($conn,"products","p_key",$pid,"filepath_1")?>"
                                                                onclick="document.getElementById('mainImage').src=this.href; return false;">
                                                                <figure>
                                                                    <img style="height:150px;" src="ADMIN//<?=givedata($conn,"products","p_key",$pid,"filepath_1")?>"
                                                                        alt="Thumbnail 2">
                                                                </figure>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="ADMIN//<?=givedata($conn,"products","p_key",$pid,"filepath_2")?>"
                                                                onclick="document.getElementById('mainImage').src=this.href; return false;">
                                                                <figure>
                                                                    <img style="height:150px;" src="ADMIN//<?=givedata($conn,"products","p_key",$pid,"filepath_2")?>"
                                                                        alt="Thumbnail 3">
                                                                </figure>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="ADMIN//<?=givedata($conn,"products","p_key",$pid,"filepath_3")?>"
                                                                onclick="document.getElementById('mainImage').src=this.href; return false;">
                                                                <figure>
                                                                    <img style="height:150px;" src="ADMIN//<?=givedata($conn,"products","p_key",$pid,"filepath_3")?>"
                                                                        alt="Thumbnail 4">
                                                                </figure>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!--<div class="slider-content">-->
                                        <!--    <div class="image-inner">-->
                                        <!--        <div class="image-box">-->
                                        <!--            <figure class="image"><a href="https://rabbiroots.com//public/assets/images/shop/shop-details-2.png" class="lightbox-image" data-fancybox="gallery"><img src="https://rabbiroots.com//public/assets/images/shop/shop-details-2.png" alt=""></a></figure>-->
                                        <!--        </div>-->
                                        <!--        <div class="slider-pager">-->
                                        <!--            <ul class="thumb-box clearfix">-->
                                        <!--                <li>-->
                                        <!--                    <a class="active" data-slide-index="0" href="#"><figure><img src="https://rabbiroots.com//public/assets/images/shop/thumb-1.png" alt=""></figure></a>-->
                                        <!--                </li>-->
                                        <!--                <li>-->
                                        <!--                    <a data-slide-index="1" href="#"><figure><img src="https://rabbiroots.com//public/assets/images/shop/thumb-2.png" alt=""></figure></a>-->
                                        <!--                </li>-->
                                        <!--                <li>-->
                                        <!--                    <a data-slide-index="2" href="#"><figure><img src="https://rabbiroots.com//public/assets/images/shop/thumb-3.png" alt=""></figure></a>-->
                                        <!--                </li>-->
                                        <!--                <li>-->
                                        <!--                    <a data-slide-index="3" href="#"><figure><img src="https://rabbiroots.com//public/assets/images/shop/thumb-4.png" alt=""></figure></a>-->
                                        <!--                </li>-->
                                        <!--            </ul>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="slider-content">-->
                                        <!--    <div class="image-inner">-->
                                        <!--        <div class="image-box">-->
                                        <!--            <figure class="image"><a href="https://rabbiroots.com//public/assets/images/shop/shop-details-3.png" class="lightbox-image" data-fancybox="gallery"><img src="https://rabbiroots.com//public/assets/images/shop/shop-details-3.png" alt=""></a></figure>-->
                                        <!--        </div>-->
                                        <!--        <div class="slider-pager">-->
                                        <!--            <ul class="thumb-box clearfix">-->
                                        <!--                <li>-->
                                        <!--                    <a class="active" data-slide-index="0" href="#"><figure><img src="https://rabbiroots.com//public/assets/images/shop/thumb-1.png" alt=""></figure></a>-->
                                        <!--                </li>-->
                                        <!--                <li>-->
                                        <!--                    <a data-slide-index="1" href="#"><figure><img src="https://rabbiroots.com//public/assets/images/shop/thumb-2.png" alt=""></figure></a>-->
                                        <!--                </li>-->
                                        <!--                <li>-->
                                        <!--                    <a data-slide-index="2" href="#"><figure><img src="https://rabbiroots.com//public/assets/images/shop/thumb-3.png" alt=""></figure></a>-->
                                        <!--                </li>-->
                                        <!--                <li>-->
                                        <!--                    <a data-slide-index="3" href="#"><figure><img src="https://rabbiroots.com//public/assets/images/shop/thumb-4.png" alt=""></figure></a>-->
                                        <!--                </li>-->
                                        <!--            </ul>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="slider-content">-->
                                        <!--    <div class="image-inner">-->
                                        <!--        <div class="image-box">-->
                                        <!--            <figure class="image"><a href="https://rabbiroots.com//public/assets/images/shop/shop-details-4.png" class="lightbox-image" data-fancybox="gallery"><img src="https://rabbiroots.com//public/assets/images/shop/shop-details-4.png" alt=""></a></figure>-->
                                        <!--        </div>-->
                                        <!--        <div class="slider-pager">-->
                                        <!--            <ul class="thumb-box clearfix">-->
                                        <!--                <li>-->
                                        <!--                    <a class="active" data-slide-index="0" href="#"><figure><img src="https://rabbiroots.com//public/assets/images/shop/thumb-1.png" alt=""></figure></a>-->
                                        <!--                </li>-->
                                        <!--                <li>-->
                                        <!--                    <a data-slide-index="1" href="#"><figure><img src="https://rabbiroots.com//public/assets/images/shop/thumb-2.png" alt=""></figure></a>-->
                                        <!--                </li>-->
                                        <!--                <li>-->
                                        <!--                    <a data-slide-index="2" href="#"><figure><img src="https://rabbiroots.com//public/assets/images/shop/thumb-3.png" alt=""></figure></a>-->
                                        <!--                </li>-->
                                        <!--                <li>-->
                                        <!--                    <a data-slide-index="3" href="#"><figure><img src="https://rabbiroots.com//public/assets/images/shop/thumb-4.png" alt=""></figure></a>-->
                                        <!--                </li>-->
                                        <!--            </ul>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content-box ml_20">
                                        <h2 style="font-size: 25px;"><?=givedata($conn,"products","p_key",$pid,"product_title")?></h2>
                                        <p><?=givedata($conn,"products","p_key",$pid,"description")?></p>
                                        <h3><i class="fa-solid fa-indian-rupee-sign"></i><?=givedata($conn,"products","p_key",$pid,"price")?></h3>
                                        <div class="rating-box">
                                            <span class="product-stock mr_30"><img
                                                    src="public/assets/images/icons/icon-11.png" alt=""> In Stock</span>
                                          
                                        </div>
                                        <ul class="discription-box mb_25 clearfix">
                                            <li><img src="public/assets/images/icons/icon-28.png" alt=""><span>Shipping
                                                    :</span>available for shipping</li>
                                            <li><img src="public/assets/images/icons/icon-29.png" alt=""><span>Delivery
                                                    :</span>delivery from store</li>
                                            <li><img src="public/assets/images/icons/icon-30.png" alt=""><span>Pickup
                                                    :</span>ready for pickup when you order</li>
                                        </ul>
                                        <div class="addto-cart-box mb_45">
                                            
                                            <div class="cart-btn mt_30">
                                            <?php
                                                                            $avlKey = givedataMulti($conn, "cart_master", " product_key='$pid' AND login_key='$_SESSION[tokenID]'", "id");
                                                                            if ($avlKey != "") {
                                                                                ?>
                                                                            <button onclick="add_to_cart(`<?= $pid ?>`)" id="<?= $pid ?>"
                                                                                style="background-color: #212529 !important;" class="btn btn-md bg-dark cart-button text-white w-100">Go To Cart</button>
                                                                            <?php
                                                                            } else {
                                                                                ?>
                                                                            <button onclick="add_to_cart(`<?= $pid ?>`)" id="<?= $pid ?>" type="button"
                                                                                class="theme-btn btn-one">Add To Cart</button>
                                                                        
                                                                            <?php
                                                                            } ?>
                                            
                                          </div>
                                        </div>
                                       
                                        <ul class="product-info clearfix mb_30">
                                            <?php
                                            $cat_id=givedata($conn,"products","p_key",$pid,"category_id");
                                            ?>
                                            <li><strong>Product SKU :</strong>#RABR<?=givedata($conn,"products","p_key",$pid,"id")?></li>
                                            <li><strong>Category :</strong><?=givedata($conn,"category","id",$cat_id,"category_title")?></li>
                                        </ul>
                                        <div class="payment-option mb_30">
                                            <span>Guarantee Safe & Secure Checkout</span>
                                            <ul class="card-list">
                                                <li><a href="#"><img
                                                            src="public/assets/images/icons/card-13.png" alt=""></a>
                                                </li>
                                                <li><a href="#"><img
                                                            src="public/assets/images/icons/card-14.png" alt=""></a>
                                                </li>
                                                <li><a href="#"><img
                                                            src="public/assets/images/icons/card-15.png" alt=""></a>
                                                </li>
                                                <li><a href="#"><img
                                                            src="public/assets/images/icons/card-16.png" alt=""></a>
                                                </li>
                                                <li><a href="#"><img
                                                            src="public/assets/images/icons/card-17.png" alt=""></a>
                                                </li>
                                                <li><a href="#"><img
                                                            src="public/assets/images/icons/card-18.png" alt=""></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="other-option clearfix">
                                           
                                            <li class="social-links"><strong>Share :</strong><a
                                                    href="#"><i class="icon-13"></i></a><a
                                                    href="#"><i class="icon-14"></i></a><a
                                                    href="#"><i class="icon-15"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-discription">
                            <div class="tabs-box">
                                <div class="tab-btn-box">
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li class="tab-btn active-btn" data-tab="#tab-1">Description</li>
                                     
                                    </ul>
                                </div>
                                <div class="tabs-content">
                                    <div class="tab active-tab" id="tab-1">
                                        <div class="discription-content pt_45">
                                            <?=givedata($conn,"products","p_key",$pid,"description_details")?>
                                          
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- shop-details end -->
                <input type="hidden" name="guesst_login_KEY" id="guesst_login_KEY"
                value="<?= $_SESSION['tokenID'] ?>">



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
            <script>
    
    function add_to_cart(id) {
        var pID = id;
        var guesst_login_KEY = document.getElementById("guesst_login_KEY").value;
        var jj=document.getElementById(id).innerHTML;

        if(guesst_login_KEY==""){
            alert("Please Login First");
            window.location.href = 'login.php';
        }
        
        if(jj==="Go To Cart")
        {
            window.location.href = 'cart.php';

        }else{
                    $.ajax({
            type: "POST",
            url: "add_to_cart.php",
            data: ({ product_key: pID, login_key: guesst_login_KEY }), // Serialize form data
            success: function (data) {
                console.log('my message' + data);
                let mydata = data.split("__AJAX-");
                var word = "" + mydata[1];
                console.log('my message' + word);
                let ans = "" + word.localeCompare("Done");
                if (ans == 0) {
                  
                REFRESHCART();
                document.getElementById(id).innerHTML ="Go To Cart" ;
               
                document.getElementById(id).style.backgroundColor  = "#212529";

                   // getCartDeatils(guesst_login_KEY);
                    //document.getElementById("reg_div").style.display = "none";
                    // document.getElementById("otp_div").style.display = "block";


                } else {
                    alert("0")
                }
            },
            error: function (data) {
                alert("Error occurred while submitting the form");
            }
        });
    }

    }

    function REFRESHCART(){

        $.ajax({
            type: "POST",
            url: "getCartDetails.php",
            data: ({  }), // Serialize form data
            success: function (data) {
                console.log('my message' + data);
                let mydata = data.split("__AJAX-");
              
                document.getElementById("cartDetails_DIV").innerHTML =mydata[1] ;

             
            },
            error: function (data) {
                alert("Error occurred while submitting the form");
            }
        });

    }



</script>

    </body><!-- End of .page_wrapper -->

 

</html>