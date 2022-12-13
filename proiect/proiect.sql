-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 03:47 PM
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
-- Database: `proiect`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorii`
--

CREATE TABLE `categorii` (
  `ID` int(11) NOT NULL,
  `Denumire` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `categorii`
--

INSERT INTO `categorii` (`ID`, `Denumire`) VALUES
(1, 'Telefoane'),
(2, 'Casti'),
(3, 'Incarcatoare');

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

CREATE TABLE `clienti` (
  `ID` int(11) NOT NULL,
  `Username` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Pass` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Email` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `clienti`
--

INSERT INTO `clienti` (`ID`, `Username`, `Pass`, `Email`) VALUES
(16, 'stefanmesesan', '$2y$10$BAYdzbGzCq0nNXDBEDMxm.2FovY5Y2cyislfNRvt8WdqN7sLAqVfe', 'stefanmesesan@gmail.com'),
(17, 'victorpop', '$2y$10$Aa4gz0902VV6nw5JzV6jbOj0ezj/ANvWmojUv/Dty1Gif4QQiutFe', 'victorpop@gmail.com'),
(18, 'andreimoldovan', '$2y$10$MadUFLoDS1vkGQtRxCGOueUg.n8swk.abogqfmJhLiEOc3Crpx/wu', 'andreimoldovan@gmail.com'),
(19, 'filipmuresan', '$2y$10$9Gba7AtCZWy98VyT1VdUXOZlhm6U6VMrurFKOtkffErMFb9tVize2', 'filipmuresan@gmail.com'),
(20, 'adelamiclea', '$2y$10$5KIeokeDNWS8ry7uhIxYFOMlAt0hr7dO1DxLuLi7kOfQQqS28x2Hu', 'adelamiclea@gmail.com'),
(21, 'dragoshorge', '$2y$10$SusLuBnNeqNAkS0rqiMwMuknt9kN9rNzzkvM7ryJ3NlLHFL4J0iHi', 'dragoshorge@gmail.com'),
(22, 'tudorvisan', '$2y$10$FDTEN/ERrhQrZg9i6ZQBpe7I8gIvxSKGgXMhS9Nt9B0c0iLHmpCJq', 'tudorvisan@gmail.com'),
(23, 'mariuscomsa', '$2y$10$l94D8dJjydyFvqXC48PzNOfyfOM1Bfs3jW3N2Sfbg5RdKBU.GWxW.', 'mariuscomsa@gmail.com'),
(24, 'luciagogea', '$2y$10$ChQ7.s4iPbOzqPgFBI3PSurRz5CUVkt04rFwhI0TYzMXCtH0H/AWu', 'luciagogea@gmail.com'),
(25, 'ileanasteff', '$2y$10$mWbzSf.9nhfsuREDDrH.T.7/toE0tQhfKbtD3CXSaTctq/8CkiAFu', 'ileanasteff@gmail.com'),
(27, 'username', '$2y$10$fwwsL4H8Edtf3swq4TvsQ.WqcsNxjsMrbpf7JX8cUcXrO3TNgJtzO', 'username@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cos`
--

