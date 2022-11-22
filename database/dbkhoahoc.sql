-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2021 lúc 04:36 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbkhoahoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `username`, `password`, `desc`) VALUES
(1, 'toilaone12', 'bean2001', ''),
(2, 'bokazem', '123456', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblchitietdonhang`
--

CREATE TABLE `tblchitietdonhang` (
  `id` int(11) NOT NULL,
  `madonhang` varchar(30) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `songuoidangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblchitietdonhang`
--

INSERT INTO `tblchitietdonhang` (`id`, `madonhang`, `id_sp`, `songuoidangky`) VALUES
(5, '618', 16, 6),
(6, '143', 16, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbldanhmuc`
--

CREATE TABLE `tbldanhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL,
  `stt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbldanhmuc`
--

INSERT INTO `tbldanhmuc` (`id`, `tendanhmuc`, `stt`) VALUES
(1, 'FE', 5),
(2, 'BE', 2),
(3, 'SQL', 3),
(4, 'Framework', 1),
(6, 'Android', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblgiohang`
--

CREATE TABLE `tblgiohang` (
  `id` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `madonhang` varchar(30) NOT NULL,
  `thoigianmua` datetime NOT NULL,
  `tinhtrang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblgiohang`
--

INSERT INTO `tblgiohang` (`id`, `id_kh`, `madonhang`, `thoigianmua`, `tinhtrang`) VALUES
(16, 1, '618', '2021-11-27 15:08:06', '0'),
(17, 1, '143', '2021-11-27 21:18:34', '0'),
(21, 3, '809', '2021-09-08 08:09:02', '3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblkhoahoc`
--

CREATE TABLE `tblkhoahoc` (
  `id_kh` int(11) NOT NULL,
  `tenkhoahoc` varchar(30) NOT NULL,
  `giakhoahoc` int(11) NOT NULL,
  `songuoi` int(11) NOT NULL,
  `anh_kh` varchar(255) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblkhoahoc`
--

INSERT INTO `tblkhoahoc` (`id_kh`, `tenkhoahoc`, `giakhoahoc`, `songuoi`, `anh_kh`, `id_danhmuc`) VALUES
(1, 'PHP Advanced', 2000000, 20, '202111211758542021112019361020211120113150tải xuống.jpg', 2),
(2, 'HTML, CSS', 5000000, 33, '20211120113143html,css.jpg', 1),
(3, 'JavaScript Basic', 5000000, 20, '20211120112714js.png', 1),
(4, 'JavaScript Advanced', 5000000, 19, '2021112011270320211120110546js.png', 1),
(5, 'Responsive', 5000000, 22, '20211120110932responsive.png', 1),
(6, 'PHP Basic', 12500000, 19, '20211120111634tải xuống.jpg', 2),
(14, 'ReactJS', 3000000, 15, '2021112218202620211122181017reactjs.png', 4),
(15, 'My SQL Basic', 3200000, 19, '20211122181100mysql.png', 1),
(16, 'SQL Server', 3500000, 15, '20211122180839sqlserver.jpg', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblnguoidung`
--

CREATE TABLE `tblnguoidung` (
  `id` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `tuoi` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sodienthoai` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblnguoidung`
--

INSERT INTO `tblnguoidung` (`id`, `hoten`, `matkhau`, `tuoi`, `email`, `sodienthoai`, `diachi`) VALUES
(1, 'Kiều Đặng Bảo Sơn', '123456', 20, 'toilaone12@gmail.com', '0333333312', 'Hà Nội'),
(2, 'Sơn ', '123', 20, 'toilane12@gmail.com', '0386278998', 'Hà Nội'),
(3, 'Cao Thị Lan  ', '08092002', 19, 'lan0809@gmail.com', '0333333333', 'Hà Nội'),
(4, 'Nguyễn Thị Ngọc Ánh ', '02062002', 19, 'anh@gmail.com', '0123456789', 'Thanh Hóa'),
(6, 'Nguyễn Thị Ngọc Ánh ', '123', 19, 'anh@gmail.com', '0123456789', 'Thanh Hóa'),
(10, 'abc ', '123', 19, 'aaa@gmail.com', '0987654321', 'Cao Bằng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbltaikhoan`
--

CREATE TABLE `tbltaikhoan` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(30) NOT NULL,
  `matkhau` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbltaikhoan`
--

INSERT INTO `tbltaikhoan` (`id`, `taikhoan`, `matkhau`) VALUES
(1, 'toilaone12', 'bean2001'),
(2, 'bokazem', '123456');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblchitietdonhang`
--
ALTER TABLE `tblchitietdonhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbldanhmuc`
--
ALTER TABLE `tbldanhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblgiohang`
--
ALTER TABLE `tblgiohang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblkhoahoc`
--
ALTER TABLE `tblkhoahoc`
  ADD PRIMARY KEY (`id_kh`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tblnguoidung`
--
ALTER TABLE `tblnguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbltaikhoan`
--
ALTER TABLE `tbltaikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tblchitietdonhang`
--
ALTER TABLE `tblchitietdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbldanhmuc`
--
ALTER TABLE `tbldanhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tblgiohang`
--
ALTER TABLE `tblgiohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tblkhoahoc`
--
ALTER TABLE `tblkhoahoc`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tblnguoidung`
--
ALTER TABLE `tblnguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbltaikhoan`
--
ALTER TABLE `tbltaikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tblkhoahoc`
--
ALTER TABLE `tblkhoahoc`
  ADD CONSTRAINT `tblkhoahoc_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbldanhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
