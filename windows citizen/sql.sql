-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 16 oct. 2020 à 03:03
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `xwindows`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date`) VALUES
(1, 'redven', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-06-02 21:53:41');

-- --------------------------------------------------------

--
-- Structure de la table `block`
--

CREATE TABLE `block` (
  `id` int(1) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `restart` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `block`
--

INSERT INTO `block` (`id`, `titre`, `nom`, `restart`) VALUES
(1, 'Block', 'Block Game', 'CLICK OR TAP TO RESTART');

-- --------------------------------------------------------

--
-- Structure de la table `calculatrice`
--

CREATE TABLE `calculatrice` (
  `id` int(1) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `victim` varchar(255) NOT NULL,
  `witnesses` varchar(255) NOT NULL,
  `suspect` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `contravention`
--

CREATE TABLE `contravention` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `officier` varchar(255) NOT NULL,
  `given_to` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contravention`
--

INSERT INTO `contravention` (`id`, `name`, `officier`, `given_to`, `price`, `date`) VALUES
(10, 'Panneau stop', 'redven', 'Sky', '90€', '2020-06-10'),
(11, 'viol', 'redven', 'Marween Stross', '15€', '2020-06-05');

-- --------------------------------------------------------

--
-- Structure de la table `fines`
--

CREATE TABLE `fines` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

CREATE TABLE `game` (
  `id` int(1) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `refresh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`id`, `titre`, `refresh`) VALUES
(1, 'Game', 'refresh');

-- --------------------------------------------------------

--
-- Structure de la table `lspdpanel`
--

CREATE TABLE `lspdpanel` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lspdpanel`
--

INSERT INTO `lspdpanel` (`id`, `titre`) VALUES
(1, 'LSPD PANEL');

-- --------------------------------------------------------

--
-- Structure de la table `lspdrecrutement`
--

CREATE TABLE `lspdrecrutement` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lspdrecrutement`
--

INSERT INTO `lspdrecrutement` (`id`, `titre`) VALUES
(1, 'LSPD Recrutement');

-- --------------------------------------------------------

--
-- Structure de la table `lspd_presentation`
--

CREATE TABLE `lspd_presentation` (
  `id` int(1) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `nav_accueil` varchar(255) NOT NULL,
  `nav_a_propos` varchar(255) NOT NULL,
  `nav_recrutement` varchar(255) NOT NULL,
  `text_lspd_accueil` varchar(255) NOT NULL,
  `text_devise_accueil` varchar(255) NOT NULL,
  `sous_titre_accueil` varchar(255) NOT NULL,
  `histoire_titre_accueil` varchar(255) NOT NULL,
  `histoire_sous_titre_accueil` varchar(255) NOT NULL,
  `histoire_description_accueil` longtext NOT NULL,
  `join_accueil` varchar(255) NOT NULL,
  `histoire_titre_a_propos` varchar(255) NOT NULL,
  `histoire_sous_titre_a_propos` varchar(255) NOT NULL,
  `description1_a_propos` longtext NOT NULL,
  `description2_a_propos` longtext NOT NULL,
  `description_recrutement` longtext NOT NULL,
  `nom_recrutement` varchar(255) NOT NULL,
  `id_discord_recrutement` varchar(255) NOT NULL,
  `candidature_recrutement` varchar(255) NOT NULL,
  `success_recrutement` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lspd_presentation`
--

INSERT INTO `lspd_presentation` (`id`, `titre`, `nav_accueil`, `nav_a_propos`, `nav_recrutement`, `text_lspd_accueil`, `text_devise_accueil`, `sous_titre_accueil`, `histoire_titre_accueil`, `histoire_sous_titre_accueil`, `histoire_description_accueil`, `join_accueil`, `histoire_titre_a_propos`, `histoire_sous_titre_a_propos`, `description1_a_propos`, `description2_a_propos`, `description_recrutement`, `nom_recrutement`, `id_discord_recrutement`, `candidature_recrutement`, `success_recrutement`) VALUES
(1, 'LSPD Presentation', 'Accueil', 'À propos', 'Recrutement', 'LSPD', '« Obéir et survivre. »', 'VOTRE&nbsp;SÉCURITÉ NOTRE PRIORITÉ', 'Notre histoire', 'LSPD', 'Voici l\'endroit pour votre texte. Cliquez ici et commencez à taper.&nbsp;Quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim.', 'La LSPD recrute ! Rejoignez nous.', 'Notre histoire', 'LSPD', 'Voici l\'endroit pour votre texte. Cliquez ici et commencez à taper.&nbsp;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab. Adipisci velit sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem ut enim ad minima veniam quis nostrum exercitationem ullam corporis.', 'Voici l\'endroit pour votre texte. Cliquez ici et commencez à taper.&nbsp;Veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas sit aspernatur aut. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores. Veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam est qui.', 'Si vous souhaitez intégrer la LSPD veuillez remplir ce formulaire et fournis toutes les informations requises.', 'Nom et prénom', 'ID Discord', 'Candidature', 'Votre candidature a bien été envoyer');

-- --------------------------------------------------------

--
-- Structure de la table `lspd_recrutement`
--

CREATE TABLE `lspd_recrutement` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `candidature` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lspd_recrutement`
--

INSERT INTO `lspd_recrutement` (`id`, `nom`, `phone`, `candidature`, `date`) VALUES
(4, 'Marween Stross', '55-911', 'Salut a tous les ami pour ce qui me connase pas vos grand mere les tirokoloks', '2020-10-11 14:10:29');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`) VALUES
(5, 'Titre', 'Description', '2020-06-10 17:23:15');

