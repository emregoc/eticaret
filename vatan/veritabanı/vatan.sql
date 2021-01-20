-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 May 2016, 13:15:02
-- Sunucu sürümü: 5.6.26
-- PHP Sürümü: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `vatan`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepetim`
--

CREATE TABLE IF NOT EXISTS `sepetim` (
  `id` int(11) NOT NULL,
  `kisi_id` int(11) NOT NULL,
  `urun_idd` int(50) NOT NULL,
  `urun_ad` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` int(50) NOT NULL,
  `onay` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sepetim`
--

INSERT INTO `sepetim` (`id`, `kisi_id`, `urun_idd`, `urun_ad`, `urun_fiyat`, `onay`) VALUES
(8, 1, 92, 'OFFİCE MAC HOME 2016', 388, '1'),
(9, 1, 76, 'PHILIPS 3D LED TV', 3, '1'),
(10, 1, 64, 'PANOSONİC AYNASIZ FOTOĞRAF KAMERASI', 4, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL,
  `foto_adres` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `foto_baslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `foto_link` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `foto_adres`, `foto_baslik`, `foto_link`) VALUES
(1, '1.jpg', '1', '#'),
(2, '2.jpg', '2', '#'),
(3, '3.jpg', '3', '#'),
(4, '4.jpg', '4', '#');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE IF NOT EXISTS `urunler` (
  `urun_id` int(11) NOT NULL,
  `ekleme_tarihi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urun_menu_kategori` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urun_alt_kategori` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `foto_yol` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urun_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urun_ozellikleri` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyati` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `one_cikan_urun` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `ekleme_tarihi`, `urun_menu_kategori`, `urun_alt_kategori`, `foto_yol`, `urun_adi`, `urun_ozellikleri`, `urun_fiyati`, `one_cikan_urun`) VALUES
(1, '10/03/2016', 'aksesuar', '3dgozluk', '3dgozluk.PNG', 'PHİLİPS 3D GÖZLÜK', 'PTA529 PİLLİ AKTİF GÖZLÜK', '99 TL', '1'),
(2, '10/03/2016', 'aksesuar', 'aydinlatma_urunleri', 'aydinlatma.PNG', 'GOLDMASTER LED AMPUL', 'PC Plastik beyaz soğutma yüzeyi • A19, E27 Duylu, 220 V AC 50/60 Hz • 4000K DOĞAL BEYAZ • CE ve RoHS • 7 W (60W akkor eşiti ışık) • 300° aydınlatma açısı • CRI > 85 • SMD 2835 LED', '19.99 TL', '2'),
(3, '10/03/2016', 'aksesuar', 'baglanticihazlari', 'baglanticihazlariveceviriciler.PNG', 'TRUST 4 PORT USB 2.0', '20577 TRUST 4 PORT USB 2.0 BAĞLANTI NOKTASI', '29.90 TL', '3'),
(4, '10/03/2016', 'aksesuar', 'bataryalar', 'bataryalar.PNG', 'CANON BATARYA ŞARJ CİHAZI', 'CANON E10E BATARYA ŞARJ CİHAZI', '149.99 TL', '4'),
(5, '10/03/2016', 'aksesuar', 'cantavekiliflar', 'cantavekiliflar.PNG', 'NOTEBOOK ÇANTASI', 'CA.DLC115 15.6'''' NOTEBOOK ÇANTASI- (SİYAH)\nAksesuar Tipi	Notebook Aksesuarı\nMalzemesi	Kumaş\nEbat	15.6\nRenk	Siyah', '159.99 TL', '5'),
(22, '12/03/2016', 'oyun ', 'ps3oyunkonsolu', 'ps3oyunkonsolu.PNG', 'SONY PS3', 'SONY PS3 12GB Chassis EUR Black\nPlatform\nPlatform	PS3', '829 TL', ''),
(23, '12/03/2016', 'oyun ', 'ps4oyunkonsollari', 'ps4oyunkonsolu.PNG', 'SONY PS4', 'SONY Call Of Duty Black Ops III / PS4 1 TB C / TUR OYUN KONSOLU', '1.849 TL', ''),
(24, '12/03/2016', 'oyun ', 'tumoyunkonsollari', 'tumoyunkonsollari.PNG', 'MICROSOFT XBOX ', 'MICROSOFT XBOX 360 4GB KINECT + KINECT SPORTS +FORZA HORIZON + KINECT ADVENTURES', '999 TL', ''),
(27, '12/03/2016', 'oyun ', 'yenicikanoyunlar', 'yenicikanoyunlar.PNG', 'COMPANY OF HEROES 2', 'PC COMPANY OF HEROES 2 PLATINUM EDITION\nTeknik Özellikler\nYapımcı	Sega\nÖzellikleri\nOyun Türü	Strateji', '90 TL', ''),
(28, '13/03/2016', 'ceptel', 'ceptelefonlari', 'tel.PNG', 'ASUS ZENFONE', 'ASUS ZENFONE MAX ÇİFT SIM AKILLI TELEFON SİYAH \nİşlemci Özellikleri\nİşlemci Hızı	1.2 GHz\nEkran Özellikleri\nEkran Boyu	5.5 inch\nEkran Çözünürlüğü (px)	1280 x 720\nEkran Renk Sayısı	16M\nKamera Özellikleri\nKamera Çözünürlük (mp)	13\nÖn Kamera	5 Mp', '999 TL', ''),
(29, '13/03/2016', 'ceptel', 'tabletlerr', 'tablet.PNG', 'CASPER TABLET', 'CASPER T18-W ATOM Z3735F 1.83GHZ-2GB-32GB DİSK-8''''-CAM-BT-WIN10\nİşlemci Özellikleri\nİşlemci Markası	Intel\nBilgi\nİşlemci Teknolojisi	Atom\nİşlemci Hızı	1.83 GHz\nİşlemci Numarası	Z3735F\nRam Özellikleri\nRAM Kapasitesi	2 GB', '399 TL', ''),
(30, '13/03/2016', 'ceptel', 'akillisaatler', 'saat.PNG', 'SAMSUNG GEAR SAAT', 'SAMSUNG GEAR VR R322', '299 TL', ''),
(33, '13/03/2016', 'ceptel', 'telefonkiliflari', 'telkilif.PNG', 'IPHONE 5/5S KORUMA KILIFI', 'BELKİN BLK-F8W127VFC06 IPHONE 5/5S KORUMA KILIFI\nTeknik Özellikler\nUyumlu Olduğu Marka	Apple\nUyumlu Olduğu Model	Iphone 5/5S\n', '10 TL', ''),
(34, '13/03/2016', 'ceptel', 'bluetoothurunleri', 'bluetoothkulaklik.PNG', 'KABLOSUZ STEREO KULAKLIK', 'JABRA MOVE KABLOSUZ STEREO KULAKLIK- (MAVİ)', '249 TL', ''),
(40, '14/03/2016', 'bilgisayar', 'bilgisayarbilesenlerioem', 'bilgisayarbilesenleri.PNG', 'İNTEL İŞLEMCİ SOĞUTUCU', 'XIGMATEK JANUS INTEL 775/1155/50/1156/1366/2011&AM2/AM3/FM1/FM2 İŞLEMCİ SOĞUTUCU\nİşlemci Özellikleri\nİşlemci Soket Tipi	Soket 1366', '146 TL', ''),
(41, '14/03/2016', 'bilgisayar', '2si1aradalaptop', '2si1aradalaptop.PNG', 'CASPER CORE İ5 LAPTOP', 'CASPER CN-V5X6200X CORE İ5 6200U 2.3GHZ-6GB RAM-500GB HDD-2GB-15.6"-W10', '1,699 TL', ''),
(42, '14/03/2016', 'bilgisayar', 'haricidiskler', 'haricidiskler.PNG', 'SEAGATA HARİCİ DİSK', 'Seagate 3,5 2Bay 4TB Consumer Nas Personel Cloud Ethernet Depolama\nEkran Özellikleri\nBoyut (inç)	2.5 inch\nBağlantı Özellikleri\nEthernet	Var\nHDD Özellikleri\nDisk Kapasitesi	4 TB', '1,032 TL', ''),
(45, '14/03/2016', 'bilgisayar', 'ekrankartlari', 'ekrankartlari.PNG', 'ASUS 4GB EKRAN KARTI', 'Asus R9 380X STRIX GAMING 4GB GDDR5 256Bit AMD Radeon DX12 Ekran Kartı\nTeknik Özellikler\nÇekirdek Hızı	1030 Mhz\nRam Özellikleri\nRAM Kapasitesi	4 GB\nBellek Hızı	5700Mhz\nEkran kartı\nEkran Kartı Markası	AMD', '1,041 TL', ''),
(47, '14/03/2016', 'bilgisayar', 'ofisuygulamalarii', 'ofisyazilimlari.PNG', 'OFFİCE MAC HOME 2016', 'Office Mac Home Student 2016 İngilizce\nDiğer\nLisans Türü	Kutulu', '388 TL', ''),
(48, '14/03/2016', 'bilgisayar', 'oyunveyazilim', 'oyunlar.PNG', 'PC FAR CRY', 'PC FAR CRY PRIMAL SPECIAL EDITION\nÖzellikleri\nOyun Türü	Aksiyon', '160 TL', ''),
(49, '15/03/2016', 'bilgisayarparca', 'tumoemurunleri', 'oemurunleri.PNG', 'EVEREST MAUSE', 'EVEREST SM-RC7 ŞARJ EDİLEBİLİR KABLOSUZ MOUSE - GOLD\nTeknik Özellikler\nAlgılama	Optik\nDPI	1600\nMouse\nMouse Tipi	Kablosuz', '38,50 TL', ''),
(50, '15/03/2016', 'bilgisayarparca', 'ssd', 'ssd.PNG', 'SAMSUNG 250GB SSD', 'Samsung 250GB 750 EVO SATA 3.0 (Okuma 540MB / Yazma 520MB) SSD\nHDD Özellikleri\nDisk Kapasitesi	240 GB\nBilgi\nOkuma Hızı MB/s	540 MB/s\nBaskı Özellikleri\nYazma Hızı MB/s	520 MB/s\nBağlantı Özellikleri\nSATA 3.0	Var', '306,36 TL', ''),
(51, '15/03/2016', 'bilgisayarparca', 'ekrankarti', 'ekrankarti.PNG', 'ASUS 4GB EKRAN KARTI', 'Asus R9 380X STRIX GAMING 4GB GDDR5 256Bit AMD Radeon DX12 Ekran Kartı\nTeknik Özellikler\nÇekirdek Hızı	1030 Mhz\nRam Özellikleri\nRAM Kapasitesi	4 GB\nBellek Hızı	5700Mhz\nEkran kartı\nEkran Kartı Markası	AMD', '1,041 TL', ''),
(54, '15/03/2016', 'bilgisayarparca', 'islemciler', 'islemciler.PNG', 'İNTEL CORE İ7 İŞLEMCİ', 'Intel Core i7 6700 Soket 1151 3.4GHz 8MB Önbellek 14nm İşlemci\nİşlemci Özellikleri\nİşlemci Numarası	6700\nİşlemci Soket Tipi	Soket 1151\nİşlemci Teknolojisi	Core i7\nİşlemci Hızı	3.4 GHz\nİşlemci Ön Bellek	8 MB\nİşlemci Markası	Intel', '1,188 TL', ''),
(57, '15/03/2016', 'bilgisayarparca', 'monitor', 'monitor.PNG', 'BENQ LED MONİTÖR', 'BenQ 27" GW2760 4ms/60Hz AMVA+ Full HD Led Monitör - BEYAZ\nTeknik Özellikler\nTepki Süresi(Ms)	4\nParlaklık	300 cd/m2\nEkran Özellikleri\nEkran Renk Sayısı	16.7M\nPiksel Aralığı	0,311\nİzleme Açısı	178/178', '932 TL', ''),
(58, '15/03/2016', 'bilgisayarparca', 'haricidisk', 'haricidiskler.PNG', 'SEAGATE HARİCİ DİSK', 'Seagate 3,5 2Bay 4TB Consumer Nas Personel Cloud Ethernet Depolama\nEkran Özellikleri\nBoyut (inç)	2.5 inch\nBağlantı Özellikleri\nEthernet	Var\nHDD Özellikleri\nDisk Kapasitesi	4 TB', '1,032 TL', ''),
(61, '15/03/2016', 'bilgisayarparca', 'hoparlorspeaker', 'hoparlor.PNG', 'FRISBY BLUETOOTH SPEAKER', 'FRISBY FS-2500BT 2+1 BLUETOOTH SPEAKER\nTeknik Özellikler\nSes Sistemi	2+1\nSubwoofer	Var\nUydu Hoparlör Sayısı	X2\nGüç\nHoparlör Gücü	40 W\nUydu Hoparlör Çıkış Gücü	6W*2', '282 TL', ''),
(62, '15/03/2016', 'bilgisayarparca', 'kesintisizguckaynaklari', 'guckaynaklari.PNG', 'GÜÇ KAYNAĞI', 'FSP CHAMP 1 KVA LCD ONLİNE UPS\nTeknik Özellikler\nUPS Tipi	OnLine\nÇıkış	Topraklı Priz', '697 TL', ''),
(64, '16/03/2016', 'fotokamera ', 'dijitalkompaktfotografmakinalari', 'dijitalkompaktfotokamera.PNG', 'PANOSONİC AYNASIZ FOTOĞRAF KAMERASI', 'PANASONİC DMC-G7H 14-140 LENS KIT 16 MP AYNASIZ SLR FOTOĞRAF MAKİNESİ\nEkran Özellikleri\nEkran Boyu	3 inch\nGüç\nPil Çeşidi	Lithium-ion\nMultimedya\nVideo Çözünürlüğü	3840 x 2160 (4K)\nSensör\nFotoğraf Hassasiyeti	16 Megapiksel', '4,499 TL', ''),
(65, '16/03/2016', 'fotokamera', 'dijitalslrfotografmakinalari', 'dijitalslr.PNG', 'NIKON SLR DİJİTAL', 'NIKON D3300 18-55 VR II + 55-200 VR II 24.2 MP 3" SLR DIJITAL FOTOĞRAF MAKİNESİ\nEkran Özellikleri\nEkran Boyu	3 inch\nGüç\nPil Çeşidi	Lithium-ion\nMultimedya\nVideo Çözünürlüğü	1920 x 1080\nSensör\nFotoğraf Hassasiyeti	24.2 Megapiksel', '2,249 TL', ''),
(67, '16/03/2016', 'fotokamera ', 'cantavekiliflarr', 'cantavekiliflar.PNG', 'FOTOĞRAF MAKİNASI ÇANTASI', 'ADVENTURE SH120 FOTOĞRAF MAKİNESİ ÇANTASI- (SİYAH)', '68 TL', ''),
(68, '16/03/2016', 'fotokamera ', 'lensveaksesuar', 'lensveaksesuarlar.PNG', 'KAMERA SELFİE ÇUBUĞU', 'ADDISON AD-S100 AKSİYON KAMERA SELFIE ÇUBUĞU ( MONOPOD )', '39 TL', ''),
(69, '16/03/2016', 'fotokamera ', 'aynasizsistemvefotografmakinalari', 'aynasizsistemfotokamera.PNG', 'PANASONIC AYNASIZ FOTOĞRAF MAKİNASI', 'PANASONİC DMC-G7H 14-140 LENS KIT 16 MP AYNASIZ SLR FOTOĞRAF MAKİNESİ\nEkran Özellikleri\nEkran Boyu	3 inch\nGüç\nPil Çeşidi	Lithium-ion\nMultimedya\nVideo Çözünürlüğü	3840 x 2160 (4K)\nSensör\nFotoğraf Hassasiyeti	16 Megapiksel', '4,499 TL', ''),
(72, '16/03/2016', 'fotokamera ', 'dijitalresimcerceveleri', 'dijitalcerceveler.PNG', 'DİJİTAL FOTOĞRAF ÇERÇEVESİ', 'GOLDMASTER PF-768 DIJITAL FOTOĞRAF ÇERÇEVESİ\nEkran Özellikleri\nEkran Boyu	7 inch\nGörüntü Formatı	16:9 veya 4:3 seçilebilir\nSensör\nÇözünürlük	800 x 480', '199 TL', ''),
(74, '17/03/2016', 'tv', 'ledtv ', 'ledtv.PNG', 'SEG LED TV', 'SEG 32SC5600 32'''' 81 CM HD READY LED TV,DAHİLİ UYDU ALICILI\nTeknik Özellikler\nEkran Boyu (cm)	81\nEkran Özellikleri\nEkran Boyu	32 inch\nBağlantı Özellikleri + Portlar\nTuner	Var\nSensör\nÇözünürlük	1366 x 768\nMonitör Tipi\nLED	Var', '749 TL', ''),
(76, '17/03/2016', 'tv ', '3Dledtv ', '3dled.PNG', 'PHILIPS 3D LED TV', 'PHILIPS 55PUS9109/12 55'''' 139 CM RAZOR SLİM 4K 3D SMART LED TV,DAHİLİ HD UYDU\nTeknik Özellikler\nEkran Boyu (cm)	139\nArayüz	Android\nEkran Özellikleri\nEkran Boyu	55 inch\nGörüntü Formatı	16:9\n', '3,999 TL', ''),
(78, '17/03/2016', 'tv', 'dvdveevsinemasistemleri', 'dvdveevsinema.PNG', 'SONY SİNEMA SİSTEMİ', 'SONY BDVN9200WB 1200W,3D Blu-Ray Ev Sinema Sistemi,Bluetooh, Wİ-Fİ, USB\nTeknik Özellikler\nSes Çıkışı	6 Kanal (5.1)\nGüç\nGüç	1200 W\n', '3,199 TL', ''),
(79, '17/03/2016', 'tv', 'uydualicisivereceiver ', 'uydusistemleri.PNG', 'DİJİTAL UYDU ALICISI', 'NEXT MINIX CX HD Digital Uydu Alıcısı USB, HDMI, USB Wi-Fi Aygıt desteği\nTeknik Özellikler\nKanal Hafızası	8000\nBağlantı Özellikleri\n2x USB	Var\nBilgi\nHDMI	Var\nScart	Var\nAV-IN	Var', '129 TL ', ''),
(80, '17/03/2016', 'tv ', 'tvaskiaparati', 'askiaparati.PNG', 'EVEREST ASKI APARATI', 'Everest TK-25 STARK 12"-40" Lcd-Led TV Askı Aparatı', '31 TL', ''),
(83, '18/03/2016', 'ofis ', 'hesapmakinasi', 'hesapmakinasi.PNG', 'CASIO HESAP MAKİNASI', 'CASIO MASAÜSTÜ HESAP MAKİNESİ SİYAH -SARI (MS-20NC-BYW )', '24 TL', ''),
(84, '18/03/2016', 'ofis ', 'faksmakinasi ', 'faksmakinasi.PNG', 'TERMAL AHİZELİ FAKS', 'PANASONIC FT 984 TERMAL AHİZELİ FAKS ( KX-FT984TK-B )\nFaks Özellikleri\nFaks Hızı	9.6 Kbps\nFaks Türü	Termal Transfer\nKağıt Yönetimi\nKağıt Besleme (ADF)	10 Sayfa', '431 TL', ''),
(88, '18/03/2016', 'ofis ', 'serit', 'serit.PNG', 'ŞERİT', 'Geniş Klasör Sırt Etiketi,110 etiket/paket,190x 59mm (99019)', '83 TL', ''),
(89, '18/03/2016', 'ofis ', 'cdvedvd', 'cdvedvd.PNG', 'DVD-R 16X 4,7 GB', 'DVD-R 16X 4,7 GB SPINDLE 10''LU KUTU', '8 TL', ''),
(90, '18/03/2016', 'ofis ', 'guvenlikyazilimlari', 'guvenlikyazilimlari.PNG', 'MCAFEE ANTIVURİS PROGRAMI', 'McAfee Internet Security - Gelişmiş Koruma (Tüm cihazlar / 1 Yıl)', '85 TL', ''),
(91, '18/03/2016', 'ofis ', 'isletimsistemleri', 'isletimsistemleri.PNG', 'WİNDOWS 10', 'Windows Professional 10 32-bit/64-bit Türkçe KUTU USB', '907 TL', ''),
(92, '18/03/2016', 'ofis ', 'ofisuygulamalari', 'ofisyazilimlari.PNG', 'OFFİCE MAC HOME 2016', 'Office Mac Home Student 2016 İngilizce', '388 TL', ''),
(93, '19/03/2016', 'evaletleri', 'kisiselbakimurunleri', 'kisiselbakimurunleri.PNG', 'ARZUM SAC KURUTMA MAKİNASI', 'ARZUM AR5014 SENFONY COLOR SAÇ KURUTMA MAKİNESİ - MERCAN\n*2000 Watt *2 kademeli hız ayarı *2 kademeli ısı ayarı *Soğuk hava üfleyebilme *Dar kurutma başlığı *Yıkanabilir ve değişebilir hava filtresi *Difüzör başlığı', '59 TL', ''),
(94, '19/03/2016', 'evaletleri', 'kücükevaletleri', 'kucukevaletleri.PNG', 'ARZUM TABANLI ÜTÜ', 'ARZUM AR661 RAJA CERAMIC TABANLI ÜTÜ\n*2000 Watt *Şok buhar gücü 85 gr./dk. *Seramik taban *300 ml. su hazne kapasitesi *Ayarlanabilir buhar çıkış gücü', '59 TL', ''),
(95, '19/03/2016', 'evaletleri', 'mutfakaletleri', 'mutfakaletleri.PNG', 'ARZUM TOST MAKİNASI', 'ARZUM AR2005 ECO PANİNİ IZGARA VE TOST MAKİNESİ\n*1800 Watt *Sıcaklık ayarı *4 dilim ekmek kapasitesi *Yapışmaz plakalar', '142 TL', ''),
(100, '19/03/2016', 'evaletleri', 'mikrodalgafirin', 'mikrodalga.PNG', 'IZGARALI MİKRODALGA FIRIN', 'MW 80200 IZGARALI MİKRODALGA FIRIN\n Özelliklerini Keşfet\n*800 Watt *20 litre kapasite *Gümüş renkli dış yüzey *Izgara özelliği ', '429 TL', ''),
(101, '19/03/2016', 'evaletleri', 'caykahvemakinasi', 'caykahvemakinasi.PNG', 'ARZUM ÇAY ROBOTU', 'ARZUM AR3019 ÇAYCI KLASİK ÇAY ROBOTU - MERCAN\n*1650 W (kaynatma) / 135 W (sıcak tutma) *1,8 lt (su ısıtıcı) - 0,7 lt (demlik) kapasitesi', '259 TL', ''),
(102, '19/03/2016', 'evaletleri ', 'blender', 'blender.PNG', 'FAKIR MEGAMİX BLENDER', 'FAKIR MEGAMIX BLENDER\n*900 Watt *1,5 lt.hazne kapasitesi *Çoklu hız ayarı *Anlık çalıştırabilme *Buz kırabilme *Yatay, dikey, cyclone karıştırabilme', '269. TL', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyekayit`
--

CREATE TABLE IF NOT EXISTS `uyekayit` (
  `uyeid` int(11) NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `dogum` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `cep` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyekayit`
--

INSERT INTO `uyekayit` (`uyeid`, `ad`, `soyad`, `email`, `dogum`, `sifre`, `cinsiyet`, `cep`, `adres`) VALUES
(1, 'awdaw', 'hrthrt', 'awdaw', '2016-03-18', '4545', 'Erkek', '44242', '                    '),
(2, 'dvsdv', 'svsdvs', 'svs', '2016-03-09', 'sdvdsvdsv', 'Erkek', '424242424', ''),
(3, 'Ramazan', 'İPERLİK', 'ramazaniperlik@gmail.com', '1995-02-13', '1234567', 'Erkek', '53654565448', ''),
(4, 'yjg', 'ghj', 'h', '2016-04-14', 'ghj', 'Erkek', 'ghjhg', ''),
(5, 'ukyu', 'ukyu', 'yuky', '2016-04-07', 'yukyu', 'Erkek', 'luıluı', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yoneticikayit`
--

CREATE TABLE IF NOT EXISTS `yoneticikayit` (
  `email` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yoneticikayit`
--

INSERT INTO `yoneticikayit` (`email`, `sifre`) VALUES
('emmre_goc@hotmail.com', '12asd45ert');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE IF NOT EXISTS `yorumlar` (
  `id` int(11) NOT NULL,
  `urun_id` int(250) NOT NULL,
  `adisoyadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `yorum` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `onay` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `urun_id`, `adisoyadi`, `yorum`, `tarih`, `onay`) VALUES
(1, 29, 'ramazan iperlik', 'çok güzel :)) ', '26.04.2016', 1),
(2, 29, 'emre goc', 'ben de gayet memnunum arkadaşlar :D ', '26.04.2016', 1),
(3, 29, 'Tarık Altun', 'Ben Beğenmedim', '', 1),
(4, 5, 'sa', 'sa', '', 1),
(5, 6, 'burhan', 'deneme', '', 1),
(6, 2, 'sa', 'sa', '', 1),
(7, 90, 'ergre', 'ergreg', '', 1),
(8, 90, 'rere', 'gtrgr', '', 1),
(9, 78, 'rthtr', 'rtht', '', 1),
(10, 100, 'rereg', 'ergergre', '', 1),
(11, 100, 'Emre Göç', 'qweqeqewqe', '', 1),
(12, 59, 'yukıuku', 'jkçmkömöjkö', '', 1),
(13, 29, 'aaa', 'aaaa', '', 1),
(14, 29, 'bbb', 'bbb', '', 1),
(15, 72, 'tyjtyjytjtyjyyt', 'tyjtyjytjytjty', '', 1),
(16, 65, 'grg', 'grgr', '', 1),
(17, 40, 'mmm', 'mmmmm', '', 0),
(18, 74, 'aa', 'aaa\r\n', '', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `sepetim`
--
ALTER TABLE `sepetim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `uyekayit`
--
ALTER TABLE `uyekayit`
  ADD PRIMARY KEY (`uyeid`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `sepetim`
--
ALTER TABLE `sepetim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=103;
--
-- Tablo için AUTO_INCREMENT değeri `uyekayit`
--
ALTER TABLE `uyekayit`
  MODIFY `uyeid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
