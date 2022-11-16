-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Kas 2022, 22:00:28
-- Sunucu sürümü: 10.1.21-MariaDB
-- PHP Sürümü: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `optik`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cevap_anahtar`
--

CREATE TABLE `cevap_anahtar` (
  `id` int(255) NOT NULL,
  `tc` bigint(12) NOT NULL,
  `ders_ad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kitapcikTur` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s1` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s2` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s3` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s4` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s5` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s6` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s7` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s8` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s9` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s10` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s11` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s12` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s13` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s14` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s15` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s16` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s17` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s18` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s19` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s20` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `cevap_anahtar`
--

INSERT INTO `cevap_anahtar` (`id`, `tc`, `ders_ad`, `kitapcikTur`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `s17`, `s18`, `s19`, `s20`) VALUES
(41, 111111111111, 'Atatürk İlkeleri ve İnkılap Tarihi', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'A', 'E', 'D');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `datapoints`
--

CREATE TABLE `datapoints` (
  `x` int(50) NOT NULL,
  `y` int(50) NOT NULL,
  `a` int(50) NOT NULL,
  `b` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `datapoints`
--

INSERT INTO `datapoints` (`x`, `y`, `a`, `b`) VALUES
(25, 15, 5, 60),
(12, 23, 34, 45);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `exceldok`
--

CREATE TABLE `exceldok` (
  `id` int(255) NOT NULL,
  `tc` bigint(12) NOT NULL,
  `ders_ad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `fakulte` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `bolum` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kitapcikTur` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s1` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s2` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s3` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s4` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s5` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s6` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s7` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s8` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s9` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s10` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s11` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s12` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s13` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s14` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s15` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s16` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s17` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s18` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s19` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s20` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `puan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `exceldok`
--

