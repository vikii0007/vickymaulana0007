-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 08:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` char(13) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `nama`, `alamat`, `nohp`, `jenis_kelamin`, `email`, `foto`) VALUES
(2, 'Erol Anton', 'Panjang Wetan', '0895379102996', 'Laki-Laki', 'erol@gmail.com', 'WhatsApp Image 2024-10-19 at 22.58.26_4176423f.jpg'),
(4, 'Vicky Maulana S', 'Pisang Sari', '0895762517', 'Laki-Laki', 'vikim674@gmail.com', 'piki.jpg'),
(5, 'Rezaid', 'Panjang Wetan', '089251863512', 'Laki-Laki', 'reza334@gmail.com', 'WhatsApp Image 2024-10-20 at 00.38.12_2506edc3.jpg'),
(6, 'Fazaa Coach', 'Krapyak', '08725378925', 'Laki-Laki', 'fazaa@gmail.com', 'WhatsApp Image 2024-10-20 at 00.38.15_c2da864f.jpg'),
(7, 'Fahmi ', 'Medono', '0886398534', 'Laki-Laki', 'fahmi998@gmail.com', 'WhatsApp Image 2024-10-20 at 00.38.14_be134e16.jpg'),
(8, 'Ipal Salto', 'Wonotunggal', '08935479623', 'Laki-Laki', 'ipall09@gmail.com', 'WhatsApp Image 2024-10-20 at 00.43.47_0dd04616.jpg'),
(9, 'Huriii Rendang', 'Panjang Wetan', '0837278237636', 'Laki-Laki', 'fhr@gmail.com', 'WhatsApp Image 2024-10-20 at 00.46.31_8c5ae11d.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
