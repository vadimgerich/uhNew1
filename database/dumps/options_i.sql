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
-- Table structure for table `options_i`
--

CREATE TABLE `options_i` (
  `id` int(11) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `type_i` int(11) NOT NULL,
  `name_i` varchar(100) DEFAULT NULL,
  `code_i` varchar(50) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `value_i` mediumtext DEFAULT NULL,
  `ord` float DEFAULT NULL,
  `is_hidden` int(11) DEFAULT NULL,
  `rules` mediumtext DEFAULT NULL,
  `chk_rules` mediumtext DEFAULT NULL,
  `site_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options_i`
--

INSERT INTO `options_i` (`id`, `u_id`, `type_i`, `name_i`, `code_i`, `cat_id`, `type_id`, `value_i`, `ord`, `is_hidden`, `rules`, `chk_rules`, `site_id`) VALUES
(1, '1', 1, 'Рядок', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 0),
(2, '2', 1, 'Текст', NULL, NULL, NULL, '', 2, NULL, NULL, NULL, 0),
(3, '3', 1, 'Ціле число', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 0),
(4, '4', 1, 'Дійсне число', NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, 0),
(5, '5', 1, 'Відмітка', NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, 0),
(6, '6', 1, 'Дата', NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, 0),
(7, '7', 1, 'Час', NULL, NULL, NULL, NULL, 7, NULL, NULL, NULL, 0),
(8, '8', 1, 'Дата і час', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 0),
(9, '9', 1, 'Вибір', NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, 0),
(10, '10', 1, 'Мультівибір', NULL, NULL, NULL, NULL, 10, NULL, NULL, NULL, 0),
(50, '50', 2, 'Пошта', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 0),
(51, '51', 2, 'Загальні', NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 0),
(213, '194s', 3, 'Стан меню', '{sidebar_state}', 50, 1, '0', 1, 1, '', '{v} != \"\"', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `options_i`
--
ALTER TABLE `options_i`
  ADD PRIMARY KEY (`id`,`site_id`) USING BTREE,
  ADD UNIQUE KEY `site_id` (`site_id`,`u_id`),
  ADD KEY `type_i` (`type_i`),
  ADD KEY `code_i` (`code_i`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `ord` (`ord`),
  ADD KEY `is_hidden` (`is_hidden`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `options_i`
--
ALTER TABLE `options_i`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