INSERT INTO `exceldok` (`id`, `tc`, `ders_ad`, `fakulte`, `bolum`, `kitapcikTur`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `s17`, `s18`, `s19`, `s20`, `puan`) VALUES
(419, 76653807984, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'A', 'C', 'C', 'D', 'E', 'B', 'D', 'E', 'A', 'B', 'B', 'D', 'E', 'C', 'C', 'C', 'E', 'B', 'A', 45),
(420, 46891789805, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'C', 'E', 'D', 'D', 'D', 'E', 'B', 'B', 'A', 'D', 'C', 'E', 'D', 'A', 'E', 'B', 'B', 'A', 25),
(421, 85127434897, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'A', 'C', 'C', 'B', 'D', 'E', 'A', 'A', 'D', 'E', 'B', 'C', 'E', 'A', 'D', 'E', 'D', 'B', 'E', 20),
(422, 88430419450, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'A', 'B', 'D', 95),
(423, 89078744138, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'A', 'D', 'E', 'A', 'B', 'C', 'D', 'E', 'E', 'A', 'A', 'B', 'B', 'D', 30),
(424, 18140063404, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'C', 'D', 'C', 'A', 'D', 'D', 'E', 'D', 'B', 'C', 'C', 'A', 'B', 'A', 'E', 'E', 'C', 'D', 'D', 15),
(425, 77048748960, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'E', 'E', 'D', 95),
(426, 87120569383, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'E', 'E', 'E', 'C', 'A', 'C', 'C', 'E', 'D', 'B', 'A', 'B', 'D', 'B', 'D', 'B', 'C', 'A', 'A', 10),
(427, 17625303000, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'D', 'A', 'D', 'B', 'B', 'C', 'A', 'E', 'C', 'C', 'E', 'C', 'A', 'B', 'B', 'C', 'C', 'C', 'B', 5),
(428, 42274970341, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'C', 'B', 'B', 'A', 'E', 'A', 'A', 'B', 'C', 'D', 'B', 'D', 'E', 'E', 'E', 'D', 'E', 'A', 'D', 'B', 20),
(429, 10337007566, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'D', 'B', 'D', 'B', 'A', 'B', 'C', 'B', 'B', 'E', 'A', 'E', 'A', 'D', 'C', 'C', 'B', 'A', 'E', 'A', 30),
(430, 47285107550, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'A', 'E', 'C', 95),
(431, 83802162249, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'C', 'D', 'E', 'C', 'D', 'C', 'D', 'A', 'B', 'B', 'C', 'E', 'B', 'C', 'A', 'C', 'D', 'D', 'B', 'B', 20),
(432, 86582592343, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'A', 'C', 'C', 90),
(433, 78445350685, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'B', 'A', 'D', 90),
(434, 12047790231, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'E', 'A', 'E', 'B', 'B', 'D', 'E', 'E', 'D', 'B', 'D', 'A', 'D', 'B', 'A', 'C', 'A', 'D', 'E', 5),
(435, 59627847325, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'D', 'A', 'D', 'D', 'A', 'E', 'C', 'D', 'E', 'E', 'D', 'E', 'A', 'D', 'A', 'A', 'E', 'B', 'C', 'E', 15),
(436, 56968536280, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'C', 'E', 'C', 90),
(437, 36388822220, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'D', 'E', 'E', 'A', 'A', 'C', 'D', 'C', 'C', 'A', 'B', 'A', 'D', 'D', 'A', 'C', 'E', 'B', 'E', 'C', 20),
(438, 54582675843, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'C', 'C', 'D', 'E', 'A', 'B', 'E', 'C', 'E', 'E', 'C', 'C', 'A', 'A', 'E', 'C', 'A', 'B', 'B', 15),
(439, 57341936613, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'B', 'C', 'B', 'A', 'E', 'E', 'E', 'E', 'D', 'C', 'A', 'C', 'C', 'B', 'B', 'C', 'A', 'A', 'E', 15),
(440, 46998065093, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'B', 'D', 'A', 85),
(441, 41500279605, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'C', 'E', 'E', 'B', 'E', 'E', 'A', 'E', 'D', 'B', 'B', 'A', 'C', 'B', 'B', 'C', 'E', 'A', 'B', 10),
(442, 92544729569, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'C', 'A', 'E', 'D', 'E', 'A', 'E', 'E', 'C', 'C', 'B', 'C', 'A', 'D', 'D', 'D', 'E', 'C', 'B', 20),
(443, 20893769343, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'C', 'D', 'E', 'D', 'D', 'D', 'C', 'B', 'B', 'B', 'A', 'A', 'B', 'E', 'D', 'B', 'A', 'A', 'B', 25),
(444, 23180909643, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'D', 'E', 'A', 'B', 'B', 'A', 'D', 'E', 'D', 'C', 'C', 'C', 'C', 'E', 'B', 'D', 'E', 'B', 'A', 'A', 10),
(445, 87733592136, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'D', 'D', 'D', 'A', 'C', 'B', 'A', 'B', 'A', 'C', 'D', 'E', 'A', 'C', 'E', 'B', 'B', 'C', 'D', 20),
(446, 59520992661, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'D', 'E', 'D', 'D', 'E', 'C', 'B', 'E', 'A', 'E', 'E', 'A', 'A', 'A', 'E', 'B', 'C', 'A', 'E', 20),
(447, 60235638694, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'E', 'E', 'B', 90),
(448, 82020410029, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'E', 'A', 'B', 'B', 'C', 'D', 'D', 'E', 'C', 'C', 'E', 'A', 'D', 'E', 'B', 'A', 'B', 'D', 'A', 10),
(449, 58237810376, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'E', 'C', 'D', 'B', 'A', 'D', 'D', 'C', 'A', 'B', 'C', 'E', 'A', 'E', 'C', 'B', 'B', 'D', 45),
(450, 61610028276, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'E', 'C', 'E', 'E', 'B', 'B', 'A', 'B', 'A', 'C', 'D', 'B', 'E', 'A', 'D', 'A', 'D', 'C', 'E', 15),
(451, 10218951658, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'E', 'A', 'B', 'C', 'B', 'C', 'B', 'C', 'A', 'D', 'D', 'A', 'E', 'E', 'B', 'D', 'A', 'C', 'B', 10),
(452, 66312857556, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'D', 'A', 'C', 'E', 'C', 'D', 'B', 'D', 'D', 'E', 'C', 'B', 'A', 'E', 'A', 'B', 'D', 25),
(453, 35958317201, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'E', 'C', 'B', 'B', 'D', 'D', 'C', 'A', 'E', 'A', 'E', 'A', 'A', 'D', 'B', 'D', 'B', 'B', 'A', 0),
(454, 78106925210, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'E', 'D', 'B', 'B', 'A', 'D', 'C', 'C', 'D', 'B', 'C', 'D', 'E', 'C', 'A', 'C', 'A', 'B', 'C', 20),
(455, 75089743511, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'C', 'C', 'E', 'B', 'E', 'C', 'E', 'D', 'A', 'C', 'C', 'E', 'B', 'B', 'E', 'B', 'B', 'E', 'B', 15),
(456, 48622010838, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'A', 'E', 'B', 'C', 'C', 'A', 'B', 'D', 'C', 'D', 'D', 'E', 'D', 'A', 'D', 'C', 'D', 'E', 'C', 20);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fakulte_bolum`
--

CREATE TABLE `fakulte_bolum` (
  `id` bigint(250) NOT NULL,
  `fakulte` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `bolum` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `bolum_tur` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `fakulte_bolum`
--

INSERT INTO `fakulte_bolum` (`id`, `fakulte`, `bolum`, `bolum_tur`) VALUES
(1, 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'N.Ö.'),
(2, 'Bozüyük Meslek Yüksekokulu', 'Dış Ticaret', 'N.Ö.'),
(3, 'Bozüyük Meslek Yüksekokulu', 'Doğal Yapı Taşları Teknolojisi', 'N.Ö.'),
(4, 'Bozüyük Meslek Yüksekokulu', 'Grafik Tasarımı', 'N.Ö.'),
(5, 'Bozüyük Meslek Yüksekokulu', 'Muhasebe ve Vergi Uygulamaları', 'N.Ö.'),
(6, 'Bozüyük Meslek Yüksekokulu', 'Pazarlama', 'N.Ö.'),
(7, 'Bozüyük Meslek Yüksekokulu', 'Reklamcılık', 'N.Ö.'),
(8, 'Bozüyük Meslek Yüksekokulu', 'Seramik, Cam ve Çinicilik', 'N.Ö.'),
(9, 'Fen-Edebiyat Fakültesi', 'Arkeoloji', 'N.Ö.'),
(10, 'Fen-Edebiyat Fakültesi', 'Coğrafya', 'N.Ö.'),
(11, 'Fen-Edebiyat Fakültesi', 'Coğrafya', 'İ.Ö.'),
(12, 'Fen-Edebiyat Fakültesi', 'Kimya', 'N.Ö.'),
(13, 'Fen-Edebiyat Fakültesi', 'Kimya', 'İ.Ö.'),
(14, 'Fen-Edebiyat Fakültesi', 'Matematik', 'N.Ö.'),
(15, 'Fen-Edebiyat Fakültesi', 'Moleküler Biyoloji ve Genetik', 'N.Ö.'),
(16, 'Fen-Edebiyat Fakültesi', 'Türk Dili ve Edebiyatı', 'N.Ö.'),
(17, 'Gölpazarı Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'N.Ö.'),
(18, 'Gölpazarı Meslek Yüksekokulu', 'Büro Yönetimi ve Yönetici Asistanlığı', 'N.Ö.'),
(19, 'Gölpazarı Meslek Yüksekokulu', 'Büro Yönetimi ve Yönetici Asistanlığı', 'İ.Ö.'),
(20, 'Gölpazarı Meslek Yüksekokulu', 'Halkla İlişkiler ve Tanıtım', 'N.Ö.'),
(21, 'Gölpazarı Meslek Yüksekokulu', 'Halkla İlişkiler ve Tanıtım', 'İ.Ö.'),
(22, 'Gölpazarı Meslek Yüksekokulu', 'Muhasebe ve Vergi Uygulamaları', 'N.Ö.'),
(23, 'Gölpazarı Meslek Yüksekokulu', 'Muhasebe ve Vergi Uygulamaları', 'İ.Ö.'),
(24, 'Gölpazarı Meslek Yüksekokulu', 'Pazarlama', 'N.Ö.'),
(25, 'Gölpazarı Meslek Yüksekokulu', 'Reklamcılık', 'N.Ö.'),
(26, 'Gölpazarı Meslek Yüksekokulu', 'Sosyal Hizmetler', 'N.Ö.'),
(27, 'Gölpazarı Meslek Yüksekokulu', 'Yerel Yönetimler', 'N.Ö.'),
(28, 'Gölpazarı Meslek Yüksekokulu', 'Yerel Yönetimler', 'İ.Ö.'),
(29, 'Güzel Sanatlar ve Tasarım Fakültesi', 'Endüstri Ürünleri Tasarımı', 'N.Ö.'),
(30, 'Güzel Sanatlar ve Tasarım Fakültesi', 'İç Mimarlık ve Çevre Tasarımı', 'N.Ö.'),
(31, 'Güzel Sanatlar ve Tasarım Fakültesi', 'Resim', 'N.Ö.'),
(32, 'Güzel Sanatlar ve Tasarım Fakültesi', 'Seramik ve Cam Tasarımı', 'N.Ö.'),
(33, 'İktisadi ve İdari Bilimler Fakültesi', 'İktisat', 'N.Ö.'),
(34, 'İktisadi ve İdari Bilimler Fakültesi', 'İktisat', 'İ.Ö.'),
(35, 'İktisadi ve İdari Bilimler Fakültesi', 'İşletme', 'N.Ö.'),
(36, 'İktisadi ve İdari Bilimler Fakültesi', 'İşletme', 'İ.Ö.'),
(37, 'İktisadi ve İdari Bilimler Fakültesi', 'Maliye', 'N.Ö.'),
(38, 'İktisadi ve İdari Bilimler Fakültesi', 'Maliye', 'İ.Ö.'),
(39, 'İktisadi ve İdari Bilimler Fakültesi', 'Siyaset Bilimi ve Kamu Yönetimi', 'N.Ö.'),
(40, 'İktisadi ve İdari Bilimler Fakültesi', 'Siyaset Bilimi ve Kamu Yönetimi', 'İ.Ö.'),
(41, 'İktisadi ve İdari Bilimler Fakültesi', 'Yönetim Bilişim Sistemleri', 'N.Ö.'),
(42, 'İktisadi ve İdari Bilimler Fakültesi', 'Yönetim Bilişim Sistemleri', 'İ.Ö.'),
(43, 'İslami İlimler Fakültesi', 'İslami İlimler', 'N.Ö.'),
(44, 'İslami İlimler Fakültesi', 'İslami İlimler', 'İ.Ö.'),
(45, 'Meslek Yüksekokulu', 'Bilgisayar Programcılığı', 'N.Ö.'),
(46, 'Meslek Yüksekokulu', 'Bilgisayar Programcılığı', 'İ.Ö.'),
(47, 'Meslek Yüksekokulu', 'Döküm', 'N.Ö.'),
(48, 'Meslek Yüksekokulu', 'Elektrik', 'N.Ö.'),
(49, 'Meslek Yüksekokulu', 'Elektrik', 'İ.Ö.'),
(50, 'Meslek Yüksekokulu', 'Elektrik Enerjisi Üretim, İletim ve Dağıtımı', 'N.Ö.'),
(51, 'Meslek Yüksekokulu', 'Elektronik Haberleşme Teknolojisi', 'N.Ö.'),
(52, 'Meslek Yüksekokulu', 'Elektronik Haberleşme Teknolojisi', 'İ.Ö.'),
(53, 'Meslek Yüksekokulu', 'Elektronik Teknolojisi', 'N.Ö.'),
(54, 'Meslek Yüksekokulu', 'Elektronik Teknolojisi', 'İ.Ö.'),
(55, 'Meslek Yüksekokulu', 'Gıda Teknolojisi', 'N.Ö.'),
(56, 'Meslek Yüksekokulu', 'Gıda Teknolojisi', 'İ.Ö.'),
(57, 'Meslek Yüksekokulu', 'İnşaat Teknolojisi', 'N.Ö.'),
(58, 'Meslek Yüksekokulu', 'İnşaat Teknolojisi', 'İ.Ö.'),
(59, 'Meslek Yüksekokulu', 'Kimya Teknolojisi', 'N.Ö.'),
(60, 'Meslek Yüksekokulu', 'Kimya Teknolojisi', 'İ.Ö.'),
(61, 'Meslek Yüksekokulu', 'Kontrol ve Otomasyon Teknolojisi', 'N.Ö.'),
(62, 'Meslek Yüksekokulu', 'Kontrol ve Otomasyon Teknolojisi', 'İ.Ö.'),
(63, 'Meslek Yüksekokulu', 'Makine', 'N.Ö.'),
(64, 'Meslek Yüksekokulu', 'Makine', 'İ.Ö.'),
(65, 'Meslek Yüksekokulu', 'Metalurji', 'N.Ö.'),
(66, 'Meslek Yüksekokulu', 'Metalurji', 'İ.Ö.'),
(67, 'Meslek Yüksekokulu', 'Otomotiv Teknolojisi', 'N.Ö.'),
(68, 'Meslek Yüksekokulu', 'Otomotiv Teknolojisi', 'İ.Ö.'),
(69, 'Meslek Yüksekokulu', 'Peyzaj ve Süs Bitkileri', 'N.Ö.'),
(70, 'Meslek Yüksekokulu', 'Üretimde Kalite Kontrol', 'N.Ö.'),
(71, 'Mühendislik Fakültesi', 'Bilgisayar Mühendisliği', 'N.Ö.'),
(72, 'Mühendislik Fakültesi', 'Elektrik-Elektronik Mühendisliği', 'N.Ö.'),
(73, 'Mühendislik Fakültesi', 'Elektrik-Elektronik Mühendisliği (%50 Burslu)', 'N.Ö.'),
(74, 'Mühendislik Fakültesi', 'İnşaat Mühendisliği', 'N.Ö.'),
(75, 'Mühendislik Fakültesi', 'Kimya Mühendisliği', 'N.Ö.'),
(76, 'Mühendislik Fakültesi', 'Makine Mühendisliği', 'N.Ö.'),
(77, 'Mühendislik Fakültesi', 'Metalurji ve Malzeme Mühendisliği', 'N.Ö.'),
(78, 'Osmaneli Meslek Yüksekokulu', 'Dış Ticaret', 'N.Ö.'),
(79, 'Osmaneli Meslek Yüksekokulu', 'Dış Ticaret', 'İ.Ö.'),
(80, 'Osmaneli Meslek Yüksekokulu', 'Elektrik', 'N.Ö.'),
(81, 'Osmaneli Meslek Yüksekokulu', 'İklimlendirme ve Soğutma Teknolojisi', 'N.Ö.'),
(82, 'Osmaneli Meslek Yüksekokulu', 'İş Sağlığı ve Güvenliği', 'N.Ö.'),
(83, 'Osmaneli Meslek Yüksekokulu', 'İş Sağlığı ve Güvenliği', 'İ.Ö.'),
(84, 'Osmaneli Meslek Yüksekokulu', 'Makine', 'N.Ö.'),
(85, 'Osmaneli Meslek Yüksekokulu', 'Muhasebe ve Vergi Uygulamaları', 'N.Ö.'),
(86, 'Osmaneli Meslek Yüksekokulu', 'Sağlık Kurumları İşletmeciliği', 'N.Ö.'),
(87, 'Osmaneli Meslek Yüksekokulu', 'Sağlık Kurumları İşletmeciliği', 'İ.Ö.'),
(88, 'Osmaneli Meslek Yüksekokulu', 'Tıbbi Dokümantasyon ve Sekreterlik', 'N.Ö.'),
(89, 'Pazaryeri Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'N.Ö.'),
(90, 'Pazaryeri Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'İ.Ö.'),
(91, 'Pazaryeri Meslek Yüksekokulu', 'Bilgisayar Programcılığı', 'N.Ö.'),
(92, 'Pazaryeri Meslek Yüksekokulu', 'Bilgisayar Programcılığı', 'İ.Ö.'),
(93, 'Pazaryeri Meslek Yüksekokulu', 'Çağrı Merkezi Hizmetleri', 'N.Ö.'),
(94, 'Pazaryeri Meslek Yüksekokulu', 'Çağrı Merkezi Hizmetleri', 'İ.Ö.'),
(95, 'Pazaryeri Meslek Yüksekokulu', 'Doğal Yapı Taşları Teknolojisi', 'N.Ö.'),
(96, 'Pazaryeri Meslek Yüksekokulu', 'Endüstri Ürünleri Tasarımı', 'N.Ö.'),
(97, 'Pazaryeri Meslek Yüksekokulu', 'Kozmetik Teknolojisi', 'N.Ö.'),
(98, 'Pazaryeri Meslek Yüksekokulu', 'Muhasebe ve Vergi Uygulamaları', 'N.Ö.'),
(99, 'Pazaryeri Meslek Yüksekokulu', 'Organik Tarım', 'N.Ö.'),
(100, 'Pazaryeri Meslek Yüksekokulu', 'Tekstil Teknolojisi - Dokuma', 'N.Ö.'),
(101, 'Pazaryeri Meslek Yüksekokulu', 'Tekstil Teknolojisi - Terbiye', 'N.Ö.'),
(102, 'Pazaryeri Meslek Yüksekokulu', 'Tıbbi Tanıtım ve Pazarlama', 'N.Ö.'),
(103, 'Pazaryeri Meslek Yüksekokulu', 'Tıbbi ve Aromatik Bitkiler', 'N.Ö.'),
(104, 'Sağlık Bilimleri Fakültesi', 'Çocuk Gelişimi', 'N.Ö.'),
(105, 'Sağlık Bilimleri Fakültesi', 'Hemşirelik', 'N.Ö.'),
(106, 'Sağlık Bilimleri Fakültesi', 'Sağlık Yönetimi', 'N.Ö.'),
(107, 'Sağlık Hizmetleri Meslek Yüksekokulu', 'Çocuk Gelişimi', 'N.Ö.'),
(108, 'Sağlık Hizmetleri Meslek Yüksekokulu', 'Çocuk Gelişimi', 'İ.Ö.'),
(109, 'Sağlık Hizmetleri Meslek Yüksekokulu', 'Eczane Hizmetleri', 'N.Ö.'),
(110, 'Sağlık Hizmetleri Meslek Yüksekokulu', 'İlk ve Acil Yardım', 'N.Ö.'),
(111, 'Sağlık Hizmetleri Meslek Yüksekokulu', 'Tıbbi Dokümantasyon ve Sekreterlik', 'N.Ö.'),
(112, 'Sağlık Hizmetleri Meslek Yüksekokulu', 'Tıbbi Laboratuvar Teknikleri', 'N.Ö.'),
(113, 'Sağlık Hizmetleri Meslek Yüksekokulu', 'Tıbbi Laboratuvar Teknikleri', 'İ.Ö.'),
(114, 'Söğüt Meslek Yüksekokulu', 'Basım ve Yayın Teknolojileri', 'N.Ö.'),
(115, 'Söğüt Meslek Yüksekokulu', 'Basım ve Yayın Teknolojileri', 'İ.Ö.'),
(116, 'Söğüt Meslek Yüksekokulu', 'Bilgisayar Programcılığı', 'N.Ö.'),
(117, 'Söğüt Meslek Yüksekokulu', 'Bilgisayar Programcılığı', 'İ.Ö.'),
(118, 'Söğüt Meslek Yüksekokulu', 'Büro Yönetimi ve Yönetici Asistanlığı', 'N.Ö.'),
(119, 'Söğüt Meslek Yüksekokulu', 'Büro Yönetimi ve Yönetici Asistanlığı', 'İ.Ö.'),
(120, 'Söğüt Meslek Yüksekokulu', 'Halkla İlişkiler ve Tanıtım', 'N.Ö.'),
(121, 'Söğüt Meslek Yüksekokulu', 'Halkla İlişkiler ve Tanıtım', 'İ.Ö.'),
(122, 'Söğüt Meslek Yüksekokulu', 'İç Mekan Tasarımı', 'N.Ö.'),
(123, 'Söğüt Meslek Yüksekokulu', 'Moda Tasarımı', 'N.Ö.'),
(124, 'Söğüt Meslek Yüksekokulu', 'Moda Tasarımı', 'İ.Ö.'),
(125, 'Söğüt Meslek Yüksekokulu', 'Muhasebe ve Vergi Uygulamaları', 'N.Ö.'),
(126, 'Söğüt Meslek Yüksekokulu', 'Seramik, Cam ve Çinicilik', 'N.Ö.'),
(127, 'Söğüt Meslek Yüksekokulu', 'Sosyal Güvenlik', 'N.Ö.'),
(128, 'Söğüt Meslek Yüksekokulu', 'Sosyal Güvenlik', 'İ.Ö.'),
(129, 'Söğüt Meslek Yüksekokulu', 'Turist Rehberliği', 'N.Ö.'),
(130, 'Söğüt Meslek Yüksekokulu', 'Turizm ve Otel İşletmeciliği', 'N.Ö.'),
(131, 'Uygulamalı Bilimler Fakültesi', 'Bankacılık ve Finans', 'N.Ö.'),
(132, 'Uygulamalı Bilimler Fakültesi', 'Muhasebe ve Denetim', 'N.Ö.'),
(133, 'Uygulamalı Bilimler Fakültesi', 'Turizm İşletmeciliği ve Otelcilik', 'N.Ö.'),
(134, 'Ziraat ve Doğa Bilimleri Fakültesi', 'Bahçe Bitkileri', 'N.Ö.'),
(135, 'Ziraat ve Doğa Bilimleri Fakültesi', 'Bitki Koruma', 'N.Ö.'),
(136, 'Ziraat ve Doğa Bilimleri Fakültesi', 'Biyosistem Mühendisliği', 'N.Ö.'),
(137, 'Ziraat ve Doğa Bilimleri Fakültesi', 'Tarla Bitkileri', 'N.Ö.'),
(138, 'Ziraat ve Doğa Bilimleri Fakültesi', 'Ziraat Mühendisliği Programları', 'N.Ö.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `grafikverileri`
--

CREATE TABLE `grafikverileri` (
  `id` int(11) NOT NULL,
  `sifirotuz` int(11) NOT NULL,
  `otuzelli` int(11) NOT NULL,
  `elliyetmis` int(11) NOT NULL,
  `yetmiseksen` int(11) NOT NULL,
  `seksenyüz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kturu`
--

CREATE TABLE `kturu` (
  `id` int(255) NOT NULL,
  `kturu` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kturu`
