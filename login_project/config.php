<?php
// session_start();
$host = "localhost";
$database = "login";
$username = "root";
$password = "";
$message = "";


try{
    $connect = new PDO("mysql:host=$host; dbname=$database",$username,$password);

    // $connect->setAttributr(PDO::ATTR_ERRMODE PDO::ERRMODE_EXCEPTION);
     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     if ($connect==true) {
     
     }else{
     	die("error");
     }
 }
 catch(PDOException $error){
    $message = $error->getmessage();
}
     ?>