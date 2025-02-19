<?php

    

        // Database configuration  
        include "db_config.php";

        // Include Easebuss library 
        include('easebuzz-lib/easebuzz_payment_gateway.php');

        $MERCHANT_KEY = "NQ4X2JVOF";           // Marchant key
        $SALT = "M8PAB4Q45";                   // Salt key
        $ENV = "test";                // set enviroment name

        $easebuzzObj = new Easebuzz($MERCHANT_KEY, $SALT, $ENV);
        
         // Use date default function to India time zore for save txns date
        date_default_timezone_set("Asia/Kolkata");

        // Generate txns Id by using mt_rand function
        $transactionId = substr(str_shuffle(md5(time())),0, 15);

        $customerName  = "NVK";//$_POST['full_name'];
        $customerEmail = "n@gmail.com";//$_POST['email'];
        $customerPhone = "7887565827";//$_POST['mobile_number'];
        $description = "Product Details";//$_POST['product_summary'];
        $address = "Satara 415002";//$_POST['address'];
        $city = "Satara";//$_POST['city'];
        $pincode = "415002";//$_POST['pincode'];
        $amount = "15";//$_POST['amount'];
        $orderId  = "WC".rand(11111, 99999);
        $currency = "INR";
        $txnsDate = date('Y-m-d H:i:s');
        $payment_status = "Pending";
        
        //Insert transaction data into the database 
        $query = "INSERT INTO payment_transaction (order_id, product_summary, full_name, mobile_number, email, amount, currency, status, txns_id, txns_date, address, pincode, city) 
        VALUES ('$orderId', '$description', '$customerName', '$customerPhone', '$customerEmail', '$amount', '$currency', '$payment_status', '$transactionId', '$txnsDate', '$address', '$pincode', '$city')";
        
        $conn->query($query);
       
        $postData = array ( 
            "txnid" => $transactionId, 
            "amount" => $amount.".0", 
            "firstname" => $customerName, 
            "email" => $customerEmail, 
            "phone" => $customerPhone, 
            "productinfo" => $description, 
            "surl" => "http://localhost/BlogPost/Easebuzz-Payment-gateway-in-php/success.php", 
            "furl" => "http://localhost/BlogPost/Easebuzz-Payment-gateway-in-php/failed.php", 
            "udf1" => "aaaa", 
            "udf2" => "aaaa", 
            "udf3" => "aaaa", 
            "udf4" => "aaaa", 
            "udf5" => "aaaa", 
            "address1" => $address, 
            "address2" => "",
            "city" => $city, 
            "state" => $city, 
            "country" => "INDIA", 
            "zipcode" => $pincode
        );
        
       // $easebuzzObj->initiatePaymentAPI($postData);
     
    
?>