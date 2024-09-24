-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2024 at 05:19 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `set_app`
--

CREATE TABLE `set_app` (
  `id` int NOT NULL,
  `app_name` varchar(100) NOT NULL,
  `title` varchar(190) NOT NULL,
  `deskripsi` varchar(190) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `set_app`
--

INSERT INTO `set_app` (`id`, `app_name`, `title`, `deskripsi`, `email`, `telpon`, `logo`) VALUES
(1, 'AYUDIA', 'Jasa Konstruksi Las Dan Bangunan Sejabodetabek', 'Ayudia konstruksi adalah jasa konstruksi  bangunan dan las sejabodetabek', 'ayudia@gmail.com', '085843544565', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `deskripsi` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `link` text NOT NULL,
  `foto` text NOT NULL,
  `main` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `deskripsi`, `link`, `foto`, `main`) VALUES
(1, 'For Your Dream Project', 'We Are Professional', 'https://htmlcodex.com/construction-company-website-template', 'carousel-1.jpg', 1),
(2, 'We Build Your Home', 'Professional Builder', 'https://htmlcodex.com/construction-company-website-template', 'carousel-2.jpg', 0),
(3, 'For Your Dream Home', 'We Are Trusted', 'https://htmlcodex.com/construction-company-website-template', 'carousel-3.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `set_app`
--
ALTER TABLE `set_app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `set_app`
--
ALTER TABLE `set_app`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
