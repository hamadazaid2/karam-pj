-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 01:11 PM
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
-- Database: `karam-pj`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_divs`
--

CREATE TABLE `about_divs` (
  `id` int(11) NOT NULL,
  `i_tag` text NOT NULL,
  `header` varchar(100) NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_divs`
--

INSERT INTO `about_divs` (`id`, `i_tag`, `header`, `paragraph`) VALUES
(1, '<span class=\"bgImg\"></span>', 'First div', 'This is first div'),
(2, '<span class=\"bgImg\"></span>', 'Second div', 'This is second div'),
(3, '<span class=\"bgImg\"></span>', 'Third div', 'This is third div');

-- --------------------------------------------------------

--
-- Table structure for table `customer_openion_divs`
--

CREATE TABLE `customer_openion_divs` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `header` varchar(50) NOT NULL COMMENT 'name',
  `header2` varchar(50) NOT NULL COMMENT 'title',
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_openion_divs`
--

INSERT INTO `customer_openion_divs` (`id`, `img`, `header`, `header2`, `paragraph`) VALUES
(1, 'hamada-styles/images/pro1.png', 'Ala Fsifes', 'Front-End Developer', 'You are a very respectable company and I wish you success always And that your services are constantly excellent because maintaining Success is difficult, you gave me the best service, thank you. '),
(2, 'hamada-styles/images/pro2.jpg', 'Ahmed Abuzaid', 'Front-End Developer2', 'You are a very respectable company and I wish you success always And that your services are constantly excellent because maintaining Success is difficult, you gave me the best service, thank you. 2'),
(3, 'hamada-styles/images/pro1.png', 'Haytham', 'Back-End', 'You are a very respectable company and I wish you success always And that your services are constantly excellent because maintaining Success is difficult, you gave me the best service, thank you. 3'),
(4, 'hamada-styles/images/pro2.jpg', 'Anas', 'Back-End2', 'You are a very respectable company and I wish you success always And that your services are constantly excellent because maintaining Success is difficult, you gave me the best service, thank you. 4');

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
-- Table structure for table `feature_divs`
--

CREATE TABLE `feature_divs` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `header` varchar(100) NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature_divs`
--

INSERT INTO `feature_divs` (`id`, `img`, `header`, `paragraph`) VALUES
(1, 'hamada-styles/images/ico1.png', 'PUSH NOTIFICATIONS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(2, 'hamada-styles/images/ico2.png', 'PUSH NOTIFICATIONS2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 2'),
(3, 'hamada-styles/images/ico3.png', 'PUSH NOTIFICATIONS3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.3'),
(4, 'hamada-styles/images/ico4.png', 'PUSH NOTIFICATIONS4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 4');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `name`, `text`) VALUES
(1, 'header1', 'This is header one '),
(2, 'header2', 'This is header two'),
(3, 'header3', 'This is header three'),
(4, 'header4', 'This is header four'),
(5, 'header5', 'This is header five'),
(6, 'paragraph1', 'This is paragraph one'),
(7, 'paragraph2', 'This is paragraph two'),
(8, 'paragraph3', 'This is paragraph three'),
(9, 'paragraph4', 'This is paragraph four'),
(10, 'img1', 'hamada-styles/images/imgSlider.png'),
(11, 'img2', 'hamada-styles/images/hero-img.png');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_11_075330_make-main-table-for-main-headers-and-paragraphs', 1),
(6, '2022_09_11_080437_make-main-table-for-main-headers-and-paragraphs', 2);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_setup`
--

CREATE TABLE `site_setup` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_setup`
--

INSERT INTO `site_setup` (`id`, `name`, `content`) VALUES
(1, 'logo', 'hamada-styles/images/logo.png'),
(2, 'address', 'Palestine - Gaza - KhanYounis'),
(3, 'email', 'hamadazaid62@gmail.com'),
(4, 'phone', '+970597902438'),
(5, 'linked_in', 'https://www.linkedin.com/in/hamdazaid/'),
(6, 'instagram', 'https://www.instagram.com/hamadazaid_2'),
(7, 'twitter', 'https://mobile.twitter.com/hamada_mzaid'),
(8, 'facebook', 'https://www.facebook.com/hamada.mohammed.56614'),
(9, 'app_store', 'https://apps.apple.com/us/app/instagram/id389801252'),
(10, 'google_play', 'https://play.google.com/store/apps/details?id=com.instagram.android&hl=en&gl=US');

-- --------------------------------------------------------

--
-- Table structure for table `steps_divs`
--

CREATE TABLE `steps_divs` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `header` varchar(100) NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `steps_divs`
--

INSERT INTO `steps_divs` (`id`, `img`, `header`, `paragraph`) VALUES
(1, 'hamada-styles/images/Mockup.png', '1- Step One', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been 1'),
(2, 'hamada-styles/images/Mockup1.png', '2- Step Two', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been 2');

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
-- Indexes for table `about_divs`
--
ALTER TABLE `about_divs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_openion_divs`
--
ALTER TABLE `customer_openion_divs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feature_divs`
--
ALTER TABLE `feature_divs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
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
-- Indexes for table `site_setup`
--
ALTER TABLE `site_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steps_divs`
--
ALTER TABLE `steps_divs`
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
-- AUTO_INCREMENT for table `about_divs`
--
ALTER TABLE `about_divs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_openion_divs`
--
ALTER TABLE `customer_openion_divs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feature_divs`
--
ALTER TABLE `feature_divs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_setup`
--
ALTER TABLE `site_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `steps_divs`
--
ALTER TABLE `steps_divs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
