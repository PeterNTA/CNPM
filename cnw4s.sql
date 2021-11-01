-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 05, 2021 lúc 10:15 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cnw4s`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(150) NOT NULL,
  `lever` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`adminID`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `lever`) VALUES
(1, 'thien', 'thien@gmail.com', 'thienadmin', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `Id` int(11) NOT NULL,
  `Namebanner` varchar(255) NOT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`Id`, `Namebanner`, `HinhAnh`) VALUES
(3, 'Hình 1', 'images/slideshow-banners/home3-banner.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `MaBL` int(11) NOT NULL,
  `TenBL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Tacgia` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `NgayDang` date NOT NULL,
  `Binhluan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`MaBL`, `TenBL`, `HinhAnh1`, `HinhAnh2`, `Tacgia`, `NgayDang`, `Binhluan`) VALUES
(1, 'New First', '', '', 'Thien ad', '2020-10-07', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `SoLuong`, `DonGia`) VALUES
(33, 24, 1, 85),
(33, 23, 1, 159),
(33, 22, 1, 239),
(35, 1, 1, 250),
(35, 2, 1, 125),
(36, 19, 1, 500),
(37, 94, 1, 436),
(38, 1, 1, 250),
(39, 100, 2, 432);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `ComID` int(11) NOT NULL,
  `TenUser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Star` int(11) DEFAULT NULL,
  `Tomtat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayCom` date NOT NULL,
  `MaSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`ComID`, `TenUser`, `Email`, `Star`, `Tomtat`, `Noidung`, `NgayCom`, `MaSP`) VALUES
(1, 'Ma dat', 'thienkun0235@gmail.com', NULL, 'Đẹp lắm ahaaa', 'advav', '2020-11-02', 21),
(2, 'Nguyễn Sĩ Thiện', 'thienkun0235@gmail.com', NULL, 'Hang dep nha', 'Ok nha moi nguoi', '2020-11-02', 17),
(3, 'Hướng', 'huong@gmail.com', NULL, 'Xấu', 'Hang nay xau lam', '2020-11-03', 24),
(4, 'thọ hít khu', 'haa@gmail.com', NULL, 'ok', 'hang dep', '2020-11-03', 20),
(5, 'Như Hehehe', 'huong@gmail.com', NULL, 'bsvs', 'ửgqw', '2020-11-03', 6),
(6, 'Thiện', 'thienkun0235@gmail.com', NULL, 'Ghe', 'hehhe', '2020-11-04', 24),
(7, 'Nguyễn Thị Quỳnh Như', 'nguyennhuquynh515@gmail.com', NULL, 'hi', 'chso', '2020-11-07', 19),
(8, '', '', NULL, '', '', '2020-11-07', 19),
(9, 'Hi', 'hi@gmail.com', 3, 'Ulo', 'lololo', '2020-11-13', 24),
(10, 'Hika', 'hika@gmail.com', 5, 'Haika', 'ivjuqhf', '2020-11-13', 24),
(12, 'Hi', 'hi@gmail.com', 4, 'Haika', 'bụbnk', '2020-11-14', 25),
(13, 'Nhu hay lay', 'nhu@gmaol.com', 3, 'Cuc dep', 'San ham toi mua hom qua , mau cuc dep', '2020-11-14', 2),
(14, 'Nhu hay lay', 'nhu@gmaol.com', 4, 'Haika', 'rjjrhhethet', '2020-11-15', 94),
(18, 'Cu Minh Thien', 'cmthien@gmail.com', 4, 'Ngon', 'lanh canh dao', '2020-11-17', 3),
(19, 'Nguyen Si Thien', 'nsthien2109@gmail.com', 4, 'Con hang nay dep lam', '', '2020-11-22', 20),
(20, 'Nguyen Si Thien', 'nsthien2109@gmail.com', 4, 'Haha', '123', '2020-11-23', 2),
(21, 'Thien', 'thien@gmail.com', 4, 'Hang dep', 'hanh ok lam', '2021-02-05', 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`) VALUES
(1, 'Woment'),
(2, 'Men'),
(3, 'Sale');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `MaND` int(11) NOT NULL,
  `NgayLap` datetime NOT NULL,
  `NguoiNhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PhuongThucTT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TongTien` float NOT NULL,
  `TrangThai` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaND`, `NgayLap`, `NguoiNhan`, `SDT`, `DiaChi`, `PhuongThucTT`, `TongTien`, `TrangThai`) VALUES
(33, 71, '2020-11-15 20:46:40', 'Huaaa', '24367643', 'Quảng Bình', '', 483, '0'),
(35, 72, '2020-11-19 13:21:11', 'Si Thien', '051515415', 'VietNam', '', 375, '0'),
(36, 71, '2020-11-21 08:55:37', 'B', '24367643', 'Quảng Bình', '', 500, '0'),
(37, 71, '2020-11-21 21:45:33', 'Si Thien', '24367643', 'Quảng Bình', '', 436, '0'),
(38, 71, '2020-11-23 06:47:26', 'van a', '24367643', 'Quảng Bình', '', 250, '1'),
(39, 72, '2021-02-05 10:05:39', 'Si Thien', '051515415', 'VietNam', '', 864, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int(11) NOT NULL,
  `TenKM` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiKM` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GiaTriKM` float(11,0) NOT NULL,
  `NgayBD` datetime NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `LoaiKM`, `GiaTriKM`, `NgayBD`, `TrangThai`) VALUES
(1, 'Không khuyến mãi', 'Nothing', 0, '2019-04-08 00:00:00', 1),
(2, 'Giảm giá', 'GiamGia', 500000, '2019-05-01 00:00:00', 1),
(3, 'Giá rẻ online', 'GiaReOnline', 650000, '2019-05-01 00:00:00', 1),
(4, 'Mới ra mắt', 'MoiRaMat', 0, '2019-05-01 00:00:00', 1),
(15, '', '', 0, '2020-11-07 13:32:45', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `ConID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`ConID`, `name`, `email`, `phone`, `problem`, `message`, `time`) VALUES
(1, 'Như', 'nsthien2109@gmail.com', '1234567894', 'Xin việc', 'bvcxzxcvbnm', '2020-11-20'),
(6, 'Thiện', 'nsthien2109@gmail.com', '0705459542', 'Hệ thống lỗi', 'Mua hàng không được', NULL),
(9, 'Nguyễn Thị Quỳnh Như', 'ntqnhu.19it6@vku.udn.vn', '0705459542', 'Helllo', 'Hi Hi', '0000-00-00'),
(11, 'Trương Sĩ Phúc', 'tsphuc.19it6@vku.udn.vn', '0123456789', 'Xin code ', 'Gửi full code ngâm cứu', '2020-11-22'),
(12, 'Cu Minh Thien', 'cmthien.19it4@vku.udn.vn', '1234567890', 'Hahah', 'Lolololo', '2020-11-23'),
(13, 'Hi', 'ntqnhu.19it6@vku.udn.vn', '0705459542', '123', '45689', '2020-11-23'),
(14, 'Thiện', 'nsthien2109@gmail.com', '1234567894', 'Xin việc', 'fghj', '2021-02-05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLSP` int(11) NOT NULL,
  `TenLSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `MaDM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLSP`, `TenLSP`, `MaDM`) VALUES
(1, 'Shoes', 1),
(2, 'Bags', 1),
(3, 'Glass', 1),
(4, 'Commestic', 1),
(5, 'Jewelry', 1),
(6, 'Fashion', 1),
(7, 'Fashion', 2),
(8, 'Shoes', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(11) NOT NULL,
  `Ho` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `TaiKhoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaQuyen` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `Ho`, `Ten`, `GioiTinh`, `SDT`, `Email`, `DiaChi`, `TaiKhoan`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES
(18, 'thien', 'Admin', 'Male', '0123456789', 'ehehe123@gmail.com', 'Quảng Bình', 'anhchiem123', '14e1b600b1fd579f47433b88e8d85291', 1, 1),
(67, 'Nguyễn Thị', 'Như', 'Female', '0935215271', 'nguyennhuquynh515@gmail.com', 'Ngã Tư Huỳnh Văn Nghệ và Nguyễn Minh Châu', 'thienadmin', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(68, 'Nguyễn Văn', 'B', 'Male', '0935215271', 'advh515@gmail.com', 'Ngã Tư Huỳn', 'badmin', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(71, 'nguyen', 'van a', 'Male', '24367643', 'haha@gmail.com', 'Quảng Bình', 'hahaha123', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(72, 'Nguyen', 'Si Thien', 'Male', '051515415', 'thien@gmail.com', 'VietNam', 'thienmhb', 'e10adc3949ba59abbe56e057f20f883e', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaQuyen` int(11) NOT NULL,
  `TenQuyen` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ChiTietQuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `TenQuyen`, `ChiTietQuyen`) VALUES
