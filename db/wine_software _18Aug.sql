-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 18, 2025 at 04:59 PM
-- Server version: 8.0.43-0ubuntu0.22.04.1
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wine_software`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `sl_m_brand`
--

CREATE TABLE `sl_m_brand` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sl_m_brand`
--

INSERT INTO `sl_m_brand` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'wine', 'Inactive', '2025-08-18 18:40:56', '2025-08-18 20:38:18'),
(4, 'Rum', 'Active', '2025-08-18 22:11:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sl_m_category`
--

CREATE TABLE `sl_m_category` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sl_m_category`
--

INSERT INTO `sl_m_category` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Category 1', 'Active', '2025-08-18 19:34:55', NULL),
(3, 'Category 2', 'Inactive', '2025-08-18 19:35:04', '2025-08-18 22:12:14'),
(4, 'Category 3', 'Active', '2025-08-18 22:12:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sl_m_size`
--

CREATE TABLE `sl_m_size` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sl_m_size`
--

INSERT INTO `sl_m_size` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '500', 'Active', '2025-08-18 19:55:44', '2025-08-18 22:12:45'),
(3, '300', 'Active', '2025-08-18 22:12:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sl_m_supplier`
--

CREATE TABLE `sl_m_supplier` (
  `id` int NOT NULL,
  `organisation` varchar(150) DEFAULT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` text,
  `status` tinyint(1) DEFAULT '1' COMMENT '1 = Active, 0 = Inactive',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sl_m_supplier`
--

INSERT INTO `sl_m_supplier` (`id`, `organisation`, `supplier_name`, `contact_person`, `email`, `phone`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Softlab', 'John Smith', NULL, 'john12@gmail.com', '09960309336', 'At-post Amravti Tq-Dist Amravati\r\nAmravati', 1, '2025-08-13 14:56:09', '2025-08-13 14:56:09'),
(2, 'Softlab', 'John Smith', NULL, 'john@gmail.com', '09960309336', 'At-post Amravti Tq-Dist Amravati\r\nAmravati', 1, '2025-08-13 14:56:47', '2025-08-13 14:56:47'),
(4, 'Eassyshopkart123', 'John Smith123', NULL, 'bijawe.deepa@gmail.com', '09960309336', 'At-post Amravti  Tq-Dist Amravati', 1, '2025-08-13 15:21:40', '2025-08-18 12:26:27'),
(8, 'nik', 'John Smith', NULL, 'john12@gmail.com', '09960309336', 'At-post Amravti  Tq-Dist Amravati', 1, '2025-08-18 12:38:35', '2025-08-18 18:08:35'),
(9, 'test123', 'John Smith', NULL, 'john@gmail.com', '09960309336', 'At-post Amravti  Tq-Dist Amravati', 1, '2025-08-18 16:41:19', '2025-08-18 16:41:26'),
(10, 'Eassyshopkart', 'John Smith', NULL, 'bijawe.deepa@gmail.com', '09960309336', 'At-post Amravti  Tq-Dist Amravati', 1, '2025-08-18 16:51:00', '2025-08-18 22:21:00'),
(11, 'Eassyshopkart', 'John Smith', NULL, 'bijawe.deepa@gmail.com', '09960309336', 'At-post Amravti  Tq-Dist Amravati', 1, '2025-08-18 16:51:14', '2025-08-18 22:21:14'),
(12, 'Eassyshopkart', 'John Smith', NULL, 'bijawe.deepa@gmail.com', '09960309336', 'At-post Amravti  Tq-Dist Amravati', 1, '2025-08-18 16:51:36', '2025-08-18 22:21:36'),
(13, 'Eassyshopkart', 'John Smith', NULL, 'bijawe.deepa@gmail.com', '09960309336', 'At-post Amravti  Tq-Dist Amravati', 1, '2025-08-18 16:51:45', '2025-08-18 22:21:45'),
(14, 'Eassyshopkart', 'John Smith', NULL, 'bijawe.deepa@gmail.com', '09960309336', 'At-post Amravti  Tq-Dist Amravati', 0, '2025-08-18 16:51:54', '2025-08-18 22:21:54'),
(15, 'Eassyshopkart', 'John Smith123', NULL, 'bijawe.deepa@gmail.com', '09960309336', 'At-post Amravti  Tq-Dist Amravati', 1, '2025-08-18 16:52:03', '2025-08-18 22:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `sl_m_unit`
--

CREATE TABLE `sl_m_unit` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sl_m_unit`
--

INSERT INTO `sl_m_unit` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(3, 'unit 1', 'Active', '2025-08-18 22:13:34', NULL),
(4, 'unit 2', 'Inactive', '2025-08-18 22:13:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_access_matrix`
--

CREATE TABLE `tbl_access_matrix` (
  `id` int NOT NULL,
  `access` text,
  `roleId` int NOT NULL,
  `isDeleted` tinyint NOT NULL DEFAULT '0',
  `createdBy` int NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_access_matrix`
--

INSERT INTO `tbl_access_matrix` (`id`, `access`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, '[{\"module\":\"Task\",\"total_access\":0,\"list\":1,\"create_records\":0,\"edit_records\":0,\"delete_records\":0},{\"module\":\"Booking\",\"total_access\":0,\"list\":1,\"create_records\":0,\"edit_records\":0,\"delete_records\":0}]', 12, 0, 1, '2022-06-17 21:01:02', 1, '2022-06-18 20:50:58'),
(2, '[{\"module\":\"Task\",\"total_access\":0,\"list\":0,\"create_records\":0,\"edit_records\":0,\"delete_records\":0},{\"module\":\"Booking\",\"total_access\":0,\"list\":0,\"create_records\":0,\"edit_records\":0,\"delete_records\":0}]', 13, 0, 1, '2025-08-08 13:40:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `bookingId` int NOT NULL,
  `roomName` varchar(256) NOT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `isDeleted` tinyint NOT NULL DEFAULT '0',
  `createdBy` int NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`bookingId`, `roomName`, `description`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'Hall', 'This is description edit', 0, 1, '2022-06-17 21:52:00', 1, '2022-06-17 21:58:05'),
(2, 'Meeting room 2', 'Meeting room 2 booked for German client', 0, 1, '2022-06-17 21:58:44', NULL, NULL),
(3, 'Meeting room 2', 'Hold for developer and QA discussion', 0, 14, '2022-06-17 22:21:26', 14, '2022-06-17 22:21:55'),
(4, 'Meeting room 3', 'Meeting with BA & QA', 0, 1, '2022-06-18 20:22:38', 1, '2022-06-18 20:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_last_login`
--

CREATE TABLE `tbl_last_login` (
  `id` bigint NOT NULL,
  `userId` bigint NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_last_login`
--

INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(1, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 99.0.4844.84', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'Windows 7', '2022-04-04 22:19:07'),
(2, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-17 01:33:45'),
(3, 14, '{\"role\":\"11\",\"roleText\":\"Project Manager L6\",\"name\":\"Pml6\",\"isAdmin\":\"2\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-17 01:35:50'),
(4, 14, '{\"role\":\"11\",\"roleText\":\"Project Manager L6\",\"name\":\"Pml6\",\"isAdmin\":\"2\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-17 01:36:25'),
(5, 14, '{\"role\":\"11\",\"roleText\":\"Project Manager L6\",\"name\":\"Pml6\",\"isAdmin\":\"2\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-17 02:06:57'),
(6, 14, '{\"role\":\"11\",\"roleText\":\"Project Manager L6\",\"name\":\"Pml6\",\"isAdmin\":\"2\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-17 02:08:21'),
(7, 14, '{\"role\":\"11\",\"roleText\":\"Project Manager L6\",\"name\":\"Pml6\",\"isAdmin\":\"2\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-17 02:16:40'),
(8, 14, '{\"role\":\"11\",\"roleText\":\"Project Manager L6\",\"name\":\"Pml6\",\"isAdmin\":\"2\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-17 02:17:26'),
(9, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-17 02:30:21'),
(10, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-17 02:30:39'),
(11, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-17 23:49:29'),
(12, 14, '{\"role\":\"11\",\"roleText\":\"Project Manager L6\",\"name\":\"Pml6\",\"isAdmin\":\"2\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-18 01:41:39'),
(13, 14, '{\"role\":\"12\",\"roleText\":\"Data Entry Operator\",\"name\":\"Pml6\",\"isAdmin\":\"2\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-18 01:42:38'),
(14, 14, '{\"role\":\"12\",\"roleText\":\"Data Entry Operator\",\"name\":\"Pml6\",\"isAdmin\":\"2\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-18 01:51:18'),
(15, 14, '{\"role\":\"12\",\"roleText\":\"Data Entry Operator\",\"name\":\"Pml6\",\"isAdmin\":\"2\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-18 01:54:04'),
(16, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-18 02:15:01'),
(17, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-18 23:52:14'),
(18, 14, '{\"role\":\"12\",\"roleText\":\"Data Entry Operator\",\"name\":\"Pml6\",\"isAdmin\":\"2\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-18 23:53:41'),
(19, 14, '{\"role\":\"12\",\"roleText\":\"Data Entry Operator\",\"name\":\"Pml6\",\"isAdmin\":\"2\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-18 23:55:24'),
(20, 14, '{\"role\":\"12\",\"roleText\":\"Data Entry Operator\",\"name\":\"Pml6\",\"isAdmin\":\"2\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-18 23:57:25'),
(21, 14, '{\"role\":\"12\",\"roleText\":\"Data Entry Operator\",\"name\":\"Pml6\",\"isAdmin\":\"2\"}', '::1', 'Chrome 102.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'Windows 7', '2022-06-19 00:21:13'),
(22, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 136.0.0.0', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'Linux', '2025-08-03 15:01:45'),
(23, 15, '{\"role\":\"2\",\"roleText\":\"Manager\",\"name\":\"Anup Mavale\",\"isAdmin\":\"2\"}', '::1', 'Chrome 136.0.0.0', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'Linux', '2025-08-07 13:07:03'),
(24, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 136.0.0.0', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'Linux', '2025-08-07 13:12:29'),
(25, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 136.0.0.0', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'Linux', '2025-08-07 20:03:19'),
(26, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 136.0.0.0', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'Linux', '2025-08-08 12:49:38'),
(27, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 136.0.0.0', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'Linux', '2025-08-08 14:41:01'),
(28, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 136.0.0.0', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'Linux', '2025-08-08 17:21:43'),
(29, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 136.0.0.0', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'Linux', '2025-08-09 15:58:25'),
(30, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 136.0.0.0', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'Linux', '2025-08-12 21:44:55'),
(31, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 136.0.0.0', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'Linux', '2025-08-13 14:11:52'),
(32, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 136.0.0.0', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'Linux', '2025-08-13 17:28:35'),
(33, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Administrator\",\"isAdmin\":\"1\"}', '::1', 'Chrome 136.0.0.0', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'Linux', '2025-08-18 17:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint NOT NULL DEFAULT '0',
  `createdBy` bigint NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text',
  `status` tinyint NOT NULL DEFAULT '1',
  `isDeleted` tinyint NOT NULL DEFAULT '0',
  `createdBy` int NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`, `status`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'System Administrator', 1, 0, 0, '2021-01-21 00:00:00', 1, '2022-06-17 20:21:46'),
(2, 'Manager', 1, 0, 0, '2021-01-13 00:00:00', NULL, NULL),
(3, 'Employee', 1, 0, 0, '2021-01-13 00:00:00', 1, '2021-01-22 18:11:16'),
(4, 'Office Boy', 1, 0, 1, '2021-01-22 17:40:24', 1, '2021-01-22 18:33:49'),
(5, 'Receptionist', 2, 0, 1, '2021-01-22 18:12:41', 1, '2021-02-05 17:32:13'),
(6, 'Project Manager', 1, 0, 1, '2021-02-05 18:25:00', NULL, NULL),
(7, 'Project Manager L2', 1, 0, 1, '2021-02-05 18:27:30', 1, '2021-03-26 14:54:08'),
(8, 'Project Manager L3', 1, 0, 1, '2021-02-05 18:29:11', 1, '2021-03-26 14:54:02'),
(9, 'Project Manager L4', 1, 0, 1, '2021-02-05 18:29:43', 1, '2021-03-26 14:53:51'),
(10, 'Project Manager L5', 1, 0, 1, '2021-02-05 18:56:47', 1, '2021-03-20 19:21:06'),
(11, 'Project Manager L6', 1, 0, 1, '2021-02-05 18:57:23', 1, '2022-06-17 20:56:55'),
(12, 'Data Entry Operator', 1, 0, 1, '2022-06-17 20:57:22', 1, '2022-06-18 20:50:52'),
(13, 'nikhil', 2, 0, 1, '2025-08-08 13:40:52', 1, '2025-08-08 13:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `taskId` int NOT NULL,
  `taskTitle` varchar(256) NOT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `isDeleted` tinyint NOT NULL DEFAULT '0',
  `createdBy` int NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`taskId`, `taskTitle`, `description`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'Small Task 1', 'Small task related to addition, substraction', 0, 1, '2022-06-18 20:47:47', 1, '2022-06-18 20:49:40'),
(2, 'Small Task 2', 'Closure task', 0, 1, '2022-06-18 20:49:48', 1, '2022-06-18 20:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint NOT NULL,
  `isAdmin` tinyint NOT NULL DEFAULT '2',
  `isDeleted` tinyint NOT NULL DEFAULT '0',
  `createdBy` int NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isAdmin`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@example.com', '$2y$10$6Y28WIo2Oz.p8xsEMYcCmuvvijXZU8.sRT3737ix.vN1CwGs3NJk6', 'Nikhil', '9890098900', 1, 1, 0, 0, '2015-07-01 18:56:49', 1, '2025-08-18 12:27:24'),
(2, 'manager@example.com', '$2y$10$quODe6vkNma30rcxbAHbYuKYAZQqUaflBgc4YpV9/90ywd.5Koklm', 'Manager', '9890098900', 2, 0, 0, 1, '2016-12-09 17:49:56', 1, '2020-02-01 19:36:12'),
(3, 'employee@example.com', '$2y$10$UYsH1G7MkDg1cutOdgl2Q.ZbXjyX.CSjsdgQKvGzAgl60RXZxpB5u', 'Employee', '9890098900', 3, 0, 1, 1, '2016-12-09 17:50:22', 1, '2019-11-09 18:13:17'),
(9, 'employee2@example.com', '$2y$10$DBnqnZDQMNW3GASPNJQ2RubfqG1WNupMBP4HKwHYRKQNHgA65Nhly', 'Employee2', '9890098900', 3, 0, 1, 1, '2019-03-26 11:40:50', 1, '2019-11-09 18:12:13'),
(10, 'employee@example.com', '$2y$10$DcK/YcVNOP/CxfGbcEDH1OzR8D4KyG1lpe/XgRGfijj158Ru0kKN.', 'Employee', '7410852000', 3, 2, 0, 1, '2020-02-01 19:36:41', 1, '2022-04-01 19:27:27'),
(12, 'email@example.com', '$2y$10$CGJsY/FZMn8L4.JfO.ZojOwbK9RUCQSx4dnqU1NgkO3ffq26i0WDG', 'From', '8520741000', 3, 0, 0, 1, '2021-01-15 13:42:11', 1, '2021-02-05 17:25:44'),
(14, 'pml6@example.com', '$2y$10$VGwjdpcWYGfWe.ED4wlE8.B/0OOdKNaqvvSOaPbkZA.EMsbiyZIkG', 'Pml6', '7410852000', 12, 2, 0, 1, '2022-06-16 22:05:15', 1, '2022-06-18 20:27:04'),
(15, 'admin@admin.com', '$2y$10$A9YaJk1moQ5clvnjY2hRhesZMO0fxK.33Y2agx.mcedluf2V0jihO', 'Anup Mavale', '9960309336', 2, 2, 0, 1, '2025-08-03 15:02:28', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `sl_m_brand`
--
ALTER TABLE `sl_m_brand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_brand_name` (`name`);

--
-- Indexes for table `sl_m_category`
--
ALTER TABLE `sl_m_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_category_name` (`name`);

--
-- Indexes for table `sl_m_size`
--
ALTER TABLE `sl_m_size`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_size_name` (`name`);

--
-- Indexes for table `sl_m_supplier`
--
ALTER TABLE `sl_m_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sl_m_unit`
--
ALTER TABLE `sl_m_unit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_unit_name` (`name`);

--
-- Indexes for table `tbl_access_matrix`
--
ALTER TABLE `tbl_access_matrix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`bookingId`);

--
-- Indexes for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD PRIMARY KEY (`taskId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sl_m_brand`
--
ALTER TABLE `sl_m_brand`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sl_m_category`
--
ALTER TABLE `sl_m_category`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sl_m_size`
--
ALTER TABLE `sl_m_size`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sl_m_supplier`
--
ALTER TABLE `sl_m_supplier`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sl_m_unit`
--
ALTER TABLE `sl_m_unit`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_access_matrix`
--
ALTER TABLE `tbl_access_matrix`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `bookingId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `taskId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;