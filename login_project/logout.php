<?php
include 'header.php';
session_start();
session_destroy();
// header("location:login.php");
	echo  "you are logout";
	?>
<h3>Go to <a href="home.php">Home page</a></h3>
<?php
include 'footer.php';



?>