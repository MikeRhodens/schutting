-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 02 dec 2015 om 19:20
-- Serverversie: 5.6.21
-- PHP-versie: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `schutting`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
`ID` int(11) NOT NULL,
  `hitNr` int(11) NOT NULL,
  `name` text NOT NULL,
  `artist` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `video` text NOT NULL,
  `day` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `songs`
--

INSERT INTO `songs` (`ID`, `hitNr`, `name`, `artist`, `description`, `img`, `video`, `day`) VALUES
(1, 1, ' Gilbert BÃ©caud ', ' Nathalie ', '', '', '', 24),
(2, 2, ' Michel Fugain ', ' Une belle histoire ', '', '', '', 24),
(3, 3, ' Jacques Dutronc ', ' Il est cinq heures Paris sâ€™Ã©veille ', '', '', '', 24),
(4, 4, ' Les Poppys ', ' Non non rien nâ€™a changÃ© ', '', '', '', 24),
(5, 5, ' Edith Piaf ', ' Non je ne regrette rien ', '', '', '', 23),
(6, 6, ' Jacques Brel ', ' Ne me quitte pas ', '', '', '', 23),
(7, 7, ' GÃ©rard Lenorman ', ' La ballade des gens heureux ', '', '', '', 23),
(8, 8, ' FranÃ§oise Hardy ', ' Tous les garÃ§ons et les filles ', '', '', '', 23),
(9, 9, ' Khaled ', ' Aicha ', '', '', '', 22),
(10, 10, ' Michel Sardou ', ' Les lacs du Connemara ', '', '', '', 22),
(11, 11, ' Michel Delpech ', ' Pour un flirt ', '', '', '', 22),
(12, 12, ' Yves Montand ', ' La bicyclette ', '', '', '', 22),
(13, 13, ' Alderliefste & Liesbeth List & Ramses Shaffy ', ' Laat me/Vivre ', '', '', '', 21),
(14, 14, ' Zaz ', ' Je veux ', '', '', '', 21),
(15, 15, ' Julien Clerc ', ' This melody ', '', '', '', 21),
(16, 16, ' Vicky Leandros ', ' AprÃ¨s toi ', '', '', '', 21),
(17, 17, ' Serge Gainsbourg & Jane Birkin ', ' Je tâ€™aimeâ€¦ moi non plus ', '', '', '', 20),
(18, 18, ' Michel Fugain ', ' Le printemps ', '', '', '', 20),
(19, 19, ' Dalida ', ' Buenas noches mi amor ', '', '', '', 20),
(20, 20, ' France Gall ', ' PoupÃ©e de cire, poupÃ©e de son ', '', '', '', 20),
(21, 21, ' Jacques Brel ', ' Amsterdam ', '', '', '', 19),
(22, 22, ' Julien Clerc ', ' HÃ©lÃ¨ne ', '', '', '', 19),
(23, 23, ' Plastic Bertrand ', ' Ã‡a plane pour moi ', '', '', '', 19),
(24, 24, ' Jacques Brel ', ' Le plat pays ', '', '', '', 19),
(25, 25, ' Patrick Bruel ', ' Casser la voix (live) ', '', '', '', 18),
(26, 26, ' AlizÃ©e ', ' Moiâ€¦ Lolita ', '', '', '', 18),
(27, 27, ' Jean Ferrat ', ' La montagne ', '', '', '', 18),
(28, 28, ' Johnny Hallyday ', ' Pour moi la vie va commenÃ§er ', '', '', '', 18),
(29, 29, ' Charles Trenet ', ' La mer ', '', '', '', 17),
(30, 30, ' Kate & Anne McGarrigle ', ' Complainte pour Ste. CathÃ©rine ', '', '', '', 17),
(31, 31, ' Adamo ', ' Vous permettez monsieur ', '', '', '', 17),
(32, 32, ' France Gall ', ' Ella elle lâ€™a ', '', '', '', 17),
(33, 33, ' Frida Boccara ', ' Cent mille chansons ', '', '', '', 16),
(34, 34, ' Dalida & Alain Delon ', ' Paroles paroles ', '', '', '', 16),
(35, 35, ' Dalida ', ' Gigi lâ€™amoroso ', '', '', '', 16),
(36, 36, ' Charles Aznavour ', ' La bohÃ¨me ', '', '', '', 16),
(37, 37, ' Georges Moustaki ', ' Le mÃ©tÃ¨que ', '', '', '', 15),
(38, 38, ' Joe Dassin ', ' Les Champs', '', '', '', 0),
(39, 39, ' La Caravane Passe ', ' Salad tomate oignon ', '', '', '', 15),
(40, 40, ' Noir DÃ©sir ', ' Le vent nous portera ', '', '', '', 15),
(41, 41, ' In', 'grid ', '', '', '', 0),
(42, 42, ' Vanessa Paradis ', ' Joe le taxi ', '', '', '', 14),
(43, 43, ' Julien Clerc ', ' Venise ', '', '', '', 14),
(44, 44, ' GÃ©rard Lenorman ', ' Voici les clÃ©s ', '', '', '', 14),
(45, 45, ' Desireless ', ' Voyage voyage ', '', '', '', 13),
(46, 46, ' Edith Piaf ', ' La vie en rose ', '', '', '', 13),
(47, 47, ' Yves Montand ', ' Les feuilles mortes ', '', '', '', 13),
(48, 48, ' Wende ', ' Chaque fois ', '', '', '', 13),
(49, 49, ' Adamo ', ' Tombe la neige ', '', '', '', 12),
(50, 50, ' Joe Dassin ', ' Lâ€™Ã©tÃ© Indien ', '', '', '', 12),
(51, 51, ' Jacques Brel ', ' Marieke ', '', '', '', 12),
(52, 52, ' GÃ©rard Lenorman ', ' Si jâ€™Ã©tais prÃ©sident ', '', '', '', 12),
(53, 53, ' Grace Jones ', ' La vie en rose ', '', '', '', 11),
(54, 54, ' C. JÃ©rÃ´me ', ' Câ€™est moi ', '', '', '', 11),
(55, 55, ' Stromae ', ' Alors on danse ', '', '', '', 11),
(56, 56, ' Charles Aznavour ', ' La mamma ', '', '', '', 11),
(57, 57, ' Julien Clerc ', ' Ã‡e nâ€™est rien ', '', '', '', 10),
(58, 58, ' Gilbert BÃ©caud ', ' Et maintenant ', '', '', '', 10),
(59, 59, ' Dave ', ' Dansez maintenant ', '', '', '', 10),
(60, 60, ' Julien Clerc ', ' Si on chantait ', '', '', '', 10),
(61, 61, ' Lucille Starr Julien Clerc ', ' Si on chantait ', '', '', '', 9),
(62, 62, ' Mort Shuman ', ' Le lac majeur ', '', '', '', 9),
(63, 63, ' Edith Piaf ', ' Milord ', '', '', '', 9),
(64, 63, ' Kate Ryan ', ' DÃ©senchantÃ©e ', '', '', '', 9),
(65, 65, ' Adamo ', ' Câ€™est ma vie ', '', '', '', 9),
(66, 66, ' Manau ', ' La tribu de Dana ', '', '', '', 8),
(67, 67, ' Sandra Kim ', ' Jâ€™aime la vie ', '', '', '', 8),
(68, 68, ' Charles Aznavour ', ' Mes emmerdes ', '', '', '', 8),
(69, 69, ' Yves Duteil ', ' Prendre un enfant ', '', '', '', 8),
(70, 70, ' BZN ', ' Mon amour ', '', '', '', 8),
(71, 71, ' Carla Bruni ', ' Quelquâ€™un mâ€™a dit ', '', '', '', 7),
(72, 72, ' Adamo ', ' Inch Allah ', '', '', '', 7),
(73, 73, ' Lio ', ' Amoureux solitaires ', '', '', '', 7),
(74, 74, ' Georges Brassens ', ' Brave Margot ', '', '', '', 7),
(75, 75, ' Hughes Aufray ', ' Adieu Monsieur le professeur ', '', '', '', 7),
(76, 76, ' France Gall ', ' Il jouait du piano debout ', '', '', '', 6),
(77, 77, ' Catherine Ferry ', ' 1 2 3 ', '', '', '', 6),
(78, 78, ' Jacques Brel ', ' Bruxelles ', '', '', '', 6),
(79, 79, ' Julien Clerc ', ' Ma prÃ©fÃ©rence ', '', '', '', 6),
(80, 80, ' Zouk Machine ', ' Maldon ', '', '', '', 6),
(81, 81, ' Zaz ', ' Le long de la route ', '', '', '', 5),
(82, 82, ' Dalida ', ' Jâ€™attendrai ', '', '', '', 5),
(83, 83, ' Les Poppys ', ' Isabelle je tâ€™aime ', '', '', '', 5),
(84, 84, ' Patricia Kaas ', ' Mademoiselle chante le blues ', '', '', '', 5),
(85, 85, ' Anne', 'Marie David ', '', '', '', 0),
(86, 86, ' Edith Piaf ', ' Sous le ciel de Paris ', '', '', '', 4),
(87, 87, ' Indochine ', ' Jâ€™ai demandÃ© Ã  la lune ', '', '', '', 4),
(88, 88, ' Charles Aznavour ', ' Jâ€™ai vu Paris ', '', '', '', 4),
(89, 89, ' FranÃ§oise Hardy ', ' Comment te dire adieu ', '', '', '', 4),
(90, 90, ' Adamo ', ' Les filles du bord de mer ', '', '', '', 4),
(91, 91, ' Captain Gumbo ', ' Allons Ã  Lafayette ', '', '', '', 3),
(92, 92, ' CamÃ©lia Jordana ', ' Non non non ', '', '', '', 3),
(93, 93, ' Ben lâ€™Oncle Soul ', ' (Je suis un) Soulman ', '', '', '', 3),
(94, 94, ' Jo Lemaire & Flouze ', ' Je suis venue te dire que je mâ€™en vais ', '', '', '', 3),
(95, 95, ' Elsa ', ' Tâ€™en va pas ', '', '', '', 3),
(96, 96, ' Michel Fugain ', ' Ring et ding ', '', '', '', 2),
(97, 97, ' Cast RomÃ©o & Juliette ', ' Les rois du monde ', '', '', '', 2),
(98, 98, ' Michel Sardou ', ' Une fille aux jeux clairs ', '', '', '', 2),
(99, 99, ' Dave ', ' Du cÃ´tÃ© de chez Swann ', '', '', '', 2),
(100, 100, ' Christophe MaÃ© ', ' Dingue dingue dingue ', '', '', '', 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `songs`
--
ALTER TABLE `songs`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `songs`
--
ALTER TABLE `songs`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
