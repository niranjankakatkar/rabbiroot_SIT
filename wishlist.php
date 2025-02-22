<?php include 'niru_collection.php';



if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	
	
}

?> 



<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">

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




<body>


<?php include 'header.php';?> 


    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain" style="text-align: center">
                        <h2>Wishlist</h2>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Wishlist Section Start -->
    <section class="wishlist-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-sm-3 g-2">

                <?php
                 $guest_key = $_SESSION['guesst_login_KEY'];
                 $srid = "";
                    $sql = "SELECT * FROM wishlist where token_key='$_SESSION[guesst_login_KEY]'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $srid = "1";
                ?>
                   <div class="col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain">
                    <div class="product-box-3 h-100">
                        <div class="product-header">
                            <div class="product-image">
                                <a href="ProductDetails.php">
                                    <img src="../assets/images/cake/product/3.png" class="img-fluid blur-up lazyload"
                                        alt="">
                                </a>

                                <div class="product-header-top">
                                    <button class="btn wishlist-button close_button">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="product-footer">
                            <div class="product-detail">
                                <span class="span-name">Vegetable</span>
                                <a href="">
                                    <h5 class="name">Peanut Butter Bite Premium Butter Cookies 600 g</h5>
                                </a>
                                <h6 class="unit mt-1">350 G</h6>
                                <h5 class="price">
                                    <span class="theme-color">$04.33</span>
                                    <del>$10.36</del>
                                </h5>

                                <div class="add-to-cart-box bg-white mt-2">
                                    <button class="btn btn-add-cart addcart-button">Add
                                        <span class="add-icon bg-light-gray">
                                            <i class="fa-solid fa-plus"></i>
                                        </span>
                                    </button>
                                    <div class="cart_qty qty-box">
                                        <div class="input-group bg-white">
                                            <button type="button" class="qty-left-minus bg-gray" data-type="minus"
                                                data-field="">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <button type="button" class="qty-right-plus bg-gray" data-type="plus"
                                                data-field="">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    }
                    if ($srid == "") {
                        ?>
                        <div
                            style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 80vh; text-align: center;">
                            <img src="assets/images/wishlist.jpg" class="img-fluid blur-up lazyload"
                                style="max-width: 200px; width: 100%; height: auto; margin-bottom: 15px;" />
                            <p style="font-size: 16px; color: #555; margin-bottom: 5px;">Your wishlist is empty!</p>
                            <p style="font-size: 10px; color: #555; margin-bottom: 5px;">Add items to it now.</p>
                            <button onclick="window.location.href='index.php'"
                                style="padding: 10px 20px; border-radius: 5px; background-color: #4caf50; color: white; border: 1px solid #062d6a; cursor: pointer;">
                                Shop now
                            </button>
                        </div>

                        <?php
                    }
                    ?>
                

             

            </div>
        </div>
    </section>
    <!-- Wishlist Section End -->

    <!-- Footer Section Start -->
    <?php include 'footer.php';?> 
    <!-- Footer Section End -->

    <!-- Location Modal Start -->
    <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
                    <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="location-list">
                        <div class="search-input">
                            <input type="search" class="form-control" placeholder="Search Your Area">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <div class="disabled-box">
                            <h6>Select a Location</h6>
                        </div>

                        <ul class="location-select custom-height">
                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Alabama</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Arizona</h6>
                                    <span>Min: $150</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>California</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Colorado</h6>
                                    <span>Min: $140</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Florida</h6>
                                    <span>Min: $160</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Georgia</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Kansas</h6>
                                    <span>Min: $170</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Minnesota</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>New York</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Washington</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location Modal End -->

    <!-- Deal Box Modal Start -->
    <div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                        <p class="mt-1 text-content">Recommended deals for you.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="deal-offer-box">
                        <ul class="deal-offer-list">
                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="#" class="deal-image">
                                        <img src="../assets/images/vegetable/product/10.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="#" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-2">
                                <div class="deal-offer-contain">
                                    <a href="#" class="deal-image">
                                        <img src="../assets/images/vegetable/product/11.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="#" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-3">
                                <div class="deal-offer-contain">
                                    <a href="#" class="deal-image">
                                        <img src="../assets/images/vegetable/product/12.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="#" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="#" class="deal-image">
                                        <img src="../assets/images/vegetable/product/13.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="#" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Box Modal End -->

    <!-- Tap to top and theme setting button start -->
    <!-- <div class="theme-option">
        <div class="setting-box">
            <button class="btn setting-button">
                <i class="fa-solid fa-gear"></i>
            </button> -->

            <!-- <div class="theme-setting-2">
                <div class="theme-box">
                    <ul>
                        <li>
                            <div class="setting-name">
                                <h4>Color</h4>
                            </div>
                            <div class="theme-setting-button color-picker">
                                <form class="form-control">
                                    <label for="colorPick" class="form-label mb-0">Theme Color</label>
                                    <input type="color" class="form-control form-control-color" id="colorPick"
                                        value="#0da487" title="Choose your color">
                                </form>
                            </div>
                        </li>

                        <li>
                            <div class="setting-name">
                                <h4>Dark</h4>
                            </div>
                            <div class="theme-setting-button">
                                <button class="btn btn-2 outline" id="darkButton">Dark</button>
                                <button class="btn btn-2 unline" id="lightButton">Light</button>
                            </div>
                        </li>

                        <li>
                            <div class="setting-name">
                                <h4>RTL</h4>
                            </div>
                            <div class="theme-setting-button rtl">
                                <button class="btn btn-2 rtl-unline">LTR</button>
                                <button class="btn btn-2 rtl-outline">RTL</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>

        <!-- <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div> -->
    <!-- Tap to top and theme setting button end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->



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

 
</body>


</html>