-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2022 at 03:17 PM
-- Server version: 10.5.11-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c2sos`
--

-- --------------------------------------------------------

--
-- Table structure for table `infoservices`
--

CREATE TABLE `infoservices` (
  `id` int(11) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `name_i` varchar(150) NOT NULL,
  `order_i` float DEFAULT NULL,
  `site_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infoservices`
--

INSERT INTO `infoservices` (`id`, `u_id`, `name_i`, `order_i`, `site_id`) VALUES
(1, '1', '-', 1, 2),
(2, '2', 'центарлізована евакуація', 2, 2),
(4, '4', 'юридичні послуги', 4, 2),
(5, '5', 'пошук людей', 5, 2),
(3, '3', 'централізована гуманітарка', 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infoservices`
--
ALTER TABLE `infoservices`
  ADD PRIMARY KEY (`id`,`site_id`) USING BTREE,
  ADD UNIQUE KEY `u_id` (`u_id`,`site_id`),
  ADD KEY `order_i` (`order_i`),
  ADD KEY `site_id` (`site_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infoservices`
--
ALTER TABLE `infoservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
