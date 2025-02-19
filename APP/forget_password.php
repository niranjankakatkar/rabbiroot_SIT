<?php
include '../ADMIN/niru_collection.php';
$json = file_get_contents('php://input');
$obj = json_decode($json);
  //$con goes here 
   $response["responce"] = array();
    
    $mobile=$obj->{'mobile'};
    $id=givedata($conn,"user_master","mobile_no",$mobile,"reg_no");
    if($id!="")
	{
	     $stuff= array();
	     $otp="".generateRandomOTP(6);
	     $stuff["otp"]=$otp;
	     $stuff["reg_no"]=$id;
	      array_push($response["responce"], $stuff);
	      
	      $mes='Use '.$otp.' as one-time password (OTP) to verify your mobile number RABBIROOT';
	      
	      $xml_data = "user=SITSol&key=b6b34d1d4dXX&mobile=$mobile&message=$mes&senderid=DALERT&accusage=10";

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