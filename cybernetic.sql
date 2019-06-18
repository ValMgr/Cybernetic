-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 17 juin 2019 à 18:32
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cybernetic`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `NumArticle` int(4) NOT NULL AUTO_INCREMENT,
  `DateArticle` date NOT NULL,
  `TitleArticle` varchar(64) NOT NULL,
  `ChapoArticle` text NOT NULL,
  `Paragraphe1` text NOT NULL,
  `Subtitle1` text,
  `Paragraphe2` text,
  `Subtitle2` text,
  `Paragraphe3` text,
  `Subtitle3` text,
  `Paragraphe4` text,
  `Subtitle4` text,
  `Paragraphe5` text,
  `UrlPicture` varchar(10000) NOT NULL,
  `NumLang` varchar(5) NOT NULL,
  PRIMARY KEY (`NumArticle`),
  KEY `NumLang` (`NumLang`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--


-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

DROP TABLE IF EXISTS `langues`;
CREATE TABLE IF NOT EXISTS `langues` (
  `NumLang` varchar(5) NOT NULL,
  `NameLang` varchar(16) NOT NULL,
  `LibLang` varchar(32) NOT NULL,
  PRIMARY KEY (`NumLang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `langues`
--

INSERT INTO `langues` (`NumLang`, `NameLang`, `LibLang`) VALUES
('ANG01', 'Anglais', 'Langue Anglaise'),
('ESP01', 'Espagnol', 'Langue Espagnole'),
('FRA01', 'Français', 'Langue Française');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Pseudo` varchar(16) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Email` varchar(32) NOT NULL,
  PRIMARY KEY (`Pseudo`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Pseudo`, `Password`, `Email`) VALUES
('admin', 'password', 'valentin.magry@mmibordeaux.com');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `NumLang` FOREIGN KEY (`NumLang`) REFERENCES `langues` (`NumLang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
