-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 07:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imsnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `chemistries`
--

CREATE TABLE `chemistries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instrument` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complaint` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `currentstatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NotProcessedYet',
  `reviewmsg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instrumentcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chemistries`
--

INSERT INTO `chemistries` (`id`, `name`, `sid`, `instrument`, `complaint`, `status`, `created_at`, `updated_at`, `currentstatus`, `reviewmsg`, `instrumentcode`) VALUES
(14, 'anastina', 'anastina123', NULL, 'third complaint', 0, '2021-05-30 02:45:08', '2021-09-07 12:08:53', 'NotProcessedYet', NULL, ''),
(18, 'user', 'user1234', NULL, 'kkkkkkkkkkkkk', 0, '2021-05-30 04:42:14', '2021-09-03 02:16:59', 'Processing', 'processing', ''),
(26, 'user', 'user1234', 'h-1', 'new complaint', 0, '2021-06-07 21:30:50', '2021-09-07 12:09:32', 'Completed', NULL, 'h1'),
(27, 'user', 'user1234', 'computer', 'complaint one', 0, '2021-06-08 04:02:59', '2021-06-08 04:02:59', 'NotProcessedYet', NULL, 'c-1');

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instrument` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complaint` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `currentstatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NotProcessedYet',
  `reviewmsg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instrumentcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `name`, `sid`, `instrument`, `complaint`, `status`, `created_at`, `updated_at`, `currentstatus`, `reviewmsg`, `instrumentcode`) VALUES
