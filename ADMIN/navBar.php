<?php
if($_SESSION['token']=="")
{
  ?>
  <script> window.location.href="../index.php"; </script>
  <?php
}

?>

<!-- Top Bar Start -->
        <div class="topbar d-print-none">
            <div class="container-xxl">
                <nav class="topbar-custom d-flex justify-content-between" id="topbar-custom">    
        

                    <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">                        
                        <li>
                            <button class="nav-link mobile-menu-btn nav-icon" id="togglemenu">
                                <i class="iconoir-menu-scale"></i>
                            </button>
                        </li> 
                        <li class="mx-3 welcome-text">
                            <h3 class="mb-0 fw-bold text-truncate"><?php
    $time = date("H");
    $timezone = date("e");
    if ($time < "12") {
        echo "Good morning";
    } else
    if ($time >= "12" && $time < "17") {
        echo "Good afternoon";
    } else
    if ($time >= "17" && $time < "19") {
        echo "Good evening";
    } else
    if ($time >= "19") {
        echo "Good night";
    }
    ?>,<?=givedata($conn,"admin_login","token",$_SESSION['token'],"name");?>!</h3>
                            <!-- <h6 class="mb-0 fw-normal text-muted text-truncate fs-14">Here's your overview this week.</h6> -->
                        </li>                   
                    </ul>
                    <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                        <li class="hide-phone app-search">
                            <form role="search" action="#" method="get">
                                <input type="search" name="search" class="form-control top-search mb-0" placeholder="Search here...">
                                <button type="submit"><i class="iconoir-search"></i></button>
                            </form>
                        </li>     
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="../assets/images/flags/us_flag.jpg" alt="" class="thumb-sm rounded-circle">
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><img src="../assets/images/flags/us_flag.jpg" alt="" height="15" class="me-2">English</a>
                                 </div>
                        </li><!--end topbar-language-->
        
                        <li class="topbar-item">
                            <a class="nav-link nav-icon" href="javascript:void(0);" id="light-dark-mode">
                                <i class="icofont-moon dark-mode"></i>
                                <i class="icofont-sun light-mode"></i>
                            </a>                    
                        </li>
    
                      
                        <li class="dropdown topbar-item">
                            <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <img src="../assets/images/users/avatar-1.jpg" alt="" class="thumb-lg rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end py-0">
                                <div class="d-flex align-items-center dropdown-item py-2 bg-secondary-subtle">
                                    <div class="flex-shrink-0">
                                        <img src="../assets/images/users/avatar-1.jpg" alt="" class="thumb-md rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                        <h6 class="my-0 fw-medium text-dark fs-13"><?=givedata($conn,"admin_login","token",$_SESSION['token'],"name");?></h6>
                                        <small class="text-muted mb-0">Admin User</small>
                                    </div><!--end media-body-->
                                </div>
                                 <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item text-danger" href="../logout.php"><i class="las la-power-off fs-18 me-1 align-text-bottom"></i> Logout</a>
                            </div>
                        </li>
                    </ul><!--end topbar-nav-->
                </nav>
                <!-- end navbar-->
            </div>
        </div>
        <!-- Top Bar End -->
        <!-- leftbar-tab-menu -->
        <div class="startbar d-print-none">
            <!--start brand-->
            <div class="brand">
                <a href="../Home" class="logo">
                    <span>
					<img src="../../public/assets/images/rabbiroots_1.png" alt="logo-small" class="logo-sm">
                        <img src="../../public/assets/images/rabbiroots_2.png" alt="logo-small" class="logo-sm">
                    </span>
                  
                </a>
            </div>
            <!--end brand-->
            <!--start startbar-menu-->
            <div class="startbar-menu" >
                <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
                    <div class="d-flex align-items-start flex-column w-100">
                        <!-- Navigation -->
                        <ul class="navbar-nav mb-auto w-100">
                            <li class="menu-label pt-0 mt-0">
                                <!-- <small class="label-border">
                                    <div class="border_left hidden-xs"></div>
                                    <div class="border_right"></div>
                                </small> -->
                                <span>Main Menu</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../Home/">
                                    <i class="iconoir-home-simple menu-icon"></i>
                                    <span>Dashboards</span>
                                </a>
                                <!--end startbarDashboards-->
                            </li><!--end nav-item-->
                             <li class="menu-label mt-2">
                                <small class="label-border">
                                    <div class="border_left hidden-xs"></div>
                                    <div class="border_right"></div>
                                </small>
                                <span>Components</span>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="#sidebarCategory" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCategory">
                                    <i class="iconoir-compact-disc menu-icon"></i>
                                    <span>Category's</span>
                                </a>
                                <div class="collapse " id="sidebarCategory">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../Category/">List</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="../Category/add.php">Add New</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end startbarElements-->
                            </li><!--end nav-item-->
							
							<li class="nav-item">
                                <a class="nav-link" href="#sidebarSubCategory" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarSubCategory">
                                    <i class="iconoir-compact-disc menu-icon"></i>
                                    <span>Sub Category's</span>
                                </a>
                                <div class="collapse " id="sidebarSubCategory">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../Subcategory/">List</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="../Subcategory/add.php">Add New</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end startbarElements-->
                            </li><!--end nav-item-->
							
							<li class="nav-item">
                                <a class="nav-link" href="#sidebarProducts" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarProducts">
                                    <i class="iconoir-compact-disc menu-icon"></i>
                                    <span>Product's</span>
                                </a>
                                <div class="collapse " id="sidebarProducts">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../Products/">List</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="../Products/add.php">Add New</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end startbarElements-->
                            </li><!--end nav-item-->
							
							<li class="nav-item">
                                <a class="nav-link" href="#attribute" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="attribute">
                                    <i class="iconoir-report-columns menu-icon"></i>
                                    <span>Attribute</span>
                                </a>
                                <div class="collapse " id="attribute">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../AttributeT/">Attribute Type</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="../AttributeT/add.php">Add New Attribute Type</a>
                                        </li><!--end nav-item-->
										<li class="nav-item">
                                            <a class="nav-link" href="../Attribute/">Attribute List</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="../Attribute/add.php">Add New Attribute</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end startbarElements-->
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#orders" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="orders">
                                    <i class="iconoir-compact-disc menu-icon"></i>
                                    <span>Order</span>
                                </a>
                                <div class="collapse " id="orders">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../Orders/">All Orders</a>
                                        </li><!--end nav-item--> 
                                     <!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end startbarElements-->
                            </li>
                            <!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#users" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="users">
                                    <i class="iconoir-compact-disc menu-icon"></i>
                                    <span>User's</span>
                                </a>
                                <div class="collapse " id="users">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../Users/">All Users</a>
                                        </li><!--end nav-item--> 
                                     <!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end startbarElements-->
                            </li>
                            <!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#contact" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="contact">
                                    <i class="iconoir-compact-disc menu-icon"></i>
                                    <span>Contact Us</span>
                                </a>
                                <div class="collapse " id="contact">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../Contact-Us/">List</a>
                                        </li><!--end nav-item--> 
                                     <!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end startbarElements-->
                            </li>
                            <!--end nav-item-->
                            
                            <li class="menu-label mt-2">
                                <small class="label-border">
                                    <div class="border_left hidden-xs"></div>
                                    <div class="border_right"></div>
                                </small>
                                <span>Logout</span>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../LOGOUT/">
                                    <i class="las la-power-off fs-18 me-1 align-text-bottom"></i>
                                    <span>Logout</span>
                                </a>
                                <!--end startbarDashboards-->
                            </li><!--end nav-item-->

                        <!--end nav-item-->
                        </ul><!--end navbar-nav--->
                        
                    </div>
                </div><!--end startbar-collapse-->
            </div><!--end startbar-menu-->    
        </div><!--end startbar-->
        <div class="startbar-overlay d-print-none"></div>
        <!-- end leftbar-tab-menu-->