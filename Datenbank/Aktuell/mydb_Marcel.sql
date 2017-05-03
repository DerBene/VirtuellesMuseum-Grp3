-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 03. Mai 2017 um 16:08
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

--
-- Daten für Tabelle `epochen`
--

INSERT INTO `epochen` (`E_ID`, `name`, `Start`, `Ende`) VALUES
(1, 'Altertum', '-4500', '500'),
(2, 'Mittelalter', '500', '1500'),
(3, 'Frühzeit', '1500', '1700'),
(4, 'Nachzeit', '1700', '1800'),
(5, '19. Jahrhundert', '1800', '1900'),
(6, '20. Jahrhundert', '1900', '2000'),
(7, '21. Jahrhundert', '2000', '2100');

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
(5, 1),
(5, 3),
(5, 5),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(7, 5);

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
(1, 'Hauptstadt', 'Berlin', 'Deutschland'),
(2, '0711', 'Stuttgart', 'Deutschland'),
(3, 'ist halt Freiburg', 'Freiburg', 'Deutschland');

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
(1, 'Praxisklassiker/in', NULL, NULL),
(2, 'Adressaten/in', NULL, NULL),
(3, 'Wissenschaft', NULL, NULL),
(4, 'Professionalisierung', NULL, NULL),
(5, 'Handlungsfelder (Einrichtungen)', NULL, NULL);

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

--
-- Daten für Tabelle `medien`
--

INSERT INTO `medien` (`Med_ID`, `Typ`, `Dateipfad`, `Urheber`, `Erscheinungsdatum`, `Freischaltung`, `Persoenlichkeiten_Pers_ID`) VALUES
(1, 'Bild, jpg', 'img\\ruth_cohn\\cohn_kb_26_18x24.jpg', 'Walter Schels', '08.04.2010', 1, 1),
(2, 'Bild, jpg', 'img\\ruth_cohn\\KB_Frontal_lachend.jpg', 'Walter Schels', '', 1, 1),
(3, 'Bild, png', 'img\\ruth_cohn\\Ruth_Cohn_Plakat.png', 'Walter Schels', '', 1, 1),
(4, 'Bild, jpg', 'img\\michael_winkler\\IMG_3026.JPG', 'Walter Schels', '30.05.2008', 1, 2),
(5, 'Bild, png', 'img\\michael_winkler\\Winkler.png', 'Walter Schels', '', 1, 2),
(6, 'Bild, png', 'img\\maria_montessori\\Montessori.png', 'Walter Schels', '', 1, 3),
(7, 'Bild, jpg', 'img\\bertha_von_pappenheim\\Pappenheim1.jpg', 'Walter Schels', '', 1, 4),
(8, 'Bild, jpg', 'img\\bertha_von_pappenheim\\Pappenheim3.jpg', 'Walter Schels', '', 1, 4);

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

--
-- Daten für Tabelle `persoenlichkeiten`
--

