-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: net0ne.sql.free.fr
-- Généré le : Ven 07 Septembre 2018 à 22:48
-- Version du serveur: 5.0.83
-- Version de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `cress`
--

-- --------------------------------------------------------

--
-- Structure de la table `ajout`
--

CREATE TABLE IF NOT EXISTS `ajout` (
  `id` int(11) NOT NULL auto_increment,
  `nom` text collate latin1_general_ci NOT NULL,
  `emplacement` text collate latin1_general_ci NOT NULL,
  `utilisateur` text collate latin1_general_ci NOT NULL,
  `comm` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=50065 ;

--
-- Contenu de la table `ajout`
--

INSERT INTO `ajout` (`id`, `nom`, `emplacement`, `utilisateur`, `comm`) VALUES
(50004, 'Entrepreneuriat', '15', 'christelle', ''),
(50005, 'informations Mutuelle, TR', '12', 'christelle', ''),
(50006, 'Congés, Récup', '12', 'christelle', ''),
(50007, 'AG', '18', 'christelle', ''),
(50008, 'CA', '18', 'christelle', ''),
(50009, 'Commissions', '18', 'christelle', ''),
(50010, 'Documents types', '18', 'christelle', ''),
(50011, 'Adhérents', '2', 'christelle', ''),
(50012, 'Environnement ', '21', 'christelle', ''),
(50013, 'Loisirs - Tourisme - Sport', '21', 'christelle', ''),
(50014, 'Action sociale', '21', 'christelle', ''),
(50015, 'Culture', '21', 'christelle', ''),
(50016, 'Insertion', '21', 'christelle', ''),
(50017, 'Santé', '21', 'christelle', ''),
(50018, 'Association', '22', 'christelle', ''),
(50019, 'Coopérative', '22', 'christelle', ''),
(50020, 'outils, techniques', '22', 'christelle', ''),
(50021, 'études', '22', 'christelle', ''),
(50036, 'Entrepreneuriat', '15', 'damien', ''),
(50028, 'Adhérents', '11', 'genievre', ''),
(50027, 'Projets Idées', '2', 'genievre', ''),
(50029, 'Charte graphique C2RA', '17', 'genievre', ''),
(50030, 'Agenda', '12', 'genievre', ''),
(50031, 'COMMUNICATION', '2', 'genievre', ''),
(50032, 'Logos', '50031', 'genievre', ''),
(50033, 'Charte graphique CRESS', '50031', 'genievre', ''),
(50034, 'Charte graphique C2RA', '50031', 'genievre', ''),
(50037, 'Suivi congés', '12', 'damien', ''),
(50038, 'Réunions équipe - pôle', '11', 'yamina', ''),
(50039, 'Ressources humaines', '1', 'yamina', ''),
(50040, 'Gestion financière et conventions', '1', 'yamina', ''),
(50041, 'Logos', '14', 'yamina', ''),
(50042, 'Charte graphique CRESS', '17', 'yamina', ''),
(50044, 'Note de frais', '50039', 'yamina', ''),
(50045, 'Contrat de travail', '50039', 'yamina', ''),
(50046, 'Documentations Générales', '50039', 'yamina', ''),
(50047, 'Récap CP/Récup', '50039', 'yamina', ''),
(50048, 'Recrutement, stages, emplois', '50039', 'yamina', ''),
(50049, 'Suivi financier des conventions', '50040', 'yamina', ''),
(50050, 'Conventions', '50040', 'yamina', 'CRESS, C2RA BN, C2RA HN'),
(50051, 'Budget', '50040', 'yamina', ''),
(50052, 'CRESS', '50040', 'yamina', ''),
(50053, 'Suivi budgétaire', '50040', 'yamina', ''),
(50054, 'Documents vierges', '14', 'yamina', '(Courriers, Fax, Etiquettes, Contrat de travail, Conventions)'),
(50055, 'Charte graphique CRESS', '14', 'yamina', ''),
(50056, 'Chronocourrier', '14', 'yamina', ''),
(50057, 'MANIFESTATIONS ESS', '0', 'yamina', ''),
(50061, 'Mois ESS', '50057', 'yamina', ''),
(50062, 'Forum', '50057', 'yamina', ''),
(50064, 'Convention collective', '12', 'muriel', 'Réunions ');

-- --------------------------------------------------------

--
-- Structure de la table `base`
--

CREATE TABLE IF NOT EXISTS `base` (
  `id` int(11) NOT NULL auto_increment,
  `nom` text collate latin1_general_ci NOT NULL,
  `emplacement` text collate latin1_general_ci NOT NULL,
  `utilisateur` text collate latin1_general_ci NOT NULL,
  `comm` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=223 ;

--
-- Contenu de la table `base`
--

INSERT INTO `base` (`id`, `nom`, `emplacement`, `utilisateur`, `comm`) VALUES
(1, 'VIE ASSOCIATIVE CRESS', '0', 'base', ''),
(11, 'Instances', '1', 'base', ''),
(12, 'Salariés', '1', 'base', ''),
(13, 'Gestion financière', '1', 'base', ''),
(14, 'Administatif', '1', 'base', ''),
(15, 'Conventions', '1', 'base', ''),
(16, 'Projets - Idées', '1', 'base', ''),
(17, 'Communication', '1', 'base', ''),
(18, 'CNCRES', '1', 'base', ''),
(111, 'Bureau', '11', 'base', ''),
(112, 'CA', '11', 'base', ''),
(113, 'AG', '11', 'base', ''),
(121, 'Réunions équipe - pôle', '12', 'base', ''),
(122, 'Notes de frais', '12', 'base', ''),
(123, 'Contrats de travail', '12', 'base', ''),
(124, 'Bulletins de salaire', '12', 'base', ''),
(131, 'Budgets', '13', 'base', ''),
(132, 'CRESS', '13', 'base', ''),
(133, 'Suivis budgétaire', '13', 'base', ''),
(141, 'Etiquettes', '14', 'base', ''),
(142, 'Courriers', '14', 'base', ''),
(143, 'Locaux', '14', 'base', ''),
(144, 'Recrutements', '14', 'base', ''),
(145, 'Stages - Emplois', '14', 'base', ''),
(151, 'C2RA BN', '15', 'base', ''),
(152, 'C2RA HN', '15', 'base', ''),
(153, 'ORESS', '15', 'base', ''),
(161, 'logos', '17', 'base', ''),
(162, 'charte graphique CRESS', '17', 'base', ''),
(171, 'CA', '18', 'base', ''),
(172, 'Groupe Travail - DIRCRES', '18', 'base', ''),
(2, 'RESSOURCES', '0', 'base', ''),
(21, 'Filières activités', '2', 'base', ''),
(22, 'ESS General', '2', 'base', ''),
(23, 'Contacts', '2', 'base', ''),
(24, 'Adhérents', '2', 'base', ''),
(25, 'Manifestations ESS', '2', 'base', 'externe CRESS-BN'),
(221, 'presentation structures', '22', 'base', ''),
(222, 'AG', '22', 'base', '');

-- --------------------------------------------------------

--
-- Structure de la table `baseajout`
--

CREATE TABLE IF NOT EXISTS `baseajout` (
  `id` int(11) NOT NULL auto_increment,
  `nom` text collate latin1_general_ci NOT NULL,
  `emplacement` text collate latin1_general_ci NOT NULL,
  `utilisateur` text collate latin1_general_ci NOT NULL,
  `comm` text collate latin1_general_ci NOT NULL,
  KEY `id` (`id`)
) ENGINE=MRG_MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci INSERT_METHOD=LAST UNION=(`base`,`ajout`);

-- --------------------------------------------------------

--
-- Structure de la table `basesuppr`
--

CREATE TABLE IF NOT EXISTS `basesuppr` (
  `id` int(11) NOT NULL auto_increment,
  `utilisateur` text collate latin1_general_ci NOT NULL,
  `id_supprime` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=264 ;

--
-- Contenu de la table `basesuppr`
--

INSERT INTO `basesuppr` (`id`, `utilisateur`, `id_supprime`) VALUES
(11, 'christelle', 24),
(10, 'christelle', 24),
(42, 'genievre', 162),
(41, 'genievre', 162),
(40, 'genievre', 161),
(39, 'genievre', 161),
(38, 'genievre', 17),
(37, 'genievre', 17),
(36, 'genievre', 16),
(35, 'genievre', 16),
(43, 'genievre', 50029),
(44, 'genievre', 50029),
(45, 'genievre', 21),
(46, 'genievre', 21),
(47, 'genievre', 222),
(48, 'genievre', 222),
(49, 'genievre', 24),
(50, 'genievre', 24),
(256, 'yamina', 25),
(255, 'yamina', 18),
(254, 'yamina', 162),
(253, 'yamina', 161),
(252, 'yamina', 0),
(62, 'marie', 222),
(251, 'yamina', 0),
(250, 'yamina', 16),
(249, 'yamina', 153),
(248, 'yamina', 152),
(247, 'yamina', 151),
(246, 'yamina', 0),
(245, 'yamina', 0),
(244, 'yamina', 0),
(243, 'yamina', 15),
(242, 'yamina', 145),
(241, 'yamina', 144),
(240, 'yamina', 143),
(239, 'yamina', 142),
(238, 'yamina', 141),
(237, 'yamina', 133),
(236, 'yamina', 132),
(235, 'yamina', 131),
(234, 'yamina', 0),
(233, 'yamina', 0),
(232, 'yamina', 0),
(231, 'yamina', 13),
(230, 'yamina', 124),
(229, 'yamina', 123),
(228, 'yamina', 122),
(227, 'yamina', 121),
(226, 'yamina', 0),
(225, 'yamina', 0),
(224, 'yamina', 0),
(223, 'yamina', 0),
(222, 'yamina', 12);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
