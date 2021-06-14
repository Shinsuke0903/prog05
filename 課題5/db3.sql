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
-- Database: `db3`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `entity` varchar(50) NOT NULL,
  `myname` varchar(50) NOT NULL,
  `tell` varchar(50) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `ask` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `entity`, `myname`, `tell`, `address1`, `ask`) VALUES
(2, 'メタライフ', '後藤慎介', '8051075930', 'gg@ggmail.com', 'サービスに興味があります。'),
(3, '双日', '藤田', '8000000', 'sojitz@co.com', '金額について知りたいです。'),
(4, 'トヨタ', '豊田', '111111111', 'toyota@c.com', '自動車にも使えるものはありますか？'),
(5, 'コカカーラ', '田中', '12341234', 'coca@cola.ccom', '炭酸飲料です。'),
(6, '', '', '0', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
