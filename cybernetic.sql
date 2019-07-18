-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 07 juil. 2019 à 16:10
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
  `NumLang` varchar(5) NOT NULL,
  `imagename` varchar(100) NOT NULL,
  PRIMARY KEY (`NumArticle`),
  KEY `NumLang` (`NumLang`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`NumArticle`, `DateArticle`, `TitleArticle`, `ChapoArticle`, `Paragraphe1`, `Subtitle1`, `Paragraphe2`, `Subtitle2`, `Paragraphe3`, `Subtitle3`, `Paragraphe4`, `Subtitle4`, `Paragraphe5`, `NumLang`, `imagename`) VALUES
(7, '2019-03-29', 'Dark Net et Cybercriminalité', 'Le hacking au secours des organisations dans le cadre du programme de recherche CyberNeTic.', 'Quelle satisfaction de partager avec Jean-Christophe Fedherbe notre travail « Dark net et cybercriminalité : le hacking au secours des organisations », que nous avons amorcé depuis plus d’un an dans le cadre du programme de recherche CyberNeTic (étude des mécanismes d\'influence et de manipulation dans les discours de cyberharcèlement)! Le colloque international Dark side, le côté obscur de la communication des organisations a permis de mettre en lumière le partenariat privilégié entre la Gendarmerie Nationale (PJGN -Jérôme Barlatier, réserve citoyenne, cellule N’Tech Bordeaux,) et l’Université Bordeaux Montaigne. Des perspectives de collaboration inédites sont encore à venir…', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'FRA01', 'Actu1.jpg'),
(8, '2019-04-11', 'Le Corps du délit, de la séduction à l’humiliation', 'Le cyberharcèlement en question, les instrumentalisations plurielles du corps dans le cadre de cyberviolences.', 'Nouvelle collaboration plus que fructueuse avec Jean-Christophe Fedherbe, lors de la journée d’étude Corps, contraintes, pouvoir organisée par l’université Bordeaux Montaigne et l’association Mauvais genres ! Nous avons pu présenter les premiers résultats issus de notre projet de recherche CyberNeTic, mené conjointement avec la Gendarmerie nationale (PJGN - Jérôme Barlatier, réserve citoyenne, cellule N’Tech Groupement Gironde), mettant ainsi en lumière dans notre communication « Le corps du délit : de la séduction à l’humiliation , le cyberharcèlement en question », les instrumentalisations plurielles du corps dans le cadre de cyberviolences (le corps érotisé - le corps exploité - le corps violenté). Les échanges privilégiés avec la salle composée d\'universitaires ont été très constructifs, nous encourageant à renouveler l\'expérience dans le champ des études de genre.', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'FRA01', 'Actu2.jpg'),
(10, '2019-04-19', 'Stratégies amoureuses et Cyberharcèlement', 'Quand le discours manipulateur devient un crime de langue sur les réseaux sociaux.', 'Merci à nos collègues de l’Institut Supérieur des Sciences Humaines de Tunis pour l’accueil chaleureux qu’ils nous ont réservés (Jean-Christophe Fedherbe) lors du colloque international Le discours manipulateur : jeux et enjeux. Notre communication « Stratégies amoureuses et cyberharcèlement : quand le discours manipulateur devient un crime de langue » a trouvé un écho sensible dans le champ disciplinaire des études linguistiques et tout particulièrement le concept de la nouvelle brachylogie, initié par Mansour M\'Henni. Notre projet de recherche CyberNeTic, mené conjointement avec la Gendarmerie nationale (PJGN – Jérôme Barlatier, réserve citoyenne, cellule N’Tech Groupement Gironde), nous a permis cette fois-ci d’exposer à l’Université Tunis El Manar, les mécanismes discursifs de la séduction qui structurent les échanges amoureux d’une situation potentiellement constitutive d’un cyberharcèlement (le cas du sexto) et la manière dont l’usage des mots peut exercer pouvoir et contrôle dans les discours manipulatoires des cyberharceleurs.', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'FRA01', 'Actu3.jpg');

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
