-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 14 Novembre 2023 à 08:14
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `identification_ping`
--

-- --------------------------------------------------------

--
-- Structure de la table `sujets`
--

CREATE TABLE IF NOT EXISTS `sujets` (
`id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `desc` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `sujets`
--

INSERT INTO `sujets` (`id`, `nom`, `desc`) VALUES
(1, 'Panneaux solaires', 'Mise en place de panneaux solaires sur les trams de Rouen.'),
(2, 'Eoliennes', 'Mise en place d''éoliennes sur les toits des trams.');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Mdp` text NOT NULL,
  `Type` int(10) NOT NULL DEFAULT '1',
`Id` int(100) NOT NULL,
  `Email` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`Nom`, `Prenom`, `Mdp`, `Type`, `Id`, `Email`) VALUES
('RIVOIRE', 'Gaspar', '123', 2, 1, 'gaspar.rg69@gmail.com'),
('Gaiao', 'Lucas', '1234', 2, 4, 'lucas@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `user_sujet`
--

CREATE TABLE IF NOT EXISTS `user_sujet` (
  `user_id` int(11) NOT NULL,
  `sujet_id` int(11) NOT NULL,
  `valide` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user_sujet`
--

INSERT INTO `user_sujet` (`user_id`, `sujet_id`, `valide`) VALUES
(1, 1, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `sujets`
--
ALTER TABLE `sujets`
 ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD UNIQUE KEY `Id` (`Id`);

--
-- Index pour la table `user_sujet`
--
ALTER TABLE `user_sujet`
 ADD KEY `user_id` (`user_id`), ADD KEY `sujet_id` (`sujet_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `sujets`
--
ALTER TABLE `sujets`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
