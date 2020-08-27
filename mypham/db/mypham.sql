-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 06:12 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypham`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_myanmar_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_myanmar_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `name`) VALUES
(2, 'sữa rửa mặt'),
(3, 'Nước tẩy trang'),
(4, 'Son nhập khẩu'),
(5, 'Nước tẩy trang'),
(18, 'Kem dưỡng ẩm'),
(19, 'Kem trị mụn'),
(20, 'Kem chống nắng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gioithieu`
--

CREATE TABLE `tbl_gioithieu` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_myanmar_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_myanmar_ci;

--
-- Dumping data for table `tbl_gioithieu`
--

INSERT INTO `tbl_gioithieu` (`id`, `content`) VALUES
(1, '<p><span style=\"font-size:14px\"><strong>ppK&iacute;nh gửi to&agrave;n thể qu&yacute; kh&aacute;ch h&agrave;ng !</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Đầu ti&ecirc;n xin&nbsp;được gửi lời ch&agrave;o v&agrave; lời cảm&nbsp;ơn ch&acirc;n th&agrave;nh nhất tới to&agrave;n thể qu&yacute; kh&aacute;ch h&agrave;ng v&igrave;&nbsp;đ&atilde; tin tưởng lựa chọn&nbsp;<strong>Moon Conmestics</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Moon Conmestics&nbsp;&nbsp;</strong>được qu&yacute; kh&aacute;ch h&agrave;ng biết đến l&agrave; ph&acirc;n phối c&aacute;c mặt h&agrave;ng mỹ phẩm v&agrave; Dược mỹ phẩm được sản xuất tại H&agrave;n Quốc đặc biệt l&agrave; nh&agrave; b&aacute;n lẻ số 1 c&aacute;c Sản phẩm chăm s&oacute;c sắc đẹp của H&atilde;ng mỹ phẩm nổi tiếng ThefaceShop. Với mục ti&ecirc;u cung cấp những sản phẩm c&oacute; chất lượng cao v&agrave; an to&agrave;n theo ti&ecirc;u chuẩn quốc tế, đ&aacute;p ứng nhu cầu chăm s&oacute;c l&agrave;m đẹp h&agrave;ng ng&agrave;y của người ti&ecirc;u d&ugrave;ng lẫn hỗ trợ điều trị da d&agrave;nh cho c&aacute;c chuy&ecirc;n gia y tế v&agrave; sắc đẹp.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Với nhiều năm kinh nghiệm về kinh doanh mỹ phẩm ch&uacute;ng t&ocirc;i cung cấp&nbsp;c&aacute;c loại mỹ phẩm đặc trị chuy&ecirc;n s&acirc;u về chống l&atilde;o h&oacute;a da v&agrave; chăm s&oacute;c to&agrave;n diện về da .Đồng thời ch&uacute;ng t&ocirc;i c&oacute; đội ngũ với kinh nghiệm v&agrave; kiến thức chuy&ecirc;n s&acirc;u về c&aacute;c loại mỹ phẩm kem trị n&aacute;m , kem chống nắng , kem dưỡng trắng da, chống l&atilde;o h&oacute;a da&nbsp;, c&aacute;c bộ mỹ phẩm cao cấp, mỹ phẩm tắm trắng &hellip; để tư vấn cho kh&aacute;ch h&agrave;ng nhanh nhất v&agrave; hiệu quả nhất .</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Với Phương ch&acirc;m : &ldquo;Sắc&nbsp;đẹp của qu&yacute; vị l&agrave; niềm h&atilde;nh diện của Ch&uacute;ng t&ocirc;i &ldquo;.Được c&ugrave;ng&nbsp;đồng h&agrave;nh trong c&ocirc;ng cuộc chăm s&oacute;c v&agrave; nu&ocirc;i dưỡng sắc&nbsp;đẹp của qu&yacute; kh&aacute;ch h&agrave;ng l&agrave; niềm vui cũng như niềm tự h&agrave;o của Mỹ Phẩm&nbsp;Kh&aacute;nh Chi Đối tượng kh&aacute;ch h&agrave;ng m&agrave; ch&uacute;ng t&ocirc;i hướng tới l&agrave; tất cả những chị em phụ nữ người Việt.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">C&aacute;c sản phẩm ph&acirc;n phối tại&nbsp;<strong>Moon Conmestics</strong> đang nhận được sự t&iacute;n nhiệm cao của c&aacute;c chuy&ecirc;n gia , B&aacute;c sĩ tại Việt Nam v&agrave; ngo&agrave;i nước khuy&ecirc;n d&ugrave;ng .</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Hiện tại&nbsp;<strong>Mỹ Phẩm Kh&aacute;nh Chi</strong>&nbsp;đang l&agrave; nh&agrave; ph&acirc;n phối c&aacute;c mặt h&agrave;ng mỹ phẩm từ c&aacute;c quốc gia H&agrave;n Quốc,&nbsp;&nbsp;Nhật , Ph&aacute;p,&nbsp;&Yacute; ,&nbsp;Đức,&nbsp;&Uacute;c&nbsp;&hellip;. ch&uacute;ng t&ocirc;i t&igrave;m đại l&yacute; tr&ecirc;n to&agrave;n quốc .</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Mục ti&ecirc;u ph&aacute;t triển</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Tầm nh&igrave;n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">L&agrave; c&ocirc;ng ty chuy&ecirc;n c&aacute;c sản phẩm l&agrave;m đẹp tại Việt Nam, được kh&aacute;ch h&agrave;ng t&iacute;n nhiệm ưu ti&ecirc;n lựa chọn.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Sứ mệnh&nbsp;</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Thấu hiểu kh&aacute;ch h&agrave;ng, mang đến cho kh&aacute;ch h&agrave;ng niềm tin, mua sắm thuận lợi qua những sản phẩm chất lượng tốt, gi&aacute; trị đ&aacute;ng tiền v&agrave; dịch vụ tiện lợi.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Gi&aacute; trị cốt l&otilde;i &nbsp;&nbsp;&nbsp;&nbsp;</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Thấu hiểu: Quan t&acirc;m, lắng nghe, cảm nhận để thấu hiểu nhu cầu, ước muốn, mong đợi của kh&aacute;ch h&agrave;ng nhằm đ&aacute;p ứng tốt nhất cho kh&aacute;ch h&agrave;ng.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Th&acirc;n thiện v&agrave; chu đ&aacute;o: Gần gũi, vui vẽ, cởi mở, chủ động quan t&acirc;m chăm s&oacute;c tận t&igrave;nh đến kh&aacute;ch h&agrave;ng.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Rất mong&nbsp;được sự&nbsp;ủng hộ v&agrave; t&iacute;n nhiệm l&acirc;u d&agrave;i của qu&yacute; kh&aacute;ch h&agrave;ng. Xin ch&acirc;n th&agrave;nh cảm&nbsp;ơn!&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:14px\">H i H i ..</span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_introduce`
--

CREATE TABLE `tbl_introduce` (
  `noidung` text COLLATE utf8mb4_myanmar_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_myanmar_ci;

--
-- Dumping data for table `tbl_introduce`
--

INSERT INTO `tbl_introduce` (`noidung`) VALUES
('Hầu hết mỗi công ty đều có bài giới thiệu về doanh nghiệp mình, nhưng để có được một bài giới thiệu đầy đủ, hiệu quả để chinh phục được khách hàng cũng như đối tác thì không phải doanh nghiệp nào cũng làm được.\r\n\r\nĐặc biệt khi mà nền kinh tế vẫn còn khủng hoảng với rất nhiều khó khăn càng đẩy sự cạnh tranh lên cao, thì một bài giới thiệu tốt sẽ là một yếu tố không nhỏ giúp Doanh nghiệp bạn chứng tỏ được khả năng cũng như thế mạnh của mình. Ngoài ra với một bài giới thiệu được trình bày một cách chuyên nghiệp, sẽ đem lại sự thiện cảm ban đầu cho người xem, đó là một lợi thế mà các doanh nghiệp nên nắm bắt.\r\n\r\nNếu như về phần giới thiệu sản phẩm thường có rất nhiều bài khác nhau, nhưng với bài giới thiệu doanh nghiệp lại chỉ có một. Chính vì vậy cần một sự đầu tư kỹ lưỡng cả về nội dung lẫn hình thức, vì nó phần nào thể hiện bộ mặt của toàn doanh nghiệp.\r\n\r\nVậy làm sao để có bài giới thiệu doanh nghiệp hoàn thiện và thu hút người xem tối ưu nhất ?\r\n\r\nTrước tiên, bài giới thiệu cần có phần tóm lược đầy đủ mọi thông tin về Doanh nghiệp gồm : lịch sử hình thành và phát triển. Tên đầy đủ của doanh nghiệp.\r\n\r\nSau đó giới thiệu tổng quát về ngành nghề hoạt động, mạng lưới hoạt động. Và điều cuối cùng là những mục tiêu hướng đến cùng những thành quả đã đạt được….\r\n\r\nBên cạnh bố cục thông thường thì bài giới thiệu cần được viết một cách ngắn gọn và súc tích nhất nhằm đưa đến cho người đọc nhanh chóng nắm rỏ về công ty, doanh nghiệp. Do đó việc lựa chọn từ ngữ cũng hết sức quan trọng. Các từ ngữ phải diễn đạt tốt và logic cũng như truyền tải được những mong muốn của ban điều hành doanh nghiệp đưa ra.\r\n\r\nSong song với những bài giơi thiệu được đăng trên những trang web chính của doanh nghiệp, thì các bài viết giới thiệu còn hết sức cần thiết và hữu hiệu hơn khi được đăng lên các website uy tín có sức tuyên truyền và quảng bá rộng. Điều này giúp hình ảnh thương hiệu công ty bạn đến gần với các đối tác, khách hàng.\r\n\r\nCũng chính vì được nhiều người biết đến, do đó những bài viết như thế cần nhiều sự chăm chút hơn. Ngoài mục đích giới thiệu đến mọi người thì bài viết này cần hướng người đọc đến hành vi mua hàng hoặc ít nhất là ghé thăm website chính.\r\n\r\nĐó chính là vấn đề cốt lõi mà một bài viết giới thiệu cần làm được, và để làm được điều đó thì người viết phải là một người giỏi về khả năng diễn đạt, chuyên sâu về lĩnh vực viết lời giới thiệu, quảng cáo\r\n\r\nDoanh nghiệp bạn đã có những bài giới thiệu như thế chưa ?\r\n\r\nĐừng bỏ qua một cơ hội nào vì khách hàng luôn tin tưởng, lựa chọn những doanh nghiệp có sự đầu tư kỹ lưỡng, chuyên nghiệp về hình ảnh thương hiệu cũng như có sự quảng bá rộng rãi. Ngoài ra, quảng bá trên website chính là sự quảng bá nhanh chóng và mang lại hiệu quả lâu dài.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `hoten` text COLLATE utf8mb4_croatian_ci NOT NULL,
  `spmua` text COLLATE utf8mb4_croatian_ci NOT NULL,
  `diachi` text COLLATE utf8mb4_croatian_ci NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`hoten`, `spmua`, `diachi`, `dienthoai`, `soluong`, `id_donhang`) VALUES
('Nguyễn Văn Anh', 'Sữa rửa mặt oxi', 'Sữa rửa mặt oxi', 843190599, 2, 2),
('2q', 'asdasd', '123123', 25431, 2312, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `saleproduct` int(11) NOT NULL,
  `price` double NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `code` varchar(500) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `description` text COLLATE utf8mb4_myanmar_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_myanmar_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `category_id`, `saleproduct`, `price`, `img`, `code`, `description`) VALUES
(7, 'dior tattoo', 3, 0, 45000, '1578216035_1.JPG', '123', ''),
(8, 'dior tattoo', 3, 0, 100000, '1578216363_44.JPG', '123', ''),
(9, 'dior tattoo', 3, 1, 150000, '1578216348_black-rouge-air-fit-velvet-tint-tk.jpg', '123', ''),
(11, 'dior tattoo', 4, 1, 30000, '1578216181_44.JPG', '123', ''),
(12, 'dior tattoo', 4, 0, 25000, '1578216132_d.jpg', '123', ''),
(13, 'dior tattoo', 4, 0, 15000, '1578216157_1.JPG', '123', ''),
(14, 'Dior tattoo', 4, 1, 50000, '1578216101_d.jpg', '123', ''),
(18, 'Sữa rửa mặt oxi', 2, 1, 50000, '1578217001_kem-rua-mat-hat-sieu-nho-oxy-sach-sau-sang-da-100g-201909141102292940.jpg', '123', ''),
(19, 'Sữa rửa mặt oxi', 2, 1, 40000, '1578217318_Sữa-Rửa-Mặt-Senka-Perfect-White-Clay-120g-–-Tinh-Chất-Tơ-Tằm.jpg', 'F5511', ''),
(20, 'Sữa rửa mặt oxi', 2, 0, 1000000, '1578217999_80600404_1526855630812252_5024289799838629888_n.jpg', '123', ''),
(22, 'Perfect white', 5, 1, 500000, '1578217254_Sữa-Rửa-Mặt-Senka-Perfect-White-Clay-120g-–-Tinh-Chất-Tơ-Tằm.jpg', '123', ''),
(23, 'Perfect white', 5, 0, 300000, '1578217219_sua-rua-mat-shiseido-perfect-whip-senka-White-Clay.jpg', 'BoKb246', ''),
(24, 'Perfect white', 5, 0, 30000, '1578217201_sua-rua-mat-duong-trang-acnes-pure-white-cleanser-new.jpg', 'STX265', ''),
(26, 'dior tattoo', 3, 1, 45000, '1578217343_son-bl-secret-matt-lipgloss-mau-hong-ladi.jpg', '123', ''),
(27, 'Dior tattoo', 4, 1, 65000, '1578215901_44.JPG', '12', ''),
(28, 'Loveable Kiss - Hồng Đào', 3, 1, 888000, '1578214953_1.JPG', '#123', '<h4>Hội tụ những sắc độ huyền thoại m&agrave; ph&aacute;i đẹp kh&aacute;t khao. Mỗi c&acirc;y son Tom Ford lại sở hữu một &ldquo;ma lực&rdquo; quyến rũ ri&ecirc;ng. Vậy th&igrave; xếp hạng top 10 m&agrave;u son Tom Ford đẹp nhất ra sao? Điểm danh ngay 10 sắc độ ho&agrave;n mĩ đến &ldquo;n&aacute; thở&rdquo;, được săn đ&oacute;n bậc nhất đến từ Tom Ford lừng danh dưới đ&acirc;y.</h4>\r\n'),
(29, 'Sữa rửa mặt oxi', 2, 1, 100000, '1578216814_srm-oxy-ngan-ngua-mun-100g-700x467-1.jpg', '123', '<h4>Hội tụ những sắc độ huyền thoại m&agrave; ph&aacute;i đẹp kh&aacute;t khao. Mỗi c&acirc;y son Tom Ford lại sở hữu một &ldquo;ma lực&rdquo; quyến rũ ri&ecirc;ng. Vậy th&igrave; xếp hạng top 10 m&agrave;u son Tom Ford đẹp nhất ra sao? Điểm danh ngay 10 sắc độ ho&agrave;n mĩ đến &ldquo;n&aacute; thở&rdquo;, được săn đ&oacute;n bậc nhất đến từ Tom Ford lừng danh dưới đ&acirc;y.</h4>\r\n'),
(30, 'Sữa rửa mặt oxi', 19, 0, 123445, '1578217064_kem-rua-mat-hat-sieu-nho-oxy-sach-sau-sang-da-100g-201909141102292940.jpg', '123', '<h4>Hội tụ những sắc độ huyền thoại m&agrave; ph&aacute;i đẹp kh&aacute;t khao. Mỗi c&acirc;y son Tom Ford lại sở hữu một &ldquo;ma lực&rdquo; quyến rũ ri&ecirc;ng. Vậy th&igrave; xếp hạng top 10 m&agrave;u son Tom Ford đẹp nhất ra sao? Điểm danh ngay 10 sắc độ ho&agrave;n mĩ đến &ldquo;n&aacute; thở&rdquo;, được săn đ&oacute;n bậc nhất đến từ Tom Ford lừng danh dưới đ&acirc;y.</h4>\r\n'),
(31, 'Sữa rửa mặt oxi', 2, 0, 15000, '1578217281_Sữa-Rửa-Mặt-Senka-Perfect-White-Clay-120g-–-Tinh-Chất-Tơ-Tằm.jpg', '123', '<h4>Hội tụ những sắc độ huyền thoại m&agrave; ph&aacute;i đẹp kh&aacute;t khao. Mỗi c&acirc;y son Tom Ford lại sở hữu một &ldquo;ma lực&rdquo; quyến rũ ri&ecirc;ng. Vậy th&igrave; xếp hạng top 10 m&agrave;u son Tom Ford đẹp nhất ra sao? Điểm danh ngay 10 sắc độ ho&agrave;n mĩ đến &ldquo;n&aacute; thở&rdquo;, được săn đ&oacute;n bậc nhất đến từ Tom Ford lừng danh dưới đ&acirc;y.</h4>\r\n'),
(32, 'Loveable Kiss - Hồng Đào', 3, 1, 150000, '1578235569_82432681_3112816165398501_6707308984300208128_n.jpg', 'SX12435', '<h4><span style=\"font-size:14px\">Hội tụ những sắc độ huyền thoại m&agrave; ph&aacute;i đẹp kh&aacute;t khao. Mỗi c&acirc;y son Tom Ford lại sở hữu một &ldquo;ma lực&rdquo; quyến rũ ri&ecirc;ng. Vậy th&igrave; xếp hạng top 10 m&agrave;u son Tom Ford đẹp nhất ra sao? Điểm danh ngay 10 sắc độ ho&agrave;n mĩ đến &ldquo;n&aacute; thở&rdquo;, được săn đ&oacute;n bậc nhất đến từ Tom Ford lừng danh dưới đ&acirc;y.</span></h4>\r\n\r\n<p>&nbsp;</p>\r\n'),
(36, 'Gamier', 18, 1, 10000, '1578763888_timthumb.jpg', '123', '<h4>Hội tụ những sắc độ huyền thoại m&agrave; ph&aacute;i đẹp kh&aacute;t khao. Mỗi c&acirc;y son Tom Ford lại sở hữu một &ldquo;ma lực&rdquo; quyến rũ ri&ecirc;ng. Vậy th&igrave; xếp hạng top 10 m&agrave;u son Tom Ford đẹp nhất ra sao? Điểm danh ngay 10 sắc độ ho&agrave;n mĩ đến &ldquo;n&aacute; thở&rdquo;, được săn đ&oacute;n bậc nhất đến từ Tom Ford lừng danh dưới đ&acirc;y.</h4>\r\n'),
(37, 'Biodrema', 18, 1, 1000000, '1578763922_nuoc-tay-trang-byphasse-solution-micellaire-face-make-–up-remover.jpg', '123', '<h4>Hội tụ những sắc độ huyền thoại m&agrave; ph&aacute;i đẹp kh&aacute;t khao. Mỗi c&acirc;y son Tom Ford lại sở hữu một &ldquo;ma lực&rdquo; quyến rũ ri&ecirc;ng. Vậy th&igrave; xếp hạng top 10 m&agrave;u son Tom Ford đẹp nhất ra sao? Điểm danh ngay 10 sắc độ ho&agrave;n mĩ đến &ldquo;n&aacute; thở&rdquo;, được săn đ&oacute;n bậc nhất đến từ Tom Ford lừng danh dưới đ&acirc;y.</h4>\r\n'),
(38, 'Black Rouge', 19, 0, 1550000, '1579252816_1.JPG', 'KDX', '<h4>Hội tụ những sắc độ huyền thoại m&agrave; ph&aacute;i đẹp kh&aacute;t khao. Mỗi c&acirc;y son Tom Ford lại sở hữu một &ldquo;ma lực&rdquo; quyến rũ ri&ecirc;ng. Vậy th&igrave; xếp hạng top 10 m&agrave;u son Tom Ford đẹp nhất ra sao? Điểm danh ngay 10 sắc độ ho&agrave;n mĩ đến &ldquo;n&aacute; thở&rdquo;, được săn đ&oacute;n bậc nhất đến từ Tom Ford lừng danh dưới đ&acirc;y.</h4>\r\n'),
(39, 'Innisfree Green Tea', 19, 0, 500000, '1579252842_3.JPG', 'C45354', '<h4>Hội tụ những sắc độ huyền thoại m&agrave; ph&aacute;i đẹp kh&aacute;t khao. Mỗi c&acirc;y son Tom Ford lại sở hữu một &ldquo;ma lực&rdquo; quyến rũ ri&ecirc;ng. Vậy th&igrave; xếp hạng top 10 m&agrave;u son Tom Ford đẹp nhất ra sao? Điểm danh ngay 10 sắc độ ho&agrave;n mĩ đến &ldquo;n&aacute; thở&rdquo;, được săn đ&oacute;n bậc nhất đến từ Tom Ford lừng danh dưới đ&acirc;y.</h4>\r\n'),
(40, ' Innisfree Green Team', 19, 1, 21100, '1579252877_6.jpg', 'C45354', '<h4>Hội tụ những sắc độ huyền thoại m&agrave; ph&aacute;i đẹp kh&aacute;t khao. Mỗi c&acirc;y son Tom Ford lại sở hữu một &ldquo;ma lực&rdquo; quyến rũ ri&ecirc;ng. Vậy th&igrave; xếp hạng top 10 m&agrave;u son Tom Ford đẹp nhất ra sao? Điểm danh ngay 10 sắc độ ho&agrave;n mĩ đến &ldquo;n&aacute; thở&rdquo;, được săn đ&oacute;n bậc nhất đến từ Tom Ford lừng danh dưới đ&acirc;y.</h4>\r\n'),
(41, 'La Roche Posayeeeeer', 19, 1, 255000, '1579252906_2.JPG', 'abc123', '<h4>Hội tụ những sắc độ huyền thoại m&agrave; ph&aacute;i đẹp kh&aacute;t khao. Mỗi c&acirc;y son Tom Ford lại sở hữu một &ldquo;ma lực&rdquo; quyến rũ ri&ecirc;ng. Vậy th&igrave; xếp hạng top 10 m&agrave;u son Tom Ford đẹp nhất ra sao? Điểm danh ngay 10 sắc độ ho&agrave;n mĩ đến &ldquo;n&aacute; thở&rdquo;, được săn đ&oacute;n bậc nhất đến từ Tom Ford lừng danh dưới đ&acirc;y.</h4>\r\n'),
(45, '1', 19, 1, 0, '1581126173_1.JPG', '123', '<p>123</p>\r\n'),
(46, 'vanh', 19, 1, 123, '1581126824_123.jpg', '123', '<p>1233</p>\r\n'),
(47, 'Sữa rửa mặt oxi123', 2, 1, 600000, '1581126937_1.JPG', 'C45354', '<p>van anh</p>\r\n'),
(49, 'son', 3, 0, 70000, '1581127521_123.jpg', '1232', '<p>mo ta</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `email` varchar(500) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `password` varchar(500) COLLATE utf8mb4_myanmar_ci NOT NULL,
  `fullname` varchar(500) COLLATE utf8mb4_myanmar_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_myanmar_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `password`, `fullname`) VALUES
(1, 'admin1@gmail.com', '202cb962ac59075b964b07152d234b70', 'Nguyen Van Anh'),
(2, 'admin2@gmail.com', '202cb962ac59075b964b07152d234b70', 'Nguyen Tuyet Mai2'),
(3, 'admin3@gmail.com', '202cb962ac59075b964b07152d234b70', 'Nguyen Thu Nga'),
(4, 'admin4@gmail.com', '202cb962ac59075b964b07152d234b70', 'Nguyen Thu Phuong'),
(5, 'admin5@gmail.com', '202cb962ac59075b964b07152d234b70', 'Nguyen Thi Thao'),
(6, 'a@gmail.com', '202cb962ac59075b964b07152d234b70', 'Nguyen Van Anh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
