-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.18-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table pocking.appointments
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `phone_no` int(15) NOT NULL,
  `email` varchar(55) NOT NULL,
  `subject` varchar(55) DEFAULT NULL,
  `company` varchar(55) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pocking.appointments: ~4 rows (approximately)
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT INTO `appointments` (`id`, `first_name`, `last_name`, `phone_no`, `email`, `subject`, `company`, `message`, `created_at`, `updated_at`) VALUES
	(1, 'Frances', 'Simpson', 75, 'ridatysaqa@mailinator.com', 'Doloremque cupidatat', 'Zimmerman Zimmerman Co', 'Fugit soluta a quis', '2021-06-17 15:39:19', '2021-06-17 15:39:19'),
	(2, 'Jack', 'Arnold', 81, 'goqybidy@mailinator.com', 'Tempor aliquip elit', 'Flores and Bruce Inc', 'Expedita qui rerum c', '2021-06-23 05:17:35', '2021-06-23 05:17:35'),
	(3, 'Porter', 'Allison', 38, 'jehy@mailinator.com', 'Totam mollitia conse', 'Greene and Paul Traders', 'Ullamco consequatur', '2021-06-23 05:18:26', '2021-06-23 05:18:26'),
	(4, 'Phoebe', 'Hays', 70, 'diwaqynemo@mailinator.com', 'Rerum eos adipisicin', 'Pratt and Arnold Plc', 'In ea non et officia', '2021-06-23 05:19:00', '2021-06-23 05:19:00');
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;

-- Dumping structure for table pocking.banners
CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) NOT NULL,
  `description` text DEFAULT NULL,
  `images` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` int(11) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pocking.banners: ~6 rows (approximately)
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` (`id`, `title`, `description`, `images`, `status`, `created_at`, `updated_at`, `is_active`) VALUES
	(38, 'Quas eum distinctio', 'asd', '1631228743.jfif', 1, '2021-09-09 16:51:12', '2021-09-09 18:05:43', 1),
	(41, 'Quas eum distinctio', NULL, '1631225291.jfif', 1, '2021-09-09 17:08:11', '2021-09-09 17:08:11', 1),
	(42, 'Quas eum distinctio', NULL, '1631225435.jfif', 0, '2021-09-09 17:09:52', '2021-09-09 17:11:42', 1),
	(44, 'Nostrud anim et elig', 'Dignissimos enim dol', '1631228274.jpg', 1, '2021-09-09 17:38:55', '2021-09-09 17:57:54', 1),
	(52, 'Molestias sunt maxim', 'Voluptas adipisicing', '1631228357.png', 0, '2021-09-09 17:59:17', '2021-09-09 17:59:17', 1),
	(53, 'Exercitationem magna', 'Veniam recusandae', '1631228399.jpg', 1, '2021-09-09 17:59:59', '2021-09-13 15:13:41', 1);
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;

-- Dumping structure for table pocking.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `author` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pocking.blogs: ~0 rows (approximately)
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `title`, `description`, `images`, `author`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Commodi aute debitis', 'Et est esse necessi', '1631294709.jfif', 1, 1, '2021-09-10 12:25:09', '2021-09-10 12:25:09');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Dumping structure for table pocking.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `images` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pocking.categories: ~4 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `title`, `images`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'test', NULL, 1, '2021-09-10 18:03:07', '2021-09-10 18:03:07'),
	(3, 'Doloribus aperiam de', NULL, 1, '2021-09-10 18:48:37', '2021-09-10 18:48:37'),
	(4, 'Cumque soluta enim d', NULL, 1, '2021-09-10 18:48:39', '2021-09-10 18:48:39'),
	(5, 'Consequat Qui odit', NULL, 1, '2021-09-10 18:48:44', '2021-09-10 18:48:44');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table pocking.cms
