-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2026 at 10:15 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `zondatabase`
--

CREATE TABLE `zondatabase` (
  `id` int UNSIGNED NOT NULL,
  `FirstName` tinytext NOT NULL,
  `LastName` tinytext NOT NULL,
  `Email` tinytext NOT NULL,
  `SchoolName` tinytext NOT NULL,
  `SchoolEmail` tinytext NOT NULL,
  `Pathway` tinytext NOT NULL,
  `SchoolYear` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zondatabase`
--
ALTER TABLE `zondatabase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zondatabase`
--
ALTER TABLE `zondatabase`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
