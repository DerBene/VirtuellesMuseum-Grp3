CREATE DATABASE  IF NOT EXISTS `mydb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mydb`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Admins`
--

DROP TABLE IF EXISTS `Admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Admins` (
  `idAdmins` int(11) NOT NULL AUTO_INCREMENT,
  `Benutzername` varchar(45) DEFAULT NULL,
  `Passwort` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idAdmins`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Admins`
--

LOCK TABLES `Admins` WRITE;
/*!40000 ALTER TABLE `Admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `Admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Epochen`
--

DROP TABLE IF EXISTS `Epochen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Epochen` (
  `E_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Start` varchar(45) DEFAULT NULL,
  `Ende` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Epochen`
--

LOCK TABLES `Epochen` WRITE;
/*!40000 ALTER TABLE `Epochen` DISABLE KEYS */;
/*!40000 ALTER TABLE `Epochen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Epochen_has_Kategorien`
--

DROP TABLE IF EXISTS `Epochen_has_Kategorien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Epochen_has_Kategorien` (
  `Epochen_E_ID` int(11) NOT NULL,
  `Kategorien_Kat_ID` int(11) NOT NULL,
  PRIMARY KEY (`Epochen_E_ID`,`Kategorien_Kat_ID`),
  KEY `fk_Epochen_has_Kategorien_Kategorien1_idx` (`Kategorien_Kat_ID`),
  KEY `fk_Epochen_has_Kategorien_Epochen1_idx` (`Epochen_E_ID`),
  CONSTRAINT `fk_Epochen_has_Kategorien_Epochen1` FOREIGN KEY (`Epochen_E_ID`) REFERENCES `Epochen` (`E_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Epochen_has_Kategorien_Kategorien1` FOREIGN KEY (`Kategorien_Kat_ID`) REFERENCES `Kategorien` (`Kat_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Epochen_has_Kategorien`
--

LOCK TABLES `Epochen_has_Kategorien` WRITE;
/*!40000 ALTER TABLE `Epochen_has_Kategorien` DISABLE KEYS */;
/*!40000 ALTER TABLE `Epochen_has_Kategorien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Geographisch`
--

DROP TABLE IF EXISTS `Geographisch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Geographisch` (
  `Graph_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Beschreibung` varchar(45) DEFAULT NULL,
  `Ort` varchar(45) DEFAULT NULL,
  `Land` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Graph_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Geographisch`
--

LOCK TABLES `Geographisch` WRITE;
/*!40000 ALTER TABLE `Geographisch` DISABLE KEYS */;
/*!40000 ALTER TABLE `Geographisch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Kategorien`
--

DROP TABLE IF EXISTS `Kategorien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Kategorien` (
  `Kat_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `Unterkategorie` varchar(45) DEFAULT NULL,
  `Beschreibung` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Kat_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Kategorien`
--

LOCK TABLES `Kategorien` WRITE;
/*!40000 ALTER TABLE `Kategorien` DISABLE KEYS */;
/*!40000 ALTER TABLE `Kategorien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Medien`
--

DROP TABLE IF EXISTS `Medien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Medien` (
  `Med_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Typ` varchar(45) DEFAULT NULL,
  `Dateipfad` varchar(45) DEFAULT NULL,
  `Urheber` varchar(45) DEFAULT NULL,
  `Erscheinungsdatum` varchar(45) DEFAULT NULL,
  `Freischaltung` tinyint(1) DEFAULT NULL,
  `Persönlichkeiten_Pers_ID` int(11) NOT NULL,
  PRIMARY KEY (`Med_ID`,`Persönlichkeiten_Pers_ID`),
  KEY `fk_Medien_Persönlichkeiten1_idx` (`Persönlichkeiten_Pers_ID`),
  CONSTRAINT `fk_Medien_Persönlichkeiten1` FOREIGN KEY (`Persönlichkeiten_Pers_ID`) REFERENCES `Persönlichkeiten` (`Pers_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Medien`
--

LOCK TABLES `Medien` WRITE;
/*!40000 ALTER TABLE `Medien` DISABLE KEYS */;
/*!40000 ALTER TABLE `Medien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Persönlichkeiten`
--

DROP TABLE IF EXISTS `Persönlichkeiten`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Persönlichkeiten` (
  `Pers_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `Kurzbeschreibung` varchar(255) DEFAULT NULL,
  `Zitat` varchar(45) DEFAULT NULL,
  `Langer Text` varchar(255) DEFAULT NULL,
  `Biografische Daten` varchar(150) DEFAULT NULL,
  `Freischaltung` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Pers_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Persönlichkeiten`
--

LOCK TABLES `Persönlichkeiten` WRITE;
/*!40000 ALTER TABLE `Persönlichkeiten` DISABLE KEYS */;
/*!40000 ALTER TABLE `Persönlichkeiten` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Persönlichkeiten_has_Epochen`
--

DROP TABLE IF EXISTS `Persönlichkeiten_has_Epochen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Persönlichkeiten_has_Epochen` (
  `Persönlichkeiten_Pers_ID` int(11) NOT NULL,
  `Epochen_E_ID` int(11) NOT NULL,
  PRIMARY KEY (`Persönlichkeiten_Pers_ID`,`Epochen_E_ID`),
  KEY `fk_Persönlichkeiten_has_Epochen_Epochen1_idx` (`Epochen_E_ID`),
  KEY `fk_Persönlichkeiten_has_Epochen_Persönlichkeiten1_idx` (`Persönlichkeiten_Pers_ID`),
  CONSTRAINT `fk_Persönlichkeiten_has_Epochen_Epochen1` FOREIGN KEY (`Epochen_E_ID`) REFERENCES `Epochen` (`E_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Persönlichkeiten_has_Epochen_Persönlichkeiten1` FOREIGN KEY (`Persönlichkeiten_Pers_ID`) REFERENCES `Persönlichkeiten` (`Pers_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Persönlichkeiten_has_Epochen`
--

LOCK TABLES `Persönlichkeiten_has_Epochen` WRITE;
/*!40000 ALTER TABLE `Persönlichkeiten_has_Epochen` DISABLE KEYS */;
/*!40000 ALTER TABLE `Persönlichkeiten_has_Epochen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Persönlichkeiten_has_Kategorien`
--

DROP TABLE IF EXISTS `Persönlichkeiten_has_Kategorien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Persönlichkeiten_has_Kategorien` (
  `Persönlichkeiten_Pers_ID` int(11) NOT NULL,
  `Kategorien_Kat_ID` int(11) NOT NULL,
  PRIMARY KEY (`Persönlichkeiten_Pers_ID`,`Kategorien_Kat_ID`),
  KEY `fk_Persönlichkeiten_has_Kategorien_Kategorien1_idx` (`Kategorien_Kat_ID`),
  KEY `fk_Persönlichkeiten_has_Kategorien_Persönlichkeiten1_idx` (`Persönlichkeiten_Pers_ID`),
  CONSTRAINT `fk_Persönlichkeiten_has_Kategorien_Kategorien1` FOREIGN KEY (`Kategorien_Kat_ID`) REFERENCES `Kategorien` (`Kat_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Persönlichkeiten_has_Kategorien_Persönlichkeiten1` FOREIGN KEY (`Persönlichkeiten_Pers_ID`) REFERENCES `Persönlichkeiten` (`Pers_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Persönlichkeiten_has_Kategorien`
--

LOCK TABLES `Persönlichkeiten_has_Kategorien` WRITE;
/*!40000 ALTER TABLE `Persönlichkeiten_has_Kategorien` DISABLE KEYS */;
/*!40000 ALTER TABLE `Persönlichkeiten_has_Kategorien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Werke`
--

DROP TABLE IF EXISTS `Werke`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Werke` (
  `Werk_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Typ` varchar(45) DEFAULT NULL,
  `Dateipfad` varchar(45) DEFAULT NULL,
  `Urheber` varchar(45) DEFAULT NULL,
  `Erscheinungsdatum` varchar(45) DEFAULT NULL,
  `Freischaltung` tinyint(1) DEFAULT NULL,
  `Geographisch_Graph_ID` int(11) NOT NULL,
  PRIMARY KEY (`Werk_ID`,`Geographisch_Graph_ID`),
  KEY `fk_Werke_Geographisch1_idx` (`Geographisch_Graph_ID`),
  CONSTRAINT `fk_Werke_Geographisch1` FOREIGN KEY (`Geographisch_Graph_ID`) REFERENCES `Geographisch` (`Graph_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Werke`
--

LOCK TABLES `Werke` WRITE;
/*!40000 ALTER TABLE `Werke` DISABLE KEYS */;
/*!40000 ALTER TABLE `Werke` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Werke_has_Persönlichkeiten`
--

DROP TABLE IF EXISTS `Werke_has_Persönlichkeiten`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Werke_has_Persönlichkeiten` (
  `Werke_Werk_ID` int(11) NOT NULL,
  `Persönlichkeiten_Pers_ID` int(11) NOT NULL,
  PRIMARY KEY (`Werke_Werk_ID`,`Persönlichkeiten_Pers_ID`),
  KEY `fk_Werke_has_Persönlichkeiten_Persönlichkeiten1_idx` (`Persönlichkeiten_Pers_ID`),
  KEY `fk_Werke_has_Persönlichkeiten_Werke1_idx` (`Werke_Werk_ID`),
  CONSTRAINT `fk_Werke_has_Persönlichkeiten_Persönlichkeiten1` FOREIGN KEY (`Persönlichkeiten_Pers_ID`) REFERENCES `Persönlichkeiten` (`Pers_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Werke_has_Persönlichkeiten_Werke1` FOREIGN KEY (`Werke_Werk_ID`) REFERENCES `Werke` (`Werk_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Werke_has_Persönlichkeiten`
--

LOCK TABLES `Werke_has_Persönlichkeiten` WRITE;
/*!40000 ALTER TABLE `Werke_has_Persönlichkeiten` DISABLE KEYS */;
/*!40000 ALTER TABLE `Werke_has_Persönlichkeiten` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-28 14:21:24
