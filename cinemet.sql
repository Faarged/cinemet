-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 13 Mai 2019 à 11:16
-- Version du serveur :  5.7.26-0ubuntu0.19.04.1
-- Version de PHP :  7.2.17-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cinemet`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE `acteur` (
  `id_acteur` int(11) NOT NULL,
  `nom_acteur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `acteur`
--

INSERT INTO `acteur` (`id_acteur`, `nom_acteur`) VALUES
(1, 'Jack Nicholson'),
(2, 'Keanu Reeves'),
(3, 'Robert Downey JR'),
(4, 'Chris Evans'),
(5, 'Mark Ruffalo'),
(6, 'Scarlett Johannson'),
(7, 'Kristen Connoly'),
(8, 'Jean Reno'),
(9, 'Christian Clavier'),
(10, 'Valérie Lemercier'),
(11, 'Justice Smith'),
(12, 'Kim Basinger'),
(13, 'Jack Palance'),
(14, 'Martin Freeman'),
(15, 'Richard Armitage'),
(16, 'Sonic');

-- --------------------------------------------------------

--
-- Structure de la table `fait`
--

CREATE TABLE `fait` (
  `id_real` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fait`
--

INSERT INTO `fait` (`id_real`, `id_film`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 3),
(5, 3),
(6, 4),
(7, 5),
(8, 6),
(9, 7),
(10, 8),
(11, 9);

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `duree` time NOT NULL,
  `affiche` varchar(255) NOT NULL,
  `date_sortie` date NOT NULL,
  `resume` longtext NOT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`id_film`, `titre`, `duree`, `affiche`, `date_sortie`, `resume`, `trailer`) VALUES
(1, 'shining', '02:00:00', 'https://images-na.ssl-images-amazon.com/images/I/514AvxAupxL.jpg', '1980-10-16', 'Jack Torrance, gardien d\'un hôtel fermé l\'hiver, sa femme et son fils Danny s\'apprêtent à vivre de longs mois de solitude. Danny, qui possède un don de médium, le \"Shining\", est effrayé à l\'idée d\'habiter ce lieu, théâtre marqué par de terribles évèn', 'https://www.youtube.com/embed/DL_GjZglYz8\"'),
(2, 'matrix', '02:15:00', 'http://fr.web.img6.acsta.net/medias/04/34/49/043449_af.jpg', '1999-06-23', 'Les humains vivent dans la matrice, entièrement gérée par une ia', 'https://www.youtube.com/embed/8xx91zoASLY'),
(3, 'Avengers: Endgame', '03:00:58', 'http://fr.web.img4.acsta.net/r_1280_720/pictures/19/03/26/17/22/0896830.jpg', '2019-04-24', 'Thanos ayant anéanti la moitié de l’univers, les Avengers restants resserrent les rangs dans ce vingt-deuxième film des Studios Marvel, grande conclusion d’un des chapitres de l’Univers Cinématographique Marvel. ', 'https://www.youtube.com/embed/wV-Q0o2OQjQ\" frameborder=\"0\" allow='),
(4, 'La cabane dans les bois', '01:35:00', 'https://marvelll.fr/wp-content/uploads/2012/05/la-cabane-dans-les-bois-affiche-france.jpg', '2012-05-02', 'Cinq amis partent passer le week-end dans une cabane perdue au fond des bois. Ils n’ont aucune idée du cauchemar qui les y attend, ni de ce que cache vraiment la cabane dans les bois…\r\n', 'https://www.youtube.com/embed/lZMV-kj85Kc'),
(5, 'les visiteurs', '01:43:00', 'http://fr.web.img6.acsta.net/r_1920_1080/medias/nmedia/18/36/07/69/18659413.jpg', '1993-01-27', 'Comment en l\'an de grace 1112 le comte de Montmirail et son fidele ecuyer, Jacquouille la Fripouille, vont se retrouver propulses en l\'an 1992 apres avoir bu une potion magique fabriquee par l\'enchanteur Eusaebius', 'https://www.youtube.com/embed/nT1XlVVzKB4'),
(6, 'pokemon detective pikachu', '01:44:00', 'http://fr.web.img3.acsta.net/r_1920_1080/pictures/18/11/13/14/45/5793006.jpg', '2019-05-08', 'Après la disparition mystérieuse de Harry Goodman, un détective privé, son fils Tim va tenter de découvrir ce qui s’est passé. Le détective Pikachu, ancien partenaire de Harry, participe alors à l’enquête : un super-détective adorable', 'https://www.youtube.com/embed/BaLO9MbIfXI'),
(7, 'Batman', '02:05:00', 'http://fr.web.img6.acsta.net/r_1920_1080/pictures/17/11/03/16/30/4890192.jpg', '1989-09-13', 'Le célèbre et impitoyable justicier, Batman, est de retour. Plus beau, plus fort et plus dépoussiéré que jamais, il s\'apprête à nettoyer Gotham City et à affronter le terrible Joker...', 'https://www.youtube.com/embed/R8IEtY77tds'),
(8, 'Le hobbit: la bataille des cinq armées', '02:24:00', 'http://fr.web.img3.acsta.net/r_1920_1080/pictures/14/11/14/17/43/568445.jpg', '2014-12-10', 'Atteignant enfin la Montagne Solitaire, Thorin et les Nains, aidés par Bilbon le Hobbit, ont réussi à récupérer leur royaume et leur trésor. Mais ils ont également réveillé le dragon Smaug qui déchaîne désormais sa colère sur les habitants de Lac-ville. A présent, les Nains, les Elfes, les Humains mais aussi les Wrags et les Orques menés par le Nécromancien, convoitent les richesses de la Montagne Solitaire. La bataille des cinq armées est imminente et Bilbon est le seul à pouvoir unir ses amis contre les puissances obscures de Sauron.', 'https://www.youtube.com/embed/E5qN3zUF3Rw'),
(9, 'Sonic (test)', '01:47:00', 'http://fr.web.img3.acsta.net/r_1920_1080/pictures/18/12/10/15/55/5364228.jpg', '2019-05-17', 'je test ma super page admin bien dégueue', 'https://www.youtube.com/embed/Q1cdiNgoPq0');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `type`) VALUES
(1, 'action'),
(2, 'horreur'),
(3, 'comedie'),
(4, 'thriller'),
(5, 'drame'),
(6, 'romantique');

-- --------------------------------------------------------

--
-- Structure de la table `joue`
--

CREATE TABLE `joue` (
  `id_acteur` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `joue`
--

INSERT INTO `joue` (`id_acteur`, `id_film`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 4),
(8, 5),
(9, 5),
(10, 5),
(11, 6),
(1, 7),
(12, 7),
(13, 7),
(14, 8),
(15, 8),
(16, 9);

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

CREATE TABLE `possede` (
  `id_genre` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `possede`
--

INSERT INTO `possede` (`id_genre`, `id_film`) VALUES
(4, 1),
(1, 2),
(1, 3),
(2, 4),
(5, 4),
(3, 5),
(3, 6),
(4, 6),
(1, 7),
(4, 7),
(1, 8),
(1, 9),
(2, 9),
(5, 9);

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

CREATE TABLE `realisateur` (
  `id_real` int(11) NOT NULL,
  `nom_real` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `realisateur`
--

INSERT INTO `realisateur` (`id_real`, `nom_real`) VALUES
(1, 'Stanley Kubrick'),
(2, 'Lana Wachowski'),
(3, 'Lilly Wachowski'),
(4, 'Joe Russo'),
(5, 'Anthony Russo'),
(6, 'Drew Goddard'),
(7, 'Jean-Marie Poiré'),
(8, 'Rob Letterman'),
(9, 'Tim Burton'),
(10, 'Peter Jackson'),
(11, 'Sonic');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`id_acteur`);

--
-- Index pour la table `fait`
--
ALTER TABLE `fait`
  ADD PRIMARY KEY (`id_real`,`id_film`),
  ADD KEY `fait_film0_FK` (`id_film`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Index pour la table `joue`
--
ALTER TABLE `joue`
  ADD PRIMARY KEY (`id_acteur`,`id_film`),
  ADD KEY `joue_film0_FK` (`id_film`);

--
-- Index pour la table `possede`
--
ALTER TABLE `possede`
  ADD PRIMARY KEY (`id_genre`,`id_film`),
  ADD KEY `possede_film0_FK` (`id_film`);

--
-- Index pour la table `realisateur`
--
ALTER TABLE `realisateur`
  ADD PRIMARY KEY (`id_real`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `id_acteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `realisateur`
--
ALTER TABLE `realisateur`
  MODIFY `id_real` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `fait`
--
ALTER TABLE `fait`
  ADD CONSTRAINT `fait_film0_FK` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `fait_realisateur_FK` FOREIGN KEY (`id_real`) REFERENCES `realisateur` (`id_real`);

--
-- Contraintes pour la table `joue`
--
ALTER TABLE `joue`
  ADD CONSTRAINT `joue_acteur_FK` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`),
  ADD CONSTRAINT `joue_film0_FK` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`);

--
-- Contraintes pour la table `possede`
--
ALTER TABLE `possede`
  ADD CONSTRAINT `possede_film0_FK` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `possede_genre_FK` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
