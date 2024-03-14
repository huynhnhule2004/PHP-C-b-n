-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 10:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ho` varchar(50) NOT NULL,
  `ten` text NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `trangThai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `ho`, `ten`, `sdt`, `diaChi`, `trangThai`) VALUES
(1, 'huynhnhule2004', '0364402449', 'huynhnhule2004@gmail.com', 'Lê Thị', 'Huỳnh Như', '0364402449', 'Lê Bình, Cái Răng, Cần Thơ', 'Hoạt động');

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `tieuDe` varchar(255) NOT NULL,
  `noiDung` varchar(1000) NOT NULL,
  `hinhAnh` varchar(50) NOT NULL,
  `create_at` varchar(50) NOT NULL,
  `update_at` varchar(50) NOT NULL,
  `trangThai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id`, `tieuDe`, `noiDung`, `hinhAnh`, `create_at`, `update_at`, `trangThai`) VALUES
(1, 'Cerave - Sự lựa chọn tuyệt vời cho da nhạy cảm', 'Sữa Rửa Mặt Cerave Foaming Cleanser kết cấu dạng gel tạo bọt rất lý tưởng để loại bỏ dầu thừa, bụi bẩn và lớp trang điểm với công thức nhẹ nhàng, không phá vỡ hàng rào bảo vệ tự nhiên của da và chứa các thành phần giúp duy trì độ ẩm cân bằng da. Cerave Foaming Cleanser chứa Ceramides, Axit Hyaluronic và Niacinamide giúp duy trì hàng rào bảo vệ da, khóa ẩm và làm dịu làn da của bạn.', 'cerave.jpn', 'Huỳnh Như', 'Huỳnh Như', 'Hiển thị');

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `id_dm` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `trangThai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmucsp`
--

INSERT INTO `danhmucsp` (`id_dm`, `ten`, `trangThai`) VALUES
(1, 'Mỹ phẩm', 'Hoạt động');

-- --------------------------------------------------------

--
-- Table structure for table `hdct`
--

CREATE TABLE `hdct` (
  `id_hdct` int(11) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `gia` float NOT NULL,
  `giamGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hdct`
--

INSERT INTO `hdct` (`id_hdct`, `id_hd`, `id_sp`, `soLuong`, `gia`, `giamGia`) VALUES
(1, 1, 1, 1, 290000, 0.05);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hd` int(11) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `tongTien` float NOT NULL,
  `TGDat` date NOT NULL,
  `id_kh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id_hd`, `sdt`, `diaChi`, `tongTien`, `TGDat`, `id_kh`) VALUES
(1, '0364402449', 'Lê Bình, Cái Răng, Cần Thơ', 280000, '2024-03-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ho` varchar(50) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `trangThai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `username`, `password`, `email`, `ho`, `ten`, `sdt`, `diaChi`, `trangThai`) VALUES
(1, 'huynhule223', '0364402449', 'huynhnhule2004@gmail.com', 'Lê Thị', 'Huỳnh Như', '0364402449', 'Lê Bình, Cái Răng, Cần Thơ', 'Đã thanh toán');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `hinhAnh` varchar(255) NOT NULL,
  `gia` float NOT NULL,
  `giamGia` float NOT NULL,
  `soLuong` int(11) NOT NULL,
  `mau` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `moTa` text NOT NULL,
  `trangThai` varchar(50) NOT NULL,
  `create_at` varchar(50) NOT NULL,
  `update_at` varchar(50) NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten`, `hinhAnh`, `gia`, `giamGia`, `soLuong`, `mau`, `size`, `moTa`, `trangThai`, `create_at`, `update_at`, `id_dm`) VALUES
(1, 'Sữa rửa mặt', 'cerave.jpg', 290000, 0.05, 200, 'xanh', '300ml', 'Sữa rữa mặt dịu nhẹ, được các bác sĩ da liễu khuyên dùng', 'Còn hàng', 'Huỳnh Như', 'Huỳnh Như', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`id_dm`);

--
-- Indexes for table `hdct`
--
ALTER TABLE `hdct`
  ADD PRIMARY KEY (`id_hdct`),
  ADD KEY `fk_hdct_hoadon` (`id_hd`),
  ADD KEY `fk_hdct_sanpham` (`id_sp`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `fk_hoadon_khachhang` (`id_kh`);

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
  ADD KEY `fk_sanpham_danhmucsp` (`id_dm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hdct`
--
ALTER TABLE `hdct`
  MODIFY `id_hdct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hdct`
--
ALTER TABLE `hdct`
  ADD CONSTRAINT `fk_hdct_sanpham` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hoadon_khachhang` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmucsp` FOREIGN KEY (`id_dm`) REFERENCES `danhmucsp` (`id_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
