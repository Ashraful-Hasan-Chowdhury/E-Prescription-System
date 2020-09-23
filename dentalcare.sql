-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 10:51 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dentalcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `advices`
--

CREATE TABLE `advices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `advice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advices`
--

INSERT INTO `advices` (`id`, `advice`, `created_at`, `updated_at`) VALUES
(8, 'Extruction', '2020-04-07 07:21:52', '2020-04-07 07:21:52'),
(9, 'PF', '2020-04-07 07:22:02', '2020-04-07 07:22:02'),
(10, 'TF', '2020-04-07 07:23:59', '2020-04-07 07:23:59'),
(11, 'Scalling', '2020-04-07 07:24:16', '2020-04-07 07:24:16'),
(12, 'RCT Followed by Crown', '2020-04-07 07:25:16', '2020-04-07 07:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `advice_prescriptions`
--

CREATE TABLE `advice_prescriptions` (
  `Prescription_id` bigint(20) UNSIGNED NOT NULL,
  `Advice_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advice_prescriptions`
--

INSERT INTO `advice_prescriptions` (`Prescription_id`, `Advice_id`, `created_at`, `updated_at`) VALUES
(15, 8, '2020-05-12 12:19:46', '2020-05-12 12:19:46'),
(15, 9, '2020-05-12 12:19:46', '2020-05-12 12:19:46'),
(15, 10, '2020-05-12 12:19:46', '2020-05-12 12:19:46'),
(15, 11, '2020-05-12 12:19:46', '2020-05-12 12:19:46'),
(15, 8, '2020-05-12 23:56:43', '2020-05-12 23:56:43'),
(15, 9, '2020-05-12 23:56:43', '2020-05-12 23:56:43'),
(15, 10, '2020-05-12 23:56:43', '2020-05-12 23:56:43'),
(15, 11, '2020-05-12 23:56:43', '2020-05-12 23:56:43'),
(15, 8, '2020-05-12 23:58:07', '2020-05-12 23:58:07'),
(15, 9, '2020-05-12 23:58:08', '2020-05-12 23:58:08'),
(15, 10, '2020-05-12 23:58:08', '2020-05-12 23:58:08'),
(15, 11, '2020-05-12 23:58:08', '2020-05-12 23:58:08'),
(15, 8, '2020-05-13 00:13:51', '2020-05-13 00:13:51'),
(15, 9, '2020-05-13 00:13:51', '2020-05-13 00:13:51'),
(15, 10, '2020-05-13 00:13:51', '2020-05-13 00:13:51'),
(15, 11, '2020-05-13 00:13:51', '2020-05-13 00:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `complaint` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `complaint`, `created_at`, `updated_at`) VALUES
(7, 'Toothache', '2020-04-07 07:03:22', '2020-04-07 07:03:22'),
(8, 'Gum Bleeding', '2020-04-07 07:07:28', '2020-04-07 07:07:28');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_prescriptions`
--

