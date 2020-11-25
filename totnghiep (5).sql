-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2020 lúc 12:51 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `totnghiep`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_binhluan` bigint(20) UNSIGNED NOT NULL,
  `id_blog` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `noidung_binhluan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Anhien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id_blog` bigint(20) UNSIGNED NOT NULL,
  `id_loaiblog` int(10) UNSIGNED NOT NULL,
  `name_blog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomtat_blog` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung_blog` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_blog` date NOT NULL,
  `luotxem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `img_blog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_blog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Anhien` int(11) NOT NULL,
  `noibat` int(11) NOT NULL,
  `tag_blog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id_blog`, `id_loaiblog`, `name_blog`, `tomtat_blog`, `noidung_blog`, `time_blog`, `luotxem`, `id`, `img_blog`, `slug_blog`, `Anhien`, `noibat`, `tag_blog`, `created_at`, `updated_at`) VALUES
(1, 4, 'Mẹ bầu có nên dùng băng vệ sinh hằng ngày không?', '<p>“Có nên dùng băng vệ sinh hàng ngày không” là băn khoăn đang nhận được nhiều tranh cãi của hội chị em. Phần đông ý kiến cho rằng, BVS hằng ngày giúp vùng kín sạch, khô thoáng, không ẩm ướt và đặc biệt tiện lợi khi đi làm cả ngày, chỉ cần sử dụng đúng cách thì vẫn an toàn. Một số lại phản đối, việc sử dụng BVS hằng ngày khi mang thai không tốt. Vậy thực hư là như thế nào?<br></p>', '<div class=\"block-detail\" style=\"border-bottom: 1px solid rgb(207, 222, 186); margin-bottom: 25px; padding-bottom: 17px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><h2 class=\"block-detail-ttl\" style=\"font-family: latobold; font-weight: 500; color: inherit; margin: 13px 0px; font-size: 26px;\"><span style=\"background-color: rgb(255, 255, 255); font-family: KoHo;\">Mẹ bầu có nên dùng băng vệ sinh hằng ngày không?</span></h2><h3 class=\"block-detail-description\" style=\"font-family: latobold; font-weight: 500; line-height: 1.3; color: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 18px;\"></h3></div><div class=\"block-detail-content\" style=\"border-bottom: 1px solid rgb(207, 222, 186); margin-bottom: 10px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">“Có nên dùng băng vệ sinh hàng ngày không” là băn khoăn đang nhận được nhiều tranh cãi của hội chị em. Phần đông ý kiến cho rằng, BVS hằng ngày giúp vùng kín sạch, khô thoáng, không ẩm ướt và đặc biệt tiện lợi khi đi làm cả ngày, chỉ cần sử dụng đúng cách thì vẫn an toàn. Một số lại phản đối, việc sử dụng BVS hằng ngày khi mang thai không tốt. Vậy thực hư là như thế nào?</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">I/ Có nên dùng băng vệ sinh hàng ngày khi mang thai không?</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255);\"><span style=\"font-family: KoHo;\">Có.&nbsp;</span><a href=\"https://www.organica.vn/cham-soc-co-the/bvs-hang-ngay-natracare-16pcs\" style=\"color: rgb(51, 51, 51); outline: none !important;\"><span style=\"color: rgb(0, 0, 255);\"><span style=\"font-weight: 700; font-family: KoHo;\"><em>Băng vệ sinh hằng ngày</em></span></span></a><span style=\"font-family: KoHo;\">&nbsp;sẽ là giải pháp “cứu nguy” để vùng kín mẹ bầu không rơi vào tình trạng ẩm ướt khi khí hư ra nhiều (môi trường lý tưởng để vi khuẩn sinh sôi, phát triển gây viêm nhiễm âm đạo), không còn mùi hôi khó chịu, không ngứa ngáy và đặc biệt là tiện lợi khi đi làm cả ngày mà vùng kín vẫn khô thoáng và sạch sẽ.</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: center;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/May/5/5555-643731588643869-1588643869.jpg\" alt=\"\" width=\"700\" height=\"500\" style=\"border: 0px; max-width: 100%;\"></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Tuy nhiên, để đảm bảo an toàn cho vùng kín thì mẹ cần biết lựa chọn và sử dụng băng vệ sinh hằng ngày đúng cách. Cụ thể, mẹ cần nắm được các nguyên tắc cơ bản sau.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Chọn BVS hữu cơ thay vì băng vệ sinh thường</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Bạn có biết, hóa chất từ những sản phẩm tiếp xúc với bề mặt da có thể thẩm thấu qua các mạch máu đi vào cơ thể? Đó là lý do thay vì khẳng định chung chung rằng mẹ bầu nên tìm mua các dòng BVS chất lượng thì chúng tôi khuyến khích chị em nên lựa chọn BVS hữu cơ - dòng BVS có chứng nhận an toàn rõ ràng và đáng tin cậy nhất hiện nay.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Cụ thể BVS hữu cơ giúp mẹ an tâm về mức độ an toàn khi không có sự can thiệp của hóa chất, nhựa, chất tạo mùi, hương liệu, thuốc tẩy… Bên cạnh đó, vì được làm từ 100% bông hữu cơ, khả năng thấm hút tốt nên khi sử dụng BVS hữu cơ vùng kín chị em sẽ luôn thông thoáng, cảm giác mềm mại, vô cùng dễ chịu cho “cô bé”.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Thay BVS 4 tiếng/lần</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">BVS hàng ngày được thiết kế nhỏ gọn với khả năng thấm hút không quá cao như BVS ban ngày hay ban đêm. Thế nhưng, điều này không có nghĩa bạn có thể sử dụng chúng cả ngày mà không thay; bởi dẫu BVS có chất lượng thì môi trường ẩm ướt tồn tại lâu thì vi khuẩn hoàn toàn có thể tự sản sinh. Thế nên, đừng quên nguyên tắc tuyệt đối quan trọng khi sử dụng BVS đó là thay 4 tiếng/lần dù lượng khí hư tiết ra ít.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Không lạm dụng BVS hằng ngày</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">BVS hằng ngày đúng là “cứu tinh” cho nhiều chị em trong rất nhiều trường hợp, nhất là khi khí hư ra nhiều trong thời gian mang thai. Tuy nhiên, hãy chỉ sử dụng chúng khi thấy cần thiết, không nên lạm dụng.&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">II/ 5 lưu ý quan trọng mẹ cần biết để giữ vùng kín khỏe mạnh.</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Ngoài việc học cách lựa chọn và sử dụng BVS hằng ngày thì mẹ bầu cũng cần nắm những lưu ý tối quan trọng để giữ gìn vùng kín khỏe mạnh trong thời gian mang thai.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: center;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/May/5/5554-469741588643868-1588643869.jpg\" alt=\"\" width=\"700\" height=\"500\" style=\"border: 0px; max-width: 100%;\"></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Lựa chọn quần lót bằng cotton, rộng rãi</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Hãy ưu tiên các loại quần lót bằng chất liệu cotton, rộng rãi, thoải mái, tránh sử dụng quần áo bó sát, chất chội không tốt cho vùng kín.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Vệ sinh vùng kín sạch sẽ hằng ngày</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">BVS không thể thay thế bạn vệ sinh vùng kín, thế nên mẹ đừng quên vệ sinh vùng kín bằng nước ấm mỗi tối trước khi đi ngủ, sau khi quan hệ và sau khi ngủ dậy nhé. Hạn chế sử dụng các dung dịch vệ sinh có chứa xà phòng.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Tránh thụt rửa khi vệ sinh âm đạo</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Việc thụt rửa sẽ làm xáo trộn cân bằng tự nhiên của vi khuẩn trong âm đạo, làm tăng nguy cơ nhiễm trùng, viêm âm đạo.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Không tắm bồn</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Việc tắm bồn có thể giúp mẹ dễ chịu hơn. Tuy nhiên, đối với phụ nữ mang thai, tắm bồn làm tăng nguy cơ gây kích ứng, ngứa vùng kín.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Gặp bác sĩ khi vùng kín có dấu hiệu bất thường</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Mặc dù ra khí hư nhiều khi mang thai là điều bình thường. Tuy nhiên nếu khí hư có mùi hôi khó chịu, màu vàng, xanh, nâu… thì mẹ cần đến gặp bác sĩ ngay để được chẩn đoán và điều trị nếu có vấn đề.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Kết luận: Khi mang thai, khi hư ra nhiều mẹ bầu hoàn toàn có thể sử dụng băng vệ sinh hằng ngày để vùng kín luôn khô thoáng và sạch sẽ. Tuy nhiên, mẹ cần lựa chọn dòng BVS an toàn và sử dụng đúng cách cũng như kết hợp các biện pháp vệ sinh vùng kín khoa học.&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255);\"><span style=\"font-family: KoHo;\">Hy vọng với những chia sẻ trên đã phần nào giúp các mẹ bầu có đáp án cho băn khoăn “Có nên dùng băng vệ sinh hằng ngày khi mang thai không? Nếu có nhu cầu tìm mua BVS hữu cơ, mẹ bầu có thể tìm đến các cửa hàng hữu cơ của Organica, đặt hàng qua website, fanpage hoặc gọi ngay vào Hotline&nbsp;</span><span style=\"font-weight: 700; font-family: KoHo;\">0901 828 689</span><span style=\"font-family: KoHo;\">&nbsp;để được tư vấn và hỗ trợ chi tiết nhất.</span></span></p></div>', '2020-11-15', '6', 2, '5557-180151588643884-1588643884.jpg', 'me-bau-co-nen-dung-bang-ve-sinh-hang-ngay-khong', 1, 0, 'dinh dưỡng cho mẹ bầu, bé ăn dặm, cùng con khôn lớn, 6 tháng đầu tiên', '2020-10-30 10:55:50', '2020-11-15 07:00:08'),
(2, 4, 'Mẹ bầu ăn gì để tăng cường sức đề kháng mùa dịch bệnh?', '<p>Mang thai, hệ miễn dịch của người mẹ bị suy giảm trầm trọng, cơ thể dễ bị tấn công bởi virus, tiềm ẩn các căn bệnh nguy hiểm, đặc biệt là trước tình hình dịch bệnh diễn biến phức tạp như hiện nay. Vậy nên, bên cạnh các biện pháp bảo vệ từ bên ngoài, mẹ cần chủ động xây dựng cho mình chế độ dinh dưỡng hợp lý nhằm tăng cường sức đề kháng, giảm nguy cơ mắc bệnh.<br></p>', '<div class=\"block-detail\" style=\"border-bottom: 1px solid rgb(207, 222, 186); margin-bottom: 25px; padding-bottom: 17px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><h2 class=\"block-detail-ttl\" style=\"font-family: latobold; font-weight: 500; color: inherit; margin: 13px 0px; font-size: 26px;\"><span style=\"background-color: rgb(255, 255, 255); font-family: KoHo;\">Mẹ bầu ăn gì để tăng cường sức đề kháng mùa dịch bệnh?</span></h2><h3 class=\"block-detail-description\" style=\"font-family: latobold; font-weight: 500; line-height: 1.3; color: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 18px;\"><span style=\"background-color: rgb(255, 255, 255); font-family: KoHo;\">Mang thai, hệ miễn dịch của người mẹ bị suy giảm trầm trọng, cơ thể dễ bị tấn công bởi virus, tiềm ẩn các căn bệnh nguy hiểm, đặc biệt là trước tình hình dịch bệnh diễn biến phức tạp như hiện nay. Vậy nên, bên cạnh các biện pháp bảo vệ từ bên ngoài, mẹ cần chủ động xây dựng cho mình chế độ dinh dưỡng hợp lý nhằm tăng cường sức đề kháng, giảm nguy cơ mắc bệnh.</span></h3></div><div class=\"block-detail-content\" style=\"border-bottom: 1px solid rgb(207, 222, 186); margin-bottom: 10px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Dưới đây là những thực phẩm có tác dụng tăng cường sức đề kháng mẹ nên bổ sung vào thực đơn ăn uống hằng ngày của mình.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/April/3/5359-296021585889564-1585889564.jpg\" alt=\"\" width=\"700\" height=\"500\" style=\"border: 0px; max-width: 100%; float: none;\"></span></span></p><h2 style=\"font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">1/ Thực phẩm giàu protein</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Protein là dưỡng chất thiết yếu cung cấp năng lượng cho cơ thể, khi mang thai nhu cầu năng lượng của mẹ bầu càng tăng cao vì phải cung cấp các dưỡng chất cho sự phát triển của thai nhi. Bên cạnh đó, protein cũng đóng vai trò tạo ra các kháng thể cho cơ thể, tăng cường sức đề kháng. Vậy nên, chế độ dinh dưỡng trong mùa dịch mẹ đừng quên bổ sung các nhóm thực phẩm giàu protein.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Các nguồn thực phẩm cung cấp hàm lượng protein dồi dào mẹ bầu nên bổ sung gồm:</span></p><ul style=\"margin-bottom: 10px; text-align: justify;\"><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Đậu (đen, đỏ, xanh, đậu lăng… cung cấp 40g protein/100g)</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Quả bơ (40g protein/100g)</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Thịt bò nạc (36g protein/100g)</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Bí ngô, hạt bí (33g protein/100g)</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Thịt gà/lợn nạc (30g protein/100g)</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Hạt hướng dương (20g protein/100g)</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Tảo xanh, tảo xoắn, đậu phộng, tôm, cua</span></li></ul><h2 style=\"font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">2/ Thực phẩm giàu vitamin C</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Vitamin C là chất chống oxy hóa cao, có tác dụng tăng cường sức đề kháng hiệu quả, chẳng những thế vitamin C còn giúp mẹ bầu sở hữu một làn da sáng, mềm mịn, giảm thâm nám. Thế nên, thực đơn hằng ngày mẹ đừng quên bổ sung vitamin C, nhất là trong thời điểm dịch bệnh diễn biến phức tạp như hiện nay.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/April/3/5360-573271585889565-1585889565.jpg\" alt=\"\" width=\"700\" height=\"500\" style=\"border: 0px; max-width: 100%;\"></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Những thực phẩm giàu vitamin C mẹ bầu cần cho vào danh sách dinh dưỡng gồm:</span></p><ul style=\"margin-bottom: 10px; text-align: justify;\"><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Trái cây: cam, quýt, bưởi, chanh, dâu tây, táo, đào, mơ, hồng…</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau củ quả: Cà chua, ớt chuông, củ cải đường, khoai tây bắp cải, rau bina</span></li></ul><h2 style=\"font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">3/ Thực phẩm giàu vitamin D</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Vitamin D giúp tăng cường khả năng chống vi sinh gây bệnh của tế bào miễn dịch, tăng cường phản ứng miễn dịch. Rất nhiều nghiên cứu cho thấy vitamin giúp giảm nguy cơ viêm phổi, lo âu… Vậy nên, mẹ bầu đừng quên bổ sung nguồn cung cấp vitamin D, đặc biệt là qua thực phẩm như:</span></p><ul style=\"margin-bottom: 10px; text-align: justify;\"><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Cá hồi, cá trích, cá mòi, cá tuyết, cá ngừ</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Dầu gan cá tuyết</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Hàu, tôm</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Lòng đỏ trứng</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Nấm</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Nước cam</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Sữa đậu nành, sữa bò</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Ngũ cốc, yến mạch</span></li></ul><h2 style=\"font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">4/ Tỏi đen</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Tỏi đen rất tốt cho phụ nữ mang thai. Chúng có tác dụng điều chỉnh hệ tiêu hóa, cải thiện giấc ngủ. Đặc biệt là tăng cường khả năng miễn dịch và giảm nguy cơ tăng huyết áp (tình trạng thường xảy ra ở phụ nữ mang thai). Ngoài ra, mẹ cũng yên tâm khi sử dụng vì sau quá trình lên men, tỏi không còn mùi hăng khó chịu. Mỗi ngày mẹ có thể dùng từ 1-2 củ tỏi đen để tăng cường sức đề kháng.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255);\"><span style=\"font-family: KoHo;\">Tham khảo&nbsp;</span><span style=\"font-weight: 700; font-family: KoHo;\"><a href=\"https://www.organica.vn/san-pham-che-bien/toi-den-huu-co-han-quoc-nhs-100g\" style=\"color: rgb(51, 51, 51); outline: none !important;\">tỏi đen hữu cơ</a></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/April/3/5361-977091585889565-1585889565.jpg\" alt=\"\" width=\"700\" height=\"500\" style=\"border: 0px; max-width: 100%;\"></span></span></p><h2 style=\"font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">5/ Thực phẩm giàu sắt</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Sắt đóng vai trò vô cùng quan trọng trong chế độ dinh dưỡng của phụ nữ mang thai, không chỉ giúp ngăn ngừa tình trạng thiếu máu khi mang thai mà sắt còn hỗ trợ tăng cường sức đề kháng cho cơ thể hiệu quả. Ngoài sử dụng viên uống sắt, mẹ đừng quên bổ sung các thực phẩm giàu sắt sau vào thực đơn hằng ngày của mình, nhất là trong mùa dịch bệnh:</span></p><ul style=\"margin-bottom: 10px; text-align: justify;\"><li><span style=\"font-weight: 700;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\"><a href=\"https://www.organica.vn/product?keyword=h%E1%BA%A1t+%C4%91i%E1%BB%81u\" style=\"color: rgb(51, 51, 51); outline: none !important;\">Hạt điều</a></span></span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Đậu nành</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau bina</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Củ cải đỏ</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Dưa hấu</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Lựu&nbsp;</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Ức gà</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Táo</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Cá thu, cá hồi</span></li><li><span style=\"font-weight: 700;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\"><a href=\"https://www.organica.vn/ngu-coc-dau-va-hat/hat-bi-tach-vo-huu-co\" style=\"color: rgb(51, 51, 51); outline: none !important;\">Hạt bí</a></span></span></li></ul><h2 style=\"font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">6/ Thực phẩm giàu kẽm</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Kẽm đóng vai trò đặc biệt quan trọng đối với hệ miễn dịch của cơ thể, chúng giúp tăng chức năng của các tế bào bạch cầu, từ đó nhận diện và tiêu diệt các tế bào lạ xâm nhập vào cơ thể. Kẽm cũng cực kỳ quan trọng với bà bầu, chúng giúp mẹ không bị mệt mỏi, giảm nguy cơ mắc các bệnh cảm, cúm. Một số thực phẩm giàu kẽm mẹ bầu cần chú ý bổ sung như:</span></p><ul style=\"margin-bottom: 10px; text-align: justify;\"><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Hàu, sò</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Thịt đỏ</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau muống</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Củ cải</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Đậu, đỗ</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Lòng đỏ trứng gà</span></li></ul><h2 style=\"font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">7/ Thực phẩm chứa nhiều lợi khuẩn</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Bổ sung lợi khuẩn là cách hiệu quả để tăng cường hệ miễn dịch khi mang thai, nhất là trong thời điểm tình hình dịch bệnh diễn biến phức tạp như hiện nay. Các thực phẩm chứa nhiều lợi khuẩn có thể kể đến như sữa chua, sữa yến mạch, bột yến mạch...</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Ngoài việc bổ sung các dưỡng chất có vai trò tăng đề kháng, xây dựng chế độ dinh dưỡng khoa học thì mẹ bầu cũng cần chú ý duy trì cho mình thói quen sinh hoạt lành mạnh như uống nhiều nước, vận động nhẹ nhàng mỗi ngày, ngủ đúng giờ đủ giấc. Đặc biệt là duy trì cho bản thân một tâm thế thoải mái nhất, không nên quá lo lắng, chỉ cần chú ý các biện pháp bảo vệ bản thân, hạn chế ra ngoài thì nguy cơ nhiễm bệnh gần như không có.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Hy vọng với những chia sẻ trên đã phần nào mang đến những kiến thức dinh dưỡng hữu ích cho các mẹ bầu. Dịch bệnh vẫn đang diễn biến phức tạp và chưa có dấu hiệu hạ nhiệt. Chính vì vậy, qua đây Organica cũng muốn nhắn gửi đến tất cả mọi người hãy cố gắng duy trì các biện pháp bảo vệ bản thân, xây dựng chế độ dinh dưỡng hợp lý để cùng nhau vượt qua đại dịch này nhé.&nbsp;</span></p></div>', '2020-11-17', '15', 2, '5362-936811585889681-1585889681.jpg', 'me-bau-an-gi-de-tang-cuong-suc-de-khang-mua-dich-benh', 1, 1, 'mẹ bầu, bé ăn dặm', '2020-10-30 10:57:23', '2020-11-16 23:34:55'),
(3, 3, '7 cách để giữ rau, củ, quả hữu cơ tươi ngon lâu hơn', '<p>Rau củ quả hữu cơ được chị em nội trợ tin dùng vì yếu tố an toàn cao, đảm bảo cho sức khỏe cả gia đình, chưa kể hương vị tự nhiên để những bữa cơm thêm thơm ngon, hấp dẫn. Tuy nhiên, vì không can thiệp hóa chất, chất bảo quản nên rau củ quả hữu cơ thường có “hạn sử dụng” ngắn hơn rau củ quả thường.<br></p>', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau củ quả hữu cơ được chị em nội trợ tin dùng vì yếu tố an toàn cao, đảm bảo cho sức khỏe cả gia đình, chưa kể hương vị tự nhiên để những bữa cơm thêm thơm ngon, hấp dẫn. Tuy nhiên, vì không can thiệp hóa chất, chất bảo quản nên rau củ quả hữu cơ thường có “hạn sử dụng” ngắn hơn rau củ quả thường.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/October/19/6840-455681603092741-1603092741.jpg\" alt=\"\" width=\"700\" height=\"500\" style=\"border: 0px; max-width: 100%;\"></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Để thưởng thức rau củ quả tươi ngon, Organica luôn khuyến khích chị em nên mua rau củ quả vừa đủ dùng cho 2-3 ngày, không nên mua nhiều. Tuy nhiên, trường hợp nếu chị em đã lỡ mua và muốn rau củ quả vẫn tươi ngon thì có thể tham khảo một vài mẹo khoa học sau.</span></p><h2 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">I/ Rau củ quả hữu cơ “hạn sử dụng” ngắn. Làm sao để giữ độ tươi ngon nhất?</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Một số khách hàng thường thắc mắc rằng “sao chị thấy rau củ quả trên kệ nhà Organica luôn tươi ngon?, chẳng khi nào thấy rau héo úa, vàng”.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/October/19/6841-730441603092745-1603092745.jpg\" alt=\"\" width=\"700\" height=\"500\" style=\"border: 0px; max-width: 100%;\"></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Thực ra, nhà Organica chẳng sử dụng “chiêu trò” gì đâu. Để rau củ quả đến tay người tiêu dùng luôn tươi ngon, đó là cả một hành trình nỗ lực của nhà O trong các khâu mà ít người biết được. Cụ thể như sau.</span></p><ul style=\"margin-bottom: 10px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau củ quả nhà Organica khi đến vụ thu hoạch sẽ được cắt, hái vào buổi chiều mát. Điều này giúp rau củ quả giữ được độ tươi nhất.</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Sau đó, rau củ quả được chọn lọc, loại bỏ những sản phẩm bầm dập, lá vàng, trái sâu… để đóng gói.&nbsp;</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau củ quả được vận chuyển nhanh chóng đến các cửa hàng để sáng đã có sẵn trên kệ phục vụ người mua.</span></li></ul><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Đặc biệt, Organica không thu hoạch ồ ạt rau củ quả, lượng rau củ quả thu về thường phục vụ hết trong 2-3 ngày, không có rau tồn dư nên rau củ quả mới luôn cập nhật trên kệ. Đó là lý do, rau củ quả trên kệ nhà Organica không chỉ cam kết an toàn chuẩn hữu cơ mà còn luôn tươi ngon nhất để phục vụ bữa cơm của anh/chị khách hàng ngon, giàu dinh dưỡng nhất.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><em><span style=\"font-size: 16px; background-color: rgb(255, 255, 255);\"><span style=\"font-family: KoHo;\">&gt;&gt;&gt; Tham khảo:&nbsp;</span><span style=\"font-weight: 700;\"><span style=\"color: rgb(153, 204, 0); font-family: KoHo;\"><a href=\"https://www.organica.vn/news/3/chung-nhan-huu-co-usda-co-y-nghia-gi\" style=\"color: rgb(153, 204, 0); outline: none !important;\">Chứng nhận hữu cơ USDA có ý nghĩa gì?</a></span></span></span></em></p><h2 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">II/ Hướng dẫn bảo quản rau củ quả hữu cơ tươi ngon</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Để thưởng thức rau củ quả tươi ngon, Organica luôn khuyến khích chị em nên mua rau củ quả vừa đủ dùng cho 2-3 ngày, không nên mua nhiều. Tuy nhiên, trường hợp nếu chị em đã lỡ mua và muốn rau củ quả vẫn tươi ngon thì có thể tham khảo một vài mẹo khoa học sau.</span></p><h2 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Gói rau củ quả sinh khí Ethylene/nhạy cảm khí Ethylene trong túi giấy</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Ethylene là một loại hormone thực vật được tạo ra trong quá trình phát triển của cây trồng, đặc biệt ở giai đoạn chín. Đặc biệt, một số loại trái cây và rau quả sau khi thu hoạch sẽ tiếp tục sản sinh ra khí ethylene - khí này sẽ thúc đẩy củ quả nhanh chín, tăng quá trình vàng lá ở rau.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/October/19/6838-853641603092740-1603092740.jpg\" alt=\"\" width=\"700\" height=\"466\" style=\"border: 0px; max-width: 100%;\"></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Do đó, khi bảo quản nên tránh để chung các loại rau củ quả sinh khí ethylene với các loại rau củ quả nhạy cảm với khí ethylene. Để rau củ quả không nhanh chín, vàng úa thì bạn gói rau củ quả sinh khí Ethylene hoặc rau củ quả nhạy cảm với khí Ethylene vào túi giấy riêng.</span></p><table style=\"border-spacing: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif; width: 686.6px;\"><tbody><tr><td style=\"padding: 0px; width: 310px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau củ quả sinh khí Ethylene</span></span></p></td><td style=\"padding: 0px; width: 362.6px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau củ quả nhạy cảm với khí Ethylene</span></span></p></td></tr><tr><td style=\"padding: 0px; width: 310px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Táo</span></p></td><td style=\"padding: 0px; width: 362.6px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Trái xoài</span></p></td></tr><tr><td style=\"padding: 0px; width: 310px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Dưa lưới</span></p></td><td style=\"padding: 0px; width: 362.6px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Măng tây</span></p></td></tr><tr><td style=\"padding: 0px; width: 310px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Trái bơ</span></p></td><td style=\"padding: 0px; width: 362.6px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Trái đào</span></p></td></tr><tr><td style=\"padding: 0px; width: 310px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Lê</span></p></td><td style=\"padding: 0px; width: 362.6px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Hành củ</span></p></td></tr><tr><td style=\"padding: 0px; width: 310px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Cà chua</span></p></td><td style=\"padding: 0px; width: 362.6px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Cà tím</span></p></td></tr><tr><td style=\"padding: 0px; width: 310px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Tiêu</span></p></td><td style=\"padding: 0px; width: 362.6px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Nho</span></p></td></tr><tr><td style=\"padding: 0px; width: 310px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Chuối chín</span></p></td><td style=\"padding: 0px; width: 362.6px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Dưa chuột/dưa leo</span></p></td></tr></tbody></table><h3 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau bina, xà lách Romaine, rau diếp.. Nên rửa trước khi cho vào tủ lạnh</span></span></h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/October/19/6837-884571603092740-1603092740.jpg\" alt=\"\" width=\"700\" height=\"466\" style=\"border: 0px; max-width: 100%;\"></span></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Không phải rau nào sau khi mua về chị em cũng nên rửa sạch rồi cho vào tủ lạnh. Nhưng với xà lách Romaine, rau diếp, rau bina thì chị em nên nhặt sạch, bỏ lá vàng, sau đó rửa để ráo sau đó cho vào tủ lạnh bảo quản (túi nhựa hoặc hộp đựng). Cách này giúp rau tươi ngon và giữ chất dinh dưỡng tốt.</span></p><h3 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Cắt cuống cà rốt đi</span></span></h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Khi mua cà rốt về nếu còn cuống xanh, chị em nên cắt bỏ đi trước khi bảo quản vì cuống sẽ hút chất dinh dưỡng có trong cà rốt. Có thể bảo quản cà rốt bên ngoài, nếu đã sơ chế thì nên bảo quản trong túi/hộp đậy kín ở ngăn mát tủ lạnh sẽ giữ được vài tuần.</span></p><h3 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Bảo quản chuối trong tủ lạnh đúng cách</span></span></h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Để giữ chuối được lâu (1 tuần), bạn nên tránh để chuối gần ánh nắng trực tiếp của mặt trời hoặc nơi có nhiều độ ẩm. Nếu bảo quản trong tủ lạnh thì tốt nhất cho vào túi zip, hút chân không rồi cho vào ngăn mát. Nếu không thì dùng màng thực phẩm bọc kín hoặc dùng túi giấy bọc kín, nên tách thành từng quả thay vì để cả nải chuối.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Lưu ý, nên ưu tiên mua chuối vừa chín, còn cứng, tránh mua chuối quá mềm. Đặc biệt chuối sau lấy ra từ tủ lạnh bạn nên ăn ngày, tránh để lâu, chuối sẽ bị thâm đen, không còn ngon.</span></p><h3 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Bọc giấy bạc cho cần tây</span></span></h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/October/19/6839-120191603092740-1603092740.jpg\" alt=\"\" width=\"700\" height=\"466\" style=\"border: 0px; max-width: 100%;\"></span></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Cần tây chứa nhiều nước, khá nhạy cảm với ethylene. Để giữ cần tây lâu trong tủ mà không bị mềm thì chị em nên bọc bằng giấy bạc rồi để trong ngăn kéo tủ lạnh, cách này sẽ giúp cần tây giữ được trong vài tuần.</span></p><h3 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Cho chanh vào túi</span></span></h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/October/19/6835-906591603092740-1603092740.jpg\" alt=\"\" width=\"700\" height=\"466\" style=\"border: 0px; max-width: 100%;\"></span></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Muốn chanh vàng để được lâu tối đa 1 tháng, chị em nên để chanh vào túi nhựa, hút hết không khí rồi cho vào tủ lạnh. Nếu không bọc chanh, chanh sẽ dễ bị khô, nhanh hỏng.</span></p><h3 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Nấm cần được thông gió</span></span></h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Đặc điểm của nấm là thích được giữ mát và thông gió tốt. Do đó, sau khi mua về, bạn đừng rửa hãy dùng khăn mềm lau nhẹ để loại bỏ bụi bẩn, đất cát nếu có sau đó xếp nấm vào giấy báo, gói lại để nơi khô ráo là được, chú ý nên gói gọn nhưng để hở ở trên. Nếu muốn bảo quản nấm trong 1 tháng thì cần làm sạch phần chân, gọt vỏ, cắt nhỏ rồi cho vào túi, hút hết không khí, kéo khóa và cho vào tủ đông.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/October/19/6836-743091603092740-1603092740.jpg\" alt=\"\" width=\"700\" height=\"466\" style=\"border: 0px; max-width: 100%;\"></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"font-size: 16px; font-family: KoHo;\">Mỗi loại rau củ quả sẽ có những đặc điểm riêng, chỉ khi hiểu tính chất của chúng, bạn mới bảo quản đúng cách. Song nếu được, Organica luôn khuyến khích người mua nên mua số lượng vừa đủ để thưởng thức hương vị rau củ quả tươi ngon nhất.</span><br><span style=\"font-size: 16px;\"><span style=\"font-family: KoHo;\">Khi mua thực phẩm tại cửa hàng, Organica luôn tư vấn cách sử dụng và bảo quản để đảm bảo dinh dưỡng và độ tươi ngon cao nhất.Hoặc nếu có thắc mắc, anh/chị đừng quên Hotline nhà Organica&nbsp;</span><span style=\"font-weight: 700; font-family: KoHo;\">0901 828 689&nbsp;</span><span style=\"font-family: KoHo;\">luôn túc trực để phục vụ.</span></span><span style=\"font-family: KoHo;\">﻿</span></span></p>', '2020-11-15', '8', 2, '6832-274221603092271-1603092271.jpg', '7-cach-de-giu-rau-cu-qua-huu-co-tuoi-ngon-lau-hon', 1, 1, 'rau củ quả, bảo quản rau củ quả', '2020-10-30 20:31:34', '2020-11-15 06:47:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethd`
--

CREATE TABLE `chitiethd` (
  `id_hd` bigint(20) UNSIGNED NOT NULL,
  `id_sanpham` int(10) UNSIGNED NOT NULL,
  `id_donhang` int(10) UNSIGNED NOT NULL,
  `chitietdonhang_soluong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chitietdonhang_tongtien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `counpon`
--

CREATE TABLE `counpon` (
  `counpon_id` bigint(20) UNSIGNED NOT NULL,
  `counpon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counpon_time` date NOT NULL,
  `counpon_type` int(11) NOT NULL,
  `counpon_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counpon_quanty` int(11) NOT NULL,
  `counpon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Anhien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `counpon`
--

INSERT INTO `counpon` (`counpon_id`, `counpon_name`, `counpon_time`, `counpon_type`, `counpon_number`, `counpon_quanty`, `counpon_code`, `Anhien`, `created_at`, `updated_at`) VALUES
(1, 'Khuyến mãi dịp tết Nguyên Đán 2020, giảm ngay 100k cho tất cả sản phẩm', '2020-12-05', 0, '5', 5, 'TET2021', 1, '2020-11-04 05:53:05', '2020-11-10 04:33:33'),
(2, 'Khuyến mãi dịp tết Nguyên Đán 2020, giảm ngay 100k cho tất cả sản phẩm', '2020-11-04', 0, '25', 3, 'TET2022', 1, '2020-11-04 06:40:29', '2020-11-04 06:40:29'),
(3, 'Khuyến mãi dịp tết Nguyên Đán 2020, giảm ngay 150k cho tất cả sản phẩm', '2020-11-14', 1, '150000', 5, 'TET2023', 1, '2020-11-04 07:10:43', '2020-11-05 20:28:06'),
(4, 'Khuyến mãi dịp tết Nguyên Đán 2020, giảm ngay 150k cho tất cả sản phẩm', '2020-11-04', 0, '50', 3, 'SALE50', 1, '2020-11-04 08:16:00', '2020-11-04 08:16:00'),
(5, 'Khuyến mãi dịp tết Nguyên Đán 2020, giảm ngay 100k cho tất cả sản phẩm', '2020-11-05', 0, '100', 1, 'FREE', 1, '2020-11-04 08:33:05', '2020-11-04 08:43:27'),
(6, 'Khuyến mãi dịp tết Nguyên Đán 2020, giảm ngay 100k cho tất cả sản phẩm', '2020-11-05', 1, '1000000', 1, 'FREE2', 1, '2020-11-04 08:33:46', '2020-11-04 08:33:46'),
(7, 'Khuyến mãi dịp tết Nguyên Đán 2020, giảm ngay 100k cho tất cả sản phẩm', '2020-11-03', 0, '100', 0, 'FREE3', 1, '2020-11-04 08:40:06', '2020-11-04 08:40:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` bigint(20) UNSIGNED NOT NULL,
  `name_nguoinhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_nguoinhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_nguoinhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu_donhang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongtien_donhang` int(11) NOT NULL,
  `id` int(10) UNSIGNED DEFAULT NULL,
  `id_tinhtrang` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvitinh`
--

CREATE TABLE `donvitinh` (
  `id_donvitinh` bigint(20) UNSIGNED NOT NULL,
  `name_donvi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donvitinh`
--

INSERT INTO `donvitinh` (`id_donvitinh`, `name_donvi`, `created_at`, `updated_at`) VALUES
(1, 'Túi', '2020-10-27 07:49:20', '2020-10-27 07:49:20'),
(2, 'Kg', '2020-10-27 07:49:28', '2020-10-27 07:49:28'),
(3, 'Hộp', '2020-10-27 21:05:01', '2020-10-27 21:05:01'),
(4, 'Chai', '2020-10-27 21:13:49', '2020-10-27 21:13:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `email`
--

CREATE TABLE `email` (
  `id_email` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `email`
--

INSERT INTO `email` (`id_email`, `email`, `created_at`, `updated_at`) VALUES
(23, 'aasdsa@gmail.com', '2020-10-29 23:21:09', '2020-10-29 23:21:09'),
(25, 'zzasdsa@gmail.com', '2020-10-29 23:22:06', '2020-10-29 23:22:06'),
(26, 'dsadd@gmail.com', '2020-10-29 23:26:49', '2020-10-29 23:26:49'),
(27, 'sasd@gmail.com', '2020-10-29 23:28:04', '2020-10-29 23:28:04'),
(28, 'nhdsaat@gmail.com', '2020-10-29 23:32:49', '2020-10-29 23:32:49'),
(30, 'nmtran6z8@gmail.com', '2020-11-05 05:44:10', '2020-11-05 05:44:10'),
(31, 'zzzsad@gmail.com', '2020-11-05 05:56:59', '2020-11-05 05:56:59'),
(33, 'dasdasddsa@gmail.com', '2020-11-05 06:07:59', '2020-11-05 06:07:59'),
(43, 'nmtran68@gmail.com', '2020-11-08 01:07:25', '2020-11-08 01:07:25'),
(44, 'despacitolv1@gmail.com', '2020-11-08 01:42:50', '2020-11-08 01:42:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `imgchitiet`
--

CREATE TABLE `imgchitiet` (
  `id_img` bigint(20) UNSIGNED NOT NULL,
  `id_sanpham` int(10) UNSIGNED NOT NULL,
  `name_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `imgchitiet`
--

INSERT INTO `imgchitiet` (`id_img`, `id_sanpham`, `name_img`, `created_at`, `updated_at`) VALUES
(1, 15, 'hinh-chi-tiet-dua-luoi-tl3-1.jpg', NULL, NULL),
(2, 2, 'hinh-chi-tiet-dua-luoi-tl3-1.jpg', NULL, NULL),
(3, 2, 'p-05.jpg', NULL, NULL),
(4, 2, 'p-13.jpg', NULL, NULL),
(5, 2, 'p-17.jpg', NULL, NULL),
(6, 2, 'p-24.jpg', NULL, NULL),
(7, 41, 'thuc-uong-dd-milo-180ml-loc-3-org.jpg', NULL, NULL),
(8, 41, 'thuc-uong-dd-milo-180ml-loc-4-org.jpg', NULL, NULL),
(9, 41, 'thuc-uong-dd-milo-180ml-loc-5-org.jpg', NULL, NULL),
(10, 41, 'thuc-uong-dd-milo-180ml-loc-6-org.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info`
--

CREATE TABLE `info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sitelogo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `googlemap` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactphone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactphone3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `info`
--

INSERT INTO `info` (`id`, `sitename`, `sitelogo`, `introduction`, `contactemail`, `contactphone`, `address`, `googlemap`, `contactphone2`, `contactphone3`, `address2`, `address3`, `created_at`, `updated_at`) VALUES
(1, 'Green Fresh', '4305298570228e7cd733.jpg', 'Website bán hàng xịn xò nhất quả đất', 'contactgreenfresh@gmail.com', '09032681682', 'Cao Đẳng Thực Hành FPT-Polytechnic', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.845085360043!2d106.69037601386799!3d10.823164792289784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175296100a3da7f%3A0xee313959ed0c2b0d!2sTHREE%20O%20CLOCK%20PVT!5e0!3m2!1svi!2s!4v1602690606954!5m2!1svi!2s', '01421844755', '0633845546', NULL, NULL, '2020-10-15 08:04:53', '2020-11-10 12:14:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khohang`
--

CREATE TABLE `khohang` (
  `sku` bigint(20) UNSIGNED NOT NULL,
  `khohang_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khohang_soluong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khohang_donvi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khohang_ngaynhap` date NOT NULL,
  `khohang_hsd` date NOT NULL,
  `khohang_trangthai` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khohang`
--

INSERT INTO `khohang` (`sku`, `khohang_name`, `khohang_soluong`, `khohang_donvi`, `khohang_ngaynhap`, `khohang_hsd`, `khohang_trangthai`, `created_at`, `updated_at`) VALUES
(1153770293, 'Xà lách Iceberg hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 00:50:17', '2020-11-25 00:50:17'),
(1170122472, 'Đọt bí đỏ hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 00:54:26', '2020-11-25 00:54:26'),
(1283302351, 'Rau ngót hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 00:49:28', '2020-11-25 00:49:28'),
(1540056494, 'Cần tây', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 00:51:45', '2020-11-25 00:51:45'),
(1652501263, 'Cà chua bi Socola', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:25:51', '2020-11-25 01:25:51'),
(1764075845, 'Bầu hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:27:49', '2020-11-25 01:27:49'),
(1910487595, 'Đậu bắp hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:25:04', '2020-11-25 01:25:04'),
(1915441405, 'Đậu rồng hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:24:02', '2020-11-25 01:24:02'),
(1958759047, 'Hành lá hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:40:01', '2020-11-25 01:40:01'),
(2162809159, 'Rau cải bẹ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 00:52:12', '2020-11-25 00:52:12'),
(2705378692, 'Măng tây xanh hữu cơ loại 1', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:38:49', '2020-11-25 01:38:49'),
(2714586024, 'Rau dền cơm Hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 00:51:03', '2020-11-25 00:51:03'),
(2762019214, 'Bông cải xanh', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:36:17', '2020-11-25 01:36:17'),
(2821047956, 'Mồng tơi hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 00:49:54', '2020-11-25 00:49:54'),
(2845256766, 'Rau lang hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:03:57', '2020-11-25 01:03:57'),
(2873757588, 'Rau dền hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 00:53:05', '2020-11-25 01:06:21'),
(3075916584, 'Cải bẹ xanh hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 00:57:06', '2020-11-25 00:57:06'),
(3336449726, 'Chanh không hạt', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:39:18', '2020-11-25 01:39:18'),
(3777019162, 'Củ dền', '50', 'Kg', '2020-11-25', '2021-03-11', 0, '2020-11-25 01:12:52', '2020-11-25 01:12:52'),
(3841353485, 'Hành baro', '50', 'Kg', '2020-12-02', '2020-12-02', 0, '2020-11-25 01:41:06', '2020-11-25 01:41:06'),
(4285827186, 'Ngải cứu hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:41:24', '2020-11-25 01:41:24'),
(4336188959, 'Sả hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:40:46', '2020-11-25 01:40:46'),
(4369601613, 'Khổ qua hữu cơ', '50', 'Kg', '2020-11-25', '2021-01-08', 0, '2020-11-25 01:20:58', '2020-11-25 01:20:58'),
(4371326571, 'Dưa leo hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:22:23', '2020-11-25 01:22:23'),
(4539735571, 'Khoai tây Cấp đông Hữu cơ OOB', '200', 'Túi', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:52:38', '2020-11-25 01:52:38'),
(4732044254, 'Cải ngọt hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 00:57:53', '2020-11-25 00:57:53'),
(5166581687, 'Bí xanh Hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:28:14', '2020-11-25 01:28:14'),
(5447473291, 'Cải thìa hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 00:56:25', '2020-11-25 00:56:25'),
(5458357435, 'Mướp hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-09', 0, '2020-11-25 01:21:28', '2020-11-25 01:21:28'),
(5503390917, 'Đậu que hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:18:44', '2020-11-25 01:18:44'),
(5515044033, 'Nấm tuyết hữu cơ Green nature', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:49:49', '2020-11-25 01:49:49'),
(5561422876, 'Rau muống hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:04:23', '2020-11-25 01:04:23'),
(5647594424, 'Cà rốt', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:13:15', '2020-11-25 01:13:15'),
(5664577897, 'Nấm Mộc nhĩ (Nấm Mèo) Hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:50:13', '2020-11-25 01:50:13'),
(5767942204, 'Xà lách Romaine', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 00:54:57', '2020-11-25 00:54:57'),
(5832346337, 'Bắp cải Sú tim', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 00:52:42', '2020-11-25 00:52:42'),
(6129030664, 'Ớt', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:24:24', '2020-11-25 01:24:24'),
(6236370664, 'Su su', '50', 'Kg', '2020-11-25', '2020-12-09', 0, '2020-11-25 01:23:30', '2020-11-25 01:23:30'),
(6311159522, 'Xà lách lụa hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:02:10', '2020-11-25 01:02:10'),
(6446330916, 'Nấm mỡ trắng', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:49:08', '2020-11-25 01:49:08'),
(6532488328, 'Cà chua Beef', '200', 'Kg', '2020-11-25', '2020-12-09', 0, '2020-11-25 01:20:27', '2020-11-25 01:20:27'),
(6540375113, 'Rau đay Hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 00:50:41', '2020-11-25 00:50:41'),
(6583216670, 'Cải nhún hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:03:34', '2020-11-25 01:03:34'),
(6664853252, 'Nấm mối đen Premium', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:48:39', '2020-11-25 01:48:39'),
(6720589862, 'Ớt chuông', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:26:52', '2020-11-25 01:26:52'),
(6860611659, 'Cà chua bi Cherry', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:26:26', '2020-11-25 01:26:26'),
(6933396575, 'Nấm Đông cô (Nấm Hương) Hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:51:20', '2020-11-25 01:51:20'),
(7114068838, 'Bông atiso tươi', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:36:45', '2020-11-25 01:36:45'),
(7554663120, 'Bắp cải', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:00:57', '2020-11-25 01:00:57'),
(7701841061, 'Bắp nếp Hữu cơ', '50', 'Kg', '2020-11-25', '2021-01-08', 0, '2020-11-25 01:18:21', '2020-11-25 01:18:21'),
(8005680452, 'Cải ngồng hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 00:57:26', '2020-11-25 00:57:26'),
(8103944933, 'Hẹ hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:40:24', '2020-11-25 01:40:24'),
(9240698599, 'Đậu hòa lan Cấp đông Hữu cơ OOB', '200', 'Túi', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:52:07', '2020-11-25 01:52:07'),
(9607479428, 'Cải Kale', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:05:01', '2020-11-25 01:05:01'),
(9617430539, 'Củ cải trắng hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:13:41', '2020-11-25 01:13:41'),
(9679359742, 'Bí đỏ Hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:19:52', '2020-11-25 01:19:52'),
(9767343314, 'Rau thơm Hỗn hợp Hữu cơ', '50', 'Kg', '2020-11-25', '2020-12-02', 0, '2020-11-25 01:39:39', '2020-11-25 01:39:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiblog`
--

CREATE TABLE `loaiblog` (
  `id_loaiblog` bigint(20) UNSIGNED NOT NULL,
  `name_loaiblog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_loaiblog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Anhien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiblog`
--

INSERT INTO `loaiblog` (`id_loaiblog`, `name_loaiblog`, `slug_loaiblog`, `Anhien`, `created_at`, `updated_at`) VALUES
(1, 'Hiểu hữu cơ', 'hieu-huu-co', 1, '2020-10-30 10:42:02', '2020-10-30 20:14:13'),
(2, 'Ăn hữu cơ', 'an-huu-co', 1, '2020-10-30 10:42:19', '2020-10-30 10:42:19'),
(3, 'Sống hữu cơ', 'song-huu-co', 1, '2020-10-30 10:42:29', '2020-10-30 10:42:29'),
(4, 'Mẹ hữu cơ', 'me-huu-co', 1, '2020-10-30 10:42:50', '2020-10-30 10:42:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id_loaisp` bigint(20) UNSIGNED NOT NULL,
  `id_nhomsp` int(11) NOT NULL,
  `name_loaisp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_loaisp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Anhien` int(11) NOT NULL DEFAULT 0,
  `slug_loaisp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_loaisp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id_loaisp`, `id_nhomsp`, `name_loaisp`, `icon_loaisp`, `Anhien`, `slug_loaisp`, `hinh_loaisp`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rau ăn lá', 'dotbido.png', 1, 'rau-an-la', NULL, '2020-10-27 07:53:56', '2020-11-17 07:44:35'),
(2, 1, 'Rau ăn củ', 'cuden.jpg', 1, 'rau-an-cu', NULL, '2020-10-27 08:14:01', '2020-10-27 08:14:01'),
(3, 1, 'Rau ăn quả', 'khoqua.png', 1, 'rau-an-qua', NULL, '2020-10-27 08:21:31', '2020-10-27 08:21:31'),
(4, 2, 'Trái cây trong nước', 'du-du.png', 1, 'trai-cay-trong-nuoc', NULL, '2020-10-27 20:35:08', '2020-10-27 20:35:08'),
(5, 2, 'Trái cây nhập khẩu', 'kiwi-vang.png', 1, 'trai-cay-nhap-khau', NULL, '2020-10-27 20:36:22', '2020-10-27 20:36:22'),
(6, 2, 'Trái cây đông lạnh', 'phuc-bon-tu.png', 1, 'trai-cay-dong-lanh', NULL, '2020-10-27 20:37:41', '2020-10-27 20:37:41'),
(7, 3, 'Sữa thực vật', 'sua-yen-mach-huu-co.png', 1, 'sua-thuc-vat', NULL, '2020-10-27 20:54:55', '2020-10-27 20:54:55'),
(8, 3, 'Trà, Cà phê & Cacao', 'bn_special_org.jpg', 1, 'tra-ca-phe-cacao', NULL, '2020-10-27 20:56:19', '2020-11-25 00:34:55'),
(9, 3, 'Nước ép & Sinh tố', 'nuoc-ep-luu.png', 1, 'nuoc-ep-sinh-to', NULL, '2020-10-27 20:57:40', '2020-10-27 20:57:40'),
(10, 4, 'Sữa', 'sua-bo-vi-socola-koita-200ml.png', 1, 'sua', NULL, '2020-10-27 21:22:07', '2020-10-27 21:22:07'),
(11, 4, 'Sữa chua & Kem', 'sua-chua-it-duong-vinamilk-100g.png', 1, 'sua-chua-kem', NULL, '2020-10-27 21:23:37', '2020-10-27 21:23:37'),
(12, 4, 'Bơ & Phô mai', 'pho-mai-tuoi-mozzarella-4ps-125g.png', 1, 'bo-pho-mai', NULL, '2020-10-27 21:25:03', '2020-10-27 21:25:03'),
(13, 1, 'Rau ăn hoa hữu cơ', 'bn_special_org.jpg', 1, 'rau-an-hoa-huu-co', NULL, '2020-11-25 00:30:06', '2020-11-25 00:30:06'),
(14, 1, 'Rau hữu cơ ăn thân', 'bn_special_org.jpg', 1, 'rau-huu-co-an-than', NULL, '2020-11-25 00:30:26', '2020-11-25 00:30:26'),
(15, 1, 'Rau gia vị', 'bn_special_org.jpg', 1, 'rau-gia-vi', NULL, '2020-11-25 00:31:03', '2020-11-25 00:31:03'),
(16, 1, 'Nấm', 'bn_special_org.jpg', 1, 'nam', NULL, '2020-11-25 00:31:27', '2020-11-25 00:31:27'),
(17, 1, 'Rau củ quả đông lạnh', 'bn_special_org.jpg', 1, 'rau-cu-qua-dong-lanh', NULL, '2020-11-25 00:31:43', '2020-11-25 00:31:43'),
(18, 1, 'Trái cây sấy', 'bn_special_org.jpg', 1, 'trai-cay-say', NULL, '2020-11-25 00:32:04', '2020-11-25 00:32:04'),
(19, 6, 'Thịt heo', 'bn_special_org.jpg', 1, 'thit-heo', NULL, '2020-11-25 00:32:49', '2020-11-25 00:32:49'),
(20, 6, 'Thịt bò', 'bn_special_org.jpg', 1, 'thit-bo', NULL, '2020-11-25 00:33:15', '2020-11-25 00:33:15'),
(21, 6, 'Gia cầm & Trứng', 'bn_special_org.jpg', 1, 'gia-cam-trung', NULL, '2020-11-25 00:33:34', '2020-11-25 00:33:34'),
(22, 6, 'Thuỷ Hải sản', 'bn_special_org.jpg', 1, 'thuy-hai-san', NULL, '2020-11-25 00:33:57', '2020-11-25 00:33:57'),
(23, 3, 'Thức uống khác', 'bn_special_org.jpg', 1, 'thuc-uong-khac', NULL, '2020-11-25 00:35:25', '2020-11-25 00:35:25'),
(24, 5, 'Gạo & Ngũ cốc', 'bn_special_org.jpg', 1, 'gao-ngu-coc', NULL, '2020-11-25 00:36:04', '2020-11-25 00:36:04'),
(25, 5, 'Đậu', 'bn_special_org.jpg', 1, 'dau', NULL, '2020-11-25 00:36:21', '2020-11-25 00:36:21'),
(26, 5, 'Hạt', 'bn_special_org.jpg', 1, 'hat', NULL, '2020-11-25 00:36:35', '2020-11-25 00:36:35'),
(27, 5, 'Bột làm bánh', 'bn_special_org.jpg', 1, 'bot-lam-banh', NULL, '2020-11-25 00:36:54', '2020-11-25 00:36:54'),
(28, 7, 'Mật ong & Syrup', 'bn_special_org.jpg', 1, 'mat-ong-syrup', NULL, '2020-11-25 00:39:35', '2020-11-25 00:39:35'),
(29, 7, 'Dầu ăn & Giấm', 'bn_special_org.jpg', 1, 'dau-an-giam', NULL, '2020-11-25 00:41:58', '2020-11-25 00:41:58'),
(30, 7, 'Nước sốt & nước chấm', 'bn_special_org.jpg', 1, 'nuoc-sot-nuoc-cham', NULL, '2020-11-25 00:42:15', '2020-11-25 00:42:15'),
(31, 7, 'Gia vị', 'bn_special_org.jpg', 1, 'gia-vi', NULL, '2020-11-25 00:42:30', '2020-11-25 00:42:30'),
(32, 8, 'Bánh mì đông lạnh', 'bn_special_org.jpg', 1, 'banh-mi-dong-lanh', NULL, '2020-11-25 00:42:47', '2020-11-25 00:42:47'),
(33, 8, 'Bún, Mỳ sợi các loại', 'bn_special_org.jpg', 1, 'bun-my-soi-cac-loai', NULL, '2020-11-25 00:43:02', '2020-11-25 00:43:02'),
(34, 8, 'Thức ăn nhẹ', 'bn_special_org.jpg', 1, 'thuc-an-nhe', NULL, '2020-11-25 00:43:15', '2020-11-25 00:43:15'),
(35, 8, 'Thực phẩm chế biến', 'bn_special_org.jpg', 1, 'thuc-pham-che-bien', NULL, '2020-11-25 00:43:33', '2020-11-25 00:43:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lohang`
--

CREATE TABLE `lohang` (
  `id_lohang` bigint(20) UNSIGNED NOT NULL,
  `lohang_hsd` int(11) NOT NULL,
  `lohang_giamua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lohang_giaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lohang_slnhap` int(11) NOT NULL,
  `lohang_slbanra` int(11) NOT NULL,
  `lohang_sltrahang` int(11) NOT NULL,
  `lohang_slhientai` int(11) NOT NULL,
  `id_sanpham` int(10) UNSIGNED NOT NULL,
  `id_thuonghieu` int(10) UNSIGNED NOT NULL,
  `Anhien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2020_10_05_085610_update_users_table', 1),
(18, '2020_10_14_143934_taobang_info', 2),
(19, '2020_10_14_144724_taobang_s_n_s', 2),
(20, '2020_10_16_071119_sautable_info', 3),
(21, '2020_10_16_071736_sautable_info', 4),
(152, '2020_10_05_085610_update_users_table', 1),
(639, '2014_10_12_000000_create_users_table', 5),
(640, '2014_10_12_100000_create_password_resets_table', 5),
(641, '2019_08_19_000000_create_failed_jobs_table', 5),
(642, '2020_10_05_082902_create__nhomsp_table', 5),
(643, '2020_10_05_084355_create_loaisp_table', 5),
(644, '2020_10_05_090050_create_loaiblog_table', 5),
(645, '2020_10_05_090407_create_blog_table', 5),
(646, '2020_10_05_091021_create_binhluan_table', 5),
(647, '2020_10_05_091356_create_sanpham_table', 5),
(648, '2020_10_05_093404_create_imgchitiet_table', 5),
(649, '2020_10_05_093740_create_donvitinh_table', 5),
(650, '2020_10_05_094807_create_donhang_table', 5),
(651, '2020_10_05_095217_create_tinhtranghd_table', 5),
(652, '2020_10_05_103528_create_chitiethd_table', 5),
(653, '2020_10_07_060958_create_nhacungcap_table', 5),
(654, '2020_10_10_155214_create_lohang_table', 5),
(655, '2020_10_16_145927_create_tuyendung_table', 5),
(656, '2020_10_16_162911_create_counpon_table', 5),
(657, '2020_10_17_191155_create_info_table', 5),
(658, '2020_10_17_191243_create_sns_table', 5),
(659, '2020_10_29_150522_create_email_table', 5),
(660, '2020_11_01_103002_create_quangcao_table', 5),
(661, '2020_11_06_122312_update_donhang_table', 5),
(662, '2020_11_20_183015_create_khohang_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id_thuonghieu` bigint(20) UNSIGNED NOT NULL,
  `img_thuonghieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_thuonghieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_thuonghieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_thuonghieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_thuonghieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Anhien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`id_thuonghieu`, `img_thuonghieu`, `name_thuonghieu`, `sdt_thuonghieu`, `link_thuonghieu`, `slug_thuonghieu`, `Anhien`, `created_at`, `updated_at`) VALUES
(2, 'ParadiseLogo.jpg', 'HEALTH PARADISE', '01236080801', 'https://www.healthparadise-organic.com/', 'health-paradise', 1, '2020-11-25 02:08:30', '2020-11-25 02:08:30'),
(3, 'Haus-Rabenhorst-Logo-2.png', 'RABENHORST', '01236080801', 'https://haus-rabenhorst.de/en/home', 'rabenhorst', 1, '2020-11-25 02:09:59', '2020-11-25 02:09:59'),
(4, 'header-logo.png', 'PRIMEAL', '01236080801', 'https://www.ekibio.fr/groupe-bio/en/primeal', 'primeal', 1, '2020-11-25 02:11:12', '2020-11-25 02:11:12'),
(5, 'logo_karpea.png', 'KARPEA', '01236080801', 'https://www.karpea.gr/en/', 'karpea', 1, '2020-11-25 02:23:15', '2020-11-25 02:23:15'),
(6, 'GUSTI ITALIA.png', 'GUSTI ITALIA', '01236080801', 'http://www.gustiditalia.com/', 'gusti-italia', 1, '2020-11-25 02:30:14', '2020-11-25 02:30:14'),
(7, 'Logo-Bona-Mel-miel-Ecologica-70.png', 'BONA MEL', '01236080801', 'https://www.bonamel.com/en/', 'bona-mel', 1, '2020-11-25 02:33:14', '2020-11-25 02:33:14'),
(8, '776-650911530160244-1530160244.jpg', 'MÙA', '01236080801', 'none', 'mua', 1, '2020-11-25 02:38:22', '2020-11-25 02:38:22'),
(9, '778-810081530160464-1530160464.jpg', 'KARST', '01236080801', 'none', 'karst', 1, '2020-11-25 02:41:17', '2020-11-25 02:41:17'),
(10, 'Logo (1).png', 'FITO', '01236080801', 'https://fitoco.com/', 'fito', 1, '2020-11-25 02:42:32', '2020-11-25 02:42:32'),
(11, '4197-237371570700104-1570700104.jpeg', 'QUỐC HƯƠNG', '01236080801', 'none', 'quoc-huong', 1, '2020-11-25 02:44:50', '2020-11-25 02:44:50'),
(12, '4226-712781570954788-1570954788.png', 'GẠO', '01236080801', 'none', 'gao', 1, '2020-11-25 02:45:57', '2020-11-25 02:45:57'),
(13, '4196-989771570698113-1570698113.png', 'VỊ HẢO', '01236080801', 'none', 'vi-hao', 1, '2020-11-25 02:46:26', '2020-11-25 02:46:26'),
(14, '4192-254821570524969-1570524969.png', 'COCOVIE', '01236080801', 'none', 'cocovie', 1, '2020-11-25 02:46:59', '2020-11-25 02:46:59'),
(15, '4191-110371570521799-1570521799.png', 'VIETCOCO', '01236080801', 'none', 'vietcoco', 1, '2020-11-25 03:04:02', '2020-11-25 03:04:02'),
(16, '4183-645131570440609-1570440609.png', 'CƠ TU', '01236080801', 'none', 'co-tu', 1, '2020-11-25 03:04:32', '2020-11-25 03:04:32'),
(17, '4238-510521571037851-1571037851.png', 'LEMON PHARMA', '01236080801', 'https://www.lemonpharma.com/en/', 'lemon-pharma', 1, '2020-11-25 03:05:49', '2020-11-25 03:05:49'),
(18, '779-294921530160547-1530160547.png', 'ORGANICA', '01236080801', 'none', 'organica', 1, '2020-11-25 03:07:06', '2020-11-25 03:07:06'),
(19, '4182-791891570437346-1570437346.png', 'ALBA', '01236080801', 'none', 'alba', 1, '2020-11-25 03:07:41', '2020-11-25 03:07:41'),
(20, '4153-232001570263031-1570263031.jpg', 'KOYAMAEN', '01236080801', 'none', 'koyamaen', 1, '2020-11-25 03:08:32', '2020-11-25 03:08:32'),
(21, '4195-953291570696529-1570696529.jpeg', 'BRAGG', '01236080801', 'none', 'bragg', 1, '2020-11-25 03:09:24', '2020-11-25 03:09:24'),
(22, '4150-399591570260141-1570260141.png', 'PACIFIC', '01236080801', 'none', 'pacific', 1, '2020-11-25 03:09:49', '2020-11-25 03:09:49'),
(23, 'todoslogosminiNU5.png', 'ECOVINAL', '01236080801', 'https://ecovinal.com/', 'ecovinal', 1, '2020-11-25 03:11:01', '2020-11-25 03:11:01'),
(24, '4274-913761572052910-1572052910.png', 'BÌNH LIÊU', '01236080801', 'none', 'binh-lieu', 1, '2020-11-25 03:13:03', '2020-11-25 03:13:03'),
(25, '4295-137361572174256-1572174256.png', 'TÂN PHÁT LỢI', '01236080801', 'none', 'tan-phat-loi', 1, '2020-11-25 03:13:33', '2020-11-25 03:13:33'),
(26, '4147-494361570250487-1570250487.png', 'VINAMILK', '01236080801', 'none', 'vinamilk', 1, '2020-11-25 03:14:08', '2020-11-25 03:14:08'),
(27, '4270-106051571978733-1571978733.png', 'VEGAN FOOD', '01236080801', 'none', 'vegan-food', 1, '2020-11-25 03:27:18', '2020-11-25 03:27:18'),
(28, '4139-733711570176423-1570176423.png', 'GOBBLE', '01236080801', 'none', 'gobble', 1, '2020-11-25 03:27:48', '2020-11-25 03:27:48'),
(29, '4148-890101570254328-1570254328.jpg', 'OOB ORGANIC', '01236080801', 'none', 'oob-organic', 1, '2020-11-25 03:28:18', '2020-11-25 03:28:18'),
(30, '4168-882331570350080-1570350080.png', 'LANGBIAN FARM', '01236080801', 'none', 'langbian-farm', 1, '2020-11-25 03:28:59', '2020-11-25 03:28:59'),
(31, '4149-694171570254346-1570254346.jpg', 'Alteya Organics', '01236080801', 'none', 'alteya-organics', 1, '2020-11-25 03:29:40', '2020-11-25 03:29:40'),
(32, '4190-392281570518012-1570518012.jpg', 'NATIVE HARVEST', '01236080801', 'none', 'native-harvest', 1, '2020-11-25 03:30:30', '2020-11-25 03:30:30'),
(33, '4089-946441569568442-1569568442.png', 'Ladrome', '01236080801', 'none', 'ladrome', 1, '2020-11-25 03:30:57', '2020-11-25 03:30:57'),
(34, '4145-150631570186071-1570186071.jpg', 'BESEACO', '01236080801', 'none', 'beseaco', 1, '2020-11-25 03:31:57', '2020-11-25 03:31:57'),
(35, '4164-389021570341436-1570341436.png', 'Gamro700', '01236080801', 'none', 'gamro700', 1, '2020-11-25 03:32:22', '2020-11-25 03:32:22'),
(36, '4165-889961570345675-1570345675.png', 'L\'amant Cafe', '01236080801', 'none', 'lamant-cafe', 1, '2020-11-25 03:32:53', '2020-11-25 03:32:53'),
(37, '4199-229181570788725-1570788725.jpg', 'VINASAMEX', '01236080801', 'none', 'vinasamex', 1, '2020-11-25 03:33:20', '2020-11-25 03:33:20'),
(38, '4200-274591570792622-1570792622.png', 'Viet Pepper', '01236080801', 'none', 'viet-pepper', 1, '2020-11-25 03:33:55', '2020-11-25 03:33:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomsp`
--

CREATE TABLE `nhomsp` (
  `id_nhomsp` bigint(20) UNSIGNED NOT NULL,
  `name_nhomsp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_nhomsp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Anhien` int(11) NOT NULL DEFAULT 0,
  `slug_nhomsp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hinh_nhomsp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhomsp`
--

INSERT INTO `nhomsp` (`id_nhomsp`, `name_nhomsp`, `icon_nhomsp`, `Anhien`, `slug_nhomsp`, `created_at`, `updated_at`, `hinh_nhomsp`) VALUES
(1, 'Rau củ quả', 'caikale.png', 1, 'rau-cu-qua', '2020-10-27 07:52:46', '2020-11-15 09:50:41', 'broccoli'),
(2, 'Trái cây', 'du-du.png', 1, 'trai-cay', '2020-10-27 20:34:41', '2020-11-15 09:50:50', 'fruits'),
(3, 'Thức uống', 'sua-yen-mach-huu-co.png', 1, 'thuc-uong', '2020-10-27 20:54:30', '2020-11-15 09:51:03', 'fresh-juice'),
(4, 'Sản phẩm sữa', 'bn_special_org.jpg', 1, 'san-pham-sua', '2020-10-27 21:21:24', '2020-11-25 00:28:49', 'honey'),
(5, 'Ngũ cốc, Đậu & Hạt', 'bn_special_org.jpg', 1, 'ngu-coc-dau-hat', '2020-11-25 00:20:38', '2020-11-25 00:20:38', 'blueberry'),
(6, 'Thịt & Thủy Hải Sản', 'bn_special_org.jpg', 1, 'thit-thuy-hai-san', '2020-11-25 00:21:35', '2020-11-25 00:21:35', 'fish'),
(7, 'Gia vị & Nguyên liệu', 'bn_special_org.jpg', 1, 'gia-vi-nguyen-lieu', '2020-11-25 00:22:31', '2020-11-25 00:28:12', 'honey'),
(8, 'Sản phẩm chế biến', 'bn_special_org.jpg', 1, 'san-pham-che-bien', '2020-11-25 00:24:31', '2020-11-25 00:24:31', 'fast-food');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quangcao`
--

CREATE TABLE `quangcao` (
  `id_quangcao` bigint(20) UNSIGNED NOT NULL,
  `id_sanpham` int(11) DEFAULT NULL,
  `id_blog` int(11) DEFAULT NULL,
  `banner_quangcao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loai_quangcao` int(11) DEFAULT NULL,
  `name_quangcao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota_quangcao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Anhien` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` bigint(20) UNSIGNED NOT NULL,
  `id_nhomsp` int(10) UNSIGNED NOT NULL,
  `id_loaisp` int(10) UNSIGNED NOT NULL,
  `name_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motadai_sp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motangan_sp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_sp` int(11) NOT NULL,
  `id_donvitinh` int(11) NOT NULL,
  `sp_khuyenmai` int(11) NOT NULL,
  `time_discount` date DEFAULT NULL,
  `old_price_sp` int(11) DEFAULT NULL,
  `id_thuonghieu` int(10) UNSIGNED NOT NULL,
  `Anhien` int(11) NOT NULL DEFAULT 1,
  `slug_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sns`
--

CREATE TABLE `sns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `snsname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `snsicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `snslink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sns`
--

INSERT INTO `sns` (`id`, `snsname`, `snsicon`, `snslink`, `created_at`, `updated_at`) VALUES
(3, '', 'b8603b8b64529afb5cd3ad03d591ffdb.jpg', 'http://fb.me/ereiai', '2020-10-15 02:41:10', '2020-10-15 02:41:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtranghd`
--

CREATE TABLE `tinhtranghd` (
  `id_tinhtrang` bigint(20) UNSIGNED NOT NULL,
  `name_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota_tinhtrang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhtranghd`
--

INSERT INTO `tinhtranghd` (`id_tinhtrang`, `name_tinhtrang`, `mota_tinhtrang`, `created_at`, `updated_at`) VALUES
(1, 'Chưa xử lí', NULL, NULL, NULL),
(2, 'Đã xác nhận', NULL, NULL, NULL),
(3, 'Đang gói hàng', NULL, NULL, NULL),
(4, 'Đang vận chuyển', NULL, NULL, NULL),
(5, 'Đã thanh toán', NULL, NULL, NULL),
(6, 'Chưa thanh toán', NULL, NULL, NULL),
(7, 'Đã hủy đơn', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuyendung`
--

CREATE TABLE `tuyendung` (
  `id_tuyendung` bigint(20) UNSIGNED NOT NULL,
  `name_tuyendung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung_tuyendung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Anhien` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tuyendung`
--

INSERT INTO `tuyendung` (`id_tuyendung`, `name_tuyendung`, `noidung_tuyendung`, `Anhien`, `created_at`, `updated_at`) VALUES
(1, 'Vị Trí Nhân Viên Bảo Vệ', '<p>Tuyển dụng vị trí nhân viên bảo vệ</p>', 0, '2020-10-30 21:55:06', '2020-10-30 21:57:40'),
(2, 'Vị Trí Nhân Viên Giao Hàng', '<p>Tuyển dụng vị trí nhân viên giao hàng .</p>', 1, '2020-10-30 21:55:35', '2020-10-30 21:55:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `idgroup` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `email_verified_at`, `password`, `address`, `provider`, `provider_id`, `phone`, `active`, `idgroup`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Minh Trần', 'minh.jpg', 'minh@gmail.com', NULL, '$2y$10$TmXgz27W6oW4RZeUMw4J7.ebBzaoKjWikjZmxmetSovSIgPvWtKsK', '1261/9 Lê Đức Thọ', NULL, NULL, '0836080801', 1, 1, NULL, NULL, NULL),
(2, 'Quản Trị', 'admin.jpg', 'admin@gmail.com', NULL, '$2y$10$gMDlstmL.1w5iE6TsWWYAeYCKEPjH5k1YCJ.5FTcFFnGxS/txUnc2', '1261/9 Lê Đức Thọ', NULL, NULL, '0836080801', 1, 1, NULL, NULL, '2020-11-10 11:01:04'),
(3, 'Tester', 'kh.jpg', 'tester@gmail.com', NULL, '$2y$10$Ajv/gV4zjlRF0ySGSEL54u5uyGbB6KtQJfQBUFr5Oir0qrtXPui/.', '1261/9 Lê Đức Thọ', NULL, NULL, '0836080801', 1, 0, NULL, NULL, NULL),
(4, 'Minh Nhật', NULL, 'nmtran68@gmail.com', NULL, NULL, NULL, 'facebook', '1522222584639978', '0836080802', 1, 0, NULL, '2020-11-06 05:41:53', '2020-11-19 03:11:34'),
(5, 'Nhật Minh Trần', NULL, 'nmtran67@gmail.com', NULL, '$2y$10$5ojsDKyXQBucTdjbR.ETnemTsDAgEzQZ3dyxMlwIL1IblzSvIW6fC', '1261/9 Le Duc Tho', NULL, NULL, '0836080804', 1, 0, NULL, '2020-11-19 00:23:19', '2020-11-19 02:05:01');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_binhluan`),
  ADD KEY `binhluan_id_blog_index` (`id_blog`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD UNIQUE KEY `blog_slug_blog_unique` (`slug_blog`),
  ADD KEY `blog_id_loaiblog_index` (`id_loaiblog`);

--
-- Chỉ mục cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD PRIMARY KEY (`id_hd`);

--
-- Chỉ mục cho bảng `counpon`
--
ALTER TABLE `counpon`
  ADD PRIMARY KEY (`counpon_id`),
  ADD UNIQUE KEY `counpon_counpon_code_unique` (`counpon_code`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Chỉ mục cho bảng `donvitinh`
--
ALTER TABLE `donvitinh`
  ADD PRIMARY KEY (`id_donvitinh`);

--
-- Chỉ mục cho bảng `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id_email`),
  ADD UNIQUE KEY `email_email_unique` (`email`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `imgchitiet`
--
ALTER TABLE `imgchitiet`
  ADD PRIMARY KEY (`id_img`);

--
-- Chỉ mục cho bảng `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khohang`
--
ALTER TABLE `khohang`
  ADD PRIMARY KEY (`sku`),
  ADD UNIQUE KEY `khohang_sku_unique` (`sku`);

--
-- Chỉ mục cho bảng `loaiblog`
--
ALTER TABLE `loaiblog`
  ADD PRIMARY KEY (`id_loaiblog`),
  ADD UNIQUE KEY `loaiblog_slug_loaiblog_unique` (`slug_loaiblog`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id_loaisp`),
  ADD UNIQUE KEY `loaisp_id_loaisp_unique` (`id_loaisp`),
  ADD UNIQUE KEY `loaisp_slug_loaisp_unique` (`slug_loaisp`),
  ADD KEY `loaisp_id_nhomsp_index` (`id_nhomsp`);

--
-- Chỉ mục cho bảng `lohang`
--
ALTER TABLE `lohang`
  ADD PRIMARY KEY (`id_lohang`),
  ADD KEY `lohang_id_sanpham_index` (`id_sanpham`),
  ADD KEY `lohang_id_thuonghieu_index` (`id_thuonghieu`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id_thuonghieu`),
  ADD UNIQUE KEY `nhacungcap_slug_thuonghieu_unique` (`slug_thuonghieu`);

--
-- Chỉ mục cho bảng `nhomsp`
--
ALTER TABLE `nhomsp`
  ADD PRIMARY KEY (`id_nhomsp`),
  ADD UNIQUE KEY `nhomsp_id_nhomsp_unique` (`id_nhomsp`),
  ADD UNIQUE KEY `nhomsp_slug_nhomsp_unique` (`slug_nhomsp`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`id_quangcao`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD UNIQUE KEY `sanpham_slug_sp_unique` (`slug_sp`),
  ADD KEY `sanpham_id_nhomsp_index` (`id_nhomsp`);

--
-- Chỉ mục cho bảng `sns`
--
ALTER TABLE `sns`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tinhtranghd`
--
ALTER TABLE `tinhtranghd`
  ADD PRIMARY KEY (`id_tinhtrang`);

--
-- Chỉ mục cho bảng `tuyendung`
--
ALTER TABLE `tuyendung`
  ADD PRIMARY KEY (`id_tuyendung`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_binhluan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  MODIFY `id_hd` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `counpon`
--
ALTER TABLE `counpon`
  MODIFY `counpon_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donvitinh`
--
ALTER TABLE `donvitinh`
  MODIFY `id_donvitinh` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `email`
--
ALTER TABLE `email`
  MODIFY `id_email` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `imgchitiet`
--
ALTER TABLE `imgchitiet`
  MODIFY `id_img` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `info`
--
ALTER TABLE `info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khohang`
--
ALTER TABLE `khohang`
  MODIFY `sku` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9767343315;

--
-- AUTO_INCREMENT cho bảng `loaiblog`
--
ALTER TABLE `loaiblog`
  MODIFY `id_loaiblog` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_loaisp` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `lohang`
--
ALTER TABLE `lohang`
  MODIFY `id_lohang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=663;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id_thuonghieu` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `nhomsp`
--
ALTER TABLE `nhomsp`
  MODIFY `id_nhomsp` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `id_quangcao` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sns`
--
ALTER TABLE `sns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tinhtranghd`
--
ALTER TABLE `tinhtranghd`
  MODIFY `id_tinhtrang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tuyendung`
--
ALTER TABLE `tuyendung`
  MODIFY `id_tuyendung` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
