<?php 
if(isset($_COOKIE['guvenlik'])){}else{header('location: uye_giris.php');}
setcookie("guvenlik","",time()-1);
header ("location:index.php");
?>