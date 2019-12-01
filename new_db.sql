-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 01:33 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'abdul rehman', '', '2019-10-17 02:25:30', '2019-10-17 02:25:30'),
(5, 'rehman rehman', '', '2019-10-17 02:30:20', '2019-10-17 02:30:20'),
(6, 'sdfsdf', 'sdfsdf', '2019-10-17 04:47:21', '2019-10-17 04:47:21');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_09_060439_create_posts_table', 2),
(5, '2019_10_14_061431_image', 3),
(11, '2019_10_15_093654_create_settings_table', 4),
(12, '2019_10_16_100245_create_categories_table', 5),
(16, '2019_10_17_095407_create_tags_table', 6),
(17, '2019_10_17_063903_add_slug_column_to_posts', 7),
(18, '2019_10_22_100648_create_webs_table', 8);

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
('demo@domain.com', '$2y$10$Ijq7CYIJGl3a0uNTVDTSs.3rDifs7xhvnyyQVUQWVIjKJzloAhqnO', '2019-10-30 04:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `created_at`, `updated_at`, `image`) VALUES
(64, 'Computer Programmer', 'Introduction to Computer Programming. Introduction to the process of taking an algorithm and encoding it into a notation, a programming language, so that it can be executed by a computer.', '2019-10-18 05:53:10', '2019-10-22 01:53:42', '1571726362001.jpg'),
(65, 'Software Engineer', 'A software engineer is a person who applies the principles of software engineering to the design, development, maintenance, testing, and evaluation of computer software.', '2019-10-18 05:56:45', '2019-10-22 01:48:45', '15717268721.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`name`, `value`, `created_at`, `updated_at`) VALUES
('site_title', 'Abdul rehman', '2019-11-02 15:17:48', '2019-11-02 15:17:48'),
('facebook', 'sdf', '2019-11-02 15:17:48', '2019-11-02 15:17:48'),
('github', 'sdfsdfsd', '2019-11-02 15:17:48', '2019-11-02 15:17:48'),
('linkdin', 'fsdf', '2019-11-02 15:17:48', '2019-11-02 15:17:48'),
('logo', '21854471React-logo-11.png', '2019-11-02 15:17:48', '2019-11-02 15:17:48');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `created_at`, `updated_at`) VALUES
(9, 'sdaffsda', '2019-10-17 05:33:08', '2019-10-17 05:33:08'),
(10, 'sdddddddddddddddddddd', '2019-10-17 05:38:43', '2019-10-17 05:38:43'),
(11, 'ddddddddddddddddd', '2019-10-17 05:38:54', '2019-10-17 05:38:54'),
(12, 'ddddddddddddd', '2019-11-08 04:22:16', '2019-11-08 04:22:16'),
(13, 'wwwwwwwwwwwwwwww', '2019-11-08 04:22:25', '2019-11-08 04:22:25'),
(14, 'ddddddddddddddddddddd', '2019-11-30 19:29:22', '2019-11-30 19:29:22'),
(15, '2222222222222222222222222', '2019-11-30 19:29:36', '2019-11-30 19:29:36'),
(16, 'ddddddddddddddddd', '2019-11-30 19:29:43', '2019-11-30 19:29:43'),
(17, 'qqqqqqq', '2019-11-30 19:29:54', '2019-11-30 19:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, '111', '1111addf@ddd', NULL, '$2y$10$XgaFA3DWg8QSfLS9D/ACOuNfgFnKxpkUANzI/.45KjpuB1HK6pjzm', NULL, '2019-10-08 04:15:06', '2019-10-10 04:16:28'),
(8, 'rehman', 'rehman@yahoocom', NULL, '$2y$10$eiFl9/hnsI.2BlcEEYPg5.YqSW2yI.hmoiS02VqjtUu7wHvlnTLfy', NULL, '2019-10-08 04:18:31', '2019-10-08 04:18:31'),
(9, 'rehman@yahoo.cpom', 'ewhmsnkla@ishdn.com', NULL, '$2y$10$XI9nGzXal4GRoEDFd26gjOBkGcvwRhMnUMLOp3syiaskcGAP2NEQ.', NULL, '2019-10-08 04:18:48', '2019-10-08 04:18:48'),
(10, 'Rwhman', 'kjkjdbnmkl@kldnhsfl', NULL, '$2y$10$t6Crud/VK8FMlTc/q12n6eDA.0Q2KtWcEQGi0Xlsic2yMJXcz9bse', NULL, '2019-10-08 04:18:54', '2019-10-08 04:18:54'),
(11, 'Abdul Rehman', 'demo@domain.com', NULL, '$2y$10$wi7EItr7ZiW6sys0QfwnieS2hlmNreziX7eercxv9bkTdJa3oY/AG', NULL, '2019-10-08 05:13:19', '2019-10-17 00:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `webs`
--

CREATE TABLE `webs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btntext` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btnlink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `webs`
--

INSERT INTO `webs` (`id`, `image`, `btntext`, `btnlink`, `created_at`, `updated_at`) VALUES
(1, '01.jpg', 'ddddddddd', 'ddddddddddddddddddddd', '2019-10-22 07:21:36', '2019-10-22 07:21:36'),
(2, '01.jpg', 'ddddddddd', 'ddddddddddddddddddddd', '2019-10-22 07:22:23', '2019-10-22 07:22:23'),
(3, '001.jpg', 'kkkkkkkkk', 'kkkkkk', '2019-10-22 07:23:30', '2019-10-22 07:23:30'),
(4, '01.jpg', 'rehman', 'lkjdnskjllk', '2019-10-22 07:25:11', '2019-10-22 07:25:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `webs`
--
ALTER TABLE `webs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `webs`
--
ALTER TABLE `webs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
