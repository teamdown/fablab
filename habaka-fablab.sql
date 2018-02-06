-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 27 jan. 2018 à 13:16
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `habaka-fablab`
--
CREATE DATABASE IF NOT EXISTS `habaka-fablab` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `habaka-fablab`;

-- --------------------------------------------------------

--
-- Structure de la table `communauté`
--

DROP TABLE IF EXISTS `communauté`;
CREATE TABLE IF NOT EXISTS `communauté` (
  `id_communaruté` int(11) NOT NULL AUTO_INCREMENT,
  `communauté` varchar(50) NOT NULL,
  PRIMARY KEY (`id_communaruté`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

DROP TABLE IF EXISTS `materiel`;
CREATE TABLE IF NOT EXISTS `materiel` (
  `id_material` int(11) NOT NULL AUTO_INCREMENT,
  `materiel` varchar(50) NOT NULL,
  PRIMARY KEY (`id_material`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id_membre` int(4) NOT NULL AUTO_INCREMENT,
  `nom_membre` varchar(50) NOT NULL,
  `prenom_membre` varchar(50) NOT NULL,
  `cin` int(12) DEFAULT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `tel` varchar(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_membre`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `nom_membre`, `prenom_membre`, `cin`, `date_naissance`, `adresse`, `tel`, `email`) VALUES
(1, 'CHRISTIAN', 'Stéphan Josué', 101231, '2018-01-27', 'Lot II M 58 Bis Antsakaviro', '0340959853', 'christianstephanjosue@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
