-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 03:30 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `stok_tersedia` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_inventaris`, `nama`, `jumlah`, `stok_tersedia`) VALUES
(2, 'LCD', 10, 10),
(10, 'Buku', 350, 350),
(11, 'Pensil', 600, 600),
(13, 'Laptop', 30, 30),
(14, 'Remote', 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(3) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`, `keterangan`) VALUES
(1, 'elektronik', 'segala alat yang menggunakan listrik'),
(2, 'mebel', 'mebel'),
(3, 'alat kebersihan', 'contoh sapu pel'),
(4, 'Alat Tulis', 'Untuk belajar mengajar');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(3) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `telp`, `alamat`) VALUES
(7, 'Tia', '086726371321', 'Jl.Soekarno-Hatta 12 Kediri'),
(8, 'Roi', '086789324131', 'Jl.Sulfat 45 Malang'),
(10, 'Tono', '08678924252', 'Jl.Danau Ranau 12 Malang'),
(11, 'Ria', '0830892443234', 'jl. Ahmad Yani 41 Malang'),
(14, 'ridho', '08122333643', 'bululawang');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_inventaris` int(3) NOT NULL,
  `id_pegawai` int(3) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `id_petugas` int(3) NOT NULL,
  `jumlah_pinjam` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_inventaris`, `id_pegawai`, `tgl_pinjam`, `tgl_kembali`, `status`, `id_petugas`, `jumlah_pinjam`) VALUES
(24, 2, 1, '2019-04-30', '2019-04-30', 'kembali', 1, 10),
(25, 5, 2, '2019-04-30', '2019-04-30', 'kembali', 1, 15),
(26, 6, 2, '2019-04-30', '2019-04-30', 'kembali', 1, 3),
(27, 2, 1, '2019-04-30', '2019-04-30', 'kembali', 1, 5),
(28, 5, 1, '2019-04-30', '2019-04-30', 'kembali', 1, 19),
(29, 2, 1, '2019-04-30', '2019-04-30', 'kembali', 1, 3),
(30, 2, 8, '2019-04-30', '2019-04-30', 'kembali', 1, 1),
(31, 2, 1, '2019-04-30', '2019-04-30', 'kembali', 1, 4),
(32, 2, 1, '2019-04-30', '2019-04-30', 'kembali', 1, 10),
(33, 5, 9, '2019-04-30', '2019-04-30', 'kembali', 2, 5),
(34, 2, 1, '2019-04-30', '2019-04-30', 'kembali', 1, 1),
(35, 2, 1, '2019-04-30', '2019-04-30', 'kembali', 1, 9),
(36, 2, 1, '2019-04-30', '2019-04-30', 'kembali', 1, 10),
(37, 2, 1, '2019-05-12', '2019-05-12', 'kembali', 2, 9),
(38, 2, 7, '2019-05-12', '2019-05-12', 'kembali', 2, 1),
(39, 2, 7, '2019-05-13', '2019-05-13', 'kembali', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(3) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `email`) VALUES
(2, 'Admin1', 'Admin1', '2e33a9b0b06aa0a01ede70995674ee23', 'admin1@gmail.com'),
(3, 'Admin2', 'Admin2', '21eed4f2e9ab214fdbf00a2a091d63c4', 'admin2@gmail.com'),
(4, 'saka', 'saka', '01677a6ba542c1b664deb29548cc75cf', 'saka@gmail.com'),
(5, 'candra', 'candra', '2614ae3c375c3095dc536283672548bd', 'candra@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD UNIQUE KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inventaris` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
