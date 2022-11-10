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
-- Database: `magazin`
--

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

CREATE TABLE `clienti` (
  `client_id` int(11) NOT NULL,
  `client_username` varchar(100) NOT NULL,
  `client_pass` varchar(100) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `client_str` varchar(100) NOT NULL,
  `client_oras` varchar(100) NOT NULL,
  `client_tara` varchar(100) NOT NULL,
  `client_codpost` varchar(100) NOT NULL,
  `client_nrcard` int(11) NOT NULL,
  `client_tipcard` varchar(100) NOT NULL,
  `client_dataexp` date NOT NULL,
  `acceptareemail` varchar(100) NOT NULL,
  `client_nume` varchar(100) NOT NULL,
  `client_nrinregRC` int(11) NOT NULL,
  `cod_fiscal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clienti`
--

INSERT INTO `clienti` (`client_id`, `client_username`, `client_pass`, `client_email`, `client_str`, `client_oras`, `client_tara`, `client_codpost`, `client_nrcard`, `client_tipcard`, `client_dataexp`, `acceptareemail`, `client_nume`, `client_nrinregRC`, `cod_fiscal`) VALUES
(1, '3rgf', '3rfdv', 'nbytre', 'vgr', 'bhtgr', 'nhtg', 'nbhtgr', 35, 'njhtrb', '2022-11-01', 'nthbv', 'htbfgv', 53454, 87565),
(2, 'etsgf', 'rdghfb', 'nhrdg', 'tygb', 'tnhbg', 'mnjthbg', 'nhtbg', 465, 'nbrgvf', '2022-11-21', 'ngdf', 'gtrf', 534, 76),
(3, 'rwvfs', 'vevf', 'ergf', 'etggf', 'grvdf', 'brgfv', 'vgr', 56, 'gtref', '0000-00-00', 'nhtbgvrf', 'kmujnyhbg', 745, 8756),
(4, 'nyjhtbgr', 'ntbgrv', 'mnjhybtg', 'nbhtgv', 'nbhtgvr', 'jhtgrf', 'mkuny', 767, 'mujnyh', '2022-11-17', 'mjynh', 'mujnyh', 5345, 8756),
(5, 't3wrgsd', 'uy64tg', 'kgm@gmail.com', 'Str. a, Nr. 134', 'yhgf', 'abc', 'def', 746, '635', '2022-11-21', 'trwgsfvc@zxc.com', 'bgdcbv', 5435, 123);

-- --------------------------------------------------------

--
-- Table structure for table `cos`
--

CREATE TABLE `cos` (
  `cos_id` int(11) NOT NULL,
  `cos_clientID` int(11) NOT NULL,
  `cos_produsID` int(11) NOT NULL,
  `cos_cantitate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cos`
--

INSERT INTO `cos` (`cos_id`, `cos_clientID`, `cos_produsID`, `cos_cantitate`) VALUES
(1, 1, 1, '432'),
(2, 2, 2, '654'),
(3, 3, 3, '653'),
(4, 4, 4, '542'),
(5, 5, 5, '123');

-- --------------------------------------------------------

--
-- Table structure for table `ordin`
--

CREATE TABLE `ordin` (
  `ordin_id` int(11) NOT NULL,
  `ordin_prodID` int(11) NOT NULL,
  `ordin_calit` varchar(100) NOT NULL,
  `ordin_client_id` int(11) NOT NULL,
  `ordin_dataintr` date NOT NULL,
  `ordin_stare` text NOT NULL,
  `ordin_shipdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordin`
--

INSERT INTO `ordin` (`ordin_id`, `ordin_prodID`, `ordin_calit`, `ordin_client_id`, `ordin_dataintr`, `ordin_stare`, `ordin_shipdate`) VALUES
(1, 1, 'hgrfe', 1, '2022-10-10', 'junhtbgr', '2022-11-22'),
(2, 2, 'fr3wc', 2, '2022-11-02', 'bgref', '2022-11-29'),
(3, 3, 'bgefv', 3, '2022-11-22', 'befv', '2022-11-06'),
(4, 4, 'brge', 4, '2022-12-25', 'nhbgrv', '2022-12-18'),
(5, 5, 'hbyrvfe', 5, '2022-11-11', 'nytbgf', '2022-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `parola`
--

CREATE TABLE `parola` (
  `userid` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parola`
--

INSERT INTO `parola` (`userid`, `pass`) VALUES
(1, 'bgdsdc'),
(2, 'fevdc'),
(3, 'bgrvfd'),
(4, 'gtevfd'),
(5, 'resvcx');

-- --------------------------------------------------------

--
-- Table structure for table `produse`
--

CREATE TABLE `produse` (
  `produs_id` int(11) NOT NULL,
  `produs_nume` varchar(100) NOT NULL,
  `produs_pret` int(10) NOT NULL,
  `produs_img` varchar(100) NOT NULL,
  `produs_categ` varchar(100) NOT NULL,
  `produs_descriere` varchar(100) NOT NULL,
  `produs_desccompl` varchar(100) NOT NULL,
  `produs_stare` text NOT NULL,
  `produs_oferta` varchar(100) NOT NULL,
  `produs_noutati` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produse`
--

INSERT INTO `produse` (`produs_id`, `produs_nume`, `produs_pret`, `produs_img`, `produs_categ`, `produs_descriere`, `produs_desccompl`, `produs_stare`, `produs_oferta`, `produs_noutati`) VALUES
(1, 'hy5rgb', 5435, 'bgrgbgbee', 'eg', 'gergg', 'rwer', 'werrew', 'fqfd', 'vzcv'),
(2, 'fevsv', 12425, 'vfws', 'grwvf', 'vw', 'vw', 'htey', 'wgr', 'gtehd'),
(3, 'fwrgye', 53, 'hyehgb', 'tegbvdf', 'huthg', 'bevdwc', 'frwvthe', 'frwgtb', 'grfw'),
(4, 'rebvf', 13, 'rwerwr', 'rwer', 'wrvrwe', 'vrvrwv', 'rsvvrsx', 'rsgvxff', 'grwsfxv'),
(5, 'gtebdfv', 4234, 'w4edzf', '4tegfdv', 'erfgvc', 'g4ef', 'g4tefd', 'g4tevf', 'nbrgvdf');

-- --------------------------------------------------------

--
-- Table structure for table `situatievizita`
--

CREATE TABLE `situatievizita` (
  `id` int(11) NOT NULL,
  `numepagviz` varchar(100) NOT NULL,
  `platforma` varchar(100) NOT NULL,
  `referrer` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `host` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `situatievizita`
--

INSERT INTO `situatievizita` (`id`, `numepagviz`, `platforma`, `referrer`, `time`, `date`, `host`) VALUES
(1, 'mkiun', 'mkunjhy', 'njybh', '16:53:51', '2022-11-27', 'vgtrfc'),
(2, 'gvrfc', 'gvrfc', 'vgrfc', '18:53:30', '2022-11-22', 'bvgrc'),
(3, 'bh6vgtfrc', 'vfcde', '8iu', '18:53:30', '2022-11-21', 'munhbytgv'),
(4, 'hrbgv', 'vfecd', 'cfed', '18:53:32', '2022-11-13', 'mnyjh'),
(5, 'refdsc', 'cwds', 'weadc', '18:53:23', '2022-11-09', 're2wdc');

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`id`, `username`, `password`, `email`) VALUES
(1, 'bthg', 'njyh', 'mnjy'),
(2, 'vgr', 'jyhtg', 'tr'),
(3, 'efv', 'utnfbg', 'vfsvc'),
(4, 'efv', 'cwdsc', 'vrfeds'),
(5, 'gtrfev', 'grefc', 'erfdvs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `cos`
--
ALTER TABLE `cos`
  ADD PRIMARY KEY (`cos_id`);

--
-- Indexes for table `ordin`
--
ALTER TABLE `ordin`
  ADD PRIMARY KEY (`ordin_id`);

--
-- Indexes for table `parola`
--
ALTER TABLE `parola`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`produs_id`);

--
-- Indexes for table `situatievizita`
--
ALTER TABLE `situatievizita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clienti`
--
ALTER TABLE `clienti`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cos`
--
ALTER TABLE `cos`
  MODIFY `cos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ordin`
--
ALTER TABLE `ordin`
  MODIFY `ordin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parola`
--
ALTER TABLE `parola`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produse`
--
ALTER TABLE `produse`
  MODIFY `produs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `situatievizita`
--
ALTER TABLE `situatievizita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
