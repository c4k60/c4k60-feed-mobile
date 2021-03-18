-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 18, 2021 lúc 04:04 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `members`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(1111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `email` varchar(999) NOT NULL,
  `name` varchar(999) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date_of_birth` date NOT NULL,
  `about` varchar(95) NOT NULL,
  `permission` varchar(11) NOT NULL,
  `oauth_provider` varchar(999) NOT NULL,
  `oauth_uid` varchar(999) NOT NULL,
  `profile_pic` varchar(999) NOT NULL,
  `date` date NOT NULL,
  `verified` varchar(11) NOT NULL,
  `activation_code` varchar(11) NOT NULL,
  `location` varchar(999) NOT NULL,
  `school` varchar(99) NOT NULL,
  `live_in` varchar(999) NOT NULL,
  `relationship` varchar(11) NOT NULL,
  `followers` int(11) NOT NULL,
  `cover_pic` varchar(999) NOT NULL,
  `other_name` varchar(999) NOT NULL,
  `has_cover` varchar(11) NOT NULL,
  `highlight_photo` varchar(999) NOT NULL,
  `profile_pic_id` int(5) NOT NULL,
  `cover_pic_id` int(5) NOT NULL,
  `highlight_pic_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `name`, `gender`, `date_of_birth`, `about`, `permission`, `oauth_provider`, `oauth_uid`, `profile_pic`, `date`, `verified`, `activation_code`, `location`, `school`, `live_in`, `relationship`, `followers`, `cover_pic`, `other_name`, `has_cover`, `highlight_photo`, `profile_pic_id`, `cover_pic_id`, `highlight_pic_id`) VALUES
