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


DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `way` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_index` (`user_id`),
  KEY `orders_product_id_index` (`product_id`),
  KEY `orders_product_name_index` (`product_name`),
  KEY `orders_product_price_index` (`product_price`),
  KEY `orders_product_quantity_index` (`product_quantity`)
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
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_sequence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `where` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `kind` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kind_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `id_sequence`, `name`, `picture`, `time`, `where`, `source`, `price`, `kind`, `kind_id`, `stock`, `created_at`, `updated_at`) VALUES
(1,	'1-1',	'TOYOTA  EXSIOR 1.6 2.0 傳動軸123',	'https://i.imgur.com/YUblfnV.jpg',	'拆解時間：2017/09/30',	'自解體',	'型號：EXSIOR 1.6、2.0',	200,	'傳動系統',	'1',	'10',	NULL,	'2019-01-08 23:52:29'),
(2,	'1-2',	'TOYOTA  台製 新頭 傳動軸',	'https://i.imgur.com/WdkRDY0.jpg',	'拆解時間：2012/12/24',	'自解體',	'型號：EXSIOR PREMIO TERCEL YARIS ALTIS VIOS RAV4',	150,	'傳動系統',	'1',	'5',	NULL,	'2019-01-08 22:19:49'),
(3,	'1-3',	'TOYOTA ALTIS 1.6 傳動軸',	'https://i.imgur.com/VgkckAp.jpg',	'拆解時間：2017/10/11',	'自解體',	'型號：ALTIS 1.6 ',	400,	'傳動系統',	'1',	'4',	NULL,	'2019-01-08 21:53:37'),
(4,	'1-4',	'BENZ W245 B170 傳動軸',	'https://i.imgur.com/gxFNkbE.jpg',	'拆解時間：2015/4/13',	'自解體',	'型號：W245 B170',	1200,	'傳動系統',	'1',	'9',	NULL,	'2019-01-08 21:55:57'),
(5,	'1-5',	'BENZ W124 W140 後地軸 傳動軸',	'https://i.imgur.com/8XxifgO.jpg',	'拆解時間：2014/5/6',	'自解體',	'型號：W124 W140',	1500,	'傳動系統',	'1',	'7',	NULL,	NULL),
(6,	'1-6',	'BENZ VIANO 中間傳動軸',	'https://i.imgur.com/Dzk5fxH.jpg',	'拆解時間：2018/7/8 ',	'自解體',	'型號：VIANO',	18000,	'傳動系統',	'1',	'5',	NULL,	NULL),
(7,	'1-7',	'HONDA TEANA X-TRAIL 傳動軸',	'https://i.imgur.com/vHdlIvP.jpg',	'拆解時間：2012/9/14',	'自解體',	'型號：MARCH SENTRA 331 341 180 931 A32 A33',	600,	'傳動系統',	'1',	'6',	NULL,	'2019-01-08 21:51:14'),
(8,	'1-8',	'HONDA crv 二代 4WD 傳動軸',	'https://i.imgur.com/YRBxgfr.jpg',	'拆解時間：2017/5/10',	'自解體',	'型號：crv 二代 4WD ',	1000,	'傳動系統',	'1',	'2',	NULL,	'2019-01-08 22:02:36'),
(9,	'2-1',	'TOYOTA 3SGE VVT-I 紅頭引擎',	'https://i.imgur.com/7XnrUlf.jpg',	'拆解時間：2013/1/14',	'自解體',	'型號：3SGE VVT-I',	48000,	'引擎系統',	'2',	'5',	NULL,	'2019-01-08 22:20:02'),
(10,	'2-2',	'TOYOTA 3SGTE 引擎',	'https://i.imgur.com/A4VHRWU.jpg',	'拆解時間：2018/12/20',	'自解體',	'型號：3SGTE',	87000,	'引擎系統',	'2',	'10',	NULL,	NULL),
(11,	'2-3',	'TOYOTA 3SGTE 260 引擎',	'https://i.imgur.com/tF6yLPi.jpg',	'拆解時間：2016/7/30',	'自解體',	'型號：3SGTE 260',	50000,	'引擎系統',	'2',	'6',	NULL,	NULL),
(12,	'2-4',	'BENZ R172 SLK350 V6 引擎組',	'https://i.imgur.com/Ymb8Jkj.jpg',	'拆解時間：2015/12/11',	'自解體',	'型號：R172 SLK350 V6 ',	75000,	'引擎系統',	'2',	'2',	NULL,	NULL),
(13,	'2-5',	'BENZ W140 直6 引擎',	'https://i.imgur.com/f9yKdWl.jpg',	'拆解時間：2018/1/20',	'自解體',	'型號：W140 W210 W202 W203 W124',	90000,	'引擎系統',	'2',	'6',	NULL,	NULL),
(14,	'2-6',	'BENZ W211 320 112949 3.2L 引擎',	'https://i.imgur.com/wtQxxQp.jpg',	'拆解時間：2017/3/10',	'自解體',	'型號：W211 320 112949 3.2L',	83000,	'引擎系統',	'2',	'7',	NULL,	'2019-01-09 01:38:32'),
(15,	'2-7',	'HONDA K6 K8 引擎',	'https://i.imgur.com/DCmWjjU.jpg',	'拆解時間：2017/8/6',	'自解體',	'型號：K6 K8',	20000,	'引擎系統',	'2',	'10',	NULL,	NULL),
(16,	'2-8',	'HONDA K20A 雙凸引擎',	'https://i.imgur.com/jdiJub2.jpg',	'拆解時間：2017/10/1',	'自解體',	'型號：K20A ',	19000,	'引擎系統',	'2',	'12',	NULL,	NULL),
(17,	'3-1',	'HONDA K10 FERIO 冷氣壓縮機',	'https://i.imgur.com/MVO2a9w.jpg',	'拆解時間：2018/4/24',	'自解體',	'型號：K10 FERIO',	1500,	'冷卻系統',	'3',	'9',	NULL,	NULL),
(18,	'3-2',	'HONDA CRV 冷氣壓縮機',	'https://i.imgur.com/daH9VQI.jpg',	'拆解時間：2015/5/28',	'自解體',	'型號：CRV',	2500,	'冷卻系統',	'3',	'13',	NULL,	NULL),
(19,	'3-3',	'HONDA CIVIC 8代 K12 冷氣壓縮機',	'https://i.imgur.com/mP48IVx.jpg',	'拆解時間：2013/5/23',	'自解體',	'型號：CIVIC 8代 K12 ',	4000,	'冷卻系統',	'3',	'15',	NULL,	NULL),
(20,	'3-4',	'TOYOTA 海力士2.7 冷氣壓縮機',	'https://i.imgur.com/Z7LAZ7l.jpg',	'拆解時間：2016/11/3',	'自解體',	'型號：海力士2.7',	2300,	'冷卻系統',	'3',	'10',	NULL,	NULL),
(21,	'3-5',	'TOYOTA Yaris 1.5 冷氣壓縮機(插頭)',	'https://i.imgur.com/KwxAfSV.jpg',	'拆解時間：2018/7/2',	'自解體',	'型號：Yaris 1.5  ',	350,	'冷卻系統',	'3',	'11',	NULL,	NULL),
(22,	'3-6',	'TOYOTA 86-GT ZN-6 冷氣壓縮機',	'https://i.imgur.com/JH1QWqx.jpg',	'拆解時間：2018/10/11',	'自解體',	'型號：86-GT ZN-6  ',	3000,	'冷卻系統',	'3',	'8',	NULL,	NULL),
(23,	'3-7',	'BENZ W203 3.2  冷氣壓縮機',	'https://i.imgur.com/jvqzO26.jpg',	'拆解時間：2017/12/20',	'自解體',	'型號：W203 W204 W209 W207 W210 W211 W212 C200K C240',	3500,	'冷卻系統',	'3',	'10',	NULL,	NULL),
(24,	'3-8',	'BENZ W202 冷氣壓縮機',	'https://i.imgur.com/0rA958a.jpg',	'拆解時間：2017/6/25',	'自解體',	'型號：W124 W210 W140 W202',	3500,	'冷卻系統',	'3',	'6',	NULL,	NULL),
(25,	'3-9',	'BENZ w203 C200 冷氣壓縮機',	'https://i.imgur.com/a0eGLzp.jpg',	'拆解時間：2016/10/10 ',	'自解體',	'型號：w203 C200',	4500,	'冷卻系統',	'3',	'7',	NULL,	NULL),
(26,	'4-1',	'BENZ w220-s320煞車組',	'https://i.imgur.com/0O3atBP.jpg',	'拆解時間：2013/08/25 ',	'自解體',	'型號：BENZ w220 ',	4000,	'煞車系統',	'4',	'2',	NULL,	'2019-01-09 01:17:46'),
(27,	'4-2',	'TOYOTA  TERCEL 前煞車盤',	'https://i.imgur.com/dPUBR83.jpg',	'拆解時間：2014/09/23',	'自解體',	'型號：TOYOT TERCEL',	3500,	'煞車系統',	'4',	'5',	NULL,	'2019-01-08 22:20:30'),
(28,	'4-3',	'TOYOTA  PREVIA 03後煞車碟盤',	'https://i.imgur.com/fJdidMi.jpg',	'拆解時間：2009/10/10 ',	'自解體',	'型號：PREVIA03',	4500,	'煞車系統',	'4',	'4',	NULL,	NULL),
(29,	'4-4',	'TOYOTA ALTIS 原廠卡鉗+碟盤+煞車皮',	'https://i.imgur.com/VmgwGNC.jpg',	'拆解時間：2017/01/01',	'自解體',	'型號：ALTIS',	7000,	'煞車系統',	'4',	'2',	NULL,	'2019-01-08 22:20:46'),
(30,	'5-1',	'HONDA 原廠音響主機',	'https://i.imgur.com/BVi0wxJ.jpg',	'拆解時間：2015/04/02',	'自解體',	'型號：CRV3',	2500,	'音響系統',	'5',	'3',	NULL,	NULL),
(31,	'5-2',	'HONDA FIT音響主機 A款',	'https://i.imgur.com/QuMdern.jpg',	'拆解時間：2014/08/12 ',	'自解體',	'型號：HONDA FIT ',	1500,	'音響系統',	'5',	'2',	NULL,	NULL),
(32,	'5-3',	'HONDA FIT音響主機',	'https://i.imgur.com/2Uurtdi.jpg',	'拆解時間：2015/02/28',	'自解體',	'型號：HONDA FIT ',	750,	'音響系統',	'5',	'6',	NULL,	NULL),
(33,	'5-4',	'TOYOTA CAMAY 國際牌6.5吋螢幕 音響主機',	'https://i.imgur.com/cZI6mel.jpg',	'拆解時間：2017/02/22 ',	'自解體',	'型號：TOYOTA CARMAY',	800,	'音響系統',	'5',	'4',	NULL,	NULL),
(34,	'5-5',	'TOYOTA ALTIS 前置6片CD音響主機',	'https://i.imgur.com/Rkb8GAB.jpg',	'拆解時間：2016/08/22 ',	'自解體',	'型號：TOYOTA ALTIS ',	1200,	'音響系統',	'5',	'5',	NULL,	NULL),
(35,	'5-6',	'TOYOTA 原廠音響主機',	'https://i.imgur.com/IImmnhb.jpg',	'拆解時間：2016/08/22',	'自解體',	'型號：TOYOTA ALTIS  ',	1350,	'音響系統',	'5',	'6',	NULL,	NULL),
(36,	'5-7',	'BENZ 原廠音響主機',	'https://i.imgur.com/5Q3TKGh.jpg',	'拆解時間：2013/08/11',	'自解體',	'型號：BENZ ML320',	2200,	'音響系統',	'5',	'7',	NULL,	NULL),
(37,	'5-8',	'BENZ W211 音響主機',	'https://i.imgur.com/Hids8Vi.jpg',	'拆解時間：201312/04',	'自解體',	'型號：BENZ  W2111  ',	2500,	'音響系統',	'5',	'2',	NULL,	NULL),
(38,	'5-9',	'BENZ R350 音響主機',	'https://i.imgur.com/pMw0mv8.jpg',	'拆解時間：2012/09/18',	'自解體',	'型號：BENZ R350  ',	2350,	'音響系統',	'5',	'1',	NULL,	NULL),
(39,	'6-1',	'HONDA CRV 大燈',	'https://i.imgur.com/lsJiOpP.jpg',	'拆解時間：201311/11',	'自解體',	'型號：HONDA CRV',	1000,	'車體外殼',	'6',	'3',	NULL,	'2019-01-08 22:21:10'),
(40,	'6-2',	'HONDA CRV4代 4.5代 大燈',	'https://i.imgur.com/TLjUMJp.jpg',	'拆解時間：2013/08/11',	'自解體',	'型號：HONDA CRV4  4.5代  ',	1250,	'車體外殼',	'6',	'4',	NULL,	NULL),
(41,	'6-3',	'HONDA CIVI 右大燈',	'https://i.imgur.com/JExF1Sz.jpg',	'拆解時間：2018/01/22',	'自解體',	'型號：HONDA CIVI ',	1400,	'車體外殼',	'6',	'6',	NULL,	NULL),
(42,	'6-4',	'TOYOTA WISH 06年 原廠車頭大燈',	'https://i.imgur.com/qvk1n0u.jpg',	'拆解時間：2011/07/31',	'自解體',	'型號：TOYOTA WISH  ',	1350,	'車體外殼',	'6',	'9',	NULL,	NULL),
(43,	'6-5',	'TOYOTA WISH 左大燈',	'https://i.imgur.com/M3i3CUt.jpg',	'拆解時間：2013/09/23 ',	'自解體',	'型號：TOYOTA WISH',	750,	'車體外殼',	'6',	'10',	NULL,	NULL),
(44,	'6-6',	'TOYOTA CAMRY原廠二手大燈',	'https://i.imgur.com/6wy6xX0.jpg',	'拆解時間：2016/03/30',	'自解體',	'型號：TOYOTA CAMRY ',	1850,	'車體外殼',	'6',	'4',	NULL,	NULL),
(45,	'6-7',	'BENZ W211 S350左大燈',	'https://i.imgur.com/NJ4obDZ.jpg',	'拆解時間：2017/05/04',	'自解體',	'型號：BENZ W211 S350',	800,	'車體外殼',	'6',	'6',	NULL,	'2019-01-08 22:21:32'),
(46,	'6-8',	'BENZ cw204頭燈',	'https://i.imgur.com/tnWYXfC.jpg',	'拆解時間：2014/06/12',	'自解體',	'型號：BENZ cw204  ',	1400,	'車體外殼',	'6',	'2',	NULL,	NULL),
(47,	'6-9',	'BENZ w207 C207 2w212 大燈',	'https://i.imgur.com/PZ37sTy.jpg',	'拆解時間：2013/08/11',	'自解體',	'型號：BENZ w207 207 w212',	1500,	'車體外殼',	'6',	'3',	NULL,	'2019-01-08 22:21:49');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2019-01-09 10:47:25
