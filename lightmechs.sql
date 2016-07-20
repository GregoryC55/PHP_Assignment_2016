-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2016 at 01:28 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lightmechs`
--

-- --------------------------------------------------------

--
-- Table structure for table `lightmechs`
--

CREATE TABLE IF NOT EXISTS `lightmechs` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Variant` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Tonnage` int(11) NOT NULL,
  `Battle_Value2` int(11) NOT NULL,
  `Point_Value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lightmechs`
--

INSERT INTO `lightmechs` (`ID`, `Name`, `Variant`, `Type`, `Tonnage`, `Battle_Value2`, `Point_Value`) VALUES
(1, 'Panther', 'PNT-9R', 'BattleMech', 35, 769, 20),
(2, 'Jenner', 'JR7-C3', 'BattleMech', 35, 1069, 23),
(3, 'Kabuto', 'KBO-7A', 'BattleMech', 20, 524, 15),
(4, 'Venom', 'SDR-9K', 'BattleMech', 35, 798, 19),
(5, 'Skulker', 'C3M', 'Combat Vehicle', 20, 230, 13),
(6, 'Pegasus', 'Standard', 'Combat Vehicle', 35, 640, 17),
(7, 'Scorpion', 'MRM', 'Combat Vehicle', 25, 469, 13),
(8, 'Saladin', 'Standard', 'Combat Vehicle', 35, 596, 13),
(9, 'Raiden', 'Original', 'Battle Armor', 5, 209, 12),
(10, 'Inner Sphere Standard', 'Laser', 'Battle Armor', 5, 231, 8),
(11, 'Kage Light Battle Armor', 'Space', 'Battle Armor', 5, 105, 8),
(12, 'Inner Sphere Standard', 'Machine Gun', 'Battle Armor', 5, 199, 8),
(13, 'Shilone', 'SL-17', 'Aerospace Fighter', 65, 1230, 27),
(14, 'Stingray', 'F-90', 'Aerospace Fighter', 60, 1268, 27),
(15, 'Sai', 'S-3', 'Aerospace Fighter', 40, 959, 23),
(16, 'Slayer', 'SL-15', 'Aerospace Fighter', 80, 1288, 34);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
