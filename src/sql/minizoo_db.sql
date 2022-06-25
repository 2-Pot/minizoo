-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 25 juin 2022 à 09:15
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `minizoo_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_link` varchar(1024) NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `image_link`, `name`, `price`) VALUES
(1, './src/img/sector/eshop/keychain_lemur.jpg', 'Lemur keychain', 5),
(2, './src/img/sector/eshop/keychain_parrot.jpg', 'Parrot keychain', 5),
(3, './src/img/sector/eshop/keychain_red-panda.jpg', 'Red panda keychain', 5),
(4, './src/img/sector/eshop/plush_emperor-tamarin.jpg', 'Emperor Tamarin Plush', 15),
(5, './src/img/sector/eshop/plush_koala.jpg', 'Koala plush', 12),
(6, './src/img/sector/eshop/plush_long-tailed-lemur.jpg', 'Lemur plush', 15),
(7, './src/img/sector/eshop/tshirt_black.jpg', 'MiniZoo black T-shirt', 10),
(8, './src/img/sector/eshop/tshirt_brown.jpg', 'MiniZoo brown T-shirt', 10),
(9, './src/img/sector/eshop/tshirt_grey.jpg', 'MiniZoo gray T-shirt', 10),
(10, './src/img/sector/eshop/plush_ant.jpg', 'Ant plush', 12);

-- --------------------------------------------------------

--
-- Structure de la table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datet` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login` varchar(50) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `prio` varchar(10) NOT NULL DEFAULT 'faible',
  `statut` varchar(10) NOT NULL DEFAULT 'en cours',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tickets`
--

INSERT INTO `tickets` (`id`, `datet`, `login`, `sujet`, `description`, `prio`, `statut`) VALUES
(1, '2020-07-30 14:37:49', 'zorg@zorg', 'fuite d\'eau', 'fuite d\'eau dans le local des lions', 'faible', 'en cours'),
(2, '2022-06-24 12:48:19', 'dsd', 'ds', 'sds', 'High', 'Received'),
(3, '2022-06-24 12:50:39', 'qsd', 'jjjj', 'dsds', 'High', 'Received');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'aloukourub@cy-tech.fr', 'ruben'),
(2, 'toupottean@cy-tech.fr', 'Jesuisbo1!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
