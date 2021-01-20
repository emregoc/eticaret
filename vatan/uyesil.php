<?php include('baglan.php'); 
$baglan1 = $_SESSION["baglan"];
$id=$_GET['id'];
mysqli_query($baglan1,"DELETE FROM uyekayit where uyeid='$id'");
header('location:adminuyeler.php');
?>