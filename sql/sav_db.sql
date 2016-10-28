-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2016 at 10:35 AM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sav_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `CLIENT`
--

CREATE TABLE `CLIENT` (
  `ID` int(11) NOT NULL,
  `NOM_CLIENT` varchar(80) DEFAULT NULL,
  `PRENOM_CLIENT` varchar(80) DEFAULT NULL,
  `ADRESSE_CLIENT` varchar(200) DEFAULT NULL,
  `CP_CLIENT` varchar(5) DEFAULT NULL,
  `VILLE_CLIENT` varchar(100) DEFAULT NULL,
  `TEL_CLIENT` varchar(15) DEFAULT NULL,
  `MAIL_CLIENT` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `MATERIEL`
--

CREATE TABLE `MATERIEL` (
  `ID` int(11) NOT NULL,
  `MARQUE_MAT` varchar(30) DEFAULT NULL,
  `NSERIE_MAT` varchar(30) DEFAULT NULL,
  `TYPE_MAT` varchar(30) DEFAULT NULL,
  `ID_CLIENT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PEC`
--

CREATE TABLE `PEC` (
  `ID` int(11) NOT NULL,
  `DATE_PEC` date DEFAULT NULL,
  `ETAT_PEC` varchar(20) DEFAULT NULL,
  `DESC_PEC` varchar(255) DEFAULT NULL,
  `ID_CLIENT` int(11) NOT NULL,
  `ID_TECH` int(11) NOT NULL,
  `ID_MAT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TECHNICIEN`
--

CREATE TABLE `TECHNICIEN` (
  `ID` int(11) NOT NULL,
  `NOM_TECH` varchar(80) DEFAULT NULL,
  `PRENOM_TECH` varchar(80) DEFAULT NULL,
  `MDP_TECH` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CLIENT`
--
ALTER TABLE `CLIENT`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `MATERIEL`
--
ALTER TABLE `MATERIEL`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_CLIENT` (`ID_CLIENT`);

--
-- Indexes for table `PEC`
--
ALTER TABLE `PEC`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_CLIENT` (`ID_CLIENT`),
  ADD KEY `ID_TECH` (`ID_TECH`),
  ADD KEY `ID_MAT` (`ID_MAT`);

--
-- Indexes for table `TECHNICIEN`
--
ALTER TABLE `TECHNICIEN`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CLIENT`
--
ALTER TABLE `CLIENT`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `MATERIEL`
--
ALTER TABLE `MATERIEL`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `PEC`
--
ALTER TABLE `PEC`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `TECHNICIEN`
--
ALTER TABLE `TECHNICIEN`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `MATERIEL`
--
ALTER TABLE `MATERIEL`
  ADD CONSTRAINT `MATERIEL_ibfk_1` FOREIGN KEY (`ID_CLIENT`) REFERENCES `CLIENT` (`ID`);

--
-- Constraints for table `PEC`
--
ALTER TABLE `PEC`
  ADD CONSTRAINT `PEC_ibfk_1` FOREIGN KEY (`ID_CLIENT`) REFERENCES `CLIENT` (`ID`),
  ADD CONSTRAINT `PEC_ibfk_2` FOREIGN KEY (`ID_TECH`) REFERENCES `TECHNICIEN` (`ID`),
  ADD CONSTRAINT `PEC_ibfk_3` FOREIGN KEY (`ID_MAT`) REFERENCES `MATERIEL` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
