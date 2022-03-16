-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 09:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2021_project_jm_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bpo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `server` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `group_id`, `name`, `bpo`, `year`, `url`, `server`, `image`, `created_at`, `updated_at`) VALUES
(5, 4, 'OP Manager Manage Engine', 'ITE', '2014', 'http://opmanager.jasamarga.co.id:8060', '-', '1644047419.png', '2021-12-12 20:33:20', '2022-02-05 00:50:19'),
(6, 5, 'Manage Engine Servicedesk Plus', 'ITE', '2014', 'http://servicedesk.jasamarga.co.id:8080', '-', '1644047711.png', '2021-12-12 20:35:12', '2022-02-05 00:55:11'),
(7, 4, 'Manage Engine Application Manager', 'ITE', '2014', 'http://appmanager.jasamarga.co.id:9090', '-', '1644047806.png', '2021-12-12 20:36:02', '2022-02-05 00:56:46'),
(8, 1, 'Penetration Tester Aplication (Acunetix)', 'ITE', '2018', 'https://pentest.jasamarga.co.id:3443/', '-', '1643841016.png', '2021-12-12 23:09:28', '2021-12-18 03:21:31'),
(9, 1, 'Vulnerability Management Aplication', 'ITE', '2018', 'https://vulman.jasamarga.co.id/', '-', '1643841460.png', '2021-12-12 23:10:12', '2021-12-18 03:22:34'),
(10, 1, 'Firewall to external (Fortigate FG 2)', 'ITE', '2020', 'https://fg2.jasamarga.co.id:8443', '-', '1643841837.png', '2021-12-12 23:11:02', '2021-12-12 23:11:02'),
(11, 2, 'ICON+ (MRTG Provider IT Jasa Marga)', 'ITE', '2014', 'https://mrtg.iconpln.co.id/login', '-', '1643851217.png', '2021-12-18 10:04:56', '2021-12-15 23:03:46'),
(12, 2, 'CNI (MRTG Provider IT Jasa Marga)', 'ITE', '2020', 'https://cacti.wimax.net.id/', '-', '1643843479.png', '2021-12-18 10:04:40', '2021-12-15 20:01:51'),
(13, 1, 'Firewall to external (Fortigate FG 1)\r\n', 'ITE', '2020', 'https://fg1.jasamarga.co.id:8443', '-', '1643843565.png', '2021-12-18 10:04:22', '2021-12-15 20:02:17'),
(14, 8, 'F5 Link Controller 1', 'ITE', '2014', 'https://lc1.jasamarga.co.id/tmui/login.jsp', '-', '1643850815.png', '2021-12-18 10:01:47', '2021-12-18 03:20:19'),
(15, 8, 'F5 Link Controller 2', 'ITE', '2014', 'https://lc2.jasamarga.co.id/tmui/login.jsp', '-', '1643850830.png', '2021-12-18 10:05:13', '2021-12-18 03:20:41'),
(16, 11, 'F5 ASM Pusat', 'ITE', '2014', 'https://asmpusat.jasamarga.co.id/tmui/login.jsp', '-', '1643850845.png', '2021-12-18 10:05:13', '2021-12-18 03:22:08'),
(17, 11, 'F5 LTM Pusat', 'ITE', '2014', 'https://ltm.jasamarga.co.id/tmui/login.jsp', '-', '1643850882.png', '2021-12-18 10:09:09', '2021-12-18 03:21:14'),
(18, 11, 'F5 ASM Colo', 'ITE', '2014', 'https://asmcolo.jasamarga.co.id/tmui/login.jsp', '-', '1643850902.png', '2021-12-18 10:09:09', '2021-12-18 03:22:57'),
(19, 10, 'Vcenter Pusat', 'ITE', '2018', 'https://10.1.4.16/', '-', '1643850655.png', '2021-12-18 10:13:45', '2021-12-18 03:23:48'),
(20, 10, 'Vcenter Colo', 'ITE', '2018', 'https://10.14.4.62/', '-', '1643850674.png', '2021-12-18 10:13:45', '2021-12-18 03:24:26'),
(21, 7, 'Exchange admin (Microsoft Exchange 2013)', 'ITE', '2014', 'https://webmail.jasamarga.co.id/ecp/', '-', '1643849045.png', '2021-12-18 10:16:35', '2021-12-18 03:24:43'),
(22, 2, 'Telkom Astinet (MRTG Provider IT Jasa Marga)', 'ITE', '2009', 'https://telkomcare.telkom.co.id/mrtgnetcare2/graph', '-', '1644051040.png', '2022-02-05 01:50:40', '2022-02-05 01:50:40'),
(23, 9, 'Riverbed Steelconnect', 'ITE', '2020', 'https://jasamarga.riverbed.cc/login', '-', '1643849295.png', '2022-02-05 01:52:20', '2022-02-05 01:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Security', '2021-12-06 05:23:56', '2021-12-15 19:56:33'),
(2, 'MRTG', '2021-12-06 05:24:16', '2021-12-12 20:28:52'),
(4, 'Aplications Monitoring', '2021-12-12 20:30:55', '2021-12-12 20:30:55'),
(5, 'Aplications Ticketing', '2021-12-12 20:31:23', '2021-12-12 20:31:23'),
(6, 'Etc.', '2021-12-18 03:00:18', '2021-12-18 03:00:18'),
(7, 'E-Mail Enterprise', '2022-02-05 01:45:47', '2022-02-05 01:45:47'),
(8, 'Load Balancer Network', '2022-02-05 01:46:11', '2022-02-05 01:46:11'),
(9, 'SD-WAN', '2022-02-05 01:47:17', '2022-02-05 01:47:17'),
(10, 'Virtualization', '2022-02-05 01:47:52', '2022-02-05 01:47:52'),
(11, 'Web Application Filtering', '2022-02-05 01:48:27', '2022-02-05 01:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_11_15_135306_create_roles_table', 1),
(6, '2021_11_16_140229_add_role_id_to_users_table', 1),
(7, '2021_11_16_144332_create_applications_table', 1),
(11, '2021_11_16_161425_add_imgae_to_table_applications', 2),
(12, '2021_11_17_074126_create_permissions_table', 3),
(14, '2021_12_06_111849_create_groups_table', 4),
(15, '2021_12_06_121018_add_group_id_to_application_table', 5),
(17, '2021_12_07_135449_add_username_to_users_table', 6),
(18, '2021_12_07_141013_add_nip_to_users_table', 7),
(19, '2022_02_05_034439_create_notes_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `user_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(3, 9, 'sss', 'sssd', '2022-02-04 21:14:39', '2022-02-04 21:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `application_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `user_id`, `application_id`, `created_at`, `updated_at`) VALUES
(38, 8, 5, '2021-12-16 04:35:37', '2021-12-16 04:35:37'),
(39, 8, 6, '2021-12-16 04:35:37', '2021-12-16 04:35:37'),
(40, 8, 7, '2021-12-16 04:35:37', '2021-12-16 04:35:37'),
(41, 8, 8, '2021-12-16 04:35:37', '2021-12-16 04:35:37'),
(42, 8, 9, '2021-12-16 04:35:37', '2021-12-16 04:35:37'),
(43, 8, 10, '2021-12-16 04:35:37', '2021-12-16 04:35:37'),
(44, 8, 11, '2021-12-16 04:35:37', '2021-12-16 04:35:37'),
(45, 8, 12, '2021-12-16 04:35:37', '2021-12-16 04:35:37'),
(46, 8, 13, '2021-12-16 04:35:37', '2021-12-16 04:35:37'),
(65, 7, 5, '2022-02-05 01:54:52', '2022-02-05 01:54:52'),
(66, 7, 6, '2022-02-05 01:54:52', '2022-02-05 01:54:52'),
(67, 7, 7, '2022-02-05 01:54:52', '2022-02-05 01:54:52'),
(68, 7, 8, '2022-02-05 01:54:52', '2022-02-05 01:54:52'),
(69, 7, 9, '2022-02-05 01:54:52', '2022-02-05 01:54:52'),
(70, 7, 10, '2022-02-05 01:54:52', '2022-02-05 01:54:52'),
(71, 7, 11, '2022-02-05 01:54:52', '2022-02-05 01:54:52'),
(72, 7, 12, '2022-02-05 01:54:52', '2022-02-05 01:54:52'),
(73, 7, 13, '2022-02-05 01:54:52', '2022-02-05 01:54:52'),
(74, 7, 14, '2022-02-05 01:54:52', '2022-02-05 01:54:52'),
(75, 7, 15, '2022-02-05 01:54:52', '2022-02-05 01:54:52'),
(76, 7, 16, '2022-02-05 01:54:52', '2022-02-05 01:54:52'),
(77, 7, 17, '2022-02-05 01:54:53', '2022-02-05 01:54:53'),
(78, 7, 18, '2022-02-05 01:54:53', '2022-02-05 01:54:53'),
(79, 7, 19, '2022-02-05 01:54:53', '2022-02-05 01:54:53'),
(80, 7, 20, '2022-02-05 01:54:53', '2022-02-05 01:54:53'),
(81, 7, 21, '2022-02-05 01:54:53', '2022-02-05 01:54:53'),
(82, 7, 22, '2022-02-05 01:54:53', '2022-02-05 01:54:53'),
(83, 7, 23, '2022-02-05 01:54:53', '2022-02-05 01:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '2021-11-16 16:12:18', NULL),
(2, 'User', '2021-11-16 16:12:18', NULL),
(3, 'Vendor', '2021-12-12 20:26:13', '2021-12-12 20:26:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `nip`, `last_name`, `email`, `image`, `username`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 1, 'admin', '12121212', 'admin', 'admin@admin.com', '', 'admin', NULL, '$2y$10$PlWV2x.Nk7Jy52IAIKPR/el1/MioHypVsOXbqP4Sr/2ihBWw9tK2K', NULL, NULL, NULL, NULL, NULL),
(8, 2, 'Muhammad', '11223344', 'Zainudin', 'Zainudin@gmail.com', '1643548910.jpg', 'Zainudin', NULL, '$2y$10$gECFpBa/FDnx8NdAu7lvDOyRyWsydKX4F6ck4lDoAI.p5Q5mO7wVa', NULL, NULL, NULL, '2021-12-12 20:27:07', '2022-01-30 06:21:50'),
(9, 2, 'Handoko', '11217052', 'Adji Pangestu', 'handokoadjipangestu@gmail.com', NULL, 'handokoadjip', NULL, '$2y$10$Y9jtNdIM91gkwS2Wq7k04u9KVmjdahAfWG0i/EOvxqns8j7BF5gGe', NULL, NULL, NULL, '2022-02-04 21:00:33', '2022-02-04 21:00:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applications_group_id_foreign` (`group_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_application_id_foreign` (`application_id`),
  ADD KEY `permissions_role_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_application_id_foreign` FOREIGN KEY (`application_id`) REFERENCES `applications` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
