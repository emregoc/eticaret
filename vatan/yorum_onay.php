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
  <td height="30" colspan="2" align="center" bgcolor="#000000" style="color: #F00; font-weight: bold;">YÖNETİCİ PANELİ YORUM ONAY</td></tr>
  <tr>
    <td width="108" height="23" align="center" bgcolor="#999999" id="a"><a href="yorum_onay.php">YORUMLAR</a></td>
    <td width="1076" colspan="3" rowspan="3" align="center" valign="top">
    <p>&nbsp;</p>
    
        <?php 
		
		$baglan1 = $_SESSION["baglan"];
   $sorgu=mysqli_query($baglan1,"select * from yorumlar where onay=0");
   while($oku=mysqli_fetch_array($sorgu)){
   ?>
   <form id="form1" name="form1" method="post" action="action.php">
      <table width="549" height="150" border="1" cellpadding="0" cellspacing="0">
        <tr>
          <td width="223">Yorum İçeriği</td>
          <td width="210">Yorum onayı</td>
          <td width="108">&nbsp;</td>
        </tr>
        <tr>
          <td><?php echo $oku['yorum']; ?></td>
          <td><p>
            <label for="onay"></label>
            <select name="onay" id="onay">
              <option>0</option>
              <option>1</option>
            </select>
          </p>
            <p>YORUMU ONAYI İÇİN 1 İ SEÇİN</p></td>
          <td><input type="submit" name="yorum_onay_btn" id="yorum_onay_btn" value="ONAYLA" />
            <input name="idd" type="hidden" id="idd" value="<?php echo $oku['id'];?>" /></td>
        </tr>
      </table>
  </form>
      <?php } ?>
    
    <p>&nbsp;</p>
    <p>&nbsp;</p>    
    </tr>
  <tr>
    <td height="23" align="left" bgcolor="#666666" id="b"><a href="admin.php"><span class="b"><img src="logo.png" width="130" height="65" /></span></a></td>
  </tr>
  <tr>
    <td height="23" align="left" bgcolor="#CCCCCC" class="b">&nbsp;</td>
  </tr>
</table>
<br>
