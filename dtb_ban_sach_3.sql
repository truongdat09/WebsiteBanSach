-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 04:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dtb_ban_sach_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `anhsach`
--

CREATE TABLE `anhsach` (
  `MAANH` int(11) NOT NULL,
  `MASACH` int(11) NOT NULL,
  `TENANH` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anhsach`
--

INSERT INTO `anhsach` (`MAANH`, `MASACH`, `TENANH`) VALUES
(1, 1, 'cd_01_01_01.jpg'),
(2, 1, 'cd_01_01_02.jpg'),
(3, 1, 'cd_01_01_03.jpg'),
(4, 1, 'cd_01_01_04.jpg'),
(5, 2, 'cd_01_02_01.jpg'),
(6, 2, 'cd_01_02_02.jpg'),
(7, 2, 'cd_01_02_03.jpg'),
(8, 2, 'cd_01_02_04.jpg'),
(9, 3, 'cd_01_03_01.jpg'),
(10, 3, 'cd_01_03_02.jpg'),
(11, 3, 'cd_01_03_03.jpg'),
(12, 3, 'cd_01_03_04.jpg'),
(13, 4, 'cd_01_04_01.jpg'),
(14, 4, 'cd_01_04_02.jpg'),
(15, 4, 'cd_01_04_03.jpg'),
(16, 4, 'cd_01_04_04.jpg'),
(17, 5, 'cd_01_05_01.jpg'),
(18, 5, 'cd_01_05_02.jpg'),
(19, 5, 'cd_01_05_03.jpg'),
(20, 5, 'cd_01_05_04.jpg'),
(21, 6, 'cd_01_01_01.jpg'),
(22, 6, 'cd_01_01_02.jpg'),
(23, 6, 'cd_01_01_03.jpg'),
(24, 6, 'cd_01_01_04.jpg'),
(25, 7, 'cd_01_02_01.jpg'),
(26, 7, 'cd_01_02_02.jpg'),
(27, 7, 'cd_01_02_03.jpg'),
(28, 7, 'cd_01_02_04.jpg'),
(29, 8, 'cd_01_03_01.jpg'),
(30, 8, 'cd_01_03_02.jpg'),
(31, 8, 'cd_01_03_03.jpg'),
(32, 8, 'cd_01_03_04.jpg'),
(33, 9, 'cd_01_04_01.jpg'),
(34, 9, 'cd_01_04_02.jpg'),
(35, 9, 'cd_01_04_03.jpg'),
(36, 9, 'cd_01_04_04.jpg'),
(37, 10, 'cd_01_05_01.jpg'),
(38, 10, 'cd_01_05_02.jpg'),
(39, 10, 'cd_01_05_03.jpg'),
(40, 10, 'cd_01_05_04.jpg'),
(41, 11, 'cd_01_06_01.jpg'),
(42, 11, 'cd_01_06_02.jpg'),
(43, 11, 'cd_01_06_03.jpg'),
(44, 11, 'cd_01_06_04.jpg'),
(45, 12, 'cd_01_07_01.jpg'),
(46, 12, 'cd_01_07_02.jpg'),
(47, 12, 'cd_01_07_03.jpg'),
(48, 12, 'cd_01_07_04.jpg'),
(49, 13, 'cd_01_08_01.jpg'),
(50, 13, 'cd_01_08_02.jpg'),
(51, 13, 'cd_01_08_03.jpg'),
(52, 14, 'cd_01_09_01.jpg'),
(53, 14, 'cd_01_09_02.jpg'),
(54, 14, 'cd_01_09_03.jpg'),
(55, 15, 'cd_01_10_01.jpg'),
(56, 15, 'cd_01_10_02.jpg'),
(57, 15, 'cd_01_10_03.jpg'),
(58, 15, 'cd_01_10_04.jpg'),
(59, 16, 'cd_01_06_01.jpg'),
(60, 16, 'cd_01_06_02.jpg'),
(61, 16, 'cd_01_06_03.jpg'),
(62, 16, 'cd_01_06_04.jpg'),
(63, 17, 'cd_01_07_01.jpg'),
(64, 17, 'cd_01_07_02.jpg'),
(65, 17, 'cd_01_07_03.jpg'),
(66, 17, 'cd_01_07_04.jpg'),
(67, 18, 'cd_01_08_01.jpg'),
(68, 18, 'cd_01_08_02.jpg'),
(69, 18, 'cd_01_08_03.jpg'),
(70, 19, 'cd_01_09_01.jpg'),
(71, 19, 'cd_01_09_02.jpg'),
(72, 19, 'cd_01_09_03.jpg'),
(73, 20, 'cd_01_10_01.jpg'),
(74, 20, 'cd_01_10_02.jpg'),
(75, 20, 'cd_01_10_03.jpg'),
(76, 20, 'cd_01_10_04.jpg'),
(77, 21, 'cd_01_11_01.jpg'),
(78, 21, 'cd_01_11_02.jpg'),
(79, 21, 'cd_01_11_03.jpg'),
(80, 21, 'cd_01_11_04.jpg'),
(81, 22, 'cd_01_12_01.jpg'),
(82, 22, 'cd_01_12_02.jpg'),
(83, 22, 'cd_01_12_03.jpg'),
(84, 22, 'cd_01_12_04.jpg'),
(85, 23, 'cd_01_13_01.jpg'),
(86, 23, 'cd_01_13_02.jpg'),
(87, 23, 'cd_01_13_03.jpg'),
(88, 24, 'cd_01_14_01.jpg'),
(89, 24, 'cd_01_14_02.jpg'),
(90, 24, 'cd_01_14_03.jpg'),
(91, 25, 'cd_01_15_01.jpg'),
(92, 25, 'cd_01_15_02.jpg'),
(93, 25, 'cd_01_15_03.jpg'),
(94, 25, 'cd_01_15_04.jpg'),
(95, 26, 'cd_01_11_02.jpg'),
(96, 26, 'cd_01_11_03.jpg'),
(97, 26, 'cd_01_11_04.jpg'),
(98, 27, 'cd_01_12_01.jpg'),
(99, 27, 'cd_01_12_02.jpg'),
(100, 27, 'cd_01_12_03.jpg'),
(101, 27, 'cd_01_12_04.jpg'),
(102, 28, 'cd_01_13_01.jpg'),
(103, 28, 'cd_01_13_02.jpg'),
(104, 28, 'cd_01_13_03.jpg'),
(105, 29, 'cd_01_14_01.jpg'),
(106, 29, 'cd_01_14_02.jpg'),
(107, 29, 'cd_01_14_03.jpg'),
(108, 30, 'cd_01_15_01.jpg'),
(109, 30, 'cd_01_15_02.jpg'),
(110, 30, 'cd_01_15_03.jpg'),
(111, 30, 'cd_01_15_04.jpg'),
(112, 31, 'cd_01_16_01.jpg'),
(113, 31, 'cd_01_16_02.jpg'),
(114, 31, 'cd_01_16_03.jpg'),
(115, 32, 'cd_01_17_01.jpg'),
(116, 32, 'cd_01_17_02.jpg'),
(117, 32, 'cd_01_17_03.jpg'),
(118, 32, 'cd_01_17_04.jpg'),
(119, 33, 'cd_01_18_01.jpg'),
(120, 33, 'cd_01_18_02.jpg'),
(121, 33, 'cd_01_18_03.jpg'),
(122, 34, 'cd_01_19_01.jpg'),
(123, 34, 'cd_01_19_02.jpg'),
(124, 34, 'cd_01_19_03.jpg'),
(125, 34, 'cd_01_19_04.jpg'),
(126, 35, 'cd_01_20_01.jpg'),
(127, 35, 'cd_01_20_02.jpg'),
(128, 35, 'cd_01_20_03.jpg'),
(129, 36, 'cd_01_16_01.jpg'),
(130, 36, 'cd_01_16_02.jpg'),
(131, 36, 'cd_01_16_03.jpg'),
(132, 37, 'cd_01_17_01.jpg'),
(133, 37, 'cd_01_17_02.jpg'),
(134, 37, 'cd_01_17_03.jpg'),
(135, 37, 'cd_01_17_04.jpg'),
(136, 38, 'cd_01_18_01.jpg'),
(137, 38, 'cd_01_18_02.jpg'),
(138, 38, 'cd_01_18_03.jpg'),
(139, 39, 'cd_01_19_01.jpg'),
(140, 39, 'cd_01_19_02.jpg'),
(141, 39, 'cd_01_19_03.jpg'),
(142, 39, 'cd_01_19_04.jpg'),
(143, 40, 'cd_01_20_01.jpg'),
(144, 40, 'cd_01_20_02.jpg'),
(145, 40, 'cd_01_20_03.jpg'),
(146, 41, 'cd_01_21_01.jpg'),
(147, 41, 'cd_01_21_02.jpg'),
(148, 41, 'cd_01_21_03.jpg'),
(149, 41, 'cd_01_21_04.jpg'),
(150, 42, 'cd_01_22_01.jpg'),
(151, 42, 'cd_01_22_02.jpg'),
(152, 42, 'cd_01_22_03.jpg'),
(153, 43, 'cd_01_23_01.jpg'),
(154, 43, 'cd_01_23_02.jpg'),
(155, 43, 'cd_01_23_03.jpg'),
(156, 43, 'cd_01_23_04.jpg'),
(157, 44, 'cd_01_24_01.jpg'),
(158, 44, 'cd_01_24_02.jpg'),
(159, 44, 'cd_01_24_03.jpg'),
(160, 45, 'cd_01_25_01.jpg'),
(161, 45, 'cd_01_25_02.jpg'),
(162, 45, 'cd_01_25_03.jpg'),
(163, 46, 'cd_01_21_01.jpg'),
(164, 46, 'cd_01_21_02.jpg'),
(165, 46, 'cd_01_21_03.jpg'),
(166, 46, 'cd_01_21_04.jpg'),
(167, 47, 'cd_01_22_01.jpg'),
(168, 47, 'cd_01_22_02.jpg'),
(169, 47, 'cd_01_22_03.jpg'),
(170, 48, 'cd_01_23_01.jpg'),
(171, 48, 'cd_01_23_02.jpg'),
(172, 48, 'cd_01_23_03.jpg'),
(173, 48, 'cd_01_23_04.jpg'),
(174, 49, 'cd_01_24_01.jpg'),
(175, 49, 'cd_01_24_02.jpg'),
(176, 49, 'cd_01_24_03.jpg'),
(177, 50, 'cd_01_25_01.jpg'),
(178, 50, 'cd_01_25_02.jpg'),
(179, 50, 'cd_01_25_03.jpg'),
(180, 51, 'cd_02_01_01.jpg'),
(181, 51, 'cd_02_01_02.jpg'),
(182, 51, 'cd_02_01_03.jpg'),
(183, 52, 'cd_02_02_01.jpg'),
(184, 52, 'cd_02_02_02.jpg'),
(185, 52, 'cd_02_02_03.jpg'),
(186, 53, 'cd_02_03_01.jpg'),
(187, 53, 'cd_02_03_02.jpg'),
(188, 53, 'cd_02_03_03.jpg'),
(189, 54, 'cd_02_04_01.jpg'),
(190, 54, 'cd_02_04_02.jpg'),
(191, 54, 'cd_02_04_03.jpg'),
(192, 55, 'cd_02_05_01.jpg'),
(193, 55, 'cd_02_05_02.jpg'),
(194, 55, 'cd_02_05_03.jpg'),
(195, 56, 'cd_02_01_01.jpg'),
(196, 56, 'cd_02_01_02.jpg'),
(197, 56, 'cd_02_01_03.jpg'),
(198, 57, 'cd_02_02_01.jpg'),
(199, 57, 'cd_02_02_02.jpg'),
(200, 57, 'cd_02_02_03.jpg'),
(201, 58, 'cd_02_03_01.jpg'),
(202, 58, 'cd_02_03_02.jpg'),
(203, 58, 'cd_02_03_03.jpg'),
(204, 59, 'cd_02_04_01.jpg'),
(205, 59, 'cd_02_04_02.jpg'),
(206, 59, 'cd_02_04_03.jpg'),
(207, 60, 'cd_02_05_01.jpg'),
(208, 60, 'cd_02_05_02.jpg'),
(209, 60, 'cd_02_05_03.jpg'),
(210, 61, 'cd_02_06_01.jpg'),
(211, 61, 'cd_02_06_02.jpg'),
(212, 61, 'cd_02_06_03.jpg'),
(213, 62, 'cd_02_07_01.jpg'),
(214, 62, 'cd_02_07_02.jpg'),
(215, 62, 'cd_02_07_03.jpg'),
(216, 63, 'cd_02_08_01.jpg'),
(217, 63, 'cd_02_08_02.jpg'),
(218, 63, 'cd_02_08_03.jpg'),
(219, 64, 'cd_02_09_01.jpg'),
(220, 64, 'cd_02_09_02.jpg'),
(221, 64, 'cd_02_09_03.jpg'),
(222, 65, 'cd_02_10_01.jpg'),
(223, 65, 'cd_02_10_02.jpg'),
(224, 65, 'cd_02_10_02.jpg'),
(225, 66, 'cd_02_10_02.jpg'),
(226, 66, 'cd_02_10_02.jpg'),
(227, 66, 'cd_02_10_02.jpg'),
(228, 67, 'cd_02_10_02.jpg'),
(229, 67, 'cd_02_10_02.jpg'),
(230, 67, 'cd_02_10_02.jpg'),
(231, 68, 'cd_02_10_02.jpg'),
(232, 68, 'cd_02_10_02.jpg'),
(233, 68, 'cd_02_10_02.jpg'),
(234, 69, 'cd_02_10_02.jpg'),
(235, 69, 'cd_02_10_02.jpg'),
(236, 69, 'cd_02_10_02.jpg'),
(237, 70, 'cd_02_10_02.jpg'),
(238, 70, 'cd_02_10_02.jpg'),
(239, 70, 'cd_02_10_02.jpg'),
(240, 71, 'cd_02_11_01.jpg'),
(241, 71, 'cd_02_11_02.jpg'),
(242, 71, 'cd_02_11_03.jpg'),
(243, 72, 'cd_02_12_01.jpg'),
(244, 72, 'cd_02_12_02.jpg'),
(245, 72, 'cd_02_12_03.jpg'),
(246, 73, 'cd_02_13_01.jpg'),
(247, 73, 'cd_02_13_02.jpg'),
(248, 73, 'cd_02_13_03.jpg'),
(249, 74, 'cd_02_14_01.jpg'),
(250, 74, 'cd_02_14_02.jpg'),
(251, 74, 'cd_02_14_03.jpg'),
(252, 75, 'cd_02_15_01.jpg'),
(253, 75, 'cd_02_15_02.jpg'),
(254, 75, 'cd_02_15_03.jpg'),
(255, 76, 'cd_02_11_01.jpg'),
(256, 76, 'cd_02_11_02.jpg'),
(257, 76, 'cd_02_11_03.jpg'),
(258, 77, 'cd_02_12_01.jpg'),
(259, 77, 'cd_02_12_02.jpg'),
(260, 77, 'cd_02_12_03.jpg'),
(261, 78, 'cd_02_13_01.jpg'),
(262, 78, 'cd_02_13_02.jpg'),
(263, 78, 'cd_02_13_03.jpg'),
(264, 79, 'cd_02_14_01.jpg'),
(265, 79, 'cd_02_14_02.jpg'),
(266, 79, 'cd_02_14_03.jpg'),
(267, 80, 'cd_02_15_01.jpg'),
(268, 80, 'cd_02_15_02.jpg'),
(269, 80, 'cd_02_15_03.jpg'),
(270, 81, 'cd_02_16_01.jpg'),
(271, 81, 'cd_02_16_02.jpg'),
(272, 81, 'cd_02_16_03.jpg'),
(273, 82, 'cd_02_17_01.jpg'),
(274, 82, 'cd_02_17_02.jpg'),
(275, 82, 'cd_02_17_03.jpg'),
(276, 83, 'cd_02_18_01.jpg'),
(277, 83, 'cd_02_18_02.jpg'),
(278, 83, 'cd_02_18_03.jpg'),
(279, 84, 'cd_02_19_01.jpg'),
(280, 84, 'cd_02_19_02.jpg'),
(281, 84, 'cd_02_19_03.jpg'),
(282, 85, 'cd_02_20_01.jpg'),
(283, 85, 'cd_02_20_02.jpg'),
(284, 85, 'cd_02_20_03.jpg'),
(285, 86, 'cd_02_16_01.jpg'),
(286, 86, 'cd_02_16_02.jpg'),
(287, 86, 'cd_02_16_03.jpg'),
(288, 87, 'cd_02_17_01.jpg'),
(289, 87, 'cd_02_17_02.jpg'),
(290, 87, 'cd_02_17_03.jpg'),
(291, 88, 'cd_02_18_01.jpg'),
(292, 88, 'cd_02_18_02.jpg'),
(293, 88, 'cd_02_18_03.jpg'),
(294, 89, 'cd_02_19_01.jpg'),
(295, 89, 'cd_02_19_02.jpg'),
(296, 89, 'cd_02_19_03.jpg'),
(297, 90, 'cd_02_20_01.jpg'),
(298, 90, 'cd_02_20_02.jpg'),
(299, 90, 'cd_02_20_03.jpg'),
(300, 91, 'cd_02_21_01.jpg'),
(301, 91, 'cd_02_21_02.jpg'),
(302, 91, 'cd_02_21_03.jpg'),
(303, 92, 'cd_02_22_01.jpg'),
(304, 92, 'cd_02_22_02.jpg'),
(305, 92, 'cd_02_22_03.jpg'),
(306, 93, 'cd_02_23_01.jpg'),
(307, 93, 'cd_02_23_02.jpg'),
(308, 93, 'cd_02_23_03.jpg'),
(309, 94, 'cd_02_24_01.jpg'),
(310, 94, 'cd_02_24_02.jpg'),
(311, 94, 'cd_02_24_03.jpg'),
(312, 95, 'cd_02_25_01.jpg'),
(313, 95, 'cd_02_25_02.jpg'),
(314, 95, 'cd_02_25_03.jpg'),
(315, 96, 'cd_02_21_01.jpg'),
(316, 96, 'cd_02_21_02.jpg'),
(317, 96, 'cd_02_21_03.jpg'),
(318, 97, 'cd_02_22_01.jpg'),
(319, 97, 'cd_02_22_02.jpg'),
(320, 97, 'cd_02_22_03.jpg'),
(321, 98, 'cd_02_23_01.jpg'),
(322, 98, 'cd_02_23_02.jpg'),
(323, 98, 'cd_02_23_03.jpg'),
(324, 99, 'cd_02_24_01.jpg'),
(325, 99, 'cd_02_24_02.jpg'),
(326, 99, 'cd_02_24_03.jpg'),
(327, 100, 'cd_02_25_01.jpg'),
(328, 100, 'cd_02_25_02.jpg'),
(329, 100, 'cd_02_25_03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'Tôi cần mua sách tiếng anh', 'Bạn vui lòng truy cập vào trang sản phẩm sau đó nhấn chọn thể loại tiếng anh bạn nhé!!!');

-- --------------------------------------------------------

--
-- Table structure for table `chude`
--

CREATE TABLE `chude` (
  `MACD` int(11) NOT NULL,
  `MATL` int(11) NOT NULL,
  `TENCD` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chude`
--

INSERT INTO `chude` (`MACD`, `MATL`, `TENCD`) VALUES
(1, 1, 'Sách văn học'),
(2, 1, 'Kinh tế'),
(3, 1, 'Thiếu nhi'),
(4, 1, 'Kỹ năng sống'),
(5, 1, 'Tâm lý - giới tính'),
(6, 2, 'Art & Photography'),
(7, 2, 'Biographies & Memoirs'),
(8, 2, 'Business & Economics'),
(9, 2, 'Magazines'),
(10, 2, 'Childrens Books');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MADH` int(11) NOT NULL,
  `MANV` int(11) DEFAULT NULL,
  `MAKH` int(11) NOT NULL,
  `NGAYDAT` date DEFAULT NULL,
  `NGAYGIAO` date DEFAULT NULL,
  `TONGTIEN` int(11) DEFAULT 0,
  `TRANGTHAI` int(11) DEFAULT NULL,
  `HT_THANHTOAN` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MADH`, `MANV`, `MAKH`, `NGAYDAT`, `NGAYGIAO`, `TONGTIEN`, `TRANGTHAI`, `HT_THANHTOAN`) VALUES
