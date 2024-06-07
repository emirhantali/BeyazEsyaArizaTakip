-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 21 May 2024, 18:06:18
-- Sunucu sürümü: 8.2.0
-- PHP Sürümü: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `arizatakip`
--
CREATE DATABASE IF NOT EXISTS `arizatakip` DEFAULT CHARACTER SET utf16 COLLATE utf16_general_ci;
USE `arizatakip`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(250) NOT NULL,
  `sifre` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf16;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `ad`, `sifre`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arizarandevu`
--

DROP TABLE IF EXISTS `arizarandevu`;
CREATE TABLE IF NOT EXISTS `arizarandevu` (
  `arizaİd` int NOT NULL AUTO_INCREMENT,
  `uyeid` int NOT NULL,
  `konubasligi` varchar(100) NOT NULL,
  `cihaz` varchar(100) NOT NULL,
  `aciklama` varchar(5000) NOT NULL,
  `telno` int NOT NULL,
  `email` varchar(150) NOT NULL,
  `tarih` date NOT NULL,
  `tahminibitistarih` date NOT NULL,
  `personel` varchar(50) NOT NULL,
  `servistipi` varchar(50) NOT NULL,
  `durum` int NOT NULL,
  `admin_not` varchar(10000) NOT NULL,
  `personel_not` varchar(900) NOT NULL,
  PRIMARY KEY (`arizaİd`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf16;

--
-- Tablo döküm verisi `arizarandevu`
--

INSERT INTO `arizarandevu` (`arizaİd`, `uyeid`, `konubasligi`, `cihaz`, `aciklama`, `telno`, `email`, `tarih`, `tahminibitistarih`, `personel`, `servistipi`, `durum`, `admin_not`, `personel_not`) VALUES
(1, 1, 'Fırınım Bozuldu Yardım edermisiniz teşekkürler', 'Fırın', 'Merhaba fırınım bozuldu tamire ihtiyacım varrrrrrrr    ', 2147483647, 'talha1@gmail.com', '2024-05-14', '2024-05-30', '1', 'Bakım', 2, 'arızanız bize ulaşmıştır teşekkürler', ''),
(2, 1, 'Bulaşık Makinası Arızası', 'Bulaşık makinesi', '  merhaba benim bulaşık makineme bakım istiyoru', 2147483647, 'utku_tb_erkan@hotmail.com', '2024-05-14', '2024-05-19', '1', 'Bakım', 1, 'mehaba arızanız bize ulaştı', 'merhaba arızanız tamamlanmıştır'),
(3, 1, 'buzdolabı', 'Fırın', '  vsvsvsvsvs', 2147483647, 'utku_tb_erkan@hotmail.com', '2024-05-16', '2024-05-18', '2', 'Onarım', 0, 'arızanınız elimimze ulaştı teşekkürler', ''),
(4, 1, 'emirhan', 'Derin Dondurucu', '  merhaba ben emirhan', 123123, 'emiran@gmailc.om', '2024-05-21', '2024-05-30', '3', 'Onarım', 0, 'işleminiz alınmıştır', ''),
(5, 1, 'yağız', 'Fırın', '  merhaba efendim', 45231, 'ygz61bkts@gmail.com', '2024-05-21', '0000-00-00', '', 'Onarım', 0, '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE IF NOT EXISTS `iletisim` (
  `İletisimID` int NOT NULL AUTO_INCREMENT,
  `AdSoyad` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `KonuBasligi` varchar(100) NOT NULL,
  `Yazi` varchar(1500) NOT NULL,
  `TelNo` int NOT NULL,
  PRIMARY KEY (`İletisimID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf16;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`İletisimID`, `AdSoyad`, `Mail`, `KonuBasligi`, `Yazi`, `TelNo`) VALUES
(1, 'Yağız Bektaş', 'denme@gmail.com', 'Kayıt Sorunu', '  merhaba kayıt ile ilgili bir sorun yaşıorum', 2147483647),
(2, 'Yağız Bektaş', 'denme@gmail.com', 'Kayıt Sorunu', '  merhaba kayıt ile ilgili bir sorun yaşıorum', 2147483647);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

DROP TABLE IF EXISTS `personel`;
CREATE TABLE IF NOT EXISTS `personel` (
  `pid` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(100) NOT NULL,
  `soyad` varchar(100) NOT NULL,
  `sifre` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf16;

--
-- Tablo döküm verisi `personel`
--

INSERT INTO `personel` (`pid`, `ad`, `soyad`, `sifre`) VALUES
(1, 'Yağız', 'Bektaş', '123'),
(2, 'Emirhan', 'Tali', '123'),
(3, 'Cebrail', 'Ergin', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(20) NOT NULL,
  `soyad` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sifre` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf16;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `ad`, `soyad`, `email`, `sifre`) VALUES
(1, 'talha', 'bal', 'talha@gmail.com', 'trabzon61'),
(2, 'mustafa', 'aydn', 'deneme@gmail.com', 'trz61'),
(3, 'Yağız', 'Bektaş', 'ygzbktsts@gmail.com', 'elma123'),
(4, 'erkan', 'bektaş', 'erkan@gmail.com', 'trabzon6161');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
