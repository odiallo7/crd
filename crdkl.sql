-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 04 oct. 2018 à 11:24
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `crdkl`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `a_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `a_titre` text,
  `a_resultat` text,
  `a_contrainte` text,
  `a_observation` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`a_id`, `r_id`, `a_titre`, `a_resultat`, `a_contrainte`, `a_observation`) VALUES
(1, 5, 'mon activitÃ©', 'mes rÃ©sultats', 'mes contraintres', 'mes observation'),
(2, 6, 'mon activitÃ©', 'mes rÃ©sultats', 'mes contraintres', 'mes observation'),
(3, 10, 'a', 'a', 'a', 'a'),
(4, 11, 'ab', 'abc', 'abcd', 'abcde'),
(5, 11, 'az', 'az', 'az', 'az'),
(6, 11, 'aed', 'ffg', 'fgg', 'fggg'),
(7, 11, 'ddddd', 'dddd', 'ddddd', 'dddd'),
(8, 11, 'apre', 'apres', 'apres', 'apres'),
(9, 12, 'fsdÃ¹lm', 'zlmd;', 'sfmm', 'mmm'),
(10, 13, 'aaz', 'zee', 'ee', 'zee');

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

CREATE TABLE `rapport` (
  `r_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `r_mois` varchar(10) DEFAULT NULL,
  `r_annee` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rapport`
--

INSERT INTO `rapport` (`r_id`, `s_id`, `r_mois`, `r_annee`) VALUES
(1, 9, 'Septembre', '2018'),
(2, 10, 'Septembre', '2018'),
(3, 14, 'Septembre', '2018'),
(4, 14, 'Septembre', '2018'),
(5, 14, 'Septembre', '2018'),
(6, 12, 'Octobre', '2018'),
(7, 12, 'Septembre', '2018'),
(8, 12, 'Fevrier', '2019'),
(9, 12, 'Fevrier', '2018'),
(10, 12, 'Fevrier', '2018'),
(11, 12, 'Janvier', '2018'),
(12, 9, 'Janvier', '2018'),
(13, 9, 'Aout', '2018');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `s_id` int(11) NOT NULL,
  `s_nom` varchar(150) NOT NULL,
  `s_sigle` varchar(20) DEFAULT NULL,
  `s_telephone` int(11) DEFAULT NULL,
  `s_email` varchar(100) DEFAULT NULL,
  `s_adresse` varchar(100) DEFAULT NULL,
  `s_responsable` varchar(100) DEFAULT NULL,
  `s_responsabletel` int(11) DEFAULT NULL,
  `s_login` varchar(20) DEFAULT NULL,
  `s_password` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`s_id`, `s_nom`, `s_sigle`, `s_telephone`, `s_email`, `s_adresse`, `s_responsable`, `s_responsabletel`, `s_login`, `s_password`) VALUES
(9, 'Chambre de Commmerce', 'cciak', 701020202, 'cciak@cciak.sn', 'Leona', 'Mr Thiam', 783223434, 'cciak', 'passer'),
(10, 'Police', 'cckl', 77332211, 'cckl@cckl.kl', 'centre ville', 'commisaire', 77825462, 'cckl', 'passer'),
(12, 'ASC Damels', 'damels', 7845, 'damel@info.com', 'medina', 'ch km', 85201479, 'damels', 'passer'),
(14, 'ASc Niarry Tally', 'niimgui', 788, 'po', 'po', 'po', 78, 'niimgui', 'passer');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `FK_estLie` (`r_id`);

--
-- Index pour la table `rapport`
--
ALTER TABLE `rapport`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `FK_estEcrit` (`s_id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `rapport`
--
ALTER TABLE `rapport`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `FK_estLie` FOREIGN KEY (`r_id`) REFERENCES `rapport` (`r_id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `rapport`
--
ALTER TABLE `rapport`
  ADD CONSTRAINT `FK_estEcrit` FOREIGN KEY (`s_id`) REFERENCES `service` (`s_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
