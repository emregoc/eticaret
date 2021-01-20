<?php include('baglan.php');
$baglan1 = $_SESSION["baglan"];
$id=$_GET['id'];
mysqli_query($baglan1,"DELETE FROM urunler where urun_id='$id'");
header('location:adminurunler.php');
?>