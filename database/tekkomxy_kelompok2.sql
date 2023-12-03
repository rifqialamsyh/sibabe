-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 02:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tekkomxy_kelompok2`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `item_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `deskripsi` varchar(2000) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`item_id`, `nama`, `status`, `deskripsi`, `foto`, `user_id`) VALUES
(21, 'Tas', 'Dijual', 'test', 'tas bekas.jpg', 5),
(22, 'Mouse', 'Dijual', 'test', 'mouse bekas.jpg', 5),
(23, 'kamera', 'Dijual', 'test', 'kamera bekas.jpg', 5),
(25, 'Baju bekas polos', 'Gratis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu diam non velit ultrices placerat et quis leo. Sed eu libero sem. Quisque ornare, nulla nec varius finibus, sapien enim varius metus, fringilla egestas justo ipsum quis nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus sit amet quam ac diam imperdiet ultrices. Aliquam erat volutpat. Ut dignissim porta arcu eget cursus. Aliquam tempus porttitor risus, sit amet interdum dolor volutpat et. ', 'baju bekas.jpg', 5),
(26, 'Hp Realme bekas', 'Dijual', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu diam non velit ultrices placerat et quis leo. Sed eu libero sem. Quisque ornare, nulla nec varius finibus, sapien enim varius metus, fringilla egestas justo ipsum quis nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus sit amet quam ac diam imperdiet ultrices. Aliquam erat volutpat. Ut dignissim porta arcu eget cursus. Aliquam tempus porttitor risus, sit amet interdum dolor volutpat et. ', 'hp.jpg', 5),
(27, 'Jaket bekas', 'Gratis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu diam non velit ultrices placerat et quis leo. Sed eu libero sem. Quisque ornare, nulla nec varius finibus, sapien enim varius metus, fringilla egestas justo ipsum quis nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus sit amet quam ac diam imperdiet ultrices. Aliquam erat volutpat. Ut dignissim porta arcu eget cursus. Aliquam tempus porttitor risus, sit amet interdum dolor volutpat et. ', 'jaket bekas.jpg', 5),
(28, 'Keyboard fantech', 'Dijual', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu diam non velit ultrices placerat et quis leo. Sed eu libero sem. Quisque ornare, nulla nec varius finibus, sapien enim varius metus, fringilla egestas justo ipsum quis nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus sit amet quam ac diam imperdiet ultrices. Aliquam erat volutpat. Ut dignissim porta arcu eget cursus. Aliquam tempus porttitor risus, sit amet interdum dolor volutpat et. ', 'keyboard.jpg', 5),
(29, 'Sepatu Compass', 'Dijual', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu diam non velit ultrices placerat et quis leo. Sed eu libero sem. Quisque ornare, nulla nec varius finibus, sapien enim varius metus, fringilla egestas justo ipsum quis nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus sit amet quam ac diam imperdiet ultrices. Aliquam erat volutpat. Ut dignissim porta arcu eget cursus. Aliquam tempus porttitor risus, sit amet interdum dolor volutpat et. ', 'sepatu.jpg', 5),
(30, 'Meja bekas', 'Gratis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu diam non velit ultrices placerat et quis leo. Sed eu libero sem. Quisque ornare, nulla nec varius finibus, sapien enim varius metus, fringilla egestas justo ipsum quis nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus sit amet quam ac diam imperdiet ultrices. Aliquam erat volutpat. Ut dignissim porta arcu eget cursus. Aliquam tempus porttitor risus, sit amet interdum dolor volutpat et. ', 'meja bekas.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `testimoni_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bintang` int(5) NOT NULL,
  `komentar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`testimoni_id`, `nama`, `bintang`, `komentar`) VALUES
(9, 'Rifqi', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dolor risus, mattis non nibh sit amet, lacinia volutpat orci. Nam et tincidunt felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed sollicitudin ante vitae ultricies fermentum. Integer commodo sem magna, a imperdiet odio dignissim a.'),
(10, 'Icam', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dolor risus, mattis non nibh sit amet, lacinia volutpat orci. Nam et tincidunt felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed sollicitudin ante vitae ultricies fermentum. Integer commodo sem magna, a imperdiet odio dignissim a.'),
(11, 'Ghalbin', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dolor risus, mattis non nibh sit amet, lacinia volutpat orci. Nam et tincidunt felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed sollicitudin ante vitae ultricies fermentum. Integer commodo sem magna, a imperdiet odio dignissim a.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nohp` varchar(21) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `nama`, `email`, `password`, `nohp`, `foto`) VALUES
(5, 'user', 'Ucup', 'ucup@gmail.com', '123', '081281221312', ''),
(9, 'admin', 'Admin SiBaBe', 'admin@sibabe.com', 'adminsibabe', '088971302915', 'team-5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `fk_barang_user` (`user_id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`testimoni_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `testimoni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_barang_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
