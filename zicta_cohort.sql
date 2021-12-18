-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 07:49 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zicta_cohort`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminprofiles`
--

CREATE TABLE `adminprofiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `created_at`, `updated_at`, `name`, `target`, `notice`) VALUES
(151, '2021-07-31 11:32:02', '2021-07-31 11:32:02', 'James', 'GCE', 'We are going to have a Make Up Class at 12:00 hrs');

-- --------------------------------------------------------

--
-- Table structure for table `assignmentsuploads`
--

CREATE TABLE `assignmentsuploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploaded_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `examinationresults`
--

CREATE TABLE `examinationresults` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `physics` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mathematics` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biology` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chemistry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Additional Mathematics` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pure Physics` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Computer/IT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `English` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commerce/Accounts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A Level Physics` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A Level Biology` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A Level Chemistry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Classical Mechanics` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Electricity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nuclear Physics` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Real Analysis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examinationresults`
--

INSERT INTO `examinationresults` (`id`, `created_at`, `updated_at`, `email`, `physics`, `mathematics`, `biology`, `chemistry`, `Additional Mathematics`, `Pure Physics`, `Computer/IT`, `English`, `commerce/Accounts`, `A Level Physics`, `A Level Biology`, `A Level Chemistry`, `Classical Mechanics`, `Electricity`, `Nuclear Physics`, `Real Analysis`) VALUES
(3, '2021-07-07 23:37:24', '2021-07-07 23:37:24', 'chewec03@gmail.com', '2021-07-07 19:37:24', '3', '6', '6', '2', '2021-07-07 19:37:24', '0', '', '', '', '', '', '', '', '', ''),
(4, '2021-07-07 23:37:24', '2021-07-07 23:37:24', 'rempel.linnea@example.net', '2021-07-07 19:37:24', '2', '1', '9', '6', '2021-07-07 19:37:24', '5', '', '', '', '', '', '', '', '', ''),
(5, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'abbott.leonora@example.org', '2021-07-07 19:37:24', '0', '9', '1', '9', '2021-07-07 19:37:24', '6', '', '', '', '', '', '', '', '', ''),
(6, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'marina.casper@example.org', '2021-07-07 19:37:24', '0', '2', '8', '1', '2021-07-07 19:37:24', '4', '', '', '', '', '', '', '', '', ''),
(7, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'cconroy@example.org', '2021-07-07 19:37:24', '1', '7', '5', '4', '2021-07-07 19:37:24', '0', '', '', '', '', '', '', '', '', ''),
(8, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'reichert.howell@example.com', '2021-07-07 19:37:24', '0', '1', '8', '7', '2021-07-07 19:37:24', '4', '', '', '', '', '', '', '', '', ''),
(9, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'evert@example.org', '2021-07-07 19:37:24', '0', '0', '6', '5', '2021-07-07 19:37:24', '1', '', '', '', '', '', '', '', '', ''),
(10, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'gdeckow@example.org', '2021-07-07 19:37:24', '5', '2', '2', '8', '2021-07-07 19:37:24', '4', '', '', '', '', '', '', '', '', ''),
(11, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'klein.ashley@example.org', '2021-07-07 19:37:24', '1', '2', '0', '8', '2021-07-07 19:37:24', '4', '', '', '', '', '', '', '', '', ''),
(12, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'jacobson.beatrice@example.org', '2021-07-07 19:37:24', '7', '1', '1', '7', '2021-07-07 19:37:24', '7', '', '', '', '', '', '', '', '', ''),
(13, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'browe@example.org', '2021-07-07 19:37:24', '1', '7', '6', '0', '2021-07-07 19:37:24', '3', '', '', '', '', '', '', '', '', ''),
(14, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'bcollins@example.net', '2021-07-07 19:37:24', '2', '6', '5', '0', '2021-07-07 19:37:24', '4', '', '', '', '', '', '', '', '', ''),
(15, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'aratke@example.net', '2021-07-07 19:37:24', '3', '3', '9', '4', '2021-07-07 19:37:24', '2', '', '', '', '', '', '', '', '', ''),
(16, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'corkery.amaya@example.org', '2021-07-07 19:37:24', '4', '0', '2', '0', '2021-07-07 19:37:24', '1', '', '', '', '', '', '', '', '', ''),
(17, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'groberts@example.org', '2021-07-07 19:37:24', '9', '7', '6', '1', '2021-07-07 19:37:24', '2', '', '', '', '', '', '', '', '', ''),
(18, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'king.antwon@example.net', '2021-07-07 19:37:24', '6', '5', '0', '2', '2021-07-07 19:37:24', '4', '', '', '', '', '', '', '', '', ''),
(19, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'morar.isaiah@example.org', '2021-07-07 19:37:24', '3', '5', '6', '9', '2021-07-07 19:37:24', '2', '', '', '', '', '', '', '', '', ''),
(20, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'romaine.emmerich@example.net', '2021-07-07 19:37:24', '6', '4', '4', '5', '2021-07-07 19:37:24', '8', '', '', '', '', '', '', '', '', ''),
(21, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'laurie27@example.org', '2021-07-07 19:37:24', '7', '4', '0', '7', '2021-07-07 19:37:24', '1', '', '', '', '', '', '', '', '', ''),
(22, '2021-07-07 23:37:25', '2021-07-07 23:37:25', 'angel.marquardt@example.org', '2021-07-07 19:37:24', '7', '5', '0', '8', '2021-07-07 19:37:24', '2', '', '', '', '', '', '', '', '', ''),
(23, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'prohaska.lulu@example.com', '2021-07-07 19:37:24', '6', '0', '3', '1', '2021-07-07 19:37:24', '3', '', '', '', '', '', '', '', '', ''),
(24, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'hwitting@example.org', '2021-07-07 19:37:24', '1', '7', '7', '7', '2021-07-07 19:37:24', '6', '', '', '', '', '', '', '', '', ''),
(25, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'dario52@example.com', '2021-07-07 19:37:24', '2', '5', '8', '8', '2021-07-07 19:37:24', '2', '', '', '', '', '', '', '', '', ''),
(26, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'mkozey@example.com', '2021-07-07 19:37:24', '5', '8', '8', '6', '2021-07-07 19:37:24', '5', '', '', '', '', '', '', '', '', ''),
(27, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'samantha15@example.org', '2021-07-07 19:37:24', '3', '9', '9', '0', '2021-07-07 19:37:24', '4', '', '', '', '', '', '', '', '', ''),
(28, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'jayda.gerhold@example.net', '2021-07-07 19:37:24', '0', '2', '2', '0', '2021-07-07 19:37:24', '1', '', '', '', '', '', '', '', '', ''),
(29, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'goldner.lon@example.com', '2021-07-07 19:37:24', '3', '4', '7', '2', '2021-07-07 19:37:24', '8', '', '', '', '', '', '', '', '', ''),
(30, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'hkub@example.com', '2021-07-07 19:37:24', '0', '4', '5', '3', '2021-07-07 19:37:24', '8', '', '', '', '', '', '', '', '', ''),
(31, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'leanna49@example.net', '2021-07-07 19:37:24', '8', '3', '8', '6', '2021-07-07 19:37:24', '0', '', '', '', '', '', '', '', '', ''),
(32, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'leuschke.zetta@example.net', '2021-07-07 19:37:24', '5', '3', '8', '5', '2021-07-07 19:37:24', '3', '', '', '', '', '', '', '', '', ''),
(33, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'helena52@example.org', '2021-07-07 19:37:24', '7', '4', '3', '3', '2021-07-07 19:37:24', '6', '', '', '', '', '', '', '', '', ''),
(34, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'arnulfo91@example.org', '2021-07-07 19:37:24', '6', '5', '3', '5', '2021-07-07 19:37:24', '4', '', '', '', '', '', '', '', '', ''),
(35, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'ned34@example.com', '2021-07-07 19:37:24', '9', '0', '6', '6', '2021-07-07 19:37:24', '0', '', '', '', '', '', '', '', '', ''),
(36, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'brenden87@example.org', '2021-07-07 19:37:24', '9', '2', '9', '4', '2021-07-07 19:37:24', '4', '', '', '', '', '', '', '', '', ''),
(37, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'fadel.estella@example.com', '2021-07-07 19:37:24', '1', '5', '2', '5', '2021-07-07 19:37:24', '7', '', '', '', '', '', '', '', '', ''),
(38, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'tierra45@example.org', '2021-07-07 19:37:24', '8', '3', '4', '7', '2021-07-07 19:37:24', '2', '', '', '', '', '', '', '', '', ''),
(39, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'qcronin@example.net', '2021-07-07 19:37:24', '7', '3', '8', '3', '2021-07-07 19:37:24', '2', '', '', '', '', '', '', '', '', ''),
(40, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'damien.mccullough@example.net', '2021-07-07 19:37:24', '1', '7', '3', '7', '2021-07-07 19:37:24', '3', '', '', '', '', '', '', '', '', ''),
(41, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'yveum@example.com', '2021-07-07 19:37:24', '9', '1', '7', '3', '2021-07-07 19:37:24', '0', '', '', '', '', '', '', '', '', ''),
(42, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'joberbrunner@example.org', '2021-07-07 19:37:24', '6', '7', '2', '7', '2021-07-07 19:37:24', '2', '', '', '', '', '', '', '', '', ''),
(43, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'fae45@example.com', '2021-07-07 19:37:24', '6', '7', '4', '1', '2021-07-07 19:37:24', '7', '', '', '', '', '', '', '', '', ''),
(44, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'haley.aubree@example.org', '2021-07-07 19:37:24', '4', '6', '8', '1', '2021-07-07 19:37:24', '2', '', '', '', '', '', '', '', '', ''),
(45, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'demond82@example.org', '2021-07-07 19:37:24', '1', '5', '4', '3', '2021-07-07 19:37:24', '7', '', '', '', '', '', '', '', '', ''),
(46, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'haven.murphy@example.com', '2021-07-07 19:37:24', '0', '2', '0', '5', '2021-07-07 19:37:24', '9', '', '', '', '', '', '', '', '', ''),
(47, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'zachariah52@example.net', '2021-07-07 19:37:24', '8', '5', '6', '0', '2021-07-07 19:37:24', '5', '', '', '', '', '', '', '', '', ''),
(48, '2021-07-07 23:37:26', '2021-07-07 23:37:26', 'funk.fred@example.net', '2021-07-07 19:37:24', '7', '2', '7', '3', '2021-07-07 19:37:24', '5', '', '', '', '', '', '', '', '', ''),
(49, '2021-07-07 23:37:27', '2021-07-07 23:37:27', 'brennon.weber@example.org', '2021-07-07 19:37:24', '4', '1', '9', '1', '2021-07-07 19:37:24', '6', '', '', '', '', '', '', '', '', ''),
(50, '2021-07-07 23:37:27', '2021-07-07 23:37:27', 'nolan.gianni@example.net', '2021-07-07 19:37:24', '4', '9', '0', '4', '2021-07-07 19:37:24', '3', '', '', '', '', '', '', '', '', ''),
(51, '2021-07-07 23:37:27', '2021-07-07 23:37:27', 'moriah.weissnat@example.org', '2021-07-07 19:37:24', '2', '8', '1', '4', '2021-07-07 19:37:24', '2', '', '', '', '', '', '', '', '', ''),
(52, '2021-07-07 23:37:27', '2021-07-07 23:37:27', 'bridgette20@example.org', '2021-07-07 19:37:24', '8', '7', '8', '3', '2021-07-07 19:37:24', '7', '', '', '', '', '', '', '', '', '');

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
-- Table structure for table `finances`
--

CREATE TABLE `finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `finances`
--

