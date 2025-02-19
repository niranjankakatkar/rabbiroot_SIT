<?php
include 'niru_collection.php';

echo "__AJAX-";

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$mobile_no = $_POST['mobile_no'];
$password = $_POST['password'];

$flag = "0";
$key_ = generateRandomCHAR_INT(10);
$otp = generateRandomINT(6);

$avl = givedata($conn, "user_master", "mobile_no", $mobile_no, "id");

if ($avl == "") {
    $sql = "INSERT INTO user_master (full_name, email, mobile_no, password, token_key, OTP, flag) VALUES 
           ('$full_name', '$email', '$mobile_no', '$password', '$key_', '$otp', '0')";

    if ($conn->query($sql)) {
        echo "Done__AJAX-$key_";  // Send key_ for OTP verification

        // Send OTP via SMS
        $message = "Use $otp as OTP to verify your RabbiRoots account.";
        $xml_data = "user=SITSol&key=b6b34d1d4dXX&mobile=$mobile_no&message=$message&senderid=DALERT&accusage=10";

        $URL = "http://redirect.ds3.in/submitsms.jsp?";
        $ch = curl_init($URL);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
    }
} else {
    echo "error";
}
?>
