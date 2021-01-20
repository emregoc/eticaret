<?php include('baglan.php');
$baglan1 = $_SESSION["baglan"];
$id=$_POST['id'];
$ad=$_POST['textfield'];
$soyad=$_POST['textfield2'];
$email=$_POST['textfield3'];
$dogum=$_POST['textfield4'];
$sifre=$_POST['textfield5'];
$cinsiyet=$_POST['select'];
$cep=$_POST['textfield6'];
$adres=$_POST['textarea'];
mysqli_query($baglan1,"UPDATE uyekayit SET ad='$ad',soyad='$soyad',email='$email',dogum='$dogum',sifre='$sifre',cinsiyet='$cinsiyet',cep='$cep',adres='$adres' where uyeid='$id'");
header('location:adminuyeler.php');
?>