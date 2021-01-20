<?php include('baglan.php');?>
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
<table width="900" border="1" align="center">
<tr>
  <td height="30" colspan="2" align="center" bgcolor="#000000" style="color: #F00; font-weight: bold;">YÖNETİCİ PANELİ</td></tr>
  <tr>
    <td width="130" height="23" align="center" bgcolor="#003277" id="a">TABLOLAR</td>
    <td width="754" colspan="3" rowspan="8" valign="top">
      <table width="500" border="0" align="center">
        <tr>
          <td width="921" height="167" align="center" bgcolor="#FFFFFF">
            <form id="form1" name="form1" method="post" action="actionyonetim.php">
              <table width="377" border="1">
                <tr>
                  <td width="143" align="center" bgcolor="#0099FF"><strong>Fotoğraf Başlık</strong></td>
                  <td width="218"><label for="textfield2"></label>
                  <input type="text" name="textfield" id="textfield2" /></td>
                </tr>
                <tr>
                  <td height="24" align="center" bgcolor="#0099FF"><strong>Fotoğraf</strong></td>
                  <td align="center"><input type="file" name="textfield5" id="textfield" /></td>
                </tr>
                <tr>
                  <td height="24"><input name="islem" type="hidden" id="islem" value="ekleslayt" /></td>
                  <td align="center"><input type="submit" name="button" id="button" value="Ekle" /></td>
                </tr>
                
          </table></form></td>
        </tr>
        <?php 
		$baglan1 = $_SESSION["baglan"];
	  $sorgu=mysqli_query($baglan1,"Select *From slider");
	  while($db=mysqli_fetch_array($sorgu)){
	  ?>
       <form id="form1" name="form1" method="post" action="actionyonetim.php"> 
        <?php }?></form>
      </table>
    
  </tr>
  <tr>
    <td height="23" align="left" bgcolor="#666666" id="b"><a href="adminslider.php">SLAYT</a></td>
  </tr>
  <tr>
    <td height="23" align="left" bgcolor="#CCCCCC" class="b"><a href="adminurunler.php">ÜRÜNLER</a></td>
  </tr>
  <tr>
    <td height="23" align="left" bgcolor="#666666" class="b"><a href="yorum_onay.php">YORUM</a></td>
  </tr>
  <tr>
    <td height="23" align="left" bgcolor="#666666" class="b"><a href="sepetim.php">SEPETİM</a></td>
  </tr>
  <tr>
    <td height="23" align="left" bgcolor="#666666" class="b"><a href="adminuyeler.php">ÜYELER</a></td>
  </tr>
  <tr>
    <td height="23" align="left" bgcolor="#666666" class="b"><a href="adminuyeler.php">ÖNE ÇIKANLAR</a></td>
  </tr>
  <tr>
    <td height="157" align="center" valign="top"><a href="admin.php"><img src="logo.png" width="130" height="65"></a></td>
  </tr>
</table>
<br />
<table width="790" border="0" align="center">
  <tr>
    <td width="222" align="center" bgcolor="#3399FF"><strong>Fotoğraf Adresi</strong></td>
    <td width="197" align="center" bgcolor="#3399FF"><strong>Fotoğraf Başlığı</strong></td>
    <td width="190" align="center" bgcolor="#3399FF"><strong>Sil</strong></td>
    <td width="163" align="center" bgcolor="#3399FF"><strong>Güncelle</strong></td>
  </tr>
  <?php 
	  $sorgu=mysqli_query($baglan1,"Select *From slider");
	  while($db=mysqli_fetch_array($sorgu)){
	  ?>
  <form id="form2" name="form1" method="post" action="actionyonetim.php">
    <tr>
      <td align="center"><label for="textfield4"></label>
        <input type="text" name="textfield2" id="textfield4" value="<?=$db['foto_adres'];?>"/></td>
      <td align="center"><label for="textfield5"></label>
        <input type="text" name="textfield3" id="textfield5" value="<?=$db['foto_baslik'];?>"/></td>
      <td align="center"><a href="slidersil.php?id=<?=$db['id'];?>">Sil</a></td>
      <td align="center"><a href="sliderguncelle.php?id=<?=$db['id'];?>">Güncelle</a></td>
    </tr>
    <?php }?>
  </form>
</table>
<p>&nbsp;</p>
