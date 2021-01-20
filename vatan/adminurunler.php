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
    <td width="1027" colspan="3" rowspan="8" align="center" valign="top"><form id="form1" name="form1" method="post" action="actionyonetim.php">
      <table width="369" border="1" align="center">
        <tr>
          <td width="135" bgcolor="#0099CC">Ekleme Tarihi</td>
          <td width="218"><label for="textfield"></label>
            <input type="text" name="textfield" id="textfield" /></td>
        </tr>
        <tr>
          <td bgcolor="#0099CC">Ürün Menü Kateogori</td>
          <td><label for="select"></label>
            <select name="select" id="select">
              <option>aksesuar</option>
              <option>oyun</option>
              <option>ceptel</option>
              <option>bilgisayar</option>
              <option>bilgisayarparca</option>
              <option>fotokamera</option>
              <option>tv</option>
              <option>ofis</option>
              <option>evaletleri</option>
            </select></td>
        </tr>
        <tr>
          <td bgcolor="#0099CC">Ürün Alt Kategori</td>
          <td><label for="select2">
            <input type="text" name="textfield2" id="textfield2" />
          </label></td>
        </tr>
        <tr>
          <td bgcolor="#0099CC">Fotoğraf adı(.PNG)</td>
          <td><input type="file" name="textfield4" id="textfield4" /></td>
        </tr>
        <tr>
          <td bgcolor="#0099CC">Ürün Adı</td>
          <td><input type="text" name="textfield5" id="textfield5" /></td>
        </tr>
        <tr>
          <td bgcolor="#0099CC">Ürün Özellikleri</td>
          <td><label for="textarea"></label>
            <textarea name="textarea" id="textarea" cols="22" rows="5"></textarea></td>
        </tr>
        <tr>
          <td bgcolor="#0099CC">Ürün Fiyatı</td>
          <td><input type="text" name="textfield6" id="textfield6" /></td>
        </tr>
        <tr>
          <td height="28"><input name="islem" type="hidden" id="islem" value="urunekle" /></td>
          <td align="left"><input type="submit" name="button" id="button" value="Ekle" /></td>
        </tr>
      </table>
      <p>&nbsp;</p>
</form>

      <p>&nbsp;</p>
      <form id="form2" name="form2" method="post" action="adminara.php">
        ÜRÜN ARAMAK İÇİN ÜRÜN ADI GİRİNİZ =
        <label for="textfield"></label>
        <input type="text" name="kelime" id="textfield" />
        <input type="submit" name="ara" id="ara" value="ARA" />
      </form>
      <p></p>    </tr>
    
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
    <td height="23" align="left" bgcolor="#666666" class="b"><a href="adminonecikan.php">ÖNE ÇIKANLAR</a></td>
  </tr>
  <tr>
    <td height="212" align="center" valign="top"><a href="admin.php"><img src="logo.png" width="130" height="65"></a></td>
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
	 $sorgu=mysqli_query($baglan1,"Select*from urunler");
		  while ($db=mysqli_fetch_array($sorgu)){
		   ?>
    <tr>
      <td><label for="textfield13"></label>
        <input name="textfield13" type="text" id="textfield13" value="<?=$db['urun_id']?>" size="10" /></td>
      <td><label for="textfield7"></label>
        <input name="textfield7" type="text" id="textfield7" size="20"value="<?=$db['ekleme_tarihi'];?>" /></td>
      <td><label for="textfield8"></label>
        <input name="textfield8" type="text" id="textfield8"value="<?=$db['urun_menu_kategori'];?>" /></td>
      <td><label for="textfield9"></label>
        <input type="text" name="textfield9" id="textfield9" value="<?=$db['urun_alt_kategori'];?>"/></td>
      <td><label for="textfield10"></label>
        <input type="text" name="textfield10" id="textfield10" value="<?=$db['foto_yol'];?>"/></td>
      <td><label for="textfield11"></label>
        <input type="text" name="textfield11" id="textfield11" value="<?=$db['urun_adi'];?>"/></td>
      <td><label for="textarea2"></label>
        <textarea name="textarea2" id="textarea2" cols="30" rows="1" value=""><?=$db['urun_ozellikleri'];?></textarea>
        <br />
        <label for="textfield12"></label></td>
      <td><label for="textfield12"></label>
        <input name="textfield12" type="text" id="textfield12" size="15" value="<?=$db['urun_fiyati'];?>" /></td>
      <td align="center"><a href="urunsil.php?id=<?=$db['urun_id'];?>">Sil</a></td>
      <td align="center"><a href="urunguncelle.php?id=<?=$db['urun_id'];?>">Güncelle</a></td><?php //seçilen ürünün id sini url aracılıgıyla urunguncelle sayfasına gönderiyoruz ve ordanda get ile çekiyoruz // ?>
    </tr>
    <?php }?>
  </table>
