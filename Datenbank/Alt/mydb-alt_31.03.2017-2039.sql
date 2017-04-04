-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 31. Mrz 2017 um 15:39
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

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `epochen`
--

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

CREATE TABLE `persoenlichkeiten` (
  `Pers_ID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Kurzbeschreibung` varchar(255) DEFAULT NULL,
  `Zitat` varchar(45) DEFAULT NULL,
  `LangerText` varchar(5000) DEFAULT NULL,
  `BiografischeDaten` varchar(150) DEFAULT NULL,
  `Freischaltung` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Daten für Tabelle `persoenlichkeiten`
--

INSERT INTO `persoenlichkeiten` (`Pers_ID`, `Name`, `Kurzbeschreibung`, `Zitat`, `LangerText`, `BiografischeDaten`, `Freischaltung`) VALUES
(0, 'Ruth Cohn', 'Ruth Charlotte Cohn (* 27. August 1912 in Berlin; † 30. Januar 2010 in Düsseldorf) war die Begründerin der Themenzentrierten Interaktion (TZI) und eine der einflussreichsten Vertreterinnen der humanistischen und der psychodynamischen Psychologie.', '„Zu wissen, daß ich zähle, zu wissen, daß du ', 'Die Jüdin Ruth Cohn entwickelte das humanistische Konzept der „Themenzentrierten\r\nInteraktion“. Während ihres Studiums emigrierte sie bereits 1932 aus dem Nazi-\r\nDeutschland in die Schweiz. Als Studentin machte sie in Zürich bei Medard Boss,\r\ndem späteren', 'Biografische Daten kommen noch, müssen aus dem Text erarbeitet werden.', 1),
(1, 'ich', 'ich halt', 'ich bin der beste', 'was auch immer hier her kommt', 'geboren und lebt noch', 1),
(2, 'du', 'nochwas', 'egal', 'mehr egalität', 'geb und lebend', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `persoenlichkeiten_has_epochen`
--

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

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `created`, `modified`) VALUES
(1, 'baba', '$2y$10$Ax1EIxW5StxWLGqmUtWxpulIziTEh.QvfGcmjvorrsln5w6n6402e', 'admin', 'baba@lulu', '2017-03-29 17:29:16', '2017-03-29 17:29:16');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `werke`
--

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
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
