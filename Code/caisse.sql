-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 04 déc. 2021 à 20:34
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `comptebnq`
--

-- --------------------------------------------------------

--
-- Structure de la table `caisse`
--

CREATE TABLE `caisse` (
  `id_transaction` int(11) NOT NULL,
  `solde_transaction` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `caisse`
--

INSERT INTO `caisse` (`id_transaction`, `solde_transaction`) VALUES
(1, 100),
(2, 1500),
(3, 250),
(4, 5600),
(5, 6000),
(6, 150),
(7, 20),
(8, 20);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `caisse`
--
ALTER TABLE `caisse`
  ADD PRIMARY KEY (`id_transaction`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `caisse`
--
ALTER TABLE `caisse`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
