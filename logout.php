<?php 
require 'fbconfig.php';
$facebook->destroySession();  // to destroy facebook sesssion
header("Location: " ."http://azuredirectip.cloudapp.net/bot/");        // you can enter home page here ( Eg : header("Location: " ."http://www.krizna.com"); 
?>
