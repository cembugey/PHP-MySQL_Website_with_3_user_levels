-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 06:28 PM
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
-- Database: `fithub`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `ID` int(6) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(2083) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`ID`, `title`, `description`, `image`) VALUES
(1, 'Pilates', 'Smooth movements tone and strengthen your core and back, improve your posture and flexibility.', 'icon_pilates.png'),
(2, 'Zumba', 'Get the results of interval training with the fun of the dance floor; latin and modern dance fused into a funky workout.', 'zumba.jpg'),
(3, 'Aerobics', 'A fun and energetic class that safe for a range of ages and fitness levels.', 'aerobics.png'),
(4, 'Weights', 'Increase strength, burn body fat and learn the basics of weightlifting in this full-body workout.', 'icon_barbells.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `ID` int(6) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_no` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`ID`, `name`, `email`, `phone_no`, `message`) VALUES
(3, 'sew', 'sewa@gmail.com', '09933343', 'When will you reopen?');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `ID` int(6) UNSIGNED NOT NULL,
  `type_key` varchar(100) DEFAULT NULL,
  `level_1` varchar(100) DEFAULT NULL,
  `level_2` varchar(100) DEFAULT NULL,
  `level_3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`ID`, `type_key`, `level_1`, `level_2`, `level_3`) VALUES
(1, 'title', 'FITHUB ONE', 'FITHUB PRO', 'FITHUB VIP'),
(2, 'benefit 1', 'FREE 6-Day Personal Training Plan', 'No joining fee', '24/7 Access'),
(5, 'benefit 2', 'FREE ‘results-tracking’ every 10 visits', '20% Discount on Personal trainers', 'Free Personal Trainer'),
(6, 'benefit 3', 'Personalised Gym Assessment On Registration', '50% Discount on Routines.', 'Updated routines monthly for free.'),
(7, 'price', '25 €', '55 €', '100 €');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `ID` int(11) NOT NULL,
  `about_us` text DEFAULT NULL,
  `feature_box_1_title` varchar(100) DEFAULT NULL,
  `feature_box_1_image` varchar(2083) DEFAULT NULL,
  `feature_box_1_text` text DEFAULT NULL,
  `feature_box_2_title` varchar(100) DEFAULT NULL,
  `feature_box_2_image` varchar(2083) DEFAULT NULL,
  `feature_box_2_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`ID`, `about_us`, `feature_box_1_title`, `feature_box_1_image`, `feature_box_1_text`, `feature_box_2_title`, `feature_box_2_image`, `feature_box_2_text`) VALUES
(1, '   FitHub was formed to offer a higher level of service to those looking for something more than just a basic gym. It was founded on values of constant improvement and built on commitments to its community, team and crafting long-lasting relationships with our members.\r\n\r\nOur team of experienced and enthusiastic staff will help guide you on your journey to a fitter, healthier and happier you. Whether you are an experienced gym user or a total beginner we can help you achieve the results you have been looking for in our modern, comfortable health and fitness club. ', 'TRAIN SMARTER', 'getleaner.jpg', 'See your heart rate, calorie burn and reps. Take on your personal best and track progress.', 'GET RESULTS FASTER', 'getstronger.jpg', 'With 2, 4, 6 and 10 week training plans tailored to your goal and level. Easy to start, hard to stop!');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `ID` int(6) UNSIGNED NOT NULL,
  `class_name` varchar(100) DEFAULT NULL,
  `testimonial_date` timestamp NULL DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `approval` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`ID`, `class_name`, `testimonial_date`, `first_name`, `comment`, `approval`) VALUES
(3, 'Aerobics', '2020-05-29 16:26:30', 'Ivan', 'The gym is well equipped, they have a great staff, very professional, all the facilities to make our life easier and the location is fabulous.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(6) UNSIGNED NOT NULL,
  `level` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `level`, `username`, `email`, `password`, `user_type`) VALUES
(27, NULL, 'visiadmin', 'visiadmin@visiadmin.visiadmin', 'visiadmin', 'admin'),
(29, 'Level 1', 'tom', 'tom@gmail.com', 'tom', 'member'),
(30, 'Level 1', 'tom', 'tom@gmail.com', 'tom', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user_class`
--

CREATE TABLE `user_class` (
  `ID` int(6) UNSIGNED NOT NULL,
  `user_id` int(6) DEFAULT NULL,
  `pilates` varchar(30) DEFAULT NULL,
  `zumba` varchar(30) DEFAULT NULL,
  `aerobics` varchar(30) DEFAULT NULL,
  `weights` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_class`
--

INSERT INTO `user_class` (`ID`, `user_id`, `pilates`, `zumba`, `aerobics`, `weights`) VALUES
(27, 29, NULL, 'option2', 'option3', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_class`
--
ALTER TABLE `user_class`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_class`
--
ALTER TABLE `user_class`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
