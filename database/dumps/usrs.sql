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
-- Table structure for table `usrs`
--

CREATE TABLE `usrs` (
  `id` int(10) UNSIGNED NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `site_id` int(11) NOT NULL,
  `login_i` varchar(50) DEFAULT '',
  `password_i` varchar(50) DEFAULT '',
  `email_i` varchar(70) DEFAULT NULL,
  `name_i` varchar(150) NOT NULL,
  `sms_num` varchar(50) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `begin_saldo` float NOT NULL,
  `itm` int(11) DEFAULT NULL,
  `etm` int(11) DEFAULT NULL,
  `it` varchar(250) DEFAULT NULL,
  `et` varchar(250) DEFAULT NULL,
  `ds` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usrs`
--

INSERT INTO `usrs` (`id`, `u_id`, `site_id`, `login_i`, `password_i`, `email_i`, `name_i`, `sms_num`, `role_id`, `begin_saldo`, `itm`, `etm`, `it`, `et`, `ds`) VALUES
(1, '1', 2, 'admin', 'zees5-cinko', 'admin@admin.admin', 'Admin', '+380506904681', 1, 0, 0, 0, '368,372', '', '01.02.2022'),
(255144, '6246b0abaa3e9', 2, 'pepta', '1980', '', 'Коля Белик', '', 2, 0, NULL, NULL, NULL, NULL, NULL),
(255145, '6246b1a445233', 2, 'dmytro1208', '123456', '', 'Дмитрий Подзолков', '', 2, 0, 0, 0, '', '', '18.04.2022'),
(255146, '6246b1c6d66ef', 2, 'svetav', '1974', '', 'Света Сисько', '', 0, 0, NULL, NULL, NULL, NULL, NULL),
(255147, '6246cee85f326', 2, 'irina', '301063', '', 'Ирина Кайданович', '', 0, 0, NULL, NULL, NULL, NULL, NULL),
(255148, '6246d213e6c45', 2, 'lerales', '0771986', '', 'Лера Лесникова', '', 2, 0, 0, 0, '', '', '10.04.2022'),
(255149, '6246d31a819d9', 2, 'lerako', '1989', '', 'Лера Кошеленко', '', 2, 0, 0, 0, '419', '', '01.03.2022'),
(255150, '6246d3ba249f4', 2, 'dashan', '190685', '', 'Даша Наумова', '', 2, 0, 0, 2, '', '', '15.04.2022'),
(255151, '6246d637441f4', 2, 'annap', '0404', '', 'Анна Птущенко', '', 2, 0, NULL, NULL, NULL, NULL, NULL),
(255152, '6246f02cae37d', 2, 'lenas', '28', '', 'Олена Семак', '', 2, 0, 3, 0, '', '', '01.03.2022'),
(255153, '6246f76459511', 2, 'olisenzya', 'karmapachenno108', '', 'аліса климчук', '', 2, 0, 0, 0, '', '', '01.03.2022'),
(255154, '624705b8b3307', 2, 'sashad', '888', '', 'Саша Дзюба', '', 0, 0, NULL, NULL, NULL, NULL, NULL),
(255155, '62470e5757e8b', 2, 'sky', '12345', '', 'Сергей Кондратьев', '', 2, 0, 1, 1, '453,452,366', '', '08.12.2021'),
(255156, '62470e7f9dbe8', 2, 'antonm', '12345', '', 'Антон Мартынов', '', 2, 0, 0, 0, '', '', '18.03.2022'),
(255157, '62470e9bf3995', 2, 'kate', '12345', '', 'Катя', '', 0, 0, NULL, NULL, NULL, NULL, NULL),
(255158, '62471bf9cc903', 2, 'kareva', '0411', '', 'Наташа Карева', '', 2, 0, 1, 0, '', '418,365,368,369', '01.03.2022'),
(255159, '62481276aa625', 2, 'miral', '2520', '', 'Мирослава Луговая', '', 0, 0, NULL, NULL, NULL, NULL, NULL),
(255160, '62486ce518e2a', 2, 'mariav', '12345', '', 'Марія Власова', '', 2, 0, 0, 0, '', '418,365,368,369', '01.03.2022'),
(255162, '624c1d403c73e', 2, '', '', '', 'Александр Церковь Север', '0500269718', 3, 0, NULL, NULL, NULL, NULL, NULL),
(255161, '624bf977608cf', 2, 'natazh', '5956', '', 'Наталья Живаго', '', 0, 0, NULL, NULL, NULL, NULL, NULL),
(255163, '624c1d65a1261', 2, '', '', '', 'Володя Швецов', '0505242512', 3, 0, NULL, NULL, NULL, NULL, NULL),
(255164, '624c2fb372fd5', 2, '', '', '', 'Любов Дмитрівна Вілесова 12', '095 077 78 71 ', 3, 0, NULL, NULL, NULL, NULL, NULL),
(255165, '624c5391bb2b6', 2, 'irap', 'irapop', '', 'Ірина Поп', '', 0, 0, NULL, NULL, NULL, NULL, NULL),
(255166, '624d2a4cdefa1', 2, '', '', '', 'Дима', '', 3, 0, NULL, NULL, NULL, NULL, NULL),
(255167, '624d684139b70', 2, 'lerar', '123', '', 'Валерия Рудейчук', '', 2, 0, 0, 0, '', '365,368,369', '01.03.2022'),
(255168, '624d68a947634', 2, 'oxanak', '123', '', 'Оксана Колесник', '', 2, 0, NULL, NULL, NULL, NULL, NULL),
(255169, '624e8972d669f', 2, 'julias', '12345', '', 'Julia Shukan', '', 2, 0, 0, 0, '', '', '28.02.2022'),
(255170, '624edf9293c7d', 2, 'natap', '12345', '', 'Наташа Печерська', '', 2, 0, NULL, NULL, NULL, NULL, NULL),
(255171, '625081d8a7d76', 2, '', '', '', 'Володька Гуманітарка Сєвєр', '0990068743', 3, 0, NULL, NULL, NULL, NULL, NULL),
(255172, '62515a0ab8c8c', 2, 'ivanna', '0607', '', 'Іванна Хома', '', 2, 0, 0, 0, '', '365,368,369', '01.03.2022'),
(255173, '625199543d3f7', 2, '', '', '', 'Ольга Дружби народів 30', '0999750227', 3, 0, NULL, NULL, NULL, NULL, NULL),
(255174, '6253efe05f821', 2, '', '', '', 'Маша Центральний 64', '0992837343', 3, 0, NULL, NULL, NULL, NULL, NULL),
(255175, '6256a5ce8a084', 2, 'tanyav', '123', '', 'Татьяна В', '', 0, 0, NULL, NULL, NULL, NULL, NULL),
(255176, '6256a67e3f861', 2, 'yuliyash', '123', '', 'Юлія Ш', '', 0, 0, NULL, NULL, NULL, NULL, NULL),
(255177, '6256cdb27f7d1', 2, 'TEA', '12345', '', 'Женя Ткачук', '', 2, 0, 0, 0, '367', '418,365,368,369', '01.04.2022'),
(255178, '6256f421e2021', 2, 'kostya', '12345', '', 'Костя Шаповалов', '', 2, 0, 0, 0, '366', '', '19.04.2022'),
(255179, '62581918133dc', 2, 'kseniad', '12345', '', 'Ксения Денисенко', '', 0, 0, NULL, NULL, NULL, NULL, NULL),
(255180, '625848d2c41a5', 2, 'natab', '2110', '', 'Наталья Борисова', '', 2, 0, 0, 0, '', '', '14.04.2022'),
(255181, '625920ef8ec89', 2, 'anna', '2124', '', 'Анна Антоненко', '', 2, 0, 0, 0, '404,374', '', '19.04.2022'),
(255182, '625ebf730c13e', 2, 'andrew', '12345', '', 'Андрій Зайцев', '', 2, 0, 0, 0, '', '368,369', '20.04.2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usrs`
--
ALTER TABLE `usrs`
  ADD PRIMARY KEY (`id`,`site_id`) USING BTREE,
  ADD UNIQUE KEY `site_id` (`site_id`,`u_id`),
  ADD KEY `name_i` (`name_i`),
  ADD KEY `login_i` (`login_i`),
  ADD KEY `sms_num` (`sms_num`),
  ADD KEY `password_i` (`password_i`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usrs`
--
ALTER TABLE `usrs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255183;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
