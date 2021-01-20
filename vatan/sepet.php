<?php
if(isset($_COOKIE['guvenlik'])){}else{header('location: uye_giris.php');}
include('baglan.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:588px;
	height:115px;
	z-index:1;
	left: 589px;
	top: 14px;
	color: #00F;
	font-family: "Comic Sans MS", cursive;
}
body,td,th {
	font-size: 18px;
	color: #00F;
}
.baslikk {color:#003277;
	font-family:Verdana, Geneva, sans-serif;
	font-size:36px;
}
.kopru1 {color:green;
}
body {
	background-image: url(gg.jpg);
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="action.php">
  <table width="1068" height="613" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="216" height="70" bgcolor="#FFFFFF"><a href="index.php"><img src="image/logo.png" alt="" width="210" height="100" align="baseline" /></a></td>
      <td width="846" bgcolor="#CCFFFF"><table width="848" height="88" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="461" rowspan="2" bgcolor="#CCFFFF"><span class="baslikk">www.vatanbilgisayar.com</span></td>
            <td width="119" bgcolor="#CCFFFF"><img src="image/iletisim.png" alt="" width="30" height="30" align="right" /></td>
            <td width="128" bgcolor="#CCFFFF">0850 222 56 56</td>
            <td width="130" bgcolor="#CCFFFF"><a href="iletisim.php" class="kopru1">İletişim </a>|<a href="uyekayit.php" class="kopru1"> Üye Ol</a></td>
          </tr>
          <?php  
		  $baglan1 = $_SESSION["baglan"];
    $mail=$_COOKIE['guvenlik'];
	 $sorgu=mysqli_query($baglan1,"Select * from uyekayit where email='$mail'");
	while ($vt=mysqli_fetch_array($sorgu)){
		$ad=$vt['ad'];
		$soyad=$vt['soyad'];//bu ve alttaki uyeid ye kadar olan kısmı çekmesekte olur sadece ad olan kısmı kullanıyoruz bu sayfada
		$email=$vt['email'];//burdaki maili aşağıdaki sorguda kullanıyoruz
		$dogum=$vt['dogum'];
		$cinsiyet=$vt['cinsiyet'];
	    $adres=$vt['adres'];
		$sifre=$vt['sifre'];
		$cep=$vt['cep'];
		$uye=$vt['uyeid'];// buraya kadar
	 ?>
          <tr>
            <td align="right" bgcolor="#CCFFFF"><img src="image/sepet.png" alt="" width="50" height="40" /></td>
            <td colspan="2" align="right" bgcolor="#CCFFFF">SEPETİM(0 ÜRÜN) <br />
Hoşgeldin <a href="profilguncelle.php?mail='<?php echo $email;  ?>'">
<?=$ad;?> 
</a> <?php // emaile göre o kişinin adını çekiyoruz ve hoşgeldinin yanına yazdırıyoruz ?></td>
          </tr>
      </table>
  
     </td>
    </tr>
    <tr>
      <td align="center" valign="top"><table width="218" height="152" border="1" cellpadding="0" cellspacing="0">
        <tr>
          <td bgcolor="#CCFFFF"><a href="profilguncelle.php?mail='<?php echo $email;  ?>'" >Üye Bilgilerim</a></td>
        </tr>
        <tr>
          <td bgcolor="#CCFFFF"><a href="sepet.php?mail='<?php echo $email;  ?>'">Sepetim</a></td>
        </tr>
        <tr>
          <td bgcolor="#CCFFFF"><a href="cikis.php">Çıkış</a></td>
        </tr>
      </table></td>
      <td align="center">
   
      <table width="549" height="150" border="1" cellpadding="0" cellspacing="0">
        <tr>
          <td width="223">Ürün Adı</td>
          <td width="210">Ürün Fiyatı</td>
          <td width="108">Ürün Onay</td>
        </tr>
        <?php
		$sorgu=mysqli_query($baglan1,"select * from uyekayit where email='$email'") or die(mysql_error());
	$id = 0;
	   while($oku=mysqli_fetch_array($sorgu)){
		   $id = $oku['uyeid'];
	   }
        $sorgu=mysqli_query($baglan1,"select * from sepetim where kisi_id=$id") or die(mysql_error());
   while($oku=mysqli_fetch_array($sorgu)){
   ?>
        <form id="form1" name="form1" method="post" action="action.php">
        <tr>
          <td><?php echo $oku['urun_ad']; ?></td>
          <td><p>
            <label for="onay"><?php echo $oku['urun_fiyat']; ?></label>
          </p></td>
          <td><p>
              <span><?php if($oku['onay'] == '1') echo 'Onaylandi';else echo 'Onaylanmadi'?></span>
          </p>          
        </tr>
  </form>
  <?php }?>
      </table>

      <?php }?>
      </td>
    </tr>
    
  </table>
  <br />
  <table width="1074" height="328" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="239" align="center" bgcolor="#999999">Sosyal Medya</td>
      <td width="533" align="center" bgcolor="#999999"><img src="image/iconlar.png" alt="" width="345" height="62" /></td>
      <td width="294" bgcolor="#999999">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#999999"><br />
        <span id="yeni">Kategoriler</span></br>
Notebook<br />
Cep Telefonu<br />
Tablet PC<br />
Akıllı Saat </span></td>
      <td align="center" bgcolor="#999999"><span id="yeni2"><br />
Kategoriler</span><br />
Küçük Ev Aletleri<br />
Kişisel Bakım Ürünleri<br />
Süpürge<br />
Ütü </span></td>
      <td align="center" bgcolor="#999999"><br />
Hakkımızda<br />
Servis Takip<br />
Müşteri Hizmetleri<br />
Sipariş Aşamaları<br />
Sık Sorulan Sorulan<br />
İnsan Kaynakları<br />
İletişim </td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#999999">Türkiye’nin Teknoloji Hiperstoru <br />
Copyright&copy;      Vatan Bilgisayar San. ve Tic. A.Ş. <img src="image/iletisim.png" alt="" width="30" height="30" /> 0850 222 56 56</td>
      <td bgcolor="#999999">Powered by  Ramazan Emre Tarık  Kardeşler</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>