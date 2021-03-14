-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 21 mai 2020 à 11:28
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cms_database`
--

-- --------------------------------------------------------

--
-- Structure de la table `cms_lang`
--

CREATE TABLE `cms_lang` (
  `string_id` int(11) NOT NULL,
  `str_key` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `language` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cms_lang`
--

INSERT INTO `cms_lang` (`string_id`, `str_key`, `text`, `language`) VALUES
(1, 'account_manage', 'Mon compte', 'fr'),
(2, 'account_settings', 'Gestion de Compte', 'fr'),
(3, 'all_rights_reserved', 'Tous droits réservés.', 'fr'),
(4, 'community', 'Communauté', 'fr'),
(5, 'developped_by', 'Développé par <b>Ramlethal</b>.', 'fr'),
(6, 'disconnect', 'Déconnexion', 'fr'),
(7, 'discord', 'Discord', 'fr'),
(8, 'discord_link', 'http://intersectcms.localhost/#disc', 'fr'),
(9, 'discuss_with_players', 'Discuter avec les joueurs', 'fr'),
(10, 'donate', 'Donation', 'fr'),
(11, 'download', 'Téléchargement', 'fr'),
(12, 'encyclopedia', 'Wiki', 'fr'),
(13, 'facebook', 'Facebook', 'fr'),
(14, 'facebook_link', 'http://intersectcms.localhost/#fb', 'fr'),
(15, 'follow_us_on_facebook', 'Suivez-nous sur Facebook', 'fr'),
(16, 'follow_us_on_twitter', 'Suivez-nous sur Twitter', 'fr'),
(17, 'forum', 'Forum', 'fr'),
(18, 'forum_link', 'http://intersectcms.localhost/#forum', 'fr'),
(19, 'game', 'Le Jeu', 'fr'),
(20, 'game_min_desc', 'MMORPG Free to Play en 2D', 'fr'),
(21, 'game_title', 'Mon jeu', 'fr'),
(22, 'graphic_concept_by', 'Conception graphique par <b>Nicow - wb x dsg</b>.', 'fr'),
(23, 'home', 'Accueil', 'fr'),
(24, 'join_our_community', 'Rejoindre notre communauté', 'fr'),
(25, 'join_our_community_desc', '<strong>Vous ne pourrez jouer sur notre jeu qu\'une fois votre compte crée.</strong><br>Aucune validation par e-mail n\'est requise, cependant veillez à mettre un <strong>e-mail correct</strong> en cas de <strong>perte de mot de passe</strong> !', 'fr'),
(26, 'leaders', 'Classements', 'fr'),
(27, 'leader_environment', 'Environnement', 'fr'),
(28, 'leader_player_class', 'Classe', 'fr'),
(29, 'leader_player_exp', 'EXP', 'fr'),
(30, 'leader_player_level', 'Niveau', 'fr'),
(31, 'leader_player_name', 'Personnage', 'fr'),
(32, 'leader_pve_title', 'Classement Joueur vs Environnement', 'fr'),
(33, 'leader_title', 'Classement Joueur', 'fr'),
(34, 'login_account', 'Nom de compte', 'fr'),
(35, 'login_log_me', 'Me connecter', 'fr'),
(36, 'login_password', 'Mot de passe', 'fr'),
(37, 'login_success', 'Connexion réussie - Bienvenue', 'fr'),
(38, 'login_success_desc', 'Vous êtes maintenant connecté', 'fr'),
(39, 'login_to_site', 'Se connecter au site', 'fr'),
(40, 'login_to_site_desc', 'Connectez-vous dès maintenant à votre compte !', 'fr'),
(41, 'logout_success', 'Déconnexion réussie', 'fr'),
(42, 'logout_success_desc', 'Vous êtes maintenant déconnecté', 'fr'),
(43, 'news', 'Actualités', 'fr'),
(44, 'news_by', 'par', 'fr'),
(45, 'news_posted_on', 'Publié le', 'fr'),
(46, 'news_reed_more', 'Lire la suite', 'fr'),
(47, 'profil', 'Profil', 'fr'),
(48, 'register', 'Inscription', 'fr'),
(49, 'register_account', 'Nom de compte', 'fr'),
(50, 'register_email', 'Adresse e-mail', 'fr'),
(51, 'register_form_name', 'Formulaire d\'Inscription', 'fr'),
(52, 'register_password', 'Mot de passe', 'fr'),
(53, 'register_password_confirm', 'Confirmation', 'fr'),
(54, 'register_register_button', 'S\'enregistrer', 'fr'),
(55, 'shop', 'Boutique', 'fr'),
(56, 'twitter', 'Twitter', 'fr'),
(57, 'twitter_link', 'http://intersectcms.localhost/#tw', 'fr'),
(58, 'shop_cat_all', 'Tout', 'fr'),
(59, 'shop_cat_items', 'Equipements', 'fr'),
(60, 'shop_cat_usable', 'Consommables', 'fr'),
(61, 'shop_cat_money', 'Monnaie', 'fr'),
(62, 'shop_cat_spells', 'Sorts', 'fr'),
(63, 'shop_cat_events', 'Events', 'fr'),
(64, 'shop_cat_bags', 'Sacs', 'fr'),
(65, 'login_panel_login', 'Se connecter', 'fr'),
(66, 'login_panel_register', 'S\'enregistrer', 'fr'),
(67, 'menu_server_state', 'Etat du serveur', 'fr'),
(68, 'menu_server_online', 'En ligne', 'fr'),
(69, 'menu_server_player', 'Joueur', 'fr'),
(70, 'menu_server_offline', 'Hors ligne', 'fr'),
(71, 'menu_administration_title', 'Administration', 'fr'),
(72, 'menu_administration_desc', 'Gérer le CMS', 'fr'),
(73, 'menu_my_profile', 'Mon profil', 'fr'),
(74, 'points', 'Points', 'fr'),
(75, 'administration_title', 'Administration', 'fr'),
(76, 'administration_news_title', 'Gérer les news', 'fr'),
(77, 'administration_shop_title', 'Gérer la boutique', 'fr'),
(78, 'administration_pages_title', 'Gérer les pages', 'fr'),
(79, 'administration_settings_title', 'Gérer les paramètres', 'fr'),
(80, 'administration_access_title', 'Accéder', 'fr'),
(81, 'administration_edit_news_title', 'Administration', 'fr'),
(82, 'administration_edit_news_title', 'Editer une news', 'fr'),
(83, 'administration_add_news_title', 'Ajouter une news', 'fr'),
(84, 'administration_news_title_placeholder', 'Titre de la news', 'fr'),
(85, 'administration_news_list_title', 'Nos news', 'fr'),
(86, 'administration_news_column_title', 'Titre', 'fr'),
(87, 'administration_news_column_date', 'Date', 'fr'),
(88, 'administration_news_column_image', 'Image', 'fr'),
(89, 'administration_news_column_options', 'Options', 'fr'),
(90, 'administration_item_options_edit', 'Editer', 'fr'),
(91, 'administration_item_options_delete', 'Supprimer', 'fr'),
(92, 'administration_tinymce_lang', 'fr_FR', 'fr'),
(93, 'administration_tinymce_fav', 'Favoris', 'fr'),
(94, 'button_submit_title', 'ENVOYER', 'fr'),
(95, 'administration_edit_pages_title', 'Editer une page', 'fr'),
(96, 'administration_add_pages_title', 'Ajouter une page', 'fr'),
(97, 'administration_page_title_placeholder', 'Titre page', 'fr'),
(98, 'administration_page_slug_placeholder', 'Slug page', 'fr'),
(99, 'administration_pages_column_title', 'Titre', 'fr'),
(100, 'administration_pages_column_slug', 'Slug', 'fr'),
(101, 'administration_pages_column_category', 'Catégorie', 'fr'),
(102, 'administration_pages_column_options', 'Options', 'fr'),
(103, 'administration_page_cat_game', 'Le Jeu', 'fr'),
(104, 'administration_page_cat_wiki', 'Wiki', 'fr'),
(105, 'administration_page_list_title', 'Les pages', 'fr'),
(106, 'administration_edit_shop_title', 'Editer un article en boutique', 'fr'),
(107, 'administration_add_shop_title', 'Ajouter un article en boutique', 'fr'),
(108, 'administration_shop_title_placeholder', 'Nom de l\'objet (automatique)', 'fr'),
(109, 'administration_shop_id_placeholder', 'ID de l\'objet', 'fr'),
(110, 'administration_shop_price_placeholder', 'Prix', 'fr'),
(111, 'administration_shop_list_title', 'Les autres articles en boutique', 'fr'),
(112, 'administration_shop_column_title', 'Item', 'fr'),
(113, 'administration_shop_column_description', 'Description', 'fr'),
(114, 'administration_shop_column_image', 'Image', 'fr'),
(115, 'administration_shop_column_price', 'Prix', 'fr'),
(116, 'administration_shop_column_options', 'Options', 'fr'),
(117, 'buy_credits_title', 'Recharger', 'fr'),
(118, 'my_account_personnal_informations_title', 'Informations personnelles', 'fr'),
(119, 'my_account_username', 'Nom de compte', 'fr'),
(120, 'my_account_email', 'Adresse mail', 'fr'),
(121, 'my_account_editor_access', 'Accès Editeur', 'fr'),
(122, 'my_account_yes', 'OUI', 'fr'),
(123, 'my_account_no', 'NON', 'fr'),
(124, 'my_account_api_access', 'Accès API', 'fr'),
(125, 'my_account_admin_access', 'Accès Admin', 'fr'),
(126, 'my_account_my_characters', 'Mes personnages', 'fr'),
(127, 'my_account_player_name', 'Personnage', 'fr'),
(128, 'my_account_player_sexe', 'Genre', 'fr'),
(129, 'my_account_player_class', 'Classe', 'fr'),
(130, 'my_account_player_level', 'Niveau', 'fr'),
(131, 'my_account_player_exp', 'EXP', 'fr'),
(132, 'my_account_email', 'Adresse mail', 'fr'),
(133, 'shop_buy_button', 'Acheter', 'fr'),
(134, 'itemstats_weapon_stats_title', 'Caractéristiques de l\'arme', 'fr'),
(135, 'itemstats_damages', 'Dommages', 'fr'),
(136, 'itemstats_damagestype', 'Type de dégâts', 'fr'),
(137, 'itemstats_scalingstat', 'Stat de Scale', 'fr'),
(138, 'itemstats_scalingamount', 'Montant de Scale', 'fr'),
(139, 'itemstats_damagestype_physical', 'Physiques', 'fr'),
(140, 'itemstats_damagestype_magical', 'Magiques', 'fr'),
(141, 'itemstats_damagestype_true', 'True', 'fr'),
(142, 'itemstats_stat_atk', 'Attaque', 'fr'),
(143, 'itemstats_stat_abpwr', 'Puissance Magique', 'fr'),
(144, 'itemstats_stat_def', 'Défense', 'fr'),
(145, 'itemstats_stat_magres', 'Résistance Magique', 'fr'),
(146, 'itemstats_stat_spd', 'Vitesse', 'fr'),
(147, 'itemstats_vitals_title', 'Bonus vitaux', 'fr'),
(148, 'itemstats_vitals_hp', 'PV', 'fr'),
(149, 'itemstats_vitals_mp', 'PM', 'fr'),
(150, 'itemstats_stats_title', 'Statistiques', 'fr'),
(151, 'shop_select_character_title', 'Sélectionner le personnage receveur', 'fr'),
(152, 'shop_balance_after_purchase', 'Solde après achat', 'fr'),
(153, 'shop_postpurchase_message', 'Le personnage doit être connecté pour recevoir l\'objet.', 'fr'),
(154, 'shop_select_character_level_tag', 'Niv.', 'fr'),
(155, 'account_manage', 'My account', 'en'),
(156, 'account_settings', 'Manage account', 'en'),
(157, 'all_rights_reserved', 'All rights reserved.', 'en'),
(158, 'community', 'Community', 'en'),
(159, 'developped_by', 'Developed by <b>Ramlethal</b>.', 'en'),
(160, 'disconnect', 'Logout', 'en'),
(161, 'discord', 'Discord', 'en'),
(162, 'discord_link', 'http://intersectcms.localhost/#disc', 'en'),
(163, 'discuss_with_players', 'Discuss with players', 'en'),
(164, 'donate', 'Donate', 'en'),
(165, 'download', 'Download', 'en'),
(166, 'encyclopedia', 'Wiki', 'en'),
(167, 'facebook', 'Facebook', 'en'),
(168, 'facebook_link', 'http://intersectcms.localhost/#fb', 'en'),
(169, 'follow_us_on_facebook', 'Follow us on Facebook', 'en'),
(170, 'follow_us_on_twitter', 'Follow us on Twitter', 'en'),
(171, 'forum', 'Forum', 'en'),
(172, 'forum_link', 'http://intersectcms.localhost/#forum', 'en'),
(173, 'game', 'Game', 'en'),
(174, 'game_min_desc', 'MMORPG F2P', 'en'),
(175, 'game_title', 'My Game', 'en'),
(176, 'graphic_concept_by', 'Graphic conception by <b>Nicow - wb x dsg</b>.', 'en'),
(177, 'home', 'Home', 'en'),
(178, 'join_our_community', 'Join our community', 'en'),
(179, 'join_our_community_desc', '<strong>You won\'t be able to play our game until you create an account.</strong><br>No e-mail validation is required, however please make sure to put a correct <strong>e-mail address</strong> in case of <strong>password loss</strong>. !', 'en'),
(180, 'leaders', 'Ranking', 'en'),
(181, 'leader_environment', 'PvM', 'en'),
(182, 'leader_player_class', 'Class', 'en'),
(183, 'leader_player_exp', 'EXP', 'en'),
(184, 'leader_player_level', 'Level', 'en'),
(185, 'leader_player_name', 'Player', 'en'),
(186, 'leader_pve_title', 'Ranking Player vs Monster', 'en'),
(187, 'leader_title', 'Ranking Player', 'en'),
(188, 'login_account', 'Username', 'en'),
(189, 'login_log_me', 'Login', 'en'),
(190, 'login_password', 'Password', 'en'),
(191, 'login_success', 'Successful login - Welcome', 'en'),
(192, 'login_success_desc', 'You are now connected', 'en'),
(193, 'login_to_site', 'Login to the site', 'en'),
(194, 'login_to_site_desc', 'Log in to your account now!', 'en'),
(195, 'logout_success', 'Successful logout', 'en'),
(196, 'logout_success_desc', 'You are now logged out', 'en'),
(197, 'news', 'News', 'en'),
(198, 'news_by', 'by', 'en'),
(199, 'news_posted_on', 'Posted on', 'en'),
(200, 'news_reed_more', 'Reed more', 'en'),
(201, 'profil', 'Profile', 'en'),
(202, 'register', 'Register', 'en'),
(203, 'register_account', 'Username', 'en'),
(204, 'register_email', 'E-mail address', 'en'),
(205, 'register_form_name', 'Registration Form', 'en'),
(206, 'register_password', 'Password', 'en'),
(207, 'register_password_confirm', 'Password confirm', 'en'),
(208, 'register_register_button', 'Register', 'en'),
(209, 'shop', 'Shop', 'en'),
(210, 'twitter', 'Twitter', 'en'),
(211, 'twitter_link', 'http://intersectcms.localhost/#tw', 'en'),
(212, 'shop_cat_all', 'All', 'en'),
(213, 'shop_cat_items', 'Equipments', 'en'),
(214, 'shop_cat_usable', 'Consumables', 'en'),
(215, 'shop_cat_money', 'Money', 'en'),
(216, 'shop_cat_spells', 'Spells', 'en'),
(217, 'shop_cat_events', 'Events', 'en'),
(218, 'shop_cat_bags', 'Bags', 'en'),
(219, 'login_panel_login', 'Login', 'en'),
(220, 'login_panel_register', 'Register', 'en'),
(221, 'menu_server_state', 'Server status', 'en'),
(222, 'menu_server_online', 'Online', 'en'),
(223, 'menu_server_player', 'Player', 'en'),
(224, 'menu_server_offline', 'Offline', 'en'),
(225, 'menu_administration_title', 'Administration', 'en'),
(226, 'menu_administration_desc', 'Manage CMS', 'en'),
(227, 'menu_my_profile', 'My profile', 'en'),
(228, 'points', 'Credits', 'en'),
(229, 'administration_title', 'Administration', 'en'),
(230, 'administration_news_title', 'Manage news', 'en'),
(231, 'administration_shop_title', 'Manage shop', 'en'),
(232, 'administration_pages_title', 'Manage pages', 'en'),
(233, 'administration_settings_title', 'Manage settings', 'en'),
(234, 'administration_access_title', 'Access', 'en'),
(235, 'administration_edit_news_title', 'Administration', 'en'),
(236, 'administration_edit_news_title', 'Edit a news', 'en'),
(237, 'administration_add_news_title', 'Add a news', 'en'),
(238, 'administration_news_title_placeholder', 'News title', 'en'),
(239, 'administration_news_list_title', 'Our news', 'en'),
(240, 'administration_news_column_title', 'Title', 'en'),
(241, 'administration_news_column_date', 'Date', 'en'),
(242, 'administration_news_column_image', 'Image', 'en'),
(243, 'administration_news_column_options', 'Options', 'en'),
(244, 'administration_item_options_edit', 'Edit', 'en'),
(245, 'administration_item_options_delete', 'Delete', 'en'),
(246, 'administration_tinymce_lang', 'en_EN', 'en'),
(247, 'administration_tinymce_fav', 'Favorites', 'en'),
(248, 'button_submit_title', 'SEND', 'en'),
(249, 'administration_edit_pages_title', 'Edit a page', 'en'),
(250, 'administration_add_pages_title', 'Add a page', 'en'),
(251, 'administration_page_title_placeholder', 'Page title', 'en'),
(252, 'administration_page_slug_placeholder', 'Page slug', 'en'),
(253, 'administration_pages_column_title', 'Title', 'en'),
(254, 'administration_pages_column_slug', 'Slug', 'en'),
(255, 'administration_pages_column_category', 'Category', 'en'),
(256, 'administration_pages_column_options', 'Options', 'en'),
(257, 'administration_page_cat_game', 'Game', 'en'),
(258, 'administration_page_cat_wiki', 'Wiki', 'en'),
(259, 'administration_page_list_title', 'Our pages', 'en'),
(260, 'administration_edit_shop_title', 'Edit an article in the shop', 'en'),
(261, 'administration_add_shop_title', 'Add an article in the shop', 'en'),
(262, 'administration_shop_title_placeholder', 'Object name (omatic)', 'en'),
(263, 'administration_shop_id_placeholder', 'Object ID', 'en'),
(264, 'administration_shop_price_placeholder', 'Price', 'en'),
(265, 'administration_shop_list_title', 'Other items in the shop', 'en'),
(266, 'administration_shop_column_title', 'Item', 'en'),
(267, 'administration_shop_column_description', 'Description', 'en'),
(268, 'administration_shop_column_image', 'Image', 'en'),
(269, 'administration_shop_column_price', 'Prix', 'en'),
(270, 'administration_shop_column_options', 'Options', 'en'),
(271, 'buy_credits_title', 'Buy credits', 'en'),
(272, 'my_account_personnal_informations_title', 'Personal information', 'en'),
(273, 'my_account_username', 'Username', 'en'),
(274, 'my_account_email', 'Email address', 'en'),
(275, 'my_account_editor_access', 'Editor access', 'en'),
(276, 'my_account_yes', 'YES', 'en'),
(277, 'my_account_no', 'NO', 'en'),
(278, 'my_account_api_access', 'API access', 'en'),
(279, 'my_account_admin_access', 'Admin access', 'en'),
(280, 'my_account_my_characters', 'My characters', 'en'),
(281, 'my_account_player_name', 'Character', 'en'),
(282, 'my_account_player_sexe', 'Sexe', 'en'),
(283, 'my_account_player_class', 'Class', 'en'),
(284, 'my_account_player_level', 'Level', 'en'),
(285, 'my_account_player_exp', 'EXP', 'en'),
(286, 'my_account_email', 'Email address', 'en'),
(287, 'shop_buy_button', 'Buy', 'en'),
(288, 'itemstats_weapon_stats_title', 'Weapon characteristics', 'en'),
(289, 'itemstats_damages', 'Damages', 'en'),
(290, 'itemstats_damagestype', 'Damages Type', 'en'),
(291, 'itemstats_scalingstat', 'Scaling Stat', 'en'),
(292, 'itemstats_scalingamount', 'Scaling Amount', 'en'),
(293, 'itemstats_damagestype_physical', 'Physical', 'en'),
(294, 'itemstats_damagestype_magical', 'Magical', 'en'),
(295, 'itemstats_damagestype_true', 'True', 'en'),
(296, 'itemstats_stat_atk', 'Attack', 'en'),
(297, 'itemstats_stat_abpwr', 'Ability Power', 'en'),
(298, 'itemstats_stat_def', 'Defense', 'en'),
(299, 'itemstats_stat_magres', 'Magic Resistance', 'en'),
(300, 'itemstats_stat_spd', 'Speed', 'en'),
(301, 'itemstats_vitals_title', 'Vitals', 'en'),
(302, 'itemstats_vitals_hp', 'HP', 'en'),
(303, 'itemstats_vitals_mp', 'MP', 'en'),
(304, 'itemstats_stats_title', 'Stats', 'en'),
(305, 'shop_select_character_title', 'Select the receiving character', 'en'),
(306, 'shop_balance_after_purchase', 'Balance after purchase', 'en'),
(307, 'shop_postpurchase_message', 'The character must be logged in to receive the item.', 'en'),
(308, 'shop_select_character_level_tag', 'Lvl.', 'en'),
(309, 'administration_shop_quantity_placeholder', 'Quantité', 'fr'),
(310, 'administration_shop_quantity_placeholder', 'Quantity', 'en'),
(311, 'administration_shop_column_quantity', 'Quantité', 'fr'),
(312, 'administration_shop_column_quantity', 'Quantity', 'en');