INSERT INTO `persoenlichkeiten` (`Pers_ID`, `Name`, `Kurzbeschreibung`, `Zitat`, `LangerText`, `BiografischeDaten`, `Freischaltung`) VALUES
(1, 'Ruth Cohn', 'Ruth Charlotte Cohn (* 27. August 1912 in Berlin; † 30. Januar 2010 in Düsseldorf) war die Begründerin der Themenzentrierten Interaktion (TZI) und eine der einflussreichsten Vertreterinnen der humanistischen und der psychodynamischen Psychologie.', '„Zu wissen, daß ich zähle, zu wissen, daß du ', 'Die Jüdin Ruth Cohn entwickelte das humanistische Konzept der „Themenzentrierten\r\nInteraktion“. Während ihres Studiums emigrierte sie bereits 1932 aus dem Nazi-\r\nDeutschland in die Schweiz. Als Studentin machte sie in Zürich bei Medard Boss,\r\ndem späteren Begründer der Daseinsanalyse, eine Lehranalyse. „Dieses Glück\r\nerlebte ich als Verpflichtung. Meine Erfahrungen und Erkenntnisse auf der\r\npsychoanalytischen Coach gaben mir Hoffnung und Glauben an humane Lebensund\r\nErziehungsmöglichkeiten“ (Cohn 1975: 7). Da sie in der Schweiz nicht bleiben\r\nkonnte, emigrierte sie mit ihrem Mann und der Tochter nach New York. Dort trennte\r\nsich das Paar. Während sie als Therapeutin arbeitete, um den Lebensunterhalt für\r\nsich und ihre mittlerweile zwei Kinder zu verdienen, fand sie Zugang zu den\r\ngruppen-, gestalt-, und familientherapeutischen Entwicklungen der humanistischen\r\nPsychologie. Ihre TZI gehörte in den 1980er Jahren zum festen Bestandteil der\r\nsozialpädagogischen Ausbildung in der Lehre und der berufspraktischen\r\nWeiterbildung.\r\n--\r\nIn den 1960er Jahren gründete sie das Institut für „Lebendiges Lernen – WILL“.\r\n1974 zog sie in die Schweiz und arbeitete als Supervisorin an der\r\nreformpädagogischen „Ecole d\'Humanité“. TZI verbreitete sich vor allem im\r\ndeutschsprachigen Europa als pädagogisches Lern- und Gruppenkonzept. 2002\r\nwurde WILL Europa zum „Ruth Cohn Institut“ umbenannt, das bis heute die TZIWeiterbildung\r\norganisiert. TZI bahnte einer humanisierenden Pädagogik den Weg,\r\nweil im Nachkriegsdeutschland der 1970er Jahre viele Menschen mit der\r\nAufarbeitung der moralischen Schuld ihrer Familien während der NS-Diktatur\r\nbeschäftigt waren.\r\nDas Konzept der TZI basiert auf drei Axiomen und zwei grundlegenden\r\nHandlungsorientierungen, Postulaten. Die Faktoren ES, ICH und WIR gelten als\r\ngleichbedeutende Perspektiven, die vom Globe beeinflusst werden.', 'Biografische Daten kommen noch, müssen aus dem Text erarbeitet werden.', 1),
(2, 'Michael Winkler', '*1953 in Wien', '„der Streit um die Sozialpädagogik und ihr angemessenes begriffliches Verständnis\r\nist nahezu so alt wie der Terminus selbst und die Beschäftigung mit dem Thema“\r\n(Winkler 1988: 11)', 'Michael Winkler hatte in seiner Theorie der Sozialpädagogik 1988 die\r\nSchwierigkeiten aufgezeigt, die bis heute gelten, den Begriff, den Gegenstand, die\r\nVoraussetzungen und die Wirkung sozialpädagogischen Handelns\r\nwissenschaftstheoretisch zu bestimmen. Die moderne sozialpädagogische\r\nTheoriebildung ist auf Wissenschaftsdiskurse verwiesen und soll, so Winkler, der\r\nTradition ihrer geisteswissenschaftlichen Grundlegung weiterverfolgen. Winkler geht\r\ndavon aus, dass Sozialpädagogik Pädagogik gewissermaßen auf die Probe stellt.\r\nSozialpädagogik ist für ihn der Versuch, im pädagogischen Modus von Aneignung\r\nund Vermittlung Sicherheit zu bekommen, mit den Anforderungen dieser Welt zu\r\nRecht zu kommen. Die praktische Sozialpädagogik agiert jenseits des schulischen\r\nUnterrichts auf die Lebensprobleme und Probleme, die Menschen mit ihrem Leben\r\nhaben. Die theoretische Sozialpädagogik trägt, so Winkler, dazu bei, dass die Praxis\r\nihren Gegenstand nicht aus den Augen verliert. Um zu wissen, warum und wozu\r\nprofessionelle Sozialpädagogen und Sozialpädagoginnen handeln, soll ja nicht nur\r\nvom gesellschaftlichen Bedarf her bestimmt sein. Zur Professionalisierung gehört die\r\nWissenschaft, die Erklärung bietet und gesellschaftliche Wirklichkeit deutet. Hierzu ist\r\neine Rückbesinnung auf Traditionen, beispielsweise die Klassiker, hilfreich.\r\nMichael Winkler ist Universitätsprofessor für Erziehungswissenschaft und\r\nSozialpädagogik an der Friedrich-Schiller-Universität Jena.', 'kommen noch', 1),
(3, 'Maria Montessori', '* 31.08.1870 Chiaravalle † 06. 05.1952 in Noordwijk aan Zee', '„Hilf mir, es selbst zu tun!“ (Montessori, Maria 2007)', 'Maria Montessori wurde am 31.8.1870 in Chiaravalle bei Ancona in Italien geboren.\r\nIhr Vater war in der Tabakindustrie tätig, und ihre Mutter war Hausfrau. Die Familie\r\nzog nach Rom. Ihre Eltern wünschten, dass sie Lehrerin wird, doch Maria wollte\r\nÄrztin werden. Als eine der ersten Frauen studierte sie ab 1890 in Rom\r\nNaturwissenschaften und promovierte 1896 im Fachgebiet Psychiatrie. 1904\r\nhabilitierte sie sich im Fach Pädagogische Anthropologie. 1898 brachte sie heimlich\r\nihren unehelichen Sohn Mario zur Welt und gab ihn freiwillig in eine Pflegefamilie,\r\ndenn ihr drohte ansonsten der Verlust des Kindes, soziale Ächtung und Armut. So\r\naber hielt sie Kontakt zu ihm. Als Mario 14 Jahre alt war, lebten sie zusammen in\r\nBarcelona. Fortan war Mario ihr fester Begleiter, wenn sie in Europa, Südamerika\r\nund Indien unterwegs war, um Vorträge und Kurse in Montessori-Pädagogik\r\nanzubieten. 1936 wechselten beide den Wohnort. Um dem spanischen Bürgerkrieg\r\nzu entkomme, zogen sie nach Amsterdam. Der Ausbruch des Zweiten Weltkrieges\r\ntrug dazu bei, dass sie Indien nicht verlassen konnten. Maria Montessori kehrte erst\r\n1946 nach Europa zurück und lebte bis zu ihrem Tode in Noordwijk aan Zee in den\r\nNiederlanden.\r\nWeltweit gelang es Maria Montessori pädagogische Institutionen zu iniitiieren und der\r\nHeil-, Schul-, und Sozialpädagogik neue Impulse zu geben. Sie bildete\r\nErzieherinnen und Lehrer und Lehrerinnen aus. 1914 bot sie ihren ersten\r\ninternationalen Ausbildungskurs an. Im Armenviertel San Lorenzo in Rom war es ihr\r\nab 1907 gelungen, durch die Betreuung eines Projektes die kindliche Entwicklung\r\nnäher zu erforschen. In dem neugegründeten Kinderhaus Casa Bambini wurden\r\nbehinderte und verwahrloste Kinder im schulfähigen Alter betreut und mithilfe von\r\nbesonderen Materialien in ihrer sinnlichen und geistigen Entwicklung gefördert. Die\r\nvon Montessori eingesetzten Arbeitsmaterialen trugen dazu bei, dass die Kinder\r\nEntwicklungsfortschritte machten, und ihre Methode Beachtung fand. 1923 wandte\r\nsie sich an Mussolini, ihre Erziehungsmethode in italienischen Schulen zuzulassen.\r\nDazu gründete sie auch den Verein „Opera Montessori“. Ihre Gedanken über\r\nPädagogik sollten sich verbreiten. Mussolini war 1924 zum Ehrenvorsitzenden des\r\nVereins ernannt worden. Ihr späteres Engagement für Friedenserziehung führte zum\r\nBruch mit dem Diktator. Ab 1932 wurden Mario und seine Mutter durch die\r\nitalienische Geheimpolizei überwacht.', 'wie gesagt, die kommen noch', 1),
(4, 'Bertha Pappenheim', '*27.02.1859 in Wien †28.05.1936 in Neu-Isenburg', '\"Wir Frauen aller Kulturländer, wir wehren uns heute dagegen, vor dem Gesetz mitIdioten und Kindern gleichgestellt zu werden, weil wir die Wirkung dieserZurücksetzung als Hemmschuh unserer Entwicklung erkennen gelernt haben.\"(Bertha Pappenheim 1907)', 'Bertha Pappenheim wurde als jüdische Frauenrechtlerin im Kampf gegenMädchenhandel und Prostitution bekannt. Sie wuchs in einer reichen jüdischenFamilie des Wiener Großbürgertums auf. Soziale Arbeit ermöglichte BerthaPappenheim das Ideal der „sozialen Mütterlichkeit“ als weibliche Tugend in denDienst der Öffentlichkeit zu stellen. In ihren Reden und als Leiterin des Heims für„gefährdete Mädchen“ setzte sie sich für jüdische schwangere Mädchen und ledigeMütter mit Kindern in Neu-Isenburg bei Frankfurt ein. Das Heim war zugleich Zufluchtund Ausbildungsstätte. 1942 wurden alle Bewohnerinnen nach Auschwitz deportiert.Als erste Vorsitzende des nationalen jüdischen Frauenverbandes (JFB), der 1904beim International Council of Women in Berlin gegründet wurde, gab sie zu Beginndes 20. Jahrhunderts den entscheidenden Anstoß zur Gründung der„Zentralwohlfahrtsstelle der deutschen Juden“ (ZWST).Bertha Pappenheim wurde weltberühmt als Anna O. Im Alter von 21 Jahrenerkrankte sie an Hysterie, die der Wiener Psychiater und Neurologe Josef Breuerbehandelte. Ihr Fall wurde als „Fall von Hysterie“ 1893 von Sigmund Freud und JosefBreuer publiziert. Die Geschichte der Psychoanalyse beginnt mit ihrer „talking cure“.Ihre zweijährige Therapie wurde 1895 in den Studien über Hysterie beschrieben.Ihre Sprachstörungen, Pappenheim redete zeitweise nur Englisch, linderten sich, alssie durch das Erzählen auch an ihre Erinnerung an Erlebnisse herankam. Freuderarbeitete mithilfe ihrer Krankengeschichte sein Konzept der „Übertragung“ underkannte die katharsische Wirkung der Psychosnalyse. Berta Pappenheim verhieltsich gegenüber der Psychoanalyse zeitlebens distanziert. Offen ist, ob diepsychoanalytische Behandlung ihre Heilung bewirkte oder eine weiterepsychiatrische Behandlung dazu beitrug.', 'sdokghoqeighdfgegeg112', 1),
(5, 'Max Gemmeke', 'Geiler Typ', 'Kiffen ist das geilste!', 'bla', 'schon lange tod', 0),
(6, 'Nina Lumpp', 'Hellseher', 'ich bin die geilste', 'Bla', 'Bla', 0);

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
(1, 6),
(1, 7),
(2, 6),
(2, 7),
(3, 5),
(3, 6),
(4, 5),
(4, 6);

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
(1, 4),
(1, 5),
(2, 2),
(2, 3),
(2, 5),
(3, 1),
(3, 4),
(4, 2),
(4, 4);

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
  `modified` datetime DEFAULT NULL,
  `resetkey` varchar(255) DEFAULT NULL,
  `emailverificated` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `created`, `modified`, `resetkey`, `emailverificated`) VALUES