CREATE TABLE `cos` (
  `ID_Produs` int(11) DEFAULT NULL,
  `ID_Client` int(11) DEFAULT NULL,
  `cantitate` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cos`
--

INSERT INTO `cos` (`ID_Produs`, `ID_Client`, `cantitate`, `ID`) VALUES
(1, NULL, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produse`
--

CREATE TABLE `produse` (
  `ID` int(11) NOT NULL,
  `Denumire` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Pret` float DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `Imagine` text COLLATE utf8_bin DEFAULT NULL,
  `Descriere` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `produse`
--

INSERT INTO `produse` (`ID`, `Denumire`, `Pret`, `id_categorie`, `Imagine`, `Descriere`) VALUES
(1, 'Iphone 4', 1001, 1, 'https://s13emagst.akamaized.net/products/5/4423/images/img198901_09022012143440_0.jpg', 'Telefon mobil Apple iPhone 4, 8GB, Black'),
(2, 'Iphone 5', 2000, 1, 'https://s13emagst.akamaized.net/products/38/37542/images/img247301_29052013183704_0.jpg', 'Telefon mobil Apple iPhone 5, 16GB, Black'),
(3, 'Iphone 6', 3000, 1, 'https://s13emagst.akamaized.net/products/768/767672/images/res_62d1f36dadac2fff2b91b3489e92a532.jpg', 'Telefon mobil Apple iPhone 6, 16GB, Silver'),
(4, 'Iphone 7', 4000, 1, 'https://s13emagst.akamaized.net/products/4159/4158445/images/res_c85dc0fbad61aaaaa80e301c59f0dcf9.jpg?width=450&height=450&hash=95E27DAD24A61E817D1E2A6F3E02C5CA', 'Telefon mobil Apple iPhone 7, 128GB, Rose Gold'),
(5, 'Iphone 8', 5000, 1, 'https://www.apple.com/newsroom/images/product/iphone/standard/8plus_and_8_glass_back_big.jpg.large.jpg', 'Telefon mobil Apple iPhone 8, 256GB, 4G, Rose Gold'),
(6, 'AirPods 2', 700, 2, 'https://s13emagst.akamaized.net/products/21114/21113101/images/res_89ba82e2719d6cc424442df46f8b5a9d.jpg', 'Casti Apple AirPods 2, White'),
(7, 'AirPods Pro', 1400, 2, 'https://lcdn.altex.ro/resize/media/catalog/product/C/A/2bd48d28d1c32adea0e55139a4e6434a/CASAIRPODSPRO_2_0348bfd1.jpg', 'Casti APPLE AirPods Pro, True Wireless, Bluetooth, In-Ear, Microfon, Noise Cancelling, Carcasa MagSafe, Alb'),
(8, 'AirPods 3', 900, 2, 'https://lcdn.altex.ro/resize/media/catalog/product/C/a/2bd48d28d1c32adea0e55139a4e6434a/Casti_APPLE_AirPods_3_True_Wireless_Bluetooth_In-Ear_Microfon_Carcasa_Incarcare_Wireless_alb_1_.jpg', 'Casti APPLE AirPods 3, True Wireless, Bluetooth, In-Ear, Microfon, Carcasa Incarcare Wireless, alb'),
(9, 'Incarcator lightning basic', 80, 3, 'https://s13emagst.akamaized.net/products/28162/28161379/images/res_59b98d6bb37fd67751c152f2c44044dd.jpg', 'Incarcator/adaptor priza Apple original Iphone cu Cablu de date original Apple, iPhone, USB to Lightning 1 m, White'),
(10, 'Incarcator MagSafe', 200, 3, 'https://static.quickmobile.ro/cs-photos/products/original/magsafe-charger-pentru-iphone-12_10070801_3_1604679134.jpg', 'APPLE Magsafe charger incarcator wireless la USB Type-C, 15W, alb, pentru iPhone - Apple');

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `password_admin` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `email_admin` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`id_admin`, `username_admin`, `password_admin`, `email_admin`) VALUES
(9, 'admin', '$2y$10$D5auvtzafjJjzeZZ6SEkp.Hh3zZdsf3mHsy6mTU9RtZvCeNePo.TK', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorii`
--
ALTER TABLE `categorii`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cos`
--
ALTER TABLE `cos`
  ADD KEY `ID_Produs` (`ID_Produs`),
  ADD KEY `ID_Utilizator` (`ID_Client`);

--
-- Indexes for table `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorii`
--
ALTER TABLE `categorii`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clienti`
--
ALTER TABLE `clienti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `produse`
--
ALTER TABLE `produse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cos`
--
ALTER TABLE `cos`
  ADD CONSTRAINT `cos_ibfk_1` FOREIGN KEY (`ID_Produs`) REFERENCES `produse` (`ID`),
  ADD CONSTRAINT `cos_ibfk_2` FOREIGN KEY (`ID_Client`) REFERENCES `clienti` (`ID`);

--
-- Constraints for table `produse`
--
ALTER TABLE `produse`
  ADD CONSTRAINT `produse_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorii` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
