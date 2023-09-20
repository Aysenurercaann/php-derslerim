-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Eyl 2023, 00:05:29
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sinirsiz`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menuler`
--

CREATE TABLE `menuler` (
  `id` int(10) UNSIGNED NOT NULL,
  `ustid` int(10) UNSIGNED NOT NULL,
  `menuadi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `menuler`
--

INSERT INTO `menuler` (`id`, `ustid`, `menuadi`) VALUES
(2, 0, 'Elektronik'),
(3, 0, 'Kitap'),
(4, 0, 'Bilgisayar'),
(11, 3, 'Roman'),
(12, 3, 'Karikatür'),
(13, 3, 'Çizgi Roman'),
(14, 4, 'Masaüstü PC'),
(15, 4, 'Çevre Birimleri'),
(16, 4, 'Bileşenler'),
(17, 4, 'Aksesuar'),
(18, 16, 'Ram'),
(19, 16, 'Ekran Kartı'),
(20, 16, 'Anakart'),
(21, 16, 'Hard Disk'),
(22, 18, 'DDR3'),
(23, 18, 'DDR4'),
(24, 21, 'SSD'),
(25, 21, 'Katı Disk'),
(26, 2, 'Televizyon'),
(27, 2, 'Müzik Seti'),
(28, 3, 'Resim'),
(29, 19, 'MSI'),
(30, 15, 'Klavye'),
(31, 15, 'Mouse'),
(32, 30, 'Mekanik'),
(33, 32, 'Asus'),
(34, 32, 'MSI'),
(35, 32, 'Razor');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `menuler`
--
ALTER TABLE `menuler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `menuler`
--
ALTER TABLE `menuler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