CREATE TABLE `complaint_prescriptions` (
  `Prescription_id` bigint(20) UNSIGNED NOT NULL,
  `Complaint_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaint_prescriptions`
--

INSERT INTO `complaint_prescriptions` (`Prescription_id`, `Complaint_id`, `created_at`, `updated_at`) VALUES
(14, 8, '2020-05-12 12:16:21', '2020-05-12 12:16:21'),
(15, 7, '2020-05-12 12:19:46', '2020-05-12 12:19:46'),
(15, 8, '2020-05-12 12:19:46', '2020-05-12 12:19:46'),
(15, 7, '2020-05-12 23:56:43', '2020-05-12 23:56:43'),
(15, 8, '2020-05-12 23:56:43', '2020-05-12 23:56:43'),
(15, 7, '2020-05-12 23:58:08', '2020-05-12 23:58:08'),
(15, 8, '2020-05-12 23:58:08', '2020-05-12 23:58:08'),
(15, 7, '2020-05-13 00:13:51', '2020-05-13 00:13:51'),
(15, 8, '2020-05-13 00:13:52', '2020-05-13 00:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dNameEn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dNameBn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vTimeEn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vTimeBn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designationEn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designationBn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addressEn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addressBn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneEn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneBn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `dNameEn`, `dNameBn`, `vTimeEn`, `vTimeBn`, `designationEn`, `designationBn`, `addressEn`, `addressBn`, `phoneEn`, `phoneBn`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Prithu Talukder', 'ডাঃ পৃথু  তালুকদার', 'From 10am to 7pm , Monday Only.', 'সোমবার সকাল ১০ টা - সন্ধ্যা ৫ টা।', 'Oral and Dental Surgeon\r\nB.D.S.(Dhaka Dental College)\r\nPGT (OMS)\r\nConservative Dentistry\r\nTrained in Aesthetic Dentistry\r\nB.M.D.C. Reg no. 9295', 'ওরাল এন্ড ডেন্টাল সার্জন\r\nবি,ডি,এস(ঢাকা ডেন্টাল কলেজ)\r\nপি,জি,টি (ও,এম,এস)\r\nকনজার্ভেটিভ ডেন্টিস্ট্রি\r\nট্রেইন্ড ইন এসথেটিক ডেন্টিস্ট্রি\r\nবি,এম,ডি,সি রেজিঃ নং-৯২৯৫', 'Purba Gali, Banglabazar,Begumganj,Noakhali.', 'বাংলাবাজার, পূর্ব গলি, বেগমগঞ্জ , নোয়াখালী।', '01818537093', '০১৮১৮-৫৩৭০৯৩', NULL, '2020-04-08 10:03:42'),
(2, 'Dentist MD Fakhrul Islam', 'ডেন্টিস্ট মোঃ ফখরুল ইসলাম', 'Everyday from 10am to 7pm (Remains closed on saturday)', 'প্রতিদিন সকাল ১০ টা থেকে সন্ধ্যা ৭টা পর্যন্ত (শনিবার ব্যাতীত)', 'D.D.T', 'ডি.ডি.টি (দন্ত্য)', 'Purba Gali, Banglabazar,Begumganj,Noakhali.', 'বাংলাবাজার, পূর্ব গলি, বেগমগঞ্জ , নোয়াখালী।', '01818537093', '০১৮১৮-৫৩৭০৯৩', NULL, '2020-04-03 09:56:53');

-- --------------------------------------------------------

--
-- Table structure for table `examinations`
--

CREATE TABLE `examinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `onExamination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examinations`
--

INSERT INTO `examinations` (`id`, `onExamination`, `created_at`, `updated_at`) VALUES
(10, 'G carriese teeth', '2020-04-07 07:04:31', '2020-04-07 07:04:31'),
(12, 'Calculas on +++', '2020-04-07 07:05:24', '2020-04-07 07:05:24'),
(13, 'Broken Teeth', '2020-04-07 07:06:14', '2020-04-07 07:06:14'),
(14, 'Impacted Teeth', '2020-04-07 07:06:30', '2020-04-07 07:06:30'),
(16, 'Missing Teeth', '2020-04-08 07:40:23', '2020-04-08 07:40:23'),
(17, 'Carriese Teeth', '2020-05-12 22:17:55', '2020-05-12 22:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `examination_prescriptions`
--

CREATE TABLE `examination_prescriptions` (
  `Prescription_id` bigint(20) UNSIGNED NOT NULL,
  `Examination_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examination_prescriptions`
--

INSERT INTO `examination_prescriptions` (`Prescription_id`, `Examination_id`, `created_at`, `updated_at`) VALUES
(15, 11, '2020-05-12 12:19:46', '2020-05-12 12:19:46'),
(15, 13, '2020-05-12 12:19:47', '2020-05-12 12:19:47'),
(15, 13, '2020-05-12 23:56:43', '2020-05-12 23:56:43'),
(15, 13, '2020-05-12 23:58:08', '2020-05-12 23:58:08'),
(15, 13, '2020-05-13 00:13:52', '2020-05-13 00:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investigations`
--

CREATE TABLE `investigations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `investigation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investigations`
--

INSERT INTO `investigations` (`id`, `investigation`, `created_at`, `updated_at`) VALUES
(7, 'Periapical X-Ray', '2020-04-07 07:19:31', '2020-04-07 07:19:31'),
(8, 'OPG X-Ray', '2020-04-07 07:19:45', '2020-04-07 07:20:41'),
(9, 'RBS', '2020-04-07 07:19:53', '2020-05-12 23:22:52'),
(10, 'FBS', '2020-04-07 07:20:01', '2020-04-07 07:20:01'),
(11, 'BT/CT', '2020-04-07 07:21:06', '2020-04-07 07:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `investigation_prescriptions`
--

CREATE TABLE `investigation_prescriptions` (
  `Prescription_id` bigint(20) UNSIGNED NOT NULL,
  `Investigation_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investigation_prescriptions`
--

INSERT INTO `investigation_prescriptions` (`Prescription_id`, `Investigation_id`, `created_at`, `updated_at`) VALUES
(15, 7, '2020-05-12 12:19:47', '2020-05-12 12:19:47'),
(15, 8, '2020-05-12 12:19:47', '2020-05-12 12:19:47'),
(15, 11, '2020-05-12 12:19:47', '2020-05-12 12:19:47'),
(15, 7, '2020-05-12 23:56:43', '2020-05-12 23:56:43'),
(15, 8, '2020-05-12 23:56:43', '2020-05-12 23:56:43'),
(15, 11, '2020-05-12 23:56:43', '2020-05-12 23:56:43'),
(15, 7, '2020-05-12 23:58:08', '2020-05-12 23:58:08'),
(15, 8, '2020-05-12 23:58:09', '2020-05-12 23:58:09'),
(15, 11, '2020-05-12 23:58:09', '2020-05-12 23:58:09'),
(15, 7, '2020-05-13 00:13:52', '2020-05-13 00:13:52'),
(15, 8, '2020-05-13 00:13:52', '2020-05-13 00:13:52'),
(15, 11, '2020-05-13 00:13:52', '2020-05-13 00:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `medName`, `created_at`, `updated_at`) VALUES
(28, 'Napa Extend', '2020-04-07 07:08:14', '2020-04-07 07:08:14'),
(29, 'Avloclav', '2020-04-07 07:08:41', '2020-04-07 07:08:41'),
(30, 'Zithrox', '2020-04-07 07:09:06', '2020-04-07 07:09:06'),
(31, 'Cleocin', '2020-04-07 07:09:22', '2020-04-07 07:09:22'),
(32, 'Kefuclav', '2020-04-07 07:09:35', '2020-04-07 07:09:35'),
(33, 'Vasco', '2020-04-07 07:09:54', '2020-04-07 07:09:54'),
(34, 'Paricel', '2020-04-07 07:10:12', '2020-04-07 07:10:12'),
(35, 'Losectil', '2020-04-07 07:10:24', '2020-04-07 07:10:24'),
(36, 'Xeldrin', '2020-04-07 07:10:35', '2020-04-07 07:10:35'),
(38, 'Etorix', '2020-04-07 07:11:31', '2020-04-07 07:11:31'),
(39, 'Minolac', '2020-04-07 07:11:46', '2020-04-07 07:11:46'),
(40, 'Naprosyn', '2020-04-07 07:12:11', '2020-04-07 07:12:11'),
(42, 'Bongel Oral gel', '2020-04-07 07:13:35', '2020-04-07 07:13:35'),
(43, 'Micoral Oral Gel', '2020-04-07 07:14:03', '2020-04-07 07:14:03'),
(44, 'Flamyd', '2020-04-07 07:14:38', '2020-04-07 07:14:38'),
(45, 'Oralon', '2020-04-08 08:04:38', '2020-04-08 08:04:38'),
(46, 'Hydrogen Per Oxyd', '2020-04-08 08:05:50', '2020-04-08 08:05:50'),
(47, 'Napa', '2020-05-12 23:08:02', '2020-05-12 23:08:02'),
(48, 'Calgum JR', '2020-05-13 14:28:49', '2020-05-13 14:28:49');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_03_28_073717_create_medicines_table', 1),
(4, '2020_03_28_111931_create_types_table', 2),
(5, '2020_03_28_113856_create_examinations_table', 3),
(6, '2020_03_28_114135_create_complaints_table', 4),
(7, '2020_03_28_114544_create_investigations_table', 5),
(8, '2020_03_28_114620_create_advices_table', 5),
(9, '2020_03_28_140019_create_doctors_info_table', 6),
(10, '2020_03_28_140852_create_doctors_table', 7),
(11, '2020_03_29_072754_create_newprescriptions_table', 8),
(15, '2020_04_04_082735_create_takes_table', 10),
(17, '2020_03_29_074506_create_prescriptions_table', 11),
(18, '2020_05_12_132417_create_complaint_prescriptions_table', 12),
(19, '2020_05_12_132730_create__examination_prescriptions_table', 12),
(20, '2020_05_12_132816_create_investigation_prescriptions_table', 12),
(21, '2020_05_12_132853_create_advice_prescriptions_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pAge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complaints` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eproblem` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eld` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iproblem` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ilu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ild` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ird` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aproblem1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alu1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aru1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ald1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ard1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aproblem2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alu2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aru2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ald2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ard2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aproblem3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alu3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aru3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ald3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ard3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adescripton` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `pName`, `pAge`, `date`, `complaints`, `eproblem`, `elu`, `eru`, `eld`, `erd`, `edescription`, `iproblem`, `ilu`, `iru`, `ild`, `ird`, `idescription`, `aproblem1`, `alu1`, `aru1`, `ald1`, `ard1`, `aproblem2`, `alu2`, `aru2`, `ald2`, `ard2`, `aproblem3`, `alu3`, `aru3`, `ald3`, `ard3`, `adescripton`, `prescription`, `meet`, `created_at`, `updated_at`) VALUES
(1, 'Ashraful Hasan Chowdhury', '25', '7 - 4 - 2020', 'Complaint One,Complaint three,Complaint four,complaint five,complaint 6', 'Examination five', '1', '1', '1', '1', 'sdasfasdfdddnsjashdkfhkasjdhfkjadshkjfhksadhfjkadshkjfhsdjkhfjkds', 'Investigation number three', '1', '1', '1', '1', 'sdlkfaskdhfhsdkjfhkjashdkfjhasdjkhfkjasdhkjfhasjkdhfkjsahdkjfhkasdjhfjkashdjkf', 'problem 1 advice', '1', '1', '11', '1', 'Advice Number Three', '1', '1', '11', '1', 'problem 3 advice', '1', '1', '1', '1', 'sdfsdfsdfsdfsdfsdfsdfsdgfdfghfhgfhfgbcvhgfgghdfgfd', 'Mouthwash Nomi extra\r\n     +\r\nNapa Rapid\r\n১০ মিঃলিঃ ঔষধের সাথে ১০ মিঃলিঃ পানি মিশিয়ে\r\nকুলকুচি করবেন দিন ২ বার।\r\n\r\nTab. Napa 1 file\r\n     ১ + ০ + ০ - খালি পেটে - 5 times\r\n\r\nMouthwash Paracitamol\r\n     +\r\nOmiprazole\r\n১০ মিঃলিঃ ঔষধের সাথে ১০ মিঃলিঃ পানি মিশিয়ে\r\nকুলকুচি করবেন দিন ২ বার।\r\n\r\n\r\nMouthwash Rivotril\r\n     +\r\nOmiprazole\r\n১০ মিঃলিঃ ঔষধের সাথে ১০ মিঃলিঃ পানি মিশিয়ে\r\nকুলকুচি করবেন দিন ২ বার।\r\n\r\nTab. Rivotril 50 mg\r\n     ১ + ০ + ০ - খালি পেটে - 5 times\r\n\r\nMouthwash Paracitamol\r\n     +\r\nNapa Rapid\r\n১০ মিঃলিঃ ঔষধের সাথে ১০ মিঃলিঃ পানি মিশিয়ে\r\nকুলকুচি করবেন দিন ২ বার।', '7 days', '2020-04-05 10:52:39', '2020-04-07 06:44:08'),
(2, NULL, NULL, '7 - 4 - 2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-07 03:33:33', '2020-04-07 03:33:33'),
(3, 'Ashraful Hasan Chowdhury', '25', '9 - 4 - 2020', 'Toothache,Gum Bleeding', 'G carriese teeth', NULL, NULL, '6', NULL, 'Calculas', 'Periapical X-Ray', NULL, NULL, '6', NULL, 'RBS', 'Extruction', NULL, NULL, '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tab. Flamyd 500mg\r\n     ১+ ১ +১ - ভরা পেটে - ৫ দিন\r\n\r\nTab. Etorix 90mg\r\n     প্রতিদিন ১ টা - ভরা পেটে - ৫ দিন\r\n\r\nCap. Losectil 20mg\r\n     ১ + ০ + ১ - খালি পেটে - ৫ দিন', '৫ দিন', '2020-04-07 08:22:06', '2020-04-09 03:41:45'),
(4, 'Masum', '25', '8 - 4 - 2020', 'Toothache', 'Impacted Teeth', NULL, '3', NULL, NULL, 'Calculas on +++', 'OPG X-Ray', NULL, NULL, NULL, NULL, NULL, 'Extruction', NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tab. Kefuclav 250mg\r\n     ১ + ০ + ১ - ভরা পেটে - ৫ দিন \r\n\r\nTab. Naprosyn 250mg\r\n     ১ + ০ + ১ ব্যাথা হলে  - ভরা পেটে - ৫ দিন \r\n\r\nMouthwash oralon\r\n১০ মিঃলিঃ ঔষধের সাথে ১০ মিঃলিঃ পানি মিশিয়ে\r\nকুলকুচি করবেন দিন ২ বার।\r\n\r\nMouthwash oralon\r\n     +\r\nhydrogen per oxyd\r\n১০ মিঃলিঃ ঔষধের সাথে ১০ মিঃলিঃ পানি মিশিয়ে\r\nকুলকুচি করবেন দিন ২ বার।\r\n\r\nCap. Xeldrin 20mg\r\n     ১ + ০ + ১ - খালি পেটে - ৫ দিন', '৫ দিন', '2020-04-08 08:03:40', '2020-04-08 08:07:53'),
(5, NULL, NULL, '20 - 4 - 2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-11 02:21:51', '2020-04-20 06:27:50'),
(6, NULL, NULL, '12 - 5 - 2020', 'Gum Bleeding', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-12 02:50:28', '2020-05-12 02:50:28'),
(7, 'Ashraful Hasan Chowdhury', '25', '12 - 5 - 2020', NULL, 'Missing Teeth', '1', NULL, NULL, NULL, NULL, 'RBS', NULL, NULL, NULL, '2', NULL, 'PF', '1', NULL, NULL, NULL, 'PF', NULL, NULL, NULL, '1', 'Extruction', '1', NULL, NULL, NULL, NULL, 'Mouthwash Avloclav\r\n১০ মিঃলিঃ ঔষধের সাথে ১০ মিঃলিঃ পানি মিশিয়ে\r\nকুলকুচি করবেন দিন ২ বার।\r\n\r\nToothpaste Mediplus\r\nসকালে এবং রাতে খাবার পর দাঁত ব্রাশ করবেন।', '5 days', '2020-05-12 11:28:01', '2020-05-12 11:28:01'),
(8, 'Ashraful Hasan Chowdhury', '25', '12 - 5 - 2020', NULL, 'Missing Teeth', '1', NULL, NULL, NULL, NULL, 'RBS', NULL, NULL, NULL, '2', NULL, 'PF', '1', NULL, NULL, NULL, 'PF', NULL, NULL, NULL, '1', 'Extruction', '1', NULL, NULL, NULL, NULL, 'Mouthwash Avloclav\r\n১০ মিঃলিঃ ঔষধের সাথে ১০ মিঃলিঃ পানি মিশিয়ে\r\nকুলকুচি করবেন দিন ২ বার।\r\n\r\nToothpaste Mediplus\r\nসকালে এবং রাতে খাবার পর দাঁত ব্রাশ করবেন।', '5 days', '2020-05-12 11:30:44', '2020-05-12 11:30:44'),
(9, 'Ashraful Hasan Chowdhury', '27', '12 - 5 - 2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-12 11:37:10', '2020-05-12 11:37:10'),
(10, 'Ashraful Hasan Chowdhury', '27', '12 - 5 - 2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-12 11:41:10', '2020-05-12 11:41:10'),
(11, 'Ashraful Hasan Chowdhury', '27', '12 - 5 - 2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-12 12:05:20', '2020-05-12 12:05:20'),
(12, NULL, NULL, '13 - 5 - 2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-12 12:05:43', '2020-05-12 12:05:43'),
(13, NULL, NULL, '13 - 5 - 2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-12 12:16:04', '2020-05-12 12:16:04'),
(14, NULL, NULL, '13 - 5 - 2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-12 12:16:21', '2020-05-12 12:16:21'),
(15, 'Ashraful Hasan Chowdhury', '25', '13 - 5 - 2020', NULL, 'Missing Teeth', 'a', 'b', 'c', 'd', NULL, 'OPG X-Ray', 'A', 'B', 'C', 'D', NULL, 'Scalling', 'AA', 'BB', 'CC', 'DD', 'RCT Followed by Crown', 'E', 'F', 'G', 'H', 'Extruction', 'I', 'J', 'K', 'L', NULL, 'Mouthwash Xeldrin\r\n     +\r\nCalgum JR\r\n১০ মিঃলিঃ ঔষধের সাথে ১০ মিঃলিঃ পানি মিশিয়ে\r\nকুলকুচি করবেন দিন ২ বার।\r\n\r\nToothpaste mediplus\r\nসকালে এবং রাতে খাবার পর দাঁত ব্রাশ করবেন।', '7 days', '2020-05-12 12:19:46', '2020-05-12 12:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `take` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `takes`
--

INSERT INTO `takes` (`id`, `take`, `created_at`, `updated_at`) VALUES
(6, '1 + 1 + 1', '2020-04-07 07:25:48', '2020-04-07 07:25:48'),
(7, '1+ 0 +1', '2020-04-07 07:26:03', '2020-04-07 08:12:11'),
(9, '২ চামুচ করে ৩ বার', '2020-04-07 07:32:23', '2020-04-07 07:32:23'),
(10, '১ চামুচ করে ৩ বার', '2020-04-07 07:32:40', '2020-04-07 07:32:40'),
(11, '১ চামুচ করে ২ বার', '2020-04-07 07:32:58', '2020-04-07 07:32:58'),
(12, '১½ চামুচ করে ৩ বার', '2020-04-07 08:08:03', '2020-04-07 08:08:03'),
(13, '১+ ১ +১', '2020-04-07 08:10:11', '2020-04-07 08:13:09'),
(14, '১ + ০ + ১', '2020-04-07 08:12:47', '2020-04-07 08:12:47'),
(15, 'প্রতিদিন ১ টা', '2020-04-07 08:13:48', '2020-04-07 08:13:48'),
(18, '1+0+0', '2020-05-12 23:33:10', '2020-05-12 23:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `medType`, `created_at`, `updated_at`) VALUES
(3, 'Mouthwash', '2020-03-28 05:36:14', '2020-03-28 05:36:14'),
(7, 'Tab.', '2020-04-07 07:16:00', '2020-04-07 07:16:00'),
(8, 'Cap.', '2020-04-07 07:16:11', '2020-04-07 07:16:11'),
(9, 'Inj.', '2020-04-07 07:16:50', '2020-04-07 07:16:50'),
(10, 'Susp.', '2020-04-07 07:17:07', '2020-04-07 07:17:07'),
(11, 'Syp.', '2020-04-07 07:17:20', '2020-04-07 07:17:20'),
(12, 'Suppository', '2020-04-07 07:17:52', '2020-04-07 07:17:52'),
(14, 'Toothpaste', '2020-05-12 23:17:38', '2020-05-12 23:17:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advices`
--
ALTER TABLE `advices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advice_prescriptions`
--
ALTER TABLE `advice_prescriptions`
  ADD KEY `advice_prescriptions_prescription_id_index` (`Prescription_id`),
  ADD KEY `advice_prescriptions_advice_id_index` (`Advice_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint_prescriptions`
--
ALTER TABLE `complaint_prescriptions`
  ADD KEY `complaint_prescriptions_prescription_id_index` (`Prescription_id`),
  ADD KEY `complaint_prescriptions_complaint_id_index` (`Complaint_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examinations`
--
ALTER TABLE `examinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examination_prescriptions`
--
ALTER TABLE `examination_prescriptions`
  ADD KEY `examination_prescriptions_prescription_id_index` (`Prescription_id`),
  ADD KEY `examination_prescriptions_examination_id_index` (`Examination_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investigations`
--
ALTER TABLE `investigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investigation_prescriptions`
--
ALTER TABLE `investigation_prescriptions`
  ADD KEY `investigation_prescriptions_prescription_id_index` (`Prescription_id`),
  ADD KEY `investigation_prescriptions_investigation_id_index` (`Investigation_id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `advices`
--
ALTER TABLE `advices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `examinations`
--
ALTER TABLE `examinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investigations`
--
ALTER TABLE `investigations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `takes`
--
ALTER TABLE `takes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advice_prescriptions`
--
ALTER TABLE `advice_prescriptions`
  ADD CONSTRAINT `advice_prescriptions_prescription_id_foreign` FOREIGN KEY (`Prescription_id`) REFERENCES `prescriptions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `complaint_prescriptions`
--
ALTER TABLE `complaint_prescriptions`
  ADD CONSTRAINT `complaint_prescriptions_prescription_id_foreign` FOREIGN KEY (`Prescription_id`) REFERENCES `prescriptions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `examination_prescriptions`
--
ALTER TABLE `examination_prescriptions`
  ADD CONSTRAINT `examination_prescriptions_prescription_id_foreign` FOREIGN KEY (`Prescription_id`) REFERENCES `prescriptions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `investigation_prescriptions`
--
ALTER TABLE `investigation_prescriptions`
  ADD CONSTRAINT `investigation_prescriptions_prescription_id_foreign` FOREIGN KEY (`Prescription_id`) REFERENCES `prescriptions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
