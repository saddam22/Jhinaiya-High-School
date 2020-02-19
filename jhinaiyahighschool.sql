-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 02:57 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jhinaiyahighschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_orientations`
--

CREATE TABLE `admission_orientations` (
  `admission_orientation_id` int(10) UNSIGNED NOT NULL,
  `admission_orientation_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_orientation_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admission_orientations`
--

INSERT INTO `admission_orientations` (`admission_orientation_id`, `admission_orientation_title`, `admission_orientation_description`, `created_at`, `updated_at`) VALUES
(1, 'admission open', 'nice to meet you', '2020-02-16 19:49:35', '2020-02-16 19:49:35'),
(2, 'Orientation', 'Orientation is Open', '2020-02-16 19:56:35', '2020-02-16 19:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_include_schools`
--

CREATE TABLE `frontend_include_schools` (
  `include_school_id` int(10) UNSIGNED NOT NULL,
  `include_school_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `include_school_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `include_school_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_include_schools`
--

INSERT INTO `frontend_include_schools` (`include_school_id`, `include_school_image`, `include_school_title`, `include_school_address`, `created_at`, `updated_at`) VALUES
(1, 'Picture', 'Jhinaiya High School', 'Jhinaiya', '2020-02-16 13:17:19', '2020-02-16 13:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_latest_school_news`
--

CREATE TABLE `frontend_latest_school_news` (
  `school_news_id` int(10) UNSIGNED NOT NULL,
  `school_news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_news_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_latest_school_news`
--

INSERT INTO `frontend_latest_school_news` (`school_news_id`, `school_news_title`, `school_news_description`, `created_at`, `updated_at`) VALUES
(1, 'sunday is class off', 'sunday is class off for all student', '2020-02-16 06:07:14', '2020-02-16 06:07:14'),
(3, 'top learn', 'check sum', '2020-02-16 06:22:00', '2020-02-16 06:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_learn_shares`
--

CREATE TABLE `frontend_learn_shares` (
  `learn_share_id` int(10) UNSIGNED NOT NULL,
  `learn_share_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `learn_share_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_learn_shares`
--

INSERT INTO `frontend_learn_shares` (`learn_share_id`, `learn_share_title`, `learn_share_description`, `created_at`, `updated_at`) VALUES
(1, 'To be descipline', 'talk to many', '2020-02-16 14:03:53', '2020-02-16 14:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_notices`
--

CREATE TABLE `frontend_notices` (
  `notice_id` int(10) UNSIGNED NOT NULL,
  `notice_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_notices`
--

INSERT INTO `frontend_notices` (`notice_id`, `notice_title`, `created_at`, `updated_at`) VALUES
(1, 'result will be out in the tomorrow', '2020-02-16 19:21:40', '2020-02-16 19:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_practice_wishs`
--

CREATE TABLE `frontend_practice_wishs` (
  `practice_wish_id` int(10) UNSIGNED NOT NULL,
  `practice_wish_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `practice_wish_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_practice_wishs`
--

INSERT INTO `frontend_practice_wishs` (`practice_wish_id`, `practice_wish_title`, `practice_wish_description`, `created_at`, `updated_at`) VALUES
(1, 'to be practice', 'finger type', '2020-02-16 14:26:02', '2020-02-16 14:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_student_reviews`
--

CREATE TABLE `frontend_student_reviews` (
  `student_review_id` int(10) UNSIGNED NOT NULL,
  `student_review_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_review_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_student_reviews`
--

INSERT INTO `frontend_student_reviews` (`student_review_id`, `student_review_title`, `student_review_description`, `created_at`, `updated_at`) VALUES
(1, 'this is good', 'wow to school', '2020-02-16 18:53:05', '2020-02-16 18:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_upcoming_events`
--

CREATE TABLE `frontend_upcoming_events` (
  `upcoming_events_id` int(10) UNSIGNED NOT NULL,
  `upcoming_events_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upcoming_events_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_upcoming_events`
--

INSERT INTO `frontend_upcoming_events` (`upcoming_events_id`, `upcoming_events_title`, `upcoming_events_address`, `created_at`, `updated_at`) VALUES
(1, 'sport news', 'jhinaiya high school', '2020-02-16 09:30:15', '2020-02-16 09:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `MenuName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `MenuName`, `created_at`, `updated_at`) VALUES
(1, 'Home', '2020-02-14 13:44:02', '2020-02-14 13:44:02'),
(2, 'Class', '2020-02-14 13:58:41', '2020-02-14 13:58:41'),
(3, 'Teacher', '2020-02-14 13:59:07', '2020-02-14 13:59:07'),
(4, 'Student', '2020-02-14 13:59:14', '2020-02-14 13:59:14'),
(5, 'Result', '2020-02-14 13:59:23', '2020-02-14 13:59:23'),
(6, 'Institute', '2020-02-14 13:59:31', '2020-02-14 13:59:31'),
(7, 'Donation', '2020-02-14 13:59:58', '2020-02-14 13:59:58'),
(8, 'About Creation', '2020-02-14 14:00:12', '2020-02-14 14:00:12'),
(9, 'চল শিখি/শিখাই', '2020-02-14 14:00:21', '2020-02-14 14:00:21');

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
(3, '2020_02_14_191112_create_menus_table', 2),
(4, '2020_02_14_202526_create_sub_categories_table', 3),
(5, '2020_02_16_105733_create_frontend_latest_school_news_table', 4),
(6, '2020_02_16_134005_create_frontend_upcoming_events_table', 5),
(7, '2020_02_16_162652_create_frontend__include__schools_table', 6),
(8, '2020_02_16_183839_create_frontend__include__schools_table', 7),
(9, '2020_02_16_184833_create_frontend__include__schools_table', 8),
(10, '2020_02_16_191247_create_frontend_include_schools_table', 9),
(11, '2020_02_16_195710_create_frontend_learn_shares_table', 10),
(12, '2020_02_16_200814_create_frontend_practice_wishs_table', 11),
(13, '2020_02_17_003147_create_frontend_student_reviews_table', 12),
(14, '2020_02_17_010644_create_frontend_notices_table', 13),
(15, '2020_02_17_013620_create_admission_orientations_table', 14),
(16, '2020_02_19_080425_create_sliders_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_head` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_para` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `SubMenuName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Menu_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `SubMenuName`, `Menu_id`, `created_at`, `updated_at`) VALUES
(1, 'Six', '2', '2020-02-14 14:51:54', '2020-02-14 14:51:54'),
(3, 'Seven', '2', '2020-02-14 15:05:14', '2020-02-14 15:05:14'),
(4, 'Eight', '2', '2020-02-14 15:05:23', '2020-02-14 15:05:23'),
(5, 'Nine', '2', '2020-02-14 15:05:32', '2020-02-14 15:05:32'),
(6, 'Ten', '2', '2020-02-14 15:05:39', '2020-02-14 15:05:39'),
(7, 'Six', '5', '2020-02-14 15:06:08', '2020-02-14 15:06:08'),
(8, 'Seven', '5', '2020-02-14 15:06:19', '2020-02-14 15:06:19'),
(9, 'Eight', '5', '2020-02-14 15:06:28', '2020-02-14 15:06:28'),
(10, 'Nine', '5', '2020-02-14 15:06:36', '2020-02-14 15:06:36'),
(11, 'Ten', '5', '2020-02-14 15:06:56', '2020-02-14 15:06:56'),
(12, 'wanbahjahkas.net', '9', '2020-02-14 15:08:11', '2020-02-14 15:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'asad', 'asad@gmail.com', NULL, '$2y$10$Drejkj4wOKkzoJ16/UmrzuyLHjrz13aHJje9SIqxCOIo4z83XNLjS', NULL, '2020-02-13 10:10:22', '2020-02-13 10:10:22'),
(2, 'Mohammad Nikon', 'monikon@gmail.com', NULL, '$2y$10$nHmP45wJSzeYurdAzkYkE.GQWdIqe539C5b3Pcd.QDxDCpU/tIl4i', NULL, '2020-02-13 11:14:04', '2020-02-13 11:14:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_orientations`
--
ALTER TABLE `admission_orientations`
  ADD PRIMARY KEY (`admission_orientation_id`);

--
-- Indexes for table `frontend_include_schools`
--
ALTER TABLE `frontend_include_schools`
  ADD PRIMARY KEY (`include_school_id`);

--
-- Indexes for table `frontend_latest_school_news`
--
ALTER TABLE `frontend_latest_school_news`
  ADD PRIMARY KEY (`school_news_id`);

--
-- Indexes for table `frontend_learn_shares`
--
ALTER TABLE `frontend_learn_shares`
  ADD PRIMARY KEY (`learn_share_id`);

--
-- Indexes for table `frontend_notices`
--
ALTER TABLE `frontend_notices`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `frontend_practice_wishs`
--
ALTER TABLE `frontend_practice_wishs`
  ADD PRIMARY KEY (`practice_wish_id`);

--
-- Indexes for table `frontend_student_reviews`
--
ALTER TABLE `frontend_student_reviews`
  ADD PRIMARY KEY (`student_review_id`);

--
-- Indexes for table `frontend_upcoming_events`
--
ALTER TABLE `frontend_upcoming_events`
  ADD PRIMARY KEY (`upcoming_events_id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_orientations`
--
ALTER TABLE `admission_orientations`
  MODIFY `admission_orientation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `frontend_include_schools`
--
ALTER TABLE `frontend_include_schools`
  MODIFY `include_school_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `frontend_latest_school_news`
--
ALTER TABLE `frontend_latest_school_news`
  MODIFY `school_news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `frontend_learn_shares`
--
ALTER TABLE `frontend_learn_shares`
  MODIFY `learn_share_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `frontend_notices`
--
ALTER TABLE `frontend_notices`
  MODIFY `notice_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `frontend_practice_wishs`
--
ALTER TABLE `frontend_practice_wishs`
  MODIFY `practice_wish_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `frontend_student_reviews`
--
ALTER TABLE `frontend_student_reviews`
  MODIFY `student_review_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `frontend_upcoming_events`
--
ALTER TABLE `frontend_upcoming_events`
  MODIFY `upcoming_events_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
