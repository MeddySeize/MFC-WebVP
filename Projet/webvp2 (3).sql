-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 27 mai 2019 à 08:09
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
-- Base de données :  `webvp2`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nomCat` varchar(25) COLLATE utf8_bin NOT NULL,
  `description` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nomCat`, `description`) VALUES
(1, 'Management des SI', 'Apprenez à gérer votre SI'),
(2, 'Projet', 'Vous voulez devenir chef de projet? Ces formations sont pour vous.'),
(3, 'Infrastructure', 'L\'architecture des SI vous parle? '),
(4, 'Réseau', 'Apprenez tout sur le réseau informatique et sa sécurité.'),
(5, 'Développement', 'Apprenez à créer des des Base de données, des applications et sites Web.'),
(6, 'Bureautique', '');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id-commande` int(11) NOT NULL AUTO_INCREMENT,
  `id-panier` int(11) NOT NULL,
  `id-formation` int(11) NOT NULL,
  PRIMARY KEY (`id-commande`),
  KEY `commande-panier` (`id-panier`),
  KEY `commande-forma` (`id-formation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Ajout d''une formation dans le panier';

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id_formation` int(11) NOT NULL AUTO_INCREMENT,
  `nomForma` varchar(100) COLLATE utf8_bin NOT NULL,
  `descriptionForma` varchar(350) COLLATE utf8_bin DEFAULT NULL,
  `prixForma` int(15) NOT NULL,
  `lieuxForma` varchar(50) COLLATE utf8_bin NOT NULL,
  `valideForma` int(1) NOT NULL COMMENT '0 : doit être validé ou supprimé par un admin, 1 : validé et affiché',
  `dureeForma` int(50) NOT NULL COMMENT 'Durée en Jours',
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id_formation`),
  KEY `FK_catégorie` (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `nomForma`, `descriptionForma`, `prixForma`, `lieuxForma`, `valideForma`, `dureeForma`, `id_categorie`) VALUES
(2, 'TCP/IP', 'Vous n’y connaissez rien aux réseaux ? Pas de soucis, ce cours est fait pour tous !', 1600, 'Lille', 1, 3, 4),
(3, 'La technologie Sans-fil WIFI', 'Désormais, le WiFi s’installe dans toutes les entreprises modernes. Son usage en tout lieu, à tout moment et avec tout type de terminaux et périphériques, nécessite cependant des précautions particulières en termes de sécurité et de performance qui sont indispensables au bon fonctionnement des applications.', 980, 'Lyon', 1, 2, 4),
(4, 'Voix et Téléphone sur IP', NULL, 3500, 'Nice', 1, 5, 4),
(5, 'Programmez en PHP 5', 'Si vous voulez apprendre à créer vous aussi des sites web dynamiques, c\'est votre jour de chance : vous êtes sur un cours pour vrais débutants en PHP !', 1800, 'Nantes', 1, 3, 5),
(6, 'Développez vos Applications avec Android', 'Vous êtes prêts à conquérir le monde Android avec votre première application ? Alors, inscrivez-vous !', 2200, 'Toulouse', 1, 4, 5),
(7, 'Créer des sites et Applications web avec HTML5 et CSS3', 'Vous souhaitez créer vos propres sites web ? Vous êtes au bon endroit ! Dans ce cours, vous apprendrez comment utiliser HTML5 et CSS3, les deux langages de programmation à la base de tous les sites web.', 2700, 'Nice', 1, 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id-panier` int(11) NOT NULL AUTO_INCREMENT,
  `montantTotPanier` int(25) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id-panier`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id-panier`, `montantTotPanier`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `proposition`
--

DROP TABLE IF EXISTS `proposition`;
CREATE TABLE IF NOT EXISTS `proposition` (
  `id-proposition` int(11) NOT NULL AUTO_INCREMENT,
  `id-formation` int(11) NOT NULL,
  `id-utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id-proposition`),
  KEY `propo-forma` (`id-formation`),
  KEY `propo-uti` (`id-utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Proposition d''une formation, par un utilisateur';

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nomUti` varchar(25) COLLATE utf8_bin NOT NULL,
  `prenomUti` varchar(25) COLLATE utf8_bin NOT NULL,
  `typeUti` int(1) NOT NULL COMMENT '0 pour client, 1 pour admin',
  `identUti` varchar(25) COLLATE utf8_bin NOT NULL,
  `mdpUti` varchar(60) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Utilisateur = client ou admin';

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nomUti`, `prenomUti`, `typeUti`, `identUti`, `mdpUti`) VALUES
(1, 'Varnild', 'Johan', 1, 'Johan', 'jojo1995'),
(13, 'Bonjour', 'mamadou', 0, 'mamadoudu13', 'med'),
(15, 'Sedecim', 'Medius', 0, 'Medius', 'med'),
(17, 'Seize', 'Meddy', 0, 'med', 'med'),
(18, 'Dubois', 'Guillaume', 0, 'Guigui', 'Gui'),
(19, 'Nguyen', 'William', 0, 'Will', 'Ngu');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id-formation`) REFERENCES `formation` (`id_formation`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`id-panier`) REFERENCES `panier` (`id-panier`);

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `FK_catégorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);

--
-- Contraintes pour la table `proposition`
--
ALTER TABLE `proposition`
  ADD CONSTRAINT `proposition_ibfk_1` FOREIGN KEY (`id-utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `proposition_ibfk_2` FOREIGN KEY (`id-formation`) REFERENCES `formation` (`id_formation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
