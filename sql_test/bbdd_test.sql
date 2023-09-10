-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para doublegroupapp2
CREATE DATABASE IF NOT EXISTS `doublegroupapp2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `doublegroupapp2`;

-- Volcando estructura para tabla doublegroupapp2.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla doublegroupapp2.failed_jobs: ~0 rows (aproximadamente)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla doublegroupapp2.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla doublegroupapp2.migrations: ~12 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2020_05_21_100000_create_teams_table', 1),
	(7, '2020_05_21_200000_create_team_user_table', 1),
	(8, '2020_05_21_300000_create_team_invitations_table', 1),
	(9, '2023_09_02_084929_create_sessions_table', 1),
	(10, '2023_09_02_085256_create_trabajadors_table', 1),
	(11, '2023_09_02_085308_create_uniformidads_table', 1),
	(12, '2023_09_02_090502_trabajador_uniformidad_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla doublegroupapp2.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla doublegroupapp2.password_reset_tokens: ~0 rows (aproximadamente)
DELETE FROM `password_reset_tokens`;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla doublegroupapp2.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla doublegroupapp2.personal_access_tokens: ~0 rows (aproximadamente)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla doublegroupapp2.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla doublegroupapp2.sessions: ~1 rows (aproximadamente)
DELETE FROM `sessions`;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('1hZKqsZfRQDVqNBM8dTe3MkOM7tY7Q2uCS7CApa8', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36 Edg/116.0.1938.69', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYk4ySjBsZk5qTTNLcWhhUE5vRGlvR3hvdmVVRGZMM0xjcHJuVGtPdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90cmFiYWphZG9yLzYiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFVSYjBxbjdybldKaWdNV2I1OWxmQ2UxMUtzUERJL3Y4QlJ5QmlUYlFobk5kekYvLjRxcFVlIjt9', 1693762259);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Volcando estructura para tabla doublegroupapp2.teams
CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teams_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla doublegroupapp2.teams: ~0 rows (aproximadamente)
DELETE FROM `teams`;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;

-- Volcando estructura para tabla doublegroupapp2.team_invitations
CREATE TABLE IF NOT EXISTS `team_invitations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint(20) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`),
  CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla doublegroupapp2.team_invitations: ~0 rows (aproximadamente)
DELETE FROM `team_invitations`;
/*!40000 ALTER TABLE `team_invitations` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_invitations` ENABLE KEYS */;

-- Volcando estructura para tabla doublegroupapp2.team_user
CREATE TABLE IF NOT EXISTS `team_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla doublegroupapp2.team_user: ~0 rows (aproximadamente)
DELETE FROM `team_user`;
/*!40000 ALTER TABLE `team_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_user` ENABLE KEYS */;

-- Volcando estructura para tabla doublegroupapp2.trabajadors
CREATE TABLE IF NOT EXISTS `trabajadors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destiny` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tallaCamiseta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tallaPantalon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tallaCalzado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `trabajadors_dni_unique` (`dni`),
  UNIQUE KEY `trabajadors_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla doublegroupapp2.trabajadors: ~60 rows (aproximadamente)
