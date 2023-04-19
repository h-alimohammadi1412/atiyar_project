-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 10:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webamooz_digikala_digikala`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bld_num` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vahed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_posti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `state`, `city`, `address`, `bld_num`, `vahed`, `code_posti`, `name`, `lname`, `mobile`, `created_at`, `updated_at`) VALUES
(2, '1', 'هرمزگان4', 'ابوموسی', 'کوی پلیس - پاسگاه ارغوان ۲۵ بن بست ۶', '2', '1', '55154154151', 'توحید', 'داننده', '09015415110', '2021-10-07 16:36:57', '2021-10-07 18:10:06'),
(3, '1', 'تهران', 'تهران', 'میدان ولیعصر  جنب کبکانیان ', '2', '1', '55548181814', 'حسن ', 'زندی', '09120565415', '2021-10-07 16:38:29', '2021-10-07 16:38:29'),
(5, '1', '15', '1717', 'تهران رباط کریم', '1', '1', '5551751515', 'توحید', 'داننده', '09369568668', '2021-10-20 05:26:51', '2021-10-20 05:26:51'),
(6, '1', '9', '1698', 'خیابان فاطمی موزه شرق', '5', '2', '51545415151', 'علی', 'زینالی', '0912064748', '2021-10-20 05:30:39', '2021-10-20 05:30:39'),
(7, '1', 'تهران', 'تهران', 'میدان آزادی به سمت اتوبان جناح', '5', '6', '64161261165', 'حسن', 'علیپور', '0910521511', '2021-10-20 05:32:37', '2021-10-20 05:32:37'),
(8, '1', 'البرز', 'شهریار', 'تهران رباط کریم', '1', '2', '51545415151', 'توحید', 'داننده', '09369568668', '2021-10-20 05:40:18', '2021-10-20 05:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `address_times`
--

CREATE TABLE `address_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `address_times`
--

INSERT INTO `address_times` (`id`, `day`, `date`, `time`, `price`, `created_at`, `updated_at`) VALUES
(5, 'پنج شنبه', '5 آبان', '10-23', '25000', '2021-10-25 23:07:47', '2021-10-25 23:07:47'),
(6, 'جمعه', '6 آبان', '10-23', '25000', '2021-10-25 23:08:06', '2021-10-25 23:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `ads_categories`
--

CREATE TABLE `ads_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads_categories`
--

INSERT INTO `ads_categories` (`id`, `img`, `category_id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ads/2021/4/2663e785f54221746ff1fb34e7311690116e7544_1619257989.jpg', '1', 'شاتل', '1', '2021-04-28 10:18:57', '2021-04-28 10:18:57'),
(2, 'Ads/2021/4/88a1496b90a07d6343ad10d3db5c4cb5582c0b88_1619245126.jpg', '2', 'خودرو', '1', '2021-04-28 10:23:26', '2021-04-28 10:23:26'),
(3, 'Ads/2021/4/e307a873bbf9b07275549ed86defa8c57176c3e0_1619245049.jpg', '3', 'مد و پوشاک', '1', '2021-04-28 10:23:47', '2021-04-28 10:23:47'),
(4, 'Ads/2021/4/fee0c9f47b9a9a038175db3d65ff460aa0ba7a3d_1619244589.jpg', '4', 'کودک', '1', '2021-04-28 10:24:06', '2021-04-28 10:24:06'),
(5, 'Ads/2021/4/a5ccd3e0877e197a4ae942edd6584de7f7d9b902_1619244433.jpg', '5', 'سوپرمارکت', '1', '2021-04-28 10:24:21', '2021-04-28 10:24:21'),
(6, 'Ads/2021/4/5bc1169a02c04b48f0e26d8c67437e0512e9492f_1619244833.jpg', '6', 'سلامت', '1', '2021-04-28 10:24:47', '2021-04-28 10:24:47'),
(7, 'Ads/2021/4/f9fc20a869004d62522647b7643fc2d74472fd1b_1619244761.jpg', '7', 'خانه', '1', '2021-04-28 10:25:04', '2021-04-28 10:25:04'),
(8, 'Ads/2021/4/5cbd4bf62d163f2599425ab18e6a33413961a764_1619244687.jpg', '8', 'کتاب', '1', '2021-04-28 10:25:28', '2021-04-28 10:25:28'),
(9, 'ads/2021/4/a90f05f722e325707f7ac4e70b8e672ac6a5bbb6_1619244954.jpg', '9', 'ورزش و سفر', '1', '2021-04-28 10:26:20', '2021-05-03 19:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `childCategory` int(11) DEFAULT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `childCategory`, `parent`, `title`, `position`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, 0, 'مشخصات کلی', '1', '1', NULL, '2021-03-26 09:11:37', '2021-03-26 09:11:37'),
(2, 5, 0, 'پردازنده', '2', '1', NULL, '2021-03-26 09:13:37', '2021-03-26 09:13:37'),
(3, 2, 0, 'حافظه', '3', '1', NULL, '2021-03-26 09:13:52', '2021-03-26 11:27:43'),
(4, 5, 1, 'ابعاد', '1', '1', NULL, '2021-03-26 09:14:13', '2021-03-26 11:31:51'),
(6, 5, 1, 'وزن', '3', '1', NULL, '2021-03-26 12:12:25', '2021-03-26 12:12:25'),
(7, 6, 0, 'مشخصات کلی', '1', '1', NULL, '2021-03-26 12:12:56', '2021-03-26 12:12:56'),
(8, 5, 1, 'توضیحات سیم کارت', '2', '1', NULL, '2021-03-26 13:47:30', '2021-03-26 13:47:30'),
(9, 5, 2, 'تراشه', '1', '1', NULL, '2021-03-26 13:47:52', '2021-03-26 13:47:52'),
(10, 5, 2, 'پردازنده‌ی مرکزی', '2', '1', NULL, '2021-03-26 13:48:12', '2021-03-26 13:48:12'),
(11, 7, 7, 'طول', '1', '1', NULL, '2021-03-26 15:28:20', '2021-03-26 15:30:07'),
(12, 7, 7, 'سرعت انتقال', '2', '1', NULL, '2021-03-26 15:28:34', '2021-03-26 15:30:23'),
(13, 7, 0, 'مشخصات کلی', '1', '1', NULL, '2021-03-26 15:29:06', '2021-03-26 15:29:06'),
(14, 5, 2, 'تست', '4', '1', NULL, '2021-04-01 02:41:42', '2021-04-01 02:41:42'),
(15, 7, 2, 'تست23', '34', '1', NULL, '2021-04-01 02:41:55', '2021-04-01 02:41:55'),
(16, 18, 0, 'تست', '23', '1', NULL, '2021-04-01 02:45:01', '2021-04-01 02:45:01'),
(17, 18, 0, '2323', '23', '1', NULL, '2021-04-01 02:45:08', '2021-04-01 02:45:08'),
(18, 5, 1, 'فناوری صفحه‌نمایش', '5', '1', NULL, '2021-07-30 07:29:11', '2021-07-30 07:29:11'),
(19, 5, 1, 'نسخه سیستم عامل', '6', '1', NULL, '2021-07-30 07:29:26', '2021-07-30 07:29:26'),
(20, 5, 1, 'ویژگی‌های خاص', '7', '1', NULL, '2021-07-30 07:29:42', '2021-07-30 07:29:42'),
(21, 5, 1, 'اندازه', '8', '1', NULL, '2021-07-30 07:29:56', '2021-07-30 07:29:56'),
(22, 5, 1, 'تعداد سیم کارت', '9', '1', NULL, '2021-07-30 07:32:05', '2021-07-30 07:32:05'),
(23, 5, 1, 'حافظه داخلی', '10', '1', NULL, '2021-07-30 07:32:19', '2021-07-30 07:32:19'),
(24, 5, 1, 'شبکه های ارتباطی', '12', '1', NULL, '2021-07-30 07:32:32', '2021-07-30 07:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `attribute_id` int(11) DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `product_id`, `attribute_id`, `value`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 4, '163.7x75.3x8.9 میلی‌متر', '1', NULL, '2021-03-26 13:45:50', '2021-03-26 15:26:20'),
(2, 2, 6, '192 گرم', '1', NULL, '2021-03-26 13:46:36', '2021-03-26 15:26:06'),
(3, 2, 8, 'سایز نانو (8.8 × 12.3 میلی‌متر)', '1', NULL, '2021-03-26 13:48:41', '2021-03-26 14:24:15'),
(4, 2, 9, 'Exynos 850 (8nm) Chipest', '1', NULL, '2021-03-26 13:54:20', '2021-03-26 14:24:14'),
(5, 3, 6, '200 گرم', '1', NULL, '2021-03-26 13:54:35', '2021-12-23 10:59:15'),
(6, 2, 10, 'Octa-Core Cortex-A55 CPU', '1', NULL, '2021-03-26 15:26:39', '2021-03-26 15:26:39'),
(7, 4, 11, '2 متر', '1', NULL, '2021-03-26 15:37:43', '2021-03-26 15:37:43'),
(8, 4, 8, 'jsjsj', '1', NULL, '2021-04-01 02:43:18', '2021-04-01 02:43:18'),
(9, 4, 6, 'تست', '1', NULL, '2021-04-01 02:43:31', '2021-04-01 02:43:31'),
(10, 4, 11, '12 متر', '1', NULL, '2021-04-01 02:46:50', '2021-04-01 02:46:50'),
(11, 4, 12, '3 ', '1', NULL, '2021-04-01 02:47:20', '2021-04-01 02:47:20'),
(12, 3, 12, '12 متر', '1', NULL, '2021-04-01 02:47:52', '2021-04-01 09:35:57'),
(13, 2, 20, 'مجهز به حس‌گر اثرانگشت ، فبلت ، مناسب عکاسی', '1', NULL, '2021-07-30 07:30:36', '2021-07-30 07:30:36'),
(14, 2, 18, 'PLS TFT', '1', NULL, '2021-07-30 07:30:59', '2021-07-30 07:30:59'),
(15, 2, 19, 'Android 10', '1', NULL, '2021-07-30 07:31:11', '2021-07-30 07:31:11'),
(16, 2, 21, '6.5', '1', NULL, '2021-07-30 07:31:24', '2021-07-30 07:31:24'),
(17, 2, 22, 'دو', '1', NULL, '2021-07-30 07:32:50', '2021-07-30 07:32:50'),
(18, 2, 23, '64 گیگابایت', '1', NULL, '2021-07-30 07:33:03', '2021-07-30 07:33:03'),
(19, 2, 24, '4G، 3G، 2G', '1', NULL, '2021-07-30 07:33:16', '2021-07-30 07:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `bank_payments`
--

CREATE TABLE `bank_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_payments`
--

INSERT INTO `bank_payments` (`id`, `user_id`, `order_number`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '111111154', '14269000', '1', '2021-10-29 01:08:41', '2021-10-31 02:06:29'),
(2, '1', '111111154', '4269000', '1', '2021-10-29 01:18:12', '2021-10-31 02:06:29'),
(3, '1', '111111154', '9269000', '1', '2021-10-29 01:20:10', '2021-10-31 02:06:29'),
(4, '1', '111111154', '0', '1', '2021-10-29 01:20:57', '2021-10-31 02:06:29'),
(5, '1', '111111154', '14269000', '1', '2021-10-29 23:04:07', '2021-10-31 02:06:29'),
(6, '1', '111111154', '14269000', '1', '2021-10-29 23:22:15', '2021-10-31 02:06:29'),
(7, '1', '111111154', '14269000', '1', '2021-10-29 23:23:33', '2021-10-31 02:06:29'),
(8, '1', '111111154', '14269000', '1', '2021-10-29 23:24:06', '2021-10-31 02:06:29'),
(9, '1', '111111154', '14269000', '1', '2021-10-29 23:24:58', '2021-10-31 02:06:29'),
(10, '1', '111111154', '1000', '1', '2021-10-29 23:32:24', '2021-10-31 02:06:29'),
(11, '1', '111111154', '14269000', '1', '2021-10-29 23:32:26', '2021-10-29 23:32:26'),
(12, '1', '111111155', '1000', '0', '2021-10-31 02:22:56', '2021-10-31 02:22:56'),
(13, '1', '111111155', '1000', '0', '2021-10-31 02:34:31', '2021-10-31 02:34:31'),
(14, '1', '111111156', '4250000', '0', '2021-10-31 23:42:54', '2021-10-31 23:42:54'),
(15, '1', '111111157', '4699000', '0', '2021-11-01 00:13:30', '2021-11-01 00:13:30'),
(16, '1', '111111158', '4920000', '0', '2021-11-01 05:13:28', '2021-11-01 05:13:28'),
(17, '1', '111111159', '4250000', '0', '2021-11-01 09:38:26', '2021-11-01 09:38:26'),
(18, '1', '111111160', '4250000', '0', '2021-11-01 11:29:21', '2021-11-01 11:29:21'),
(19, '1', '111111161', '4250000', '0', '2021-11-01 22:53:20', '2021-11-01 22:53:20'),
(20, '1', '111111162', '4920000', '0', '2021-11-01 23:17:23', '2021-11-01 23:17:23'),
(21, '1', '111111162', '4920000', '0', '2021-11-01 23:18:04', '2021-11-01 23:18:04'),
(22, '1', '111111163', '9349000', '0', '2021-11-02 00:04:03', '2021-11-02 00:04:03'),
(23, '1', '111111164', '8900000', '0', '2021-11-02 00:19:45', '2021-11-02 00:19:45'),
(24, '1', '111111165', '8949000', '0', '2021-11-02 00:21:22', '2021-11-02 00:21:22'),
(25, '2', '111111166', '4920000', '0', '2021-11-04 23:11:46', '2021-11-04 23:11:46'),
(26, '1', '111111167', '4920000', '0', '2021-12-23 11:05:10', '2021-12-23 11:05:10'),
(27, '1', '111111168', '4250000', '0', '2021-12-23 11:12:46', '2021-12-23 11:12:46'),
(28, '1', '111111170', '10', '0', '2022-05-16 08:02:30', '2022-05-16 08:02:30'),
(29, '1', '111111172', '8499000', '0', '2022-05-24 13:11:48', '2022-05-24 13:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `img`, `title`, `link`, `created_at`, `updated_at`) VALUES
(1, 'banner/2021/5/cb728d2c99aea09ffe527f325c089cfbfaf8cc9c_1612128826c401.jpg', 'دعوت پر جایزه', 'users/referral/index8afc.html?&promo_name=دعوت+پر+جایزه&promo_position=home_top_slider&promo_creative=60843&bCode=60843', '2021-05-03 16:55:24', '2021-05-03 16:55:24'),
(2, 'banner/2021/5/a615e81880dcd7ee1abda60304ddf13adfe57af8_1612164931.gif', 'میوه و سبزیجات', '/fru', '2021-05-03 16:59:32', '2021-05-03 16:59:32'),
(3, 'banner/2021/5/42c052810d352ee0a62dc4a929887c6eb09543ee_1611344058.gif', 'هدیه روز مادر', '/mf', '2021-05-03 16:59:48', '2021-05-03 17:06:14'),
(4, 'banner/2021/5/05c5edbf73b22fbe06a8861446b2ed9ff2a7ec28_1619866948.jpg', 'نوزاد', 'نوزاد', '2021-05-05 09:31:28', '2021-05-05 09:31:28'),
(5, 'banner/2021/5/c32ed08ee99ce7f26ffe05f47ed54d0e7599408c_1619595299.jpg', 'پابجی', 'p', '2021-05-05 09:31:40', '2021-05-05 09:31:40'),
(6, 'banner/2021/5/4ce4918466d7268799e13d7f607a5bb767190aac_1619595250.jpg', 'خنکای', 'kh', '2021-05-05 09:31:52', '2021-05-05 09:31:52'),
(7, 'banner/2021/5/1d2fb017c29b082164073dd9507ef62c85fe6446_1619878259.jpg', 'افراتین', 'afr', '2021-05-05 09:32:03', '2021-05-05 09:32:03'),
(8, 'banner/2021/5/62c909eb1296f397ecd4123f766a6f3448f22b6d_1619949290.jpg', 'مادر', 'mother', '2021-05-06 06:05:37', '2021-05-06 06:05:37'),
(9, 'banner/2021/5/b65e12d931a5169e482c51e734317f9d27720f83_1619936639.jpg', 'کفش ملی', 'shoes', '2021-05-06 06:05:54', '2021-05-06 06:05:54'),
(10, 'banner/2021/5/76998daf25428efd1a62130b631abfe65b2ceea8_1612288934.jpg', 'فروشنده شوید', 'فروشنده شوید', '2021-05-11 04:08:41', '2021-05-11 04:08:41'),
(11, 'banner/2021/5/bc928cad36c9cc9aed866ec4de30dfd9f5e50ec7_1607016116.jpg', 'کرونا', 'کرونا', '2021-05-11 04:08:52', '2021-05-11 04:08:52'),
(12, 'banner/2021/5/956cd52f1f18f11284016c86561d53bcdcfdeedd_1612606849.jpg', 'بومی', 'بومی', '2021-05-11 04:09:05', '2021-05-11 04:09:05'),
(13, 'banner/2021/5/4733b740d15e74f00d50ac92fb126911632b8053_1599385682.jpg', 'هدیه', 'هدیه', '2021-05-11 04:09:16', '2021-05-11 04:09:16'),
(14, 'banner/2021/5/b67f4e67e500f696497e5bd5aa2a260aad5bbdc4_1620202433.jpg', 'شیر', 'شیر', '2021-05-12 09:53:05', '2021-05-12 09:53:05'),
(15, 'banner/2021/5/5c2611f27016fd13fc1daf1e3eb90961d2653243_1620036706.jpg', 'گرمایی', 'گرمایی', '2021-05-12 09:53:23', '2021-05-12 09:53:23'),
(16, 'banner/2021/5/b872c3b177476c91addaa15431e29c0a91563444_1620036811.jpg', 'راحت آفتاب بگیر!', 'aftaab', '2021-05-12 10:03:10', '2021-05-12 10:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `vip` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `img`, `name`, `link`, `parent`, `description`, `status`, `vip`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'brand/2021/3/3960.jpg', 'سامسونگ', 'samsung', '1', 'سامسونگ یکی از بزرگترین شرکت‌ های کره جنوبی و یک شرکت چندملیتی است که از تعداد زیادی زیرمجموعه تشکیل شده‌ است. این شرکت‌ها در صنایع مختلف از جمله کالای دیجیتال، لوزام خانگی، صوتی و تصویری فعالیت می‌کنند.\n\n', '1', '1', NULL, '2021-03-23 07:21:04', '2021-07-29 06:42:47'),
(3, 'brand/2021/4/5530c98af79ddb5fa356bee60ff2cbba260663f4_1612608674.jpg', 'هواوی', 'هواوی', '1', NULL, '1', '1', NULL, '2021-04-01 02:30:10', '2021-05-13 03:51:57'),
(5, 'brand/2021/4/d82e7d1ba7b9ed56b2625038a51cf008ea9c9cf1_1606296677.jpg', 'پارس خزر', 'pars-khazar', '2', 'در اسفند ماه ۱۳۴۷ با مشارکت و همکاری فنی کارخانه توشیبای ژاپن، شرکت پارس توشیبا فعالیت خود را در استان گیلان آغاز کرد. در آبان سال ۱۳۶۱ نام شرکت پارس توشیبا به پارس خزر تغییر یافت. درحال حاضر پارس خزر به عنوان بزرگ‌ترین تولید کننده لوازم خانگی برقی کوچک در ایران، به صورت سهامی عام به فعالیت خود ادامه می‌دهد. خشنودی مشتریان، طراحی و توسعه محصولات جدید و تلاش در شکوفایی ایران، سرلوحه فعالیت این شرکت است.\n\n', '1', '1', NULL, '2021-04-28 02:52:08', '2021-04-28 02:52:08'),
(6, 'brand/2021/4/83dee64101f290acf6400eae9220e479926a1858_1606296832.jpg', 'بوش', 'بوش', '1', 'کارگاهی که در سال ۱۸۸۶ توسط جوانی آلمانی در شهر اشتوتگارت تاسیس شد، امروزه به یکی از بزرگترین شرکت‌های تولید لوازم خانگی و صنعتی و تولید کننده قطعات اتومبیل تبدیل شده است. شاید رابرت بوش فکرش را نمی‌کرد که کارگاهی که تاسیس کرده بود، به چنین شرکت بزرگی تبدیل شود. شرکت بوش ( Bosch ) یکی از مشهور‌ترین شرکت‌های تولید لوازم صنعتی و ساختمانی است و تقریبا‌ با همه خودروسازان جهان تعامل دارد. محصولات تولید شده توسط بوش اکثرا ساخت آلمان هستند اما این شرکت در چندین کشور کارخانه‌های متعددی احداث کرده و بسیاری از لوازم در همان کشورهای مقصد تولید می‌شود. شرکت بوش علاوه‌ بر تجهیزات صنعتی، در تولید لوازم خانگی هم سرآمد است. لوازمی مانند: * یخچال فریزر * ماشین ظرفشویی *میوه خشک کن *جاروبرقی *اجاق گاز *مخلوط ‌کن یکی از ویژگی‌های بارز این شرکت، نحوه قیمت‌گذاری محصولات است. قیمت محصولات بوش علی‌رغم بزرگ بودن نام این شرکت به نسبت رقبا چندان زیاد نیست و همین مورد باعث شده تا این شرکت در بازار رقابتی با سایرین در جایگاه بهتری قرار گیرد. تجهیزات صنعتی بوش امروزه حرف اول را در بین تولیدکنندگان این تجهیزات می‌زنند و به دلیل کیفیت و کارایی بسیار بالایی که دارند مشهور هستند. کیفیتی بی‌مانند که همچنان تعهد این شرکت را نسبت به شعار موسس آن حفظ کرده است. شعار رابرت بوش این بود : «بهتر است پول خود را از دست بدهیم تا اعتماد و اطمینانی که مشتری به ما می‌کند را از کف دهیم». خوشبختانه طیف وسیعی از محصولات بوش در دیجی کالا موجود است و حتی می‌توانید با استفاده از دیجی پی خرید اقساطی هم داشته باشید و با خرید هر یک از محصولات بوش از کیفیت بسیار بالای آن لذت ببرید.\n\n', '1', '1', NULL, '2021-04-28 02:52:48', '2021-07-29 06:42:53'),
(7, 'brand/2021/4/7d38b4b96db3fb57c1d19c30ea0ea9e10c1b8ba1_1607780060.jpg', 'فیرو پلاس', 'فیرو پلاس', '9', 'فیرو پلاس یک برند ایرانی است که با بهره‌گیری از نیروهای متخصص و کارآمد داخلی و با استفاده از بهترین مواد خام موجود در بازار در زمینه تولید انواع لوازم سفر از جمله کوله پشتی کوهنوردی، کوله‌پشتی لپ تاپ، کوله‌پشتی مدرسه، کیف دستی، ساک ورزشی، چمدان، نظم دهنده و جوراب فعالیت می‌کند.\n\n', '1', '1', NULL, '2021-04-28 02:53:58', '2022-07-24 13:51:43'),
(8, 'brand/2021/3/3960.jpg', 'سامسونگ', 'samsung', '2', 'سامسونگ یکی از بزرگترین شرکت‌ های کره جنوبی و یک شرکت چندملیتی است که از تعداد زیادی زیرمجموعه تشکیل شده‌ است. این شرکت‌ها در صنایع مختلف از جمله کالای دیجیتال، لوزام خانگی، صوتی و تصویری فعالیت می‌کنند.\r\n\r\n', '1', '1', NULL, '2021-03-23 07:21:04', '2021-05-13 03:51:59'),
(9, 'brand/2021/4/5530c98af79ddb5fa356bee60ff2cbba260663f4_1612608674.jpg', 'هواوی', 'هواوی', '1', NULL, '1', '1', NULL, '2021-04-01 02:30:10', '2021-05-13 03:51:57'),
(10, 'brand/2021/4/d82e7d1ba7b9ed56b2625038a51cf008ea9c9cf1_1606296677.jpg', 'پارس خزر', 'pars-khazar', '2', 'در اسفند ماه ۱۳۴۷ با مشارکت و همکاری فنی کارخانه توشیبای ژاپن، شرکت پارس توشیبا فعالیت خود را در استان گیلان آغاز کرد. در آبان سال ۱۳۶۱ نام شرکت پارس توشیبا به پارس خزر تغییر یافت. درحال حاضر پارس خزر به عنوان بزرگ‌ترین تولید کننده لوازم خانگی برقی کوچک در ایران، به صورت سهامی عام به فعالیت خود ادامه می‌دهد. خشنودی مشتریان، طراحی و توسعه محصولات جدید و تلاش در شکوفایی ایران، سرلوحه فعالیت این شرکت است.\r\n\r\n', '1', '1', NULL, '2021-04-28 02:52:08', '2021-04-28 02:52:08'),
(11, 'brand/2021/4/83dee64101f290acf6400eae9220e479926a1858_1606296832.jpg', 'بوش', 'بوش', '2', 'کارگاهی که در سال ۱۸۸۶ توسط جوانی آلمانی در شهر اشتوتگارت تاسیس شد، امروزه به یکی از بزرگترین شرکت‌های تولید لوازم خانگی و صنعتی و تولید کننده قطعات اتومبیل تبدیل شده است. شاید رابرت بوش فکرش را نمی‌کرد که کارگاهی که تاسیس کرده بود، به چنین شرکت بزرگی تبدیل شود. شرکت بوش ( Bosch ) یکی از مشهور‌ترین شرکت‌های تولید لوازم صنعتی و ساختمانی است و تقریبا‌ با همه خودروسازان جهان تعامل دارد. محصولات تولید شده توسط بوش اکثرا ساخت آلمان هستند اما این شرکت در چندین کشور کارخانه‌های متعددی احداث کرده و بسیاری از لوازم در همان کشورهای مقصد تولید می‌شود. شرکت بوش علاوه‌ بر تجهیزات صنعتی، در تولید لوازم خانگی هم سرآمد است. لوازمی مانند: * یخچال فریزر * ماشین ظرفشویی *میوه خشک کن *جاروبرقی *اجاق گاز *مخلوط ‌کن یکی از ویژگی‌های بارز این شرکت، نحوه قیمت‌گذاری محصولات است. قیمت محصولات بوش علی‌رغم بزرگ بودن نام این شرکت به نسبت رقبا چندان زیاد نیست و همین مورد باعث شده تا این شرکت در بازار رقابتی با سایرین در جایگاه بهتری قرار گیرد. تجهیزات صنعتی بوش امروزه حرف اول را در بین تولیدکنندگان این تجهیزات می‌زنند و به دلیل کیفیت و کارایی بسیار بالایی که دارند مشهور هستند. کیفیتی بی‌مانند که همچنان تعهد این شرکت را نسبت به شعار موسس آن حفظ کرده است. شعار رابرت بوش این بود : «بهتر است پول خود را از دست بدهیم تا اعتماد و اطمینانی که مشتری به ما می‌کند را از کف دهیم». خوشبختانه طیف وسیعی از محصولات بوش در دیجی کالا موجود است و حتی می‌توانید با استفاده از دیجی پی خرید اقساطی هم داشته باشید و با خرید هر یک از محصولات بوش از کیفیت بسیار بالای آن لذت ببرید.\r\n\r\n', '1', '1', NULL, '2021-04-28 02:52:48', '2021-04-28 02:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) DEFAULT 0,
  `product_seller_id` int(11) DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_old` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price_discount_old` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_vendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_warranty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countryName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regionName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cityName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countryCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regionCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `areaCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `read_cart` int(11) NOT NULL DEFAULT 0,
  `view` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'false',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `img`, `icon`, `title`, `description`, `body`, `name`, `link`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'category/2021/3/121485581.jpg', 'electronics', 'کالای دیجیتال', 'خرید انواع کالای دیجیتال از فروشگاه اینترنتی دیجی کالا ', 'عمر انقلاب دیجیتال به کمتر از نیم قرن می‌رسد، اما همین برهه‌ی زمانی کوتاه در تاریخ، زندگی نوع بشر را کاملا دگرگون کرده و شتاب قابل توجهی به پیشرفت انسان در زمینه‌های مختلف بخشیده است. شاید اولین قدم‌های دیجیتالی شدن دنیا را بتوان تغییر تراتزیستورهای آنالوگ به دیجیتال دانست که بستر لازم برای کالای دیجیتال نظیر کامپیوتر، تلفن را فراهم کرد. در حال حاضر محصولات دیجیتالی آنقدر توسعه یافته‌اند که می‌توان ردپای آنها را در ساده‌ترین امور روزمره مشاهده کرد. بعضی از این محصولات به ابزارهای جدانشدنی برای انسان تبدیل شده‌اند، تصور زندگی بدون آنها و امکاناتی که در اختیار انسان قرار می‌دهند، وجود ندارد. موبایل‌ها، لپ‌تاپ، ماشین‌های ادارای از این دسته محصولات هستند. کامپیوترهای شخصی، لپ‌تاپ و گوشی تلفن همراه نیز مسیر پر فراز و نشیبی را پشت سر گذاشته‌اند تا به شکل هوشمند امروزی عرضه شود. اولین کامپیوتر قابل حمل جهان در سال 1981 به بازار آمد. این دستگاه صفحه نمایشی 5 اینچی داشت و وزن آن حدود 11 کیلوگرم بود. در حالیکه شرکت‌هایی نظیر اپل یا هواوی لپ‌تاپ‌هایی به وزن یک کیلوگرم ساخته‌اند.  \n\n\nاولین تلفن همراه نیز در سال 1983 در دنیا به فروش رسید که وزنی معادل یک کیلوگرم داشت و امکانات بسیار کمی را در اختیار داشت. قیمت این دستگاه بیش از سه هزار دلار بود. در حالیکه امروزه شاهد تلفن‌های همراه هوشمندی هستیم که ده‌ها وسیله را در دل خود جای داده‌اند و هر یک از آنها عملکرد فوق‌العاده‌ای رو در اختیار انسان قرار می‌دهد. هم‌چنین محدوده‌ی قیمت این دستگاه بسیار گسترده است و همه‌ی افراد می‌توانند آن را تهیه کنند.  \n\n\nدنیای دیجیتال نه تنها زندگی بشر را راحت‌تر از قبل کرده و زمان بیشتری برای آنها خریده است بلکه وسایل و سرگرمی‌های پیشرفته‌تر و مهیج‌تری را هم فراهم کرده است. تاریخچه‌ی ساخت کنسول بازی نیز مشابه سایر دستگاه‌های دیجیتال است. این صنعت از سال 1972 شروع به کار کرد. اولین کنسول‌های بازی تصویری سیاه و سفید داشتند و محیط بازی آنها بسیار ساده بود. این صنعت با تولید کنسول بازی ایکس باکس در ابتدای قرن 21 ام به اوج خود رسید و دنیای سرگرمی و بازی را متحول کرد. این دستگاه بسیار پیشرفته بود و گرافیک عالی و بازی‌های با کیفیتی را در اختیار علاقمندان قرار می‌داد. کنسول‌های بازی تاکنون 8 نسل را پشت سر گذاشته‌اند. شرکت‌هایی نظیر سونی و مایکروسافت مطرح‌ترین برندهای تولید کننده‌ی کنسول بازی هستند و شرکت‌های متعدد دیگری مثل لاجیتک لوازم جانبی آنها را عرضه می‌کند.  \n\n\nکالاهای دیجیتال به موبایل، لپ تاپ یا وسایل سرگرمی محدود نمی‌شوند. مچ‌بند و ساعت‌های هوشمند از جدیدترین محصولات دیجیتالی به شمار می‌آیند که امکانات زیادی را در اختیار انسان قرار می‌دهد. عملکرد ساعت‌های هوشمند برند اپل آنقدر پیشرفته است که می‌توان آن را یک کامپیوتر مچی در نظر گرفت. شما می‌توانید با ای سیم، تماس‌های اضطراری بین‌المللی برقرار کنید، در وب جستجو کنید و جواب تماس و پیام‌های خود را بدهید. علاوه بر این، اغلب مچ‌بندها و ساعت‌های هوشمند ابزارهای لازم برای پایش سلامت را در اختیار دارند و به طور دائم ضربان قلب، کیفیت خواب، تعداد قدم‌های برداشته شده و ... را محاسبه و گزارش می‌کنند. همچنین در نسخه‌های پیشرفته‌تر می‌توان برنامه‌هایی برای بیماران دیابتی و بهداشت و سلامت بانوان مشاهده کرد. \n\n\nدیجی کالا جدیدترین و به روزترین کالاهای دیجیتال عرضه شده در دنیا را برای مشتریان خود گردآوری کرده است. شما می‌توانید خوشنام‌ترین برندهای جهانی را در وبسایت دیجی کالا مشاهده و محصول مورد نظر خود از میان هزاران کالای دیجیتال خریداری کنید. \n\n\n', 'کالای دیجیتال', '/main/electronic-devices/', '1', NULL, NULL, '2021-05-31 23:16:49'),
(2, 'category/2021/3/66e195009f4883d18a24e90628bfecb1dbc63ca8_1613305610.jpg', 'tools', 'خودرو، ابزار و تجهیزات صنعتی', '', '', 'خودرو، ابزار و تجهیزات صنعتی', '/main/vehicles/', '1', NULL, NULL, '2021-07-03 07:35:56'),
(3, 'category/2021/4/a715177eb6da9aa0e088718fa9caa726bbf7922c_1614437089.jpg', 'fashion', 'مد و پوشاک', 'مد و پوشاک', 'مد و پوشاک', 'مد و پوشاک', '/main/apparel/', '1', NULL, '2021-04-10 05:51:38', '2022-07-24 13:45:44'),
(4, 'category/2021/3/a65784083736a7280f2a4cf85a30090ed1d962e5_1606300149.jpg', 'mother-and-child', 'اسباب بازی، کودک و نوزاد', '', '', 'اسباب بازی، کودک و نوزاد', '/main/mother-and-child/', '1', NULL, NULL, '2021-07-03 07:26:55'),
(5, 'category/2021/3/e4d39ae4b47cd438d7114d4ab476bd7329e094ef_1615037772.jpg', 'food-and-beverage', 'کالاهای سوپرمارکتی', 'کالاهای سوپرمارکتی', 'کالاهای سوپرمارکتی', 'کالاهای سوپرمارکتی', '/main/food-beverage/', '1', NULL, NULL, '2021-07-03 05:40:16'),
(6, 'category/2021/3/d18c6980d468da7a9923e823472aa2cf59e2b31d_1615015057.jpg', 'personal-appliance', 'زیبایی و سلامت', NULL, NULL, 'زیبایی و سلامت', 'زیبایی و سلامت', '1', NULL, NULL, '2021-04-10 05:53:20'),
(7, 'category/2021/3/1f8226c4f32b961075ae267fc15e46e6b7a65839_1610266709.jpg', 'home-and-kitchen', 'خانه و آشپزخانه', NULL, NULL, 'خانه و آشپزخانه', 'خانه و آشپزخانه', '1', NULL, NULL, '2021-04-10 05:53:33'),
(8, 'category/2021/3/b6afc1e99300ee9f250bb96348d40a382b66c006_1610432170.jpg', 'book-and-media', 'کتاب، لوازم تحریر و هنر', NULL, NULL, 'کتاب، لوازم تحریر و هنر', 'کتاب، لوازم تحریر و هنر', '1', NULL, NULL, '2021-04-10 05:53:48'),
(9, 'category/2021/3/de336d79fed57c63eb8896482f938500c3ee0d5f_1597562464.jpg', 'sport-and-entertainment', 'ورزش و سفر', NULL, NULL, 'ورزش و سفر', 'ورزش و سفر', '1', NULL, NULL, '2021-04-10 05:54:08'),
(10, 'category/2021/3/12aedd877929e0cf205dac8f549fed2713249532_1606299615.jpg', NULL, 'محصولات بومی و محلی', NULL, NULL, 'محصولات بومی و محلی', 'محصولات بومی و محلی', '1', '2021-04-10 05:54:12', NULL, '2021-04-10 05:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `category_amazing`
--

CREATE TABLE `category_amazing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `childCategory_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `property1` int(11) DEFAULT NULL,
  `property2` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_amazing`
--

INSERT INTO `category_amazing` (`id`, `c_id`, `product_id`, `category_id`, `subCategory_id`, `childCategory_id`, `status`, `property1`, `property2`, `created_at`, `updated_at`) VALUES
(1, '1', '3', '1', '1', '7', '1', 5, 12, NULL, NULL),
(2, '5', '14', '5', '35', '47', '1', NULL, 0, NULL, NULL),
(3, '1', '4', '1', '1', '7', '1', 7, 11, NULL, NULL),
(4, '1', '2', '1', '2', '5', '1', 1, 2, NULL, NULL),
(5, '1', '11', '1', '18', '28', '1', NULL, 0, NULL, NULL),
(6, '1', '15', '1', '18', '28', '1', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_apparel_amazing`
--

CREATE TABLE `category_apparel_amazing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `childCategory_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `property1` int(11) DEFAULT NULL,
  `property2` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_apparel_amazing`
--

INSERT INTO `category_apparel_amazing` (`id`, `product_id`, `category_id`, `subCategory_id`, `childCategory_id`, `status`, `property1`, `property2`, `created_at`, `updated_at`) VALUES
(1, '3', '1', '1', '7', '1', 5, 5, NULL, NULL),
(2, '4', '1', '1', '7', '1', 7, 10, NULL, NULL),
(3, '11', '1', '18', '28', '1', NULL, 0, NULL, NULL),
(4, '4', '1', '1', '7', '1', 7, 11, NULL, NULL),
(5, '2', '1', '2', '5', '1', 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_apparel_banner`
--

CREATE TABLE `category_apparel_banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_apparel_banner`
--

INSERT INTO `category_apparel_banner` (`id`, `img`, `title`, `link`, `type`, `created_at`, `updated_at`) VALUES
(1, 'categorypage/apparel/2021/6/3f50a565fd2020696deb374d3e26aed37de655d0_1601820141.jpg', 'tishirt', 'tishirt', '0', NULL, NULL),
(2, 'categorypage/apparel/2021/6/58b2f8dfcad5833c2d4729c2321e03386df51b79_1601820124.jpg', '2', '2', '0', NULL, NULL),
(3, 'categorypage/apparel/2021/6/77522b95dbb511500da50a8134ca486ca18ce587_1601820104.jpg', '3', '3', '0', NULL, NULL),
(4, 'categorypage/apparel/2021/6/a1dda44d88f3a71b7b6425e15084ef357ec7c5a9_1601820164.jpg', '4', '4', '0', NULL, NULL),
(5, 'categorypage/apparel/2021/6/3.jpg', 'shoessss', 'sh', '1', NULL, NULL),
(6, 'categorypage/apparel/2021/6/8ec34057542920b2e79857e206ddade0b040e345_1623232801.jpg', 'cool', 'cool', '1', NULL, NULL),
(7, 'categorypage/apparel/2021/6/5069bfd6cd93c84d3838769d7aa32fd1c6d18581_1599283793.jpg', 'ساعت', 'ساعت', '1', NULL, NULL),
(8, 'categorypage/apparel/2021/6/f5ee844ce65bfa543d664f6c4ba3bfe7d5273e5f_1599283879.jpg', 'شال', 'شال', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_apparel_brand`
--

CREATE TABLE `category_apparel_brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_apparel_brand`
--

INSERT INTO `category_apparel_brand` (`id`, `brand_id`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, NULL),
(2, '3', NULL, NULL),
(3, '5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_apparel_product_swiper`
--

CREATE TABLE `category_apparel_product_swiper` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `childCategory_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_apparel_product_swiper`
--

INSERT INTO `category_apparel_product_swiper` (`id`, `title_id`, `product_id`, `category_id`, `subCategory_id`, `childCategory_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '2', '1', '2', '5', '1', NULL, NULL),
(2, '1', '3', '1', '1', '7', '1', NULL, NULL),
(3, '1', '9', '1', '1', '19', '0', NULL, NULL),
(4, '1', '10', '1', '1', '19', '1', NULL, NULL),
(5, '1', '2', '1', '2', '5', '1', NULL, NULL),
(6, '1', '3', '1', '1', '7', '1', NULL, NULL),
(7, '1', '9', '1', '1', '19', '0', NULL, NULL),
(8, '1', '10', '1', '1', '19', '1', NULL, NULL),
(9, '2', '2', '1', '2', '5', '1', NULL, NULL),
(10, '2', '3', '1', '1', '7', '1', NULL, NULL),
(11, '2', '9', '1', '1', '19', '0', NULL, NULL),
(12, '2', '10', '1', '1', '19', '1', NULL, NULL),
(13, '2', '2', '1', '2', '5', '1', NULL, NULL),
(14, '2', '3', '1', '1', '7', '1', NULL, NULL),
(15, '2', '9', '1', '1', '19', '0', NULL, NULL),
(16, '2', '10', '1', '1', '19', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_apparel_slider`
--

CREATE TABLE `category_apparel_slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_apparel_slider`
--

INSERT INTO `category_apparel_slider` (`id`, `img`, `title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'categorypage/apparel/2021/6/74d2cc8fecf1dc16c9aae90c160176791782275e_1599282765.jpg', 'انواع محصولات', 'product', '1', NULL, NULL),
(2, 'categorypage/apparel/2021/6/bf7a32ea7ef89b4a431797cee395ed475783c438_1623157769.jpg', 'یک اتفاق هیجان انگیز', 'اتفاق', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_apparel_title_swiper`
--

CREATE TABLE `category_apparel_title_swiper` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_apparel_title_swiper`
--

INSERT INTO `category_apparel_title_swiper` (`id`, `title`, `link`, `created_at`, `updated_at`) VALUES
(1, 'لباس های زنانه بهاری', 'lebza', NULL, NULL),
(2, 'لباس های مردانه بهاری', '/mdba', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_banner`
--

CREATE TABLE `category_banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_banner`
--

INSERT INTO `category_banner` (`id`, `c_id`, `img`, `title`, `link`, `type`, `created_at`, `updated_at`) VALUES
(1, '1', 'categorypage/2021/7/bc928cad36c9cc9aed866ec4de30dfd9f5e50ec7_1607016116c401.jpg', 'اقدامات روز کرونا', 'banner', '0', NULL, NULL),
(2, '5', 'categorypage/2021/7/b28174d47d588f1558d3431249e453f3bb964a4c_1610910719c401.jpg', 'سوپر مارکتی', 'marketu', '0', NULL, NULL),
(3, '1', 'categorypage/2021/7/1f8226c4f32b961075ae267fc15e46e6b7a65839_1610266709.jpg', 'کندی', 'کندی', '0', NULL, NULL),
(4, '1', 'categorypage/2021/7/3b877e4dcd0625b73418aa963fd2a4df1dbe9a66_1594114949.jpg', 'ساعت هوشمند', 'smarti', '0', NULL, NULL),
(5, '1', 'categorypage/2021/7/7fa8b876bcc081b4ba273c420d7057074ee0814c_1594115055.jpg', 'powerbank', 'powerbank', '0', NULL, NULL),
(6, '1', 'categorypage/2021/7/cb5fe8de696fa080639fe6d4a432a13f9fe2393c_1594115103.jpg', 'laptop', 'laptop', '1', NULL, NULL),
(7, '1', 'categorypage/2021/7/f925d9ce3095224977a570c11b1f2ceaea4e68e5_1612162117c401.jpg', 'namdaran', 'namdaran', '1', NULL, NULL),
(9, '1', 'categorypage/2021/7/5a07df3e82e741074f8bf9cf7553b785430ac2a7_1594133899.jpg', 'hedp', 'hedp', '1', NULL, NULL),
(10, '1', 'categorypage/2021/7/0299f43e5874e2a941e541c1429fff049f30cdc6_1594133741.jpg', 'camera', 'camera', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_brand`
--

CREATE TABLE `category_brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_brand`
--

INSERT INTO `category_brand` (`id`, `c_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(1, '1', '1', NULL, NULL),
(2, '1', '3', NULL, NULL),
(3, '2', '5', NULL, NULL),
(4, '2', '6', NULL, NULL),
(5, '2', '7', NULL, NULL),
(7, '2', '8', NULL, NULL),
(8, '1', '9', NULL, NULL),
(9, '2', '10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_child_amazing`
--

CREATE TABLE `category_child_amazing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `childCategory_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `property1` int(11) DEFAULT NULL,
  `property2` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_child_banner`
--

CREATE TABLE `category_child_banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_child_brand`
--

CREATE TABLE `category_child_brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_child_product_swiper`
--

CREATE TABLE `category_child_product_swiper` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `childCategory_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_child_slider`
--

CREATE TABLE `category_child_slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_child_title_swiper`
--

CREATE TABLE `category_child_title_swiper` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_electronic_amazing`
--

CREATE TABLE `category_electronic_amazing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `childCategory_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `property1` int(11) DEFAULT NULL,
  `property2` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_electronic_amazing`
--

INSERT INTO `category_electronic_amazing` (`id`, `product_id`, `category_id`, `subCategory_id`, `childCategory_id`, `status`, `property1`, `property2`, `created_at`, `updated_at`) VALUES
(1, '9', '1', '1', '19', '1', NULL, NULL, NULL, NULL),
(2, '2', '1', '2', '5', '1', 1, 2, NULL, NULL),
(3, '3', '1', '1', '7', '1', 5, 12, NULL, NULL),
(4, '9', '1', '1', '19', '1', NULL, 0, NULL, NULL),
(5, '11', '1', '18', '28', '1', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_electronic_banner`
--

CREATE TABLE `category_electronic_banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_electronic_banner`
--

INSERT INTO `category_electronic_banner` (`id`, `img`, `title`, `link`, `type`, `created_at`, `updated_at`) VALUES
(3, 'categorypage/2021/5/cb5fe8de696fa080639fe6d4a432a13f9fe2393c_1594115103.jpg', 'انواع لپ تاپ', 'laptop', 0, NULL, NULL),
(9, 'categorypage/2021/5/3b877e4dcd0625b73418aa963fd2a4df1dbe9a66_1594114949.jpg', 'مچ بند و ساعت هوشمند', 'مچ بند و ساعت هوشمند', 0, NULL, NULL),
(10, 'categorypage/2021/5/7fa8b876bcc081b4ba273c420d7057074ee0814c_1594115055.jpg', 'لوازم جانبی موبایل', 'لوازم جانبی موبایل', 0, NULL, NULL),
(11, 'categorypage/2021/5/55382a7719bdbcc008d2835cf13bba41e0cc2eaa_1594115160.jpg', 'گوشی موبایل', 'mob', 0, NULL, NULL),
(12, 'categorypage/2021/5/5a07df3e82e741074f8bf9cf7553b785430ac2a7_1594133899.jpg', 'هدفون ', 'هدفون', 1, NULL, NULL),
(14, 'categorypage/2021/5/6e2eaa6bfc3839be260170a1c141951748a14a35_1594134030.jpg', 'تبلت', 'tablet', 1, NULL, NULL),
(15, 'categorypage/2021/5/0299f43e5874e2a941e541c1429fff049f30cdc6_1594133741.jpg', 'دوربین', 'دوربین', 1, NULL, NULL),
(16, 'categorypage/2021/5/f8dc3d51e8516ff32f8c8dda1c12632d1287e7bf_1594133959.jpg', 'پاوربانک', 'پ', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_electronic_product_swiper`
--

CREATE TABLE `category_electronic_product_swiper` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `childCategory_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_electronic_product_swiper`
--

INSERT INTO `category_electronic_product_swiper` (`id`, `title_id`, `product_id`, `category_id`, `subCategory_id`, `childCategory_id`, `status`, `created_at`, `updated_at`) VALUES
(2, '1', '4', '1', '1', '7', '1', NULL, NULL),
(3, '1', '3', '1', '1', '7', '1', NULL, NULL),
(4, '2', '2', '1', '2', '5', '1', NULL, NULL),
(5, '1', '9', '1', '1', '19', '1', NULL, NULL),
(6, '1', '4', '1', '1', '7', '1', NULL, NULL),
(7, '1', '3', '1', '1', '7', '1', NULL, NULL),
(8, '2', '2', '1', '2', '5', '1', NULL, NULL),
(9, '1', '9', '1', '1', '19', '1', NULL, NULL),
(10, '1', '4', '1', '1', '7', '1', NULL, NULL),
(11, '1', '3', '1', '1', '7', '1', NULL, NULL),
(12, '2', '2', '1', '2', '5', '1', NULL, NULL),
(13, '1', '9', '1', '1', '19', '1', NULL, NULL),
(14, '1', '4', '1', '1', '7', '1', NULL, NULL),
(15, '1', '3', '1', '1', '7', '1', NULL, NULL),
(16, '2', '2', '1', '2', '5', '1', NULL, NULL),
(17, '1', '9', '1', '1', '19', '1', NULL, NULL),
(18, '2', '4', '1', '1', '7', '1', NULL, NULL),
(19, '2', '3', '1', '1', '7', '1', NULL, NULL),
(20, '2', '2', '1', '2', '5', '1', NULL, NULL),
(21, '2', '9', '1', '1', '19', '1', NULL, NULL),
(22, '2', '4', '1', '1', '7', '1', NULL, NULL),
(23, '2', '3', '1', '1', '7', '1', NULL, NULL),
(24, '2', '2', '1', '2', '5', '1', NULL, NULL),
(25, '2', '9', '1', '1', '19', '1', NULL, NULL),
(26, '2', '4', '1', '1', '7', '1', NULL, NULL),
(27, '2', '3', '1', '1', '7', '1', NULL, NULL),
(28, '2', '2', '1', '2', '5', '1', NULL, NULL),
(29, '2', '9', '1', '1', '19', '1', NULL, NULL),
(30, '1', '4', '1', '1', '7', '1', NULL, NULL),
(31, '1', '3', '1', '1', '7', '1', NULL, NULL),
(32, '2', '2', '1', '2', '5', '1', NULL, NULL),
(33, '1', '9', '1', '1', '19', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_electronic_slider`
--

CREATE TABLE `category_electronic_slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_electronic_slider`
--

INSERT INTO `category_electronic_slider` (`id`, `img`, `title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(7, 'categorypage/2021/5/3a5ecf993bc52c6ebb33fceeb28e2e616440c22b_1600581512c401.jpg', 'dssdffds', 'dfsdfsdfs', '1', NULL, NULL),
(11, 'categorypage/2021/5/03b3cb20eb699a7899dd598e81550f52108db67f_1610957271c401.jpg', 'tyytrytyr', 'trryrty', '1', NULL, NULL),
(17, 'categorypage/2021/5/3e4cf12ac87bc823bbf617d3cc2b664893e40979_1594133702c401.jpg', 'fderet', 'errrte', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_electronic_title_swiper`
--

CREATE TABLE `category_electronic_title_swiper` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_electronic_title_swiper`
--

INSERT INTO `category_electronic_title_swiper` (`id`, `title`, `link`, `created_at`, `updated_at`) VALUES
(1, 'دیجیتال‌هایی که همه باید داشته باشن', NULL, NULL, NULL),
(2, 'کیفیت خونه تو بالا ببر', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_indices`
--

CREATE TABLE `category_indices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `childCategory_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_indices`
--

INSERT INTO `category_indices` (`id`, `title_id`, `product_id`, `category_id`, `subCategory_id`, `childCategory_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '11', '1', '18', '28', '1', '2021-05-07 01:56:35', '2021-05-07 01:56:35'),
(3, '1', '15', '1', '18', '28', '1', '2021-05-07 01:59:03', '2021-05-07 01:59:03'),
(4, '1', '3', '1', '1', '7', '1', '2021-05-07 01:59:14', '2021-05-07 01:59:14'),
(5, '1', '9', '1', '1', '19', '1', '2021-05-07 01:59:22', '2021-05-07 01:59:22'),
(6, '1', '10', '1', '1', '19', '1', '2021-05-07 01:59:40', '2021-05-07 01:59:40'),
(7, '1', '2', '1', '2', '5', '1', '2021-05-07 01:59:48', '2021-05-07 01:59:48'),
(8, '1', '4', '1', '1', '7', '1', '2021-05-07 02:00:06', '2021-05-07 02:00:06'),
(9, '2', '16', '1', '19', '33', '1', '2021-05-11 04:01:51', '2021-05-11 04:01:51'),
(10, '2', '3', '1', '1', '7', '1', '2021-05-11 04:02:09', '2021-05-11 04:02:09'),
(11, '2', '4', '1', '1', '7', '1', '2021-05-11 04:02:16', '2021-05-11 04:02:16'),
(12, '2', '9', '1', '1', '19', '1', '2021-05-11 04:02:25', '2021-05-11 04:02:25'),
(13, '2', '10', '1', '1', '19', '1', '2021-05-11 04:02:34', '2021-05-11 04:02:34'),
(14, '2', '2', '1', '2', '5', '1', '2021-05-11 04:02:59', '2021-05-11 04:02:59'),
(15, '2', '11', '1', '18', '28', '1', '2021-05-11 04:03:11', '2021-05-11 04:03:11'),
(16, '2', '15', '1', '18', '28', '1', '2021-05-11 04:03:21', '2021-05-11 04:03:21'),
(17, '2', '12', '1', '18', '29', '1', '2021-05-11 04:03:34', '2021-05-11 04:03:34'),
(18, '3', '4', '1', '1', '7', '1', '2021-05-07 02:00:06', '2021-05-07 02:00:06'),
(19, '3', '16', '1', '19', '33', '1', '2021-05-11 04:01:51', '2021-05-11 04:01:51'),
(20, '3', '3', '1', '1', '7', '1', '2021-05-11 04:02:09', '2021-05-11 04:02:09'),
(21, '3', '4', '1', '1', '7', '1', '2021-05-11 04:02:16', '2021-05-11 04:02:16'),
(22, '3', '9', '1', '1', '19', '1', '2021-05-11 04:02:25', '2021-05-11 04:02:25'),
(23, '3', '10', '1', '1', '19', '1', '2021-05-11 04:02:34', '2021-05-11 04:02:34'),
(24, '3', '2', '1', '2', '5', '1', '2021-05-11 04:02:59', '2021-05-11 04:02:59'),
(25, '3', '11', '1', '18', '28', '1', '2021-05-11 04:03:11', '2021-05-11 04:03:11'),
(26, '3', '15', '1', '18', '28', '1', '2021-05-11 04:03:21', '2021-05-11 04:03:21'),
(27, '3', '12', '1', '18', '29', '1', '2021-05-11 04:03:34', '2021-05-11 04:03:34'),
(28, '4', '4', '1', '1', '7', '1', '2021-05-07 02:00:06', '2021-05-07 02:00:06'),
(29, '4', '16', '1', '19', '33', '1', '2021-05-11 04:01:51', '2021-05-11 04:01:51'),
(30, '4', '3', '1', '1', '7', '1', '2021-05-11 04:02:09', '2021-05-11 04:02:09'),
(31, '4', '4', '1', '1', '7', '1', '2021-05-11 04:02:16', '2021-05-11 04:02:16'),
(32, '4', '9', '1', '1', '19', '1', '2021-05-11 04:02:25', '2021-05-11 04:02:25'),
(33, '4', '10', '1', '1', '19', '1', '2021-05-11 04:02:34', '2021-05-11 04:02:34'),
(34, '4', '2', '1', '2', '5', '1', '2021-05-11 04:02:59', '2021-05-11 04:02:59'),
(35, '4', '11', '1', '18', '28', '1', '2021-05-11 04:03:11', '2021-05-11 04:03:11'),
(36, '4', '15', '1', '18', '28', '1', '2021-05-11 04:03:21', '2021-05-11 04:03:21'),
(37, '4', '16', '1', '19', '33', '1', '2021-05-11 04:01:51', '2021-05-11 04:01:51'),
(38, '4', '3', '1', '1', '7', '1', '2021-05-11 04:02:09', '2021-05-11 04:02:09'),
(39, '5', '15', '1', '18', '28', '1', '2021-05-07 01:59:03', '2021-05-07 01:59:03'),
(40, '5', '3', '1', '1', '7', '1', '2021-05-07 01:59:14', '2021-05-07 01:59:14'),
(41, '5', '9', '1', '1', '19', '1', '2021-05-07 01:59:22', '2021-05-07 01:59:22'),
(42, '5', '10', '1', '1', '19', '1', '2021-05-07 01:59:40', '2021-05-07 01:59:40'),
(43, '5', '2', '1', '2', '5', '1', '2021-05-07 01:59:48', '2021-05-07 01:59:48'),
(44, '5', '4', '1', '1', '7', '1', '2021-05-07 02:00:06', '2021-05-07 02:00:06'),
(45, '5', '16', '1', '19', '33', '1', '2021-05-11 04:01:51', '2021-05-11 04:01:51'),
(46, '5', '3', '1', '1', '7', '1', '2021-05-11 04:02:09', '2021-05-11 04:02:09'),
(47, '5', '4', '1', '1', '7', '1', '2021-05-11 04:02:16', '2021-05-11 04:02:16'),
(48, '5', '9', '1', '1', '19', '1', '2021-05-11 04:02:25', '2021-05-11 04:02:25'),
(49, '5', '10', '1', '1', '19', '1', '2021-05-11 04:02:34', '2021-05-11 04:02:34'),
(50, '5', '2', '1', '2', '5', '1', '2021-05-11 04:02:59', '2021-05-11 04:02:59'),
(51, '6', '2', '1', '2', '5', '1', '2021-05-11 04:02:59', '2021-05-11 04:02:59'),
(52, '6', '11', '1', '18', '28', '1', '2021-05-11 04:03:11', '2021-05-11 04:03:11'),
(53, '6', '15', '1', '18', '28', '1', '2021-05-11 04:03:21', '2021-05-11 04:03:21'),
(54, '6', '16', '1', '19', '33', '1', '2021-05-11 04:01:51', '2021-05-11 04:01:51'),
(55, '6', '3', '1', '1', '7', '1', '2021-05-11 04:02:09', '2021-05-11 04:02:09'),
(56, '6', '4', '1', '1', '7', '1', '2021-05-11 04:02:16', '2021-05-11 04:02:16'),
(57, '6', '9', '1', '1', '19', '1', '2021-05-11 04:02:25', '2021-05-11 04:02:25'),
(58, '6', '10', '1', '1', '19', '1', '2021-05-11 04:02:34', '2021-05-11 04:02:34'),
(59, '6', '11', '1', '18', '28', '1', '2021-05-11 04:03:11', '2021-05-11 04:03:11'),
(60, '6', '4', '1', '1', '7', '1', '2021-05-07 02:00:06', '2021-05-07 02:00:06'),
(61, '6', '16', '1', '19', '33', '1', '2021-05-11 04:01:51', '2021-05-11 04:01:51'),
(62, '6', '9', '1', '1', '19', '1', '2021-05-21 02:20:32', '2021-05-21 02:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `category_level4s`
--

CREATE TABLE `category_level4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_level4s`
--

INSERT INTO `category_level4s` (`id`, `img`, `title`, `parent`, `name`, `link`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'کیف و کاور گوشی موبایل', '49', 'cell-phone-pouch-cover', '/search/category-cell-phone-pouch-cover/', '1', NULL, '2021-07-10 06:03:23', '2021-07-10 06:03:23'),
(2, NULL, 'محافظ صفحه نمایش', '49', '/search/category-cell-phone-screen-guard/', '/search/category-cell-phone-screen-guard/', '1', NULL, '2021-07-10 06:04:09', '2021-07-10 06:04:09'),
(3, NULL, 'پایه نگهدارنده گوشی و تبلت', '49', '/search/category-cell-phone-holder/', '/search/category-cell-phone-holder/', '1', NULL, '2021-07-10 06:06:21', '2021-07-10 07:13:15'),
(5, NULL, 'تست', '5', 'بهترین گوشی', '/best', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_levels`
--

CREATE TABLE `category_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `childCategory_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorylevel4_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_levels`
--

INSERT INTO `category_levels` (`id`, `category_id`, `subCategory_id`, `childCategory_id`, `categorylevel4_id`, `property`, `created_at`, `updated_at`) VALUES
(1, '1', '39', '49', NULL, 1, NULL, NULL),
(2, '1', '39', '49', '1', 2, NULL, NULL),
(3, '1', '39', '51', NULL, 1, NULL, NULL),
(4, '1', '39', '53', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_product_swiper`
--

CREATE TABLE `category_product_swiper` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `childCategory_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_product_swiper`
--

INSERT INTO `category_product_swiper` (`id`, `c_id`, `title_id`, `product_id`, `category_id`, `subCategory_id`, `childCategory_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '3', '1', '1', '7', '1', NULL, NULL),
(2, '1', '1', '4', '1', '1', '7', '1', NULL, NULL),
(3, '1', '1', '2', '1', '2', '5', '1', NULL, NULL),
(4, '5', '4', '14', '5', '35', '47', '1', NULL, NULL),
(5, '2', '1', '2', '1', '2', '5', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_slider`
--

CREATE TABLE `category_slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_slider`
--

INSERT INTO `category_slider` (`id`, `c_id`, `img`, `title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'categorypage/2021/6/5a07df3e82e741074f8bf9cf7553b785430ac2a7_1594133899.jpg', 'هدفون و هندزفری', 'hedf', '1', NULL, NULL),
(2, '1', 'categorypage/2021/6/6e2eaa6bfc3839be260170a1c141951748a14a35_1594134030.jpg', 'تبلت', 'tablet', '1', NULL, NULL),
(3, '2', 'categorypage/2021/6/847133eaea7802378ac40447b9520060351e2730_1601384919.jpg', 'car', 'cv', '1', NULL, NULL),
(4, '3', 'categorypage/2021/6/3f50a565fd2020696deb374d3e26aed37de655d0_1601820141.jpg', 'sd', 'ds', '1', NULL, NULL),
(5, '4', 'categorypage/2021/6/c426e2b7cb48ef51df44782ae56d646f8fbc8bff_1601380132.jpg', 'sd', 'fdfd', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_title_swiper`
--

CREATE TABLE `category_title_swiper` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_title_swiper`
--

INSERT INTO `category_title_swiper` (`id`, `c_id`, `title`, `link`, `created_at`, `updated_at`) VALUES
(1, '1', 'دیجیتال‌هایی که همه باید داشته باشن', '/digita', NULL, NULL),
(2, '2', 'نور و روشنایی', '/noor', NULL, NULL),
(3, '2', 'ابزار برقی', '/barg', NULL, NULL),
(4, '5', 'سوپرمارکت', 'si', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_vehicle_amazing`
--

CREATE TABLE `category_vehicle_amazing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `childCategory_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `property1` int(11) DEFAULT NULL,
  `property2` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_vehicle_amazing`
--

INSERT INTO `category_vehicle_amazing` (`id`, `product_id`, `category_id`, `subCategory_id`, `childCategory_id`, `status`, `property1`, `property2`, `created_at`, `updated_at`) VALUES
(1, '3', '1', '1', '7', '1', 5, 12, NULL, NULL),
(2, '11', '1', '18', '28', '1', NULL, 0, NULL, NULL),
(3, '10', '1', '1', '19', '1', NULL, 0, NULL, NULL),
(4, '15', '1', '18', '28', '1', NULL, 0, NULL, NULL),
(5, '12', '1', '18', '29', '1', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_vehicle_banner`
--

CREATE TABLE `category_vehicle_banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_vehicle_banner`
--

INSERT INTO `category_vehicle_banner` (`id`, `img`, `title`, `link`, `type`, `created_at`, `updated_at`) VALUES
(1, 'categorypage/vehicle/2021/6/5cda697af40840d5051e460673dbe7dd373e2e37_1601380094.jpg', 'موتور', '/moto', '0', NULL, NULL),
(2, 'categorypage/vehicle/2021/6/f88249cffa0415e90be3db9a974a504bc595b7ed_1601380155.jpg', '', '', '0', NULL, NULL),
(11, 'categorypage/vehicle/2021/6/5cda697af40840d5051e460673dbe7dd373e2e37_1601380094.jpg', 'موتور', '/moto', '0', NULL, NULL),
(12, 'categorypage/vehicle/2021/6/f88249cffa0415e90be3db9a974a504bc595b7ed_1601380155.jpg', '', '', '0', NULL, NULL),
(13, 'categorypage/vehicle/2021/6/5cda697af40840d5051e460673dbe7dd373e2e37_1601380094.jpg', 'موتور', '/moto', '0', NULL, NULL),
(14, 'categorypage/vehicle/2021/6/f88249cffa0415e90be3db9a974a504bc595b7ed_1601380155.jpg', '', '', '0', NULL, NULL),
(15, 'categorypage/vehicle/2021/6/5cda697af40840d5051e460673dbe7dd373e2e37_1601380094.jpg', 'موتور', '/moto', '0', NULL, NULL),
(16, 'categorypage/vehicle/2021/6/f88249cffa0415e90be3db9a974a504bc595b7ed_1601380155.jpg', '', '', '0', NULL, NULL),
(17, 'categorypage/vehicle/2021/6/f88249cffa0415e90be3db9a974a504bc595b7ed_1601380155.jpg', '', '', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_vehicle_product_swiper`
--

CREATE TABLE `category_vehicle_product_swiper` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `childCategory_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_vehicle_product_swiper`
--

INSERT INTO `category_vehicle_product_swiper` (`id`, `title_id`, `product_id`, `category_id`, `subCategory_id`, `childCategory_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '2', '1', '2', '5', '1', NULL, NULL),
(2, '1', '3', '1', '1', '7', '1', NULL, NULL),
(3, '1', '9', '1', '1', '19', '1', NULL, NULL),
(4, '2', '2', '1', '2', '5', '1', NULL, NULL),
(5, '2', '3', '1', '1', '7', '1', NULL, NULL),
(6, '2', '9', '1', '1', '19', '1', NULL, NULL),
(7, '3', '2', '1', '2', '5', '1', NULL, NULL),
(8, '3', '3', '1', '1', '7', '1', NULL, NULL),
(9, '3', '9', '1', '1', '19', '1', NULL, NULL),
(10, '3', '2', '1', '2', '5', '1', NULL, NULL),
(11, '3', '3', '1', '1', '7', '1', NULL, NULL),
(12, '3', '9', '1', '1', '19', '1', NULL, NULL),
(13, '1', '2', '1', '2', '5', '1', NULL, NULL),
(14, '1', '3', '1', '1', '7', '1', NULL, NULL),
(15, '1', '9', '1', '1', '19', '1', NULL, NULL),
(16, '2', '2', '1', '2', '5', '1', NULL, NULL),
(17, '2', '3', '1', '1', '7', '1', NULL, NULL),
(18, '2', '9', '1', '1', '19', '1', NULL, NULL),
(19, '3', '2', '1', '2', '5', '1', NULL, NULL),
(20, '3', '3', '1', '1', '7', '1', NULL, NULL),
(21, '3', '9', '1', '1', '19', '1', NULL, NULL),
(22, '3', '2', '1', '2', '5', '1', NULL, NULL),
(23, '3', '3', '1', '1', '7', '1', NULL, NULL),
(24, '3', '9', '1', '1', '19', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_vehicle_slider`
--

CREATE TABLE `category_vehicle_slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_vehicle_slider`
--

INSERT INTO `category_vehicle_slider` (`id`, `img`, `title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'categorypage/2021/6/72c19774e9706e7475cde598a14f5a5300fd7a34_1622639679.jpg', 'لوازم باغبانی', 'baghbani', '1', NULL, NULL),
(2, 'categorypage/vehicle/2021/6/6b0ed4dd193b1081dc6f3e12b1f76f8dcf7b38a8_1622639546.jpg', 'لوازم سبک', 'sabk', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_vehicle_title_swiper`
--

CREATE TABLE `category_vehicle_title_swiper` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_vehicle_title_swiper`
--

INSERT INTO `category_vehicle_title_swiper` (`id`, `title`, `link`, `created_at`, `updated_at`) VALUES
(1, 'نور و روشنایی', '/noor', NULL, NULL),
(2, 'لوازم خودرو و موتورسیکلت', '/car', NULL, NULL),
(3, 'ابزار برقی و دستی', '/abzaar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `child_categories`
--

CREATE TABLE `child_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_categories`
--

INSERT INTO `child_categories` (`id`, `img`, `title`, `parent`, `name`, `link`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'childcategory/2021/3/5530c98af79ddb5fa356bee60ff2cbba260663f4_1612608674.jpg', 'هواوی', '2', 'هواوی', 'هواوی', '1', NULL, NULL, '2021-05-21 02:03:35'),
(3, 'childcategory/2021/3/083502a125d75548341afa131a384efd000d6a7e_1614629680.jpg', 'نوکیا2', '2', 'نوکیا', 'نوکیا', '0', '2021-04-01 12:45:58', '2021-03-16 14:10:48', '2021-04-01 12:45:58'),
(5, 'childcategory/2021/3/89e7f2abac447a018242a954f03f8a6926344f8b_1594023233.jpg', 'سامسونگ', '2', 'سامسونگ', 'سامسونگ', '1', NULL, '2021-03-19 10:33:46', '2021-03-19 10:33:46'),
(6, 'childcategory/2021/3/9a812df4146d15faaab13630a50b8af27afe6844_1594023237.jpg', 'هواوی123', '4', 'شیائومی23', 'شیائومی23', '0', '2021-04-01 12:46:02', '2021-03-20 05:30:58', '2021-04-01 12:46:02'),
(7, 'childcategory/2021/3/2351996.jpg', 'شارژر تبلت و موبایل', '1', 'شارژر تبلت و موبایل', 'شارژر تبلت و موبایل', '1', NULL, '2021-03-22 14:20:22', '2021-05-03 20:05:39'),
(8, 'childcategory/2021/3/9a812df4146d15faaab13630a50b8af27afe6844_1594023237.jpg', 'تست', '3', 'تست', 'تست', '1', NULL, '2021-03-31 12:13:44', '2021-03-31 12:13:44'),
(9, NULL, 'تست', '3', 'تست', 'تست', '1', NULL, '2021-03-31 12:14:11', '2021-03-31 13:50:44'),
(10, 'childcategory/2021/4/12aedd877929e0cf205dac8f549fed2713249532_1606299615.jpg', 'تست', '2', 'تست', 'تست', '1', NULL, '2021-04-01 01:59:23', '2021-04-01 01:59:23'),
(11, 'childcategory/2021/4/12aedd877929e0cf205dac8f549fed2713249532_1606299615.jpg', 'دسته تست 3', '3', '3443', '4444', '1', NULL, '2021-04-01 02:01:17', '2021-04-01 02:01:52'),
(12, 'childcategory/2021/4/de336d79fed57c63eb8896482f938500c3ee0d5f_1597562464.jpg', 'دوچرخه', '4', 'تست23', 'تست', '1', NULL, '2021-04-01 02:10:16', '2021-04-07 13:53:28'),
(13, NULL, 'تست 12', '2', 'تست 12', 'تست', '1', NULL, '2021-04-01 02:10:38', '2021-04-01 02:10:38'),
(14, 'childcategory/2021/4/12aedd877929e0cf205dac8f549fed2713249532_1606299615.jpg', 'dsf', '2', 'dsfsdf', 'sdffds', '1', NULL, '2021-04-01 02:11:35', '2021-04-01 02:11:35'),
(15, 'childcategory/2021/4/66e195009f4883d18a24e90628bfecb1dbc63ca8_1613305610.jpg', 'ماسک تنفسی', '2', 'تست', 'تسیت', '1', NULL, '2021-04-01 02:15:20', '2021-04-07 13:53:08'),
(16, 'childcategory/2021/4/9a812df4146d15faaab13630a50b8af27afe6844_1594023237.jpg', 'اسباب بازی', '3', 'سمنیتمت', 'تیسدتن', '1', NULL, '2021-04-01 02:15:50', '2021-04-07 13:53:39'),
(17, 'childcategory/2021/4/8c801e343eac0d7d1a1031d3f8f283968f9dfab5_1610284191.jpg', 'عطر و ادکلن', '2', 'ییسسی', 'سییسیس', '1', NULL, '2021-04-01 02:16:38', '2021-04-07 13:53:48'),
(18, 'childcategory/2021/4/76fb456027eb7f38c703a14375724f9a3c78ea5f_1614683215.jpg', 'مانتو', '3', 'جدید', 'جدید', '1', NULL, '2021-04-01 02:17:43', '2021-04-07 13:53:57'),
(19, NULL, 'کیف و کاور', '1', 'کیف و کاور', 'کیف و کاور', '1', NULL, '2021-04-27 02:14:43', '2021-04-27 02:14:43'),
(20, NULL, 'کتاب چاپی', '14', 'کتاب چاپی', 'کتاب چاپی', '1', NULL, '2021-04-28 00:55:06', '2021-04-28 00:55:06'),
(21, NULL, 'پاور بانک (شارژر همراه)', '1', 'پاور بانک (شارژر همراه)', 'پاور بانک (شارژر همراه)', '1', NULL, '2021-04-28 01:06:48', '2021-04-28 01:06:48'),
(22, NULL, 'پایه نگهدارنده گوشی', '1', 'پایه نگهدارنده گوشی', 'پایه نگهدارنده گوشی', '1', NULL, '2021-04-28 01:07:08', '2021-04-28 01:07:08'),
(23, NULL, 'هوآوی', '2', 'هوآوی', 'هوآوی', '1', NULL, '2021-04-28 01:08:27', '2021-04-28 01:08:27'),
(24, NULL, 'اپل', '2', 'اپل', 'اپل', '1', NULL, '2021-04-28 01:08:41', '2021-04-28 01:08:41'),
(25, NULL, 'شیائومی', '2', 'شیائومی', 'شیائومی', '1', NULL, '2021-04-28 01:08:56', '2021-04-28 01:08:56'),
(26, NULL, 'آنر', '2', 'آنر', 'آنر', '1', NULL, '2021-04-28 01:09:07', '2021-04-28 01:09:07'),
(27, NULL, 'نوکیا', '2', 'نوکیا', 'نوکیا', '1', NULL, '2021-04-28 01:09:18', '2021-04-28 01:09:18'),
(28, NULL, 'دوربین عکاسی دیجیتال', '18', 'دوربین عکاسی دیجیتال', 'دوربین عکاسی دیجیتال', '1', NULL, '2021-04-28 01:16:49', '2021-04-28 01:16:49'),
(29, NULL, 'دوربین‌ ورزشی و فیلم برداری', '18', 'دوربین‌ ورزشی و فیلم برداری', 'دوربین‌ ورزشی و فیلم برداری', '1', NULL, '2021-04-28 01:17:08', '2021-04-28 01:17:08'),
(30, NULL, 'دوربین‌ چاپ سریع', '18', 'دوربین‌ چاپ سریع', 'دوربین‌ چاپ سریع', '1', NULL, '2021-04-28 01:17:26', '2021-04-28 01:17:26'),
(31, NULL, 'لنز', '19', 'لنز', 'لنز', '1', NULL, '2021-04-28 01:18:01', '2021-04-28 01:18:01'),
(32, NULL, 'کیف', '19', 'کیف', 'کیف', '1', NULL, '2021-04-28 01:18:15', '2021-04-28 01:18:15'),
(33, NULL, 'کارت حافظه', '19', 'کارت حافظه', 'کارت حافظه', '1', NULL, '2021-04-28 01:18:28', '2021-04-28 01:18:28'),
(34, NULL, 'کاغذ چاپ عکس', '19', 'کاغذ چاپ عکس', 'کاغذ چاپ عکس', '1', NULL, '2021-04-28 01:18:47', '2021-04-28 01:18:47'),
(35, NULL, 'تجهیزات مخصوص بازی', '23', 'تجهیزات مخصوص بازی', 'تجهیزات مخصوص بازی', '1', NULL, '2021-04-28 01:19:08', '2021-04-28 01:19:08'),
(36, NULL, 'مانیتور', '23', 'مانیتور', 'مانیتور', '1', NULL, '2021-04-28 01:19:27', '2021-04-28 01:19:27'),
(37, NULL, 'کیس‌های اسمبل شده', '23', 'کیس‌های اسمبل شده', 'کیس‌های اسمبل شده', '1', NULL, '2021-04-28 01:19:33', '2021-04-28 01:19:33'),
(38, NULL, 'قطعات داخلی کامپیوتر', '23', 'قطعات داخلی کامپیوتر', 'قطعات داخلی کامپیوتر', '1', NULL, '2021-04-28 01:19:52', '2021-04-28 01:19:52'),
(39, NULL, 'ماوس', '23', 'ماوس', 'ماوس', '1', NULL, '2021-04-28 01:20:12', '2021-04-28 01:20:12'),
(40, NULL, 'کیبورد', '23', 'کیبورد', 'کیبورد', '1', NULL, '2021-04-28 01:20:22', '2021-04-28 01:20:22'),
(41, NULL, 'کیف، کوله و کاور', '25', 'کیف، کوله و کاور', 'کیف، کوله و کاور', '1', NULL, '2021-04-28 01:20:39', '2021-04-28 01:20:39'),
(42, NULL, 'کابل‌ صدا، AUX و HDMI', '25', 'کابل‌ صدا، AUX و HDMI', 'کابل‌ صدا، AUX و HDMI', '1', NULL, '2021-04-28 01:20:55', '2021-04-28 01:20:55'),
(43, NULL, 'تلفن، بی سیم و سانترال', '32', 'تلفن، بی سیم و سانترال', 'تلفن، بی سیم و سانترال', '1', NULL, '2021-04-28 01:21:15', '2021-04-28 01:21:15'),
(44, NULL, 'فکس', '32', 'فکس', 'فکس', '1', NULL, '2021-04-28 01:21:34', '2021-04-28 01:21:34'),
(45, NULL, 'پرینتر', '32', 'پرینتر', 'پرینتر', '1', NULL, '2021-04-28 01:21:46', '2021-04-28 01:21:46'),
(46, NULL, 'لوازم جانبی اداری', '32', 'لوازم جانبی اداری', 'لوازم جانبی اداری', '1', NULL, '2021-04-28 01:21:53', '2021-04-28 01:21:53'),
(47, NULL, 'محصولات پروتئینی', '35', 'محصولات پروتئینی', 'محصولات پروتئینی', '1', NULL, '2021-05-05 10:48:34', '2021-05-21 02:03:11'),
(48, NULL, 'نوزاد', '36', 'نوزاد', 'نوزاد', '1', NULL, '2021-06-13 02:53:55', '2021-06-13 02:53:55'),
(49, 'childcategory/2021/7/113805332.jpg', 'لوازم جانبی گوشی موبایل', '39', 'category-mobile-accessories', '/search/category-mobile-accessories/', '1', NULL, '2021-07-10 04:56:47', '2021-07-10 10:29:18'),
(50, NULL, 'لوازم جانبی تبلت', '39', 'لوازم جانبی تبلت', '/search/category-tablet-accessories/', '1', NULL, '2021-07-10 04:57:12', '2021-07-10 04:57:41'),
(51, 'childcategory/2021/7/119117795.jpg', 'لوازم جانبی اداری', '39', 'لوازم جانبی اداری', 'لوازم جانبی اداری', '1', NULL, '2021-07-10 04:57:53', '2021-07-10 10:29:41'),
(52, NULL, 'بند ساعت و مچ‌ بند', '39', 'بند ساعت و مچ‌ بند', 'بند ساعت و مچ‌ بند', '1', NULL, '2021-07-10 04:58:06', '2021-07-10 04:58:06'),
(53, 'childcategory/2021/7/40681.jpg', 'لوازم جانبی کامپیوتر', '39', 'لوازم جانبی کامپیوتر', 'لوازم جانبی کامپیوتر', '1', NULL, '2021-07-10 04:58:16', '2021-07-10 10:29:29'),
(54, NULL, 'لوازم تعمیرات کالای دیجیتال', '39', 'لوازم تعمیرات کالای دیجیتال', 'لوازم تعمیرات کالای دیجیتال', '1', NULL, '2021-07-10 04:58:26', '2021-07-10 04:58:26'),
(55, NULL, 'لوازم جانبی صوتی و تصویری', '39', 'لوازم جانبی صوتی و تصویری', 'لوازم جانبی صوتی و تصویری', '1', NULL, '2021-07-10 04:58:35', '2021-07-10 04:58:35'),
(56, NULL, 'لوازم جانبی لپ تاپ', '39', 'لوازم جانبی لپ تاپ', 'لوازم جانبی لپ تاپ', '1', NULL, '2021-07-10 04:58:44', '2021-07-10 04:58:44'),
(57, NULL, 'لوازم جانبی عکاسی و فیلم برداری', '39', 'لوازم جانبی عکاسی و فیلم برداری', 'لوازم جانبی عکاسی و فیلم برداری', '1', NULL, '2021-07-10 04:58:57', '2021-07-10 04:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `value`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'مشکی', '#000000', '1', NULL, '2021-03-23 10:04:12', '2021-03-23 10:04:28'),
(2, 'سفید', '#ffffff', '1', NULL, '2021-03-23 10:04:59', '2021-03-23 10:04:59'),
(3, 'صورتی', '#FF80B680', '1', NULL, '2021-03-23 10:06:06', '2021-03-23 11:06:24'),
(4, 'ابی', '#3D2EFF80', '1', NULL, '2021-03-23 10:11:55', '2021-03-23 11:06:21'),
(5, 'زرد', '#AFFF4F', '1', NULL, '2021-03-23 11:09:08', '2021-03-23 11:09:57'),
(6, 'آسمانی', '#12D8FF', '1', NULL, '2021-04-01 02:32:39', '2021-04-01 02:32:39'),
(7, 'قرمز کم رنگ', '#826F6F', '1', NULL, '2021-04-01 02:33:08', '2021-04-01 02:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `user_id`, `comment`, `like`, `report`, `parent`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', '1', 'بهترین محصول در کل دیجی کالا', '2', '1', '0', '1', '2022-01-09 15:46:47', '2022-01-09 15:46:47'),
(2, '2', '2', 'اولین جواب به کامنت', '1', '1', '1', '1', '2022-01-09 15:46:47', '2022-01-14 06:57:50'),
(3, '2', '6', 'دومین جواب به کامنت', '4', NULL, '1', '1', '2022-01-09 15:46:47', '2022-01-09 15:46:47'),
(8, '2', '1', 'محصول خوبی؟', '0', '0', '0', '1', '2022-01-14 05:14:28', '2022-05-17 13:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `compares`
--

CREATE TABLE `compares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `compares`
--

INSERT INTO `compares` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(11, '1', '2', '2022-05-20 11:58:18', '2022-05-20 11:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_expire` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `code`, `type`, `price`, `percent`, `product_id`, `category_id`, `vendor_id`, `status`, `date_expire`, `created_at`, `updated_at`) VALUES
(1, '1235541700547', NULL, '25000', NULL, '-1', '-1', NULL, '1', '2021-10-29', '2021-10-27 01:49:26', '2021-10-27 01:49:26'),
(2, '2201449738859', NULL, NULL, '20', '2', NULL, NULL, '1', '2021-10-31', '2021-10-27 23:26:06', '2021-10-27 23:26:06'),
(3, '2666092845566', NULL, '300000', '', '', '1', '', '1', '2021-10-30', '2021-10-27 23:26:54', '2021-10-27 23:26:54'),
(4, '1840963888495', NULL, '35000', '', '', '', '3', '0', '2021-10-30', '2021-10-27 23:27:15', '2021-10-27 23:35:19'),
(6, '9817828660042', 1, '36000', NULL, NULL, NULL, NULL, '1', '2021-10-31', '2021-10-28 23:21:56', '2021-10-28 23:21:56'),
(7, '8709591053042', 0, '', '12', '', '', '', '1', '2021-10-30', '2021-10-28 23:22:14', '2021-10-28 23:22:14'),
(8, '3371858172308', 1, '3799990', NULL, NULL, NULL, NULL, '1', '2022-05-25', '2022-05-16 08:02:11', '2022-05-16 08:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `user_id`, `user_email`, `user_name`, `user_mobile`, `title`, `text`, `code`, `created_at`, `updated_at`) VALUES
(42, '33', 'dsssssss@dssss.com', NULL, '06515151515', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق درخواست ثبت نام جدیدی را دارد.', '2026', '2022-05-10 16:37:46', '2022-05-10 16:37:46'),
(43, '33', 'dsssssss@dssss.com', NULL, '51515', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق با موفقیت ثبت نام شد', 'ثبت نام موفق بود', '2022-05-10 16:42:06', '2022-05-10 16:42:06'),
(44, '33', 'dsssssss@dssss.com', NULL, NULL, 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق با موفقیت ثبت نام شد', 'ثبت نام موفق بود', '2022-05-10 16:48:13', '2022-05-10 16:48:13'),
(45, '34', 'dfssdf@dsd.com', NULL, '02161515215', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق درخواست ثبت نام جدیدی را دارد.', '5040', '2022-05-10 16:48:43', '2022-05-10 16:48:43'),
(46, '34', 'dfssdf@dsd.com', NULL, '51151515', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق با موفقیت ثبت نام شد', 'ثبت نام موفق بود', '2022-05-10 16:51:05', '2022-05-10 16:51:05'),
(47, '35', 'livedars@gmail.com', NULL, '09151515151', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق درخواست ثبت نام جدیدی را دارد.', '4518', '2022-05-11 08:12:39', '2022-05-11 08:12:39'),
(48, '35', 'livedars@gmail.com', NULL, '09125151515', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق با موفقیت ثبت نام شد', 'ثبت نام موفق بود', '2022-05-11 08:14:11', '2022-05-11 08:14:11'),
(49, '36', 'dd@gmaial.com', NULL, '06151515115', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق درخواست ثبت نام جدیدی را دارد.', '3959', '2022-05-11 08:31:06', '2022-05-11 08:31:06'),
(50, '36', 'dd@gmaial.com', NULL, '515', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق با موفقیت ثبت نام شد', 'ثبت نام موفق بود', '2022-05-11 08:32:01', '2022-05-11 08:32:01'),
(51, '37', 'tohid@gmail.com', NULL, '09120123456', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق درخواست ثبت نام جدیدی را دارد.', '6160', '2022-05-11 09:29:52', '2022-05-11 09:29:52'),
(52, '37', 'tohid@gmail.com', NULL, '5115', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق با موفقیت ثبت نام شد', 'ثبت نام موفق بود', '2022-05-11 09:30:39', '2022-05-11 09:30:39'),
(53, '38', 'hassan@gmail.com', NULL, '09120123467', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق درخواست ثبت نام جدیدی را دارد.', '4620', '2022-05-11 09:37:17', '2022-05-11 09:37:17'),
(54, '39', 'hassan@gmail.com', NULL, '09120123467', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق درخواست ثبت نام جدیدی را دارد.', '4710', '2022-05-11 09:37:22', '2022-05-11 09:37:22'),
(55, '39', 'hassan@gmail.com', NULL, '0916161612', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق با موفقیت ثبت نام شد', 'ثبت نام موفق بود', '2022-05-11 09:38:35', '2022-05-11 09:38:35'),
(56, '39', 'hassan@gmail.com', NULL, '0916161612', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق با موفقیت ثبت نام شد', 'ثبت نام موفق بود', '2022-05-11 09:38:39', '2022-05-11 09:38:39'),
(57, '40', 't@d.com', NULL, '09115215151', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق درخواست ثبت نام جدیدی را دارد.', '5023', '2022-05-11 09:41:50', '2022-05-11 09:41:50'),
(58, '41', 't@d.com', NULL, '09115215151', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق درخواست ثبت نام جدیدی را دارد.', '4418', '2022-05-11 09:41:59', '2022-05-11 09:41:59'),
(59, '40', 't@d.com', NULL, '484', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق با موفقیت ثبت نام شد', 'ثبت نام موفق بود', '2022-05-11 09:42:30', '2022-05-11 09:42:30'),
(60, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش شما با موفقیت دریافت شد', 'سفارش شما با موفقیت دریافت شد و در حال پردازش است', 'سفارش با موفقیت پرداخت شد', '2022-05-16 09:15:03', '2022-05-16 09:15:03'),
(61, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش شما با موفقیت دریافت شد', 'سفارش شما با موفقیت دریافت شد و در حال پردازش است', 'سفارش با موفقیت پرداخت شد', '2022-05-16 09:16:21', '2022-05-16 09:16:21'),
(62, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش شما با موفقیت دریافت شد', 'سفارش شما با موفقیت دریافت شد و در حال پردازش است', 'سفارش با موفقیت پرداخت شد', '2022-05-16 09:20:37', '2022-05-16 09:20:37'),
(63, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش شما با موفقیت دریافت شد', 'سفارش شما با موفقیت دریافت شد و در حال پردازش است', 'سفارش با موفقیت پرداخت شد', '2022-05-16 09:20:53', '2022-05-16 09:20:53'),
(64, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش شما با موفقیت دریافت شد', 'سفارش شما با موفقیت دریافت شد و در حال پردازش است', 'سفارش با موفقیت پرداخت شد', '2022-05-16 09:20:54', '2022-05-16 09:20:54'),
(65, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش شما با موفقیت دریافت شد', 'سفارش شما با موفقیت دریافت شد و در حال پردازش است', 'سفارش با موفقیت پرداخت شد', '2022-05-16 09:21:35', '2022-05-16 09:21:35'),
(66, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش شما با موفقیت دریافت شد', 'سفارش شما با موفقیت دریافت شد و در حال پردازش است', 'سفارش با موفقیت پرداخت شد', '2022-05-16 09:21:46', '2022-05-16 09:21:46'),
(67, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش شما با موفقیت دریافت شد', 'سفارش شما با موفقیت دریافت شد و در حال پردازش است', 'سفارش با موفقیت پرداخت شد', '2022-05-16 09:27:03', '2022-05-16 09:27:03'),
(68, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش شما با موفقیت دریافت شد', 'سفارش شما با موفقیت دریافت شد و در حال پردازش است', 'سفارش با موفقیت پرداخت شد', '2022-05-16 09:28:02', '2022-05-16 09:28:02'),
(69, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش شما با موفقیت دریافت شد', 'سفارش شما با موفقیت دریافت شد و در حال پردازش است', 'سفارش با موفقیت پرداخت شد', '2022-05-16 09:28:40', '2022-05-16 09:28:40'),
(70, '11', NULL, NULL, '09378589727', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:26:51', '2022-05-17 11:26:51'),
(71, '11', NULL, NULL, '09378589727', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:27:00', '2022-05-17 11:27:00'),
(72, '11', NULL, NULL, '09378589727', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:27:19', '2022-05-17 11:27:19'),
(73, '11', NULL, NULL, '09378589727', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:28:04', '2022-05-17 11:28:04'),
(74, '11', NULL, NULL, '09378589727', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:28:07', '2022-05-17 11:28:07'),
(75, '11', NULL, NULL, '09378589727', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:28:22', '2022-05-17 11:28:22'),
(76, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:28:24', '2022-05-17 11:28:24'),
(77, '11', NULL, NULL, '09378589727', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:29:08', '2022-05-17 11:29:08'),
(78, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:29:09', '2022-05-17 11:29:09'),
(79, '11', NULL, NULL, '09378589727', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:29:27', '2022-05-17 11:29:27'),
(80, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:29:29', '2022-05-17 11:29:29'),
(81, '11', 'test@dd.com', NULL, '09378589727', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:30:52', '2022-05-17 11:30:52'),
(82, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:30:55', '2022-05-17 11:30:55'),
(83, '11', 'test@dd.com', NULL, '09378589727', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:31:29', '2022-05-17 11:31:29'),
(84, '11', 'test@dd.com', NULL, '09378589727', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:31:48', '2022-05-17 11:31:48'),
(85, '11', 'test@dd.com', NULL, '09378589727', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:32:44', '2022-05-17 11:32:44'),
(86, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:32:46', '2022-05-17 11:32:46'),
(87, '11', 'test@dd.com', NULL, '09378589727', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:33:14', '2022-05-17 11:33:14'),
(88, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:33:16', '2022-05-17 11:33:16'),
(89, '11', 'test@dd.com', NULL, '09378589727', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:36:31', '2022-05-17 11:36:31'),
(90, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:36:33', '2022-05-17 11:36:33'),
(91, '11', 'test@dd.com', NULL, '09378589727', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:38:52', '2022-05-17 11:38:52'),
(92, '1', 'admin@livedars.ir', NULL, '09378589767', 'سفارش محصول شما تحویل داده شد', 'سفارش محصولی در سایت دیجی کالا تحویل داده شد', 'سفارش با موفقیت تحویل داده شد', '2022-05-17 11:38:55', '2022-05-17 11:38:55'),
(93, '1', 'admin@livedars.ir', NULL, '09378589767', 'نظر شما تایید شد', 'نظر شما تایید شد', 'نظر شما تایید شد', '2022-05-17 13:19:52', '2022-05-17 13:19:52'),
(94, '1', 'admin@livedars.ir', NULL, '09378589767', 'نظر شما تایید شد', 'نظر شما تایید شد', 'نظر شما تایید شد', '2022-05-17 13:22:21', '2022-05-17 13:22:21'),
(95, '58', 't@d.com', NULL, '09115215151', 'محصول ارسالی شما پذیرفته شد', 'محصول ارسالی شما در دیجی کالا پذیرفته شد', 'محصول شما پذیرفته  شد', '2022-05-17 14:14:22', '2022-05-17 14:14:22'),
(96, '39', 'hassan@gmail.com', NULL, '0916161612', 'تایید فروشندگی شما', 'تایید فروشندگی شما', 'تایید فروشندگی شما', '2022-05-17 15:10:55', '2022-05-17 15:10:55'),
(97, '42', 'dfdffd@ff.com', NULL, '09151515151', 'ثبت نام فروشنده جدید', 'فروشنده با ایمیل فوق درخواست ثبت نام جدیدی را دارد.', '2744', '2022-05-24 13:20:46', '2022-05-24 13:20:46');

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
-- Table structure for table `favlist_product`
--

CREATE TABLE `favlist_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `favlist_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favlist_product`
--

INSERT INTO `favlist_product` (`id`, `favlist_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '1', '1', NULL, NULL),
(2, '1', '2', NULL, NULL),
(3, '1', '3', NULL, NULL),
(4, '2', '3', NULL, NULL),
(5, '3', '4', NULL, NULL),
(6, '2', '4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(7, '3', '1', NULL, NULL),
(8, '4', '1', NULL, NULL),
(11, '7', '2', NULL, NULL),
(12, '8', '2', NULL, NULL),
(18, '2', '1', '2022-05-24 12:40:02', '2022-05-24 12:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `fav_lists`
--

CREATE TABLE `fav_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fav_lists`
--

INSERT INTO `fav_lists` (`id`, `user_id`, `title`, `description`, `link`, `created_at`, `updated_at`) VALUES
(1, '1', 'موبایل', 'گوشی های سامسونگ', 'samsung', NULL, NULL),
(2, '1', 'موبایل', 'گوشی های آیفون', 'iphone', NULL, NULL),
(5, '1', 'لپ تاپ', NULL, 'yjI7G0', '2021-09-26 07:40:31', '2021-09-26 07:40:31'),
(7, '1', 'تست', 'تست', 'tauCYD', '2021-12-23 11:06:51', '2021-12-23 11:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `footer_inner_boxes`
--

CREATE TABLE `footer_inner_boxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_inner_boxes`
--

INSERT INTO `footer_inner_boxes` (`id`, `page_id`, `top`, `created_at`, `updated_at`) VALUES
(1, '1', 1, '2021-04-06 10:17:17', '2021-04-06 10:17:17'),
(2, '3', 1, '2021-04-06 10:24:27', '2021-04-06 10:24:27'),
(3, '4', 1, '2021-04-06 10:24:29', '2021-04-06 10:24:29'),
(4, '5', 1, '2021-04-06 10:24:41', '2021-04-06 10:24:41'),
(5, '6', 1, '2021-04-06 10:24:43', '2021-04-06 10:24:43'),
(7, '30', 0, '2021-04-08 00:58:04', '2021-04-08 00:58:04'),
(8, '31', 0, '2021-04-08 00:58:08', '2021-04-08 00:58:08'),
(9, '32', 0, '2021-04-08 00:58:11', '2021-04-08 00:58:11'),
(10, '33', 0, '2021-04-08 00:58:15', '2021-04-08 00:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `footer_link_ones`
--

CREATE TABLE `footer_link_ones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_link_ones`
--

INSERT INTO `footer_link_ones` (`id`, `page_id`, `created_at`, `updated_at`) VALUES
(1, '7', '2021-04-06 10:43:20', '2021-04-06 10:43:20'),
(2, '8', '2021-04-06 10:43:22', '2021-04-06 10:43:22'),
(3, '9', '2021-04-06 10:43:25', '2021-04-06 10:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `footer_link_threes`
--

CREATE TABLE `footer_link_threes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_link_threes`
--

INSERT INTO `footer_link_threes` (`id`, `page_id`, `created_at`, `updated_at`) VALUES
(1, '15', '2021-04-06 13:08:36', '2021-04-06 13:08:36'),
(2, '16', '2021-04-06 13:08:39', '2021-04-06 13:08:39'),
(3, '17', '2021-04-06 13:09:25', '2021-04-06 13:09:25'),
(4, '18', '2021-04-06 13:09:28', '2021-04-06 13:09:28'),
(5, '19', '2021-04-06 13:09:34', '2021-04-06 13:09:34'),
(6, '20', '2021-04-06 13:09:37', '2021-04-06 13:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `footer_link_titles`
--

CREATE TABLE `footer_link_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_link_titles`
--

INSERT INTO `footer_link_titles` (`id`, `page_id`, `created_at`, `updated_at`) VALUES
(1, '21', '2021-04-06 13:35:25', '2021-04-06 13:47:14'),
(2, '22', '2021-04-06 13:25:45', '2021-04-06 13:25:45'),
(3, '23', '2021-04-06 13:25:48', '2021-04-06 13:46:57');

-- --------------------------------------------------------

--
-- Table structure for table `footer_link_twos`
--

CREATE TABLE `footer_link_twos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_link_twos`
--

INSERT INTO `footer_link_twos` (`id`, `page_id`, `created_at`, `updated_at`) VALUES
(1, '10', '2021-04-06 13:05:40', '2021-04-06 13:05:40'),
(2, '11', '2021-04-06 13:05:44', '2021-04-06 13:05:44'),
(3, '12', '2021-04-06 13:06:01', '2021-04-06 13:06:01'),
(4, '13', '2021-04-06 13:06:03', '2021-04-06 13:06:03'),
(5, '14', '2021-04-06 13:06:06', '2021-04-06 13:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `footer_partners`
--

CREATE TABLE `footer_partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_partners`
--

INSERT INTO `footer_partners` (`id`, `page_id`, `created_at`, `updated_at`) VALUES
(1, '24', '2021-04-07 14:58:12', '2021-04-07 14:58:12'),
(2, '25', '2021-04-07 14:58:15', '2021-04-07 14:58:15'),
(3, '26', '2021-04-07 14:58:17', '2021-04-07 14:58:17'),
(4, '27', '2021-04-07 14:58:21', '2021-04-07 14:58:21'),
(5, '28', '2021-04-07 14:58:24', '2021-04-07 14:58:24'),
(6, '29', '2021-04-07 14:58:27', '2021-04-07 14:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `footer_titles`
--

CREATE TABLE `footer_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_titles`
--

INSERT INTO `footer_titles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'فروشگاه اینترنتی دیجی‌کالا، بررسی، انتخاب و خرید آنلاین', '2021-04-07 13:47:02', '2021-04-07 13:47:02'),
(2, 'دیجی‌کالا به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با پایبندی به سه اصل، پرداخت در محل، 7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا موفق شده تا همگام با فروشگاه‌های معتبر جهان، به بزرگ‌ترین فروشگاه اینترنتی ایران تبدیل شود. به محض ورود به سایت دیجی‌کالا با دنیایی از کالا رو به رو می‌شوید! هر آنچه که نیاز دارید و به ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد. دیجی‌کالا مثل یک ویترین پر زرق و برق است که با انواع و اقسام برندهایی نظیرسامسونگ (Samsung)، ال جی (LG)، اپل (Apple)، نوکیا (Nokia)، شیائومی (Xiaomi)، هواوی (Huawei) و همچنین محصولاتی که هر فرد در زندگی شخصی، تحصیلی و کاری خود به آنها احتیاج پیدا می‌کند، چیده شده است. اینجا مرجع متنوع‌ترین کالاهای دیجیتال از گوشی موبایل اندروید و iOS (آیفون) گرفته تا تبلت، لپ تاپ، هارد اکسترنال، اسپیکر، هدفون، هندزفری و پاور بانک است. دیجی‌کالا همچنین یک بازار آنلاین برای خرید جدیدترین و ضروری‌ترین لوازم خانگی همانند فرش، پرده، کاغذ دیواری، مبلمان، میز تلویزیون و ماشین ظرفشویی و لباسشویی است تا هر فرد بتواند مطابق با سلیقه شخصی خود، خانه رویاهایش را بسازد. حتی می‌توانید محیط کار خود را با بهترین ماشین های اداری نظیر پرینتر، اسکنر و لوازم التحریر تجهیز کنید. علاوه بر این، می‌توانید با سر زدن به شبکه های اجتماعی دیجی کالا نظیر فیس بوک و تلگرام از جدیدترین مدل‌های لباس، اکسسوری، کیف و کفش زنانه، مردانه، بچه گانه، دخترانه، پسرانه و نوزاد مطلع شوید و از مشهورترین برندهای دنیا نظیر نایکی، آدیداس، ریباک، کلمبیا، باس، گوچی و مانگو اجناس اصل و باکیفیت خریداری نمایید. همچنین با سر زدن به محصولات آرایشی و بهداشتی، لوازم شخصی برقی و انواع عطر و ادکلن اصل تجربه‌ای جدید از خرید آنلاین کسب کنید و برای خرید انواع لوازم سفر، دوچرخه و آلات موسیقی با مقایسه دقیق محصولات دیگر دچار سردرگمی نشوید. این روزها با اضافه شدن محصولات سوپرمارکت (دیجی کالا فرش)، انواع خواربار، میوه و سبزیجات، مواد پروتئینی اعم از گوشت، مرغ و ماهی و انواع نوشیدنی و تنقلات و عطاری آنلاین می توانید کلیه نیازهای خود را تنها با چند کلیک سفارش داده و در کمترین زمان ممکن درب منزل تحویل بگیرید. مناسب‌ترین جمله درباره دیجی‌کالا ،بازار بزرگ اینترنتی، است؛ چرا که با قدم گذاشتن در آن می‌توانید، یک خرید اینترنتی لذت بخش، با قیمت مناسب و ارزان به همراه تخفیف ویژه در حراج ها را تجربه کنید.', '2021-04-07 13:47:43', '2021-04-07 13:47:43'),
(3, 'استفاده از مطالب فروشگاه اینترنتی دیجی‌کالا فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌کالا) می‌باشد.', '2021-04-07 13:47:57', '2021-04-07 13:47:57'),
(4, 'از تخفیف‌ها و جدیدترین‌های دیجی‌کالا باخبر شوید:', '2021-04-07 13:50:08', '2021-04-07 14:46:18'),
(5, 'دیجی‌کالا را در شبکه‌های اجتماعی دنبال کنید:', '2021-04-07 13:50:13', '2021-04-07 13:50:13'),
(6, 'هفت روز هفته ، ۲۴ ساعت شبانه‌روز پاسخگوی شما هستیم', '2021-04-07 13:50:20', '2021-04-07 13:50:20'),
(7, 'شماره تماس : ۶۱۹۳۰۰۰۰ - ۰۲۱', '2021-04-07 13:50:31', '2021-04-07 13:50:31'),
(8, 'آدرس ایمیل : info@digikala.com', '2021-04-07 13:50:37', '2021-04-07 13:50:37'),
(9, '5', '2021-04-07 13:52:07', '2021-04-07 13:52:07'),
(10, '7', '2021-04-07 13:52:09', '2021-04-07 13:52:09'),
(11, '15', '2021-04-07 13:52:12', '2021-04-07 13:52:12'),
(12, '16', '2021-04-07 13:52:22', '2021-04-07 13:52:22'),
(13, '17', '2021-04-07 13:52:24', '2021-04-07 13:52:24'),
(14, '18', '2021-04-07 13:52:25', '2021-04-07 13:52:25'),
(15, '12', '2021-04-07 13:52:45', '2021-04-07 13:52:45'),
(16, '<img src=\"https://www.digikala.com/static/files/1e5dab5a.png\" class=\"c-footer__safety-partner-3\" width=\"90\" alt=\"\" onclick=\"window.open(\'https://www.ecunion.ir/verify/digikala.com?token=35858775acf0232a8063\', \'Popup\',\'toolbar=no, location=no, statusbar=no, menubar=no, scrollbars=1, resizable=0, width=580, height=600, top=30\')\" data-snt-event=\"dkFooterClick\" loading=\"lazy\" data-snt-params=\"{&quot;item&quot;:&quot;varification&quot;,&quot;item_option&quot;:&quot;samandehi&quot;}\" style=\"cursor:pointer\">', '2021-04-08 00:48:49', '2021-04-08 00:48:49'),
(17, '<img src=\"http://127.0.0.1:8000/digikala/icon/download.png\" alt=\"\" onclick=\"window.open(&quot;https://trustseal.enamad.ir/?id=19077&amp;Code=sScdOJOzhFxtcEqkjP7P&quot;)\" data-snt-event=\"dkFooterClick\" loading=\"lazy\" data-snt-params=\"{&quot;item&quot;:&quot;varification&quot;,&quot;item_option&quot;:&quot;enamad&quot;}\" style=\"cursor:pointer;width: 100%;height: 100%;\" id=\"sScdOJOzhFxtcEqkjP7P\">', '2021-04-08 00:48:58', '2021-04-08 00:48:58'),
(18, '<img id=\"nbqeoeukjxlzjzpejzpe\" style=\"cursor:pointer\" onclick=\"window.open(&quot;https://logo.samandehi.ir/Verify.aspx?id=28177&amp;p=uiwkmcsirfthjyoejyoe&quot;, &quot;Popup&quot;,&quot;toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30&quot;)\" alt=\"logo-samandehi\" loading=\"lazy\" src=\"http://127.0.0.1:8000/digikala/icon/22.png\">', '2021-04-08 00:49:03', '2021-04-08 00:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `img`, `product_id`, `status`, `position`, `created_at`, `updated_at`) VALUES
(1, 'gallery/2021/3/121735238.jpg', '2', '1', '2', '2021-03-23 14:34:38', '2021-03-23 14:40:21'),
(3, 'gallery/2021/3/23/89e7f2abac447a018242a954f03f8a6926344f8b_1594023233.jpg', '2', '1', '1', '2021-03-23 14:36:44', '2021-03-23 14:36:44'),
(4, 'gallery/2021/3/24/3960.jpg', '2', '1', '3', '2021-03-24 08:49:27', '2021-03-24 08:49:27'),
(5, 'gallery/2021/3/24/bec52f6b233f286775b853966aeed2089aa5a25e_1594023235.jpg', NULL, '1', '4', '2021-03-24 09:21:01', '2021-03-24 09:21:01'),
(6, 'gallery/2021/3/24/9a812df4146d15faaab13630a50b8af27afe6844_1594023237.jpg', NULL, '1', '23', '2021-03-24 09:43:54', '2021-03-24 09:43:54'),
(7, 'gallery/2021/3/24/8c801e343eac0d7d1a1031d3f8f283968f9dfab5_1610284191.jpg', NULL, '1', 'fd', '2021-03-24 09:49:26', '2021-03-24 09:49:26'),
(8, 'gallery/2021/3/24/9a812df4146d15faaab13630a50b8af27afe6844_1594023237.jpg', NULL, '1', '1', '2021-03-24 10:26:49', '2021-03-24 10:26:49'),
(9, 'gallery/2021/3/24/12aedd877929e0cf205dac8f549fed2713249532_1606299615.jpg', NULL, '1', '1', '2021-03-24 10:27:31', '2021-03-24 10:27:31'),
(10, 'gallery/2021/3/24/66e195009f4883d18a24e90628bfecb1dbc63ca8_1613305610.jpg', NULL, '1', '2', '2021-03-24 10:28:06', '2021-03-24 10:28:06'),
(11, 'gallery/2021/3/24/12aedd877929e0cf205dac8f549fed2713249532_1606299615.jpg', NULL, '1', '1', '2021-03-24 10:28:43', '2021-03-24 10:28:43'),
(13, 'gallery/2021/3/24/111746697.jpg', '3', '1', '1', '2021-03-24 11:15:21', '2021-03-24 11:15:21'),
(14, 'gallery/2021/3/24/753054.jpg', '3', '1', '2', '2021-03-24 11:15:40', '2021-03-24 11:15:40'),
(15, 'gallery/2021/3/24/113036263.jpg', '3', '1', '3', '2021-03-24 11:15:49', '2021-03-24 11:15:49'),
(16, 'gallery/2021/3/24/9a812df4146d15faaab13630a50b8af27afe6844_1594023237.jpg', '2', '1', '4', '2021-03-24 11:16:03', '2021-03-24 11:16:03'),
(17, 'gallery/2021/4/1/76fb456027eb7f38c703a14375724f9a3c78ea5f_1614683215.jpg', '2', '1', '4', '2021-04-01 02:35:30', '2021-04-01 02:35:30'),
(18, 'gallery/2021/4/1/66e195009f4883d18a24e90628bfecb1dbc63ca8_1613305610.jpg', '3', '1', '3', '2021-04-01 02:36:12', '2021-04-01 02:36:12'),
(19, 'gallery/2021/4/1/113036263.jpg', '4', '1', '1', '2021-04-01 02:49:33', '2021-04-01 02:49:33'),
(20, 'gallery/2021/4/1/76fb456027eb7f38c703a14375724f9a3c78ea5f_1614683215.jpg', '4', '1', '2', '2021-04-01 02:49:41', '2021-04-01 02:49:41'),
(21, 'gallery/2022/5/24/100 Desktop Wallpapers [www.vivadl.com] (3).jpg', '3', '1', '5', '2022-05-24 12:30:29', '2022-05-24 12:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `gifts`
--

CREATE TABLE `gifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_expire` date DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gifts`
--

INSERT INTO `gifts` (`id`, `user_id`, `code`, `type`, `date_expire`, `price`, `value_price`, `created_at`, `updated_at`) VALUES
(1, '1', '17261157665200350656', '1', '2021-10-12', '10000000', '10000000', '2021-10-11 03:30:38', '2021-10-11 00:20:29'),
(2, '1', '17261157665200350654', '1', '2021-10-12', '20000000', '0', '2021-10-11 03:30:38', '2021-10-11 00:20:52'),
(3, NULL, 'ZDhQpsYBEBM6G0q2CzDVfIG', '0', '2021-10-28', '30000000', '30000000', '2021-10-11 01:56:44', '2021-10-11 01:56:44'),
(4, NULL, 'Zf1F1us2j4x0piXPA7IyhY3', '0', '2021-10-28', '30000000', '30000000', '2021-10-11 01:57:09', '2021-10-11 01:57:09'),
(6, '1', '2468778569', '1', '2021-10-28', '6656565', '6656565', '2021-10-11 02:08:58', '2021-10-11 02:10:38'),
(7, NULL, '2304614965872', '0', '2021-11-04', '32500000', '6500000', '2021-10-11 02:10:08', '2021-10-11 02:10:08'),
(8, NULL, '8878143299176', '0', '2021-10-31', '10000000', '0', '2021-10-28 23:37:30', '2021-10-29 01:18:12'),
(9, NULL, '5771046942776', '0', '2021-10-30', '5000000', '0', '2021-10-29 01:19:41', '2021-10-29 01:20:10'),
(10, NULL, '9262897422117', '0', '2021-10-31', '25000000', '10731000', '2021-10-29 01:20:35', '2021-10-29 01:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `url`, `actionType`, `created_at`, `updated_at`) VALUES
(1, '1', '/admin/create', 'ایجاد', NULL, NULL),
(2, '2', 'افزودن دستهدسته تست', 'ایجاد', '2021-03-17 03:59:45', '2021-03-17 03:59:45'),
(3, '2', 'افزودن دسته تست', 'ایجاد', '2021-03-17 04:00:52', '2021-03-17 04:00:52'),
(4, '2', 'فعال کردن وضعیت دسته ', 'فعال', '2021-03-17 04:02:07', '2021-03-17 04:02:07'),
(5, '2', 'غیرفعال کردن وضعیت دسته ', 'غیرفعال', '2021-03-17 04:02:20', '2021-03-17 04:02:20'),
(6, '2', 'حذف کردن دسته ', 'حذف', '2021-03-17 04:02:28', '2021-03-17 04:02:28'),
(7, '2', 'بازیابی دسته دسته تست', 'بازیابی', '2021-03-17 04:05:20', '2021-03-17 04:05:20'),
(8, '2', 'غیرفعال کردن وضعیت دسته کودک نوکیا', 'غیرفعال', '2021-03-17 04:10:33', '2021-03-17 04:10:33'),
(9, '2', 'فعال کردن وضعیت دسته کودک نوکیا', 'فعال', '2021-03-17 04:10:35', '2021-03-17 04:10:35'),
(10, '2', 'حذف کردن دسته کودک نوکیا', 'حذف', '2021-03-17 04:10:45', '2021-03-17 04:10:45'),
(11, '2', 'بازیابی دسته کودک نوکیا', 'بازیابی', '2021-03-17 04:10:48', '2021-03-17 04:10:48'),
(12, '2', 'آپدیت دسته کودک نوکیا2', 'آپدیت', '2021-03-17 04:10:58', '2021-03-17 04:10:58'),
(13, '2', 'افزودن دسته کودک قفثفث', 'ایجاد', '2021-03-17 04:11:10', '2021-03-17 04:11:10'),
(14, '2', 'حذف کردن دسته کودک قفثفث', 'حذف', '2021-03-17 04:11:19', '2021-03-17 04:11:19'),
(15, '2', 'حذف کردن دسته-', 'حذف', '2021-03-17 04:15:19', '2021-03-17 04:15:19'),
(16, '2', 'فعال کردن وضعیت زیر دسته-rtgrgt', 'فعال', '2021-03-17 04:15:21', '2021-03-17 04:15:21'),
(17, '2', 'غیرفعال کردن وضعیت زیر دسته-teter', 'غیرفعال', '2021-03-17 04:15:22', '2021-03-17 04:15:22'),
(18, '2', 'غیرفعال کردن وضعیت دسته کودک-نوکیا2', 'غیرفعال', '2021-03-17 04:15:28', '2021-03-17 04:15:28'),
(19, '2', 'حذف کردن زیر دسته-teter', 'حذف', '2021-03-17 04:16:05', '2021-03-17 04:16:05'),
(20, '2', 'آپدیت زیردسته-تست', 'آپدیت', '2021-03-17 04:16:09', '2021-03-17 04:16:09'),
(21, '2', 'حذف کردن دسته-', 'حذف', '2021-03-19 09:48:49', '2021-03-19 09:48:49'),
(22, '2', 'حذف کردن زیر دسته-تست', 'حذف', '2021-03-19 09:49:07', '2021-03-19 09:49:07'),
(23, '2', 'حذف کردن زیر دسته-vvddsv', 'حذف', '2021-03-19 09:49:09', '2021-03-19 09:49:09'),
(24, '2', 'حذف کردن زیر دسته-dsds', 'حذف', '2021-03-19 09:49:10', '2021-03-19 09:49:10'),
(25, '2', 'افزودن دسته کودک-سامسونگ', 'ایجاد', '2021-03-19 10:33:46', '2021-03-19 10:33:46'),
(26, '2', 'غیرفعال کردن وضعیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'غیرفعال', '2021-03-19 10:37:18', '2021-03-19 10:37:18'),
(27, '2', 'فعال کردن وضعیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'فعال', '2021-03-19 10:37:50', '2021-03-19 10:37:50'),
(28, '2', 'غیرفعال کردن وضعیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'غیرفعال', '2021-03-19 10:37:51', '2021-03-19 10:37:51'),
(29, '2', 'حذف کردن محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'حذف', '2021-03-19 10:38:03', '2021-03-19 10:38:03'),
(30, '2', 'افزودن دسته کودک-شیائومی', 'ایجاد', '2021-03-20 05:30:58', '2021-03-20 05:30:58'),
(31, '4', 'افزودن محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'ایجاد', '2021-03-22 13:13:41', '2021-03-22 13:13:41'),
(32, '4', 'غیرفعال کردن وضعیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'غیرفعال', '2021-03-22 13:19:08', '2021-03-22 13:19:08'),
(33, '4', 'فعال کردن وضعیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'فعال', '2021-03-22 13:19:09', '2021-03-22 13:19:09'),
(34, '4', 'حذف کردن محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'حذف', '2021-03-22 13:19:12', '2021-03-22 13:19:12'),
(35, '4', 'آپدیت محصول-هواوی12', 'آپدیت', '2021-03-22 13:30:47', '2021-03-22 13:30:47'),
(36, '4', 'آپدیت محصول-هواوی واولت', 'آپدیت', '2021-03-22 13:31:44', '2021-03-22 13:31:44'),
(37, '4', 'آپدیت محصول-هواوی واولت', 'آپدیت', '2021-03-22 13:32:31', '2021-03-22 13:32:31'),
(38, '4', 'آپدیت محصول-هواوی واولت', 'آپدیت', '2021-03-22 14:15:35', '2021-03-22 14:15:35'),
(39, '4', 'افزودن دسته کودک-شارژر تبلت و موبایل', 'ایجاد', '2021-03-22 14:20:22', '2021-03-22 14:20:22'),
(40, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-22 14:22:51', '2021-03-22 14:22:51'),
(41, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-22 14:24:27', '2021-03-22 14:24:27'),
(42, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-22 14:24:43', '2021-03-22 14:24:43'),
(43, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-22 14:24:55', '2021-03-22 14:24:55'),
(44, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-22 14:26:06', '2021-03-22 14:26:06'),
(45, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-22 14:27:39', '2021-03-22 14:27:39'),
(46, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-22 14:28:02', '2021-03-22 14:28:02'),
(47, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-22 14:28:24', '2021-03-22 14:28:24'),
(48, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-22 14:28:52', '2021-03-22 14:28:52'),
(49, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-22 14:29:07', '2021-03-22 14:29:07'),
(50, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-22 14:29:25', '2021-03-22 14:29:25'),
(51, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-22 14:29:35', '2021-03-22 14:29:35'),
(52, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-22 14:30:54', '2021-03-22 14:30:54'),
(53, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-22 14:38:30', '2021-03-22 14:38:30'),
(54, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-22 14:42:56', '2021-03-22 14:42:56'),
(55, '4', 'فعال کردن وضعیت محصول-شارژر دیواری هوآوی مدل HW-059', 'فعال', '2021-03-22 14:43:03', '2021-03-22 14:43:03'),
(56, '4', 'فعال کردن وضعیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'فعال', '2021-03-22 14:43:04', '2021-03-22 14:43:04'),
(57, '4', 'فعال کردن وضعیت محصول-شارژر دیواری هوآوی مدل HW-059', 'فعال', '2021-03-22 14:43:07', '2021-03-22 14:43:07'),
(58, '4', 'فعال کردن وضعیت محصول-شارژر دیواری هوآوی مدل HW-059', 'فعال', '2021-03-22 14:43:45', '2021-03-22 14:43:45'),
(59, '4', 'فعال کردن وضعیت محصول-شارژر دیواری هوآوی مدل HW-059', 'فعال', '2021-03-22 14:44:04', '2021-03-22 14:44:04'),
(60, '4', 'غیرفعال کردن وضعیت محصول-شارژر دیواری هوآوی مدل HW-059', 'غیرفعال', '2021-03-22 14:44:50', '2021-03-22 14:44:50'),
(61, '4', 'فعال کردن وضعیت محصول-شارژر دیواری هوآوی مدل HW-059', 'فعال', '2021-03-22 14:44:51', '2021-03-22 14:44:51'),
(62, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-22 14:45:05', '2021-03-22 14:45:05'),
(63, '4', 'افزودن محصول-کابل تبدیل USB به لایتنینگ آیبولی مدل S.65 طول 1 متر', 'ایجاد', '2021-03-23 04:24:37', '2021-03-23 04:24:37'),
(64, '4', 'افزودن محصول-کابل تبدیل USB به لایتنینگ آیبولی مدل S.65 طول 1 متر2', 'ایجاد', '2021-03-23 04:28:31', '2021-03-23 04:28:31'),
(65, '4', 'افزودن محصول-کابل تبدیل USB به microUSB بیبوشی مدل A02 طول 1 متر', 'ایجاد', '2021-03-23 04:35:01', '2021-03-23 04:35:01'),
(66, '4', 'افزودن محصول-کابل تبدیل USB به microUSB شیائومی مدل NOTE طول 1.2 متر', 'ایجاد', '2021-03-23 04:38:38', '2021-03-23 04:38:38'),
(67, '4', 'بازیابی محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'بازیابی', '2021-03-23 05:07:40', '2021-03-23 05:07:40'),
(68, '4', 'حذف کردن محصول-کابل تبدیل USB به microUSB شیائومی مدل NOTE طول 1.2 متر', 'حذف', '2021-03-23 05:07:46', '2021-03-23 05:07:46'),
(69, '4', 'حذف کردن محصول-کابل تبدیل USB به microUSB بیبوشی مدل A02 طول 1 متر', 'حذف', '2021-03-23 05:07:47', '2021-03-23 05:07:47'),
(70, '4', 'حذف کردن محصول-کابل تبدیل USB به لایتنینگ آیبولی مدل S.65 طول 1 متر2', 'حذف', '2021-03-23 05:07:47', '2021-03-23 05:07:47'),
(71, '4', 'حذف کردن محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'حذف', '2021-03-23 05:07:51', '2021-03-23 05:07:51'),
(72, '4', 'بازیابی محصول-کابل تبدیل USB به microUSB شیائومی مدل NOTE طول 1.2 متر', 'بازیابی', '2021-03-23 05:07:58', '2021-03-23 05:07:58'),
(73, '4', 'بازیابی محصول-کابل تبدیل USB به microUSB بیبوشی مدل A02 طول 1 متر', 'بازیابی', '2021-03-23 05:07:58', '2021-03-23 05:07:58'),
(74, '4', 'حذف کردن محصول-کابل تبدیل USB به microUSB شیائومی مدل NOTE طول 1.2 متر', 'حذف', '2021-03-23 05:08:04', '2021-03-23 05:08:04'),
(75, '4', 'افزودن برند-', 'ایجاد', '2021-03-23 07:16:25', '2021-03-23 07:16:25'),
(76, '4', 'افزودن برند-', 'ایجاد', '2021-03-23 07:21:04', '2021-03-23 07:21:04'),
(77, '4', 'آپدیت برند-', 'آپدیت', '2021-03-23 07:55:48', '2021-03-23 07:55:48'),
(78, '4', 'غیرفعال کردن وضعیت برند-', 'غیرفعال', '2021-03-23 07:55:52', '2021-03-23 07:55:52'),
(79, '4', 'فعال کردن وضعیت برند-', 'فعال', '2021-03-23 07:55:53', '2021-03-23 07:55:53'),
(80, '4', 'آپدیت برند-', 'آپدیت', '2021-03-23 07:56:05', '2021-03-23 07:56:05'),
(81, '4', 'افزودن برند-', 'ایجاد', '2021-03-23 07:59:54', '2021-03-23 07:59:54'),
(82, '4', 'حذف کردن برند-', 'حذف', '2021-03-23 07:59:59', '2021-03-23 07:59:59'),
(83, '4', 'بازیابی برند-', 'بازیابی', '2021-03-23 08:03:35', '2021-03-23 08:03:35'),
(84, '4', 'حذف کردن برند-', 'حذف', '2021-03-23 08:03:40', '2021-03-23 08:03:40'),
(85, '4', 'افزودن رنگ-مشکی', 'ایجاد', '2021-03-23 10:04:12', '2021-03-23 10:04:12'),
(86, '4', 'غیرفعال کردن وضعیت رنگ-مشکی', 'غیرفعال', '2021-03-23 10:04:19', '2021-03-23 10:04:19'),
(87, '4', 'فعال کردن وضعیت رنگ-مشکی', 'فعال', '2021-03-23 10:04:22', '2021-03-23 10:04:22'),
(88, '4', 'حذف کردن رنگ-مشکی', 'حذف', '2021-03-23 10:04:28', '2021-03-23 10:04:28'),
(89, '4', 'افزودن رنگ-سفید', 'ایجاد', '2021-03-23 10:04:59', '2021-03-23 10:04:59'),
(90, '4', 'افزودن رنگ-آبی', 'ایجاد', '2021-03-23 10:06:06', '2021-03-23 10:06:06'),
(91, '4', 'آپدیت رنگ-صورتی', 'آپدیت', '2021-03-23 10:09:25', '2021-03-23 10:09:25'),
(92, '4', 'آپدیت رنگ-صورتی', 'آپدیت', '2021-03-23 10:09:58', '2021-03-23 10:09:58'),
(93, '4', 'آپدیت رنگ-صورتی', 'آپدیت', '2021-03-23 10:11:23', '2021-03-23 10:11:23'),
(94, '4', 'افزودن رنگ-قهوه ای', 'ایجاد', '2021-03-23 10:11:55', '2021-03-23 10:11:55'),
(95, '4', 'آپدیت رنگ-صورتی', 'آپدیت', '2021-03-23 11:01:36', '2021-03-23 11:01:36'),
(96, '4', 'آپدیت رنگ-ابی', 'آپدیت', '2021-03-23 11:02:41', '2021-03-23 11:02:41'),
(97, '4', 'غیرفعال کردن وضعیت رنگ-', 'غیرفعال', '2021-03-23 11:02:45', '2021-03-23 11:02:45'),
(98, '4', 'فعال کردن وضعیت رنگ-', 'فعال', '2021-03-23 11:02:47', '2021-03-23 11:02:47'),
(99, '4', 'حذف کردن رنگ-', 'حذف', '2021-03-23 11:03:04', '2021-03-23 11:03:04'),
(100, '4', 'حذف کردن رنگ-', 'حذف', '2021-03-23 11:03:05', '2021-03-23 11:03:05'),
(101, '4', 'بازیابی رنگ-', 'بازیابی', '2021-03-23 11:06:21', '2021-03-23 11:06:21'),
(102, '4', 'بازیابی رنگ-', 'بازیابی', '2021-03-23 11:06:24', '2021-03-23 11:06:24'),
(103, '4', 'افزودن رنگ-صورتی', 'ایجاد', '2021-03-23 11:09:08', '2021-03-23 11:09:08'),
(104, '4', 'آپدیت رنگ-صورتی پر رنگ', 'آپدیت', '2021-03-23 11:09:42', '2021-03-23 11:09:42'),
(105, '4', 'آپدیت رنگ-زرد', 'آپدیت', '2021-03-23 11:09:57', '2021-03-23 11:09:57'),
(106, '4', 'افزودن محصول-تست', 'ایجاد', '2021-03-23 11:16:09', '2021-03-23 11:16:09'),
(107, '4', 'آپدیت محصول-تست', 'آپدیت', '2021-03-23 11:17:46', '2021-03-23 11:17:46'),
(108, '4', 'افزودن تصویر محصول-2', 'ایجاد', '2021-03-23 14:34:38', '2021-03-23 14:34:38'),
(109, '4', 'افزودن تصویر محصول-3', 'ایجاد', '2021-03-23 14:36:26', '2021-03-23 14:36:26'),
(110, '4', 'افزودن تصویر محصول-2', 'ایجاد', '2021-03-23 14:36:44', '2021-03-23 14:36:44'),
(111, '4', 'حذف کردن تصویر محصول-', 'حذف', '2021-03-23 14:37:11', '2021-03-23 14:37:11'),
(112, '4', 'آپدیت تصویر محصول-2', 'آپدیت', '2021-03-23 14:40:21', '2021-03-23 14:40:21'),
(113, '4', 'افزودن تصویر محصول-2', 'ایجاد', '2021-03-24 08:49:27', '2021-03-24 08:49:27'),
(114, '4', 'افزودن تصویر محصول-', 'ایجاد', '2021-03-24 09:21:01', '2021-03-24 09:21:01'),
(115, '4', 'افزودن تصویر محصول-', 'ایجاد', '2021-03-24 09:43:54', '2021-03-24 09:43:54'),
(116, '4', 'افزودن تصویر محصول-', 'ایجاد', '2021-03-24 09:49:26', '2021-03-24 09:49:26'),
(117, '4', 'افزودن تصویر محصول-', 'ایجاد', '2021-03-24 10:26:49', '2021-03-24 10:26:49'),
(118, '4', 'افزودن تصویر محصول-', 'ایجاد', '2021-03-24 10:27:31', '2021-03-24 10:27:31'),
(119, '4', 'افزودن تصویر محصول-', 'ایجاد', '2021-03-24 10:28:06', '2021-03-24 10:28:06'),
(120, '4', 'افزودن تصویر محصول-', 'ایجاد', '2021-03-24 10:28:43', '2021-03-24 10:28:43'),
(121, '4', 'افزودن تصویر محصول-8', 'ایجاد', '2021-03-24 11:11:27', '2021-03-24 11:11:27'),
(122, '4', 'حذف کردن تصویر محصول-', 'حذف', '2021-03-24 11:11:49', '2021-03-24 11:11:49'),
(123, '4', 'حذف کردن محصول-تست', 'حذف', '2021-03-24 11:15:07', '2021-03-24 11:15:07'),
(124, '4', 'افزودن تصویر محصول-3', 'ایجاد', '2021-03-24 11:15:21', '2021-03-24 11:15:21'),
(125, '4', 'افزودن تصویر محصول-3', 'ایجاد', '2021-03-24 11:15:40', '2021-03-24 11:15:40'),
(126, '4', 'افزودن تصویر محصول-3', 'ایجاد', '2021-03-24 11:15:49', '2021-03-24 11:15:49'),
(127, '4', 'افزودن تصویر محصول-2', 'ایجاد', '2021-03-24 11:16:03', '2021-03-24 11:16:03'),
(128, '4', 'افزودن گارانتی-گارانتی ۱۸ ماهه دیجی کالا', 'ایجاد', '2021-03-25 17:03:20', '2021-03-25 17:03:20'),
(129, '4', 'حذف کردن گارانتی-گارانتی ۱۸ ماهه دیجی کالا', 'حذف', '2021-03-25 17:03:23', '2021-03-25 17:03:23'),
(130, '4', 'افزودن گارانتی-مرکز تامین کالای دیجیتال ایران', 'ایجاد', '2021-03-25 17:03:42', '2021-03-25 17:03:42'),
(131, '4', 'افزودن گارانتی-راتین رایا', 'ایجاد', '2021-03-25 17:03:51', '2021-03-25 17:03:51'),
(132, '4', 'بازیابی گارانتی-گارانتی ۱۸ ماهه دیجی کالا', 'بازیابی', '2021-03-25 17:20:26', '2021-03-25 17:20:26'),
(133, '4', 'حذف کردن گارانتی-', 'حذف', '2021-03-25 17:20:34', '2021-03-25 17:20:34'),
(134, '4', 'آپدیت گارانتی-راتین رایا2', 'آپدیت', '2021-03-25 17:22:39', '2021-03-25 17:22:39'),
(135, '4', 'افزودن گارانتی-آریان پاسارگاد لیان', 'ایجاد', '2021-03-25 17:23:00', '2021-03-25 17:23:00'),
(136, '4', 'غیرفعال کردن وضعیت گارانتی-آریان پاسارگاد لیان', 'غیرفعال', '2021-03-25 17:23:01', '2021-03-25 17:23:01'),
(137, '4', 'فعال کردن وضعیت گارانتی-آریان پاسارگاد لیان', 'فعال', '2021-03-25 17:23:03', '2021-03-25 17:23:03'),
(138, '4', 'غیرفعال کردن وضعیت گارانتی-آریان پاسارگاد لیان', 'غیرفعال', '2021-03-25 17:23:04', '2021-03-25 17:23:04'),
(139, '4', 'فعال کردن وضعیت گارانتی-آریان پاسارگاد لیان', 'فعال', '2021-03-25 17:23:04', '2021-03-25 17:23:04'),
(140, '4', 'افزودن گارانتی- آواژنگ', 'ایجاد', '2021-03-25 17:23:46', '2021-03-25 17:23:46'),
(141, '4', 'فعال کردن وضعیت گارانتی- آواژنگ', 'فعال', '2021-03-25 17:23:49', '2021-03-25 17:23:49'),
(142, '4', 'غیرفعال کردن وضعیت تنوع قیمت محصول-', 'غیرفعال', '2021-03-26 04:19:46', '2021-03-26 04:19:46'),
(143, '4', 'فعال کردن وضعیت تنوع قیمت محصول-', 'فعال', '2021-03-26 04:19:47', '2021-03-26 04:19:47'),
(144, '4', 'افزودن تنوع قیمت محصول-', 'ایجاد', '2021-03-26 05:07:15', '2021-03-26 05:07:15'),
(145, '4', 'افزودن تنوع قیمت محصول-', 'ایجاد', '2021-03-26 05:08:28', '2021-03-26 05:08:28'),
(146, '4', 'آپدیت تنوع محصول-2', 'آپدیت', '2021-03-26 05:35:46', '2021-03-26 05:35:46'),
(147, '4', 'غیرفعال کردن وضعیت تنوع قیمت محصول-', 'غیرفعال', '2021-03-26 05:36:11', '2021-03-26 05:36:11'),
(148, '4', 'غیرفعال کردن وضعیت تنوع قیمت محصول-', 'غیرفعال', '2021-03-26 05:36:12', '2021-03-26 05:36:12'),
(149, '4', 'فعال کردن وضعیت تنوع قیمت محصول-', 'فعال', '2021-03-26 05:36:13', '2021-03-26 05:36:13'),
(150, '4', 'فعال کردن وضعیت تنوع قیمت محصول-', 'فعال', '2021-03-26 05:36:18', '2021-03-26 05:36:18'),
(151, '4', 'حذف کردن تنوع قیمت محصول-', 'حذف', '2021-03-26 05:36:19', '2021-03-26 05:36:19'),
(152, '4', 'بازیابی تنوع محصول-2', 'بازیابی', '2021-03-26 05:40:05', '2021-03-26 05:40:05'),
(153, '4', 'حذف کردن تنوع قیمت محصول-', 'حذف', '2021-03-26 05:40:11', '2021-03-26 05:40:11'),
(154, '4', 'حذف کردن تنوع قیمت محصول-', 'حذف', '2021-03-26 05:40:11', '2021-03-26 05:40:11'),
(155, '4', 'بازیابی تنوع محصول-2', 'بازیابی', '2021-03-26 05:40:14', '2021-03-26 05:40:14'),
(156, '4', 'بازیابی تنوع محصول-2', 'بازیابی', '2021-03-26 05:40:14', '2021-03-26 05:40:14'),
(157, '4', 'حذف کردن محصول-کابل تبدیل USB به microUSB بیبوشی مدل A02 طول 1 متر', 'حذف', '2021-03-26 05:41:05', '2021-03-26 05:41:05'),
(158, '4', 'غیرفعال کردن وضعیت تنوع قیمت محصول-', 'غیرفعال', '2021-03-26 06:34:20', '2021-03-26 06:34:20'),
(159, '4', 'فعال کردن وضعیت تنوع قیمت محصول-', 'فعال', '2021-03-26 06:34:21', '2021-03-26 06:34:21'),
(160, '4', 'حذف کردن تنوع قیمت محصول-', 'حذف', '2021-03-26 06:34:24', '2021-03-26 06:34:24'),
(161, '4', 'بازیابی تنوع محصول-2', 'بازیابی', '2021-03-26 06:34:52', '2021-03-26 06:34:52'),
(162, '4', 'افزودن تنوع قیمت محصول-', 'ایجاد', '2021-03-26 06:37:29', '2021-03-26 06:37:29'),
(163, '4', 'افزودن تنوع قیمت محصول-', 'ایجاد', '2021-03-26 06:38:36', '2021-03-26 06:38:36'),
(164, '4', 'حذف کردن تنوع قیمت محصول-2', 'حذف', '2021-03-26 06:38:56', '2021-03-26 06:38:56'),
(165, '4', 'بازیابی تنوع محصول-2', 'بازیابی', '2021-03-26 06:39:02', '2021-03-26 06:39:02'),
(166, '4', 'آپدیت تنوع محصول-2', 'آپدیت', '2021-03-26 06:39:15', '2021-03-26 06:39:15'),
(167, '4', 'افزودن تنوع قیمت محصول-', 'ایجاد', '2021-03-26 06:39:56', '2021-03-26 06:39:56'),
(168, '4', 'افزودن مشخصات کالا-مشخصات کلی', 'ایجاد', '2021-03-26 09:11:37', '2021-03-26 09:11:37'),
(169, '4', 'افزودن مشخصات کالا-پردازنده', 'ایجاد', '2021-03-26 09:13:37', '2021-03-26 09:13:37'),
(170, '4', 'افزودن مشخصات کالا-حافظه', 'ایجاد', '2021-03-26 09:13:52', '2021-03-26 09:13:52'),
(171, '4', 'افزودن مشخصات کالا-ابعاد', 'ایجاد', '2021-03-26 09:14:13', '2021-03-26 09:14:13'),
(172, '4', 'افزودن مشخصات کالا-توضیحات سیم کارت', 'ایجاد', '2021-03-26 09:14:33', '2021-03-26 09:14:33'),
(173, '4', 'حذف کردن مشخصات کالا-توضیحات سیم کارت', 'حذف', '2021-03-26 11:22:53', '2021-03-26 11:22:53'),
(174, '4', 'حذف کردن مشخصات کالا-ابعاد', 'حذف', '2021-03-26 11:22:59', '2021-03-26 11:22:59'),
(175, '4', 'غیرفعال کردن وضعیت مشخصات کالا-حافظه', 'غیرفعال', '2021-03-26 11:23:00', '2021-03-26 11:23:00'),
(176, '4', 'فعال کردن وضعیت مشخصات کالا-حافظه', 'فعال', '2021-03-26 11:23:02', '2021-03-26 11:23:02'),
(177, '4', 'غیرفعال کردن وضعیت مشخصات کالا-حافظه', 'غیرفعال', '2021-03-26 11:23:05', '2021-03-26 11:23:05'),
(178, '4', 'فعال کردن وضعیت مشخصات کالا-حافظه', 'فعال', '2021-03-26 11:23:07', '2021-03-26 11:23:07'),
(179, '4', 'آپدیت مشخصات کالا-حافظه2', 'آپدیت', '2021-03-26 11:27:29', '2021-03-26 11:27:29'),
(180, '4', 'آپدیت مشخصات کالا-حافظه', 'آپدیت', '2021-03-26 11:27:43', '2021-03-26 11:27:43'),
(181, '4', 'بازیابی مشخصات کالا-توضیحات سیم کارت', 'بازیابی', '2021-03-26 11:31:40', '2021-03-26 11:31:40'),
(182, '4', 'بازیابی مشخصات کالا-ابعاد', 'بازیابی', '2021-03-26 11:31:42', '2021-03-26 11:31:42'),
(183, '4', 'حذف کردن مشخصات کالا-توضیحات سیم کارت', 'حذف', '2021-03-26 11:31:50', '2021-03-26 11:31:50'),
(184, '4', 'حذف کردن مشخصات کالا-ابعاد', 'حذف', '2021-03-26 11:31:51', '2021-03-26 11:31:51'),
(185, '4', 'آپدیت محصول-کابل تبدیل USB به لایتنینگ آیبولی مدل S.65 طول 1 متر', 'آپدیت', '2021-03-26 11:43:56', '2021-03-26 11:43:56'),
(186, '4', 'آپدیت محصول-کابل تبدیل USB به لایتنینگ آیبولی مدل S.65 طول 1 متر', 'آپدیت', '2021-03-26 11:44:10', '2021-03-26 11:44:10'),
(187, '4', 'افزودن مشخصات کالا-وزن', 'ایجاد', '2021-03-26 12:12:25', '2021-03-26 12:12:25'),
(188, '4', 'افزودن مشخصات کالا-مشخصات کلی', 'ایجاد', '2021-03-26 12:12:56', '2021-03-26 12:12:56'),
(189, '4', 'افزودن مقدار مشخصات کالا-163.7x75.3x8.9 میلی‌متر', 'ایجاد', '2021-03-26 13:45:50', '2021-03-26 13:45:50'),
(190, '4', 'افزودن مقدار مشخصات کالا-192 گرم', 'ایجاد', '2021-03-26 13:46:36', '2021-03-26 13:46:36'),
(191, '4', 'افزودن مشخصات کالا-توضیحات سیم کارت', 'ایجاد', '2021-03-26 13:47:30', '2021-03-26 13:47:30'),
(192, '4', 'افزودن مشخصات کالا-تراشه', 'ایجاد', '2021-03-26 13:47:52', '2021-03-26 13:47:52'),
(193, '4', 'افزودن مشخصات کالا-پردازنده‌ی مرکزی', 'ایجاد', '2021-03-26 13:48:12', '2021-03-26 13:48:12'),
(194, '4', 'افزودن مقدار مشخصات کالا-سایز نانو (8.8 × 12.3 میلی‌متر)', 'ایجاد', '2021-03-26 13:48:41', '2021-03-26 13:48:41'),
(195, '4', 'افزودن مقدار مشخصات کالا-Exynos 850 (8nm) Chipest', 'ایجاد', '2021-03-26 13:54:20', '2021-03-26 13:54:20'),
(196, '4', 'افزودن مقدار مشخصات کالا-100 گرم', 'ایجاد', '2021-03-26 13:54:35', '2021-03-26 13:54:35'),
(197, '4', 'غیرفعال کردن وضعیت مقدار مشخصات کالا-100 گرم', 'غیرفعال', '2021-03-26 14:15:16', '2021-03-26 14:15:16'),
(198, '4', 'فعال کردن وضعیت مقدار مشخصات کالا-', 'فعال', '2021-03-26 14:15:23', '2021-03-26 14:15:23'),
(199, '4', 'غیرفعال کردن وضعیت مقدار مشخصات کالا-Exynos 850 (8nm) Chipest', 'غیرفعال', '2021-03-26 14:15:25', '2021-03-26 14:15:25'),
(200, '4', 'فعال کردن وضعیت مقدار مشخصات کالا-', 'فعال', '2021-03-26 14:15:26', '2021-03-26 14:15:26'),
(201, '4', 'حذف کردن مقدار مشخصات کالا-Exynos 850 (8nm) Chipest', 'حذف', '2021-03-26 14:15:27', '2021-03-26 14:15:27'),
(202, '4', 'آپدیت مقدار مشخصه-', 'آپدیت', '2021-03-26 14:18:45', '2021-03-26 14:18:45'),
(203, '4', 'بازیابی مقدار مشخصه کالا-', 'بازیابی', '2021-03-26 14:24:05', '2021-03-26 14:24:05'),
(204, '4', 'حذف کردن مقدار مشخصات کالا-200 گرم', 'حذف', '2021-03-26 14:24:09', '2021-03-26 14:24:09'),
(205, '4', 'حذف کردن مقدار مشخصات کالا-Exynos 850 (8nm) Chipest', 'حذف', '2021-03-26 14:24:10', '2021-03-26 14:24:10'),
(206, '4', 'حذف کردن مقدار مشخصات کالا-سایز نانو (8.8 × 12.3 میلی‌متر)', 'حذف', '2021-03-26 14:24:11', '2021-03-26 14:24:11'),
(207, '4', 'بازیابی مقدار مشخصه کالا-', 'بازیابی', '2021-03-26 14:24:14', '2021-03-26 14:24:14'),
(208, '4', 'بازیابی مقدار مشخصه کالا-', 'بازیابی', '2021-03-26 14:24:14', '2021-03-26 14:24:14'),
(209, '4', 'بازیابی مقدار مشخصه کالا-', 'بازیابی', '2021-03-26 14:24:15', '2021-03-26 14:24:15'),
(210, '4', 'غیرفعال کردن وضعیت مقدار مشخصه کالا-', 'غیرفعال', '2021-03-26 15:26:02', '2021-03-26 15:26:02'),
(211, '4', 'فعال کردن وضعیت مقدار مشخصه کالا-', 'فعال', '2021-03-26 15:26:02', '2021-03-26 15:26:02'),
(212, '4', 'غیرفعال کردن وضعیت مقدار مشخصه کالا-', 'غیرفعال', '2021-03-26 15:26:05', '2021-03-26 15:26:05'),
(213, '4', 'فعال کردن وضعیت مقدار مشخصه کالا-', 'فعال', '2021-03-26 15:26:06', '2021-03-26 15:26:06'),
(214, '4', 'حذف کردن مقدار مشخصه کالا-', 'حذف', '2021-03-26 15:26:08', '2021-03-26 15:26:08'),
(215, '4', 'بازیابی مقدار مشخصه کالا-', 'بازیابی', '2021-03-26 15:26:20', '2021-03-26 15:26:20'),
(216, '4', 'افزودن مقدار مشخصه کالا-Octa-Core Cortex-A55 CPU', 'ایجاد', '2021-03-26 15:26:39', '2021-03-26 15:26:39'),
(217, '4', 'افزودن مشخصات کالا-طول', 'ایجاد', '2021-03-26 15:28:20', '2021-03-26 15:28:20'),
(218, '4', 'افزودن مشخصات کالا-سرعت انتقال', 'ایجاد', '2021-03-26 15:28:34', '2021-03-26 15:28:34'),
(219, '4', 'افزودن مشخصات کالا-مشخصات کلی', 'ایجاد', '2021-03-26 15:29:06', '2021-03-26 15:29:06'),
(220, '4', 'آپدیت مشخصات کالا-طول', 'آپدیت', '2021-03-26 15:29:20', '2021-03-26 15:29:20'),
(221, '4', 'آپدیت مشخصات کالا-طول', 'آپدیت', '2021-03-26 15:30:07', '2021-03-26 15:30:07'),
(222, '4', 'آپدیت مشخصات کالا-سرعت انتقال', 'آپدیت', '2021-03-26 15:30:23', '2021-03-26 15:30:23'),
(223, '4', 'افزودن مقدار مشخصه کالا-2 متر', 'ایجاد', '2021-03-26 15:37:43', '2021-03-26 15:37:43'),
(224, '4', 'آپدیت محصول-کابل تبدیل USB به لایتنینگ آیبولی مدل S.65 طول 1 متر', 'آپدیت', '2021-03-27 07:32:51', '2021-03-27 07:32:51'),
(225, '4', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-03-27 07:33:00', '2021-03-27 07:33:00'),
(226, '4', 'بازیابی دسته-reer', 'بازیابی', '2021-03-27 08:11:52', '2021-03-27 08:11:52'),
(227, '4', 'بازیابی دسته-تست', 'بازیابی', '2021-03-27 08:11:52', '2021-03-27 08:11:52'),
(228, '4', 'بازیابی دسته-دسته تست', 'بازیابی', '2021-03-27 08:11:53', '2021-03-27 08:11:53'),
(229, '4', 'آپدیت دسته-reer', 'آپدیت', '2021-03-27 08:12:00', '2021-03-27 08:12:00'),
(230, '4', 'آپدیت دسته-تست', 'آپدیت', '2021-03-27 08:12:06', '2021-03-27 08:12:06'),
(231, '4', 'حذف کردن دسته-', 'حذف', '2021-03-27 08:12:10', '2021-03-27 08:12:10'),
(232, '4', 'حذف کردن دسته-', 'حذف', '2021-03-27 08:12:11', '2021-03-27 08:12:11'),
(233, '4', 'حذف کردن دسته-', 'حذف', '2021-03-27 08:12:12', '2021-03-27 08:12:12'),
(234, '4', 'آپدیت دسته-کالای دیجیتال', 'آپدیت', '2021-03-27 10:49:10', '2021-03-27 10:49:10'),
(235, '4', 'آپدیت دسته-کالای دیجیتال', 'آپدیت', '2021-03-27 10:49:46', '2021-03-27 10:49:46'),
(236, '4', 'غیرفعال کردن وضعیت دسته کودک-شارژر تبلت و موبایل', 'غیرفعال', '2021-03-31 12:04:02', '2021-03-31 12:04:02'),
(237, '4', 'فعال کردن وضعیت دسته کودک-شارژر تبلت و موبایل', 'فعال', '2021-03-31 12:04:04', '2021-03-31 12:04:04'),
(238, '4', 'غیرفعال کردن وضعیت زیر دسته-موتور سیکلت', 'غیرفعال', '2021-03-31 12:04:19', '2021-03-31 12:04:19'),
(239, '4', 'فعال کردن وضعیت زیر دسته-موتور سیکلت', 'فعال', '2021-03-31 12:04:20', '2021-03-31 12:04:20'),
(240, '4', 'فعال کردن وضعیت دسته-', 'فعال', '2021-03-31 12:04:24', '2021-03-31 12:04:24'),
(241, '4', 'غیرفعال کردن وضعیت دسته-', 'غیرفعال', '2021-03-31 12:04:26', '2021-03-31 12:04:26'),
(242, '4', 'غیرفعال کردن وضعیت دسته کودک-شارژر تبلت و موبایل', 'غیرفعال', '2021-03-31 12:04:28', '2021-03-31 12:04:28'),
(243, '4', 'غیرفعال کردن وضعیت دسته-', 'غیرفعال', '2021-03-31 12:04:43', '2021-03-31 12:04:43'),
(244, '4', 'فعال کردن وضعیت دسته-کالای دیجیتال', 'فعال', '2021-03-31 12:05:38', '2021-03-31 12:05:38'),
(245, '4', 'فعال کردن وضعیت دسته-خودرو، ابزار و تجهیزات صنعتی', 'فعال', '2021-03-31 12:05:39', '2021-03-31 12:05:39'),
(246, '4', 'غیرفعال کردن وضعیت دسته-کالای دیجیتال', 'غیرفعال', '2021-03-31 12:05:48', '2021-03-31 12:05:48'),
(247, '4', 'آپدیت دسته کودک-شارژر تبلت و موبایل', 'آپدیت', '2021-03-31 12:07:35', '2021-03-31 12:07:35'),
(248, '4', 'آپدیت دسته کودک-هواوی123', 'آپدیت', '2021-03-31 12:08:20', '2021-03-31 12:08:20'),
(249, '4', 'فعال کردن وضعیت دسته کودک-هواوی123', 'فعال', '2021-03-31 12:08:30', '2021-03-31 12:08:30'),
(250, '4', 'غیرفعال کردن وضعیت دسته کودک-هواوی123', 'غیرفعال', '2021-03-31 12:08:31', '2021-03-31 12:08:31'),
(251, '4', 'افزودن دسته کودک-تست', 'ایجاد', '2021-03-31 12:13:44', '2021-03-31 12:13:44'),
(252, '4', 'افزودن دسته کودک-تست', 'ایجاد', '2021-03-31 12:14:11', '2021-03-31 12:14:11'),
(253, '4', 'افزودن دسته-تست', 'ایجاد', '2021-03-31 12:15:51', '2021-03-31 12:15:51'),
(254, '4', 'غیرفعال کردن وضعیت دسته کودک-تست', 'غیرفعال', '2021-03-31 13:50:30', '2021-03-31 13:50:30'),
(255, '4', 'فعال کردن وضعیت دسته کودک-تست', 'فعال', '2021-03-31 13:50:44', '2021-03-31 13:50:44'),
(256, '4', 'فعال کردن وضعیت دسته-کالای دیجیتال', 'فعال', '2021-03-31 16:52:17', '2021-03-31 16:52:17'),
(257, '4', 'افزودن دسته کودک-تست', 'ایجاد', '2021-04-01 01:59:23', '2021-04-01 01:59:23'),
(258, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-01 02:01:17', '2021-04-01 02:01:17'),
(259, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-01 02:01:52', '2021-04-01 02:01:52'),
(260, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-01 02:10:16', '2021-04-01 02:10:16'),
(261, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-01 02:10:38', '2021-04-01 02:10:38'),
(262, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-01 02:11:35', '2021-04-01 02:11:35'),
(263, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-01 02:15:20', '2021-04-01 02:15:20'),
(264, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-01 02:15:50', '2021-04-01 02:15:50'),
(265, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-01 02:16:38', '2021-04-01 02:16:38'),
(266, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-01 02:17:43', '2021-04-01 02:17:43'),
(267, '4', 'افزودن دسته-', 'ایجاد', '2021-04-01 02:20:37', '2021-04-01 02:20:37'),
(268, '4', 'افزودن دسته-', 'ایجاد', '2021-04-01 02:20:50', '2021-04-01 02:20:50'),
(269, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-01 02:25:46', '2021-04-01 02:25:46'),
(270, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-01 02:26:13', '2021-04-01 02:26:13'),
(271, '4', 'افزودن برند-', 'ایجاد', '2021-04-01 02:30:10', '2021-04-01 02:30:10'),
(272, '4', 'افزودن برند-', 'ایجاد', '2021-04-01 02:30:27', '2021-04-01 02:30:27'),
(273, '4', 'افزودن رنگ-', 'ایجاد', '2021-04-01 02:32:39', '2021-04-01 02:32:39'),
(274, '4', 'افزودن رنگ-', 'ایجاد', '2021-04-01 02:33:08', '2021-04-01 02:33:08'),
(275, '4', 'افزودن تصویر محصول-', 'ایجاد', '2021-04-01 02:35:30', '2021-04-01 02:35:30'),
(276, '4', 'افزودن تصویر محصول-', 'ایجاد', '2021-04-01 02:36:12', '2021-04-01 02:36:12'),
(277, '4', 'افزودن گارانتی-', 'ایجاد', '2021-04-01 02:38:21', '2021-04-01 02:38:21'),
(278, '4', 'افزودن گارانتی-', 'ایجاد', '2021-04-01 02:38:26', '2021-04-01 02:38:26'),
(279, '4', 'افزودن مشخصات کالا-', 'ایجاد', '2021-04-01 02:41:42', '2021-04-01 02:41:42'),
(280, '4', 'افزودن مشخصات کالا-', 'ایجاد', '2021-04-01 02:41:55', '2021-04-01 02:41:55'),
(281, '4', 'افزودن مقدار مشخصات کالا-', 'ایجاد', '2021-04-01 02:43:18', '2021-04-01 02:43:18'),
(282, '4', 'افزودن مقدار مشخصات کالا-', 'ایجاد', '2021-04-01 02:43:31', '2021-04-01 02:43:31'),
(283, '4', 'افزودن مشخصات کالا-', 'ایجاد', '2021-04-01 02:45:01', '2021-04-01 02:45:01'),
(284, '4', 'افزودن مشخصات کالا-', 'ایجاد', '2021-04-01 02:45:08', '2021-04-01 02:45:08'),
(285, '4', 'افزودن مقدار مشخصه کالا-', 'ایجاد', '2021-04-01 02:46:50', '2021-04-01 02:46:50'),
(286, '4', 'افزودن مقدار مشخصه کالا-', 'ایجاد', '2021-04-01 02:47:20', '2021-04-01 02:47:20'),
(287, '4', 'افزودن مقدار مشخصه کالا-', 'ایجاد', '2021-04-01 02:47:52', '2021-04-01 02:47:52'),
(288, '4', 'افزودن تصویر محصول-', 'ایجاد', '2021-04-01 02:49:33', '2021-04-01 02:49:33'),
(289, '4', 'افزودن تصویر محصول-', 'ایجاد', '2021-04-01 02:49:41', '2021-04-01 02:49:41'),
(290, '4', 'آپدیت دسته-تست 23', 'آپدیت', '2021-04-01 05:37:27', '2021-04-01 05:37:27'),
(291, '4', 'آپدیت دسته-تست 23', 'آپدیت', '2021-04-01 05:48:18', '2021-04-01 05:48:18'),
(292, '4', 'غیرفعال کردن وضعیت دسته-تست 23', 'غیرفعال', '2021-04-01 05:48:22', '2021-04-01 05:48:22'),
(293, '4', 'فعال کردن وضعیت دسته-تست 23', 'فعال', '2021-04-01 05:48:25', '2021-04-01 05:48:25'),
(294, '4', 'آپدیت دسته-تست 23', 'آپدیت', '2021-04-01 05:51:37', '2021-04-01 05:51:37'),
(295, '4', 'افزودن تنوع قیمت محصول-', 'ایجاد', '2021-04-01 05:55:39', '2021-04-01 05:55:39'),
(296, '4', 'غیرفعال کردن وضعیت دسته-تست 23', 'غیرفعال', '2021-04-01 06:09:03', '2021-04-01 06:09:03'),
(297, '4', 'آپدیت دسته-تست 23', 'آپدیت', '2021-04-01 06:11:01', '2021-04-01 06:11:01'),
(298, '4', 'آپدیت دسته-تست 23', 'آپدیت', '2021-04-01 08:05:21', '2021-04-01 08:05:21'),
(299, '4', 'افزودن دسته-', 'ایجاد', '2021-04-01 08:07:36', '2021-04-01 08:07:36'),
(300, '4', 'افزودن دسته-', 'ایجاد', '2021-04-01 08:07:44', '2021-04-01 08:07:44'),
(301, '4', 'افزودن دسته-', 'ایجاد', '2021-04-01 08:08:38', '2021-04-01 08:08:38'),
(302, '4', 'افزودن دسته-', 'ایجاد', '2021-04-01 08:13:54', '2021-04-01 08:13:54'),
(303, '4', 'افزودن دسته-', 'ایجاد', '2021-04-01 08:14:05', '2021-04-01 08:14:05'),
(304, '4', 'آپدیت دسته-ffewefwef', 'آپدیت', '2021-04-01 08:27:20', '2021-04-01 08:27:20'),
(305, '4', 'آپدیت دسته-ffewefwef', 'آپدیت', '2021-04-01 08:27:27', '2021-04-01 08:27:27'),
(306, '4', 'حذف کردن دسته-sddssddssd', 'حذف', '2021-04-01 08:30:09', '2021-04-01 08:30:09'),
(307, '4', 'حذف کردن دسته-dsds', 'حذف', '2021-04-01 08:30:10', '2021-04-01 08:30:10'),
(308, '4', 'حذف کردن دسته-dfsfdsfd', 'حذف', '2021-04-01 08:30:12', '2021-04-01 08:30:12'),
(309, '4', 'حذف کردن دسته-324423432', 'حذف', '2021-04-01 08:30:12', '2021-04-01 08:30:12'),
(310, '4', 'حذف کردن دسته-ffewefwef', 'حذف', '2021-04-01 08:30:13', '2021-04-01 08:30:13'),
(311, '4', 'آپدیت دسته-تست 23', 'آپدیت', '2021-04-01 09:31:33', '2021-04-01 09:31:33'),
(312, '4', 'آپدیت دسته-تست 23', 'آپدیت', '2021-04-01 09:31:45', '2021-04-01 09:31:45'),
(313, '4', 'آپدیت زیردسته-تبلت', 'آپدیت', '2021-04-01 09:32:41', '2021-04-01 09:32:41'),
(314, '4', 'آپدیت زیردسته-تبلت', 'آپدیت', '2021-04-01 09:32:47', '2021-04-01 09:32:47'),
(315, '4', 'آپدیت دسته کودک-تستت جدید', 'آپدیت', '2021-04-01 09:32:54', '2021-04-01 09:32:54'),
(316, '4', 'آپدیت دسته کودک-تستت جدید', 'آپدیت', '2021-04-01 09:32:59', '2021-04-01 09:32:59'),
(317, '4', 'آپدیت برند-', 'آپدیت', '2021-04-01 09:34:19', '2021-04-01 09:34:19'),
(318, '4', 'آپدیت برند-', 'آپدیت', '2021-04-01 09:34:25', '2021-04-01 09:34:25'),
(319, '4', 'آپدیت مقدار مشخصه-', 'آپدیت', '2021-04-01 09:35:52', '2021-04-01 09:35:52'),
(320, '4', 'آپدیت مقدار مشخصه-', 'آپدیت', '2021-04-01 09:35:57', '2021-04-01 09:35:57'),
(321, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-04-01 09:40:55', '2021-04-01 09:40:55'),
(322, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-04-01 09:41:13', '2021-04-01 09:41:13'),
(323, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-04-01 09:41:30', '2021-04-01 09:41:30'),
(324, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-04-01 09:42:00', '2021-04-01 09:42:00'),
(325, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-04-01 09:42:52', '2021-04-01 09:42:52'),
(326, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-04-01 09:43:58', '2021-04-01 09:43:58'),
(327, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-04-01 09:44:31', '2021-04-01 09:44:31'),
(328, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-04-01 09:46:07', '2021-04-01 09:46:07'),
(329, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-04-01 09:48:05', '2021-04-01 09:48:05'),
(330, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-04-01 09:49:30', '2021-04-01 09:49:30'),
(331, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-04-01 09:49:37', '2021-04-01 09:49:37'),
(332, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-04-01 12:21:28', '2021-04-01 12:21:28'),
(333, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-04-01 12:21:37', '2021-04-01 12:21:37'),
(334, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-04-01 12:21:48', '2021-04-01 12:21:48'),
(335, '4', 'حذف کردن دسته-تست 23', 'حذف', '2021-04-01 12:28:01', '2021-04-01 12:28:01'),
(336, '4', 'حذف کردن دسته-کالای دیجیتال', 'حذف', '2021-04-01 12:28:06', '2021-04-01 12:28:06'),
(337, '4', 'بازیابی دسته-کالای دیجیتال', 'بازیابی', '2021-04-01 12:28:11', '2021-04-01 12:28:11'),
(338, '4', 'حذف کردن دسته-تتستس', 'حذف', '2021-04-01 12:29:59', '2021-04-01 12:29:59'),
(339, '4', 'آپدیت محصول-کابل تبدیل USB به لایتنینگ آیبولی مدل S.65 طول 1 متر', 'آپدیت', '2021-04-01 12:35:29', '2021-04-01 12:35:29'),
(340, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-04-01 12:35:58', '2021-04-01 12:35:58'),
(341, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-04-01 12:36:09', '2021-04-01 12:36:09'),
(342, '4', 'حذف کردن دسته-کالای دیجیتال', 'حذف', '2021-04-01 12:36:31', '2021-04-01 12:36:31'),
(343, '4', 'بازیابی دسته-کالای دیجیتال', 'بازیابی', '2021-04-01 12:36:37', '2021-04-01 12:36:37'),
(344, '4', 'حذف کردن دسته-تست', 'حذف', '2021-04-01 12:41:06', '2021-04-01 12:41:06'),
(345, '4', 'حذف کردن زیر دسته-تبلت', 'حذف', '2021-04-01 12:43:02', '2021-04-01 12:43:02'),
(346, '4', 'حذف کردن دسته کودک-هواوی', 'حذف', '2021-04-01 12:45:50', '2021-04-01 12:45:50'),
(347, '4', 'حذف کردن دسته کودک-نوکیا2', 'حذف', '2021-04-01 12:45:58', '2021-04-01 12:45:58'),
(348, '4', 'حذف کردن دسته کودک-هواوی123', 'حذف', '2021-04-01 12:46:02', '2021-04-01 12:46:02'),
(349, '4', 'حذف کردن برند-', 'حذف', '2021-04-01 12:48:29', '2021-04-01 12:48:29'),
(350, '4', 'حذف کردن تنوع قیمت محصول-', 'حذف', '2021-04-01 14:25:48', '2021-04-01 14:25:48'),
(351, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-03 11:46:40', '2021-04-03 11:46:40'),
(352, '4', 'حذف کردن صفحه سایت-', 'حذف', '2021-04-03 11:47:49', '2021-04-03 11:47:49'),
(353, '4', 'بازیابی صفحه سایت-تحویل اکسپرس', 'بازیابی', '2021-04-03 11:52:15', '2021-04-03 11:52:15'),
(354, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-03 11:52:26', '2021-04-03 11:52:26'),
(355, '4', 'حذف کردن صفحه سایت-', 'حذف', '2021-04-03 11:52:28', '2021-04-03 11:52:28'),
(356, '4', 'آپدیت صفحه سایت-تحویل اکسپرس2', 'آپدیت', '2021-04-03 12:00:36', '2021-04-03 12:00:36'),
(357, '4', 'آپدیت صفحه سایت-تحویل اکسپرس', 'آپدیت', '2021-04-03 12:00:42', '2021-04-03 12:00:42'),
(358, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-03 12:01:21', '2021-04-03 12:01:21'),
(359, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-03 12:02:11', '2021-04-03 12:02:11'),
(360, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-03 12:04:16', '2021-04-03 12:04:16'),
(361, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-03 12:05:06', '2021-04-03 12:05:06'),
(362, '4', 'آپدیت صفحه سایت-تحویل اکسپرس', 'آپدیت', '2021-04-06 09:12:26', '2021-04-06 09:12:26'),
(363, '4', 'آپدیت صفحه سایت-پشتیبانی ۲۴ ساعته', 'آپدیت', '2021-04-06 09:13:08', '2021-04-06 09:13:08'),
(364, '4', 'آپدیت صفحه سایت-پرداخت در محل', 'آپدیت', '2021-04-06 09:13:49', '2021-04-06 09:13:49'),
(365, '4', 'آپدیت صفحه سایت-۷ روز ضمانت بازگشت', 'آپدیت', '2021-04-06 09:14:41', '2021-04-06 09:14:41'),
(366, '4', 'آپدیت صفحه سایت-ضمانت اصل‌بودن کالا', 'آپدیت', '2021-04-06 09:15:15', '2021-04-06 09:15:15'),
(367, '4', 'آپدیت صفحه سایت-ضمانت اصل‌بودن کالا', 'آپدیت', '2021-04-06 09:15:28', '2021-04-06 09:15:28'),
(368, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 10:17:17', '2021-04-06 10:17:17'),
(369, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 10:24:27', '2021-04-06 10:24:27'),
(370, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 10:24:29', '2021-04-06 10:24:29'),
(371, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 10:24:41', '2021-04-06 10:24:41'),
(372, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 10:24:43', '2021-04-06 10:24:43'),
(373, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 10:35:43', '2021-04-06 10:35:43'),
(374, '4', 'حذف کردن صفحه به فوتر سایت-', 'حذف', '2021-04-06 10:35:55', '2021-04-06 10:35:55'),
(375, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 10:41:16', '2021-04-06 10:41:16'),
(376, '4', 'آپدیت صفحه سایت-نحوه ثبت سفارش', 'آپدیت', '2021-04-06 10:41:53', '2021-04-06 10:41:53'),
(377, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 10:42:34', '2021-04-06 10:42:34'),
(378, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 10:42:56', '2021-04-06 10:42:56'),
(379, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 10:43:20', '2021-04-06 10:43:20'),
(380, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 10:43:22', '2021-04-06 10:43:22'),
(381, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 10:43:25', '2021-04-06 10:43:25'),
(382, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 13:01:28', '2021-04-06 13:01:28'),
(383, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 13:01:43', '2021-04-06 13:01:43'),
(384, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 13:01:54', '2021-04-06 13:01:54'),
(385, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 13:02:06', '2021-04-06 13:02:06'),
(386, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 13:03:35', '2021-04-06 13:03:35'),
(387, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 13:03:49', '2021-04-06 13:03:49'),
(388, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 13:04:01', '2021-04-06 13:04:01'),
(389, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 13:04:12', '2021-04-06 13:04:12'),
(390, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 13:04:32', '2021-04-06 13:04:32'),
(391, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 13:04:43', '2021-04-06 13:04:43'),
(392, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 13:04:53', '2021-04-06 13:04:53'),
(393, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:05:40', '2021-04-06 13:05:40'),
(394, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:05:44', '2021-04-06 13:05:44'),
(395, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:06:01', '2021-04-06 13:06:01'),
(396, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:06:03', '2021-04-06 13:06:03'),
(397, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:06:06', '2021-04-06 13:06:06'),
(398, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:08:36', '2021-04-06 13:08:36'),
(399, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:08:39', '2021-04-06 13:08:39'),
(400, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:09:25', '2021-04-06 13:09:25'),
(401, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:09:28', '2021-04-06 13:09:28'),
(402, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:09:34', '2021-04-06 13:09:34'),
(403, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:09:37', '2021-04-06 13:09:37'),
(404, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 13:16:06', '2021-04-06 13:16:06'),
(405, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 13:20:22', '2021-04-06 13:20:22'),
(406, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-06 13:20:32', '2021-04-06 13:20:32'),
(407, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:22:27', '2021-04-06 13:22:27'),
(408, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:22:30', '2021-04-06 13:22:30'),
(409, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:22:32', '2021-04-06 13:22:32'),
(410, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:22:38', '2021-04-06 13:22:38'),
(411, '4', 'حذف کردن صفحه به فوتر سایت-', 'حذف', '2021-04-06 13:22:41', '2021-04-06 13:22:41'),
(412, '4', 'حذف کردن صفحه به فوتر سایت-', 'حذف', '2021-04-06 13:25:39', '2021-04-06 13:25:39'),
(413, '4', 'حذف کردن صفحه به فوتر سایت-', 'حذف', '2021-04-06 13:25:40', '2021-04-06 13:25:40'),
(414, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:25:45', '2021-04-06 13:25:45'),
(415, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:25:48', '2021-04-06 13:25:48'),
(416, '4', 'حذف کردن صفحه به فوتر سایت-', 'حذف', '2021-04-06 13:35:21', '2021-04-06 13:35:21'),
(417, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:35:25', '2021-04-06 13:35:25'),
(418, '4', 'آپدیت عنوان فوتر صفحه سایت-19', 'آپدیت', '2021-04-06 13:45:45', '2021-04-06 13:45:45'),
(419, '4', 'آپدیت عنوان فوتر صفحه سایت-11', 'آپدیت', '2021-04-06 13:46:35', '2021-04-06 13:46:35'),
(420, '4', 'آپدیت عنوان فوتر صفحه سایت-23', 'آپدیت', '2021-04-06 13:46:57', '2021-04-06 13:46:57'),
(421, '4', 'آپدیت عنوان فوتر صفحه سایت-21', 'آپدیت', '2021-04-06 13:47:14', '2021-04-06 13:47:14'),
(422, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:48:46', '2021-04-06 13:48:46'),
(423, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-06 13:50:34', '2021-04-06 13:50:34'),
(424, '4', 'افزودن خبرنامه-', 'ایجاد', '2021-04-07 05:54:56', '2021-04-07 05:54:56'),
(425, '4', 'افزودن خبرنامه-', 'ایجاد', '2021-04-07 05:55:02', '2021-04-07 05:55:02'),
(426, '4', 'حذف کردن خبرنامه-', 'حذف', '2021-04-07 05:55:05', '2021-04-07 05:55:05'),
(427, '4', 'افزودن خبرنامه-', 'ایجاد', '2021-04-07 05:55:22', '2021-04-07 05:55:22'),
(428, '4', 'افزودن خبرنامه-', 'ایجاد', '2021-04-07 05:55:29', '2021-04-07 05:55:29'),
(429, '4', 'حذف کردن خبرنامه-', 'حذف', '2021-04-07 05:55:32', '2021-04-07 05:55:32'),
(430, '4', 'حذف کردن خبرنامه-', 'حذف', '2021-04-07 05:55:33', '2021-04-07 05:55:33'),
(431, '4', 'افزودن شبکه اجتماعی-', 'ایجاد', '2021-04-07 10:02:33', '2021-04-07 10:02:33'),
(432, '4', 'افزودن شبکه اجتماعی-', 'ایجاد', '2021-04-07 10:03:14', '2021-04-07 10:03:14'),
(433, '4', 'افزودن شبکه اجتماعی-', 'ایجاد', '2021-04-07 10:03:36', '2021-04-07 10:03:36'),
(434, '4', 'افزودن شبکه اجتماعی-', 'ایجاد', '2021-04-07 10:04:24', '2021-04-07 10:04:24'),
(435, '4', 'افزودن شبکه اجتماعی-', 'ایجاد', '2021-04-07 10:11:41', '2021-04-07 10:11:41'),
(436, '4', 'حذف کردن شبکه اجتماعی-', 'حذف', '2021-04-07 10:11:43', '2021-04-07 10:11:43'),
(437, '4', 'افزودن شبکه اجتماعی-', 'ایجاد', '2021-04-07 11:13:19', '2021-04-07 11:13:19'),
(438, '4', 'حذف کردن شبکه اجتماعی-', 'حذف', '2021-04-07 11:13:20', '2021-04-07 11:13:20'),
(439, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 13:47:43', '2021-04-07 13:47:43'),
(440, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 13:47:57', '2021-04-07 13:47:57'),
(441, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 13:50:08', '2021-04-07 13:50:08'),
(442, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 13:50:13', '2021-04-07 13:50:13'),
(443, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 13:50:20', '2021-04-07 13:50:20'),
(444, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 13:50:31', '2021-04-07 13:50:31'),
(445, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 13:50:37', '2021-04-07 13:50:37'),
(446, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 13:52:07', '2021-04-07 13:52:07'),
(447, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 13:52:09', '2021-04-07 13:52:09'),
(448, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 13:52:12', '2021-04-07 13:52:12'),
(449, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 13:52:22', '2021-04-07 13:52:22'),
(450, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 13:52:24', '2021-04-07 13:52:24'),
(451, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 13:52:25', '2021-04-07 13:52:25'),
(452, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 13:52:45', '2021-04-07 13:52:45'),
(453, '4', 'آپدیت دسته کودک-ماسک تنفسی', 'آپدیت', '2021-04-07 13:53:08', '2021-04-07 13:53:08'),
(454, '4', 'آپدیت دسته کودک-دوچرخه', 'آپدیت', '2021-04-07 13:53:28', '2021-04-07 13:53:28'),
(455, '4', 'آپدیت دسته کودک-اسباب بازی', 'آپدیت', '2021-04-07 13:53:39', '2021-04-07 13:53:39'),
(456, '4', 'آپدیت دسته کودک-عطر و ادکلن', 'آپدیت', '2021-04-07 13:53:48', '2021-04-07 13:53:48'),
(457, '4', 'آپدیت دسته کودک-مانتو', 'آپدیت', '2021-04-07 13:53:57', '2021-04-07 13:53:57'),
(458, '4', 'آپدیت عنوان فوتر صفحه سایت-', 'آپدیت', '2021-04-07 14:46:10', '2021-04-07 14:46:10'),
(459, '4', 'آپدیت عنوان فوتر صفحه سایت-', 'آپدیت', '2021-04-07 14:46:18', '2021-04-07 14:46:18'),
(460, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-07 14:56:20', '2021-04-07 14:56:20'),
(461, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-07 14:56:49', '2021-04-07 14:56:49'),
(462, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-07 14:57:01', '2021-04-07 14:57:01'),
(463, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-07 14:57:13', '2021-04-07 14:57:13'),
(464, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-07 14:57:27', '2021-04-07 14:57:27'),
(465, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-07 14:58:01', '2021-04-07 14:58:01'),
(466, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 14:58:12', '2021-04-07 14:58:12'),
(467, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 14:58:15', '2021-04-07 14:58:15'),
(468, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 14:58:17', '2021-04-07 14:58:17'),
(469, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 14:58:21', '2021-04-07 14:58:21'),
(470, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 14:58:24', '2021-04-07 14:58:24'),
(471, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-07 14:58:27', '2021-04-07 14:58:27'),
(472, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-08 00:48:49', '2021-04-08 00:48:49'),
(473, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-08 00:48:58', '2021-04-08 00:48:58'),
(474, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-08 00:49:03', '2021-04-08 00:49:03'),
(475, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-08 00:56:03', '2021-04-08 00:56:03'),
(476, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-08 00:56:35', '2021-04-08 00:56:35'),
(477, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-08 00:56:51', '2021-04-08 00:56:51'),
(478, '4', 'افزودن صفحه سایت-', 'ایجاد', '2021-04-08 00:57:11', '2021-04-08 00:57:11'),
(479, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-08 00:58:04', '2021-04-08 00:58:04'),
(480, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-08 00:58:08', '2021-04-08 00:58:08'),
(481, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-08 00:58:11', '2021-04-08 00:58:11'),
(482, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-08 00:58:15', '2021-04-08 00:58:15'),
(483, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-08 01:05:04', '2021-04-08 01:05:04'),
(484, '4', 'حذف کردن صفحه به فوتر سایت-', 'حذف', '2021-04-08 01:06:00', '2021-04-08 01:06:00'),
(485, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-08 01:06:50', '2021-04-08 01:06:50'),
(486, '4', 'افزودن صفحه به فوتر سایت-', 'ایجاد', '2021-04-08 01:07:04', '2021-04-08 01:07:04'),
(487, '4', 'حذف کردن صفحه به فوتر سایت-', 'حذف', '2021-04-08 01:08:45', '2021-04-08 01:08:45'),
(488, '4', 'حذف کردن صفحه به فوتر سایت-', 'حذف', '2021-04-08 01:08:46', '2021-04-08 01:08:46'),
(489, '4', 'افزودن منو هدر-', 'ایجاد', '2021-04-10 02:32:23', '2021-04-10 02:32:23'),
(490, '4', 'افزودن منو هدر-', 'ایجاد', '2021-04-10 02:33:32', '2021-04-10 02:33:32'),
(491, '4', 'افزودن منو هدر-', 'ایجاد', '2021-04-10 02:34:39', '2021-04-10 02:34:39'),
(492, '4', 'افزودن منو هدر-', 'ایجاد', '2021-04-10 02:35:02', '2021-04-10 02:35:02'),
(493, '4', 'غیرفعال کردن وضعیت منو هدر-دیجی کالای من', 'غیرفعال', '2021-04-10 02:35:06', '2021-04-10 02:35:06'),
(494, '4', 'فعال کردن وضعیت منو هدر-دیجی کالای من', 'فعال', '2021-04-10 02:35:08', '2021-04-10 02:35:08'),
(495, '4', 'افزودن منو هدر-', 'ایجاد', '2021-04-10 02:36:13', '2021-04-10 02:36:13'),
(496, '4', 'افزودن منو هدر-', 'ایجاد', '2021-04-10 02:36:33', '2021-04-10 02:36:33'),
(497, '4', 'افزودن منو هدر-', 'ایجاد', '2021-04-10 02:36:51', '2021-04-10 02:36:51'),
(498, '4', 'افزودن منو هدر-', 'ایجاد', '2021-04-10 02:37:01', '2021-04-10 02:37:01'),
(499, '4', 'آپدیت منو-سوپرمارکت23', 'آپدیت', '2021-04-10 02:41:30', '2021-04-10 02:41:30'),
(500, '4', 'آپدیت منو-سوپرمارکت', 'آپدیت', '2021-04-10 02:41:39', '2021-04-10 02:41:39'),
(501, '4', 'آپدیت منو-فروشنده شوید', 'آپدیت', '2021-04-10 02:53:17', '2021-04-10 02:53:17'),
(502, '4', 'افزودن منو هدر-', 'ایجاد', '2021-04-10 02:53:56', '2021-04-10 02:53:56'),
(503, '4', 'آپدیت دسته-کالای دیجیتال', 'آپدیت', '2021-04-10 05:50:10', '2021-04-10 05:50:10'),
(504, '4', 'آپدیت دسته-خودرو، ابزار و تجهیزات صنعتی', 'آپدیت', '2021-04-10 05:50:29', '2021-04-10 05:50:29'),
(505, '4', 'آپدیت دسته-اسباب بازی، کودک و نوزاد', 'آپدیت', '2021-04-10 05:50:44', '2021-04-10 05:50:44'),
(506, '4', 'افزودن دسته-', 'ایجاد', '2021-04-10 05:51:38', '2021-04-10 05:51:38'),
(507, '4', 'آپدیت دسته-اسباب بازی، کودک و نوزاد', 'آپدیت', '2021-04-10 05:52:46', '2021-04-10 05:52:46'),
(508, '4', 'آپدیت دسته-کالاهای سوپرمارکتی', 'آپدیت', '2021-04-10 05:53:05', '2021-04-10 05:53:05'),
(509, '4', 'آپدیت دسته-زیبایی و سلامت', 'آپدیت', '2021-04-10 05:53:20', '2021-04-10 05:53:20');
INSERT INTO `logs` (`id`, `user_id`, `url`, `actionType`, `created_at`, `updated_at`) VALUES
(510, '4', 'آپدیت دسته-خانه و آشپزخانه', 'آپدیت', '2021-04-10 05:53:33', '2021-04-10 05:53:33'),
(511, '4', 'آپدیت دسته-کتاب، لوازم تحریر و هنر', 'آپدیت', '2021-04-10 05:53:48', '2021-04-10 05:53:48'),
(512, '4', 'آپدیت دسته-ورزش و سفر', 'آپدیت', '2021-04-10 05:54:08', '2021-04-10 05:54:08'),
(513, '4', 'حذف کردن دسته-محصولات بومی و محلی', 'حذف', '2021-04-10 05:54:12', '2021-04-10 05:54:12'),
(514, '4', 'آپدیت منو-دسته‌بندی کالاها', 'آپدیت', '2021-04-10 06:00:20', '2021-04-10 06:00:20'),
(515, '4', 'افزودن منو-', 'ایجاد', '2021-04-27 02:08:31', '2021-04-27 02:08:31'),
(516, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-27 02:14:43', '2021-04-27 02:14:43'),
(517, '4', 'افزودن منو-', 'ایجاد', '2021-04-27 02:14:56', '2021-04-27 02:14:56'),
(518, '4', 'افزودن منو-', 'ایجاد', '2021-04-27 02:15:21', '2021-04-27 02:15:21'),
(519, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-27 02:17:41', '2021-04-27 02:17:41'),
(520, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-27 02:17:58', '2021-04-27 02:17:58'),
(521, '4', 'افزودن منو-', 'ایجاد', '2021-04-27 02:18:08', '2021-04-27 02:18:08'),
(522, '4', 'افزودن منو-', 'ایجاد', '2021-04-27 02:18:15', '2021-04-27 02:18:15'),
(523, '4', 'فعال کردن وضعیت منو-1', 'فعال', '2021-04-27 02:18:16', '2021-04-27 02:18:16'),
(524, '4', 'فعال کردن وضعیت منو-1', 'فعال', '2021-04-27 02:18:17', '2021-04-27 02:18:17'),
(525, '4', 'افزودن منو-', 'ایجاد', '2021-04-27 02:18:31', '2021-04-27 02:18:31'),
(526, '4', 'حذف کردن منو-1', 'حذف', '2021-04-27 02:18:32', '2021-04-27 02:18:32'),
(527, '4', 'افزودن منو-', 'ایجاد', '2021-04-27 02:23:09', '2021-04-27 02:23:09'),
(528, '4', 'آپدیت منو-1', 'آپدیت', '2021-04-27 02:26:31', '2021-04-27 02:26:31'),
(529, '4', 'افزودن منو-', 'ایجاد', '2021-04-27 04:40:34', '2021-04-27 04:40:34'),
(530, '4', 'افزودن منو-', 'ایجاد', '2021-04-27 04:40:41', '2021-04-27 04:40:41'),
(531, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 00:54:51', '2021-04-28 00:54:51'),
(532, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 00:55:06', '2021-04-28 00:55:06'),
(533, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 00:55:19', '2021-04-28 00:55:19'),
(534, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 00:55:27', '2021-04-28 00:55:27'),
(535, '4', 'آپدیت زیردسته-لوازم جانبی گوشی ', 'آپدیت', '2021-04-28 01:06:05', '2021-04-28 01:06:05'),
(536, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:06:48', '2021-04-28 01:06:48'),
(537, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:07:08', '2021-04-28 01:07:08'),
(538, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:08:27', '2021-04-28 01:08:27'),
(539, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:08:41', '2021-04-28 01:08:41'),
(540, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:08:56', '2021-04-28 01:08:56'),
(541, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:09:07', '2021-04-28 01:09:07'),
(542, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:09:18', '2021-04-28 01:09:18'),
(543, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:09:46', '2021-04-28 01:09:46'),
(544, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:10:11', '2021-04-28 01:10:11'),
(545, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:10:27', '2021-04-28 01:10:27'),
(546, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:10:46', '2021-04-28 01:10:46'),
(547, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:11:08', '2021-04-28 01:11:08'),
(548, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:11:31', '2021-04-28 01:11:31'),
(549, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:11:49', '2021-04-28 01:11:49'),
(550, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:12:02', '2021-04-28 01:12:02'),
(551, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:12:18', '2021-04-28 01:12:18'),
(552, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:12:35', '2021-04-28 01:12:35'),
(553, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:12:47', '2021-04-28 01:12:47'),
(554, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:13:03', '2021-04-28 01:13:03'),
(555, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:13:32', '2021-04-28 01:13:32'),
(556, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:14:20', '2021-04-28 01:14:20'),
(557, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:14:46', '2021-04-28 01:14:46'),
(558, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:14:51', '2021-04-28 01:14:51'),
(559, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:15:11', '2021-04-28 01:15:11'),
(560, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:15:31', '2021-04-28 01:15:31'),
(561, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:15:54', '2021-04-28 01:15:54'),
(562, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-04-28 01:16:09', '2021-04-28 01:16:09'),
(563, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:16:49', '2021-04-28 01:16:49'),
(564, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:17:08', '2021-04-28 01:17:08'),
(565, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:17:26', '2021-04-28 01:17:26'),
(566, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:18:01', '2021-04-28 01:18:01'),
(567, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:18:15', '2021-04-28 01:18:15'),
(568, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:18:28', '2021-04-28 01:18:28'),
(569, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:18:47', '2021-04-28 01:18:47'),
(570, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:19:08', '2021-04-28 01:19:08'),
(571, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:19:27', '2021-04-28 01:19:27'),
(572, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:19:33', '2021-04-28 01:19:33'),
(573, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:19:52', '2021-04-28 01:19:52'),
(574, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:20:12', '2021-04-28 01:20:12'),
(575, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:20:22', '2021-04-28 01:20:22'),
(576, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:20:39', '2021-04-28 01:20:39'),
(577, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:20:55', '2021-04-28 01:20:55'),
(578, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:21:15', '2021-04-28 01:21:15'),
(579, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:21:34', '2021-04-28 01:21:34'),
(580, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:21:46', '2021-04-28 01:21:46'),
(581, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-04-28 01:21:53', '2021-04-28 01:21:53'),
(582, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:22:40', '2021-04-28 01:22:40'),
(583, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:22:46', '2021-04-28 01:22:46'),
(584, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:23:11', '2021-04-28 01:23:11'),
(585, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:23:20', '2021-04-28 01:23:20'),
(586, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:23:26', '2021-04-28 01:23:26'),
(587, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:23:33', '2021-04-28 01:23:33'),
(588, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:23:39', '2021-04-28 01:23:39'),
(589, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:24:18', '2021-04-28 01:24:18'),
(590, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:24:27', '2021-04-28 01:24:27'),
(591, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:24:35', '2021-04-28 01:24:35'),
(592, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:24:49', '2021-04-28 01:24:49'),
(593, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:25:00', '2021-04-28 01:25:00'),
(594, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:25:16', '2021-04-28 01:25:16'),
(595, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:25:24', '2021-04-28 01:25:24'),
(596, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:25:42', '2021-04-28 01:25:42'),
(597, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:25:49', '2021-04-28 01:25:49'),
(598, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:25:55', '2021-04-28 01:25:55'),
(599, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:26:04', '2021-04-28 01:26:04'),
(600, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:26:12', '2021-04-28 01:26:12'),
(601, '4', 'فعال کردن وضعیت منو-1', 'فعال', '2021-04-28 01:26:14', '2021-04-28 01:26:14'),
(602, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:26:36', '2021-04-28 01:26:36'),
(603, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:26:44', '2021-04-28 01:26:44'),
(604, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:26:52', '2021-04-28 01:26:52'),
(605, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:27:00', '2021-04-28 01:27:00'),
(606, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:27:10', '2021-04-28 01:27:10'),
(607, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:27:19', '2021-04-28 01:27:19'),
(608, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:28:03', '2021-04-28 01:28:03'),
(609, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:28:11', '2021-04-28 01:28:11'),
(610, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:28:19', '2021-04-28 01:28:19'),
(611, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:28:28', '2021-04-28 01:28:28'),
(612, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:28:44', '2021-04-28 01:28:44'),
(613, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:28:50', '2021-04-28 01:28:50'),
(614, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:28:56', '2021-04-28 01:28:56'),
(615, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:29:04', '2021-04-28 01:29:04'),
(616, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:29:33', '2021-04-28 01:29:33'),
(617, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:29:39', '2021-04-28 01:29:39'),
(618, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:29:46', '2021-04-28 01:29:46'),
(619, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:29:54', '2021-04-28 01:29:54'),
(620, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:30:03', '2021-04-28 01:30:03'),
(621, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:30:10', '2021-04-28 01:30:10'),
(622, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:30:17', '2021-04-28 01:30:17'),
(623, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:30:25', '2021-04-28 01:30:25'),
(624, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:30:33', '2021-04-28 01:30:33'),
(625, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:30:43', '2021-04-28 01:30:43'),
(626, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:30:50', '2021-04-28 01:30:50'),
(627, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:30:55', '2021-04-28 01:30:55'),
(628, '4', 'افزودن منو-', 'ایجاد', '2021-04-28 01:30:59', '2021-04-28 01:30:59'),
(629, '4', 'فعال کردن وضعیت منو-1', 'فعال', '2021-04-28 01:31:00', '2021-04-28 01:31:00'),
(630, '4', 'افزودن برند-', 'ایجاد', '2021-04-28 02:52:08', '2021-04-28 02:52:08'),
(631, '4', 'افزودن برند-', 'ایجاد', '2021-04-28 02:52:48', '2021-04-28 02:52:48'),
(632, '4', 'افزودن برند-', 'ایجاد', '2021-04-28 02:53:58', '2021-04-28 02:53:58'),
(633, '4', 'غیرفعال کردن وضعیت برند-', 'غیرفعال', '2021-04-28 02:54:18', '2021-04-28 02:54:18'),
(634, '4', 'فعال کردن وضعیت برند-', 'فعال', '2021-04-28 02:54:19', '2021-04-28 02:54:19'),
(635, '4', 'آپدیت برند-', 'آپدیت', '2021-04-28 02:55:34', '2021-04-28 02:55:34'),
(636, '4', 'فعال کردن وضعیت برند-', 'فعال', '2021-04-28 02:55:37', '2021-04-28 02:55:37'),
(637, '4', 'افزودن تبلیغات دسته-', 'ایجاد', '2021-04-28 10:18:57', '2021-04-28 10:18:57'),
(638, '4', 'افزودن تبلیغات دسته-', 'ایجاد', '2021-04-28 10:23:26', '2021-04-28 10:23:26'),
(639, '4', 'افزودن تبلیغات دسته-', 'ایجاد', '2021-04-28 10:23:47', '2021-04-28 10:23:47'),
(640, '4', 'افزودن تبلیغات دسته-', 'ایجاد', '2021-04-28 10:24:06', '2021-04-28 10:24:06'),
(641, '4', 'افزودن تبلیغات دسته-', 'ایجاد', '2021-04-28 10:24:21', '2021-04-28 10:24:21'),
(642, '4', 'افزودن تبلیغات دسته-', 'ایجاد', '2021-04-28 10:24:47', '2021-04-28 10:24:47'),
(643, '4', 'افزودن تبلیغات دسته-', 'ایجاد', '2021-04-28 10:25:04', '2021-04-28 10:25:04'),
(644, '4', 'افزودن تبلیغات دسته-', 'ایجاد', '2021-04-28 10:25:28', '2021-04-28 10:25:28'),
(645, '4', 'افزودن تبلیغات دسته-', 'ایجاد', '2021-04-28 10:26:20', '2021-04-28 10:26:20'),
(646, '4', 'غیرفعال کردن وضعیت تبلیغات دسته-', 'غیرفعال', '2021-04-28 10:27:12', '2021-04-28 10:27:12'),
(647, '4', 'فعال کردن وضعیت تبلیغات دسته-', 'فعال', '2021-04-28 10:27:13', '2021-04-28 10:27:13'),
(648, '4', 'آپدیت تبلیغات دسته-ورزش و سفر', 'آپدیت', '2021-04-28 10:34:16', '2021-04-28 10:34:16'),
(649, '4', 'آپدیت تبلیغات دسته-ورزش و سفر', 'آپدیت', '2021-04-28 10:34:34', '2021-04-28 10:34:34'),
(650, '4', 'افزودن بنر-', 'ایجاد', '2021-05-03 16:55:24', '2021-05-03 16:55:24'),
(651, '4', 'افزودن بنر-', 'ایجاد', '2021-05-03 16:59:32', '2021-05-03 16:59:32'),
(652, '4', 'افزودن بنر-', 'ایجاد', '2021-05-03 16:59:48', '2021-05-03 16:59:48'),
(653, '4', 'آپدیت بنر-هدیه روز مادر', 'آپدیت', '2021-05-03 17:05:52', '2021-05-03 17:05:52'),
(654, '4', 'آپدیت بنر-هدیه روز مادر', 'آپدیت', '2021-05-03 17:06:14', '2021-05-03 17:06:14'),
(655, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-03 18:02:30', '2021-05-03 18:02:30'),
(656, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-03 18:03:50', '2021-05-03 18:03:50'),
(657, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-03 18:04:06', '2021-05-03 18:04:06'),
(658, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-03 18:04:25', '2021-05-03 18:04:25'),
(659, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-03 18:04:42', '2021-05-03 18:04:42'),
(660, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-03 18:04:59', '2021-05-03 18:04:59'),
(661, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-03 18:05:26', '2021-05-03 18:05:26'),
(662, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-03 18:05:45', '2021-05-03 18:05:45'),
(663, '4', 'آپدیت اسلایدر-مراقبت پوست', 'آپدیت', '2021-05-03 18:08:07', '2021-05-03 18:08:07'),
(664, '4', 'آپدیت اسلایدر-مراقبت پوست', 'آپدیت', '2021-05-03 18:08:16', '2021-05-03 18:08:16'),
(665, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-03 18:10:55', '2021-05-03 18:10:55'),
(666, '4', 'حذف کردن اسلایدر-gddg', 'حذف', '2021-05-03 18:10:57', '2021-05-03 18:10:57'),
(667, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-03 18:11:39', '2021-05-03 18:11:39'),
(668, '4', 'حذف کردن اسلایدر-hgfghh', 'حذف', '2021-05-03 18:11:57', '2021-05-03 18:11:57'),
(669, '4', 'فعال کردن اسلایدر-ایکس ویژن', 'فعال', '2021-05-03 18:17:42', '2021-05-03 18:17:42'),
(670, '4', 'فعال کردن اسلایدر-مراقبت پوست', 'فعال', '2021-05-03 18:17:43', '2021-05-03 18:17:43'),
(671, '4', 'فعال کردن اسلایدر-لورا', 'فعال', '2021-05-03 18:17:43', '2021-05-03 18:17:43'),
(672, '4', 'غیرفعال کردن اسلایدر-ایکس ویژن', 'غیرفعال', '2021-05-03 18:17:44', '2021-05-03 18:17:44'),
(673, '4', 'فعال کردن اسلایدر-ایکس ویژن', 'فعال', '2021-05-03 18:17:45', '2021-05-03 18:17:45'),
(674, '4', 'فعال کردن اسلایدر-مداد', 'فعال', '2021-05-03 18:17:48', '2021-05-03 18:17:48'),
(675, '4', 'فعال کردن اسلایدر-مانتو', 'فعال', '2021-05-03 18:17:48', '2021-05-03 18:17:48'),
(676, '4', 'فعال کردن اسلایدر-کفش مردانه', 'فعال', '2021-05-03 18:17:49', '2021-05-03 18:17:49'),
(677, '4', 'فعال کردن اسلایدر-مهرومادر', 'فعال', '2021-05-03 18:17:50', '2021-05-03 18:17:50'),
(678, '4', 'فعال کردن اسلایدر-محصولات کندی', 'فعال', '2021-05-03 18:17:51', '2021-05-03 18:17:51'),
(679, '4', 'غیرفعال کردن اسلایدر-محصولات کندی', 'غیرفعال', '2021-05-03 18:17:52', '2021-05-03 18:17:52'),
(680, '4', 'آپدیت اسلایدر-محصولات کندی', 'آپدیت', '2021-05-03 18:19:26', '2021-05-03 18:19:26'),
(681, '4', 'آپدیت اسلایدر-محصولات کندی', 'آپدیت', '2021-05-03 18:19:31', '2021-05-03 18:19:31'),
(682, '4', 'فعال کردن اسلایدر-محصولات کندی', 'فعال', '2021-05-03 18:19:34', '2021-05-03 18:19:34'),
(683, '4', 'غیرفعال کردن اسلایدر-محصولات کندی', 'غیرفعال', '2021-05-03 18:19:35', '2021-05-03 18:19:35'),
(684, '4', 'فعال کردن اسلایدر-محصولات کندی', 'فعال', '2021-05-03 18:19:36', '2021-05-03 18:19:36'),
(685, '4', 'آپدیت تبلیغات دسته-ورزش و سفر', 'آپدیت', '2021-05-03 19:27:26', '2021-05-03 19:27:26'),
(686, '4', 'آپدیت تبلیغات دسته-ورزش و سفر', 'آپدیت', '2021-05-03 19:28:29', '2021-05-03 19:28:29'),
(687, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-05-03 20:00:29', '2021-05-03 20:00:29'),
(688, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-05-03 20:01:08', '2021-05-03 20:01:08'),
(689, '4', 'فعال کردن وضعیت دسته کودک-شارژر تبلت و موبایل', 'فعال', '2021-05-03 20:02:56', '2021-05-03 20:02:56'),
(690, '4', 'آپدیت دسته کودک-شارژر تبلت و موبایل', 'آپدیت', '2021-05-03 20:05:00', '2021-05-03 20:05:00'),
(691, '4', 'آپدیت دسته کودک-شارژر تبلت و موبایل', 'آپدیت', '2021-05-03 20:05:39', '2021-05-03 20:05:39'),
(692, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-05-03 20:05:53', '2021-05-03 20:05:53'),
(693, '4', 'افزودن محصول-کاور جوی روم مدل JR-BP277 مناسب برای گوشی موبایل سامسونگ Galaxy S8Plus', 'ایجاد', '2021-05-03 20:10:37', '2021-05-03 20:10:37'),
(694, '4', 'افزودن محصول-شارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعت', 'ایجاد', '2021-05-03 20:11:56', '2021-05-03 20:11:56'),
(695, '4', 'افزودن محصول-دوربین دیجیتال نیکون مدل D810 به همراه لنز 24-120 میلی متر F/4G VR', 'ایجاد', '2021-05-03 20:13:31', '2021-05-03 20:13:31'),
(696, '4', 'افزودن محصول-دوربین فیلم برداری سامسونگ مدل HMX-F810', 'ایجاد', '2021-05-03 20:18:49', '2021-05-03 20:18:49'),
(697, '4', 'افزودن محصول-کیس کامپیوتر گرین مدل Aria', 'ایجاد', '2021-05-03 20:20:29', '2021-05-03 20:20:29'),
(698, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-05-03 20:21:10', '2021-05-03 20:21:10'),
(699, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-05-03 20:21:24', '2021-05-03 20:21:24'),
(700, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-05-03 20:21:38', '2021-05-03 20:21:38'),
(701, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-05-03 20:22:03', '2021-05-03 20:22:03'),
(702, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-05-03 20:22:10', '2021-05-03 20:22:10'),
(703, '4', 'افزودن بنر-', 'ایجاد', '2021-05-05 09:31:28', '2021-05-05 09:31:28'),
(704, '4', 'افزودن بنر-', 'ایجاد', '2021-05-05 09:31:40', '2021-05-05 09:31:40'),
(705, '4', 'افزودن بنر-', 'ایجاد', '2021-05-05 09:31:52', '2021-05-05 09:31:52'),
(706, '4', 'افزودن بنر-', 'ایجاد', '2021-05-05 09:32:03', '2021-05-05 09:32:03'),
(707, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-05-05 10:48:11', '2021-05-05 10:48:11'),
(708, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-05-05 10:48:34', '2021-05-05 10:48:34'),
(709, '4', 'افزودن محصول-مغز ران مرغ پویا پروتئین وزن 1800 گرم', 'ایجاد', '2021-05-05 10:50:53', '2021-05-05 10:50:53'),
(710, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-05-05 10:51:43', '2021-05-05 10:51:43'),
(711, '4', 'افزودن بنر-', 'ایجاد', '2021-05-06 06:05:37', '2021-05-06 06:05:37'),
(712, '4', 'افزودن بنر-', 'ایجاد', '2021-05-06 06:05:54', '2021-05-06 06:05:54'),
(713, '4', 'افزودن عنوان دسته صفحه اصلی سایت-', 'ایجاد', '2021-05-06 23:19:20', '2021-05-06 23:19:20'),
(714, '4', 'افزودن عنوان دسته صفحه اصلی سایت-', 'ایجاد', '2021-05-06 23:20:20', '2021-05-06 23:20:20'),
(715, '4', 'افزودن عنوان دسته صفحه اصلی سایت-', 'ایجاد', '2021-05-06 23:20:33', '2021-05-06 23:20:33'),
(716, '4', 'افزودن عنوان دسته صفحه اصلی سایت-', 'ایجاد', '2021-05-06 23:20:42', '2021-05-06 23:20:42'),
(717, '4', 'افزودن عنوان دسته صفحه اصلی سایت-', 'ایجاد', '2021-05-06 23:20:48', '2021-05-06 23:20:48'),
(718, '4', 'افزودن عنوان دسته صفحه اصلی سایت-', 'ایجاد', '2021-05-06 23:20:59', '2021-05-06 23:20:59'),
(719, '4', 'آپدیت عنوان دسته-کیف و کاور گوشی1', 'آپدیت', '2021-05-06 23:44:26', '2021-05-06 23:44:26'),
(720, '4', 'آپدیت عنوان دسته-کیف و کاور گوشی', 'آپدیت', '2021-05-06 23:44:52', '2021-05-06 23:44:52'),
(721, '4', 'افزودن محصول-دوربین دیجیتال کانن مدل EOS 4000D به همراه لنز 18-55 میلی متر DC III', 'ایجاد', '2021-05-07 01:55:46', '2021-05-07 01:55:46'),
(722, '4', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-07 01:56:35', '2021-05-07 01:56:35'),
(723, '4', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-07 01:57:00', '2021-05-07 01:57:00'),
(724, '4', 'غیرفعال کردن وضعیت محصول دسته صفحه اصلی-1', 'غیرفعال', '2021-05-07 01:58:39', '2021-05-07 01:58:39'),
(725, '4', 'فعال کردن وضعیت محصول دسته های صفحه اصلی-1', 'فعال', '2021-05-07 01:58:40', '2021-05-07 01:58:40'),
(726, '4', 'حذف کردن محصول دسته صفحه اصلی-1', 'حذف', '2021-05-07 01:58:45', '2021-05-07 01:58:45'),
(727, '4', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-07 01:59:03', '2021-05-07 01:59:03'),
(728, '4', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-07 01:59:14', '2021-05-07 01:59:14'),
(729, '4', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-07 01:59:22', '2021-05-07 01:59:22'),
(730, '4', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-07 01:59:40', '2021-05-07 01:59:40'),
(731, '4', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-07 01:59:48', '2021-05-07 01:59:48'),
(732, '4', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-07 02:00:06', '2021-05-07 02:00:06'),
(733, '1', 'افزودن محصول-کارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت', 'ایجاد', '2021-05-11 04:01:33', '2021-05-11 04:01:33'),
(734, '1', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-11 04:01:51', '2021-05-11 04:01:51'),
(735, '1', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-11 04:02:09', '2021-05-11 04:02:09'),
(736, '1', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-11 04:02:16', '2021-05-11 04:02:16'),
(737, '1', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-11 04:02:25', '2021-05-11 04:02:25'),
(738, '1', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-11 04:02:34', '2021-05-11 04:02:34'),
(739, '1', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-11 04:02:59', '2021-05-11 04:02:59'),
(740, '1', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-11 04:03:11', '2021-05-11 04:03:11'),
(741, '1', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-11 04:03:21', '2021-05-11 04:03:21'),
(742, '1', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-11 04:03:34', '2021-05-11 04:03:34'),
(743, '1', 'افزودن بنر-', 'ایجاد', '2021-05-11 04:08:41', '2021-05-11 04:08:41'),
(744, '1', 'افزودن بنر-', 'ایجاد', '2021-05-11 04:08:52', '2021-05-11 04:08:52'),
(745, '1', 'افزودن بنر-', 'ایجاد', '2021-05-11 04:09:05', '2021-05-11 04:09:05'),
(746, '1', 'افزودن بنر-', 'ایجاد', '2021-05-11 04:09:16', '2021-05-11 04:09:16'),
(747, '1', 'افزودن بنر-', 'ایجاد', '2021-05-12 09:53:05', '2021-05-12 09:53:05'),
(748, '1', 'افزودن بنر-', 'ایجاد', '2021-05-12 09:53:23', '2021-05-12 09:53:23'),
(749, '1', 'افزودن بنر-', 'ایجاد', '2021-05-12 10:03:10', '2021-05-12 10:03:10'),
(750, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:28:15', '2021-05-13 03:28:15'),
(751, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:28:23', '2021-05-13 03:28:23'),
(752, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:28:29', '2021-05-13 03:28:29'),
(753, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:28:45', '2021-05-13 03:28:45'),
(754, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:28:51', '2021-05-13 03:28:51'),
(755, '1', 'فعال کردن وضعیت محصول دسته های صفحه اصلی-1', 'فعال', '2021-05-13 03:28:53', '2021-05-13 03:28:53'),
(756, '1', 'غیرفعال کردن وضعیت محصول منتخب-1', 'غیرفعال', '2021-05-13 03:28:55', '2021-05-13 03:28:55'),
(757, '1', 'فعال کردن وضعیت محصول دسته های صفحه اصلی-1', 'فعال', '2021-05-13 03:28:57', '2021-05-13 03:28:57'),
(758, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:29:09', '2021-05-13 03:29:09'),
(759, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:29:37', '2021-05-13 03:29:37'),
(760, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:29:53', '2021-05-13 03:29:53'),
(761, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:30:13', '2021-05-13 03:30:13'),
(762, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:30:25', '2021-05-13 03:30:25'),
(763, '1', 'حذف کردن محصول منتخب-1', 'حذف', '2021-05-13 03:30:28', '2021-05-13 03:30:28'),
(764, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:44:47', '2021-05-13 03:44:47'),
(765, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:44:55', '2021-05-13 03:44:55'),
(766, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:45:06', '2021-05-13 03:45:06'),
(767, '1', 'فعال کردن وضعیت محصول دسته های صفحه اصلی-1', 'فعال', '2021-05-13 03:45:07', '2021-05-13 03:45:07'),
(768, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:45:15', '2021-05-13 03:45:15'),
(769, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:45:34', '2021-05-13 03:45:34'),
(770, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:45:42', '2021-05-13 03:45:42'),
(771, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:46:00', '2021-05-13 03:46:00'),
(772, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:46:08', '2021-05-13 03:46:08'),
(773, '1', 'غیرفعال کردن وضعیت محصول منتخب-1', 'غیرفعال', '2021-05-13 03:46:19', '2021-05-13 03:46:19'),
(774, '1', 'فعال کردن وضعیت محصول دسته های صفحه اصلی-1', 'فعال', '2021-05-13 03:46:21', '2021-05-13 03:46:21'),
(775, '1', 'افزودن محصول منتخب-', 'ایجاد', '2021-05-13 03:46:28', '2021-05-13 03:46:28'),
(776, '1', 'حذف کردن محصول منتخب-1', 'حذف', '2021-05-13 03:46:29', '2021-05-13 03:46:29'),
(777, '1', 'فعال کردن وضعیت برند-', 'فعال', '2021-05-13 03:51:57', '2021-05-13 03:51:57'),
(778, '1', 'فعال کردن وضعیت برند-', 'فعال', '2021-05-13 03:51:59', '2021-05-13 03:51:59'),
(779, '1', 'آپدیت دسته-کالای دیجیتال', 'آپدیت', '2021-05-14 11:36:10', '2021-05-14 11:36:10'),
(780, '1', 'آپدیت دسته-کالای دیجیتال', 'آپدیت', '2021-05-14 11:36:38', '2021-05-14 11:36:38'),
(781, '1', 'آپدیت دسته-کالای دیجیتال', 'آپدیت', '2021-05-15 04:48:47', '2021-05-15 04:48:47'),
(782, '4', 'غیرفعال کردن اسلایدر-محصولات کندی', 'غیرفعال', '2021-05-18 07:12:15', '2021-05-18 07:12:15'),
(783, '4', 'فعال کردن اسلایدر-محصولات کندی', 'فعال', '2021-05-18 07:13:11', '2021-05-18 07:13:11'),
(784, '4', 'غیرفعال کردن اسلایدر-محصولات کندی', 'غیرفعال', '2021-05-18 07:13:11', '2021-05-18 07:13:11'),
(785, '4', 'فعال کردن اسلایدر-محصولات کندی', 'فعال', '2021-05-18 07:13:12', '2021-05-18 07:13:12'),
(786, '4', 'غیرفعال کردن اسلایدر-محصولات کندی', 'غیرفعال', '2021-05-18 07:13:13', '2021-05-18 07:13:13'),
(787, '4', 'فعال کردن اسلایدر-محصولات کندی', 'فعال', '2021-05-18 07:13:15', '2021-05-18 07:13:15'),
(788, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-18 07:26:11', '2021-05-18 07:26:11'),
(789, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-18 07:28:58', '2021-05-18 07:28:58'),
(790, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-18 07:29:14', '2021-05-18 07:29:14'),
(791, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-18 07:29:47', '2021-05-18 07:29:47'),
(792, '4', 'غیرفعال کردن اسلایدر-hjytjyytyhj', 'غیرفعال', '2021-05-18 07:29:54', '2021-05-18 07:29:54'),
(793, '4', 'فعال کردن اسلایدر-hjytjyytyhj', 'فعال', '2021-05-18 07:29:55', '2021-05-18 07:29:55'),
(794, '4', 'فعال کردن اسلایدر-dssdffds', 'فعال', '2021-05-18 08:10:25', '2021-05-18 08:10:25'),
(795, '4', 'فعال کردن اسلایدر-tyytrytyr', 'فعال', '2021-05-18 08:10:26', '2021-05-18 08:10:26'),
(796, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-18 08:25:07', '2021-05-18 08:25:07'),
(797, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-18 08:27:22', '2021-05-18 08:27:22'),
(798, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-18 08:28:18', '2021-05-18 08:28:18'),
(799, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-18 08:28:45', '2021-05-18 08:28:45'),
(800, '4', 'حذف کردن اسلایدر-adsadsd', 'حذف', '2021-05-18 08:28:46', '2021-05-18 08:28:46'),
(801, '4', 'حذف کردن اسلایدر-hjytjyytyhj', 'حذف', '2021-05-18 08:35:25', '2021-05-18 08:35:25'),
(802, '4', 'حذف کردن اسلایدر-محصولات کندی', 'حذف', '2021-05-18 08:35:35', '2021-05-18 08:35:35'),
(803, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-05-18 08:35:44', '2021-05-18 08:35:44'),
(804, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-05-18 08:57:33', '2021-05-18 08:57:33'),
(805, '4', 'غیرفعال کردن وضعیت دسته کودک-محصولات پروتئینی', 'غیرفعال', '2021-05-21 02:03:10', '2021-05-21 02:03:10'),
(806, '4', 'فعال کردن وضعیت دسته کودک-محصولات پروتئینی', 'فعال', '2021-05-21 02:03:11', '2021-05-21 02:03:11'),
(807, '4', 'بازیابی دسته کودک-هواوی', 'بازیابی', '2021-05-21 02:03:35', '2021-05-21 02:03:35'),
(808, '4', 'غیرفعال کردن وضعیت تنوع قیمت محصول-', 'غیرفعال', '2021-05-21 02:07:17', '2021-05-21 02:07:17'),
(809, '4', 'فعال کردن وضعیت تنوع قیمت محصول-', 'فعال', '2021-05-21 02:07:18', '2021-05-21 02:07:18'),
(810, '4', 'غیرفعال کردن وضعیت دسته-مد و پوشاک', 'غیرفعال', '2021-05-21 02:11:03', '2021-05-21 02:11:03'),
(811, '4', 'فعال کردن وضعیت دسته-مد و پوشاک', 'فعال', '2021-05-21 02:11:04', '2021-05-21 02:11:04'),
(812, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-05-21 02:18:51', '2021-05-21 02:18:51'),
(813, '4', 'افزودن محصول دسته صفحه اصلی-', 'ایجاد', '2021-05-21 02:20:32', '2021-05-21 02:20:32'),
(814, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-05-27 03:02:02', '2021-05-27 03:02:02'),
(815, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-05-27 03:05:43', '2021-05-27 03:05:43'),
(816, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-05-27 03:05:54', '2021-05-27 03:05:54'),
(817, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-05-27 03:06:12', '2021-05-27 03:06:12'),
(818, '4', 'افزودن بنر-', 'ایجاد', '2021-05-28 03:27:14', '2021-05-28 03:27:14'),
(819, '4', 'افزودن بنر-', 'ایجاد', '2021-05-28 03:28:50', '2021-05-28 03:28:50'),
(820, '4', 'افزودن بنر-', 'ایجاد', '2021-05-28 03:32:33', '2021-05-28 03:32:33'),
(821, '4', 'افزودن بنر-', 'ایجاد', '2021-05-28 03:32:49', '2021-05-28 03:32:49'),
(822, '4', 'افزودن بنر-', 'ایجاد', '2021-05-28 03:34:20', '2021-05-28 03:34:20'),
(823, '4', 'افزودن بنر-', 'ایجاد', '2021-05-28 03:34:46', '2021-05-28 03:34:46'),
(824, '4', 'افزودن بنر-', 'ایجاد', '2021-05-28 03:35:01', '2021-05-28 03:35:01'),
(825, '4', 'افزودن بنر-', 'ایجاد', '2021-05-28 03:35:19', '2021-05-28 03:35:19'),
(826, '4', 'حذف کردن بنر-گوشی موبایل', 'حذف', '2021-05-31 11:03:28', '2021-05-31 11:03:28'),
(827, '4', 'حذف کردن بنر-مچ بند و ساعت هوشمند', 'حذف', '2021-05-31 11:03:51', '2021-05-31 11:03:51'),
(828, '4', 'حذف کردن بنر-لوازم جانبی موبایل', 'حذف', '2021-05-31 11:03:52', '2021-05-31 11:03:52'),
(829, '4', 'حذف کردن بنر-انواع تبلت', 'حذف', '2021-05-31 11:04:19', '2021-05-31 11:04:19'),
(830, '4', 'حذف کردن بنر-هدفون', 'حذف', '2021-05-31 11:09:17', '2021-05-31 11:09:17'),
(831, '4', 'حذف کردن بنر-دوربین', 'حذف', '2021-05-31 11:09:18', '2021-05-31 11:09:18'),
(832, '4', 'حذف کردن بنر-پاوربانک', 'حذف', '2021-05-31 11:09:19', '2021-05-31 11:09:19'),
(833, '4', 'افزودن بنر-', 'ایجاد', '2021-05-31 11:09:38', '2021-05-31 11:09:38'),
(834, '4', 'افزودن بنر-', 'ایجاد', '2021-05-31 11:10:03', '2021-05-31 11:10:03'),
(835, '4', 'افزودن بنر-', 'ایجاد', '2021-05-31 11:10:22', '2021-05-31 11:10:22'),
(836, '4', 'افزودن بنر-', 'ایجاد', '2021-05-31 11:29:54', '2021-05-31 11:29:54'),
(837, '4', 'افزودن بنر-', 'ایجاد', '2021-05-31 11:32:33', '2021-05-31 11:32:33'),
(838, '4', 'حذف کردن بنر-سبی', 'حذف', '2021-05-31 11:32:38', '2021-05-31 11:32:38'),
(839, '4', 'افزودن بنر-', 'ایجاد', '2021-05-31 11:33:02', '2021-05-31 11:33:02'),
(840, '4', 'افزودن بنر-', 'ایجاد', '2021-05-31 11:33:15', '2021-05-31 11:33:15'),
(841, '4', 'افزودن بنر-', 'ایجاد', '2021-05-31 11:33:29', '2021-05-31 11:33:29'),
(842, '4', 'افزودن دسته-', 'ایجاد', '2021-05-31 12:01:13', '2021-05-31 12:01:13'),
(843, '4', 'حذف کردن دسته-klsdj', 'حذف', '2021-05-31 12:01:25', '2021-05-31 12:01:25'),
(844, '4', 'آپدیت دسته-کالای دیجیتال', 'آپدیت', '2021-05-31 12:01:49', '2021-05-31 12:01:49'),
(845, '4', 'آپدیت دسته-کالای دیجیتال', 'آپدیت', '2021-05-31 23:14:50', '2021-05-31 23:14:50'),
(846, '4', 'آپدیت دسته-کالای دیجیتال', 'آپدیت', '2021-05-31 23:16:49', '2021-05-31 23:16:49'),
(847, '4', 'افزودن عناوین-', 'ایجاد', '2021-06-01 01:41:40', '2021-06-01 01:41:40'),
(848, '4', 'افزودن عناوین-', 'ایجاد', '2021-06-01 01:41:47', '2021-06-01 01:41:47'),
(849, '4', 'افزودن عناوین-', 'ایجاد', '2021-06-01 01:42:36', '2021-06-01 01:42:36'),
(850, '4', 'حذف کردن عناوین-jsj', 'حذف', '2021-06-01 01:44:19', '2021-06-01 01:44:19'),
(851, '4', 'افزودن عناوین-', 'ایجاد', '2021-06-01 02:26:21', '2021-06-01 02:26:21'),
(852, '4', 'حذف کردن عناوین-gfgf', 'حذف', '2021-06-01 02:26:30', '2021-06-01 02:26:30'),
(853, '4', 'افزودن عناوین-', 'ایجاد', '2021-06-01 02:29:46', '2021-06-01 02:29:46'),
(854, '4', 'حذف کردن عناوین-dfggdf', 'حذف', '2021-06-01 02:29:49', '2021-06-01 02:29:49'),
(855, '4', 'افزودن محصول-', 'ایجاد', '2021-06-03 00:26:49', '2021-06-03 00:26:49'),
(856, '4', 'افزودن محصول-', 'ایجاد', '2021-06-03 00:32:49', '2021-06-03 00:32:49'),
(857, '4', 'حذف کردن محصول-1', 'حذف', '2021-06-03 00:32:52', '2021-06-03 00:32:52'),
(858, '4', 'افزودن محصول-', 'ایجاد', '2021-06-03 01:18:27', '2021-06-03 01:18:27'),
(859, '4', 'افزودن محصول-', 'ایجاد', '2021-06-03 01:18:42', '2021-06-03 01:18:42'),
(860, '4', 'آپدیت دسته-خودرو، ابزار و تجهیزات صنعتی', 'آپدیت', '2021-06-10 02:30:27', '2021-06-10 02:30:27'),
(861, '4', 'آپدیت دسته-خودرو، ابزار و تجهیزات صنعتی', 'آپدیت', '2021-06-10 12:45:33', '2021-06-10 12:45:33'),
(862, '4', 'آپدیت زیردسته-واقعیت مجازی', 'آپدیت', '2021-06-10 12:47:20', '2021-06-10 12:47:20'),
(863, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-06-10 14:47:52', '2021-06-10 14:47:52'),
(864, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-06-10 14:49:19', '2021-06-10 14:49:19'),
(865, '4', 'غیرفعال کردن اسلایدر-لوازم باغبانی', 'غیرفعال', '2021-06-10 14:50:44', '2021-06-10 14:50:44'),
(866, '4', 'فعال کردن اسلایدر-لوازم باغبانی', 'فعال', '2021-06-10 14:50:45', '2021-06-10 14:50:45'),
(867, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-06-10 14:52:50', '2021-06-10 14:52:50'),
(868, '4', 'غیرفعال کردن وضعیت پیشنهاد شگفت انگیز-1', 'غیرفعال', '2021-06-10 14:52:52', '2021-06-10 14:52:52'),
(869, '4', 'فعال کردن وضعیت پیشنهاد شگفت انگیز-1', 'فعال', '2021-06-10 14:52:53', '2021-06-10 14:52:53'),
(870, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-06-10 14:53:14', '2021-06-10 14:53:14'),
(871, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-06-10 14:53:27', '2021-06-10 14:53:27'),
(872, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-06-10 14:53:37', '2021-06-10 14:53:37'),
(873, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-06-10 14:53:57', '2021-06-10 14:53:57'),
(874, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-06-10 14:54:11', '2021-06-10 14:54:11'),
(875, '4', 'حذف کردن پیشنهاد شگفت انگیز-1', 'حذف', '2021-06-10 14:54:22', '2021-06-10 14:54:22'),
(876, '4', 'افزودن عناوین-', 'ایجاد', '2021-06-10 14:58:07', '2021-06-10 14:58:07'),
(877, '4', 'افزودن عناوین-', 'ایجاد', '2021-06-10 14:58:30', '2021-06-10 14:58:30'),
(878, '4', 'افزودن عناوین-', 'ایجاد', '2021-06-10 14:58:52', '2021-06-10 14:58:52'),
(879, '4', 'افزودن محصول-', 'ایجاد', '2021-06-10 15:00:19', '2021-06-10 15:00:19'),
(880, '4', 'افزودن محصول-', 'ایجاد', '2021-06-10 15:00:27', '2021-06-10 15:00:27'),
(881, '4', 'افزودن محصول-', 'ایجاد', '2021-06-10 15:00:43', '2021-06-10 15:00:43'),
(882, '4', 'افزودن بنر-', 'ایجاد', '2021-06-10 15:07:27', '2021-06-10 15:07:27'),
(883, '4', 'افزودن بنر-', 'ایجاد', '2021-06-10 15:07:45', '2021-06-10 15:07:45'),
(884, '4', 'افزودن بنر-', 'ایجاد', '2021-06-10 15:07:51', '2021-06-10 15:07:51'),
(885, '4', 'افزودن بنر-', 'ایجاد', '2021-06-10 15:07:56', '2021-06-10 15:07:56'),
(886, '4', 'افزودن بنر-', 'ایجاد', '2021-06-10 15:08:01', '2021-06-10 15:08:01'),
(887, '4', 'افزودن بنر-', 'ایجاد', '2021-06-10 15:08:06', '2021-06-10 15:08:06'),
(888, '4', 'افزودن بنر-', 'ایجاد', '2021-06-10 15:08:11', '2021-06-10 15:08:11'),
(889, '4', 'افزودن بنر-', 'ایجاد', '2021-06-10 15:08:16', '2021-06-10 15:08:16'),
(890, '4', 'افزودن بنر-', 'ایجاد', '2021-06-10 15:08:21', '2021-06-10 15:08:21'),
(891, '4', 'افزودن بنر-', 'ایجاد', '2021-06-10 15:08:27', '2021-06-10 15:08:27'),
(892, '4', 'آپدیت دسته-مد و پوشاک', 'آپدیت', '2021-06-13 02:52:25', '2021-06-13 02:52:25'),
(893, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-06-13 02:53:04', '2021-06-13 02:53:04'),
(894, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-06-13 02:53:17', '2021-06-13 02:53:17'),
(895, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-06-13 02:53:28', '2021-06-13 02:53:28'),
(896, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-06-13 02:53:55', '2021-06-13 02:53:55'),
(897, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-06-13 02:59:12', '2021-06-13 02:59:12'),
(898, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-06-13 03:00:02', '2021-06-13 03:00:02'),
(899, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-06-13 03:03:20', '2021-06-13 03:03:20'),
(900, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-06-13 03:03:31', '2021-06-13 03:03:31'),
(901, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-06-13 03:03:47', '2021-06-13 03:03:47'),
(902, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-06-13 03:03:58', '2021-06-13 03:03:58'),
(903, '4', 'فعال کردن وضعیت پیشنهاد شگفت انگیز-1', 'فعال', '2021-06-13 03:04:00', '2021-06-13 03:04:00'),
(904, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-06-13 03:04:14', '2021-06-13 03:04:14'),
(905, '4', 'افزودن بنر-', 'ایجاد', '2021-06-13 03:08:39', '2021-06-13 03:08:39'),
(906, '4', 'افزودن بنر-', 'ایجاد', '2021-06-13 03:08:59', '2021-06-13 03:08:59'),
(907, '4', 'افزودن بنر-', 'ایجاد', '2021-06-13 03:09:09', '2021-06-13 03:09:09'),
(908, '4', 'افزودن بنر-', 'ایجاد', '2021-06-13 03:09:19', '2021-06-13 03:09:19'),
(909, '4', 'افزودن بنر-', 'ایجاد', '2021-06-13 03:10:14', '2021-06-13 03:10:14'),
(910, '4', 'افزودن بنر-', 'ایجاد', '2021-06-13 03:10:25', '2021-06-13 03:10:25'),
(911, '4', 'افزودن بنر-', 'ایجاد', '2021-06-13 03:10:41', '2021-06-13 03:10:41'),
(912, '4', 'افزودن بنر-', 'ایجاد', '2021-06-13 03:10:50', '2021-06-13 03:10:50'),
(913, '4', 'افزودن عناوین-', 'ایجاد', '2021-06-13 03:59:17', '2021-06-13 03:59:17'),
(914, '4', 'افزودن عناوین-', 'ایجاد', '2021-06-13 03:59:35', '2021-06-13 03:59:35'),
(915, '4', 'افزودن محصول-', 'ایجاد', '2021-06-13 04:00:35', '2021-06-13 04:00:35'),
(916, '4', 'افزودن محصول-', 'ایجاد', '2021-06-13 04:00:45', '2021-06-13 04:00:45'),
(917, '4', 'افزودن محصول-', 'ایجاد', '2021-06-13 04:00:52', '2021-06-13 04:00:52'),
(918, '4', 'افزودن محصول-', 'ایجاد', '2021-06-13 04:01:06', '2021-06-13 04:01:06'),
(919, '4', 'افزودن محصول-', 'ایجاد', '2021-06-13 04:19:01', '2021-06-13 04:19:01'),
(920, '4', 'افزودن محصول-', 'ایجاد', '2021-06-13 04:19:06', '2021-06-13 04:19:06'),
(921, '4', 'افزودن محصول-', 'ایجاد', '2021-06-13 04:19:09', '2021-06-13 04:19:09'),
(922, '4', 'آپدیت دسته-اسباب بازی، کودک و نوزاد', 'آپدیت', '2021-06-17 11:54:58', '2021-06-17 11:54:58'),
(923, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-06-19 05:33:28', '2021-06-19 05:33:28'),
(924, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-06-19 05:34:16', '2021-06-19 05:34:16'),
(925, '4', 'غیرفعال کردن اسلایدر-هدفون و هندزفری', 'غیرفعال', '2021-06-19 05:34:20', '2021-06-19 05:34:20'),
(926, '4', 'فعال کردن اسلایدر-هدفون و هندزفری', 'فعال', '2021-06-19 05:34:21', '2021-06-19 05:34:21'),
(927, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-06-19 05:34:41', '2021-06-19 05:34:41'),
(928, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-06-19 05:35:13', '2021-06-19 05:35:13'),
(929, '4', 'افزودن اسلایدر-', 'ایجاد', '2021-06-19 05:35:26', '2021-06-19 05:35:26'),
(930, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-07-03 05:34:43', '2021-07-03 05:34:43'),
(931, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-07-03 05:35:19', '2021-07-03 05:35:19'),
(932, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-07-03 05:36:05', '2021-07-03 05:36:05'),
(933, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-07-03 05:36:22', '2021-07-03 05:36:22'),
(934, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-07-03 05:36:35', '2021-07-03 05:36:35'),
(935, '4', 'افزودن پیشنهاد شگفت انگیز-', 'ایجاد', '2021-07-03 05:36:55', '2021-07-03 05:36:55'),
(936, '4', 'آپدیت دسته-کالاهای سوپرمارکتی', 'آپدیت', '2021-07-03 05:40:16', '2021-07-03 05:40:16'),
(937, '4', 'افزودن بنر-', 'ایجاد', '2021-07-03 05:45:30', '2021-07-03 05:45:30'),
(938, '4', 'افزودن بنر-', 'ایجاد', '2021-07-03 05:46:17', '2021-07-03 05:46:17'),
(939, '4', 'افزودن بنر-', 'ایجاد', '2021-07-03 05:46:49', '2021-07-03 05:46:49'),
(940, '4', 'افزودن بنر-', 'ایجاد', '2021-07-03 05:47:05', '2021-07-03 05:47:05'),
(941, '4', 'افزودن بنر-', 'ایجاد', '2021-07-03 05:47:41', '2021-07-03 05:47:41'),
(942, '4', 'افزودن بنر-', 'ایجاد', '2021-07-03 05:48:41', '2021-07-03 05:48:41'),
(943, '4', 'افزودن بنر-', 'ایجاد', '2021-07-03 05:49:07', '2021-07-03 05:49:07'),
(944, '4', 'افزودن بنر-', 'ایجاد', '2021-07-03 05:54:18', '2021-07-03 05:54:18'),
(945, '4', 'افزودن بنر-', 'ایجاد', '2021-07-03 05:55:15', '2021-07-03 05:55:15'),
(946, '4', 'حذف کردن بنر-shatel', 'حذف', '2021-07-03 05:56:14', '2021-07-03 05:56:14'),
(947, '4', 'افزودن بنر-', 'ایجاد', '2021-07-03 05:56:28', '2021-07-03 05:56:28'),
(948, '4', 'افزودن عناوین-', 'ایجاد', '2021-07-03 06:37:37', '2021-07-03 06:37:37'),
(949, '4', 'افزودن عناوین-', 'ایجاد', '2021-07-03 06:38:12', '2021-07-03 06:38:12'),
(950, '4', 'افزودن عناوین-', 'ایجاد', '2021-07-03 06:38:24', '2021-07-03 06:38:24'),
(951, '4', 'افزودن محصول-', 'ایجاد', '2021-07-03 06:42:56', '2021-07-03 06:42:56'),
(952, '4', 'افزودن محصول-', 'ایجاد', '2021-07-03 06:43:44', '2021-07-03 06:43:44'),
(953, '4', 'افزودن محصول-', 'ایجاد', '2021-07-03 06:44:03', '2021-07-03 06:44:03'),
(954, '4', 'افزودن عناوین-', 'ایجاد', '2021-07-03 06:45:38', '2021-07-03 06:45:38'),
(955, '4', 'افزودن محصول-', 'ایجاد', '2021-07-03 06:45:50', '2021-07-03 06:45:50'),
(956, '4', 'افزودن محصول-', 'ایجاد', '2021-07-03 07:10:49', '2021-07-03 07:10:49'),
(957, '4', 'افزودن محصول-', 'ایجاد', '2021-07-03 07:10:53', '2021-07-03 07:10:53'),
(958, '4', 'افزودن محصول-', 'ایجاد', '2021-07-03 07:10:56', '2021-07-03 07:10:56'),
(959, '4', 'افزودن محصول-', 'ایجاد', '2021-07-03 07:10:59', '2021-07-03 07:10:59'),
(960, '4', 'افزودن محصول-', 'ایجاد', '2021-07-03 07:11:03', '2021-07-03 07:11:03'),
(961, '4', 'افزودن محصول-', 'ایجاد', '2021-07-03 07:11:07', '2021-07-03 07:11:07'),
(962, '4', 'حذف کردن محصول-8', 'حذف', '2021-07-03 07:11:11', '2021-07-03 07:11:11'),
(963, '4', 'افزودن محصول-', 'ایجاد', '2021-07-03 07:11:16', '2021-07-03 07:11:16'),
(964, '4', 'افزودن محصول-', 'ایجاد', '2021-07-03 07:11:23', '2021-07-03 07:11:23'),
(965, '4', 'افزودن محصول-', 'ایجاد', '2021-07-03 07:11:26', '2021-07-03 07:11:26'),
(966, '4', 'آپدیت دسته-اسباب بازی، کودک و نوزاد', 'آپدیت', '2021-07-03 07:26:55', '2021-07-03 07:26:55'),
(967, '4', 'آپدیت دسته-خودرو، ابزار و تجهیزات صنعتی', 'آپدیت', '2021-07-03 07:35:56', '2021-07-03 07:35:56'),
(968, '4', 'افزودن زیر دسته-', 'ایجاد', '2021-07-10 04:52:47', '2021-07-10 04:52:47'),
(969, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-07-10 04:56:47', '2021-07-10 04:56:47'),
(970, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-07-10 04:57:12', '2021-07-10 04:57:12'),
(971, '4', 'آپدیت دسته کودک-لوازم جانبی تبلت', 'آپدیت', '2021-07-10 04:57:41', '2021-07-10 04:57:41'),
(972, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-07-10 04:57:53', '2021-07-10 04:57:53'),
(973, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-07-10 04:58:06', '2021-07-10 04:58:06'),
(974, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-07-10 04:58:16', '2021-07-10 04:58:16'),
(975, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-07-10 04:58:26', '2021-07-10 04:58:26'),
(976, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-07-10 04:58:35', '2021-07-10 04:58:35'),
(977, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-07-10 04:58:44', '2021-07-10 04:58:44'),
(978, '4', 'افزودن دسته کودک-', 'ایجاد', '2021-07-10 04:58:57', '2021-07-10 04:58:57'),
(979, '4', 'افزودن دسته سطح 4-', 'ایجاد', '2021-07-10 06:03:23', '2021-07-10 06:03:23'),
(980, '4', 'افزودن دسته سطح 4-', 'ایجاد', '2021-07-10 06:04:09', '2021-07-10 06:04:09'),
(981, '4', 'افزودن دسته سطح 4-', 'ایجاد', '2021-07-10 06:06:21', '2021-07-10 06:06:21'),
(982, '4', 'افزودن دسته سطح 4-', 'ایجاد', '2021-07-10 06:07:13', '2021-07-10 06:07:13'),
(983, '4', 'غیرفعال کردن وضعیت دسته سطح 4-سییس', 'غیرفعال', '2021-07-10 06:08:32', '2021-07-10 06:08:32'),
(984, '4', 'فعال کردن وضعیت دسته سطح 4-سییس', 'فعال', '2021-07-10 06:08:33', '2021-07-10 06:08:33'),
(985, '4', 'حذف کردن دسته سطح 4-سییس', 'حذف', '2021-07-10 06:16:09', '2021-07-10 06:16:09'),
(986, '4', 'آپدیت دسته کودک-پایه نگهدارنده گوشی و تبلت', 'آپدیت', '2021-07-10 07:12:26', '2021-07-10 07:12:26'),
(987, '4', 'آپدیت دسته کودک-پایه نگهدارنده گوشی و تبلت', 'آپدیت', '2021-07-10 07:13:15', '2021-07-10 07:13:15'),
(988, '4', 'بازیابی دسته سطح چهارم-سییس', 'بازیابی', '2021-07-10 07:15:43', '2021-07-10 07:15:43'),
(989, '4', 'حذف کردن دسته سطح 4-سییس', 'حذف', '2021-07-10 07:15:49', '2021-07-10 07:15:49'),
(990, '4', 'افزودن محصول-کاور لوکسار مدل Defence90s مناسب برای گوشی موبایل سامسونگ Galaxy S20 Ultra', 'ایجاد', '2021-07-10 07:24:15', '2021-07-10 07:24:15'),
(991, '4', 'آپدیت محصول-کاور جوی روم مدل JR-BP277 مناسب برای گوشی موبایل سامسونگ Galaxy S8Plus', 'آپدیت', '2021-07-10 07:29:33', '2021-07-10 07:29:33'),
(992, '4', 'افزودن دسته های زیردسته ها-', 'ایجاد', '2021-07-10 09:49:02', '2021-07-10 09:49:02'),
(993, '4', 'حذف کردن دسته های زیردسته ها-1', 'حذف', '2021-07-10 09:49:06', '2021-07-10 09:49:06'),
(994, '4', 'حذف کردن دسته های زیردسته ها-1', 'حذف', '2021-07-10 09:49:42', '2021-07-10 09:49:42'),
(995, '4', 'افزودن دسته های زیردسته ها-', 'ایجاد', '2021-07-10 09:49:49', '2021-07-10 09:49:49'),
(996, '4', 'افزودن دسته های زیردسته ها-', 'ایجاد', '2021-07-10 09:50:06', '2021-07-10 09:50:06'),
(997, '4', 'افزودن دسته های زیردسته ها-', 'ایجاد', '2021-07-10 10:07:36', '2021-07-10 10:07:36'),
(998, '4', 'افزودن دسته های زیردسته ها-', 'ایجاد', '2021-07-10 10:09:58', '2021-07-10 10:09:58'),
(999, '4', 'افزودن دسته های زیردسته ها-', 'ایجاد', '2021-07-10 10:11:35', '2021-07-10 10:11:35'),
(1000, '4', 'افزودن دسته های زیردسته ها-', 'ایجاد', '2021-07-10 10:11:56', '2021-07-10 10:11:56'),
(1001, '4', 'آپدیت دسته کودک-لوازم جانبی گوشی موبایل', 'آپدیت', '2021-07-10 10:29:18', '2021-07-10 10:29:18'),
(1002, '4', 'آپدیت دسته کودک-لوازم جانبی کامپیوتر', 'آپدیت', '2021-07-10 10:29:29', '2021-07-10 10:29:29'),
(1003, '4', 'آپدیت دسته کودک-لوازم جانبی اداری', 'آپدیت', '2021-07-10 10:29:41', '2021-07-10 10:29:41'),
(1004, '4', 'آپدیت برند-', 'آپدیت', '2021-07-29 06:42:47', '2021-07-29 06:42:47'),
(1005, '4', 'آپدیت برند-', 'آپدیت', '2021-07-29 06:42:53', '2021-07-29 06:42:53'),
(1006, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-07-29 07:18:21', '2021-07-29 07:18:21'),
(1007, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-07-29 07:21:07', '2021-07-29 07:21:07'),
(1008, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-07-29 07:22:58', '2021-07-29 07:22:58'),
(1009, '4', 'آپدیت زیردسته-گوشی موبایل', 'آپدیت', '2021-07-30 03:34:39', '2021-07-30 03:34:39'),
(1010, '4', 'آپدیت زیردسته-گوشی موبایل', 'آپدیت', '2021-07-30 03:37:41', '2021-07-30 03:37:41'),
(1011, '4', 'آپدیت زیردسته-گوشی موبایل', 'آپدیت', '2021-07-30 03:38:12', '2021-07-30 03:38:12'),
(1012, '4', 'آپدیت زیردسته-گوشی موبایل', 'آپدیت', '2021-07-30 03:38:37', '2021-07-30 03:38:37'),
(1013, '4', 'آپدیت زیردسته-گوشی موبایل', 'آپدیت', '2021-07-30 03:39:55', '2021-07-30 03:39:55'),
(1014, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-07-30 03:55:37', '2021-07-30 03:55:37'),
(1015, '4', 'افزودن مشخصات کالا-', 'ایجاد', '2021-07-30 07:29:11', '2021-07-30 07:29:11'),
(1016, '4', 'افزودن مشخصات کالا-', 'ایجاد', '2021-07-30 07:29:26', '2021-07-30 07:29:26'),
(1017, '4', 'افزودن مشخصات کالا-', 'ایجاد', '2021-07-30 07:29:42', '2021-07-30 07:29:42'),
(1018, '4', 'افزودن مشخصات کالا-', 'ایجاد', '2021-07-30 07:29:56', '2021-07-30 07:29:56'),
(1019, '4', 'افزودن مقدار مشخصه کالا-', 'ایجاد', '2021-07-30 07:30:36', '2021-07-30 07:30:36'),
(1020, '4', 'افزودن مقدار مشخصه کالا-', 'ایجاد', '2021-07-30 07:30:59', '2021-07-30 07:30:59'),
(1021, '4', 'افزودن مقدار مشخصه کالا-', 'ایجاد', '2021-07-30 07:31:11', '2021-07-30 07:31:11'),
(1022, '4', 'افزودن مقدار مشخصه کالا-', 'ایجاد', '2021-07-30 07:31:24', '2021-07-30 07:31:24'),
(1023, '4', 'افزودن مشخصات کالا-', 'ایجاد', '2021-07-30 07:32:05', '2021-07-30 07:32:05'),
(1024, '4', 'افزودن مشخصات کالا-', 'ایجاد', '2021-07-30 07:32:19', '2021-07-30 07:32:19'),
(1025, '4', 'افزودن مشخصات کالا-', 'ایجاد', '2021-07-30 07:32:32', '2021-07-30 07:32:32'),
(1026, '4', 'افزودن مقدار مشخصه کالا-', 'ایجاد', '2021-07-30 07:32:50', '2021-07-30 07:32:50'),
(1027, '4', 'افزودن مقدار مشخصه کالا-', 'ایجاد', '2021-07-30 07:33:03', '2021-07-30 07:33:03'),
(1028, '4', 'افزودن مقدار مشخصه کالا-', 'ایجاد', '2021-07-30 07:33:16', '2021-07-30 07:33:16'),
(1029, '4', 'افزودن فروشنده-رضا', 'ایجاد', '2021-09-01 03:38:38', '2021-09-01 03:38:38'),
(1030, '4', 'افزودن فروشنده-علی', 'ایجاد', '2021-09-01 03:42:28', '2021-09-01 03:42:28'),
(1031, '4', 'افزودن فروشنده-توحید', 'ایجاد', '2021-09-01 03:53:51', '2021-09-01 03:53:51'),
(1032, '4', 'افزودن فروشنده-توحید', 'ایجاد', '2021-09-01 03:57:56', '2021-09-01 03:57:56'),
(1033, '4', 'افزودن فروشنده-توحید', 'ایجاد', '2021-09-01 03:58:58', '2021-09-01 03:58:58'),
(1034, '4', 'حذف کردن فروشنده-', 'حذف', '2021-09-01 04:00:56', '2021-09-01 04:00:56'),
(1035, '4', 'حذف کردن فروشنده-', 'حذف', '2021-09-01 04:01:28', '2021-09-01 04:01:28'),
(1036, '4', 'آپدیت فروشنده-رضا', 'آپدیت', '2021-09-01 04:46:32', '2021-09-01 04:46:32'),
(1037, '4', 'آپدیت فروشنده-رضا', 'آپدیت', '2021-09-01 04:46:45', '2021-09-01 04:46:45'),
(1038, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-09-01 05:22:02', '2021-09-01 05:22:02'),
(1039, '4', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-09-01 05:24:37', '2021-09-01 05:24:37'),
(1040, '6', 'افزودن بنر پروفایل-', 'ایجاد', '2021-09-17 08:55:51', '2021-09-17 08:55:51'),
(1041, '6', 'افزودن بنر پروفایل-', 'ایجاد', '2021-09-17 08:57:20', '2021-09-17 08:57:20'),
(1042, '6', 'افزودن بنر پروفایل-', 'ایجاد', '2021-09-17 08:57:50', '2021-09-17 08:57:50'),
(1043, '6', 'افزودن بنر پروفایل-', 'ایجاد', '2021-09-17 09:02:23', '2021-09-17 09:02:23'),
(1044, '6', 'افزودن بنر پروفایل-', 'ایجاد', '2021-09-17 09:02:45', '2021-09-17 09:02:45'),
(1045, '6', 'آپدیت بنر-منتخب محصولات پرفروش کیف و کاور گوشی', 'آپدیت', '2021-09-17 09:06:15', '2021-09-17 09:06:15'),
(1046, '1', 'حذف کردن علاقه مندی-4', 'حذف', '2021-09-25 11:18:43', '2021-09-25 11:18:43'),
(1047, '1', 'حذف کردن علاقه مندی-5', 'حذف', '2021-09-25 11:20:12', '2021-09-25 11:20:12'),
(1048, '1', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-09-25 11:52:41', '2021-09-25 11:52:41'),
(1049, '1', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-09-25 11:53:32', '2021-09-25 11:53:32'),
(1050, '1', 'حذف کردن اطلاع رسانی-3', 'حذف', '2021-09-25 18:35:31', '2021-09-25 18:35:31'),
(1051, '1', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-10-10 06:21:46', '2021-10-10 06:21:46'),
(1052, '1', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-10-10 06:22:34', '2021-10-10 06:22:34'),
(1053, '1', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-10-10 06:23:48', '2021-10-10 06:23:48'),
(1054, '1', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-10-10 12:43:31', '2021-10-10 12:43:31'),
(1055, '1', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-10-10 12:44:20', '2021-10-10 12:44:20');
INSERT INTO `logs` (`id`, `user_id`, `url`, `actionType`, `created_at`, `updated_at`) VALUES
(1056, '1', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-10-10 12:54:43', '2021-10-10 12:54:43'),
(1057, '1', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-10-10 13:01:26', '2021-10-10 13:01:26'),
(1058, '1', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-10-10 14:41:06', '2021-10-10 14:41:06'),
(1059, '1', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-10-10 14:43:06', '2021-10-10 14:43:06'),
(1060, '1', 'آپدیت محصول-گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'آپدیت', '2021-10-10 14:52:48', '2021-10-10 14:52:48'),
(1061, '1', 'افزودن کارت هدیه-نیما پورحسین', 'ایجاد', '2021-10-11 01:56:44', '2021-10-11 01:56:44'),
(1062, '1', 'افزودن کارت هدیه-نیما پورحسین', 'ایجاد', '2021-10-11 01:57:09', '2021-10-11 01:57:09'),
(1063, '1', 'افزودن کارت هدیه-نیما پورحسین', 'ایجاد', '2021-10-11 02:08:36', '2021-10-11 02:08:36'),
(1064, '1', 'افزودن کارت هدیه-نیما پورحسین', 'ایجاد', '2021-10-11 02:08:58', '2021-10-11 02:08:58'),
(1065, '1', 'افزودن کارت هدیه-نیما پورحسین', 'ایجاد', '2021-10-11 02:10:08', '2021-10-11 02:10:08'),
(1066, '1', 'حذف کردن کارت هدیه-5878586', 'حذف', '2021-10-11 02:14:11', '2021-10-11 02:14:11'),
(1067, '1', 'آپدیت محصول-شارژر دیواری هوآوی مدل HW-059', 'آپدیت', '2021-10-12 12:58:10', '2021-10-12 12:58:10'),
(1068, '1', 'آپدیت تنوع محصول-2', 'آپدیت', '2021-10-12 16:42:56', '2021-10-12 16:42:56'),
(1069, '1', 'فعال کردن موجودی انبار فروشنده در تنوع قیمت محصول-', 'فعال', '2021-10-12 16:46:02', '2021-10-12 16:46:02'),
(1070, '1', 'غیرفعال کردن موجودی انبار فروشنده در تنوع قیمت محصول-', 'غیرفعال', '2021-10-12 16:46:04', '2021-10-12 16:46:04'),
(1071, '1', 'فعال کردن موجودی انبار فروشنده در تنوع قیمت محصول-', 'فعال', '2021-10-12 16:46:06', '2021-10-12 16:46:06'),
(1072, '1', 'فعال کردن موجودی انبار فروشنده در تنوع قیمت محصول-', 'فعال', '2021-10-12 16:48:32', '2021-10-12 16:48:32'),
(1073, '1', 'افزودن تنوع قیمت محصول-', 'ایجاد', '2021-10-12 19:16:36', '2021-10-12 19:16:36'),
(1074, '1', 'آپدیت تنوع محصول-2', 'آپدیت', '2021-10-12 19:17:38', '2021-10-12 19:17:38'),
(1075, '1', 'آپدیت تنوع محصول-2', 'آپدیت', '2021-10-12 19:17:49', '2021-10-12 19:17:49'),
(1076, '1', 'آپدیت تنوع محصول-2', 'آپدیت', '2021-10-12 19:17:55', '2021-10-12 19:17:55'),
(1077, '1', 'آپدیت تنوع محصول-2', 'آپدیت', '2021-10-12 19:18:20', '2021-10-12 19:18:20'),
(1078, '1', 'آپدیت تنوع محصول-4', 'آپدیت', '2021-10-12 19:18:40', '2021-10-12 19:18:40'),
(1079, '1', 'آپدیت تنوع محصول-2', 'آپدیت', '2021-10-12 20:17:58', '2021-10-12 20:17:58'),
(1080, '1', 'آپدیت تنوع محصول-2', 'آپدیت', '2021-10-13 08:03:23', '2021-10-13 08:03:23'),
(1081, '1', 'آپدیت تنوع محصول-2', 'آپدیت', '2021-10-13 08:04:24', '2021-10-13 08:04:24'),
(1082, '1', 'آپدیت تنوع محصول-2', 'آپدیت', '2021-10-13 08:08:53', '2021-10-13 08:08:53'),
(1083, '1', 'غیرفعال کردن موجودی انبار فروشنده در تنوع قیمت محصول-', 'غیرفعال', '2021-10-16 06:57:25', '2021-10-16 06:57:25'),
(1084, '1', 'آپدیت تنوع محصول-2', 'آپدیت', '2021-10-17 05:44:42', '2021-10-17 05:44:42'),
(1085, '1', 'آپدیت تنوع محصول-2', 'آپدیت', '2021-10-17 06:22:00', '2021-10-17 06:22:00'),
(1086, '1', 'افزودن آدرس-', 'ایجاد', '2021-10-23 23:41:29', '2021-10-23 23:41:29'),
(1087, '1', 'افزودن آدرس-', 'ایجاد', '2021-10-23 23:41:50', '2021-10-23 23:41:50'),
(1088, '1', 'افزودن آدرس-', 'ایجاد', '2021-10-23 23:41:57', '2021-10-23 23:41:57'),
(1089, '1', 'افزودن کد تخفیف-نیما پورحسین', 'ایجاد', '2021-10-27 01:49:26', '2021-10-27 01:49:26'),
(1090, '1', 'افزودن کد تخفیف-نیما پورحسین', 'ایجاد', '2021-10-27 23:26:06', '2021-10-27 23:26:06'),
(1091, '1', 'افزودن کد تخفیف-نیما پورحسین', 'ایجاد', '2021-10-27 23:26:54', '2021-10-27 23:26:54'),
(1092, '1', 'افزودن کد تخفیف-نیما پورحسین', 'ایجاد', '2021-10-27 23:27:15', '2021-10-27 23:27:15'),
(1093, '1', 'غیرفعال کردن کد تخفیف-1840963888495', 'حذف', '2021-10-27 23:34:47', '2021-10-27 23:34:47'),
(1094, '1', 'فعال کردن کد تخفیف-1840963888495', 'حذف', '2021-10-27 23:34:47', '2021-10-27 23:34:47'),
(1095, '1', 'غیرفعال کردن کد تخفیف-1840963888495', 'حذف', '2021-10-27 23:34:48', '2021-10-27 23:34:48'),
(1096, '1', 'فعال کردن کد تخفیف-1840963888495', 'حذف', '2021-10-27 23:34:49', '2021-10-27 23:34:49'),
(1097, '1', 'غیرفعال کردن کد تخفیف-1840963888495', 'حذف', '2021-10-27 23:34:50', '2021-10-27 23:34:50'),
(1098, '1', 'فعال کردن کد تخفیف-1840963888495', 'حذف', '2021-10-27 23:34:51', '2021-10-27 23:34:51'),
(1099, '1', 'غیرفعال کردن کد تخفیف-1840963888495', 'حذف', '2021-10-27 23:35:19', '2021-10-27 23:35:19'),
(1100, '1', 'افزودن کد تخفیف-نیما پورحسین', 'ایجاد', '2021-10-27 23:36:50', '2021-10-27 23:36:50'),
(1101, '1', 'افزودن کد تخفیف-نیما پورحسین', 'ایجاد', '2021-10-28 23:21:56', '2021-10-28 23:21:56'),
(1102, '1', 'افزودن کد تخفیف-نیما پورحسین', 'ایجاد', '2021-10-28 23:22:14', '2021-10-28 23:22:14'),
(1103, '1', 'افزودن کارت هدیه-نیما پورحسین', 'ایجاد', '2021-10-28 23:37:30', '2021-10-28 23:37:30'),
(1104, '1', 'افزودن کارت هدیه-نیما پورحسین', 'ایجاد', '2021-10-29 01:19:41', '2021-10-29 01:19:41'),
(1105, '1', 'افزودن کارت هدیه-نیما پورحسین', 'ایجاد', '2021-10-29 01:20:35', '2021-10-29 01:20:35'),
(1106, '1', 'افزودن دلیل مرجوعی-', 'ایجاد', '2021-11-07 00:38:05', '2021-11-07 00:38:05'),
(1107, '1', 'افزودن دلیل مرجوعی-', 'ایجاد', '2021-11-07 00:38:25', '2021-11-07 00:38:25'),
(1108, '1', 'افزودن دلیل مرجوعی-', 'ایجاد', '2021-11-07 00:38:41', '2021-11-07 00:38:41'),
(1109, '1', 'افزودن دلیل مرجوعی-', 'ایجاد', '2021-11-07 00:38:56', '2021-11-07 00:38:56'),
(1110, '1', 'افزودن دلیل مرجوعی-', 'ایجاد', '2021-11-07 00:38:58', '2021-11-07 00:38:58'),
(1111, '1', 'افزودن مقام-', 'ایجاد', '2021-12-06 03:56:02', '2021-12-06 03:56:02'),
(1112, '1', 'افزودن مقام-', 'ایجاد', '2021-12-06 03:56:25', '2021-12-06 03:56:25'),
(1113, '1', 'افزودن مقام-', 'ایجاد', '2021-12-06 03:56:35', '2021-12-06 03:56:35'),
(1114, '1', 'افزودن مقام-', 'ایجاد', '2021-12-06 03:57:00', '2021-12-06 03:57:00'),
(1115, '1', 'افزودن مقام-', 'ایجاد', '2021-12-06 03:57:26', '2021-12-06 03:57:26'),
(1116, '1', 'افزودن مقام-', 'ایجاد', '2021-12-06 03:57:39', '2021-12-06 03:57:39'),
(1117, '1', 'افزودن مقام-', 'ایجاد', '2021-12-06 03:57:56', '2021-12-06 03:57:56'),
(1118, '1', 'افزودن مقام-', 'ایجاد', '2021-12-06 03:58:14', '2021-12-06 03:58:14'),
(1119, '1', 'حذف کردن مقام-تست', 'حذف', '2021-12-06 03:58:16', '2021-12-06 03:58:16'),
(1120, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-06 04:34:34', '2021-12-06 04:34:34'),
(1121, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-06 04:35:02', '2021-12-06 04:35:02'),
(1122, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-06 04:35:33', '2021-12-06 04:35:33'),
(1123, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-06 04:35:45', '2021-12-06 04:35:45'),
(1124, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-06 04:36:01', '2021-12-06 04:36:01'),
(1125, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-06 04:36:12', '2021-12-06 04:36:12'),
(1126, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-06 04:36:24', '2021-12-06 04:36:24'),
(1127, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-06 04:36:50', '2021-12-06 04:36:50'),
(1128, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-06 04:37:10', '2021-12-06 04:37:10'),
(1129, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-06 04:37:24', '2021-12-06 04:37:24'),
(1130, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-06 04:37:40', '2021-12-06 04:37:40'),
(1131, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-06 04:38:07', '2021-12-06 04:38:07'),
(1132, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-06 04:38:51', '2021-12-06 04:38:51'),
(1133, '1', 'حذف کردن دسترسی-سیس', 'حذف', '2021-12-06 04:38:53', '2021-12-06 04:38:53'),
(1134, '1', 'افزودن مقام-', 'ایجاد', '2021-12-06 05:00:25', '2021-12-06 05:00:25'),
(1135, '1', 'افزودن مقام-', 'ایجاد', '2021-12-08 01:51:14', '2021-12-08 01:51:14'),
(1136, '1', 'افزودن مقام-', 'ایجاد', '2021-12-08 01:52:15', '2021-12-08 01:52:15'),
(1137, '1', 'افزودن مقام-', 'ایجاد', '2021-12-08 04:52:20', '2021-12-08 04:52:20'),
(1138, '1', 'افزودن مقام-', 'ایجاد', '2021-12-08 05:02:17', '2021-12-08 05:02:17'),
(1139, '1', 'حذف کردن مقام-دسترسی های جدید', 'حذف', '2021-12-08 05:02:20', '2021-12-08 05:02:20'),
(1140, '1', 'حذف کردن مقام-تست', 'حذف', '2021-12-08 05:02:21', '2021-12-08 05:02:21'),
(1141, '1', 'آپدیت مقام-همکار بخش کد تخفیف', 'آپدیت', '2021-12-09 00:01:43', '2021-12-09 00:01:43'),
(1142, '1', 'آپدیت مقام-همکار بخش کد تخفیف', 'آپدیت', '2021-12-09 00:03:52', '2021-12-09 00:03:52'),
(1143, '1', 'آپدیت مقام-همکار بخش کد تخفیف', 'آپدیت', '2021-12-09 00:04:01', '2021-12-09 00:04:01'),
(1144, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-09 00:42:53', '2021-12-09 00:42:53'),
(1145, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-09 00:43:05', '2021-12-09 00:43:05'),
(1146, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-09 00:43:37', '2021-12-09 00:43:37'),
(1147, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-09 00:48:43', '2021-12-09 00:48:43'),
(1148, '1', 'افزودن دسترسی-', 'ایجاد', '2021-12-09 00:51:36', '2021-12-09 00:51:36'),
(1149, '1', 'افزودن کاربر-', 'ایجاد', '2021-12-09 04:47:38', '2021-12-09 04:47:38'),
(1150, '1', 'افزودن کاربر-', 'ایجاد', '2021-12-09 04:51:09', '2021-12-09 04:51:09'),
(1151, '1', 'افزودن کاربر-', 'ایجاد', '2021-12-09 04:51:43', '2021-12-09 04:51:43'),
(1152, '1', 'افزودن کاربر-', 'ایجاد', '2021-12-09 05:29:39', '2021-12-09 05:29:39'),
(1153, '1', 'آپدیت مقام-همکار بخش محصولات', 'آپدیت', '2021-12-09 08:10:30', '2021-12-09 08:10:30'),
(1154, '1', 'افزودن محصول-', 'ایجاد', '2021-12-23 10:50:33', '2021-12-23 10:50:33'),
(1155, '1', 'حذف کردن مقدار مشخصات کالا-200 گرم', 'حذف', '2021-12-23 10:59:08', '2021-12-23 10:59:08'),
(1156, '1', 'بازیابی مقدار مشخصه کالا-', 'بازیابی', '2021-12-23 10:59:15', '2021-12-23 10:59:15'),
(1157, '1', 'افزودن مقام-', 'ایجاد', '2021-12-23 11:01:52', '2021-12-23 11:01:52'),
(1158, '1', 'آپدیت تنوع محصول-2', 'آپدیت', '2021-12-23 11:13:51', '2021-12-23 11:13:51'),
(1159, '1', 'افزودن کد تخفیف-نیما پورحسین', 'ایجاد', '2022-05-16 08:02:11', '2022-05-16 08:02:11'),
(1160, '1', 'غیرفعال کردن وضعیت دسته-مد و پوشاک', 'غیرفعال', '2022-05-24 12:25:26', '2022-05-24 12:25:26'),
(1161, '1', 'فعال کردن وضعیت دسته-مد و پوشاک', 'فعال', '2022-05-24 12:25:27', '2022-05-24 12:25:27'),
(1162, '1', 'غیرفعال کردن وضعیت دسته-مد و پوشاک', 'غیرفعال', '2022-05-24 12:25:29', '2022-05-24 12:25:29'),
(1163, '1', 'فعال کردن وضعیت دسته-مد و پوشاک', 'فعال', '2022-05-24 12:25:30', '2022-05-24 12:25:30'),
(1164, '1', 'افزودن تصویر محصول-', 'ایجاد', '2022-05-24 12:30:29', '2022-05-24 12:30:29'),
(1165, '1', 'فعال کردن وضعیت محصول-محصول اول', 'فعال', '2022-07-24 13:37:28', '2022-07-24 13:37:28'),
(1166, '1', 'غیرفعال کردن وضعیت محصول-محصول اول', 'غیرفعال', '2022-07-24 13:37:29', '2022-07-24 13:37:29'),
(1167, '1', 'بازیابی محصول-تست', 'بازیابی', '2022-07-24 13:37:34', '2022-07-24 13:37:34'),
(1168, '1', 'آپدیت دسته-مد و پوشاک', 'آپدیت', '2022-07-24 13:39:04', '2022-07-24 13:39:04'),
(1169, '1', 'آپدیت دسته-مد و پوشاک', 'آپدیت', '2022-07-24 13:42:16', '2022-07-24 13:42:16'),
(1170, '1', 'آپدیت دسته-مد و پوشاک', 'آپدیت', '2022-07-24 13:45:44', '2022-07-24 13:45:44'),
(1171, '1', 'آپدیت برند-', 'آپدیت', '2022-07-24 13:51:43', '2022-07-24 13:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `childCategory_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `category_id`, `subCategory_id`, `childCategory_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '1', NULL, '1', '2021-04-27 02:08:31', '2021-04-27 02:08:31'),
(2, '1', '1', '19', '1', '2021-04-27 02:14:56', '2021-04-27 02:14:56'),
(3, '1', '2', NULL, '1', '2021-04-27 02:15:21', '2021-04-27 02:15:21'),
(4, '1', '12', NULL, '1', '2021-04-27 02:18:08', '2021-04-27 02:18:17'),
(5, '1', '13', NULL, '1', '2021-04-27 02:18:15', '2021-04-27 02:18:16'),
(7, '1', '2', '5', '1', '2021-04-27 02:23:09', '2021-04-27 02:26:31'),
(8, '2', '4', NULL, '1', '2021-04-27 04:40:34', '2021-04-27 04:40:34'),
(9, '2', '4', '12', '1', '2021-04-27 04:40:41', '2021-04-27 04:40:41'),
(10, '8', '14', NULL, '1', '2021-04-28 00:55:19', '2021-04-28 00:55:19'),
(11, '8', '14', '20', '1', '2021-04-28 00:55:27', '2021-04-28 00:55:27'),
(12, '1', '1', '21', '1', '2021-04-28 01:22:40', '2021-04-28 01:22:40'),
(13, '1', '1', '22', '1', '2021-04-28 01:22:46', '2021-04-28 01:22:46'),
(14, '1', '2', '23', '1', '2021-04-28 01:23:11', '2021-04-28 01:23:11'),
(15, '1', '2', '24', '1', '2021-04-28 01:23:20', '2021-04-28 01:23:20'),
(16, '1', '2', '25', '1', '2021-04-28 01:23:26', '2021-04-28 01:23:26'),
(17, '1', '2', '26', '1', '2021-04-28 01:23:33', '2021-04-28 01:23:33'),
(18, '1', '2', '27', '1', '2021-04-28 01:23:39', '2021-04-28 01:23:39'),
(19, '1', '15', NULL, '1', '2021-04-28 01:24:18', '2021-04-28 01:24:18'),
(20, '1', '16', NULL, '1', '2021-04-28 01:24:27', '2021-04-28 01:24:27'),
(21, '1', '17', NULL, '1', '2021-04-28 01:24:35', '2021-04-28 01:24:35'),
(22, '1', '18', NULL, '1', '2021-04-28 01:24:49', '2021-04-28 01:24:49'),
(23, '1', '18', '28', '1', '2021-04-28 01:25:00', '2021-04-28 01:25:00'),
(24, '1', '18', '29', '1', '2021-04-28 01:25:16', '2021-04-28 01:25:16'),
(25, '1', '18', '30', '1', '2021-04-28 01:25:24', '2021-04-28 01:25:24'),
(26, '1', '19', NULL, '1', '2021-04-28 01:25:42', '2021-04-28 01:25:42'),
(27, '1', '19', '31', '1', '2021-04-28 01:25:49', '2021-04-28 01:25:49'),
(28, '1', '19', '32', '1', '2021-04-28 01:25:55', '2021-04-28 01:25:55'),
(29, '1', '19', '33', '1', '2021-04-28 01:26:04', '2021-04-28 01:26:14'),
(30, '1', '19', '34', '1', '2021-04-28 01:26:12', '2021-04-28 01:26:12'),
(31, '1', '20', NULL, '1', '2021-04-28 01:26:36', '2021-04-28 01:26:36'),
(32, '1', '21', NULL, '1', '2021-04-28 01:26:44', '2021-04-28 01:26:44'),
(33, '1', '22', NULL, '1', '2021-04-28 01:26:52', '2021-04-28 01:26:52'),
(34, '1', '23', NULL, '1', '2021-04-28 01:27:00', '2021-04-28 01:27:00'),
(35, '1', '23', '35', '1', '2021-04-28 01:27:10', '2021-04-28 01:27:10'),
(36, '1', '23', '36', '1', '2021-04-28 01:27:19', '2021-04-28 01:27:19'),
(37, '1', '23', '37', '1', '2021-04-28 01:28:03', '2021-04-28 01:28:03'),
(38, '1', '23', '38', '1', '2021-04-28 01:28:11', '2021-04-28 01:28:11'),
(39, '1', '23', '39', '1', '2021-04-28 01:28:19', '2021-04-28 01:28:19'),
(40, '1', '23', '40', '1', '2021-04-28 01:28:28', '2021-04-28 01:28:28'),
(41, '1', '24', NULL, '1', '2021-04-28 01:28:44', '2021-04-28 01:28:44'),
(42, '1', '25', NULL, '1', '2021-04-28 01:28:50', '2021-04-28 01:28:50'),
(43, '1', '25', '41', '1', '2021-04-28 01:28:56', '2021-04-28 01:28:56'),
(44, '1', '25', '42', '1', '2021-04-28 01:29:04', '2021-04-28 01:29:04'),
(45, '1', '26', NULL, '1', '2021-04-28 01:29:33', '2021-04-28 01:29:33'),
(46, '1', '27', NULL, '1', '2021-04-28 01:29:39', '2021-04-28 01:29:39'),
(47, '1', '28', NULL, '1', '2021-04-28 01:29:46', '2021-04-28 01:29:46'),
(48, '1', '29', NULL, '1', '2021-04-28 01:29:54', '2021-04-28 01:29:54'),
(49, '1', '30', NULL, '1', '2021-04-28 01:30:03', '2021-04-28 01:30:03'),
(50, '1', '31', NULL, '1', '2021-04-28 01:30:10', '2021-04-28 01:30:10'),
(51, '1', '32', NULL, '1', '2021-04-28 01:30:17', '2021-04-28 01:30:17'),
(52, '1', '32', '43', '1', '2021-04-28 01:30:25', '2021-04-28 01:30:25'),
(53, '1', '32', '44', '1', '2021-04-28 01:30:33', '2021-04-28 01:30:33'),
(54, '1', '32', '45', '1', '2021-04-28 01:30:43', '2021-04-28 01:30:43'),
(55, '1', '32', '46', '1', '2021-04-28 01:30:50', '2021-04-28 01:30:50'),
(56, '1', '33', NULL, '1', '2021-04-28 01:30:55', '2021-04-28 01:30:55'),
(57, '1', '34', NULL, '1', '2021-04-28 01:30:59', '2021-04-28 01:31:00'),
(58, '1', '2', '5', '1', '2021-05-03 20:00:29', '2021-05-03 20:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(45, '2014_10_12_100000_create_password_resets_table', 1),
(46, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(47, '2019_08_19_000000_create_failed_jobs_table', 1),
(48, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(49, '2020_05_21_100000_create_teams_table', 1),
(50, '2020_05_21_200000_create_team_user_table', 1),
(51, '2020_05_21_300000_create_team_invitations_table', 1),
(52, '2021_03_13_133638_create_categories_table', 1),
(53, '2021_03_15_151924_create_sub_categories_table', 1),
(54, '2021_03_16_155421_create_sessions_table', 1),
(55, '2021_03_16_173110_create_child_categories_table', 1),
(56, '2021_03_17_064213_create_logs_table', 1),
(57, '2021_03_19_122945_create_products_table', 1),
(58, '2021_03_23_103459_create_brands_table', 1),
(59, '2021_03_23_132053_create_colors_table', 1),
(60, '2021_03_23_173003_create_galleries_table', 1),
(61, '2021_03_25_202358_create_warranties_table', 1),
(62, '2021_03_25_205953_create_product_sellers_table', 1),
(63, '2021_03_26_122343_create_attributes_table', 1),
(64, '2021_03_26_161433_create_attribute_values_table', 1),
(65, '2021_04_03_134833_create_setting_footers_table', 1),
(66, '2021_04_03_144527_create_pages_table', 1),
(67, '2021_04_06_132649_create_footer_inner_boxes_table', 1),
(68, '2021_04_06_140115_create_footer_link_ones_table', 1),
(69, '2021_04_06_140127_create_footer_link_twos_table', 1),
(70, '2021_04_06_140154_create_footer_link_threes_table', 1),
(71, '2021_04_06_164101_create_footer_link_titles_table', 1),
(72, '2021_04_07_091028_create_news_letters_table', 1),
(73, '2021_04_07_132154_create_socials_table', 1),
(74, '2021_04_07_165236_create_footer_titles_table', 1),
(75, '2021_04_07_182343_create_footer_partners_table', 1),
(76, '2021_04_10_054255_create_site_headers_table', 1),
(77, '2021_04_27_050723_create_menus_table', 1),
(78, '2021_04_28_133659_create_ads_categories_table', 1),
(79, '2021_05_03_195610_create_banners_table', 1),
(80, '2021_05_03_212647_create_sliders_table', 1),
(81, '2021_05_03_231048_create_special_products_table', 1),
(82, '2021_05_06_094343_create_title_category_indices_table', 1),
(83, '2021_05_07_030522_create_category_indices_table', 1),
(84, '2021_05_13_064239_create_product_new_selecteds_table', 1),
(85, '2021_05_13_070914_create_product_selecteds_table', 1),
(86, '2021_05_18_100457_create_category_electronic_slider_table', 1),
(87, '2021_05_18_120706_create_category_electronic_amazing_table', 2),
(88, '2021_05_27_160307_create_category_electronic_banner_table', 3),
(89, '2021_06_01_035418_create_category_electronic_title_swiper_table', 4),
(90, '2021_06_01_035506_create_category_electronic_product_swiper_table', 4),
(91, '2021_06_10_070803_create_category_vehicle_slider_table', 5),
(92, '2021_06_10_070831_create_category_vehicle_amazing_table', 5),
(93, '2021_06_10_070854_create_category_vehicle_banner_table', 5),
(94, '2021_06_10_070920_create_category_vehicle_title_swiper_table', 5),
(95, '2021_06_10_070935_create_category_vehicle_product_swiper_table', 5),
(96, '2021_06_13_070947_create_category_apparel_slider_table', 6),
(97, '2021_06_13_071007_create_category_apparel_amazing_table', 6),
(98, '2021_06_13_071044_create_category_apparel_banner_table', 6),
(99, '2021_06_13_071056_create_category_apparel_title_swiper_table', 6),
(100, '2021_06_13_071115_create_category_apparel_product_swiper_table', 6),
(101, '2021_06_13_071128_create_category_apparel_brand_table', 6),
(102, '2021_06_17_163137_create_category_child_slider_table', 7),
(103, '2021_06_17_163157_create_category_child_amazing_table', 7),
(104, '2021_06_17_163210_create_category_child_banner_table', 7),
(105, '2021_06_17_163234_create_category_child_brand_table', 7),
(106, '2021_06_17_163248_create_category_child_title_swiper_table', 7),
(107, '2021_06_17_163303_create_category_child_product_swiper_table', 7),
(108, '2021_06_19_094454_create_category_product_swiper_table', 8),
(109, '2021_06_19_094519_create_category_title_swiper_table', 8),
(110, '2021_06_19_094536_create_category_banner_table', 8),
(111, '2021_06_19_094547_create_category_brand_table', 8),
(112, '2021_06_19_094600_create_category_amazing_table', 8),
(113, '2021_06_19_094612_create_category_slider_table', 8),
(114, '2021_07_10_093100_create_category_level4s_table', 9),
(117, '2021_07_10_140353_create_category_levels_table', 10),
(118, '2021_08_06_105104_create_sellers_table', 11),
(121, '2014_10_12_000000_create_users_table', 12),
(122, '2021_09_14_164539_create_s_m_s_table', 13),
(123, '2021_09_17_131547_create_profile_banners_table', 14),
(124, '2021_09_25_091637_create_favorites_table', 15),
(125, '2021_09_25_203558_create_observeds_table', 16),
(126, '2021_09_26_095231_create_fav_lists_table', 17),
(127, '2021_09_26_154744_create_favlist_product_table', 18),
(129, '2021_10_05_114659_create_addresses_table', 19),
(130, '2021_10_09_121207_create_user_histories_table', 20),
(133, '2021_10_10_093709_create_notifications_table', 21),
(134, '2021_10_10_181429_create_emails_table', 22),
(135, '2021_10_11_025243_create_gifts_table', 23),
(139, '2021_10_11_081201_create_carts_table', 24),
(140, '2021_10_12_223724_create_price_dates_table', 25),
(141, '2021_10_14_110519_create_orders_table', 26),
(142, '2021_10_18_105021_create_receipt_centers_table', 27),
(143, '2021_10_24_054659_create_address_times_table', 28),
(145, '2021_10_26_024127_create_payments_table', 29),
(147, '2021_10_27_043826_create_discounts_table', 30),
(148, '2021_10_29_034609_create_bank_payments_table', 31),
(151, '2021_11_02_023526_create_return_orders_table', 32),
(152, '2021_11_07_035213_create_return_reasons_table', 33),
(153, '2021_11_25_061054_create_permissions_table', 34),
(154, '2021_11_25_061335_create_roles_table', 34),
(155, '2021_11_25_061617_create_permission_user_table', 34),
(156, '2021_11_25_061637_create_permission_role_table', 34),
(157, '2021_11_25_061715_create_role_user_table', 34),
(158, '2022_01_09_184946_create_comments_table', 35),
(159, '2022_01_14_101315_create_rates_table', 36),
(160, '2022_01_23_183437_create_reviews_table', 37),
(161, '2022_05_10_130113_create_stores_table', 38),
(162, '2022_05_10_150448_create_seller_docs_table', 39),
(163, '2022_05_12_141227_create_product_sell_tests_table', 40),
(164, '2022_05_18_122159_create_compares_table', 41);

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_letters`
--

INSERT INTO `news_letters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'tdanandeh@yahoo.com', '2021-04-07 05:54:56', '2021-04-07 05:54:56'),
(5, 'alimz@hamkadeh.com', '2021-04-07 12:53:47', '2021-04-07 12:53:47'),
(6, 'admin@demo.com', '2021-04-07 12:55:27', '2021-04-07 12:55:27'),
(7, 'tlivedars@gmail.com', '2021-04-07 13:07:15', '2021-04-07 13:07:15'),
(8, 'admin@example.com', '2021-04-07 13:08:31', '2021-04-07 13:08:31'),
(9, 'tt.danandeh@gmail.com', '2021-04-07 13:13:13', '2021-04-07 13:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `system` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `ip`, `type`, `product_id`, `user_id`, `sms`, `email`, `system`, `text`, `created_at`, `updated_at`) VALUES
(49, '127.0.0.1', 'ip', NULL, '1', '0', '0', '1', ' هشدار: یک ورود موفق با آی پی 127.0.0.1 در سیستم ثبت شده است. ', '2022-05-17 15:43:35', '2022-05-17 15:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `observeds`
--

CREATE TABLE `observeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `observeds`
--

INSERT INTO `observeds` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(5, '3', '1', '2021-09-25 18:35:42', '2021-09-25 18:35:42'),
(6, '4', '1', NULL, NULL),
(7, '4', '2', NULL, NULL),
(8, '5', '1', NULL, NULL),
(15, '2', '1', '2022-05-24 12:44:41', '2022-05-24 12:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_number` varchar(23) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_seller_id` int(11) DEFAULT NULL,
  `type_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anbar_id` int(11) DEFAULT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_payment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product__color_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_send` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_price` int(11) DEFAULT NULL,
  `total_discount_price` int(11) DEFAULT NULL,
  `proPriceCount` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proPriceCountD` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proPriceCountDiscount` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `time_day` int(11) DEFAULT NULL,
  `time_month` int(11) DEFAULT NULL,
  `time_time` int(11) DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_vendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_warranty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countryName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regionName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cityName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countryCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regionCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `areaCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `order_number`, `product_id`, `product_seller_id`, `type_order`, `anbar_id`, `payment`, `type_payment`, `transaction_id`, `product__color_id`, `type_send`, `total_price`, `total_discount_price`, `proPriceCount`, `proPriceCountD`, `proPriceCountDiscount`, `address_id`, `time_day`, `time_month`, `time_time`, `ip`, `count`, `product_color`, `product_vendor`, `product_warranty`, `countryName`, `regionName`, `cityName`, `countryCode`, `regionCode`, `zipCode`, `areaCode`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(24, '1', NULL, '111111111', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-17 17:01:57', '2021-10-17 17:01:57'),
(25, '1', NULL, '111111111', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-17 17:01:57', '2021-10-17 17:01:57'),
(26, '1', NULL, '111111112', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 04:55:09', '2021-10-18 04:55:09'),
(27, '1', NULL, '111111112', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 04:55:09', '2021-10-18 04:55:09'),
(28, '1', NULL, '111111113', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 04:57:56', '2021-10-18 04:57:56'),
(29, '1', NULL, '111111113', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 04:57:56', '2021-10-18 04:57:56'),
(30, '1', NULL, '111111114', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 04:58:42', '2021-10-18 04:58:42'),
(31, '1', NULL, '111111114', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 04:58:42', '2021-10-18 04:58:42'),
(32, '1', NULL, '111111115', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 05:04:43', '2021-10-18 05:04:43'),
(33, '1', NULL, '111111115', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 05:04:43', '2021-10-18 05:04:43'),
(34, '1', NULL, '111111116', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, 2, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 05:05:11', '2021-10-18 05:30:24'),
(35, '1', NULL, '111111116', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, 2, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 05:05:11', '2021-10-18 05:30:24'),
(36, '1', NULL, '111111117', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 05:33:58', '2021-10-18 05:33:58'),
(37, '1', NULL, '111111117', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 05:33:58', '2021-10-18 05:33:58'),
(38, '1', NULL, '111111118', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 05:34:01', '2021-10-18 05:34:01'),
(39, '1', NULL, '111111118', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 05:34:01', '2021-10-18 05:34:01'),
(40, '1', NULL, '111111119', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 06:48:01', '2021-10-18 06:48:01'),
(41, '1', NULL, '111111119', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 06:48:01', '2021-10-18 06:48:01'),
(42, '1', NULL, '111111120', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 06:51:49', '2021-10-18 06:51:49'),
(43, '1', NULL, '111111120', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 06:51:49', '2021-10-18 06:51:49'),
(44, '1', NULL, '111111121', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, 2, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 06:51:58', '2021-10-18 07:12:51'),
(45, '1', NULL, '111111121', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, 2, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 06:51:58', '2021-10-18 07:12:51'),
(46, '1', NULL, '111111122', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, 3, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 23:45:40', '2021-10-18 23:46:27'),
(47, '1', NULL, '111111122', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, 3, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 23:45:40', '2021-10-18 23:46:27'),
(48, '1', NULL, '111111123', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 02:53:02', '2021-10-19 02:53:02'),
(49, '1', NULL, '111111123', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 02:53:02', '2021-10-19 02:53:02'),
(50, '1', NULL, '111111124', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 02:53:07', '2021-10-19 02:53:07'),
(51, '1', NULL, '111111124', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 02:53:07', '2021-10-19 02:53:07'),
(52, '1', NULL, '111111125', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 02:53:09', '2021-10-19 02:53:09'),
(53, '1', NULL, '111111125', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 02:53:09', '2021-10-19 02:53:09'),
(54, '1', NULL, '111111126', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 02:53:12', '2021-10-19 02:53:12'),
(55, '1', NULL, '111111126', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 02:53:12', '2021-10-19 02:53:12'),
(56, '1', NULL, '111111127', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 02:53:17', '2021-10-19 02:53:17'),
(57, '1', NULL, '111111127', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 02:53:17', '2021-10-19 02:53:17'),
(58, '1', NULL, '111111128', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, 5, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-20 04:44:32', '2021-10-20 05:47:34'),
(59, '1', NULL, '111111128', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, 5, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-20 04:44:32', '2021-10-20 05:47:34'),
(60, '1', NULL, '111111129', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 23:15:58', '2021-10-23 23:15:58'),
(61, '1', NULL, '111111129', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 23:15:58', '2021-10-23 23:15:58'),
(62, '1', NULL, '111111130', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 23:16:05', '2021-10-23 23:16:05'),
(63, '1', NULL, '111111130', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 23:16:05', '2021-10-23 23:16:05'),
(64, '1', NULL, '111111131', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 23:16:11', '2021-10-23 23:16:11'),
(65, '1', NULL, '111111131', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 23:16:11', '2021-10-23 23:16:11'),
(66, '1', NULL, '111111132', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 23:16:26', '2021-10-23 23:16:26'),
(67, '1', NULL, '111111132', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 23:16:26', '2021-10-23 23:16:26'),
(68, '1', NULL, '111111133', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 23:16:38', '2021-10-23 23:16:38'),
(69, '1', NULL, '111111133', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 23:16:38', '2021-10-23 23:16:38'),
(70, '1', NULL, '111111134', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 23:16:38', '2021-10-23 23:16:38'),
(71, '1', NULL, '111111134', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 23:16:38', '2021-10-23 23:16:38'),
(72, '1', NULL, '111111135', '2', 1, '1', 2, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, 3, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 23:16:38', '2021-10-23 23:53:40'),
(73, '1', NULL, '111111135', '2', 2, '1', 2, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, 3, NULL, NULL, NULL, '127.0.0.1', '2', NULL, '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 23:16:38', '2021-10-23 23:53:40'),
(74, '1', NULL, '111111136', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 01:41:41', '2021-10-24 01:41:41'),
(75, '1', NULL, '111111136', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 01:41:41', '2021-10-24 01:41:41'),
(76, '1', NULL, '111111137', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 02:57:50', '2021-10-24 02:57:50'),
(77, '1', NULL, '111111137', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 02:57:50', '2021-10-24 02:57:50'),
(78, '1', NULL, '111111138', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 02:59:44', '2021-10-24 02:59:44'),
(79, '1', NULL, '111111138', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 02:59:44', '2021-10-24 02:59:44'),
(80, '1', NULL, '111111139', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 03:14:29', '2021-10-24 03:14:29'),
(81, '1', NULL, '111111139', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 03:14:29', '2021-10-24 03:14:29'),
(82, '1', NULL, '111111140', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 03:14:38', '2021-10-24 03:14:38'),
(83, '1', NULL, '111111140', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 03:14:38', '2021-10-24 03:14:38'),
(84, '1', NULL, '111111141', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 03:16:13', '2021-10-24 03:16:13'),
(85, '1', NULL, '111111141', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 03:16:13', '2021-10-24 03:16:13'),
(86, '1', NULL, '111111142', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 03:18:45', '2021-10-24 03:18:45'),
(87, '1', NULL, '111111142', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 03:18:45', '2021-10-24 03:18:45'),
(88, '1', NULL, '111111143', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 03:18:48', '2021-10-24 03:18:48'),
(89, '1', NULL, '111111143', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 03:18:48', '2021-10-24 03:18:48'),
(90, '1', NULL, '111111144', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 03:18:53', '2021-10-24 03:18:53'),
(91, '1', NULL, '111111144', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 03:18:53', '2021-10-24 03:18:53'),
(92, '1', NULL, '111111145', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 03:20:06', '2021-10-24 03:20:06'),
(93, '1', NULL, '111111145', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 03:20:06', '2021-10-24 03:20:06'),
(94, '1', NULL, '111111146', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', 5700000, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 03:22:31', '2021-10-24 03:22:31'),
(95, '1', NULL, '111111146', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', 4699000, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 03:22:31', '2021-10-24 03:22:31'),
(96, '1', NULL, '111111147', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', 5700000, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 22:52:05', '2021-10-24 22:52:05'),
(97, '1', NULL, '111111147', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', 4699000, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 22:52:05', '2021-10-24 22:52:05'),
(98, '1', NULL, '111111147', '2', 5, NULL, NULL, '0', NULL, NULL, NULL, '0', 4700000, 4699000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '1', '3', '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 22:52:05', '2021-10-24 22:52:05'),
(99, '1', NULL, '111111148', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', 5700000, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 10:51:11', '2021-10-25 10:51:11'),
(100, '1', 'returned', '111111148', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', 4699000, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 10:51:11', '2021-10-25 10:51:11'),
(101, '1', NULL, '111111148', '2', 5, NULL, NULL, '0', NULL, NULL, NULL, '0', 4700000, 4699000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '1', '3', '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 10:51:11', '2021-10-25 10:51:11'),
(102, '1', 'delivered', '111111149', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', 5700000, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 10:51:25', '2021-10-25 10:51:25'),
(103, '1', NULL, '111111149', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', 4699000, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 10:51:25', '2021-10-25 10:51:25'),
(104, '1', 'returned', '111111149', '2', 5, NULL, NULL, '1', NULL, NULL, NULL, '0', 4700000, 4699000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '1', '3', '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 10:51:25', '2021-10-25 10:51:25'),
(105, '1', NULL, '111111150', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', 5700000, 5200000, '11400000', '1000000', '10400000', NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 10:51:26', '2022-05-20 21:15:34'),
(106, '1', NULL, '111111150', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', 4699000, 3800000, '9398000', '1798000', '7600000', NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 10:51:26', '2022-05-20 21:15:34'),
(107, '1', 'delivered', '111111150', '2', 5, NULL, NULL, '0', NULL, NULL, NULL, '0', 4700000, 4699000, '4700000', '1000', '4699000', 2, NULL, NULL, NULL, '127.0.0.1', '1', '3', '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 10:51:26', '2022-05-20 21:15:34'),
(108, '1', NULL, '111111151', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', 5700000, 5200000, NULL, NULL, NULL, 2, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 10:51:26', '2021-10-25 10:51:26'),
(109, '1', 'delivered', '111111151', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', 4699000, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 10:51:26', '2021-10-25 10:51:26'),
(110, '58', 'progress', '111111151', '2', 5, NULL, NULL, '0', NULL, NULL, NULL, '0', 4700000, 4699000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '3', '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 10:51:26', '2021-10-25 10:51:26'),
(111, '1', 'wait', '111111152', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', 5700000, 5200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 10:51:32', '2021-10-25 10:51:32'),
(112, '1', NULL, '111111152', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', 4699000, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 10:51:32', '2021-10-25 10:51:32'),
(113, '1', NULL, '111111152', '2', 5, NULL, NULL, '0', NULL, NULL, NULL, '0', 4700000, 4699000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '1', '3', '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 10:51:32', '2021-10-25 10:51:32'),
(114, '1', 'sended', '111111153', '2', 4, NULL, NULL, '0', NULL, NULL, NULL, '0', 4300000, 4250000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '1', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-26 22:54:19', '2021-10-26 22:54:19'),
(117, '58', 'cancel', '111111154', '2', 5, NULL, NULL, '1', NULL, 'A00000000000000000000000000292283679', NULL, '0', 4700000, 4699000, NULL, NULL, NULL, 3, 3, 5, 22, '127.0.0.1', '7', '3', '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-28 23:00:52', '2021-10-31 02:06:29'),
(118, '1', NULL, '111111155', '2', 4, NULL, NULL, '0', NULL, NULL, NULL, '0', 4300000, 4250000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '1', '5', '1', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-31 02:22:41', '2021-10-31 02:22:41'),
(119, '1', 'wait', '111111156', '2', 4, NULL, NULL, '0', NULL, NULL, NULL, '1', 4300000, 4250000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '1', '5', '1', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-31 23:42:45', '2021-10-31 23:42:45'),
(120, '1', 'paid', '111111157', '2', 5, NULL, NULL, '0', NULL, NULL, NULL, '0', 4700000, 4699000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '1', '3', '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-01 00:13:21', '2021-11-01 00:13:21'),
(121, '58', 'paid', '111111158', '2', 3, NULL, NULL, '1', NULL, NULL, NULL, '0', 4920000, 4920000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '1', '1', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-01 05:13:20', '2021-11-01 05:13:20'),
(122, '1', 'wait', '111111159', '2', 4, NULL, NULL, '1', NULL, NULL, NULL, '0', 4300000, 4250000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '1', '5', '1', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-01 09:35:56', '2021-11-01 09:38:26'),
(123, '1', 'delivered', '111111160', '2', 4, NULL, NULL, '0', NULL, NULL, NULL, '0', 4300000, 4250000, NULL, NULL, NULL, 3, NULL, NULL, NULL, '127.0.0.1', '1', '5', '1', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-01 11:29:10', '2021-11-01 11:29:21'),
(124, '1', 'delivered', '111111161', '2', 4, NULL, NULL, '0', NULL, NULL, NULL, '0', 4300000, 4250000, NULL, NULL, NULL, 2, NULL, NULL, NULL, '127.0.0.1', '1', '5', '1', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-01 22:48:05', '2021-11-01 22:53:20'),
(125, '1', 'delivered', '111111162', '2', 3, NULL, NULL, '1', NULL, NULL, NULL, '0', 4920000, 4920000, NULL, NULL, NULL, 2, NULL, NULL, NULL, '127.0.0.1', '1', '1', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-01 23:14:05', '2021-11-01 23:18:04'),
(126, '1', 'wait', '111111163', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', 4699000, 4650000, NULL, NULL, NULL, 2, NULL, NULL, NULL, '127.0.0.1', '1', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-02 00:03:51', '2021-11-02 00:04:03'),
(127, '1', 'wait', '111111163', '2', 5, NULL, NULL, '0', NULL, NULL, NULL, '0', 4700000, 4699000, NULL, NULL, NULL, 2, NULL, NULL, NULL, '127.0.0.1', '1', '3', '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-02 00:03:51', '2021-11-02 00:04:03'),
(128, '1', 'wait', '111111164', '2', 4, NULL, NULL, '0', NULL, NULL, NULL, '0', 4300000, 4250000, NULL, NULL, NULL, 2, NULL, NULL, NULL, '127.0.0.1', '1', '5', '1', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-02 00:19:38', '2021-11-02 00:19:45'),
(129, '1', 'wait', '111111164', '2', 2, NULL, NULL, '0', NULL, NULL, NULL, '0', 4699000, 4650000, NULL, NULL, NULL, 2, NULL, NULL, NULL, '127.0.0.1', '1', '4', '6', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-02 00:19:38', '2021-11-02 00:19:45'),
(130, '1', 'returned', '111111165', '2', 4, NULL, NULL, '0', NULL, NULL, NULL, '0', 4300000, 4250000, NULL, NULL, NULL, 2, NULL, NULL, NULL, '127.0.0.1', '1', '5', '1', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-02 00:21:12', '2021-11-06 09:33:35'),
(131, '1', 'sended', '111111165', '2', 5, NULL, NULL, '0', NULL, NULL, NULL, '0', 4700000, 4699000, NULL, NULL, NULL, 2, NULL, NULL, NULL, '127.0.0.1', '1', '3', '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-02 00:21:12', '2021-11-06 09:37:56'),
(132, '1', 'delivered', '111111166', '2', 3, NULL, NULL, '0', NULL, NULL, NULL, '0', 4920000, 4920000, '4920000', '0', '4920000', 2, NULL, NULL, NULL, '127.0.0.1', '1', '1', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-04 23:11:38', '2022-05-20 21:15:51'),
(133, '1', 'wait', '111111167', '2', 3, NULL, NULL, '0', NULL, NULL, NULL, '0', 4920000, 4920000, NULL, NULL, NULL, 7, NULL, NULL, NULL, '127.0.0.1', '1', '1', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-23 11:04:00', '2021-12-23 11:05:10'),
(134, '2', 'wait', '111111168', '2', 4, NULL, NULL, '1', NULL, NULL, NULL, '0', 4300000, 4250000, NULL, NULL, NULL, 2, NULL, NULL, NULL, '127.0.0.1', '1', '5', '1', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-23 11:10:04', '2021-12-23 11:12:46'),
(135, '1', NULL, '111111169', '2', 1, NULL, NULL, '0', NULL, NULL, NULL, '0', 5700000, 5100000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '5', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 07:59:54', '2022-05-16 07:59:54'),
(136, '1', NULL, '111111169', '2', 5, NULL, NULL, '0', NULL, NULL, NULL, '0', 4700000, 4699000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '3', '3', '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 07:59:54', '2022-05-16 07:59:54'),
(137, '1', NULL, '111111169', '2', 10, NULL, NULL, '0', NULL, NULL, NULL, '0', 4649000, 3800000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2', '7', '58', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 07:59:54', '2022-05-16 07:59:54'),
(138, '1', 'delivered', '111111170', '2', 11, NULL, NULL, '0', NULL, NULL, NULL, '0', 4649000, 3800000, '4649000', '849000', '3800000', 2, NULL, NULL, NULL, '127.0.0.1', '1', '7', '58', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 08:00:07', '2022-05-24 13:53:47'),
(139, '1', NULL, '111111171', '2', 10, NULL, NULL, '0', NULL, NULL, NULL, '0', 4649000, 3800000, NULL, NULL, NULL, 2, NULL, NULL, NULL, '127.0.0.1', '1', '7', '58', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 19:35:22', '2022-05-20 19:35:56'),
(140, '1', NULL, '111111171', '2', 5, NULL, NULL, '0', NULL, NULL, NULL, '0', 4700000, 4699000, NULL, NULL, NULL, 2, NULL, NULL, NULL, '127.0.0.1', '3', '3', '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-11 19:35:22', '2022-05-20 19:35:56'),
(141, '1', 'wait', '111111172', '2', 5, '1', 3, '0', NULL, NULL, NULL, '0', 4700000, 4699000, NULL, NULL, NULL, 5, NULL, NULL, NULL, '127.0.0.1', '2', '3', '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-24 13:07:30', '2022-05-24 13:11:48'),
(142, '1', 'wait', '111111172', '2', 10, '1', 3, '0', NULL, NULL, NULL, '0', 4649000, 3800000, NULL, NULL, NULL, 5, NULL, NULL, NULL, '127.0.0.1', '1', '7', '58', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-24 13:07:30', '2022-05-24 13:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `img`, `title`, `link`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'page/2021/4/8f570b58.svg', 'تحویل اکسپرس', 'faq/question/79', NULL, '2021-04-03 11:46:40', '2021-04-06 09:12:26'),
(3, 'page/2021/4/a9286d2f.svg', 'پشتیبانی ۲۴ ساعته', '/page/contact-us/', NULL, '2021-04-03 12:01:21', '2021-04-06 09:13:08'),
(4, 'page/2021/4/22414818.svg', 'پرداخت در محل', '/faq/question/81/', NULL, '2021-04-03 12:02:11', '2021-04-06 09:13:49'),
(5, 'page/2021/4/514926b1.svg', '۷ روز ضمانت بازگشت', '/faq/question/83/', NULL, '2021-04-03 12:04:16', '2021-04-06 09:14:41'),
(6, 'page/2021/4/fdb293e6.svg', 'ضمانت اصل‌بودن کالا', '/faq/question/82/', NULL, '2021-04-03 12:05:06', '2021-04-06 09:15:28'),
(7, 'page/2021/4/images.png', 'نحوه ثبت سفارش', 'faq/question/649', NULL, '2021-04-06 10:41:16', '2021-04-06 10:41:53'),
(8, 'page/2021/4/images.png', 'رویه ارسال سفارش', 'faq/question/79', NULL, '2021-04-06 10:42:34', '2021-04-06 10:42:34'),
(9, 'page/2021/4/images.png', 'شیوه‌های پرداخت', 'faq/question/81', NULL, '2021-04-06 10:42:56', '2021-04-06 10:42:56'),
(10, 'page/2021/4/images.png', 'پاسخ به پرسش‌های متداول', '/', NULL, '2021-04-06 13:01:28', '2021-04-06 13:01:28'),
(11, 'page/2021/4/images.png', 'رویه‌های بازگرداندن کالا', '/', NULL, '2021-04-06 13:01:43', '2021-04-06 13:01:43'),
(12, 'page/2021/4/images.png', 'شرایط استفاده', '/', NULL, '2021-04-06 13:01:54', '2021-04-06 13:01:54'),
(13, 'page/2021/4/images.png', 'حریم خصوصی', '/', NULL, '2021-04-06 13:02:06', '2021-04-06 13:02:06'),
(14, 'page/2021/4/images.png', 'گزارش باگ', '/', NULL, '2021-04-06 13:03:35', '2021-04-06 13:03:35'),
(15, 'page/2021/4/images.png', 'اتاق خبر دیجی‌کالا', '/', NULL, '2021-04-06 13:03:49', '2021-04-06 13:03:49'),
(16, 'page/2021/4/images.png', 'فروش در دیجی‌کالا', '/', NULL, '2021-04-06 13:04:01', '2021-04-06 13:04:01'),
(17, 'page/2021/4/images.png', 'فرصت‌های شغلی', '/', NULL, '2021-04-06 13:04:12', '2021-04-06 13:04:12'),
(18, 'page/2021/4/images.png', 'تماس با دیجی‌کالا', 'page/contact-us/', NULL, '2021-04-06 13:04:32', '2021-04-06 13:04:32'),
(19, 'page/2021/4/images.png', 'درباره دیجی‌کالا', '/', NULL, '2021-04-06 13:04:43', '2021-04-06 13:04:43'),
(20, 'page/2021/4/images.png', 'راهنمای هویت بصری', '/', NULL, '2021-04-06 13:04:53', '2021-04-06 13:04:53'),
(21, 'page/2021/4/images.png', 'راهنمای خرید از دیجی‌کالا', '/', NULL, '2021-04-06 13:16:06', '2021-04-06 13:16:06'),
(22, 'page/2021/4/images.png', 'خدمات مشتریان', '/', NULL, '2021-04-06 13:20:22', '2021-04-06 13:20:22'),
(23, 'page/2021/4/images.png', 'با دیجی‌کالا', '/', NULL, '2021-04-06 13:20:32', '2021-04-06 13:20:32'),
(24, 'page/2021/4/0ef4e56b.svg', 'دیجی کالا مگ', '/', NULL, '2021-04-07 14:56:20', '2021-04-07 14:56:20'),
(25, 'page/2021/4/a2f19563.svg', 'دیجی پی', '/', NULL, '2021-04-07 14:56:49', '2021-04-07 14:56:49'),
(26, 'page/2021/4/6b24b899.svg', 'دیجی استایل', '/', NULL, '2021-04-07 14:57:01', '2021-04-07 14:57:01'),
(27, 'page/2021/4/c8cfebe7.svg', 'دیجی کلاب', '/', NULL, '2021-04-07 14:57:13', '2021-04-07 14:57:13'),
(28, 'page/2021/4/9ea6b446.svg', 'دیجی آفلیت', '/', NULL, '2021-04-07 14:57:27', '2021-04-07 14:57:27'),
(29, 'page/2021/4/0feb6326.svg', 'دانلود کتاب الکترونیک', '/', NULL, '2021-04-07 14:58:01', '2021-04-07 14:58:01'),
(30, 'page/2021/4/dd753f51.png', 'گوگل پلی', 'https://app.adjust.com/3upyles?redirect=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.digikala.diagon', NULL, '2021-04-08 00:56:03', '2021-04-08 00:56:03'),
(31, 'page/2021/4/f822b108.svg', 'کافه بازار', '/', NULL, '2021-04-08 00:56:35', '2021-04-08 00:56:35'),
(32, 'page/2021/4/692fd5db.svg', 'مایکت', '/', NULL, '2021-04-08 00:56:51', '2021-04-08 00:56:51'),
(33, 'page/2021/4/c4abfc14.png', 'سیب اپ', '/', NULL, '2021-04-08 00:57:11', '2021-04-08 00:57:11');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transactionId` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driver` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_id` int(11) DEFAULT NULL,
  `shipping_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_payment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `discount_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gift_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gift_code_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `transactionId`, `driver`, `user_id`, `order_id`, `order_number`, `total_price`, `time_id`, `shipping_price`, `type_payment`, `discount_code`, `discount_price`, `gift_code`, `gift_code_price`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '1', '111', '111111152', '13724000', NULL, '25000', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 23:57:35', '2021-10-25 23:57:35'),
(2, NULL, NULL, '1', '112', '111111152', '13724000', NULL, '25000', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 23:57:35', '2021-10-25 23:57:35'),
(3, NULL, NULL, '1', '113', '111111152', '13724000', NULL, '25000', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-25 23:57:35', '2021-10-25 23:57:35'),
(6, NULL, NULL, '1', '114', '111111153', '4275000', 6, '25000', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-27 00:22:01', '2021-10-27 00:22:01'),
(7, NULL, NULL, '1', '114', '111111153', '4275000', 6, '20000', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-27 00:26:23', '2021-10-27 00:26:23'),
(10, 'A00000000000000000000000000292283679', 'zarinpal', '1', '117', '111111154', '14294000', 6, '25000', '1', '9817828660042', '36000', '9262897422117', '25000000', '1', '2021-10-28 23:00:57', '2021-10-31 02:06:29'),
(11, '767f749', 'payping', '1', '118', '111111155', '4275000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2021-10-31 02:22:49', '2021-10-31 02:34:56'),
(12, 'A00000000000000000000000000292517077', 'zarinpal', '1', '119', '111111156', '4275000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2021-10-31 23:42:51', '2021-11-01 05:46:06'),
(13, NULL, NULL, '1', '120', '111111157', '4724000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2021-11-01 00:13:28', '2021-11-01 05:13:28'),
(14, 'A00000000000000000000000000292561842', 'zarinpal', '1', '121', '111111158', '4945000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2021-11-01 05:13:25', '2021-11-01 05:13:34'),
(15, 'A00000000000000000000000000292623396', 'zarinpal', '1', '122', '111111159', '4275000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2021-11-01 09:36:31', '2021-11-01 09:38:32'),
(16, 'A00000000000000000000000000292648132', 'zarinpal', '2', '123', '111111160', '4275000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2021-11-01 11:29:18', '2021-11-01 11:29:30'),
(17, 'A00000000000000000000000000292648132', 'zarinpal', '1', '123', '111111160', '4275000', 6, '25000', '1', NULL, NULL, NULL, NULL, '1', '2021-11-01 11:29:18', '2021-11-01 11:29:30'),
(18, 'A00000000000000000000000000292758710', 'zarinpal', '1', '124', '111111161', '4275000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2021-11-01 22:52:48', '2021-11-01 22:53:26'),
(19, NULL, NULL, '3', '125', '111111162', '4945000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2021-11-01 23:14:21', '2021-11-01 23:14:21'),
(20, 'A00000000000000000000000000292761823', 'zarinpal', '1', '126', '111111163', '9374000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2021-11-02 00:03:59', '2021-11-02 00:04:12'),
(21, 'A00000000000000000000000000292761823', 'zarinpal', '1', '127', '111111163', '9374000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2021-11-02 00:03:59', '2021-11-02 00:04:12'),
(22, NULL, NULL, '1', '128', '111111164', '8925000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2021-11-02 00:19:42', '2021-11-02 00:19:42'),
(23, NULL, NULL, '1', '129', '111111164', '8925000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2021-11-02 00:19:42', '2021-11-02 00:19:42'),
(24, NULL, NULL, '1', '130', '111111165', '8974000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2021-11-02 00:21:19', '2021-11-02 00:21:19'),
(25, NULL, NULL, '1', '131', '111111165', '8974000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2021-11-02 00:21:20', '2021-11-02 00:21:20'),
(26, NULL, NULL, '1', '132', '111111166', '4945000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2021-11-04 23:11:43', '2021-11-04 23:11:43'),
(27, 'A00000000000000000000000000304849282', 'zarinpal', '1', '133', '111111167', '4945000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2021-12-23 11:04:49', '2021-12-23 11:05:17'),
(28, NULL, NULL, '1', '134', '111111168', '4275000', 6, '25000', '1', '2201449738859', '20', NULL, NULL, NULL, '2021-12-23 11:10:18', '2021-12-23 11:10:52'),
(29, NULL, NULL, '1', '138', '111111170', '3825000', 6, '25000', '1', '3371858172308', '3799990', NULL, NULL, NULL, '2022-05-16 08:00:12', '2022-05-16 08:02:27'),
(30, NULL, NULL, '1', '139', '111111171', '8524000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2022-05-20 19:35:56', '2022-05-20 19:35:56'),
(31, NULL, NULL, '1', '140', '111111171', '8524000', 6, '25000', '1', NULL, NULL, NULL, NULL, NULL, '2022-05-20 19:35:56', '2022-05-20 19:35:56'),
(32, 'A00000000000000000000000000344516477', 'zarinpal', '1', '141', '111111172', '8524000', 6, '25000', '1', '8709591053042', '12', '9262897422117', '25000000', NULL, '2022-05-24 13:09:37', '2022-05-24 13:12:22'),
(33, 'A00000000000000000000000000344516477', 'zarinpal', '1', '142', '111111172', '8524000', 6, '25000', '1', '8709591053042', '12', '9262897422117', '25000000', NULL, '2022-05-24 13:09:37', '2022-05-24 13:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `def` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `def`, `created_at`, `updated_at`) VALUES
(1, 'create-role', 'ایجاد مقام جدید', '2021-12-06 04:34:34', '2021-12-06 04:34:34'),
(2, 'delete-role', 'حذف مقام', '2021-12-06 04:35:02', '2021-12-06 04:35:02'),
(3, 'create-product', 'ایجاد محصول', '2021-12-06 04:35:33', '2021-12-06 04:35:33'),
(4, 'edit-product', 'ویرایش محصول', '2021-12-06 04:35:45', '2021-12-06 04:35:45'),
(5, 'delete-product', 'حذف محصول', '2021-12-06 04:36:01', '2021-12-06 04:36:01'),
(6, 'delete-category', 'حذف دسته', '2021-12-06 04:36:12', '2021-12-06 04:36:12'),
(7, 'create-category', 'ایجاد دسته', '2021-12-06 04:36:24', '2021-12-06 04:36:24'),
(8, 'edit-category', 'ویرایش دسته', '2021-12-06 04:36:50', '2021-12-06 04:36:50'),
(9, 'create-warranty', 'ایجاد گارانتی', '2021-12-06 04:37:10', '2021-12-06 04:37:10'),
(10, 'edit-warranty', 'ویرایش گارانتی', '2021-12-06 04:37:24', '2021-12-06 04:37:24'),
(11, 'delete-warranty', 'حذف گارانتی', '2021-12-06 04:37:40', '2021-12-06 04:37:40'),
(12, 'site-settings', 'تنظیمات سایت', '2021-12-06 04:38:07', '2021-12-06 04:38:07'),
(14, 'show-product', 'نمایش محصولات', '2021-12-09 00:42:53', '2021-12-09 00:42:53'),
(15, 'show-brand', 'نمایش برند ها', '2021-12-09 00:43:05', '2021-12-09 00:43:05'),
(16, 'show-category', 'نمایش دسته ها', '2021-12-09 00:43:37', '2021-12-09 00:43:37'),
(17, 'subcategory-show', 'نمایش زیر دسته ها', '2021-12-09 00:48:43', '2021-12-09 00:48:43'),
(18, 'status-category', 'تغییر وضعیت دسته ها', '2021-12-09 00:51:36', '2021-12-09 00:51:36');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(3, 18),
(4, 18),
(5, 18),
(7, 3),
(16, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `price_dates`
--

CREATE TABLE `price_dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_seller_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price_dates`
--

INSERT INTO `price_dates` (`id`, `product_seller_id`, `product_id`, `price`, `discount_price`, `created_at`, `updated_at`) VALUES
(1, '9', '2', '5700000', '5400000', '2021-09-12 18:16:36', '2021-10-12 19:16:36'),
(3, '4', '2', '4300000', '4250000', '2021-09-11 18:17:49', '2021-09-01 18:17:49'),
(4, '3', '2', '4920000', '4920000', '2021-10-12 19:17:55', '2021-10-12 19:17:55'),
(5, '1', '2', '5000000', '4890000', '2021-10-12 19:18:20', '2021-10-12 19:18:20'),
(6, '6', '4', '30000', '23000', '2021-10-12 19:18:40', '2021-10-12 19:18:40'),
(7, '8', '2', '5700000', '5400000', '2021-10-12 20:13:48', '2021-10-12 20:13:48'),
(8, '8', '2', '5700000', '5400000', '2021-10-12 20:14:05', '2021-10-12 20:14:05'),
(9, '8', '2', '5700000', '5400000', '2021-10-12 20:14:31', '2021-10-12 20:14:31'),
(10, '1', '2', '5000000', '4870000', '2021-10-12 20:17:58', '2021-10-12 20:17:58'),
(11, '1', '2', '5000000', '4810000', '2021-10-12 20:21:13', '2021-10-12 20:21:13'),
(12, '1', '2', '5000000', '4700000', '2021-10-13 08:01:38', '2021-10-13 08:01:38'),
(13, '1', '2', '5000000', '4500000', '2021-10-13 08:02:39', '2021-10-13 08:02:39'),
(14, '1', '2', '5000000', '4500000', '2021-10-13 08:02:54', '2021-10-13 08:02:54'),
(15, '1', '2', '5000000', '4500000', '2021-10-13 08:03:23', '2021-10-13 08:03:23'),
(16, '1', '2', '5800000', '4500000', '2021-10-13 08:04:24', '2021-10-13 08:04:24'),
(17, '1', '2', '5800000', '3900000', '2021-10-13 08:08:53', '2021-10-13 08:08:53'),
(18, '1', '2', '6000000', '4000000', '2021-10-17 05:44:42', '2021-10-17 05:44:42'),
(19, '1', '2', '5700000', '5200000', '2021-10-17 06:22:00', '2021-10-17 06:22:00'),
(20, '1', '2', '5700000', '5100000', '2021-12-23 11:13:51', '2021-12-23 11:13:51'),
(21, '1', '3', '65000', '64000', '2022-05-20 08:14:34', '2022-05-20 08:14:34'),
(22, '1', '3', '62000', '61000', '2022-05-20 08:14:34', '2022-05-20 08:14:34'),
(23, '1', '9', '65000', '65000', '2022-05-20 08:33:07', '2022-05-20 08:33:07'),
(24, '3', '9', '63000', '63000', '2022-05-20 08:33:37', '2022-05-20 08:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcategory_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `childcategory_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorylevel4_id` int(11) DEFAULT NULL,
  `color_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `gift` int(11) DEFAULT NULL,
  `shipment` int(11) DEFAULT NULL,
  `original` int(11) NOT NULL DEFAULT 1,
  `order_count` int(11) NOT NULL DEFAULT 0,
  `special` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `vendor_id`, `img`, `title`, `name`, `link`, `category_id`, `subcategory_id`, `childcategory_id`, `categorylevel4_id`, `color_id`, `brand_id`, `tags`, `body`, `description`, `price`, `discount_price`, `number`, `weight`, `status_product`, `publish_product`, `view`, `gift`, `shipment`, `original`, `order_count`, `special`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 3, 'product/2021/4/89e7f2abac447a018242a954f03f8a6926344f8b_1594023233.jpg', 'گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', 'Samsung Galaxy A21S SM-A217F/DS Dual Sim 64GB Mobile Phone', 'گوشی-موبایل-سامسونگ-مدل-galaxy-a21s-sm-a217fds-دو-سیمکارت-ظرفیت-64-گیگابایت', '1', '2', '5', NULL, '3', '1', 'خرید اینترنتی گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت و قیمت انواع گوشی موبایل سامسونگ از فروشگاه آنلاین دیجی‌کالا. جدیدترین مدل‌های گوشی موبایل سامسونگ با بهترین قیمت در دیجی‌کالا', 'معرفی\nشرکت سامسونگ یکی دیگر از گوشی‌های میان رده خود را با نام « A21S » معرفی کرد. گوشی A21S ازجدیدترین گوشی میان رده شرکت سامسونگ است که در ماه می سال 2020 معرفی شد. این گوشی در واقع جانشینی برای گوشی A21 است که تنها در حدود یک ماه قبل از آن معرفی شده بود. اگرچه گوشی A21s شباهت زیادی به گوشی A20 دارد اما با بهبودهایی هم همراه شده است؛ شرکت سامسونگ در این محصول خود، چیدمان دوربین‌های اصلی قاب پشتی را تغییر داده و از لنزها با رزولوشن بالاتری هم استفاده کرده است. میزان باتری و رم گوشی هم به نسبت نسخه قبل افزایش یافته است. گوشی A21S  یکی از ارزان‌ترین تلفن‌های هوشمند از سری A شرکت سامسونگ است. گوشی A21S را به دو دلیل می‌توان یک گوشی خاص به‌حساب آورد؛ این گوشی به یک باتری پر قدرت با ظرفیت 5000 میلی‌آمپر ساعت مجهز شده و از چیپست Exynos 850 بهره می‌برد.  اکسینوس  850 از جمله چیپست های ارزان‌قیمت 8 نانومتری است که شرکت سامسونگ تولید کرده است. استفاده از باتری 5000 میلی‌آمپری در کنار این چیپست کار هوشمندانه‌ای به نظر می‌رسد.\n\n\n', 'گوشی A21S یکی دیگر از میان رده‌های شرکت سامسونگ است که در تاریخ 15 می 2020 معرفی شد. شرکت سامسونگ برای این محصول خود از یک صفحه‌نمایش 6.5 اینچی با رزولوشن 1600 در 720 پیکسل، استفاده کرده است. این صفحه‌نمایش در هر اینچ 270 پیکسل را نشان می‌دهد که از جزئیات و وضوح تصویر خوبی برخوردار است. تراشه‌ این محصول Exynos 850675 از تراشه‌های 8 نانومتری سامسونگ است که با پردازنده مرکزی هشت هسته‌ای Cortex-A55 و پردازنده گرافیکی Mali-G52 همراه شده است. این تراشه برای بازکردن چندین برنامه به‌صورت هم‌زمان و تماشای ویدئو کاملاً مناسب است. این گوشی با 4 گیگابایت رم و 64 گیگابایت حافظه داخلی عرضه شده است و با استفاده از یک کارت حافظه‌ی جانبی قادر خواهید بود حافظه داخلی را تا 512 گیگابایت دیگر هم افزایش دهید. بر روی قاب پشتی A21S یک دوربین چهارگانه قرار گرفته است. یک لنز عریض با رزولوشن 48 مگاپیکسل، یک لنز فوق عریض با رزولوشن 8 مگاپیکسل، یک لنز ماکرو با رزولوشن 2 مگاپیکسل و یک حسگر عمق 2 مگاپیکسلی مجموعه دوربین A21S را تشکیل می‌دهد. برای دوربین سلفی هم یک لنز 12 مگاپیکسلی از نوع عریض انتخاب شده است که در گوشه بالای صفحه‌نمایش قرار گرفته است. حسگر شتاب سنج، مجاورت، ژیروسکوپ، قطب‌نما و اثر انگشت از جمله حسگرهای به کار گرفته شده در این گوشی هوشمند است که حسگر اثرانگشت آن بر روی قاب پشت قرار گرفته است. منبع انرژی گوشی A21S یک باتری لیتیوم-پلیمری با ظرفیت 5000 میلی‌آمپرساعت است که از فناوری شارژ سریع 15 واتی هم پشتیبانی می‌کند. شرکت سامسونگ این گوشی را با طراحی کاملاً مطلوب و امکانات فراوان به بازار عرضه کرده است تا در بازار میان‌رده‌ها هم حرفی برای گفتن داشته باشد.\n', '4649000', '3800000', '8', '200', '1', '1', NULL, 1, 1, 1, 1, 0, NULL, '2021-03-22 13:13:14', '2021-10-10 14:52:39'),
(3, 1, 'product/2021/3/76fb456027eb7f38c703a14375724f9a3c78ea5f_1614683215.jpg', 'شارژر دیواری هوآوی مدل HW-059', 'شارژر دیواری هوآوی مدل HW-059', 'شارژر-دیواری-هوآوی-مدل-hw-059', '1', '1', '7', NULL, '3', '1', 'شارژر-دیواری-هوآوی-مدل-hw-059', 'معرفی\nامکان شارژ تبلت (با شدت‌جریان 2.0 آمپر و بالاتر)\n\n\n', 'امکان شارژ تبلت (با شدت‌جریان 2.0 آمپر و بالاتر)\n', '90000', '74500', '2', '1001', '1', '1', NULL, 0, 0, 0, 1, 0, NULL, '2021-03-22 13:13:41', '2021-10-12 12:58:10'),
(4, 3, 'product/2021/3/113036263.jpg', 'کابل تبدیل USB به لایتنینگ آیبولی مدل S.65 طول 1 متر', 'کابل تبدیل USB به لایتنینگ آیبولی مدل S.65 طول 1 متر', 'کابل تبدیل USB به لایتنینگ آیبولی مدل S.65 طول 1 متر', '1', '1', '7', NULL, NULL, '1', 'کابل تبدیل USB به لایتنینگ آیبولی مدل S.65 طول 1 متر', NULL, NULL, '99000', '49000', '2', '200', '1', '1', NULL, 0, 0, 1, 0, 1, NULL, '2021-03-23 04:24:37', '2021-04-01 12:35:29'),
(5, NULL, 'product/2021/3/23/113036263.jpg', 'کابل تبدیل USB به لایتنینگ آیبولی مدل S.65 طول 1 متر2', 'کابل تبدیل USB به لایتنینگ آیبولی مدل S.65 طول 1 متر2', 'bl-tbd-l-usb-bh-l-tn-n-bol-mdl-s-65-tol-1-mtr2', '1', '1', '2', NULL, NULL, NULL, 'کابل تبدیل USB به لایتنینگ آیبولی مدل S.65 طول 1 متر2', NULL, NULL, '99000', '49000', '2', '200', '1', '1', NULL, 1, 1, 1, 1, 1, '2021-03-23 05:07:47', '2021-03-23 04:28:31', '2021-03-23 05:07:47'),
(6, NULL, 'product/2021/3/23/113036263.jpg', 'کابل تبدیل USB به microUSB بیبوشی مدل A02 طول 1 متر', 'کابل تبدیل USB به microUSB بیبوشی مدل A02 طول 1 متر', 'کابل-تبدیل-USB-به-microUSB-بیبوشی-مدل-A02-طول-1-متر', '1', '1', '7', NULL, NULL, NULL, 'کابل تبدیل USB به microUSB بیبوشی مدل A02 طول 1 متر', NULL, NULL, '99000', '44500', '2', '200', '1', '1', NULL, 1, 1, 1, 2, 1, '2021-03-26 05:41:05', '2021-03-23 04:35:01', '2021-03-26 05:41:05'),
(7, NULL, 'product/2021/3/23/113036263.jpg', 'کابل تبدیل USB به microUSB شیائومی مدل NOTE طول 1.2 متر', 'کابل تبدیل USB به microUSB شیائومی مدل NOTE طول 1.2 متر', 'کابل-تبدیل-USB-به-microUSB-شیائومی-مدل-NOTE-طول-1-2-متر', '1', '1', '7', NULL, NULL, NULL, 'کابل تبدیل USB به microUSB شیائومی مدل NOTE طول 1.2 متر', NULL, NULL, '19300', '0', '19300', '200', '1', '1', NULL, 1, 1, 1, 0, 1, '2021-03-23 05:08:04', '2021-03-23 04:38:38', '2021-03-23 05:08:04'),
(8, NULL, 'product/2021/3/89e7f2abac447a018242a954f03f8a6926344f8b_1594023233.jpg', 'تست', 'تست', 'تست', '1', '1', '2', NULL, '4', '1', 'تست', NULL, NULL, '2000', '200', '2', '200', '1', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, '2021-03-23 11:16:09', '2022-07-24 13:37:34'),
(9, NULL, 'product/2021/5/3/120407363.jpg', 'کاور جوی روم مدل JR-BP277 مناسب برای گوشی موبایل سامسونگ Galaxy S8Plus', 'کاور جوی روم مدل JR-BP277 مناسب برای گوشی موبایل سامسونگ Galaxy S8Plus', 'کاور-جوی-روم-مدل-JR-BP277-مناسب-برای-گوشی-موبایل-سامسونگ-Galaxy-S8Plus', '1', '39', '49', 1, '3', '3', 'کاور جوی روم مدل JR-BP277 مناسب برای گوشی موبایل سامسونگ Galaxy S8Plus', NULL, NULL, '17000', '15000', '5', '200', '0', '1', NULL, 1, 1, 1, 0, 1, NULL, '2021-05-03 20:10:37', '2021-07-10 07:29:33'),
(10, NULL, 'product/2021/5/3/2237223.jpg', 'شارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعت', 'شارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعت', 'شارژر-همراه-شیاومی-مدل-PLM09ZM-ظرفیت-10000-میلی-آمپر-ساعت', '1', '1', '19', NULL, '2', NULL, 'شارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعت', 'شارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعتشارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعتشارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعتشارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعتشارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعتشارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعتشارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعتشارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعتشارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعت', 'شارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعتشارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعتشارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعتشارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعتشارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعتشارژر همراه شیاومی مدل PLM09ZM ظرفیت 10000 میلی آمپر ساعت', '385000', '320000', '7', '250', '1', '1', NULL, 1, 1, 1, 2, 1, NULL, '2021-05-03 20:11:56', '2021-05-03 20:11:56'),
(11, NULL, 'product/2021/5/3/370526.jpg', 'دوربین دیجیتال نیکون مدل D810 به همراه لنز 24-120 میلی متر F/4G VR', 'دوربین دیجیتال نیکون مدل D810 به همراه لنز 24-120 میلی متر F/4G VR', 'دوربین-دیجیتال-نیکون-مدل-D810-به-همراه-لنز-24-120-میلی-متر-F-4G-VR', '1', '18', '28', NULL, '1', '1', 'دوربین دیجیتال نیکون مدل D810 به همراه لنز 24-120 میلی متر F/4G VR', NULL, NULL, '66990000', '66980000', 'دوربین دیجیتال نیکون مدل D810 به همراه لنز 24-120 میلی متر F/4G VR', '3000', '1', '1', NULL, 1, 1, 1, 5, 1, NULL, '2021-05-03 20:13:31', '2021-05-03 20:13:31'),
(12, NULL, 'product/2021/5/3/111417464.jpg', 'دوربین فیلم برداری سامسونگ مدل HMX-F810', 'دوربین فیلم برداری سامسونگ مدل HMX-F810', 'دوربین-فیلم-برداری-سامسونگ-مدل-HMX-F810', '1', '18', '29', NULL, '1', NULL, 'دوربین فیلم برداری سامسونگ مدل HMX-F810', 'دوربین فیلم برداری سامسونگ مدل HMX-F810\n', 'دوربین فیلم برداری سامسونگ مدل HMX-F810\n', '1470000', '1450000', '50', '450', '1', '1', NULL, 1, 1, 1, 1, 1, NULL, '2021-05-03 20:18:49', '2021-05-03 20:18:49'),
(13, 58, 'product/2021/5/3/27a3ef0de4ab4738826f151f5f90e2e8c62ca475_1606294269.jpg', 'کیس کامپیوتر گرین مدل Aria', 'کیس کامپیوتر گرین مدل Aria', 'کیس-کامپیوتر-گرین-مدل-Aria', '1', '23', '38', NULL, '4', '1', 'کیس کامپیوتر گرین مدل Aria', 'کیس کامپیوتر گرین مدل Aria\nکیس کامپیوتر گرین مدل Aria\nکیس کامپیوتر گرین مدل Aria\n', 'کیس کامپیوتر گرین مدل Aria\nکیس کامپیوتر گرین مدل Aria\n', '1890000', NULL, '8', '300', '1', '1', NULL, 1, 1, 1, 1, 1, NULL, '2021-05-03 20:20:29', '2021-05-03 20:20:29'),
(14, NULL, 'product/2021/5/5/117e3a5e394a2a3eebe7be0d7edbd6ffff77f7db_1595668555.jpg', 'مغز ران مرغ پویا پروتئین وزن 1800 گرم', 'مغز ران مرغ پویا پروتئین وزن 1800 گرم', 'مغز-ران-مرغ-پویا-پروتئین-وزن-1800-گرم', '5', '35', '47', NULL, '2', NULL, '1', 'مغز ران مرغ پویا پروتئین وزن 1800 گرم\n', 'مغز ران مرغ پویا پروتئین وزن 1800 گرم\n', '35000', '25000', '20', '20000', '1', '1', NULL, NULL, 1, 1, 0, NULL, NULL, '2021-05-05 10:50:53', '2021-05-05 10:50:53'),
(15, NULL, 'product/2021/5/7/3208047.jpg', 'دوربین دیجیتال کانن مدل EOS 4000D به همراه لنز 18-55 میلی متر DC III', 'دوربین دیجیتال کانن مدل EOS 4000D به همراه لنز 18-55 میلی متر DC III', 'دوربین-دیجیتال-کانن-مدل-EOS-4000D-به-همراه-لنز-18-55-میلی-متر-DC-III', '1', '18', '28', NULL, '1', '7', 'دوربین دیجیتال کانن مدل EOS 4000D به همراه لنز 18-55 میلی متر DC III', NULL, NULL, '9200000', '9000000', '3', '30000', '1', '1', NULL, 1, 1, 1, 0, 1, NULL, '2021-05-07 01:55:46', '2021-05-07 01:55:46'),
(16, NULL, 'product/2021/5/11/fef5d83ed9f69d2625393e8e87f2e4098085713f_1606257501.jpg', 'کارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت', 'کارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت', 'کارت-حافظه-microSDXC-پروتاچ-مدل-Ultra-کلاس-10-استاندارد-UHS-1-U1-سرعت-100MBps-ظرفیت-64-گیگابایت', '1', '19', '33', NULL, '1', '3', NULL, 'کارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\nکارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\nکارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\nکارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\nکارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\nکارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\nکارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\n', 'کارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\nکارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\nکارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\nکارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\nکارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\nکارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\nکارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\nکارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\nکارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\nکارت حافظه‌ microSDXC پروتاچ مدل Ultra کلاس 10 استاندارد UHS-1 U1 سرعت 100MBps ظرفیت 64 گیگابایت\n', '500000', '350000', '12', '500', '1', '1', NULL, 1, 1, 1, 1, 1, NULL, '2021-05-11 04:01:33', '2021-05-11 04:01:33'),
(17, 58, 'product/2021/7/10/6db1e7bc9d9c631ceada42d3cfd43206e90bb559_1621862925.jpg', 'کاور لوکسار مدل Defence90s مناسب برای گوشی موبایل سامسونگ Galaxy S20 Ultra', 'کاور لوکسار مدل Defence90s مناسب برای گوشی موبایل سامسونگ Galaxy S20 Ultra', 'کاور-لوکسار-مدل-Defence90s-مناسب-برای-گوشی-موبایل-سامسونگ-Galaxy-S20-Ultra', '1', '39', '49', 1, '1', '1', 'قاب پشتی، قاب جلویی، لبه بالایی، لبه پایینی، لبه چپ، لبه راست، حفاظت از دکمه‌ها', NULL, NULL, '240000', '119000', '100', '250', '1', '1', NULL, 1, 1, 0, 2, 1, NULL, '2021-07-10 07:24:15', '2021-07-10 07:24:15'),
(18, 58, 'seller2/2022/5/981228.jpg', 'محصول اول', 'product 1', 'product 1', '1', '1', '19', 33, NULL, '7', NULL, 'یک محصول تست', NULL, NULL, NULL, '1', '22', '0', NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2022-05-17 14:12:48', '2022-05-17 14:12:48'),
(19, 58, 'seller2/2022/5/981228.jpg', 'محصول اول', 'product 1', 'product 1', '1', '1', '19', 33, NULL, '7', NULL, 'یک محصول تست', NULL, NULL, NULL, '1', '22', '0', NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2022-05-17 14:13:50', '2022-05-17 14:13:50'),
(20, 58, 'seller2/2022/5/981228.jpg', 'محصول اول', 'product 1', 'product 1', '1', '1', '19', 33, NULL, '7', NULL, 'یک محصول تست', NULL, NULL, NULL, '1', '22', '0', NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2022-05-17 14:14:22', '2022-07-24 13:37:29'),
(21, NULL, 'product/2021/5/3/120407363.jpg', 'کاور جوی روم مدل JR-BP277 مناسب برای گوشی موبایل سامسونگ Galaxy S8Plus', 'کاور جوی روم مدل JR-BP277 مناسب برای گوشی موبایل سامسونگ Galaxy S8Plus', 'کاور-جوی-روم-مدل-JR-BP277-مناسب-برای-گوشی-موبایل-سامسونگ-Galaxy-S8Plus', '1', '39', '49', 1, '3', '3', 'کاور جوی روم مدل JR-BP277 مناسب برای گوشی موبایل سامسونگ Galaxy S8Plus', NULL, NULL, '50000', '45000', '5', '200', '0', '1', NULL, 1, 1, 1, 0, 1, NULL, '2021-05-03 20:10:37', '2021-07-10 07:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `product_new_selecteds`
--

CREATE TABLE `product_new_selecteds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `childCategory_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_new_selecteds`
--

INSERT INTO `product_new_selecteds` (`id`, `product_id`, `category_id`, `subCategory_id`, `childCategory_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', '1', '1', '7', '1', '2021-05-13 03:28:15', '2021-05-13 03:28:15'),
(2, '4', '1', '1', '7', '1', '2021-05-13 03:28:23', '2021-05-13 03:28:23'),
(3, '2', '1', '2', '5', '1', '2021-05-13 03:28:29', '2021-05-13 03:28:29'),
(4, '11', '1', '18', '28', '1', '2021-05-13 03:28:45', '2021-05-13 03:28:45'),
(5, '9', '1', '1', '19', '1', '2021-05-13 03:28:51', '2021-05-13 03:28:57'),
(6, '10', '1', '1', '19', '1', '2021-05-13 03:29:09', '2021-05-13 03:29:09'),
(7, '12', '1', '18', '29', '1', '2021-05-13 03:29:37', '2021-05-13 03:29:37'),
(8, '15', '1', '18', '28', '1', '2021-05-13 03:29:53', '2021-05-13 03:29:53'),
(9, '14', '5', '35', '47', '1', '2021-05-13 03:30:13', '2021-05-13 03:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `product_selecteds`
--

CREATE TABLE `product_selecteds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `childCategory_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_selecteds`
--

INSERT INTO `product_selecteds` (`id`, `product_id`, `category_id`, `subCategory_id`, `childCategory_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', '1', '1', '7', '1', '2021-05-13 03:44:47', '2021-05-13 03:44:47'),
(2, '4', '1', '1', '7', '1', '2021-05-13 03:44:55', '2021-05-13 03:44:55'),
(3, '9', '1', '1', '19', '1', '2021-05-13 03:45:06', '2021-05-13 03:45:07'),
(4, '10', '1', '1', '19', '1', '2021-05-13 03:45:15', '2021-05-13 03:45:15'),
(5, '11', '1', '18', '28', '1', '2021-05-13 03:45:34', '2021-05-13 03:45:34'),
(6, '15', '1', '18', '28', '1', '2021-05-13 03:45:42', '2021-05-13 03:45:42'),
(7, '12', '1', '18', '29', '1', '2021-05-13 03:46:00', '2021-05-13 03:46:00'),
(8, '2', '1', '2', '5', '1', '2021-05-13 03:46:08', '2021-05-13 03:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_sellers`
--

CREATE TABLE `product_sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warranty_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `limit_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anbar` int(11) DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sellers`
--

INSERT INTO `product_sellers` (`id`, `vendor_id`, `product_id`, `time`, `warranty_id`, `price`, `discount_price`, `color_id`, `product_count`, `limit_order`, `status`, `anbar`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '0', '5', '5700000', '5100000', '5', '10', '3', '1', 1, NULL, '2021-09-01 10:39:01', '2021-12-23 11:13:51'),
(2, 6, 2, '0', '2', '4699000', '4650000', '4', '5', '1', '1', 0, NULL, '2021-03-26 05:07:15', '2021-10-12 16:46:04'),
(3, 2, 2, '1', '5', '4920000', '4920000', '1', '2', '1', '1', 0, NULL, '2021-03-26 05:08:28', '2021-10-12 19:17:55'),
(4, 1, 2, '2', '4', '4300000', '4250000', '5', '5', '3', '1', 1, NULL, '2021-03-26 06:37:29', '2021-09-01 18:17:49'),
(5, 2, 2, '3', '3', '4700000', '4699000', '3', '3', '4', '1', 0, NULL, '2021-03-26 06:38:36', '2021-03-26 06:38:36'),
(6, 1, 4, '2', '2', '30000', '23000', '1', '12', '0', '1', 1, NULL, '2021-03-26 06:39:56', '2021-10-12 19:18:40'),
(8, 58, 2, '2', '6', '5700000', '5400000', '7', '3', '2', '1', 1, NULL, '2021-10-12 19:16:03', '2021-10-12 20:14:31'),
(9, 2, 2, '1', '6', '5700000', '5400000', '7', '5', '2', '1', 0, NULL, '2021-10-12 19:16:36', '2021-10-16 06:57:25'),
(10, 58, 2, '0', '6', '4649000', '3800000', '7', '5', '1', '1', 0, NULL, '2022-05-12 06:01:38', '2022-05-12 06:01:38'),
(11, 58, 4, '0', '2', '99000', '49000', '7', '5', '1', '0', 0, NULL, '2022-05-12 06:02:16', '2022-05-12 06:02:16'),
(12, 58, 3, '0', '0', '90000', '74500', '0', '0', '0', '0', 0, NULL, '2022-05-24 13:39:16', '2022-05-24 13:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `product_sell_tests`
--

CREATE TABLE `product_sell_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat2_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat3_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat4_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat5_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id_for_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plus_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minus_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_offer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ename` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sell_tests`
--

INSERT INTO `product_sell_tests` (`id`, `user_id`, `seller_id`, `cat_id`, `cat2_id`, `cat3_id`, `cat4_id`, `cat5_id`, `original`, `brand_id`, `type`, `category_id_for_product`, `start_location`, `height`, `width`, `weight`, `length`, `detail_product`, `plus_product`, `minus_product`, `title_offer`, `img`, `created_at`, `updated_at`, `title`, `ename`) VALUES
(3, '58', '40', '1', '1', '19', '31', NULL, '1', '7', NULL, NULL, NULL, '18', '12', '22', '15', 'یک محصول تست', 'نقطه 1 مثبت', 'نقطه 2 منفی', NULL, 'seller2/2022/5/981228.jpg', '2022-05-13 16:51:18', '2022-05-24 13:39:48', 'دوم اول', 'product 1');

-- --------------------------------------------------------

--
-- Table structure for table `profile_banners`
--

CREATE TABLE `profile_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_banners`
--

INSERT INTO `profile_banners` (`id`, `img`, `title`, `discount`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 'bannerprofile/2021/9/112350319.jpg', 'منتخب محصولات یاشار کالا', '30', NULL, '/', '2021-09-17 08:57:20', '2021-09-17 08:57:20'),
(2, 'bannerprofile/2021/9/121388925.jpg', 'منتخب محصولات پربازدید بازی فکری', '25', '', '/', '2021-09-17 08:57:50', '2021-09-17 08:57:50'),
(3, 'bannerprofile/2021/9/1272e9dc1babe4ba175d5d77fa24690127ca3b6f_1615480487.jpg', 'منتخب محصولات پرفروش کیف و کاور گوشی', '30', '', '/', '2021-09-17 09:02:23', '2021-09-17 09:06:15'),
(4, 'bannerprofile/2021/9/3320242.jpg', 'منتخب محصولات پرفروش صابون شستشو', '30', '', '/', '2021-09-17 09:02:45', '2021-09-17 09:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `user_id`, `product_id`, `rate`, `like`, `comment_id`, `review_id`, `created_at`, `updated_at`) VALUES
(4, '1', '2', NULL, '1', '2', NULL, '2022-01-14 06:55:15', '2022-01-14 06:55:15'),
(6, '1', '2', NULL, '1', '3', NULL, '2022-01-14 06:55:19', '2022-01-14 06:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `receipt_centers`
--

CREATE TABLE `receipt_centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receipt_centers`
--

INSERT INTO `receipt_centers` (`id`, `user_id`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'تهران، تهران، بلوار فرحزادی، نبش سیمای ایران، مرکز خرید پلاتین، طبقه اول، واحد ۱۰۷', '1', '2021-10-23 23:41:29', '2021-10-23 23:41:29'),
(2, NULL, 'تهران، تهران، فلکه دوم صادقیه بلوار آیت الله کاشانی بعد از خیابان شهید نجف زاده فروتن، جنب داروخانه‌ی دکتر اصفهانی، پلاک ۱۵', '1', '2021-10-23 23:41:50', '2021-10-23 23:41:50'),
(3, NULL, 'تهران، تهران، تهران، بزرگراه رسالت شرق به غرب بعد از خیابان حیدرخانی،روبروی خیابان رودباری (مهر) پلاک ۵۴۹، پلاک ۵۴۹', '1', '2021-10-23 23:41:57', '2021-10-23 23:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `return_orders`
--

CREATE TABLE `return_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `return_orders`
--

INSERT INTO `return_orders` (`id`, `user_id`, `order_id`, `order_number`, `status`, `count`, `item_reason`, `detail`, `img`, `created_at`, `updated_at`) VALUES
(1, '1', '132', '111111166', '0', '1', '2', 'گوشی خوبی نیست', 'product/2021/3/76fb456027eb7f38c703a14375724f9a3c78ea5f_1614683215.jpg', '2021-11-04 23:11:46', '2021-12-23 11:18:39'),
(2, '1', '131', '111111165', '0', '1', '3', 'ایراد دارد', NULL, '2021-11-04 23:11:46', '2021-11-07 00:42:20'),
(3, '1', '133', '111111167', NULL, NULL, NULL, NULL, NULL, '2021-12-23 11:05:10', '2021-12-23 11:05:10'),
(4, '1', '134', '111111168', NULL, NULL, NULL, NULL, NULL, '2021-12-23 11:12:46', '2021-12-23 11:12:46'),
(5, '1', '138', '111111170', NULL, NULL, NULL, NULL, NULL, '2022-05-16 08:02:30', '2022-05-16 08:02:30'),
(6, '1', '141', '111111172', NULL, NULL, NULL, NULL, NULL, '2022-05-24 13:11:48', '2022-05-24 13:11:48'),
(7, '1', '142', '111111172', NULL, NULL, NULL, NULL, NULL, '2022-05-24 13:11:48', '2022-05-24 13:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `return_reasons`
--

CREATE TABLE `return_reasons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `return_reasons`
--

INSERT INTO `return_reasons` (`id`, `reason`, `created_at`, `updated_at`) VALUES
(1, 'مشکل رجیستری دارد', '2021-11-07 00:38:05', '2021-11-07 00:38:05'),
(2, 'کالا ایراد فنی دارد', '2021-11-07 00:38:25', '2021-11-07 00:38:25'),
(3, 'کالا با اطلاعات درج شده در سایت مغایرت دارد', '2021-11-07 00:38:41', '2021-11-07 00:38:41'),
(4, 'رنگ کالای ارسال شده مغایرت دارد', '2021-11-07 00:38:56', '2021-11-07 00:38:56');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ok_buy` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `review_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plus_rate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plus_min` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_hidden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyfiat_sakht` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arzesh_kharid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noavari` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emkanat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sohoolate_estefade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zaher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `liked` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `dislike` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `report` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `ok_buy`, `review_title`, `review`, `plus_rate`, `plus_min`, `review_hidden`, `keyfiat_sakht`, `arzesh_kharid`, `noavari`, `emkanat`, `sohoolate_estefade`, `zaher`, `parent`, `liked`, `dislike`, `report`, `status`, `created_at`, `updated_at`) VALUES
(2, '2', '1', '0', 'بهترین محصول', 'بهترین میان رده بازار موبایل', 'محصول با سی پیو بالا', 'باتری بد', '1', '3', '5', '4', '3', '2', '2', '0', '1', '0', NULL, '1', '2022-01-24 20:21:55', '2022-01-28 14:40:32'),
(3, '2', '1', '0', 'بهترین محصول', 'بهترین میان رده بازار موبایل', 'محصول با سی پیو بالا', 'باتری بد', '1', '4', '2', '4', '4', '3', '5', '0', NULL, NULL, NULL, '1', '2022-01-24 20:21:55', '2022-05-17 13:22:21'),
(4, '2', '1', '0', 'بهترین محصول', 'بهترین میان رده بازار موبایل', 'محصول با سی پیو بالا', 'باتری بد', '1', '2', '1', '5', '5', '3', '5', '0', NULL, NULL, NULL, '0', '2022-01-24 20:21:55', '2022-01-28 14:38:31'),
(5, '2', '1', '1', 'بهترین محصول', 'بهترین میان رده بازار موبایل', 'محصول با سی پیو بالا', 'باتری بد', '1', '2', '1', '5', '5', '3', '5', '0', NULL, NULL, NULL, '0', '2022-01-24 20:21:55', '2022-01-28 14:38:17'),
(7, '2', '1', '1', 'گوشی خوبیه', 'بهترین میان رده بازار موبایل', 'محصول با سی پیو بالا', 'باتری بد', '1', '5', '5', '5', '5', '5', '5', '0', '0', '1', '1', '1', '2022-01-24 20:21:55', '2022-01-28 14:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `def` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `def`, `created_at`, `updated_at`) VALUES
(1, 'support', 'همکار بخش پشتیبانی', '2021-12-06 03:56:02', '2021-12-06 03:56:02'),
(2, 'ticketing', 'همکار بخش پاسخگویی تیکت ها', '2021-12-06 03:56:25', '2021-12-06 03:56:25'),
(3, 'producter', 'همکار بخش محصولات', '2021-12-06 03:56:35', '2021-12-06 03:56:35'),
(4, 'order', 'کارمند بخش سفارشات', '2021-12-06 03:57:00', '2021-12-06 03:57:00'),
(5, 'cart', 'همکار بخش سبد خرید', '2021-12-06 03:57:26', '2021-12-06 03:57:26'),
(6, 'payment', 'کارمند بخش پرداخت ها', '2021-12-06 03:57:39', '2021-12-06 03:57:39'),
(7, 'repayment', 'همکار بخش مرجوعی سفارشات', '2021-12-06 03:57:56', '2021-12-06 03:57:56'),
(9, 'admin-seller', 'مدیر بخش فروش', '2021-12-06 04:52:07', '2021-12-06 04:52:07'),
(10, 'admin-seller', 'مدیر بخش فروش', '2021-12-06 04:54:14', '2021-12-06 04:54:14'),
(11, 'admin-seller', 'مدیر بخش فروش', '2021-12-06 04:57:36', '2021-12-06 04:57:36'),
(12, 'admin-seller', 'مدیر بخش فروش', '2021-12-06 04:59:55', '2021-12-06 04:59:55'),
(13, 'admin-seller', 'مدیر بخش فروش', '2021-12-06 05:00:25', '2021-12-06 05:00:25'),
(14, 'order-support', 'همکار پشتیبانی سفارشات', '2021-12-08 01:51:14', '2021-12-08 01:51:14'),
(15, 'discount_support', 'همکار بخش کد تخفیف', '2021-12-08 01:52:15', '2021-12-08 01:52:15'),
(18, 'admin-seller-order', 'مقام مدیر بخش فروش', '2021-12-23 11:01:52', '2021-12-23 11:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `code_seller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_seller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shenasname_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maliat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_shaba` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghardad_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghardad_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghardad_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghardad_start_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghardad_end_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghardad_invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghardad_pay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `learning_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `user_id`, `code_seller`, `company_name`, `type_seller`, `brand_name`, `name`, `lname`, `gender`, `birth`, `national_code`, `shenasname_code`, `maliat`, `logo`, `about`, `bank_shaba`, `bank_account_name`, `email`, `mobile`, `website`, `state`, `city`, `address`, `pin_code`, `telephone`, `location`, `ghardad_status`, `ghardad_number`, `ghardad_file`, `ghardad_start_day`, `ghardad_end_day`, `ghardad_invoice`, `ghardad_pay`, `learning_status`, `wallet`, `created_at`, `updated_at`) VALUES
(28, NULL, NULL, NULL, NULL, 'موبایل نیور', 'حسن', 'شمسی', 'male', '2022-05-18', '485485489489', '545889489489', '0', NULL, NULL, '151515151515151515000000000000000', NULL, 'tdasdnandeh@yahoo.com', '51515151515', NULL, 'تهران', 'تهران', NULL, '1254165416', '52152151', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-10 06:54:45', '2022-05-10 10:32:43'),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, 'tdanandeh@ydahoo.com', '09121515151', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-10 15:18:08', '2022-05-10 15:18:08'),
(31, NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, 'tdanandeh@ydahoo.com', '09121515151', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-10 15:18:11', '2022-05-10 15:18:11'),
(32, NULL, '6', NULL, NULL, '5151', 'حسن ', 'نوری', 'male', '2022-05-18', '15151515151', '6215151515', '0', NULL, '0202510', '515120000000000000000000000000000', NULL, 'tdanaFDdfdfndeh@yahoo.com', '511', NULL, '51515', '1515', '5215', '151515', '151515', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2022-05-10 16:33:10', '2022-05-17 15:07:14'),
(33, 49, '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, 'dsssssss@dssss.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-10 16:37:46', '2022-05-10 16:48:13'),
(34, 50, '8', NULL, NULL, '51151', 'sddssss', 'ssssssssssssssss', 'male', '2022-05-17', '15151111111111', '6515151515', '0', NULL, '51515', '515155555555555555555555555555555', NULL, 'dfssdf@dsd.com', '51151515', NULL, 'iran', '44', '2125151', '5151515', '51515151', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-10 16:48:43', '2022-05-10 16:51:05'),
(35, 51, '9', NULL, NULL, 'موبایل توحید', 'توحید', 'داننده', 'male', '1990-06-05', '1548418181888', '54584854151458485', '0', NULL, 'کالای دیجیتال', '441581458155000000000000000524151', NULL, 'livedars@gmail.com', '09125151515', NULL, 'تهران', 'تهران', 'میدان ولیعصر بالاتر از خیابان ', '5151515151', '02105415', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2022-05-11 08:12:39', '2022-05-17 15:07:18'),
(36, 53, '10', NULL, NULL, '151', 'توحید', 'داانننننده', 'male', '1999-05-04', '59595959', '5965959', '0', NULL, '15', '515', NULL, 'dd@gmaial.com', '515', NULL, 'نبتینس', 'دتبیتت', 'یبسبیبی', '515', '151', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-11 08:31:06', '2022-05-11 08:32:01'),
(37, 54, '11', NULL, NULL, '15151551', 'حسن ', 'ناظری', 'male', '1897-02-21', '18188181', '418481848', '0', NULL, '51515151', '515151', NULL, 'tohid@gmail.com', '5115', NULL, '18181', '81848', '5415151', '15415511', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-11 09:29:52', '2022-05-11 09:30:39'),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, 'hassan@gmail.com', '09120123467', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-11 09:37:17', '2022-05-11 09:37:17'),
(39, 56, '1', NULL, NULL, '59595', 'حسن', 'ریوندی', 'male', '2022-05-18', '455451515155', '4545454545', '0', NULL, '5151515151', '151251515100000000000000000548418', NULL, 'hassan@gmail.com', '0916161612', NULL, 'تهران', 'تهران', 'تهرانپارس', '548541515', '59595965', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2022-05-11 09:37:22', '2022-05-17 15:10:55'),
(40, 58, '2', NULL, NULL, '848', 'توحید ', 'داننده', 'male', '2022-05-11', '8484848484', '848548484', '0', NULL, '484', '48', NULL, 't@d.com', '484', NULL, 'تهرانم', 'ترها', 'مسییس', '18541848', '48418', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-11 09:41:50', '2022-05-11 09:42:30'),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, 't@d.com', '09115215151', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-11 09:41:59', '2022-05-11 09:41:59'),
(42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, 'dfdffd@ff.com', '09151515151', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-24 13:20:46', '2022-05-24 13:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `seller_docs`
--

CREATE TABLE `seller_docs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_expire` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_docs`
--

INSERT INTO `seller_docs` (`id`, `user_id`, `type`, `img`, `status`, `date_expire`, `created_at`, `updated_at`) VALUES
(2, 32, 'شناسنامه', 'docseller/2022/5/Ilivedars.ir.png', '0', '2022-05-10 15:33:57', '2022-05-10 11:03:57', '2022-05-10 11:03:57'),
(6, 32, 'شناسنامه', 'docseller/2022/5/Ilivedars.ir.png', '0', '2022-05-10 15:33:57', '2022-05-10 11:03:57', '2022-05-10 11:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('BBoVZON4x6cr3KXCdkhsIibqUEed0rGPaj9JEJdD', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidUZwWUhyZGdhVG9LSEwxdmQxZkJFeldVV1E5NE8xMk5VajJXeDlLbSI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjoiMTIzNDU2Ijt9', 1658909974),
('ZR9gwSy2WvAGQwmgEZf12jCCPFKmMPJM9ehKavqS', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibDM2WjFJZHJPVkl4YUdmQkZIMjhDSEZreG91Y2JoNmlqUXNxUlNNaiI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL2NhdGVnb3J5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjoiMTIzNDU2Ijt9', 1658896826);

-- --------------------------------------------------------

--
-- Table structure for table `setting_footers`
--

CREATE TABLE `setting_footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footer_feature-innerbox` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_top_social_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_top_middlebar_link_col1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_top_middlebar_link_col1_ul` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_top_middlebar_link_col2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_top_middlebar_link_col2_ul` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_top_middlebar_link_col3_ul` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_top_address_contact1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_top_address_contact2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_top_address_contact3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_top_address_images_appstore` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_top_address_images_cafebazar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_top_address_images_miket` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_top_address_images_sibapp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_more_info_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_more_info_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_more_info_category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_more_info_safety-partner1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_more_info_safety-partner2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_more_info_safety-partner3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_more_info_brand` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_more_info_copyright` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_headers`
--

CREATE TABLE `site_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_headers`
--

INSERT INTO `site_headers` (`id`, `img`, `icon`, `link`, `title`, `status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'fresh', '/', 'سوپرمارکت', '1', '2021-04-10 02:33:32', '2021-04-10 02:41:39'),
(3, NULL, 'amazing', '/', 'تخفیف‌ها و پیشنهادها', '1', '2021-04-10 02:34:39', '2021-04-10 02:34:39'),
(4, NULL, 'my-digikala', NULL, 'دیجی کالای من', '1', '2021-04-10 02:35:02', '2021-04-10 02:35:08'),
(5, NULL, 'plus', NULL, 'دیجی پلاس', '1', '2021-04-10 02:36:13', '2021-04-10 02:36:13'),
(6, NULL, 'digiclub', NULL, 'دیجی کلاب', '1', '2021-04-10 02:36:33', '2021-04-10 02:36:33'),
(7, NULL, '', NULL, 'سوال دارید؟', '1', '2021-04-10 02:36:51', '2021-04-10 02:36:51'),
(8, NULL, '', '/', 'فروشنده شوید', '1', '2021-04-10 02:37:01', '2021-04-10 02:53:17'),
(9, NULL, 'دسته‌بندی کالاها', 'دسته‌بندی کالاها', 'دسته‌بندی کالاها', '1', '2021-04-10 02:53:56', '2021-04-10 06:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img`, `title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slider/2021/5/840c04f4595ad17d259343966ab2495f9b63b74d_1612164368c401.jpg', 'محصولات کندی', '/candy', '1', '2021-05-03 18:02:30', '2021-05-03 18:19:36'),
(2, 'slider/2021/5/2a88effae57a0e405e2ab2eadfb6afdcdc607cfa_1612167658c401.jpg', 'مهرومادر', '/md', '1', '2021-05-03 18:03:50', '2021-05-03 18:17:50'),
(3, 'slider/2021/5/1f5d2aa10e0f51f3ac1c323494c7dcecf2b6ea81_1599283688c401.jpg', 'کفش مردانه', '/k', '1', '2021-05-03 18:04:06', '2021-05-03 18:17:49'),
(4, 'slider/2021/5/5eb4412d0bef22bc946f2153726090bf5bbf5422_1599283518c401.jpg', 'مانتو', '/mtd', '1', '2021-05-03 18:04:25', '2021-05-03 18:17:48'),
(5, 'slider/2021/5/5e4c1bac14ce174ee712ada8261839086dec1cbf_1600582256c401.jpg', 'مداد', '/medad', '1', '2021-05-03 18:04:42', '2021-05-03 18:17:48'),
(6, 'slider/2021/5/3d221fb85a23b764b70b0f97dfc81387c6d0cb49_1612164262c401.jpg', 'لورا', '/lora', '1', '2021-05-03 18:04:59', '2021-05-03 18:17:43'),
(7, 'slider/2021/5/6ffc895b2f1a48325e0e46b7785975d1c6ef778e_1600080757c401.jpg', 'مراقبت پوست', '/mra', '1', '2021-05-03 18:05:26', '2021-05-03 18:17:43'),
(8, 'slider/2021/5/9efb72640817034c0d283cd70e8ef7759c84900b_1612173547c401.jpg', 'ایکس ویژن', '/xvi', '1', '2021-05-03 18:05:45', '2021-05-03 18:17:45');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `icon`, `img`, `title`, `link`, `created_at`, `updated_at`) VALUES
(1, 'linkedin', NULL, 'لینکدین', 'https://www.linkedin.com/company/digikala/', '2021-04-07 10:02:33', '2021-04-07 10:02:33'),
(2, 'aparat', NULL, 'آپارات', 'https://www.aparat.com/digikala/دیجی_کالا', '2021-04-07 10:03:14', '2021-04-07 10:03:14'),
(3, 'twitter', NULL, 'تویتتر', 'https://twitter.com/digikalacom', '2021-04-07 10:03:36', '2021-04-07 10:03:36'),
(4, 'instagram', NULL, 'اینستاگرام', 'https://www.instagram.com/digikalacom/', '2021-04-07 10:04:24', '2021-04-07 10:04:24');

-- --------------------------------------------------------

--
-- Table structure for table `special_products`
--

CREATE TABLE `special_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `childCategory_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `natural` int(11) DEFAULT NULL,
  `supermarket` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `special_products`
--

INSERT INTO `special_products` (`id`, `product_id`, `category_id`, `subCategory_id`, `childCategory_id`, `status`, `natural`, `supermarket`, `created_at`, `updated_at`) VALUES
(1, '2', '1', '2', '5', '1', 1, NULL, '2021-05-03 20:01:08', '2021-05-03 20:01:08'),
(2, '4', '1', '1', '7', '1', 1, NULL, '2021-05-03 20:05:53', '2021-05-03 20:05:53'),
(3, '13', '1', '23', '38', '1', 1, 1, '2021-05-03 20:21:10', '2021-05-03 20:21:10'),
(4, '12', '1', '18', '29', '1', 1, NULL, '2021-05-03 20:21:24', '2021-05-03 20:21:24'),
(5, '11', '1', '18', '28', '1', 1, 1, '2021-05-03 20:21:38', '2021-05-03 20:21:38'),
(6, '9', '1', '1', '19', '1', 1, 1, '2021-05-03 20:22:03', '2021-05-03 20:22:03'),
(7, '10', '1', '1', '19', '1', 1, 1, '2021-05-03 20:22:10', '2021-05-03 20:22:10'),
(8, '14', '5', '35', '47', '1', 0, 1, '2021-05-05 10:51:43', '2021-05-05 10:51:43'),
(9, '3', '1', '1', '7', '1', 1, 0, '2021-05-21 02:18:51', '2021-05-21 02:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `personal` int(11) DEFAULT 1,
  `user_id` int(11) DEFAULT NULL,
  `store_back` int(11) DEFAULT 0,
  `store_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `personal`, `user_id`, `store_back`, `store_name`, `store_state`, `store_city`, `store_address`, `store_code`, `store_telephone`, `created_at`, `updated_at`) VALUES
(1, 1, 32, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-10 08:46:17', '2022-05-10 10:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `img`, `title`, `parent`, `name`, `link`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'subcategory/2021/3/8c801e343eac0d7d1a1031d3f8f283968f9dfab5_1610284191.jpg', 'لوازم جانبی گوشی ', '1', 'لوازم جانبی گوشی موبایل', 'لوازم جانبی گوشی موبایل', '1', NULL, NULL, '2021-04-28 01:06:05'),
(2, 'subcategory/2021/3/083502a125d75548341afa131a384efd000d6a7e_1614629680.jpg', 'گوشی موبایل', '1', 'گوشی موبایل', '/category-mobile/', '1', NULL, NULL, '2021-07-30 03:39:55'),
(3, 'subcategory/2021/3/2351996.jpg', 'واقعیت مجازی', '1', 'ma', 'maz', '1', NULL, '2021-03-15 12:06:17', '2021-03-15 12:19:07'),
(4, 'subcategory/2021/3/66e195009f4883d18a24e90628bfecb1dbc63ca8_1613305610.jpg', 'موتور سیکلت', '2', 'moto', 'moto', '1', NULL, '2021-03-15 12:07:04', '2021-03-31 12:04:20'),
(5, 'subcategory/2021/3/About-Lubrizol-2.jpg', 'dsds', '2', 'dssdsd', 'dssdsd', '1', '2021-03-19 09:49:10', '2021-03-16 08:11:37', '2021-03-19 09:49:10'),
(6, 'subcategory/2021/3/About-Lubrizol-2.jpg', 'vvddsv', '2', 'vdsdsvvd', 'vddv', '0', '2021-03-19 09:49:09', '2021-03-16 08:32:32', '2021-03-19 09:49:09'),
(7, 'subcategory/2021/3/Advanced-Materials.jpg', 'تست', '3', 'rtgrtgrtg', 'trgtrg', '1', '2021-03-19 09:49:07', '2021-03-16 08:33:56', '2021-03-19 09:49:07'),
(8, 'subcategory/2021/3/121735238.jpg', 'sfdfsfds', '2', 'dfdfdf', 'dfdfdf', '1', '2021-03-17 04:07:54', '2021-03-16 12:33:38', '2021-03-17 04:07:54'),
(9, 'subcategory/2021/3/a715177eb6da9aa0e088718fa9caa726bbf7922c_1614437089.jpg', 'teter', '2', 'erttreetr', 'trerter', '0', '2021-03-17 04:16:05', '2021-03-16 12:41:51', '2021-03-17 04:16:05'),
(10, 'subcategory/2021/4/121485581.jpg', 'لپ تاپ', '1', 'لپ تاپ', 'لپ تاپ', '1', NULL, '2021-04-01 02:25:46', '2021-04-01 02:25:46'),
(11, 'subcategory/2021/4/89e7f2abac447a018242a954f03f8a6926344f8b_1594023233.jpg', 'تبلت', '1', 'تبلت', 'تبلت', '1', '2021-04-01 12:43:02', '2021-04-01 02:26:13', '2021-04-01 12:43:02'),
(12, NULL, 'واقعیت مجازی', '1', 'واقعیت مجازی', 'واقعیت مجازی', '1', NULL, '2021-04-27 02:17:41', '2021-06-10 12:47:20'),
(13, NULL, 'مچ بند و دستبند هوشمند', '1', 'مچ بند و دستبند هوشمند', 'مچ بند و دستبند هوشمند', '1', NULL, '2021-04-27 02:17:58', '2021-04-27 02:17:58'),
(14, NULL, 'کتاب و مجله', '8', 'کتاب و مجله', 'کتاب و مجله', '1', NULL, '2021-04-28 00:54:51', '2021-04-28 00:54:51'),
(15, NULL, 'هدفون، هدست، هندزفری', '1', 'هدفون، هدست، هندزفری', 'هدفون، هدست، هندزفری', '1', NULL, '2021-04-28 01:09:46', '2021-04-28 01:09:46'),
(16, NULL, 'اسپیکر بلوتوث و با سیم', '1', 'اسپیکر بلوتوث و با سیم', 'اسپیکر بلوتوث و با سیم', '1', NULL, '2021-04-28 01:10:11', '2021-04-28 01:10:11'),
(17, NULL, 'هارد، فلش و SSD', '1', 'هارد، فلش و SSD', 'هارد، فلش و SSD', '1', NULL, '2021-04-28 01:10:27', '2021-04-28 01:10:27'),
(18, NULL, 'دوربین', '1', 'دوربین', 'دوربین', '1', NULL, '2021-04-28 01:10:46', '2021-04-28 01:10:46'),
(19, NULL, 'لوازم جانبی دوربین', '1', 'لوازم جانبی دوربین', 'لوازم جانبی دوربین', '1', NULL, '2021-04-28 01:11:08', '2021-04-28 01:11:08'),
(20, NULL, 'دوربین دو چشمی و شکاری', '1', 'دوربین دو چشمی و شکاری', 'دوربین دو چشمی و شکاری', '1', NULL, '2021-04-28 01:11:31', '2021-04-28 01:11:31'),
(21, NULL, 'تلسکوپ', '1', 'تلسکوپ', 'تلسکوپ', '1', NULL, '2021-04-28 01:11:49', '2021-04-28 01:11:49'),
(22, NULL, 'پلی استیشن، ایکس باکس و بازی', '1', 'پلی استیشن، ایکس باکس و بازی', 'پلی استیشن، ایکس باکس و بازی', '1', NULL, '2021-04-28 01:12:02', '2021-04-28 01:12:02'),
(23, NULL, 'کامپیوتر و تجهیزات جانبی', '1', 'کامپیوتر و تجهیزات جانبی', 'کامپیوتر و تجهیزات جانبی', '1', NULL, '2021-04-28 01:12:18', '2021-04-28 01:12:18'),
(24, NULL, 'لپ تاپ', '1', 'لپ تاپ', 'لپ تاپ', '1', NULL, '2021-04-28 01:12:35', '2021-04-28 01:12:35'),
(25, NULL, 'لوازم جانبی لپ تاپ', '1', 'لوازم جانبی لپ تاپ', 'لوازم جانبی لپ تاپ', '1', NULL, '2021-04-28 01:12:47', '2021-04-28 01:12:47'),
(26, NULL, 'تبلت', '1', 'تبلت', 'تبلت', '1', NULL, '2021-04-28 01:13:03', '2021-04-28 01:13:03'),
(27, NULL, 'شارژر تبلت و موبایل', '1', 'شارژر تبلت و موبایل', 'شارژر تبلت و موبایل', '1', NULL, '2021-04-28 01:13:32', '2021-04-28 01:13:32'),
(28, NULL, 'کیف، کاور، لوازم جانبی تبلت', '1', 'کیف، کاور، لوازم جانبی تبلت', 'کیف، کاور، لوازم جانبی تبلت', '1', NULL, '2021-04-28 01:14:20', '2021-04-28 01:14:20'),
(29, NULL, 'باتری', '1', 'باتری', 'باتری', '1', NULL, '2021-04-28 01:14:46', '2021-04-28 01:14:46'),
(30, NULL, 'دوربین‌های تحت شبکه', '1', 'دوربین‌های تحت شبکه', 'دوربین‌های تحت شبکه', '1', NULL, '2021-04-28 01:14:51', '2021-04-28 01:14:51'),
(31, NULL, 'مودم و تجهیزات شبکه', '1', 'مودم و تجهیزات شبکه', 'مودم و تجهیزات شبکه', '1', NULL, '2021-04-28 01:15:11', '2021-04-28 01:15:11'),
(32, NULL, 'ماشین های اداری', '1', 'ماشین های اداری', 'ماشین های اداری', '1', NULL, '2021-04-28 01:15:31', '2021-04-28 01:15:31'),
(33, NULL, 'کتابخوان فیدیبوک', '1', 'کتابخوان فیدیبوک', 'کتابخوان فیدیبوک', '1', NULL, '2021-04-28 01:15:54', '2021-04-28 01:15:54'),
(34, NULL, 'کارت هدیه خرید از دیجی‌کالا', '1', 'کارت هدیه خرید از دیجی‌کالا', 'کارت هدیه خرید از دیجی‌کالا', '1', NULL, '2021-04-28 01:16:09', '2021-04-28 01:16:09'),
(35, NULL, 'خوردنی و آشامیدنی', '5', 'خوردنی و آشامیدنی', 'خوردنی و آشامیدنی', '1', NULL, '2021-05-05 10:48:11', '2021-05-05 10:48:11'),
(36, NULL, 'بچگانه', '3', 'بچگانه', 'بچگانه', '1', NULL, '2021-06-13 02:53:04', '2021-06-13 02:53:04'),
(37, NULL, 'دخترانه', '3', 'دخترانه', 'دخترانه', '1', NULL, '2021-06-13 02:53:17', '2021-06-13 02:53:17'),
(38, NULL, 'پسرانه', '3', 'پسرانه', 'پسرانه', '1', NULL, '2021-06-13 02:53:28', '2021-06-13 02:53:28'),
(39, NULL, 'لوازم جانبی کالای دیجیتال', '1', 'category-accessories-main', '/category-accessories-main/', '1', NULL, '2021-07-10 04:52:47', '2021-07-10 04:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `s_m_s`
--

CREATE TABLE `s_m_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_m_s`
--

INSERT INTO `s_m_s` (`id`, `user_id`, `code`, `type`, `created_at`, `updated_at`) VALUES
(1, '1', '48336', 'فراموشی رمز عبور', '2021-09-14 14:42:11', '2021-09-14 14:42:11'),
(2, '1', '16538', 'ورود به حساب', '2021-09-15 07:23:12', '2021-09-15 07:23:12'),
(3, '6', '70770', 'ایجاد حساب', '2021-09-16 09:41:50', '2021-09-16 09:41:50'),
(4, '6', '36103', 'فراموشی رمز عبور', '2021-09-16 09:57:16', '2021-09-16 09:57:16'),
(5, '6', '30949', 'اسمس دوباره ورود به حساب', '2021-09-17 01:28:31', '2021-09-17 01:28:31'),
(6, '6', '65997', 'ورود به حساب', '2021-09-17 01:29:40', '2021-09-17 01:29:40'),
(7, '6', '86834', 'اسمس دوباره ورود به حساب', '2021-09-17 01:32:35', '2021-09-17 01:32:35'),
(8, '6', '21407', 'اسمس دوباره ورود به حساب', '2021-09-17 01:36:15', '2021-09-17 01:36:15'),
(9, '6', '28851', 'ورود به حساب', '2021-09-17 03:11:49', '2021-09-17 03:11:49'),
(10, '6', '75813', 'ورود به حساب', '2021-09-17 03:32:35', '2021-09-17 03:32:35'),
(11, '6', '79388', 'فراموشی رمز عبور', '2021-09-17 08:23:11', '2021-09-17 08:23:11'),
(12, '6', '20416', 'ورود به حساب', '2021-09-18 02:54:13', '2021-09-18 02:54:13'),
(13, '6', '26090', 'ورود به حساب', '2021-09-19 09:36:42', '2021-09-19 09:36:42'),
(14, '2', '2', 'کالای مورد نظر موجود شد:گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت', '2021-10-10 13:01:26', '2021-10-10 13:01:26'),
(15, '2', '76758', 'فراموشی رمز عبور', '2021-10-16 07:03:22', '2021-10-16 07:03:22'),
(16, '1', '20922', 'ورود به حساب', '2021-10-17 04:08:38', '2021-10-17 04:08:38'),
(17, '1', '76827', 'ورود به حساب', '2021-10-17 04:10:18', '2021-10-17 04:10:18'),
(18, '1', '82042', 'ورود به حساب', '2021-12-23 10:42:17', '2021-12-23 10:42:17'),
(19, '1', '34923', 'سفارش شما تحویل داده شد', '2022-05-17 11:38:58', '2022-05-17 11:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 3, 'توحید\'s Team', 1, '2021-03-16 12:31:08', '2021-03-16 12:31:08'),
(2, 4, 'توحید\'s Team', 1, '2021-03-22 11:03:01', '2021-03-22 11:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_invitations`
--

INSERT INTO `team_invitations` (`id`, `team_id`, `email`, `role`, `created_at`, `updated_at`) VALUES
(1, 1, 'tdanandeh@yahoo.com', 'admin', '2021-03-16 12:51:07', '2021-03-16 12:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `title_category_indices`
--

CREATE TABLE `title_category_indices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `title_category_indices`
--

INSERT INTO `title_category_indices` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'دوربین عکاسی', '2021-05-06 23:19:20', '2021-05-06 23:19:20'),
(2, 'کارت حافظه', '2021-05-06 23:20:20', '2021-05-06 23:20:20'),
(3, 'دوربین فیلم برداری', '2021-05-06 23:20:33', '2021-05-06 23:20:33'),
(4, 'پرینتر', '2021-05-06 23:20:42', '2021-05-06 23:20:42'),
(5, 'کیس کامپیوتر', '2021-05-06 23:20:48', '2021-05-06 23:20:48'),
(6, 'کیف و کاور گوشی', '2021-05-06 23:20:59', '2021-05-06 23:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0,
  `staff` int(11) NOT NULL DEFAULT 0,
  `seller` int(11) DEFAULT 0,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newsletter` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `money_back` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_code_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sabt_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `staff`, `seller`, `img`, `name`, `mobile`, `national_code`, `email`, `email_verified_at`, `birthday`, `newsletter`, `job`, `money_back`, `name_company`, `national_code_company`, `code_company`, `sabt_company`, `state_company`, `city_company`, `phone_company`, `wallet`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 0, NULL, 'نیما پورحسین', '09378589767', '2165416518', 'admin@livedars.ir', '2021-12-09 08:13:47', '1371/09/02', '0', 'برنامه نویس، طراح و توسعه دهنده', '5415415151541510541514', 'لایودرس', '26266526526', '54151451515', '1588145451', 'هرمزگان', 'ابوموسی', '09369568668', '35000', '123456', NULL, NULL, NULL, NULL, '2021-12-09 04:43:47'),
(2, 0, 0, 0, NULL, 'حسن ولیزاده', '0915151511', '47478418414', 'ali@yahoo.com', '2021-12-09 08:20:40', '1370/06/04', '0', 'Developer', 'IR5805100000000587145151', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5000', '$2y$10$ihSvUkdQ3jw31NfNsv8rseBOWQeJwdnIKMiZR2r.H19UuAYjANTlS', NULL, NULL, NULL, NULL, '2021-12-09 04:50:40'),
(6, 0, 1, 0, NULL, 'توحید داننده', '09141548484', '4900387463', 'tlivedars@yahoo.com', '2021-12-09 08:13:51', '1372/07/8', '0', 'Programmer', 'IR5805100000000587145151', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '123456', NULL, NULL, NULL, '2021-09-16 09:41:49', '2021-12-09 04:43:51'),
(7, 0, 0, 0, 'user/2021/12/download.jfif', 'حسین زینالی', '09120124544', NULL, 'hoseinza@gmail.com', '2021-12-09 08:17:45', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, '2021-12-09 04:47:38', '2021-12-09 04:47:45'),
(8, 1, 0, 0, NULL, 'تست ادمین', '0912454114', NULL, 'admin@email.com', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, '2021-12-09 04:51:09', '2021-12-09 04:51:09'),
(9, 0, 1, 0, 'user/2021/12/images.jfif', 'سارا حمیدی', '', NULL, 'sara@nn.com', '2021-12-23 14:30:02', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, '2021-12-09 04:51:43', '2021-12-23 11:00:02'),
(11, 0, 0, 0, NULL, 'حسن نیازی', '09378589727', NULL, 'test@dd.com', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$DoDrfCld/JASBlne.3h1b.h4oMRTiLygJxERuhJm3EzoqpKH7GfkC', NULL, NULL, NULL, '2021-12-23 10:41:16', '2021-12-23 10:41:16'),
(19, 0, 0, 1, NULL, 'توحید', '09152151515', '1515145114', 'tdanand2eh@yahoo.com', NULL, '1999-07-27', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$KpBBYH2bJozh1Cto2stMq.YESkZwfMpTmjpO2u/8yg9jZCox0yuLK', NULL, NULL, NULL, '2022-03-27 05:02:45', '2022-03-27 05:02:45'),
(20, 0, 0, 1, NULL, 'توحید', '021', '5165514541515', 'rrr@rr.com', NULL, '2011-03-09', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$PusY.8xQFkKyotmBtsZfUevs8How/QQ/ygbip4UeLiI.4f7zEcRC.', NULL, NULL, NULL, '2022-04-11 14:42:04', '2022-04-11 14:42:04'),
(21, 0, 0, 1, NULL, 'جمشید', '09914854154', '55151541515', 'tdanandeuuh@yahoo.com', NULL, '1999-04-13', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$nxPiD0RkElT3r7KCzUQQzuem58dBVd6QfzaoH0gkpFBpnWBACHuqy', NULL, NULL, NULL, '2022-04-15 05:40:29', '2022-04-15 05:40:29'),
(24, 0, 0, 1, NULL, 'توحید', '09155210505', '151515151515', 'dssddsd@fdskfjdk.com', NULL, '1986-02-17', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$zgDUGBCJJ5qfnQcVj2QuGug.PYQS3ImiEZNLaEDcpyMlHzA6kjRte', NULL, NULL, NULL, '2022-05-09 04:40:25', '2022-05-09 04:40:25'),
(25, 0, 0, 1, NULL, 'حسن', '09151515151', '141498149849', 'tdana45145ndeh@yahoo.com', NULL, '2006-06-13', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$S1PWNI51uXEL9dAGKjJHre2idqARakW1zB0.cxInGIu/BQC.z9CcS', NULL, NULL, NULL, '2022-05-09 04:51:54', '2022-05-09 04:51:54'),
(26, 0, 0, 1, NULL, 'توحید', '0912515151', '215151052052', 'tdaghandeh@yahoo.com', NULL, '2022-05-04', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$DRfUnXQy6mgRLb8k29IA2.g823eRuuy42U0tuFQk.zFY9X4DglA4a', NULL, NULL, NULL, '2022-05-09 08:40:50', '2022-05-09 08:40:50'),
(28, 0, 0, 1, NULL, 'سارا', '09125451515', '15151515151', 'tdanandeh@yahdsdsoo.com', NULL, '1985-10-22', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$CKW4qAd9QelCIQOUcZk4Xuu8BHc1D.dzKzVQ0rNv9d2ykkhhXVCz2', NULL, NULL, NULL, '2022-05-09 08:58:48', '2022-05-09 08:58:48'),
(30, 0, 0, 1, NULL, 'زهرا', '02151052151', '51515818181 ', 'tdanan222222deh@yahoo.com', NULL, '2006-10-09', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$x.ePnt70.XSuYHZNY5SSgO3kYMmFA2f4rL2JRPZnPwa/wqTB6UeW6', NULL, NULL, NULL, '2022-05-09 16:08:00', '2022-05-09 16:08:00'),
(32, 0, 0, 1, NULL, 'حسن', '51515151515', '485485489489', 'tdasdnandeh@yahoo.com', NULL, '2022-05-18', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$aRPyxLH5HNdrg3KLi1hJvu1k/S6vnJZrjIJwo8lnj1HBlvR3vPhtu', NULL, NULL, NULL, '2022-05-10 06:56:02', '2022-05-10 06:56:02'),
(34, 0, 0, 1, NULL, 'حسن', '51515151515', '15151515151515', 'tdanandeh@ydahoo.com', NULL, '2015-02-10', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$pFCaZTVFeIkQXuCGqShztOIVgiGdyStczsNtSRocQFf2.N8adBPZW', NULL, NULL, NULL, '2022-05-10 16:26:01', '2022-05-10 16:26:01'),
(49, 0, 0, 1, NULL, NULL, NULL, NULL, 'dsssssss@dssss.com', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$mSpUVUrQH0vseiwCpDhBz.L3khnI74fZEbL1TlmSbXfo4ZL9zuCki', NULL, NULL, NULL, '2022-05-10 16:48:13', '2022-05-10 16:48:13'),
(50, 0, 0, 1, NULL, 'sddssss', '51151515', '15151111111111', 'dfssdf@dsd.com', NULL, '2022-05-17', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$tK6A/teO6UhRsKkrW8auresaz2JDZj1Jur2KITkMvCYk2hNT76MIG', NULL, NULL, NULL, '2022-05-10 16:51:05', '2022-05-10 16:51:05'),
(51, 0, 0, 1, NULL, 'توحید', '09125151515', '1548418181888', 'livedars@gmail.com', NULL, '1990-06-05', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$vPDTB2.n0INFazAdSul/d.BVtDpeSsX.7YWJ7uLTi2LUnEvGkZ0/S', NULL, NULL, NULL, '2022-05-11 08:14:11', '2022-05-11 08:14:11'),
(53, 0, 0, 1, NULL, 'توحید', '5155', '59595959', 'dd@gmaial.com', NULL, '1999-05-04', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$10iiTC1AxB8pEchRFPNBbuhWMaFejpOqcya6LYNcBbjOxtdKxMR7W', NULL, NULL, NULL, '2022-05-11 08:32:01', '2022-05-11 08:32:01'),
(54, 0, 0, 1, NULL, 'حسن ', '5115', '18188181', 'tohid@gmail.com', NULL, '1897-02-21', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$vmhO4FSBbCdzvZpAqO7EZOP0iuRxJs6KOr6mNMdM.FMrOr.kDorRS', NULL, NULL, NULL, '2022-05-11 09:30:39', '2022-05-11 09:30:39'),
(56, 0, 0, 1, NULL, 'حسن', '09120123467', '455451515155', 'hassan@gmail.com', NULL, '2022-05-18', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '123456789', NULL, NULL, NULL, '2022-05-11 09:37:17', '2022-05-11 09:38:35'),
(58, 0, 0, 1, NULL, 'توحید ', '09115215151', '8484848484', 't@d.com', NULL, '2022-05-11', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$PZdpoh4fnCPfQZuCOlG6kuYoA63HBZrgUDzbmS5E7Eut8.Um3hsKa', NULL, NULL, NULL, '2022-05-11 09:41:50', '2022-05-11 09:42:30'),
(60, 0, 0, 0, NULL, NULL, '09120634157', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$objq11Z6GBJf7Vv8nQKsZOEhiFmm5/XEUXUVxQifAk9I8PhPcLvT6', NULL, NULL, NULL, '2022-05-24 12:43:10', '2022-05-24 12:43:10'),
(61, 0, 0, 1, NULL, NULL, '09151515151', NULL, 'dfdffd@ff.com', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '$2y$10$fdiOksqcgY.TBmwpwZDm5OniHWW1gYi9EDEDJRUhUa3sQ6Vp0KHI2', NULL, NULL, NULL, '2022-05-24 13:20:46', '2022-07-24 13:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_histories`
--

CREATE TABLE `user_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_histories`
--

INSERT INTO `user_histories` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '1', '2', '2021-10-09 08:47:56', '2021-10-09 08:47:56'),
(3, '1', '9', '2021-10-09 08:48:27', '2021-10-09 08:48:27'),
(6, '1', '3', '2021-10-09 09:04:31', '2021-10-09 09:04:31'),
(7, '9', '2', '2021-12-10 20:54:28', '2021-12-10 20:54:28'),
(8, '58', '2', '2022-05-12 05:07:05', '2022-05-12 05:07:05'),
(9, '58', '3', '2022-05-12 05:07:08', '2022-05-12 05:07:08'),
(10, '1', '13', '2022-07-24 14:21:17', '2022-07-24 14:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `warranties`
--

CREATE TABLE `warranties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warranties`
--

INSERT INTO `warranties` (`id`, `name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'گارانتی ۱۸ ماهه دیجی کالا', '1', NULL, '2021-03-25 17:03:20', '2021-03-25 17:03:20'),
(3, 'مرکز تامین کالای دیجیتال ایران', '1', NULL, '2021-03-25 17:03:42', '2021-03-25 17:03:42'),
(4, 'راتین رایا2', '1', NULL, '2021-03-25 17:03:51', '2021-03-25 17:23:04'),
(5, 'آریان پاسارگاد لیان', '1', NULL, '2021-03-25 17:23:00', '2021-03-25 17:23:03'),
(6, ' آواژنگ', '1', NULL, '2021-03-25 17:23:46', '2021-03-25 17:23:49'),
(7, 'تست', '1', NULL, '2021-04-01 02:38:21', '2021-04-01 02:38:21'),
(8, 'تست2', '1', NULL, '2021-04-01 02:38:26', '2021-04-01 02:38:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address_times`
--
ALTER TABLE `address_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads_categories`
--
ALTER TABLE `ads_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_payments`
--
ALTER TABLE `bank_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
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
-- Indexes for table `category_indices`
--
ALTER TABLE `category_indices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_level4s`
--
ALTER TABLE `category_level4s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_levels`
--
ALTER TABLE `category_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compares`
--
ALTER TABLE `compares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favlist_product`
--
ALTER TABLE `favlist_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fav_lists`
--
ALTER TABLE `fav_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_inner_boxes`
--
ALTER TABLE `footer_inner_boxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_link_ones`
--
ALTER TABLE `footer_link_ones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_link_threes`
--
ALTER TABLE `footer_link_threes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_link_titles`
--
ALTER TABLE `footer_link_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_link_twos`
--
ALTER TABLE `footer_link_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_partners`
--
ALTER TABLE `footer_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_titles`
--
ALTER TABLE `footer_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gifts`
--
ALTER TABLE `gifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letters`
--
ALTER TABLE `news_letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `observeds`
--
ALTER TABLE `observeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`permission_id`,`user_id`),
  ADD KEY `permission_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `price_dates`
--
ALTER TABLE `price_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_new_selecteds`
--
ALTER TABLE `product_new_selecteds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_selecteds`
--
ALTER TABLE `product_selecteds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sellers`
--
ALTER TABLE `product_sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sell_tests`
--
ALTER TABLE `product_sell_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_banners`
--
ALTER TABLE `profile_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt_centers`
--
ALTER TABLE `receipt_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_orders`
--
ALTER TABLE `return_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_reasons`
--
ALTER TABLE `return_reasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_docs`
--
ALTER TABLE `seller_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `setting_footers`
--
ALTER TABLE `setting_footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_headers`
--
ALTER TABLE `site_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_products`
--
ALTER TABLE `special_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_m_s`
--
ALTER TABLE `s_m_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `title_category_indices`
--
ALTER TABLE `title_category_indices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_histories`
--
ALTER TABLE `user_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warranties`
--
ALTER TABLE `warranties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `address_times`
--
ALTER TABLE `address_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ads_categories`
--
ALTER TABLE `ads_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `bank_payments`
--
ALTER TABLE `bank_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `category_indices`
--
ALTER TABLE `category_indices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `category_level4s`
--
ALTER TABLE `category_level4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_levels`
--
ALTER TABLE `category_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `child_categories`
--
ALTER TABLE `child_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `compares`
--
ALTER TABLE `compares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favlist_product`
--
ALTER TABLE `favlist_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `fav_lists`
--
ALTER TABLE `fav_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `footer_inner_boxes`
--
ALTER TABLE `footer_inner_boxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `footer_link_ones`
--
ALTER TABLE `footer_link_ones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footer_link_threes`
--
ALTER TABLE `footer_link_threes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `footer_link_titles`
--
ALTER TABLE `footer_link_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `footer_link_twos`
--
ALTER TABLE `footer_link_twos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer_partners`
--
ALTER TABLE `footer_partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `footer_titles`
--
ALTER TABLE `footer_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gifts`
--
ALTER TABLE `gifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1172;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `observeds`
--
ALTER TABLE `observeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `price_dates`
--
ALTER TABLE `price_dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_new_selecteds`
--
ALTER TABLE `product_new_selecteds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_selecteds`
--
ALTER TABLE `product_selecteds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_sellers`
--
ALTER TABLE `product_sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_sell_tests`
--
ALTER TABLE `product_sell_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profile_banners`
--
ALTER TABLE `profile_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `receipt_centers`
--
ALTER TABLE `receipt_centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `return_orders`
--
ALTER TABLE `return_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `return_reasons`
--
ALTER TABLE `return_reasons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `seller_docs`
--
ALTER TABLE `seller_docs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setting_footers`
--
ALTER TABLE `setting_footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_headers`
--
ALTER TABLE `site_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `special_products`
--
ALTER TABLE `special_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `s_m_s`
--
ALTER TABLE `s_m_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `title_category_indices`
--
ALTER TABLE `title_category_indices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `user_histories`
--
ALTER TABLE `user_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `warranties`
--
ALTER TABLE `warranties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
