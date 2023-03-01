-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 11:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `publishing`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `id_bahan` int(15) NOT NULL,
  `jenis` varchar(225) NOT NULL,
  `kategori` varchar(225) NOT NULL,
  `satuan` varchar(225) NOT NULL,
  `harga` int(15) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `jenis`, `kategori`, `satuan`, `harga`, `created`, `updated`) VALUES
(1, 'HVS 100 gr 65 x 100', 'Isi', 'RIM', 578500, '2023-02-25 13:58:37', NULL),
(2, 'HVS 100 gr 79 x 109', 'Isi', 'RIM', 766379, '2023-02-25 13:58:37', NULL),
(3, 'HVS 80 gr 79 x 109', 'Isi', 'RIM', 613103, '2023-02-25 13:58:37', NULL),
(4, 'HVS 80 gr 65 x 100', 'Isi', 'RIM', 462800, '2023-02-25 13:58:37', NULL),
(5, 'HVS 80 gr 61 x 86', 'Isi', 'RIM', 373515, '2023-02-25 13:58:37', NULL),
(6, 'HVS 70 gr 79 x 109', 'Isi', 'RIM', 536465, '2023-02-25 14:07:22', NULL),
(7, 'HVS 70 gr 65 x 100', 'Isi', 'RIM', 404950, '2023-02-25 14:07:22', NULL),
(8, 'HVS 70 gr 61 x 86', 'Isi', 'RIM', 326826, '2023-02-25 14:07:22', NULL),
(9, 'AP / KUNSDRUK 100 gr 65 x 90', 'Isi', 'RIM', 599625, '2023-02-25 14:07:22', NULL),
(10, 'AP / KUNSDRUK 100 gr 79 x 109', 'Isi Cover', 'RIM', 0, '2023-02-25 14:07:22', NULL),
(11, 'AP / KUNSDRUK 120 gr 65 x 100 Golden coin', 'Isi Cover', 'RIM', 799500, '2023-02-25 14:07:22', NULL),
(12, 'AP / KUNSDRUK 120 gr 79 x 109 Golden coin', 'Isi Cover', 'RIM', 1059153, '2023-02-25 14:07:22', NULL),
(13, 'AP / KUNSDRUK 150 gr 65 x 100 Golden coin', 'Isi Cover', 'RIM', 999153, '2023-02-25 14:07:22', NULL),
(14, 'AP / KUNSDRUK 150 gr 79 x 109 Golden coin', 'Isi Cover', 'RIM', 1323941, '2023-02-25 14:07:22', NULL),
(15, 'AP / KUNSDRUK 210 gr 65 x 100 Golden coin', 'Isi Cover', 'RIM', 1603875, '2023-02-25 14:07:22', NULL),
(16, 'AP / KUNSDRUK 210 gr 79 x 109 Golden coin', 'Isi Cover', 'RIM', 2124764, '2023-02-25 14:11:59', NULL),
(17, 'AP / KUNSDRUK 260 gr 65 x 100 Golden coin', 'Isi Cover', 'RIM', 2600000, '2023-02-25 14:11:59', NULL),
(18, 'AP / KUNSDRUK 260 gr 79 x 109 Golden coin', 'Isi Cover', 'RIM', 2630661, '2023-02-25 14:11:59', NULL),
(19, 'AP / KUNSDRUK 310 gr 65 x 100 Moorim', 'Isi Cover', 'RIM', 1512000, '2023-02-25 14:11:59', NULL),
(20, 'AP / KUNSDRUK 310 gr 79 x 109', 'Isi Cover', 'RIM', 0, '2023-02-25 14:11:59', NULL),
(21, 'Kertas BC Putih 160 gr 61 x 86 Pindo', 'Isi', 'RIM', 875000, '2023-02-25 14:11:59', NULL),
(22, 'BOOK PAPER 57.5 gr  65 x 100', 'Isi', 'RIM', 450000, '2023-02-25 14:11:59', NULL),
(23, 'BOOK PAPER 57.5 gr  79 x 109', 'Isi', 'RIM', 520000, '2023-02-25 14:11:59', NULL),
(24, 'BOOK PAPER 70 gr  79 x 109', 'Isi', 'RIM', 650000, '2023-02-25 14:11:59', NULL),
(25, 'BOOK PAPER 70 gr  65x 100', 'Isi', 'RIM', 0, '2023-02-25 14:11:59', NULL),
(26, 'BOOK PAPER 90 gr  61 x 86', 'Isi', 'RIM', 550000, '2023-02-25 14:11:59', NULL),
(27, 'Karton Abu', 'Cover', 'Pak', 275000, '2023-02-25 19:32:43', NULL),
(28, 'Art paper / Kunsdruk 210', 'Cover', 'RIM', 1345000, '2023-02-25 19:32:43', NULL),
(29, 'Sheetblad', 'Cover', 'RIM', 870000, '2023-02-25 19:32:43', NULL),
(30, 'Laminasi', 'Cover', 'Lembar', 150000, '2023-02-25 19:32:43', NULL),
(31, 'Foil / Embos', 'Cover', '500 cover', 150000, '2023-02-25 19:32:43', NULL),
(32, 'Spot UV', 'Cover', 'Lembar', 350000, '2023-02-25 19:32:43', NULL),
(33, 'Ring', 'Cover', 'Pcs', 1300, '2023-02-25 19:32:43', NULL),
(34, 'Selimut', 'Cover', 'RIM', 1850000, '2023-02-25 19:32:43', NULL),
(35, 'Art paper / Kunsdruk 260', 'Cover', 'Rim', 1850000, '2023-02-25 19:32:43', NULL),
(36, 'Pond', 'Cover', 'cm2', 500, '2023-02-25 19:32:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `btkl`
--

CREATE TABLE `btkl` (
  `id_btkl` int(15) NOT NULL,
  `alur` varchar(225) NOT NULL,
  `waktu` float NOT NULL,
  `pegawai` varchar(225) NOT NULL,
  `gaji` int(15) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `btkl`
--

INSERT INTO `btkl` (`id_btkl`, `alur`, `waktu`, `pegawai`, `gaji`, `created`, `updated`) VALUES
(9, 'Admin Digital', 1, 'Dhea', 4225000, '2023-02-25 20:22:43', NULL),
(10, 'Persiapan bahan', 1, 'Ohan ', 5195000, '2023-02-25 20:22:43', NULL),
(11, 'Potong Bahan', 1, 'Ujang Suryana', 4832000, '2023-02-25 20:22:43', NULL),
(12, 'Setting mesin Digital', 2, 'Randi', 5103000, '2023-02-25 20:22:43', NULL),
(13, 'Waktu tunggu mesin', 1, '', 0, '2023-02-25 20:22:43', NULL),
(14, 'Proses print', 0.1, 'Randi', 5103000, '2023-02-25 20:22:43', '2023-02-25 20:23:38'),
(15, 'Potong jadi', 1, 'Ujang Suryana', 4832000, '2023-02-25 20:22:43', NULL),
(16, 'Packing', 1, 'Sofyan', 4892500, '2023-02-25 20:22:43', NULL),
(17, 'Admin', 5, 'Dhea', 0, '2023-02-25 20:26:29', NULL),
(18, 'Persiapan bahan', 1, 'Ohan', 5195000, '2023-02-25 20:26:29', NULL),
(19, 'Potong bahan', 2, 'Ujang Suryana', 4832000, '2023-02-25 20:26:29', NULL),
(20, 'Setting mesin', 2, 'Randi', 5103000, '2023-02-25 20:26:29', NULL),
(21, 'Waktu tunggu mesin', 1, '', 0, '2023-02-25 20:26:29', NULL),
(22, 'Proses print2', 1, 'Randi', 5103000, '2023-02-25 20:26:29', '2023-02-26 02:06:59'),
(23, 'Setting mesin', 5, 'Randi', 5103000, '2023-02-25 20:26:29', NULL),
(24, 'Waktu tunggu mesin', 3, '', 0, '2023-02-25 20:26:29', NULL),
(25, 'Proses print isi', 2, 'Randi', 5103000, '2023-02-25 20:26:29', '2023-02-26 00:48:40'),
(26, 'Proses print cover', 2, 'Randi', 5103000, '2023-02-25 20:26:29', NULL),
(27, 'Imposisi , sizing', 1, 'Topik', 5633000, '2023-02-25 20:29:33', '2023-02-26 00:48:47'),
(28, 'Print plate , developing', 1, 'Topik', 5633000, '2023-02-25 20:29:33', NULL),
(29, 'Cetak 1 plate (SM 72)', 1, 'Ricky, Asep', 10206000, '2023-02-25 20:29:33', NULL),
(30, 'Cetak 1 plate (MO)', 1, 'Jojon', 4832000, '2023-02-25 20:29:33', NULL),
(31, 'Cetak 1 plate (GTO)', 1, 'Jojon, Asep', 4953000, '2023-02-25 20:29:33', NULL),
(32, 'Waktu tunggu mesin', 0, '', 0, '2023-02-25 20:29:33', NULL),
(33, 'Laminasi Doff/ Gloosy', 1, 'Sofyan , taufik ichsan , Ujang Sudjana', 4953000, '2023-02-25 20:29:33', NULL),
(34, 'Spot UV/ Foil / embos/ Vernish', 0, '', 0, '2023-02-25 20:29:33', NULL),
(35, 'Potong setengah jadi', 1, 'Ujang Suryana', 4832000, '2023-02-25 20:29:33', NULL),
(36, 'Culator', 1, 'Dadan, Izal', 4953000, '2023-02-25 20:29:33', NULL),
(37, 'Susun / sisip', 1, 'Dadan, Izal, Sofyan, taufik Ichsan', 4953000, '2023-02-25 20:32:50', NULL),
(38, 'Lipat', 1, 'Dadan, Izal, Sofyan, taufik Ichsan, Topik Hamzah, Ohan ', 4953000, '2023-02-25 20:32:50', NULL),
(39, 'Jahit', 1, 'Izal', 4953000, '2023-02-25 20:32:50', NULL),
(40, 'Press hasil jahit', 1, 'Dadan', 4953000, '2023-02-25 20:32:50', NULL),
(41, 'Rel cover ( manual)', 1, 'Sofyan, taufik Ichsan, Ujang Sudjana', 4953000, '2023-02-25 20:32:50', NULL),
(42, 'Proses Binding', 1, 'Cahaya, Dedi', 4953000, '2023-02-25 20:32:50', NULL),
(43, 'Hekter', 1, 'Sofyan, taufik Ichsan, Ujang Sudjana', 4953000, '2023-02-25 20:32:50', NULL),
(44, 'Potong jadi', 1, 'Ujang Suryana', 4832000, '2023-02-25 20:32:50', NULL),
(45, 'Pengeleman karton (manual)& proses hardcover', 1, 'Cahaya, Sofyan, taufik Ichsan, Ujang Sudjana, Topik Hamzah', 4953000, '2023-02-25 20:32:50', NULL),
(46, 'Sortir', 1, 'Dadan, Izal, Sofyan, taufik Ichsan, Topik Hamzah, Ohan ', 4953000, '2023-02-25 20:32:50', '2023-02-26 00:49:49'),
(47, 'Wrapping', 1, 'Sofyan, Dadan, ohan ', 4953000, '2023-02-25 20:32:50', NULL),
(48, 'Packing2', 1, 'Ohan, Taufik ichsan', 4953000, '2023-02-25 20:32:50', '2023-02-26 01:10:09'),
(49, 'Penerbitan', 0, 'Rina, Ripky, Yuda', 15400000, '2023-02-26 02:09:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(15) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `kategori` varchar(225) NOT NULL,
  `penulis` varchar(225) NOT NULL,
  `naskah` varchar(225) NOT NULL,
  `sinopsis` varchar(225) NOT NULL,
  `isbn` varchar(225) NOT NULL,
  `e_isbn` varchar(225) NOT NULL,
  `royalti` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `id_penulis` int(15) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `kategori`, `penulis`, `naskah`, `sinopsis`, `isbn`, `e_isbn`, `royalti`, `status`, `id_penulis`, `created`, `updated`) VALUES
(1, 'Fisika Dasar', 'Fisika', 'Ali', 'fisika_dasar.docx', '', '', '', '', 'Review', 10, '2023-02-19 17:58:24', '2023-02-24 19:58:18'),
(2, 'Matematika Dasar', 'Matematika', 'Ali', 'mtk.docx', '', '', '', '', 'MoU', 10, '2023-02-19 17:58:24', '2023-02-24 20:00:39'),
(3, 'Kimia Dasar', 'Kimia', 'Ali', 'kimia.docx', '', '', '', '', 'Editing & Layouting', 10, '2023-02-19 17:58:24', '2023-02-24 08:33:15'),
(20, 'Fisika Absolute', 'Fisika', 'M Agus Afr', '63f81f026ee8c7.85585206.docx', '', 'yes', 'yes', 'yes', 'Publish', 13, '2023-02-24 09:20:50', '2023-02-25 10:42:15'),
(21, 'Fisika Absolute', 'Fisika', 'Ariq R', '63f81f026ee8c7.85585206.docx', '', 'yes', 'yes', 'yes', 'Review', 0, '2023-02-24 09:20:50', NULL),
(22, 'Kota Abad 22', 'Perencanaan Perkotaan', 'M Agus Afr', '63f8229020f3c5.47040483.docx', '', 'yes', 'yes', 'yes', 'Publish', 13, '2023-02-24 09:36:00', '2023-02-24 20:52:55'),
(23, 'Kota Abad 22', 'Perencanaan Perkotaan', 'Rizkia N', '63f8229020f3c5.47040483.docx', '', 'yes', 'yes', 'yes', 'Review', 0, '2023-02-24 09:36:00', NULL),
(24, 'Kota Abad 22', 'Perencanaan Perkotaan', 'Ariq R', '63f8229020f3c5.47040483.docx', '', 'yes', 'yes', 'yes', 'Review', 0, '2023-02-24 09:36:00', NULL),
(25, 'Kimia Organik', 'Kimia', 'M Agus Afr', '63f82767c3a4d6.46620762.docx', '', 'yes', 'no', 'no', 'Rejected', 13, '2023-02-24 09:56:39', '2023-02-24 10:05:15'),
(26, 'Mekanka Kuantum', 'Fisika', 'Ahaii', '63f82ac0b78df5.52800887.docx', '', 'yes', 'yes', 'no', 'Publish', 14, '2023-02-24 10:10:56', '2023-02-24 19:37:57'),
(27, 'Manfaat Milk', 'Umum', 'M Agus Afr', '63f98aa3a6e265.62387065.docx', '', 'no', 'yes', 'no', 'Publish', 13, '2023-02-25 11:12:19', '2023-02-25 11:13:15'),
(28, 'Judul Contoh', 'Sains', 'Dhea Anita Wulandari', '63fc06bc91e7a6.02931161.docx', '', 'no', 'yes', 'yes', 'Publish', 15, '2023-02-27 08:26:20', '2023-02-27 08:27:28'),
(29, 'Buku Dummy', 'Contoh', 'Ripky, S.Pd.', '63fc0eb718bc70.37716119.docx', '', 'yes', 'yes', 'yes', 'Publish', 17, '2023-02-27 09:00:23', '2023-02-27 09:03:16'),
(30, 'Buku Dummy', 'Contoh', 'Rina', '63fc0eb718bc70.37716119.docx', '', 'yes', 'yes', 'yes', '', 0, '2023-02-27 09:00:23', NULL),
(31, 'Buku Dummy', 'Contoh', 'Goro', '63fc0eb718bc70.37716119.docx', '', 'yes', 'yes', 'yes', '', 0, '2023-02-27 09:00:23', NULL),
(32, 'Mekanika Kuantum II', 'Fisika', 'Fikky S', '63fc2ad4d6ca48.63902214.docx', '', 'yes', 'yes', 'yes', 'Publish', 19, '2023-02-27 11:00:20', '2023-02-27 11:10:30'),
(33, 'Mekanika Kuantum II', 'Fisika', 'Rizkia', '63fc2ad4d6ca48.63902214.docx', '', 'yes', 'yes', 'yes', '', 0, '2023-02-27 11:00:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buku_done`
--

CREATE TABLE `buku_done` (
  `id_done` int(15) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `penulis` varchar(225) NOT NULL,
  `mou` varchar(225) NOT NULL,
  `cover` varchar(225) NOT NULL,
  `harga` int(15) NOT NULL,
  `hpp` int(15) NOT NULL,
  `tahun` int(11) NOT NULL,
  `halaman` int(11) NOT NULL,
  `ukuran` varchar(225) NOT NULL,
  `bw` int(11) NOT NULL,
  `fc` int(11) NOT NULL,
  `status` varchar(225) NOT NULL,
  `id_buku` int(225) NOT NULL,
  `id_penulis` int(15) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku_done`
--

INSERT INTO `buku_done` (`id_done`, `judul`, `penulis`, `mou`, `cover`, `harga`, `hpp`, `tahun`, `halaman`, `ukuran`, `bw`, `fc`, `status`, `id_buku`, `id_penulis`, `created`, `updated`) VALUES
(14, 'Fisika Dasar', 'Ali', '', '', 0, 0, 0, 0, '0', 0, 0, '', 1, 10, '2023-02-24 17:11:46', NULL),
(28, 'Mekanka Kuantum', 'Ahaii', '', 'cover.jpg', 0, 0, 0, 0, '0', 0, 0, 'Publish', 26, 14, '2023-02-24 19:37:46', '2023-02-24 20:21:30'),
(30, 'Matematika Dasar', 'Ali', '', '', 0, 0, 0, 0, '', 0, 0, '', 2, 10, '2023-02-24 20:00:39', NULL),
(37, 'Kota Abad 22', 'M Agus Afr', '', 'cover.jpg', 0, 0, 0, 0, '', 0, 0, 'Publish', 22, 13, '2023-02-24 20:52:55', '2023-02-25 10:04:18'),
(38, 'Kota Abad 22', 'Rizkia N', '', 'noimage.jpg', 0, 0, 0, 0, '', 0, 0, 'Publish', 23, 0, '2023-02-24 20:52:55', '2023-02-24 20:52:55'),
(39, 'Kota Abad 22', 'Ariq R', '', 'noimage.jpg', 0, 0, 0, 0, '', 0, 0, 'Publish', 24, 0, '2023-02-24 20:52:55', '2023-02-24 20:52:55'),
(40, 'Fisika Absolute', 'M Agus Afr', '', 'noimage.jpg', 0, 0, 0, 0, '', 0, 0, 'Publish', 20, 13, '2023-02-25 10:42:15', '2023-02-25 10:42:15'),
(41, 'Fisika Absolute', 'Ariq R', '', 'noimage.jpg', 0, 0, 0, 0, '', 0, 0, 'Publish', 21, 0, '2023-02-25 10:42:15', '2023-02-25 10:42:15'),
(42, 'Manfaat Milk', 'M Agus Afr', '', 'noimage.jpg', 0, 0, 0, 0, '', 0, 0, 'Publish', 27, 13, '2023-02-25 11:13:15', '2023-02-25 11:13:15'),
(43, 'Judul Contoh', 'Dhea Anita Wulandari', '', 'cover.jpg', 0, 0, 0, 0, '', 0, 0, 'Publish', 28, 15, '2023-02-27 08:26:39', '2023-02-27 08:34:44'),
(53, 'Buku Dummy', 'Ripky, S.Pd.', '', 'cover.jpg', 0, 0, 0, 0, '', 0, 0, 'Publish', 29, 17, '2023-02-27 09:03:16', '2023-02-27 09:04:18'),
(54, 'Buku Dummy', 'Rina', '', 'noimage.jpg', 0, 0, 0, 0, '', 0, 0, 'Publish', 30, 0, '2023-02-27 09:03:16', '2023-02-27 09:03:16'),
(55, 'Buku Dummy', 'Goro', '', 'cover.jpg', 0, 0, 0, 0, '', 0, 0, 'Publish', 31, 0, '2023-02-27 09:03:16', '2023-02-27 09:03:52'),
(56, 'Mekanika Kuantum II', 'Fikky S', '', 'noimage.jpg', 0, 0, 0, 0, '', 0, 0, 'Publish', 32, 19, '2023-02-27 11:01:09', '2023-02-27 11:10:30'),
(57, 'Mekanika Kuantum II', 'Rizkia', '', 'noimage.jpg', 0, 0, 0, 0, '', 0, 0, 'Publish', 33, 0, '2023-02-27 11:01:09', '2023-02-27 11:10:30');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(15) NOT NULL,
  `email` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `instansi` varchar(225) NOT NULL,
  `jabatan` varchar(225) NOT NULL,
  `no_ktp` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `file_npwp` varchar(225) NOT NULL,
  `rekening` varchar(225) NOT NULL,
  `kontak_lain` varchar(225) NOT NULL,
  `biografi` varchar(225) NOT NULL,
  `file_foto` varchar(225) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `email`, `nama`, `phone`, `instansi`, `jabatan`, `no_ktp`, `file_ktp`, `file_npwp`, `rekening`, `kontak_lain`, `biografi`, `file_foto`, `created`, `updated`) VALUES
(9, 'ali@gmail.com', '', '123', 'ITB Press', 'Prof', '', '', '', '', '123', 'Ini adalah biografi', '63f5fec39ced52.54861741.jpg', '2023-02-19 17:56:42', '2023-02-22 19:16:29'),
(10, 'satia@gmail.com', 'Satia Sans', '0857235154', 'FTMD', 'Prof', '', '', '', '', '085723', 'ini adalah biografi', 'test1.jpg', '2023-02-19 17:56:42', '2023-02-24 08:35:34'),
(12, 'nenah@gmail.com', 'Nenah', '08572353', 'Waringin Sari', 'Karyawan', '', '', '', '', '08576432', 'Nenah seorang yang pintar', '63f6e8f94b8e33.33420445.jpg', '2023-02-23 11:16:57', '2023-02-23 11:18:58'),
(13, 'agus@gmail.com', 'M Agus Afr', '0857', 'ITB Press', 'Bisnis Analis', '', '', '', '', '0877', 'Biografi Agus', '63f81c1acb9459.44915975.jpg', '2023-02-24 09:06:35', '2023-02-24 09:08:26'),
(14, 'ahai@gmail.com', 'Ahaii', '0857', 'ITB Press', 'staf', '', '', '', '', '0877', 'Ini Biografi', '63f82a4a0949f6.95179677.jpg', '2023-02-24 10:06:57', '2023-02-24 10:08:58'),
(15, 'dhea@gmail.com', 'Dhea Anita Wulandari', '123', 'ITB Press', 'Staf', '', '', '', '', '223', 'Biografi Dhea', '63fc07f1b23619.42238889.jpg', '2023-02-27 08:24:50', '2023-02-27 08:31:38'),
(16, 'goro@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '2023-02-27 08:38:56', NULL),
(17, 'ripky@gmail.com', 'Ripky, S.Pd.', '123', 'ITB Press', 'Staff', '', '', '', '', '123', 'Ini Biografi Ripky', '63fc0ca26d5759.43361962.jpg', '2023-02-27 08:45:00', '2023-02-27 08:51:42'),
(18, 'rina@gmail.com', 'RI', '', '', '', '', '', '', '', '', '', '', '2023-02-27 09:32:55', '2023-02-27 09:33:11'),
(19, 'fikky@gmail.com', 'Fikky S', '123', 'ITB Press', 'Staf', '', '', '', '', '123', 'Ini Biografi Fikky', '63fc29eb481f68.89261974.jpg', '2023-02-27 10:55:31', '2023-02-27 10:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE `pilihan` (
  `id_option` int(15) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `kategori` varchar(225) NOT NULL,
  `A3` int(15) NOT NULL,
  `A4` int(15) NOT NULL,
  `B5` int(15) NOT NULL,
  `A5` int(15) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pilihan`
--

INSERT INTO `pilihan` (`id_option`, `nama`, `kategori`, `A3`, `A4`, `B5`, `A5`, `created`, `updated`) VALUES
(1, 'AP 210 gr', 'cover', 28, 28, 28, 28, '2023-02-25 19:34:02', '2023-02-25 19:55:27'),
(2, 'AP 260 gr', 'cover', 35, 35, 35, 35, '2023-02-25 19:34:02', '2023-02-25 21:04:34'),
(3, 'AP 310 gr', 'cover', 35, 35, 35, 35, '2023-02-25 19:34:02', '2023-02-25 19:55:48'),
(4, 'HVS 100', 'isi', 1, 1, 2, 1, '2023-02-25 19:52:32', '2023-02-25 19:56:27'),
(5, 'HVS 80', 'isi', 4, 4, 3, 4, '2023-02-25 19:52:32', '2023-02-25 19:57:17'),
(6, 'HVS 70', 'isi', 7, 7, 6, 7, '2023-02-25 19:52:32', '2023-02-25 19:57:38'),
(7, 'AP 100 ( Kunsdruk)', 'isi', 9, 9, 9, 9, '2023-02-25 19:52:32', '2023-02-25 19:57:59'),
(8, 'AP 120 ( Kunsdruk)', 'isi', 11, 11, 12, 11, '2023-02-25 19:52:32', '2023-02-25 19:58:27'),
(9, 'AP 150 ( Kunsdruk)', 'isi', 13, 13, 14, 13, '2023-02-25 19:52:32', '2023-02-25 19:58:42'),
(10, 'AP 210 ( Kunsdruk)', 'isi', 15, 15, 16, 15, '2023-02-25 19:52:32', '2023-02-25 19:58:58'),
(11, 'AP 260 ( Kunsdruk)', 'isi', 15, 15, 16, 15, '2023-02-25 19:52:32', '2023-02-25 19:59:14'),
(12, 'AP 310 ( Kunsdruk)', 'isi', 19, 19, 19, 19, '2023-02-25 19:52:32', '2023-02-25 19:59:32'),
(13, 'Kertas BC Putih 160 gr', 'isi', 21, 21, 21, 21, '2023-02-25 19:52:32', '2023-02-25 21:36:11'),
(14, 'Bookpaper 57.5 gr', 'isi', 22, 22, 23, 22, '2023-02-25 19:52:32', '2023-02-25 21:37:23'),
(15, 'Bookpaper 70 gr', 'isi', 24, 24, 24, 24, '2023-02-25 19:52:32', '2023-02-25 20:00:21'),
(16, 'Bookpaper 90 gr', 'isi', 26, 26, 26, 26, '2023-02-25 19:52:32', '2023-02-25 20:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_hpp`
--

CREATE TABLE `riwayat_hpp` (
  `id_riwayat` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `qty` int(15) NOT NULL,
  `fc` int(15) NOT NULL,
  `bw` int(15) NOT NULL,
  `ukuran` varchar(225) NOT NULL,
  `isi` varchar(225) NOT NULL,
  `cover` varchar(225) NOT NULL,
  `jenis` varchar(225) NOT NULL,
  `laminasi` varchar(225) NOT NULL,
  `finishing` varchar(225) NOT NULL,
  `uv` varchar(225) NOT NULL,
  `pajak` varchar(225) NOT NULL,
  `eks` int(15) NOT NULL,
  `total` int(15) NOT NULL,
  `id_user` int(15) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_hpp`
--

INSERT INTO `riwayat_hpp` (`id_riwayat`, `judul`, `qty`, `fc`, `bw`, `ukuran`, `isi`, `cover`, `jenis`, `laminasi`, `finishing`, `uv`, `pajak`, `eks`, `total`, `id_user`, `created`) VALUES
(1, 'buku-1', 100, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0.115', 267811, 28120197, 18, '2023-02-26 14:24:03'),
(2, 'buku-2', 100, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0.115', 267811, 28120197, 18, '2023-02-26 14:24:22'),
(3, 'buku-2', 100, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0.115', 267811, 28120197, 18, '2023-02-26 14:24:28'),
(4, 'buku-2', 100, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0', 240189, 25219907, 18, '2023-02-26 14:24:31'),
(5, 'buku-2', 100, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0.115', 267811, 28120197, 18, '2023-02-26 14:24:33'),
(6, 'buku-2', 100, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0', 240189, 25219907, 18, '2023-02-26 14:24:35'),
(7, 'buku-2', 100, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0.115', 267811, 28120197, 18, '2023-02-26 14:24:54'),
(8, 'buku-2', 100, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0.115', 267811, 28120197, 18, '2023-02-26 14:24:56'),
(9, 'buku-9', 100, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0.115', 267811, 28120197, 18, '2023-02-26 14:25:04'),
(10, 'buku-9', 100, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0.115', 267811, 28120197, 18, '2023-02-26 15:22:19'),
(11, 'buku-9', 1, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0.115', 1397943, 8387661, 18, '2023-02-26 15:28:07'),
(12, 'buku-12', 5, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0.115', 918493, 9184935, 18, '2023-02-26 15:36:23'),
(13, 'buku-12', 5, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0.115', 918493, 9184935, 18, '2023-02-26 18:24:49'),
(14, 'buku-12', 5, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0', 823761, 8237610, 18, '2023-02-26 18:24:55'),
(15, 'buku-12', 5, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0.115', 918493, 9184935, 18, '2023-02-26 18:24:57'),
(16, 'buku-12', 50, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0.115', 330077, 18154269, 18, '2023-02-26 18:25:06'),
(17, 'buku-12', 500, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0.115', 209639, 105868180, 18, '2023-02-26 18:25:12'),
(18, 'buku-12', 5, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0.115', 918493, 9184935, 18, '2023-02-26 18:25:15'),
(19, 'buku-12', 50, 30, 150, 'A3', 'HVS 100', 'AP 210 gr', 'Softcover', 'Glosi', 'Booklet', 'Tidak', '0.115', 330077, 18154269, 18, '2023-02-26 18:25:18'),
(20, 'Test-book', 50, 30, 150, 'B5', 'HVS 80', 'AP 210 gr', 'Softcover', 'Doff', 'Binding', 'Tidak', '0.115', 232828, 12805567, 18, '2023-02-26 18:25:45'),
(21, 'Test-book', 50, 30, 150, 'B5', 'HVS 80', 'AP 210 gr', 'Softcover', 'Doff', 'Booklet', 'Tidak', '0.115', 232828, 12805567, 18, '2023-02-26 18:26:16'),
(22, 'Test-book', 50, 30, 150, 'B5', 'HVS 80', 'AP 210 gr', 'Softcover', 'Doff', 'Binding', 'Tidak', '0.115', 232828, 12805567, 18, '2023-02-26 18:26:26'),
(23, 'Test-book', 50, 30, 150, 'B5', 'HVS 80', 'AP 210 gr', 'Softcover', 'Doff', 'Booklet', 'Tidak', '0.115', 232828, 12805567, 18, '2023-02-26 18:26:41'),
(24, 'Test-book', 50, 30, 150, 'B5', 'HVS 80', 'AP 210 gr', 'Softcover', 'Doff', 'Binding + Jahit', 'Tidak', '0.115', 241753, 13296437, 18, '2023-02-26 18:27:22'),
(25, 'buku-25', 50, 30, 150, 'B5', 'HVS 80', 'AP 210 gr', 'Softcover', 'Doff', 'Binding + Jahit + Hardcover', 'Tidak', '0.115', 244728, 13460060, 18, '2023-02-26 18:27:33'),
(26, 'buku-26', 120, 50, 100, 'A5', 'HVS 80', 'AP 260 gr', 'Softcover', 'Doff', 'Binding', 'Tidak', '0', 103299, 12912434, 20, '2023-02-27 08:30:48'),
(27, 'buku-27', 500, 40, 120, 'A5', 'HVS 80', 'AP 260 gr', 'Softcover', 'Doff', 'Binding', 'Tidak', '0', 69593, 35144715, 22, '2023-02-27 09:05:40'),
(28, 'buku-27', 500, 40, 120, 'A5', 'HVS 80', 'AP 260 gr', 'Softcover', 'Doff', 'Booklet', 'Tidak', '0.115', 77596, 39186357, 22, '2023-02-27 09:06:12'),
(29, 'buku-29', 123, 5, 200, 'A5', 'HVS 80', 'AP 260 gr', 'Hardcover', 'Doff', 'Binding', 'Tidak', '0', 118429, 15159020, 24, '2023-02-27 11:12:19'),
(30, 'buku-29', 123, 5, 200, 'A5', 'HVS 80', 'AP 260 gr', 'Hardcover', 'Doff', 'Booklet', 'Tidak', '0.115', 132049, 16902308, 24, '2023-02-27 11:13:19'),
(31, 'buku-31', 200, 40, 150, 'A5', 'AP 260 ( Kunsdruk)', 'AP 260 gr', 'Softcover', 'Doff', 'Binding', 'Tidak', '0', 120497, 24701901, 14, '2023-02-27 17:36:33'),
(32, 'buku-31', 1, 40, 150, 'A5', 'AP 260 ( Kunsdruk)', 'AP 260 gr', 'Softcover', 'Doff', 'Booklet', 'Tidak', '0.115', 1352015, 8112094, 14, '2023-02-27 17:36:48'),
(33, 'buku-31', 50, 40, 150, 'A5', 'AP 260 ( Kunsdruk)', 'AP 260 gr', 'Softcover', 'Doff', 'Booklet', 'Tidak', '0.115', 234481, 12896495, 14, '2023-02-27 17:37:00'),
(34, 'buku-31', 299, 40, 150, 'A5', 'AP 260 ( Kunsdruk)', 'AP 260 gr', 'Softcover', 'Doff', 'Booklet', 'Tidak', '0.115', 121990, 37085206, 14, '2023-02-27 17:37:52'),
(35, 'buku-31', 301, 40, 150, 'A5', 'AP 260 ( Kunsdruk)', 'AP 260 gr', 'Softcover', 'Doff', 'Booklet', 'Tidak', '0.115', 121828, 37279673, 14, '2023-02-27 17:37:58'),
(36, 'buku-31', 294, 40, 150, 'A5', 'AP 260 ( Kunsdruk)', 'AP 260 gr', 'Softcover', 'Doff', 'Booklet', 'Tidak', '0.115', 122812, 36720858, 14, '2023-02-27 17:38:08'),
(37, 'ohna dul', 294, 40, 150, 'A5', 'AP 260 ( Kunsdruk)', 'AP 260 gr', 'Softcover', 'Doff', 'Booklet', 'Tidak', '0.115', 122812, 36720858, 14, '2023-02-27 17:38:34'),
(38, 'buku-38', 500, 40, 150, 'A5', 'AP 260 ( Kunsdruk)', 'AP 260 gr', 'Softcover', 'Doff', 'Booklet', 'Tidak', '0.115', 112136, 56629121, 14, '2023-02-27 17:38:42'),
(39, 'buku-38', 500, 40, 150, 'A5', 'AP 260 ( Kunsdruk)', 'AP 260 gr', 'Softcover', 'Doff', 'Booklet', 'Tidak', '0.115', 112136, 56629121, 14, '2023-02-27 17:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `royalti`
--

CREATE TABLE `royalti` (
  `id_royalti` int(11) NOT NULL,
  `id_buku` int(15) NOT NULL,
  `id_penulis` int(15) NOT NULL,
  `no_order` varchar(225) NOT NULL,
  `tanggal` varchar(225) NOT NULL,
  `penulis` varchar(225) NOT NULL,
  `kode_buku` varchar(225) NOT NULL,
  `judul_buku` varchar(225) NOT NULL,
  `qty` int(15) NOT NULL,
  `jumlah` int(15) NOT NULL,
  `royalti` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `royalti`
--

INSERT INTO `royalti` (`id_royalti`, `id_buku`, `id_penulis`, `no_order`, `tanggal`, `penulis`, `kode_buku`, `judul_buku`, `qty`, `jumlah`, `royalti`) VALUES
(1, 1, 1, 'SO009', '25 Februari 2023', 'Ali', '123456', 'Fisika Dasar', 3, 30000, 13500),
(2, 1, 1, 'SO008', '25 Februari 2023', 'Ali', '123457', 'Fisika Fluida', 3, 30000, 13500),
(3, 1, 1, 'SO008', '25 Februari 2023', 'Ali', '123458', 'Kimia Dasar', 3, 30000, 13500),
(4, 1, 1, 'SO008', '26 Februari 2023', 'Ali', '123459', 'Kimia Organik', 3, 30000, 13500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(15) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `user` varchar(15) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`, `user`, `created`, `updated`) VALUES
(14, 'ali@gmail.com', 'ali', '123', 'user', '2023-02-19 17:53:30', '2023-02-19 17:54:56'),
(15, 'satia@gmail.com', 'satia', '123', 'user', '2023-02-19 17:55:37', NULL),
(17, 'nenah@gmail.com', 'nenah', '123', 'user', '2023-02-23 11:16:57', NULL),
(18, 'agus@gmail.com', 'agus', '123', 'user', '2023-02-24 09:06:35', NULL),
(19, 'ahai@gmail.com', 'ahai', '123', 'user', '2023-02-24 10:06:56', NULL),
(20, 'dhea@gmail.com', 'dhea', '123', 'user', '2023-02-27 08:24:50', NULL),
(21, 'goro@gmail.com', 'goro', '123', 'user', '2023-02-27 08:38:56', NULL),
(22, 'ripky@gmail.com', 'ripky', '123', 'user', '2023-02-27 08:45:00', NULL),
(23, 'rina@gmail.com', 'rina', '123', 'user', '2023-02-27 09:32:55', NULL),
(24, 'fikky@gmail.com', 'fikky', '123', 'user', '2023-02-27 10:55:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `btkl`
--
ALTER TABLE `btkl`
  ADD PRIMARY KEY (`id_btkl`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `buku_done`
--
ALTER TABLE `buku_done`
  ADD PRIMARY KEY (`id_done`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`id_option`);

--
-- Indexes for table `riwayat_hpp`
--
ALTER TABLE `riwayat_hpp`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `royalti`
--
ALTER TABLE `royalti`
  ADD PRIMARY KEY (`id_royalti`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan`
--
ALTER TABLE `bahan`
  MODIFY `id_bahan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `btkl`
--
ALTER TABLE `btkl`
  MODIFY `id_btkl` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `buku_done`
--
ALTER TABLE `buku_done`
  MODIFY `id_done` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `id_option` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `riwayat_hpp`
--
ALTER TABLE `riwayat_hpp`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `royalti`
--
ALTER TABLE `royalti`
  MODIFY `id_royalti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
