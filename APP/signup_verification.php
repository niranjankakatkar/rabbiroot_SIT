<?php
include '../ADMIN/niru_collection.php';
  //$con goes here 
   $json = file_get_contents('php://input');
$obj = json_decode($json);
   $response["responce"] = array();
      $flag=$obj->{'flag'};
    $reg_no=$obj->{'reg_no'};
    
    $sql="update user_master set active_flag='$flag' where reg_no='$reg_no'";
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
	     $stuff["reg_no"]="";
	      array_push($response["responce"], $stuff);
	    
	}
   

        
        // success
       
        
        echo(json_encode($response));


    /* CLOSE THE CONNECTION */
    mysqli_close($conn );
    ?>