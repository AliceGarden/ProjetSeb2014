-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 19 Mai 2014 à 15:45
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `see_eleve`
--
CREATE DATABASE IF NOT EXISTS `see_eleve` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `see_eleve`;

-- --------------------------------------------------------

--
-- Structure de la table `connection`
--

CREATE TABLE IF NOT EXISTS `connection` (
  `id_pseudo` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(25) NOT NULL,
  `password` varchar(250) NOT NULL,
  `ID_Parent` int(11) NOT NULL,
  `Admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_pseudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `connection`
--

INSERT INTO `connection` (`id_pseudo`, `pseudo`, `password`, `ID_Parent`, `Admin`) VALUES
(1, 'Alice', '750bbdfe3f18aaee26b7155bbfdf0087', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE IF NOT EXISTS `eleves` (
  `ID_Eleve` int(11) NOT NULL AUTO_INCREMENT,
  `ID_NATIONAL` varchar(15) NOT NULL,
  `NOM` varchar(50) NOT NULL,
  `PRENOM` varchar(50) DEFAULT NULL,
  `PRENOM2` varchar(50) DEFAULT NULL,
  `PRENOM3` varchar(50) DEFAULT NULL,
  `PRENOM4` varchar(50) DEFAULT NULL,
  `DATE_NAISS` varchar(10) DEFAULT NULL,
  `DOUBLEMENT` tinyint(1) DEFAULT NULL,
  `CODE_PAYS` int(11) DEFAULT NULL,
  `ACCEPTE_SMS` tinyint(1) DEFAULT NULL,
  `DATE_MODIFICATION` date DEFAULT NULL,
  `CODE_REGIME` int(11) DEFAULT NULL,
  `DATE_ENTREE` date DEFAULT NULL,
  `VILLE_NAISS` varchar(250) DEFAULT NULL,
  `CODE_SEXE` int(11) DEFAULT NULL,
  `CODE_PAYS_NAT` int(11) DEFAULT NULL,
  `CODE_MEF` int(11) DEFAULT NULL,
  `CODE_DEPARTEMENT_NAISS` int(11) DEFAULT NULL,
  `CODE_COMMUNE_INSEE_NAISS` int(11) DEFAULT NULL,
  `ADHESION_TRANSPORT` tinyint(1) DEFAULT NULL,
  `CODE_PROVENANCE` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Eleve`),
  UNIQUE KEY `ID_NATIONAL` (`ID_NATIONAL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `eleves`
--

INSERT INTO `eleves` (`ID_Eleve`, `ID_NATIONAL`, `NOM`, `PRENOM`, `PRENOM2`, `PRENOM3`, `PRENOM4`, `DATE_NAISS`, `DOUBLEMENT`, `CODE_PAYS`, `ACCEPTE_SMS`, `DATE_MODIFICATION`, `CODE_REGIME`, `DATE_ENTREE`, `VILLE_NAISS`, `CODE_SEXE`, `CODE_PAYS_NAT`, `CODE_MEF`, `CODE_DEPARTEMENT_NAISS`, `CODE_COMMUNE_INSEE_NAISS`, `ADHESION_TRANSPORT`, `CODE_PROVENANCE`) VALUES
(1, '0408024341U', 'VOISIN', 'Dorian', 'Charles', NULL, NULL, '06/04/1997', 0, 100, 0, '0000-00-00', 24, '0000-00-00', NULL, 1, 100, NULL, 78, 78158, 0, 1),
(2, '0408022624C', 'PINAUDEAU', 'Tristan', NULL, NULL, NULL, '06/12/1997', 0, 100, 0, '0000-00-00', 24, '0000-00-00', NULL, 1, 100, NULL, 33, 33522, 0, 1),
(3, '0408022629H', 'LEZHARI', 'Elyes', NULL, NULL, NULL, '10/09/1997', 0, 100, 0, '0000-00-00', 24, '0000-00-00', NULL, 1, 100, NULL, 33, 33063, 0, 1),
(4, '0408022619X', 'BARBEZAT', 'Fanny', 'Lucie', 'Martine', NULL, '21/11/1996', 0, 100, 0, '0000-00-00', 25, '0000-00-00', NULL, 2, 100, NULL, 33, 33318, 1, 1),
(5, '0409011314R', 'DURET', 'Camille', 'Marie', NULL, NULL, '14/07/1998', 0, 100, 0, '0000-00-00', 24, '0000-00-00', NULL, 2, 100, 2147483647, 33, 33063, 0, 1),
(6, '0409011370B', 'DUPART', 'Lucie', 'Marie', 'Rebecca', NULL, '21/05/1998', 0, 100, 0, '0000-00-00', 24, '0000-00-00', NULL, 2, 100, 2147483647, 33, 33063, 0, 1),
(7, '0409011365W', 'CHEVROLLIER', 'Elea', 'Lucie', 'Clara', NULL, '29/07/1998', 0, 100, 0, '0000-00-00', 25, '0000-00-00', NULL, 2, 100, 2147483647, 49, 49007, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `parents`
--

CREATE TABLE IF NOT EXISTS `parents` (
  `PERSONNE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LC_CIVILITE` varchar(3) NOT NULL,
  `LL_CIVILITE` varchar(10) NOT NULL,
  `NOM` varchar(50) NOT NULL,
  `PRENOM` varchar(50) NOT NULL,
  `TEL_PERSONNEL` varchar(20) NOT NULL,
  `TEL_PORTABLE` varchar(20) NOT NULL,
  `ACCEPTE_SMS` tinyint(1) NOT NULL,
  `TEL_PROFESSIONNEL` varchar(20) NOT NULL,
  `MEL` varchar(250) NOT NULL,
  `COMMUNICATION_ADRESSE` int(11) NOT NULL,
  `ADRESSE_ID` int(11) NOT NULL,
  `CODE_PROFESSION` int(11) NOT NULL,
  PRIMARY KEY (`PERSONNE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `parents`
--

INSERT INTO `parents` (`PERSONNE_ID`, `LC_CIVILITE`, `LL_CIVILITE`, `NOM`, `PRENOM`, `TEL_PERSONNEL`, `TEL_PORTABLE`, `ACCEPTE_SMS`, `TEL_PROFESSIONNEL`, `MEL`, `COMMUNICATION_ADRESSE`, `ADRESSE_ID`, `CODE_PROFESSION`) VALUES
(1, 'M', 'Monsieur', 'Garden', 'Alice', '', '', 0, '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `parents_eleves`
--

CREATE TABLE IF NOT EXISTS `parents_eleves` (
  `ID_Eleve` int(11) NOT NULL,
  `ID_Parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
