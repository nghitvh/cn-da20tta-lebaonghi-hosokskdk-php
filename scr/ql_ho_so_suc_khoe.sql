-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 06:47 AM
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
-- Database: `ql_ho_so_suc_khoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `email`, `mat_khau`) VALUES
(1, 'Quản trị viên', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `bac_si`
--

CREATE TABLE `bac_si` (
  `ma_bac_si` int(11) NOT NULL,
  `ten_bac_si` text NOT NULL,
  `mat_khau` varchar(33) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bac_si`
--

INSERT INTO `bac_si` (`ma_bac_si`, `ten_bac_si`, `mat_khau`, `email`) VALUES
(1, 'Lê Bảo Nghi', '202cb962ac59075b964b07152d234b70', 'nghi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kham_suc_khoe`
--

CREATE TABLE `kham_suc_khoe` (
  `ma_kham_suc_khoe` int(11) NOT NULL,
  `tien_su_benh` text NOT NULL,
  `chieu_cao` varchar(6) NOT NULL,
  `can_nang` varchar(6) NOT NULL,
  `bmi` varchar(10) NOT NULL,
  `tuan_hoan` text NOT NULL,
  `ho_hap` text NOT NULL,
  `tieu_hoa` text NOT NULL,
  `than` text NOT NULL,
  `noi_tiet` text NOT NULL,
  `xuong` text NOT NULL,
  `than_kinh` text NOT NULL,
  `ngoai_khoa` text NOT NULL,
  `san_khoa` text NOT NULL,
  `mat_trai` varchar(10) NOT NULL,
  `mat_phai` varchar(10) NOT NULL,
  `mat_trai_co_kinh` varchar(10) NOT NULL,
  `mat_phai_co_kinh` varchar(10) NOT NULL,
  `benh_mat` varchar(50) NOT NULL,
  `tai_mui_hong` varchar(50) NOT NULL,
  `tai_phai` varchar(20) NOT NULL,
  `tai_trai` varchar(20) NOT NULL,
  `benh_ve_tai` varchar(50) NOT NULL,
  `rang_ham_mat` text NOT NULL,
  `ham_tren` varchar(20) NOT NULL,
  `ham_duoi` varchar(20) NOT NULL,
  `benh_ve_rang` varchar(20) NOT NULL,
  `da_lieu` varchar(50) NOT NULL,
  `ma_bac_si` int(11) NOT NULL,
  `ma_vien_chuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kham_suc_khoe`
--

INSERT INTO `kham_suc_khoe` (`ma_kham_suc_khoe`, `tien_su_benh`, `chieu_cao`, `can_nang`, `bmi`, `tuan_hoan`, `ho_hap`, `tieu_hoa`, `than`, `noi_tiet`, `xuong`, `than_kinh`, `ngoai_khoa`, `san_khoa`, `mat_trai`, `mat_phai`, `mat_trai_co_kinh`, `mat_phai_co_kinh`, `benh_mat`, `tai_mui_hong`, `tai_phai`, `tai_trai`, `benh_ve_tai`, `rang_ham_mat`, `ham_tren`, `ham_duoi`, `benh_ve_rang`, `da_lieu`, `ma_bac_si`, `ma_vien_chuc`) VALUES
(1, 'Không có', '170', '60', '22.5', 'Bình thường', 'Bình thường', 'Bình thường', 'Bình thường', 'Bình thường', 'Bình thường', 'Bình thường', 'Bình thường', 'Bình thường', '10', '8', '0', '0', 'Không có', 'Bình thường', 'Bình thường', 'Bình thường', 'Không có', 'Bình thường', 'Bình thường', 'Bình thường', 'Bình thường', 'Bình thường', 1, 1),
(2, 'Không có', '165', '55', '22.5', 'Bình thường', 'Bình thường', 'Bình thường', 'Bình thường', 'Bình thường', 'Bình thường', 'Bình thường', 'Bình thường', 'Bình thường', '3', '2', '0', '0', 'Cận nặng', 'Bình thường', 'Bình thường', 'Bình thường', 'Không có', 'Bình thường', 'Bình thường', 'Bình thường', 'Bình thường', 'Bình thường', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `thong_bao`
--

CREATE TABLE `thong_bao` (
  `ma_thong_bao` int(11) NOT NULL,
  `ten_thong_bao` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `file_dinh_kem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thong_bao`
--

INSERT INTO `thong_bao` (`ma_thong_bao`, `ten_thong_bao`, `noi_dung`, `file_dinh_kem`) VALUES
(1, 'Thông báo chiêu sinh lớp Kiểm soát nhiễm khuẩn', 'Tuyển sinh đợt 1 năm 2023 - 2024', 'a:2:{i:0;s:62:\"/uploads/thong-bao-chieu-sinh-lop-kiem-soat-nhiem-khuan-p2.png\";i:1;s:59:\"/uploads/thong-bao-chieu-sinh-lop-kiem-soat-nhiem-khuan.png\";}');

-- --------------------------------------------------------

--
-- Table structure for table `vien_chuc`
--

CREATE TABLE `vien_chuc` (
  `ma_vien_chuc` int(11) NOT NULL,
  `ten_vien_chuc` varchar(50) NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL,
  `cccd_ho_chieu` varchar(20) NOT NULL,
  `ngay_cap` date NOT NULL,
  `ho_khau_thuong_tru` varchar(100) NOT NULL,
  `cho_o_hien_tai` varchar(100) NOT NULL,
  `chuc_vu_hien_tai` varchar(50) NOT NULL,
  `noi_cong_tac` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mat_khau` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vien_chuc`
--

INSERT INTO `vien_chuc` (`ma_vien_chuc`, `ten_vien_chuc`, `gioi_tinh`, `cccd_ho_chieu`, `ngay_cap`, `ho_khau_thuong_tru`, `cho_o_hien_tai`, `chuc_vu_hien_tai`, `noi_cong_tac`, `email`, `mat_khau`) VALUES
(1, 'Lý Kim Lam', 0, '084123456789', '2023-12-13', 'Trà Vinh', 'Trà Vinh', 'Nhân viên văn phòng', 'TVU', 'lam@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Nguyễn Văn Nam', 0, '084123456789', '2023-12-11', 'Trà Vinh', 'Trà Vinh', 'Đoàn viên', 'Đoàn khoa KTCN', 'vana@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bac_si`
--
ALTER TABLE `bac_si`
  ADD PRIMARY KEY (`ma_bac_si`);

--
-- Indexes for table `kham_suc_khoe`
--
ALTER TABLE `kham_suc_khoe`
  ADD PRIMARY KEY (`ma_kham_suc_khoe`),
  ADD KEY `ma_vien_chuc` (`ma_vien_chuc`),
  ADD KEY `ma_bac_si` (`ma_bac_si`);

--
-- Indexes for table `thong_bao`
--
ALTER TABLE `thong_bao`
  ADD PRIMARY KEY (`ma_thong_bao`);

--
-- Indexes for table `vien_chuc`
--
ALTER TABLE `vien_chuc`
  ADD PRIMARY KEY (`ma_vien_chuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bac_si`
--
ALTER TABLE `bac_si`
  MODIFY `ma_bac_si` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kham_suc_khoe`
--
ALTER TABLE `kham_suc_khoe`
  MODIFY `ma_kham_suc_khoe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thong_bao`
--
ALTER TABLE `thong_bao`
  MODIFY `ma_thong_bao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vien_chuc`
--
ALTER TABLE `vien_chuc`
  MODIFY `ma_vien_chuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kham_suc_khoe`
--
ALTER TABLE `kham_suc_khoe`
  ADD CONSTRAINT `kham_suc_khoe_ibfk_1` FOREIGN KEY (`ma_vien_chuc`) REFERENCES `vien_chuc` (`ma_vien_chuc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kham_suc_khoe_ibfk_2` FOREIGN KEY (`ma_bac_si`) REFERENCES `bac_si` (`ma_bac_si`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
