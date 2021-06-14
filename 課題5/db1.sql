-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 14, 2021 at 02:52 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `recipe_name` varchar(45) NOT NULL,
  `category` tinyint(1) NOT NULL,
  `difficulty` tinyint(1) NOT NULL DEFAULT '2',
  `budget` mediumint(9) NOT NULL,
  `howto` varchar(320) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `recipe_name`, `category`, `difficulty`, `budget`, `howto`) VALUES
(1, 'カレーライス', 3, 2, 1000, '1.玉ねぎと鶏肉を炒める\r\n2.水を800ml加えて10分煮る\r\n3.ルーを加えてさらに10分煮る'),
(2, 'サンマの塩焼き', 1, 2, 400, 'サンマを焼く');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
