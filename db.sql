-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 13 Ağu 2020, 19:27:05
-- Sunucu sürümü: 5.7.24
-- PHP Sürümü: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenciler`
--

CREATE TABLE `ogrenciler` (
  `number` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `age` int(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lesson` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ogrenciler`
--

INSERT INTO `ogrenciler` (`number`, `name`, `surname`, `age`, `date`, `lesson`) VALUES
(51, 'Nurullah', 'Erciyas', 22, '2020-08-13 17:43:32', 'MAT'),
(52, 'Анастасия', 'Denysiuk', 20, '2020-08-13 18:06:07', 'TUR,MAT'),
(55, 'Britney', 'Spears', 35, '2020-08-13 18:49:08', 'TAR'),
(56, 'John', 'Wick', 40, '2020-08-13 19:12:42', 'GEO'),
(57, 'Cristiano', 'Ronaldo', 33, '2020-08-13 19:13:04', 'MAT,GEO'),
(58, 'Ahmet', 'Kılıç', 50, '2020-08-13 19:13:45', 'TAR'),
(59, 'İlber', 'Şimşek', 60, '2020-08-13 19:14:02', 'TUR,GEO,MAT'),
(60, 'Kerim', 'Çelik', 29, '2020-08-13 19:14:24', 'MAT,GEO,TUR,TAR'),
(61, 'Ricardo', 'Quaresma', 36, '2020-08-13 19:14:47', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ogrenciler`
--
ALTER TABLE `ogrenciler`
  ADD PRIMARY KEY (`number`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ogrenciler`
--
ALTER TABLE `ogrenciler`
  MODIFY `number` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
