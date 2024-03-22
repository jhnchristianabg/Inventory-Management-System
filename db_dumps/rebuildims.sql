-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 03:56 PM
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
-- Database: `rebuildims`
--

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(10) UNSIGNED NOT NULL,
  `DeviceID` varchar(255) NOT NULL,
  `DeviceName` varchar(255) NOT NULL,
  `DeviceBrand` varchar(255) NOT NULL,
  `DeviceModel` varchar(255) NOT NULL,
  `DeviceSerialNo` varchar(255) DEFAULT NULL,
  `DeviceMacAdd` varchar(255) DEFAULT NULL,
  `DeviceLocation` varchar(255) DEFAULT NULL,
  `DeviceStatus` varchar(255) DEFAULT NULL,
  `DeviceRemarks` varchar(255) DEFAULT NULL,
  `DeviceDisplay` int(11) DEFAULT NULL,
  `DeviceNoOfPorts` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `DeviceID`, `DeviceName`, `DeviceBrand`, `DeviceModel`, `DeviceSerialNo`, `DeviceMacAdd`, `DeviceLocation`, `DeviceStatus`, `DeviceRemarks`, `DeviceDisplay`, `DeviceNoOfPorts`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'MON-001', 'HCL1', 'Lenovo', 'ThinkCentre', 'LNV-THNKCTR-01', 'LNV-01', 'Office', 'Working', 'Good', NULL, NULL, '2024-03-22 14:19:09', '2024-03-22 14:19:09', NULL),