(1, 1, 1, '2023-02-02', '2023-02-10', 1800000, 2, 'Tiền mặt'),
(2, 1, 2, '2023-02-02', '2023-02-10', 410000, 2, 'Tiền mặt'),
(3, 2, 3, '2023-02-02', '2023-02-10', 900000, 2, 'Tiền mặt'),
(4, 2, 1, '2023-02-02', '2023-02-10', 1650000, 1, 'Tiền mặt'),
(5, 3, 3, '2023-02-02', '2023-02-10', 960000, 1, 'Tiền mặt'),
(6, 3, 1, '2023-02-02', '2023-02-10', 300000, 1, 'Tiền mặt'),
(10, 1, 3, '2023-05-13', '2023-05-14', 540000, 1, 'Tiền mặt'),
(14, 1, 2, '2023-02-02', '2023-02-10', 360000, 1, 'Tiền mặt'),
(15, 4, 3, '2023-02-02', '2023-02-10', 300000, 1, 'Tiền mặt'),
(23, NULL, 1, NULL, NULL, 300000, 2, '0'),
(24, NULL, 1, NULL, NULL, 250000, 0, '0'),
(25, NULL, 1, NULL, NULL, 250000, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` int(11) NOT NULL,
  `TENKH` varchar(50) DEFAULT NULL,
  `DIACHI` varchar(50) DEFAULT NULL,
  `SDT` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `TENDN_KH` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MAKH`, `TENKH`, `DIACHI`, `SDT`, `EMAIL`, `TENDN_KH`) VALUES
