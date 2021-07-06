<?php
include 'header.php';
include 'config.php';
include 'function.php';
session_start();

 if(isset($_POST['insert'])){

     $email = $_POST['email'];
     $pasword = $_POST['password'];
     $cpasword = $_POST['cpassword'];

     if ($pasword==$cpasword) {
     	
     

      $pas = md5($pasword);
$sql = "UPDATE register SET password ='$pas' WHERE email='$email'";

 $query = $connect->prepare($sql);
  // $query->bindValue(':name',$name);
  // $query->bindValue(':email',$email);
  // $query->bindValue(':password', $password);
   $result=$query->execute();
   if ($result==true) {
   	$_SESSION['message'] = 'your password is recovered successfuly';
      header("location:login.php");
   }else{
    echo "password not updated";
   }
}else{
	echo "password not match";
}

}


?>

<div class="container">
	<?php
     echo $_SESSION['message'];

        ?>
	  <h3 class="text-left">Reset Password </h3>
  <form action="" method="post">
  
   <div class="row">
    <div class="col-md-6">
      <label>Enter Email</label>
      <input type="email" class="form-control" name="email">
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <label>Password</label>
      <input type="password" class="form-control" name="password">
    </div>
  </div>
   <div class="row">
    <div class="col-md-6">
      <label>Conform Password</label>
      <input type="password" class="form-control" name="cpassword">
    </div>
  </div><br>
  <div>
    <button class="btn btn-primary" type="submit" name="insert">Update</button>
  </div>
  </form>
  </div>
  <?php
include 'footer.php';
  ?>