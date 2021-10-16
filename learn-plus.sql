-- -------------------------------------------------------------
-- TablePlus 4.5.0(396)
--
-- https://tableplus.com/
--
-- Database: learn-plus
-- Generation Time: 2021-10-16 15:12:10.6520
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `admin_users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tittle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `chooseuses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `coursecats` (
  `c_id` int unsigned NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imglink` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` int NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tittle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `files` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `gallery_categories` (
  `g_id` int unsigned NOT NULL AUTO_INCREMENT,
  `g_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imglink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `notices` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `started` date NOT NULL,
  `ended` date NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `results` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `siteconfigs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `site_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imglink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `btnlink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `teachers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `why_choose_us` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Sapna Bnaiya', 'sapna123@gmail.com', '$2y$10$tA5sojeuCzdwLuayYK9KgeVf227/p/cSL3j0GuJf87hbkDNl67wga', '2021-10-09 17:53:32', '2021-10-09 17:53:32'),
(2, 'Sapna Bnaiya', 'sapna123@gmail.com', '$2y$10$AkfFacwxKGETftd55KhJU.kZEsMTlVmKn/XGLyP6YzL425netJkLG', '2021-10-09 17:53:39', '2021-10-09 17:53:39');

INSERT INTO `blogs` (`id`, `tittle`, `text`, `img_link`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'School Information', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur', 'gallery_1633869216.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unk...', 'Active', '2021-10-10 15:59:18', '2021-10-10 15:59:42'),
(2, 'Sport Champion', 'sports makes you fit and you should be interested in it.', 'gallery_1633869216.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', '2021-10-10 16:04:45', '2021-10-10 16:04:45');

INSERT INTO `chooseuses` (`id`, `heading`, `text`, `status`, `created_at`, `updated_at`) VALUES
(1, 'text', 'text', 'Active', '2021-10-13 17:39:49', '2021-10-13 17:39:49');

INSERT INTO `coursecats` (`c_id`, `c_name`, `c_status`, `created_at`, `updated_at`) VALUES
(1, 'BCA', 'Active', '2021-10-10 11:26:11', '2021-10-10 11:26:11'),
(2, 'BBA', 'Active', '2021-10-10 11:41:38', '2021-10-10 11:41:38');

INSERT INTO `courses` (`id`, `name`, `text`, `time`, `duration`, `imglink`, `c_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Numerical Method', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '09:18:00', '1', 'welcome_1633858574.jpg', 1, 'Active', '2021-10-10 11:33:45', '2021-10-10 11:33:45'),
(2, 'Microprocessor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '10:19:00', '1', 'welcome_1633858574.jpg', 1, 'Active', '2021-10-10 11:34:24', '2021-10-10 11:34:24'),
(3, 'Math', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '18:27:00', '1', 'welcome_1633858574.jpg', 2, 'Active', '2021-10-10 11:42:39', '2021-10-10 11:42:39');

INSERT INTO `events` (`id`, `tittle`, `date`, `time`, `address`, `img_link`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'One Year Membership - Graphic Design', '2021-10-11', '23:19', 'Mascot Plaza ,Uttara', 'event_1633880142.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', '2021-10-10 15:36:23', '2021-10-10 15:36:23'),
(2, 'Master Of PDF, PSD And TXT EBook', '2021-10-12', '00:21', 'Mascot Plaza ,Uttara', 'event_1633880164.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', '2021-10-10 15:37:18', '2021-10-10 15:37:18');

INSERT INTO `files` (`id`, `title`, `file_link`, `extension`, `details`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'welcome', 'welcome_1633858574.jpg', 'jpg', NULL, 1, '2021-10-10 03:51:14', '2021-10-10 03:51:14', NULL),
(2, 'slider', 'slider_1633859257.jpg', 'jpg', NULL, 1, '2021-10-10 04:02:37', '2021-10-10 04:02:37', NULL),
(3, 'teacher', 'teacher_1633867556.png', 'png', NULL, 1, '2021-10-10 06:20:56', '2021-10-10 06:20:56', NULL),
(4, 'teacher', 'teacher_1633867961.png', 'png', NULL, 1, '2021-10-10 06:27:41', '2021-10-10 06:27:41', NULL),
(5, 'gallery', 'gallery_1633869216.jpg', 'jpg', NULL, 1, '2021-10-10 06:48:37', '2021-10-10 06:48:37', NULL),
(6, 'gallery', 'gallery_1633869243.jpg', 'jpg', NULL, 1, '2021-10-10 06:49:03', '2021-10-10 06:49:03', NULL),
(7, 'gallery', 'gallery_1633869267.jpg', 'jpg', NULL, 1, '2021-10-10 06:49:27', '2021-10-10 06:49:27', NULL),
(8, 'event', 'event_1633880142.png', 'png', NULL, 1, '2021-10-10 09:50:42', '2021-10-10 09:50:42', NULL),
(9, 'event', 'event_1633880164.png', 'png', NULL, 1, '2021-10-10 09:51:04', '2021-10-10 09:51:04', NULL),
(10, 'test', 'test_1634141352.jpg', 'jpg', NULL, 1, '2021-10-13 10:24:12', '2021-10-13 16:37:16', '2021-10-13 16:37:16'),
(11, 'test', 'test_1634142318.jpg', 'jpg', NULL, 1, '2021-10-13 10:40:18', '2021-10-13 16:37:12', '2021-10-13 16:37:12'),
(12, 'logo', 'logo_1634365958.png', 'png', NULL, 1, '2021-10-16 06:32:38', '2021-10-16 06:32:38', NULL);

INSERT INTO `galleries` (`id`, `name`, `img_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'gallery1', 'gallery_1633869216.jpg', 'Active', '2021-10-10 12:40:42', '2021-10-10 12:40:42');

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `details`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Sapna Bnaiya', 'sapna123@gmail.com', 'Computer Science', 'mbjhgjgyfhgcgfc', '9827190713', '2021-10-10 17:08:41', '2021-10-10 17:08:41');

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
(16, '2021_10_10_195048_create_testimonials_table', 16),
(17, '2021_10_13_163435_create_files_table', 17),
(18, '2021_10_13_172339_create_chooseuses_table', 18);

INSERT INTO `news` (`id`, `title`, `text`, `date`, `details`, `status`, `imglink`, `created_at`, `updated_at`) VALUES
(1, 'DIGITAL MARKETING', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do', '2021-10-12', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', 'welcome_1633858574.jpg', '2021-10-10 16:17:15', '2021-10-10 16:25:06'),
(2, 'DIGITAL MARKETING', 'Lorem ipsum dolor sit amet, consectetur.', '2021-10-12', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', 'welcome_1633858574.jpg', '2021-10-10 16:26:13', '2021-10-10 16:26:13');

INSERT INTO `notices` (`id`, `heading`, `date`, `detail`, `started`, `ended`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Learn Web Design & Development', '2021-10-11', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unk...  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unk...', '2021-10-15', '2021-10-23', 'Active', '2021-10-10 11:01:05', '2021-10-10 11:01:05');

INSERT INTO `results` (`id`, `name`, `date`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Social Media Network & Marketing', '2021-10-11', 'http://127.0.0.1:8000/siteconfig', 'Active', '2021-10-10 11:19:24', '2021-10-10 11:19:24');

INSERT INTO `siteconfigs` (`id`, `site_key`, `site_value`, `site_name`, `imglink`, `status`, `created_at`, `updated_at`) VALUES
(2, 'welcome', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'Welcome to Learn Plus', 'welcome_1633858574.jpg', 'Active', '2021-10-10 09:41:59', '2021-10-10 09:41:59'),
(3, 'introduction', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'Introduction', 'slider_1633859257.jpg', 'Active', '2021-10-10 10:28:23', '2021-10-10 10:28:23'),
(5, 'objective', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'Objectives', 'welcome_1633858574.jpg', 'Active', '2021-10-10 10:41:35', '2021-10-10 10:41:35'),
(6, 'mission', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'Mission', '-', 'Active', '2021-10-10 10:53:43', '2021-10-10 10:53:43'),
(7, 'chooseus', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'WhyChooseUs', '-', 'Active', '2021-10-10 10:54:10', '2021-10-10 10:54:10'),
(8, 'website', 'www.yoursite.com', 'website', '-', 'Active', '2021-10-10 16:55:09', '2021-10-10 16:55:09'),
(9, 'phone', '+90 123 45 67', 'phone', '-', 'Active', '2021-10-10 16:55:40', '2021-10-10 16:55:40'),
(10, 'address', 'INC 22 Elizabeth Str. Melbourne. Victoria 8777', 'address', '-', 'Active', '2021-10-10 16:56:06', '2021-10-10 16:56:06'),
(11, 'aboutus', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'aboutus', '-', 'Active', '2021-10-10 17:14:38', '2021-10-10 17:14:38'),
(12, 'working_process', 'Lorem ipsum m dolor sit amet, consectetur adipiing elit.dolor sit amet, consectetur adipiing elit. Integer lorem quam..', 'Multi-Tier Courses', '-', 'Active', '2021-10-10 19:23:27', '2021-10-10 19:23:27'),
(13, 'working_process', 'Lorem ipsum m dolor sit amet, consectetur adipiing elit.dolor sit amet, consectetur adipiing elit. Integer lorem quam..', 'Sell Online Courses', '-', 'Active', '2021-10-10 19:24:08', '2021-10-10 19:24:08'),
(14, 'working_process', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'Advanced Quizzing', '-', 'Active', '2021-10-10 19:24:43', '2021-10-10 19:24:43'),
(15, 'who-we-are', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took...', 'WHO WE ARE', 'welcome_1633858574.jpg', 'Active', '2021-10-10 19:29:39', '2021-10-10 19:29:39'),
(16, 'counter', '3312', 'Total Students', '-', 'Active', '2021-10-10 19:33:38', '2021-10-10 19:33:38'),
(17, 'counter', '450', 'Active Courses', '-', 'Active', '2021-10-10 19:34:26', '2021-10-10 19:34:26'),
(18, 'counter', '4590', 'Quiz Completed', '-', 'Active', '2021-10-10 19:34:57', '2021-10-10 19:34:57'),
(19, 'counter', '1238', 'Scholarship', '-', 'Active', '2021-10-10 19:35:28', '2021-10-10 19:35:28'),
(20, 'message-from-principal', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.lorem Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the, when an unknown printer took. .. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde mollitia vero quisquam est explicabo neque optio accusamus eveniet, aliquid et incidunt at facere dolorem deserunt? Id eum aliquid praesentium eaque!', 'MESSAGE FROM PRINCIPLE', 'slider_1633859257.jpg', 'Active', '2021-10-10 19:57:22', '2021-10-10 19:57:22'),
(21, 'facebook', 'https://www.facebook.com/', 'facebook', '-', 'Active', '2021-10-11 04:52:50', '2021-10-11 04:52:50'),
(22, 'google', 'https://www.google.com.np/', 'google', '-', 'Active', '2021-10-11 04:53:33', '2021-10-11 04:53:33'),
(23, 'linkedin', 'https://np.linkedin.com/', 'linkedin', '-', 'Active', '2021-10-11 04:54:47', '2021-10-11 04:54:47'),
(26, 'about', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took...', 'about', '-', 'Active', '2021-10-16 06:22:00', '2021-10-16 06:22:00'),
(27, 'name', 'Best Learning Management Template For Ever.', 'name', '-', 'Active', '2021-10-16 06:30:27', '2021-10-16 06:30:27'),
(28, 'logo', 'Best Learning Management Template For Ever.', 'logo', 'logo_1634365958.png', 'Active', '2021-10-16 06:33:15', '2021-10-16 09:09:31');

INSERT INTO `sliders` (`id`, `name`, `header`, `sub_heading`, `text`, `img_link`, `btn`, `btnlink`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slider1', 'Learn Plus template', 'Learning Learn plus', 'Great Theme For Education, University Learning Websites with tons of options and custom sections!', 'slider_1633859257.jpg', 'Read More About', 'aboutus', 'Active', '2021-10-10 09:25:16', '2021-10-10 09:48:11');

INSERT INTO `teachers` (`id`, `name`, `post`, `img_link`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rishi Khanal', 'Supervisor', 'teacher_1633867556.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', '2021-10-10 12:10:22', '2021-10-10 12:10:22'),
(2, 'Prabin Poudel', 'Teacher', 'teacher_1633867961.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi', 'Active', '2021-10-10 12:13:18', '2021-10-10 12:13:18');

INSERT INTO `why_choose_us` (`id`, `heading`, `text`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Our Mission', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'Active', '2021-10-10 09:58:11', '2021-10-10 09:58:11'),
(2, 'Our Vision', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'Active', '2021-10-10 09:58:26', '2021-10-10 09:58:26'),
(3, 'test1', 'test', 'Active', '2021-10-13 16:56:36', '2021-10-14 17:11:28');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;