-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 04:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pararchery`
--

-- --------------------------------------------------------

--
-- Table structure for table `athlete`
--

CREATE TABLE `athlete` (
  `id` int(11) NOT NULL,
  `id_atlet` int(11) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` varchar(1) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `athlete`
--

INSERT INTO `athlete` (`id`, `id_atlet`, `birth_date`, `gender`, `status`, `class`) VALUES
(1, 15, '2001-07-16', 'L', 'Kuliah', 'Standard Bow'),
(2, 16, '2007-09-12', 'L', 'SMP', 'Compound Bow'),
(3, 17, '2010-05-25', 'P', 'SD', 'Standard Bow'),
(4, 18, '2005-05-12', 'P', 'SMA', 'Recurve Bow'),
(5, 19, '2001-02-23', 'L', 'SMA', 'Compound Bow'),
(6, 20, '1991-02-01', 'L', 'Kerja', 'Barebow'),
(7, 21, '2001-09-25', 'P', 'Kuliah', 'Standard Bow'),
(8, 22, '2003-02-27', 'L', 'SMA', 'Barebow'),
(9, 23, '2005-07-11', 'L', 'SMA', 'Standard Bow'),
(10, 24, '1996-12-18', 'L', 'Mahasiswa', 'Recurve Bow'),
(11, 25, '1996-11-08', 'L', 'Mahasiswa', 'Barebow'),
(12, 26, '1998-11-08', 'L', 'Mahasiswa', 'Recurve Bow'),
(13, 31, '2021-02-17', 'P', '123', 'Barebow');

-- --------------------------------------------------------

--
-- Table structure for table `athlete_scores`
--

