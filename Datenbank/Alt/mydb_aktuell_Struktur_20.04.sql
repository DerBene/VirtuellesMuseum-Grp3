-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 20. Apr 2017 um 15:17
-- Server-Version: 10.1.21-MariaDB
-- PHP-Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `epochen`
--

CREATE TABLE `epochen` (
  `E_ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Start` varchar(45) DEFAULT NULL,
  `Ende` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `epochen_has_kategorien`
--

CREATE TABLE `epochen_has_kategorien` (
  `Epochen_E_ID` int(11) NOT NULL,
  `Kategorien_Kat_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `geographisch`
--

CREATE TABLE `geographisch` (
  `Graph_ID` int(11) NOT NULL,
  `Beschreibung` varchar(45) DEFAULT NULL,
  `Ort` varchar(45) DEFAULT NULL,
  `Land` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kategorien`
--

CREATE TABLE `kategorien` (
  `Kat_ID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Unterkategorie` varchar(45) DEFAULT NULL,
  `Beschreibung` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `medien`
--

CREATE TABLE `medien` (
  `Med_ID` int(11) NOT NULL,
  `Typ` varchar(45) DEFAULT NULL,
  `Dateipfad` varchar(100) DEFAULT NULL,
  `Urheber` varchar(45) DEFAULT NULL,
  `Erscheinungsdatum` varchar(45) DEFAULT NULL,
  `Freischaltung` tinyint(1) DEFAULT NULL,
  `Persoenlichkeiten_Pers_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `persoenlichkeiten`
--

CREATE TABLE `persoenlichkeiten` (
  `Pers_ID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Kurzbeschreibung` varchar(255) DEFAULT NULL,
  `Zitat` varchar(500) DEFAULT NULL,
  `LangerText` varchar(5000) DEFAULT NULL,
  `BiografischeDaten` varchar(150) DEFAULT NULL,
  `Freischaltung` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `persoenlichkeiten_has_epochen`
--

CREATE TABLE `persoenlichkeiten_has_epochen` (
  `Persoenlichkeiten_Pers_ID` int(11) NOT NULL,
  `Epochen_E_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `persoenlichkeiten_has_kategorien`
--

CREATE TABLE `persoenlichkeiten_has_kategorien` (
  `Persoenlichkeiten_Pers_ID` int(11) NOT NULL,
  `Kategorien_Kat_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `werke`
--

CREATE TABLE `werke` (
  `Werk_ID` int(11) NOT NULL,
  `Titel` varchar(100) NOT NULL,
  `Typ` varchar(45) DEFAULT NULL,
  `Dateipfad` varchar(45) DEFAULT NULL,
  `Urheber` varchar(45) DEFAULT NULL,
  `Erscheinungsdatum` varchar(45) DEFAULT NULL,
  `Freischaltung` tinyint(1) DEFAULT NULL,
  `Geographisch_Graph_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `werke_has_persoenlichkeiten`
--

CREATE TABLE `werke_has_persoenlichkeiten` (
  `Werke_Werk_ID` int(11) NOT NULL,
  `Persoenlichkeiten_Pers_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `epochen`
--
ALTER TABLE `epochen`
  ADD PRIMARY KEY (`E_ID`);

--
-- Indizes für die Tabelle `epochen_has_kategorien`
--
ALTER TABLE `epochen_has_kategorien`
  ADD PRIMARY KEY (`Epochen_E_ID`,`Kategorien_Kat_ID`),
  ADD KEY `fk_Epochen_has_Kategorien_Kategorien1_idx` (`Kategorien_Kat_ID`),
  ADD KEY `fk_Epochen_has_Kategorien_Epochen1_idx` (`Epochen_E_ID`);

--
-- Indizes für die Tabelle `geographisch`
--
ALTER TABLE `geographisch`
  ADD PRIMARY KEY (`Graph_ID`);

--
-- Indizes für die Tabelle `kategorien`
--
ALTER TABLE `kategorien`
  ADD PRIMARY KEY (`Kat_ID`);

--
-- Indizes für die Tabelle `medien`
--
ALTER TABLE `medien`
  ADD PRIMARY KEY (`Med_ID`,`Persoenlichkeiten_Pers_ID`),
  ADD KEY `fk_Medien_Persönlichkeiten1_idx` (`Persoenlichkeiten_Pers_ID`);
ALTER TABLE `persoenlichkeiten`
  ADD PRIMARY KEY (`Pers_ID`);

--
-- Indizes für die Tabelle `persoenlichkeiten_has_epochen`
--
ALTER TABLE `persoenlichkeiten_has_epochen`
  ADD PRIMARY KEY (`Persoenlichkeiten_Pers_ID`,`Epochen_E_ID`),
  ADD KEY `fk_Persönlichkeiten_has_Epochen_Epochen1_idx` (`Epochen_E_ID`),
  ADD KEY `fk_Persönlichkeiten_has_Epochen_Persönlichkeiten1_idx` (`Persoenlichkeiten_Pers_ID`);

--
-- Indizes für die Tabelle `persoenlichkeiten_has_kategorien`
--
ALTER TABLE `persoenlichkeiten_has_kategorien`
  ADD PRIMARY KEY (`Persoenlichkeiten_Pers_ID`,`Kategorien_Kat_ID`),
  ADD KEY `fk_Persönlichkeiten_has_Kategorien_Kategorien1_idx` (`Kategorien_Kat_ID`),
  ADD KEY `fk_Persönlichkeiten_has_Kategorien_Persönlichkeiten1_idx` (`Persoenlichkeiten_Pers_ID`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `werke`
--
ALTER TABLE `werke`
 ADD PRIMARY KEY (`Werk_ID`,`Geographisch_Graph_ID`),
  ADD KEY `fk_Werke_Geographisch1_idx` (`Geographisch_Graph_ID`);

--
-- Indizes für die Tabelle `werke_has_persoenlichkeiten`
--
ALTER TABLE `werke_has_persoenlichkeiten`
  ADD PRIMARY KEY (`Werke_Werk_ID`,`Persoenlichkeiten_Pers_ID`),
  ADD KEY `fk_Werke_has_Persönlichkeiten_Persönlichkeiten1_idx` (`Persoenlichkeiten_Pers_ID`),
  ADD KEY `fk_Werke_has_Persönlichkeiten_Werke1_idx` (`Werke_Werk_ID`);
																
--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `epochen`
--
ALTER TABLE `epochen`
  MODIFY `E_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
 ALTER TABLE `geographisch`
  MODIFY `Graph_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `kategorien`
--
ALTER TABLE `kategorien`
  MODIFY `Kat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `medien`
--
ALTER TABLE `medien`
  MODIFY `Med_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `persoenlichkeiten`
--
ALTER TABLE `persoenlichkeiten`
  MODIFY `Pers_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `werke`
--
ALTER TABLE `werke`
  MODIFY `Werk_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `epochen_has_kategorien`
--
ALTER TABLE `epochen_has_kategorien`
  ADD CONSTRAINT `fk_Epochen_has_Kategorien_Epochen1` FOREIGN KEY (`Epochen_E_ID`) REFERENCES `epochen` (`E_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Epochen_has_Kategorien_Kategorien1` FOREIGN KEY (`Kategorien_Kat_ID`) REFERENCES `kategorien` (`Kat_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `medien`
--
ALTER TABLE `medien`
  ADD CONSTRAINT `fk_Medien_Persönlichkeiten1` FOREIGN KEY (`Persoenlichkeiten_Pers_ID`) REFERENCES `persoenlichkeiten` (`Pers_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `persoenlichkeiten_has_epochen`
--
ALTER TABLE `persoenlichkeiten_has_epochen`
  ADD CONSTRAINT `fk_Persönlichkeiten_has_Epochen_Epochen1` FOREIGN KEY (`Epochen_E_ID`) REFERENCES `epochen` (`E_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Persönlichkeiten_has_Epochen_Persönlichkeiten1` FOREIGN KEY (`Persoenlichkeiten_Pers_ID`) REFERENCES `persoenlichkeiten` (`Pers_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `persoenlichkeiten_has_kategorien`
--
ALTER TABLE `persoenlichkeiten_has_kategorien`
  ADD CONSTRAINT `fk_Persönlichkeiten_has_Kategorien_Kategorien1` FOREIGN KEY (`Kategorien_Kat_ID`) REFERENCES `kategorien` (`Kat_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Persönlichkeiten_has_Kategorien_Persönlichkeiten1` FOREIGN KEY (`Persoenlichkeiten_Pers_ID`) REFERENCES `persoenlichkeiten` (`Pers_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `werke`
--
ALTER TABLE `werke`
  ADD CONSTRAINT `fk_Werke_Geographisch1` FOREIGN KEY (`Geographisch_Graph_ID`) REFERENCES `geographisch` (`Graph_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `werke_has_persoenlichkeiten`
--
ALTER TABLE `werke_has_persoenlichkeiten`
  ADD CONSTRAINT `fk_Werke_has_Persönlichkeiten_Persönlichkeiten1` FOREIGN KEY (`Persoenlichkeiten_Pers_ID`) REFERENCES `persoenlichkeiten` (`Pers_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Werke_has_Persönlichkeiten_Werke1` FOREIGN KEY (`Werke_Werk_ID`) REFERENCES `werke` (`Werk_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
 
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
