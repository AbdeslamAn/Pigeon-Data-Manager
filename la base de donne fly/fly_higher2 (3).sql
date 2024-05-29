-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 05 nov. 2023 à 14:02
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fly_higher2`
--

-- --------------------------------------------------------

--
-- Structure de la table `cantact`
--

CREATE TABLE `cantact` (
  `id_cantact` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fullname` varchar(20) DEFAULT NULL,
  `message` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cantact`
--

INSERT INTO `cantact` (`id_cantact`, `email`, `fullname`, `message`) VALUES
(2, 'hamza@gmail.com', 'hamza el amri', 'My pigeons cannot fl');

-- --------------------------------------------------------

--
-- Structure de la table `pedegree`
--

CREATE TABLE `pedegree` (
  `id` int(11) NOT NULL,
  `n_bage` varchar(50) NOT NULL,
  `nam_pig` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `strains` varchar(200) NOT NULL,
  `gender` enum('male','female','yaung') NOT NULL,
  `n_father` varchar(20) NOT NULL,
  `n_mother` varchar(20) NOT NULL,
  `loft_name` varchar(30) NOT NULL,
  `ad_info` varchar(250) NOT NULL,
  `img_dow` varchar(200) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `id_deux` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pedegree`
--

INSERT INTO `pedegree` (`id`, `n_bage`, `nam_pig`, `color`, `strains`, `gender`, `n_father`, `n_mother`, `loft_name`, `ad_info`, `img_dow`, `user_email`, `id_deux`) VALUES
(107, 'MAC-0000-23', 'black', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'dris23', 'fsdqcf', '', 'dris2@gmail.com', 0),
(108, 'MAC-0000-22', 'blu', 'blue', 'arden', 'male', 'MAC-00001-22', 'MAC-00002-22', 'brah123', 'sqdq', 'uploads/IMG-64b52c7e7174c9.47732113.jpg', 'brahim123@gmail.com', 0),
(109, 'MAC-0000-23', 'anssar', 'blue', 'arden', 'male', 'MAC-00001-22', 'MAC-00002-23', 'Anssar', 'uytyutuyty', '', 'dris2@gmail.com', 0),
(110, 'MAC-000011-23', 'Abdeslam', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'nabil', '1er national 400km', '', 'dris2@gmail.com', 0),
(111, 'MAC-0000112-23', 'black', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'dris23', 'hhhhhhhhhhhhhhhhhhh', '', 'dris2@gmail.com', 0),
(112, 'MAC-00001123-23', 'blu', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'dris23', 'mmm', '', 'dris2@gmail.com', 0),
(113, 'MAC-00001124-23', 'blu', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'nabill', 'CXC<WC', '', 'dris2@gmail.com', 0),
(114, 'MAC-00001124-23', 'blu', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'nabil', 'CXC<WC', '', 'dris2@gmail.com', 0),
(115, 'MAC-00001123-23', 'Abdeslam', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'Anssar', 'mmll', '', 'dris2@gmail.com', 0),
(116, 'MAC-0000-23', 'black', 'nbnb,n', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'Anssar', 'qsqssqggggggg', '', 'dris2@gmail.com', 0),
(117, 'MAC-0000-23', 'Abdeslam', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'nabil', 'dsf', 'uploads/IMG-64b90cd26bd5b8.18169515.jpg', 'dris2@gmail.com', 0),
(118, '', 'Abdeslam', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'Anssar', 'jki', '', 'dris2@gmail.com', 0),
(119, 'MAC-0000-23', 'Abdeslam', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'Anssar', 'ggggggggggggggfmm', 'uploads/IMG-64b926396fa657.20204820.jpg', 'dris2@gmail.com', 0),
(120, 'MAC-0000-23', 'Abdeslam', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'loft abdeslam', 'sssss', 'uploads/IMG-64b93e7ab152f1.05278493.jpg', 'dris2@gmail.com', 0),
(121, 'MAC-0000-24', 'black', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'dris', 'mml', 'uploads/IMG-64b94e73258423.87774577.jpg', 'dris2@gmail.com', 0),
(122, 'MAC-1000-23', 'gvnbvnb', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'Anssar', 'llll', 'uploads/IMG-64b951d217be06.99391343.jpg', 'dris2@gmail.com', 0),
(123, 'MAC-1000-23', 'gvnbvnb', 'blue', 'arden', 'male', 'MAC-00022-23', 'MAC-00002-23', 'dris', 'mml', 'uploads/IMG-64b95a8a16bd95.90102169.jpg', 'dris2@gmail.com', 0),
(124, 'MAC-0000-23', 'Abdeslam', 'nbnb,n', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'Anssar', 'llll', 'uploads/IMG-64b95add705a10.06189843.jpg', 'dris2@gmail.com', 0),
(125, 'MAC-2000-23', 'Abdeslam', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'Anssar', 'mmllllkl', 'uploads/IMG-64b95cafb2d828.14895366.jpg', 'dris2@gmail.com', 0),
(126, '', 'Abdeslam', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-000023-23', 'loft abdeslam', 'jjjj', '', 'dris2@gmail.com', 0),
(127, 'MAC-00001123-23', 'gvnbvnb', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'nabil', 'kjhhkh', 'uploads/IMG-64b9652f2a4317.15254352.jpg', 'dris2@gmail.com', 0),
(128, '', 'Abdeslam', 'blue', 'arden', 'male', 'MAC-10022-23', 'MAC-20002-23', 'gfgfgfhg', 'xsssssssssss', '', 'dris2@gmail.com', 0),
(129, '', 'Abdeslam', 'blue', 'arden', 'male', 'MAC-02001-23', 'MAC-00202-23', 'dris23', 'sssssssssssssss', '', 'dris2@gmail.com', 0),
(130, 'MAC-0000-13', 'Abdeslam', 'nbnb,n', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'Anssar', 'kkkkkkkkkkkk', 'uploads/IMG-64b96a4742c8b2.22143175.jpg', 'dris2@gmail.com', 0),
(131, '', 'black', 'nbnb,n', 'arden', 'male', 'MAC-00001-23', 'MAC-000023-23', 'dris', 'ppppppppppp', '', '', 0),
(132, 'MAC-001100-23', 'gvnbvnb', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'Anssar', 'kjkhk', 'uploads/IMG-64b97079b7cf93.00258199.jpg', 'dris2@gmail.com', 0),
(133, '', 'Abdeslam', 'blue', 'arden', 'male', 'MAC-0033001-23', 'MAC-000023-23', 'loft abdeslam', 'kjhgfjl', '', '', 0),
(134, 'MAC-1110-23', 'black armi', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-000023-23', 'loft abdeslam', '5555', 'uploads/IMG-64ba9c9421af07.17935950.jpg', 'dris2@gmail.com', 0),
(135, 'MAC-111-23', 'gvnbvnb', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'gfgfgfhg', 'jjjjjjjjjjjjjjjj', 'uploads/IMG-64ba9cf6de4603.87672608.jpg', 'dris2@gmail.com', 0),
(136, 'MAC-0012-23', 'Abdeslam', 'blue', 'arden', 'male', 'MAC-00001-23', 'MAC-00002-23', 'Anssar', 'lkkl', 'uploads/IMG-64baacc6c14273.00801889.jpg', 'dris2@gmail.com', 0);

-- --------------------------------------------------------

--
-- Structure de la table `pigeon_squab`
--

CREATE TABLE `pigeon_squab` (
  `id_pig_sq` int(11) NOT NULL,
  `n_bage` varchar(30) NOT NULL,
  `date_naiss` date NOT NULL,
  `strains` varchar(100) NOT NULL,
  `pig_squab` enum('pigeon','squab') NOT NULL,
  `color` varchar(20) NOT NULL,
  `name_pig` varchar(20) NOT NULL,
  `gander` enum('male','female') NOT NULL,
  `n_father` varchar(30) NOT NULL,
  `n_mother` varchar(30) NOT NULL,
  `img_pig` varchar(200) NOT NULL,
  `ped_father` varchar(200) NOT NULL,
  `ped_mother` varchar(200) NOT NULL,
  `not_info` varchar(400) NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pigeon_squab`
--

INSERT INTO `pigeon_squab` (`id_pig_sq`, `n_bage`, `date_naiss`, `strains`, `pig_squab`, `color`, `name_pig`, `gander`, `n_father`, `n_mother`, `img_pig`, `ped_father`, `ped_mother`, `not_info`, `user_email`) VALUES
(43, 'MAC-00566-23', '0000-00-00', 'arden', 'pigeon', 'blue', 'black', 'male', 'MAC-00001-23', 'MAC-00002-23', '../../user/php/uploads/IMG-64c407f7bc7366.59151089.jpg', '../../user/php/uploads/IMG-64c407f7bbdef8.03717436.jpg', '../../user/php/uploads/IMG-64c407f7bc1ee9.01397171.jpg', 'lll', 'faty@gmail.com'),
(46, 'MAC-25674-23', '0000-00-00', '', 'pigeon', 'blue', 'black', 'male', 'MAC-35651-23', 'MAC-56352-23', 'uploads/IMG-64c665a4ac1916.48777376.jpg', 'uploads/IMG-64c665a4ab9d10.28602068.jpg', 'uploads/IMG-64c665a4abdce9.04784679.jpg', '1er national 200km   1000p                                           ', 'dris2@gmail.com'),
(49, 'MAC-8955-23', '0000-00-00', '', 'pigeon', 'black', 'black armi', 'male', 'MAC-12542-23', 'MAC-2567-23', 'uploads/IMG-64c68085827f23.20772095.jpg', 'uploads/IMG-64c6808581f713.38049845.jpeg', 'uploads/IMG-64c68085823443.08738119.jpg', '2eme 200km 500p', 'dris2@gmail.com'),
(50, 'MAC-0000-23', '2023-07-19', 'arden', 'squab', '', '', 'male', 'MAC-00001-23', 'MAC-00002-23', '', 'uploads/IMG-64c6970eefbb21.72915352.jpeg', 'uploads/IMG-64c6970ef01230.92632797.jpeg', 'this squab', 'dris2@gmail.com'),
(51, 'MAC-0004-23', '2023-07-13', 'arden', 'squab', '', '', 'male', 'MAC-00001-23', 'MAC-00002-23', '', 'uploads/IMG-64c78710ec8283.87336447.jpeg', 'uploads/IMG-64c78710f1a812.59385620.jpeg', 'this squab is active', 'dris2@gmail.com'),
(53, 'MAC-5620000-23', '2023-09-20', 'arden', 'squab', '', '', 'male', 'MAC-00001-23', 'MAC-00002-23', '', 'uploads/IMG-650cb70fde0dd4.76529333.jpeg', 'uploads/IMG-650cb70fdeb141.61282154.jpeg', 'hhhh', 'jawadbolfk@gmail.com'),
(54, 'MAC-14550004-23', '2023-09-13', 'arden', 'squab', '', '', 'male', 'MAC-00001-23', 'MAC-00002-23', '', 'uploads/IMG-650cb84fb20511.95096838.jpeg', 'uploads/IMG-650cb84fbb9362.08505320.jpeg', 'klmlk', 'jawadbolfk@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `genre` enum('male','female') NOT NULL,
  `type` enum('1','2') NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwordd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `genre`, `type`, `tel`, `email`, `passwordd`) VALUES
(2, 'Abdeslam', 'Anssar', 'male', '2', '0680216882', 'abdslamanssar9999@gmail.com', 'Abdeslam@123'),
(44, 'Abdellah', 'Karia', 'male', '2', '06321162265', 'abdellahkaria12@gmail.com', 'Abdellah123@'),
(51, 'driss23', 'driss333', 'male', '1', '06323221121', 'dris2@gmail.com', 'Driss1234@'),
(67, 'fatima', 'zahra', 'male', '1', '0621235223', 'faty@gmail.com', 'faty123@'),
(69, 'zakaria', 'hosnii', 'male', '1', '0632145678', 'zakaria@gmail.com', 'Zakaria123@'),
(70, 'nabil', 'salhi', 'male', '1', '0632145678', 'nabil@gmail.com', ''),
(71, 'jawad', 'boulafkih', 'male', '1', '06312416566', 'jawadbolfk@gmail.com', 'Jawad123@');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cantact`
--
ALTER TABLE `cantact`
  ADD PRIMARY KEY (`id_cantact`);

--
-- Index pour la table `pedegree`
--
ALTER TABLE `pedegree`
  ADD PRIMARY KEY (`id`),
  ADD KEY `n_father` (`n_father`);

--
-- Index pour la table `pigeon_squab`
--
ALTER TABLE `pigeon_squab`
  ADD PRIMARY KEY (`id_pig_sq`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cantact`
--
ALTER TABLE `cantact`
  MODIFY `id_cantact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `pedegree`
--
ALTER TABLE `pedegree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT pour la table `pigeon_squab`
--
ALTER TABLE `pigeon_squab`
  MODIFY `id_pig_sq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