CREATE TABLE `athlete_scores` (
  `id` int(11) NOT NULL,
  `id_athelete` int(11) NOT NULL,
  `date_scores` datetime NOT NULL,
  `location` varchar(100) NOT NULL,
  `distance` int(3) NOT NULL,
  `11` int(11) NOT NULL,
  `12` int(11) NOT NULL,
  `13` int(11) NOT NULL,
  `21` int(11) NOT NULL,
  `22` int(11) NOT NULL,
  `23` int(11) NOT NULL,
  `31` int(11) NOT NULL,
  `32` int(11) NOT NULL,
  `33` int(11) NOT NULL,
  `41` int(11) NOT NULL,
  `42` int(11) NOT NULL,
  `43` int(11) NOT NULL,
  `51` int(11) NOT NULL,
  `52` int(11) NOT NULL,
  `53` int(11) NOT NULL,
  `61` int(11) NOT NULL,
  `62` int(11) NOT NULL,
  `63` int(11) NOT NULL,
  `71` int(11) NOT NULL,
  `72` int(11) NOT NULL,
  `73` int(11) NOT NULL,
  `81` int(11) NOT NULL,
  `82` int(11) NOT NULL,
  `83` int(11) NOT NULL,
  `91` int(11) NOT NULL,
  `92` int(11) NOT NULL,
  `93` int(11) NOT NULL,
  `101` int(11) NOT NULL,
  `102` int(11) NOT NULL,
  `103` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `athlete_scores`
--

INSERT INTO `athlete_scores` (`id`, `id_athelete`, `date_scores`, `location`, `distance`, `11`, `12`, `13`, `21`, `22`, `23`, `31`, `32`, `33`, `41`, `42`, `43`, `51`, `52`, `53`, `61`, `62`, `63`, `71`, `72`, `73`, `81`, `82`, `83`, `91`, `92`, `93`, `101`, `102`, `103`, `total`) VALUES
(1, 18, '2021-02-08 11:32:04', 'Lapangan Padjajaran', 30, 10, 9, 10, 9, 9, 8, 7, 9, 8, 9, 10, 10, 10, 10, 10, 10, 9, 8, 10, 10, 9, 9, 8, 9, 8, 9, 10, 10, 10, 9, 274),
(4, 18, '2021-02-02 07:32:27', 'Lapangan Tembak Surabaya', 60, 10, 10, 10, 9, 10, 10, 9, 10, 9, 9, 10, 10, 10, 9, 10, 9, 10, 9, 10, 10, 9, 10, 9, 9, 10, 9, 10, 9, 10, 10, 288),
(5, 17, '2021-01-31 12:32:59', 'Lap. Pajajaran', 10, 9, 10, 10, 8, 8, 8, 7, 9, 7, 6, 10, 9, 9, 9, 10, 9, 10, 10, 9, 8, 8, 9, 9, 9, 8, 0, 8, 8, 0, 7, 241),
(6, 18, '2020-12-09 12:33:36', 'Gor Pajajaran - Indoor', 18, 9, 10, 8, 7, 10, 9, 0, 9, 10, 9, 9, 9, 10, 9, 9, 8, 9, 9, 10, 9, 9, 10, 9, 9, 10, 10, 10, 9, 10, 10, 268),
(7, 17, '2021-02-01 22:35:00', 'Lap. Pajajaran', 10, 9, 10, 10, 8, 8, 8, 7, 9, 7, 6, 10, 9, 9, 9, 10, 9, 10, 10, 9, 8, 8, 9, 9, 9, 8, 0, 8, 8, 10, 7, 251),
(8, 25, '2021-01-27 10:49:13', 'Lap. Tenis Outdoor', 10, 10, 10, 10, 10, 9, 9, 9, 9, 7, 9, 10, 9, 9, 9, 10, 9, 10, 10, 9, 8, 8, 9, 9, 9, 8, 10, 8, 8, 0, 7, 290),
(9, 18, '2019-02-01 05:43:27', 'Lapangan Padjajaran', 30, 10, 9, 10, 9, 9, 8, 7, 9, 8, 9, 10, 10, 10, 10, 10, 10, 9, 8, 10, 10, 9, 9, 8, 9, 8, 9, 10, 10, 10, 9, 298),
(10, 19, '2021-02-09 11:53:30', 'GOR Jakarta Barat', 50, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 300),
(11, 25, '2021-02-10 09:20:02', 'Samarinda Field', 30, 9, 9, 9, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 9, 9, 9, 9, 8, 8, 7, 9, 8, 9, 10, 10, 10, 10, 10, 10, 282),
(12, 15, '2021-02-10 09:57:12', 'Gor antapani - indoor', 18, 9, 8, 9, 9, 7, 10, 8, 9, 8, 8, 8, 7, 7, 9, 10, 9, 9, 10, 8, 8, 9, 7, 6, 7, 9, 9, 5, 10, 10, 9, 251),
(13, 15, '2021-02-10 09:59:14', 'Gor cimahi - indoor', 18, 10, 9, 9, 9, 8, 10, 10, 9, 7, 8, 9, 8, 8, 9, 7, 9, 9, 8, 7, 10, 8, 9, 8, 9, 8, 7, 10, 10, 8, 9, 259),
(14, 16, '2021-02-10 10:01:23', 'Lap. BuahBatu - outdoor', 40, 7, 7, 6, 8, 6, 5, 8, 7, 5, 8, 8, 9, 9, 9, 7, 8, 6, 7, 5, 9, 8, 8, 9, 6, 0, 6, 8, 10, 9, 7, 215),
(15, 16, '2021-02-10 10:03:27', 'Lap. BuahBatu - outdoor', 50, 7, 6, 0, 8, 8, 7, 7, 9, 8, 9, 7, 6, 7, 6, 8, 9, 10, 8, 7, 7, 8, 8, 8, 8, 9, 5, 8, 6, 6, 8, 218),
(16, 16, '2021-02-10 10:05:06', 'Gor cimahi - indoor', 18, 9, 8, 6, 8, 9, 10, 9, 8, 7, 10, 9, 9, 10, 7, 8, 9, 8, 6, 9, 9, 10, 9, 9, 8, 8, 10, 8, 7, 9, 9, 255),
(17, 17, '2021-02-10 10:07:29', 'Gor arcamanik- indoor', 18, 10, 7, 9, 8, 9, 9, 7, 9, 8, 9, 6, 8, 9, 8, 7, 9, 10, 8, 8, 9, 8, 7, 9, 8, 8, 6, 8, 8, 7, 10, 246),
(18, 19, '2021-02-10 10:10:32', 'Lap. GBK - outdoor', 30, 8, 8, 7, 8, 9, 8, 9, 9, 6, 6, 10, 7, 9, 8, 9, 10, 8, 8, 9, 7, 8, 8, 8, 7, 7, 9, 9, 7, 7, 9, 242),
(19, 19, '2021-02-10 10:12:54', 'Indoor Expo Jakarta', 18, 9, 8, 9, 7, 9, 10, 9, 9, 8, 8, 9, 8, 10, 7, 9, 6, 8, 8, 7, 6, 8, 10, 8, 6, 8, 7, 6, 10, 10, 6, 243),
(20, 20, '2020-01-16 10:14:38', 'Lap. gasibu - outdoor', 45, 8, 7, 6, 9, 7, 0, 8, 6, 5, 8, 7, 6, 9, 8, 9, 8, 8, 8, 7, 8, 6, 6, 0, 6, 8, 8, 9, 10, 8, 7, 210),
(21, 20, '2021-01-10 10:17:52', 'Gor cimahi - indoor', 18, 9, 7, 8, 8, 8, 9, 8, 10, 8, 7, 9, 7, 9, 8, 8, 9, 9, 9, 7, 9, 9, 10, 8, 8, 10, 8, 8, 9, 9, 8, 253),
(22, 20, '2021-02-10 10:26:22', 'Lap. BuahBatu - outdoor', 65, 7, 7, 6, 6, 8, 8, 6, 7, 9, 5, 7, 7, 0, 6, 8, 5, 7, 5, 8, 6, 5, 6, 7, 0, 6, 5, 6, 8, 8, 7, 186),
(23, 21, '2021-02-10 10:28:42', 'Lap. GBK - outdoor', 55, 7, 9, 8, 7, 8, 8, 6, 10, 7, 9, 9, 6, 8, 8, 9, 8, 7, 9, 9, 8, 9, 7, 9, 7, 6, 10, 6, 9, 7, 0, 230),
(24, 21, '2021-02-10 10:29:42', 'Lap. BuahBatu - outdoor', 70, 6, 6, 8, 9, 7, 7, 8, 8, 7, 7, 8, 8, 8, 9, 9, 9, 6, 9, 9, 8, 6, 7, 8, 8, 8, 9, 8, 6, 6, 0, 222),
(25, 21, '2021-02-10 10:30:53', 'Lap. BuahBatu - outdoor', 40, 9, 8, 8, 8, 9, 8, 8, 9, 10, 7, 7, 9, 9, 7, 9, 10, 8, 9, 9, 8, 9, 8, 8, 8, 9, 8, 7, 10, 8, 8, 252),
(26, 22, '2021-01-01 10:32:35', 'Gor ramawangun - indoor', 18, 10, 9, 8, 8, 9, 9, 8, 7, 8, 7, 10, 8, 7, 9, 7, 8, 8, 8, 7, 9, 8, 8, 9, 10, 10, 8, 7, 8, 8, 8, 248),
(27, 22, '2021-02-10 10:34:03', 'Gor ramawangun - indoor', 18, 9, 9, 10, 10, 9, 9, 8, 10, 7, 9, 9, 8, 8, 9, 10, 10, 10, 7, 8, 8, 9, 8, 8, 9, 9, 8, 8, 9, 10, 8, 263),
(29, 23, '2021-02-10 10:36:52', 'Gor arcamanik- indoor', 50, 10, 9, 8, 9, 9, 10, 8, 7, 9, 7, 8, 9, 8, 8, 8, 9, 10, 9, 10, 8, 9, 10, 9, 10, 8, 9, 8, 8, 8, 9, 261),
(30, 23, '2021-02-10 10:37:52', 'Gor arcamanik', 30, 9, 9, 9, 10, 8, 10, 9, 7, 8, 9, 9, 10, 8, 9, 9, 8, 8, 9, 9, 9, 9, 8, 8, 8, 8, 8, 8, 8, 8, 9, 258),
(31, 23, '2021-02-10 10:38:50', 'Gor cimahi - indoor', 18, 9, 10, 10, 10, 8, 9, 8, 9, 10, 8, 9, 10, 8, 9, 10, 9, 8, 8, 9, 8, 8, 10, 9, 9, 9, 9, 10, 10, 7, 8, 268),
(32, 24, '2021-02-10 10:40:08', 'Lap. panah Gatot - outdoor', 40, 9, 9, 8, 9, 8, 9, 8, 9, 7, 7, 7, 8, 8, 8, 7, 8, 9, 9, 9, 8, 8, 9, 9, 10, 10, 8, 8, 7, 9, 8, 250),
(33, 24, '2021-02-10 10:42:03', 'Lap. panah Gatot - outdoor', 45, 8, 8, 8, 9, 9, 8, 10, 9, 8, 6, 9, 9, 8, 8, 8, 9, 8, 9, 8, 9, 7, 8, 9, 8, 8, 7, 8, 7, 7, 7, 244),
(34, 24, '2021-02-10 10:43:11', 'Lap. BuahBatu - outdoor', 65, 7, 6, 9, 8, 8, 8, 9, 8, 9, 7, 8, 7, 8, 6, 7, 10, 9, 7, 9, 8, 6, 10, 7, 8, 8, 10, 7, 8, 5, 6, 233),
(35, 25, '2021-02-10 10:45:02', 'Lap. Tenis Outdoor', 50, 8, 7, 9, 7, 7, 9, 7, 9, 8, 6, 8, 8, 7, 8, 7, 7, 6, 8, 8, 9, 9, 9, 9, 8, 8, 9, 7, 8, 6, 9, 235),
(36, 25, '2021-02-10 10:46:14', 'Gor cimahi - indoor', 18, 9, 9, 8, 9, 8, 10, 7, 8, 8, 8, 8, 9, 9, 9, 8, 7, 9, 10, 8, 8, 7, 9, 8, 9, 8, 7, 9, 9, 8, 9, 252),
(37, 26, '2021-02-10 10:47:54', 'Lap. GBK - outdoor', 50, 6, 9, 7, 0, 7, 8, 8, 6, 8, 7, 9, 9, 9, 7, 7, 8, 9, 8, 9, 8, 9, 8, 7, 8, 5, 6, 8, 8, 8, 9, 225),
(38, 26, '2021-02-10 10:49:00', 'Lap. GBK - outdoor', 70, 6, 5, 7, 7, 9, 8, 9, 5, 6, 6, 6, 0, 5, 7, 9, 5, 9, 5, 7, 7, 0, 6, 7, 9, 5, 6, 7, 6, 6, 0, 180),
(39, 26, '2021-02-10 10:50:14', 'Lap. GBK - outdoor', 60, 7, 7, 8, 6, 5, 8, 7, 6, 6, 6, 5, 6, 0, 5, 5, 7, 5, 6, 6, 9, 5, 6, 6, 5, 9, 7, 7, 8, 8, 7, 188);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_date` datetime NOT NULL,
  `event_desc` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `id_user`, `question`, `answer`, `date`) VALUES
(1, 13, 'Apa goals utama dari dibangunnya aplikasi ini?', 'Memudahkan para pelatih untuk memantau maupun atlet untuk pencatatan penilaian.', '2021-02-15 13:20:43'),
(2, 13, 'Dimanakah Letak Sekretariat PHAC ?', 'Jl. Pajajaran (GOR PAJAJARAN) Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40171', '2021-02-16 07:00:00'),
(5, 0, 'Maitsa                        ', 'Farrassafitri                        ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id_image` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id_image`, `id_user`, `alt`, `location`, `date`) VALUES
(28, 13, 'Couple Doing Shoots!', 'couple.JPG', '2021-02-19 22:07:51'),
(29, 13, 'Three Musketeers', 'Three_Musketeers.JPG', '2021-02-19 22:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(13, 'Nur Sasongko', 'kokonur1020@gmail.com', 'default.jpg', '$2y$10$fET9ON/WSFH/MJu7qav2k.VqbMtP7StAjIF/Pbds6EgiwVYkiNIiG', 1, 1, 1611934947),
(15, 'Mahesa Aliyakama', 'kokonur2010@gmail.com', 'default.jpg', '$2y$10$Y/JvFv8Kcj5YRD9B6xOuIOxANthX6pi57tFw.BXA7P2Dvq8Hnc9bm', 3, 1, 1611935450),
(16, 'Muhammad Ali', 'mali@yahoo.co.id', 'default.jpg', '$2y$10$KrwcRvpVulEvMzom3e4NMePONtAfAHsstdnn9oPDzrEAAUlXYPXYm', 3, 1, 1612279828),
(17, 'Raudia Putri', 'raud@gmail.com', 'default.jpg', '$2y$10$1BXC8sk.EZSzRYBsdsZRJuvjLj.0/TwckL/PDbaT.k9Z4Yr4sSRU2', 3, 1, 1612279852),
(18, 'Winawati', 'wien@gmail.com', 'default.jpg', '$2y$10$KaPvadtL.Serucw2/WnSYeeeyksl/P3iDT8yc8TNaBJsJd50ixUrK', 3, 1, 1612279884),
(19, 'Irfan Al Hakimi', 'irfan@gmail.com', 'default.jpg', '$2y$10$jCNbQgCEPcaYA/rs.Qet/uqySlaEVlkmOUk1IFiL1k69oFFhZfvQW', 3, 1, 1612574915),
(20, 'Dendi Rozak', 'dend@gmail.com', 'default.jpg', '$2y$10$ugLMIdX1L.Qw7O4QhiEpMe1ClnfmX.VUGSxC9GTrOW2SQfgSoPCgy', 3, 1, 1612708770),
(21, 'Nabila', 'nabila@gmail.com', 'default.jpg', '$2y$10$00To606y79Lfz2Oa/9EEMOnqSMabLn6.BlF5ollqhGcdlSIbe/ZI.', 3, 1, 1612708806),
(22, 'Rasya Anfaza Poernama', 'rasya@gmail.com', 'default.jpg', '$2y$10$CgUbQUmpWdXGQQNhhH5UBeCgZkPqau690PjC.adNif0rV/tUbt1Eq', 3, 1, 1612708825),
(23, 'Asep Purnama', 'aspur@gmail.com', 'default.jpg', '$2y$10$AU5hfV2YZp6hI5wPirnuW.qPSmM5rSMEPfcNzQrn2y.KnHhUc553a', 3, 1, 1612708886),
(24, 'Andi Rosadi', 'andi@gmail.com', 'default.jpg', '$2y$10$JSLZiL4MsSjC08x1GDZjPOCIqOulkRtZd8Ui1UgezboF.fgVyX5iu', 3, 1, 1612708919),
(25, 'Agus Alfandi', 'agus@gmail.com', 'default.jpg', '$2y$10$C3zQZlRtVvrMZrAT5n9STehYXCue3stue6ZZhAGz316ZN4wf/zTb6', 3, 1, 1612708941),
(26, 'Etek Nurhadi', 'etek@gmail.com', 'default.jpg', '$2y$10$Z5Acf6N53F2AvYOdQ.juVuk8UUs7MSBgLamHaFPKijuyfBay1IXa2', 3, 1, 1612708970),
(27, 'Sasongko', 'sas@gmail.com', 'default.jpg', '$2y$10$3OE5jTykl0ewb3kEH2ZXjuUMYo1OHYgcitN6t99iluDGoCMqFacke', 2, 1, 1612709389),
(32, 'Ahmad', 'bro@gmail.com', 'default.jpg', '$2y$10$DXr8rTpA7rIq4d8pzr6JveI8PNCXtmW7SMs84K7h1EjUJQZOy3G2e', 2, 1, 1613180344);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 4, 2),
(3, 14, 4),
(4, 4, 5),
(12, 2, 4),
(13, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Coach'),
(5, 'Athlete');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Coach'),
(3, 'Atlet');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Home Admin', 'admin', 'fas fa-fw fa-home', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Manage Account', 'admin/manage', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 4, 'Home Coach', 'coach', 'fas fa-fw fa-home', 1),
(10, 5, 'Home Athlete', 'athlete', 'fas fa-fw fa-home', 1),
(11, 5, 'My Scores', 'athlete/myscores', 'fas fa-book-reader', 1),
(12, 5, 'Go Scoring!', 'athlete/goscore', 'fas fa-fw fa-star', 1),
(15, 4, 'List Archers', 'coach/listarchers', 'fas fa-fw fa-users', 1),
(16, 1, 'Manage Gallery', 'admin/gallery', 'fas fa-fw fa-images', 1),
(17, 4, 'Lists Scores', 'coach/listscores', 'fas fa-book-reader', 1),
(18, 1, 'Management FAQ', 'Admin/faq', 'fas fa-fw fa-question-circle', 1),
(19, 1, 'Management Event', 'Admin/event', 'fas fa-fw fa-calendar-week', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athlete`
--
ALTER TABLE `athlete`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_atlet` (`id_atlet`);

--
-- Indexes for table `athlete_scores`
--
ALTER TABLE `athlete_scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `athlete_scores_ibfk_1` (`id_athelete`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athlete`
--
ALTER TABLE `athlete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `athlete_scores`
--
ALTER TABLE `athlete_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
