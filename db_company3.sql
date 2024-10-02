-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2024 at 04:07 AM
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
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `attempt_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `username`, `ip_address`, `attempt_time`) VALUES
(9, 'superadminddc', '::1', '2024-06-25 20:41:34'),
(10, 'superad', '::1', '2024-06-25 20:41:44'),
(11, 'dcdc', '::1', '2024-06-25 20:41:52'),
(12, 'dcc', '::1', '2024-06-25 20:42:01'),
(13, 'dcc', '::1', '2024-06-25 20:42:09'),
(14, 'sxsx', '::1', '2024-06-25 21:00:58'),
(15, 'sxsx', '::1', '2024-06-25 21:01:05'),
(16, 'sxsx', '::1', '2024-06-25 21:01:13'),
(17, 'xssxs', '::1', '2024-06-25 21:52:28'),
(18, 'gtfdv', '::1', '2024-06-25 21:52:37'),
(19, 'bbfb', '::1', '2024-06-25 21:52:46'),
(20, 'beben123', '::1', '2024-06-26 13:22:21'),
(21, 'superadmin', '::1', '2024-06-28 20:31:01'),
(22, 'superadmin', '::1', '2024-07-01 20:29:26'),
(23, 'superadmin', '::1', '2024-07-01 20:29:41'),
(24, 'superadmin', '112.215.224.233', '2024-07-02 02:29:21'),
(25, 'superadmin', '103.178.2.147', '2024-07-02 20:25:32'),
(26, 'superadmin', '112.215.225.27', '2024-07-03 17:20:11'),
(27, 'dvv', '103.178.2.147', '2024-07-07 16:52:43'),
(28, 'dvv', '103.178.2.147', '2024-07-07 16:52:53'),
(29, 'dvvsdv', '103.178.2.147', '2024-07-07 16:53:01'),
(30, 'cdd', '103.178.2.147', '2024-07-07 17:36:07'),
(31, 'sddfs', '103.178.2.147', '2024-07-07 17:36:17'),
(32, 'rrsfs', '103.178.2.147', '2024-07-07 17:36:27'),
(33, 'superadmin', '103.178.2.147', '2024-07-09 12:08:16'),
(34, 'Superadmin', '140.213.134.94', '2024-07-23 22:56:58'),
(35, 'superadmin', '103.178.2.147', '2024-08-04 09:20:25'),
(36, 'superadmin', '103.178.2.147', '2024-09-10 22:25:01'),
(37, 'superadmin', '103.178.2.147', '2024-09-11 13:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `pages_portfolio`
--

CREATE TABLE `pages_portfolio` (
  `id` int NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `desk` text COLLATE utf8mb4_general_ci NOT NULL,
  `images` text COLLATE utf8mb4_general_ci NOT NULL,
  `id_projek` int NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `keyword` varchar(160) COLLATE utf8mb4_general_ci NOT NULL,
  `video` varchar(225) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages_portfolio`
--

