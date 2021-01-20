<?php
if(isset($_COOKIE['guvenlik'])){}else{header('location: uye_giris.php');}
include('baglan.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>
<title>Vatan Bilgisayar</title>
<link href="css/stipl.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#logo {
	background-color: #CCC;
	float: left;
	height: 100px;
	width: 210px;
}
#ustcizgi {
	background-color: #003277;
	height: 5px;
	width: auto;
}
#govde {
	background-color: #CCC;
	height: 500px;
	width: 1000px;
	margin-right: auto;
	margin-left: auto;
}
#gunurun {
	background-color: #CCC;
	float: none;
	height: 500px;
	width: 300px;
	margin-right: auto;
	margin-left: auto;
}
#icerik {
	background-color: #99F;
	float: right;
	height: 500px;
	width: 790px;
}
#menu {
	background-color: #003277;
	float: left;
	height: 500px;
	width: 210px;
}
a {
}
#bilicon {
	float: left;
	height: 40px;
	width: 40px;
}
#icon3 {
	float: left;
	height: 40px;
	width: 40px;
}
#icon4 {
	float: left;
	height: 40px;
	width: 40px;
}
#icon5 {
	float: left;
	height: 40px;
	width: 40px;
}
#icon6 {
	float: left;
	height: 40px;
	width: 40px;
}
#icon7 {
	float: left;
	height: 40px;
	width: 40px;
}
#icon8 {
	float: left;
	height: 40px;
	width: 40px;
}
#icon9 {
	float: left;
	height: 40px;
	width: 40px;
}
#menubaslik {
	background-color: #333;
	height: 30px;
	width: 210px;
	text-align: center;
	font-size: 20px;
	color: #FFF;
	font-family: "Comic Sans MS", cursive;
	font-weight: bold;
}
#menu a {
	color: #000;
	font-family: Tahoma, Geneva, sans-serif;
	display: block;
	background-image: none;
	height: 40px;
	text-decoration: none;
}
#telicon {
	float: left;
	height: 40px;
	width: 40px;
}
#menu a:hover {
	color: #003277;
	font-family: Tahoma, Geneva, sans-serif;
	display: block;
	background-image: none;
	font-size: 14px;
	background-color: #FFF;
}
.kopru:hover{
	text-decoration:underline;
	color:#036;
	}
.kopru{
	color:green;
	}	
font {
	font-family: "Comic Sans MS", cursive;
	font-size: 10px;
	font-style: normal;
	color: #FFF;
}
#gunicerik {
	height: 450px;
	width: 300px;
	float: left;
}
li {
	list-style-type: none;
	display: block;
	margin-left: 0px;
	padding-left: 0px;
	background-color: #CCC;
}
#onecikanicerik {
	height: 450px;
	width: 700px;
	float: right;
}
ul {
	padding-left: 0px;
}
font {
	color: #FFF;
}
#font {
	color: #FFF;
	font-weight: bold;
	font-family: "Comic Sans MS", cursive;
}
#footer1 {
	background-color: #FFF;
	height: 500px;
	width: 1000px;
	float: none;
	margin-right: auto;
	margin-left: auto;
}
#onecikan {
	float: right;
	height: 500px;
	width: 700px;
}
#gunurun {
	float: left;
	height: 500px;
	width: 300px;
	background-color: #FFF;
}
#onecikanicerikk {
	float: right;
	height: 450px;
	width: 700px;
}
#baslikgun {
	color: #FFF;
	background-color: #333;
	float: left;
	height: 30px;
	width: 300px;
	font-weight: bold;
	text-align: center;
}
#baslikonecikan {
	color: #FFF;
	background-color: #333;
	float: right;
	height: 30px;
	width: 695px;
	text-align: center;
	font-weight: bold;
}
font {
	font-weight: bold;
	color: #F00;
	font-size: 24px;
}
#font {
	font-size: 12px;
	color: #000;
}
#footer2 {
	background-color: #003277;
	height: 3px;
	width: auto;
}
#sonfooter {
	background-color: #CCC;
	height: 500px;
	width: 1000px;
	margin-right: auto;
	margin-left: auto;
	text-align: left;
}
.baslikk {	color:#003277;
	font-family:Verdana, Geneva, sans-serif;
	font-size:36px;
}
.kopru1 {	color:green;
}
</style>
</head>

