-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2015 at 10:07 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quanlybanhang`
--
CREATE DATABASE IF NOT EXISTS `quanlybanhang` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `quanlybanhang`;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `MaHD` int(11) NOT NULL AUTO_INCREMENT,
  `SoTien` int(11) NOT NULL,
  `NgayLapHD` date NOT NULL,
  `GhiChu` varchar(200) NOT NULL,
  `khachhang_MaKH` int(11) NOT NULL,
  `TinhTrang` tinyint(1) NOT NULL,
  PRIMARY KEY (`MaHD`),
  KEY `hoadon_khachhang` (`khachhang_MaKH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `SoTien`, `NgayLapHD`, `GhiChu`, `khachhang_MaKH`, `TinhTrang`) VALUES
(1, 5160000, '2015-08-05', 'Giao trước 4h', 2, 0),
(2, 2000000, '2015-08-06', 'Sđt 0932414091', 1, 0),
(3, 8600000, '2015-08-07', 'gọi trước 15 phút', 4, 0),
(4, 840000, '2015-08-08', 'Gọi trước 20p nhé shop', 5, 1),
(5, 1350000, '2015-08-09', 'Màu xanh', 5, 0),
(6, 5160000, '2015-08-10', 'Size 43', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoadonchitiet`
--

CREATE TABLE IF NOT EXISTS `hoadonchitiet` (
  `MaHD` int(11) NOT NULL AUTO_INCREMENT,
  `SoLuong` int(11) NOT NULL,
  `hoadon_MaHD` int(11) NOT NULL,
  `sanpham_MaSp` int(11) NOT NULL,
  PRIMARY KEY (`MaHD`),
  KEY `hoadonchitiet_hoadon` (`hoadon_MaHD`),
  KEY `hoadonchitiet_sanpham` (`sanpham_MaSp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hoadonchitiet`
--

INSERT INTO `hoadonchitiet` (`MaHD`, `SoLuong`, `hoadon_MaHD`, `sanpham_MaSp`) VALUES
(1, 2, 1, 2),
(2, 3, 2, 3),
(3, 2, 3, 5),
(4, 5, 4, 6),
(5, 1, 5, 2),
(6, 3, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `MaKH` int(11) NOT NULL AUTO_INCREMENT,
  `HoTenKH` varchar(50) NOT NULL,
  `DiaChi` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `SoDT` varchar(11) NOT NULL,
  PRIMARY KEY (`MaKH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `HoTenKH`, `DiaChi`, `Email`, `SoDT`) VALUES
(1, 'Mai Công Ngoãn', '08 Nguyễn Trung Trực, Sơn Trà, Đà Nẵng', 'phongnhadn1991@gmail.com', '0932414091'),
(2, 'Lê Thị Thùy Linh', '07/05 Ngô Quyền, Đà Nẵng', 'thuylinhks21@gmail.com', '0934065974'),
(3, 'Mai Tuấn Anh', '127K65 Thạc Giáng, Thanh Khê, Đà Nẵng', 'tuananh@gmail.com', '0905558889'),
(4, 'Nguyễn Thị Kim Chi', 'K84 Hòa Thuận Đông, Đà Nẵng', 'kimchi.nt@gmail.com', '01263434989'),
(5, 'Hoàng Tuấn', '21 An Cư A, Phước Mỹ, Đà Nẵng', 'tuanhoang.91@gmail.com', '0122434453');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `MaTheLoai` int(11) NOT NULL AUTO_INCREMENT,
  `TenTheLoai` varchar(200) NOT NULL,
  PRIMARY KEY (`MaTheLoai`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaTheLoai`, `TenTheLoai`) VALUES
(1, 'Mỹ phẩm'),
(2, 'Công nghệ'),
(3, 'Gia dụng'),
(4, 'Thời trang'),
(5, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `MaSp` int(11) NOT NULL AUTO_INCREMENT,
  `TenSp` varchar(100) NOT NULL,
  `MoTa` varchar(200) NOT NULL,
  `DonGia` int(11) NOT NULL,
  `url_img` varchar(500) NOT NULL,
  `loaisanpham_MaTheLoai` int(11) NOT NULL,
  PRIMARY KEY (`MaSp`),
  KEY `sanpham_loaisanpham` (`loaisanpham_MaTheLoai`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSp`, `TenSp`, `MoTa`, `DonGia`, `url_img`, `loaisanpham_MaTheLoai`) VALUES
(1, 'Dàn loa cao SonaPlay Nhật', 'Dàn loa cao cấp chính hãng SonaPlay Nhật', 3599000, './upload/images/Product1.png', 2),
(2, 'Tinh dầu nguyên chất Cedarwood', 'Được chiết xuất thiên nhiên, làm phụ liệu chế nước hoa', 2000000, './upload/images/Product 2.png', 1),
(3, 'Balo đẹp Columbia Packadillo', 'Để được Laptop 14 inch. Ngăn lưới 2 bên hông để nước.', 450000, './upload/images/Product 3.png', 4),
(4, 'Ghế nệm cho phòng khách', 'Chất liệu vải nhung chống bụi', 1200000, './upload/images/Product 4.png', 3),
(5, 'Tai nghe  Jabra Biz 2300', 'Tai nghe chất lượng cao, kết nối bluetooth', 420000, './upload/images/Product 5.png', 2),
(6, 'Nước hoa cao cấp Burberry', 'Mang phong cách và hình ảnh quý phái và sang trọng', 1720000, './upload/images/Product 6.png', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_khachhang` FOREIGN KEY (`khachhang_MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Constraints for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD CONSTRAINT `hoadonchitiet_hoadon` FOREIGN KEY (`hoadon_MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `hoadonchitiet_sanpham` FOREIGN KEY (`sanpham_MaSp`) REFERENCES `sanpham` (`MaSp`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_loaisanpham` FOREIGN KEY (`loaisanpham_MaTheLoai`) REFERENCES `loaisanpham` (`MaTheLoai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
