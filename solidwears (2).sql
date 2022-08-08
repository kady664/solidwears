-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 07, 2022 at 11:18 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solidwears`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` ( `name`, `address`, `phone`, `email`, `city_id`) VALUES
('mahmoud Elkady', 'zahraa nacr city', '01011110842', 'mahmoud113elkady4664@gmail.com', 1),
('Mahmoud Esmail', 'abaas elakad', '0125118963', 'mahmoud2558@gmail.com', 3),
('Ziad', 'zahraa nacr city', '01111611555', 'mahmoud113elkady222@gmail.com', 7),
('Adel', 'Hellwan', '0123114489', 'adel232@gmail.com', 2),
('Eiad', 'Madii', '0147851143', 'eiad121@gmail.com', 7),
('wail Ahmed', 'Shobra', '0132551177', 'Wail126@gmail.com', 7),
('Moaz Mohamed', 'Elhosary', '01258771110', 'moaz215@gmail.com', 2),
( 'Moahmed Mohsen', 'Abo-kbeer', '0136117744', 'mohsen124@gmail.com', 9),
( 'Mohamed Abd elnabi', 'Elnoba', '0141173696', 'mohamed14573@gmail.com', 11),
( 'Gamal Eldin', 'Met-Gamr', '0122771185', 'gamal212@gmail.com', 1),
( 'mahmoud Khaled', 'zahraa nacr city', '01017110842', 'mahmoud1213elkady2@gmail.com', 1),
( 'Mahmoud Askar', 'abaas elakad', '0125771163', 'mahmoud552@gmail.com', 3),
( 'Ziad Elkady', 'zahraa nacr city', '01111771155', 'mahmoud113elkady22@gmail.com', 7),
('Adel Mohamed', 'Hellwan', '0123114789', 'adel52@gmail.com', 2),
( 'Eiad Salah', 'Madii', '0147857113', 'eiad32@gmail.com', 7),
('wail Ahed Ali', 'Shobra', '0132114117', 'Wail82@gmail.com', 7),
( 'Moaz Salah', 'Elhosary', '01251141150', 'moaz52@gmail.com', 2),
( 'Moahmed Khaled', 'Abo-kbeer', '0111778544', 'mohsen112@gmail.com', 9),
( 'Eslam Mohasen', 'Elnoba', '0148113696', 'mohamed142@gmail.com', 11),
( 'Ramy Emad', 'Met-Gamr', '0122771185', 'gamal32@gmail.com', 1),
('mahmoud Elkady', 'zahraa nacr city', '01066510842', 'mahmoud113elkady1664@gmail.com', 1),
('Mahmoud Esmail', 'abaas elakad', '0125778663', 'mahmoud28@gmail.com', 3),
('Ziad', 'zahraa nacr city', '01111646655', 'mahmoud113elkady322@gmail.com', 7),
('Adel', 'Hellwan', '0123666489', 'adel282@gmail.com', 2),
('Eiad', 'Madii', '0147866443', 'eiad161@gmail.com', 7),
('wail Ahmed', 'Shobra', '0132664877', 'Wail166@gmail.com', 7),
('Moaz Mohamed', 'Elhosary', '01258776650', 'moaz115@gmail.com', 2),
( 'Moahmed Mohsen', 'Abo-kbeer', '0136647744', 'mohsen184@gmail.com', 9),
( 'Mohamed Abd elnabi', 'Elnoba', '0148663696', 'mohamed13@gmail.com', 11),
( 'Gamal Eldin', 'Met-Gamr', '01227766585', 'gamal241@gmail.com', 1),
( 'mahmoud Khaled', 'zahraa nacr city', '01066710842', 'mahmoud1513elkady2@gmail.com', 1),
( 'Mahmoud Askar', 'abaas elakad', '0126678963', 'mahmoud42@gmail.com', 3),
( 'Ziad Elkady', 'zahraa nacr city', '01166775555', 'mahmoud113elkady288@gmail.com', 7),
('Adel Mohamed', 'Hellwan', '0123766789', 'adel62@gmail.com', 2),
( 'Eiad Salah', 'Madii', '0146657733', 'eiad32@gmail.com', 7),
('wail Ahed Ali', 'Shobra', '0136674877', 'Wail72@gmail.com', 7),
( 'Moaz Salah', 'Elhosary', '01258667750', 'moaz62@gmail.com', 2),
( 'Moahmed Khaled', 'Abo-kbeer', '0166778544', 'mohsen62@gmail.com', 9),
( 'Eslam Mohasen', 'Elnoba', '0148776696', 'mohamed142@gmail.com', 11),
( 'Ramy Emad', 'Met-Gamr', '0122776685', 'gama44l2@gmail.com', 1),

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO brand (name) VALUES ("Asos","Marik","Zara","Uniql","Shein","Tobi","Gilt","Yandy","Koral");


New Valley
Matruh
Red Sea
Giza
South Sinai
North Sinai
Suez
Beheira
Helwan
Sharqia
Dakahlia
Kafr el-Sheikh
Alexandria
Monufia
Minya
Gharbia
Faiyum
Qena
Asyut
Sohag
Ismailia
Beni Suef
Qalyubia
Aswan
Damietta
Cairo
Port Said
Luxor
6th of October
