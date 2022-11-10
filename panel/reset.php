<?php
error_reporting(0);
session_start();
unlink("../result/total_login.txt");
unlink("../result/total_email.txt");
unlink("../result/total_pin.txt");
unlink("../result/total_cc.txt");
unlink("../result/total_bank.txt");
unlink("../result/total_bin.txt");
unlink("../result/total_bot.txt");
echo "<script type='text/javascript'>window.top.location='index.php';</script>";
?>