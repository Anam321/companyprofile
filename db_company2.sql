-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2024 at 04:56 PM
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
  `logo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `addres` varchar(100) NOT NULL,
  `keyword` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `set_app`
--

INSERT INTO `set_app` (`id`, `app_name`, `title`, `deskripsi`, `email`, `telpon`, `logo`, `addres`, `keyword`) VALUES
(1, 'AYUDIA', 'Jasa Konstruksi Las Dan Bangunan Sejabodetabek', 'Ayudia konstruksi adalah jasa konstruksi  bangunan dan las sejabodetabek', 'ayudia@gmail.com', '085843544565', 'logo.png', 'Pasar kemis,Cikupa,Sinang jaya, Citra Raya, Tangerang', 'real estate ,renovasi rumah, renovasi gedung, Kanopi minimalis, kanopi termurah, kanopi alderon, kanopi kaca, bengkel las terdekat, kanopi tangerang,jasa bengkel las');

-- --------------------------------------------------------

--
-- Table structure for table `set_media`
--

CREATE TABLE `set_media` (
  `id` int NOT NULL,
  `media` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `link` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `set_media`
--

INSERT INTO `set_media` (`id`, `media`, `username`, `link`) VALUES
(1, 'FACEBOOK', 'ayudia123', 'https://www.facebook.com/ayudia123'),
(2, 'INSTAGRAM', 'ayudiakonstruksi', 'https://www.instagram.com/ayudiakonstruksi'),
(3, 'YOUTUBE', 'ayudiakonstruksi342', 'https://www.youtube.com/ayudiakonstruksi342'),
(4, 'WHATSAPP', '62856766677765', 'wa.me/6285776690428?text=Hallo+AYUDIA+KONSTRUKSI.+Dapat+kah+saya+mendapatkan+informasi+produk+dan+layanan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `deskripsi` varchar(190) NOT NULL,
  `body` text NOT NULL,
  `images` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `title`, `deskripsi`, `body`, `images`, `link`) VALUES
(1, '25 Years Experience', 'Welcome to Builderz', '  <p>\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur\r\n                        facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,\r\n                        viverra quis sem.\r\n                    </p>\r\n                    <p>\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur\r\n                        facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,\r\n                        viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis\r\n                        porttitor. Aliquam interdum at lacus non blandit.\r\n                    </p>', 'about.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int NOT NULL,
  `title` varchar(190) NOT NULL,
  `body` longtext NOT NULL,
  `meta_deskripsi` varchar(190) NOT NULL,
  `category` varchar(50) NOT NULL,
  `slug` text NOT NULL,
  `private` int NOT NULL,
  `foto` text NOT NULL,
  `visitor` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `title`, `body`, `meta_deskripsi`, `category`, `slug`, `private`, `foto`, `visitor`) VALUES
(1, 'Lorem ipsum dolor sit', ' Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velitnon vulputate. Aliquam metus tortor', ' Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velitnon vulputate. Aliquam metus tortor', 'Interior', 'Lorem-ipsum-dolor-sit', 0, 'blog-1.jpg', 0),
(2, 'Curabitur facilisis ornare velitnon vulputate', 'Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velitnon vulputate. Aliquam metus tortor', 'Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velitnon vulputate.', 'Tralis', 'Curabitur-facilisis-ornare-velitnon-vulputate', 0, 'blog-2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fax`
--

