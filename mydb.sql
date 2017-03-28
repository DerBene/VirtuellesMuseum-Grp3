-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2017 at 03:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `idAdmins` int(11) NOT NULL AUTO_INCREMENT,
  `Benutzername` varchar(45) DEFAULT NULL,
  `Passwort` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idAdmins`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`idAdmins`, `Benutzername`, `Passwort`, `Email`) VALUES
(1, 'Steffen', 'test', 'ghti@gmail.com'),
(2, 'jude', 'zigeuner', 'spacken@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `epochen`
--

CREATE TABLE IF NOT EXISTS `epochen` (
  `E_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Start` varchar(45) DEFAULT NULL,
  `Ende` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`E_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `epochen`
--

INSERT INTO `epochen` (`E_ID`, `Start`, `Ende`) VALUES
(1, '1400', '1600'),
(2, '1601', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `epochen_has_kategorien`
--

CREATE TABLE IF NOT EXISTS `epochen_has_kategorien` (
  `Epochen_E_ID` int(11) NOT NULL,
  `Kategorien_Kat_ID` int(11) NOT NULL,
  PRIMARY KEY (`Epochen_E_ID`,`Kategorien_Kat_ID`),
  KEY `fk_Epochen_has_Kategorien_Kategorien1_idx` (`Kategorien_Kat_ID`),
  KEY `fk_Epochen_has_Kategorien_Epochen1_idx` (`Epochen_E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `epochen_has_kategorien`
--

INSERT INTO `epochen_has_kategorien` (`Epochen_E_ID`, `Kategorien_Kat_ID`) VALUES
(1, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `geographisch`
--

CREATE TABLE IF NOT EXISTS `geographisch` (
  `Graph_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Beschreibung` varchar(45) DEFAULT NULL,
  `Ort` varchar(45) DEFAULT NULL,
  `Land` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Graph_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geographisch`
--

INSERT INTO `geographisch` (`Graph_ID`, `Beschreibung`, `Ort`, `Land`) VALUES
(1, 'kalt und feucht', 'Deppenhausen', 'Deutschland'),
(2, 'beste', 'Überall', 'Drittes Reich');

-- --------------------------------------------------------

--
-- Table structure for table `kategorien`
--

CREATE TABLE IF NOT EXISTS `kategorien` (
  `Kat_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `Unterkategorie` varchar(45) DEFAULT NULL,
  `Beschreibung` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Kat_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategorien`
--

INSERT INTO `kategorien` (`Kat_ID`, `Name`, `Unterkategorie`, `Beschreibung`) VALUES
(1, 'schlechtes', 'noch schlechter', 'ist schlecht'),
(2, 'gutes', 'besser', 'ist gut');

-- --------------------------------------------------------

--
-- Table structure for table `medien`
--

CREATE TABLE IF NOT EXISTS `medien` (
  `Med_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Typ` varchar(45) DEFAULT NULL,
  `Dateipfad` varchar(45) DEFAULT NULL,
  `Urheber` varchar(45) DEFAULT NULL,
  `Erscheinungsdatum` varchar(45) DEFAULT NULL,
  `Freischaltung` tinyint(1) DEFAULT NULL,
  `Persönlichkeiten_Pers_ID` int(11) NOT NULL,
  PRIMARY KEY (`Med_ID`,`Persönlichkeiten_Pers_ID`),
  KEY `fk_Medien_Persönlichkeiten1_idx` (`Persönlichkeiten_Pers_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medien`
--

INSERT INTO `medien` (`Med_ID`, `Typ`, `Dateipfad`, `Urheber`, `Erscheinungsdatum`, `Freischaltung`, `Persönlichkeiten_Pers_ID`) VALUES
(3, 'text', 'C://Testpfad', 'ich', 'jetzt', 1, 1),
(4, 'bild', 'D://mehrtest', 'du', 'vorhin', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `persönlichkeiten`
--

CREATE TABLE IF NOT EXISTS `persönlichkeiten` (
  `Pers_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `Kurzbeschreibung` varchar(255) DEFAULT NULL,
  `Zitat` varchar(45) DEFAULT NULL,
  `Langer Text` varchar(255) DEFAULT NULL,
  `Biografische Daten` varchar(150) DEFAULT NULL,
  `Freischaltung` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Pers_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `persönlichkeiten`
--

INSERT INTO `persönlichkeiten` (`Pers_ID`, `Name`, `Kurzbeschreibung`, `Zitat`, `Langer Text`, `Biografische Daten`, `Freischaltung`) VALUES
(1, 'ich', 'ich halt', 'ich bin der beste', 'was auch immer hier her kommt', 'geboren und lebt noch', 1),
(2, 'du', 'nochwas', 'egal', 'mehr egalität', 'geb und lebend', 0);

-- --------------------------------------------------------

--
-- Table structure for table `persönlichkeiten_has_epochen`
--

CREATE TABLE IF NOT EXISTS `persönlichkeiten_has_epochen` (
  `Persönlichkeiten_Pers_ID` int(11) NOT NULL,
  `Epochen_E_ID` int(11) NOT NULL,
  PRIMARY KEY (`Persönlichkeiten_Pers_ID`,`Epochen_E_ID`),
  KEY `fk_Persönlichkeiten_has_Epochen_Epochen1_idx` (`Epochen_E_ID`),
  KEY `fk_Persönlichkeiten_has_Epochen_Persönlichkeiten1_idx` (`Persönlichkeiten_Pers_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `persönlichkeiten_has_epochen`
--

INSERT INTO `persönlichkeiten_has_epochen` (`Persönlichkeiten_Pers_ID`, `Epochen_E_ID`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `persönlichkeiten_has_kategorien`
--

CREATE TABLE IF NOT EXISTS `persönlichkeiten_has_kategorien` (
  `Persönlichkeiten_Pers_ID` int(11) NOT NULL,
  `Kategorien_Kat_ID` int(11) NOT NULL,
  PRIMARY KEY (`Persönlichkeiten_Pers_ID`,`Kategorien_Kat_ID`),
  KEY `fk_Persönlichkeiten_has_Kategorien_Kategorien1_idx` (`Kategorien_Kat_ID`),
  KEY `fk_Persönlichkeiten_has_Kategorien_Persönlichkeiten1_idx` (`Persönlichkeiten_Pers_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `persönlichkeiten_has_kategorien`
--

INSERT INTO `persönlichkeiten_has_kategorien` (`Persönlichkeiten_Pers_ID`, `Kategorien_Kat_ID`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `werke`
--

CREATE TABLE IF NOT EXISTS `werke` (
  `Werk_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Typ` varchar(45) DEFAULT NULL,
  `Dateipfad` varchar(45) DEFAULT NULL,
  `Urheber` varchar(45) DEFAULT NULL,
  `Erscheinungsdatum` varchar(45) DEFAULT NULL,
  `Freischaltung` tinyint(1) DEFAULT NULL,
  `Geographisch_Graph_ID` int(11) NOT NULL,
  PRIMARY KEY (`Werk_ID`,`Geographisch_Graph_ID`),
  KEY `fk_Werke_Geographisch1_idx` (`Geographisch_Graph_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `werke`
--

INSERT INTO `werke` (`Werk_ID`, `Typ`, `Dateipfad`, `Urheber`, `Erscheinungsdatum`, `Freischaltung`, `Geographisch_Graph_ID`) VALUES
(2, 'egal', 'C://Testpfad', 'gerhard', '22222', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `werke_has_persönlichkeiten`
--

CREATE TABLE IF NOT EXISTS `werke_has_persönlichkeiten` (
  `Werke_Werk_ID` int(11) NOT NULL,
  `Persönlichkeiten_Pers_ID` int(11) NOT NULL,
  PRIMARY KEY (`Werke_Werk_ID`,`Persönlichkeiten_Pers_ID`),
  KEY `fk_Werke_has_Persönlichkeiten_Persönlichkeiten1_idx` (`Persönlichkeiten_Pers_ID`),
  KEY `fk_Werke_has_Persönlichkeiten_Werke1_idx` (`Werke_Werk_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `werke_has_persönlichkeiten`
--

INSERT INTO `werke_has_persönlichkeiten` (`Werke_Werk_ID`, `Persönlichkeiten_Pers_ID`) VALUES
(2, 1),
(2, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `epochen_has_kategorien`
--
ALTER TABLE `epochen_has_kategorien`
  ADD CONSTRAINT `fk_Epochen_has_Kategorien_Epochen1` FOREIGN KEY (`Epochen_E_ID`) REFERENCES `epochen` (`E_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Epochen_has_Kategorien_Kategorien1` FOREIGN KEY (`Kategorien_Kat_ID`) REFERENCES `kategorien` (`Kat_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `medien`
--
ALTER TABLE `medien`
  ADD CONSTRAINT `fk_Medien_Persönlichkeiten1` FOREIGN KEY (`Persönlichkeiten_Pers_ID`) REFERENCES `persönlichkeiten` (`Pers_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `persönlichkeiten_has_epochen`
--
ALTER TABLE `persönlichkeiten_has_epochen`
  ADD CONSTRAINT `fk_Persönlichkeiten_has_Epochen_Epochen1` FOREIGN KEY (`Epochen_E_ID`) REFERENCES `epochen` (`E_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Persönlichkeiten_has_Epochen_Persönlichkeiten1` FOREIGN KEY (`Persönlichkeiten_Pers_ID`) REFERENCES `persönlichkeiten` (`Pers_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `persönlichkeiten_has_kategorien`
--
ALTER TABLE `persönlichkeiten_has_kategorien`
  ADD CONSTRAINT `fk_Persönlichkeiten_has_Kategorien_Kategorien1` FOREIGN KEY (`Kategorien_Kat_ID`) REFERENCES `kategorien` (`Kat_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Persönlichkeiten_has_Kategorien_Persönlichkeiten1` FOREIGN KEY (`Persönlichkeiten_Pers_ID`) REFERENCES `persönlichkeiten` (`Pers_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `werke`
--
ALTER TABLE `werke`
  ADD CONSTRAINT `fk_Werke_Geographisch1` FOREIGN KEY (`Geographisch_Graph_ID`) REFERENCES `geographisch` (`Graph_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `werke_has_persönlichkeiten`
--
ALTER TABLE `werke_has_persönlichkeiten`
  ADD CONSTRAINT `fk_Werke_has_Persönlichkeiten_Persönlichkeiten1` FOREIGN KEY (`Persönlichkeiten_Pers_ID`) REFERENCES `persönlichkeiten` (`Pers_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Werke_has_Persönlichkeiten_Werke1` FOREIGN KEY (`Werke_Werk_ID`) REFERENCES `werke` (`Werk_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
