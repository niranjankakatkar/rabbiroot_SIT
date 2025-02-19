<?php include '../niru_collection.php';

$Dflag=$_GET['Dflag'];
$oid=$_GET['id'];

$ukey=givedata($conn,"order_master","order_id",$oid,"user_key");

if($Dflag!=""){
	/*$filepath=givedata($conn,"category","id",$url_id,"filepath");
	
	$sql = "DELETE FROM category WHERE id='$url_id'";
	if($conn->query($sql)){
		  unlink($filepath);
		?>
		<script>window.location.href="../Category/"; </script>
		<?php
	}*/
}



 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

    
<!-- Mirrored from mannatthemes.com/rizz/default/ecommerce-order-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 09:54:52 GMT -->
<head>
        

        <meta charset="utf-8" />
                <title>Rizz | Admin</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="../assets/images/favicon.ico">

       
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
                        <div class="col-lg-8">
                            
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Orders #<?=$_GET['id']?></h4>  

                                            <?php
                                                $timepstamp=$row['timestamp'];
                                                $timepstamp=date_create("".$timepstamp);

                                            ?>
                                            <p class="mb-0 text-muted mt-1"><?=date_format($timepstamp,"d M Y  h:i a")?> from orders</p>                    
                                        </div><!--end col-->
                                       <!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="table-light">
                                              <tr>
                                                <th>Item</th>
                                                <th class="text-end">Price</th>
                                                <th class="text-end">Quantity</th>
                                                <th class="text-end">Total</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $guest_key=$_SESSION['tokenID'];
                                            $oid=$_SESSION['OID'];

										   $sql = "SELECT * FROM order_master_details where oid='$oid'";
										   $result = mysqli_query($conn, $sql);
										   while($row = mysqli_fetch_assoc($result)) {
												   $timepstamp=$row['timestamp'];
													$timepstamp=date_create("".$timepstamp);
                                                    $user_key=$row['user_key'];
                                                    $product_key=$row['product_key'];

                                                  
			                                        ?>
                                                <tr>
                                                    <td>
                                                        <img src="../assets/images/products/03.png" alt="" height="40">
                                                        <p class="d-inline-block align-middle mb-0">
                                                            <span class="d-block align-middle mb-0 product-name text-body"><?=givedata($conn,"products","p_key",$product_key,"product_title")?></span>
                                                            <span class="text-muted font-13"><?=givedata($conn,"products","p_key",$product_key,"description")?></span> 
                                                        </p>
                                                    </td>
                                                    <td class="text-end">Rs. <?=$row['rate']?></td>
                                                    <td class="text-end"><?=$row['qty']?></td>                                                    
                                                    <td class="text-end">Rs. <?=$row['total']?></td>
                                                </tr>
                                                <?php
                                           }
                                           ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!--card-body-->
                            </div><!--end card-->
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Bought - Awaiting Delivery</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto">                      
                                            <a href="#" class="text-secondary"><i class="fas fa-download me-1"></i> Download Invoice</a>                     
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div class="position-relative m-4">
                                        <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
                                          <div class="progress-bar" style="width: 50%"></div>
                                        </div>
                                        <div class="position-absolute top-0 start-0 translate-middle bg-primary text-white rounded-pill thumb-md"><i class="iconoir-home"></i></div>
                                        <div class="position-absolute top-0 start-50 translate-middle bg-primary-subtle text-primary rounded-pill thumb-md"><i class="iconoir-delivery-truck"></i></div>
                                        <div class="position-absolute top-0 start-100 translate-middle bg-light text-dark rounded-pill thumb-md"><i class="iconoir-map-pin"></i></div>
                                    </div>
                                    <div class="row row-cols-3">
                                        <div class="col text-start">
                                            <h6 class="mb-1">Order Created</h6>
                                            <p class="mb-0 text-muted fs-12 fw-medium">15 Feb 2024, 11:30 AM</p>
                                        </div> <!-- end col -->
                                        <div class="col text-center">
                                            <h6 class="mb-1">On Delivery</h6>
                                            <p class="mb-0 text-muted fs-12 fw-medium">18 Feb 2024, 05:15 PM</p>
                                        </div> <!-- end col -->
                                        <div class="col text-end">
                                            <h6 class="mb-1">Order Delivered</h6>
                                            <p class="mb-0 text-muted fs-12 fw-medium">20 Feb 2024, 01:00 PM</p>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->                                    
                                    <div class="bg-primary-subtle p-2 border-dashed border-primary rounded mt-3">
                                        <span class="text-primary fw-semibold">Note :</span><span class="text-primary fw-normal"> Ship all the ordered item together by monday and i send you an email please check. Thanks!</span>
                                    </div>
                                </div><!--card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Order Summary</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto">                      
                                            <span class="badge rounded text-warning bg-warning-subtle fs-12 p-1">Payment pending</span>                  
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div>
                                        <div class="d-flex justify-content-between">
                                          <p class="text-body fw-semibold">Items subtotal :</p>
                                          <p class="text-body-emphasis fw-semibold">Rs.<?=givedata($conn,"order_master","order_id",$oid,"total")?></p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                          <p class="text-body fw-semibold">Discount :</p>
                                          <p class="text-danger fw-semibold">-Rs. 0.00</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                          <p class="text-body fw-semibold">Tax :</p>
                                          <p class="text-body-emphasis fw-semibold">Rs. 0.00</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                          <p class="text-body fw-semibold">Subtotal :</p>
                                          <p class="text-body-emphasis fw-semibold">Rs.<?=givedata($conn,"order_master","order_id",$oid,"total")?></p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                          <p class="text-body fw-semibold mb-0">Shipping Cost :</p>
                                          <p class="text-body-emphasis fw-semibold mb-0">Rs. 0.00</p>
                                        </div>
                                    </div>
                                    <hr class="hr-dashed">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="mb-0">Total :</h4>
                                        <h4 class="mb-0">Rs. <?=givedata($conn,"order_master","order_id",$oid,"total")?></h4>
                                      </div>
                                </div><!--card-body-->
                            </div><!--end card-->
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Order Information</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto">                      
                                            <a href="#" class="text-secondary"><i class="fas fa-pen me-1"></i> Edit</a>                 
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div>
                                        <div class="d-flex justify-content-between mb-2">
                                          <p class="text-body fw-semibold"><i class="iconoir-profile-circle text-secondary fs-20 align-middle me-1"></i>Username :</p>
                                          <p class="text-body-emphasis fw-semibold">@<?=givedata($conn,"user_master","reg_no",$ukey,"email")?></p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <p class="text-body fw-semibold"><i class="iconoir-people-tag text-secondary fs-20 align-middle me-1"></i>Full Name :</p>
                                            <p class="text-body-emphasis fw-semibold"><?=givedata($conn,"user_master","reg_no",$ukey,"name")?></p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <p class="text-body fw-semibold"><i class="iconoir-mail text-secondary fs-20 align-middle me-1"></i>Email :</p>
                                            <p class="text-body-emphasis fw-semibold"><?=givedata($conn,"user_master","reg_no",$ukey,"email")?></p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <p class="text-body fw-semibold"><i class="iconoir-dollar-circle text-secondary fs-20 align-middle me-1"></i>Total Payment :</p>
                                            <p class="text-body-emphasis fw-semibold"><span class="text-primary">Rs.<?=givedata($conn,"order_master","order_id",$oid,"total")?></span> (Rs. 0.00 for transportation)</p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <p class="text-body fw-semibold"><i class="iconoir-calendar text-secondary fs-20 align-middle me-1"></i>Order Date :</p>
                                            <p class="text-body-emphasis fw-semibold"><?=date_format($timepstamp,"d-M-Y  h:i a")?></p>
                                        </div>
                                       
                                                                              
                                    </div>
                                </div><!--card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->                                       
                </div><!-- container -->
                
                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom justify-content-between">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
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
                                            Rizz
                                            <span
                                                class="text-muted d-none d-sm-inline-block float-end">
                                                Crafted with
                                                <i class="iconoir-heart text-danger"></i>
                                                by Mannatthemes</span>
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
        <script src="../assets/js/app.js"></script>
    </body>
    <!--end body-->

<!-- Mirrored from mannatthemes.com/rizz/default/ecommerce-order-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 09:54:52 GMT -->
</html>