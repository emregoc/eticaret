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
    <td width="1026" colspan="3" rowspan="8" valign="top"><form id="form1" name="form1" method="post" action="actionyonetim.php">
      <table width="347" border="1" align="center">
        <tr>
          <td width="150" bgcolor="#0099FF"><strong>Ad</strong></td>
          <td width="181"><label for="textfield"></label>
            <input type="text" name="textfield" id="textfield" /></td>
        </tr>
        <tr>
          <td bgcolor="#0099FF"><strong>Soyad</strong></td>
          <td><input type="text" name="textfield2" id="textfield2" /></td>
        </tr>
        <tr>
          <td bgcolor="#0099FF"><strong>E-Mail</strong></td>
          <td><input type="text" name="textfield3" id="textfield3" /></td>
        </tr>
        <tr>
          <td bgcolor="#0099FF"><strong>Doğum Tarihi</strong></td>
          <td><input type="text" name="textfield4" id="textfield4" /></td>
        </tr>
        <tr>
          <td bgcolor="#0099FF"><strong>Şifre</strong></td>
          <td><input type="password" name="textfield5" id="textfield5" /></td>
        </tr>
        <tr>
          <td bgcolor="#0099FF"><strong>Cinsiyet</strong></td>
          <td><label for="select"></label>
            <select name="select" id="select">
              <option>Erkek</option>
              <option>Bayan</option>
            </select></td>
        </tr>
        <tr>
          <td bgcolor="#0099FF"><strong>Cep Telefonu</strong></td>
          <td><input type="text" name="textfield6" id="textfield6" /></td>
        </tr>
        <tr>
          <td bgcolor="#0099FF"><strong>Adres</strong></td>
          <td><label for="textarea"></label>
            <textarea name="textarea" id="textarea" cols="22" rows="2"></textarea></td>
        </tr>
        <tr>
          <td><input name="islem" type="hidden" id="islem" value="uyeekle" /></td>
          <td><input type="submit" name="button" id="button" value="Ekle" /></td>
        </tr>
      </table>
    </form>
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
    <td height="157" align="center" valign="top"><a href="admin.php"><img src="logo.png" width="130" height="65"></a></td>
  </tr>
</table>
<br />
<br />
<form id="form2" name="form2" method="post" action="uyesil.php">
  <table width="1010" border="1" align="center">
    <tr>
      <td width="39" align="center" bgcolor="#0099FF"><strong>Id</strong></td>
      <td width="51" align="center" bgcolor="#0099FF"><strong>Ad</strong></td>
      <td width="43" align="center" bgcolor="#0099FF"><strong>Soyad</strong></td>
      <td width="78" align="center" bgcolor="#0099FF"><strong>E-Mail</strong></td>
      <td width="182" align="center" bgcolor="#0099FF"><strong>Doğum Tarihi</strong></td>
      <td width="105" align="center" bgcolor="#0099FF"><strong>Şifre</strong></td>
      <td width="161" align="center" bgcolor="#0099FF"><strong>Cinsiyet</strong></td>
      <td width="136" align="center" bgcolor="#0099FF"><strong>Cep Telefonu</strong></td>
      <td width="157" align="center" bgcolor="#0099FF"><strong>Adres</strong></td>
      <td width="157" align="center" bgcolor="#0099FF"><strong>Sil</strong></td>
      <td width="157" align="center" bgcolor="#0099FF"><strong>Güncelle</strong></td>
    </tr>
    <?php
	$baglan1 = $_SESSION["baglan"];
	 $sorgu=mysqli_query($baglan1,"Select*from uyekayit");
	while($db=mysqli_fetch_array($sorgu)){
	 ?>
    <tr>
      <td><label for="textfield7"></label>
      <input name="textfield7" type="text" id="textfield7" size="10" value="<?=$db['uyeid'];?>"/></td>
      <td><label for="textfield8"></label>
      <input type="text" name="textfield8" id="textfield8" value="<?=$db['ad'];?>"/></td>
      <td><input type="text" name="textfield9" id="textfield9" value="<?=$db['soyad'];?>"/></td>
      <td><input type="text" name="textfield10" id="textfield10" value="<?=$db['email'];?>"/></td>
      <td><input type="text" name="textfield11" id="textfield11" value="<?=$db['dogum'];?>"/></td>
      <td><input type="text" name="textfield12" id="textfield12" value="<?=$db['sifre'];?>"/></td>
      <td><input name="textfield13" type="text" id="textfield13"value="<?=$db['cinsiyet'];?>" size="15" /></td>
      <td><input type="text" name="textfield14" id="textfield14" value="<?=$db['cep'];?>"/></td>
      <td><label for="textarea2"></label>
      <textarea name="textarea2" id="textarea2" cols="30" rows="1"><?=$db['adres'];?>
      </textarea></td>
      <td><a href="uyesil.php?id=<?=$db['uyeid'];?>">Sil
        <input name="islemm" type="hidden" id="islemm" value="uyesil" />
      </a></td>
      <td><a href="uyeguncelle.php?id=<?=$db['uyeid'];?>">Güncelle</a></td>
    </tr><?php } ?>
  </table>
</form>
<p>&nbsp;</p>
