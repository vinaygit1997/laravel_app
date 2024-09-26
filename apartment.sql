-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2024 at 08:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apartment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `apartment_name` varchar(255) NOT NULL,
  `apartment_purpose` varchar(255) NOT NULL,
  `apartment_address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `user_id`, `name`, `mobile`, `email`, `city`, `state`, `country`, `pincode`, `apartment_name`, `apartment_purpose`, `apartment_address`, `created_at`, `updated_at`) VALUES
(1, 2, 'Soujanya', '9492003252', 'pandralasoujanya@gmail.com', 'Karimnagar', 'Telangana', 'India', '505001', 'Skyline Beverly park', 'Apartment', '8-7-270/1', '2024-09-24 07:32:44', '2024-09-24 07:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `admin_otps`
--

CREATE TABLE `admin_otps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `otp` varchar(255) NOT NULL,
  `is_used` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_otps`
--

INSERT INTO `admin_otps` (`id`, `user_id`, `otp`, `is_used`, `created_at`, `updated_at`) VALUES
(1, 2, '508889', 1, NULL, NULL),
(2, 8, '171922', 1, NULL, NULL),
(3, 9, '959275', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `entry_passes`
--

CREATE TABLE `entry_passes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `visitor_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `pass_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `paid_date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facility_name` varchar(255) NOT NULL,
  `time_slot` time NOT NULL,
  `charge_per_day` decimal(8,2) NOT NULL,
  `cancel_days` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facilities_booking`
--

CREATE TABLE `facilities_booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facility_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `booked_for` varchar(255) NOT NULL,
  `community_purpose` tinyint(1) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `block` varchar(255) NOT NULL,
  `floor` int(11) NOT NULL,
  `flat_number` varchar(255) NOT NULL,
  `flat_type` varchar(255) NOT NULL,
  `area` double NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `help_desk_requests`
--

CREATE TABLE `help_desk_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `request_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `office` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `preferred_date` date DEFAULT NULL,
  `urgent` tinyint(1) NOT NULL DEFAULT 0,
  `attachments` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'OPEN',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `help_desk_requests`
--

