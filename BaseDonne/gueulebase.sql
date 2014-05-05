-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 12 Septembre 2013 à 08:54
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gueulebase`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE IF NOT EXISTS `groupe` (
  `ID_Match` int(11) NOT NULL,
  `User1` int(11) NOT NULL,
  `User2` int(11) NOT NULL,
  `User3` int(11) NOT NULL,
  `User4` int(11) NOT NULL,
  `User5` int(11) NOT NULL,
  `User6` int(11) NOT NULL,
  `User7` int(11) NOT NULL,
  `User8` int(11) NOT NULL,
  `User9` int(11) NOT NULL,
  `User10` int(11) NOT NULL,
  `User11` int(11) NOT NULL,
  `User12` int(11) NOT NULL,
  `User13` int(11) NOT NULL,
  `User14` int(11) NOT NULL,
  `User15` int(11) NOT NULL,
  `User16` int(11) NOT NULL,
  `User17` int(11) NOT NULL,
  `User18` int(11) NOT NULL,
  `User19` int(11) NOT NULL,
  `User20` int(11) NOT NULL,
  `User21` int(11) NOT NULL,
  `User22` int(11) NOT NULL,
  `User23` int(11) NOT NULL,
  `User24` int(11) NOT NULL,
  `User25` int(11) NOT NULL,
  `User26` int(11) NOT NULL,
  `User27` int(11) NOT NULL,
  `User28` int(11) NOT NULL,
  `User29` int(11) NOT NULL,
  `User30` int(11) NOT NULL,
  `User31` int(11) NOT NULL,
  `User32` int(11) NOT NULL,
  `User33` int(11) NOT NULL,
  `User34` int(11) NOT NULL,
  `User35` int(11) NOT NULL,
  `User36` int(11) NOT NULL,
  `User37` int(11) NOT NULL,
  `User38` int(11) NOT NULL,
  `User39` int(11) NOT NULL,
  `User40` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `ID_Match` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Lieu` varchar(255) NOT NULL,
  `Adversaire` varchar(255) NOT NULL,
  `Info` text NOT NULL,
  PRIMARY KEY (`ID_Match`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `ID_News` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Info` text NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`ID_News`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID_User` int(11) NOT NULL AUTO_INCREMENT,
  `Last_Name` varchar(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `BoolAdmin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_User`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`ID_User`, `Last_Name`, `First_Name`, `Mail`, `Password`, `BoolAdmin`) VALUES
(1, 'Marc', 'Jean', 'aaaaa.fr', '1234', 1),
(2, 'Test', 'test', 'aa@aa.fr', '12345', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