(1, 'Nguyễn Hữu Trung', '804/5 Lê Trọng Tấn, Bình Hưng Hòa, Bình Tân', '0342621112', 'huutrung368@gmail.com', 'trungnh'),
(2, 'Biện Thanh Nhựt', '184 Tân Kỳ Tân Quý, Tân Phú', '0343371112', 'thanhnhut1717@gmail.com', 'nhutbt'),
(3, 'Phan Thị Ánh Linh', '178 Dương Đức Hiền, Tân Phú', '0348762229', 'anhlinh999@gmail.com', 'linhpta'),
(4, 'Lê Minh Kha', '20 Cộng Hòa, Tân Bình', '034262998', 'leminhkha3123@gmail.com', 'khalm'),
(5, 'Tống Duy Trường Đạt', '120/5, Tân Quý, Tân Phú', '0342621117', 'truongdat@368@gmail.com', 'dattdt'),
(6, 'Nguyễn Văn Mương', '78 Tây Thanh, Tân Phú', '0342629997', 'muongne368@gmail.com', 'muongnv');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MANCC` int(11) NOT NULL,
  `TENNCC` varchar(50) DEFAULT NULL,
  `DIACHI` varchar(50) DEFAULT NULL,
  `SDT` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`MANCC`, `TENNCC`, `DIACHI`, `SDT`) VALUES
(1, 'Công ty TNHH Hữu Trung Cute', 'Quận 10, Thành Phố HCM', '0342621112'),
(2, 'Công ty cổ phần sách  Mcbooks', '289A Khuất Duy Tiến, P. Trung Hòa, Q. Cầu Giấy, Hà', '0342621112'),
(3, 'Công ty TNHH Đăng Nguyên', 'Lô 34E, Khu Đấu Giá 3ha, P. Phúc Diễm, Q. Bắc Từ L', '0342621112'),
(4, 'Công ty TNHH Việt Long', '', '0342621112');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MANV` int(11) NOT NULL,
  `TENNV` varchar(50) DEFAULT NULL,
  `GIOITINH` varchar(5) DEFAULT NULL,
  `SDT` varchar(20) DEFAULT NULL,
  `TENDN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MANV`, `TENNV`, `GIOITINH`, `SDT`, `TENDN`) VALUES
