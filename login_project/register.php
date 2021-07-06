
<?php
session_start();
include 'header.php';

include 'config.php';
include 'function.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

 if(isset($_POST['submit'])){
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $email = $_POST['email'];
    $password = $_POST['password'];

    $token =bin2hex(random_bytes(15));
     $_SESSION['token'] = $token;

     if(empty($_POST['fname']) ||empty($_POST['lname'])||empty($_POST['email']) ||empty($_POST['password'])){
            echo'<label> All fields are required</label>';

            }else{
               $pass = md5($password);
            	$data = array(
            		'fname'=>$fname,
            		'lname'=>$lname,
            		'email'=>$email,
            		'pass' =>$pass,
            		'token'=>$token,
            		'status'=>'inactive'
            	); 

         $res = insertdata($data);

        if ( isset($_POST['submit']) ||$res==true) {
          $body = "Hi, '$email'. Click here to activate your account http://localhost/login_project/activate.php?token =$token";
         activationemail($email,'Account Activation',$body);
          if($account==true){
            $_SESSION['message'] ='check your mail to activate your account';
           header("location: login.php");
         }else{
          echo "Email sending failed";
         }
           }else{
            echo "You are not register ERROR Accour";
           }   

         }
            
 }
?>

 <div class="container">
	<h3 class="text-center">Sign up</h3>
	
	<form action="register.php" method="POST">
		<br>
  <div class="row">
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="First name" name="fname">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="Last name" name="lname" >
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col-md-6">
      <input type="email" class="form-control" placeholder="Email" name="email">
    </div>
    <div class="col-md-6">
      <input type="password" class="form-control" placeholder="password" name="password" >
      <!-- <input type="submit" name="submit"> -->
    </div>
    <!-- <button type="button" class="btn btn-primary">Primary</button> -->
  </div>
  <br>
  <!-- <button type="button" class="btn btn-primary">Primary</button> -->
   <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          
        </div>
        <?php
   if(isset($_SESSION['email'])){
     echo '<p>Already Registered<a href="login.php"> Login Now!</a></p>';
   //      echo "<h2>Already Login: </h2>";
   //     echo '<br><a href="logout.php">Logout</a>';
   }else{
      echo '<p>Sign Up please</p>';
   }


                 ?>
</form>
    </div>
<?php
include 'footer.php';
?>