CREATE TABLE IF NOT EXISTS `cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(55) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `sub_heading` text DEFAULT NULL,
  `description_1` text DEFAULT NULL,
  `description_2` text DEFAULT NULL,
  `image_1` varchar(555) DEFAULT NULL,
  `image_2` varchar(555) DEFAULT NULL,
  `video_1` varchar(555) DEFAULT NULL,
  `video_2` varchar(555) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pocking.cms: ~0 rows (approximately)
/*!40000 ALTER TABLE `cms` DISABLE KEYS */;
INSERT INTO `cms` (`id`, `page`, `title`, `sub_heading`, `description_1`, `description_2`, `image_1`, `image_2`, `video_1`, `video_2`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Home-Section-1', 'About Us', 'Your sub-Heading Here', '<p class="wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">In my experience mentoring people, I found fear to be the most common denominator among new investors, and potential entrepreneurs. The road to wealth begins in the mind. That’s where our journey begins. While much of my focus is in real estate, wealth is the ultimate objective. This means incorporating the following into a single program:</p>\r\n                        <ul class="wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">\r\n                            <li><p>Financial Literacy</p></li>\r\n                            <li><p>Leveraging Assets</p></li>\r\n                            <li><p>Real Estate Investments</p></li>\r\n                        </ul>\r\n                        <p class="wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><br></p>', '<p class="wow zoomin animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s;">“My goal is to create 600 new investors / entrepreneurs in the next year (and each year after that). I limit the number of participants to 50 to ensure I have the capacity to give each person the necessary attention. I invite you to begin your journey to success today.”</p>', '1625266668.jpg', NULL, NULL, NULL, 1, '2021-06-17 12:06:55', '2021-07-02 17:57:48');
/*!40000 ALTER TABLE `cms` ENABLE KEYS */;

-- Dumping structure for table pocking.config
CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `fb_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `insta_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pocking.config: ~0 rows (approximately)
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
INSERT INTO `config` (`id`, `email`, `phone`, `currency`, `address`, `fb_link`, `twitter_link`, `insta_link`, `linkedin_link`, `copyright`, `created_at`, `updated_at`) VALUES
	(1, 'info@odisjames.com', '832.402.9934', 'USD', 'James Street Capital 3225 McLeod Drive, Suite 100 Las Vegas, Nevada 89121', '#', '#', '#', '#', '© Copyright 2021 James-Street. All rights reserved.', '2021-06-22 22:45:08', '2021-06-23 05:50:43');
/*!40000 ALTER TABLE `config` ENABLE KEYS */;

-- Dumping structure for table pocking.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pocking.contact: ~3 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
	(1, ' ', 'hozaty@mailinator.com', '27', 'Qui aliqua Est bla', '2021-06-22 17:11:36', '2021-06-22 17:11:36'),
	(2, ' ', 'hipuhex@mailinator.com', '85', 'Illum sit do modi', '2021-06-23 05:21:10', '2021-06-23 05:21:10'),
	(3, ' ', 'admin@mail.com', '21', 'a', '2021-06-24 13:00:38', '2021-06-24 13:00:38');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table pocking.membership
CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) NOT NULL,
  `sub_heading` varchar(55) DEFAULT NULL,
  `price` float NOT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pocking.membership: ~3 rows (approximately)
/*!40000 ALTER TABLE `membership` DISABLE KEYS */;
INSERT INTO `membership` (`id`, `title`, `sub_heading`, `price`, `description`, `status`, `created_at`, `updated_at`) VALUES
	(6, '6 WEEK PROGRAM', 'Weekly Group Sessions', 2500, '<ul class="_3-q0m pp-plan-benefits-divider-color _1Np2U"><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-bottom: 1.5em;">Identify Your Financial Stage And Risk Tolerance</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Identify Which Investment Strategy Best Fits Your Objective</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Choose a Geographical Market</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Identify Financing Options</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Acquiring Funds For Down Payment + Carrying Costs (Reserves)</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Evaluating Deals Before Executing</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Strategies For Using Hard Money</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">General Rehab Best Practices</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em;">Income Property Management Overview</span></li></ul>', 1, '2021-06-16 18:46:14', '2021-06-23 03:55:54'),
	(8, '1 ON 1 MENTORSHIP', 'Weekly Group Sessions PLUS 1 -0n-1 Sessions', 5000, '<ul class="_3-q0m pp-plan-benefits-divider-color _1Np2U"><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-bottom: 1.5em;">Access to Weekly Round Up</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Building Your Team - Understanding The Different Roles...</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Scheduling Your Time And Prioritizing Next Steps</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Basic Understanding of the Rehab Process</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Creative Financing</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Creating a System to Secure Deals</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Real Estate Marketing Ideas</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Home Flipping Risk Assessment</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Working with Contractors</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Identify Your Financial Stage And Risk Tolerance</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Identify Which Investment Strategy Best Fits Your Objective</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Choose a Geographical Market</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Identify Financing Options</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Acquiring Funds For Down Payment + Carrying Costs (Reserves)</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Evaluating Deals Before Executing</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Strategies For Using Hard Money</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">General Rehab Best Practices</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Income Property Management Overview</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em;">Wholesaling –  Get The Tools Become a Successful Wholesaler</span></li></ul>', 1, '2021-06-17 11:14:06', '2021-06-22 06:39:25'),
	(9, 'BUILD YOUR BUSINESS', 'Meet Odis in Your Market', 7500, '<ul class="_3-q0m pp-plan-benefits-divider-color _1Np2U"><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-bottom: 1.5em;">Enrolled in Business Consultant Program</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Wealth Strategy Consultation</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Connect you to all systems you need to operate</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Access to Weekly Round Up</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Multifamily Financing</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Multifamily Management</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em; padding-bottom: 1.5em;">Incudes In Person Two Day Business Building Session</span></li><li class="pp-plan-benefits-font-desktop" tabindex="2"><span data-hook="pp-plan-benefit" style="padding-top: 1.5em;">Hands on Consulting “Building Your Business”</span></li></ul>', 1, '2021-06-17 11:14:45', '2021-06-22 06:41:47');
/*!40000 ALTER TABLE `membership` ENABLE KEYS */;

-- Dumping structure for table pocking.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `membership_id` int(11) DEFAULT NULL,
  `payment_id` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0 = not cancelled\r\n1 = cancelled\r\n',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pocking.orders: ~5 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `user_id`, `membership_id`, `payment_id`, `status`, `created_at`, `updated_at`) VALUES
	(2, 3, 8, 'ch_1J4tXuCmaCeXAIYUb93RxWJK', 0, '2021-06-21 15:16:37', '2021-06-21 15:16:37'),
	(3, 3, 8, 'ch_1J4tlJCmaCeXAIYUrn0KVvMt', 0, '2021-06-21 15:30:28', '2021-06-21 15:30:28'),
	(4, 3, 9, 'ch_1J4w2LCmaCeXAIYUf1WUugp3', 0, '2021-06-22 05:56:13', '2021-06-22 05:56:13'),
	(5, 3, 8, 'ch_1J4wJ9CmaCeXAIYUcaclKOar', 0, '2021-06-22 06:13:34', '2021-06-22 06:13:34'),
	(6, 1, 6, 'ch_1J5dHPCmaCeXAIYUH0s42vP6', 0, '2021-06-23 16:06:40', '2021-06-23 16:06:40');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table pocking.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_categories` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `is_featured` int(11) NOT NULL,
  `is_discounted` int(11) NOT NULL,
  `discounted_price` float DEFAULT NULL,
  `discounted_percentage` int(11) DEFAULT NULL,
  `has_variations` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `sub_categories` (`sub_categories`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pocking.products: ~6 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `sub_categories`, `title`, `description`, `price`, `stock`, `sku`, `slug`, `is_featured`, `is_discounted`, `discounted_price`, `discounted_percentage`, `has_variations`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(3, 2, '0', 'Aliquam iste quae cu', 125, 51, 'product-97617299', '0-1631566657-528', 1, 0, 0, 0, 0, 1, '2021-09-13 13:20:36', '2021-09-13 15:57:37', '2021-09-13 18:20:36'),
	(4, 1, 'Corrupti velit qui', 'Voluptatum tempor la', 570, 20, 'product-66376575', 'corrupti-velit-qui-1631565668-897', 1, 0, 0, 10, 0, 0, '2021-09-13 13:23:33', '2021-09-13 15:41:08', '2021-09-13 18:23:33'),
	(6, 3, 'Minus amet assumend', 'Totam sint ab iste s', 697, 32, 'product-17749748', 'minus-amet-assumend-1631565461-207', 1, 0, 0, 0, 0, 1, '2021-09-13 13:26:32', '2021-09-13 15:37:41', '2021-09-13 18:26:32'),
	(10, 2, '765', 'Minim minim mollit n', 850, 732, 'product-88508451', '765-1631566396-633', 0, 1, 765, 10, 0, 1, '2021-09-13 15:45:44', '2021-09-13 15:53:16', '2021-09-13 20:45:44'),
	(12, 3, 'asd', 'Illum sed reiciendi', 996, 50, 'product-74834101', 'asd-1631566836-362', 1, 1, 896.4, 10, 0, 0, '2021-09-13 15:59:28', '2021-09-13 16:00:36', '2021-09-13 20:59:28'),
	(13, 3, 'ghfjhv', 'bvkjh', 550, 250, 'product-26539733', 'ghfjhv-1631566886-507', 1, 1, 412.5, 25, 0, 1, '2021-09-13 16:01:26', '2021-09-13 16:01:26', '2021-09-13 21:01:26');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table pocking.product_images
CREATE TABLE IF NOT EXISTS `product_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pocking.product_images: ~18 rows (approximately)
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` (`id`, `title`, `product_id`, `created_at`, `updated_at`) VALUES
	(1, '1631557413.jpg', 4, '2021-09-13 13:23:33', '2021-09-13 13:23:33'),
	(2, '1631557413.jfif', 4, '2021-09-13 13:23:33', '2021-09-13 13:23:33'),
	(3, '1631557413.png', 4, '2021-09-13 13:23:33', '2021-09-13 13:23:33'),
	(12, '1631558364.jpg', 3, '2021-09-13 13:39:24', '2021-09-13 13:39:24'),
	(13, '1631558364.png', 3, '2021-09-13 13:39:24', '2021-09-13 13:39:24'),
	(14, '1631558681.jfif', 7, '2021-09-13 13:44:41', '2021-09-13 13:44:41'),
	(15, '1631558681.png', 7, '2021-09-13 13:44:41', '2021-09-13 13:44:41'),
	(16, '1631563839.jpg', 6, '2021-09-13 15:10:39', '2021-09-13 15:10:39'),
	(17, '1631563839.jfif', 6, '2021-09-13 15:10:39', '2021-09-13 15:10:39'),
	(18, '1631563839.jfif', 6, '2021-09-13 15:10:39', '2021-09-13 15:10:39'),
	(19, '1631565944.jpg', 10, '2021-09-13 15:45:44', '2021-09-13 15:45:44'),
	(20, '1631565944.jpg', 10, '2021-09-13 15:45:44', '2021-09-13 15:45:44'),
	(21, '1631565944.jfif', 10, '2021-09-13 15:45:44', '2021-09-13 15:45:44'),
	(22, '1631566768.jfif', 12, '2021-09-13 15:59:28', '2021-09-13 15:59:28'),
	(23, '1631566768.png', 12, '2021-09-13 15:59:28', '2021-09-13 15:59:28'),
	(24, '1631566886.jfif', 13, '2021-09-13 16:01:26', '2021-09-13 16:01:26'),
	(25, '1631566886.jfif', 13, '2021-09-13 16:01:26', '2021-09-13 16:01:26'),
	(26, '1631566886.png', 13, '2021-09-13 16:01:26', '2021-09-13 16:01:26');
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;

-- Dumping structure for table pocking.schedule
CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `phone_no` varchar(225) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `status` int(1) NOT NULL COMMENT '0=payment not proceed\r\n1= payment proceeded',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pocking.schedule: ~8 rows (approximately)
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
INSERT INTO `schedule` (`id`, `fullname`, `email`, `payment_id`, `phone_no`, `address`, `country`, `city`, `state`, `zip`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Lila Mcbride', 'qipirato@mailinator.com', 'ch_1J4vaYCmaCeXAIYUgyW68heo', '+1 (211) 272-1475', 'asd', 'France', 'asd', 'asd', 'asd', 1, '2021-06-21 17:27:28', '2021-06-21 17:27:28'),
	(2, 'dev petyr', 'test123@gmail.com', 'ch_1J4w0UCmaCeXAIYUt2fTSt3t', '213', 'sad', 'USA', 'sad', 'sa', '213', 1, '2021-06-22 05:54:17', '2021-06-22 05:54:17'),
	(3, 'Vernon Britt', 'toga@mailinator.com', 'ch_1J5CSTCmaCeXAIYUJNVVLk8c', '+1 (916) 892-9912', 'test', 'USA', 'test', 'test', '123456', 1, '2021-06-22 23:28:17', '2021-06-22 23:28:17'),
	(4, 'Sa m', 'vitaldesigning7@gmail.com', 'ch_1J5GzkCmaCeXAIYUUphk8cne', '1234567890', 'm', 'USA', 'sdf', 'sdf', '12345', 1, '2021-06-23 04:18:57', '2021-06-23 04:18:57'),
	(5, 'Ava Macdonald', 'nowuwal@mailinator.com', 'ch_1J5H6yCmaCeXAIYUH86sXRki', '+1 (621) 348-9275', 'Magna est eum conse', 'UK', 'Aliqua Dolor nulla', 'Est enim et eu ullam', '16289', 1, '2021-06-23 04:26:24', '2021-06-23 04:26:24'),
	(6, 'Blythe Johnson', 'nujitura@mailinator.com', 'ch_1J5vJ1CmaCeXAIYUNwK9amqZ', '+1 (273) 607-5669', 'asd', 'UK', 'asd', 'asd', 'asd', 1, '2021-06-24 11:21:32', '2021-06-24 11:21:32'),
	(7, 'Aaron Small', 'zicihima@mailinator.com', 'ch_1J5vwnCmaCeXAIYU6KC3afP4', '+1 (896) 989-2466', 'asd', 'France', 'asd', 'asd', 'asd', 1, '2021-06-24 12:02:38', '2021-06-24 12:02:38'),
	(8, 'Aaron Small', 'zicihima@mailinator.com', 'ch_1J5vwuCmaCeXAIYUeIa33TU5', '+1 (896) 989-2466', 'asd', 'France', 'asd', 'asd', 'asd', 1, '2021-06-24 12:02:45', '2021-06-24 12:02:45');
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;

-- Dumping structure for table pocking.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) DEFAULT NULL,
  `images` varchar(55) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pocking.services: ~0 rows (approximately)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `title`, `images`, `description`, `status`, `created_at`, `updated_at`) VALUES
	(11, 'Real Estate Invester', '1631309065.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent viverra, nisl a consectetur aliquam, velit mauris mollis ipsum, ac tristique ligula ex nec lorem. Fusce pellentesque elit fringilla mauris dapibus, sagittis convallis purus ultricies. Nullam non libero nec tortor gravida volutpat consequat sed nisl.', 1, '2021-06-16 18:34:42', '2021-09-10 16:24:25');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table pocking.sub_categories
CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `parent_category` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pocking.sub_categories: ~3 rows (approximately)
/*!40000 ALTER TABLE `sub_categories` DISABLE KEYS */;
INSERT INTO `sub_categories` (`id`, `title`, `parent_category`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'test12', '1', 1, '2021-09-10 18:42:57', '2021-09-10 18:48:23'),
	(2, 'Officiis quae ea odi', '4', 1, '2021-09-10 18:48:53', '2021-09-13 12:22:40'),
	(3, 'new cat', '4', 1, '2021-09-13 12:22:22', '2021-09-13 12:22:22');
/*!40000 ALTER TABLE `sub_categories` ENABLE KEYS */;

-- Dumping structure for table pocking.testimonials
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text DEFAULT NULL,
  `images` varchar(55) DEFAULT NULL,
  `name` varchar(55) DEFAULT NULL,
  `designation` varchar(55) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pocking.testimonials: ~2 rows (approximately)
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` (`id`, `description`, `images`, `name`, `designation`, `status`, `created_at`, `updated_at`) VALUES
	(21, 'Voluptate voluptatem', '1631298126.jfif', 'Rachel Sanford', 'Elit accusantium ad', 1, '2021-09-10 13:00:19', '2021-09-10 13:22:06'),
	(22, 'Fugiat ut consequat', '1631297099.jpg', 'Venus Carey', 'Deserunt nisi est e', 0, '2021-09-10 13:04:59', '2021-09-10 13:04:59');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;

-- Dumping structure for table pocking.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `password` varchar(555) DEFAULT NULL,
  `user_role` int(1) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `is_active` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pocking.users: ~15 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `email`, `provider_id`, `avatar`, `remember_token`, `password`, `user_role`, `status`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@mail.com', NULL, NULL, NULL, '$2y$10$eBzm3cEsbRSf2djUAs1P2eyT.yQlWP3XJQb737CalCQoTsdTbRvja', 1, 1, 0, '2021-06-16 21:48:41', '2021-09-13 15:12:37');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
