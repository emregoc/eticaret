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
  <td height="30" colspan="2" align="center" bgcolor="#000000" style="color: #F00; font-weight: bold;">YÖNETİCİ PANELİ ÖNE ÇIKANLAR</td></tr>
  <tr>
    <td width="108" height="23" align="center" bgcolor="#003277" id="a">TABLOLAR</td>
    <td width="1027" colspan="3" rowspan="8" align="center" valign="top"><form id="form1" name="form1" method="post" action="actionyonetim.php">
      <p><strong><em>Seçilen Öne Çıkan Ürün Onayı</em></strong></p>
      <table width="329" border="1">
    
      <?php
	$baglan1 = $_SESSION["baglan"];
	
	if(isset($_GET['id'])) //isset kod çalışıyor olsa bile kodun içinde bilgi tutulmadıgı zaman hata verir ve bu gereksiz bir                            hatadır (undefined index hatası) ve isset gereksiz hataları yok eder
	{
	$id=$_GET['id'];//aşağıda link verinlen "Seç" e basıldıgında url ye id gidiyor ve urlden o id yi çekiyor

	 $sorgu=mysqli_query($baglan1,"Select*from urunler where urun_id='$id'");//seçilen ürün bilgileri listeleniyor
		  while ($db=mysqli_fetch_array($sorgu)){
		   ?>
        <tr>
          <td width="144"><label for="textfield"></label>
            <input name="textfield" type="text" id="textfield" value="<?=$db['urun_id']?>" /></td>
          <td width="57"><input name="textfield2" type="text" id="textfield2" value="<?=$db['urun_adi'];?>" /></td>
          <td width="66"><input name="textfield3" type="text" id="textfield3" value="<?=$db['urun_fiyati'];?>" /></td>
          <td width="66"><input type="submit" name="button2" id="button2" value="Onayla" /> <?php // butona basıldıgında actionyonetim.php
		  //sayfasına giderek alttaki hidden sayesinde ürün id ye göre seçilen ürünü öne çıkan yapıyor?>
          
          <input name="islem" type="hidden" id="islem" value="onecikan" />
        <input name="islem2" type="hidden" id="islem2" value="<?=$db['urun_id'];?>" />
        </td>
        </tr>
        <?php }}?>
    
      </table>
      <p><strong><em>Seçilen Öne Çıkan Ürünler
        
      </em></strong></p>
      <table width="329" border="1">
        <?php
	$baglan1 = $_SESSION["baglan"];
	
	 $sorgu=mysqli_query($baglan1,"Select*from urunler where one_cikan_urun='1'");//one cikan ürünlerin bilgileri listeleniyor
		  while ($db=mysqli_fetch_array($sorgu))
		  {
		   ?>
        <tr>
          <td width="144"><label for="textfield"></label>
            <input name="textfield4" type="text" id="textfield" value="<?=$db['urun_id']?>" /></td>
          <td width="57"><input name="textfield4" type="text" id="textfield4" value="<?=$db['urun_adi'];?>" /></td>
          <td width="66"><input name="textfield4" type="text" id="textfield5" value="<?=$db['urun_fiyati'];?>" /></td>
          
        </tr>
        <?php }?>
      </table>
      <p></p>
    </form>

      <p>&nbsp;</p>
      
      <p></p>    
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
    <td height="23" align="left" bgcolor="#666666" class="b"><a href="adminonecikan.php">ÖNE ÇIKANLAR</a></td>
  </tr>
  <tr>
    <td height="212" align="center" valign="top"><a href="admin.php"><img src="logo.png" width="130" height="65"></a></td>
  </tr>
</table>
<form id="form2" name="form2" method="post" action="actionyonetim.php">
<table width="1154" border="0" align="center">
    <tr>
      <td width="60" align="center" bgcolor="#0099CC"><strong>Urun Id</strong></td>
      <td width="120" align="center" bgcolor="#0099CC"><strong>Eklenme Tarihi</strong></td>
      <td width="165" align="center" bgcolor="#0099CC"><strong>Ürün Menü Kategorisi</strong></td>
      <td width="159" align="center" bgcolor="#0099CC"><strong>Ürün Alt Kategorisi</strong></td>
      <td width="150" align="center" bgcolor="#0099CC"><strong>Fotoğraf Adı</strong></td>
      <td width="149" align="center" bgcolor="#0099CC"><strong>Ürün Adı</strong></td>
      <td width="206" align="center" bgcolor="#0099CC"><strong>Ürün Özellikleri</strong></td>
      <td width="90" align="center" bgcolor="#0099CC"><strong>Ürün Fiyatı</strong></td>
      <td width="17" align="center" bgcolor="#0099CC"><strong>Seç</strong></td>
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
      <td align="center"><a href="adminonecikan.php?id=<?=$db['urun_id'];?>"><?php // url ye seçilen ürünün id sini gönderiyor
	  // ve bu sayede get komutu ile url den gönderilen değeri çekebiliyoruz ?>
        <p>Seç</p>
      </a></td>
  
    </tr>
    <?php }?>
  </table>
</form>
