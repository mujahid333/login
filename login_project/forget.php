<?php

include 'header.php';
include 'config.php';
include 'function.php';
session_start();
$message = '';

if(isset($_POST['insert'])){
     $email = $_POST['email'];
$sql = "SELECT * FROM register WHERE email= '$email'";
 $query = $connect->prepare($sql);
  // $query->bindValue(':uname',$name);
  // $query->bindValue(':email',$email);
  // $query->bindValue(':password', $password);
   $result=$query->execute();

   if ($result) {
   	 $body = "Hi, '$email'. Click here to reset  your password account http://localhost/login_project/forgetset.php?";
           forgetemail($email,'forget password',$body);
        echo "check your mail to set yout password";
          
   }else{
   	echo "Email not found";
   }
}

?>

<div class="container">
	 <?php
     // echo $_SESSION['message'];

        ?>
	  <h3 class="text-left">Recover Your Account </h3>
  <form action="" method="post">
   <div class="row">
     <div class="col-md-6">
      <label>Email</label>
      <input type="email" class="form-control" name="email">
     </div>
  </div><br>
 <br>
  <div class="col-md-6">
    <button class="btn btn-primary" type="submit" name="insert">Send Mail</button>
  </div>
  </form>
</div>
 <?php
include 'footer.php';
  ?>