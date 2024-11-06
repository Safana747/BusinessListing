-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 10:29 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blisting`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Shops'),
(2, 'Hotels');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `state_id` int(11) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `state_id`, `name`) VALUES
(1, 1, 'Kozhikode'),
(2, 1, 'Malappuram'),
(3, 1, 'Kannur'),
(4, 2, 'Coimbatore'),
(5, 2, 'Erode');

-- --------------------------------------------------------

--
-- Table structure for table `listing`
--

CREATE TABLE `listing` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `seourl` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone2` varchar(20) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `whatsapp` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `img1` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text DEFAULT NULL,
  `img5` text DEFAULT NULL,
  `img6` text DEFAULT NULL,
  `img7` text DEFAULT NULL,
  `img8` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing`
--

INSERT INTO `listing` (`id`, `title`, `seourl`, `category_id`, `description`, `address`, `state_id`, `district_id`, `location_id`, `pincode`, `phone`, `email`, `phone2`, `website`, `facebook`, `twitter`, `whatsapp`, `linkedin`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `created_at`) VALUES
(1, 'Ab esse perspiciatis', NULL, 2, NULL, 'Amet dolor sint dol', 1, NULL, NULL, 123456, '+1 (294) 349-9801', 'gecalunat@mailinator.net', '+1 (812) 923-6954', 'https://www.rumydudodu.co.uk', 'Recusandae Numquam', 'Vel ad in et nisi', 'Eaque sit voluptas a', 'Culpa ut quos ad rep', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'fghgfnf', 'fghgfnf', 1, NULL, 'fbgb', 1, 1, 1, 143534, '3545', 'safanabanu@gmail.com', '32345', 'https://www.rumydudodu.co.uk', 'fgdtged', 'fgdfgd', '3535', 'dvfbd', '15764948495df767019af1cdownload.jpg', '15764948495df767019b8d308580066565256e.jpg', '15764948495df767019c160musback1.jpg', '', '', '', '', '', '2019-12-16 05:44:09');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `city_id`, `name`) VALUES
(1, 1, 'koyilandy');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `district_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `district_id`, `name`) VALUES
(1, 1, 'Koyilandy'),
(2, 1, 'Naduvannur'),
(3, 1, 'Nadakkavu');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`) VALUES
(1, 'Kerala'),
(2, 'Tamilnadu');

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
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `phone`, `place`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Safana Banu T.P', 'safanabanutp7@gmail.com', NULL, '$2y$10$YlWbUwGg2oiCH6B0olQR0uLArYFJzy.LhKIv9McKhBHrQPWGd4z5u', NULL, '2345', 'bnb', '1575020893B612_20190210_114100_895.jpg', '2019-11-19 06:18:45', '2019-12-17 01:25:31'),
(2, 'Avye Hubbard', 'danox@mailinator.net', NULL, '$2y$10$gbKbSpab8LEnEf9Ov1CyJunDlLWYjqa/3NWIftOgTXJOeFKrtBHpO', NULL, '', '', NULL, '2019-11-27 01:49:26', '2019-11-27 01:49:26'),
(3, 'ccc', 'aa@gmail.com', NULL, '$2y$10$vunWc5URcfM5xZpV62CSyek7PW0vhpJYfVr2ib5K0n0MRxlvj/Th.', NULL, '123453799', NULL, NULL, '2019-11-28 01:04:21', '2019-11-28 02:29:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing`
--
ALTER TABLE `listing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
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
-- Indexes for table `state`
--
ALTER TABLE `state`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `listing`
--
ALTER TABLE `listing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
