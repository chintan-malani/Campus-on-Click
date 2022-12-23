-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 09:53 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--
CREATE DATABASE IF NOT EXISTS `campus` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `campus`;

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(30) NOT NULL,
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `city_id`, `state_id`, `doi`, `dou`, `isactive`) VALUES
(1, 'varachha', 0, 0, '2020-03-20 05:19:38', '2016-04-20 12:56:22', 2),
(2, 'Raiya Circle', 4, 6, '2022-04-20 16:25:18', '2022-04-20 16:25:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`, `doi`, `dou`, `isactive`) VALUES
(1, 'mumbai', 0, '2019-03-20 05:35:30', '2016-04-20 12:12:17', 2),
(2, 'ahd', 0, '2020-03-20 04:51:47', '2020-03-20 04:51:47', 2),
(3, 'amreli', 0, '2020-03-20 04:56:52', '2020-03-20 04:56:52', 2),
(4, 'rajkot', 8, '2021-03-20 09:48:41', '2021-03-20 09:48:41', 1),
(6, 'Demo', 9, '2021-03-20 11:31:05', '2021-03-20 11:31:05', 1),
(7, 'Ahmedabad', 8, '2022-04-20 16:17:49', '2022-04-20 16:17:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `complain_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(500) NOT NULL,
  `isactive` int(1) NOT NULL,
  `doi` date NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`complain_id`, `student_id`, `subject`, `message`, `isactive`, `doi`, `faculty_id`) VALUES
(1, 3, 'subject ', 'not do complete\r\n', 1, '2020-04-26', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `message` varchar(200) NOT NULL,
  `doi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `contact_no`, `message`, `doi`) VALUES
(1, 'karna sdlfkj', 'sjfkjljlsj@jfkjg.com', 1111701614, 'hlfkjsljfljs', '2020-04-28'),
(2, 'chintan', 'chintan@gmail.com', 123456784, 'hiii', '2020-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `department_id` int(11) NOT NULL,
  `isactive` int(1) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `department_id`, `isactive`, `doi`, `dou`) VALUES
(2, 'BCA', 4, 1, '2022-04-20 15:22:53', '2022-04-20 15:22:53'),
(4, 'bsc.it', 1, 1, '2029-04-20 08:27:48', '2029-04-20 08:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `name`, `doi`, `dou`, `isactive`) VALUES
(1, 'DCS', '2022-03-20 14:25:20', '2022-03-20 14:25:20', 1),
(3, 'DCS', '2025-03-20 15:06:27', '2025-03-20 15:06:27', 1),
(4, 'IT', '2025-03-20 16:40:11', '2025-03-20 16:40:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `place_of_event` varchar(20) NOT NULL,
  `isactive` int(1) NOT NULL,
  `dou` datetime NOT NULL,
  `doi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `description`, `place_of_event`, `isactive`, `dou`, `doi`) VALUES
(1, 'asdfg', 'qwertyuioasdfghjkxcvbnm', 'surat', 1, '2023-03-20 07:49:29', '2023-03-20 07:49:29'),
(2, 'asdfg', 'qwertyuioasdfghjkxcvbnm', 'baroda', 1, '2024-03-20 14:31:33', '2024-03-20 14:31:33'),
(3, 'asdfg', 'qwertyuioasdfghjkxcvbnm', 'surat', 1, '2024-03-20 17:01:38', '2024-03-20 17:01:38'),
(4, 'asdfg', 'sdd', 'baroda', 1, '2024-03-20 18:25:58', '2024-03-20 18:25:58'),
(6, 'garba', 'abc', 'ahd', 1, '2029-04-20 08:31:17', '2029-04-20 08:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `department_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `sec_que_id` varchar(25) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `isactive` int(1) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `firstname`, `lastname`, `email`, `contact`, `department_id`, `course_id`, `profile_pic`, `sec_que_id`, `answer`, `password`, `isactive`, `doi`, `dou`) VALUES
(1, 'Karan', ' panchasara', 'karan@gmail.com', '2147483647123', 5, 2, 'images/women3.jpg', '1', 'tomy', '123456', 1, '2020-04-23 00:00:00', '2020-04-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `message` varchar(300) NOT NULL,
  `isactive` int(1) NOT NULL,
  `doi` date NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `student_id`, `message`, `isactive`, `doi`, `faculty_id`) VALUES
(2, 3, 'nice to meet you sir', 1, '2020-04-26', 2);

-- --------------------------------------------------------

--
-- Table structure for table `material_share_details`
--

CREATE TABLE `material_share_details` (
  `material_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `material_pdf` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material_share_details`
--

INSERT INTO `material_share_details` (`material_id`, `department_id`, `course_id`, `semester_id`, `subject_id`, `faculty_id`, `title`, `material_pdf`, `description`, `doi`, `dou`, `isactive`) VALUES
(9, 5, 2, 10, 3, 2, 'lsflshj', 'material/3.png', 'sjflksjfljff', '2020-04-24', '2020-04-24', 1),
(10, 5, 2, 10, 3, 2, 'lsflshj', 'material/3.png', 'sjflksjfljff', '2020-04-24', '2020-04-24', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `isactive` int(1) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `description`, `isactive`, `doi`, `dou`) VALUES
(1, 'introduce1', 'qwertyuioasdfghjkxcvbnm', 1, '2025-04-20 21:58:52', '2020-03-20 09:18:05'),
(2, 'introduce244111', 'qwertyuioasdfghjkxcvbnm11111', 2, '2025-04-20 21:58:59', '2025-04-20 22:32:18'),
(3, 'introduce1111', 'qwertyuioasdfghjkxcvbnm', 2, '0000-00-00 00:00:00', '2025-03-20 14:51:49'),
(4, 'introduce1111', 'qwertyuioasdfghjkxcvbnm', 2, '0000-00-00 00:00:00', '2025-04-20 21:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `isactive` int(1) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `title`, `description`, `isactive`, `doi`, `dou`) VALUES
(1, 'abc', 'qwertyuioasdfghjkxcvbnm', 1, '2022-03-20 13:16:28', '2022-03-20 13:16:28'),
(2, 'abc', 'qwertyuioasdfghjkxcvbnm', 1, '2022-03-20 13:16:58', '2022-03-20 13:16:58'),
(3, 'abc', 'ytrgf', 2, '2025-03-20 14:52:02', '2025-03-20 14:52:02'),
(4, 'hfllsf', 'nice to meet youfsf', 1, '2025-04-20 22:23:21', '2025-04-20 22:31:37'),
(5, 'garba', 'qqqqqqqqwwwww', 1, '2029-04-20 09:36:30', '2029-04-20 09:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL,
  `isactive` int(1) NOT NULL,
  `marsheet_pic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `department_id`, `course_id`, `student_id`, `semester_id`, `doi`, `dou`, `isactive`, `marsheet_pic`) VALUES
(1, 5, 2, 3, 10, '2020-04-27', '2020-04-27', 1, 'result/women1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `security_question`
--

CREATE TABLE `security_question` (
  `sec_que_id` int(11) NOT NULL,
  `question` varchar(50) NOT NULL,
  `isactive` int(1) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security_question`
--

INSERT INTO `security_question` (`sec_que_id`, `question`, `isactive`, `doi`, `dou`) VALUES
(1, 'what is your pet name?', 1, '2020-03-20 08:14:14', '2020-03-20 08:14:14'),
(3, 'what is your pet name?', 1, '2028-04-20 20:47:32', '2028-04-20 20:47:32'),
(4, 'what is your pet name?', 1, '2028-04-20 20:47:47', '2028-04-20 20:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_id` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `course_id` int(11) NOT NULL,
  `isactive` int(1) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `semester`, `course_id`, `isactive`, `doi`, `dou`) VALUES
(8, '1', 2, 1, '2022-04-20 20:49:20', '2022-04-20 20:49:20'),
(9, '2', 2, 1, '2022-04-20 20:49:37', '2022-04-20 20:49:37'),
(10, '3', 2, 1, '2024-04-20 14:55:31', '2024-04-20 14:55:31'),
(11, '4', 4, 1, '2029-04-20 08:28:28', '2029-04-20 08:28:28');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(30) NOT NULL,
  `dou` datetime NOT NULL,
  `doi` datetime NOT NULL,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `dou`, `doi`, `isactive`) VALUES
(6, 'rajashtan', '2019-03-20 04:42:14', '2019-03-20 04:42:14', 1),
(8, 'gujarat', '2021-03-20 09:47:45', '2021-03-20 09:47:45', 1),
(9, 'kashmir', '2021-03-20 11:09:16', '2021-03-20 11:09:16', 1),
(10, 'gujarat', '2016-04-20 10:19:30', '2016-04-20 10:19:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `department_id` int(11) NOT NULL,
  `course_id` varchar(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `sec_que_ans` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `isactive` int(3) NOT NULL,
  `usertype` int(2) NOT NULL,
  `enrollment_id` int(15) NOT NULL,
  `state_id` varchar(25) NOT NULL,
  `city_id` varchar(25) NOT NULL,
  `area_id` varchar(25) NOT NULL,
  `doi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `first_name`, `last_name`, `email`, `contact`, `department_id`, `course_id`, `semester_id`, `sec_que_ans`, `answer`, `password`, `isactive`, `usertype`, `enrollment_id`, `state_id`, `city_id`, `area_id`, `doi`) VALUES
(1, 'chintan', 'malani', 'abc@xyz.com', '2147483647', 0, '', 0, 0, '', '123456', 1, 2, 0, '', '', '', '0000-00-00'),
(2, 'chintan', 'malani', 'karan@gmail.com', '2147483647', 1, '2', 9, 1, 'kk', '123456', 1, 1, 12334556, '8', '4', '2', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `subject_detail`
--

CREATE TABLE `subject_detail` (
  `subject_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `subject_name` varchar(20) NOT NULL,
  `isactive` int(1) NOT NULL,
  `dou` date NOT NULL,
  `doi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_detail`
--

INSERT INTO `subject_detail` (`subject_id`, `department_id`, `semester_id`, `course_id`, `subject_name`, `isactive`, `dou`, `doi`) VALUES
(1, 4, 8, 2, 'cs', 1, '2020-04-23', '2020-04-23'),
(2, 4, 9, 2, 'mathematics', 1, '2020-04-23', '2020-04-23'),
(3, 3, 10, 2, 'Python', 1, '2020-04-24', '2020-04-24'),
(5, 4, 10, 2, 'Python', 1, '2020-04-28', '2020-04-28'),
(6, 1, 11, 4, 'java', 1, '2020-04-29', '2020-04-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `material_share_details`
--
ALTER TABLE `material_share_details`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `security_question`
--
ALTER TABLE `security_question`
  ADD PRIMARY KEY (`sec_que_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `subject_detail`
--
ALTER TABLE `subject_detail`
  ADD PRIMARY KEY (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `material_share_details`
--
ALTER TABLE `material_share_details`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `security_question`
--
ALTER TABLE `security_question`
  MODIFY `sec_que_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject_detail`
--
ALTER TABLE `subject_detail`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