(1, 'Nguyễn Hữu Trung', 'Nam', '0342621112', 'huutrung'),
(2, 'Biện Thanh Nhựt', 'Nam', '0342621113', 'thanhnhut'),
(3, 'Tống Duy Trường Đạt', 'Nam', '0342621114', 'truongdat'),
(4, 'Phan Ánh Linh', 'Nữ', '0342621115', 'anhlinh');

-- --------------------------------------------------------

--
-- Table structure for table `nhaxb`
--

CREATE TABLE `nhaxb` (
  `MANXB` int(11) NOT NULL,
  `TENNXB` varchar(50) DEFAULT NULL,
  `DIACHI` varchar(50) DEFAULT NULL,
  `SDT` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nhaxb`
--

INSERT INTO `nhaxb` (`MANXB`, `TENNXB`, `DIACHI`, `SDT`) VALUES
(1, 'Nhà xuất bản Kim Đồng', '55 Quang Trung, Hà Nội, Việt Nam ', '(024) 39434730 '),
(2, 'Nhà xuất bản Tổng hợp thành phố Hồ Chí Minh', '62 Nguyễn Thị Minh Khai, Phường Đa Kao, Quận 1, TP', '(028) 38 256 804'),
(3, 'Nhà xuất bản Hội Nhà văn', '65 Nguyễn Du, Quận Hai Bà Trưng, Hà Nội ', '(024) 3822 2135 '),
(4, 'Nhà xuất bản Chính trị quốc gia Sự thật ', '6/86 Duy tân, Cầu Giấy, Hà Nội', '024 3822 1581');

-- --------------------------------------------------------

--
-- Table structure for table `phieunhap`
--

CREATE TABLE `phieunhap` (
  `MAPN` int(11) NOT NULL,
  `MANCC` int(11) NOT NULL,
  `NGAYNHAP` date DEFAULT NULL,
  `TONGNHAP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phieunhap`
--

INSERT INTO `phieunhap` (`MAPN`, `MANCC`, `NGAYNHAP`, `TONGNHAP`) VALUES
(1, 1, '2020-01-01', 900000),
(2, 2, '2022-03-01', 1800000),
(3, 1, '2022-05-01', 2100000),
(4, 2, '2022-07-01', 1800000),
(5, 1, '2022-10-01', 1200000),
(6, 3, '2022-12-01', 4200000),
(7, 1, '2023-01-01', 450000),
(8, 1, '2023-02-01', 600000),
(9, 4, '2023-03-01', 450000),
(10, 1, '2020-01-01', 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `MASACH` int(11) NOT NULL,
  `MACD` int(11) NOT NULL,
  `MANXB` int(11) NOT NULL,
  `TENSACH` varchar(50) DEFAULT NULL,
  `GIABAN` int(11) DEFAULT NULL,
  `ANHBIA` varchar(50) DEFAULT NULL,
  `SLTON` int(11) DEFAULT NULL,
  `MOTA` varchar(255) DEFAULT NULL,
  `TACGIA` varchar(50) DEFAULT NULL,
  `GIAMGIA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`MASACH`, `MACD`, `MANXB`, `TENSACH`, `GIABAN`, `ANHBIA`, `SLTON`, `MOTA`, `TACGIA`, `GIAMGIA`) VALUES
