<?php
session_start();
include 'db_config.php';

// print_r($_SESSION);die;

$login_key = $_SESSION['guesst_login_KEY'];

// Fetch cart items for the logged-in user
$query = "SELECT * FROM cart_master WHERE login_key='$login_key'";
$result = mysqli_query($conn, $query);

$total_cart_items = mysqli_num_rows($result); // Count of items
$total_cart_value = 0; // Total value of cart
$cart_items = [];

while ($row = mysqli_fetch_assoc($result)) {
    $cart_items[] = $row;
    $total_cart_value += $row['total'];
}
?>




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<style>

   

    .bottom-nav {
        background-color: #269c53;
        color: white;
        padding: 10px 0;
    }

    .bottom-nav a {
        color: white;
        font-size: 14px;
        text-align: center;
    }

    .bottom-nav a:hover {
        color: #f8b400;
    }
</style>


<header class="main-header header-style-four" >
    <!-- header-top -->
    <div class="header-top">
        <div class="large-container">
            <div class="top-inner">
                <ul class="info-list">
                    <li><i class="icon-3"></i><a href="contact.php">Live Chat</a></li>
                    <li><i class="icon-27"></i><a href="contact.php">Call Support</a></li>
                </ul>
                <div class="text">
                    <p>Super Value Deals - <span>Save more with coupons 2BD30X</span></p>
                </div>
                <ul class="info-list">
                    <li><i class="icon-38"></i>Fast and Free Shipping all over Europe</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-upper">
        <div class="large-container">
            <div class="upper-inner">
                <figure style="display: flex; align-items: center; padding-bottom: 10px;     margin-left: 20px;">
                    <a href="index.php"><img src="public/assets/images/rabbiroots_1.png" alt="RabbiRoots Logo"
                            style="height: 50px; width: auto; margin-right: 8px;"></a>
                    <figcaption
                        style="font-size: 24px; font-weight: bold; color: #333; font-family: Arial, sans-serif;">
                        <a href="index.php"><img src="public/assets/images/rabbiroots_2.png" alt="RabbiRoots Logo"
                                style="height: 50px; width: auto; margin-right: 8px;"></a>
                    </figcaption>
                </figure>
                <div class="search-area" style="border: 1px solid black;">
                    <!-- Category Dropdown Section with Search Icon -->
                    <div class="category-inner">
                        <div class="select-box">
                            <select class="wide">
                                <option data-display="Select Category">Select Category</option>
                                <option value="1">Fresh Fruits</option>
                                <option value="4">Organic Vegetables</option>
                                <option value="5">Eggs & Protein</option>
                                <option value="6">Chocolate Candy</option>
                                <option value="7">Soft Drinks</option>
                                <option value="8">Milk & Dairy</option>
                                <option value="9">Tea & Coffee</option>
                                <option value="10">Snacks Item</option>
                            </select>
                        </div>
                    </div>
                    <div class="search-box">
                        <form method="post" action="#">
                            <div class="form-group">
                                <input type="search" name="search-field" placeholder="Search Products" required>
                                <button type="submit"><i class="icon-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right-column">
                    <div class="language-picker js-language-picker mr_20" data-trigger-class="btn btn--subtle">
                        <div class="menu-right-content">
                            <div class="currency-box mr_40">
                                <ul class="info-list">
                                    <li><a href="index.php"><i class="icon-5"></i></a></li>
                                    <li><a href="wishlist.php"><i class="icon-6"></i></a></li>

                                    <li class="cart-box">
                                        <a class="shopping-cart shopping-cart-one" href="#" data-bs-toggle="offcanvas"
                                            data-bs-target="offcanvasRight"><i class="icon-7"></i><span></span></a>
                                        <div class="cart-menu cart-menu-one">
                                            <div class="close-icon close-icon-one"><a href="javascript:void(0);"><i
                                                        class="icon-9"></i></a></div>
                                            <div class="cart-products">
                                                <button type="button" class="btn p-0 position-relative header-wishlist">
                                                    <i data-feather="shopping-cart"></i>

                                                    <?php if ($total_cart_items > 0): ?>
                                                        <span
                                                            class="position-absolute top-0 start-100 translate-middle badge">
                                                            <span class="cart-count"><?= $total_cart_items; ?></span>
                                                        </span>
                                                    <?php endif; ?>

                                                </button>
                                                <div class="product">
                                                    <ul class="cart-list">
                                                        <?php

                                                        // Fetch cart items for the logged-in user
                                                        
                                                        $query = "SELECT * FROM cart_master WHERE login_key='$login_key'";
                                                        // echo "".$query;
                                                        $result = mysqli_query($conn, $query);

                                                        $total_cart_items = mysqli_num_rows($result); // Count of items
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $productkey = $row['product_key'];


                                                            ?>
                                                            <li class="product-box-contain">
                                                                <div class="drop-cart">
                                                                    <a href="product-details.php?product_key=<?= $row['product_key']; ?>"
                                                                        class="drop-image">
                                                                        <img src="ADMIN//../uploads/category/706594.png"
                                                                            class="blur-up lazyload" alt="">
                                                                    </a>

                                                                    <div class="drop-contain">
                                                                        <h5><?= givedata($conn, "products", "key_", $productkey, "product_title") ?>
                                                                        </h5>
                                                                        <h6><span><?= $row['qty']; ?> x</span>
                                                                            £<?= $row['rate']; ?>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                                <div class="cart-total">
                                                    <span>Subtotal</span>
                                                    <span class="cart-total-price"><i
                                                            class="fa-solid fa-indian-rupee-sign"></i>0</span>
                                                </div>
                                                <div class="cart-action">
                                                    <a href="cart.php"
                                                        class="theme-btn btn-one text-decoration-none">Views Cart</a>
                                                    <a href="checkout.php"
                                                        class="theme-btn btn-two text-decoration-none">Checkout</a>
                                                </div>
                                            </div>
                                    </li>

                                    <?php
                                        if($_SESSION['tokenID']=="")
                                        {
                                            ?>
                                            <li><a href="login.php"><i class="icon-17"></i>Login</a></li>
                                            <?php
                                        }
                                        else
                                        {
                                            $reg=$_SESSION['tokenID'];
                                            ?>
                                            <li><a><i class="icon-17"></i><?=givedata($conn,"user_master","reg_no",$reg,"name")?></a></li>
                                            <?php
                                        }
                                    ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--sticky Header-->
                <div class="sticky-header">
                    <div class="large-container pt-2 mb-2">
                        <div class="outer-box">
                            <figure style="display: flex; align-items: center; ">
                                <a href="index.php"><img src="public/assets/images/rabbiroots_1.png"
                                        alt="RabbiRoots Logo" style="height: 50px; width: auto; margin-right: 8px;"></a>
                                <figcaption
                                    style="font-size: 24px; font-weight: bold; color: #333; font-family: Arial, sans-serif;">
                                    <a href="index.php"><img src="public/assets/images/rabbiroots_2.png"
                                            alt="RabbiRoots Logo"
                                            style="height: 50px; width: auto; margin-right: 8px;"></a>
                                </figcaption>
                            </figure>
                            <div class="search-area" style="border: 1px solid black;">
                                <!-- Category Dropdown Section with Search Icon -->
                                <div class="category-inner">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Select Category">Select Category</option>
                                            <option value="1">Fresh Fruits</option>
                                            <option value="4">Organic Vegetables</option>
                                            <option value="5">Eggs & Protein</option>
                                            <option value="6">Chocolate Candy</option>
                                            <option value="7">Soft Drinks</option>
                                            <option value="8">Milk & Dairy</option>
                                            <option value="9">Tea & Coffee</option>
                                            <option value="10">Snacks Item</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-box">
                                    <form method="post" action="https://azim.hostlin.com/Hatbazar/shop.php">
                                        <div class="form-group">
                                            <input type="search" name="search-field" placeholder="Search Products"
                                                required>
                                            <button type="submit"><i class="icon-2"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <div class="menu-right-content">
                                <!--<div class="search-box mr_60">-->
                                <!--    <form method="post" action="https://azim.hostlin.com/Hatbazar/index-4.php">-->
                                <!--        <div class="form-group">-->
                                <!--            <input type="search" name="search-field" placeholder="Search Products" required>-->
                                <!--            <button type="submit"><i class="icon-2"></i></button>-->
                                <!--        </div>-->
                                <!--    </form>-->
                                <!--</div>-->


                                <ul class="info-list">
                                    <li><a href="index.php"><i class="icon-5"></i></a></li>
                                    <li><a href="index.php"><i class="icon-6"></i></a></li>

                                    <li class="cart-box">
                                        <a class="shopping-cart shopping-cart-one" href="#" data-bs-toggle="offcanvas"
                                            data-bs-target="offcanvasRight"><i class="icon-7"></i><span>2</span></a>
                                        <div class="cart-menu cart-menu-one">
                                            <div class="close-icon close-icon-one"><a href="javascript:void(0);"><i
                                                        class="icon-9"></i></a></div>
                                            <div class="cart-products">
                                                <div class="product">
                                                    <figure class="image-box"><a href="blog-details.php"><img
                                                                src="public/assets/images/shop/cart-1.png" alt=""></a>
                                                    </figure>
                                                    <h6><a href="ShopDetails.php">Organic Sweet Orange for your family
                                                        </a></h6>
                                                    <span><i class="fa-solid fa-indian-rupee-sign"></i>02.99 <span
                                                            class="quentity">x 1KG</span></span>
                                                    <button type="button" class="remove-btn"><i
                                                            class="icon-9"></i></button>
                                                </div>
                                                <div class="product">
                                                    <figure class="image-box"><a href="blog-details.php"><img
                                                                src="public/assets/images/shop/cart-2.png" alt=""></a>
                                                    </figure>
                                                    <h6><a href="ShopDetails.php">Fresh Raw Beef Steak Isolated From
                                                            Farm</a></h6>
                                                    <span><i class="fa-solid fa-indian-rupee-sign"></i>08.99 <span
                                                            class="quentity">x 1KG</span></span>
                                                    <button type="button" class="remove-btn"><i
                                                            class="icon-9"></i></button>
                                                </div>
                                                <div class="product">
                                                    <figure class="image-box"><a href="blog-details.php"><img
                                                                src="public/assets/images/shop/cart-3.png" alt=""></a>
                                                    </figure>
                                                    <h6><a href="ShopDetails.php">Ripe red grape pink bunch from
                                                            garden</a></h6>
                                                    <span><i class="fa-solid fa-indian-rupee-sign"></i>05.99 <span
                                                            class="quentity">x 1KG</span></span>
                                                    <button type="button" class="remove-btn"><i
                                                            class="icon-9"></i></button>
                                                </div>
                                            </div>
                                            <div class="cart-total">
                                                <span>Subtotal</span>
                                                <span class="cart-total-price"><i
                                                        class="fa-solid fa-indian-rupee-sign"></i>17.97</span>
                                            </div>
                                            <div class="cart-action">
                                                <a href="cart.php" class="theme-btn btn-one">Views Cart</a>
                                                <a href="checkout.php" class="theme-btn btn-two">Checkout</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="login.php"><i class="icon-17"></i>asdasdasdas</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sticky header end -->

</header>


<!-- Bottom Navbar (Visible only on Mobile) -->
<nav class="navbar fixed-bottom d-block d-lg-none bottom-nav">
    <div class="container-fluid d-flex justify-content-around">
        <a href="index.php" class="text-decoration-none">
            <i class="fas fa-home"></i><br> Home
        </a>
        <a href="about.php" class="text-decoration-none">
            <i class="fas fa-info-circle"></i><br> About Us
        </a>
       
        <a href="wishlist.php" class="text-decoration-none">
            <i class="fas fa-heart"></i><br> My Wish
        </a> 

        <a href="cart.php" class="text-decoration-none">
            <i class="fas fa-shopping-cart"></i><br> Cart
        </a>
        <a href="contact.php" class="text-decoration-none">
            <i class="fas fa-search"></i><br> Contact
        </a>
    </div>
</nav>
<!-- End of Bottom Navbar -->


<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo"><a href="index.php"><img src="assets/images/logo.html" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
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