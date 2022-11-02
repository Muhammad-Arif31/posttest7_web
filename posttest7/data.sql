-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 10:24 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `komputer`
--

CREATE TABLE `komputer` (
  `id` int(11) NOT NULL,
  `namaproduk` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `kodebarang` int(20) NOT NULL,
  `stock` int(3) NOT NULL,
  `harga` int(9) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komputer`
--

INSERT INTO `komputer` (`id`, `namaproduk`, `category`, `kodebarang`, `stock`, `harga`, `gambar`, `waktu`) VALUES
(12, 'ram 64 gb', 'monitor', 815661, 1, 2, 'aethetic-img.jpg', '2022-10-27 12:39:52'),
(14, 'MSI', 'laptop', 222222, 7, 7, 'kv.jpg', '2022-10-27 13:09:42'),
(15, 'ROG', 'laptop', 987654, 5, 30000000, 'RGB01.png', '2022-11-02 17:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `priv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `priv`) VALUES
(1, 'admin', '$2y$10$jVNJ123qFZWgJx8KP0Us4.2/sJipQNU75JvrGDmfXOnyX62HpZ9Ou', 'admin'),
(2, 'user', '$2y$10$08zvY420Kpd0qdffFTHcaua6VkOkhKhwFknKU5uY3uTQLxxWR5OPO', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komputer`
--
ALTER TABLE `komputer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komputer`
--
ALTER TABLE `komputer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
