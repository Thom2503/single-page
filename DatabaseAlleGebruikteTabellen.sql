-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 14, 2021 at 09:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MijnDatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `learn_things`
--

CREATE TABLE `learn_things` (
  `thing_ID` int(11) NOT NULL,
  `Title` varchar(128) NOT NULL,
  `Meaning` text NOT NULL,
  `Mnemonic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `learn_things`
--

INSERT INTO `learn_things` (`thing_ID`, `Title`, `Meaning`, `Mnemonic`) VALUES
(21, '休', 'Rusten', 'Er zit een man aan de boom om te rusten'),
(22, '花', 'bloem', 'Er zijn roots in de grond voor de bloem'),
(23, '言', 'Woord', 'een mond met wat lijntjes');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `complete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `title`, `complete`) VALUES
(1, 'De was doen', 0),
(2, 'Planten water geven', 0),
(3, 'De bloemetjes buiten zetten', 1),
(4, 'Een Single page webapplicatie maken waarin ik dit op \'Gesloten\' kan zetten', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `learn_things`
--
ALTER TABLE `learn_things`
  ADD PRIMARY KEY (`thing_ID`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `learn_things`
--
ALTER TABLE `learn_things`
  MODIFY `thing_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
