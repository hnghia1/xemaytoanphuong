-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 06:14 PM
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
-- Database: `xemaytoanphuong`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `hoten_admin` varchar(100) NOT NULL,
  `sdt_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email_admin`, `password_admin`, `hoten_admin`, `sdt_admin`) VALUES
(1, 'nghia@gmail.com', '1', 'Hoang Trong Nghia', '0705799891');

-- --------------------------------------------------------

--
-- Table structure for table `dong_xe`
--

CREATE TABLE `dong_xe` (
  `id_dongxe` int(11) NOT NULL,
  `ten_dongxe` varchar(50) NOT NULL,
  `mota_dongxe` text DEFAULT NULL,
  `trangthai_dongxe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dong_xe`
--

INSERT INTO `dong_xe` (`id_dongxe`, `ten_dongxe`, `mota_dongxe`, `trangthai_dongxe`) VALUES
(1, 'Xe số', 'kkk', 1),
(3, 'Xe tay ga', NULL, 1),
(4, 'Xe phân khối lớn', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kho`
--

CREATE TABLE `kho` (
  `id_kho` varchar(32) NOT NULL,
  `ten_kho` varchar(50) NOT NULL,
  `mo_ta` text NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai_xe`
--

CREATE TABLE `loai_xe` (
  `id_loaixe` int(11) NOT NULL,
  `ten_loaixe` varchar(50) NOT NULL,
  `mota_loaixe` text DEFAULT NULL,
  `trangthai_loaixe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai_xe`
--

INSERT INTO `loai_xe` (`id_loaixe`, `ten_loaixe`, `mota_loaixe`, `trangthai_loaixe`) VALUES
(1, 'Wave', 'aa', 1),
(2, 'SH', NULL, 1),
(3, 'Blade', NULL, 1),
(4, 'CBR', NULL, 1),
(5, 'Air Blade', NULL, 1),
(6, 'Vision', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `xe`
--

CREATE TABLE `xe` (
  `id_xe` int(11) NOT NULL,
  `id_loaixe` int(11) NOT NULL,
  `id_dongxe` int(11) NOT NULL,
  `ten_xe` varchar(100) NOT NULL,
  `mota_xe` text DEFAULT NULL,
  `gia_xe` int(11) NOT NULL,
  `anh_xe` varchar(100) NOT NULL,
  `khoiluong_xe` text DEFAULT NULL,
  `bachieu_xe` text DEFAULT NULL,
  `xang_xe` text DEFAULT NULL,
  `dongco_xe` text DEFAULT NULL,
  `congsuat_xe` text DEFAULT NULL,
  `tieuthunhienlieu_xe` text DEFAULT NULL,
  `hopso_xe` text DEFAULT NULL,
  `khoidong_xe` text DEFAULT NULL,
  `xylanh_xe` text DEFAULT NULL,
  `phuoctruoc_xe` text DEFAULT NULL,
  `phuocsau_xe` text DEFAULT NULL,
  `moment_xe` text DEFAULT NULL,
  `trangthai_xe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `xe`
--

INSERT INTO `xe` (`id_xe`, `id_loaixe`, `id_dongxe`, `ten_xe`, `mota_xe`, `gia_xe`, `anh_xe`, `khoiluong_xe`, `bachieu_xe`, `xang_xe`, `dongco_xe`, `congsuat_xe`, `tieuthunhienlieu_xe`, `hopso_xe`, `khoidong_xe`, `xylanh_xe`, `phuoctruoc_xe`, `phuocsau_xe`, `moment_xe`, `trangthai_xe`) VALUES
(3, 1, 1, 'HONDA WAVE ALPHA 110CC – PHIÊN BẢN TIÊU CHUẨN – TRẮNG', 'Wave Alpha được trang bị động cơ 110cc với hiệu suất vượt trội nhưng vẫn đảm bảo tiết kiệm nhiên liệu tối ưu, cho bạn thêm tự tin và trải nghiệm tốt nhất trên mọi hành trình. Thêm vào đó, 4 màu – 2 phiên bản cùng thiết kế bộ tem mới phong cách đầy ấn tượng trên xe giúp bạn thể hiện sự trẻ trung, năng động, thu hút mọi ánh nhìn.', 21899000, 'tieuchuan-trang-470x31450.jpg', '96 kg', '1.913 mm x 689 mm x 1.076 mm', '3,7 L', '4 kỳ, 1 xilanh, làm mát bằng không khí', '6,12 kW/ 7.500 vòng/ phút', '1,72 l/100km', 'Cơ khí, 4 số tròn', 'Điện', '109,2 cm3', 'Ống lồng, giảm chấn thủy lực', 'Lò xo trụ, giảm chấn thủy lực', '8,44 Nm/ 5.500 vòng/ phút', 1),
(4, 5, 3, 'HONDA AIR BLADE 160CC – PHIÊN BẢN TIÊU CHUẨN – ĐỎ XÁM', NULL, 40199000, '160-do-xam-470x34287.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 5, 3, 'HONDA AIRBLADE 160CC – PHIÊN BẢN ĐẶC BIỆT- XANH XÁM ĐEN', NULL, 40199000, '160-xanh-xam-den-470x34229.png', '114 kg', '1.890 x 686 x 1.116 mm', '4,4 lít', 'Xăng, 4 kỳ, 1 xy-lanh, làm mát bằng dung dịch', '11,2kW/8.000 vòng/phút', '2,3l/100km', 'Vô cấp', 'Điện', '156,9 cc', 'Ống lồng, giảm chấn thủy lực', 'Lò xo trụ, giảm chấn thủy lực', '14,6Nm/6.500 vòng/phút', 1),
(6, 6, 3, 'HONDA VISION 110CC – PHIÊN BẢN TIÊU CHUẨN- ĐEN', 'Thuộc phân khúc xe tay ga phổ thông, Vision luôn là mẫu xe quốc dân được yêu thích, đặc biệt trong giới trẻ nhờ kiểu dáng thời trang, trẻ trung và nhỏ gọn, khả năng tiết kiệm nhiên liệu vượt trội và vô cùng bền bỉ.', 52999000, 'tieuchuan-den-470x2649.jpg', '94 kg', '1.871 mm x 686 mm x 1.101 mm', '4,9 L', '4 kỳ, 1 xi lanh, làm mát bằng không khí', '6,59 kW/7.500 rpm', '1,85 l/100km', NULL, 'Điện', '109,5 cm3', 'Ống lồng, giảm chấn thủy lực', 'Lò xo trụ đơn, giảm chấn thủy lực', '9,29 N.m/6.000 rpm', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dong_xe`
--
ALTER TABLE `dong_xe`
  ADD PRIMARY KEY (`id_dongxe`);

--
-- Indexes for table `kho`
--
ALTER TABLE `kho`
  ADD PRIMARY KEY (`id_kho`);

--
-- Indexes for table `loai_xe`
--
ALTER TABLE `loai_xe`
  ADD PRIMARY KEY (`id_loaixe`);

--
-- Indexes for table `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`id_xe`),
  ADD KEY `id_dongxe` (`id_dongxe`),
  ADD KEY `id_loaixe` (`id_loaixe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dong_xe`
--
ALTER TABLE `dong_xe`
  MODIFY `id_dongxe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loai_xe`
--
ALTER TABLE `loai_xe`
  MODIFY `id_loaixe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `xe`
--
ALTER TABLE `xe`
  MODIFY `id_xe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `xe_ibfk_1` FOREIGN KEY (`id_dongxe`) REFERENCES `dong_xe` (`id_dongxe`),
  ADD CONSTRAINT `xe_ibfk_2` FOREIGN KEY (`id_loaixe`) REFERENCES `loai_xe` (`id_loaixe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