INSERT INTO `pages_portfolio` (`id`, `title`, `desk`, `images`, `id_projek`, `link`, `keyword`, `video`) VALUES
(8, 'Pembuatan Dan Pemasangan Atap Kanopi Alderon Plafon PVC', 'Proyek ini bertujuan untuk memasang kanopi atap Alderon dengan menggunakan bahan palfon PVC di rumah klien yang terletak di Cluster Flamboyan, Taman Aster.', 'p1.jpg', 9, 'pembuatan-dan-pemasangan-atap-kanopi-alderon-plafon-pvc', 'Pembuatan Dan Pemasangan Atap Kanopi, kanopi alderon, kanopi plafon pvc, bengkel las, jasa las', ''),
(9, 'PEMASANGAN KANOPI KACA TEMPERED DI JAGAKARSA JAKARTA SELATAN', ' Proses pembuatan kaca ini melibatkan peleburan kaca float pada suhu sekitar 700 derajat Celcius, diikuti dengan pendinginan cepat untuk menghasilkan lembaran kaca tempered', 'p2.jpg', 11, 'pemasangan-kanopi-kaca-tempered-di-jagakarsa-jakarta-selatan', 'kanopi kaca', ''),
(10, 'Portfolio Pemasangan Kanopi Atap Alderon dan Plafon PVC di Klaster Pelamboyan Alam Sutra', ' Salah satu material yang semakin populer untuk keperluan atap dan plafon adalah atap Alderon dan plafon PVC. Klaster Pelamboyan di Alam Sutra menjadi salah satu contoh area hunian yang telah mengadopsi penggunaan material ini untuk meningkatkan kenyamanan dan keindahan rumah.', 'p3.jpg', 12, 'portfolio-pemasangan-kanopi-atap-alderon-dan-plafon-pvc-di-klaster-pelamboyan-alam-sutra', 'kanopi alderon plafon pvc, kanopi minimalis, harga kanopi', 'https://youtube.com/embed/Dl24AheMHFA?feature=share'),
(12, 'Portofolio Pemasangan Kanopi Atap Alderon dan Plafon PVC Model Minimalis di Kalibata Jakarta Selatan', 'Dalam komunitas yang semakin menghargai estetika dan kenyamanan, permintaan akan desain minimalis yang fungsional semakin meningkat.', 'p4.jpg', 13, 'portofolio-pemasangan-kanopi-atap-alderon-dan-plafon-pvc-model-minimalis-di-kalibata-jakarta-selatan', 'jasa pasang kanopi, kanopi minimalis, harga kanopi, kanopi alderon plafon pvc', 'https://youtube.com/embed/XBc2xNc6DJc?feature=share'),
(13, 'Membuat Kanopi Atap Alderon dan Pemasangannya Kombinasi Elegan dan Fungsional di Cimanggis Depok', 'Selain memberikan perlindungan dari cuaca eksternal, kanopi juga menambah nilai estetika dan kenyamanan pada rumah. Di Cimanggis, Depok, Alderon telah menjadi pilihan utama bagi banyak pemilik rumah yang mencari solusi kanopi berkualitas tinggi.', 'p4.jpg', 15, 'membuat-kanopi-atap-alderon-dan-pemasangannya-kombinasi-elegan-dan-fungsional-di-cimanggis-depok', 'jasa pasang kanopi, jasa pembuatan kanopi, jasa las kanopi, kanopi alderon, kanopi minimalis', 'https://youtube.com/embed/UyCCZqLSljw?feature=share'),
(14, 'Pemasangan Atap Kanopi Alderon Plafon PVC di Raffles Hill Cibubur', 'Pada kesempatan kali ini, kami akan membahas proyek pemasangan atap kanopi dengan plafon PVC yang kami lakukan di Raffles Hill Cibubur, sebuah kawasan hunian yang mengutamakan kenyamanan dan keindahan.', 'p5.jpg', 16, 'pemasangan-atap-kanopi-alderon-plafon-pvc-di-raffles-hill-cibubur', 'jasa las kanopi, harga kanopi, jasa engkel las kanopi, bengkel las kanopi', 'https://youtube.com/embed/FDY-2KDD4S0?si=94VwAUJxx');

-- --------------------------------------------------------

--
-- Table structure for table `ref_projek`
--

