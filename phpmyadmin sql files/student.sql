-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 03:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapers`
--

CREATE TABLE `datapers` (
  `idstudent` int(11) NOT NULL,
  `nume` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prenume` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `an` int(3) NOT NULL,
  `grupa` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapers`
--

INSERT INTO `datapers` (`idstudent`, `nume`, `prenume`, `an`, `grupa`) VALUES
(1, 'njy', 'bgyt', 2002, 5),
(2, 'frcr', 'c', 2005, 1),
(3, 'dfd', 'vhtrfd', 2003, 4),
(4, 'fhgtfrc', 'bhtg', 2001, 5),
(5, 'bvgrf', 'vgrce', 2005, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapers`
--
ALTER TABLE `datapers`
  ADD PRIMARY KEY (`idstudent`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapers`
--
ALTER TABLE `datapers`
  MODIFY `idstudent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
