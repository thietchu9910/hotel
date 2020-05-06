-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 01:32 PM
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
-- Database: `duan1_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `adults` varchar(255) DEFAULT NULL,
  `chidren` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `check_in` varchar(255) DEFAULT NULL,
  `check_out` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `status`, `room_id`, `adults`, `chidren`, `total_price`, `check_in`, `check_out`) VALUES
(1, 'mnnn', 0, 0, '1', '2', '250', '2020-04-30', '2020'),
(4, 'phòng vila', 0, 0, '2', '2', '3', '2020-04-30', '2020-05-01');

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
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `reply_by`, `reply_content`, `reply_for`, `status`) VALUES
(17, 'thietcvph09326', 'thienth@gmail.com', '0963639870', '3555544', 13, NULL, '17', 1),
(18, 'thietcvph09326', 'thienth@gmail.com', '0963639870', '3555544', NULL, NULL, NULL, NULL),
(19, 'mnknnk', 'thietchu1004@gmail.com', '0963639870', 'ffggg', NULL, NULL, NULL, NULL),
(20, 'thietcvph09326', 'thietcvph09326@fpt.edu.vn', '0963639870', 'minh vu', 13, NULL, '20', 1),
(21, '', '', '', '', NULL, NULL, NULL, NULL),
(22, '', '', '', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `custom_feedback`
--

CREATE TABLE `custom_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `reply_content` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `reply_by` varchar(191) NOT NULL,
  `room_id` int(11) NOT NULL,
  `goodidea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custom_feedback`
--

INSERT INTO `custom_feedback` (`id`, `name`, `email`, `status`, `reply_content`, `comment`, `reply_by`, `room_id`, `goodidea`) VALUES
(22, 'nụ', 'nu@gmail.com', '1', 'ok', 'bẩn như chó', 'thietcvph09326', 55, 0),
(23, 'Sơn', 'Son@gmail.com', '1', 'Cảm ơn bạn đã đánh giá dịch vụ', 'phòng rất đẹp và sạch sẽ, hẹn gặp lần sau', 'thietcvph09326', 0, 1);

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
(6, 'kddkkkdd', 'public/admin/img/single-room-pic5-big.jpg', 'dfff', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demo of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bou denounce with righteous dream', 'March 20, 2016', ''),
(8, 'sanr pham', 'public/admin/img/single-room-pic1-big.jpg', 'hấp dẫn vui', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demo of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bou denounce with righteous dream', 'March 20, 2016', '');

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
(2, 'deo PERU', 'Relationship Manager', 'public/admin/img/our-team-1.jpg', 'public/admin/img/facebook.png', 'public/admin/img/twitter.png', 'public/admin/img/linkin.png'),
(57, 'Reo LA', 'Relationship Manager', 'public/admin/img/our-team-1.jpg', 'public/admin/img/facebook.png', 'public/admin/img/twitter.png', 'public/admin/img/linkin.png'),
(58, 'Martin ', 'Chef', 'public/admin/img/our-team-2.jpg', 'public/admin/img/facebook.png', 'public/admin/img/twitter.png', 'public/admin/img/linkin.png');

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
  `children` int(11) DEFAULT NULL,
  `price` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `name`, `featrue_image`, `status`, `short_desc`, `about`, `adults`, `children`, `price`) VALUES
(54, 'large cafe', 'public/admin/img/palace-img1.jpg', '', 'point of using that has more less normal distribution is among', 'Decorated room, proper air condioned', 2, 3, '123'),
(55, 'premium living', 'public/admin/img/palace-img2.jpg', '', 'point of using that has more less normal distribution is among', 'ryyyyuuuu', 1, 2, '250'),
(56, 'rooftop cusine', 'public/admin/img/palace-img3.jpg', '', 'point of using that has more less normal distribution is among', 'ryyyyuuuu', 1, 2, '340'),
(63, 'SUNROOM', 'public/admin/img/palace-img3.jpg', NULL, 'point of using that has more less normal distribution is among', NULL, NULL, NULL, '300');

-- --------------------------------------------------------

--
-- Table structure for table `room_galleries`
--

CREATE TABLE `room_galleries` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `img_url` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_galleries`
--

INSERT INTO `room_galleries` (`id`, `room_id`, `img_url`) VALUES
(1, 54, 'public/admin/img/single-room-pic3-big.jpg'),
(2, 54, 'public/admin/img/single-room-pic4-big.jpg'),
(3, 54, 'public/admin/img/single-room-pic6-big.jpg'),
(4, 54, 'public/admin/img/single-room-pic5-big.jpg'),
(5, 54, 'public/admin/img/single-room-pic2-big.jpg'),
(7, 54, 'public/admin/img/single-room-pic1-big.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `price` varchar(191) NOT NULL,
  `short_desc` varchar(191) NOT NULL,
  `name` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='services';

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `img_url`, `price`, `short_desc`, `name`) VALUES
(14, 'public/admin/img/room-package-img-4.jpg', '200', '<br /><b>Notice</b>:  Undefined index: short_desc in <b>C:xampphtdocsduan1admin\roomedit-form.php</b> on line <b>65</b><br />', 'MASTER ROOM'),
(15, 'public/admin/img/room-package-img-2.jpg', '100', 'mncmccmc', 'DINNER PACKEGRE'),
(16, 'public/admin/img/room-package-img-3.jpg', '200', '', 'SUN DELUXE');

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
(13, 'thietcvph09326', '0963639870', 'thietchu1004@gmail.com', '$2y$10$sqz/rvA.3OE669h9ByEZ4ePxAYww5kB0k57jYbP/EFKewg6fTMpga', '1', 3),
(14, 'thietcvph09326', '1234567890', 'thietchu1004@gmail.com', '$2y$10$u3I1WM4meciv871UrxX51eMQV8Jq7g70uOkuqXSMk/89dhSYuYF8S', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title_hotel` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `small_logo` varchar(255) NOT NULL,
  `hotline` varchar(255) DEFAULT NULL,
  `locate` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `background_img` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `slogan_author` varchar(255) DEFAULT NULL,
  `intro_content` varchar(255) DEFAULT NULL,
  `about_page_title` varchar(255) DEFAULT NULL,
  `about_page_content` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`id`, `name`, `title_hotel`, `logo`, `small_logo`, `hotline`, `locate`, `email`, `background_img`, `slogan`, `slogan_author`, `intro_content`, `about_page_title`, `about_page_content`, `youtube_url`) VALUES
(2, 'HOTEL KINGCLUB', 'PERFECT HOTEL', 'logo.png', 'banner-logo.png', '807 302 2186', 'Green lake, Hotel plaza\r\nnew york, USA', 'mail@domain.com', 'banner-bg.jpg', 'content here making look like readable English. Many desktop publishing packages and apage editors now use Lorem Ipsum as their default point of using is that it has a more or less normal distribution of letters, as opposed to using content here', 'public/admin/img/sign.jpg', NULL, NULL, NULL, 'https://vimeo.com/45830194');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `custom_feedback`
--
ALTER TABLE `custom_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `room_galleries`
--
ALTER TABLE `room_galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
