-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 27 avr. 2021 à 00:35
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `basket`
--

-- --------------------------------------------------------

--
-- Structure de la table `arbitre`
--

CREATE TABLE `arbitre` (
  `num_arbitre` int(11) NOT NULL,
  `nom_arbitre` varchar(255) NOT NULL,
  `prenom_arbitre` varchar(255) NOT NULL,
  `adresse_arbitre` varchar(255) NOT NULL,
  `cp_arbitre` int(5) NOT NULL,
  `ville_arbitre` varchar(255) NOT NULL,
  `date_naiss_arbitre` date NOT NULL,
  `tel_fixe_arbitre` varchar(255) NOT NULL,
  `tel_port_arbitre` varchar(255) NOT NULL,
  `mail_arbitre` varchar(255) NOT NULL,
  `num_club` int(11) NOT NULL,
  `num_equipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `arbitre`
--

INSERT INTO `arbitre` (`num_arbitre`, `nom_arbitre`, `prenom_arbitre`, `adresse_arbitre`, `cp_arbitre`, `ville_arbitre`, `date_naiss_arbitre`, `tel_fixe_arbitre`, `tel_port_arbitre`, `mail_arbitre`, `num_club`, `num_equipe`) VALUES
(1, 'SINGH', 'Liberty', '4 Impasse du Val de l\'Aurence', 87270, 'Couzeix', '2000-07-01', '0555892575', '0745578234', 'ps4-pro_paulSINGH@hotmail.fr', 1, 1),
(2, 'Parker', 'Tony', '28 avenue la balle', 59000, 'Lille', '2001-04-11', '0589963399', '07485265841', 'tonyparker@gmail.com', 2, 2),
(3, 'Perez', 'Justin', '63, rue Daniel Mace', 75000, 'Paris', '2001-07-13', '0555142859', '0721790189', 'Perezjustin@hotmail.com', 3, 3),
(4, 'Gaudin', 'Paulette ', '76 rue de Fabre', 78283, 'San Antonio', '2021-10-06', '0558967841', '0613659754', 'Paulette.Gaudin@yahoo.com', 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `num_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(255) NOT NULL,
  `montant_indemnite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `championnat`
--

CREATE TABLE `championnat` (
  `num_championnat` int(11) NOT NULL,
  `nom_championnat` varchar(255) NOT NULL,
  `num_categorie` int(11) NOT NULL,
  `num_division` int(11) NOT NULL,
  `num_type_championnat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `championnat`
--

INSERT INTO `championnat` (`num_championnat`, `nom_championnat`, `num_categorie`, `num_division`, `num_type_championnat`) VALUES
(1, 'RLCS Saison 1', 1, 1, 1),
(2, 'CMB', 1, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

CREATE TABLE `club` (
  `num_club` int(11) NOT NULL,
  `nom_club` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `deplacement`
--

CREATE TABLE `deplacement` (
  `num_arbitre` int(11) NOT NULL,
  `num_salle` int(11) NOT NULL,
  `distance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `division`
--

CREATE TABLE `division` (
  `num_division` int(11) NOT NULL,
  `nom_division` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `division`
--

INSERT INTO `division` (`num_division`, `nom_division`) VALUES
(9, 'test');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `num_equipe` int(11) NOT NULL,
  `num_club` int(11) NOT NULL,
  `nom_equipe` varchar(255) NOT NULL,
  `num_championnat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`num_equipe`, `num_club`, `nom_equipe`, `num_championnat`) VALUES
(1, 1, 'Equipe de Raimon', 1),
(2, 2, 'Equipe de Valadon', 1),
(3, 3, 'Equipe de Gueret', 2),
(4, 2, 'Spurs', 2);

-- --------------------------------------------------------

--
-- Structure de la table `indisponibilite`
--

CREATE TABLE `indisponibilite` (
  `num_arbitre` int(11) NOT NULL,
  `date_jour` date NOT NULL,
  `code_demi_jour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `match`
--

CREATE TABLE `match` (
  `num_match` int(11) NOT NULL,
  `num_salle` int(11) NOT NULL,
  `date_match` date NOT NULL,
  `heure_match` time NOT NULL,
  `num_equipe_1` int(11) NOT NULL,
  `num_equipe_2` int(11) NOT NULL,
  `num_arbitre_p` int(11) NOT NULL,
  `num_arbitre_s` int(11) NOT NULL,
  `montant_deplt_p` int(11) NOT NULL,
  `montant_deplt_s` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `match`
--

INSERT INTO `match` (`num_match`, `num_salle`, `date_match`, `heure_match`, `num_equipe_1`, `num_equipe_2`, `num_arbitre_p`, `num_arbitre_s`, `montant_deplt_p`, `montant_deplt_s`) VALUES
(1, 5051, '2021-03-16', '20:01:18', 1, 2, 1, 2, 12, 13),
(2, 512, '2021-03-11', '13:03:00', 3, 4, 3, 4, 14, 17),
(3, 5052, '2021-03-18', '08:03:43', 5, 6, 5, 6, 18, 10);

-- --------------------------------------------------------

--
-- Structure de la table `parametre`
--

CREATE TABLE `parametre` (
  `num_param` int(11) NOT NULL,
  `montant_km` int(11) NOT NULL,
  `mail_responsable` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `num_salle` int(11) NOT NULL,
  `adresse_salle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_championnat`
--

CREATE TABLE `type_championnat` (
  `num_type_championnat` int(11) NOT NULL,
  `nom_type_championnat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `identifiant` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`identifiant`, `password`) VALUES
('arbitre', '$2y$10$Z9UCWzEi4MoZBWnUdAP0Se4P6Q9ZCEPdUy2kX73ODPfHcZz/A.iKa'),
('responsable', '$2y$10$ex9ZZOTv4SBXf8Yhjrmkr.9BkTeA53rVsDRCg4eFZC6.Y55hQvXQq');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `arbitre`
--
ALTER TABLE `arbitre`
  ADD PRIMARY KEY (`num_arbitre`,`num_club`,`num_equipe`) USING BTREE;

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`num_categorie`);

--
-- Index pour la table `championnat`
--
ALTER TABLE `championnat`
  ADD PRIMARY KEY (`num_championnat`);

--
-- Index pour la table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`num_club`);

--
-- Index pour la table `deplacement`
--
ALTER TABLE `deplacement`
  ADD PRIMARY KEY (`num_arbitre`,`num_salle`);

--
-- Index pour la table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`num_division`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`num_equipe`);

