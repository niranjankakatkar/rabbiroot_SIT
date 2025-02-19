<?php
include 'niru_collection.php';

$user_token_id= $_SESSION['tokenID'];
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the data from the form
    $address = $_POST['address'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];



if($uid=="")
	{
		$sql="INSERT INTO address_master(address,country,city,state,pincode,flag) VALUES('$address','$country','$city','$state','$pincode','$shop_rate','$flag')";
        
		if($conn->query($sql))
		{
		 
		  ?>		  
		 <script>alert("Address Updated Successfully"); window.location.href="user-profile.php"; </script>
		  <?php
		}
	}else{
		$sql="UPDATE address_master set address='$address',country='$country',city='$city',state='$state',pincode='$pincode',flag='$flag' where id='$user_token_id'";
		if($conn->query($sql))
        {
            ?>
			   
		    <?php
        }
	}										
			
}


?>




<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.hostlin.com/Hatbazar/https://rabbiroots.com/ShopDetails by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2024 11:25:39 GMT -->

<!-- Mirrored from rabbiroots.com/ShopDetails by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 10:24:30 GMT -->
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
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar .nav-link {
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            border-radius: 5px;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: #e9ecef;
        }

        .content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .delete-box {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            border-radius: 10px;
            background: #f8f9fa;
            cursor: pointer;
        }

        .delete-box:hover {
            background: #e9ecef;
        }
    </style>

    </head>


    <!-- page wrapper -->

    <body>
        <div class="boxed_wrapper ltr">
            <?php include 'header.php'; ?>





            <div class="boxed_wrapper ltr">

                <div class="container-fluid py-4 ">
                    <div class="row">
                        <!-- Sidebar -->
                        <div class="col-md-3 col-sm-12 mb-3 px-3 px-lg-8">
                            <div class="sidebar">
                                <h4 class="mb-3">My Account</h4>
                                <h5 class="mt-2">Hello,<?= givedata($conn, "user_master", "reg_no", $user_token_id, "name"); ?></h5>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" data-bs-toggle="pill" href="#addresses">
                                            <i class="fas fa-map-marker-alt"></i> My Addresses
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" data-bs-toggle="pill" href="#orders">
                                            <i class="fas fa-shopping-bag"></i> My Orders
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" data-bs-toggle="pill" href="#giftcards">
                                            <i class="fas fa-gift"></i> E-Gift Cards
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark active" data-bs-toggle="pill" href="#privacy">
                                            <i class="fas fa-lock"></i> Account privacy
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-danger" href="logout.php">
                                            <i class="fas fa-sign-out-alt"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Content Area -->
                        <div class="col-md-9 col-sm-12 px-3 ">
                            <div class="content">
                                <div class="tab-content">
                                    <!-- My Addresses Tab Content -->
                                    <div class="tab-pane fade" id="addresses">
                                        <h4>My Addresses</h4>
                                        <!-- Button to add new address -->
                                        <button class="btn btn-primary mb-3" data-bs-toggle="collapse"
                                            data-bs-target="#addAddressForm">Add New Address</button>

                                        <!-- Address Form (visible on clicking "Add New Address") -->
                                        <div class="collapse" id="addAddressForm">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="houseNo" class="form-label">Address</label>
                                                        <input type="text" class="form-control" name="address" id="address" 
                                                            placeholder="Enter Address" required>
                                                    </div>
                                                    
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="pincode" class="form-label">Pincode</label>
                                                        <input type="text" class="form-control" name="pincode" id="pincode" 
                                                            placeholder="Enter Pincode" required>
                                                    </div>
                                                
                                                   
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="city" class="form-label">City</label>
                                                        <input type="text" class="form-control" name="city" id="city"
                                                            placeholder="Enter City" required>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="state" class="form-label">State</label>
                                                        <input type="text" class="form-control" name="state" id="state"
                                                            placeholder="Enter State" required>
                                                    </div>
                                                </div>
                                               
                                                <button type="submit" class="btn btn-success mt-3">Save Address</button>
                                            </form>

                                        </div>

                                        <!-- Existing Addresses List -->
                                        <div id="addressList" class="mt-4">
                                            <div
                                                class="address-item d-flex justify-content-between align-items-center mb-2">
                                                <div class="d-flex align-items-center">
                                                    <!-- Home Icon with Heading -->
                                                    <i class="fa-solid fa-house-circle-exclamation fa-1x me-2"></i>
                                                    <div>
                                                        <h6 class="mb-0">Home</h6>
                                                        <p class="mb-0"><?= givedata($conn, "address_master", "user_token_id", $user_token_id, "address"); ?></p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="btn btn-warning btn-sm" href="add.php?id=<?=$row['user_token_id']?>">Edit</button>
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                </div>
                                            </div>

                                            <div
                                                class="address-item d-flex justify-content-between align-items-center mb-2">
                                                <div class="d-flex align-items-center">
                                                    <!-- Home Icon with Heading -->
                                                    <i class="fa-solid fa-house-circle-exclamation fa-1x me-2"></i>
                                                    <div>
                                                        <h6 class="mb-0 ">Home</h6>
                                                        <p class="mb-0"><?= givedata($conn, "address_master", "user_token_id", $user_token_id, "address"); ?></p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="btn btn-warning btn-sm">Edit</button>
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- My Orders Tab Content -->
                                    <div class="tab-pane fade" id="orders">
                                        <h4>My Orders</h4>
                                        <p class="text-muted">Oops, you haven't placed an order yet.</p>
                                    </div>
                                    <!-- E-Gift Cards Tab Content -->
                                    <div class="tab-pane fade" id="giftcards">
                                        <h4>E-Gift Cards</h4>
                                        <p class="text-muted">You can view and manage your E-Gift Cards here.</p>
                                    </div>
                                    <!-- Account Privacy Tab Content -->
                                    <div class="tab-pane fade show active" id="privacy">
                                            <h4>Account Privacy and Policy</h4>
                                            <p class="text-muted">We, i.e. "Blink Commerce Private Limited", are committed
                                                to protecting the privacy and security of your personal information. Your
                                                privacy is important to us and maintaining your trust is paramount.</p>
                                            <p class="text-muted">This privacy policy explains how we collect, use, process,
                                                and disclose information about you. By using our website/app/platform and
                                                affiliated services, you consent to the terms of our privacy policy
                                                (“Privacy Policy”) in addition to our ‘Terms of Use.’</p>
                                            <p class="text-muted">For clarifications regarding this privacy policy, please
                                                write to us at info@blinkit.com</p>
                                            
                                            <!-- Delete Account Section -->
                                            <div class="delete-box mt-3">
                                                <i class="fas fa-trash-alt fa-2x text-danger"></i>
                                                <div>
                                                    <strong>Request to delete account</strong>
                                                    <p class="text-muted mb-0">Request to closure of your account</p>
                                                </div>
                                                <!-- Delete Account Button -->
                                                <a class="btn btn-danger">Delete My Account</a>
                                                <i class="fas fa-chevron-right ms-auto"></i>
                                            </div>
                                        </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>



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

    <!-- Mirrored from azim.hostlin.com/Hatbazar/https://rabbiroots.com/ShopDetails by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2024 11:25:59 GMT -->

    <!-- Mirrored from rabbiroots.com/ShopDetails by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 10:24:35 GMT -->

</html>