-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 15 Mars 2015 à 21:53
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `m2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Cp` int(5) NOT NULL,
  `Ville` varchar(100) NOT NULL,
  `NbrAdherents` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `clubs`
--

INSERT INTO `clubs` (`Id`, `Nom`, `Adresse`, `Cp`, `Ville`, `NbrAdherents`) VALUES
(1, 'FC Metz', '3, allée Saint Symphorien', 57000, 'METZ', 37),
(2, 'Ecole Européene aïkido Traditionnel', '20 rue Général Patton', 54410, 'Laneuveville Devant Nancy', 15),
(3, 'Tennis Club De Verdun', 'allée Pré l''Evêque', 55100, 'Verdun', 500),
(4, 'Comité Vosges Basket Ball', '8 rue Nancy', 88000, 'Epinal', 35);

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE IF NOT EXISTS `departements` (
  `Nom` varchar(100) NOT NULL,
  `Cp` int(11) NOT NULL,
  PRIMARY KEY (`Nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `departements`
--

INSERT INTO `departements` (`Nom`, `Cp`) VALUES
('Meurthe-et-Moselle', 54),
('Meuse', 55),
('Moselle', 57),
('Vosges', 88);

-- --------------------------------------------------------

--
-- Structure de la table `ligues`
--

CREATE TABLE IF NOT EXISTS `ligues` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `President` varchar(50) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Site` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `ligues`
--

INSERT INTO `ligues` (`Id`, `Nom`, `President`, `Adresse`, `Site`, `Email`) VALUES
(1, 'Ligue Lorraine d''Escrime', 'Jean-Pierre MICHON', '6 rue du Général Michaut, 57000,METZ', 'Ligueescrime.com', 'escrime@lorraine-sport.net'),
(2, 'Ligue Lorraine de Foot', 'Henri ALFORT', '', '', 'foot@lorraine-sport.net'),
(3, 'Ligue Lorraine de Tennis ', 'Thierry LEMORT', '', '', 'tennis@lorraine-sport.net'),
(4, 'Ligue Lorraine de Bowling ', 'Alexis JOUTIL', '', '', 'bowling@lorraine-sport.net'),
(5, 'Ligue Lorraine de Plongée', 'Pierre GILBERT', '', '', 'plongée@lorraine-sport.net'),
(6, 'Ligue Lorraine de Badminton', 'Sandrine LENORMAN', '', '', 'badminton@lorraine-sport.net'),
(7, 'Ligue Lorraine de Golf', 'Jean FIDMAL', '', '', 'golf@lorraine-sport.net'),
(8, 'Ligue Lorraine de Basket', 'Jerry LEGMAL', '', '', 'basket@lorraine-sport.net'),
(10, 'Ligues Lorraine de Boxe', 'James HONBOIT', '', '', 'boxe@lorraine-sport.net'),
(11, 'Ligue Lorraine d''Aikido', 'Jackie CHAN', '', '', 'aikido@lorraine-sport.net');

-- --------------------------------------------------------

--
-- Structure de la table `materiels`
--

CREATE TABLE IF NOT EXISTS `materiels` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `materiels`
--

INSERT INTO `materiels` (`Id`, `Nom`) VALUES
(1, 'Raquette'),
(2, 'Ballon'),
(3, 'Club de golf'),
(4, 'Combinaison'),
(5, 'Boule');

-- --------------------------------------------------------

--
-- Structure de la table `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `sports`
--

INSERT INTO `sports` (`Id`, `Nom`, `Description`) VALUES
(1, 'Escrime', 'Il s’agit de l’art de toucher un adversaire avec la pointe ou le tranchant d’une arme blanche sur les parties valables sans être touché.'),
(2, 'Foot', 'deux équipes de onze joueurs s''opposent dans un stade, que ce soit sur un terrain gazonné ou sur un plancher. L''objectif de chaque formation est de mettre un ballon sphérique dans le but adverse, sans utiliser les bras, et de le faire plus souvent que l''autre équipe.'),
(3, 'Bowling', 'consiste à renverser des quilles à l''aide d''une boule.'),
(4, 'Plongée sous-marine', 'consiste en général à rester sous l''eau, en respirant, soit à l''aide d''un narguilé, soit le plus souvent en s''équipant d''un scaphandre autonome. Le but principal des plongées est de découvrir le monde sous-marin.'),
(5, 'Badminton', 'Deux ou quatre joueurs s''opposent, ils sont placés dans deux demi-terrains séparés par un filet. Les joueurs, marquent des points en frappant un volant à l''aide d''une raquette pour le faire tomber dans le demi-terrain adverse. L''échange se termine dès que le volant touche le sol, ou s''il y a faute.'),
(6, 'Golf', 'se joue en plein air, il consiste à envoyer une balle dans un trou à l''aide de clubs. Le but du jeu consiste à effectuer, sur un parcours défini, le moins de coups possible. Précision, endurance, technicité, concentration sont des qualités indispensables pour cette activité.'),
(7, 'Basket', 'Deux équipes de cinq joueurs s''opposent sur le terrain et jouent à la main. Le but est de marquer plus de points que l''équipe adverse en marquant des paniers, c''est-à-dire en faisant passer le ballon à travers un anneau placé à plusieurs mètres du sol.'),
(9, 'Tennis', 'deux joueurs ou quatre joueurs s''opposent,en utilisant une raquette cordée. Le but du jeu est de frapper la balle de telle sorte que l''adversaire ne puisse la remettre dans les limites du terrain, soit en marquant le point en mettant l''adversaire hors de portée de la balle, soit en l''obligeant à commettre une faute.'),
(10, 'Boxe', 'bim bam boum'),
(11, 'Aikido', 'yihaaaaa');

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `types`
--

INSERT INTO `types` (`Id`, `Nom`) VALUES
(1, 'Sport collectif'),
(2, 'Sport de combat'),
(3, 'Sport de raquette'),
(4, 'Sport nautique'),
(5, 'Sport de quilles');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`Id`, `Password`) VALUES
('Admin', 'P@ssw0rd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
