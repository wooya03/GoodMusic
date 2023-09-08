-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 23-09-08 20:46
-- 서버 버전: 10.4.28-MariaDB
-- PHP 버전: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `project`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `admins`
--

CREATE TABLE `admins` (
  `idx` int(11) NOT NULL,
  `userid` varchar(145) DEFAULT NULL,
  `email` varchar(245) DEFAULT NULL,
  `username` varchar(145) DEFAULT NULL,
  `passwd` varchar(200) DEFAULT NULL,
  `regdate` datetime DEFAULT current_timestamp(),
  `level` tinyint(4) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `end_login_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `admins`
--

INSERT INTO `admins` (`idx`, `userid`, `email`, `username`, `passwd`, `regdate`, `level`, `last_login`, `end_login_date`) VALUES
(4, 'admin', 'admin@shop.com', '관리자', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', '2022-01-24 17:12:32', 100, NULL, NULL);

-- --------------------------------------------------------

--
-- 테이블 구조 `basket`
--

CREATE TABLE `basket` (
  `idx` int(11) NOT NULL,
  `pro_pic` varchar(100) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `sale_ratio` int(11) NOT NULL,
  `cnt` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `product`
--

INSERT INTO `product` (`pid`, `name`, `price`, `sale_price`, `sale_ratio`, `cnt`, `category`, `image`) VALUES
(1, 'Maximum DK520', 620000, 497970, 20, 10000, 'electric guitar', 0x444b3532302e6a7067),
(5, 'Mark James - Maximum DK450R', 610000, 487970, 21, 10000, 'electric guitar', 0x444b323430522e6a7067),
(6, 'Ibanez - Prestige AZ2204', 3586000, 2869000, 20, 10000, 'electric guitar', 0x415a323230342e6a7067),
(7, 'Swing - Precision King', 426000, 291330, 32, 10000, 'bass guitar', 0x507265636973696f6e204b696e672e6a7067),
(8, 'dery Cafe Jazz 오데리 카페재즈 드럼세트 Bloody Tiger', 850000, 650000, 24, 5, 'drum', 0x4f64657279436166654a617a7a426c6f6f647954696765742e6a7067),
(9, 'Kurzweil KA-120 스테이지 피아노', 900000, 700000, 23, 100, 'keyboard', 0x4b413132302e6a7067),
(10, 'Roland A-49 / 미디 키보드 컨트롤러 (Pearl White)', 425000, 293700, 31, 1000, 'keyboard', 0x6134392e6a7067),
(11, 'Swing SC-270', 243000, 177280, 28, 1000, 'acoustic guitar', 0x73633237302e6a7067),
(12, 'Mark James - Modern Standard Jazz MJ500', 620000, 489000, 22, 1000, 'bass guitar', 0x4d4a3530302e6a7067),
(13, 'HEX - B100M', 369000, 294970, 21, 1000, 'bass guitar', 0x423130304d2e6a7067),
(14, 'Spear SAJ-250', 524000, 419000, 21, 10, 'bass guitar', 0x53414a3235302e6a7067),
(15, 'Spear FLEXTOOL 5현 HRD(M)', 420000, 385000, 9, 1, 'bass guitar', 0x464c4558544f4f4c2e6a7067),
(16, 'Spear SAJ-250(Winter Blue)', 524000, 419000, 21, 1, 'bass guitar', 0x53414a3235302831292e6a7067),
(17, 'Cort - B5 Element / 콜트 베이스기타 (OPTB)', 738000, 56000, 25, 5, 'bass guitar', 0x4235456c656d656e742e6a7067),
(18, 'Sadowsky - Metro Express Vintage JJ Bass 4 ', 1860000, 1341000, 28, 5, 'bass guitar', 0x4d6574726f5f457870726573735f56696e746167655f4a4a5f426173735f342e6a7067),
(19, 'Swing - G1 SE 베이스기타 / WH(R)', 498000, 398000, 21, 5, 'bass guitar', 0x473153452e6a7067),
(20, 'Vox Pathfinder Bass10 베이스기타 앰프', 187000, 140000, 26, 100000, 'bass amp', 0x7061746866696e6465722e6a7067);

-- --------------------------------------------------------

--
-- 테이블 구조 `qna`
--

CREATE TABLE `qna` (
  `num` int(11) NOT NULL COMMENT '게시판 번호',
  `id` varchar(13) NOT NULL,
  `name` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL,
  `regist_day` date NOT NULL,
  `reception_day` date NOT NULL,
  `state` varchar(11) NOT NULL DEFAULT '답변대기'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `qna`
--

INSERT INTO `qna` (`num`, `id`, `name`, `subject`, `content`, `regist_day`, `reception_day`, `state`) VALUES
(1, 'duddk1472', '우영아', 'aaa', '123', '2023-06-11', '0000-00-00', '답변대기'),
(3, 'duddk1472', '우영아', '문의1', 'ㅁ', '2023-06-11', '0000-00-00', '답변대기'),
(4, 'duddk1472', '우영아', '문의2', 'ㅁ', '2023-06-11', '0000-00-00', '답변대기'),
(5, 'duddk1472', '우영아', '문의3', 'ㅁ', '2023-06-11', '0000-00-00', '답변대기'),
(6, 'duddk1472', '우영아', '문의4', 'ㅁ', '2023-06-11', '0000-00-00', '답변대기');

-- --------------------------------------------------------

--
-- 테이블 구조 `user`
--

CREATE TABLE `user` (
  `num` int(10) NOT NULL,
  `id` varchar(13) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL,
  `regist_day` date NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `user`
--

INSERT INTO `user` (`num`, `id`, `pass`, `name`, `email`, `address`, `regist_day`, `point`) VALUES
(4, 'duddk1472', 'abcd1234', '우영아', 'duddk1472@naver.com', '대구시 남구 대명동', '2023-06-11', 0);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- 테이블의 인덱스 `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `admins`
--
ALTER TABLE `admins`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 테이블의 AUTO_INCREMENT `basket`
--
ALTER TABLE `basket`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 테이블의 AUTO_INCREMENT `qna`
--
ALTER TABLE `qna`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT COMMENT '게시판 번호', AUTO_INCREMENT=7;

--
-- 테이블의 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
