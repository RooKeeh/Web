-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 03:30 PM
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
-- Database: `facturiere online`
--

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

CREATE TABLE `clienti` (
  `id` int(11) NOT NULL,
  `id_companie` int(20) NOT NULL,
  `nume_client` text NOT NULL,
  `cif` varchar(20) NOT NULL,
  `reg_comert` tinytext NOT NULL,
  `oras` varchar(50) NOT NULL,
  `judet` varchar(30) NOT NULL,
  `adresa` text NOT NULL,
  `cap_social` varchar(20) NOT NULL,
  `tva` varchar(3) NOT NULL,
  `email` tinytext NOT NULL,
  `telefon` tinytext NOT NULL,
  `website` tinytext NOT NULL,
  `fax` tinytext NOT NULL,
  `info_aditionale` text NOT NULL,
  `iban` varchar(50) NOT NULL,
  `banca` text NOT NULL,
  `valuta` varchar(20) NOT NULL,
  `descriere_banca` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clienti`
--

INSERT INTO `clienti` (`id`, `id_companie`, `nume_client`, `cif`, `reg_comert`, `oras`, `judet`, `adresa`, `cap_social`, `tva`, `email`, `telefon`, `website`, `fax`, `info_aditionale`, `iban`, `banca`, `valuta`, `descriere_banca`) VALUES
(1, 1, 'abc', '123', 'def', 'Iasi', 'Iasi', 'Str. F, nr. 6', '123', '2', 'g@yahoo.com', '0745632598', 'abc.ro', '852', 'abc', 'RO123456DEF', 'Def', 'test', 'fgh'),
(2, 2, 'def', '234', 'ghi', 'Turda', 'Cluj', 'Str. G, nr. 7', '456', '5', 'j@yahoo.com', '0746524152', 'abc.com', '789', 'jnm', 'RO952242JKL', 'Jkl', 'vbn', 'ghj'),
(3, 3, 'ghi', '345', 'jkl', 'Deva', 'Deva', 'Str. H, nr. 8', '678', '9', 'abc@hotmail.com', '0741235698', 'bnm.ro', '745', 'lmn', 'RO789654KMN', 'Kmn', 'sda', 'ujk'),
(4, 4, 'jkl', '987', 'okl', 'Abc', 'Def', 'Str. K, nr. 9', '654', '56', 'abc@outlook.com', '0754236574', 'kjm.com', '435', 'egh', 'RO789654FGH', 'Fgh', 'yfc', 'erh'),
(5, 5, 'Okd', '785', 'kgm', 'Fed', 'Gef', 'Str. L, nr. 13', '654', '34', 'test@test.ro', '0748484848', 'kmj.com', '975', 'ery', 'RO789654DVB', 'Dvb', 'ujf', 'thj');

-- --------------------------------------------------------

--
-- Table structure for table `companie`
--

CREATE TABLE `companie` (
  `id` int(11) NOT NULL,
  `nume_companie` text NOT NULL,
  `cif` varchar(20) NOT NULL,
  `reg_comert` tinytext NOT NULL,
  `oras` varchar(50) NOT NULL,
  `judet` varchar(30) NOT NULL,
  `adresa` text NOT NULL,
  `cap_social` varchar(20) NOT NULL,
  `tva` varchar(3) NOT NULL,
  `email` tinytext NOT NULL,
  `telefon` text NOT NULL,
  `website` tinytext NOT NULL,
  `faxi` tinytext NOT NULL,
  `info_aditionale` text NOT NULL,
  `nume` varchar(20) NOT NULL,
  `prenume` varchar(50) NOT NULL,
  `iban` varchar(50) NOT NULL,
  `banca` text NOT NULL,
  `valuta` varchar(20) NOT NULL,
  `descriere_banca` text NOT NULL,
  `prefix_factura` varchar(10) NOT NULL,
  `serie_factura` varchar(15) NOT NULL,
  `logo_factura` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companie`
--

INSERT INTO `companie` (`id`, `nume_companie`, `cif`, `reg_comert`, `oras`, `judet`, `adresa`, `cap_social`, `tva`, `email`, `telefon`, `website`, `faxi`, `info_aditionale`, `nume`, `prenume`, `iban`, `banca`, `valuta`, `descriere_banca`, `prefix_factura`, `serie_factura`, `logo_factura`) VALUES
(1, 'abc', '123', 'def', 'Cluj-Napoca', 'Cluj', 'Str. a, nr. 1', '200', '19', '1@gmail.com', '0746321123', 'a.com', '123456', 'ghi', 'Abc', 'Def', 'RO12345BTRL', 'Banca Transilvania', 'EURO', 'abc', 'jkl', '789', 'zxc'),
(2, 'def', '456', 'ghi', 'Bucuresti', 'Ilfov', 'Str. b, nr. 2', '300', '20', '2@gmail.com', '0745789987', 'b.com', '789012', 'jkl', 'Ghi', 'Jkl', 'RO987654BCR', 'BCR', 'DOLARI', 'def', 'mno', '124', 'xcv'),
(3, 'ghi', '789', 'jkl', 'Sibiu', 'Sibiu', 'Str. c, nr. 3', '400', '30', '3@gmail.com', '0749898756', 'c.com', '124567', 'mno', 'Mno', 'Pqr', 'RO019274ING', 'ING', 'FRANCI', 'ghi', 'pqr', '125', 'cvb'),
(4, 'jkl', '012', 'mno', 'Oradea', 'Bihor', 'Str. d, nr. 4', '500', '40', '4@gmail.com', '0747845622', 'd.ro', '127464', 'pqr', 'Str', 'Mgj', 'RO264272BRD', 'BRD', 'DOLARI', 'jkl', 'rst', '856', 'trh'),
(5, 'okd', '852', 'qrp', 'Timisoara', 'Timis', 'Str. e, nr. 5', '1000', '23', '5@yahoo.ro', '0756473234', 'e.com', '852643', 'ohg', 'Obc', 'Kgh', 'RO846574ABC', 'ABC', 'EURO', 'okf', 'ujk', '068', 'tug');

-- --------------------------------------------------------

--
-- Table structure for table `facturi`
--

CREATE TABLE `facturi` (
  `id` int(11) NOT NULL,
  `id_companie` int(20) NOT NULL,
  `client` int(20) NOT NULL,
  `tva` varchar(5) NOT NULL,
  `valuta` tinytext NOT NULL,
  `valoare_valuta` decimal(10,2) NOT NULL,
  `data_factura` varchar(15) NOT NULL,
  `data_scadenta` varchar(15) NOT NULL,
  `taxe` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `info_aditionale` text NOT NULL,
  `total_de_plata` decimal(10,2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facturi`
--

INSERT INTO `facturi` (`id`, `id_companie`, `client`, `tva`, `valuta`, `valoare_valuta`, `data_factura`, `data_scadenta`, `taxe`, `discount`, `info_aditionale`, `total_de_plata`, `status`) VALUES
(1, 1, 123, '23', 'adf', '13.00', '03.11.2022', '04.11.2022', '123.00', '2.00', 'abc', '123.00', 'a'),
(2, 2, 345, '45', 'efg', '66.00', '04.11.2022', '06.11.2022', '4643.00', '67.00', 'gth', '435.00', 'b'),
(3, 3, 532, '23', 'hjj', '564.00', '05.12.2022', '06.01.2023', '234.00', '631.00', 'tjh', '8564.00', 'ht'),
(4, 4, 9087, '4', 'yjk', '5733.00', '07.12.2022', '07.01.2023', '356.00', '234.00', 'rhfvb', '462.00', 'hv'),
(5, 5, 1, '0', 'aaa', '111.00', '11.12.2022', '01.01.2023', '234.00', '222.00', 'fgf', '999.00', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `produse_facturi`
--

CREATE TABLE `produse_facturi` (
  `id` int(20) NOT NULL,
  `id_factura` int(20) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `descriere` text NOT NULL,
  `cantitate` decimal(10,2) NOT NULL,
  `sume_de_plata` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produse_facturi`
--

INSERT INTO `produse_facturi` (`id`, `id_factura`, `nume`, `descriere`, `cantitate`, `sume_de_plata`) VALUES
(1, 5, 'abc', 'def', '123.00', '2.00'),
(2, 4, 'abvc', 'vbdc', '5245.00', '13.00'),
(3, 1, 'gergf', 'advx', '524.00', '123.00'),
(4, 3, 'jtngh', 'tyrt', '134.00', '764.00'),
(5, 2, 'ogk', 'kjhgf', '9765.00', '245.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK clienti` (`id_companie`);

--
-- Indexes for table `companie`
--
ALTER TABLE `companie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facturi`
--
ALTER TABLE `facturi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK facturi` (`id_companie`);

--
-- Indexes for table `produse_facturi`
--
ALTER TABLE `produse_facturi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK produse_facturi` (`id_factura`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clienti`
--
ALTER TABLE `clienti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `companie`
--
ALTER TABLE `companie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `facturi`
--
ALTER TABLE `facturi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produse_facturi`
--
ALTER TABLE `produse_facturi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clienti`
--
ALTER TABLE `clienti`
  ADD CONSTRAINT `FK clienti` FOREIGN KEY (`id_companie`) REFERENCES `companie` (`id`);

--
-- Constraints for table `facturi`
--
ALTER TABLE `facturi`
  ADD CONSTRAINT `FK facturi` FOREIGN KEY (`id_companie`) REFERENCES `companie` (`id`);

--
-- Constraints for table `produse_facturi`
--
ALTER TABLE `produse_facturi`
  ADD CONSTRAINT `FK produse_facturi` FOREIGN KEY (`id_factura`) REFERENCES `facturi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
