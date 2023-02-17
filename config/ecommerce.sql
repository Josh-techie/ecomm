-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 10 jan. 2023 à 21:37
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_cat` int NOT NULL AUTO_INCREMENT,
  `nom_cat` varchar(30) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_cat`, `nom_cat`) VALUES
(1, 'Surf'),
(2, 'ScubaDiving'),
(3, 'Swimming');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `is_admin` int DEFAULT NULL,
  `registration_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `username`, `email`, `password`, `is_admin`, `registration_date`) VALUES
(2, 'joe', 'joe', 'joe', 0, '2023-01-08'),
(3, 'Kilan', 'mama', 'mama', 0, '2023-01-08'),
(5, 'Joe002', 'youse2002@outlook.fr', 'joe123', 1, '2023-01-08'),
(9, 'joedone', 'joe@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, '2023-01-08'),
(7, 'kobalt', 'kobalte@gmail.com', '1d3e620ee922c620aac6be34ab43b11d9829cb18', 0, '2023-01-08'),
(8, 'Kolit', 'kolit@gmail.com', '5f4c27ba3c2bb0f8f65363e1ff82ed466c856ce7', 0, '2023-01-08'),
(10, 'aa', 'aa', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', 0, '2023-01-10');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_prod` int NOT NULL AUTO_INCREMENT,
  `nom_prod` varchar(255) NOT NULL,
  `p_desc` varchar(255) NOT NULL,
  `p_cat` int NOT NULL,
  `code` varchar(100) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `p_nprice` float NOT NULL,
  `p_oprice` float NOT NULL,
  `qty` int NOT NULL,
  PRIMARY KEY (`id_prod`),
  KEY `p_cat` (`p_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `nom_prod`, `p_desc`, `p_cat`, `code`, `img1`, `img2`, `img3`, `p_nprice`, `p_oprice`, `qty`) VALUES
(1, 'Combinaison Pour Femme', 'Combinaison faite de materieux noble', 1, 'a', '1.png', '2.png', '3.png', 180.99, 249.99, 10),
(2, 'Planche Surf Long', 'Planche en Bois Acajou', 1, 'b', 'planche1', 'planche2', 'planche3', 1500, 1899.99, 15),
(3, 'Planche Surf Long', 'Planche en Bois Acajou', 1, 'c', 'planche1', 'planche2', 'planche3', 1500, 1899.99, 15),
(4, 'Petite Robe Grise', 'FAITE DE TISSU CONFORTABLE', 3, 'd', 'apparel4.jpg', 'apparel5.jpg', 'apparel6.jpg', 137, 199, 10);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`p_cat`) REFERENCES `category` (`id_cat`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

