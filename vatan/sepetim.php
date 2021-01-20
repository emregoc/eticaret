<?php include ('baglan.php');?>
<style type="text/css">
#a {
	color: #FFF;
	text-align: center;
	font-weight: bold;
}
#a {
	font-weight: bold;
}
#b {
	color: #FFF;
}
.b {
	color: #FFF;
}
.b {
	color: #FFF;
}
</style>
<table width="900" height="298" border="1" align="center">
<tr>
  <td height="30" colspan="2" align="center" bgcolor="#000000" style="color: #F00; font-weight: bold;">YÖNETİCİ PANELİ SEPET ONAY</td></tr>
  <tr>
    <td width="108" height="23" align="center" bgcolor="#999999" id="a"><a href="sepetim.php">SEPET</a></td>
    <td width="1076" colspan="3" rowspan="3" align="center" valign="top">
    <p>&nbsp;</p>
    
        <?php 
		$baglan1 = $_SESSION["baglan"];
   $sorgu=mysqli_query($baglan1,"select * from sepetim where onay=0");
   while($oku=mysqli_fetch_array($sorgu)){
   ?>
   <form id="form1" name="form1" method="post" action="action.php">
      <table width="549" height="150" border="1" cellpadding="0" cellspacing="0">
        <tr>
          <td width="223">Ürün Adı</td>
          <td width="210">Ürün Fiyatı</td>
          <td width="108">Ürün Onay</td>
          <td width="108">&nbsp;</td>
        </tr>
        <tr>
          <td><?php echo $oku['urun_ad']; ?></td>
          <td><p>
            <label for="onay"><?php echo $oku['urun_fiyat']; ?></label>
          </p></td>
          <td><p>
            <select name="onay" id="onay">
              <option>Onaylanmadi</option>
              <option>Onaylandi</option>
            </select>
          </p>
            <p>ÜRÜN ONAYI</p></td>
          <td><input type="submit" name="sepet_onay_btn" id="sepet_onay_btn" value="ONAYLA" /><input name="idd" type="hidden" id="idd" value="<?php echo $oku['urun_idd'];?>" /></td>
        </tr>
      </table>
  </form>
      <?php } ?>
    
    <p>&nbsp;</p>
    <p>&nbsp;</p>    
    </tr>
  <tr>
    <td height="23" align="left" bgcolor="#666666" id="b"><a href="yorum_onay.php"><span class="b"><img src="logo.png" width="130" height="65" /></span></a></td>
  </tr>
  <tr>
    <td height="23" align="left" bgcolor="#CCCCCC" class="b">&nbsp;</td>
  </tr>
</table>
<br>
