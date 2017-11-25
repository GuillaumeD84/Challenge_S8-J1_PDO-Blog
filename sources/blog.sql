-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 20 Novembre 2017 à 16:12
-- Version du serveur :  5.7.17-0ubuntu0.16.04.2
-- Version de PHP :  7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exploblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `titre` varchar(100) NOT NULL,
  `resume` text NOT NULL,
  `corps` text NOT NULL,
  `date_publication` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visionnages` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `auteur_id` tinyint(3) UNSIGNED NOT NULL,
  `categorie_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `resume`, `corps`, `date_publication`, `visionnages`, `auteur_id`, `categorie_id`) VALUES
(1, 'Ivre, j\'ai refait tous les challenges', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2017-11-09 17:28:00', 12, 1, 1),
(2, 'POO or not POO, that is the question', 'La POO est-elle vraiment indispensable pour une architecture solide ? Etude de cas avec PHP.', 'Morbi facilisis suscipit ante id pharetra. Duis efficitur hendrerit tortor, in dapibus dui vehicula sit amet. Morbi vitae quam et justo blandit facilisis non in quam. Maecenas convallis eros arcu, eget mattis libero faucibus vitae. Aenean rutrum nulla ut nunc facilisis, et tempus ipsum tempus. Nunc imperdiet interdum massa, nec hendrerit nisl tristique vel. Integer porta sollicitudin mauris vitae convallis. Pellentesque iaculis, felis id finibus aliquam, ligula odio tincidunt dui, quis pellentesque dolor odio a purus. Fusce vestibulum eu sapien at posuere. Vestibulum fermentum egestas nisl aliquet rhoncus. Ut rhoncus lacinia condimentum. Cras condimentum maximus placerat. Nam ut orci quam.', '2017-11-20 11:49:08', 3, 2, 2),
(3, 'Git, pour les n00bs', 'Un p\'tit récap rapide pour tout ceux qui, comme moi, ont galéré sur ce magnifique outil de versionning.', 'Sed efficitur ligula augue, ut molestie ipsum bibendum sit amet. Donec et venenatis turpis. Duis aliquam enim vel risus malesuada hendrerit. Donec eu vulputate justo, vel accumsan risus. Nulla nec ante consequat, pretium tortor scelerisque, lacinia neque. Nam blandit ultricies tellus, vitae aliquam leo. Cras in scelerisque velit. Suspendisse potenti. Nullam tempus egestas est, sit amet vehicula tortor hendrerit eu. Donec consequat orci dolor, non fermentum eros suscipit quis. Vestibulum luctus at elit eget eleifend. Pellentesque tincidunt maximus ipsum, ut tempor risus accumsan et. Maecenas viverra lobortis nibh a aliquam. Suspendisse sodales interdum dapibus. Quisque metus tellus, dignissim ut molestie ac, dignissim pulvinar odio. Aliquam erat volutpat.', '2017-10-19 10:16:18', 312, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

CREATE TABLE `auteurs` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `nom` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT 'default.jpg',
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `auteurs`
--

INSERT INTO `auteurs` (`id`, `nom`, `image`, `email`) VALUES
(1, 'Vincent', 'vinz.jpg', 'vincent@yahoo.com'),
(2, 'Julie', NULL, 'julie@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `intitule` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `intitule`) VALUES
(1, 'Ma vie de dev'),
(2, 'Teamfront'),
(4, 'Collaboration'),
(5, 'Teamback');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auteur_id` (`auteur_id`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- Index pour la table `auteurs`
--
ALTER TABLE `auteurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `auteurs`
--
ALTER TABLE `auteurs`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
