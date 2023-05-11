-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 07:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `serial` varchar(255) NOT NULL,
  `dep` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `app_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `phone`, `date`, `serial`, `dep`, `doctor`, `status`, `app_id`, `created_at`, `updated_at`) VALUES
(1, 'Mr. John Deo', '12345678901', '15-05-2023', '21313', 'Obstetrics and gynecology', 'Debra Grant', 'Pending', '644f514444fe11682919748', '2023-04-30 23:42:28', '2023-05-01 06:06:15'),
(2, 'Mrs. Jane Deo', '12345678901', '01-05-2023', '354345', 'Cardiology', 'Debra Grant', 'Approved', '644f51d51ef591682919893', '2023-04-30 23:44:53', '2023-05-01 06:07:15'),
(3, 'Mr. John Deo', '54646464', '20-05-2023', '464', 'Pediatrics', 'Patrick Newman', 'Pending', '644f52cb7a6d51682920139', '2023-04-30 23:48:59', '2023-04-30 23:48:59'),
(4, 'Mr. John Deo', '12345678901', '16-05-2023', '464', 'Neurology', 'Snyder Debra', 'Pending', '644f7d0d75a891682930957', '2023-05-01 02:49:17', '2023-05-01 06:23:35'),
(5, 'Mr. John', '12345678901', '17-05-2023', '464', 'Dermatology', 'Amelia Grant', 'Pending', '644f7db626a361682931126', '2023-05-01 02:52:06', '2023-05-01 06:23:10'),
(6, 'Mr. John', '12345678901', '25-05-2023', '21313', 'Dermatology', 'Amelia Grant', 'Pending', '644fea592ef111682958937', '2023-05-01 10:35:37', '2023-05-01 10:36:03'),
(7, 'Mr. John Deo', '12345678901', '31-05-2023', '464', 'Dermatology', 'Ernesto Vargas', 'Pending', '645683549e24c1683391316', '2023-05-06 10:41:56', '2023-05-06 10:41:56'),
(8, 'Mr. John Deo', '12345678901', '31-05-2023', '21313', 'Cardiology', 'Emma Walker', 'Pending', '64568368d1d5e1683391336', '2023-05-06 10:42:16', '2023-05-06 10:42:16'),
(9, 'Mr. John Deos', '12345678901', '31-05-2023', '21313', 'Emergency medicine', 'Ernesto Vargas', 'Apporve', '6456837e54cd11683391358', '2023-05-06 10:42:38', '2023-05-06 10:42:38'),
(10, 'Mr. John Deos', '12345678901', '15-05-2023', '464', 'Dermatology', 'Ernesto Vargas', 'Pending', '645683979ce701683391383', '2023-05-06 10:43:03', '2023-05-06 10:43:03'),
(11, 'Mr. John', '12345678901', '23-05-2023', '21313', 'Cardiology', 'Emma Walker', 'Pending', '645683a9cb83b1683391401', '2023-05-06 10:43:21', '2023-05-06 10:43:21'),
(12, 'Mr. John Deos', '12345678901', '24-05-2023', '21313', 'Cardiology', 'Emma Walker', 'Pending', '645683bf23da91683391423', '2023-05-06 10:43:43', '2023-05-06 10:43:43'),
(13, 'Mrs Jane Deo', '12345678901', '01-05-2023', '21313', 'Cardiology', 'Joe Larson', 'Approved', '645683fc891e01683391484', '2023-05-06 10:44:44', '2023-05-06 10:46:45');

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
(5, '2023_05_01_051427_create_appointments_table', 2),
(6, '2023_05_01_142330_create_patients_table', 3);

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `b_pressure` varchar(255) NOT NULL,
  `pulse` varchar(255) NOT NULL,
  `temp` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `casualty` varchar(255) NOT NULL,
  `dep` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `patient_type` varchar(255) NOT NULL,
  `ad_date` varchar(255) NOT NULL,
  `bed` varchar(255) NOT NULL,
  `bed_number` varchar(255) NOT NULL,
  `test_report` varchar(255) NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
