<?php include '../niru_collection.php';

$Dflag=$_GET['Dflag'];
$url_id=$_GET['id'];

if($Dflag!=""){
		$filepath=givedata($conn,"sub_category","id",$url_id,"filepath");
	$sql = "DELETE FROM sub_category WHERE id='$url_id'";
	if($conn->query($sql)){
			  unlink($filepath);
	
		?>
		<script>window.location.href="../Subcategory/"; </script>
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
                                            <h4 class="card-title">Sub Category List</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto"> 
                                            <form class="row g-2">
                                               
                                                
                                                <div class="col-auto">
                                                  <a  class="btn btn-primary"  href="add.php"><i class="fa-solid fa-plus me-1"></i> Add New</a>
                                                </div><!--end col-->
                                            </form>    
                                        </div><!--end col-->
                                    </div><!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    
                                    <div class="table-responsive">
                                        <table class="table mb-0 checkbox-all" id="datatable_1">
                                            <thead class="table-light">
                                              <tr>
                                              <th style="width: 5%;">
                                                  SR.No.
                                                </th>
                                                <th style="width: 10%;">Image</th>
                                                <th style="width: 25%;">Sub Category</th>
                                                <th style="width: 20%;">Description</th>
                                                <th style="width: 15%;">Category</th>
                                                <th  style="width: 10%;">Status</th>
                                                <th style="width: 20%;">Created At</th>
                                                <th class="text-end" >Action</th>

                                              </tr>
                                            </thead>
                                            <tbody>
											     <?php
										   $sql = "SELECT * FROM sub_category ORDER BY id DESC";
										   $result = mysqli_query($conn, $sql);
										   
									   $i=1;
											   while($row = mysqli_fetch_assoc($result)) {
												   $timepstamp=$row['timestamp'];
													$timepstamp=date_create("".$timepstamp);
			   ?>
                                                <tr>
                                                    <td style="width: 16px;">
                                                       <?=$i++?>
                                                    </td>
                                                    <td>
                                                    <a href="<?=$row['filepath']?>" class="lightbox"> <img src="<?=$row['filepath']?>" alt="" height="50"></a>
                                                   
                                                    </td>
                                                    <td class="ps-0">
												     <p class="d-inline-block align-middle mb-0">
                                                            <a  class="d-inline-block align-middle mb-0 product-name"><?=$row['sub_category_title']?></a> 
                                                            <br>
                                                          
                                                        </p>
                                                    </td>
                                                    <td>  <span class="text-muted font-13"><?=$row['description']?></span> </td>
													<td><?=givedata($conn,"category","id",$row['category_id'],"category_title");?></td>
                                                    <td>
													<?php
														if($row['flag']==1){
													?>
													<span class="badge bg-success-subtle text-success"><i class="fas fa-check me-1"></i> Published</span></td>
														<?php
														}else{
															?>
													<span class="badge bg-danger-subtle text-danger"><i class="fas fa-xmark me-1"></i> Inactive</span></td>
														<?php
														}?>
                                                    <td>
                                                        <span><?=date_format($timepstamp,"l, d F  H:i A");?></span>
                                                    </td>
                                                    <td class="text-end">                                                       
                                                        <a href="add.php?id=<?=$row['id']?>"><i class="las la-pen text-secondary fs-18"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a onclick="return confirm('Are you sure?')" href="?id=<?=$row['id']?>&Dflag=1"><i class="las la-trash-alt text-secondary fs-18"></i></a>
														
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
    </body>
    <!--end body-->

<!-- Mirrored from mannatthemes.com/rizz/default/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 09:54:51 GMT -->
</html>