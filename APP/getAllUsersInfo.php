<?php
include '../ADMIN/niru_collection.php';
$json = file_get_contents('php://input');
$obj = json_decode($json);
  //$con goes here 
   $response["responce"] = array();
    
    $key=$obj->{'key'};
    
    if($key=="All")
    {
        $sql = "SELECT * FROM user_master";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
                $stuff= array();
	             $stuff["email"]="".$row["email"];
	             $stuff["mobile_no"]="".$row["mobile_no"];
	             array_push($response["responce"], $stuff);
	 
        }
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