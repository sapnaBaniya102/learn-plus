-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 11, 2021 at 06:24 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Sapna Bnaiya', 'sapna123@gmail.com', '$2y$10$tA5sojeuCzdwLuayYK9KgeVf227/p/cSL3j0GuJf87hbkDNl67wga', '2021-10-09 12:08:32', '2021-10-09 12:08:32'),
(2, 'Sapna Bnaiya', 'sapna123@gmail.com', '$2y$10$AkfFacwxKGETftd55KhJU.kZEsMTlVmKn/XGLyP6YzL425netJkLG', '2021-10-09 12:08:39', '2021-10-09 12:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `tittle`, `text`, `img_link`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'School Information', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur', 'gallery_1633869216.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unk...', 'Active', '2021-10-10 10:14:18', '2021-10-10 10:14:42'),
(2, 'Sport Champion', 'sports makes you fit and you should be interested in it.', 'gallery_1633869216.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', '2021-10-10 10:19:45', '2021-10-10 10:19:45');

-- --------------------------------------------------------

--
-- Table structure for table `coursecats`
--

DROP TABLE IF EXISTS `coursecats`;
CREATE TABLE IF NOT EXISTS `coursecats` (
  `c_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursecats`
--

INSERT INTO `coursecats` (`c_id`, `c_name`, `c_status`, `created_at`, `updated_at`) VALUES
(1, 'BCA', 'Active', '2021-10-10 05:41:11', '2021-10-10 05:41:11'),
(2, 'BBA', 'Active', '2021-10-10 05:56:38', '2021-10-10 05:56:38');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imglink` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` int(11) NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `text`, `time`, `duration`, `imglink`, `c_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Numerical Method', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '09:18:00', '1', 'welcome_1633858574.jpg', 1, 'Active', '2021-10-10 05:48:45', '2021-10-10 05:48:45'),
(2, 'Microprocessor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '10:19:00', '1', 'welcome_1633858574.jpg', 1, 'Active', '2021-10-10 05:49:24', '2021-10-10 05:49:24'),
(3, 'Math', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '18:27:00', '1', 'welcome_1633858574.jpg', 2, 'Active', '2021-10-10 05:57:39', '2021-10-10 05:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `tittle`, `date`, `time`, `address`, `img_link`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'One Year Membership - Graphic Design', '2021-10-11', '23:19', 'Mascot Plaza ,Uttara', 'event_1633880142.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', '2021-10-10 09:51:23', '2021-10-10 09:51:23'),
(2, 'Master Of PDF, PSD And TXT EBook', '2021-10-12', '00:21', 'Mascot Plaza ,Uttara', 'event_1633880164.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', '2021-10-10 09:52:18', '2021-10-10 09:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `title`, `file_link`, `extension`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'welcome', 'welcome_1633858574.jpg', 'jpg', NULL, 1, '2021-10-10 03:51:14', '2021-10-10 03:51:14'),
(2, 'slider', 'slider_1633859257.jpg', 'jpg', NULL, 1, '2021-10-10 04:02:37', '2021-10-10 04:02:37'),
(3, 'teacher', 'teacher_1633867556.png', 'png', NULL, 1, '2021-10-10 06:20:56', '2021-10-10 06:20:56'),
(4, 'teacher', 'teacher_1633867961.png', 'png', NULL, 1, '2021-10-10 06:27:41', '2021-10-10 06:27:41'),
(5, 'gallery', 'gallery_1633869216.jpg', 'jpg', NULL, 1, '2021-10-10 06:48:37', '2021-10-10 06:48:37'),
(6, 'gallery', 'gallery_1633869243.jpg', 'jpg', NULL, 1, '2021-10-10 06:49:03', '2021-10-10 06:49:03'),
(7, 'gallery', 'gallery_1633869267.jpg', 'jpg', NULL, 1, '2021-10-10 06:49:27', '2021-10-10 06:49:27'),
(8, 'event', 'event_1633880142.png', 'png', NULL, 1, '2021-10-10 09:50:42', '2021-10-10 09:50:42'),
(9, 'event', 'event_1633880164.png', 'png', NULL, 1, '2021-10-10 09:51:04', '2021-10-10 09:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `img_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'gallery1', 'gallery_1633869216.jpg', 'Active', '2021-10-10 06:55:42', '2021-10-10 06:55:42'),
(2, 'gallery2', 'gallery_1633869243.jpg', 'Active', '2021-10-10 09:33:49', '2021-10-10 09:33:49'),
(3, 'gallery3', 'gallery_1633869267.jpg', 'Active', '2021-10-10 09:34:16', '2021-10-10 09:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

DROP TABLE IF EXISTS `gallery_categories`;
CREATE TABLE IF NOT EXISTS `gallery_categories` (
  `g_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `g_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `details`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Sapna Bnaiya', 'sapna123@gmail.com', 'Computer Science', 'mbjhgjgyfhgcgfc', '9827190713', '2021-10-10 11:23:41', '2021-10-10 11:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_10_09_161211_create_siteconfigs_table', 1),
(2, '2021_10_09_161700_create_sliders_table', 2),
(3, '2021_10_09_161819_create_blogs_table', 3),
(4, '2021_10_09_161949_create_coursecats_table', 4),
(5, '2021_10_09_162039_create_courses_table', 5),
(6, '2021_10_09_162150_create_events_table', 6),
(7, '2021_10_09_162312_create_gallery_categories_table', 7),
(8, '2021_10_09_162416_create_galleries_table', 8),
(9, '2021_10_09_162531_create_news_table', 9),
(10, '2021_10_09_162638_create_notices_table', 10),
(11, '2021_10_09_162815_create_results_table', 11),
(12, '2021_10_09_162923_create_teachers_table', 12),
(13, '2021_10_09_163144_create_why_choose_us_table', 13),
(14, '2021_10_09_173342_create_admin_users_table', 14),
(15, '2021_10_10_031832_create_files_table', 15),
(16, '2021_10_10_195048_create_testimonials_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imglink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `date`, `details`, `status`, `imglink`, `created_at`, `updated_at`) VALUES
(1, 'DIGITAL MARKETING', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do', '2021-10-12', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', 'welcome_1633858574.jpg', '2021-10-10 10:32:15', '2021-10-10 10:40:06'),
(2, 'DIGITAL MARKETING', 'Lorem ipsum dolor sit amet, consectetur.', '2021-10-12', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', 'welcome_1633858574.jpg', '2021-10-10 10:41:13', '2021-10-10 10:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
CREATE TABLE IF NOT EXISTS `notices` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `started` date NOT NULL,
  `ended` date NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `heading`, `date`, `detail`, `started`, `ended`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Learn Web Design & Development', '2021-10-11', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unk...  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unk...', '2021-10-15', '2021-10-23', 'Active', '2021-10-10 05:16:05', '2021-10-10 05:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `name`, `date`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Social Media Network & Marketing', '2021-10-11', 'http://127.0.0.1:8000/siteconfig', 'Active', '2021-10-10 05:34:24', '2021-10-10 05:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `siteconfigs`
--

DROP TABLE IF EXISTS `siteconfigs`;
CREATE TABLE IF NOT EXISTS `siteconfigs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `site_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imglink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siteconfigs`
--

INSERT INTO `siteconfigs` (`id`, `site_key`, `site_value`, `site_name`, `imglink`, `status`, `created_at`, `updated_at`) VALUES
(2, 'welcome', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'Welcome to Learn Plus', 'welcome_1633858574.jpg', 'Active', '2021-10-10 03:56:59', '2021-10-10 03:56:59'),
(3, 'introduction', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'Introduction', 'slider_1633859257.jpg', 'Active', '2021-10-10 04:43:23', '2021-10-10 04:43:23'),
(5, 'objective', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'Objectives', 'welcome_1633858574.jpg', 'Active', '2021-10-10 04:56:35', '2021-10-10 04:56:35'),
(6, 'mission', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'Mission', '-', 'Active', '2021-10-10 05:08:43', '2021-10-10 05:08:43'),
(7, 'chooseus', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'WhyChooseUs', '-', 'Active', '2021-10-10 05:09:10', '2021-10-10 05:09:10'),
(8, 'website', 'www.yoursite.com', 'website', '-', 'Active', '2021-10-10 11:10:09', '2021-10-10 11:10:09'),
(9, 'phone', '+90 123 45 67', 'phone', '-', 'Active', '2021-10-10 11:10:40', '2021-10-10 11:10:40'),
(10, 'address', 'INC 22 Elizabeth Str. Melbourne. Victoria 8777', 'address', '-', 'Active', '2021-10-10 11:11:06', '2021-10-10 11:11:06'),
(11, 'aboutus', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'aboutus', '-', 'Active', '2021-10-10 11:29:38', '2021-10-10 11:29:38'),
(12, 'working_process', 'Lorem ipsum m dolor sit amet, consectetur adipiing elit.dolor sit amet, consectetur adipiing elit. Integer lorem quam..', 'Multi-Tier Courses', '-', 'Active', '2021-10-10 13:38:27', '2021-10-10 13:38:27'),
(13, 'working_process', 'Lorem ipsum m dolor sit amet, consectetur adipiing elit.dolor sit amet, consectetur adipiing elit. Integer lorem quam..', 'Sell Online Courses', '-', 'Active', '2021-10-10 13:39:08', '2021-10-10 13:39:08'),
(14, 'working_process', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'Advanced Quizzing', '-', 'Active', '2021-10-10 13:39:43', '2021-10-10 13:39:43'),
(15, 'who-we-are', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'WHO WE ARE', 'welcome_1633858574.jpg', 'Active', '2021-10-10 13:44:39', '2021-10-10 13:44:39'),
(16, 'counter', '3312', 'Total Students', '-', 'Active', '2021-10-10 13:48:38', '2021-10-10 13:48:38'),
(17, 'counter', '450', 'Active Courses', '-', 'Active', '2021-10-10 13:49:26', '2021-10-10 13:49:26'),
(18, 'counter', '4590', 'Quiz Completed', '-', 'Active', '2021-10-10 13:49:57', '2021-10-10 13:49:57'),
(19, 'counter', '1238', 'Scholarship', '-', 'Active', '2021-10-10 13:50:28', '2021-10-10 13:50:28'),
(20, 'message-from-principal', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.lorem Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took. .. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde mollitia vero quisquam est explicabo neque optio accusamus eveniet, aliquid et incidunt at facere dolorem deserunt? Id eum aliquid praesentium eaque!', 'MESSAGE FROM PRINCIPLE', 'slider_1633859257.jpg', 'Active', '2021-10-10 14:12:22', '2021-10-10 14:12:22'),
(21, 'facebook', 'https://www.facebook.com/', 'facebook', '-', 'Active', '2021-10-10 23:07:50', '2021-10-10 23:07:50'),
(22, 'google', 'https://www.google.com.np/', 'google', '-', 'Active', '2021-10-10 23:08:33', '2021-10-10 23:08:33'),
(23, 'linkedin', 'https://np.linkedin.com/', 'linkedin', '-', 'Active', '2021-10-10 23:09:47', '2021-10-10 23:09:47');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btnlink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `header`, `sub_heading`, `text`, `img_link`, `btn`, `btnlink`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slider1', 'Learn Plus template', 'Learning Learn plus', 'Great Theme For Education, University Learning Websites with tons of options and custom sections!', 'slider_1633859257.jpg', 'Read More About', 'aboutus', 'Active', '2021-10-10 03:40:16', '2021-10-10 04:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `post`, `img_link`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rishi Khanal', 'Supervisor', 'teacher_1633867556.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', '2021-10-10 06:25:22', '2021-10-10 06:25:22'),
(2, 'Prabin Poudel', 'Teacher', 'teacher_1633867961.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', '2021-10-10 06:28:18', '2021-10-10 06:28:18');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us`
--

DROP TABLE IF EXISTS `why_choose_us`;
CREATE TABLE IF NOT EXISTS `why_choose_us` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us`
--

INSERT INTO `why_choose_us` (`id`, `heading`, `text`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Our Mission', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'Active', '2021-10-10 04:13:11', '2021-10-10 04:13:11'),
(2, 'Our Vision', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'Active', '2021-10-10 04:13:26', '2021-10-10 04:13:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
