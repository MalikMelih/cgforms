-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Nis 2021, 22:49:19
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cgformdb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cargo`
--

CREATE TABLE `cargo` (
  `C_ID` int(11) NOT NULL,
  `F_No` int(11) NOT NULL,
  `C_TNo` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `C_Direction` tinyint(1) NOT NULL,
  `C_Type` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `C_Brand` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `C_Model` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `C_DCPerson` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `C_DCName` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `C_DCAdress` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `C_DCPhone` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `C_RCPerson` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `C_RCName` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `C_RCAdress` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `C_RCPhone` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `C_Detail` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `cargo`
--

INSERT INTO `cargo` (`C_ID`, `F_No`, `C_TNo`, `C_Direction`, `C_Type`, `C_Brand`, `C_Model`, `C_DCPerson`, `C_DCName`, `C_DCAdress`, `C_DCPhone`, `C_RCPerson`, `C_RCName`, `C_RCAdress`, `C_RCPhone`, `C_Detail`) VALUES
(1, 24032101, '208278982843', 0, 'Dönüştürücü', 'Hama', 'VS-5485', 'Malik Melih HORAN', 'ÇorumGaz A.Ş.', 'Yeniyol Mah. Gazi 12.Sok. No:8/4', '444 0 187', 'Bilgi İşlem', 'Hama Teknoloji', 'İstanbul Merkez', '444 1 234', 'Garantiye Gönderilmiştir.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cgusers`
--

CREATE TABLE `cgusers` (
  `U_ID` int(11) NOT NULL,
  `U_Nick` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `U_Pass` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `U_Role` int(11) NOT NULL,
  `U_Active` int(11) NOT NULL,
  `U_Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `U_SName` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `U_Picture` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `U_Theme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `cgusers`
--

INSERT INTO `cgusers` (`U_ID`, `U_Nick`, `U_Pass`, `U_Role`, `U_Active`, `U_Name`, `U_SName`, `U_Picture`, `U_Theme`) VALUES
(1, 'mhoran', 'Malik@123', 3, 1, 'Malik Melih', 'HORAN', 'mhoran', 1),
(2, 'nfsahin', '123Asd654', 2, 1, 'Necip Fazıl', 'ŞAHİN', 'nfsahin', 0),
(3, 'fcenesiz', '123Asd654', 2, 1, 'Fatih', 'ÇENESİZ', 'fcenesiz', 0),
(4, 'hbayrak', '123Asd654', 2, 1, 'Harun', 'BAYRAK', 'hbayrak', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `delivery`
--

CREATE TABLE `delivery` (
  `DV_ID` int(11) NOT NULL,
  `F_No` varchar(8) COLLATE utf8_turkish_ci NOT NULL,
  `DV_FNo` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `DV_Type` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `DV_DTime` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `DV_Comp` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `DV_City` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `DV_Ria` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `DV_Rin` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `DV_Dia` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `DV_Din` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `delivery`
--

INSERT INTO `delivery` (`DV_ID`, `F_No`, `DV_FNo`, `DV_Type`, `DV_DTime`, `DV_Comp`, `DV_City`, `DV_Ria`, `DV_Rin`, `DV_Dia`, `DV_Din`) VALUES
(1, '24032104', '24032101', 'Ofisten Teslim', '26/03/2021 11:08', 'Ahlatcı Kuyumculuk', 'Çorum', '1,5,23,8', 'phone,pc,headphone,usb', '1,4', 'usb,headphone');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `forms`
--

CREATE TABLE `forms` (
  `F_ID` int(11) NOT NULL,
  `F_No` int(11) NOT NULL,
  `F_Company` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `F_Date` varchar(18) COLLATE utf8_turkish_ci NOT NULL,
  `F_User` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `F_Staff` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `F_Customer` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `F_Type` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `F_ENo` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `F_SNo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `F_Pdf` bit(1) NOT NULL,
  `U_Nick` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `forms`
--

INSERT INTO `forms` (`F_ID`, `F_No`, `F_Company`, `F_Date`, `F_User`, `F_Staff`, `F_Customer`, `F_Type`, `F_ENo`, `F_SNo`, `F_Pdf`, `U_Nick`) VALUES
(1, 24032101, 'holding', '24/03/2021', 'Malik Melih HORAN', 'Furkan', 'Tarık', 'cargo', '14586245', '214852145', b'0', 'mhoran'),
(2, 24032102, 'holding', '24/03/2021', 'Malik Melih HORAN', 'Furkan', 'Tarık', 'services', '14586245', '214852145', b'0', 'mhoran'),
(3, 24032103, 'holding', '24/03/2021', 'Malik Melih HORAN', 'Furkan', 'Tarık', 'scrap', '14586245', '214852145', b'0', 'mhoran'),
(4, 24032104, 'holding', '24/03/2021', 'Malik Melih HORAN', 'Furkan', 'Tarık', 'delivery', '14586245', '214852145', b'0', 'mhoran');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `scrap`
--

CREATE TABLE `scrap` (
  `SF_ID` int(11) NOT NULL,
  `F_No` int(11) NOT NULL,
  `SF_Repair` tinyint(4) DEFAULT NULL,
  `SF_Type` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SF_Brand` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SF_Model` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SF_Error` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `SF_Detail` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `scrap`
--

INSERT INTO `scrap` (`SF_ID`, `F_No`, `SF_Repair`, `SF_Type`, `SF_Brand`, `SF_Model`, `SF_Error`, `SF_Detail`) VALUES
(1, 24032103, 0, 'Mobil', 'sony', 'vaio', 'şarj soketi,batarya', 'değişimi yapılamamaktadır.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
--

CREATE TABLE `services` (
  `SV_ID` int(11) NOT NULL,
  `F_No` varchar(8) COLLATE utf8_turkish_ci NOT NULL,
  `SV_DTime` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SV_DType` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SV_Type` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SV_Owner` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SV_Brand` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SV_Model` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SV_Error` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SV_Procces` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SV_Piece` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SV_Material` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `SV_Detail` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `services`
--

INSERT INTO `services` (`SV_ID`, `F_No`, `SV_DTime`, `SV_DType`, `SV_Type`, `SV_Owner`, `SV_Brand`, `SV_Model`, `SV_Error`, `SV_Procces`, `SV_Piece`, `SV_Material`, `SV_Detail`) VALUES
(1, '24032102', '26/03/2021', 'Ofisten Teslim', 'Mobile', 'Bilgi İşlem', 'Vodafone', 'Vınn', 'Hat sorunu', 'sim modül değişikliği', '1', 'sim modülü', 'arızalı sim modülü değiştirildi.');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`C_ID`);

--
-- Tablo için indeksler `cgusers`
--
ALTER TABLE `cgusers`
  ADD PRIMARY KEY (`U_ID`);

--
-- Tablo için indeksler `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`DV_ID`);

--
-- Tablo için indeksler `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`F_ID`);

--
-- Tablo için indeksler `scrap`
--
ALTER TABLE `scrap`
  ADD PRIMARY KEY (`SF_ID`);

--
-- Tablo için indeksler `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`SV_ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cargo`
--
ALTER TABLE `cargo`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `cgusers`
--
ALTER TABLE `cgusers`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `delivery`
--
ALTER TABLE `delivery`
  MODIFY `DV_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `forms`
--
ALTER TABLE `forms`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `scrap`
--
ALTER TABLE `scrap`
  MODIFY `SF_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `services`
--
ALTER TABLE `services`
  MODIFY `SV_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