INSERT INTO `finances` (`id`, `created_at`, `updated_at`, `email`, `name`, `amount`, `due`) VALUES
(4, '2021-07-07 21:31:10', '2021-09-22 03:35:18', 'demario48@example.net', 'Mr. Guido Harris DDS', '500', '2021-09-30 04:00:00'),
(7, '2021-07-07 21:31:10', '2021-07-07 21:31:10', 'jay29@example.org', 'Ms. Patricia Smitham DVM', '2', '2021-07-07 21:31:08'),
(8, '2021-07-07 21:31:10', '2021-07-07 21:31:10', 'gmaggio@example.org', 'Ralph Bartell', '9', '2021-07-07 21:31:08'),
(9, '2021-07-07 21:31:10', '2021-07-07 21:31:10', 'roscoe27@example.com', 'Marian Simonis', '6', '2021-07-07 21:31:08'),
(10, '2021-07-07 21:31:10', '2021-07-07 21:31:10', 'domenic07@example.net', 'Morris Borer', '9', '2021-07-07 21:31:08'),
(11, '2021-07-07 21:31:10', '2021-07-07 21:31:10', 'fiona87@example.com', 'Alva Bernhard PhD', '2', '2021-07-07 21:31:08'),
(12, '2021-07-07 21:31:10', '2021-07-07 21:31:10', 'howell61@example.com', 'Dr. Winfield Gerlach V', '7', '2021-07-07 21:31:08'),
(13, '2021-07-07 21:31:10', '2021-07-07 21:31:10', 'araceli71@example.net', 'Jameson Mosciski I', '7', '2021-07-07 21:31:08'),
(14, '2021-07-07 21:31:10', '2021-07-07 21:31:10', 'yazmin.mayert@example.com', 'Dana Shields IV', '1', '2021-07-07 21:31:08'),
(15, '2021-07-07 21:31:10', '2021-07-07 21:31:10', 'ruecker.bill@example.org', 'Alexandra Breitenberg I', '9', '2021-07-07 21:31:08'),
(16, '2021-07-07 21:31:10', '2021-07-07 21:31:10', 'akuhlman@example.net', 'Dr. Jany Schultz PhD', '6', '2021-07-07 21:31:08'),
(17, '2021-07-07 21:31:10', '2021-07-07 21:31:10', 'ukozey@example.net', 'Mrs. Lacy Kris', '9', '2021-07-07 21:31:08'),
(18, '2021-07-07 21:31:10', '2021-07-07 21:31:10', 'beulah.barrows@example.com', 'Alvis Harber', '9', '2021-07-07 21:31:08'),
(19, '2021-07-07 21:31:10', '2021-07-07 21:31:10', 'zemlak.gail@example.net', 'Erick Steuber', '7', '2021-07-07 21:31:08'),
(20, '2021-07-07 21:31:10', '2021-07-07 21:31:10', 'markus16@example.com', 'Dr. Brody Wunsch', '0', '2021-07-07 21:31:08'),
(21, '2021-07-07 21:31:10', '2021-07-07 21:31:10', 'johanna00@example.com', 'Ms. Norma Collier DVM', '0', '2021-07-07 21:31:08'),
(22, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'casandra62@example.org', 'Clotilde Torp I', '8', '2021-07-07 21:31:08'),
(23, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'marge89@example.net', 'Emiliano Ward', '5', '2021-07-07 21:31:08'),
(24, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'katrine71@example.org', 'Rogelio Waelchi', '2', '2021-07-07 21:31:08'),
(25, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'edickens@example.org', 'Sebastian Jacobs PhD', '4', '2021-07-07 21:31:08'),
(26, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'malika05@example.net', 'Pierce Ebert', '0', '2021-07-07 21:31:08'),
(27, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'mccullough.timmothy@example.net', 'Ivory Price', '5', '2021-07-07 21:31:08'),
(28, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'gibson.thea@example.com', 'Edmond Adams', '3', '2021-07-07 21:31:08'),
(29, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'klemke@example.net', 'Chadd Abbott MD', '5', '2021-07-07 21:31:08'),
(30, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'aschaden@example.org', 'Ms. Breanna Keeling', '8', '2021-07-07 21:31:08'),
(31, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'reilly.marina@example.org', 'Prof. Amiya Kutch', '0', '2021-07-07 21:31:08'),
(32, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'hill.lavon@example.com', 'Ian Price', '9', '2021-07-07 21:31:08'),
(33, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'josefina.koss@example.org', 'Deven Treutel', '7', '2021-07-07 21:31:08'),
(34, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'gzieme@example.net', 'Warren Runolfsson', '0', '2021-07-07 21:31:08'),
(35, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'hermann.margot@example.net', 'Jacynthe Doyle', '1', '2021-07-07 21:31:08'),
(36, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'cummerata.adelbert@example.com', 'Nettie Zieme', '4', '2021-07-07 21:31:08'),
(37, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'nienow.keon@example.net', 'Clotilde Schimmel', '7', '2021-07-07 21:31:08'),
(38, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'stacey20@example.net', 'Mr. Judah Beer II', '4', '2021-07-07 21:31:08'),
(39, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'sonya.kiehn@example.org', 'Kirsten Gusikowski', '0', '2021-07-07 21:31:08'),
(40, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'krajcik.jeromy@example.net', 'Mario Bosco III', '8', '2021-07-07 21:31:08'),
(41, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'uskiles@example.org', 'Gilda Skiles', '4', '2021-07-07 21:31:08'),
(42, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'rosamond52@example.net', 'Edyth Zieme', '7', '2021-07-07 21:31:08'),
(43, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'jeramy39@example.net', 'Maud Hamill PhD', '3', '2021-07-07 21:31:08'),
(44, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'vandervort.brennon@example.org', 'Prof. Wilma Ankunding', '3', '2021-07-07 21:31:08'),
(45, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'howell.mable@example.com', 'Gregorio Orn', '6', '2021-07-07 21:31:08'),
(46, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'sfisher@example.org', 'Donnie Vandervort', '6', '2021-07-07 21:31:08'),
(47, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'enos.sawayn@example.com', 'Alberto Greenholt', '0', '2021-07-07 21:31:08'),
(48, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'schaefer.willow@example.com', 'Lisa Hintz', '8', '2021-07-07 21:31:08'),
(49, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'jast.jordy@example.org', 'Justice Prohaska Sr.', '6', '2021-07-07 21:31:08'),
(50, '2021-07-07 21:31:11', '2021-07-07 21:31:11', 'okuneva.watson@example.net', 'Dr. Verdie Reichert', '5', '2021-07-07 21:31:08'),
(51, '2021-07-14 17:49:35', '2021-07-07 17:49:35', 'chewec03@gmail.com', 'Chanda Chewe', '100', '2021-07-22 17:49:35'),
(52, NULL, NULL, '', '', '', '0000-00-00 00:00:00'),
(56, '2021-08-09 13:22:12', '2021-08-09 13:22:12', 'chungul@gmail.com', 'Chungu Lubemba', '250', '2021-04-12 04:00:00'),
(57, '2021-09-22 09:32:01', '2021-09-22 09:32:01', 'mwiza@gmail.com', 'Mwiza Paul', '900', '2021-09-29 04:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `handouts`
--

CREATE TABLE `handouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploaded_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `handouts`
--

INSERT INTO `handouts` (`id`, `created_at`, `updated_at`, `file`, `target`, `due`, `uploaded_by`) VALUES
(1, '2021-07-11 21:59:11', '2021-07-11 21:59:11', 'handouts/Application Letter-Unicaf.pdf', 'G12', '2021-07-22', 'Chanda Chewe'),
(2, '2021-07-11 22:39:10', '2021-07-11 22:39:10', 'handouts/Chanda Chewe Cv.pdf', 'G12', '2021-07-29', 'Chanda Chewe'),
(3, '2021-07-31 11:53:14', '2021-07-31 11:53:14', 'handouts/9702_w10_ms_11-Copy.pdf', 'GCE', '2021-07-29', 'Chanda Chewe Cc');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_07_105131_create_finances_table', 2),
(5, '2021_07_07_105316_create_announcements_table', 2),
(6, '2021_07_07_105352_create_results_table', 2),
(7, '2021_07_07_185336_create_examinationresults_table', 3),
(8, '2021_07_09_094200_create_assignmentsuploads_table', 4),
(9, '2021_07_11_173429_create_handouts_table', 5),
(10, '2021_07_12_071604_create_studentsqsns_table', 6),
(11, '2021_07_19_081837_create_adminprofiles_table', 7),
(12, '2021_08_02_130012_create_videosuploadings_table', 8);

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
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `physics` int(100) NOT NULL,
  `chemistry` int(100) NOT NULL,
  `biology` int(100) NOT NULL,
  `mathematics` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `created_at`, `updated_at`, `email`, `course`, `marks`, `comments`, `physics`, `chemistry`, `biology`, `mathematics`) VALUES
(1, NULL, NULL, 'chewec03@gmail.com', '', '', 'can do better', 55, 12, 98, 12),
(2, NULL, NULL, '', '', '', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentsqsns`
--

CREATE TABLE `studentsqsns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `superadmin` tinyint(1) NOT NULL,
  `comments` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `school`, `remember_token`, `created_at`, `updated_at`, `admin`, `superadmin`, `comments`, `picture`) VALUES
(2, 'Chanda Chewe', 'chewec03@gmail.com', NULL, '$2y$10$J8n5bIP4QzWb/sk8u9wiWu1HCTBwPeBu5HQsKFjUnwMEe5..BErNu', '', NULL, '2021-07-12 12:04:16', '2021-07-12 12:04:16', 1, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `videosuploadings`
--

CREATE TABLE `videosuploadings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fileToUpload` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `newamount` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminprofiles`
--
ALTER TABLE `adminprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignmentsuploads`
--
ALTER TABLE `assignmentsuploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examinationresults`
--
ALTER TABLE `examinationresults`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `examinationresults_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `finances`
--
ALTER TABLE `finances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `finances_email_unique` (`email`);

--
-- Indexes for table `handouts`
--
ALTER TABLE `handouts`
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
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `results_email_unique` (`email`);

--
-- Indexes for table `studentsqsns`
--
ALTER TABLE `studentsqsns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videosuploadings`
--
ALTER TABLE `videosuploadings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminprofiles`
--
ALTER TABLE `adminprofiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `assignmentsuploads`
--
ALTER TABLE `assignmentsuploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `examinationresults`
--
ALTER TABLE `examinationresults`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finances`
--
ALTER TABLE `finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `handouts`
--
ALTER TABLE `handouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentsqsns`
--
ALTER TABLE `studentsqsns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `videosuploadings`
--
ALTER TABLE `videosuploadings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
