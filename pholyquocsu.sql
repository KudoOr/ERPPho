-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 10, 2018 lúc 09:51 AM
-- Phiên bản máy phục vụ: 10.1.33-MariaDB
-- Phiên bản PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pholyquocsu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Phở nước', 'cac mon liên quán dến cơm rang', '2018-08-29 14:11:17', '2018-08-29 14:11:17'),
(3, 'Cơm rang - phở xào', 'Các món cơm', NULL, NULL),
(4, 'fsdf', 'fdsfds', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `url` text,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `foods`
--

INSERT INTO `foods` (`id`, `title`, `category_id`, `price`, `url`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Cơm rang dưa bò', 3, 45000, '/public/uploads/img/fdsfds.PNG', 'fdsf', '2018-08-28 14:09:35', '2018-08-28 14:09:35'),
(5, 'Phở tái chín', 2, 45000, '/public/uploads/img/com-rang-thap-cam.PNG', 'cơm thập cẩm', '2018-08-29 14:11:50', '2018-08-29 14:11:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `weigh_before` varchar(32) NOT NULL,
  `weigh_after` varchar(32) NOT NULL,
  `percen` varchar(32) NOT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `materials`
--

INSERT INTO `materials` (`id`, `weigh_before`, `weigh_after`, `percen`, `created_at`, `updated_at`) VALUES
(1, '12', '0', '100', '2018-09-10 00:08:38', '2018-09-10 00:08:38'),
(2, '23', '12', '47.82608695652174', '2018-09-10 00:23:52', '2018-09-10 00:23:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'pholyquocsu@pholyquocsu.com', '$2y$10$eyHOhddEtqE9YVXWnyy3duAzBpaAqVUDSOj20/3FrwMa0N2CbhkT2', NULL, NULL, NULL),
(2, 'admin', 'pholyquocsu@pholyquocsu.com', '$2y$10$u.x38fk/Qouh7h7axRMgWurB7SClPGvbWDPNNeC2V170J3eggQlGu', NULL, NULL, NULL),
(3, 'admin', 'pholyquocsu@pholyquocsu.com', '$2y$10$7fnQwpbSctYVaHVqr98r2OzEvPQaw8gLh051x/PkYcv8l2Ghgzt4u', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
