 <?php

include 'header.php';
include 'config.php';
include 'header.php';

session_start();

 if(isset($_SESSION['token'])) {
    	$token = $_SESSION['token'];

    	$sql = "UPDATE register SET status ='active' WHERE token ='$token' ";
    	  $statment = $connect->prepare($sql);
           $result = $statment->execute();
            if (!empty($result)) {
            	$_SESSION['message']  = "Your account is activated plese login now!.";
            	header("location:login.php");
            }else{
            	$_SESSION['message'] ='ERROR Account not activated';

            }
         }else{
            	echo "ERROR Token not found ";
         }


include 'footer.php';
?>            	