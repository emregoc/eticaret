<?php 
include('baglan.php');
$baglan1 = $_SESSION["baglan"];
if(isset($_COOKIE['guvenlik'])){}else{header('location:uye_giris.php');}

$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$mail=$_POST['mail'];
$sifre=$_POST['sifre'];
$dogum=$_POST['dogum'];
$cinsiyet=$_POST['cinsiyet'];
$cep=$_POST['cep'];
mysqli_query($baglan1,"insert into uyekayit value('','$ad','$soyad','$mail','$dogum','$sifre','$cinsiyet','$cep','')");
header('location:basarili.php');
?>