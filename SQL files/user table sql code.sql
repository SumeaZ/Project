-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 02:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(25) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `name`, `lastname`, `email`, `password`, `isAdmin`) VALUES
(2, 'Olta', 'Balaj', 'oltabalaj94@gmail.com', 'olta123', 1),
(4, 'Enxhi', 'Dushi', 'enxhidushi@gmail.com', 'enxhi123', 0),
(8, 'Liona', 'Gashi', 'lionagashi@gmail.com', 'liona123', 0),
(10, 'Olti', 'Sopa', 'oltisopa@gmail.com', 'olti123', 0),
(11, 'Drin', 'Skenderi', 'd.skenderi@gmail.com', 'drini123', 0),
(17, 'Sumea', 'Zogaj', 'sumeazogaj5@gmail.com', 'sumea123', 1),
(24, 'Adea', 'Ukimeri', 'aukimeri@gmail.com', 'adea123', 0),
(25, 'Laureta', 'Balaj', 'lbalaj@gmail.com', 'laureta123', 0),
(26, 'Learta', 'Balaj', 'labalaj@gmail.com', 'learta123', 0),
(28, 'Clirim', 'Krasniqi', 'ckras123@gmail.com', 'clirim123', 0),
(29, 'Eurona', 'Balaj', 'ebalaj123@gmail.com', 'eurona111', 0),
(30, 'Leonida', 'Haxhiu', 'leonidahaxhiu@gmail.com', 'leo123', 0),
(42, 'Elza', 'Haxhiu', 'ehaxhiu@gmail.com', 'elza123', 0),
(43, 'Bujar', 'Dushi', 'bujaridushi@gmail.com', 'bujar123', 0),
(44, 'Anila', 'Duka', 'aniladuka@gmail.com', 'anila123', 0),
(45, 'Joni', 'Kajolli', 'jonkajolli@gmail.com', 'joni123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
