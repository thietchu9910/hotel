-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 03:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `checkin_date` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `adults` varchar(255) DEFAULT NULL,
  `chidren` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `created_date` varchar(255) DEFAULT NULL,
  `reply_by` int(11) DEFAULT NULL,
  `reply_message` varchar(255) DEFAULT NULL,
  `checked_in` varchar(255) DEFAULT NULL,
  `check_in_date` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `feedback_room` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `checkin_date`, `first_name`, `last_name`, `email`, `phone_number`, `address`, `adults`, `chidren`, `total_price`, `created_date`, `reply_by`, `reply_message`, `checked_in`, `check_in_date`, `message`, `feedback_room`) VALUES
(4, '', '', 'thiet', 'quannh2871@gmail.com', '123123', '12 mn', '1', '2', '23', '2020-04-08', 23, 'dllf', 'ha long', '2020-03-30', 'ldldl', 'mmc'),
(5, '', '', 'thiet', 'Son@gmail.com', '1234567890', '12 mn', '2', '2', '34', '2020-04-17', 23, 'dllf', 'ha long', '2020-04-10', 'ldldl', 'mmc');

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
  `reply_by` int(11) DEFAULT NULL,
  `reply_content` varchar(255) DEFAULT NULL,
  `reply_for` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `custom_feedback`
--

CREATE TABLE `custom_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `home_galleries`
--

CREATE TABLE `home_galleries` (
  `id` int(11) NOT NULL,
  `img_text` varchar(255) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `img_link` varchar(255) DEFAULT NULL,
  `price` varchar(191) NOT NULL,
  `short_desc` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_galleries`
--

INSERT INTO `home_galleries` (`id`, `img_text`, `img_url`, `img_link`, `price`, `short_desc`) VALUES
(1, 'ggg', 'public/admin/img/5e9bffad6730b-5e9b9d7558e28-5e9923f265840-Nơi_này_có_anh_-_Single_Cover.jpg', 'fffff', '', ''),
(4, '', 'public/admin/img/5e9c2a2b4aff7-banner-bg.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `featrue_image` varchar(255) DEFAULT NULL,
  `short_desc` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `author_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `featrue_image`, `short_desc`, `content`, `created_at`, `author_id`) VALUES
(6, 'kddkkkdd', 'public/admin/img/5e9c7bb859d1c-5e9b3c5698a2e-5e9b3b7821ae2-5e9924069a0f6-Nơi_này_có_anh_-_Single_Cover.jpg', 'dfff', 'djdjd', 'gggg', ''),
(8, 'sanr pham', 'public/admin/img/5ea019fe7e374-download.jpg', 'hấp dẫn vui', 'ra mắt tháng q0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `id` int(11) NOT NULL,
  `member_name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `twiter_url` varchar(255) DEFAULT NULL,
  `linked_in_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_team`
--

INSERT INTO `our_team` (`id`, `member_name`, `position`, `image_url`, `facebook_url`, `twiter_url`, `linked_in_url`) VALUES
(2, 'krtkrkrjr', 'jekjekeke', 'jrkjrfk.jpg', 'jfdkd.com', NULL, NULL),
(31, 'ể', 'eee', 'ffff', 'ffff', 'fff', 'fff'),
(48, 'd', '', '', '', '', ''),
(49, '', '', '', '', '', ''),
(50, '', '', '', '', '', ''),
(51, '', '', '', '', '', ''),
(52, '', '', '', '', '', ''),
(53, '', '', '', '', '', ''),
(54, '', '', '', '', '', ''),
(56, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`) VALUES
(1, 'Người Dùng', '1'),
(2, 'Nhân Viên', '1'),
(3, 'Supper ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `featrue_image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `short_desc` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `adults` int(11) DEFAULT NULL,
  `children` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `name`, `featrue_image`, `status`, `short_desc`, `about`, `adults`, `children`) VALUES
(54, 'Sơn khhaau', 'public/admin/img/5e9c6a09f128f-5e9b9d7558e28-5e9923f265840-Nơi_này_có_anh_-_Single_Cover.jpg', '', 'Spwn', 'Sơn', 2, 3),
(55, 'thietcvph09326', 'public/admin/img/5e9c6826b7bb9-5e9c2a2b4aff7-banner-bg.jpg', '', 'fettyyy', 'ryyyyuuuu', 1, 2),
(56, 'thietcvph09326 ', 'public/admin/img/5e9c492043cbf-eng.png', '', 'fettyyy', 'ryyyyuuuu', 1, 2),
(58, 'minh ', 'public/admin/img/5e9c66019c9ff-5e9b9d7558e28-5e9923f265840-Nơi_này_có_anh_-_Single_Cover.jpg', 'active', 'fettyyy', 'thuộc tính', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_galleries`
--

CREATE TABLE `room_galleries` (
  `                id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `img_url` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_service`
--

CREATE TABLE `room_service` (
  `room_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `logo_url` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_position` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number_phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `number_phone`, `email`, `password`, `status`, `role_id`) VALUES
(5, 'Sơn', '123123123123', 'son@gmail.com', '$2y$10$fFhWJhzJcQMfiAoeL7337uNVb.lFSUxlhiWyauAoewVOGKAU7e4Yi', '1', 1),
(12, 'Quân', '1234567890', 'quan@gmail.com', '$2y$10$P.o0MF2LI88MmW4M5XfGxeV7uB/XtS.rbVGHW8F2v58PJxfkYCth.', '1', 2),
(13, 'thietcvph09326', '111111111111111', 'thietchu1004@gmail.com', '$2y$10$sqz/rvA.3OE669h9ByEZ4ePxAYww5kB0k57jYbP/EFKewg6fTMpga', '1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title_hotel` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `small-logo` varchar(255) NOT NULL,
  `hotline` varchar(255) DEFAULT NULL,
  `locate` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `background_img` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `slogan_author` varchar(255) DEFAULT NULL,
  `intro_youtube_url` varchar(255) DEFAULT NULL,
  `intro_content` varchar(255) DEFAULT NULL,
  `about_page_title` varchar(255) DEFAULT NULL,
  `about_page_content` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`id`, `name`, `title_hotel`, `logo`, `small-logo`, `hotline`, `locate`, `email`, `background_img`, `slogan`, `slogan_author`, `intro_youtube_url`, `intro_content`, `about_page_title`, `about_page_content`, `youtube_url`) VALUES
(2, 'HOTEL KINGCLUB', 'PERFECT HOTEL', 'logo.png', 'banner-logo.png', '807 302 2186', 'Green lake, Hotel plaza\r\nnew york, USA', 'mail@domain.com', 'banner-bg.jpg', 'content here making look like readable English. Many desktop publishing packages and apage editors now use Lorem Ipsum as their default point of using is that it has a more or less normal distribution of letters, as opposed to using content here', 'sign.jpg', 'https://www.youtube.com/watch?v=hEq2qDKYe3s', NULL, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_feedback`
--
ALTER TABLE `custom_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_galleries`
--
ALTER TABLE `home_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_galleries`
--
ALTER TABLE `room_galleries`
  ADD PRIMARY KEY (`                id`);

--
-- Indexes for table `room_service`
--
ALTER TABLE `room_service`
  ADD PRIMARY KEY (`room_id`,`service_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_setting`
--
ALTER TABLE `web_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custom_feedback`
--
ALTER TABLE `custom_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_galleries`
--
ALTER TABLE `home_galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `room_galleries`
--
ALTER TABLE `room_galleries`
  MODIFY `                id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_service`
--
ALTER TABLE `room_service`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
