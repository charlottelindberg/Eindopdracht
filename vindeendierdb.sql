-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 08:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vindeendierdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `asielen`
--

CREATE TABLE `asielen` (
  `AsielenID` int(11) NOT NULL,
  `Naam` varchar(255) NOT NULL,
  `Contactpersoon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommentID` int(11) NOT NULL,
  `FotoID` int(11) NOT NULL,
  `Gebruiker` varchar(25) NOT NULL,
  `Bericht` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CommentID`, `FotoID`, `Gebruiker`, `Bericht`) VALUES
(1, 1, 'Hannah', 'Hallo'),
(2, 1, 'Sonia', 'Wat een mooie jongetje!'),
(3, 3, 'Vicky', 'Ik meld hierbij mijn intresse aan! \r\nContacteer mij op vicky@mail.be of 0490 - 00 00 00'),
(4, 4, 'Teddy', 'Is het een rasechte kip?'),
(5, 4, 'Monica', 'Hoe is haar eieren productie?');

-- --------------------------------------------------------

--
-- Table structure for table `dieren`
--

CREATE TABLE `dieren` (
  `DierenID` int(11) NOT NULL,
  `Leeftijd` varchar(100) NOT NULL,
  `Geslacht` varchar(100) NOT NULL,
  `Gesteriliseerd` tinyint(4) NOT NULL,
  `Ras` varchar(100) NOT NULL,
  `Descriptie` text NOT NULL,
  `Diersoort` int(11) NOT NULL,
  `Asiel` int(11) NOT NULL,
  `Geadopteerd` tinyint(4) NOT NULL,
  `Datum` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dieren`
--

INSERT INTO `dieren` (`DierenID`, `Leeftijd`, `Geslacht`, `Gesteriliseerd`, `Ras`, `Descriptie`, `Diersoort`, `Asiel`, `Geadopteerd`, `Datum`) VALUES
(1, '3 jaar', 'Vrouw', 1, 'Franse Bulldog', 'Vicky werd in beslag genomen. Ze zat in een vieze ren, buiten.\r\n\r\nDeze Franse bulldog van december 2014 mag via het asiel op zoek gaan naar een nieuwe thuis.\r\n\r\nWij hebben Vicky leren kennen als een hevige, energieke, intelligente jongedame. Lekker samen met haar baasje actief bezig zijn, maar ook heerlijk kunnen knuffelen.\r\n\r\nZe is zelfzeker, bedient zichzelf en haalt de hele speelgoeddoos overhoop. Ze ging letterlijk in de speelgoeddoos staan, om op die manier alle spullen gemakkelijk eruit te kunnen halen. Ze blijkt dan ook absoluut zot te zijn van speeltjes: piepers, balletjes, touwen; wat dan ook.\r\n\r\nZe springt erbij in de zetel en gooit zich op haar zij om geknuffeld te worden. Wanneer we de kastdeur openden om er koekjes uit te pakken, zat Vicky in de kast voordat de deuren geopend waren. Ze wil overal bij zijn met haar snuit!\r\n\r\nSpeuren vindt ze ook fantastisch. Ideaal om haar mentaal moe te maken.\r\n\r\nVoor deze dame zoeken we naar mensen zonder andere dieren. Ervaring met de Mechelaar zou ideaal zijn, maar indien er graag actieve mensen zijn die interesse tonen in Vicky, is dat zeker een optie.\r\n', 1, 2, 1, '2020-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `diersoort`
--

CREATE TABLE `diersoort` (
  `DiersoortID` int(11) NOT NULL,
  `Type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diersoort`
--

INSERT INTO `diersoort` (`DiersoortID`, `Type`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `FotoID` int(11) NOT NULL,
  `Bestandsnaam` varchar(100) NOT NULL,
  `Dier_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`FotoID`, `Bestandsnaam`, `Dier_ID`) VALUES
(1, 'hond01.jpg', 1),
(3, 'konijn01.jpg', 3),
(4, 'vogel01.jpg', 4),
(5, 'kat01.jpg', 2),
(6, 'kat02.jpg', 2),
(7, 'kat03.jpg', 2),
(8, 'hond02.jpg', 1),
(9, 'hond03.jpg', 1),
(10, 'rat01.jpg', 4),
(11, 'hamster01.jpg', 4),
(12, 'konijn02.jpg', 3),
(13, 'konijn03.jpg', 3),
(14, 'paard01.jpg', 4),
(15, 'paard02.jpg', 4),
(16, 'paard03.jpg', 4),
(17, 'vogel02.jpg', 4),
(18, 'vogel03.jpg', 4),
(19, 'slang01.jpg', 4),
(20, 'slang02.jpg', 4),
(21, 'schildpad01.jpg', 4),
(22, 'schildpad02.jpg', 4),
(23, 'varken01.jpg', 4),
(24, 'schaap01.jpg', 4),
(25, 'geit01.jpg', 4),
(26, 'alpaca01.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `GebruikerID` int(11) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Naam` varchar(255) NOT NULL,
  `Adres` varchar(255) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `GebruikerFoto` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`GebruikerID`, `Username`, `Password`, `Naam`, `Adres`, `Status`, `GebruikerFoto`) VALUES
(1, 'admin', 'admin', 'Charlotte Lindberg', 'Pleinstraat 77, 3001 Heverlee', 1, 'dimi.png'),
(2, 'knaagtandje', 'pwd', 'Het Knaagtandje', 'Bosstraat 7, 2342, Stekene', 1, '003-Steamboat Willie.jpg'),
(3, 'margodierenarts', 'pwd', 'Margo La Croix', 'De Vaartkom, 3000, Leuven', 4, 'concain3.JPG'),
(4, 'rockwilder', 'pwd', 'Kim Debecker', 'Eenmeilaan 7, 3010, Kessel-Lo', 3, '98108.jpg'),
(5, 'pootjesenpelsje', 'pwd', 'Pootjes en Pelsjes', 'Bosstraat 7, 2342, Stekene', 2, '611627.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asielen`
--
ALTER TABLE `asielen`
  ADD PRIMARY KEY (`AsielenID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentID`);

--
-- Indexes for table `dieren`
--
ALTER TABLE `dieren`
  ADD PRIMARY KEY (`DierenID`);

--
-- Indexes for table `diersoort`
--
ALTER TABLE `diersoort`
  ADD PRIMARY KEY (`DiersoortID`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`FotoID`);

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`GebruikerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asielen`
--
ALTER TABLE `asielen`
  MODIFY `AsielenID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dieren`
--
ALTER TABLE `dieren`
  MODIFY `DierenID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `diersoort`
--
ALTER TABLE `diersoort`
  MODIFY `DiersoortID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `FotoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `GebruikerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
