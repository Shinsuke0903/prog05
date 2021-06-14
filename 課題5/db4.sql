-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 14, 2021 at 03:05 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db4`
--

-- --------------------------------------------------------

--
-- Table structure for table `gohan`
--

CREATE TABLE `gohan` (
  `id` int(11) NOT NULL,
  `store` varchar(50) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `gram` mediumint(11) NOT NULL,
  `other` varchar(50) NOT NULL,
  `detail` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gohan`
--

INSERT INTO `gohan` (`id`, `store`, `menu`, `gram`, `other`, `detail`) VALUES
(1, '大戸屋', 'チキン南蛮定食', 10, 'タルタル少なめ', '野菜を多めで'),
(2, '大戸屋', '唐揚げ定食', 80, 'サラダ多めでよろしくお願いします', '以上です'),
(3, '大戸屋', '唐揚げ定食', 80, 'サラダ多めでよろしくお願いします', '以上です'),
(4, '好きや', 'チーズ牛丼', 80, '汁だくで', 'よろしくお願いします'),
(5, '好きや', 'チーズ牛丼', 80, '汁だくで', 'よろしくお願いします'),
(6, '松屋', '牛丼', 60, 'ミールきっとも欲しい', 'よろしく'),
(7, '丸亀製麺', '天ぷらうどん', 90, '汁なしで', 'うどんいつも美味しいです'),
(8, 'サイゼリヤ', 'ミラノ風どりあ', 60, '少なめで', 'よろしくお願いします。'),
(9, '磯丸水産', '刺身定食', 80, 'なし', 'なし');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gohan`
--
ALTER TABLE `gohan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gohan`
--
ALTER TABLE `gohan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
