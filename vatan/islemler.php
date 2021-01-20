<?php
include('baglan.php');


 if (isset ($_POST['yorum_onay_btn'])){
					$yorum_id=$_POST['idd'];
					$yorum_onay=$_POST['onay'];
					mysql_query("update yorumlar set onay=$yorum_onay where id=$yorum_id");
					header("location: yorum_onay.php");
					}
?>