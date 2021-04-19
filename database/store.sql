-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 06:01 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`, `Role`) VALUES
(4, 'mesba', 'mesba@gmail.com', '12345', 'extra-04163434.jpg', 'Bangladesh ', '   This is for Wahed', '312-009-323', 'marketar ', 'Admin'),
(5, 'Wahed', 'wahed@gmail.com', '12345', 'Capture.jpg', 'Bangladesh ', '  This is for Wahed', '01733577800', 'Developer', 'Accounting'),
(6, 'Wahed', 'mdabdulwahed7@gmail.com', '12345', 'batter-fried-chicken-recipe-fp-400x300-c.jpg', 'Bangladesh', 'I am Md Abdul Wahed', '01733577800', 'web developer', 'Production'),
(7, 'wahed123', 'abwahed@gmail.com', '12345', '129873366_422961185540762_1835601484396190236_n.jpg', 'bangladesh', 'I am Computer Engineer ', '01744556694', 'cse', 'Store'),
(8, 'wahed1', 'abwahed3@gmail.com', '12345', 'Hydrangeas.jpg', 'bangladesh', 'fdfadaf ', '01744556699', 'puthia kanthal baria, Rajshahi', 'Accounting');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `ds_percent` int(11) NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `ds_percent`, `customer_image`, `customer_ip`) VALUES
(13, 'Rahul1', 'rahul1@gmail.com', '', 'Rajshahi', '01744556699', 'rajshahi', 0, '', ''),
(14, 'Kasem12', 'Kasem123@gmail.com', '', 'dhaka', '01478965******', 'dhaka', 0, '', ''),
(15, 'mesba', 'mesba@gmail.com', '', 'rajshahi', '017**************', 'rajshahi', 0, '', ''),
(16, 'wahed123', 'wahed123@gmail.com', '', 'Rajshahi', '01744556699', 'rajshahi', 0, '', ''),
(17, 'md wahed', 'mdwahed11@gmail.com', '', 'Rajshahi', '01744556694', 'Puthia', 30, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dilars`
--

