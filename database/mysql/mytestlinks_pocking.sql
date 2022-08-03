-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 03:54 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytestlinks_pocking`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `phone_no` int(15) NOT NULL,
  `email` varchar(55) NOT NULL,
  `subject` varchar(55) DEFAULT NULL,
  `company` varchar(55) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `first_name`, `last_name`, `phone_no`, `email`, `subject`, `company`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Frances', 'Simpson', 75, 'ridatysaqa@mailinator.com', 'Doloremque cupidatat', 'Zimmerman Zimmerman Co', 'Fugit soluta a quis', '2021-06-17 10:39:19', '2021-06-17 10:39:19'),
(2, 'Jack', 'Arnold', 81, 'goqybidy@mailinator.com', 'Tempor aliquip elit', 'Flores and Bruce Inc', 'Expedita qui rerum c', '2021-06-23 00:17:35', '2021-06-23 00:17:35'),
(3, 'Porter', 'Allison', 38, 'jehy@mailinator.com', 'Totam mollitia conse', 'Greene and Paul Traders', 'Ullamco consequatur', '2021-06-23 00:18:26', '2021-06-23 00:18:26'),
(4, 'Phoebe', 'Hays', 70, 'diwaqynemo@mailinator.com', 'Rerum eos adipisicin', 'Pratt and Arnold Plc', 'In ea non et officia', '2021-06-23 00:19:00', '2021-06-23 00:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `description` text DEFAULT NULL,
  `images` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `images`, `status`, `created_at`, `updated_at`, `is_active`) VALUES
(38, 'Quas eum distinctio', 'asd', '1631228743.jfif', 1, '2021-09-09 11:51:12', '2021-09-09 13:05:43', 1),
(41, 'Quas eum distinctio', NULL, '1631225291.jfif', 1, '2021-09-09 12:08:11', '2021-09-09 12:08:11', 1),
(42, 'Quas eum distinctio', NULL, '1631225435.jfif', 0, '2021-09-09 12:09:52', '2021-09-09 12:11:42', 1),
(44, 'Nostrud anim et elig', 'Dignissimos enim dol', '1631228274.jpg', 1, '2021-09-09 12:38:55', '2021-09-09 12:57:54', 1),
(52, 'Molestias sunt maxim', 'Voluptas adipisicing', '1631228357.png', 0, '2021-09-09 12:59:17', '2021-09-09 12:59:17', 1),
(53, 'Exercitationem magna', 'Veniam recusandae', '1631228399.jpg', 1, '2021-09-09 12:59:59', '2021-09-13 10:13:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `author` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `images`, `author`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Commodi aute debitis', 'Et est esse necessi', '1631294709.jfif', 1, 1, '2021-09-10 07:25:09', '2021-09-10 07:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `images` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `images`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Instagram', NULL, 1, '2022-07-26 07:21:12', '2022-07-26 07:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `page`, `title`, `sub_heading`, `description_1`, `description_2`, `image_1`, `image_2`, `video_1`, `video_2`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home-Section-1', 'About Us', 'Your sub-Heading Here', '<p class=\"wow fadeInUp\" data-wow-delay=\"0.3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">In my experience mentoring people, I found fear to be the most common denominator among new investors, and potential entrepreneurs. The road to wealth begins in the mind. That’s where our journey begins. While much of my focus is in real estate, wealth is the ultimate objective. This means incorporating the following into a single program:</p>\r\n                        <ul class=\"wow fadeInUp\" data-wow-delay=\"0.4s\" style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">\r\n                            <li><p>Financial Literacy</p></li>\r\n                            <li><p>Leveraging Assets</p></li>\r\n                            <li><p>Real Estate Investments</p></li>\r\n                        </ul>\r\n                        <p class=\"wow fadeInUp\" data-wow-delay=\"0.5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\"><br></p>', '<p class=\"wow zoomin animated\" data-wow-delay=\"0.5s\" style=\"visibility: visible; animation-delay: 0.5s;\">“My goal is to create 600 new investors / entrepreneurs in the next year (and each year after that). I limit the number of participants to 50 to ensure I have the capacity to give each person the necessary attention. I invite you to begin your journey to success today.”</p>', '1625266668.jpg', NULL, NULL, NULL, 1, '2021-06-17 07:06:55', '2021-07-02 12:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `email`, `phone`, `currency`, `address`, `fb_link`, `twitter_link`, `insta_link`, `linkedin_link`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'info@odisjames.com', '832.402.9934', 'USD', 'James Street Capital 3225 McLeod Drive, Suite 100 Las Vegas, Nevada 89121', '#', '#', '#', '#', '© Copyright 2021 James-Street. All rights reserved.', '2021-06-22 17:45:08', '2021-06-23 00:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, ' ', 'hozaty@mailinator.com', '27', 'Qui aliqua Est bla', '2021-06-22 12:11:36', '2021-06-22 12:11:36'),
(2, ' ', 'hipuhex@mailinator.com', '85', 'Illum sit do modi', '2021-06-23 00:21:10', '2021-06-23 00:21:10'),
(3, ' ', 'admin@mail.com', '21', 'a', '2021-06-24 08:00:38', '2021-06-24 08:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `sub_heading` varchar(55) DEFAULT NULL,
  `price` float NOT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `title`, `sub_heading`, `price`, `description`, `status`, `created_at`, `updated_at`) VALUES
(6, '6 WEEK PROGRAM', 'Weekly Group Sessions', 2500, '<ul class=\"_3-q0m pp-plan-benefits-divider-color _1Np2U\"><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-bottom: 1.5em;\">Identify Your Financial Stage And Risk Tolerance</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Identify Which Investment Strategy Best Fits Your Objective</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Choose a Geographical Market</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Identify Financing Options</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Acquiring Funds For Down Payment + Carrying Costs (Reserves)</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Evaluating Deals Before Executing</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Strategies For Using Hard Money</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">General Rehab Best Practices</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em;\">Income Property Management Overview</span></li></ul>', 1, '2021-06-16 13:46:14', '2021-06-22 22:55:54'),
(8, '1 ON 1 MENTORSHIP', 'Weekly Group Sessions PLUS 1 -0n-1 Sessions', 5000, '<ul class=\"_3-q0m pp-plan-benefits-divider-color _1Np2U\"><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-bottom: 1.5em;\">Access to Weekly Round Up</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Building Your Team - Understanding The Different Roles...</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Scheduling Your Time And Prioritizing Next Steps</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Basic Understanding of the Rehab Process</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Creative Financing</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Creating a System to Secure Deals</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Real Estate Marketing Ideas</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Home Flipping Risk Assessment</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Working with Contractors</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Identify Your Financial Stage And Risk Tolerance</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Identify Which Investment Strategy Best Fits Your Objective</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Choose a Geographical Market</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Identify Financing Options</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Acquiring Funds For Down Payment + Carrying Costs (Reserves)</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Evaluating Deals Before Executing</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Strategies For Using Hard Money</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">General Rehab Best Practices</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Income Property Management Overview</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em;\">Wholesaling –  Get The Tools Become a Successful Wholesaler</span></li></ul>', 1, '2021-06-17 06:14:06', '2021-06-22 01:39:25'),
(9, 'BUILD YOUR BUSINESS', 'Meet Odis in Your Market', 7500, '<ul class=\"_3-q0m pp-plan-benefits-divider-color _1Np2U\"><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-bottom: 1.5em;\">Enrolled in Business Consultant Program</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Wealth Strategy Consultation</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Connect you to all systems you need to operate</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Access to Weekly Round Up</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Multifamily Financing</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Multifamily Management</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em; padding-bottom: 1.5em;\">Incudes In Person Two Day Business Building Session</span></li><li class=\"pp-plan-benefits-font-desktop\" tabindex=\"2\"><span data-hook=\"pp-plan-benefit\" style=\"padding-top: 1.5em;\">Hands on Consulting “Building Your Business”</span></li></ul>', 1, '2021-06-17 06:14:45', '2021-06-22 01:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `instagram_email` varchar(255) DEFAULT NULL,
  `instagram_id` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `post_link` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1 COMMENT '0 = not cancelled\r\n1 = cancelled\r\n',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `invoice_number`, `payment_id`, `price`, `likes`, `instagram_email`, `instagram_id`, `image`, `post_id`, `post_link`, `status`, `created_at`, `updated_at`) VALUES
(19, 30, 16, '421603524', 'xyz', 50, 50, 'test@mail.com', 'rgertgyhgrt', 'users-1.jpg', NULL, NULL, 1, '2022-08-01 11:57:33', '2022-08-01 13:13:00'),
(20, 30, 16, '693903829', 'xyz', 50, 50, 'ghhfd@fnanfj.wshfwe', 'rgertgyhgrt', 'users-1.jpg', NULL, NULL, 1, '2022-08-01 12:10:41', '2022-08-01 13:13:42'),
(21, 30, 16, '355053552', 'xyz', 50, 50, 'test@mail.comsdfgsdf', 'test12345', 'users-1.jpg', NULL, NULL, 1, '2022-08-01 12:12:48', '2022-08-01 12:12:48'),
(22, 30, 16, '701158460', 'xyz', 50, 50, 'ghhfd@fnanfj.wshfwe', 'test123', 'users-1.jpg', NULL, NULL, 1, '2022-08-01 12:14:05', '2022-08-01 12:14:05'),
(23, 30, 16, '641399455', 'xyz', 50, 50, 'ghhfd@fnanfj.wshfwe', 'rgertgyhgrt', 'users-1.jpg', NULL, NULL, 1, '2022-08-01 12:15:28', '2022-08-01 13:12:03'),
(24, 30, 16, '548819943', 'xyz', 50, 50, 'ghhfd@fnanfj.wshfwe', 'ghdfhyrdtfhuydrt', 'users-1.jpg', NULL, NULL, 1, '2022-08-01 12:23:33', '2022-08-01 12:23:33'),
(25, 30, 16, '268133812', 'xyz', 50, 50, 'ghhfd@fnanfj.wshfwe', 'rgertgyhgrt', 'users-1.jpg', NULL, NULL, 1, '2022-08-01 12:26:29', '2022-08-01 13:11:49'),
(28, 31, 16, '773124297', 'xyz', 50, 50, 'test@mail.comsdfgsdffdgwerewe', 'test123rewtwert4ew5t456t45grdegdsgb', 'users-1.jpg', NULL, NULL, 1, '2022-08-01 13:54:50', '2022-08-01 13:54:50'),
(29, 31, 16, '732697606', 'xyz', 50, 50, 'tesu8iytuoiytot@mail.com', 'jkmhgkghjkhjkjkgy', 'users-1.jpg', NULL, NULL, 1, '2022-08-01 14:03:32', '2022-08-01 14:04:39'),
(30, 31, 16, '873515426', 'xyz', 50, 50, 'test@mail.comsdfgsdffdgwerewe', 'test12345', 'users-1.jpg', NULL, NULL, 1, '2022-08-02 05:43:12', '2022-08-02 05:43:12'),
(31, 31, 16, '800966592', 'xyz', 50, 50, 'test@mail.com', 'rgertgyhgrt', 'users-1.jpg', NULL, NULL, 1, '2022-08-02 06:04:34', '2022-08-02 06:04:34'),
(32, 31, 16, '685191781', 'xyz', 50, 50, 'hjfhgjfghjgfhjtyut@sdfgdfsg.grfgerag', 'hgjfhgjfhgj', '1', NULL, NULL, 1, '2022-08-02 08:21:52', '2022-08-02 08:21:52'),
(33, 31, 16, '342840114', 'xyz', 50, 50, 'test@mail.com', 'rgertgyhgrt', '2', NULL, NULL, 1, '2022-08-02 08:39:52', '2022-08-02 08:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sub_categories` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `likes` int(50) NOT NULL,
  `price` decimal(14,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sub_categories`, `title`, `likes`, `price`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14, 4, '50 Instagram Followers', 60, '60.00', 1, '2022-07-26 07:36:34', '2022-07-26 07:48:49', '2022-07-26 12:36:34'),
(15, 5, '50 Instagram Views', 50, '50.00', 1, '2022-07-26 07:42:07', '2022-07-26 07:42:07', '2022-07-26 12:42:07'),
(16, 6, '50 Instagram Likes', 50, '50.00', 1, '2022-07-26 07:43:57', '2022-07-26 07:43:57', '2022-07-26 12:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `title`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '1631557413.jpg', 4, '2021-09-13 08:23:33', '2021-09-13 08:23:33'),
(2, '1631557413.jfif', 4, '2021-09-13 08:23:33', '2021-09-13 08:23:33'),
(3, '1631557413.png', 4, '2021-09-13 08:23:33', '2021-09-13 08:23:33'),
(12, '1631558364.jpg', 3, '2021-09-13 08:39:24', '2021-09-13 08:39:24'),
(13, '1631558364.png', 3, '2021-09-13 08:39:24', '2021-09-13 08:39:24'),
(14, '1631558681.jfif', 7, '2021-09-13 08:44:41', '2021-09-13 08:44:41'),
(15, '1631558681.png', 7, '2021-09-13 08:44:41', '2021-09-13 08:44:41'),
(16, '1631563839.jpg', 6, '2021-09-13 10:10:39', '2021-09-13 10:10:39'),
(17, '1631563839.jfif', 6, '2021-09-13 10:10:39', '2021-09-13 10:10:39'),
(18, '1631563839.jfif', 6, '2021-09-13 10:10:39', '2021-09-13 10:10:39'),
(19, '1631565944.jpg', 10, '2021-09-13 10:45:44', '2021-09-13 10:45:44'),
(20, '1631565944.jpg', 10, '2021-09-13 10:45:44', '2021-09-13 10:45:44'),
(21, '1631565944.jfif', 10, '2021-09-13 10:45:44', '2021-09-13 10:45:44'),
(22, '1631566768.jfif', 12, '2021-09-13 10:59:28', '2021-09-13 10:59:28'),
(23, '1631566768.png', 12, '2021-09-13 10:59:28', '2021-09-13 10:59:28'),
(24, '1631566886.jfif', 13, '2021-09-13 11:01:26', '2021-09-13 11:01:26'),
(25, '1631566886.jfif', 13, '2021-09-13 11:01:26', '2021-09-13 11:01:26'),
(26, '1631566886.png', 13, '2021-09-13 11:01:26', '2021-09-13 11:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `fullname`, `email`, `payment_id`, `phone_no`, `address`, `country`, `city`, `state`, `zip`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lila Mcbride', 'qipirato@mailinator.com', 'ch_1J4vaYCmaCeXAIYUgyW68heo', '+1 (211) 272-1475', 'asd', 'France', 'asd', 'asd', 'asd', 1, '2021-06-21 12:27:28', '2021-06-21 12:27:28'),
(2, 'dev petyr', 'test123@gmail.com', 'ch_1J4w0UCmaCeXAIYUt2fTSt3t', '213', 'sad', 'USA', 'sad', 'sa', '213', 1, '2021-06-22 00:54:17', '2021-06-22 00:54:17'),
(3, 'Vernon Britt', 'toga@mailinator.com', 'ch_1J5CSTCmaCeXAIYUJNVVLk8c', '+1 (916) 892-9912', 'test', 'USA', 'test', 'test', '123456', 1, '2021-06-22 18:28:17', '2021-06-22 18:28:17'),
(4, 'Sa m', 'vitaldesigning7@gmail.com', 'ch_1J5GzkCmaCeXAIYUUphk8cne', '1234567890', 'm', 'USA', 'sdf', 'sdf', '12345', 1, '2021-06-22 23:18:57', '2021-06-22 23:18:57'),
(5, 'Ava Macdonald', 'nowuwal@mailinator.com', 'ch_1J5H6yCmaCeXAIYUH86sXRki', '+1 (621) 348-9275', 'Magna est eum conse', 'UK', 'Aliqua Dolor nulla', 'Est enim et eu ullam', '16289', 1, '2021-06-22 23:26:24', '2021-06-22 23:26:24'),
(6, 'Blythe Johnson', 'nujitura@mailinator.com', 'ch_1J5vJ1CmaCeXAIYUNwK9amqZ', '+1 (273) 607-5669', 'asd', 'UK', 'asd', 'asd', 'asd', 1, '2021-06-24 06:21:32', '2021-06-24 06:21:32'),
(7, 'Aaron Small', 'zicihima@mailinator.com', 'ch_1J5vwnCmaCeXAIYU6KC3afP4', '+1 (896) 989-2466', 'asd', 'France', 'asd', 'asd', 'asd', 1, '2021-06-24 07:02:38', '2021-06-24 07:02:38'),
(8, 'Aaron Small', 'zicihima@mailinator.com', 'ch_1J5vwuCmaCeXAIYUeIa33TU5', '+1 (896) 989-2466', 'asd', 'France', 'asd', 'asd', 'asd', 1, '2021-06-24 07:02:45', '2021-06-24 07:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `images` varchar(55) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `images`, `description`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Real Estate Invester', '1631309065.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent viverra, nisl a consectetur aliquam, velit mauris mollis ipsum, ac tristique ligula ex nec lorem. Fusce pellentesque elit fringilla mauris dapibus, sagittis convallis purus ultricies. Nullam non libero nec tortor gravida volutpat consequat sed nisl.', 1, '2021-06-16 13:34:42', '2021-09-10 11:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent_category` int(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `title`, `parent_category`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Buy Instagram Followers', 6, 1, '2022-07-26 07:22:58', '2022-07-26 07:22:58'),
(5, 'Buy Instagram Views', 6, 1, '2022-07-26 07:23:12', '2022-07-26 07:23:12'),
(6, 'Buy Instagram Likes', 6, 1, '2022-07-26 07:23:24', '2022-07-26 07:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `images` varchar(55) DEFAULT NULL,
  `name` varchar(55) DEFAULT NULL,
  `designation` varchar(55) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `description`, `images`, `name`, `designation`, `status`, `created_at`, `updated_at`) VALUES
(21, 'Voluptate voluptatem', '1631298126.jfif', 'Rachel Sanford', 'Elit accusantium ad', 1, '2021-09-10 08:00:19', '2021-09-10 08:22:06'),
(22, 'Fugiat ut consequat', '1631297099.jpg', 'Venus Carey', 'Deserunt nisi est e', 0, '2021-09-10 08:04:59', '2021-09-10 08:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `provider_id`, `avatar`, `remember_token`, `password`, `user_role`, `status`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', NULL, NULL, NULL, '$2y$10$eBzm3cEsbRSf2djUAs1P2eyT.yQlWP3XJQb737CalCQoTsdTbRvja', 1, 1, 0, '2021-06-16 16:48:41', '2021-09-13 10:12:37'),
(29, 'devpetyr911@gmail.com', 'devpetyr911@gmail.com', NULL, NULL, NULL, '$2y$10$KvIArqM62ud9mxE8JAlKpuilhUj4CmNJw5n.Uj59t/srtMT.qXWx.', 2, 1, 1, '2022-07-26 07:10:55', '2022-07-26 07:52:22'),
(30, 'test', 'test@mail.com', NULL, NULL, NULL, '$2y$10$qlplh.2rPPVJhifyqV1.0.0oJDFkxvMhln2reCi49USlbMU3wKdhW', 2, 1, 1, '2022-07-29 12:16:08', '2022-07-29 12:16:08'),
(31, 'Alpha', 'alpha@mail.com', NULL, NULL, NULL, '$2y$10$dTcUQGGHWe2UZXj676SV5uIhmwjiXMU0ecvgG3GegCLI4Z3gX.yHK', 2, 1, 1, '2022-08-01 13:53:39', '2022-08-01 13:53:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories` (`sub_categories`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`parent_category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `subcategory` FOREIGN KEY (`sub_categories`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `category` FOREIGN KEY (`parent_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
