<?php
include '../niru_collection.php';

$url_id=$_GET['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$prep_by = $_SESSION['token'];
	$category_id=$_POST['category_id'];
	$sub_category_title=$_POST['sub_category_title'];
	$description=$_POST['description'];
	$flag=$_POST['flag'];
    
  
	if($url_id=="")
	{
        $uploadPath="";
	
		$image=$_FILES['sub_category_img']['name']; 
        if($image!=""){
			 $imageArr=explode('.',$image); //first index is file name and second index file type
			 $rand=rand(100000,999999);
			 $newImageName=$rand.'.'.$imageArr[1];
			 $uploadPath="../uploads/subcategory/".$newImageName;
			 $isUploaded=move_uploaded_file($_FILES["sub_category_img"]["tmp_name"],$uploadPath);
            }

		$sql="INSERT INTO sub_category(category_id,sub_category_title,description,filepath,flag,prep_by) VALUES('$category_id','$sub_category_title','$description','$uploadPath','$flag','$prep_by')";
		if($conn->query($sql))
		{
		 ?>		  
		  <script>
             alert('Sub Category Added Successfully');
		  window.location.href="../Subcategory/"; </script>
		  <?php
		}
	}else{
        $uploadPath="";
	
		$image=$_FILES['sub_category_img']['name']; 
        if($image!=""){
			 $imageArr=explode('.',$image); //first index is file name and second index file type
			 $rand=rand(100000,999999);
			 $newImageName=$rand.'.'.$imageArr[1];
			 $uploadPath="../uploads/subcategory/".$newImageName;
			 $isUploaded=move_uploaded_file($_FILES["sub_category_img"]["tmp_name"],$uploadPath);
            }
        else{
            $uploadPath=$_POST['filepath'];
        }

		$sql="UPDATE sub_category set category_id='$category_id',sub_category_title='$sub_category_title',description='$description',filepath='$uploadPath',flag='$flag' where id='$url_id'";
		
       if($conn->query($sql))
        {
            ?>
            
			    <script>
                 alert('Sub Category Updated Successfully');
                  window.location.href="../Subcategory/"; </script>
		    <?php
        }
	}										
			
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

    
<!-- Mirrored from mannatthemes.com/rizz/default/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 09:55:05 GMT -->
<head>
        

        <meta charset="utf-8" />
                <title>RabbiRoots | Admin </title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Admin Homepage" name="description" />
                <meta content="" name="Niranjan V. K." />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="../../public/assets/images/rabbiroots_1.png">

       
        <link href="../assets/libs/mobius1-selectr/selectr.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/libs/huebee/huebee.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/libs/vanillajs-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css" />
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
                    
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Add/Edit Sub Category Form</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
									<form  method="POST" class="form" enctype="multipart/form-data" autocomplete="off">
                                    	<div class="mb-2">
                                            <label for="username" class="form-label">Select Category </label>

                                            <?php $cat=givedata($conn,"sub_category","id",$url_id,"category_id"); ?>
                                           <select class="form-control" name="category_id" id="default" required>
                                            <?php
                                                    if($cat!=""){
                                                        ?>
                                                     <option value="<?=$cat?>"><?=givedata($conn,"category","id",$cat,"category_title")?></option>
												   <?php 
                                                    }
                                            ?>
                                                <option >Search Category </option>
												<?php
												   $sql = "SELECT * FROM category where flag='1'";
												   $result = mysqli_query($conn, $sql);
												   while($row = mysqli_fetch_assoc($result)) {
												?>
                                                <option value="<?=$row['id']?>"><?=$row['category_title']?></option>
												   <?php } ?>
                                            </select> 
                                        </div>
                                        <div class="mb-2">
                                            <label for="username" class="form-label">Sub Category Title</label>
                                            <input class="form-control" type="text" name="sub_category_title" id="sub_category_title" value="<?=givedata($conn,"sub_category","id",$url_id,"sub_category_title");?>" placeholder="Enter Sub Category Title" required>
                                           
                                        </div>
                                        <div class="mb-2">
                                            <label for="email" class="form-label">Description</label>
                                           <input class="form-control" type="text" name="description" id="description" value="<?=givedata($conn,"sub_category","id",$url_id,"description");?>" placeholder="Enter Sub Category Description" required>
                                           
                                        </div>
										<div class="mb-2">
                                            <label for="email" class="form-label">Sub Category Image<span class="text-muted"> (*Upload your image here, Please click "Upload Image" Button)</span></label>
                                           <div class="input-group">
                                           <?php
                                            if($url_id=='')
                                            {
                                                ?>
											<input type="file" class="form-control" name="sub_category_img" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload Image" accept="image/png, image/gif, image/jpeg" required>
                                            <?php
                                            }else{
                                                ?> 
                                                <input type="file" class="form-control" name="sub_category_img" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload Image" accept="image/png, image/gif, image/jpeg" >
                                                <a href="<?=givedata($conn,"sub_category","id",$url_id,"filepath")?>" class="lightbox"> <img src="<?=givedata($conn,"sub_category","id",$url_id,"filepath")?>" alt="" height="100"></a>
                                              
                                                <?php
                                            }
                                            ?>
											<input class="form-control" type="hidden" name="filepath" id="filepath" value="<?=givedata($conn,"sub_category","id",$url_id,"filepath");?>" >
                                           
											</div> 
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
                                       
                                        <?php
                                    if($url_id== "")                   
                                    {
                                            ?>
                                             <button type="submit" class="btn btn-primary">Submit </button>
                                            <?php
                                    }else{
                                        ?>
                                             <button type="submit" class="btn btn-success">Update </button>
                                            <?php
                                    }

                                       ?>
                                    </form>
                                 </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                                                      
                    </div><!--end row-->


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
        <script src="../assets/libs/mobius1-selectr/selectr.min.js"></script>
        <script src="../assets/libs/huebee/huebee.pkgd.min.js"></script>
        <script src="../assets/libs/vanillajs-datepicker/js/datepicker-full.min.js"></script>
        <script src="../assets/js/moment.js"></script>
        <script src="../assets/libs/imask/imask.min.js"></script>
        <script src="../assets/js/pages/forms-advanced.js"></script>
        <script src="../assets/js/app.js"></script>
    </body>
    <!--end body-->

<!-- Mirrored from mannatthemes.com/rizz/default/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 09:55:08 GMT -->
</html>