-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 22 sep. 2019 à 20:46
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `freeinfo`
--

-- --------------------------------------------------------

--
-- Structure de la table `contry`
--

CREATE TABLE `contry` (
  `ID_C` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contry`
--

INSERT INTO `contry` (`ID_C`, `name`) VALUES
(1, 'Maroc');

-- --------------------------------------------------------

--
-- Structure de la table `filier`
--

CREATE TABLE `filier` (
  `ID_F` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ID_Spacialite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `filier`
--

INSERT INTO `filier` (`ID_F`, `name`, `description`, `ID_Spacialite`) VALUES
(1, 'Physique', 'xsxsxsx;,sxs,x,;sxs', 1);

-- --------------------------------------------------------

--
-- Structure de la table `filles`
--

CREATE TABLE `filles` (
  `ID_File` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(25) NOT NULL,
  `path` varchar(255) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `ID_module` int(11) NOT NULL,
  `date_ajoute` date NOT NULL,
  `Nb_vu` int(11) NOT NULL,
  `Nb_tel` int(11) NOT NULL,
  `type_file_extention` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `ID_M` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `id_parcour` int(11) NOT NULL DEFAULT '0',
  `ID_filier` int(11) NOT NULL,
  `ID_type_filier` int(11) NOT NULL,
  `ID_unvirsite` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `Nb_vu` int(11) NOT NULL,
  `ID_semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`ID_M`, `name`, `description`, `id_parcour`, `ID_filier`, `ID_type_filier`, `ID_unvirsite`, `ID_user`, `Nb_vu`, `ID_semester`) VALUES
(1, 'algebre', 'sxxsxsxsxxxxxxxxss', 0, 1, 1, 1, 1, 12, 1);

-- --------------------------------------------------------

--
-- Structure de la table `parcours`
--

