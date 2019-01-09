-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 06:10 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loker`
--

-- --------------------------------------------------------

--
-- Table structure for table `lokers`
--

CREATE TABLE `lokers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` int(11) NOT NULL,
  `exp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loker` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokers`
--

INSERT INTO `lokers` (`id`, `id_user`, `judul`, `perusahaan`, `alamat`, `email`, `hp`, `exp`, `loker`, `created_at`, `updated_at`) VALUES
(6, 1, 'baru baru', 'umar', 'umar', 'fatkulumar@gmail.com', 1234567, 'uumar', 'acsac', '2019-01-05 05:51:32', '2019-01-05 05:51:32'),
(7, 1, 'satuuu', 'satu', 'umar', 'fatkulumar@gmail.com', 1234567, 'uumar', 'cxsa', '2019-01-05 06:46:59', '2019-01-05 21:14:04'),
(8, 1, 'satu', 'satu', 'satu', 'satu@sattu.com', 1234567, 'satu', 'sayusaafkjsdkf', '2019-01-05 08:13:25', '2019-01-05 08:13:25'),
(9, 1, 'segerrrrr', 'satu', 'satu', 'satu@sattu.com', 1234567, 'satu', 'sayusaafkjsdkf', '2019-01-05 08:13:41', '2019-01-05 08:13:41'),
(10, 1, 'segerrrrr', 'satu', 'satu', 'satu@sattu.com', 1234567, 'satu', 'sayusaafkjsdkf', '2019-01-05 08:14:04', '2019-01-05 08:14:04'),
(11, 1, 'satu', 'satu', 'satu', 'satu@sattu.com', 1234567, 'satu', 'sayusaafkjsdkf', '2019-01-05 08:14:35', '2019-01-05 08:14:35'),
(12, 1, 'satu', 'satu', 'satu', 'satu@sattu.com', 1234567, 'satu', 'sayusaafkjsdkf', '2019-01-05 08:15:25', '2019-01-05 08:15:25'),
(13, 1, 'satu', 'umar', 'umar', 'fatkulumar@gmail.com', 1234567, 'uumar', 'sxasd', '2019-01-06 01:33:18', '2019-01-06 01:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_04_170622_create_lokers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fatkulumar', 'fatkulumar@gmail.com', NULL, '$2y$10$kab0vV8KZXaNw1cOGS/AWuPoIF1bYv7HmhDmS6P6yKYsl0ZtwQSp.', 'V6yarBBWyDQimVYeo4yPZJcO65B1KY8abDvnA5bxIHEfJ4gDgExH0Tmz0vvU', '2019-01-05 05:27:37', '2019-01-05 05:27:37'),
(2, 'umar', 'umar@umar.com', NULL, '$2y$10$2DVbbC0KW.kxskHJY3VWKurlEplVVJ3I5xUg.fcC.uwUHKrhgj7dS', '0RE0voNWP2lNdTP7jMqAnsH8pmnbziEITcvxYqrXEMs9R3MdVVXYxRs2nTIc', '2019-01-05 06:12:54', '2019-01-05 06:12:54'),
(3, 'sayang', 'sayang@sayang.com', NULL, '$2y$10$bsKjqHCXljl892cem6NjrOqzBy9Nr27H7sCW1YUH5gPuL6Fe2OGdy', 'fRR6ZRN1GjUtdElGU1Rp1bkuWR2pOO3f4rexsRHSeDwMctoBCTVkPw4JYr0G', '2019-01-05 06:15:19', '2019-01-05 06:15:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lokers`
--
ALTER TABLE `lokers`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lokers`
--
ALTER TABLE `lokers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