-- --------------------------------------------------------

--
-- Structure de la table `cms_news`
--

CREATE TABLE `cms_news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `author` text NOT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cms_news`
--

INSERT INTO `cms_news` (`id`, `title`, `content`, `date`, `author`, `img_url`) VALUES
(1, 'Welcome on IntersectCMS', '<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit. Mauris non nulla vitae erat finibus molestie. Vestibulum sit amet turpis quam. Praesent scelerisque sem ipsum, at hendrerit nisl dapibus a. Quisque vulputate sem eu turpis fringilla pharetra. Aenean consectetur sodales leo, at mattis metus dictum quis. Morbi consequat nunc ultricies purus tincidunt, quis ultrices mi tincidunt. Nullam maximus semper arcu, eu mattis enim aliquet eget.</p>\r\n<p>Integer sem tortor, ornare sit amet dui quis, volutpat tristique velit. Nam blandit feugiat nulla a iaculis. Fusce sagittis vel orci eget tempor. Vestibulum ut nunc mattis, ullamcorper velit at, convallis neque. Maecenas sagittis, sem at hendrerit imperdiet, odio urna egestas leo, placerat fermentum sem erat scelerisque purus. Phasellus ultricies est sit amet enim imperdiet, sed tristique nibh porttitor. Nulla molestie libero ac felis accumsan, ac mattis ex venenatis. Nam at lectus tempus, lobortis urna eget, viverra leo. Ut semper et eros eu semper. Sed mattis, magna id vehicula aliquet, dui quam eleifend orci, at molestie justo metus vel enim. Sed vitae urna leo. Nullam dapibus nisl dapibus venenatis tristique. Praesent vel turpis iaculis, laoreet erat non, fringilla augue. In tincidunt ipsum nec ligula lobortis, vitae tempus tortor porta. Aenean gravida eget nibh eget hendrerit. Vivamus eu metus porttitor, mattis erat eu, lobortis magna.</p>\r\n<p>Nunc porttitor varius tellus, a vestibulum massa tristique a. Mauris sit amet est tellus. Curabitur lobortis laoreet faucibus. Cras sem enim, laoreet tempus leo id, sodales convallis tortor. Maecenas quis sapien porttitor, scelerisque tortor in, auctor urna. Ut pretium nisl laoreet ex feugiat sollicitudin. Curabitur aliquam quam lorem, quis consectetur neque hendrerit vitae. Sed pulvinar quam massa, in congue quam interdum at. Aliquam euismod consequat lorem, a malesuada enim dapibus et.</p>\r\n<p>Maecenas et tempus tellus. Mauris porta nisl eu ipsum luctus, et malesuada diam suscipit. Nunc condimentum metus ut varius scelerisque. Morbi eu sapien egestas, dignissim nunc eu, rutrum dui. Nullam convallis vehicula libero sed blandit. Praesent auctor dolor sapien, at venenatis nisi accumsan sed. Vestibulum porttitor a libero non sollicitudin. Aenean vitae neque nibh. Fusce sit amet vestibulum magna. Quisque vel lacinia felis. Nunc non fermentum tellus.</p>\r\n<p>Morbi eget dui a lorem tempor maximus. Donec mollis ligula sed tortor congue, in auctor magna pellentesque. Donec a arcu et eros placerat eleifend. Donec pretium, sem a vehicula pharetra, metus diam fermentum ligula, non convallis nisl leo non orci. Aliquam vestibulum placerat nibh, ac malesuada mi bibendum rutrum. Sed facilisis suscipit sapien in faucibus. Vivamus viverra, ipsum sed condimentum dignissim, elit felis pharetra orci, posuere hendrerit ipsum ligula sit amet sapien. Aliquam sollicitudin, velit nec porttitor porta, neque ex pharetra mauris, in fringilla elit ex dapibus sem. Curabitur nisi felis, sagittis sed ipsum fermentum, imperdiet euismod augue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam vel leo eget est molestie ultrices ac in lacus. Curabitur eu interdum nunc, vitae egestas mauris. Donec consectetur sodales luctus. Maecenas arcu est, placerat vel facilisis a, bibendum eu enim. Integer ornare lorem sit amet ligula euismod fringilla.</p>', '2020-05-20', 'ram', '1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `cms_pages`
--

CREATE TABLE `cms_pages` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `unique_slug` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cms_pages`
--

INSERT INTO `cms_pages` (`id`, `category`, `unique_slug`, `name`, `content`) VALUES
(1, 'game', 'download', 'Download', '<p><img style=\"float: left; margin: 0px 10px;\" src=\"https://www.freemmorpgmaker.com/wp-content/uploads/2017/04/dkMSxwUYbOuu-1-1.png\" width=\"313\" height=\"194\" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris non nulla vitae erat finibus molestie. Vestibulum sit amet quam. Praesent scelerisque sem ipsum, at hendrerit nisl dapibus a. Quisque vulputate sem eu turpis pharetra. Aenean consectetur sodales leo, at mattis metus dictum quis. Morbi consequat nunc ultricies purus tincidunt, quis mi. Nullam maximus semper arcu, eu mattis enim aliquet eget.</p>\r\n<p>Integer sem tortor, ornare sit amet dui quis, volutpat tristique velit. Nam blandit feugiat nulla a iaculis. Fusce sagittis vel orci eget tempor. Vestibulum ut nunc mattis, ullamcorper velit at, convallis neque. Maecenas sagittis, sem at hendrerit imperdiet, odio urna egestas leo, placerat fermentum sem erat scelerisque purus. Phasellus ultricies est sit amet enim imperdiet, sed tristique nibh porttitor. Nulla molestie libero ac felis accumsan, ac mattis ex venenatis. Nam at lectus tempus, lobortis urna eget, viverra leo. Ut semper et eros eu semper. Sed mattis, magna id vehicula aliquet, dui quam eleifend orci, at molestie justo metus vel enim. Sed vitae urna leo. Nullam dapibus nisl dapibus venenatis tristique. Praesent vel turpis iaculis, laoreet erat non, fringilla augue. In tincidunt ipsum nec ligula lobortis, vitae tempus tortor porta. Aenean gravida eget nibh eget hendrerit. Vivamus eu metus porttitor, mattis erat eu, lobortis magna.</p>\r\n<p>Nunc porttitor varius tellus, a vestibulum massa tristique a. Mauris sit amet est tellus. Curabitur lobortis laoreet faucibus. Cras sem enim, laoreet tempus leo id, sodales convallis tortor. Maecenas quis sapien porttitor, scelerisque tortor in, auctor urna. Ut pretium nisl laoreet ex feugiat sollicitudin. Curabitur aliquam quam lorem, quis consectetur neque hendrerit vitae. Sed pulvinar quam massa, in congue quam interdum at. Aliquam euismod consequat lorem, a malesuada enim dapibus et.</p>\r\n<p style=\"text-align: center;\"><a href=\"https://mega.nz/\" target=\"_blank\" rel=\"noopener\">Download the game</a></p>');

-- --------------------------------------------------------

--
-- Structure de la table `cms_points_history`
--

CREATE TABLE `cms_points_history` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_id` text NOT NULL,
  `code` varchar(255) NOT NULL,
  `points_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `cms_settings`
--

CREATE TABLE `cms_settings` (
  `setting` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `default_value` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cms_settings`
--

INSERT INTO `cms_settings` (`setting`, `value`, `default_value`, `description`) VALUES
('api_password', 'password_API', 'password_API', 'API Password'),
('api_server', 'localhost:5400', 'localhost:5400', 'API Server'),
('api_username', 'username_API', 'username_API', 'API User'),
('base_url', 'http://intersectcms.localhost/', 'http://intersectcms.localhost/', 'CMS Base URL'),
('current_lang', 'en', 'en', 'Lang Used'),
('game_title', 'My Game', 'My Game', 'Game Name'),
('theme', 'Britania', 'Britania', 'Theme Name'),
('use_custom_game_pages', 'true', 'true', 'Use custom game pages'),
('use_nav_community', 'true', 'true', 'Use community nav tab'),
('use_right_community_button', 'true', 'true', 'Display right menu community buttons'),
('use_wiki', 'true', 'true', 'Use custom wiki');

-- --------------------------------------------------------

--
-- Structure de la table `cms_shop`
--

CREATE TABLE `cms_shop` (
  `id` int(11) NOT NULL,
  `id_item` varchar(255) NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `forceddescription` text NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `cms_shop_history`
--

CREATE TABLE `cms_shop_history` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `shop_id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `credits_now` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `cms_users`
--

CREATE TABLE `cms_users` (
  `webId` int(11) NOT NULL,
  `id` text NOT NULL,
  `email` text NOT NULL,
  `points` int(11) NOT NULL DEFAULT 0,
  `admin` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cms_lang`
--
ALTER TABLE `cms_lang`
  ADD PRIMARY KEY (`string_id`);

--
-- Index pour la table `cms_news`
--
ALTER TABLE `cms_news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_pages`
--
ALTER TABLE `cms_pages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_points_history`
--
ALTER TABLE `cms_points_history`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_settings`
--
ALTER TABLE `cms_settings`
  ADD UNIQUE KEY `setting` (`setting`);

--
-- Index pour la table `cms_shop`
--
ALTER TABLE `cms_shop`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_shop_history`
--
ALTER TABLE `cms_shop_history`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_users`
--
ALTER TABLE `cms_users`
  ADD PRIMARY KEY (`webId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cms_lang`
--
ALTER TABLE `cms_lang`
  MODIFY `string_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT pour la table `cms_news`
--
ALTER TABLE `cms_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cms_pages`
--
ALTER TABLE `cms_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cms_points_history`
--
ALTER TABLE `cms_points_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cms_shop`
--
ALTER TABLE `cms_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cms_shop_history`
--
ALTER TABLE `cms_shop_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cms_users`
--
ALTER TABLE `cms_users`
  MODIFY `webId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