(1, 1, 1, 'Cây cam ngọt của tôi', 100000, 'cd_01_01.jpg', 90, '“Vị chua chát của cái nghèo hòa trộn với vị ngọt ngào khi khám phá ra những điều khiến cuộc đời này đáng số một tác phẩm kinh điển của Brazil.”', 'JOSÉ MAURO DE VASCONCELOS', NULL),
(2, 1, 1, 'Điều Kỳ Diệu Của Tiệm Tạp Hóa NAMIYA', 80000, 'cd_01_02.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'HAGASHINO KEIGO', NULL),
(3, 1, 2, 'Những Đêm Không Ngủ, Những Ngày Chậm Trôi', 150000, 'cd_01_03.jpg', 99, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'A Crazy Mind', NULL),
(4, 1, 2, 'Nhà Giả Kim', 89000, 'cd_01_04.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', ' Paulo Coelho', NULL),
(5, 1, 3, 'Phía Sau Nghi Can X', 110000, 'cd_01_05.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'HAGASHINO KEIGO', NULL),
(6, 1, 1, 'Điềm Tĩnh Trong Bận Rộn - Ít Hơn, Hiệu Quả Hơn', 100000, 'cd_01_06.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Marc Lesser', NULL),
(7, 1, 1, '3 Giờ Làm Việc Hết Việc Một Ngày - Phong Cách Làm ', 80000, 'cd_01_07.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Vương Ni', NULL),
(8, 1, 2, 'Nghệ Thuật Từ Chối – Cách Nói Không Mà Vẫn Có Được', 150000, 'cd_01_08.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'A Crazy Mind', NULL),
(9, 1, 2, 'Semantic Error – Lỗi Logic (Tập 2)', 89000, 'cd_01_09.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'J.Soori', NULL),
(10, 1, 3, 'Semantic Error – Lỗi Logic (Tập 1)', 110000, 'cd_01_10.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'J.Soori', NULL),
(11, 2, 4, 'Tâm Lý Học Về Tiền', 99000, 'cd_02_01.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'MORGAN HOUSEL', NULL),
(12, 2, 1, 'Chiến Tranh Tiền Tệ - Phần 1 - Ai Thực Sự Là Người', 101000, 'cd_02_02.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Song Hong Binh', NULL),
(13, 2, 2, 'LÀM GIÀU TỪ SIÊU CỔ PHIẾU – Câu Chuyện Của Gã Du M', 130000, 'cd_02_03.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'JESSE C. STINE', NULL),
(14, 2, 3, 'The Simple Path To Wealth: Con đường đi đến sự già', 70000, 'cd_02_04.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'JL Collins', NULL),
(15, 2, 1, '9 Lần Khởi Nghiệp - Chuyện Kể Về Những Thất Bại Và', 56000, 'cd_02_05.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Nguyễn Phương Nam', NULL),
(16, 2, 4, '90-20-30 90 Bài Học Vỡ Lòng Về Ý Tưởng Và Câu Chữ ', 99000, 'cd_02_06.jpg', 91, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Huỳnh Vĩnh Sơn', NULL),
(17, 2, 1, 'UX Writing - Quyền Năng Tối Thượng Của Nội Dung Tư', 101000, 'cd_02_07.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Khúc Cẩm Huyên', NULL),
(18, 2, 2, 'Tôi đã trở thành thương gia vui vẻ và sung túc - K', 130000, 'cd_02_08.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Jenny Phuong', NULL),
(19, 2, 3, 'Khởi Nghiệp Bán Lẻ - Bí Quyết Thành Công Và Giàu C', 70000, 'cd_02_09.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Trần Thanh Phong', NULL),
(20, 2, 1, ' Khởi nghiệp tinh gọn (The Lean Startup)', 56000, 'cd_02_10.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Eric Ries', NULL),
(21, 3, 2, 'Bách Khoa Cho Trẻ Em – Bách Khoa Khủng Long', 99000, 'cd_03_01.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Nguyễn Nhật Ánh', NULL),
(22, 3, 3, 'Bách Khoa Cho Trẻ Em - Bách Khoa Địa Lý (Tái Bản 2', 128000, 'cd_03_02.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Đông A', NULL),
(23, 3, 1, 'Bản Đồ', 310000, 'cd_03_03.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', ' Aleksandra Mizielińska', NULL),
(24, 3, 2, 'Siêu Nhí Hỏi Nhà Khoa Học Trả Lời - 100 Bí Ẩn Mọi ', 161000, 'cd_03_04.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Sue Nicholson', NULL),
(25, 3, 4, 'Siêu Nhí Biết Tuốt - 101 Bí Ẩn Kích Thích Tò Mò Củ', 103000, 'cd_03_05.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Sue Nicholson', NULL),
(26, 3, 2, '100 Kỹ Năng Sinh Tồn', 99000, 'cd_03_06.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Clint Emerson', NULL),
(27, 3, 3, 'Toán Tư duy - Beginning Creative Math (Dành cho bé', 128000, 'cd_03_07.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Phạm Thị Thanh', NULL),
(28, 3, 1, 'Cùng bé chinh phục Toán học - Conquering Pre-schoo', 310000, 'cd_03_08.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Phạm Thị Thanh', NULL),
(29, 3, 2, 'Kể Chuyện Trạng Việt Nam', 161000, 'cd_03_09.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Vũ Ngọc Khánh', NULL),
(30, 3, 4, 'Big Book Of Sea Creatures – Cuốn Sách Khổng Lồ Về ', 103000, 'cd_03_10.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Sue Nicholson', NULL),
(31, 4, 1, 'Rèn Luyện Tư Duy Phản Biện', 63000, 'cd_04_01.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Albert Rutherford', NULL),
(32, 4, 2, 'Đàn Ông Sao Hỏa Đàn Bà Sao Kim', 115000, 'cd_04_02.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'John Gray', NULL),
(33, 4, 3, 'Càng Bình Tĩnh Càng Hạnh Phúc', 96000, 'cd_04_03.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Vãn Tình', NULL),
(34, 4, 1, 'Luật Hấp Dẫn - Quy Luật Về Sức Mạnh Của Linh Hồn V', 77000, 'cd_04_04.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Prentice Mulford', NULL),
(35, 4, 2, 'Càng Kỷ Luật, Càng Tự Do', 75000, 'cd_04_05.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Ca Tây', NULL),
(36, 4, 1, 'Không Ai Có Thể Làm Bạn Tổn Thương Trừ Khi Bạn Cho', 63000, 'cd_04_06.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Yoo Eun Jung', NULL),
(37, 4, 2, 'Hãy Khiến Tương Lai Biết Ơn Vì Hiện Tại Bạn Đã Cố ', 115000, 'cd_04_07.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'John Gray', NULL),
(38, 4, 3, 'Nghệ Thuật Tập Trung - Nâng Cao Năng Suất, Tối Ưu ', 96000, 'cd_04_08.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Nhà tâm thần học DaiGo', NULL),
(39, 4, 1, 'Tâm Lý Học - Nghệ Thuật Giải Mã Hành Vi', 77000, 'cd_04_09.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Trần Lộ', NULL),
(40, 4, 2, 'Dòng Chảy', 75000, 'cd_04_10.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Mihaly Csikszentmihalyi', NULL),
(41, 5, 4, 'Trí Thông Minh Trên Giường', 300000, 'cd_05_01.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Esther Perel', NULL),
(42, 5, 2, 'Bạn Chỉ Dốc Lòng Yêu Ba Lần Trọn Vẹn - Hành Trình ', 90000, 'cd_05_02.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Kate Rose', NULL),
(43, 5, 1, 'Hướng Dẫn \" Sử Dụng\" Tình Yêu', 87000, 'cd_05_03.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Văn Thụy', NULL),
(44, 5, 4, 'Cẩm Nang Tuổi Dậy Thì Dành Cho Bạn Trai', 119000, 'cd_05_04.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Từ Ninh', NULL),
(45, 5, 1, 'Tâm lý học giao tiếp', 120000, 'cd_05_05.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Emily Alison, Laurence Alison', NULL),
(46, 5, 4, 'Câu Chuyện Tình Dục Đông Tây', 300000, 'cd_05_06.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Trần Thế Hương', NULL),
(47, 5, 2, 'Nghệ thuật phòng the', 90000, 'cd_05_07.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Kate Rose', NULL),
(48, 5, 1, 'Tình dục không chỉ là “chuyện ấy”', 87000, 'cd_05_08.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Văn Thụy', NULL),
(49, 5, 4, 'Bí Thuật Đạo Giáo - Liệu Pháp Phản Xạ Học Tình Dục', 119000, 'cd_05_09.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Từ Ninh', NULL),
(50, 5, 1, 'Vũ trụ bên trong - Làm chủ năng lượng “yêu”', 120000, 'cd_05_10.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Emily Alison, Laurence Alison', NULL),
(51, 6, 1, 'Caravaggio. The Complete Works', 1820000, 'cd_06_01.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Sebastian Sechuz', NULL),
(52, 6, 1, 'Small Architecture', 650000, 'cd_06_02.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Philip Jodidio', NULL),
(53, 6, 2, 'Byoung Cho', 1200000, 'cd_06_03.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Soon chun cho', NULL),
(54, 6, 2, 'Architecture: The Whole Story', 650000, 'cd_06_04.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Philip Jodidio', NULL),
(55, 6, 4, 'Living in Japan. 40th Ed', 780000, 'cd_06_05.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Tsachen', NULL),
(56, 6, 1, 'Book Of Flowers', 1820000, 'cd_06_06.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Tsachen', NULL),
(57, 6, 1, 'Jean-Michel Basquiat', 650000, 'cd_06_07.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Philip Jodidio', NULL),
(58, 6, 2, 'Masterpieces of Fantasy Art', 1200000, 'cd_06_08.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Tsachen', NULL),
(59, 6, 2, 'Swedish Design', 650000, 'cd_06_09.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Lasse Brunnström', NULL),
(60, 6, 4, '100 Contemporary Wood Buildings', 780000, 'cd_06_10.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Philip Jodidio', NULL),
(61, 7, 2, 'Japan Living : Form & Function at the Cutting Edge', 760000, 'cd_07_01.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', ' Marcia Iwatate - Geeta Mehta - Geeta K. Mehta - N', NULL),
(62, 7, 1, 'Beyond Context', 1540000, 'cd_07_02.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', ' Atelier Arcau', NULL),
(63, 7, 2, 'Contemporary Wood Buildings', 650000, 'cd_07_03.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Philip Jodidio', NULL),
(64, 7, 3, 'Becoming: The Sunday Times Number One Bestseller', 286000, 'cd_07_04.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Michelle Obama', NULL),
(65, 7, 1, 'The Good Kings: Absolute Power In Ancient Egypt An', 499000, 'cd_07_05.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Kara Cooney', NULL),
(66, 7, 2, 'Steve Jobs The Man Who Thought Different (Paperbac', 760000, 'cd_07_06.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', ' Marcia Iwatate - Geeta Mehta - Geeta K. Mehta - N', NULL),
(67, 7, 1, 'Disrupting The Game: From The Bronx To The Top Of ', 1540000, 'cd_07_07.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', ' Atelier Arcau', NULL),
(68, 7, 2, 'The Four : The Hidden DNA of Amazon , Apple , Face', 650000, 'cd_07_08.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Scott Galloway', NULL),
(69, 7, 3, 'The Four: The Hidden Dna Of Amazon, Apple, Faceboo', 286000, 'cd_07_09.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Scott Galloway', NULL),
(70, 7, 1, 'Tolkien And The Great War: The Threshold Of Middle', 499000, 'cd_07_10.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Kara Cooney', NULL),
(71, 8, 1, 'Zero To One: Notes On Start Ups, Or How To Build T', 188000, 'cd_08_01.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Petter thiel', NULL),
(72, 8, 2, 'How To Find Fulfilling Work: The School Of Life', 200000, 'cd_08_02.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Roman Krznaric', NULL),
(73, 8, 3, 'No Rules Rules : Netflix And The Culture Of Reinve', 321000, 'cd_08_03.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'REED HASTINGS,  Erin Meyer', NULL),
(74, 8, 1, 'Marketing 5.0: Technology For Humanity', 528000, 'cd_08_04.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Philip Kotler,  Philip Kotler, Philip Kotler - Kev', NULL),
(75, 8, 2, 'Blink: The Power of Thinking Without Thinking', 160000, 'cd_08_05.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Malcolm Gladwell', NULL),
(76, 8, 1, 'Six Thinking Hats', 188000, 'cd_08_06.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Petter thiel', NULL),
(77, 8, 2, 'HBR Guide to Office Politics (HBR Guide Series)', 200000, 'cd_08_07.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Roman Krznaric', NULL),
(78, 8, 3, 'Inspiring Leadership', 321000, 'cd_08_08.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'REED HASTINGS,  Erin Meyer', NULL),
(79, 8, 1, 'The Inspired Leader', 528000, 'cd_08_09.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Kerrie Fleming, Roger Delves Philip Kotler & Milto', NULL),
(80, 8, 2, 'The Power Of Significance', 160000, 'cd_08_10.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Malcolm Gladwell', NULL),
(81, 9, 3, 'Sách - Luật Tâm Thức – Giải Mã Ma Trận Vũ Trụ', 230000, 'cd_09_01.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Ngô Sa Thạch', NULL),
(82, 9, 1, 'The Art Of Game Of Thrones', 1030000, 'cd_09_02.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Jody Revenson', NULL),
(83, 9, 3, 'The Art of the Film: Fantastic Beasts and Where to', 587000, 'cd_09_03.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Author', NULL),
(84, 9, 1, 'Nikkei Asia - 2023: INSIDE JAPANS GENDER PROBLEM ', 138000, 'cd_09_04.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Nikkei Top Leader', NULL),
(85, 9, 2, 'Nikkei Asia - 2023: THE GENERAL IN HIS LABYRINTH', 138000, 'cd_09_05.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Nikkei Top Leader', NULL),
(86, 9, 3, 'Nikkei Asia - 2023: BEIJINGS INFRASTRUCTURE BINDS', 230000, 'cd_09_06.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Nikkei Top Leader', NULL),
(87, 9, 1, 'Nikkei Asia - 2023: BEIJINGS INFRASTRUCTURE BINDS', 1030000, 'cd_09_07.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Jody Revenson', NULL),
(88, 9, 3, 'The World Ahead 2023 - nhập khẩu từ Singapore, ấn ', 587000, 'cd_09_08.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Author', NULL),
(89, 9, 1, 'Game Of Thrones: The Costumes, The Official Book F', 138000, 'cd_09_09.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Nikkei Top Leader', NULL),
(90, 9, 2, 'Nikkei Asia - 2023: THE GENERAL IN HIS LABYRINTH ', 138000, 'cd_09_10.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Nikkei Top Leader', NULL),
(91, 10, 3, 'The Little Prince', 75000, 'cd_10_01.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Antonie De Saint Expery', NULL),
(92, 10, 1, 'The Fairy Tales of the Brothers Grimm', 970000, 'cd_10_02.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', ' Jacob Grimm , Wilhelm Grimm', NULL),
(93, 10, 3, 'Usborne Illustrated Fairy Tales', 267000, 'cd_10_03.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', ' Rosie Dickens', NULL),
(94, 10, 1, 'Usborne Illustrated Stories from Dickens', 300000, 'cd_10_04.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Charles Dickens - Barry Ablett', NULL),
(95, 10, 2, ' 40 Quick, Fun and Easy Activities to do at Home', 190000, 'cd_10_05.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', ' Sergei Urban', NULL),
(96, 10, 3, 'Truyện đọc tiếng Anh - Story of a Seagull and the ', 75000, 'cd_10_06.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Antonie De Saint Expery', NULL),
(97, 10, 1, 'Truyện thiếu nhi tiếng Anh - Usborne 10 Ten-Minute', 970000, 'cd_10_07.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', ' Jacob Grimm , Wilhelm Grimm', NULL),
(98, 10, 3, 'Sách tiếng Anh - Usborne Big Book of the Body', 267000, 'cd_10_08.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', ' Rosie Dickens', NULL),
(99, 10, 1, 'Sách Science Squad', 300000, 'cd_10_09.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', 'Charles Dickens - Barry Ablett', NULL),
(100, 10, 2, 'Sách tiếng Anh - Usborne First Encyclopedia of Sci', 190000, 'cd_10_10.jpg', 100, 'Một đêm vội vã lẩn trốn sau phi vụ khoắng đồ nhà người, Atsuya, Shota và Kouhei đã rẽ vào lánh tạm trong một căn nhà hoang bên con dốc vắng người qua lại. Căn nhà có vẻ khi xưa là một tiệm tạp hóa với ', ' Sergei Urban', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sach_donhang`
--

CREATE TABLE `sach_donhang` (
  `MADH` int(11) NOT NULL,
  `MASACH` int(11) NOT NULL,
  `SOLUONG` int(11) DEFAULT NULL,
  `GIABAN` int(11) DEFAULT NULL,
  `THANHTIEN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sach_donhang`
--

INSERT INTO `sach_donhang` (`MADH`, `MASACH`, `SOLUONG`, `GIABAN`, `THANHTIEN`) VALUES
(1, 1, 5, 100000, 500000),
(1, 2, 5, 80000, 400000),
(1, 3, 6, 150000, 900000),
(2, 5, 1, 110000, 110000),
(2, 8, 2, 150000, 300000),
(3, 1, 5, 100000, 500000),
(3, 2, 5, 80000, 400000),
(4, 1, 5, 100000, 500000),
(4, 2, 5, 80000, 400000),
(4, 8, 5, 150000, 750000),
(5, 13, 5, 130000, 650000),
(5, 20, 2, 56000, 112000),
(5, 21, 2, 99000, 198000),
(6, 8, 2, 150000, 300000),
(10, 1, 3, 100000, 300000),
(10, 2, 3, 80000, 240000),
(14, 1, 2, 100000, 200000),
(14, 2, 2, 80000, 160000),
(15, 1, 3, 100000, 300000),
(25, 1, 1, 100000, 100000),
(25, 3, 1, 150000, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `sach_phieunhap`
--

CREATE TABLE `sach_phieunhap` (
  `MASACH` int(11) NOT NULL,
  `MAPN` int(11) NOT NULL,
  `SOLUONG` int(11) DEFAULT NULL,
  `GIANHAP` int(11) DEFAULT NULL,
  `TONGTIEN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sach_phieunhap`
--

INSERT INTO `sach_phieunhap` (`MASACH`, `MAPN`, `SOLUONG`, `GIANHAP`, `TONGTIEN`) VALUES
(1, 1, 5, 30000, 150000),
(2, 1, 5, 30000, 150000),
(3, 1, 5, 30000, 150000),
(4, 1, 5, 30000, 150000),
(5, 1, 5, 30000, 150000),
(6, 2, 5, 30000, 150000),
(7, 2, 5, 30000, 150000),
(8, 2, 5, 30000, 150000),
(9, 2, 5, 30000, 150000),
(10, 2, 5, 30000, 150000),
(11, 2, 5, 30000, 150000),
(12, 2, 5, 30000, 150000),
(13, 2, 5, 30000, 150000),
(14, 2, 5, 30000, 150000),
(15, 2, 5, 30000, 150000),
(16, 2, 5, 30000, 150000),
(17, 2, 5, 30000, 150000),
(18, 3, 5, 30000, 150000),
(19, 3, 5, 30000, 150000),
(20, 3, 5, 30000, 150000),
(21, 3, 5, 30000, 150000),
(22, 3, 5, 30000, 150000),
(23, 3, 5, 30000, 150000),
(24, 3, 5, 30000, 150000),
(25, 3, 5, 30000, 150000),
(26, 3, 5, 30000, 150000),
(27, 3, 5, 30000, 150000),
(28, 3, 5, 30000, 150000),
(29, 3, 5, 30000, 150000),
(30, 3, 5, 30000, 150000),
(31, 3, 5, 30000, 150000),
(32, 4, 5, 30000, 150000),
(33, 4, 5, 30000, 150000),
(34, 4, 5, 30000, 150000),
(35, 4, 5, 30000, 150000),
(36, 4, 5, 30000, 150000),
(37, 4, 5, 30000, 150000),
(38, 4, 5, 30000, 150000),
(39, 4, 5, 30000, 150000),
(40, 4, 5, 30000, 150000),
(41, 4, 5, 30000, 150000),
(42, 4, 5, 30000, 150000),
(43, 4, 5, 30000, 150000),
(44, 1, 5, 30000, 150000),
(45, 5, 5, 30000, 150000),
(46, 5, 5, 30000, 150000),
(47, 5, 5, 30000, 150000),
(48, 5, 5, 30000, 150000),
(49, 5, 5, 30000, 150000),
(50, 5, 5, 30000, 150000),
(51, 5, 5, 30000, 150000),
(52, 5, 5, 30000, 150000),
(53, 6, 5, 30000, 150000),
(54, 6, 5, 30000, 150000),
(55, 6, 5, 30000, 150000),
(56, 6, 5, 30000, 150000),
(57, 6, 5, 30000, 150000),
(58, 6, 5, 30000, 150000),
(59, 6, 5, 30000, 150000),
(60, 6, 5, 30000, 150000),
(61, 6, 5, 30000, 150000),
(62, 6, 5, 30000, 150000),
(63, 6, 5, 30000, 150000),
(64, 6, 5, 30000, 150000),
(65, 6, 5, 30000, 150000),
(66, 6, 5, 30000, 150000),
(67, 6, 5, 30000, 150000),
(68, 6, 5, 30000, 150000),
(69, 6, 5, 30000, 150000),
(70, 6, 5, 30000, 150000),
(71, 6, 5, 30000, 150000),
(72, 6, 5, 30000, 150000),
(73, 6, 5, 30000, 150000),
(74, 6, 5, 30000, 150000),
(75, 6, 5, 30000, 150000),
(76, 6, 5, 30000, 150000),
(77, 6, 5, 30000, 150000),
(78, 6, 5, 30000, 150000),
(79, 6, 5, 30000, 150000),
(80, 6, 5, 30000, 150000),
(81, 7, 5, 30000, 150000),
(82, 7, 5, 30000, 150000),
(83, 7, 5, 30000, 150000),
(84, 8, 5, 30000, 150000),
(85, 8, 5, 30000, 150000),
(86, 8, 5, 30000, 150000),
(87, 8, 5, 30000, 150000),
(88, 9, 5, 30000, 150000),
(89, 9, 5, 30000, 150000),
(90, 9, 5, 30000, 150000),
(91, 10, 5, 30000, 150000),
(92, 10, 5, 30000, 150000),
(93, 10, 5, 30000, 150000),
(94, 10, 5, 30000, 150000),
(95, 10, 5, 30000, 150000),
(96, 10, 5, 30000, 150000),
(97, 10, 5, 30000, 150000),
(98, 10, 5, 30000, 150000),
(99, 10, 5, 30000, 150000),
(100, 10, 5, 30000, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan_khachhang`
--

CREATE TABLE `taikhoan_khachhang` (
  `TENDN_KH` varchar(50) NOT NULL,
  `MAKH` int(11) NOT NULL,
  `MATKHAU` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan_khachhang`
--

INSERT INTO `taikhoan_khachhang` (`TENDN_KH`, `MAKH`, `MATKHAU`) VALUES
('dattdt', 5, '123'),
('khalm', 4, '123'),
('linhpta', 1, '123'),
('muongnv', 2, '123'),
('nhutbt', 6, '123'),
('trungnh', 3, '123');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan_nhanvien`
--

CREATE TABLE `taikhoan_nhanvien` (
  `TENDN` varchar(50) NOT NULL,
  `MANV` int(11) DEFAULT NULL,
  `MATKHAU` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan_nhanvien`
--

INSERT INTO `taikhoan_nhanvien` (`TENDN`, `MANV`, `MATKHAU`) VALUES
('anhlinh', 4, '123'),
('anhlinh2', NULL, '123'),
('anhlinh3', NULL, '123'),
('huutrung', 1, '123'),
('thanhnhut', 2, '123'),
('truongdat', 3, '123');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `MATL` int(11) NOT NULL,
  `TENTL` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`MATL`, `TENTL`) VALUES
(1, 'Sách tiếng việt'),
(2, 'Sách tiếng anh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anhsach`
--
ALTER TABLE `anhsach`
  ADD PRIMARY KEY (`MAANH`),
  ADD KEY `FK_ANHSACH_ANH_SACH_SACH` (`MASACH`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`MACD`),
  ADD KEY `FK_CHUDE_CHUDE_THE_THELOAI` (`MATL`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MADH`),
  ADD KEY `FK_DONHANG_DONHANG_K_KHACHHAN` (`MAKH`),
  ADD KEY `FK_DONHANG_DONHANG_N_NHANVIEN` (`MANV`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKH`),
  ADD KEY `FK_KhachHang` (`TENDN_KH`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MANCC`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MANV`),
  ADD KEY `FK_NhanVien` (`TENDN`);

--
-- Indexes for table `nhaxb`
--
ALTER TABLE `nhaxb`
  ADD PRIMARY KEY (`MANXB`);

--
-- Indexes for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`MAPN`),
  ADD KEY `FK_PHIEUNHA_PHIEUNHAP_NHACUNGC` (`MANCC`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`MASACH`),
  ADD KEY `FK_SACH_CHUDE_SAC_CHUDE` (`MACD`),
  ADD KEY `FK_SACH_SACH_NHAX_NHAXB` (`MANXB`);

--
-- Indexes for table `sach_donhang`
--
ALTER TABLE `sach_donhang`
  ADD PRIMARY KEY (`MADH`,`MASACH`),
  ADD KEY `FK_SACH_DON_SACH_DONH_SACH` (`MASACH`);

--
-- Indexes for table `sach_phieunhap`
--
ALTER TABLE `sach_phieunhap`
  ADD PRIMARY KEY (`MASACH`,`MAPN`),
  ADD KEY `FK_SACH_PHI_SACH_PHIE_PHIEUNHA` (`MAPN`);

--
-- Indexes for table `taikhoan_khachhang`
--
ALTER TABLE `taikhoan_khachhang`
  ADD PRIMARY KEY (`TENDN_KH`);

--
-- Indexes for table `taikhoan_nhanvien`
--
ALTER TABLE `taikhoan_nhanvien`
  ADD PRIMARY KEY (`TENDN`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`MATL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anhsach`
--
ALTER TABLE `anhsach`
  MODIFY `MAANH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chude`
--
ALTER TABLE `chude`
  MODIFY `MACD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MADH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MAKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `MANCC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MANV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `nhaxb`
--
ALTER TABLE `nhaxb`
  MODIFY `MANXB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `MAPN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `MASACH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `MATL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anhsach`
--
ALTER TABLE `anhsach`
  ADD CONSTRAINT `FK_ANHSACH_ANH_SACH_SACH` FOREIGN KEY (`MASACH`) REFERENCES `sach` (`MASACH`);

--
-- Constraints for table `chude`
--
ALTER TABLE `chude`
  ADD CONSTRAINT `FK_CHUDE_CHUDE_THE_THELOAI` FOREIGN KEY (`MATL`) REFERENCES `theloai` (`MATL`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `FK_DONHANG_DONHANG_K_KHACHHAN` FOREIGN KEY (`MAKH`) REFERENCES `khachhang` (`MAKH`),
  ADD CONSTRAINT `FK_DONHANG_DONHANG_N_NHANVIEN` FOREIGN KEY (`MANV`) REFERENCES `nhanvien` (`MANV`);

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `FK_KhachHang` FOREIGN KEY (`TENDN_KH`) REFERENCES `taikhoan_khachhang` (`TENDN_KH`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `FK_NhanVien` FOREIGN KEY (`TENDN`) REFERENCES `taikhoan_nhanvien` (`TENDN`);

--
-- Constraints for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `FK_PHIEUNHA_PHIEUNHAP_NHACUNGC` FOREIGN KEY (`MANCC`) REFERENCES `nhacungcap` (`MANCC`);

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `FK_SACH_CHUDE_SAC_CHUDE` FOREIGN KEY (`MACD`) REFERENCES `chude` (`MACD`),
  ADD CONSTRAINT `FK_SACH_SACH_NHAX_NHAXB` FOREIGN KEY (`MANXB`) REFERENCES `nhaxb` (`MANXB`);

--
-- Constraints for table `sach_donhang`
--
ALTER TABLE `sach_donhang`
  ADD CONSTRAINT `FK_SACH_DON_SACH_DONH_DONHANG` FOREIGN KEY (`MADH`) REFERENCES `donhang` (`MADH`),
  ADD CONSTRAINT `FK_SACH_DON_SACH_DONH_SACH` FOREIGN KEY (`MASACH`) REFERENCES `sach` (`MASACH`);

--
-- Constraints for table `sach_phieunhap`
--
ALTER TABLE `sach_phieunhap`
  ADD CONSTRAINT `FK_SACH_PHI_SACH_PHIE_PHIEUNHA` FOREIGN KEY (`MAPN`) REFERENCES `phieunhap` (`MAPN`),
  ADD CONSTRAINT `FK_SACH_PHI_SACH_PHIE_SACH` FOREIGN KEY (`MASACH`) REFERENCES `sach` (`MASACH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
