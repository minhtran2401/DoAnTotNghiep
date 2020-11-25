-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2020 lúc 05:47 AM
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
(1, 4, 'Mẹ bầu có nên dùng băng vệ sinh hằng ngày không?', '<p>“Có nên dùng băng vệ sinh hàng ngày không” là băn khoăn đang nhận được nhiều tranh cãi của hội chị em. Phần đông ý kiến cho rằng, BVS hằng ngày giúp vùng kín sạch, khô thoáng, không ẩm ướt và đặc biệt tiện lợi khi đi làm cả ngày, chỉ cần sử dụng đúng cách thì vẫn an toàn. Một số lại phản đối, việc sử dụng BVS hằng ngày khi mang thai không tốt. Vậy thực hư là như thế nào?<br></p>', '<div class=\"block-detail\" style=\"border-bottom: 1px solid rgb(207, 222, 186); margin-bottom: 25px; padding-bottom: 17px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><h2 class=\"block-detail-ttl\" style=\"font-family: latobold; font-weight: 500; color: inherit; margin: 13px 0px; font-size: 26px;\"><span style=\"background-color: rgb(255, 255, 255); font-family: KoHo;\">Mẹ bầu có nên dùng băng vệ sinh hằng ngày không?</span></h2><h3 class=\"block-detail-description\" style=\"font-family: latobold; font-weight: 500; line-height: 1.3; color: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 18px;\"></h3></div><div class=\"block-detail-content\" style=\"border-bottom: 1px solid rgb(207, 222, 186); margin-bottom: 10px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">“Có nên dùng băng vệ sinh hàng ngày không” là băn khoăn đang nhận được nhiều tranh cãi của hội chị em. Phần đông ý kiến cho rằng, BVS hằng ngày giúp vùng kín sạch, khô thoáng, không ẩm ướt và đặc biệt tiện lợi khi đi làm cả ngày, chỉ cần sử dụng đúng cách thì vẫn an toàn. Một số lại phản đối, việc sử dụng BVS hằng ngày khi mang thai không tốt. Vậy thực hư là như thế nào?</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">I/ Có nên dùng băng vệ sinh hàng ngày khi mang thai không?</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255);\"><span style=\"font-family: KoHo;\">Có.&nbsp;</span><a href=\"https://www.organica.vn/cham-soc-co-the/bvs-hang-ngay-natracare-16pcs\" style=\"color: rgb(51, 51, 51); outline: none !important;\"><span style=\"color: rgb(0, 0, 255);\"><span style=\"font-weight: 700; font-family: KoHo;\"><em>Băng vệ sinh hằng ngày</em></span></span></a><span style=\"font-family: KoHo;\">&nbsp;sẽ là giải pháp “cứu nguy” để vùng kín mẹ bầu không rơi vào tình trạng ẩm ướt khi khí hư ra nhiều (môi trường lý tưởng để vi khuẩn sinh sôi, phát triển gây viêm nhiễm âm đạo), không còn mùi hôi khó chịu, không ngứa ngáy và đặc biệt là tiện lợi khi đi làm cả ngày mà vùng kín vẫn khô thoáng và sạch sẽ.</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: center;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/May/5/5555-643731588643869-1588643869.jpg\" alt=\"\" width=\"700\" height=\"500\" style=\"border: 0px; max-width: 100%;\"></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Tuy nhiên, để đảm bảo an toàn cho vùng kín thì mẹ cần biết lựa chọn và sử dụng băng vệ sinh hằng ngày đúng cách. Cụ thể, mẹ cần nắm được các nguyên tắc cơ bản sau.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Chọn BVS hữu cơ thay vì băng vệ sinh thường</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Bạn có biết, hóa chất từ những sản phẩm tiếp xúc với bề mặt da có thể thẩm thấu qua các mạch máu đi vào cơ thể? Đó là lý do thay vì khẳng định chung chung rằng mẹ bầu nên tìm mua các dòng BVS chất lượng thì chúng tôi khuyến khích chị em nên lựa chọn BVS hữu cơ - dòng BVS có chứng nhận an toàn rõ ràng và đáng tin cậy nhất hiện nay.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Cụ thể BVS hữu cơ giúp mẹ an tâm về mức độ an toàn khi không có sự can thiệp của hóa chất, nhựa, chất tạo mùi, hương liệu, thuốc tẩy… Bên cạnh đó, vì được làm từ 100% bông hữu cơ, khả năng thấm hút tốt nên khi sử dụng BVS hữu cơ vùng kín chị em sẽ luôn thông thoáng, cảm giác mềm mại, vô cùng dễ chịu cho “cô bé”.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Thay BVS 4 tiếng/lần</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">BVS hàng ngày được thiết kế nhỏ gọn với khả năng thấm hút không quá cao như BVS ban ngày hay ban đêm. Thế nhưng, điều này không có nghĩa bạn có thể sử dụng chúng cả ngày mà không thay; bởi dẫu BVS có chất lượng thì môi trường ẩm ướt tồn tại lâu thì vi khuẩn hoàn toàn có thể tự sản sinh. Thế nên, đừng quên nguyên tắc tuyệt đối quan trọng khi sử dụng BVS đó là thay 4 tiếng/lần dù lượng khí hư tiết ra ít.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Không lạm dụng BVS hằng ngày</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">BVS hằng ngày đúng là “cứu tinh” cho nhiều chị em trong rất nhiều trường hợp, nhất là khi khí hư ra nhiều trong thời gian mang thai. Tuy nhiên, hãy chỉ sử dụng chúng khi thấy cần thiết, không nên lạm dụng.&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">II/ 5 lưu ý quan trọng mẹ cần biết để giữ vùng kín khỏe mạnh.</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Ngoài việc học cách lựa chọn và sử dụng BVS hằng ngày thì mẹ bầu cũng cần nắm những lưu ý tối quan trọng để giữ gìn vùng kín khỏe mạnh trong thời gian mang thai.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: center;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/May/5/5554-469741588643868-1588643869.jpg\" alt=\"\" width=\"700\" height=\"500\" style=\"border: 0px; max-width: 100%;\"></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Lựa chọn quần lót bằng cotton, rộng rãi</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Hãy ưu tiên các loại quần lót bằng chất liệu cotton, rộng rãi, thoải mái, tránh sử dụng quần áo bó sát, chất chội không tốt cho vùng kín.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Vệ sinh vùng kín sạch sẽ hằng ngày</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">BVS không thể thay thế bạn vệ sinh vùng kín, thế nên mẹ đừng quên vệ sinh vùng kín bằng nước ấm mỗi tối trước khi đi ngủ, sau khi quan hệ và sau khi ngủ dậy nhé. Hạn chế sử dụng các dung dịch vệ sinh có chứa xà phòng.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Tránh thụt rửa khi vệ sinh âm đạo</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Việc thụt rửa sẽ làm xáo trộn cân bằng tự nhiên của vi khuẩn trong âm đạo, làm tăng nguy cơ nhiễm trùng, viêm âm đạo.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Không tắm bồn</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Việc tắm bồn có thể giúp mẹ dễ chịu hơn. Tuy nhiên, đối với phụ nữ mang thai, tắm bồn làm tăng nguy cơ gây kích ứng, ngứa vùng kín.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Gặp bác sĩ khi vùng kín có dấu hiệu bất thường</span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Mặc dù ra khí hư nhiều khi mang thai là điều bình thường. Tuy nhiên nếu khí hư có mùi hôi khó chịu, màu vàng, xanh, nâu… thì mẹ cần đến gặp bác sĩ ngay để được chẩn đoán và điều trị nếu có vấn đề.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Kết luận: Khi mang thai, khi hư ra nhiều mẹ bầu hoàn toàn có thể sử dụng băng vệ sinh hằng ngày để vùng kín luôn khô thoáng và sạch sẽ. Tuy nhiên, mẹ cần lựa chọn dòng BVS an toàn và sử dụng đúng cách cũng như kết hợp các biện pháp vệ sinh vùng kín khoa học.&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255);\"><span style=\"font-family: KoHo;\">Hy vọng với những chia sẻ trên đã phần nào giúp các mẹ bầu có đáp án cho băn khoăn “Có nên dùng băng vệ sinh hằng ngày khi mang thai không? Nếu có nhu cầu tìm mua BVS hữu cơ, mẹ bầu có thể tìm đến các cửa hàng hữu cơ của Organica, đặt hàng qua website, fanpage hoặc gọi ngay vào Hotline&nbsp;</span><span style=\"font-weight: 700; font-family: KoHo;\">0901 828 689</span><span style=\"font-family: KoHo;\">&nbsp;để được tư vấn và hỗ trợ chi tiết nhất.</span></span></p></div>', '2020-11-15', '5', 2, '5557-180151588643884-1588643884.jpg', 'me-bau-co-nen-dung-bang-ve-sinh-hang-ngay-khong', 1, 0, 'dinh dưỡng cho mẹ bầu, bé ăn dặm, cùng con khôn lớn, 6 tháng đầu tiên', '2020-10-30 10:55:50', '2020-11-15 07:00:08'),
(2, 4, 'Mẹ bầu ăn gì để tăng cường sức đề kháng mùa dịch bệnh?', '<p>Mang thai, hệ miễn dịch của người mẹ bị suy giảm trầm trọng, cơ thể dễ bị tấn công bởi virus, tiềm ẩn các căn bệnh nguy hiểm, đặc biệt là trước tình hình dịch bệnh diễn biến phức tạp như hiện nay. Vậy nên, bên cạnh các biện pháp bảo vệ từ bên ngoài, mẹ cần chủ động xây dựng cho mình chế độ dinh dưỡng hợp lý nhằm tăng cường sức đề kháng, giảm nguy cơ mắc bệnh.<br></p>', '<div class=\"block-detail\" style=\"border-bottom: 1px solid rgb(207, 222, 186); margin-bottom: 25px; padding-bottom: 17px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><h2 class=\"block-detail-ttl\" style=\"font-family: latobold; font-weight: 500; color: inherit; margin: 13px 0px; font-size: 26px;\"><span style=\"background-color: rgb(255, 255, 255); font-family: KoHo;\">Mẹ bầu ăn gì để tăng cường sức đề kháng mùa dịch bệnh?</span></h2><h3 class=\"block-detail-description\" style=\"font-family: latobold; font-weight: 500; line-height: 1.3; color: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 18px;\"><span style=\"background-color: rgb(255, 255, 255); font-family: KoHo;\">Mang thai, hệ miễn dịch của người mẹ bị suy giảm trầm trọng, cơ thể dễ bị tấn công bởi virus, tiềm ẩn các căn bệnh nguy hiểm, đặc biệt là trước tình hình dịch bệnh diễn biến phức tạp như hiện nay. Vậy nên, bên cạnh các biện pháp bảo vệ từ bên ngoài, mẹ cần chủ động xây dựng cho mình chế độ dinh dưỡng hợp lý nhằm tăng cường sức đề kháng, giảm nguy cơ mắc bệnh.</span></h3></div><div class=\"block-detail-content\" style=\"border-bottom: 1px solid rgb(207, 222, 186); margin-bottom: 10px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Dưới đây là những thực phẩm có tác dụng tăng cường sức đề kháng mẹ nên bổ sung vào thực đơn ăn uống hằng ngày của mình.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/April/3/5359-296021585889564-1585889564.jpg\" alt=\"\" width=\"700\" height=\"500\" style=\"border: 0px; max-width: 100%;\"></span></span></p><h2 style=\"font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">1/ Thực phẩm giàu protein</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Protein là dưỡng chất thiết yếu cung cấp năng lượng cho cơ thể, khi mang thai nhu cầu năng lượng của mẹ bầu càng tăng cao vì phải cung cấp các dưỡng chất cho sự phát triển của thai nhi. Bên cạnh đó, protein cũng đóng vai trò tạo ra các kháng thể cho cơ thể, tăng cường sức đề kháng. Vậy nên, chế độ dinh dưỡng trong mùa dịch mẹ đừng quên bổ sung các nhóm thực phẩm giàu protein.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Các nguồn thực phẩm cung cấp hàm lượng protein dồi dào mẹ bầu nên bổ sung gồm:</span></p><ul style=\"margin-bottom: 10px; text-align: justify;\"><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Đậu (đen, đỏ, xanh, đậu lăng… cung cấp 40g protein/100g)</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Quả bơ (40g protein/100g)</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Thịt bò nạc (36g protein/100g)</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Bí ngô, hạt bí (33g protein/100g)</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Thịt gà/lợn nạc (30g protein/100g)</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Hạt hướng dương (20g protein/100g)</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Tảo xanh, tảo xoắn, đậu phộng, tôm, cua</span></li></ul><h2 style=\"font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">2/ Thực phẩm giàu vitamin C</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Vitamin C là chất chống oxy hóa cao, có tác dụng tăng cường sức đề kháng hiệu quả, chẳng những thế vitamin C còn giúp mẹ bầu sở hữu một làn da sáng, mềm mịn, giảm thâm nám. Thế nên, thực đơn hằng ngày mẹ đừng quên bổ sung vitamin C, nhất là trong thời điểm dịch bệnh diễn biến phức tạp như hiện nay.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/April/3/5360-573271585889565-1585889565.jpg\" alt=\"\" width=\"700\" height=\"500\" style=\"border: 0px; max-width: 100%;\"></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Những thực phẩm giàu vitamin C mẹ bầu cần cho vào danh sách dinh dưỡng gồm:</span></p><ul style=\"margin-bottom: 10px; text-align: justify;\"><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Trái cây: cam, quýt, bưởi, chanh, dâu tây, táo, đào, mơ, hồng…</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau củ quả: Cà chua, ớt chuông, củ cải đường, khoai tây bắp cải, rau bina</span></li></ul><h2 style=\"font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">3/ Thực phẩm giàu vitamin D</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Vitamin D giúp tăng cường khả năng chống vi sinh gây bệnh của tế bào miễn dịch, tăng cường phản ứng miễn dịch. Rất nhiều nghiên cứu cho thấy vitamin giúp giảm nguy cơ viêm phổi, lo âu… Vậy nên, mẹ bầu đừng quên bổ sung nguồn cung cấp vitamin D, đặc biệt là qua thực phẩm như:</span></p><ul style=\"margin-bottom: 10px; text-align: justify;\"><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Cá hồi, cá trích, cá mòi, cá tuyết, cá ngừ</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Dầu gan cá tuyết</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Hàu, tôm</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Lòng đỏ trứng</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Nấm</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Nước cam</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Sữa đậu nành, sữa bò</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Ngũ cốc, yến mạch</span></li></ul><h2 style=\"font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">4/ Tỏi đen</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Tỏi đen rất tốt cho phụ nữ mang thai. Chúng có tác dụng điều chỉnh hệ tiêu hóa, cải thiện giấc ngủ. Đặc biệt là tăng cường khả năng miễn dịch và giảm nguy cơ tăng huyết áp (tình trạng thường xảy ra ở phụ nữ mang thai). Ngoài ra, mẹ cũng yên tâm khi sử dụng vì sau quá trình lên men, tỏi không còn mùi hăng khó chịu. Mỗi ngày mẹ có thể dùng từ 1-2 củ tỏi đen để tăng cường sức đề kháng.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255);\"><span style=\"font-family: KoHo;\">Tham khảo&nbsp;</span><span style=\"font-weight: 700; font-family: KoHo;\"><a href=\"https://www.organica.vn/san-pham-che-bien/toi-den-huu-co-han-quoc-nhs-100g\" style=\"color: rgb(51, 51, 51); outline: none !important;\">tỏi đen hữu cơ</a></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/April/3/5361-977091585889565-1585889565.jpg\" alt=\"\" width=\"700\" height=\"500\" style=\"border: 0px; max-width: 100%;\"></span></span></p><h2 style=\"font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">5/ Thực phẩm giàu sắt</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Sắt đóng vai trò vô cùng quan trọng trong chế độ dinh dưỡng của phụ nữ mang thai, không chỉ giúp ngăn ngừa tình trạng thiếu máu khi mang thai mà sắt còn hỗ trợ tăng cường sức đề kháng cho cơ thể hiệu quả. Ngoài sử dụng viên uống sắt, mẹ đừng quên bổ sung các thực phẩm giàu sắt sau vào thực đơn hằng ngày của mình, nhất là trong mùa dịch bệnh:</span></p><ul style=\"margin-bottom: 10px; text-align: justify;\"><li><span style=\"font-weight: 700;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\"><a href=\"https://www.organica.vn/product?keyword=h%E1%BA%A1t+%C4%91i%E1%BB%81u\" style=\"color: rgb(51, 51, 51); outline: none !important;\">Hạt điều</a></span></span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Đậu nành</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau bina</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Củ cải đỏ</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Dưa hấu</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Lựu&nbsp;</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Ức gà</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Táo</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Cá thu, cá hồi</span></li><li><span style=\"font-weight: 700;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\"><a href=\"https://www.organica.vn/ngu-coc-dau-va-hat/hat-bi-tach-vo-huu-co\" style=\"color: rgb(51, 51, 51); outline: none !important;\">Hạt bí</a></span></span></li></ul><h2 style=\"font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">6/ Thực phẩm giàu kẽm</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Kẽm đóng vai trò đặc biệt quan trọng đối với hệ miễn dịch của cơ thể, chúng giúp tăng chức năng của các tế bào bạch cầu, từ đó nhận diện và tiêu diệt các tế bào lạ xâm nhập vào cơ thể. Kẽm cũng cực kỳ quan trọng với bà bầu, chúng giúp mẹ không bị mệt mỏi, giảm nguy cơ mắc các bệnh cảm, cúm. Một số thực phẩm giàu kẽm mẹ bầu cần chú ý bổ sung như:</span></p><ul style=\"margin-bottom: 10px; text-align: justify;\"><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Hàu, sò</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Thịt đỏ</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau muống</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Củ cải</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Đậu, đỗ</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Lòng đỏ trứng gà</span></li></ul><h2 style=\"font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">7/ Thực phẩm chứa nhiều lợi khuẩn</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Bổ sung lợi khuẩn là cách hiệu quả để tăng cường hệ miễn dịch khi mang thai, nhất là trong thời điểm tình hình dịch bệnh diễn biến phức tạp như hiện nay. Các thực phẩm chứa nhiều lợi khuẩn có thể kể đến như sữa chua, sữa yến mạch, bột yến mạch...</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Ngoài việc bổ sung các dưỡng chất có vai trò tăng đề kháng, xây dựng chế độ dinh dưỡng khoa học thì mẹ bầu cũng cần chú ý duy trì cho mình thói quen sinh hoạt lành mạnh như uống nhiều nước, vận động nhẹ nhàng mỗi ngày, ngủ đúng giờ đủ giấc. Đặc biệt là duy trì cho bản thân một tâm thế thoải mái nhất, không nên quá lo lắng, chỉ cần chú ý các biện pháp bảo vệ bản thân, hạn chế ra ngoài thì nguy cơ nhiễm bệnh gần như không có.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: justify;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Hy vọng với những chia sẻ trên đã phần nào mang đến những kiến thức dinh dưỡng hữu ích cho các mẹ bầu. Dịch bệnh vẫn đang diễn biến phức tạp và chưa có dấu hiệu hạ nhiệt. Chính vì vậy, qua đây Organica cũng muốn nhắn gửi đến tất cả mọi người hãy cố gắng duy trì các biện pháp bảo vệ bản thân, xây dựng chế độ dinh dưỡng hợp lý để cùng nhau vượt qua đại dịch này nhé.&nbsp;</span></p></div>', '2020-11-15', '12', 2, '5362-936811585889681-1585889681.jpg', 'me-bau-an-gi-de-tang-cuong-suc-de-khang-mua-dich-benh', 1, 1, 'mẹ bầu, bé ăn dặm', '2020-10-30 10:57:23', '2020-11-15 07:03:16'),
(3, 3, '7 cách để giữ rau, củ, quả hữu cơ tươi ngon lâu hơn', '<p>Rau củ quả hữu cơ được chị em nội trợ tin dùng vì yếu tố an toàn cao, đảm bảo cho sức khỏe cả gia đình, chưa kể hương vị tự nhiên để những bữa cơm thêm thơm ngon, hấp dẫn. Tuy nhiên, vì không can thiệp hóa chất, chất bảo quản nên rau củ quả hữu cơ thường có “hạn sử dụng” ngắn hơn rau củ quả thường.<br></p>', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau củ quả hữu cơ được chị em nội trợ tin dùng vì yếu tố an toàn cao, đảm bảo cho sức khỏe cả gia đình, chưa kể hương vị tự nhiên để những bữa cơm thêm thơm ngon, hấp dẫn. Tuy nhiên, vì không can thiệp hóa chất, chất bảo quản nên rau củ quả hữu cơ thường có “hạn sử dụng” ngắn hơn rau củ quả thường.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/October/19/6840-455681603092741-1603092741.jpg\" alt=\"\" width=\"700\" height=\"500\" style=\"border: 0px; max-width: 100%;\"></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Để thưởng thức rau củ quả tươi ngon, Organica luôn khuyến khích chị em nên mua rau củ quả vừa đủ dùng cho 2-3 ngày, không nên mua nhiều. Tuy nhiên, trường hợp nếu chị em đã lỡ mua và muốn rau củ quả vẫn tươi ngon thì có thể tham khảo một vài mẹo khoa học sau.</span></p><h2 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">I/ Rau củ quả hữu cơ “hạn sử dụng” ngắn. Làm sao để giữ độ tươi ngon nhất?</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Một số khách hàng thường thắc mắc rằng “sao chị thấy rau củ quả trên kệ nhà Organica luôn tươi ngon?, chẳng khi nào thấy rau héo úa, vàng”.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/October/19/6841-730441603092745-1603092745.jpg\" alt=\"\" width=\"700\" height=\"500\" style=\"border: 0px; max-width: 100%;\"></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Thực ra, nhà Organica chẳng sử dụng “chiêu trò” gì đâu. Để rau củ quả đến tay người tiêu dùng luôn tươi ngon, đó là cả một hành trình nỗ lực của nhà O trong các khâu mà ít người biết được. Cụ thể như sau.</span></p><ul style=\"margin-bottom: 10px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau củ quả nhà Organica khi đến vụ thu hoạch sẽ được cắt, hái vào buổi chiều mát. Điều này giúp rau củ quả giữ được độ tươi nhất.</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Sau đó, rau củ quả được chọn lọc, loại bỏ những sản phẩm bầm dập, lá vàng, trái sâu… để đóng gói.&nbsp;</span></li><li><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau củ quả được vận chuyển nhanh chóng đến các cửa hàng để sáng đã có sẵn trên kệ phục vụ người mua.</span></li></ul><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Đặc biệt, Organica không thu hoạch ồ ạt rau củ quả, lượng rau củ quả thu về thường phục vụ hết trong 2-3 ngày, không có rau tồn dư nên rau củ quả mới luôn cập nhật trên kệ. Đó là lý do, rau củ quả trên kệ nhà Organica không chỉ cam kết an toàn chuẩn hữu cơ mà còn luôn tươi ngon nhất để phục vụ bữa cơm của anh/chị khách hàng ngon, giàu dinh dưỡng nhất.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><em><span style=\"font-size: 16px; background-color: rgb(255, 255, 255);\"><span style=\"font-family: KoHo;\">&gt;&gt;&gt; Tham khảo:&nbsp;</span><span style=\"font-weight: 700;\"><span style=\"color: rgb(153, 204, 0); font-family: KoHo;\"><a href=\"https://www.organica.vn/news/3/chung-nhan-huu-co-usda-co-y-nghia-gi\" style=\"color: rgb(153, 204, 0); outline: none !important;\">Chứng nhận hữu cơ USDA có ý nghĩa gì?</a></span></span></span></em></p><h2 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">II/ Hướng dẫn bảo quản rau củ quả hữu cơ tươi ngon</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Để thưởng thức rau củ quả tươi ngon, Organica luôn khuyến khích chị em nên mua rau củ quả vừa đủ dùng cho 2-3 ngày, không nên mua nhiều. Tuy nhiên, trường hợp nếu chị em đã lỡ mua và muốn rau củ quả vẫn tươi ngon thì có thể tham khảo một vài mẹo khoa học sau.</span></p><h2 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 30px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Gói rau củ quả sinh khí Ethylene/nhạy cảm khí Ethylene trong túi giấy</span></span></h2><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Ethylene là một loại hormone thực vật được tạo ra trong quá trình phát triển của cây trồng, đặc biệt ở giai đoạn chín. Đặc biệt, một số loại trái cây và rau quả sau khi thu hoạch sẽ tiếp tục sản sinh ra khí ethylene - khí này sẽ thúc đẩy củ quả nhanh chín, tăng quá trình vàng lá ở rau.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/October/19/6838-853641603092740-1603092740.jpg\" alt=\"\" width=\"700\" height=\"466\" style=\"border: 0px; max-width: 100%;\"></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Do đó, khi bảo quản nên tránh để chung các loại rau củ quả sinh khí ethylene với các loại rau củ quả nhạy cảm với khí ethylene. Để rau củ quả không nhanh chín, vàng úa thì bạn gói rau củ quả sinh khí Ethylene hoặc rau củ quả nhạy cảm với khí Ethylene vào túi giấy riêng.</span></p><table style=\"border-spacing: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif; width: 686.6px;\"><tbody><tr><td style=\"padding: 0px; width: 310px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau củ quả sinh khí Ethylene</span></span></p></td><td style=\"padding: 0px; width: 362.6px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau củ quả nhạy cảm với khí Ethylene</span></span></p></td></tr><tr><td style=\"padding: 0px; width: 310px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Táo</span></p></td><td style=\"padding: 0px; width: 362.6px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Trái xoài</span></p></td></tr><tr><td style=\"padding: 0px; width: 310px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Dưa lưới</span></p></td><td style=\"padding: 0px; width: 362.6px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Măng tây</span></p></td></tr><tr><td style=\"padding: 0px; width: 310px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Trái bơ</span></p></td><td style=\"padding: 0px; width: 362.6px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Trái đào</span></p></td></tr><tr><td style=\"padding: 0px; width: 310px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Lê</span></p></td><td style=\"padding: 0px; width: 362.6px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Hành củ</span></p></td></tr><tr><td style=\"padding: 0px; width: 310px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Cà chua</span></p></td><td style=\"padding: 0px; width: 362.6px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Cà tím</span></p></td></tr><tr><td style=\"padding: 0px; width: 310px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Tiêu</span></p></td><td style=\"padding: 0px; width: 362.6px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Nho</span></p></td></tr><tr><td style=\"padding: 0px; width: 310px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Chuối chín</span></p></td><td style=\"padding: 0px; width: 362.6px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Dưa chuột/dưa leo</span></p></td></tr></tbody></table><h3 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Rau bina, xà lách Romaine, rau diếp.. Nên rửa trước khi cho vào tủ lạnh</span></span></h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/October/19/6837-884571603092740-1603092740.jpg\" alt=\"\" width=\"700\" height=\"466\" style=\"border: 0px; max-width: 100%;\"></span></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Không phải rau nào sau khi mua về chị em cũng nên rửa sạch rồi cho vào tủ lạnh. Nhưng với xà lách Romaine, rau diếp, rau bina thì chị em nên nhặt sạch, bỏ lá vàng, sau đó rửa để ráo sau đó cho vào tủ lạnh bảo quản (túi nhựa hoặc hộp đựng). Cách này giúp rau tươi ngon và giữ chất dinh dưỡng tốt.</span></p><h3 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Cắt cuống cà rốt đi</span></span></h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Khi mua cà rốt về nếu còn cuống xanh, chị em nên cắt bỏ đi trước khi bảo quản vì cuống sẽ hút chất dinh dưỡng có trong cà rốt. Có thể bảo quản cà rốt bên ngoài, nếu đã sơ chế thì nên bảo quản trong túi/hộp đậy kín ở ngăn mát tủ lạnh sẽ giữ được vài tuần.</span></p><h3 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Bảo quản chuối trong tủ lạnh đúng cách</span></span></h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Để giữ chuối được lâu (1 tuần), bạn nên tránh để chuối gần ánh nắng trực tiếp của mặt trời hoặc nơi có nhiều độ ẩm. Nếu bảo quản trong tủ lạnh thì tốt nhất cho vào túi zip, hút chân không rồi cho vào ngăn mát. Nếu không thì dùng màng thực phẩm bọc kín hoặc dùng túi giấy bọc kín, nên tách thành từng quả thay vì để cả nải chuối.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Lưu ý, nên ưu tiên mua chuối vừa chín, còn cứng, tránh mua chuối quá mềm. Đặc biệt chuối sau lấy ra từ tủ lạnh bạn nên ăn ngày, tránh để lâu, chuối sẽ bị thâm đen, không còn ngon.</span></p><h3 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Bọc giấy bạc cho cần tây</span></span></h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/October/19/6839-120191603092740-1603092740.jpg\" alt=\"\" width=\"700\" height=\"466\" style=\"border: 0px; max-width: 100%;\"></span></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Cần tây chứa nhiều nước, khá nhạy cảm với ethylene. Để giữ cần tây lâu trong tủ mà không bị mềm thì chị em nên bọc bằng giấy bạc rồi để trong ngăn kéo tủ lạnh, cách này sẽ giúp cần tây giữ được trong vài tuần.</span></p><h3 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Cho chanh vào túi</span></span></h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/October/19/6835-906591603092740-1603092740.jpg\" alt=\"\" width=\"700\" height=\"466\" style=\"border: 0px; max-width: 100%;\"></span></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Muốn chanh vàng để được lâu tối đa 1 tháng, chị em nên để chanh vào túi nhựa, hút hết không khí rồi cho vào tủ lạnh. Nếu không bọc chanh, chanh sẽ dễ bị khô, nhanh hỏng.</span></p><h3 style=\"font-family: latoregular, Helvetica, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px;\"><span style=\"font-size: 19px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255); font-family: KoHo;\">Nấm cần được thông gió</span></span></h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"font-size: 16px; background-color: rgb(255, 255, 255); font-family: KoHo;\">Đặc điểm của nấm là thích được giữ mát và thông gió tốt. Do đó, sau khi mua về, bạn đừng rửa hãy dùng khăn mềm lau nhẹ để loại bỏ bụi bẩn, đất cát nếu có sau đó xếp nấm vào giấy báo, gói lại để nơi khô ráo là được, chú ý nên gói gọn nhưng để hở ở trên. Nếu muốn bảo quản nấm trong 1 tháng thì cần làm sạch phần chân, gọt vỏ, cắt nhỏ rồi cho vào túi, hút hết không khí, kéo khóa và cho vào tủ đông.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 16px;\"><span class=\"tceditor-image\" style=\"background-color: rgb(255, 255, 255);\"><img src=\"https://tpnk2hhcxd.vcdn.com.vn/uploads/filecloud/2020/October/19/6836-743091603092740-1603092740.jpg\" alt=\"\" width=\"700\" height=\"466\" style=\"border: 0px; max-width: 100%;\"></span></span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, Helvetica, sans-serif;\"><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"font-size: 16px; font-family: KoHo;\">Mỗi loại rau củ quả sẽ có những đặc điểm riêng, chỉ khi hiểu tính chất của chúng, bạn mới bảo quản đúng cách. Song nếu được, Organica luôn khuyến khích người mua nên mua số lượng vừa đủ để thưởng thức hương vị rau củ quả tươi ngon nhất.</span><br><span style=\"font-size: 16px;\"><span style=\"font-family: KoHo;\">Khi mua thực phẩm tại cửa hàng, Organica luôn tư vấn cách sử dụng và bảo quản để đảm bảo dinh dưỡng và độ tươi ngon cao nhất.Hoặc nếu có thắc mắc, anh/chị đừng quên Hotline nhà Organica&nbsp;</span><span style=\"font-weight: 700; font-family: KoHo;\">0901 828 689&nbsp;</span><span style=\"font-family: KoHo;\">luôn túc trực để phục vụ.</span></span><span style=\"font-family: KoHo;\">﻿</span></span></p>', '2020-11-15', '5', 2, '6832-274221603092271-1603092271.jpg', '7-cach-de-giu-rau-cu-qua-huu-co-tuoi-ngon-lau-hon', 1, 1, 'rau củ quả, bảo quản rau củ quả', '2020-10-30 20:31:34', '2020-11-15 06:47:17');

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

--
-- Đang đổ dữ liệu cho bảng `chitiethd`
--

INSERT INTO `chitiethd` (`id_hd`, `id_sanpham`, `id_donhang`, `chitietdonhang_soluong`, `chitietdonhang_tongtien`, `created_at`, `updated_at`) VALUES
(111, 5, 86, '1', '69000', '2020-11-10 09:45:27', '2020-11-10 09:45:27'),
(112, 5, 87, '1', '69000', '2020-11-11 12:15:46', '2020-11-11 12:15:46'),
(113, 7, 87, '2', '210000', '2020-11-11 12:15:46', '2020-11-11 12:15:46'),
(114, 9, 87, '1', '240000', '2020-11-11 12:15:46', '2020-11-11 12:15:46'),
(115, 5, 88, '1', '69000', '2020-11-11 12:19:20', '2020-11-11 12:19:20'),
(116, 7, 88, '1', '105000', '2020-11-11 12:19:20', '2020-11-11 12:19:20'),
(117, 9, 88, '1', '240000', '2020-11-11 12:19:20', '2020-11-11 12:19:20'),
(118, 5, 89, '1', '69000', '2020-11-11 12:21:01', '2020-11-11 12:21:01'),
(123, 6, 96, '1', '95000', '2020-11-12 03:53:27', '2020-11-12 03:53:27'),
(124, 9, 96, '1', '240000', '2020-11-12 03:53:27', '2020-11-12 03:53:27'),
(125, 34, 118, '1', '55000', '2020-11-15 06:31:03', '2020-11-15 06:31:03'),
(126, 32, 118, '1', '36000', '2020-11-15 06:31:03', '2020-11-15 06:31:03');

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
  `ghichu_donhang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tongtien_donhang` int(11) NOT NULL,
  `id` int(10) UNSIGNED DEFAULT NULL,
  `id_tinhtrang` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `name_nguoinhan`, `email_nguoinhan`, `sdt_nguoinhan`, `ghichu_donhang`, `tongtien_donhang`, `id`, `id_tinhtrang`, `created_at`, `updated_at`, `diachi`) VALUES
