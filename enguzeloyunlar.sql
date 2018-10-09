-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 13 May 2018, 22:40:29
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `enguzeloyunlar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_soyad` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `sifre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `ad_soyad`, `mail`, `sifre`) VALUES
(1, 'Furkan Öztürk', 'm.furkanozturkk@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_kategoriler`
--

DROP TABLE IF EXISTS `tbl_kategoriler`;
CREATE TABLE IF NOT EXISTS `tbl_kategoriler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_adi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `kategori_sef` varchar(100) CHARACTER SET utf8 NOT NULL,
  `yatay_durum` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `tbl_kategoriler`
--

INSERT INTO `tbl_kategoriler` (`id`, `kategori_adi`, `kategori_sef`, `yatay_durum`) VALUES
(4, '2 Kişilik Oyunlar', '2-kisilik-oyunlar', 1),
(5, 'Beceri', 'beceri', 1),
(6, 'Dövüş', 'dovus', 1),
(7, 'En Güzel Oyunlar', 'en-guzel-oyunlar', 1),
(8, 'Savaş', 'savas', 1),
(9, 'Yarış', 'yaris', 1),
(10, 'Zeka', 'zeka', 1),
(11, '3D Oyunlar', '3d-oyunlar', 0),
(12, 'Araba Oyunları', 'araba-oyunlari', 0),
(13, 'Balon Patlatma Oyunları', 'balon-patlatma-oyunlari', 0),
(14, 'Barbie Oyunları', 'barbie-oyunlari', 0),
(43, 'Subway Surfers', 'subway-surfers', 0),
(16, 'Ben 10 Oyunları', 'ben-10-oyunlari', 0),
(17, 'Boyama Oyunları', 'boyama-oyunlari', 0),
(18, 'Çiftlik Oyunları', 'ciftlik-oyunlari', 0),
(19, 'Çizgi Film Oyunları', 'cizgi-film-oyunlari', 0),
(20, 'Çocuk Oyunları', 'cocuk-oyunlari', 0),
(22, 'En Güzel Oyunlar', 'en-guzel-oyunlar', 0),
(23, 'Friv', 'friv', 0),
(24, 'Futbol Oyunları', 'futbol-oyunlari', 0),
(25, 'Giydirme Oyunları', 'giydirme-oyunlari', 0),
(26, 'Giysi Giydirme Oyunları', 'giysi-giydirme-oyunlari', 0),
(27, 'Kız Oyunları', 'kiz-oyunlari', 0),
(28, 'Komik Oyunlar', 'komik-oyunlar', 0),
(29, 'Macera Oyunları', 'macera-oyunlari', 0),
(30, 'Makyaj Oyunları', 'makyaj-oyunlari', 0),
(31, 'Mario Oyunları', 'mario-oyunlari', 0),
(32, 'Motor Oyunları', 'motor-oyunlari', 0),
(33, 'Neşeli Dondurmalar', 'neseli-dondurmalar', 0),
(34, 'Nişan Oyunları', 'nisan-oyunlari', 0),
(35, 'Online Oyunlar', 'online-oyunlar', 0),
(37, 'Spor Oyunları', 'spor-oyunlari', 0),
(38, 'Strateji Oyunları', 'strateji-oyunlari', 0),
(39, 'Uçak Oyunları', 'ucak-oyunlari', 0),
(40, 'Yapboz Oyunları', 'yapboz-oyunlari', 0),
(42, 'Yemek Oyunları', 'yemek-oyunlari', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_kullanicilar`
--

DROP TABLE IF EXISTS `tbl_kullanicilar`;
CREATE TABLE IF NOT EXISTS `tbl_kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `k_adi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sifre` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `tbl_kullanicilar`
--

INSERT INTO `tbl_kullanicilar` (`id`, `k_adi`, `mail`, `sifre`) VALUES
(88, 'taha', 'soner.cicek@outlook.com', 'e10adc3949ba59abbe56e057f20f883e'),
(87, 'furkan', 'm.furkanozturkk@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_oyunlar`
--