-- --------------------------------------------------------

--
-- Structure de la table `rob`
--

CREATE TABLE `rob` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `object` varchar(255) NOT NULL,
  `suspect` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `date`) VALUES
(6, 'marween stross', '123', '2020-06-03 12:36:57');

-- --------------------------------------------------------

--
-- Structure de la table `users_police`
--

CREATE TABLE `users_police` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users_police`
--

INSERT INTO `users_police` (`id`, `username`, `pass`, `date`) VALUES
(1, 'redven', '3c4ae26dad3a3e0e05b250857b2da911f5637c74', '2020-10-09 18:01:56');

-- --------------------------------------------------------

--
-- Structure de la table `vehicle_theft`
--

CREATE TABLE `vehicle_theft` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `plate` varchar(255) NOT NULL,
  `suspect` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `wanted_notice`
--

CREATE TABLE `wanted_notice` (
  `id` int(11) NOT NULL,
  `wanted_person` varchar(255) NOT NULL,
  `officier` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `wanted_notice`
--

INSERT INTO `wanted_notice` (`id`, `wanted_person`, `officier`, `date`) VALUES
(5, 'Sky', 'marween stross', '1010-01-02');

-- --------------------------------------------------------

--
-- Structure de la table `windows_settings`
--

CREATE TABLE `windows_settings` (
  `id` int(1) NOT NULL,
  `url_windows` longtext NOT NULL,
  `fond_ecran` longtext NOT NULL,
  `user_img_menu_windows` longtext NOT NULL,
  `nom_utilisateur_menu_windows` varchar(255) NOT NULL,
  `explorateur_fichiers_menu_windows` varchar(255) NOT NULL,
  `bloc_note_menu_windows` varchar(255) NOT NULL,
  `toutes_applications_menu_windows` varchar(255) NOT NULL,
  `barre_recherche_menu_windows` varchar(255) NOT NULL,
  `icon_explorateur_fichiers_menu_windows` varchar(255) NOT NULL,
  `redemarrer_menu_windows` varchar(255) NOT NULL,
  `explorateur_fichiers_application` varchar(255) NOT NULL,
  `bloc_note_application` varchar(255) NOT NULL,
  `img_application_game` longtext NOT NULL,
  `img_application_block` longtext NOT NULL,
  `img_application_calculatrice` longtext NOT NULL,
  `img_application_lspd_presentation` longtext NOT NULL,
  `img_application_lspdpanel` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `windows_settings`
--

INSERT INTO `windows_settings` (`id`, `url_windows`, `fond_ecran`, `user_img_menu_windows`, `nom_utilisateur_menu_windows`, `explorateur_fichiers_menu_windows`, `bloc_note_menu_windows`, `toutes_applications_menu_windows`, `barre_recherche_menu_windows`, `icon_explorateur_fichiers_menu_windows`, `redemarrer_menu_windows`, `explorateur_fichiers_application`, `bloc_note_application`, `img_application_game`, `img_application_block`, `img_application_calculatrice`, `img_application_lspd_presentation`, `img_application_lspdpanel`) VALUES
(1, 'http://localhost/fivem%20script/windowsscriptcivil/launch/on/', 'https://wallpaperaccess.com/full/84248.png', 'https://www.xovi.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png', 'Marween', 'Explorateur de fichiers', 'Bloc Notes', 'Toutes les applications', 'Rechercher', 'Explorateur de fichiers', 'Redémarrer', 'Explorateur de fichiers', 'Bloc Notes', 'https://s1.mzstatic.com/us/r1000/064/Purple2/v4/f6/a2/8d/f6a28df3-727d-ba25-1ca9-2c64d72b5578/mzl.lzltxkhk.png', 'https://s1.mzstatic.com/us/r1000/064/Purple2/v4/f6/a2/8d/f6a28df3-727d-ba25-1ca9-2c64d72b5578/mzl.lzltxkhk.png', 'https://s1.mzstatic.com/us/r1000/064/Purple2/v4/f6/a2/8d/f6a28df3-727d-ba25-1ca9-2c64d72b5578/mzl.lzltxkhk.png', 'https://s1.mzstatic.com/us/r1000/064/Purple2/v4/f6/a2/8d/f6a28df3-727d-ba25-1ca9-2c64d72b5578/mzl.lzltxkhk.png', 'https://s1.mzstatic.com/us/r1000/064/Purple2/v4/f6/a2/8d/f6a28df3-727d-ba25-1ca9-2c64d72b5578/mzl.lzltxkhk.png');

-- --------------------------------------------------------

--
-- Structure de la table `windows_settings_police`
--

CREATE TABLE `windows_settings_police` (
  `id` int(1) NOT NULL,
  `url_windows` longtext NOT NULL,
  `fond_ecran` longtext NOT NULL,
  `user_img_menu_windows` longtext NOT NULL,
  `nom_utilisateur_menu_windows` varchar(255) NOT NULL,
  `explorateur_fichiers_menu_windows` varchar(255) NOT NULL,
  `bloc_note_menu_windows` varchar(255) NOT NULL,
  `toutes_applications_menu_windows` varchar(255) NOT NULL,
  `barre_recherche_menu_windows` varchar(255) NOT NULL,
  `icon_explorateur_fichiers_menu_windows` varchar(255) NOT NULL,
  `redemarrer_menu_windows` varchar(255) NOT NULL,
  `explorateur_fichiers_application` varchar(255) NOT NULL,
  `bloc_note_application` varchar(255) NOT NULL,
  `img_application_game` longtext NOT NULL,
  `img_application_block` longtext NOT NULL,
  `img_application_calculatrice` longtext NOT NULL,
  `img_application_lspd_presentation` longtext NOT NULL,
  `img_application_lspdpanel` longtext NOT NULL,
  `img_application_lspdrecrutement` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `windows_settings_police`
--

INSERT INTO `windows_settings_police` (`id`, `url_windows`, `fond_ecran`, `user_img_menu_windows`, `nom_utilisateur_menu_windows`, `explorateur_fichiers_menu_windows`, `bloc_note_menu_windows`, `toutes_applications_menu_windows`, `barre_recherche_menu_windows`, `icon_explorateur_fichiers_menu_windows`, `redemarrer_menu_windows`, `explorateur_fichiers_application`, `bloc_note_application`, `img_application_game`, `img_application_block`, `img_application_calculatrice`, `img_application_lspd_presentation`, `img_application_lspdpanel`, `img_application_lspdrecrutement`) VALUES
(1, 'http://localhost/fivem%20script/windowsscriptpolice/launch/on/', 'https://i.pinimg.com/originals/e9/7b/d3/e97bd3c62c0f0cf3e5f8f76d6bb64425.webp', 'https://www.xovi.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png', 'Marween', 'Explorateur de fichiers', 'Bloc Notes', 'Toutes les applications', 'Rechercher', 'Explorateur de fichiers', 'Redémarrer', 'Explorateur de fichiers', 'Bloc Notes', 'https://s1.mzstatic.com/us/r1000/064/Purple2/v4/f6/a2/8d/f6a28df3-727d-ba25-1ca9-2c64d72b5578/mzl.lzltxkhk.png', 'https://s1.mzstatic.com/us/r1000/064/Purple2/v4/f6/a2/8d/f6a28df3-727d-ba25-1ca9-2c64d72b5578/mzl.lzltxkhk.png', 'https://s1.mzstatic.com/us/r1000/064/Purple2/v4/f6/a2/8d/f6a28df3-727d-ba25-1ca9-2c64d72b5578/mzl.lzltxkhk.png', 'https://s1.mzstatic.com/us/r1000/064/Purple2/v4/f6/a2/8d/f6a28df3-727d-ba25-1ca9-2c64d72b5578/mzl.lzltxkhk.png', 'https://s1.mzstatic.com/us/r1000/064/Purple2/v4/f6/a2/8d/f6a28df3-727d-ba25-1ca9-2c64d72b5578/mzl.lzltxkhk.png', 'https://s1.mzstatic.com/us/r1000/064/Purple2/v4/f6/a2/8d/f6a28df3-727d-ba25-1ca9-2c64d72b5578/mzl.lzltxkhk.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `calculatrice`
--
ALTER TABLE `calculatrice`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contravention`
--
ALTER TABLE `contravention`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fines`
--
ALTER TABLE `fines`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lspdpanel`
--
ALTER TABLE `lspdpanel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lspdrecrutement`
--
ALTER TABLE `lspdrecrutement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lspd_presentation`
--
ALTER TABLE `lspd_presentation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lspd_recrutement`
--
ALTER TABLE `lspd_recrutement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rob`
--
ALTER TABLE `rob`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_police`
--
ALTER TABLE `users_police`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicle_theft`
--
ALTER TABLE `vehicle_theft`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wanted_notice`
--
ALTER TABLE `wanted_notice`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `windows_settings`
--
ALTER TABLE `windows_settings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `windows_settings_police`
--
ALTER TABLE `windows_settings_police`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `block`
--
ALTER TABLE `block`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `calculatrice`
--
ALTER TABLE `calculatrice`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contravention`
--
ALTER TABLE `contravention`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `fines`
--
ALTER TABLE `fines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `lspdpanel`
--
ALTER TABLE `lspdpanel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `lspdrecrutement`
--
ALTER TABLE `lspdrecrutement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `lspd_presentation`
--
ALTER TABLE `lspd_presentation`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `lspd_recrutement`
--
ALTER TABLE `lspd_recrutement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `rob`
--
ALTER TABLE `rob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users_police`
--
ALTER TABLE `users_police`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `vehicle_theft`
--
ALTER TABLE `vehicle_theft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `wanted_notice`
--
ALTER TABLE `wanted_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `windows_settings`
--
ALTER TABLE `windows_settings`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `windows_settings_police`
--
ALTER TABLE `windows_settings_police`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
