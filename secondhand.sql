-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_admin_email_unique` (`admin_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(45,	'2018_12_15_133834_create_admins_table',	1),
(58,	'2014_10_12_000000_create_users_table',	2),
(59,	'2014_10_12_100000_create_password_resets_table',	2),
(60,	'2018_12_12_073336_create_products_table',	2),
(61,	'2018_12_12_082458_create_orders_table',	2),
(62,	'2018_12_26_111445_create_admins_table',	2);

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(10) unsigned NOT NULL,
  `products_id` int(10) unsigned NOT NULL,
  `freight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deliverydate` date NOT NULL,
  `way` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kind` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1,	'萬1旻',	'aaa123520@gmail.com',	NULL,	'$2y$10$JsY3HCrYEgEuUYHVZODhu.NeamB/ZI1J.7LSpAqW5WNxnKA9XopLe',	'0905111111',	'台中市太平區勤益里',	NULL,	'2018-12-26 23:45:47',	'2018-12-26 23:45:47',	'admin'),
(2,	't1',	't1@gmail.com',	NULL,	'$2y$10$e9LSLmhpO0fnSW.davw4nOee3zlYGYyldVPmmzQE21Sw/DptLDAle',	't1',	't1',	'px4AWF2TkrNkbhoEiTW7GHGD5mkdGupWlt7q9KNurxp6ct9cyVX6tnQOnSTJ',	'2018-12-29 06:14:21',	'2018-12-29 06:14:21',	'user');

-- 2019-01-02 03:12:26
