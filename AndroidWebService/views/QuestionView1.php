<?php
require_once '../models/Question.php';
$questions = array();

// Thêm câu hỏi vào mảng
$question1 = new Question(1, 'Đường mà trên đó phương tiện tham gia giao thông được các phương tiện giao thông đến từ các hướng khác nhường đường khi qua nơi đường giao nhau, được cắm biển báo hiệu đường ưu tiên là loại đường gì?', 'A. Đường không ưu tiên', 'B. Đường tỉnh lộ', 'C. Đường quốc lộ', 'D. Đường ưu tiên', 4);
$question2 = new Question(2, 'Người lái xe sử dụng đèn như thế nào khi lái xe trong khu đô thị và đông dân cư vào ban đêm?', 'A. Bất cứ đèn nào miễn là mắt nhìn rõ phía trước', 'B. Chỉ bật đèn chiếu xa (đèn pha) khi không nhìn rõ đường', 'C. Đèn chiếu xa (đèn pha) khi đường vắng, đèn pha chiếu gần (đèn cốt) khi có xe đi ngược chiều', 'D. Đèn chiếu gần (đèn cốt)', 4);
$question3 = new Question(3, 'Bạn đang lái xe phía trước có một xe cảnh sát giao thông không phát tín hiệu ưu tiên bạn có được phép vượt hay không?', 'A. Không được vượt', 'B. Được vượt khi đang đi trên cầu', 'C. Được phép vượt khi đi qua nơi giao nhau có ít phương tiện cùng tham gia giao thông', 'D. Được vượt khi đảm bảo an toàn', 4);
$question4 = new Question(4, 'Bạn đang lái xe phía trước có một xe cứu thương đang phát tín hiệu ưu tiên bạn có được phép vượt hay không?', 'A. Không được vượt', 'B. Được vượt khi đang đi trên cầu', 'C. Được phép vượt khi đi qua nơi giao nhau có ít phương tiện cùng tham gia giao thông', 'D. Được vượt khi đảm bảo an toàn', 1);
$question5 = new Question(5, 'Người điều khiển xe mô tô hai bánh, ba bánh, xe gắn máy có được phép sử dụng xe để kéo hoặc đẩy các phương tiện khác khi tham gia giao thông không?', 'A. Được phép', 'B. Nếu phương tiện được kéo, đẩy có khối lượng nhỏ hơn phương tiện của mình', 'C. Tùy trường hợp', 'D. Không được phép', 4);
$question6 = new Question(6, 'Khi điều khiển xe mô tô hai bánh, xe mô tô ba bánh, xe gắn máy, những hành vi nào không được phép?', 'A. Buông một tay; sử dụng xe để chở người hoặc hàng hóa; để chân chạm xuống đất khi khởi hành.', 'B. Buông cả hai tay; sử dụng xe để kéo, đẩy xe khác, vật khác; sử dụng chân chống của xe quệt xuống đường khi xe đang chạy.', 'C. Đội mũ bảo hiểm; chạy xe đúng tốc độ quy định và chấp hành đúng quy tắc giao thông đường bộ', 'D. Chở người ngồi sau dưới 16 tuổi', 2);
$question7 = new Question(7, 'Người ngồi trên xe mô tô hai bánh, xe mô tô ba bánh, xe gắn máy khi tham gia giao thông có được mang, vác vật cồng kềnh hay không?', 'A. Được mang, vác tùy trường hợp cụ thể.', 'B. Không được mang, vác.', 'C. Được mang, vác nhưng phải đảm bảo an toàn.', 'D. Được mang, vác tùy theo sức khỏe của bản thân.', 2);
$question8 = new Question(8, 'Người ngồi trên xe mô tô hai bánh, xe mô tô ba bánh, xe gắn máy khi tham gia giao thông có được bám, kéo hoặc đẩy các phương tiện khác không?', 'A. Được phép.', 'B. Được bám trong trường hợp phương tiện của mình bị hỏng.', 'C. Được kéo, đẩy trong trường hợp phương tiện khác bị hỏng.', 'D. Không được phép.', 4);
$question9 = new Question(9, 'Người ngồi trên xe mô tô hai bánh, xe mô tô ba bánh, xe gắn máy khi tham gia giao thông có được sử dụng ô khi trời mưa hay không?', 'A. Được sử dụng.', 'B. Chỉ người ngồi sau được sử dụng.', 'C. Không được sử dụng.', 'D. Được sử dụng nếu không có áo mưa.', 3);
$question10 = new Question(10, 'Khi đang lên dốc người ngồi trên xe mô tô có được kéo theo người đang điều khiển xe đạp hay không?', 'A. Chỉ được phép nếu cả hai đội mũ bảo hiểm.', 'B. Không được phép.', 'C. Chỉ được thực hiện trên đường thật vắng.', 'D. Chỉ được phép khi người đi xe đạp đã quá mệt.', 2);
$question11 = new Question(11, 'Người đủ 16 tuổi được điều khiển các loại xe nào dưới đây?', 'A. Xe mô tô 2 bánh có dung tích xi lanh từ 50 cm³ trở lên.', 'B. Xe gắn máy có dung tích xi lanh dưới 50 cm³.', 'C. Xe ô tô tải dưới 3,5 tấn; xe chở người đến 9 chỗ ngồi.', 'D. Tất cả các ý nêu trên.', 2);
$question12 = new Question(12, 'Khi sử dụng giấy phép lái xe đã khai báo mất để điều khiển phương tiện cơ giới đường bộ, ngoài việc bị thu hồi giấy phép lái xe, chịu trách nhiệm trước pháp luật, người lái xe không được cấp giấy phép lái xe trong thời gian bao nhiêu năm?', 'A. 02 năm.', 'B. 03 năm.', 'C. 05 năm.', 'D. 04 năm.', 2);
$question13 = new Question(13, 'Bạn đang lái xe trong khu vực đô thị từ 22 giờ đến 5 giờ sáng hôm sau và cần vượt một xe khác, bạn cần báo hiệu như thế nào để đảm bảo an toàn giao thông?', 'A. Phải báo hiệu bằng đèn hoặc còi.', 'B. Chỉ được báo hiệu bằng còi.', 'C. Phải báo hiệu bằng cả còi và đèn.', 'D. Chỉ báo hiệu bằng đèn.', 1);
$question14 = new Question(14, 'Khi tránh xe đi ngược chiều, các xe phải nhường đường như thế nào là đúng quy tắc giao thông?', 'A. Nơi đường hẹp chỉ đủ cho một xe chạy và có chỗ tránh xe thì xe nào ở gần chỗ tránh hơn phải vào vị trí tránh, nhường đường cho xe kia đi.', 'B. Xe xuống dốc phải nhường đường cho xe đang lên dốc; xe nào có chướng ngại vật phía trước phải nhường đường cho xe không có chướng ngại vật đi trước.', 'C. Xe lên dốc phải nhường đường cho xe xuống dốc; xe nào không có chướng ngại vật đi phía trước phải nhường đường cho xe có chướng ngại vật đi trước.', 'D. Cả ý 1 và ý 2.', 2);
$question15 = new Question(15, 'Người lái xe phải giảm tốc độ thấp hơn tốc độ tối đa cho phép (có thể dừng lại một cách an toàn) trong trường hợp nào dưới đây?', 'A. Khi có báo hiệu cảnh báo nguy hiểm hoặc có chướng ngại vật trên đường; khi chuyển hướng xe chạy hoặc tầm nhìn bị hạn chế; khi qua nơi đường giao nhau, nơi đường bộ giao nhau với đường sắt; đường vòng; đường có địa hình quanh co, đèo dốc.', 'B. Khi qua cầu, cống hẹp; khi lên gần đỉnh dốc, khi xuống dốc, khi qua trường học, khu đông dân cư, khu vực đang thi công trên đường bộ; hiện trường xảy ra tai nạn giao thông.', 'C. Khi điều khiển xe vượt xe khác trên đường quốc lộ, đường cao tốc.', 'D. Cả ý 1 và ý 2.', 4);
$question16 = new Question(16, 'Trên đoạn đường hai chiều không có giải phân cách giữa, người lái xe không được vượt xe khác trong các trường hợp nào dưới đây?', 'A. Xe bị vượt bất ngờ tăng tốc độ và cố tình không nhường đường.', 'B. Xe bị vượt giảm tốc độ và nhường đường.', 'C. Phát hiện có xe đi ngược chiều.', 'D. Cả ý 1 và ý 3.', 4);
$question17 = new Question(17, 'Người lái xe phải giảm tốc độ thấp hơn tốc độ tối đa cho phép đến mức cần thiết, chú ý quan sát và chuẩn bị sẵn sàng những tình huống có thể xảy ra để phòng ngừa tai nạn trong các trường hợp nào dưới đây?', 'A. Gặp biển báo nguy hiểm trên đường.', 'B. Gặp biển chỉ dẫn trên đường.', 'C. Gặp biển báo hết mọi lệnh cấm.', 'D. Gặp biển báo hết hạn chế tốc độ tối đa cho phép.', 1);
$question18 = new Question(18, 'Các phương tiện tham gia giao thông đường bộ (kể cả những xe có quyền ưu tiên) đều phải dừng lại bên phải đường của mình và trước vạch “dừng xe” tại các điểm giao cắt giữa đường bộ và đường sắt khi có báo hiệu dừng nào dưới đây?', 'A. Hiệu lệnh của nhân viên gác chắn.', 'B. Đèn đỏ sáng nháy, cờ đỏ, biển đỏ.', 'C. Còi, chuông kêu, chắn đã đóng.', 'D. Tất cả các ý trên.', 4);
$question19 = new Question(19, 'Tác dụng của mũ bảo hiểm đối với người ngồi trên xe mô tô hai bánh trong trường hợp xảy ra tai nạn giao thông là gì?', 'A. Để làm đẹp.', 'B. Để tránh mưa nắng.', 'C. Để giảm thiểu chấn thương vùng đầu.', 'D. Để các loại phương tiện khác dễ quan sát.', 3);
$question20 = new Question(20, 'Theo Luật Giao thông đường bộ, tín hiệu đèn giao thông gồm 3 màu nào dưới đây?', 'A. Đỏ - Vàng - Xanh.', 'B. Cam - Vàng - Xanh.', 'C. Vàng - Xanh dương - Xanh lá.', 'D. Đỏ - Cam - Xanh.', 1);
$question21 = new Question(21, 'Khi lái xe trong khu vực đô thị, bạn nên:', 'A. Tăng tốc độ để vượt qua các xe khác', 'B. Giữ tốc độ ổn định và tuân thủ quy tắc giao thông', 'C. Sử dụng còi để cảnh báo người đi bộ', 'D. Đi ngược chiều trên đường một chiều', 2);
$question22 = new Question(22, 'Biển báo nào chỉ dẫn nơi đỗ xe?', 'A. Biển 1', 'B. Biển 2', 'C. Biển 3', 'D. Biển 4', 1);
$question23 = new Question(23, 'Khi gặp biển báo nguy hiểm, bạn nên:', 'A. Tăng tốc độ để nhanh chóng vượt qua', 'B. Quan sát và tuân thủ quy tắc giao thông', 'C. Không quan tâm đến biển báo', 'D. Sử dụng điện thoại di động', 2);
$question24 = new Question(24, 'Biển báo nào chỉ dẫn hướng đi chung?', 'A. Biển 1', 'B. Biển 2', 'C. Biển 3', 'D. Biển 4', 4);
$question25 = new Question(25, 'Khi lái xe vào ban đêm, bạn nên:', 'A. Sử dụng đèn chiếu sáng', 'B. Tắt đèn định vị GPS', 'C. Tăng tốc độ để nhanh chóng đến nơi', 'D. Không chú ý đến tình hình giao thông', 1);

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