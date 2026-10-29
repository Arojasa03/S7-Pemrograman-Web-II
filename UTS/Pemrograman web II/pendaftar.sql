-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2026 at 02:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendaftaran_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `tgl_input` date NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `pekerjaan_ortu` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_tes` varchar(50) NOT NULL,
  `mat` decimal(5,2) NOT NULL,
  `bing` decimal(5,2) NOT NULL,
  `umum` decimal(5,2) NOT NULL,
  `rata` decimal(5,2) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `tgl_input`, `kode`, `nama`, `jk`, `asal_sekolah`, `pekerjaan_ortu`, `tempat_lahir`, `tgl_lahir`, `tempat_tes`, `mat`, `bing`, `umum`, `rata`, `keterangan`, `created_at`) VALUES
(1, '2004-12-03', 'A2', 'Arojasa Harefa', 'Laki-Laki', 'SMA NEGERI 1 LOTU', 'Petani', 'HILIGEO', '1983-02-23', 'Gedung A', '89.00', '86.00', '90.00', '88.33', 'Lulus', '2026-10-29 13:17:53'),
(2, '2011-03-12', 'A2', 'Sania', 'Perempuan', 'SMA NEGERI 1 LOTU', 'Pejabat', 'HILIGEO', '1983-03-02', 'Gedung A', '45.00', '80.00', '70.00', '65.00', 'Cadangan', '2026-10-29 13:19:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
