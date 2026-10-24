-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2026 at 01:50 PM
-- Server version: 8.4.8-8
-- PHP Version: 8.1.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crmkseva`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_type`
--

CREATE TABLE `tbl_account_type` (
  `id` int NOT NULL,
  `account_type` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_account_type`
--

INSERT INTO `tbl_account_type` (`id`, `account_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Current Account-CA', 1, '2025-05-17 19:38:05', '2025-05-17 19:59:59'),
(2, 'Savings Account-SA', 1, '2025-05-17 19:38:11', '2025-05-17 19:59:40'),
(3, 'Overdraft', 1, '2025-05-20 18:52:25', '0000-00-00 00:00:00'),
(4, 'Cash Credit', 1, '2025-05-20 18:52:30', '2026-06-01 15:44:07'),
(5, 'SOD', 1, '2025-05-20 18:52:35', '0000-00-00 00:00:00'),
(6, 'OCC', 1, '2025-05-20 18:52:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `id` int NOT NULL,
  `bank_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bank`
--

INSERT INTO `tbl_bank` (`id`, `bank_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HDFC bank ltd', 1, '2025-05-14 17:10:29', '0000-00-00 00:00:00'),
(2, 'Kotak Mahindra Bank Ltd', 1, '2025-05-15 17:25:48', '0000-00-00 00:00:00'),
(3, 'Punjab National Bank Ltd', 1, '2025-05-15 17:26:00', '0000-00-00 00:00:00'),
(4, 'Axis Bank Ltd', 1, '2025-05-15 17:26:04', '0000-00-00 00:00:00'),
(5, 'Bank of Maharasthra', 1, '2025-05-15 17:26:08', '2025-07-10 18:18:14'),
(6, 'State Bank of India', 1, '2025-05-20 17:22:39', '0000-00-00 00:00:00'),
(7, 'Union Bank of India', 1, '2025-05-20 17:22:46', '0000-00-00 00:00:00'),
(8, 'Unity Small Finance Bank Ltd', 1, '2025-05-20 17:22:53', '0000-00-00 00:00:00'),
(9, 'Bank of Baroda', 1, '2025-05-20 18:51:18', '0000-00-00 00:00:00'),
(10, 'Bandhan Bank Ltd', 1, '2025-05-20 18:51:27', '0000-00-00 00:00:00'),
(11, 'Bank of India', 1, '2025-05-20 18:51:39', '0000-00-00 00:00:00'),
(12, 'Karur Vysya Bank Ltd', 1, '2025-05-20 18:52:04', '0000-00-00 00:00:00'),
(13, 'Mahesh Bank Ltd', 1, '2025-05-20 19:56:40', '2025-05-21 12:06:45'),
(14, 'ICICI Bank Ltd', 1, '2025-06-04 15:58:26', '0000-00-00 00:00:00'),
(16, 'IDBI Bank', 1, '2025-06-09 16:03:56', '0000-00-00 00:00:00'),
(17, 'Canara Bank Ltd', 1, '2025-06-12 12:34:45', '0000-00-00 00:00:00'),
(18, 'Andhra Pragathi Grameena Bank', 1, '2025-06-30 11:23:45', '0000-00-00 00:00:00'),
(19, 'Iindian Overseas Bank', 1, '2025-07-23 11:48:21', '0000-00-00 00:00:00'),
(20, 'State Bank Of Hyderabad', 1, '2025-07-28 12:54:13', '0000-00-00 00:00:00'),
(21, 'Telangana Grameena Bank', 1, '2025-08-02 18:27:57', '0000-00-00 00:00:00'),
(22, 'Indian Bank', 1, '2025-08-02 18:28:23', '0000-00-00 00:00:00'),
(23, 'IDFC First Bank', 1, '2025-08-07 18:05:33', '0000-00-00 00:00:00'),
(24, 'Andhra Bank', 1, '2025-08-12 18:31:32', '0000-00-00 00:00:00'),
(25, 'Central Bank Of India', 1, '2025-08-14 18:35:25', '0000-00-00 00:00:00'),
(26, 'DBS Bank India Limited', 1, '2025-08-21 17:27:47', '0000-00-00 00:00:00'),
(27, ' Indusind ', 1, '2025-09-18 18:08:35', '0000-00-00 00:00:00'),
(28, 'South Indian Bank', 1, '2025-10-08 16:03:42', '0000-00-00 00:00:00'),
(31, 'Equitas Small Finance Bank', 1, '2025-11-20 18:16:12', '0000-00-00 00:00:00'),
(32, 'Yes Bank', 1, '2025-11-22 16:04:42', '0000-00-00 00:00:00'),
(33, 'Karnataka Bank Ltd', 1, '2025-12-18 18:41:34', '2025-12-18 18:42:38'),
(34, 'Unity Small Finance Bank ', 1, '2025-12-25 12:36:26', '0000-00-00 00:00:00'),
(35, 'Development Credit Bank Limited', 1, '2026-01-12 17:49:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banker_designation`
--

CREATE TABLE `tbl_banker_designation` (
  `id` int NOT NULL,
  `designation_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_banker_designation`
--

INSERT INTO `tbl_banker_designation` (`id`, `designation_name`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Relationship Manager', 1, '2025-05-22 17:13:38', '0000-00-00 00:00:00'),
(5, 'Regional Business Head', 1, '2025-05-22 17:13:47', '0000-00-00 00:00:00'),
(6, 'Chief Business Officer-CBO', 1, '2025-05-22 17:13:56', '0000-00-00 00:00:00'),
(7, 'Manager', 1, '2025-05-22 17:14:01', '0000-00-00 00:00:00'),
(8, 'Executive', 1, '2025-05-22 17:14:05', '0000-00-00 00:00:00'),
(9, 'Sales Manager', 1, '2025-05-22 17:14:19', '0000-00-00 00:00:00'),
(10, 'Area Manager', 1, '2025-05-22 17:14:25', '0000-00-00 00:00:00'),
(11, 'Area Head-AH', 1, '2025-05-22 17:14:30', '0000-00-00 00:00:00'),
(12, 'Area Sales Manager-ASM', 1, '2025-05-22 17:14:44', '0000-00-00 00:00:00'),
(14, 'Assistant Manager', 1, '2025-05-25 16:39:55', '0000-00-00 00:00:00'),
(15, 'Deputy Manager', 1, '2025-05-25 16:40:04', '0000-00-00 00:00:00'),
(16, 'Branch Manager', 1, '2025-05-25 16:40:16', '0000-00-00 00:00:00'),
(17, 'Zonal Head', 1, '2025-05-25 16:40:30', '0000-00-00 00:00:00'),
(18, 'Zohan Sales Manager', 1, '2025-05-25 16:40:44', '0000-00-00 00:00:00'),
(19, 'South Head', 1, '2025-05-25 16:41:05', '0000-00-00 00:00:00'),
(20, 'General Manager', 1, '2025-05-25 16:41:20', '0000-00-00 00:00:00'),
(21, 'Regional Head', 1, '2025-05-25 16:41:34', '0000-00-00 00:00:00'),
(22, 'Sr Regional Business Head', 1, '2025-05-25 16:41:44', '0000-00-00 00:00:00'),
(23, 'Vice President', 1, '2025-05-25 16:41:55', '0000-00-00 00:00:00'),
(24, 'Assistant Vice President', 1, '2025-05-25 16:42:11', '0000-00-00 00:00:00'),
(25, 'Chief Executive Officer - CEO', 1, '2025-06-12 11:51:50', '0000-00-00 00:00:00'),
(26, 'Territory Manager', 1, '2025-07-11 18:54:53', '0000-00-00 00:00:00'),
(27, 'Cluster Manager', 1, '2025-07-11 18:55:19', '0000-00-00 00:00:00'),
(28, 'State Head', 1, '2025-07-11 18:55:46', '0000-00-00 00:00:00'),
(30, 'National Head - NH', 1, '2025-09-19 11:47:43', '0000-00-00 00:00:00'),
(31, 'AREA BUSINESS MANAGER', 1, '2025-12-19 13:33:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bh_users`
--

CREATE TABLE `tbl_bh_users` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alias_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `firstName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Phone_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `birth_date` date NOT NULL,
  `alternative_mobile_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branch_state_name_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branch_location_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `bank_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `account_type_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `office_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `residential_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `aadhaar_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pan_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `account_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ifsc_code` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `rank` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int DEFAULT '1',
  `reportingTo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pan_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `aadhaar_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `photo_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `bankproof_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `resume_file` text COLLATE utf8mb4_general_ci NOT NULL,
  `data_icons` text COLLATE utf8mb4_general_ci NOT NULL,
  `work_icons` text COLLATE utf8mb4_general_ci NOT NULL,
  `ref_name_1` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_relation_1` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_mobile_1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_address_1` text COLLATE utf8mb4_general_ci NOT NULL,
  `ref_name_2` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_relation_2` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_mobile_2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_address_2` text COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_general_ci NOT NULL,
  `department_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `designation_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `createdBy` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bh_users`
--

INSERT INTO `tbl_bh_users` (`id`, `username`, `alias_name`, `firstName`, `lastName`, `password`, `Phone_number`, `email_id`, `birth_date`, `alternative_mobile_number`, `company_name`, `branch_state_name_id`, `branch_location_id`, `bank_id`, `account_type_id`, `office_address`, `residential_address`, `aadhaar_number`, `pan_number`, `account_number`, `ifsc_code`, `rank`, `status`, `reportingTo`, `pan_img`, `aadhaar_img`, `photo_img`, `bankproof_img`, `resume_file`, `data_icons`, `work_icons`, `ref_name_1`, `ref_relation_1`, `ref_mobile_1`, `ref_address_1`, `ref_name_2`, `ref_relation_2`, `ref_mobile_2`, `ref_address_2`, `avatar`, `department_id`, `designation_id`, `user_id`, `createdBy`, `created_at`, `updated_at`) VALUES
(1, 'BH10000', 'Alias Name 2', 'Test BH', '1', '12345678', '9000003004', 'test@gmail.com', '0000-00-00', '1234556777', 'comp 1', '4', '6', '6', '1', 'hyd 1', 'hyd 2', '3222254555', '2522222222', '4456 8734 2316', 'SBI5645TD', 'BHUser', 1, '122245', '', '07174108-1742113593_graphic-designing.png', '07174002-1743059501_1742110519_energy.png', '07174108-1742113542_demo.pdf', '07174108-18130344-21152426-1.png', '[\"1\",\"4\"]', '[\"3\"]', 'saaaa', 'friend', '8000000088', 'sdfghj', 'ffaaa ', 'f friend 1', '9878787878', 'fghnm', '', '', '', '', '12000', '2025-07-07 16:32:18', '2025-11-22 17:06:26'),
(2, 'BH10001', 'Alias Name 2', 'Test BH', '2', '12345678', '9000003004', 'test@gmail.com', '0000-00-00', '1234556777', 'comp 1', '4', '6', '6', '1', 'hyd 1', 'hyd 2', '3222254555', '2522222222', '4456 8734 2316', 'SBI5645TD', 'BHUser', 1, 'BH10000', '', '', '07163218-1743059501_1742110519_energy.png', '', '', '[\"4\"]', '[\"7\",\"6\"]', '', '', '', '', '', '', '', '', '', '', '', '', '10003', '2025-07-07 16:32:18', '2025-07-07 16:47:45'),
(3, 'BH1111', 'alias 1', 'Test', '1', '12345678', '9000003004', 'testa@gmail.com', '1990-09-28', '9246545737', 'comp 1', '4', '6', '5', '1', 'Ameerpet', 'Ameerpet', '4567765', '432dg45', '100000000000001', 'SBI109T', 'BHUser', 1, '122245', '', '', '', '', '', '[\"1\",\"4\"]', '[\"7\",\"5\",\"6\"]', 'saaaa', 'friend', '8000000088', 'dddf', 'ffaaa 1', 'f friend 1', '9878787878', 'sssss', '', '', '', '', '122245', '2025-07-15 16:23:46', '2025-11-20 12:27:23'),
(4, 'BH10002', 'sri', 'Test ', '2', '12345678', '9876543210', 'test@gmail.com', '0000-00-00', '1234556777', 'comp 1', '4', '6', '2', '4', 'hyd 1', 'hyd 2', '3222254555', 'AFPPB2715P', '4456 8734 2316', 'CNRB0003507', 'BHUser', 1, 'BH10000', '', '', '', '', '', '[\"1\"]', '[\"5\",\"6\"]', 'R name  1', 'friend', '9999999999', 'sss', 'ffaaa 1', 'f friend 1', '9878787878', 'dddd', '', '', '', '', '122245', '2025-08-19 10:57:24', '2025-11-20 12:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_reviews`
--

CREATE TABLE `tbl_blog_reviews` (
  `id` int NOT NULL,
  `blog_id` int NOT NULL,
  `reviewer_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `reviewer_email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rating` int NOT NULL COMMENT '1-5',
  `review_text` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) DEFAULT '0' COMMENT '0=pending,1=approved',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch_location`
--

CREATE TABLE `tbl_branch_location` (
  `id` int NOT NULL,
  `branch_location` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `branch_state_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_branch_location`
--

INSERT INTO `tbl_branch_location` (`id`, `branch_location`, `branch_state_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Banglore', '3', 1, '2025-04-11 18:16:08', '0000-00-00 00:00:00'),
(3, 'Gulbarga', '3', 1, '2025-04-11 18:16:41', '0000-00-00 00:00:00'),
(4, 'Tirupathi', '2', 1, '2025-05-10 20:17:57', '0000-00-00 00:00:00'),
(5, 'Warangal', '4', 1, '2025-05-10 20:18:08', '0000-00-00 00:00:00'),
(6, 'Hyderabad', '4', 1, '2025-05-10 20:18:21', '0000-00-00 00:00:00'),
(7, 'Khammam', '4', 1, '2025-05-10 20:37:35', '0000-00-00 00:00:00'),
(8, 'Nizamabad', '4', 1, '2025-05-10 20:37:42', '0000-00-00 00:00:00'),
(9, 'Karimnagar', '4', 1, '2025-05-10 20:38:02', '0000-00-00 00:00:00'),
(10, 'Guntur', '2', 1, '2025-05-10 20:38:13', '0000-00-00 00:00:00'),
(11, 'Vijayawada', '2', 1, '2025-05-10 20:38:26', '0000-00-00 00:00:00'),
(12, 'Bhimavaram', '2', 1, '2025-05-10 20:38:49', '0000-00-00 00:00:00'),
(13, 'Rajamundry', '2', 1, '2025-05-10 20:39:03', '0000-00-00 00:00:00'),
(15, 'Vizag', '2', 1, '2025-05-20 18:59:59', '0000-00-00 00:00:00'),
(16, 'Vijayanagaram', '2', 1, '2025-05-20 19:00:15', '0000-00-00 00:00:00'),
(17, 'Bengalore', '3', 1, '2025-05-21 19:23:21', '0000-00-00 00:00:00'),
(18, 'Nalgonda-NAL', '4', 1, '2025-05-23 18:51:24', '0000-00-00 00:00:00'),
(19, 'Kakinada-KAK', '2', 1, '2025-05-23 18:52:12', '0000-00-00 00:00:00'),
(20, 'Ananthapuram-ANT', '2', 1, '2025-05-23 18:52:23', '0000-00-00 00:00:00'),
(21, 'Kurnool-KRL', '2', 1, '2025-05-23 18:52:32', '2025-05-23 18:52:47'),
(22, 'Ongole-ONG', '2', 1, '2025-05-23 18:53:00', '0000-00-00 00:00:00'),
(23, 'Nellore-NEL', '2', 1, '2025-05-23 18:53:10', '0000-00-00 00:00:00'),
(24, 'Kadapa-KAD', '2', 1, '2025-05-23 18:53:33', '0000-00-00 00:00:00'),
(25, 'Mahaboob Nagar', '4', 1, '2025-09-27 13:58:40', '0000-00-00 00:00:00'),
(26, 'Rayachoti', '2', 1, '2025-09-27 13:58:46', '0000-00-00 00:00:00'),
(27, 'Sangareddy', '4', 1, '2025-09-27 13:58:54', '0000-00-00 00:00:00'),
(28, 'Zaheerabad', '4', 1, '2025-09-27 13:59:03', '0000-00-00 00:00:00'),
(29, 'Palakollu', '2', 1, '2025-10-01 14:23:37', '0000-00-00 00:00:00'),
(30, 'Eluru', '2', 1, '2025-10-01 14:24:34', '0000-00-00 00:00:00'),
(31, 'krajeshk', '3', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Narasaraopet Pet', '2', 1, '2025-10-27 05:53:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch_state`
--

CREATE TABLE `tbl_branch_state` (
  `id` int NOT NULL,
  `branch_state_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_branch_state`
--

INSERT INTO `tbl_branch_state` (`id`, `branch_state_name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Andhra Pradesh-AP', 1, '2025-04-11 18:13:49', '2025-05-17 10:34:15'),
(3, 'Karnataka-KA', 1, '2025-04-11 18:13:57', '2025-05-17 10:34:22'),
(4, 'Telangana-TG', 1, '2025-05-10 20:09:34', '2025-05-17 10:34:30'),
(5, 'Tamila Nadu-TN', 1, '2025-05-17 10:34:45', '0000-00-00 00:00:00'),
(6, 'krajeshk', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cbo_users`
--

CREATE TABLE `tbl_cbo_users` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alias_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `firstName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Phone_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `birth_date` date NOT NULL,
  `alternative_mobile_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branch_state_name_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branch_location_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `bank_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `account_type_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `office_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `residential_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `aadhaar_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pan_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `account_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ifsc_code` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `rank` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int DEFAULT '1',
  `reportingTo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pan_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `aadhaar_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `photo_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `bankproof_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `resume_file` text COLLATE utf8mb4_general_ci NOT NULL,
  `data_icons` text COLLATE utf8mb4_general_ci NOT NULL,
  `work_icons` text COLLATE utf8mb4_general_ci NOT NULL,
  `ref_name_1` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_relation_1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_mobile_1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_address_1` text COLLATE utf8mb4_general_ci NOT NULL,
  `ref_name_2` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_relation_2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_mobile_2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_address_2` text COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_general_ci NOT NULL,
  `department_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `designation_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `createdBy` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cbo_users`
--

INSERT INTO `tbl_cbo_users` (`id`, `username`, `alias_name`, `firstName`, `lastName`, `password`, `Phone_number`, `email_id`, `birth_date`, `alternative_mobile_number`, `company_name`, `branch_state_name_id`, `branch_location_id`, `bank_id`, `account_type_id`, `office_address`, `residential_address`, `aadhaar_number`, `pan_number`, `account_number`, `ifsc_code`, `rank`, `status`, `reportingTo`, `pan_img`, `aadhaar_img`, `photo_img`, `bankproof_img`, `resume_file`, `data_icons`, `work_icons`, `ref_name_1`, `ref_relation_1`, `ref_mobile_1`, `ref_address_1`, `ref_name_2`, `ref_relation_2`, `ref_mobile_2`, `ref_address_2`, `avatar`, `department_id`, `designation_id`, `user_id`, `createdBy`, `created_at`, `updated_at`) VALUES
(1, '11111', 'NAMBOORI', 'Test ', 'CBO 1', '123456', '9876543210', 'test@gmail.com', '2000-04-07', '1234556777', 'comp 1', '4', '9', '4', '1', 'as', 'fsd', '3222254555', 'afd', '4456 8734 2316', 'CNRB0003507', 'CBOUser', 1, '10009', '18132915-22151746-whatsapp-image-2025-02-18-at-2.42.55-pm-(1).jpeg', '18132915-22151440-demo.pdf', '18133338-21153500-14143909-fitness.png', '18133404-21152426-1.png', '18132915-22151249-logo-(2).png', '[\"4\",\"1\"]', '[\"7\",\"5\",\"6\"]', 'ash', 'friend', '8000000088', 'hyd 3', 'ridhi', 'f friend 1', '9878787878', 'hyd 4', '', '', '', '', '10009', '2025-06-18 13:29:15', '2025-11-19 11:38:50'),
(2, 'CBO1111', 'NAMBOORI', 'Test ', '2', '12345678', '9876543210', 'test@gmail.com', '0000-00-00', '1234556777', 'comp 1', '4', '9', '4', '1', 'as', 'fsd', '3222254555', 'afd', '4456 8734 2316', 'CNRB0003507', 'CBOUser', 1, '10008', '18132915-22151746-whatsapp-image-2025-02-18-at-2.42.55-pm-(1).jpeg', '18132915-22151440-demo.pdf', '18133338-21153500-14143909-fitness.png', '18133404-21152426-1.png', '18132915-22151249-logo-(2).png', '[\"1\"]', '[\"7\",\"5\",\"6\"]', '', '', '', '', '', '', '', '', '', '', '', '', '10003', '2025-06-18 13:29:15', '2025-11-21 15:41:34'),
(3, 'CBO1112', 'NAMBOORI', 'Test ', '3', '12345678', '9876543210', 'test@gmail.com', '0000-00-00', '1234556777', 'comp 1', '4', '9', '4', '1', 'as', 'fsd', '3222254555', 'afd', '4456 8734 2316', 'CNRB0003507', 'CBOUser', 1, 'CBO1111', '18132915-22151746-whatsapp-image-2025-02-18-at-2.42.55-pm-(1).jpeg', '18132915-22151440-demo.pdf', '18133338-21153500-14143909-fitness.png', '18133404-21152426-1.png', '18132915-22151249-logo-(2).png', '[\"4\"]', '[\"6\",\"3\"]', '', '', '', '', '', '', '', '', '', '', '', '', '10009', '2025-06-18 13:29:15', '2025-07-15 15:36:01'),
(4, 'CBO1113', 'KRAJESHK', 'Test ', 'Krishna', '12345678', '1234567891', 'demo1@gmail.com', '0000-00-00', '3333333333', 'dscfdvfdv', '2', '16', '8', '4', 'ds', 'sr', '3222254555', 'aer324q', '4456 8734 2316', 'CNRB0003507', 'CBOUser', 1, '10009', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '10009', '2025-07-20 22:55:43', '0000-00-00 00:00:00'),
(5, 'CBO1114', 'test2', 'Test ', '4', '12345678', '9876543210', 'test@gmail.com', '0000-00-00', '1234556777', 'Company 1', '4', '8', '1', '2', 'hyd 1', 'hyd 2', '3222254555', '2522222222', '4456 8734 2316', 'HDFC0000811', 'CBOUser', 1, 'CBO1113', '18153323-1753167805-1742113593_graphic-designing.png', '', '18153401-1751291264-1749204943-1742110519_energy.png', '', '', '', '', 'R name  1', 'R friend 1', '8000000088', 'sssss', 'ffaaa 1', 'f friend 1', '9878787878', 'dsaaaaa', '', '', '', '', '10009', '2025-08-18 15:33:23', '2025-08-18 15:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_credit_reports`
--

CREATE TABLE `tbl_credit_reports` (
  `id` int NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `middle_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile_number` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `alternate_mobile` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadhaar_number` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `pan_number` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `aadhaar_document` text COLLATE utf8mb4_general_ci,
  `aadhaar_document_back` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `pan_document` text COLLATE utf8mb4_general_ci,
  `service_type_id` int NOT NULL,
  `service_id` int NOT NULL,
  `status` enum('Pending','Processing','Completed','Not Eligible','Not Qualified','Data Not Found','Incomplete Information','Under Review','Verified','Failed','On Hold','Awaiting Documents','Credit Report Generated','Disputed','Expired') COLLATE utf8mb4_general_ci DEFAULT 'Pending',
  `remarks` text COLLATE utf8mb4_general_ci,
  `created_by` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `submitter_type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_credit_report_files`
--

CREATE TABLE `tbl_credit_report_files` (
  `id` int NOT NULL,
  `credit_report_id` int NOT NULL,
  `slot` tinyint(1) NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `original_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `uploaded_by` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `uploaded_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `id` int NOT NULL,
  `department_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`id`, `department_name`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Marketing', 1, '2025-05-09 20:16:31', '0000-00-00 00:00:00'),
(5, 'Management', 1, '2025-05-09 20:17:14', '0000-00-00 00:00:00'),
(7, 'Finance', 1, '2025-07-05 11:14:34', '0000-00-00 00:00:00'),
(8, 'HR', 1, '2025-07-11 18:51:51', '0000-00-00 00:00:00'),
(9, 'Support-CRM', 1, '2025-08-20 14:46:13', '0000-00-00 00:00:00'),
(13, 'Digital', 1, '2026-03-14 19:07:07', '2026-06-02 12:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designation`
--

CREATE TABLE `tbl_designation` (
  `id` int NOT NULL,
  `designation_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `department_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_designation`
--

INSERT INTO `tbl_designation` (`id`, `designation_name`, `department_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', '', 1, '2025-05-09 20:17:39', '0000-00-00 00:00:00'),
(5, 'Chief Business Officer', '4', 1, '2025-05-09 20:16:53', '2025-05-12 15:37:05'),
(6, 'Director', '5', 1, '2025-05-09 20:17:27', '0000-00-00 00:00:00'),
(7, 'Managing Director', '5', 1, '2025-05-09 20:17:39', '0000-00-00 00:00:00'),
(12, 'Regional Business Head', '4', 1, '2025-05-21 12:50:21', '0000-00-00 00:00:00'),
(15, 'Business Head', '4', 1, '2025-07-05 11:13:37', '0000-00-00 00:00:00'),
(16, 'Manager', '7', 1, '2025-07-05 11:15:04', '2025-07-05 12:48:31'),
(17, 'Asst. Manager', '7', 1, '2025-07-05 11:15:17', '0000-00-00 00:00:00'),
(18, 'Manager', '8', 1, '2025-07-11 18:52:06', '0000-00-00 00:00:00'),
(21, 'Asst. Manager', '9', 1, '2025-08-20 14:46:25', '2026-03-03 16:10:35'),
(22, 'Manager', '9', 1, '2025-08-20 14:46:40', '2026-03-03 16:11:29'),
(26, 'Asst. Manager', '8', 1, '2026-03-03 16:11:57', '0000-00-00 00:00:00'),
(27, 'Manager', '13', 1, '2026-03-14 19:07:23', '0000-00-00 00:00:00'),
(28, 'Asst. Manager', '13', 1, '2026-03-14 19:07:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_distributor_user`
--

CREATE TABLE `tbl_distributor_user` (
  `id` int NOT NULL,
  `username` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `firstName` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastName` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobile` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_id` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `employee_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `department_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `designation_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `anniversary_date` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `branch_state_name_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `branch_location_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `present_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `permanent_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `status` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  `userRank` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `avatar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `acc_holder_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bank_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `branch_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_number` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ifsc_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bank_passbook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `passport_document` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `aadhar_document` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `aadhar_back_document` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `pancard_document` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `reportingTo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `official_phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `official_email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `work_state` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `work_location` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `residential_address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `office_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `pan_number` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadhaar_number` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `manage_icons` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `data_icons` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `work_icons` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `payout_icons` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `last_working_date` date DEFAULT NULL,
  `leaving_reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `re_joining_date` date DEFAULT NULL,
  `ref_name_1` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_relation_1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_mobile_1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_address_1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `ref_name_2` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_relation_2` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_mobile_2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_address_2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `createdBy` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_distributor_user`
--

INSERT INTO `tbl_distributor_user` (`id`, `username`, `firstName`, `lastName`, `mobile`, `email_id`, `password`, `employee_no`, `department_id`, `designation_id`, `birth_date`, `anniversary_date`, `branch_state_name_id`, `branch_location_id`, `present_address`, `permanent_address`, `status`, `userRank`, `avatar`, `acc_holder_name`, `bank_name`, `account_type`, `branch_name`, `account_number`, `ifsc_code`, `bank_passbook`, `passport_document`, `aadhar_document`, `aadhar_back_document`, `pancard_document`, `reportingTo`, `official_phone`, `official_email`, `work_state`, `work_location`, `residential_address`, `office_address`, `pan_number`, `aadhaar_number`, `manage_icons`, `data_icons`, `work_icons`, `payout_icons`, `last_working_date`, `leaving_reason`, `re_joining_date`, `ref_name_1`, `ref_relation_1`, `ref_mobile_1`, `ref_address_1`, `ref_name_2`, `ref_relation_2`, `ref_mobile_2`, `ref_address_2`, `createdBy`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Test', '1', '9876543210', 'exampleshellagi@gmail.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-16 08:22:37', NULL),
(2, NULL, 'SURY123', 'RSAJHS', '8367738868', 'HOTS@RMAIL.COM', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-25 09:57:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_downloads`
--

CREATE TABLE `tbl_downloads` (
  `id` int NOT NULL,
  `image_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `image_category` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `image_file` text COLLATE utf8mb4_general_ci NOT NULL,
  `image_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_images`
--

CREATE TABLE `tbl_gallery_images` (
  `id` int NOT NULL,
  `image_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `image_category` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `image_file` text COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_videos`
--

CREATE TABLE `tbl_gallery_videos` (
  `id` int NOT NULL,
  `video_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `video_category` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `video_image` text COLLATE utf8mb4_general_ci NOT NULL,
  `video` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kseva_centers`
--

CREATE TABLE `tbl_kseva_centers` (
  `id` int NOT NULL,
  `center_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kseva_centers`
--

INSERT INTO `tbl_kseva_centers` (`id`, `center_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Flat No 401, Classic Avenue Apartments, Ameerpet, Hyderabad 50016', 1, '2026-05-13 20:18:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_latest_news`
--

CREATE TABLE `tbl_latest_news` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `image` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_latest_offers`
--

CREATE TABLE `tbl_latest_offers` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `image` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_latest_policy`
--

CREATE TABLE `tbl_latest_policy` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `image` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `id` int NOT NULL,
  `location` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `state_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`id`, `location`, `state_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Gulbarga', '3', 1, '2025-04-11 18:36:28', '0000-00-00 00:00:00'),
(4, 'Banglore', '3', 1, '2025-04-12 12:59:13', '0000-00-00 00:00:00'),
(7, 'solapur', '5', 1, '2025-05-09 18:53:19', '0000-00-00 00:00:00'),
(8, 'pune', '5', 1, '2025-05-09 18:54:55', '0000-00-00 00:00:00'),
(9, 'Nalgonda', '4', 1, '2025-05-23 17:50:45', '0000-00-00 00:00:00'),
(10, 'Alluri Seetharama Raju', '1', 1, '2025-05-24 11:00:05', '0000-00-00 00:00:00'),
(11, 'Anakapalli', '1', 1, '2025-05-24 11:00:15', '0000-00-00 00:00:00'),
(12, 'Ananthapuram', '1', 1, '2025-05-24 11:00:24', '0000-00-00 00:00:00'),
(13, 'Annamayya', '1', 1, '2025-05-24 11:00:31', '0000-00-00 00:00:00'),
(14, 'Bapatla', '1', 1, '2025-05-24 11:00:43', '0000-00-00 00:00:00'),
(15, 'Bhimavaram', '1', 1, '2025-05-24 11:00:49', '0000-00-00 00:00:00'),
(16, 'Chittoor', '1', 1, '2025-05-24 11:00:58', '0000-00-00 00:00:00'),
(17, 'East Godavari', '1', 1, '2025-05-24 11:01:04', '0000-00-00 00:00:00'),
(18, 'Eluru', '1', 1, '2025-05-24 11:01:13', '0000-00-00 00:00:00'),
(19, 'Guntur', '1', 1, '2025-05-24 11:01:22', '0000-00-00 00:00:00'),
(20, 'Kadapa', '1', 1, '2025-05-24 11:01:36', '0000-00-00 00:00:00'),
(21, 'Kakinada', '1', 1, '2025-05-24 11:02:53', '0000-00-00 00:00:00'),
(22, 'Konaseema', '1', 1, '2025-05-24 11:03:02', '0000-00-00 00:00:00'),
(25, 'Nandyal', '1', 1, '2025-05-24 11:03:37', '0000-00-00 00:00:00'),
(26, 'Nellore', '1', 1, '2025-05-24 11:03:46', '0000-00-00 00:00:00'),
(28, 'Kurnool', '1', 1, '2025-05-24 11:05:49', '0000-00-00 00:00:00'),
(29, 'NTR', '1', 1, '2025-05-24 11:06:20', '0000-00-00 00:00:00'),
(30, 'Palnadu', '1', 1, '2025-05-24 11:06:29', '0000-00-00 00:00:00'),
(31, 'Adilabad', '4', 1, '2025-05-24 11:11:51', '0000-00-00 00:00:00'),
(32, 'Gadwal', '4', 1, '2025-05-24 11:12:02', '0000-00-00 00:00:00'),
(33, 'Hanumakonda', '4', 1, '2025-05-24 11:12:10', '0000-00-00 00:00:00'),
(35, 'Hyderabad', '4', 1, '2025-05-24 11:12:51', '0000-00-00 00:00:00'),
(36, 'Jagtial', '4', 1, '2025-05-24 11:12:59', '0000-00-00 00:00:00'),
(37, 'Jangoan', '4', 1, '2025-05-24 11:13:05', '0000-00-00 00:00:00'),
(38, 'Jayashankar Bhoopalpally', '4', 1, '2025-05-24 11:13:13', '0000-00-00 00:00:00'),
(39, 'Kamareddy', '4', 1, '2025-05-24 11:13:55', '0000-00-00 00:00:00'),
(40, 'Karimnagar', '4', 1, '2025-05-24 11:14:37', '0000-00-00 00:00:00'),
(41, 'Khammam', '4', 1, '2025-05-24 11:14:50', '0000-00-00 00:00:00'),
(42, 'Komaram Bheem Asifabad', '4', 1, '2025-05-24 11:15:01', '0000-00-00 00:00:00'),
(43, 'Kothagudem', '4', 1, '2025-05-24 11:15:26', '0000-00-00 00:00:00'),
(44, 'Mahabubnagar', '4', 1, '2025-05-24 11:15:38', '0000-00-00 00:00:00'),
(46, 'Mahabubabad', '4', 1, '2025-05-24 11:16:39', '0000-00-00 00:00:00'),
(47, 'Mancherial', '4', 1, '2025-05-24 11:16:49', '0000-00-00 00:00:00'),
(49, 'Medak', '4', 1, '2025-05-24 11:17:14', '0000-00-00 00:00:00'),
(50, 'Medchal Malkajgiri', '4', 1, '2025-05-24 11:18:05', '0000-00-00 00:00:00'),
(51, 'Mulugu', '4', 1, '2025-05-24 11:18:15', '0000-00-00 00:00:00'),
(52, 'Nagarkurnool', '4', 1, '2025-05-24 11:18:28', '0000-00-00 00:00:00'),
(53, 'Nalgonda', '4', 1, '2025-05-24 11:18:38', '0000-00-00 00:00:00'),
(54, 'Narayanpet', '4', 1, '2025-05-24 11:18:49', '0000-00-00 00:00:00'),
(55, 'Nirmal', '4', 1, '2025-05-24 11:19:01', '0000-00-00 00:00:00'),
(56, 'Nizamabad', '4', 1, '2025-05-24 11:19:14', '0000-00-00 00:00:00'),
(57, 'Rajanna Siricilla', '4', 1, '2025-05-24 11:28:28', '0000-00-00 00:00:00'),
(58, 'Rangareddy', '4', 1, '2025-05-24 11:28:45', '0000-00-00 00:00:00'),
(60, 'Siddipet', '4', 1, '2025-05-24 11:29:49', '0000-00-00 00:00:00'),
(61, 'Suryapet', '4', 1, '2025-05-24 11:30:00', '0000-00-00 00:00:00'),
(62, 'Vikarabad', '4', 1, '2025-05-24 11:30:12', '0000-00-00 00:00:00'),
(63, 'Wanaparty', '4', 1, '2025-05-24 11:30:23', '0000-00-00 00:00:00'),
(64, 'Warangal', '4', 1, '2025-05-24 11:30:59', '0000-00-00 00:00:00'),
(65, 'Yadadri Bhuvanagiri', '4', 1, '2025-05-24 11:31:10', '0000-00-00 00:00:00'),
(66, 'krishna', '1', 1, '2025-05-31 15:28:37', '0000-00-00 00:00:00'),
(69, 'Mahabubnagar', '4', 1, '2025-09-27 13:56:15', '0000-00-00 00:00:00'),
(70, 'Sangareddy', '4', 1, '2025-09-27 13:56:27', '0000-00-00 00:00:00'),
(72, 'Noida', '17', 1, '2025-12-19 15:05:19', '0000-00-00 00:00:00'),
(73, 'Vizag', '1', 1, '2025-12-31 13:28:57', '0000-00-00 00:00:00'),
(74, 'Karimnagar', '1', 1, '2026-01-10 18:38:33', '0000-00-00 00:00:00'),
(75, 'West Godavari', '1', 1, '2026-01-22 12:47:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `logged_in_at` datetime NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `logged_in_at`, `status`) VALUES
(1, 'krajeshk', '2026-03-03 15:41:56', 1),
(2, 'krajeshk', '2026-03-03 15:50:12', 1),
(3, 'krajeshk', '2026-03-03 18:11:10', 1),
(4, 'krajeshk', '2026-03-03 19:11:00', 1),
(5, 'krajeshk', '2026-03-04 11:08:21', 1),
(6, 'krajeshk', '2026-03-04 12:29:39', 1),
(7, 'krajeshk', '2026-03-04 12:41:33', 1),
(8, 'krajeshk', '2026-03-04 14:18:25', 1),
(9, 'krajeshk', '2026-03-04 14:19:21', 1),
(10, 'krajeshk', '2026-03-04 14:49:09', 1),
(11, 'krajeshk', '2026-03-04 16:34:30', 1),
(12, 'krajeshk', '2026-03-04 16:46:50', 1),
(13, 'krajeshk', '2026-03-04 17:10:21', 1),
(14, 'krajeshk', '2026-03-04 17:23:47', 1),
(15, '14348', '2026-03-04 17:54:58', 1),
(16, 'krajeshk', '2026-03-04 18:31:06', 1),
(17, 'krajeshk', '2026-03-04 18:54:38', 1),
(18, 'krajeshk', '2026-03-05 10:33:44', 1),
(19, '14348', '2026-03-05 11:28:54', 1),
(20, '14140', '2026-03-05 11:30:08', 1),
(21, 'krajeshk', '2026-03-05 11:30:53', 1),
(22, 'krajeshk', '2026-03-05 11:40:09', 1),
(23, 'krajeshk', '2026-03-05 11:51:56', 1),
(24, 'krajeshk', '2026-03-05 12:04:23', 1),
(25, 'krajeshk', '2026-03-05 12:18:08', 1),
(26, 'krajeshk', '2026-03-05 12:33:47', 1),
(27, 'krajeshk', '2026-03-05 13:06:40', 1),
(28, '14140', '2026-03-05 13:29:04', 1),
(29, 'krajeshk', '2026-03-05 13:29:30', 1),
(30, '14341', '2026-03-05 13:30:46', 1),
(31, 'krajeshk', '2026-03-05 13:31:00', 1),
(32, 'krajeshk', '2026-03-05 13:47:39', 1),
(33, 'krajeshk', '2026-03-05 14:31:32', 1),
(34, 'krajeshk', '2026-03-05 14:36:54', 1),
(35, 'krajeshk', '2026-03-05 14:38:55', 1),
(36, 'krajeshk', '2026-03-05 15:00:49', 1),
(37, 'krajeshk', '2026-03-05 15:03:01', 1),
(38, '14140', '2026-03-05 15:21:54', 1),
(39, 'krajeshk', '2026-03-05 16:09:24', 1),
(40, 'krajeshk', '2026-03-05 16:10:31', 1),
(41, 'krajeshk', '2026-03-05 17:05:11', 1),
(42, 'krajeshk', '2026-03-05 17:31:55', 1),
(43, 'krajeshk', '2026-03-05 17:53:34', 1),
(44, '63300', '2026-03-05 18:13:15', 1),
(45, 'krajeshk', '2026-03-05 18:14:54', 1),
(46, '63300', '2026-03-05 18:18:54', 1),
(47, 'krajeshk', '2026-03-06 09:32:27', 1),
(48, '10000', '2026-03-06 09:33:47', 1),
(49, '14140', '2026-03-06 11:06:02', 1),
(50, 'krajeshk', '2026-03-06 11:10:06', 1),
(51, 'krajeshk', '2026-03-06 11:47:37', 1),
(52, 'krajeshk', '2026-03-06 12:48:08', 1),
(53, '14140', '2026-03-06 13:18:39', 1),
(54, 'krajeshk', '2026-03-06 13:18:56', 1),
(55, '14140', '2026-03-06 13:20:52', 1),
(56, 'krajeshk', '2026-03-06 13:22:07', 1),
(57, 'krajeshk', '2026-03-06 14:33:06', 1),
(58, 'krajeshk', '2026-03-06 15:00:26', 1),
(59, 'krajeshk', '2026-03-06 15:08:39', 1),
(60, 'krajeshk', '2026-03-06 17:04:11', 1),
(61, 'krajeshk', '2026-03-06 17:12:00', 1),
(62, 'krajeshk', '2026-03-06 17:15:44', 1),
(63, 'krajeshk', '2026-03-06 18:03:01', 1),
(64, 'krajeshk', '2026-03-07 10:13:34', 1),
(65, '10000', '2026-03-07 10:19:03', 1),
(66, 'krajeshk', '2026-03-07 10:20:05', 1),
(67, 'krajeshk', '2026-03-07 10:27:31', 1),
(68, 'krajeshk', '2026-03-07 11:23:24', 1),
(69, 'krajeshk', '2026-03-07 11:41:12', 1),
(70, '14337', '2026-03-07 12:03:30', 1),
(71, '14348', '2026-03-07 12:06:16', 1),
(72, 'krajeshk', '2026-03-07 12:08:19', 1),
(73, '14337', '2026-03-07 12:18:27', 1),
(74, '14348', '2026-03-07 12:19:44', 1),
(75, '14348', '2026-03-07 12:23:47', 1),
(76, '14337', '2026-03-07 12:30:47', 1),
(77, 'krajeshk', '2026-03-07 12:32:41', 1),
(78, '14348', '2026-03-07 13:00:00', 1),
(79, '14337', '2026-03-07 13:01:34', 1),
(80, '14337', '2026-03-07 13:01:34', 1),
(81, 'krajeshk', '2026-03-07 13:31:45', 1),
(82, 'krajeshk', '2026-03-07 14:35:16', 1),
(83, '10000', '2026-03-07 15:23:52', 1),
(84, 'krajeshk', '2026-03-07 16:57:57', 1),
(85, '10000', '2026-03-07 18:14:38', 1),
(86, 'krajeshk', '2026-03-07 18:50:15', 1),
(87, 'krajeshk', '2026-03-07 18:50:15', 1),
(88, '10000', '2026-03-07 18:51:17', 1),
(89, 'krajeshk', '2026-03-08 15:43:37', 1),
(90, '10000', '2026-03-08 16:13:45', 1),
(91, '63300', '2026-03-09 10:21:26', 1),
(92, '14348', '2026-03-09 11:11:49', 1),
(93, 'krajeshk', '2026-03-09 11:21:31', 1),
(94, 'krajeshk', '2026-03-09 12:03:53', 1),
(95, 'krajeshk', '2026-03-09 12:26:12', 1),
(96, 'krajeshk', '2026-03-09 13:16:21', 1),
(97, 'krajeshk', '2026-03-09 15:25:53', 1),
(98, 'krajeshk', '2026-03-09 15:54:16', 1),
(99, 'krajeshk', '2026-03-09 17:49:39', 1),
(100, 'krajeshk', '2026-03-10 11:33:44', 1),
(101, 'krajeshk', '2026-03-10 12:30:28', 1),
(102, 'krajeshk', '2026-03-10 15:03:38', 1),
(103, 'krajeshk', '2026-03-10 17:18:30', 1),
(104, 'krajeshk', '2026-03-10 17:44:21', 1),
(105, 'krajeshk', '2026-03-10 17:55:42', 1),
(106, '61110', '2026-03-11 11:50:37', 1),
(107, 'krajeshk', '2026-03-11 15:57:49', 1),
(108, 'krajeshk', '2026-03-11 16:17:02', 1),
(109, '10000', '2026-03-11 16:17:40', 1),
(110, 'krajeshk', '2026-03-11 16:48:35', 1),
(111, 'krajeshk', '2026-03-11 18:43:02', 1),
(112, '14140', '2026-03-11 18:44:35', 1),
(113, 'krajeshk', '2026-03-11 18:53:03', 1),
(114, 'krajeshk', '2026-03-11 18:56:06', 1),
(115, '14140', '2026-03-11 18:59:05', 1),
(116, 'krajeshk', '2026-03-11 19:02:07', 1),
(117, '14140', '2026-03-12 10:21:11', 1),
(118, '14140', '2026-03-12 13:50:44', 1),
(119, '14140', '2026-03-12 17:53:59', 1),
(120, '14140', '2026-03-13 12:08:10', 1),
(121, '14140', '2026-03-13 13:14:52', 1),
(122, '14140', '2026-03-13 16:22:50', 1),
(123, '14140', '2026-03-13 18:13:45', 1),
(124, '61110', '2026-03-14 13:28:54', 1),
(125, 'krajeshk', '2026-03-14 14:17:51', 1),
(126, '10000', '2026-03-14 14:18:15', 1),
(127, '10000', '2026-03-14 18:08:54', 1),
(128, 'krajeshk', '2026-03-14 18:49:59', 1),
(129, 'krajeshk', '2026-03-15 11:56:12', 1),
(130, 'krajeshk', '2026-03-16 14:07:18', 1),
(131, 'krajeshk', '2026-03-16 19:26:24', 1),
(132, '61110', '2026-03-17 11:27:45', 1),
(133, 'krajeshk', '2026-03-18 10:49:34', 1),
(134, 'krajeshk', '2026-03-18 11:26:16', 1),
(135, 'krajeshk', '2026-03-18 11:40:56', 1),
(136, 'krajeshk', '2026-03-18 11:45:48', 1),
(137, '14341', '2026-03-18 16:15:56', 1),
(138, '14341', '2026-03-18 16:22:42', 1),
(139, '14341', '2026-03-18 16:34:28', 1),
(140, 'krajeshk', '2026-03-18 16:39:11', 1),
(141, 'krajeshk', '2026-03-18 16:39:11', 1),
(142, '14348', '2026-03-20 17:22:19', 1),
(143, '14348', '2026-03-20 17:30:02', 1),
(144, 'krajeshk', '2026-03-20 17:32:13', 1),
(145, '14348', '2026-03-20 17:33:34', 1),
(146, '14341', '2026-03-20 17:43:34', 1),
(147, '63300', '2026-03-20 17:45:46', 1),
(148, '14341', '2026-03-20 17:52:00', 1),
(149, 'krajeshk', '2026-03-21 10:34:51', 1),
(150, 'krajeshk', '2026-03-21 11:16:25', 1),
(151, 'krajeshk', '2026-03-23 10:31:10', 1),
(152, '80000', '2026-03-23 10:34:04', 1),
(153, 'krajeshk', '2026-03-23 11:53:38', 1),
(154, 'krajeshk', '2026-03-23 18:08:06', 1),
(155, '14348', '2026-03-23 18:13:58', 1),
(156, '80000', '2026-03-23 18:15:35', 1),
(157, 'krajeshk', '2026-03-23 21:09:29', 1),
(158, '14140', '2026-03-24 10:34:57', 1),
(159, 'krajeshk', '2026-03-24 12:06:10', 1),
(160, '14140', '2026-03-24 13:12:02', 1),
(161, 'krajeshk', '2026-03-24 13:20:18', 1),
(162, '14341', '2026-03-24 15:40:17', 1),
(163, 'krajeshk', '2026-03-24 16:07:37', 1),
(164, 'krajeshk', '2026-03-24 17:02:39', 1),
(165, '14341', '2026-03-24 18:19:08', 1),
(166, 'krajeshk', '2026-03-24 18:28:09', 1),
(167, 'krajeshk', '2026-03-25 11:59:35', 1),
(168, 'krajeshk', '2026-03-25 13:26:38', 1),
(169, 'krajeshk', '2026-03-25 16:00:37', 1),
(170, 'krajeshk', '2026-03-25 16:15:13', 1),
(171, 'krajeshk', '2026-03-25 17:00:45', 1),
(172, '60100', '2026-03-25 17:14:38', 1),
(173, 'krajeshk', '2026-03-25 18:12:31', 1),
(174, 'krajeshk', '2026-03-25 21:11:39', 1),
(175, 'krajeshk', '2026-03-25 22:08:26', 1),
(176, '14140', '2026-03-26 10:40:49', 1),
(177, '14341', '2026-03-26 11:33:39', 1),
(178, 'krajeshk', '2026-03-26 11:35:11', 1),
(179, '60100', '2026-03-26 12:09:40', 1),
(180, '60100', '2026-03-26 12:55:29', 1),
(181, '60100', '2026-03-26 14:22:46', 1),
(182, 'krajeshk', '2026-03-26 15:24:54', 1),
(183, '10000', '2026-03-26 15:27:24', 1),
(184, '14341', '2026-03-26 15:28:10', 1),
(185, '14140', '2026-03-26 17:08:34', 1),
(186, '14341', '2026-03-26 17:32:35', 1),
(187, '14348', '2026-03-26 17:34:08', 1),
(188, 'krajeshk', '2026-03-26 17:40:06', 1),
(189, '80000', '2026-03-26 17:44:59', 1),
(190, 'krajeshk', '2026-03-26 17:45:58', 1),
(191, '14341', '2026-03-26 17:49:18', 1),
(192, 'krajeshk', '2026-03-26 17:51:55', 1),
(193, 'krajeshk', '2026-03-26 18:40:12', 1),
(194, 'krajeshk', '2026-03-26 19:45:10', 1),
(195, '10000', '2026-03-26 19:45:29', 1),
(196, 'krajeshk', '2026-03-26 21:23:58', 1),
(197, '64000', '2026-03-27 06:46:06', 1),
(198, 'krajeshk', '2026-03-27 10:49:17', 1),
(199, '14140', '2026-03-27 12:44:17', 1),
(200, 'krajeshk', '2026-03-27 13:32:21', 1),
(201, 'krajeshk', '2026-03-27 14:44:21', 1),
(202, 'krajeshk', '2026-03-27 14:51:23', 1),
(203, 'krajeshk', '2026-03-27 16:36:06', 1),
(204, 'krajeshk', '2026-03-27 18:25:06', 1),
(205, '14341', '2026-03-28 10:58:30', 1),
(206, '14341', '2026-03-28 11:49:35', 1),
(207, '60100', '2026-03-28 15:10:20', 1),
(208, 'krajeshk', '2026-03-28 17:03:42', 1),
(209, 'krajeshk', '2026-03-28 18:57:58', 1),
(210, '63300', '2026-03-29 12:13:22', 1),
(211, '63300', '2026-03-29 12:13:23', 1),
(212, '14140', '2026-03-30 11:52:46', 1),
(213, 'krajeshk', '2026-03-30 12:26:05', 1),
(214, 'krajeshk', '2026-03-30 12:28:26', 1),
(215, '64000', '2026-03-30 12:29:08', 1),
(216, 'krajeshk', '2026-03-30 12:29:16', 1),
(217, 'krajeshk', '2026-03-30 12:36:20', 1),
(218, 'krajeshk', '2026-03-30 12:37:19', 1),
(219, 'krajeshk', '2026-03-30 12:37:47', 1),
(220, '64000', '2026-03-30 12:40:51', 1),
(221, '14337', '2026-03-30 13:20:51', 1),
(222, '63300', '2026-03-30 13:21:19', 1),
(223, '81000', '2026-03-30 13:23:19', 1),
(224, '81000', '2026-03-30 13:23:55', 1),
(225, 'krajeshk', '2026-03-30 13:24:21', 1),
(226, '63300', '2026-03-30 13:26:58', 1),
(227, 'krajeshk', '2026-03-30 13:29:21', 1),
(228, '81000', '2026-03-30 13:30:05', 1),
(229, '63300', '2026-03-30 13:31:15', 1),
(230, '14140', '2026-03-30 14:49:02', 1),
(231, 'krajeshk', '2026-03-30 14:49:21', 1),
(232, '14140', '2026-03-30 14:51:48', 1),
(233, 'krajeshk', '2026-03-30 15:12:21', 1),
(234, 'krajeshk', '2026-03-30 15:17:35', 1),
(235, 'krajeshk', '2026-03-30 15:37:34', 1),
(236, 'krajeshk', '2026-03-30 15:37:58', 1),
(237, '10000', '2026-03-30 15:38:34', 1),
(238, 'krajeshk', '2026-03-30 15:44:21', 1),
(239, '10000', '2026-03-30 16:19:49', 1),
(240, 'krajeshk', '2026-03-30 16:21:57', 1),
(241, '14337', '2026-03-30 16:22:37', 1),
(242, 'krajeshk', '2026-03-30 16:35:13', 1),
(243, 'krajeshk', '2026-03-30 17:09:55', 1),
(244, 'krajeshk', '2026-03-30 17:14:27', 1),
(245, '14307', '2026-03-30 17:24:14', 1),
(246, '14341', '2026-03-30 18:08:39', 1),
(247, '14140', '2026-03-30 18:09:05', 1),
(248, '14337', '2026-03-30 18:10:00', 1),
(249, '14348', '2026-03-30 18:10:10', 1),
(250, '14341', '2026-03-30 18:11:47', 1),
(251, '14348', '2026-03-30 18:12:30', 1),
(252, 'krajeshk', '2026-03-30 18:17:12', 1),
(253, '14348', '2026-03-30 18:18:23', 1),
(254, '10000', '2026-03-30 18:18:57', 1),
(255, '14348', '2026-03-30 18:19:37', 1),
(256, '14337', '2026-03-30 18:20:12', 1),
(257, 'krajeshk', '2026-03-30 18:20:41', 1),
(258, '14348', '2026-03-30 18:22:38', 1),
(259, 'krajeshk', '2026-03-30 18:29:25', 1),
(260, '14348', '2026-03-30 18:36:48', 1),
(261, '16000', '2026-03-30 18:48:04', 1),
(262, '10000', '2026-03-31 10:40:21', 1),
(263, '14307', '2026-03-31 15:08:47', 1),
(264, '14341', '2026-03-31 16:06:49', 1),
(265, 'krajeshk', '2026-03-31 17:40:45', 1),
(266, '16000', '2026-03-31 18:02:07', 1),
(267, '16000', '2026-03-31 18:04:03', 1),
(268, 'krajeshk', '2026-03-31 18:04:29', 1),
(269, 'krajeshk', '2026-03-31 18:13:09', 1),
(270, '16000', '2026-03-31 18:23:42', 1),
(271, 'krajeshk', '2026-03-31 18:43:37', 1),
(272, 'krajeshk', '2026-03-31 19:24:28', 1),
(273, '14341', '2026-04-01 12:09:28', 1),
(274, '60100', '2026-04-01 13:04:39', 1),
(275, '16000', '2026-04-01 16:07:58', 1),
(276, 'krajeshk', '2026-04-01 17:07:02', 1),
(277, '14341', '2026-04-01 18:02:35', 1),
(278, '16000', '2026-04-02 15:48:34', 1),
(279, 'sagarika.s@kinfomedia.com', '2026-04-02 18:46:21', 1),
(280, 'krajeshk', '2026-04-03 10:44:14', 1),
(281, 'krajeshk', '2026-04-03 12:14:55', 1),
(282, 'sagarika.s@kinfomedia.com', '2026-04-03 13:46:52', 1),
(283, 'sagarika.s@kinfomedia.com', '2026-04-03 14:41:21', 1),
(284, 'krajeshk@k-seva.com', '2026-04-03 15:04:16', 1),
(285, 'finance@k-seva.com', '2026-04-03 15:21:48', 1),
(286, 'finance@k-seva.com', '2026-04-03 16:10:20', 1),
(287, 'finance@kfinone.com', '2026-04-03 18:52:58', 1),
(288, 'finance@k-seva.com', '2026-04-03 18:59:34', 1),
(289, 'sagarika.s@kinfomedia.com', '2026-04-04 10:21:46', 1),
(290, 'sagarika.s@kinfomedia.com', '2026-04-04 11:20:53', 1),
(291, 'sagarika.s@kinfomedia.com', '2026-04-04 12:04:04', 1),
(292, 'hr@kurakulas.com', '2026-04-06 11:31:06', 1),
(293, '10000', '2026-04-06 12:06:55', 1),
(294, 'sagarika.s@kinfomedia.com', '2026-04-06 12:58:49', 1),
(295, '10000', '2026-04-06 13:02:28', 1),
(296, 'sagarika.s@kinfomedia.com', '2026-04-06 14:51:42', 1),
(297, '10000', '2026-04-06 15:46:24', 1),
(298, 'krajeshk', '2026-04-06 16:22:28', 1),
(299, 'sagarika.s@kinfomedia.com', '2026-04-06 17:26:09', 1),
(300, 'finance@kfinone.com', '2026-04-06 17:47:27', 1),
(301, 'finance@kfinone.com', '2026-04-06 18:47:40', 1),
(302, 'finance@kfinone.com', '2026-04-07 12:18:51', 1),
(303, 'krajeshk@kurakulas.com', '2026-04-07 19:39:35', 1),
(304, 'finance@kfinone.com', '2026-04-08 12:29:22', 1),
(305, 'krajeshk@kurakulas.com', '2026-04-08 12:31:17', 1),
(306, 'finance@k-seva.com', '2026-04-08 12:40:32', 1),
(307, 'finance@k-seva.com', '2026-04-08 13:40:22', 1),
(308, 'finance@kfinone.com', '2026-04-08 15:53:43', 1),
(309, 'finance@kfinone.com', '2026-04-09 10:42:06', 1),
(310, 'finance@kfinone.com', '2026-04-09 16:38:25', 1),
(311, 'krajeshk@kurakulas.com', '2026-04-10 17:42:46', 1),
(312, 'finance@kfinone.com', '2026-04-11 12:58:09', 1),
(313, 'finance@kfinone.com', '2026-04-17 11:52:08', 1),
(314, 'finance@kfinone.com', '2026-04-17 17:38:29', 1),
(315, 'finance@kfinone.com', '2026-04-18 11:05:20', 1),
(316, '10000', '2026-04-18 15:35:11', 1),
(317, 'krajeshk@kurakulas.com', '2026-04-22 12:09:18', 1),
(318, 'lakshmi.r@kfinone.com', '2026-04-22 15:38:42', 1),
(319, 'krajeshk@kurakulas.com', '2026-04-22 15:56:29', 1),
(320, 'lakshmi.r@kfinone.com', '2026-04-22 16:28:36', 1),
(321, 'lakshmi.r@kfinone.com', '2026-04-22 17:26:38', 1),
(322, 'krajeshk', '2026-04-22 17:48:11', 1),
(323, 'lakshmi.r@kfinone.com', '2026-04-22 17:59:44', 1),
(324, 'divyavani.j@kurakulas.com', '2026-04-22 18:06:03', 1),
(325, 'lakshmi.r@kfinone.com', '2026-04-22 18:12:39', 1),
(326, 'krajeshk', '2026-04-22 18:42:58', 1),
(327, 'lakshmi.r@kfinone.com', '2026-04-23 10:30:15', 1),
(328, 'lakshmi.r@kfinone.com', '2026-04-23 10:32:40', 1),
(329, 'finance@kfinone.com', '2026-04-23 10:36:51', 1),
(330, 'lakshmi.r@kfinone.com', '2026-04-23 11:22:27', 1),
(331, 'lakshmi.r@kfinone.com', '2026-04-23 11:26:17', 1),
(332, 'lakshmi.r@kfinone.com', '2026-04-23 11:32:54', 1),
(333, 'venkateswararao.b@kurakulas.com', '2026-04-23 11:39:03', 1),
(334, 'lakshmi.r@kfinone.com', '2026-04-23 11:41:12', 1),
(335, 'finance@kfinone.com', '2026-04-23 11:57:13', 1),
(336, 'hr@kurakulas.com', '2026-04-23 12:07:11', 1),
(337, 'lakshmi.r@kfinone.com', '2026-04-23 12:10:33', 1),
(338, 'finance@k-seva.com', '2026-04-23 15:09:30', 1),
(339, 'lakshmi.r@kfinone.com', '2026-04-23 15:21:03', 1),
(340, 'finance@k-seva.com', '2026-04-23 15:55:17', 1),
(341, 'lakshmi.r@kfinone.com', '2026-04-23 15:57:20', 1),
(342, 'finance@k-seva.com', '2026-04-23 16:13:38', 1),
(343, 'lakshmi.r@kfinone.com', '2026-04-23 16:14:31', 1),
(344, 'lakshmi.r@kfinone.com', '2026-04-23 16:29:22', 1),
(345, 'lakshmi.r@kfinone.com', '2026-04-23 17:08:34', 1),
(346, 'lakshmi.r@kfinone.com', '2026-04-23 17:14:04', 1),
(347, 'lakshmi.r@kfinone.com', '2026-04-23 17:17:16', 1),
(348, 'manuvardhan.s@k-seva.com', '2026-04-23 17:33:48', 1),
(349, 'lakshmi.r@kfinone.com', '2026-04-23 17:49:36', 1),
(350, 'finance@k-seva.com', '2026-04-23 18:27:28', 1),
(351, 'lakshmi.r@kfinone.com', '2026-04-24 12:58:22', 1),
(352, 'krajeshk', '2026-04-24 12:58:36', 1),
(353, 'krajeshk', '2026-05-07 19:01:39', 1),
(354, 'krajeshk', '2026-05-07 19:40:47', 1),
(355, 'krajeshk', '2026-05-07 20:15:28', 1),
(356, '14140', '2026-05-08 11:11:48', 1),
(357, 'krajeshk', '2026-05-08 11:38:45', 1),
(358, 'krajeshk', '2026-05-08 12:33:47', 1),
(359, 'krajeshk', '2026-05-08 16:20:41', 1),
(360, 'krajeshk', '2026-05-08 16:48:03', 1),
(361, 'krajeshk', '2026-05-08 16:56:52', 1),
(362, 'krajeshk', '2026-05-08 17:32:16', 1),
(363, 'krajeshk', '2026-05-08 18:17:43', 1),
(364, 'krajeshk', '2026-05-09 12:35:42', 1),
(365, '10000', '2026-05-09 15:33:48', 1),
(366, 'krajeshk', '2026-05-09 15:44:16', 1),
(367, 'krajeshk', '2026-05-09 20:11:35', 1),
(368, 'krajeshk', '2026-05-10 16:12:33', 1),
(369, 'krajeshk', '2026-05-10 19:52:45', 1),
(370, '14140', '2026-05-11 10:20:43', 1),
(371, 'krajeshk', '2026-05-11 17:41:47', 1),
(372, 'krajeshk', '2026-05-11 17:56:13', 1),
(373, '14140', '2026-05-12 15:30:47', 1),
(374, 'krajeshk', '2026-05-12 17:51:21', 1),
(375, '14140', '2026-05-13 10:47:30', 1),
(376, 'krajeshk', '2026-05-13 13:45:53', 1),
(377, '14307', '2026-05-13 17:13:13', 1),
(378, '14307', '2026-05-13 17:20:03', 1),
(379, '10000', '2026-05-13 17:59:30', 1),
(380, 'krajeshk', '2026-05-13 18:00:31', 1),
(381, '14318', '2026-05-13 18:12:31', 1),
(382, '14318', '2026-05-13 18:15:39', 1),
(383, '14318', '2026-05-13 18:21:43', 1),
(384, 'krajeshk', '2026-05-13 18:24:44', 1),
(385, 'krajeshk', '2026-05-13 18:31:01', 1),
(386, '99000', '2026-05-13 18:35:48', 1),
(387, '10002', '2026-05-13 18:36:59', 1),
(388, '10002', '2026-05-13 18:47:43', 1),
(389, 'krajeshk', '2026-05-13 18:54:20', 1),
(390, '10000', '2026-05-13 18:55:03', 1),
(391, 'krajeshk', '2026-05-13 19:34:53', 1),
(392, '14307', '2026-05-13 19:36:59', 1),
(393, '10000', '2026-05-13 19:38:59', 1),
(394, 'krajeshk', '2026-05-13 19:56:30', 1),
(395, '10000', '2026-05-13 22:19:45', 1),
(396, '10002', '2026-05-13 22:28:57', 1),
(397, '10002', '2026-05-13 22:34:20', 1),
(398, '10002', '2026-05-13 22:37:50', 1),
(399, '10000', '2026-05-13 22:38:20', 1),
(400, '14140', '2026-05-14 10:44:15', 1),
(401, 'krajeshk', '2026-05-14 12:12:50', 1),
(402, 'krajeshk', '2026-05-14 13:30:04', 1),
(403, 'krajeshk', '2026-05-14 13:35:37', 1),
(404, 'krajeshk', '2026-05-14 15:53:46', 1),
(405, 'krajeshk', '2026-05-15 11:19:39', 1),
(406, 'krajeshk', '2026-05-15 12:48:49', 1),
(407, 'krajeshk', '2026-05-15 16:00:01', 1),
(408, 'krajeshk', '2026-05-16 13:42:54', 1),
(409, 'krajeshk', '2026-05-16 20:47:55', 1),
(410, 'krajeshk', '2026-05-17 15:15:30', 1),
(411, '14140', '2026-05-18 12:11:06', 1),
(412, 'krajeshk', '2026-05-18 16:32:42', 1),
(413, '14140', '2026-05-19 16:16:17', 1),
(414, '14140', '2026-05-20 12:04:08', 1),
(415, 'krajeshk', '2026-05-20 12:34:01', 1),
(416, '63300', '2026-05-21 08:23:07', 1),
(417, '14140', '2026-05-21 10:47:49', 1),
(418, '14307', '2026-05-21 15:45:24', 1),
(419, 'krajeshk', '2026-05-21 16:06:19', 1),
(420, '14140', '2026-05-21 18:51:04', 1),
(421, 'krajeshk', '2026-05-22 15:02:46', 1),
(422, '14140', '2026-05-22 17:46:19', 1),
(423, 'krajeshk', '2026-05-22 19:11:18', 1),
(424, '14140', '2026-05-23 11:31:19', 1),
(425, '63300', '2026-05-25 14:38:21', 1),
(426, '14140', '2026-05-25 14:42:08', 1),
(427, '63300', '2026-05-25 14:44:22', 1),
(428, '63300', '2026-05-25 14:47:54', 1),
(429, '14140', '2026-05-25 14:50:10', 1),
(430, '63300', '2026-05-25 17:53:20', 1),
(431, '14140', '2026-05-26 11:25:34', 1),
(432, '14140', '2026-05-27 10:55:54', 1),
(433, 'krajeshk', '2026-05-28 10:22:32', 1),
(434, 'krajeshk', '2026-05-28 12:24:57', 1),
(435, '14140', '2026-05-28 12:31:24', 1),
(436, '14140', '2026-05-29 10:31:20', 1),
(437, 'krajeshk', '2026-05-29 17:15:16', 1),
(438, '14140', '2026-05-29 18:21:55', 1),
(439, '14140', '2026-05-30 12:13:21', 1),
(440, 'krajeshk', '2026-05-30 17:50:55', 1),
(441, 'krajeshk', '2026-05-31 11:35:16', 1),
(442, 'krajeshk', '2026-06-01 11:27:26', 1),
(443, 'krajeshk', '2026-06-01 15:42:08', 1),
(444, '14140', '2026-06-01 16:11:49', 1),
(445, '14140', '2026-06-02 10:31:26', 1),
(446, 'krajeshk', '2026-06-02 12:32:24', 1),
(447, 'krajeshk', '2026-06-02 12:49:21', 1),
(448, '14140', '2026-06-03 11:45:21', 1),
(449, 'krajeshk', '2026-06-03 17:52:31', 1),
(450, '14140', '2026-06-04 10:12:18', 1),
(451, 'krajeshk', '2026-06-04 18:54:16', 1),
(452, '14140', '2026-06-05 11:27:51', 1),
(453, 'krajeshk', '2026-06-05 17:55:48', 1),
(454, '14140', '2026-06-06 10:58:11', 1),
(455, 'krajeshk', '2026-06-06 17:38:28', 1),
(456, '14140', '2026-06-08 12:28:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news_reviews`
--

CREATE TABLE `tbl_news_reviews` (
  `id` int NOT NULL,
  `news_id` int NOT NULL,
  `reviewer_name` varchar(100) NOT NULL,
  `reviewer_email` varchar(100) DEFAULT NULL,
  `rating` int NOT NULL,
  `review_text` text NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_online_enquiries`
--

CREATE TABLE `tbl_online_enquiries` (
  `id` int NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `service_category` varchar(200) DEFAULT NULL,
  `comment` text,
  `page_name` varchar(100) DEFAULT NULL,
  `dept_email` varchar(100) DEFAULT NULL,
  `dept_mob` varchar(20) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_online_enquiries`
--

INSERT INTO `tbl_online_enquiries` (`id`, `full_name`, `email_id`, `contact_no`, `service_category`, `comment`, `page_name`, `dept_email`, `dept_mob`, `token`, `created_at`) VALUES
(1, 'example shellagi', 'exampleshellagi@gmail.com', '8765478967', 'stock_broking', 'aa', 'Home Popup', 'support@k-seva.com', '8885545255', '09X6MOzpipINpumGv7V65Mc+Kx1S1UmUV0BqJeqGWBE=', '2026-05-02 08:41:21'),
(2, 'Nitya', 'nitya@gmail.com', '9666666666', 'money_transfer', '', 'Money Transfer', 'support@k-seva.com', '8885545255', 'f9fdfad93d76de9e0ee472bae1f08662', '2026-05-04 12:15:48'),
(3, 'sagarika', 'exampleshellagi@gmail.com', '7888888888', 'financial_services', '', 'Financial Services', 'support@k-seva.com', '8885545255', '2e215afb1cb35c1ad70abd7bb3be78d1', '2026-05-04 13:21:07'),
(4, 'Nitya', 'nitya@gmail.com', '7888888888', 'axis_bc', 'aaaaaaa', 'Axis Bank BC', 'support@k-seva.com', '8885545255', '05940a4e9475363fc049d6694157e78f', '2026-05-05 05:45:45'),
(5, 'megha', 'megha@gmail.com', '9666666666', 'nsdl_bc', '', 'NSDL Payments Bank BC', 'support@k-seva.com', '8885545255', 'c5dfe3686c7b0361c55d5bae2c1edbae', '2026-05-05 05:46:37'),
(6, 'deepa', 'deepa@gmail.com', '7888888888', 'stock_broking', 'dddddd', 'Stock / Share Broking Trading', 'support@k-seva.com', '8885545255', '1ec67a6337c8a4a3b348943d653b0de5', '2026-05-05 07:35:22'),
(7, 'sanya', 'sanya@gmail.com', '7888888888', 'digital_gold', '', 'Digital & Physical Gold', 'support@k-seva.com', '8885545255', 'd6c574f88a8fa2f2c2079885b322d39e', '2026-05-05 08:38:42'),
(8, 'manu', 'manu@gmail.com', '9666666666', 'aadhar_atm', '', 'Aadhar ATM', 'support@k-seva.com', '8885545255', 'd01d3bac4acee3ffd45a4256910e29d4', '2026-05-05 10:07:27'),
(9, 'Ram', 'ram@gmail.com', '9666666666', 'tata_atm', 'aaa', 'TATA Indicash ATM', 'support@k-seva.com', '8885545255', 'de6d6af48573e9135c3382d28bbe9f5c', '2026-05-05 10:49:01'),
(10, 'Babita', 'babita@gmail.com', '7888888888', 'micro_atm', '', 'Micro ATM', 'support@k-seva.com', '8885545255', '19ae6fa1a4f0d1bec4944c82c30593f8', '2026-05-05 11:09:46'),
(11, 'Babita', 'babita@gmail.com', '7888888888', 'micro_atm', '', 'Micro ATM', 'support@k-seva.com', '8885545255', 'acdb400b2db2b5867a0e6a22fa609780', '2026-05-05 11:15:15'),
(12, 'radha', 'radha@gmail.com', '9999999999', 'cash_at_pos', 'aaa', 'Cash@POS', 'support@k-seva.com', '8885545255', '8e251288524c6e9a839874314b88dd43', '2026-05-05 11:42:39'),
(13, 'Maya', 'maya@gmail.com', '7888888888', 'income_tax', '', 'Income Tax Services', 'support@k-seva.com', '8885545255', '1db78a65d6a3adab4efc1f9f3bc74550', '2026-05-06 07:07:59'),
(14, 'Maya', 'maya@gmail.com', '7888888888', 'income_tax', '', 'Income Tax Services', 'support@k-seva.com', '8885545255', 'b6e5f9a46df19de6dd6f5a8024670761', '2026-05-06 07:08:54'),
(15, 'Maya', 'maya@gmail.com', '7888888888', 'income_tax', '', 'Income Tax Services', 'support@k-seva.com', '8885545255', '1ce97feec88aad2bcbf6325290d10f8a', '2026-05-06 07:11:56'),
(16, 'chetan', 'chetan@gmail.com', '9666666666', 'company_compliance', 'hiii', 'Company Compliance Service', 'support@k-seva.com', '8885545255', 'aa4a0f780d080b81311e690d167629b4', '2026-05-06 09:29:12'),
(17, 'ramu', 'ramu@gmail.com', '9999999999', 'llp_compliance', '', 'LLP Compliances', 'support@k-seva.com', '8885545255', 'ee49d50eda5ba388c65933529bd6b555', '2026-05-06 10:58:34'),
(18, 'tanya', 'tanya@gmail.com', '9666666666', 'intellectual_property', '', 'Intellectual Property Right', 'support@k-seva.com', '8885545255', '645118554cd45b312b69ec23fc70e986', '2026-05-06 11:40:18'),
(19, 'tanya', 'tanya@gmail.com', '9666666666', 'intellectual_property', '', 'Intellectual Property Right', 'support@k-seva.com', '8885545255', 'dead15be5079217a39e7658902802232', '2026-05-06 11:46:24'),
(20, 'Nitin', 'nitin@gmail.com', '7888888888', 'iso_certification', '', 'ISO Certification', 'support@k-seva.com', '8885545255', '9170dbc91c52c5f05046e09b4aca9a70', '2026-05-06 12:35:40'),
(21, 'Preeti', 'preeti@gmail.com', '7888888888', 'digital_signature', '', 'Digital Signature', 'support@k-seva.com', '8885545255', '4d04b729facd994982e4d3cfa3a02d0b', '2026-05-06 12:58:26'),
(22, 'bhaskar', 'mailx5492@gmail.com', '8367738868', 'financial_services', 'testing', 'Home Popup', 'support@k-seva.com', '8885545255', '09X6MOzpipINpumGv7V65Mc+Kx1S1UmUV0BqJeqGWBE=', '2026-05-25 06:55:55'),
(23, 'gg', 'surya@gmail.com', '6851221458', 'money_transfer', 'bvb', 'Money Transfer', 'support@k-seva.com', '8885545255', 'd84ce360528519bd372d019369062611', '2026-05-25 07:04:55'),
(24, 'matha', 'vamsi@hotx.com', '6301202201', 'loan', 'testing tezam', 'contact', NULL, NULL, NULL, '2026-05-25 10:04:35'),
(25, 'surya', 'swathi@gmail.com', '6301201112', 'money_transfer', 'test', 'Money Transfer', 'support@k-seva.com', '8885545255', '988c88e48e630313472e90b29df0994f', '2026-05-25 10:13:27'),
(26, 'fg', 'sdf@gmail.com', '6301210213', 'money_transfer', 'zdfestw', 'Money Transfer', 'support@k-seva.com', '8885545255', '9000986d048221a3fd640a0cc93763a4', '2026-05-25 10:14:26'),
(27, 'reeeeeeeeeee', 'ewrrrrrrrr@gmail.com', '7888888888', 'money_transfer', 'wssss', 'Money Transfer', 'support@k-seva.com', '8885545255', '8a3ce7bf11b4658755873c546cd354b2', '2026-05-25 12:59:15'),
(28, 'KULDEEP SINGH', 'kuldeep6640@gmail.com', '9873274403', 'axis_bc', '', 'Axis Bank BC', 'support@k-seva.com', '8885545255', 'a404a4ac4b7acaafe7aa691a7f50fc75', '2026-05-30 12:03:10'),
(29, 'SAHINA AHMED', 'pnbcsp008@gmail.com', '9394906575', 'axis_bc', 'APPLY FOR Axis Bank BC', 'Axis Bank BC', 'support@k-seva.com', '8885545255', 'c1177843a11fc5f73fa94d436823dd65', '2026-06-03 11:55:52'),
(30, 'Tomas Bussell', 'domains@search-k-seva.com', '7836761500', 'aadhar_correction', 'Greetings\r\n\r\nSubmit k-seva.com in GoogleSearchIndex to be visible in web search results!\r\n\r\nInsert k-seva.com now: https://searchregister.net', 'contact', NULL, NULL, NULL, '2026-06-05 17:54:21'),
(31, 'Abhishek Shendge', 'nakshatrashoppee@gmail.com', '9975708666', 'idfc_fastag', 'Want Fasttag Agency', 'IDFC FASTag Agency', 'support@k-seva.com', '8885545255', 'ac2eec4ea70720295b91490d22734bbd', '2026-06-07 12:11:03'),
(32, 'peddiraju Yerubandi', 'peddiraju.yerubandi99@gmail.com', '7780280192', 'idfc_fastag', '', 'IDFC FASTag Agency', 'support@k-seva.com', '8885545255', 'd25c576a45e6b71694be3a9606934e39', '2026-06-08 17:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_otp`
--

CREATE TABLE `tbl_otp` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `created_at` datetime NOT NULL,
  `expires_at` datetime NOT NULL,
  `is_used` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_otp`
--

INSERT INTO `tbl_otp` (`id`, `email`, `otp`, `created_at`, `expires_at`, `is_used`) VALUES
(4, 'krajeshk@k-seva.com', '345636', '2026-04-03 15:03:22', '2026-04-03 15:13:22', 1),
(14, 'prasad.l@k-seva.com', '290035', '2026-04-04 10:50:45', '2026-04-04 11:00:45', 0),
(21, 'sagarika.s@kinfomedia.com', '410946', '2026-04-06 17:25:34', '2026-04-06 17:35:34', 1),
(35, 'tnetash@gmail.com', '830245', '2026-04-09 09:57:00', '2026-04-09 10:07:00', 0),
(40, 'swarnalatha.e@kurakulas.com', '997670', '2026-04-10 16:42:29', '2026-04-10 16:52:29', 0),
(56, 'divyavani.j@kurakulas.com', '175418', '2026-04-22 18:04:31', '2026-04-22 18:14:31', 1),
(59, 'krajeshk@kurakulas.com', '598219', '2026-04-23 10:31:23', '2026-04-23 10:41:23', 0),
(65, 'venkateswararao.b@kurakulas.com', '251258', '2026-04-23 11:38:40', '2026-04-23 11:48:40', 1),
(68, 'hr@kurakulas.com', '988432', '2026-04-23 12:06:48', '2026-04-23 12:16:48', 1),
(75, 'finance@kfinone.com', '629313', '2026-04-23 15:56:31', '2026-04-23 16:06:31', 0),
(84, 'manuvardhan.s@k-seva.com', '334439', '2026-04-23 17:33:30', '2026-04-23 17:43:30', 1),
(85, 'accounts@k-seva.com', '616218', '2026-04-23 17:48:32', '2026-04-23 17:58:32', 0),
(87, 'finance@k-seva.com', '950188', '2026-04-23 18:27:09', '2026-04-23 18:37:09', 1),
(88, 'lakshmi.r@kfinone.com', '844044', '2026-04-24 12:57:59', '2026-04-24 13:07:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partner_users`
--

CREATE TABLE `tbl_partner_users` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alias_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `firstName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `birth_date` date NOT NULL,
  `Phone_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alternative_mobile_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branch_state_name_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branch_location_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `bank_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `account_type_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `office_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `residential_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `aadhaar_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pan_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `account_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ifsc_code` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `rank` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `reportingTo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `partner_type_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `department_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `designation_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pan_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `aadhaar_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_general_ci NOT NULL,
  `bankproof_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `work_icons` text COLLATE utf8mb4_general_ci NOT NULL,
  `payout_icons` text COLLATE utf8mb4_general_ci NOT NULL,
  `ref_name_1` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_relation_1` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_mobile_1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_address_1` text COLLATE utf8mb4_general_ci NOT NULL,
  `ref_name_2` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_relation_2` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_mobile_2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_address_2` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_user` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `createdBy` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_banks`
--

CREATE TABLE `tbl_payment_banks` (
  `id` int NOT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `account_number` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ifsc_code` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `scanner_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'default.png',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT '1' COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_payment_banks`
--

INSERT INTO `tbl_payment_banks` (`id`, `account_name`, `account_number`, `bank_name`, `branch_name`, `ifsc_code`, `scanner_image`, `created_at`, `updated_at`, `status`) VALUES
(1, 'KURAKULAS STAFFING SOLUTIONS PVT LTD', '50200095650327', 'HDFC BANK', 'MADHAPUR', 'HDFC0004277', '1775632197_WhatsApp Image 2026-04-08 at 12.38.05 PM (1).jpeg', '2026-04-08 12:39:57', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pincode`
--

CREATE TABLE `tbl_pincode` (
  `id` int NOT NULL,
  `pincode` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `state_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `location_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sub_location_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pincode`
--

INSERT INTO `tbl_pincode` (`id`, `pincode`, `state_id`, `location_id`, `sub_location_id`, `status`, `created_at`, `updated_at`) VALUES
(2, '522084', '3', '3', '2', 1, '2025-04-11 18:43:18', '0000-00-00 00:00:00'),
(6, '504293', '4', '31', '13', 1, '2025-05-24 11:57:06', '0000-00-00 00:00:00'),
(7, '504001', '4', '31', '5', 1, '2025-05-24 11:57:25', '0000-00-00 00:00:00'),
(8, '504251', '4', '31', '11', 1, '2025-05-24 11:57:44', '0000-00-00 00:00:00'),
(9, '504273', '4', '31', '9', 1, '2025-05-24 11:58:00', '0000-00-00 00:00:00'),
(10, '504251', '4', '31', '12', 1, '2025-05-24 11:58:18', '0000-00-00 00:00:00'),
(11, '504309', '4', '31', '14', 1, '2025-05-24 11:59:14', '0000-00-00 00:00:00'),
(12, '504201', '4', '31', '15', 1, '2025-05-24 11:59:30', '0000-00-00 00:00:00'),
(13, '504201', '4', '31', '16', 1, '2025-05-24 11:59:50', '0000-00-00 00:00:00'),
(14, '504299', '4', '31', '17', 1, '2025-05-24 12:00:12', '0000-00-00 00:00:00'),
(15, '504313', '4', '31', '18', 1, '2025-05-24 12:00:33', '0000-00-00 00:00:00'),
(16, '504205', '4', '31', '19', 1, '2025-05-24 12:00:51', '0000-00-00 00:00:00'),
(17, '504299', '4', '31', '20', 1, '2025-05-24 12:01:20', '0000-00-00 00:00:00'),
(18, '504273', '4', '31', '10', 1, '2025-05-24 12:02:03', '0000-00-00 00:00:00'),
(19, '504001', '4', '31', '7', 1, '2025-05-24 12:02:19', '0000-00-00 00:00:00'),
(20, '504103', '4', '31', '23', 1, '2025-05-24 12:03:39', '0000-00-00 00:00:00'),
(21, '504308', '4', '31', '21', 1, '2025-05-24 12:03:57', '0000-00-00 00:00:00'),
(22, '504311', '4', '31', '22', 1, '2025-05-24 12:04:15', '0000-00-00 00:00:00'),
(23, '504001', '4', '31', '8', 1, '2025-05-24 12:04:36', '0000-00-00 00:00:00'),
(24, '504001', '4', '31', '6', 1, '2025-05-24 12:04:50', '0000-00-00 00:00:00'),
(25, '576235', '4', '32', '38', 1, '2025-05-24 14:54:52', '0000-00-00 00:00:00'),
(26, '576226', '4', '32', '29', 1, '2025-05-24 14:55:16', '0000-00-00 00:00:00'),
(27, '576237', '4', '32', '40', 1, '2025-05-24 14:55:45', '0000-00-00 00:00:00'),
(28, '576236', '4', '32', '39', 1, '2025-05-24 14:56:01', '0000-00-00 00:00:00'),
(29, '802925', '4', '32', '28', 1, '2025-05-24 14:56:12', '0000-00-00 00:00:00'),
(30, '576225', '4', '32', '42', 1, '2025-05-24 14:56:29', '0000-00-00 00:00:00'),
(31, '576227', '4', '32', '30', 1, '2025-05-24 14:56:44', '0000-00-00 00:00:00'),
(32, '576238', '4', '32', '41', 1, '2025-05-24 14:57:00', '0000-00-00 00:00:00'),
(33, '576233', '4', '32', '32', 1, '2025-05-24 14:57:14', '0000-00-00 00:00:00'),
(34, '576230', '4', '32', '33', 1, '2025-05-24 14:57:28', '0000-00-00 00:00:00'),
(35, '576222', '4', '32', '25', 1, '2025-05-24 14:57:47', '0000-00-00 00:00:00'),
(36, '576232', '4', '32', '35', 1, '2025-05-24 14:58:07', '0000-00-00 00:00:00'),
(37, '576224', '4', '32', '27', 1, '2025-05-24 14:58:37', '0000-00-00 00:00:00'),
(38, '576231', '4', '32', '34', 1, '2025-05-24 14:58:56', '0000-00-00 00:00:00'),
(39, '576234', '4', '32', '37', 1, '2025-05-24 14:59:11', '0000-00-00 00:00:00'),
(40, '576221', '4', '32', '24', 1, '2025-05-24 14:59:29', '0000-00-00 00:00:00'),
(41, '576228', '4', '32', '31', 1, '2025-05-24 14:59:41', '0000-00-00 00:00:00'),
(42, '576223', '4', '32', '26', 1, '2025-05-24 15:00:06', '0000-00-00 00:00:00'),
(43, '509352', '4', '32', '43', 1, '2025-05-24 15:02:31', '0000-00-00 00:00:00'),
(44, '506005', '4', '33', '57', 1, '2025-05-24 15:53:55', '0000-00-00 00:00:00'),
(45, '506371', '4', '33', '68', 1, '2025-05-24 15:56:12', '0000-00-00 00:00:00'),
(46, '500040', '4', '35', '120', 1, '2025-05-26 12:51:55', '0000-00-00 00:00:00'),
(47, '500012', '4', '35', '122', 1, '2025-05-26 12:52:15', '0000-00-00 00:00:00'),
(48, '500078', '4', '35', '80', 1, '2025-05-26 12:52:33', '0000-00-00 00:00:00'),
(49, '500010', '4', '35', '81', 1, '2025-05-26 12:52:53', '0000-00-00 00:00:00'),
(50, '500044', '4', '35', '82', 1, '2025-05-26 12:53:10', '0000-00-00 00:00:00'),
(51, '500015', '4', '35', '84', 1, '2025-05-26 12:53:41', '0000-00-00 00:00:00'),
(52, '501301', '4', '35', '85', 1, '2025-05-26 12:54:04', '0000-00-00 00:00:00'),
(53, '501301', '4', '35', '86', 1, '2025-05-26 12:54:32', '0000-00-00 00:00:00'),
(54, '500040', '4', '35', '87', 1, '2025-05-26 12:55:02', '0000-00-00 00:00:00'),
(55, '500020', '4', '35', '88', 1, '2025-05-26 12:58:46', '0000-00-00 00:00:00'),
(56, '500058', '4', '35', '89', 1, '2025-05-26 13:00:34', '0000-00-00 00:00:00'),
(57, '500034', '4', '35', '90', 1, '2025-05-26 13:00:53', '0000-00-00 00:00:00'),
(58, '500027', '4', '35', '91', 1, '2025-05-26 13:01:11', '0000-00-00 00:00:00'),
(59, '500027', '4', '35', '91', 1, '2025-05-26 13:02:05', '0000-00-00 00:00:00'),
(60, '500012', '4', '35', '92', 1, '2025-05-26 13:02:23', '0000-00-00 00:00:00'),
(61, '500016', '4', '35', '94', 1, '2025-05-26 13:02:45', '0000-00-00 00:00:00'),
(62, '500003', '4', '35', '93', 1, '2025-05-26 13:03:12', '0000-00-00 00:00:00'),
(63, '501301', '4', '35', '95', 1, '2025-05-26 13:03:29', '0000-00-00 00:00:00'),
(64, '500011', '4', '35', '96', 1, '2025-05-26 13:03:47', '0000-00-00 00:00:00'),
(65, '500022', '4', '35', '97', 1, '2025-05-26 13:04:04', '0000-00-00 00:00:00'),
(66, '500050', '4', '35', '98', 1, '2025-05-26 13:05:13', '0000-00-00 00:00:00'),
(67, '501301', '4', '35', '99', 1, '2025-05-26 13:05:37', '0000-00-00 00:00:00'),
(68, '501301', '4', '35', '100', 1, '2025-05-26 13:07:29', '0000-00-00 00:00:00'),
(69, '500037', '4', '35', '101', 1, '2025-05-26 13:10:39', '0000-00-00 00:00:00'),
(70, '500081', '4', '35', '102', 1, '2025-05-26 13:12:29', '0000-00-00 00:00:00'),
(71, '500062', '4', '35', '103', 1, '2025-05-26 13:27:52', '0000-00-00 00:00:00'),
(72, '500062', '4', '35', '104', 1, '2025-05-26 15:15:53', '0000-00-00 00:00:00'),
(73, '500062', '4', '35', '104', 1, '2025-05-26 15:16:32', '0000-00-00 00:00:00'),
(74, '500018', '4', '35', '105', 1, '2025-05-26 15:17:16', '0000-00-00 00:00:00'),
(75, '500053', '4', '35', '106', 1, '2025-05-26 15:17:36', '0000-00-00 00:00:00'),
(76, '500096', '4', '35', '107', 1, '2025-05-26 15:17:57', '0000-00-00 00:00:00'),
(77, '500055', '4', '35', '108', 1, '2025-05-26 15:18:21', '0000-00-00 00:00:00'),
(78, '500001', '4', '35', '109', 1, '2025-05-26 15:18:45', '0000-00-00 00:00:00'),
(79, '500080', '4', '35', '110', 1, '2025-05-26 15:19:06', '0000-00-00 00:00:00'),
(80, '500008', '4', '35', '112', 1, '2025-05-26 15:19:32', '0000-00-00 00:00:00'),
(81, '500020', '4', '35', '111', 1, '2025-05-26 15:19:56', '0000-00-00 00:00:00'),
(82, '501401', '4', '35', '113', 1, '2025-05-26 15:20:19', '0000-00-00 00:00:00'),
(83, '500047', '4', '35', '114', 1, '2025-05-26 15:21:03', '0000-00-00 00:00:00'),
(84, '500029', '4', '35', '115', 1, '2025-05-26 15:21:24', '0000-00-00 00:00:00'),
(85, '500025', '4', '35', '116', 1, '2025-05-26 15:22:05', '0000-00-00 00:00:00'),
(86, '500001', '4', '35', '117', 1, '2025-05-26 15:22:31', '0000-00-00 00:00:00'),
(87, '500002', '4', '35', '118', 1, '2025-05-26 15:22:53', '0000-00-00 00:00:00'),
(88, '500015', '4', '35', '121', 1, '2025-05-26 15:23:18', '0000-00-00 00:00:00'),
(89, '500055', '4', '35', '119', 1, '2025-05-26 15:23:38', '0000-00-00 00:00:00'),
(90, '500085', '4', '35', '124', 1, '2025-05-26 15:24:01', '0000-00-00 00:00:00'),
(91, '500008', '4', '35', '125', 1, '2025-05-26 15:24:21', '0000-00-00 00:00:00'),
(92, '501301', '4', '35', '126', 1, '2025-05-26 15:28:56', '0000-00-00 00:00:00'),
(93, '501301', '4', '35', '127', 1, '2025-05-26 15:29:10', '0000-00-00 00:00:00'),
(94, '500004', '4', '35', '128', 1, '2025-05-26 15:29:30', '0000-00-00 00:00:00'),
(95, '500064', '4', '35', '129', 1, '2025-05-26 15:29:51', '0000-00-00 00:00:00'),
(96, '500072', '4', '35', '130', 1, '2025-05-26 15:30:11', '0000-00-00 00:00:00'),
(97, '500072', '4', '35', '131', 1, '2025-05-26 15:32:19', '0000-00-00 00:00:00'),
(98, '500062', '4', '35', '132', 1, '2025-05-26 15:33:25', '0000-00-00 00:00:00'),
(99, '500074', '4', '35', '133', 1, '2025-05-26 15:34:59', '0000-00-00 00:00:00'),
(100, '500017', '4', '35', '134', 1, '2025-05-26 15:35:34', '0000-00-00 00:00:00'),
(101, '500017', '4', '35', '135', 1, '2025-05-26 15:36:05', '0000-00-00 00:00:00'),
(102, '500008', '4', '35', '136', 1, '2025-05-26 15:36:31', '0000-00-00 00:00:00'),
(103, '500081', '4', '35', '137', 1, '2025-05-26 15:36:53', '0000-00-00 00:00:00'),
(104, '500036', '4', '35', '138', 1, '2025-05-26 15:37:44', '0000-00-00 00:00:00'),
(105, '500003', '4', '35', '139', 1, '2025-05-26 15:38:05', '0000-00-00 00:00:00'),
(106, '500049', '4', '35', '140', 1, '2025-05-26 15:38:25', '0000-00-00 00:00:00'),
(107, '500020', '4', '35', '141', 1, '2025-05-26 15:38:57', '0000-00-00 00:00:00'),
(108, '500044', '4', '35', '142', 1, '2025-05-26 15:39:41', '0000-00-00 00:00:00'),
(109, '500008', '4', '35', '143', 1, '2025-05-26 15:40:00', '0000-00-00 00:00:00'),
(110, '500029', '4', '35', '144', 1, '2025-05-26 15:40:26', '0000-00-00 00:00:00'),
(111, '500007', '4', '35', '145', 1, '2025-05-26 15:41:06', '0000-00-00 00:00:00'),
(112, '500036', '4', '35', '146', 1, '2025-05-26 15:42:04', '0000-00-00 00:00:00'),
(113, '500012', '4', '35', '147', 1, '2025-05-26 15:42:30', '0000-00-00 00:00:00'),
(114, '500025', '4', '35', '148', 1, '2025-05-26 15:44:22', '0000-00-00 00:00:00'),
(115, '500090', '4', '35', '149', 1, '2025-05-26 15:44:48', '0000-00-00 00:00:00'),
(116, '500041', '4', '35', '150', 1, '2025-05-26 15:45:14', '0000-00-00 00:00:00'),
(117, '501401', '4', '35', '151', 1, '2025-05-26 15:45:46', '0000-00-00 00:00:00'),
(118, '500056', '4', '35', '152', 1, '2025-05-26 15:46:08', '0000-00-00 00:00:00'),
(119, '500059', '4', '35', '153', 1, '2025-05-26 15:47:04', '0000-00-00 00:00:00'),
(120, '500018', '4', '35', '154', 1, '2025-05-26 15:47:23', '0000-00-00 00:00:00'),
(121, '500038', '4', '35', '155', 1, '2025-05-26 15:48:06', '0000-00-00 00:00:00'),
(122, '500059', '4', '35', '156', 1, '2025-05-26 15:48:22', '0000-00-00 00:00:00'),
(123, '500035', '4', '35', '157', 1, '2025-05-26 15:48:53', '0000-00-00 00:00:00'),
(124, '500003', '4', '35', '158', 1, '2025-05-26 15:49:15', '0000-00-00 00:00:00'),
(125, '500027', '4', '35', '161', 1, '2025-05-26 15:55:02', '0000-00-00 00:00:00'),
(126, '500015', '4', '35', '162', 1, '2025-05-26 15:55:15', '0000-00-00 00:00:00'),
(127, '500007', '4', '35', '163', 1, '2025-05-26 15:55:35', '0000-00-00 00:00:00'),
(128, '500008', '4', '35', '164', 1, '2025-05-26 15:55:57', '0000-00-00 00:00:00'),
(129, '500038', '4', '35', '165', 1, '2025-05-26 15:56:13', '0000-00-00 00:00:00'),
(130, '500044', '4', '35', '166', 1, '2025-05-26 15:56:28', '0000-00-00 00:00:00'),
(131, '501101', '4', '35', '168', 1, '2025-05-26 15:56:39', '0000-00-00 00:00:00'),
(132, '500045', '4', '35', '169', 1, '2025-05-26 15:56:51', '0000-00-00 00:00:00'),
(133, '506144', '4', '37', '170', 1, '2025-05-27 11:41:26', '0000-00-00 00:00:00'),
(134, '506145', '4', '37', '171', 1, '2025-05-27 11:41:56', '0000-00-00 00:00:00'),
(135, '506355', '4', '37', '172', 1, '2025-05-27 11:42:13', '0000-00-00 00:00:00'),
(136, '506172', '4', '37', '173', 1, '2025-05-27 11:42:32', '0000-00-00 00:00:00'),
(137, '506224', '4', '37', '174', 1, '2025-05-27 11:43:01', '0000-00-00 00:00:00'),
(138, '506221', '4', '37', '175', 1, '2025-05-27 11:43:32', '0000-00-00 00:00:00'),
(139, '506371', '4', '37', '176', 1, '2025-05-27 11:44:06', '0000-00-00 00:00:00'),
(140, '506367', '4', '37', '177', 1, '2025-05-27 11:49:53', '0000-00-00 00:00:00'),
(141, '506223', '4', '37', '178', 1, '2025-05-27 11:50:14', '0000-00-00 00:00:00'),
(142, '506224', '4', '37', '180', 1, '2025-05-27 11:50:37', '0000-00-00 00:00:00'),
(143, '506244', '4', '37', '181', 1, '2025-05-27 11:51:03', '0000-00-00 00:00:00'),
(144, '506344', '4', '37', '182', 1, '2025-05-27 11:52:12', '0000-00-00 00:00:00'),
(145, '506367', '4', '37', '183', 1, '2025-05-27 11:52:29', '0000-00-00 00:00:00'),
(146, '506367', '4', '37', '185', 1, '2025-05-27 11:52:47', '0000-00-00 00:00:00'),
(147, '506349', '4', '37', '186', 1, '2025-05-27 11:53:08', '0000-00-00 00:00:00'),
(148, '506172', '4', '37', '187', 1, '2025-05-27 11:53:25', '0000-00-00 00:00:00'),
(149, '506172', '4', '37', '188', 1, '2025-05-27 11:53:54', '0000-00-00 00:00:00'),
(150, '506345', '4', '37', '189', 1, '2025-05-27 11:54:10', '0000-00-00 00:00:00'),
(151, '506301', '4', '37', '190', 1, '2025-05-27 11:54:27', '0000-00-00 00:00:00'),
(152, '506356', '4', '37', '191', 1, '2025-05-27 11:54:43', '0000-00-00 00:00:00'),
(153, '506303', '4', '37', '192', 1, '2025-05-27 11:56:53', '0000-00-00 00:00:00'),
(154, '506168', '4', '37', '193', 1, '2025-05-27 11:57:15', '0000-00-00 00:00:00'),
(155, '506391', '4', '37', '194', 1, '2025-05-27 11:57:34', '0000-00-00 00:00:00'),
(156, '506145', '4', '37', '195', 1, '2025-05-27 11:57:49', '0000-00-00 00:00:00'),
(157, '506165', '4', '37', '196', 1, '2025-05-27 11:58:13', '0000-00-00 00:00:00'),
(158, '506144', '4', '37', '197', 1, '2025-05-27 11:58:38', '0000-00-00 00:00:00'),
(159, '506175', '4', '37', '198', 1, '2025-05-27 11:59:04', '0000-00-00 00:00:00'),
(160, '506356', '4', '37', '199', 1, '2025-05-27 11:59:34', '0000-00-00 00:00:00'),
(161, '506391', '4', '37', '200', 1, '2025-05-27 11:59:50', '0000-00-00 00:00:00'),
(162, '531151', '1', '10', '203', 1, '2025-05-29 15:04:23', '0000-00-00 00:00:00'),
(163, '531152', '1', '10', '204', 1, '2025-05-29 15:04:42', '0000-00-00 00:00:00'),
(164, '531153', '1', '10', '205', 1, '2025-05-29 15:05:00', '0000-00-00 00:00:00'),
(165, '531154', '1', '10', '205', 1, '2025-05-29 15:05:54', '0000-00-00 00:00:00'),
(166, '531155', '1', '10', '207', 1, '2025-05-29 15:06:13', '0000-00-00 00:00:00'),
(167, '531156', '1', '10', '208', 1, '2025-05-29 15:06:37', '0000-00-00 00:00:00'),
(168, '531151', '1', '10', '209', 1, '2025-05-29 15:12:38', '0000-00-00 00:00:00'),
(169, '531152', '1', '10', '211', 1, '2025-05-29 15:12:58', '0000-00-00 00:00:00'),
(170, '531153', '1', '10', '212', 1, '2025-05-29 15:13:17', '0000-00-00 00:00:00'),
(171, '531154', '1', '10', '213', 1, '2025-05-29 15:13:52', '0000-00-00 00:00:00'),
(172, '531155', '1', '10', '214', 1, '2025-05-29 15:14:10', '0000-00-00 00:00:00'),
(173, '531156', '1', '10', '215', 1, '2025-05-29 15:14:41', '0000-00-00 00:00:00'),
(174, '531111', '1', '10', '216', 1, '2025-05-29 15:17:38', '0000-00-00 00:00:00'),
(175, '531111', '1', '10', '217', 1, '2025-05-29 15:18:08', '0000-00-00 00:00:00'),
(176, '531111', '1', '10', '219', 1, '2025-05-29 15:18:32', '0000-00-00 00:00:00'),
(177, '531111', '1', '10', '218', 1, '2025-05-29 15:26:09', '0000-00-00 00:00:00'),
(178, '531029', '1', '10', '220', 1, '2025-05-29 15:29:03', '0000-00-00 00:00:00'),
(179, '533295', '1', '10', '221', 1, '2025-05-29 15:29:32', '0000-00-00 00:00:00'),
(180, '533428', '1', '10', '222', 1, '2025-05-29 15:30:02', '0000-00-00 00:00:00'),
(181, '531149', '1', '10', '223', 1, '2025-05-29 15:30:31', '0000-00-00 00:00:00'),
(182, '533295', '1', '10', '224', 1, '2025-05-29 15:30:56', '0000-00-00 00:00:00'),
(183, '533436', '1', '10', '225', 1, '2025-05-29 15:31:20', '0000-00-00 00:00:00'),
(184, '533339', '1', '10', '226', 1, '2025-05-29 15:31:45', '0000-00-00 00:00:00'),
(185, '533288', '1', '10', '227', 1, '2025-05-29 15:32:33', '0000-00-00 00:00:00'),
(186, '533352', '1', '10', '228', 1, '2025-05-29 15:32:57', '0000-00-00 00:00:00'),
(187, '531001', '1', '11', '229', 1, '2025-05-30 11:45:56', '0000-00-00 00:00:00'),
(188, '531011', '1', '11', '230', 1, '2025-05-30 11:55:51', '0000-00-00 00:00:00'),
(189, '531026', '1', '11', '231', 1, '2025-05-30 11:56:13', '0000-00-00 00:00:00'),
(190, '531028', '1', '11', '232', 1, '2025-05-30 11:56:45', '0000-00-00 00:00:00'),
(191, '531036', '1', '11', '233', 1, '2025-05-30 12:08:42', '0000-00-00 00:00:00'),
(192, '531075', '1', '11', '234', 1, '2025-05-30 12:09:10', '0000-00-00 00:00:00'),
(193, '531084', '1', '11', '235', 1, '2025-05-30 12:09:28', '0000-00-00 00:00:00'),
(194, '531034', '1', '11', '236', 1, '2025-05-30 12:09:53', '0000-00-00 00:00:00'),
(195, '531031', '1', '11', '237', 1, '2025-05-30 12:10:15', '0000-00-00 00:00:00'),
(196, '531085', '1', '11', '238', 1, '2025-05-30 12:10:37', '0000-00-00 00:00:00'),
(197, '531027', '1', '11', '239', 1, '2025-05-30 12:11:06', '0000-00-00 00:00:00'),
(198, '531113', '1', '11', '240', 1, '2025-05-30 12:11:32', '0000-00-00 00:00:00'),
(199, '531033', '1', '11', '241', 1, '2025-05-30 12:11:55', '0000-00-00 00:00:00'),
(200, '531081', '1', '11', '242', 1, '2025-05-30 12:12:18', '0000-00-00 00:00:00'),
(201, '531116', '1', '11', '243', 1, '2025-05-30 12:12:49', '0000-00-00 00:00:00'),
(202, '531115', '1', '11', '244', 1, '2025-05-30 12:13:08', '0000-00-00 00:00:00'),
(203, '531021', '1', '11', '245', 1, '2025-05-30 12:13:49', '0000-00-00 00:00:00'),
(204, '531126', '1', '11', '246', 1, '2025-05-30 12:14:07', '0000-00-00 00:00:00'),
(205, '531061', '1', '11', '247', 1, '2025-05-30 12:14:26', '0000-00-00 00:00:00'),
(206, '531025', '1', '11', '248', 1, '2025-05-30 12:18:02', '0000-00-00 00:00:00'),
(207, '531114', '1', '11', '249', 1, '2025-05-30 12:18:21', '0000-00-00 00:00:00'),
(208, '531083', '1', '11', '250', 1, '2025-05-30 12:18:39', '0000-00-00 00:00:00'),
(209, '515751', '1', '12', '252', 1, '2025-05-30 13:05:44', '0000-00-00 00:00:00'),
(210, '515741', '1', '12', '253', 1, '2025-05-30 13:07:15', '0000-00-00 00:00:00'),
(211, '515871', '1', '12', '254', 1, '2025-05-30 13:07:50', '0000-00-00 00:00:00'),
(212, '515701', '1', '12', '255', 1, '2025-05-30 13:09:14', '0000-00-00 00:00:00'),
(213, '515872', '1', '12', '256', 1, '2025-05-30 13:09:36', '0000-00-00 00:00:00'),
(214, '515731', '1', '12', '257', 1, '2025-05-30 13:09:56', '0000-00-00 00:00:00'),
(215, '515401', '1', '12', '258', 1, '2025-05-30 13:10:17', '0000-00-00 00:00:00'),
(216, '515865', '1', '12', '259', 1, '2025-05-30 13:10:41', '0000-00-00 00:00:00'),
(217, '515801', '1', '12', '260', 1, '2025-05-30 13:11:54', '0000-00-00 00:00:00'),
(218, '515761', '1', '12', '261', 1, '2025-05-30 13:12:30', '0000-00-00 00:00:00'),
(219, '515765', '1', '12', '262', 1, '2025-05-30 13:13:31', '0000-00-00 00:00:00'),
(220, '515641', '1', '12', '263', 1, '2025-05-30 13:13:52', '0000-00-00 00:00:00'),
(221, '515766', '1', '12', '264', 1, '2025-05-30 13:14:09', '0000-00-00 00:00:00'),
(222, '515775', '1', '12', '265', 1, '2025-05-30 13:15:15', '0000-00-00 00:00:00'),
(223, '515405', '1', '12', '266', 1, '2025-05-30 13:15:37', '0000-00-00 00:00:00'),
(224, '515445', '1', '12', '267', 1, '2025-05-30 13:16:08', '0000-00-00 00:00:00'),
(225, '515414', '1', '12', '268', 1, '2025-05-30 13:16:27', '0000-00-00 00:00:00'),
(226, '515865', '1', '12', '269', 1, '2025-05-30 13:16:46', '0000-00-00 00:00:00'),
(227, '515435', '1', '12', '270', 1, '2025-05-30 13:17:06', '0000-00-00 00:00:00'),
(228, '515411', '1', '12', '271', 1, '2025-05-30 13:17:24', '0000-00-00 00:00:00'),
(229, '515812', '1', '12', '272', 1, '2025-05-30 13:17:45', '0000-00-00 00:00:00'),
(230, '515832', '1', '12', '273', 1, '2025-05-30 13:18:07', '0000-00-00 00:00:00'),
(231, '515870', '1', '12', '274', 1, '2025-05-30 13:18:35', '0000-00-00 00:00:00'),
(232, '515408', '1', '12', '275', 1, '2025-05-30 13:18:52', '0000-00-00 00:00:00'),
(233, '515465', '1', '12', '276', 1, '2025-05-30 13:19:12', '0000-00-00 00:00:00'),
(234, '515701', '1', '12', '277', 1, '2025-05-30 13:19:30', '0000-00-00 00:00:00'),
(235, '515455', '1', '12', '278', 1, '2025-05-30 13:20:03', '0000-00-00 00:00:00'),
(236, '517325', '1', '13', '279', 1, '2025-05-30 16:27:36', '0000-00-00 00:00:00'),
(237, '517280', '1', '13', '280', 1, '2025-05-30 16:28:34', '0000-00-00 00:00:00'),
(238, '517417', '1', '13', '281', 1, '2025-05-30 16:29:14', '0000-00-00 00:00:00'),
(239, '517418', '1', '13', '282', 1, '2025-05-30 16:29:46', '0000-00-00 00:00:00'),
(240, '517390', '1', '13', '283', 1, '2025-05-30 16:30:17', '0000-00-00 00:00:00'),
(241, '517297', '1', '13', '284', 1, '2025-05-30 16:40:14', '0000-00-00 00:00:00'),
(242, '517350', '1', '13', '285', 1, '2025-05-30 16:41:52', '0000-00-00 00:00:00'),
(243, '517391', '1', '13', '286', 1, '2025-05-30 16:42:23', '0000-00-00 00:00:00'),
(244, '517370', '1', '13', '287', 1, '2025-05-30 16:42:39', '0000-00-00 00:00:00'),
(245, '517234', '1', '13', '288', 1, '2025-05-30 16:43:04', '0000-00-00 00:00:00'),
(246, '517236', '1', '13', '289', 1, '2025-05-30 16:43:25', '0000-00-00 00:00:00'),
(247, '517299', '1', '13', '290', 1, '2025-05-30 16:43:45', '0000-00-00 00:00:00'),
(248, '517291', '1', '13', '291', 1, '2025-05-30 16:44:00', '0000-00-00 00:00:00'),
(249, '517299', '1', '13', '292', 1, '2025-05-30 16:44:23', '0000-00-00 00:00:00'),
(250, '517247', '1', '13', '293', 1, '2025-05-30 16:44:40', '0000-00-00 00:00:00'),
(251, '517123', '1', '13', '294', 1, '2025-05-30 16:44:55', '0000-00-00 00:00:00'),
(252, '517257', '1', '13', '295', 1, '2025-05-30 16:45:13', '0000-00-00 00:00:00'),
(253, '517257', '1', '13', '296', 1, '2025-05-30 16:45:28', '0000-00-00 00:00:00'),
(254, '517214', '1', '13', '297', 1, '2025-05-30 16:47:55', '0000-00-00 00:00:00'),
(255, '516269', '1', '13', '298', 1, '2025-05-30 16:48:20', '0000-00-00 00:00:00'),
(256, '516215', '1', '13', '299', 1, '2025-05-30 16:49:09', '0000-00-00 00:00:00'),
(257, '516214', '1', '13', '300', 1, '2025-05-30 16:52:19', '0000-00-00 00:00:00'),
(258, '516267', '1', '13', '301', 1, '2025-05-30 16:52:52', '0000-00-00 00:00:00'),
(259, '516257', '1', '13', '302', 1, '2025-05-30 16:53:08', '0000-00-00 00:00:00'),
(260, '516175', '1', '13', '303', 1, '2025-05-30 16:54:38', '0000-00-00 00:00:00'),
(261, '516127', '1', '13', '293', 1, '2025-05-30 16:56:05', '0000-00-00 00:00:00'),
(262, '523201', '1', '14', '304', 1, '2025-05-30 17:11:29', '0000-00-00 00:00:00'),
(263, '522325', '1', '14', '305', 1, '2025-05-30 17:16:16', '0000-00-00 00:00:00'),
(264, '523301', '1', '14', '306', 1, '2025-05-30 17:16:46', '0000-00-00 00:00:00'),
(265, '522101', '1', '14', '307', 1, '2025-05-30 17:17:02', '0000-00-00 00:00:00'),
(266, '522256', '1', '14', '308', 1, '2025-05-30 17:17:16', '0000-00-00 00:00:00'),
(267, '522309', '1', '14', '309', 1, '2025-05-30 17:17:31', '0000-00-00 00:00:00'),
(268, '523135', '1', '14', '310', 1, '2025-05-30 17:17:47', '0000-00-00 00:00:00'),
(269, '523155', '1', '14', '311', 1, '2025-05-30 17:18:02', '0000-00-00 00:00:00'),
(270, '523167', '1', '14', '312', 1, '2025-05-30 17:18:20', '0000-00-00 00:00:00'),
(271, '523184', '1', '14', '313', 1, '2025-05-30 17:18:43', '0000-00-00 00:00:00'),
(272, '523214', '1', '14', '314', 1, '2025-05-30 17:21:09', '0000-00-00 00:00:00'),
(273, '522111', '1', '14', '315', 1, '2025-05-30 17:21:32', '0000-00-00 00:00:00'),
(274, '522324', '1', '14', '316', 1, '2025-05-30 17:22:07', '0000-00-00 00:00:00'),
(275, '523183', '1', '14', '317', 1, '2025-05-30 17:22:27', '0000-00-00 00:00:00'),
(276, '523190', '1', '14', '318', 1, '2025-05-30 17:22:48', '0000-00-00 00:00:00'),
(277, '523212', '1', '14', '319', 1, '2025-05-30 17:23:15', '0000-00-00 00:00:00'),
(278, '522268', '1', '14', '320', 1, '2025-05-30 17:23:50', '0000-00-00 00:00:00'),
(279, '523169', '1', '14', '322', 1, '2025-05-30 17:24:49', '0000-00-00 00:00:00'),
(280, '522329', '1', '14', '323', 1, '2025-05-30 17:25:09', '0000-00-00 00:00:00'),
(281, '522265', '1', '14', '324', 1, '2025-05-30 17:25:26', '0000-00-00 00:00:00'),
(282, '523302', '1', '14', '325', 1, '2025-05-30 17:25:41', '0000-00-00 00:00:00'),
(283, '522318', '1', '14', '326', 1, '2025-05-30 17:26:03', '0000-00-00 00:00:00'),
(284, '523187', '1', '14', '328', 1, '2025-05-30 17:28:14', '0000-00-00 00:00:00'),
(285, '534201', '1', '15', '329', 1, '2025-05-30 17:36:07', '0000-00-00 00:00:00'),
(286, '534235', '1', '15', '330', 1, '2025-05-30 17:36:30', '0000-00-00 00:00:00'),
(287, '534134', '1', '15', '331', 1, '2025-05-30 17:37:35', '0000-00-00 00:00:00'),
(288, '534198', '1', '15', '332', 1, '2025-05-30 17:39:24', '0000-00-00 00:00:00'),
(289, '534210', '1', '15', '333', 1, '2025-05-30 17:39:56', '0000-00-00 00:00:00'),
(290, '534320', '1', '15', '334', 1, '2025-05-30 17:40:12', '0000-00-00 00:00:00'),
(291, '534211', '1', '15', '335', 1, '2025-05-30 17:40:35', '0000-00-00 00:00:00'),
(292, '534199', '1', '15', '345', 1, '2025-05-30 17:41:39', '0000-00-00 00:00:00'),
(293, '534245', '1', '15', '337', 1, '2025-05-30 17:42:02', '0000-00-00 00:00:00'),
(294, '534268', '1', '15', '338', 1, '2025-05-30 17:42:41', '0000-00-00 00:00:00'),
(295, '534202', '1', '15', '339', 1, '2025-05-30 17:43:04', '0000-00-00 00:00:00'),
(296, '534204', '1', '15', '340', 1, '2025-05-30 17:43:50', '0000-00-00 00:00:00'),
(297, '534202', '1', '15', '341', 1, '2025-05-30 17:44:12', '0000-00-00 00:00:00'),
(298, '534208', '1', '15', '342', 1, '2025-05-30 17:44:29', '0000-00-00 00:00:00'),
(299, '534202', '1', '15', '343', 1, '2025-05-30 17:44:45', '0000-00-00 00:00:00'),
(300, '534202', '1', '15', '344', 1, '2025-05-30 17:45:06', '0000-00-00 00:00:00'),
(301, '517001', '1', '16', '346', 1, '2025-05-30 17:55:35', '0000-00-00 00:00:00'),
(302, '517416', '1', '16', '347', 1, '2025-05-30 17:55:52', '0000-00-00 00:00:00'),
(303, '517124', '1', '16', '348', 1, '2025-05-30 17:56:15', '0000-00-00 00:00:00'),
(304, '517193', '1', '16', '349', 1, '2025-05-30 17:56:32', '0000-00-00 00:00:00'),
(305, '517257', '1', '16', '350', 1, '2025-05-30 17:56:51', '0000-00-00 00:00:00'),
(306, '517125', '1', '16', '351', 1, '2025-05-30 17:57:12', '0000-00-00 00:00:00'),
(307, '517132', '1', '16', '352', 1, '2025-05-30 17:57:35', '0000-00-00 00:00:00'),
(308, '517130', '1', '16', '353', 1, '2025-05-30 17:57:59', '0000-00-00 00:00:00'),
(309, '517582', '1', '16', '354', 1, '2025-05-30 17:58:24', '0000-00-00 00:00:00'),
(310, '517425', '1', '16', '355', 1, '2025-05-30 17:58:50', '0000-00-00 00:00:00'),
(311, '517590', '1', '16', '356', 1, '2025-05-30 17:59:09', '0000-00-00 00:00:00'),
(312, '517591', '1', '16', '357', 1, '2025-05-30 17:59:32', '0000-00-00 00:00:00'),
(313, '517408', '1', '16', '358', 1, '2025-05-30 18:01:24', '0000-00-00 00:00:00'),
(314, '517414', '1', '16', '359', 1, '2025-05-30 18:02:02', '0000-00-00 00:00:00'),
(315, '517587', '1', '16', '360', 1, '2025-05-30 18:02:23', '0000-00-00 00:00:00'),
(316, '517247', '1', '16', '361', 1, '2025-05-30 18:33:09', '0000-00-00 00:00:00'),
(317, '517124', '1', '16', '362', 1, '2025-05-30 18:33:33', '0000-00-00 00:00:00'),
(318, '517401', '1', '16', '363', 1, '2025-05-30 18:33:52', '0000-00-00 00:00:00'),
(319, '517423', '1', '16', '364', 1, '2025-05-30 18:34:46', '0000-00-00 00:00:00'),
(320, '517644', '1', '16', '365', 1, '2025-05-30 18:35:08', '0000-00-00 00:00:00'),
(321, '517131', '1', '16', '366', 1, '2025-05-30 18:35:32', '0000-00-00 00:00:00'),
(322, '517569', '1', '16', '367', 1, '2025-05-30 18:36:11', '0000-00-00 00:00:00'),
(323, '517424', '1', '16', '368', 1, '2025-05-30 18:36:34', '0000-00-00 00:00:00'),
(324, '517643', '1', '16', '369', 1, '2025-05-30 18:44:18', '0000-00-00 00:00:00'),
(325, '517581', '1', '16', '370', 1, '2025-05-30 18:44:32', '0000-00-00 00:00:00'),
(326, '517588', '1', '16', '371', 1, '2025-05-30 18:44:59', '0000-00-00 00:00:00'),
(327, '533101', '1', '17', '372', 1, '2025-05-31 10:54:10', '0000-00-00 00:00:00'),
(328, '533211', '1', '17', '373', 1, '2025-05-31 10:54:31', '0000-00-00 00:00:00'),
(329, '533233', '1', '17', '374', 1, '2025-05-31 10:54:47', '0000-00-00 00:00:00'),
(330, '533217', '1', '17', '375', 1, '2025-05-31 10:55:10', '0000-00-00 00:00:00'),
(331, '533214', '1', '17', '376', 1, '2025-05-31 11:10:02', '0000-00-00 00:00:00'),
(332, '533235', '1', '17', '377', 1, '2025-05-31 11:10:24', '0000-00-00 00:00:00'),
(333, '533220', '1', '17', '378', 1, '2025-05-31 11:10:41', '0000-00-00 00:00:00'),
(334, '533212', '1', '17', '379', 1, '2025-05-31 11:11:07', '0000-00-00 00:00:00'),
(335, '533223', '1', '17', '381', 1, '2025-05-31 11:11:30', '0000-00-00 00:00:00'),
(336, '533253', '1', '17', '382', 1, '2025-05-31 11:11:49', '0000-00-00 00:00:00'),
(337, '533247', '1', '17', '383', 1, '2025-05-31 11:12:09', '0000-00-00 00:00:00'),
(338, '533216', '1', '17', '384', 1, '2025-05-31 11:12:39', '0000-00-00 00:00:00'),
(339, '533240', '1', '17', '385', 1, '2025-05-31 11:12:58', '0000-00-00 00:00:00'),
(340, '533242', '1', '17', '386', 1, '2025-05-31 11:13:24', '0000-00-00 00:00:00'),
(341, '533251', '1', '17', '387', 1, '2025-05-31 11:13:54', '0000-00-00 00:00:00'),
(342, '533222', '1', '17', '388', 1, '2025-05-31 11:14:17', '0000-00-00 00:00:00'),
(343, '533001', '1', '17', '389', 1, '2025-05-31 11:14:35', '0000-00-00 00:00:00'),
(344, '533437', '1', '17', '390', 1, '2025-05-31 11:15:09', '0000-00-00 00:00:00'),
(345, '533445', '1', '17', '391', 1, '2025-05-31 11:15:45', '0000-00-00 00:00:00'),
(346, '533435', '1', '17', '392', 1, '2025-05-31 11:16:04', '0000-00-00 00:00:00'),
(347, '533440', '1', '17', '393', 1, '2025-05-31 11:16:21', '0000-00-00 00:00:00'),
(348, '533002', '1', '17', '394', 1, '2025-05-31 11:16:35', '0000-00-00 00:00:00'),
(349, '533005', '1', '17', '395', 1, '2025-05-31 11:16:51', '0000-00-00 00:00:00'),
(350, '533006', '1', '17', '396', 1, '2025-05-31 11:17:09', '0000-00-00 00:00:00'),
(351, '534001', '1', '18', '397', 1, '2025-05-31 11:33:29', '0000-00-00 00:00:00'),
(352, '521211', '1', '18', '398', 1, '2025-05-31 11:38:33', '0000-00-00 00:00:00'),
(353, '534425', '1', '18', '399', 1, '2025-05-31 11:39:04', '0000-00-00 00:00:00'),
(354, '534448', '1', '18', '400', 1, '2025-05-31 11:39:40', '0000-00-00 00:00:00'),
(355, '534342', '1', '18', '401', 1, '2025-05-31 11:40:06', '0000-00-00 00:00:00'),
(356, '534460', '1', '18', '402', 1, '2025-05-31 11:40:21', '0000-00-00 00:00:00'),
(357, '534432', '1', '18', '403', 1, '2025-05-31 11:40:37', '0000-00-00 00:00:00'),
(358, '534426', '1', '18', '404', 1, '2025-05-31 11:40:54', '0000-00-00 00:00:00'),
(359, '534198', '1', '18', '405', 1, '2025-05-31 11:41:15', '0000-00-00 00:00:00'),
(360, '534316', '1', '18', '406', 1, '2025-05-31 11:41:37', '0000-00-00 00:00:00'),
(361, '534447', '1', '18', '407', 1, '2025-05-31 11:42:12', '0000-00-00 00:00:00'),
(362, '534447', '1', '18', '408', 1, '2025-05-31 11:43:39', '0000-00-00 00:00:00'),
(363, '521333', '1', '18', '409', 1, '2025-05-31 11:43:59', '0000-00-00 00:00:00'),
(364, '521344', '1', '18', '410', 1, '2025-05-31 11:44:18', '0000-00-00 00:00:00'),
(365, '534449', '1', '18', '411', 1, '2025-05-31 11:44:41', '0000-00-00 00:00:00'),
(366, '534312', '1', '18', '412', 1, '2025-05-31 11:47:04', '0000-00-00 00:00:00'),
(367, '534444', '1', '18', '413', 1, '2025-05-31 11:47:41', '0000-00-00 00:00:00'),
(368, '534462', '1', '18', '414', 1, '2025-05-31 11:48:00', '0000-00-00 00:00:00'),
(369, '521345', '1', '18', '415', 1, '2025-05-31 11:48:21', '0000-00-00 00:00:00'),
(370, '521207', '1', '18', '416', 1, '2025-05-31 11:48:38', '0000-00-00 00:00:00'),
(371, '534195', '1', '18', '417', 1, '2025-05-31 11:49:48', '0000-00-00 00:00:00'),
(372, '521201', '1', '18', '418', 1, '2025-05-31 11:50:10', '0000-00-00 00:00:00'),
(373, '534437', '1', '18', '419', 1, '2025-05-31 11:50:37', '0000-00-00 00:00:00'),
(374, '534437', '1', '18', '419', 1, '2025-05-31 11:51:13', '0000-00-00 00:00:00'),
(375, '534435', '1', '18', '420', 1, '2025-05-31 11:51:33', '0000-00-00 00:00:00'),
(376, '534432', '1', '18', '421', 1, '2025-05-31 11:51:57', '0000-00-00 00:00:00'),
(377, '534467', '1', '18', '422', 1, '2025-05-31 11:52:16', '0000-00-00 00:00:00'),
(378, '534411', '1', '18', '423', 1, '2025-05-31 11:52:43', '0000-00-00 00:00:00'),
(379, '534449', '1', '18', '424', 1, '2025-05-31 11:53:21', '0000-00-00 00:00:00'),
(380, '534001', '1', '18', '425', 1, '2025-05-31 11:53:42', '0000-00-00 00:00:00'),
(381, '534006', '1', '18', '427', 1, '2025-05-31 11:54:06', '0000-00-00 00:00:00'),
(382, '534005', '1', '18', '426', 1, '2025-05-31 11:54:31', '0000-00-00 00:00:00'),
(383, '522002', '1', '19', '428', 1, '2025-05-31 12:05:13', '0000-00-00 00:00:00'),
(384, '522020', '1', '19', '429', 1, '2025-05-31 12:05:36', '0000-00-00 00:00:00'),
(385, '522101', '1', '19', '430', 1, '2025-05-31 12:05:58', '0000-00-00 00:00:00'),
(386, '522411', '1', '19', '431', 1, '2025-05-31 12:06:36', '0000-00-00 00:00:00'),
(387, '522663', '1', '19', '432', 1, '2025-05-31 12:07:05', '0000-00-00 00:00:00'),
(388, '522663', '1', '19', '432', 1, '2025-05-31 12:07:06', '0000-00-00 00:00:00'),
(389, '522212', '1', '19', '433', 1, '2025-05-31 12:07:31', '0000-00-00 00:00:00'),
(390, '522330', '1', '19', '434', 1, '2025-05-31 12:08:05', '0000-00-00 00:00:00'),
(391, '522304', '1', '19', '435', 1, '2025-05-31 12:20:43', '0000-00-00 00:00:00'),
(392, '522503', '1', '19', '436', 1, '2025-05-31 12:55:52', '0000-00-00 00:00:00'),
(393, '522401', '1', '19', '437', 1, '2025-05-31 12:56:07', '0000-00-00 00:00:00'),
(394, '522403', '1', '19', '438', 1, '2025-05-31 12:56:23', '0000-00-00 00:00:00'),
(395, '522529', '1', '19', '439', 1, '2025-05-31 12:56:43', '0000-00-00 00:00:00'),
(396, '522124', '1', '19', '440', 1, '2025-05-31 12:57:05', '0000-00-00 00:00:00'),
(397, '522019', '1', '19', '441', 1, '2025-05-31 12:57:28', '0000-00-00 00:00:00'),
(398, '522501', '1', '19', '442', 1, '2025-05-31 12:57:44', '0000-00-00 00:00:00'),
(399, '522236', '1', '19', '443', 1, '2025-05-31 12:58:04', '0000-00-00 00:00:00'),
(400, '522201', '1', '19', '444', 1, '2025-05-31 12:58:22', '0000-00-00 00:00:00'),
(401, '522237', '1', '19', '445', 1, '2025-05-31 12:58:37', '0000-00-00 00:00:00'),
(402, '522212', '1', '19', '446', 1, '2025-05-31 12:58:53', '0000-00-00 00:00:00'),
(403, '522002', '1', '19', '447', 1, '2025-05-31 12:59:12', '0000-00-00 00:00:00'),
(404, '522002', '1', '19', '448', 1, '2025-05-31 12:59:33', '0000-00-00 00:00:00'),
(405, '522007', '1', '19', '449', 1, '2025-05-31 12:59:48', '0000-00-00 00:00:00'),
(407, '522006', '1', '19', '450', 1, '2025-05-31 13:04:00', '0000-00-00 00:00:00'),
(408, '522006', '1', '19', '451', 1, '2025-05-31 13:04:23', '0000-00-00 00:00:00'),
(409, '516001', '1', '20', '452', 1, '2025-05-31 13:22:10', '0000-00-00 00:00:00'),
(410, '516227', '1', '20', '453', 1, '2025-05-31 13:22:27', '0000-00-00 00:00:00'),
(411, '516228', '1', '20', '454', 1, '2025-05-31 13:22:41', '0000-00-00 00:00:00'),
(412, '516503', '1', '20', '455', 1, '2025-05-31 13:22:56', '0000-00-00 00:00:00'),
(413, '516503', '1', '20', '456', 1, '2025-05-31 13:23:16', '0000-00-00 00:00:00'),
(414, '516259', '1', '20', '457', 1, '2025-05-31 13:23:33', '0000-00-00 00:00:00'),
(415, '516356', '1', '20', '458', 1, '2025-05-31 13:23:48', '0000-00-00 00:00:00'),
(416, '516162', '1', '20', '459', 1, '2025-05-31 13:24:04', '0000-00-00 00:00:00'),
(417, '516003', '1', '20', '460', 1, '2025-05-31 13:24:22', '0000-00-00 00:00:00'),
(418, '516175', '1', '20', '461', 1, '2025-05-31 13:24:38', '0000-00-00 00:00:00'),
(419, '516233', '1', '20', '462', 1, '2025-05-31 13:24:53', '0000-00-00 00:00:00'),
(420, '516434', '1', '20', '463', 1, '2025-05-31 13:25:09', '0000-00-00 00:00:00'),
(421, '516217', '1', '20', '464', 1, '2025-05-31 13:25:28', '0000-00-00 00:00:00'),
(422, '516289', '1', '20', '465', 1, '2025-05-31 13:25:48', '0000-00-00 00:00:00'),
(423, '516203', '1', '20', '466', 1, '2025-05-31 13:26:07', '0000-00-00 00:00:00'),
(424, '516101', '1', '20', '467', 1, '2025-05-31 13:26:22', '0000-00-00 00:00:00'),
(425, '516444', '1', '20', '469', 1, '2025-05-31 13:26:44', '0000-00-00 00:00:00'),
(426, '516396', '1', '20', '470', 1, '2025-05-31 13:27:02', '0000-00-00 00:00:00'),
(427, '516380', '1', '20', '471', 1, '2025-05-31 13:27:22', '0000-00-00 00:00:00'),
(428, '516439', '1', '20', '473', 1, '2025-05-31 13:28:12', '0000-00-00 00:00:00'),
(429, '516108', '1', '20', '474', 1, '2025-05-31 13:28:32', '0000-00-00 00:00:00'),
(430, '516247', '1', '20', '475', 1, '2025-05-31 13:28:54', '0000-00-00 00:00:00'),
(431, '516216', '1', '20', '476', 1, '2025-05-31 13:29:13', '0000-00-00 00:00:00'),
(432, '516193', '1', '20', '477', 1, '2025-05-31 13:29:35', '0000-00-00 00:00:00'),
(433, '516360', '1', '20', '478', 1, '2025-05-31 13:29:53', '0000-00-00 00:00:00'),
(434, '516390', '1', '20', '479', 1, '2025-05-31 13:30:13', '0000-00-00 00:00:00'),
(435, '516115', '1', '20', '480', 1, '2025-05-31 13:30:34', '0000-00-00 00:00:00'),
(436, '516359', '1', '20', '481', 1, '2025-05-31 13:30:50', '0000-00-00 00:00:00'),
(437, '516454', '1', '20', '482', 1, '2025-05-31 13:31:16', '0000-00-00 00:00:00'),
(438, '516130', '1', '20', '483', 1, '2025-05-31 13:31:44', '0000-00-00 00:00:00'),
(439, '516293', '1', '20', '484', 1, '2025-05-31 13:32:00', '0000-00-00 00:00:00'),
(440, '516321', '1', '20', '485', 1, '2025-05-31 13:32:20', '0000-00-00 00:00:00'),
(441, '516213', '1', '20', '486', 1, '2025-05-31 13:32:45', '0000-00-00 00:00:00'),
(442, '516309', '1', '20', '487', 1, '2025-05-31 13:33:01', '0000-00-00 00:00:00'),
(443, '516001', '1', '20', '488', 1, '2025-05-31 13:33:16', '0000-00-00 00:00:00'),
(444, '516001', '1', '20', '489', 1, '2025-05-31 13:33:38', '0000-00-00 00:00:00'),
(445, '516001', '1', '20', '490', 1, '2025-05-31 13:34:13', '0000-00-00 00:00:00'),
(446, '516001', '1', '20', '491', 1, '2025-05-31 14:32:46', '0000-00-00 00:00:00'),
(447, '516002', '1', '20', '492', 1, '2025-05-31 14:33:31', '0000-00-00 00:00:00'),
(448, '516005', '1', '20', '493', 1, '2025-05-31 14:33:59', '0000-00-00 00:00:00'),
(449, '533001', '1', '21', '494', 1, '2025-05-31 14:56:04', '0000-00-00 00:00:00'),
(450, '533445', '1', '21', '495', 1, '2025-05-31 14:56:42', '0000-00-00 00:00:00'),
(451, '533435', '1', '21', '496', 1, '2025-05-31 14:57:06', '0000-00-00 00:00:00'),
(452, '533431', '1', '21', '497', 1, '2025-05-31 14:57:43', '0000-00-00 00:00:00'),
(453, '533447', '1', '21', '498', 1, '2025-05-31 14:58:13', '0000-00-00 00:00:00'),
(454, '533006', '1', '21', '499', 1, '2025-05-31 14:58:34', '0000-00-00 00:00:00'),
(455, '533437', '1', '21', '500', 1, '2025-05-31 14:58:58', '0000-00-00 00:00:00'),
(456, '533450', '1', '21', '501', 1, '2025-05-31 14:59:16', '0000-00-00 00:00:00'),
(457, '533432', '1', '21', '502', 1, '2025-05-31 14:59:40', '0000-00-00 00:00:00'),
(458, '533440', '1', '21', '503', 1, '2025-05-31 15:00:04', '0000-00-00 00:00:00'),
(459, '533446', '1', '21', '504', 1, '2025-05-31 15:00:23', '0000-00-00 00:00:00'),
(460, '533408', '1', '21', '505', 1, '2025-05-31 15:01:25', '0000-00-00 00:00:00'),
(461, '533401', '1', '21', '506', 1, '2025-05-31 15:01:43', '0000-00-00 00:00:00'),
(462, '533447', '1', '21', '507', 1, '2025-05-31 15:03:15', '0000-00-00 00:00:00'),
(463, '533429', '1', '21', '508', 1, '2025-05-31 15:03:47', '0000-00-00 00:00:00'),
(464, '533297', '1', '21', '509', 1, '2025-05-31 15:04:24', '0000-00-00 00:00:00'),
(465, '533286', '1', '21', '510', 1, '2025-05-31 15:04:42', '0000-00-00 00:00:00'),
(466, '533126', '1', '21', '511', 1, '2025-05-31 15:06:50', '0000-00-00 00:00:00'),
(467, '533468', '1', '21', '512', 1, '2025-05-31 15:07:09', '0000-00-00 00:00:00'),
(468, '533292', '1', '21', '513', 1, '2025-05-31 15:07:29', '0000-00-00 00:00:00'),
(469, '533294', '1', '21', '514', 1, '2025-05-31 15:07:53', '0000-00-00 00:00:00'),
(470, '533124', '1', '21', '515', 1, '2025-05-31 15:08:19', '0000-00-00 00:00:00'),
(471, '533001', '1', '21', '516', 1, '2025-05-31 15:08:38', '0000-00-00 00:00:00'),
(472, '533006', '1', '21', '517', 1, '2025-05-31 15:08:55', '0000-00-00 00:00:00'),
(473, '533003', '1', '21', '518', 1, '2025-05-31 15:09:13', '0000-00-00 00:00:00'),
(474, '533005', '1', '21', '519', 1, '2025-05-31 15:09:32', '0000-00-00 00:00:00'),
(475, '533006', '1', '21', '520', 1, '2025-05-31 15:09:58', '0000-00-00 00:00:00'),
(476, '533201', '1', '22', '521', 1, '2025-05-31 15:20:27', '0000-00-00 00:00:00'),
(477, '533211', '1', '22', '522', 1, '2025-05-31 15:20:41', '0000-00-00 00:00:00'),
(478, '533217', '1', '22', '523', 1, '2025-05-31 15:21:04', '0000-00-00 00:00:00'),
(479, '533214', '1', '22', '524', 1, '2025-05-31 15:21:22', '0000-00-00 00:00:00'),
(480, '533233', '1', '22', '525', 1, '2025-05-31 15:21:50', '0000-00-00 00:00:00'),
(481, '533309', '1', '22', '526', 1, '2025-05-31 15:22:10', '0000-00-00 00:00:00'),
(482, '533308', '1', '22', '527', 1, '2025-05-31 15:22:27', '0000-00-00 00:00:00'),
(483, '533342', '1', '22', '528', 1, '2025-05-31 15:22:44', '0000-00-00 00:00:00'),
(484, '533343', '1', '22', '529', 1, '2025-05-31 15:23:02', '0000-00-00 00:00:00'),
(485, '533238', '1', '22', '530', 1, '2025-05-31 15:23:17', '0000-00-00 00:00:00'),
(486, '533221', '1', '22', '531', 1, '2025-05-31 15:23:36', '0000-00-00 00:00:00'),
(487, '533213', '1', '22', '532', 1, '2025-05-31 15:23:55', '0000-00-00 00:00:00'),
(488, '533201', '1', '22', '533', 1, '2025-05-31 15:24:10', '0000-00-00 00:00:00'),
(489, '533232', '1', '22', '534', 1, '2025-05-31 15:24:31', '0000-00-00 00:00:00'),
(490, '533222', '1', '22', '535', 1, '2025-05-31 15:25:08', '0000-00-00 00:00:00'),
(491, '521001', '1', '66', '537', 1, '2025-05-31 15:56:31', '0000-00-00 00:00:00'),
(492, '521121', '1', '66', '538', 1, '2025-05-31 15:57:03', '0000-00-00 00:00:00'),
(493, '521324', '1', '66', '539', 1, '2025-05-31 15:57:25', '0000-00-00 00:00:00'),
(494, '521105', '1', '66', '540', 1, '2025-05-31 15:57:41', '0000-00-00 00:00:00'),
(495, '521126', '1', '66', '541', 1, '2025-05-31 15:57:59', '0000-00-00 00:00:00'),
(496, '521182', '1', '66', '542', 1, '2025-05-31 15:58:23', '0000-00-00 00:00:00'),
(497, '521101', '1', '66', '543', 1, '2025-05-31 15:58:39', '0000-00-00 00:00:00'),
(498, '521133', '1', '66', '544', 1, '2025-05-31 15:58:56', '0000-00-00 00:00:00'),
(499, '521301', '1', '66', '545', 1, '2025-05-31 15:59:15', '0000-00-00 00:00:00'),
(500, '521356', '1', '66', '546', 1, '2025-05-31 16:07:16', '0000-00-00 00:00:00'),
(501, '521333', '1', '66', '550', 1, '2025-05-31 16:29:06', '0000-00-00 00:00:00'),
(502, '521157', '1', '66', '549', 1, '2025-05-31 16:29:22', '0000-00-00 00:00:00'),
(503, '521120', '1', '66', '548', 1, '2025-05-31 16:29:40', '0000-00-00 00:00:00'),
(504, '521325', '1', '66', '547', 1, '2025-05-31 16:29:56', '0000-00-00 00:00:00'),
(505, '521001', '1', '66', '551', 1, '2025-05-31 16:32:33', '0000-00-00 00:00:00'),
(506, '521002', '1', '66', '552', 1, '2025-05-31 16:32:50', '0000-00-00 00:00:00'),
(507, '521001', '1', '66', '553', 1, '2025-05-31 16:33:22', '0000-00-00 00:00:00'),
(509, '521165', '1', '66', '559', 1, '2025-05-31 17:06:34', '0000-00-00 00:00:00'),
(510, '521312', '1', '66', '558', 1, '2025-05-31 17:06:49', '0000-00-00 00:00:00'),
(511, '521163', '1', '66', '557', 1, '2025-05-31 17:07:06', '0000-00-00 00:00:00'),
(512, '521139', '1', '66', '556', 1, '2025-05-31 17:07:25', '0000-00-00 00:00:00'),
(513, '521321', '1', '66', '555', 1, '2025-05-31 17:07:43', '0000-00-00 00:00:00'),
(514, '521366', '1', '66', '554', 1, '2025-05-31 17:08:03', '0000-00-00 00:00:00'),
(515, '518001', '1', '28', '560', 1, '2025-05-31 17:31:52', '0000-00-00 00:00:00'),
(516, '518301', '1', '28', '561', 1, '2025-05-31 17:32:28', '0000-00-00 00:00:00'),
(517, '518395', '1', '28', '562', 1, '2025-05-31 17:32:54', '0000-00-00 00:00:00'),
(518, '518347', '1', '28', '567', 1, '2025-05-31 17:33:09', '0000-00-00 00:00:00'),
(519, '518462', '1', '28', '566', 1, '2025-05-31 17:33:25', '0000-00-00 00:00:00'),
(520, '518396', '1', '28', '565', 1, '2025-05-31 17:33:39', '0000-00-00 00:00:00'),
(521, '518465', '1', '28', '563', 1, '2025-05-31 17:33:59', '0000-00-00 00:00:00'),
(522, '518463', '1', '28', '564', 1, '2025-05-31 17:34:20', '0000-00-00 00:00:00'),
(523, '518466', '1', '28', '568', 1, '2025-05-31 17:34:36', '0000-00-00 00:00:00'),
(524, '518002', '1', '28', '569', 1, '2025-05-31 17:36:07', '0000-00-00 00:00:00'),
(525, '518464', '1', '28', '570', 1, '2025-05-31 17:36:26', '0000-00-00 00:00:00'),
(526, '518467', '1', '28', '571', 1, '2025-05-31 17:43:15', '0000-00-00 00:00:00'),
(527, '518385', '1', '28', '572', 1, '2025-05-31 17:43:31', '0000-00-00 00:00:00'),
(528, '518345', '1', '28', '573', 1, '2025-05-31 17:43:52', '0000-00-00 00:00:00'),
(529, '518343', '1', '28', '574', 1, '2025-05-31 17:44:08', '0000-00-00 00:00:00'),
(530, '518010', '1', '28', '575', 1, '2025-05-31 17:44:26', '0000-00-00 00:00:00'),
(531, '518380', '1', '28', '576', 1, '2025-05-31 17:44:45', '0000-00-00 00:00:00'),
(532, '518323', '1', '28', '577', 1, '2025-05-31 17:45:06', '0000-00-00 00:00:00'),
(533, '518001', '1', '28', '579', 1, '2025-05-31 18:04:35', '0000-00-00 00:00:00'),
(534, '518502', '1', '28', '580', 1, '2025-05-31 18:04:51', '0000-00-00 00:00:00'),
(535, '518001', '1', '28', '581', 1, '2025-05-31 18:05:15', '0000-00-00 00:00:00'),
(536, '518004', '1', '28', '582', 1, '2025-05-31 18:05:32', '0000-00-00 00:00:00'),
(537, '518002', '1', '28', '583', 1, '2025-05-31 18:06:05', '0000-00-00 00:00:00'),
(538, '518323', '1', '28', '577', 1, '2025-05-31 18:07:01', '0000-00-00 00:00:00'),
(539, '518501', '1', '25', '584', 1, '2025-06-02 12:12:59', '0000-00-00 00:00:00'),
(540, '518422', '1', '25', '585', 1, '2025-06-02 12:13:16', '0000-00-00 00:00:00'),
(541, '518124', '1', '25', '586', 1, '2025-06-02 12:13:50', '0000-00-00 00:00:00'),
(542, '518599', '1', '25', '587', 1, '2025-06-02 12:14:13', '0000-00-00 00:00:00'),
(543, '518222', '1', '25', '588', 1, '2025-06-02 12:14:47', '0000-00-00 00:00:00'),
(544, '518401', '1', '25', '589', 1, '2025-06-02 12:15:15', '0000-00-00 00:00:00'),
(545, '518422', '1', '25', '590', 1, '2025-06-02 12:15:33', '0000-00-00 00:00:00'),
(546, '518502', '1', '25', '591', 1, '2025-06-02 12:15:51', '0000-00-00 00:00:00'),
(547, '518405', '1', '25', '592', 1, '2025-06-02 12:16:08', '0000-00-00 00:00:00'),
(548, '518401', '1', '25', '593', 1, '2025-06-02 12:16:40', '0000-00-00 00:00:00'),
(549, '518442', '1', '25', '594', 1, '2025-06-02 12:16:59', '0000-00-00 00:00:00'),
(550, '518101', '1', '25', '595', 1, '2025-06-02 12:40:13', '0000-00-00 00:00:00'),
(551, '518501', '1', '25', '596', 1, '2025-06-02 12:40:29', '0000-00-00 00:00:00'),
(552, '518502', '1', '25', '597', 1, '2025-06-02 12:40:47', '0000-00-00 00:00:00'),
(553, '518501', '1', '25', '598', 1, '2025-06-02 12:41:05', '0000-00-00 00:00:00'),
(554, '518501', '1', '25', '599', 1, '2025-06-02 12:41:32', '0000-00-00 00:00:00'),
(555, '524001', '1', '26', '600', 1, '2025-06-02 14:49:41', '0000-00-00 00:00:00'),
(556, '524315', '1', '26', '601', 1, '2025-06-02 14:49:54', '0000-00-00 00:00:00'),
(557, '524302', '1', '26', '602', 1, '2025-06-02 14:50:09', '0000-00-00 00:00:00'),
(558, '524304', '1', '26', '603', 1, '2025-06-02 14:50:28', '0000-00-00 00:00:00'),
(559, '524322', '1', '26', '604', 1, '2025-06-02 14:50:47', '0000-00-00 00:00:00'),
(560, '524142', '1', '26', '605', 1, '2025-06-02 14:51:04', '0000-00-00 00:00:00'),
(561, '524305', '1', '26', '606', 1, '2025-06-02 14:51:18', '0000-00-00 00:00:00'),
(562, '524341', '1', '26', '607', 1, '2025-06-02 14:51:34', '0000-00-00 00:00:00'),
(563, '524412', '1', '26', '609', 1, '2025-06-02 14:51:53', '0000-00-00 00:00:00'),
(564, '524403', '1', '26', '610', 1, '2025-06-02 14:52:11', '0000-00-00 00:00:00'),
(565, '524132', '1', '26', '611', 1, '2025-06-02 14:52:28', '0000-00-00 00:00:00'),
(566, '524123', '1', '26', '612', 1, '2025-06-02 14:52:47', '0000-00-00 00:00:00'),
(567, '524222', '1', '26', '613', 1, '2025-06-02 14:53:04', '0000-00-00 00:00:00'),
(568, '524101', '1', '26', '614', 1, '2025-06-02 14:53:18', '0000-00-00 00:00:00'),
(569, '524314', '1', '26', '615', 1, '2025-06-02 14:53:36', '0000-00-00 00:00:00'),
(570, '524223', '1', '26', '616', 1, '2025-06-02 14:53:52', '0000-00-00 00:00:00'),
(571, '524224', '1', '26', '617', 1, '2025-06-02 14:54:06', '0000-00-00 00:00:00'),
(572, '524343', '1', '26', '618', 1, '2025-06-02 14:54:26', '0000-00-00 00:00:00'),
(573, '524201', '1', '26', '619', 1, '2025-06-02 14:54:41', '0000-00-00 00:00:00'),
(574, '524316', '1', '26', '620', 1, '2025-06-02 14:54:56', '0000-00-00 00:00:00'),
(575, '524239', '1', '26', '621', 1, '2025-06-02 14:55:13', '0000-00-00 00:00:00'),
(576, '524137', '1', '26', '622', 1, '2025-06-02 14:57:54', '0000-00-00 00:00:00'),
(577, '524405', '1', '26', '623', 1, '2025-06-02 14:58:31', '0000-00-00 00:00:00'),
(578, '524312', '1', '26', '624', 1, '2025-06-02 14:58:48', '0000-00-00 00:00:00'),
(579, '524344', '1', '26', '625', 1, '2025-06-02 14:59:25', '0000-00-00 00:00:00'),
(580, '524126', '1', '26', '626', 1, '2025-06-02 15:32:52', '0000-00-00 00:00:00'),
(581, '524402', '1', '26', '627', 1, '2025-06-02 15:36:23', '0000-00-00 00:00:00'),
(582, '524345', '1', '26', '628', 1, '2025-06-02 15:44:34', '0000-00-00 00:00:00'),
(583, '524408', '1', '26', '629', 1, '2025-06-02 15:44:58', '0000-00-00 00:00:00'),
(584, '524308', '1', '26', '630', 1, '2025-06-02 15:45:16', '0000-00-00 00:00:00'),
(585, '524310', '1', '26', '631', 1, '2025-06-02 15:45:34', '0000-00-00 00:00:00'),
(586, '524121', '1', '26', '632', 1, '2025-06-02 15:45:50', '0000-00-00 00:00:00'),
(587, '524407', '1', '26', '633', 1, '2025-06-02 15:46:11', '0000-00-00 00:00:00'),
(588, '524401', '1', '26', '634', 1, '2025-06-02 15:46:26', '0000-00-00 00:00:00'),
(589, '524226', '1', '26', '635', 1, '2025-06-02 15:46:47', '0000-00-00 00:00:00'),
(590, '524227', '1', '26', '636', 1, '2025-06-02 15:47:09', '0000-00-00 00:00:00'),
(591, '524320', '1', '26', '637', 1, '2025-06-02 15:47:58', '0000-00-00 00:00:00'),
(592, '524318', '1', '26', '638', 1, '2025-06-02 15:50:46', '0000-00-00 00:00:00'),
(593, '524228', '1', '26', '639', 1, '2025-06-02 15:51:06', '0000-00-00 00:00:00'),
(594, '524002', '1', '26', '640', 1, '2025-06-02 15:51:24', '0000-00-00 00:00:00'),
(595, '524003', '1', '26', '641', 1, '2025-06-02 15:51:47', '0000-00-00 00:00:00'),
(596, '524001', '1', '26', '642', 1, '2025-06-02 15:52:24', '0000-00-00 00:00:00'),
(597, '524002', '1', '26', '643', 1, '2025-06-02 15:52:47', '0000-00-00 00:00:00'),
(598, '520001', '1', '29', '644', 1, '2025-06-02 15:58:57', '0000-00-00 00:00:00'),
(599, '521226', '1', '29', '645', 1, '2025-06-02 15:59:14', '0000-00-00 00:00:00'),
(600, '521182', '1', '29', '646', 1, '2025-06-02 15:59:30', '0000-00-00 00:00:00'),
(601, '521403', '1', '29', '647', 1, '2025-06-02 15:59:44', '0000-00-00 00:00:00'),
(602, '521456', '1', '29', '648', 1, '2025-06-02 16:00:01', '0000-00-00 00:00:00'),
(603, '521175', '1', '29', '649', 1, '2025-06-02 16:00:18', '0000-00-00 00:00:00'),
(604, '521180', '1', '29', '650', 1, '2025-06-02 16:00:33', '0000-00-00 00:00:00'),
(605, '521230', '1', '29', '651', 1, '2025-06-02 16:00:47', '0000-00-00 00:00:00'),
(606, '521185', '1', '29', '652', 1, '2025-06-02 16:01:10', '0000-00-00 00:00:00'),
(607, '521190', '1', '29', '653', 1, '2025-06-02 16:01:28', '0000-00-00 00:00:00'),
(608, '521215', '1', '29', '654', 1, '2025-06-02 16:01:45', '0000-00-00 00:00:00'),
(609, '521215', '1', '29', '655', 1, '2025-06-02 16:04:37', '0000-00-00 00:00:00'),
(610, '520002', '1', '29', '656', 1, '2025-06-02 16:05:03', '0000-00-00 00:00:00'),
(611, '520010', '1', '29', '657', 1, '2025-06-02 16:05:24', '0000-00-00 00:00:00'),
(612, '520012', '1', '29', '658', 1, '2025-06-02 16:05:40', '0000-00-00 00:00:00'),
(613, '521101', '1', '29', '659', 1, '2025-06-02 16:05:58', '0000-00-00 00:00:00'),
(614, '520001', '1', '29', '660', 1, '2025-06-02 16:06:36', '0000-00-00 00:00:00'),
(615, '521180', '1', '29', '661', 1, '2025-06-02 16:07:11', '0000-00-00 00:00:00'),
(616, '520010', '1', '29', '662', 1, '2025-06-02 16:07:28', '0000-00-00 00:00:00');
INSERT INTO `tbl_pincode` (`id`, `pincode`, `state_id`, `location_id`, `sub_location_id`, `status`, `created_at`, `updated_at`) VALUES
(617, '520007', '1', '29', '663', 1, '2025-06-02 16:07:43', '0000-00-00 00:00:00'),
(618, '522601', '1', '30', '664', 1, '2025-06-02 16:12:51', '0000-00-00 00:00:00'),
(619, '522020', '1', '30', '665', 1, '2025-06-02 16:13:16', '0000-00-00 00:00:00'),
(620, '522409', '1', '30', '666', 1, '2025-06-02 16:13:34', '0000-00-00 00:00:00'),
(621, '522411', '1', '30', '667', 1, '2025-06-02 16:13:50', '0000-00-00 00:00:00'),
(622, '522663', '1', '30', '668', 1, '2025-06-02 16:14:04', '0000-00-00 00:00:00'),
(623, '522616', '1', '30', '669', 1, '2025-06-02 16:14:21', '0000-00-00 00:00:00'),
(624, '522414', '1', '30', '670', 1, '2025-06-02 16:14:51', '0000-00-00 00:00:00'),
(625, '522612', '1', '30', '671', 1, '2025-06-02 16:15:09', '0000-00-00 00:00:00'),
(626, '522614', '1', '30', '672', 1, '2025-06-02 16:28:24', '0000-00-00 00:00:00'),
(627, '522410', '1', '30', '673', 1, '2025-06-02 16:28:42', '0000-00-00 00:00:00'),
(628, '522435', '1', '30', '674', 1, '2025-06-02 16:30:09', '0000-00-00 00:00:00'),
(629, '522426', '1', '30', '675', 1, '2025-06-02 16:30:27', '0000-00-00 00:00:00'),
(630, '522661', '1', '30', '676', 1, '2025-06-02 16:32:01', '0000-00-00 00:00:00'),
(631, '522234', '1', '30', '677', 1, '2025-06-02 16:32:17', '0000-00-00 00:00:00'),
(632, '522413', '1', '30', '678', 1, '2025-06-02 16:48:11', '0000-00-00 00:00:00'),
(633, '522412', '1', '30', '679', 1, '2025-06-02 16:48:27', '0000-00-00 00:00:00'),
(634, '522646', '1', '30', '680', 1, '2025-06-02 16:51:42', '0000-00-00 00:00:00'),
(635, '522613', '1', '30', '681', 1, '2025-06-02 16:51:58', '0000-00-00 00:00:00'),
(636, '522647', '1', '30', '682', 1, '2025-06-02 16:52:15', '0000-00-00 00:00:00'),
(637, '522601', '1', '30', '683', 1, '2025-06-02 16:52:43', '0000-00-00 00:00:00'),
(638, '522403', '1', '30', '684', 1, '2025-06-02 17:00:47', '0000-00-00 00:00:00'),
(639, '506006', '4', '64', '694', 1, '2025-12-19 12:24:25', '0000-00-00 00:00:00'),
(640, '508243', '4', '9', '695', 1, '2025-12-19 12:43:30', '0000-00-00 00:00:00'),
(641, '201309', '17', '72', '697', 1, '2025-12-19 15:24:37', '0000-00-00 00:00:00'),
(642, '201309', '17', '72', '697', 1, '2025-12-19 15:47:23', '0000-00-00 00:00:00'),
(643, '500084', '4', '35', '699', 1, '2025-12-19 16:12:02', '0000-00-00 00:00:00'),
(644, '501511', '4', '58', '698', 1, '2025-12-19 17:08:19', '0000-00-00 00:00:00'),
(645, '500008', '4', '35', '700', 1, '2025-12-19 17:11:07', '0000-00-00 00:00:00'),
(646, '506001', '4', '33', '44', 1, '2025-12-22 15:19:53', '0000-00-00 00:00:00'),
(647, '500069', '4', '58', '701', 1, '2025-12-27 11:51:01', '0000-00-00 00:00:00'),
(648, '524121', '1', '73', '712', 1, '2026-01-03 13:16:49', '0000-00-00 00:00:00'),
(650, '505001', '4', '40', '714', 1, '2026-01-10 18:49:14', '0000-00-00 00:00:00'),
(651, '534101', '1', '75', '715', 1, '2026-01-22 12:48:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prices`
--

CREATE TABLE `tbl_prices` (
  `id` int NOT NULL,
  `service_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `service_category` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_prices`
--

INSERT INTO `tbl_prices` (`id`, `service_name`, `service_category`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'New & Duplicate & Updation of PAN Card', '1', 177, 1, '2026-03-07 10:25:01', '2026-03-07 10:30:56'),
(2, 'ADHAAR Address Change', '13', 177, 1, '2026-03-07 10:29:25', '2026-04-22 12:29:25'),
(3, 'Labour Licence with 0 Employees of Telangana', '8', 472, 1, '2026-03-07 11:09:12', '0000-00-00 00:00:00'),
(4, 'Udyam Registration', '8', 200, 1, '2026-03-10 17:55:10', '2026-04-22 12:16:04'),
(5, 'Death & Birth Certificate Registrations', '4', 200, 1, '2026-03-10 18:07:38', '0000-00-00 00:00:00'),
(6, 'Driving License Registration', '5', 350, 1, '2026-03-10 18:08:48', '0000-00-00 00:00:00'),
(7, 'Income Certificate Registration', '1', 200, 1, '2026-03-10 18:13:00', '0000-00-00 00:00:00'),
(8, 'GST Registrations Package ', '6', 1416, 1, '2026-03-25 22:27:41', '0000-00-00 00:00:00'),
(9, 'GST NUMBER WITH QUARTER GST RETURN FILING PACKAGE (GSTR 1 - 3B )', '7', 1180, 1, '2026-03-25 23:01:40', '2026-03-26 21:40:49'),
(10, 'GSTIN MODIFICATION', '7', 354, 1, '2026-03-26 12:05:16', '0000-00-00 00:00:00'),
(11, 'GSTIN CANCELLATION / SURRENDER', '7', 354, 1, '2026-03-26 12:05:58', '0000-00-00 00:00:00'),
(12, 'GSTIN RETURN FILING - GSTR -3B', '7', 354, 1, '2026-03-26 12:06:25', '0000-00-00 00:00:00'),
(13, 'GSTIN RETURN FILING - GSTR -I & 3B', '7', 767, 1, '2026-03-26 12:07:01', '0000-00-00 00:00:00'),
(14, 'GSTIN RETURN FILING - CMP-08', '7', 472, 1, '2026-03-26 12:07:29', '0000-00-00 00:00:00'),
(15, 'GSTIN RETURN FILING - YEARLY PACKAGE (2GSTR 1 &6 GSTR 3B )8RETURNS', '7', 2478, 1, '2026-03-26 12:08:27', '2026-03-26 12:18:52'),
(16, 'GSTIN RETURN FILING - YEARLY PACKAGE (4 GSTR 1 &12 GSTR 3B )16RETURNS', '7', 4130, 1, '2026-03-26 12:16:14', '0000-00-00 00:00:00'),
(17, 'GSTIN  RETURN FILING - YEARLY PACKAGE (12 GSTR 1 & 12 GSTR 3B )24 RETURNS', '7', 5900, 1, '2026-03-26 12:24:08', '2026-03-26 21:52:27'),
(18, 'GST RETURN FILING - GSTR - 4 (ANNUAL RETURN)', '7', 767, 1, '2026-03-26 21:28:49', '0000-00-00 00:00:00'),
(19, 'GST RETURN FILING - GSTR - 9 (ANNUAL RETURN)', '7', 1947, 1, '2026-03-26 21:32:12', '0000-00-00 00:00:00'),
(20, 'GST RETURN FILING - GSTR - 9 (GST AUDIT)', '7', 16520, 1, '2026-03-26 21:33:26', '0000-00-00 00:00:00'),
(21, 'GST RETURN FILING - GSTR - 10 (FINAL RETURN)', '7', 767, 1, '2026-03-26 21:34:18', '0000-00-00 00:00:00'),
(22, 'GST NUMBER WITH YEAR GST FILING PACKAGE (GSTR1 - 3B )', '7', 4130, 1, '2026-03-26 22:03:49', '0000-00-00 00:00:00'),
(23, 'GST RETURN FILING - HALF YEARLY PACKAGE (GSTR 1&3B ) 12 RETURNS', '7', 4130, 1, '2026-03-26 22:06:46', '0000-00-00 00:00:00'),
(24, 'GST RETURN FILING - GSTR - 9C (GST AUDIT )', '7', 16520, 1, '2026-03-26 22:10:28', '0000-00-00 00:00:00'),
(25, 'REPLY TO GST NOTICE ', '7', 1416, 1, '2026-03-26 22:13:59', '0000-00-00 00:00:00'),
(26, ' E=WAY BILL GENERATION', '7', 118, 1, '2026-03-26 22:40:00', '0000-00-00 00:00:00'),
(27, 'E - WAY BILL REGISTRATION', '7', 177, 1, '2026-03-26 22:40:40', '0000-00-00 00:00:00'),
(28, 'REVOCATION OF GST NUMBER CANCELLATION', '7', 1416, 1, '2026-03-26 22:41:45', '0000-00-00 00:00:00'),
(29, 'LUT', '7', 354, 1, '2026-03-26 22:42:53', '0000-00-00 00:00:00'),
(30, 'UDHYAM (MSME REGISTRATION)', '8', 354, 1, '2026-03-27 11:14:11', '0000-00-00 00:00:00'),
(31, 'TRADEMARK REGISTRATION', '8', 1947, 1, '2026-03-27 14:58:46', '0000-00-00 00:00:00'),
(32, 'SHOP ACT LICENSE', '8', 767, 1, '2026-03-27 15:59:11', '0000-00-00 00:00:00'),
(33, 'DRUG LICENSE', '8', 4130, 1, '2026-03-27 16:24:54', '0000-00-00 00:00:00'),
(34, 'TOBACCO LICENSE', '8', 4130, 1, '2026-03-27 16:40:06', '0000-00-00 00:00:00'),
(35, 'FERTILIZER SALE LICENSE', '8', 4130, 1, '2026-03-27 17:01:40', '0000-00-00 00:00:00'),
(36, 'TRADE LICENSE', '8', 1416, 1, '2026-03-27 17:08:24', '0000-00-00 00:00:00'),
(37, 'START - UP INDIA REGISTRATION', '8', 1416, 1, '2026-03-27 18:26:31', '0000-00-00 00:00:00'),
(38, 'CENTRAL LABOUR LICENSE', '8', 2006, 1, '2026-03-27 18:41:05', '0000-00-00 00:00:00'),
(39, 'IMPORT EXPORT CODE', '8', 2006, 1, '2026-03-27 18:47:30', '0000-00-00 00:00:00'),
(40, 'HALLMARK', '8', 1416, 1, '2026-03-28 17:05:51', '0000-00-00 00:00:00'),
(41, 'EPF + ESIC REGISTATION COMBO', '8', 4720, 1, '2026-03-28 17:07:18', '0000-00-00 00:00:00'),
(42, 'EPF REGISTRATION', '8', 2773, 1, '2026-03-28 17:08:54', '0000-00-00 00:00:00'),
(43, 'MSME DATA BANK REGISTRATION', '8', 1416, 1, '2026-03-28 17:26:01', '0000-00-00 00:00:00'),
(44, 'ESIC REGISTRATION', '8', 2773, 1, '2026-03-28 17:30:59', '0000-00-00 00:00:00'),
(45, 'EPF WITHDRAWAL', '8', 767, 1, '2026-03-28 17:50:28', '0000-00-00 00:00:00'),
(46, 'MUDRA LOAN APPLICATION', '12', 1180, 1, '2026-03-28 18:16:36', '2026-04-22 12:28:23'),
(47, 'CIBIL REPORT', '12', 354, 1, '2026-03-28 18:18:23', '2026-04-22 12:27:04'),
(48, 'PASSPORT APPLICATION', '13', 354, 1, '2026-03-28 18:28:27', '2026-04-22 12:30:52'),
(49, 'DRIVING LICENSE APPLICATION', '8', 590, 1, '2026-03-28 18:29:23', '2026-04-22 12:25:05'),
(50, 'LEARNERS LICENSE APPLICATION', '13', 590, 1, '2026-03-28 18:30:34', '2026-04-22 12:30:15'),
(51, 'Rental Agreement with 50/- Stamp Paper', '11', 350, 1, '2026-04-22 12:22:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rbh_users`
--

CREATE TABLE `tbl_rbh_users` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alias_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `firstName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Phone_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `birth_date` date NOT NULL,
  `alternative_mobile_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branch_state_name_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branch_location_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `bank_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `account_type_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `office_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `residential_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `aadhaar_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pan_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `account_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ifsc_code` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `rank` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int DEFAULT '1',
  `reportingTo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pan_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `aadhaar_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `photo_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `bankproof_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `resume_file` text COLLATE utf8mb4_general_ci NOT NULL,
  `data_icons` text COLLATE utf8mb4_general_ci NOT NULL,
  `work_icons` text COLLATE utf8mb4_general_ci NOT NULL,
  `ref_name_1` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_relation_1` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_mobile_1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_address_1` text COLLATE utf8mb4_general_ci NOT NULL,
  `ref_name_2` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_relation_2` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_mobile_2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_address_2` text COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_general_ci NOT NULL,
  `department_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `designation_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `createdBy` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rbh_users`
--

INSERT INTO `tbl_rbh_users` (`id`, `username`, `alias_name`, `firstName`, `lastName`, `password`, `Phone_number`, `email_id`, `birth_date`, `alternative_mobile_number`, `company_name`, `branch_state_name_id`, `branch_location_id`, `bank_id`, `account_type_id`, `office_address`, `residential_address`, `aadhaar_number`, `pan_number`, `account_number`, `ifsc_code`, `rank`, `status`, `reportingTo`, `pan_img`, `aadhaar_img`, `photo_img`, `bankproof_img`, `resume_file`, `data_icons`, `work_icons`, `ref_name_1`, `ref_relation_1`, `ref_mobile_1`, `ref_address_1`, `ref_name_2`, `ref_relation_2`, `ref_mobile_2`, `ref_address_2`, `avatar`, `department_id`, `designation_id`, `user_id`, `createdBy`, `created_at`, `updated_at`) VALUES
(1, '1111', 'NAMBOORI', 'Test ', 'RBH 1', '12345678', '9876543210', 'test@gmail.com', '1990-06-24', '1234556777', 'comp 1', '4', '9', '4', '1', 'as', 'fsd', '3222254555', 'afd', '4456 8734 2316', 'CNRB0003507', 'RBHUser', 1, '14279', '18132915-22151746-whatsapp-image-2025-02-18-at-2.42.55-pm-(1).jpeg', '07161429-13160238-1742110519_energy.png', '18133338-21153500-14143909-fitness.png', '18133404-21152426-1.png', '18132915-22151249-logo-(2).png', '[\"1\",\"4\"]', '[\"7\",\"6\",\"5\"]', 'R name  1', 'R friend', '8000000000', 'dfgh', 'ffaaa 1', 'f friend 1', '9878787878', 'fdghjk', '', '', '', '', '14279', '2025-06-18 13:29:15', '2025-11-22 16:34:14'),
(2, '22222', 'test2', 'Test ', '2', '12345678', '9876543210', 'test2@gmail.com', '0000-00-00', '1234556777', 'comp  2', '4', '7', '6', '3', 'fd', 'fddddddd', '3222254555', 'AFPPB2715P', '100000000000001', 'SBI5645TD', 'RBHUser', 1, '1111', '18150604-21152426-1.png', '18151806-28124854-10144301-favicon.jpeg', '18150604-21153500-14143909-fitness.png', '18151909-21152339-13175142-graphic-designing.png', '18152025-28124854-10144301-favicon.jpeg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '14279', '2025-06-18 15:06:04', '2025-06-18 15:20:25'),
(3, '1234', 'NAMBOORI', 'Test ', '3', '12345678', '9876543210', 'test@gmail.com', '0000-00-00', '1234556777', 'ds', '2', '16', '10', '4', 'q', 'w', '3222254555', 'aer324q', '4456 8734 2316', 'CNRB0003507', 'RBHUser', 1, '1000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1000', '2025-06-18 18:25:39', '2025-07-15 15:37:04'),
(4, 'RBH10004', 'NAMBOORI', 'Test ', '4', '12345678', '9876543210', 'test@gmail.com', '0000-00-00', '1234556777', 'comp 1', '4', '6', '13', '6', 'sss', 'dddd', '3222254555', 'aer324q', '4456 8734 2316', 'CNRB0003507', 'RBHUser', 1, '1111', '', '', '', '', '', '', '', 'saaaa', 'friend', '9999999999', 'xvv', 'ridhi', 'f friend 1', '9878787878', 'dfghhhhh', '', '', '', '', '14279', '2025-08-18 16:42:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_retail_user`
--

CREATE TABLE `tbl_retail_user` (
  `id` int NOT NULL,
  `username` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `firstName` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastName` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobile` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_id` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `employee_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `department_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `designation_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `anniversary_date` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `branch_state_name_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `branch_location_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `present_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `permanent_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `status` varchar(15) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  `userRank` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `avatar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `acc_holder_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bank_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `branch_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_number` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ifsc_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bank_passbook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `passport_document` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `aadhar_document` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `aadhar_back_document` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `pancard_document` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `reportingTo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `official_phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `official_email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `work_state` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `work_location` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `residential_address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `office_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `pan_number` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadhaar_number` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `manage_icons` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `data_icons` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `work_icons` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `payout_icons` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `last_working_date` date DEFAULT NULL,
  `leaving_reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `re_joining_date` date DEFAULT NULL,
  `ref_name_1` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_relation_1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_mobile_1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_address_1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `ref_name_2` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_relation_2` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_mobile_2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_address_2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `createdBy` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_retail_user`
--

INSERT INTO `tbl_retail_user` (`id`, `username`, `firstName`, `lastName`, `mobile`, `email_id`, `password`, `employee_no`, `department_id`, `designation_id`, `birth_date`, `anniversary_date`, `branch_state_name_id`, `branch_location_id`, `present_address`, `permanent_address`, `status`, `userRank`, `avatar`, `acc_holder_name`, `bank_name`, `account_type`, `branch_name`, `account_number`, `ifsc_code`, `bank_passbook`, `passport_document`, `aadhar_document`, `aadhar_back_document`, `pancard_document`, `reportingTo`, `official_phone`, `official_email`, `work_state`, `work_location`, `residential_address`, `office_address`, `pan_number`, `aadhaar_number`, `manage_icons`, `data_icons`, `work_icons`, `payout_icons`, `last_working_date`, `leaving_reason`, `re_joining_date`, `ref_name_1`, `ref_relation_1`, `ref_mobile_1`, `ref_address_1`, `ref_name_2`, `ref_relation_2`, `ref_mobile_2`, `ref_address_2`, `createdBy`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Test', '1', '9876543210', 'test@gmail.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Retailer', 'https://crm.k-seva.com/backPanel/uploads/retail_user/retailer_1_1778771826.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-14 11:50:05', NULL),
(2, NULL, 'K RAJESH', 'KUMAR', '9000003004', 'kurakulas2008@gmail.com', 'Rajesh@123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Retailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-15 05:49:06', NULL),
(5, NULL, 'ravci', 'kumar', '8367763886', 'mailx43@gmail.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Retailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-25 07:09:57', NULL),
(6, NULL, 'KULDEEP', 'SINGH', '8218127794', 'kuldeep6640@gmail.com', 'Kuldeep@123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-30 12:01:36', NULL),
(7, NULL, 'LINGALA', 'PRASAD', '9490190009', 'prasadlingala3332@gmail.com', 'Leya@7855', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2026-06-02 07:28:22', NULL),
(8, NULL, 'test', 't', '9988776600', 'usertest@gmai.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2026-06-09 10:53:22', NULL),
(9, NULL, 'testing', 't', '8899007766', 'testing@gmail.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2026-06-09 11:14:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sdsa_emp_users`
--

CREATE TABLE `tbl_sdsa_emp_users` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alias_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `firstName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Phone_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `birth_date` date NOT NULL,
  `alternative_mobile_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branch_state_name_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branch_location_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `bank_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `account_type_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `office_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `residential_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `aadhaar_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `pan_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `account_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ifsc_code` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `rank` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int DEFAULT '1',
  `reportingTo` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `employee_no` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branchstate` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branchloaction` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `bank_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `account_type` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pan_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `aadhaar_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `photo_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `bankproof_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `resume_file` text COLLATE utf8mb4_general_ci NOT NULL,
  `data_icons` text COLLATE utf8mb4_general_ci NOT NULL,
  `work_icons` text COLLATE utf8mb4_general_ci NOT NULL,
  `ref_name_1` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_relation_1` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_mobile_1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_address_1` text COLLATE utf8mb4_general_ci NOT NULL,
  `ref_name_2` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_relation_2` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_mobile_2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_address_2` text COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_general_ci NOT NULL,
  `department_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `designation_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `createdBy` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sdsa_emp_users`
--

INSERT INTO `tbl_sdsa_emp_users` (`id`, `username`, `alias_name`, `firstName`, `lastName`, `password`, `Phone_number`, `email_id`, `birth_date`, `alternative_mobile_number`, `company_name`, `branch_state_name_id`, `branch_location_id`, `bank_id`, `account_type_id`, `office_address`, `residential_address`, `aadhaar_number`, `pan_number`, `account_number`, `ifsc_code`, `rank`, `status`, `reportingTo`, `employee_no`, `department`, `designation`, `branchstate`, `branchloaction`, `bank_name`, `account_type`, `pan_img`, `aadhaar_img`, `photo_img`, `bankproof_img`, `resume_file`, `data_icons`, `work_icons`, `ref_name_1`, `ref_relation_1`, `ref_mobile_1`, `ref_address_1`, `ref_name_2`, `ref_relation_2`, `ref_mobile_2`, `ref_address_2`, `avatar`, `department_id`, `designation_id`, `user_id`, `createdBy`, `created_at`, `updated_at`) VALUES
(1, 'testsdsa1@gmail.com', 'alias 1', 'Test SDSA', '1', '12345678', '9876543210', 'testsdsa1@gmail.com', '1998-12-25', '3333333333', 'comp 1', '4', '8', '1', '1', 'Ameerpet, Hyderabad', 'Ameerpet', '345654', '432dg45', '4456 8734 2316', 'SBI65ERDF', 'SDSAUser', 1, 'testdemo1@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '[\"1\"]', '[\"7\",\"3\"]', 'R name  1', 'R friend 1', '8000000000', 'hyd 1', 'ffaaa 1', 'f friend 1', '9878787878', 'hyd 2', '', '', '', '', 'testdemo1@gmail.com', '2025-07-18 16:00:35', '2025-11-22 17:29:18'),
(2, 'testsdsa2@gmail.com', 'alias 1', 'Test SDSA', '2', '12345678', '2147483647', 'testsdsa2@gmail.com', '0000-00-00', '2147483647', 'comp 1', '4', '', '4', '4', 'Ameerpet, Hyderabad', 'Ameerpet', '345654', '432dg45', '2147483647', 'SBI65ERDF', 'SDSAUser', 1, 'testsdsa1@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '[\"7\",\"5\",\"6\"]', '', '', '', '', '', '', '', '', '', '', '', '', 'testdemo1@gmail.com', '2025-07-18 16:02:07', '0000-00-00 00:00:00'),
(3, 'testsdsa2@gmail.com', 'alias 1', 'Test SDSA', '3', '12345678', '2147483647', 'testsdsa3@gmail.com', '0000-00-00', '2147483647', 'comp 1', '4', '', '4', '4', 'Ameerpet, Hyderabad', 'Ameerpet', '345654', '432dg45', '2147483647', 'SBI65ERDF', 'SDSAUser', 1, 'testsdsa2@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '[\"1\"]', '[\"7\",\"6\"]', '', '', '', '', '', '', '', '', '', '', '', '', 'testdemo2@gmail.com', '2025-07-18 16:02:07', '0000-00-00 00:00:00'),
(4, 'testsdsa3@gmail.com', 'alias 1', 'Test SDSA', '3', '12345678', '2147483647', 'testsdsa3@gmail.com', '0000-00-00', '2147483647', 'comp 1', '4', '', '4', '4', 'Ameerpet, Hyderabad', 'Ameerpet', '345654', '432dg45', '2147483647', 'SBI65ERDF', 'SDSAUser', 1, 'testsdsa3@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'testsdsa3@gmail.com', '2025-07-18 16:02:07', '0000-00-00 00:00:00'),
(5, 'testsdsa5@gmail.com', 'test2', 'Test ', '5', '12345678', '2147483647', 'testsdsa5@gmail.com', '0000-00-00', '0', '', '', '', '', '', '', '', '0', '', '0', '', 'SDSAUser', 1, 'testdemo1@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '[\"1\",\"4\"]', '[\"3\"]', 'R name  1', 'R friend 1', '9999999999', 'hyd 1', 'ffaaa 1', 'f friend 1', '9878787800', 'hyd 2', '', '', '', '', 'testdemo1@gmail.com', '2025-08-19 16:40:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sdsa_users`
--

CREATE TABLE `tbl_sdsa_users` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alias_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `firstName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Phone_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alternative_mobile_number` int NOT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branch_state_name_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branch_location_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `birth_date` date NOT NULL,
  `bank_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `account_type_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `office_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `residential_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `aadhaar_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pan_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `account_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ifsc_code` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `rank` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int DEFAULT '1',
  `reportingTo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `employee_no` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `department_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `designation_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branchstate` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branchloaction` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `bank_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `account_type` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pan_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `aadhaar_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_general_ci NOT NULL,
  `bankproof_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `company_logo` text COLLATE utf8mb4_general_ci NOT NULL,
  `data_icons` text COLLATE utf8mb4_general_ci NOT NULL,
  `work_icons` text COLLATE utf8mb4_general_ci NOT NULL,
  `payout_icons` text COLLATE utf8mb4_general_ci NOT NULL,
  `ref_name_1` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_relation_1` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_mobile_1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_address_1` text COLLATE utf8mb4_general_ci NOT NULL,
  `ref_name_2` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_relation_2` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_mobile_2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_address_2` text COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `createdBy` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sdsa_users`
--

INSERT INTO `tbl_sdsa_users` (`id`, `username`, `alias_name`, `firstName`, `lastName`, `password`, `Phone_number`, `email_id`, `alternative_mobile_number`, `company_name`, `branch_state_name_id`, `branch_location_id`, `birth_date`, `bank_id`, `account_type_id`, `office_address`, `residential_address`, `aadhaar_number`, `pan_number`, `account_number`, `ifsc_code`, `rank`, `status`, `reportingTo`, `employee_no`, `department_id`, `designation_id`, `branchstate`, `branchloaction`, `bank_name`, `account_type`, `pan_img`, `aadhaar_img`, `avatar`, `bankproof_img`, `company_logo`, `data_icons`, `work_icons`, `payout_icons`, `ref_name_1`, `ref_relation_1`, `ref_mobile_1`, `ref_address_1`, `ref_name_2`, `ref_relation_2`, `ref_mobile_2`, `ref_address_2`, `user_id`, `createdBy`, `created_at`, `updated_at`) VALUES
(1, 'testdemo1@gmail.com', 'alias 1', 'Test ', 'Demo 1', '123456', '9000003004', 'testdemo1@gmail.com', 2147483647, 'comp 1', '4', '6', '1990-09-28', '9', '1', 'Ameerpet, Hyderabad', 'Ameerpet', '6789876576', '432dg45', '100000000000001', 'SBI109T', 'SDSA', 1, '12', '', '', '', '', '', '9', '1', '07091038-22151440-demo.pdf', '', '07091038-22152252-graphic-designing.png', '', '07091038-22151746-whatsapp-image-2025-02-18-at-2.42.55-pm-(1).jpeg', '[\"1\",\"4\"]', '[\"8\",\"7\",\"3\"]', '[\"4\",\"1\"]', 'saaaa', 's friend', '8000000088', 'fdghjk', 'ffaaa 1', 'f friend 1', '9878787878', 'rtyjh', '', 'krajeshk', '2025-06-07 09:10:38', '2025-11-03 17:05:27'),
(2, 'test2@gmail.com', 'Alias Name 2', 'Test ', '2', '123456', '9000003004', 'test2@gmail.com', 1234556777, 'comp 1', '4', '9', '2000-04-07', '7', '1', 'Hyd 1', 'Hyd 2', '3222254555', 'AQLPK5574A', '4456 8734 2316', 'CNRB0003507', 'SDSA', 1, '12', '', '', '', '', '', '7', '1', '', '', '07091344-1749204943-1742110519_energy.png', '', '07091344-28124457-10144223-favicon.jpeg', '[\"4\"]', '', '', '', '', '', '', '', '', '', '', '', 'krajeshk', '2025-06-07 09:13:44', '2025-09-23 15:33:05'),
(3, 'testdemo2@gmail.com', '', 'Test ', 'Demo 2', '12345678', '9000003004', 'testdemo2@gmail.com', 0, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'SDSA', 1, '33', '', '', '', '', '', '', '', '07091038-22151440-demo.pdf', '', '07091038-22152252-graphic-designing.png', '', '07091038-22151746-whatsapp-image-2025-02-18-at-2.42.55-pm-(1).jpeg', '[\"1\",\"4\"]', '[\"7\",\"5\",\"6\"]', '[\"4\",\"1\"]', '', '', '', '', '', '', '', '', '', 'krajeshk', '2025-06-07 09:10:38', '0000-00-00 00:00:00'),
(4, 'test1@gmail.com', 'Alias Name 2', 'Test ', '1', '123456', '9000003004', 'test1@gmail.com', 1234556777, '', '', '', '0000-00-00', '', '', 'Hyd 1', 'Hyd 2', '3222254555', 'AQLPK5574A', '4456 8734 2316', 'CNRB0003507', 'SDSA', 1, '12', '', '', '', '', '', '7', '1', '', '', '07091344-1749204943-1742110519_energy.png', '', '07091344-28124457-10144223-favicon.jpeg', '', '', '[\"3\"]', '', '', '', '', '', '', '', '', '', 'krajeshk', '2025-06-07 09:13:44', '2025-07-19 16:17:22'),
(5, 'test3@gmail.com', 'Alias Name 2', 'Test ', '3', '123456', '9000003004', 'test3@gmail.com', 1234556777, 'comp 1', '4', '6', '0000-00-00', '7', '1', 'Hyd 1', 'Hyd 2', '3222254555', 'AQLPK5574A', '4456 8734 2316', 'CNRB0003507', 'SDSA', 1, '8', '', '', '', '', '', '7', '1', '', '', '07091344-1749204943-1742110519_energy.png', '', '07091344-28124457-10144223-favicon.jpeg', '[\"1\"]', '', '', 'R name  1', 'R friend ', '8000000088', 'hyd 1', 'ridhi', 'f friend 1', '9878787878', 'hyd 2', '', 'krajeshk', '2025-06-07 09:13:44', '2025-08-19 15:35:49'),
(9, 'testsdsa2@gmail.com', 'alias 2', 'Test ', 'Demo 2', '123456', '9000003004', 'testsdsa2@gmail.com', 2147483647, 'comp 1', '4', '6', '0000-00-00', '9', '1', 'Ameerpet, Hyderabad', 'Ameerpet', '6789876576', '432dg45', '100000000000001', 'SBI109T', 'SDSA', 1, '19', '', '', '', '', '', '9', '1', '07091038-22151440-demo.pdf', '', '07091038-22152252-graphic-designing.png', '', '07091038-22151746-whatsapp-image-2025-02-18-at-2.42.55-pm-(1).jpeg', '[\"1\",\"4\"]', '[\"7\",\"5\",\"6\"]', '[\"4\",\"1\"]', '', '', '', '', '', '', '', '', '', 'krajeshk', '2025-06-07 09:10:38', '2025-07-19 15:04:52'),
(10, 'testsdsa4@gmail.com', 'test2', 'Test ', '4', '12345678', '9876543210', 'testsdsa4@gmail.com', 2147483647, 'comp  2', '4', '9', '0000-00-00', '10', '3', 'fddf', 'fdgdg', '3222254555', 'AFPPB2715P', '445687342316', 'SBI5645TD', 'SDSA', 1, '8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'saaaa', 's friend', '8000000000', 'hyd 1', 'ffaaa 1', 'f friend 1', '9878787878', 'hyd 2', '', 'krajeshk', '2025-08-19 15:17:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int NOT NULL,
  `service_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `service_type` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `service_image` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `service_name`, `service_type`, `service_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Aadhaar Verification And Updation', '3', '69aebebb6d43d.png', 1, '2026-03-07 15:09:09', '2026-03-09 18:06:11'),
(2, 'Death & Birth Certificate Registrations', '4', '69aec09ae737c.png', 1, '2026-03-07 15:22:54', '2026-03-09 18:14:10'),
(3, 'Â Driving License Registration ', '5', '69aec4b621df3.png', 1, '2026-03-07 15:25:20', '2026-03-09 18:31:42'),
(4, 'Â Family Member Certificate  TS', '4', '69aec7563f430.png', 1, '2026-03-07 15:29:27', '2026-03-09 18:42:54'),
(5, 'Aadhaar PAN Link', '3', '69afc754c637e.png', 1, '2026-03-07 15:32:59', '2026-03-10 12:55:08'),
(6, 'Â Ration Card Verification And Updation ', '8', '69aecaf89a006.png', 1, '2026-03-07 15:34:32', '2026-03-09 18:58:24'),
(7, 'Â Trade License Registration ', '9', '69afb63b908b2.png', 1, '2026-03-07 15:36:00', '2026-03-10 11:42:11'),
(8, 'Â Udhyam Registration', '10', '69afb7172022a.png', 1, '2026-03-07 15:37:25', '2026-03-10 11:45:51'),
(9, 'Labour License Department Of Telangana', '2', '69afbb0f2eeb5.png', 1, '2026-03-09 13:23:30', '2026-03-10 12:02:47'),
(10, 'PAYSWITCH CREDIT CARD SERVICE\'S', '12', '69ae9c7c79127.jpg', 1, '2026-03-09 15:40:04', '0000-00-00 00:00:00'),
(11, 'Agreement Of Sale', '13', '69afc0df158eb.png', 1, '2026-03-10 12:27:35', '0000-00-00 00:00:00'),
(12, 'Stamp Papers', '14', '69afc24e5abc7.png', 1, '2026-03-10 12:33:42', '0000-00-00 00:00:00'),
(13, 'EC (Encumbrance Certificate)', '15', '69afc57f163ca.png', 1, '2026-03-10 12:47:19', '0000-00-00 00:00:00'),
(14, 'GST', '1', '69afc6377947c.png', 1, '2026-03-10 12:50:23', '0000-00-00 00:00:00'),
(15, 'Pan Verification And Updation', '3', '69afc795127bb.png', 1, '2026-03-10 12:56:13', '0000-00-00 00:00:00'),
(16, 'Rental Agreement', '16', '69afc8bcdf808.png', 1, '2026-03-10 13:01:08', '0000-00-00 00:00:00'),
(17, 'Personal Loans ', '17', '69afc96168d90.png', 1, '2026-03-10 13:03:53', '0000-00-00 00:00:00'),
(18, 'TAN REGISTRATION', '18', '69c26b1cd72fc.png', 1, '2026-03-24 16:14:44', '0000-00-00 00:00:00'),
(19, 'INCOME CERTIFICATE', '4', '69c26d294de3a.png', 1, '2026-03-24 16:23:29', '0000-00-00 00:00:00'),
(20, 'DSC Services', '20', '69c396e722a50.png', 1, '2026-03-25 13:33:51', '0000-00-00 00:00:00'),
(21, 'GST Registrations Package ', '21', '69c41b59cd047.png', 1, '2026-03-25 22:58:57', '0000-00-00 00:00:00'),
(22, 'GSTIN MODIFICATION', '21', '69c4cfbd9e832.png', 1, '2026-03-26 11:48:37', '0000-00-00 00:00:00'),
(23, 'GSTIN CANCELLATION / SURRENDER', '21', '69c4cff9f1c64.png', 1, '2026-03-26 11:49:37', '0000-00-00 00:00:00'),
(24, 'GSTIN RETURN FILING - GSTR -3B', '21', '69c4d038f3b61.png', 1, '2026-03-26 11:50:40', '0000-00-00 00:00:00'),
(25, 'GSTIN RETURN FILING - GSTR -I & 3B', '21', '69c4d061c9f89.png', 1, '2026-03-26 11:51:21', '0000-00-00 00:00:00'),
(26, 'GSTIN RETURN FILING - CMP-08', '21', '69c4d0b027cd9.png', 1, '2026-03-26 11:52:40', '0000-00-00 00:00:00'),
(27, 'GSTIN RETURN FILING - YEARLY PACKAGE (4 GSTR 1 &12 GSTR 3B )16RETURNS', '21', '69c4d1242d400.png', 1, '2026-03-26 11:54:36', '2026-03-26 12:09:22'),
(28, 'GSTIN RETURN FILING - YEARLY PACKAGE (2GSTR 1 &6 GSTR 3B )8RETURNS', '21', '69c4d18274f0e.png', 1, '2026-03-26 11:56:10', '0000-00-00 00:00:00'),
(29, 'GSTIN RETURN FILING - YEARLY PACKAGE ( 12 GSTR 1 &12 GSTR 3B )24RETURNS', '21', '69c4d1be67bbf.png', 1, '2026-03-26 11:57:10', '0000-00-00 00:00:00'),
(30, 'GSTIN RETURN FILING - HALF YEARLY PACKAGE (GSTR 1 &3B)12 RETURAN', '21', '69c4d210dbcba.png', 1, '2026-03-26 11:58:32', '0000-00-00 00:00:00'),
(31, 'GST RETURN FILING - GSTR -4 (ANNUAL RETURN)', '21', '69c4d25d82ac0.png', 1, '2026-03-26 11:59:49', '0000-00-00 00:00:00'),
(32, 'GST RETURN FILING - GSTR -9 (ANNUAL RETURN)', '21', '69c4d2803e0f6.png', 1, '2026-03-26 12:00:24', '0000-00-00 00:00:00'),
(33, 'GST RETURN FILING - GSTR -9C (GST AUDIT)', '21', '69c4d2cc631a8.png', 1, '2026-03-26 12:01:40', '0000-00-00 00:00:00'),
(34, 'GST RETURN FILING - GSTR -10 (FINAL RETURN', '21', '69c4d312eeeff.png', 1, '2026-03-26 12:02:50', '0000-00-00 00:00:00'),
(35, 'REPLY TO GST NOTICE', '21', '69c56594d5408.png', 1, '2026-03-26 22:27:56', '0000-00-00 00:00:00'),
(36, 'REVOCATION OF  GST NUMBER CANCELLATION ', '21', '69c5675924946.png', 1, '2026-03-26 22:35:29', '0000-00-00 00:00:00'),
(37, 'E=WAY BILL REGISTRATION ', '21', '69c56781955ac.png', 1, '2026-03-26 22:36:09', '0000-00-00 00:00:00'),
(38, 'E=WAY BILL  GENERATION', '21', '69c567b6bdb74.png', 1, '2026-03-26 22:37:02', '0000-00-00 00:00:00'),
(39, 'LUT', '21', '69c567cad9056.png', 1, '2026-03-26 22:37:22', '0000-00-00 00:00:00'),
(40, 'DSC - CLASS 3- 3YEARS - SIGNING', '29', '69c56b721800f.png', 1, '2026-03-26 22:52:58', '0000-00-00 00:00:00'),
(41, 'UDHYAM (MSME REGISTRATION)', '30', '69c6174d50430.png', 1, '2026-03-27 11:06:13', '0000-00-00 00:00:00'),
(42, 'TRADEMARK REGISTRATION', '30', '69c64d898fb13.png', 1, '2026-03-27 14:57:37', '0000-00-00 00:00:00'),
(43, 'SHOP ACT LICENSE', '30', '69c6520514b25.png', 1, '2026-03-27 15:16:45', '0000-00-00 00:00:00'),
(44, 'DRUG LICENSE', '30', '69c661cb2bb97.png', 1, '2026-03-27 16:24:03', '2026-03-27 16:24:28'),
(45, 'TOBACCO LICENSE', '30', '69c66578f28e6.png', 1, '2026-03-27 16:39:44', '0000-00-00 00:00:00'),
(46, 'FERTILIZER SALE LICENSE', '30', '69c66a86955f0.png', 1, '2026-03-27 17:01:18', '0000-00-00 00:00:00'),
(47, 'TRADE LICENSE', '30', '69c66bf1b72bc.png', 1, '2026-03-27 17:07:21', '0000-00-00 00:00:00'),
(48, 'START - UP INDIA REGISTRATION', '30', '69c67e63b8fdd.png', 1, '2026-03-27 18:26:03', '0000-00-00 00:00:00'),
(49, 'CENTRAL LABOUR LICENSE', '30', '69c681ca65d9e.png', 1, '2026-03-27 18:40:34', '0000-00-00 00:00:00'),
(50, 'IMPORT EXPORT CODE', '30', '69c6834720924.png', 1, '2026-03-27 18:46:55', '0000-00-00 00:00:00'),
(51, 'HALLMARK', '30', '69c7bd00ebb03.png', 1, '2026-03-28 17:05:28', '0000-00-00 00:00:00'),
(52, 'EPF + ESIC REGISTATION COMBO', '30', '69c7bd585f8f3.png', 1, '2026-03-28 17:06:56', '0000-00-00 00:00:00'),
(53, 'EPF REGISTRATION', '30', '69c7bdb6bb18d.png', 1, '2026-03-28 17:08:30', '0000-00-00 00:00:00'),
(54, 'MSME DATA BANK REGISTRATION', '30', '69c7c1b7b098f.png', 1, '2026-03-28 17:25:35', '0000-00-00 00:00:00'),
(55, 'ESIC REGISTRATION', '30', '69c7c2e606870.png', 1, '2026-03-28 17:30:38', '0000-00-00 00:00:00'),
(56, 'EPF WITHDRAWAL', '30', '69c7c77420e7b.png', 1, '2026-03-28 17:50:04', '0000-00-00 00:00:00'),
(57, 'MUDRA LOAN APPLICATION', '26', '69c7cd7e15d83.png', 1, '2026-03-28 18:15:50', '0000-00-00 00:00:00'),
(58, 'CIBIL REPORT', '26', '69c7ce025441b.png', 1, '2026-03-28 18:18:02', '0000-00-00 00:00:00'),
(59, 'PASSPORT APPLICATION', '32', '69c7d02e06c29.png', 1, '2026-03-28 18:27:18', '0000-00-00 00:00:00'),
(60, 'DRIVING LICENSE APPLICATION', '32', '69c7d09995ee5.png', 1, '2026-03-28 18:29:05', '0000-00-00 00:00:00'),
(61, 'LEARNERS LICENSE APPLICATION', '32', '69c7d0d04c1cf.png', 1, '2026-03-28 18:30:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_category`
--

CREATE TABLE `tbl_service_category` (
  `id` int NOT NULL,
  `service_category` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_service_category`
--

INSERT INTO `tbl_service_category` (`id`, `service_category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Income Tax', 1, '2026-03-07 10:24:24', '0000-00-00 00:00:00'),
(2, 'Labour Dept.', 1, '2026-03-07 11:07:40', '0000-00-00 00:00:00'),
(4, 'Government Certificate Service', 1, '2026-03-10 18:05:57', '0000-00-00 00:00:00'),
(5, 'Transport / Government Service', 1, '2026-03-10 18:08:00', '0000-00-00 00:00:00'),
(6, 'Professional / Accounting Services', 1, '2026-03-25 22:26:50', '0000-00-00 00:00:00'),
(7, 'GST Suvidha Kendra', 1, '2026-03-26 12:04:20', '2026-04-22 12:26:07'),
(8, 'Govt. License Registrations', 1, '2026-03-27 11:13:25', '2026-04-22 12:24:38'),
(9, 'OTHER SERVICES', 1, '2026-03-28 18:16:10', '0000-00-00 00:00:00'),
(10, 'GOVERNMENT APPLICATIONS(G2C)', 1, '2026-03-28 18:19:52', '0000-00-00 00:00:00'),
(11, 'Agreements', 1, '2026-04-22 12:21:27', '0000-00-00 00:00:00'),
(12, 'Financial Services', 1, '2026-04-22 12:26:48', '0000-00-00 00:00:00'),
(13, 'Govt. ID Registrations', 1, '2026-04-22 12:29:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_type`
--

CREATE TABLE `tbl_service_type` (
  `id` int NOT NULL,
  `service_type` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_service_type`
--

INSERT INTO `tbl_service_type` (`id`, `service_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Taxation', 1, '2026-03-07 11:02:25', '2026-03-09 18:24:28'),
(2, 'Labour Licence of Telangana', 1, '2026-03-07 11:09:49', '0000-00-00 00:00:00'),
(3, 'Government ID Service', 1, '2026-03-07 14:55:17', '2026-03-09 13:28:36'),
(4, 'Government Certificate Service', 1, '2026-03-07 15:18:17', '2026-03-09 18:12:45'),
(5, 'Transport / Government Service', 1, '2026-03-07 15:24:16', '2026-03-09 18:16:07'),
(6, 'Family Member Certificate', 1, '2026-03-07 15:26:34', '0000-00-00 00:00:00'),
(8, 'Public Distribution / Government Service', 1, '2026-03-07 15:33:31', '2026-03-09 18:18:26'),
(9, 'Business License Service', 1, '2026-03-07 15:35:02', '2026-03-09 18:15:14'),
(12, 'Credit Card ID Service\'s ', 1, '2026-03-09 15:29:47', '0000-00-00 00:00:00'),
(13, 'Legal Documentation Service', 1, '2026-03-10 12:21:51', '0000-00-00 00:00:00'),
(14, 'Government Documentation Service', 1, '2026-03-10 12:33:10', '0000-00-00 00:00:00'),
(15, 'Property Record Service', 1, '2026-03-10 12:46:44', '0000-00-00 00:00:00'),
(16, 'Documentation Service', 1, '2026-03-10 13:00:43', '2026-03-10 17:19:37'),
(17, 'Financial Service', 1, '2026-03-10 13:01:56', '0000-00-00 00:00:00'),
(18, 'TAN Application (Form 49B)', 1, '2026-03-24 16:07:46', '0000-00-00 00:00:00'),
(19, 'Government to Citizen', 1, '2026-03-24 16:20:04', '0000-00-00 00:00:00'),
(20, 'IT Services', 1, '2026-03-25 13:27:05', '0000-00-00 00:00:00'),
(21, 'GST SERVICES', 1, '2026-03-25 16:02:13', '2026-03-25 16:02:34'),
(22, 'Income Tax ', 1, '2026-03-26 11:36:43', '0000-00-00 00:00:00'),
(23, 'COMPANY REGISTRATION', 1, '2026-03-26 11:38:00', '0000-00-00 00:00:00'),
(24, 'COMPANY COMPLIANCE', 1, '2026-03-26 11:38:29', '0000-00-00 00:00:00'),
(25, 'ACCOUNTING', 1, '2026-03-26 11:38:47', '2026-04-03 15:27:19'),
(26, 'OTHER SERVICE ', 1, '2026-03-26 11:39:29', '0000-00-00 00:00:00'),
(27, 'LOANS', 1, '2026-03-26 11:39:52', '0000-00-00 00:00:00'),
(29, 'DIGITAL SIGNATURE', 1, '2026-03-26 22:44:39', '0000-00-00 00:00:00'),
(30, 'Govt. Registrations', 1, '2026-03-27 10:52:21', '2026-04-22 12:19:26'),
(31, 'OTHER SERVICES', 1, '2026-03-28 18:14:19', '0000-00-00 00:00:00'),
(32, 'GOVERNMENT APPLICATIONS(G2C)', 1, '2026-03-28 18:19:25', '0000-00-00 00:00:00'),
(33, 'Agreements', 1, '2026-04-22 12:20:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `id` int NOT NULL,
  `state_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`id`, `state_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Andhra Pradesh-AP', 1, '2025-04-11 18:28:55', '2025-05-23 17:05:00'),
(3, 'Karnataka-KA', 1, '2025-04-11 18:29:09', '2025-05-23 17:05:09'),
(4, 'Telangana-TG', 1, '2025-05-09 18:00:33', '2025-05-23 17:05:19'),
(5, 'Maharastra-MH', 1, '2025-05-09 18:53:05', '2025-05-23 17:05:33'),
(6, 'Assam', 1, '2025-05-24 11:39:50', '0000-00-00 00:00:00'),
(7, 'Bihar', 1, '2025-05-24 11:40:42', '0000-00-00 00:00:00'),
(8, 'Goa', 1, '2025-05-24 11:40:53', '0000-00-00 00:00:00'),
(9, 'Gujarath', 1, '2025-05-24 11:40:58', '0000-00-00 00:00:00'),
(10, 'Himachala Pradesh', 1, '2025-05-24 11:41:05', '0000-00-00 00:00:00'),
(11, 'Madhya Pradesh', 1, '2025-05-24 11:41:31', '0000-00-00 00:00:00'),
(12, 'Maharashtra', 1, '2025-05-24 11:41:39', '0000-00-00 00:00:00'),
(13, 'Nagland', 1, '2025-05-24 11:41:47', '0000-00-00 00:00:00'),
(14, 'Odissa', 1, '2025-05-24 11:41:58', '0000-00-00 00:00:00'),
(15, 'Rajastan', 1, '2025-05-24 11:42:11', '0000-00-00 00:00:00'),
(16, 'Tamilnadu', 1, '2025-05-24 11:43:00', '0000-00-00 00:00:00'),
(17, 'Utter Pradesh', 1, '2025-05-24 11:43:13', '0000-00-00 00:00:00'),
(18, 'krajeshk ++', 1, '0000-00-00 00:00:00', '2026-06-02 12:51:58'),
(19, 'gqyodh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_location`
--

CREATE TABLE `tbl_sub_location` (
  `id` int NOT NULL,
  `sub_location` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `state_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `location_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sub_location`
--

INSERT INTO `tbl_sub_location` (`id`, `sub_location`, `state_id`, `location_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'hydrabad1', '1', '1', 1, '2025-04-11 18:38:50', '0000-00-00 00:00:00'),
(2, 'kalaburagi', '3', '3', 1, '2025-04-11 18:39:06', '0000-00-00 00:00:00'),
(4, 'Sbd', '3', '3', 1, '2025-04-12 13:01:26', '0000-00-00 00:00:00'),
(5, 'Adilabad', '4', '31', 1, '2025-05-24 11:49:46', '0000-00-00 00:00:00'),
(6, 'Boath', '4', '31', 1, '2025-05-24 11:49:56', '0000-00-00 00:00:00'),
(7, 'Bhagyanagar Adilabad', '4', '31', 1, '2025-05-24 11:50:10', '0000-00-00 00:00:00'),
(8, 'Bhuktapur', '4', '31', 1, '2025-05-24 11:51:02', '0000-00-00 00:00:00'),
(9, 'Ainam', '4', '31', 1, '2025-05-24 11:51:17', '0000-00-00 00:00:00'),
(10, 'Bellampalle', '4', '31', 1, '2025-05-24 11:52:10', '0000-00-00 00:00:00'),
(11, 'Agm Colony', '4', '31', 1, '2025-05-24 11:52:21', '0000-00-00 00:00:00'),
(12, 'Aknepalli', '4', '31', 1, '2025-05-24 11:52:29', '0000-00-00 00:00:00'),
(13, 'Ada', '4', '31', 1, '2025-05-24 11:52:39', '0000-00-00 00:00:00'),
(14, 'Akoli', '4', '31', 1, '2025-05-24 11:52:48', '0000-00-00 00:00:00'),
(15, 'Alegaon', '4', '31', 1, '2025-05-24 11:52:58', '0000-00-00 00:00:00'),
(16, 'Angarajpally', '4', '31', 1, '2025-05-24 11:53:08', '0000-00-00 00:00:00'),
(17, 'Ankhoda', '4', '31', 1, '2025-05-24 11:53:15', '0000-00-00 00:00:00'),
(18, 'Ashepally', '4', '31', 1, '2025-05-24 11:53:25', '0000-00-00 00:00:00'),
(19, 'Badampally', '4', '31', 1, '2025-05-24 11:53:33', '0000-00-00 00:00:00'),
(20, 'Bapur', '4', '31', 1, '2025-05-24 11:53:42', '0000-00-00 00:00:00'),
(21, 'Bheemaram', '4', '31', 1, '2025-05-24 11:54:08', '0000-00-00 00:00:00'),
(22, 'Bheempur', '4', '31', 1, '2025-05-24 11:54:17', '0000-00-00 00:00:00'),
(23, 'Bhainsa', '4', '31', 1, '2025-05-24 11:54:26', '0000-00-00 00:00:00'),
(24, 'Rekulapalle', '4', '32', 1, '2025-05-24 13:07:58', '0000-00-00 00:00:00'),
(25, 'Kothapalle', '4', '32', 1, '2025-05-24 13:08:31', '0000-00-00 00:00:00'),
(26, 'Yenkampeta', '4', '32', 1, '2025-05-24 13:08:39', '0000-00-00 00:00:00'),
(27, 'Mulkalapalle', '4', '32', 1, '2025-05-24 13:09:19', '0000-00-00 00:00:00'),
(28, 'Gadwal ', '4', '32', 1, '2025-05-24 13:09:29', '0000-00-00 00:00:00'),
(29, 'Atmakur', '4', '32', 1, '2025-05-24 13:09:38', '0000-00-00 00:00:00'),
(30, 'Ganpad', '4', '32', 1, '2025-05-24 13:09:47', '0000-00-00 00:00:00'),
(31, 'Sangala', '4', '32', 1, '2025-05-24 13:09:56', '0000-00-00 00:00:00'),
(32, 'Jilladabanda', '4', '32', 1, '2025-05-24 13:10:05', '0000-00-00 00:00:00'),
(33, 'Kakulavaram', '4', '32', 1, '2025-05-24 13:11:27', '0000-00-00 00:00:00'),
(34, 'Paramala', '4', '32', 1, '2025-05-24 13:11:38', '0000-00-00 00:00:00'),
(35, 'Mellacheruvu', '4', '32', 1, '2025-05-24 13:11:50', '0000-00-00 00:00:00'),
(36, 'Jammichedu', '4', '32', 1, '2025-05-24 13:11:59', '0000-00-00 00:00:00'),
(37, 'Pudur', '4', '32', 1, '2025-05-24 13:12:08', '0000-00-00 00:00:00'),
(38, 'Anantapur', '4', '32', 1, '2025-05-24 13:12:17', '0000-00-00 00:00:00'),
(39, 'Beerole', '4', '32', 1, '2025-05-24 13:12:25', '0000-00-00 00:00:00'),
(40, 'Basapur', '4', '32', 1, '2025-05-24 13:12:34', '0000-00-00 00:00:00'),
(41, 'Gurramgadda', '4', '32', 1, '2025-05-24 13:12:42', '0000-00-00 00:00:00'),
(42, 'Gadwal (Rural)', '4', '32', 1, '2025-05-24 13:12:55', '0000-00-00 00:00:00'),
(43, 'Alampally', '4', '32', 1, '2025-05-24 15:02:06', '0000-00-00 00:00:00'),
(44, 'Hanamkonda', '4', '33', 1, '2025-05-24 15:17:51', '0000-00-00 00:00:00'),
(45, 'Kumarpalle', '4', '33', 1, '2025-05-24 15:17:58', '0000-00-00 00:00:00'),
(46, 'Palivelpula', '4', '33', 1, '2025-05-24 15:18:07', '0000-00-00 00:00:00'),
(47, 'Lashkarsingaram', '4', '33', 1, '2025-05-24 15:18:16', '0000-00-00 00:00:00'),
(48, 'Gopalpur', '4', '33', 1, '2025-05-24 15:18:26', '0000-00-00 00:00:00'),
(49, 'Waddepally', '4', '33', 1, '2025-05-24 15:19:31', '0000-00-00 00:00:00'),
(50, 'Khazipet', '4', '33', 1, '2025-05-24 15:19:42', '0000-00-00 00:00:00'),
(51, 'Somidi', '4', '33', 1, '2025-05-24 15:19:52', '0000-00-00 00:00:00'),
(52, 'Madikonda', '4', '33', 1, '2025-05-24 15:19:59', '0000-00-00 00:00:00'),
(53, 'Tharalapalli', '4', '33', 1, '2025-05-24 15:20:14', '0000-00-00 00:00:00'),
(54, 'Kadipikonda', '4', '33', 1, '2025-05-24 15:20:31', '0000-00-00 00:00:00'),
(55, 'Kothapalli', '4', '33', 1, '2025-05-24 15:20:47', '0000-00-00 00:00:00'),
(56, 'Battupalli', '4', '33', 1, '2025-05-24 15:21:03', '0000-00-00 00:00:00'),
(57, 'Ammavaripet', '4', '33', 1, '2025-05-24 15:21:12', '0000-00-00 00:00:00'),
(58, 'Shaympet', '4', '33', 1, '2025-05-24 15:21:21', '0000-00-00 00:00:00'),
(59, 'Rampur', '4', '33', 1, '2025-05-24 15:21:32', '0000-00-00 00:00:00'),
(60, 'Singaram', '4', '33', 1, '2025-05-24 15:22:41', '0000-00-00 00:00:00'),
(61, 'Punnole', '4', '33', 1, '2025-05-24 15:22:50', '0000-00-00 00:00:00'),
(62, 'Nandanam', '4', '33', 1, '2025-05-24 15:23:00', '0000-00-00 00:00:00'),
(63, 'Kakkiralapalli', '4', '33', 1, '2025-05-24 15:23:08', '0000-00-00 00:00:00'),
(64, 'Panthini', '4', '33', 1, '2025-05-24 15:23:21', '0000-00-00 00:00:00'),
(65, 'Kondaparthy', '4', '33', 1, '2025-05-24 15:24:08', '0000-00-00 00:00:00'),
(66, 'Kanapatrthy', '4', '33', 1, '2025-05-24 15:24:17', '0000-00-00 00:00:00'),
(67, 'Garmillapalle', '4', '33', 1, '2025-05-24 15:24:30', '0000-00-00 00:00:00'),
(68, 'Ananthasagar', '4', '33', 1, '2025-05-24 15:24:38', '0000-00-00 00:00:00'),
(69, 'Madipalle', '4', '33', 1, '2025-05-24 15:25:21', '0000-00-00 00:00:00'),
(70, 'Yellapur', '4', '33', 1, '2025-05-24 15:25:37', '0000-00-00 00:00:00'),
(71, 'Laknavaram ', '4', '33', 1, '2025-05-24 15:25:47', '0000-00-00 00:00:00'),
(72, 'Jaigiri', '4', '33', 1, '2025-05-24 15:25:56', '0000-00-00 00:00:00'),
(73, 'Devannapet', '4', '33', 1, '2025-05-24 15:26:08', '0000-00-00 00:00:00'),
(74, 'Pembarthy', '4', '33', 1, '2025-05-24 15:26:16', '0000-00-00 00:00:00'),
(75, 'Mutcherla', '4', '33', 1, '2025-05-24 15:26:26', '0000-00-00 00:00:00'),
(76, 'Nagaram', '4', '33', 1, '2025-05-24 15:26:35', '0000-00-00 00:00:00'),
(77, 'Sudanpalle', '4', '33', 1, '2025-05-24 15:26:44', '0000-00-00 00:00:00'),
(78, 'Mallareddipalle', '4', '33', 1, '2025-05-24 15:26:52', '0000-00-00 00:00:00'),
(79, 'Arvapalle', '4', '33', 1, '2025-05-24 15:27:15', '0000-00-00 00:00:00'),
(80, 'Aliabad', '4', '35', 1, '2025-05-26 11:03:51', '0000-00-00 00:00:00'),
(81, 'Alwal ', '4', '35', 1, '2025-05-26 11:04:04', '0000-00-00 00:00:00'),
(82, 'Ambernagar ', '4', '35', 1, '2025-05-26 11:04:18', '0000-00-00 00:00:00'),
(83, 'Amberpet ', '4', '35', 1, '2025-05-26 11:04:31', '0000-00-00 00:00:00'),
(84, 'Anantaram ', '4', '35', 1, '2025-05-26 11:05:07', '0000-00-00 00:00:00'),
(85, 'Ankireddipalli ', '4', '35', 1, '2025-05-26 11:05:19', '0000-00-00 00:00:00'),
(86, 'Ankushapur ', '4', '35', 1, '2025-05-26 11:05:33', '0000-00-00 00:00:00'),
(87, 'Aphb Colony Moulali ', '4', '35', 1, '2025-05-26 11:05:51', '0000-00-00 00:00:00'),
(88, 'Ashoknagar ', '4', '35', 1, '2025-05-26 11:06:07', '0000-00-00 00:00:00'),
(89, 'Badangpet ', '4', '35', 1, '2025-05-26 11:06:20', '0000-00-00 00:00:00'),
(90, 'Banjara Hills ', '4', '35', 1, '2025-05-26 11:06:34', '0000-00-00 00:00:00'),
(91, 'Barkatpura ', '4', '35', 1, '2025-05-26 11:06:46', '0000-00-00 00:00:00'),
(92, 'Begumbazar ', '4', '35', 1, '2025-05-26 11:07:01', '0000-00-00 00:00:00'),
(93, 'Begumpet Policelines ', '4', '35', 1, '2025-05-26 11:07:12', '0000-00-00 00:00:00'),
(94, 'Begumpet ', '4', '35', 1, '2025-05-26 11:07:24', '0000-00-00 00:00:00'),
(95, 'Bogaram ', '4', '35', 1, '2025-05-26 11:07:36', '0000-00-00 00:00:00'),
(96, 'Bowenpally ', '4', '35', 1, '2025-05-26 11:07:54', '0000-00-00 00:00:00'),
(97, 'Central Secretariat ', '4', '35', 1, '2025-05-26 11:08:06', '0000-00-00 00:00:00'),
(98, 'Chandanagar ', '4', '35', 1, '2025-05-26 11:08:17', '0000-00-00 00:00:00'),
(99, 'Cherial ', '4', '35', 1, '2025-05-26 11:08:30', '0000-00-00 00:00:00'),
(100, 'Cherlapalli ', '4', '35', 1, '2025-05-26 11:08:40', '0000-00-00 00:00:00'),
(101, 'CIE Balangar ', '4', '35', 1, '2025-05-26 11:08:55', '0000-00-00 00:00:00'),
(102, 'Cyberabad ', '4', '35', 1, '2025-05-26 11:09:08', '0000-00-00 00:00:00'),
(103, 'Dr As Rao Nagar ', '4', '35', 1, '2025-05-26 11:09:58', '0000-00-00 00:00:00'),
(104, 'Ecil ', '4', '35', 1, '2025-05-26 11:10:08', '0000-00-00 00:00:00'),
(105, 'Erragadda ', '4', '35', 1, '2025-05-26 11:10:21', '0000-00-00 00:00:00'),
(106, 'Falaknuma ', '4', '35', 1, '2025-05-26 11:10:33', '0000-00-00 00:00:00'),
(107, 'Film Nagar ', '4', '35', 1, '2025-05-26 11:10:52', '0000-00-00 00:00:00'),
(108, 'Gajularamaram ', '4', '35', 1, '2025-05-26 11:11:07', '0000-00-00 00:00:00'),
(109, 'Gandhi Bhawan ', '4', '35', 1, '2025-05-26 11:11:45', '0000-00-00 00:00:00'),
(110, 'Gandhinagar ', '4', '35', 1, '2025-05-26 11:12:03', '0000-00-00 00:00:00'),
(111, 'Golconda Chowrastha ', '4', '35', 1, '2025-05-26 11:12:23', '0000-00-00 00:00:00'),
(112, 'Golconda ', '4', '35', 1, '2025-05-26 11:12:37', '0000-00-00 00:00:00'),
(113, 'Gowdavalli ', '4', '35', 1, '2025-05-26 11:12:50', '0000-00-00 00:00:00'),
(114, 'Hanumanpet ', '4', '35', 1, '2025-05-26 11:13:08', '0000-00-00 00:00:00'),
(115, 'Himayathnagar ', '4', '35', 1, '2025-05-26 11:13:20', '0000-00-00 00:00:00'),
(116, 'Himmatnagar ', '4', '35', 1, '2025-05-26 11:13:34', '0000-00-00 00:00:00'),
(117, 'Hyderabad ', '4', '35', 1, '2025-05-26 11:13:51', '0000-00-00 00:00:00'),
(118, 'Hyderabad Jubilee ', '4', '35', 1, '2025-05-26 11:32:54', '0000-00-00 00:00:00'),
(119, 'Jeedimetla ', '4', '35', 1, '2025-05-26 11:33:42', '0000-00-00 00:00:00'),
(120, ' Moulali ', '4', '35', 1, '2025-05-26 11:33:56', '0000-00-00 00:00:00'),
(121, 'Jaggamguda ', '4', '35', 1, '2025-05-26 11:34:44', '0000-00-00 00:00:00'),
(122, ' Osmania ', '4', '35', 1, '2025-05-26 11:46:53', '0000-00-00 00:00:00'),
(123, 'Jeedimetla ', '4', '35', 1, '2025-05-26 11:47:48', '0000-00-00 00:00:00'),
(124, 'Jntu Kukat Pally', '4', '35', 1, '2025-05-26 11:48:22', '0000-00-00 00:00:00'),
(125, 'Kakatiya Nagar ', '4', '35', 1, '2025-05-26 11:48:34', '0000-00-00 00:00:00'),
(126, 'Keesara ', '4', '35', 1, '2025-05-26 11:48:50', '0000-00-00 00:00:00'),
(127, 'Keesaragutta ', '4', '35', 1, '2025-05-26 11:52:24', '0000-00-00 00:00:00'),
(128, 'Khairatabad ', '4', '35', 1, '2025-05-26 11:52:35', '0000-00-00 00:00:00'),
(129, 'Kishanbagh ', '4', '35', 1, '2025-05-26 11:54:30', '0000-00-00 00:00:00'),
(130, 'KPHB Colony ', '4', '35', 1, '2025-05-26 11:54:49', '0000-00-00 00:00:00'),
(131, 'Kukatpally ', '4', '35', 1, '2025-05-26 11:55:02', '0000-00-00 00:00:00'),
(132, 'Kushaiguda ', '4', '35', 1, '2025-05-26 11:57:24', '0000-00-00 00:00:00'),
(133, 'L B Nagar ', '4', '35', 1, '2025-05-26 11:57:46', '0000-00-00 00:00:00'),
(134, 'Lallaguda ', '4', '35', 1, '2025-05-26 11:58:12', '0000-00-00 00:00:00'),
(135, 'Lallapet ', '4', '35', 1, '2025-05-26 11:58:26', '0000-00-00 00:00:00'),
(136, 'Lunger House ', '4', '35', 1, '2025-05-26 11:58:47', '0000-00-00 00:00:00'),
(137, 'Madhapur ', '4', '35', 1, '2025-05-26 11:59:06', '0000-00-00 00:00:00'),
(138, 'Malakpet Colony ', '4', '35', 1, '2025-05-26 12:00:29', '0000-00-00 00:00:00'),
(139, 'MG Road ', '4', '35', 1, '2025-05-26 12:01:09', '0000-00-00 00:00:00'),
(140, 'Miyapur ', '4', '35', 1, '2025-05-26 12:01:21', '0000-00-00 00:00:00'),
(141, 'Musheerabad ', '4', '35', 1, '2025-05-26 12:01:48', '0000-00-00 00:00:00'),
(142, 'Nallakunta ', '4', '35', 1, '2025-05-26 12:02:01', '0000-00-00 00:00:00'),
(143, 'Nanakramguda ', '4', '35', 1, '2025-05-26 12:02:13', '0000-00-00 00:00:00'),
(144, 'Narayanguda ', '4', '35', 1, '2025-05-26 12:02:28', '0000-00-00 00:00:00'),
(145, 'Ngri ', '4', '35', 1, '2025-05-26 12:03:16', '0000-00-00 00:00:00'),
(146, 'Old Malakpet ', '4', '35', 1, '2025-05-26 12:03:49', '0000-00-00 00:00:00'),
(147, 'Osmania General Hospital ', '4', '35', 1, '2025-05-26 12:04:02', '0000-00-00 00:00:00'),
(148, 'Padmaraonagar ', '4', '35', 1, '2025-05-26 12:04:27', '0000-00-00 00:00:00'),
(149, 'Pragatinagar ', '4', '35', 1, '2025-05-26 12:05:25', '0000-00-00 00:00:00'),
(150, 'Raj Bhawan ', '4', '35', 1, '2025-05-26 12:05:43', '0000-00-00 00:00:00'),
(151, 'Rajbolaram ', '4', '35', 1, '2025-05-26 12:05:56', '0000-00-00 00:00:00'),
(152, 'Ramakrishna Puram ', '4', '35', 1, '2025-05-26 12:09:37', '0000-00-00 00:00:00'),
(153, 'Saidabad ', '4', '35', 1, '2025-05-26 12:10:03', '0000-00-00 00:00:00'),
(154, 'Sanath Nagar', '4', '35', 1, '2025-05-26 12:10:25', '0000-00-00 00:00:00'),
(155, 'Sanjeev Reddy Nagar ', '4', '35', 1, '2025-05-26 12:10:37', '0000-00-00 00:00:00'),
(156, 'Santoshnagar ', '4', '35', 1, '2025-05-26 12:10:50', '0000-00-00 00:00:00'),
(157, 'Saroornagar ', '4', '35', 1, '2025-05-26 12:11:09', '0000-00-00 00:00:00'),
(158, 'Secunderabad ', '4', '35', 1, '2025-05-26 12:33:59', '0000-00-00 00:00:00'),
(159, 'Somajiguda ', '4', '35', 1, '2025-05-26 12:35:01', '0000-00-00 00:00:00'),
(160, 'Srinagar Colony ', '4', '35', 1, '2025-05-26 12:37:25', '0000-00-00 00:00:00'),
(161, 'Stn Kachiguda ', '4', '35', 1, '2025-05-26 12:38:01', '0000-00-00 00:00:00'),
(162, 'Suraram ', '4', '35', 1, '2025-05-26 12:39:05', '0000-00-00 00:00:00'),
(163, 'Tarnaka ', '4', '35', 1, '2025-05-26 12:39:18', '0000-00-00 00:00:00'),
(164, 'Toli Chowki ', '4', '35', 1, '2025-05-26 12:39:32', '0000-00-00 00:00:00'),
(165, 'Vengal Rao Nagar ', '4', '35', 1, '2025-05-26 12:39:43', '0000-00-00 00:00:00'),
(166, 'Vidyanagar ', '4', '35', 1, '2025-05-26 12:39:58', '0000-00-00 00:00:00'),
(167, 'Vikarabad ', '4', '35', 1, '2025-05-26 12:40:08', '0000-00-00 00:00:00'),
(168, 'Vikasnagar ', '4', '35', 1, '2025-05-26 12:40:21', '0000-00-00 00:00:00'),
(169, 'Yousufguda ', '4', '35', 1, '2025-05-26 12:40:37', '0000-00-00 00:00:00'),
(170, 'Abadighanpur', '4', '37', 1, '2025-05-26 18:01:53', '0000-00-00 00:00:00'),
(171, 'Abdulnagaram', '4', '37', 1, '2025-05-26 18:02:28', '0000-00-00 00:00:00'),
(172, 'Ainapur', '4', '37', 1, '2025-05-26 18:02:38', '0000-00-00 00:00:00'),
(173, 'Akinepalli Mallaram', '4', '37', 1, '2025-05-26 18:02:46', '0000-00-00 00:00:00'),
(174, 'Akkarajpalli', '4', '37', 1, '2025-05-26 18:02:57', '0000-00-00 00:00:00'),
(175, 'Alimpur', '4', '37', 1, '2025-05-26 18:03:09', '0000-00-00 00:00:00'),
(176, 'Ananthasagar', '4', '37', 1, '2025-05-26 18:03:19', '0000-00-00 00:00:00'),
(177, 'Ankushapur', '4', '37', 1, '2025-05-26 18:03:31', '0000-00-00 00:00:00'),
(178, 'Arjunpatla', '4', '37', 1, '2025-05-26 18:03:44', '0000-00-00 00:00:00'),
(179, 'Atmakur Warangal', '4', '37', 1, '2025-05-26 18:03:54', '0000-00-00 00:00:00'),
(180, 'Bandanagaram', '4', '37', 1, '2025-05-26 18:04:04', '0000-00-00 00:00:00'),
(181, 'Banjipet', '4', '37', 1, '2025-05-26 18:04:13', '0000-00-00 00:00:00'),
(182, 'Beeravelli', '4', '37', 1, '2025-05-26 18:04:22', '0000-00-00 00:00:00'),
(183, 'Bhairanpalli', '4', '37', 1, '2025-05-26 18:05:10', '0000-00-00 00:00:00'),
(184, 'Bheemaram', '4', '37', 1, '2025-05-26 18:07:14', '0000-00-00 00:00:00'),
(185, 'Bikkal', '4', '37', 1, '2025-05-26 18:07:23', '0000-00-00 00:00:00'),
(186, 'Bollonipalli', '4', '37', 1, '2025-05-26 18:07:33', '0000-00-00 00:00:00'),
(187, 'Borenarsapur', '4', '37', 1, '2025-05-26 18:07:52', '0000-00-00 00:00:00'),
(188, 'Buchannapet', '4', '37', 1, '2025-05-26 18:47:43', '0000-00-00 00:00:00'),
(189, 'Budharam', '4', '37', 1, '2025-05-27 11:38:14', '0000-00-00 00:00:00'),
(190, 'Chagal', '4', '37', 1, '2025-05-27 11:38:49', '0000-00-00 00:00:00'),
(191, 'Challagarige', '4', '37', 1, '2025-05-27 11:39:17', '0000-00-00 00:00:00'),
(192, 'Cheetur', '4', '37', 1, '2025-05-27 11:39:31', '0000-00-00 00:00:00'),
(193, 'Chelpur', '4', '37', 1, '2025-05-27 11:39:48', '0000-00-00 00:00:00'),
(194, 'Cherlapalli', '4', '37', 1, '2025-05-27 11:39:57', '0000-00-00 00:00:00'),
(195, 'Chilpur', '4', '37', 1, '2025-05-27 11:40:06', '0000-00-00 00:00:00'),
(196, 'Chinnaboinapalli', '4', '37', 1, '2025-05-27 11:40:27', '0000-00-00 00:00:00'),
(197, 'Chinnapendyal', '4', '37', 1, '2025-05-27 11:40:38', '0000-00-00 00:00:00'),
(198, 'Chitakodur', '4', '37', 1, '2025-05-27 11:40:47', '0000-00-00 00:00:00'),
(199, 'Chityal', '4', '37', 1, '2025-05-27 11:40:55', '0000-00-00 00:00:00'),
(200, 'Chowtaparthy', '4', '37', 1, '2025-05-27 11:41:02', '0000-00-00 00:00:00'),
(201, ' Arinda ', '4', '38', 1, '2025-05-27 17:52:52', '0000-00-00 00:00:00'),
(202, 'Abbapur ', '4', '38', 1, '2025-05-28 12:25:31', '0000-00-00 00:00:00'),
(203, 'Ananthagiri', '1', '10', 1, '2025-05-29 15:02:16', '0000-00-00 00:00:00'),
(204, 'Pedabidda', '1', '10', 1, '2025-05-29 15:02:30', '0000-00-00 00:00:00'),
(205, 'Pedakota', '1', '10', 1, '2025-05-29 15:02:49', '0000-00-00 00:00:00'),
(206, 'Pinakota', '1', '10', 1, '2025-05-29 15:03:02', '0000-00-00 00:00:00'),
(207, 'Pynampadu', '1', '10', 1, '2025-05-29 15:03:19', '0000-00-00 00:00:00'),
(208, 'Rompalli ', '1', '10', 1, '2025-05-29 15:03:37', '0000-00-00 00:00:00'),
(209, 'Basiki', '1', '10', 1, '2025-05-29 15:08:20', '0000-00-00 00:00:00'),
(211, 'Bondam ', '1', '10', 1, '2025-05-29 15:10:21', '0000-00-00 00:00:00'),
(212, 'Chinalababu ', '1', '10', 1, '2025-05-29 15:10:38', '0000-00-00 00:00:00'),
(213, 'Chompi', '1', '10', 1, '2025-05-29 15:10:59', '0000-00-00 00:00:00'),
(214, 'Gannela', '1', '10', 1, '2025-05-29 15:11:24', '0000-00-00 00:00:00'),
(215, 'Iragai ', '1', '10', 1, '2025-05-29 15:11:42', '0000-00-00 00:00:00'),
(216, 'Chinthaluru', '1', '10', 1, '2025-05-29 15:15:47', '0000-00-00 00:00:00'),
(217, 'Chilakalamamidi ', '1', '10', 1, '2025-05-29 15:16:06', '0000-00-00 00:00:00'),
(218, 'Chinthaluru ', '1', '10', 1, '2025-05-29 15:16:24', '0000-00-00 00:00:00'),
(219, 'Chilakalamamidi', '1', '10', 1, '2025-05-29 15:16:39', '0000-00-00 00:00:00'),
(220, 'Sariya ', '1', '10', 1, '2025-05-29 15:26:19', '0000-00-00 00:00:00'),
(221, 'Kathirala ', '1', '10', 1, '2025-05-29 15:26:35', '0000-00-00 00:00:00'),
(222, 'Allurigedda', '1', '10', 1, '2025-05-29 15:26:51', '0000-00-00 00:00:00'),
(223, 'Sunkarametta', '1', '10', 1, '2025-05-29 15:27:18', '0000-00-00 00:00:00'),
(224, 'Maredumilli', '1', '10', 1, '2025-05-29 15:27:32', '0000-00-00 00:00:00'),
(225, 'Rajavommangi', '1', '10', 1, '2025-05-29 15:27:46', '0000-00-00 00:00:00'),
(226, 'Devipatnam ', '1', '10', 1, '2025-05-29 15:27:59', '0000-00-00 00:00:00'),
(227, 'Rampachodavaram', '1', '10', 1, '2025-05-29 15:28:12', '0000-00-00 00:00:00'),
(228, 'Kannayagudem ', '1', '10', 1, '2025-05-29 15:28:27', '0000-00-00 00:00:00'),
(229, 'Anakapalli', '1', '11', 1, '2025-05-30 11:45:16', '0000-00-00 00:00:00'),
(230, 'Atchutapuram', '1', '11', 1, '2025-05-30 11:49:04', '0000-00-00 00:00:00'),
(231, 'Butchayyapeta', '1', '11', 1, '2025-05-30 11:49:30', '0000-00-00 00:00:00'),
(232, 'Cheedikada', '1', '11', 1, '2025-05-30 11:49:45', '0000-00-00 00:00:00'),
(233, 'Chodavaram', '1', '11', 1, '2025-05-30 11:50:05', '0000-00-00 00:00:00'),
(234, 'Devarapalli', '1', '11', 1, '2025-05-30 11:50:19', '0000-00-00 00:00:00'),
(235, 'Golugonda', '1', '11', 1, '2025-05-30 11:50:34', '0000-00-00 00:00:00'),
(236, 'K. Kotapadu', '1', '11', 1, '2025-05-30 11:50:46', '0000-00-00 00:00:00'),
(237, 'Kasimkota', '1', '11', 1, '2025-05-30 11:51:01', '0000-00-00 00:00:00'),
(238, 'Kotauratla', '1', '11', 1, '2025-05-30 11:51:14', '0000-00-00 00:00:00'),
(239, 'Madugula', '1', '11', 1, '2025-05-30 11:51:32', '0000-00-00 00:00:00'),
(240, 'Makavarapalem', '1', '11', 1, '2025-05-30 11:51:48', '0000-00-00 00:00:00'),
(241, 'Munagapaka ', '1', '11', 1, '2025-05-30 11:52:04', '0000-00-00 00:00:00'),
(242, 'Nakkapalli', '1', '11', 1, '2025-05-30 11:52:32', '0000-00-00 00:00:00'),
(243, 'Narsipatnam', '1', '11', 1, '2025-05-30 11:52:44', '0000-00-00 00:00:00'),
(244, 'Nathavaram', '1', '11', 1, '2025-05-30 11:52:57', '0000-00-00 00:00:00'),
(245, 'Paravada', '1', '11', 1, '2025-05-30 11:53:11', '0000-00-00 00:00:00'),
(246, 'Payakaraopeta', '1', '11', 1, '2025-05-30 11:53:46', '0000-00-00 00:00:00'),
(247, 'Rambilli', '1', '11', 1, '2025-05-30 11:53:58', '0000-00-00 00:00:00'),
(248, 'Ravikamatham', '1', '11', 1, '2025-05-30 12:17:14', '0000-00-00 00:00:00'),
(249, 'Rolugunta', '1', '11', 1, '2025-05-30 12:17:25', '0000-00-00 00:00:00'),
(250, 'S. Rayavaram', '1', '11', 1, '2025-05-30 12:17:38', '0000-00-00 00:00:00'),
(251, 'Anantapuramu', '1', '12', 1, '2025-05-30 12:23:42', '0000-00-00 00:00:00'),
(252, 'Atmakur', '1', '12', 1, '2025-05-30 12:24:10', '0000-00-00 00:00:00'),
(253, 'Beluguppa', '1', '12', 1, '2025-05-30 12:24:37', '0000-00-00 00:00:00'),
(254, 'Bommanahal', '1', '12', 1, '2025-05-30 12:48:35', '0000-00-00 00:00:00'),
(255, 'Bukkarayasamudram', '1', '12', 1, '2025-05-30 12:48:49', '0000-00-00 00:00:00'),
(256, 'D. Hirehal', '1', '12', 1, '2025-05-30 12:49:03', '0000-00-00 00:00:00'),
(257, 'Garladinne', '1', '12', 1, '2025-05-30 12:49:28', '0000-00-00 00:00:00'),
(258, 'Gooty', '1', '12', 1, '2025-05-30 12:49:41', '0000-00-00 00:00:00'),
(259, 'Gummagatta', '1', '12', 1, '2025-05-30 12:49:56', '0000-00-00 00:00:00'),
(260, 'Guntakal', '1', '12', 1, '2025-05-30 12:50:08', '0000-00-00 00:00:00'),
(261, 'Kalyandurg', '1', '12', 1, '2025-05-30 12:50:27', '0000-00-00 00:00:00'),
(262, 'Kambadur', '1', '12', 1, '2025-05-30 12:50:39', '0000-00-00 00:00:00'),
(263, 'Kanaganapalle', '1', '12', 1, '2025-05-30 12:51:01', '0000-00-00 00:00:00'),
(264, 'Kundurpi', '1', '12', 1, '2025-05-30 12:51:56', '0000-00-00 00:00:00'),
(265, 'Pamidi', '1', '12', 1, '2025-05-30 12:57:40', '0000-00-00 00:00:00'),
(266, 'Peddavadugur', '1', '12', 1, '2025-05-30 12:57:59', '0000-00-00 00:00:00'),
(267, 'Peddapappur', '1', '12', 1, '2025-05-30 12:58:14', '0000-00-00 00:00:00'),
(268, 'Putlur', '1', '12', 1, '2025-05-30 12:58:27', '0000-00-00 00:00:00'),
(269, 'Rayadurg', '1', '12', 1, '2025-05-30 12:58:41', '0000-00-00 00:00:00'),
(270, 'Singanamala', '1', '12', 1, '2025-05-30 12:58:53', '0000-00-00 00:00:00'),
(271, 'Tadpatri', '1', '12', 1, '2025-05-30 12:59:08', '0000-00-00 00:00:00'),
(272, 'Uravakonda', '1', '12', 1, '2025-05-30 12:59:19', '0000-00-00 00:00:00'),
(273, 'Vajrakarur', '1', '12', 1, '2025-05-30 12:59:31', '0000-00-00 00:00:00'),
(274, 'Vidapanakal', '1', '12', 1, '2025-05-30 13:00:33', '0000-00-00 00:00:00'),
(275, 'Yadiki', '1', '12', 1, '2025-05-30 13:00:53', '0000-00-00 00:00:00'),
(276, 'Yellanur', '1', '12', 1, '2025-05-30 13:01:10', '0000-00-00 00:00:00'),
(277, 'J. Hanumanthapuram', '1', '12', 1, '2025-05-30 13:01:27', '0000-00-00 00:00:00'),
(278, 'Rayalacheruvu', '1', '12', 1, '2025-05-30 13:01:47', '0000-00-00 00:00:00'),
(279, 'Madanapalle', '1', '13', 1, '2025-05-30 16:18:38', '0000-00-00 00:00:00'),
(280, 'Nimmanapalle', '1', '13', 1, '2025-05-30 16:19:03', '0000-00-00 00:00:00'),
(281, 'Ramasamudram', '1', '13', 1, '2025-05-30 16:19:20', '0000-00-00 00:00:00'),
(282, 'Thamballapalle', '1', '13', 1, '2025-05-30 16:19:37', '0000-00-00 00:00:00'),
(283, 'Mulakalacheruvu', '1', '13', 1, '2025-05-30 16:20:05', '0000-00-00 00:00:00'),
(284, 'Peddamandyam', '1', '13', 1, '2025-05-30 16:20:21', '0000-00-00 00:00:00'),
(285, 'Kurabalakota', '1', '13', 1, '2025-05-30 16:20:51', '0000-00-00 00:00:00'),
(286, 'Peddathippasamudram', '1', '13', 1, '2025-05-30 16:21:09', '0000-00-00 00:00:00'),
(287, 'B. Kothakota', '1', '13', 1, '2025-05-30 16:21:29', '0000-00-00 00:00:00'),
(288, 'Kalikiri', '1', '13', 1, '2025-05-30 16:21:46', '0000-00-00 00:00:00'),
(289, 'Kalakada', '1', '13', 1, '2025-05-30 16:22:04', '0000-00-00 00:00:00'),
(290, 'Vayalpadu', '1', '13', 1, '2025-05-30 16:22:24', '0000-00-00 00:00:00'),
(291, 'Gurramkonda', '1', '13', 1, '2025-05-30 16:22:40', '0000-00-00 00:00:00'),
(292, 'Valmikipuram', '1', '13', 1, '2025-05-30 16:23:01', '0000-00-00 00:00:00'),
(293, 'Punganur', '1', '13', 1, '2025-05-30 16:23:15', '0000-00-00 00:00:00'),
(294, 'Sadum', '1', '13', 1, '2025-05-30 16:23:32', '0000-00-00 00:00:00'),
(295, 'Chowdepalle', '1', '13', 1, '2025-05-30 16:23:49', '0000-00-00 00:00:00'),
(296, 'Somala', '1', '13', 1, '2025-05-30 16:24:09', '0000-00-00 00:00:00'),
(297, 'Pileru', '1', '13', 1, '2025-05-30 16:24:25', '0000-00-00 00:00:00'),
(298, 'Rayachoti', '1', '13', 1, '2025-05-30 16:24:46', '0000-00-00 00:00:00'),
(299, 'Sambepalle', '1', '13', 1, '2025-05-30 16:25:02', '0000-00-00 00:00:00'),
(300, 'Chinnamandem', '1', '13', 1, '2025-05-30 16:25:19', '0000-00-00 00:00:00'),
(301, 'Galiveedu', '1', '13', 1, '2025-05-30 16:25:36', '0000-00-00 00:00:00'),
(302, 'Lakkireddipalle', '1', '13', 1, '2025-05-30 16:26:16', '0000-00-00 00:00:00'),
(303, 'Ramapuram', '1', '13', 1, '2025-05-30 16:26:31', '0000-00-00 00:00:00'),
(304, 'Addanki', '1', '14', 1, '2025-05-30 17:02:15', '0000-00-00 00:00:00'),
(305, 'Amruthalur', '1', '14', 1, '2025-05-30 17:02:29', '0000-00-00 00:00:00'),
(306, 'Ballikurava', '1', '14', 1, '2025-05-30 17:02:44', '0000-00-00 00:00:00'),
(307, 'Bapatla', '1', '14', 1, '2025-05-30 17:02:58', '0000-00-00 00:00:00'),
(308, 'Bhattiprolu', '1', '14', 1, '2025-05-30 17:03:12', '0000-00-00 00:00:00'),
(309, 'Cherukupalle', '1', '14', 1, '2025-05-30 17:03:25', '0000-00-00 00:00:00'),
(310, 'Chinaganjam', '1', '14', 1, '2025-05-30 17:03:38', '0000-00-00 00:00:00'),
(311, 'Chirala', '1', '14', 1, '2025-05-30 17:04:26', '0000-00-00 00:00:00'),
(312, 'Inkollu', '1', '14', 1, '2025-05-30 17:04:38', '0000-00-00 00:00:00'),
(313, 'J. Panguluru', '1', '14', 1, '2025-05-30 17:04:53', '0000-00-00 00:00:00'),
(314, 'Janakavarampanguluru', '1', '14', 1, '2025-05-30 17:05:06', '0000-00-00 00:00:00'),
(315, 'Karlapalem', '1', '14', 1, '2025-05-30 17:05:21', '0000-00-00 00:00:00'),
(316, 'Kolluru', '1', '14', 1, '2025-05-30 17:05:32', '0000-00-00 00:00:00'),
(317, 'Korisapadu', '1', '14', 1, '2025-05-30 17:05:50', '0000-00-00 00:00:00'),
(318, 'Martur', '1', '14', 1, '2025-05-30 17:08:49', '0000-00-00 00:00:00'),
(319, 'Medarametla', '1', '14', 1, '2025-05-30 17:09:04', '0000-00-00 00:00:00'),
(320, 'Nagaram', '1', '14', 1, '2025-05-30 17:09:21', '0000-00-00 00:00:00'),
(321, 'Nizampatnam', '1', '13', 1, '2025-05-30 17:09:40', '0000-00-00 00:00:00'),
(322, 'Parchur', '1', '14', 1, '2025-05-30 17:09:53', '0000-00-00 00:00:00'),
(323, 'Pittalavanipalem', '1', '14', 1, '2025-05-30 17:10:08', '0000-00-00 00:00:00'),
(324, 'Repalle', '1', '14', 1, '2025-05-30 17:10:22', '0000-00-00 00:00:00'),
(325, 'Santhamaguluru', '1', '14', 1, '2025-05-30 17:10:38', '0000-00-00 00:00:00'),
(326, 'Tsundur', '1', '14', 1, '2025-05-30 17:10:51', '0000-00-00 00:00:00'),
(328, 'vetapalem', '1', '14', 1, '2025-05-30 17:27:11', '0000-00-00 00:00:00'),
(329, 'Bhimavaram', '1', '15', 1, '2025-05-30 17:29:27', '0000-00-00 00:00:00'),
(330, 'Akividu', '1', '15', 1, '2025-05-30 17:29:43', '0000-00-00 00:00:00'),
(331, 'Attili', '1', '15', 1, '2025-05-30 17:30:02', '0000-00-00 00:00:00'),
(332, 'Ganapavaram', '1', '15', 1, '2025-05-30 17:30:20', '0000-00-00 00:00:00'),
(333, 'Palakoderu', '1', '15', 1, '2025-05-30 17:30:37', '0000-00-00 00:00:00'),
(334, 'Penugonda', '1', '15', 1, '2025-05-30 17:30:53', '0000-00-00 00:00:00'),
(335, 'Tanuku', '1', '15', 1, '2025-05-30 17:31:08', '0000-00-00 00:00:00'),
(337, 'Veeravasaram', '1', '15', 1, '2025-05-30 17:32:25', '0000-00-00 00:00:00'),
(338, 'Yelamanchili', '1', '15', 1, '2025-05-30 17:32:40', '0000-00-00 00:00:00'),
(339, 'Ananda Foods', '1', '15', 1, '2025-05-30 17:32:58', '0000-00-00 00:00:00'),
(340, 'Chinamiram', '1', '15', 1, '2025-05-30 17:33:17', '0000-00-00 00:00:00'),
(341, 'J.P. Road', '1', '15', 1, '2025-05-30 17:33:32', '0000-00-00 00:00:00'),
(342, 'Rayalam', '1', '15', 1, '2025-05-30 17:33:49', '0000-00-00 00:00:00'),
(343, 'Sreeramapuram', '1', '15', 1, '2025-05-30 17:34:06', '0000-00-00 00:00:00'),
(344, 'Taderu', '1', '15', 1, '2025-05-30 17:34:23', '0000-00-00 00:00:00'),
(345, 'Undi', '1', '15', 1, '2025-05-30 17:41:18', '0000-00-00 00:00:00'),
(346, 'Chittoor', '1', '16', 1, '2025-05-30 17:46:41', '0000-00-00 00:00:00'),
(347, 'Bangarupalem', '1', '16', 1, '2025-05-30 17:46:56', '0000-00-00 00:00:00'),
(348, 'Bukkapatnam', '1', '16', 1, '2025-05-30 17:47:13', '0000-00-00 00:00:00'),
(349, 'Chinnagottigallu', '1', '16', 1, '2025-05-30 17:47:31', '0000-00-00 00:00:00'),
(350, 'Chowdepalle', '1', '16', 1, '2025-05-30 17:47:48', '0000-00-00 00:00:00'),
(351, 'Gangadhara Nellore', '1', '16', 1, '2025-05-30 17:48:06', '0000-00-00 00:00:00'),
(352, 'Gudipala', '1', '16', 1, '2025-05-30 17:48:23', '0000-00-00 00:00:00'),
(353, 'Irala', '1', '16', 1, '2025-05-30 17:48:45', '0000-00-00 00:00:00'),
(354, 'Karvetinagar', '1', '16', 1, '2025-05-30 17:48:59', '0000-00-00 00:00:00'),
(355, 'Kuppam', '1', '16', 1, '2025-05-30 17:49:15', '0000-00-00 00:00:00'),
(356, 'Nagari', '1', '16', 1, '2025-05-30 17:49:30', '0000-00-00 00:00:00'),
(357, 'Nindra', '1', '16', 1, '2025-05-30 17:49:46', '0000-00-00 00:00:00'),
(358, 'Palamaner', '1', '16', 1, '2025-05-30 17:50:05', '0000-00-00 00:00:00'),
(359, 'Peddapanjani', '1', '16', 1, '2025-05-30 17:50:19', '0000-00-00 00:00:00'),
(360, 'Pissatur', '1', '16', 1, '2025-05-30 17:50:50', '0000-00-00 00:00:00'),
(361, 'Punganur', '1', '16', 1, '2025-05-30 17:51:06', '0000-00-00 00:00:00'),
(362, 'Puthalapattu', '1', '16', 1, '2025-05-30 17:51:23', '0000-00-00 00:00:00'),
(363, 'Ramakuppam', '1', '16', 1, '2025-05-30 17:51:43', '0000-00-00 00:00:00'),
(364, 'Santhipuram', '1', '16', 1, '2025-05-30 17:51:59', '0000-00-00 00:00:00'),
(365, 'Srikalahasti', '1', '16', 1, '2025-05-30 17:52:13', '0000-00-00 00:00:00'),
(366, 'Thavanampalle', '1', '16', 1, '2025-05-30 17:52:40', '0000-00-00 00:00:00'),
(367, 'Vedurukuppam', '1', '16', 1, '2025-05-30 17:52:56', '0000-00-00 00:00:00'),
(368, 'Venkatagiri', '1', '16', 1, '2025-05-30 17:53:12', '0000-00-00 00:00:00'),
(369, 'K.V.B. Puram', '1', '16', 1, '2025-05-30 17:53:58', '0000-00-00 00:00:00'),
(370, 'Narayanavanam', '1', '16', 1, '2025-05-30 17:54:12', '0000-00-00 00:00:00'),
(371, 'Satyavedu', '1', '16', 1, '2025-05-30 17:54:27', '0000-00-00 00:00:00'),
(372, 'Rajamahendravaram', '1', '17', 1, '2025-05-31 10:46:32', '0000-00-00 00:00:00'),
(373, 'Ainavilli', '1', '17', 1, '2025-05-31 10:46:49', '0000-00-00 00:00:00'),
(374, 'Alamuru', '1', '17', 1, '2025-05-31 10:47:02', '0000-00-00 00:00:00'),
(375, 'Allavaram', '1', '17', 1, '2025-05-31 10:47:18', '0000-00-00 00:00:00'),
(376, 'Ambajipeta', '1', '17', 1, '2025-05-31 10:47:34', '0000-00-00 00:00:00'),
(377, 'Atreyapuram', '1', '17', 1, '2025-05-31 10:47:51', '0000-00-00 00:00:00'),
(378, 'I. Polavaram', '1', '17', 1, '2025-05-31 10:48:03', '0000-00-00 00:00:00'),
(379, 'Katrenikona', '1', '17', 1, '2025-05-31 10:48:16', '0000-00-00 00:00:00'),
(381, 'Kothapeta', '1', '17', 1, '2025-05-31 10:49:15', '0000-00-00 00:00:00'),
(382, 'Malikipuram', '1', '17', 1, '2025-05-31 10:50:12', '0000-00-00 00:00:00'),
(383, 'Mamidikuduru', '1', '17', 1, '2025-05-31 10:50:25', '0000-00-00 00:00:00'),
(384, 'Mummidivaram', '1', '17', 1, '2025-05-31 10:50:42', '0000-00-00 00:00:00'),
(385, 'P. Gannavaram', '1', '17', 1, '2025-05-31 10:50:55', '0000-00-00 00:00:00'),
(386, 'Razole', '1', '17', 1, '2025-05-31 10:51:08', '0000-00-00 00:00:00'),
(387, 'Sakhinetipalle', '1', '17', 1, '2025-05-31 10:51:21', '0000-00-00 00:00:00'),
(388, 'Uppalaguptam', '1', '17', 1, '2025-05-31 10:51:37', '0000-00-00 00:00:00'),
(389, 'Kakinada', '1', '17', 1, '2025-05-31 10:51:51', '0000-00-00 00:00:00'),
(390, 'Peddapuram', '1', '17', 1, '2025-05-31 10:52:05', '0000-00-00 00:00:00'),
(391, 'Gollaprolu', '1', '17', 1, '2025-05-31 10:52:18', '0000-00-00 00:00:00'),
(392, 'Jaggampeta', '1', '17', 1, '2025-05-31 10:52:30', '0000-00-00 00:00:00'),
(393, 'Samalkot', '1', '17', 1, '2025-05-31 10:52:58', '0000-00-00 00:00:00'),
(394, 'Kakinada Port', '1', '17', 1, '2025-05-31 10:53:13', '0000-00-00 00:00:00'),
(395, 'Ramanayyapeta', '1', '17', 1, '2025-05-31 10:53:29', '0000-00-00 00:00:00'),
(396, 'Suryaraopeta', '1', '17', 1, '2025-05-31 10:53:48', '0000-00-00 00:00:00'),
(397, 'Eluru', '1', '18', 1, '2025-05-31 11:23:48', '0000-00-00 00:00:00'),
(398, 'Agiripalle', '1', '18', 1, '2025-05-31 11:24:01', '0000-00-00 00:00:00'),
(399, 'Bhimadole', '1', '18', 1, '2025-05-31 11:24:17', '0000-00-00 00:00:00'),
(400, 'Buttayagudem', '1', '18', 1, '2025-05-31 11:24:31', '0000-00-00 00:00:00'),
(401, 'Chagallu', '1', '18', 1, '2025-05-31 11:24:43', '0000-00-00 00:00:00'),
(402, 'Chintalapudi', '1', '18', 1, '2025-05-31 11:24:55', '0000-00-00 00:00:00'),
(403, 'Denduluru', '1', '18', 1, '2025-05-31 11:25:08', '0000-00-00 00:00:00'),
(404, 'Dwaraka Tirumala', '1', '18', 1, '2025-05-31 11:25:20', '0000-00-00 00:00:00'),
(405, 'Ganapavaram', '1', '18', 1, '2025-05-31 11:25:35', '0000-00-00 00:00:00'),
(406, 'Gopalapuram', '1', '18', 1, '2025-05-31 11:25:49', '0000-00-00 00:00:00'),
(407, 'Jangareddygudem', '1', '18', 1, '2025-05-31 11:26:06', '0000-00-00 00:00:00'),
(408, 'Jeelugumilli', '1', '18', 1, '2025-05-31 11:26:20', '0000-00-00 00:00:00'),
(409, 'Kaikalur', '1', '18', 1, '2025-05-31 11:26:34', '0000-00-00 00:00:00'),
(410, 'Kalidindi', '1', '18', 1, '2025-05-31 11:26:48', '0000-00-00 00:00:00'),
(411, 'Kamavarapukota', '1', '18', 1, '2025-05-31 11:27:03', '0000-00-00 00:00:00'),
(412, 'Koyyalagudem', '1', '18', 1, '2025-05-31 11:27:18', '0000-00-00 00:00:00'),
(413, 'Kukunoor', '1', '18', 1, '2025-05-31 11:27:36', '0000-00-00 00:00:00'),
(414, 'Lingapalem -', '1', '18', 1, '2025-05-31 11:27:53', '0000-00-00 00:00:00'),
(415, 'Mandavalli', '1', '18', 1, '2025-05-31 11:28:05', '0000-00-00 00:00:00'),
(416, 'Musunuru', '1', '18', 1, '2025-05-31 11:28:28', '0000-00-00 00:00:00'),
(417, 'Nidamarru', '1', '18', 1, '2025-05-31 11:28:42', '0000-00-00 00:00:00'),
(418, 'Nuzvid', '1', '18', 1, '2025-05-31 11:28:57', '0000-00-00 00:00:00'),
(419, 'Pedapadu', '1', '18', 1, '2025-05-31 11:29:45', '0000-00-00 00:00:00'),
(420, 'Pedavegi', '1', '18', 1, '2025-05-31 11:29:59', '0000-00-00 00:00:00'),
(421, 'Polavaram', '1', '18', 1, '2025-05-31 11:30:16', '0000-00-00 00:00:00'),
(422, 'T. Narasapuram', '1', '18', 1, '2025-05-31 11:30:31', '0000-00-00 00:00:00'),
(423, 'Unguturu', '1', '18', 1, '2025-05-31 11:30:44', '0000-00-00 00:00:00'),
(424, 'Velerupadu', '1', '18', 1, '2025-05-31 11:30:56', '0000-00-00 00:00:00'),
(425, 'Eluru Bazar', '1', '18', 1, '2025-05-31 11:31:12', '0000-00-00 00:00:00'),
(426, 'Eluru R.S', '1', '18', 1, '2025-05-31 11:31:24', '0000-00-00 00:00:00'),
(427, 'Eluru Bus Station', '1', '18', 1, '2025-05-31 11:31:40', '0000-00-00 00:00:00'),
(428, 'Guntur', '1', '19', 1, '2025-05-31 11:57:13', '0000-00-00 00:00:00'),
(429, 'Amaravathi', '1', '19', 1, '2025-05-31 11:57:45', '0000-00-00 00:00:00'),
(430, 'Bapatla', '1', '19', 1, '2025-05-31 11:58:00', '0000-00-00 00:00:00'),
(431, 'Bellamkonda', '1', '19', 1, '2025-05-31 11:58:15', '0000-00-00 00:00:00'),
(432, 'Bollapalle', '1', '19', 1, '2025-05-31 11:58:30', '0000-00-00 00:00:00'),
(433, 'Chebrolu', '1', '19', 1, '2025-05-31 11:58:58', '0000-00-00 00:00:00'),
(434, 'Duggirala', '1', '19', 1, '2025-05-31 11:59:22', '0000-00-00 00:00:00'),
(435, 'Kollipara', '1', '19', 1, '2025-05-31 11:59:36', '0000-00-00 00:00:00'),
(436, 'Mangalagiri', '1', '19', 1, '2025-05-31 11:59:50', '0000-00-00 00:00:00'),
(437, 'Medikonduru', '1', '19', 1, '2025-05-31 12:00:04', '0000-00-00 00:00:00'),
(438, 'Muppalla', '1', '19', 1, '2025-05-31 12:00:24', '0000-00-00 00:00:00'),
(439, 'Phirangipuram', '1', '19', 1, '2025-05-31 12:00:37', '0000-00-00 00:00:00'),
(440, 'Ponnur', '1', '19', 1, '2025-05-31 12:00:49', '0000-00-00 00:00:00'),
(441, 'Prathipadu', '1', '19', 1, '2025-05-31 12:01:03', '0000-00-00 00:00:00'),
(442, 'Tadepalle', '1', '19', 1, '2025-05-31 12:01:19', '0000-00-00 00:00:00'),
(443, 'Tadikonda', '1', '19', 1, '2025-05-31 12:01:31', '0000-00-00 00:00:00'),
(444, 'Tenali', '1', '19', 1, '2025-05-31 12:01:45', '0000-00-00 00:00:00'),
(445, 'Thullur', '1', '19', 1, '2025-05-31 12:02:05', '0000-00-00 00:00:00'),
(446, 'Vatticherukuru', '1', '19', 1, '2025-05-31 12:02:17', '0000-00-00 00:00:00'),
(447, 'Arundelpet', '1', '19', 1, '2025-05-31 12:02:32', '0000-00-00 00:00:00'),
(448, 'Brodipet', '1', '19', 1, '2025-05-31 12:02:45', '0000-00-00 00:00:00'),
(449, 'Lakshmipuram', '1', '19', 1, '2025-05-31 12:03:09', '0000-00-00 00:00:00'),
(450, 'Pattabhipuram', '1', '19', 1, '2025-05-31 12:03:51', '0000-00-00 00:00:00'),
(451, 'Srinivasa Nagar', '1', '19', 1, '2025-05-31 12:04:05', '0000-00-00 00:00:00'),
(452, 'Kadapa', '1', '20', 1, '2025-05-31 13:06:29', '0000-00-00 00:00:00'),
(453, 'Badvel', '1', '20', 1, '2025-05-31 13:06:51', '0000-00-00 00:00:00'),
(454, 'B. Kodur', '1', '20', 1, '2025-05-31 13:07:09', '0000-00-00 00:00:00'),
(455, 'B. Mattam', '1', '20', 1, '2025-05-31 13:07:32', '0000-00-00 00:00:00'),
(456, 'Brahmamgari Mattam', '1', '20', 1, '2025-05-31 13:07:49', '0000-00-00 00:00:00'),
(457, 'Chakrayapet', '1', '20', 1, '2025-05-31 13:08:07', '0000-00-00 00:00:00'),
(458, 'Chapadu', '1', '20', 1, '2025-05-31 13:08:22', '0000-00-00 00:00:00'),
(459, 'Chennur', '1', '20', 1, '2025-05-31 13:08:46', '0000-00-00 00:00:00'),
(460, 'Chintakommadinne', '1', '20', 1, '2025-05-31 13:09:13', '0000-00-00 00:00:00'),
(461, 'Duvvur', '1', '20', 1, '2025-05-31 13:09:32', '0000-00-00 00:00:00'),
(462, 'Gopavaram', '1', '20', 1, '2025-05-31 13:09:50', '0000-00-00 00:00:00'),
(463, 'Jammalamadugu', '1', '20', 1, '2025-05-31 13:10:32', '0000-00-00 00:00:00'),
(464, 'Kalasapadu', '1', '20', 1, '2025-05-31 13:10:52', '0000-00-00 00:00:00'),
(465, 'Kamalapuram', '1', '20', 1, '2025-05-31 13:11:07', '0000-00-00 00:00:00'),
(466, 'Khajipet', '1', '20', 1, '2025-05-31 13:11:18', '0000-00-00 00:00:00'),
(467, 'Kodur', '1', '20', 1, '2025-05-31 13:11:30', '0000-00-00 00:00:00'),
(469, 'Kondapuram', '1', '20', 1, '2025-05-31 13:12:53', '0000-00-00 00:00:00'),
(470, 'Lingala', '1', '20', 1, '2025-05-31 13:13:14', '0000-00-00 00:00:00'),
(471, 'Muddanur', '1', '20', 1, '2025-05-31 13:13:28', '0000-00-00 00:00:00'),
(472, 'Mydukur', '1', '21', 1, '2025-05-31 13:13:45', '0000-00-00 00:00:00'),
(473, 'Mylavaram', '1', '20', 1, '2025-05-31 13:14:03', '0000-00-00 00:00:00'),
(474, 'Obulavaripalle', '1', '20', 1, '2025-05-31 13:14:17', '0000-00-00 00:00:00'),
(475, 'Peddamudium', '1', '20', 1, '2025-05-31 13:14:33', '0000-00-00 00:00:00'),
(476, 'Pendlimarri', '1', '20', 1, '2025-05-31 13:14:53', '0000-00-00 00:00:00'),
(477, 'Porumamilla', '1', '20', 1, '2025-05-31 13:15:08', '0000-00-00 00:00:00'),
(478, 'Proddatur', '1', '20', 1, '2025-05-31 13:15:28', '0000-00-00 00:00:00'),
(479, 'Pulivendla', '1', '20', 1, '2025-05-31 13:16:01', '0000-00-00 00:00:00'),
(480, 'Rajampet', '1', '20', 1, '2025-05-31 13:16:17', '0000-00-00 00:00:00'),
(481, 'Rajupalem', '1', '20', 1, '2025-05-31 13:16:37', '0000-00-00 00:00:00'),
(482, 'Simhadripuram', '1', '20', 1, '2025-05-31 13:16:48', '0000-00-00 00:00:00'),
(483, 'T. Sundupalle', '1', '20', 1, '2025-05-31 13:17:02', '0000-00-00 00:00:00'),
(484, 'Vallur', '1', '20', 1, '2025-05-31 13:17:14', '0000-00-00 00:00:00'),
(485, 'Veerapunayunipalle', '1', '20', 1, '2025-05-31 13:17:30', '0000-00-00 00:00:00'),
(486, 'Vontimitta', '1', '20', 1, '2025-05-31 13:17:44', '0000-00-00 00:00:00'),
(487, 'Yerraguntla', '1', '20', 1, '2025-05-31 13:18:00', '0000-00-00 00:00:00'),
(488, 'Almaspet', '1', '20', 1, '2025-05-31 13:18:18', '0000-00-00 00:00:00'),
(489, 'Maruti Nagar', '1', '20', 1, '2025-05-31 13:18:35', '0000-00-00 00:00:00'),
(490, 'Nagarajupet', '1', '20', 1, '2025-05-31 13:18:48', '0000-00-00 00:00:00'),
(491, 'Sunnapuralla Palli', '1', '20', 1, '2025-05-31 13:19:03', '0000-00-00 00:00:00'),
(492, 'Shankarapuram', '1', '20', 1, '2025-05-31 13:19:16', '0000-00-00 00:00:00'),
(493, 'Yogi Vemana University', '1', '20', 1, '2025-05-31 13:19:42', '0000-00-00 00:00:00'),
(494, 'Kakinada', '1', '21', 1, '2025-05-31 14:45:57', '0000-00-00 00:00:00'),
(495, 'Gollaprolu', '1', '21', 1, '2025-05-31 14:46:20', '0000-00-00 00:00:00'),
(496, 'Jaggampeta', '1', '21', 1, '2025-05-31 14:46:37', '0000-00-00 00:00:00'),
(497, 'Kirlampudi', '1', '21', 1, '2025-05-31 14:46:54', '0000-00-00 00:00:00'),
(498, 'Kothapalle', '1', '21', 1, '2025-05-31 14:47:11', '0000-00-00 00:00:00'),
(499, 'Pedapudi', '1', '21', 1, '2025-05-31 14:47:53', '0000-00-00 00:00:00'),
(500, 'Peddapuram', '1', '21', 1, '2025-05-31 14:48:13', '0000-00-00 00:00:00'),
(501, 'Pithapuram', '1', '21', 1, '2025-05-31 14:48:29', '0000-00-00 00:00:00'),
(502, 'Prathipadu', '1', '21', 1, '2025-05-31 14:48:51', '0000-00-00 00:00:00'),
(503, 'Samalkot', '1', '21', 1, '2025-05-31 14:49:07', '0000-00-00 00:00:00'),
(504, 'Sankhavaram', '1', '21', 1, '2025-05-31 14:49:22', '0000-00-00 00:00:00'),
(505, 'Thondangi', '1', '21', 1, '2025-05-31 14:49:45', '0000-00-00 00:00:00'),
(506, 'Tuni', '1', '21', 1, '2025-05-31 14:50:11', '0000-00-00 00:00:00'),
(507, 'U. Kothapalli', '1', '21', 1, '2025-05-31 14:51:34', '0000-00-00 00:00:00'),
(508, 'Yeleswaram', '1', '21', 1, '2025-05-31 14:51:55', '0000-00-00 00:00:00'),
(509, 'Gandepalli', '1', '21', 1, '2025-05-31 14:52:12', '0000-00-00 00:00:00'),
(510, 'Gokavaram', '1', '21', 1, '2025-05-31 14:52:27', '0000-00-00 00:00:00'),
(511, 'Kadiam', '1', '21', 1, '2025-05-31 14:52:43', '0000-00-00 00:00:00'),
(512, 'Kajuluru', '1', '21', 1, '2025-05-31 14:52:56', '0000-00-00 00:00:00'),
(513, 'Korukonda', '1', '21', 1, '2025-05-31 14:53:15', '0000-00-00 00:00:00'),
(514, 'Rajanagaram', '1', '21', 1, '2025-05-31 14:53:40', '0000-00-00 00:00:00'),
(515, 'Rajavolu', '1', '21', 1, '2025-05-31 14:53:54', '0000-00-00 00:00:00'),
(516, 'Kakinada Bazar', '1', '21', 1, '2025-05-31 14:54:10', '0000-00-00 00:00:00'),
(517, 'Kakinada Rural', '1', '21', 1, '2025-05-31 14:54:30', '0000-00-00 00:00:00'),
(518, 'Sriramnagar', '1', '21', 1, '2025-05-31 14:54:45', '0000-00-00 00:00:00'),
(519, 'Ramanayyapeta', '1', '21', 1, '2025-05-31 14:55:03', '0000-00-00 00:00:00'),
(520, 'Suryaraopeta', '1', '21', 1, '2025-05-31 14:55:22', '0000-00-00 00:00:00'),
(521, 'Amalapuram', '1', '22', 1, '2025-05-31 15:15:27', '0000-00-00 00:00:00'),
(522, 'Ainavilli', '1', '22', 1, '2025-05-31 15:15:51', '0000-00-00 00:00:00'),
(523, 'Allavaram', '1', '22', 1, '2025-05-31 15:17:14', '0000-00-00 00:00:00'),
(524, 'Ambajipeta', '1', '22', 1, '2025-05-31 15:17:27', '0000-00-00 00:00:00'),
(525, 'Alamuru', '1', '22', 1, '2025-05-31 15:17:55', '0000-00-00 00:00:00'),
(526, 'Kapileswarapuram', '1', '22', 1, '2025-05-31 15:18:18', '0000-00-00 00:00:00'),
(527, 'Mandapeta', '1', '22', 1, '2025-05-31 15:18:33', '0000-00-00 00:00:00'),
(528, 'Anaparthi', '1', '22', 1, '2025-05-31 15:18:46', '0000-00-00 00:00:00'),
(529, 'Biccavolu', '1', '22', 1, '2025-05-31 15:19:00', '0000-00-00 00:00:00'),
(530, 'Ravulapalem', '1', '22', 1, '2025-05-31 15:19:12', '0000-00-00 00:00:00'),
(531, 'Bandarlanka', '1', '22', 1, '2025-05-31 15:19:25', '0000-00-00 00:00:00'),
(532, 'Kamanagaruvu', '1', '22', 1, '2025-05-31 15:19:39', '0000-00-00 00:00:00'),
(533, 'Konkapalli', '1', '22', 1, '2025-05-31 15:19:50', '0000-00-00 00:00:00'),
(534, 'Indupalli', '1', '22', 1, '2025-05-31 15:20:04', '0000-00-00 00:00:00'),
(535, 'Uppalaguptam', '1', '22', 1, '2025-05-31 15:24:48', '0000-00-00 00:00:00'),
(536, 'Machilipatnam', '1', '23', 1, '2025-05-31 15:27:12', '0000-00-00 00:00:00'),
(537, 'Machilipatnam', '1', '66', 1, '2025-05-31 15:29:19', '0000-00-00 00:00:00'),
(538, 'Avanigadda', '1', '66', 1, '2025-05-31 15:29:34', '0000-00-00 00:00:00'),
(539, 'Bantumilli', '1', '66', 1, '2025-05-31 15:29:47', '0000-00-00 00:00:00'),
(540, 'Bapulapadu', '1', '66', 1, '2025-05-31 15:30:05', '0000-00-00 00:00:00'),
(541, 'Challapalle', '1', '66', 1, '2025-05-31 15:30:19', '0000-00-00 00:00:00'),
(542, 'Chandarlapadu', '1', '66', 1, '2025-05-31 15:33:13', '0000-00-00 00:00:00'),
(543, 'Gannavaram', '1', '66', 1, '2025-05-31 15:33:40', '0000-00-00 00:00:00'),
(544, 'Ghantasala', '1', '66', 1, '2025-05-31 15:34:00', '0000-00-00 00:00:00'),
(545, 'Gudivada', '1', '66', 1, '2025-05-31 15:34:17', '0000-00-00 00:00:00'),
(546, 'Gudlavalleru', '1', '66', 1, '2025-05-31 15:34:38', '0000-00-00 00:00:00'),
(547, 'Manginapudi', '1', '66', 1, '2025-05-31 15:35:11', '0000-00-00 00:00:00'),
(548, 'Nagayalanka East', '1', '66', 1, '2025-05-31 15:35:23', '0000-00-00 00:00:00'),
(549, 'Pamarru Bazar', '1', '66', 1, '2025-05-31 15:35:39', '0000-00-00 00:00:00'),
(550, 'Tallapalem', '1', '66', 1, '2025-05-31 15:35:51', '0000-00-00 00:00:00'),
(551, 'Desaipet', '1', '66', 1, '2025-05-31 15:36:15', '0000-00-00 00:00:00'),
(552, 'Chilakalapudi', '1', '66', 1, '2025-05-31 15:36:29', '0000-00-00 00:00:00'),
(553, 'Batchupet', '1', '66', 1, '2025-05-31 15:39:48', '0000-00-00 00:00:00'),
(554, 'Pedana', '1', '66', 1, '2025-05-31 17:05:03', '0000-00-00 00:00:00'),
(555, 'Pedaparupudi', '1', '66', 1, '2025-05-31 17:05:18', '0000-00-00 00:00:00'),
(556, 'Penamaluru', '1', '66', 1, '2025-05-31 17:05:33', '0000-00-00 00:00:00'),
(557, 'Thotlavalluru', '1', '66', 1, '2025-05-31 17:05:45', '0000-00-00 00:00:00'),
(558, 'Unguturu', '1', '66', 1, '2025-05-31 17:05:59', '0000-00-00 00:00:00'),
(559, 'Vuyyuru', '1', '66', 1, '2025-05-31 17:06:14', '0000-00-00 00:00:00'),
(560, 'Kurnool', '1', '28', 1, '2025-05-31 17:22:13', '0000-00-00 00:00:00'),
(561, 'Adoni', '1', '28', 1, '2025-05-31 17:24:19', '0000-00-00 00:00:00'),
(562, 'Alur', '1', '28', 1, '2025-05-31 17:24:35', '0000-00-00 00:00:00'),
(563, 'Devanakonda', '1', '28', 1, '2025-05-31 17:27:04', '0000-00-00 00:00:00'),
(564, 'Gonegandla', '1', '28', 1, '2025-05-31 17:30:05', '0000-00-00 00:00:00'),
(565, 'Chippagiri', '1', '28', 1, '2025-05-31 17:30:27', '0000-00-00 00:00:00'),
(566, 'C. Belagal', '1', '28', 1, '2025-05-31 17:30:47', '0000-00-00 00:00:00'),
(567, 'Aspari', '1', '28', 1, '2025-05-31 17:31:03', '0000-00-00 00:00:00'),
(568, 'Gudur', '1', '28', 1, '2025-05-31 17:31:24', '0000-00-00 00:00:00'),
(569, 'Kallur', '1', '28', 1, '2025-05-31 17:35:27', '0000-00-00 00:00:00'),
(570, 'Kodumur', '1', '28', 1, '2025-05-31 17:35:42', '0000-00-00 00:00:00'),
(571, 'Krishnagiri', '1', '28', 1, '2025-05-31 17:38:43', '0000-00-00 00:00:00'),
(572, 'Maddikera', '1', '28', 1, '2025-05-31 17:38:55', '0000-00-00 00:00:00'),
(573, 'Mantralayam', '1', '28', 1, '2025-05-31 17:39:11', '0000-00-00 00:00:00'),
(574, 'Nandavaram', '1', '28', 1, '2025-05-31 17:39:53', '0000-00-00 00:00:00'),
(575, 'Orvakal', '1', '28', 1, '2025-05-31 17:40:16', '0000-00-00 00:00:00'),
(576, 'Pattikonda', '1', '28', 1, '2025-05-31 17:40:31', '0000-00-00 00:00:00'),
(577, 'Pedda Kadubur', '1', '28', 1, '2025-05-31 17:41:23', '0000-00-00 00:00:00'),
(578, 'Bethamcherla', '1', '28', 1, '2025-05-31 17:47:06', '0000-00-00 00:00:00'),
(579, 'Kurnool Chowk', '1', '28', 1, '2025-05-31 18:02:49', '0000-00-00 00:00:00'),
(580, 'Industrial Estate Kurnool', '1', '28', 1, '2025-05-31 18:03:17', '0000-00-00 00:00:00'),
(581, 'Knl-Osmania', '1', '28', 1, '2025-05-31 18:03:41', '0000-00-00 00:00:00'),
(582, 'Kothapeta Kurnool', '1', '28', 1, '2025-05-31 18:03:55', '0000-00-00 00:00:00'),
(583, 'Sree Rama Nagar', '1', '28', 1, '2025-05-31 18:04:13', '0000-00-00 00:00:00'),
(584, 'Nandyal', '1', '25', 1, '2025-06-02 12:07:30', '0000-00-00 00:00:00'),
(585, 'Atmakur', '1', '25', 1, '2025-06-02 12:07:46', '0000-00-00 00:00:00'),
(586, 'Banaganapalle', '1', '25', 1, '2025-06-02 12:08:11', '0000-00-00 00:00:00'),
(587, 'Bethamcherla', '1', '25', 1, '2025-06-02 12:08:37', '0000-00-00 00:00:00'),
(588, 'Dhone', '1', '25', 1, '2025-06-02 12:08:56', '0000-00-00 00:00:00'),
(589, 'Jupadu Bungalow', '1', '25', 1, '2025-06-02 12:09:14', '0000-00-00 00:00:00'),
(590, 'Kothapalli', '1', '25', 1, '2025-06-02 12:09:28', '0000-00-00 00:00:00'),
(591, 'Mahanandi', '1', '25', 1, '2025-06-02 12:09:41', '0000-00-00 00:00:00'),
(592, 'Midthur', '1', '25', 1, '2025-06-02 12:09:54', '0000-00-00 00:00:00'),
(593, 'Nandikotkur', '1', '25', 1, '2025-06-02 12:10:07', '0000-00-00 00:00:00'),
(594, 'Pamulapadu', '1', '25', 1, '2025-06-02 12:10:22', '0000-00-00 00:00:00'),
(595, 'Srisailam', '1', '25', 1, '2025-06-02 12:10:35', '0000-00-00 00:00:00'),
(596, 'Nandyal Bazar', '1', '25', 1, '2025-06-02 12:10:48', '0000-00-00 00:00:00'),
(597, 'Nandyal R.S.', '1', '25', 1, '2025-06-02 12:11:50', '0000-00-00 00:00:00'),
(598, 'Nunepalle', '1', '25', 1, '2025-06-02 12:12:03', '0000-00-00 00:00:00'),
(599, 'Sanjeeva Nagar', '1', '25', 1, '2025-06-02 12:12:37', '0000-00-00 00:00:00'),
(600, 'Nellore', '1', '26', 1, '2025-06-02 13:08:09', '0000-00-00 00:00:00'),
(601, 'Allur', '1', '26', 1, '2025-06-02 13:10:10', '0000-00-00 00:00:00'),
(602, 'Ananthasagaram', '1', '26', 1, '2025-06-02 13:19:41', '0000-00-00 00:00:00'),
(603, 'Anumasamudrampeta', '1', '26', 1, '2025-06-02 13:19:58', '0000-00-00 00:00:00'),
(604, 'Atmakur', '1', '26', 1, '2025-06-02 13:20:12', '0000-00-00 00:00:00'),
(605, 'Bogole', '1', '26', 1, '2025-06-02 13:20:29', '0000-00-00 00:00:00'),
(606, 'Buchireddipalem', '1', '26', 1, '2025-06-02 13:20:43', '0000-00-00 00:00:00'),
(607, 'Chejerla', '1', '26', 1, '2025-06-02 13:20:57', '0000-00-00 00:00:00'),
(608, 'Chillakur', '1', '25', 1, '2025-06-02 13:21:16', '0000-00-00 00:00:00'),
(609, 'Chillakur', '1', '26', 1, '2025-06-02 13:23:12', '0000-00-00 00:00:00'),
(610, 'Chittamur', '1', '26', 1, '2025-06-02 13:23:38', '0000-00-00 00:00:00'),
(611, 'Dakkili', '1', '26', 1, '2025-06-02 13:24:13', '0000-00-00 00:00:00'),
(612, 'Doravarisatram', '1', '26', 1, '2025-06-02 13:24:27', '0000-00-00 00:00:00'),
(613, 'Duttalur', '1', '26', 1, '2025-06-02 13:24:41', '0000-00-00 00:00:00'),
(614, 'Gudur', '1', '26', 1, '2025-06-02 13:24:55', '0000-00-00 00:00:00'),
(615, 'Indukurpet', '1', '26', 1, '2025-06-02 13:25:10', '0000-00-00 00:00:00'),
(616, 'Jaladanki', '1', '26', 1, '2025-06-02 13:25:23', '0000-00-00 00:00:00'),
(617, 'Kaligiri', '1', '26', 1, '2025-06-02 14:42:17', '0000-00-00 00:00:00'),
(618, 'Kaluvoya', '1', '26', 1, '2025-06-02 14:46:45', '0000-00-00 00:00:00'),
(619, 'Kavali', '1', '26', 1, '2025-06-02 14:47:16', '0000-00-00 00:00:00'),
(620, 'Kodavalur', '1', '26', 1, '2025-06-02 14:47:38', '0000-00-00 00:00:00'),
(621, 'Kondapuram', '1', '26', 1, '2025-06-02 14:47:55', '0000-00-00 00:00:00'),
(622, 'Kovur', '1', '26', 1, '2025-06-02 14:48:16', '0000-00-00 00:00:00'),
(623, 'Manubolu', '1', '26', 1, '2025-06-02 14:48:29', '0000-00-00 00:00:00'),
(624, 'Marripadu', '1', '26', 1, '2025-06-02 14:48:42', '0000-00-00 00:00:00'),
(625, 'Muthukur', '1', '26', 1, '2025-06-02 14:49:05', '0000-00-00 00:00:00'),
(626, 'Naidupeta', '1', '26', 1, '2025-06-02 15:32:02', '0000-00-00 00:00:00'),
(627, 'Ozili', '1', '26', 1, '2025-06-02 15:33:11', '0000-00-00 00:00:00'),
(628, 'Podalakur', '1', '26', 1, '2025-06-02 15:39:51', '0000-00-00 00:00:00'),
(629, 'Rapur', '1', '26', 1, '2025-06-02 15:40:33', '0000-00-00 00:00:00'),
(630, 'Sangam', '1', '26', 1, '2025-06-02 15:41:28', '0000-00-00 00:00:00'),
(631, 'Seetharamapuram', '1', '26', 1, '2025-06-02 15:41:42', '0000-00-00 00:00:00'),
(632, 'Sullurpeta', '1', '26', 1, '2025-06-02 15:41:55', '0000-00-00 00:00:00'),
(633, 'Sydapuram', '1', '26', 1, '2025-06-02 15:42:23', '0000-00-00 00:00:00'),
(634, 'Tada', '1', '26', 1, '2025-06-02 15:42:36', '0000-00-00 00:00:00'),
(635, 'Udayagiri', '1', '26', 1, '2025-06-02 15:43:21', '0000-00-00 00:00:00'),
(636, 'Varikuntapadu', '1', '26', 1, '2025-06-02 15:43:38', '0000-00-00 00:00:00');
INSERT INTO `tbl_sub_location` (`id`, `sub_location`, `state_id`, `location_id`, `status`, `created_at`, `updated_at`) VALUES
(637, 'Venkatachalam', '1', '26', 1, '2025-06-02 15:43:52', '0000-00-00 00:00:00'),
(638, 'Vidavalur', '1', '26', 1, '2025-06-02 15:48:19', '0000-00-00 00:00:00'),
(639, 'Vinjamur', '1', '26', 1, '2025-06-02 15:48:33', '0000-00-00 00:00:00'),
(640, 'A.C. Nagar', '1', '26', 1, '2025-06-02 15:48:56', '0000-00-00 00:00:00'),
(641, 'Chintareddypalem', '1', '26', 1, '2025-06-02 15:49:13', '0000-00-00 00:00:00'),
(642, 'Pogathota', '1', '26', 1, '2025-06-02 15:49:36', '0000-00-00 00:00:00'),
(643, 'Stonehousepet', '1', '26', 1, '2025-06-02 15:49:53', '0000-00-00 00:00:00'),
(644, 'Vijayawada', '1', '29', 1, '2025-06-02 15:54:40', '0000-00-00 00:00:00'),
(645, 'A. Konduru', '1', '29', 1, '2025-06-02 15:54:52', '0000-00-00 00:00:00'),
(646, 'Chandarlapadu', '1', '29', 1, '2025-06-02 15:55:07', '0000-00-00 00:00:00'),
(647, 'Gampalagudem', '1', '29', 1, '2025-06-02 15:56:17', '0000-00-00 00:00:00'),
(648, 'Ibrahimpatnam', '1', '29', 1, '2025-06-02 15:56:33', '0000-00-00 00:00:00'),
(649, 'Jaggaiahpeta', '1', '29', 1, '2025-06-02 15:57:12', '0000-00-00 00:00:00'),
(650, 'Kanchikacherla', '1', '29', 1, '2025-06-02 15:57:33', '0000-00-00 00:00:00'),
(651, 'Mylavaram', '1', '29', 1, '2025-06-02 15:57:44', '0000-00-00 00:00:00'),
(652, 'Nandigama', '1', '29', 1, '2025-06-02 15:57:57', '0000-00-00 00:00:00'),
(653, 'Penuganchiprolu', '1', '29', 1, '2025-06-02 15:58:15', '0000-00-00 00:00:00'),
(654, 'Reddigudem', '1', '29', 1, '2025-06-02 15:58:31', '0000-00-00 00:00:00'),
(655, 'Vissannapeta', '1', '29', 1, '2025-06-02 16:02:13', '0000-00-00 00:00:00'),
(656, 'Vijayawada Central', '1', '29', 1, '2025-06-02 16:02:23', '0000-00-00 00:00:00'),
(657, 'Vijayawada East', '1', '29', 1, '2025-06-02 16:02:44', '0000-00-00 00:00:00'),
(658, 'Vijayawada Rural', '1', '29', 1, '2025-06-02 16:02:58', '0000-00-00 00:00:00'),
(659, 'Gannavaram', '1', '29', 1, '2025-06-02 16:03:17', '0000-00-00 00:00:00'),
(660, 'NTR Administrative Block', '1', '29', 1, '2025-06-02 16:03:33', '0000-00-00 00:00:00'),
(661, 'Paritala', '1', '29', 1, '2025-06-02 16:03:48', '0000-00-00 00:00:00'),
(662, 'Patamata', '1', '29', 1, '2025-06-02 16:03:58', '0000-00-00 00:00:00'),
(663, 'Penamaluru', '1', '29', 1, '2025-06-02 16:04:15', '0000-00-00 00:00:00'),
(664, 'Narasaraopet', '1', '30', 1, '2025-06-02 16:10:39', '0000-00-00 00:00:00'),
(665, 'Amaravathi', '1', '30', 1, '2025-06-02 16:10:49', '0000-00-00 00:00:00'),
(666, 'Atchampet', '1', '30', 1, '2025-06-02 16:11:12', '0000-00-00 00:00:00'),
(667, 'Bellamkonda', '1', '30', 1, '2025-06-02 16:11:29', '0000-00-00 00:00:00'),
(668, 'Bollapalli', '1', '30', 1, '2025-06-02 16:11:42', '0000-00-00 00:00:00'),
(669, 'Chilakaluripet', '1', '30', 1, '2025-06-02 16:11:56', '0000-00-00 00:00:00'),
(670, 'Dachepalli', '1', '30', 1, '2025-06-02 16:12:09', '0000-00-00 00:00:00'),
(671, 'Durgi', '1', '30', 1, '2025-06-02 16:12:30', '0000-00-00 00:00:00'),
(672, 'Karempudi', '1', '30', 1, '2025-06-02 16:15:53', '0000-00-00 00:00:00'),
(673, 'Krosuru', '1', '30', 1, '2025-06-02 16:16:08', '0000-00-00 00:00:00'),
(674, 'Machavaram', '1', '30', 1, '2025-06-02 16:29:41', '0000-00-00 00:00:00'),
(675, 'Macherla', '1', '30', 1, '2025-06-02 16:29:52', '0000-00-00 00:00:00'),
(676, 'Muppalla', '1', '30', 1, '2025-06-02 16:31:24', '0000-00-00 00:00:00'),
(677, 'Nadendla', '1', '30', 1, '2025-06-02 16:31:35', '0000-00-00 00:00:00'),
(678, 'Piduguralla', '1', '30', 1, '2025-06-02 16:47:27', '0000-00-00 00:00:00'),
(679, 'Rajupalem', '1', '30', 1, '2025-06-02 16:47:40', '0000-00-00 00:00:00'),
(680, 'Savalyapuram', '1', '30', 1, '2025-06-02 16:50:35', '0000-00-00 00:00:00'),
(681, 'Veldurthi', '1', '30', 1, '2025-06-02 16:50:47', '0000-00-00 00:00:00'),
(682, 'Vinukonda', '1', '30', 1, '2025-06-02 16:51:03', '0000-00-00 00:00:00'),
(683, 'Narasaraopet Bazar', '1', '30', 1, '2025-06-02 16:51:18', '0000-00-00 00:00:00'),
(684, 'Sattenapalli Bazar', '1', '30', 1, '2025-06-02 17:00:19', '0000-00-00 00:00:00'),
(685, 'Jagtial', '4', '36', 1, '2025-06-03 15:09:10', '0000-00-00 00:00:00'),
(686, 'New Bus Stand Jagtial', '4', '36', 1, '2025-06-03 15:09:29', '0000-00-00 00:00:00'),
(687, 'Anthergaon', '4', '36', 1, '2025-06-03 15:09:57', '0000-00-00 00:00:00'),
(688, 'Darur', '4', '36', 1, '2025-06-03 15:10:20', '0000-00-00 00:00:00'),
(689, 'Morapalli', '4', '36', 1, '2025-06-03 15:10:45', '0000-00-00 00:00:00'),
(690, 'Mothe', '4', '36', 1, '2025-06-03 15:11:08', '0000-00-00 00:00:00'),
(691, 'Chelgal', '4', '36', 1, '2025-06-03 15:11:38', '0000-00-00 00:00:00'),
(692, 'Pochampad Project Colony', '4', '36', 1, '2025-06-03 15:12:13', '0000-00-00 00:00:00'),
(693, 'Allipur', '4', '36', 1, '2025-06-03 15:13:14', '0000-00-00 00:00:00'),
(694, 'Warangal', '4', '64', 1, '2025-12-19 12:23:29', '0000-00-00 00:00:00'),
(695, 'vaddipatla', '4', '9', 1, '2025-12-19 12:42:33', '0000-00-00 00:00:00'),
(696, 'amdapur medak', '17', '72', 1, '2025-12-19 15:05:49', '0000-00-00 00:00:00'),
(697, 'NOIDA', '17', '72', 1, '2025-12-19 15:24:15', '0000-00-00 00:00:00'),
(698, 'Munganoor', '4', '58', 1, '2025-12-19 15:46:37', '0000-00-00 00:00:00'),
(699, 'KONDAPUR', '4', '35', 1, '2025-12-19 16:05:20', '0000-00-00 00:00:00'),
(700, 'LANGAR HOUSE ', '4', '35', 1, '2025-12-19 17:10:35', '0000-00-00 00:00:00'),
(701, 'Kurmalaguda', '4', '58', 1, '2025-12-27 11:50:34', '0000-00-00 00:00:00'),
(702, 'Dwaraka Nagar', '1', '73', 1, '2025-12-31 13:30:33', '0000-00-00 00:00:00'),
(703, 'Jagadamba Centre', '1', '73', 1, '2025-12-31 13:30:48', '0000-00-00 00:00:00'),
(704, 'Seethammadhara', '1', '73', 1, '2025-12-31 13:31:05', '0000-00-00 00:00:00'),
(705, 'MVP Colony', '1', '73', 1, '2025-12-31 13:31:19', '0000-00-00 00:00:00'),
(706, 'CBM Compound', '1', '73', 1, '2025-12-31 13:31:36', '0000-00-00 00:00:00'),
(707, 'Pandurangapuram', '1', '73', 1, '2025-12-31 13:31:50', '0000-00-00 00:00:00'),
(708, 'Akkayyapalem', '1', '73', 1, '2025-12-31 13:32:03', '0000-00-00 00:00:00'),
(709, 'Maddilapalem', '1', '73', 1, '2025-12-31 13:32:16', '0000-00-00 00:00:00'),
(710, 'Kirlampudi Layout', '1', '73', 1, '2025-12-31 13:32:32', '0000-00-00 00:00:00'),
(711, 'Siripuram', '1', '73', 1, '2025-12-31 13:32:49', '0000-00-00 00:00:00'),
(712, 'SULURPET ', '1', '73', 1, '2026-01-03 13:16:11', '0000-00-00 00:00:00'),
(713, 'karimnagar', '1', '74', 1, '2026-01-10 18:38:56', '0000-00-00 00:00:00'),
(714, 'Karimnagar', '4', '40', 1, '2026-01-10 18:48:53', '0000-00-00 00:00:00'),
(715, 'Tadepalligudem ', '1', '75', 1, '2026-01-22 12:48:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `firstName` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email_id` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `employee_no` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `department_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `designation_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `birth_date` date NOT NULL,
  `anniversary_date` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `branch_state_name_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branch_location_id` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `present_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `permanent_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `userRank` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_general_ci NOT NULL,
  `acc_holder_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bank_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `account_type` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branch_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ifsc_code` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `bank_passbook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `passport_document` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `aadhar_document` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `aadhar_back_document` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `pancard_document` text COLLATE utf8mb4_general_ci NOT NULL,
  `reportingTo` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `official_phone` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `official_email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `work_state` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `work_location` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `residential_address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `office_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `pan_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `aadhaar_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `manage_icons` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `data_icons` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `work_icons` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `payout_icons` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `last_working_date` date DEFAULT NULL,
  `leaving_reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `re_joining_date` date DEFAULT NULL,
  `ref_name_1` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_relation_1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_mobile_1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_address_1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `ref_name_2` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_relation_2` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_mobile_2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_address_2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `createdBy` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `firstName`, `lastName`, `mobile`, `email_id`, `password`, `employee_no`, `department_id`, `designation_id`, `birth_date`, `anniversary_date`, `branch_state_name_id`, `branch_location_id`, `present_address`, `permanent_address`, `status`, `userRank`, `avatar`, `acc_holder_name`, `bank_name`, `account_type`, `branch_name`, `account_number`, `ifsc_code`, `bank_passbook`, `passport_document`, `aadhar_document`, `aadhar_back_document`, `pancard_document`, `reportingTo`, `official_phone`, `official_email`, `work_state`, `work_location`, `residential_address`, `office_address`, `pan_number`, `aadhaar_number`, `manage_icons`, `data_icons`, `work_icons`, `payout_icons`, `last_working_date`, `leaving_reason`, `re_joining_date`, `ref_name_1`, `ref_relation_1`, `ref_mobile_1`, `ref_address_1`, `ref_name_2`, `ref_relation_2`, `ref_mobile_2`, `ref_address_2`, `createdBy`, `created_at`, `updated_at`) VALUES
(1, 'krajeshk', 'RAJESH KUMAR', 'KURAKULA', '8885545255', 'krajeshk@kurakulas.com', 'Aara@123', 'krajeshk', '', '', '0000-00-00', '', '', '', '', '', 1, 'superAdmin', '030326181335krajeshk-photo.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sagarika.s@kinfomedia.com', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '2026-03-02 06:22:53', '2026-04-03 15:04:41'),
(2, '10000', 'KURAKULA', 'RAJESH KUMAR', '9246545737', 'kurakularajeshkumar@gmail.com', 'Aara@123', '10000', '5', '7', '1982-05-24', '', '4', '6', ' H.NO-6-3-787,706, SHAILISROYAL PAVILION, BESIDE\r\nRBI QTRS, AMEERPET, HYDERABAD TELANGANA PIN CODE:500016 ', ' H.NO-6-3-787,706, SHAILISROYAL PAVILION, BESIDE\r\nRBI QTRS, AMEERPET, HYDERABAD TELANGANA PIN CODE:500016 ', 1, 'User', '', '', '14', '2', '', '007501614757', 'ICIC0000075', '04152139-1761891338_icici-cancelled-cheque-(1).pdf', '', '04152139-sir-aadhar-card.pdf', '', '04152139-sir-pan-card.jpeg', '', '9246545737', 'krajeshk@k-seva.com', '4', '6', '', '', 'AQLPK5574A ', '860322393327', '', '', '[\"3\",\"8\",\"7\",\"9\",\"10\",\"1\",\"2\",\"6\",\"5\",\"4\"]', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '2026-03-04 15:21:39', '2026-03-06 22:02:45'),
(3, '10002', 'SILPA ', 'KURAKULA', '9652522855', 'silpa.k@kurakulas.com', 'Kurakulas@123', '10002', '5', '6', '1989-09-01', '', '4', '6', ' H.NO-6-3-787,706, SHAILISROYAL PAVILION, BESIDE\r\nRBI QTRS, AMEERPET, HYDERABAD TELANGANA PIN CODE:500016 ', ' H.NO-6-3-787,706, SHAILISROYAL PAVILION, BESIDE\r\nRBI QTRS, AMEERPET, HYDERABAD TELANGANA PIN CODE:500016 ', 1, 'User', '04154128-1743751654_ksilpa-photo.pdf', '', '14', '2', '', '236101505739', 'ICIC0002361', '04154128-whatsapp-image-2026-03-04-at-3.27.58-pm.jpeg', '', '04154128-1743752165_silpa-mam-adhar-front-side-(1).pdf', '', '04154128-1743751624_silpa-pan-(2).pdf', '2', '9652522855', 'silpa.k@k-seva.com', '4', '6', '', '', 'CYDPK8323H ', '579838514854', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-04 15:41:28', '2026-03-06 14:37:43'),
(4, '90000', 'VENKATESWARA RAO', 'BALUSU', '6303556898', 'venkateswara@gmail.com', 'Kurakulas@123', '90000', '4', '5', '1975-05-07', '', '4', '6', 'Plot No 32, Road No 6, Pavangiri Colony, Hayath Nagar, hyderabad - 500070', 'Plot No 32, Road No 6, Pavangiri Colony, Hayath Nagar, hyderabad - 500070', 1, 'User', '04164038-whatsapp-image-2026-03-04-at-4.40.17-pm.jpeg', '', '22', '2', '', '7648720046', 'IDIB000L015', '04164038-whatsapp-image-2026-03-04-at-4.39.47-pm.jpeg', '', '04164038-whatsapp-image-2026-03-04-at-4.39.38-pm.jpeg', '', '04164038-whatsapp-image-2026-03-04-at-4.39.29-pm.jpeg', '2', '9885762780', 'venkateswararao.b@kurakulas.com', '4', '6', '', '', 'AFPPB2715P ', '396164750757', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-04 16:40:38', '0000-00-00 00:00:00'),
(5, '14348', 'POLAKI', 'DIVAKAR', '9966921014', 'divakarofficial66@gmail.com', 'Divakar@1437', '14348', '7', '16', '1996-03-12', '', '4', '6', 'Gowri Shankar Boys hostel\r\nAmeerpet, Yella Reddy Guda,\r\nHyderabad â€“ 500016 ', 'Pedda Tamara Palli(Vill) Nandhigam (Man)Srikakulam(Dist) AP - 532201', 1, 'User', '04175438-photo.png', '', '6', '2', '', '32041724053', 'SBIN0000966', '04175438-sbi-bank-book.pdf', '', '04175438-aadhaar.pdf', '', '04175438-divakar---pan-card.pdf', '3', '9133321804', 'finance@k-seva.com', '4', '6', '', '', 'CPRPP0084D ', '770613054106', '', '', '[\"1\",\"2\",\"3\",\"8\",\"7\",\"9\",\"10\",\"4\",\"6\",\"5\",\"15\",\"13\",\"12\",\"11\",\"14\"]', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '2026-03-04 17:54:38', '2026-04-22 03:51:53'),
(6, '14140', 'RAVURU', 'LAKSHMI', '9347563966', 'lakshm.ravuru2002@gmail.com', 'Lakshmi@2002', '14140', '9', '22', '2002-08-29', '', '4', '6', 'Sridevi girls hostel ,MCH market road,near durga mata temple,ameerpet hyd-500016', 'velampati street ,Nidigallu village ,balayapalli mandal,tirupati district,pin code-524404', 1, 'User', '06175451-19133943-whatsapp-image-2025-04-03-at-2.30.12-pm.jpeg', '', '6', '2', '', '40972920478', 'SBIN0000969', '06175422-lakshmi-bank.jpeg', '', '06175422-lak-aadhar.jpeg', '06175422-lak-aadhar.jpeg', '06175422-lak-pan.jpeg', '2', '9966202433', 'lakshmi.r@kfinone.com', '4', '6', '', '', 'FVJPR5198K ', '283154257918', '', '', '[\"3\",\"8\",\"7\",\"9\",\"10\",\"1\",\"4\",\"5\",\"6\",\"2\",\"15\",\"13\",\"11\",\"14\"]', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 10:39:53', '2026-04-22 03:50:43'),
(7, '14341', 'RAMESH', 'THOTA', '9959390124', 'thotaramesh0009@gmail.com', 'Kurakulas@123', '14341', '7', '16', '2000-02-06', '', '4', '6', 'Sri kamakshi Boy hostel S R Nagar', 'Gundlapada,1-37/D Guntur ,Andhra Pradesh.', 1, 'User', '05121707-whatsapp-image-2026-03-05-at-12.14.36-pm.jpeg', '', '17', '2', '', '110132366893', 'CNRB0003507', '05121707-whatsapp-image-2026-03-05-at-12.14.18-pm.jpeg', '', '05121707-ramesh-aadhaar.pdf', '', '05121707-ramesh-pan-card.pdf', '3', '8886076565', 'finance@kfinone.com', '4', '6', '', '', 'BVUPT3946C ', '649630043385', '', '', '[\"1\",\"4\",\"5\",\"6\",\"2\",\"3\",\"8\",\"7\",\"10\",\"9\",\"13\",\"15\",\"12\",\"11\",\"14\"]', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 12:17:07', '2026-04-22 03:52:15'),
(8, '94000', 'SASAM', 'CHINNA RANGAIAH', '8333949623', 'bettersocietyind@gmail.com', 'Kurakulas@123', '94000', '4', '', '1972-06-02', '', '4', '6', ' Address :	3-5-550,GOKUL ENCLAVE,VITTAL WADI,NARAYANAGUDA,HIMAYATHNAGAR,HYD-500029', '3-5-550,GOKUL ENCLAVE,VITTAL WADI,NARAYANAGUDA,HIMAYATHNAGAR,HYD-500029', 1, 'User', '05123303-07153930-whatsapp-image-2025-10-07-at-3.38.27-pm.jpeg', '', '6', '2', '', '30555519191', 'SBIN0003086', '05123303-sbi-bank-sasam.jpeg', '', '05123303-aadhar-sasam.jpeg', '', '05123303-sasam-pan.jpeg', '4', '8886227890', 'Rangaiah.s@k-seva.com', '4', '6', '', '', 'ECXPS0162N ', '370311532101', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '2026-03-05 12:33:03', '2026-03-06 14:36:48'),
(9, '60000', 'SANKER RAO N.V.V.O.N', '	NEKKANTI', '9133247414', 'shanker.333@gamil.com', 'Kurakulas@414', '60000', '4', '5', '0000-00-00', '', '4', '6', '7-1-48/5/3/B,PLOT NO:G2,SHIVA APARTMENTS,DK ROAD,AMEERPET,TELANGANA-500016', '7-1-48/5/3/B,PLOT NO:G2,SHIVA APARTMENTS,DK ROAD,AMEERPET,TELANGANA-500016', 1, 'User', '05123522-16192227-whatsapp-image-2025-06-07-at-1.32.17-pm-(1).jpeg', '', '6', '2', '', '30002247568', 'SBIN0011659', '05123522-bank-s.jpeg', '', '05123522-aadhar-s.jpeg', '', '05123522-pan-s.jpeg', '2', '9966960827', 'sankerrao.n@kurakulas.com', '4', '6', '', '', 'ADUPN0675K ', '34906637523', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 12:35:22', '0000-00-00 00:00:00'),
(10, '61000', '	RAMISETTY', '	RAMAMURTHY', '7036925499', '	ramamurthy5499@gmail.com', 'Kurakulas@123', '61000', '4', '12', '1973-02-09', '', '4', '6', 'H.NO:11-13-1018/2,ROAD NO:1/7,KOTHAPET,GREEN HILLS STREET,SAROOR NAGAR,RANGAREDDY DT,TELANGANA-500035', 'H.NO:11-13-1018/2,ROAD NO:1/7,KOTHAPET,GREEN HILLS STREET,SAROOR NAGAR,RANGAREDDY DT,TELANGANA-500035', 1, 'User', '05124822-30171935-whatsapp-image-2025-06-30-at-4.59.36-pm-(1).jpeg', '', '1', '2', '', '50100288551318', '	HDFC0005104', '05124822-30171935-whatsapp-image-2025-06-30-at-4.59.36-pm.jpeg', '', '05124822-30171935-whatsapp-image-2025-06-30-at-4.59.35-pm-(1).jpeg', '', '05124822-30171935-whatsapp-image-2025-06-30-at-4.59.35-pm.jpeg', '9', '9133321864', 'ramamurthy.r@kurakulas.com', '4', '6', '', '', 'AHQPR2793C ', '452663424246', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 12:48:22', '0000-00-00 00:00:00'),
(11, '97000', 'GUNDA KRISHNA', 'SAHASRA', '9441221986', 'sahasrag1986@gmail.com', 'priya@1986', '97000', '4', '', '1986-08-19', '', '4', '6', '4-11/1 , SC COLONY ,GOVT HIGH SCHOOL ,GUNJAPADUGA ,PEDDAPALLI ,TG-505184', '4-11/1 , SC COLONY ,GOVT HIGH SCHOOL ,GUNJAPADUGA ,PEDDAPALLI ,TG-505184', 1, 'User', '05124830-photo.jpeg', '', '4', '2', '', '916010066555055', 'UTIB0000193', '05124830-axis-bank.jpeg', '', '05124830-aadhar.jpeg', '', '05124830-pan.jpeg', '4', '9133307639', 'Sahasra.g@k-seva.com', '4', '6', '', '', 'CXWPR6769N ', '894480142253', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 12:48:30', '2026-03-06 14:35:44'),
(12, '66000', 'RAMA KRISHNA PRATAP', 'KAGITA', '9573578889', 'krishnakrk71@gmail.com', 'Kurakulas@123', '66000', '4', '', '1971-06-01', '', '4', '6', 'DR NO:7-1-621/A/1,FLAT NO:209,SATYA SAI APARTMENT,ICICI BANK,SRINIVASA STREET,SR NAGAR,HYDERABAD,TELANGANA-500038', 'DR NO:7-1-621/A/1,FLAT NO:209,SATYA SAI APARTMENT,ICICI BANK,SRINIVASA STREET,SR NAGAR,HYDERABAD,TELANGANA-500038', 1, 'User', '05124919-photo.jpeg', '', '4', '2', '', '910010003146760', 'UTIB0000427', '05124919-bank.jpeg', '', '05124919-aadhar.jpeg', '', '05124919-pan-card.jpeg', '9', '9346992294', 'krishnapratap.k@k-seva.com', '4', '6', '', '', 'AJZPK1090N ', '892041628229', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 12:49:19', '2026-03-07 17:37:57'),
(13, '65000', '	RAJULA', '	SRINIVAS REDDY', '9603366555', '	rajula_srinu@yahoo.com', '	Kurakulas@123', '65000', '4', '12', '0000-00-00', '', '4', '6', 'VILLA NO - 132, RAMKY DISCOVERY CITY GARDENIA GROVE VILLAS, SRINAGAR VILLAGE NEAR SRI SRI ACADEMY, MAHESHWARAM MANDAL 501359', 'VILLA NO - 132, RAMKY DISCOVERY CITY GARDENIA GROVE VILLAS, SRINAGAR VILLAGE NEAR SRI SRI ACADEMY, MAHESHWARAM MANDAL 501359', 1, 'User', '05125733-09145140-whatsapp-image-2025-07-09-at-2.02.28-pm.jpeg', '', '4', '2', '', '913010010121913', '	UTIB0000235', '05125733-30142728-whatsapp-image-2025-12-30-at-2.23.42-pm.jpeg', '', '05125733-16143640-whatsapp-image-2026-02-16-at-2.36.08-pm.jpeg', '', '05125733-09145140-whatsapp-image-2025-07-09-at-2.02.26-pm.jpeg', '9', '8885623777', 'srinivasareddy.r@kurakulas.com', '4', '6', '', '', 'AIFPR2878C ', '467631431937', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 12:57:33', '0000-00-00 00:00:00'),
(14, '66200', 'RAMJAGADEESH', 'BABU PADMA', '9581009171', 'directormvsacademy@gmail.com', 'Kurakulas@123', '66200', '4', '', '1971-01-01', '', '4', '6', 'FLAT NO 201 , 10 MRUDULA APARTMENTS , A S RAJU NAGAR MIYAPUR SERILINGAMPLE 500049', 'FLAT NO 201 , 10 MRUDULA APARTMENTS , A S RAJU NAGAR MIYAPUR SERILINGAMPLE 500049', 1, 'User', '05130141-photo.jpeg', '', '14', '2', '', '020201550920', 'ICIC0000202', '05130141-bank-cheque.jpg', '', '05130141-aadhar-card.jpeg', '', '05130141-pan-card.jpeg', '2', '9133369852', 'ramjagadesh.p@k-seva.com', '4', '6', '', '', 'APRPP8772L ', '413341596777', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 13:01:41', '2026-03-07 17:39:27'),
(15, '99000', '	CHANKULILLA', 'KRISHNA KUMAR', '9000402626', 'Shankulillakrishnakumar456@gmail.com', 'Kurakulas@123', '99000', '4', '', '1985-08-15', '', '4', '6', '5-41/2, balaji nagar, near police stattion, badepally, jadcherla,mahabub nagar,tg-509301', '5-41/2, balaji nagar, near police stattion, badepally, jadcherla,mahabub nagar,tg-509301', 1, 'User', '05130314-photo.jpg', '', '6', '2', '', '62089677397', 'SBIN0020921', '05130314-sbi-bank.jpeg', '', '05130314-aadhar-card.jpeg', '', '05130314-pan-card.jpeg', '4', '9652580077', 'krishnakumar.ch@k-seva.com', '4', '6', '', '', 'BBSPK0600C ', '308646839754', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 13:03:14', '2026-03-23 18:11:49'),
(16, '14000', 'CHITESH', 'BUDIPUTI', '9390665856', 'chiteshbudiputi48@gmail.com', 'Kurakulas@123', '	14000', '4', '15', '1991-05-07', '', '2', '11', 'Vijayawada', 'Vijayawada', 1, 'User', '', '', '9', '2', '', '45100100004476', '	BARB0NUZVID', '', '', '', '', '', '2', '9133321863', 'chitesh.b@k-seva.com', '2', '11', '', '', 'CPOPC2691 ', '840698916600', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 13:06:18', '2026-03-26 17:47:47'),
(17, '99900', 'MENTA', 'SURESH BABU', '9701877248', 'sureshbabu7555@gmail.com', 'Kurakulas@123', '99900', '4', '', '1974-07-01', '', '4', '6', '8-3-231/a/410,1 st floor,1st house,sri krishna nagar.yousfguda,hyd,khairatabad -500045', '8-3-231/a/410,1 st floor,1st house,sri krishna nagar.yousfguda,hyd,khairatabad -500045', 1, 'User', '05134616-photo.jpeg', '', '28', '2', '', '0695053000002199', 'SIBL0000695', '05134616-south-india-bank.jpeg', '', '05134616-aadhar-card.jpeg', '', '05134616-pan-card.jpeg', '4', '9133321865', 'sureshbabu.p@k-seva.com', '4', '6', '', '', 'aikpm9092q ', '488938115170', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 13:46:16', '2026-03-06 13:45:27'),
(18, '99800', 'BHAVAANN KUMAR', 'GADDAM', '7569714833', 'gaddambhavan069@gmail.com', 'Kurakulas@123', '99800', '4', '', '2001-01-01', '', '4', '6', 'S/O Gaddam Kishore Kumar 18-3-496/47 Laxmi Nagar Hyderabad Andhra Pradesh â€“ 500053', 'S/O Gaddam Kishore Kumar 18-3-496/47 Laxmi Nagar Hyderabad Andhra Pradesh â€“ 500053', 1, 'User', '05135820-photo.jpeg', '', '25', '2', '', '5864232477', 'CBIN0280814', '05135820-central-bank-of-india.jpeg', '', '05135820-aadhar-card.jpeg', '', '05135820-pan-card.jpeg', '4', '9966177002', 'bhavaannkumar.g@k-seva.com', '4', '6', '', '', 'IMYPK8028L ', '612522086878', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 13:58:20', '2026-03-06 13:44:45'),
(19, '19000', '	JONALAGADDA', 'VAMSIKRISHNA', '9966081280', 'vamsikrishna.kurakulas@gmail.com', 'Kurakulas@123', '19000', '4', '', '1988-12-12', '', '2', '12', '401, S V R COMPLEX REST HOUSE ROAD, OPP VENU GOPALA SWAMY TEMPLE SUNDAY MARKET WEST GODAVARI 534201', '401, S V R COMPLEX REST HOUSE ROAD, OPP VENU GOPALA SWAMY TEMPLE SUNDAY MARKET WEST GODAVARI 534201', 1, 'User', '05140532-photo.jpeg', '', '14', '2', '', '070401507870', 'ICICI0000704', '05140532-bank.jpeg', '', '05140532-aadhar-card.jpeg', '', '05140532-pan-card.jpeg', '2', '9966081280', 'vamsikrishna.j@k-seva.com', '2', '12', '', '', 'AMFPJ0813M ', '906034075268', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 14:05:32', '2026-03-07 17:26:15'),
(20, '99110', 'KURRE', 'RAMACHANDRA REDDY', '9849491934', 'Krc1704@gmail.com', 'Kurakulas@123', '99110', '4', '', '1967-02-24', '', '4', '6', '	1-138, RAMACHANDRAPURAM , MANAGALAGIRI MANDAL, GUNTUR 522305', '1-138, RAMACHANDRAPURAM , MANAGALAGIRI MANDAL, GUNTUR 522305', 1, 'User', '05140533-photo.jpeg', '', '14', '2', '', '630601567925', 'ICICI0006306', '05140533-icici-bank.jpeg', '', '05140533-aadhar-card.jpeg', '', '05140533-pan-card.jpeg', '4', '9849491934', 'ramachandra.k@k-seva.com', '4', '6', '', '', 'CAVPK2842K ', '451837365646', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 14:05:33', '2026-03-06 13:43:39'),
(21, '93000', 'PARVATANENI', 'CHAITANYA', '9676891074', 'balajiinfraaphyd@gmail.com', 'Kurakulas@123', '93000', '4', '12', '1971-08-10', '', '4', '9', 'HYDERABABD', 'HYDERABABD', 1, 'User', '05141254-photo.jpeg', '', '31', '2', '', '100010433299', 'ESFB0005002', '05141254-bank.jpeg', '', '05141254-aadhar-card.jpeg', '', '05141254-pan-card.jpeg', '4', '9676891074', 'chaitanya.p@kurakulas.com', '4', '9', '', '', 'AITPP5019P ', '727517905535', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 14:12:54', '0000-00-00 00:00:00'),
(22, '63000', 'LINGALA', 'PRASAD', '9490190009', 'prasad.lingala99@gmail.com', 'Kurakulas@123', '63000', '4', '', '1980-08-07', '', '4', '6', '2-104, SATRAJUPALLE ,KARIMNAGAR , TELANGANA ,505302', '2-104, SATRAJUPALLE ,KARIMNAGAR , TELANGANA ,505302', 1, 'User', '05143106-photo.jpeg', '', '20', '2', '', '62061919045', 'SBIN0020147', '05143106-bank-book.jpeg', '', '05143106-aadhar-card.jpeg', '', '05143106-pan-card.jpeg', '9', '9490190009', 'prasad.l@k-seva.com', '4', '6', '', '', 'AFAPL2415F ', '527951773092', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '2026-03-05 14:31:06', '2026-03-07 17:34:06'),
(23, '61100', 'KONDURU', 'VENKATA PRANEETH SAI', '9014736404', 'pranethsai@gmail.com', 'Kurakulas@123', '61100', '4', '', '1990-08-23', '', '4', '6', 'G4, MANIKANTA HEIGHTS EENADU COLONY, VIVEKANANDA NAGAR COLONY KUKATPALLY 500072', 'G4, MANIKANTA HEIGHTS EENADU COLONY, VIVEKANANDA NAGAR COLONY KUKATPALLY 500072', 1, 'User', '', '', '10', '2', '', '20100054658733', 'BDBL0001873', '05145253-bank-book.jpeg', '', '05145253-aadhar-card.jpeg', '', '05145253-pan-card.jpeg', '10', '9014736404', 'venkatapraneethsai.k@k-seva.com', '4', '6', '', '', 'BQTPP1843A ', '387847279481', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 14:52:53', '2026-03-07 17:28:14'),
(24, '61900', 'MANCHALA', 'RAJENDRA PRASAD', '7416023023', 'rajendraprasadlatv@gmail.com', 'Kurakulas@123', '61900', '4', '', '1960-04-15', '', '4', '6', '11-14-10/A34,A35, FLAT NO 101, LAKSHMI NIVAS HARIPURAM COLONY ROAD NO 6 OPPOSITE, SRAVANI MEDICAL STORE SAROORNAGR K V RANGAREDDY', '11-14-10/A34,A35, FLAT NO 101, LAKSHMI NIVAS HARIPURAM COLONY ROAD NO 6 OPPOSITE, SRAVANI MEDICAL STORE SAROORNAGR K V RANGAREDD', 1, 'User', '', '', '1', '2', '', '50200023870720', 'HDFC0004154', '05150124-bank.jpeg', '', '05150124-aadhar-card.pdf', '', '05150124-pan-card.pdf', '10', '7416023023', 'rajendraprasad.m@k-seva.com', '4', '6', '', '', 'AFLPM4786K ', '912920193384', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 15:01:24', '2026-03-07 17:29:34'),
(25, '64000', 'K', 'RADHAKISHAN', '8106455058', 'rkgic999@gmail.com', 'Kurakulas@123', '64000', '4', '12', '1981-08-08', '', '4', '6', '2-9 LINGAIAH SINGAPUR KARIMNAGAR 505468', '2-9 LINGAIAH SINGAPUR KARIMNAGAR 505468', 1, 'User', '', '', '17', '2', '', '110242696909', 'CNRB0013609', '05150655-bank-book.jpeg', '', '05150655-aadhar-card.jpeg', '', '05150655-pan-card.jpeg', '9', '8886039696', 'radhakishan.k@k-seva.com', '4', '6', '', '', 'DGVPK1365J ', '491945785661', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 15:06:55', '2026-03-30 12:38:50'),
(26, '18200', 'DOODI', 'MEENAKSHI', '9133013534', 'meenakshi.d@kurakulas.com', 'Kurakulas@123', '18200', '4', '', '1983-05-14', '', '4', '6', '5-14, RAGHAVENDRA NAGAR,BOMMURU, RAJAMUNDRY,EAST GODAVARI-5333124', 'Hyderabad', 1, 'User', '05151210-photo.jpeg', '', '12', '2', '', '4841155000003862', 'KVBL0004841', '05151210-bank.jpeg', '', '05151210-aadhar-card.jpeg', '', '05151210-pan-card.jpeg', '2', '9133013534', 'meenakshi.d@k-seva.com', '4', '6', '', '', 'BZHPD5927N ', '216527018255', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 15:12:10', '2026-03-07 17:23:01'),
(27, '30000', 'PREM SWAROOP REDDY', 'YERRA', '8421995889', 'premss20@gmail.com', 'Kurakulas@123', '30000', '4', '', '1987-06-13', '', '4', '6', 'ANITHA NAGAR,NEAR PARK,MANSOORBAD,HAYATH NAGAR,RANGAREDDY,HYDERABAD,TELANGANA-500068', 'ANITHA NAGAR,NEAR PARK,MANSOORBAD,HAYATH NAGAR,RANGAREDDY,HYDERABAD,TELANGANA-500068', 1, 'User', '05160515-photo.jpeg', '', '14', '2', '', '003901608509', 'ICICI0000039', '05160515-bank-book.jpeg', '', '05160515-aadhar-card.jpeg', '', '05160515-pancard.jpeg', '2', '9100061083', 'premswaroop.y@k-seva.com', '4', '6', '', '', 'AFMPY2437C ', '581723849383', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 16:05:15', '2026-03-07 17:41:48'),
(28, '91000', 'MAREPALLY', 'PRASHANTH NAIDU', '9030999915', '2.shanthy@gmail.com', 'Marepally@123', '91000', '4', '', '1982-08-19', '', '4', '6', '3-12-12/2/2/3, SITARAM PURAM COLONY, SURYAPET NALGONDA ANDHRAPRADESH 508213', '3-12-12/2/2/3, SITARAM PURAM COLONY, SURYAPET NALGONDA ANDHRAPRADESH 508213', 1, 'User', '05161020-photo.jpeg', '', '2', '2', '', '5013564082', 'KKBK0007466', '05161020-bank-cheque.jpeg', '', '05161020-aadhar-card.jpeg', '', '05161020-pan-card.jpeg', '4', '8886027890', 'prashanth.m@k-seva.com', '4', '6', '', '', 'BBLPM0518C ', '978249978494', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '2026-03-05 16:10:20', '2026-03-06 13:39:15'),
(29, '14239', 'VIKAS', 'GOTTIMUKKULA', '9550572670', 'vikastctk@gmail.com', 'Kurakulas@123', '14239', '4', '', '1992-02-23', '', '4', '9', 'S/O KOMAL REDDY, 8-3-721,TIRIMAL NAGAR,KARIMNAGAR, TELANGANA-505001', '	S/O KOMAL REDDY, 8-3-721,TIRIMAL NAGAR,KARIMNAGAR, TELANGANA-505001', 1, 'User', '', '', '3', '2', '', '3630000100144556', 'PUNB0363000', '05161752-bank.jpg', '', '05161752-aadhar-card.jpg', '', '05161752-pan-card.jpg', '2', '9133321848', 'vikas.g@k-seva.com', '4', '9', '', '', 'BERPG1091P ', '906197900418', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 16:17:52', '2026-03-07 17:50:26'),
(30, '92000', 'KOMMA', 'SRINIVAS RAO', '9398428453', 'elifekomma@gmail.com', 'Komma@4959', '92000', '4', '', '1979-07-26', '', '4', '6', '	54-6-1670 11TH LINE SHOPPEMPLOYEES COLONY GUNTUR 522001', '	54-6-1670 11TH LINE SHOPPEMPLOYEES COLONY GUNTUR 522001', 1, 'User', '05162047-photo.jpeg', '', '7', '2', '', '508802010016088', 'UBIN0550884', '05162047-01152606-bank.png', '', '05162047-aadhar-card.jpeg', '', '05162047-pan-card.jpeg', '4', '9346201078', 'srinivas.k@k-seva.com', '4', '6', '', '', 'AVNPK5738P ', '472771626261', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 16:20:47', '2026-03-06 13:37:43'),
(31, '61200', 'MOSAM', 'RAMMURTHY', '9059688774', 'rammurthymosam@gmail.com', 'Kurakulas@123', '61200', '4', '', '1966-01-01', '', '4', '9', '9-4-44, SRINAGA COLONY KARIMNAGAR RAMPUR 505001', '9-4-44, SRINAGA COLONY KARIMNAGAR RAMPUR 505001', 1, 'User', '05162837-photo.jpeg', '', '14', '2', '', '043801507503', 'ICICI0000438', '05162837-bank.jpeg', '', '05162837-aadhar-card.jpeg', '', '05162837-pan-card.jpeg', '10', '9059688774', 'rammurthy.m@k-seva.com', '4', '9', '', '', 'BJKPM7651P ', '724350823153', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 16:28:37', '2026-03-07 17:42:51'),
(32, '97100', 'TANNERU', 'PRASAD', '8019771914', 'prasadtanneru18@gmail.com', 'Kurakulas@123', '97100', '4', '15', '1991-11-18', '', '4', '6', 'BERAMGUDA,HYD-502032', 'BERAMGUDA,HYD-502032', 1, 'User', '05162931-photo.jpeg', '', '1', '2', '', '50100791244242', 'HDFC0000811', '05162931-bank-cheque.jpeg', '', '05162931-aadhar-card.jpeg', '', '05162931-pan-card.jpeg', '4', '8886217890', 'prasad.t@k-seva.com', '4', '6', '', '', 'BJAPT7712G ', '412027372408', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 16:29:31', '2026-03-11 19:02:37'),
(33, '66300', 'OBULAREDDY', 'KORA', '8686461625', 'kora.obulareddy@gmail.com', 'Kurakulas@123', '66300', '4', '', '1990-06-19', '', '4', '6', '2-1 3B CHAGALAMARRI KURNOOL 518553', '2-1 3B CHAGALAMARRI KURNOOL 518553', 1, 'User', '05163612-photo.jpeg', '', '6', '2', '', '40064344246', 'SBIN0015901', '05163612-bank.jpeg', '', '05163612-aadhar-card.jpeg', '', '05163612-pan-card.jpeg', '14', '9100072517', 'obulreddy.k@k-seva.com', '4', '6', '', '', 'BWVPK6291H ', '499455323997', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 16:36:12', '2026-03-07 17:47:20'),
(34, '14355', 'BOMMENA', 'RAMESHWARI', '7995682823', 'bommena.rameshwari@gmail.com', 'kurakulas@123', '14355', '4', '', '1998-07-10', '', '4', '6', '6-68, KORUTLA MANDAL ADAPUR ,KARIMNAGAR , -505330', 'AMEERPET', 1, 'User', '05165457-photo.jpeg', '', '6', '2', '', '62368832510', 'SBIN0020137', '05165457-bank-book.jpeg', '', '05165457-aadhar-card.jpeg', '', '05165457-pan-card.jpeg', '6', '9100020316', 'rameshwari.b@k-seva.com', '4', '6', '', '', 'FKFPR8933B ', '224240731209', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 16:54:57', '2026-03-06 13:34:03'),
(35, '63300', 'PANUGANTI', 'SANJEEV', '9347057570', 'vihansaisanju@gmail.com', 'Kurakulas@123', '63300', '4', '15', '1987-07-18', '', '4', '6', 'H NO 4, 28 MEDIPALLI MANDAL, KACHARAM , DIST; KARIMNAGAR 505453', 'H NO 4, 28 MEDIPALLI MANDAL, KACHARAM , DIST; KARIMNAGAR 505453', 1, 'User', '06133257-photo.jpeg', '', '4', '2', '', '925010000641026', 'UTIB002112', '05170226-bank-cheque.jpeg', '', '05170226-aadhar.jpeg', '', '05170226-pan.jpeg', '22', '9347057570', 'sanjeev.p@k-seva.com', '4', '6', '', '', 'BEUPP2112K ', '786543788562', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 17:02:26', '2026-03-30 13:25:39'),
(36, '61600', 'BETHU SOMA SAI', 'ATCHUTA PANDU', '9533922666', 'b.s.s.a.pandu@gmail.com', 'Pandu@2486', '	61600', '4', '15', '1995-01-06', '', '2', '12', 'flot no 201 ,green meadows ,near srkr girls hostel,rto office road,pedamiram,west godavari-534204', 'flot no 201 ,green meadows ,near srkr girls hostel,rto office road,pedamiram,west godavari-534204', 1, 'User', '05170337-23180008-whatsapp-image-2025-09-23-at-4.56.04-pm.jpeg', '', '4', '2', '', '922010008768676', 'UTIB0000217', '05170337-14150724-whatsapp-image-2025-08-14-at-3.07.05-pm-sai.jpeg', '', '05170337-16143640-whatsapp-image-2026-02-16-at-2.36.08-pm.jpeg', '', '05170337-sai-pan.jpeg', '10', '9052222671', 'somasai.b@k-seva.com', '2', '12', '', '', 'BYUPB0076Q ', '547489087969', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 17:03:37', '2026-04-03 15:06:56'),
(37, '66500', '	POTHURI', 'REDDEPPA', '9948072865', 'mahalakshmimantra2025@gmail.com', '	Kurakulas@123', '66500', '4', '15', '1982-07-10', '', '2', '26', '39/107-159-1, SWETHA LODGE BACK SIDE OPP: CHURCH S.N.COLANY RAYACHOTY-516269 ANNAMMAYA (DIST)', '39/107-159-1, SWETHA LODGE BACK SIDE OPP: CHURCH S.N.COLANY RAYACHOTY-516269 ANNAMMAYA (DIST)', 1, 'User', '05171350-14160240-whatsapp-image-2025-08-14-at-3.56.17-pm.jpeg', '', '6', '1', '', '43759550474', 'SBIN0021888', '05171350-reddy-bank.jpeg', '', '05171350-aadhar-reddy.jpeg', '', '05171350-reddy-pan.jpeg', '14', '9133369853', 'reddeppa.p@kurakulas.com', '2', '26', '', '', '	AQLPP6231 ', '474779155111', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 17:13:50', '0000-00-00 00:00:00'),
(38, '63200', '	PALAPARTHY', 'MOHAN', '9676176585', '	Mohan.palaparthy@gmail.come', '	Kurakulas@123', '	63200', '4', '15', '1971-06-15', '', '2', '22', '53-1-41 , CLOUGH PET 3RD LINE,ONGOLE ,AP-523001', '53-1-41 , CLOUGH PET 3RD LINE,ONGOLE ,AP-523001', 1, 'User', '05172057-29131910-whatsapp-image-2025-08-29-at-1.06.36-pm-(1).jpeg', '', '6', '2', '', '36505323749', '	SBIN0004246', '05172057-29131910-whatsapp-image-2025-08-29-at-1.06.35-pm.jpeg', '', '05172057-29131910-whatsapp-image-2025-08-29-at-1.13.00-pm.jpeg', '', '05172057-29131910-whatsapp-image-2025-08-29-at-1.06.36-pm.jpeg', '9', '8886033434', 'Mohan.p@kurakulas.com', '2', '22', '', '', 'BTWPP1230M ', '493330444657', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 17:20:57', '0000-00-00 00:00:00'),
(39, '14316', 'BURUGU', 'RAJITHA', '6305487606', 'rajithaburugu9@gmail.com', 'Kurakulas@123', '14316', '4', '', '1988-07-31', '', '4', '6', '5-47, CHERIAL MANDALAM , VENCHARENI WARANGAL TELANGANA506223', '5-47, CHERIAL MANDALAM , VENCHARENI WARANGAL TELANGANA506223', 0, 'User', '06132932-whatsapp-image-2026-03-06-at-1.27.50-pm.jpeg', '', '1', '2', '', '50100683125106', 'HDFC0006995', '05173146-paadhar-back-side.jpeg', '', '05173146-aadhar.jpeg', '', '05173146-pan.jpeg', '6', '9346201092', 'rajitha.b@k-seva.com', '4', '6', '', '', 'EDIPB6829R ', '981970054528', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '2026-03-05 17:31:46', '2026-05-13 14:05:57'),
(40, 'VENKATANARAYANA REDDY', 'NAGIREDDY', 'VENKATANARAYANA REDDY', '9010083339', 'nvnreddy2010@gmail.com', 'Kurakulas@123', 'VENKATANARAYANA REDDY', '4', '15', '1985-04-15', '', '4', '6', 'Dental Specialists, Classic Avenue, Plot No. 302, above Ameerpet Road, near R.S. Brothers, Punjagutta Officers Colony, Ameerpet, Hyderabad, Telangana 500016', '175/C VENGAL RAO NAGAAR SRI NAGAR 500038', 0, 'User', '05173537-photo.jpeg', '', '4', '2', '', '911010066700946', 'UTIB0000235', '05173537-bank.jpeg', '', '05173537-aadhar-card.jpeg', '', '05173537-pan-card.jpeg', '10', '8886068787', 'narayana.nv@kurakulas.com', '4', '6', '', '', 'AEUPN2103H ', '506801279143', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 17:35:37', '2026-05-09 07:58:38'),
(41, '14337', 'REVATHI', 'KUNCHALA', '9603608095', 'revathikunchala6@gmail.com', 'Kurakulas@123', '14337', '7', '16', '1994-06-15', '', '4', '6', '8-44 MAIL JANAKARAM PANGULURU PANGULUR PRAKASAM ANDHRA PRADESH-5232261', '8-44 MAIL JANAKARAM PANGULURU PANGULUR PRAKASAM ANDHRA PRADESH-5232261', 1, 'User', '06143958-whatsapp-image-2026-03-06-at-2.39.22-pm.jpeg', '', '28', '2', '', '31768473189', 'SBIN0006979', '05173919-whatsapp-image-2026-03-05-at-5.37.35-pm.jpeg', '', '05173919-whatsapp-image-2026-03-05-at-5.37.35-pm-(1).jpeg', '', '05173919-whatsapp-image-2026-03-05-at-5.37.42-pm.jpeg', '3', '8019558700', 'accounts@k-seva.com', '4', '6', '', '', 'INOPK0899G ', '985640728184', '', '', '[\"3\",\"8\",\"7\",\"9\",\"10\",\"1\",\"4\",\"5\",\"6\",\"2\",\"13\",\"15\",\"12\",\"11\",\"14\"]', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 17:39:19', '2026-04-22 03:51:09'),
(42, '66110', 'DASARI', 'PRATAP', '9133201116', 'dasaripratap3667@gmail.com', 'Kurakulas@123', '66110', '4', '', '1986-03-04', '', '2', '23', 'PADAMATA VEEDHI ,KRISHAPATNAM NELLORE AP-524344', 'PADAMATA VEEDHI ,KRISHAPATNAM NELLORE AP-524344', 1, 'User', '', '', '6', '2', '', '31665734616', 'SBIN0010686', '', '', '05174611-aadhar-card.jpeg', '', '05174611-pan-card.jpeg', '14', '8886049292', 'Pratap.d@kk-seva.com', '2', '23', '', '', 'AWRPD7545C ', '642908350701', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 17:46:11', '2026-03-07 17:55:02'),
(43, '61110', 'POLISETTY', 'SURESH', '9052432111', 'polisettysuresh89@gmail.com', 'Kurakulas@123', '61110', '4', '', '1976-04-15', '', '4', '6', '12-2-506/1/A/1 2nd flr SAI NAGAR COLONY ,GUDIMALKAPUR, ASIFNAGAR, PO:HUMAYUNNAGAR ,DIST:HYDERABAD, TELANAGANA', '12-2-506/1/A/1 2nd flr SAI NAGAR COLONY ,GUDIMALKAPUR, ASIFNAGAR, PO:HUMAYUNNAGAR ,DIST:HYDERABAD, TELANAGANA', 1, 'User', '05174635-photo.jpeg', '', '4', '2', '', '914010004810204', 'UTIB0000733', '05174635-bank.jpeg', '', '05174635-aadhar.jpeg', '', '05174635-pan.jpeg', '23', '9133321864', 'suresh.p@k-seva.com', '4', '6', '', '', 'BAYPP5984K ', '208962530859', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 17:46:35', '2026-03-06 13:21:47'),
(44, '61800', 'VISLAVATH', 'SUBHASH', '8125485369', 'subhashnayak20081986@gmail.com', 'Kurakulas@123', '61800', '4', '', '1996-08-20', '', '4', '28', '5-27, SHEKAPUR THANDA ZAHERABAD 502220', '5-27, SHEKAPUR THANDA ZAHERABAD 502220', 1, 'User', '05175307-photo.jpeg', '', '9', '2', '', '49660100008551', 'BARBOZAHEER', '05175307-bank.jpeg', '', '05175307-aadhar-card.jpeg', '', '05175307-pan-card.jpeg', '10', '8125485369', 'subhash.v@k-seva.com', '4', '28', '', '', 'FJMPS5096E ', '512366441441', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 17:53:07', '2026-03-07 17:52:34'),
(45, '69900', 'NANIPINI', 'RAJESH', '9989974274', 'nanipini.rajesh@gmail.com', 'Kurakulas@123', '69900', '4', '', '1985-05-05', '', '4', '6', '3-184,YELLAMILLI ,GANDEPALLI, YELLAMILLI, EAST GODAVARI ,ANDHRA PRADESH - 533437', '3-184,YELLAMILLI ,GANDEPALLI, YELLAMILLI, EAST GODAVARI ,ANDHRA PRADESH - 533437', 1, 'User', '05175651-photo.jpeg', '', '11', '2', '', '566210110012352', 'SKID0005662', '05175651-bank.jpeg', '', '05175651-aadhar.jpeg', '', '05175651-pan.jpeg', '41', '9989974274', 'rajesh.n@k-seva.com', '4', '6', '', '', 'AETPN7691H ', '496963235546', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 17:56:51', '2026-03-06 13:20:55'),
(46, '66900', 'GADDALA', 'CHANDRA SEKHAR', '8877333888', 'chandu20015@gmail.com', 'Kurakulas@123', '66900', '4', '', '1989-09-03', '', '4', '7', '3-142A, KOKKIRRENI THIRUMALAYAPALEM KHAMMAM 507163', '3-142A, KOKKIRRENI THIRUMALAYAPALEM KHAMMAM 507163', 1, 'User', '05180326-photo.jpeg', '', '16', '2', '', '0432104000091279', 'IBKL0000374', '05180326-bank.jpeg', '', '05180326-aadhar.jpeg', '', '05180326-pan.jpeg', '41', '8877333888', 'chandrasekhar.g@k-seva.com', '4', '7', '', '', 'BVSPG1236Q ', '939986421395', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 18:03:26', '2026-03-06 13:20:07'),
(47, '67000', 'TEGALA', 'CHETAN', '8886181851', 'chetantegala75@gmail.com', 'Kurakulas@123', '67000', '4', '', '2002-02-17', '', '4', '6', '8-3-1003/A/S-5, Srinagar â€¢ Colony Main Ra, Sagar Society, Sri Nagar Colony, Aurora Colony, Banjara Hills, Hyderabad, Telangana 500073', '8-3-1003/A/S-5, Srinagar â€¢ Colony Main Ra, Sagar Society, Sri Nagar Colony, Aurora Colony, Banjara Hills, Hyderabad, Telangana 500073', 1, 'User', '05181156-photo.jpeg', '', '22', '2', '', '7550958782', 'IDIB0003052', '05181156-bank.jpeg', '', '05181156-aadhar.jpeg', '', '05181156-pan.jpeg', '9', '8886047890', 'chetan.t@k-seva.com', '4', '6', '', '', 'IDIB000305 ', '7550958782', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 18:11:56', '2026-03-06 13:18:21'),
(48, '65100', 'SHIVA KUMAR', 'ESUPURAM', '9618806807', 'shivakumar.esupuram@gmail.com', 'kurakulas@123', '65100', '4', '', '1989-05-15', '', '4', '27', '11-76/22/B/A/1,Keshava Nagar Colony ,malkapur ,Kondapur Mandal ,Sangareddy, Telangana -502295', '11-76/22/B/A/1,Keshava Nagar Colony ,malkapur ,Kondapur Mandal ,Sangareddy, Telangana -502295', 1, 'User', '05181322-photo.jpeg', '', '1', '2', '', '50100006881596', 'HDFC0004921', '05181322-bank.jpeg', '', '05181322-aadhar-card.jpeg', '', '05181322-pan-card.jpeg', '13', '8886188994', 'Shivakumar.e@k-seva.com', '4', '27', '', '', 'ABKPE1726E ', '420828893770', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 18:13:22', '2026-03-07 17:53:35'),
(49, '69100', 'KANDI', 'SRINIVAS', '9010819014', 'nikkysrinivasan1@gmail.com', 'Kurakulas@123', '69100', '4', '', '1979-11-05', '', '4', '6', '7-52 PATAN CHERUVU MEDAK 502305', '7-52 PATAN CHERUVU MEDAK 502305', 1, 'User', '06130828-whatsapp-image-2026-03-06-at-1.07.53-pm.jpeg', '', '1', '2', '', '50100159620391', 'HDFC0000811', '05182032-bank.jpeg', '', '05182032-aadhar.jpeg', '', '05182032-pan.jpeg', '41', '9010819014', 'srinivas.k@k-seva.com', '4', '6', '', '', 'EFVPK3334D ', '219889013028', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-05 18:20:32', '2026-03-06 13:08:28'),
(50, '14100', 'D NAGABHUSHANA', 'CHOWDARY', '8885990999', 'vasanthasai99@gmail.com', 'Kurakulas@123', '14100', '4', '', '1985-04-10', '', '2', '11', '1-76, near anjaneyaswamy temple,akunuru,krishna,ap-521245', '1-76, near anjaneyaswamy temple,akunuru,krishna,ap-521245', 1, 'User', '06115806-photo.jpeg', '', '1', '2', '', '50100328929486', 'HDFC0002971', '06152905-whatsapp-image-2026-03-06-at-1.46.04-pm-(2).jpeg', '', '06115806-aadhar-1.jpeg', '', '06115806-pan.jpeg', '16', '8885990999', 'nagabhushana.c@k-seva.com', '2', '11', '', '', 'AVRPD0172E ', '718313049317', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-06 11:58:06', '2026-03-06 15:29:05'),
(51, '66400', 'NAGELLY', 'SAIRAM GOUD', '8688820298', 'workspace.nagelly@gmail.com', 'Kurakulas@123', '66400', '4', '', '1993-08-19', '', '4', '6', '8-3-14 VALLABH NAGAR OLD BOWENPALLY KUKATPALLY,HYDERABAD-500011', '8-3-14 VALLABH NAGAR OLD BOWENPALLY KUKATPALLY,HYDERABAD-500011', 1, 'User', '06121549-photo.jpeg', '', '6', '2', '', '62244020993', 'SBIN0020812', '06121549-bank.jpeg', '', '06121549-adhar.jpeg', '', '06121549-pan.jpeg', '12', '9966177996', 'sairam.n@k-seva.com', '4', '6', '', '', 'BRLPG6410K ', '896701021526', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-06 12:15:49', '2026-03-06 12:54:57'),
(52, '14344', 'MEENA RAY', 'KODIMELA', '9390634061', 'saimeena724@gmail.com', 'Kurakulas@123', '14344', '4', '', '2000-02-07', '', '4', '6', '13-5-56,MATTEWADA, WARANGAL TELANGANA-506002', '13-5-56,MATTEWADA, WARANGAL TELANGANA-506002', 1, 'User', '06122858-photo.png', '', '2', '2', '', '2648442600', 'KKBK0000561', '06122858-bank-cheque.jpeg', '', '06122858-aadhar-card.jpeg', '', '06122858-pan.jpeg', '41', '8886073636', 'meenaray.k@k-seva.com', '4', '6', '', '', 'CBTPJ6415J ', '699283050197', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-06 12:28:58', '2026-03-06 12:52:31'),
(53, '14336', 'GOWTHAMI', 'BACHINA', '7729901290', 'gowthamibachina9213@gmail.com', 'Kurakulas@123', '14336', '4', '15', '2000-04-27', '', '4', '6', '3-107-1 , INKOLLU ROAD,NEAR CINEMA HALL,PANGULURU,PRAKASAM,AP-523261', '3-107-1 , INKOLLU ROAD,NEAR CINEMA HALL,PANGULURU,PRAKASAM,AP-523261', 1, 'User', '06125107-photo.jpeg', '', '31', '2', '', '100052680888', 'ESFB0005001', '06125107-bank.jpeg', '', '06125107-aadhar.jpeg', '', '06125107-pan.jpeg', '2', '9346992298', 'gowthami.b@k-seva.com', '4', '6', '', '', 'DWGPG5418H ', '978539047111', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-06 12:51:07', '0000-00-00 00:00:00'),
(54, '68000', 'VADAPALLI', 'VIJAYA', '7386688887', 'vadapalli.vijaya99@gmail.com', 'Kurakulas@123', '68000', '4', '', '1991-01-10', '', '4', '6', '3-86/7, PAPPULA MILLI VEEDHI NEAR VINAYAKA TEMPLE SARPAVARAM 533005', '3-86/7, PAPPULA MILLI VEEDHI NEAR VINAYAKA TEMPLE SARPAVARAM 533005', 1, 'User', '06153913-photo.jpeg', '', '1', '2', '', '50100024240339', 'HDFC0000426', '06153913-bank.jpeg', '', '06153913-aadhar.jpeg', '', '06153913-pan.jpeg', '9', '7386688887', 'vijaya.v@k-seva.com', '4', '6', '', '', 'AVGPV0624G ', '642563077090', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-06 15:39:13', '2026-03-06 15:41:51'),
(55, '62100', 'PRABHAKARA', 'CHARY GANTALA', '9013283986', 'gprc99@gmail.com', 'Kurakulas@123', '62100', '4', '15', '1985-06-10', '', '4', '6', 'H NO 1/9/ D, VISANNAPETA MANDAL VSMIREDDY PALLY KRISHNA 521227', 'H NO 1/9/ D, VISANNAPETA MANDAL VSMIREDDY PALLY KRISHNA 521227', 1, 'User', '06154740-photo.jpeg', '', '1', '2', '', '50100262721569', 'HDFC0001995', '06154740-bank.jpeg', '', '06154740-aadhar.jpeg', '', '06154740-pan.jpeg', '41', '9133369851', 'prabhakarachary.g@k-seva.com', '4', '6', '', '', 'BDKPG4296C ', '535979552465', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-06 15:47:40', '0000-00-00 00:00:00'),
(56, '14335', 'VARIKUTI MOHANA', 'PRIYANKA', '9059397289', 'priyankavarikuti16@gmail.com', 'Priyanka@2001', '14335', '4', '', '2001-09-17', '', '4', '6', '8TH WORD VEKNURU KRISHNA 521121', '8TH WORD VEKNURU KRISHNA 521121', 1, 'User', '06160546-photo.jpeg', '', '31', '2', '', '100051337806', 'ESFB0005006', '', '', '06161250-aadhar.jpeg', '', '06161250-pan.jpeg', '2', '9100020316', 'priyanka.v@k-seva.com', '4', '6', '', '', 'HFPPP1493K ', '304097437841', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-06 15:59:57', '2026-03-06 16:12:50'),
(57, '61006', 'SRIRAMULA', 'SRIDHAR', '9440989998', 'sridhersriramula@gmail.com', 'Kurakulas@123', '61006', '4', '15', '1975-05-02', '', '4', '9', 'H NO 8-2-30 , BHAVANI NAGAR, VEMULAWADA MANDAL, VEMULAWADA, KARIMNAGAR, TELANGANA-505302', 'VCJV+P6V, Indra Nagar, Janmabhoomi Nagar, Mancherial, 5TH FLOOR Telangana 504208', 1, 'User', '06171853-photo.jpeg', '', '1', '2', '', '5020003605006', 'HDFC0002949', '06171853-bank.jpeg', '', '06171853-aadhar.jpeg', '', '06171853-pan.jpeg', '10', '9440989998', 'sridhar.s@kurakulas.com', '4', '9', '', '', 'BWAPS2541H ', '525421086295', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-06 17:18:53', '0000-00-00 00:00:00'),
(58, '18000', 'GANDHAM', '	SYAM BABU', '9000669666', 'syambabu666@gmail.com', '	Kurakulas@123', '18000', '4', '5', '1980-08-16', '', '4', '6', 'Dental Specialists, Classic Avenue, Plot No. 302, above Ameerpet Road, near R.S. Brothers, Punjagutta Officers Colony, Ameerpet, Hyderabad, Telangana 500016', '16-4-2, L B SASTRI ROAD , OPP S R HOSPITA SRIRAM NAGAR 533105', 1, 'User', '06172519-screenshot_6-3-2026_172421_emp.kfinone.com.jpeg', '', '6', '2', '', '20012703251', '	SBIN0000904', '06172519-09140857-sbi-ac-of-syam-babu-gandham.pdf', '', '06172519-09140857-syam-babu-gandham-aadhar-card-(1).pdf', '', '06172519-09140857-syam-babu-gandham-pancard.pdf', '2', '9000669666', 'syambabu.g@kurakulas.com', '4', '6', '', '', '	AHKPG9468 ', '776892522527', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-06 17:25:19', '0000-00-00 00:00:00'),
(59, '65400', 'KUMMARI', 'MAHESH', '9494169050', 'maheshkummari08@gmail.com', 'Kurakulas@123', '65400', '4', '', '1988-08-17', '', '4', '27', '	1-61, MUNPALLE , BHUSAREDDIPALLE , MEDAK, TELANGANA-502291', '	1-61, MUNPALLE , BHUSAREDDIPALLE , MEDAK, TELANGANA-502291', 1, 'User', '06180253-photo.jpeg', '', '14', '2', '', '007501571002', '007501571002', '06180253-bank.jpeg', '', '06180253-aadhar.jpeg', '', '06180253-pan.jpeg', '13', '9121012371', 'maheshkummari08@k-seva.com', '4', '27', '', '', 'CTSPK1967M ', '553785665056', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '2026-03-06 18:02:53', '2026-03-07 18:46:00'),
(60, '18100', 'JANNU', 'DIVYAVANI', '9533508603', '	DIVYAVANIJANNU@GAMIL.COM', '	Kurakulas@123', '	18100', '4', '15', '1986-11-16', '', '4', '6', 'PRAKASH NAGAR BEGUMPET', '11-23-1710 EKASHILA NAGAR WARANGAL\r\n', 1, 'User', '06181648-03152408-whatsapp-image-2025-09-03-at-3.07.21-pm.jpeg', '', '6', '2', '', '34821437047', '	SBIN0013331', '06181648-03152408-whatsapp-image-2025-09-03-at-3.05.11-pm-(2).jpeg', '', '06181648-03152408-whatsapp-image-2025-09-03-at-3.08.30-pm.jpeg', '', '06181648-03152408-whatsapp-image-2025-09-03-at-3.10.30-pm.jpeg', '26', '9346201052', 'Divyavani.j@k-seva.com', '4', '6', '', '', '	CPPPJ5479 ', '265289919283', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-06 18:16:48', '0000-00-00 00:00:00'),
(61, '11000', '	MUNJALA', 'RAMYA', '8790173002', 'ramyamunjala@gmail.com', '	Kurakulas@123', '11000', '4', '15', '0000-00-00', '', '4', '6', 'Plot no 128, Ushodaya colony, phase 1 , Gajularamaram road , Hyderabad, 500055', '12-25/2, REGADI MADDIKUNTA,REGADDIKUNTA,KARIMNAGAR, TG-505162', 0, 'User', '06183745-11132811-whatsapp-image-2025-10-11-at-1.23.33-pm.jpeg', '', '4', '2', '', '923010052594022', '	UTIB0005040', '', '', '06183745-11132811-whatsapp-image-2025-10-11-at-12.37.01-pm-(1).jpeg', '', '06183745-11132811-whatsapp-image-2025-10-11-at-12.37.01-pm.jpeg', '2', '9133321868', 'ramya.m@kurakulas.com', '4', '6', '', '', 'EUWPM0669H ', '30623793581', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-06 18:37:45', '2026-05-13 14:05:40'),
(62, '61500', 'NAGIREDDY', 'VENKATANARAYANA REDDY', '9010083339', 'nvnreddy2010@gmail.com', 'Kurakulas@123', '61500', '4', '15', '1985-04-15', '', '4', '6', 'Dental Specialists, Classic Avenue, Plot No. 302, above Ameerpet Road, near R.S. Brothers, Punjagutta Officers Colony, Ameerpet, Hyderabad, Telangana 500016', '175/C VENGAL RAO NAGAAR SRI NAGAR 500038', 1, 'User', '07180500-photo.jpeg', '', '4', '2', '', '911010066700946', 'UTIB0000235', '07180500-bank.jpeg', '', '07180500-aadhar-card.jpeg', '', '07180500-pan-card.jpeg', '10', '8886068787', 'narayana.nv@kk-seva.com', '4', '6', '', '', 'AEUPN2103H ', '506801279143', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-07 18:05:00', '0000-00-00 00:00:00'),
(63, '65200', 'Sekhar', 'Nalamala', '9989059853', 'sekharn_mba@yahoo.com', 'kurakulas@123', '65200', '4', '15', '1974-08-12', '', '4', '6', 'Flat no 302, SRJ homes Mathrushri Nagar Near Metro Station.', 'Flat no 302, SRJ homes Mathrushri Nagar Near Metro Station.', 1, 'User', '07184133-photo.jpeg', '', '1', '2', '', '05121140003965', 'HDFC0000512', '07184132-bank.jpeg', '', '07184132-aadhar-card.jpeg', '', '07184132-pan-card.jpeg', '13', '8886042929', 'sekhar.n@k-seva.com', '4', '6', '', '', 'AEAPN4437L ', '512293295005', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-07 18:41:32', '0000-00-00 00:00:00'),
(64, '80000', 'KOLLI', 'SATYANARAYANA MURTHY', '9849182483', 'satyanarayanamurthykolli@gmail.com', 'Kurakulas@123', '80000', '4', '12', '1968-03-01', '', '2', '12', '7-49/1, Flat No:- 403 Machid Road, Near SRKR Engineering College, Bhimavaram Mandal, Chinamiram (Rural), PO: Chinamiram, Sub District: Bhimavaram, District: West Godavari, State: Andhra Pradesh, PIN Code: 534204.', '7-49/1, Flat No:- 403 Machid Road, Near SRKR Engineering College, Bhimavaram Mandal, Chinamiram (Rural), PO: Chinamiram, Sub District: Bhimavaram, District: West Godavari, State: Andhra PraCode: 534204.', 1, 'User', '18165856-27163136-whatsapp-image-2025-11-27-at-4.30.33-pm.jpeg', '', '27', '2', '', '159849182483', 'INDB0000948', '18165856-27163136-whatsapp-image-2025-11-27-at-4.26.54-pm.jpeg', '', '18165856-27163136-whatsapp-image-2025-11-27-at-4.23.41-pm-(1).jpeg', '', '18165856-27163136-whatsapp-image-2025-11-27-at-4.23.41-pm.jpeg', '2', '8886010404', 'satyanarayana.m@kseva.com', '2', '12', '', '', 'BOPPK5370D ', '783531883923', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-18 16:58:56', '2026-03-23 10:33:51'),
(65, '16000', 'EDULA', 'SWARNALATHA', '6305370768', 'sslatha4768@gmail.com', 'kurakulas@123', '16000', '4', '15', '1990-07-15', '', '4', '6', '2-1-97, CHARLAPALLY WARD NO-4 PEDDA CHARLAPALLY VTC: GHATKESAR DIST: K.V RANGAREDDY STATE: TELANAGANA HYDERABAD -501301', '2-6-26 /NWE MINT COLONY RAILWAY STATION CHERLAPALLY,NWEMINT COLONY RAILWAY STATION , CHERLAPLLY RAILWAY STATION-501301', 1, 'User', '23115906-whatsapp-image-2026-03-23-at-10.50.42-am.jpeg', '', '11', '2', '', '571110110006508', 'BKI00005711', '23115906-whatsapp-image-2026-03-23-at-10.44.29-am.jpeg', '', '23115906-whatsapp-image-2026-03-23-at-10.43.36-am.jpeg', '', '23115906-whatsapp-image-2026-03-23-at-10.43.37-am.jpeg', '2', '9966177002', 'swarnalatha.e@kurakulas.com', '4', '6', '', '', 'MSVPS0986G ', '946448608408', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-23 11:59:06', '2026-03-31 18:05:12'),
(66, '60100', '	SANAPATI', 'KESAVA', '8523898119', '	kesava.sanapati@gmail.com', 'Kurakulas@123', '60100', '4', '15', '1979-05-07', '', '4', '6', '	PLOT NO 5 , FLAT NO 302, BHEEMA AVENUE , OPP 3 TEMPLE LONE,SUCHITRA , JEEDIMETLA , MEDCHAL MALKAJGIRI 500067', '	PLOT NO 5 , FLAT NO 302, BHEEMA AVENUE , OPP 3 TEMPLE LONE,SUCHITRA , JEEDIMETLA , MEDCHAL MALKAJGIRI 500067', 1, 'User', '25171406-whatsapp-image-2026-03-25-at-5.11.38-pm.jpeg', '', '12', '2', '', '1483155000018214', 'KVBL0001483', '25171406-25124230-whatsapp-image-2026-03-25-at-12.37.03-pm.jpeg', '', '25171406-25124230-whatsapp-image-2026-03-25-at-12.26.39-pm.jpeg', '', '25171406-25124230-whatsapp-image-2026-03-25-at-12.26.38-pm.jpeg', '9', '8523898119', 'kesava.s@kurakulas.com', '4', '6', '', '', '	FXMPS9345 ', '941188426507', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-25 17:14:06', '0000-00-00 00:00:00');
INSERT INTO `tbl_user` (`id`, `username`, `firstName`, `lastName`, `mobile`, `email_id`, `password`, `employee_no`, `department_id`, `designation_id`, `birth_date`, `anniversary_date`, `branch_state_name_id`, `branch_location_id`, `present_address`, `permanent_address`, `status`, `userRank`, `avatar`, `acc_holder_name`, `bank_name`, `account_type`, `branch_name`, `account_number`, `ifsc_code`, `bank_passbook`, `passport_document`, `aadhar_document`, `aadhar_back_document`, `pancard_document`, `reportingTo`, `official_phone`, `official_email`, `work_state`, `work_location`, `residential_address`, `office_address`, `pan_number`, `aadhaar_number`, `manage_icons`, `data_icons`, `work_icons`, `payout_icons`, `last_working_date`, `leaving_reason`, `re_joining_date`, `ref_name_1`, `ref_relation_1`, `ref_mobile_1`, `ref_address_1`, `ref_name_2`, `ref_relation_2`, `ref_mobile_2`, `ref_address_2`, `createdBy`, `created_at`, `updated_at`) VALUES
(67, '81000', 'NETASH', 'TIRUNAGARY', '9110515715', 'tnetash@gmail.com', 'Kurakulas@123', '81000', '4', '12', '1975-11-28', '', '4', '6', 'Flat No 504,5th Floor,Pavani Lingampet Estate,Street no 10 Himayat Nagar ,Hyderabad,500029', '3-4-710,NARAYANAGUDA,LANE ADI NREDDY WOMENS COLLEGE, NARAYAGUDA,HIMAYATHNAGAR,-500029\r\n', 1, 'User', '30125333-photo-aadhar.jpeg', '', '32', '2', '', '025094200000753', 'YESB0000250', '30125618-whatsapp-image-2026-03-30-at-12.54.11-pm.jpeg', '', '30125333-aadhar-netash.jpeg', '', '30125333-pan-netash.jpeg', '2', '9110515715', 'netash.t@k-seva.com', '4', '6', '', '', 'AEFPT720Q ', '719485637340', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-30 12:53:33', '2026-03-30 12:56:18'),
(68, '14307', 'PRIYANKA', 'DALAI', '8328817839', 'priyankadalai567@gmail.com', 'Kurakulas@123', '14307', '4', '15', '2001-06-28', '', '4', '6', 'ASIAN PG ', 'BERHAMPUR', 1, 'User', '30172143-whatsapp_image_2026-03-18_at_5.40.20_pm-removebg-preview.png', 'PRIYANKA DALAI', '22', '2', 'BERHAMPUR', '6533163807', 'IDIB000B016', '30172143-ban-details.jpg.jpeg', '', '30172143-02102530-hr-aadhar-(2).pdf', '', '30172143-02102530-hr-pan-(1).pdf', '2', '7093244432', 'hr@kurakulas.com', '4', '6', '', '', 'IUFPD8443B ', '438467942350', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', 'krajeshk', '2026-03-30 17:21:43', '2026-05-13 19:41:11'),
(69, '82000', 'S', 'MANUVARDHAN', '8247616604', 'manusingam1989@gmail.com', 'Kurakulas@123', '82000', '4', '12', '2198-12-12', '', '4', '6', '8-1-328/FF/14, M G NAGAR , FILM NAGAR , SHALKPET 500096', '8-1-328/FF/14, M G NAGAR , FILM NAGAR , SHALKPET 500096', 1, 'User', '', '', '14', '2', '', '020201563645', 'ICIC0001124', '23164241-bank-details.jpeg', '', '23164241-aadhar.jpeg', '', '23164241-pan-card.jpeg', '2', '8247616604', 'manuvardhan.s@k-seva.com', '4', '6', '', '', 'CSIPS4103C ', '333135434291', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '14140', '2026-04-23 16:42:41', '0000-00-00 00:00:00'),
(70, '14179', 'JANNU', 'DIVYAVANI', '9533508603', 'DIVYAVANIJANNU@GAMIL.COM', 'Kurakulas@123', '14179', '4', '15', '1995-11-16', '', '4', '6', '	1-10-96 MAYUR MARG BEGUMPET', '11-23-1710 EKASHILA NAGAR WARANGAL', 1, 'User', '24132645-photo.jpeg', '', '6', '2', '', '34821437047', 'SBIN0013331', '24132645-bank-book.jpeg', '', '24132645-aadhar-card.jpeg', '', '24132645-pan-card.jpeg', '57', '9346201052', 'DIVYAVANI.J@K-SEVA.COM', '4', '6', '', '', 'CPPPJ5479A ', '265289919283', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '14140', '2026-04-24 13:26:45', '0000-00-00 00:00:00'),
(71, '70000', 'BEEMISETTY', 'RAGHAVENDRA', '9700713171', 'bheemisettyraghavendra@outlook.c', 'Kurakulas@123', '70000', '4', '15', '1990-04-20', '', '2', '20', '14-49, PANDURANGA STREET ,DHARMAVARAM, ANANTHAPUR,AP-515671', '14-49, PANDURANGA STREET ,DHARMAVARAM, ANANTHAPUR,AP-515671', 1, 'User', '24134056-photo.jpeg', '', '4', '2', '', '911010053626358', 'UTIB0001597', '24134056-bank-book.png', '', '24134056-aadhar-card.jpeg', '', '24134056-pan-card.jpeg', '2', '8886188992', 'raghavendra.b@k-seva.com', '2', '20', '', '', 'AODPR2033M ', '923679281781', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '14140', '2026-04-24 13:40:56', '0000-00-00 00:00:00'),
(72, '14010', 'SIRAMSETTI', '	NEELIMA', '7989557591', 'neelimasiramsetti111@gmail.com', 'Teamhead@123', '14010', '4', '12', '2002-04-12', '', '4', '6', ' 	AMEERPET -HYDERABAD', ' Address :	1-100 PALLIPALEM BOBBARLANKA KRISHNA ANDHRA PRADESH -521125', 1, 'User', '25165444-whatsapp-image-2026-04-25-at-4.50.57-pm.jpeg', '', '6', '2', '', '34076034177', 'SBIN0004697', '25165444-bank-neelima.jpeg', '', '25165444-neelima-aadhaar.jpeg', '', '25165444-neelima-pan.jpeg', '2', '8886217890', 'neelima.s@k-seva.com', '4', '6', '', '', 'CVWPN9205R ', '294552452155', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '14140', '2026-04-25 16:54:44', '0000-00-00 00:00:00'),
(73, '14326', 'CHETAN', 't', '8886181851', 'CHETANTEGALA75@GMAIL.COM', 'Kurakulas@123', '14326', '4', '15', '2002-02-17', '', '4', '6', '8-3-231/1/A/116,KRISHNA NAGAR,HYDERABAD,500045', '8-3-231/1/A/116,KRISHNA NAGAR,HYDERABAD,500045', 1, 'User', '25172101-photo-chetan.png', '', '22', '2', '', '7705958782', '	IDIB000S052', '25172101-whatsapp-image-2026-04-22-at-2.33.19-pm.jpeg', '', '25172101-whatsapp-image-2026-04-22-at-1.36.59-pm.jpeg', '', '25172101-whatsapp-image-2026-04-22-at-1.37.24-pm.jpeg', '2', '8886047890', 'CHETAN.T@K-SEVA.COM', '4', '6', '', '', 'CBOPT2271H ', '887180874054', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '14140', '2026-04-25 17:21:01', '0000-00-00 00:00:00'),
(76, '14318', 'RUPA', 'THOTA', '8328151641', 'roopathota18@gmail.com', 'Kurakulas@123', '14318', '13', '27', '1997-08-17', NULL, '4', '6', 'gdjsfgdrdg', 'jkdsfdrebhekfgft', 1, 'User', '', NULL, '11', '2', NULL, '565010110006258', 'BKID0005677', '', NULL, '', NULL, '', '2', '8886076161', 'rupa.t@kinfomedia.com', '4', '6', NULL, NULL, 'BXYPT1129F ', '216070636158', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'krajeshk', '2026-05-13 18:11:41', '2026-05-13 18:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor_bank`
--

CREATE TABLE `tbl_vendor_bank` (
  `id` int NOT NULL,
  `vendor_bank_name` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vendor_bank`
--

INSERT INTO `tbl_vendor_bank` (`id`, `vendor_bank_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ICICI Bank Ltd', 1, '2025-05-14 17:10:49', '2025-05-15 17:48:51'),
(2, 'HDFC Bank Ltd', 1, '2025-05-15 17:48:58', '0000-00-00 00:00:00'),
(4, 'Axis Finance Ltd', 1, '2025-05-15 17:49:10', '0000-00-00 00:00:00'),
(5, 'Karur Vysya Bank Ltd', 1, '2025-05-15 17:49:18', '0000-00-00 00:00:00'),
(6, 'HDB Financial Services Ltd', 1, '2025-05-15 17:49:24', '0000-00-00 00:00:00'),
(7, 'Avanse Financial Services Ltd', 1, '2025-05-20 19:53:00', '0000-00-00 00:00:00'),
(9, 'Bajaj Finance Ltd', 1, '2025-05-20 19:53:29', '0000-00-00 00:00:00'),
(10, 'Bajaj Housing Finance Ltd', 1, '2025-05-20 19:53:42', '0000-00-00 00:00:00'),
(11, 'Axis Bank Ltd', 1, '2025-05-20 19:53:49', '0000-00-00 00:00:00'),
(14, 'Finnable Technologies Pvt Ltd', 1, '2025-05-20 19:56:17', '0000-00-00 00:00:00'),
(15, 'Finplex Technologies Pvt Ltd', 1, '2025-05-20 19:56:23', '0000-00-00 00:00:00'),
(16, 'Aditya Birla Finance Ltd', 1, '2025-05-23 17:37:09', '0000-00-00 00:00:00'),
(17, 'Aditya Birla Housing Finance Ltd', 1, '2025-05-24 11:58:51', '0000-00-00 00:00:00'),
(18, 'Arka Fincap Ltd', 1, '2025-05-24 13:19:23', '0000-00-00 00:00:00'),
(19, 'ASHV Finance', 1, '2025-05-24 13:27:13', '0000-00-00 00:00:00'),
(20, 'Aspire Finance Pvt Ltd', 1, '2025-05-24 13:31:48', '0000-00-00 00:00:00'),
(21, 'Cholamandalam Housing Finance Ltd', 1, '2025-05-26 16:47:01', '0000-00-00 00:00:00'),
(22, 'Credit Saison-Kisetsu Saison Finance India Pvt Ltd	', 1, '2025-05-27 12:58:32', '0000-00-00 00:00:00'),
(23, 'Development Credit Bank Ltd-DCB', 1, '2025-05-27 13:13:43', '2025-11-29 12:10:40'),
(24, 'Equitas Small Finance Bank Ltd', 1, '2025-05-27 16:37:24', '0000-00-00 00:00:00'),
(25, 'Fedaral Bank Ltd', 1, '2025-05-28 16:23:52', '0000-00-00 00:00:00'),
(26, 'Flexi Loans-Epimoney Pvt Ltd', 1, '2025-05-28 16:44:29', '0000-00-00 00:00:00'),
(27, 'Ambit Finvest Pvt Ltd', 1, '2025-05-28 16:47:37', '0000-00-00 00:00:00'),
(28, 'FT Cash-Nomisha Mobile Pvt Ltd', 1, '2025-05-28 17:18:36', '0000-00-00 00:00:00'),
(29, 'Godrej Capital Ltd', 1, '2025-05-28 17:57:27', '0000-00-00 00:00:00'),
(30, 'AU Small Finance Bank Ltd', 1, '2025-05-29 11:05:34', '0000-00-00 00:00:00'),
(31, 'Godrej Finance Ltd', 1, '2025-05-29 12:37:57', '0000-00-00 00:00:00'),
(33, 'Hero Fincorp Ltd', 1, '2025-05-29 15:03:40', '0000-00-00 00:00:00'),
(34, 'Bandhan Bank Ltd', 1, '2025-05-29 15:34:41', '0000-00-00 00:00:00'),
(35, 'Bank of Baroda', 1, '2025-05-29 15:34:51', '0000-00-00 00:00:00'),
(36, 'Home First India Finance Ltd-HFFL', 1, '2025-05-29 17:09:58', '0000-00-00 00:00:00'),
(37, 'Cholamandalam Investment and Finance Co Ltd', 1, '2025-05-29 17:33:53', '0000-00-00 00:00:00'),
(38, 'Clix Capital Services Pvt Ltd', 1, '2025-05-30 11:56:41', '0000-00-00 00:00:00'),
(39, 'Edelweiss Finance Ltd', 1, '2025-05-30 12:41:43', '0000-00-00 00:00:00'),
(40, 'ICICI Home Finance Corporation Ltd', 1, '2025-05-30 12:47:37', '0000-00-00 00:00:00'),
(41, 'Fedbank Financial Services Ltd', 1, '2025-05-30 12:56:56', '0000-00-00 00:00:00'),
(42, 'IDBI Bank Ltd', 1, '2025-05-30 13:13:38', '0000-00-00 00:00:00'),
(43, 'IDFC First Bank Ltd', 1, '2025-05-30 13:14:25', '0000-00-00 00:00:00'),
(44, 'IIFL-India Infoline Finance Ltd', 1, '2025-05-30 13:15:22', '0000-00-00 00:00:00'),
(45, 'IKF-Indra Keela Finance Pvt Ltd', 1, '2025-05-30 13:16:15', '0000-00-00 00:00:00'),
(46, 'Incred Financial Services Ltd', 1, '2025-05-30 13:18:15', '0000-00-00 00:00:00'),
(47, 'Indifi Technologies Pvt Ltd', 1, '2025-05-30 13:18:48', '0000-00-00 00:00:00'),
(48, 'Indostar Captial Finance Ltd', 1, '2025-05-30 13:19:32', '0000-00-00 00:00:00'),
(49, 'Indusind Bank Ltd', 1, '2025-05-30 13:20:05', '0000-00-00 00:00:00'),
(50, 'JM Financial Services Ltd', 1, '2025-05-30 13:20:46', '0000-00-00 00:00:00'),
(52, 'GIC Housing Finance Ltd', 1, '2025-05-30 15:08:40', '0000-00-00 00:00:00'),
(53, 'Kinara Captial Pvt Ltd', 1, '2025-05-30 15:16:41', '0000-00-00 00:00:00'),
(54, 'Kotak Mahindra bank ltd', 1, '2025-05-30 15:17:23', '0000-00-00 00:00:00'),
(55, 'Kotak Mahindra Prime Ltd', 1, '2025-05-30 15:18:00', '0000-00-00 00:00:00'),
(56, 'KrazyBee Services Pvt Ltd', 1, '2025-05-30 15:19:24', '0000-00-00 00:00:00'),
(57, 'L & T Finance Ltd', 1, '2025-05-30 15:21:48', '0000-00-00 00:00:00'),
(58, 'Lending Kart Finance Ltd ', 1, '2025-05-30 15:22:36', '0000-00-00 00:00:00'),
(59, 'LIC Housing Finance Ltd', 1, '2025-05-30 15:23:07', '0000-00-00 00:00:00'),
(60, 'Loan frame', 1, '2025-05-30 15:23:21', '0000-00-00 00:00:00'),
(61, 'Mahindra Financial Services Ltd', 1, '2025-05-30 15:24:58', '0000-00-00 00:00:00'),
(62, 'Mas Financial Services Ltd', 1, '2025-05-30 15:25:29', '0000-00-00 00:00:00'),
(64, 'Motilal Oswal Financial Services Ltd', 1, '2025-05-30 15:27:02', '0000-00-00 00:00:00'),
(65, 'Muthoot Finance Ltd', 1, '2025-05-30 15:27:27', '0000-00-00 00:00:00'),
(66, 'Muthoot Fincorp Ltd-Blue', 1, '2025-05-30 15:28:04', '2025-07-09 17:12:34'),
(67, 'Muthoot Housing Finance Ltd', 1, '2025-05-30 15:28:17', '0000-00-00 00:00:00'),
(68, 'Neo Growth Credit Company Ltd', 1, '2025-05-30 15:29:16', '0000-00-00 00:00:00'),
(69, 'Northern Arc', 1, '2025-05-30 15:29:49', '0000-00-00 00:00:00'),
(70, 'Paysense Finance India Pvt Ltd', 1, '2025-05-30 15:31:03', '0000-00-00 00:00:00'),
(71, 'Piramal Capital & Housing Finance Ltd', 1, '2025-05-30 15:33:09', '0000-00-00 00:00:00'),
(72, 'PNB Housing Finance Ltd', 1, '2025-05-30 15:33:21', '0000-00-00 00:00:00'),
(73, 'Poonawala Finance Ltd', 1, '2025-05-30 15:33:49', '0000-00-00 00:00:00'),
(74, 'Poonawaalla Housing Finance Ltd', 1, '2025-05-30 15:34:23', '0000-00-00 00:00:00'),
(75, 'Profectus Captial Pvt Ltd', 1, '2025-05-30 15:35:32', '0000-00-00 00:00:00'),
(76, 'Protium Finance Ltd', 1, '2025-05-30 15:41:34', '0000-00-00 00:00:00'),
(77, 'RBL Bnak Ltd', 1, '2025-05-30 15:41:58', '0000-00-00 00:00:00'),
(78, 'Religare Housing Finance Ltd', 1, '2025-05-30 15:42:36', '0000-00-00 00:00:00'),
(79, 'Samman Capital Ltd	', 1, '2025-05-30 15:44:36', '0000-00-00 00:00:00'),
(80, 'Sinhan Bank Ltd', 1, '2025-05-30 15:45:10', '2025-07-09 17:14:17'),
(81, 'Shriram Finance Ltd', 1, '2025-05-30 15:45:45', '0000-00-00 00:00:00'),
(82, 'SMFG India Credit Ltd(Fullerton)', 1, '2025-05-30 15:46:03', '0000-00-00 00:00:00'),
(83, 'Sriram Housing Finance Ltd', 1, '2025-05-30 15:54:56', '0000-00-00 00:00:00'),
(84, 'Standard Chartered Bank Ltd	', 1, '2025-05-30 15:56:42', '0000-00-00 00:00:00'),
(85, 'Sundaram Finance', 1, '2025-05-30 15:57:03', '0000-00-00 00:00:00'),
(86, 'TATA Capital Ltd', 1, '2025-05-30 15:57:16', '2025-12-22 20:36:05'),
(87, 'TATA Capital Housing Finance Ltd', 1, '2025-05-30 15:57:32', '0000-00-00 00:00:00'),
(88, 'TVS Credit Services Ltd', 1, '2025-05-30 15:58:09', '0000-00-00 00:00:00'),
(89, 'U Gro captial Ltd', 1, '2025-05-30 15:58:54', '0000-00-00 00:00:00'),
(90, 'Unity Small Finance Bank Ltd', 1, '2025-05-30 15:59:37', '0000-00-00 00:00:00'),
(91, 'Utkarsh Small Finance Bank Ltd', 1, '2025-05-30 16:00:03', '0000-00-00 00:00:00'),
(92, 'Vastu Housing Finance Corporation Ltd', 1, '2025-05-30 16:00:29', '0000-00-00 00:00:00'),
(93, 'Vistaara Financial Services Pvt Ltd', 1, '2025-05-30 16:00:59', '2025-07-09 17:18:21'),
(94, 'Werize-Wortgage Technologies Pvt Ltd', 1, '2025-05-30 16:01:22', '0000-00-00 00:00:00'),
(95, 'Yes Bank Ltd', 1, '2025-05-30 16:01:43', '0000-00-00 00:00:00'),
(97, 'Crederelink Fintech Pvt Ltd', 1, '2025-06-12 11:50:33', '0000-00-00 00:00:00'),
(99, 'Fibe-Social Worth Technologies Private Limited', 1, '2025-06-16 17:29:25', '0000-00-00 00:00:00'),
(100, 'Motilal Home Finance Ltd', 1, '2025-06-16 17:33:44', '2025-07-09 15:48:32'),
(101, 'City Union Bank', 1, '2025-06-16 18:04:13', '0000-00-00 00:00:00'),
(102, 'Hong Kong and Shanghai Banking Corporation - HSBC', 1, '2025-07-03 16:51:18', '0000-00-00 00:00:00'),
(103, 'Veritas Finance Ltd', 1, '2025-07-07 12:59:34', '0000-00-00 00:00:00'),
(104, 'ORIX Leasing & Financial Services India Limted', 1, '2025-07-07 13:00:13', '0000-00-00 00:00:00'),
(106, 'Aadhaar Housing Finance Ltd', 1, '2025-07-07 20:00:34', '2025-07-09 17:06:14'),
(108, 'Truhome Finance Ltd', 1, '2025-07-15 11:31:19', '2025-07-25 20:26:02'),
(109, 'Jana Small Finance Bank Ltd', 1, '2025-07-28 16:22:34', '2025-12-11 19:18:23'),
(110, 'Catholic Syrian Bank Limited ( CSB )', 1, '2025-08-06 12:06:05', '2025-09-29 13:24:51'),
(111, 'Easy Home Finance', 1, '2025-08-07 12:09:35', '0000-00-00 00:00:00'),
(112, 'United Capital', 1, '2025-08-08 11:01:18', '0000-00-00 00:00:00'),
(114, 'India Sheltor Home Finance Ltd', 1, '2025-09-29 13:25:14', '0000-00-00 00:00:00'),
(115, 'Capital India Finance Limited', 1, '2025-10-25 18:12:43', '0000-00-00 00:00:00'),
(116, 'Bank Of Maharashtra', 1, '2025-10-31 12:09:43', '0000-00-00 00:00:00'),
(117, 'Central Bank Of India', 1, '2025-10-31 12:12:53', '0000-00-00 00:00:00'),
(118, 'Canara Bank', 1, '2025-10-31 12:14:16', '0000-00-00 00:00:00'),
(119, 'Bank Of India', 1, '2025-10-31 12:16:03', '0000-00-00 00:00:00'),
(120, 'Sundaram Housing Finance', 1, '2025-10-31 12:21:04', '0000-00-00 00:00:00'),
(121, 'Mahindra Housing Finance ', 1, '2025-10-31 12:23:28', '0000-00-00 00:00:00'),
(122, 'Jio Finance', 1, '2025-10-31 12:24:24', '0000-00-00 00:00:00'),
(123, 'Indian Bank Ltd', 1, '2025-10-31 12:26:02', '0000-00-00 00:00:00'),
(125, 'Hero Housing Finance Ltd', 1, '2025-11-19 16:16:24', '0000-00-00 00:00:00'),
(126, 'HDFC Credila', 1, '2025-11-24 12:10:02', '2025-11-29 12:10:20'),
(127, 'HDFC Sales Pvt Ltd', 1, '2025-12-03 15:18:37', '0000-00-00 00:00:00'),
(128, 'State Bank Of India', 1, '2025-12-11 18:10:32', '0000-00-00 00:00:00'),
(129, 'Vridhi Finserv Home Finance Ltd', 1, '2025-12-18 17:54:37', '0000-00-00 00:00:00'),
(130, 'Auxilo Finserve PVT. LTD', 1, '2026-01-08 10:25:21', '0000-00-00 00:00:00'),
(131, 'Development Credit Bank Limited(DCB)', 1, '2026-01-12 17:49:39', '0000-00-00 00:00:00'),
(132, 'Bajaj Market', 1, '2026-01-19 11:07:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wallet`
--

CREATE TABLE `tbl_wallet` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `balance` decimal(10,2) NOT NULL DEFAULT '0.00',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_wallet`
--

INSERT INTO `tbl_wallet` (`id`, `username`, `user_type`, `balance`, `created_at`, `updated_at`) VALUES
(1, '10000', 'User', 0.00, '2026-03-30 04:18:27', '0000-00-00 00:00:00'),
(2, 'loggedInUser', 'User', 0.00, '2026-03-30 04:54:15', '0000-00-00 00:00:00'),
(3, 'loggedInUser', 'User', 0.00, '2026-03-30 04:54:21', '0000-00-00 00:00:00'),
(4, 'loggedInUser', 'User', 0.00, '2026-03-30 04:54:25', '0000-00-00 00:00:00'),
(5, 'loggedInUser', 'User', 0.00, '2026-03-30 04:54:36', '0000-00-00 00:00:00'),
(6, 'loggedInUser', 'User', 0.00, '2026-03-30 04:55:41', '0000-00-00 00:00:00'),
(7, 'loggedInUser', 'User', 0.00, '2026-03-30 04:55:49', '0000-00-00 00:00:00'),
(8, 'loggedInUser', 'User', 0.00, '2026-03-30 04:55:59', '0000-00-00 00:00:00'),
(9, 'loggedInUser', 'User', 0.00, '2026-03-30 04:56:47', '0000-00-00 00:00:00'),
(10, 'loggedInUser', 'User', 0.00, '2026-03-30 04:56:49', '0000-00-00 00:00:00'),
(11, 'loggedInUser', 'User', 0.00, '2026-03-30 05:24:07', '0000-00-00 00:00:00'),
(12, 'loggedInUser', 'User', 0.00, '2026-03-30 05:24:15', '0000-00-00 00:00:00'),
(13, 'loggedInUser', 'User', 0.00, '2026-03-30 05:24:25', '0000-00-00 00:00:00'),
(14, 'loggedInUser', 'User', 0.00, '2026-03-30 05:38:40', '0000-00-00 00:00:00'),
(15, 'loggedInUser', 'User', 0.00, '2026-03-30 05:38:43', '0000-00-00 00:00:00'),
(16, 'loggedInUser', 'User', 0.00, '2026-03-30 05:38:45', '0000-00-00 00:00:00'),
(17, 'loggedInUser', 'User', 0.00, '2026-03-30 05:39:02', '0000-00-00 00:00:00'),
(18, 'loggedInUser', 'User', 0.00, '2026-03-30 05:39:06', '0000-00-00 00:00:00'),
(19, 'loggedInUser', 'User', 0.00, '2026-03-30 05:39:09', '0000-00-00 00:00:00'),
(20, 'loggedInUser', 'User', 0.00, '2026-03-30 05:39:14', '0000-00-00 00:00:00'),
(21, 'loggedInUser', 'User', 0.00, '2026-03-30 05:39:17', '0000-00-00 00:00:00'),
(22, 'loggedInUser', 'User', 0.00, '2026-03-30 05:39:21', '0000-00-00 00:00:00'),
(23, 'loggedInUser', 'User', 0.00, '2026-03-30 05:39:22', '0000-00-00 00:00:00'),
(24, 'loggedInUser', 'User', 0.00, '2026-03-30 05:39:25', '0000-00-00 00:00:00'),
(25, 'loggedInUser', 'User', 0.00, '2026-03-30 05:39:33', '0000-00-00 00:00:00'),
(26, 'loggedInUser', 'User', 0.00, '2026-03-30 05:39:39', '0000-00-00 00:00:00'),
(27, 'loggedInUser', 'User', 0.00, '2026-03-30 05:39:50', '0000-00-00 00:00:00'),
(28, 'loggedInUser', 'User', 0.00, '2026-03-30 05:40:01', '0000-00-00 00:00:00'),
(29, 'loggedInUser', 'User', 0.00, '2026-03-30 05:40:10', '0000-00-00 00:00:00'),
(30, 'loggedInUser', 'User', 0.00, '2026-03-30 05:40:22', '0000-00-00 00:00:00'),
(31, 'loggedInUser', 'User', 0.00, '2026-03-30 05:40:25', '0000-00-00 00:00:00'),
(32, 'loggedInUser', 'User', 0.00, '2026-03-30 05:40:28', '0000-00-00 00:00:00'),
(33, 'loggedInUser', 'User', 0.00, '2026-03-30 05:41:18', '0000-00-00 00:00:00'),
(34, 'loggedInUser', 'User', 0.00, '2026-03-30 05:41:47', '0000-00-00 00:00:00'),
(35, 'loggedInUser', 'User', 0.00, '2026-03-30 05:42:00', '0000-00-00 00:00:00'),
(36, 'loggedInUser', 'User', 0.00, '2026-03-30 05:42:07', '0000-00-00 00:00:00'),
(37, 'loggedInUser', 'User', 0.00, '2026-03-30 05:42:08', '0000-00-00 00:00:00'),
(38, 'loggedInUser', 'User', 0.00, '2026-03-30 05:42:10', '0000-00-00 00:00:00'),
(39, 'loggedInUser', 'User', 0.00, '2026-03-30 05:42:15', '0000-00-00 00:00:00'),
(40, 'loggedInUser', 'User', 0.00, '2026-03-30 05:42:17', '0000-00-00 00:00:00'),
(41, 'loggedInUser', 'User', 0.00, '2026-03-30 05:42:19', '0000-00-00 00:00:00'),
(42, '14341', 'User', 0.00, '2026-03-30 05:42:21', '0000-00-00 00:00:00'),
(43, 'loggedInUser', 'User', 0.00, '2026-03-30 05:42:31', '0000-00-00 00:00:00'),
(44, 'loggedInUser', 'User', 0.00, '2026-03-30 05:42:34', '0000-00-00 00:00:00'),
(45, '14348', 'User', 0.00, '2026-03-30 05:42:39', '0000-00-00 00:00:00'),
(46, 'loggedInUser', 'User', 0.00, '2026-03-30 05:42:41', '0000-00-00 00:00:00'),
(47, 'loggedInUser', 'User', 0.00, '2026-03-30 05:42:48', '0000-00-00 00:00:00'),
(48, 'loggedInUser', 'User', 0.00, '2026-03-30 05:42:48', '0000-00-00 00:00:00'),
(49, 'loggedInUser', 'User', 0.00, '2026-03-30 05:43:40', '0000-00-00 00:00:00'),
(50, 'loggedInUser', 'User', 0.00, '2026-03-30 05:44:44', '0000-00-00 00:00:00'),
(51, 'loggedInUser', 'User', 0.00, '2026-03-30 05:45:00', '0000-00-00 00:00:00'),
(52, 'loggedInUser', 'User', 0.00, '2026-03-30 05:45:03', '0000-00-00 00:00:00'),
(53, 'loggedInUser', 'User', 0.00, '2026-03-30 05:45:40', '0000-00-00 00:00:00'),
(54, 'loggedInUser', 'User', 0.00, '2026-03-30 05:45:42', '0000-00-00 00:00:00'),
(55, 'loggedInUser', 'User', 0.00, '2026-03-30 05:45:49', '0000-00-00 00:00:00'),
(56, 'loggedInUser', 'User', 0.00, '2026-03-30 05:45:52', '0000-00-00 00:00:00'),
(57, 'loggedInUser', 'User', 0.00, '2026-03-30 05:45:53', '0000-00-00 00:00:00'),
(58, 'loggedInUser', 'User', 0.00, '2026-03-30 05:46:03', '0000-00-00 00:00:00'),
(59, 'loggedInUser', 'User', 0.00, '2026-03-30 05:46:10', '0000-00-00 00:00:00'),
(60, 'loggedInUser', 'User', 0.00, '2026-03-30 05:46:12', '0000-00-00 00:00:00'),
(61, 'loggedInUser', 'User', 0.00, '2026-03-30 05:46:19', '0000-00-00 00:00:00'),
(62, 'loggedInUser', 'User', 0.00, '2026-03-30 05:46:23', '0000-00-00 00:00:00'),
(63, 'loggedInUser', 'User', 0.00, '2026-03-30 05:50:13', '0000-00-00 00:00:00'),
(64, 'loggedInUser', 'User', 0.00, '2026-03-30 06:18:04', '0000-00-00 00:00:00'),
(65, 'loggedInUser', 'User', 0.00, '2026-03-30 06:18:12', '0000-00-00 00:00:00'),
(66, 'loggedInUser', 'User', 0.00, '2026-03-30 06:18:22', '0000-00-00 00:00:00'),
(67, 'loggedInUser', 'User', 0.00, '2026-03-30 06:18:36', '0000-00-00 00:00:00'),
(68, 'loggedInUser', 'User', 0.00, '2026-03-30 06:18:44', '0000-00-00 00:00:00'),
(69, 'loggedInUser', 'User', 0.00, '2026-03-31 02:38:47', '0000-00-00 00:00:00'),
(70, 'loggedInUser', 'User', 0.00, '2026-03-31 02:38:54', '0000-00-00 00:00:00'),
(71, 'loggedInUser', 'User', 0.00, '2026-03-31 02:42:01', '0000-00-00 00:00:00'),
(72, 'loggedInUser', 'User', 0.00, '2026-03-31 03:16:04', '0000-00-00 00:00:00'),
(73, 'loggedInUser', 'User', 0.00, '2026-03-31 05:32:08', '0000-00-00 00:00:00'),
(74, 'loggedInUser', 'User', 0.00, '2026-03-31 05:32:27', '0000-00-00 00:00:00'),
(75, 'loggedInUser', 'User', 0.00, '2026-03-31 05:33:00', '0000-00-00 00:00:00'),
(76, 'loggedInUser', 'User', 0.00, '2026-03-31 05:33:04', '0000-00-00 00:00:00'),
(77, 'loggedInUser', 'User', 0.00, '2026-03-31 05:34:03', '0000-00-00 00:00:00'),
(78, 'loggedInUser', 'User', 0.00, '2026-03-31 05:35:11', '0000-00-00 00:00:00'),
(79, 'loggedInUser', 'User', 0.00, '2026-03-31 05:35:13', '0000-00-00 00:00:00'),
(80, 'loggedInUser', 'User', 0.00, '2026-03-31 05:35:19', '0000-00-00 00:00:00'),
(81, 'loggedInUser', 'User', 0.00, '2026-03-31 05:35:33', '0000-00-00 00:00:00'),
(82, 'loggedInUser', 'User', 0.00, '2026-03-31 05:35:53', '0000-00-00 00:00:00'),
(83, 'loggedInUser', 'User', 0.00, '2026-03-31 05:35:55', '0000-00-00 00:00:00'),
(84, 'loggedInUser', 'User', 0.00, '2026-03-31 05:36:05', '0000-00-00 00:00:00'),
(85, 'loggedInUser', 'User', 0.00, '2026-03-31 05:37:27', '0000-00-00 00:00:00'),
(86, 'loggedInUser', 'User', 0.00, '2026-03-31 05:37:59', '0000-00-00 00:00:00'),
(87, 'loggedInUser', 'User', 0.00, '2026-03-31 05:38:08', '0000-00-00 00:00:00'),
(88, '16000', 'User', 0.00, '2026-03-31 05:38:17', '0000-00-00 00:00:00'),
(89, 'loggedInUser', 'User', 0.00, '2026-04-01 00:34:39', '0000-00-00 00:00:00'),
(90, 'loggedInUser', 'User', 0.00, '2026-04-01 00:34:43', '0000-00-00 00:00:00'),
(91, 'loggedInUser', 'User', 0.00, '2026-04-05 23:01:08', '0000-00-00 00:00:00'),
(92, 'loggedInUser', 'User', 0.00, '2026-04-05 23:01:14', '0000-00-00 00:00:00'),
(93, 'loggedInUser', 'User', 0.00, '2026-04-05 23:01:27', '0000-00-00 00:00:00'),
(94, 'loggedInUser', 'User', 0.00, '2026-04-05 23:01:40', '0000-00-00 00:00:00'),
(95, 'loggedInUser', 'User', 0.00, '2026-04-22 03:08:44', '0000-00-00 00:00:00'),
(96, 'loggedInUser', 'User', 0.00, '2026-04-22 03:25:24', '0000-00-00 00:00:00'),
(97, 'loggedInUser', 'User', 0.00, '2026-04-22 03:25:43', '0000-00-00 00:00:00'),
(98, 'loggedInUser', 'User', 0.00, '2026-04-22 03:58:37', '0000-00-00 00:00:00'),
(99, 'loggedInUser', 'User', 0.00, '2026-04-22 03:58:40', '0000-00-00 00:00:00'),
(100, 'loggedInUser', 'User', 0.00, '2026-04-22 03:58:41', '0000-00-00 00:00:00'),
(101, 'loggedInUser', 'User', 0.00, '2026-04-22 03:58:57', '0000-00-00 00:00:00'),
(102, 'loggedInUser', 'User', 0.00, '2026-04-22 03:59:01', '0000-00-00 00:00:00'),
(103, 'loggedInUser', 'User', 0.00, '2026-04-22 04:11:46', '0000-00-00 00:00:00'),
(104, 'loggedInUser', 'User', 0.00, '2026-04-22 04:24:34', '0000-00-00 00:00:00'),
(105, 'loggedInUser', 'User', 0.00, '2026-04-22 04:56:06', '0000-00-00 00:00:00'),
(106, 'loggedInUser', 'User', 0.00, '2026-04-22 04:56:40', '0000-00-00 00:00:00'),
(107, 'loggedInUser', 'User', 0.00, '2026-04-22 04:59:17', '0000-00-00 00:00:00'),
(108, 'loggedInUser', 'User', 0.00, '2026-04-22 05:00:52', '0000-00-00 00:00:00'),
(109, 'loggedInUser', 'User', 0.00, '2026-04-22 05:11:22', '0000-00-00 00:00:00'),
(110, 'loggedInUser', 'User', 0.00, '2026-04-22 05:11:35', '0000-00-00 00:00:00'),
(111, 'loggedInUser', 'User', 0.00, '2026-04-22 05:11:40', '0000-00-00 00:00:00'),
(112, 'loggedInUser', 'User', 0.00, '2026-04-22 05:11:43', '0000-00-00 00:00:00'),
(113, 'loggedInUser', 'User', 0.00, '2026-04-22 05:11:46', '0000-00-00 00:00:00'),
(114, 'loggedInUser', 'User', 0.00, '2026-04-22 05:11:48', '0000-00-00 00:00:00'),
(115, 'loggedInUser', 'User', 0.00, '2026-04-22 05:11:49', '0000-00-00 00:00:00'),
(116, 'loggedInUser', 'User', 0.00, '2026-04-22 05:11:50', '0000-00-00 00:00:00'),
(117, 'loggedInUser', 'User', 0.00, '2026-04-22 05:11:50', '0000-00-00 00:00:00'),
(118, 'loggedInUser', 'User', 0.00, '2026-04-22 05:11:52', '0000-00-00 00:00:00'),
(119, 'loggedInUser', 'User', 0.00, '2026-04-22 05:11:55', '0000-00-00 00:00:00'),
(120, 'loggedInUser', 'User', 0.00, '2026-04-22 05:17:39', '0000-00-00 00:00:00'),
(121, 'loggedInUser', 'User', 0.00, '2026-04-22 05:20:10', '0000-00-00 00:00:00'),
(122, 'loggedInUser', 'User', 0.00, '2026-04-22 05:20:32', '0000-00-00 00:00:00'),
(123, 'loggedInUser', 'User', 0.00, '2026-04-22 05:20:33', '0000-00-00 00:00:00'),
(124, 'loggedInUser', 'User', 0.00, '2026-04-22 05:29:23', '0000-00-00 00:00:00'),
(125, 'loggedInUser', 'User', 0.00, '2026-04-22 05:29:46', '0000-00-00 00:00:00'),
(126, 'loggedInUser', 'User', 0.00, '2026-04-22 05:29:54', '0000-00-00 00:00:00'),
(127, 'loggedInUser', 'User', 0.00, '2026-04-22 05:29:57', '0000-00-00 00:00:00'),
(128, 'loggedInUser', 'User', 0.00, '2026-04-22 05:30:16', '0000-00-00 00:00:00'),
(129, 'loggedInUser', 'User', 0.00, '2026-04-22 05:32:03', '0000-00-00 00:00:00'),
(130, 'loggedInUser', 'User', 0.00, '2026-04-22 05:32:08', '0000-00-00 00:00:00'),
(131, 'loggedInUser', 'User', 0.00, '2026-04-22 05:36:05', '0000-00-00 00:00:00'),
(132, '	18100', 'User', 560.00, '2026-04-22 05:38:05', '2026-04-22 05:43:01'),
(133, 'loggedInUser', 'User', 0.00, '2026-04-22 05:42:40', '0000-00-00 00:00:00'),
(134, 'loggedInUser', 'User', 0.00, '2026-04-22 05:42:45', '0000-00-00 00:00:00'),
(135, 'loggedInUser', 'User', 0.00, '2026-04-22 05:43:01', '0000-00-00 00:00:00'),
(136, 'loggedInUser', 'User', 0.00, '2026-04-22 05:43:03', '0000-00-00 00:00:00'),
(137, 'loggedInUser', 'User', 0.00, '2026-04-22 05:43:05', '0000-00-00 00:00:00'),
(138, 'loggedInUser', 'User', 0.00, '2026-04-22 05:44:20', '0000-00-00 00:00:00'),
(139, 'loggedInUser', 'User', 0.00, '2026-04-22 05:46:10', '0000-00-00 00:00:00'),
(140, 'loggedInUser', 'User', 0.00, '2026-04-22 05:51:13', '0000-00-00 00:00:00'),
(141, 'loggedInUser', 'User', 0.00, '2026-04-22 05:51:14', '0000-00-00 00:00:00'),
(142, 'loggedInUser', 'User', 0.00, '2026-04-22 05:53:19', '0000-00-00 00:00:00'),
(143, 'loggedInUser', 'User', 0.00, '2026-04-22 05:53:20', '0000-00-00 00:00:00'),
(144, 'loggedInUser', 'User', 0.00, '2026-04-22 05:55:15', '0000-00-00 00:00:00'),
(145, 'loggedInUser', 'User', 0.00, '2026-04-22 05:55:15', '0000-00-00 00:00:00'),
(146, 'loggedInUser', 'User', 0.00, '2026-04-22 05:55:18', '0000-00-00 00:00:00'),
(147, 'loggedInUser', 'User', 0.00, '2026-04-22 05:57:07', '0000-00-00 00:00:00'),
(148, 'loggedInUser', 'User', 0.00, '2026-04-22 22:00:17', '0000-00-00 00:00:00'),
(149, 'loggedInUser', 'User', 0.00, '2026-04-22 22:00:32', '0000-00-00 00:00:00'),
(150, 'loggedInUser', 'User', 0.00, '2026-04-22 22:00:32', '0000-00-00 00:00:00'),
(151, 'loggedInUser', 'User', 0.00, '2026-04-22 22:00:33', '0000-00-00 00:00:00'),
(152, 'loggedInUser', 'User', 0.00, '2026-04-22 22:00:34', '0000-00-00 00:00:00'),
(153, 'loggedInUser', 'User', 0.00, '2026-04-22 22:00:45', '0000-00-00 00:00:00'),
(154, 'loggedInUser', 'User', 0.00, '2026-04-22 22:00:50', '0000-00-00 00:00:00'),
(155, 'loggedInUser', 'User', 0.00, '2026-04-22 22:00:57', '0000-00-00 00:00:00'),
(156, 'loggedInUser', 'User', 0.00, '2026-04-22 22:00:59', '0000-00-00 00:00:00'),
(157, 'loggedInUser', 'User', 0.00, '2026-04-22 22:01:00', '0000-00-00 00:00:00'),
(158, 'loggedInUser', 'User', 0.00, '2026-04-22 22:01:01', '0000-00-00 00:00:00'),
(159, 'loggedInUser', 'User', 0.00, '2026-04-22 22:02:42', '0000-00-00 00:00:00'),
(160, 'loggedInUser', 'User', 0.00, '2026-04-22 22:03:29', '0000-00-00 00:00:00'),
(161, 'loggedInUser', 'User', 0.00, '2026-04-22 22:03:29', '0000-00-00 00:00:00'),
(162, 'loggedInUser', 'User', 0.00, '2026-04-22 22:03:30', '0000-00-00 00:00:00'),
(163, 'loggedInUser', 'User', 0.00, '2026-04-22 22:03:43', '0000-00-00 00:00:00'),
(164, 'loggedInUser', 'User', 0.00, '2026-04-22 22:03:50', '0000-00-00 00:00:00'),
(165, 'loggedInUser', 'User', 0.00, '2026-04-22 22:03:53', '0000-00-00 00:00:00'),
(166, 'loggedInUser', 'User', 0.00, '2026-04-22 22:03:53', '0000-00-00 00:00:00'),
(167, 'loggedInUser', 'User', 0.00, '2026-04-22 22:03:59', '0000-00-00 00:00:00'),
(168, 'loggedInUser', 'User', 0.00, '2026-04-22 22:08:27', '0000-00-00 00:00:00'),
(169, 'loggedInUser', 'User', 0.00, '2026-04-22 22:10:10', '0000-00-00 00:00:00'),
(170, 'loggedInUser', 'User', 0.00, '2026-04-22 22:51:39', '0000-00-00 00:00:00'),
(171, 'loggedInUser', 'User', 0.00, '2026-04-22 22:52:30', '0000-00-00 00:00:00'),
(172, 'loggedInUser', 'User', 0.00, '2026-04-22 22:52:41', '0000-00-00 00:00:00'),
(173, 'loggedInUser', 'User', 0.00, '2026-04-22 22:56:19', '0000-00-00 00:00:00'),
(174, 'loggedInUser', 'User', 0.00, '2026-04-22 22:56:22', '0000-00-00 00:00:00'),
(175, 'loggedInUser', 'User', 0.00, '2026-04-22 22:57:11', '0000-00-00 00:00:00'),
(176, 'loggedInUser', 'User', 0.00, '2026-04-22 22:59:35', '0000-00-00 00:00:00'),
(177, 'loggedInUser', 'User', 0.00, '2026-04-22 23:00:04', '0000-00-00 00:00:00'),
(178, 'loggedInUser', 'User', 0.00, '2026-04-22 23:02:17', '0000-00-00 00:00:00'),
(179, 'loggedInUser', 'User', 0.00, '2026-04-22 23:02:19', '0000-00-00 00:00:00'),
(180, 'loggedInUser', 'User', 0.00, '2026-04-22 23:02:20', '0000-00-00 00:00:00'),
(181, 'loggedInUser', 'User', 0.00, '2026-04-22 23:02:20', '0000-00-00 00:00:00'),
(182, 'loggedInUser', 'User', 0.00, '2026-04-22 23:02:23', '0000-00-00 00:00:00'),
(183, 'loggedInUser', 'User', 0.00, '2026-04-22 23:02:56', '0000-00-00 00:00:00'),
(184, 'loggedInUser', 'User', 0.00, '2026-04-22 23:03:03', '0000-00-00 00:00:00'),
(185, 'loggedInUser', 'User', 0.00, '2026-04-22 23:03:07', '0000-00-00 00:00:00'),
(186, 'loggedInUser', 'User', 0.00, '2026-04-22 23:03:18', '0000-00-00 00:00:00'),
(187, 'loggedInUser', 'User', 0.00, '2026-04-22 23:03:22', '0000-00-00 00:00:00'),
(188, 'loggedInUser', 'User', 0.00, '2026-04-22 23:03:36', '0000-00-00 00:00:00'),
(189, 'loggedInUser', 'User', 0.00, '2026-04-22 23:03:58', '0000-00-00 00:00:00'),
(190, 'loggedInUser', 'User', 0.00, '2026-04-22 23:08:19', '0000-00-00 00:00:00'),
(191, 'loggedInUser', 'User', 0.00, '2026-04-22 23:08:23', '0000-00-00 00:00:00'),
(192, 'loggedInUser', 'User', 0.00, '2026-04-22 23:08:27', '0000-00-00 00:00:00'),
(193, 'loggedInUser', 'User', 0.00, '2026-04-22 23:09:05', '0000-00-00 00:00:00'),
(194, '90000', 'User', 0.00, '2026-04-22 23:09:21', '2026-04-27 23:42:35'),
(195, 'loggedInUser', 'User', 0.00, '2026-04-22 23:11:14', '0000-00-00 00:00:00'),
(196, 'loggedInUser', 'User', 0.00, '2026-04-22 23:11:23', '0000-00-00 00:00:00'),
(197, 'loggedInUser', 'User', 0.00, '2026-04-22 23:11:27', '0000-00-00 00:00:00'),
(198, 'loggedInUser', 'User', 0.00, '2026-04-22 23:11:29', '0000-00-00 00:00:00'),
(199, 'loggedInUser', 'User', 0.00, '2026-04-22 23:11:41', '0000-00-00 00:00:00'),
(200, 'loggedInUser', 'User', 0.00, '2026-04-22 23:28:06', '0000-00-00 00:00:00'),
(201, 'loggedInUser', 'User', 0.00, '2026-04-22 23:37:13', '0000-00-00 00:00:00'),
(202, 'loggedInUser', 'User', 0.00, '2026-04-22 23:37:26', '0000-00-00 00:00:00'),
(203, 'loggedInUser', 'User', 0.00, '2026-04-22 23:40:35', '0000-00-00 00:00:00'),
(204, 'loggedInUser', 'User', 0.00, '2026-04-22 23:40:41', '0000-00-00 00:00:00'),
(205, 'loggedInUser', 'User', 0.00, '2026-04-22 23:41:00', '0000-00-00 00:00:00'),
(206, 'loggedInUser', 'User', 0.00, '2026-04-23 02:51:05', '0000-00-00 00:00:00'),
(207, 'loggedInUser', 'User', 0.00, '2026-04-23 02:51:09', '0000-00-00 00:00:00'),
(208, 'loggedInUser', 'User', 0.00, '2026-04-23 02:51:17', '0000-00-00 00:00:00'),
(209, 'loggedInUser', 'User', 0.00, '2026-04-23 02:54:20', '0000-00-00 00:00:00'),
(210, 'loggedInUser', 'User', 0.00, '2026-04-23 02:55:33', '0000-00-00 00:00:00'),
(211, 'loggedInUser', 'User', 0.00, '2026-04-23 03:12:15', '0000-00-00 00:00:00'),
(212, 'loggedInUser', 'User', 0.00, '2026-04-23 03:12:20', '0000-00-00 00:00:00'),
(213, 'loggedInUser', 'User', 0.00, '2026-04-23 03:12:26', '0000-00-00 00:00:00'),
(214, 'loggedInUser', 'User', 0.00, '2026-04-23 03:12:31', '0000-00-00 00:00:00'),
(215, 'loggedInUser', 'User', 0.00, '2026-04-23 03:12:37', '0000-00-00 00:00:00'),
(216, 'loggedInUser', 'User', 0.00, '2026-04-23 03:12:39', '0000-00-00 00:00:00'),
(217, 'loggedInUser', 'User', 0.00, '2026-04-23 03:12:39', '0000-00-00 00:00:00'),
(218, 'loggedInUser', 'User', 0.00, '2026-04-23 03:12:43', '0000-00-00 00:00:00'),
(219, 'loggedInUser', 'User', 0.00, '2026-04-23 03:13:21', '0000-00-00 00:00:00'),
(220, 'loggedInUser', 'User', 0.00, '2026-04-23 03:13:24', '0000-00-00 00:00:00'),
(221, 'loggedInUser', 'User', 0.00, '2026-04-23 03:13:28', '0000-00-00 00:00:00'),
(222, 'loggedInUser', 'User', 0.00, '2026-04-23 03:13:47', '0000-00-00 00:00:00'),
(223, 'loggedInUser', 'User', 0.00, '2026-04-23 03:14:04', '0000-00-00 00:00:00'),
(224, 'loggedInUser', 'User', 0.00, '2026-04-23 03:15:48', '0000-00-00 00:00:00'),
(225, 'loggedInUser', 'User', 0.00, '2026-04-23 03:26:42', '0000-00-00 00:00:00'),
(226, 'loggedInUser', 'User', 0.00, '2026-04-23 03:27:22', '0000-00-00 00:00:00'),
(227, 'loggedInUser', 'User', 0.00, '2026-04-23 03:27:28', '0000-00-00 00:00:00'),
(228, 'loggedInUser', 'User', 0.00, '2026-04-23 03:27:33', '0000-00-00 00:00:00'),
(229, 'loggedInUser', 'User', 0.00, '2026-04-23 03:27:38', '0000-00-00 00:00:00'),
(230, 'loggedInUser', 'User', 0.00, '2026-04-23 03:44:32', '0000-00-00 00:00:00'),
(231, 'loggedInUser', 'User', 0.00, '2026-04-23 03:45:01', '0000-00-00 00:00:00'),
(232, 'loggedInUser', 'User', 0.00, '2026-04-23 03:45:07', '0000-00-00 00:00:00'),
(233, 'loggedInUser', 'User', 0.00, '2026-04-23 03:45:58', '0000-00-00 00:00:00'),
(234, 'loggedInUser', 'User', 0.00, '2026-04-23 03:56:29', '0000-00-00 00:00:00'),
(235, 'loggedInUser', 'User', 0.00, '2026-04-23 03:58:10', '0000-00-00 00:00:00'),
(236, 'loggedInUser', 'User', 0.00, '2026-04-23 03:59:25', '0000-00-00 00:00:00'),
(237, 'loggedInUser', 'User', 0.00, '2026-04-23 03:59:37', '0000-00-00 00:00:00'),
(238, 'loggedInUser', 'User', 0.00, '2026-04-23 04:03:59', '0000-00-00 00:00:00'),
(239, 'loggedInUser', 'User', 0.00, '2026-04-23 04:05:16', '0000-00-00 00:00:00'),
(240, 'loggedInUser', 'User', 0.00, '2026-04-23 04:05:23', '0000-00-00 00:00:00'),
(241, 'loggedInUser', 'User', 0.00, '2026-04-23 04:05:27', '0000-00-00 00:00:00'),
(242, 'loggedInUser', 'User', 0.00, '2026-04-23 04:05:31', '0000-00-00 00:00:00'),
(243, 'loggedInUser', 'User', 0.00, '2026-04-23 04:06:06', '0000-00-00 00:00:00'),
(244, 'loggedInUser', 'User', 0.00, '2026-04-23 04:06:12', '0000-00-00 00:00:00'),
(245, 'loggedInUser', 'User', 0.00, '2026-04-23 04:06:17', '0000-00-00 00:00:00'),
(246, 'loggedInUser', 'User', 0.00, '2026-04-23 04:07:28', '0000-00-00 00:00:00'),
(247, 'loggedInUser', 'User', 0.00, '2026-04-23 04:12:41', '0000-00-00 00:00:00'),
(248, 'loggedInUser', 'User', 0.00, '2026-04-23 04:12:42', '0000-00-00 00:00:00'),
(249, 'loggedInUser', 'User', 0.00, '2026-04-23 04:14:18', '0000-00-00 00:00:00'),
(250, 'loggedInUser', 'User', 0.00, '2026-04-23 04:14:23', '0000-00-00 00:00:00'),
(251, 'loggedInUser', 'User', 0.00, '2026-04-23 04:37:14', '0000-00-00 00:00:00'),
(252, 'loggedInUser', 'User', 0.00, '2026-04-23 04:38:36', '0000-00-00 00:00:00'),
(253, 'loggedInUser', 'User', 0.00, '2026-04-23 04:38:52', '0000-00-00 00:00:00'),
(254, 'loggedInUser', 'User', 0.00, '2026-04-23 04:38:58', '0000-00-00 00:00:00'),
(255, 'loggedInUser', 'User', 0.00, '2026-04-23 04:41:51', '0000-00-00 00:00:00'),
(256, 'loggedInUser', 'User', 0.00, '2026-04-23 04:44:06', '0000-00-00 00:00:00'),
(257, 'loggedInUser', 'User', 0.00, '2026-04-23 04:44:10', '0000-00-00 00:00:00'),
(258, 'loggedInUser', 'User', 0.00, '2026-04-23 04:44:13', '0000-00-00 00:00:00'),
(259, 'loggedInUser', 'User', 0.00, '2026-04-23 04:44:16', '0000-00-00 00:00:00'),
(260, 'loggedInUser', 'User', 0.00, '2026-04-23 04:44:36', '0000-00-00 00:00:00'),
(261, 'loggedInUser', 'User', 0.00, '2026-04-23 04:44:45', '0000-00-00 00:00:00'),
(262, 'loggedInUser', 'User', 0.00, '2026-04-23 04:44:48', '0000-00-00 00:00:00'),
(263, 'loggedInUser', 'User', 0.00, '2026-04-23 04:45:20', '0000-00-00 00:00:00'),
(264, 'loggedInUser', 'User', 0.00, '2026-04-23 04:45:27', '0000-00-00 00:00:00'),
(265, 'loggedInUser', 'User', 0.00, '2026-04-23 04:45:33', '0000-00-00 00:00:00'),
(266, 'loggedInUser', 'User', 0.00, '2026-04-23 04:46:04', '0000-00-00 00:00:00'),
(267, 'loggedInUser', 'User', 0.00, '2026-04-23 04:47:17', '0000-00-00 00:00:00'),
(268, 'loggedInUser', 'User', 0.00, '2026-04-23 04:47:20', '0000-00-00 00:00:00'),
(269, 'loggedInUser', 'User', 0.00, '2026-04-23 04:47:24', '0000-00-00 00:00:00'),
(270, 'loggedInUser', 'User', 0.00, '2026-04-23 04:56:07', '0000-00-00 00:00:00'),
(271, 'loggedInUser', 'User', 0.00, '2026-04-23 04:56:16', '0000-00-00 00:00:00'),
(272, 'loggedInUser', 'User', 0.00, '2026-04-23 04:58:07', '0000-00-00 00:00:00'),
(273, 'loggedInUser', 'User', 0.00, '2026-04-23 05:03:50', '0000-00-00 00:00:00'),
(274, 'loggedInUser', 'User', 0.00, '2026-04-23 05:04:02', '0000-00-00 00:00:00'),
(275, 'loggedInUser', 'User', 0.00, '2026-04-23 05:17:15', '0000-00-00 00:00:00'),
(276, 'loggedInUser', 'User', 0.00, '2026-04-23 05:17:32', '0000-00-00 00:00:00'),
(277, 'loggedInUser', 'User', 0.00, '2026-04-23 05:19:11', '0000-00-00 00:00:00'),
(278, 'loggedInUser', 'User', 0.00, '2026-04-23 05:19:17', '0000-00-00 00:00:00'),
(279, 'loggedInUser', 'User', 0.00, '2026-04-23 05:19:38', '0000-00-00 00:00:00'),
(280, 'loggedInUser', 'User', 0.00, '2026-04-23 05:19:44', '0000-00-00 00:00:00'),
(281, 'loggedInUser', 'User', 0.00, '2026-04-23 05:19:52', '0000-00-00 00:00:00'),
(282, 'loggedInUser', 'User', 0.00, '2026-04-23 05:19:59', '0000-00-00 00:00:00'),
(283, 'loggedInUser', 'User', 0.00, '2026-04-23 05:20:39', '0000-00-00 00:00:00'),
(284, 'loggedInUser', 'User', 0.00, '2026-04-23 05:20:43', '0000-00-00 00:00:00'),
(285, 'loggedInUser', 'User', 0.00, '2026-04-23 05:20:48', '0000-00-00 00:00:00'),
(286, 'loggedInUser', 'User', 0.00, '2026-04-24 00:28:23', '0000-00-00 00:00:00'),
(287, 'loggedInUser', 'User', 0.00, '2026-04-24 00:34:35', '0000-00-00 00:00:00'),
(288, 'loggedInUser', 'User', 0.00, '2026-04-24 00:34:37', '0000-00-00 00:00:00'),
(289, 'loggedInUser', 'User', 0.00, '2026-04-24 00:34:41', '0000-00-00 00:00:00'),
(290, 'loggedInUser', 'User', 0.00, '2026-04-24 00:56:45', '0000-00-00 00:00:00'),
(291, 'loggedInUser', 'User', 0.00, '2026-04-24 00:56:47', '0000-00-00 00:00:00'),
(292, 'loggedInUser', 'User', 0.00, '2026-04-24 01:10:56', '0000-00-00 00:00:00'),
(293, 'loggedInUser', 'User', 0.00, '2026-04-24 22:01:24', '0000-00-00 00:00:00'),
(294, 'loggedInUser', 'User', 0.00, '2026-04-24 22:01:45', '0000-00-00 00:00:00'),
(295, 'loggedInUser', 'User', 0.00, '2026-04-24 22:01:50', '0000-00-00 00:00:00'),
(296, 'loggedInUser', 'User', 0.00, '2026-04-25 03:05:00', '0000-00-00 00:00:00'),
(297, 'loggedInUser', 'User', 0.00, '2026-04-25 03:05:06', '0000-00-00 00:00:00'),
(298, 'loggedInUser', 'User', 0.00, '2026-04-25 03:05:11', '0000-00-00 00:00:00'),
(299, 'loggedInUser', 'User', 0.00, '2026-04-25 03:05:15', '0000-00-00 00:00:00'),
(300, 'loggedInUser', 'User', 0.00, '2026-04-25 03:05:19', '0000-00-00 00:00:00'),
(301, 'loggedInUser', 'User', 0.00, '2026-04-25 03:07:17', '0000-00-00 00:00:00'),
(302, 'loggedInUser', 'User', 0.00, '2026-04-25 03:11:37', '0000-00-00 00:00:00'),
(303, 'loggedInUser', 'User', 0.00, '2026-04-25 03:11:44', '0000-00-00 00:00:00'),
(304, 'loggedInUser', 'User', 0.00, '2026-04-25 03:14:53', '0000-00-00 00:00:00'),
(305, 'loggedInUser', 'User', 0.00, '2026-04-25 03:14:54', '0000-00-00 00:00:00'),
(306, 'loggedInUser', 'User', 0.00, '2026-04-25 03:15:13', '0000-00-00 00:00:00'),
(307, 'loggedInUser', 'User', 0.00, '2026-04-25 03:16:24', '0000-00-00 00:00:00'),
(308, 'loggedInUser', 'User', 0.00, '2026-04-25 03:22:33', '0000-00-00 00:00:00'),
(309, 'loggedInUser', 'User', 0.00, '2026-04-25 03:28:03', '0000-00-00 00:00:00'),
(310, 'loggedInUser', 'User', 0.00, '2026-04-25 03:28:19', '0000-00-00 00:00:00'),
(311, 'loggedInUser', 'User', 0.00, '2026-04-25 03:28:33', '0000-00-00 00:00:00'),
(312, 'loggedInUser', 'User', 0.00, '2026-04-25 03:39:20', '0000-00-00 00:00:00'),
(313, 'loggedInUser', 'User', 0.00, '2026-04-25 03:40:04', '0000-00-00 00:00:00'),
(314, 'loggedInUser', 'User', 0.00, '2026-04-25 03:43:22', '0000-00-00 00:00:00'),
(315, 'loggedInUser', 'User', 0.00, '2026-04-25 03:50:46', '0000-00-00 00:00:00'),
(316, 'loggedInUser', 'User', 0.00, '2026-04-25 03:50:54', '0000-00-00 00:00:00'),
(317, 'loggedInUser', 'User', 0.00, '2026-04-25 03:51:36', '0000-00-00 00:00:00'),
(318, 'loggedInUser', 'User', 0.00, '2026-04-25 03:52:33', '0000-00-00 00:00:00'),
(319, 'loggedInUser', 'User', 0.00, '2026-04-25 03:52:34', '0000-00-00 00:00:00'),
(320, 'loggedInUser', 'User', 0.00, '2026-04-25 03:52:34', '0000-00-00 00:00:00'),
(321, 'loggedInUser', 'User', 0.00, '2026-04-25 04:24:44', '0000-00-00 00:00:00'),
(322, 'loggedInUser', 'User', 0.00, '2026-04-25 04:25:47', '0000-00-00 00:00:00'),
(323, 'loggedInUser', 'User', 0.00, '2026-04-25 04:25:52', '0000-00-00 00:00:00'),
(324, 'loggedInUser', 'User', 0.00, '2026-04-25 04:29:33', '0000-00-00 00:00:00'),
(325, 'loggedInUser', 'User', 0.00, '2026-04-25 04:29:50', '0000-00-00 00:00:00'),
(326, 'loggedInUser', 'User', 0.00, '2026-04-25 04:29:52', '0000-00-00 00:00:00'),
(327, 'loggedInUser', 'User', 0.00, '2026-04-25 04:31:03', '0000-00-00 00:00:00'),
(328, 'loggedInUser', 'User', 0.00, '2026-04-25 04:31:37', '0000-00-00 00:00:00'),
(329, 'loggedInUser', 'User', 0.00, '2026-04-25 04:37:14', '0000-00-00 00:00:00'),
(330, 'loggedInUser', 'User', 0.00, '2026-04-25 04:37:28', '0000-00-00 00:00:00'),
(331, 'loggedInUser', 'User', 0.00, '2026-04-25 04:38:04', '0000-00-00 00:00:00'),
(332, 'loggedInUser', 'User', 0.00, '2026-04-25 04:38:47', '0000-00-00 00:00:00'),
(333, 'loggedInUser', 'User', 0.00, '2026-04-25 04:39:37', '0000-00-00 00:00:00'),
(334, 'loggedInUser', 'User', 0.00, '2026-04-25 04:39:46', '0000-00-00 00:00:00'),
(335, 'loggedInUser', 'User', 0.00, '2026-04-25 04:51:01', '0000-00-00 00:00:00'),
(336, 'loggedInUser', 'User', 0.00, '2026-04-25 04:51:02', '0000-00-00 00:00:00'),
(337, 'loggedInUser', 'User', 0.00, '2026-04-25 05:12:19', '0000-00-00 00:00:00'),
(338, 'loggedInUser', 'User', 0.00, '2026-04-26 22:38:54', '0000-00-00 00:00:00'),
(339, 'loggedInUser', 'User', 0.00, '2026-04-26 22:39:18', '0000-00-00 00:00:00'),
(340, 'loggedInUser', 'User', 0.00, '2026-04-26 22:39:20', '0000-00-00 00:00:00'),
(341, 'loggedInUser', 'User', 0.00, '2026-04-26 22:39:25', '0000-00-00 00:00:00'),
(342, 'loggedInUser', 'User', 0.00, '2026-04-27 01:56:04', '0000-00-00 00:00:00'),
(343, 'loggedInUser', 'User', 0.00, '2026-04-27 01:56:08', '0000-00-00 00:00:00'),
(344, 'loggedInUser', 'User', 0.00, '2026-04-27 01:56:21', '0000-00-00 00:00:00'),
(345, 'loggedInUser', 'User', 0.00, '2026-04-27 01:56:28', '0000-00-00 00:00:00'),
(346, 'loggedInUser', 'User', 0.00, '2026-04-27 01:56:33', '0000-00-00 00:00:00'),
(347, 'loggedInUser', 'User', 0.00, '2026-04-27 01:56:37', '0000-00-00 00:00:00'),
(348, 'loggedInUser', 'User', 0.00, '2026-04-27 01:56:46', '0000-00-00 00:00:00'),
(349, 'loggedInUser', 'User', 0.00, '2026-04-27 01:57:16', '0000-00-00 00:00:00'),
(350, 'loggedInUser', 'User', 0.00, '2026-04-27 01:57:19', '0000-00-00 00:00:00'),
(351, 'loggedInUser', 'User', 0.00, '2026-04-27 01:59:02', '0000-00-00 00:00:00'),
(352, 'loggedInUser', 'User', 0.00, '2026-04-27 01:59:03', '0000-00-00 00:00:00'),
(353, 'loggedInUser', 'User', 0.00, '2026-04-27 01:59:04', '0000-00-00 00:00:00'),
(354, 'loggedInUser', 'User', 0.00, '2026-04-27 01:59:09', '0000-00-00 00:00:00'),
(355, 'loggedInUser', 'User', 0.00, '2026-04-27 01:59:58', '0000-00-00 00:00:00'),
(356, 'loggedInUser', 'User', 0.00, '2026-04-27 02:00:02', '0000-00-00 00:00:00'),
(357, 'loggedInUser', 'User', 0.00, '2026-04-27 02:07:52', '0000-00-00 00:00:00'),
(358, '14179', 'User', 15000.00, '2026-04-27 02:08:02', '2026-04-27 04:35:52'),
(359, 'loggedInUser', 'User', 0.00, '2026-04-27 02:10:18', '0000-00-00 00:00:00'),
(360, 'loggedInUser', 'User', 0.00, '2026-04-27 02:10:22', '0000-00-00 00:00:00'),
(361, 'loggedInUser', 'User', 0.00, '2026-04-27 02:10:27', '0000-00-00 00:00:00'),
(362, 'loggedInUser', 'User', 0.00, '2026-04-27 02:10:55', '0000-00-00 00:00:00'),
(363, 'loggedInUser', 'User', 0.00, '2026-04-27 02:13:16', '0000-00-00 00:00:00'),
(364, 'loggedInUser', 'User', 0.00, '2026-04-27 02:13:21', '0000-00-00 00:00:00'),
(365, 'loggedInUser', 'User', 0.00, '2026-04-27 02:13:39', '0000-00-00 00:00:00'),
(366, 'loggedInUser', 'User', 0.00, '2026-04-27 02:13:48', '0000-00-00 00:00:00'),
(367, 'loggedInUser', 'User', 0.00, '2026-04-27 02:23:14', '0000-00-00 00:00:00'),
(368, 'loggedInUser', 'User', 0.00, '2026-04-27 02:23:20', '0000-00-00 00:00:00'),
(369, 'loggedInUser', 'User', 0.00, '2026-04-27 02:23:25', '0000-00-00 00:00:00'),
(370, 'loggedInUser', 'User', 0.00, '2026-04-27 02:24:18', '0000-00-00 00:00:00'),
(371, 'loggedInUser', 'User', 0.00, '2026-04-27 02:24:39', '0000-00-00 00:00:00'),
(372, 'loggedInUser', 'User', 0.00, '2026-04-27 02:24:40', '0000-00-00 00:00:00'),
(373, 'loggedInUser', 'User', 0.00, '2026-04-27 02:24:42', '0000-00-00 00:00:00'),
(374, 'loggedInUser', 'User', 0.00, '2026-04-27 02:24:50', '0000-00-00 00:00:00'),
(375, 'loggedInUser', 'User', 0.00, '2026-04-27 02:24:52', '0000-00-00 00:00:00'),
(376, 'loggedInUser', 'User', 0.00, '2026-04-27 02:25:20', '0000-00-00 00:00:00'),
(377, 'loggedInUser', 'User', 0.00, '2026-04-27 02:25:23', '0000-00-00 00:00:00'),
(378, 'loggedInUser', 'User', 0.00, '2026-04-27 02:26:01', '0000-00-00 00:00:00'),
(379, 'loggedInUser', 'User', 0.00, '2026-04-27 02:26:05', '0000-00-00 00:00:00'),
(380, 'loggedInUser', 'User', 0.00, '2026-04-27 02:27:05', '0000-00-00 00:00:00'),
(381, 'loggedInUser', 'User', 0.00, '2026-04-27 02:27:26', '0000-00-00 00:00:00'),
(382, 'loggedInUser', 'User', 0.00, '2026-04-27 02:27:35', '0000-00-00 00:00:00'),
(383, 'loggedInUser', 'User', 0.00, '2026-04-27 02:28:06', '0000-00-00 00:00:00'),
(384, 'loggedInUser', 'User', 0.00, '2026-04-27 02:28:13', '0000-00-00 00:00:00'),
(385, 'loggedInUser', 'User', 0.00, '2026-04-27 02:28:36', '0000-00-00 00:00:00'),
(386, 'loggedInUser', 'User', 0.00, '2026-04-27 02:28:47', '0000-00-00 00:00:00'),
(387, 'loggedInUser', 'User', 0.00, '2026-04-27 02:29:23', '0000-00-00 00:00:00'),
(388, 'loggedInUser', 'User', 0.00, '2026-04-27 02:31:58', '0000-00-00 00:00:00'),
(389, 'loggedInUser', 'User', 0.00, '2026-04-27 02:32:03', '0000-00-00 00:00:00'),
(390, 'loggedInUser', 'User', 0.00, '2026-04-27 02:44:22', '0000-00-00 00:00:00'),
(391, 'loggedInUser', 'User', 0.00, '2026-04-27 02:52:10', '0000-00-00 00:00:00'),
(392, 'loggedInUser', 'User', 0.00, '2026-04-27 03:03:46', '0000-00-00 00:00:00'),
(393, 'loggedInUser', 'User', 0.00, '2026-04-27 03:07:08', '0000-00-00 00:00:00'),
(394, 'loggedInUser', 'User', 0.00, '2026-04-27 03:47:18', '0000-00-00 00:00:00'),
(395, 'loggedInUser', 'User', 0.00, '2026-04-27 03:53:36', '0000-00-00 00:00:00'),
(396, '14140', 'User', 0.00, '2026-04-27 03:53:46', '0000-00-00 00:00:00'),
(397, 'loggedInUser', 'User', 0.00, '2026-04-27 23:01:15', '0000-00-00 00:00:00'),
(398, 'loggedInUser', 'User', 0.00, '2026-04-27 23:01:23', '0000-00-00 00:00:00'),
(399, 'loggedInUser', 'User', 0.00, '2026-04-27 23:01:51', '0000-00-00 00:00:00'),
(400, 'loggedInUser', 'User', 0.00, '2026-04-27 23:01:52', '0000-00-00 00:00:00'),
(401, 'loggedInUser', 'User', 0.00, '2026-04-27 23:02:06', '0000-00-00 00:00:00'),
(402, 'loggedInUser', 'User', 0.00, '2026-04-27 23:02:20', '0000-00-00 00:00:00'),
(403, 'loggedInUser', 'User', 0.00, '2026-04-27 23:11:26', '0000-00-00 00:00:00'),
(404, 'loggedInUser', 'User', 0.00, '2026-04-27 23:11:56', '0000-00-00 00:00:00'),
(405, 'loggedInUser', 'User', 0.00, '2026-04-27 23:11:59', '0000-00-00 00:00:00'),
(406, 'loggedInUser', 'User', 0.00, '2026-04-27 23:12:01', '0000-00-00 00:00:00'),
(407, 'loggedInUser', 'User', 0.00, '2026-04-27 23:12:02', '0000-00-00 00:00:00'),
(408, 'loggedInUser', 'User', 0.00, '2026-04-27 23:12:04', '0000-00-00 00:00:00'),
(409, 'loggedInUser', 'User', 0.00, '2026-04-27 23:12:09', '0000-00-00 00:00:00'),
(410, 'loggedInUser', 'User', 0.00, '2026-04-27 23:13:10', '0000-00-00 00:00:00'),
(411, 'loggedInUser', 'User', 0.00, '2026-04-27 23:13:20', '0000-00-00 00:00:00'),
(412, 'loggedInUser', 'User', 0.00, '2026-04-30 01:57:59', '0000-00-00 00:00:00'),
(413, 'loggedInUser', 'User', 0.00, '2026-04-30 01:58:10', '0000-00-00 00:00:00'),
(414, 'loggedInUser', 'User', 0.00, '2026-04-30 01:58:15', '0000-00-00 00:00:00'),
(415, 'loggedInUser', 'User', 0.00, '2026-04-30 01:59:09', '0000-00-00 00:00:00'),
(416, 'loggedInUser', 'User', 0.00, '2026-04-30 01:59:16', '0000-00-00 00:00:00'),
(417, 'loggedInUser', 'User', 0.00, '2026-04-30 01:59:22', '0000-00-00 00:00:00'),
(418, 'loggedInUser', 'User', 0.00, '2026-04-30 01:59:29', '0000-00-00 00:00:00'),
(419, 'loggedInUser', 'User', 0.00, '2026-04-30 01:59:43', '0000-00-00 00:00:00'),
(420, 'loggedInUser', 'User', 0.00, '2026-04-30 02:00:20', '0000-00-00 00:00:00'),
(421, 'loggedInUser', 'User', 0.00, '2026-04-30 02:00:20', '0000-00-00 00:00:00'),
(422, 'loggedInUser', 'User', 0.00, '2026-04-30 02:00:24', '0000-00-00 00:00:00'),
(423, 'loggedInUser', 'User', 0.00, '2026-04-30 02:01:05', '0000-00-00 00:00:00'),
(424, 'loggedInUser', 'User', 0.00, '2026-04-30 02:02:02', '0000-00-00 00:00:00'),
(425, 'loggedInUser', 'User', 0.00, '2026-04-30 02:02:10', '0000-00-00 00:00:00'),
(426, 'loggedInUser', 'User', 0.00, '2026-04-30 02:05:59', '0000-00-00 00:00:00'),
(427, 'loggedInUser', 'User', 0.00, '2026-04-30 02:06:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wallet_add_money_requests`
--

CREATE TABLE `tbl_wallet_add_money_requests` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `utr_number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'UTR/Reference number from bank transfer',
  `payment_proof` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Screenshot/document filename',
  `note` text COLLATE utf8mb4_general_ci COMMENT 'Additional note from user',
  `actioned_by` int DEFAULT NULL,
  `actioned_at` datetime DEFAULT NULL,
  `status` enum('pending','approved','rejected') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  `verified_by` int DEFAULT NULL COMMENT 'Admin user ID who verified',
  `verified_at` datetime DEFAULT NULL,
  `admin_remarks` text COLLATE utf8mb4_general_ci COMMENT 'Admin comments/remarks',
  `requested_at` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `processed_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Stores add money requests pending admin verification';

--
-- Dumping data for table `tbl_wallet_add_money_requests`
--

INSERT INTO `tbl_wallet_add_money_requests` (`id`, `user_id`, `username`, `user_type`, `amount`, `utr_number`, `payment_proof`, `note`, `actioned_by`, `actioned_at`, `status`, `verified_by`, `verified_at`, `admin_remarks`, `requested_at`, `created_at`, `updated_at`, `processed_at`) VALUES
(1, 0, '	18100', 'User', 560.00, '001860003360', 'proof__1776861653.jpeg', '', 6, '2026-04-22 05:43:01', 'approved', NULL, NULL, 'first payment', '2026-04-22 18:10:53', '2026-04-22 05:40:53', '2026-04-22 05:43:01', NULL),
(2, 0, '90000', 'User', 6500.00, '316415163737', 'proof__1776924636.jpeg', 'FIRST PAYMENT', 6, '2026-04-22 23:11:27', 'approved', NULL, NULL, '', '2026-04-23 11:40:36', '2026-04-22 23:10:36', '2026-04-22 23:11:27', NULL),
(3, 0, '14179', 'User', 15000.00, '104677240671', 'proof__1777280992.jpeg', '', 6, '2026-04-27 04:35:52', 'approved', NULL, NULL, '', '2026-04-27 14:39:52', '2026-04-27 02:09:52', '2026-04-27 04:35:52', NULL),
(4, 0, '90000', 'User', 2000.00, '324979141959', 'proof__1777358218.jpeg', '', 7, '2026-04-27 23:37:33', 'approved', NULL, NULL, '', '2026-04-28 12:06:58', '2026-04-27 23:36:58', '2026-04-27 23:37:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wallet_transactions`
--

CREATE TABLE `tbl_wallet_transactions` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user',
  `transaction_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Unique transaction identifier',
  `type` enum('credit','debit') COLLATE utf8mb4_general_ci NOT NULL COMMENT 'credit=money added, debit=money spent',
  `amount` decimal(10,2) NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Transaction description',
  `reference_id` int DEFAULT NULL COMMENT 'Reference to add_money_request or other transaction',
  `reference_type` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'Type of reference (add_money, cibil_check, etc)',
  `balance_before` decimal(10,2) NOT NULL COMMENT 'Balance before transaction',
  `balance_after` decimal(10,2) NOT NULL COMMENT 'Balance after transaction',
  `status` enum('pending','completed','failed') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'completed',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Complete transaction history including credits and debits';

--
-- Dumping data for table `tbl_wallet_transactions`
--

INSERT INTO `tbl_wallet_transactions` (`id`, `user_id`, `username`, `user_type`, `transaction_id`, `type`, `amount`, `description`, `reference_id`, `reference_type`, `balance_before`, `balance_after`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, '	18100', 'User', 'APR1776861781191', 'credit', 560.00, 'Wallet Top-up Approved | UTR: 001860003360 | Remarks: first payment', NULL, NULL, 0.00, 560.00, 'completed', '2026-04-22 05:43:01', NULL),
(2, 0, '90000', 'User', 'APR1776924687906', 'credit', 6500.00, 'Wallet Top-up Approved | UTR: 316415163737', NULL, NULL, 0.00, 6500.00, 'completed', '2026-04-22 23:11:27', NULL),
(3, 0, '14179', 'User', 'APR1777289752660', 'credit', 15000.00, 'Wallet Top-up Approved | UTR: 104677240671', NULL, NULL, 0.00, 15000.00, 'completed', '2026-04-27 04:35:52', NULL),
(4, 0, '90000', 'User', 'APR1777358253118', 'credit', 2000.00, 'Wallet Top-up Approved | UTR: 324979141959', NULL, NULL, 6500.00, 8500.00, 'completed', '2026-04-27 23:37:33', NULL),
(5, 0, '90000', 'User', 'DED17773585552193', 'debit', 8500.00, 'Admin deducted money - Reason: Income Tax Return (ITR) filing financial years 2024â€“25 and 2025â€“26 fees.', NULL, NULL, 8500.00, 0.00, 'completed', '2026-04-27 23:42:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_website_blog`
--

CREATE TABLE `tbl_website_blog` (
  `id` int NOT NULL,
  `blog_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `blog_category` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `blog_content` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `featured_image` text COLLATE utf8mb4_general_ci,
  `gallery_images` text COLLATE utf8mb4_general_ci,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `author_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `publish_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `views_count` int DEFAULT '0',
  `avg_rating` decimal(2,1) DEFAULT '0.0',
  `total_ratings` int DEFAULT '0',
  `reviews_json` longtext COLLATE utf8mb4_general_ci,
  `is_featured` tinyint DEFAULT '0',
  `status` tinyint DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_website_blog`
--

INSERT INTO `tbl_website_blog` (`id`, `blog_title`, `slug`, `blog_category`, `blog_content`, `featured_image`, `gallery_images`, `meta_description`, `meta_keywords`, `author_name`, `publish_date`, `views_count`, `avg_rating`, `total_ratings`, `reviews_json`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Fast, Secure, and Reliable Money Transfer Services with K-Seva Money Transfer', 'fast-secure-and-reliable-money-transfer-services-with-k-seva-money-transfer', 'blog', '<h2><strong style=\"background-color: rgb(255, 255, 255); color: rgb(255, 0, 0);\">Fast, Secure, and Reliable Money Transfer Services with K-Seva Money Transfer</strong></h2><p>In today’s<span style=\"color: rgb(0, 0, 0);\"> digital world</span>, money transfer services have become an essential part of daily life. Whether it is sending funds to family members, making business payments, or supporting loved ones in emergencies, people expect transactions to be quick, secure, and hassle-free. Digital financial platforms have transformed the way money moves, making transfers easier than ever before.</p><p>K-Seva offers a reliable and convenient money transfer solution designed to meet the growing financial needs of individuals, retailers, and businesses. With modern banking technology and user-friendly services, customers can transfer funds instantly to bank accounts across India without complicated procedures.</p><p>Money transfer services have become especially valuable in rural and semi-urban areas where access to traditional banking facilities may be limited. Platforms that provide Domestic Money Transfer (DMT) services help bridge the financial gap and bring banking services closer to people. Many digital service providers now focus on instant transfers, secure processing, and easy accessibility for customers.</p><h2><strong style=\"color: rgb(0, 128, 0);\">What is Domestic Money Transfer (DMT)?</strong></h2><ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Domestic Money Transfer, commonly known as DMT, is a service that allows individuals to send money from one bank account to another quickly and securely. This service is particularly beneficial for migrant workers, small businesses, shop owners, and families who regularly send funds across different locations in India.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>With DMT services, customers do not need to visit bank branches or complete lengthy paperwork. Instead, transactions can be completed digitally within minutes. Modern money transfer systems use technologies like IMPS and NEFT to ensure faster processing and real-time transactions. Several financial platforms in India provide secure and efficient DMT solutions to simplify banking services for users.</li></ol><p> </p><h2><strong style=\"color: rgb(0, 128, 0);\">Why Money Transfer Services Are Important</strong></h2><ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Money transfer services play a vital role in supporting financial inclusion and digital banking growth. They allow users to send money anytime and from anywhere, making financial transactions more convenient for people across the country.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>For many families, money transfer services are a lifeline during emergencies. Individuals working in cities often send money to their hometowns for household expenses, education fees, healthcare, and daily needs. Businesses also rely on fast transfer services to pay vendors, employees, and suppliers without delays.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Digital financial platforms help reduce dependency on cash transactions while improving transaction speed and transparency. These services also support India’s growing digital economy by encouraging secure online banking practices.</li></ol><h2><strong style=\"color: rgb(0, 128, 0);\">Key Features of K-Seva Money Transfer Services</strong></h2><h3><strong style=\"color: rgb(255, 69, 0);\">Instant Fund Transfers</strong></h3><p>One of the biggest advantages of using K-Seva money transfer services is the ability to transfer funds instantly. Customers can send money directly to bank accounts across India in a matter of minutes. Fast processing ensures that recipients receive funds quickly, especially during urgent situations.</p><h3><strong style=\"color: rgb(255, 69, 0);\">Secure Transactions</strong></h3><p>Security is one of the most important aspects of any financial transaction. K-Seva focuses on safe and protected money transfer services by using secure systems and encrypted transaction processes. Customers can transfer funds confidently without worrying about unauthorized access or fraud.</p><p>Many modern money transfer platforms emphasize transaction safety through advanced verification and secure processing technologies.</p><p> </p><h3><strong style=\"color: rgb(255, 69, 0);\">Easy and User-Friendly Process</strong></h3><p>Digital money transfer services are designed to make banking simple for everyone. K-Seva offers a smooth and convenient transfer process that helps customers complete transactions without technical difficulties. Even users with limited digital knowledge can easily use the service.</p><p> </p><h3><strong style=\"color: rgb(255, 69, 0);\">Access Across India</strong></h3><p>Money transfer services are beneficial because they connect users with banking facilities nationwide. Customers can send funds to multiple banks and locations across the country, making financial support more accessible for families and businesses.</p><p> </p><h3><strong style=\"color: rgb(255, 69, 0);\">Support for Retailers and Agents</strong></h3><p>Digital financial platforms often provide opportunities for retailers and local service providers to offer money transfer services in their communities. This helps shop owners and agents generate additional income while serving customers in nearby areas.</p><h2><strong style=\"color: rgb(0, 128, 0);\">Benefits of Using Online Money Transfer Services</strong></h2><h3><strong style=\"color: rgb(255, 69, 0);\">Saves Time</strong></h3><p>Traditional banking processes can take hours or even days for transfers to complete. Online money transfer services save valuable time by enabling instant or same-day transfers without visiting a bank branch.</p><p> </p><h3><strong style=\"color: rgb(255, 69, 0);\">Convenient Banking Experience</strong></h3><p>Users can perform transactions from their nearby service center or digital platform without carrying large amounts of cash. This improves convenience and reduces dependency on physical banking services.</p><p> </p><h3><strong style=\"color: rgb(255, 69, 0);\">Financial Inclusion</strong></h3><p>Digital transfer services help bring banking facilities to rural and underserved areas. People who may not have easy access to banks can still send and receive money efficiently through nearby service providers.</p><p> </p><h3><strong style=\"color: rgb(255, 69, 0);\">Reduced Cash Handling</strong></h3><p>Online transfers reduce the need for cash-based transactions, lowering the risk associated with carrying physical money. Digital payments also improve transparency and transaction tracking.</p><p> </p><h3><strong style=\"color: rgb(255, 69, 0);\">Better Support During Emergencies</strong></h3><p>In medical emergencies, family crises, or urgent business situations, instant money transfer services provide quick financial assistance without delays.</p><p> </p><h3><strong style=\"color: rgb(0, 128, 0);\">How K-Seva Supports Digital Financial Services</strong></h3><p>The demand for digital financial services continues to grow rapidly across India. Platforms like K-Seva contribute to this growth by offering multiple financial and utility services under one platform. Along with money transfer services, many digital platforms now support AEPS, bill payments, mobile recharges, travel bookings, and banking solutions.</p><p> </p><p>By integrating modern financial technologies, K-Seva helps customers complete transactions securely and efficiently. The platform aims to simplify digital banking while supporting retailers and customers with reliable services.</p><p> </p><h3><strong style=\"color: rgb(0, 128, 0);\">Safety Tips for Money Transfers</strong></h3><ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>While online money transfer services are highly convenient, customers should always follow safe transaction practices:</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Verify recipient account details before sending money.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Avoid sharing OTPs or banking passwords with anyone.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Use trusted service providers for financial transactions.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Keep transaction receipts and confirmation messages safely.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Contact customer support immediately if any issue occurs.</li></ol><p> </p><p>Following these precautions helps users perform secure and smooth transactions.</p><p> </p><h3><strong style=\"color: rgb(0, 128, 0);\">The Future of Digital Money Transfers</strong></h3><p>India’s digital banking sector is expanding rapidly with the rise of fintech platforms and online financial services. Instant payment systems, mobile banking, and secure transfer technologies are making financial transactions faster and more accessible for everyone.</p><p> </p><p>Money transfer services are expected to become even more advanced with improved security, faster processing, and broader accessibility. Financial platforms are consistently enhancing customer experience by promoting convenience, expanding digital financial access, and introducing advanced banking solutions to meet changing user expectations. Many modern remittance and financial service providers are also introducing additional digital benefits and customer-focused financial solutions.</p><p> </p><h3><strong style=\"color: rgb(0, 128, 0);\">Conclusion</strong></h3><p>Money transfer services have become an important part of modern financial life. Whether for personal use or business needs, customers require a secure, fast, and convenient way to send money across locations. K-Seva Money Transfer Services</p><p>provide a dependable platform for seamless financial transactions across India.</p><p> </p><p>With instant processing, secure systems, and user-friendly services, K-Seva helps individuals and businesses manage money transfers with ease. As digital banking continues to grow, reliable financial platforms will play a major role in making banking services more accessible and efficient for everyone.</p><p> </p>', '20260514160014_featured_1efcf86d-9879-4ea3-907a-32712d17701f.png', '', 'Experience fast, secure, and hassle-free money transfer services with K-Seva. Send money instantly across India with reliable digital banking.', 'Money Transfer Services, Domestic Money Transfer, DMT Services, Online Money Transfer, Instant Fund Transfer, Secure Money Transfer, Digital Banking Services, K-Seva Money Transfer, Banking Solutions India, Fast Money Transfer, Financial Services, Online Banking Platform, Digital Payment Solutions, AEPS Services, Retailer Banking Services', 'krajeshk', '2026-05-14 15:26:00', 28, 0.0, 0, NULL, 1, 1, '2026-05-14 15:31:13', '2026-06-03 20:02:30'),
(3, 'Financial Services: A Smart Way to Manage Your Financial Future', 'financial-services-a-smart-way-to-manage-your-financial-future', 'blog', '<h1><span style=\"color: rgb(220, 20, 60);\">Financial Services: A Smart Way to Manage Your Financial Future</span></h1><p>In today’s fast-moving world, financial planning has become more important than ever. From managing daily expenses to achieving long-term goals, financial services play a crucial role in helping individuals and businesses maintain financial stability. Whether it is loans, insurance, investments, tax planning, or wealth management, professional financial services provide the support needed to make informed decisions and secure a better future.</p><p>Modern financial service platforms are transforming the way people handle money by offering faster, more transparent, and technology-driven solutions. Many companies now provide digital financial assistance, helping customers access services conveniently from anywhere. Platforms offering investment guidance, insurance solutions, and loan assistance are becoming increasingly popular among people looking for reliable financial support. </p><h2><span style=\"color: rgb(50, 205, 50);\">What Are Financial Services?</span></h2><p>Financial services refer to a broad range of services that help individuals and businesses manage their money efficiently. These services are typically offered by banks, financial institutions, insurance companies, and financial consultants.</p><p>Common financial services include:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Personal Loans</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Business Loans</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Insurance Services</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Investment Planning</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Tax Consultation</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Mutual Fund Investments</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Retirement Planning</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Wealth Management</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Digital Payment Solutions</li></ol><p>These services are designed to improve financial security, simplify money management, and help people achieve their financial objectives.</p><h2><span style=\"color: rgb(50, 205, 50);\">Importance of Financial Services</span></h2><p>Financial services are essential because they help individuals make better financial decisions while reducing financial risks. Proper financial planning allows people to manage emergencies, invest wisely, and build long-term wealth.</p><h3><span style=\"color: rgb(138, 43, 226);\">Better Financial Planning</span></h3><p>Professional financial guidance helps customers create effective budgets, savings plans, and investment strategies according to their goals.</p><h3><span style=\"color: rgb(138, 43, 226);\">Easy Access to Credit</span></h3><p>Loans and credit services help individuals and businesses fulfill important needs such as buying a home, purchasing a vehicle, funding education, or expanding a business.</p><h3><span style=\"color: rgb(138, 43, 226);\">Wealth Creation Opportunities</span></h3><p>Investment services such as mutual funds, fixed deposits, and retirement plans help customers grow their wealth gradually over time.</p><h3><span style=\"color: rgb(138, 43, 226);\">Risk Protection</span></h3><p>Insurance services provide financial protection against unexpected situations such as medical emergencies, accidents, or property damage.</p><h3><span style=\"color: rgb(138, 43, 226);\">Digital Convenience</span></h3><p>Modern financial service providers now offer online applications, quick approvals, and digital account management, making financial services more accessible and efficient. </p><h2><span style=\"color: rgb(50, 205, 50);\">Types of Financial Services</span></h2><h3><span style=\"color: rgb(138, 43, 226);\">Loan Services</span></h3><p>Financial institutions provide different types of loans to meet various customer requirements. Common loan categories include personal loans, home loans, business loans, education loans, and vehicle loans.</p><h3><span style=\"color: rgb(138, 43, 226);\">Insurance Services</span></h3><p>Insurance plans protect individuals and families from financial losses caused by medical emergencies, accidents, or unforeseen events.</p><h3><span style=\"color: rgb(138, 43, 226);\">Investment Services</span></h3><p>Investment planning helps individuals build wealth and achieve future financial goals through mutual funds, stocks, bonds, and retirement schemes.</p><h3><span style=\"color: rgb(138, 43, 226);\">Tax and Financial Advisory</span></h3><p>Financial advisors help customers manage taxes efficiently while improving overall financial planning.</p><h3><span style=\"color: rgb(138, 43, 226);\">Digital Banking and Payment Services</span></h3><p>Digital banking solutions have simplified financial transactions by enabling online transfers, mobile banking, UPI payments, and bill payments. </p><h2><span style=\"color: rgb(50, 205, 50);\">Benefits of Choosing Professional Financial Services</span></h2><h3><span style=\"color: rgb(138, 43, 226);\">Expert Guidance</span></h3><p>Financial experts analyze your financial situation and recommend suitable solutions based on your goals and income.</p><h3><span style=\"color: rgb(138, 43, 226);\">Time-Saving Process</span></h3><p>Online financial services reduce paperwork and speed up loan approvals, investment management, and payment processing.</p><h3><span style=\"color: rgb(138, 43, 226);\">Customized Financial Solutions</span></h3><p>Many financial service providers offer personalized plans tailored to customer needs and financial capacity.</p><h3><span style=\"color: rgb(138, 43, 226);\">Improved Financial Discipline</span></h3><p>Professional financial planning encourages better spending habits, regular savings, and smart investment decisions.</p><h3><span style=\"color: rgb(138, 43, 226);\">Long-Term Security</span></h3><p>Well-managed financial services help customers prepare for retirement, emergencies, and future responsibilities.</p><h2><span style=\"color: rgb(50, 205, 50);\">Role of Technology in Financial Services</span></h2><p>Technology has significantly improved the financial sector by introducing digital applications, automated services, and faster transaction systems. Customers can now compare financial products, apply for loans, monitor investments, and pay bills online within minutes.</p><p>Digital financial platforms are especially helping rural and semi-urban communities gain access to banking and financial services through online systems and mobile applications. </p><h2><span style=\"color: rgb(50, 205, 50);\">Tips for Choosing the Right Financial Service Provider</span></h2><h3><span style=\"color: rgb(138, 43, 226);\">Check Credibility</span></h3><p>Choose a financial service provider with a strong reputation, transparent policies, and positive customer feedback.</p><h3><span style=\"color: rgb(138, 43, 226);\">Compare Services</span></h3><p>Review multiple service providers to compare interest rates, charges, investment returns, and service quality.</p><h3><span style=\"color: rgb(138, 43, 226);\">Understand Terms and Conditions</span></h3><p>Always read the terms carefully before applying for loans, insurance, or investment products.</p><h3><span style=\"color: rgb(138, 43, 226);\">Focus on Customer Support</span></h3><p>Reliable customer service ensures quick assistance whenever financial issues or queries arise.</p><h3><span style=\"color: rgb(138, 43, 226);\">Prioritize Security</span></h3><p>Choose platforms with secure digital systems to protect your personal and financial information.</p><h2><span style=\"color: rgb(50, 205, 50);\">Conclusion</span></h2><p>Financial services have become an essential part of modern life, helping individuals and businesses achieve financial stability, manage risks, and plan for the future. From loans and insurance to investments and digital banking, these services provide valuable support for smart financial management. </p><p>As technology continues to reshape the financial industry, customers now have access to faster, more convenient, and more personalized financial solutions. Choosing the right financial service provider can help you build financial confidence, achieve long-term goals, and create a secure financial future. </p>', '20260515154826_featured_Untitled-design-39.png', '', 'Explore reliable financial services including loans, insurance, investments, and savings solutions designed to support your financial growth and security.', 'financial services, loan services, insurance solutions, investment planning, financial growth, wealth management, savings plans, tax planning, digital financial services, personal finance, business finance, secure financial future, online financial solutions, financial advisory services', 'krajeshk', '2026-05-15 15:29:00', 20, 0.0, 0, NULL, 1, 1, '2026-05-15 15:48:26', '2026-06-08 11:36:03'),
(4, 'NSDL Payment Bank BC – A Smart Way to Deliver Digital Banking Services', 'nsdl-payment-bank-bc-a-smart-way-to-deliver-digital-banking-services', 'blog', '<h1><span style=\"color: rgb(255, 0, 0);\">NSDL Payment Bank BC – A Smart Way to Deliver Digital Banking Services</span></h1><p>Digital banking has transformed the way people manage money, transfer funds, and access financial services. However, many rural and semi-urban areas still require easy access to banking support. This is where the Business Correspondent (BC) model of <a href=\"https://www.nsdlbank.co.in/?utm_source=chatgpt.com\" rel=\"noopener noreferrer\" target=\"_blank\">NSDL Payments Bank</a> plays an important role.</p><p>An NSDL Payment Bank BC acts as a banking service provider who helps customers perform essential financial transactions without visiting a physical bank branch. Through a BC point, customers can access services such as account opening, cash deposits, withdrawals, money transfers, bill payments, AEPS services, and more. </p><h2><span style=\"color: rgb(0, 100, 0);\">What Is NSDL Payment Bank BC?</span></h2><p>NSDL Payment Bank BC, also known as a Customer Service Point (CSP), is a banking outlet operated by an authorized individual or retailer on behalf of the bank. The main objective is to provide convenient banking facilities in locations where traditional banking infrastructure may be limited. </p><p>The BC model supports financial inclusion by helping people access secure and fast digital banking services closer to their homes. Small business owners, shopkeepers, entrepreneurs, and service providers can become banking correspondents and expand their income opportunities.</p><h2><span style=\"color: rgb(0, 100, 0);\">Services Offered Through NSDL Payment Bank BC</span></h2><p>An NSDL Payment Bank BC center can provide multiple banking and financial services to customers, including:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Savings account opening</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Cash deposit and withdrawal services</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Domestic money transfer</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Balance enquiry and mini statement</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>AEPS transactions</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Utility bill payments</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Mobile and DTH recharge</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>UPI and digital payment support</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Debit card related assistance</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Government scheme disbursement support</li></ol><p>These services help customers complete daily financial activities quickly and conveniently. </p><h2><span style=\"color: rgb(0, 100, 0);\">Benefits of Becoming an NSDL Payment Bank BC</span></h2><h3><span style=\"color: rgb(75, 0, 130);\">Additional Income Opportunity</span></h3><p>Operating a BC outlet allows retailers and entrepreneurs to earn commissions on banking transactions and financial services.</p><h3><span style=\"color: rgb(75, 0, 130);\">Increased Customer Footfall</span></h3><p>A BC center attracts local customers who need banking support, helping shop owners improve business visibility and customer engagement.</p><h3><span style=\"color: rgb(75, 0, 130);\">Low Investment Business</span></h3><p>Starting a BC point generally requires basic infrastructure such as internet connectivity, a computer or laptop, biometric device, and printer. </p><h3><span style=\"color: rgb(75, 0, 130);\">Support for Digital India</span></h3><p>BC agents contribute to financial awareness and digital banking adoption in underserved communities.</p><h3><span style=\"color: rgb(75, 0, 130);\">Easy Banking Access for Customers</span></h3><p>Customers can perform essential banking tasks without traveling long distances to a bank branch.</p><h2><span style=\"color: rgb(0, 100, 0);\">Eligibility to Become an NSDL Payment Bank BC</span></h2><p>Individuals interested in becoming a BC partner are generally expected to meet certain basic requirements, such as:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Minimum age of 18 years</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Basic educational qualification</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Valid identity and address proof</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Small office or retail space</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Computer or laptop with internet connection</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Biometric device and printer</li></ol><p>Requirements may vary depending on the onboarding process and service provider guidelines. </p><h2><span style=\"color: rgb(0, 100, 0);\">Documents Commonly Required</span></h2><p>Applicants may need documents such as:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Aadhaar Card</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>PAN Card</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Passport-size photographs</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Address proof</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Educational certificates</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Shop or office proof</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Bank account details</li></ol><p>Submitting accurate information can help speed up the verification and approval process.</p><h2><span style=\"color: rgb(0, 100, 0);\">Why Digital Banking BC Services Are Growing</span></h2><p>India’s digital banking ecosystem is expanding rapidly due to increasing smartphone usage, online transactions, and government-backed digital initiatives. Payment bank BC outlets help bridge the gap between technology and accessibility by offering human-assisted banking support in local areas.</p><p>Many customers prefer nearby banking points for quick transactions, especially in semi-urban and rural regions where physical bank branches may not be easily accessible.</p><h2><span style=\"color: rgb(0, 100, 0);\">Security and Customer Awareness</span></h2><p>Customers should always use authorized banking centers and avoid sharing confidential information such as OTPs, UPI PINs, or ATM PINs with anyone. NSDL Payments Bank also advises customers to stay alert against fraud and unauthorized banking activities. </p><h2><span style=\"color: rgb(0, 100, 0);\">Conclusion</span></h2><p>NSDL Payment Bank BC services are helping expand digital banking access across India while creating new earning opportunities for local entrepreneurs. With growing demand for convenient financial services, becoming a BC partner can be a valuable business opportunity for individuals looking to serve their communities and participate in the digital banking ecosystem.</p><p>Whether it is account opening, fund transfers, AEPS transactions, or utility payments, NSDL Payment Bank BC centers continue to support customers with simple, accessible, and technology-driven banking solutions.</p>', '20260516205531_featured_Untitled-design-40.png', '', 'Explore NSDL Payment Bank BC services, benefits, eligibility, and digital banking opportunities for retailers and entrepreneurs across India.', 'NSDL Payment Bank BC, NSDL BC services, NSDL CSP, Payment Bank BC, digital banking services, AEPS services, money transfer services, banking correspondent, NSDL Payments Bank, CSP provider India, online banking services, financial inclusion, micro banking services, retail banking point, digital payment services, customer service point, banking franchise India, rural banking services, banking business opportunity, NSDL banking partner', 'krajeshk', '2026-05-16 20:48:00', 17, 0.0, 0, NULL, 0, 1, '2026-05-16 20:55:31', '2026-06-09 07:22:10'),
(5, 'Axis Bank BC Service – A Smart Banking Opportunity for Rural and Urban Entrepreneurs', 'axis-bank-bc-service-a-smart-banking-opportunity-for-rural-and-urban-entrepreneurs', 'blog', '<h1><span style=\"color: rgb(75, 0, 130);\">Axis Bank BC Service – A Smart Banking Opportunity for Rural and Urban Entrepreneurs</span></h1><p>Banking services in India are rapidly expanding beyond traditional bank branches, and the Business Correspondent (BC) model has become an important part of financial inclusion. The Axis Bank BC service allows individuals, retailers, and entrepreneurs to provide essential banking facilities to customers in underserved and remote areas. Through this model, local agents can help people access banking services conveniently while also earning commissions and incentives.</p><h2><span style=\"color: rgb(127, 0, 255);\">What is Axis Bank BC?</span></h2><p>Axis Bank BC (Business Correspondent) is a banking partnership model where authorized agents offer basic banking services on behalf of Axis Bank. BC agents act as a bridge between the bank and customers who may not have easy access to physical branches.</p><p>This service supports digital banking growth and helps deliver financial services to rural, semi-urban, and urban populations efficiently. Axis Bank offers multiple digital payment and banking solutions as part of its financial ecosystem. </p><h2><span style=\"color: rgb(138, 43, 226);\">Services Offered by Axis Bank BC</span></h2><p>Axis Bank BC agents can provide a wide range of banking and financial services, including:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Cash deposit and withdrawal</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Money transfer services</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Account opening assistance</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Mini statements and balance enquiry</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Aadhaar-enabled payment services</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Bill payments and recharge services</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Loan and insurance assistance</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Micro ATM services</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>PAN card and financial support services</li></ol><p>These services help customers complete everyday banking tasks without visiting a bank branch.</p><h2><span style=\"color: rgb(138, 43, 226);\">Benefits of Becoming an Axis Bank BC</span></h2><h3><span style=\"color: rgb(0, 139, 139);\">1. Additional Income Opportunity</span></h3><p>The BC model offers entrepreneurs and shop owners a chance to generate regular income through commissions on banking transactions and customer services.</p><h3><span style=\"color: rgb(0, 139, 139);\">2. Low Investment Business</span></h3><p>Starting a BC outlet usually requires limited investment compared to opening a full banking branch, making it suitable for small business owners.</p><h3><span style=\"color: rgb(0, 139, 139);\">3. Growing Demand for Digital Banking</span></h3><p>As digital transactions increase across India, BC agents play a vital role in helping customers use banking services safely and conveniently.</p><h3><span style=\"color: rgb(0, 139, 139);\">4. Rural Banking Support</span></h3><p>Business Correspondents help improve banking accessibility in villages and remote areas where traditional branches may not be easily available.</p><h3><span style=\"color: rgb(0, 139, 139);\">5. Customer Trust</span></h3><p>Partnering with a recognized bank like Axis Bank helps agents build credibility and customer confidence in their local communities.</p><h2><span style=\"color: rgb(127, 0, 255);\">Eligibility for Axis Bank BC Registration</span></h2><p>Eligibility criteria may vary depending on the service provider or aggregator, but commonly accepted applicants include:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Retail shop owners</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Small business operators</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>CSC operators</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Entrepreneurs</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Financial service providers</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Individuals with basic computer knowledge</li></ol><p>Applicants generally need valid identity proof, address proof, bank account details, and business-related documents.</p><h2><span style=\"color: rgb(127, 0, 255);\">Documents Required</span></h2><p>To apply for an Axis Bank BC partnership, applicants may need:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Aadhaar card</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>PAN card</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Passport-size photographs</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Address proof</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Shop or business proof</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Bank account details</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Mobile number and email ID</li></ol><p>Proper documentation can help speed up verification and approval processes.</p><h2><span style=\"color: rgb(127, 0, 255);\">How Axis Bank BC Helps Financial Inclusion</span></h2><p>The BC model supports the Government of India’s goal of expanding banking access to every citizen. Through BC outlets, people in remote regions can perform financial transactions closer to their homes. This reduces dependency on distant bank branches and encourages digital financial literacy.</p><p>Axis Bank also promotes secure digital banking services and online payment solutions for customers across India. </p><h2><span style=\"color: rgb(127, 0, 255);\">Important Safety Tips for Customers</span></h2><p>Customers should always use official Axis Bank channels and avoid sharing OTPs or confidential banking information with unknown persons. Online discussions have highlighted the importance of staying alert against phishing websites and fake banking links pretending to represent banks. </p><h2><span style=\"color: rgb(127, 0, 255);\">Conclusion</span></h2><p>Axis Bank BC services provide a valuable opportunity for entrepreneurs while improving banking accessibility for customers across India. With growing digital adoption and demand for financial services, the BC model continues to support both employment generation and financial inclusion.</p><p>Individuals interested in joining the Axis Bank BC network should carefully verify official procedures, understand service responsibilities, and ensure compliance with banking guidelines before starting operations.</p><p><br></p>', '20260517152648_featured_Untitled-design-41.png', '', 'Learn about Axis Bank BC services, benefits, eligibility, registration process, and how Business Correspondents support digital banking in India.', 'Axis Bank BC, Axis Bank Business Correspondent, Axis Bank BC registration, BC point service, digital banking India, micro ATM services, banking franchise India, Axis Bank CSP, financial inclusion India, Aadhaar banking services, money transfer services, banking business opportunity, rural banking services, Axis Bank agent registration', 'krajeshk', '2026-05-17 15:15:00', 26, 0.0, 0, NULL, 1, 1, '2026-05-17 15:26:48', '2026-06-08 04:31:03'),
(6, 'Income Tax Filing Made Simple – Fast, Accurate & Hassle-Free', 'income-tax-filing-made-simple-fast-accurate-hassle-free', 'blog', '<h1><span style=\"color: rgb(75, 0, 130);\">Income Tax Filing Made Simple – Fast, Accurate &amp; Hassle-Free</span></h1><p>Managing income tax filing can often feel confusing and time-consuming for individuals, freelancers, and business owners. From selecting the correct ITR form to calculating deductions and ensuring compliance, even a small mistake can lead to notices or delayed refunds. That’s why professional income tax services have become essential for stress-free and accurate filing.</p><p>At <strong><a href=\"https://k-seva.com/#\" rel=\"noopener noreferrer\" target=\"_blank\">K-Seva</a></strong> Income Tax Services, taxpayers can access reliable support for income tax return filing, tax planning, and compliance assistance. Modern tax service providers now focus on simplifying the entire filing process through expert guidance, quick document verification, and secure online support. </p><h2><span style=\"color: rgb(0, 128, 0);\">Why Income Tax Filing is Important</span></h2><p>Filing your Income Tax Return (ITR) is not just a legal requirement; it also helps individuals and businesses maintain financial transparency. Timely tax filing offers several advantages, including:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Easy loan approvals</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Faster visa processing</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Claiming tax refunds</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Carry forward of losses</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Improved financial credibility</li></ol><p>Whether you are salaried, self-employed, or running a business, proper tax filing helps avoid penalties and ensures smooth financial management.</p><h2><span style=\"color: rgb(0, 128, 0);\">Who Should File Income Tax Returns?</span></h2><p>Income tax filing is important for:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Salaried employees</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Freelancers and consultants</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Small business owners</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Professionals like doctors, CAs, and architects</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Individuals earning rental or investment income</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>NRIs with taxable income in India</li></ol><p>Experts also recommend filing returns even when income falls below taxable limits, as it acts as valid income proof for future financial requirements.</p><h2><span style=\"color: rgb(0, 128, 0);\">Services Offered Under Income Tax Assistance</span></h2><p>Professional tax filing services usually include:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Income Tax Return (ITR) filing</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Tax planning and savings guidance</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>TDS return filing</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Income tax notice support</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Refund status assistance</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Advance tax calculation</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Business and professional tax compliance</li></ol><p>Many financial service providers now offer online filing support with faster processing and expert consultation. </p><h2><span style=\"color: rgb(0, 128, 0);\">Benefits of Professional Tax Filing Support</span></h2><h3><span style=\"color: rgb(75, 0, 130);\">1. Accurate Filing</span></h3><p>Experts help minimize filing errors and ensure proper documentation.</p><h3><span style=\"color: rgb(75, 0, 130);\">2. Maximum Tax Savings</span></h3><p>Professional guidance helps taxpayers claim eligible deductions and exemptions.</p><h3><span style=\"color: rgb(75, 0, 130);\">3. Faster Refund Processing</span></h3><p>Correct filing improves the chances of quicker refund approvals.</p><h3><span style=\"color: rgb(75, 0, 130);\">4. Stress-Free Compliance</span></h3><p>Tax professionals handle calculations, forms, and updates efficiently.</p><h3><span style=\"color: rgb(75, 0, 130);\">5. Time Saving</span></h3><p>Online filing support reduces paperwork and saves valuable time.</p><h2><span style=\"color: rgb(0, 128, 0);\">Common Documents Required for ITR Filing</span></h2><p>The required documents may vary depending on the type of taxpayer, but generally include:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>PAN Card</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Aadhaar Card</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Bank statements</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Form 16 or salary slips</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Investment proofs</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Business income documents</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>TDS certificates</li></ol><p>Keeping documents organized helps speed up the filing process.</p><h2><span style=\"color: rgb(0, 128, 0);\">Online Tax Filing is Becoming Popular</span></h2><p>With digital financial services growing rapidly in India, online income tax filing has become more convenient than ever. Taxpayers now prefer platforms that provide:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Easy document upload</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Expert consultation</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Secure filing process</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Real-time updates</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Quick customer support</li></ol><p>The demand for professional tax filing assistance continues to increase as more individuals seek reliable and hassle-free financial services. </p><h2><span style=\"color: rgb(0, 128, 0);\">Final Thoughts</span></h2><p>Income tax filing plays an important role in maintaining financial discipline and legal compliance. Whether you are filing returns for the first time or managing complex business taxation, professional assistance can make the process easier, faster, and more accurate.</p><p>Choosing expert tax support helps reduce stress, maximize tax benefits, and ensure smooth compliance with the latest income tax regulations.</p><p><br></p>', '20260518173409_featured_43d50284-a750-4b5b-b9f0-01d5db3b4718.png', '', 'File your income tax returns easily with expert support, accurate filing, quick refunds, and hassle-free tax compliance services online.', 'income tax filing services, online ITR filing, income tax return filing India, tax refund services, expert tax support, tax filing assistance, business tax filing, freelancer income tax, salaried employee ITR, online tax services, tax planning services, income tax compliance, fast ITR filing, secure tax filing India', 'krajeshk', '2026-05-18 17:26:00', 25, 0.0, 0, NULL, 1, 1, '2026-05-18 17:34:09', '2026-06-07 01:58:43');
INSERT INTO `tbl_website_blog` (`id`, `blog_title`, `slug`, `blog_category`, `blog_content`, `featured_image`, `gallery_images`, `meta_description`, `meta_keywords`, `author_name`, `publish_date`, `views_count`, `avg_rating`, `total_ratings`, `reviews_json`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Compliance Services: Why Every Business Needs Proper Legal and Regulatory Support', 'compliance-services-why-every-business-needs-proper-legal-and-regulatory-support', 'blog', '<h1><strong style=\"color: rgb(255, 69, 0);\">Compliance Services: Why Every Business Needs Proper Legal and Regulatory Support</strong></h1><p>Running a successful business involves more than just selling products or services. Every company must follow various legal, financial, and regulatory requirements to operate smoothly and avoid penalties. Compliance services help businesses meet these obligations efficiently while maintaining transparency and credibility. From company registration and tax filing to annual returns and regulatory approvals, professional compliance support ensures that businesses stay legally secure and financially organized.</p><p>Businesses today face constantly changing government regulations, tax structures, and reporting requirements. Managing these responsibilities without expert guidance can become time-consuming and stressful. Professional compliance services simplify the process by handling documentation, filings, certifications, and legal formalities accurately and on time. Many businesses rely on compliance experts for GST registration, tax filings, MSME registration, company incorporation, trademark services, and statutory compliance management. </p><h2><strong style=\"color: rgb(50, 205, 50);\">Importance of Compliance Services for Businesses</strong></h2><p>Compliance services are essential for businesses of all sizes, including startups, small businesses, and large enterprises. Proper compliance management helps companies avoid legal complications, financial penalties, and operational disruptions. Businesses that maintain regulatory compliance also build trust among customers, investors, and financial institutions.</p><p>Professional compliance management ensures that important deadlines are not missed. Whether it is filing annual returns, renewing licenses, or maintaining tax records, timely compliance helps businesses maintain smooth operations and a positive reputation.</p><h2><strong style=\"color: rgb(50, 205, 50);\">Key Compliance Services for Businesses</strong></h2><h3><span style=\"color: rgb(255, 69, 0);\">Company Registration and Incorporation</span></h3><p>Choosing the appropriate legal structure is the first and most important step when starting a business. Compliance professionals assist with registering Private Limited Companies, LLPs, OPCs, partnerships, and proprietorships. Proper company registration ensures legal recognition and supports business expansion opportunities. </p><h3><span style=\"color: rgb(255, 69, 0);\">GST Registration and Tax Filing</span></h3><p>GST compliance is one of the most important responsibilities for businesses in India. Compliance experts help businesses obtain GST registration, file returns, manage invoices, and handle tax-related documentation. Proper GST management helps avoid penalties and improves financial accuracy.</p><h3><span style=\"color: rgb(255, 69, 0);\">MSME and Udyam Registration</span></h3><p>Small and medium enterprises can benefit from government schemes and financial support through MSME registration. Compliance services assist businesses in completing the registration process quickly and correctly.</p><h3><span style=\"color: rgb(255, 69, 0);\">Trademark and Intellectual Property Protection</span></h3><p>Protecting a business brand is crucial in today’s competitive market. Trademark registration safeguards brand identity and prevents unauthorized usage. Compliance consultants help businesses file trademark applications and manage intellectual property documentation. </p><h3><span style=\"color: rgb(255, 69, 0);\">Annual Filings and Regulatory Compliance</span></h3><p>Businesses are required to submit annual returns, financial statements, and compliance reports regularly. Missing these filings can result in penalties and legal notices. Professional compliance support ensures that all mandatory filings are completed accurately and on schedule.</p><h2><strong style=\"color: rgb(50, 205, 50);\">Benefits of Professional Compliance Services</strong></h2><h3><span style=\"color: rgb(255, 69, 0);\">Saves Time and Effort</span></h3><p>Compliance experts manage legal and financial documentation, allowing business owners to focus on growth and operations instead of paperwork.</p><h3><span style=\"color: rgb(255, 69, 0);\">Reduces Legal Risks</span></h3><p>Accurate compliance management minimizes the risk of penalties, legal disputes, and government notices.</p><h3><span style=\"color: rgb(255, 69, 0);\">Improves Financial Transparency</span></h3><p>Proper record maintenance and tax filing improve business credibility and financial organization.</p><h3><span style=\"color: rgb(255, 69, 0);\">Enhances Business Growth</span></h3><p>Businesses with strong compliance records often find it easier to secure loans, attract investors, and expand operations.</p><h3><span style=\"color: rgb(255, 69, 0);\">Provides Expert Guidance</span></h3><p>Compliance professionals stay updated with changing laws and regulations, helping businesses adapt smoothly to new requirements.</p><h2><strong style=\"color: rgb(50, 205, 50);\">Why Businesses Should Prioritize Compliance</strong></h2><p>Many businesses underestimate the importance of regulatory compliance until they face penalties or legal issues. Delayed filings, inaccurate records, or missing registrations can negatively impact business operations and reputation. By investing in professional compliance services, businesses can maintain smooth operations, improve efficiency, and focus on long-term success.</p><p>As government regulations continue to evolve, businesses increasingly rely on compliance service providers for expert assistance and reliable support. Professional compliance solutions help organizations maintain accuracy, legal security, and operational stability in a competitive business environment.</p><h2><strong style=\"color: rgb(50, 205, 50);\">Conclusion</strong></h2><p>Compliance services play a vital role in ensuring that businesses operate legally, efficiently, and confidently. From company registration and GST filing to trademark protection and annual compliance management, professional support simplifies complex legal processes and reduces operational risks. Businesses that prioritize compliance are better positioned for sustainable growth, improved credibility, and long-term success in today’s dynamic market.</p>', '20260520125301_featured_Untitled-design-44.png', '', 'Professional compliance services help businesses manage registrations, tax filings, legal documentation, and regulatory requirements efficiently.', 'compliance services, business compliance solutions, GST registration services, company registration, tax filing services, MSME registration, trademark registration, legal compliance support, regulatory compliance services, annual filing services, business legal services, startup compliance, corporate compliance management, business registration services', 'krajeshk', '2026-05-20 12:34:00', 31, 0.0, 0, NULL, 1, 1, '2026-05-20 12:53:01', '2026-05-30 06:35:56'),
(8, 'LLP Compliances: Everything You Need to Know for Smooth Business Operations', 'llp-compliances-everything-you-need-to-know-for-smooth-business-operations', 'blog', '<h1><strong style=\"color: rgb(220, 20, 60);\">LLP Compliances: Everything You Need to Know for Smooth Business Operations</strong></h1><p>A Limited Liability Partnership (LLP) is one of the most preferred business structures for startups, professionals, and small businesses because it offers limited liability protection along with operational flexibility. However, every LLP registered in India must comply with certain legal and regulatory requirements to avoid penalties and maintain active business status. Understanding LLP compliances is essential for ensuring smooth and hassle-free business operations.</p><p>According to compliance experts, LLPs are required to complete annual filings and maintain proper financial records even if the business has minimal transactions or no turnover. </p><h2><strong style=\"color: rgb(0, 100, 0);\">What Are LLP Compliances?</strong></h2><p>LLP compliances refer to the mandatory legal filings, financial reporting, tax submissions, and regulatory obligations that every LLP must complete under the Limited Liability Partnership Act, 2008. These compliances are monitored by the Ministry of Corporate Affairs (MCA) and Income Tax Department.</p><p>Timely compliance helps businesses:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Avoid heavy penalties</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Maintain legal status</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Improve business credibility</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Simplify future funding and banking processes</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Ensure smooth operational continuity</li></ol><h2><strong style=\"color: rgb(0, 100, 0);\">Important Annual LLP Compliances</strong></h2><h3><strong style=\"color: rgb(220, 20, 60);\">1. Filing of Form 11 – Annual Return</strong></h3><p>Every LLP must file Form 11 annually with the MCA. This form contains details about partners, contribution structure, and business information.</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Due Date: 30th May every year</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Mandatory even if there is no business activity</li></ol><h3><strong style=\"color: rgb(220, 20, 60);\">2. Filing of Form 8 – Statement of Accounts &amp; Solvency</strong></h3><p>Form 8 contains the LLP’s financial position, assets, liabilities, and solvency declaration.</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Due Date: 30th October every year</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Must be certified by designated partners and professionals when applicable</li></ol><h3><strong style=\"color: rgb(220, 20, 60);\">3. Income Tax Return Filing</strong></h3><p>All LLPs must file income tax returns irrespective of profit or loss.</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Applicable under the Income Tax Act</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Audit requirements may apply based on turnover limits</li></ol><h3><strong style=\"color: rgb(220, 20, 60);\">4. GST Return Filing</strong></h3><p>If the LLP is registered under GST, monthly, quarterly, or annual GST returns must be filed based on the business category and turnover.</p><p>Common GST compliances include:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>GSTR-1</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>GSTR-3B</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Annual GST return</li></ol><h3><strong style=\"color: rgb(220, 20, 60);\">5. Maintenance of Books of Accounts</strong></h3><p>Every LLP is required to maintain proper accounting records, invoices, financial statements, and supporting documents.</p><p>Proper bookkeeping helps during:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Tax filing</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Audits</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Loan applications</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Financial planning</li></ol><h2><strong style=\"color: rgb(0, 100, 0);\">Event-Based LLP Compliances</strong></h2><p>Apart from annual compliances, LLPs must also complete certain filings whenever business changes occur, such as:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Addition or resignation of partners</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Change in LLP agreement</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Change in registered office address</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Change in business activity</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Increase in capital contribution</li></ol><p>Failure to update these changes within the prescribed timelines may result in penalties.</p><h2><strong style=\"color: rgb(0, 100, 0);\">Penalties for Non-Compliance</strong></h2><p>Non-compliance with LLP regulations can lead to significant penalties and legal complications. Delayed filing fees may accumulate daily until compliance is completed. Experts highlight that even inactive LLPs are still required to complete mandatory annual filings. </p><p>Businesses on online forums frequently discuss how missed MCA deadlines and lack of professional guidance can create unnecessary financial burdens for startups and small companies. </p><h2><strong style=\"color: rgb(0, 100, 0);\">Benefits of Timely LLP Compliance</strong></h2><p>Maintaining proper LLP compliance offers several business advantages:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Builds trust with banks and investors</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Helps secure loans and funding</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Improves business transparency</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Prevents legal notices and penalties</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Ensures uninterrupted business operations</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Enhances company reputation</li></ol><h2><strong style=\"color: rgb(0, 100, 0);\">Why Professional Compliance Support Matters</strong></h2><p>Many startups and entrepreneurs prefer professional assistance for LLP compliance management to avoid filing errors and missed deadlines. Compliance professionals help businesses manage ROC filings, GST returns, tax filings, and documentation efficiently. Online discussions among founders also suggest that structured compliance support reduces confusion and helps businesses stay organized.</p><h1><span style=\"color: rgb(0, 100, 0);\">Final Thoughts</span></h1><p>LLP compliances are an important part of running a legally secure and financially organized business. Whether your LLP is newly registered or already operational, timely filing of returns, maintaining accurate records, and meeting statutory deadlines are essential for long-term business success. Proper compliance management not only helps avoid penalties but also strengthens your business credibility and growth opportunities.</p>', '20260521161631_featured_Untitled-design-45.png', '', 'Learn about LLP compliances, annual filings, GST returns, tax obligations, and legal requirements for smooth business operations.', 'LLP compliances, LLP annual filing, Form 11 LLP, Form 8 LLP, LLP compliance services, LLP GST filing, LLP tax return, MCA compliance, LLP registration compliance, LLP legal requirements, business compliance India, LLP filing due dates, LLP bookkeeping, LLP audit requirements, LLP compliance process', 'krajeshk', '2026-05-21 16:07:00', 32, 0.0, 0, NULL, 1, 1, '2026-05-21 16:16:31', '2026-06-05 22:22:09'),
(10, 'ISO Certification: Strengthening Business Quality and Trust', 'iso-certification-strengthening-business-quality-and-trust', 'blog', '<h1><span style=\"color: rgb(255, 69, 0);\">ISO Certification: Strengthening Business Quality and Trust</span></h1><p>In the modern business world, maintaining quality standards and building customer confidence are essential for sustainable growth. ISO Certification helps organizations improve their systems, enhance operational efficiency, and demonstrate their commitment to delivering reliable products and services. Whether it is a startup, small enterprise, or large corporation, ISO certification can support long-term business development and market credibility.</p><p>The International Organization for Standardization (ISO) develops globally accepted standards that guide businesses in improving quality management, safety practices, environmental responsibility, and information security. Companies from various industries use ISO standards to streamline operations and increase customer satisfaction.</p><h2><strong style=\"color: rgb(0, 128, 0);\">What Does ISO Certification Mean?</strong></h2><p>ISO Certification confirms that a business follows internationally recognized management standards and maintains consistent operational procedures. It shows that the organization is committed to meeting customer expectations and industry requirements through systematic business practices.</p><p>Popular ISO standards include:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>ISO 9001 for Quality Management</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>ISO 14001 for Environmental Management</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>ISO 27001 for Information Security</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>ISO 45001 for Occupational Health and Safety</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>ISO 22000 for Food Safety Management</li></ol><p>These certifications are suitable for organizations across different sectors and business sizes.</p><h2><strong style=\"color: rgb(0, 128, 0);\">Advantages of ISO Certification</strong></h2><h3><span style=\"color: rgb(220, 20, 60);\">Builds Customer Confidence</span></h3><p>ISO-certified businesses gain greater trust from customers, suppliers, and investors because the certification reflects professionalism and reliability.</p><h3><span style=\"color: rgb(220, 20, 60);\">Improves Product and Service Quality</span></h3><p>Standardized operational processes help organizations maintain consistent quality in their products and services, leading to better customer experiences.</p><h3><span style=\"color: rgb(220, 20, 60);\">Enhances Business Efficiency</span></h3><p>ISO implementation encourages organized workflows, proper documentation, and improved process management, helping businesses reduce errors and increase productivity.</p><h3><span style=\"color: rgb(220, 20, 60);\">Supports Business Expansion</span></h3><p>Many government contracts, corporate partnerships, and international business opportunities prefer companies with ISO certification, giving certified businesses an added advantage.</p><h3><span style=\"color: rgb(220, 20, 60);\">Encourages Legal and Regulatory Compliance</span></h3><p>ISO standards help businesses maintain proper compliance procedures and risk management systems, reducing operational and legal complications.</p><h3><span style=\"color: rgb(220, 20, 60);\">Creates Competitive Value</span></h3><p>Businesses with ISO certification often stand out in competitive markets and gain a stronger professional image among customers and industry partners.</p><h2><strong style=\"color: rgb(0, 128, 0);\">Which Businesses Can Apply for ISO Certification?</strong></h2><p>ISO certification can benefit many industries, including:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Manufacturing companies</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>IT and software firms</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Healthcare organizations</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Educational institutions</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Food and hospitality businesses</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Construction companies</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Logistics and trading firms</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Startups and small businesses</li></ol><p>Any organization seeking better quality standards and stronger customer trust can apply for ISO certification.</p><h2><strong style=\"color: rgb(0, 128, 0);\">Steps Involved in ISO Certification</strong></h2><p>The certification process generally includes:</p><ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Choosing the suitable ISO standard</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Preparing required documentation</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Reviewing existing business processes</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Implementing necessary improvements</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Conducting internal audits</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Completing the final certification audit</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Receiving the ISO certificate</li></ol><p>Professional consultancy services can simplify the certification process and help businesses meet compliance requirements effectively.</p><h2><strong style=\"color: rgb(0, 128, 0);\">Why ISO Certification is Important Today</strong></h2><p>As customer expectations and market competition continue to increase, businesses must maintain strong operational standards to remain successful. ISO certification helps organizations improve management systems, increase customer satisfaction, and strengthen brand reputation.</p><p>Modern businesses are increasingly focusing on quality assurance, safety, and operational transparency. ISO certification supports these goals while improving overall business performance and long-term growth opportunities.</p><h2><strong style=\"color: rgb(0, 128, 0);\">Conclusion</strong></h2><p>ISO certification is not simply a document—it is a valuable business tool that supports quality improvement, operational excellence, and customer trust. By following international standards, organizations can strengthen their reputation, improve efficiency, and create better growth opportunities in competitive industries. Investing in ISO certification can help businesses achieve higher professionalism and sustainable success in today’s evolving market.</p>', '20260522151153_featured_dd5a8873-2e5c-4d05-9d38-dd5d8c43c1b5.png', '', 'Boost your business credibility and growth with ISO certification through improved quality standards, compliance, and customer trust.', 'ISO certification, ISO registration, quality management certification, ISO 9001, business certification, ISO services, ISO compliance, international standards, ISO consultant, business quality standards, ISO audit, certification services, quality assurance, ISO documentation, business credibility, ISO approval, company certification, ISO standards India, professional certification, compliance management', 'krajeshk', '2026-05-22 15:02:00', 20, 0.0, 0, NULL, 1, 1, '2026-05-22 15:11:53', '2026-06-05 19:52:19'),
(11, 'GSTR-10 Return Filing Services – Easy Final GST Compliance', 'gstr-10-return-filing-services-easy-final-gst-compliance', 'blog', '<h1><strong style=\"color: rgb(199, 21, 133);\">GSTR-10 Return Filing Services – Easy Final GST Compliance</strong></h1><p>When a business decides to cancel its GST registration, completing the final compliance process is extremely important. One of the key requirements after cancellation is filing GSTR-10, also known as the Final Return under GST. This return helps the taxpayer officially conclude GST obligations and maintain proper legal compliance.</p><p>At <a href=\"https://k-seva.com?utm_source=chatgpt.com\" rel=\"noopener noreferrer\" target=\"_blank\">K-Seva</a>, we provide professional support for accurate and hassle-free GSTR-10 filing services for businesses, traders, startups, and professionals.</p><h2><strong style=\"color: rgb(75, 0, 130);\">Understanding GSTR-10</strong></h2><p>GSTR-10 is a final GST return that must be filed by taxpayers after cancellation or surrender of their GST registration. It includes details about stock held, tax payable on remaining goods, and input tax credit related information at the time of cancellation.</p><p>This return confirms that the taxpayer has cleared all pending GST responsibilities before exiting the GST system.</p><h2><strong style=\"color: rgb(75, 0, 130);\">Who Needs to File GSTR-10?</strong></h2><p>GSTR-10 filing is mandatory for taxpayers whose GST registration has been cancelled either voluntarily or by the GST department.</p><h3><span style=\"color: rgb(50, 205, 50);\">Businesses Required to File:</span></h3><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Proprietorship firms</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Partnership businesses</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Private limited companies</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Service providers</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Traders and retailers</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Businesses shutting down operations</li></ol><h3><span style=\"color: rgb(50, 205, 50);\">Exempted Categories:</span></h3><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Composition scheme taxpayers</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Non-resident taxable persons</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Input Service Distributors (ISD)</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>TDS and TCS deductors under GST</li></ol><h2><strong style=\"color: rgb(75, 0, 130);\">Importance of Filing GSTR-10</strong></h2><p>Filing GSTR-10 on time is essential to avoid future legal and tax complications. It ensures that all liabilities are settled properly before closing the GST registration.</p><h3><span style=\"color: rgb(50, 205, 50);\">Key Benefits:</span></h3><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Smooth closure of GST registration</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Prevention of late fees and penalties</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Proper settlement of tax liabilities</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Compliance with GST regulations</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Avoidance of departmental notices</li></ol><h2><strong style=\"color: rgb(75, 0, 130);\">Information Required for GSTR-10 Filing</strong></h2><p>To complete the filing process, taxpayers may need to provide:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>GSTIN details</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Cancellation order number</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Date of cancellation</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Details of stock and capital goods</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Tax payable information</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Input tax credit details</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Business closure details</li></ol><p>Maintaining proper records helps ensure accurate filing without delays.</p><h2><strong style=\"color: rgb(75, 0, 130);\">Due Date for GSTR-10 Return</strong></h2><p>The final return must generally be filed within three months from the date of GST cancellation or cancellation order issuance, whichever is later.</p><p>Timely filing helps businesses avoid unnecessary compliance issues and additional charges.</p><h2><strong style=\"color: rgb(75, 0, 130);\">Simple Process for Filing GSTR-10</strong></h2><h3><span style=\"color: rgb(50, 205, 50);\">Step 1: Collect Required Documents</span></h3><p>Gather GST registration details, stock information, and cancellation documents.</p><h3><span style=\"color: rgb(50, 205, 50);\">Step 2: Calculate Tax Liability</span></h3><p>Calculate the applicable tax liability on remaining stock and capital assets held by the business.</p><h3><span style=\"color: rgb(50, 205, 50);\">Step 3: Prepare Final Return</span></h3><p>Enter all required information accurately in the GSTR-10 form.</p><h3><span style=\"color: rgb(50, 205, 50);\">Step 4: Verify and Submit</span></h3><p>Submit the return online using digital verification methods.</p><h3><span style=\"color: rgb(50, 205, 50);\">Step 5: Save Acknowledgement</span></h3><p>Keep the filing acknowledgement safely for future reference.</p><h2><strong style=\"color: rgb(75, 0, 130);\">Common Challenges Faced by Businesses</strong></h2><p>Many businesses face difficulties while filing GSTR-10 due to:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Incorrect stock valuation</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Errors in tax calculation</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Missing documentation</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Delay in cancellation process</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Lack of GST compliance knowledge</li></ol><p>Professional assistance can help businesses avoid these issues and complete the process smoothly.</p><h2><strong style=\"color: rgb(75, 0, 130);\">Why Choose K-Seva for GSTR-10 Filing?</strong></h2><p><a href=\"https://k-seva.com/gstr-10?utm_source=chatgpt.com\" rel=\"noopener noreferrer\" target=\"_blank\">K-Seva GST Services</a> offers complete assistance for final GST return filing with expert support and reliable compliance solutions.</p><h3><span style=\"color: rgb(50, 205, 50);\">Our Services Include:</span></h3><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Accurate return preparation</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>GST compliance guidance</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Documentation support</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Fast filing process</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Affordable service packages</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>End-to-end assistance</li></ol><p>Our experienced team ensures proper filing while reducing the risk of errors and penalties.</p><h2><strong style=\"color: rgb(75, 0, 130);\">Conclusion</strong></h2><p>GSTR-10 filing is an important step for businesses cancelling their GST registration. Filing the final return correctly and within the prescribed time helps businesses close their GST obligations without complications.</p><p>With expert support from K-Seva, businesses can complete the GSTR-10 filing process easily, accurately, and efficiently while staying fully compliant with GST regulations.</p>', '20260528125741_featured_Untitled-design-46.png', '', 'Get expert assistance for GSTR-10 final return filing with accurate GST compliance and hassle-free registration closure.', 'GSTR-10 filing, GST final return, GST registration cancellation, GSTR-10 return filing, GST compliance services, final GST return, GST return filing, GST cancellation process, business GST closure, GST filing assistance, GST consultants, online GSTR-10 filing, GST return services, K-Seva GST services, GST compliance support', 'krajeshk', '2026-05-28 12:43:00', 22, 0.0, 0, NULL, 1, 1, '2026-05-28 12:57:41', '2026-06-06 11:29:44'),
(12, 'GSTR-10 Return Filing Services – Easy Final GST Compliance', 'gstr-10-return-filing-services-easy-final-gst-compliance-1', 'blog', '<h1><strong style=\"color: rgb(199, 21, 133);\">GSTR-10 Return Filing Services – Easy Final GST Compliance</strong></h1><p>When a business decides to cancel its GST registration, completing the final compliance process is extremely important. One of the key requirements after cancellation is filing GSTR-10, also known as the Final Return under GST. This return helps the taxpayer officially conclude GST obligations and maintain proper legal compliance.</p><p>At <a href=\"https://k-seva.com?utm_source=chatgpt.com\" rel=\"noopener noreferrer\" target=\"_blank\">K-Seva</a>, we provide professional support for accurate and hassle-free GSTR-10 filing services for businesses, traders, startups, and professionals.</p><h2><strong style=\"color: rgb(75, 0, 130);\">Understanding GSTR-10</strong></h2><p>GSTR-10 is a final GST return that must be filed by taxpayers after cancellation or surrender of their GST registration. It includes details about stock held, tax payable on remaining goods, and input tax credit related information at the time of cancellation.</p><p>This return confirms that the taxpayer has cleared all pending GST responsibilities before exiting the GST system.</p><h2><strong style=\"color: rgb(75, 0, 130);\">Who Needs to File GSTR-10?</strong></h2><p>GSTR-10 filing is mandatory for taxpayers whose GST registration has been cancelled either voluntarily or by the GST department.</p><h3><span style=\"color: rgb(50, 205, 50);\">Businesses Required to File:</span></h3><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Proprietorship firms</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Partnership businesses</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Private limited companies</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Service providers</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Traders and retailers</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Businesses shutting down operations</li></ol><h3><span style=\"color: rgb(50, 205, 50);\">Exempted Categories:</span></h3><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Composition scheme taxpayers</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Non-resident taxable persons</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Input Service Distributors (ISD)</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>TDS and TCS deductors under GST</li></ol><h2><strong style=\"color: rgb(75, 0, 130);\">Importance of Filing GSTR-10</strong></h2><p>Filing GSTR-10 on time is essential to avoid future legal and tax complications. It ensures that all liabilities are settled properly before closing the GST registration.</p><h3><span style=\"color: rgb(50, 205, 50);\">Key Benefits:</span></h3><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Smooth closure of GST registration</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Prevention of late fees and penalties</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Proper settlement of tax liabilities</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Compliance with GST regulations</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Avoidance of departmental notices</li></ol><h2><strong style=\"color: rgb(75, 0, 130);\">Information Required for GSTR-10 Filing</strong></h2><p>To complete the filing process, taxpayers may need to provide:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>GSTIN details</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Cancellation order number</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Date of cancellation</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Details of stock and capital goods</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Tax payable information</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Input tax credit details</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Business closure details</li></ol><p>Maintaining proper records helps ensure accurate filing without delays.</p><h2><strong style=\"color: rgb(75, 0, 130);\">Due Date for GSTR-10 Return</strong></h2><p>The final return must generally be filed within three months from the date of GST cancellation or cancellation order issuance, whichever is later.</p><p>Timely filing helps businesses avoid unnecessary compliance issues and additional charges.</p><h2><strong style=\"color: rgb(75, 0, 130);\">Simple Process for Filing GSTR-10</strong></h2><h3><span style=\"color: rgb(50, 205, 50);\">Step 1: Collect Required Documents</span></h3><p>Gather GST registration details, stock information, and cancellation documents.</p><h3><span style=\"color: rgb(50, 205, 50);\">Step 2: Calculate Tax Liability</span></h3><p>Calculate the applicable tax liability on remaining stock and capital assets held by the business.</p><h3><span style=\"color: rgb(50, 205, 50);\">Step 3: Prepare Final Return</span></h3><p>Enter all required information accurately in the GSTR-10 form.</p><h3><span style=\"color: rgb(50, 205, 50);\">Step 4: Verify and Submit</span></h3><p>Submit the return online using digital verification methods.</p><h3><span style=\"color: rgb(50, 205, 50);\">Step 5: Save Acknowledgement</span></h3><p>Keep the filing acknowledgement safely for future reference.</p><h2><strong style=\"color: rgb(75, 0, 130);\">Common Challenges Faced by Businesses</strong></h2><p>Many businesses face difficulties while filing GSTR-10 due to:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Incorrect stock valuation</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Errors in tax calculation</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Missing documentation</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Delay in cancellation process</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Lack of GST compliance knowledge</li></ol><p>Professional assistance can help businesses avoid these issues and complete the process smoothly.</p><h2><strong style=\"color: rgb(75, 0, 130);\">Why Choose K-Seva for GSTR-10 Filing?</strong></h2><p><a href=\"https://k-seva.com/gstr-10?utm_source=chatgpt.com\" rel=\"noopener noreferrer\" target=\"_blank\">K-Seva GST Services</a> offers complete assistance for final GST return filing with expert support and reliable compliance solutions.</p><h3><span style=\"color: rgb(50, 205, 50);\">Our Services Include:</span></h3><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Accurate return preparation</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>GST compliance guidance</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Documentation support</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Fast filing process</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Affordable service packages</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>End-to-end assistance</li></ol><p>Our experienced team ensures proper filing while reducing the risk of errors and penalties.</p><h2><strong style=\"color: rgb(75, 0, 130);\">Conclusion</strong></h2><p>GSTR-10 filing is an important step for businesses cancelling their GST registration. Filing the final return correctly and within the prescribed time helps businesses close their GST obligations without complications.</p><p>With expert support from K-Seva, businesses can complete the GSTR-10 filing process easily, accurately, and efficiently while staying fully compliant with GST regulations.</p>', '20260528125800_featured_Untitled-design-46.png', '', 'Get expert assistance for GSTR-10 final return filing with accurate GST compliance and hassle-free registration closure.', 'GSTR-10 filing, GST final return, GST registration cancellation, GSTR-10 return filing, GST compliance services, final GST return, GST return filing, GST cancellation process, business GST closure, GST filing assistance, GST consultants, online GSTR-10 filing, GST return services, K-Seva GST services, GST compliance support', 'krajeshk', '2026-05-28 12:43:00', 6, 0.0, 0, NULL, 0, 1, '2026-05-28 12:58:00', '2026-06-05 19:35:39');
INSERT INTO `tbl_website_blog` (`id`, `blog_title`, `slug`, `blog_category`, `blog_content`, `featured_image`, `gallery_images`, `meta_description`, `meta_keywords`, `author_name`, `publish_date`, `views_count`, `avg_rating`, `total_ratings`, `reviews_json`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Aadhaar ATM Services – Simple & Secure Digital Banking Solution', 'aadhaar-atm-services-simple-secure-digital-banking-solution', 'blog', '<h1><strong style=\"color: rgb(199, 21, 133);\">Aadhaar ATM Services – Simple &amp; Secure Digital Banking Solution</strong></h1><p>In today’s fast-growing digital world, banking services are becoming more accessible even in rural and remote areas. Aadhaar ATM services, also known as AEPS (Aadhaar Enabled Payment System), allow customers to perform basic banking transactions using their Aadhaar number and biometric authentication. This service has transformed the way people access banking facilities without visiting a traditional bank branch or ATM.</p><p>At <strong><a href=\"https://k-seva.com/\" rel=\"noopener noreferrer\" target=\"_blank\">K-Seva</a></strong> Financial Services,<strong><a href=\"https://k-seva.com/aadhar-atm\" rel=\"noopener noreferrer\" target=\"_blank\"> Aadhaar ATM services</a></strong> help customers complete secure financial transactions quickly and conveniently. </p><h2><span style=\"color: rgb(0, 0, 255);\">What is Aadhaar ATM?</span></h2><p>An Aadhaar ATM or Micro ATM is a portable banking device that enables customers to access banking services using their Aadhaar-linked bank account. Transactions are completed through fingerprint authentication, making the process safe and user-friendly.</p><p>This system is widely used in villages, semi-urban areas, and locations where bank branches or regular ATMs may not be easily available. </p><h2><span style=\"color: rgb(0, 0, 255);\">How Aadhaar ATM Services Work</span></h2><p>The Aadhaar ATM system works through biometric verification linked to a customer’s bank account.</p><h3><span style=\"color: rgb(220, 20, 60);\">Basic Process Includes:</span></h3><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Enter Aadhaar number</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Select the bank name</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Choose the required banking service</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Authenticate using fingerprint scanner</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Transaction gets completed instantly</li></ol><p>This simple process helps users perform banking activities without debit cards or physical bank visits. </p><h2><span style=\"color: rgb(0, 0, 255);\">Services Available Through Aadhaar ATM</span></h2><p>Aadhaar ATM services provide multiple essential banking solutions for customers.</p><h3><span style=\"color: rgb(220, 20, 60);\">Common Services Include:</span></h3><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Cash withdrawal</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Balance enquiry</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Mini statement</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Fund transfer</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Cash deposit</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Aadhaar-based banking transactions</li></ol><p>These services help improve financial accessibility for people across rural and urban India. </p><h2><span style=\"color: rgb(0, 0, 255);\">Benefits of Aadhaar ATM Services</span></h2><h3><span style=\"color: rgb(220, 20, 60);\">Easy Banking Access</span></h3><p>Customers can access banking services near their homes without visiting crowded bank branches.</p><h3><span style=\"color: rgb(220, 20, 60);\">Secure Transactions</span></h3><p>Biometric fingerprint verification provides additional transaction security.</p><h3><span style=\"color: rgb(220, 20, 60);\">No Need for Debit Card</span></h3><p>Transactions can be completed using Aadhaar authentication alone.</p><h3><span style=\"color: rgb(220, 20, 60);\">Helpful for Rural Areas</span></h3><p>Micro ATM services bring banking facilities to villages and remote locations where ATM access is limited.</p><h3><span style=\"color: rgb(220, 20, 60);\">Fast and Convenient</span></h3><p>Transactions are completed within minutes, saving both time and travel expenses.</p><h3><span style=\"color: rgb(220, 20, 60);\">Financial Inclusion</span></h3><p>Aadhaar ATM services help connect more people to digital banking facilities. </p><h2><span style=\"color: rgb(0, 0, 255);\">Importance of Aadhaar ATM in Rural India</span></h2><p>Aadhaar ATM services play a major role in promoting digital banking across rural India. Small business owners, farmers, senior citizens, and daily wage workers benefit from easy access to cash withdrawal and banking services through local service centers.</p><p>These services also support government financial initiatives by improving accessibility to banking infrastructure in underserved regions. </p><h2><span style=\"color: rgb(0, 0, 255);\">Why Choose K-Seva Aadhaar ATM Services?</span></h2><p>K-Seva Technology offers reliable Aadhaar ATM and digital banking services designed to simplify financial transactions for customers and retailers.</p><h3><span style=\"color: rgb(220, 20, 60);\">Key Advantages Include:</span></h3><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Quick transaction processing</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Secure biometric authentication</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Easy-to-use system</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Rural banking support</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Multiple digital financial services</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Trusted customer assistance</li></ol><p>K-Seva helps customers perform safe and convenient banking operations through a growing digital service network. </p><h2><span style=\"color: rgb(0, 0, 255);\">Safety Tips While Using Aadhaar ATM Services</span></h2><p>To ensure secure banking transactions, customers should follow basic safety measures.</p><h3><span style=\"color: rgb(220, 20, 60);\">Important Tips:</span></h3><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Never share Aadhaar details unnecessarily</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Use trusted service centers only</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Verify transaction receipts carefully</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Keep registered mobile numbers updated</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Protect biometric information</li></ol><p>Using secure and authorized service providers helps prevent fraud and improves transaction safety. </p><h2><span style=\"color: rgb(0, 0, 255);\">Future of Aadhaar-Based Banking</span></h2><p>As India continues moving toward digital financial systems, Aadhaar ATM and AEPS services are expected to grow rapidly. These services are helping bridge the gap between traditional banking and digital inclusion by offering banking access to every section of society.</p><p>With increasing adoption of biometric banking solutions, Aadhaar ATM services are becoming an important part of India’s digital financial ecosystem.</p><h2><span style=\"color: rgb(0, 0, 255);\">Conclusion</span></h2><p>Aadhaar ATM services have made banking faster, safer, and more accessible for millions of people. From cash withdrawals to balance checks and fund transfers, these services provide a simple banking solution using Aadhaar authentication.</p><p>With trusted platforms like K-Seva Financial Services, customers can enjoy secure and convenient digital banking services anytime and anywhere.</p>', '20260529172713_featured_Add-a-heading-56.png', '', 'Secure Aadhaar ATM services for cash withdrawal, balance enquiry, and digital banking with easy AEPS transactions.', 'Aadhaar ATM, AEPS services, micro ATM services, digital banking, cash withdrawal AEPS, Aadhaar enabled payment system, balance enquiry, rural banking services, biometric banking, Aadhaar banking services, money transfer AEPS, K-Seva financial services', 'krajeshk', '2026-05-29 17:15:00', 36, 0.0, 0, NULL, 1, 1, '2026-05-29 17:27:13', '2026-06-09 05:21:05'),
(14, 'Tour & Travel Services: Making Every Journey Comfortable and Memorable', 'tour-travel-services-making-every-journey-comfortable-and-memorable', 'blog', '<h1><span style=\"color: rgb(255, 140, 0);\">Tour &amp; Travel Services: Making Every Journey Comfortable and Memorable</span></h1><h2><span style=\"color: rgb(0, 128, 0);\">Introduction</span></h2><p>Travel is one of the best ways to explore new destinations, experience different cultures, and create unforgettable memories. Whether it\'s a family vacation, honeymoon trip, pilgrimage journey, business travel, or adventure tour, proper planning plays a crucial role in ensuring a smooth and enjoyable experience.</p><p>Professional tour and travel services simplify the entire travel process by handling transportation, accommodation, sightseeing, and itinerary planning, allowing travelers to focus on enjoying their journey.</p><h2><span style=\"color: rgb(0, 128, 0);\">What Are Tour &amp; Travel Services?</span></h2><p>Tour and travel services provide complete travel solutions for individuals, families, groups, and businesses. These services help travelers plan, organize, and manage their trips efficiently while offering convenience, comfort, and cost-effective travel options.</p><p>Travel agencies typically assist with:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Domestic tour packages</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>International holiday packages</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Hotel reservations</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Flight bookings</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Train and bus ticket reservations</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Car rental services</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Visa assistance</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Travel insurance</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Customized travel planning</li></ol><p>Many travel companies now offer personalized packages designed around customer preferences, budgets, and travel goals.</p><h2><span style=\"color: rgb(0, 128, 0);\">Benefits of Choosing Professional Travel Services</span></h2><h3><span style=\"color: rgb(3, 169, 244);\">Hassle-Free Planning</span></h3><p>Travel experts manage bookings, itineraries, and schedules, saving travelers valuable time and effort.</p><h3><span style=\"color: rgb(3, 169, 244);\">Customized Tour Packages</span></h3><p>Travel plans can be tailored according to destinations, budget, duration, and personal interests.</p><h3><span style=\"color: rgb(3, 169, 244);\">Cost-Effective Solutions</span></h3><p>Tour operators often provide package deals that combine transportation, accommodation, and sightseeing at competitive prices.</p><h3><span style=\"color: rgb(3, 169, 244);\">Expert Guidance</span></h3><p>Travel professionals offer destination recommendations, travel tips, and local insights to improve the overall experience.</p><h3><span style=\"color: rgb(3, 169, 244);\">Safety and Support</span></h3><p>Many travel companies provide customer support throughout the journey, helping travelers handle unexpected situations with ease.</p><h2><span style=\"color: rgb(0, 128, 0);\">Popular Travel Services Offered</span></h2><h3><span style=\"color: rgb(3, 169, 244);\">Domestic Tour Packages</span></h3><p>Explore famous destinations across India including:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Goa</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Kerala</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Kashmir</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Manali</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Ooty</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Jaipur</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Hyderabad</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Agra</li></ol><p>Domestic tour packages are ideal for family vacations, weekend getaways, and cultural exploration.</p><h3><span style=\"color: rgb(3, 169, 244);\">International Tour Packages</span></h3><p>Travel agencies help customers plan overseas vacations with complete assistance for:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Flight bookings</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Hotel reservations</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Visa processing</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Travel insurance</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Guided sightseeing</li></ol><p>Popular international destinations include Dubai, Singapore, Thailand, Bali, Maldives, and Europe.</p><h3><span style=\"color: rgb(3, 169, 244);\">Pilgrimage Tours</span></h3><p>Spiritual travel continues to grow in popularity across India. Pilgrimage packages offer convenient transportation, accommodation, and guided visits to religious destinations.</p><p>Popular destinations include:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Tirupati</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Shirdi</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Varanasi</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Ayodhya</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Vaishno Devi</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Char Dham</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Rameswaram</li></ol><p>Organized pilgrimage tours help travelers enjoy a comfortable and stress-free spiritual experience.</p><h3><span style=\"color: rgb(3, 169, 244);\">Car Rental and Cab Services</span></h3><p>Travel companies provide local and outstation transportation solutions, including:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Airport transfers</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>City tours</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Business travel</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Family trips</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Group transportation</li></ol><p>Professional drivers and well-maintained vehicles help ensure safe and comfortable journeys.</p><h2><span style=\"color: rgb(0, 128, 0);\">Why Customized Travel Packages Are Becoming Popular</span></h2><p>Modern travelers increasingly prefer personalized travel experiences rather than fixed itineraries. Customized packages allow travelers to choose destinations, hotels, transportation options, and activities according to their preferences.</p><p>Industry trends show growing demand for flexible travel planning and personalized holiday experiences.</p><h2><span style=\"color: rgb(0, 128, 0);\">Important Tips Before Booking a Tour Package</span></h2><p>Before selecting a travel service provider:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Compare package inclusions carefully.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Verify travel agency credentials.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Review accommodation and transportation details.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Check cancellation and refund policies.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Read customer reviews and feedback.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Confirm all pricing details in advance.</li></ol><p>Travel experts also recommend choosing licensed and trusted operators to avoid travel-related issues.</p><h2><span style=\"color: rgb(0, 128, 0);\">The Growing Travel Industry</span></h2><p>India\'s tourism sector continues to expand rapidly due to increased domestic travel, religious tourism, adventure tourism, and international holiday demand. Travel agencies are adopting digital booking systems, customized itineraries, and customer-focused services to meet evolving traveler expectations. Organized travel packages are becoming increasingly popular among families, working professionals, and senior citizens seeking convenience and value.</p><h2><span style=\"color: rgb(0, 128, 0);\">Conclusion</span></h2><p>Tour and travel services play an important role in creating smooth, enjoyable, and memorable travel experiences. From vacation planning and hotel reservations to transportation and sightseeing arrangements, professional travel assistance helps travelers explore destinations with confidence and convenience. Whether planning a family holiday, spiritual journey, business trip, or international vacation, choosing the right travel partner can make every journey stress-free and unforgettable.</p>', '20260530180146_featured_Add-a-heading-57.png', '', 'Explore professional tour and travel services for domestic &international trips,hotel bookings,holiday packages, transportation, and customized travel plannings', 'Tour and Travel Services, Holiday Packages, Travel Agency, Domestic Tours, International Tours, Hotel Booking, Flight Booking, Travel Planning, Pilgrimage Tours, Vacation Packages, Tour Operator, Travel Services India, Customized Tour Packages, Travel Assistance, Family Holiday Packages, Travel Booking Services, Tourism Services, Travel Management, Tour Packages India, Car Rental Services', 'krajeshk', '2026-05-30 17:51:00', 30, 0.0, 0, NULL, 1, 1, '2026-05-30 18:01:46', '2026-06-09 07:29:21'),
(15, 'K-Seva ATM Services – Bringing Banking Closer to Every Citizen', 'k-seva-atm-services-bringing-banking-closer-to-every-citizen', 'blog', '<h1><a href=\"https://k-seva.com/k-seva-atm\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(178, 34, 34);\">K-Seva ATM Services</a><span style=\"color: rgb(178, 34, 34);\"> – Bringing Banking Closer to Every Citizen</span></h1><p>In today’s fast-moving digital world, easy access to banking services has become essential for individuals, families, and businesses. However, many people living in rural and semi-urban areas still face challenges when visiting bank branches or traditional ATMs. To bridge this gap, <strong><a href=\"https://k-seva.com/\" rel=\"noopener noreferrer\" target=\"_blank\">K-Seva</a></strong> Technology offers convenient ATM and Micro ATM services that help customers perform basic banking transactions quickly and securely. <strong><a href=\"https://k-seva.com/\" rel=\"noopener noreferrer\" target=\"_blank\">K-Seva</a></strong> aims to make banking accessible to everyone by providing reliable financial services closer to their communities. </p><h2><strong style=\"color: rgb(0, 100, 0);\">What is K-Seva ATM Service?</strong></h2><p><strong><a href=\"https://k-seva.com/\" rel=\"noopener noreferrer\" target=\"_blank\">K-Seva ATM Service</a></strong> is a digital banking solution that enables customers to access essential banking facilities without visiting a bank branch. With ATM and Micro ATM facilities, customers can conveniently carry out essential banking transactions, including cash withdrawals, balance checks, mini statements, and other routine financial services. These services are especially beneficial in locations where regular banking infrastructure is limited. </p><h2><strong style=\"color: rgb(0, 100, 0);\">Key Features of K-Seva ATM Services</strong></h2><h3><span style=\"color: rgb(255, 69, 0);\">Easy Cash Withdrawals</span></h3><p>Customers can withdraw money from their bank accounts conveniently using ATM or Micro ATM facilities. This service helps users access cash quickly whenever needed.</p><h3><span style=\"color: rgb(255, 69, 0);\">Balance Inquiry</span></h3><p>Users can check their account balance instantly before making transactions, helping them manage their finances more effectively.</p><h3><span style=\"color: rgb(255, 69, 0);\">Mini Statement Facility</span></h3><p>Customers can obtain details of recent transactions and monitor their account activity with ease.</p><h3><span style=\"color: rgb(255, 69, 0);\">Secure Transactions</span></h3><p>K-Seva prioritizes customer security through authenticated banking processes that help ensure safe and reliable transactions. </p><h3><span style=\"color: rgb(255, 69, 0);\">Banking Access in Rural Areas</span></h3><p>The service extends banking facilities to villages and remote regions, reducing the need for customers to travel long distances to access financial services. </p><h2><strong style=\"color: rgb(0, 100, 0);\">Benefits of K-Seva ATM Services</strong></h2><h3><span style=\"color: rgb(255, 69, 0);\">Convenience</span></h3><p>Customers can access banking services near their homes without spending time traveling to bank branches.</p><h3><span style=\"color: rgb(255, 69, 0);\">Faster Financial Transactions</span></h3><p>Transactions are completed within minutes, making everyday banking simple and efficient.</p><h3><span style=\"color: rgb(255, 69, 0);\">Improved Financial Inclusion</span></h3><p>K-Seva helps bring banking services to underserved communities and supports the vision of digital financial empowerment. </p><h3><span style=\"color: rgb(255, 69, 0);\">Reduced Dependency on Branch Visits</span></h3><p>Many routine banking activities can be completed through ATM services, saving valuable time for customers.</p><h3><span style=\"color: rgb(255, 69, 0);\">Business Opportunity for Service Providers</span></h3><p>Entrepreneurs and digital service centers can offer ATM-related services to their local communities and generate additional income through customer transactions.</p><h2><strong style=\"color: rgb(0, 100, 0);\">Who Can Use K-Seva ATM Services?</strong></h2><p>K-Seva ATM services are suitable for:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Farmers and rural residents</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Small business owners</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Daily wage workers</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Senior citizens</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Students</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Individuals seeking convenient banking access</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Customers living in remote or semi-urban areas</li></ol><h2><strong style=\"color: rgb(0, 100, 0);\">How K-Seva ATM Services Work</strong></h2><ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Visit a K-Seva service center.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Provide your debit card or account details as required.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Authenticate the transaction through secure verification.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Select the desired banking service.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Complete the transaction and receive confirmation instantly.</li></ol><p>The process is designed to be user-friendly, allowing customers of different age groups to access banking facilities comfortably. </p><h2><strong style=\"color: rgb(0, 100, 0);\">Why Choose K-Seva ATM Services?</strong></h2><p>K-Seva focuses on delivering accessible, secure, and customer-friendly digital banking solutions. With a growing network of service centers and a commitment to financial inclusion, the platform helps individuals access essential banking facilities whenever they need them. By combining technology with local service availability, K-Seva contributes to making banking more convenient and inclusive for communities across India. </p><h2><strong style=\"color: rgb(0, 100, 0);\">Conclusion</strong></h2><p>K-Seva ATM Services provide a practical solution for customers who need quick and reliable banking support. Whether it is withdrawing cash, checking account balances, or viewing transaction history, K-Seva helps simplify everyday banking. As digital financial services continue to expand, K-Seva remains committed to bringing secure and accessible banking facilities closer to every citizen.</p>', '20260531120307_featured_Add-a-heading-58.png', '', 'Access secure ATM and Micro ATM services through K-Seva. Enjoy cash withdrawals, balance inquiries, mini statements, and convenient banking solutions.', 'K-Seva ATM Services, Micro ATM Services, ATM Banking Solutions, Cash Withdrawal Services, Balance Inquiry Service, Mini Statement Service, Digital Banking Services, Rural Banking Solutions, Banking Near Me, Financial Services India, Secure ATM Transactions, Micro ATM Provider, Banking Convenience, K-Seva Financial Services, ATM Service Center, Banking Access, Digital Financial Inclusion, Banking Services in Rural Areas, Easy Banking Solutions, Customer Banking Services.', 'krajeshk', '2026-05-31 11:36:00', 38, 0.0, 0, NULL, 1, 1, '2026-05-31 12:03:07', '2026-06-05 02:54:51'),
(16, 'GST Reconciliation: A Complete Guide for Businesses', 'gst-reconciliation-a-complete-guide-for-businesses', 'blog', '<h1><span style=\"color: rgb(255, 0, 0);\">GST Reconciliation: A Complete Guide for Businesses</span></h1><p>In today’s GST environment, maintaining accurate tax records is essential for smooth business operations and compliance.<strong><a href=\"https://k-seva.com/gst-reconciliation\" rel=\"noopener noreferrer\" target=\"_blank\"> GST reconciliation</a></strong> is the process of comparing a company\'s financial records with GST return data to identify mismatches, errors, or missing transactions. Regular reconciliation helps businesses claim accurate Input Tax Credit (ITC), avoid penalties, and ensure proper GST compliance. </p><h2><strong style=\"color: rgb(0, 128, 0);\">What is GST Reconciliation?</strong></h2><p>GST reconciliation involves matching data from different sources such as purchase registers, sales registers, GSTR-1, GSTR-3B, GSTR-2B, e-invoices, and other GST-related records. The primary goal is to verify that the data submitted on the GST portal accurately aligns with the business\'s internal financial and accounting records. Any discrepancies identified during reconciliation can be corrected before they lead to compliance issues. </p><h2><strong style=\"color: rgb(0, 128, 0);\">Why is GST Reconciliation Important?</strong></h2><h3><span style=\"color: rgb(199, 21, 133);\">1. Accurate Input Tax Credit Claims</span></h3><p>Businesses can claim ITC only on eligible invoices reflected in GST records. Reconciliation helps identify missing invoices, supplier filing delays, and incorrect tax credits before returns are filed. </p><h3><span style=\"color: rgb(199, 21, 133);\">2. Prevention of GST Notices and Penalties</span></h3><p>Incorrect GST filings, mismatched invoices, or excess ITC claims may trigger departmental notices. Regular reconciliation reduces the chances of compliance-related disputes. </p><h3><span style=\"color: rgb(199, 21, 133);\">3. Improved Financial Accuracy</span></h3><p>Matching GST returns with accounting records ensures that sales, purchases, tax liabilities, and credits are accurately recorded in the books. </p><h3><span style=\"color: rgb(199, 21, 133);\">4. Better Cash Flow Management</span></h3><p>Unclaimed or blocked ITC can affect working capital. Timely reconciliation helps businesses maximize eligible tax credits and maintain healthy cash flow. </p><h3><span style=\"color: rgb(199, 21, 133);\">5. Easier Annual Return Filing</span></h3><p>Monthly and quarterly reconciliations simplify year-end GST filings and reduce the burden of correcting large volumes of data later. </p><h2><strong style=\"color: rgb(0, 128, 0);\">Types of GST Reconciliation</strong></h2><h3><span style=\"color: rgb(199, 21, 133);\">GSTR-2B vs Purchase Register Reconciliation</span></h3><p>This process verifies whether all purchase invoices recorded in the books are reflected in GSTR-2B for ITC eligibility. </p><h3><span style=\"color: rgb(199, 21, 133);\">GSTR-1 vs Sales Register Reconciliation</span></h3><p>It ensures that all outward supplies reported in GST returns match the company\'s sales records. </p><h3><span style=\"color: rgb(199, 21, 133);\">GSTR-3B vs GSTR-1 Reconciliation</span></h3><p>Businesses compare tax liabilities reported in both returns to identify under-reporting or over-reporting of GST. </p><h3><span style=\"color: rgb(199, 21, 133);\">Vendor Reconciliation</span></h3><p>Supplier-wise reconciliation helps businesses track vendors who have not uploaded invoices or filed returns correctly. </p><h3><span style=\"color: rgb(199, 21, 133);\">Annual GST Reconciliation</span></h3><p>This reconciliation compares annual financial statements with GST returns filed throughout the financial year to ensure complete accuracy. </p><h2><strong style=\"color: rgb(0, 128, 0);\">Common GST Reconciliation Challenges</strong></h2><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Missing invoices in GSTR-2B</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Incorrect GSTIN details</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Duplicate invoice entries</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Vendor filing delays</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Tax rate mismatches</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Credit note and debit note discrepancies</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Data entry errors in accounting software</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Differences between GSTR-1 and GSTR-3B filings </li></ol><h2><strong style=\"color: rgb(0, 128, 0);\">Steps Involved in GST Reconciliation</strong></h2><h3><span style=\"color: rgb(199, 21, 133);\">Step 1: Collect Required Data</span></h3><p>Gather purchase registers, sales registers, GSTR-1, GSTR-3B, GSTR-2B, e-invoices, and other relevant documents.</p><h3><span style=\"color: rgb(199, 21, 133);\">Step 2: Compare Records</span></h3><p>Match invoice details, taxable values, GST amounts, and vendor information across all records.</p><h3><span style=\"color: rgb(199, 21, 133);\">Step 3: Identify Mismatches</span></h3><p>Identify and review missing invoices, inaccurate tax calculations, duplicate records, and inconsistencies in GST return filings.</p><h3><span style=\"color: rgb(199, 21, 133);\">Step 4: Resolve Differences</span></h3><p>Coordinate with vendors, update accounting records, and make necessary corrections in GST returns.</p><h3><span style=\"color: rgb(199, 21, 133);\">Step 5: File Accurate Returns</span></h3><p>After reconciliation, submit GST returns with confidence and maintain proper documentation for future audits. </p><h2><strong style=\"color: rgb(0, 128, 0);\">How <a href=\"https://k-seva.com/\" rel=\"noopener noreferrer\" target=\"_blank\">K-Seva </a>Helps with GST Reconciliation</strong></h2><p>At K-Seva GST Reconciliation Services, businesses receive professional assistance in matching GST records, verifying ITC eligibility, identifying discrepancies, and maintaining compliance with GST regulations. The service helps reduce manual effort, improve accuracy, and streamline tax management for businesses of all sizes.</p><h2><strong style=\"color: rgb(0, 128, 0);\">Conclusion</strong></h2><p>GST reconciliation is an essential part of effective tax compliance and financial management. Regular reconciliation helps businesses avoid errors, claim accurate Input Tax Credit, improve cash flow, and stay compliant with GST regulations. By adopting a systematic reconciliation process, organizations can reduce compliance risks and focus on business growth while maintaining accurate financial records. </p><p><br></p>', '20260601114011_featured_Add-a-heading-59.png', '', 'Ensure accurate GST compliance with GST reconciliation services. Identify mismatches, verify ITC claims, and maintain error-free GST records.', 'GST Reconciliation, GST Reconciliation Services, GST Return Reconciliation, GSTR-2B Reconciliation, GSTR-1 Reconciliation, Input Tax Credit (ITC), GST Compliance, GST Filing Services, Invoice Matching, Purchase Register Reconciliation, Sales Register Reconciliation, GST Audit Support, Tax Credit Verification, GST Record Management, GST Return Accuracy, Business Tax Compliance, Vendor Reconciliation, GST Consultancy Services, ITC Claim Verification, GST Tax Management, Financial Record Reconciliation, GST Solutions, GST Accounting Services, GST Compliance Management, K-Seva GST Services.', 'krajeshk', '2026-06-01 11:27:00', 44, 0.0, 0, NULL, 1, 1, '2026-06-01 11:40:11', '2026-06-08 18:05:09'),
(17, 'Loan EMI Payment: A Complete Guide to Timely and Hassle-Free Repayments', 'loan-emi-payment-a-complete-guide-to-timely-and-hassle-free-repayments', 'blog', '<h1><span style=\"color: rgb(128, 0, 128);\">Loan EMI Payment: A Complete Guide to Timely and Hassle-Free Repayments</span></h1><p>Managing loan repayments efficiently is an essential part of maintaining financial stability. Whether you have a personal loan, home loan, vehicle loan, education loan, or business loan, paying your Equated Monthly Installments (EMIs) on time helps maintain a healthy credit profile and avoids unnecessary penalties. With the rise of digital financial services, loan EMI payments have become faster, safer, and more convenient than ever before. </p><h2><span style=\"color: rgb(75, 0, 130);\">What is a Loan EMI?</span></h2><p>EMI (Equated Monthly Installment) is a fixed amount paid by a borrower to a lender every month until the loan is fully repaid. Each EMI consists of two components:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Principal Amount</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Interest Amount</li></ol><p>The EMI amount depends on factors such as the loan amount, interest rate, and repayment tenure.</p><h2><span style=\"color: rgb(75, 0, 130);\">Why Timely EMI Payments Matter</span></h2><p>Making EMI payments on or before the due date offers several benefits:</p><h3><span style=\"color: rgb(220, 20, 60);\">Maintains a Good Credit Score</span></h3><p>Regular loan repayments demonstrate financial discipline and positively impact your credit history. Timely EMI payments help borrowers build and maintain a strong credit profile. </p><h3><span style=\"color: rgb(220, 20, 60);\">Avoids Late Payment Charges</span></h3><p>Missing EMI due dates can result in penalties, bounce charges, and additional interest costs.</p><h3><span style=\"color: rgb(220, 20, 60);\">Reduces Financial Stress</span></h3><p>Scheduled and timely payments help borrowers manage their finances effectively without accumulating debt.</p><h3><span style=\"color: rgb(220, 20, 60);\">Improves Future Loan Eligibility</span></h3><p>Lenders often review repayment history when assessing new loan applications. A good repayment record can improve eligibility for future credit facilities.</p><h2><span style=\"color: rgb(75, 0, 130);\">Popular Methods for Loan EMI Payment</span></h2><p>Modern digital platforms provide multiple options for convenient EMI payments.</p><h3><span style=\"color: rgb(220, 20, 60);\">Auto-Debit Facility</span></h3><p>Many lenders offer automatic EMI deduction through bank accounts using standing instructions or NACH mandates. The EMI is automatically debited from the linked bank account on the scheduled due date, helping borrowers avoid missed payments.</p><h3><span style=\"color: rgb(220, 20, 60);\">Net Banking</span></h3><p>Borrowers can log into their bank accounts and make EMI payments directly through internet banking services. </p><h3><span style=\"color: rgb(220, 20, 60);\">Mobile Banking Apps</span></h3><p>Most banks and financial institutions provide mobile applications that allow users to pay EMIs securely from their smartphones. </p><h3><span style=\"color: rgb(220, 20, 60);\">UPI Payments</span></h3><p>UPI-based payments offer instant and secure EMI transactions through supported payment platforms. </p><h3><span style=\"color: rgb(220, 20, 60);\">Debit and Credit Cards</span></h3><p>Several loan providers allow EMI payments through debit cards and selected credit cards for added convenience. </p><h3><span style=\"color: rgb(220, 20, 60);\">Digital Payment Platforms</span></h3><p>Online payment portals enable borrowers to repay EMIs from anywhere and often provide payment reminders and transaction history features. </p><h2><span style=\"color: rgb(75, 0, 130);\">Steps to Make an Online Loan EMI Payment</span></h2><p>The process is usually simple and user-friendly:</p><ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Log in to the payment portal or banking platform.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Select the Loan EMI Payment option.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Enter the loan account number and required details.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Verify the payable amount.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Choose a payment method.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Complete the transaction securely.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Save the payment receipt for future reference. </li></ol><h2><span style=\"color: rgb(75, 0, 130);\">Common Reasons for EMI Payment Failure</span></h2><p>Loan EMI payments may occasionally fail due to:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Insufficient account balance</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Incorrect loan account details</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Expired debit or credit cards</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Technical issues during payment processing</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Inactive auto-debit mandates</li></ol><p>Borrowers should ensure sufficient funds are available before the due date to avoid bounce charges and penalties. </p><h2><span style=\"color: rgb(75, 0, 130);\">Tips for Managing Loan EMIs Efficiently</span></h2><h3><span style=\"color: rgb(220, 20, 60);\">Set Payment Reminders</span></h3><p>Use mobile alerts, calendars, or banking notifications to remember due dates.</p><h3><span style=\"color: rgb(220, 20, 60);\">Maintain Adequate Balance</span></h3><p>Ensure your bank account has enough funds before the EMI deduction date.</p><h3><span style=\"color: rgb(220, 20, 60);\">Review Loan Statements Regularly</span></h3><p>Monitor transactions and repayment records for accuracy.</p><h3><span style=\"color: rgb(220, 20, 60);\">Consider Partial Prepayments</span></h3><p>When financially possible, partial prepayments can reduce the outstanding principal and lower overall interest costs. Many borrowers choose this strategy to shorten loan tenure and save money. </p><h3><span style=\"color: rgb(220, 20, 60);\">Keep Payment Records</span></h3><p>Maintain digital or printed receipts for future reference and dispute resolution if required.</p><h2><span style=\"color: rgb(75, 0, 130);\">Advantages of Online Loan EMI Payments</span></h2><p>Online EMI payment solutions offer several benefits:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Fast and secure transactions</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>24/7 accessibility</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Multiple payment options</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Instant payment confirmation</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Reduced paperwork</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Easy transaction tracking</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Automated payment reminders </li></ol><h2><span style=\"color: rgb(75, 0, 130);\">How K-Seva Helps with Loan EMI Payments</span></h2><p>K-Seva offers convenient digital financial services that help customers manage various payment requirements efficiently. Through a simple and user-friendly platform, users can access loan-related services and make repayments conveniently without visiting multiple locations. </p><h2><span style=\"color: rgb(75, 0, 130);\">Conclusion</span></h2><p>Timely loan EMI payments play a crucial role in maintaining financial health and building a positive credit history. With multiple digital payment options available today, borrowers can conveniently repay EMIs through online banking, mobile apps, UPI, auto-debit facilities, and digital payment platforms. By staying organized and making payments on time, individuals can avoid penalties, improve creditworthiness, and successfully manage their loan obligations.</p>', '20260603180137_featured_21f04d02-212d-4a6b-a025-f4b0cf95cbff.png', '', 'Learn everything about Loan EMI Payment, repayment methods, benefits, online payment options, and tips for managing EMIs efficiently.', 'Loan EMI Payment, Online EMI Payment, Loan Repayment Online, EMI Payment Guide, Personal Loan EMI Payment, Home Loan EMI Payment, Education Loan EMI, Auto Debit EMI, EMI Payment Online India, Loan Repayment Methods, Digital EMI Payment, Loan Account Payment, EMI Management Tips, Loan Payment Services, EMI Due Date Management', 'krajeshk', '2026-06-03 17:52:00', 34, 0.0, 0, NULL, 1, 1, '2026-06-03 18:01:37', '2026-06-04 12:56:23');
INSERT INTO `tbl_website_blog` (`id`, `blog_title`, `slug`, `blog_category`, `blog_content`, `featured_image`, `gallery_images`, `meta_description`, `meta_keywords`, `author_name`, `publish_date`, `views_count`, `avg_rating`, `total_ratings`, `reviews_json`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(18, 'Driving License Services – Simple, Fast & Hassle-Free', 'driving-license-services-simple-fast-hassle-free', 'blog', '<h1><span style=\"color: rgb(220, 20, 60);\">Driving License Services – Simple, Fast &amp; Hassle-Free</span></h1><p>A Driving License is one of the most important documents for every vehicle owner and driver in India. It serves as legal authorization to operate a motor vehicle on public roads while also acting as a widely accepted identity proof. Whether you are applying for a new license, renewing an existing one, or updating your details, professional assistance can make the process faster and more convenient.</p><p>K-Seva offers reliable Driving License services designed to help citizens complete various licensing procedures with ease and accuracy. Through a streamlined process, applicants can receive guidance for documentation, application submission, status tracking, and other related services. </p><h2><span style=\"color: rgb(75, 0, 130);\">What is a Driving License?</span></h2><p>A Driving License is an official document issued by the Regional Transport Office (RTO) that permits an individual to drive specific categories of vehicles. Driving without a valid license is a violation of traffic regulations and may result in penalties.</p><p>Obtaining a valid license demonstrates that the driver has met the required standards of road safety and vehicle operation. </p><h2><span style=\"color: rgb(75, 0, 130);\">Driving License Services Available</span></h2><h3>1. New Driving License Application</h3><p>Individuals who have completed the learner\'s license process can apply for a permanent driving license. The application typically includes document verification and a driving test conducted by the concerned RTO. </p><h3>2. Learner\'s License Assistance</h3><p>First-time drivers can apply for a learner\'s license, which allows them to practice driving before obtaining a permanent license. The learner\'s license is generally issued after passing a basic road safety test. </p><h3>3. Driving License Renewal</h3><p>Driving licenses have a validity period and must be renewed before expiry. Timely renewal helps avoid penalties and ensures uninterrupted legal driving privileges. </p><h3>4. Duplicate Driving License</h3><p>If your license is lost, stolen, or damaged, you can apply for a duplicate copy through the appropriate process and documentation. </p><h3>5. Correction and Update Services</h3><p>Applicants can request updates for:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Name correction</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Address change</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Date of birth correction</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Other personal detail modifications</li></ol><p>These updates help ensure that the license information remains accurate and up to date. </p><h2><span style=\"color: rgb(75, 0, 130);\">Documents Commonly Required</span></h2><p>The exact requirements may vary by state and service type, but commonly required documents include:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Aadhaar Card</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>PAN Card (if applicable)</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Address Proof</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Age Proof</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Passport-size Photographs</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Existing Driving License (for renewal or correction)</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Mobile Number for OTP verification</li></ol><p>Supporting documents are generally required for verification during the application process. </p><h2><span style=\"color: rgb(75, 0, 130);\">Benefits of Using K-Seva Driving License Services</span></h2><h3>Convenient Application Support</h3><p>Get assistance throughout the application process, reducing errors and delays.</p><h3>Faster Documentation Process</h3><p>Proper guidance helps ensure that all required documents are submitted correctly.</p><h3>Status Tracking Assistance</h3><p>Applicants can stay informed about the progress of their applications.</p><h3>Multiple License-Related Services</h3><p>From new applications to renewals and corrections, various services can be accessed through a single platform.</p><h3>Time-Saving Solution</h3><p>Avoid unnecessary visits and receive professional support for completing formalities efficiently. </p><h2><span style=\"color: rgb(75, 0, 130);\">Why Choose K-Seva?</span></h2><p>K-Seva is committed to simplifying digital and government-related services for citizens. With a customer-focused approach, transparent processes, and reliable support, K-Seva helps users complete important documentation services quickly and conveniently. The platform aims to make essential services accessible to individuals across urban and rural areas. </p><h2><span style=\"color: rgb(75, 0, 130);\">Conclusion</span></h2><p>A valid Driving License is essential for legal and safe driving. Whether you need a new license, renewal, duplicate copy, or information update, K-Seva provides a convenient solution to help you complete the process smoothly. With proper guidance and support, applicants can save time, avoid common mistakes, and ensure successful completion of their Driving License requirements.</p>', '20260604190403_featured_Add-a-heading-61.png', '', 'Get hassle-free Driving License services including new applications, renewals, duplicate licenses, and updates with fast and reliable support.', 'Driving License Services, New Driving License Application, Driving License Renewal, Duplicate Driving License, Learner License Assistance, Driving License Update, Online Driving License Services, RTO Services, License Renewal Online, Driving License Correction, Vehicle License Services, Digital Driving License Support,', 'krajeshk', '2026-06-04 18:54:00', 6, 0.0, 0, NULL, 1, 1, '2026-06-04 19:04:03', '2026-06-05 17:24:19'),
(19, 'Mobile Recharge Services: Fast, Convenient, and Essential for Staying Connected', 'mobile-recharge-services-fast-convenient-and-essential-for-staying-connected', 'blog', '<h1><a href=\"https://k-seva.com/blog\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(255, 69, 0);\">Mobile Recharge Services: Fast, Convenient, and Essential for Staying Connected</a></h1><p>In today’s digital world, mobile phones have become an essential part of everyday life. Whether for communication, online banking, education, entertainment, or business activities, uninterrupted mobile connectivity is crucial. Mobile recharge services make it easy for users to maintain their prepaid or postpaid connections anytime and from anywhere. Platforms like K-Seva simplify the recharge process by offering quick, secure, and convenient mobile recharge solutions. </p><h2><span style=\"color: rgb(138, 43, 226);\">What Is Mobile Recharge?</span></h2><p>Mobile recharge is the process of adding balance, talk time, data, or validity to a mobile number. It allows users to continue making calls, sending messages, and accessing internet services without interruption.</p><p>Mobile recharges are generally available for:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Prepaid mobile connections</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Postpaid bill payments</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Data pack recharges</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>International roaming packs</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Special validity plans</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>SMS packs</li></ol><h2><span style=\"color: rgb(138, 43, 226);\">Why Mobile Recharge Services Are Important</span></h2><h3>Instant Connectivity</h3><p>Mobile recharge services ensure that users stay connected without visiting a physical telecom store. Transactions are completed within seconds, providing immediate service activation. </p><h3>Convenience and Accessibility</h3><p>Users can recharge their mobile numbers at any time through digital service platforms, making the process simple and hassle-free.</p><h3>Multiple Operator Support</h3><p>Modern recharge platforms support major telecom operators, allowing users to recharge different networks from a single platform. </p><h3>Secure Transactions</h3><p>Digital recharge services use secure payment systems to protect customer information and ensure reliable transactions. </p><h2><span style=\"color: rgb(138, 43, 226);\">Features of </span><a href=\"https://k-seva.com/blog\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(138, 43, 226);\">K-Seva</a><span style=\"color: rgb(138, 43, 226);\"> Mobile Recharge Services</span></h2><p>K-Seva offers mobile recharge as part of its comprehensive digital services ecosystem, enabling users and service centers to provide quick and reliable recharge facilities. </p><p>Key features include:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Instant recharge processing</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Support for multiple telecom operators</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>User-friendly platform</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Secure payment system</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Quick transaction confirmation</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Suitable for retailers and service centers</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Convenient digital access</li></ol><h2><span style=\"color: rgb(138, 43, 226);\">Benefits for Retailers and Service Centers</span></h2><p>Mobile recharge services can also become an additional source of income for retailers and online service centers.</p><h3>Additional Revenue Opportunity</h3><p>Every recharge transaction can generate commission earnings, helping retailers increase profitability. </p><h3>Increased Customer Footfall</h3><p>Customers frequently visit recharge points, creating opportunities to offer additional services such as bill payments, money transfer, AEPS, and insurance services.</p><h3>Easy Business Expansion</h3><p>Recharge services require minimal investment and can be integrated with existing digital service operations.</p><h2><span style=\"color: rgb(138, 43, 226);\">Steps to Perform a Mobile Recharge</span></h2><h3>Step 1: Select the Mobile Operator</h3><p>Choose the telecom service provider associated with the mobile number.</p><h3>Step 2: Enter Mobile Number</h3><p>Provide the correct mobile number to avoid recharge failures.</p><h3>Step 3: Choose a Recharge Plan</h3><p>Select a suitable plan based on talk time, data requirements, and validity period.</p><h3>Step 4: Complete Payment</h3><p>Make payment through available digital payment methods.</p><h3>Step 5: Receive Confirmation</h3><p>The recharge is processed instantly, and a confirmation message is sent to the user. </p><h2><span style=\"color: rgb(138, 43, 226);\">Tips for Choosing the Right Recharge Plan</span></h2><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Evaluate monthly data usage.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Compare available operator plans.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Check validity periods carefully.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Consider unlimited calling benefits.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Review SMS and additional service benefits.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Choose plans that align with your budget.</li></ol><h2><span style=\"color: rgb(138, 43, 226);\">Future of Mobile Recharge Services</span></h2><p>The mobile recharge industry continues to evolve with digital payment innovations and integrated service platforms. As smartphone usage and internet penetration increase, demand for fast and secure recharge services is expected to grow further. Digital service providers are increasingly offering recharge, bill payments, banking services, and travel bookings through a single platform, creating a seamless customer experience. </p><h2><span style=\"color: rgb(138, 43, 226);\">Conclusion</span></h2><p>Mobile recharge services have become an indispensable part of modern digital life. They offer convenience, speed, security, and accessibility for both consumers and retailers. Whether you need a prepaid top-up, data pack, or postpaid bill payment, reliable recharge platforms help ensure uninterrupted connectivity. With integrated digital service platforms like K-Seva, users can access mobile recharge services quickly while enjoying a wide range of additional financial and utility services.</p>', '20260605180436_featured_1a2830c8-a6cc-48f8-8e18-eb496f275431.png', '', 'Recharge your mobile instantly with secure and convenient mobile recharge services. Enjoy quick top-ups, data packs, and seamless connectivity anytime.', 'Mobile Recharge, Online Mobile Recharge, Prepaid Recharge, Postpaid Bill Payment, Mobile Top-Up, Instant Recharge, Data Pack Recharge, Telecom Recharge, Recharge Services, Online Recharge Platform, Mobile Bill Payment, Recharge Business, Digital Recharge Services, Multi Operator Recharge, Mobile Connectivity', 'krajeshk', '2026-06-05 17:58:00', 9, 0.0, 0, NULL, 1, 1, '2026-06-05 18:04:36', '2026-06-08 09:56:16'),
(20, 'Understanding Insurance Premiums: A Complete Guide for Policyholders', 'understanding-insurance-premiums-a-complete-guide-for-policyholders', 'blog', '<h1><span style=\"color: rgb(13, 63, 95);\">Understanding Insurance Premiums: A Complete Guide for Policyholders</span></h1><p>Insurance plays a crucial role in protecting individuals and families from financial uncertainties. Whether it is health, life, motor, travel, or property insurance, paying an insurance premium ensures that you remain financially covered against unexpected events. Understanding how insurance premiums work can help you make informed decisions and choose the right coverage for your needs.</p><p>According to insurance industry resources, insurance premiums vary based on factors such as the type of policy, coverage amount, risk profile, age, and claim history. Health, life, motor, travel, and other forms of insurance provide financial protection against different types of risks. </p><h2><span style=\"color: rgb(0, 128, 0);\">What Is an Insurance Premium?</span></h2><p>An insurance premium is the amount paid by a policyholder to an insurance company in exchange for coverage. Premiums can be paid monthly, quarterly, semi-annually, or annually, depending on the policy terms.</p><p>As long as the premium is paid on time, the insurance policy remains active and provides financial protection against covered risks.</p><h2><span style=\"color: rgb(0, 128, 0);\">Why Insurance Premiums Matter</span></h2><p>Paying insurance premiums regularly offers several benefits:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Continuous financial protection</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Peace of mind during emergencies</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Access to insurance benefits and claims</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Protection against unexpected expenses</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Compliance with mandatory insurance requirements for certain assets</li></ol><p>Missing premium payments may result in policy lapse, leading to loss of coverage and benefits.</p><h2><span style=\"color: rgb(0, 128, 0);\">Factors That Influence Insurance Premiums</span></h2><h3><span style=\"color: rgb(3, 169, 244);\">1. Type of Insurance</span></h3><p>Different insurance products have different premium structures. Health insurance, life insurance, motor insurance, and travel insurance are priced based on their specific coverage and risk factors. </p><h3><span style=\"color: rgb(3, 169, 244);\">2. Coverage Amount</span></h3><p>Policies with higher coverage limits generally have higher premiums because the insurer assumes greater financial responsibility.</p><h3><span style=\"color: rgb(3, 169, 244);\">3. Age of the Policyholder</span></h3><p>For health and life insurance, age plays a significant role. Younger individuals often receive lower premium rates compared to older applicants due to lower risk levels. </p><h3><span style=\"color: rgb(3, 169, 244);\">4. Health and Medical History</span></h3><p>Health insurance premiums may depend on existing medical conditions, lifestyle habits, and overall health status. Individuals with higher health risks may pay higher premiums. </p><h3><span style=\"color: rgb(3, 169, 244);\">5. Claim History</span></h3><p>A history of frequent claims can influence premium calculations during policy renewal.</p><h3><span style=\"color: rgb(3, 169, 244);\">6. Policy Add-Ons</span></h3><p>Additional benefits or riders such as critical illness coverage, accidental coverage, or zero depreciation protection can increase premium costs.</p><h2><span style=\"color: rgb(0, 128, 0);\">Types of Insurance Premium Payments</span></h2><h3><span style=\"color: rgb(3, 169, 244);\">Annual Premium</span></h3><p>The policyholder pays the entire premium amount once a year.</p><h3><span style=\"color: rgb(3, 169, 244);\">Monthly Premium</span></h3><p>Premiums are divided into smaller monthly installments, making payments more manageable.</p><h3><span style=\"color: rgb(3, 169, 244);\">Quarterly Premium</span></h3><p>Payments are made every three months.</p><h3><span style=\"color: rgb(3, 169, 244);\">Semi-Annual Premium</span></h3><p>Premiums are paid twice a year.</p><p>Policyholders can choose the payment frequency that best suits their financial situation.</p><h2><span style=\"color: rgb(0, 128, 0);\">Benefits of Paying Insurance Premiums on Time</span></h2><h3><span style=\"color: rgb(3, 169, 244);\">Uninterrupted Coverage</span></h3><p>Timely payments ensure that your insurance policy remains active and effective.</p><h3><span style=\"color: rgb(3, 169, 244);\">Faster Claim Processing</span></h3><p>Active policies make it easier to access claim benefits when needed.</p><h3><span style=\"color: rgb(3, 169, 244);\">No Penalties or Lapses</span></h3><p>Paying on time helps avoid policy cancellation and reinstatement charges.</p><h3><span style=\"color: rgb(3, 169, 244);\">Long-Term Financial Security</span></h3><p>Consistent premium payments provide ongoing protection against major financial risks.</p><h2><span style=\"color: rgb(0, 128, 0);\">Tips to Manage Insurance Premium Payments</span></h2><h3><span style=\"color: rgb(3, 169, 244);\">Compare Insurance Plans</span></h3><p>Review multiple insurance options before purchasing a policy to find the best balance between coverage and cost.</p><h3><span style=\"color: rgb(3, 169, 244);\">Choose Suitable Coverage</span></h3><p>Avoid paying for unnecessary features while ensuring adequate protection.</p><h3><span style=\"color: rgb(3, 169, 244);\">Maintain a Good Claim Record</span></h3><p>A responsible claim history can help keep future premiums more affordable.</p><h3><span style=\"color: rgb(3, 169, 244);\">Set Payment Reminders</span></h3><p>Automated reminders or auto-debit facilities can help prevent missed payments.</p><h3><span style=\"color: rgb(3, 169, 244);\">Review Policies Regularly</span></h3><p>Periodically reassess your insurance needs to ensure your coverage remains relevant.</p><h2><span style=\"color: rgb(0, 128, 0);\">Common Mistakes to Avoid</span></h2><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Delaying premium payments</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Choosing insufficient coverage</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Ignoring policy exclusions</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Not updating personal information</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Overlooking renewal notices</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Purchasing policies without understanding terms and conditions</li></ol><h2><span style=\"color: rgb(0, 128, 0);\">How Digital Platforms Simplify Insurance Premium Payments</span></h2><p>Modern digital service platforms make insurance premium payments convenient and secure. Users can:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Pay premiums online</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Renew policies quickly</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Access policy information instantly</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Receive payment confirmations digitally</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Manage multiple insurance policies from a single platform</li></ol><p>Digital payment solutions help save time while ensuring continuous coverage.</p><h2><span style=\"color: rgb(0, 128, 0);\">Conclusion</span></h2><p>Insurance premiums are the foundation of every insurance policy. Regular and timely premium payments help maintain financial protection for you and your family while ensuring access to policy benefits when needed. By understanding the factors that affect premiums and managing payments wisely, policyholders can enjoy comprehensive coverage and greater financial security.</p><p>Whether you are purchasing a new policy or renewing an existing one, taking the time to evaluate your insurance needs and premium options can help you maximize the value of your coverage while protecting your future.</p><p><br></p>', '20260606175604_featured_Add-a-heading-66.png', '', 'Learn about insurance premiums, payment options, coverage benefits, and factors affecting policy costs for better protection.', 'insurance premium, insurance policy, premium payment, health insurance, life insurance, motor insurance, insurance coverage, policy renewal, insurance benefits, online premium payment, insurance protection, financial security, insurance plans, premium calculator, insurance services', 'krajeshk', '2026-06-06 17:38:00', 6, 0.0, 0, NULL, 1, 1, '2026-06-06 17:56:04', '2026-06-09 05:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_website_news`
--

CREATE TABLE `tbl_website_news` (
  `id` int NOT NULL,
  `news_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `news_category` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `news_content` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `featured_image` text COLLATE utf8mb4_general_ci,
  `gallery_images` text COLLATE utf8mb4_general_ci,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `author_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `publish_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `views_count` int DEFAULT '0',
  `is_featured` tinyint DEFAULT '0',
  `status` tinyint DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_website_news`
--

INSERT INTO `tbl_website_news` (`id`, `news_title`, `slug`, `news_category`, `news_content`, `featured_image`, `gallery_images`, `meta_description`, `meta_keywords`, `author_name`, `publish_date`, `views_count`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Digital Financial Services Drive India’s Next Growth Phase', 'digital-financial-services-drive-india-s-next-growth-phase', 'news', '<h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\">Digital Financial Services Drive India’s Next Growth Phase</span></h2><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\">India’s financial services industry is rapidly evolving as digital banking, AI-powered lending, and online investment platforms continue to reshape customer experiences. Financial institutions and fintech companies are increasingly adopting advanced technologies to offer faster loan approvals, personalized financial solutions, and seamless digital transactions. Experts believe this transformation is helping millions of customers gain easier access to banking, insurance, and investment services across urban and rural regions.</span></p><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\">Recent industry reports highlight that digital lending and embedded finance solutions are becoming major growth drivers in the financial sector. Mobile-based financial services, UPI transactions, and AI-driven customer onboarding systems are allowing customers to manage savings, investments, and payments more efficiently than ever before. Financial companies are also focusing on improving transparency, data security, and customer trust while expanding digital offerings.</span></p><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\">Industry analysts expect strong growth in India’s financial ecosystem as banks, NBFCs, and fintech firms continue investing in technology-led services. Rising demand for flexible credit options, wealth management solutions, and digital payment systems is creating new opportunities for financial service providers. Experts also predict that AI-powered financial inclusion and smart digital platforms will play a major role in supporting small businesses, first-time borrowers, and underserved communities in the coming years.</span></p>', '20260515170842_featured_4ef9e17e-5d2e-4457-8851-71296f532357.png', '', 'Digital financial services are transforming India’s economy through smart lending, online banking, secure investments, and technology-driven financial solutions', 'digital financial services, online banking, smart lending, fintech India, digital payments, financial technology, investment growth, secure financial solutions, AI-powered finance, India fintech growth, digital economy, wealth management, financial innovation, banking technology, financial services news', 'krajeshk', '2026-05-15 17:04:00', 14, 0, 1, '2026-05-15 17:08:42', '2026-06-07 09:21:03'),
(2, 'Digital Banking Expansion Boosts Demand for Business Correspondent Services in India', 'digital-banking-expansion-boosts-demand-for-business-correspondent-services-in-india', 'news', '<h2><strong style=\"background-color: rgb(255, 255, 255); color: rgb(27, 94, 142);\">Digital Banking Expansion Boosts Demand for Business Correspondent Services in India</strong></h2><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\">Business Correspondent (BC) services are witnessing rapid growth across India as banks continue expanding financial access to rural and semi-urban regions. Industry experts report that increasing adoption of digital payments, Aadhaar-enabled banking, and micro ATM services has significantly strengthened the BC network. Banking institutions are partnering with local entrepreneurs and retail operators to provide essential financial services closer to customers who may not have easy access to traditional branches.</span></p><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\">Financial analysts believe that BC outlets are playing a major role in improving financial inclusion by offering services such as cash deposits, withdrawals, money transfers, account opening assistance, and bill payments. The rise in smartphone usage and digital banking awareness has also encouraged more customers to rely on nearby BC points for everyday banking activities. Experts say this model is helping reduce banking gaps in underserved communities while generating self-employment opportunities for local business owners.</span></p><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\">The Indian digital banking ecosystem is expected to grow further as both public and private sector banks invest in branchless banking infrastructure and customer-friendly financial technology. Industry observers suggest that the Business Correspondent model will remain an important part of India’s financial inclusion strategy, especially in areas where physical banking infrastructure is still limited. With growing demand for accessible banking services, BC operators are emerging as key contributors to the country’s digital financial transformation.</span></p>', '20260517153916_featured_59b805dd-2393-4281-836e-907af1ce89d1.png', '', 'Business Correspondent services are growing in India as digital banking, micro ATM usage, and financial inclusion expand across rural and urban areas.', 'Business Correspondent news India, BC services India, digital banking news, micro ATM services, financial inclusion India, Aadhaar banking services, banking correspondent model, rural banking India, branchless banking, digital payment services, banking franchise opportunities, fintech India, banking sector news, financial services India', 'krajeshk', '2026-05-17 15:36:00', 36, 1, 1, '2026-05-17 15:39:16', '2026-06-04 22:04:06'),
(3, 'Online Income Tax Filing Services See Massive Growth Ahead of Tax Season', 'online-income-tax-filing-services-see-massive-growth-ahead-of-tax-season', 'news', '<h2><span style=\"color: rgb(0, 128, 0);\">Online Income Tax Filing Services See Massive Growth Ahead of Tax Season</span></h2><p>As the income tax filing season approaches, online tax filing platforms and financial service providers are witnessing a sharp increase in demand across India. Salaried employees, freelancers, and business owners are increasingly shifting toward digital tax solutions for faster filing, expert guidance, and quicker refund processing. Financial experts say taxpayers now prefer hassle-free online services that simplify complex tax procedures and reduce filing errors.</p><p>Industry professionals report that the growing awareness about tax compliance and financial documentation is encouraging more individuals to file Income Tax Returns on time. Many taxpayers are also seeking professional assistance to maximize deductions, avoid notices, and ensure accurate submission of returns. With digital services expanding rapidly, online ITR filing has become more accessible even in smaller towns and rural areas.</p><p>Experts believe the demand for income tax consultation and filing support will continue to rise in 2026 as taxpayers focus more on financial planning and compliance. Financial platforms offering secure filing systems, expert support, and fast processing are expected to play a major role in transforming how individuals and businesses manage taxation in the digital era.</p>', '20260518184836_featured_11fe7df9-a8d4-4bc6-9a20-bd9ca4442575.png', '', 'Discover the latest trends in online income tax filing services as demand rises for expert tax support, quick processing, and hassle-free ITR filing.', 'online income tax filing news, ITR filing trends 2026, income tax filing services India, tax filing news, digital tax services, online ITR filing updates, tax refund processing, expert tax support India, income tax return filing trends, tax season updates, financial compliance news, hassle-free tax filing, online tax consultation, tax services growth India', 'krajeshk', '2026-05-18 18:47:00', 12, 1, 1, '2026-05-18 18:48:36', '2026-06-06 08:51:48'),
(4, 'Businesses Prioritizing Compliance Services Amid Rising Regulatory Changes', 'businesses-prioritizing-compliance-services-amid-rising-regulatory-changes', 'news', '<h2><span style=\"color: rgb(255, 69, 0);\">Businesses Prioritizing Compliance Services Amid Rising Regulatory Changes</span></h2><p>Businesses across India are increasingly investing in professional compliance services as regulatory requirements continue to evolve in 2026. Startups, SMEs, and established companies are seeking expert support for GST filings, company registrations, annual returns, and legal documentation to avoid penalties and maintain smooth operations. Industry experts report that compliance management has become a critical part of business planning and financial stability.</p><p>With the rapid growth of digital business operations, companies are also focusing on strengthening data management, taxation accuracy, and regulatory transparency. Many organizations are adopting technology-driven compliance solutions to streamline documentation and automate filing processes. Compliance consultants are witnessing growing demand for trademark registration, MSME certification, and corporate legal support as businesses expand into competitive markets.</p><p>Financial and legal professionals believe that strong compliance practices improve investor confidence and business credibility. Companies maintaining accurate records and timely filings are finding it easier to secure funding, attract partnerships, and build customer trust. As government regulations become more structured and digitized, compliance services are expected to play a major role in supporting sustainable business growth across industries.</p><p><br></p>', '20260520130839_featured_a4d943ce-b9a6-422f-be4e-35e8ee4e2fc3.png', '', 'Businesses are increasingly adopting compliance services to manage legal filings, tax regulations, and corporate compliance efficiently.', 'compliance services news, business compliance trends, GST compliance updates, corporate compliance services, MSME registration news, legal compliance support, tax filing services, regulatory compliance India, trademark registration services, annual filing compliance, business legal updates, startup compliance services, corporate legal management, compliance solutions 2026', 'krajeshk', '2026-05-20 12:55:00', 22, 1, 1, '2026-05-20 13:08:39', '2026-05-30 06:36:27'),
(5, 'LLP Compliance Filings Increase as Businesses Focus on Legal Transparency', 'llp-compliance-filings-increase-as-businesses-focus-on-legal-transparency', 'news', '<h2><strong style=\"color: rgb(75, 0, 130);\">LLP Compliance Filings Increase as Businesses Focus on Legal Transparency</strong></h2><p>The number of LLP compliance filings across India has seen a noticeable rise as startups, SMEs, and professional firms focus more on maintaining legal transparency and regulatory compliance. Business owners are increasingly prioritizing timely filing of Form 11, Form 8, GST returns, and income tax returns to avoid penalties and maintain smooth operations. Compliance experts state that growing awareness about legal obligations is encouraging more LLPs to adopt proper financial reporting and documentation practices.</p><p>Industry professionals believe that digital filing systems introduced by the Ministry of Corporate Affairs (MCA) have simplified the compliance process for businesses. Online filing portals, automated reminders, and professional compliance services are helping LLPs complete annual filings more efficiently. Financial advisors also note that businesses maintaining proper compliance records often experience smoother loan approvals, investor confidence, and better banking relationships.</p><p>Experts predict that LLP compliance management services will continue to grow as businesses expand and regulatory monitoring becomes stricter. Many startups and small enterprises are now seeking professional support for tax filing, bookkeeping, and MCA submissions to reduce compliance risks. With increasing emphasis on corporate governance and financial transparency, LLP compliance is becoming a key part of long-term business sustainability in India.</p><p><br></p>', '20260521162757_featured_a77ef7a3-3094-4704-b802-8554ada68d01.png', '', 'LLP compliance filings are increasing as businesses focus on legal transparency, timely reporting, and regulatory compliance.', 'LLP compliance news, LLP filing increase, legal transparency India, LLP annual filings, MCA compliance news, business compliance updates, LLP regulations, startup compliance India, Form 11 filing, Form 8 filing, LLP tax filing, GST compliance, corporate governance India, LLP legal requirements, business transparency news', 'krajeshk', '2026-05-21 16:22:00', 23, 1, 1, '2026-05-21 16:27:57', '2026-06-09 00:36:44'),
(6, 'Growing Demand for ISO Certification Boosts Business Compliance Across India', 'growing-demand-for-iso-certification-boosts-business-compliance-across-india', 'news', '<h1><strong style=\"color: rgb(75, 0, 130);\">Growing Demand for ISO Certification Boosts Business Compliance Across India</strong></h1><p>Businesses across India are increasingly adopting ISO certification standards to strengthen operational quality, improve customer confidence, and expand market opportunities. Industry experts report that organizations from manufacturing, healthcare, IT, education, food processing, and logistics sectors are actively seeking ISO certification to meet growing customer expectations and international business requirements.</p><p>With competition rising across industries, companies are focusing more on quality assurance, process management, and regulatory compliance. ISO certification has become an important business tool that helps organizations establish credibility and maintain consistent operational standards. Many startups and small businesses are also recognizing the value of certification in building trust among clients, investors, and corporate partners.</p><p>According to market observers, ISO 9001 for Quality Management remains one of the most widely adopted certifications in India. At the same time, certifications related to environmental management, workplace safety, and information security are also gaining popularity as businesses prioritize sustainable and secure operations. Experts believe this trend reflects a broader shift toward professional business management and global quality standards.</p><p>Digital transformation has further simplified the certification process. Many consulting agencies and certification service providers now offer online documentation support, virtual audits, and digital compliance tracking systems. This has reduced the time required for certification and made the process more accessible for businesses located in smaller cities and developing industrial regions.</p><p>Government tenders and corporate procurement systems are also encouraging companies to obtain ISO certification. Several organizations now prefer working with certified vendors because ISO standards help ensure reliability, transparency, and operational consistency. As a result, businesses with ISO certification are often able to secure better commercial opportunities and improve their competitive position in the market.</p><p>Industry analysts note that customer awareness regarding product quality and safety has significantly increased in recent years. Consumers are paying closer attention to company standards, especially in sectors such as food production, healthcare, education, and technology services. ISO certification helps businesses demonstrate their commitment to maintaining high-quality systems and delivering dependable services.</p><p>Financial consultants and business advisors also highlight that ISO certification can improve internal efficiency by encouraging proper documentation, structured workflows, and risk management practices. Companies that implement ISO standards often experience better productivity, reduced operational errors, and improved employee accountability.</p><p>Experts predict that the demand for ISO certification services will continue to grow as Indian businesses expand into international markets and adopt more structured operational systems. Organizations that invest in recognized quality standards are expected to gain stronger customer loyalty and long-term business sustainability.</p><p>As industries continue evolving, ISO certification is emerging as a key factor in shaping modern business success. Companies that prioritize quality management and compliance are likely to benefit from greater market credibility, improved operational performance, and enhanced growth opportunities in both domestic and global markets.</p>', '20260522152028_featured_4f2cfb8e-bb16-4611-97d3-ef1a5a48508f.png', '', '', '', 'krajeshk', '2026-05-22 15:17:00', 10, 1, 1, '2026-05-22 15:20:28', '2026-06-08 02:09:47'),
(7, 'GST Department Increases Focus on Timely GSTR-10 Final Return Filing', 'gst-department-increases-focus-on-timely-gstr-10-final-return-filing', 'news', '<h1>GST Department Increases Focus on Timely GSTR-10 Final Return Filing</h1><p>Tax experts and business consultants have observed a growing focus by GST authorities on timely filing of GSTR-10 final returns by businesses cancelling their GST registrations. Officials are reportedly increasing scrutiny on taxpayers who fail to complete the final compliance process after business closure or GST surrender. Experts say this move is aimed at improving tax transparency and preventing pending liabilities from remaining unresolved.</p><p>According to GST professionals, many small businesses and startups often overlook GSTR-10 filing after discontinuing operations, assuming that cancellation of GST registration alone completes the process. However, tax authorities have clarified that filing the final return is mandatory to officially close GST obligations. Failure to comply may result in notices, penalties, and additional legal complications for taxpayers.</p><p>Business consultants have also reported an increase in demand for professional GST compliance services as companies seek assistance for smooth registration closure. Experts recommend maintaining accurate stock records, input tax credit details, and cancellation documents to avoid errors during final return filing. Digital GST service providers are now offering simplified filing support to help businesses complete the process efficiently.</p><p>Industry observers believe that growing awareness about GST compliance is encouraging more businesses to adopt professional filing practices. Financial advisors suggest that timely and accurate GSTR-10 filing not only helps businesses avoid penalties but also ensures hassle-free closure of tax registrations. With stricter compliance monitoring expected in the future, businesses are being advised to stay updated with GST filing requirements and deadlines.</p>', '20260528131404_featured_3c67501c-ff57-4469-919f-492f72784a29.png', '', 'GST authorities increase focus on timely GSTR-10 filing as businesses seek smooth GST registration closure.', 'GSTR-10 news, GST final return filing, GST compliance update, GST registration cancellation, GSTR-10 deadline, GST department news, final GST return, GST filing rules, business GST compliance, GST penalties, GST latest updates, tax compliance news, GST return filing services, GST registration closure, K-Seva GST services', 'krajeshk', '2026-05-28 13:12:00', 14, 1, 1, '2026-05-28 13:14:04', '2026-06-08 21:37:00'),
(8, 'Aadhaar ATM Services Expanding Digital Banking Access Across Rural India', 'aadhaar-atm-services-expanding-digital-banking-access-across-rural-india', 'news', '<h1><strong style=\"color: rgb(13, 63, 95);\">Aadhaar ATM Services Expanding Digital Banking Access Across Rural India</strong></h1><p>Aadhaar ATM and AEPS services are rapidly transforming banking accessibility across rural and semi-urban India. With the growing demand for simple and secure financial solutions, digital banking service providers are helping customers perform cash withdrawals, balance enquiries, and fund transfers using Aadhaar authentication and biometric verification. Industry experts say these services are improving financial inclusion by bringing banking facilities directly to villages and underserved regions.</p><p>Financial service centers and micro ATM operators are witnessing increased usage of Aadhaar-enabled transactions, especially among senior citizens, farmers, and daily wage workers. Customers no longer need to travel long distances to visit traditional bank branches or ATMs, as local service providers now offer essential banking support within their communities. The convenience of fingerprint-based authentication is also making digital banking easier for first-time users.</p><p>Experts believe Aadhaar ATM services are playing a major role in supporting India’s digital payment ecosystem. The use of biometric banking technology helps provide secure and fast transactions without requiring debit cards or complex banking procedures. As government initiatives continue promoting digital finance and cashless transactions, AEPS services are becoming an important tool for expanding banking reach across the country.</p><p>Industry analysts predict strong future growth for Aadhaar ATM and micro ATM services due to increasing awareness of digital banking solutions. Financial technology companies and service providers are focusing on improving accessibility, transaction speed, and customer convenience through advanced biometric systems. With rising adoption in rural India, Aadhaar-based banking services are expected to become a key part of the nation’s evolving financial infrastructure.</p>', '20260529173831_featured_Untitled-design-47.png', '', 'Aadhaar ATM services are expanding secure digital banking access with AEPS transactions across rural India.', 'Aadhaar ATM news, AEPS services India, digital banking rural India, micro ATM services, Aadhaar enabled payment system, biometric banking, rural banking solutions, cash withdrawal AEPS, financial inclusion India, secure digital banking, Aadhaar banking services, fintech rural India', 'krajeshk', '2026-05-29 17:31:00', 9, 1, 1, '2026-05-29 17:38:31', '2026-06-03 18:06:52'),
(9, 'Travel Industry Sees Strong Growth as Demand for Domestic and International Tours Rises', 'travel-industry-sees-strong-growth-as-demand-for-domestic-and-international-tours-rises', 'news', '<h1><span style=\"color: rgb(178, 34, 34);\">Travel Industry Sees Strong Growth as Demand for Domestic and International Tours Rises</span></h1><p>The travel and tourism sector is experiencing a significant surge as more people prioritize vacations, pilgrimage journeys, and international travel experiences. Industry experts report that increasing disposable incomes, improved transportation networks, and digital booking platforms are encouraging travelers to explore new destinations with greater convenience. Travel agencies are witnessing growing demand for customized tour packages that offer flexibility, affordability, and personalized experiences for families, couples, and business travelers.</p><p>Domestic tourism continues to remain a major growth driver, with popular destinations such as Goa, Kerala, Kashmir, Manali, and spiritual centers attracting millions of visitors. Tour operators are introducing all-inclusive travel packages that combine transportation, accommodation, sightseeing, and local experiences. The rise of weekend getaways and short holiday packages has also contributed to increased travel activity across the country, benefiting hotels, transport providers, and local tourism businesses.</p><p>International travel bookings are also showing strong momentum as travelers seek global destinations for leisure, education, and business purposes. Countries such as Dubai, Singapore, Thailand, Maldives, and various European destinations remain highly popular among Indian travelers. Travel agencies are expanding services by offering visa assistance, travel insurance, and customized itineraries, making overseas travel more accessible and hassle-free than ever before.</p><p>Industry analysts believe that the future of the travel sector remains highly promising, supported by technological advancements, growing consumer confidence, and increasing demand for personalized travel experiences. As travelers continue to seek memorable and stress-free journeys, professional tour and travel service providers are expected to play an increasingly important role in shaping the next phase of tourism growth.</p>', '20260530181334_featured_Untitled-design-48.png', '', 'Travel demand is rising as domestic and international tour bookings grow, driving expansion in tourism, holiday packages, and travel services.', 'Travel Industry News, Tourism Growth, Tour Packages, Travel Trends, Holiday Packages, Domestic Tourism, International Travel, Travel Services, Tourism Industry, Vacation Planning, Travel Agency News, Tourism Market Growth, Travel Booking Trends, Customized Tour Packages, Travel Industry Updates.', 'krajeshk', '2026-05-30 18:05:00', 17, 1, 1, '2026-05-30 18:13:34', '2026-06-07 23:04:51'),
(10, 'Digital Banking Access Expands as Micro ATM Services Gain Popularity in Rural India', 'digital-banking-access-expands-as-micro-atm-services-gain-popularity-in-rural-india', 'news', '<h1><span style=\"color: rgb(0, 100, 0);\">Digital Banking Access Expands as Micro ATM Services Gain Popularity in Rural India</span></h1><p>The demand for convenient and accessible banking services is growing rapidly across rural and semi-urban India, with Micro ATM solutions emerging as a key driver of financial inclusion. As more citizens embrace digital banking, service providers are expanding ATM and Micro ATM networks to ensure that essential financial services are available closer to local communities. Industry experts believe that these solutions are helping bridge the gap between traditional banking infrastructure and underserved regions.</p><p>Micro ATM services are enabling customers to perform important banking transactions such as cash withdrawals, balance inquiries, and mini statement generation without the need to visit a bank branch. This increased accessibility is proving especially beneficial for farmers, small business owners, senior citizens, and residents of remote areas who previously faced challenges in accessing banking facilities. The convenience of doorstep and neighborhood banking services is contributing to greater financial participation across the country.</p><p>Financial technology providers and service centers are also witnessing increased adoption as customers seek faster and more secure transaction methods. With government initiatives promoting digital payments and financial literacy, Micro ATM services have become an important tool in supporting cash access while maintaining secure banking practices. Industry observers note that the combination of technology and local service availability is helping strengthen trust in digital financial systems.</p><p>Looking ahead, experts predict continued growth in ATM and Micro ATM deployment as India advances toward a more inclusive digital economy. Service platforms such as<strong><a href=\"https://k-seva.com/\" rel=\"noopener noreferrer\" target=\"_blank\"> K-Seva </a></strong>are expected to play a significant role in extending banking accessibility, supporting local entrepreneurs, and ensuring that financial services remain available to citizens regardless of their location. The trend reflects a broader shift toward technology-driven banking solutions designed to meet the evolving needs of consumers.</p>', '20260531121219_featured_3e5705a0-544c-47f8-b816-bb6a7ac6fce3.png', '', 'Micro ATM services are transforming rural banking in India by providing secure cash withdrawals, balance inquiries, and convenient financial access.', 'Micro ATM News, Digital Banking India, Rural Banking Services, Financial Inclusion, ATM Services India, K-Seva ATM, Cash Withdrawal Services, Banking Technology, Digital Financial Services, Banking Accessibility, Rural Finance, Fintech India, Secure Banking Solutions, Micro ATM Growth, Banking Innovation.', 'krajeshk', '2026-05-31 12:07:00', 19, 1, 1, '2026-05-31 12:12:19', '2026-06-07 08:01:43'),
(11, 'GST Reconciliation Gains Momentum as Businesses Prioritize Tax Compliance and ITC Accuracy', 'gst-reconciliation-gains-momentum-as-businesses-prioritize-tax-compliance-and-itc-accuracy', 'news', '<h2><strong style=\"color: rgb(13, 63, 95);\">GST Reconciliation Gains Momentum as Businesses Prioritize Tax Compliance and ITC Accuracy</strong></h2><p>As GST regulations continue to evolve, businesses across India are placing greater emphasis on GST reconciliation processes to ensure accurate tax reporting and compliance. Financial experts report that companies are increasingly investing in reconciliation services to identify mismatches between accounting records and GST returns before filing deadlines.</p><p>One of the key drivers behind this trend is the growing importance of accurate Input Tax Credit (ITC) claims. Businesses are actively comparing purchase registers with GSTR-2B data to detect missing invoices, vendor filing delays, and discrepancies that could impact tax credit eligibility. Industry professionals believe that regular reconciliation can significantly reduce the risk of GST notices and financial penalties.</p><p>Technology-driven reconciliation solutions are also gaining popularity among small and medium enterprises (SMEs). Automated tools help organizations match large volumes of invoices, identify duplicate entries, and verify tax amounts with greater efficiency. This shift toward digital compliance is helping businesses improve financial accuracy while reducing manual workload.</p><p>Tax consultants suggest that GST reconciliation will remain a critical business function as authorities continue to strengthen compliance monitoring. Companies that conduct regular reconciliations are better positioned to maintain accurate records, optimize working capital through eligible ITC claims, and ensure smooth GST return filing throughout the financial year.</p>', '20260601114749_featured_Untitled-design-51.png', '', 'Businesses are increasingly adopting GST reconciliation practices to improve tax compliance, verify ITC claims, and reduce filing errors.', 'GST Reconciliation, GST Compliance, Input Tax Credit, GSTR-2B, GST Returns, Tax Compliance News, ITC Verification, Business Tax Management, GST Filing, Financial Compliance, SME Tax Solutions, GST Updates, Invoice Reconciliation, Tax Technology, GST Services.', 'krajeshk', '2026-06-01 11:44:00', 9, 1, 1, '2026-06-01 11:47:49', '2026-06-04 11:39:53'),
(12, 'Online Loan Repayments Gain Momentum as Digital Banking Adoption Expands', 'online-loan-repayments-gain-momentum-as-digital-banking-adoption-expands', 'news', '<h1>Online Loan Repayments Gain Momentum as Digital Banking Adoption Expands</h1><p>The use of online platforms for loan repayments is steadily increasing as more consumers embrace digital banking services. Financial institutions have observed a growing preference for internet-based payment methods, driven by convenience, speed, and improved accessibility across urban and rural regions.</p><p>Experts note that borrowers are increasingly relying on mobile banking applications, UPI transactions, and automated payment systems to manage their monthly loan obligations. The availability of multiple repayment channels has made it easier for customers to complete EMI payments without visiting bank branches or service centers, saving both time and effort.</p><p>The trend is being supported by advancements in digital infrastructure and rising smartphone penetration. Many lenders are introducing features such as instant payment confirmations, repayment reminders, account monitoring tools, and secure transaction processes to enhance customer experience. These innovations are helping borrowers stay organized and maintain consistent repayment schedules.</p><p>Industry analysts believe the shift toward digital loan servicing will continue to accelerate in the coming years. As financial technology evolves, online EMI payment solutions are expected to play a vital role in improving repayment efficiency, strengthening financial discipline, and supporting the broader growth of India\'s digital economy.</p>', '20260603181402_featured_da956275-1e1c-448b-946d-42599f446c7c.png', '', 'Growing digital banking adoption is driving increased use of online loan repayment services, making EMI payments faster, easier, and more accessible.', 'Online Loan Repayment, EMI Payment Services, Digital Banking India, UPI Loan Payment, Mobile Banking Trends, Financial Technology News, Digital Finance, Loan Servicing Solutions, EMI Management, Cashless Payments, Banking Innovation, Online Financial Services, Digital Transactions, Loan Payment Platforms, Fintech Growth.', 'krajeshk', '2026-06-03 18:13:00', 20, 1, 1, '2026-06-03 18:14:02', '2026-06-08 17:59:02'),
(13, 'Digital Driving License Services Gain Momentum as Citizens Embrace Online Applications', 'digital-driving-license-services-gain-momentum-as-citizens-embrace-online-applications', 'news', '<h2>Digital Driving License Services Gain Momentum as Citizens Embrace Online Applications</h2><p>The demand for digital driving license services is increasing rapidly across India as more citizens turn to online platforms for faster and more convenient access to government-related services. With the government\'s continued focus on digital transformation, services such as new driving license applications, renewals, duplicate licenses, and document updates are becoming more accessible than ever before.</p><p>Transport departments across various states have reported a significant rise in online applications for driving licenses. Citizens are increasingly utilizing digital service centers and assisted platforms to complete licensing procedures without lengthy paperwork or multiple office visits. This shift is helping reduce processing delays while improving overall service efficiency.</p><p>Industry experts believe that the growing adoption of digital governance initiatives is playing a major role in streamlining transportation services. Online verification systems, digital documentation, and application tracking features are enabling applicants to monitor their requests in real time. These advancements are particularly beneficial for individuals residing in rural and semi-urban areas, where access to government offices may be limited.</p><p>As digital infrastructure continues to expand, experts expect online driving license services to become even more user-friendly and widely adopted. Service providers and digital facilitation centers are working to simplify the application process, helping citizens obtain essential driving documents quickly, securely, and with greater convenience. The trend reflects India\'s broader movement toward digital public services and enhanced citizen accessibility.</p>', '20260604191631_featured_ebce8e71-4c84-486d-b102-cc98efd0814b.png', '', 'Online driving license services are witnessing rapid growth across India as citizens increasingly prefer digital applications, renewals, and updates.', 'Digital Driving License Services, Online Driving License Application, Driving License Renewal, RTO Online Services, Digital Governance India, Driving License Updates, Duplicate Driving License, Online Transport Services, Citizen Digital Services, Driving License News', 'krajeshk', '2026-06-04 19:09:00', 6, 1, 1, '2026-06-04 19:16:31', '2026-06-05 03:40:08'),
(14, 'Digital Mobile Recharge Transactions Surge as Consumers Embrace Instant Connectivity Solutions', 'digital-mobile-recharge-transactions-surge-as-consumers-embrace-instant-connectivity-solutions', 'news', '<h1><span style=\"color: rgb(255, 69, 0);\">Digital Mobile Recharge Transactions Surge as Consumers Embrace Instant Connectivity Solutions</span></h1><p>The digital payments ecosystem is witnessing a significant increase in mobile recharge transactions as consumers increasingly rely on online platforms for their communication and internet needs. With smartphones becoming central to daily activities such as education, remote work, entertainment, and digital banking, uninterrupted mobile connectivity has become more important than ever before.</p><p>Industry observers report that customers are shifting from traditional recharge methods to digital platforms that offer instant processing, secure transactions, and access to multiple telecom operators. The growing adoption of UPI payments, mobile wallets, and online service centers has made mobile recharge faster and more convenient for users across urban and rural regions alike. This trend is helping bridge the digital divide and support wider financial inclusion.</p><p>Retailers and digital service providers are also benefiting from the surge in recharge activity. Many service centers now offer mobile recharge alongside utility bill payments, money transfer services, AEPS transactions, insurance services, and travel bookings. This integrated approach allows businesses to increase customer engagement while creating additional revenue opportunities through commission-based services.</p><p>Experts believe the demand for digital recharge services will continue to grow as telecom networks expand and mobile internet usage rises. With consumers seeking convenience, speed, and reliability, digital recharge platforms are expected to play an increasingly important role in supporting India\'s rapidly evolving digital economy.</p>', '20260605181122_featured_dc41ca86-e08d-4910-9ef6-f76a2c86b033.png', '', 'Digital mobile recharge transactions are growing rapidly as consumers adopt online recharge platforms for faster, safer &more convenient connectivity solutions.', 'Mobile Recharge News, Digital Recharge Services, Online Mobile Recharge, Telecom Industry Trends, Instant Recharge, Digital Payments, Mobile Connectivity, Prepaid Recharge, Postpaid Bill Payment, Recharge Platform, Telecom Services, Digital Transactions, Mobile Internet Usage, Recharge Business, Fintech Services.', 'krajeshk', '2026-06-05 18:09:00', 9, 1, 1, '2026-06-05 18:11:22', '2026-06-09 11:37:07'),
(15, 'Digital Insurance Premium Payments Surge Across India as Consumers Prioritize Financial Protection', 'digital-insurance-premium-payments-surge-across-india-as-consumers-prioritize-financial-protection', 'news', '<h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\">Digital Insurance Premium Payments Surge Across India as Consumers Prioritize Financial Protection</span></h2><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\">India is witnessing a significant rise in digital insurance premium payments as more consumers embrace online platforms to manage their insurance policies efficiently. Industry experts attribute this trend to increasing digital awareness, improved financial literacy, and the growing importance of financial protection in an uncertain economic environment.</span></p><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\">Recent market observations indicate that policyholders are increasingly choosing digital channels for premium payments, policy renewals, and insurance management. The convenience of making secure transactions from home has encouraged both urban and rural consumers to adopt online insurance services.</span></p><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\">Insurance providers and financial service platforms have reported higher engagement levels as customers seek uninterrupted coverage for health, life, motor, and property insurance policies. The shift toward digital payments has also reduced paperwork and simplified policy management processes.</span></p><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\">Financial analysts note that rising healthcare costs and growing awareness about risk management are encouraging individuals to maintain active insurance coverage. As a result, timely premium payments have become a key priority for households looking to safeguard their financial future.</span></p><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\">Technology-driven solutions are further transforming the insurance landscape by offering automated payment reminders, instant policy renewals, digital receipts, and easy access to policy information. These features help policyholders avoid lapses in coverage while improving overall customer experience.</span></p><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\">The continued combination of digital financial solutions and insurance offerings is expected to support sustained growth within the industry. With increased smartphone penetration and expanding internet access, insurance accessibility is expected to improve across all regions of the country.</span></p><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41);\">Experts predict that the coming years will see even greater adoption of digital insurance services as consumers prioritize convenience, transparency, and financial security. The ongoing digital transformation is positioning insurance as a more accessible and essential financial tool for millions of Indians.</span></p>', '20260606181559_featured_beb900a5-f0ad-491c-95c8-bb7f64638540.png', '', 'Digital insurance premium payments are increasing across India as consumers prioritize financial protection and policy continuity.', 'digital insurance payments, insurance premium news, online premium payment, insurance industry India, financial protection, policy renewal, digital insurance services, insurance trends 2026, insurance coverage, financial security, insurance technology, premium payment trends, insurance sector growth, online insurance services, insurance awareness India', 'krajeshk', '2026-06-06 18:08:00', 7, 1, 1, '2026-06-06 18:15:59', '2026-06-06 16:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work_icon`
--

CREATE TABLE `tbl_work_icon` (
  `id` int NOT NULL,
  `icon_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `icon_url` text COLLATE utf8mb4_general_ci NOT NULL,
  `icon_image` text COLLATE utf8mb4_general_ci NOT NULL,
  `icon_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_work_icon`
--

INSERT INTO `tbl_work_icon` (`id`, `icon_name`, `icon_url`, `icon_image`, `icon_description`, `username`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'LABOUR LICENSE DEPARTMENT OF TELANGANA', 'https://labour.telangana.gov.in/home.do', '05110008-whatsapp-image-2026-03-05-at-105917-amjpeg', '', 'KurakulasHr444', 'Kurakulas#123', 1, '2026-03-05 11:00:08', '2026-03-06 13:25:31'),
(2, 'UDHYAM REGISTRATION', 'https://www.udyamregistration.gov.in/UdyamRegistration.aspx', '05122251-whatsapp-image-2026-03-05-at-12.07.18-pm.jpeg', '', '', '', 1, '2026-03-05 11:30:02', '2026-03-30 14:49:47'),
(3, 'ADHAAR VERIFICATION AND UPDATION PORTAL', 'https://uidai.gov.in/en/my-aadhaar/update-aadhaar.html', '06125803-whatsapp-image-2026-03-06-at-12.57.38-pm-(1).jpeg', '', '', '', 1, '2026-03-05 12:26:23', '2026-03-06 12:58:03'),
(4, 'PAN VERIFICATION AND UPDATION PORTAL', 'https://incometaxindia.gov.in/Pages/tax-services/online-pan-verification.aspx', '05122938-whatsapp-image-2026-03-05-at-122816-pmjpeg', '', '', '', 1, '2026-03-05 12:29:38', '0000-00-00 00:00:00'),
(5, 'RATION CARD VERIFICATION AND UPDATION PORTAL', 'https://nfsa.gov.in/portal/ration_card_state_portals_aa', '05123830-whatsapp-image-2026-03-05-at-123814-pmjpeg', '', '', '', 1, '2026-03-05 12:38:30', '0000-00-00 00:00:00'),
(6, 'TRADE LICENSE REGISTRATION PORTAL', 'https://emunicipal.telangana.gov.in/etistmvcdfwefrzxczx/dgdfgdfgdfgfd', '05124349-whatsapp-image-2026-03-05-at-124109-pmjpeg', '', '', '', 1, '2026-03-05 12:43:49', '0000-00-00 00:00:00'),
(7, 'DRIVING LICENSE REGISTRATION PORTAL', 'https://transport.telangana.gov.in/html/driving-licence.html', '05125106-whatsapp-image-2026-03-05-at-125026-pm-1jpeg', '', '', '', 1, '2026-03-05 12:51:06', '0000-00-00 00:00:00'),
(8, 'DEATH&BIRTH CERTIFICATE REGISTRATIONS', 'https://dc.crsorgi.gov.in/crs/', '05133841-whatsapp-image-2026-03-05-at-1.38.24-pm.jpeg', '', '', '', 1, '2026-03-05 13:38:06', '2026-03-05 13:38:41'),
(9, 'FAMILY MEMBER CERTIFICATE PORTAL', 'https://services.india.gov.in/service/detail/telangana-application-for-family-members-certificate', '06125826-whatsapp-image-2026-03-06-at-12.57.38-pm.jpeg', '', '', '', 1, '2026-03-06 12:07:10', '2026-03-06 12:58:26'),
(10, 'INCOME CERTIFICATE REGISTRATION PORTAL', 'https://services.india.gov.in/service/detail/telangana--ises-income-certificate-application-form', '06131812-whatsapp-image-2026-03-06-at-11656-pmjpeg', '', '', '', 1, '2026-03-06 13:18:12', '0000-00-00 00:00:00'),
(11, 'PAYSWITCH CREDIT CARD PORTAL', 'https://retailer.payswitch.co.in/login', '09130148-whatsapp-image-2026-03-09-at-10101-pmjpeg', '', '', '', 1, '2026-03-09 13:01:48', '2026-03-09 13:02:05'),
(12, 'PAYPRIME-CIBIL REPORT', 'https://b2b.payprime.in/', '22161644-whatsapp-image-2026-04-22-at-41529-pmjpeg', '', 'PP231300075', 'Rajesh@123                  PIN:1989', 1, '2026-04-22 16:16:44', '0000-00-00 00:00:00'),
(13, 'AV Managements-Cibil Report', 'https://agentportal.avmanagement.in/login', '22161807-whatsapp-image-2026-04-22-at-41701-pmjpeg', '', 'kurakulas2008@gmail.com', ' Rajesh@123', 1, '2026-04-22 16:18:07', '0000-00-00 00:00:00'),
(14, 'RS Fintech', 'https://rsfintech.in/login', '22161917-whatsapp-image-2026-04-22-at-41822-pmjpeg', '', 'kurakulas2008@gmail.com', ' Rajesh@123', 1, '2026-04-22 16:19:17', '0000-00-00 00:00:00'),
(15, 'Credit Report', 'https://myscore.cibil.com/CreditView/enrollShort_new.page?enterprise=CIBIL&offer=1DPCIRO&_gl=1*1nozfkd*_gcl_au*MTM3NjIxODg2LjE3NjkwNzg2MjMuMzAyMTY4MjgyLjE3NzY3NzYzODkuMTc3Njc3NzEzMQ..*_ga*MTQ5ODA3NTQ2LjE3NDI3OTc2ODM.*_ga_WVCRSGNX36*czE3NzY3NzQ5OTQkbzQkZzEkdDE3NzY3Nzc3MjgkajUzJGwwJGgw*_ga_GGL6JJ79K2*czE3NzY3NzQ5OTQkbzckZzEkdDE3NzY3Nzc3MjgkajUyJGwwJGgw&_ga=2.159009594.168123459.1776774994-149807546.1742797683', '22162011-whatsapp-image-2026-04-22-at-41937-pmjpeg', '', '', '', 1, '2026-04-22 16:20:11', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account_type`
--
ALTER TABLE `tbl_account_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banker_designation`
--
ALTER TABLE `tbl_banker_designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bh_users`
--
ALTER TABLE `tbl_bh_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog_reviews`
--
ALTER TABLE `tbl_blog_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `tbl_branch_location`
--
ALTER TABLE `tbl_branch_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_branch_state`
--
ALTER TABLE `tbl_branch_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cbo_users`
--
ALTER TABLE `tbl_cbo_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_credit_reports`
--
ALTER TABLE `tbl_credit_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_created_by` (`created_by`),
  ADD KEY `idx_price_report` (`service_type_id`),
  ADD KEY `idx_status` (`status`);

--
-- Indexes for table `tbl_credit_report_files`
--
ALTER TABLE `tbl_credit_report_files`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_slot` (`credit_report_id`,`slot`),
  ADD KEY `idx_credit_report` (`credit_report_id`),
  ADD KEY `idx_uploaded_by` (`uploaded_by`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_distributor_user`
--
ALTER TABLE `tbl_distributor_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_downloads`
--
ALTER TABLE `tbl_downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery_images`
--
ALTER TABLE `tbl_gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery_videos`
--
ALTER TABLE `tbl_gallery_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kseva_centers`
--
ALTER TABLE `tbl_kseva_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_latest_news`
--
ALTER TABLE `tbl_latest_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_latest_offers`
--
ALTER TABLE `tbl_latest_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_latest_policy`
--
ALTER TABLE `tbl_latest_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news_reviews`
--
ALTER TABLE `tbl_news_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`);

--
-- Indexes for table `tbl_online_enquiries`
--
ALTER TABLE `tbl_online_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_partner_users`
--
ALTER TABLE `tbl_partner_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment_banks`
--
ALTER TABLE `tbl_payment_banks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_account_number` (`account_number`),
  ADD KEY `idx_ifsc_code` (`ifsc_code`),
  ADD KEY `idx_status` (`status`);

--
-- Indexes for table `tbl_pincode`
--
ALTER TABLE `tbl_pincode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prices`
--
ALTER TABLE `tbl_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rbh_users`
--
ALTER TABLE `tbl_rbh_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_retail_user`
--
ALTER TABLE `tbl_retail_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sdsa_emp_users`
--
ALTER TABLE `tbl_sdsa_emp_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sdsa_users`
--
ALTER TABLE `tbl_sdsa_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service_category`
--
ALTER TABLE `tbl_service_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service_type`
--
ALTER TABLE `tbl_service_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sub_location`
--
ALTER TABLE `tbl_sub_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vendor_bank`
--
ALTER TABLE `tbl_vendor_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_wallet_add_money_requests`
--
ALTER TABLE `tbl_wallet_add_money_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status` (`status`),
  ADD KEY `verified_by` (`verified_by`),
  ADD KEY `idx_requests_status_date` (`status`,`requested_at`);

--
-- Indexes for table `tbl_wallet_transactions`
--
ALTER TABLE `tbl_wallet_transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaction_id` (`transaction_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `type` (`type`),
  ADD KEY `reference_id` (`reference_id`),
  ADD KEY `idx_transactions_user_date` (`user_id`,`created_at`),
  ADD KEY `idx_transactions_type_status` (`type`,`status`);

--
-- Indexes for table `tbl_website_blog`
--
ALTER TABLE `tbl_website_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_website_news`
--
ALTER TABLE `tbl_website_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_work_icon`
--
ALTER TABLE `tbl_work_icon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account_type`
--
ALTER TABLE `tbl_account_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_banker_designation`
--
ALTER TABLE `tbl_banker_designation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_bh_users`
--
ALTER TABLE `tbl_bh_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_blog_reviews`
--
ALTER TABLE `tbl_blog_reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_branch_location`
--
ALTER TABLE `tbl_branch_location`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_branch_state`
--
ALTER TABLE `tbl_branch_state`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_cbo_users`
--
ALTER TABLE `tbl_cbo_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_credit_reports`
--
ALTER TABLE `tbl_credit_reports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_credit_report_files`
--
ALTER TABLE `tbl_credit_report_files`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_distributor_user`
--
ALTER TABLE `tbl_distributor_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_downloads`
--
ALTER TABLE `tbl_downloads`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gallery_images`
--
ALTER TABLE `tbl_gallery_images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gallery_videos`
--
ALTER TABLE `tbl_gallery_videos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kseva_centers`
--
ALTER TABLE `tbl_kseva_centers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_latest_news`
--
ALTER TABLE `tbl_latest_news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_latest_offers`
--
ALTER TABLE `tbl_latest_offers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_latest_policy`
--
ALTER TABLE `tbl_latest_policy`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;

--
-- AUTO_INCREMENT for table `tbl_news_reviews`
--
ALTER TABLE `tbl_news_reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_online_enquiries`
--
ALTER TABLE `tbl_online_enquiries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `tbl_partner_users`
--
ALTER TABLE `tbl_partner_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_payment_banks`
--
ALTER TABLE `tbl_payment_banks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pincode`
--
ALTER TABLE `tbl_pincode`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=652;

--
-- AUTO_INCREMENT for table `tbl_prices`
--
ALTER TABLE `tbl_prices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_rbh_users`
--
ALTER TABLE `tbl_rbh_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_retail_user`
--
ALTER TABLE `tbl_retail_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_sdsa_emp_users`
--
ALTER TABLE `tbl_sdsa_emp_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_sdsa_users`
--
ALTER TABLE `tbl_sdsa_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_service_category`
--
ALTER TABLE `tbl_service_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_service_type`
--
ALTER TABLE `tbl_service_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_sub_location`
--
ALTER TABLE `tbl_sub_location`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=716;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tbl_vendor_bank`
--
ALTER TABLE `tbl_vendor_bank`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=428;

--
-- AUTO_INCREMENT for table `tbl_wallet_add_money_requests`
--
ALTER TABLE `tbl_wallet_add_money_requests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_wallet_transactions`
--
ALTER TABLE `tbl_wallet_transactions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_website_blog`
--
ALTER TABLE `tbl_website_blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_website_news`
--
ALTER TABLE `tbl_website_news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_work_icon`
--
ALTER TABLE `tbl_work_icon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