DROP TABLE IF EXISTS `tbl_oyunlar`;
CREATE TABLE IF NOT EXISTS `tbl_oyunlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oyun_adi` varchar(100) NOT NULL,
  `oyun_sef` varchar(100) NOT NULL,
  `aciklama` longtext NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `ekleme_tarihi` date NOT NULL,
  `resim` varchar(100) NOT NULL,
  `oyun` varchar(100) NOT NULL,
  `begeni` int(11) NOT NULL DEFAULT '0',
  `tiklanma` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tbl_oyunlar`
--

INSERT INTO `tbl_oyunlar` (`id`, `oyun_adi`, `oyun_sef`, `aciklama`, `kategori_id`, `ekleme_tarihi`, `resim`, `oyun`, `begeni`, `tiklanma`) VALUES
(33, 'Air Dodge', 'air-dodge', 'Air Dodge heyecanında son saniyeler içinde bulunuyoruz. Renkli uçan balonlarla dolu bir gökyüzünde havada kalmak ve rekoru kırmak için çalışacağız. Uçmaya başladığı gibi düşüşe geçen uçağı havada tutmak ve yere çakılmasını önlemek için yukarı ok tuşuna seri bir şekilde basmamız gerekiyor. Hızla yere çakılacak uçağı ne kadar çok havada bırakabilirsek o kadar yüksek puan almış olacağız. www.enguzeloyunlar.org ailesi iyi oyunlar diler.', 5, '2018-05-03', 'img/43823242319.jpg', 'oyunlar/airdodge.swf', 3, 2),
(45, 'Zirveye Uçuş', 'zirveye-ucus', 'Hem eğlenmek hem de becerilerinizi geliştirmek için müthiş bir oyun oynamak isterseniz, yolunuz Zirveye Uçuş Oyununa düşecektir. Klavye kullanımınızı biraz daha hızlandırmak istiyorsunuz ama sıkılıyor musunuz? O zaman bu oyunu oynayarak klavyenizi daha rahat kullanabileceksiniz desek? Zirveye Uçuş oyununu oynayabilmek için bilgisayarınıza herhangi bir eklenti yüklemenize gerek yoktur. Ortalama bir bilgisayarın kaldırabileceği bir oyundur. Web sitesi üzerinden oynandığı için olması gereken tek şey, internet bağlantısıdır. Aynı zamanda herhangi bir üyeliğe de ihtiyacınız olmadan, dilediğiniz zaman bu oyunu oynayabilirsiniz. Zirveye Uçuş oyunu ücretsizdir ve isteyen herkesin kullanımına açık olan eğitici bir oyundur. Milli Eğitim Bakanlığı\'na ilişkili Hatice Salih Ortaokulu sayesinde derlenmiş bir oyundur. Oyunun amacı daha çok eğitseldir. Oyunda genç bir adamı yönlendirme işi sizlere aittir. Bu adam yüksek bir binanın tepesinde bulunan sevgilisinin yanına ulaşmaya çalışmaktadır. Oyunun ilk bölümünde bu genç adam Eyfel Kulesine tırmanmaya çalışmaktadır. Önünüzde basamaklar bulunur ve sizden istenen de bu basamaklara düşmeden tırmanmaktır. Zira eğer yükseklere çıktığınızda bir basamak şaşırırsanız, oyun sizin için son bulur. Ve yeniden başlamanız gerekir. Oyunun kontrolleri yön tuşları aracılığı ile sağlanır. Sağ üst, sol üst şeklinde hareket edersiniz. Bu arada oyun esnasında sizleri asla rahat bırakmayacak bir kuş ile mücadele etmekte olacağınızı da söylemeden geçmeyelim. Bu kuş sizin yüksekliğinize göre ve size çarpacak şekilde üzerinizden geçer. Kuş ile temas ettiğinizde kuş sizi iter ve otomatik olarak aşağı düşersiniz. Bu nedenle kuşu gördüğünüzde hızlanmanız gerekir. Aynı zamanda belli bir yüksekliğe geldiğinizde basamaklar arasında hareketli basamaklar da bulunuyor. Bu basamaklardan kayıp düşmemek için yön tuşlarını kontrollü biçimde kullanmalısınız. Bölümleri geçtikçe tırmanmaya çalıştığınız bina da değişmektedir. Bazen Paris\'de bulunan Eyfel Kulesine tırmanırsınız bazen de Dubai\'deki o meşhur yüksek binaya. Oyunda ulaştığınız yüksekliği ekranın sağ alt kısmında görebilirsiniz. Aynı zamanda oyun sesini kapatmak için Play tuşuna bastıktan sonra ekranın üst köşesinde yer alan hoparlör butonuna basmanız yeterli olacaktır. Zirveye uçuşunuzda başarılar diliyoruz.', 5, '2018-05-03', 'img/53405761.png', 'oyunlar/zirveye-ucus.swf', 2, 0),
(46, 'Hızlı Silahşör', 'hizli-silahsor', 'İki oyuncu ile oynanabilen Hızlı Silahşor oyununda amaç tüm rakipleri öldürerek bölümü tamamlamaktır. İzlediğimiz çizgi filmlerdeki Batı’nın hızlı silahşorları, bu oyun ile gerçek oluyor. Mantığın, aksiyonun, adrenalinin, heyecanın ve eğlencenin bir araya gelip harmanlandığı bu oyunu oynarken olabildiğince fazla keyif alacağınıza eminiz. Aksiyon, 2 kişilik oyunlar ve silah oyunları kategorisinde yer alan bu oyun, adrenalinizi her daim en üst düzeyde tutacaktır. Oyunun en önemli kuralı hızlı olmaktır. Ne kadar hızlı olursanız o kadar başarılı olursunuz. En hızlı silahşor olmaya var mısınız? Oyun tam bir savaş alanı üzerinde ilerleyecek. Yani oldukça karmaşık bir düzende olacak ki sizin dikkatiniz dağılsın. Bu nedenle size düşen olabildiğince sakin kalarak rakiplerinizi alt etmektir. Oyun platformu üzerindeki her yere dikkatle bakmalısınız, kalan tek bir düşman bile sizin puanınızı düşürecek hasara neden olabilir. Rakip savaşçılar otomatik olarak ateş etmektedirler. Bu nedenle sizin sakin kalıp sürekli zıplayarak, mermilerin hedefinde olmamayı sağlamanız gerekmektedir. Aynı şekilde sürekli ileri ve geri hareket ederek, rakiplerinizi daha kolay yok etmektir. Oyunun amacı en yüksek puanı elde ederek tüm düşmanları yok etmek. Bu nedenle olabildiğince az hasar almalı ve mümkün olduğu kadar çok düşmanı yok etmelisiniz. Oyun açıldıktan sonra ilk yapmanız gereken, beğendiğiniz bir karakteri seçmektir. Karakter listeniz birbirine benzerdir fakat farklı şekilde dizayn edilmiştir. Karakterinizi seçtikten sonra başka herhangi bir işlem yapmadan oyuna başlayabilirsiniz. Oyun başladığında fareniz ile nişan alırsınız ve geri sayım yapılır. Oyunu daha kolay oynayabilmeniz için, nasıl oynayacağınızı bilmeniz gerekiyor. Oyun fare aracılığı ile oynanmaktadır. Oyun başladığında farenizi rakip silahşorun altındaki şarjörün üstüne götürmelisiniz. Geri sayım süresince bu vaziyette bekleyin ve geri sayım sona erdiğinde farenizin sol tuşuna tıklayarak rakibinizi yok edin. Fakat burada dikkat etmeniz gereken konu, geri sayımın bittiği andır. Unutmayın bu anda ilk kim sıkarsa o en büyük hasarı verecektir. Bu nedenle geri sayım süresince tetikte bekleyin ve biter bitmez ateş etmeye başlayın.', 34, '2018-05-03', 'img/604217529.png', 'oyunlar/hizli-silahsorler.swf', 0, 1),
(47, 'Kafa Yarmaca Patlatmaca ', 'kafa-yarmaca-patlatmaca', 'Kafa Yarmaca oyunu 2 kişilik oyunlar kategorisinde sıklıkla tercih edilen oyunlardan biridir. Oyun içerisinde bir kız bir erkek çocuk birbirlerine ayakkabı ve taş fırlatıyorlar. Kafa kırmaca oyununda sizlerde bu karakterleri yönlendirerek, kazanan taraf olmaya çalışacaksınız. Oyun yüklendikten sonra START butonuna tıklayın. Önünüze gelen ekrandan da “Lets Play” butonuna tıklayın. İsterseniz tek başınıza isterseniz de bir arkadaşınız ile oynayabileceğiniz bir oyundur. Bu nedenle eğer tek kişiyseniz kız ve erkek karakterlerden birini seçin. İki kişiyseniz de karakterleri kendi aranızda bölüştükten sonra, seçin. Oyunun giriş kısmı tamamlandıktan sonra sıra geldi nasıl oynayacağınıza… Oyun fareniz ile oynanmaktadır. Oyun açıldığında ve başladığında, farenizin sol tarafında bulunan tuşa basılı tutarak, atacağınız taşı ya da ayakkabıyı ne hızda atacağınızı belirliyorsunuz. Elinizi fareden çektiğinizde de taşı atmış oluyorsunuz. Amacınız enerjiniz bitmeden karşı tarafın enerjisini bitirmektir. Bu nedenle olabildiğince hızlı ve şiddetli taşlar atmalısınız. Çünkü bir süre sonra iki tarafında enerjisi bitmeye başlayacaktır. Sizin enerjiniz bitmeden karşı tarafın enerjisi bitmeli ki, siz kazanasınız.', 4, '2018-05-03', 'img/250091552.png', 'oyunlar/kafa-yarmaca.swf', 0, 0),
(48, 'Asphalt 8', 'asphalt-8', 'Asphalt 8: Airborne Oyna Asphalt 8, araba oyunlarının baş tacı haline gelmiş bir oyundur. Yaptığınız yarışlar sayesinde bölümleri geçerek oyunun tadını çıkartabilirsiniz. Oyun yüklendikten sonra “Oyna” butonuna tıklayın. Bunun sonrasında bir ekran açılacak ve bu ekrandan bir harita seçeceksiniz. Haritayı seçtikten sonra “İleri” butonuna tıklayın. Bu aşamada ilk olarak bir araç seçeceksiniz ve aracınız ile ilgili tüm düzenlemeleri yapabileceksiniz. Özellikleri seçtikten sonra “İleri” tuşuna basarak, oyuna geçiş adımını atabilirsiniz. Asphalt 8 Nasıl Oynanır? Bildiğiniz gibi bu oyun klasik bir araba yarışı oyunudur. Bu nedenle özelliklerini bildiğiniz sürece, oyunu oynamakta o kadar kolay olacaktır. •	Arabanızı hızlandırmak istiyorsanız, sağ köşede bulunan Nitro simgesine tıklayın. •	Dengenizi kaybettiyseniz ve yavaşlatmak istiyorsanız da, ekranın sol tarafındaki herhangi bir noktaya tıklayın. •	Eğer aracınızı üst üste hızlandırmak istiyorsanız, bunun mümkün olmayacağını bilmelisiniz. Eğer nitro özelliğini kullandıysanız ya tümseklerden atlayın ya da yanlama yapın ki yeniden nitro özelliği aktifleşsin. •	Oyundaki amacınız seviye atlamaktır. Bunun yolu da olabildiğince çok yarış kazanmaktır. Eğer yarışı kazanamıyorsanız bile, olabildiğince çok yıldız toplayın ve aracınıza hasar vermeden yarışı tamamlayın. •	Yıldız kazanmak istiyorsanız aracı yanlamak, drift yapmak, takla atmak ya da nitro kullanırken bir yerlere çarpmamak gibi yetenek isteyen hareketlerde bulunmalısınız. Drift yapmak için viraja girdiğinizde frene dokunun ve bırakın. Aracınızın direksiyonunu da virajın tersine doğru çevirin. Takla atmak için de oyunun içerisine yerleştirilmiş olan rampalardan dengeli biçimde atlamalısınız. Kusursuz nitro içinse, nitro deponuzun tam olarak dolu olması gerekir. Son olarak yanlamak içinde, virajı geçerken aniden frene basın ve yolda durmaya özen göstererek sağa sola doğru hareket edin. Yanlama ile drift aynı şey sayılır.', 12, '2018-05-03', 'img/252075195.png', 'oyunlar/streetrace.swf', 0, 0),
(49, 'Lipton Akıllı Çay Bardağı Oyun Skor ', 'lipton-akilli-cay-bardagi-oyun-skor', 'Hiç bir bardak ile başa çıkamayacağınız bir anın olduğunu düşündünüz mü? Bir bardak sonuçta öyle değil mi? Fakat bu sandığınız tüm bardaklardan çok daha farklı bir bardak. Lipton’ un akıllı çay bardağı, sizleri şaşkınlığa uğratacak kadar akıllı ve komik bir bardaktır. Oyunumuz fare ile oynanmaktadır ve oynamak için ekstra başka bir donanıma ihtiyacınız bulunmamaktadır. Akıllı Çay Bardağı, sizlere 20 farklı soru yöneltir. Sizler de bu soruları yanıtlarsınız. Fakat soruları öyle bildiğiniz gibi dümdüz cevaplamamalısınız. Çünkü çay bardağı size seçebilmeniz için yalnızca altı farklı seçenek sunar. Bu seçenekler “Evet. Hayır. İlgisi Yok. Nadiren. Genellikle. Bazen.” şeklindedir. Sizler bu seçeneklerden birini seçerek yanıtlamalısınız. Akıllı Çay Bardağı size bu 20 soruyu yöneltir çünkü asıl amacı sizin aklınızdan tuttuğunuz nesneyi, yeri ya da şeyi tahmin etmektir. Elbette aklınızdan tuttuğunuz bir nesneyi tam olarak dümdüz bulmak ve söylemek pek kolay bir iş değil. Fakat Lipton’un Akıllı Çay Bardağı size sorduğu sorular sayesinde aklınızdaki şey her neyse bunu buluyor. Eğer bulamazsa çay bardağı sizden bir şans daha istiyor ve yeni bir soru soruyor. Bu cevap karşısında aklınızdan tuttuğunuz nesneyi yeniden tahmin etmeye çalışıyor. Fakat Akıllı Çay Bardağımız yine de doğru cevabı bulamazsa, oyuna yeniden başlamanız gerekecektir.', 28, '2018-05-03', 'img/290435791.png', 'oyunlar/akillicaybardagi.swf', 0, 0),
(50, 'Pes 18', 'pes-18', 'Çocukların ve yetişkinlerin çılgınca oynadığı bir oyun olan PES, her sene yenilediği bir oyun ile oyuncu karşısına çıkmaya alıştı. Bu nedenle oyuncular her sene, senenin ismi ile anılan bir oyun ile bu maceraya ortak oluyor. Pro Evolution Soccer yani PES, Steam üzerinden satın alınabiliyor. Aynı zamanda çeşitli oyun sitelerinde de PES ismi ile yine buna benzer futbol oyunları oynayabiliyorsunuz. Pro Evolution Soccer, bir futbol oyunudur. Klasik olarak bir takım seçersiniz. Farklı yanı, seçtiğiniz takımdaki tüm oyuncuları da siz belirlersiniz. Takımınız ile birlikte futbol maçlarına katılarak başarılı olmaya çalışırsınız. Temel anlamda yani kısaca oyunumuz budur. PES Nasıl Oynanır? İlk olarak oyun panelinden oynamak istediğiniz oyun modunu seçmelisiniz. Oyunda dilerseniz bir arkadaşınız ile mücadele edebileceğiniz gibi dilerseniz çevrimiçi oyun odalarında da maçlara katılabilirsiniz. Evinizde tek başınıza bilgisayara karşı bir mücadelede de bulunabilirsiniz. Oyun modunu seçmek için L1 R1 ve yön düğmelerini kullanmanız gerekir. Böylece bir üst menüye geçersiniz eğer L3 tuşuna basarsanız, Ortaklaşa moduna geçersiniz. Yani çevrimiçi bir oyuna geçersiniz. Başka seçeneklerinizde bulunmaktadır. Örneğin az bir vaktiniz varsa fakat yine de biraz oyun oynamak istiyorsanız, MAÇ kısmına girerek hızlı bir maç yapabilirsiniz. Pro Evolution Soccer oyunun esas keyif verici noktası, gerçek ile çok ilişkili olmasıdır. Gerçekten de dünyadaki liglere ulaşabilir, hayranı olduğunuz futbolcuyu karakterize edebilirsiniz. PES oyununda oyuna başlamadan evvel liginizi belirlemeniz gerekir. Dilerseniz UEFA Champions League yani Avrupa ligini, dilerseniz AFC Champions League yani Asya ligini seçebilirsiniz. Bunun gibi daha birçok lig seçimi yapabilirsiniz. Seçtiğiniz ligin takımları da yine eksiksiz olarak önünüze sunulmaktadır. Takımınızı da seçtikten sonra tek tek ilk 11 oyuncunuzu belirlersiniz. Takımın hangi oyuncularını kullanacaksınız, hangi oyuncu sahanın neresinde duracak ve buna benzer tüm tercihleri siz yaparsınız. Aynı zamanda bu oyuncular gerçek hayatta da var olan oyuncular oldukları için, her birinin tek tek kendisine has olan özelliklerini görebilir, dilerseniz bu özellikleri arttırarak oyuncuları oyuna dahil edebilirsiniz.', 4, '2018-05-03', 'img/456115722.jpg', 'oyunlar/pes2018oyunu.swf', 0, 0),
(51, 'Neşeli Dondurmalar', 'neseli-dondurmalar', 'Neşeli Dondurmalar Oyunu en çok oynanan 2 kişilik oyunların başında yer alıyor. Neşeli Dondurmalar Oyunu Oyna 2 kişilik oyunlar kategorisinde yer almaktadır. Neşeli dondurmalar oynamak için oyunu açıldıktan sonra play yazısına tıklayarak 1 kişi yada 2 kişilik oynama tercihini yaparak oyuna başlayabilirsiniz.Oyundaki amacımız neşeli dondurma ile 2 dakika süre içerisinde tüm meyveleri toplayarak bölüm geçmelisiniz.Oyunda toplam 40 bölüm var bu bölümlerin hepsini geçerseniz oyunu en yüksek puanla tamamlamış olacaksınız.Oyun w,a,s,d tuşları yardımıyla oynanıyor. Neşeli dondurmalar oyunu www.enguzeloyunlar.org farkıyla sizlerle.İyi oyunlar dileriz.', 33, '2018-05-03', 'img/924194335.jpg', 'oyunlar/aneseli-dondurmalar.swf', 0, 0),
(52, 'Evde Tembellik', 'evde-tembellik', 'Evde tembellik oyunu bu oyunumuzda hem eğlenip hem tembellik yapmaya ne dersiniz?Evde tembellik oyunu açıldıktan sonra start yazısına tıklayarak oyuna başlayınız.Oyundaki amacımız sağ tarafta gösterilen görevleri devamlı kontrol için gelen annemize yakalanmadan yapmaya çalışınız.Oyunda ne kadar çok tembellik yaparsanız o kadar yüksek puanlar sizin olacak.Oyun fare yardımıyla oynanıyor.Oyunumuz komik oyunlar kategorisinde yayınlanmaktadır.İyi eğlenceler dileriz.\r\n', 28, '2018-05-03', 'img/927673339.jpg', 'oyunlar/Evde-Tembellik.swf', 0, 0),
(53, 'Şehir Otobüsü', 'sehir-otobusu', 'Şehir Otobüsü Oyunu Bu oyunda şehirinizin otobüscüsü olarak çalışmaktasınız.Oyun başladıktan sonra park halindeki yerden alıp okları takip etmelisiniz. Daha sonra okun bulunduğu yere aracı park edeceksiniz.Oyunun kontrollerini klavyenin yön tuşlarıyla sağlayabilirsiniz.Park etme oyunları severler için kaçırılmayacak bir oyun.Oyunumuz araba oyunları kategorisinde yayınlanmaktadır.İyi eğlenceler dileriz.', 12, '2018-05-03', 'img/426422119.jpg', 'oyunlar/sehirotobusu.swf', 0, 0),
(54, 'Usta Nişancı', 'usta-nisanci', 'Usta Nişancı Oyunu bu oyunumuzda ne kadar iyi bir nişancı olduğunuzu kanıtlamak istermisiniz?Usta nişancı oyunu açıldıktan sonra play game yazısına tıkladıktan sonra oyuna başlayınız.Oyundaki amacımız etrafında bulunan düşmanları nişan alarak yok etmelisiniz.Ne kadar çok düşman yok ederseniz o kadar yüksek puanlar kazanacaksınız.Oyun fare yardımıyla ve zoom için boşluk tuşu yardımıyla oynanıyor.Oyunumuz nişan oyunları kategorisinde yayınlanmaktadır.İyi eğlenceler dileriz.', 34, '2018-05-03', 'img/274383544.jpg', 'oyunlar/Usta-Nişancı.swf', 0, 0),
(55, 'Pepee Gizli Harfleri Bulma ', 'pepee-gizli-harfleri-bulma', 'Pepee gizli harfleri bulma oyunu bu oyunumuzda sevimli çizgi film kahramanımız pepee ile birlikte maceraya hazırmısınız?Pepee gizli harfleri bulma oyunu açıldıktan sonra oyuna başla yazısına tıklayarak oyuna başlayınız.Oyundaki amacımız pepee resminin içerisine gizlenmiş harfleri en hızlı süre içerisinde bularak puanlar kazanmalısınız.Oyun fare yardımıyla oynanıyor.Oyunumuz çizgi film oyunları kategorisinde yayınlanmaktadır.www.enguzeloyunlar.org iyi eğlenceler diler.', 19, '2018-05-04', 'img/653625488.jpg', 'oyunlar/Pepee-Gizli-Harfleri-Bulma.swf', 0, 751),
(56, 'Aşk Çarkı Oyunu ', 'ask-carki-oyunu', 'Aşk Çarkı Oyunu ile genç kızlar çarkı çevirerek elbise ayakkabı ve saç modeli seçiyor ve hazırladığı kızı randevuya gönderiyor. Erkek bakalım hazırladığınız kızı beğenecek mi? En iyi kıyafet ayakkabı ve saç modelini seçerek güzel bir erkekle bir kızı randevuda buluşturabilirsiniz. Aşk Çarkı Oyununda bakalım şansınız iyi gidecek mi? Aşk Çarkı için yorum yapmayı unutmayınız. İyi oyunlar', 27, '2018-05-04', 'img/420410156.jpg', 'oyunlar/ask-carki.swf', 0, 0),
(57, 'Özel Dart', 'ozel-dart', 'Özel dart oyununda bilgisayara karşı mücadele ederek oyunun galibi sen olmak ister misin? Nişan oyunlarına yeni eklenen bu oyunda karşında bulunan dart tahtasına atışlar yaparak hedefi vurmalısın. Vurman gereken hedef sarı işaretle gösterilecek ve vurduğun zaman puanlar kazanmaya başlayacaksın. Böylece rakibini geçeceksin ve onun atış yapmasını bekleyeceksin. Özel dart adlı bu oyunda kontrolü sağlamak ve dart tahtasına atışlar yapmak için Mouse kullanman yeterli olacaktır. Rakibin bilgisayar olsa da dart oynama konusunda çok usta ve atışlarını çok dikkatli bir şekilde atmalısın.', 34, '2018-05-04', 'img/951446533.png', 'oyunlar/ozel-dart.swf', 0, 0),
(58, 'Altın Petek ', 'altin-petek', 'Yeni bir yarışma Altın Petek çeşitli jokerleri ile yarışmacılarına güzel paralar kazandırıyor. Ülkemizin ilk resmi kanalında gösterilen yarışmanın son bölümü dün yayınlandı. Petekte nasıl ilerleyeceğinizi siz belirliyorsunuz. Yukarı gittikçe sorular ve kategoriler zorlaşmakta. Cevabı verdikten sonra aynı Milyoner\'deki gibi \"Onaylıyorum\" sözcüğünü bekliyorlar. Bizde Altın Petek yarışmasına benzer, Ramazan Ayı\'na özel bu dini petek oyununu paylaştık.', 10, '2018-05-04', 'img/568786621.jpg', 'oyunlar/dini-petek-bulmaca.swf', 0, 0),
(59, 'Elsa Gerçek Makyaj ', 'elsa-gercek-makyaj', 'Elsa Gerçek makyaj oyunu kız oyunlarını sevenler ve eğlenceli vakit geçirmek isteyen kızlarımızın çok beğeneceği bir oyun.Elsa gerçek makyaj oyunu açıldıktan sonra play butonuna tıklayarak oyuna başlayabilirsiniz.Oyundaki amacımız akşam partiye katılacak olan elsa kızımız makyaj konusunda kararsız durumda.Sizin yapmanız gereken elsa kızımıza oyundaki güzellik ve bakım malzemelerini kullanarak makyajını yapmalısınız.Elsa gerçek makyaj oyunu fare yardımıyla oynanıyor.Oyunumuz kız oyunları kategorisinde yayınlanmaktadır.www.enguzeloyunlar.org iyi eğlenceler diler.', 27, '2018-05-04', 'img/215667724.jpg', 'oyunlar/elsamakyaj[1].swf', 0, 0),
(60, 'Altın Avcısı Kız', 'altin-avcisi-kiz', 'Altın avcısı kız oyunu bu oyunumuz beceri oyunlarını sevenler ve eğlenceli vakit geçirmek isteyenler için çok güzel bir oyun.Altın avcısı kız oyunu yüklendikten sonra play game ve start game yazılarına tıklayarak oyuna başlayabilirsiniz.Oyundaki amacımız sevimli kızımız ile altınları en hızlı süre içerisinde toplayarak puanlar kazanmalısınız.Oyunda ne kadar çok altın toplarsanız o kadar yüksek puanlar kazanacaksınız.Oyun fare yardımıyla oynanıyor.Oyunumuz beceri oyunları kategorisinde yayınlanmaktadır.www.enguzeloyunlar.org iyi oyunlar diler.', 5, '2018-05-04', 'img/337646484.jpg', 'oyunlar/Altın-Avcısı-Kız.swf', 0, 26),
(61, 'Altın Madencisi 2 ', 'altin-madencisi-2', 'Madenlere ulaşıp zengin olmaya ne dersin? Oyun oynaması oldukça basit ve kolay. Fakat oyun biraz zorlayıcı. Madenleri toplayıp para biriktiriyorsun. Elinde bir ip ve kanca var o ipi hedefe doru döndüğünde yön tuşları ile madeni alıyorsun. Oyunu oynamak bu kadar basit. Madenleri belirli bir süre içinde hepsini toplamaya çalış ki daha çok para kazan. Sen bu işi başarabilirsin. Haydi, zaman kaybetmeden oyuna başla. www.enguzeloyunlar.org ailesi iyi oyunlar diler.', 5, '2018-05-04', 'img/905731201.jpg', 'oyunlar/34.swf', 0, 0),
(62, 'Ay\'a Yolculuk', 'ay-a-yolculuk', 'Ay\'a yolculuk oyununda eğlence dolu vakitler geçireceksiniz. Beceri dolu oyunda yapmanız gereken çok basit. Oyunda üst tarafta çıkan güç göstergesinde hız bulunmaktadır. Maymuncuğumuzu uzaya doğru fırlatacaksınız. Yukarıya doğru çıktıkça muzlarıda toplayacaktır fakat öyle bir sıçrayış yaptırınki hiçbir engele takılmadan uçuşunu gerçekleştirebilsin. Oyunu farenizle oynayabilirsiniz. Enguzeloyunlar.org ailesi iyi oyunlar diler.', 4, '2018-05-04', 'img/305206298.jpg', 'oyunlar/8094[1].swf', 0, 0),
(63, 'Benzinci İşletme Oyunu', 'benzinci-isletme-oyunu', 'Benzinci İşletme Oyunu bu oyunumuzda benzinliği işleterek paralar kazanmak istermisiniz?Benzinci işletme oyunu açıldıktan sonra ok butonuna tıkladıktan sonra bayan erkek seçimini yaparak oyuna başlayabilirsiniz.Oyundaki amacımız gelen arabaların depolarını doldurarak puanlar kazanmak.Oyun fare yardımıyla oynanıyor.Oyunumuz beceri oyunları kategorisinde yayınlanmaktadır.www.enguzeloyunlar.org iyi eğlenceler diler.', 5, '2018-05-04', 'img/44708251.jpg', 'oyunlar/Benzinci-İşletme.swf', 0, 0),
(64, 'Trt Çocuk İbi ', 'trt-cocuk-ibi', 'Trt Çocuk İbi şimdi yeni bir oyun ile en güzel oyunlar arasına sizin için girdi. İbi ile yeni bir serüvene var mısınız? En iyi olan hep kazanır kötülerden kurtulur kötülükten uzak kalır İbi ile bakalım neler yapacak oyunu başaracak mısınız bekliyoruz ve izliyoruz. Bu tatil günlerinde bu güzel oyunla güzel zaman geçireceksiniz.', 19, '2018-05-04', 'img/742065429.png', 'oyunlar/trt-cocuk-ibi.swf', 0, 0),
(65, 'Berzerk ball ', 'berzerk-ball', 'Berzerk ball oyunu çok ilginç bir oyun olmakla beraber çok zevkli bir oyundur. Bu oyunda Mouse yardımıyla arkadaşınıza elinizdeki sopayla kuvvetlice vuruyorsunuz ve onu ne kadar yükseğe ya da ileri fırlatabildiğinize bakıyorsunuz. Günlük hayatta bazen ikili ilişkilerde sinir olduğumuz ya da hoşumuza gitmeyen birileri vardır. Bu oyunla işte size o sinir olduğunuz ya da hoşa gitmeyen arkadaşınızı onun yerine koyup pataklama imkânı veriyoruz  Şaka bir yana bu oyunu oynarken hem eğlenecek hem de stres atacaksınız. Bu güzel oyunu oynarken keyifli dakikalar geçireceğinize eminiz. Keyifli dakikalar sizleri bekliyor. www.enguzeloyunlar.org ailesi iyi oyunlar diler.', 5, '2018-05-04', 'img/824371337.jpg', 'oyunlar/8324.swf', 0, 0),
(66, 'Bob Usta Oyunu ', 'bob-usta-oyunu', 'Bob Usta iş başında. Bob usta Minika çocuk ekranlarından sonra enguzeloyunler.org da yerini aldı. Çizgi film dünyasının en renkli karakterlerinden olan Bob usta şimdi sizin yardımınızla maceralarına devam edecek. Bob Usta ile bu oyunda grader buldozer kullanacaksınız yıkıntıları sürükleyerek yakılması için ayrılan alanda imha edeceksiniz. İlk başlarda kolay olsada ilerleyen aşamalarda bir hayli zorlaşında işler Bob Usta sizden çılgın fikirler bekleyecek ve ancak kazanmanın yolu çok başarılı olmaktan geçiyor. Şimdi kim daha iyi olacak daha iyi çalışacak göreceğiz.', 5, '2018-05-04', 'img/280090332.png', 'oyunlar/bob-usta-oyunu.swf', 0, 0),
(67, 'Bomba Uzmanı ', 'bomba-uzmani', 'Dünya canavar istilasında ve dünyayı kurtarma görevi sizlerde. Bu sorumluluğu alabilecekseniz size bir kaç talimat vereceğiz. Yapmanız gereken şey boşluk tuşunu kullanarak bombaları canavarlara en yakın size en uzak yere bırakmak ve istilayı durdurmak. Cesaretinizi kullanarak oynayacağınız bu oyunda başarılar dileriz. enguzeloyunlar.org ailesi iyi oyunlar diler.', 5, '2018-05-04', 'img/750335693.jpg', 'oyunlar/08512[1].swf', 0, 0),
(68, 'Boşluğa Basma ', 'bosluga-basma', 'Parmaklarına çok fazla güveniyor musun? Onları bir test etmek ister misin ? Eğer test etmek istiyorsan en iyi fırsatı burada yakaladın demektir. Önündeki karede yazan rakama göre 1,2,3, yada 4’e bas. Özellikle kareleri ve sayıları doğru takip etmeye çalış. Eğer yanlış bir rakama basarsan tekrardan başa dönersin ve maalesef baştan oynarsın. Seçebileceğin 4 farklı model var. Ama eğer sen istersen en uzağa da gitmeyi deneyebilirsin, zamana karşı yarışmayı da deneyebilirsin. Zaman karşı yarışıp kendini test edersen öyle daha yaratıcı olur. www.enguzeloyunlar.org iyi oyunlar diler.', 5, '2018-05-04', 'img/368499755.jpg', 'oyunlar/8869.swf', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_yorumbegeni`
--

