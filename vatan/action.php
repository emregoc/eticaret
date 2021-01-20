<?php
if(isset($_COOKIE['guvenlik'])){}else{header('location: uye_giris.php');}//isset kod çalışıyor olsa bile kodun içinde bilgi tutulmadıgı zaman hata verir ve bu gereksiz bir hatadır(undefined index hatası) ve isset gereksiz hataları yok eder
include('baglan.php');

$baglan1 = $_SESSION["baglan"];

$gelen=$_POST['action']; // burdaki action hidden layerin ismi
if($gelen=='entrance'){ // gelen değer entrance(giriş) ise
	$user=$_POST['ad'];//uye giris sayfasindaki ilk texboxun adi
	$pass=$_POST['sifre'];//uye giris sayfasindaki ikinci texboxun adi
	$sorgu=mysqli_query($baglan1,"select * from uyekayit where email='$user' and sifre='$pass'");
	if(mysqli_num_rows($sorgu)){
		setcookie('guvenlik',$user);
		header("location: index.php");
		}else{
			header('location: uye_giris.php');
			}
		
					}
$gelen=$_POST['yonetici'];
if($gelen=='giris'){
	$user=$_POST['ad'];
	$pass=$_POST['sifre'];
	$sorgu=mysqli_query($baglan1,"select * from yoneticikayit where email='$user' and sifre='$pass'");
	if(mysqli_num_rows($sorgu)){
		setcookie('guvenlik',$user);
		header('location: admin.php');
		}else{
			header('location: yonetici_giriss.php');
			}
					}
				
$gelen=$_POST['guncelle'];
if($gelen=='guncelle'){
$uyeid=$_POST['uyeid'];
$ad=$_POST['textfield'];
$soyad=$_POST['textfield2'];
$email=$_POST['textfield3'];
$cep=$_POST['textfield4'];
$dogum=$_POST['textfield5'];
$cinsiyet=$_POST['textfield6'];
$adres=$_POST['textarea'];
mysqli_query($baglan1,"UPDATE uyekayit SET ad='$ad',soyad='$soyad',email='$email',cep='$cep',dogum='$dogum',cinsiyet='$cinsiyet',adres='$adres' where uyeid=$uyeid ");
header ("location: profilguncelle.php?mail='$email'");
}
		else if(isset($_POST['yorum_btn'])){
			$idddd=$_POST['id'];//üründetaykopya sayfasındaki urun id ye göre belirlenen hidden ismi
			$yorum=$_POST['yorum']; //üründetaykopya sayfasındaki yapılan yorum toolboxun  ismi
			$ad=$_POST['ad'];// üründetaykopya sayfasındaki yorum yapanan kisinin ismini yazdıgı toolboxun ismi
			mysqli_query($baglan1,"insert into yorumlar values('','$idddd','$ad','$yorum','','')");
			header('location: urun_detaykopya.php?urun_id='.$idddd.'');// hangi ürüne yorum yapıldıysa o ürünün id sine göre tekrar -
			}                                                          // üründetaykopya sayfasına yönlendiriyor
			//YORUM ONAY
				else if (isset ($_POST['yorum_onay_btn']))
				{
					$yorum_id=$_POST['idd'];//yorumonay sayfasındaki yorum id sine göre belirlenen hidden ismi 
					$yorum_onay=$_POST['onay'];//yorumonay sayfasındaki 0-1 i seçmemize sağlayan toolbox un ismi 
					mysqli_query($baglan1,"update yorumlar set onay=$yorum_onay where id=$yorum_id"); // yorum onayını yorum id ye göre 1 veya 0 olarak günceller. yorum id ve ürün id birbiriyle ilişkili
					header("location: yorum_onay.php");
					}
					
					
					else if (isset ($_POST['sepet_ekle_btn']))//bu else if kullanıcı id ye göre sepete eklenen ürünlerin kodu
					{
						 $urun_id=$_POST['idd'];//üründetaykopya sayfasındaki hidden
	                       $ad=$_POST['add'];//üründetaykopya sayfasındaki hidden
$fiyat=$_POST['fiyatt'];//üründetaykopya sayfasındaki hidden
$kisi_mail = $_COOKIE['guvenlik'];// giriş yapan kişinin yukarda mail bilgileri cookie sayesinde tutuldugu için maile atıyoruz
$sorgu=mysqli_query($baglan1,"select * from uyekayit where email='$kisi_mail'") or die(mysql_error());
$id = 0;
   while($oku=mysqli_fetch_array($sorgu))
   {
	   $id = $oku['uyeid'];//veritabanındaki üye id'yi $id'ye atıyoruz
   }
mysqli_query($baglan1,"insert into sepetim value('',$id,'$urun_id','$ad','$fiyat','0')");
header('location:index.php'); // kullanıcının id sine göre seçtiği ürün sepete ekleniyor
                     }
					 
					 
					 
else if (isset ($_POST['sepet_onay_btn'])){
					$urun_id=$_POST['idd'];
					$urun_onay=$_POST['onay'];
					$onay = 0;
					if(trim($urun_onay) == 'Onaylandi') $onay = 1;
					mysqli_query($baglan1,"update sepetim set onay=$onay where urun_idd=$urun_id");
					header("location: sepetim.php");
					}				 
					
?>