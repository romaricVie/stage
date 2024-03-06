-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 06 mars 2024 à 18:48
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `patrimoine`
--

-- --------------------------------------------------------

--
-- Structure de la table `affectations`
--

CREATE TABLE `affectations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `motif_affection` varchar(255) DEFAULT NULL,
  `etiquette` varchar(255) NOT NULL,
  `code` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `employe_id` bigint(20) UNSIGNED NOT NULL,
  `bien_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `biens`
--

CREATE TABLE `biens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` bigint(20) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `generation` varchar(255) DEFAULT NULL,
  `etat` enum('bon','hors_service') NOT NULL,
  `disponibilite` enum('libre','occupe') NOT NULL DEFAULT 'libre',
  `type_qty` enum('bien_unique','groupe_bien') NOT NULL DEFAULT 'bien_unique',
  `quantite` bigint(20) DEFAULT NULL,
  `etiquette` varchar(255) NOT NULL,
  `ram` varchar(255) DEFAULT NULL,
  `disque_dur` varchar(255) DEFAULT NULL,
  `processeur` varchar(255) DEFAULT NULL,
  `couleur` varchar(255) DEFAULT NULL,
  `marque` varchar(255) DEFAULT NULL,
  `longueur` varchar(255) DEFAULT NULL,
  `largeur` varchar(255) DEFAULT NULL,
  `hauteur` varchar(255) DEFAULT NULL,
  `nbre_battant` varchar(255) DEFAULT NULL,
  `immatriculation` varchar(255) DEFAULT NULL,
  `puissance` varchar(255) DEFAULT NULL,
  `matiere` varchar(255) DEFAULT NULL,
  `poids` varchar(255) DEFAULT NULL,
  `autres` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `place` varchar(255) DEFAULT NULL,
  `energie` varchar(255) DEFAULT NULL,
  `fournisseur_name` varchar(255) DEFAULT NULL,
  `fournisseur_tel` varchar(255) DEFAULT NULL,
  `type_bien` enum('bien_materiel','bien_immateriel') NOT NULL DEFAULT 'bien_materiel',
  `expiration` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `employe_id` bigint(20) UNSIGNED DEFAULT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `scategorie_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sscategorie_id` bigint(20) UNSIGNED DEFAULT NULL,
  `entrepot_id` bigint(20) UNSIGNED DEFAULT NULL,
  `emplacement_id` bigint(20) UNSIGNED DEFAULT NULL,
  `espace_id` bigint(20) UNSIGNED DEFAULT NULL,
  `entite_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `biens`
--

INSERT INTO `biens` (`id`, `name`, `price`, `day`, `month`, `year`, `image`, `generation`, `etat`, `disponibilite`, `type_qty`, `quantite`, `etiquette`, `ram`, `disque_dur`, `processeur`, `couleur`, `marque`, `longueur`, `largeur`, `hauteur`, `nbre_battant`, `immatriculation`, `puissance`, `matiere`, `poids`, `autres`, `code`, `place`, `energie`, `fournisseur_name`, `fournisseur_tel`, `type_bien`, `expiration`, `user_id`, `employe_id`, `categorie_id`, `scategorie_id`, `sscategorie_id`, `entrepot_id`, `emplacement_id`, `espace_id`, `entite_id`, `created_at`, `updated_at`) VALUES
(1, 'Ordinateur hp', NULL, NULL, NULL, NULL, 'biens/o4fLXVedMUCdJvPFc0gyVHbeYAIgZXvzEalNGiKK.jpg', '11th', 'bon', 'libre', 'bien_unique', 1, 'Info-0', '16GB', '1T', 'I7', 'Noir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RAS', 'AA17', NULL, NULL, NULL, NULL, 'bien_materiel', NULL, 1, NULL, 1, 1, 1, 1, 1, 1, 1, '2024-03-06 12:53:12', '2024-03-06 12:53:12'),
(2, 'Ordinateur bureau', NULL, NULL, NULL, NULL, 'biens/kV0E91BU3bLm5Uzae6CG9ER5y4nYG2dRNy40V6t5.jpg', '11th', 'bon', 'libre', 'bien_unique', 1, 'Info-1', '16GB', '1T', 'I7', 'Gris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RAS', 'AA19', NULL, NULL, NULL, NULL, 'bien_materiel', NULL, 1, NULL, 1, 1, 1, 1, 1, 1, 1, '2024-03-06 12:54:58', '2024-03-06 12:56:56');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Informatiques', NULL, NULL),
(2, 'Mobiliers', NULL, NULL),
(3, 'Vehicules', NULL, NULL),
(4, 'Electromenagers', NULL, NULL),
(5, 'Goodies', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `deplacements`
--

CREATE TABLE `deplacements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `motif_deplacement` varchar(255) NOT NULL,
  `bien_id` bigint(20) UNSIGNED NOT NULL,
  `entrepot_id` bigint(20) UNSIGNED DEFAULT NULL,
  `emplacement_id` bigint(20) UNSIGNED DEFAULT NULL,
  `espace_id` bigint(20) UNSIGNED DEFAULT NULL,
  `entite_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `emplacements`
--

CREATE TABLE `emplacements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `entrepot_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `emplacements`
--

INSERT INTO `emplacements` (`id`, `name`, `description`, `entrepot_id`, `created_at`, `updated_at`) VALUES
(1, 'Emplacement1', 'RAS', 1, NULL, NULL),
(2, 'Emplacement2', 'RAS', 1, NULL, NULL),
(3, 'Emplacement3', 'RAS', 1, NULL, NULL),
(4, 'Emplacement4', 'RAS', 1, NULL, NULL),
(5, 'Emplacement5', 'RAS', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `flotte` varchar(30) DEFAULT NULL,
  `fixe` varchar(30) DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `statut` enum('actif','inactif') NOT NULL,
  `contrat` enum('cdi','cdd') NOT NULL,
  `autres` text DEFAULT NULL,
  `entite_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entites`
--

CREATE TABLE `entites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entites`
--

INSERT INTO `entites` (`id`, `name`, `ville`, `pays`, `created_at`, `updated_at`) VALUES
(1, 'VCIS', NULL, NULL, NULL, NULL),
(2, 'ABIDJAN', NULL, NULL, NULL, NULL),
(3, 'SODA', NULL, NULL, NULL, NULL),
(4, 'OUAGA', NULL, NULL, NULL, NULL),
(5, 'KINSHASA', NULL, NULL, NULL, NULL),
(6, 'CONTROL A', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `entrepots`
--

CREATE TABLE `entrepots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `adresse_geographique` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `batiment` varchar(255) DEFAULT NULL,
  `superficie` varchar(255) DEFAULT NULL,
  `etage` varchar(255) DEFAULT NULL,
  `piece` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entrepots`
--

INSERT INTO `entrepots` (`id`, `name`, `adresse_geographique`, `description`, `batiment`, `superficie`, `etage`, `piece`, `parking`, `ville`, `pays`, `created_at`, `updated_at`) VALUES
(1, 'Voodoo group', 'Riviera bonomin', 'RAS', '3', '100M2', 'ND', 'ND', 'ND', NULL, NULL, NULL, NULL),
(2, 'Voodoo cotonou', 'ND', 'RAS', '10', '500M2', 'ND', 'ND', 'ND', NULL, NULL, NULL, NULL),
(3, 'Entrepot FS', 'Riviera', 'RAS', '5', '50M2', 'ND', 'ND', 'ND', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `espaces`
--

CREATE TABLE `espaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `entrepot_id` bigint(20) UNSIGNED NOT NULL,
  `emplacement_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `espaces`
--

INSERT INTO `espaces` (`id`, `name`, `description`, `entrepot_id`, `emplacement_id`, `created_at`, `updated_at`) VALUES
(1, 'espace1', 'ras', 1, 1, NULL, NULL),
(2, 'espace2', 'ras', 1, 1, NULL, NULL),
(3, 'espace3', 'ras', 1, 1, NULL, NULL),
(4, 'espace4', 'ras', 1, 1, NULL, NULL),
(5, 'espace5', 'ras', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_22_093029_create_entrepots_table', 1),
(6, '2023_03_22_093117_create_emplacements_table', 1),
(7, '2023_03_22_093141_create_espaces_table', 1),
(8, '2023_03_22_093201_create_categories_table', 1),
(9, '2023_03_22_093226_create_entites_table', 1),
(10, '2023_03_22_093416_create_scategories_table', 1),
(11, '2023_03_22_093432_create_sscategories_table', 1),
(12, '2023_03_22_093940_create_employes_table', 1),
(13, '2023_03_22_094759_create_biens_table', 1),
(14, '2023_03_22_094770_create_reparations_table', 1),
(15, '2023_03_22_094812_create_affectations_table', 1),
(16, '2023_05_22_163517_create_roles_table', 1),
(17, '2023_05_22_163715_role_user', 1),
(18, '2023_12_12_103256_create_deplacements_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reparations`
--