(2, 'MON-002', 'HCL2', 'Lenovo', 'ThinkCentre', 'LNV-THNKCTR-02', 'LNV-02', 'Office', 'Working', 'Good', NULL, NULL, '2024-03-22 14:20:35', '2024-03-22 14:20:35', NULL),
(3, 'MON-003', 'HCL3', 'Lenovo', 'ThinkCentre', 'LNV-THNKCTR-03', 'LNV-03', 'Office', 'Working', 'Good', NULL, NULL, '2024-03-22 14:21:53', '2024-03-22 14:21:53', NULL),
(4, 'MON-004', 'HCL4', 'ASUS', 'Predator', 'ASS-PRDTR-01', 'ASS-01', 'Office', 'Working', 'Good', NULL, NULL, '2024-03-22 14:22:58', '2024-03-22 14:22:58', NULL),
(5, 'MON-005', 'HCL5', 'ASUS', 'Predator', 'ASS-PRDTR-02', 'ASS-02', 'Office', 'Working', 'Good', NULL, NULL, '2024-03-22 14:23:49', '2024-03-22 14:23:49', NULL),
(6, 'MON-006', 'HCL6', 'ASUS', 'Predator', 'ASS-PRDTR-03', 'ASS-03', 'Office', 'Working', 'Good', NULL, NULL, '2024-03-22 14:24:40', '2024-03-22 14:24:40', NULL),
(7, 'MON-007', 'HCL7', 'ACER', 'Aspire 7', 'ACR-ASP-01', 'ACR-01', 'Office', 'Working', 'Good', NULL, NULL, '2024-03-22 14:27:04', '2024-03-22 14:27:04', NULL),
(8, 'MON-008', 'HCL8', 'ACER', 'Aspire 7', 'ACR-ASP-02', 'ACR-02', 'Office', 'Working', 'Good', NULL, NULL, '2024-03-22 14:27:48', '2024-03-22 14:27:48', NULL),
(9, 'MON-009', 'HCL19', 'ACER', 'Aspire 7', 'ACR-ASP-03', 'ACR-03', 'Office', 'Working', 'Good', NULL, NULL, '2024-03-22 14:28:33', '2024-03-22 14:28:33', NULL),
(10, 'MON-010', 'HCL10', 'APPLE', 'IMAC', 'APP-IMC-01', 'APP-01', 'Office', 'Working', 'Good', NULL, NULL, '2024-03-22 14:31:14', '2024-03-22 14:31:14', NULL),
(11, 'MON-011', 'HCL11', 'APPLE', 'IMAC', 'APP-IMC-02', 'APP-02', 'Office', 'Working', 'Good', NULL, NULL, '2024-03-22 14:32:17', '2024-03-22 14:32:17', NULL),
(12, 'MON-012', 'HCL12', 'APPLE', 'IMAC', 'APP-IMC-03', 'APP-03', 'Storage', 'Not Working', 'Bad', NULL, NULL, '2024-03-22 14:33:38', '2024-03-22 06:34:57', '2024-03-22 06:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `device_purchase_details`
--

CREATE TABLE `device_purchase_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `DevicePriceprunit` int(11) DEFAULT NULL,
  `DeviceSupplier` varchar(255) DEFAULT NULL,
  `DeviceDateOfPurch` varchar(255) DEFAULT NULL,
  `DeviceWarranty` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `device_purchase_details`
--

INSERT INTO `device_purchase_details` (`id`, `DevicePriceprunit`, `DeviceSupplier`, `DeviceDateOfPurch`, `DeviceWarranty`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 30500, 'Lenovo', '03-18-2024', '03-18-2025', '2024-03-22 14:19:09', '2024-03-22 14:19:09', NULL),
(2, 30500, 'Lenovo', '03-18-2024', '03-18-2025', '2024-03-22 14:20:35', '2024-03-22 14:20:35', NULL),
(3, 30500, 'Lenovo', '03-18-2024', '03-18-2025', '2024-03-22 14:21:53', '2024-03-22 14:21:53', NULL),
(4, 50000, 'ASUS', '03-20-2024', '03-20-2025', '2024-03-22 14:22:58', '2024-03-22 14:22:58', NULL),
(5, 50000, 'ASUS', '03-20-2024', '03-20-2025', '2024-03-22 14:23:49', '2024-03-22 14:23:49', NULL),
(6, 50000, 'ASUS', '03-20-2024', '03-20-2025', '2024-03-22 14:24:40', '2024-03-22 14:24:40', NULL),
(7, 45000, 'ACER', '03-21-2024', '03-21-2025', '2024-03-22 14:27:04', '2024-03-22 14:27:04', NULL),
(8, 45000, 'ACER', '03-21-2024', '03-21-2025', '2024-03-22 14:27:48', '2024-03-22 14:27:48', NULL),
(9, 45000, 'ACER', '03-21-2024', '03-21-2025', '2024-03-22 14:28:33', '2024-03-22 14:28:33', NULL),
(10, 60000, 'APPLE', '03-22-2024', '03-22-2025', '2024-03-22 14:31:14', '2024-03-22 14:31:14', NULL),
(11, 60000, 'APPLE', '03-22-2024', '03-22-2025', '2024-03-22 14:32:17', '2024-03-22 14:32:17', NULL),
(12, 60000, 'APPLE', '03-22-2024', '03-22-2025', '2024-03-22 14:33:38', '2024-03-22 06:34:57', '2024-03-22 06:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `device_specs`
--

CREATE TABLE `device_specs` (
  `id` int(10) UNSIGNED NOT NULL,
  `DeviceOperatingSys` varchar(255) DEFAULT NULL,
  `DeviceProductKey` varchar(255) DEFAULT NULL,
  `DeviceProcessor` varchar(255) DEFAULT NULL,
  `DeviceMemory` int(11) DEFAULT NULL,
  `DeviceSize` varchar(255) DEFAULT NULL,
  `DeviceStorage1` int(11) DEFAULT NULL,
  `DeviceStorage2` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `device_specs`
--

INSERT INTO `device_specs` (`id`, `DeviceOperatingSys`, `DeviceProductKey`, `DeviceProcessor`, `DeviceMemory`, `DeviceSize`, `DeviceStorage1`, `DeviceStorage2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Microsoft', 'LNV-01-01', 'i7 10th Gen', 512, 'GB', NULL, NULL, '2024-03-22 14:19:09', '2024-03-22 14:19:09', NULL),
(2, 'Microsoft', 'LNV-02-02', 'i7 10th Gen', 512, 'GB', NULL, NULL, '2024-03-22 14:20:35', '2024-03-22 14:20:35', NULL),
(3, 'Microsoft', 'LNV-01-03', 'i7 10th Gen', 512, 'GB', NULL, NULL, '2024-03-22 14:21:53', '2024-03-22 14:21:53', NULL),
(4, 'Microsoft', 'ASS-01-01', 'i9 10th Gen', 1, 'TB', NULL, NULL, '2024-03-22 14:22:58', '2024-03-22 14:22:58', NULL),
(5, 'Microsoft', 'ASS-01-02', 'i9 10th Gen', 1, 'TB', NULL, NULL, '2024-03-22 14:23:49', '2024-03-22 14:23:49', NULL),
(6, 'Microsoft', 'ASS-01-03', 'i9 10th Gen', 1, 'TB', NULL, NULL, '2024-03-22 14:24:40', '2024-03-22 14:24:40', NULL),
(7, 'Microsoft', 'ACR-01-01', 'AMD R5', 550, 'GB', NULL, NULL, '2024-03-22 14:27:04', '2024-03-22 14:27:04', NULL),
(8, 'Microsoft', 'ACR-01-02', 'AMD R5', 550, 'GB', NULL, NULL, '2024-03-22 14:27:48', '2024-03-22 14:27:48', NULL),
(9, 'Microsoft', 'ACR-01-03', 'AMD R5', 550, 'GB', NULL, NULL, '2024-03-22 14:28:33', '2024-03-22 14:28:33', NULL),
(10, 'IOS', 'APP-01-01', 'IOS', 1, 'TB', NULL, NULL, '2024-03-22 14:31:14', '2024-03-22 14:31:14', NULL),
(11, 'IOS', 'APP-01-02', 'IOS', 1, 'TB', NULL, NULL, '2024-03-22 14:32:17', '2024-03-22 14:32:17', NULL),
(12, 'IOS', 'APP-01-03', 'IOS', 1, 'TB', NULL, NULL, '2024-03-22 14:33:38', '2024-03-22 06:34:57', '2024-03-22 06:34:57');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_14_083731_create_devices_table', 1),
(6, '2024_03_14_083937_create_device_specs_table', 1),
(7, '2024_03_14_084015_create_device_purchase_details_table', 1),
(8, '2024_03_21_134444_add_delete_at_field_to_devices', 1),
(9, '2024_03_21_152413_add_delete_at_field_to_device_specs', 1),
(10, '2024_03_21_152435_add_delete_at_field_to_device_purchase_details', 1);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ITS Admin', 'ITSAdmin@feucavite.edu.ph', NULL, '$2y$10$GP/juTSzB8zhRSeOZSaku.mElzl6LYBR03cmyq7HqaV42a88dCBUS', NULL, '2024-03-22 06:17:37', '2024-03-22 06:17:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_purchase_details`
--
ALTER TABLE `device_purchase_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_specs`
--
ALTER TABLE `device_specs`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `device_purchase_details`
--
ALTER TABLE `device_purchase_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `device_specs`
--
ALTER TABLE `device_specs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
