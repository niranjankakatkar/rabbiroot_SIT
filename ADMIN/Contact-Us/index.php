<?php include '../niru_collection.php';

$Dflag=$_GET['Dflag'];
$url_id=$_GET['id'];

if($Dflag!=""){
	$filepath=givedata($conn,"category","id",$url_id,"filepath");
	
	$sql = "DELETE FROM category WHERE id='$url_id'";
	if($conn->query($sql)){
		  unlink($filepath);
		?>
		<script>window.location.href="../Category/"; </script>
		<?php
	}
}



 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

    
<!-- Mirrored from mannatthemes.com/rizz/default/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 09:54:51 GMT -->
<head>
        

  
        <meta charset="utf-8" />
                <title>RabbiRoots | Admin </title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Admin Homepage" name="description" />
                <meta content="" name="Niranjan V. K." />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="../../public/assets/images/rabbiroots_1.png">

       
        <link href="../assets/libs/simple-datatables/style.css" rel="stylesheet" type="text/css" />
         <!-- App css -->
         <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
         <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
		 
        <link href="../assets/libs/tobii/css/tobii.min.css" rel="stylesheet" type="text/css" />
		

    </head>

    
    <!-- Top Bar Start -->
    <body>
         
		<?php include '../navBar.php'; ?>


        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-xxl"> 
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Conatct-Us List</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto"> 
                                            <form class="row g-2">
                                                <div class="col-auto">
                                                    <a class="btn bg-primary-subtle text-primary dropdown-toggle d-flex align-items-center arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" data-bs-auto-close="outside">
                                                        <i class="iconoir-filter-alt me-1"></i> Filter
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <div class="p-2">
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" checked id="filter-all">
                                                                <label class="form-check-label" for="filter-all">
                                                                  All 
                                                                </label>
                                                            </div>
                                                          </div>
                                                    </div>
                                                </div><!--end col-->
                                                
                                                <!--end col-->
                                            </form>    
                                        </div><!--end col-->
                                    </div><!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    
                                    <div class="table-responsive">
                                        <table class="table mb-0 checkbox-all" id="datatable_1">
                                            <thead class="table-light">
                                              <tr>
                                                <th style="width: 16px;">
                                                   Sr.No.
                                                </th>
                                                <th>Namr</th>
                                                <th>Email</th>
                                                <th>Mobile No</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Created At</th>
                                             
                                              </tr>
                                            </thead>
                                            <tbody>
											     <?php
										   $sql = "SELECT * FROM contact_us ORDER BY id DESC";
										   $result = mysqli_query($conn, $sql);
										   
									   $i=1;
											   while($row = mysqli_fetch_assoc($result)) {
												   $timepstamp=$row['timestamp'];
													$timepstamp=date_create("".$timepstamp);
                                                    $userKey=$row['reg_no'];
			   ?>
                                                <tr>
                                                    <td style="width: 16px;">
                                                       <?=$i++?>
                                                    </td>
                                                    <td class="ps-0">
													   
                                                       <?=$row['name']?>
                                                          
                                                       
                                                    </td>
                                                    <td>
                                                        <span><?=$row['email']?></span>
                                                    </td>
                                                    <td>
                                                        <span><?=$row['phone_no']?></span>
                                                    </td>
                                                    <td>
                                                        <span><?=$row['subject']?></span>
                                                    </td>
                                                    <td>
                                                        <span><?=$row['message']?></span>
                                                    </td>
                                                    <td>
                                                        <span><?=date_format($timepstamp,"l, d F  H:i A");?></span>
                                                    </td>
                                                    
                                                </tr>
												
												<?php
		   }
		   ?>   </tbody>
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
        <script src="../assets/libs/simple-datatables/umd/simple-datatables.js"></script>
        <script src="../assets/js/pages/datatable.init.js"></script>
        <script src="../assets/js/app.js"></script>
		
        <script src="../assets/libs/tobii/js/tobii.min.js"></script>
		<script>
            const tobii = new Tobii()
        </script>
    </body>
    <!--end body-->

<!-- Mirrored from mannatthemes.com/rizz/default/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 09:54:51 GMT -->
</html>