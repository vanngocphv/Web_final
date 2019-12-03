-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 21, 2019 lúc 04:43 AM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanly_mysql`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--
DROP DATABASE IF EXISTS quanly_mysql;
CREATE DATABASE quanly_mysql;

USE quanly_mysql;

DROP TABLE IF EXISTS `DANHGIA`;
CREATE TABLE IF NOT EXISTS `DANHGIA` (
  `IDTHV` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `IDPROD` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NOIDUNG` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TEN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NGAY` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DEM` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`DEM`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `SANPHAM`;
CREATE TABLE IF NOT EXISTS `SANPHAM` (
  `ID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `TenSP` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fileIMG` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `SANPHAM` (`ID`, `TenSP`, `Gia`, `fileIMG`) VALUES
('AO01', 'AO 01', '100000', 'img/Ao/ao1.jpg'),
('AO02', 'AO 02', '100000', 'img/Ao/ao2.jpg'),
('AO03', 'AO 03', '100000', 'img/Ao/ao3.jpg'),
('QU01', 'QUAN 01', '80000', 'img/Quan/quan1.jpg'),
('QU02', 'QUAN 02', '80000', 'img/Quan/quan2.jpg'),
('QU03', 'QUAN 03', '80000', 'img/Quan/quan3.jpg'),
('BL01', 'BALO 01', '120000', 'img/Balo-Giay/balo1.jpg'),
('BL02', 'BALO 02', '120000', 'img/Balo-Giay/balo2.jpg'),
('BL03', 'BALO 03', '120000', 'img/Balo-Giay/balo3.jpg'),
('AO00', 'AO 00', '100000', 'img/Ao/ao0.jpg'),
('AO04', 'AO 04', '100000', 'img/Ao/ao4.jpg'),
('AO05', 'AO 05', '100000', 'img/Ao/ao5.jpg'),
('QU00', 'QUAN 00', '80000', 'img/Quan/quan0.jpg'),
('QU04', 'QUAN 04', '80000', 'img/Quan/quan4.jpg'),
('QU05', 'QUAN 05', '80000', 'img/Quan/quan5.jpg'),
('BL00', 'BALO 00', '120000', 'img/Balo-Giay/balo0.jpg'),
('BL04', 'BALO 04', '120000', 'img/Balo-Giay/balo4.jpg'),
('BL05', 'BALO 05', '120000', 'img/Balo-Giay/balo5.jpg'),
('GI00', 'GIAY 00', '120000', 'img/Balo-Giay/giay0.jpg'),
('GI01', 'GIAY 01', '120000', 'img/Balo-Giay/giay1.jpg'),
('GI02', 'GIAY 02', '120000', 'img/Balo-Giay/giay2.jpg'),
('GI03', 'GIAY 03', '120000', 'img/Balo-Giay/giay3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

DROP TABLE IF EXISTS `THANHVIEN`;
CREATE TABLE IF NOT EXISTS `THANHVIEN` (
  `ID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenThV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiTK` bit(1) DEFAULT NULL,
  `MK` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `THANHVIEN` (`ID`, `TenThV`, `LoaiTK`, `MK`, `DiaChi`) VALUES
('AD01', 'ADMIN 01', b'1', '123', 'KHONG'),
('TV01', 'ThanhVien01', b'0', '1', 'Khong co');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
