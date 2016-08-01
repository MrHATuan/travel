-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2016 at 04:32 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `plan_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `cm_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `plan_id`, `content`, `cm_image`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Comment đầu tiên user  id=1\nádasdasd\nádasdasdasd\nczxczxdff dsfdsfdsf sdf sdf sd sdf sdfsdfd sdfdsf\nzxczxc\nzxczxc\nzxczxc\nasdasygdhjakcnxzcbzxjcnmzxcibasjkdnasndasijbdjkc asncascklanscksaclaslc akncaskclascascasc', '', 0, NULL, NULL),
(2, 2, 1, 'comment by user id =2', 'vidu.jpg', 0, NULL, NULL),
(4, 1, 2, 'scsdasdasdsadasdas', NULL, 0, NULL, NULL),
(6, 1, 1, 'đasadasdsdsds', NULL, 1, NULL, NULL),
(7, 2, 1, 'dsffsdf sdfdfsdfsdf có một sự thật là  kbieeys comt dài thì ntn''\r\násđ phasdkasddnass á asdsad sdfdsfd dsfd sdfsdsdfsdf dsf dsfd sdf sdf sd asd asdasd asddf c c sd sda asd g dsf  sd sdf sdf dsf sdf eq wqeqweqwe sdfd wqewqe sdfsdfwew wewqe sdfsd sdfsd sdf sdf sdfdsf sdf sdf sdf sdf sdf sdf dsf sdf sdf sdf sdf sdf ', 'vidu.jpg', 1, NULL, NULL),
(8, 2, 1, 'dfdsfdsf\r\nsfdf\r\nsdfsdf\r\nsdfsdf', 'vidu.jpg', 2, NULL, NULL),
(9, 1, 1, 'ádasdasd\r\nádasđsad', NULL, 2, NULL, NULL),
(10, 1, 1, '', 'vidu.jpg', 1, NULL, NULL),
(11, 1, 7, '12321323', NULL, 0, '2016-07-28 07:12:25', '2016-07-28 07:12:25'),
(17, 1, 7, 'xcbcxbcbxczxcz', NULL, 0, '2016-07-28 07:44:26', '2016-07-28 07:44:26'),
(20, 1, 6, 'ádaasffasf', NULL, 0, '2016-07-28 09:33:46', '2016-07-28 09:33:46'),
(22, 2, 6, 'sff fdf 23123 đa\r\n123213213\r\nxcxcxcv', NULL, 0, '2016-07-28 16:41:22', '2016-07-28 16:41:22'),
(25, 2, 6, 'vbnm,', '1469739412.jpg', 0, '2016-07-28 20:56:54', '2016-07-28 20:56:54'),
(26, 2, 6, '12345dfvgbnm  cvbnm', '1469739549.jpg', 0, '2016-07-28 20:59:10', '2016-07-28 20:59:10'),
(28, 2, 7, 'vbnm, ưewe', NULL, 0, '2016-07-28 21:03:15', '2016-07-28 21:03:15'),
(29, 2, 7, '', '1469740266.jpg', 0, '2016-07-28 21:11:06', '2016-07-28 21:11:06'),
(30, 2, 8, '', '1469741774.jpg', 0, '2016-07-28 21:36:15', '2016-07-28 21:36:15'),
(31, 2, 8, 'xcvbnm,', 'vidu.jpg', 30, NULL, NULL),
(32, 3, 1, 'ádfghj', NULL, 0, '2016-07-29 06:34:43', '2016-07-29 06:34:43'),
(33, 3, 8, 'vzxbnmzx,vcxzv', '1469775382.jpg', 0, '2016-07-29 06:56:22', '2016-07-29 06:56:22'),
(34, 3, 8, 'xcvbnm,', '1469776080.jpg', 0, '2016-07-29 07:08:00', '2016-07-29 07:08:00'),
(41, 3, 8, '', '1469818477.jpg', 0, '2016-07-29 18:54:37', '2016-07-29 18:54:37'),
(42, 3, 8, 'vxbxczxczxvx', NULL, 0, '2016-07-29 18:56:21', '2016-07-29 18:56:21'),
(43, 3, 8, '1234', NULL, 30, '2016-07-29 19:06:02', '2016-07-29 19:06:02'),
(45, 3, 8, '', '1469821304.jpg', 30, '2016-07-29 19:41:44', '2016-07-29 19:41:44'),
(46, 3, 8, 'ádfghjk', NULL, 30, '2016-07-29 19:41:53', '2016-07-29 19:41:53'),
(47, 2, 6, 'adasdasdsd', NULL, 26, '2016-07-29 20:31:16', '2016-07-29 20:31:16'),
(48, 3, 9, 'Mọi người đi nhé... Biển đẹp lắm', '1469847873.jpg', 0, '2016-07-30 03:04:33', '2016-07-30 03:04:33'),
(49, 3, 9, 'mọi người tập trung đúng hẹn nhé', NULL, 0, '2016-07-30 03:07:45', '2016-07-30 03:07:45'),
(53, 3, 9, 'có girl xinh đây', '1469848988.jpg', 49, '2016-07-30 03:23:08', '2016-07-30 03:23:08'),
(54, 3, 9, 'thêm ảnh về biển', NULL, 0, '2016-07-30 03:24:38', '2016-07-30 03:24:38'),
(55, 3, 9, '', '1469849095.jpg', 54, '2016-07-30 03:24:55', '2016-07-30 03:24:55'),
(56, 3, 9, 'lướt ván thôi', NULL, 54, '2016-07-30 03:25:12', '2016-07-30 03:25:12'),
(57, 1, 16, 'hsdjfhdsjfhskdf', NULL, 0, '2016-08-01 01:35:24', '2016-08-01 01:35:24'),
(58, 1, 16, '', '1470015528.jpg', 57, '2016-08-01 01:38:48', '2016-08-01 01:38:48'),
(59, 1, 16, 'sdfsdfdsfsd', NULL, 0, '2016-08-01 02:06:54', '2016-08-01 02:06:54'),
(60, 1, 16, 'dfsdfsdf', '1470017230.jpg', 0, '2016-08-01 02:07:11', '2016-08-01 02:07:11'),
(61, 1, 16, 'adasd', '1470017244.jpg', 60, '2016-08-01 02:07:24', '2016-08-01 02:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `plan_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `user_id`, `plan_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2016-07-28 06:50:45', '2016-07-28 06:50:45'),
(3, 2, 6, '2016-07-28 16:02:55', '2016-07-28 16:02:55'),
(4, 2, 1, '2016-07-29 20:26:49', '2016-07-29 20:26:49'),
(5, 4, 8, '2016-07-30 03:42:32', '2016-07-30 03:42:32'),
(6, 4, 7, '2016-07-30 03:42:47', '2016-07-30 03:42:47'),
(7, 1, 14, '2016-07-30 12:46:54', '2016-07-30 12:46:54'),
(9, 2, 16, '2016-08-01 02:13:26', '2016-08-01 02:13:26'),
(10, 2, 18, '2016-08-01 02:16:13', '2016-08-01 02:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `joins`
--

CREATE TABLE `joins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `plan_id` int(10) UNSIGNED NOT NULL,
  `join` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `joins`
--

INSERT INTO `joins` (`id`, `user_id`, `plan_id`, `join`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2016-07-19 01:36:46', '2016-07-19 01:36:46'),
(3, 2, 3, 1, '2016-07-19 08:14:07', '2016-07-19 08:14:07'),
(5, 1, 3, 0, NULL, NULL),
(6, 2, 5, 1, '2016-07-21 08:33:40', '2016-07-21 08:33:40'),
(8, 1, 7, 1, '2016-07-28 06:47:55', '2016-07-28 06:47:55'),
(10, 2, 7, 0, '2016-07-28 16:03:18', '2016-07-28 16:03:18'),
(11, 2, 8, 1, '2016-07-28 21:31:03', '2016-07-28 21:31:03'),
(12, 3, 9, 1, '2016-07-30 03:03:58', '2016-07-30 03:03:58'),
(13, 3, 10, 1, '2016-07-30 03:36:54', '2016-07-30 03:36:54'),
(14, 4, 10, 1, '2016-07-30 03:42:59', '2016-07-30 12:48:26'),
(15, 4, 9, 0, '2016-07-30 03:43:11', '2016-07-30 03:43:11'),
(16, 4, 14, 1, '2016-07-30 03:47:50', '2016-07-30 03:47:50'),
(17, 1, 10, 1, '2016-07-30 12:47:07', '2016-07-30 12:48:24'),
(18, 1, 9, 1, '2016-07-30 12:47:22', '2016-07-30 12:48:45'),
(19, 1, 15, 1, '2016-07-31 11:47:54', '2016-07-31 11:47:54'),
(20, 1, 16, 1, '2016-07-31 11:51:01', '2016-07-31 11:51:01'),
(22, 1, 18, 1, '2016-08-01 02:11:35', '2016-08-01 02:11:35'),
(24, 2, 19, 1, '2016-08-01 02:18:13', '2016-08-01 02:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_07_14_152337_create_plans_table', 1),
('2016_07_14_154716_create_joins_table', 1),
('2016_07_14_154749_create_follows_table', 1),
('2016_07_14_155300_create_routes_table', 1),
('2016_07_14_161610_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name_plan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_start` date NOT NULL,
  `max_user` int(11) NOT NULL,
  `cover_plan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `ggmap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `user_id`, `name_plan`, `date_start`, `max_user`, `cover_plan`, `status`, `ggmap`, `created_at`, `updated_at`) VALUES
