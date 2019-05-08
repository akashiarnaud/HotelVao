-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 08 Mai 2019 à 08:43
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `activities`
--

INSERT INTO `activities` (`id`, `nom`, `image`, `rate`) VALUES
(1, 'Food & Wines', 'img_1.jpg', 4),
(2, 'Resort & Spa', 'img_2.jpg', 5),
(3, 'Hotel Rooms', 'img_4.jpg', 4),
(4, 'Yatch Club', 'img_5.jpg', 4);

-- --------------------------------------------------------

--
-- Structure de la table `activitiesdetails`
--

CREATE TABLE `activitiesdetails` (
  `id` int(11) NOT NULL,
  `idActivities` int(11) NOT NULL,
  `nom` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `activitiesdetails`
--

INSERT INTO `activitiesdetails` (`id`, `idActivities`, `nom`, `description`, `image`) VALUES
(1, 1, 'Luxury Food', 'Our menu include Saffron is the most expensive spice in the world, reaching prices beyond $2,000 per pound (depending on season). Saffron is the three stigmas and style of the crocus flower. Each stigma and styl', 'slider-6.jpg'),
(2, 1, 'Very good services', 'Great interactions begin with knowing your customers wants and needs. Customers love personalization. Get to know your customers, remember their names and previous conversations. If needed, make a note of what was discussed previously so you can refer to it the next time you meet.', 'img_1.jpg'),
(3, 2, 'Relaxation over the top', 'Meet our staff who can satisfy all your desire and can relax you', 'img_2.jpg'),
(4, 2, 'View to the sea', 'Here at SeeThroughSea, we strive to inspire, endeavor to explore, place great value in community contribution and seek', 'slider-3.jpg'),
(5, 3, '5 Stars', 'They started a broad promotional campaign to associate a ... The OD Talamanca, a five-star hotel in Ibiza, was the secret location at the end o', 'hero_2.jpg'),
(6, 3, 'Royal rooms', 'The Great Women of Country Tribute Series highlights the works of some of the most prolific and talented musicians the genre has to offer. Each performance will bring together Seattle’s finest musicians to reimagine the works of two featured artists.', 'slider-5.jpg'),
(7, 4, 'Unique Yatch', 'Wooden Boats by Peter Vuong, via Behance Ski Boats, Cool Boats, Small Boats .... 1956 EVINRUDE vintage magazine advertisement "Out of the blue"', 'img_5.jpg'),
(8, 4, 'Luxury board', 'Relevance Yacht offers yachting companies cutting edge yacht marketing and ... Areas of yacht marketing expertise ... Crew Agencies Marketing Luxury Travel ... design, photography, SEO & digital marketing, advertising, merchandising', 'slider-4.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user1` varchar(100) NOT NULL,
  `pass` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `login`
--

INSERT INTO `login` (`id`, `user1`, `pass`) VALUES
(1, 'root', 'root'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `personnel`
--

INSERT INTO `personnel` (`id`, `nom`, `description`, `image`) VALUES
(5, 'Samuel Panini', 'Gérant la propreté des chambre de nos clients', 'person_2.jpg'),
(6, 'Mr Fibonnacci', 'Directeur et Responsable du domaine', 'person_3.jpg'),
(7, 'Laura Tekino', 'Responsable du spa avec massage intégrer', 'person_1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sliders`
--

INSERT INTO `sliders` (`id`, `image`) VALUES
(1, 'slider-1.jpg'),
(2, 'slider-2.jpg'),
(3, 'slider-3.jpg'),
(4, 'slider-4.jpg'),
(5, 'slider-5.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `activitiesdetails`
--
ALTER TABLE `activitiesdetails`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `activitiesdetails`
--
ALTER TABLE `activitiesdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
