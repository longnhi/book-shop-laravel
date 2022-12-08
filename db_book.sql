-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 02:17 PM
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
-- Database: `db_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `avatar`, `information`, `updated_at`, `created_at`) VALUES
(4, 'Vong Ngữ', 'uploads/images/authors/2022/11/26/16/13/45/16_13_45vong-ngu.png', 'Vong Ngữ hiện là một trong những tác giả văn học mạng vô cùng nổi tiếng, hiện tại ông đang là tác giả Bạch Kim trên Qidian. Trước khi tham gia viết truyện, Vong Ngữ đã tốt nghiệp ở Học viện công nghệ Vô Tích và tiếp tục học đại học ngành Pháp luật; ông từng làm một nhân viên văn phòng bình thường ở Từ Châu.', '2022-11-26 09:13:45', '2022-11-26 07:06:15'),
(5, 'Nhĩ Căn', 'uploads/images/authors/2022/11/26/16/39/41/16_39_41nhĩ-căn-1.png', 'Truyện Nhĩ Căn thường sẽ một nam chính tu luyện bình thường, nhưng trong đó lại dính líu đến một âm mưu to lớn, lồng ghép trong đó là vô số âm mưu nhỏ. Âm mưu sẽ tầng tầng lớp lớp. Tác giả có thú vui tao nhã là thích làm người đọc bị bất ngờ, rồi khi ngẫm lại những chương trước sẽ thấy thán phục.', '2022-11-26 09:39:41', '2022-11-26 09:39:41'),
(6, 'Thiên Tằm Thổ Đậu', 'uploads/images/authors/2022/11/26/16/41/44/16_41_44thien-tam-tho-dau.png', 'Thiên Tằm Thổ Đậu tên thật là Lý Hổ, sinh ngày 28 tháng 12 năm 1989 tại Tứ Xuyên Trung Quốc. Anh bắt đầu viết tiểu thuyết khi còn mới là học sinh trung học và dần trở thành một trong những cây bút tiêu biểu của văn học mạng Trung Quốc.\r\nSự nghiệp viết lách của Thiên Tằm Thổ Đậu bắt đầu vào tháng 4 năm 2008 với tác phẩm đầu tay Ma Thú Kiếm Thánh Dị Giới Tung Hoành. Tháng 5 – 2008 Thiên Tằm Thổ Đậu ký hợp đồng trở thành nhà văn chuyên viết tiểu thuyết mạng.', '2022-11-26 09:41:45', '2022-11-26 09:41:45'),
(7, 'T. Harv Eker', 'uploads/images/authors/2022/11/26/16/46/02/16_46_02T-Harv-Eker.png', 'T.Harv Eker từng trải qua tuổi thơ nghèo khó, làm hàng tá công việc thời trẻ cho đến một vị triệu phú đầy tài năng và tham vọng. Chúng ta cùng khám phá tiể sử và các sách hay của T.Harv Eker – Tác giả cuốn Bí mật tư duy triệu phú nổi tiếng được tái bản nhiều lần ở Việt Nam.', '2022-11-26 09:46:02', '2022-11-26 09:46:02'),
(8, 'Hubert Seipel', 'uploads/images/authors/2022/11/26/16/49/41/16_49_41Hubert,Seipel.png', 'Hubert Seipel học chính trị và lịch sử tại Đại học Philipps ở Marburg , cũng như khoa học chính trị tại Trường Kinh tế London . Ông làm việc cho Hessischer Rundfunk . Trong số những công việc khác, anh ấy đã làm phóng viên nước ngoài cho Stern và Der Spiegel . Năm 1985, ông xuất bản một cuốn sách phi hư cấu về vụ Flick và điều tra viên thuế Klaus Förster , người đã phanh phui vụ bê bối quyên góp trong đảng.', '2022-11-26 09:49:43', '2022-11-26 09:49:43'),
(9, 'Lê Đỗ Quỳnh Hương', 'uploads/images/authors/2022/11/26/16/52/02/16_52_02ba0h.jpg', '“MC Quỳnh Hương từng là host của ‘Thay Lời Muốn Nói’- một trong những chương trình âm nhạc định kỳ trên truyền hình lâu đời nhất tại Việt Nam trong 19 năm trở lại đây. Thạc sĩ âm nhạc học, tác giả, và cũng là một diễn giả truyền cảm hứng với mong muốn mang đến năng lượng tích cực và lan tỏa yêu thương đến cho cộng đồng.”', '2022-11-26 09:52:04', '2022-11-26 09:52:04'),
(10, 'Jo Hemmings', 'uploads/images/authors/2022/11/26/16/57/57/16_57_57home-page.png', 'Jo Hemmings là Nhà Tâm lý học Hành vi và là thành viên đã đăng ký của Hiệp hội Tâm lý Anh (BPS) cũng như một số tổ chức tâm lý học chuyên nghiệp được công nhận khác. Cô cũng là Huấn luyện viên được Hiệp hội Huấn luyện (AOC) công nhận . Cô ấy chuyên về phân tích tin tức và truyền thông trong lĩnh vực phát sóng cũng như là một huấn luyện viên về mối quan hệ và hẹn hò, đồng thời là một nhân vật truyền hình và đài phát thanh.', '2022-11-26 09:57:58', '2022-11-26 09:57:58'),
(11, 'Clyde Prestowitz', 'uploads/images/authors/2022/11/26/17/03/39/17_03_39images.jfif', 'Clyde Prestowitz là người sáng lập và là Chủ tịch của Viện Chiến lược Kinh tế. Trước đây, ông từng là cố vấn cho Bộ trưởng Thương mại trong Chính quyền Reagan. Ông là một nhà kinh tế lao động. Prestowitz đã viết cho Foreign Affairs.', '2022-11-26 10:03:41', '2022-11-26 10:03:41'),
(12, 'Michael D\'Antonio', 'uploads/images/authors/2022/11/26/17/06/19/17_06_19238275.jpg', 'Michael D\'Antonio là một tác giả, nhà báo và nhà bình luận người Mỹ trên CNN. Ông đã chia sẻ Giải thưởng Pulitzer năm 1984 cho Báo cáo Địa phương với một nhóm phóng viên Newsday vì đã đưa tin về Vụ án Baby Jane Doe.', '2022-11-26 10:06:19', '2022-11-26 10:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_publisher` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `image`, `information`, `price`, `quantity`, `id_category`, `id_publisher`, `id_author`, `updated_at`, `created_at`) VALUES
(1, 'Phàm nhân tu tiên', 'uploads/images/books/2022/11/28/13_28_00pham-nhan-tu-tien.jpg', 'Phàm Nhân Tu Tiên là một câu chuyện Tiên Hiệp kể về Hàn Lập - Một người bình thường nhưng lại gặp vô vàn cơ duyên để bước đi trên con đường tu tiên, không phải anh hùng - cũng chẳng phải tiểu nhân, Hàn Lập từng bước khẳng định mình... Liệu Hàn Lập và người yêu có thể cùng bước trên con đường tu tiên và có một cái kết hoàn mỹ? Những thử thách nào đang chờ đợi bọn họ?', 49, 100, 18, 3, 4, '2022-11-28 06:28:00', '2022-11-28 06:28:00'),
(2, 'Bí Mật Tư Duy Triệu Phú', 'uploads/images/books/2022/11/28/13_42_39image_188995_1_1.jpg', 'Trong cuốn sách này T. Harv Eker sẽ tiết lộ những bí mật tại sao một số người lại đạt được những thành công vượt bậc, được số phận ban cho cuộc sống sung túc, giàu có, trong khi một số người khác phải chật vật, vất vả mới có một cuộc sống qua ngày. Bạn sẽ hiểu được nguồn gốc sự thật và những yếu tố quyết định thành công, thất bại để rồi áp dụng, thay đổi cách suy nghĩ, lên kế hoạch rồi tìm ra cách làm việc, đầu tư, sử dụng nguồn tài chính của bạn theo hướng hiệu quả nhất.', 21, 50, 2, 5, 7, '2022-11-28 07:10:01', '2022-11-28 06:42:39'),
(5, 'Huyền giới chi môn', 'uploads/images/books/2022/11/30/07_28_06huyen-gioi-chi-mon.jpg', 'Trời giáng Thần vật! Dị huyết phụ thể!\r\n\r\nQuần Tiên sợ hãi! Vạn Ma tránh lui!\r\n\r\nMột thiếu niên xuất thân từ đại lục Đông Châu.\r\n\r\nMệnh sinh tử gắn liền với Hồng Phấn Khô Lâu.\r\n\r\nÝ chí kiên định quyết trở thành đệ nhất cường giả.\r\n\r\nTạo nên truyền thuyết uy vũ khắp ngân hà, đại náo khắp ba cõi.', 19, 63, 18, 3, 4, '2022-11-30 00:28:06', '2022-11-30 00:28:06'),
(6, 'Luyện kiếm', 'uploads/images/books/2022/11/30/07_29_08luyen-kiem.jpg', 'Vì kiếm, nhiều người bỏ qua tư dục bản thân, vì việc nghĩa không từ nan.\r\n\r\nVì kiếm, nhiều kẻ đánh mất chính bản thân mình, sa vào tăm tối.\r\n\r\nPhong vân nổi lên, linh kiếm sinh ra, vì kiếm mà sinh, vì kiếm mà chết.\r\n\r\nThiếu niên Luyện Kiếm Sư ngang trời xuất thế. Dị hỏa dung thân, trở thành Luyện Kiếm Tông Sư.\r\n\r\nHắn rèn ra lưỡi kiếm sắc bén nhất từ xưa tới nay, vượt qua mọi chông gai, đi tới luyện kiếm đỉnh phong.', 9, 148, 18, 3, 4, '2022-12-04 03:02:48', '2022-11-30 00:29:08'),
(7, 'Tiên Giả', 'uploads/images/books/2022/11/30/07_30_415880ec98783f3810c3146b02aa68ed6286ce170b8af678b7ab2507b0ac0b29d1.jpg', 'Cái gọi là tiên giả? Giới vực phàm nhân biến thành, lấy thiên địa tinh hoa, thoát thể xác phàm thai, đến hoàn vũ tạo hóa.\r\n\r\nMột người thấp khoác lông Thú Nô, không cam lòng vận mệnh an bài, cùng chư giới mà tranh truyền thuyết.\r\n\r\nHắn biết, chỉ có trở thành tiên giả, mới có thể để cho phương giới vực này thu hoạch được cơ hội thở dốc.', 33, 119, 18, 3, 4, '2022-12-04 03:02:48', '2022-11-30 00:30:43'),
(8, 'Tiên Nghịch', 'uploads/images/books/2022/11/30/07_44_43tien-nghich.jpg', 'Tiên Nghịch là câu chuyện Tiên Hiệp kể về Vương Lâm - một thiếu niên bình thường, may mắn được gia nhập vào một môn phái tu tiên xuống dốc của nước Triệu, vì thiếu linh căn, vì một hiểu nhầm tai hại, vì một khối thiết tinh và nhờ có được một \"Thần Bí Hạt Châu\". Vương Lâm đã bước lên con đường tu tiên và trên con đường này, hắn sẽ đối mặt với chuyện gì?', 33, 33, 18, 1, 5, '2022-11-30 00:44:43', '2022-11-30 00:44:43');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'Giáo dục', '2022-11-24 08:11:37', '2022-11-24 08:11:37'),
(2, 'Kinh tế', '2022-11-24 08:38:14', '2022-11-24 08:38:14'),
(3, 'Văn học', '2022-11-25 06:03:36', '2022-11-25 06:03:36'),
(4, 'Sách thiếu nhi', '2022-11-25 06:04:00', '2022-11-25 06:04:00'),
(5, 'Tạp chí', '2022-11-25 06:04:34', '2022-11-25 06:04:34'),
(6, 'Tâm lý', '2022-11-25 06:05:08', '2022-11-25 06:05:08'),
(7, 'Kỹ năng sống', '2022-11-25 06:05:20', '2022-11-25 06:05:20'),
(8, 'Sách học ngoại ngữ', '2022-11-25 06:05:40', '2022-11-25 06:05:40'),
(9, 'Chính trị', '2022-11-25 06:06:06', '2022-11-25 06:06:06'),
(10, 'Văn hóa', '2022-11-25 06:06:30', '2022-11-25 06:06:30'),
(11, 'Âm nhạc', '2022-11-25 06:06:57', '2022-11-25 06:06:57'),
(12, 'Thể thao', '2022-11-25 06:07:14', '2022-11-25 06:07:14'),
(18, 'Truyện chữ', '2022-11-28 06:20:36', '2022-11-28 06:20:36'),
(19, 'Truyện tranh', '2022-11-28 06:44:10', '2022-11-28 06:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `address`, `phone`, `total`, `status`, `id_user`, `updated_at`, `created_at`) VALUES
(3, 'Hàn Lập', '180 cao Lỗ', '0355447889', 75, 'Đã giao', 1, '2022-12-04 03:02:55', '2022-11-30 06:47:44'),
(4, 'Nguyễn Nhị Long', '180 cao Lỗ', '0933447889', 21, 'Đang xử lý', 1, '2022-11-30 06:49:08', '2022-11-30 06:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `id_book`, `quantity`, `price`, `id_order`, `updated_at`, `created_at`) VALUES
(1, 6, 1, 9, 3, '2022-11-30 06:47:44', '2022-11-30 06:47:44'),
(2, 7, 2, 66, 3, '2022-11-30 06:47:44', '2022-11-30 06:47:44'),
(3, 2, 1, 21, 4, '2022-11-30 06:49:08', '2022-11-30 06:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'Kim Đồng', '2022-11-24 08:19:03', '2022-11-24 08:19:03'),
(2, 'NXB Lao động', '2022-11-25 06:11:24', '2022-11-25 06:11:24'),
(3, 'NXB Hội Nhà Văn', '2022-11-25 08:23:07', '2022-11-25 06:11:50'),
(5, 'NXB Tổng Hợp TPHCM', '2022-11-28 06:40:43', '2022-11-28 06:40:43'),
(6, 'NXB Hà Nội', '2022-11-28 06:44:32', '2022-11-28 06:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Nhị Long', 'nhilong0711@gmail.com', NULL, '$2y$10$RKUcZ73e6WsQeLsQzJ.S0eLLfemU3J//qzTS/Gdj4zlbN3HxB068S', 'customer', NULL, '2022-11-22 06:58:56', '2022-11-22 06:58:56'),
(2, 'Nguyễn Long', 'longnguyen.071100@gmail.com', NULL, '$2y$10$wJRRBQuEgiUUM77tbbOnRe4p3acFpedRXrr0GgKh8isiK5rAo.USS', 'admin', NULL, '2022-11-24 05:26:55', '2022-11-24 05:26:55'),
(3, 'Hằng Đàm', 'hangdam@gmail.com', NULL, '$2y$10$LS4HbSg7T1TRp9ATkXj/3.em6m.vy5ihNmI/cvZOqPXxXw3.cEOsi', 'customer', NULL, '2022-12-04 06:12:23', '2022-12-04 06:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_user` bigint(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `id_book`, `id_user`, `updated_at`, `created_at`) VALUES
(5, 8, 1, '2022-11-30 01:03:17', '2022-11-30 01:03:17'),
(8, 1, 1, '2022-11-30 02:10:48', '2022-11-30 02:10:48'),
(12, 6, 1, '2022-11-30 02:33:03', '2022-11-30 02:33:03'),
(13, 1, 3, '2022-12-04 06:12:35', '2022-12-04 06:12:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
