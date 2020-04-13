-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2020 at 03:36 PM
-- Server version: 5.7.29-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edii`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `no_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_birth` date NOT NULL,
  `gender` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` enum('A','B','AB','O') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_merried` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `domicile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curent_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_urgent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expected_salary` int(11) NOT NULL,
  `availablle_another_place` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `position`, `nama`, `user_id`, `no_ktp`, `place_birth`, `date_birth`, `gender`, `religion`, `blood`, `status_merried`, `domicile`, `curent_address`, `email`, `hp`, `call_urgent`, `skill`, `expected_salary`, `availablle_another_place`, `created_at`, `updated_at`) VALUES
(1, 'Programmer masa depan', 'Brillian Andrie', 1, '3315022303910003', 'Grobogan', '2020-04-01', 'L', 'Islam', 'O', 'Tidak', 'Desa Dempel Kec Karangrayung', 'Jln Ngingas Selatan no 27', 'brillianandrie@gmail.com', '081226012014', '081226012013', 'banyak banget', 800000, '1', NULL, '2020-04-02 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `courses_history`
--

CREATE TABLE `courses_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `courses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate` enum('1','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `years` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses_history`
--

INSERT INTO `courses_history` (`id`, `user_id`, `courses`, `certificate`, `years`, `created_at`, `updated_at`) VALUES
(1, 1, 'Oracle', '1', '2020-04-02', NULL, '2020-04-12 17:00:00'),
(2, 1, 'Mysql', '1', '2020-01-15', NULL, '2020-04-12 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `education_history`
--

CREATE TABLE `education_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `stage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `study` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `score` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education_history`
--

INSERT INTO `education_history` (`id`, `user_id`, `stage`, `institution_name`, `study`, `start`, `end`, `score`, `created_at`, `updated_at`) VALUES
(1, 1, 'SMA', 'SMA N1', 'IPS', '2020-04-01', '2020-04-30', 3.00, NULL, '2020-04-02 17:00:00'),
(2, 1, 'university', 'Universitas Semarang', 'TI C', '2020-04-01', '2020-04-30', 2.00, NULL, '2020-04-02 17:00:00'),
(3, 2, 'SMP', 'SMP NEGERI 45 JAKARTA', 'ILKOM', '2020-04-01', '2020-04-30', 3.00, NULL, NULL),
(4, 1, 'SD', 'SD coba coba', 'gak ada', NULL, '2020-04-30', 1.00, NULL, '2020-04-12 17:00:00');

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
(3, '2020_04_02_090151_create_biodata_table', 1),
(4, '2020_04_02_093731_create_work_history_table', 1),
(5, '2020_04_02_094000_create_education_history_table', 1),
(6, '2020_04_02_094042_create_courses_history_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `akses`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Brillian Andrie', 'brillianandrie@gmail.com', '$2y$10$vIQ1MJ/gsxvI//12EAGYB.1FngfQS1no7O.Bi9pUKJKT3uPWd.KZy', 'user', 'IeKaWceSncK8bLx0duYXwKMf2beWbyXXscyH8CWSyzj1An3PQCTogf5YBEuJ', '2020-04-02 03:40:14', '2020-04-02 03:40:14'),
(2, 'Andrie Aja', 'andrie@gmail.com', '$2y$10$YC5ym3PofnGSOf1AmGFUeuI/cfP.oU8j.oyND8yfaT/Bm350e55Se', 'user', 'qGZ1maoU7t70nB1Nnici3s1aLAC24D5pWrdy73lrT1otMeh0kFthtn9bSq01', '2020-04-02 04:42:43', '2020-04-02 04:42:43'),
(3, 'Nadia', 'nadia@gmail.com', '$2y$10$PzWlGbaVGsy7hyKV3o5WvOIpcOVuK9bxOsoqXwJk5JqFbV.J.iVKG', 'admin', 'JAqhj6IATTiau6dhaFXqfftHS39Do7yGKtovPNaYNYMko1yLjJX0FexzSMPg', '2020-04-02 07:52:48', '2020-04-02 07:52:48'),
(4, 'edii', 'edii@gmail.com', '$2y$10$rUckjqq.R.OrGq/QAWqHbeXVXG2dPwqNWWB1iCFeJfns1OCs9AHqi', 'user', 'yo1IBMELExaYEO7vGomAyokH4PxtqIM50evsKVyji9tiWYyj84FuhjHX7kiv', '2020-04-12 19:27:18', '2020-04-12 19:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `work_history`
--

CREATE TABLE `work_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `start` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_history`
--

INSERT INTO `work_history` (`id`, `user_id`, `company_name`, `position`, `salary`, `start`, `created_at`, `updated_at`) VALUES
(1, 1, 'PT Maju Mundur', 'programmer', 800000, '2020-04-01', NULL, '2020-04-12 17:00:00'),
(2, 1, 'PT Biasa aja', 'OB bukan BO', 700000, '2014-12-12', NULL, '2020-04-12 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_user_id_foreign` (`user_id`);

--
-- Indexes for table `courses_history`
--
ALTER TABLE `courses_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_history_user_id_foreign` (`user_id`);

--
-- Indexes for table `education_history`
--
ALTER TABLE `education_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `education_history_user_id_foreign` (`user_id`);

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
-- Indexes for table `work_history`
--
ALTER TABLE `work_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_history_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courses_history`
--
ALTER TABLE `courses_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `education_history`
--
ALTER TABLE `education_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `work_history`
--
ALTER TABLE `work_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `biodata_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `courses_history`
--
ALTER TABLE `courses_history`
  ADD CONSTRAINT `courses_history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `education_history`
--
ALTER TABLE `education_history`
  ADD CONSTRAINT `education_history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `work_history`
--
ALTER TABLE `work_history`
  ADD CONSTRAINT `work_history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
