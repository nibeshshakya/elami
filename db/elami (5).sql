-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2017 at 12:40 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elami`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrer`
--

CREATE TABLE `carrer` (
  `id` int(11) NOT NULL,
  `jobtitle` varchar(50) NOT NULL,
  `edutitle` varchar(50) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL,
  `usersid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carrer`
--

INSERT INTO `carrer` (`id`, `jobtitle`, `edutitle`, `salary`, `usersid`) VALUES
(1, 'ghjh', 'vjjvv', 'vjhv', NULL),
(2, 'vhjvhjv', 'hvjhvj', 'vhjvj', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `id` int(11) NOT NULL,
  `edutitle` varchar(50) DEFAULT NULL,
  `jobtitle` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `entity`
--

CREATE TABLE `entity` (
  `serviceid` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `org`
--

CREATE TABLE `org` (
  `id` varchar(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `serviceid` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` varchar(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `socialstatus`
--

CREATE TABLE `socialstatus` (
  `id` int(11) NOT NULL,
  `mothertongue` varchar(30) DEFAULT NULL,
  `religion` varchar(30) DEFAULT NULL,
  `caste` varchar(30) DEFAULT NULL,
  `intercaste` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `height` float DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `countryliving` varchar(30) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `firstname`, `surname`, `password`, `dob`, `email`, `height`, `sex`, `age`, `countryliving`, `contact`, `created_at`, `updated_at`, `user_id`, `picture`) VALUES
(27, 'sujindra', 'sujindra', 'maharjan', 'suzindra', '2001-10-09', 'suzindra@gmail.com', 5.6, 'male', 23, NULL, NULL, '2017-05-24 02:39:22', '2017-05-24 02:39:22', 18, '485107.jpg'),
(28, 'aman', 'aman', 'shakya', 'aman', '1980-01-12', 'aman@gmail.com', 5.8, 'male', 27, NULL, NULL, '2017-05-24 02:42:09', '2017-05-24 02:42:09', 19, '993326.jpg'),
(29, 'sanjay', 'sanjay', 'dangol', 'sanjaylal', '2051-12-16', 'sanjayalal@gmail.com', 5.6, 'male', 21, NULL, NULL, '2017-05-24 03:16:50', '2017-05-24 03:16:50', 20, '833496.jpg'),
(30, 'sita', 'sita', 'basnet', 'sitasita', '2008-10-19', 'sita@gmail.com', 5, 'female', 24, NULL, NULL, '2017-05-25 03:32:05', '2017-05-25 03:32:05', 21, '680881.jpg'),
(31, 'aman', 'aman', 'neupane', 'amanaman', '2001-10-09', 'aman1@gmail.com', 4, 'male', 29, NULL, NULL, '2017-05-25 04:36:30', '2017-05-25 04:36:30', 22, '680881.jpg'),
(32, 'anish', 'anish', 'shakya', 'anish', '2001-10-09', 'anish@gmail.com', 4, 'male', 23, NULL, NULL, '2017-05-25 04:44:20', '2017-05-25 04:44:20', 23, '680881.jpg'),
(34, 'ram', 'ram', 'nepali', 'hvjashjchvjh', '2001-03-04', 'vhjhchcjhcjc', 9, 'male', 25, NULL, NULL, '2017-05-25 05:21:40', '2017-05-25 05:21:40', 26, '680881.jpg'),
(35, 'anish', 'anish', 'silakar', 'silakar', '2008-10-19', 'silakar@gmail.com', 6, 'male', 23, NULL, NULL, '2017-05-25 05:24:56', '2017-05-25 05:24:56', 27, '680881.jpg'),
(53, 'reshma', 'reshma', 'nepali', 'knknlk', '2008-10-19', 'vkkjvkvvkkjvk', 3, 'female', 25, NULL, NULL, '2017-05-26 01:54:23', '2017-05-26 01:54:23', 70, NULL),
(54, 'kesu', 'kesu', 'shakya', 'mklkllklk', '2008-10-19', 'vkkjvkvvkkjvk', 3, 'female', 28, NULL, NULL, '2017-05-26 01:56:03', '2017-05-26 01:56:03', 71, NULL),
(55, 'babita', 'blbllbblk', 'pandey', 'lnklnl;ln', '2008-10-11', 'blklblbblbl', 7, 'female', 23, NULL, NULL, '2017-05-26 02:21:24', '2017-05-26 02:21:24', 74, NULL),
(56, 'mina', 'blbllbblk', 'neupane', 'klklk', '2008-10-11', 'blklblbblbl', 7, 'female', 24, NULL, NULL, '2017-05-26 02:34:29', '2017-05-26 02:34:29', 75, NULL),
(57, 'nit', 'hbhj', 'shrestha', 'uiiguguugu', '2001-10-09', 'hjb', 9876, 'female', 35, NULL, NULL, '2017-05-26 05:56:29', '2017-05-26 05:56:29', 92, '485107.jpg'),
(58, 'gita', 'testing', 'rizal', '1', '2008-10-19', 'test@test.com', 23, 'female', 25, NULL, NULL, '2017-05-26 05:58:44', '2017-05-26 05:58:44', 93, '993326.jpg'),
(59, 'mina', 'hvjhvjvhjvhj', 'dangol', 'vhjvhjjvh', '2008-10-11', 'vhjjvhvhjvhj', 4, 'female', 24, NULL, NULL, '2017-05-26 06:11:05', '2017-05-26 06:11:05', 94, '655219.jpg'),
(60, 'aashma', 'aashma', 'maharjan', 'aashma', '1994-02-04', 'aashma@gmail.com', 5.5, 'female', 23, NULL, NULL, '2017-05-26 06:45:09', '2017-05-26 06:45:09', 95, '148003.jpg'),
(61, 'sita', 'sita', 'maharjan', 'sita', '1994-03-03', 'sita@gmail.com', 4.7, 'female', 23, NULL, NULL, '2017-05-26 07:01:10', '2017-05-26 07:01:10', 96, '833496.jpg'),
(62, 'ravi', 'Ravi', 'maharjan', 'ravi', '1995-03-05', 'ravi@gmail.com', 5.9, 'male', 22, NULL, NULL, '2017-05-26 07:05:42', '2017-05-26 07:05:42', 101, '175319.jpg'),
(63, 'selena', 'selena', 'gomez', 'selena', '1993-04-05', 'selena@gmail.com', 5.9, 'female', 22, NULL, NULL, '2017-05-26 07:56:14', '2017-05-26 07:56:14', 102, '680881.jpg'),
(64, 'rita', 'rita', 'ora', 'rita', '2008-10-11', 'rita@gmail.com', 6, 'female', 22, NULL, NULL, '2017-05-26 09:48:23', '2017-05-26 09:48:23', 103, '386528.jpg'),
(65, 'asmi', 'asmi', 'shrestha', 'asmi', '1994-02-04', 'asmi@gmail.com', 5.7, 'female', 23, NULL, NULL, '2017-05-26 11:12:44', '2017-05-26 11:12:44', 104, '222493.jpg'),
(66, 'aman', 'aman', 'maharjan', 'aman', '2001-03-04', 'aman1@gmail.com', 5.5, 'male', 24, NULL, NULL, '2017-05-26 11:19:12', '2017-05-26 11:19:12', 105, '401150.jpg'),
(67, 'shristi', 'shristi', 'shrestha', 'shristi', '2001-10-09', 'shristi@gmail.com', 5.7, 'female', 25, NULL, NULL, '2017-05-26 11:21:24', '2017-05-26 11:21:24', 106, '149142.jpg'),
(68, 'nibesh', 'nibesh', 'shakya', 'hkkklkl', '2008-10-11', 'nibesh@gmail.com', 5.7, 'male', 22, NULL, NULL, '2017-05-26 11:26:22', '2017-05-26 11:26:22', 112, '449137.jpg'),
(69, 'madhav', 'madhav', 'pandey', 'madhav', '2008-10-19', 'madhav@gmail.com', 6, 'male', 23, NULL, NULL, '2017-05-26 18:57:12', '2017-05-26 18:57:12', 113, '723253.jpg'),
(70, 'sanjay', 'sanjay', 'shrestha', 'sanjay', '2008-10-19', 'sanjay1@gmail.com', 5, 'male', 22, NULL, NULL, '2017-05-28 03:33:42', '2017-05-28 03:33:42', 115, '325981.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `created_at`, `updated_at`) VALUES
(15, 'zin@gmail.com', 'zibindra', '$2y$10$Q8TbYFNa80tfTQ0ciX9cMOvnadM2d759R5AWMDH1IQf6ghkSsN.AO', '2017-05-23 04:59:33', '2017-05-23 04:59:33'),
(16, 'anish@gmail.com', 'anish', '$2y$10$KFYnJOxGkfUEmdtv0cTVfeSII6BmMXBfAZYYI0GT7o/d6b3GnduE.', '2017-05-24 01:42:07', '2017-05-24 01:42:07'),
(17, 'suzindra@gmail.com', 'sujindra', 'suzindra', '2017-05-24 02:38:43', '2017-05-24 02:38:43'),
(18, 'suzindra@gmail.com', 'sujindra', 'suzindra', '2017-05-24 02:39:22', '2017-05-24 02:39:22'),
(19, 'aman@gmail.com', 'aman', '$2y$10$tQLNeI9Ms2xRxf5kxbem5O7czcsJv/Qp8nZZB34y.vqqoGljaIqPO', '2017-05-24 02:42:09', '2017-05-24 02:42:09'),
(20, 'sanjayalal@gmail.com', 'sanjay', '$2y$10$aDO9LeSGAgLm1XWm9ERnleFfZOmosl.Wc5MDD5WZJVZ55gRUMDDl6', '2017-05-24 03:16:50', '2017-05-24 03:16:50'),
(21, 'sita@gmail.com', 'sita', '$2y$10$9pI6tuLpCXn3ATsDv1/z1OjhU9XJhQ2sg888BE.wgIOF8/SzthZDK', '2017-05-25 03:32:05', '2017-05-25 03:32:05'),
(22, 'aman1@gmail.com', 'aman', '$2y$10$UVyJkXZ0d6PUai/3pS8Jie5l12o18UCEiKJ/svtUgjoJM64vSeo6m', '2017-05-25 04:36:30', '2017-05-25 04:36:30'),
(23, 'anish@gmail.com', 'anish', '$2y$10$g5S.pfyCiWC1vSmto3IvkelJefpAX8Tiye55tsnxDB0TO3et4QKS2', '2017-05-25 04:44:20', '2017-05-25 04:44:20'),
(24, NULL, 'bjbjjb', '$2y$10$eq/03Z76of3NJceebIH9lebO7BCeSZJ9lZgYumA2Gbm0DVlM82.jG', '2017-05-25 05:17:54', '2017-05-25 05:17:54'),
(25, NULL, 'vvhhvjhvjhvjhvj', '$2y$10$J8erl/lI45b3miEGV7Y0IuGtRS5aDaixrXTbbDZwNjn1Zmn2nrL4m', '2017-05-25 05:19:12', '2017-05-25 05:19:12'),
(26, 'vhjhchcjhcjc', 'ram', '$2y$10$hcJs6uL2y2ZWX08Siq13g.RN1VIGT7NU.k.517qpIihABMKfzo.cy', '2017-05-25 05:21:40', '2017-05-25 05:21:40'),
(27, 'silakar@gmail.com', 'anish', '$2y$10$GlU.QMzEBXh/PBFQRQ4quOOZ7Gs.J9YpsuhSG.JpTVPzTc2RM19j.', '2017-05-25 05:24:56', '2017-05-25 05:24:56'),
(28, 'jibu@gmail.com', 'jibindra', '$2y$10$jO.S0ZkRBSbNBz1GLrmjieibuFLO5Q9DxKkiR2LAMHUoiAXn72QpS', '2017-05-25 05:26:35', '2017-05-25 05:26:35'),
(29, 'hjhvjvjvhhvjh', 'jcjhjhj', '$2y$10$b873rO/RLfjDdnQg7N/7G.wfQrJwemRh831uoWPHzUWIwTzfpvprS', '2017-05-25 05:36:41', '2017-05-25 05:36:41'),
(30, 'kjvhjhvhvhv', 'rame', '$2y$10$seAUL3qjXRbn0XknyWDPhOrd9aBFTsaEJ.uJleiuO3spDfzKvNIru', '2017-05-25 05:47:27', '2017-05-25 05:47:27'),
(31, 'kjvhjhvhvhv', 'rame', '$2y$10$sWrKi2g6k.6hQGG6IXawxeVOEGp9.Kz9us2p0UQBPuuIFfdKfbofu', '2017-05-25 05:48:05', '2017-05-25 05:48:05'),
(32, 'vkjvkvkvkjvk', 'gkkgjjkj', '$2y$10$uaCjt.sv2R0qZG2viZZRWuR1mYDA5GkgAgGTJOw2/pApXSQnaiHBS', '2017-05-25 06:10:31', '2017-05-25 06:10:31'),
(33, 'vhhvjhvjhvj', 'hhj', '$2y$10$0y090Rh5Bb/orf.H.6ruzuNmiphcmls4r3wlv.mdajaD5TY6IlID2', '2017-05-25 06:15:13', '2017-05-25 06:15:13'),
(34, 'vhhvjhvjhvj', 'hhj', '$2y$10$7ex46f6NxxbrZMP4Xp2TmeDY1xubbn..IBDB8JkH6VbTcjghcTJGW', '2017-05-25 06:18:24', '2017-05-25 06:18:24'),
(35, 'vhhvjhvjhvj', 'hhj', '$2y$10$X5M5FrrsKtPX2VFnTdDsc.MWEm5o1JDQGxYsScaUrR1jDKa3s1Iym', '2017-05-25 06:19:02', '2017-05-25 06:19:02'),
(36, 'vhhvjhvjhvj', 'hhj', '$2y$10$W70V6SZMKTV9K0dg/Wvm1u1HRip6XEC0jqNWUvYc0w5J02sYxaMRm', '2017-05-25 06:19:21', '2017-05-25 06:19:21'),
(37, 'vhhvjhvjhvj', 'hhj', '$2y$10$bzOdtO/JsshFgwGkdOa84eQ8AXcadusgPFtN.o81MDlD/AaXKU3Em', '2017-05-25 06:23:03', '2017-05-25 06:23:03'),
(38, 'vhhvjhvjhvj', 'hhj', '$2y$10$6TJ.xUijMq401.MD1lyPj.L3xU16mWXBvl4vjhBBcNcoYYN5tt/Pi', '2017-05-25 06:23:11', '2017-05-25 06:23:11'),
(39, 'cghcghchcggch', 'gchccg', '$2y$10$GnmWO5PrDvNMViHzMgZmueppFRFxHmIQNu.EILP8hTyM3kXydimGq', '2017-05-25 06:25:25', '2017-05-25 06:25:25'),
(40, 'cghcghchcggch', 'gchccg', '$2y$10$7/1j9DGwA3nfCvbR6VdzX.plUO3x2pNvPZSVO0n9aDkXQu0UX76RK', '2017-05-25 06:26:43', '2017-05-25 06:26:43'),
(41, 'hbhj', 'bhjbhj', '$2y$10$/J83zevBQt9tCfxMkfkvyOU/rWQSplNh9rcXgxMOnJAPTCPdDmXJ.', '2017-05-25 06:28:02', '2017-05-25 06:28:02'),
(42, 'hbhj', 'bhjbhj', '$2y$10$VgD/Y24o55YH8qfwlql0bOFvF2K0c9XSmynCQtMoGkmEgh10KSa3G', '2017-05-25 06:29:09', '2017-05-25 06:29:09'),
(43, 'hbhj', 'bhjbhj', '$2y$10$Gd3.MCb.WNrpldv0xecqfeNJSt2QT9uaUK8Z75Di.oDKlaz9uHHGy', '2017-05-25 06:30:06', '2017-05-25 06:30:06'),
(44, 'hbhj', 'bhjbhj', '$2y$10$ftoIt.XGIebrP92tc/4qnuTv0Sj59ykoTTk0EZHQQsrjeVWbhmUxm', '2017-05-25 06:30:46', '2017-05-25 06:30:46'),
(45, 'hbhj', 'bhjbhj', '$2y$10$PKV4QQKHN8EughI02fmTluYL0CWa/O1ZjykEeQTikYBt.TUkGBR1i', '2017-05-25 06:31:01', '2017-05-25 06:31:01'),
(46, 'hbhj', 'bhjbhj', '$2y$10$h0HYZoT2bqNJhGRGFMkce.BHsS/4zd9uHEUBsqA6FJEEv8FgbbtKq', '2017-05-25 06:32:57', '2017-05-25 06:32:57'),
(47, 'hbhj', 'bhjbhj', '$2y$10$2X8MDYYjqMznE8gQzWFCeuNAbDoAMFFS4IL0WNAYJ9sKnMFkGcogW', '2017-05-25 06:33:09', '2017-05-25 06:33:09'),
(48, 'hbhj', 'bhjbhj', '$2y$10$RU4ihA87DYkvl4ZmriFO9ejaGRIteeecKXxg9P1QU.iR3lCw/QaGC', '2017-05-25 06:36:18', '2017-05-25 06:36:18'),
(49, 'hbhj', 'bhjbhj', '$2y$10$vQ.6fSmiIW7NnW/GaZKKxeuxGQuCeA.cWKZF8zkY.o31JHsOE27q.', '2017-05-25 06:37:48', '2017-05-25 06:37:48'),
(50, 'hbhj', 'bhjbhj', '$2y$10$TFZ838.VVjvcMza49V3t6uf3gGXrrk4DS/w5Jr1hbv79IrXE6YGuK', '2017-05-25 06:38:20', '2017-05-25 06:38:20'),
(51, 'vhjhvjhvjhvj', 'jvhhvjhvj', '$2y$10$hPerSy2UumQRLvWk3J19wuzwyPWych5moETOZz4IS2Cys0xrNVXda', '2017-05-25 06:39:33', '2017-05-25 06:39:33'),
(52, 'vhjhvjhvjhvj', 'jvhhvjhvj', '$2y$10$PRnGjHykI0A/NFu8ZO6n5.KxQkZULD6JN7aeJWuKgw7He4rD9OiIi', '2017-05-25 06:40:48', '2017-05-25 06:40:48'),
(53, 'vhjhvjhvjhvj', 'jvhhvjhvj', '$2y$10$cupovWAM9pV18uFscmk8UOpV5Zj21LZx/eWohR7VfiEjw87ARnVVu', '2017-05-25 06:41:38', '2017-05-25 06:41:38'),
(54, 'bbkbkjbjbjb', 'jinindra', '$2y$10$WZk/W.bGl9r7R6CLC1vyyeAZSMBOeliTfRMdA9KrigLThZCIu7Ie.', '2017-05-25 09:03:31', '2017-05-25 09:03:31'),
(55, 'bbkbkjbjbjb', 'jinindra', '$2y$10$TLOVmnMgKgyjx6Vud39YiO5q3x8g95Ifprq9pAfZ4c4d3zHp/Nq6C', '2017-05-25 09:11:13', '2017-05-25 09:11:13'),
(56, 'vkkjvkvvkkjvk', 'kjkjvvjvj', '$2y$10$rfyPKpUUWQZ/4dq5K69/7eCXrE4U3U.C4Uas.82jzkOESMFHT3JF2', '2017-05-26 01:40:26', '2017-05-26 01:40:26'),
(57, 'vkkjvkvvkkjvk', 'kjkjvvjvj', '$2y$10$/FKDSrDNAggX99Njhyp5Ee2bVZTU4Fkzq8pFmsKoZ/s0azij0uvHS', '2017-05-26 01:41:53', '2017-05-26 01:41:53'),
(58, 'vkkjvkvvkkjvk', 'kjkjvvjvj', '$2y$10$yJRLF4Ad4wmtra68E56bBOy9Me91HsdtdeXZz1XkZDgeLVdoAbYZC', '2017-05-26 01:45:07', '2017-05-26 01:45:07'),
(59, 'vkkjvkvvkkjvk', 'kjkjvvjvj', '$2y$10$HPyzARySfaB9W3Za0Dn/R.oWBLVUukXBVur/PditiSrQzBdXfSHYS', '2017-05-26 01:45:52', '2017-05-26 01:45:52'),
(60, 'vkkjvkvvkkjvk', 'kjkjvvjvj', '$2y$10$rgFpvvTf7apSyC51NWo1sutU0c.dgoVjreXeYz7CjNuZ7YvA.zMYG', '2017-05-26 01:47:58', '2017-05-26 01:47:58'),
(61, 'vkkjvkvvkkjvk', 'kjkjvvjvj', '$2y$10$d9nISKI.d78a81QPx69eqO.AiwrXT9If5l/Mr1pps07fFmj6o/97.', '2017-05-26 01:48:36', '2017-05-26 01:48:36'),
(62, 'vkkjvkvvkkjvk', 'kjkjvvjvj', '$2y$10$7iYVMRlogWiYeQ9Y93nXIuG6GTgY8yBh29voIpnm2fJteaeG6X5Fm', '2017-05-26 01:50:01', '2017-05-26 01:50:01'),
(63, 'vkkjvkvvkkjvk', 'kjkjvvjvj', '$2y$10$2M5/Lvj1NcjjEWsiWcNTNO89bdxZVBYUHaFfrQlUEKkFxip602dYG', '2017-05-26 01:50:21', '2017-05-26 01:50:21'),
(64, 'vkkjvkvvkkjvk', 'kjkjvvjvj', '$2y$10$E4R37nlbuwbAad2L24WpIuJNBU8uMX7uVLeZZzSZb6/r2oCfEXhyu', '2017-05-26 01:50:56', '2017-05-26 01:50:56'),
(65, 'vkkjvkvvkkjvk', 'kjkjvvjvj', '$2y$10$jEA6sNAT3R8K710S7viAnelDnHOWXmRCBKpokWt/h/LIddkm36QGy', '2017-05-26 01:51:18', '2017-05-26 01:51:18'),
(66, 'vkkjvkvvkkjvk', 'kjkjvvjvj', '$2y$10$LeQ3K/WV3e3MQw9uC8e/3.H6bPovyFG1mfLh/15PSQo.pUfNS3D9C', '2017-05-26 01:51:43', '2017-05-26 01:51:43'),
(67, 'vkkjvkvvkkjvk', 'kjkjvvjvj', '$2y$10$EuNckiPLcG6JJMDsdKkmXu7AyTJywjTuVLsPbZh6JzMta8eMlLRuK', '2017-05-26 01:52:20', '2017-05-26 01:52:20'),
(68, 'vkkjvkvvkkjvk', 'kjkjvvjvj', '$2y$10$rDG/7NcC0BZOPJy8lluqd.uzblm4AVSJbAwr956ZLlDJ3bSEXdth.', '2017-05-26 01:52:55', '2017-05-26 01:52:55'),
(69, 'vkkjvkvvkkjvk', 'kjkjvvjvj', '$2y$10$FcQK2oTk1JDHD6z21Q1q7.ntrFycZBlqCyrQ/Lf783FG3zffp.Ta6', '2017-05-26 01:54:05', '2017-05-26 01:54:05'),
(70, 'vkkjvkvvkkjvk', 'kjkjvvjvj', '$2y$10$TNqhbAIzN8JRcqBLYEmXGeCdIdXDrZ2/ctEydqwMoD4aqWx034Poe', '2017-05-26 01:54:23', '2017-05-26 01:54:23'),
(71, 'vkkjvkvvkkjvk', 'kjkjvvjvj', '$2y$10$nsSVWZ.SwYY3Bb5R3MUqL.DPmGrOvUJOJ2JVhgoqIS1qS1RXnikSm', '2017-05-26 01:56:03', '2017-05-26 01:56:03'),
(72, 'blklblbblbl', 'bjlblbbl', '$2y$10$QaJdsUkVHNAKuKE1ze1BDOfhxbCa8scL.wICTIuIm2Nitonap.t.S', '2017-05-26 02:21:00', '2017-05-26 02:21:00'),
(73, 'blklblbblbl', 'bjlblbbl', '$2y$10$lPv3SPMuNcuMrQHlRkL9z.DBx8wAD16rJLiToRuvTv7PYUwSfnJRK', '2017-05-26 02:21:14', '2017-05-26 02:21:14'),
(74, 'blklblbblbl', 'bjlblbbl', '$2y$10$pAL8qXZiwMQ6xU8RlLrjJeSiBAQEoXRR93yzYGy.m0M05Bc0XxSC6', '2017-05-26 02:21:24', '2017-05-26 02:21:24'),
(75, 'blklblbblbl', 'bjlblbbl', '$2y$10$UO48vK56TKabYmf0.wIPEua7EuvoyfWDcXY7DZuqh16KODXGGPHEi', '2017-05-26 02:34:29', '2017-05-26 02:34:29'),
(76, 'bhbhbhbh', 'bbjb', '$2y$10$u0FfQZgukU075M/qY93BHOr/8IkDl5TVqACpO9uctGZpHBcHqzYOa', '2017-05-26 05:16:25', '2017-05-26 05:16:25'),
(77, 'bhbhbhbh', 'bbjb', '$2y$10$DSKY.3IHDbj5KGvMszJ26.V8v/zpSPwfURRaTIbjJ6.sha7V98EEu', '2017-05-26 05:18:27', '2017-05-26 05:18:27'),
(78, 'bhbhbhbh', 'bbjb', '$2y$10$ugMelo8aipvkvb1GchusEuk4klG7dZ062F0vAEWDiekH4veqP3DV.', '2017-05-26 05:18:52', '2017-05-26 05:18:52'),
(79, 'bhbhbhbh', 'bbjb', '$2y$10$rkyeK/kRkoIt51gAcm7DEO3ORbYaFAuF5QIRIfIq71jbHaSzzGGfa', '2017-05-26 05:20:16', '2017-05-26 05:20:16'),
(80, 'bhbhbhbh', 'bbjb', '$2y$10$E0Z2Rwzh.Njnq9krBUD1b.9eMGaxyM6nm2gvS07xyoAGw/M3bo5zy', '2017-05-26 05:20:40', '2017-05-26 05:20:40'),
(81, 'bhbhbhbh', 'bbjb', '$2y$10$0dUKHe04ZAHuw5jwg9jbiujWYP/zxh94XX90krxNgJ529kwNcK1B2', '2017-05-26 05:28:57', '2017-05-26 05:28:57'),
(82, 'bhbhbhbh', 'bbjb', '$2y$10$22nQMsIqUPd706L9wCuxfuSBr1t35o5i6iTorH3kNdf/voXnXL/5e', '2017-05-26 05:29:16', '2017-05-26 05:29:16'),
(83, 'bhbhbhbh', 'bbjb', '$2y$10$cBPBa/sUyVreWK.gTPJBH.FXXnPiTA9VP3TqjW3P1EapeGaVezjSe', '2017-05-26 05:31:10', '2017-05-26 05:31:10'),
(84, 'bhbhbhbh', 'bbjb', '$2y$10$aW6xS9qF6W02QSGafVSb2uJUzv.xoNM5/tHW/jDGWy6dgRmD8XEUy', '2017-05-26 05:32:22', '2017-05-26 05:32:22'),
(85, 'bhbhbhbh', 'bbjb', '$2y$10$bN4Ef9t19pJu6Own.k.J7.EPlMX.TaQji30atFdBupI2FXl2irhrS', '2017-05-26 05:32:39', '2017-05-26 05:32:39'),
(86, 'bhbhbhbh', 'bbjb', '$2y$10$341vbtT3bMxt06YPLjoWu.WHYNh9JnIpRw3vVAuzz8D57flSRdwby', '2017-05-26 05:40:40', '2017-05-26 05:40:40'),
(87, 'jnjk', 'mnkj', '$2y$10$vqSD2BiFpEKWFdVF7CFaKupMs4nGWSSUxEd.gru9mYBzJTbC2oeBi', '2017-05-26 05:41:39', '2017-05-26 05:41:39'),
(88, 'jhghj', 'ghjg', '$2y$10$qIdiRfPcQ6nrxoepmtVfB.3qhuVkiD6vMXx7OvWZ2cvNCUVohHRGW', '2017-05-26 05:50:08', '2017-05-26 05:50:08'),
(89, 'aman@gmail.com', 'aman', '$2y$10$ujE/yf8453vRx3fp4PH8F.Dt6YCoZ1ulxS5HvaSvLr2TRWJQRAanm', '2017-05-26 05:52:33', '2017-05-26 05:52:33'),
(90, 'hjb', 'hjghj', '$2y$10$q3KLnX8Q2aQRT90XK8Xwiul9Y6XqLPieCbxCOpUDbEfFXkTKjxSwW', '2017-05-26 05:54:30', '2017-05-26 05:54:30'),
(91, 'hjb', 'hjghj', '$2y$10$ySIFbAsse1d8pvYGqVB0z.Y3fphRxdBbq2Sn.NgJn4134xQUsQLOa', '2017-05-26 05:55:52', '2017-05-26 05:55:52'),
(92, 'hjb', 'hjghj', '$2y$10$PufDpLeIyxUYmdrzQl6ASudPftyzLEl8k4Spk/K0sJiHXuC02XRFu', '2017-05-26 05:56:29', '2017-05-26 05:56:29'),
(93, 'test@test.com', 'test', '$2y$10$54ShNC9k3Ane5/8bZhbVdOTfSUBPPPg1KsZKEAS5LgOVUlPbUuVQa', '2017-05-26 05:58:44', '2017-05-26 05:58:44'),
(94, 'vhjjvhvhjvhj', 'vhvjvhjh', '$2y$10$nXV1ktCFjKE/G7D7nMl1wefRiAbFcBnauMeBsW3b/MvArOxgAUyVy', '2017-05-26 06:11:05', '2017-05-26 06:11:05'),
(95, 'aashma@gmail.com', 'aashma', '$2y$10$90QxmCzOsHvAzQ83bHqNBeK5PZYGnw6iD.z8D4Xf8nhGYmpa37a8.', '2017-05-26 06:45:09', '2017-05-26 06:45:09'),
(96, 'sita@gmail.com', 'sita', '$2y$10$aCN1hAEjRlwDaJ0X/33j.edcvf5fTF.rgYgAZOBGLDugzQbnMsUkq', '2017-05-26 07:01:10', '2017-05-26 07:01:10'),
(97, 'ravi@gmail.com', 'ravi', '$2y$10$ner3nzbefb9Ktjjv8NPhX.bN.0SrhNJ7hATO0hzonQ8kdmWKo8Hsy', '2017-05-26 07:04:40', '2017-05-26 07:04:40'),
(98, 'ravi@gmail.com', 'ravi', '$2y$10$B/jvbub8dFilBFqH7TGRa.1VEpHafzYQmRbeebbHtDe.GQHMGM4v2', '2017-05-26 07:04:55', '2017-05-26 07:04:55'),
(99, 'ravi@gmail.com', 'ravi', '$2y$10$unBBkRS7hNbM7DbY2hyP3.JfmoGB5sbGNh7SMZBlw9EVnkb0RCi1.', '2017-05-26 07:05:13', '2017-05-26 07:05:13'),
(100, 'ravi@gmail.com', 'ravi', '$2y$10$J7Et7hdExfrkpDFDC3cLS.G05IP49/wB/DdVNWngRqzjanNLgyBLO', '2017-05-26 07:05:26', '2017-05-26 07:05:26'),
(101, 'ravi@gmail.com', 'ravi', '$2y$10$qlyluIuo/VFzF9Tbl5VI.O3wX1voGIcGbhzbv5hoKEygcl3GcCwYW', '2017-05-26 07:05:42', '2017-05-26 07:05:42'),
(102, 'selena@gmail.com', 'selena', '$2y$10$xoO1QKoOV7qZebLuPhXaPOyvGo/hIBErv1Ud8QOGqLsIrnOOe/TsO', '2017-05-26 07:56:14', '2017-05-26 07:56:14'),
(103, 'rita@gmail.com', 'rita', '$2y$10$qrGa8oeRpsEqb3CHwUwZYOeQ/El/xAg5wejGxsYBk3zvUOSPN0t/q', '2017-05-26 09:48:23', '2017-05-26 09:48:23'),
(104, 'asmi@gmail.com', 'asmi', '$2y$10$KmmII7tL5lRxETjQMOoanOInyNX3QFTZbRmVwel3cs9N4OjQISTY2', '2017-05-26 11:12:44', '2017-05-26 11:12:44'),
(105, 'aman1@gmail.com', 'aman', '$2y$10$8Z6/RkjiWCtBp8RCoVoYTe3sFTI3.mHl/53iAxLMci7464sCqFXgy', '2017-05-26 11:19:12', '2017-05-26 11:19:12'),
(106, 'shristi@gmail.com', 'shristi', '$2y$10$U21msr3Ogiu3xtgEmFJgVehBIxkvN.uLFqMq/oS5n2Kofaxmpjiom', '2017-05-26 11:21:24', '2017-05-26 11:21:24'),
(107, 'nibesh@gmail.com', 'nibesh', '$2y$10$evp8IbwPDCl1OHL/JRaPNO.cLqTuy0aTO5u3UUzNZ34zAxAb/M/OS', '2017-05-26 11:23:25', '2017-05-26 11:23:25'),
(108, 'nibesh@gmail.com', 'nibesh', '$2y$10$BOk.2L4//FNTdA48NIzrBuDYG.VT6dgxosyUqj9qxaV4ekAmKtqrK', '2017-05-26 11:23:43', '2017-05-26 11:23:43'),
(109, 'nibesh@gmail.com', 'nibesh', '$2y$10$tcFBRHUWdB10WURBgnAajeDWx5GRskl.CQYfA4N68Zvkxev8kAMEa', '2017-05-26 11:24:40', '2017-05-26 11:24:40'),
(110, 'nibesh@gmail.com', 'nibesh', '$2y$10$O3P.pa8KyTBgpBvraX583uYfyo2E.NqOOURyaD33FjcJpVo4itibm', '2017-05-26 11:24:52', '2017-05-26 11:24:52'),
(111, 'nibesh@gmail.com', 'nibesh', '$2y$10$lEGFVG9Lkmg/51n4Zgs0MujPCw1..izPoTC5Tj9FTQhDqTyyHFf7O', '2017-05-26 11:25:28', '2017-05-26 11:25:28'),
(112, 'nibesh@gmail.com', 'nibesh', '$2y$10$hfN3KlUt6nhE2Jevwvzgwu5g6O0Sml1giTuONYbA.DLYSQ1VkwZ0a', '2017-05-26 11:26:22', '2017-05-26 11:26:22'),
(113, 'madhav@gmail.com', 'madhav', '$2y$10$TmAeX5yMcTVqIUMVVp/m1uG0FHlNFE1svQ9RL9VjrU/Yt4.WY0XPu', '2017-05-26 18:57:12', '2017-05-26 18:57:12'),
(114, 'sanjay1@gmail.com', 'sanjay', '$2y$10$f.rS/t27Uwn31cHkbkCWgOuHbLqHZsuTBJP4mnHq7JT9FqrFgfdI6', '2017-05-28 03:32:11', '2017-05-28 03:32:11'),
(115, 'sanjay1@gmail.com', 'sanjay', '$2y$10$r633XmwyDnTBRQWWmJNGp./Eo/Lbr8o4hLQuGxETW2wxo/GTtwoDq', '2017-05-28 03:33:42', '2017-05-28 03:33:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrer`
--
ALTER TABLE `carrer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKcarrer123946` (`usersid`);

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKcriteria497933` (`user_id`);

--
-- Indexes for table `org`
--
ALTER TABLE `org`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKorg84162` (`serviceid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialstatus`
--
ALTER TABLE `socialstatus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKsocialstat658357` (`user_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKuserinfo401346` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrer`
--
ALTER TABLE `carrer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `socialstatus`
--
ALTER TABLE `socialstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrer`
--
ALTER TABLE `carrer`
  ADD CONSTRAINT `FKcarrer123946` FOREIGN KEY (`usersid`) REFERENCES `users` (`id`);

--
-- Constraints for table `criteria`
--
ALTER TABLE `criteria`
  ADD CONSTRAINT `FKcriteria497933` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `org`
--
ALTER TABLE `org`
  ADD CONSTRAINT `FKorg84162` FOREIGN KEY (`serviceid`) REFERENCES `service` (`id`);

--
-- Constraints for table `socialstatus`
--
ALTER TABLE `socialstatus`
  ADD CONSTRAINT `FKsocialstat658357` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `FKuserinfo401346` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
