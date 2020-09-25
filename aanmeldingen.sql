-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 11 sep 2020 om 10:49
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `aanmeldingen`
--
CREATE DATABASE IF NOT EXISTS `aanmeldingen` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aanmeldingen`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `aanmelden`
--

CREATE TABLE IF NOT EXISTS `aanmelden` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Aanwezig` int(1) NOT NULL,
  `Aantal` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `aanmelden`
--

INSERT INTO `aanmelden` (`ID`, `Naam`, `Mail`, `Aanwezig`, `Aantal`) VALUES
(1, 'Ruben', 'ruben@email.com', 1, 420);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
