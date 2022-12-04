-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2022 at 09:15 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nhom3_vuive`
--

-- --------------------------------------------------------

--
-- Table structure for table `adht`
--

CREATE TABLE `adht` (
  `MaADHT` int(10) NOT NULL auto_increment,
  `TenADHT` varchar(100) NOT NULL,
  `MaTK` varchar(50) NOT NULL,
  PRIMARY KEY  (`MaADHT`),
  KEY `MaTK` (`MaTK`),
  KEY `MaTK_2` (`MaTK`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adht`
--

INSERT INTO `adht` (`MaADHT`, `TenADHT`, `MaTK`) VALUES
(1, 'PHÚC FOLLO', 'PN');

-- --------------------------------------------------------

--
-- Table structure for table `admin_truong`
--

CREATE TABLE `admin_truong` (
  `MaAD` varchar(20) NOT NULL,
  `TenAD` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MaTruong` int(10) NOT NULL,
  PRIMARY KEY  (`MaAD`),
  KEY `MaTruong` (`MaTruong`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_truong`
--

INSERT INTO `admin_truong` (`MaAD`, `TenAD`, `Email`, `MaTruong`) VALUES
('ad123', 'NGUYỄN BẢO NAM', 'ntbn@gmail.com', 1),
('ad456', 'LƯƠNG TRỌNG KHUYẾN', 'ltk@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `cauhoiphanhoi`
--

CREATE TABLE `cauhoiphanhoi` (
  `MaCHPH` int(10) NOT NULL auto_increment,
  `NoiDung` varchar(1000) NOT NULL,
  `MaHS` int(10) NOT NULL,
  `MaGV` int(10) NOT NULL,
  `NgayGuiCH` datetime NOT NULL,
  PRIMARY KEY  (`MaCHPH`),
  KEY `MaHS` (`MaHS`,`MaGV`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `cauhoiphanhoi`
--

INSERT INTO `cauhoiphanhoi` (`MaCHPH`, `NoiDung`, `MaHS`, `MaGV`, `NgayGuiCH`) VALUES
(1, 'Cho em hỏi câu này với cô ạ!!!', 1, 2, '2022-05-13 18:11:28'),
(2, 'bacbo.png', 1, 2, '2022-05-13 18:15:28'),
(3, 'nhưng em không biết làm sao?', 1, 2, '2022-05-14 12:00:02'),
(4, 'Bài này sao không phải A mà lại chọn B v cô?', 1, 2, '2022-05-14 19:29:18'),
(5, 'dd.png', 1, 2, '2022-05-14 19:29:48'),
(6, 'Tại sao ở Nam Cực chỉ có chim cánh cụt sống ạ', 1, 2, '2022-05-18 20:23:32'),
(7, 'ccc.jpg', 1, 2, '2022-05-18 20:23:43'),
(8, 'Cho em hỏi bài xx', 1, 2, '2022-05-27 10:00:23'),
(9, 'Cho em hỏi 2<sup>x</sup> là bao nhiêu số 2 nhân lại với nhau ạ?', 1, 10, '2022-05-27 10:02:50'),
(10, 'Em hỏi bài này xíu!\r\n', 19, 2, '2022-05-27 10:42:42'),
(11, 'Em muốn hỏi bài 6 phần khoáng chất', 19, 2, '2022-05-27 10:44:26'),
(12, 'hhhh', 1, 2, '2022-05-29 12:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `MaGV` int(10) NOT NULL,
  `MaLop` int(10) NOT NULL,
  KEY `MaGV` (`MaGV`,`MaLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`MaGV`, `MaLop`) VALUES
(1, 1),
(1, 5),
(1, 11),
(1, 13),
(2, 1),
(2, 12),
(3, 2),
(3, 6),
(3, 11),
(4, 4),
(4, 4),
(5, 1),
(7, 13),
(10, 1),
(10, 2),
(10, 12),
(12, 12),
(14, 4),
(15, 1),
(16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `diem`
--

CREATE TABLE `diem` (
  `MaDiem` int(10) NOT NULL auto_increment,
  `TieuDe` varchar(20) NOT NULL,
  `Diem` float NOT NULL,
  `MaHS` int(10) NOT NULL,
  `MaLop` int(10) NOT NULL,
  `MaMon` int(10) NOT NULL,
  `MaGV` int(10) NOT NULL,
  `NgayXNDiem` varchar(50) NOT NULL,
  PRIMARY KEY  (`MaDiem`),
  KEY `MaHS` (`MaHS`,`MaLop`,`MaMon`,`MaGV`),
  KEY `MaHS_2` (`MaHS`),
  KEY `MaMon` (`MaMon`),
  KEY `MaGV` (`MaGV`),
  KEY `MaHS_3` (`MaHS`),
  KEY `MaMon_2` (`MaMon`),
  KEY `MaHS_4` (`MaHS`),
  KEY `MaHS_5` (`MaHS`),
  KEY `MaLop` (`MaLop`),
  KEY `MaMon_3` (`MaMon`),
  KEY `MaGV_2` (`MaGV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `diem`
--


-- --------------------------------------------------------

--
-- Table structure for table `filenopbaitl`
--

CREATE TABLE `filenopbaitl` (
  `MaBTL` int(10) NOT NULL auto_increment,
  `TieuDe` varchar(50) NOT NULL,
  `FileNop` varchar(50) NOT NULL,
  `MaHS` int(10) NOT NULL,
  `MaGV` int(10) NOT NULL,
  `MaLop` int(10) NOT NULL,
  `MaMon` int(10) NOT NULL,
  `NgayNopBai` datetime NOT NULL,
  PRIMARY KEY  (`MaBTL`),
  KEY `MaHS` (`MaHS`,`MaGV`,`MaLop`,`MaMon`),
  KEY `MaHS_2` (`MaHS`),
  KEY `MaGV` (`MaGV`),
  KEY `MaLop` (`MaLop`),
  KEY `MaMon` (`MaMon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `filenopbaitl`
--


-- --------------------------------------------------------

--
-- Table structure for table `giaovien`
--

CREATE TABLE `giaovien` (
  `MaGV` int(10) NOT NULL auto_increment,
  `TenGV` varchar(30) NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `SDT` varchar(15) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MaMonHoc` int(10) NOT NULL,
  `MaTruong` int(10) NOT NULL,
  `MaTK` varchar(50) NOT NULL,
  PRIMARY KEY  (`MaGV`),
  KEY `MaMonHoc` (`MaMonHoc`,`MaTK`),
  KEY `MaTK` (`MaTK`),
  KEY `MaTruong` (`MaTruong`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `giaovien`
--

INSERT INTO `giaovien` (`MaGV`, `TenGV`, `GioiTinh`, `SDT`, `DiaChi`, `Email`, `MaMonHoc`, `MaTruong`, `MaTK`) VALUES
(1, 'NGUYỄN THỊ NHÂN TÂM', 1, '974', 'Số AA,Q.4,TP.HCM', 'nhantam@gmail.com', 3, 1, 'NTNT'),
(2, 'NGUYỄN NGỌC HÂN', 1, '76', 'Số D,Q.4,TP.HCM', 'nnh@edu.com', 6, 1, 'NNH'),
(3, 'NGUYỄN TIẾN THÔNG', 0, '12345678', 'Số 5,Q.6,TP.HCM', 'ntt@gmail.com', 6, 1, 'NTT'),
(4, 'NGUYỄN THANH LONG', 0, '32453465', 'Số B,Q.6,TP.HCM', 'ntl@gmail.com', 1, 4, 'NL'),
(5, 'DƯƠNG THỊ THANH NHÀN', 1, '12345411', 'Số 8,Q.4,TP.HCM', 'dttn@gmail.com', 2, 1, 'DTTN'),
(6, 'TRẦN HẢI THANH THANH', 1, '3254343', 'Số 7,Q.3,TP.HCM', 'thtt@gmail.com', 3, 1, 'THTT'),
(7, 'VŨ HOÀNG PHONG', 0, '3121333', 'Số 5,Q.3,TP.HCM', 'vhp@gmail.com', 4, 1, 'VHP'),
(8, 'NGUYỄN HỮU THANH', 0, '32456737', 'Số B,Q.5,TP.HCM', 'nht@gmail.com', 5, 1, 'NHT'),
(9, 'NGUYỄN ANH THƠ', 1, '325927625', 'Số 4,Q.3,TP.HCM', 'na@gmail.com', 6, 1, 'AT'),
(10, 'TRẦN HỮU THẮNG', 0, '234322457', 'Số 24,Q.4,TP.HCM', 'tht@gmail.com', 1, 1, 'THT'),
(11, 'NGUYỄN BẢO BÌNH', 0, '324683656', 'Số XY,Q.3,TP.HCM', 'nbb@gmail.com', 7, 1, 'NBB'),
(12, 'NGUYỄN PHI VŨ', 0, '325875643', 'Số 06,Q.3,TP.HCM', 'npv@gmail.com', 23, 1, 'NPV'),
(13, 'NGUYỄN THỊ TUYẾT VÂN ', 1, '12354321', 'Số 8,Q.4,TP.HCM', 'nttv@gmail.com', 7, 1, 'NTTV'),
(14, 'LÂM HÙNG ANH', 0, '34567525', 'Q.6,TP.HCM', 'lha@gmail.com', 6, 4, 'LHA'),
(15, 'ĐẶNG THỊ THÙY DƯƠNG', 1, '324532674', 'Số 7,Q.3,TP.HCM', 'dttd@gmail.com', 10, 1, 'DTTD'),
(16, 'NGUYỄN HOÀNG VŨ ANH', 0, '32745345', 'Q.4,TP.HCM', 'nhva@gmail.com', 10, 1, 'NHVA'),
(17, 'NGUYỄN VIỆT PHƯƠNG', 0, '32456634', 'Q.4,TP.HCM', 'nvp@gmail.com', 10, 1, 'NVP'),
(18, 'TRẦN DIỆP HẰNG LY', 1, '032456543', 'A21 Nguyễn Oan,Q.Gò Vấp', 'hl@gmail.com', 23, 1, ''),
(19, 'TRẦN THỊ MỘNG TUYỀN', 1, '012345342', 'Q.3,TP.HCM', 'ttmt@gmail.com', 7, 1, ''),
(20, 'NGUYỄN THỊ HỒNG THẮM', 1, '043254625', 'Q.3,TP.HCM', 'ntht@gmail.com', 8, 1, ''),
(21, 'THANH VIỆT THẢO', 1, '043254632', 'Q.4,TP.HCM', 'tvt@gmail.com', 9, 1, ''),
(22, 'THÁI HỒNG VŨ THUẬN', 0, '043256432', 'Q.4,TP.HCM', 'thvt@gmail.com', 4, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `gkck`
--

CREATE TABLE `gkck` (
  `MaGKCK` int(10) NOT NULL auto_increment,
  `TieuDe` varchar(50) NOT NULL,
  `NgayLamBai` datetime NOT NULL,
  `NgayKetThuc` datetime NOT NULL,
  `ThoiGianLamBai` int(11) NOT NULL,
  `HanChot` datetime NOT NULL,
  `NoiDungCH` varchar(1000) NOT NULL,
  `QA` varchar(1000) NOT NULL,
  `QB` varchar(1000) NOT NULL,
  `QC` varchar(1000) NOT NULL,
  `QD` varchar(1000) NOT NULL,
  `Ans` varchar(1000) NOT NULL,
  `MaTTCM` int(10) NOT NULL,
  `MaMonHoc` int(10) NOT NULL,
  `MaNHCH` int(10) NOT NULL,
  PRIMARY KEY  (`MaGKCK`),
  KEY `MaTTCM` (`MaTTCM`,`MaMonHoc`),
  KEY `MaNHCH` (`MaNHCH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `gkck`
--


-- --------------------------------------------------------

--
-- Table structure for table `hocsinh`
--

CREATE TABLE `hocsinh` (
  `MaHS` int(10) NOT NULL auto_increment,
  `TenHS` varchar(50) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MaLop` int(10) NOT NULL,
  `MaTK` varchar(50) NOT NULL,
  PRIMARY KEY  (`MaHS`),
  KEY `MaLop` (`MaLop`,`MaTK`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `hocsinh`
--

INSERT INTO `hocsinh` (`MaHS`, `TenHS`, `NgaySinh`, `GioiTinh`, `DiaChi`, `Email`, `MaLop`, `MaTK`) VALUES
(1, 'NGUYỄN NHẬT TRƯỜNG', '2010-02-09', 0, 'Số A,Quận 3,Tp.HCM', 'abc@gmail.com', 1, 'NNTT'),
(2, 'NGUYỄN NGỌC PHÚC', '2010-06-09', 0, 'Số C,Quận 3,Tp.HCM', 'asd@gmail.com', 7, 'NNP'),
(3, 'NGUYỄN THANH QUỐC', '2010-06-25', 0, 'Số Z,Quận 3,Tp.HCM', 'ntq@gmail.com', 11, 'NTQ'),
(4, 'NGUYỄN ÁNH MAI', '2010-07-23', 1, 'Số C,Q.Tân Bình,TP.HCM', 'ams@gmail.com', 14, ''),
(5, 'NGUYỄN VÂN NGA', '2010-07-23', 1, 'Số 5,Q.3,TP.HCM', 'nvnga@gmail.com', 2, 'NVN'),
(6, 'NGUYỄN HỮU THỌ', '2010-03-12', 0, 'Số D,Q.Tân Bình,TP.HCM', 'nht@gmail.com', 14, ''),
(7, 'NGUYỄN CHIẾN ANH', '2010-04-12', 0, 'Số DEF,Q.6,TP.HCM', 'nac@gmail.com', 15, ''),
(8, 'NGUYỄN NAM A', '2010-04-12', 0, 'Số 2,Q.3,TP.HCM', 'nna@gmail.com', 6, 'NNA'),
(11, 'NGUYỄN HOÀI AN', '2010-03-12', 0, 'Số 6,Q.6,TP.HCM', 'nha@gmail.com', 4, 'NA'),
(12, 'NGUYỄN NAM ANH', '2010-06-12', 0, 'Số 24,Q.6,TP.HCM', 'nna@gmail.com', 4, 'NNamAnh'),
(13, 'CHÂU BẢO HÀ', '2010-02-03', 1, 'Số 4,Q.6,TP.HCM', 'cbh@gmail.com', 4, ''),
(14, 'NGUYỄN THỊ LAN ANH', '2010-09-04', 1, 'Số 3,Q.6,TP.HCM', 'ntla@gmail.com', 4, ''),
(15, 'NGUYỄN THANH THÁI MAI', '2010-02-04', 1, 'Số 5,Q.6,TP.HCM', 'nttm@gmail.com', 4, ''),
(16, 'NGUYỄN NHÃ YẾN THƯ', '2010-01-03', 1, 'Số 24,Q.6,TP.HCM', 'nnyt@gmail.com', 4, ''),
(17, 'NGUYỄN THANH BÌNH', '2010-02-04', 1, 'Số 7,Q.3,TP.HCM', 'ntb123@gmail.com', 1, 'NTB'),
(18, 'NGUYỄN THANH LƯƠNG', '2010-05-12', 1, 'Số CD,Quận 3,Tp.HCM', 'ntl@gmail.com', 12, 'NTL'),
(19, 'NGUYỄN Á TÂM', '2010-04-10', 1, 'Số 04,Q.3,TP.HCM', 'nat@gmail.com', 1, 'NAT'),
(22, 'NGUYỄN THANH CHÂU', '2010-04-03', 0, 'Q3,Tp.HCM', 'ntc123@gmail.com', 1, 'NUT'),
(23, 'NGUYỄN THANH HẬU', '0000-00-00', 0, 'Q.3,TP.HCM', 'nab@gmail.com', 1, ''),
(24, 'NGUYỄN THỊ THÚY HIỀN', '2010-12-04', 1, 'Q.3,TP.HCM', 'ntth@gmail.com', 2, ''),
(25, 'LÊ THỊ HỒNG TÂM', '2010-04-03', 1, 'Q.3,TP.HCM', 'ltht@gmail.com', 2, ''),
(26, 'NGUYỄN PHẠM TIẾN HIỆP', '2010-12-05', 0, 'Q.3,TP.HCM', 'npth@gmail.com', 2, ''),
(27, 'NGUYỄN THỊ LY NA', '2010-04-03', 1, 'Q.4,TP.HCM', 'ntln@gmail.com', 1, ''),
(28, 'LÊ THỊ HỒNG HÀ', '2010-12-02', 1, 'Q.Bình Thạnh,TP.HCM', 'lthh@gmail.com', 1, ''),
(29, 'NGUYỄN XUÂN HOÀNG', '2010-03-03', 0, 'Q.Gò Vấp,TP.HCM', 'nxh@gmail.com', 1, ''),
(30, 'NGUYỄN BÙI THẢO VY', '2010-04-03', 1, 'Q.5,TP.HCM', 'nbtv@gmail.com', 1, ''),
(31, 'ĐỖ CAO HOÀNG QUANG', '2010-12-03', 0, 'Q.3,TP.HCM', 'dchq@gmail.com', 1, ''),
(32, 'HOÀNG LÊ KHIẾT', '2010-05-02', 0, 'Q.3,TP.HCM', 'hlk@gmail.com', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `khoi`
--

CREATE TABLE `khoi` (
  `MaKhoi` int(10) NOT NULL auto_increment,
  `TenKhoi` varchar(50) NOT NULL,
  PRIMARY KEY  (`MaKhoi`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `khoi`
--

INSERT INTO `khoi` (`MaKhoi`, `TenKhoi`) VALUES
(1, '6'),
(2, '7'),
(3, '8'),
(4, '9');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `MaLop` int(10) NOT NULL auto_increment,
  `TenLop` varchar(20) NOT NULL,
  `MaKhoi` int(10) NOT NULL,
  `MaTruong` int(10) NOT NULL,
  PRIMARY KEY  (`MaLop`),
  KEY `MaKhoi` (`MaKhoi`),
  KEY `MaTruong` (`MaTruong`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaKhoi`, `MaTruong`) VALUES
(1, '6A1', 1, 1),
(2, '6A2', 1, 1),
(3, '6A3', 1, 1),
(4, '6/1', 1, 4),
(6, '6A4', 1, 1),
(7, '7A1', 2, 1),
(9, '6/2', 1, 4),
(11, '7A2', 2, 1),
(12, '8A1', 3, 1),
(13, '9A2', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `luottruycap`
--

CREATE TABLE `luottruycap` (
  `MaTruyCap` int(10) NOT NULL auto_increment,
  `TenTruyCap` varchar(50) NOT NULL,
  `NgayTruyCap` date NOT NULL,
  `SoLanTruyCap` int(10) NOT NULL,
  `MaAD` varchar(20) NOT NULL,
  PRIMARY KEY  (`MaTruyCap`),
  KEY `MaAD` (`MaAD`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `luottruycap`
--

INSERT INTO `luottruycap` (`MaTruyCap`, `TenTruyCap`, `NgayTruyCap`, `SoLanTruyCap`, `MaAD`) VALUES
(1, 'NTNT', '2022-05-05', 1, 'ad123'),
(2, 'NTNT', '2022-05-05', 1, 'ad123'),
(3, 'NTNT', '2022-05-05', 1, 'ad123'),
(4, 'NTNT', '2022-05-05', 1, 'ad123'),
(5, 'NNH', '2022-05-05', 1, 'ad123'),
(6, 'NTNT', '2022-05-05', 1, ''),
(7, 'NTBN', '2022-05-05', 1, ''),
(8, 'NTL', '2022-05-05', 1, ''),
(9, 'NNTT', '2022-05-05', 1, ''),
(10, 'NTL', '2022-05-05', 1, ''),
(11, 'NNH', '2022-05-08', 1, ''),
(12, 'NNh', '2022-05-08', 1, ''),
(13, 'THT', '2022-05-09', 1, ''),
(14, 'NTL', '2022-05-09', 1, ''),
(15, 'nat', '2022-05-11', 1, ''),
(16, 'NAT', '2022-05-11', 1, ''),
(17, 'NAT', '2022-05-11', 1, ''),
(18, 'NNTT', '2022-05-11', 1, ''),
(19, 'NAT', '2022-05-11', 1, ''),
(20, 'NAT', '2022-05-11', 1, ''),
(21, 'NNTT', '2022-05-12', 1, ''),
(22, 'NBN', '2022-05-17', 1, ''),
(23, 'NH', '2022-05-17', 1, ''),
(24, 'NH', '2022-05-17', 1, ''),
(25, 'NH', '2022-05-17', 1, ''),
(26, 'NH', '2022-05-17', 1, ''),
(27, 'NH', '2022-05-20', 1, ''),
(28, 'NDT', '2022-05-27', 1, ''),
(29, 'NNH', '2022-05-27', 1, ''),
(30, 'NNTT', '2022-05-27', 1, ''),
(31, 'NNTT', '2022-05-27', 1, ''),
(32, 'NNTT', '2022-05-27', 1, ''),
(33, 'NNTT', '2022-05-27', 1, ''),
(34, 'NNTT', '2022-05-27', 1, ''),
(35, 'NNTT', '2022-05-27', 1, ''),
(36, 'NNH', '2022-05-27', 1, ''),
(37, 'NAT', '2022-05-27', 1, ''),
(38, 'NNTT', '2022-05-27', 1, ''),
(39, 'NNTT', '2022-05-27', 1, ''),
(40, 'NNH', '2022-05-27', 1, ''),
(41, 'NTBN', '2022-05-27', 1, ''),
(42, 'NTBN', '2022-05-27', 1, ''),
(43, 'NH', '2022-05-27', 1, ''),
(44, 'NNH', '2022-05-27', 1, ''),
(45, 'NH', '2022-05-27', 1, ''),
(46, 'NTBN', '2022-05-27', 1, ''),
(47, 'NNH', '2022-05-27', 1, ''),
(48, 'NDT', '2022-05-27', 1, ''),
(49, 'NTBN', '2022-05-27', 1, ''),
(50, 'NDT', '2022-05-27', 1, ''),
(51, 'NDT', '2022-05-27', 1, ''),
(52, 'PN', '2022-05-27', 1, ''),
(53, 'NNH', '2022-05-27', 1, ''),
(54, 'NNTT', '2022-05-28', 1, ''),
(55, 'NNH', '2022-05-28', 1, ''),
(56, 'NH', '2022-05-28', 1, ''),
(57, 'NNTT', '2022-05-28', 1, ''),
(58, 'NNTT', '2022-05-28', 1, ''),
(59, 'NHVA', '2022-05-28', 1, ''),
(60, 'NHVA', '2022-05-28', 1, ''),
(61, 'NHVA', '2022-05-28', 1, ''),
(62, 'NNTT', '2022-05-28', 1, ''),
(63, 'NNTT', '2022-05-28', 1, ''),
(64, 'NNTT', '2022-05-28', 1, ''),
(65, 'NTBN', '2022-05-28', 1, ''),
(66, 'NHVA', '2022-05-28', 1, ''),
(67, 'NTBN', '2022-05-28', 1, ''),
(68, 'NHVA', '2022-05-28', 1, ''),
(69, 'NVP', '2022-05-28', 1, ''),
(70, 'NTBN', '2022-05-28', 1, ''),
(71, 'NTBN', '2022-05-28', 1, ''),
(72, 'PN', '2022-05-28', 1, ''),
(73, 'PN', '2022-05-28', 1, ''),
(74, 'NTBN', '2022-05-28', 1, ''),
(75, 'DTTD', '2022-05-28', 1, ''),
(76, 'TD', '2022-05-28', 1, ''),
(77, 'DTTD', '2022-05-29', 1, ''),
(78, 'NTBN', '2022-05-29', 1, ''),
(79, 'DTTD', '2022-05-29', 1, ''),
(80, 'NNH', '2022-05-29', 1, ''),
(81, 'DTTD', '2022-05-29', 1, ''),
(82, 'NH', '2022-05-29', 1, ''),
(83, 'NH', '2022-05-29', 1, ''),
(84, 'NL', '2022-05-29', 1, ''),
(85, 'LTQK', '2022-05-29', 1, ''),
(86, 'NL', '2022-05-29', 1, ''),
(87, 'THANHLONG', '2022-05-29', 1, ''),
(88, 'NNH', '2022-05-29', 1, ''),
(89, 'NH', '2022-05-29', 1, ''),
(90, 'NL', '2022-05-29', 1, ''),
(91, 'DTTD', '2022-05-29', 1, ''),
(92, 'TD', '2022-05-29', 1, ''),
(93, 'DTTD', '2022-05-29', 1, ''),
(94, 'PN', '2022-05-29', 1, ''),
(95, 'NTBN', '2022-05-29', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMonHoc` int(10) NOT NULL auto_increment,
  `TenMonHoc` varchar(50) NOT NULL,
  `AnhMon` varchar(50) NOT NULL,
  `MaKhoi` int(10) NOT NULL,
  PRIMARY KEY  (`MaMonHoc`),
  KEY `MaKhoi` (`MaKhoi`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaMonHoc`, `TenMonHoc`, `AnhMon`, `MaKhoi`) VALUES
(1, 'Toán', 'toan.jpg', 1),
(2, 'Vật Lý', 'ly.jpg', 1),
(3, 'Sinh Học', 'sinh.jpg', 1),
(4, 'Ngữ Văn', 'van.jpg', 1),
(5, 'Lịch Sử', 'su.jpg', 1),
(6, 'Địa Lý', 'dia.jpg', 1),
(7, 'GDCD', 'gdcd.jpg', 1),
(8, 'Công Nghệ', 'congnghe.jpg', 1),
(9, 'Tin Học', 'tin.jpg', 1),
(10, 'Tiếng Anh', 'global.jpg', 1),
(11, 'Toán', 'toan.jpg', 2),
(12, 'Vật Lý', 'ly.jpg', 2),
(13, 'Sinh Học', 'sinh.jpg', 2),
(14, 'Ngữ Văn', 'van.jpg', 2),
(15, 'Lịch Sử', 'su.jpg', 2),
(16, 'Địa Lý', 'dia.jpg', 2),
(17, 'GDCD', 'gdcd.jpg', 2),
(18, 'Công Nghệ', 'congnghe.jpg', 2),
(19, 'Tin Học', 'tin.jpg', 2),
(20, 'Tiếng Anh', 'global.jpg', 2),
(21, 'Toán', 'toan.jpg', 3),
(22, 'Vật Lý', 'ly.jpg', 3),
(23, 'Hóa Học', 'hoa.png', 3),
(24, 'Sinh Học', 'sinh.jpg', 3),
(25, 'Ngữ Văn', 'van.jpg', 3),
(26, 'Lịch Sử', 'su.jpg', 3),
(27, 'Địa Lý', 'dia.jpg', 3),
(28, 'GDCD', 'gdcd.jpg', 3),
(29, 'Công Nghệ', 'congnghe.jpg', 3),
(30, 'Tin Học', 'tin.jpg', 3),
(31, 'Tiếng Anh', 'global.jpg', 3),
(32, 'Toán', 'toan.jpg', 4),
(33, 'Vật Lý', 'ly.jpg', 4),
(34, 'Hóa Học', 'hoa.png', 4),
(35, 'Sinh Học', 'sinh.jpg', 4),
(36, 'Ngữ Văn', 'van.jpg', 4),
(37, 'Lịch Sử', 'su.jpg', 4),
(38, 'Địa Lý', 'dia.jpg', 4),
(39, 'GDCD', 'gdcd.jpg', 4),
(40, 'Công Nghệ', 'congnghe.jpg', 4),
(41, 'Tin Học', 'tin.jpg', 4),
(42, 'Tiếng Anh', 'global.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nganhangcauhoi`
--

CREATE TABLE `nganhangcauhoi` (
  `MaNHCH` int(10) NOT NULL auto_increment,
  `TieuDe` varchar(20) NOT NULL,
  `NoiDungCH` varchar(1000) NOT NULL,
  `QA` varchar(1000) NOT NULL,
  `QB` varchar(1000) NOT NULL,
  `QC` varchar(1000) NOT NULL,
  `QD` varchar(1000) NOT NULL,
  `Ans` varchar(1000) NOT NULL,
  `MaMonHoc` int(10) NOT NULL,
  PRIMARY KEY  (`MaNHCH`),
  KEY `MaMonHoc` (`MaMonHoc`),
  KEY `MaMonHoc_2` (`MaMonHoc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=221 ;

--
-- Dumping data for table `nganhangcauhoi`
--

INSERT INTO `nganhangcauhoi` (`MaNHCH`, `TieuDe`, `NoiDungCH`, `QA`, `QB`, `QC`, `QD`, `Ans`, `MaMonHoc`) VALUES
(1, 'TK', 'Châu lục nào lớn nhất thế giới?', 'Châu Á', 'Châu Mỹ', 'Châu Phi', 'Châu Đại Dương', 'A', 6),
(2, 'TK', 'Trái Đất quay quanh Mặt Trời hết bao nhiêu ngày?', '88 ngày', '235 ngày', '365 ngày', '700 ngày', 'C', 6),
(3, 'TK', 'Nhiệt độ thấp nhất của châu Nam Cực là bao nhiêu độ C?', '-37oC', '-54oC', '-75oC', '-90oC', 'D', 6),
(4, 'TK', 'Trong hệ Mặt Trời,Trái Đất ở vị trí nào theo thứ tự xa dần Mặt Trời?', 'Vị trí thứ 2', 'Vị trí thứ 3', 'Vị trí thứ 4', 'Vị trí thứ 5', 'B', 6),
(5, 'TK', 'Trái Đất có dạng hình gì?', 'Hình Elip', 'Hình Elip Cầu', 'Hình Cầu', 'Hình Xoắn Ốc', 'C', 6),
(6, 'TK', 'Trái Đất có bán kính ở xích đạo là?', '6356 km', '6387 km', '6378 km', '6365 km', 'B', 6),
(7, 'TK', 'Mặt Trời và 8 hành tinh chuyển động xung quanh được gọi là?', 'Thiên Hà', 'Hệ Mặt Trời', 'Dải Ngân Hà', 'Chòm Sao', 'B', 6),
(8, 'TK', 'Một tập hợp rất nhiều thiên thể cùng với bụi,khí và bức xạ điện từ được gọi là?', 'Vũ Trụ', 'Thiên Thạch', 'Thiên Hà', 'Dải Ngân Hà', 'C', 6),
(9, 'TK', 'Hành tinh ở vị trí thứ 4 trong hệ Mặt Trời là?', 'Sao Thủy', 'Sao Mộc', 'Sao Thổ', 'Sao Hỏa', 'D', 6),
(10, 'TK', 'Hành tinh nào trong hệ Mặt Trời có sự sống?', 'Sao Kim', 'Trái Đất', 'Sao Thủy', 'Sao Hải Vương', 'B', 6),
(11, 'TK', 'Khu vực nào trên Trái Đất có ngày và đêm kéo dài 6 tháng?', 'Đường xích đạo Trái Đất', 'Hai vòng chí tuyến B-N', 'Hai cực Trái Đất', 'Hai vòng cực Trái Đất', 'D', 6),
(12, 'TK', 'Mùa nào trong năm có ngày dài hơn đêm?', 'Xuân', 'Hạ', 'Thu', 'Đông', 'B', 6),
(13, 'TK', 'Sao Băng thực chất là sao gì?', 'Sao Hỏa', 'Sao Mai', 'Sao Chổi', 'Sao Hôm', 'C', 6),
(14, 'TK', 'Vào ngày 22/12 ở châu Nam Cực thời gian ban ngày diễn ra?', '12 giờ bằng thời gian ban đêm', '24 giờ không có thời gian ban đêm', 'Ngắn nhất chỉ 2 giờ ', 'Dài nhất kéo dài suốt 6 tháng', 'D', 6),
(15, 'TK', 'Vệ tinh duy nhất của Trái Đất là?', 'Mặt Trăng', 'IO', 'Europa', 'Ganymede', 'A', 6),
(16, 'GK', 'Ở bán cầu nào vào ban đêm chúng ta nhìn thấy sao Bắc Cực?', 'Nửa cầu Đông', 'Nửa cầu Tây', 'Bán cầu Nam', 'Bán cầu Bắc', 'D', 6),
(17, 'TK', 'Công cụ nào sau đây được sử dụng để xác định phương hướng ngoài thực địa?', 'La bàn', 'Khí áp kế', 'Địa chấn kế', 'Nhiệt kế', 'A', 6),
(18, 'GK', ' Các tầng cao của khí quyển có đặc điểm nào sau đây?', ' Nằm phía trên tầng đối lưu', 'Các tầng không khí cực loãng', 'Có lớp ô dôn hấp thụ tia tử ngoại', 'Ảnh hưởng trực tiếp đến con người', 'B', 6),
(19, 'GK', 'Trong các thành phần của không khí chiếm tỉ trọng lớn nhất là?', 'Khí nitơ', 'Khí cacbonic', 'Oxi', 'Hơi nước', 'A', 6),
(20, 'GK', 'Khối khí lạnh hình thành ở vùng nào sau đây?', 'Vùng vĩ độ thấp', ' Vùng vĩ độ cao', 'Biển và đại dương', 'Đất liền và núi', 'B', 6),
(21, 'GK', ' Trên bề mặt Trái Đất có bao nhiêu đai khí áp cao?', '1', '2', '3', '4', 'D', 6),
(22, 'TK', 'Trong tầng đối lưu, trung bình cứ lên cao 100m, thì nhiệt độ giảm đi?', '0,4 oC', '0,6 oC', '0,8 oC', '1,0 oC', 'B', 6),
(23, 'GK', 'Các hiện tượng khí tượng tự nhiên như: mây, mưa, sấm, chớp... hầu hết xảy ra ở tầng nào sau đây?', 'Tầng đối lưu', 'Tầng nhiệt', 'Trên tầng bình lưu', 'Tầng bình lưu', 'A', 6),
(24, 'GK', 'Ở chân núi của dãy núi X có nhiệt độ là 29oC, biết là dãy núi X cao 4500m. Vậy, ở đỉnh núi của dãy núi X có nhiệt độ là?', '1,5 oC', '2,0 oC', '2,5 oC', '3,0 oC', 'B', 6),
(25, 'GK', 'Gió Mậu dịch có đặc điểm nào sau đây?', 'Nóng ẩm', 'Mát ẩm', 'Nóng khô', 'Mát khô', 'C', 6),
(26, 'GK', 'Vào mủa Đông ở miền Bắc nước ta gió mùa nào thường thổi?', 'Tây Bắc', 'Tây Nam', 'Đông Bắc', 'Đông Nam', 'C', 6),
(27, 'TK', 'Thành phần nào sau đây không phải của núi lửa?', 'Cửa núi', 'Miệng', 'Dung nham', 'Macma', 'A', 6),
(28, 'GK', 'Phần lớn lớp Manti cung cấp nguồn năng lượng cho hoạt động nào sau đây?', 'Sóng thần, biển tiến', 'Động đất, núi lửa', 'Núi lửa, sóng thần', 'Động đất, hẻm vực', 'B', 6),
(29, 'TK', 'Hiện nay, trên Trái Đất có khoảng trên bao nhiêu núi lửa hoạt động?', '200', '300', '400', '500', 'D', 6),
(30, 'TK', 'Động đất mạnh nhất đạt ngưỡng mấy độ rich-te?', '>9 độ rich-te', '7-7,9 độ rich-te', '8-8,9 độ rich-te', '<7 độ rich-te', 'A', 6),
(31, 'TK', 'Nhật Bản nằm ở vành đai lửa nào sau đây?', 'Đại Tây Dương', 'Thái Bình Dương', 'Ấn Độ Dương', 'Bắc Băng Dương', 'B', 6),
(32, 'CK', 'Các vận động kiến tạo, các hoạt động động đất, núi lửa,… là biểu hiện của?', 'Vận động kiến tạo theo phương nằm ngang', 'Tác động của ngoại lực đến địa hình bề mặt Trái Đất', 'Vận động kiến tạo theo phương thẳng đứng', 'Tác động của nội lực đến địa hình bề mặt Trái Đất', 'D', 6),
(33, 'CK', 'Dấu hiệu trước khi động đất xảy ra không phải là?', 'Mực nước giếng thay đổi', 'Cây cối nghiêng hướng Tây', 'Động vật tìm chỗ trú ẩn', 'Mặt nước có nổi bong bóng', 'B', 6),
(34, 'GK', 'Quốc gia Đông Nam Á nào sau đây chịu ảnh hưởng nhiều nhất của động đất và núi lửa?', 'Thái Lan', 'Myanma', 'Indonexia', 'Việt Nam', 'C', 6),
(35, 'CK', 'Ở nước ta, vùng nào từng có hoạt động của núi lửa?', 'Tây Nguyên', 'Tây Bắc', 'Đông Bắc', 'Nam Bộ', 'B', 6),
(36, 'TK', 'Tầng đối lưu có độ cao trung bình khoảng?', '14 km', '16 km', '18 km', '20 km', 'B', 6),
(37, 'CK', 'Gió Tây ôn đới là loại gió thổi từ?', 'Cao áp cận nhiệt đới về hạ áp ôn đới', 'Hạ áp ôn đới về cao áp cận chí tuyến', 'Cao áp cận nhiệt đới về hạ áp Xích đạo', 'Hạ áp ôn đới về cao áp cực', 'A', 6),
(38, 'TK', 'Không khí trên mặt đất nóng nhất là vào thời gian nào?', '10g sáng', '11g sáng', '12g trưa', '13g chiều', 'D', 6),
(39, 'TK', 'Dụng cụ nào sau đây được dùng đo độ ẩm không khí?', 'Ẩm kế', 'Áp kế', 'Nhiệt kế', 'Vũ kế', 'A', 6),
(40, 'CK', 'Nhiệt độ trung bình ngày là kết quả tổng cộng nhiệt độ 4 lần trong ngày vào các thời điểm?', '2 giờ, 8 giờ, 15 giờ, 21 giờ', '3 giờ, 9 giờ, 12 giờ, 19 giờ', '1 giờ, 6 giờ, 14 giờ, 20 giờ', '1 giờ, 7 giờ, 13 giờ, 19 giờ', 'D', 6),
(41, 'CK', 'Nguồn cung cấp hơi nước chính cho khí quyển là?', 'Kênh,rạch', 'Ao,hồ', 'Sông,suối', 'Biển và đại dương', 'D', 6),
(42, 'GK', 'Nhiệt độ trung bình năm cao nhất thường ở vùng?', 'Chí tuyến', 'Ôn đới', 'Xích đạo', 'Cận cực', 'A', 6),
(43, 'TK', 'Càng lên vĩ độ cao nhiệt độ không khí càng?', 'Biến động', 'Tăng', 'Giảm', 'Không đổi', 'C', 6),
(44, 'CK', 'Khi không khí đã bão hòa mà vẫn được cung cấp thêm hơi nước thì?', 'Hình thành độ ẩm tuyệt đối', 'Tạo thành các đám mây', 'Sẽ diễn ra hiện tượng mưa', 'Diễn ra sự ngưng tụ', 'D', 6),
(45, 'TK', 'Nguồn cung cấp ánh sáng và nhiệt cho Trái Đất là gì?', 'Con người đốt nóng', 'Ánh sáng từ Mặt Trời', 'Các hoạt động công nghiệp', 'Sự đốt nóng của Sao Hỏa', 'B', 6),
(46, 'CK', 'Nguyên nhân chủ yếu vùng Xích đạo có mưa nhiều nhất trên thế giới là do?', 'Dòng biển nóng, áp cao chí tuyến', 'Nhiệt độ thấp, độ ẩm và đại dương', 'Nhiệt độ cao, áp thấp xích đạo', 'Áp thấp ôn đới, độ ẩm và dòng biển', 'C', 6),
(47, 'CK', 'Nhận định nào sau đây đúng về sự phân bố lượng mưa không đều trên Trái Đất theo vĩ độ?', 'Mưa nhiều ở cực và cận cực; mưa nhỏ ở vùng nhiệt đới và xích đạo', 'Mưa nhất nhiều ở ôn đới; mưa ít ở vùng cận xích đạo, cực và cận cực.', 'Mưa rất lớn ở vùng nhiệt đới; không có mưa ở vùng cực và cận cực', 'Mưa nhiều nhất ở vùng xích đạo, mưa tương đối ít ở vùng chí tuyến', 'D', 6),
(48, 'GK', 'Giả sử có một ngày ở thành phố Y, người ta đo được nhiệt độ lúc 1 giờ được 17oC, lúc 5 giờ được 26oC, lúc 13 giờ được 37oC và lúc 19 giờ được 32oC. Vậy nhiệt độ trung bình của ngày hôm đó là bao nhiêu?', '26 oC', '27 oC', '28 oC', '29 oC', 'C', 6),
(49, 'TK', 'Các cách biểu hiện độ cao địa hình là?', 'Sử dụng kí hiệu đường và thang màu', 'Sử dụng thang màu và đường đồng mức', 'Sử dụng kí hiệu điểm và đường đồng mức', 'Sử dụng kí hiệu hình học và đường đồng mức', 'B', 6),
(50, 'TK', 'Đường đồng mức là gì?', 'Đường nối liền các điểm có cùng một độ cao', 'Đường biểu diễn độ cao của địa hình', 'Đường nối liền các điểm có cùng một độ sâu', 'Đường cắt ngang một quả núi', 'A', 6),
(51, 'GK', 'Trên bản đồ nếu khoảng cách giữa các đường đồng mức cách xa nhau thì địa hình nơi đó như thế nào?', 'Càng dốc ', 'Càng thoải', 'Càng cao', 'Càng cắt xẻ mạnh', 'B', 6),
(52, 'TK', 'Khi Luân Đôn là 4 giờ, thì ở Hà Nội là mấy giờ?', '11 giờ', '5 giờ', '9 giờ', '12 giờ', 'A', 6),
(53, 'TK', ' Trong khi chuyển động quanh Mặt Trời, Trái Đất luôn?', 'Giữ nguyên độ nghiêng và thay đổi hướng nghiêng của trục', 'Giữ nguyên độ nghiêng và hướng nghiêng của trục không thay đổi', 'Thay đổi độ nghiêng và hướng nghiêng của trục', 'Thay đổi độ nghiêng và giữ nguyên hướng nghiêng của trục', 'B', 6),
(54, 'GK', 'Vào ngày hạ chí, tia sáng Mặt Trời chiếu thẳng góc với mặt đất ở nơi nào sau đây?', 'Chí tuyến Bắc', 'Chí tuyến Nam', 'Vòng cực Bắc', 'Xích đạo', 'A', 6),
(55, 'GK', 'Lớp vỏ Trái Đất có trạng thái?', 'Rắn chắc', 'Quánh dẻo', 'Lỏng ở ngoài, rắn ở trong', 'Quánh dẻo đến lỏng', 'A', 6),
(56, 'CK', ' Trạng thái vật chất từ quánh dẻo đến lỏng là đặc điểm của lớp?', 'Vỏ Trái Đất', 'Lớp trung gian', 'Lõi Trái Đất', 'Vỏ lục địa', 'B', 6),
(57, 'TK', 'Nhiệt độ cao nhất của Trái Đất tập trung ở đâu?', 'Vỏ Trái Đất', 'Lớp trung gian', 'Thạch quyển', 'Lõi Trái Đất', 'D', 6),
(58, 'CK', 'Các dãy núi ngầm dưới đại dương hình thành khi nào?', 'Hai địa mảng xô vào nhau', 'Hai địa mảng được nâng lên cao', 'Hai địa mảng bị nén ép xuống đáy đại dương', 'Hai địa mảng tách xa nhau', 'D', 6),
(59, 'TK', 'Sự di chuyển của các địa mảng là nguyên nhân gây ra loại thiên tai nào sau đây?', 'Bão,dông,lốc xoáy', 'Lũ lụt, hạn hán', 'Núi lửa, động đất', 'Lũ quét, sạt lở đất', 'C', 6),
(60, 'CK', 'Đâu là mảng đại dương của lớp vỏ Trái Đất?', 'Mảng Bắc Mĩ', 'Mảng Phi', 'Mảng Á – Âu', 'Mảng Thái Bình Dương', 'D', 6),
(61, 'GK', 'Lục địa là gì?', 'Phần đất liền nổi lên trên bề mặt Trái Đất và các đảo, quần đảo', 'Phần đất liền nổi lên trên bề mặt Trái Đất, có các đại dương bao bọc, không bao gồm các đảo và quần đảo', 'Phần đất liền rộng lớn, gồm các đảo, quần đảo và bộ phận thềm lục địa bị chìm dưới nước biển', 'Gồm các quần đảo và hòn đảo lớn nhỏ trên bề mặt Trái Đất', 'B', 6),
(62, 'TK', 'Lớp vỏ Trái Đất không có đặc điểm nào sau đây?', 'Rất dày và chiếm khoảng 1/4 khối lượng của Trái Đất', 'Vật chất ở trạng thái rắn chắc', 'Cấu tạo do một số địa mảng nằm kề nhau', 'Nơi tồn tại các thành phần khác của Trái Đất như không khí, nước, các sinh vật… và cả xã hội loài người', 'A', 6),
(63, 'TK', 'Tên một vành đai lửa lớn, tiêu biểu nhất trên thế giới?', 'Đại Tây Dương ', 'Thái Bình Dương', 'Ấn Độ Dương', 'Nam Đại Dương', 'B', 6),
(64, 'TK', 'Hình nào sau đây là quang cảnh sa mạc Sahara?', 'shr.jpg', 'hw.jpg', 'nc.jpg', 'sta.jpg', 'A', 6),
(65, 'TK', 'Mặt Trăng quay quanh Trái Đất hết bao nhiêu ngày?', '26 ', '27', '28', '29', 'D', 6),
(66, 'GK', 'Bản đồ thể hiện vị trí của sông Nile?', 'am.png', 'nil.jpg', 'tgi.jpg', 'smc.jpg', 'B', 6),
(67, 'TK', 'Trên thế giới không có đại dương nào sau đây?', 'Bắc Băng Dương', 'Thái Bình Dương', 'Úc Đại Dương', 'Nam Đại Dương', 'C', 6),
(68, 'GK', 'Nước biển và đại dương có mấy sự vận động?', '2', '3', '4', '5', 'B', 6),
(69, 'GK', 'Dòng biển nào sau đây là dòng biển lạnh?', 'Dòng biển Bra-xin', 'Dòng biển Gơn-xtrim', 'Dòng biển Grơn-len', 'Dòng biển Đông Úc', 'C', 6),
(70, 'TK', 'Hình nào sau đây cho thấy băng bao phủ hầu hết châu Nam Cực?', 'nuc.jpg', 'gl.jpg', 'nu.jpg', 'bbd.jpg', 'A', 6),
(71, 'TK', 'dhinh.png', 'Đỉnh nhọn, sườn dốc', 'Sườn tây dốc, sườn đông thoải', 'Đỉnh tròn, sườn thoải', 'Sườn tây thoải, sườn đông dốc', 'B', 6),
(72, 'TK', 'tq.png', 'Các vùng trồng lúa mì được thể hiện bằng kí hiệu diện tích, phân bố chủ yếu ở phía đông lãnh thổ', 'Các vùng trồng lúa mì được thể hiện bằng kí hiệu diện tích, phân bố chủ yếu ở phía đông bắc lãnh thổ', 'Các vùng nông nghiệp được thể hiện bằng kí hiệu điểm, phân bố chủ yếu ở phía đông lãnh thổ', 'Các vùng nông nghiệp được thể hiện bằng kí hiệu đường, phân bố chủ yếu ở phía nam lãnh thổ', 'B', 6),
(73, 'GK', 'Trái Đất có sự sống vì?', 'Có khoảng cách phù hợp từ Trái Đất đến Mặt Trời', 'Có dạng hình cầu', 'Có sự phân bố lục địa và đại dương', 'Có kích thước rất lớn', 'A', 6),
(74, 'GK', 'thucdia.png', '2 km', '5 km', '8 km', '10 km', 'B', 6),
(75, 'TK', 'bdo.png', 'Tây Nam của châu Á', 'Đông Nam của châu Á', 'Đông Bắc của châu Á', 'Tây Bắc của châu Á', 'B', 6),
(76, 'TK', 'bacbo.png', 'Đường đồng mức', 'Phân tầng màu', 'Kí hiệu', 'Kẻ gạch', 'B', 6),
(77, 'TK', 'Nhóm nào dưới đây gồm những thực vật không có hoa ?', 'Rêu, mã đề, sa la, rau ngót', 'Lá lốt, kinh giới, húng quế, diếp cá', 'Mía, tre, dương xỉ, địa tiền', 'Hoàng đàn, thông, rau bợ, dương xỉ', 'D', 3),
(78, 'TK', 'Cơ quan nào dưới đây chỉ có ở thực vật có hoa ?', 'Quả', 'Hạt', 'Rễ', 'Thân', 'A', 3),
(79, 'GK', 'Thực vật không có hoa khác thực vật ở những điểm nào?', 'Thực vật không có hoa thì cả đời chúng không bao giờ có hoa', 'Thực vật có hoa đến một thời kì nhất định trong đời sống thì ra hoa, tạo quả và kết hạt', 'A và B đúng', 'A và B sai', 'C', 3),
(80, 'TK', 'Các cây lương thực thường là', 'Cây lâu năm', 'Cây một năm', 'Thực vật hạt trần', 'Thực vật không có hoa', 'B', 3),
(81, 'TK', 'shi.png', '1', '2', '3', '4', 'A', 3),
(82, 'CK', ' Dựa vào những đặc điểm nào để nhận biết cây có hoa và cây không có hoa? ', 'Cây có hoa có cơ quan sinh dưỡng là rễ, thân, lá', 'Cây có hoa có cơ quan sinh sản là hoa, quả, hạt', 'Cây có hoa là những cây ra hoa kết quả hàng năm', 'Cây có hoa có cơ quan sinh sản là nón và hạt', 'B', 3),
(83, 'GK', 'Khi nói về sự sắp xếp mạch rây và mạch gỗ tại miền hút của rễ, phát biểu nào dưới đây là đúng ?', 'Mạch rây bao bên ngoài, mạch gỗ nằm ở phía trong', 'Mạch rây xếp một phía, mạch gỗ xếp ở phía đối diện', ' Mạch rây và mạch gỗ xếp xen kẽ nhau', 'Mạch gỗ bao bên ngoài, mạch rây nằm ở phía trong', 'C', 3),
(84, 'TK', ' Căn cứ vào hình dạng bên ngoài, người ta chia rễ làm mấy loại? Đó là những loại nào? ', 'Ba loại: rễ cọc, rễ chùm, rễ phụ', 'Hai loại: rễ cọc, rễ chùm', 'Hai loại: rễ mầm, rễ cọc', 'Hai loại: rễ chính, rễ phụ', 'B', 3),
(85, 'CK', 'Trong cấu tạo miền hút của rễ, bộ phận nào bao gồm nhiều lớp tế bào có độ lớn khác nhau và có chức năng chuyển các chất từ lông hút vào trụ giữa ?', 'Ruột ', 'Bó mạch', 'Biểu bì', 'Thịt vỏ', 'D', 3),
(86, 'TK', 'Tảo có những dạng sống nào? ', ' Tảo nước ngọt và tảo nước mặn', 'Tảo tiều cầu, tảo lục, tảo xoắn, tảo vòng, tảo nước', ' Tảo đơn bào, tảo đơn bào sống tập đoàn, tảo đa bào', 'Rau mơ, rau câu, rau diếp biển ', 'A', 3),
(87, 'GK', 'Đặc điểm chung của tảo? ', 'Là những thực vật bậc thấp, chưa có thân, rễ, lá; sống ở nước ngọt', 'Cơ thể chỉ là một tản gồm một hoặc khối tế bào đống nhất chưa phân hóa thành rễ, thân, lá, có chất diệp lục nên có thể tự chế tạo chất hữu cơ cần thiết', 'Là những thực vật đơn bào hoặc đa bào có nhiều màu sắc khác nhau nhưng luôn luôn có chất diệp lục do đó có thể tự chế tạo chất hữu cơ cần thiết', 'Cả ba ý trên đều đúng', 'B', 3),
(88, 'CK', 'Loại tảo nào dưới đây có môi trường sống khác với những loại tảo còn lại ?', 'Tảo sừng hươu', 'Tảo xoắn', 'Tảo silic', 'Tảo vòng', 'A', 3),
(89, 'TK', 'Châu Mỹ có diện tích đứng thứ mấy trong các châu lục trên thế giới?', '1', '2', '3', '4', 'B', 27),
(90, 'TK', 'Trong các hệ quả của chuyển động tự quay quanh trục, có ý nghĩa nhất đối với sự sống là hệ quả nào sau đây?', 'Hiện tượng mùa trong năm', 'Sự lệch hướng chuyển động', 'Giờ trên Trái Đất', 'Sự luân phiên ngày đêm', 'D', 6),
(91, 'TK', 'Đông Nam Á gồm mấy bộ phận:', '1', '2', '3', '4', 'B', 27),
(92, 'GK', 'Đông Nam Á là cầu nối của hai đại dương nào', 'Thái Bình Dương và Đại Tây Dương', 'Thái Bình Dương và Bắc Băng Dương', 'Thái Bình Dương và Ấn Độ Dương', 'Ấn Độ Dương và Đại Tây Dương', 'C', 27),
(93, 'TK', 'Lõi (nhân) Trái Đất có nhiệt độ cao nhất là bao nhiêu độ C?', '1000 oC', '3000 oC', '5000 oC', '7000 oC', 'C', 6),
(94, 'GK', 'ktvt.png', 'Các đường kinh tuyến trên Trái Đất đều bằng nhau', 'Các đường kinh tuyến trên Trái Đất lớn dần từ Đông->Tây', 'Các đường kinh tuyến trên Trái Đất lớn dần từ Tây->Đông', 'Các đường kinh tuyến trên Trái Đất phụ thuộc vào diện tích của châu lục', 'A', 6),
(95, 'TK', 'Lũy thừa bậc n của số tự nhiên a được viết là:', 'a<sup>n</sup>', 'a.n', 'a+n', 'a-n', 'A', 1),
(96, 'TK', 'Ta có a<sup>m</sup>:a<sup>n</sup> = a<sup>m – n</sup> với điều kiện là gì?', 'a ≠ 0', 'a ≠ 0 và m < n', 'a ≠ 0 và m > n', 'a ≠ 0 và m ≥ n', 'D', 1),
(97, 'TK', 'Tìm số tự nhiên x biết 2<sup>x</sup>=16', '2', '4', '8', '16', 'B', 1),
(98, 'TK', 'Truyền thuyết Ấn Độ kể rằng người phát minh ra bàn cờ vua đã chọn phần thưởng là số thóc rải trên 64 ô của bàn cờ vua như sau: ô thứ nhất để 1 hạt thóc, ô thứ hai để 2 hạt thóc, ô thứ ba để 4 hạt thóc, ô thứ tư để 8 hạt thóc,… Cứ như thế số hạt ở ô sau gấp đôi số hạt ở ô trước. Hỏi ô số 34 của bàn cờ có bao nhiêu hạt thóc.', '2<sup>34</sup>', '2.34', '34<sup>2</sup>', '2<sup>33</sup>', 'D', 1),
(99, 'TK', 'Tìm số n thỏa mãn 4<sup>n</sup>=4<sup>4</sup>.4<sup>8</sup>', '<sup>1</sub>/<sub>2</sub>', '2', '12', '32', 'C', 1),
(100, 'TK', 'Kết quả của phép tính 4<sup>3</sup>.4<sup>2</sup>.2<sup>4</sup>.2<sup>3</sup>', '2<sup>7</sup>', '7<sup>2</sup>', '2<sup>17</sup>', '17<sup>2</sup>', 'C', 1),
(101, 'TK', 'Tìm x để : 4<sup>x</sup>-2=2<sup>x</sup>+54', '-3', '3', '<sup>1</sup>/<sub>3</sub>', '<sup>-1</sup>/<sub>3</sub>', 'B', 1),
(102, 'TK', 'Số nào sau đây là số đặc biệt?', '142785', '142857', '142875', '124857', 'B', 1),
(103, 'TK', 'Nhận định nào sau đây là chính xác?', '3<sup>4</sup>=4<sup>3</sup>', '-2<sup>4</sup>=4<sup>-2</sup>', '2<sup>4</sup>=4<sup>2</sup>', '-4<sup>2</sup>=2<sup>-4</sup>', 'C', 1),
(104, 'TK', 'Cho a=16 và b=256.Vậy a<sup>?</sup>=b?', '16', '8', '4', '2', 'D', 1),
(105, 'GK', 'Cho 2<sup>x</sup>-x<sup>2</sup>=0.Vậy các giá trị x nguyên là:', 'x=2 hoặc x=4', 'x=-2 hoặc x=-4', 'x=-2 hoặc x=4', 'x=2 hoặc x=-4', 'A', 1),
(106, 'GK', 'Cho 3<sup>x+1</sup>=1.Vậy thì 2<sup>2x</sup> là bao nhiêu?', '-4', '<sup>-1</sup>/<sub>4</sub>', '<sup>1</sup>/<sub>4</sub>', '4', 'C', 1),
(107, 'GK', 'Cho x là một số nguyên,x là bội số của 8 và x<=100,vậy có bao số tự nhiên a thỏa mãn để a<sup>2</sup>=x ?', '0', '1', '2', '3', 'B', 1),
(108, 'GK', 'Kết quả của phép tính: 2<sup>x</sup>-2<sup>x-1</sup>-2<sup>x-2</sup>-...-2<sup>5</sup>-2<sup>4</sup>-8 là:', '4', '8', '16', '32', 'B', 1),
(109, 'GK', 'Lớp 6A có n học sinh,nếu xếp thành 2 hàng thì dư 1 bạn,xếp thành 3 hàng thì dư 2 bạn còn xếp thành 4 hàng thì lại dư 3 bạn,xếp 5 hàng thì vừa đủ.Hỏi lớp 6A có bao nhiêu học sinh(Biết số học sinh trong khoảng từ 30-45)?', '45', '40', '35', '30', 'C', 1),
(110, 'TK', 'Tồn tại 2 số a và b có giá trị khác nhau để a+b=a.b ,khi đó a<sup>b-<sup>a</sup>/<sub>2</sub></sup> bằng bao nhiêu?', '0', '1', '2', '3', 'B', 1),
(111, 'TK', 'Hình ảnh nào sau đây là một loài động vật?', 'tao.jpg', 'nam.jpg', 'sh.jpg', 'hq.jpg', 'D', 3),
(112, 'CK', 'Trái Đất tự quay quanh một trục tưởng tượng theo hướng nào?', 'Từ Nam lên Bắc.', 'Từ Tây sang Đông', 'Từ Bắc xuống Nam', 'Từ Đông sang Tây', 'B', 6),
(113, 'CK', 'Múi giờ gốc đi qua kinh tuyến nào?Cho biết Việt Nam thuộc múi giờ thứ mấy?', '0 độ-Múi giờ UTC+5', '0 độ-Múi giờ UTC+6', '0 độ-Múi giờ UTC+7', '0 độ-Múi giờ UTC+8', 'C', 6),
(114, 'CK', 'Thời gian để Trái Đất quay một vòng quanh Mặt Trời là?', '365 ngày 3 giờ', '365 ngày 5 giờ', '365 ngày 4 giờ', '365 ngày 6 giờ', 'D', 6),
(115, 'CK', 'Lục địa nào nằm hoàn toàn ở nửa cầu Nam?', 'Lục địa Phi', 'Lục địa Á-Âu', 'Lục địa Bắc Mỹ', 'Lục địa Nam Cực', 'D', 6),
(116, 'CK', 'Ngày 22 tháng 12 được gọi là ngày gì?', 'Xuân phân', 'Đông phân', 'Đông chí', 'Hạ chí', 'C', 6),
(117, 'CK', 'Ngày 22 tháng 6, tia sáng Mặt Trời chiếu vuông góc với tiếp tuyến tại vĩ tuyến nào ?\r\n\r\n', 'Vĩ tuyến 0 độ', 'Vĩ tuyến 23 độ 27’B', 'Vĩ tuyến 90 độ B', 'Vĩ tuyến 66 độ 33’B', 'B', 6),
(118, 'CK', 'Trái Đất quay quanh Mặt Trời tạo ra hiện tượng gì?', 'Hiện tượng lệch hướng các vật chuyển động', 'Hiện tượng gió bão', 'Hiện tượng mưa nắng', 'Hiện tượng mùa', 'D', 6),
(119, 'CK', 'Lục địa nào trên bề mặt trái đất có diện tích lớn nhất?', 'Lục địa Phi', 'Lục địa Ôxtrâylia', 'Lục địa Nam Cực', 'Lục địa Á-Âu', 'D', 6),
(120, 'CK', 'Loài động vật đặt hữu ở lục địa Nam Cực?', 'gbc.jpg', 'ccc.jpg', 'bat.jpg', 'bbien.jpg', 'B', 6),
(121, 'CK', 'Địa điểm nào trên trái đất có ngày (đêm) kéo dài 6 tháng?', 'Cực', 'Chí tuyến', 'Vòng Cực', 'Xích đạo', 'A', 6),
(122, 'CK', 'Người ta phân chia núi ra thành 3 loại có độ cao khác nhau là dựa vào?', 'Độ cao tương đối của núi', 'Độ cao tuyệt đối của núi', 'Độ cao tạm thời của núi', 'Độ cao của đồng bằng so với của núi', 'B', 6),
(123, 'CK', 'Đâu không phải là biện pháp để hạn chế thiệt hại do động đất?', 'Lập trạm dự báo động đất', 'Sơ tán dân đến vùng có động đất', 'Nghiên cứu để dự báo sơ tán dân', 'Xây nhà chịu chấn động lớn', 'B', 6),
(124, 'CK', 'Trạng thái không có ở các lớp của Trái Đất là?', 'Khí', 'Rắn', 'Lỏng', 'Quánh dẻo', 'A', 6),
(125, 'CK', 'Các đường nối liền hai điểm cực Bắc và cực Nam được gọi là?', 'Kinh tuyến', 'Kinh tuyến gốc', 'Vĩ tuyến ', 'Vĩ tuyến gốc', 'A', 6),
(126, 'CK', 'Độ cao tuyệt đối thường dưới 200m, đó là?', 'Bình nguyên', 'Cao nguyên', 'Sơn nguyên', 'Đài nguyên', 'A', 6),
(127, 'CK', 'Hình nào sau đây thể hiện địa hình là Đài nguyên?', 'sonnguyen.jpg', 'caonguyen.jpg', 'binhnguyen.jpg', 'dainguyen.jpg', 'D', 6),
(128, 'CK', 'Địa hình núi trẻ có những đặc điểm nào sau đây?', 'Đỉnh tròn, sườn dốc', 'Đỉnh tròn, sườn thoải', 'Đỉnh nhọn, sườn dốc', 'Đỉnh nhọn, sườn thoải', 'C', 6),
(129, 'CK', 'Nội lực có hoạt động gây ảnh hưởng rất lớn đến bề mặt Trái Đất, đó là hiện tượng?', 'Phong hóa', 'Sóng thần', 'Lũ lụt', 'Động đất, núi lửa', 'D', 6),
(130, 'CK', 'Để hiểu nội dung bản đồ, người ta dựa vào?', 'Đọc bản chú giải', 'Xem các đường đồng mức', 'Xem phương hướng', 'Xem tỉ lệ', 'A', 6),
(131, 'CK', 'Tên gọi khác của vòi rồng là?', 'Cuồng phong', 'Lốc xoáy', 'Bão cát', 'Bão tuyết', 'B', 6),
(132, 'CK', 'Đất nước ở Đông Nam Á chịu thiệt hại nặng nề nhất do bão là?', 'Việt Nam', 'Indonesia', 'Philipines', 'Myanmar', 'C', 6),
(133, 'CK', 'bien.jpg   ', 'Hồ', 'Biển', 'Đại Dương', 'Ao', 'B', 6),
(134, 'CK', 'Biển nào có độ muối cao nhất thế giới?', 'Biển chết', 'Biển Baltic', 'Biển đen', 'Biển đông', 'A', 6),
(135, 'CK', 'Lớp vật chất mỏng, vụn bở, bao phủ trên bề mặt các lục địa và đảo, được đặc trưng bởi độ phì gọi là lớp đất. Trong lớp đất có những hạt khoáng có màu sắc loang lổ và kích thước khác nhau đó là (1)……có nguồn gốc từ (2)…………Trên cùng của lớp đất có màu xám thẫm hoặc đen đó là (3)…………có nguồn gốc sinh ra từ (4)……………', '1-Thành phần khoáng  2-Đá mẹ  3-Sinh vật  4-Thành phần hữu cơ', '1-Thành phần khoáng  2-Sinh vật  3-Đá mẹ  4-Thành phần hữu cơ', '1-Thành phần khoáng  2-Đá mẹ  3-Thành phần hữu cơ  4-Sinh vật', '1-Đá mẹ  2-Thành phần khoáng  3-Sinh vật  4-Thành phần hữu cơ', 'C', 6),
(136, 'CK', 'Trong thủy quyển chủ yếu là nước mặn chiếm bao nhiêu %?', '35% toàn bộ khối nước', '41% toàn bộ khối nước', '71% toàn bộ khối nước', '97% toàn bộ khối nước', 'D', 6),
(137, 'CK', 'Dòng biển lạnh là dòng biển có nhiệt độ?', 'Cao hơn môi trường nước xung quanh', 'Thấp hơn môi trường nước xung quanh', 'Bằng môi trường nước xung quanh', 'Nóng lạnh thất thường', 'B', 6),
(138, 'CK', 'Tại sao vùng Bắc cực, Nam cực rất giá lạnh nhưng vẫn có nhiều loài động vật sinh sống ?', 'Động vật thích nghi tốt', 'Thực vật nhiều', 'Nguồn thức ăn dồi dào', 'Ít gặp nguy hiểm', 'A', 6),
(139, 'CK', 'Độ muối trung bình trong các biển và đại dương là?', '33 ‰', ' 35 ‰', '37 ‰', '39 ‰', 'B', 6),
(140, 'CK', 'Nhân tố tự nhiên ảnh hưởng quyết đinh đến sự phân bố của sinh vật là?', 'Chất đất', 'Lượng nước', 'Ánh sáng', 'Khí hậu', 'D', 6),
(141, 'TK', 'Hành tinh duy nhất trong hệ Mặt Trời quay ngược chiều kim đồng hồ?', 'Sao Thủy', 'Sao Kim', 'Sao Hỏa', 'Sao Mộc', 'B', 6),
(142, 'TK', 'Hồ tự nhiên trên Trái Đất có diện tích lớn nhất Thế Giới là?', 'Hồ TonleSap', 'Hồ Ba Bể', 'Hồ BaiKal', 'Hồ Yaly', 'C', 6),
(143, 'GK', 'Nơi nào trên Trái Đất có biên độ nhiệt ngày và đêm là lớn nhất?', 'Lục địa Phi', 'Lục địa Á-Âu', 'Lục địa Bắc Mỹ', 'Lục địa Úc', 'A', 6),
(144, 'CK', 'Tại sao đảo Úc không phải là đảo lớn nhất thế giới mặc dù diện tích xấp xỉ là 7,6 triệu km2?', 'Vì Úc là quốc gia lớn nhất châu Đại Dương', 'Vì Úc nằm gần khu vực Đông Nam Á', 'Vì Úc có thềm lục địa nối tiếp', 'Vì Úc là một thực thể của châu lục chiếm phần lớn diện tích ', 'D', 6),
(146, 'TK', 'vid.mp3', 'My favorite class is math', 'My favorite class is history', 'My favorite class is geography', 'My favorite class is english', 'B', 10),
(147, 'TK', 'vide.mp3', 'Lisa loves to go camping', 'Lisa loves to go playing', 'Lisa loves to go swimming', 'Lisa loves to go shopping', 'D', 10),
(148, 'TK', 'What animals like to eat bananas?', 'money.jpg', 'cat.jpg', 'voi.jpg', 'haicau.jpg', 'A', 10),
(149, 'TK', 'traidat.gif', 'Hình trên minh họa Trái Đất quay quanh mặt trời', 'Hình trên minh họa Trái Đất quay quanh trục', 'A và B đúng', 'A và B sai', 'B', 6),
(150, 'TK', 'conbao.gif', 'The maximum speed of leopards is 40km/h', 'The maximum speed of leopards is 60km/h', 'The maximum speed of leopards is 80km/h', 'The maximum speed of leopards is 100km/h', 'C', 10),
(151, 'TK', 'We have literature … Monday and Friday .', 'at', 'in', 'on', 'between', 'C', 10),
(152, 'TK', 'Phong …to music after school .', 'watches', 'listens', 'plays', 'goes', 'B', 10),
(153, 'TK', 'There is a … near my school .', 'park', 'math', 'television', 'soccer', 'A', 10),
(154, 'TK', 'Thu (1) in Da Nang with her family. She is a student at Quang Trung school. It is near her house.\r\nShe goes to school every afternoon, from Monday to Saturday. Her classes start at seven o’clock and\r\nfinish at fifteen past eleven. At school, she has subjects such as: (2) . She has English (3) TuesDay . In\r\nthe afternoon, she does her homework. In her free time, she listens to music or watches television', '(1) Lived (2) History (3) At', '(1) Lives (2) History (3) On', '(1) Lives (2) History (3) In', '(1) Lived (2) History (3) On', 'B', 10),
(155, 'TK', 'Where is the roller?', 'car.jpg', 'mayxuc.jpg', 'xelu.jpg', 'xedap.jpg', 'C', 10),
(156, 'TK', 'covua.jpg', 'The picture above illustrates the game of badminton', 'The picture above illustrates the game of shooting fish', 'The picture above illustrates the game of chess', 'The picture above illustrates a card game', 'C', 10),
(157, 'TK', 'Ha Noi City has two big stadiums.\r\n->There..............', 'There are two big stadiums in Ha Noi city.', 'There is two big stadiums in Ha Noi city.', 'There are two bigs stadiums in Ha Noi city.', 'There is two bigs stadiums in Ha Noi city.', 'A', 10),
(158, 'TK', 'What ... he ...?', 'are-is', 'is-are', 'do-does', 'does-do', 'D', 10),
(159, 'TK', 'How old ... you?', 'old', 'am', 'is', 'are', 'A', 10),
(160, 'TK', 'school/ I/ and/ this/ my/ student/ am/ a/ is', 'I am a student and that is my school.', 'I am a student and this is my school.', 'I am a student and there is my school.', 'I am a student and those is my school.', 'B', 10),
(161, 'TK', 'What is the sport of surfing called?', 'Skiing', 'Diving', 'Racing', 'Surfing', 'D', 10),
(162, 'TK', 'Which picture illustrates a tsunami?', 'xoaybien.jpg', 'songbien.jpg', 'songthan.jpg', 'voirong.jpg', 'C', 10),
(163, 'TK', 'Try to overcome it, you will ... .', 'Succeed', 'Successful', 'Successfully', 'Failed', 'A', 10),
(165, 'GK', 'amt.mp3', 'Jim:Tall Boy,moving the chair', 'Daisy:The girl with red dress', 'Peter:The boy with piano', 'Mary:Go to hospital', 'B', 10),
(166, 'GK', 'adv.mp3', 'Faavorite Food: Apple', 'Where it lives: Balcony', 'Name: Follo', 'Can Say: How are you?', 'B', 10),
(167, 'GK', '________ eat too much salt. It’s not good for you.', 'Do ', 'Please ', 'Don’t', 'Can’t', 'C', 10),
(168, 'GK', 'As it doesn’t snow in Viet Nam, we cannot ________ skiing.', 'Play', 'Do', 'Make', 'Go', 'D', 10),
(169, 'GK', 'I’ve just received a present from my mother.” - “ ………………………!”', 'Really', 'Thank you', 'Congratulations', 'Well', 'C', 10),
(170, 'GK', 'Many girls and women ________ aerobics to keep fit.', 'Play', 'Went', 'Do', 'Go', 'C', 10),
(171, 'GK', ' ________ the programme is late, we will wait to watch it.', 'Because', 'Although', 'When', 'So', 'B', 10),
(172, 'GK', 'This is the ___ building in the town .', 'Beautifully', 'Most beautiful', 'More beautiful ', 'Beautifulest', 'B', 10),
(173, 'GK', 'What do rabbits like to eat?', 'Orion', 'Potato', 'Carrot', 'Chilly', 'C', 10),
(174, 'GK', 'huoucaoco.jpg', 'This is a picture of a chameleon', 'This is a photo of an alligator', 'This is a picture of an elephant', 'This is a picture of a giraffe', 'D', 10),
(175, 'GK', 'What is the subject of the study of biological species?', 'Geography ', 'Physics', ' Biology', 'Chemistry', 'C', 10),
(176, 'GK', 'What ............................. is her hair?', 'Length', 'Color', 'Number', 'Name', 'B', 10),
(177, 'GK', '............................... sports do you play?', 'What', 'Who', 'Where', 'When', 'A', 10),
(178, 'GK', 'They are healthy. They do ___ every day.', 'Football   ', 'Tennis  ', 'Judo       ', 'Badminton', 'C', 10),
(179, 'GK', 'Find out the word with sound /iz/.', 'Caps   ', 'Watches ', 'Students ', 'Clocks', 'B', 10),
(180, 'TK', 'My family lives in a ___ on Nha Trang village.', 'Apartment', 'House ', 'Villa   ', 'Stilt house', 'A', 10),
(181, 'GK', '___two bathrooms in your house? – Yes, there are.', 'There is     ', 'There are', 'Are there ', 'Is there ', 'C', 10),
(182, 'GK', 'chimruoi.jpg', 'Humming bird', 'Penguin', 'Starling bird', 'Parrot', 'A', 10),
(183, 'GK', '___ have many thorns, but hidden in them is a mysterious beauty.', 'Daisy', 'Roses ', 'Orchid', 'Lotus', 'B', 10),
(184, 'GK', 'Alin knows 3 ____: English, Sanskrit, Chinese.', 'Languages', 'Lessons', 'Units', 'Pages', 'A', 10),
(185, 'GK', 'Hoa brushes ______ teeth every morning.', 'His', 'Her', 'Them', 'Us', 'B', 10),
(186, 'GK', 'Where do you live?', 'I live in Hanoi', 'I live on Hanoi', 'I live at Hanoi', 'I live is Hanoi', 'A', 10),
(187, 'GK', ' Is your father going to work ________ bus today?', 'In', 'To', 'By', 'At', 'C', 10),
(188, 'GK', 'We always get up ________ half past six in the morning.', 'In', 'On', 'At', 'Of', 'C', 10),
(189, 'GK', 'How many ________ are there in the classroom?', 'Board    ', 'Benches   ', 'Table  ', 'Floor', 'B', 10),
(190, 'GK', 'My name is Long. I am eleven years old. I am a student. I go (1) _____________ Quang Trung school. It is a (2) _____________ school. it is on Le Loi street. In front of (3) _____________ school, there is a yard. And opposite (4) _____________, there is a photocopy store. My school has 3 floors, (5) _____________ 57 rooms. I am (6) _____________ class 6A. My classroom is on the third floor.', '(1)-go (2)-big (3)-my (4)-it (5)-and (6)-in', '(1)-goes (2)-big (3)-my (4)-it (5)-and (6)-on', '(1)-go (2)-big (3)-my (4)-it (5)-and (6)-at', '(1)-goes (2)-big (3)-my (4)-it (5)-and (6)-of', 'A', 10),
(191, 'GK', 'Be careful! The tree ______________.', 'Is falling', 'Is falled', 'Is fall', 'Is falls', 'A', 10),
(192, 'GK', 'My friend is ______________. He loves playing football and basketball.', 'Serious ', 'Shy  ', 'Sporty', 'Lovely', 'C', 10),
(193, 'GK', 'Would you like                  some juice?', 'Drink  ', 'Drinking  ', 'To drink', 'Drank', 'C', 10),
(194, 'GK', 'At break time, I go to the library and                     books.', 'Go', 'Read', 'Play', 'Listen', 'C', 10),
(195, 'GK', 'Students live and study in a ________ school. They only go home at weekends', 'Secondary', 'International ', 'Boarding', 'Private', 'A', 10),
(196, 'CK', 'My sister is a nurse. She works in the......... .', 'Hospital', 'Factory', 'Farm', 'School', 'A', 10),
(197, 'CK', 'How __________ do you go jogging? - Once a day.', 'Usually', 'Often', 'Never', 'Alway', 'B', 10),
(198, 'CK', 'There is __________bread on the table.', 'a', 'an', 'some', 'too', 'C', 10),
(199, 'CK', 'I like _________. I have a rope.', 'Skip', 'Skips', 'Skipped', 'Skipping', 'D', 10),
(200, 'CK', ' I like fruit. I like _____________very much.', 'Orions', 'Potatos', 'Apples', 'Peas', 'C', 10),
(201, 'CK', ' How............... kilos of beef does she want?', 'many', 'much', 'some', 'little', 'A', 10),
(202, 'CK', 'His father is waiting................ a bus.', 'To', 'For', 'Of', 'At', 'B', 10),
(203, 'CK', 'We go there by car and they go......... foot.', 'On', 'By ', 'To', 'With', 'A', 10),
(204, 'CK', 'Listen! Who......... to your sister?', 'Is going to talk', 'Talks', 'Does talk', 'Is talking', 'D', 10),
(205, 'CK', 'Fall means......... in British English.', 'Spring', 'Summer', 'Autumn', 'Winter', 'C', 10),
(206, 'CK', 'Tokyo is.............. than Mexico City.', 'Smaller', 'Smallest', 'The smallest', 'Small', 'A', 10),
(207, 'CK', 'What color................her eyes?', 'Is', 'Are', 'Do ', 'Does', 'B', 10),
(208, 'CK', '..................... is a pen?. It is 0,5 USD.', 'How far', 'How many', 'How much', 'How often', 'C', 10),
(209, 'CK', ' We will have a …………….. to take care of our health.', 'Home robot', 'Doctor robot', 'Teaching robot', 'Worker robot', 'B', 10),
(210, 'CK', 'In the future, I will live ………………….because I like swimming.', 'In the mountain', 'On the Moon', 'On the ocean', 'Under the ground', 'C', 10),
(211, 'CK', 'My future house will have a hi-tech robot to ……………………..the floors.', 'Cleans', 'Cleaning', 'Cleaned', 'Clean', 'D', 10),
(212, 'CK', 'We might have a ……………………. TV so we can watch TV programs from space.', 'Wire', 'Wires', 'Wireless', 'Wiring', 'C', 10),
(213, 'CK', 'Hoa has never ……………………… to London .', 'be ', 'been', 'is', 'are', 'B', 10),
(214, 'CK', 'VTV1 is a ………………………. channel.', 'Local', 'National', 'International', 'Global', 'B', 10),
(215, 'CK', 'If we throw trash on the road, we will_________our environment.', 'Pollution', 'Pollute', 'Polluting', 'To pollute', 'B', 10),
(216, 'CK', 'They couldn’t go on a picnic ______________the weather was bad.', 'Because', 'When', 'But', 'Or', 'A', 10),
(217, 'CK', 'Budapest has a population of over two million people. One in every five Hungarian lives there. The River Danube flows inside the city. The town on the west bank is older and beautiful. The town on the east bank is bigger and modern. There are six bridges across the river.\r\n\r\nThe public transport system in Budapest is one of the cheapest in the world. You can travel easily by bus, tram, or taxi. But driving a car in Budapest is not a good idea! There are not many car parks. The cars are old, and the pollution is bad.', 'Budapest has a population of over three thousand people.', 'The River Danube flows outside the city.', 'The town on the west bank is older than the one in the east bank.', 'The town on the east bank is traditional.', 'C', 10),
(218, 'CK', 'She plays piano three ___ a week.', 'time', 'times', 'of', 'in', 'B', 10),
(219, 'CK', 'chef.jpg', 'It is a chef', 'It is a farmer', 'It is a policeman', 'It is an army', 'A', 10),
(220, 'CK', 'Which picture shows swan swimming in the lake?', 'caheo.jpg', 'thuyen.jpg', 'vit.jpg', 'thiennga.jpg', 'D', 10);

-- --------------------------------------------------------

--
-- Table structure for table `phancong`
--

CREATE TABLE `phancong` (
  `MaPhanCong` int(10) NOT NULL auto_increment,
  `TenLop` varchar(20) NOT NULL,
  `TenGV` varchar(30) NOT NULL,
  `TenMonHoc` varchar(50) NOT NULL,
  `MaLop` int(10) NOT NULL,
  `MaGV` int(10) NOT NULL,
  `MaMonHoc` int(10) NOT NULL,
  `NgayPhanCong` datetime NOT NULL,
  PRIMARY KEY  (`MaPhanCong`),
  KEY `TenLop` (`TenLop`,`MaLop`,`MaGV`,`MaMonHoc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `phancong`
--

INSERT INTO `phancong` (`MaPhanCong`, `TenLop`, `TenGV`, `TenMonHoc`, `MaLop`, `MaGV`, `MaMonHoc`, `NgayPhanCong`) VALUES
(1, '7A2', 'NGUYỄN THỊ NHÂN TÂM', 'Sinh Học 7', 11, 1, 13, '2022-05-13 01:28:28'),
(2, '7A2', 'NGUYỄN TIẾN THÔNG', 'Địa Lý 7', 11, 3, 16, '2022-05-13 01:34:18'),
(3, '6A1', 'ĐẶNG THỊ THÙY DƯƠNG', 'Tiếng Anh 6', 1, 15, 10, '2022-05-28 18:57:25'),
(5, '6A2', 'NGUYỄN HOÀNG VŨ ANH', 'Tiếng Anh 6', 2, 16, 10, '2022-05-28 19:10:00'),
(6, '8A1', 'TRẦN HỮU THẮNG', 'Toán 8', 12, 10, 21, '2022-05-29 12:02:42'),
(7, '8A1', 'NGUYỄN PHI VŨ', 'Hóa Học 8', 12, 12, 23, '2022-05-29 12:09:14'),
(8, '6A1', 'DƯƠNG THỊ THANH NHÀN', 'Vật Lý 6', 1, 5, 2, '2022-05-29 12:11:34'),
(9, '9A2', 'VŨ HOÀNG PHONG', 'Ngữ Văn 9', 13, 7, 36, '2022-05-29 12:12:24'),
(10, '6A4', 'NGUYỄN TIẾN THÔNG', 'Địa Lý 6', 6, 3, 6, '2022-05-29 12:15:23'),
(11, '6/1', 'NGUYỄN THANH LONG', 'Toán 6', 4, 4, 1, '2022-05-29 16:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `quanhuyen`
--

CREATE TABLE `quanhuyen` (
  `MaQuan` int(10) NOT NULL,
  `TenQuan` varchar(50) NOT NULL,
  `MaTP` int(10) NOT NULL,
  PRIMARY KEY  (`MaQuan`),
  KEY `MaTP` (`MaTP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quanhuyen`
--

INSERT INTO `quanhuyen` (`MaQuan`, `TenQuan`, `MaTP`) VALUES
(1, 'Q.1', 1),
(2, 'Q.3', 1),
(3, 'Q.4', 1),
(4, 'Q.5', 1),
(5, 'Q.6', 1),
(6, 'Q.7', 1),
(7, 'Q.8', 1),
(8, 'Q.10', 1),
(9, 'Q.11', 1),
(10, 'Q.12', 1),
(11, 'TP.Thủ Đức', 1),
(12, 'Q.Bình Thạnh', 1),
(13, 'Q.Bình Tân', 1),
(14, 'Q.Gò Vấp', 1),
(15, 'Q.Phú Nhuận', 1),
(16, 'Q.Tân Bình', 1),
(17, 'Q.Tân Phú', 1),
(18, 'H.Bình Chánh', 1),
(19, 'H.Cần Giờ', 1),
(20, 'H.Củ Chi', 1),
(21, 'H.Hóc Môn', 1),
(22, 'H.Nhà Bè', 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTK` varchar(50) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `Anh` varchar(50) NOT NULL,
  `ChucDanh` varchar(20) NOT NULL,
  `MaAD` varchar(20) NOT NULL,
  PRIMARY KEY  (`MaTK`),
  KEY `MaAdmin` (`MaAD`),
  KEY `MaAdmin_2` (`MaAD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTK`, `MatKhau`, `Anh`, `ChucDanh`, `MaAD`) VALUES
('AT', '123456', 'lc.jpg', '1', 'ad123'),
('DTTD', '123456', 'ad.gif', '1', 'ad123'),
('DTTN', '123456', 'lc.jpg', '1', 'ad123'),
('LHA', '123456', 'lc.jpg', '1', 'ad456'),
('LTQK', '123456', 'ag.gif', '2', 'ad456'),
('NA', '123456', 'h1.png', '0', 'ad456'),
('NAT', '123456', 'lc.jpg', '0', 'ad123'),
('NBB', '123456', 'lc.jpg', '1', 'ad123'),
('NH', '123456', 'ad.gif', '4', 'ad123'),
('NHT', '123456', 'lc.jpg', '1', 'ad123'),
('NHVA', '123456', 'ad.gif', '1', 'ad123'),
('NL', '123456', 'lc.jpg', '1', 'ad456'),
('NNA', '123456', 'cachep.jpg', '0', 'ad123'),
('NNamAnh', '123456', 'cachep.jpg', '0', 'ad456'),
('NNH', '123456', 'binhnguyen.jpg', '1', 'ad123'),
('NNP', '123456', 'cachep.jpg', '0', 'ad123'),
('NNTT', '123456', 'h1.png', '0', 'ad123'),
('NPV', '123456', 'lc.jpg', '1', 'ad123'),
('NT', '123456', 'ag.gif', '4', 'ad123'),
('NTB', '123456', 'cachep.jpg', '0', 'ad123'),
('NTBN', '123456', 'hc.jpg', '2', 'ad123'),
('NTHK', '123456', 'ag.gif', '1', 'ad123'),
('NTL', '123456', 'icongif.gif', '0', 'ad123'),
('NTNT', '123456', 'lc.jpg', '1', 'ad123'),
('NTQ', '123456', 'ld.jpg', '0', 'ad123'),
('NTT', '123456', 'lc.jpg', '1', 'ad123'),
('NTTV', '123456', 'lc.jpg', '1', 'ad123'),
('NUT', '123456', '', '0', 'ad123'),
('NVA', '123456', '', '0', 'ad123'),
('NVN', '123456', 'h1.png', '0', 'ad123'),
('NVP', '123456', 'ad.gif', '1', 'ad123'),
('NXA', '123456', '', '0', 'ad123'),
('PN', '123456', 'hd.gif', '3', 'ad123'),
('TD', '123456', 'ag.gif', '4', 'ad123'),
('THANHLONG', '123456', 'ad.gif', '4', 'ad456'),
('THT', '123456', 'ag.gif', '1', 'ad123'),
('THTT', '123456', 'lc.jpg', '1', 'ad123'),
('VHP', '123456', 'lc.jpg', '1', 'ad123'),
('VP', '123456', 'ag.gif', '4', 'ad123'),
('XA', '123456', '', '0', 'ad123');

-- --------------------------------------------------------

--
-- Table structure for table `tailieuthamkhao`
--

CREATE TABLE `tailieuthamkhao` (
  `ID_TLTK` int(10) NOT NULL auto_increment,
  `TenTLTK` varchar(1000) NOT NULL,
  `MaGV` int(10) NOT NULL,
  `MaMon` int(10) NOT NULL,
  `MaLop` int(10) NOT NULL,
  PRIMARY KEY  (`ID_TLTK`),
  KEY `MaGV` (`MaGV`,`MaMon`,`MaLop`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tailieuthamkhao`
--

INSERT INTO `tailieuthamkhao` (`ID_TLTK`, `TenTLTK`, `MaGV`, `MaMon`, `MaLop`) VALUES
(1, 'DeCuongOnTapDiaLy6.pdf', 2, 6, 1),
(2, 'DeCuongOnTapHK1DiaLy6.pdf', 2, 6, 1),
(3, 'CauHoiTracNghiemDiaLy6.pdf', 2, 6, 1),
(4, 'TracNghiemDiaLy6.pdf', 2, 6, 1),
(5, 'TracNghiemOnTapDiaLy6.pdf', 2, 6, 1),
(6, 'DeCuongDiaLy6.rar', 2, 6, 1),
(7, 'DeCuongOnTapDiaLy6.pdf', 2, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `thanhpho`
--

CREATE TABLE `thanhpho` (
  `MaTP` int(10) NOT NULL,
  `TenTP` varchar(20) NOT NULL,
  PRIMARY KEY  (`MaTP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thanhpho`
--

INSERT INTO `thanhpho` (`MaTP`, `TenTP`) VALUES
(1, 'TP.Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Table structure for table `tk`
--

CREATE TABLE `tk` (
  `MaTK` int(10) NOT NULL auto_increment,
  `TieuDe` varchar(20) NOT NULL,
  `NgayLamBai` varchar(50) NOT NULL,
  `NgayKetThuc` varchar(50) NOT NULL,
  `ThoiGianLamBai` int(10) NOT NULL,
  `NoiDungCH` varchar(1000) NOT NULL,
  `QA` varchar(1000) NOT NULL,
  `QB` varchar(1000) NOT NULL,
  `QC` varchar(1000) NOT NULL,
  `QD` varchar(1000) NOT NULL,
  `Ans` varchar(1000) NOT NULL,
  `MaGV` int(10) NOT NULL,
  `MaLop` int(10) NOT NULL,
  `MaMonHoc` int(10) NOT NULL,
  `NgayTaoBaiKT` varchar(50) NOT NULL,
  PRIMARY KEY  (`MaTK`),
  KEY `MaGV` (`MaGV`,`MaLop`,`MaMonHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tk`
--


-- --------------------------------------------------------

--
-- Table structure for table `tktl`
--

CREATE TABLE `tktl` (
  `MaTK` int(10) NOT NULL auto_increment,
  `TieuDe` varchar(50) NOT NULL,
  `TenBaiTL` varchar(50) NOT NULL,
  `HanNop` datetime NOT NULL,
  `MaGV` int(10) NOT NULL,
  `MaMonHoc` int(10) NOT NULL,
  `MaLop` int(10) NOT NULL,
  `NgayTaoBaiTL` datetime NOT NULL,
  PRIMARY KEY  (`MaTK`),
  KEY `MaGV` (`MaGV`,`MaMonHoc`,`MaLop`),
  KEY `MaHS` (`MaMonHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tktl`
--


-- --------------------------------------------------------

--
-- Table structure for table `totruongchuyenmon`
--

CREATE TABLE `totruongchuyenmon` (
  `MaTTCM` int(10) NOT NULL auto_increment,
  `MaGV` int(10) NOT NULL,
  `MaTK` varchar(50) NOT NULL,
  PRIMARY KEY  (`MaTTCM`),
  KEY `MaGV` (`MaGV`),
  KEY `MaTK` (`MaTK`),
  KEY `MaTK_2` (`MaTK`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `totruongchuyenmon`
--

INSERT INTO `totruongchuyenmon` (`MaTTCM`, `MaGV`, `MaTK`) VALUES
(1, 2, 'NH'),
(2, 1, 'NT'),
(3, 15, 'TD'),
(4, 4, 'THANHLONG'),
(5, 7, 'VP');

-- --------------------------------------------------------

--
-- Table structure for table `traloiphanhoi`
--

CREATE TABLE `traloiphanhoi` (
  `MaTLPH` int(11) NOT NULL auto_increment,
  `NoiDungPH` varchar(1000) NOT NULL,
  `MaLop` int(10) NOT NULL,
  `MaHS` int(10) NOT NULL,
  `MaGV` int(10) NOT NULL,
  `NgayPH` datetime NOT NULL,
  PRIMARY KEY  (`MaTLPH`),
  KEY `MaLop` (`MaLop`,`MaHS`,`MaGV`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `traloiphanhoi`
--

INSERT INTO `traloiphanhoi` (`MaTLPH`, `NoiDungPH`, `MaLop`, `MaHS`, `MaGV`, `NgayPH`) VALUES
(1, 'Em nhìn vào lược đồ  chỗ chú thích có thang màu xanh,đỏ,vàng,...=>phương pháp phân tầng màu nha em,em xem lại SGK trang xx nha.', 1, 1, 2, '2022-05-14 13:09:46'),
(2, 'Em để ý kỹ hai bên núi không cân xứng thì không thể nói là đỉnh nhọn,sườn dốc,em nên xem lại.Thân!!!', 1, 1, 2, '2022-05-14 19:31:27'),
(3, 'Chúng là loài động vật có khả năng thích nghi cao nha em.', 1, 1, 2, '2022-05-18 20:24:43'),
(4, 'Là có x con số 2 nhân lại với nhau.\r\n', 1, 1, 10, '2022-05-27 10:07:02'),
(5, 'Hello em!', 1, 1, 2, '2022-05-27 10:40:03'),
(6, 'Chúc e thi tốt!', 1, 1, 2, '2022-05-27 10:41:45'),
(7, 'Em hỏi bài nào?', 1, 19, 2, '2022-05-27 10:43:28'),
(8, 'Khoáng chất là...\r\n', 1, 19, 2, '2022-05-27 10:45:06'),
(9, 'abcd', 1, 1, 2, '2022-05-29 12:19:08');

-- --------------------------------------------------------

--
-- Table structure for table `truong`
--

CREATE TABLE `truong` (
  `MaTruong` int(10) NOT NULL auto_increment,
  `TenTruong` varchar(50) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `SDT` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NamHoatDong` int(10) NOT NULL,
  `Anh` varchar(50) NOT NULL,
  `MaQuan` int(10) NOT NULL,
  PRIMARY KEY  (`MaTruong`),
  KEY `MaQuan` (`MaQuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `truong`
--

INSERT INTO `truong` (`MaTruong`, `TenTruong`, `DiaChi`, `SDT`, `Email`, `NamHoatDong`, `Anh`, `MaQuan`) VALUES
(1, 'THCS NGUYỄN VĂN TRỖI', 'Số ABC,Quận 3,Tp.HCM', '032546789', 'nvt@edu.vn', 2004, 'nvtimg.jpg', 2),
(2, 'THCS LINH TRUNG', 'Số AA,Q.Thủ Đức', '456324', 'lt@edu.vn', 2010, 'lt.jpg', 11),
(3, 'THCS LÊ VĂN TÁM', 'Số 12,Q.8,TP.HCM', '125346', 'lvt@edu.vn', 1996, 'lvt.jpg', 7),
(4, 'THCS NGUYỄN TRÃI', 'Số ABC,Quận 6,TP.HCM', '123456432', 'nt@edu.vn', 2009, 'ngt.jpg', 5),
(5, 'THCS HOÀNG HOA THÁM', 'abc123', '123456', 'hht@edu.vn', 1967, 'hht.jpg', 16),
(6, 'THCS LÊ QUÝ ĐÔN', 'Số 12,Q.3,TP.HCM', '3245632', 'lqd@edu.vn', 1996, 'lqd.jpg', 2),
(7, 'THCS HÙNG VƯƠNG', 'Số 4,Q.Thủ Đức,TP.HCM', '0234565467', 'hv@edu.vn', 1967, 'hv.jpg', 11),
(8, 'THCS THUẬN GIAO', 'Số 5,Q.3,TP.HCM', '085436741', 'tg@edu.vn', 2016, 'tg.jpg', 1);
