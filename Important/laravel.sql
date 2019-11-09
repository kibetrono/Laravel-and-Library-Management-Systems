-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 28, 2019 at 02:15 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Technology', '2019-07-07 08:28:52', '2019-07-07 08:28:52'),
(2, 'Sports', '2019-07-07 08:30:31', '2019-07-07 08:30:31'),
(3, 'Politics', '2019-07-07 08:31:07', '2019-07-07 08:31:07'),
(4, 'Academics', '2019-07-07 08:31:17', '2019-07-07 08:31:17'),
(5, 'Library', '2019-07-07 08:31:23', '2019-07-07 08:31:23'),
(6, 'Versions', '2019-07-10 09:04:41', '2019-07-10 09:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '1', '2019-07-10 06:06:27', '2019-07-10 06:06:27'),
(2, 1, 4, '1', '2019-07-10 06:34:33', '2019-07-10 06:34:33'),
(3, 1, 4, '2', '2019-07-10 06:34:48', '2019-07-10 06:34:48'),
(4, 1, 4, '5 again', '2019-07-10 06:35:05', '2019-07-10 06:35:05'),
(5, 1, 6, 'kenyan flag', '2019-07-10 09:03:22', '2019-07-10 09:03:22'),
(6, 1, 6, 'Actually a good flag', '2019-07-10 09:03:43', '2019-07-10 09:03:43'),
(7, 1, 9, 'Brand cloths hoyee....', '2019-07-10 09:08:48', '2019-07-10 09:08:48'),
(8, 2, 8, 'Congratulations to our women', '2019-07-10 09:35:31', '2019-07-10 09:35:31'),
(9, 5, 7, 'Hii team haifiki mahali', '2019-07-10 09:52:46', '2019-07-10 09:52:46'),
(10, 2, 7, '#Beatrice don\'t think this is manchester united', '2019-07-10 09:54:26', '2019-07-10 09:54:26'),
(11, 1, 7, 'Kila mtu aanike team yake avoid talking about teams', '2019-07-10 09:56:00', '2019-07-10 09:56:00'),
(12, 1, 14, 'This leaders have shown great leadership qualities when they do such things. Let them continue reuniting Kenyans', '2019-08-19 03:22:43', '2019-08-19 03:22:43'),
(13, 2, 14, 'This is wonderful for the future of our country', '2019-08-19 03:24:01', '2019-08-19 03:24:01'),
(14, 4, 14, 'Let other leaders follow the same criteria for the success of our country', '2019-08-19 03:26:16', '2019-08-19 03:26:16'),
(15, 2, 4, 'This is the best CMS for students to learn and practice', '2019-08-22 09:08:06', '2019-08-22 09:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `dislikes`
--

CREATE TABLE `dislikes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dislikes`
--

INSERT INTO `dislikes` (`id`, `user_id`, `post_id`, `email`, `created_at`, `updated_at`) VALUES
(1, 4, 6, 'zeddy@gmail.com', '2019-07-10 04:33:27', '2019-07-10 04:33:27'),
(2, 1, 4, 'kibetdavidro@gmail.com', '2019-07-10 04:33:51', '2019-07-10 04:33:51'),
(3, 2, 7, 'mercy@gmail.com', '2019-07-10 09:09:25', '2019-07-10 09:09:25'),
(4, 5, 7, 'beatrice@gmail.com', '2019-07-10 09:52:29', '2019-07-10 09:52:29'),
(5, 1, 9, 'kibetdavidro@gmail.com', '2019-08-22 09:03:54', '2019-08-22 09:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'kibetdavidro@gmail.com', '2019-07-09 14:15:26', '2019-07-09 14:15:26'),
(2, 1, 6, 'kibetdavidro@gmail.com', '2019-07-09 14:30:13', '2019-07-09 14:30:13'),
(3, 1, 7, 'kibetdavidro@gmail.com', '2019-07-10 02:58:48', '2019-07-10 02:58:48'),
(4, 1, 8, 'kibetdavidro@gmail.com', '2019-07-10 04:15:31', '2019-07-10 04:15:31'),
(5, 1, 10, 'kibetdavidro@gmail.com', '2019-07-10 04:17:20', '2019-07-10 04:17:20'),
(6, 4, 6, 'zeddy@gmail.com', '2019-07-10 04:33:23', '2019-07-10 04:33:23'),
(7, 1, 9, 'kibetdavidro@gmail.com', '2019-07-10 09:08:25', '2019-07-10 09:08:25'),
(8, 5, 7, 'beatrice@gmail.com', '2019-07-10 09:52:27', '2019-07-10 09:52:27'),
(9, 2, 7, 'mercy@gmail.com', '2019-07-10 09:54:31', '2019-07-10 09:54:31'),
(10, 1, 14, 'kibetdavidro@gmail.com', '2019-08-19 03:21:08', '2019-08-19 03:21:08');

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
(9, '2019_07_06_144043_create_posts_table', 2),
(10, '2019_07_06_144145_create_profiles_table', 2),
(11, '2019_07_06_144207_create_categories_table', 2),
(12, '2019_07_06_145341_create_comments_table', 2),
(13, '2019_07_06_145355_create_likes_table', 2),
(14, '2019_07_06_145408_create_dislikes_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('beatrice@gmail.com', '$2y$10$JtUL1pLo5qQ6HAqPyi2xmOaa2BcBPOgeJ4Cb3ENegKb.EKpQiFVXK', '2019-07-10 09:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `post_title`, `post_body`, `category_id`, `post_image`, `created_at`, `updated_at`) VALUES
(4, 1, 'Joomla', 'Content Management System', 1, 'http://localhost:8000/uploadimage/joomla.jpg', '2019-07-09 12:53:56', '2019-07-09 12:53:56'),
(7, 1, 'Chelsea', 'English football club', 2, 'http://localhost:8000/uploadimage/chelsea.png', '2019-07-09 13:01:24', '2019-07-09 13:01:24'),
(8, 1, 'Women world cup', 'Women competition', 2, 'http://localhost:8000/uploadimage/sports3.jpeg', '2019-07-09 13:01:59', '2019-07-09 13:01:59'),
(9, 1, 'Clothing', 'The recent versions of clothing-jeans that have recently been distributed to the market from our company', 6, 'http://localhost:8000/uploadimage/clothingjeans.jpg', '2019-07-10 09:08:06', '2019-07-10 09:08:06'),
(10, 1, 'Man-u', 'Manchester United is a great club located in the city of Manchester located in England', 2, 'http://localhost:8000/uploadimage/manuu.jpg', '2019-07-10 09:13:51', '2019-07-10 09:13:51'),
(11, 1, 'Django', 'Django is the recent python framework', 1, 'http://localhost:8000/uploadimage/Django.jpg', '2019-07-10 09:23:14', '2019-07-10 09:23:14'),
(12, 1, 'Brand Shoes', 'Recently distributed to the market', 6, 'http://localhost:8000/uploadimage/shoes.jpg', '2019-07-10 09:26:37', '2019-07-10 09:26:37'),
(13, 1, 'Programmin Languages', '1. JavaScript\r\n2. Python\r\n3. Java\r\n4. C/CPP\r\n5. PHP', 4, 'http://localhost:8000/uploadimage/programming-languages-1.png', '2019-07-10 09:30:57', '2019-07-10 09:30:57'),
(14, 1, 'DP VS Raila', 'DP Ruto and Raila Odinga urging Kenyans to reunite. You can follow this link to watch the video...https://www.youtube.com/watch?v=OtRJyarfZ80', 3, 'http://localhost:8000/uploadimage/Ruto vs Raila.png', '2019-08-19 03:19:13', '2019-08-19 03:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `name`, `designation`, `profile_pic`, `created_at`, `updated_at`) VALUES
(1, 1, 'kibet', 'Programmer', 'http://localhost:8000/uploads/Screenshot from 2019-07-07 14-57-12.png', '2019-07-07 10:11:17', '2019-07-07 10:11:17'),
(2, 1, 'David', 'Student', 'http://localhost:8000/uploads/Screenshot from 2019-07-07 16-14-23.png', '2019-07-07 10:14:44', '2019-07-07 10:14:44'),
(3, 1, 'Mercy', 'footballer', 'http://localhost:8000/uploads/sports3.jpeg', '2019-07-08 03:41:47', '2019-07-08 03:41:47'),
(4, 3, 'Kenyan', 'Citizen', 'http://localhost:8000/uploads/Flag_of_Kenya.svg', '2019-07-08 04:42:32', '2019-07-08 04:42:32'),
(5, 4, 'Zeddy', 'Engenieer', 'http://localhost:8000/uploads/kplc.jpg', '2019-07-08 04:45:24', '2019-07-08 04:45:24'),
(6, 5, 'Beatrice', 'Madam', 'http://localhost:8000/uploads/madam.jpeg', '2019-07-10 09:52:04', '2019-07-10 09:52:04');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kibet', 'kibetdavidro@gmail.com', NULL, '$2y$10$VkRrBLKA5c6MuADJpr4xROnWqPBC5ga4/k3CEP0gj/n39r3qE/EgW', NULL, '2019-07-06 08:35:45', '2019-07-06 08:35:45'),
(2, 'Mercy', 'mercy@gmail.com', NULL, '$2y$10$qOCWjZnIGPhfEbkiRB.M4uan4Kk8FFFrlzHGOiPgjJgHW36OSA5ZW', NULL, '2019-07-08 04:16:44', '2019-07-08 04:16:44'),
(3, 'Mercy', 'mercyhome@gmail.com', NULL, '$2y$10$HdMAQge8IU7PJFL2nuxvGO/ymKuNqZS2WcpA81etaF1IKNHdnzHny', NULL, '2019-07-08 04:40:08', '2019-07-08 04:40:08'),
(4, 'Zeddy', 'zeddy@gmail.com', NULL, '$2y$10$gC9YNuPlkR1TI3lNATWckeJPi3txSA733BemsVijh4qvOr3F6pIyK', NULL, '2019-07-08 04:44:07', '2019-07-08 04:44:07'),
(5, 'Beatrice', 'beatrice@gmail.com', NULL, '$2y$10$8wZesOqkmUDo/vE9Vf.I7uBoLMDG6b033..0R4WdsOqQgx62gMeiu', '3Htr4KZsgscfJfPunpRb5XVsVKTxxI9Nql9cInOq5LiMp2t1wAAfmuEvIosG', '2019-07-10 09:48:42', '2019-07-10 09:48:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dislikes`
--
ALTER TABLE `dislikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `dislikes`
--
ALTER TABLE `dislikes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
