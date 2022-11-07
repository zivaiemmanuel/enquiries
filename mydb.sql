-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 01:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `Id` int(10) NOT NULL,
  `fldName` varchar(50) NOT NULL,
  `fldEmail` varchar(150) NOT NULL,
  `fldPhone` int(15) NOT NULL,
  `fldMessage` text NOT NULL,
  `fldResponse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`, `fldResponse`) VALUES
(2, 'Zivai Emmanuel Karenga', 'zivaikarenga@gmail.com', 782676441, 'Can not access ur about', ''),
(3, 'James Calvin', 'jc@gmail.com', 782676441, 'visuals  not responding ', ''),
(4, 'Samuel Marina ', 'sm@gmail.com', 2147483647, 'make the products bigger ', ''),
(5, 'Chiringa John', 'cj@gmail.com', 783637474, 'Same content browsing', ''),
(6, 'Emmanuel Karenga', 'zivaikarenga@gmail.com', 782676441, 'Not respoinding', ''),
(7, 'Welligton', 'well@gmail.com', 782676441, 'system mal', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
