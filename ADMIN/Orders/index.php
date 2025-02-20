<?php include '../niru_collection.php';

$Dflag=$_GET['Dflag'];
$url_id=$_GET['id'];

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

    
<!-- Mirrored from mannatthemes.com/rizz/default/ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 09:54:52 GMT -->
<head>
        

        <meta charset="utf-8" />
        <title>RabbiRoots | Admin </title>
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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Orders</h4>                      
                                        </div><!--end col-->
                                       <!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="table-light">
                                              <tr>
                                                <th>ID</th>
                                                <th>Customer Info</th>
                                                <th>Date</th>
                                                <th>Payment</th>
                                                <th>Status</th>
                                                <th>Price</th>
                                                <th class="text-end">Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $guest_key=$_SESSION['tokenID'];
                                            $oid=$_SESSION['OID'];

										   $sql = "SELECT * FROM order_master";
										   $result = mysqli_query($conn, $sql);
										   while($row = mysqli_fetch_assoc($result)) {
												   $timepstamp=$row['timestamp'];
													$timepstamp=date_create("".$timepstamp);
                                                    $user_key=$row['user_key'];
                                                  
			                                        ?>
                                                <tr>
                                                    <td><a href="details.php?id=<?=$row['order_id']?>">#<?=$row['order_id']?></a></td>
                                                    <td>
                                                        <p class="d-inline-block align-middle mb-0">
                                                            <span class="d-block align-middle mb-0 product-name text-body"><?=givedata($conn,"user_master","reg_no",$user_key,"name")?></span>
                                                            <span class="text-muted font-13"><?=givedata($conn,"user_master","reg_no",$user_key,"email")?></span> <br>
                                                            <span class="text-muted font-13"><?=givedata($conn,"user_master","reg_no",$user_key,"mobile_no")?></span> 
                                                        </p>
                                                    </td>
                                                    <td><?=date_format($timepstamp,"d-m-Y h:i a")?></td>
                                                    <td>UPI</td>
                                                    <td>
                                                        <span class="badge bg-success-subtle text-success"><i class="fas fa-check me-1"></i> Completed</span>
                                                    </td>
                                                    <td>Rs. <?=$row['total']?></td>
                                                    <td class="text-end">                                                       
                                                        <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                           }
                                           ?>
                                            </tbody>
                                          </table>
                                    </div>
                                </div>
                            </div>
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

<!-- Mirrored from mannatthemes.com/rizz/default/ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 09:54:52 GMT -->
</html>