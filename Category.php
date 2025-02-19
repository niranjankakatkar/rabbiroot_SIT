
 

<?php

include 'niru_collection.php';

$cat_id_= $_GET['i'];

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.hostlin.com/Hatbazar/https://rabbiroots.com/shop by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2024 11:27:02 GMT -->

<!-- Mirrored from rabbiroots.com/shop by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 10:24:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>RabbiRoots - Categories</title>


<!-- Fav Icon -->
<link rel="icon" href="public/assets/images/rabbiroots.ico" type="image/x-icon">






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


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper ltr">


   

        <!-- main header -->
        <?php include 'header.php'; ?>
        <!-- End header Menu -->
        
    
        
        
      
    <div class="boxed_wrapper ltr">


        <!-- shop-page-section -->
        <section class="shop-page-section pb_80">
            <div class="large-container pt-5">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                        <div class="shop-sidebar ml_20">
                            <div class="search-widget sidebar-widget mb_40">
                                <form method="post" action="https://azim.hostlin.com/Hatbazar/https://rabbiroots.com/shop">
                                    <div class="form-group">
                                        <input type="search" name="search-field" placeholder="Search By Category" required>
                                        <button type="submit"><i class="icon-2"></i></button>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="category-widget sidebar-widget mb_40">
                                <div class="widget-title pb_9 mb_25">
                                    <h4>Filter by Categories</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                    <?php
                                    $sql = "SELECT * FROM category where flag='1' ORDER BY id DESC";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $cat_id= $row["id"];
                                        ?>
                                        <li>
                                            <div class="check-box" onclick="window.location.href='Category.php?i=<?=$cat_id?>'">
                                                <label  for="checkbox1"><?= $row['category_title'] ?> <span>(<?=retrivecount($conn,"products"," where category_id='$cat_id'")?>)</span></label>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                      
                                    </ul>
                                   
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                        <div class="our-shop">
                            <div class="item-shorting mb_50">
                                <div class="left-column">
                                    <div class="text"><p>Showing: <span> Produuct results</span></p></div>
                                </div>
                                <div class="right-column">
                                    
                                  
                                </div>
                            </div>
                            <div class="wrapper grid">
                                <div class="shop-grid-content">
                                    <div class="inner-container clearfix">

                                    <?php
                                      $sql ='';
                                    if($cat_id_==''){
                                        $sql = "SELECT * FROM products where flag='1' ORDER BY id DESC LIMIT 10";
                                    }else{
                                        $sql = "SELECT * FROM products where flag='1' AND category_id='$cat_id_' ORDER BY id DESC";
                                    }
                                   
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $cat_id= $row["id"];
                                        ?>
                                        <div class="shop-block-one">
                                            <div class="inner-box border-bottom border-right">
                                                <div class="image-box">
                                                    <ul class="option-list t_20 r_20">
                                                        <li><a href="ADMIN//<?=$row['filepath']?>" class="lightbox-image" data-fancybox="gallery"><i class="far fa-eye"></i></a></li>
                                                    
                                                    </ul>
                                                    <figure class="image"><img  src="ADMIN//<?=$row['filepath']?>" alt=""></figure>
                                                </div>
                                                <div class="lower-content pl_30 pr_20">
                                                    <span class="text"><?=givedata($conn,"category","id",$row['category_id'],"category_title")?></span>
                                                    <h4><a href="itemDetails.php?i=<?=$row['p_key']?>"><?=$row['product_title']?></a></h4>
                                                    <h5><i class="fa-solid fa-indian-rupee-sign"></i><?=$row['price']?></h5>
                                                   
                                                    <span class="product-stock"><img src="public/assets/images/icons/icon-11.png" alt=""> In Stock</span>
                                                   <br>
                                                   
                                                                        <?php
                                                                            $avlKey = givedataMulti($conn, "cart_master", " product_key='$row[p_key]' AND login_key='$_SESSION[tokenID]'", "id");
                                                                            if ($avlKey != "") {
                                                                                ?>
                                                                            <button onclick="add_to_cart(`<?= $row['p_key'] ?>`)" id="<?= $row['p_key'] ?>"
                                                                                style="background-color: #212529 !important;" class="btn btn-md bg-dark cart-button text-white w-100">Go To Cart</button>
                                                                            <?php
                                                                            } else {
                                                                                ?>
                                                                            <button onclick="add_to_cart(`<?= $row['p_key'] ?>`)" id="<?= $row['p_key'] ?>" type="button"
                                                                                class="theme-btn btn-one">Add To Cart</button>
                                                                        
                                                                            <?php
                                                                            } ?>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                    ?>
                                        
                                    </div>
                                 
                                </div>
                               
                            </div>
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- shop-page-section end -->


        <input type="hidden" name="guesst_login_KEY" id="guesst_login_KEY"
        value="<?= $_SESSION['tokenID'] ?>">


        
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

<!-- Mirrored from azim.hostlin.com/Hatbazar/https://rabbiroots.com/shop by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2024 11:27:09 GMT -->

<!-- Mirrored from rabbiroots.com/shop by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 10:25:06 GMT -->
</html>
