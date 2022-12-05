-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db:3306
-- Généré le : sam. 03 déc. 2022 à 12:12
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quizz_hero`
--

-- --------------------------------------------------------

--
-- Structure de la table `qh_questions`
--

CREATE TABLE `qh_questions` (
  `id` int NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `type` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `question` text,
  `reponses` text,
  `views` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `qh_questions`
--

INSERT INTO `qh_questions` (`id`, `status`, `type`, `author`, `timestamp`, `question`, `reponses`, `views`) VALUES
(1, 0, 'qcm', 'admin', '2022-12-03 12:07:03', 'Rouge ou bleu ?', 'a:0:{}', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `qh_questions`
--
ALTER TABLE `qh_questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `TIME` (`timestamp`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `qh_questions`
--
ALTER TABLE `qh_questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