(1, 1, 'HoàngTuaans', '2016-11-11', 5, '1468892205.jpg', 0, '', '2016-07-19 01:36:46', '2016-07-25 12:10:11'),
(2, 2, 'abcasdas', '2011-11-11', 10, '1469090175.jpg', 1, '', '2016-07-19 03:22:41', '2016-07-24 09:47:34'),
(3, 2, 'Kế hoạchmowi', '2001-11-11', 15, '1468916045.jpg', 0, '', '2016-07-19 08:14:07', '2016-07-19 08:14:07'),
(4, 2, 'Kế hoạch mới', '2017-11-21', 15, '1468916045.jpg', 2, '', '2016-07-19 08:14:07', '2016-07-24 09:54:38'),
(5, 2, 'sdasd', '2022-02-11', 15, '1469090522.jpg', 1, '', '2016-07-21 08:33:40', '2016-07-21 09:12:53'),
(6, 1, '1234', '2016-07-30', 12, '1469688447.jpg', 0, '', '2016-07-28 06:47:29', '2016-07-28 06:47:29'),
(7, 1, '1234', '2016-07-30', 12, '1469688474.jpg', 0, '', '2016-07-28 06:47:55', '2016-07-28 06:47:55'),
(8, 2, 'tuán', '2016-08-12', 7, '1469741462.jpg', 0, '', '2016-07-28 21:31:03', '2016-07-28 21:31:03'),
(9, 3, 'Du lịch Biển', '2016-08-20', 10, '1469847837.jpg', 0, '', '2016-07-30 03:03:58', '2016-07-30 03:03:58'),
(10, 3, 'Phượt đồi núi', '2016-08-05', 12, '1469849813.jpg', 0, '', '2016-07-30 03:36:54', '2016-07-30 03:36:54'),
(14, 4, 'Đi phượt', '2016-08-01', 10, '1469850470.jpg', 0, '', '2016-07-30 03:47:50', '2016-07-30 03:47:50'),
(15, 1, 'gg map', '2016-11-11', 5, '1469965673.jpg', 0, '', '2016-07-31 11:47:54', '2016-07-31 11:47:54'),
(16, 1, 'gg map 2', '2016-11-12', 10, '1469965861.jpg', 2, '', '2016-07-31 11:51:01', '2016-08-01 02:07:48'),
(18, 1, 'đi phượt 1', '2016-08-12', 10, '1470017494.gif', 0, '', '2016-08-01 02:11:34', '2016-08-01 02:11:34'),
(19, 2, 'đi thái lan', '2016-08-20', 10, '1470017893.jpg', 0, '', '2016-08-01 02:18:13', '2016-08-01 02:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(10) UNSIGNED NOT NULL,
  `plan_id` int(10) UNSIGNED NOT NULL,
  `come_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `come_date` date NOT NULL,
  `stay_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stay_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activity` text COLLATE utf8_unicode_ci NOT NULL,
  `vehicle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `travel_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `plan_id`, `come_place`, `come_date`, `stay_time`, `stay_place`, `activity`, `vehicle`, `travel_time`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hà Nội', '2016-11-11', '1 giờ', 'không', 'Tập trung mọi người', 'xe máy', '3 giờ', '2016-07-19 01:36:46', NULL),
(2, 1, 'Tam Đảo', '2016-11-11', '1 ngày', 'ở lều', 'nhảy  múa hát ca', 'xe máy', '3 giờ', '2016-07-19 01:36:46', NULL),
(6, 3, '123', '1111-11-11', '3df', 'sfasdad', 'xcvcxvxcvxcvxcvx', 'cvxcvxv', 'xcvcxvcxv', '2016-07-19 08:14:07', NULL),
(7, 3, 'vvxcvc', '0000-00-00', 'cvbcbc', 'ưdasdasd', 'cbvcvsdcsdf', 'adascxvxcv', 'dsfdssdvd', '2016-07-19 08:14:07', NULL),
(8, 3, 'cvbfwqd', '6463-05-04', 'sdsfsf', 'bvnvbn', 'dfgdfgewrwe', 'bcvbcvb', 'vbnerwe', '2016-07-19 08:14:07', NULL),
(9, 3, 'nbde', '0013-02-23', 'bfdgewrw', 'dgdfgdfgd', 'brwerweterg', 'fsdfsaff', 'bnbvn', '2016-07-19 08:14:07', NULL),
(10, 3, 'fsdfsdf', '5533-07-06', 'sdfsdfsdf', 'fsdfwer', 'dfsdfwqrgfv', 'fsdfwerwe', 'fbfhfghfh', '2016-07-19 08:14:07', NULL),
(11, 3, '123', '1111-11-11', '3df', 'sfasdad', 'xcvcxvxcvxcvxcvx', 'cvxcvxv', 'xcvcxvcxv', '2016-07-19 08:14:07', NULL),
(12, 3, 'vvxcvc', '0000-00-00', 'cvbcbc', 'ưdasdasd', 'cbvcvsdcsdf', 'adascxvxcv', 'dsfdssdvd', '2016-07-19 08:14:07', NULL),
(13, 3, 'cvbfwqd', '6463-05-04', 'sdsfsf', 'bvnvbn', 'dfgdfgewrwe', 'bcvbcvb', 'vbnerwe', '2016-07-19 08:14:07', NULL),
(14, 3, 'nbde', '0013-02-23', 'bfdgewrw', 'dgdfgdfgd', 'brwerweterg', 'fsdfsaff', 'bnbvn', '2016-07-19 08:14:07', NULL),
(15, 3, 'fsdfsdf', '5533-07-06', 'sdfsdfsdf', 'fsdfwer', 'dfsdfwqrgfv', 'fsdfwerwe', 'fbfhfghfh', '2016-07-19 08:14:07', NULL),
(16, 5, '123', '0000-00-00', 'sad', 'sadwqe', 'fsdfsfdasd\r\neqweqwe\r\nqưeqwe\r\n', '3223', 'ewrewrwer', '2016-07-21 08:33:40', NULL),
(17, 5, '456', '0000-00-00', 'fsdfsdf', 'fsdfsdfdf', 'dfsdfsdfsdfs', 'sdfsdf', 'sdfdff', '2016-07-21 08:33:40', NULL),
(18, 2, '123', '1111-11-11', '2 ngày', 'qưeqweqwe', 'qưeqwewqeqweqqwe', 'qưeqe', 'qádas', '2016-07-21 08:36:16', NULL),
(19, 2, '456', '0000-00-00', '5 giờ', '122323qw', 'ádasdadad', 'adewqe', 'àewrwe', '2016-07-21 08:36:16', NULL),
(20, 4, 'qưeqwee', '0000-00-00', 'ưeqweqweqwe', 'ưesdfsdf', 'sdfewrwe\r\nsdfsdfs\r\nfsdfsf', 'ưerewrwe', 'ewrewrwerwe', '2016-07-21 08:41:03', NULL),
(21, 5, '123', '0000-00-00', 'sad', 'sadwqe', 'fsdfsfdasd\r\neqweqwe\r\nqưeqwe\r\n', '3223', 'ewrewrwer', '2016-07-21 08:42:03', NULL),
(22, 5, '456', '0000-00-00', 'fsdfsdf', 'fsdfsdfdf', 'dfsdfsdfsdfs', 'sdfsdf', 'sdfdff', '2016-07-21 08:42:03', NULL),
(23, 5, '123', '0000-00-00', 'sad', 'sadwqe', 'fsdfsfdasd\r\neqweqwe\r\nqưeqwe\r\n', '3223', 'ewrewrwer', '2016-07-21 09:12:53', NULL),
(24, 5, '456', '0000-00-00', 'fsdfsdf', 'fsdfsdfdf', 'dfsdfsdfsdfs', 'sdfsdf', 'sdfdff', '2016-07-21 09:12:53', NULL),
(25, 5, '123', '0000-00-00', 'sad', 'sadwqe', 'fsdfsfdasd\r\neqweqwe\r\nqưeqwe\r\n', '3223', 'ewrewrwer', '2016-07-21 09:12:53', NULL),
(26, 5, '456', '0000-00-00', 'fsdfsdf', 'fsdfsdfdf', 'dfsdfsdfsdfs', 'sdfsdf', 'sdfdff', '2016-07-21 09:12:53', NULL),
(27, 6, 'Hà Nội', '2016-07-30', '2 giờ', 'ĐH Bách Khoa', 'tập trung', 'xe máy', '5 giờ', '2016-07-28 06:47:29', NULL),
(28, 6, 'Ba Vì', '2016-07-30', '2 ngày', 'Lều trại', 'các hoạt động abc xyz', 'xe máy', '5 giờ', '2016-07-28 06:47:29', NULL),
(29, 7, 'Hà Nội', '2016-07-30', '2 giờ', 'ĐH Bách Khoa', 'tập trung', 'xe máy', '5 giờ', '2016-07-28 06:47:55', NULL),
(30, 7, 'Ba Vì', '2016-07-30', '2 ngày', 'Lều trại', 'các hoạt động abc xyz', 'xe máy', '5 giờ', '2016-07-28 06:47:55', NULL),
(31, 8, 'công viên ABC ', '2016-08-12', '5 giờ', 'ghế đá', 'xả giao', 'xe bus', '30 phut', '2016-07-28 21:31:03', NULL),
(32, 9, 'Hà Nội', '2016-08-28', '2 giờ', 'Tòa Keangnam', 'Tập trung mọi người', 'ô tô', '1 ngày', '2016-07-30 03:03:58', NULL),
(33, 9, 'Nha Trang', '2016-08-29', '3 ngày', 'khách sạn', 'Ngày 1: nghỉ ngơi + tắm biển\r\nNgày 2: tổ chức hoạt động, trò chơi\r\nNgày 3: chơi các khu xung quanh\r\n', 'máy bay', '2 giờ', '2016-07-30 03:03:58', NULL),
(34, 10, 'Hà Nội', '2016-08-05', '3 giờ', 'Tập trung ở keangnam', 'Tập trung mọi người', 'xe máy', '6 giờ', '2016-07-30 03:36:54', NULL),
(35, 10, 'Đồi núi A', '2016-08-05', '2 ngày', 'Lều trại', 'Băng qua các dãy núi\r\nsống là giỏi rồi', 'đi bộ', '2 ngày', '2016-07-30 03:36:54', NULL),
(36, 10, 'Đồi núi B', '2016-08-07', '2 ngày', 'Lều trại', 'Đii nốt còn về ', 'xe máy', '6-7 giờ', '2016-07-30 03:36:54', NULL),
(37, 15, 'Cầu Giấy, Hà Nội', '0000-00-00', '', '', '', '', '', '2016-07-31 11:47:54', NULL),
(38, 15, 'Đại học Bách Khoa  Hà Nội', '0000-00-00', '', '', '', '', '', '2016-07-31 11:47:54', NULL),
(39, 16, 'Hoàng Đạo Thúy, Hà Nội', '0000-00-00', '', '', '', '', '', '2016-07-31 11:51:01', NULL),
(40, 16, 'Trần Đại Nghĩa, Hà Nội', '0000-00-00', '', '', '', '', '', '2016-07-31 11:51:01', NULL),
(41, 16, 'Cầu Giấy, Hà Nội', '0000-00-00', '', '', '', '', '', '2016-07-31 11:51:01', NULL),
(42, 16, 'Lạc Long Quân, Hà Nội', '0000-00-00', '', '', '', '', '', '2016-07-31 11:51:01', NULL),
(48, 19, 'Hà Nội', '0000-00-00', '', '', '', '', '', '2016-08-01 02:18:13', NULL),
(49, 19, 'Bangkok', '0000-00-00', '', '', '', '', '', '2016-08-01 02:18:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `cover`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hoàng Tuấn', 'tuanha@gmail.com', '$2y$10$Cj7.Rq4if1xnAlflg9d.5.8Cka9mbuiOX30R8/eo5nPoh5YldwWpC', '1468892001.jpg', '1468891999.jpg', 'UcZYDGi8VLHoi0tUzGToVBp9meBD5I6URu9ji1I1fpTvddFUvLjr2jcYJ19F', '2016-07-19 01:32:33', '2016-08-01 02:15:22'),
(2, 'Tuan HA', 'tuan@gmail.com', '$2y$10$ZfZFGi6PTNvBiQgSanjS.uAxgNggDv5YAOgAXuWTL2UARoB8Pf7ZC', '1468908570.jpg', '1470017812.jpg', 'wX47UdLxQGUx3bmvZPKSl09aWb49SJNBaYgfM5dZ48tluG4j3jwmxdnd6bSt', '2016-07-19 01:53:14', '2016-08-01 02:16:52'),
(3, 'Tuan tai tu', 'tuan123@gmail.com', '$2y$10$e3.Rzilh2bl5YPkvf/xN9univwH6Pa3TB7wn545t4LGLBpWAnKYEe', '1469773412.jpg', '1469773411.jpg', 'pOOyTc9clB6zCeibK741jOoyEJpBwHlsnFzKZXJourkORnDXa5ivnbpg5Xet', '2016-07-29 06:21:50', '2016-07-30 13:03:35'),
(4, 'My User1', 'user1@gmail.com', '$2y$10$tXKPo.1XUEJJc4z6AMmKvujBj3UcBrsSeTt/IMqSFZjwliHlSECMm', 'default.jpg', 'default.jpg', NULL, '2016-07-30 03:42:14', '2016-07-30 03:42:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `follows_user_id_foreign` (`user_id`),
  ADD KEY `follows_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `joins`
--
ALTER TABLE `joins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `joins_user_id_foreign` (`user_id`),
  ADD KEY `joins_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plans_user_id_foreign` (`user_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `routes_plan_id_foreign` (`plan_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `joins`
--
ALTER TABLE `joins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `follows`
--
ALTER TABLE `follows`
  ADD CONSTRAINT `follows_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `follows_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `joins`
--
ALTER TABLE `joins`
  ADD CONSTRAINT `joins_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `joins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `plans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `routes`
--
ALTER TABLE `routes`
  ADD CONSTRAINT `routes_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
