-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 04:58 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'sony', 'good', 1, '2018-08-19 16:14:38', '2018-08-19 16:14:38'),
(2, 'arang', 'good', 1, '2018-08-19 16:14:51', '2018-08-19 16:14:51'),
(3, 'walton', 'good', 1, '2018-08-19 16:14:58', '2018-08-19 16:14:58'),
(4, 'apex', 'good', 1, '2018-08-19 16:15:10', '2018-08-19 16:15:10'),
(5, 'Bata', 'good', 1, '2018-08-19 16:15:27', '2018-08-19 16:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'good', 1, '2018-08-19 16:08:55', '2018-08-19 16:08:55'),
(2, 'shoes', 'well', 1, '2018-08-19 16:12:12', '2018-08-19 16:12:12'),
(3, 'watches', 'good', 1, '2018-08-19 16:12:29', '2018-08-19 16:12:29'),
(4, 'Man fashion', 'good', 1, '2018-08-19 16:14:09', '2018-08-19 16:14:09'),
(5, 'woman fashion', 'good', 1, '2018-08-19 16:14:25', '2018-08-19 16:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'mahadi', 'hasan', 'admin@gmail.com', '$2y$10$ME1VwCkPfHoryAV93K/mBuHrfGvFwX4SjiTAc4lSOWgo.tDZRpvyu', '1234', 'jathrabari', '2018-08-27 02:55:04', '2018-08-27 02:55:04'),
(2, 'sdfsf', 'sdafsdf', 'adminer@gmail.com', '$2y$10$EMu3wqvMyCa9ItjXaO/tiuCfPl.OhTzaZo85Hd0AGLxjyRP5p2za.', '123123123', 'sdfsfasdfdsf', '2018-08-27 03:02:57', '2018-08-27 03:02:57'),
(3, 'fahim', 'hasan', 'fahim1313mhm@gmail.com', '$2y$10$NHz9ZgWjWxuEsyS8oRzZM.AEh.oGiQHJpWsnZSNHPA8CzKiXj8ZAm', '0981234124', 'jathrabari', '2018-08-28 03:05:09', '2018-08-28 03:05:09'),
(4, 'rajib', 'hasan', 'rajib@gmail.com', '$2y$10$2dhNeb90Y0b75.H25hY5q.hD97F04ZtxaZ73leE4UhgziGlH7IUay', '3414124132', 'jathrabari', '2018-08-28 04:39:00', '2018-08-28 04:39:00');

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
(3, '2018_08_07_103758_create_categories_table', 2),
(4, '2018_08_14_172751_create_brands_table', 3),
(5, '2018_08_14_214300_create_products_table', 4),
(6, '2018_08_16_171430_create_products_table', 5),
(7, '2018_08_16_171630_create_products_table', 6),
(8, '2018_08_25_132712_create_customers_table', 7),
(9, '2018_08_25_161447_create_shippings_table', 8),
(10, '2018_08_25_170747_create_orders_table', 9),
(11, '2018_08_25_170812_create_payments_table', 9),
(12, '2018_08_25_170855_create_order_details_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 7567.00, 'pending', '2018-08-28 02:35:02', '2018-08-28 02:35:02'),
(2, 3, 2, 9000.00, 'pending', '2018-08-28 03:05:23', '2018-08-28 03:05:23'),
(3, 3, 3, 50000.00, 'pending', '2018-08-28 04:37:31', '2018-08-28 04:37:31'),
(4, 4, 4, 3000.00, 'pending', '2018-08-28 04:39:42', '2018-08-28 04:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 7, 'Leather shoes', 3000.00, 1, '2018-08-28 02:35:02', '2018-08-28 02:35:02'),
(2, 1, 13, '3-pis', 4567.00, 1, '2018-08-28 02:35:02', '2018-08-28 02:35:02'),
(3, 2, 4, 'Sony Smart Watch SW2', 4500.00, 2, '2018-08-28 03:05:23', '2018-08-28 03:05:23'),
(4, 3, 2, 'vivo-book', 50000.00, 1, '2018-08-28 04:37:31', '2018-08-28 04:37:31'),
(5, 4, 7, 'Leather shoes', 3000.00, 1, '2018-08-28 04:39:42', '2018-08-28 04:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'cash', 'pending', '2018-08-28 02:35:02', '2018-08-28 02:35:02'),
(2, 2, 'cash', 'pending', '2018-08-28 03:05:23', '2018-08-28 03:05:23'),
(3, 3, 'cash', 'pending', '2018-08-28 04:37:31', '2018-08-28 04:37:31'),
(4, 4, 'cash', 'pending', '2018-08-28 04:39:42', '2018-08-28 04:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_qantity` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_price`, `product_qantity`, `short_description`, `long_description`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'vivo-book', 50000.00, 45, 'good', '<p>very good</p>', 'product-images/201712AM060000001_15161444621292720029864.jpg', 1, '2018-08-19 16:19:34', '2018-08-23 04:13:33'),
(3, 2, 4, 'normal shoes', 450.00, 56, 'good', '<p>very good</p>', 'product-images/download (1).jpg', 1, '2018-08-19 16:20:28', '2018-08-23 04:14:59'),
(4, 3, 1, 'Sony Smart Watch SW2', 4500.00, 4, 'good', '<p>very good</p>', 'product-images/41e4iUXcHhL._SL500_AC_SS350_.jpg', 1, '2018-08-19 16:21:47', '2018-08-23 04:27:23'),
(7, 2, 5, 'Leather shoes', 3000.00, 345, 'good', '<p>very good</p>', 'product-images/leather.jpg', 1, '2018-08-21 05:19:39', '2018-08-21 07:38:02'),
(12, 4, 2, 't-shirt-xl', 234.00, 444, 'good', '<p>very good</p>', 'product-images/download (2).jpg', 1, '2018-08-23 04:28:07', '2018-08-23 04:28:42'),
(13, 5, 2, '3-pis', 4567.00, 432, 'good', '<p>very good</p>', 'product-images/1463824755834-img_20160521_152922.jpg', 1, '2018-08-23 04:28:37', '2018-08-23 04:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `full_name`, `email`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'mahadi hasan', 'admin@gmail.com', '1234', 'jathrabari', '2018-08-28 02:35:00', '2018-08-28 02:35:00'),
(2, 'fahim hasan', 'fahim1313mhm@gmail.com', '0981234124', 'jathrabari', '2018-08-28 03:05:21', '2018-08-28 03:05:21'),
(3, 'fahim hasan', 'fahim1313mhm@gmail.com', '0981234124', 'jathrabari', '2018-08-28 04:37:29', '2018-08-28 04:37:29'),
(4, 'shorna', 'shorna@gmail.com', '01840261938', 'mohakhali', '2018-08-28 04:39:39', '2018-08-28 04:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$8YCsnpL9Rv1Uaeh/KFe28O0ABTwD25.jrxiV8FTM4nzdqBXx4GZPK', 'ISeZAKZhxJ0OeAYI2nE8yvMsV0g1daidWFOeLhnBV3YMepciOrFwXrkXH9Uq', '2018-08-02 07:20:12', '2018-08-02 07:20:12'),
(2, 'mahadi', 'mahadihasan1400@gmail.com', '$2y$10$OKJl3VyRST/4lmz0UZ.pXedGSML1iymJxlc1DwbT7F0bjGIF0D9w2', 'Vw8cFFXh3uk0y7cbQSJYeNeMIWoKb5fxiKFQyjvmQVoJVu3Mcq7YIpKJCn87', '2018-08-02 08:15:37', '2018-08-02 08:15:37'),
(3, 'bappi', 'myproject1313mhm@gmail.com', '$2y$10$81fcjwyrTebWzzldw814BOQDxK7l47aSWqOK9NQcCUqyRu.B8TD1W', '64d9hUxk3revAke2IKWIPKUUaLLKUdtiQO47UeaCgFVaqh49ppl2bzlbSkhh', '2018-08-02 08:17:10', '2018-08-02 08:17:10'),
(4, 'fahim', 'fahim1313mhm@gmail.com', '$2y$10$ygvKIy4yOa43mFscpLi8FeGaYWLaDB4uw6gtcCGdlFVjkhKOxTDG.', '0iSBxDLOFbFq2y2a4yVJtURCsFigE0g7BYjdWnMczyIrf0E8pAjX8BBQGqzC', '2018-08-02 08:18:54', '2018-08-02 08:18:54');

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
