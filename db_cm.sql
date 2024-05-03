-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 04:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cm`
--

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE `klien` (
  `id_klien` int(5) NOT NULL,
  `foto_klien` varchar(255) NOT NULL,
  `nama_klien` varchar(255) NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `testimoni` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`id_klien`, `foto_klien`, `nama_klien`, `jenis_kelamin`, `alamat`, `pekerjaan`, `testimoni`) VALUES
(1, '1583833931_klien1.jpg', 'Juliet', 'P', 'Medan', 'Programmer (Microsoft Company)', 'Saya telah menjadi anggota Club Motor Digital Talent selama beberapa tahun, dan saya sangat puas dengan layanan dan produk yang mereka tawarkan. Produk yang mereka jual selalu berkualitas tinggi dan sesuai dengan kebutuhan saya sebagai penggemar motor. Selain itu, komunitas yang mereka bangun juga sangat solid dan ramah.'),
(2, '938697122_klien2.jpg', 'Cyndy', 'P', 'Binjai', 'Network Engineer (Google Company)', 'Sebagai penggemar motor sejati, saya selalu mencari tempat yang bisa memberikan pengalaman berkendara yang memuaskan dan produk berkualitas. Club Motor Digital Talent tidak hanya menyediakan produk yang luar biasa, tetapi juga menyelenggarakan acara-acara yang mengasyikkan dan memungkinkan saya untuk terhubung dengan sesama pecinta motor.'),
(4, '168217176_klien3.jpg', 'Denise', 'P', 'Bogor', 'Programmer (Google Company)', 'Saya telah menggunakan produk dari Club Motor Digital Talent selama bertahun-tahun, dan saya sangat senang dengan kualitas dan keandalannya. Mereka tidak hanya menyediakan produk yang luar biasa, tetapi juga memberikan dukungan pelanggan yang luar biasa. Saya tidak ragu untuk merekomendasikan mereka kepada siapa pun yang mencari perlengkapan motor berkualitas.'),
(5, '1488078323_klien4.jpg', 'Charisa', 'P', 'Depok', 'Network Engineer (Microsoft Company)', 'Saya baru-baru ini bergabung dengan Club Motor Digital Talent, dan saya tidak bisa lebih senang dengan pengalaman saya. Mereka tidak hanya memiliki koleksi produk yang luar biasa, tetapi juga memiliki komunitas yang hangat dan ramah. Saya merasa sangat terhubung dan didukung dalam perjalanan saya sebagai penggemar motor.');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga_jual` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `foto_produk`, `nama_produk`, `kategori`, `harga_jual`) VALUES
(1, '1361596839_motor.jpg', 'Motor', 'Kendaraan', 150000000),
(2, '470839313_motor3.jpg', 'Motor Dilan', 'Motor', 87000000),
(4, '71607127_motor2.jpg', 'Motor Racing', 'Motor', 65000000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'Dio Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id_klien`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klien`
--
ALTER TABLE `klien`
  MODIFY `id_klien` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
