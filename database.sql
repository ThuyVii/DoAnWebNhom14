-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 11, 2020 at 02:14 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

DROP TABLE IF EXISTS `bills`;
CREATE TABLE IF NOT EXISTS `bills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) DEFAULT NULL,
  `ngaymua` date DEFAULT NULL,
  `tongtien` double DEFAULT NULL,
  `thanhtoan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_customer` (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `ngaymua`, `tongtien`, `thanhtoan`, `ghichu`) VALUES
(2, 3, '2020-07-04', 24480000, NULL, 'okok'),
(3, 4, '2020-07-04', 16480000, NULL, 'okok'),
(4, 5, '2020-07-05', 14880000, NULL, 'giao nhanh'),
(5, 6, '2020-07-05', 33860000, NULL, 'sfsgsfg'),
(6, 7, '2020-07-05', 8990000, NULL, 'fgdfg'),
(7, 8, '2020-07-05', 8990000, NULL, 'oko'),
(8, 9, '2020-07-05', 22480000, 'ATM', 'ssd'),
(9, 10, '2020-07-05', 18980000, 'COD', 'giao vào thứ 2'),
(10, 11, '2020-07-05', 10980000, 'COD', 'zcxzxc'),
(11, 12, '2020-07-07', 50000000, 'ATM', 'không mua nha'),
(12, 13, '2020-07-07', 0, 'COD', 'cdc'),
(13, 14, '2020-07-07', 40580000, 'COD', 'okok');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

DROP TABLE IF EXISTS `bill_detail`;
CREATE TABLE IF NOT EXISTS `bill_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_bill` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `gia` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_bill` (`id_bill`),
  KEY `fk_id_product` (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `soluong`, `gia`) VALUES
(3, 2, 5, 1, 14490000),
(4, 2, 7, 1, 9990000),
(5, 3, 7, 1, 9990000),
(6, 3, 12, 1, 6490000),
(7, 4, 13, 1, 4890000),
(8, 4, 7, 1, 9990000),
(9, 5, 7, 2, 9990000),
(10, 5, 8, 1, 8990000),
(11, 5, 13, 1, 4890000),
(12, 6, 8, 1, 8990000),
(13, 7, 8, 1, 8990000),
(14, 8, 8, 1, 8990000),
(15, 8, 9, 1, 13490000),
(16, 9, 9, 1, 13490000),
(17, 9, 51, 1, 5490000),
(18, 10, 51, 2, 5490000),
(19, 11, 17, 1, 50000000),
(20, 13, 3, 1, 32990000),
(21, 13, 10, 1, 7590000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `ten`, `gioitinh`, `email`, `diachi`, `sdt`, `ghichu`) VALUES
(3, 'trương quang khải', 'nam', 'khaitruong190220000@gmail.com', 'sdsdfsd', '0328046670', 'okok'),
(4, 'nguyễn bá đắc', 'nam', '18520878@gm.uit.edu.vn', 'sdsdfsd', '0328046670', 'okok'),
(5, 'trương quang khải', 'nữ', 'khaitruong190220000@gmail.com', 'số 23 đường số 24 hiệp bình chánh quận thủ đức', '0328046670', 'giao nhanh'),
(6, 'trương quang khải', 'nam', '18520878@gm.uit.edu.vn', 'số 23 đường số 24 hiệp bình chánh quận thủ đức', '0328046670', 'sfsgsfg'),
(7, 'trương quang khải', 'nam', 'khaitruong190220000@gmail.com', 'số 23 đường số 24 hiệp bình chánh quận thủ đức', '0328046670', 'fgdfg'),
(8, 'CÔNG TY DEMO', 'nam', '18520878@gm.uit.edu.vn', 'số 23 đường số 24 hiệp bình chánh quận thủ đức', '0328046670', 'oko'),
(9, 'hồ công huynh', 'nam', '18520070@gm.uit.edu.vn', 'số 23 đường số 24 hiệp bình chánh quận thủ đức', '0328046670', 'ssd'),
(10, 'bùi thúy vi', 'nữ', '18520190@gm.uit.edu.vn', 'đồng nai', '0328046670', 'giao vào thứ 2'),
(11, 'bùi thúy vi', 'nữ', '18520190@gm.uit.edu.vn', 'đồng nai', '0328046670', 'zcxzxc'),
(12, 'phan tấn nhất khâm', 'nữ', '18520879@gm.uit.edu.vn', 'đà lạt', '0328046670', 'không mua nha'),
(13, 'trương quang khải', 'nam', 'khaitruong190220000@gmail.com', 'số 23 đường số 24 hiệp bình chánh quận thủ đức', '0328046670', 'cdc'),
(14, 'hồ công huynh', 'nam', '18520190@gm.uit.edu.vn', 'đà lạt', '0328046670', 'okok');