INSERT INTO `help_desk_requests` (`id`, `request_title`, `description`, `office`, `category`, `preferred_date`, `urgent`, `attachments`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Common Issue', 'lkklkl', 'A-202', 'iii', '2024-09-26', 1, '1727243815-bigbye_logo.jpg', 'OPEN', '2024-09-25 00:26:55', '2024-09-25 00:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_charges`
--

CREATE TABLE `maintenance_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount_per_sqt` decimal(10,2) NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maintenance_charges`
--

INSERT INTO `maintenance_charges` (`id`, `amount_per_sqt`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 3.00, 2, '2024-09-25 04:47:52', '2024-09-25 04:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_payments`
--

CREATE TABLE `maintenance_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maintenance_payments`
--

INSERT INTO `maintenance_payments` (`id`, `user_id`, `amount`, `payment_date`, `created_at`, `updated_at`) VALUES
(1, 8, 1000.00, '2024-09-25 04:21:23', '2024-09-25 04:21:23', '2024-09-25 04:21:23'),
(2, 8, 1000.00, '2024-09-25 05:20:13', '2024-09-25 05:20:13', '2024-09-25 05:20:13'),
(3, 8, 4500.00, '2024-09-25 06:24:32', '2024-09-25 06:24:32', '2024-09-25 06:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `manager_deatils`
--

CREATE TABLE `manager_deatils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qualifiacation` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `aadhar_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(17, '2024_09_17_102927_add_resident_id_to_resident_accounts_table', 3),
(21, '2024_09_18_044650_facilities', 6),
(24, '2024_09_19_093524_create_expenses_table', 7),
(25, '2024_09_20_121913_create_facilities_table', 8),
(54, '0001_01_01_000000_create_users_table', 9),
(55, '0001_01_01_000001_create_cache_table', 9),
(56, '0001_01_01_000002_create_jobs_table', 9),
(57, '2024_04_05_143013_add_type_to_users_table', 9),
(58, '2024_08_17_095434_create_entry_passes_table', 9),
(59, '2024_08_26_065016_create_visitors_table', 9),
(60, '2024_08_27_063455_create_categories_table', 9),
(61, '2024_08_28_082856_create_admin_details_table', 9),
(62, '2024_08_28_100820_create_resident_details_table', 9),
(63, '2024_08_28_111750_create_watchman_details_table', 9),
(64, '2024_08_28_111804_create_manager_details_table', 9),
(65, '2024_08_30_104458_add_qr_code_filename_to_visitors_table', 9),
(66, '2024_08_30_114106_add_visitor_email_to_visitors_table', 9),
(67, '2024_08_31_105641_add_area_sft_to_resident_details_table', 9),
(68, '2024_09_14_091636_create_admin_otps_table', 9),
(69, '2024_09_17_081325_create_resident_accounts_table', 9),
(70, '2024_09_18_081239_create_vendors_table', 9),
(71, '2024_09_18_110244_create_staff_table', 9),
(72, '2024_09_18_172119_create_expenses_table', 9),
(73, '2024_09_22_071604_create_flats_table', 9),
(74, '2024_09_22_080741_create_maintenance_charges_table', 9),
(75, '2024_09_23_100926_create_facilities_booking_table', 9),
(76, '2024_09_24_105704_create_vehicles_table', 9),
(79, '2024_09_24_123807_create_vehicles_table', 10),
(80, '2024_09_25_055100_create_help_desk_requests_table', 11),
(81, '2024_09_25_092214_create_maintenance_payments_table', 12),
(82, '2024_09_25_120347_create_projects_table', 13),
(83, '2024_09_26_054833_create_parking_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE `parking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slot_no` varchar(255) NOT NULL,
  `slot_name` varchar(255) NOT NULL,
  `slot_type` varchar(255) NOT NULL,
  `block` varchar(255) NOT NULL,
  `unit_no` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `vehicle_no` varchar(255) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `rfid_no` varchar(255) DEFAULT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `additional_info` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`id`, `slot_no`, `slot_name`, `slot_type`, `block`, `unit_no`, `status`, `name`, `vehicle_no`, `vehicle_type`, `rfid_no`, `from_date`, `to_date`, `additional_info`, `created_at`, `updated_at`) VALUES
(1, '1', 'slotA', '4 wheeler', 'B', '201', 'Active', 'Soujanya', '12234', 'Car', '125333665456', '2024-09-26', '2024-09-27', 'This is a visitor vehicle', '2024-09-26 00:24:22', '2024-09-26 00:24:48');

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `status` enum('Open','Closed','In Progress') NOT NULL DEFAULT 'Open',
  `priority` enum('low','medium','high') NOT NULL DEFAULT 'low',
  `driven_by` varchar(255) DEFAULT NULL,
  `target_date` date DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `category`, `topic`, `status`, `priority`, `driven_by`, `target_date`, `file_path`, `note`, `created_at`, `updated_at`) VALUES
(1, 'iii', 'apartment visitors', 'Closed', 'medium', 'Association', '2024-09-25', 'attachments/dJE7IZbKcMif7rWvEkksL0jxnzwiOWHN5V9bBeMx.webp', 'Anyone can participate', '2024-09-25 06:40:23', '2024-09-25 06:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `resident_accounts`
--

CREATE TABLE `resident_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resident_id` bigint(20) UNSIGNED NOT NULL,
  `block_name` varchar(255) NOT NULL,
  `floor` int(11) NOT NULL,
  `flat_number` varchar(255) NOT NULL,
  `flat_type` varchar(255) NOT NULL,
  `amount_per_sft` decimal(8,2) NOT NULL,
  `square_feet` int(11) NOT NULL,
  `maintenance_fee` decimal(8,2) NOT NULL,
  `amount_type` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resident_details`
--

CREATE TABLE `resident_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `flat_number` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `block` varchar(255) DEFAULT NULL,
  `flat_type` varchar(250) NOT NULL,
  `flat_holder_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `aadhar_no` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `family_members` int(11) DEFAULT NULL,
  `vehicles` int(11) DEFAULT NULL,
  `area` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resident_details`
--

INSERT INTO `resident_details` (`id`, `user_id`, `admin_id`, `flat_number`, `floor`, `block`, `flat_type`, `flat_holder_name`, `name`, `aadhar_no`, `mobile`, `email`, `family_members`, `vehicles`, `area`, `created_at`, `updated_at`) VALUES
(1, 8, 2, '235', '2', 'B', '2bhk', 'Soujanya', 'Soujanya', '935767756357', '8484829536', 'sspandrala261126@gmail.com', 3, 2, 1500, '2024-09-25 00:08:54', '2024-09-25 00:08:54'),
(2, 9, 2, '235', '2', 'B', '2bhk', 'Hemanth', 'Hemanth', '935767756357', '95686547864', 'uppalahemanth4@gmail.com', 4, 2, 1400, '2024-09-25 04:50:02', '2024-09-25 04:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1Ue9t1a5GmAduh43CCMg5vrVppPfacqSIlVnqxtK', 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMW1xVFpFN3N6REFVak9rcWlYcGxDR3JuT0JwT1BndkJDSVpYbnBLTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYWludGVuYW5jZS1wYXltZW50Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6ODt9', 1727269255),
('bOQElkWFUIyvPUBXlwfbCc3qC9Celtb2pp4bc4Nv', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUkZkVkVKam1iU3FWS3J6SWg0dGhTdzNhU3ZqeWMwSHN4QzJ2YXQ2NCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9vcGVucmVxdWVzdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1727330431),
('fBwUQHkhENVwMrFAKok9RSfwa2KlGN0kr9I7ngdS', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWGNVM2N3MXZiYmFqdjZibjExdjdQMDlmRXpzNDBHTDY5OTlKaWlSTCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9hZG1pbi1maWxlcy9yZXNpZGVudC1kb2NzIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1727266271),
('GoOtG6FVvrAPXbVQGlPk6tBpEKSL6Ubpwn9QK08k', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSWJDZ2NpUzJYUmo5YnVWQzV5aXU1ak9CbHhNVlZZcWFCWlRWN2JSeCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1727258912);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
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
  `mobile` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1, 'Soujanya', 'soujanya@gmail.com', '9492003253', NULL, '$2y$12$L/UzIC0eUOSk3CE30CsVgeJHnTl0FyKE9Oo4lSGS2dpHWGiTFYPb.', NULL, '2024-09-24 07:31:55', '2024-09-24 07:31:55', 0),
(2, 'Soujanya', 'pandralasoujanya@gmail.com', '9492003252', NULL, '$2y$12$.hSiUKLliVtK7.jqWsyA0ebmxEImCb50XYboVo8nIOMH.O3BuYoNu', NULL, '2024-09-24 07:32:44', '2024-09-24 07:33:33', 1),
(3, 'Saikumar', 'soujanya123@gmail.com', '9492003256', NULL, NULL, NULL, '2024-09-24 07:36:08', '2024-09-24 07:36:08', 3),
(4, 'Saikumar', 'pandrala261126@gmail.com', '9492003542', NULL, NULL, NULL, '2024-09-24 07:39:09', '2024-09-24 07:39:09', 3),
(5, 'Sai', 'pandrala@gmail.com', '9492003259', NULL, 'Soujanya@123', NULL, '2024-09-24 07:40:34', '2024-09-24 07:40:34', 3),
(6, 'Soujanya', 'shubham@gmail.com', '09492003241', NULL, NULL, NULL, '2024-09-24 23:59:26', '2024-09-24 23:59:26', 3),
(7, 'Shubham', '261126@gmail.com', '09492002535', NULL, NULL, NULL, '2024-09-25 00:03:07', '2024-09-25 00:03:07', 3),
(8, 'Soujanya', 'sspandrala261126@gmail.com', '8484829536', NULL, '$2y$12$tIIdFHXw.CQcWMTO2WRovOS6sY7niTCsVh4y5YmTaJrje5DALmeRa', NULL, '2024-09-25 00:08:54', '2024-09-25 00:09:54', 3),
(9, 'Hemanth', 'uppalahemanth4@gmail.com', '95686547864', NULL, '$2y$12$/fHRXIlN2GRDOF7R3lIE0ebFURGZcMCAQcNuMe3ezvFL.bwwrq77O', NULL, '2024-09-25 04:50:02', '2024-09-25 04:51:00', 3),
(10, 'Soujanya', 'soujanyapandrala@gmail.com', '94582235622', NULL, '$2y$12$WdtV7.F3BXuX.VU99AS2J.f2i3rXxhSAAJp7muIV9RmuafGuLktC.', NULL, '2024-09-25 05:10:17', '2024-09-25 05:10:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slotNo` int(11) NOT NULL,
  `slotName` varchar(255) NOT NULL,
  `slotType` varchar(255) NOT NULL,
  `block` varchar(255) NOT NULL,
  `unitNo` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `vehicleNo` varchar(255) NOT NULL,
  `vehicleType` varchar(255) NOT NULL,
  `rfidNo` varchar(255) DEFAULT NULL,
  `fromDate` date NOT NULL,
  `toDate` date DEFAULT NULL,
  `additionalField` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` varchar(255) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `vendor_contact_name` varchar(255) DEFAULT NULL,
  `vendor_phone` varchar(255) DEFAULT NULL,
  `vendor_email` varchar(255) DEFAULT NULL,
  `account_head` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `tds_rate` decimal(5,2) DEFAULT NULL,
  `gstin` varchar(255) DEFAULT NULL,
  `igst` decimal(5,2) DEFAULT NULL,
  `cgst` decimal(5,2) DEFAULT NULL,
  `sgst` decimal(5,2) DEFAULT NULL,
  `pan_no` varchar(255) DEFAULT NULL,
  `tds_section_code` varchar(255) DEFAULT NULL,
  `vendor_legal_type` varchar(255) DEFAULT NULL,
  `payee_name` varchar(255) DEFAULT NULL,
  `billing_address` text DEFAULT NULL,
  `bank_account_no` varchar(255) DEFAULT NULL,
  `bank_name_branch` varchar(255) DEFAULT NULL,
  `bank_ifsc_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `visitor_name` varchar(255) NOT NULL,
  `visitor_number` varchar(255) NOT NULL,
  `visiting_reason` varchar(255) NOT NULL,
  `visiting_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `flat_number` varchar(255) NOT NULL,
  `resident_name` varchar(255) NOT NULL,
  `qr_code_filename` varchar(255) DEFAULT NULL,
  `checkin_time` varchar(255) DEFAULT NULL,
  `checkout_time` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visitor_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `watchman_details`
--

CREATE TABLE `watchman_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qualifiacation` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `aadhar_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `admin_otps`
--
ALTER TABLE `admin_otps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_otps_user_id_foreign` (`user_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entry_passes`
--
ALTER TABLE `entry_passes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entry_passes_user_id_foreign` (`user_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities_booking`
--
ALTER TABLE `facilities_booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facilities_booking_facility_id_foreign` (`facility_id`),
  ADD KEY `facilities_booking_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_desk_requests`
--
ALTER TABLE `help_desk_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenance_charges`
--
ALTER TABLE `maintenance_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenance_payments`
--
ALTER TABLE `maintenance_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maintenance_payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `manager_deatils`
--
ALTER TABLE `manager_deatils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manager_deatils_user_id_foreign` (`user_id`),
  ADD KEY `manager_deatils_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_accounts`
--
ALTER TABLE `resident_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resident_accounts_resident_id_foreign` (`resident_id`);

--
-- Indexes for table `resident_details`
--
ALTER TABLE `resident_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resident_details_user_id_foreign` (`user_id`),
  ADD KEY `resident_details_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vendors_vendor_id_unique` (`vendor_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visitors_user_id_foreign` (`user_id`);

--
-- Indexes for table `watchman_details`
--
ALTER TABLE `watchman_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `watchman_details_user_id_foreign` (`user_id`),
  ADD KEY `watchman_details_admin_id_foreign` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_otps`
--
ALTER TABLE `admin_otps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entry_passes`
--
ALTER TABLE `entry_passes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facilities_booking`
--
ALTER TABLE `facilities_booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `help_desk_requests`
--
ALTER TABLE `help_desk_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maintenance_charges`
--
ALTER TABLE `maintenance_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maintenance_payments`
--
ALTER TABLE `maintenance_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manager_deatils`
--
ALTER TABLE `manager_deatils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `parking`
--
ALTER TABLE `parking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resident_accounts`
--
ALTER TABLE `resident_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_details`
--
ALTER TABLE `resident_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `watchman_details`
--
ALTER TABLE `watchman_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD CONSTRAINT `admin_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admin_otps`
--
ALTER TABLE `admin_otps`
  ADD CONSTRAINT `admin_otps_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `entry_passes`
--
ALTER TABLE `entry_passes`
  ADD CONSTRAINT `entry_passes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `facilities_booking`
--
ALTER TABLE `facilities_booking`
  ADD CONSTRAINT `facilities_booking_facility_id_foreign` FOREIGN KEY (`facility_id`) REFERENCES `facilities` (`id`),
  ADD CONSTRAINT `facilities_booking_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `maintenance_payments`
--
ALTER TABLE `maintenance_payments`
  ADD CONSTRAINT `maintenance_payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `manager_deatils`
--
ALTER TABLE `manager_deatils`
  ADD CONSTRAINT `manager_deatils_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `manager_deatils_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `resident_accounts`
--
ALTER TABLE `resident_accounts`
  ADD CONSTRAINT `resident_accounts_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `resident_details` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `resident_details`
--
ALTER TABLE `resident_details`
  ADD CONSTRAINT `resident_details_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `resident_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `visitors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `watchman_details`
--
ALTER TABLE `watchman_details`
  ADD CONSTRAINT `watchman_details_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `watchman_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
