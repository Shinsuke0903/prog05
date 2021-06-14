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
-- Database: `db6`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabeta`
--

CREATE TABLE `tabeta` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `tabephoto` mediumblob NOT NULL,
  `comments` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabeta`
--
ALTER TABLE `tabeta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabeta`
--
ALTER TABLE `tabeta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
