-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 31. Mrz 2017 um 14:34
-- Server-Version: 10.1.21-MariaDB
-- PHP-Version: 7.1.1

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `epochen`
--

DROP TABLE IF EXISTS `epochen`;
CREATE TABLE `epochen` (
  `E_ID` int(11) NOT NULL,
  `Start` varchar(45) DEFAULT NULL,
  `Ende` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `epochen`
--

INSERT INTO `epochen` (`E_ID`, `Start`, `Ende`) VALUES
(1, '1400', '1600'),
(2, '1601', '2000');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `epochen_has_kategorien`
--

DROP TABLE IF EXISTS `epochen_has_kategorien`;
CREATE TABLE `epochen_has_kategorien` (
  `Epochen_E_ID` int(11) NOT NULL,
  `Kategorien_Kat_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `epochen_has_kategorien`
--

INSERT INTO `epochen_has_kategorien` (`Epochen_E_ID`, `Kategorien_Kat_ID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `geographisch`
--

DROP TABLE IF EXISTS `geographisch`;
CREATE TABLE `geographisch` (
  `Graph_ID` int(11) NOT NULL,
  `Beschreibung` varchar(45) DEFAULT NULL,
  `Ort` varchar(45) DEFAULT NULL,
  `Land` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `geographisch`
--

INSERT INTO `geographisch` (`Graph_ID`, `Beschreibung`, `Ort`, `Land`) VALUES
(1, 'kalt und feucht', 'Deppenhausen', 'Deutschland'),
(2, 'beste', 'Überall', 'Drittes Reich');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kategorien`
--

DROP TABLE IF EXISTS `kategorien`;
CREATE TABLE `kategorien` (
  `Kat_ID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Unterkategorie` varchar(45) DEFAULT NULL,
  `Beschreibung` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `kategorien`
--

INSERT INTO `kategorien` (`Kat_ID`, `Name`, `Unterkategorie`, `Beschreibung`) VALUES
(1, 'schlechtes', 'noch schlechter', 'ist schlecht'),
(2, 'gutes', 'besser', 'ist gut');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `medien`
--

DROP TABLE IF EXISTS `medien`;
CREATE TABLE `medien` (
  `Med_ID` int(11) NOT NULL,
  `Typ` varchar(45) DEFAULT NULL,
  `Dateipfad` varchar(45) DEFAULT NULL,
  `Urheber` varchar(45) DEFAULT NULL,
  `Erscheinungsdatum` varchar(45) DEFAULT NULL,
  `Freischaltung` tinyint(1) DEFAULT NULL,
  `Persönlichkeiten_Pers_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `persoenlichkeiten`
--

DROP TABLE IF EXISTS `persoenlichkeiten`;
CREATE TABLE `persoenlichkeiten` (
  `Pers_ID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Kurzbeschreibung` varchar(255) DEFAULT NULL,
  `Zitat` varchar(45) DEFAULT NULL,
  `LangerText` varchar(255) DEFAULT NULL,
  `BiografischeDaten` varchar(150) DEFAULT NULL,
  `Freischaltung` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Daten für Tabelle `persoenlichkeiten`
--

INSERT INTO `persoenlichkeiten` (`Pers_ID`, `Name`, `Kurzbeschreibung`, `Zitat`, `LangerText`, `BiografischeDaten`, `Freischaltung`) VALUES
(1, 'ich', 'ich halt', 'ich bin der beste', 'was auch immer hier her kommt', 'geboren und lebt noch', 1),
(2, 'du', 'nochwas', 'egal', 'mehr egalität', 'geb und lebend', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `persoenlichkeiten_has_epochen`
--

DROP TABLE IF EXISTS `persoenlichkeiten_has_epochen`;
CREATE TABLE `persoenlichkeiten_has_epochen` (
  `Persoenlichkeiten_Pers_ID` int(11) NOT NULL,
  `Epochen_E_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Daten für Tabelle `persoenlichkeiten_has_epochen`
--

INSERT INTO `persoenlichkeiten_has_epochen` (`Persoenlichkeiten_Pers_ID`, `Epochen_E_ID`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `persoenlichkeiten_has_kategorien`
--

DROP TABLE IF EXISTS `persoenlichkeiten_has_kategorien`;
CREATE TABLE `persoenlichkeiten_has_kategorien` (
  `Persoenlichkeiten_Pers_ID` int(11) NOT NULL,
  `Kategorien_Kat_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Daten für Tabelle `persoenlichkeiten_has_kategorien`
--

INSERT INTO `persoenlichkeiten_has_kategorien` (`Persoenlichkeiten_Pers_ID`, `Kategorien_Kat_ID`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `phinxlog`
--

DROP TABLE IF EXISTS `phinxlog`;
CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `created`, `modified`) VALUES
(1, 'baba', '$2y$10$Ax1EIxW5StxWLGqmUtWxpulIziTEh.QvfGcmjvorrsln5w6n6402e', 'admin', 'baba@lulu', '2017-03-29 17:29:16', '2017-03-29 17:29:16');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `werke`
--

DROP TABLE IF EXISTS `werke`;
CREATE TABLE `werke` (
  `Werk_ID` int(11) NOT NULL,
  `Typ` varchar(45) DEFAULT NULL,
  `Dateipfad` varchar(45) DEFAULT NULL,
  `Urheber` varchar(45) DEFAULT NULL,
  `Erscheinungsdatum` varchar(45) DEFAULT NULL,
  `Freischaltung` tinyint(1) DEFAULT NULL,
  `Geographisch_Graph_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `werke`
--

INSERT INTO `werke` (`Werk_ID`, `Typ`, `Dateipfad`, `Urheber`, `Erscheinungsdatum`, `Freischaltung`, `Geographisch_Graph_ID`) VALUES
(2, 'egal', 'C://Testpfad', 'gerhard', '22222', 1, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `werke_has_persoenlichkeiten`
--

DROP TABLE IF EXISTS `werke_has_persoenlichkeiten`;
CREATE TABLE `werke_has_persoenlichkeiten` (
  `Werke_Werk_ID` int(11) NOT NULL,
  `Persoenlichkeiten_Pers_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Daten für Tabelle `werke_has_persoenlichkeiten`
--

INSERT INTO `werke_has_persoenlichkeiten` (`Werke_Werk_ID`, `Persoenlichkeiten_Pers_ID`) VALUES
(2, 1),
(2, 2);

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
  ADD PRIMARY KEY (`Med_ID`,`Persönlichkeiten_Pers_ID`),
  ADD KEY `fk_Medien_Persönlichkeiten1_idx` (`Persönlichkeiten_Pers_ID`);

--
-- Indizes für die Tabelle `persoenlichkeiten`
--
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
-- Indizes für die Tabelle `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

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
  MODIFY `E_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `geographisch`
--
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
  ADD CONSTRAINT `fk_Medien_Persönlichkeiten1` FOREIGN KEY (`Persönlichkeiten_Pers_ID`) REFERENCES `persoenlichkeiten` (`Pers_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
