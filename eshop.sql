-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2020 at 05:56 AM
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
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_desc`, `brand_image`, `status`, `created_at`, `updated_at`) VALUES
(17, 'shart', 'gfsfrgdfg', 'public/admin/brand-images/m-product-4.jpg', 1, '2020-09-04 08:29:04', '2020-09-04 08:29:04'),
(18, 'Watch', 'mobile phone', 'public/admin/brand-images/i3.jpg', 1, '2020-09-04 13:58:35', '2020-09-05 01:04:11'),
(19, 'Boot', 'it is good', 'public/admin/brand-images/i8.jpg', 1, '2020-09-05 00:50:17', '2020-09-05 01:03:56'),
(20, 'Watch', 'jfheyferiow', 'public/admin/brand-images/i5.jpg', 1, '2020-09-05 01:13:15', '2020-09-05 01:13:15'),
(21, 'loto', 'dgfdgdfg', 'public/admin/brand-images/i6.jpg', 1, '2020-09-05 01:15:18', '2020-09-05 01:15:18'),
(22, 'mi band', 'dfsdfsdf', 'public/admin/brand-images/i5.jpg', 1, '2020-09-05 01:17:57', '2020-09-05 01:17:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_desc`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Shirt', 'gfdgdfg', 1, '2020-01-02 07:19:30', '2020-09-01 13:10:47'),
(5, 'shoes', 'sdafsdaf', 1, '2020-01-02 07:20:35', '2020-02-06 04:40:04'),
(7, 'Watch', 'rewrewrt', 1, '2020-02-06 04:39:51', '2020-09-01 13:11:44'),
(8, 'sports', 'ewrfewrt', 1, '2020-02-06 04:39:56', '2020-02-06 04:39:56'),
(9, 'Electronic', 'fan', 0, '2020-09-04 07:42:20', '2020-09-04 10:14:29');

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
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_11_14_084740_create_categories_table', 1),
(9, '2020_01_01_175805_create_brands_table', 1),
(10, '2020_01_19_033020_create_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` int(11) NOT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagefile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `cat_id`, `brand_id`, `product_price`, `short_desc`, `long_desc`, `product_size`, `product_qty`, `main_image`, `imagefile`, `created_at`, `updated_at`) VALUES
(9, 'shart', 4, 17, 1000.00, 'hguyildfgdg', '<p>dfgdsfgdsfg</p>', 'xl', 2, 'public/admin/product-images/main/m-product-405-09-2020-06.jpg', '[\"public\\/admin\\/product-images\\/gallery\\/m-product-3.jpg\",\"public\\/admin\\/product-images\\/gallery\\/m-product-8.jpg\"]', '2020-09-05 00:58:00', '2020-09-05 00:58:00'),
(10, 'Sports', 8, 19, 1000.00, 'werewrtew', '<p>ewrwer</p>', 'm', 2, 'public/admin/product-images/main/i805-09-2020-06.jpg', '[\"public\\/admin\\/product-images\\/gallery\\/f-p-1.jpg\"]', '2020-09-05 00:59:52', '2020-09-05 00:59:52'),
(11, 'shose', 5, 19, 1000.00, 'werwrwer', '<p>rewrewr</p>', 'm', 2, 'public/admin/product-images/main/i405-09-2020-07.jpg', '[\"public\\/admin\\/product-images\\/gallery\\/i6.jpg\",\"public\\/admin\\/product-images\\/gallery\\/i8.jpg\"]', '2020-09-05 01:14:12', '2020-09-05 01:14:12'),
(12, 'loto', 5, 21, 5000.00, 'zfsdfds', '<p>sdfdsfsd</p>', 'm', 2, 'public/admin/product-images/main/i605-09-2020-07.jpg', '[\"public\\/admin\\/product-images\\/gallery\\/m-product-9.jpg\",\"public\\/admin\\/product-images\\/gallery\\/m-product-10.jpg\"]', '2020-09-05 01:16:12', '2020-09-05 01:16:12'),
(13, 'watch', 7, 20, 1000.00, 'fdgdsfgfdsg', '<p>fdgdsfgdf</p>', 'm', 2, 'public/admin/product-images/main/i305-09-2020-07.jpg', '[\"public\\/admin\\/product-images\\/gallery\\/i5.jpg\"]', '2020-09-05 01:17:13', '2020-09-05 01:17:13'),
(14, 'watch', 7, 22, 3000.00, 'dsfsdfsd', '<p>dsfdsfds</p>', 'm', 3, 'public/admin/product-images/main/i505-09-2020-07.jpg', '[\"public\\/admin\\/product-images\\/gallery\\/i3.jpg\"]', '2020-09-05 01:18:33', '2020-09-05 01:18:33'),
(15, 'Sports', 4, 17, 1000.00, 'dfgdsgd', '<p>gfdgdfsg</p>', 'm', 2, 'public/admin/product-images/main/m-product-1105-09-2020-07.jpg', '[\"public\\/admin\\/product-images\\/gallery\\/m-product-3.jpg\",\"public\\/admin\\/product-images\\/gallery\\/m-product-8.jpg\"]', '2020-09-05 01:19:39', '2020-09-05 01:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'pronob', 'pronob@gmail.com', NULL, '$2y$10$hhBojwIJvn9fNfawhB6P..1Wta2VQ5BIXiyMfPRkA9YGAu8HGp7KO', NULL, '2019-11-21 08:48:55', '2019-11-21 08:48:55'),
(2, 'admin', 'admin@gmail.com', NULL, '25f9e794323b453885f5181f1b624d0b', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
