<?php
include '../ADMIN/niru_collection.php';
$json = file_get_contents('php://input');
$obj = json_decode($json);
  //$con goes here 
   $response["responce"] = array();
    
    $key=$obj->{'reg_no'};
    
   
        $sql = "SELECT * FROM user_master where reg_no='$key'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
                $stuff= array();
	             $stuff["id"]="".$row["id"];
	             $stuff["name"]="".$row["name"];
	             $stuff["email"]="".$row["email"];
	             $stuff["mobile_no"]="".$row["mobile_no"];
	              $stuff["reg_no"]="".$key;
	             $stuff["active_flag"]="".$row["active_flag"];
	             array_push($response["responce"], $stuff);

        
        }
  
   
   

        
        // success
       
        
        echo(json_encode($response));


    /* CLOSE THE CONNECTION */
    mysqli_close($conn );
    ?>