CREATE TABLE `dilars` (
  `dilars_id` int(11) NOT NULL,
  `dilars_name` varchar(255) NOT NULL,
  `dilar_email` varchar(255) NOT NULL,
  `dilar_city` text NOT NULL,
  `dilar_contact` varchar(255) NOT NULL,
  `dilar_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dilars`
--

INSERT INTO `dilars` (`dilars_id`, `dilars_name`, `dilar_email`, `dilar_city`, `dilar_contact`, `dilar_address`) VALUES
(3, 'Md Wahed', 'mdwahed@gmail.com', 'Rajshahi', '01478965******', 'puthia kanthal bara '),
(4, 'Rahul', 'rahul@gmail.com', 'Rajshahi', '01744556694', 'Puthia'),
(5, 'Kasem', 'Kasem@gmail.com', 'dhaka', '017**************', 'dhaka'),
(6, 'nasim', 'nasim@gmail.com', 'rajshahi', '01744556699', 'rajshahi'),
(7, 'Rahim', 'wahed@gmail.com', 'Bangladesh', '01744556699', 'Puthia');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `employee_email` varchar(255) NOT NULL,
  `employee_city` text NOT NULL,
  `employee_contact` varchar(255) NOT NULL,
  `employee_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `employee_name`, `employee_email`, `employee_city`, `employee_contact`, `employee_address`) VALUES
(3, 'Kasem', 'Kasem@gmail.com', 'Bangladesh', '01789455678', 'Puthia'),
(4, 'Wahed', 'Kasem@gmail.com', 'Rajshahi', '01**************', 'Puthia'),
(5, 'mesba', 'mesba@gmail.com', 'Rajshahi', '01**************', 'Puthia');

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary`
--

CREATE TABLE `employee_salary` (
  `employee_salary_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `employee_salary` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_salary`
--

INSERT INTO `employee_salary` (`employee_salary_id`, `employee_id`, `employee_name`, `employee_salary`, `date_time`) VALUES
(5, 0, '3', '30000', '2009-12-22 18:15:20'),
(6, 0, '4', '40000', '2009-12-22 18:15:26'),
(7, 0, '5', '35000', '2009-12-22 18:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `name`, `message`, `datetime`) VALUES
(3, 'Admin', 'Ok', '2020-12-31 03:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `others_id` int(11) NOT NULL,
  `others_name` varchar(255) NOT NULL,
  `Amount` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`others_id`, `others_name`, `Amount`, `datetime`) VALUES
(0, 'adfadfaf', 500, '2020-12-30 05:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `production_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `production_name` varchar(255) NOT NULL,
  `worked_out` int(15) NOT NULL,
  `product_completed` int(20) NOT NULL,
  `system_lost` int(11) NOT NULL,
  `Sale` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`production_id`, `product_id`, `production_name`, `worked_out`, `product_completed`, `system_lost`, `Sale`, `date`, `kg`) VALUES
(66, 0, '34', 20, 18, 4, 0, '2021-02-16 07:14:43', 25),
(67, 0, '34', 20, 18, 2, 0, '2021-02-16 07:15:36', 25),
(68, 0, '35', 20, 18, 2, 0, '2021-02-16 07:19:10', 25),
(69, 0, '35', 10, 8, 2, 0, '2021-02-16 07:21:16', 25),
(70, 0, '34', 20, 18, 2, 0, '2021-02-16 07:22:42', 25),
(71, 0, '34', 20, 18, 2, 0, '2021-02-16 07:22:42', 25),
(72, 0, '35', 20, 18, 2, 0, '2021-02-16 07:24:23', 25),
(73, 0, '35', 10, 8, 2, 0, '2021-02-16 07:36:36', 0),
(74, 0, '34', 0, 0, 0, 55, '2021-02-16 08:10:48', 25),
(75, 0, '35', 0, 0, 0, 120, '2021-02-16 08:18:32', 0),
(76, 0, '34', 0, 0, 0, 110, '2021-02-16 08:21:07', 25),
(77, 0, '35', 0, 0, 0, 600, '2021-02-16 08:23:20', 25),
(78, 0, '35', 20, 18, 2, 0, '2021-02-16 08:45:49', 0),
(79, 0, '35', 0, 0, 0, 55, '2021-02-16 08:46:19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) DEFAULT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_label` text NOT NULL,
  `product_sale` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `manufacturer_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`, `product_label`, `product_sale`) VALUES
(34, 15, 12, 0, '2020-10-03 11:07:33', 'Burger', 'download.jpg', 'download.jpg', 'download.jpg', 50, '1', '<p>Best Burger</p>', 'Burger', 50),
(35, 16, 12, 0, '2020-10-03 11:09:10', 'Fried Chicken', 'batter-fried-chicken-recipe-fp-400x300-c.jpg', 'batter-fried-chicken-recipe-fp-400x300-c.jpg', 'batter-fried-chicken-recipe-fp-400x300-c.jpg', 50, '2', '<p>Best Chicken&nbsp;</p>', 'Fried Chicken', 50),
(36, 29, 12, 0, '2020-10-06 15:24:56', 'Pasta ', 'masala-pasta.jpg', 'masala-pasta.jpg', 'masala-pasta.jpg', 100, '5', '<p>Best Pasta</p>', 'Pasta', 100),
(37, 30, 17, 0, '2020-10-03 11:15:14', 'Medicine', 'medicine.jpg', 'medicine.jpg', 'medicine.jpg', 20, '7', '<p>Best Medicine</p>', 'Medicine', 20),
(38, 21, 14, 0, '2020-10-03 11:42:38', 'Masoor Dal', 'lentil-masoor-250x250-250x250-1.jpeg', 'lentil-masoor-250x250-250x250-1.jpeg', 'lentil-masoor-250x250-250x250-1.jpeg', 70, '10', '<p>70 taka per Kg</p>', 'Dal', 70),
(39, 26, 15, 0, '2020-10-03 13:29:18', 'Meat 1 Kg', 'U3sAfgxPZjnmpUzpD6dnw6-1200-80.jpg', 'U3sAfgxPZjnmpUzpD6dnw6-1200-80.jpg', 'U3sAfgxPZjnmpUzpD6dnw6-1200-80.jpg', 580, '12', '<p>Meat per Kg 580 Taka</p>', 'Meat', 580),
(40, 27, 15, 0, '2020-10-03 13:30:55', 'Fish 1 Kg ', 'Salmon-fish.jpg', 'Salmon-fish.jpg', 'Salmon-fish.jpg', 500, '13', '<p>Best Fish per Kg 500 taka&nbsp;</p>', 'Fish ', 500),
(41, 31, 18, 0, '2020-10-03 13:33:19', 'LPG Gas 22Kg', 'main-tech-slider-4.jpg', 'main-tech-slider-4.jpg', 'main-tech-slider-4.jpg', 1400, '14', '<p>LPG Gas&nbsp;</p>', 'LPG Gas', 1400),
(42, 32, 16, 0, '2020-10-03 13:35:26', 'Beverages', 'beverages.jpg', 'beverages.jpg', 'beverages.jpg', 100, '15', '<p>Beverages</p>', 'Beverages', 100),
(43, 33, 13, 0, '2020-10-03 13:38:28', 'Pure Mustard oil 5Kg', 'extra-04163434.jpg', 'extra-04163434.jpg', 'extra-04163434.jpg', 500, '20', '<p>Pured musterd Oil</p>', 'Pure Mustard oil', 500),
(44, 16, 12, 0, '2020-10-03 19:06:10', 'Chicken fry', 'air-fryer-fried-chicken-on-white-plate-A.jpg', 'air-fryer-fried-chicken-on-white-plate-A.jpg', 'air-fryer-fried-chicken-on-white-plate-A.jpg', 50, 'Chicken fry', '<p>Best Product</p>', 'Fried Chicken', 50),
(45, 33, 13, 0, '2020-10-04 10:17:43', 'Pure Mustard oil 1Kg', 'images.jpg', 'images.jpg', 'images.jpg', 100, 'pure musterd oil', '<p>Best product</p>', 'Pure Mustard oil', 100),
(46, 26, 15, 0, '2020-10-05 19:03:02', 'Meat', 'meat.jpg', 'meat.jpg', 'meat.jpg', 580, 'meat', '<p>best price</p>', 'sale', 570),
(50, 18, 12, 0, '2020-10-06 00:10:16', 'Chow Main', 'chow-mein-1200.jpg', 'chow-mein-1200.jpg', 'chow-mein-1200.jpg', 70, 'chow main', '<p>Best Product</p>', 'Offer', 40),
(51, 26, 15, 0, '2020-10-06 00:31:40', 'Meat', 'mm.jpg', 'mm.jpg', 'mm.jpg', 600, 'meat', '<p>best meat</p>', 'Offer', 550),
(52, 20, 14, 0, '2020-10-06 02:45:06', 'Rice ', 'rice-agencies.jpg', 'rice-agencies.jpg', 'rice-agencies.jpg', 35, 'Rice ', '<p>Best rice</p>', 'Offer', 28),
(53, 33, 13, 0, '2020-10-06 11:06:54', 'pure musterd oil', 'extra-04163434.jpg', 'extra-04163434.jpg', 'extra-04163434.jpg', 498, 'pure musterd oil', '<p>Best oil</p>', 'Offer', 450),
(54, 30, 17, 0, '2020-10-06 11:14:03', 'medicine', 'medicine.jpg', 'medicine.jpg', 'medicine.jpg', 50, 'medicine', '<p>medicine</p>', 'Offer', 20),
(55, 31, 18, 0, '2020-10-06 11:16:09', 'LPG Gas', 'main-tech-slider-4.jpg', 'main-tech-slider-4.jpg', 'main-tech-slider-4.jpg', 1200, 'lpg gash', '<p>LPG</p>', 'Offer', 1100),
(56, 32, 16, 0, '2020-10-06 11:17:37', 'beverge', 'beverages.jpg', 'beverages.jpg', 'beverages.jpg', 70, 'bbb', '<p>bbbb</p>', 'Offer', 50),
(57, 26, 15, 0, '2020-10-06 15:23:26', 'Got Meat', 'goat meat.jpg', 'goat meat.jpg', 'goat meat.jpg', 780, 'got', '<p>best&nbsp;</p>', 'Offer', 700);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`) VALUES
(34, '  à¦®à§à¦¯à¦¾à¦—à¦¨à§‡à¦¸à¦¿à§Ÿà¦¾à¦®  '),
(35, 'à¦œà¦¿à¦™à§à¦• ');

-- --------------------------------------------------------

--
-- Table structure for table `product_sale`
--

CREATE TABLE `product_sale` (
  `Sale_Id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `dilars_id` int(11) NOT NULL,
  `Product Name` varchar(255) NOT NULL,
  `Payment` int(11) NOT NULL,
  `Due` int(11) NOT NULL,
  `Product_Qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_sale`
--

INSERT INTO `product_sale` (`Sale_Id`, `customer_id`, `dilars_id`, `Product Name`, `Payment`, `Due`, `Product_Qty`, `total`, `Date`) VALUES
(38, 13, 0, '34', 1000, 100, 50, 5000, '2021-02-11 08:40:18'),
(39, 15, 0, '35', 5000, 100, 50, 5000, '2021-02-11 08:40:26'),
(40, 13, 0, '35', 10000, 100, 50, 5000, '2021-02-11 08:40:35'),
(41, 16, 0, '35', 1000, 100, 50, 5000, '2021-02-11 08:40:44'),
(42, 15, 0, '34', 3000, 100, 50, 5000, '2021-02-11 08:40:52'),
(43, 16, 0, '34', 10000, 100, 50, 5000, '2021-02-11 12:18:43'),
(44, 13, 0, '34', 50000, 1000, 120, 100000, '2021-02-13 12:27:51'),
(45, 14, 0, '35', 200000, 1000, 675, 500000, '2021-02-13 12:31:40'),
(46, 15, 0, '34', 10000, 1000, 360, 300000, '2021-02-13 12:33:10'),
(47, 13, 0, '34', 1000, 500, 14, 5000, '2021-02-13 12:34:35'),
(48, 13, 0, '34', 1000, 500, 1, 500, '2021-02-13 12:37:27'),
(49, 13, 0, '34', 10000, 100, 1, 100, '2021-02-13 12:37:49'),
(50, 13, 0, '34', 10000, 1000, 110, 100000, '2021-02-16 08:08:06'),
(51, 13, 0, '34', 10000, 100, 55, 5000, '2021-02-16 08:09:42'),
(52, 13, 0, '34', 10000, 100, 55, 5000, '2021-02-16 08:10:48'),
(53, 13, 0, '35', 10000, 100, 120, 10000, '2021-02-16 08:18:32'),
(54, 13, 0, '34', 7000, 100, 110, 10000, '2021-02-16 08:21:07'),
(55, 13, 0, '35', 5000, 100, 600, 50000, '2021-02-16 08:23:20'),
(56, 13, 0, '35', 3000, 100, 55, 5000, '2021-02-16 08:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Accounting'),
(3, 'Production'),
(4, 'Store');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(11) NOT NULL,
  `p_cat_id` int(11) NOT NULL,
  `dilars_id` int(11) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `total_store` int(15) NOT NULL,
  `Done` int(11) NOT NULL,
  `amount_per_ton` int(15) NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `total_amount` int(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `p_cat_id`, `dilars_id`, `store_name`, `total_store`, `Done`, `amount_per_ton`, `paid_amount`, `total_amount`, `date_time`) VALUES
(59, 0, 3, '35', 50, 0, 10000, 100000, 500000, '2009-12-22 18:10:21'),
(60, 0, 3, '', 0, 0, 0, 100000, 0, '2009-12-22 18:10:32'),
(62, 0, 0, '34', 0, 50, 0, 0, 0, '2009-12-22 18:18:04'),
(63, 0, 0, '35', 0, 50, 0, 0, 0, '2009-12-22 18:22:08'),
(64, 0, 0, '34', 10, 0, 0, 0, 0, '2009-12-22 18:08:44'),
(65, 0, 0, '34', 10, 0, 0, 0, 0, '2021-02-10 12:50:49'),
(66, 0, 0, '34', 10, 0, 0, 0, 0, '2021-02-10 12:50:58'),
(67, 0, 0, '34', 10, 0, 0, 0, 0, '2021-02-10 12:51:03'),
(68, 0, 0, '34', 20, 0, 0, 0, 0, '2021-02-10 12:51:10'),
(69, 0, 0, '34', 0, 20, 0, 0, 0, '2021-02-14 06:27:04'),
(70, 0, 0, '34', 50, 0, 0, 0, 0, '2021-02-14 07:58:31'),
(71, 0, 0, '35', 50, 0, 0, 0, 0, '2021-02-14 07:59:01'),
(72, 0, 0, '34', 0, 10, 0, 0, 0, '2021-02-14 08:03:58'),
(73, 0, 0, '35', 0, 10, 0, 0, 0, '2021-02-14 08:03:58'),
(74, 0, 0, '34', 0, 10, 0, 0, 0, '2021-02-16 07:14:43'),
(75, 0, 0, '35', 0, 10, 0, 0, 0, '2021-02-16 07:14:44'),
(76, 0, 0, '34', 0, 10, 0, 0, 0, '2021-02-16 07:15:36'),
(77, 0, 0, '35', 0, 10, 0, 0, 0, '2021-02-16 07:15:36'),
(78, 0, 0, '34', 0, 10, 0, 0, 0, '2021-02-16 07:19:10'),
(79, 0, 0, '35', 0, 10, 0, 0, 0, '2021-02-16 07:19:10'),
(80, 0, 0, '34', 0, 5, 0, 0, 0, '2021-02-16 07:21:16'),
(81, 0, 0, '35', 0, 5, 0, 0, 0, '2021-02-16 07:21:16'),
(82, 0, 0, '34', 0, 10, 0, 0, 0, '2021-02-16 07:22:42'),
(83, 0, 0, '35', 0, 10, 0, 0, 0, '2021-02-16 07:22:42'),
(84, 0, 0, '34', 0, 10, 0, 0, 0, '2021-02-16 07:24:23'),
(85, 0, 0, '35', 0, 10, 0, 0, 0, '2021-02-16 07:24:23'),
(86, 0, 0, '34', 0, 5, 0, 0, 0, '2021-02-16 07:36:36'),
(87, 0, 0, '35', 0, 5, 0, 0, 0, '2021-02-16 07:36:36'),
(88, 0, 0, '34', 0, 10, 0, 0, 0, '2021-02-16 08:45:49'),
(89, 0, 0, '35', 0, 10, 0, 0, 0, '2021-02-16 08:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `trak_entry`
--

CREATE TABLE `trak_entry` (
  `sl` int(11) NOT NULL,
  `ch` varchar(255) NOT NULL,
  `ch_w` varchar(255) NOT NULL,
  `s_w` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `dilars`
--
ALTER TABLE `dilars`
  ADD PRIMARY KEY (`dilars_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `employee_salary`
--
ALTER TABLE `employee_salary`
  ADD PRIMARY KEY (`employee_salary_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`production_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `product_sale`
--
ALTER TABLE `product_sale`
  ADD PRIMARY KEY (`Sale_Id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `trak_entry`
--
ALTER TABLE `trak_entry`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dilars`
--
ALTER TABLE `dilars`
  MODIFY `dilars_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee_salary`
--
ALTER TABLE `employee_salary`
  MODIFY `employee_salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `production_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product_sale`
--
ALTER TABLE `product_sale`
  MODIFY `Sale_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `trak_entry`
--
ALTER TABLE `trak_entry`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
