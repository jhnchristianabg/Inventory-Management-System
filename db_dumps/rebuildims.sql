-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 06:14 PM
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
-- Table structure for table `cables_and_peripherals`
--

CREATE TABLE `cables_and_peripherals` (
  `id` int(10) UNSIGNED NOT NULL,
  `CPID` varchar(255) NOT NULL,
  `CPType` varchar(255) DEFAULT NULL,
  `CPName` varchar(255) NOT NULL,
  `CPBrand` varchar(255) NOT NULL,
  `CPModel` varchar(255) NOT NULL,
  `CPQuantity` varchar(255) DEFAULT NULL,
  `CPStatus` varchar(255) DEFAULT NULL,
  `CPRemarks` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cables_and_peripherals`
--

INSERT INTO `cables_and_peripherals` (`id`, `CPID`, `CPType`, `CPName`, `CPBrand`, `CPModel`, `CPQuantity`, `CPStatus`, `CPRemarks`, `created_at`, `updated_at`) VALUES
(1, 'F3U-HED-1', 'Cable', 'Cable-1', 'None', 'None', '1', 'Working', 'Available', '2024-03-29 15:24:42', '2024-03-29 15:24:42'),
(2, 'F3U-HED-2', 'Adapter', '2', 'None', 'None', '1', 'Working', 'Available', '2024-03-29 15:33:40', '2024-03-29 15:33:40'),
(3, 'F3U-HED-3', 'Converter', '3', 'None', 'None', '1', 'Not Working', 'Defect', '2024-03-29 15:43:30', '2024-03-29 15:43:30'),
(4, 'F3U-HED-4', 'Charger', '4', 'None', 'None', '1', 'Working', 'Available', '2024-03-29 15:44:16', '2024-03-29 15:44:16'),
(5, 'F3U-HED-5', 'Cable', '5', 'None', 'None', '1', 'Not Working', 'Defect', '2024-03-29 15:46:22', '2024-03-29 15:46:22'),
(6, 'F3U-HED-6', 'Keyboard', '6', 'A4Tech', 'None', '1', 'Working', 'Available', '2024-03-29 15:47:13', '2024-03-29 15:47:13'),
(7, 'F3U-HED-7', 'Mouse', '7', 'A4Tech', 'A4-Mouse', '1', 'Working', 'Available', '2024-03-29 15:47:55', '2024-03-29 15:47:55'),
(8, 'F3U-HED-8', 'Headset', 'JBL-HDST', 'JBL', 'JBL-01', '1', 'Working', 'Available', '2024-03-29 15:48:59', '2024-03-29 15:48:59'),
(9, 'F3U-HED-9', 'Microphone', 'JBL-MIC', 'JBL', 'JBL-02', '1', 'Not Working', 'Defect', '2024-03-29 15:49:42', '2024-03-29 15:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `cp_purchase_details`
--

CREATE TABLE `cp_purchase_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `CPPriceprunit` int(11) DEFAULT NULL,
  `CPSupplier` varchar(255) DEFAULT NULL,
  `CPDateOfPurch` varchar(255) DEFAULT NULL,
  `CPWarranty` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cp_purchase_details`
--

INSERT INTO `cp_purchase_details` (`id`, `CPPriceprunit`, `CPSupplier`, `CPDateOfPurch`, `CPWarranty`, `created_at`, `updated_at`) VALUES
(1, 1, 'None', '03-18-2024', '03-18-2025', '2024-03-29 15:24:42', '2024-03-29 15:24:42'),
(2, 1, 'None', '03-18-2024', '03-18-2025', '2024-03-29 15:33:40', '2024-03-29 15:33:40'),
(3, 1, 'None', '03-18-2024', '03-18-2025', '2024-03-29 15:43:30', '2024-03-29 15:43:30'),
(4, 1, 'None', '03-18-2024', '03-18-2025', '2024-03-29 15:44:16', '2024-03-29 15:44:16'),
(5, 1, 'None', '03-18-2024', '03-18-2025', '2024-03-29 15:46:22', '2024-03-29 15:46:22'),
(6, 800, 'A4Tech', '03-20-2024', '03-20-2025', '2024-03-29 15:47:13', '2024-03-29 15:47:13'),
(7, 500, 'A4Tech', '03-20-2024', '03-20-2025', '2024-03-29 15:47:55', '2024-03-29 15:47:55'),
(8, 3000, 'JBL', '03-20-2024', '03-20-2025', '2024-03-29 15:48:59', '2024-03-29 15:48:59'),
(9, 2500, 'JBL', '03-20-2024', '03-20-2025', '2024-03-29 15:49:42', '2024-03-29 15:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(10) UNSIGNED NOT NULL,
  `DeviceID` varchar(255) NOT NULL,
  `DeviceType` varchar(255) DEFAULT NULL,
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

INSERT INTO `devices` (`id`, `DeviceID`, `DeviceType`, `DeviceName`, `DeviceBrand`, `DeviceModel`, `DeviceSerialNo`, `DeviceMacAdd`, `DeviceLocation`, `DeviceStatus`, `DeviceRemarks`, `DeviceDisplay`, `DeviceNoOfPorts`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'HED-FEU-1', 'System Unit', 'HCL1', 'Lenovo', 'ThinkCentre', 'LNV-THNKCTR-01', 'LNV-01', 'Office', 'Working', 'Available', NULL, NULL, '2024-03-29 15:28:00', '2024-03-29 15:28:00', NULL),
(2, 'HED-FEU-2', 'Laptop', 'HCL2', 'ACER', 'Aspire 7', 'ACR-ASP-01', 'ACR-01', 'Office', 'Working', 'Available', NULL, NULL, '2024-03-29 15:30:21', '2024-03-29 15:30:21', NULL),
(3, 'HED-FEU-3', 'AIO Desktop', 'HCL3', 'ASUS', 'Predator', 'ASS-PRDTR-01', 'ASS-01', 'Office', 'Working', 'Available', NULL, NULL, '2024-03-29 15:36:21', '2024-03-29 15:36:21', NULL),
(4, 'HED-FEU-4', 'IMAC', 'HCL4', 'APPLE', 'IMAC', 'APP-IMC-01', 'APP-01', 'Storage', 'Not Working', 'Defect', NULL, NULL, '2024-03-29 15:37:28', '2024-03-29 15:37:28', NULL),
(5, 'HED-FEU-5', 'Monitor', 'HCL5', 'Lenovo', 'ThinkVision', 'LNV-THNKVSN-01', 'LNV-02', 'Office', 'Working', 'Available', NULL, NULL, '2024-03-29 15:38:29', '2024-03-29 15:38:29', NULL),
(6, 'HED-FEU-6', 'Speaker', 'HCL6', 'JBL', 'JBL', 'JBLBLTH-01', 'JBL-01', 'Office', 'Working', 'Available', NULL, NULL, '2024-03-29 15:39:13', '2024-03-29 15:39:13', NULL),
(7, 'HED-FEU-7', 'Projector', 'HCL7', 'EPSON', 'H751C', 'EPSN-PRJC-01', 'EPSN-01', 'Storage', 'Working', 'Available', NULL, NULL, '2024-03-29 15:40:37', '2024-03-29 15:40:37', NULL),
(8, 'HED-FEU-8', 'Printer', 'HCL8', 'HP', 'HP8000', 'HP-PRNTR-01', 'HP-01', 'Office', 'Working', 'Available', NULL, NULL, '2024-03-29 15:41:16', '2024-03-29 15:41:16', NULL),
(9, 'HED-FEU-9', 'TV', 'HCL9', 'LG', 'LG-TV', 'LG-TV-01', 'LG-01', 'Office', 'Working', 'Available', NULL, NULL, '2024-03-29 15:42:00', '2024-03-29 15:42:00', NULL),
(10, 'HED-FEU-10', 'IP Phone', 'HCL10', 'YEALINK', 'YEALINK', 'IPPHN-YEA-01', 'IP-01', 'Storage', 'Not Working', 'Defect', NULL, NULL, '2024-03-29 15:51:41', '2024-03-29 07:52:11', '2024-03-29 07:52:11');

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
(1, 30500, 'Lenovo', '03-18-2024', '03-18-2025', '2024-03-29 15:28:00', '2024-03-29 15:28:00', NULL),
(2, 45000, 'ACER', '03-20-2024', '03-20-2025', '2024-03-29 15:30:21', '2024-03-29 15:30:21', NULL),
(3, 50000, 'ASUS', '03-18-2024', '03-18-2025', '2024-03-29 15:36:21', '2024-03-29 15:36:21', NULL),
(4, 60000, 'APPLE', '03-18-2024', '03-18-2025', '2024-03-29 15:37:28', '2024-03-29 15:37:28', NULL),
(5, 15000, 'Lenovo', '03-18-2024', '03-18-2025', '2024-03-29 15:38:29', '2024-03-29 15:38:29', NULL),
(6, 6000, 'JBL', '03-18-2024', '03-18-2025', '2024-03-29 15:39:13', '2024-03-29 15:39:13', NULL),
(7, 15000, 'EPSON', '03-20-2024', '03-20-2025', '2024-03-29 15:40:37', '2024-03-29 15:40:37', NULL),
(8, 12000, 'HP', '03-20-2024', '03-20-2025', '2024-03-29 15:41:16', '2024-03-29 15:41:16', NULL),
(9, 12000, 'LG', '03-20-2024', '03-20-2025', '2024-03-29 15:42:00', '2024-03-29 15:42:00', NULL),
(10, 3000, 'YEALINK', '03-20-2024', '03-20-2025', '2024-03-29 15:51:41', '2024-03-29 07:52:11', '2024-03-29 07:52:11');

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
(1, 'Microsoft', 'LNV-01-01', 'i7 10th Gen', 550, 'GB', NULL, NULL, '2024-03-29 15:28:00', '2024-03-29 15:28:00', NULL),
(2, 'Microsoft', 'ACR-01-01', 'AMD R5', 512, 'GB', NULL, NULL, '2024-03-29 15:30:21', '2024-03-29 15:30:21', NULL),
(3, 'Microsoft', 'ASS-01-01', 'i9 10th Gen', 1, 'TB', NULL, NULL, '2024-03-29 15:36:21', '2024-03-29 15:36:21', NULL),
(4, 'IOS', 'APP-01-01', 'IOS', 1, 'TB', NULL, NULL, '2024-03-29 15:37:28', '2024-03-29 15:37:28', NULL),
(5, NULL, NULL, NULL, NULL, 'TB', NULL, NULL, '2024-03-29 15:38:29', '2024-03-29 15:38:29', NULL),
(6, NULL, NULL, NULL, NULL, 'TB', NULL, NULL, '2024-03-29 15:39:13', '2024-03-29 15:39:13', NULL),
(7, NULL, NULL, NULL, NULL, 'TB', NULL, NULL, '2024-03-29 15:40:37', '2024-03-29 15:40:37', NULL),
(8, NULL, NULL, NULL, NULL, 'TB', NULL, NULL, '2024-03-29 15:41:16', '2024-03-29 15:41:16', NULL),
(9, NULL, NULL, NULL, NULL, 'TB', NULL, NULL, '2024-03-29 15:42:00', '2024-03-29 15:42:00', NULL),
(10, NULL, NULL, NULL, NULL, 'TB', NULL, NULL, '2024-03-29 15:51:41', '2024-03-29 07:52:11', '2024-03-29 07:52:11');

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
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Building` varchar(255) NOT NULL,
  `Floor` varchar(255) NOT NULL,
  `RoomNo` varchar(255) NOT NULL,
  `RoomName` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(10, '2024_03_21_152435_add_delete_at_field_to_device_purchase_details', 1),
(11, '2024_03_28_051045_create_locations_table', 1),
(12, '2024_03_29_135716_create_cables_and_peripherals_table', 1),
(13, '2024_03_29_140100_create_cp_purchase_details_table', 1);

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
(1, 'ITS Admin', 'ITSAdmin@feucavite.edu.ph', NULL, '$2y$10$G8A9yM6./1HITHOz2aQ14uk62hRl9R2a26r42.EbcV.TDyHNrvwR.', NULL, '2024-03-29 07:21:50', '2024-03-29 07:21:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cables_and_peripherals`
--
ALTER TABLE `cables_and_peripherals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cp_purchase_details`
--
ALTER TABLE `cp_purchase_details`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `locations`
--
ALTER TABLE `locations`
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
-- AUTO_INCREMENT for table `cables_and_peripherals`
--
ALTER TABLE `cables_and_peripherals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cp_purchase_details`
--
ALTER TABLE `cp_purchase_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `device_purchase_details`
--
ALTER TABLE `device_purchase_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `device_specs`
--
ALTER TABLE `device_specs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
