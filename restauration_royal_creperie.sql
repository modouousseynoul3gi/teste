-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Lun 22 Janvier 2024 à 12:57
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `restauration_royal_creperie`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `CoteCategorie` int(20) NOT NULL AUTO_INCREMENT,
  `NomCategorie` varchar(20) NOT NULL,
  PRIMARY KEY (`CoteCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1001 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`CoteCategorie`, `NomCategorie`) VALUES
(100, 'Sénégalaise'),
(200, 'ivoirien'),
(300, 'Nigerien'),
(400, 'Americain'),
(500, 'Sénégalaise'),
(600, 'Sénégalaise'),
(700, 'Ivoirien'),
(800, 'Sénégalaise'),
(900, 'Asiatique'),
(1000, 'Americain');

-- --------------------------------------------------------

--
-- Structure de la table `commander`
--

CREATE TABLE IF NOT EXISTS `commander` (
  `Nbre_Plat_Com` int(20) NOT NULL,
  `CodePlat` int(20) NOT NULL,
  `NumDemande` int(20) NOT NULL,
  PRIMARY KEY (`Nbre_Plat_Com`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commander`
--

INSERT INTO `commander` (`Nbre_Plat_Com`, `CodePlat`, `NumDemande`) VALUES
(1, 5, 77),
(2, 10, 78),
(3, 20, 79),
(4, 40, 81),
(5, 30, 80),
(6, 50, 81),
(7, 60, 82),
(8, 70, 83);

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE IF NOT EXISTS `demande` (
  `Numdemande` int(15) NOT NULL,
  `Nomclient` varchar(15) NOT NULL,
  `Datedemande` date NOT NULL,
  `Numrecu` int(15) NOT NULL,
  PRIMARY KEY (`Numdemande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `demande`
--

INSERT INTO `demande` (`Numdemande`, `Nomclient`, `Datedemande`, `Numrecu`) VALUES
(77, 'pape', '2022-06-23', 12),
(78, 'Ousmane', '2022-06-24', 16),
(79, 'Sidy', '2022-06-24', 12),
(80, 'Adja', '2022-06-02', 15),
(81, 'Ouly', '2022-06-26', 16),
(82, 'Samba', '2022-06-27', 17),
(83, 'yacine', '2022-06-28', 28),
(84, 'Penda', '2022-06-29', 30),
(85, 'Moustapha', '2022-06-30', 40),
(86, 'Coumba', '2022-06-01', 45);

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE IF NOT EXISTS `plat` (
  `CodePlat` int(15) NOT NULL,
  `NomPlat` varchar(15) NOT NULL,
  `PrixPlat` int(15) NOT NULL,
  `QuantitéDispo` int(15) NOT NULL,
  `NomCate` int(15) NOT NULL,
  PRIMARY KEY (`CodePlat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `plat`
--