CREATE TABLE `parcours` (
  `ID_P` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ID_filier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rate`
--

CREATE TABLE `rate` (
  `ID_R` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `Nb_file` int(11) NOT NULL,
  `Nb_vu` int(11) NOT NULL,
  `Nb_tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `semester`
--

CREATE TABLE `semester` (
  `ID_Se` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `semester`
--

INSERT INTO `semester` (`ID_Se`, `name`) VALUES
(1, 'Semester 1');

-- --------------------------------------------------------

--
-- Structure de la table `spacialite`
--

CREATE TABLE `spacialite` (
  `ID_S` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ID_Contry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `spacialite`
--

INSERT INTO `spacialite` (`ID_S`, `name`, `description`, `ID_Contry`) VALUES
(1, 'Science', 'en etude physique et autre matiere', 1);

-- --------------------------------------------------------

--
-- Structure de la table `typefilier`
--

CREATE TABLE `typefilier` (
  `ID_TF` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typefilier`
--

INSERT INTO `typefilier` (`ID_TF`, `name`) VALUES
(1, 'Licence fondamental');

-- --------------------------------------------------------

--
-- Structure de la table `unversite`
--

CREATE TABLE `unversite` (
  `ID_U` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ID_contryU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `unversite`
--

INSERT INTO `unversite` (`ID_U`, `name`, `ID_contryU`) VALUES
(1, 'ibn zohr', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID_Us` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_ajoute` date NOT NULL,
  `groupe_id` int(2) NOT NULL,
  `res_id` int(2) NOT NULL,
  `activation` int(11) NOT NULL DEFAULT '0',
  `link_activation` varchar(255) NOT NULL,
  `contry` varchar(25) NOT NULL,
  `chef_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID_Us`, `nom`, `prenom`, `username`, `email`, `tel`, `image`, `password`, `date_ajoute`, `groupe_id`, `res_id`, `activation`, `link_activation`, `contry`, `chef_id`) VALUES
(1, 'abdellah', 'khaddou', 'abdellah', 'abdelah-18@hotmail.com', '0611301802', 'avatar.jpg', '1330dde868ad7c485f92a6a5122b119e3e3373fe', '2019-09-22', 1, 0, 1, '', 'maroc', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contry`
--
ALTER TABLE `contry`
  ADD PRIMARY KEY (`ID_C`);

--
-- Index pour la table `filier`
--
ALTER TABLE `filier`
  ADD PRIMARY KEY (`ID_F`),
  ADD KEY `re_spacialite` (`ID_Spacialite`);

--
-- Index pour la table `filles`
--
ALTER TABLE `filles`
  ADD PRIMARY KEY (`ID_File`),
  ADD KEY `file_module` (`ID_module`),
  ADD KEY `file_user` (`ID_user`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`ID_M`),
  ADD KEY `modulefilier` (`ID_filier`),
  ADD KEY `modulesemester` (`ID_semester`),
  ADD KEY `module_type_filier` (`ID_type_filier`),
  ADD KEY `module_unvirsite` (`ID_unvirsite`),
  ADD KEY `module_user` (`ID_user`);

--
-- Index pour la table `parcours`
--
ALTER TABLE `parcours`
  ADD PRIMARY KEY (`ID_P`),
  ADD KEY `par_filier` (`ID_filier`);

--
-- Index pour la table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`ID_R`),
  ADD KEY `rate_user` (`ID_user`);

--
-- Index pour la table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`ID_Se`);

--
-- Index pour la table `spacialite`
--
ALTER TABLE `spacialite`
  ADD PRIMARY KEY (`ID_S`),
  ADD KEY `re_contry` (`ID_Contry`);

--
-- Index pour la table `typefilier`
--
ALTER TABLE `typefilier`
  ADD PRIMARY KEY (`ID_TF`);

--
-- Index pour la table `unversite`
--
ALTER TABLE `unversite`
  ADD PRIMARY KEY (`ID_U`),
  ADD KEY `unvirsite_contry` (`ID_contryU`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_Us`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contry`
--
ALTER TABLE `contry`
  MODIFY `ID_C` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `filier`
--
ALTER TABLE `filier`
  MODIFY `ID_F` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `filles`
--
ALTER TABLE `filles`
  MODIFY `ID_File` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `ID_M` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `parcours`
--
ALTER TABLE `parcours`
  MODIFY `ID_P` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rate`
--
ALTER TABLE `rate`
  MODIFY `ID_R` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `semester`
--
ALTER TABLE `semester`
  MODIFY `ID_Se` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `spacialite`
--
ALTER TABLE `spacialite`
  MODIFY `ID_S` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `typefilier`
--
ALTER TABLE `typefilier`
  MODIFY `ID_TF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `unversite`
--
ALTER TABLE `unversite`
  MODIFY `ID_U` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID_Us` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `filier`
--
ALTER TABLE `filier`
  ADD CONSTRAINT `re_spacialite` FOREIGN KEY (`ID_Spacialite`) REFERENCES `spacialite` (`ID_S`) ON DELETE CASCADE;

--
-- Contraintes pour la table `filles`
--
ALTER TABLE `filles`
  ADD CONSTRAINT `file_module` FOREIGN KEY (`ID_module`) REFERENCES `module` (`ID_M`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `file_user` FOREIGN KEY (`ID_user`) REFERENCES `users` (`ID_Us`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_type_filier` FOREIGN KEY (`ID_type_filier`) REFERENCES `typefilier` (`ID_TF`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `module_unvirsite` FOREIGN KEY (`ID_unvirsite`) REFERENCES `unversite` (`ID_U`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `module_user` FOREIGN KEY (`ID_user`) REFERENCES `users` (`ID_Us`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `modulefilier` FOREIGN KEY (`ID_filier`) REFERENCES `filier` (`ID_F`) ON DELETE CASCADE,
  ADD CONSTRAINT `modulesemester` FOREIGN KEY (`ID_semester`) REFERENCES `semester` (`ID_Se`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `parcours`
--
ALTER TABLE `parcours`
  ADD CONSTRAINT `par_filier` FOREIGN KEY (`ID_filier`) REFERENCES `filier` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_user` FOREIGN KEY (`ID_user`) REFERENCES `rate` (`ID_R`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `spacialite`
--
ALTER TABLE `spacialite`
  ADD CONSTRAINT `re_contry` FOREIGN KEY (`ID_Contry`) REFERENCES `contry` (`ID_C`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `unversite`
--
ALTER TABLE `unversite`
  ADD CONSTRAINT `unvirsite_contry` FOREIGN KEY (`ID_contryU`) REFERENCES `contry` (`ID_C`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