--
-- Index pour la table `indisponibilite`
--
ALTER TABLE `indisponibilite`
  ADD PRIMARY KEY (`num_arbitre`);

--
-- Index pour la table `match`
--
ALTER TABLE `match`
  ADD PRIMARY KEY (`num_match`);

--
-- Index pour la table `parametre`
--
ALTER TABLE `parametre`
  ADD PRIMARY KEY (`num_param`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`num_salle`);

--
-- Index pour la table `type_championnat`
--
ALTER TABLE `type_championnat`
  ADD PRIMARY KEY (`num_type_championnat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `arbitre`
--
ALTER TABLE `arbitre`
  MODIFY `num_arbitre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `num_categorie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `championnat`
--
ALTER TABLE `championnat`
  MODIFY `num_championnat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `club`
--
ALTER TABLE `club`
  MODIFY `num_club` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `division`
--
ALTER TABLE `division`
  MODIFY `num_division` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `num_equipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `indisponibilite`
--
ALTER TABLE `indisponibilite`
  MODIFY `num_arbitre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `match`
--
ALTER TABLE `match`
  MODIFY `num_match` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `parametre`
--
ALTER TABLE `parametre`
  MODIFY `num_param` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `num_salle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_championnat`
--
ALTER TABLE `type_championnat`
  MODIFY `num_type_championnat` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
