<?php
require_once '../models/Question.php';
$questions = array();

// Thêm câu hỏi vào mảng
$question1 = new Question(1, 'Người ngồi trên xe mô tô hai bánh, xe mô tô ba bánh, xe gắn máy khi tham gia giao thông có được sử dụng ô khi trời mưa hay không?', 'A. Được sử dụng.', 'B. Chỉ người ngồi sau được sử dụng.', 'C. Không được sử dụng.', 'D. Được sử dụng nếu không có áo mưa.', 3);
$question2 = new Question(2, 'Người điều khiển xe mô tô hai bánh, ba bánh, xe gắn máy có được phép sử dụng xe để kéo hoặc đẩy các phương tiện khác khi tham gia giao thông không?', 'A. Được phép', 'B. Nếu phương tiện được kéo, đẩy có khối lượng nhỏ hơn phương tiện của mình', 'C. Tùy trường hợp', 'D. Không được phép', 4);
$question3 = new Question(3, 'Các phương tiện tham gia giao thông đường bộ (kể cả những xe có quyền ưu tiên) đều phải dừng lại bên phải đường của mình và trước vạch “dừng xe” tại các điểm giao cắt giữa đường bộ và đường sắt khi có báo hiệu dừng nào dưới đây?', 'A. Hiệu lệnh của nhân viên gác chắn.', 'B. Đèn đỏ sáng nháy, cờ đỏ, biển đỏ.', 'C. Còi, chuông kêu, chắn đã đóng.', 'D. Tất cả các ý trên.', 4);
$question4 = new Question(4, 'Người đủ 16 tuổi được điều khiển các loại xe nào dưới đây?', 'A. Xe mô tô 2 bánh có dung tích xi lanh từ 50 cm³ trở lên.', 'B. Xe gắn máy có dung tích xi lanh dưới 50 cm³.', 'C. Xe ô tô tải dưới 3,5 tấn; xe chở người đến 9 chỗ ngồi.', 'D. Tất cả các ý nêu trên.', 2);
$question5 = new Question(5, 'Khi đang lên dốc người ngồi trên xe mô tô có được kéo theo người đang điều khiển xe đạp hay không?', 'A. Chỉ được phép nếu cả hai đội mũ bảo hiểm.', 'B. Không được phép.', 'C. Chỉ được thực hiện trên đường thật vắng.', 'D. Chỉ được phép khi người đi xe đạp đã quá mệt.', 2);
$question6 = new Question(6, 'Khi lái xe trong khu vực đô thị, bạn nên:', 'A. Tăng tốc độ để vượt qua các xe khác', 'B. Giữ tốc độ ổn định và tuân thủ quy tắc giao thông', 'C. Sử dụng còi để cảnh báo người đi bộ', 'D. Đi ngược chiều trên đường một chiều', 2);
$question7 = new Question(7, 'Biển báo nào chỉ dẫn nơi đỗ xe?', 'A. Biển 1', 'B. Biển 2', 'C. Biển 3', 'D. Biển 4', 1);
$question8 = new Question(8, 'Khi gặp biển báo nguy hiểm, bạn nên:', 'A. Tăng tốc độ để nhanh chóng vượt qua', 'B. Quan sát và tuân thủ quy tắc giao thông', 'C. Không quan tâm đến biển báo', 'D. Sử dụng điện thoại di động', 2);
$question9 = new Question(9, 'Biển báo nào chỉ dẫn hướng đi chung?', 'A. Biển 1', 'B. Biển 2', 'C. Biển 3', 'D. Biển 4', 4);
$question10 = new Question(10, 'Khi lái xe vào ban đêm, bạn nên:', 'A. Sử dụng đèn chiếu sáng', 'B. Tắt đèn định vị GPS', 'C. Tăng tốc độ để nhanh chóng đến nơi', 'D. Không chú ý đến tình hình giao thông', 1);
$question11 = new Question(11, 'Khi đèn xanh tắt và đèn đỏ sáng, bạn nên:', 'A. Tăng tốc độ để vượt qua đèn đỏ', 'B. Dừng lại và chờ đèn xanh', 'C. Tiếp tục đi qua ngay', 'D. Không cần chú ý đến tình hình giao thông', 2);
$question12 = new Question(12, 'Khi gặp biển báo cấm đi ngược chiều, bạn nên:', 'A. Tiếp tục đi ngược chiều nếu không có xe khác', 'B. Đi ngược chiều nếu muốn', 'C. Dừng lại và không được đi ngược chiều', 'D. Chú ý đến biển báo và đi ngược chiều', 3);
$question13 = new Question(13, 'Khi lái xe trên đường trơn, bạn nên:', 'A. Tăng tốc độ để đi qua nhanh', 'B. Giữ tốc độ ổn định và tuân thủ quy tắc giao thông', 'C. Sử dụng điện thoại di động', 'D. Không cần chú ý đến tình hình giao thông', 2);
$question14 = new Question(14, 'Biển báo nào chỉ dẫn khu vực cấm dừng xe?', 'A. Biển 1', 'B. Biển 2', 'C. Biển 3', 'D. Biển 4', 3);
$question15 = new Question(15, 'Khi lái xe trên đường cao tốc, bạn nên:', 'A. Giảm tốc độ để đảm bảo an toàn', 'B. Tăng tốc độ để vượt qua xe khác', 'C. Không chú ý đến biển báo', 'D. Sử dụng đèn chiếu sáng', 1);
$question16 = new Question(16, 'Khi lái xe trên đường có nhiều làn đường, bạn nên:', 'A. Luôn luôn đi ở làn đường bên trái', 'B. Chọn làn đường phù hợp với hướng di chuyển', 'C. Đi ngược chiều để tiết kiệm thời gian', 'D. Không chú ý đến làn đường', 2);
$question17 = new Question(17, 'Khi gặp biển báo hạn chế tốc độ, bạn nên:', 'A. Tăng tốc độ để nhanh chóng vượt qua biển báo', 'B. Tuân thủ giới hạn tốc độ được quy định', 'C. Không chú ý đến biển báo', 'D. Sử dụng điện thoại di động', 2);
$question18 = new Question(18, 'Khi lái xe trên đường có đèn tín hiệu giao thông, bạn nên:', 'A. Không chú ý đèn tín hiệu và tiếp tục đi qua', 'B. Chú ý đèn tín hiệu và tuân thủ quy tắc giao thông', 'C. Tăng tốc độ để vượt qua đèn đỏ', 'D. Không cần chú ý đến tình hình giao thông', 2);
$question19 = new Question(19, 'Khi gặp biển báo "Cấm đi ngược chiều," bạn nên:', 'A. Tiếp tục đi ngược chiều nếu cần thiết', 'B. Đi theo chiều chỉ định của biển báo', 'C. Không chú ý đến biển báo', 'D. Sử dụng còi để cảnh báo', 2);
$question20 = new Question(20, 'Khi lái xe trên đường có điểm giao nhau, bạn nên:', 'A. Tăng tốc độ để nhanh chóng đi qua', 'B. Giảm tốc độ và quan sát trước khi đi qua', 'C. Không cần chú ý đến tình hình giao thông', 'D. Sử dụng còi để cảnh báo', 2);
$question21 = new Question(21, 'Biển báo nào chỉ dẫn hướng đi chung?', 'A. Biển 1', 'B. Biển 2', 'C. Biển 3', 'D. Biển 4', 4);
$question22 = new Question(22, 'Khi lái xe vào ban đêm, bạn nên:', 'A. Sử dụng đèn chiếu sáng', 'B. Tắt đèn định vị GPS', 'C. Tăng tốc độ để nhanh chóng đến nơi', 'D. Không chú ý đến tình hình giao thông', 1);
$question23 = new Question(23, 'Khi đèn xanh tắt và đèn đỏ sáng, bạn nên:', 'A. Tăng tốc độ để vượt qua đèn đỏ', 'B. Dừng lại và chờ đèn xanh', 'C. Tiếp tục đi qua ngay', 'D. Không cần chú ý đến tình hình giao thông', 2);
$question24 = new Question(24, 'Khi gặp biển báo cấm đi ngược chiều, bạn nên:', 'A. Tiếp tục đi ngược chiều nếu không có xe khác', 'B. Đi ngược chiều nếu muốn', 'C. Dừng lại và không được đi ngược chiều', 'D. Chú ý đến biển báo và đi ngược chiều', 3);
$question25 = new Question(25, 'Khi lái xe trên đường trơn, bạn nên:', 'A. Tăng tốc độ để đi qua nhanh', 'B. Giữ tốc độ ổn định và tuân thủ quy tắc giao thông', 'C. Sử dụng điện thoại di động', 'D. Không cần chú ý đến tình hình giao thông', 2);

$questions[] = $question1;
$questions[] = $question2;
$questions[] = $question3;
$questions[] = $question4;
$questions[] = $question5;
$questions[] = $question6;
$questions[] = $question7;
$questions[] = $question8;
$questions[] = $question9;
$questions[] = $question10;
$questions[] = $question11;
$questions[] = $question12;
$questions[] = $question13;
$questions[] = $question14;
$questions[] = $question15;
$questions[] = $question16;
$questions[] = $question17;
$questions[] = $question18;
$questions[] = $question19;
$questions[] = $question20;
$questions[] = $question21;
$questions[] = $question22;
$questions[] = $question23;
$questions[] = $question24;
$questions[] = $question25;

// Chuyển đổi mảng thành định dạng JSON
$jsonData = json_encode($questions);

// Thiết lập tiêu đề HTTP để định dạng dữ liệu trả về là JSON
header('Content-Type: application/json');

// Trả về dữ liệu JSON
echo $jsonData;