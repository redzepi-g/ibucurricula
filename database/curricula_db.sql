-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 04:32 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curricula_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `assistants`
--

CREATE TABLE `assistants` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assistants`
--

INSERT INTO `assistants` (`id`, `name`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Asst. S. Ismaili', NULL, NULL, NULL),
(2, 'Asst. F. Kamberi', NULL, NULL, NULL),
(3, 'Asst. Dr. D. Leshkovski', NULL, NULL, NULL),
(4, 'Asst. B. Karapejovski', NULL, NULL, NULL),
(5, 'Asst. Emin Durmishi', NULL, NULL, NULL),
(6, 'Asst. Neslihan Ademi', NULL, NULL, NULL),
(7, 'Asst. Skofiar Kamberi', NULL, NULL, NULL),
(8, 'Asst. Tina Gegovska', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ce_first_fall`
--

CREATE TABLE `ce_first_fall` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weeklyhours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ects` int(11) NOT NULL,
  `professor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assistant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students` int(11) NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ce_first_fall`
--

INSERT INTO `ce_first_fall` (`id`, `code`, `course`, `weeklyhours`, `ects`, `professor`, `assistant`, `students`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'ENG 101', 'English Language I', '2+1', 5, 'Asst. Prof. I. Miftari', 'Asst. S. Ismaili', 0, 'Just another comment for testing purposes', NULL, NULL),
(2, 'CE 101', 'Computer Skills', '2+1', 5, 'Assoc. Prof. Aleksandar Anastasovski', 'Asst. F. Kamberi', 0, 'Just another comment for testing purposes', NULL, NULL),
(3, 'PR 101', 'Communication Skills', '2+1', 5, 'Asst. Prof. Dr. Sanja Velickovski', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(4, 'MATH 101', 'Mathematics I', '2+1', 5, 'Prof. Dr. I. Kocayusufoglu', 'Asst. Dr. D. Leshkovski', 0, 'Just another comment for testing purposes', NULL, NULL),
(5, 'PHYS 101', 'Physics I', '2+1', 5, 'Assoc. Prof. Dr. H. Kamberaj', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(6, 'TUR 101', 'Elective Course at University level 1(Turkish Language I)', '2+1', 5, 'Prof. K. Koksal', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ce_first_spring`
--

CREATE TABLE `ce_first_spring` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weeklyhours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ects` int(11) NOT NULL,
  `professor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assistant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students` int(11) NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ce_first_spring`
--

INSERT INTO `ce_first_spring` (`id`, `code`, `course`, `weeklyhours`, `ects`, `professor`, `assistant`, `students`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'ENG 102', 'English Language II', '2+1', 5, 'Asst. Prof. I. Miftari', 'Asst. S. Ismaili', 0, 'Just another comment for testing purposes', NULL, NULL),
(2, 'IE 101', 'Introduction to Engineering', '2+1', 5, 'Assoc. Prof. Aleksandar Anastasovski', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(3, 'CE 102', 'Introduction to Programming', '2+1', 5, 'Assoc. Prof. Dr. Haidar Sharif', 'Asst. F. Kamberi', 0, 'Just another comment for testing purposes', NULL, NULL),
(4, 'MATH 102', 'Mathematics II', '2+1', 5, 'Prof. Dr. I. Kocayusufoglu', 'Asst. Dr. D. Leshkovski', 0, 'Just another comment for testing purposes', NULL, NULL),
(5, 'PHYS 102', 'Physics II', '2+1', 5, 'Assoc. Prof. Dr. H. Kamberaj', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(6, 'MK 102', 'Elective course at University level 2 Macedonian Language II', '2+1', 5, 'Prof. S. G. Madzova', 'Asst. B. Karapejovski', 0, 'Just another comment for testing purposes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ce_fourth_fall`
--

CREATE TABLE `ce_fourth_fall` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weeklyhours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ects` int(11) NOT NULL,
  `professor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assistant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students` int(11) NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ce_fourth_fall`
--

INSERT INTO `ce_fourth_fall` (`id`, `code`, `course`, `weeklyhours`, `ects`, `professor`, `assistant`, `students`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'CE 401', 'Data Communications and Networks', '2+2', 6, 'Prof. Dr. Andrej Stefanov', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(2, 'CE 409', 'Elective course at Faculty level 7 Formal Languages and Automata', '2+0', 4, 'Prof. Dr. Andrej Stefanov', 'Asst. Skofiar Kamberi', 0, 'Just another comment for testing purposes', NULL, NULL),
(3, 'CE 408', 'Elective course at Faculty level 8 Artificial Neural Networks', '2+0', 4, 'Prof. Dr. Andrej Stefanov', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(4, 'CE 414', 'Elective course at Faculty level 9 Visual Programming', '2+1', 5, 'Assoc. Prof. Dr. Haidar Sharif', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(5, 'CE 406', 'Elective course at Faculty level 10 Multimedia Web Design', '2+1', 5, 'Asst. Prof. Dr. Festim Halili', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(6, 'CE 490', 'Project I', '0+6', 6, 'Mentorship (FENG staff)', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ce_fourth_spring`
--

CREATE TABLE `ce_fourth_spring` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weeklyhours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ects` int(11) NOT NULL,
  `professor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assistant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students` int(11) NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ce_fourth_spring`
--

INSERT INTO `ce_fourth_spring` (`id`, `code`, `course`, `weeklyhours`, `ects`, `professor`, `assistant`, `students`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'CE 402', 'Telecommunications', '2+2', 6, 'Prof. Dr. Andrej Stefanov', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(2, 'CE 405', 'Elective course at Faculty level 7 Wireless Information Networks', '2+1', 5, 'Prof. Dr. Andrej Stefanov', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(3, 'CE 413', 'Elective course at Faculty level 8 Human Computer Interfaces', '2+1', 5, 'Assoc. Prof. Dr. Haidar Sharif', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(4, 'CE 407', 'Elective course at Faculty level 9 Software Engineering', '2+1', 4, 'Asst. Prof. Mile Mircevski', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(5, 'CE 416', 'Elective course at Faculty level 10 Introduction to Robotics', '2+0', 4, 'Assoc. Prof. Dr. Haidar Sharif', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(6, 'CE 499', 'Project II', '0+6', 6, 'Mentorship (FENG staff)', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ce_second_fall`
--

CREATE TABLE `ce_second_fall` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weeklyhours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ects` int(11) NOT NULL,
  `professor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assistant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students` int(11) NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ce_second_fall`
--

INSERT INTO `ce_second_fall` (`id`, `code`, `course`, `weeklyhours`, `ects`, `professor`, `assistant`, `students`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'MATH 204', 'Discrete Mathematics', '2+1', 6, 'Assoc. Prof. Dr. H. Kamberaj', 'Asst. F. Kamberi', 0, 'Just another comment for testing purposes', NULL, NULL),
(2, 'MATH 201', 'Linear Algebra', '2+1', 5, 'Prof. Dr. I. Kocayusufoglu', 'Asst. Dr. D. Leshkovski', 0, 'Just another comment for testing purposes', NULL, NULL),
(3, 'EE 202', 'Circuit Theory I', '2+1', 5, 'Asst. Prof. Miroslav Kotevski', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(4, 'CE 201', 'Advanced Programming', '2+1', 5, 'Assoc. Prof. Dr. Haidar Sharif', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(5, 'ARCH 204', 'Elective course at Faculty level 1 Technical Drawing for Engineers', '0+2', 4, 'Assoc. Prof. Aleksandar Anastasovski', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(6, 'IE 206', 'Elective course at University level 2 Problem Solving Strategies', '2+1', 5, 'Assoc. Prof. Aleksandra P. Kujundziski', 'Asst. Neslihan Ademi', 0, 'Just another comment for testing purposes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ce_second_spring`
--

CREATE TABLE `ce_second_spring` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weeklyhours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ects` int(11) NOT NULL,
  `professor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assistant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students` int(11) NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ce_second_spring`
--

INSERT INTO `ce_second_spring` (`id`, `code`, `course`, `weeklyhours`, `ects`, `professor`, `assistant`, `students`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'CE 202', 'Algorithms', '2+1', 6, 'Assoc. Prof. Dr. H. Kamberaj', 'Asst. Skofiar Kamberi', 0, 'Just another comment for testing purposes', NULL, NULL),
(2, 'MATH 202', 'Differential Equations', '2+1', 5, 'Prof. Dr. I. Kocayusufoglu', 'Asst. Dr. D. Leshkovski', 0, 'Just another comment for testing purposes', NULL, NULL),
(3, 'STA 201', 'Probability and Statistics', '2+1', 5, 'Prof. Dr. I. Kocayusufoglu', 'Asst. Dr. D. Leshkovski', 0, 'Just another comment for testing purposes', NULL, NULL),
(4, 'MATH 203', 'Mathematical Modeling', '2+1', 5, 'Assoc. Prof. Aleksandra P. Kujundziski', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(5, 'CE 203', 'Elective course at Faculty level 2 Computer Architecture', '2+1', 4, 'Assoc. Prof. Dr. H. Kamberaj', 'Asst. Neslihan Ademi', 0, 'Just another comment for testing purposes', NULL, NULL),
(6, 'MAN 212', 'Elective course at University level 4 Enterpreneurship', '2+1', 5, 'Assoc. Prof. Dr. Natasha Kraleva', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ce_third_fall`
--

CREATE TABLE `ce_third_fall` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weeklyhours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ects` int(11) NOT NULL,
  `professor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assistant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students` int(11) NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ce_third_fall`
--

INSERT INTO `ce_third_fall` (`id`, `code`, `course`, `weeklyhours`, `ects`, `professor`, `assistant`, `students`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'CE 301', 'Object Oriented Programming', '2+2', 6, 'Assoc. Prof. Dr. H. Kamberaj', 'Asst. Neslihan Ademi', 0, 'Just another comment for testing purposes', NULL, NULL),
(2, 'CE 302', 'Data Structures', '2+1', 6, 'Asst. Prof. Dr. Festim Halili', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(3, 'IE 303', 'Introduction to Optimization Methods', '2+1', 5, 'Prof. Dr. I. Kocayusufoglu', 'Asst. Dr. D. Leshkovski', 0, 'Just another comment for testing purposes', NULL, NULL),
(4, 'IE 304', 'Elective course at Faculty level 3 Systems Modeling', '0+2', 4, 'Assoc. Prof. Dr. H. Kamberaj', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(5, 'CE 303', 'Elective course at University level 4 Information System Design', '2+1', 4, 'Asst. Prof. Mile Mircevski', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(6, 'BA 306', 'Elective course at University level 5 Law and Ethics', '2+1', 5, 'Assoc. Prof. Dr. B. Demiri', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ce_third_spring`
--

CREATE TABLE `ce_third_spring` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weeklyhours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ects` int(11) NOT NULL,
  `professor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assistant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students` int(11) NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ce_third_spring`
--

INSERT INTO `ce_third_spring` (`id`, `code`, `course`, `weeklyhours`, `ects`, `professor`, `assistant`, `students`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'CE 304', 'Operating Systems', '2+2', 6, 'Prof. Dr. Andrej Stefanov', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(2, 'CE 305', 'Database Design and Management', '2+2', 6, 'Asst. Prof. Dr. Festim Halili', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(3, 'RMNS 307', 'Research methods in Natural Sciences', '2+1', 5, 'Assoc. Prof. Aleksandar Anastasovski', 'Asst. Tina Gegovska', 0, 'Just another comment for testing purposes', NULL, NULL),
(4, 'CE 307', 'Elective course at Faculty level 5 Computer Graphics', '2+1', 5, 'Assoc. Prof. Dr. Haidar Sharif', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL),
(5, 'CE 308', 'Elective course at Faculty level 6 Data Mining', '2+9', 5, 'Prof. Dr. Andrej Stefanov', 'Asst. Neslihan Ademi', 0, 'Just another comment for testing purposes', NULL, NULL),
(6, 'CE 399', 'Internship', '0+0', 4, 'Not assigned', 'Not assigned', 0, 'Just another comment for testing purposes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weeklyhours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ects` int(11) NOT NULL,
  `students` int(11) NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `professor_id` int(11) DEFAULT NULL,
  `assistant_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `name`, `weeklyhours`, `ects`, `students`, `comment`, `semester`, `year`, `department_id`, `professor_id`, `assistant_id`, `created_at`, `updated_at`) VALUES
(1, 'ENG 101', 'English Language I', '2+1', 5, 0, 'No comment given yet.', 'fall', 1, 1, 1, 1, NULL, NULL),
(2, 'CE 101', 'Computer Skills', '2+1', 5, 0, 'No comment given yet.', 'fall', 1, 1, 2, 2, NULL, NULL),
(3, 'PR 101', 'Communication Skills', '2+1', 5, 0, 'No comment given yet.', 'fall', 1, 1, 3, NULL, NULL, NULL),
(4, 'MATH 101', 'Mathematics I', '2+1', 5, 0, 'No comment given yet.', 'fall', 1, 1, 4, 3, NULL, NULL),
(5, 'PHYS 101', 'Physics I', '2+1', 5, 0, 'No comment given yet.', 'fall', 1, 1, 5, NULL, NULL, NULL),
(6, 'TUR 101', 'Elective Course at University level 1(Turkish Language I)', '2+1', 5, 0, 'No comment given yet.', 'fall', 1, 1, 6, NULL, NULL, NULL),
(7, 'MK 101', 'Elective Course at University level 1(Macedonian Language I)', '2+1', 5, 0, 'No comment given yet.', 'fall', 1, 1, 7, 4, NULL, NULL),
(8, 'ENG 102', 'English Language II', '2+1', 5, 0, 'No comment given yet.', 'spring', 1, 1, 1, 1, NULL, NULL),
(9, 'IE 101', 'Introduction to Engineering', '2+1', 5, 0, 'No comment given yet.', 'spring', 1, 1, 2, NULL, NULL, NULL),
(10, 'CE 102', 'Introduction to Programming', '2+1', 5, 0, 'No comment given yet.', 'spring', 1, 1, 9, 2, NULL, NULL),
(11, 'MATH 102', 'Mathematics II', '2+1', 5, 0, 'No comment given yet.', 'spring', 1, 1, 4, 3, NULL, NULL),
(12, 'PHYS 102', 'Physics II', '2+1', 5, 0, 'No comment given yet.', 'spring', 1, 1, 5, NULL, NULL, NULL),
(13, 'MK 102', 'Elective course at University level 2 Macedonian Language II', '2+1', 5, 0, 'No comment given yet.', 'spring', 1, 1, 7, 4, NULL, NULL),
(14, 'TUR 102', 'Elective course at University level 2 Turkish Language II', '2+1', 5, 0, 'No comment given yet.', 'spring', 1, 1, 6, NULL, NULL, NULL),
(15, 'MATH 204', 'Discrete Mathematics', '2+1', 6, 0, 'No comment given yet.', 'fall', 2, 1, 5, 2, NULL, NULL),
(16, 'MATH 201', 'Linear Algebra', '2+1', 5, 0, 'No comment given yet.', 'fall', 2, 1, 4, 3, NULL, NULL),
(17, 'EE 202', 'Circuit Theory I', '2+1', 5, 0, 'No comment given yet.', 'fall', 2, 1, 10, NULL, NULL, NULL),
(18, 'CE 201', 'Advanced Programming', '2+1', 5, 0, 'No comment given yet.', 'fall', 2, 1, 9, NULL, NULL, NULL),
(19, 'ARCH 204', 'Elective course at Faculty level 1 Technical Drawing for Engineers', '0+2', 4, 0, 'No comment given yet.', 'fall', 2, 1, 2, NULL, NULL, NULL),
(20, 'IE 206', 'Elective course at University level 2 Problem Solving Strategies', '2+1', 5, 0, 'No comment given yet.', 'fall', 2, 1, 11, 6, NULL, NULL),
(21, 'IE 206', 'Elective course at University level 2 Problem Solving Strategies', '2+1', 5, 0, 'No comment given yet.', 'spring', 2, 0, NULL, NULL, NULL, NULL),
(22, 'CE 202', 'Algorithms', '2+1', 6, 0, 'No comment given yet.', 'spring', 2, 1, 5, 7, NULL, NULL),
(23, 'MATH 202', 'Differential Equations', '2+1', 5, 0, 'No comment given yet.', 'spring', 2, 1, 4, 3, NULL, NULL),
(24, 'STA 201', 'Probability and Statistics', '2+1', 5, 0, 'No comment given yet.', 'spring', 2, 1, 4, 3, NULL, NULL),
(25, 'MATH 203', 'Mathematical Modeling', '2+1', 5, 0, 'No comment given yet.', 'spring', 2, 1, 11, NULL, NULL, NULL),
(26, 'CE 203', 'Elective course at Faculty level 2 Computer Architecture', '2+1', 4, 0, 'No comment given yet.', 'spring', 2, 1, 5, 6, NULL, NULL),
(27, 'MAN 212', 'Elective course at University level 4 Enterpreneurship', '2+1', 5, 0, 'No comment given yet.', 'spring', 2, 1, 12, NULL, NULL, NULL),
(28, 'CE 301', 'Object Oriented Programming', '2+2', 6, 0, 'No comment given yet.', 'fall', 3, 1, 5, 6, NULL, NULL),
(29, 'CE 302', 'Data Structures', '2+1', 6, 0, 'No comment given yet.', 'fall', 3, 1, 13, NULL, NULL, NULL),
(30, 'IE 303', 'Introduction to Optimization Methods', '2+1', 5, 0, 'No comment given yet.', 'fall', 3, 1, 4, 3, NULL, NULL),
(31, 'IE 304', 'Elective course at Faculty level 3 Systems Modeling', '0+2', 4, 0, 'No comment given yet.', 'fall', 3, 1, 5, NULL, NULL, NULL),
(32, 'CE 303', 'Elective course at University level 4 Information System Design', '2+1', 4, 0, 'No comment given yet.', 'fall', 3, 1, 14, NULL, NULL, NULL),
(33, 'BA 306', 'Elective course at University level 5 Law and Ethics', '2+1', 5, 0, 'No comment given yet.', 'fall', 3, 1, 15, NULL, NULL, NULL),
(34, 'CE 304', 'Operating Systems', '2+2', 6, 0, 'No comment given yet.', 'spring', 3, 1, 16, NULL, NULL, NULL),
(35, 'CE 305', 'Database Design and Management', '2+2', 6, 0, 'No comment given yet.', 'spring', 3, 1, 13, NULL, NULL, NULL),
(36, 'RMNS 307', 'Research methods in Natural Sciences', '2+1', 5, 0, 'No comment given yet.', 'spring', 3, 1, 2, 8, NULL, NULL),
(37, 'CE 307', 'Elective course at Faculty level 5 Computer Graphics', '2+1', 5, 0, 'No comment given yet.', 'spring', 3, 1, 9, NULL, NULL, NULL),
(38, 'CE 308', 'Elective course at Faculty level 6 Data Mining', '2+9', 5, 0, 'No comment given yet.', 'spring', 3, 1, 16, 6, NULL, NULL),
(39, 'CE 399', 'Internship', '0+0', 4, 0, 'No comment given yet.', 'spring', 3, 1, NULL, NULL, NULL, NULL),
(40, 'CE 401', 'Data Communications and Networks', '2+2', 6, 0, 'No comment given yet.', 'fall', 4, 1, 16, NULL, NULL, NULL),
(41, 'CE 409', 'Elective course at Faculty level 7 Formal Languages and Automata', '2+0', 4, 0, 'No comment given yet.', 'fall', 4, 1, 16, 7, NULL, NULL),
(42, 'CE 408', 'Elective course at Faculty level 8 Artificial Neural Networks', '2+0', 4, 0, 'No comment given yet.', 'fall', 4, 1, 16, NULL, NULL, NULL),
(43, 'CE 414', 'Elective course at Faculty level 9 Visual Programming', '2+1', 5, 0, 'No comment given yet.', 'fall', 4, 1, 9, NULL, NULL, NULL),
(44, 'CE 406', 'Elective course at Faculty level 10 Multimedia Web Design', '2+1', 5, 0, 'No comment given yet.', 'fall', 4, 1, 13, NULL, NULL, NULL),
(45, 'CE 490', 'Project I', '0+6', 6, 0, 'No comment given yet.', 'fall', 4, 1, 17, NULL, NULL, NULL),
(46, 'CE 402', 'Telecommunications', '2+2', 6, 0, 'No comment given yet.', 'spring', 4, 1, 16, NULL, NULL, NULL),
(47, 'CE 405', 'Elective course at Faculty level 7 Wireless Information Networks', '2+1', 5, 0, 'No comment given yet.', 'spring', 4, 1, 16, NULL, NULL, NULL),
(48, 'CE 413', 'Elective course at Faculty level 8 Human Computer Interfaces', '2+1', 5, 0, 'No comment given yet.', 'spring', 4, 1, 9, NULL, NULL, NULL),
(49, 'CE 407', 'Elective course at Faculty level 9 Software Engineering', '2+1', 4, 0, 'No comment given yet.', 'spring', 4, 1, 14, NULL, NULL, NULL),
(50, 'CE 416', 'Elective course at Faculty level 10 Introduction to Robotics', '2+0', 4, 0, 'No comment given yet.', 'spring', 4, 1, 9, NULL, NULL, NULL),
(51, 'CE 499', 'Project II', '0+6', 6, 0, 'No comment given yet.', 'spring', 4, 1, 17, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_department`
--

CREATE TABLE `course_department` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_department`
--

INSERT INTO `course_department` (`id`, `course_id`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 7, 1, NULL, NULL),
(8, 8, 1, NULL, NULL),
(9, 9, 1, NULL, NULL),
(10, 10, 1, NULL, NULL),
(11, 11, 1, NULL, NULL),
(12, 12, 1, NULL, NULL),
(13, 13, 1, NULL, NULL),
(14, 14, 1, NULL, NULL),
(15, 15, 1, NULL, NULL),
(16, 16, 1, NULL, NULL),
(17, 17, 1, NULL, NULL),
(18, 18, 1, NULL, NULL),
(19, 19, 1, NULL, NULL),
(20, 20, 1, NULL, NULL),
(21, 21, 1, NULL, NULL),
(22, 22, 1, NULL, NULL),
(23, 23, 1, NULL, NULL),
(24, 24, 1, NULL, NULL),
(25, 25, 1, NULL, NULL),
(26, 26, 1, NULL, NULL),
(27, 27, 1, NULL, NULL),
(28, 28, 1, NULL, NULL),
(29, 29, 1, NULL, NULL),
(30, 30, 1, NULL, NULL),
(31, 31, 1, NULL, NULL),
(32, 32, 1, NULL, NULL),
(33, 33, 1, NULL, NULL),
(34, 34, 1, NULL, NULL),
(35, 35, 1, NULL, NULL),
(36, 36, 1, NULL, NULL),
(37, 37, 1, NULL, NULL),
(38, 38, 1, NULL, NULL),
(39, 39, 1, NULL, NULL),
(40, 40, 1, NULL, NULL),
(41, 41, 1, NULL, NULL),
(42, 42, 1, NULL, NULL),
(43, 43, 1, NULL, NULL),
(44, 44, 1, NULL, NULL),
(45, 45, 1, NULL, NULL),
(46, 46, 1, NULL, NULL),
(47, 47, 1, NULL, NULL),
(48, 48, 1, NULL, NULL),
(49, 49, 1, NULL, NULL),
(50, 50, 1, NULL, NULL),
(51, 51, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `shortname`, `created_at`, `updated_at`) VALUES
(1, 'Computer Engineering', 'ce', NULL, NULL),
(2, 'Information Technology', 'it', NULL, NULL),
(3, 'Electrical Engineering', 'ee', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_26_105129_create_departments_table', 1),
(4, '2018_04_26_133815_create_courses_table', 1),
(5, '2018_04_26_143028_create_professors_table', 1),
(6, '2018_04_26_143148_create_assistants_table', 1),
(7, '2018_04_26_145420_course_department', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`id`, `name`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Asst. Prof. I. Miftari', NULL, NULL, NULL),
(2, 'Assoc. Prof. Aleksandar Anastasovski', NULL, NULL, NULL),
(3, 'Asst. Prof. Dr. Sanja Velickovski', NULL, NULL, NULL),
(4, 'Prof. Dr. I. Kocayusufoglu', NULL, NULL, NULL),
(5, 'Assoc. Prof. Dr. H. Kamberaj', NULL, NULL, NULL),
(6, 'Prof. K. Koksal', NULL, NULL, NULL),
(7, 'Prof. S. G. Madzova', NULL, NULL, NULL),
(8, 'Asst. Prof. Dr. Igballe Miftari', NULL, NULL, NULL),
(9, 'Assoc. Prof. Dr. Haidar Sharif', NULL, NULL, NULL),
(10, 'Asst. Prof. Miroslav Kotevski', NULL, NULL, NULL),
(11, 'Assoc. Prof. Aleksandra P. Kujundziski', NULL, NULL, NULL),
(12, 'Assoc. Prof. Dr. Natasha Kraleva', NULL, NULL, NULL),
(13, 'Asst. Prof. Dr. Festim Halili', NULL, NULL, NULL),
(14, 'Asst. Prof. Mile Mircevski', NULL, NULL, NULL),
(15, 'Assoc. Prof. Dr. B. Demiri', NULL, NULL, NULL),
(16, 'Prof. Dr. Andrej Stefanov', NULL, NULL, NULL),
(17, 'Mentorship (FENG staff)', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assistants`
--
ALTER TABLE `assistants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ce_first_fall`
--
ALTER TABLE `ce_first_fall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ce_first_spring`
--
ALTER TABLE `ce_first_spring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ce_fourth_fall`
--
ALTER TABLE `ce_fourth_fall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ce_fourth_spring`
--
ALTER TABLE `ce_fourth_spring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ce_second_fall`
--
ALTER TABLE `ce_second_fall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ce_second_spring`
--
ALTER TABLE `ce_second_spring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ce_third_fall`
--
ALTER TABLE `ce_third_fall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ce_third_spring`
--
ALTER TABLE `ce_third_spring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_department`
--
ALTER TABLE `course_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assistants`
--
ALTER TABLE `assistants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ce_first_fall`
--
ALTER TABLE `ce_first_fall`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ce_first_spring`
--
ALTER TABLE `ce_first_spring`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ce_fourth_fall`
--
ALTER TABLE `ce_fourth_fall`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ce_fourth_spring`
--
ALTER TABLE `ce_fourth_spring`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ce_second_fall`
--
ALTER TABLE `ce_second_fall`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ce_second_spring`
--
ALTER TABLE `ce_second_spring`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ce_third_fall`
--
ALTER TABLE `ce_third_fall`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ce_third_spring`
--
ALTER TABLE `ce_third_spring`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `course_department`
--
ALTER TABLE `course_department`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
