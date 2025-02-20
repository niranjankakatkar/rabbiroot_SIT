<?php
include '../niru_collection.php';

$url_id=$_GET['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$prep_by = $_SESSION['token'];
	$category_id=$_POST['category_id'];
	$sub_category_id=$_POST['sub_category_id'];
    $product_title=$_POST['product_title'];
	$description=$_POST['description'];
    $description_details=$_POST['description_details'];
    $attribute_type_id=$_POST['attribute_type_id'];
    $attribute_id=$_POST['attribute_id'];


    $price=$_POST['price'];
	$flag=$_POST['flag'];
	
		 
  
  
	if($url_id=="")
	{
        $uploadPath="";
        $uploadPath1="";
        $uploadPath2="";
        $uploadPath3="";
        $image=$_FILES['product_img']['name']; 
        if($image!='')
        {
            $imageArr=explode('.',$image); //first index is file name and second index file type
            $rand=rand(100000,999999);
            $newImageName=$rand.'.'.$imageArr[1];
            $uploadPath="../uploads/product/".$newImageName;
            $isUploaded=move_uploaded_file($_FILES["product_img"]["tmp_name"],$uploadPath);
        }

        $image1=$_FILES['product_img1']['name']; 
        if($image1!='')
        {
        $imageArr1=explode('.',$image1); //first index is file name and second index file type
        $rand=rand(100000,999999);
        $newImageName1=$rand.'.'.$imageArr1[1];
        $uploadPath1="../uploads/product/".$newImageName1;
        $isUploaded1=move_uploaded_file($_FILES["product_img1"]["tmp_name"],$uploadPath1);
        }
        
        $image2=$_FILES['product_img2']['name']; 
        if($image2!='')
        {
        $imageArr2=explode('.',$image2); //first index is file name and second index file type
        $rand=rand(100000,999999);
        $newImageName2=$rand.'.'.$imageArr2[1];
        $uploadPath2="../uploads/product/".$newImageName2;
        $isUploaded2=move_uploaded_file($_FILES["product_img2"]["tmp_name"],$uploadPath2);
        }

        $image3=$_FILES['product_img3']['name']; 
        if($image3!='')
        {
        $imageArr3=explode('.',$image3); //first index is file name and second index file type
        $rand=rand(100000,999999);
        $newImageName3=$rand.'.'.$imageArr3[1];
        $uploadPath3="../uploads/product/".$newImageName3;
        $isUploaded3=move_uploaded_file($_FILES["product_img3"]["tmp_name"],$uploadPath3);
        }

        $pkey=generateRandomString(20);

		$sql="INSERT INTO products(product_title,description,description_details,price,filepath,filepath_1,category_id,sub_category_id,flag,prep_by,filepath_2,filepath_3,attribute_type_id,attribute_id,p_key)  VALUES('$product_title','$description','$description_details','$price','$uploadPath','$uploadPath1','$category_id','$sub_category_id','$flag','$prep_by','$uploadPath2','$uploadPath3','$attribute_type_id','$attribute_id','$pkey')";
		if($conn->query($sql))
		{
		 ?>		  
		  <script>
             alert('Product Added Successfully');
		  window.location.href="../Products/"; </script>
		  <?php
		}
	}else{

        $uploadPath="";
        $uploadPath1="";
        $uploadPath2="";
        $uploadPath3="";
        $image=$_FILES['product_img']['name']; 
        if($image!='')
        {
            $imageArr=explode('.',$image); //first index is file name and second index file type
            $rand=rand(100000,999999);
            $newImageName=$rand.'.'.$imageArr[1];
            $uploadPath="../uploads/product/".$newImageName;
            $isUploaded=move_uploaded_file($_FILES["product_img"]["tmp_name"],$uploadPath);
        } else{
            $uploadPath=$_POST['filepath'];
        }


        $image1=$_FILES['product_img1']['name']; 
        if($image1!='')
        {
        $imageArr1=explode('.',$image1); //first index is file name and second index file type
        $rand=rand(100000,999999);
        $newImageName1=$rand.'.'.$imageArr1[1];
        $uploadPath1="../uploads/product/".$newImageName1;
        $isUploaded1=move_uploaded_file($_FILES["product_img1"]["tmp_name"],$uploadPath1);
        } else{
            $uploadPath1=$_POST['filepath_1'];
        }

        
        $image2=$_FILES['product_img2']['name']; 
        if($image2!='')
        {
        $imageArr2=explode('.',$image2); //first index is file name and second index file type
        $rand=rand(100000,999999);
        $newImageName2=$rand.'.'.$imageArr2[1];
        $uploadPath2="../uploads/product/".$newImageName2;
        $isUploaded2=move_uploaded_file($_FILES["product_img2"]["tmp_name"],$uploadPath2);
        } else{
            $uploadPath2=$_POST['filepath_2'];
        }


        $image3=$_FILES['product_img3']['name']; 
        if($image3!='')
        {
        $imageArr3=explode('.',$image3); //first index is file name and second index file type
        $rand=rand(100000,999999);
        $newImageName3=$rand.'.'.$imageArr3[1];
        $uploadPath3="../uploads/product/".$newImageName3;
        $isUploaded3=move_uploaded_file($_FILES["product_img3"]["tmp_name"],$uploadPath3);
        } else{
            $uploadPath3=$_POST['filepath_3'];
        }


		$sql="UPDATE products set product_title='$product_title',description='$description',description_details='$description_details',price='$price',filepath='$uploadPath',flag='$flag',sub_category_id='$sub_category_id' where id='$url_id'";
		
       if($conn->query($sql))
        {
            ?>
			    <script>
                alert('Product Updated Successfully');
                window.location.href="../Products/"; </script>
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
		 
		 <link rel="stylesheet" href="../assets/libs/quill/quill.snow.css">
		 
		   <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>


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
                                            <h4 class="card-title">Add/Edit Product Form</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
									<form  method="POST" class="form" enctype="multipart/form-data" autocomplete="off">
                                    	<div class="mb-2 row" >
											<div class="col-md-6">
												<label for="username" class="form-label">Select Category </label>
                                                <?php $cat=givedata($conn,"products","id",$url_id,"category_id"); ?>
											   <select class="form-control" name="category_id" id="default" required>
                                               <?php
                                                    if($cat!=""){
                                                        ?>
                                                     <option value="<?=$cat?>"><?=givedata($conn,"category","id",$cat,"category_title")?></option>
												   <?php 
                                                    }
                                            ?>
													<option  disabled>Search</option>
													<?php
													   $sql = "SELECT * FROM category where flag='1'";
													   $result = mysqli_query($conn, $sql);
													   while($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?=$row['id']?>"><?=$row['category_title']?></option>
                                                        <?php } ?>
												</select> 
											</div>
											<div class="col-md-6">
													<label for="username" class="form-label">Select Sub Category </label>
                                                    <?php $sub_cat=givedata($conn,"products","id",$url_id,"sub_category_id"); ?>
												   <select class="form-control" name="sub_category_id" id="sub_category_id"  required>
                                                   <option value="" disabled>Search</option>
                                                   <?php
                                                    if($sub_cat!=""){
                                                        ?>
                                                     <option value="<?=$sub_cat?>"><?=givedata($conn,"sub_category","id",$sub_cat,"sub_category_title")?></option>
												   <?php 
                                                    }
                                            ?>	
                                                   <option value="">----Select----- </option>
														<?php
														   $sql = "SELECT * FROM sub_category where flag='1'";
														   $result = mysqli_query($conn, $sql);
														   while($row = mysqli_fetch_assoc($result)) {
														?>
														<option value="<?=$row['id']?>"><?=$row['sub_category_title']?></option>
														   <?php } ?>
													</select> 
											</div>
                                        </div>
										
                                        <div class="mb-2">
                                            <label for="username" class="form-label">Product Title</label>
                                            <input class="form-control" type="text" name="product_title" id="product_title" value="<?=givedata($conn,"products","id",$url_id,"product_title");?>" placeholder="Enter Products Title" required>
                                           
                                        </div>
                                        <div class="mb-2">
                                            <label for="price" class="form-label">Product Price</label>
                                            <input class="form-control" type="text" name="price" id="price" value="<?=givedata($conn,"products","id",$url_id,"price");?>" placeholder="Enter Products price" required>
                                           
                                        </div>
										<div class="mb-2">
                                            <label for="email" class="form-label">Short Description</label>
											 <textarea  name="description" class="form-control" rows="5" required> <?=givedata($conn,"products","id",$url_id,"description");?> </textarea>
											
                                           
                                        </div>
                                        <div class="mb-2">
                                            <label for="email" class="form-label">Detail Description</label>
											 <textarea  name="description_details" id="editor" class="form-control" rows="5" required> <?=givedata($conn,"products","id",$url_id,"description_details");?></textarea>
											
                                           
                                        </div>
										<div class="mb-2">
                                            <label for="email" class="form-label">Product Main Image<span class="text-muted"> (*Upload your image here, Please click "Upload Image" Button)</span></label>
                                           <div class="input-group">
                                           <?php
                                            if($url_id=='')
                                            {
                                                ?>
											<input type="file" class="form-control" name="product_img" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload Image" accept="image/*" required>
                                            <?php
                                            }else{
                                                ?> 
                                                <input type="file" class="form-control" name="product_img" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload Image" accept="image/*" >
                                                <a href="<?=givedata($conn,"products","id",$url_id,"filepath")?>" class="lightbox"> <img src="<?=givedata($conn,"products","id",$url_id,"filepath")?>" alt="" height="100"></a>
                                              
                                                <?php
                                            }
                                            ?>
											<input class="form-control" type="hidden" name="filepath" id="filepath" value="<?=givedata($conn,"products","id",$url_id,"filepath");?>" >
                                           

											</div> 
                                        </div>
										<div class="mb-2">
                                            <label for="email" class="form-label">Product Image 1<span class="text-muted"> (*Upload your image here, Please click "Upload Image" Button)</span></label>
                                           <div class="input-group">
                                           <?php
                                            if($url_id=='')
                                            {
                                                ?>
											<input type="file" class="form-control" name="product_img1" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload Image" accept="image/*" required>
                                            <?php
                                            }else{
                                                ?> 
                                                <input type="file" class="form-control" name="product_img1" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload Image" accept="image/*" >
                                                <a href="<?=givedata($conn,"products","id",$url_id,"filepath_1")?>" class="lightbox"> <img src="<?=givedata($conn,"products","id",$url_id,"filepath_1")?>" alt="" height="100"></a>
                                              
                                                <?php
                                            }
                                            ?>
											<input class="form-control" type="hidden" name="filepath_1" id="filepath_1" value="<?=givedata($conn,"products","id",$url_id,"filepath_1");?>" >
                                           
											</div> 
                                        </div>
										<div class="mb-2">
                                            <label for="email" class="form-label">Product Image 2<span class="text-muted"> (*Upload your image here, Please click "Upload Image" Button)</span></label>
                                           <div class="input-group">
                                           <?php
                                            if($url_id=='')
                                            {
                                                ?>
											<input type="file" class="form-control" name="product_img2" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload Image" accept="image/*" required>
                                            <?php
                                            }else{
                                                ?> 
                                                <input type="file" class="form-control" name="product_img2" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload Image" accept="image/*" >
                                                <a href="<?=givedata($conn,"products","id",$url_id,"filepath_2")?>" class="lightbox"> <img src="<?=givedata($conn,"products","id",$url_id,"filepath_2")?>" alt="" height="100"></a>
                                              
                                                <?php
                                            }
                                            ?>
											<input class="form-control" type="hidden" name="filepath_2" id="filepath_2" value="<?=givedata($conn,"products","id",$url_id,"filepath_2");?>" >
                                           
											</div> 
                                        </div>
										<div class="mb-2">
                                            <label for="email" class="form-label">Product Image 3<span class="text-muted"> (*Upload your image here, Please click "Upload Image" Button)</span></label>
                                           <div class="input-group">
                                           <?php
                                            if($url_id=='')
                                            {
                                                ?>
											<input type="file" class="form-control" name="product_img3" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload Image" accept="image/*" required>
                                            <?php
                                            }else{
                                                ?> 
                                                <input type="file" class="form-control" name="product_img3" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload Image" accept="image/*" >
                                                <a href="<?=givedata($conn,"products","id",$url_id,"filepath_3")?>" class="lightbox"> <img src="<?=givedata($conn,"products","id",$url_id,"filepath_3")?>" alt="" height="100"></a>
                                              
                                                <?php
                                            }
                                            ?>
											<input class="form-control" type="hidden" name="filepath_3" id="filepath_3" value="<?=givedata($conn,"products","id",$url_id,"filepath_3");?>" >
                                           
											</div> 
                                        </div>
										
										<div class="mb-2 row">
															
													<div class="col-md-6">
														  <label for="email" class="form-label">Select Attribute Type</label>
															<select class="form-control" id="default" name="attribute_type_id" required>
                                                                <?php $attribute_type_id=givedata($conn,"products","id",$url_id,"attribute_type_id")?>
															 
                                                                <?php
                                                                if($attribute_type_id!=""){
                                                                    ?>
                                                                <option value="<?=$attribute_type_id?>"><?=givedata($conn,"attribute_type","id",$attribute_type_id,"attribute_type_title")?></option>
                                                                <?php 
                                                                }
                                                                ?>	
                                                                <option value="">Search</option>
															<?php
															   $sql = "SELECT * FROM attribute_type where flag='1'";
															   $result = mysqli_query($conn, $sql);
															   while($row = mysqli_fetch_assoc($result)) {
                                                                ?>
                                                                <option value="<?=$row['id']?>"><?=$row['attribute_type_title']?></option>
                                                                <?php } ?>
														</select>                                    
													</div><!-- end col -->                                     
													
													<div class="col-md-6">
														  <label for="email" class="form-label">Select Attribute's</label>
														<select class="form-control" id="taggableSelect" name="attribute_id" required>
                                                            <?php $attribute_id=givedata($conn,"products","id",$url_id,"attribute_id")?>
															
                                                            <?php
                                                                if($attribute_id!=""){
                                                                    ?>
                                                                <option value="<?=$attribute_id?>"><?=givedata($conn,"attributes","id",$attribute_id,"attribute_title")?></option>
                                                                <?php 
                                                                }
                                                                ?>
                                                                  <option value="">Search</option>
															<?php
															   $sql = "SELECT * FROM attributes where flag='1'";
															   $result = mysqli_query($conn, $sql);
															   while($row = mysqli_fetch_assoc($result)) {
															?>
															<option value="<?=$row['id']?>"><?=$row['attribute_title']?></option>
															   <?php } ?>
														</select>         
													</div> <!-- end col -->                                               
												<!-- end row -->                
                              
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
		 <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    </body>
    <!--end body-->

<!-- Mirrored from mannatthemes.com/rizz/default/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 09:55:08 GMT -->
</html>