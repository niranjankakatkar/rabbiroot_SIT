
<?php 

								
include 'niru_collection.php';


   
//echo "__AJAX-";
if($_SERVER['REQUEST_METHOD'] === 'POST') {
$username=$_POST['email'];
$password=$_POST['password'];

$token_key=givedataMulti($conn,"user_master"," email='$username' AND password='$password'","reg_no");
$flag=givedata($conn,"user_master","reg_no",$token_key,"active_flag");
if($flag!="")
{
    ?>

    <?php 
	if($flag==1)
	{  
		$_SESSION['tokenID']=$token_key;
        echo "<script>alert('User Login Successfully.');</script>";
        ?>
        <script>window.location.href = 'index.php';</script>
        <?php
	}else{  
		echo "Done-1"; 
		 }
	
}else{
	
    echo "<script>alert('Fail to Login. Please try again later.');</script>";
	
}	
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">




</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper ltr">
 
       <!-- main header start -->
         <?php include 'header.php'; ?>

        <!-- End header -->
        
    
        
        
      
    <div class="boxed_wrapper ltr">


        <!-- sign-section -->
        <section class="sign-section pb_80 pt_20">
            <div class="large-container">
                <div class="sec-title centred pb_30">
                    <h3>Log in</h3>
                </div>
                <div class="form-inner">
                    <form autocomplete="off" method="post" accept-charset="utf-8">
                        <div class="form-group">
                            <label>Email <span style="color: red;">*</span></label>
                            <input type="email" id="email"name="email" placeholder="Enter your Email" required>
                        </div>
                        <!-- Password -->
                <div class="form-group" style="position: relative;">
                  <label for="password">Password <span style="color: red;">*</span></label>
                   <input type="password" id="password" name="password" placeholder="Enter your Password"  required >
                   <!-- Eye Icon -->
                   <span 
                    id="togglePassword" 
                    style="position: absolute; top: 70%; right: 10px; transform: translateY(-50%); cursor: pointer; color: #666; font-size: 18px;">
                    <i class="fa fa-eye" id="toggleIcon"></i>
                   </span>
                </div>
                <div class="other-option">
                        <div class="check-box-two">
                            <input class="check" type="checkbox" id="checkbox1">
                            <label for="checkbox1">Remember me</label>
                        </div>
                        <a href="forgot_password.php" class="forgot-password" style="text-decoration: none;">Forget password?</a>

                    </div>

                        <div class="form-group message-btn">
                            <button type="submit" id="submitButton" class="theme-btn btn-one">Sign In</button>
                        </div>
                       
                    </form>
                   
                    <div class="other-log-in" style="text-align: center; margin: 20px 0;">
                <h6 style="margin: 10px 0; font-size: 14px; color: #666;">or</h6>
            </div>

            <div class="sign-up-box" style="text-align: center; margin-top: 20px;">
                <h4 style="margin-bottom: 10px; font-size: 16px; font-weight: bold; color: #333;">Don't  have an account?</h4>
                <a href="sign-up.php" style="color: #007bff; text-decoration: none; font-size: 14px; font-weight: bold;">
                    Sign Up
                </a>
            </div>
                   
                </div>
            </div>
        </section>
        <!-- sign-section end -->



        
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
</script>



</body><!-- End of .page_wrapper -->


</html>
