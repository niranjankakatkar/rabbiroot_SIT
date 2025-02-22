<?php
//local
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "rabiroot";

 //live
 /*
$dbhost = "localhost";
 $dbuser = "rabbiroots_sit";
 $dbpass = "rabbiroot@2024#";
 $db = "rabbiroots_admin";
*/


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 
   
?>