CREATE TABLE `ref_projek` (
  `id_projek` int NOT NULL,
  `nama_projek` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `volume` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `nama_client` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `id_kategori` int NOT NULL,
  `status` int NOT NULL,
  `nohp` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `fed` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_projek`
--

INSERT INTO `ref_projek` (`id_projek`, `nama_projek`, `keterangan`, `volume`, `tgl_mulai`, `tgl_akhir`, `nama_client`, `alamat`, `id_kategori`, `status`, `nohp`, `email`, `fed`) VALUES
(9, 'Pembuatan Dan Pemasangan Atap Kanopi Alderon Plafon PVC', 'Memasang kanopi atap Alderon dengan menggunakan bahan palfon PVC di rumah klien yang terletak di Cluster Flamboyan, Taman Aster. Kanopi atap Alderon dipilih untuk memberikan perlindungan dari sinar matahari dan hujan, sementara palfon PVC dipilih untuk kepraktisan dan daya tahan yang baik.', '12 M', '2023-03-02', '2023-03-06', 'Eka Purna', 'Taman Aster Ruko, Jl. Ruko Perum Taman Aster A No.3, Telaga Asih, Kec. Cikarang Bar, Kabupaten Bekasi, Jawa Barat 17530', 5, 0, '', '', 0),
(11, 'PEMASANGAN KANOPI KACA DI JAGAKARSA JAKARTA SELATAN', 'Kaca tempered adalah sebuah material konstruksi yang terbuat dari kaca transparan murni. Kaca jenis ini didapatkan setelah bahan berupa kaca float dilebur pada suhu sekitar 700 derajat Celcius. Setelah lebur, ', '', '2018-03-16', '2018-03-30', 'Bapak Erlan', 'Perumahan Rockwell residence', 5, 0, '', '', 0),
(12, 'Pemasangan Atap Kanopi Alderon Dengan Palfon PVC', 'Dalam dunia konstruksi modern, kebutuhan akan material yang tahan lama dan estetis terus meningkat. Salah satu material yang semakin populer untuk keperluan atap dan plafon adalah atap Alderon dan plafon PVC. Klaster Pelamboyan di Alam Sutra menjadi salah satu contoh area hunian yang telah mengadopsi penggunaan material ini untuk meningkatkan kenyamanan dan keindahan rumah. Artikel ini akan membahas secara mendetail tentang proyek pemasangan kanopi atap Alderon dan plafon PVC di Klaster Pelamboyan, Alam Sutra, termasuk keunggulan material, proses pemasangan, dan hasil akhir yang dicapai.', '14 M', '2024-04-04', '2024-04-07', 'IBU ETI', 'Klaster pelamboyan alam sutra, Pd. Jagung, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15326', 5, 0, '087772211018', '', 0),
(13, 'Pemasangan Atap Kanopi Alderon Dengn Plafon PVC Ibu Putri', 'Pemasangan atap kanopi alderon dengn plafon pvc, model minimalis di rumah Ibu Putri Jl. Deper Raya No.12, Rawajati, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12750.', '14 M', '2024-04-17', '2024-04-21', 'Ibu Putri', 'Jl. Deper Raya No.12, Rawajati, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12750', 5, 0, '', '', 0),
(15, 'Pembuatan Dan  Pemasangan Kanopi Atap Alderon Plafon Pvc Dua Layer Permata Cimanggis', 'Pembuatan Dan Pemasangan Atap Kanopi Alderon plafon PVC dua layer Di  Blk. E3, Cilangkap, Kec. Tapos, Kota Depok, Jawa Barat 16459 Bapak Iyan. Dengan Menggunakan Atap Alderon Dan Plafon kanopi PVC.', '25 M', '2024-03-04', '2024-03-10', 'Bapak Iyan', 'Blk. E3, Cilangkap, Kec. Tapos, Kota Depok, Jawa Barat 16459', 5, 0, '', '', 0),
(16, 'PEMASANGAN KANOPI DENGAN ATAP ALDERON PLAFON PVC DI RAFFLESS HILL CIBUBUR', 'Pembuatan dan pemasangan atap kanopi alderon dengan palfon PVC di Jl. Alternatif Cibubur No.1 Blok HA, Harjamukti, Kec. Tapos, Kota Depok, Jawa Barat 16454. Rumah ibu Rahayu dengan volume 15m.', '15 M', '2024-01-09', '2024-01-14', 'Ibu Rahayu', 'Jl. Alternatif Cibubur No.1 Blok HA, Harjamukti, Kec. Tapos, Kota Depok, Jawa Barat 16454', 5, 0, '', '', 0),
(17, 'Pemasangan Atap Kanopi Dengan Plafon Pvc Di Cikeas Bogor', 'Pembuatan dan pemasangan kanopi atap alderon dengan plafon pvc, estimasi pemasangan dan pembuatan 1 minggu kerja, dengan volume lokasi pengerjaan 18 meter persegi, pemilik rumah bapak ongki, lokasi projek Babakan Jambu, CIKEAS, Kec. Sukaraja, Kab. Bogor.', '18m', '2024-02-12', '2024-02-18', 'Bapak Ongki', 'Babakan Jambu, CIKEAS, Kec. Sukaraja, Kab. Bogor', 5, 0, '', '', 0),
(18, 'Pemasangan Dan Pemuatan Kanopi Alderon minimalis di Caringin Bogor Pak Ahmad', 'Pemasangan kanopi Alderon Design minimalis mmodern di Caringin, Bogor, mencerminkan dedikasi yang mendalam dalam setiap tahap proyek, mulai dari konsultasi awal hingga penyelesaian akhir. waktu pengerjaan proyek 1 minggu. dengan menggunakan tim ahli. ', '9', '2024-02-11', '2024-02-18', 'Pak Ahamd', 'Jl. Mayjen HR. Edi Sukma KM. 17 No. 01 Caringin - Bogor 16730', 5, 0, '', '', 0),
(19, 'Pemasangan Kanopi Alderon Bapak Hansen Di Cibubur Bogor', 'Pembuatan dan Pemasangan Kanopi alderon bapak hansen Di perum ci bubur, menggunakan bahan besi hollow padat kelas premium, dengan timeline atau waktu pengerjaan 6 hari.', '16m', '2024-04-04', '2024-04-08', 'Bapak Hansesn', 'Perum cibubur, JW2V+6HC, Jl. Acropolis Utara, Nagrak, Kec. Gn. Putri, Kabupaten Bogor, Jawa Barat 16967', 5, 0, '', '', 0),
(20, 'Pembuatan Dan Pemasangan Atap Kanopi Alderon Kanopi Untuk Kolam Renang Bapak Patrio', 'Pembuatan Dan Pemasangan Atap Kanopi Alderon, Kanopi Untuk Kolam Renang Di Citra Sentul Raya: 3B, Exit Tol Sirkuit Sentul KM 31, Jl. River Park Boulevard Blok A, Desa Tangkil, Kecamatan Citeureup, Kabupaten Bogor. pemilik Rumah Bapak Patrio', '11m', '2024-05-01', '2024-05-05', 'Bapak Patrio', 'Citra Sentul Raya: 3B, Exit Tol Sirkuit Sentul KM 31, Jl. River Park Boulevard Blok A, Desa Tangkil, Kecamatan Citeureup, Kabupaten Bogor.', 5, 0, '', '', 0),
(21, 'Pembuatan Pagar Plat Cuting Laser', 'Proyek lainnya melibatkan pemasangan pagar di sebuah kantor dengan desain yang lebih kompleks dan artistik. Klien menginginkan pagar dengan motif alam yang rumit, menciptakan suasana yang harmonis dengan lingkungan sekitarnya. Pagar ini menjadi salah satu daya tarik utama dari bangunan, menunjukkan bagaimana desain plat cutting laser dapat digunakan untuk menciptakan karya seni yang fungsional.', '12', '2024-05-01', '2024-05-11', 'Pak Deri', 'Cireunghas, Sukabumi, Jawa Barat 43193, Indonesia. ', 6, 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ref_projek_images`
--

CREATE TABLE `ref_projek_images` (
  `id` int NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `id_projek` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_projek_images`
--

INSERT INTO `ref_projek_images` (`id`, `images`, `id_projek`) VALUES
(8, 'project1715659225.jpg', 9),
(9, 'project1715659252.jpg', 9),
(10, 'project1715682308.jpg', 11),
(11, 'project1715682324.jpeg', 11),
(12, 'project1715682342.jpg', 11),
(13, 'project1715835378.jpg', 12),
(14, 'project1715835398.jpg', 12),
(15, 'project1715835425.jpg', 12),
(16, 'project1715835448.jpg', 12),
(17, 'project1715835471.jpg', 12),
(18, 'project1715842577.jpg', 13),
(19, 'project1715842610.jpg', 13),
(20, 'project1715842637.jpg', 13),
(21, 'project1715882762.jpg', 15),
(22, 'project1715882785.jpg', 15),
(23, 'project1715882806.jpg', 15),
(24, 'project1715882830.jpg', 15),
(25, 'project1715957647.jpg', 16),
(26, 'project1715957664.jpg', 16),
(27, 'project1715957683.jpg', 16),
(28, 'project1716315055.png', 17),
(29, 'project1716315165.png', 17),
(30, 'project1716315194.png', 17),
(31, 'project1716315216.png', 17),
(32, 'project1716403921.png', 18),
(33, 'project1716403942.png', 18),
(34, 'project1716403967.png', 18),
(35, 'project1716404036.png', 18),
(36, 'project1716440553.png', 19),
(37, 'project1716440584.png', 19),
(38, 'project1716440610.png', 19),
(39, 'project1716455297.png', 20),
(40, 'project1716455342.png', 20),
(41, 'project1716455386.png', 20),
(42, 'project1716455413.png', 20),
(43, 'project1716455445.png', 20),
(44, 'project1716455480.png', 20),
(45, 'project1716455500.png', 20),
(46, 'project1717054864.png', 21),
(47, 'project1717054882.png', 21),
(48, 'project1717054901.png', 21),
(49, 'project1717054918.png', 21);

-- --------------------------------------------------------

--
-- Table structure for table `ref_projek_rab`
--

CREATE TABLE `ref_projek_rab` (
  `id` int NOT NULL,
  `id_uraian` int NOT NULL,
  `spesifikasi_bahan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `vol` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `satuan` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `harga_satuan` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `tot_harga` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `uraian` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_projek_rab`
--

INSERT INTO `ref_projek_rab` (`id`, `id_uraian`, `spesifikasi_bahan`, `vol`, `satuan`, `harga_satuan`, `tot_harga`, `uraian`) VALUES
(3, 2, 'rfffddff', '46.08', 'm3', '50000', '2304000', 'Pek. Galian Tanah Pondasi'),
(4, 2, '', '8', 'm3', '381635', '3053080', 'Pasangan Pondasi Batu Kosong (aanstamping) tebal 20 cm '),
(5, 2, '', '15.2', 'm3', '628675', '9555860', 'Pasangan Pondasi Batu adukan 1pc : 5 psr');

-- --------------------------------------------------------

--
-- Table structure for table `ref_projek_uraian`
--

CREATE TABLE `ref_projek_uraian` (
  `id` int NOT NULL,
  `uraian` varchar(160) COLLATE utf8mb4_general_ci NOT NULL,
  `id_projek` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_projek_uraian`
--

INSERT INTO `ref_projek_uraian` (`id`, `uraian`, `id_projek`) VALUES
(7, 'fbdbdbb', 9),
(9, 'bcbbbcb', 21);

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
(1, 'ANUGRAH', 'Jasa Konstruksi Las Dan Bangunan Sejabodetabek', 'ANUGRAH konstruksi adalah jasa konstruksi  bangunan dan las sejabodetabek', 'ANUGRAH@gmail.com', '085843544565', 'anugrah-log.png', 'JL.ANU NO ANU TANGERANG INDONESIIA', 'real estate ,renovasi rumah, renovasi gedung, Kanopi minimalis, kanopi termurah, kanopi alderon, kanopi kaca, bengkel las terdekat, kanopi tangerang,jasa bengkel las');

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
(4, 'BLOG', 'Latest From Our Blog', 'Latest Blog'),
(5, 'PORTFOLIO', 'Portfolio Pemasangan di Anugrah', 'dkdkkkd djcdcsdvsv sdvvdvdvdv ssddv');

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
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages_portfolio`
--
ALTER TABLE `pages_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_projek`
--
ALTER TABLE `ref_projek`
  ADD PRIMARY KEY (`id_projek`);

--
-- Indexes for table `ref_projek_images`
--
ALTER TABLE `ref_projek_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_projek_rab`
--
ALTER TABLE `ref_projek_rab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_projek_uraian`
--
ALTER TABLE `ref_projek_uraian`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pages_portfolio`
--
ALTER TABLE `pages_portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ref_projek`
--
ALTER TABLE `ref_projek`
  MODIFY `id_projek` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ref_projek_images`
--
ALTER TABLE `ref_projek_images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `ref_projek_rab`
--
ALTER TABLE `ref_projek_rab`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ref_projek_uraian`
--
ALTER TABLE `ref_projek_uraian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