--

INSERT INTO `kturu` (`id`, `kturu`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrencicevaplar`
--

CREATE TABLE `ogrencicevaplar` (
  `id` int(255) NOT NULL,
  `tc` bigint(12) NOT NULL,
  `ders_ad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `fakulte` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `bolum` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kitapcikTur` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s1` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s2` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s3` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s4` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s5` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s6` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s7` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s8` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s9` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s10` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s11` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s12` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s13` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s14` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s15` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s16` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s17` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s18` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s19` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s20` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `ogrencicevaplar`
--

INSERT INTO `ogrencicevaplar` (`id`, `tc`, `ders_ad`, `fakulte`, `bolum`, `kitapcikTur`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `s17`, `s18`, `s19`, `s20`) VALUES
(1, 76653807984, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'A', 'C', 'C', 'D', 'E', 'B', 'D', 'E', 'A', 'B', 'B', 'D', 'E', 'C', 'C', 'C', 'E', 'B', 'A'),
(2, 46891789805, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'C', 'E', 'D', 'D', 'D', 'E', 'B', 'B', 'A', 'D', 'C', 'E', 'D', 'A', 'E', 'B', 'B', 'A'),
(3, 85127434897, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'A', 'C', 'C', 'B', 'D', 'E', 'A', 'A', 'D', 'E', 'B', 'C', 'E', 'A', 'D', 'E', 'D', 'B', 'E'),
(4, 88430419450, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'A', 'B', 'D'),
(5, 89078744138, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'A', 'D', 'E', 'A', 'B', 'C', 'D', 'E', 'E', 'A', 'A', 'B', 'B', 'D'),
(6, 18140063404, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'C', 'D', 'C', 'A', 'D', 'D', 'E', 'D', 'B', 'C', 'C', 'A', 'B', 'A', 'E', 'E', 'C', 'D', 'D'),
(7, 77048748960, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'E', 'E', 'D'),
(8, 87120569383, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'E', 'E', 'E', 'C', 'A', 'C', 'C', 'E', 'D', 'B', 'A', 'B', 'D', 'B', 'D', 'B', 'C', 'A', 'A'),
(9, 17625303000, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'D', 'A', 'D', 'B', 'B', 'C', 'A', 'E', 'C', 'C', 'E', 'C', 'A', 'B', 'B', 'C', 'C', 'C', 'B'),
(10, 42274970341, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'C', 'B', 'B', 'A', 'E', 'A', 'A', 'B', 'C', 'D', 'B', 'D', 'E', 'E', 'E', 'D', 'E', 'A', 'D', 'B'),
(11, 10337007566, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'D', 'B', 'D', 'B', 'A', 'B', 'C', 'B', 'B', 'E', 'A', 'E', 'A', 'D', 'C', 'C', 'B', 'A', 'E', 'A'),
(12, 47285107550, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'A', 'E', 'C'),
(13, 83802162249, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'C', 'D', 'E', 'C', 'D', 'C', 'D', 'A', 'B', 'B', 'C', 'E', 'B', 'C', 'A', 'C', 'D', 'D', 'B', 'B'),
(14, 86582592343, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'A', 'C', 'C'),
(15, 78445350685, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'B', 'A', 'D'),
(16, 12047790231, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'E', 'A', 'E', 'B', 'B', 'D', 'E', 'E', 'D', 'B', 'D', 'A', 'D', 'B', 'A', 'C', 'A', 'D', 'E'),
(17, 59627847325, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'D', 'A', 'D', 'D', 'A', 'E', 'C', 'D', 'E', 'E', 'D', 'E', 'A', 'D', 'A', 'A', 'E', 'B', 'C', 'E'),
(18, 56968536280, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'C', 'E', 'C'),
(19, 36388822220, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'D', 'E', 'E', 'A', 'A', 'C', 'D', 'C', 'C', 'A', 'B', 'A', 'D', 'D', 'A', 'C', 'E', 'B', 'E', 'C'),
(20, 54582675843, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'C', 'C', 'D', 'E', 'A', 'B', 'E', 'C', 'E', 'E', 'C', 'C', 'A', 'A', 'E', 'C', 'A', 'B', 'B'),
(21, 57341936613, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'B', 'C', 'B', 'A', 'E', 'E', 'E', 'E', 'D', 'C', 'A', 'C', 'C', 'B', 'B', 'C', 'A', 'A', 'E'),
(22, 46998065093, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'B', 'D', 'A'),
(23, 41500279605, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'C', 'E', 'E', 'B', 'E', 'E', 'A', 'E', 'D', 'B', 'B', 'A', 'C', 'B', 'B', 'C', 'E', 'A', 'B'),
(24, 92544729569, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'C', 'A', 'E', 'D', 'E', 'A', 'E', 'E', 'C', 'C', 'B', 'C', 'A', 'D', 'D', 'D', 'E', 'C', 'B'),
(25, 20893769343, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'C', 'D', 'E', 'D', 'D', 'D', 'C', 'B', 'B', 'B', 'A', 'A', 'B', 'E', 'D', 'B', 'A', 'A', 'B'),
(26, 23180909643, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'D', 'E', 'A', 'B', 'B', 'A', 'D', 'E', 'D', 'C', 'C', 'C', 'C', 'E', 'B', 'D', 'E', 'B', 'A', 'A'),
(27, 87733592136, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'D', 'D', 'D', 'A', 'C', 'B', 'A', 'B', 'A', 'C', 'D', 'E', 'A', 'C', 'E', 'B', 'B', 'C', 'D'),
(28, 59520992661, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'D', 'E', 'D', 'D', 'E', 'C', 'B', 'E', 'A', 'E', 'E', 'A', 'A', 'A', 'E', 'B', 'C', 'A', 'E'),
(29, 60235638694, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'E', 'E', 'B'),
(30, 82020410029, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'E', 'A', 'B', 'B', 'C', 'D', 'D', 'E', 'C', 'C', 'E', 'A', 'D', 'E', 'B', 'A', 'B', 'D', 'A'),
(31, 58237810376, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'E', 'C', 'D', 'B', 'A', 'D', 'D', 'C', 'A', 'B', 'C', 'E', 'A', 'E', 'C', 'B', 'B', 'D'),
(32, 61610028276, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'E', 'C', 'E', 'E', 'B', 'B', 'A', 'B', 'A', 'C', 'D', 'B', 'E', 'A', 'D', 'A', 'D', 'C', 'E'),
(33, 10218951658, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'E', 'A', 'B', 'C', 'B', 'C', 'B', 'C', 'A', 'D', 'D', 'A', 'E', 'E', 'B', 'D', 'A', 'C', 'B'),
(34, 66312857556, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'D', 'A', 'C', 'E', 'C', 'D', 'B', 'D', 'D', 'E', 'C', 'B', 'A', 'E', 'A', 'B', 'D'),
(35, 35958317201, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'E', 'C', 'B', 'B', 'D', 'D', 'C', 'A', 'E', 'A', 'E', 'A', 'A', 'D', 'B', 'D', 'B', 'B', 'A'),
(36, 78106925210, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'E', 'D', 'B', 'B', 'A', 'D', 'C', 'C', 'D', 'B', 'C', 'D', 'E', 'C', 'A', 'C', 'A', 'B', 'C'),
(37, 75089743511, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'C', 'C', 'E', 'B', 'E', 'C', 'E', 'D', 'A', 'C', 'C', 'E', 'B', 'B', 'E', 'B', 'B', 'E', 'B'),
(38, 48622010838, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'A', 'E', 'B', 'C', 'C', 'A', 'B', 'D', 'C', 'D', 'D', 'E', 'D', 'A', 'D', 'C', 'D', 'E', 'C');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogr_gorevlileri`
--

CREATE TABLE `ogr_gorevlileri` (
  `id` int(11) NOT NULL,
  `ad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `ogr_gorevlileri`
--

INSERT INTO `ogr_gorevlileri` (`id`, `ad`, `mail`) VALUES
(1, 'Mustafa Başdemir', 'basdemir803@gmail.com'),
(2, 'Ali Osman Selvi', 'mstf.bsdmrr@gmail.com'),
(3, 'İlknur Karatosun', 'ilknurkaratosun01@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pdfdok`
--

CREATE TABLE `pdfdok` (
  `id` int(255) NOT NULL,
  `tc` bigint(12) NOT NULL,
  `ders_ad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `fakulte` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `bolum` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kitapcikTur` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s1` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s2` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s3` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s4` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s5` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s6` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s7` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s8` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s9` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s10` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s11` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s12` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s13` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s14` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s15` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s16` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s17` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s18` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s19` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s20` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `puan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `pdfdok`
--

INSERT INTO `pdfdok` (`id`, `tc`, `ders_ad`, `fakulte`, `bolum`, `kitapcikTur`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `s17`, `s18`, `s19`, `s20`, `puan`) VALUES
(419, 76653807984, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'A', 'C', 'C', 'D', 'E', 'B', 'D', 'E', 'A', 'B', 'B', 'D', 'E', 'C', 'C', 'C', 'E', 'B', 'A', 45),
(420, 46891789805, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'C', 'E', 'D', 'D', 'D', 'E', 'B', 'B', 'A', 'D', 'C', 'E', 'D', 'A', 'E', 'B', 'B', 'A', 25),
(421, 85127434897, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'A', 'C', 'C', 'B', 'D', 'E', 'A', 'A', 'D', 'E', 'B', 'C', 'E', 'A', 'D', 'E', 'D', 'B', 'E', 20),
(422, 88430419450, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'A', 'B', 'D', 95),
(423, 89078744138, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'A', 'D', 'E', 'A', 'B', 'C', 'D', 'E', 'E', 'A', 'A', 'B', 'B', 'D', 30),
(424, 18140063404, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'C', 'D', 'C', 'A', 'D', 'D', 'E', 'D', 'B', 'C', 'C', 'A', 'B', 'A', 'E', 'E', 'C', 'D', 'D', 15),
(425, 77048748960, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'E', 'E', 'D', 95),
(426, 87120569383, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'E', 'E', 'E', 'C', 'A', 'C', 'C', 'E', 'D', 'B', 'A', 'B', 'D', 'B', 'D', 'B', 'C', 'A', 'A', 10),
(427, 17625303000, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'D', 'A', 'D', 'B', 'B', 'C', 'A', 'E', 'C', 'C', 'E', 'C', 'A', 'B', 'B', 'C', 'C', 'C', 'B', 5),
(428, 42274970341, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'C', 'B', 'B', 'A', 'E', 'A', 'A', 'B', 'C', 'D', 'B', 'D', 'E', 'E', 'E', 'D', 'E', 'A', 'D', 'B', 20),
(429, 10337007566, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'D', 'B', 'D', 'B', 'A', 'B', 'C', 'B', 'B', 'E', 'A', 'E', 'A', 'D', 'C', 'C', 'B', 'A', 'E', 'A', 30),
(430, 47285107550, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'A', 'E', 'C', 95),
(431, 83802162249, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'C', 'D', 'E', 'C', 'D', 'C', 'D', 'A', 'B', 'B', 'C', 'E', 'B', 'C', 'A', 'C', 'D', 'D', 'B', 'B', 20),
(432, 86582592343, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'A', 'C', 'C', 90),
(433, 78445350685, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'B', 'A', 'D', 90),
(434, 12047790231, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'E', 'A', 'E', 'B', 'B', 'D', 'E', 'E', 'D', 'B', 'D', 'A', 'D', 'B', 'A', 'C', 'A', 'D', 'E', 5),
(435, 59627847325, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'D', 'A', 'D', 'D', 'A', 'E', 'C', 'D', 'E', 'E', 'D', 'E', 'A', 'D', 'A', 'A', 'E', 'B', 'C', 'E', 15),
(436, 56968536280, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'C', 'E', 'C', 90),
(437, 36388822220, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'D', 'E', 'E', 'A', 'A', 'C', 'D', 'C', 'C', 'A', 'B', 'A', 'D', 'D', 'A', 'C', 'E', 'B', 'E', 'C', 20),
(438, 54582675843, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'C', 'C', 'D', 'E', 'A', 'B', 'E', 'C', 'E', 'E', 'C', 'C', 'A', 'A', 'E', 'C', 'A', 'B', 'B', 15),
(439, 57341936613, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'B', 'C', 'B', 'A', 'E', 'E', 'E', 'E', 'D', 'C', 'A', 'C', 'C', 'B', 'B', 'C', 'A', 'A', 'E', 15),
(440, 46998065093, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'B', 'D', 'A', 85),
(441, 41500279605, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'C', 'E', 'E', 'B', 'E', 'E', 'A', 'E', 'D', 'B', 'B', 'A', 'C', 'B', 'B', 'C', 'E', 'A', 'B', 10),
(442, 92544729569, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'C', 'A', 'E', 'D', 'E', 'A', 'E', 'E', 'C', 'C', 'B', 'C', 'A', 'D', 'D', 'D', 'E', 'C', 'B', 20),
(443, 20893769343, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'C', 'D', 'E', 'D', 'D', 'D', 'C', 'B', 'B', 'B', 'A', 'A', 'B', 'E', 'D', 'B', 'A', 'A', 'B', 25),
(444, 23180909643, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'D', 'E', 'A', 'B', 'B', 'A', 'D', 'E', 'D', 'C', 'C', 'C', 'C', 'E', 'B', 'D', 'E', 'B', 'A', 'A', 10),
(445, 87733592136, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'D', 'D', 'D', 'A', 'C', 'B', 'A', 'B', 'A', 'C', 'D', 'E', 'A', 'C', 'E', 'B', 'B', 'C', 'D', 20),
(446, 59520992661, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'D', 'E', 'D', 'D', 'E', 'C', 'B', 'E', 'A', 'E', 'E', 'A', 'A', 'A', 'E', 'B', 'C', 'A', 'E', 20),
(447, 60235638694, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'C', 'D', 'E', 'A', 'D', 'B', 'C', 'E', 'A', 'D', 'E', 'C', 'C', 'B', 'E', 'E', 'B', 90),
(448, 82020410029, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'E', 'A', 'B', 'B', 'C', 'D', 'D', 'E', 'C', 'C', 'E', 'A', 'D', 'E', 'B', 'A', 'B', 'D', 'A', 10),
(449, 58237810376, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'E', 'C', 'D', 'B', 'A', 'D', 'D', 'C', 'A', 'B', 'C', 'E', 'A', 'E', 'C', 'B', 'B', 'D', 45),
(450, 61610028276, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'E', 'C', 'E', 'E', 'B', 'B', 'A', 'B', 'A', 'C', 'D', 'B', 'E', 'A', 'D', 'A', 'D', 'C', 'E', 15),
(451, 10218951658, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'E', 'A', 'B', 'C', 'B', 'C', 'B', 'C', 'A', 'D', 'D', 'A', 'E', 'E', 'B', 'D', 'A', 'C', 'B', 10),
(452, 66312857556, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'A', 'A', 'B', 'D', 'A', 'C', 'E', 'C', 'D', 'B', 'D', 'D', 'E', 'C', 'B', 'A', 'E', 'A', 'B', 'D', 25),
(453, 35958317201, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'E', 'C', 'B', 'B', 'D', 'D', 'C', 'A', 'E', 'A', 'E', 'A', 'A', 'D', 'B', 'D', 'B', 'B', 'A', 0),
(454, 78106925210, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'B', 'E', 'D', 'B', 'B', 'A', 'D', 'C', 'C', 'D', 'B', 'C', 'D', 'E', 'C', 'A', 'C', 'A', 'B', 'C', 20),
(455, 75089743511, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'C', 'C', 'E', 'B', 'E', 'C', 'E', 'D', 'A', 'C', 'C', 'E', 'B', 'B', 'E', 'B', 'B', 'E', 'B', 15),
(456, 48622010838, 'Atatürk İlkeleri ve İnkılap Tarihi', 'Bozüyük Meslek Yüksekokulu', 'Bankacılık ve Sigortacılık', 'A', 'E', 'A', 'E', 'B', 'C', 'C', 'A', 'B', 'D', 'C', 'D', 'D', 'E', 'D', 'A', 'D', 'C', 'D', 'E', 'C', 20);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayacveri`
--

CREATE TABLE `sayacveri` (
  `id` int(11) NOT NULL,
  `sinavagiren` int(100) NOT NULL,
  `basarili` int(100) NOT NULL,
  `basarisiz` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `sayacveri`
--

INSERT INTO `sayacveri` (`id`, `sinavagiren`, `basarili`, `basarisiz`) VALUES
(1, 38, 8, 30);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uzakdersler`
--

CREATE TABLE `uzakdersler` (
  `id` int(255) NOT NULL,
  `dersAd` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `uzakdersler`
--

INSERT INTO `uzakdersler` (`id`, `dersAd`) VALUES
(1, 'Atatürk İlkeleri ve İnkılap Tarihi'),
(2, 'Türk Dili\r\n'),
(3, 'İngilizce'),
(4, 'Temel Bilgi Teknolojisi Kullanımı\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veriyedek`
--

CREATE TABLE `veriyedek` (
  `id` int(11) NOT NULL,
  `tc` bigint(12) NOT NULL,
  `ders_ad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `fakulte` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `bolum` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kitapcikTur` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s1` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s2` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s3` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s4` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s5` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s6` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s7` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s8` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s9` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s10` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s11` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s12` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s13` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s14` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s15` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s16` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s17` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s18` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s19` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `s20` varchar(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `puan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci ROW_FORMAT=COMPACT;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cevap_anahtar`
--
ALTER TABLE `cevap_anahtar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `exceldok`
--
ALTER TABLE `exceldok`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `fakulte_bolum`
--
ALTER TABLE `fakulte_bolum`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `grafikverileri`
--
ALTER TABLE `grafikverileri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kturu`
--
ALTER TABLE `kturu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ogrencicevaplar`
--
ALTER TABLE `ogrencicevaplar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ogr_gorevlileri`
--
ALTER TABLE `ogr_gorevlileri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `pdfdok`
--
ALTER TABLE `pdfdok`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sayacveri`
--
ALTER TABLE `sayacveri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uzakdersler`
--
ALTER TABLE `uzakdersler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `veriyedek`
--
ALTER TABLE `veriyedek`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cevap_anahtar`
--
ALTER TABLE `cevap_anahtar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- Tablo için AUTO_INCREMENT değeri `exceldok`
--
ALTER TABLE `exceldok`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;
--
-- Tablo için AUTO_INCREMENT değeri `fakulte_bolum`
--
ALTER TABLE `fakulte_bolum`
  MODIFY `id` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
--
-- Tablo için AUTO_INCREMENT değeri `grafikverileri`
--
ALTER TABLE `grafikverileri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `kturu`
--
ALTER TABLE `kturu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `ogrencicevaplar`
--
ALTER TABLE `ogrencicevaplar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- Tablo için AUTO_INCREMENT değeri `ogr_gorevlileri`
--
ALTER TABLE `ogr_gorevlileri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `pdfdok`
--
ALTER TABLE `pdfdok`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;
--
-- Tablo için AUTO_INCREMENT değeri `sayacveri`
--
ALTER TABLE `sayacveri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `uzakdersler`
--
ALTER TABLE `uzakdersler`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `veriyedek`
--
ALTER TABLE `veriyedek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
