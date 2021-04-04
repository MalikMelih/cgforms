-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Mar 2021, 20:43:14
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
  `F_User` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `F_Person` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `F_Verify` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `F_Eno` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `DV_FNo` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `DV_Type` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `DV_DTime` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `DV_Comp` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `DV_Ria` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `DV_Rin` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `DV_Dia` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `DV_Din` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `delivery`
--

INSERT INTO `delivery` (`DV_ID`, `F_No`, `F_User`, `F_Person`, `F_Verify`, `F_Eno`, `DV_FNo`, `DV_Type`, `DV_DTime`, `DV_Comp`, `DV_Ria`, `DV_Rin`, `DV_Dia`, `DV_Din`) VALUES
(1, '21030201', 'Malik Melih HORAN', 'Malik Melih HORAN', '', '', '', 'Şahsa Teslim', '02/03/21', 'ÇorumGaz', '', '', '1', '14877 numaralı pos cihazı için sıfır batarya'),
(2, '21020101', 'Malik Melih HORAN', 'Malik Melih HORAN', '', '', '', 'Şahsa Teslim', '05/02/21', 'SürmeliGaz', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `forms`
--

CREATE TABLE `forms` (
  `F_ID` int(11) NOT NULL,
  `F_No` int(11) NOT NULL,
  `F_Date` varchar(8) COLLATE utf8_turkish_ci NOT NULL,
  `F_User` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `F_Person` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `F_Receiver` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `F_Type` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `F_ENo` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `F_Pdf` bit(1) NOT NULL,
  `U_Nick` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `forms`
--

INSERT INTO `forms` (`F_ID`, `F_No`, `F_Date`, `F_User`, `F_Person`, `F_Receiver`, `F_Type`, `F_ENo`, `F_Pdf`, `U_Nick`) VALUES
(1, 21011101, '11/01/21', 'Hamza Yücel', 'Hamza Yücel', 'Osmancık Ofis', 'services', 'TYC0002', b'1', 'hyucel'),
(2, 21011201, '12/01/21', 'Harun Bayrak', 'Harun Bayrak', 'Sungurlu RMS', 'services', NULL, b'1', 'hbayrak'),
(3, 21011202, '12/01/21', 'Necip Fazıl ŞAHİN', 'Necip Fazıl Şahin', 'Osmancık RMS', 'services', NULL, b'1', 'nfsahin'),
(4, 21011203, '12/01/21', 'Fatih Çenesiz', 'Fatih Çenesiz', 'Skoda Ömür Bey', 'services', NULL, b'1', 'fcenesiz'),
(5, 21011401, '14/01/21', 'Fatih Çenesiz', 'Fatih Çenesiz', NULL, 'services', NULL, b'1', 'fcenesiz'),
(6, 21012001, '20/01/21', 'Malik Melih HORAN', 'Malik Melih HORAN', NULL, 'services', NULL, b'1', 'mhoran'),
(7, 21022002, '20/02/21', 'Harun Bayrak', 'Harun Bayrak', NULL, 'services', NULL, b'0', 'hbayrak'),
(8, 21020401, '23/02/21', 'Malik Melih HORAN', NULL, '21022301', 'services', 'TBPC001', b'0', 'mhoran'),
(9, 21030201, '02/03/21', 'Malik Melih HORAN', 'Malik Melih HORAN', NULL, 'delivery', NULL, b'1', 'mhoran');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `scrap`
--

CREATE TABLE `scrap` (
  `SF_ID` int(11) NOT NULL,
  `F_No` varchar(8) COLLATE utf8_turkish_ci NOT NULL,
  `F_User` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `F_Person` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `F_Verify` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `F_ENo` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SF_Repair` tinyint(4) DEFAULT NULL,
  `SF_Serial` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SF_Type` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SF_Brand` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SF_Model` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SF_Error` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `SF_Detail` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
--

CREATE TABLE `services` (
  `SV_ID` int(11) NOT NULL,
  `F_No` varchar(8) COLLATE utf8_turkish_ci NOT NULL,
  `F_User` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `F_Person` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `F_Receiver` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `F_ENo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `SV_DTime` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SV_DType` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SV_Serial` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
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
-- Dökümü yapılmış tablolar için indeksler
--

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
-- Tablo için AUTO_INCREMENT değeri `cgusers`
--
ALTER TABLE `cgusers`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `delivery`
--
ALTER TABLE `delivery`
  MODIFY `DV_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `forms`
--
ALTER TABLE `forms`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `scrap`
--
ALTER TABLE `scrap`
  MODIFY `SF_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `services`
--
ALTER TABLE `services`
  MODIFY `SV_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
