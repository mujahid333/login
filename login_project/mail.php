<?php





use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   require_once "PHPMailer/PHPMailer.php";
   require_once "PHPMailer/SMTP.php";
   require_once "PHPMailer/Exception.php";


   





$email = "darknite303@gmail.com";
$body = "Hi This is test email send by PHP Script";

 smtp_mailer($email,'Account Verification',$body);


 

 function smtp_mailer($to,$subject,$msg){
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