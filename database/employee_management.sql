-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 03 juil. 2023 à 02:10
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `employee_management`
--

-- --------------------------------------------------------

--
-- Structure de la table `cadre_superieur`
--

CREATE TABLE `cadre_superieur` (
  `id` int(11) NOT NULL,
  `salaire_annuel` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cadre_superieur`
--

INSERT INTO `cadre_superieur` (`id`, `salaire_annuel`) VALUES
(4, '10000'),
(5, '10000'),
(6, '10000');

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

CREATE TABLE `employee` (
  `id` int(44) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `salaire_base_mensuel` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employee`
--

INSERT INTO `employee` (`id`, `nom`, `salaire_base_mensuel`) VALUES
(4, 'Employee Name', '0'),
(5, 'Employee Name', '0'),
(6, 'Employee Name', '80000');

-- --------------------------------------------------------

--
-- Structure de la table `employee_regulier`
--

CREATE TABLE `employee_regulier` (
  `id` int(11) NOT NULL,
  `heures_travaillees` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employee_regulier`
--

INSERT INTO `employee_regulier` (`id`, `heures_travaillees`) VALUES
(4, '00:32:00'),
(5, '00:32:00'),
(6, '00:32:00');

-- --------------------------------------------------------

--
-- Structure de la table `gestionnaire`
--

CREATE TABLE `gestionnaire` (
  `id` int(11) NOT NULL,
  `salaire_base` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `gestionnaire`
--

INSERT INTO `gestionnaire` (`id`, `salaire_base`) VALUES
(4, '3100'),
(5, '8100'),
(6, '8100');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cadre_superieur`
--
ALTER TABLE `cadre_superieur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employee_regulier`
--
ALTER TABLE `employee_regulier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cadre_superieur`
--
ALTER TABLE `cadre_superieur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `employee_regulier`
--
ALTER TABLE `employee_regulier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cadre_superieur`
--
ALTER TABLE `cadre_superieur`
  ADD CONSTRAINT `cadre_superieur_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`);

--
-- Contraintes pour la table `employee_regulier`
--
ALTER TABLE `employee_regulier`
  ADD CONSTRAINT `employee_regulier_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`);

--
-- Contraintes pour la table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  ADD CONSTRAINT `gestionnaire_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
