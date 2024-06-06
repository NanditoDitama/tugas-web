-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2024 at 10:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pintereskw`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Technology', '2024-06-01 01:18:19', '2024-06-01 01:18:19'),
(2, 'Science', '2024-06-01 01:18:19', '2024-06-01 01:18:19'),
(3, 'Art', '2024-06-01 01:18:19', '2024-06-01 01:18:19'),
(4, 'Health', '2024-06-01 01:18:19', '2024-06-01 01:18:19'),
(5, 'Sports', '2024-06-01 01:18:19', '2024-06-01 01:18:19'),
(6, 'Wallpaper', '2024-06-01 01:18:19', '2024-06-01 01:18:19'),
(7, 'Anime', '2024-06-01 01:18:19', '2024-06-01 01:18:19'),
(8, 'Metropolis', '2024-06-01 01:18:19', '2024-06-01 01:18:19'),
(9, 'Natural', '2024-06-01 01:18:19', '2024-06-01 01:18:19'),
(10, 'car', '2024-06-01 01:18:19', '2024-06-01 01:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`id`, `category_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 7, 3, NULL, NULL),
(2, 10, 3, NULL, NULL),
(3, 3, 4, NULL, NULL),
(4, 7, 4, NULL, NULL),
(5, 3, 5, NULL, NULL),
(6, 6, 5, NULL, NULL),
(7, 7, 5, NULL, NULL),
(8, 6, 6, NULL, NULL),
(9, 7, 6, NULL, NULL),
(10, 3, 7, NULL, NULL),
(11, 6, 7, NULL, NULL),
(12, 7, 7, NULL, NULL),
(13, 6, 8, NULL, NULL),
(14, 8, 8, NULL, NULL),
(15, 9, 8, NULL, NULL),
(16, 6, 9, NULL, NULL),
(17, 7, 9, NULL, NULL),
(18, 6, 10, NULL, NULL),
(19, 7, 10, NULL, NULL),
(20, 3, 11, NULL, NULL),
(21, 6, 11, NULL, NULL),
(22, 6, 12, NULL, NULL),
(23, 7, 12, NULL, NULL),
(24, 10, 12, NULL, NULL),
(25, 6, 13, NULL, NULL),
(26, 7, 13, NULL, NULL),
(27, 8, 13, NULL, NULL),
(28, 3, 14, NULL, NULL),
(29, 6, 14, NULL, NULL),
(30, 7, 14, NULL, NULL),
(31, 6, 15, NULL, NULL),
(32, 10, 15, NULL, NULL),
(33, 3, 16, NULL, NULL),
(34, 6, 16, NULL, NULL),
(35, 3, 17, NULL, NULL),
(36, 6, 17, NULL, NULL),
(37, 3, 18, NULL, NULL),
(38, 6, 18, NULL, NULL),
(39, 7, 18, NULL, NULL),
(40, 6, 19, NULL, NULL),
(41, 7, 19, NULL, NULL),
(42, 9, 19, NULL, NULL),
(43, 6, 20, NULL, NULL),
(44, 7, 20, NULL, NULL),
(45, 7, 21, NULL, NULL),
(46, 3, 22, NULL, NULL),
(47, 6, 22, NULL, NULL),
(48, 3, 23, NULL, NULL),
(49, 6, 23, NULL, NULL),
(50, 7, 23, NULL, NULL),
(51, 6, 24, NULL, NULL),
(52, 7, 24, NULL, NULL),
(53, 7, 1, NULL, NULL),
(54, 3, 2, NULL, NULL),
(55, 6, 2, NULL, NULL),
(56, 7, 2, NULL, NULL),
(57, 9, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(7, '2024_05_29_051342_add_role_to_users_table', 3),
(8, '2024_05_30_071036_add_is_admin_to_users_table', 4),
(9, '2024_05_21_010838_create_posts_table', 5),
(10, '2024_05_31_033219_create_categories_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `di_upload_oleh` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `judul`, `deskripsi`, `di_upload_oleh`, `created_at`, `updated_at`) VALUES
(1, 'gLyqjcFHpiPWltQdLgNmcEn0b9MM9qSGR9QicxQQ.jpg', 'alone', 'anime alone', 'nandito', '2024-05-30 18:41:51', '2024-05-30 18:41:51'),
(2, 'gGZCVKUHtYk3gLFhhVcQCDs5Kx7EVB2ru6jnD5zD.jpg', 'shinna mahiru', 'waifu saya ini', 'ndt', '2024-05-30 18:49:18', '2024-05-30 18:49:18'),
(3, 'y8zGN8hAR6NIN3NbL97V5Y7OJDTlQIUAd4hwZkfC.jpg', 'anime X Jdm', 'cute anime X car in japan', 'nandito', '2024-06-01 01:20:36', '2024-06-01 01:20:36'),
(4, '4A28X4XCXJZbSSIPgUsJme6TDJlBIgW8JB9nZD2t.jpg', 'hatsune miku', 'penyanyi yang berasal dari jepang', 'nandito', '2024-06-01 01:21:37', '2024-06-01 01:21:37'),
(5, 'fAyQdDJEAueeemkkGSbk3xby5fZbvsUgSSDftWnu.jpg', 'beach', 'wallpaper estetik', 'nandito', '2024-06-01 01:22:21', '2024-06-01 01:22:21'),
(6, 'R8S7EQtGPHD2VDvG7NDHryKn3s2wSg9rHV9esTDN.jpg', 'anime', 'wallpaper landscape', 'nandito', '2024-06-01 01:23:15', '2024-06-01 01:23:15'),
(7, 'WNGxvynN0WFOFWMiwIllM4fOzY8uxnraubXYyUyH.jpg', 'anime girl', 'wallpaper anime', 'nandito', '2024-06-01 01:24:00', '2024-06-01 01:52:53'),
(8, '0xow8eckisBD00ffJqCD3toPxs1Lakpv7oenlSqh.jpg', 'japan', 'jepang negara yang indah', 'nandito', '2024-06-01 01:24:30', '2024-06-01 01:24:30'),
(9, 'i2PFo4EtUaFQmVOuYl9AMRfpIMaVxYsmYKDybBKC.jpg', 'makima', 'chainsaw man', 'nandito', '2024-06-01 01:24:53', '2024-06-01 01:24:53'),
(10, 'IFS68ojK3m2VMR4sbY6EDLfQFjd8vW9yMzzlgiEK.jpg', 'gojo satoru', 'jujutsu kaisen', 'nandito', '2024-06-01 01:25:24', '2024-06-01 01:25:24'),
(11, 'o0HYkbqLEUvqtA0dlRpckU4Dyy3rC7bBrewRNL2D.jpg', 'natural art', 'wallpaper hp', 'nandito', '2024-06-01 01:26:00', '2024-06-01 01:54:02'),
(12, 'I0OYmn7Y9k4QjRqAdwf94AIxppbYmvOKrXe9h0CL.jpg', 'rem x jdm', 'gtr', 'nandito', '2024-06-01 01:26:47', '2024-06-01 01:26:47'),
(13, 'eEOTCwyL0etHbOpoboF6y1rmKXnvi5DoMHQsKiwV.jpg', 'wallpaper', 'no komen', 'nandito', '2024-06-01 01:27:22', '2024-06-01 01:27:22'),
(14, 'lLWuxIZ0ln9Xe4W9YiXSzyQU2u1fvGN5F8vi3JoD.jpg', 'zero two', 'anime in relife', 'nandito', '2024-06-01 01:27:54', '2024-06-01 01:27:54'),
(15, 'vZpUnqC3pVeOdUByjKUV8Ck5r6tMGuBnn3jKabEi.jpg', 'skyline', 'jdm japan car', 'nandito', '2024-06-01 01:28:30', '2024-06-01 01:28:30'),
(16, 'HzkfCvsJhNX34KdCR9tuiLg4ZYlorvAl9JIMW2qG.jpg', 'astronot', 'ke mars', 'nandito', '2024-06-01 01:29:11', '2024-06-01 01:29:11'),
(17, 'twb0dPra3nTkZlEauFljgy5hBgmLwa3gq9yNfIZl.jpg', 'wallpaper', 'wallpaper bagus untuk hp', 'nandito', '2024-06-01 01:29:48', '2024-06-01 01:29:48'),
(18, 'aOitROmHxmo0YRrMPtxUnucIO6yyIeJzg64I0IZB.jpg', 'wallpaper anime', 'cocok buat memperbagus tampilan hp', 'nandito', '2024-06-01 01:30:36', '2024-06-01 01:30:36'),
(19, 'hrT7zmPkP8PSsg1Kbv6ZKlK5usgq5qwCxh9xrpMX.jpg', 'anim', 'natural anim', 'nandito', '2024-06-01 01:31:09', '2024-06-01 01:31:09'),
(20, '0023TrRFklRJZrsYWeyQ730jcUuD5qzfQ4quEuLE.jpg', 'mahiru', 'waifu saya', 'nandito', '2024-06-01 01:32:06', '2024-06-01 01:32:06'),
(21, 'uTqlxYUvGNngtGE66DQkweBgkuZRthzihrP9zOni.jpg', 'raiden shogun', 'pp anime', 'nandito', '2024-06-01 01:32:45', '2024-06-01 01:32:45'),
(22, 'iAKSHagF91cMB0HqQwpipJa7kLdFfGTVfViC5sHS.jpg', 'image', 'wallpaper', 'nandito', '2024-06-01 01:33:24', '2024-06-01 01:33:24'),
(23, 'vThk63CWJ7SzxUk356FlajdztPGqbkMXP9DXNTaG.gif', 'pixel', 'gif pixel wallpaper', 'nandito', '2024-06-01 01:34:12', '2024-06-01 01:34:12'),
(24, 'AEKFF3a4uH2x2ioRB4gI8zgrkqpbsPKWVEcv72kB.jpg', 'sinomiya', 'wallpaper pc', 'nandito', '2024-06-01 01:34:50', '2024-06-01 01:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `is_admin`) VALUES
(1, 'ndt', 'ndtdtm098@gmail.com', NULL, '$2y$12$QO/LVKWuKeCEn0VMBhQ9cOWIkolHLqJON9vxsP57DqqmPWExZtwZm', 'D9knPt4Y7aR2T6vaK29ztuDfkEiAKxOcnemi5YXZpM3D8KnjTH6NwR6yTEdr', '2024-05-28 22:12:49', '2024-05-28 22:12:49', 'user', 0),
(3, 'nandito', 'nandito@gmail.com', NULL, '$2y$12$Rlrcg.K70KFw2rGAjHS/JOk0Kz.2n2YXlP4wFEibw4B2fNkVIVYW6', NULL, '2024-05-30 00:22:17', '2024-05-30 00:22:17', 'user', 0),
(4, 'admin', 'admin123@gmail.com', NULL, '$2y$12$/kZSf8JgEoMyokpav1dcUuUOgkJE4FyBdQIAHXVxMOj.RyxKCQWRC', NULL, '2024-05-30 03:02:53', '2024-05-30 03:05:52', 'user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_post_category_id_foreign` (`category_id`),
  ADD KEY `category_post_post_id_foreign` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_post`
--
ALTER TABLE `category_post`
  ADD CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
