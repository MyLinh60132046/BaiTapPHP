-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 07:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlnv`
--

-- --------------------------------------------------------

--
-- Table structure for table `loainv`
--

CREATE TABLE `loainv` (
  `MALOAINV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TENLOAINV` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loainv`
--

INSERT INTO `loainv` (`MALOAINV`, `TENLOAINV`) VALUES
('LNV01', 'Giám đốc'),
('LNV02', 'Thư ký'),
('LNV03', 'Nhân viên');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MANV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `HO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TEN` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYSINH` date NOT NULL,
  `GIOITINH` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `DIACHI` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ANH` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MALOAINV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MAPHONG` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MANV`, `HO`, `TEN`, `NGAYSINH`, `GIOITINH`, `DIACHI`, `ANH`, `MALOAINV`, `MAPHONG`) VALUES
('NV01', 'Vũ', 'Ngọc Đoàn', '2003-01-01', 'Nam', 'Chợ Vĩnh Hải', 'vungocdoan.png', 'LNV01', 'PB01'),
('NV02', 'Diệp', 'Túy Dũng', '2003-02-02', 'Nam', 'Cam Ranh', 'dieptuydung.png', 'LNV02', 'PB02'),
('NV03', 'Võ', 'Minh Toàn', '1999-04-04', 'Nam', 'KTX', 'vominhtoan.png', 'LNV03', 'PB03');

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `MAPHONG` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TENPHONG` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`MAPHONG`, `TENPHONG`) VALUES
('PB01', 'Coder'),
('PB02', 'Tester'),
('PB03', 'Looter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loainv`
--
ALTER TABLE `loainv`
  ADD PRIMARY KEY (`MALOAINV`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MANV`),
  ADD KEY `fk_NV_LNV_1` (`MALOAINV`),
  ADD KEY `fk_NV_PB_1` (`MAPHONG`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`MAPHONG`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `fk_NV_LNV_1` FOREIGN KEY (`MALOAINV`) REFERENCES `loainv` (`MALOAINV`),
  ADD CONSTRAINT `fk_NV_PB_1` FOREIGN KEY (`MAPHONG`) REFERENCES `phongban` (`MAPHONG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
