<?php

include 'header.php';
session_start();
?>
<div class="container">
	 <?php
     echo $_SESSION['message'];

        ?>

<h3 class="text-center mt-6"> welcome you are login  </h3>
 click here to  <button class="btn btn-primary" style="margin-bottom: 40px"><a href="logout.php"></a>logout</button>
</div>

<?php

include 'footer.php';
?>