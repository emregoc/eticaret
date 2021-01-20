<?php include('baglan.php');
$baglan1 = $_SESSION["baglan"];
$id=$_GET['id'];
mysqli_query($baglan1,"DELETE FROM slider where id='$id'");
header('location:adminslider.php');
?>