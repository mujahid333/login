<?php
include 'header.php';
include "config.php";
include 'function.php';
session_start();

if(isset($_POST['login'])){
  $email = $_POST['email'];
  $pass = $_POST['password'];
   $_SESSION["email"] = $_POST["email"];

   if(empty($_POST['email']) || empty($_POST['password'])){
            $message ='<label> All fields are required</label>';
   
        }else{
              $row = selectdata($email);
               if ($row) {
                 header('location:welcome.php');
               }else{
                echo "you are not login error";
               }
        }

  }

?>

    <div class="container">
     <?php
     echo $_SESSION['message'];

        ?>
	<h3 class="row-md-6 text-center mt-2">Login </h3>
	<form action="login.php" method="post">

	<div class="row">
    <div class="col-md-12">
  
    <label >Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email">

</div>
</div>
	<div class="row">
    <div class="col-md-12">
  
    <label for="pwd">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"name="password">

</div>
</div>
<br>
 <div class="col-md-12 text-center">
  <button type="submit" class="btn btn-primary" name="login">Login</button>
   <a href="forget.php">Forget password</a>


</div>

</form>
 <?php
 if(!isset($_SESSION['email'])){
    $_SESSION['message'] = 'You are already register login now!';

   
   }else{
     header('location:welcome.php');
      $_SESSION['message'] = 'you are already login ';
    // echo '<p>Already login<a href="welcome.php"> go to welcome page!</a></p>';
  }
   
   ?> 

</div>
<?php
include 'footer.php';
?>