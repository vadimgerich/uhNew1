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
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_id` int(11) NOT NULL,
  `u_id` varchar(35) DEFAULT NULL,
  `type_i` int(11) NOT NULL,
  `name_i` varchar(500) NOT NULL DEFAULT '',
  `is_default` int(11) DEFAULT NULL,
  `is_archived` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `site_id`, `u_id`, `type_i`, `name_i`, `is_default`, `is_archived`) VALUES
(363, 2, '6249949a6399d', 1, 'готовий евакуюватися', NULL, NULL),
(364, 2, '6249ca9a1cab2', 1, 'терміново!', NULL, NULL),
(365, 2, '624ad4bc6a44b', 1, 'відмова від евакуації', NULL, NULL),
(366, 2, '624ad4c46e9e6', 1, 'гуманітарка', NULL, NULL),
(367, 2, '624ad4cb508fe', 1, 'Дніпро', NULL, NULL),
(368, 2, '624ad4d33f2fd', 1, 'евакуйований власними силами	', NULL, NULL),
(369, 2, '624ad4d9a1197', 1, 'евакуйований Восток SOS', NULL, NULL),
(370, 2, '624ad4ebed211', 1, 'Лисичанськ', NULL, NULL),
(371, 2, '624ad4f35a9ef', 1, 'немає зв\'язку', NULL, NULL),
(372, 2, '624ad4fbb5b46', 1, 'розглядає евакуацію', NULL, NULL),
(373, 2, '624ad502e48ba', 1, 'Сєвєродонецьк', NULL, NULL),
(374, 2, '624ad50b2bc2b', 1, 'Слов\'янськ', NULL, NULL),
(375, 2, '624ad513cb165', 1, 'уточнити статус', NULL, NULL),
(376, 2, '624c283aca64a', 1, 'смерть', NULL, NULL),
(377, 2, '624c2c304ff67', 1, 'зниклий', NULL, NULL),
(378, 2, '624c59d6cd333', 1, 'потенційний волонтер', NULL, NULL),
(379, 2, '624eaa967f339', 1, '07-04-Володя', NULL, 1),
(380, 2, '624fe798ba69a', 1, '08-04-Володя', NULL, 1),
(381, 2, '625064b8465ab', 1, '09-04-север', NULL, 1),
(382, 2, '6250826186339', 1, 'гуманітарка на 09.04 ', NULL, NULL),
(434, 2, '625a75dc0533f', 1, 'не відповідає', NULL, NULL),
(384, 2, '6251632d3ba3d', 1, 'продовжує самостійно', NULL, NULL),
(385, 2, '62518edb54e51', 1, 'евакуація слов\'янськ 10-04', NULL, 1),
(386, 2, '62518f6bc1904', 1, 'гум на 11.04', NULL, NULL),
(387, 2, '6251948d2ace5', 1, 'на мапі', NULL, NULL),
(388, 2, '62519870390be', 1, '10-04-север', NULL, 1),
(389, 2, '625274cd1a882', 1, 'броневик', NULL, 1),
(390, 2, '625290349b4b6', 1, '11-04-евакуація', NULL, 1),
(391, 2, '6253a3ba8242b', 1, 'легкова', NULL, 1),
(392, 2, '6253add99e054', 1, '12-04-евакуація', NULL, 1),
(393, 2, '6253b651496e8', 1, '11-04-славянск', NULL, 1),
(394, 2, '6253bceb5d3f8', 1, '11-04-краматорск', NULL, 1),
(395, 2, '6253d92d7a9cf', 1, 'гуманітарка на 12.04', NULL, NULL),
(396, 2, '6253edbcdeb66', 1, 'гум доставлено 10.04', NULL, NULL),
(397, 2, '6253edcc65367', 1, 'гум доставлено 11.04', NULL, NULL),
(398, 2, '6253edda47abe', 1, 'гум доставлено 9.04', NULL, NULL),
(399, 2, '625427c6b4cba', 1, 'евакуація-12-04-славянск-краматорск', NULL, 1),
(400, 2, '625433ab645ef', 1, 'обзвон-север-11-04', NULL, 1),
(401, 2, '62548bd2aca10', 1, 'обзвон-12-04', NULL, 1),
(402, 2, '62552d48c220d', 1, 'покровск-12-04', NULL, 1),
(403, 2, '62567c3589e78', 1, '13-04-евакуация-краматорск', NULL, 1),
(404, 2, '62569e5ebcd47', 1, 'обзвон', NULL, NULL),
(405, 2, '62569f9ea3797', 1, '14-04-евакуація-сєвєр', NULL, 1),
(406, 2, '6256e45e89321', 1, '14-04-евакуація-бахмут', NULL, 1),
(407, 2, '6257cccb4fd87', 1, 'гум на 14.04', NULL, NULL),
(409, 2, '6257d70a38e24', 1, 'святогорськ-14-04', NULL, NULL),
(410, 2, '6257db05c4d73', 1, '14-04-краматорськ-евакуація ', NULL, 1),
(411, 2, '6257e235c0983', 1, '14-04-святогірьк-евакуація ', NULL, 1),
(412, 2, '6257e9ce147af', 1, 'Львів', NULL, NULL),
(413, 2, '6257f5733c839', 1, 'гум на 15.04', NULL, NULL),
(414, 2, '625807f8dca45', 1, '14-04-славянск-евакуація', NULL, 1),
(415, 2, '62590543d5c52', 1, '15-04-краматорськ-евакуація', NULL, 1),
(418, 2, '625915eb55265', 1, 'інфопослуга ', NULL, 1),
(417, 2, '62590c84621f6', 1, 'лежачий', NULL, NULL),
(419, 2, '6259197dcda91', 1, 'маленький населений пункт ', NULL, NULL),
(422, 2, '625926ec35c5f', 1, 'евакуація', NULL, NULL),
(421, 2, '625926b0d2da2', 1, 'Краматорськ', NULL, NULL),
(423, 2, '625926f3020fd', 1, 'сидячий', NULL, NULL),
(424, 2, '625926fd31ea9', 1, '15-04', NULL, 1),
(425, 2, '62592701af4c4', 1, '16-04', NULL, 1),
(426, 2, '62592f92093fe', 1, 'Олександр', NULL, 1),
(427, 2, '625932422d18c', 1, 'доставлено 12_04', NULL, NULL),
(428, 2, '62593310b9c89', 1, 'Олександр', NULL, 1),
(429, 2, '625933199f044', 1, '17-04', NULL, 1),
(432, 2, '625935368cb41', 1, 'доставлено 14.04', NULL, NULL),
(433, 2, '625a555b221ba', 1, '16-04-краматорськ-евакуація', NULL, 1),
(435, 2, '625acabf321d3', 1, 'гум на 17(18).04', NULL, 1),
(436, 2, '625bbe7cd0fa8', 1, 'краматорск ', NULL, 1),
(437, 2, '625bc0db6f2c8', 1, '17-04-Славянськ-Эвакуация', NULL, 1),
(438, 2, '625c03e69e726', 1, '18-04', NULL, 1),
(439, 2, '625c20b417c80', 1, 'гум на Дмитра', NULL, 1),
(440, 2, '625c44273ab38', 1, 'гум Володя 18.04', NULL, NULL),
(441, 2, '625cfb3d04c01', 1, '19-04', NULL, 1),
(442, 2, '625d1371eaadc', 1, 'доставлено 18.04', NULL, NULL),
(443, 2, '625d729b3143e', 1, 'відмова від гуманітарки', NULL, NULL),
(444, 2, '625d789697a76', 1, 'маша-север', NULL, NULL),
(445, 2, '625d7c48e7034', 1, 'гум на 20.04', NULL, NULL),
(446, 2, '625d7f60b8a65', 1, 'евак-20-04', NULL, NULL),
(447, 2, '625d88c908885', 1, 'гум 20.04', NULL, NULL),
(448, 2, '625d88de5200e', 1, 'планується', NULL, NULL),
(449, 2, '625d88e5926bd', 1, 'доставлено', NULL, NULL),
(455, 2, '625fda3d05f57', 1, 'уточнити адресу', NULL, 0),
(452, 2, '625ec0c7b16e7', 1, 'гум пасивний', NULL, 0),
(453, 2, '625ec0eab74a2', 1, 'гум оптовий', NULL, 0),
(454, 2, '625ed8b970c63', 1, 'евак-20-04-роман', NULL, 0),
(456, 2, '625fef2e66035', 1, 'нова пошта', NULL, 0),
(457, 2, '626004e24a246', 1, 'гум 21.04', NULL, 0),
(458, 2, '62601a3ebc4a1', 1, 'юридичне питання', NULL, 0),
(459, 2, '62601a4e69f95', 1, 'воєнний злочин', NULL, 0),
(460, 2, '62601b1d78398', 1, 'евак -21.04', NULL, 0),
(461, 2, '626029e7670e5', 1, 'Бахмут', NULL, 0),
(462, 2, '62602a328d315', 1, 'Костянтинівка', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`site_id`),
  ADD KEY `name_i` (`name_i`(333)),
  ADD KEY `type_i` (`type_i`),
  ADD KEY `is_default` (`is_default`),
  ADD KEY `idd` (`u_id`,`site_id`) USING BTREE,
  ADD KEY `is_archived` (`is_archived`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=463;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
