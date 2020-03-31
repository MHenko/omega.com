-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 31 mars 2020 à 16:06
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `alpha`
--

-- --------------------------------------------------------

--
-- Structure de la table `wear`
--

CREATE TABLE `wear` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `matiere` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `wear`
--

INSERT INTO `wear` (`id`, `type`, `nom`, `prix`, `description`, `matiere`, `photo`) VALUES
(1, 'TSHIRT', 'NOM', '120£', '', '30% polystere', ''),
(2, '', '', '', '', '', ''),
(3, '', '', '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `wear`
--
ALTER TABLE `wear`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `wear`
--
ALTER TABLE `wear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
