<?php include('baglan.php');
$baglan1 = $_SESSION["baglan"];
$id=$_POST['islem'];
$fotoadres=$_POST['textfield5'];
$foto=$_POST['textfield'];
mysqli_query($baglan1,"UPDATE slider SET foto_adres='$fotoadres',foto_baslik='$foto' where id='$id'");
header('location:adminslider.php');
?>