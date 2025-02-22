
<?php include 'niru_collection.php';
$login_key = $_SESSION['tokenID'];

?>


<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Rabbiroots - Cart</title>

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">




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
                    <li>Cart</li>
                </ul>
            </div>
        </section>
        <!-- page-title end -->


        <!-- cart section -->
        <section class="cart-section pb_80">
            <div class="large-container">
                <div class="sec-title centred pb_40">
                    <h2>Your Cart</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                        <div class="table-outer mb_30">
                            <table class="cart-table">
                                <thead class="cart-header">
                                    <tr>
                                        <th>Product Description</th>
                                        <th>quantity</th>
                                        <th>price</th>
                                        <th>available</th>
                                        <th>total</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
    $subtotal=0;
                                $query = "SELECT * FROM cart_master WHERE login_key='$login_key'";
                                $result = mysqli_query($conn, $query);

                                $total_cart_items = mysqli_num_rows($result); // Count of items
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $productkey = $row['product_key'];

                                    $subtotal=$subtotal+$row['total'];
                                    ?>
                                    <tr>
                                        <td class="product-column">
                                            <div class="product-box">
                                                <figure class="image-box"><img src="ADMIN//<?=givedata($conn,"products","p_key",$productkey,"filepath")?>"
                                                        alt=""></figure>
                                                <h6><a href="ShopDetails.php"><?=givedata($conn,"products","p_key",$productkey,"product_title")?></a></h6>
                                            </div>
                                        </td>
                                        <td class="qty">
                                            <div class="item-quantity">
                                                <input class="quantity-spinner" type="text" value="<?= $row['qty']?>" name="quantity">
                                            </div>
                                        </td>
                                        <td><i class="fa-solid fa-indian-rupee-sign"></i> <?= $row['rate']?></td>
                                        <td><span class="product-stock"><img src="assets/images/icons/icon-11.png"
                                                    alt=""> In Stock</span></td>
                                        <td><i class="fa-solid fa-indian-rupee-sign"></i> <?= $row['total']?></td>
                                        <td><button class="cancel-btn"><i class="icon-9"></i></button></td>
                                    </tr>

                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 sidebar-side">
                        <div class="total-cart">
                            <h3>Order Summary</h3>
   
                           
                            <div class="total-box">
                                <h4>Total</h4>
                                <input type="hidden" id="subtotal" value="<?=$subtotal?>">
                                <h5><i class="fa-solid fa-indian-rupee-sign"></i> <?=$subtotal?></h5>
                            </div>
                            <div class="shipping-address mb_30">
                                <h4 class="mb_16">Address</h4>
                                <div class="single-item">
                                    <div class="icon-box"><i class="icon-50"></i></div>
                                    <span>Address</span>
                                    <p><?=givedata($conn,"address_master","user_token_id",$login_key,"address")?>,<?=givedata($conn,"address_master","user_token_id",$login_key,"pincode")?></p>
                                </div>
                               
                            </div>
                            <div class="payment-option pb_30">
                                <h4 class="mb_17">Payment method</h4>
                                <ul class="card-list clearfix">
                                    <li><a href="cart.php"><img src="assets/images/icons/card-13.png" alt=""></a></li>
                                    <li><a href="cart.php"><img src="assets/images/icons/card-14.png" alt=""></a></li>
                                    <li><a href="cart.php"><img src="assets/images/icons/card-15.png" alt=""></a></li>
                                    <li><a href="cart.php"><img src="assets/images/icons/card-16.png" alt=""></a></li>
                                    <li><a href="cart.php"><img src="assets/images/icons/card-17.png" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="btn-box">
                                <button class="theme-btn btn-one" type="button" onclick="proccess_Continue()">Proceed to Checkout</button>
                            </div>
                            <div class="more-text">
                                <p>Estimated Delivery by <span>16 June, 2024</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart section end -->

        


      

        
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
    
    function proccess_Continue(){
        var subTot= document.getElementById("subtotal").value ;
        

        $.ajax({
            type: "POST",
            url: "process_TO.php",
            data: ({ subTot: subTot }), // Serialize form data
            success: function (data) {
                console.log('my message' + data);
                let mydata = data.split("__AJAX-");
                var word = "" + mydata[1];
                let ans = "" + word.localeCompare("Done ");
                if (ans == 0) {
               
                    
                    window.location.href='checkout.php';
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

</script>

       

</body><!-- End of .page_wrapper -->

</html>
