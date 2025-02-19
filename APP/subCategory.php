<?php
include '../ADMIN/niru_collection.php';
$json = file_get_contents('php://input');
$obj = json_decode($json);
  //$con goes here 
   $response["responce"] = array();
    
    $key=$obj->{'key'};
    $cat_id=$obj->{'cat_id'};
    
    if($key=="All")
    {
        $sql = "SELECT * FROM sub_category where category_id='$cat_id'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
                $stuff= array();
	             $stuff["id"]="".$row["id"];
	             $stuff["sub_category_title"]="".$row["sub_category_title"];
	             $stuff["description"]="".$row["description"];
	             $stuff["filepath"]="".$row["filepath"];
	             $stuff["flag"]="".$row["flag"];
	             array_push($response["responce"], $stuff);
	 
        }
    }else if($key=="Active")
    {
        $sql = "SELECT * FROM sub_category where flag='1' AND category_id='$cat_id'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
                $stuff= array();
	             $stuff["id"]="".$row["id"];
	             $stuff["sub_category_title"]="".$row["sub_category_title"];
	             $stuff["description"]="".$row["description"];
	             $stuff["filepath"]="".$row["filepath"];
	             $stuff["flag"]="".$row["flag"];
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