(1, 'baba', '$2y$10$Ax1EIxW5StxWLGqmUtWxpulIziTEh.QvfGcmjvorrsln5w6n6402e', 'admin', 'baba@lulu', '2017-03-29 17:29:16', '2017-03-29 17:29:16', NULL, 1),
(47, 'test1', '$2y$10$TcFJju2Etmhv.VJWndwsde8mN1udXQ977XYiloc/0ZGd5RO93Tc4e', 'admin', 'test1@test.de', '2017-05-02 14:23:04', '2017-05-03 10:53:37', '$2y$10$oFFuVOVnKSHtVeD1kNKp.uuiXSFywTenmaXabCT6k1FZHQ7NgPioa', NULL),
(71, 'Peter Heinz', '$2y$10$1GvuDIdYSmdBXvawvV.4AO4DWTMA3tPH/R8ppOa4igYa5ccMRhHnO', 'admin', 'peter@heinz.de', '2017-05-03 09:07:23', '2017-05-03 09:08:35', '$2y$10$TkFaOe91N51nqsUjX3vZyuBxhuWZ4VCNlcxuE7jt/UivSGUD4feTi', 1),
(72, 'Tristan', '$2y$10$dnEzUbhCbBvT79sFtxojz.uBQmVea/1vcTxx.ZlodQavOpJsyU1cu', 'admin', 'tristan@vernus.de', '2017-05-03 09:10:58', '2017-05-03 09:11:24', NULL, 1),
(74, 'Nina Lumpp', '$2y$10$viv1h6zNrRPhHIPbL2jyzu.i0mtgEBQ5BMPGrr.xlppv667OrvVa.', 'admin', 'nina.lumpp@web.de', '2017-05-03 11:11:35', '2017-05-03 11:37:05', NULL, 1),
(75, 'Christina Fischer', '$2y$10$OQ8GGrf8.QvVmwrfqGeNs.kilDXcgvqPGtpyrrdzSr0uQ4nhl7vr6', 'admin', 'chris@test.de', '2017-05-03 11:12:22', '2017-05-03 11:15:29', '$2y$10$D/pHCCE1.g2ALg/LG8txvezqOTuCU7MW2CkHQIgBsCUndEEuYKVTe', 1),
(76, 'Peter Husenbeth', '$2y$10$X1eeV6a9Fp1..mUaJnAWI.AdHAICBTsRkE8p1EvxPmDPzhW3VwvxW', 'admin', 'peter@test.de', '2017-05-03 11:24:01', '2017-05-03 11:26:34', '$2y$10$m6bBTRURdHkAc0Lwp6AVweRIdM9iAEAXJlrkqQheLZ9gaR6jSGuH6', 0),
(77, 'Max', '$2y$10$2Ojck8.ivQNYA7dBM9sZBOFpbkZKHXclNFCz.KgBsBeg5komP5l1.', 'admin', 'max@test.de', '2017-05-03 13:25:30', '2017-05-03 13:35:41', '$2y$10$McJh4tASml.ZKsXivB6IwOrwtoTQ/vHvS/XEV1anjhi2GrSlP28s2', 1),
(78, 'Marcel Stamm', '$2y$10$iEcGtT/w3bsdeBuPFOGICOV182mtEr6mGlfQsAxR8t3cqKqOpbYga', 'admin', 'stamm.uni@gmail.com', '2017-05-03 14:00:22', '2017-05-03 14:02:52', NULL, 1);

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

