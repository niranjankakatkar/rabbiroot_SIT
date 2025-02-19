<?php
include '../niru_collection.php';

$url_id=$_GET['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$prep_by = $_SESSION['token'];
	$attribute_type_title=$_POST['attribute_type_title'];
	$description=$_POST['description'];
	$flag=$_POST['flag'];
	
	if($url_id=="")
	{
		
			 
		$sql="INSERT INTO attribute_type(attribute_type_title,description,flag,prep_by) VALUES('$attribute_type_title','$description','$flag','$prep_by')";
		if($conn->query($sql))
		{
		  ?>		  
		  <script>
		  window.location.href="../AttributeT/"; </script>
		  <?php
		}
	}else{
		$sql="UPDATE attribute_type set attribute_type_title='$attribute_type_title',description='$description',flag='$flag' where id='$url_id'";
		
       if($conn->query($sql))
        {
            ?>
			    <script> window.location.href="../AttributeT/"; </script>
		    <?php
        }
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

        <link href="../assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
         <link href="../assets/libs/animate.css/animate.min.css" rel="stylesheet" type="text/css">
		 <link href="../assets/libs/uppy/uppy.min.css" rel="stylesheet" type="text/css" />
        
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
                                            <h4 class="card-title">Add/Edit Attribute Type Form</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <form  method="POST" class="form" enctype="multipart/form-data">
                                        <div class="mb-2">
                                            <label for="username" class="form-label">Attribute Type Title</label>
                                            <input class="form-control" type="text" name="attribute_type_title" id="attribute_type_title" value="<?=givedata($conn,"attribute_type","id",$url_id,"attribute_type_title");?>" placeholder="Enter Attribute Type Title" required>
                                           
                                        </div>
                                        <div class="mb-2">
                                            <label for="email" class="form-label">Description</label>
                                           <input class="form-control" type="text" name="description" id="description" value="<?=givedata($conn,"attribute_type","id",$url_id,"description");?>" placeholder="Enter Attribute Type Description" required>
                                           
                                        </div>
										
                                        <div class="mb-2">
                                            <label for="password" class="form-label">Status</label>
                                                <div class="col-md-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flag" id="flag1" value="1" checked>
                                                    <label class="form-check-label" for="flag1">
                                                      Published
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flag" id="flag2" value="0">
                                                    <label class="form-check-label" for="flag2">
                                                      Inactive
                                                    </label>
                                                </div>
                                               
                                            </div>
                                      
                                           
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                    </form><!--end form-->            
                                </div><!--end card-body--> 
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
        <script src="../assets/libs/simple-datatables/umd/simple-datatables.js"></script>
		
        <script src="../assets/js/pages/form-validation.js"></script>
        <script src="../assets/js/pages/datatable.init.js"></script>
		
        <script src="../assets/libs/sweetalert2/sweetalert2.min.js"></script>
        <script src="../assets/js/pages/sweet-alert.init.js"></script>
        <script src="../assets/js/app.js"></script>
		
		
        <script src="../assets/libs/uppy/uppy.legacy.min.js"></script>
    </body>
    <!--end body-->

<!-- Mirrored from mannatthemes.com/rizz/default/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 09:54:51 GMT -->
</html>