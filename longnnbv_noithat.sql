-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 29, 2020 lúc 12:26 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `longnnbv_noithat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `parent` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `stt` int(5) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `text`, `parent`, `img`, `stt`) VALUES
(1, 'PHÒNG KHÁCH', 'Bao gồm các loại nội thất cần thiết, biến ngôi nhà bạn đẹp hơn', 0, 'menu01.jpg', 0),
(2, 'PHÒNG LÀM VIỆC', 'Gói gọn trong từng không gian căn phòng, tạo cảm giác thoải mái', 0, 'menu02.jpg', 1),
(3, 'PHÒNG NGỦ', 'Nơi bạn hòa vào giấc ngủ cùng với chiếc giường của mình', 0, 'menu03.jpg', 2),
(4, 'PHÒNG ĂN', 'Một không gian sạch cho bạn', 0, 'menu04.jpg', 3),
(5, 'HÀNG TRANG TRÍ', 'Giúp ngôi nhà thêm phong cách', 0, 'menu05.jpg', 4),
(6, 'KHÔNG GIAN KHÁC', 'Tự tạo nên một không gian dành riêng cho chính bạn và gia đình của mình !', 0, 'menu06.jpg', 5),
(47, 'Ghế bar', '', 4, NULL, 0),
(48, 'Ghế bệt', '', 2, NULL, 0),
(49, 'Ghế phòng ăn', '', 4, NULL, 0),
(50, 'Ghế văn phòng', '', 2, NULL, 0),
(52, 'Kệ TV', '', 1, NULL, 0),
(53, 'Kệ sách', '', 2, NULL, 0),
(54, 'Tủ đầu giường\r\n', '', 3, NULL, 0),
(55, 'Bàn ăn', '', 4, NULL, 0),
(56, 'Bàn làm việc', '', 2, NULL, 0),
(57, 'Bàn thấp', '', 1, NULL, 0),
(58, 'Bàn trang trí', '', 1, NULL, 0),
(59, 'Giường tầng', '', 3, NULL, 0),
(60, 'Giường đơn', '', 3, NULL, 0),
(61, 'Giường đôi', '', 3, NULL, 0),
(62, 'Tủ giày', '', 1, NULL, 0),
(63, 'Tủ hồ sơ', '', 2, NULL, 0),
(64, 'Tủ quần áo', '', 3, NULL, 0),
(65, 'Tủ trang trí', '', 4, NULL, 0),
(66, 'Gốm sứ', '', 39, NULL, 0),
(67, 'Gương trang trí', '', 40, NULL, 0),
(68, 'Cây cối cảnh', '', 41, NULL, 0),
(69, 'Tranh ảnh', '', 42, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `id_catalog` int(10) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `mota` text NOT NULL,
  `date` datetime NOT NULL,
  `id_parent` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `id_catalog`, `name`, `price`, `img`, `mota`, `date`, `id_parent`) VALUES
(22, 4, 'Ghế Ghina Bar – G22', 1190000, 'item01', 'Ngôi nhà vintage, quầy bar vintage, quán cafe vintage đang cần chút là lạ, duyên dáng thì ngại gì mà không tuyển ngay em ghế bar này về nhà đúng không nào? Ghế Ghina Bar có 2 phiên bản cho bạn lựa chọn:\r\n\r\n+ Ghế Ghina Bar chân sắt trơn sơn giả gỗ, mặt ngồi bằng simili giả da bò hoặc simili trơn màu kem, kích thước 73x33cm, xoay 360 độ.\r\n+ Ghế Ghina Bar chân sắt quấn dây thừng xung quanh, mặt ngồi bằng da lộn hoặc vải bố màu kem sáng, kích thước 73x33cm, xoay 360 độ.', '2020-02-13 00:00:00', 47),
(23, 4, 'TUKI', 1390000, 'item02', 'Không gian quán bar luôn rộn ràng những nhịp điệu trẻ trung, năng động và hiện đại. Ghế bar Otino đen huyền bí mê hoặc thích hợp với không gian náo nhiệt, lung linh ánh đèn trong quán bar.\r\nThiết kế ghế sang  trọng, thanh lịch và tinh tế. Khả năng thay đổi chiều cao và xoay tròn thân ghế 360 độ.\r\n\r\nMàu sắc đen cuốn hút, mê hoặc dưới ánh đèn vàng lấp lánh của quầy bar. Sử dụng chất liệu nhựa cao cấp, cứng cáp và dễ dàng lau chùi.', '2020-02-13 00:00:00', 47),
(24, 4, 'Ghế Bar Henley – G62', 1970000, 'item03', 'Lựa chọn và sử dụng ghế quầy bar dạng chân thép là nhu cầu thiết yếu của mỗi gia đình hiện đại, không phải ai cũng nắm bắt được xu thế hiện nay.\r\n\r\nGhế bar Henley của Decox.vn đã tích hợp nhiều tính năng nổi bật, thích hợp với không gian hiện đại. Để đánh giá một số yếu tố để khách hàng chọn mua chiếc ghế bar Henley\r\n\r\nVới vẻ hiện đại được khoác lên chiếc ghế bar với một chất lượng an toàn, đảm bảo. Chân ghế được sử dụng chất liệu bằng thép sơn tĩnh điện có độ bền cao, tuổi thọ lâu dài và chứa được trọng lượng lên đến 200kg.\r\n\r\nThoạt nhìn chân ghế mong manh, không đủ chắc chắn nhưng với chất liệu cao cấp đã hội tụ và khẳng định sự mạnh mẽ của chúng đồng thời không gỉ sét, chất liệu nhẹ nhàng và chống va đập.', '2020-02-13 00:00:00', 47),
(25, 4, 'Ghế Bar Sean – QM02-12', 1920000, 'item04', 'Hiện đại, sang trọng và đầy tiện nghi, Ghế bar Sean với chất liệu gỗ công nghiệp bền nhẹ kết hợp cùng đệm và lưng tựa bọc da mang lại cảm giác thoải mái nhất khi cùng ngồi trò chuyện với bạn bè tại quầy bar. Chân đế bằng kim loại thiết kế hình tròn cân đối với chiều cao ghế tạo thế ngồi vững chắc, không chông chênh. Ghế có thể điều chỉnh cao độ, phù hợp với chiều cao người ngồi và quầy bar.', '2020-02-13 00:00:00', 47),
(26, 4, 'Ghế Cafe Colby – G46', 1700000, 'item06', 'Chiếc ghế cafe Colby được thiết kế theo phong cách Bắc Âu, đơn giản và thanh lịch, thấu hiểu được cảm xúc của người ngồi và mang được cảm nhận vẻ đẹp nghệ thuật không gian.\r\n\r\nGhế cafe Colby-G46 là một sản phẩm thiết kế sang trọng, đây là chiếc ghế thuộc phong cách tân cổ điển. Ghế cafe Colby chân sắt được pha trộn giữa thiết kế hiện đại và cổ điển. Sản phẩm được sơn tĩnh điện ở chân ghế nên tạo được tính nghệ thuật, đẹp mắt và chắc chắn.', '2020-02-13 00:00:00', 47),
(27, 4, 'Ghế Donan Bar – G30', 1990000, 'item05', 'Ghế Donan Bar với kiểu dáng cổ điển và màu sắc sang trọng, ấm áp, phù hợp cho các không gian như ngôi nhà vintage, quầy bar vintage, quán cafe vintage đang cần chút là lạ, duyên dáng. Còn ngại gì mà không tuyển ngay em ghế bar này về nhà đúng không nào?', '0000-00-00 00:00:00', 47),
(28, 4, 'Ghê phòng ăn 1 - GA1', 2000000, 'ghe_phong_an_1', 'từ từ sẽ có', '2020-02-03 00:00:00', 49),
(29, 4, 'Ghê phòng ăn 2 - GA2', 3000000, 'ghe_phong_an_2', 'từ từ sẽ có', '2020-02-02 00:00:00', 49),
(30, 4, 'Ghế Phòng Ăn 3 - GA3', 5000000, 'ghe_phong_an_3', 'từ từ sẽ có', '2020-02-04 00:00:00', 49),
(31, 4, 'Bàn ăn 1 - BA1', 1000000, 'ban_an_1', 'hihi', '2020-02-01 00:00:00', 55),
(32, 4, 'Bàn ăn 2 - BA2', 2000000, 'ban_an_2', 'haha', '2020-02-10 00:00:00', 55),
(33, 4, 'Bàn ăn 3 - BA3', 3000000, 'ban_an_3', 'huhu', '2020-02-04 00:00:00', 55),
(34, 4, 'Tủ trang trí 1 - TTT1', 5000000, 'tu_an_1', 'hihi', '2020-02-05 00:00:00', 65),
(35, 4, 'Tủ trang trí 2 - TTT2', 6000000, 'tu_an_2', 'hihi', '2020-02-02 00:00:00', 65),
(36, 4, 'Tủ trang trí 3 - TTT3', 7000000, 'tu_an_3', 'hihi', '2020-02-08 00:00:00', 65),
(37, 1, 'Kệ TV 1 - KTV1', 5000000, 'ke_tv_1', 'hihi', '2020-02-02 00:00:00', 52),
(38, 1, 'Kệ TV 2 - KTV2', 7000000, 'ke_tv_2', 'hihi', '2020-02-04 00:00:00', 52),
(39, 1, 'Kệ TV 3 - KTV3', 10000000, 'ke_tv_3', 'hihi', '2020-02-13 00:00:00', 52),
(40, 1, 'Bàn Thấp 1 - BT1', 2000000, 'ban_bet_1', 'hihi', '2020-02-05 00:00:00', 57),
(41, 1, 'Bàn Thấp 2 - BT2', 3000000, 'ban_bet_2', 'hihi', '2020-02-13 00:00:00', 57),
(42, 1, 'Bàn Thấp 3 - BT3', 4000000, 'ban_bet_3', 'hihi', '2020-02-13 00:00:00', 57),
(43, 1, 'Bàn Trang Trí 1 - BTT1', 1000000, 'ban_khach_1', 'hihi', '2020-02-08 00:00:00', 58),
(44, 1, 'Bàn Trang Trí 2 - BTT2', 2000000, 'ban_khach_2', 'hihi', '2020-02-02 00:00:00', 58),
(45, 1, 'Bàn Trang Trí 3 - BTT3', 3000000, 'ban_khach_3\r\n', 'hihi', '2020-02-13 00:00:00', 58),
(46, 1, 'Tủ Giày 1 - TG1', 3000000, 'tu_giay_1', 'hihi', '2020-02-04 00:00:00', 62),
(47, 1, 'Tủ Giày 2 - TG2', 4000000, 'tu_giay_2', 'HIHI', '2020-02-05 00:00:00', 62),
(48, 1, 'Tủ Giày 3 - TG3', 5000000, 'tu_giay_3', 'hihi', '2020-02-08 00:00:00', 62),
(49, 2, 'Ghế Bệt 1 - GB1', 2000000, 'ghe_bet_1', 'hihi', '2020-02-02 00:00:00', 48),
(50, 2, 'Ghế Bệt 2 - GB2', 3000000, 'ghe_bet_2', 'hihi', '2020-02-10 00:00:00', 48),
(51, 2, 'Ghế Bệt 3 - GB3', 4000000, 'ghe_bet_3', 'hihi', '2020-02-08 00:00:00', 48),
(52, 2, 'Ghế Văn Phòng 1 - GVB1', 2000000, 'ghe_van_phong_1', 'hiiii', '2020-02-10 00:00:00', 50),
(53, 2, 'Ghế Văn Phòng 2 - GVB2', 2500000, 'ghe_van_phong_2', 'hiiii', '2020-02-10 00:00:00', 50),
(54, 2, 'Ghế Văn Phòng 3 - GVB3', 2500000, 'ghe_van_phong_3', 'hiiii', '2020-02-10 00:00:00', 50),
(55, 2, 'Kệ Sách 1 - KS1', 3000000, 'ke_sach_1', 'hihi', '2020-02-07 00:00:00', 53),
(56, 2, 'Kệ Sách 2 - KS2', 3000000, 'ke_sach_2', 'hihi', '2020-02-07 00:00:00', 53),
(57, 2, 'Kệ Sách 3 - KS3', 3000000, 'ke_sach_3', 'hihi', '2020-02-07 00:00:00', 53),
(58, 2, 'Bàn Làm Việc 1 - BLV1', 5000000, 'ban_lam_viec_1', 'hihi', '2020-02-07 00:00:00', 56),
(59, 2, 'Bàn Làm Việc 2 - BLV2', 5000000, 'ban_lam_viec_2', 'hihi', '2020-02-07 00:00:00', 56),
(60, 2, 'Bàn Làm Việc 3 - BLV3', 5000000, 'ban_lam_viec_3', 'hihi', '2020-02-07 00:00:00', 56),
(61, 2, 'Tủ Hồ Sơ 1 - THS1', 2000000, 'tu_ho_so_1', 'hihi', '2020-02-04 00:00:00', 63),
(62, 2, 'Tủ Hồ Sơ 2 - THS2', 2000000, 'tu_ho_so_2', 'hihi', '2020-02-04 00:00:00', 63),
(63, 2, 'Tủ Hồ Sơ 3 - THS3', 2000000, 'tu_ho_so_3', 'hihi', '2020-02-04 00:00:00', 63);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `linkslide` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `authority` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `pass`, `name`, `authority`) VALUES
(1, 'long@gmail.com', '123', 'Long', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_catalog` (`id_catalog`);

--
-- Chỉ mục cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
