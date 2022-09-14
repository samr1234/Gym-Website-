-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 05:21 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminsignup`
--

CREATE TABLE `adminsignup` (
  `id` int(200) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(122) NOT NULL,
  `password` varchar(212) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminsignup`
--

INSERT INTO `adminsignup` (`id`, `name`, `email`, `password`) VALUES
(5, 'lucifer morningstar', 'lucifer@gmail.com', '1234567890'),
(6, 'gurumann', 'samr@gmail.com', '1234567890'),
(7, 'samridh', 'samridhsood32@gmail.com', 'samr12345'),
(8, 'sergi constance', 'manassood1999@mail.com', '1234567890@'),
(9, 'gurumann', '1212@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(150) NOT NULL,
  `department` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `contact` int(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `department`, `name`, `contact`, `email`, `message`, `image`) VALUES
(21, 'TRAINER', 'sa', 213213, 'samr@gmail.com', '2112', 'ama-dablam-2064522_1920.jpg'),
(22, 'TRAINER', 'manas', 123456789, 'samridhsood32@gmail.com', 'i want to apply for trainer', 'admin1.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `contactus1`
--

CREATE TABLE `contactus1` (
  `id` int(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(1212) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus1`
--

INSERT INTO `contactus1` (`id`, `department`, `name`, `contact`, `email`, `message`) VALUES
(1, 'GENERAL', 'sa', '32112', 'samr@gmail.com', '12213'),
(2, 'GENERAL', 'manas', '9463617001', 'manassood1999@mail.com', 'hello'),
(6, 'GENERAL', 'manas', '31232321', 'samridhsood32@gmail.com', 'wewq');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(150) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `suggestion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `feedback`, `suggestion`) VALUES
(2, 'sergi constance', 'samridhsood32@gmail.com', 21232122, 'good', 'nice services'),
(3, 'Suzan', 'samr@gmail.com', 21122121, 'excellent', 'its amazing'),
(4, 'gurumann', 'manassood1999@mail.com', 0, 'excellent', 'fully satisfied'),
(5, 'Andrie Diue', 'samr1@gmail.com', 0, 'neutral', 'improve hygiene');

-- --------------------------------------------------------

--
-- Table structure for table `franchise`
--

CREATE TABLE `franchise` (
  `id` int(122) NOT NULL,
  `department` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `contact` int(12) NOT NULL,
  `email` varchar(1212) NOT NULL,
  `message` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `city` varchar(221) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `franchise`
--

INSERT INTO `franchise` (`id`, `department`, `name`, `contact`, `email`, `message`, `state`, `city`) VALUES
(4, 'FRANCHISE', 'Neha Sharma', 2121221, 'neha@gmail.com', '', '', 'ludhiana'),
(5, 'FRANCHISE', 'Neha Sharma', 7897897, 'neha@gmail.com', '', '', 'ludhiana');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(150) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`) VALUES
(2, 'galleryimg3.jpg'),
(3, 'galleryimg7.jpg'),
(4, 'galleryimg8.jpg'),
(5, 'galleryimg4.jpg'),
(6, 'galleryimg6.jpg'),
(7, 'galleryimg9.jpg'),
(9, 'galleryimg5.jpg'),
(11, 'galleryimg1.jfif'),
(14, 'galleryimg2.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(150) NOT NULL,
  `name` text NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(15) NOT NULL,
  `contact` int(200) NOT NULL,
  `plan` varchar(200) NOT NULL,
  `radiobtn` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `subject`, `email`, `contact`, `plan`, `radiobtn`) VALUES
(3, 'gurumann', 'BUSINESSMAN', 'samr@gmail.com', 123456789, 'BASIC', 'yes'),
(4, 'gurumann', 'BUSINESSMAN', 'neha@gmail.com', 323232, 'STANDARD', 'yes'),
(5, 'gurumann', 'STUDENT', 'samridhsood32@g', 212123321, 'BASIC', 'yes'),
(6, 'Andrie Diue', 'STUDENT', 'samridhsood32@g', 21212121, 'STANDARD', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(150) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`) VALUES
(10, 'lucifer', 'samridhsood32@gmail.com', '123456789'),
(13, 'samridh', 'samridhsood32@gmail.com', '1234567890'),
(15, 'samridh', 'samr@gmail.com', '0987654321'),
(16, 'samridh', 'samr@gmail.com', '0987654321'),
(17, 'Suzan', 'neha@gmail.com', 'SAMRIDHSOOD');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(150) NOT NULL,
  `name` varchar(200) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `workexp` varchar(200) NOT NULL,
  `timings` varchar(200) NOT NULL,
  `achievements` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `name`, `age`, `gender`, `workexp`, `timings`, `achievements`, `qualification`, `image`) VALUES
(10, 'Suzan', 27, 'female', '6 years', 'evening(6 to 10)', 'Fitness Model', 'Diploma in Sports', 'coach2.png'),
(12, 'sergi constance', 30, 'male', '10 year', 'morning(6 to 10)', 'Fitness Model', 'Diploma in Sports', 'homebg.jpg'),
(14, 'gurumann', 32, 'male', '12 year', 'evening(6 to 10)', 'fitness model', 'biomechanics', 'Guru-Mann.jpg'),
(15, 'Samridh Sood', 18, 'Samr', 'Ysshjs', '3737', 'Sskk', 'Shsh', 'IMG-20211218-WA0000.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(150) NOT NULL,
  `video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video`) VALUES
(2, '6 PACK ABS WORKOUT AT HOME _ QUICK RESULTS _ TOP 10 ABS _ Rowan Row.mp4'),
(3, '9 Exercises To Build A Big Back - Gym Body Motivation.mp4'),
(10, '6 PACK ABS WORKOUT AT HOME _ QUICK RESULTS _ TOP 10 ABS _ Rowan Row.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminsignup`
--
ALTER TABLE `adminsignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus1`
--
ALTER TABLE `contactus1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franchise`
--
ALTER TABLE `franchise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminsignup`
--
ALTER TABLE `adminsignup`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contactus1`
--
ALTER TABLE `contactus1`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `franchise`
--
ALTER TABLE `franchise`
  MODIFY `id` int(122) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
