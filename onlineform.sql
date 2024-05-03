-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 04:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineform`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_1`
--

CREATE TABLE `form_1` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `citizen_no` varchar(50) NOT NULL,
  `imagen1` varchar(100) NOT NULL,
  `imagen2` varchar(100) NOT NULL,
  `mob_no` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `citizen_date` varchar(50) NOT NULL,
  `company` varchar(20) DEFAULT NULL,
  `qna1` varchar(100) DEFAULT NULL,
  `qna2` varchar(100) DEFAULT NULL,
  `qna3` varchar(100) DEFAULT NULL,
  `qna4` varchar(100) DEFAULT NULL,
  `qna6` varchar(100) DEFAULT NULL,
  `qna7` varchar(100) DEFAULT NULL,
  `qna8` varchar(100) DEFAULT NULL,
  `qna9` varchar(100) DEFAULT NULL,
  `qna10` varchar(100) DEFAULT NULL,
  `qna101` varchar(100) DEFAULT NULL,
  `qna11` varchar(100) DEFAULT NULL,
  `qna12` varchar(100) DEFAULT NULL,
  `qna13` varchar(100) DEFAULT NULL,
  `qna14` varchar(100) DEFAULT NULL,
  `qna15` varchar(100) DEFAULT NULL,
  `qna16` varchar(100) DEFAULT NULL,
  `qna17` varchar(100) DEFAULT NULL,
  `qna18` varchar(100) DEFAULT NULL,
  `qna19` varchar(100) DEFAULT NULL,
  `qna20` varchar(100) DEFAULT NULL,
  `qna21` varchar(100) DEFAULT NULL,
  `qna22` varchar(100) DEFAULT NULL,
  `qna23` varchar(100) DEFAULT NULL,
  `qna24` varchar(100) DEFAULT NULL,
  `qna25` varchar(100) DEFAULT NULL,
  `qna26` varchar(100) DEFAULT NULL,
  `qna27` varchar(100) DEFAULT NULL,
  `qna28` varchar(100) DEFAULT NULL,
  `qna29` varchar(100) DEFAULT NULL,
  `qna30` varchar(100) DEFAULT NULL,
  `qna31` varchar(100) DEFAULT NULL,
  `qna32` varchar(100) DEFAULT NULL,
  `qna33` varchar(100) DEFAULT NULL,
  `qna34` varchar(100) DEFAULT NULL,
  `qna35` varchar(100) DEFAULT NULL,
  `qna36` varchar(100) DEFAULT NULL,
  `qna37` varchar(100) DEFAULT NULL,
  `qna38` varchar(100) DEFAULT NULL,
  `qna39` varchar(100) DEFAULT NULL,
  `qna40` varchar(100) DEFAULT NULL,
  `qna41` varchar(100) DEFAULT NULL,
  `qna42` varchar(100) DEFAULT NULL,
  `qna43` varchar(100) DEFAULT NULL,
  `qna44` varchar(100) DEFAULT NULL,
  `qna45` varchar(100) DEFAULT NULL,
  `qna46` varchar(100) DEFAULT NULL,
  `qna47` varchar(100) DEFAULT NULL,
  `qna48` varchar(100) DEFAULT NULL,
  `qna49` varchar(100) DEFAULT NULL,
  `qna50` varchar(100) DEFAULT NULL,
  `qna51` varchar(100) DEFAULT NULL,
  `qna52` varchar(100) DEFAULT NULL,
  `qna53` varchar(100) DEFAULT NULL,
  `qna54` varchar(100) DEFAULT NULL,
  `qna55` varchar(100) DEFAULT NULL,
  `qna56` varchar(100) DEFAULT NULL,
  `qna57` varchar(100) DEFAULT NULL,
  `qna58` varchar(100) DEFAULT NULL,
  `qna59` varchar(100) DEFAULT NULL,
  `qna60` varchar(100) DEFAULT NULL,
  `qna61` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'Main Admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forms`
--

CREATE TABLE `tbl_forms` (
  `form_id` int(11) NOT NULL,
  `form_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pphoto` varchar(255) NOT NULL,
  `cphoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fullname`, `username`, `email`, `phoneno`, `password`, `pphoto`, `cphoto`) VALUES
(1, 'Hello World', 'user', 'user1@gmail.com', '9812378945', 'user', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_1`
--
ALTER TABLE `form_1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_forms`
--
ALTER TABLE `tbl_forms`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_1`
--
ALTER TABLE `form_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_forms`
--
ALTER TABLE `tbl_forms`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
