-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2022 at 03:18 PM
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
-- Table structure for table `usrs_roles`
--

CREATE TABLE `usrs_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_i` varchar(500) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usrs_roles`
--

INSERT INTO `usrs_roles` (`id`, `name_i`) VALUES
(1, 'Admin / Керуючий'),
(0, 'Оператор'),
(2, 'Аналітик'),
(3, 'Волонтер');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usrs_roles`
--
ALTER TABLE `usrs_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_i` (`name_i`(333));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usrs_roles`
--
ALTER TABLE `usrs_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
