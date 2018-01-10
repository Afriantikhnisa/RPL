-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 11:12 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_loker`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perusahaan`
--

CREATE TABLE `tbl_perusahaan` (
  `id_perusahaan` varchar(10) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `posisi` varchar(25) NOT NULL,
  `lulusan` varchar(25) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_perusahaan`
--

INSERT INTO `tbl_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `lokasi`, `posisi`, `lulusan`, `deskripsi`) VALUES
('1', 'PT Hwa Seung Indonesia', 'Banyubiru, Kalinyamatan Jepara', 'Marketing', 'SLTP Sederajat', 'Perusahan Garmen Membutuhkan Marketing 5 orang Wanita usia max 30 tahun, Laki-Laki 35 tahun Syarat Lamaran\r\n- CV\r\n- Photocopy KTP\r\n- Photocopy SKCK\r\n- Photocopy Kartu Kuning\r\nBerkas lamaran kirim via emal hwaseung@gmail.com'),
('2', 'PT Sengdam Jaya Abadi', 'Bandungrejo, Kalinyamatan Jepara', 'Finance', 'S1', 'Pabrik bangunan portabel di Bandungrejo membutuhkan Finance 2 orang, Di utamakan wanita lulusan S1 Akutansi, usia max 30tahun.\r\n Syarat Lamaran\r\n- CV\r\n- Photocopy KTP\r\n- Photocopy SKCK\r\n- Photocopy Kartu Kuning\r\nBerkas lamaran kirim via email sengdamjaya@'),
('3', 'PT.Kanindo Makmur Jaya', 'Jl. Jepara-Kudus KM.19 Pendosawalan Kalinyamatan Jepara', 'Operator', 'SLTA Sederajat', 'Pabrik Garmen membutuhkan Operator Produksi 18 orang, Wanita usia max 30 tahun, Laki-Laki 35 tahun\r\n Syarat Lamaran\r\n- CV\r\n- Photocopy KTP\r\n- Photocopy SKCK\r\n- Photocopy Kartu Kuning\r\nBerkas lamaran kirim via emal kanindo@gmail.com'),
('4', 'Mahoni Mebel Furniture Jepara', 'Jl.Paving Kampoeng Sembada Ukir Ds.Petekeyan Tahunan Jepara', 'Manajer', 'S1', 'Bergerak di bidang mebel membutuhkan 1 orang untuk dijadikan manajer usia max. Laki-Laki 35 tahun. Wanita 30 tahun.\r\n Syarat Lamaran\r\n- CV\r\n- Photocopy KTP\r\n- Photocopy SKCK\r\n- Photocopy Kartu Kuning\r\nBerkas lamaran kirim via email mahonimebel@gmail.com'),
('5', 'Jati Jepara', 'Jl.Raya No.36 Tahunan Kabupaten Jepara Jawa Tengah', 'Qc', 'SLTA Sederajat', 'Bergerak di bidang mebel membutuhkan 1 orang untuk dijadikan manajer usia max. Laki-Laki 35 tahun. Wanita 30 tahun.\r\n Syarat Lamaran\r\n- CV\r\n- Photocopy KTP\r\n- Photocopy SKCK\r\n- Photocopy Kartu Kuning\r\nBerkas lamaran kirim via email jatijepara@gmail.com'),
('6', 'Maxim Indowood', 'Desa Bandengan RT13 RW04 Bandengan Jepara', 'Manajer', 'S2', 'Bergerak di bidang mebel membutuhkan 1 orang untuk dijadikan manajer usia max. Laki-Laki 35 tahun. Wanita 30 tahun.\r\n Syarat Lamaran\r\n- CV\r\n- Photocopy KTP\r\n- Photocopy SKCK\r\n- Photocopy Kartu Kuning\r\nBerkas lamaran kirim via email maximindo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `level`) VALUES
('1', 'admin', 'admin', 'Admin'),
('2', 'user', 'user', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_perusahaan`
--
ALTER TABLE `tbl_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