DELETE FROM `trabajadors`;
/*!40000 ALTER TABLE `trabajadors` DISABLE KEYS */;
INSERT INTO `trabajadors` (`id`, `name`, `surname`, `dni`, `destiny`, `email`, `tallaCamiseta`, `tallaPantalon`, `tallaCalzado`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Valentine Stanton', 'Dr. Gail Wilderman', '7329333-v', 'DESTINO_2', 'witting.marlin@wintheiser.biz', 'XXXL', '48', '46', '2023-09-03 17:44:31', '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(2, 'Estella Hane', 'Miss Emmie Herzog', '7615315-i', 'DESTINO_4', 'cjakubowski@yahoo.com', 'XL', '46', '46', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(3, 'Mr. Edwardo Grady', 'Mrs. Rebekah Padberg MD', '8593056-t', 'DESTINO_3', 'vbahringer@ratke.com', 'L', '50', '49', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(4, 'Dr. Ronny Satterfield DDS', 'Camron Wintheiser', '7607764-i', 'DESTINO_2', 'howe.hertha@hotmail.com', 'L', '48', '45', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(5, 'Dr. Akeem Towne III', 'Grace Stark MD', '9260738-r', 'DESTINO_1', 'ortiz.gudrun@hotmail.com', 'XXL', '52', '40', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(6, 'Sonny Metz', 'Diego Parker', '5344231-o', 'DESTINO_3', 'bpowlowski@grant.com', 'XXXL', '52', '49', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(7, 'Teagan Robel', 'Ms. Emily Rutherford I', '7115317-s', 'DESTINO_2', 'nicholas55@gmail.com', 'XXL', '46', '48', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(8, 'Mrs. Sylvia Bode', 'Rick Swift MD', '7621506-k', 'DESTINO_3', 'runte.dora@cartwright.biz', 'XXL', '46', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(9, 'Prof. Brock Rutherford V', 'Dr. Leilani Gutmann', '6315133-z', 'DESTINO_1', 'malcolm54@gmail.com', 'XL', '50', '50', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(10, 'Estella Hane', 'Ms. Ora Crist PhD', '8349360-o', 'DESTINO_1', 'morris.stamm@torphy.net', 'XXXL', '50', '50', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(11, 'Cierra Bechtelar', 'Prof. Kennedi Grady DVM', '7590451-y', 'DESTINO_4', 'veum.king@hotmail.com', 'XXXL', '50', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(12, 'Estella Hane', 'Parker Daniel', '7821393-t', 'DESTINO_3', 'bennett.cremin@yahoo.com', 'XL', '46', '47', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(13, 'Vito Hamill', 'Naomie Doyle', '9280747-b', 'DESTINO_4', 'ckeeling@kilback.com', 'XXXL', '52', '46', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(14, 'Chelsea Kutch', 'Aiden Zieme PhD', '6696951-z', 'DESTINO_2', 'mheidenreich@hotmail.com', 'XXXL', '52', '40', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(15, 'Dr. Joe Stamm DVM', 'Sonny Smith', '5529216-e', 'DESTINO_2', 'paula97@dickens.com', 'L', '52', '40', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(16, 'Devyn Lind', 'Mr. Deron Kohler', '5476587-r', 'DESTINO_1', 'bernhard.johnpaul@krajcik.com', 'L', '46', '39', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(17, 'Damion Hintz DVM', 'Rhett Hickle', '5864004-a', 'DESTINO_2', 'aida66@greenfelder.net', 'M', '46', '46', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(18, 'Mr. Cory Bradtke', 'Armand Lockman', '9272505-q', 'DESTINO_4', 'zetta.fadel@yahoo.com', 'S', '52', '39', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(19, 'Jackie Robel', 'Sam Lemke MD', '8094599-k', 'DESTINO_3', 'littel.brad@torphy.com', 'M', '48', '43', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(20, 'Tobin Champlin', 'Minnie Nitzsche PhD', '5561557-b', 'DESTINO_2', 'rae.jaskolski@jacobs.com', 'M', '46', '39', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(21, 'Rosalia Bednar', 'Vincenza Spinka', '8645245-g', 'DESTINO_3', 'igorczany@gmail.com', 'M', '46', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(22, 'Durward Bosco', 'Prof. Darrell Kihn II', '8629302-v', 'DESTINO_1', 'lessie08@klocko.net', 'L', '46', '43', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(23, 'Gerry Smitham', 'Carolanne Kuhlman', '7712272-y', 'DESTINO_2', 'koelpin.tommie@blick.com', 'M', '52', '44', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(24, 'Sally Schiller', 'Prof. Seamus Muller', '7123094-h', 'DESTINO_4', 'casandra.bashirian@gerhold.com', 'L', '50', '41', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(25, 'Susanna Metz', 'Al Friesen', '6191290-h', 'DESTINO_2', 'chadd.sporer@gmail.com', 'M', '52', '47', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(26, 'Martin Schuster', 'Prof. Clement Cruickshank DVM', '9615027-q', 'DESTINO_3', 'shane95@yahoo.com', 'XXL', '46', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(27, 'Ruth Weissnat', 'Krystina Skiles', '6811101-m', 'DESTINO_3', 'koch.aubree@cremin.net', 'L', '52', '48', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(28, 'Miss Kaelyn Orn', 'Madeline Koss', '9170120-h', 'DESTINO_3', 'avis66@yahoo.com', 'XL', '50', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(29, 'Mr. Remington Zieme', 'Keely Wolf', '8759356-x', 'DESTINO_3', 'liliane13@feeney.info', 'XXXL', '46', '39', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(30, 'Madilyn Rohan', 'Florida O\'Connell', '8618478-u', 'DESTINO_2', 'lindsey.ondricka@denesik.com', 'XL', '46', '39', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(31, 'Max Huels', 'Evert Wolf', '9571978-j', 'DESTINO_1', 'orval04@ruecker.info', 'M', '52', '45', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(32, 'Miss Zoe Jenkins DDS', 'Elenor Spinka III', '6034093-v', 'DESTINO_3', 'isenger@ortiz.org', 'L', '50', '46', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(33, 'Markus Huels V', 'Ms. Vivianne Schamberger PhD', '6698766-f', 'DESTINO_3', 'ybrekke@swift.com', 'XXXL', '46', '49', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(34, 'Jamie Feest', 'Mauricio Parisian Jr.', '7985699-n', 'DESTINO_3', 'cooper.hayes@lehner.com', 'XL', '48', '48', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(35, 'Lolita Doyle', 'Madisyn Johnson', '9460028-g', 'DESTINO_3', 'trycia58@yahoo.com', 'L', '48', '46', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(36, 'Dr. Jamey Herzog', 'Corbin Braun', '5294572-x', 'DESTINO_3', 'paul90@yahoo.com', 'XXXL', '48', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(37, 'Lera Durgan', 'Madie Rempel', '6685782-f', 'DESTINO_3', 'natalia.casper@yahoo.com', 'M', '52', '44', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(38, 'Cassie Feil', 'Marjolaine Connelly', '9089404-j', 'DESTINO_1', 'jessika.stehr@waelchi.com', 'L', '50', '48', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(39, 'Clotilde Leannon', 'Dr. Hudson Keeling Sr.', '7188480-y', 'DESTINO_3', 'sheila.hilpert@yost.info', 'L', '48', '43', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(40, 'Mr. Clark Weissnat', 'Maximo Kilback', '5252273-f', 'DESTINO_3', 'yasmine.heaney@nienow.com', 'XL', '52', '50', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(41, 'Jazmyne Yost', 'Sylvia Stehr', '6540201-m', 'DESTINO_4', 'brekke.toni@skiles.info', 'XXL', '50', '43', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(42, 'Gunner Skiles', 'Mrs. Shanny Pfannerstill Sr.', '7100217-v', 'DESTINO_2', 'stacey44@mcdermott.com', 'L', '52', '43', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(43, 'Jerrold Jast', 'Cristopher Stark', '5797591-k', 'DESTINO_1', 'boyd17@yahoo.com', 'XL', '50', '43', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(44, 'Gregory Hand', 'Dasia Herzog', '8432250-u', 'DESTINO_1', 'aimee.dooley@gmail.com', 'XXL', '52', '41', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(45, 'Camden Klocko II', 'Houston Bailey', '7376586-f', 'DESTINO_3', 'keagan.schumm@upton.org', 'M', '46', '47', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(46, 'Prof. Erwin Fritsch Jr.', 'Gage Runolfsdottir', '8919742-s', 'DESTINO_1', 'jan.kunze@gmail.com', 'S', '46', '49', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(47, 'Dr. Colten Greenfelder', 'Harvey Bashirian', '7398954-c', 'DESTINO_2', 'sage.brown@gulgowski.com', 'XXL', '52', '45', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(48, 'Mr. Jillian Bauch', 'Lavina Heller', '7881437-s', 'DESTINO_3', 'mertz.arch@johnson.com', 'XXXL', '48', '46', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(49, 'Miss Pink Feeney MD', 'Naomie Swaniawski', '5511483-o', 'DESTINO_3', 'qmante@hotmail.com', 'XL', '50', '49', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(50, 'Franz Nicolas', 'Hattie Conroy', '7709963-y', 'DESTINO_4', 'taya90@cormier.biz', 'XXXL', '48', '44', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(51, 'Prof. Adella Marks DVM', 'Scottie Lockman', '6460355-g', 'DESTINO_1', 'kyle95@feil.biz', 'L', '46', '49', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(52, 'Rasheed Funk', 'Yvonne Hyatt', '5816543-a', 'DESTINO_3', 'marques30@gmail.com', 'L', '50', '41', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(53, 'Destiney Prohaska', 'Dawson Kertzmann DVM', '9659790-h', 'DESTINO_2', 'leda77@yahoo.com', 'L', '48', '44', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(54, 'Hellen Harris', 'Clifton Fadel', '7446562-m', 'DESTINO_4', 'maude.emard@toy.com', 'XXL', '50', '46', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(55, 'Mrs. Jennyfer Bradtke', 'Lacey Rempel', '7145067-z', 'DESTINO_4', 'tquitzon@gmail.com', 'XL', '48', '47', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(56, 'Ole Spencer', 'Prof. Antwon Senger', '7968038-r', 'DESTINO_2', 'windler.oma@hotmail.com', 'XXL', '48', '49', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(57, 'Urban Willms', 'Susana Herzog', '6677300-v', 'DESTINO_2', 'chaya.feil@hotmail.com', 'XXXL', '50', '44', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(58, 'Hank Mann', 'Bettie O\'Kon', '5100866-q', 'DESTINO_2', 'annabell.considine@yahoo.com', 'XXL', '52', '47', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(59, 'Destin Wyman', 'Hallie Schmeler', '8617299-m', 'DESTINO_4', 'thalvorson@gmail.com', 'M', '50', '50', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(60, 'Braulio Murazik IV', 'Anastacio Douglas DVM', '5080429-i', 'DESTINO_4', 'keshaun17@yahoo.com', 'M', '50', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(63, 'Paco', 'Jaez', '50438235V', 'kokoa', 'pacojaez@gmail.com', 'XXL', '40', '40', NULL, '2023-09-02 16:22:36', '2023-09-02 16:22:36');
/*!40000 ALTER TABLE `trabajadors` ENABLE KEYS */;

-- Volcando estructura para tabla doublegroupapp2.trabajador_uniformidad
CREATE TABLE IF NOT EXISTS `trabajador_uniformidad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `trabajador_id` int(11) NOT NULL,
  `uniformidad_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla doublegroupapp2.trabajador_uniformidad: ~52 rows (aproximadamente)
DELETE FROM `trabajador_uniformidad`;
/*!40000 ALTER TABLE `trabajador_uniformidad` DISABLE KEYS */;
INSERT INTO `trabajador_uniformidad` (`id`, `trabajador_id`, `uniformidad_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 11, 11, '2023-09-02 10:00:38', NULL, NULL),
	(2, 11, 12, '2023-09-02 10:00:38', NULL, NULL),
	(3, 11, 13, '2023-09-02 10:00:38', NULL, NULL),
	(4, 11, 14, '2023-09-02 10:00:38', NULL, NULL),
	(5, 15, 15, '2023-09-02 10:00:38', NULL, NULL),
	(6, 16, 16, '2023-09-02 10:00:38', NULL, NULL),
	(7, 17, 17, '2023-09-02 10:00:38', NULL, NULL),
	(8, 18, 18, '2023-09-02 10:00:38', NULL, NULL),
	(9, 19, 19, '2023-09-02 10:00:38', NULL, NULL),
	(10, 20, 20, '2023-09-02 10:00:38', NULL, NULL),
	(11, 21, 21, '2023-09-02 10:00:38', NULL, NULL),
	(12, 22, 22, '2023-09-02 10:00:38', NULL, NULL),
	(13, 23, 23, '2023-09-02 10:00:38', NULL, NULL),
	(14, 24, 24, '2023-09-02 10:00:38', NULL, NULL),
	(15, 25, 25, '2023-09-02 10:00:38', NULL, NULL),
	(16, 26, 26, '2023-09-02 10:00:38', NULL, NULL),
	(17, 27, 27, '2023-09-02 10:00:38', NULL, NULL),
	(18, 28, 28, '2023-09-02 10:00:38', NULL, NULL),
	(19, 29, 29, '2023-09-02 10:00:38', NULL, NULL),
	(20, 30, 30, '2023-09-02 10:00:38', NULL, NULL),
	(21, 31, 31, '2023-09-02 10:00:38', NULL, NULL),
	(22, 32, 32, '2023-09-02 10:00:38', NULL, NULL),
	(23, 33, 33, '2023-09-02 10:00:38', NULL, NULL),
	(24, 34, 34, '2023-09-02 10:00:38', NULL, NULL),
	(25, 35, 35, '2023-09-02 10:00:38', NULL, NULL),
	(26, 36, 36, '2023-09-02 10:00:38', NULL, NULL),
	(27, 37, 37, '2023-09-02 10:00:38', NULL, NULL),
	(28, 38, 38, '2023-09-02 10:00:38', NULL, NULL),
	(29, 39, 39, '2023-09-02 10:00:38', NULL, NULL),
	(30, 40, 40, '2023-09-02 10:00:38', NULL, NULL),
	(31, 41, 41, '2023-09-02 10:00:38', NULL, NULL),
	(32, 42, 42, '2023-09-02 10:00:38', NULL, NULL),
	(33, 43, 43, '2023-09-02 10:00:38', NULL, NULL),
	(34, 44, 44, '2023-09-02 10:00:38', NULL, NULL),
	(35, 45, 45, '2023-09-02 10:00:38', NULL, NULL),
	(36, 46, 46, '2023-09-02 10:00:38', NULL, NULL),
	(37, 47, 47, '2023-09-02 10:00:38', NULL, NULL),
	(38, 48, 48, '2023-09-02 10:00:38', NULL, NULL),
	(39, 49, 49, '2023-09-02 10:00:38', NULL, NULL),
	(40, 50, 50, '2023-09-02 10:00:38', NULL, NULL),
	(41, 51, 51, '2023-09-02 10:00:38', NULL, NULL),
	(42, 52, 52, '2023-09-02 10:00:38', NULL, NULL),
	(43, 53, 53, '2023-09-02 10:00:38', NULL, NULL),
	(44, 54, 54, '2023-09-02 10:00:38', NULL, NULL),
	(45, 55, 55, '2023-09-02 10:00:38', NULL, NULL),
	(46, 56, 56, '2023-09-02 10:00:38', NULL, NULL),
	(47, 57, 57, '2023-09-02 10:00:38', NULL, NULL),
	(48, 58, 58, '2023-09-02 10:00:38', NULL, NULL),
	(49, 59, 59, '2023-09-02 10:00:38', NULL, NULL),
	(50, 60, 60, '2023-09-02 10:00:38', NULL, NULL),
	(51, 1, 46, '2023-09-03 15:29:35', '2023-09-03 15:29:35', NULL),
	(52, 3, 7, '2023-09-03 15:30:07', '2023-09-03 15:30:07', NULL),
	(53, 10, 62, '2023-09-03 15:32:03', '2023-09-03 15:32:03', NULL),
	(54, 2, 7, '2023-09-03 15:32:49', '2023-09-03 15:32:49', NULL),
	(55, 7, 7, '2023-09-03 15:37:41', '2023-09-03 15:37:41', NULL),
	(56, 11, 39, '2023-09-03 15:38:36', '2023-09-03 15:38:36', NULL),
	(57, 2, 2, '2023-09-03 15:39:20', '2023-09-03 15:39:20', NULL),
	(58, 6, 14, '2023-09-03 15:43:02', '2023-09-03 15:43:02', NULL),
	(59, 2, 2, '2023-09-03 15:43:18', '2023-09-03 15:43:18', NULL),
	(60, 2, 2, '2023-09-03 15:43:54', '2023-09-03 15:43:54', NULL),
	(61, 2, 63, '2023-09-03 15:44:14', '2023-09-03 15:44:14', NULL),
	(62, 3, 2, '2023-09-03 15:45:16', '2023-09-03 15:45:16', NULL),
	(63, 3, 7, '2023-09-03 15:46:46', '2023-09-03 15:46:46', NULL),
	(64, 4, 2, '2023-09-03 15:50:01', '2023-09-03 15:50:01', NULL),
	(65, 2, 63, '2023-09-03 15:51:44', '2023-09-03 15:51:44', NULL),
	(66, 2, 2, '2023-09-03 15:51:52', '2023-09-03 15:51:52', NULL),
	(67, 2, 62, '2023-09-03 15:52:00', '2023-09-03 15:52:00', NULL),
	(68, 2, 2, '2023-09-03 15:53:38', '2023-09-03 15:53:38', NULL),
	(69, 2, 2, '2023-09-03 15:58:15', '2023-09-03 15:58:15', NULL),
	(70, 3, 2, '2023-09-03 16:08:28', '2023-09-03 16:08:28', NULL),
	(71, 15, 63, '2023-09-03 16:49:28', '2023-09-03 16:49:28', NULL),
	(72, 2, 2, '2023-09-03 16:50:10', '2023-09-03 16:50:10', NULL),
	(73, 63, 40, '2023-09-03 17:09:14', '2023-09-03 17:09:14', NULL),
	(74, 6, 42, '2023-09-03 17:30:49', '2023-09-03 17:30:49', NULL);
/*!40000 ALTER TABLE `trabajador_uniformidad` ENABLE KEYS */;

-- Volcando estructura para tabla doublegroupapp2.uniformidads
CREATE TABLE IF NOT EXISTS `uniformidads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `talla` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla doublegroupapp2.uniformidads: ~63 rows (aproximadamente)
DELETE FROM `uniformidads`;
/*!40000 ALTER TABLE `uniformidads` DISABLE KEYS */;
INSERT INTO `uniformidads` (`id`, `name`, `type`, `description`, `color`, `talla`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Catharine Hyatt DDS', 'Sudadera', 'Assumenda aut nemo qui nobis non.', 'Rojo', 'XL', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(2, 'Sydnee Botsford', 'Camisa', 'Quae iusto quasi dolorum.', 'Azul', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(3, 'Missouri Quitzon DDS', 'Camiseta', 'Eos commodi esse voluptatem nesciunt debitis.', 'Negro', 'XL', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(4, 'Ms. Allie Prohaska I', 'Zapato', 'Ducimus exercitationem consequatur molestiae qui.', 'Azul', 'M', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(5, 'Ruben Orn', 'Sudadera', 'Illo temporibus voluptate et.', 'Azul', '38', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(6, 'Irma Block', 'Camiseta', 'Minus ut itaque et natus.', 'Negro', 'L', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(7, 'Ms. Catalina Purdy DVM', 'Camisa', 'Autem beatae est corporis dolores sunt illum.', 'Azul', '46', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(8, 'Mr. Rollin Hoppe III', 'Zapato', 'Voluptatem eligendi a aperiam.', 'Blanco', 'XL', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(9, 'Donavon Predovic', 'Camiseta', 'Sint commodi voluptatem enim ex.', 'Blanco', 'L', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(10, 'Cordell Schiller', 'Polo', 'Sed at voluptatibus et aut.', 'Negro', 'L', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(11, 'Kareem Bahringer', 'Polo', 'Quibusdam ut aspernatur necessitatibus nobis rerum officia.', 'Negro', '40', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(12, 'Emmitt Kertzmann', 'Zapato', 'Consequatur veritatis rerum ratione beatae.', 'Rojo', 'L', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(13, 'Favian Senger', 'Zapato', 'Est eos culpa odit enim voluptatem dolor.', 'Rojo', '38', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(14, 'Brandy Kirlin', 'Camisa', 'Est possimus alias alias et.', 'Azul', 'M', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(15, 'Pierre Larson MD', 'Pantalón', 'Commodi veritatis hic libero non.', 'Rojo', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(16, 'Nat Larkin', 'Sudadera', 'Quis quia quas occaecati et odit sed.', 'Rojo', 'S', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(17, 'Ms. Claudie Parker PhD', 'Sudadera', 'Exercitationem quia non fugiat autem eligendi cum.', 'Negro', 'S', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(18, 'Kaci Tremblay', 'Pantalón', 'Velit repellendus magnam enim laudantium.', 'Blanco', 'XXXL', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(19, 'Dr. Alexzander Schoen III', 'Polo', 'Aperiam sit sunt id qui.', 'Rojo', '38', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(20, 'Lukas Quitzon', 'Sudadera', 'Voluptatem quae officia excepturi modi nulla.', 'Rojo', 'XL', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(21, 'Mr. Connor Lemke II', 'Camiseta', 'Earum incidunt cumque ipsam ad.', 'Negro', 'M', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(22, 'Darwin Klocko Jr.', 'Pantalón', 'Voluptas consequatur veniam rerum.', 'Blanco', 'XXL', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(23, 'Clemmie Rosenbaum', 'Zapato', 'Laborum aut est delectus dolorum voluptatum voluptatibus.', 'Azul', 'L', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(24, 'Lexie Weissnat IV', 'Camiseta', 'Et aut dicta consequatur et aut expedita.', 'Blanco', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(25, 'Prof. Stephania Tromp IV', 'Pantalón', 'Ut et velit repellendus.', 'Azul', '38', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(26, 'Gudrun Satterfield', 'Pantalón', 'Quibusdam laboriosam laboriosam aliquid ex.', 'Negro', 'M', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(27, 'Prof. Kirstin Mertz', 'Pantalón', 'Iste iste et minima id ut.', 'Negro', 'M', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(28, 'Trinity Douglas', 'Zapato', 'Aut ea quia est.', 'Azul', 'XL', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(29, 'Roselyn Wiegand', 'Camiseta', 'Rem aut officiis mollitia nesciunt quas placeat.', 'Negro', 'XL', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(30, 'Kendall Douglas', 'Camiseta', 'Sequi ipsum nemo animi.', 'Azul', 'M', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(31, 'Keenan Balistreri', 'Pantalón', 'Ut saepe quia libero.', 'Negro', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(32, 'Vernie Daugherty DDS', 'Camisa', 'Ipsa minus voluptatem nulla nam.', 'Azul', 'XL', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(33, 'Prof. Winston Jaskolski', 'Pantalón', 'Vero quod quia consequatur et.', 'Azul', 'XXXL', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(34, 'Raquel Mertz', 'Sudadera', 'Molestiae maiores cumque vitae.', 'Blanco', '40', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(35, 'Prof. Nash O\'Keefe', 'Camiseta', 'Possimus doloremque ullam provident.', 'Azul', 'XXL', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(36, 'Miss Hilda Adams DVM', 'Polo', 'Aut magnam doloremque incidunt aspernatur.', 'Rojo', 'M', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(37, 'Keith Hettinger', 'Zapato', 'Consequuntur ut hic deleniti in qui.', 'Negro', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(38, 'Maeve Kling', 'Polo', 'Aut omnis delectus dolorem architecto accusamus qui.', 'Negro', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(39, 'Jeanne Ernser DVM', 'Sudadera', 'Harum maxime natus odit odio autem illum.', 'Negro', '46', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(40, 'Colby Hand', 'Zapato', 'Qui vel odit delectus blanditiis.', 'Rojo', 'XL', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(41, 'Erwin Bradtke', 'Zapato', 'Molestiae distinctio consequatur quos autem eligendi.', 'Rojo', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(42, 'Tatyana Gleason', 'Camisa', 'Nisi voluptas neque reiciendis et impedit.', 'Azul', 'L', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(43, 'Mr. Zechariah Rodriguez', 'Pantalón', 'Dicta aut et recusandae.', 'Negro', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(44, 'Forrest Christiansen', 'Polo', 'Et debitis voluptatem quis odio.', 'Rojo', 'XXXL', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(45, 'Mable Becker', 'Camiseta', 'Dolores voluptas totam temporibus explicabo.', 'Rojo', 'L', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(46, 'Carmela Boyer', 'Camisa', 'Impedit ratione itaque quam minus.', 'Rojo', '38', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(47, 'Dr. Brendan Turcotte DVM', 'Pantalón', 'Et numquam et eveniet.', 'Rojo', 'XL', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(48, 'Elenor Shields I', 'Pantalón', 'Accusantium vero voluptas doloremque ut.', 'Blanco', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(49, 'Hillary Hilpert', 'Polo', 'Sit id molestiae quos consequatur.', 'Blanco', '46', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(50, 'Dr. Danny O\'Conner', 'Polo', 'Architecto alias et reprehenderit.', 'Blanco', 'L', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(51, 'Prof. Jaleel Dietrich', 'Polo', 'Consequuntur eum at perferendis.', 'Rojo', 'XL', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(52, 'Mr. Geovanny Weber DDS', 'Camiseta', 'Impedit iure sed ut.', 'Rojo', '46', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(53, 'Amie Ernser', 'Camisa', 'Ab et dicta autem ut.', 'Azul', 'S', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(54, 'Dr. Kirk Orn', 'Zapato', 'Nobis autem sunt placeat sint aut.', 'Negro', 'M', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(55, 'Prof. Wilmer Keebler', 'Zapato', 'Omnis nisi odit consectetur molestias aut.', 'Rojo', 'M', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(56, 'Mr. Domenic Effertz MD', 'Camiseta', 'Dolorem ex quidem adipisci neque culpa sunt.', 'Negro', 'XXL', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(57, 'Mazie Bailey', 'Polo', 'Et delectus eos fuga veritatis ullam.', 'Rojo', '42', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(58, 'Dr. Rasheed Legros Jr.', 'Zapato', 'Harum qui iure in aut.', 'Rojo', 'S', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(59, 'Letitia Homenick', 'Polo', 'Explicabo repellendus maxime voluptatem laudantium explicabo et.', 'Negro', '38', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(60, 'Ms. Millie Homenick', 'Polo', 'Molestiae molestias est aut.', 'Blanco', 'S', NULL, '2023-09-02 10:00:38', '2023-09-02 10:00:38'),
	(61, 'Sudader', 'Polo', 'Bordado Amarillo', 'Negro', 'XL', NULL, '2023-09-03 08:47:09', '2023-09-03 08:47:09'),
	(62, 'Zapato de Seguridad', 'Zapato', 'Sin cordones', 'Negro', '48', NULL, '2023-09-03 08:49:17', '2023-09-03 08:49:17'),
	(63, 'Zapato de Seguridad', 'Zapato', 'uu', 'Negro', '48', NULL, '2023-09-03 14:53:05', '2023-09-03 14:53:05');
/*!40000 ALTER TABLE `uniformidads` ENABLE KEYS */;

-- Volcando estructura para tabla doublegroupapp2.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla doublegroupapp2.users: ~0 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
	(1, 'Paco Jaez', 'pacojaez@gmail.com', NULL, '$2y$10$URb0qn7rnWJigMWb59lfCe11KsPDI/v8BRyBiTbQhnNdzF/.4qpUe', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-02 15:40:30', '2023-09-02 15:40:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