(1, 'Customer', 'Khách hàng có tài khoản'),
(2, 'Admin', 'Quản trị viên'),
(3, 'Personnel', 'Nhân Viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `MaLSP` int(11) NOT NULL,
  `MaDM` int(11) NOT NULL,
  `TenSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(11) NOT NULL,
  `SoLuong` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `HinhAnh1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhAnh3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaKM` int(11) NOT NULL,
  `SoSao` int(11) DEFAULT NULL,
  `SoDanhGia` int(11) DEFAULT NULL,
  `TrangThai` int(11) NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL,
  `MotaCT` text COLLATE utf8_unicode_ci NOT NULL,
  `Time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaLSP`, `MaDM`, `TenSP`, `DonGia`, `SoLuong`, `HinhAnh1`, `HinhAnh2`, `HinhAnh3`, `MaKM`, `SoSao`, `SoDanhGia`, `TrangThai`, `MoTa`, `MotaCT`, `Time`) VALUES
(1, 6, 1, 'Women\'s body skirt', 250, 30, 'images/Women/sp2.jpg', 'images/Women/sp2,1.jpg', 'images/Women/sp2,2.jpg', 1, 0, 0, 1, 'Women\'s body skirt sale', 'Chi tiết váy tím', NULL),
(2, 6, 1, 'Super pretty pleated skirt', 125, 20, 'images/Women/sp3.jpg', 'images/Women/sp3,1.jpg', 'images/Women/sp3,2.jpg', 1, 0, 0, 1, 'Váy đũi màu cam', 'Chi tiết váy cam', NULL),
(3, 6, 1, 'Long sleeve shirts', 88, 20, 'images/Women/sp4.jpg', 'images/Women/sp4,1.jpg', 'images/Women/sp4,2.jpg', 1, 0, 0, 1, 'Áo xanh sơ mi', 'Chi tiết áo sơ mi dài tay', NULL),
(4, 6, 1, 'Gold jean dress', 360, 21, 'images/Women/sp5.jpg', 'images/Women/sp5,1.jpg', 'images/Women/sp5,2.jpg', 4, 0, 0, 1, 'Đầm vàng siêu hót', 'Chi tiết đầm vàng', NULL),
(5, 6, 1, 'Beautiful green dress', 189, 18, 'images/Women/sp6.jpg', 'images/Women/sp6,1.jpg', 'images/Women/sp6,2.jpg', 1, 0, 0, 1, 'Cái váy màu xanh', 'Đây là chi tiết cái váy', NULL),
(6, 6, 1, 'Black skirt with thighs', 449, 19, 'images/Women/sp7.jpg', 'images/Women/sp7,1.jpg', 'images/Women/sp7,2.jpg', 2, 0, 0, 1, 'Đây là cái váy màu đen xẻ đùi', 'Đây là chi tiết của cái váy', NULL),
(7, 6, 1, 'Saigon long-sleeved leather shirt', 422, 20, 'images/Women/sp8.jpg', 'images/Women/sp8,1.jpg', 'images/Women/sp8,2.jpg', 2, 0, 0, 1, 'Mô tả cái áo', 'Chỗ này để nội dung chi tiết cái áo', NULL),
(8, 6, 1, 'Sexy plaid skirt', 599, 10, 'images/Women/sp9.jpg', 'images/Women/sp9,1.jpg', 'images/Women/sp9,2.jpg', 1, 0, 0, 1, 'Cũng là cái váy đũi', 'Chi tiết của cái váy đũi', NULL),
(10, 7, 2, 'Men\'s purple vest', 690, 19, 'images/Women/sp12.jpg', 'images/Women/sp12,1.jpg', 'images/Women/sp12,2.jpg', 2, 0, 0, 1, 'Thời thượng , lịch lãm , đẳng cấp', 'Chi tiết here', NULL),
(11, 7, 2, 'Jaket Men Super ', 569, 13, 'images/Women/sp13.jpg', 'images/Women/sp13,1.jpg', 'images/Women/sp13,2.jpg', 1, 0, 0, 1, 'Sản phẩm thể hiện ....', 'Chi tiết .....', NULL),
(12, 7, 2, 'Vest man grey', 139, 36, 'images/Women/sp14.jpg', 'images/Women/sp14,1.jpg', 'images/Women/sp14,2.jpg', 1, 0, 0, 1, 'Mô tả sản phẩm here', 'Chi tiết here', NULL),
(13, 7, 2, 'Round neck jean', 391, 22, 'images/Women/sp15.jpg', 'images/Women/sp15,1.jpg', 'images/Women/sp15,2.jpg', 3, 0, 0, 1, 'Mô tả sản phẩm', 'Chi tiết sản phẩm', NULL),
(14, 7, 2, 'Jaket', 159, 20, 'images/Women/sp16.jpg', 'images/Women/sp16,1.jpg', 'images/Women/sp16,2.jpg', 3, 0, 0, 1, 'Mô tả của áo jaket', 'Chi tiết của áo', NULL),
(15, 7, 2, 'Men\'s felt shirt', 229, 20, 'images/Women/sp17.jpg', 'images/Women/sp17,1.jpg', 'images/Women/sp17,2.jpg', 3, 0, 0, 1, 'Mô tả sp ', 'Chi tiết sản phẩm ...', NULL),
(16, 5, 3, 'Blue stone ring', 49, 200, 'images/Women/ts1.jpg', 'images/Women/ts6.jpg', 'images/Women/ts1.jpg', 3, 0, 0, 1, 'Mô tả', 'Chi tiết', NULL),
(17, 7, 2, 'Vest Man Grey Luxury', 249, 20, 'images/Women/sp18.jpg', 'images/Women/sp18,1.jpg', 'images/Women/sp18,2.jpg', 4, 0, 0, 1, 'Mô tả sản phẩm', 'Chi tiết sản phẩm', NULL),
(18, 5, 3, 'Ruby earrings', 85, 10, 'images/Women/ts2.jpg', 'images/Women/ts10.jpg', 'images/Women/ts2.jpg', 1, 0, 0, 1, 'mô tả', 'chi tiết', NULL),
(19, 5, 3, '24k gold chain', 500, 0, 'images/Women/ts3.jpg', 'images/Women/ts7.jpg', 'images/Women/ts3.jpg', 1, 0, 0, 1, 'Mô tả dây chuyền', 'Chi tiết dây chuyền', NULL),
(20, 5, 3, 'Gemstone rings', 350, 100, 'images/Women/ts4.jpg', 'images/Women/ts8.jpg', 'images/Women/ts4.jpg', 1, 0, 0, 1, 'Mô tả nhẫn', 'Chi tiết cái nhẫn', NULL),
(21, 5, 3, 'Pearl rings', 849, 45, 'images/Women/ts5.jpg', 'images/Women/ts9.jpg', 'images/Women/ts5.jpg', 1, 0, 0, 1, 'Mô tả nhẫn ngọc', 'Chi tiết đây', NULL),
(22, 1, 1, 'Convert', 239, 102, 'images/Women/sho1.jpg', 'images/Women/sho2.jpg', 'images/Women/sho1.jpg', 2, 0, 0, 1, 'Mô tả giày convert', 'Chi tiết giày convert', NULL),
(23, 1, 1, 'High heels', 159, 201, 'images/Women/sho3.jpg', 'images/Women/sho4.jpg', 'images/Women/sho3.jpg', 1, 0, 0, 1, 'Mô tả giày cao gót', 'Chi tiết giày cao gót', NULL),
(24, 1, 1, 'Sport shoes', 85, 100, 'images/Women/sho5.jpg', 'images/Women/sho6.jpg', 'images/Women/sho5.jpg', 1, 0, 0, 1, 'mô tả giày thể thao', 'Chi tiết giày ....', NULL),
(25, 1, 1, 'Flat shoes', 144, 101, 'images/Women/sho7.jpg', 'images/Women/sho8.jpg', 'images/Women/sho7.jpg', 1, 0, 0, 1, 'Tóm tắt sản phẩm', 'Chi tiết sản phẩm', NULL),
(94, 1, 2, 'Men Shose', 436, 12, 'images/Women/home7-product2.jpg', 'images/Women/home7-product2-1.jpg', 'images/Women/home7-product5-1.jpg', 1, 0, 0, 1, 'Giày đi núi', '', '2020-11-07'),
(100, 7, 2, 'Áo xịn ', 432, 11, 'images/Women/product-image50-1.jpg', 'images/Women/product-image50.jpg', 'images/Women/product-image34-1.jpg', 1, 0, 0, 1, 'áo này đẹp', '', '2020-11-10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subcribe`
--

CREATE TABLE `subcribe` (
  `ID_sub` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `subcribe`
--

INSERT INTO `subcribe` (`ID_sub`, `Email`) VALUES
(2, 'thienkun0235@gmail.com'),
(10, 'nsthien.19it4@vku.udn.vn'),
(12, 'thiennguyen0235@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Id`) USING BTREE;

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`MaBL`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD KEY `MaHD` (`MaHD`) USING BTREE,
  ADD KEY `MaSP` (`MaSP`) USING BTREE;

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ComID`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`) USING BTREE;

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`) USING BTREE,
  ADD KEY `MaKH` (`MaND`) USING BTREE;

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`) USING BTREE;

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`ConID`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLSP`) USING BTREE,
  ADD KEY `MaDM` (`MaDM`) USING BTREE,
  ADD KEY `MaLSP` (`MaLSP`,`MaDM`) USING BTREE,
  ADD KEY `MaLSP_2` (`MaLSP`) USING BTREE;

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`) USING BTREE,
  ADD KEY `MaQuyen` (`MaQuyen`) USING BTREE;

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaQuyen`) USING BTREE;

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`) USING BTREE,
  ADD KEY `LoaiSP` (`MaLSP`) USING BTREE,
  ADD KEY `MaKM` (`MaKM`) USING BTREE;

--
-- Chỉ mục cho bảng `subcribe`
--
ALTER TABLE `subcribe`
  ADD PRIMARY KEY (`ID_sub`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `MaBL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `ComID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `ConID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `subcribe`
--
ALTER TABLE `subcribe`
  MODIFY `ID_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`);

--
-- Các ràng buộc cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD CONSTRAINT `MaDM` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `phanquyen` (`MaQuyen`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`MaLSP`) REFERENCES `loaisanpham` (`MaLSP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
