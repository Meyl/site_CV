-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 03 Mars 2017 à 17:20
-- Version du serveur :  10.1.8-MariaDB
-- Version de PHP :  5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site_cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_competences`
--

CREATE TABLE `t_competences` (
  `id_competence` int(11) NOT NULL,
  `competence` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_competences`
--

INSERT INTO `t_competences` (`id_competence`, `competence`) VALUES
(1, 'HTML 5 CSS 3'),
(3, 'indesgin photoshop');

-- --------------------------------------------------------

--
-- Structure de la table `t_contacts`
--

CREATE TABLE `t_contacts` (
  `id_contact` int(11) NOT NULL,
  `prenom` varchar(11) NOT NULL,
  `nom` varchar(11) NOT NULL,
  `email_c` varchar(11) NOT NULL,
  `telephone_c` int(11) NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_experiences`
--

CREATE TABLE `t_experiences` (
  `id_experiences` int(11) NOT NULL,
  `titre_e` varchar(255) COLLATE utf8_bin NOT NULL,
  `sous_titre_e` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_competences` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `t_experiences`
--

INSERT INTO `t_experiences` (`id_experiences`, `titre_e`, `sous_titre_e`, `date`, `description`, `id_competences`) VALUES
(1, 'Serveur en extra', 'Restaurant plage parisienne paris 15eme', '08/2015', '<p>Prise de commandes</p>\n<p>Mise en place de la salle</p>\n<p>Entretien de la salle</p>', 1),
(2, 'Employé polyvalent de restauration', 'McDonald - Asnières 92600', '05/2013', '<p>Accueil, conseils et service clientèle</p>\n<p>Prise de commandes</p>\n<p>Mise en place de la salle</p>\n<p> Entretien de la salle</p>', 2);

-- --------------------------------------------------------

--
-- Structure de la table `t_formations`
--

CREATE TABLE `t_formations` (
  `id_formation` int(11) NOT NULL,
  `titre_f` varchar(50) NOT NULL,
  `sous_titre_f` varchar(50) NOT NULL,
  `date_f` varchar(10) NOT NULL,
  `descriptions` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_loisirs`
--

CREATE TABLE `t_loisirs` (
  `id_loisir` int(11) NOT NULL,
  `loisir` varchar(250) NOT NULL,
  `titre_loisir` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_loisirs`
--

INSERT INTO `t_loisirs` (`id_loisir`, `loisir`, `titre_loisir`) VALUES
(1, 'Sport', 'Basket / jogging'),
(2, 'Sortie', 'cinema / expos / festival');

-- --------------------------------------------------------

--
-- Structure de la table `t_titre_cv`
--

CREATE TABLE `t_titre_cv` (
  `id_titre` int(11) NOT NULL,
  `titre_cv` varchar(255) COLLATE utf8_bin NOT NULL,
  `accroche` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `t_titre_cv`
--

INSERT INTO `t_titre_cv` (`id_titre`, `titre_cv`, `accroche`) VALUES
(1, 'integrateur developpeur junior', ''),
(2, 'Welcome !', '');

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateur`
--

CREATE TABLE `t_utilisateur` (
  `id_utilisateur` int(10) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` smallint(5) NOT NULL,
  `sexe` enum('M','F') NOT NULL,
  `statut_marital` varchar(20) NOT NULL,
  `adresse` text NOT NULL,
  `code_postal` varchar(5) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `pays` varchar(13) NOT NULL,
  `etat_civil` enum('Mr','M') NOT NULL,
  `mdp` varchar(13) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `avatar` varchar(13) NOT NULL,
  `pseudo` varchar(13) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_utilisateur`
--

INSERT INTO `t_utilisateur` (`id_utilisateur`, `nom`, `prenom`, `email`, `age`, `sexe`, `statut_marital`, `adresse`, `code_postal`, `ville`, `pays`, `etat_civil`, `mdp`, `tel`, `avatar`, `pseudo`, `notes`) VALUES
(1, 'Charef', 'Yannis', 'yannis.charef@gmail.com', 24, 'M', 'Celibataire', '49 rue Louis castel', '92230', 'Gennevilliers', 'france', 'M', 'mgfv', '0782577961', 'bape.jpg', 'Meylo', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `t_competences`
--
ALTER TABLE `t_competences`
  ADD PRIMARY KEY (`id_competence`);

--
-- Index pour la table `t_contacts`
--
ALTER TABLE `t_contacts`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `t_experiences`
--
ALTER TABLE `t_experiences`
  ADD PRIMARY KEY (`id_experiences`);

--
-- Index pour la table `t_formations`
--
ALTER TABLE `t_formations`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `t_loisirs`
--
ALTER TABLE `t_loisirs`
  ADD PRIMARY KEY (`id_loisir`);

--
-- Index pour la table `t_titre_cv`
--
ALTER TABLE `t_titre_cv`
  ADD PRIMARY KEY (`id_titre`);

--
-- Index pour la table `t_utilisateur`
--
ALTER TABLE `t_utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `t_competences`
--
ALTER TABLE `t_competences`
  MODIFY `id_competence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `t_contacts`
--
ALTER TABLE `t_contacts`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_experiences`
--
ALTER TABLE `t_experiences`
  MODIFY `id_experiences` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `t_loisirs`
--
ALTER TABLE `t_loisirs`
  MODIFY `id_loisir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `t_titre_cv`
--
ALTER TABLE `t_titre_cv`
  MODIFY `id_titre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `t_utilisateur`
--
ALTER TABLE `t_utilisateur`
  MODIFY `id_utilisateur` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