DROP TABLE IF EXISTS `tbl_yorumbegeni`;
CREATE TABLE IF NOT EXISTS `tbl_yorumbegeni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_id` int(11) NOT NULL,
  `yorum_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `tbl_yorumbegeni`
--

INSERT INTO `tbl_yorumbegeni` (`id`, `kullanici_id`, `yorum_id`) VALUES
(19, 88, 48),
(16, 88, 38),
(20, 88, 39),
(9, 87, 45),
(11, 87, 40),
(12, 87, 48),
(13, 87, 47);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_yorumlar`
--

DROP TABLE IF EXISTS `tbl_yorumlar`;
CREATE TABLE IF NOT EXISTS `tbl_yorumlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_id` int(11) NOT NULL,
  `oyun_id` int(11) NOT NULL,
  `referans_id` int(11) NOT NULL DEFAULT '0',
  `tarih` datetime NOT NULL,
  `yorum` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tbl_yorumlar`
--

INSERT INTO `tbl_yorumlar` (`id`, `kullanici_id`, `oyun_id`, `referans_id`, `tarih`, `yorum`) VALUES
(48, 87, 55, 38, '2018-05-12 07:18:11', 'elma 2'),
(47, 87, 55, 38, '2018-05-12 06:51:58', 'Elma 1'),
(46, 87, 55, 44, '2018-05-12 03:29:30', 'armut 1 2 1'),
(45, 87, 55, 42, '2018-05-12 03:29:17', 'armut 1 1 1'),
(44, 87, 55, 40, '2018-05-12 03:28:56', 'armut 1 2'),
(43, 87, 55, 41, '2018-05-12 03:25:22', 'ARMUT 2 1'),
(42, 87, 55, 40, '2018-05-12 03:25:08', 'ARMUT 1 1'),
(41, 87, 55, 39, '2018-05-12 03:24:53', 'ARMUT 2'),
(40, 87, 55, 39, '2018-05-12 03:24:43', 'ARMUT 1'),
(39, 87, 55, 0, '2018-05-12 03:24:35', 'ARMUT'),
(38, 87, 55, 0, '2018-05-12 03:24:29', 'ELMA'),
(50, 88, 55, 47, '2018-05-12 20:40:51', 'hakakdsadsadas'),
(51, 87, 55, 44, '2018-05-13 22:29:35', 'armut 1 2 1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
