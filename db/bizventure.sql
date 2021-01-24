-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 02:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `menu_1` varchar(50) NOT NULL,
  `menu_2` varchar(50) NOT NULL,
  `menu_3` varchar(50) NOT NULL,
  `menu_4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `quote`, `content`, `logo`, `menu_1`, `menu_2`, `menu_3`, `menu_4`) VALUES
(1, 'We catalyst business.', 'BizVentur is a company that ventures into transforming indigenous ideas into a rapidly growing companies providing products and services to the market. ', '/pictures/bizventur.png', 'ABOUT', ' COMPANIES', 'SERVICES', 'CONTACT US');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1608541238),
('m130524_201442_init', 1608541245),
('m190124_110200_add_verification_token_column_to_user_table', 1608541245),
('m201221_083220_why_choose', 1608541584),
('m201222_023501_who_we_are', 1608604659),
('m201222_083600_header', 1608626268);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'fiqram94', 'Hq1g4zdHntXQVsYgMDq9otLkdK-951eu', '$2y$13$sdZLR8DU8MGlYjMMQ5rVleZdnOBf2FI20GeIx.FH9wrLDAKtj2BfO', NULL, 'iqramrafien21@gmail.com', 10, 1604212430, 1604212430, '6QfFZiOtOwD7UdJnrzVYdat6-ml9k6vY_1604212430');

-- --------------------------------------------------------

--
-- Table structure for table `who_we_are`
--

CREATE TABLE `who_we_are` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `bttn_content` text DEFAULT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `who_we_are`
--

INSERT INTO `who_we_are` (`id`, `title`, `content`, `bttn_content`, `image`) VALUES
(2, 'Ventures', 'We build companies from scratch. We also help start-up to grow and consolidate their business. Find out more about our portfolio of companies.', 'OUR COMPANIES', '/upload/ventures.png'),
(3, 'Incubator', 'We helps new and startup companies to develop by providing services such as management training or office space through virtual and physical business incubator. Find out about our incubator services.', 'PROJECT', '/upload/incubator.svg'),
(4, 'Ecosystem', 'We create an entrepreneurial ecosystem focused on growing and/or helping to grow start-ups. Find out more about our ecosystem.', 'ENTREPRENEUSHIP', '/upload/ecosystem.svg');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose`
--

CREATE TABLE `why_choose` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `bttn_content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `why_choose`
--

INSERT INTO `why_choose` (`id`, `title`, `content`, `bttn_content`) VALUES
(1, 'test', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `who_we_are`
--
ALTER TABLE `who_we_are`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_choose`
--
ALTER TABLE `why_choose`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `who_we_are`
--
ALTER TABLE `who_we_are`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `why_choose`
--
ALTER TABLE `why_choose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
