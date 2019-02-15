-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 06 Décembre 2017 à 23:20
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `forumitic`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id_cat` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id_cat`, `titre`) VALUES
(1, 'ENTREPRENEUR'),
(2, 'COACH'),
(3, 'SOLUTION'),
(4, 'ENTREPRENEURE'),
(5, 'FORMATION'),
(6, 'SERVICE'),
(7, 'SECURITE'),
(8, 'ANGLAIS'),
(9, 'MANAGEMENT');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id_p` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `contenu` text,
  `date_p` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_t` smallint(5) unsigned DEFAULT NULL,
  `id_u` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_p`),
  KEY `id_t` (`id_t`),
  KEY `id_u` (`id_u`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id_p`, `contenu`, `date_p`, `id_t`, `id_u`) VALUES
(85, 'BONJOUR', '0000-00-00 00:00:00', 0, 3),
(124, 'Tout au long de lâ€™annÃ©e, lâ€™Ã©quipe dâ€™ITIC Paris vient Ã  votre rencontre lors de diffÃ©rents Salons, et vous accueille dans ses locaux pendant les JournÃ©es Portes Ouvertes.\r\n\r\nCes Ã©vÃ¨nements sont lâ€™occasion pour vous de prendre contact avec les Responsables PÃ©dagogiques, les professeurs, les ChargÃ©s de Relation Entreprises et nos Ã©tudiants, afin de leur poser vos questions et de recueillir de prÃ©cieux conseils pour votre orientation.', '0000-00-00 00:00:00', NULL, 11);

-- --------------------------------------------------------

--
-- Structure de la table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id_t` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `description` text,
  `id_cat` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_t`),
  KEY `id_cat` (`id_cat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `topics`
--

INSERT INTO `topics` (`id_t`, `titre`, `description`, `id_cat`) VALUES
(1, 'ENTREPRENEURE', 'TOUT POUR ETRE EN MEME TEMPS UNE BONNR FEMME ET UNE BONNE ENTREPRENEUR ', 1),
(2, 'ENTREPRENEUR', 'COMMENT MONTER ET GERER SON ENTREPRISE', 2),
(3, 'BUSINESS ENGLISH', 'L''INFLUENCE DE L''ANGLAIS DANS LE MONDE ENTREPRENARIAL', 3),
(4, 'SOLUTION', 'SOLUTION AUX PROBLAIMES DE LEADERSHIP', 4),
(5, 'FORMATION', 'FORMATION EN LEADERSHIP D''ENTREPRISE', 5),
(6, 'SERVICE', 'UN LEADER UTILE ET SERVIABLE', 6),
(7, 'COACHING', 'ETRE MENEUR ET BOSTER LES TROUPE', 7),
(8, 'SECURITE', 'VEILLE SUR LA SECURITE EN ENTREPRISE', 8),
(9, 'MANAGEMENT', 'MANAGEMENT D''ENTREPRISE', 9);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_u` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL DEFAULT '',
  `mdp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `ban` int(11) NOT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_u`, `login`, `mdp`, `email`, `avatar`, `ip`, `ban`) VALUES
(1, 'tao', 'd1ed83d06248e6081e050ac98da444bf7c8598d6', 'tao@gmail.com', NULL, '123.123.1.1', 0),
(2, 'cid', 'd8906511d0a8e512b24b672e2a5fa81fcbfa4874', 'cid@gmail.com', NULL, '123.123.12.1', 0),
(3, 'MARYLIN', '356a192b7913b04c54574d18c28d46e6395428ab', 'marylin@gmail.com', NULL, '186.186.186.5', 0),
(4, 'quyen', 'f34ee9973a77d6c17c806685e165f01d92ab3453', 'quyen@gmail.com', NULL, '131.123.123.1', 0),
(5, 'marylin', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'marylin1998@gmail.com', NULL, NULL, 0),
(6, 'cid', 'd8906511d0a8e512b24b672e2a5fa81fcbfa4874', 'cid@gmail.com', NULL, NULL, 0),
(7, 'testinscription', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@inscription.net', NULL, NULL, 0),
(8, 'ROMA', '4dc7c9ec434ed06502767136789763ec11d2c4b7', 'r@d.net', NULL, NULL, 0),
(9, 'FREDO', '31017a722665e4afce586950f42944a6d331dabf', 'fred@rik.net', NULL, NULL, 0),
(10, 'GAEL', 'e7582b9507331a5564b63863c9f53d17cb7fc228', 'gael@gmail.com', NULL, NULL, 0),
(11, 'SOPHIE', '5f50443bfe76f7279a8e0f2f0a98975cdbff38e9', 'sophie@star.net', NULL, NULL, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
