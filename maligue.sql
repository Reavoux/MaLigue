-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 06 nov. 2021 à 19:09
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maligue`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `prenom` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `mail` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `login` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `pass` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `dateDeNaissance` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `adressePostale` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `telephone` varchar(255) NOT NULL,
  `statut` int(11) NOT NULL,
  `role` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `DateInscrit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail_UNIQUE` (`mail`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `mail`, `login`, `pass`, `dateDeNaissance`, `adressePostale`, `telephone`, `statut`, `role`, `DateInscrit`) VALUES
(1, 'BLUET', 'Frédérick', 'fdrbluet@gmail.com', '123', '123', '1984-02-10', '3rue de la liberté', '0614361103', 1, 'user', '2021-11-06 18:50:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
