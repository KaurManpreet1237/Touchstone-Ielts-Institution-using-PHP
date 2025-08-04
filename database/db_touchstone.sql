-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 07:20 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_touchstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(1) NOT NULL,
  `description` text NOT NULL,
  `doe` date NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `description`, `doe`, `image`) VALUES
(1, 'Awards ceremony for students', '2021-08-18', 'bcd4.jpg'),
(3, 'No.1 bussiness parter for IELTS  in Indea', '2023-10-25', 'idp8.jpg'),
(4, 'Workshop for career related award ceremont', '2024-02-21', 'bcd1.jpg'),
(5, 'Nominate for best instituition in phagwara city', '2023-12-07', 'bcd11.jpg'),
(6, 'IDP presented the No.1 IELTS Institute of India Award 2016', '2016-06-11', 'idp1.jpg'),
(7, 'Award ceremony for best Institute in Phagwara', '2024-01-02', 'bcd5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `call_back`
--

CREATE TABLE `call_back` (
  `id` int(1) NOT NULL,
  `name` text NOT NULL,
  `phno` text NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `call_back`
--

INSERT INTO `call_back` (`id`, `name`, `phno`, `message`, `status`) VALUES
(1, 'harman', '9087654321', 'regarding admission', 'y'),
(2, 'simran', '3456789012', 'request', 'y'),
(3, 'manpreet', '1234567890', 'query about ielts course', 'y'),
(4, 'simran', '3456789012', 'hello', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(1) NOT NULL,
  `name` text NOT NULL,
  `fee` text NOT NULL,
  `duration` text NOT NULL,
  `time_id` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `fee`, `duration`, `time_id`) VALUES
(1, 'IELTS', '7000', '1 month', '2'),
(2, 'PTE', '5000', '1 month', '2'),
(8, 'Toefl', '5000', '1 month', '2'),
(4, 'Spoken english', '5500', '2 month', '1'),
(6, 'Interview preparation', '8500', '1 month', '2'),
(9, 'Mock-Test', '4000', '2 month', '1');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(1) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `doe` date NOT NULL,
  `images` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `doe`, `images`) VALUES
(15, 'consultation', 'It enables students undergoing certain difficulties in their lives, to ask questions and clarify them through guiding and counselling. ', '2024-01-29', 'inter.jpg'),
(7, 'Award ', 'Award ceremony for best teachers', '2024-03-02', 'idp12.jpg'),
(13, 'Awards', 'motivate students for their career', '2024-03-03', 'idp23.jpg'),
(14, 'Award ceremony', 'Award ceremony for students', '2024-03-02', 'idp20.jpg'),
(16, 'meeting', 'meeting between students and teacher', '2024-03-13', 'bcd7.jpg'),
(17, 'celebration ', '6th year anniversary', '2024-02-28', 'bcd4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `exam_course`
--

CREATE TABLE `exam_course` (
  `id` int(1) NOT NULL,
  `ename` text NOT NULL,
  `fee` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_course`
--

INSERT INTO `exam_course` (`id`, `ename`, `fee`) VALUES
(1, 'IELTS', '17000'),
(2, 'PTE', '15000'),
(3, 'TOEFL', '17000'),
(0, 'groomingclasses', '4000');

-- --------------------------------------------------------

--
-- Table structure for table `exam_date`
--

CREATE TABLE `exam_date` (
  `id` int(1) NOT NULL,
  `edate1` date NOT NULL,
  `edate2` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_date`
--

INSERT INTO `exam_date` (`id`, `edate1`, `edate2`) VALUES
(1, '2024-04-08', '2024-04-25'),
(2, '2024-05-18', '2024-05-30'),
(7, '2024-04-16', '2024-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `exam_info`
--

CREATE TABLE `exam_info` (
  `id` int(1) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `father_name` text NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `passport` text NOT NULL,
  `aadhar_no` text NOT NULL,
  `pan_no` text NOT NULL,
  `nationality` text NOT NULL,
  `phno` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `district` text NOT NULL,
  `course_id` text NOT NULL,
  `fee` text NOT NULL,
  `doe` text NOT NULL,
  `timing` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_info`
--

INSERT INTO `exam_info` (`id`, `image`, `name`, `father_name`, `dob`, `gender`, `passport`, `aadhar_no`, `pan_no`, `nationality`, `phno`, `email`, `address`, `state`, `city`, `district`, `course_id`, `fee`, `doe`, `timing`) VALUES
(7, 'idp13.jpg', 'Jasmeet kaur', 'Manish kumar', '1996-02-19', 'MALE', '353346265245', '666666666666', '3333333333', 'indian', '6666666666', 'pa12@gmail.com', 'gandhi nagar', 'punjab', 'phagwara', 'kapurthala', 'IELTS', '17800', '2024-04-08', '10am to 1pm'),
(8, 'about.jpg', 'bironika', 'Manish kumar', '2024-04-11', 'FEMALE', '4523423454k', '', '098n654322', 'indian', '9877678555', 'is34@gmail.com', 'gandhi nagar', 'punjab', 'phagwara', 'kapurthala', 'PTE', '15000', '2024-04-08', '10am to 1pm'),
(9, 'about.jpg', 'bironika', 'Manish kumar', '1995-06-06', 'FEMALE', 'D7564542', '', 'DFSFF2432S', 'indian', '9870654321', 'si@gmail.com', 'GT road ,phagwara', 'punjab', 'phagwara', 'kapurthala', 'PTE', '15000', '2024-04-25', '10am to 1pm');

-- --------------------------------------------------------

--
-- Table structure for table `exam_timing`
--

CREATE TABLE `exam_timing` (
  `id` int(1) NOT NULL,
  `etiming1` text NOT NULL,
  `etiming2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_timing`
--

INSERT INTO `exam_timing` (`id`, `etiming1`, `etiming2`) VALUES
(1, '10am to 1pm', '2pm to 5pm'),
(2, '9pm to 12pm', '3pm to 6pm'),
(6, '8am to 11am', '4pm to 7pm'),
(8, '9am to 10am', '11am to 12pm');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(1) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `doj` date NOT NULL,
  `experience` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `description`, `image`, `doj`, `experience`) VALUES
(1, 'Dr Bimlesh Kumar', 'Drama Studies, Cultural Studies, Postmodernism, Post-colonialism', 'pro2.jpg', '2016-08-01', ''),
(2, 'Dr Kalyani Hazri', 'Sufi Poetry, Bhakti Literature, Modern Poetry, Indian Classical Literature, Indian writing in English', 'pro1.jpg', '2018-06-01', ''),
(3, 'Dr Umesh Patra', 'Modern British Literature; Theatre and Performance; Queer Theory', 'pro4.png', '2024-01-04', ''),
(4, 'Mr Balande Chandoba Narsing', 'Comparative Literature; Literary Theory and Criticism; Cinema and Literature; Dalit Literature; Gender Studies', 'pro5.jpg', '2017-11-23', ''),
(5, 'simran', 'Drama Studies, Cultural Studies, Postmodernism, Post-colonialism', 'sp2.jpg', '2017-11-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `my_login`
--

CREATE TABLE `my_login` (
  `id` int(1) NOT NULL,
  `phno` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_login`
--

INSERT INTO `my_login` (`id`, `phno`, `password`) VALUES
(1, '1234567890', 'abc12'),
(2, '0987654321', 'xyz12');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(1) NOT NULL,
  `name` text NOT NULL,
  `phno` text NOT NULL,
  `email` text NOT NULL,
  `course` text NOT NULL,
  `timing` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `phno`, `email`, `course`, `timing`) VALUES
(14, 'damanveer111', '43561928ss', 'damangmail.com', 'Toefl', '2pm-6pm'),
(1, 'harman', '1234567890', 'is34@gmail.com', 'PTE', '2pm-6pm'),
(2, 'simran', '3456789012', 'ram@gmail.com', 'IELTS', '2pm-6pm'),
(3, 'neha', '9870654321', 'si@gmail.com', 'Spoken english', '9am-2pm'),
(4, 'bironika', '3456789012', 'me@gmail.com', 'IELTS', '2pm-6pm'),
(5, 'himanshi', '3456789012', 'me@gmail.com', 'PTE', '2pm-6pm'),
(6, 'anjali', '9870654321', 'neha@gmail.com', 'IELTS', '2pm-6pm'),
(7, 'love', '3344552467', 'neha@gmail.com', 'Interview preparation', '3pm to 7pm'),
(15, 'raman', '4312323456', 'fwdfwe.com', 'PTE', '9am-2pm'),
(16, 'manpreet kaur', '342gdfgdfg', 'pa12gmail.com', 'Spoken english', '2pm-6pm'),
(17, 'raman', '1234567890', 'pa12@gmail.com', 'IELTS', '9am-2pm'),
(20, 'manpreet kaur', '4567890381', 'pa12@gmail.com', 'Interview preparation', '3pm to 7pm');

-- --------------------------------------------------------

--
-- Table structure for table `review_data`
--

CREATE TABLE `review_data` (
  `id` int(1) NOT NULL,
  `name` text NOT NULL,
  `date` date NOT NULL,
  `review` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_data`
--

INSERT INTO `review_data` (`id`, `name`, `date`, `review`) VALUES
(5, 'bironika', '2023-02-15', 'Thank you touchstone for your excellent service. Thank you to team who are so helpful and loyal about their service'),
(6, 'manpreet kaur', '2024-03-06', 'My experience in touchstone is very good and the study and facilities are also very good		'),
(7, 'ishita', '2024-03-11', 'Wonderful experience with touchstone, excellent teachers at touchstone with years of experience.		'),
(8, 'Raman', '2024-02-08', 'Thank you touchstone for your excellent service. Thank you to team who are so helpful and loyal about their service		'),
(9, 'Ankit Yadav', '2024-02-26', '	Classes are well organised and I am able to understand each and everything	'),
(10, 'Priya Sansarwal', '2024-03-30', '	Ram Ram to all. My name is deepak. I am from haryana. I applied my file from touchstone chandigarh.	');

-- --------------------------------------------------------

--
-- Table structure for table `timing`
--

CREATE TABLE `timing` (
  `id` int(1) NOT NULL,
  `time` char(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timing`
--

INSERT INTO `timing` (`id`, `time`) VALUES
(1, '9am-2pm'),
(2, '2pm-6pm'),
(4, '3pm to 7pm'),
(5, '8am to 12pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `call_back`
--
ALTER TABLE `call_back`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_course`
--
ALTER TABLE `exam_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_date`
--
ALTER TABLE `exam_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_info`
--
ALTER TABLE `exam_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_timing`
--
ALTER TABLE `exam_timing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_login`
--
ALTER TABLE `my_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_data`
--
ALTER TABLE `review_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timing`
--
ALTER TABLE `timing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `call_back`
--
ALTER TABLE `call_back`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `exam_date`
--
ALTER TABLE `exam_date`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `exam_info`
--
ALTER TABLE `exam_info`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `exam_timing`
--
ALTER TABLE `exam_timing`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `my_login`
--
ALTER TABLE `my_login`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `review_data`
--
ALTER TABLE `review_data`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `timing`
--
ALTER TABLE `timing`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
