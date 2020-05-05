-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 05 mai 2020 à 12:07
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
(12, 'TSHIRT', 'Largent', '120£', '', 'tout et rien', 'images-articles/2.jpg'),
(13, 'TSHIRT', '102', '150$', '', '30% polystere', 'images-articles/3.jpg'),
(21, 'TSHIRT', 'NOM', '150$', '', 'tout et rien', 'images-articles/4.jpg'),
(22, 'TSHIRT', '102', '', '', '30% polystere', 'images-articles/3.jpg'),
(25, 'TSHIRT', 'ertyuiop', '120£', '', '30% polystere', 'images-articles/4.jpg'),
(26, 'TSHIRT', 'Largent', '150$', '', 'tout et rien', 'images-articles/1.jpg'),
(27, 'CHEMISE', 'ertyuiop', '150$', '', '30% polystere', 'images-articles/5.jpg'),
(28, 'CHEMISE', 'MAO', '150$', '', 'tout et rien', 'images-articles/6.jpg'),
(29, 'CHEMISE', '103', '150$', '', '30% polystere', 'images-articles/7.jpg'),
(30, 'CHEMISE', 'OAM', '120£', '', '30% polystere', 'images-articles/8.jpg'),
(31, 'CHEMISE', 'FATIGUE', '150$', '', 'tout et rien', 'images-articles/9.jpg'),
(44, 'VESTE', '102', '150$', '', '30% polystere', 'images-articles/16.jpg'),
(45, 'VESTE', 'MAO', '150$', '', 'tout et rien', 'images-articles/17.jpg'),
(46, 'VESTE', 'NOM', '120£', '', '30% polystere', 'images-articles/18.jpg'),
(48, 'VESTE', 'Largent ', '120£', '', 'tout et rien', 'images-articles/21.jpg'),
(49, 'VESTE', 'MAO', '120£', '', '30% polystere', 'images-articles/20.jpg'),
(50, 'VESTE', 'Largent', '150$', '', 'tout et rien', 'images-articles/21.jpg'),
(51, 'VESTE', '102', '120£', '', 'tout et rien', 'images-articles/22.jpg'),
(52, 'MANTEAU', 'MAO', '150$', '', '30% polystere', 'images-articles/24.jpg'),
(53, 'MANTEAU', 'NOM', '120£', '', 'tout et rien', 'images-articles/25.jpg'),
(54, 'MANTEAU', 'MAO', '120£', '', 'tout et rien', 'images-articles/26.jpg'),
(55, 'MANTEAU', 'MAO', '120£', '', '30% polystere', 'images-articles/27.jpg'),
(56, 'MANTEAU', 'MAO', '150$', '', '30% polystere', 'images-articles/28.jpg'),
(58, 'MANTEAU', 'MAO', '120£', '', 'tout et rien', 'images-articles/29.jpg'),
(59, 'SWEAT', 'NOM', '150$', '', '30% polystere', 'images-articles/10.jpg'),
(60, 'SWEAT', '102', '150$', '', '30% polystere', 'images-articles/11.jpg'),
(61, 'SWEAT', '102', '120£', '', 'tout et rien', 'images-articles/12.jpg'),
(62, 'SWEAT', 'NOM', '120£', '', '30% polystere', 'images-articles/13.jpg'),
(63, 'SWEAT', 'Largent', '120£', '', 'tout et rien', 'images-articles/14.jpg'),
(64, 'SWEAT', 'Largent ', '150$', '', 'tout et rien', 'images-articles/15.jpg'),
(65, 'PANTALON', 'NOM', '120£', '', 'tout et rien', 'images-articles/30.jpg'),
(66, 'PANTALON', 'NOM', '150$', '', '30% polystere', 'images-articles/31.jpg'),
(67, 'PANTALON', 'MAO', '120£', '', '30% polystere', 'images-articles/32.jpg'),
(68, 'PANTALON', 'MAO', '150$', '', '30% polystere', 'images-articles/33.jpg'),
(69, 'PANTALON', '102', '150$', '', '30% polystere', 'images-articles/34.jpg'),
(70, 'PANTALON', 'Largent ', '150$', '', '30% polystere', 'images-articles/35.jpg'),
(71, 'CHAUSSURE', 'MAO', '150$', '', '30% polystere', 'images-articles/36.jpg'),
(72, 'CHAUSSURE', 'MAO', '120£', '', 'tout et rien', 'images-articles/37.jpg'),
(73, 'CHAUSSURE', 'MAO', '150$', '', '30% polystere', 'images-articles/38.jpg'),
(74, 'CHAUSSURE', 'NOM', '120£', '', 'tout et rien', 'images-articles/39.jpg'),
(75, 'CHAUSSURE', 'NOM', '120£', '', 'tout et rien', 'images-articles/40.jpg'),
(76, 'CHAUSSURE', 'ertyuiop', '150$', '', 'tout et rien', 'images-articles/41.jpg'),
(77, 'SAC', 'MAO', '120£', '', 'tout et rien', 'images-articles/42.jpg'),
(78, 'SAC', '102', '150$', '', '30% polystere', 'images-articles/43.jpg'),
(79, 'SAC', 'NOM', '120£', '', '30% polystere', 'images-articles/44.jpg'),
(80, 'SAC', 'Largent', '150$', '', 'tout et rien', 'images-articles/45.jpg'),
(82, 'SAC', '102', '150$', '', '30% polystere', 'images-articles/46.jpg'),
(83, 'SAC', 'Largent', '120£', '', '30% polystere', 'images-articles/47.jpg'),
(84, 'ACCESSOIRE', 'MAO', '120£', '', '30% polystere', 'images-articles/48.jpg'),
(85, 'ACCESSOIRE', 'NOM', '150$', '', '30% polystere', 'images-articles/49.jpg'),
(86, 'ACCESSOIRE', 'NOM', '120£', '', '30% polystere', 'images-articles/50.jpg'),
(87, 'ACCESSOIRE', 'MAO', '150$', '', 'tout et rien', 'images-articles/51.jpg'),
(88, 'ACCESSOIRE', 'NOM', '150$', '', 'tout et rien', 'images-articles/52.jpg'),
(89, 'ACCESSOIRE', 'MAO', '120£', '', 'tout et rien', 'images-articles/53.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