<body>
<div id="ust">
  <div id="logo"><a href="index.php"><img src="image/logo.png" alt="" width="210" height="100" align="baseline" /></a></div>
  <table width="790" height="100" border="0">
    <tr>
      <td width="482" rowspan="2" align="center" valign="top"><br />
        <br />
        <span class="baslikk">www.vatanbilgisayar.com
          </form>
          </form>
          </form>
        </span></td>
      <td height="52" colspan="2"><table width="298" border="0" align="right">
        <tr>
          <td width="57" align="right"><img src="image/iletisim.png" alt="" width="30" height="30" align="right" /></td>
          <td width="89" align="right">0850 222 56 56</td>
          <td width="138"><a href="iletisim.php" class="kopru1">İletişim </a>|<a href="uyekayit.php" class="kopru1"> Üye Ol</a></td>
        </tr>
      </table>
      <?php  
    $mail=$_GET['mail'];
	 $sorgu=mysql_query("Select *from uyekayit where email=$mail");
	while ($vt=mysql_fetch_array($sorgu)){
		$ad=$vt['ad'];
		$soyad=$vt['soyad'];
		$email=$vt['email'];
		$dogum=$vt['dogum'];
		$cinsiyet=$vt['cinsiyet'];
		$adres=$vt['adres'];
		$sifre=$vt['sifre'];
		$cep=$vt['cep'];
		$uye=$vt['uyeid'];
	 ?>
        <br /></td>
    </tr>
    <tr>
      <td width="84" height="42" align="right"><img src="image/sepet.png" alt="" width="50" height="40" /></td>
      <td width="210" align="center">SEPETİM(0 ÜRÜN) <br />
        Hoşgeldin <a href="profil.php?mail='<?php echo $email;  ?>'"> <?=$ad;?></a><br />        
      <br /></td>
    </tr>
  </table>
</div>
<div id="ustcizgi"></div>
<div id="govde">
  <div id="menu">
    <div id="menubaslik">ÜRÜNLER</div>
    <ul>
    
      <li><a href="profil.php?mail='<?php echo $email;  ?>'" >Üyelik Bilgilerim</a></li>
      <li><a href="siparislerim.php">Siparişlerim</a></li>
      <li><a href="cikis.php">Çıkış</a></li>
    </ul>
    <p>&nbsp;</p>
  </div>
  <div id="icerik"><center>
    <p>&nbsp;</p><form action="profilguncelle.php" method="POST">
    <table width="365" height="293" border="0">
      <tr>
        <td colspan="2"><h1>ÜYE BİLGİLERİ</h1></td>
        </tr>
      <tr>
        <td width="70" height="24" align="left">Adı</td>
        <td width="285"><label for="textfield"></label>
          <input name="textfield" type="text" id="textfield" value="<?=$ad;?>" /></td>
      </tr>
      <tr>
        <td height="24" align="left">Soyadı</td>
        <td><input name="textfield2" type="text" id="textfield2" value="<?=$soyad;?>" /></td>
      </tr>
      <tr>
        <td height="24" align="left">E-mail</td>
        <td><input name="textfield3" type="text" id="textfield3" value="<?=$email;?>" /></td>
      </tr>
      <tr>
        <td height="24" align="left">Cep Telefonu</td>
        <td><input name="textfield4" type="text" id="textfield4" value="<?=$cep;?>" /></td>
      </tr>
      <tr>
        <td height="24" align="left">Doğum Tarihi</td>
        <td><input name="textfield5" type="text" id="textfield5" value="<?=$dogum;?>" /></td>
      </tr>
      <tr>
        <td height="24" align="left">Cinsiyet</td>
        <td><input name="textfield6" type="text" id="textfield6" value="<?=$cinsiyet;?>" /></td>
      </tr>
      <tr>
        <td height="69" align="left">Adres</td>
        <td><label for="textarea"></label>
          <textarea name="textarea" id="textarea" cols="40" rows="4"><?=$adres;?>
          </textarea></td>
      </tr>
      <tr>
        <td><input name="gelen" type="hidden" id="gelen" value="guncelle" /></td>
        <td><input type="submit" name="button" id="button" value="güncelle" />
          <input name="uyeid" type="hidden" id="uyeid" value="<?=$uye;?>" /></td>
      </tr>
    </table><?PHP }?></form>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </center>
  </div>
</div>
</div>
<div id="footer2"></div>
<div id="sonfooter">
  <table width="1000" border="0">
    <tr>
      <td width="175" height="99" align="right">Sosyal Medya</td>
      <td width="397"><img src="image/iconlar.png" width="345" height="62" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="304" align="center" valign="top" bgcolor="#999999"><p><br />
      <span id="yeni">Kategoriler</span></br>
      Notebook<br />
      Cep Telefonu<br />
      Tablet PC<br />
      Akıllı Saat
      </span></p></td>
      <td align="center" valign="top" bgcolor="#999999"><br />
        <span id="yeni"><br />
        Kategoriler</span><br />
        Küçük Ev Aletleri<br />
        Kişisel Bakım Ürünleri<br />
        Süpürge<br />
        Ütü
      </span></td>
      <td width="414" align="center" valign="top" bgcolor="#999999" ><p><br />
        Hakkımızda<br />
        Servis Takip<br />
        Müşteri Hizmetleri<br />
        Sipariş Aşamaları<br />
        Sık Sorulan Sorulan<br />
        İnsan Kaynakları<br />
        İletişim
        <br />
      </p></td>
    </tr>
    <tr>
      <td height="91" colspan="2" align="left" valign="top"><br />        <p>Türkiye’nin Teknoloji Hiperstoru <br />
      Copyright&copy;      Vatan Bilgisayar San. ve Tic. A.Ş. <img src="image/iletisim.png" alt="" width="30" height="30" /> 0850 222 56 56</p></td>
      <td align="right" valign="middle"><br />
        <br />
        <br />
      Powered by  Ramazan Emre Tarık  Kardeşler</td>
    </tr>
  </table>
</div>
</body>
</html>