-- --------------------------------------------------------

--
-- Table structure for table `db_admin`
--

DROP TABLE IF EXISTS `db_admin`;
CREATE TABLE IF NOT EXISTS `db_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_admin`
--

INSERT INTO `db_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'buithuyvi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vi', '0337909775', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `db_product`
--

DROP TABLE IF EXISTS `db_product`;
CREATE TABLE IF NOT EXISTS `db_product` (
  `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giatruoc` float NOT NULL,
  `giasau` float NOT NULL,
  `thongtin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hienthi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_product`
--

INSERT INTO `db_product` (`product_id`, `name`, `giatruoc`, `giasau`, `thongtin`, `hienthi`, `created_at`, `updated_at`) VALUES
(1, 'Oppo', 5000000, 4490000, 'new', 0, NULL, NULL),
(4, 'Iphone 7', 9000000, 8000000, 'new', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_07_03_125608_create_db_admin_table', 2),
(4, '2020_07_03_130438_create_db_product_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkanh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('buithuyvi@gmail.com', '$2y$10$S7dxv2mYCZLDKVnS9ld9a.ZiYlgFKG1gcxGHGnKK9kqzYJjkRZWI.', '2020-07-09 23:07:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tensp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giadau` float DEFAULT NULL,
  `giasau` float DEFAULT NULL,
  `linkanh` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hienthi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_type` (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `tensp`, `id_type`, `mota`, `giadau`, `giasau`, `linkanh`, `hienthi`) VALUES
(2, 'iPhone 11 Pro Max 512GB', 1, 'Để tìm kiếm một chiếc smartphone có hiệu năng mạnh mẽ và có thể sử dụng mượt mà trong 2-3 năm tới thì không có chiếc máy nào xứng đang hơn chiếc iPhone 11 Pro Max 512GB mới ra mắt trong năm 2019 của Apple.', 41990000, 40490000, 'https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-gold-400x460.png', 0),
(3, 'iPhone 11 Pro 256GB', 1, 'Nếu như bây giờ để lựa chọn một thiết bị có thể sử dụng ổn định và được cập nhật trong khoảng 3 năm nữa thì không có sự lựa chọn nào xuất sắc hơn chiếc iPhone 11 Pro 64GB, siêu phẩm mới được giới thiệu cách đây không lâu tới từ Apple.', 34490000, 32990000, 'https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-gold-600x600.jpg', 0),
(4, 'iPhone 8 Plus 64GB', 1, 'Thừa hưởng những thiết kế đã đạt đến độ chuẩn mực, thế hệ iPhone 8 Plus thay đổi phong cách bóng bẩy hơn và bổ sung hàng loạt tính năng cao cấp cho trải nghiệm sử dụng vô cùng tuyệt vời.', 15990000, 14490000, 'https://cdn.tgdd.vn/Products/Images/42/114110/iphone-8-plus-1-400x460.png', 0),
(5, 'iPhone SE 128GB (2020)', 1, 'iPhone SE 2020 đã bất ngờ ra mắt với thiết kế 4.7 inch nhỏ gọn, chip A13 Bionic mạnh mẽ như trên iPhone 11 và đặc biệt sở hữu mức giá tốt chưa từng có.', 15990000, 14490000, 'https://cdn.tgdd.vn/Products/Images/42/222629/iphone-se-128gb-2020-261720-101730-400x460.png', 0),
(6, 'iPhone 7 32GB', 1, 'iPhone 7 32GB vẫn mang trên mình thiết kế quen thuộc của từ thời iPhone 6 nhưng có nhiều thay đổi lớn về phần cứng, dàn loa stereo và cấu hình cực mạnh.', 9490000, 7990000, 'https://cdn.tgdd.vn/Products/Images/42/114110/iphone-8-plus-1-400x460.png', 0),
(7, 'iPhone 7 Plus 32GB', 1, 'Mặc dù giữ nguyên vẻ bề ngoài so với dòng điện thoại iPhone đời trước, bù lại iPhone 7 Plus 32GB lại được trang bị nhiều nâng cấp đáng giá như camera kép đầu tiên cũng như cấu hình mạnh mẽ.', 11490000, 9990000, 'https://cdn.tgdd.vn/Products/Images/42/114110/iphone-8-plus-1-400x460.png', 0),
(8, 'Samsung Galaxy A80', 2, 'Samsung Galaxy A80 là chiếc smartphone mang trong mình rất nhiều đột phá của Samsung và hứa hẹn sẽ là \"ngọn cờ đầu\" cho những chiếc smartphone sở hữu một màn hình tràn viền thật sự.', 10490000, 8990000, 'https://cdn.tgdd.vn/Products/Images/42/201228/samsung-galaxy-a80-050220-050225-400x460.png', 0),
(9, 'Samsung Galaxy S10 Lite', 2, 'Samsung Galaxy S10 Lite là một phiên bản khác của dòng Galaxy S10 đã ra mắt trước đó nhưng mang trong mình khá nhiều khác biệt về ngoại hình cũng như bên trong.', 14990000, 13490000, 'https://cdn.tgdd.vn/Products/Images/42/194251/samsung-galaxy-s10-lite-blue-chi-tiet-400x460.png', 0),
(10, 'Samsung Galaxy A51 (6GB/128GB)', 2, 'Samsung đã ra mắt điện thoại Samsung Galaxy A51 mở đầu cho thế hệ Galaxy A 2020 hướng tới giới trẻ hiện đại, thời thượng. Máy sở hữu cụm 4 camera, bao gồm camera macro chụp cận cảnh lần đầu xuất hiện trên smartphone Galaxy, màn hình tràn viền vô cực cùng mặt lưng họa tiết kim cương nổi bật.', 9090000, 7590000, 'https://cdn.tgdd.vn/Products/Images/42/211570/samsung-galaxy-a51-white-1-400x460.png', 0),
(11, 'Samsung Galaxy A70', 2, 'Samsung Galaxy A70 là một phiên bản phóng to của chiếc Samsung Galaxy A50 đã ra mắt trước đó với nhiều cải tiến tới từ bên trong.', 10790000, 9290000, 'https://cdn.tgdd.vn/Products/Images/42/195012/samsung-galaxy-a70-052920-062956-400x460.png', 0),
(12, 'Samsung Galaxy A31', 2, 'Galaxy A31 là mẫu smartphone tầm trung mới ra mắt đầu năm 2020 của Samsung. Thiết bị gây ấn tượng mạnh với ngoại hình thời trang, cụm 4 camera đa chức năng, vân tay dưới màn hình và viên pin khủng lên đến 5000 mAh.', 7990000, 6490000, 'https://cdn.tgdd.vn/Products/Images/42/216174/samsung-galaxy-a31-400x460-white-400x460.png', 0),
(13, 'Samsung Galaxy A20s 64GB', 2, 'Galaxy A31 là mẫu smartphone tầm trung mới ra mắt đầu năm 2020 của Samsung. Thiết bị gây ấn tượng mạnh với ngoại hình thời trang, cụm 4 camera đa chức năng, vân tay dưới màn hình và viên pin khủng lên đến 5000 mAh.', 6390000, 4890000, 'https://cdn.tgdd.vn/Products/Images/42/204404/samsung-galaxy-a20s-055420-045440-400x460.png', 0),
(14, 'Samsung Galaxy A21s (6GB/64GB)', 2, 'Samsung Galaxy A21s là chiếc điện thoại tầm trung mới của Samsung, mang trong mình có thiết kế màn hình nốt ruồi thời thượng, cùng cụm 4 camera sau độ phân giải lên đến 48 MP hỗ trợ nhiều tính năng chụp ảnh hấp dẫn.', 7190000, 5690000, 'https://cdn.tgdd.vn/Products/Images/42/219314/samsung-galaxy-a21s-055620-045627-400x460.png', 0),
(15, 'Samsung Galaxy S20', 2, 'Samsung Galaxy S20 là chiếc điện thoại với thiết kế màn hình tràn viền không khuyết điểm, camera sau ấn tượng, hiệu năng khủng cùng nhiều những đột phá công nghệ nổi bật, dẫn đầu thế giới.', 18990000, 17490000, 'https://cdn.tgdd.vn/Products/Images/42/217935/samsung-galaxy-s20-400x460-hong-400x460.png', 0),
(16, 'Samsung Galaxy S20 Ultra', 2, 'Samsung Galaxy S20 Ultra siêu phẩm công nghệ hàng đầu của Samsung mới ra mắt với nhiều đột phá công nghệ, màn hình tràn viền không khuyết điểm, hiệu năng đỉnh cao, camera độ phân giải siêu khủng 108 MP cùng khả năng zoom 100X thách thức mọi giới hạn smartphone.', 27490000, 25990000, 'https://cdn.tgdd.vn/Products/Images/42/217937/samsung-galaxy-s20-ultra-400x460-1-400x460.png', 0),
(17, 'Samsung Galaxy Fold', 2, 'Sau rất nhiều chờ đợi thì Samsung Galaxy Fold - chiếc smartphone màn hình gập đầu tiên của Samsung cũng đã chính thức trình làng với thiết kế mới lạ.', 51500000, 50000000, 'https://cdn.tgdd.vn/Products/Images/42/198158/samsung-galaxy-fold-black-400x460.png', 0),
(18, 'Samsung Galaxy Z Flip', 2, 'Cuối cùng sau bao nhiêu thời gian chờ đợi, chiếc điện thoại Samsung Galaxy Z Flip đã được Samsung ra mắt tại sự kiện Unpacked 2020. Siêu phẩm với thiết kế màn hình gập vỏ sò độc đáo, hiệu năng tuyệt đỉnh cùng nhiều công nghệ thời thượng, dẫn dầu 2020.', 37500000, 36000000, 'https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-chitiet-2-788x544.png', 0),
(19, 'OPPO A92', 3, 'OPPO A92 là mẫu smartphone tầm trung vừa mới được OPPO ra mắt đầu tháng 5/2020. Chiếc điện thoại gây ấn tượng với thiết kế màn hình khoét lỗ tràn viền, cụm 4 camera ấn tượng và được bán với mức giá vô cùng phải chăng.', 8490000, 6990000, 'https://cdn.tgdd.vn/Products/Images/42/220654/oppo-a92-white-400-400x460.png', 0),
(20, 'OPPO A52', 3, 'OPPO A52 là mẫu smartphone mới của OPPO hướng đến người dùng tầm trung. Thiết bị sở hữu sức mạnh từ vi xử lý Qualcomm Snapdragon, màn hình tràn viền nốt ruồi, pin khủng. Khiến cho chiếc điện thoại này trở thành một ứng cử viên cạnh tranh trong tầm giá.', 7490000, 5990000, 'https://cdn.tgdd.vn/Products/Images/42/220649/oppo-a52-black-400-400x460.png', 0),
(21, 'OPPO Find X2', 3, 'Tiếp nối thành công vang dội của thế hệ Find X, OPPO chính thức ra mắt Find X2 với những đường nét thanh lịch từ thiết kế phần cứng cho đến trải nghiệm phần mềm, hứa hẹn một vẻ đẹp hoàn hảo, một sức mạnh xứng tầm.', 25490000, 23990000, 'https://cdn.tgdd.vn/Products/Images/42/198150/oppo-find-x2-xanh-400x460-1-400x460.png', 0),
(22, 'OPPO Reno3 Pro', 3, 'OPPO Reno3 Pro tiếp nối truyền thống dòng Reno, vẫn sở hữu cụm camera sau chất lượng cao và bổ sung tính năng quay video Siêu chống rung 2.0 ấn tượng. OPPO cũng trang bị cho máy cụm camera selfie kép tích hợp AI, thiết kế cao cấp cùng màn hình siêu mượt 90Hz theo kịp xu hướng.', 13990000, 12490000, 'https://cdn.tgdd.vn/Products/Images/42/216172/oppo-reno3-pro-den-400x460-400x460.png', 0),
(23, 'OPPO Reno2 F', 3, 'OPPO Reno2 F là một trong 3 chiếc smartphone thuộc dòng OPPO Reno2 vừa được OPPO giới thiệu với thiết kế thời trang cùng nhiều nâng cấp mạnh mẽ về camera.', 8490000, 6990000, 'https://cdn.tgdd.vn/Products/Images/42/209800/oppo-reno2-f-white-400x460-400x460.png', 0),
(24, 'OPPO A31 (6GB/128GB)', 3, 'OPPO A31 2020 (6GB/128GB) - Smartphone gây ấn tượng với bộ 3 camera sau trứ danh OPPO, hiệu năng tốt kết hợp nhiều nâng cấp đáng kể về thiết kế trên giá thành phải chăng phù hợp với đại đa số người dùng.', 6490000, 4990000, 'https://cdn.tgdd.vn/Products/Images/42/218662/oppo-a31-2020-128gb-den-400x460-2-400x460.png', 0),
(25, 'OPPO A5 (2020) 128GB', 3, 'OPPO A5 (2020) 128GB là chiếc smartphone mới ra mắt của thương hiệu OPPO nhận nhiệm vụ đánh chiếm phân khúc giá rẻ/tầm trung với rất nhiều điểm nhấn đáng giá.', 6290000, 4790000, 'https://cdn.tgdd.vn/Products/Images/42/212116/oppo-a5-2020-128gb-trang-400x460-400x460.png', 0),
(26, 'Xiaomi Mi Note 10 Pro', 4, 'Xiaomi', 15490000, 13990000, 'https://cdn.tgdd.vn/Products/Images/42/213590/xiaomi-mi-note-10-pro-black-400x460.png', 0),
(27, 'Xiaomi Mi Note 10 Lite', 4, 'Xiaomi', 11490000, 9990000, 'https://cdn.tgdd.vn/Products/Images/42/220851/xiaomi-mi-note-10-lite-400x460-trang-1-400x460.png', 0),
(28, 'Xiaomi Redmi Note 9 Pro (6GB/128GB)', 4, 'Xiaomi', 8490000, 6990000, 'https://cdn.tgdd.vn/Products/Images/42/221820/xiaomi-redmi-note-9-pro-128gb-trang-400x460-400x460.png', 0),
(29, 'Xiaomi Redmi Note 9 Pro (6GB/64GB)', 4, 'Xiaomi', 7990000, 6490000, 'https://cdn.tgdd.vn/Products/Images/42/221817/xiaomi-redmi-note-9-pro-128gb-xam-400x460-400x460.png', 0),
(30, 'Xiaomi Redmi Note 9S', 4, 'Xiaomi', 7490000, 5990000, 'https://cdn.tgdd.vn/Products/Images/42/214924/xiaomi-redmi-note-9s-400x460-400x460.png', 0),
(31, 'Xiaomi Redmi Note 8 Pro (6GB/128GB)', 4, 'Xiaomi', 7490000, 5990000, 'https://cdn.tgdd.vn/Products/Images/42/214418/xiaomi-redmi-note-8-pro-6gb-128gb-white-400x460.png', 0),
(32, 'Xiaomi Redmi Note 8 Pro (6GB/64GB)', 4, 'Xiaomi', 6990000, 5490000, 'https://cdn.tgdd.vn/Products/Images/42/209797/xiaomi-redmi-note-8-pro-white-1-400x460.png', 0),
(33, 'Xiaomi Redmi Note 9', 4, 'Xiaomi', 6490000, 4990000, 'https://cdn.tgdd.vn/Products/Images/42/214925/xiaomi-redmi-note-9-xanh-dam-400x460-400x460.png', 0),
(34, 'Vivo V19', 5, 'VIVO', 10090000, 8590000, 'https://cdn.tgdd.vn/Products/Images/42/217859/vivo-v19-xanh-400x460-400x460.png', 0),
(35, 'Vivo V19 Neo', 5, 'VIVO', 9190000, 7690000, 'https://cdn.tgdd.vn/Products/Images/42/220977/vivo-v19-neo-den-400x460-1-400x460.png', 0),
(36, 'Vivo S1 Pro', 5, 'VIVO', 7490000, 5990000, 'https://cdn.tgdd.vn/Products/Images/42/202862/vivo-s1-pro-white-400x460.png', 0),
(37, 'Vivo Y50', 5, 'VIVO', 7790000, 6290000, 'https://cdn.tgdd.vn/Products/Images/42/219913/vivo-y50-tim-400x460-3-400x460.png', 0),
(38, 'Vivo Y30', 5, 'VIVO', 6490000, 4990000, 'https://cdn.tgdd.vn/Products/Images/42/222585/vivo-y30-xanh-400x460-400x460.png', 0),
(39, 'Vivo Y19', 5, 'VIVO', 6290000, 4790000, 'https://cdn.tgdd.vn/Products/Images/42/204651/vivo-y19-white-400x460.png', 0),
(40, 'Vivo U10', 5, 'VIVO', 5290000, 3790000, 'https://cdn.tgdd.vn/Products/Images/42/211156/vivo-u10-400x460.png', 0),
(41, 'Vivo Y11', 5, 'VIVO', 4490000, 2990000, 'https://cdn.tgdd.vn/Products/Images/42/212357/vivo-y11-400-460-400x460.png', 0),
(42, 'Vsmart Active 3 (6GB/64GB)', 6, 'Vsmart', 5490000, 3990000, 'https://cdn.tgdd.vn/Products/Images/42/217438/vsmart-active-3-6gb-purple-ruby-400x460-1-400x460.png', 0),
(43, 'Vsmart Joy 3 (4GB/64GB)', 6, 'Vsmart', 4590000, 3090000, 'https://cdn.tgdd.vn/Products/Images/42/219208/vsmart-joy-3-4gb-den-400x460-400x460.png', 0),
(44, 'Vsmart Joy 3 (3GB/32GB)', 6, 'Vsmart', 4090000, 2590000, 'https://cdn.tgdd.vn/Products/Images/42/217920/vsmart-joy-3-tim-400x460-400x460.png', 0),
(45, 'Vsmart Star 3', 6, 'Vsmart', 3490000, 1990000, 'https://cdn.tgdd.vn/Products/Images/42/218886/vsmart-star-3-xanh-400x460-400x460.png', 0),
(46, 'Huawei P40 Pro (Nền tảng Huawei Mobile Service)', 7, 'Huawei ', 25490000, 23990000, 'https://cdn.tgdd.vn/Products/Images/42/215773/huawei-p40-pro-400x460-3-400x460.png', 0),
(47, 'Huawei P40 (Nền tảng Huawei Mobile Service)', 7, 'Huawei ', 19490000, 17990000, 'https://cdn.tgdd.vn/Products/Images/42/211157/huawei-p40-400x460-1-400x460.png', 0),
(48, 'Huawei Nova 5T', 7, 'Huawei ', 9990000, 8490000, 'https://cdn.tgdd.vn/Products/Images/42/209795/huawei-nova-5t-400x460-400x460.png', 0),
(49, 'Huawei Nova 7i (Nền tảng Huawei Mobile Service)', 7, 'Huawei ', 8490000, 6990000, 'https://cdn.tgdd.vn/Products/Images/42/218363/huawei-nova-7i-pink-400x460-400x460.png', 0),
(50, 'Huawei Y9s', 7, 'Huawei ', 7490000, 5990000, 'https://cdn.tgdd.vn/Products/Images/42/214648/huawei-y9sb-blue-400x460.png', 0),
(51, 'Huawei P30 Lite', 7, 'Huawei ', 6990000, 5490000, 'https://cdn.tgdd.vn/Products/Images/42/198985/huawei-p30-lite-400x460.png', 0),
(52, 'Huawei Y9 Prime (2019)', 7, 'Huawei ', 5990000, 4490000, 'https://cdn.tgdd.vn/Products/Images/42/202268/huawei-y9-prime-2019-blue-400x460.png', 0),
(53, 'Huawei Y6p (Nền tảng Huawei Mobile Service)', 7, 'Huawei ', 4990000, 3490000, 'https://cdn.tgdd.vn/Products/Images/42/221926/huawei-y6p-xanh-400x460-400x460.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linkanh` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `linkanh`) VALUES
(1, 'https://cdn.tgdd.vn/Products/Images/42/211570/samsung-galaxy-a51-white-1-400x460.png'),
(2, 'https://cdn.tgdd.vn/Products/Images/42/216174/samsung-galaxy-a31-400x460-white-400x460.png');

