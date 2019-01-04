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
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2018_12_12_073336_create_products_table',	1),
(4,	'2018_12_12_082458_create_orders_table',	1),
(5,	'2018_12_26_111445_create_admins_table',	1);

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `freight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deliverydate` date DEFAULT NULL,
  `way` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `kind` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `name`, `source`, `price`, `kind`, `stock`, `created_at`, `updated_at`) VALUES
(1,	'TOYOTA  EXSIOR 1.6 2.0 傳動軸',	'\"型號：EXSIOR 1.6、2.0 拆解時間：2017/09/30 自解場\"',	200,	'傳動系統',	'10',	NULL,	NULL),
(2,	'TOYOTA  台製 新頭 傳動軸',	'\"型號：EXSIOR PREMIO TERCEL YARIS ALTIS VIOS RAV4 拆解時間：2012/12/24 自解廠\"',	150,	'傳動系統',	'5',	NULL,	NULL),
(3,	'TOYOTA ALTIS 1.6 傳動軸',	'\"型號：ALTIS 1.6 拆解時間：2017/10/11 自解廠\"',	400,	'傳動系統',	'4',	NULL,	NULL),
(4,	'BENZ W245 B170 傳動軸',	'\"型號：W245 B170 拆解時間：2015/4/13 自解廠\"',	1200,	'傳動系統',	'9',	NULL,	NULL),
(5,	'BENZ W124 W140 後地軸 傳動軸',	'\"型號：W124 W140 拆解時間：2014/5/6 自解廠\"',	1500,	'傳動系統',	'7',	NULL,	NULL),
(6,	'BENZ VIANO 中間傳動軸',	'\"型號：VIANO 拆解時間：2018/7/8 自解廠\"',	18000,	'傳動系統',	'5',	NULL,	NULL),
(7,	'HONDA TEANA X-TRAIL 傳動軸',	'\"型號：MARCH SENTRA 331 341 180 931 A32 A33  拆解時間：2012/9/14 自解廠\"',	600,	'傳動系統',	'6',	NULL,	NULL),
(8,	'HONDA crv 二代 4WD 傳動軸',	'\"型號：crv 二代 4WD 拆解時間：2017/5/10 自解廠\"',	1000,	'傳動系統',	'2',	NULL,	NULL),
(9,	'TOYOTA 3SGE VVT-I 紅頭引擎',	'\"型號：3SGE VVT-I 拆解時間：2013/1/14 自解廠\"',	48000,	'引擎系統',	'5',	NULL,	NULL),
(10,	'TOYOTA 3SGTE 引擎',	'\"型號：3SGTE 拆解時間：2018/12/20 自解廠\"',	87000,	'引擎系統',	'10',	NULL,	NULL),
(11,	'TOYOTA 3SGTE 260 引擎',	'\"型號：3SGTE 260 拆解時間：2016/7/30 自解廠\"',	50000,	'引擎系統',	'6',	NULL,	NULL),
(12,	'BENZ R172 SLK350 V6 引擎組',	'\"型號：R172 SLK350 V6 拆解時間：2015/12/11 自解廠\"',	75000,	'引擎系統',	'2',	NULL,	NULL),
(13,	'BENZ W140 直6 引擎',	'\"型號：W140 W210 W202 W203 W124 拆解時間：2018/1/20 自解廠\"',	90000,	'引擎系統',	'6',	NULL,	NULL),
(14,	'BENZ W211 320 112949 3.2L 引擎',	'\"型號：W211 320 112949 3.2L 拆解時間：2017/3/10 自解廠\"',	83000,	'引擎系統',	'8',	NULL,	NULL),
(15,	'HONDA K6 K8 引擎',	'\"型號：K6 K8 拆解時間：2017/8/6 自解廠\"',	20000,	'引擎系統',	'10',	NULL,	NULL),
(16,	'HONDA K20A 雙凸引擎',	'\"型號：K20A 拆解時間：2017/10/1 自解廠\"',	190000,	'引擎系統',	'12',	NULL,	NULL),
(17,	'HONDA K10 FERIO 冷氣壓縮機',	'\"型號：K10 FERIO 拆解時間：2018/4/24 自解廠\"',	1500,	'冷卻系統',	'9',	NULL,	NULL),
(18,	'HONDA CRV 冷氣壓縮機',	'\"型號：CRV 拆解時間：2015/5/28 自解廠\"',	2500,	'冷卻系統',	'13',	NULL,	NULL),
(19,	'HONDA CIVIC 8代 K12 冷氣壓縮機',	'\"型號：CIVIC 8代 K12 拆解時間：2013/5/23 自解廠\"',	4000,	'冷卻系統',	'15',	NULL,	NULL),
(20,	'TOYOTA 海力士2.7 冷氣壓縮機',	'\"型號：海力士2.7 拆解時間：2016/11/3 自解廠\"',	2300,	'冷卻系統',	'10',	NULL,	NULL),
(21,	'TOYOTA Yaris 1.5 冷氣壓縮機(插頭)',	'\"型號：Yaris 1.5 拆解時間：2018/7/2 自解廠\"',	350,	'冷卻系統',	'11',	NULL,	NULL),
(22,	'TOYOTA 86-GT ZN-6 冷氣壓縮機',	'\"型號：86-GT ZN-6 拆解時間：2018/10/11 自解廠\"',	3000,	'冷卻系統',	'8',	NULL,	NULL),
(23,	'BENZ W203 3.2  冷氣壓縮機',	'\"型號：W203 W204 W209 W207 W210 W211 W212 C200K C240 拆解時間：2017/12/20 自解廠\"',	3500,	'冷卻系統',	'10',	NULL,	NULL),
(24,	'BENZ W202 冷氣壓縮機',	'\"型號：W124 W210 W140 W202 拆解時間：2017/6/25 自解廠\"',	3500,	'冷卻系統',	'6',	NULL,	NULL),
(25,	'BENZ w203 C200 冷氣壓縮機',	'\"型號：w203 C200 拆解時間：2016/10/10 自解廠\"',	4500,	'冷卻系統',	'7',	NULL,	NULL),
(26,	'BENZ w220-s320煞車組',	'\"型號：BENZ w220　　　　拆解時間：2013/08/25 自解體\"',	4000,	'煞車系統',	'5',	NULL,	NULL),
(27,	'TOYOTA  TERCEL 前煞車盤',	'型號：TOYOT TERCEL               拆解時間：2014/09/23             自解體',	3500,	'煞車系統',	'5',	NULL,	NULL),
(28,	'TOYOTA  PREVIA 03後煞車碟盤',	'\"型號：PREVIA03　              拆解時間：2009/10/10 自解體\"',	4500,	'煞車系統',	'4',	NULL,	NULL),
(29,	'TOYOTA ALTIS 原廠卡鉗+碟盤+煞車皮',	'\"型號：ALTIS                        拆解時間：2017/01/01 自解體\"',	7000,	'煞車系統',	'1',	NULL,	NULL),
(30,	'HONDA 原廠音響主機',	'\"型號：CRV3                        拆解時間：2015/04/02 自解體\"',	2500,	'音響',	'3',	NULL,	NULL),
(31,	'HONDA FIT音響主機 A款',	'型號：HONDA FIT                                     拆解時間：2014/08/12           自解體',	1500,	'音響',	'2',	NULL,	NULL),
(32,	'HONDA FIT音響主機',	'型號：HONDA FIT                                     拆解時間：2015/02/28        自解體',	750,	'音響',	'6',	NULL,	NULL),
(33,	'TOYOTA CARMAY 國際牌6.5吋螢幕 音響主機',	'型號：TOYOTA CARMAY                                   拆解時間：2017/02/22        自解體',	800,	'音響',	'4',	NULL,	NULL),
(34,	'TOYOTA ALTIS 前置6片CD音響主機',	'型號：TOYOTA ALTIS                                 拆解時間：2016/08/22        自解體',	1200,	'音響',	'5',	NULL,	NULL),
(35,	'TOYOTA 原廠音響主機',	'型號：TOYOTA ALTIS                                 拆解時間：2016/08/22        自解體',	1350,	'音響',	'6',	NULL,	NULL),
(36,	'BENZ 原廠音響主機',	'型號：BENZ ML320                            拆解時間：2013/08/11             自解體',	2200,	'音響',	'7',	NULL,	NULL),
(37,	'BENZ W211 音響主機',	'型號：BENZ  W2111                           拆解時間：201312/04            自解體',	2500,	'音響',	'2',	NULL,	NULL),
(38,	'BENZ R350 音響主機',	'型號：BENZ R350                          拆解時間：2012/09/18             自解體',	2350,	'音響',	'1',	NULL,	NULL),
(39,	'HONDA CRV 大燈',	'型號：HONDA CRV                          拆解時間：201311/11             自解體',	1000,	'頭燈',	'3',	NULL,	NULL),
(40,	'HONDA CRV4代 4.5代 大燈',	'型號：HONDA CRV4  4.5代                                       拆解時間：2013/08/11           自解體',	1250,	'頭燈',	'4',	NULL,	NULL),
(41,	'HONDA CIVI 右大燈',	'型號：HONDA CIVI                    拆解時間：2018/01/22            自解體',	1400,	'頭燈',	'6',	NULL,	NULL),
(42,	'TOYOTA WISH 06年 原廠車頭大燈',	'型號：TOYOTA WISH                            拆解時間：2011/07/31             自解體',	1350,	'頭燈',	'9',	NULL,	NULL),
(43,	'TOYOTA WISH 左大燈',	'型號：TOYOTA WISH                          拆解時間：2013/09/23             自解體',	750,	'頭燈',	'10',	NULL,	NULL),
(44,	'TOYOTA CAMRY原廠二手大燈',	'型號：TOYOTA CAMRY                            拆解時間：2016/03/30            自解體',	1850,	'頭燈',	'4',	NULL,	NULL),
(45,	'BENZ W211 S350左大燈',	'型號：BENZ W211 S350                           拆解時間：2017/05/04            自解體',	800,	'頭燈',	'5',	NULL,	NULL),
(46,	'BENZ cw204頭燈',	'型號：BENZ cw204                           拆解時間：2014/06/12           自解體',	1400,	'頭燈',	'2',	NULL,	NULL),
(47,	'BENZ w207 C207 2w212 大燈',	'型號：BENZ w207 207 w212                                       拆解時間：2013/08/11             自解體',	1500,	'頭燈',	'3',	NULL,	NULL);

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2019-01-04 05:29:40
