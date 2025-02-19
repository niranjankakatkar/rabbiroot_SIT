<?php
include '../ADMIN/niru_collection.php';
  //$con goes here 
  $json = file_get_contents('php://input');
$obj = json_decode($json);
   $response["responce"] = array();
    $reg_no=$obj->{'reg_no'};
     $password=$obj->{'password'};
    
    $sql="update user_master set password='$password' where reg_no='$reg_no'";
   
	if($conn->query($sql))
	{
	     $stuff= array();
	     $stuff["status"]="okay";
	     
	     $stuff["reg_no"]="".$reg_no;
	      array_push($response["responce"], $stuff);
	      
            /* ADD THE TABLE COLUMNS TO THE JSON OBJECT CONTENTS */
           
	}else{
	     $stuff= array();
	     $stuff["status"]="fail";
	     
	      array_push($response["responce"], $stuff);
	    
	}
   

        
        // success
       
        
        echo(json_encode($response));


    /* CLOSE THE CONNECTION */
    mysqli_close($conn );
    ?>