(32, 'user', 'user1234', NULL, 'vvvvvvvvvvv', 0, '2021-05-30 04:42:41', '2021-09-07 05:29:54', 'Completed', NULL, ''),
(33, 'user', 'user1234', NULL, 'sheack success', 0, '2021-05-30 07:01:16', '2021-09-07 05:28:09', 'Processing', 'not process yet', ''),
(40, 'new', 'new12345 new12345', NULL, 'not working', 0, '2021-09-07 05:36:18', '2021-09-07 10:53:50', 'Completed', NULL, 'c-120');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `sid`, `feedback`, `created_at`, `updated_at`) VALUES
(8, 'anastina', 'anastina@gmail.com', 'anastina12', 'Feedback hhhhhhhhh', '2021-05-30 04:59:06', '2021-05-30 04:59:06'),
(17, 'user', 'user@gmail.com', 'user1234', 'still not consider the complaint', '2021-06-07 10:24:31', '2021-06-07 10:24:31');

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
(52, '2014_10_12_000000_create_users_table', 1),
(53, '2014_10_12_100000_create_password_resets_table', 1),
(54, '2019_08_19_000000_create_failed_jobs_table', 1),
(55, '2021_01_21_162208_create_computers_table', 1),
(56, '2021_01_23_065615_create_physics_table', 1),
(61, '2021_05_18_095852_create_chemistries_table', 2),
(62, '2021_05_19_131155_add_currentstatus_to_chemistries_table', 3),
(63, '2021_05_19_131720_add_reviewmsg_to_chemistries_table', 4),
(64, '2021_05_28_102609_create_feedback_table', 5),
(65, '2021_06_07_071457_add_instrumentcode_to_computers_table', 6),
(66, '2021_06_07_072514_add_instrumentcode_to_chemistries_table', 7),
(67, '2021_06_07_073131_add_instrumentcode_to_physics_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$pQ0mFUcydIiz3Fji24M/w.wJUim4SmQf6GeZ17pVOgLyXqBmUgLwa', '2021-02-09 06:21:23'),
('tisigaf357@itwbuy.com', '$2y$10$7eHPBYzfRh5/sIrE6Fi54.IlQxZ3.taWthd72zUfbikBUJezk9cZq', '2021-05-30 11:50:10'),
('adshalomi@gmail.com', '$2y$10$7VdzzMeEou2gnfk/V8tlieBT5HknvrPPmD6nc29d1WyC7aYL29.eS', '2021-08-13 00:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `physics`
--

CREATE TABLE `physics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instrument` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complaint` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reviewmsg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currentstatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NotProcessedYet',
  `instrumentcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `physics`
--

INSERT INTO `physics` (`id`, `name`, `sid`, `instrument`, `complaint`, `status`, `created_at`, `updated_at`, `reviewmsg`, `currentstatus`, `instrumentcode`) VALUES
(10, 'anastina', 'anastina123', NULL, 'second complaint', 0, '2021-05-30 02:44:19', '2021-09-02 11:53:10', 'processing', 'Processing', ''),
(14, 'user', 'user1234', NULL, 'iiiiiiiiiiii', 0, '2021-05-30 04:43:04', '2021-06-06 23:52:28', NULL, 'Completed', ''),
(15, 'user', 'user1234', NULL, 'hhhhhhhhhhhhhhh', 0, '2021-05-30 07:05:31', '2021-05-30 07:05:31', NULL, 'NotProcessedYet', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `sid`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', '1', NULL, '$2y$10$dDMjFP8Ap8NSOmHIMkKdp.hUEZqpd.6ar7uBojkqYhrusIaIowAzS', NULL, '2021-01-24 11:39:23', '2021-06-06 09:04:59'),
(6, 'newad', 'newad@gmail.com', 'newad1', '1', NULL, '$2y$10$NTvLf.O9WpYUwZ7KoWpJrOuMRPByGFUZkgnofOOCBDIPYZRILOkrS', NULL, '2021-05-21 10:58:21', '2021-05-21 10:58:21'),
(10, 'user', 'user@gmail.com', 'user1234', '0', NULL, '$2y$10$mI3V9CItVxHvImpjIpWo.unC/Xeu8wXjsgXUyZIOf8akPKj/zkGwy', NULL, '2021-05-29 12:03:35', '2021-09-04 07:16:01'),
(12, 'anastina', 'anastina@gmail.com', 'anastina123', '0', NULL, '$2y$10$BtMQ2lA7R7SmvGzQGCKo9.LXwVY38HxDVf3mp50liZpygjc8ja7p.', NULL, '2021-05-30 02:33:11', '2021-09-03 03:04:19'),
(13, 'shalomi', 'adshalomi@gmail.com', 'shalomi123', '0', NULL, '$2y$10$tgHuwhu/amZDIyPdEi9aqeCDQTw2esxD2VOaq.dthEjehc7D0x.8S', NULL, '2021-05-30 07:51:37', '2021-05-30 07:51:37'),
(17, 'check', 'xopopo2478@jmpant.com', 'check123', '0', NULL, '$2y$10$XqLgi23y1i9xLy3HTMTSPu4wA6Lc.X8ZLMXUlIlNd73RZA6KZjGM.', 'feYP3eBnT9z1cOYbQwDoDax5yCDR8XJ7g9tcQ4GNemj4XGnC2XInZTmsVJqM', '2021-06-06 22:51:24', '2021-06-07 04:24:00'),
(18, 'test new', 'pedaja7543@error57.com', 'testnew123', '0', NULL, '$2y$10$tZkgF41JpLkyx0mDdlIhAOlAeuHIP5M/kGJfTEvNaUJy8lkahLiS2', 'Y3UpNI0qvdbyuKe16j9Vmzo0jbd7MLOJ1vDlH9CiQ26fnjg6COgz0g4b8BKM', '2021-08-13 00:20:16', '2021-08-13 00:59:12'),
(19, 'shalomi1', 'shalomi1@gmail.com', 'shalomi1234', '0', NULL, '$2y$10$I.NU1QC.3cGYNUPj/Hb6N.yi1IHKrcYNVoIGruuHmubwxF8YXckQq', NULL, '2021-09-02 08:17:03', '2021-09-02 08:17:03'),
(20, 'com lab admin', 'comlabadmin@gmail.com', 'comlabadmin1', '2', NULL, '$2y$10$Q/F93Vu42/P6J2eBJODfQOkXkyjTH0WThPWY8Mug6.JSL5E/e7Z06', NULL, '2021-09-02 23:04:04', '2021-09-06 12:12:27'),
(21, 'physics lab admin', 'phylabadmin@gmail.com', 'phylabadmin1', '3', NULL, '$2y$10$TMumaXoaMBbyEz//LkRtZOhq0NubJfB0VnASo6t1/JNcvw.ZuDjwq', NULL, '2021-09-06 11:27:42', '2021-09-06 11:27:42'),
(22, 'chemistry lab admin', 'chelabadmin@gmail.com', 'chelabadmin1', '4', NULL, '$2y$10$hinvE.boxfipz.GbRl8JBOnLiqsVmrvbDqf6t6zbEuzjdf3AQY7cS', NULL, '2021-09-06 11:45:35', '2021-09-06 11:45:35'),
(23, 'new', 'new@gmail.com', 'new12345', '0', NULL, '$2y$10$pBfz9XB5RtjuJ0C0/eNMR.D90Ss1/CIYz8gGcn/cYvdCuY6BoEQri', NULL, '2021-09-07 05:34:53', '2021-09-07 05:34:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chemistries`
--
ALTER TABLE `chemistries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `physics`
--
ALTER TABLE `physics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_sid_unique` (`sid`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chemistries`
--
ALTER TABLE `chemistries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `physics`
--
ALTER TABLE `physics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
