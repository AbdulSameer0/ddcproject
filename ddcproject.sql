-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 07:14 PM
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
-- Database: `ddcproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', '2024-11-14 10:42:22'),
(2, 'ritika', 'ritika@gmail.com', '123456', '2024-11-17 13:14:39'),
(3, 'sakshi', 'sakshi@gmail.com', '123456', '2024-11-17 13:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `programme_info`
--

CREATE TABLE `programme_info` (
  `prog_id` int(200) NOT NULL,
  `progTitle` varchar(200) NOT NULL,
  `targetGroup` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `progDirector` varchar(200) NOT NULL,
  `dealingAsstt` varchar(200) NOT NULL,
  `progPdf` longblob NOT NULL,
  `attandancePdf` longblob NOT NULL,
  `materialLink` varchar(200) NOT NULL,
  `paymentdone` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `programme_info`
--

INSERT INTO `programme_info` (`prog_id`, `progTitle`, `targetGroup`, `date`, `progDirector`, `dealingAsstt`, `progPdf`, `attandancePdf`, `materialLink`, `paymentdone`, `created_at`) VALUES
(127, 'demo', 'demo', '2024-11-21', 'demo', 'da1', 0x424547432031303720627920726974696b612e706466, 0x424547432031303920627920726974696b612e706466, 'demo', 'yes', '2024-11-17 21:59:38'),
(128, 'demo', 'demo', '2024-11-20', 'demo', 'da3', '', '', 'demo', 'no', '2024-11-17 22:04:02'),
(129, 'demoA', 'demoA', '2024-11-17', 'demoA', 'da1', 0x42454743203130352062792061646d696e2e706466, 0x42454743203130392062792061646d696e2e706466, 'demoA', 'yes', '2024-11-17 22:08:05'),
(130, 'demoB', 'demoB', '2024-11-21', 'demoB', 'da2', '', '', 'demoB', 'no', '2024-11-17 22:09:21'),
(131, 'hello', 'hello', '2024-11-27', 'hello', 'da1', 0x42454743203130372062792061646d696e2e706466, 0x42454743203130392062792061646d696e2e706466, 'hello', 'yes', '2024-11-17 23:39:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programme_info`
--
ALTER TABLE `programme_info`
  ADD PRIMARY KEY (`prog_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `programme_info`
--
ALTER TABLE `programme_info`
  MODIFY `prog_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
