-- phpMyAdmin SQL Dump
-- version 5.2.1deb1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 19 sep. 2023 à 10:16
-- Version du serveur : 10.11.3-MariaDB-1
-- Version de PHP : 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rthiba2`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `login` varchar(50) NOT NULL,
  `mdp` varchar(64) NOT NULL,
  `nomAdherent` varchar(50) NOT NULL,
  `prenomAdherent` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `numAuteur` int(11) NOT NULL,
  `nomAuteur` varchar(50) NOT NULL,
  `prenomAuteur` varchar(50) NOT NULL,
  `nationalite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `bd`
--

CREATE TABLE `bd` (
  `numBD` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `anneeParution` int(11) NOT NULL,
  `serie` int(11) DEFAULT NULL,
  `rang` int(11) DEFAULT NULL,
  `etat` int(11) NOT NULL,
  `emprunteur` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `numCategorie` int(11) NOT NULL,
  `nomCategorie` varchar(50) NOT NULL,
  `descriptif` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `est_auteur_de`
--

CREATE TABLE `est_auteur_de` (
  `auteur` int(11) NOT NULL,
  `bd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `numEtat` int(11) NOT NULL,
  `nomEtat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `nationalite`
--

CREATE TABLE `nationalite` (
  `numNationalite` int(11) NOT NULL,
  `nomNationalite` varchar(50) NOT NULL,
  `nomAbrege` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `serie`
--

CREATE TABLE `serie` (
  `numSerie` int(11) NOT NULL,
  `nomSerie` varchar(50) NOT NULL,
  `categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`login`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`numAuteur`),
  ADD KEY `contrainteNationalite` (`nationalite`);

--
-- Index pour la table `bd`
--
ALTER TABLE `bd`
  ADD PRIMARY KEY (`numBD`),
  ADD KEY `contrainteEmprunt` (`emprunteur`),
  ADD KEY `contrainteEtat` (`etat`),
  ADD KEY `contrainteSerie` (`serie`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`numCategorie`);

--
-- Index pour la table `est_auteur_de`
--
ALTER TABLE `est_auteur_de`
  ADD PRIMARY KEY (`auteur`,`bd`),
  ADD KEY `contrainteBD` (`bd`);

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`numEtat`);

--
-- Index pour la table `nationalite`
--
ALTER TABLE `nationalite`
  ADD PRIMARY KEY (`numNationalite`);

--
-- Index pour la table `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`numSerie`),
  ADD KEY `contrainteCategorie` (`categorie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `numAuteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `bd`
--
ALTER TABLE `bd`
  MODIFY `numBD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `numCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `etat`
--
ALTER TABLE `etat`
  MODIFY `numEtat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `nationalite`
--
ALTER TABLE `nationalite`
  MODIFY `numNationalite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `serie`
--
ALTER TABLE `serie`
  MODIFY `numSerie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD CONSTRAINT `contrainteNationalite` FOREIGN KEY (`nationalite`) REFERENCES `nationalite` (`numNationalite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `bd`
--
ALTER TABLE `bd`
  ADD CONSTRAINT `contrainteEmprunt` FOREIGN KEY (`emprunteur`) REFERENCES `adherent` (`login`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `contrainteEtat` FOREIGN KEY (`etat`) REFERENCES `etat` (`numEtat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contrainteSerie` FOREIGN KEY (`serie`) REFERENCES `serie` (`numSerie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `est_auteur_de`
--
ALTER TABLE `est_auteur_de`
  ADD CONSTRAINT `contrainteAuteur` FOREIGN KEY (`auteur`) REFERENCES `auteur` (`numAuteur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contrainteBD` FOREIGN KEY (`bd`) REFERENCES `bd` (`numBD`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `serie`
--
ALTER TABLE `serie`
  ADD CONSTRAINT `contrainteCategorie` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`numCategorie`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
