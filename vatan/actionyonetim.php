<?php include('baglan.php'); 
$baglan1 = $_SESSION["baglan"];
$gelen=$_POST['islem'];// adminuyeler ve admin urunler sayfasındaki eklenin yanında koyduğumuz hidden


if($gelen=="ekleslayt")
{
$fotoadres=$_POST['textfield']; // post komutu ile adminsliderdaki toolboxa yazılan verileri buraya gönderiyoruz
$fotobaslik=$_POST['textfield5'];
mysqli_query($baglan1,"insert into slider values('','$fotobaslik','$fotoadres','')");
header("location:adminslider.php");
}


else if($gelen=="urunekle")
{
$eklemetarihi=$_POST['textfield'];
$urunmenu=$_POST['select'];
$urunalt=$_POST['textfield2'];
$fotoadi=$_POST['textfield4'];
$urunadi=$_POST['textfield5'];
$urunozellik=$_POST['textarea'];
$urunfiyat=$_POST['textfield6'];
mysqli_query($baglan1,"insert into urunler values('','$eklemetarihi','$urunmenu','$urunalt','$fotoadi','$urunadi','$urunozellik','$urunfiyat','')");//sondaki 2 tane virgül olmayabilir alttaki üye ekle calısıyor
header("location:adminurunler.php");
}


else if($gelen=="uyeekle")
{
	$ad=$_POST['textfield'];
	$soyad=$_POST['textfield2'];
	$mail=$_POST['textfield3'];
	$dogum=$_POST['textfield4'];
	$sifre=$_POST['textfield5'];
	$cinsiyet=$_POST['select'];
	$cep=$_POST['textfield6'];
	$adres=$_POST['textarea'];
	mysqli_query($baglan1,"insert into uyekayit values('','$ad','$soyad','$mail','$dogum','$sifre','$cinsiyet','$cep','$adres')");
	header("location:adminuyeler.php");
	}


else if($gelen == "onecikan")
{
	$id=$_POST['islem2'];
	mysqli_query($baglan1,"UPDATE urunler SET one_cikan_urun = '1' where urun_id='$id'");
	header("location:adminonecikan.php");
	
}

	
?>