(86, 'Minh Nhật', 'admin@gmail.com', '0836080801', NULL, 69000, 2, 6, '2020-11-10 09:45:27', '2020-11-13 07:36:59', '1261 LE Duc Tho'),
(87, 'Minh Nhật', 'admin@gmail.com', '0836080801', NULL, 519000, 2, 7, '2020-11-11 12:15:46', '2020-11-13 07:37:15', '1261 LE Duc Tho'),
(88, 'Minh Nhật', 'admin@gmail.com', '0836080801', 'd', 414000, 2, 2, '2020-11-11 12:19:20', '2020-11-12 00:05:40', '1261 LE Duc Tho'),
(89, 'Minh Nhật', 'admin@gmail.com', '0836080801', 'sad', 69000, 2, 2, '2020-11-11 12:21:01', '2020-11-12 00:01:21', '1261 LE Duc Tho'),
(96, 'Minh Nhật', 'admin@gmail.com', '0836080801', 'asd', 335000, 2, 5, '2020-11-12 03:53:27', '2020-11-13 00:22:04', '1261 LE Duc Tho'),
(97, 'Tiến Võ', 'tienvo@gmail.com', '0836080801', 'sd', 425000, 3, 3, '2020-11-09 11:08:10', '2020-11-13 07:30:11', 'd'),
(98, 'Tiến Võ', 'tienvo@gmail.com', '0836080801', 'sd', 425000, 3, 4, '2020-11-08 11:08:10', '2020-11-13 07:32:30', 'd'),
(99, 'assad', 'asd', '15616', 'asd', 352000, 4, 1, '2020-11-07 11:51:44', '2020-11-07 11:51:44', 'dsa'),
(100, 'assad', 'asd', '15616', 'asd', 352000, 4, 1, '2020-11-13 11:51:44', '2020-11-13 11:51:44', 'dsa'),
(101, 'adassd', 'asdd', 'sadds', 'sad', 512000, 4, 1, '2020-11-14 11:54:00', '2020-11-14 11:54:00', 'asd'),
(102, 'Dung Dung', 'dung@gmail.com', '15415484151', 'asds', 268700, 4, 1, '2020-11-06 06:36:57', '2020-11-06 06:36:57', 'as'),
(103, 'Dung Dung', 'dung@gmail.com', '15415484151', 'asds', 268700, 4, 1, '2020-11-05 06:36:57', '2020-11-05 06:36:57', 'as'),
(104, 'sad', 'asd', 'sad', 'sa', 658471, 4, 1, '2020-11-04 06:39:48', '2020-11-04 06:39:48', 'asd'),
(105, 'sad', 'asd', 'sad', 'sa', 689745, 4, 1, '2020-11-03 06:39:48', '2020-11-03 06:39:48', 'asd'),
(106, 'sad', 'asd', 'sad', 'sa', 879415, 4, 1, '2020-11-02 06:39:48', '2020-11-02 06:39:48', 'asd'),
(107, 'sad', 'asd', 'sad', 'sa', 123456, 4, 1, '2020-11-01 06:39:48', '2020-11-01 06:39:48', 'asd'),
(108, 'sad', 'asd', 'sad', 'sa', 654321, 4, 1, '2020-10-31 06:39:48', '2020-10-31 06:39:48', 'asd'),
(109, 'sad', 'asd', 'sad', 'sa', 879548, 4, 1, '2020-10-30 06:39:48', '2020-10-30 06:39:48', 'asd'),
(110, 'sad', 'asd', 'sad', 'sa', 135847, 4, 1, '2020-10-29 06:39:48', '2020-10-29 06:39:48', 'asd'),
(111, 'sad', 'asd', 'sad', 'sa', 345879, 4, 1, '2020-10-28 06:39:48', '2020-10-28 06:39:48', 'asd'),
(112, 'sad', 'asd', 'sad', 'sa', 987451, 4, 1, '2020-10-27 06:39:48', '2020-10-27 06:39:48', 'asd'),
(113, 'sad', 'asd', 'sad', 'sa', 584751, 4, 1, '2020-10-26 06:39:48', '2020-10-26 06:39:48', 'asd'),
(114, 'sad', 'asd', 'sad', 'sa', 258481, 4, 1, '2020-10-25 06:39:48', '2020-10-25 06:39:48', 'asd'),
(115, 'sad', 'asd', 'sad', 'sa', 326871, 4, 1, '2020-10-24 06:39:48', '2020-10-24 06:39:48', 'asd'),
(116, 'sad', 'asd', 'sad', 'sa', 587154, 4, 1, '2020-10-23 06:39:48', '2020-10-23 06:39:48', 'asd'),
(117, 'sad', 'asd', 'sad', 'sa', 847158, 4, 1, '2020-10-22 06:39:48', '2020-10-22 06:39:48', 'asd'),
(118, 'Minh Nhật', 'admin@gmail.com', '0836080801', 'sad', 91000, 2, 1, '2020-11-15 06:31:03', '2020-11-15 06:31:03', 'asd');

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
(1, 1, 'Rau ăn lá', 'dotbido.png', 1, 'rau-an-la', NULL, '2020-10-27 07:53:56', '2020-10-27 07:53:56'),
(2, 1, 'Rau ăn củ', 'cuden.jpg', 1, 'rau-an-cu', NULL, '2020-10-27 08:14:01', '2020-10-27 08:14:01'),
(3, 1, 'Rau ăn quả', 'khoqua.png', 1, 'rau-an-qua', NULL, '2020-10-27 08:21:31', '2020-10-27 08:21:31'),
(4, 2, 'Trái cây trong nước', 'du-du.png', 1, 'trai-cay-trong-nuoc', NULL, '2020-10-27 20:35:08', '2020-10-27 20:35:08'),
(5, 2, 'Trái cây nhập khẩu', 'kiwi-vang.png', 1, 'trai-cay-nhap-khau', NULL, '2020-10-27 20:36:22', '2020-10-27 20:36:22'),
(6, 2, 'Trái cây đông lạnh', 'phuc-bon-tu.png', 1, 'trai-cay-dong-lanh', NULL, '2020-10-27 20:37:41', '2020-10-27 20:37:41'),
(7, 3, 'Sữa thực vật', 'sua-yen-mach-huu-co.png', 1, 'sua-thuc-vat', NULL, '2020-10-27 20:54:55', '2020-10-27 20:54:55'),
(8, 3, 'Cà phê, cacao', 'tra-earl-grey-koala-tea-36g.png', 1, 'ca-phe-cacao', NULL, '2020-10-27 20:56:19', '2020-10-27 20:56:19'),
(9, 3, 'Nước ép & Sinh tố', 'nuoc-ep-luu.png', 1, 'nuoc-ep-sinh-to', NULL, '2020-10-27 20:57:40', '2020-10-27 20:57:40'),
(10, 4, 'Sữa', 'sua-bo-vi-socola-koita-200ml.png', 1, 'sua', NULL, '2020-10-27 21:22:07', '2020-10-27 21:22:07'),
(11, 4, 'Sữa chua & Kem', 'sua-chua-it-duong-vinamilk-100g.png', 1, 'sua-chua-kem', NULL, '2020-10-27 21:23:37', '2020-10-27 21:23:37'),
(12, 4, 'Bơ & Phô mai', 'pho-mai-tuoi-mozzarella-4ps-125g.png', 1, 'bo-pho-mai', NULL, '2020-10-27 21:25:03', '2020-10-27 21:25:03');

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
(360, '2014_10_12_000000_create_users_table', 5),
(361, '2014_10_12_100000_create_password_resets_table', 5),
(362, '2019_08_19_000000_create_failed_jobs_table', 5),
(363, '2020_10_05_082902_create__nhomsp_table', 5),
(364, '2020_10_05_084355_create_loaisp_table', 5),
(365, '2020_10_05_090050_create_loaiblog_table', 5),
(366, '2020_10_05_090407_create_blog_table', 5),
(367, '2020_10_05_091021_create_binhluan_table', 5),
(368, '2020_10_05_091356_create_sanpham_table', 5),
(369, '2020_10_05_093404_create_imgchitiet_table', 5),
(370, '2020_10_05_093740_create_donvitinh_table', 5),
(371, '2020_10_05_094807_create_donhang_table', 5),
(372, '2020_10_05_095217_create_tinhtranghd_table', 5),
(373, '2020_10_05_103528_create_chitiethd_table', 5),
(374, '2020_10_07_060958_create_nhacungcap_table', 5),
(375, '2020_10_10_155214_create_lohang_table', 5),
(376, '2020_10_16_145927_create_tuyendung_table', 5),
(377, '2020_10_16_162911_create_counpon_table', 5),
(378, '2020_10_17_191155_create_info_table', 5),
(379, '2020_10_17_191243_create_sns_table', 5),
(380, '2020_10_29_150522_create_email_table', 5),
(381, '2020_11_01_103002_create_quangcao_table', 5),
(382, '2020_11_06_122312_update_donhang_table', 6);

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
(1, 'main-data.jpg', 'SHIN520', '0834518640', 'http://fb.me/ereiai', 'shin520', 1, '2020-10-27 07:55:37', '2020-10-27 07:55:37');

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
(4, 'Sữa & Chế phẩm từ sữa', 'sua-bo-vi-socola-koita-200ml.png', 1, 'sua-che-pham-tu-sua', '2020-10-27 21:21:24', '2020-11-15 09:51:33', 'honey');

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
  `quangcao_id` bigint(20) UNSIGNED NOT NULL,
  `quangcao_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sanpham` int(11) NOT NULL,
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

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `id_nhomsp`, `id_loaisp`, `name_sp`, `motadai_sp`, `motangan_sp`, `img_sp`, `price_sp`, `id_donvitinh`, `sp_khuyenmai`, `time_discount`, `old_price_sp`, `id_thuonghieu`, `Anhien`, `slug_sp`, `sku`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 'ĐỌT BÍ ĐỎ HỮU CƠ', '<p><span style=\"color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Đọt bí đỏ của GREEN FRESH đạt tiêu chuẩn hữu cơ của Mỹ và châu Âu, được chứng nhận bởi Control Union, được trồng tại trang trại nhiệt đới hữu cơ GREEN FRESHtại Long Thành, Đồng Nai.</span><br></p>', NULL, 'dotbido.png', 65000, 2, 1, NULL, 999999, 1, 1, 'dot-bi-do-huu-co', '9434191335', '2020-10-27 08:06:09', '2020-11-15 06:06:12'),
(4, 1, 1, 'CẢI THÌA HỮU CƠ', '<div class=\"product_readmore\" data-readmore=\"\" aria-expanded=\"true\" id=\"rmjs-1\" style=\"outline: 0px; width: 343px; transition: height 100ms ease 0s; overflow: hidden; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; max-height: none; height: 310px;\"><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-align: justify;\">Cải thìa là loại rau rất gần gũi với các món ăn của người Việt Nam và Trung Hoa. Rau giòn, vị ngon, ngọt. Cải thìa có chứa folate, kali và canxi giúp xương chắc khỏe. Các chất thuộc nhóm carotenoid trong cải thìa có tác dụng như chất làm chậm quá trình oxi hóa và giảm việc hình thành những nguồn gốc có hại trong cơ thể.<br></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">Nên xào cải thìa để giữ lượng vitamin C và folate trong rau. Nước luộc cải cũng có thể dùng làm canh vì chứa nhiều chất khoáng.</p><div><br></div></div>', NULL, 'CAITHIAHUUCO.png', 69000, 2, 1, NULL, 999999, 1, 1, 'cai-thia-huu-co', '6147369040', '2020-10-27 08:08:49', '2020-11-15 06:06:13'),
(5, 1, 1, 'CẢI BẸ XANH HỮU CƠ', '<p><span style=\"color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Cải bẹ xanh là loại rau quen thuộc với gia đình Việt, hay còn gọi là cải cay, là thành phần chủ yếu trong mù tạt (wasabi) và thường được sử dụng trong các món hải sản tươi sống. Theo y học cổ truyền, cải bẹ xanh có vị cay, tính ôn với tác dụng thanh nhiệt, giải độc, giải cảm hàn, thông đàm, lợi khí và lợi tiểu… Nhiều nghiên cứu y học hiện đại cho thấy, cải bẹ xanh có chứa nhiều vitamin A, B, C, K, axit nicotic, abumin, catoten,… rất có lợi cho sức khỏe.</span><br></p>', NULL, 'CAIBEXANHHUUCO.png', 69000, 2, 1, NULL, 999999, 1, 1, 'cai-be-xanh-huu-co', '3877549285', '2020-10-27 08:10:12', '2020-11-15 06:06:14'),
(6, 1, 2, 'CỦ DỀN', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Củ dền mang lại nhiều lợi ích tuyệt vời cho sức khỏe: chứa chất chống oxy hóa, giảm viêm, cải thiện sức khỏe tim mạch, hỗ trợ giải độc, tăng cường chức năng não bộ, hỗ trợ tiêu hóa, hỗ trợ giảm cân,...</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Củ dền có thể dùng để chế biến nhiều món ăn ngon như nước ép, sinh tố, salad, soup.</p>', NULL, 'cuden.jpg', 95000, 2, 1, NULL, 999999, 1, 1, 'cu-den', '3574546240', '2020-10-27 08:14:55', '2020-11-15 06:06:15'),
(7, 1, 2, 'CÀ RỐT', '<p><span style=\"color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Ăn cà rốt không chỉ có tác dụng tốt cho mắt, mà còn mang đến cho bạn làn da khỏe mạnh, hồng hào, làm chậm quá trình lão hóa và thậm chí ngăn ngừa bệnh ung thư.</span><br></p>', NULL, 'carot.jpg', 105000, 2, 1, NULL, 999999, 1, 1, 'ca-rot', '5944719114', '2020-10-27 08:17:00', '2020-11-15 06:06:16'),
(8, 1, 2, 'CỦ CẢI TRẮNG HỮU CƠ', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"font-family: KoHo;\">Củ cải trắng không chỉ là một món ăn phổ biến, mà còn được biết tới như loại thần dược có công năng không thua kém gì nhân sâm, củ cải trắng giúp trị đờm, thanh nhiệt, dưỡng da, chống ung thư, phòng tránh thiếu máu và giúp cho cơ thể đủ nước...</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"font-family: KoHo;\">Cách chế biến và ăn củ cải sống:</span><br style=\"outline: 0px;\"><span style=\"font-family: KoHo;\">* Củ cải chấm tương (xì dầu), thái củ cải thành lát hoặc miếng dài, sau đó chấm tương ăn trực tiếp.</span><br style=\"outline: 0px;\"><span style=\"font-family: KoHo;\">* Làm món rau trộn: củ cải trắng thái nhỏ thành sợi cho thêm muối ăn, đường cát trắng, dấm, có thể trộn củ cải trắng và bắp cải bắp thái sợi, cho thêm một số gia vị như muối, đường, vừng, dầu mè.</span><br style=\"outline: 0px;\"><span style=\"font-family: KoHo;\">* Bổ dọc củ cải ra thành hai miếng, nếu củ to có thể bổ thành 4 miếng dài, sau đó thái thành lát mỏng rồi cho thêm muối, đường cát trắng, dấm gạo, xì dầu rồi trộn đều sau đó để khoảng 1 ngày có thể dùng được. Khi ăn cho thêm chút dầu mè, món ăn có vị giòn, ngọt, mặn, thơm. Nước củ cải tiết ra có vị chua ngọt, lạ miệng, có tác dụng giải nhiệt và giúp tỉnh rượu.</span></p>', NULL, 'cucaitranghuuco.png', 70000, 2, 1, '2020-11-03', 80000, 1, 1, 'cu-cai-trang-huu-co', '8325913581', '2020-10-27 08:18:50', '2020-11-02 18:28:50'),
(9, 1, 2, 'TỎI HỮU CƠ', '<p><span style=\"color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Hành và tỏi khô khi thu về được treo bên dưới mái hiên tránh mưa và nắng để củ giảm nước từ từ thay vì phơi nắng khiến củ mất nước đột ngột. Sau hong khoảng 1 tuần sẽ chuyển vào treo ở nơi được quây kín, rồi hun khói âm ỉ khoảng 20 ngày nữa, vừa làm củ khô hơn vừa làm tiêu diệt mầm nấm bệnh và trứng sâu mọt có thể còn trên củ khi thu về từ đồng ruộng.</span><br></p>', NULL, 'toihuuco.png', 240000, 2, 1, NULL, 999999, 1, 1, 'toi-huu-co', '8928811194', '2020-10-27 08:20:21', '2020-11-15 06:06:18'),
(10, 1, 3, 'KHỔ QUA HỮU CƠ', '<div class=\"product_readmore\" data-readmore=\"\" aria-expanded=\"true\" id=\"rmjs-1\" style=\"outline: 0px; width: 343px; transition: height 100ms ease 0s; overflow: hidden; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; max-height: none; height: 225px;\"><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px;\">Lượng vitamin C trong khổ qua giúp tăng sức đề kháng cho cơ thể, kháng viêm tốt, ngăn ngừa và có tác dụng tiêu diệt tế bào ung thư. Kali trong khổ qua chứa có tác dụng giảm huyết áp, beta-carotene giúp sáng mắt, giúp điều trị chứng trào ngược axit và chứng khó tiêu.</p><div><br></div></div>', NULL, 'khoqua.png', 120000, 2, 1, NULL, 999999, 1, 1, 'kho-qua-huu-co', '4274141270', '2020-10-27 08:22:42', '2020-11-15 06:06:19'),
(11, 2, 4, 'CHUỐI XIÊM', '<p><span style=\"color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Chuối xiêm chứa nhiều thành phần dinh dưỡng như các loại vitamin, protein, các chất khoáng như magie, natri, canxi, kẽm, sắt, kali, lipid... Dùng chuối xiêm thường sẽ giúp ổn định huyết áp, hỗ trợ dạ dày, giảm căng thẳng, tăng cường sức khỏe tim mạch. Chuối xiêm khi đã chín còn có thể làm kem chuối, chuối chiên, hay nguyên liệu cho các món bánh, chè.</span><br></p>', NULL, 'chuoi-xiem.png', 65000, 2, 1, NULL, 999999, 1, 1, 'chuoi-xiem', '1639067802', '2020-10-27 20:39:42', '2020-11-15 06:06:20'),
(12, 2, 4, 'ĐU ĐỦ', '<p><span style=\"color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Đu đủ có ruột đỏ, ăn có vị ngọt thanh. Ngoài ra, đu đủ có chứa chất chống oxy hóa tốt cho cơ thể là carotenoid, nhất là lycopene, giúp cơ thể hấp thụ tốt hơn các chất chống oxy hóa trong các loại trái cây và rau quả khác. Vitamin C và lycopene có trong đu đủ còn hỗ trợ bảo vệ làn da và giảm các dấu hiệu lão hóa như các nếp nhăn trên da mặt.</span><br></p>', NULL, 'du-du.png', 70000, 2, 1, NULL, 999999, 1, 1, 'du-du', '5602791240', '2020-10-27 20:40:31', '2020-11-15 06:06:20'),
(13, 2, 4, 'BƠ BOOTH', '<div class=\"product_readmore\" data-readmore=\"\" aria-expanded=\"true\" id=\"rmjs-1\" style=\"outline: 0px; width: 343px; transition: height 100ms ease 0s; overflow: hidden; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; max-height: none; height: 535px;\"><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">Bơ Booth có nguồn gốc từ miền Nam châu Mỹ, được trồng nhiều ở cả Mexico, Cuba,... Bơ có phầm cơm (thịt quả) màu vàng tươi, độ dẻo và thơm ngon vượt xa các loại bơ thông thường. Lớp vỏ dày giúp việc bảo quản được lâu sau khi thu hoạch, thuận tiện cho việc vận chuyển đi xa. Bơ còn non có vỏ màu xanh bóng. Khi chín sẽ có màu xanh đậm hơi ngả vàng, vỏ có nhiều vân xù xì.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">Bơ Booth có nhiều folate, cùng với vitamin E, vitamin A và Glutathione bên trong bơ nên tốt cho tim mạch. Ngoài ra, bơ còn giàu chất xơ, chứa hàm lượng protein cao và hàm lượng muối thấp. Vì thế, khi sử dụng với một lượng hợp lý mỗi ngày sẽ tốt cho sức khỏe.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">Khi thấy vỏ màu xanh hơi ngả vàng, cầm bơ thấy mềm tay và còn chút đàn hồi là bơ đã chín. Có thể dùng trực tiếp hoặc bảo quản trong ngăn mát tủ lạnh được thêm 2 - 3 ngày.</p><div><br></div></div>', NULL, 'bo-booth.png', 85000, 1, 0, NULL, NULL, 1, 1, 'bo-booth', NULL, '2020-10-27 20:41:27', '2020-10-30 21:58:54'),
(14, 2, 4, 'CHUỐI LABA', '<div class=\"product_readmore\" data-readmore=\"\" aria-expanded=\"true\" id=\"rmjs-1\" style=\"outline: 0px; width: 343px; transition: height 100ms ease 0s; overflow: hidden; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; max-height: none; height: 325px;\"><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">Chuối Laba khi chín có mùi thơm đặc trưng và đậm đà. Chuối Laba cung cấp nhiều kali, phốt pho, magiê, sắt, canxi, tinh bột và đường, vitamin A, C, B… nên rất bổ dưỡng, giúp phát triển cơ thể, quân bình hệ thần kinh, tăng trưởng hệ xương và sức đề kháng, làm đẹp da và giúp tóc mọc nhanh hơn. Chuối Laba là một loại chuối lành tính, không kén người ăn, ăn lúc nào cũng tốt, không kiêng kị các loại bệnh cùng với giá trị dinh dưỡng cực kì cao đem lại hiệu quả bất ngờ cho người dùng.</p><div><br></div></div>', NULL, 'chuoi-laba.png', 65000, 2, 0, NULL, NULL, 1, 1, 'chuoi-laba', NULL, '2020-10-27 20:42:13', '2020-10-30 21:58:55'),
(15, 2, 4, 'DƯA LƯỚI TL3', '<span style=\"color: rgb(33, 37, 41); text-align: justify; font-family: latoregular, sans-serif;\">Ăn dưa lưới vào buổi sáng giúp cơ thể giải độc, điều tiết tốt hơn. Zeaxanthin trong dưa lưới còn có tác dụng bảo vệ da khỏi tia UV. Ngoài ra, dưa lưới còn là nguồn thực phẩm chưa beta-carotene, axit folic, kali, vitamin C và vitamin A giúp bạn cải thiện làn da trẻ trung và khỏe mạnh hơn.</span><table class=\"tbl-description\" style=\"outline: 0px; border-spacing: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif;\"><tbody style=\"outline: 0px;\"><tr style=\"outline: 0px;\"><th style=\"outline: 0px; padding: 0px 0px 2px; text-align: left; text-transform: uppercase; color: rgb(152, 152, 152); vertical-align: top; width: 343px; font-family: latobold, sans-serif; border-bottom: 2px solid rgb(237, 234, 230); display: block;\"></th></tr></tbody></table>', NULL, 'dua-luoi-tl3.png', 145000, 2, 0, NULL, NULL, 1, 1, 'dua-luoi-tl3', NULL, '2020-10-27 20:44:50', '2020-10-30 21:58:56'),
(16, 2, 4, 'ỔI', '<p><span style=\"color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Ổi rất giàu các chất chống oxy hóa, vitamin C, kali và chất xơ. Những thành phần dinh dưỡng này chính là những yếu tố làm nên lợi ích nhiều mặt về sức khỏe của trái ổi.</span><br></p>', NULL, 'oi.png', 85000, 2, 0, NULL, NULL, 1, 1, 'oi', NULL, '2020-10-27 20:46:26', '2020-10-30 21:58:58'),
(17, 2, 5, 'KIWI VÀNG HỮU CƠ', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Kiwi vàng Zespri Organic quả to, tươi ngon, mọng nước, cầm cứng tay, vị ngọt ngọt xen lẫn chua dịu nhẹ thanh mát, đặc trưng của Kiwi không thể lẫn vào đâu được.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Giá trị dinh dưỡng của Kiwi:</p><ul style=\"outline: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif;\"><li style=\"outline: 0px; text-align: justify;\">Quả kiwi lại chứa gấp đôi lượng vitamin C so với quả cam. Do đó mỗi ngày, bạn chỉ cần ăn một quả kiwi là đã có đủ lượng vitamin C cần thiết. Ngoài ra, kiwi cũng là loại trái cây chứa nguồn vitamin E dồi dào, có tác dụng tốt cho tim mạch.</li><li style=\"outline: 0px; text-align: justify;\">Quả kiwi có cùng lượng kali như quả chuối nhưng lại chỉ chứa một nửa lượng calo nên dẫn tới hàm lượng muối trong quả kiwi rất thấp và vẫn đảm bảo lượng kali cao – là chất có lợi để ổn định huyết áp và sức khỏe tim mạch.</li><li style=\"outline: 0px; text-align: justify;\">Quả kiwi không những có hàm lượng lutein cao hơn các loại quả – mà các nghiên cứu gần đây còn cho thấy chất lutein có trong quả kiwi còn rất dễ hấp thụ, giúp ngăn ngừa việc giảm thị lực do tuổi tác. Bên cạnh đó, chỉ cần ăn 2-3 quả kiwi mỗi ngày là giảm được lượng tế bào bị tổn thương do căng thẳng gây ra; giảm được được sự tụ tập của các tiểu huyết cầu – vốn là một yếu tố có nguy cơ cao dẫn tới làm tắc động mạch và các mạch máu.</li></ul>', NULL, 'kiwi-vang.png', 320000, 2, 0, NULL, NULL, 1, 1, 'kiwi-vang-huu-co', NULL, '2020-10-27 20:47:46', '2020-10-30 21:58:59'),
(18, 2, 6, 'PHÚC BỒN TỬ HỖN HỢP', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Phúc bồn tử hay còn gọi là quả Mâm xôi là một loại cây thuộc họ dâu. Có hai loại, quả có màu đen vị ngọt nhẹ và quả màu đỏ sẫm có vị chua. Phúc bồn tử được thế giới xếp hàng thượng phẩm trong biểu đồ đánh giá thực phẩm, nhiều lợi ích hơn cả việt quất, dâu tây, nho đen, cherry... vì giàu các vitamin, khoáng chất, và chất xơ. Đây cũng là loại quả được sử dụng rất nhiều trong các công thức làm các thức uống detox (thải độc) cho cơ thể khỏe đẹp hơn.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Phương pháp cấp đông là một cách tuyệt vời để bảo quản lâu dài chất dinh dưỡng, ngăn ngừa sự hư hỏng của các loại trái cây và quả mọng. Sản phẩm là sự kết hợp của hai loại quả mọng, được hái bằng tay với độ tươi tối ưu, và cấp đông để bạn có thể thưởng thức một cách tuyệt vời nhất.</p>', NULL, 'phuc-bon-tu.png', 264000, 1, 0, NULL, NULL, 1, 1, 'phuc-bon-tu-hon-hop', NULL, '2020-10-27 20:49:26', '2020-10-30 21:59:03'),
(19, 2, 6, 'HỖN HỢP VIỆT QUẤT, PHÚC BỒN TỬ VÀ DÂU TÂY OOB', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Phương pháp đông lạnh là một cách tuyệt vời để bảo quản lâu dài chất dinh dưỡng, ngăn ngừa sự hư hỏng của các loại trái cây và quả mọng. Sản phẩm là sự kết hợp của bốn loại quả mọng, được hái bằng tay với độ tươi tối ưu, được cấp đông sâu để bạn có thể thưởng thức một cách tuyệt vời nhất.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:&nbsp;</span>30% dâu tây hữu cơ ,30% việt quất hữu cơ, 30% mâm xôi hữu cơ,10% phúc bồn tử hữu cơ.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">* Tỷ lệ này là tương đối và có thể thay đổi</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\"><span style=\"outline: 0px; font-weight: bolder;\">Khối lượng tịnh:</span>&nbsp;</span>500g</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thời hạn sử dụng:</span>&nbsp;24 tháng trước Hạn sử dụng</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Ăn trực tiếp.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Sinh tố.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Dùng như đá viên trong món cocktail hoặc các loại thức uống có cồn.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Thêm vào sữa chua hoặc bánh.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:&nbsp;</span>Bảo quản trong tủ đông hoặc dưới -18 độ C.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Tiêu Chuẩn:</span>&nbsp;Sản phẩm được sản xuất tại New Zealand và đạt chứng nhận hữu cơ theo tiêu chuẩn của New Zealand.</p>', NULL, 'viet-quat-phuc-bon-tu-dau-tay.png', 288000, 1, 0, NULL, NULL, 1, 1, 'hon-hop-viet-quat-phuc-bon-tu-va-dau-tay-oob', NULL, '2020-10-27 20:50:52', '2020-10-30 21:59:04'),
(20, 2, 6, 'VIỆT QUẤT HỮU CƠ OOB', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Phương pháp đông lạnh là một cách tuyệt vời để bảo quản lâu dài chất dinh dưỡng, ngăn ngừa sự hư hỏng của các loại trái cây và quả mọng. Từng quả việt quất được thu hoạch bằng tay và đưa vào quy trình cấp đông sâu khép kín giúp sản phẩm giữ được nhiều vitamin và các chất chống oxy hóa.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;100% Việt quất hữu cơ</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Khối lượng tịnh:</span>&nbsp;450g</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thời hạn sử dụng:</span>&nbsp;24 tháng trước Hạn sử dụng</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Công dụng:&nbsp;</span>Việt quất không chỉ có hương vị tuyệt vời mà còn có nhiều công dụng cho sức khỏe</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Giảm nguy cơ mắc bệnh béo phì, tiểu đường, tim mạch.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Giúp làn da và mái tóc khỏe mạnh.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Cung cấp năng lượng cho cơ thể và giữ gìn vóc dáng cân đối.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Ăn trực tiếp.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Sinh tố.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Dùng như đá viên trong món cocktail hoặc các loại thức uống có cồn.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Thêm vào sữa chua hoặc bánh.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:&nbsp;</span>Bảo quản trong tủ đông hoặc dưới -18 độ C.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Tiêu Chuẩn:</span>&nbsp;Sản phẩm được sản xuất tại New Zealand và đạt chứng nhận hữu cơ theo tiêu chuẩn của New Zealand.</p>', NULL, 'viet-quat-huu-co-oob.png', 288000, 1, 0, NULL, NULL, 1, 1, 'viet-quat-huu-co-oob', NULL, '2020-10-27 20:52:29', '2020-10-30 21:59:11'),
(21, 3, 7, 'SỮA HẠNH NHÂN KOITA 200ML', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Sữa Hạnh nhân Hữu cơ Koita được làm từ những hạt hạnh nhân rang hữu cơ không biến đổi gen và không dùng thuốc trừ sâu, không chứa chất bảo quản, và không chứa đường lactose. Lựa chọn không thể bỏ qua với những người yêu thích sữa thực vật.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Nước, Đường nâu hữu cơ, Hạnh nhân rang hữu cơ (2%), Muối biển, Chất ổn định: Bột hạt carob, Gellan gum; Chất nhũ hóa: Lecithin hữu cơ (Hoa hướng dương).</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thể tích thực:</span>&nbsp;200ml</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;In trên bao bì sản phẩm.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Sử dụng trực tiếp sau khi mở nắp.<br style=\"outline: 0px;\"><br style=\"outline: 0px;\">* Không sử dụng sản phẩm cho người dị ứng với thành phần hạnh nhân.<br style=\"outline: 0px;\"><br style=\"outline: 0px;\">* Không phù hợp với trẻ sơ sinh, trừ khi có tư vấn từ bác sĩ.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Bảo quản nơi khô ráo thoáng mát ở nhiệt độ phòng. Tránh ánh sáng trực tiếp, đảm bảo vệ sinh an toàn thực phẩm. Sau khi mở nắp, bảo quản lạnh (dưới 4 độ C) và dùng trong vòng 3 hoặc 4 ngày.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:</span>&nbsp;Sản phẩm được sản xuất tại Ý và đạt chứng nhận hữu cơ tiêu chuẩn EU của châu Âu.</p>', NULL, 'sua-hanh-nhan-koita-200ml.png', 44000, 1, 0, NULL, NULL, 1, 1, 'sua-hanh-nhan-koita-200ml', NULL, '2020-10-27 20:59:40', '2020-10-27 20:59:40'),
(22, 3, 7, 'SỮA YẾN MẠCH HỮU CƠ KOITA 200ML', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Sữa Yến mạch Hữu cơ Koita được làm từ yến mạch hữu cơ không biến đổi gen và không dùng thuốc trừ sâu, không chứa chất bảo quản, và không chứa đường lactose. Lựa chọn không thể bỏ qua với những người yêu thích sữa thực vật.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Nước, Yến mạch hữu cơ (16%), Dầu hoa hướng dương hữu cơ, Muối biển.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thể tích thực:</span>&nbsp;200ml</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;In trên bao bì sản phẩm.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Sử dụng trực tiếp sau khi mở nắp.<br style=\"outline: 0px;\"><br style=\"outline: 0px;\">* Không sử dụng sản phẩm cho người dị ứng với thành phần yến mạch có trong sữa. Có thể lẫn ngũ cốc có thành phần gluten.<br style=\"outline: 0px;\"><br style=\"outline: 0px;\">* Không phù hợp với trẻ sơ sinh, trừ khi có tư vấn từ bác sĩ.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Bảo quản nơi khô ráo thoáng mát ở nhiệt độ phòng. Tránh ánh sáng trực tiếp, đảm bảo vệ sinh an toàn thực phẩm. Sau khi mở nắp, bảo quản lạnh (dưới 4 độ C) và dùng trong vòng 3 hoặc 4 ngày.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:</span>&nbsp;Sản phẩm được sản xuất tại Ý và đạt chứng nhận hữu cơ tiêu chuẩn EU của châu Âu.</p>', NULL, 'sua-yen-mach-huu-co.png', 39000, 1, 0, NULL, NULL, 1, 1, 'sua-yen-mach-huu-co-koita-200ml', NULL, '2020-10-27 21:00:56', '2020-10-27 21:00:56'),
(23, 3, 7, 'BỘT ĐẬU NÀNH ĐEN HEALTH PARADISE 500G', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Sữa đậu nành đen uống liền được làm từ hạt đậu nành đen hữu cơ có chứng nhận của NASAA (Úc) do BCS OKO-Garantie cấp. Đậu nành đen chứa nhiều Vitamin, không cholesterol, chỉ số đường thấp.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Đậu nành đen hữu cơ 100%.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif;\"><span style=\"outline: 0px; font-weight: bolder;\">Khối lượng tịnh:</span>&nbsp;500g.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;In trên bao bì sản phẩm.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Thêm 2 - 3 thìa bột đậu nành đen hữu cơ vào 200ml nước ấm/ nước lạnh và khuấy đều. Uống 2 - 3 lần/ ngày. Có thể làm bánh.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Bảo quản nơi khô ráo, thoáng mát. Tránh ánh nắng trực tiếp và nguồn nhiệt.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:</span>&nbsp;Sản phẩm được sản xuất tại Malaysia và đạt chứng nhận hữu cơ theo tiêu chuẩn NASAA.</p>', NULL, 'bot-dau-nanh-den-health-paradise-500g.png', 220000, 1, 0, NULL, NULL, 1, 1, 'bot-dau-nanh-den-health-paradise-500g', NULL, '2020-10-27 21:02:59', '2020-10-27 21:02:59'),
(24, 3, 8, 'TRÀ EARL GREY KOALA TEA 36G', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Nếu đã yêu mến loại trà earl grey thì bạn sẽ càng say mê Trà Earl Grey hữu Cơ Koala Tea vì đây là một sự kết hợp tuyệt vời giữa trà đen early nổi tiếng và tinh dầu cam bergamot.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Còn gì tuyệt vời hơn khi bắt đầu ngày mới thật tỉnh táo và thư giãn với một tách earl grey với hòa quyện cùng hương thơm của cam bergamot.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:&nbsp;</span>Trà đen hữu cơ, Cam bergamot.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">* Có chứa caffeine.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Khối lượng tịnh:</span>&nbsp;36g (20 túi).</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;In trên bao bì.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Cho 1 gói nhỏ vào ly nước sôi đến khi trà tan ra đến mức độ mong muốn.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Bảo quản nơi khô ráo, thoáng mát. Tránh ánh nắng trực tiếp.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:&nbsp;</span>Sản phẩm được sản xuất tại Úc và đạt chứng nhận hữu cơ theo tiêu chuẩn ACO.</p>', NULL, 'tra-earl-grey-koala-tea-36g.png', 136000, 1, 0, NULL, NULL, 1, 1, 'tra-earl-grey-koala-tea-36g', NULL, '2020-10-27 21:04:43', '2020-10-27 21:04:43'),
(25, 3, 8, 'TRÀ LÀI FITO 36G', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Trà được làm từ búp và lá non từ cây trà được trồng ở những vùng đất và khí hậu phù hợp tại Việt Nam mà không sử dụng phân hóa học và thuốc trừ sâu. Chính vì thế, Trà xanh lài hữu cơ Fito luôn giữ được vị thơm ngon tự nhiên.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Trà Fito được sản xuất theo quy trình khép kín, tuân thủ chặt chẽ các quy định:</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Không chất bảo quản.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Không hương liệu nhân tạo.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Không chất tạo màu hay các chất phụ gia khác.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Không biến đổi gen.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Công dụng:</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Thư giãn.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Chống oxy hóa, ngăn ngừa lão hóa.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Ngăn ngừa ung thư.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Giảm cholesterol xấu.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">- Giúp ích cho sức khỏe, tim mạch.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;100% Trà lài hữu cơ.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Khối lượng tịnh:</span>&nbsp;36g (1,8g x 20 túi).</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;36 tháng kể từ ngày sản xuất.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Mỗi lần 1 - 2 túi, ngày 2 - 3 lần. Đặt túi trà vào ly, thêm khoảng 150 - 200ml nước sôi, để 3 - 5 phút rồi uống. Có thể sử dụng lâu dài và thường xuyên.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Bảo quản nơi khô ráo, thoáng mát. Tránh ánh nắng trực tiếp.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:&nbsp;</span>Sản phẩm được sản xuất tại Việt Nam và đạt chứng nhận hữu cơ theo tiêu chuẩn EU và Ecocert.</p>', NULL, 'tra-lai-fito-36g.png', 65000, 3, 0, NULL, NULL, 1, 1, 'tra-lai-fito-36g', NULL, '2020-10-27 21:10:30', '2020-10-27 21:10:30'),
(26, 3, 8, 'TRÀ XANH QUẾ FITO 36G', '<div class=\"product_readmore\" data-readmore=\"\" aria-expanded=\"true\" id=\"rmjs-1\" style=\"outline: 0px; width: 343px; transition: height 100ms ease 0s; overflow: hidden; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; max-height: none; height: 1005px;\"><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-align: justify;\">Trà được làm từ búp và lá non từ cây trà được trồng ở những vùng đất và khí hậu phù hợp tại Việt Nam cùng với quế hữu cơ mà không sử dụng phân hóa học và thuốc trừ sâu. Chính vì thế, Trà xanh quế hữu cơ Fito luôn giữ được vị thơm ngon tự nhiên.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">Trà Fito được sản xuất theo quy trình khép kín, tuân thủ chặt chẽ các quy định:</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">- Không chất bảo quản.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">- Không hương liệu nhân tạo.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">- Không chất tạo màu hay các chất phụ gia khác.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">- Không biến đổi gen.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Công dụng:</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">- Thư giãn.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">- Chống oxy hóa, ngăn ngừa lão hóa.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">- Ngăn ngừa ung thư.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">- Giảm cholesterol xấu.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">- Giúp ích cho sức khỏe, tim mạch.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Trà xanh hữu cơ 90%, Quế hữu cơ 10%.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Khối lượng tịnh:</span>&nbsp;36g (1,8g x 20 túi).</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;36 tháng kể từ ngày sản xuất.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Mỗi lần 1 - 2 túi, ngày 2 - 3 lần. Đặt túi trà vào ly, thêm khoảng 150 - 200ml nước sôi, để 3 - 5 phút rồi uống. Có thể sử dụng lâu dài và thường xuyên.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Bảo quản nơi khô ráo, thoáng mát. Tránh ánh nắng trực tiếp.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:&nbsp;</span>Sản phẩm được sản xuất tại Việt Nam và đạt chứng nhận hữu cơ theo tiêu chuẩn EU và Ecocert.</p></div>', NULL, 'tra-xanh-que-fito-36g.png', 65000, 3, 0, NULL, NULL, 1, 1, 'tra-xanh-que-fito-36g', NULL, '2020-10-27 21:12:05', '2020-10-27 21:12:05'),
(27, 3, 9, 'NƯỚC ÉP LỰU RABENHORST 750ML', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Ngay sau khi thu hoạch, những quả lựu hữu cơ chín mọng được lựa chọn kỹ lưỡng và cẩn thận xử lý, sau đó được đóng chai tại Rabenhorst. Nước ép lựu hữu cơ chất lượng cao của Rabenhorst đã được tạo thành như thế, nhằm lưu giữ những gì tốt nhất từ nguyên liệu thiên nhiên đến người tiêu dùng.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Nước ép lựu hữu cơ 100%.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thể tích thực:</span>&nbsp;750ml</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;In trên bao bì.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Lắc đều trước khi dùng. Mỗi ngày dùng trực tiếp 100ml, có thể pha loãng với chút đá viên.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Bảo quản nơi khô ráo, thoáng mát khi chưa mở nắp. Sau khi mở nắp, bảo quản lạnh và sử dụng hết trong vòng 10 ngày.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:</span>&nbsp;Sản phẩm được sản xuất tại Đức và đạt chứng nhận hữu cơ tiêu chuẩn EU của châu Âu</p>', NULL, 'nuoc-ep-luu.png', 380000, 3, 0, NULL, NULL, 1, 1, 'nuoc-ep-luu-rabenhorst-750ml', NULL, '2020-10-27 21:13:37', '2020-10-27 21:13:37'),
(28, 3, 9, 'SINH TỐ DETOX RABENHORST 240ML', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Sinh tố Detox hữu cơ Rabenhorst được cẩn thận chọn lọc từ 8 loại trái cây và giàu vitamin C, hỗ trợ tế bào chống oxy hóa. Một chọn lựa không thể thiếu với những ai đang hướng tới lối sống cân bằng, lành mạnh.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Nước ép nho đỏ hữu cơ, Chuối hữu cơ, Táo hữu cơ, Bột blueberry hữu cơ (7%), Cowberry hữu cơ, aronia hữu cơ (5%), Nước ép táo hữu cơ, Sơ ri hữu cơ, Nước ép trái cơm cháy hữu cơ.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif;\"><span style=\"outline: 0px; font-weight: bolder;\">Thể tích thực:</span>&nbsp;240ml.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;In trên bao bì sản phẩm.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Dùng trực tiếp. Lắc đều trước khi dùng, ngon hơn khi uống lạnh.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Bảo quản nơi khô ráo, thoáng mát. Sau khi mở thì đậy kín và bảo quản trong tủ lạnh.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:&nbsp;</span>Sản phẩm được sản xuất tại Đức và được chứng nhận hữu cơ tiêu chuẩn EU Organic của Châu Âu.</p>', NULL, 'sinh-to-detox-rabenhorst-240ml.png', 85000, 4, 0, NULL, NULL, 1, 1, 'sinh-to-detox-rabenhorst-240ml', NULL, '2020-10-27 21:15:40', '2020-10-27 21:15:40');
INSERT INTO `sanpham` (`id_sanpham`, `id_nhomsp`, `id_loaisp`, `name_sp`, `motadai_sp`, `motangan_sp`, `img_sp`, `price_sp`, `id_donvitinh`, `sp_khuyenmai`, `time_discount`, `old_price_sp`, `id_thuonghieu`, `Anhien`, `slug_sp`, `sku`, `created_at`, `updated_at`) VALUES
(29, 3, 9, 'NƯỚC TINH CHẤT PHÚC BỒN TỮ ĐỎ LANGBIAN.F 500ML', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Sản phẩm nước tinh chất phúc bồn tử đỏ LANGBIAN.F được làm 100% từ quả phúc bồn tử đỏ hữu cơ với đường phèn hữu cơ. Đây là loại thức uống vì sức khỏe:</p><ul style=\"outline: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><li style=\"outline: 0px;\">Làm đen tóc - đẹp da - trẻ hóa tế bào</li><li style=\"outline: 0px;\">Ngừa ho, trị viêm họng ( đặc biệt là viêm họng hạt)</li><li style=\"outline: 0px;\">Trị đau bao tử - có lợi cho hệ tiêu hóa</li><li style=\"outline: 0px;\">Ngăn ngừa vô sinh cho cả nam và nữ</li><li style=\"outline: 0px;\">An toàn vệ sinh, không hương liệu, không phẩm màu, đạt chuẩn công nghệ hữu cơ Nhật Bản.</li></ul><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Phúc bồn tử hay còn gọi là Quả mâm xôi là một loại cây thuộc họ dâu, quả có màu đen/đỏ sẫm, có vị ngọt nhạt và hơi chua. Trong quả có chứa các acid hữu cơ, chủ yếu là acid citric, malic, salicylic và nhiều hợp chất, vitamin bổ dưỡng khác.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Ellagitannin trong phúc bồn tử được chứng minh có tác dụng chống lão hoá mạnh hơn cả dâu tây, gấp ba lần trái kiwi và gấp mười lần cà chua. Cùng với vitamin C và anthocyanin có trong phúc bồn tử, khả năng chống oxy hoá và ngăn ngừa ung thư gia tăng gấp đôi, loại trừ được các gốc tự do làm thay đổi cấu trúc ADN của tế bào. Đồng thời, phúc bồn tử cũng được xếp hàng thượng phẩm trong biểu đồ đánh giá thực phẩm, nhiều lợi ích hơn cả việt quất, dâu tây, nho đen, cherry… vì ngoài các vitamin, khoáng chất, nó còn là nguồn chất xơ giúp ổn định đường huyết nên rất tốt cho bệnh nhân tiểu đường.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Ngoài ra, phúc bồn tử còn cải thiện hệ thống tim mạch, ngăn ngừa bệnh gút; điều chỉnh kinh nguyệt, tăng khả năng sinh lý ở nam và nữ; giúp cơ thể tăng khả năng miễn dịch, chống viêm nhiễm; cải thiện chức năng não.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Phúc bồn tử đỏ hữu cơ 85%, Đường phèn hữu cơ Quảng Ngãi 15%.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thể tích:</span>&nbsp;500ml</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;06 tháng sau khi đã mở nắp.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Dùng làm thức uống giải khát, có thể uống nguyên chất (ướp lạnh) và cho thêm đá, hoặc pha với nước tỷ lệ 1:1 hoặc 1:2 để có được ly nước Phúc Bồn Tử ngon tuyệt hảo, đậm đà hương vị Phúc Bồn Tử Đà Lạt. Dùng từ 1-2 ly/ngày.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Để nơi khô mát, thoáng mát, tránh ánh nắng trực tiếp. Đậy nắp kín khi không sử dụng</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:</span>&nbsp;Sản phẩm được sản xuất tại Việt Nam và đạt chứng nhận hữu cơ tiêu chuẩn JAS của Nhật Bản.</p>', NULL, 'nuoc-tinh-chat-phuc-bon-tu-do-langbianf-500ml.png', 400000, 4, 0, NULL, NULL, 1, 1, 'nuoc-tinh-chat-phuc-bon-tu-do-langbianf-500ml', NULL, '2020-10-27 21:17:34', '2020-10-27 21:17:34'),
(30, 3, 9, 'NƯỚC TINH CHẤT PHÚC BỒN TỮ ĐEN LANGBIAN.F 500ML', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Sản phẩm nước tinh chất phúc bồn tử đen LANGBIAN.F được làm 100% từ quả phúc bồn tử đen hữu cơ với đường phèn hữu cơ. Đây là loại thức uống vì sức khỏe:</p><ul style=\"outline: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><li style=\"outline: 0px;\">Làm đen tóc - đẹp da - trẻ hóa tế bào</li><li style=\"outline: 0px;\">Ngừa ho, trị viêm họng ( đặc biệt là viêm họng hạt)</li><li style=\"outline: 0px;\">Trị đau bao tử - có lợi cho hệ tiêu hóa</li><li style=\"outline: 0px;\">Ngăn ngừa vô sinh cho cả nam và nữ</li><li style=\"outline: 0px;\">An toàn vệ sinh, không hương liệu, không phẩm màu, đạt chuẩn công nghệ hữu cơ Nhật Bản.</li></ul><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Phúc bồn tử hay còn gọi là Quả mâm xôi là một loại cây thuộc họ dâu, quả có màu đen/đỏ sẫm, có vị ngọt nhạt và hơi chua. Trong quả có chứa các acid hữu cơ, chủ yếu là acid citric, malic, salicylic và nhiều hợp chất, vitamin bổ dưỡng khác.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Ellagitannin trong phúc bồn tử được chứng minh có tác dụng chống lão hoá mạnh hơn cả dâu tây, gấp ba lần trái kiwi và gấp mười lần cà chua. Cùng với vitamin C và anthocyanin có trong phúc bồn tử, khả năng chống oxy hoá và ngăn ngừa ung thư gia tăng gấp đôi, loại trừ được các gốc tự do làm thay đổi cấu trúc ADN của tế bào. Đồng thời, phúc bồn tử cũng được xếp hàng thượng phẩm trong biểu đồ đánh giá thực phẩm, nhiều lợi ích hơn cả việt quất, dâu tây, nho đen, cherry… vì ngoài các vitamin, khoáng chất, nó còn là nguồn chất xơ giúp ổn định đường huyết nên rất tốt cho bệnh nhân tiểu đường.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Ngoài ra, phúc bồn tử còn cải thiện hệ thống tim mạch, ngăn ngừa bệnh gút; điều chỉnh kinh nguyệt, tăng khả năng sinh lý ở nam và nữ; giúp cơ thể tăng khả năng miễn dịch, chống viêm nhiễm; cải thiện chức năng não.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Phúc bồn tử đen hữu cơ 85%, Đường phèn hữu cơ Quảng Ngãi 15%.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thể tích:</span>&nbsp;500ml</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;06 tháng sau khi đã mở nắp.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Dùng làm thức uống giải khát, có thể uống nguyên chất (ướp lạnh) và cho thêm đá, hoặc pha với nước tỷ lệ 1:1 hoặc 1:2 để có được ly nước Phúc Bồn Tử ngon tuyệt hảo, đậm đà hương vị Phúc Bồn Tử Đà Lạt. Dùng từ 1-2 ly/ngày.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Để nơi khô mát, thoáng mát, tránh ánh nắng trực tiếp. Đậy nắp kín khi không sử dụng</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:</span>&nbsp;Sản phẩm được sản xuất tại Việt Nam và đạt chứng nhận hữu cơ tiêu chuẩn JAS của Nhật Bản.</p>', NULL, 'nuoc-tinh-chat-phuc-bon-tu-den-langbianf-500ml.png', 700000, 4, 0, NULL, NULL, 1, 1, 'nuoc-tinh-chat-phuc-bon-tu-den-langbianf-500ml', NULL, '2020-10-27 21:19:06', '2020-10-27 21:19:06'),
(31, 4, 10, 'SỮA BÒ VỊ SOCOLA', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Sữa bò hữu cơ vị socola Koita đến từ những chú bò được chăn thả tự do và ăn cỏ hữu cơ tại trang trại chuẩn organic ở Ý, kết hợp với cacao hữu cơ tạo nên hương vị thơm ngon. Không có kháng sinh, không có hormone, và hoàn toàn không có chất bảo quản. Sản phẩm còn chứa thêm vitamin A và D3, góp phần bổ sung thêm dưỡng chất cho cơ thể.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Sữa bò hữu cơ ít béo (85%), Đường nâu hữu cơ, Cacao hữu cơ (3%), Hương vị socola tự nhiên, Vitamin A, Vitamin D3, 1,55% chất béo sữa, tối thiểu 8,5% sữa khô đã tách béo.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thể tích thực:</span>&nbsp;200ml</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;9 tháng kể từ ngày sản xuất.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Sử dụng trực tiếp sau khi mở nắp.<br style=\"outline: 0px;\"><br style=\"outline: 0px;\">* Không sử dụng sản phẩm cho người dị ứng với thành phần sữa từ động vật.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Bảo quản nơi khô ráo thoáng mát ở nhiệt độ phòng. Tránh ánh sáng trực tiếp, đảm bảo vệ sinh an toàn thực phẩm. Sau khi mở nắp, bảo quản lạnh (dưới 4 độ C) và dùng trong vòng 3 hoặc 4 ngày.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:</span>&nbsp;Sản phẩm được sản xuất tại Ý và đạt chứng nhận hữu cơ tiêu chuẩn EU của châu Âu.</p>', NULL, 'sua-bo-vi-socola-koita-200ml.png', 39000, 3, 0, NULL, NULL, 1, 1, 'sua-bo-vi-socola', NULL, '2020-10-28 03:10:50', '2020-10-29 10:49:28'),
(32, 4, 10, 'SỮA BÒ NGUYÊN KEM KOITA 200ML', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; text-align: justify;\">Sữa bò hữu cơ nguyên kem Koita đến từ những chú bò được chăn thả tự do và ăn cỏ hữu cơ tại trang trại chuẩn organic ở Ý. Không có kháng sinh, không có hormone, và hoàn toàn không có chất bảo quản. Sản phẩm còn chứa thêm vitamin A và D3, góp phần bổ sung thêm dưỡng chất cho cơ thể.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Sữa bò hữu cơ nguyên kem, Vitamin A, Vitamin D3, 3,6% chất béo sữa, tối thiểu 8,5% sữa khô đã tách béo.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thể tích thực:</span>&nbsp;200ml</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;8 tháng kể từ ngày sản xuất.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Sử dụng trực tiếp sau khi mở nắp.<br style=\"outline: 0px;\"><br style=\"outline: 0px;\">* Không sử dụng sản phẩm cho người dị ứng với thành phần sữa từ động vật.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Bảo quản nơi khô ráo thoáng mát ở nhiệt độ phòng. Tránh ánh sáng trực tiếp, đảm bảo vệ sinh an toàn thực phẩm. Sau khi mở nắp, bảo quản lạnh (dưới 4 độ C) và dùng trong vòng 3 hoặc 4 ngày.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:</span>&nbsp;Sản phẩm được sản xuất tại Ý và đạt chứng nhận hữu cơ tiêu chuẩn EU của châu Âu, chứng nhận hữu cơ ICEA của Ý.</p><div><br style=\"color: rgb(51, 51, 51); font-family: latoregular, sans-serif;\"></div>', '<div class=\"product_readmore\" data-readmore=\"\" aria-expanded=\"true\" id=\"rmjs-1\" style=\"outline: 0px; width: 343.2px; transition: height 100ms ease 0s; overflow: hidden; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; max-height: none; height: 610px;\"><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-align: justify;\"><br></p></div>', 'sua-bo-nguyen-kem-koita-200ml.png', 36000, 3, 0, NULL, NULL, 1, 1, 'sua-bo-nguyen-kem-koita-200ml', NULL, '2020-10-28 03:12:46', '2020-10-28 03:12:46'),
(33, 4, 10, 'SỮA BÒ VỊ DÂU ÍT BÉO KOITA 200ML', '<div class=\"product_readmore\" data-readmore=\"\" aria-expanded=\"true\" id=\"rmjs-1\" style=\"outline: 0px; width: 343.2px; transition: height 100ms ease 0s; overflow: hidden; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; max-height: none; height: 750px;\"><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-align: justify;\">Sữa bò hữu cơ vị dâu Koita đến từ những chú bò được chăn thả tự do và ăn cỏ hữu cơ tại trang trại chuẩn organic ở Ý, kết hợp với dâu tây hữu cơ tạo nên hương vị thơm ngon. Không có kháng sinh, không có hormone, và hoàn toàn không có chất bảo quản. Sản phẩm còn chứa thêm vitamin A và D3, góp phần bổ sung thêm dưỡng chất cho cơ thể.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Sữa bò hữu cơ ít béo (90%), Đường nâu hữu cơ, Dâu tây hữu cơ (3%), Hương dâu tự nhiên, Vitamin A, Vitamin D3, Chất điều chỉnh độ axit: E500 (0.02%); 1,55% chất béo sữa, tối thiểu 8,5% sữa khô đã tách béo.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thể tích thực:</span>&nbsp;200ml</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;9 tháng kể từ ngày sản xuất.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Sử dụng trực tiếp sau khi mở nắp, lắc đều trước khi uống.<br style=\"outline: 0px;\"><br style=\"outline: 0px;\">* Không sử dụng sản phẩm cho người dị ứng với sữa và các thành phần của sữa (bao gồm cả Lactose).<br style=\"outline: 0px;\"><br style=\"outline: 0px;\">* Không phù hợp với trẻ sơ sinh, trừ khi có tư vấn từ bác sĩ.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Bảo quản nơi khô ráo thoáng mát ở nhiệt độ phòng. Tránh ánh sáng trực tiếp, đảm bảo vệ sinh an toàn thực phẩm. Sau khi mở nắp, bảo quản lạnh (dưới 4 độ C) và dùng trong vòng 3 hoặc 4 ngày.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:</span>&nbsp;Sản phẩm được sản xuất tại Ý và đạt chứng nhận hữu cơ tiêu chuẩn EU của châu Âu.</p></div>', NULL, 'sua-bo-vi-dau-it-beo-koita-200ml.jpg', 38000, 3, 0, NULL, NULL, 1, 1, 'sua-bo-vi-dau-it-beo-koita-200ml', NULL, '2020-10-28 03:18:27', '2020-10-28 03:18:27'),
(34, 4, 10, 'SỮA TƯƠI VINAMILK 1L', '<div class=\"product_readmore\" data-readmore=\"\" aria-expanded=\"true\" id=\"rmjs-1\" style=\"outline: 0px; width: 343.2px; transition: height 100ms ease 0s; overflow: hidden; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; max-height: none; height: 710px;\"><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-align: justify;\">Sữa tươi hữu cơ không đường Vinamilk được sản xuất từ nguồn sữa tươi sạch của giống bò Organic chọn lọc theo tiêu chuẩn hữu cơ nghiêm ngặt. Quy trình chăn nuôi, chế biến và sản xuất sữa đảm bảo đạt các tiêu chuẩn hữu cơ của Châu Âu. Sản phẩm được xử lý theo công nghệ tiệt trùng hiện đại ở nhiệt độ thích hợp, giúp giữ được tốt chất lượng vitamin và khoáng chất từ sữa bò tươi nguyên chất.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">Sữa tươi 100% Organic với tiêu chuẩn \"3 Không\":</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">+ Không sử dụng hoóc-môn tăng trưởng cho bò.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">+ Không dư lượng thuốc kháng sinh.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">+ Không thuốc trừ sâu.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Sữa tươi hữu cơ 100%.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thể tích thực:</span>&nbsp;1L.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;In trên bao bì.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Ngon hơn khi uống lạnh. Lắc đều mỗi khi sử dụng.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Bảo quản nơi khô ráo và thoáng mát. Sau khi mở hộp, đậy kín và bảo quản lạnh (6 - 8 độ C) và sử dụng hết trong vòng 3 ngày.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:&nbsp;</span>Sản phẩm được sản xuất tại Việt Nam và đạt chứng nhận hữu cơ theo tiêu chuẩn EU.</p></div>', NULL, 'sua-tuoi-vinamilk-1l.png', 55000, 3, 0, NULL, NULL, 1, 1, 'sua-tuoi-vinamilk-1l', NULL, '2020-10-28 03:19:58', '2020-10-28 03:19:58'),
(35, 0, 11, 'Sữa chua Hữu cơ Ít đường Vinamilk 100g', '<div class=\"product_readmore\" data-readmore=\"\" aria-expanded=\"true\" id=\"rmjs-1\" style=\"outline: 0px; width: 343.2px; transition: height 100ms ease 0s; overflow: hidden; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; max-height: none; height: 705px;\"><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-align: justify;\">Sữa chua hữu cơ ít đường Vinamilk là sản phẩm làm từ sữa tươi hữu cơ. Sản phẩm giúp cung cấp nhiều loại dưỡng chất cần thiết cho cơ thể như protein, canxi và vitamin D3, giúp hỗ trợ hệ tiêu hóa và xương khớp luôn khỏe mạnh.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">Sử dụng sản phẩm hàng ngày giúp cho hệ tiêu hóa của bạn luôn khỏe mạnh và luôn tràn đầy sức sống để sẵn sàng cho các hoạt động mỗi ngày.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Sữa tươi hữu cơ (86,5%), Đường hữu cơ (7%), Sữa bột hữu cơ, Tinh bột thực phẩm hữu cơ, Whey bột hữu cơ, Chất ổn định (gôm đậu carob hữu cơ, pectin), men Streptococcus thermophilus và Lactobacillus bulgaricus.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">* Giảm 30% đường so với sữa chua có đường.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Khối lượng tịnh:</span>&nbsp;400g (vỉ 4 hộp x 100g).</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;In trên bao bì.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Sử dụng ngay sau khi mở hộp. Có thể dùng pha đồ uống, salad, hay dùng cùng ngũ cốc.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\">* Không sử dụng sản phẩm với người dị ứng thành phần sữa động vật trong sản phẩm.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Bảo quản lạnh ở 6 - 8 độ C.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:&nbsp;</span>Sản phẩm được sản xuất tại Việt Nam và đạt chứng nhận hữu cơ theo tiêu chuẩn EU.</p></div>', NULL, 'sua-chua-it-duong-vinamilk-100g.png', 14000, 3, 0, NULL, NULL, 1, 1, 'sua-chua-huu-co-it-duong-vinamilk-100g', NULL, '2020-10-28 03:22:01', '2020-10-28 03:22:01'),
(36, 4, 11, 'KEM SOCOLA OOB 120ML', '<div class=\"product_readmore\" data-readmore=\"\" aria-expanded=\"true\" id=\"rmjs-1\" style=\"outline: 0px; width: 343.2px; transition: height 100ms ease 0s; overflow: hidden; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; max-height: none; height: 705px;\"><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); text-align: justify;\">Kem Socola Hữu cơ OOB 120ml là loại kem sô cô la siêu mềm mịn được tạo thành từ sô cô la đen hữu cơ Belgian tuyệt hảo cùng sữa tươi hữu cơ New Zealand.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Sữa nguyên chất hữu cơ, Kem hữu cơ hoặc Kem tái tạo hữu cơ, Đường thô hữu cơ, Sô cô la đen hữu cơ 7% (Cocoa Mass hữu cơ, Đường mía hữu cơ, Bơ cacao hữu cơ, Chất nhũ hóa (Lecithin đậu nành)), Nước, Si rô glucose hữu cơ, Ca cao hữu cơ 2%, Dầu hoa hướng dương hữu cơ, Chất nhũ hóa (Lecithin đậu nành), Chất ổn định (Gôm đậu Locust hữu cơ, Carrageenan).</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thể tích thực:&nbsp;</span>120ml.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;18 tháng kể từ ngày sản xuất.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Dùng trực tiếp sau khi mở bao bì. Có thể kết hợp với các loại bánh, trái cây tùy thích.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); text-align: justify;\">* Không dùng sản phẩm với người dị ứng sữa và đậu nành. Sản phẩm có thể chứa hạt cây và đậu phộng.<br style=\"outline: 0px;\">* Kem có chứa 12,5% chất béo sữa.<br style=\"outline: 0px;\">* Sản phẩm không chứa gluten.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Giữ đông lạnh đến -18 độ C hoặc lạnh hơn.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:</span>&nbsp;Sản phẩm được sản xuất tại New Zealand và đạt chứng nhận hữu cơ tiêu chuẩn AsureQuality của New Zealand.</p></div>', NULL, 'kem-socola-oob-120ml.png', 77000, 3, 0, NULL, NULL, 1, 1, 'kem-socola-oob-120ml', NULL, '2020-10-28 03:22:21', '2020-10-28 03:53:00'),
(37, 4, 11, 'Kem dâu hữu cơ OOB 120ml', NULL, NULL, 'kem-dau-oob-120ml.png', 77000, 3, 1, NULL, 999999, 1, 1, 'kem-dau-huu-co-oob-120ml', NULL, '2020-10-28 03:55:59', '2020-11-15 06:06:28'),
(38, 4, 11, 'Kem Vanilla Hữu cơ OOB 120ml', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Kem Vanilla Hữu cơ OOB 120ml là loại kem trông đơn giản nhưng lại không kém phần đẳng cấp. Chỉ sử dụng những hạt vanilla hữu cơ hảo hạng nhất cùng với sữa hữu cơ và kem hữu cơ. Thưởng thức cùng với&nbsp;<a href=\"https://www.organica.vn/trai-cay/phuc-bon-tu-huu-co-hon-hop-mua-350g\" style=\"outline: 0px; color: rgb(34, 178, 76);\">Phúc bồn tử hữu cơ hỗn hợp Mùa</a>&nbsp;lại càng ngon hơn.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Sữa nguyên chất hữu cơ, Kem hữu cơ hoặc Kem tái tạo hữu cơ, Đường thô hữu cơ, Nước, Sữa bột không kem hữu cơ, Chiết xuất vanilla tự nhiên, Chất nhũ hóa (Lecithin đậu nành), Chất ổn định (Gôm đậu locust hữu cơ, Gôm gua hữu cơ, Carrageenan), Hạt vanilla hữu cơ.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thể tích thực:&nbsp;</span>120ml.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;18 tháng kể từ ngày sản xuất.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Dùng trực tiếp sau khi mở bao bì. Có thể kết hợp với các loại bánh, trái cây tùy thích.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">* Không dùng sản phẩm với người dị ứng sữa và đậu nành. Sản phẩm có thể chứa hạt cây và đậu phộng.<br style=\"outline: 0px;\">* Kem có chứa 12,5% chất béo sữa.<br style=\"outline: 0px;\">* Sản phẩm không chứa gluten.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;Giữ đông lạnh đến -18 độ C hoặc lạnh hơn.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ - Chứng nhận:</span>&nbsp;Sản phẩm được sản xuất tại New Zealand và đạt chứng nhận hữu cơ tiêu chuẩn AsureQuality của New Zealand.</p>', NULL, 'kem-vanilla-oob-120ml.png', 77000, 3, 1, NULL, 999999, 1, 1, 'kem-vanilla-huu-co-oob-120ml', NULL, '2020-10-28 03:57:17', '2020-11-15 06:06:27'),
(39, 4, 12, 'Phô mai Tươi Mozzarella 4P\'s 125g', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Mozzarella là một trong những loại phô mai tươi truyền thống và phổ biến nhất từ Ý. Nó có một vị tươi và vị sữa. Với kết cấu thông minh, nó mềm và xốp. Mozzarella ăn kèm hoàn hảo với mì ống và pizza. Đó là thành phần thiết yếu cho thực phẩm Ý.</p><p class=\"p1\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Sữa bò tươi, men dịch vị, men Lactic</p><p class=\"p1\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Khối lượng tịnh:</span>&nbsp;125g</p><p class=\"p1\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;7 ngày kể từ Ngày sản xuất. Dùng ngay sau khi mở bọc.</p><p class=\"p1\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Từ món Salad đơn giản đến món ăn phức tạp hơn là mì ống, Mozzarella có thể được thưởng thức cùng với món khai vị, món chính hay đơn giản hơn là dùng riêng với một chút muối.</p><p class=\"p1\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;5 - 6 độ C.</p><p class=\"p1\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ:</span>&nbsp;Sản phầm được sản xuất tại Đà Lạt, Việt Nam.</p>', NULL, 'pho-mai-tuoi-mozzarella-4ps-125g.png', 88000, 1, 1, NULL, 999999, 1, 1, 'pho-mai-tuoi-mozzarella-4ps-125g', NULL, '2020-10-28 03:59:15', '2020-11-15 06:06:26'),
(40, 4, 12, 'Phô mai Hun khói Scamorza 4P\'s 115g', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\">Scamorza là một loại phô mai nổi tiếng ở miền Nam nước Ý. Nó có thể được thay thế cho phô mai Mozzarella trong nhiều món ăn, nhưng hương vị đậm đà hơn và chiếm ưu thế hơn. Khi chiên, nó sẽ có lớp vỏ giòn và tan ngay trong miệng.</p><p class=\"p1\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Thành phần:</span>&nbsp;Sữa bò tươi, men dịch vị, men Lactic</p><p class=\"p1\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Khối lượng tịnh:</span>&nbsp;115g</p><p class=\"p1\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hạn sử dụng:</span>&nbsp;60 ngày kể từ Ngày sản xuất</p><p class=\"p1\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Gợi ý sử dụng:</span>&nbsp;Scamorza có thể ăn trực tiếp, nhưng mùi vị sẽ ngon hơn nhiều khi chiên hoặc nướng.</p><p class=\"p1\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Hướng dẫn bảo quản:</span>&nbsp;3 - 6 độ C</p><p class=\"p1\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 25px 0px 0px; color: rgb(51, 51, 51); font-family: latoregular, sans-serif; text-align: justify;\"><span style=\"outline: 0px; font-weight: bolder;\">Xuất xứ:</span>&nbsp;Sản phẩm được sản xuất tại Đà Lạt, Việt Nam.</p>', NULL, 'pho-mai-hun-khoi-scamorza-4ps-115g.png', 88000, 1, 1, NULL, 999999, 1, 1, 'pho-mai-hun-khoi-scamorza-4ps-115g', NULL, '2020-10-28 04:02:08', '2020-11-15 06:06:26'),
(41, 4, 10, 'Sữa MiLo', '<p><span style=\"color: rgb(74, 74, 74); font-family: KoHo; font-size: 13px;\">Nước, đường, sữa bột tách kem (skimmed milk powder), Protomalt 1.4% (chiết xuất từ mầm lúa mạch (extract from malted barley)), sirô glucose, dầu bơ, dầu thực vật, bột cacao, bột whey, các khoáng chất (magnesi carbonat, dicalci phosphat, sắt pyrophosphat), chất nhũ hoá lecithin 332(i) – chiết xuất từ đậu nành (soya lechithin), các vitamin (niacin, biotin, calci pantothena, vitamin B6, B1, B2), chất ổn định 407, chất tạo ngọt tổng hợp 950, 995) và hương vani tổng hợp</span><br></p>', '<p><span style=\"color: rgb(51, 51, 51); font-family: KoHo; text-align: justify;\">được nghiên cứu và phát triển bởi Nestlé Thuỵ Sĩ, là sự kết hợp hoàn hảo từ hương vị thơm ngon của ca cao cùng&nbsp;nguồn dưỡng chất&nbsp;từ sữa, mầm lúa mạch nguyên cám, các vitamin, khoáng chất.</span><br></p>', 'thuc-uong-dd-milo-180ml-loc-2-org.jpg', 7000, 3, 0, NULL, NULL, 1, 1, 'sua-milo', '6845432067', '2020-11-01 04:06:23', '2020-11-15 06:06:25');

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
(4, 'Minh Trần', NULL, 'nmtran68@gmail.com', NULL, NULL, NULL, 'facebook', '1522222584639978', NULL, 1, 0, NULL, '2020-11-06 05:41:53', '2020-11-06 05:41:53');

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
  ADD PRIMARY KEY (`quangcao_id`);

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
  MODIFY `id_blog` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  MODIFY `id_hd` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT cho bảng `counpon`
--
ALTER TABLE `counpon`
  MODIFY `counpon_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

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
-- AUTO_INCREMENT cho bảng `loaiblog`
--
ALTER TABLE `loaiblog`
  MODIFY `id_loaiblog` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_loaisp` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `lohang`
--
ALTER TABLE `lohang`
  MODIFY `id_lohang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id_thuonghieu` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nhomsp`
--
ALTER TABLE `nhomsp`
  MODIFY `id_nhomsp` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `quangcao_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
