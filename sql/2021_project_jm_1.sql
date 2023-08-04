-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2023 pada 07.43
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

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
-- Struktur dari tabel `applications`
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
-- Dumping data untuk tabel `applications`
--

INSERT INTO `applications` (`id`, `group_id`, `name`, `bpo`, `year`, `url`, `server`, `image`, `created_at`, `updated_at`) VALUES
(28, 13, 'Facebook', 'FB', '2020', 'https://id-id.facebook.com/', 'https://id-id.facebook.com/', '1653960263.png', '2022-05-30 18:17:21', '2022-05-30 18:24:23'),
(29, 13, 'Instagram', 'IG', '2020', 'https://www.instagram.com/?hl=id', 'https://www.instagram.com/?hl=id', '1653960423.png', '2022-05-30 18:27:03', '2022-05-30 18:27:03'),
(30, 13, 'Viewpoints', 'VW', '2020', 'https://viewpoints.fb.com/', 'https://viewpoints.fb.com/', '1653960605.png', '2022-05-30 18:30:05', '2022-05-30 18:30:05'),
(31, 14, 'Twitter', 'TW', '2020', 'https://twitter.com/i/flow/login', 'https://twitter.com/i/flow/login', '1653961030.png', '2022-05-30 18:33:13', '2022-05-30 18:37:10'),
(32, 15, 'Wikipedia', 'WI', '2020', 'https://id.wikipedia.org/wiki/Halaman_Utama', 'https://id.wikipedia.org/wiki/Halaman_Utama', '1653961254.jpg', '2022-05-30 18:40:54', '2022-05-30 18:40:54'),
(33, 16, 'Gmail', 'GM', '2020', 'https://www.google.com/intl/id/gmail/about/', 'https://www.google.com/intl/id/gmail/about/', '1653961395.jpg', '2022-05-30 18:43:15', '2022-05-30 18:43:15'),
(34, 16, 'Google', 'GG', '2020', 'https://www.google.com/?hl=id', 'https://www.google.com/?hl=id', '1653961495.png', '2022-05-30 18:44:55', '2022-05-30 18:44:55'),
(35, 17, 'Youtube', 'YT', '2020', 'https://www.youtube.com/?hl=ID', 'https://www.youtube.com/?hl=ID', '1653961721.jpg', '2022-05-30 18:48:41', '2022-05-30 18:48:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(13, 'Meta', '2022-05-30 18:14:30', '2022-05-30 18:14:30'),
(14, 'Twitter Inc.', '2022-05-30 18:31:39', '2022-05-30 18:31:39'),
(15, 'Wikimedia Foundation', '2022-05-30 18:39:25', '2022-05-30 18:39:25'),
(16, 'Google Inc.', '2022-05-30 18:42:31', '2022-05-30 18:42:31'),
(17, 'Youtube', '2022-05-30 18:48:05', '2022-05-30 18:48:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
-- Struktur dari tabel `notes`
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
-- Dumping data untuk tabel `notes`
--

INSERT INTO `notes` (`id`, `user_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(8, 7, 'Catatan harian', 'Catatan harian projek', '2022-02-09 02:00:59', '2022-03-09 19:53:25'),
(9, 8, 'Catatan harian', 'Catatan Harian Projek', '2022-02-09 02:08:28', '2022-02-09 02:08:28'),
(12, 7, 'fagbv', 'gafbgfgfghghgh', '2022-06-03 08:50:22', '2022-06-03 08:51:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `application_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `user_id`, `application_id`, `created_at`, `updated_at`) VALUES
(138, 8, 28, '2022-05-30 19:26:56', '2022-05-30 19:26:56'),
(139, 8, 29, '2022-05-30 19:26:56', '2022-05-30 19:26:56'),
(140, 8, 30, '2022-05-30 19:26:57', '2022-05-30 19:26:57'),
(141, 8, 31, '2022-05-30 19:26:57', '2022-05-30 19:26:57'),
(142, 8, 32, '2022-05-30 19:26:57', '2022-05-30 19:26:57'),
(143, 8, 33, '2022-05-30 19:26:57', '2022-05-30 19:26:57'),
(144, 8, 34, '2022-05-30 19:26:57', '2022-05-30 19:26:57'),
(145, 8, 35, '2022-05-30 19:26:57', '2022-05-30 19:26:57'),
(146, 7, 28, '2022-06-03 07:56:02', '2022-06-03 07:56:02'),
(147, 7, 29, '2022-06-03 07:56:02', '2022-06-03 07:56:02'),
(148, 7, 30, '2022-06-03 07:56:02', '2022-06-03 07:56:02'),
(149, 7, 31, '2022-06-03 07:56:02', '2022-06-03 07:56:02'),
(150, 7, 32, '2022-06-03 07:56:02', '2022-06-03 07:56:02'),
(151, 7, 33, '2022-06-03 07:56:02', '2022-06-03 07:56:02'),
(152, 7, 34, '2022-06-03 07:56:02', '2022-06-03 07:56:02'),
(153, 7, 35, '2022-06-03 07:56:02', '2022-06-03 07:56:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '2021-11-16 16:12:18', NULL),
(2, 'User', '2021-11-16 16:12:18', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `nip`, `last_name`, `email`, `image`, `username`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 1, 'admin', '12121212', 'admin', 'admin@admin.com', '', 'admin', NULL, '$2y$10$PlWV2x.Nk7Jy52IAIKPR/el1/MioHypVsOXbqP4Sr/2ihBWw9tK2K', NULL, NULL, NULL, NULL, NULL),
(8, 2, 'Muhammad', '11223344', 'Zainudin', 'Zainudin@gmail.com', '1654271820.jpg', 'Zainudin', NULL, '$2y$10$1SRzeGm4QWkdU45BKOdwQe9lL0h854jMJS.v4HzVdG72bkdH0O1tq', NULL, NULL, NULL, '2021-12-12 20:27:07', '2023-07-23 19:27:02'),
(12, 2, 'User', '13345671', 'Data', 'user@gmail.com', NULL, 'Pengguna', NULL, '$2y$10$Mk43ZznxMdnMcIbSv7oswOgmmWZ8yBwM4tSktPycJJ7HN9lZSIhCu', NULL, NULL, NULL, '2023-07-23 20:36:47', '2023-07-23 21:28:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applications_group_id_foreign` (`group_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_application_id_foreign` (`application_id`),
  ADD KEY `permissions_role_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_application_id_foreign` FOREIGN KEY (`application_id`) REFERENCES `applications` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
