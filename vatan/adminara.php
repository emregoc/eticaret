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
    <td width="108" height="23" align="center" bgcolor="#003277" id="a">TABLOLAR</td>
    <td width="1027" colspan="3" rowspan="5" align="center" valign="top"><form id="form1" name="form1" method="post" action="actionyonetim.php">
      <p>&nbsp;</p>
      <p>ARAMA SAYFASI</p>
      <p>&nbsp;</p>
  </form></tr>
    
  <tr>
    <td height="23" align="left" bgcolor="#666666" id="b"><a href="adminslider.php">SLAYT</a></td>
  </tr>
  <tr>
    <td height="23" align="left" bgcolor="#CCCCCC" class="b"><a href="adminurunler.php">ÜRÜNLER</a></td>
  </tr>
  <tr>
    <td height="23" align="left" bgcolor="#666666" class="b"><a href="adminuyeler.php">ÜYELER</a></td>
  </tr>
  <tr>
    <td height="212" align="center" valign="top"><img src="logo.png" width="130" height="65"></td>
  </tr>
</table>
<form id="form2" name="form2" method="post" action="actionyonetim.php">
<table width="1200" border="0" align="center">
    <tr>
      <td width="60" align="center" bgcolor="#0099CC"><strong>Urun Id</strong></td>
      <td width="120" align="center" bgcolor="#0099CC"><strong>Eklenme Tarihi</strong></td>
      <td width="165" align="center" bgcolor="#0099CC"><strong>Ürün Menü Kategorisi</strong></td>
      <td width="159" align="center" bgcolor="#0099CC"><strong>Ürün Alt Kategorisi</strong></td>
      <td width="150" align="center" bgcolor="#0099CC"><strong>Fotoğraf Adı</strong></td>
      <td width="149" align="center" bgcolor="#0099CC"><strong>Ürün Adı</strong></td>
      <td width="206" align="center" bgcolor="#0099CC"><strong>Ürün Özellikleri</strong></td>
      <td width="90" align="center" bgcolor="#0099CC"><strong>Ürün Fiyatı</strong></td>
      <td width="17" align="center" bgcolor="#0099CC"><strong>Sil</strong></td>
      <td width="61" align="center" bgcolor="#0099CC"><strong>Güncelle</strong></td>
    </tr>
    <?php
	$baglan1 = $_SESSION["baglan"];
		if(isset($_POST['ara']))
		{
  $aranan = $_POST['kelime'];
  $sorgu = mysqli_query($baglan1,"SELECT * FROM urunler WHERE urun_adi like '%$aranan%' or urun_alt_kategori like '%$aranan%' or urun_ozellikleri like '%$aranan%' order by urun_id DESC");
  while($dr = mysqli_fetch_array($sorgu)){
  ?>
    <tr>
      <td><label for="textfield13"></label>
        <input name="textfield13" type="text" id="textfield13" value="<?=$dr['urun_id']?>" size="10" /></td>
      <td><label for="textfield7"></label>
        <input name="textfield7" type="text" id="textfield7" size="20"value="<?=$dr['ekleme_tarihi'];?>" /></td>
      <td><label for="textfield8"></label>
        <input name="textfield8" type="text" id="textfield8"value="<?=$dr['urun_menu_kategori'];?>" /></td>
      <td><label for="textfield9"></label>
        <input type="text" name="textfield9" id="textfield9" value="<?=$dr['urun_alt_kategori'];?>"/></td>
      <td><label for="textfield10"></label>
        <input type="text" name="textfield10" id="textfield10" value="<?=$dr['foto_yol'];?>"/></td>
      <td><label for="textfield11"></label>
        <input type="text" name="textfield11" id="textfield11" value="<?=$dr['urun_adi'];?>"/></td>
      <td><label for="textarea2"></label>
        <textarea name="textarea2" id="textarea2" cols="30" rows="1" value=""><?=$dr['urun_ozellikleri'];?></textarea>
        <br />
        <label for="textfield12"></label></td>
      <td><label for="textfield12"></label>
        <input name="textfield12" type="text" id="textfield12" size="15" value="<?=$dr['urun_fiyati'];?>" /></td>
      <td align="center"><a href="urunsil.php?id=<?=$dr['urun_id'];?>">Sil</a></td>
      <td align="center"><a href="urunguncelle.php?id=<?=$dr['urun_id'];?>">Güncelle</a></td>
    </tr>
    <?php }}?>
  </table>
