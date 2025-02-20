<?php include '../niru_collection.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">
<head>
        

        <meta charset="utf-8" />
                <title>RabbiRoots | Admin </title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Admin Homepage" name="description" />
                <meta content="" name="Niranjan V. K." />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="../../public/assets/images/rabbiroots_1.png">

       
         <!-- App css -->
         <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
         <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    
    <!-- Top Bar Start -->
    <body>
        
		<?php include '../navBar.php'; ?>

        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-xxl">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-4">
                            <div class="row">
                                <div class="col-md-12 col-lg-6 col-xl-12">
                                    <div class="card">
                                        <div class="card-body border-dashed-bottom pb-3">
                                            <div class="row d-flex justify-content-between">
                                                <div class="col-auto">
                                                    <div class="d-flex justify-content-center align-items-center thumb-xl border border-secondary rounded-circle">
                                                        <i class="icofont-money-bag h1 align-self-center mb-0 text-secondary"></i>
                                                    </div> 
                                                    <h5 class="mt-2 mb-0 fs-14">Total Revenue</h5>
                                                </div><!--end col-->
                                                <div class="col align-self-center">
                                                    <div id="line-1" class="../apex-charts float-end"></div> 
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->
                                        <div class="card-body"> 
                                            <div class="row d-flex justify-content-center ">
                                                <div class="col-12 col-md-6">
                                                    <h2 class="fs-22 mt-0 mb-1 fw-bold">Rs.<?php
                                                    $total=retriveSUM($conn,"order_master","total"," where status='done'");
                                                    if($total==""){echo '0';}else{ echo ''.$total;}
                                                    ?></h2>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today</p>                                           
                                                </div><!--end col-->
                                                <div class="col-12 col-md-6 align-self-center text-start text-md-end">
                                                    <button type="button" class="btn btn-primary btn-sm px-2 mt-2 mt-md-0 ">View Report</button>  
                                                </div><!--end col-->
                                            </div><!--end row-->  
                                        </div><!--end card-body--> 
                                    </div><!--end card-->
                                </div><!--end col-->
                                <div class="col-md-12 col-lg-6 col-xl-12">
                                    <div class="card">
                                        <div class="card-body border-dashed-bottom pb-3">
                                            <div class="row d-flex justify-content-between">
                                                <div class="col-auto">
                                                    <div class="d-flex justify-content-center align-items-center thumb-xl border border-secondary rounded-circle">
                                                        <i class="icofont-opencart h1 align-self-center mb-0 text-secondary"></i>
                                                    </div> 
                                                    <h5 class="mt-2 mb-0 fs-14">New Order</h5>
                                                </div><!--end col-->
                                                <div class="col align-self-center ">
                                                    <div id="line-2" class="../apex-charts float-end"></div> 
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->
                                        <div class="card-body"> 
                                            <div class="row d-flex justify-content-center ">
                                                <div class="col-12 col-md-6">
                                                    <h2 class="fs-22 mt-0 mb-1 fw-bold"><?= retrivecount($conn,"order_master"," where status='done'")?></h2>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today</p>                                           
                                                </div><!--end col-->
                                                <div class="col-12 col-md-6 align-self-center text-start text-md-end">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm px-2 mt-2 mt-md-0 ">View  Report</button>  
                                                </div><!--end col-->
                                            </div><!--end row-->  
                                        </div><!--end card-body--> 
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div> <!--end row--> 
                        </div> <!--end col--> 
                        <div class="col-md-12 col-lg-12 col-xl-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Monthly Avg. Income</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto"> 
                                            <div class="dropdown">
                                                <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="icofont-calendar fs-5 me-1"></i> This Year<i class="las la-angle-down ms-1"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                    <a class="dropdown-item" href="#">This Year</a>
                                                </div>
                                            </div>               
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div id="monthly_income" class="../apex-charts"></div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3"> 
                                            <div class="card shadow-none border mb-3 mb-lg-0">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col text-center">                                                                        
                                                            <span class="fs-18 fw-semibold">Rs. <?php
                                                            $dd=date('Y-m-d');
                                                    $total=retriveSUM($conn,"order_master","total"," where status='done' AND timestamp LIKE '$dd%'");
                                                    if($total==""){echo '0';}else{ echo ''.$total;}
                                                    ?></span>      
                                                            <h6 class="text-uppercase text-muted mt-2 m-0">Today's Order</h6>                
                                                        </div><!--end col-->
                                                    </div> <!-- end row -->
                                                </div><!--end card-body-->
                                            </div> <!--end card-body-->                     
                                        </div><!--end col-->
                                        <div class="col-md-6 col-lg-3"> 
                                            <div class="card shadow-none border mb-3 mb-lg-0">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col text-center">                                                                        
                                                            <span class="fs-18 fw-semibold">Rs. <?php
                                                            $dd=date('Y-m-d');
                                                    $total=retriveSUM($conn,"order_master","total"," where status='done' ");
                                                    if($total==""){echo '0';}else{ echo ''.$total;}
                                                    ?></span>      
                                                            <h6 class="text-uppercase text-muted mt-2 m-0">Total Order</h6>                
                                                        </div><!--end col-->
                                                    </div> <!-- end row -->
                                                </div><!--end card-body-->
                                            </div> <!--end card-body-->                     
                                        </div><!--end col-->
                                        
                                        <div class="col-md-6 col-lg-3"> 
                                            <div class="card shadow-none border mb-3 mb-lg-0">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col text-center">                                                                        
                                                            <span class="fs-18 fw-semibold"><?= retrivecount($conn,"user_master"," where active_flag='1'")?></span>      
                                                            <h6 class="text-uppercase text-muted mt-2 m-0">Total Users</h6>                
                                                        </div><!--end col-->
                                                    </div> <!-- end row -->
                                                </div><!--end card-body-->
                                            </div> <!--end card-->                     
                                        </div><!--end col-->  
                                       <!--end col-->                              
                                    </div><!--end row-->
                                </div><!--end card-body--> 
                            </div><!--end card-->                             
                        </div> <!--end col-->           
                    </div><!--end row-->
                   
                </div><!-- container -->
                
                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="../appearance" aria-labelledby="../appearanceLabel">
                    <div class="offcanvas-header border-bottom justify-content-between">
                      <h5 class="m-0 font-14" id="../appearanceLabel">Appearance</h5>
                      <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">  
                        <h6>Account Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch1">
                                <label class="form-check-label" for="settings-switch1">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->               
                    </div><!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                <!--end Rightbar-->
                <!--Start Footer-->
                
                <footer class="footer text-center text-sm-start d-print-none">
                    <div class="container-xxl">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-0 rounded-bottom-0">
                                    <div class="card-body">
                                        <p class="text-muted mb-0">
                                            ©
                                            <script> document.write(new Date().getFullYear()) </script>
                                            RabbiRoot
                                            <span
                                                class="text-muted d-none d-sm-inline-block float-end">
                                                Crafted with
                                                <i class="iconoir-heart text-danger"></i>
                                                by S-IT Solutions Pvt.Ltd.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->  
        <!-- vendor js -->
        
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="../assets/js/pages/ecommerce-index.init.js"></script>
        <script src="../assets/js/app.js"></script>
    </body>
    <!--end body-->

<!-- Mirrored from mannatthemes.com/rizz/default/ecommerce-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 09:54:42 GMT -->
</html>