CREATE TABLE `reparations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` bigint(20) NOT NULL,
  `etat` enum('bon','hors_service') NOT NULL,
  `maintenancier` varchar(50) NOT NULL,
  `contact_maintenancier` varchar(30) NOT NULL,
  `description_panne` text NOT NULL,
  `day` varchar(15) NOT NULL,
  `month` varchar(15) NOT NULL,
  `year` year(4) NOT NULL,
  `etiquette` varchar(255) NOT NULL,
  `bien_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `scategories`
--

CREATE TABLE `scategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `scategories`
--

INSERT INTO `scategories` (`id`, `name`, `categorie_id`, `created_at`, `updated_at`) VALUES
(1, 'Ordinateur', 1, NULL, NULL),
(2, 'Imprimante', 1, NULL, NULL),
(3, 'Telephone', 1, NULL, NULL),
(4, 'logiciel', 1, NULL, NULL),
(5, 'Stokage externe', 1, NULL, NULL),
(6, 'Teablette', 1, NULL, NULL),
(7, 'Internet', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sscategories`
--

CREATE TABLE `sscategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `scategorie_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sscategories`
--

INSERT INTO `sscategories` (`id`, `name`, `categorie_id`, `scategorie_id`, `created_at`, `updated_at`) VALUES
(1, 'PC', 1, 1, NULL, NULL),
(2, 'Bureau', 1, 1, NULL, NULL),
(3, 'Portable', 1, 1, NULL, NULL),
(4, 'Imac', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'N\'DRI', 'Romaric', 'romaric@gmail.com', NULL, '$2y$10$Z11XRZtIoj6/CQtHJ8duqO6bAgnXlMQpHjP25fEl/q3/VALVYKOMi', NULL, '2024-02-20 18:35:48', '2024-02-20 18:35:48');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affectations`
--
ALTER TABLE `affectations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `affectations_employe_id_foreign` (`employe_id`),
  ADD KEY `affectations_bien_id_foreign` (`bien_id`);

--
-- Index pour la table `biens`
--
ALTER TABLE `biens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `biens_etiquette_unique` (`etiquette`),
  ADD UNIQUE KEY `biens_code_unique` (`code`),
  ADD KEY `biens_user_id_foreign` (`user_id`),
  ADD KEY `biens_employe_id_foreign` (`employe_id`),
  ADD KEY `biens_categorie_id_foreign` (`categorie_id`),
  ADD KEY `biens_scategorie_id_foreign` (`scategorie_id`),
  ADD KEY `biens_sscategorie_id_foreign` (`sscategorie_id`),
  ADD KEY `biens_entrepot_id_foreign` (`entrepot_id`),
  ADD KEY `biens_emplacement_id_foreign` (`emplacement_id`),
  ADD KEY `biens_espace_id_foreign` (`espace_id`),
  ADD KEY `biens_entite_id_foreign` (`entite_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Index pour la table `deplacements`
--
ALTER TABLE `deplacements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deplacements_bien_id_foreign` (`bien_id`),
  ADD KEY `deplacements_entrepot_id_foreign` (`entrepot_id`),
  ADD KEY `deplacements_emplacement_id_foreign` (`emplacement_id`),
  ADD KEY `deplacements_espace_id_foreign` (`espace_id`),
  ADD KEY `deplacements_entite_id_foreign` (`entite_id`);

--
-- Index pour la table `emplacements`
--
ALTER TABLE `emplacements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emplacements_entrepot_id_foreign` (`entrepot_id`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employes_email_unique` (`email`),
  ADD KEY `employes_entite_id_foreign` (`entite_id`);

--
-- Index pour la table `entites`
--
ALTER TABLE `entites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `entites_name_unique` (`name`);

--
-- Index pour la table `entrepots`
--
ALTER TABLE `entrepots`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `entrepots_name_unique` (`name`);

--
-- Index pour la table `espaces`
--
ALTER TABLE `espaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `espaces_entrepot_id_foreign` (`entrepot_id`),
  ADD KEY `espaces_emplacement_id_foreign` (`emplacement_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `reparations`
--
ALTER TABLE `reparations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reparations_bien_id_foreign` (`bien_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Index pour la table `scategories`
--
ALTER TABLE `scategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scategories_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `sscategories`
--
ALTER TABLE `sscategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sscategories_categorie_id_foreign` (`categorie_id`),
  ADD KEY `sscategories_scategorie_id_foreign` (`scategorie_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `affectations`
--
ALTER TABLE `affectations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `biens`
--
ALTER TABLE `biens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `deplacements`
--
ALTER TABLE `deplacements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `emplacements`
--
ALTER TABLE `emplacements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `entites`
--
ALTER TABLE `entites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `entrepots`
--
ALTER TABLE `entrepots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `espaces`
--
ALTER TABLE `espaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reparations`
--
ALTER TABLE `reparations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `scategories`
--
ALTER TABLE `scategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `sscategories`
--
ALTER TABLE `sscategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `affectations`
--
ALTER TABLE `affectations`
  ADD CONSTRAINT `affectations_bien_id_foreign` FOREIGN KEY (`bien_id`) REFERENCES `biens` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `affectations_employe_id_foreign` FOREIGN KEY (`employe_id`) REFERENCES `employes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `biens`
--
ALTER TABLE `biens`
  ADD CONSTRAINT `biens_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `biens_emplacement_id_foreign` FOREIGN KEY (`emplacement_id`) REFERENCES `emplacements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `biens_employe_id_foreign` FOREIGN KEY (`employe_id`) REFERENCES `employes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `biens_entite_id_foreign` FOREIGN KEY (`entite_id`) REFERENCES `entites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `biens_entrepot_id_foreign` FOREIGN KEY (`entrepot_id`) REFERENCES `entrepots` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `biens_espace_id_foreign` FOREIGN KEY (`espace_id`) REFERENCES `espaces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `biens_scategorie_id_foreign` FOREIGN KEY (`scategorie_id`) REFERENCES `scategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `biens_sscategorie_id_foreign` FOREIGN KEY (`sscategorie_id`) REFERENCES `sscategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `biens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `deplacements`
--
ALTER TABLE `deplacements`
  ADD CONSTRAINT `deplacements_bien_id_foreign` FOREIGN KEY (`bien_id`) REFERENCES `biens` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deplacements_emplacement_id_foreign` FOREIGN KEY (`emplacement_id`) REFERENCES `emplacements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deplacements_entite_id_foreign` FOREIGN KEY (`entite_id`) REFERENCES `entites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deplacements_entrepot_id_foreign` FOREIGN KEY (`entrepot_id`) REFERENCES `entrepots` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deplacements_espace_id_foreign` FOREIGN KEY (`espace_id`) REFERENCES `espaces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `emplacements`
--
ALTER TABLE `emplacements`
  ADD CONSTRAINT `emplacements_entrepot_id_foreign` FOREIGN KEY (`entrepot_id`) REFERENCES `entrepots` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `employes_entite_id_foreign` FOREIGN KEY (`entite_id`) REFERENCES `entites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `espaces`
--
ALTER TABLE `espaces`
  ADD CONSTRAINT `espaces_emplacement_id_foreign` FOREIGN KEY (`emplacement_id`) REFERENCES `emplacements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `espaces_entrepot_id_foreign` FOREIGN KEY (`entrepot_id`) REFERENCES `entrepots` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reparations`
--
ALTER TABLE `reparations`
  ADD CONSTRAINT `reparations_bien_id_foreign` FOREIGN KEY (`bien_id`) REFERENCES `biens` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `scategories`
--
ALTER TABLE `scategories`
  ADD CONSTRAINT `scategories_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sscategories`
--
ALTER TABLE `sscategories`
  ADD CONSTRAINT `sscategories_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sscategories_scategorie_id_foreign` FOREIGN KEY (`scategorie_id`) REFERENCES `scategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
