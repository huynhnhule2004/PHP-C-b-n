-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 12:58 PM
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
-- Database: `quanlybanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `trangThai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `ten`, `trangThai`) VALUES
(1, 'T-SHIRTS', 'Còn hàng'),
(2, 'SHIRTS', 'Còn hàng'),
(3, 'SWEATERS', 'Còn hàng'),
(4, 'HOODIES', 'Còn hàng'),
(5, 'POLO', 'Còn hàng');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `hinhAnh` varchar(255) NOT NULL,
  `gia` double NOT NULL,
  `giamGia` double NOT NULL,
  `soLuong` double NOT NULL,
  `mau` varchar(255) NOT NULL,
  `size` varchar(20) NOT NULL,
  `moTa` text NOT NULL,
  `trangThai` varchar(255) NOT NULL,
  `creat_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten`, `hinhAnh`, `gia`, `giamGia`, `soLuong`, `mau`, `size`, `moTa`, `trangThai`, `creat_at`, `update_at`, `id_dm`) VALUES
(1, 'ANCIENT ASIA T-SHIRT/RED', 'ANCIENT_ASIA_T-SHIRT_RED', 49, 89, 1000, '', '', ' MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1),
(2, 'BBOY T-SHIRT/RED', 'BBOY_T-SHIRT_RED', 49, 89, 1000, '', '', ' MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1),
(3, 'DIY T-SHIRT/DARK BROW', 'DIY_T-SHIRT_DARK_BROW', 49, 89, 1000, '', '', ' MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1),
(4, 'ZODIAC T-SHIRT/DARK BROW', 'ZODIAC_T-SHIRT_DARK_BROW', 49, 89, 1000, '', '', ' MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1),
(5, 'SIMPLE SHIRT/BEIGE', 'SIMPLE_SHIRT_BEIGE', 69, 89, 500, '', '', ' Material: Premium Mango Silk. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 2),
(6, 'SIMPLE SHIRT/MINT', 'SIMPLE_SHIRT_MINT', 69, 89, 500, '', '', ' Material: Premium Mango Silk. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 2),
(7, 'SIMPLE SHIRT/PINK', 'SIMPLE_SHIRT_PINK', 69, 89, 500, '', '', ' Material: Premium Mango Silk. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 2),
(8, 'SIMPLE SHIRT/STONE GREEN', 'SIMPLE_SHIRT_STONE_GREEN', 69, 89, 500, '', '', ' Material: Premium Mango Silk. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 2),
(9, 'SIMPLE SWEATER/BLACK', 'SIMPLE_SWEATER_BLACK', 99, 89, 800, '', '', 'Material: Premium French Terry Cotton. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 3),
(10, 'SIMPLE SWEATER/GRAY', 'SIMPLE_SWEATER_GRAY', 99, 89, 800, '', '', ' Material: Premium French Terry Cotton. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 3),
(11, 'SIMPLE SWEATER/NAVY', 'SIMPLE_SWEATER_NAVY', 99, 89, 800, '', '', 'Material: Premium French Terry Cotton. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 3),
(12, 'SSIMPLE SWEATER/WHITE', 'SIMPLE_SWEATER_WHITE', 99, 89, 800, '', '', ' Material: Premium French Terry Cotton. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 3),
(13, 'SIMPLE HOODIE/BLACK', 'SIMPLE_HOODIE_BLACK', 159, 89, 800, '', '', ' Material: Premium French Terry Fabric. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 4),
(14, 'SSIMPLE HOODIE/GRAY', 'SIMPLE_HOODIE_GRAY', 159, 89, 800, '', '', ' Material: Premium French Terry Fabric. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 4),
(15, 'SIMPLE HOODIE/NAVY', 'SIMPLE_HOODIE_NAVY', 159, 89, 800, '', '', ' Material: Premium French Terry Fabric. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 4),
(16, 'SIMPLE HOODIE/WHITE', 'SIMPLE_HOODIE_WHITE', 159, 89, 800, '', '', ' Material: Premium French Terry Fabric. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 4),
(17, 'SIMPLE POLO/BLACK', 'SIMPLE_POLO_BLACK', 89, 89, 800, '', '', ' Material: Premium Cotton Spandex Crocodile.  ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 5),
(18, 'SIMPLE POLO/CREAM', 'SIMPLE_POLO_CREAM', 89, 89, 800, '', '', ' Material: Premium Cotton Spandex Crocodile.  ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 5),
(19, 'SIMPLE POLO/NAVY', 'SIMPLE_POLO_NAVY', 89, 89, 800, '', '', ' Material: Premium Cotton Spandex Crocodile.  ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 5),
(20, 'SIMPLE POLO/PINK', 'SIMPLE_POLO_PINK', 89, 89, 800, '', '', ' Material: Premium Cotton Spandex Crocodile.  ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `sanpham_ibfk_1` (`id_dm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
