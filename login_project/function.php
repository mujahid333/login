<?php
include 'config.php';


function insertdata($data){
	global $connect;

 
               
	 $sql ="INSERT INTO register(first_name ,last_name , email ,password ,token ,status)	VALUES (:fname,:lname,:email,:pass,:token,:status ) " ;
        // print_r($sql);
        $query=$connect->prepare($sql);
        $query->bindvalue(':fname',$data['fname']);
        $query->bindvalue(':lname',$data['lname']);
        $query->bindvalue(':email',$data['email']);
        $query->bindvalue(':pass',$data['pass']);
        $query->bindvalue(':token',$data['token']);
        $query->bindvalue(':status',$data['status']);
        $result=$query->execute();
        return $result;


}

use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   require_once "PHPMailer/PHPMailer.php";
   require_once "PHPMailer/SMTP.php";
   require_once "PHPMailer/Exception.php";

function activationemail($to,$subject,$msg){
  $mail = new PHPMailer(); 
  //SMTP SETTINGS
  $mail->IsSMTP(); 
  $mail->Host = "smtp.gmail.com";
                                         //$mail->SMTPDebug = 1; 
  $mail->SMTPAuth = true; 
  $mail->Username = "darknite303@gmail.com";
  $mail->Password = "darknitee";
  $mail->SMTPSecure = 'ssl';     //'ssl'; 
  $mail->Port = 465;           //587; 

     //Email Setting
  $mail->IsHTML(true);
$mail->SetFrom("darknite303@gmail.com","Mujahid");
  $mail->addAddress ($to);     //($email);                            //AddAddress($to);
  $mail->Subject =  $subject;  // $name;                              //Subject = $subject;

        //$msg = "We have just send verification link to .<br>Please check your email for verification.";

  $mail->Body = $msg;               //$body;

  if(!$mail->Send()){
    echo "Message could not be send";
    echo "Mailor error:" . $mail->ErrorInfo;
  }else{
     
echo "Message has been sent";
  }
}

function selectdata($email){
    global $connect;

     $sql = "SELECT * FROM register WHERE email = :email and status = 'active' ";
               // print_r($sql);
               $query = $connect->prepare($sql);
               $query->bindValue(':email',$email);
               // $query->bindValue(':password',$pass);
               $query->execute();
               $row=$query->fetch(PDO::FETCH_ASSOC);
               return $row;
}



function forgetemail($to,$subject,$msg){
  $mail = new PHPMailer(); 
  //SMTP SETTINGS
  $mail->IsSMTP(); 
  $mail->Host = "smtp.gmail.com";
                                         //$mail->SMTPDebug = 1; 
  $mail->SMTPAuth = true; 
  $mail->Username = "darknite303@gmail.com";
  $mail->Password = "darknitee";
  $mail->SMTPSecure = 'ssl';     //'ssl'; 
  $mail->Port = 465;           //587; 

     //Email Setting
  $mail->IsHTML(true);
$mail->SetFrom("darknite303@gmail.com","Mujahid");
  $mail->addAddress ($to);     //($email);                            //AddAddress($to);
  $mail->Subject =  $subject;  // $name;                              //Subject = $subject;

        //$msg = "We have just send verification link to .<br>Please check your email for verification.";

  $mail->Body = $msg;               //$body;

  if(!$mail->Send()){
    echo "Message could not be send";
    echo "Mailor error:" . $mail->ErrorInfo;
  }else{
     
echo "Message has been sent";
  }
}
?>