-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 13, 2021 at 08:09 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `heading`, `sub_heading`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Welcome To Medi Equipment', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore aperiam fugit consequuntur voluptatibus ex sint iure in, distinctio sed dolorem aspernatur veritatis repellendus dolorum voluptate, animi libero officiis eveniet accusamus recusandae. Temporibus amet ducimus sapiente voluptatibus autem dolorem magnam quas, porro suscipit. Quibusdam culpa asperiores exercitationem architecto quo, temporibus vel! porro suscipit. Quibusdam culpa asperiores exercitationem architecto quo, temporibus vel!Sint voluptatum beatae necessitatibus quos mollitia vero, optio asperiores aut tempora iusto eum rerum, possimus, minus quidem ut saepe laboriosam. Praesentium aperiam accusantium minus repellendus accusamus neque iusto pariatur laudantium provident quod recusandae exercitationem natus dignissimos, molestias quibusdam doloremque eaque fugit molestiae modi quam unde. Error est dolor facere.', '1612707032.webp', '2021-02-07 08:10:32', '2021-02-07 08:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `accessories_categories`
--

CREATE TABLE `accessories_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `category_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessories_categories`
--

INSERT INTO `accessories_categories` (`id`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2', '2021-02-10 10:54:46', '2021-02-10 10:54:46'),
(2, 1, '1', '2021-02-10 10:54:50', '2021-02-10 10:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `accessories_category_images`
--

CREATE TABLE `accessories_category_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessories_category_images`
--

INSERT INTO `accessories_category_images` (`id`, `category_id`, `image`, `created_at`, `updated_at`) VALUES
(1, '2', '1612977098.jpg', '2021-02-10 11:11:38', '2021-02-10 11:11:38'),
(2, '1', '1612977108.jpg', '2021-02-10 11:11:48', '2021-02-10 11:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `heading`, `sub_heading`, `image`, `created_at`, `updated_at`) VALUES
(1, 'New Arrival', 'protective surgical mask', '1612641273.webp', '2021-02-06 13:54:33', '2021-02-06 13:54:33'),
(2, 'New Arrival', 'Protective Surgical Mask 2', '1612641358.webp', '2021-02-06 13:55:36', '2021-02-06 13:56:06');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogcategory` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogcategory`, `heading`, `sub_heading`, `image`, `created_at`, `updated_at`) VALUES
(2, '2', 'This Is Secound Post For XipBlog 1', '<div class=\"blog-post-content-inner mt-30px\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat.</p>\r\n</div>\r\n\r\n<div class=\"single-post-content\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n</div>', '1612980678.jpg', '2021-02-07 08:53:36', '2021-02-10 12:11:18'),
(3, '1\r\n', 'This Is Secound Post For XipBlog 2', '<div class=\"blog-post-content-inner mt-30px\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat.</p>\r\n</div>\r\n\r\n<div class=\"single-post-content\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n</div>', '1612709616.jpg', '2021-02-07 08:53:36', '2021-02-08 09:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogcategory` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `blogcategory`, `created_at`, `updated_at`) VALUES
(1, 'Vaccine', '2021-02-07 08:28:16', '2021-02-07 08:28:16'),
(2, 'Medicine', '2021-02-07 08:28:27', '2021-02-07 08:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `cartlists`
--

CREATE TABLE `cartlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `product_id` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cartlists`
--

INSERT INTO `cartlists` (`id`, `status`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2', '2021-02-10 15:54:51', '2021-02-10 15:54:51'),
(2, 1, '2', '2021-02-10 15:57:08', '2021-02-10 15:57:08'),
(3, 1, '2', '2021-02-10 15:57:09', '2021-02-10 15:57:09'),
(4, 1, '2', '2021-02-10 15:57:09', '2021-02-10 15:57:09'),
(5, 1, '1', '2021-02-10 15:57:19', '2021-02-10 15:57:19'),
(6, 1, '4', '2021-02-10 16:01:34', '2021-02-10 16:01:34'),
(7, 1, '1', '2021-02-10 16:03:01', '2021-02-10 16:03:01'),
(8, 1, '3', '2021-02-10 16:09:29', '2021-02-10 16:09:29'),
(9, 1, '2', '2021-02-10 16:16:06', '2021-02-10 16:16:06'),
(10, 1, '1', '2021-02-10 16:16:09', '2021-02-10 16:16:09'),
(11, 1, '1', '2021-02-10 16:18:45', '2021-02-10 16:18:45'),
(12, 1, '2', '2021-02-10 16:18:57', '2021-02-10 16:18:57'),
(13, 1, '3', '2021-02-12 13:41:43', '2021-02-12 13:41:43'),
(14, 1, '2', '2021-02-12 16:04:18', '2021-02-12 16:04:18'),
(15, 1, '2', '2021-02-12 16:20:21', '2021-02-12 16:20:21'),
(16, 1, '1', '2021-02-12 16:20:25', '2021-02-12 16:20:25'),
(17, 1, '3', '2021-02-12 16:21:07', '2021-02-12 16:21:07'),
(18, 1, '2', '2021-02-12 16:21:13', '2021-02-12 16:21:13'),
(19, 1, '2', '2021-02-12 16:21:15', '2021-02-12 16:21:15'),
(20, 1, '1', '2021-02-12 16:21:25', '2021-02-12 16:21:25'),
(21, 1, '4', '2021-02-12 16:21:31', '2021-02-12 16:21:31'),
(22, 1, '3', '2021-02-12 16:21:35', '2021-02-12 16:21:35'),
(23, 1, '2', '2021-02-12 16:21:38', '2021-02-12 16:21:38'),
(24, 1, '1', '2021-02-12 16:21:41', '2021-02-12 16:21:41'),
(25, 1, '2', '2021-02-12 16:22:30', '2021-02-12 16:22:30'),
(26, 1, '1', '2021-02-12 16:23:19', '2021-02-12 16:23:19'),
(27, 1, NULL, '2021-02-12 16:24:44', '2021-02-12 16:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `product_id` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `status`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2', '2021-02-10 15:54:51', '2021-02-10 15:54:51'),
(2, 1, '2', '2021-02-10 15:57:08', '2021-02-10 15:57:08'),
(3, 1, '2', '2021-02-10 15:57:09', '2021-02-10 15:57:09'),
(4, 1, '2', '2021-02-10 15:57:09', '2021-02-10 15:57:09'),
(5, 1, '1', '2021-02-10 15:57:19', '2021-02-10 15:57:19'),
(6, 1, '4', '2021-02-10 16:01:34', '2021-02-10 16:01:34'),
(7, 1, '1', '2021-02-10 16:03:01', '2021-02-10 16:03:01'),
(8, 1, '3', '2021-02-10 16:09:29', '2021-02-10 16:09:29'),
(9, 1, '2', '2021-02-10 16:16:06', '2021-02-10 16:16:06'),
(10, 1, '1', '2021-02-10 16:16:09', '2021-02-10 16:16:09'),
(11, 1, '1', '2021-02-10 16:18:45', '2021-02-10 16:18:45'),
(12, 1, '2', '2021-02-10 16:18:57', '2021-02-10 16:18:57'),
(13, 1, '3', '2021-02-12 13:41:43', '2021-02-12 13:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `me_status` int(11) NOT NULL DEFAULT '1',
  `ac_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `me_status`, `ac_status`, `created_at`, `updated_at`) VALUES
(1, 'Hand Sanitizer', 1, 2, '2021-02-06 14:16:04', '2021-02-06 14:16:04'),
(2, 'Lab N95 Face Mask', 2, 2, '2021-02-06 14:16:14', '2021-02-06 14:16:14'),
(3, 'Hand Gloves', 2, 1, '2021-02-06 14:16:36', '2021-02-06 14:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `day_deals`
--

CREATE TABLE `day_deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `product_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `day_deals`
--

INSERT INTO `day_deals` (`id`, `status`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '2021-02-09 16:08:47', '2021-02-09 16:08:47'),
(2, 1, '2', '2021-02-09 16:08:51', '2021-02-09 16:08:51');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featured_products`
--

CREATE TABLE `featured_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT '1',
  `product_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featured_products`
--

INSERT INTO `featured_products` (`id`, `status`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2', '2021-02-09 15:58:39', '2021-02-09 15:58:39'),
(2, 1, '3', '2021-02-09 15:58:43', '2021-02-09 15:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `medical_equipment_categories`
--

CREATE TABLE `medical_equipment_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `category_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_equipment_categories`
--

INSERT INTO `medical_equipment_categories` (`id`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2', '2021-02-10 10:56:12', '2021-02-10 10:56:12'),
(2, 1, '3', '2021-02-10 10:56:15', '2021-02-10 10:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `medical_equipment_category_images`
--

CREATE TABLE `medical_equipment_category_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_equipment_category_images`
--

INSERT INTO `medical_equipment_category_images` (`id`, `category_id`, `image`, `created_at`, `updated_at`) VALUES
(1, '3', '1612977070.jpg', '2021-02-10 11:11:10', '2021-02-10 11:11:10'),
(2, '2', '1612977085.jpg', '2021-02-10 11:11:25', '2021-02-10 11:11:25');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_02_06_115538_create_sessions_table', 1),
(7, '2021_02_06_173421_create_banners_table', 2),
(8, '2021_02_06_200559_create_categories_table', 3),
(9, '2021_02_06_202007_create_sub_categories_table', 4),
(10, '2021_02_07_140224_create_abouts_table', 5),
(11, '2021_02_07_142025_create_blog_categories_table', 6),
(12, '2021_02_07_143712_create_blogs_table', 7),
(13, '2021_02_07_145441_create_products_table', 8),
(14, '2021_02_09_150727_create_featured_products_table', 9),
(15, '2021_02_09_165600_create_day_deals_table', 10),
(16, '2021_02_09_203842_create_medical_equipment_categories_table', 11),
(17, '2021_02_10_153256_create_medical_equipment_category_images_table', 12),
(18, '2021_02_10_164014_create_accessories_category_images_table', 13),
(19, '2021_02_10_164158_create_accessories_categories_table', 13),
(20, '2021_02_10_173254_create_recently_addeds_table', 14),
(21, '2021_02_10_195738_create_carts_table', 15),
(22, '2021_02_10_211947_create_wishlists_table', 16);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_status` int(11) NOT NULL DEFAULT '1',
  `d_status` int(11) NOT NULL DEFAULT '1',
  `rd_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `sub_category`, `name`, `price`, `details`, `description`, `image`, `f_status`, `d_status`, `rd_status`, `created_at`, `updated_at`) VALUES
(1, '2', '2', 'Instrument', '200', '<div class=\"active tab-pane\" id=\"des-details1\">\r\n<div class=\"product-description-wrapper\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>\r\n\r\n<p>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>\r\n</div>\r\n</div>', '<div class=\"active tab-pane\" id=\"des-details2\">\r\n<div class=\"product-anotherinfo-wrapper\">\r\n<ul>\r\n	<li>Weight 400 g</li>\r\n	<li>Dimensions10 x 10 x 15 cm</li>\r\n	<li>Materials 60% cotton, 40% polyester</li>\r\n	<li>Other Info American heirloom jean shorts pug seitan letterpress</li>\r\n</ul>\r\n</div>\r\n</div>', '[\"1612731503.blog-1.jpg\",\"1612731503.blog-3.jpg\"]', 1, 2, 2, '2021-02-07 14:58:23', '2021-02-09 14:04:22'),
(2, '2', '3', 'Face Mask 1', '300', '<ul>\r\n	<li>Weight 400 g</li>\r\n	<li>Dimensions10 x 10 x 15 cm</li>\r\n	<li>Materials 60% cotton, 40% polyester</li>\r\n	<li>Other Info American heirloom jean shorts pug seitan letterpress</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '<p>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>', '[\"13.jpg\",\"23.jpg\"]', 2, 2, 1, '2021-02-07 15:03:17', '2021-02-09 13:58:11'),
(3, '3', '1', 'Hand Gloves 1', '200', '<ul>\r\n	<li>Weight 400 g</li>\r\n	<li>Dimensions10 x 10 x 15 cm</li>\r\n	<li>Materials 60% cotton, 40% polyester</li>\r\n	<li>Other Info American heirloom jean shorts pug seitan letterpress</li>\r\n</ul>', '<p>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>', '[\"1612901027.blog-3.jpg\",\"1612901027.14.jpg\"]', 2, 1, 2, '2021-02-09 14:03:47', '2021-02-09 14:03:47'),
(4, '1', '4', 'Hand Sanitizer !', '100', '<div class=\"active tab-pane\" id=\"des-details1\">\r\n<div class=\"product-description-wrapper\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>\r\n\r\n<p>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>\r\n</div>\r\n</div>', '<div class=\"active tab-pane\" id=\"des-details1\">\r\n<div class=\"product-description-wrapper\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>\r\n\r\n<p>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"active tab-pane\" id=\"des-details1\">\r\n<div class=\"product-description-wrapper\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>\r\n\r\n<p>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>', '[\"1612979639.15.jpg\",\"1612979639.17.jpg\"]', 1, 1, 2, '2021-02-10 11:53:59', '2021-02-10 11:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `recently_addeds`
--

CREATE TABLE `recently_addeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `product_id` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recently_addeds`
--

INSERT INTO `recently_addeds` (`id`, `status`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, '3', '2021-02-10 11:45:55', '2021-02-10 11:45:55'),
(2, 1, '1', '2021-02-10 11:45:58', '2021-02-10 11:45:58'),
(3, 1, '4', '2021-02-10 11:54:19', '2021-02-10 11:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('lRcOCnGIOCoROvLhdUEjvqG3jVI9HOBTWAVoIBQS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieFBwckxLOHVlNkJDdkFvUTdHM0duYkhnYVp4VGRCbGQwaDdxQXVMRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC93ZWItd2lzaGxpc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjQ6ImNhcnQiO2E6MTp7czo3OiJkZWZhdWx0IjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6MTp7czo4OiIAKgBpdGVtcyI7YToxOntzOjMyOiI4Y2JmMjE1YmFhM2I3NTdlOTEwZTUzMDVhYjk4MTE3MiI7TzozMjoiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0iOjEwOntzOjU6InJvd0lkIjtzOjMyOiI4Y2JmMjE1YmFhM2I3NTdlOTEwZTUzMDVhYjk4MTE3MiI7czoyOiJpZCI7czo1OiIyOTNhZCI7czozOiJxdHkiO2k6MTtzOjQ6Im5hbWUiO3M6OToiUHJvZHVjdCAxIjtzOjU6InByaWNlIjtkOjkuOTk7czo2OiJ3ZWlnaHQiO2Q6MDtzOjc6Im9wdGlvbnMiO086Mzk6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtT3B0aW9ucyI6MTp7czo4OiIAKgBpdGVtcyI7YTowOnt9fXM6NzoidGF4UmF0ZSI7aTowO3M6NDk6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBhc3NvY2lhdGVkTW9kZWwiO047czo0NjoiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGRpc2NvdW50UmF0ZSI7aTowO319fX19', 1613168649),
('YfKKDqayK14XwxxKPRcMswaRFkX5P1EqNVW18jPA', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiMDF5cEF6aXRCcGw5Ym5uUkpmeXk0ZWhQekZQZG5GdUgwSTZzSGQ1biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC93ZWItcHJvZHVjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkS3o3dDZ2WFBwNGx6MTdaWGNNczF6ZWtYNURqMDMzMUR3SWRlSE1xUW9zM0tNWGYxbVVDVk8iO3M6NDoiY2FydCI7YToxOntzOjc6ImRlZmF1bHQiO086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoxOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6MzI6IjhjYmYyMTViYWEzYjc1N2U5MTBlNTMwNWFiOTgxMTcyIjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6MTA6e3M6NToicm93SWQiO3M6MzI6IjhjYmYyMTViYWEzYjc1N2U5MTBlNTMwNWFiOTgxMTcyIjtzOjI6ImlkIjtzOjU6IjI5M2FkIjtzOjM6InF0eSI7aToxO3M6NDoibmFtZSI7czo5OiJQcm9kdWN0IDEiO3M6NToicHJpY2UiO2Q6OS45OTtzOjY6IndlaWdodCI7ZDowO3M6Nzoib3B0aW9ucyI7TzozOToiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW1PcHRpb25zIjoxOntzOjg6IgAqAGl0ZW1zIjthOjA6e319czo3OiJ0YXhSYXRlIjtpOjA7czo0OToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGFzc29jaWF0ZWRNb2RlbCI7TjtzOjQ2OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AZGlzY291bnRSYXRlIjtpOjA7fX19fX0=', 1613168684);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcategory` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category`, `subcategory`, `created_at`, `updated_at`) VALUES
(1, '3', 'Hand Gloves Sub cat1', '2021-02-06 14:32:05', '2021-02-06 14:32:05'),
(2, '2', 'Face Mask Sub Cat 1', '2021-02-06 14:33:59', '2021-02-06 14:33:59'),
(3, '2', 'Face Mask Sub Cat 2', '2021-02-07 11:33:41', '2021-02-10 09:51:12'),
(4, '1', 'Hand Sanitizer Sub Cat 1', '2021-02-10 11:52:58', '2021-02-10 11:52:58');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'nipa', 'nipa@gmail.com', NULL, '$2y$10$Kz7t6vXPp4lz17ZXcMs1zekX5Dj0331DwIdeHMqQos3KMXf1mUCVO', NULL, NULL, 'FaRELdaZbg5s7yYBlc1y34flAwp6M52RPlPeyiToAjEcDsRbAVdI5s6NBLCE', NULL, NULL, '2021-02-06 05:59:02', '2021-02-06 05:59:02'),
(2, 'hsblco', 'hsblco@gmail.com', NULL, '$2y$10$2wFArNFcg3ynoxSyak4ok.Uxk11VTmxXkTn1vRMgmYTAC4eEorjo6', NULL, NULL, NULL, NULL, NULL, '2021-02-06 11:02:29', '2021-02-06 11:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `product_id` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `status`, `product_id`, `created_at`, `updated_at`) VALUES
(54, 1, '1', '2021-02-12 14:21:38', '2021-02-12 14:21:38'),
(55, 1, '2', '2021-02-12 14:21:41', '2021-02-12 14:21:41'),
(57, 1, '4', '2021-02-12 14:21:45', '2021-02-12 14:21:45'),
(63, 1, '1', '2021-02-12 14:30:02', '2021-02-12 14:30:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accessories_categories`
--
ALTER TABLE `accessories_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accessories_category_images`
--
ALTER TABLE `accessories_category_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartlists`
--
ALTER TABLE `cartlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day_deals`
--
ALTER TABLE `day_deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `featured_products`
--
ALTER TABLE `featured_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_equipment_categories`
--
ALTER TABLE `medical_equipment_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_equipment_category_images`
--
ALTER TABLE `medical_equipment_category_images`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recently_addeds`
--
ALTER TABLE `recently_addeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `accessories_categories`
--
ALTER TABLE `accessories_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `accessories_category_images`
--
ALTER TABLE `accessories_category_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cartlists`
--
ALTER TABLE `cartlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `day_deals`
--
ALTER TABLE `day_deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featured_products`
--
ALTER TABLE `featured_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medical_equipment_categories`
--
ALTER TABLE `medical_equipment_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medical_equipment_category_images`
--
ALTER TABLE `medical_equipment_category_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recently_addeds`
--
ALTER TABLE `recently_addeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
