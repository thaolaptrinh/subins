-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 08:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subins`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_buy`
--

CREATE TABLE `history_buy` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `type` varchar(999) DEFAULT NULL,
  `soluong` varchar(999) DEFAULT NULL,
  `tong_tien` varchar(999) DEFAULT NULL,
  `link_buy` varchar(999) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL,
  `ghichu` longtext NOT NULL,
  `status` varchar(999) DEFAULT NULL,
  `date` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `history_naptien`
--

CREATE TABLE `history_naptien` (
  `id` int(11) NOT NULL,
  `type` varchar(999) NOT NULL,
  `id_user` int(11) NOT NULL,
  `thucnhan` varchar(999) DEFAULT NULL,
  `trangthai` varchar(999) NOT NULL,
  `date` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `list_hotro`
--

CREATE TABLE `list_hotro` (
  `id` int(11) NOT NULL,
  `loai_hotro` varchar(999) NOT NULL,
  `tieu_de_hotro` varchar(999) NOT NULL,
  `id_hotro` int(11) NOT NULL,
  `date` varchar(999) DEFAULT NULL,
  `noi_dung_hotro` varchar(999) NOT NULL,
  `noi_dung_xuly` longtext NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `log_site`
--

CREATE TABLE `log_site` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `note` text DEFAULT NULL,
  `ip` varchar(999) DEFAULT NULL,
  `date` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `note_thongbao`
--

CREATE TABLE `note_thongbao` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `date` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `server_service`
--

CREATE TABLE `server_service` (
  `id` int(11) NOT NULL,
  `code_service` varchar(999) DEFAULT NULL,
  `server_service` varchar(999) DEFAULT NULL,
  `rate_service` varchar(999) DEFAULT NULL,
  `title_service` varchar(999) DEFAULT NULL,
  `server_name` varchar(999) NOT NULL,
  `status_service` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `logo` longtext DEFAULT NULL,
  `ten_website` longtext DEFAULT NULL,
  `favicon` longtext NOT NULL,
  `bao_tri` longtext NOT NULL,
  `gioi_thieu_web` longtext NOT NULL,
  `thongbao` longtext NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(999) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `password` varchar(999) DEFAULT NULL,
  `email` varchar(999) NOT NULL,
  `capbac` varchar(999) DEFAULT NULL,
  `money` varchar(999) DEFAULT NULL,
  `tongnap` varchar(999) DEFAULT NULL,
  `tongtru` varchar(999) DEFAULT NULL,
  `banned` varchar(999) DEFAULT NULL,
  `time_banned` varchar(999) DEFAULT NULL,
  `ip` varchar(999) DEFAULT NULL,
  `cuphap` varchar(999) DEFAULT NULL,
  `date` varchar(999) DEFAULT NULL,
  `lastdate` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_buy`
--
ALTER TABLE `history_buy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_service` (`id_service`);

--
-- Indexes for table `history_naptien`
--
ALTER TABLE `history_naptien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `list_hotro`
--
ALTER TABLE `list_hotro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_hotro` (`id_hotro`);

--
-- Indexes for table `log_site`
--
ALTER TABLE `log_site`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `note_thongbao`
--
ALTER TABLE `note_thongbao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `server_service`
--
ALTER TABLE `server_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_buy`
--
ALTER TABLE `history_buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_naptien`
--
ALTER TABLE `history_naptien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list_hotro`
--
ALTER TABLE `list_hotro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_site`
--
ALTER TABLE `log_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `note_thongbao`
--
ALTER TABLE `note_thongbao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `server_service`
--
ALTER TABLE `server_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history_buy`
--
ALTER TABLE `history_buy`
  ADD CONSTRAINT `history_buy_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `history_buy_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `server_service` (`id`);

--
-- Constraints for table `history_naptien`
--
ALTER TABLE `history_naptien`
  ADD CONSTRAINT `history_naptien_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `list_hotro`
--
ALTER TABLE `list_hotro`
  ADD CONSTRAINT `FK_hotro` FOREIGN KEY (`id_hotro`) REFERENCES `users` (`id`);

--
-- Constraints for table `log_site`
--
ALTER TABLE `log_site`
  ADD CONSTRAINT `log_site_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `note_thongbao`
--
ALTER TABLE `note_thongbao`
  ADD CONSTRAINT `note_thongbao_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
