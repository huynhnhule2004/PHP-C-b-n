-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 02:15 PM
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
-- Database: `qlbh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `trangThai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `trangThai`) VALUES
(1, 'huynhnhule2004', '0364402449', 'huynhnhule2004@gmail.com', 'Hoạt động');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_hdct` int(11) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `gia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hd` int(11) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `tongTien` double NOT NULL,
  `tgDat` datetime NOT NULL,
  `id_kh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ho` varchar(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `trangThai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `moTa` text NOT NULL,
  `trangThai` varchar(255) NOT NULL,
  `creat_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `id_dm` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten`, `hinhAnh`, `gia`, `giamGia`, `soLuong`, `moTa`, `trangThai`, `creat_at`, `update_at`, `id_dm`, `id_admin`) VALUES
(1, 'ZODIAC T-SHIRT', 'ZODIAC_T-SHIRT_DARK_BROW', 49, 89, 1000, 'MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1, 1),
(2, 'TYPO T-SHIRT/RED', 'TYPO_T-SHIRT_RED', 49, 89, 1000, 'MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1, 1),
(3, 'TWISTT SHIRT ', 'TWIST_T-SHIRT_DARK_GREY', 49, 89, 1000, 'MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1, 1),
(4, 'SIMPLE T-SHIRT/PINK', 'SIMPLE_T-SHIRT_PINK', 49, 89, 1000, 'MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1, 1),
(5, 'SIMPLE T-SHIRT/BEIGE', 'SIMPLE_T-SHIRT_BEIGE', 49, 89, 1000, 'MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1, 1),
(6, 'SIMPLE T-SHIRT', 'SIMPLE_T-SHIRT_BABY_BLUE', 49, 89, 1000, 'MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1, 1),
(7, 'RAPPER T-SHIRT/RED', 'RAPPER_T-SHIRT_RED', 49, 89, 1000, 'MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1, 1),
(8, 'DIY T-SHIRT', 'DIY_T-SHIRT_DARK_BROW', 49, 89, 1000, 'MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1, 1),
(9, 'DISSOLVE T-SHIRT', 'DISSOLVE_3D_T-SHIRT_DARK_GREY', 49, 89, 1000, 'MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1, 1),
(10, 'BBOY T-SHIRT/RED', 'BBOY_T-SHIRT_RED', 49, 89, 1000, 'MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1, 1),
(11, 'ANCIENT T-SHIRT/RED', 'ANCIENT_ASIA_T-SHIRT_RED', 49, 89, 1000, 'MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1, 1),
(12, 'LINE T-SHIRT', '019_LINE_T-SHIRT_GRAY-BLACK', 49, 89, 1000, 'MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1, 1),
(13, 'BLOKECORE T-SHIRT', '011_BLOKECORE_T-SHIRT_WHITE-BLACK', 49, 89, 1000, 'MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1, 1),
(14, 'BLOKECORE T-SHIRT', '010_BLOKECORE_T-SHIRT_GRAY-BLACK', 49, 89, 1000, 'MATERIAL: PREMIUM COTTON. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 1, 1),
(23, 'SIMPLE SHIRT/BEIGE', 'SIMPLE_SHIRT_BEIGE', 69, 89, 500, 'Material: Premium Mango Silk. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 2, 1),
(24, 'SIMPLE SHIRT/MINT', 'SIMPLE_SHIRT_MINT', 69, 89, 500, 'Material: Premium Mango Silk. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 2, 1),
(25, 'SIMPLE SHIRT/PINK', 'SIMPLE_SHIRT_PINK', 69, 89, 500, 'Material: Premium Mango Silk. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 2, 1),
(26, 'SIMPLE SHIRT/GREEN', 'SIMPLE_SHIRT_STONE_GREEN', 69, 89, 500, 'Material: Premium Mango Silk. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 2, 1),
(27, 'SIMPLE SWEATER/BLACK', 'SIMPLE_SWEATER_BLACK', 99, 89, 800, 'Material: Premium French Terry Cotton.', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 3, 1),
(28, 'SIMPLE SWEATER/GRAY', 'SIMPLE_SWEATER_GRAY', 99, 89, 800, 'Material: Premium French Terry Cotton.', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 3, 1),
(29, 'SIMPLE SWEATER/NAVY', 'SIMPLE_SWEATER_NAVY', 99, 89, 800, 'Material: Premium French Terry Cotton.', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 3, 1),
(30, 'SIMPLE SWEATER/WHITE', 'SIMPLE_SWEATER_WHITE', 99, 89, 800, 'Material: Premium French Terry Cotton.', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 3, 1),
(31, 'SIMPLE HOODIE/BLACK', 'SIMPLE_HOODIE_BLACK', 159, 89, 800, 'Material: Premium French Terry Fabric.', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 4, 1),
(32, 'SIMPLE HOODIE/GRAY', 'SIMPLE_HOODIE_GRAY', 159, 89, 800, 'Material: Premium French Terry Fabric.', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 4, 1),
(33, 'SIMPLE HOODIE/NAVY', 'SIMPLE_HOODIE_NAVY', 159, 89, 800, 'Material: Premium French Terry Fabric.', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 4, 1),
(34, 'SIMPLE HOODIE/WHITE', 'SIMPLE_HOODIE_WHITE', 159, 89, 800, 'Material: Premium French Terry Fabric.', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 4, 1),
(35, 'SIMPLE POLO/BLACK', 'SIMPLE_POLO_BLACK', 89, 89, 1200, 'Material: Premium Cotton Spandex Crocodile. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 5, 1),
(36, 'SIMPLE POLO/CREAM', 'SIMPLE_POLO_CREAM', 89, 89, 1200, 'Material: Premium Cotton Spandex Crocodile. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 5, 1),
(37, 'SIMPLE POLO/NAVY', 'SIMPLE_POLO_NAVY', 89, 89, 1200, 'Material: Premium Cotton Spandex Crocodile. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 5, 1),
(38, 'SIMPLE POLO/PINK', 'SIMPLE_POLO_PINK', 89, 89, 1200, 'Material: Premium Cotton Spandex Crocodile. ', 'Còn hàng', '2024-03-14 00:00:00', '2024-03-14 00:00:00', 5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_hdct`),
  ADD KEY `cthd_fk_hd` (`id_hd`),
  ADD KEY `cthd_fk_sanpham` (`id_sp`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `hoadon_fk_khachhang` (`id_kh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `sanpham_fk_danhmuc` (`id_dm`),
  ADD KEY `sanpham_fk_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_hdct` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `cthd_fk_hd` FOREIGN KEY (`id_hd`) REFERENCES `hoadon` (`id_hd`),
  ADD CONSTRAINT `cthd_fk_sanpham` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_fk_khachhang` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_fk_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `sanpham_fk_danhmuc` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
