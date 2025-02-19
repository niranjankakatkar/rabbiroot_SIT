<?php
include '../ADMIN/niru_collection.php';
$json = file_get_contents('php://input');
$obj = json_decode($json);
  //$con goes here 
   $response["responce"] = array();
    
    $username=$obj->{'username'};
    $password=$obj->{'password'};
    $id=givedataMulti($conn,"admin_login"," username='$username' AND password='$password'","token");
    $POST=givedataMulti($conn,"admin_login"," username='$username' AND password='$password'","post");
    if($id!="" && $POST=="DELEVERY")
	{
	     $stuff= array();
	     $stuff["status"]="okay";
	     $stuff["reg_no"]="".$id;
	      array_push($response["responce"], $stuff);
	      
            /* ADD THE TABLE COLUMNS TO THE JSON OBJECT CONTENTS */
           
	}else{
	     $stuff= array();
	     $stuff["status"]="fail";
	     $stuff["reg_no"]="";
	      array_push($response["responce"], $stuff);
	    
	}
   

        
        // success
       
        
        echo(json_encode($response));


    /* CLOSE THE CONNECTION */
    mysqli_close($conn );
    ?>