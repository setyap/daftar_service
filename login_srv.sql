-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2019 at 08:59 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_srv`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE `tbl_reg` (
  `id_reg` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `plat` varchar(8) NOT NULL,
  `t_mtr` varchar(20) NOT NULL,
  `srv` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `stat` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reg`
--

INSERT INTO `tbl_reg` (`id_reg`, `nama`, `telp`, `alamat`, `plat`, `t_mtr`, `srv`, `message`, `stat`) VALUES
(1, 'raisyah', '087885255869', 'Jakarta Timur', 'B234TLR', 'Vario', 'Servis Berat', 'test', 'Dikerjakan'),
(7, 'raisyah', '087885255860', 'Malang', 'B234TLZ', 'Vario', 'Servis Ringan', 'Kanvas REM', 'Selesai'),
(8, 'Rifky', '087885255869', 'Depok', 'B234TLR', 'Suzuki', 'Servis Ringan', 'test', 'Selesai'),
(9, 'Padli', '087885255860', 'Bekasi', 'B234TLP', 'Supra', 'Servis Berat', 'test', 'Terdaftar'),
(10, 'Anis', '087885255867', 'Jatinegara', 'B235TLR', 'Scoopy', 'Servis Ringan', 'tes', 'Terdaftar'),
(11, 'Bayu', '082298972719', 'Jakarta Timur', 'B123TZR', 'Revo', 'Servis Ringan', 'Busi', 'Dikerjakan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_level` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`) VALUES
(1, 'Front Office', 'FO@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1'),
(2, 'Service Advisor', 'SA@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD PRIMARY KEY (`id_reg`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  MODIFY `id_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
