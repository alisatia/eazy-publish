-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 01:47 AM
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
  `status` varchar(225) NOT NULL,
  `id_penulis` int(15) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `kategori`, `penulis`, `naskah`, `sinopsis`, `isbn`, `e_isbn`, `status`, `id_penulis`, `created`, `updated`) VALUES
(1, 'Fisika Dasar', 'Fisika', 'Ali', 'fisika_dasar.docx', '', '', '', 'Review', 10, '2023-02-19 17:58:24', '2023-02-19 19:32:37'),
(2, 'Matematika Dasar', 'Matematika', 'Ali', 'mtk.docx', '', '', '', 'Rejected', 10, '2023-02-19 17:58:24', '2023-02-19 20:37:30'),
(3, 'Kimia Dasar', 'Kimia', 'Ali', 'kimia.docx', '', '', '', 'Done', 10, '2023-02-19 17:58:24', '2023-02-19 19:47:51');

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
(9, 'ali@gmail.com', '', '', '', '', '', '', '', '', '', '', 'test1.jpg', '2023-02-19 17:56:42', NULL),
(10, 'satia@gmail.com', '', '', '', '', '', '', '', '', '', '', 'test1.jpg', '2023-02-19 17:56:42', '2023-02-19 17:57:08');

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
(15, 'satia@gmail.com', 'satia', '123', 'user', '2023-02-19 17:55:37', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

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
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `royalti`
--
ALTER TABLE `royalti`
  MODIFY `id_royalti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
