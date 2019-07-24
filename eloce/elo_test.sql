-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 09 juil. 2019 à 10:06
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `elo_test`
--

-- --------------------------------------------------------

--
-- Structure de la table `elocien`
--

CREATE TABLE `elocien` (
  `elocien_id` int(11) NOT NULL,
  `elocien_firstname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `elocien_lastname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `elocien_birth` date NOT NULL,
  `elocien_date_begin` date NOT NULL,
  `elocien_date_end` date NOT NULL,
  `elocien_email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `formation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `elocien`
--

INSERT INTO `elocien` (`elocien_id`, `elocien_firstname`, `elocien_lastname`, `elocien_birth`, `elocien_date_begin`, `elocien_date_end`, `elocien_email`, `formation_id`) VALUES
(1, 'Samiro', 'Founou', '1990-09-21', '2019-04-01', '2020-01-31', 'samir_615@live.fr', 2),
(2, 'Samir 2', 'Founou', '2019-07-09', '2019-07-17', '2019-07-12', 'samir_615@live.fr', 1),
(3, 'Sam_2', 'Sam_2', '2019-07-19', '2019-07-13', '2019-07-07', 'samir_615@live.fr', 2),
(4, 'Martinosos', 'Dupont', '2019-07-12', '2019-07-19', '2019-07-12', 'martin@afpa.com', 1),
(5, 'Pascal', 'Latour', '2019-07-20', '2019-07-12', '2019-07-07', 'latour@afpa.com', 1),
(6, 'Javier', 'Ramon ', '2019-07-11', '2019-07-04', '2019-07-03', 'javier@afpa.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `formation_id` int(11) NOT NULL,
  `formation_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`formation_id`, `formation_name`) VALUES
(1, 'Concepteur développeur d\'applicaitons'),
(2, 'Technicien en système de sécurité incendie'),
(3, 'développeur web et mobile');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `elocien`
--
ALTER TABLE `elocien`
  ADD PRIMARY KEY (`elocien_id`),
  ADD KEY `elocien_formation_FK` (`formation_id`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`formation_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `elocien`
--
ALTER TABLE `elocien`
  MODIFY `elocien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `formation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `elocien`
--
ALTER TABLE `elocien`
  ADD CONSTRAINT `elocien_formation_FK` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`formation_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
