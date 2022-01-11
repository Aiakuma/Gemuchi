-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 11 jan. 2022 à 17:08
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gemuchi_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pseudo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `consoles`
--

DROP TABLE IF EXISTS `consoles`;
CREATE TABLE IF NOT EXISTS `consoles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220111164652', '2022-01-11 16:47:40', 265);

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int NOT NULL AUTO_INCREMENT,
  `notes_id` int DEFAULT NULL,
  `tests_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `year` int NOT NULL,
  `authors` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FF232B31FC56F556` (`notes_id`),
  UNIQUE KEY `UNIQ_FF232B31F5D80971` (`tests_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `games_categories`
--

DROP TABLE IF EXISTS `games_categories`;
CREATE TABLE IF NOT EXISTS `games_categories` (
  `games_id` int NOT NULL,
  `categories_id` int NOT NULL,
  PRIMARY KEY (`games_id`,`categories_id`),
  KEY `IDX_9AD6626B97FFC673` (`games_id`),
  KEY `IDX_9AD6626BA21214B7` (`categories_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `games_consoles`
--

DROP TABLE IF EXISTS `games_consoles`;
CREATE TABLE IF NOT EXISTS `games_consoles` (
  `games_id` int NOT NULL,
  `consoles_id` int NOT NULL,
  PRIMARY KEY (`games_id`,`consoles_id`),
  KEY `IDX_903DBD4197FFC673` (`games_id`),
  KEY `IDX_903DBD4187B3CA2D` (`consoles_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `musique` double NOT NULL,
  `absence_bug` double NOT NULL,
  `temps_chargement` double NOT NULL,
  `bruitage` double NOT NULL,
  `originalite` double NOT NULL,
  `rendement_horaire` double NOT NULL,
  `phase_jeu` double NOT NULL,
  `charge_emotionnelle` double NOT NULL,
  `narration` double NOT NULL,
  `pertinence_parti_pris` double NOT NULL,
  `diversite_nuance` double NOT NULL,
  `environnement` double NOT NULL,
  `gestion_difficulte` double NOT NULL,
  `efficacite_interface` double NOT NULL,
  `cout_ressource` double NOT NULL,
  `poid_ressource` double NOT NULL,
  `disponibilite` double NOT NULL,
  `message_autocritique` double NOT NULL,
  `integration_message` double NOT NULL,
  `coup_de_coeur` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tests`
--

DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `son` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gameplay` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rythme` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `scenario` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `graphisme` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `accessibilite` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponibilite` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ouverture_reflexion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `FK_FF232B31F5D80971` FOREIGN KEY (`tests_id`) REFERENCES `tests` (`id`),
  ADD CONSTRAINT `FK_FF232B31FC56F556` FOREIGN KEY (`notes_id`) REFERENCES `notes` (`id`);

--
-- Contraintes pour la table `games_categories`
--
ALTER TABLE `games_categories`
  ADD CONSTRAINT `FK_9AD6626B97FFC673` FOREIGN KEY (`games_id`) REFERENCES `games` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_9AD6626BA21214B7` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `games_consoles`
--
ALTER TABLE `games_consoles`
  ADD CONSTRAINT `FK_903DBD4187B3CA2D` FOREIGN KEY (`consoles_id`) REFERENCES `consoles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_903DBD4197FFC673` FOREIGN KEY (`games_id`) REFERENCES `games` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
