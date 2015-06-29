-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 29 Juin 2015 à 10:45
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `zombieacademy_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `badge`
--

CREATE TABLE IF NOT EXISTS `badge` (
  `id_Badges` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_uti` int(11) NOT NULL,
  PRIMARY KEY (`id_Badges`,`id_uti`),
  KEY `fk_badge_utilisateur1_idx` (`id_uti`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `badge_spe`
--

CREATE TABLE IF NOT EXISTS `badge_spe` (
  `id_badge_spe` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_uti` int(11) NOT NULL,
  PRIMARY KEY (`id_badge_spe`,`id_uti`),
  KEY `fk_badge_spe_utilisateur1_idx` (`id_uti`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE IF NOT EXISTS `cours` (
  `id_titre` int(20) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_titre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`id_titre`, `titre`, `genre`, `photo`, `tag1`, `tag2`, `tag3`, `contenu`, `lien`) VALUES
(6, 'Resident Evil 4', 'Jeu-video', '', 'Resident Evil', 'Shinji Mikami', 'Capcom', 'Resident Evil 4, sorti au Japon sous le nom Biohazard 4 (バイオハザード4, Baiohazādo Fō?), est un jeu vidéo de type survival horror développé par Capcom Production Studio 4 et édité par l''entreprise japonaise Capcom. Il est distribué au début de l''année 2005 sur la console GameCube. Il est ensuite porté sur Playstation 2 à la fin de l''année, Windows et Wii en 2007, puis pour iPhone OS.\r\n\r\nL''histoire se déroule six ans après les événements de Raccoon City et met en scène l''agent gouvernemental Leon Scott Kennedy lors d''une mission dans une région rurale d''Espagne.\r\n\r\nLe jeu connaît une grande période de développement durant laquelle plusieurs versions bêta ont été annulées. Dans le cadre d''un accord entre Nintendo et Capcom, le jeu sort finalement sur la GameCube où il sera considéré comme l''un des titres majeurs de cette console. En 2010, il est classé douzième jeu le mieux noté de tous les temps sur Game Rankings7 et, sur Metacritic, il est élu jeu de l''année 2005 sur les deux plates-formes où il a été édité8. Le jeu marque aussi un profond changement dans l''une des séries de jeu vidéo les plus populaires.', ''),
(7, 'Resident Evil 3', 'Jeu-video', '', 'Resident Evil', 'Shinji Mikami', 'Capcom', 'Resident Evil 3: Nemesis, sorti au Japon sous le nom Biohazard 3: Last Escape (バイオハザード3　ラストエスケープ, Baiohazādo surī rasuto esukēpu?), est un jeu vidéo de type survival horror développé et édité par Capcom. Il est distribué dès fin 1999 sur PlayStation. Il est ensuite porté sur Windows et Dreamcast courant 2000, puis sur GameCube en 2003.\r\n\r\nLe jeu marque une évolution dans la série avec une mise en avant du côté action6. Il se déroule au même moment que Resident Evil 2 et met en scène un membre des STARS contre la société pharmaceutique Umbrella, et plus particulièrement contre l''une des armes biologiquement modifiées les plus redoutables de la série : Nemesis7.\r\n\r\nLe jeu reçoit un accueil critique positif et se vend à environ 3,5 millions d''unités sur PlayStation.', '');

-- --------------------------------------------------------

--
-- Structure de la table `creations`
--

CREATE TABLE IF NOT EXISTS `creations` (
  `id_crea` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_crea`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=82 ;

--
-- Contenu de la table `creations`
--

INSERT INTO `creations` (`id_crea`, `titre`, `auteur`, `genre`, `contenu`, `photo`, `lien`) VALUES
(76, 'Angry dead birds', 'Lopezdu75', 'Fan art', 'piou', 'angry-zombie-birds.jpg', ''),
(51, 'blanche neige', 'SorciÃ¨re', 'Fan art', 'd', 'Illustration-Fanart-Scissorman-princesses-zombies-02.jpg', ''),
(81, 'Dead mario', 'Lopezdu75', 'Fan art', 'mario', 'Zombie-super-mario-game-character-fan-art-re-design-zombified-nintendo-by-jeffyp.jpg', ''),
(78, 'Ma femme a bon gout', 'Albert Mudas', 'Fan fiction', 'miam', 'read.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `quest`
--

CREATE TABLE IF NOT EXISTS `quest` (
  `id_quest` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maj` datetime DEFAULT NULL,
  PRIMARY KEY (`id_quest`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id_question` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `niveau` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_question`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `question_reponse`
--

CREATE TABLE IF NOT EXISTS `question_reponse` (
  `id_question` int(11) NOT NULL AUTO_INCREMENT,
  `id_tag` int(11) NOT NULL,
  `contenu` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `explication` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_question`,`id_tag`),
  KEY `fk_question_has_reponse_question1_idx` (`id_question`),
  KEY `fk_question_reponse_tag1_idx` (`id_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `quest_question`
--

CREATE TABLE IF NOT EXISTS `quest_question` (
  `id_quest` int(11) NOT NULL AUTO_INCREMENT,
  `id_question` int(11) NOT NULL,
  PRIMARY KEY (`id_quest`,`id_question`),
  KEY `fk_quest_has_question_question1_idx` (`id_question`),
  KEY `fk_quest_has_question_quest1_idx` (`id_quest`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `quest_tag`
--

CREATE TABLE IF NOT EXISTS `quest_tag` (
  `id_quest` int(11) NOT NULL AUTO_INCREMENT,
  `id_tag` int(11) NOT NULL,
  PRIMARY KEY (`id_quest`,`id_tag`),
  KEY `fk_questionnaire_has_tag_tag1_idx` (`id_tag`),
  KEY `fk_questionnaire_has_tag_questionnaire_idx` (`id_quest`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `id_score` int(11) NOT NULL AUTO_INCREMENT,
  `id_question` int(11) NOT NULL,
  `id_uti` int(11) NOT NULL,
  `note` int(11) DEFAULT NULL,
  `maj` datetime DEFAULT NULL,
  PRIMARY KEY (`id_score`),
  KEY `fk_score_question1_idx` (`id_question`),
  KEY `fk_score_utilisateur1_idx` (`id_uti`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id_tag` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tag_has_badge_spe`
--

CREATE TABLE IF NOT EXISTS `tag_has_badge_spe` (
  `id_tag` int(11) NOT NULL AUTO_INCREMENT,
  `id_badge_spe` int(11) NOT NULL,
  `id_uti` int(11) NOT NULL,
  `ordre_quest` int(11) NOT NULL,
  PRIMARY KEY (`id_tag`,`id_badge_spe`,`id_uti`,`ordre_quest`),
  KEY `fk_tag_has_badge_spe_badge_spe1_idx` (`id_badge_spe`,`id_uti`),
  KEY `fk_tag_has_badge_spe_tag1_idx` (`id_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tag_question`
--

CREATE TABLE IF NOT EXISTS `tag_question` (
  `id_tag` int(11) NOT NULL AUTO_INCREMENT,
  `id_question` int(11) NOT NULL,
  PRIMARY KEY (`id_tag`,`id_question`),
  KEY `fk_tag_has_question_question1_idx` (`id_question`),
  KEY `fk_tag_has_question_tag1_idx` (`id_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `trophee`
--

CREATE TABLE IF NOT EXISTS `trophee` (
  `id_Trophees` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_uti` int(11) NOT NULL,
  PRIMARY KEY (`id_Trophees`,`id_uti`),
  KEY `fk_trophee_utilisateur1_idx` (`id_uti`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `trophee`
--

INSERT INTO `trophee` (`id_Trophees`, `contenu`, `id_uti`) VALUES
(1, 'css/media/img/imgTrophees/banane.png', 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_uti` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `niveau` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xp` int(11) DEFAULT NULL,
  `ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stats_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stats_ecris` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stats_audio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stats_global` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_uti`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_uti`, `pseudo`, `email`, `password`, `avatar`, `niveau`, `xp`, `ip`, `created`, `Nom`, `Prenom`, `Description`, `stats_photo`, `stats_ecris`, `stats_audio`, `stats_global`, `rang`) VALUES
(2, 'pucksensei', '123@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'css/media/img/imgAvatar/kill1.png', '1', 800, '127.0.0.1', '2015-06-17 10:42:45', 'Monsieur Pain', 'Mister Alex', 'Wesh.', '', '', '', '', '');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `badge`
--
ALTER TABLE `badge`
  ADD CONSTRAINT `fk_badge_utilisateur1` FOREIGN KEY (`id_uti`) REFERENCES `utilisateur` (`id_uti`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `badge_spe`
--
ALTER TABLE `badge_spe`
  ADD CONSTRAINT `fk_badge_spe_utilisateur1` FOREIGN KEY (`id_uti`) REFERENCES `utilisateur` (`id_uti`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `question_reponse`
--
ALTER TABLE `question_reponse`
  ADD CONSTRAINT `fk_question_has_reponse_question1` FOREIGN KEY (`id_question`) REFERENCES `question` (`id_question`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_question_reponse_tag1` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `quest_question`
--
ALTER TABLE `quest_question`
  ADD CONSTRAINT `fk_quest_has_question_quest1` FOREIGN KEY (`id_quest`) REFERENCES `quest` (`id_quest`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_quest_has_question_question1` FOREIGN KEY (`id_question`) REFERENCES `question` (`id_question`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `quest_tag`
--
ALTER TABLE `quest_tag`
  ADD CONSTRAINT `fk_questionnaire_has_tag_questionnaire` FOREIGN KEY (`id_quest`) REFERENCES `quest` (`id_quest`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_questionnaire_has_tag_tag1` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `fk_score_question1` FOREIGN KEY (`id_question`) REFERENCES `question` (`id_question`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_score_utilisateur1` FOREIGN KEY (`id_uti`) REFERENCES `utilisateur` (`id_uti`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `tag_has_badge_spe`
--
ALTER TABLE `tag_has_badge_spe`
  ADD CONSTRAINT `fk_tag_has_badge_spe_badge_spe1` FOREIGN KEY (`id_badge_spe`, `id_uti`) REFERENCES `badge_spe` (`id_badge_spe`, `id_uti`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tag_has_badge_spe_tag1` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `tag_question`
--
ALTER TABLE `tag_question`
  ADD CONSTRAINT `fk_tag_has_question_question1` FOREIGN KEY (`id_question`) REFERENCES `question` (`id_question`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tag_has_question_tag1` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `trophee`
--
ALTER TABLE `trophee`
  ADD CONSTRAINT `fk_trophee_utilisateur1` FOREIGN KEY (`id_uti`) REFERENCES `utilisateur` (`id_uti`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
