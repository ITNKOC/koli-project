-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 avr. 2024 à 02:47
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `koli`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id_adresse` int(11) NOT NULL,
  `rue` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `code_postal` varchar(10) NOT NULL,
  `province` varchar(100) NOT NULL,
  `defaut` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `adresseutilisateur`
--

CREATE TABLE `adresseutilisateur` (
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_adresse` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `nomArticle` varchar(100) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `courte_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `statut` varchar(20) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `nomArticle`, `prix`, `courte_description`, `description`, `statut`, `quantite`, `id_categorie`) VALUES
(1, 'magma', 1000.00, 'lksdvlm', 'skdmvmdf', 'disponible', 200, 3),
(2, 'magma', 20.00, 'jiihihih', 'kninonibo', 'rupture', 200, 1),
(3, 'magma', 20.00, 'jiihihih', 'kninonibo', 'rupture', 200, 1),
(4, 'magma', 20.00, 'jiihihih', 'kninonibo', 'rupture', 200, 1),
(5, 'kous', 34.00, 'dsv', 'dsvsdvsdvsvd', 'rupture', 0, 1),
(6, 'kous', 34.00, 'dsv', 'dsvsdvsdvsvd', 'rupture', 0, 1),
(7, 'kous', 34.00, 'dsv', 'dsvsdvsdvsvd', 'rupture', 0, 1),
(8, 'magma', 324234.00, 'kniun', 'jnibi', 'rupture', 200, 1);

-- --------------------------------------------------------

--
-- Structure de la table `articlecommande`
--

CREATE TABLE `articlecommande` (
  `id_article` int(11) DEFAULT NULL,
  `id_commande` int(11) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`) VALUES
(1, 'homme'),
(2, 'femme'),
(3, 'enfant'),
(4, 'lol');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `mode_paiement` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `imagearticle`
--

CREATE TABLE `imagearticle` (
  `id_image` int(11) NOT NULL,
  `id_article` int(11) DEFAULT NULL,
  `chemin_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `imagearticle`
--

INSERT INTO `imagearticle` (`id_image`, `id_article`, `chemin_image`) VALUES
(1, 7, 'assets/images/app.png'),
(2, 8, 'assets/images/server.png');

-- --------------------------------------------------------

--
-- Structure de la table `imageslider`
--

CREATE TABLE `imageslider` (
  `id_image` int(11) NOT NULL,
  `id_slider` int(11) DEFAULT NULL,
  `chemin_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `description`) VALUES
(1, 'admin'),
(2, 'client');

-- --------------------------------------------------------

--
-- Structure de la table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `sousTitre` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `mot_de_passe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id_adresse`);

--
-- Index pour la table `adresseutilisateur`
--
ALTER TABLE `adresseutilisateur`
  ADD KEY `id_adresse` (`id_adresse`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `articlecommande`
--
ALTER TABLE `articlecommande`
  ADD KEY `id_article` (`id_article`),
  ADD KEY `id_commande` (`id_commande`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `imagearticle`
--
ALTER TABLE `imagearticle`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `id_article` (`id_article`);

--
-- Index pour la table `imageslider`
--
ALTER TABLE `imageslider`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `id_slider` (`id_slider`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_role_utilisateur` (`id_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id_adresse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `imagearticle`
--
ALTER TABLE `imagearticle`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `imageslider`
--
ALTER TABLE `imageslider`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adresseutilisateur`
--
ALTER TABLE `adresseutilisateur`
  ADD CONSTRAINT `adresseutilisateur_ibfk_1` FOREIGN KEY (`id_adresse`) REFERENCES `adresse` (`id_adresse`) ON UPDATE CASCADE,
  ADD CONSTRAINT `adresseutilisateur_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `articlecommande`
--
ALTER TABLE `articlecommande`
  ADD CONSTRAINT `articlecommande_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`),
  ADD CONSTRAINT `articlecommande_ibfk_2` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `imagearticle`
--
ALTER TABLE `imagearticle`
  ADD CONSTRAINT `imagearticle_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`);

--
-- Contraintes pour la table `imageslider`
--
ALTER TABLE `imageslider`
  ADD CONSTRAINT `imageslider_ibfk_1` FOREIGN KEY (`id_slider`) REFERENCES `slider` (`id_slider`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_role_utilisateur` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
