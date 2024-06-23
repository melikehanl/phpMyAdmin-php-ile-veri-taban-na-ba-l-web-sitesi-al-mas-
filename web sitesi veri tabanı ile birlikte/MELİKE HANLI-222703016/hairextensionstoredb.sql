-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Haz 2024, 19:15:29
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hairextensionstoredb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_i̇ndirimkupon`
--

CREATE TABLE `tbl_i̇ndirimkupon` (
  `Kupon_ID` int(11) NOT NULL,
  `Kupon_Kodu` varchar(25) NOT NULL,
  `Kupon_GecerlilikSuresi` datetime NOT NULL,
  `Kupon_KullanimDurum` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci COMMENT='Bu Tabloda İndirim Kupon Bilgisi Bulunmaktadır.';

--
-- Tablo döküm verisi `tbl_i̇ndirimkupon`
--

INSERT INTO `tbl_i̇ndirimkupon` (`Kupon_ID`, `Kupon_Kodu`, `Kupon_GecerlilikSuresi`, `Kupon_KullanimDurum`) VALUES
(1, 'SEPETTE100', '2023-08-15 22:11:48', 'Pasif'),
(2, 'SAÇ1020', '2022-09-14 22:11:48', 'Pasif'),
(3, 'PERUK2529', '2022-03-10 22:13:55', 'Pasif'),
(4, 'EKİM11', '2023-12-14 22:13:55', 'Pasif'),
(5, 'YILBASI100', '2024-05-10 21:15:17', 'Aktif'),
(6, 'KASIM2025', '2023-11-08 22:15:17', 'Pasif'),
(7, 'KIS1214', '2023-01-19 22:16:05', 'Pasif'),
(8, 'BAHAR7075', '2023-04-26 22:16:05', 'Pasif'),
(9, 'YAZ1001', '2024-06-21 22:17:14', 'Aktif'),
(10, 'MAYIS2020', '2024-05-20 22:18:14', 'Aktif');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `Kat_ID` int(11) NOT NULL,
  `Kat_Ad` varchar(50) NOT NULL,
  `Kat_Tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci COMMENT='Bu Tablo Kategori içerir.';

--
-- Tablo döküm verisi `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`Kat_ID`, `Kat_Ad`, `Kat_Tarih`) VALUES
(1, 'Peruk', '2024-05-10 19:04:54'),
(2, 'Örgülü Saçlar', '2024-05-10 19:04:54'),
(3, 'Boncuk Kaynak', '2024-05-10 19:05:34'),
(4, 'Mikro Kaynak Saç', '2024-05-10 19:05:34'),
(5, 'Protez Saç', '2024-05-10 19:06:01'),
(6, 'At Kuyruğu Saç', '2024-05-10 19:06:01'),
(7, 'Yarımay Çıtçıt Saç', '2024-05-10 19:06:48'),
(8, 'Çıt Çıt Saç', '2024-05-10 19:06:48'),
(9, 'Perçem Saç', '2024-05-10 19:07:10'),
(10, 'Afro Saç', '2024-05-10 19:07:10'),
(11, 'Tepelik Saçlar', '2024-05-10 19:07:36'),
(12, 'Tül Peruklar', '2024-05-10 19:07:36');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_musteriler`
--

