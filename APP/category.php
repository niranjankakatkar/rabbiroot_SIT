<?php
include '../ADMIN/niru_collection.php';
$json = file_get_contents('php://input');
$obj = json_decode($json);
  //$con goes here 
   $response["responce"] = array();
    
    $key=$obj->{'key'};
    
    if($key=="All")
    {
        $sql = "SELECT * FROM category";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
                $stuff= array();
	             $stuff["id"]="".$row["id"];
	             $stuff["category_title"]="".$row["category_title"];
	             $stuff["description"]="".$row["description"];
	             $stuff["filepath"]="".$row["filepath"];
	             $stuff["flag"]="".$row["flag"];
	             array_push($response["responce"], $stuff);
	 
        }
    }else if($key=="Active")
    {
        $sql = "SELECT * FROM category where flag='1'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
                $stuff= array();
	             $stuff["id"]="".$row["id"];
	             $stuff["category_title"]="".$row["category_title"];
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