-- --------------------------------------------------------

--
-- Table structure for table `type_products`
--

DROP TABLE IF EXISTS `type_products`;
CREATE TABLE IF NOT EXISTS `type_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkanh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hienthi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_products`
--

INSERT INTO `type_products` (`id`, `tieude`, `noidung`, `linkanh`, `hienthi`) VALUES
(1, 'iphone', 'dienthoaiIphone', 'https://cdn tgdd vn/Products/Images/42/153856/iphone-11-red-2-400x460-400x460 png', NULL),
(2, 'samsung', 'dienthoaisamsung', 'https://cdn.tgdd.vn/Products/Images/42/219314/samsung-galaxy-a21s-055620-045627-400x460.png\r\n', NULL),
(3, 'OPPO', 'dienthoaiOPPO', 'https://cdn.tgdd.vn/Products/Images/42/198150/oppo-find-x2-xanh-400x460-1-400x460.png\r\n\r\n', NULL),
(4, 'Xiaomi', 'dienthoaiXiaomi', 'https://cdn.tgdd.vn/Products/Images/42/213590/xiaomi-mi-note-10-pro-black-400x460.png', NULL),
(5, 'VIVO', 'dienthoaiVIVO', 'https://cdn.tgdd.vn/Products/Images/42/217859/vivo-v19-xanh-400x460-400x460.png', NULL),
(6, 'Vsmart', 'dienthoaiVsmart', 'https://cdn.tgdd.vn/Products/Images/42/217438/vsmart-active-3-6gb-purple-ruby-400x460-1-400x460.png', NULL),
(7, 'Huawei ', 'dienthoaiHuawei ', 'https://cdn.tgdd.vn/Products/Images/42/215773/huawei-p40-pro-400x460-3-400x460.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ten`, `email`, `matkhau`, `phone`, `diachi`) VALUES
(1, 'trương quang khải', 'khaitruong190220000@gmail.com', '$2y$10$/MhB9vYV/dcwSKt3wqhoWuiUuX/bv8v388Z8cZdPkMDfG496w64Gy', '0328046670', 'số 23 đường số 24 hiệp bình chánh quận thủ đức'),
(2, 'bùi thúi vi', '18520190@gm.uit.edu.vn', '$2y$10$u9h/d1m1D8rhJAM/CaOqz.AJtDWIfIzQ245m.X9dOhsGTMEraFQb.', '0337909775', 'đồng nai'),
(3, 'trương quang khải', '18520878@gm.uit.edu.vn', '$2y$10$xGtX2XJOEuqG0Kr/dMdUg.vEU3AeVmHWO2G9Q0zl.dt.y4Wam.MFi', '0328046670', 'số 23 đường số 24 hiệp bình chánh quận thủ đức');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`);

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `fk_id_bill` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id`),
  ADD CONSTRAINT `fk_id_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_type` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
