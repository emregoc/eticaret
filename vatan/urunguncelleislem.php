<?php include('baglan.php');
$baglan1 = $_SESSION["baglan"];
$id=$_POST['islem'];
$ekleme=$_POST['textfield'];
$urunmenu=$_POST['select'];
$urunalt=$_POST['textfield2'];
$fotoyol=$_POST['textfield4'];
$urunadi=$_POST['textfield5'];
$urunozellik=$_POST['textarea'];
$urunfiyati=$_POST['textfield6'];
mysqli_query($baglan1,"UPDATE urunler SET ekleme_tarihi='$ekleme',urun_menu_kategori='$urunmenu',urun_alt_kategori='$urunalt',foto_yol='$fotoyol',urun_adi='$urunadi',urun_ozellikleri='$urunozellik',urun_fiyati='$urunfiyati' where urun_id='$id'");
header('location:adminurunler.php');?>