-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 14, 2021 at 03:04 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db2`
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
(3, 'ハンバーグ', 2, 2, 1200, '1　コネコネする\r\n2 まるめる\r\n3　やく\r\n'),
(4, 'ハンバーグ', 2, 2, 1200, '1\r\n2\r\n3\r\n'),
(5, '納豆', 3, 2, 1500, '1混ぜる\r\n2卵を入れる\r\n3食べる\r\n'),
(6, '親子丼', 1, 3, 1230, '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
