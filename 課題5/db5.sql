-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 14, 2021 at 03:06 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db5`
--

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `nameone` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `passone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `nameone`, `mail`, `passone`) VALUES
(1, '後藤慎介', 'gg@gmaill.com', '1009kaka'),
(2, 'shin', 'gotoun', 'Kyodai19'),
(3, 'a;opijda', 'gotoun', 'Kyodai19'),
(4, ' uuixk', 'gotoun', 'Kyodai19'),
(5, 'しんこ', 'changotsumutsumu1009@gmail.com', 'Ljemh980'),
(6, 'しんこ', 'changotsumutsumu1009@gmail.com', 'Ljemh980'),
(7, 'haruku', 'doradorafuture0902@gmail.com', 'Peyoung78723'),
(8, 'haruku', 'doradorafuture0902@gmail.com', 'Peyoung78723');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
