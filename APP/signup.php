<?php
include '../ADMIN/niru_collection.php';
  //$con goes here 
  $json = file_get_contents('php://input');
$obj = json_decode($json);
   $response["responce"] = array();
    $name=$obj->{'name'};
    $email=$obj->{'email'};
    $mobile_no=$obj->{'mobile_no'};
    $password=$obj->{'password'};
   $otp="".generateRandomOTP(6);
    $active_flag=$_POST['active_flag'];
    $delete_flag=$_POST['delete_flag'];
    $reg_no="RABBIR".retrivemax($conn,"user_master","id");
    $sql="INSERT INTO user_master(reg_no,name,email,mobile_no,password,otp,active_flag,delete_flag) VALUES('$reg_no','$name','$email','$mobile_no','$password','$otp','0','0')";
   
	if($conn->query($sql))
	{
	     $mes='Use '.$otp.' as one-time password (OTP) to verify your Account of RABBIROOT';
	      
	      $xml_data = "user=SITSol&key=b6b34d1d4dXX&mobile=$mobile_no&message=$mes&senderid=DALERT&accusage=10";

                    $URL = "http://redirect.ds3.in/submitsms.jsp?";
                    $ch = curl_init($URL);
        			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        			curl_setopt($ch, CURLOPT_POST, 1);
        			curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');			
        			curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml_data");
        			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        			$output = curl_exec($ch);
        			curl_close($ch);
        			
	     $stuff= array();
	     
	     $stuff["status"]="okay";
	     $stuff["otp"]="".$otp;
	     $stuff["reg_no"]="".$reg_no;
	      array_push($response["responce"], $stuff);
	      
            /* ADD THE TABLE COLUMNS TO THE JSON OBJECT CONTENTS */
           
	}else{
	     $stuff= array();
	     $stuff["status"]="fail";
	     $stuff["otp"]="123456";
	      array_push($response["responce"], $stuff);
	    
	}
   

        
        // success
       
        
        echo(json_encode($response));


    /* CLOSE THE CONNECTION */
    mysqli_close($conn );
    ?>