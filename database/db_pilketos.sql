-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 04:19 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pilketos`
--

-- --------------------------------------------------------

--
-- Table structure for table `batas_waktu`
--

CREATE TABLE `batas_waktu` (
  `batas` varchar(1) NOT NULL,
  `tgl` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batas_waktu`
--

INSERT INTO `batas_waktu` (`batas`, `tgl`) VALUES
('1', '20150922');

-- --------------------------------------------------------

--
-- Table structure for table `contestant`
--

CREATE TABLE `contestant` (
  `id_kandidat` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `jumlah_suara` varchar(25) NOT NULL DEFAULT '',
  `post` int(11) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `kelas` varchar(8) NOT NULL,
  `ttl` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `photo` text NOT NULL,
  `thn_ajaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contestant`
--

INSERT INTO `contestant` (`id_kandidat`, `name`, `jumlah_suara`, `post`, `nickname`, `kelas`, `ttl`, `visi`, `misi`, `photo`, `thn_ajaran`) VALUES
(8, 'Putri ayu', '3', 0, 'XI MM 3', '', '02 Mei 1997', 'maju tak gentar ', 'membela yang benar', 'XI MM 3_20200102.jpg', '2019/2020'),
(9, 'Citra Ningtiyas', '5', 0, 'XI MM 2', '', '05 Desember 1997', 'bersatu kita teguh', 'percerai kita berantahkan', 'XI MM 2_20200102.jpg', '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `data_pemilihan`
--

CREATE TABLE `data_pemilihan` (
  `id_pemilihan` int(5) NOT NULL,
  `id_siswa` varchar(5) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `id_kandidat` varchar(5) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `waktu` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `thn_ajaran` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `data_pemilihan`
--

INSERT INTO `data_pemilihan` (`id_pemilihan`, `id_siswa`, `id_kandidat`, `waktu`, `thn_ajaran`) VALUES
(79, '1389', '9', '2020-02-13 01:36:25', '2019/2020'),
(80, '1391', '8', '2020-02-13 01:36:48', '2019/2020'),
(78, '1390', '8', '2020-02-13 01:36:04', '2019/2020'),
(81, '1388', '9', '2020-02-21 06:25:10', '2019/2020'),
(82, '1387', '8', '2020-02-21 06:25:33', '2019/2020'),
(83, '1392', '9', '2020-02-21 06:58:28', '2019/2020'),
(84, '1398', '9', '2020-02-26 10:01:26', '2019/2020'),
(85, '1399', '9', '2020-02-26 10:08:20', '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `log_details`
--

CREATE TABLE `log_details` (
  `userid` int(3) NOT NULL,
  `date` varchar(30) NOT NULL,
  `log` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `log_details`
--

INSERT INTO `log_details` (`userid`, `date`, `log`) VALUES
(0, '02/01/20 08:55:58', 1),
(0, '02/01/20 09:17:16', 1),
(0, '02/01/20 09:20:21', 1),
(0, '02/01/20 09:36:02', 1),
(0, '05/01/20 11:42:46', 1),
(0, '17/01/20 10:48:32', 1),
(0, '17/01/20 10:48:59', 1),
(0, '17/01/20 10:49:42', 1),
(0, '17/01/20 11:19:54', 1),
(0, '17/01/20 11:38:40', 1),
(0, '20/01/20 11:43:06', 1),
(0, '12/02/20 09:08:27', 1),
(0, '13/02/20 01:28:48', 1),
(0, '13/02/20 01:31:31', 1),
(0, '13/02/20 01:32:19', 1),
(0, '13/02/20 01:33:43', 1),
(0, '13/02/20 01:34:08', 1),
(0, '13/02/20 01:35:58', 1),
(0, '13/02/20 01:36:21', 1),
(0, '13/02/20 01:36:43', 1),
(0, '21/02/20 06:25:05', 1),
(0, '21/02/20 06:25:29', 1),
(0, '21/02/20 06:58:14', 1),
(0, '26/02/20 10:00:37', 0),
(0, '26/02/20 10:01:22', 1),
(0, '26/02/20 10:03:22', 0),
(0, '26/02/20 10:03:36', 1),
(0, '26/02/20 10:04:05', 0),
(0, '26/02/20 10:04:18', 1),
(0, '26/02/20 10:05:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'osis', 'wirahadi');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `postname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `postname`) VALUES
(1, 'Ketua Osis');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id_siswa` int(11) NOT NULL,
  `matric_no` decimal(12,0) NOT NULL DEFAULT '0',
  `password` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `thn_ajaran` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id_siswa`, `matric_no`, `password`, `kelas`, `thn_ajaran`, `status`) VALUES
(1399, '17028', 'Lisa', 'XI MIPA 3', '', 1),
(1400, '17218', 'Roby', 'XII IIS 1', '', 0),
(1401, '17268', 'Deny', 'XI IIS 3', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `thn_ajaran`
--

CREATE TABLE `thn_ajaran` (
  `id` int(255) NOT NULL,
  `thn_ajaran` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `thn_ajaran`
--

INSERT INTO `thn_ajaran` (`id`, `thn_ajaran`, `status`) VALUES
(1, '2019/2020', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contestant`
--
ALTER TABLE `contestant`
  ADD PRIMARY KEY (`id_kandidat`),
  ADD KEY `thn_ajaran` (`thn_ajaran`);

--
-- Indexes for table `data_pemilihan`
--
ALTER TABLE `data_pemilihan`
  ADD PRIMARY KEY (`id_pemilihan`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_kandidat` (`id_kandidat`),
  ADD KEY `thn_ajaran` (`thn_ajaran`);

--
-- Indexes for table `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `password` (`password`);

--
-- Indexes for table `thn_ajaran`
--
ALTER TABLE `thn_ajaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contestant`
--
ALTER TABLE `contestant`
  MODIFY `id_kandidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `data_pemilihan`
--
ALTER TABLE `data_pemilihan`
  MODIFY `id_pemilihan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `password`
--
ALTER TABLE `password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1402;
--
-- AUTO_INCREMENT for table `thn_ajaran`
--
ALTER TABLE `thn_ajaran`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