CREATE TABLE `tbl_musteriler` (
  `Mus_ID` int(11) NOT NULL,
  `Mus_Ad` varchar(50) NOT NULL,
  `Mus_Soyad` varchar(50) NOT NULL,
  `Mus_GSM` varchar(11) NOT NULL,
  `Mus_Email` varchar(255) NOT NULL,
  `Mus_DogumTarih` date NOT NULL,
  `Mus_TeslimatAdres` varchar(255) NOT NULL,
  `Mus_FaturaAdres` varchar(250) NOT NULL,
  `Mus_IL` varchar(50) NOT NULL,
  `Mus_ILCE` varchar(50) NOT NULL,
  `Mus_Foto` varchar(500) NOT NULL,
  `Mus_KayitTarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci COMMENT='Bu Tabloda Müşteri Kişisel Bilgileri Bulunmaktadır.';

--
-- Tablo döküm verisi `tbl_musteriler`
--

INSERT INTO `tbl_musteriler` (`Mus_ID`, `Mus_Ad`, `Mus_Soyad`, `Mus_GSM`, `Mus_Email`, `Mus_DogumTarih`, `Mus_TeslimatAdres`, `Mus_FaturaAdres`, `Mus_IL`, `Mus_ILCE`, `Mus_Foto`, `Mus_KayitTarih`) VALUES
(1, 'Ahmet', 'KOPUK', '05465232154', 'ahmetkopuk@gop.edu.tr', '1969-12-06', 'karpuz mah. uzum cad. NO:10', 'karpuz mah. uzum cad. NO:10', 'ERZİNCAN', 'MERKEZ', '', '2024-05-10 19:28:56'),
(2, 'Mehmet', 'DEMİR', '05464788559', 'mehmetdemir@example.com', '1983-04-22', 'Menekşe sok. okullar cad. NO:21', 'Menekşe sok. okullar cad. NO:21', 'İSTANBUL', 'SARIYER', '', '2024-05-10 19:28:56'),
(3, 'Ayşe', 'KAYAN', '05462561489', 'aysekaya@example.com', '1969-12-06', 'Yeşilırmah mah. çeçenistan cad. NO:54', 'Yeşilırmah mah. çeçenistan cad. NO:54', 'TOKAT', 'MERKEZ', '', '2024-05-10 19:32:29'),
(4, 'Salim', 'DEMİRCİ', '05302221512', 'salimdemirci@example.com', '1975-01-25', 'Osmangazi sok. yediklim cad. NO:35', 'Osmangazi sok. yediklim cad. NO:35', 'İZMİR', 'KONAK', '', '2024-05-10 19:32:29'),
(5, 'Melike', 'HANLI', '05455266336', 'melikehanli@gop.edu.tr', '2014-06-12', 'yeniçeşme mah. ayfer sok. NO:25', 'yeniçeşme mah. ayfer sok. NO:25', 'TOKAT', 'MERKEZ', '', '2024-05-10 19:35:02'),
(6, 'Zeynep', 'ŞAN', '0562635989', 'zeynepsan@gop.edu.tr', '1999-02-21', 'yeniçeşme mah. ayfer sok. NO:25', 'yeniçeşme mah. ayfer sok. NO:25', 'AYDIN', 'MERKEZ', '', '2024-05-10 19:35:02'),
(7, 'Eylül', 'ÖZ', '05556235658', 'eyluloz@gop.edu.tr', '1999-12-06', 'Yenişehir Mah.  yıldız Sok. NO:23', 'Yenişehir Mah.  yıldız Sok. NO:23', 'İZMİR', 'MENEMEN', '', '2024-05-10 19:37:17'),
(8, 'Alperen', 'SEÇGİN', '05302122665', 'alperensecgin@gop.edu.tr', '1997-05-09', 'Yelken mah. Şahin Sok. NO:67', 'Yelken mah. Şahin Sok. NO:67', 'TRABZON', 'MERKEZ', '', '2024-05-10 19:37:17'),
(9, 'Kazım', 'AKMEŞE', '05541632598', 'kazımakmese@gop.edu.tr', '1974-11-25', 'saklıbahçe mah. yılmaz sok. NO:41', 'saklıbahçe mah. yılmaz sok. NO:41', 'ÇORUM', 'MERKEZ', '', '2024-05-10 19:39:48'),
(10, 'Muhammet Said', 'DOST', '05465235157', 'muhammetsaid@gop.edu.tr', '1989-09-28', 'Gece Mah. Papatya Sok. NO:78', 'Gece Mah. Papatya Sok. NO:78', 'MERSİN', 'MERKEZ', '', '2024-05-10 19:39:48'),
(19, 'Sadık', 'EKİN', '05455124789', 'sadıkekin@gop.edu.tr', '1969-06-08', 'kayıp mah. yılmaz. sok. NO:9', 'kayıp mah. yılmaz. sok. NO:9', 'MANISA', 'MERKEZ', 'dosyalar/resim6.jpg', '2024-05-26 15:41:31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_sepet`
--

CREATE TABLE `tbl_sepet` (
  `Sepet_ID` int(11) NOT NULL,
  `Sepet_KullaniciID` int(11) NOT NULL,
  `Sepet_Urun_ID` int(11) NOT NULL,
  `Sepet_Urun_Barkod` varchar(100) NOT NULL,
  `Sepet_Miktar` varchar(50) NOT NULL,
  `Sepet_ToplamTutar` float NOT NULL,
  `Sepet_Tarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci COMMENT='Bu Tabloda Sepete Eklenen Ürün Bilgileri Vardır';

--
-- Tablo döküm verisi `tbl_sepet`
--

INSERT INTO `tbl_sepet` (`Sepet_ID`, `Sepet_KullaniciID`, `Sepet_Urun_ID`, `Sepet_Urun_Barkod`, `Sepet_Miktar`, `Sepet_ToplamTutar`, `Sepet_Tarih`) VALUES
(1, 1, 2, 'H7836-2F89A', '5', 5500, '2024-05-10 19:45:55'),
(2, 2, 5, 'WW4-26INCH', '6', 90000, '2024-05-10 19:45:55'),
(3, 3, 7, 'H8958-BD2123', '200', 180000, '2024-05-10 19:47:17'),
(4, 4, 9, 'W2886-2-30-PM-14X', '500', 4500000, '2024-05-10 19:47:17'),
(5, 6, 7, 'H8958-BD2123', '10000', 90000, '2024-05-10 19:48:25'),
(6, 5, 9, 'W026-3-88-85', '50000', 4500000, '2024-05-12 11:30:08'),
(7, 5, 9, 'W2886-2-30-PM-14X', '500', 450000, '2024-05-10 19:49:21'),
(8, 4, 1, 'H4899-10', '50000', 55000000, '2024-05-10 19:49:21'),
(9, 7, 5, 'Esperer-Afro-8', '10000', 450000, '2024-05-12 11:30:19'),
(10, 8, 10, 'GP-4-PM-14-X', '750', 225000, '2024-05-12 11:30:30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_siparis`
--

CREATE TABLE `tbl_siparis` (
  `Siparis_ID` int(11) NOT NULL,
  `Siparis_Mus_ID` int(11) NOT NULL,
  `Siparis_Tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `Siparis_ToplamTutar` float NOT NULL,
  `Siparis_Durum` varchar(50) NOT NULL,
  `Siparis_OdemeDurum` varchar(10) NOT NULL,
  `Siparis_Urun_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci COMMENT='Bu Tabloda Sipariş durumu içermektedir';

--
-- Tablo döküm verisi `tbl_siparis`
--

INSERT INTO `tbl_siparis` (`Siparis_ID`, `Siparis_Mus_ID`, `Siparis_Tarih`, `Siparis_ToplamTutar`, `Siparis_Durum`, `Siparis_OdemeDurum`, `Siparis_Urun_ID`) VALUES
(1, 1, '2024-05-10 20:21:49', 5000, 'Hazırlanıyor', 'Kredi Kart', 2),
(2, 3, '2024-05-10 20:21:49', 10000, 'Kargoya Verildi', 'EFT', 3),
(3, 4, '2024-05-10 20:23:09', 10000, 'Teslim Edildi', 'Havale', 6),
(4, 3, '2024-05-10 20:23:09', 5000, 'Hazırlanıyor', 'EFT', 11),
(5, 6, '2024-05-10 20:24:24', 10000, 'Hazırlanıyor', 'Kredi Kart', 6),
(6, 10, '2024-05-10 20:24:24', 5000, 'Kargoya Verildi', 'EFT', 5),
(7, 7, '2024-05-10 20:25:24', 150000, 'Hazırlanıyor', 'Havale', 5),
(8, 1, '2024-05-10 20:25:24', 25000000, 'Kargoya Verildi', 'EFT', 13),
(9, 6, '2024-05-10 20:26:22', 3500, 'Hazırlanıyor', 'Kredi Kart', 13),
(10, 4, '2024-05-10 20:26:22', 20000000, 'Hazırlanıyor', 'HAVALE', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_stok`
--

CREATE TABLE `tbl_stok` (
  `Stok_ID` int(11) NOT NULL,
  `Stok_Kat_ID` int(11) NOT NULL,
  `Stok_Urun_Barkod` varchar(100) NOT NULL,
  `Stok_AlısFiyat` float NOT NULL,
  `Stok_SatisFiyat` float NOT NULL,
  `Stok_Miktar` varchar(500) NOT NULL,
  `Stok_Tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci COMMENT='Bu Tabloda Stok Bilgileri Vardır.';

--
-- Tablo döküm verisi `tbl_stok`
--

INSERT INTO `tbl_stok` (`Stok_ID`, `Stok_Kat_ID`, `Stok_Urun_Barkod`, `Stok_AlısFiyat`, `Stok_SatisFiyat`, `Stok_Miktar`, `Stok_Tarih`) VALUES
(1, 1, 'H4899-10', 850, 1100, '10000', '2024-05-10 20:32:00'),
(2, 1, 'H7836-2F89A', 850, 1100, '10000', '2024-05-10 20:32:00'),
(3, 1, 'H7231-4-PM', 850, 1100, '6000', '2024-05-10 20:33:16'),
(4, 12, 'SY11063-TT2171-PM', 3600, 4000, '6500', '2024-05-10 20:33:16'),
(5, 12, 'WW4-26INCH', 13500, 15000, '25000', '2024-05-10 20:33:59'),
(6, 2, '3-22-PM-14X', 200, 250, '1500', '2024-05-10 20:35:12'),
(7, 6, 'H8958-BD2123', 850, 900, '500', '2024-05-10 20:35:12'),
(8, 6, 'M150-85-88', 850, 900, '10000', '2024-05-10 20:36:14'),
(9, 8, 'W2886-2-30-PM-14X', 550, 600, '700', '2024-05-10 20:36:14'),
(10, 8, 'W2681-2-33-PM-14X', 850, 900, '5000', '2024-05-10 20:37:27'),
(11, 7, 'W026-3-88-85', 850, 900, '5000', '2024-05-10 20:37:27');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_urunler`
--

CREATE TABLE `tbl_urunler` (
  `Urun_ID` int(11) NOT NULL,
  `Urun_Kat_ID` int(11) NOT NULL,
  `Urun_Barkod` varchar(50) NOT NULL,
  `Urun_Ad` varchar(50) NOT NULL,
  `Urun_Sekli` varchar(100) NOT NULL,
  `Urun_Uzunluk` float NOT NULL,
  `Urun_Turu` varchar(150) NOT NULL,
  `Urun_Renk` varchar(150) NOT NULL,
  `Urun_Fiyat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci COMMENT='Bu Tabloda Urun Bilgileri Bulunmaktadır.';

--
-- Tablo döküm verisi `tbl_urunler`
--

INSERT INTO `tbl_urunler` (`Urun_ID`, `Urun_Kat_ID`, `Urun_Barkod`, `Urun_Ad`, `Urun_Sekli`, `Urun_Uzunluk`, `Urun_Turu`, `Urun_Renk`, `Urun_Fiyat`) VALUES
(1, 1, 'H4899-10', 'Katlı Kesim Perçemli Düz Fiber Sentetik 260 gram', 'Düz Saç', 60, 'Fiber Sentetik', 'Kumral', 1100),
(2, 1, 'H7836-2F89A', 'Dalgalı Perçemli Fiber Sentetik 260 gram', 'Dalgalı Saç', 60, 'Fiber Sentetik', 'Siyah Gri Obreli', 1100),
(3, 1, 'H7231-4-PM', 'Düz Perçemli Uzun Fiber Sentetik Peruk 260 gram', 'Düz Saç', 90, 'Fiber Sentetik', 'Kahverengi', 1100),
(4, 2, '3-22-PM-14X', 'Afrika Örgüsü Ve Rasta İçin Sentetik Ombreli Saç', '-', 81, ' Sentetik', 'Siyah / Koyu Yeşil / Açık Yeşil', 250),
(5, 6, 'H8958-BD2123', 'Tokalı Dalgalı At Kuyruğu 100 gram', 'Dalgalı Saç', 75, 'Fiber Sentetik', 'Bal Köpüğü ', 900),
(6, 6, 'M150-85-88', 'Bağlamalı Düz At Kuyruğu 100  gram', 'Düz Saç', 75, 'Fiber Sentetik', 'Kumral Beyaz Platin Röfleli', 600),
(7, 8, 'W2886-2-30-PM-14X', 'Fiber Sentetik Kabarık Dalgalı 8 Parça Çıt Çıt 130', 'Kabarık Dalgalı Saç', 70, 'Fiber Sentetik', 'Kahve Karamel', 900),
(8, 8, 'W2681-2-33-PM-14X', 'Fiber Sentetik Düz 8 Parça Çıt Çıt 150 gram', 'Düz Saç ', 65, 'Fiber Sentetik', 'Koyu Kahve', 900),
(9, 7, 'W026-3-88-85', 'Fiber Sentetik Kabarık Dalgalı Yarım Ay + 2 Yan Çı', 'Kabarık Dalgalı Saç ', 70, 'Fiber Sentetik', 'Kumral Beyaz Platin Röfleli', 900),
(10, 7, 'HD047-4T118-PM-14X', 'Fiber Sentetik Düz Yarım Ay + 2 Yan Çıt Çıt 150 gr', 'Düz Saç', 70, 'Fiber Sentetik', 'Koyu Kızıl', 900);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_i̇ndirimkupon`
--
ALTER TABLE `tbl_i̇ndirimkupon`
  ADD PRIMARY KEY (`Kupon_ID`);

--
-- Tablo için indeksler `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`Kat_ID`),
  ADD KEY `idx_Kategori_ID` (`Kat_ID`);

--
-- Tablo için indeksler `tbl_musteriler`
--
ALTER TABLE `tbl_musteriler`
  ADD PRIMARY KEY (`Mus_ID`),
  ADD KEY `idx_Mus_ID` (`Mus_ID`),
  ADD KEY `idx_Mus` (`Mus_ID`);

--
-- Tablo için indeksler `tbl_sepet`
--
ALTER TABLE `tbl_sepet`
  ADD PRIMARY KEY (`Sepet_ID`),
  ADD KEY `idx_Sepet_ID` (`Sepet_ID`),
  ADD KEY `fk_sepet_urun_id` (`Sepet_Urun_ID`);

--
-- Tablo için indeksler `tbl_siparis`
--
ALTER TABLE `tbl_siparis`
  ADD PRIMARY KEY (`Siparis_ID`),
  ADD KEY `idx_Siparis_ID` (`Siparis_ID`),
  ADD KEY `idx_Siparis` (`Siparis_ID`),
  ADD KEY `fk_siparis_mus_id` (`Siparis_Mus_ID`);

--
-- Tablo için indeksler `tbl_stok`
--
ALTER TABLE `tbl_stok`
  ADD PRIMARY KEY (`Stok_ID`),
  ADD KEY `idx_Stok_ID` (`Stok_ID`),
  ADD KEY `fk_stok_kat_id` (`Stok_Kat_ID`),
  ADD KEY `idx_Stok` (`Stok_ID`);

--
-- Tablo için indeksler `tbl_urunler`
--
ALTER TABLE `tbl_urunler`
  ADD PRIMARY KEY (`Urun_ID`),
  ADD KEY `idx_Urun_ID` (`Urun_ID`),
  ADD KEY `fk_Urun_Kat_ID` (`Urun_Kat_ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_i̇ndirimkupon`
--
ALTER TABLE `tbl_i̇ndirimkupon`
  MODIFY `Kupon_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `Kat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_musteriler`
--
ALTER TABLE `tbl_musteriler`
  MODIFY `Mus_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_sepet`
--
ALTER TABLE `tbl_sepet`
  MODIFY `Sepet_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_siparis`
--
ALTER TABLE `tbl_siparis`
  MODIFY `Siparis_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_stok`
--
ALTER TABLE `tbl_stok`
  MODIFY `Stok_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_urunler`
--
ALTER TABLE `tbl_urunler`
  MODIFY `Urun_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `tbl_sepet`
--
ALTER TABLE `tbl_sepet`
  ADD CONSTRAINT `fk_sepet_urun_id` FOREIGN KEY (`Sepet_Urun_ID`) REFERENCES `tbl_urunler` (`Urun_ID`);

--
-- Tablo kısıtlamaları `tbl_siparis`
--
ALTER TABLE `tbl_siparis`
  ADD CONSTRAINT `fk_siparis_mus_id` FOREIGN KEY (`Siparis_Mus_ID`) REFERENCES `tbl_musteriler` (`Mus_ID`);

--
-- Tablo kısıtlamaları `tbl_stok`
--
ALTER TABLE `tbl_stok`
  ADD CONSTRAINT `fk_stok_kat_id` FOREIGN KEY (`Stok_Kat_ID`) REFERENCES `tbl_kategori` (`Kat_ID`);

--
-- Tablo kısıtlamaları `tbl_urunler`
--
ALTER TABLE `tbl_urunler`
  ADD CONSTRAINT `fk_Urun_Kat_ID` FOREIGN KEY (`Urun_Kat_ID`) REFERENCES `tbl_kategori` (`Kat_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
