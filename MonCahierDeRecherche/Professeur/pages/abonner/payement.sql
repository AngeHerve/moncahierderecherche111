-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 21 sep. 2022 à 14:17
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `min_crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `payement`
--

CREATE TABLE `payement` (
  `id_paye` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `choix_ab` varchar(200) NOT NULL,
  `numero` int(50) NOT NULL,
  `date_ab` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `payement`
--

INSERT INTO `payement` (`id_paye`, `user_id`, `choix_ab`, `numero`, `date_ab`) VALUES
(1, 0, '3000', 504050405, '2022-09-13 02:09:03'),
(2, 0, '1000', 2147483647, '2022-09-13 02:09:07'),
(3, 0, '1000', 2147483647, '2022-09-13 02:09:54'),
(4, 0, '1000', 2147483647, '2022-09-13 02:09:40'),
(5, 0, '1000', 545454245, '2022-09-14 01:09:13'),
(6, 0, '1000', 547674567, '2022-09-14 01:09:49'),
(7, 0, '3000', 2147483647, '2022-09-14 01:09:09'),
(8, 0, '1000', 67676767, '2022-09-21 01:31:47'),
(9, 1, '1000', 67676767, '2022-09-21 01:32:48'),
(10, 0, '1000', 56565656, '2022-09-21 01:35:06'),
(11, 0, '3000', 2147483647, '2022-09-21 01:35:22');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `payement`
--
ALTER TABLE `payement`
  ADD PRIMARY KEY (`id_paye`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `payement`
--
ALTER TABLE `payement`
  MODIFY `id_paye` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