(1, 'ta03', '$2y$10$vRrIsOZrdX1tItFY9vQlGu6grwZfgkyDowma6kH7mcIPA5EB0N5ku', 'tunnaduong@gmail.com', 'Dương Tùng Anh', 'male', '2003-11-21', '', 'user', '', '', '/images/default_pic.jpg', '2021-02-03', 'no', '', '', '', '', '', 0, '', '', 'none', '', 0, 0, 0),
(2, 'tunnaduong', '$2y$10$lC/vFAiOmWfrI68s2j6Q4eRRRih93Bcm6Nod0VuHKJE2oNkrLljMy', 'tunnaduong@gmail.com', 'Dương Tùng Anh', 'male', '2003-11-21', 'Đem thế giới lại gần nhau hơn.', 'admin', '', '', '/images/tunna.jpg', '2021-02-03', 'yes', '', 'Kim Bảng, Hà Nam', 'THPT Chuyên Hà Nam', 'Phủ Lý', 'Độc thân', 81834, '/images/tunna_cover.jpg', 'Tunna Duong', 'block', '/images/tunganhhai.jpg', 21110, 25896, 14758),
(4, 'hoangphat', '$2y$10$44n5FdqIuWZX.anibvSO1ORpRqlACEXanLLwDb2aV6FNpQsM7WQtS', 'hoangphata1k60@gmail.com', 'Hoàng Phát', 'male', '2003-05-19', '', 'user', '', '', '/images/phatdeptrai.jpg', '2021-02-05', 'no', '', '', '', '', '', 0, '', '', 'none', '', 0, 0, 0),
(5, 'tunganh03', '$2y$10$wJx15d.OCO1z8i3HcPS/3eZSqb4REuOoSCxo.ED4j416yApECyKOy', 'tunganhdeptrai@gmail.com', 'Anh tùng', 'male', '2003-11-21', '', 'user', '', '', '/images/default_pic.jpg', '2021-02-05', 'no', '', '', '', '', '', 0, '', '', 'none', '', 0, 0, 0),
(18, 'ndhai', '$2y$10$O8o4gbJvG9IpdP5/LXcGn.kgLMY3BC66il0XWLD2Ilct77C3z/ngu', 'luongminh478@gmail.com', 'Nguyễn Đặng Hải', 'male', '2003-12-10', '', 'user', '', '', '/images/default_pic.jpg', '2021-03-10', 'no', '', '', '', '', '', 0, '', '', 'none', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images_upload`
--

CREATE TABLE `images_upload` (
  `id` int(11) NOT NULL,
  `c4id` int(5) NOT NULL,
  `username` varchar(999) NOT NULL,
  `filename` varchar(999) NOT NULL,
  `time_of_upload` datetime NOT NULL,
  `caption` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `images_upload`
--

INSERT INTO `images_upload` (`id`, `c4id`, `username`, `filename`, `time_of_upload`, `caption`) VALUES
(1, 21110, 'tunnaduong', '/images/tunna.jpg', '2021-02-06 17:50:00', ''),
(2, 25896, 'tunnaduong', '/images/PHQ_2410-min.jpg', '2021-02-07 18:24:43', ''),
(3, 53132, 'tunnaduong', 'images/pink-flower-tree-facebook-cover-photo.jpg', '2021-02-07 21:01:43', 'sdsd'),
(5, 12806, 'tunnaduong', '/images/default_pic.jpg', '2021-02-07 21:15:42', 'concac');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `body` longtext NOT NULL,
  `user_from` varchar(99) NOT NULL,
  `user_to` varchar(99) NOT NULL,
  `date_sent` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `messages`
--

INSERT INTO `messages` (`id`, `body`, `user_from`, `user_to`, `date_sent`) VALUES
(1, '(y)', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-27 20:10:22'),
(2, 'Hêlôooo!', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-27 20:11:37'),
(3, 'Xin chào các bạn đã đến với nhóm chat chính thức của C4K60 trên C4K60 Feed!', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-27 20:12:47'),
(4, 'Đây là một tin nhắn mẫu. Bạn có thể xoá bỏ nó trong phpMyAdmin hoặc phớt lờ sự tồn tại của nó.', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-27 20:13:36'),
(5, 'Nhìn kĩ lại đi bủh đây là giao diện của C4K60 not Facebook :v', 'hoangphat', 'Ngưng Bích Buildings', '2021-02-27 20:14:16'),
(6, 'lol', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-27 20:45:44'),
(7, 'dảk dảk bủh bủh lờ mao', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-27 20:46:35'),
(8, 'lmao', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-27 20:47:05'),
(9, 'lờ', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-27 20:48:09'),
(10, 'mao', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-27 20:48:13'),
(11, 'x', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-27 20:48:18'),
(12, 'd', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-27 20:48:20'),
(13, 'd', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-27 20:48:22'),
(14, 'cc đm m&agrave;y', 'tunganh03', 'Ngưng Bích Buildings', '2021-02-27 21:10:40'),
(15, 'abc', 'tunganh03', 'Ngưng Bích Buildings', '2021-02-27 21:22:11'),
(16, 'fuck you bitch', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-28 11:27:44'),
(17, 'd', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-28 11:36:41'),
(18, '.', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-28 17:08:35'),
(19, 'xyz', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-28 17:08:46'),
(20, 'h&iacute; anh em!', 'ta03', 'Ngưng Bích Buildings', '2021-02-28 17:11:04'),
(21, 'h&iacute; con mẹ m&agrave;y &agrave;', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-28 17:12:27'),
(22, 'đcm vcl', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-28 17:18:57'),
(23, 'fukk', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-28 17:19:07'),
(81, '(y)', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-28 18:10:23'),
(82, '(y)', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-28 18:11:45'),
(83, '(y)', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-28 18:12:00'),
(84, '(y)', 'ta03', 'Ngưng Bích Buildings', '2021-02-28 18:20:20'),
(85, 'địt cả họ thằng n&agrave;o bấm like tin nhắn n&agrave;y lu&ocirc;n', 'ta03', 'Ngưng Bích Buildings', '2021-02-28 18:20:40'),
(86, '(y)', 'hoangphat', 'Ngưng Bích Buildings', '2021-02-28 18:43:07'),
(87, 'bố m&agrave;y cứ bấm like đấy th&igrave; l&agrave;m sao n&agrave;o', 'hoangphat', 'Ngưng Bích Buildings', '2021-02-28 18:43:17'),
(88, ':))))', 'hoangphat', 'Ngưng Bích Buildings', '2021-02-28 18:43:19'),
(89, 'cười v&atilde;i loz', 'hoangphat', 'Ngưng Bích Buildings', '2021-02-28 18:43:24'),
(90, 'haha same here', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-28 20:09:01'),
(91, '(y)', 'tunnaduong', 'Ngưng Bích Buildings', '2021-02-28 20:09:23'),
(92, 'hi', 'tunnaduong', 'Ngưng Bích Buildings', '2021-03-03 18:59:01'),
(93, '(y)', 'tunnaduong', 'Ngưng Bích Buildings', '2021-03-03 18:59:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc_posts`
--

CREATE TABLE `tintuc_posts` (
  `id` int(11) NOT NULL,
  `author` varchar(99) NOT NULL,
  `content` text NOT NULL,
  `timeofpost` datetime NOT NULL,
  `has_comment` varchar(3) NOT NULL,
  `avatar` varchar(999) NOT NULL,
  `has_image` varchar(7) NOT NULL,
  `image` varchar(999) NOT NULL,
  `username` varchar(99) NOT NULL,
  `c4id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc_posts`
--

INSERT INTO `tintuc_posts` (`id`, `author`, `content`, `timeofpost`, `has_comment`, `avatar`, `has_image`, `image`, `username`, `c4id`) VALUES
(25, 'Dương Tùng Anh', 'Hôm nay là một ngày đẹp trời!', '2021-02-06 10:07:03', 'no', '/images/tunna.jpg', 'none', ' images/', 'tunnaduong', 0),
(27, 'Dương Tùng Anh', 'spam cực dài\r\nspam cực dài\r\nspam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dàispam cực dài', '2021-02-06 13:40:47', 'no', '/images/tunna.jpg', 'none', ' images/', 'tunnaduong', 0),
(28, 'Dương Tùng Anh', 'spam again :>', '2021-02-06 13:42:06', 'no', '/images/tunna.jpg', 'none', ' images/', 'tunnaduong', 0),
(31, 'Dương Tùng Anh', 't', '2021-02-06 17:13:06', 'no', '/images/tunna.jpg', 'none', ' images/', 'tunnaduong', 0),
(39, 'Dương Tùng Anh', 'sdsd', '2021-02-07 21:15:12', 'no', '/images/tunna.jpg', 'none', ' /images/', 'tunnaduong', 0),
(41, 'Dương Tùng Anh', 'wtf is going on', '2021-02-13 22:42:46', 'no', '/images/tunna.jpg', 'none', ' /images/', 'tunnaduong', 0),
(42, 'Hoàng Phát', 'Tôi bị điên bẩm sinh', '2021-02-28 21:41:14', 'no', '/images/phatdeptrai.jpg', 'none', ' /images/', 'hoangphat', 0),
(43, 'Hoàng Phát', '1 like mai nghỉ học', '2021-02-28 21:46:30', 'no', '/images/phatdeptrai.jpg', 'none', ' /images/', 'hoangphat', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc_post_likes`
--

CREATE TABLE `tintuc_post_likes` (
  `like_id` int(11) NOT NULL,
  `username_of_like` varchar(99) NOT NULL,
  `liked_post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc_post_likes`
--

INSERT INTO `tintuc_post_likes` (`like_id`, `username_of_like`, `liked_post_id`) VALUES
(186, 'tunnaduong', 43),
(187, 'tunnaduong', 42),
(188, 'tunnaduong', 39),
(190, 'tunganh03', 42),
(192, 'tunganh03', 27),
(198, 'tunganh03', 43),
(204, 'tunganh03', 39),
(205, 'tunganh03', 31),
(206, 'tunganh03', 28),
(207, 'tunganh03', 41),
(208, 'tunganh03', 25);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images_upload`
--
ALTER TABLE `images_upload`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc_posts`
--
ALTER TABLE `tintuc_posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc_post_likes`
--
ALTER TABLE `tintuc_post_likes`
  ADD PRIMARY KEY (`like_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `images_upload`
--
ALTER TABLE `images_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT cho bảng `tintuc_posts`
--
ALTER TABLE `tintuc_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `tintuc_post_likes`
--
ALTER TABLE `tintuc_post_likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