CREATE TABLE `tbl_fax` (
  `id` int NOT NULL,
  `title` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `position` varchar(50) NOT NULL,
  `inisial` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_fax`
--

INSERT INTO `tbl_fax` (`id`, `title`, `deskripsi`, `position`, `inisial`) VALUES
(1, 'Lorem ipsum dolor sit amet?', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non.', 'LEFT', 'faxOne'),
(2, ' Lorem ipsum dolor sit amet?', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non.', 'LEFT', 'faxTue'),
(3, ' Lorem ipsum dolor sit amet?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non.', 'LEFT', 'faxTre'),
(4, 'Lorem ipsum dolor sit amet?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non.', 'LEFT', 'faxFour'),
(5, 'Lorem ipsum dolor sit amet?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non.', 'LEFT', 'faxfive'),
(6, 'Lorem ipsum dolor sit amet?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non.', 'RIGHT', 'faxnine'),
(7, 'Lorem ipsum dolor sit amet?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non.', 'RIGHT', 'faxeight'),
(8, ' Lorem ipsum dolor sit amet?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non.', 'RIGHT', 'faxnines'),
(9, 'Lorem ipsum dolor sit amet?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non.', 'RIGHT', 'faxten'),
(10, 'Lorem ipsum dolor sit amet?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non.', 'RIGHT', 'faxeleven');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feature`
--

CREATE TABLE `tbl_feature` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `deskripsi` varchar(190) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_feature`
--

INSERT INTO `tbl_feature` (`id`, `title`, `deskripsi`, `icon`) VALUES
(1, 'Expert Worker', 'Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non', 'flaticon-worker'),
(2, 'Quality Work', 'Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non', 'flaticon-building'),
(3, '24/7 Support', 'Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non', 'flaticon-call');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meta_pages`
--

CREATE TABLE `tbl_meta_pages` (
  `id` int NOT NULL,
  `pages` varchar(100) NOT NULL,
  `meta_title` varchar(190) NOT NULL,
  `meta_deskripsi` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_meta_pages`
--

INSERT INTO `tbl_meta_pages` (`id`, `pages`, `meta_title`, `meta_deskripsi`) VALUES
(1, 'SERVICE', 'We Provide Services', 'Our Services'),
(2, 'PATNER', 'Meet Our Engineer', 'Our Team'),
(3, 'FAX', 'You May Ask', 'Frequently Asked Question'),
(4, 'BLOG', 'Latest From Our Blog', 'Latest Blog');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patner`
--

CREATE TABLE `tbl_patner` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `web` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `linked` varchar(100) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_patner`
--

INSERT INTO `tbl_patner` (`id`, `name`, `category`, `web`, `instagram`, `facebook`, `linked`, `foto`) VALUES
(1, 'Adam Phillips', 'CEO & Founder', 'https://website.com', 'https://instgaram.com', 'https://facebook.com', 'https://linkid.com', 'team-1.jpg'),
(2, 'Dylan Adams', 'Civil Engineer', '', '', '', '', 'team-2.jpg'),
(3, 'Jhon Doe', 'Interior Designer', '', '', '', '', 'team-3.jpg'),
(4, 'Josh Dunn', 'Painter', '', '', '', '', 'team-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int NOT NULL,
  `title` varchar(190) NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `images` text NOT NULL,
  `private` int NOT NULL,
  `slug` varchar(225) NOT NULL,
  `meta_deskripsi` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `title`, `body`, `images`, `private`, `slug`, `meta_deskripsi`) VALUES
(1, 'Building Construction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida\r\n                                condimentum, viverra quis sem.', 'service-1.jpg', 0, 'Building-Construction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non vulputate. '),
(2, 'House Renovation', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida\r\n                                condimentum, viverra quis sem.', 'service-2.jpg', 0, 'House-Renovation', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non vulputate. '),
(3, 'Architecture Design', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida\r\n                                condimentum, viverra quis sem.', 'service-3.jpg', 0, 'Architecture-Design', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non vulputate.'),
(4, 'Interior Design', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida\r\n                                condimentum, viverra quis sem.', 'service-4.jpg', 0, 'Interior-Design', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.\r\n                                Curabitur facilisis ornare velit non vulputate.');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `testimoni` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `category` varchar(50) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `project` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_testimoni`
--

INSERT INTO `tbl_testimoni` (`id`, `name`, `testimoni`, `category`, `foto`, `project`) VALUES
(1, 'Customer Name', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur', 'HOME', 'testimonial-1.jpg', 'slug-projek-1'),
(2, 'Customer Name', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur\r\n                      ', 'PAGAR', 'testimonial-2.jpg', 'slug-projek-2'),
(3, 'Customer Name', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur\r\n                   ', 'KANOPI', 'testimonial-3.jpg', 'slug-projek-3'),
(4, 'Customer Name', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabit', 'INTERIOR', 'testimonial-4.jpg', 'slug-projek-4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `set_app`
--
ALTER TABLE `set_app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_media`
--
ALTER TABLE `set_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fax`
--
ALTER TABLE `tbl_fax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feature`
--
ALTER TABLE `tbl_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_meta_pages`
--
ALTER TABLE `tbl_meta_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_patner`
--
ALTER TABLE `tbl_patner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
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
-- AUTO_INCREMENT for table `set_media`
--
ALTER TABLE `set_media`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_fax`
--
ALTER TABLE `tbl_fax`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_feature`
--
ALTER TABLE `tbl_feature`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_meta_pages`
--
ALTER TABLE `tbl_meta_pages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_patner`
--
ALTER TABLE `tbl_patner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