--
-- Daten für Tabelle `werke`
--

INSERT INTO `werke` (`Werk_ID`, `Titel`, `Typ`, `Dateipfad`, `Urheber`, `Erscheinungsdatum`, `Freischaltung`, `Geographisch_Graph_ID`) VALUES
(1, 'Von der Psychoanalyse zur Themenzentrierten Interaktion', 'Buch', '/isnich', 'Ruth Cohn', '1975', 1, 2),
(2, 'Gelebte Geschichte der Psychotherapie. Zwei Perspektiven', 'Buch', '/isnich', 'Ruth Cohn', '1991', 1, 2),
(3, 'Eine Theorie der Sozialpädagogik', 'Buch', '/isnich', 'Michael Winkler', '1988', 1, 2),
(4, 'Kritik der Pädagogik. Der Sinn der Erziehung', 'Buch', '/isnich', 'Michael Winkler', '2006', 1, 2),
(5, 'Kinder sind anders', 'Buch', '/isnich', 'Maria Montessori', '1993', 1, 2),
(6, 'Die Entdeckung des Kindes', 'Buch', '/isnich', 'Maria Montessori', '2007', 1, 3),
(7, 'Sisyphus: Gegen den Mädchenhandel - Galizien', 'Buch', '/isnich', 'Bertha Pappenheim', '1907', 1, 3);

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
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(5, 3),
(6, 3),
(7, 4);

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
--
-- AUTO_INCREMENT für Tabelle `geographisch`
--
ALTER TABLE `geographisch`
  MODIFY `Graph_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `kategorien`
--
ALTER TABLE `kategorien`
  MODIFY `Kat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `medien`
--
ALTER TABLE `medien`
  MODIFY `Med_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT für Tabelle `persoenlichkeiten`
--
ALTER TABLE `persoenlichkeiten`
  MODIFY `Pers_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT für Tabelle `werke`
--
ALTER TABLE `werke`
  MODIFY `Werk_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
