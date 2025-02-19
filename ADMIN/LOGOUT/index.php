<?php
session_start();
session_destroy();
$_SESSION['token']="";
if($_SESSION['token']=="")
{
    ?>

     
        <script> 
            window.location.href="../"; 
            </script>
            
              <?php
}

?>