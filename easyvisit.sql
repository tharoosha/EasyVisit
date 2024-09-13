-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220524.9aa859bdd3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 12:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easyvisit`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `doctor`, `date`, `message`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', '0812214761', 'doctor', '2024-04-27', 'urgent', 'approved', NULL, '2024-04-26 04:44:51', '2024-05-01 12:10:13'),
(2, 'pahasara', 'pahasara@gmail.com', '0812214761', 'doctor', '2024-04-27', 'urgent', 'Canceled', '1', '2024-04-26 04:46:10', '2024-05-20 10:37:42'),
(3, 'user', 'user@gmail.com', '0760625621', 'Pahasara', '2024-04-27', 'urgent', 'approved', NULL, '2024-04-26 11:36:16', '2024-05-20 10:24:46'),
(6, 'pahasara', 'pahasaratissera@gmail.com', '0760625621', 'Sandeepa', '2024-04-29', 'urgent', 'approved', '16', '2024-04-28 09:23:19', '2024-05-12 09:22:47'),
(7, 'test', 'jrssudharaka@gmail.com', '0760625621', 'Sandeepa', '2024-05-01', 'Test', 'approved', '16', '2024-04-30 12:37:09', '2024-05-12 08:51:30'),
(9, 'pahasara', 'pahasaratissera@gmail.com', '0812214761', 'Sandeepa', '2024-05-13', 'test', 'approved', '16', '2024-05-12 09:26:18', '2024-05-12 09:28:01'),
(10, 'pahasara', 'pahasaratissera@gmail.com', '0701726963', 'Sandeepa', '2024-05-13', 'test', 'Canceled', '16', '2024-05-12 09:31:34', '2024-05-12 09:32:33'),
(11, 'pahasara', 'pahasaratissera@gmail.com', '0760625621', 'Sandeepa', '2024-05-14', 'test', 'Canceled', '16', '2024-05-12 10:36:54', '2024-05-12 10:43:27'),
(12, 'pahasara', 'pahasaratissera@gmail.com', '0760625621', 'Sandeepa', '2024-05-15', 'test', 'Canceled', '16', '2024-05-12 10:53:21', '2024-05-12 11:14:25'),
(13, 'vasani', 'pahasaratissera@gmail.com', '0760625621', 'Sandeepa', '2024-05-15', 'test', 'approved', '16', '2024-05-12 11:52:22', '2024-05-12 11:53:38'),
(14, 'test', 'pahasaratissera20@gmail.com', '0812214711', 'Sandeepa', '2024-05-21', 'urgent', 'Canceled', '16', '2024-05-19 22:31:04', '2024-05-20 10:23:31'),
(15, 'Pahasara', 'pahasaratissera@gmail.com', '0760625621', 'Vethmini', '2024-05-22', 'urgent', 'approved', '16', '2024-05-20 21:36:45', '2024-05-20 21:37:55'),
(16, 'Pahasara', 'pahasaratissera20@gmail.com', '0760625621', 'Vethmini', '2024-05-23', 'urgent', 'approved', '16', '2024-05-20 23:31:48', '2024-05-20 23:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialization` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `firstName`, `lastName`, `phone`, `specialization`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Tharushi', 'Dissanayake', '0812214711', 'cardiology', '1714150625.jpeg', '2024-04-26 11:27:05', '2024-04-27 11:41:19'),
(6, 'Pahasara', 'Tissera', '0760625621', 'cardiology', '1714151687.jpeg', '2024-04-26 11:44:49', '2024-04-26 11:44:49'),
(7, 'Sandeepa', 'Sudharaka', '0715691384', 'gastroenterologist', '1714315928.jpeg', '2024-04-28 09:22:08', '2024-04-28 09:22:08'),
(8, 'nethmi', 'pabasara', '0760625621', 'cardiology', '1715522228.jpeg', '2024-05-12 08:27:08', '2024-05-12 08:27:08'),
(9, 'Thilini', 'Pathirana', '0760625622', 'haematologists', '1716221493.jpeg', '2024-05-20 10:41:33', '2024-05-20 10:41:33'),
(10, 'Kavinda', 'Pathirana', '0812214671', 'ent Surgeon', '1716221666.jpeg', '2024-05-20 10:44:26', '2024-05-20 10:44:26'),
(11, 'Vethmini', 'Pathirana', '0812214711', 'cardiology', '1716221726.jpeg', '2024-05-20 10:45:26', '2024-05-20 10:45:26'),
(12, 'Dammika', 'Jayasinghe', '0812214711', 'haematologists', '1716221806.jpeg', '2024-05-20 10:46:46', '2024-05-20 10:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `doctortimeslots`
--

CREATE TABLE `doctortimeslots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_tokens` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctortimeslots`
--

INSERT INTO `doctortimeslots` (`id`, `date`, `start_time`, `end_time`, `no_of_tokens`, `details`, `created_at`, `updated_at`) VALUES
(1, '2024-08-05', '10:00', '11:00', '10', 'add', '2024-08-03 13:45:00', '2024-08-03 13:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `name`, `email`, `phone`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'pahasara', 'pahasaratissera@gmail.com', '0760625621', 'Test', 'Pending', '2024-05-02 23:14:40', '2024-05-02 23:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `labappointments`
--

CREATE TABLE `labappointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `reporttype` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labappointments`
--

INSERT INTO `labappointments` (`id`, `name`, `email`, `phone`, `reporttype`, `date`, `message`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'test', 'pahasaratissera@gmail.com', 760625621, 'Urine Test', '2024-04-29', 'hi', 'Canceled', '16', '2024-04-28 01:41:58', '2024-05-12 08:14:34'),
(2, 'pahasara', 'pahasaratissera@gmail.com', 812214761, 'MRI Scan', '2024-04-29', 'hi', 'approved', '16', '2024-04-28 01:42:29', '2024-05-12 08:12:51'),
(3, 'pahasara', 'pahasaratissera@gmail.com', 760625621, 'Complete Blood Count (CBC)', '2024-04-29', 'hi', 'In progress', '16', '2024-04-28 01:50:07', '2024-04-28 01:50:07'),
(4, 'test', 'pahasaratissera@gmail.com', 812214761, 'MRI Scan', '2024-04-29', 'hi', 'approved', '16', '2024-04-28 01:50:43', '2024-05-19 22:36:46');

-- --------------------------------------------------------

--
-- Table structure for table `labassistants`
--

CREATE TABLE `labassistants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labassistants`
--

INSERT INTO `labassistants` (`id`, `firstname`, `lastname`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'lab', 'test', '0701726963', '2024-04-29 12:47:26', '2024-04-29 12:47:26'),
(2, 'lab', 'testn', '0760625622', '2024-04-29 12:48:45', '2024-04-29 12:48:45'),
(3, 'nethmi', 'pabasara', '0701726963', '2024-05-02 11:48:14', '2024-05-02 11:48:14'),
(4, 'Sandeepa', 'Sudharaka', '0760625621', '2024-05-20 10:42:53', '2024-05-20 10:42:53');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_01_03_171646_create_sessions_table', 1),
(7, '2024_01_16_191925_add_usertype_field_to_users', 2),
(8, '2024_01_22_145043_create_doctors_table', 2),
(9, '2024_01_24_172427_create_appointments_table', 2),
(10, '2024_02_23_185505_create_inquiries_table', 2),
(11, '2024_02_24_131615_create_labassistants_table', 2),
(12, '2024_02_24_142122_create_pharmacists_table', 2),
(13, '2024_04_23_094823_create_notifications_table', 2),
(14, '2024_04_28_060423_create_table_name', 3),
(15, '2024_04_28_061126_create_labappointment_table', 4),
(16, '2024_04_28_061452_create_labappointments_table', 4),
(17, '2024_04_28_142740_prescription', 5),
(18, '2024_04_28_143951_update_prescription_table', 6),
(19, '2024_04_28_144550_prescription', 7),
(20, '2024_04_28_162914_update_prescription_table', 8),
(21, '2024_04_28_163435_prescription', 9),
(22, '2024_04_28_171322_prescriptions', 10),
(23, '2024_04_30_164416_create_prescriptions_table', 11),
(24, '2024_08_03_175441_doctortimeslot', 12);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacists`
--

CREATE TABLE `pharmacists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pharmacists`
--

INSERT INTO `pharmacists` (`id`, `firstname`, `lastname`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'pharmacy', 'new', '0701726963', '2024-04-28 05:04:29', '2024-04-28 05:04:29'),
(2, 'pahasara', 'tissera', '0760625621', '2024-04-29 12:43:56', '2024-04-29 12:43:56'),
(3, 'Sandeepa', 'Sudharaka', '0712526587', '2024-05-20 10:43:29', '2024-05-20 10:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Prescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `name`, `dname`, `email`, `age`, `idNo`, `Prescription`, `created_at`, `updated_at`) VALUES
(1, 'pahasara', 'Sandeepa', NULL, '24', '200056400542', 'Test', '2024-04-30 11:21:53', '2024-04-30 11:21:53'),
(2, 'pahasara', 'Sandeepa', 'pahasaratissera@gmail.com', '24', '200056400542', 'Test', '2024-04-30 11:23:15', '2024-04-30 11:23:15'),
(3, 'test', 'Sandeepa', 'jrssudharaka@gmail.com', '24', '2345678990', 'Test', '2024-04-30 12:38:19', '2024-04-30 12:38:19'),
(4, 'pahasara', 'Sandeepa', 'pahasaratissera@gmail.com', '24', '200056400542', 'Test', '2024-05-02 21:26:41', '2024-05-02 21:26:41'),
(5, 'pahasara', 'Sandeepa', 'pahasaratissera@gmail.com', '24', '200056400542', 'Test', '2024-05-02 23:22:59', '2024-05-02 23:22:59'),
(6, 'test', 'Sandeepa', 'pahasaratissera20@gmail.com', '24', '200056400542', 'test', '2024-05-19 22:34:21', '2024-05-19 22:34:21'),
(7, 'test', 'Sandeepa', 'jrssudharaka@gmail.com', '24', '23456789907', 'Test 1\r\nTest 2', '2024-05-20 11:02:45', '2024-05-20 11:02:45'),
(8, 'Pahasara', 'Vethmini', 'pahasaratissera20@gmail.com', '24', '2345789089', 'Test 1\r\nTest 2', '2024-05-20 23:41:44', '2024-05-20 23:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('wbq6FrDjhHLtPIdhm0PFe4XZDNVEYr8Ika62lZye', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNDNHSzZlT21jTEtuTXNJc1Bsald2TXRWaEh1clVlTWtwUDhRUGRCMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1722712564);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `address`, `telephoneNumber`, `email`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'user', 'test', 'kandy', NULL, 'usertest@gmail.com', '0', NULL, '$2y$12$IvThElIXz11MJ5UNNxgOIu9IO1SzFpQnSbYYYLDxkKPdCCqI1KkwW', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-26 03:28:04', '2024-04-26 03:28:04'),
(2, 'admin', 'test', 'kandy', NULL, 'admintest@gmail.com', '1', '2024-05-02 16:22:21', '$2y$12$j8afNmIOrFbuDDUtnswvsu1ox7BEaKnVHSM1cod28rVfvxwAW7lQC', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-26 03:30:58', '2024-04-26 03:30:58'),
(3, 'doctor', 'test', 'kandy', '0812214711', 'doctortest@gmail.com', '2', NULL, '$2y$12$N2s7Cl//aiJRtLHMXl4uReDrNeSIIOSSQV2a64QdEb0d1sHBxmaCq', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-26 03:39:42', '2024-04-26 03:39:42'),
(4, 'doctor', 'new', 'kandy', '0812214671', 'doctornew@gmail.com', '2', NULL, '$2y$12$qZ6y7jwCN3RhdPCrfTb.luApQRPX4O1Z36eb/CcI4NhRvddqIhC.q', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-26 03:42:07', '2024-04-26 03:42:07'),
(5, 'Sandeepa', 'Sudharaka', 'kandy', '0777112354', 'doctorsandeepa@gmail.com', '2', NULL, '$2y$12$fjUEkVV85fqpQNizWhggUurF8WNXApDMCB7/RIsiDy0O5ZAf1NY3O', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-26 03:47:59', '2024-04-26 03:47:59'),
(6, 'doctor', 'user', 'kandy', '0812214756', 'doctoruser@gmail.com', '2', NULL, '$2y$12$3NT/AZ3BKfJr6dahNVlPHuhm/6FAVHfkM2pYgvCDTg4623VMOxS76', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-26 04:24:18', '2024-04-26 04:24:18'),
(16, 'Pahasara', 'Tissera', 'katugastota, kandy', NULL, 'pahasaratissera@gmail.com', '0', '2024-05-01 08:12:10', '$2y$12$vZDtQdnHF1ugUFqYafHSs.lOY4wKZLDGUyMMLIm8IOYfdkWU0zURW', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-26 12:13:23', '2024-04-26 12:13:23'),
(18, 'Heshan', 'Praneeth', 'rathnapure', '0717520334', 'heshanpraneeth244@gmail.com', '0', NULL, '$2y$12$p3kGcFwBWD9WjcUEfVuylOaPoXagXin3ZN8hnf9MtZ7ysSE9tWRCi', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-27 12:49:02', '2024-04-27 12:49:02'),
(19, 'pharmacy', 'test', 'kandy', '0701726963', 'test@gmail.com', '2', NULL, '$2y$12$y/elAgGSgOrzwACDkXsy6u.I5p.NixiUIwCS013jF0D31g/uS4wYm', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 05:01:25', '2024-04-28 05:01:25'),
(20, 'pharmacy', 'new', 'kandy', '0701726963', 'pharmacy@gmail.com', '3', NULL, '$2y$12$Ls7VmBhn/xaRvVFAFckP6ul6PUC6ZxHhFn4dv.jdFhwCQa/6umSkS', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 05:04:29', '2024-04-28 05:04:29'),
(21, 'Sandeepa', 'Sudharaka', 'rathnapure', '0715691384', 'jrssudharaka@gmail.com', '2', '2024-05-01 06:19:57', '$2y$12$L3aZq05i9bhckV7A48S6Ee5fhberKtoeSyS5Iyg1ZY3JrgxEJjYO2', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 09:22:08', '2024-04-28 09:22:08'),
(22, 'pahasara', 'tissera', 'kandy', '0760625621', 'pharmacypahasara@gmail.com', '3', '2024-05-01 06:23:04', '$2y$12$61p0jXsMPP9NV6W2QTR0zedR2Eulki5Nf7unAX7hSL8b997/N5qRu', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-29 12:43:56', '2024-04-29 12:43:56'),
(23, 'lab', 'test', 'kandy', '0701726963', 'labtest@gmail.com', '4', '2024-05-01 17:08:02', '$2y$12$ren0BduftcuTH89VnFAJWO2POUR0DonVZCOzvodir1S6YBKvvT4Qu', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-29 12:47:26', '2024-04-29 12:47:26'),
(24, 'lab', 'testn', 'kandy', '0760625622', 'labtestn@gmail.com', '4', NULL, '$2y$12$/kRlTCCNyeZgVxGQu2zUs.gRkJlQTlbgObcAQwhk.tWSHTApBFTbq', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-29 12:48:45', '2024-04-29 12:48:45'),
(26, 'nethmi', 'pabasara', 'polonnaruwa', '0701726963', 'nethmi@gmail.com', '4', NULL, '$2y$12$RC..Ge/wS5NyTEfPgNTP0ua2bUTezmyy7RsAgh9uLrfBJE63cGSOC', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-02 11:48:14', '2024-05-02 11:48:14'),
(27, 'Dammika', 'Jayasinghe', 'kandy', '0777306988', 'dammikajaye68@gmail.com', '0', NULL, '$2y$12$CgkuMqJWbjCS8nLU5HZ1A.ui0XTSKWHT0zOoMMH7C.goTMB6wgMDC', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-02 23:11:04', '2024-05-02 23:11:04'),
(29, 'nethmi', 'pabasara', 'polonnaruwa', '0760625621', 'nethmipabasara@gmail.com', '2', NULL, '$2y$12$SJpVUtoknMXCEPTA3ugS6.eZqI8tYEf2Jdga8EhZtLN60QqXpKGz2', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-12 08:27:08', '2024-05-12 08:27:08'),
(30, 'Thilini', 'Pathirana', 'kandy', '0760625622', 'doctorthilini@gmail.com', '2', NULL, '$2y$12$bgFWF1GDVokWmOyEtO6K1eoKzVJqre23Qi3f4KXiLFcoM6GVLdvla', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-20 10:41:33', '2024-05-20 10:41:33'),
(31, 'Sandeepa', 'Sudharaka', 'Rathnapura', '0760625621', 'labsandeepa@gmail.com', '4', NULL, '$2y$12$0q7CEDLO7i92tsDraDHLnOZn7o3N8F43ujI47azmb1uCmpss99nXq', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-20 10:42:53', '2024-05-20 10:42:53'),
(32, 'Sandeepa', 'Sudharaka', 'Rathnapura', '0712526587', 'pharmacysandeepa@gmail.com', '3', NULL, '$2y$12$ANj9rpzdxWre635GRxSmfuD7vynh74zMTSiYECo.5OxvpP2XXLUha', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-20 10:43:29', '2024-05-20 10:43:29'),
(33, 'Kavinda', 'Pathirana', 'Kandy', '0812214671', 'doctorkavinda@gmail.com', '2', NULL, '$2y$12$2EPO4qaU3XK2V2kfmj60BeDUqhYp4QIGmuHYz6EVI5vcdQfHdMygi', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-20 10:44:26', '2024-05-20 10:44:26'),
(34, 'Vethmini', 'Pathirana', 'Kandy', '0812214711', 'doctorvethmini@gmail.com', '2', '2024-05-21 03:07:15', '$2y$12$pboieVjr6cdM5gj4U5Gs1ONVb3SPQZnZXLLwNMQ6QDgNnb3Q4lPXu', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-20 10:45:26', '2024-05-20 10:45:26'),
(35, 'Dammika', 'Jayasinghe', 'Kandy', '0812214711', 'doctordammika@gmail.com', '2', NULL, '$2y$12$dPGhBJ.i1YkJ1qYAwA3b..7PSjmzcUTiGXh6hhp.rYGXzsy60ukVS', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-20 10:46:46', '2024-05-20 10:46:46'),
(38, 'Vasani', 'Tissera', 'kandy', '0760625621', 'pahasaratissera20@gmail.com', '0', NULL, '$2y$12$AwbG1djVoqB/.PLEIYgGfukib5zWqj.94as9R9OMo9/k61M9TloV.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-20 23:30:14', '2024-05-20 23:30:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctortimeslots`
--
ALTER TABLE `doctortimeslots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labappointments`
--
ALTER TABLE `labappointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labassistants`
--
ALTER TABLE `labassistants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indexes for table `pharmacists`
--
ALTER TABLE `pharmacists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctortimeslots`
--
ALTER TABLE `doctortimeslots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `labappointments`
--
ALTER TABLE `labappointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `labassistants`
--
ALTER TABLE `labassistants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacists`
--
ALTER TABLE `pharmacists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



