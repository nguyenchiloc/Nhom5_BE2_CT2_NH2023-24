<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            ['product_name' => 'iPhone 15 Pro Max','product_price' => 34990000,'product_qty' => 30, 'category_id' => 1,'brand_id' => 1,
            'product_images_1' => 'Iphone15_1.jpg','product_images_2' => 'Iphone15_2.jpg','product_images_3' => 'Iphone15_3.jpg',
            'product_description' => '
            iPhone 15 Pro Max đã mang đến một cuộc cách mạng hoàn toàn về thiết kế và công nghệ, đồng thời tích hợp nhiều tính năng ấn tượng. Bài viết này sẽ đi sâu vào các khía cạnh quan trọng như thiết kế, màn hình, hiệu năng, thời lượng pin và hệ thống camera để giúp bạn hiểu rõ hơn về siêu phẩm hoàn toàn mới.
            Hiệu năng mạnh mẽ với chipset A17 Pro tiên tiến.Một trong những điểm đáng chú ý nhất của iPhone 15 Pro Max là việc nó sử dụng chip A17 Pro sản xuất trên tiến trình 3nm. Điều này đã mang lại một bước cải tiến đáng kể trong hiệu năng. Nhờ vào cải tiến về thiết kế và kiến trúc vi mô, CPU của sản phẩm đã nhanh hơn đến 10%. Điều này không chỉ cải thiện hiệu suất xử lý, mà còn giúp tích hợp các tính năng như giọng nói cá nhân và tự động sửa lỗi trở nên chuyên nghiệp hơn. GPU cũng được nâng cấp với 6 lõi mới, giúp cải thiện hiệu suất và tiết kiệm năng lượng.
            Nói về trải nghiệm chơi game, người dùng có thể trải nghiệm mượt mà hơn với các tựa game đòi hỏi đồ họa cao như Resident Evil 4, Seadth Stranding, Resident Evil Village và Assassins Creed Mirage.
            Công nghệ màn hình vượt trội. Màn hình OLED của iPhone 15 Pro Max là một điểm đặc biệt không thể bỏ qua. Với kích thước lớn 6,7 inch và độ phân giải đỉnh cao 2796x1179 pixel, màn hình này mang đến trải nghiệm hấp dẫn cho người dùng. Với tần số quét 120Hz và mật độ điểm ảnh cao đến 460 ppi, bạn có thể mong đợi một hiển thị màu sắc và độ sáng chân thực hơn bao giờ hết. Công nghệ HDR cũng được tích hợp, giúp màn hình tái hiện màu sắc và độ sáng tự nhiên hơn.
            Thêm vào đó, công nghệ TrueTone hiện đại đã được tích hợp để tự động điều chỉnh màu sắc của màn hình dựa trên môi trường xung quanh. Kết hợp này mang đến trải nghiệm xem phim, chơi game và lướt web tốt hơn với hình ảnh sống động, rực rỡ và màu sắc chân thực.
            Thời lượng pin ấn tượng
            iPhone 15 Pro Max sở hữu viên pin có dung lượng lớn hơn đáng kể so với thế hệ trước đó. Với viên pin này, bạn có thể thưởng thức video lên đến 29 giờ, đảm bảo bạn có thể sử dụng cả ngày mà không lo gián đoạn giữa chừng.
            Kết nối 5G vượt trội
            iPhone 15 Pro Max đặc biệt ở khả năng hỗ trợ kết nối 5G, mang đến trải nghiệm internet nhanh và ổn định hơn bao giờ hết. Điều này cho phép bạn xem video trực tuyến, chơi game online, tải nội dung và thậm chí làm việc từ xa mà không gặp sự cản trở từ tình trạng giật lag. Ngoài ra, 5G còn giúp bạn truy cập internet ở những khu vực có tín hiệu yếu một cách mượt mà.
            Thiết kế bền bỉ và thân thiện với môi trường
            iPhone 15 Pro Max được chế tạo bằng vật liệu titan cao cấp chuẩn hàng không vũ trụ với độ bền ấn tượng. Sản phẩm không chỉ thu hút mọi ánh nhìn bởi diện mạo tinh tế và hiện đại mà còn mang đến phiên bản Pro nhẹ nhất từng có của Apple. Hãng cũng sử dụng nguyên liệu tái chế để giảm lượng rác thải và đóng góp vào bảo vệ môi trường.
            Màu sắc đa dạng
            iPhone 15 Pro Max có bảng màu đa dạng gồm 5 sự lựa chọn phong cách: titan đen, titan xanh, titan tự nhiên và titan trắng. Mỗi gam màu tạo nên một câu chuyện riêng, thể hiện cá tính và phong cách cá nhân của người sử dụng.
            Công nghệ camera ấn tượng
            Hệ thống camera kép tiên tiến trên iPhone 15 Pro Max không chỉ mang lại những trải nghiệm quay chụp ấn tượng mà còn biến mỗi khoảnh khắc thành một tác phẩm nghệ thuật. Camera chính 48MP và camera UltraWide 12MP vượt trội với khả năng tối ưu hóa chụp ảnh, mang đến bức ảnh độ phân giải siêu sắc nét với màu sắc chân thực. Điều này cùng với khả năng xử lý hình ảnh tiên tiến để tạo ra những bức ảnh đẹp và ấn tượng hơn. Camera telephoto 12MP cũng mang đến sự cải thiện đáng kể với khả năng thu phóng quan học phạm vi lên đến 5x, tạo nên những bức ảnh độc đáo và chuyên nghiệp. Công nghệ Photonic Engine cũng giúp tái hiện sắc màu tươi sáng và nổi bật các chi tiết.
            Công nghệ Face ID bảo mật hàng đầu
            Với công nghệ tiên tiến của Face ID tích hợp trong iPhone 15 Pro Max, việc mở khóa thiết bị trở nên dễ dàng và an toàn hơn bao giờ hết. Sản phẩm này sử dụng khả năng nhận diện khuôn mặt vô cùng chính xác, ngay cả trong các điều kiện ánh sáng biến đổi và các góc độ khác nhau. Hệ thống camera TrueDepth đảm bảo cho bạn trải nghiệm mở khóa nhanh chóng và độ bảo mật cao.',
            'product_status' => 'Active', 
            'created_at' => now(),'updated_at' => now()],
            //them
            ['product_name' => 'iPhone 14 Pro Max 128 GB (Bạc)','product_price' => 33990000,'product_qty' => 30, 'category_id' => 1,'brand_id' => 1,
            'product_images_1' => 'Iphone14promax_1.jpg','product_images_2' => 'Iphone14promax_2.jpg','product_images_3' => 'Iphone14promax_3.jpg',
            'product_description' => '
            Tại sao lại nên mua điện thoại iPhone 14 Pro Max?
            Là sản phẩm đắt tiền nhất của dòng điện thoại iPhone 14, iPhone 14 Pro Max cũng là phiên bản nâng cấp của iPhone 14 Pro với màn hình lớn hơn, dung lượng pin lớn hơn và thừa hưởng tất cả tính năng cao cấp có trên iPhone 14 Pro.
            Thiết kế mới hình viên thuốc
            Apple đã trung thành với thiết kế tai thỏ trong suốt nhiều năm, và vẫn tiếp tục sử dụng thiết kế này trên iPhone 14 và iPhone 14 Plus, mặc cho các điện thoại Android chuyển sang kiểu thiết kế đục lỗ, hay camera ẩn dưới màn hình. Tuy nhiên, điện thoại iPhone 14 Pro và iPhone 14 Pro Max đã trở thành điểm đánh dấu cho sự thay đổi trong thiết kế điện thoại của Apple, với việc loại bỏ tai thỏ và thay vào đó bằng việc sử dụng thiết kế hình viên thuốc. Và đặc biệt hơn, đây không phải chỉ là thiết kế hình viên thuốc thông thường mà ta đã từng thấy rất nhiều trên các dòng điện thoại Android, bởi Apple đã tạo ra 1 tính năng hoàn toàn mới và tích hợp thẳng vào viên thuốc này với cái tên gọi cực kì thú vị "Dynamic Island".
            Nó được gọi là Dynamic Island, bởi vì viên thuốc có thể phóng to hay thu nhỏ, đi cùng với việc tạo ra các hiệu ứng chuyển cảnh khác nhau tùy thuộc vào từng thao tác của người dùng, ví dụ như nhận cuộc gọi, nghe nhạc, v..v... Ngoài ra, người dùng có thể tương tác trực tiếp với Dynamic Island để thực hiện một số thao tác nhanh như chạm để mở ứng dụng nghe nhạc, hoặc nhấn và giữ để mở trình điều khiển đa phương tiện. Và tính năng này hứa hẹn sẽ trở thành trào lưu mới không chỉ cho iPhone mà cho các các điện thoại chạy hệ điều hành Android.
            Màn hình OLED 8.7 inch với tần số quét 120 Hz
            Cùng với iPhone 14 Pro, màn hình được trang bị trên iPhone 14 Pro Max là một trong những màn hình có chất lượng cao cấp nhất trên thị trường điện thoại di động hiện nay với kích thước 8.7 inch, độ phân giải 1290 x 2796, mật độ điểm ảnh lên đến 460 ppi và độ sáng màn hình tối đa lên đến 2000 nits, cao hơn nhiều so với độ sáng tối đa 1750 nits trên mẫu điện thoại cao cấp nhất của Samsung vào thời điểm hiện tại là Samsung Galaxy S22 Ultra. Nhờ đó, người dùng có thể thoải mái sử dụng máy trong mọi điều kiện ánh sáng môi trường mà vẫn có thể nhìn rõ mọi chi tiết hiện thị trên màn hình.
            Hơn thế nữa, iPhone 14 Pro Max năm nay còn được tích hợp thêm tính năng lần đầu tiên xuất hiện trên các dòng iPhone, đó là tính năng Always on Display. Với tính năng này, người dùng có thể biết ngay các thông tin cơ bản như ngày/giờ, dung lượng pin của máy mà không cần phải mở khóa màn hình.
            Camera được nâng cấp đáng kể
            Khác với iPhone 14 và 14 Plus, cụm camera trên iPhone 14 Pro Max đã được nâng cấp đáng kể. Trong đó, camera chính góc rộng 48 MP được tích hợp cảm biến 4 điểm ảnh hoàn toàn mới, cho phép người dùng có thể chụp 1 tấm hình có độ phân giải 12 MP có độ chi tiết gấp 4 lần so với thế hệ camera trước. Với camera góc siêu rộng 12 MP, Apple cũng trang bị cho camera này 1 cảm biến mới to gấp đôi so với camera góc siêu rộng trên iPhone 13 Pro, từ đó giúp cho máy có thể bắt sáng được tốt hơn, nhờ đó ảnh chụp hay video quay trong điều kiện thiếu sáng sẽ hiển thị được nhiều chi tiết hơn.
            Ngoài ra, Apple còn trang bị cho camera chính công nghệ chống rung quang học OIS thế hệ thứ 2, giúp tăng cường khả năng chống rung/lắc khi người dùng quay video trong trạng thái di chuyển liên tục. Đây chắc chắn sẽ là tính năng cực kì hữu ích cho những ai thích quay V-log, ghi lại cuộc sống thường ngày hay những chuyến du lịch và dã ngoại của mình.
            Hiệu năng vượt trội
            Thay vì sử dụng chip xử lý cũ trên dòng iPhone 13, Apple trang bị cho iPhone 14 Pro Max chip xử lý mới nhất, đó là A16 Bionic. Được xây dựng trên tiến trình mới 4nm và được gia công bởi TSMC, băng thông bộ nhớ trong của A16 Bionic được cải thiện đến 50% so với A15 Bionic, giúp cho việc xử lý các tác vụ nhanh hơn. Ngoài ra, A16 Bionic cũng có khả năng tiết kiệm năng lượng cao hơn đến 20% so với người tiền nhiệm của mình. Trong các bài kiểm tra hiệu năng, A16 Bionic dễ dàng đánh bại A15, cũng như dẫn trước về khả năng xử lý đơn nhân và đa nhân khi so sánh với chip xử lý Snapdragon 8 Plus Gen 1 của Qualcomm.  
            ',
            'product_status' => 'Active', 
            'created_at' => now(),'updated_at' => now()],
        //thêm
            ['product_name' => 'Samsung Galaxy S22 Ultra 8 GB/128 GB','product_price' => 31990000 ,'product_qty' => 30, 'category_id' => 1,'brand_id' => 2,
            'product_images_1' => 'samsum22_1.jpg','product_images_2' => 'samsum22_2.jpg','product_images_3' => 'samsum22_3.jpg','product_description' => 'Tại sao lại nên mua Điện thoại Samsung Galaxy S22 Ultra?
            Sau khi khai tử dòng Samsung Galaxy Note, điện thoại Galaxy S22 Ultra được xem là phiên bản kế nhiệm mang đầy đủ những đặc tính của dòng Galaxy Note với màn hình lớn, thiết kế màn hình kiểu thác nước cùng với phụ kiện đặc trưng của một chiếc Samsung Galaxy Note: bút S Pen.
            Thiết kế sang trọng, đi kèm với bút S Pen
            Thay vì có thiết kế với màn hình có 4 góc bo tròn cùng phần camera được đặt trong cùng một cụm, kiểu thiết kế thường thấy trên các sản phẩm thuộc dòng Galaxy S, điện thoại Samsung Galaxy S22 Ultra lại có thiết kế hoàn toàn khác biệt, có gì đó thừa hưởng từ Galaxy Note 20 Ultra với thiết kế màn hình tràn viền kiểu thác nước ở 2 cạnh. Dù có trọng lượng ngang bằng với Galaxy S21 Ultra nhưng do được phân bổ đều khắp mọi vị trí chứ không mất cân bằng như S21 Ultra cùng với việc không có cụm camera nhô lên ở mặt sau nên khi sử dụng, bạn sẽ cảm thấy nhẹ nhàng và dễ chịu hơn nhiều so với dòng sản phẩm tiền nhiệm.
            Ngoài ra, đúng với nhận định của nhiều người khi cho rằng S22 Ultra là sản phẩm kế nhiệm của dòng Galaxy Note, bút S Pen được tích hợp sẵn ngay trên S22 Ultra với khe cắm chuyên dùng. Với những người là fan trung thành của dòng Note, hay những người có sở thích ghi chú, S22 Ultra là một lựa chọn xuất sắc với độ chính xác và tốc độ nhận diện được cải thiện lên đến 70% so với các dòng Note trước đây, theo quảng cáo từ phía Samsung.
            Màn hình cực lớn với độ phân giải 2K
            Samsung Galaxy S22 Ultra được trang bị một màn hình lớn nhất từ trước đến nay trong các sản phẩm thuộc dòng Galaxy S với kích thước lên đến 6.8 inch. Samsung trang bị cho máy tấm nền cao cấp Dynamic AMOLED 2X với khả năng hiển thị hình ảnh và màu sắc vượt trội, cùng với độ phân giải cao 2K+ sẽ giúp thỏa mãn mọi nhu cầu giải trí của hầu hết tất cả người sử dụng, nhất là để coi phim và chơi game.
            Đặc biệt, vào thời điểm ra mắt, màn hình của S22 Ultra còn có độ sáng tối đa lên đên 1750 nits, cao nhất trong tất cả các sản phẩm di động của Samsung. Với độ sáng này, bạn có thể sử dụng máy thoải mái bất chấp mọi điều kiều ánh sáng môi trường, không những cả trong điều kiện trời nắng gắt, hay dưới ánh đèn có độ sáng cao mà trong điều kiện thiếu sáng, khả năng hiển thị của máy cũng trở nên rõ hơn bao giờ hết.
            Ngoài ra, tần số quét 120 Hz cũng sẽ giúp người dùng có những trải nghiệm sử dụng mượt mà trong các tác vụ thường ngày như lướt web, mạng xã hội, cũng như chơi các tựa game đối kháng có hỗ trợ tần số quét cao.
            Quay video độ phân giải 8K, zoom quang học 10X, hỗ trợ công nghệ chống ung quang học OIS
            Là chiếc điện thoại có giá cao nhất trong các sản phẩm thuộc dòng Galaxy S22, S22 Ultra cũng vì đó mà được trang bị các camera có thông số và tính nâng tốt hơn. Máy có tổng cộng 5 camera, bao gồm 1 camera selfie có độ phân giải 40 MP, có khả năng quay video ở độ phân giải tối đa là 4K cùng 4 camera ở mặt sau lần lượt là 1 camera góc rộng 100 MP được tích hợp công nghệ lấy nét bằng laser cùng công nghệ chống rung quang học OIS, 1 camera periscope tele 10 MP hỗ trợ công nghệ OIS, cùng khả năng zoom quang học 10X, 1 camera tele 10 MP cũng hỗ trợ công nghệ OIS, cho khả năng zoom quang học 3X và cuối cùng là 1 camera góc siêu rộng 12 MP. Với cụm camera sau, bạn có thể quay video có độ phân giải tối đa lên đến 8K và hỗ trợ HDR10+.
            Điểm cải thiện đáng để nói đến nhất chính là khả năng chụp đêm. Nhờ vào cảm biến điểm ảnh cực lớn giúp thu được nhiều ánh sáng hơn cũng như giảm nhiễu hiệu quả hơn, kết hợp cùng với việc phủ một lớp nano có độ phản xạ cực thấp lên các camera sau, người dùng có thể chụp được các bức hình hoàn hảo với độ chi tiết và độ sáng cao trong mọi điều kiện ánh sáng.
            Hiệu năng đỉnh cao
            Để xứng đáng là một chiếc điện thoại nằm trong phân khúc cao cấp, Samsung Galaxy S22 Ultra sẽ được trang bị chip xử lý mạnh nhất giành cho các thiết bị chạy hệ điều hành Android trên thị trường hiện nay, đó chính là Qualcomm Snapdragon 8 Gen 1. Đây là chip xử lý cao cấp xây dựng trên tiến trình 4 nm và được gia công bởi Samsung. Chip được giới thiệu lần đầu tiên vào nửa cuối năm 2021, với hiệu năng CPU được cải thiện lên đến 20% nhưng vẫn tiết kiệm hơn 30% lượng điện năng tiêu thụ so với chip xử lý cao cấp tiền nhiệm Snapdragon 888+. Hơn thế nữa, chip đồ họa Adreno 730 trên Snapdragon 8 Gen 1 cũng có khả năng xử lý cao hơn đến 30% so với chip tiền nhiệm Adreno 660. Do đó, máy có khả năng xử lý tốt tất cả các tác vụ nặng như biên tập - chỉnh sửa video cũng như chơi mượt mà tất cả các game đòi hỏi cấu hình nặng nhất.', 
           'product_status' => 'Active', 
           'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Samsung Galaxy A53 5G (Đen)','product_price' => 9990200 ,'product_qty' => 30, 'category_id' => 1,'brand_id' => 2,
            'product_images_1' => 'samsumGalaxyA53_1.jpg','product_images_2' => 'samsumGalaxyA53_2.jpg','product_images_3' => 'samsumGalaxyA53_3.jpg','product_description' => 'Tại sao lại nên mua Điện thoại Samsung Galaxy A53 5G?
	        Samsung Galaxy A53 5G là sản phẩm được ra mắt cùng thời điểm với 2 sản phẩm thuộc dòng A khác là Galaxy A23 và A13. Trong đó, A53 5G là phiên bản đắt tiền nhất với nhiều tính năng chỉ xuất hiện trên các điện thoại thuộc dòng cao cấp như chống rung quang học OIS, kháng nước IP67, v..v...
	        Trọng lượng khá nhẹ, có kháng nước
	        Điện thoại Samsung Galaxy A53 5G không có nhiều điểm đột phá trong thiết kế. Máy có thiết kế màn hình đục lỗ ở mặt trước giống như đa phần các điện thoại Android hiện nay, cùng với một cụm camera phía sau tương tự như trên dòng Galaxy S22. Tuy nhiên, một trong những ưu điểm dễ nhận thấy của A53 chính là trọng lượng nhẹ của máy. Mặc dù là một điện thoại có kích thước lớn với màn hình lên đến 6.5 inch nhưng trọng lượng máy chỉ ở khoảng 189 g, giúp người dùng không cảm thấy nặng nề và khó chịu khi phải cầm lâu trên tay. Phần viền của máy được sơn phủ lớp bạc giả kim, vừa giúp máy có vẻ ngoài sang trọng, nhưng vẫn có  tác dụng giảm thiểu trọng lượng của máy so với chất liệu nhôm hay kim loại.
	        Đặc biệt, Galaxy A53 5G còn được trang bị chuẩn kháng nước/ kháng bụi IP67, giúp người dùng có thể an tâm sử dụng hàng ngày mà không sợ gặp trục trặc khi chẳng may điện thoại bị dính nước.
	        Màn hình Super AMOLED với tần số quét 120 Hz
	        Samsung Galaxy A53 5G được trang bị màn hình có tầm nền AMOLED với độ sáng tối đa đạt ngưỡng 800 nit, đảm bảo cho màn hình của máy vẫn hiển thị tốt trong nhiều môi trường ánh sáng khác nhau, kể cả khi sử dụng ngoài trời. Tần số quét 120 Hz cũng sẽ mang đến những trải nghiệm sử dụng mượt mà cho người sử dụng, rất thích hợp cho những người có sở thích sử dụng mạng xã hội, chơi game, v..v...
	        Camera tích hợp công nghệ chống rung quang học OIS
	        Về mặt thông số, điện thoại Samsung Galaxy A53 5G có tổng cộng 5 camera, bao gồm 1 camera độ phân giải 32 MP ở mặt trước, và cụm 4 camera ở mặt sau lần lượt là 1 camera góc rộng 64 MP, 1 camera góc siêu rộng 12, 1 camera macro 5 MP và 1 camera đo chiều sâu 5 MP. Camera góc rộng được tích hợp công nghệ chống rung quang học OIS, thích hợp cho những người có sở thích du lịch, muốn ghi lại những hình ảnh đáng nhớ trong chuyến đi, hay những người thích quay video, làm vlog.
	        Đặc biệt, nhờ có sự hỗ trợ đắc lực của trí thông minh nhân tạo AI, người dùng sẽ chụp được những bức ảnh đẹp, sinh động mà không cần phải am hiểu về kĩ thuật chụp cũng như cách điều chỉnh các thông số khi chụp ảnh.
	        Hiệu năng khá
	        Galaxy A53 5G được trang bị chip xử lý Exynos 1280. Đây là chip xử lý tầm trung mới được Samsung công bố vào giữa tháng 3/2022, có mặt lần đầu trên dòng Galaxy A33 và A53 và được xây dựng trên tiến trình 5nm của Samsung. Về mặt hiệu năng, các bài kiểm tra cho thấy khả năng xử lý các tác vụ thông thường cũng như tác vụ xử lý đồ họa mạnh mẽ hơn khá nhiều so với chip xử lý tầm trung Snapdragon 765G của Qualcomm, cũng như có điểm số hiệu năng tương đương với chip Dimensity 900 của Mediatek. Tuy không giúp chiến tốt các tựa game đòi hỏi cấu hình mạnh như Genshin Impact, người dùng vẫn có thể chơi thoải mái các tựa game phổ biến khác như Liên Minh Tốc Chiến, PUBG Mobile, và tất nhiên máy cũng sẽ xử lý được tốt mọi tác vụ thường ngày của người sử dụng.
	        Trang bị loa kép
	        Loa kép là một trong những tính năng không thể thiếu chỉ có trên các dòng điện thoại cao cấp trước đây. Tuy nhiên, tính năng này đã xuất hiện phổ biến hơn trên các điện thoại tầm trung trong những năm gần đây. Với loa kép, trải nghiệm xem phim hay lắng nghe các bản nhạc yêu thích sẽ được nâng cao một cách đáng kể so với các mẫu điện thoại chỉ được trang bị một loa. Đăc biệt, với những ai có sở thích chơi game đối kháng, loa kép sẽ giúp người chơi định vị chính xác hơn vị trí của đối thủ, từ đó giúp bạn có được thành tích cao hơn.', 
            'product_status' => 'Active', 
            'created_at' => now(),'updated_at' => now()],

        //them
            ['product_name' => 'Samsung Galaxy A54 8GB/ 256 GB (Tím)','product_price' => 15064500 ,'product_qty' => 30, 'category_id' => 1,'brand_id' => 2,
            'product_images_1' => 'samsumGalaxyA54_1.jpg','product_images_2' => 'samsumGalaxyA54_2.jpg','product_images_3' => 'samsumGalaxyA54_3.jpg','product_description' => 'Diện mạo sang trọng đầy cuốn hút
	        Galaxy A54 5G có thiết kế khá trẻ trung với kiểu dáng phẳng và nhiều phiên bản màu sắc mới mẻ đầy cuốn hút. Máy được làm từ nhựa, giúp cảm giác cầm nắm trở nên nhẹ nhàng và thoải mái hơn.
	        Trang bị tấm nền Super AMOLED
	        Galaxy A54 5G mang đến cho người dùng trải nghiệm hình ảnh tuyệt vời với màn hình Super AMOLED kích thước 6.4 inch và độ phân giải Full HD+ (1080 x 2340 Pixels). Với màu sắc rực rỡ và độ tương phản cao, người dùng sẽ được tận hưởng những hình ảnh sống động và sắc nét.
	        Ngoài ra, màn hình của Galaxy A54 5G được trang bị tốc độ làm mới 120 Hz, cho phép các thao tác cuộn và điều hướng trên màn hình trở nên mượt mà và phản hồi nhanh chóng. 
	        Khả năng hiển thị ngoài trời của màn hình cũng rất tốt với độ sáng tối đa lên đến 1000 nits, rất ấn tượng, giúp việc sử dụng điện thoại ở những nơi có nhiều ánh sáng như ngoài trời được dễ dàng hơn.
	        Tăng cường độ sắc nét ảnh chụp
	        Mẫu điện thoại Samsung này được trang bị bộ ba ống kính có độ phân giải cao cùng rất nhiều tính năng thú vị, một điểm đáng chú ý là camera chính với độ phân giải lên tới 50 MP, được hỗ trợ công nghệ chống rung quang học và có khả năng quay video 4K tối đa.
	        Được trang bị camera chính với độ phân giải 50 MP và khả năng chụp ảnh và quay video chất lượng cao, đây hứa hẹn sẽ là một mẫu điện thoại Android cực kỳ đáng mua cho những bạn đam mê quay phim hay chụp ảnh trên một chiếc smartphone tầm trung.
	        Nâng cao hiệu suất sử dụng nhờ chip mạnh
	        Galaxy A54 5G sử dụng con chip Exynos 1380 mới nhất của Samsung, điều này cung cấp sức mạnh và hiệu suất tối ưu cho các ứng dụng và trò chơi đòi hỏi hiệu năng cao trên một thiết bị tầm trung.
	        Ngoài ra, đây còn là mẫu điện thoại RAM 8 GB và hệ điều hành Android 13 tích hợp, vì thế Galaxy A54 5G sẽ giúp các hoạt động đa nhiệm trên máy diễn ra một cách mượt mà và trơn tru.
	        Thoải mái sử dụng với pin 5000 mAh
	        Bên cạnh những ưu điểm trên thì Galaxy A54 5G còn trang bị viên pin lớn 5000 mAh, đây được xem là chi tiết đáng chú ý, nó giúp cho thiết bị có thể sử dụng suốt cả ngày mà không cần phải lo lắng về việc sạc lại.
	        Bên cạnh đó, máy còn hỗ trợ công nghệ sạc nhanh 25 W, điều này mang đến việc sạc đầy dung lượng của thiết bị diễn ra nhanh chóng và tiện lợi hơn.',
           'product_status' => 'Active', 
           'created_at' => now(),'updated_at' => now()],

        //them
            ['product_name' => 'Samsung Galaxy Z Flip5 256GB','product_price' => 19990000 ,'product_qty' => 30, 'category_id' => 1,'brand_id' => 2,
            'product_images_1' => 'samsungGalaxyZFlip5_1.jpg','product_images_2' => 'samsungGalaxyZFlip5_2.jpg','product_images_3' => 'samsungGalaxyZFlip5_3.jpg','product_description' => '
	        Galaxy AI tiện ích - Khoanh vùng search đa năng, là trợ lý chỉnh ảnh, trợ lý chat thông minh, phiên dịch trực tiếp
	        Thần thái nổi bật, cân mọi phong cách- Lấy cảm hứng từ thiên nhiên với màu sắc thời thượng, xu hướng
	        Thiết kế thu hút ánh nhìn - Gập không kẽ hỡ, dẫn đầu công nghệ bản lề Flex
	        Tuyệt tác selfie thoả sức sáng tạo - Camera sau hỗ trợ AI xử lí cực sắc nét ngay cả trên màn hình ngoài
	        Bền bỉ bất chấp mọi tình huống - Đạt chuẩn kháng bụi và nước IPX8 cùng chất liệu nhôm Armor Aluminum giúp hạn chế cong và xước
	        Xem thông tin về giá bán, cấu hình, thiết kế của siêu phẩm Galaxy Z Flip 5 mới nhất nhà Samsung.
	        Samsung Galaxy Z Flip 5 có thiết kế màn hình rộng 6.7 inch và độ phân giải Full HD+ (1080 x 2640 Pixels), dung lượng RAM 8GB, bộ nhớ trong 256GB. Màn hình Dynamic AMOLED 2X của điện thoại này hiển thị rõ nét và sắc nét, mang đến trải nghiệm ấn tượng khi sử dụng.
	        Samsung Galaxy Z Flip 5 – Thiết kế sang trọng, cấu hình mạnh mẽ
	        Samsung Galaxy Z Flip 5 được đánh giá cao về thiết kế cho đến cấu hình sản phẩm, điện thoại sẽ ra mắt trong thời gian sắp tới nên là đề tài bàn luận của nhiều fan thương hiệu Samsung. Với những điểm mạnh riêng của điện thoại chắc chắn sẽ không làm người dùng thất vọng khi sử dụng.
	        Camera 12MP chụp rõ nét
	        Samsung Galaxy Z Flip 5 trang bị cụm camera sau 12MP, rõ nét, tạo nên hình ảnh chân thực và rõ ràng hơn. Trong điện thoại có nhiều bộ lọc màu khác nhau, người dùng không cần phải tải app khác nhau để chỉnh sửa hình như trước đây.
	        Bên cạnh đó, camera trước lên đến 10MP, chụp hình chân dung chân thực, tự nhiên và đẹp lung linh, sau đó nhanh chóng đăng lên mạng xã hội khoe với hội bạn thân ngay. Khả năng quay video không bị nhòe, vỡ ảnh trong quá trình quay phim kết hợp với độ phân giải cao.
	        Trang bị chipset Snapdragon, dung lượng RAM 8GB+256GB
	        Samsung Galaxy Z Flip 5 có cấu hình mạnh mẽ với hệ điều hành Android mới nhất, quen thuộc với nhiều sản phẩm của thương hiệu này. Con chipset Snapdragon 8 gen 2 for Galaxy cho phép máy chạy mượt mà các ứng dụng nặng. 
	        Không chỉ dừng lại ở đó, dung lượng máy lên đến RAM 8GB và bộ nhớ trong 256GB, người dùng có thể tải game với dung lượng lớn về máy mà vẫn duy trì ổn định. Không lo sảy ra tình trạng giật lag như một số sản phẩm khác.
	        Viên pin khủng 3.700 mAh
	        Samsung Galaxy Z Flip 5 được đánh giá cao về thông số năng lượng nhờ viên pin 3700mAh và còn hỗ trợ sạc nhanh 25W. Nhờ công suất pin này, người dùng có thể thoải mái xem phim, chơi game và giải trí suốt nhiều giờ mà không cần lo lắng về việc phải nạp pin liên tục. 
	        Thiết kế hiện đại, sang trọng
	        Sản phẩm được thiết kế với viền màn hình mỏng nhẹ và các góc cạnh mềm mại, tạo nên một tổng thể hoàn thiện, tăng cường vẻ đẹp thẩm mỹ cho phần giao diện. Điện thoại còn cung cấp thông báo và hiển thị thông tin khác mỗi khi có người nhắn tin hay gọi điện, tính năng này khá tiện ích cho người dùng.', 
            'product_status' => 'Active', 
            'created_at' => now(),'updated_at' => now()],

        //them
            ['product_name' => 'Samsung Galaxy Z Flip5 256GB','product_price' => 19990000 ,'product_qty' => 30, 'category_id' => 1,'brand_id' => 2,
           'product_images_1' => 'samsungGalaxyZFlip5_1.jpg','product_images_2' => 'samsungGalaxyZFlip5_2.jpg','product_images_3' => 'samsungGalaxyZFlip5_3.jpg','product_description' => '
        	Galaxy AI tiện ích - Khoanh vùng search đa năng, là trợ lý chỉnh ảnh, trợ lý chat thông minh, phiên dịch trực tiếp
        	Thần thái nổi bật, cân mọi phong cách- Lấy cảm hứng từ thiên nhiên với màu sắc thời thượng, xu hướng
        	Thiết kế thu hút ánh nhìn - Gập không kẽ hỡ, dẫn đầu công nghệ bản lề Flex
        	Tuyệt tác selfie thoả sức sáng tạo - Camera sau hỗ trợ AI xử lí cực sắc nét ngay cả trên màn hình ngoài
        	Bền bỉ bất chấp mọi tình huống - Đạt chuẩn kháng bụi và nước IPX8 cùng chất liệu nhôm Armor Aluminum giúp hạn chế cong và xước
        	Xem thông tin về giá bán, cấu hình, thiết kế của siêu phẩm Galaxy Z Flip 5 mới nhất nhà Samsung.
        	Samsung Galaxy Z Flip 5 có thiết kế màn hình rộng 6.7 inch và độ phân giải Full HD+ (1080 x 2640 Pixels), dung lượng RAM 8GB, bộ nhớ trong 256GB. Màn hình Dynamic AMOLED 2X của điện thoại này hiển thị rõ nét và sắc nét, mang đến trải nghiệm ấn tượng khi sử dụng.
        	Samsung Galaxy Z Flip 5 – Thiết kế sang trọng, cấu hình mạnh mẽ
        	Samsung Galaxy Z Flip 5 được đánh giá cao về thiết kế cho đến cấu hình sản phẩm, điện thoại sẽ ra mắt trong thời gian sắp tới nên là đề tài bàn luận của nhiều fan thương hiệu Samsung. Với những điểm mạnh riêng của điện thoại chắc chắn sẽ không làm người dùng thất vọng khi sử dụng.
        	Camera 12MP chụp rõ nét
        	Samsung Galaxy Z Flip 5 trang bị cụm camera sau 12MP, rõ nét, tạo nên hình ảnh chân thực và rõ ràng hơn. Trong điện thoại có nhiều bộ lọc màu khác nhau, người dùng không cần phải tải app khác nhau để chỉnh sửa hình như trước đây.
        	Bên cạnh đó, camera trước lên đến 10MP, chụp hình chân dung chân thực, tự nhiên và đẹp lung linh, sau đó nhanh chóng đăng lên mạng xã hội khoe với hội bạn thân ngay. Khả năng quay video không bị nhòe, vỡ ảnh trong quá trình quay phim kết hợp với độ phân giải cao.
        	Trang bị chipset Snapdragon, dung lượng RAM 8GB+256GB
        	Samsung Galaxy Z Flip 5 có cấu hình mạnh mẽ với hệ điều hành Android mới nhất, quen thuộc với nhiều sản phẩm của thương hiệu này. Con chipset Snapdragon 8 gen 2 for Galaxy cho phép máy chạy mượt mà các ứng dụng nặng. 
        	Không chỉ dừng lại ở đó, dung lượng máy lên đến RAM 8GB và bộ nhớ trong 256GB, người dùng có thể tải game với dung lượng lớn về máy mà vẫn duy trì ổn định. Không lo sảy ra tình trạng giật lag như một số sản phẩm khác.
	        Viên pin khủng 3.700 mAh
	        Samsung Galaxy Z Flip 5 được đánh giá cao về thông số năng lượng nhờ viên pin 3700mAh và còn hỗ trợ sạc nhanh 25W. Nhờ công suất pin này, người dùng có thể thoải mái xem phim, chơi game và giải trí suốt nhiều giờ mà không cần lo lắng về việc phải nạp pin liên tục. 
	        Thiết kế hiện đại, sang trọng
	        Sản phẩm được thiết kế với viền màn hình mỏng nhẹ và các góc cạnh mềm mại, tạo nên một tổng thể hoàn thiện, tăng cường vẻ đẹp thẩm mỹ cho phần giao diện. Điện thoại còn cung cấp thông báo và hiển thị thông tin khác mỗi khi có người nhắn tin hay gọi điện, tính năng này khá tiện ích cho người dùng.',
            'product_status' => 'Active', 
            'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Xiaomi 14','product_price' => 16550000,'product_qty' => 30, 'category_id' => 1,'brand_id' => 3,
            'product_images_1' => 'xiaomi14_1.jpg','product_images_2' => 'xiaomi14_2.jpg','product_images_3' => 'xiaomi14_3.jpg',
            'product_description' => '
            Xiaomi 14 là một trong những sản phẩm cao cấp mới nhất của Xiaomi, được đánh giá cao với thiết kế hiện đại, hiệu năng siêu mạnh mẽ và màn hình tuyệt đẹp. Trong bài viết này, chúng ta sẽ điều tra chi tiết về smartphone này để hiểu rõ hơn nhé.
            Thiết kế nhỏ gọn, sang trọng
            Xiaomi 14 có thiết kế không có quá nhiều khác biệt so với bản tiền nhiệm ngoại trừ cụm camera được thiết kế to hơn. Với hình dáng vuông vức giúp máy trở nên hiện đại và cứng cáp. Do các cạnh được vuốt nhẹ nên không gây cảm giác cấn khi cầm nắm sử dụng.
            Sản phẩm ra mắt với 2 phiên chất liệu mặt lưng là da và kính. Khung máy được gia công từ nhôm góp phần giúp thiết bị bền bỉ hơn theo thời gian.
            Màn hình 
            Màn hình Xiaomi 14 trang bị tấm nền LTPO OLED 120Hz, hỗ trợ 68 tỷ màu, Dolby Vision và HDR10+, giúp mang đến hình ảnh, nội dung hiển thị sống động, chân thực mượt mà và không nhòe hình.
            Với độ sáng 3000 nit giúp bạn sử dụng tốt trong mọi điều kiện ánh sáng mạnh, kể cả khi trời nắng gắt. Với kích thước 6,36 inch, tỷ lệ 20:9 giúp người dùng cầm nắm sử dụng dễ dàng. Bạn cũng sẽ được trải nghiệm hình ảnh siêu nét với độ phân giải 1.5K (1200 x 2670 pixel) có mật độ điểm ảnh ~460 ppi.
            Nâng cấp hiệu năng, Snapdragon 8 Gen 3
            Là một trong 2 sản phẩm sở hữu chip Snapdragon 8 Gen 3 đầu tiên trên thế giới, Xiaomi 14 và 14 Pro đem đến hiệu năng mạnh mẽ hàng đầu trên các thiết bị Android hiện nay (năm 2023).
            Cải tiến camera
            Xiaomi 14 có thiết lập 3 camera sau với cùng thông số 50MP bao gồm camera chính, camera tele và camera góc rộng đều sử dụng ống kính Leica mang đến chất ảnh đậm chất cổ điển, cũng vô cùng rực rỡ và hỗ trợ quay video lên tới 8K siêu sắc nét.
            Camera trước 32MP hỗ trợ chụp ảnh selfie siêu nét, ảo diệu với nhiều chế độ, bộ lọc màu hiện đại.
            Đặc biệt, bạn đã có thể quay video 4K lên tới 60fps với camera selfie này. Điều này đã khiến cho các MiFan không khỏi rơi những giọt nước mắt hạnh phúc.
            Nâng cấp dung lượng pin và sạc
            Xiaomi 14 có viên pin 4610mAh tăng hơn 110mAh so với thế hệ trước. Điều này cũng giúp thiết bị có thời lượng pin sử dụng kéo dài hơn các mẫu máy tiền nhiệm.
            Chưa dừng lại ở đó, thiết bị này còn hỗ trợ sạc siêu nhanh 90W giúp bạn pin nhanh chóng. Đây là lần đầu tiên Xiaomi tăng tốc độ sạc cho bản thường sau 3 thế hệ trung thành với sạc 67W. 
            Thông số kỹ thuật
            Màn hình : LTPO OLED  6.36″ + 120Hz
            Hệ điều hành : Xiaomi HyperOS
            Chipset : Qualcomm Snapdragon 8 Gen 3
            GPU: Adreno 750
            Camera trước : 32 MP (góc rộng), HDR, panorama | Quay phim: 4K@30/60fps, 1080p@30/60fps, gyro-EIS
            Camera sau : 
            50 MP, f/1.6, 23mm(góc rộng), dual pixel PDAF, Laser AF, OIS
            50 MP, f/2.2, 14mm, 115˚ (góc siêu rộng)
            50 MP, f/2.0, 75mm (tele), PDAF, OIS, zoom quang 3.2x
            Quay phim: 8K@24fps (HDR), 4K@24/30/60fps (HDR10+, 10-bit Dolby Vision HDR, 10-bit LOG), 1080p@30/60/120/240/960fps, 720p@1920fps, gyro-EIS
            Pin : Li-Po 4610 mAh
            Sạc nhanh: Có dây 90W, không dây 50W, sạc ngược 10W
            Kháng nước: IP68
            Cổng kết nối: Type-C', 
            'product_status' => 'Active', 
            'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Redmi Note 13 Pro+ (Plus) 5G','product_price' => 8350000,'product_qty' => 30, 'category_id' => 1,'brand_id' => 3,
            'product_images_1' => 'xiaomi14_1.jpg','product_images_2' => 'xiaomi14_2.jpg','product_images_3' => 'xiaomi14_3.jpg',
            'product_description' => '
            Xiaomi Redmi Note
            Thiết kế sang trọng, đẳng cấp
            Chiếc điện thoại Redmi Note 13 Pro+ sở hữu thiết kế cao cấp với màn hình cong viền mỏng đều 4 cạnh thể hiện được sự thống trị của gã khổng lồ công nghệ Trung Quốc trong phân khúc điện thoại tầm trung. Theo đó máy sở hữu cụm camera sau với 3 ống kính cùng 1 cụm đèn LED trợ sáng. Thiết bị có khung nhựa và mặt lưng nhựa được gia công vô cùng tỷ mỉ bo cong các cạnh và các mặt tạo nên một chiếc điện thoại có vẻ đẹp lộng lẫy.
            Mặt trước được bao phủ bởi màn hình tràn viền siêu mỏng dạng đục lỗ để đặt camera selfie. Máy có màn hình phẳng và được bảo vệ bằng kính cường lực Gorilla Glass Victus cao cấp và bền bỉ.
            Người dùng hoàn toàn yên tâm khi sử dụng chiếc điện thoại Note 13 Pro+ này bởi nó đạt chuẩn kháng nước và bụi IP68. Đây là lần đầu tiên Xiaomi đem tính năng cao cấp này lên một chiếc điện thoại tầm trung của mình.
            Màu sắc đa dạng và trẻ trung
            Sản phẩm có 3 màu sắc cơ bản chính đó là Đen, Trắng và Tím. Đặc biệt là phiên bản màu tím được gia công vân gia ở mặt lưng cùng với nhiều mảng màu được phối hợp hài hòa với nhau tạo nên sự cá tính độc đáo cho người sử dụng.Trong khi các bản còn lại (Đen và Trắng) có mặt lưng giả kính cũng sang trọng và cao cấp không kém.
            Ngoài ra, nhà sản xuất còn ra mắt thêm phiên bản đặc biệt camo xanh lá thể hiện sự mạnh mẽ và đẳng cấp của người dùng.
            Màn hình OLED 1.5K siêu nét
            Redmi Note 13 Pro+ tích hợp tấm nền màn hình OLED, hỗ trợ 12 bit và có khả năng tái tạo tới 68 tỷ màu khác nhau, kết hợp với Dolby Vision và HDR10+ cho ra hình ảnh hiển thị với màu sắc chân thật, chất lượng tuyệt vời, sống động, độ tương phản cao. Hãng cũng không quên tích hợp cho màn hình của máy tần số quét cao 120Hz giúp trải nghiệm người dùng mượt mà hơn.
            Với độ sáng cao nhất đạt 1800 nit giúp thiết bị sử dụng tốt trong nhiều điều kiện ánh sáng môi trường, ngay cả dưới ánh nắng giữa trưa bạn vẫn sử dụng tốt.
            Cũng như các mẫu Redmi Note khác, Redmi Note 13 Pro+ có kích thước màn hình 6,67 inch cùng độ phân giải 1.5 (1220 x 2712 pixel) đủ đem đến hình ảnh sắc nét phù hợp với mọi đối tượng người dùng với mật độ điểm ảnh đạt 446 ppi.
            Hiệu năng siêu mạnh với chip mới
            Dimensity 7200 Ultra là con chip đầu tiên được trang bị trên chiếc điện thoại Redmi Note 13 Pro+ này. Dimensity 7200 Ultra là kết quả hợp tác của Xiaomi và MediaTek để tinh chỉnh một số yếu tố trên Dimensity 7200 sao cho chạy hiệu quả và tối ưu nhất trên Redmi Note 13 Pro+.
            Chip Dimensity 7200 Ultra được sản xuất theo tiến trình 4nm tiết kiệm điện tốt và mang đến hiệu năng siêu mạnh cho người dùng.
            Như vậy, có thể thấy rằng hiệu năng của Redmi Note 13 Pro+ mạnh ngang tầm với các thiết bị chạy Snapdragon 870. Và dĩ nhiên, bạn có thể sử dụng Redmi Note 13 Pro+ với mọi tác vụ khác nhau trong nhiều năm sau.
            RAM khủng, bộ nhớ thoải mái lưu trữ
            Sở hữu bộ nhớ trong dung lượng tối đa lên tới 512GB, Redmi Note 13 Pro+ có 2 phiên bản bộ nhớ là 256GB và 512GB đảm bảo cho đáp ứng mọi phân khúc cho nhu cầu lưu trữ của người dùng. Với chuẩn UFS 3.1 giúp máy có thể mở ứng dụng và truy xuất dữ liệu một cách nhanh chóng.
            Thiết bị có RAM 12GB và phiên bản cao hơn 16GB. Cả hai đều cho khả năng chạy đa nhiệm tốt, mang đến trải nghiệm người dùng vô cùng mượt mà.
            Camera 200MP chất lượng mỹ mãn
            Redmi Note 13 Pro+ được trang bị hệ thống camera chất lượng với thông số cực khủng. Camera sau bao gồm 3 cảm biến với ống kính chính 200MP góc rộng cho hình ảnh quay chụp chi tiết và sắc nét.Một cảm biến 8MP (góc siêu rộng) cho phép chụp các bức ảnh phong cảnh rộng, ảnh chụp tập thể nhiều người được tái hiện đẹp nhất. Cuối cùng là cảm biến 2MP (macro) cho khả năng chụp ảnh gần đẹp mắt.
            Hệ thống camera sau được tích hợp PDAF và OIS giúp tối ưu khả năng lấy nét và chống rung tốt. Máy quay phim 4K@30fps và 1080p@30/60/120fps cho video chất lượng cao.
            Camera trước 16 MP (góc rộng) cho ảnh "tự sướng" và video vlog chất lượng, hỗ trợ HDR giúp nâng cao chất lượng ảnh trong điều kiện thiếu ánh sáng hay ngược sáng.
            Pin lớn và sạc 120W siêu nhanh
            Redmi Note 13 Pro+ sở hữu viên pin 5000mAh không lớn hơn so với thế hệ tiền nhiệm, nhưng đây là viên phim đáp ứng đủ thời gian sử dụng cho người dùng mà làm cho thiết bị không bị dày lên. Với dung lượng pin này giúp cho Redmi Note 13 Pro+ có thời gian sử dụng lâu dài, có thể trụ cả ngày dài với các tác vụ cơ ban.
            Thiết bị có sạc nhanh siêu tốc 120W, giúp bạn sạc pin nhanh chóng cho máy. Với công suất sạc này bạn chỉ mất khoảng 19 phút để sạc đầy 100% pin cho thiết bị.
            Thông số kỹ thuật
            Màn hình : OLED 6.67″ + 120Hz
            Hệ điều hành : MIUI 14
            Chipset : MediaTek Dimensity 7200 Ultra (4 nm)
            GPU: Mali-G610 MC4
            Camera trước : 16 MP (góc rộng), HDR | Quay phim: 1080p@30/60fps
            Camera sau : 
            200 MP, f/1.7 (góc rộng), PDAF đa hướng, OIS
            8 MP, f/2.2, 120˚ (góc siêu rộng)
            2 MP, f/2.4 (macro)
            Quay phim: 4K@30fps, 1080p@30/60/120fps
            Pin : Li-Po 5000 mAh
            Sạc nhanh: Có dây 120W
            Kháng nước: IP68
            Cổng kết nối: Type-C', 
            'product_status' => 'Active', 
            'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Xiaomi MIX Fold 3','product_price' => 37450000,'product_qty' => 30, 'category_id' => 1,'brand_id' => 3,
            'product_images_1' => 'xiaomi14_1.jpg','product_images_2' => 'xiaomi14_2.jpg','product_images_3' => 'xiaomi14_3.jpg',
            'product_description' => '
            Siêu phẩm Xiaomi MIX Fold 3 5G là chiếc điện thoại gập thế hệ thứ 3 của Xiaomi với hình dáng gập kiểu quyển sổ giúp máy có không gian trải nghiệm trên màn hình lớn hơn điện thoại thông thường. Sản phẩm có chip Snapdragon đầu 8 mạnh nhất, camera chất lượng với 4 ống kính, màn hình QHD+ siêu nét. Không những thế, thiết bị còn sở hữu viên pin lớn và sạc siêu nhanh, đặc biệt Xiaomi MIX Fold 3 5G còn được trang bị thêm sạc không dây 50W, tính năng mà trên thế hệ tiền nhiệm không được tích hợp.
            Thiết kế đẳng cấp
            Điện thoại MIX Fold 3 mang thiết kế đột phá với kiểu dáng điện thoại gập theo kiểu quyển sách, thể hiện sự sáng tạo. Khung nhôm chắc chắn kết hợp với mặt lưng bằng kính hoặc sợi quang Xiaomi Dragonscale có vân carbon, tạo ra vẻ đẹp sang trọng và hiện đại.
            Với kích thước mở ra 161.2 x 143.3 x 5.3 mm, MIX Fold 3 có diện tích màn hình lớn. Khi gấp lại, kích thước 161.2 x 73.5 x 10.96 mm (kính) và 161.2 x 73.5 x 10.86 mm (sợi quang Xiaomi Dragonscale) thuận tiện hơn cho cầm nắm. Trọng lượng 259g (kính) và 255g (sợi quang Xiaomi Dragonscale) vừa phải, tạo cảm giác cân đối khi sử dụng.
            Màn hình đỉnh cao hiển thị
            Màn hình của MIX Fold 3 được trang bị công nghệ Foldable LTPO OLED+, hay hãng còn gọi với cái tên riêng là Pol-less Plus mang đến trải nghiệm hiển thị cao cấp. Với khả năng hiển thị 1 tỷ màu và tần số quét 120Hz, màn hình này đảm bảo độ tương phản cao và sự mượt mà khi lướt web hoặc chơi game. HDR10+ và Dolby Vision cung cấp màu sắc chân thực, hình ảnh sống động và độ tương phản tốt.
            Màn hình chính có kích thước 8,03 inch và độ phân giải QHD+ (1914 x 2160 pixel), cho hình ảnh sắc nét và chi tiết. Với độ sáng tối đa 2600 nit, người dùng có thể nhìn rõ và sử dụng dễ dàng dưới ánh nắng gắt.
            MIX Fold 3 là chiếc smartphone gập sở hữu màn hình và hiệu năng đột phá của Xiaomi với những thông số cấu hình cao cấp. Thiết bị sở hữu màn hình chính 8,03 inch với tấm nền Foldable LTPO OLED+ (hãng còn gọi với tên Pol-less Plus) có tốc độ làm mới 120Hz và độ phân giải 2K+. Màn hình phụ AMOLED 120Hz có tỷ lệ 21:9 kích thước 6,56 inch cũng là một điểm nhấn đáng kể giúp người dùng trải nghiệm như điện thoại thông thường trên màn hình phụ này.
            Hiệu năng mạng mẽ
            Với chipset Snapdragon 8 Gen 2, được ép xung tới 3.36 GHz, MIX Fold 3 đảm bảo hiệu suất mạnh mẽ và mượt mà trong quá trình sử dụng. Hệ thống camera bao gồm bộ tứ cảm biến với camera chính là Sony IMX800 50MP OIS, kết hợp với Leica mang đến những bức ảnh chất lượng cao với khả năng chống rung hiệu quả cao.
            Pin lớn, sạc siêu nhanh
            Cung cấp năng lượng cho máy là viên pin 4800mAh và hỗ trợ sạc 67W cho tốc độ sạc ấn tượng. Bên cạnh đó, thiết bị còn tích hợp thêm sạc không dây 50W, đảm bảo năng lượng dồi dào và sạc nhanh, giúp người dùng trải nghiệm MIX Fold 3 không gián đoạn.
            Camera siêu sắc nét 
            Xiaomi trang bị cho MIX Fold 3 hệ thống camera sau khủng với 4 ống kính. Bao gồm camera chính là cảm biến Sony IMX800 có độ phân giải 50MP khẩu độ f/1.8, cho phép thu ánh sáng tốt giúp nắm bắt nhanh mọi khoảnh khắc cuộc sống cực kỳ sắc nét và chi tiết tốt. Chế độ tự động lấy nét theo pha (PDAF) và ổn định hình ảnh quang học (OIS) giúp tăng khả năng chụp ảnh trong động và giảm rung ảnh.Xiaomi MIX Fold 3 5G (Snapdragon 8 Gen 2 - Xung nhịp cao)This article is referenced content from https://mobilecity.vn - Xiaomi MIX Fold 3 5G (Snapdragon 8 Gen 2 - Xung nhịp cao)
            Máy có thế các camera phụ hỗ trợ nhiều tính năng chụp ảnh như camera tele 10MP với khả năng zoom quang 3.2x và camera tele kính tiềm vọng có chức năng zoom quang 5x, nhưng thông tin về độ phân giải chưa được hãng tiết lộ. Camera góc siêu rộng 12MP với khẩu độ f/2.4 và góc nhìn 120˚ cho phép chụp ảnh rộng và góc nhìn rộng hơn.
            Về quay phim, MIX Fold 3 có khả năng ghi hình ở chất lượng rất cao với 8K@24fps, 4K@30/60fps và 1080p có tốc độ khung hình lên tới 1920fps và được hỗ trợ hệ thống ổn định hình ảnh OIS và gyro-EIS.
            Ở phía trước, là camera selfie 20MP với khẩu độ f/2.4 cho khả năng chụp ảnh góc rộng. Chế độ HDR và panorama cung cấp những tùy chọn sáng tạo cho người dùng.', 
            'product_status' => 'Active', 
            'created_at' => now(),'updated_at' => now()],
            //them
            ['product_name' => 'Laptop ASUS VivoBook S 14 FLIP TP3402VA-LZ025W','product_price' => 16990000,'product_qty' => 30, 'category_id' => 2,'brand_id' => 4,
             'product_images_1' => 'laptopasuss14flip_1.jpg','product_images_2' => 'laptopasuss14flip_2.jpg','product_images_3' => 'laptopasuss14flip_3.jpg',
             'product_description' => '
             Sở hữu thiết kế sang trọng, màu bạc sáng bóng dễ dàng thu hút mọi người
             CPU I3-1315U giúp bạn thực hiện các tác vụ văn phòng một cách tối đa, xử lý ảnh nhẹ
             RAM 8GB hỗ trợ mở các tab ổn định, không lag
             Ổ cứng 256GB SSD giúp bạn lưu trữ không gian cực lớn, không cần sao chép qua USB
             Trang bị laptop có thiết kế gập và màn hình cảm ứng đem lại trải nghiệm tối đa
             Laptop Asus Vivobook S 14 FLIP TP3402VA-LZ025W – Màn hình cảm ứng tiện lợi
             Sở hữu một thiết kế mỏng nhẹ cùng hiệu năng ổn định, laptop Asus Vivobook S 14 FLIP TP3402VA-LZ025W là một sản phẩm thích hợp cho học sinh sinh viên và nhân viên văn phòng. Vậy cụ thể thì laptop Asus Vivobook này có gì, hãy cùng tìm hiểu sau đây.
             Bộ nhớ RAM 8GB đa nhiệm ổn định cùng ổ cứng thể rắn SSD PCIE
             Laptop Asus Vivobook S 14 FLIP TP3402VA-LZ025W được trang bị bộ nhớ RAM 8GB giúp máy có thể thực hiện đa nhiệm tốt khi người dùng sử dụng cùng lúc nhiều tác vụ. Bên cạnh đó thì laptop còn sở hữu khả năng khởi động máy và ứng dụng nhanh chóng nhờ được trang bị ổ cứng thể rắn SSD chuẩn PCIE.
             Thiết kế mỏng nhẹ cùng tone màu màu bạc sang trọng
             Về thiết kế, laptop Asus Vivobook S 14 FLIP TP3402VA-LZ025W được hoàn thiện với lớp vỏ kim loại mang lại một vẻ đẹp trang nhã. Bên trong, laptop gây ấn tượng thiết thiết kế nút enter với họa tiết sọc. Tổng thể, laptop chỉ nặng khoảng 1.5kg giúp người dùng có thể dễ dàng mang theo và làm việc trong nhiều trường hợp.
             Bên cạnh đó, laptop còn được trang bị bản lề với khả năng gập mở tới 360 độ cùng độ bền vượt trội với hơn 20.000 lần gập mở. Máy cũng sở hữu một hệ thống cổng kết nối khá đa dạng từ USB-C đến HDMI giúp laptop có thể kết nối với các phụ kiện hay thiết bị ngoại vi khác một các dễ dàng.',
             'product_status' => 'Active', 
             'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Laptop ASUS TUF Gaming F15 FX506HF-HN078W','product_price' => 20990000,'product_qty' => 30, 'category_id' => 2,'brand_id' => 4,
             'product_images_1' => 'laptopasusf15_1.jpg','product_images_2' => 'laptopasusf15_2.jpg','product_images_3' => 'laptopasusf15_3.jpg',
             'product_description' => '
             CPU Intel Core i5 11260H đáp ứng tốt các tác vụ, mang lại trải nghiệm sử dụng tuyệt vời trong cả công việc lẫn giải trí, chiến game.
             Card đồ họa NVIDIA GeForce RTX 2050 đáp ứng tốt nhu cầu chơi game cấu hình cao và xử lý các file thiết kế nặng.
             RAM 16 GB cho bạn tận hưởng những giây phút chiến game đỉnh cao khi có thể mở nhiều ứng dụng cùng lúc.
             Ổ cứng SSD 512 GB cho tốc độ khởi động nhanh chóng cùng khả năng tải ứng dụng mượt mà.
             Màn hình 15.6 inch Full HD và tần số quét 144 Hz mang lại hình ảnh sắc nét và mượt mà, cho trải nghiệm chơi game tuyệt vời,với tốc độ khung hình cao.
             Laptop Asus Tuf Gaming F15 FX506HF-HN078W với thiết kế năng động, mang vẻ đẹp thu hút với CPU core intel i5, GPU GeForce RTX™ 2050 và RAM 8 GB. Kết hợp là màn hiển thị FHD IPS 144Hz cực kỳ rõ nét. Ngoài ra laptop Asus Gaming cũng có thêm hệ thống âm thanh đỉnh cao nhờ vào công nghệ tiên tiến để phục vụ tối đa người dùng.
             Laptop Asus Tuf Gaming F15 FX506HF-HN078W – Mạnh mẽ, đẳng cấp, siêu tốc độ
             Laptop Asus Tuf Gaming F15 FX506HF-HN078W chính là siêu phẩm nhận được lượt tìm hiểu và bàn luận khá nhiều của người dùng trong không gian gần đây. Nhờ vào các tiện ích, chất lượng và công nghệ mà nó sở hữu cũng như đem đến. Hãy tham khảo ngay những thông tin của em máy này ngay sau đây để có cho mình thêm thông tin cũng như hướng dẫn lựa chọn đúng đắn nhất bạn nhé.
             Sức mạnh đến từ công nghệ, thiết kế, và tiện ích khủng
             Laptop Asus Tuf Gaming F15 FX506HF-HN078W chính là siêu phẩm giúp mang đến cho bạn sự hoàn hảo đến từ công nghệ và tiện ích. Với hàng loạt sự trang bị đỉnh cao ở cả ngoại hình, linh kiện và thông số máy để giúp bạn có được trải nghiệm game hàng đầu.
             Cấu hình khủng với khả năng xử lý êm mượt
             Một trong những ưu điểm tạo được sự hài lòng và đánh giá cao của người dùng đối với Asus Tuf Gaming F15 FX506HF-HN078W chính là bộ cấu hình mà nó sở hữu.
             Với trung tâm chính là CPU Intel® Core™ i5-11260H tốc độ boost lên đến 4.4 GHz đầy uy lực và mạnh mẽ. Kết hợp cùng người trợ thủ GPU NVIDIA® GeForce RTX™ 2050 và chipset cao cấp, chất lượng cũng như tốc độ. Tất cả giúp mang lại cho người dùng những trải nghiệm game êm ái, thú vị và kịch tích nhất.
             Kho bộ nhớ lưu trữ siêu lớn
             Laptop Asus Tuf Gaming F15 FX506HF-HN078W được nhà sản xuất cực kỳ ưu ái khi trang bị kho bộ nhớ lưu trữ siêu lớn và tiện ích. Với hệ thống RAM chính là DDR4-3200 SO-DIMM *2 8GB kết hợp cùng ổ cứng ngoài SSD NVMe PCIe® cho khả năng chứa lên đến tối đa 512 GB dữ liệu. Nhằm mang lại cho người dùng một không gian giải trí rộng lớn, thoải mái và tiện dụng nhất trên từng nhu cầu trải nghiệm.
             Thiết kế mạnh mẽ, đậm tính gaming
             Thiết kế nổi bật, mạnh mẽ nhưng không kém phần sang trọng hiện đại chính là những ưu điểm ngoại hình dễ bắt gặp nhất trên Asus Tuf Gaming F15 FX506HF-HN078W này. Máy được thiết kế từ chất liệu cao cấp, độ bền cao chuẩn quân đội. 
             Đi kèm là các góc cạnh được bố trí, gọt giũa một cách dứt khoát, sắc nét giúp tạo nên sự năng động nhưng lại rất đẹp mắt, hiện đại. Bên cạnh hệ thống đèn bàn phím nổi bật và logo nằm giữa máy đầy điểm nhấn.
             Màn hình sắc nét với khả năng chuyển mượt mà
             Laptop Asus Tuf Gaming F15 FX506HF-HN078W sở hữu một màn hình hiển thị khá cân đối và vừa vặn với tỉ lệ 16:9 siêu đẹp mắt. Điểm nhấn chính tạo nên ở phần tấm nền IPS cao cấp cho khả năng phân giải FHD 1920 x 1080 chi tiết. chân thực. Kết hợp cùng tần số quét 144 HZ cho những thao tác, chuyển động mượt mà, nhanh chóng và tinh tế nhất trên từng nhân vật trong game.
             Dung lượng pin khủng với cổng kết nối đa dạng
             Để đáp ứng yêu cầu của một chiếc laptop gaming cao cấp nhà sản xuất đã trang bị cho laptop Asus Tuf Gaming F15 FX506HF-HN078W một viên pin siêu vip với thông số ấn tượng 48WHrs. Kết hợp cùng hệ thống đa dạng các cổng kết nối đủ để hỗ trợ người dùng.
             Laptop Asus Tuf Gaming F15 FX506HF-HN078W khi nào ra mắt?
             Laptop Asus Tuf Gaming F15 FX506HF-HN078W là một siêu phẩm với chất lượng cấu hình, sự tiện ích. Cùng với đó là vẻ đẹp bề ngoài làm mê ngoặc cũng như say đắm biết bao game thủ cả chuyên và bán chuyên khi lần đầu nhìn thấy, trải nghiệm trên nó. 
             Được biết, con máy đã được nhà sản xuất trình làng cũng như đưa ra thị trường để phục vụ khách hàng của mình từ thời điểm năm 2021. Nhưng đến hiện tại nó vẫn cực kỳ hot và nhận được sự tin tưởng, mua sắm hàng đầu từ nhiều người dùng.
             ',
             'product_status' => 'Active', 
             'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Laptop ASUS TUF Gaming A15 FA507NU-LP140W','product_price' => 25990000,'product_qty' => 30, 'category_id' => 2,'brand_id' => 4,
             'product_images_1' => 'laptopasussa15_1.jpg','product_images_2' => 'laptopasussa15_2.jpg','product_images_3' => 'laptopasussa15_3.jpg',
             'product_description' => '
             Một chiếc laptop dành cho game thủ, với cấu hình khủng và thiết kế độc đáo
             Bộ vi xử lý AMD R5-7535HS và card đồ họa NVIDIA Geforce RTX 4050 giúp bạn chinh phục mọi tựa game nặng và đòi hỏi cao về đồ họa
             RAM 8 GB cùng ổ cứng SSD 512 GB cho không gian lưu trữ rộng rãi, hỗ trợ mở máy, mở ứng dụng nhanh chóng
             Màn hình IPS 15.6 inch cho hình ảnh sắc nét, mượt mà và rực rỡ, với tần số quét 144 Hz, độ phân giải FHD và dải màu sRGB rộng
             Laptop còn có thiết kế chắc chắn, chống va đập và bụi bẩn hiệu quả
             Laptop Asus TUF Gaming A15 FA507NU-LP140W đem tới hiệu suất xử lý khủng nhờ được trang bị chipset AMD Ryzen 5 7535HS và VGA NVIDIA GeForce RTX 4050 6GB. Cùng với đó là khả năng lưu trữ và đa nhiệm xuất sắc thông qua dung lượng RAM 8GB DDR5-4800 SO-DIMM cùng ổ cứng 512GB PCIe 4.0 NVMe M.2 SSD. Ngoài ra, dòng laptop Asus Gaming này còn sở hữu màn hình 15.6 inches với công nghệ hiển thị tiên tiến, hỗ trợ độ sáng 250nits và độ phủ màu sRGB 100% siêu thực.
             Laptop Asus TUF Gaming A15 FA507NU-LP140W - Hiệu năng đỉnh cao, chất lượng hình ảnh sắc nét
             Laptop Asus TUF Gaming A15 FA507NU-LP140W không chỉ nổi bật với cấu hình khủng mà còn thu hút người dùng bởi thiết kế độc đáo và hiện đại. Sở hữu một kiểu dáng góc cạnh, cứng cáp, Asus TUF Gaming A15 FA507NU-LP140W cực kỳ phù hợp với phong cách mạnh mẽ của game thủ và người dùng cá tính. Bên cạnh đó, dòng laptop Gaming tới từ nhà Asus này còn hỗ trợ kết nối đa dạng, từ HDMI, USB, đến Wifi 6, mang lại sự tiện lợi và đảm bảo linh hoạt trong sử dụng.
             Dễ dàng xử lý mọi tác vụ đồ họa, chiến game khủng với hiệu năng mạnh
             Laptop Asus TUF Gaming A15 FA507NU-LP140W khẳng định vị thế của mình trong thế giới gaming bằng thông số cấu hình cực khủng. Cụ thể, nhờ được hỗ trợ bởi bộ vi xử lý AMD Ryzen 5 và card đồ họa NVIDIA GeForce RTX 4050, dòng laptop gaming này không chỉ đảm bảo hiệu suất cao khi xử lý các tác vụ hằng ngày mà còn làm chủ mọi tựa game đòi hỏi cấu hình cao. 
             Sự kết hợp ấn tượng giữa CPU mạnh mẽ và GPU hiệu quả, cùng công nghệ làm mát tiên tiến, đã cho phép Asus TUF Gaming A15 FA507NU-LP140W duy trì hiệu suất ổn định dài lâu, đem lại trải nghiệm gaming mượt mà, không giới hạn.
             Bộ nhớ ổn định giúp đa nhiệm linh hoạt và ghi nhớ dữ liệu cỡ lớn dễ dàng
             Asus TUF Gaming A15 FA507NU-LP140W không chỉ mạnh mẽ về hiệu suất mà còn ấn tượng với khả năng lưu trữ và đa nhiệm. Với RAM DDR5 8GB và ổ cứng SSD PCIe 4.0 NVMe M.2 512GB, phân khúc laptop Gaming nhà Asus này cung cấp tới người dùng một không gian lưu trữ rộng rãi và tốc độ truy cập dữ liệu cực nhanh. 
             Ngoài bộ nhớ tiêu chuẩn trên máy thì bạn cũng có thể mở rộng RAM lên tới 32GB và nâng cấp thêm ổ cứng để đáp ứng nhu cầu lưu trữ cũng như đa nhiệm mà không gặp bất kỳ khó khăn nào. Điểm nhấn về bộ nhớ này đặc biệt hữu ích cho game thủ và những người sử dụng cần xử lý công việc nặng như chỉnh sửa video, đồ họa mà không cần lo lắng về không gian lưu trữ và đa nhiệm.
             Kiểu dáng hầm hố, mạnh mẽ chuẩn Gaming
             Thiết kế của Asus TUF Gaming A15 FA507NU-LP140W hội tụ đầy đủ các nét nổi trội của một phân khúc laptop gaming: mạnh mẽ, cứng cáp và đầy cá tính. Theo đó, Asus TUF Gaming A15 FA507NU-LP140W mang một vẻ ngoài hiện đại với góc cạnh được tinh chỉnh kỹ lưỡng, cùng màu sắc và hoàn thiện bề mặt độc đáo, tạo nên điểm nhấn nổi bật cho không gian làm việc hay giải trí của bạn. 
             Thông qua đó, thế hệ laptop nhà Asus này không chỉ thu hút người dùng bởi hiệu suất ấn tượng mà còn bởi thiết kế ngoại hình cuốn hút, phản ánh phong cách và đẳng cấp của người sở hữu.
             Hiển thị siêu thực, mượt mà trong từng khung hình với tần số quét lớn
             Màn hình của Asus TUF Gaming A15 FA507NU-LP140W đem lại trải nghiệm hình ảnh đỉnh cao với độ phân giải Full HD 1920 x 1080 pixels, cùng công nghệ màn hình IPS chống chói giúp màu sắc hiển thị thêm phần rực rỡ, sống động. Đặc biệt, tần số quét trên Asus TUF Gaming A15 FA507NU-LP140W còn lên đến 144Hz, mang lại khả năng hiển thị mượt mà, giảm nhiễu và xé hình. 
             Nhờ vậy mà mọi nhu cầu chiến game hay xem phim của người dùng đều được đáp ứng với trải nghiệm mượt mà hàng đầu. Kèm theo đó là độ phủ màu NTSC 72%, SRGB 100%, Adobe 75.35%, cho phép dòng máy tính xách tay Gaming nhà Asus đảm bảo trải nghiệm hình ảnh chân thực và sắc nét, trong từng chi tiết nhỏ.
             Viên pin lớn, cho phép thoải mái chiến game hay xử lý đồ hoạ suốt ngày dài
             Asus TUF Gaming A15 FA507NU-LP140W không chỉ mạnh mẽ về hiệu suất mà còn ấn tượng với khả năng sử dụng pin dài lâu. Theo đó, Asus TUF Gaming A15 FA507NU-LP140W sở hữu viên pin dung lượng lớn 90WHrs, hỗ trợ người dùng trong nhiều giờ làm việc, giải trí mà không cần sạc liên tục. 
             Kết hợp với mức năng lượng lớn này công nghệ sạc nhanh xuất sắc giúp giảm thiểu thời gian chờ đợi của người dùng trong quá trình nạp lại năng lượng cho máy. Thông qua tính năng ấn tượng về pin và khả năng sạc này, Asus TUF Gaming A15 FA507NU-LP140W trở thành lựa chọn lý tưởng cho những ai cần một phiên bản laptop đáng tin cậy mà không lo lắng về việc cạn kiệt năng lượng.
             ',
             'product_status' => 'Active', 
             'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Laptop ASUS ZenBook UM3402YA-KM074W','product_price' => 23990000,'product_qty' => 30, 'category_id' => 2,'brand_id' => 4,
             'product_images_1' => 'laptopasussa15_1.jpg','product_images_2' => 'laptopasussa15_2.jpg','product_images_3' => 'laptopasussa15_3.jpg',
             'product_description' => '
             Sở hữu thiết kế sang trọng khi khoác lên mình lớp vỏ màu đen ngọc thạch tối giản, thanh lịch được lấy cảm hứng từ vẻ đẹp của đá tự nhiên.
             CPU AMD Ryzen 5 5625U kết hợp cùng card AMD Radeon mang hiệu năng cao, tiết kiệm pin vận hành các tác vụ chơi game, làm đồ họa thiết kế.
             Ram 8 GB, ổ cứng 512GB SSD cho tốc độ xử lý nhanh, mở nhiều tab cùng lúc không bị giật, lag.
             Màn hình cảm ứng OLED 14 inch cùng độ phân giải lên đến 2.8K mang lại hình ảnh chân thực, rõ nét, sắc màu sống động.
             Bản lề gập mở 180 độ tối ưu hóa laptop thành một chiếc máy tính bảng dễ dàng chia sẻ thông tin cực tiện lợi. 
             Khung máy nhỏ gọn, trọng lượng chỉ 1.39kg sẵn sàng đồng hành mọi chuyến đi.
             Laptop Asus Zenbook UM3402YA-KM074W – Thiết kế sang trọng, hiệu năng ổn định
             Laptop Asus Zenbook UM3402YA-KM074W chiếm được khá nhiều tình cảm của người dùng nhờ lối thiết kế cũng như hiệu năng đỉnh cao mà nó mang lại. Để tìm hiểu thêm laptop Asus Zenbook UM3402YA-KM074W có phù hợp với nhu cầu sử dụng của bản thân hay không, hãy tìm hiểu chi tiết ngay sau đây.
             Thiết kế tinh gọn, trang nhã
             Asus Zenbook UM3402YA-KM074W chiếc laptop 2 in 1 mang 1 thiết kế cực kì mỏng nhẹ, hiện đại không thua kém bất kỳ chiếc máy tính đắt tiền nào. Với thiết kế màu đen phủ trên nền hợp kim nhôm bóng loáng chính là điểm nhấn. Cân nặng của chiếc máy này là vô cùng nhỏ nên tăng được tính linh động trong giải quyết công việc.
             Hiệu năng chuyên nghiệp, mạnh mẽ, màn hình sắc nét
             Nền tảng win 11 mới nhất cũng được cài đặt trên máy mang lại một khả năng hoạt động ổn địnhh. Asus Zenbook UM3402YA-KM074W với bộ GPU AMD Radeon™ Graphics, Ram 8GB cùng bộ lưu trữ ngoài SSD 512GB giúp bạn dễ dàng xử lý, lưu trữ cũng như giải quyết các công việc của mình 1 cách nhẹ nhàng, dễ dàng.
             Với màn hình 14 inch cực lớn cùng độ phân giải đến con số 2.8K cho phép người dùng chiêm ngưỡng được những hình ảnh sắc nét nhất, chân thực nhất đến từng khung hình. Đặc biệt màn hình laptop dành cho văn phòng Asus Zenbook UM3402YA-KM074W còn là màn hình OLED cực hiện đại giúp cho hình ảnh trên máy đã xịn nay lại càng xịn và đặc sắc hơn.
             ',
             'product_status' => 'Active', 
             'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Laptop HP Gaming Victus 15-FB1023AX 94F20PA','product_price' => 24490000,'product_qty' => 30, 'category_id' => 2,'brand_id' => 5,
            'product_images_1' => 'laptophpvictus15_1.jpg','product_images_2' => 'laptophpvictus15_2.jpg','product_images_3' => 'laptophpvictus15_3.jpg',
            'product_description' => '
            Sở hữu màn hình 15.6 inch với lớp vỏ đen thời thượng
            CPU Intel Core R5-7535HS hỗ trợ mình giải quyết nhanh gọn hàng loạt tác vụ mà không lo giật lag
            Card  RTX 2050 giúp giải quyết được khối lượng công việc nặng
            RAM 8GB cùng ổ cứng 512 GB SSD ch không gian lưu trữ đủ lớn, lưu trữ tài liệu, hình ảnh,...
            Laptop HP Gaming Victus 15 FB1023AX 94F20PA được trang bị bộ xử lý trung tâm AMD Ryzen 5 7535HS 6 nhân, 12 luồng với tốc độ xung nhịp lên tới 4.5GHz. RAM dung lượng 8GB xử lý tốt khối lượng công việc tốt và phù hợp để thiết kế đồ hoạ 2D. VGA NVIDIA Geforce RTX 2050 4GB trên laptop HP Victus này mang tới trải nghiệm chiến game mượt mà trên màn hình rộng 15.6 inch cùng tần số quét 144Hz ấn tượng. 
            Laptop HP Gaming Victus 15 FB1023AX 94F20PA - Hiệu năng mạnh mẽ
            Mặc dù chỉ mới gia nhập thị trường laptop gaming chưa lâu nhưng HP đã dần chiếm được cảm tình của khách hàng nhờ hiệu năng ổn định và cấu hình mạnh mẽ. Trong đó, laptop HP Victus 15 FB1023AX 94F20PA là một trong những mẫu máy đáng tham khảo ở thời điểm hiện tại với kiểu dáng trẻ trung và khả năng xử lý đáng kinh ngạc,
            Đa nhiệm mượt mà với RAM 8GB, SSD 512GB
            Laptop HP Gaming Victus 15 FB1023AX 94F20PA được trang bị RAM dung lượng 8GB chuẩn DDR5 giúp bạn chạy nhiều tác vụ cùng một lúc mà không bị giật, lag. Ngoài ra, máy sở hữu ổ cứng 512GB mang đến không gian lưu trữ khổng lồ. Bạn có thể tải về nhiều ứng dụng hay dữ liệu như video, hình ảnh độ phân giải cao mà không cần bận tâm về tình trạng đầy bộ nhớ. Không những vậy, SSD của Victus 15 FB1023AX 94F20PA còn tăng tốc độ ghi - xuất dữ liệu cho máy và bảo mật thông tin an toàn.
            Thiết kế gaming bắt mắt, khỏe khoắn
            Máy được hoàn thiện với phần vỏ ngoài làm từ nhựa cứng cao cấp, chống trầy xước tốt. Logo chữ V sáng bóng ở ngay trung tâm vô cùng nổi bật và thu hút. Viền máy mỏng mang đến vùng hiển thị rộng hơn, tạo cảm giác thoải mái và hài hoà khi làm việc hay thưởng thức các nội dung giải trí.
            Bên cạnh đó, với kích thước 15.6 inch, HP đã trang bị thêm bàn phím số tiện lợi cho Victus 15 FB1023AX 94F20PA. Đặc điểm này sẽ cực hữu ích cho các game thủ khi tham gia những trò chơi đòi hỏi sự hỗ trợ từ phím số. Đồng thời, bộ bàn phím còn được tích hợp thêm đèn LED - giải quyết hiệu quả trong trường hợp người dùng phải làm việc trong điều kiện ánh sáng yếu. 
            CPU AMD Ryzen 5 7535HS ổn định, phù hợp chơi game
            Nhà sản xuất đã đầu tư CPU AMD Ryzen 5 7535HS cho Victus 15 FB1023AX 94F20PA với tốc độ xung nhịp lên tới 4.5GHz - nâng cao hiệu suất trên các ứng dụng đơn luồng. Nhờ vậy, mẫu laptop này rất phù hợp cho việc chơi các tựa game ở độ phân giải từ trung bình đến cao. Máy sở hữu card đồ họa RTX 2050 4GB GDDR6 mang đến từng khung hình sống động.
            Đa cổng kết nối, pin dùng tới 6 tiếng
            Laptop HP Gaming Victus 15 FB1023AX 94F20PA hỗ trợ nhiều cổng kết nối như HDMI, USB Type-C/DisplayPort, LAN 1Gbps, Audio com,... Nhờ vậy, bạn có thể kết nối sản phẩm với những thiết bị ngoại vi nhanh chóng, phục vụ cho nhiều mục đích sử dụng khác nhau. Đặc biệt, cổng type-C cho phép sạc các thiết bị với công suất lớn, giảm thời lượng nạp pin hiệu quả. Máy sử dụng kiểu pin 3-cell, 52.5Wh cho thời gian sử dụng lên tới nhiều giờ đồng hồ.
            Màn hình FHD sống động, dải màu 45% NTSC
            Màn hình máy kích thước 15.6 inch sử dụng tấm nền IPS với độ phân giải FHD (1920*1080 pixels). Nhờ vậy, từng nội dung trên HP Gaming Victus 15 FB1023AX 94F20PA có độ hiển thị rõ ràng vì được chi tiết hoá những điểm ảnh nhỏ nhất trên màn hình. Đáng chú ý, khả năng tái tạo màu sắc trên máy tích hợp công nghệ IPS, độ phủ màu 45% NTSC bắt mắt và chân thực. Tần số quét cao hạn chế tốt tình trạng phản hồi trễ, xé hình hay bóng mờ. 
            ',
            'product_status' => 'Active', 
            'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Laptop HP Pavilion 14-DV2073TU 7C0P2PA','product_price' => 20090000,'product_qty' => 30, 'category_id' => 2,'brand_id' => 5,
             'product_images_1' => 'laptophppa14_1.jpg','product_images_2' => 'laptophppa14_2.jpg','product_images_3' => 'laptophppa14_3.jpg',
             'product_description' => '
             Thuộc phân khúc laptop học tập - văn phòng với kích thước nhỏ gọn, màn hình 14 inch tiêu chuẩn.
             Bộ vi xử lý Intel Core i5-1235U mạnh mẽ, xử lý mượt mà các tác vụ văn phòng như Word, Excel, PowerPoint.
             Card đồ họa tích hợp Intel Iris Xe Graphics cho khả năng chỉnh sửa hình ảnh cơ bản, làm poster trên Lightroom, Photoshop, Illustrator,... một cách trơn tru.
             16GB RAM DDR4 đáp ứng tốt khả năng đa nhiệm.
             Cùng ổ cứng SSD 512GB NVMe PCIe cho không gian lưu trữ các tài liệu học tập, làm việc.
             Đa dạng kết nối với các cổng như: USB Type-C, USB Type-A, HDMI 2.0, jack tai nghe/mic,...
             Laptop HP Pavilion 14-DV2073TU 7C0P2PA - Thiết kế thanh lịch, hiệu năng cao
             Laptop HP Pavilion 14-DV2073TU 7C0P2PA vẫn giữ nguyên nét đặc trưng thiết kế của hãng laptop HP Pavilion. Với ngoại hình đẹp mắt, màu vàng bên ngoài tạo nên vẻ ngoài đơn giản và hiện đại. Tìm hiểu nhiều hơn về sản phẩm laptop HP Pavilion qua bài viết sau đây nhé!
             Trọng lượng nhẹ nhàng, khả năng xử lý cao cấp
             Laptop HP Pavilion 14-DV2073TU 7C0P2PA là một trong những dòng máy có trọng lượng nhẹ nhàng. Cụ thể sản phẩm có độ mỏng 17mm và trọng lượng là 1,41kg. Với trọng lượng này sẽ tương đương nhiều mẫu laptop màn hình 14 inch. Nhờ đó mà tính di động của sản phẩm được nâng cấp vượt bậc.
             HP Pavilion 14-DV2073TU 7C0P2PA được cung cáp sức mạnh nhờ bộ vi xử lý Intel Core i5 1235U. Đây là một dòng chip vô cùng mạnh mẽ và tiết kiệm điện năng. Từ đó mà các khả năng xử lý các tác vụ mượt mà hơn bao giờ hết.
             Màn hình giải trí lớn, hỗ trợ âm thanh cao cấp
             Laptop HP Pavilion 14-DV2073TU 7C0P2PA có kích thước màn hình lên đến 14 inch cùng độ phân giải Full HD. Do đó sẽ cho phép người dùng sử dụng màn hình rõ nét đến từng chi tiết. Ngoài ra còn có tấm nền IPS mở rộng cùng góc nhìn đến 178 độ, đảm bảo cho người dùng cần khi chia sẻ thông tin trong việc học hay hội họp.
             Đặc biệt sản phẩm còn sở hữu công nghệ âm thanh Audio by Bang & Olufsen danh tiếng. Giúp người dùng có thể tận hưởng từng chất âm ở độ phân giải cao.
             ',
             'product_status' => 'Active', 
             'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Laptop HP Envy X360 BF0112TU 7C0N9PA','product_price' => 29690000,'product_qty' => 30, 'category_id' => 2,'brand_id' => 5,
             'product_images_1' => 'laptophpenvy_1.jpg','product_images_2' => 'laptophpenvy_2.jpg','product_images_3' => 'laptophpenvy_3.jpg',
             'product_description' => '
             Khối lượng nhẹ chỉ 1.34 kg dễ dàng mang theo nó bất cứ đâu.
             Màn hình cảm ứng nhỏ gọn 13.3 inch, độ phân giải 2.8K cho màu sắc chân thực, sống động.
             CPU Intel Core i5 - 1230U đi kèm RAM 16 GB và ổ cứng 512 GB SSD xử lý trơn tru các tác vụ nặng từ làm office đến phần mềm đồ họa cơ bản.
             Card đồ họa Intel Iris Xe Graphics đáp ứng tốt các nhu cầu đồ họa, thiết kế đồ họa hay chơi game cấu hình nhẹ.
             HP Envy X360 là dòng laptop sở hữu bộ vi xử lý Intel Core i5 Alder Lake - 1230U, kết hợp cùng RAM 16 GB xử lý mượt mà các tác vụ đa nhiệm nặng. Máy tích hợp ổ cứng 512GB PCIe Gen4 NVMe cho không gia lưu trữ lớn, cùng màn 13.3 inch với độ phân giải sắc nét. Đặc biệt, laptop có thiết kế bản lề 360 độ linh hoạt cùng đầy đủ các cổng kết nối.
             Laptop HP Envy X360 - Màn đẹp sắc nét, gập 360 tiện lợi
             Laptop HP ENVY X360 đứng trong hàng ngũ những thiết bị 2 trong 1 tiên tiến và độc đáo. Mặc dù có thiết kế mỏng nhẹ, máy vẫn đáp ứng tốt nhu cầu công việc hàng ngày với khả năng xử lý tác vụ nặng mượt mà.
             Tác vụ nhanh gọn với RAM 16GB 
             Với bộ nhớ trong 16GB DDR4 và tốc độ bus RAM lên đến 4266 MHz, laptop HP Envy X360 đảm bảo hiệu suất đa nhiệm tối ưu. Khả năng xử lý đồng thời nhiều ứng dụng mà không gặp tình trạng giật lag giúp người dùng trải nghiệm mượt mà và linh hoạt hơn.
             Về ổ cứng, chiếc laptop HP Envy X360 sở hữu dung lượng 512GB PCIe Gen4 NVMe TLC M.2 SSD. Với dung lượng này, người dùng có đủ không gian lưu trữ cho mọi nhu cầu: từ tài liệu, hình ảnh, video cho đến các ứng dụng công việc và giải trí. Không chỉ rộng rãi về dung lượng, ổ cứng này còn mang lại tốc độ đọc/ghi nhanh chóng, giúp tiết kiệm được nhiều thời gian làm việc hàng ngày. 
             Thiết kế 2 trong 1 độc đáo 
             Thiết kế của laptop Envy X360 này đã được tối ưu hóa để mang lại sự thuận tiện và đa năng cho người dùng. Với khối lượng siêu nhẹ chỉ 1.34 kg, việc di chuyển và mang theo máy trở nên dễ dàng hơn bao giờ hết, giúp bạn có thể sáng tạo mọi lúc mọi nơi. Bên cạnh đó, việc tích hợp Stylus pen vào thân máy cho phép bạn phác thảo ý tưởng một cách tự nhiên và nhanh chóng.
             Về thiết kế tổng thể, laptop HP Envy X360 đã trải qua sự cải tiến với việc giảm viền xung quanh màn hình, tạo nên một hình dáng nhỏ gọn và thanh lịch hơn. Bề mặt kim loại màu bạc sáng làm tăng thêm sự sang trọng cho sản phẩm. Đặc biệt, bản lề 360 độ linh hoạt cho phép máy chuyển đổi giữa chế độ laptop và máy tính bảng vô cùng mượt mà. 
             Đáp ứng đủ nhu cầu đồ hoạ
             Card đồ họa trên laptop HP Envy X360 này đã được tối ưu hóa để đáp ứng mọi nhu cầu sử dụng từ cơ bản đến phức tạp. Với vi xử lý Intel Core i5 Alder Lake - 1230U, máy không chỉ mạnh mẽ trong việc xử lý các tác vụ văn phòng thông thường mà còn hoàn toàn đủ sức đối phó với các phần mềm đồ họa cơ bản.
             Với card đồ họa Intel Iris Xe Graphics tích hợp, laptop Envy X360 hoàn toàn có khả năng xử lý các tác vụ đồ họa từ cơ bản đến nâng cao. Bạn có thể thực hiện các công việc như chỉnh sửa ảnh, thiết kế đồ họa, hay thậm chí là trải nghiệm các trò chơi cấu hình nhẹ một cách mượt mà và ổn định. Đồ họa trên chiếc HP này xứng đáng với sự kỳ vọng của người dùng.
             Pin dùng lâu dài, đa cổng kết nối
             Laptop HP Envy X360 BF0112TU 7C0N9PA được trang bị pin 4-cell với dung lượng lên đến 66 Wh, giúp mang lại thời lượng pin ấn tượng. Với dung lượng này, người dùng có thể yên tâm sử dụng máy trong thời gian dài mà không lo ngại về việc cần sạc pin liên tục.
             Dù có thiết kế mỏng nhẹ và sang trọng, nhưng máy Envy X360 vẫn đảm bảo đầy đủ các cổng kết nối quan trọng. Người dùng có thể dễ dàng kết nối với các thiết bị khác nhờ jack 3.5 mm, Thunderbolt 4 với USB-C và cổng SuperSpeed USB A.
             Với việc tích hợp Intel® Wi-Fi 6E AX211 (2x2), laptop HP Envy X360 đảm bảo tốc độ kết nối mạng không dây vượt trội, phục vụ tốt cho mọi nhu cầu từ học tập đến giải trí. Đồng thời, Bluetooth® 5.2 combo cũng giúp người dùng linh hoạt trong việc kết nối và truyền dữ liệu với các thiết bị khác một cách dễ dàng và nhanh chóng.
             Màn OLED 2K sắc nét bắt trọn chuyển động hình ảnh
             Laptop HP Envy X360 BF0112TU 7C0N9PA sở hữu màn hình 13.3 inch với độ phân giải 2880 x 1800, đem đến trải nghiệm hình ảnh vô cùng sắc nét và chân thực. Đặc biệt, với hỗ trợ chuẩn màu DCI-P3 100%, màu sắc trên màn hình được tái tạo một cách sống động và chân thật, phục vụ tốt cho cả giải trí lẫn công việc thiết kế đồ họa chuyên nghiệp.
             Công nghệ màn hình OLED trên HP Envy X360 mang đến đẳng cấp màu sắc hàng đầu, đảm bảo mỗi hình ảnh hiển thị trên máy đều chính xác và sống động. Khả năng cảm ứng mượt mà trên màn hình cho phép người dùng tận dụng toàn bộ tiềm năng của máy, từ chức năng laptop đến chế độ máy tính bảng.
             Để tăng cường độ bền, màn hình của laptop Envy X360 này được trang bị kính Corning® Gorilla® Glass NBT™. Đây là một lớp kính chống trầy, chống ăn mòn và chống sốc, đảm bảo bề mặt màn hình luôn sáng bóng và bền bỉ theo thời gian, cung cấp sự an tâm cho người dùng. 
             ',
             'product_status' => 'Active', 
             'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Macbook Air M3 13','product_price' => 27990000,'product_qty' => 30, 'category_id' => 2,'brand_id' => 1,
             'product_images_1' => 'macbookairm3_1.jpg','product_images_2' => 'macbookairm3_2.jpg','product_images_3' => 'macbookairm3_3.jpg',
             'product_description' => '
             Sức mạnh xử lý hàng đầu trên chip Apple M3 - Cân tốt mọi tác vụ từ đồ hoạ đến lập trình
             Màn hình Liquid Retina 13,6 inch - Màu sắc hiển thị rực rỡ, sắc nét
             Camera FaceTime HD 1080p - Đàm thoại, hội họp mọi lúc mọi nơi
             Hỗ trợ sạc 30W - Nhanh chóng nạp đầy pin khi bạn cần
             Apple Macbook Air 13 M3 với con chip Apple M3 mạnh mẽ cùng công nghệ dò tia tốc độ cao mang lại trải nghiệm dùng mượt mà. Laptop sở hữu một thiết kế siêu mỏng với độ dày 1,13 cm giúp người dùng dễ dàng mang theo. Macbook Air 13 được trang bị wifi 6E mang lại tốc độ nhanh hơn đến 2x lần so với wifi 622.
             Apple Macbook Air 13 M3 – Thiết kế mỏng nhẹ, hiệu năng vượt trội
             Apple Macbook Air 13 M3 là mẫu Macbook Air thế hệ 2024 với nhiều nâng cấp về cấu hình. Vậy chính xác dòng Macbook Air m3 này có gì nổi bật đáng để mua sử dụng thì cùng tìm hiểu chi tiết sau đây.
             RAM 8GB cùng dung lượng lưu trữ 256GB mượt mà
             Macbook Air 13 M3 sở hữu bộ nhớ RAM 8GB mang lại khả năng đa nhiệm ổn định. Với dung lượng RAM này, Macbook cho phép người dùng có thể hoạt động cùng lúc nhiều ứng dụng. Cùng với đó, Macbook còn sở hữu bộ nhớ lưu trữ 256GB giúp mang lại không gian lưu trữ rộng.
             Thiết kế siêu mỏng, bàn phím Magic Keyboard
             Apple Macbook Air 13 inch sở hữu một thiết kế siêu mỏng với độ dày chỉ 1,13 cm. Thiết kế mỏng nhẹ trên Macbook giúp sản phẩm có thể dễ dàng mang theo trong công việc và giải trí. Bên cạnh đó, Macbook còn được thiết kế thân thiện với môi trường với vỏ máy được hoàn thiện từ nhôm vật liệu tái chế.
             Macbook Air 13 M3 thế hệ 2024 này được trang bị tới 4 phiên bản màu sắc khác nhau từ đêm xanh thẳm đến ánh sao, xám không gian, bạc. Macbook còn được trang bị công nghệ bảo mật touch ID trên nút nguồn mang lại khả năng mở khóa nhanh chóng.
             Apple Macbook Air 13 M3 với bàn phím Magic Keyboard có hỗ trợ đèn nền giúp người dùng có thể sử dụng thiết bị dễ dàng kể cả trong điều kiện thiếu sáng. Cùng với đó, bàn phím với độ ồn gõ thấp không ảnh hưởng đến người dùng bên cạnh.
             Màn hình Liquid Retina 13 inch, hiển thị vượt trội
             Macbook Air 13 M3 được trang bị một màn hình kích thước 13 inch vừa phải. Màn hình Liquid Retina với khả năng hiển thị lên đến 1 tỷ màu nhờ đó các chi tiết hiển trị trên màn hình vô cùng chân thực, chi tiết sắc nét.
             Chip Apple M3 mạnh mẽ với công nghệ dò tia tốc độ cao
             Macbook Air 13 2024 được nâng cấp lên con chip M3, con chip thế hệ mới này cho tốc độ nhanh hơn đến 1,6x lần so với M1. Con chip M3 với kiến trúc GPU thế hệ mới kết hợp với công nghệ dò tia tốc độ cao bằng phần cứng, Dynamic Caching. Cấu hình này giúp tăng cường hiệu năng cho Macbook cũng như hỗ trợ hiển thị hình ảnh chân thực.
             Con chip M3 hỗ trợ thiết bị có những trải nghiệm gaming mượt mà hơn. Cùng với đó Macbook Air M3 còn tối ưu cho các công việc đồ họa với khả năng chỉnh sửa và video nhanh hơn 13x, lọc và xử lý hình ảnh 2,8x và kết xuất 3D tới 5,8x lần.
             Pin bền bỉ cùng hệ thống cổng kết nối đa dạng
             Macbook Air M3 được trang bị viên pin Li-Po 52,6 watt-giờ giúp mang lại một thời lượng sử dụng bền bỉ. Cùng với đó, sản phẩm còn được trang bị sạc nhanh công suất 30W thông qua cổng sạc USB-C.
             Cùng với dung lượng pin lớn, Macbook còn được hệ thống cổng kết nối đa dạng với cổng sạc MagSafe 3, jack cắm tai nghe 3,5 mm cùng với đó là 2 cổng Thunderbolt / USB 4. 
             ',
             'product_status' => 'Active', 
             'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Apple MacBook Pro 13 M2 2022','product_price' => 41990000,'product_qty' => 30, 'category_id' => 2,'brand_id' => 1,
             'product_images_1' => 'macbookpro13m2_1.jpg','product_images_2' => 'macbookpro13m2_2.jpg','product_images_3' => 'macbookpro13m2_3.jpg',
             'product_description' => '
             Vẻ ngoài sang trọng, siêu mỏng nhẹ - trọng lượng chỉ 1.4kg
             Chip Apple M2 chạy mượt các úng dụng đồ hoạ như Phototshop, Premier hay các phần mềm văn phòng Word, Exel, Powerpoint
             Ram 8GB - Đa nhiệm mượt mà, mở cùng lúc nhiều ứng dụng hay tab trình duyệt mà không lo giật lag
             Màn hình Retina cùng các công nghệ như True Tone, Wide Color - Màu sắc hiển thị sắc nét, trải nghiệm giải trí tuyệt vời hơn bao giờ hết
             Tích hợp touch bar - Các thao tác nhu chụp màn hình, chỉnh âm lượng trở nên dễ dàng hơn
             Webcam 720p - Sẵn sàng tham gia các buổi họp trực tuyến hay họp online
             ',
             'product_status' => 'Active', 
             'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'MacBook Pro 16 inch M2 Pro 2023','product_price' => 65990000,'product_qty' => 30, 'category_id' => 2,'brand_id' => 1,
             'product_images_1' => 'macbookpro16_1.jpg','product_images_2' => 'macbookpro16_2.jpg','product_images_3' => 'macbookpro16_3.jpg',
             'product_description' => '
             Thiết kế sang trọng - Vỏ kim loại cùng trọng lượng chỉ 2.15kg dễ dàng mang theo mọi nơi
             Hiển thị chân thật - Kích thước màn hình 16.2 inch cùng tần số quét lên đến 120Hz
             Cấu hình mạnh mẽ - Ram 16GB cùng SSD 512 GB đa nhiệm mượt mà, tránh tình trạng giật lag
             Xử lý tốt các tác vụ đồ hoạ - GPU 19 nhân giúp việc render videor hay chỉnh sửa ảnh diễn ra một cách nhẹ nhàng.
             Macbook Pro 16 inch 2023 M2 Pro – Đồ họa ấn tượng, cấu hình mạnh mẽ
             Macbook Pro 16 inch M2 Pro 2023 có thiết kế và tính năng ấn tượng có những ý kiến tích cực từ phía khách hàng. Chiếc Macbook Pro 2023 được sản xuất bởi nhà Apple, thương hiệu có tiếng trong thị trường công nghệ, nên càng nâng cao vị thế của sản phẩm khi ra mắt. 
             Cấu hình mạnh mẽ, ổn định với con chip M2 Pro
             Macbook Pro 16 2023 M2 Pro trang bị cấu hình nổi trội nhờ con chipset M2 Pro 12 nhân, 19 nhân GPU, 16 nhân Neural Engine cùng băng thông bộ nhớ lên đến 200GB/s. Nhờ vậy laptop sẽ hoạt động mạnh mẽ, ổn định trong nhiều giờ liền. Hiệu năng hoạt động của máy được nâng cao lên gấp nhiều lần so với sản phẩm thông thường khác trên thị trường.
             Dung lượng pin khủng, người dùng sử dụng liên tục, sau khi cạn pin có thể nạp đầy nhờ củ sạc nhanh đi kèm tăng khả năng sạc pin cho máy, không cần phải chờ đợi trong thời gian dài. Sản phẩm đã có độ hot nhất định từ lúc chưa tung ra thị trường cho đến bây giờ.
             Thiết kế tinh tế thời thượng, trọng lượng nhẹ dễ mang đi
             Macbook Pro 16 inch M2 Pro 2023 có thiết kế hiện đại, với viền mỏng nhẹ, màn hình lớn 16 inch giúp người dùng có trải nghiệm ấn tượng hơn khi xem phim, lướt web. Công nghệ màn hình Promotion, hình ảnh mang đến sắc nét và hiển thị hàng triệu sắc màu trên một khung hình.
             Kích thước Macbook Pro 16 inch gọn nhẹ: W35.57 x H1.68 x D24.81 (cm). Trong khi trọng lượng chỉ 2.15kg, người dùng dễ dàng mang đi nhiều nơi khác nhau để tiến hành học tập, làm việc.
             Với bàn phím có độ nảy tốt, tiến độ công việc sẽ được tăng lên, đạt hiệu quả khi sử dụng trong thời gian dài, laptop có tốc độ màn hình làm mới nhanh chóng lên đến từng giây, không sợ bị trễ khi đang thực hiện các thao tác trên sản phẩm. Chất liệu của Macbook Pro 16 inch M2 Pro 2023 cao cấp, cứng cáp giúp tăng sự bền bỉ, hạn chế trầy xước trong quá trình sử dụng.
             Laptop có chế độ ban đêm, giúp hạn chế ánh sáng xanh, ảnh hưởng trực tiếp đến mắt, giảm thiểu các tật khúc xạ khi tiếp xúc với thiết bị thông minh quá nhiều. Mật khẩu của laptop còn giúp bảo vệ sản phẩm khỏi kẻ xấu khi muốn lấy cắp thông tin quan trọng trong máy chủ của người dùng. 
             Đồ họa ấn tượng
             Macbook Pro 16 inch 2023 M2 Pro có camera sắc nét, quay phim hay chụp ảnh rõ ràng mà không lo bị nhòe. Do đó, người dùng sẽ có trải nghiệm ấn tượng khi chiến game, xem phim nhờ card đồ họa ấn tượng, hình ảnh sống động, rực rỡ đến từng chi tiết nhỏ. 
             Bên cạnh đó, kết hợp với hình ảnh là âm thanh, với âm thanh đa chiều, rõ đến từng nhịp bass, tiếng trống trong bài nhạc, người dùng sẽ thư giãn sau một khoảng thời gian dài làm việc tại công ty hay học tập tại trường. Ngoài ra, người dùng sẽ có khoảnh khắc bùng nổ khi chiến game cùng bạn bè, hay xem phim cùng người thân.
             ',
             'product_status' => 'Active', 
             'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Apple Watch SE 2022','product_price' => 8490000,'product_qty' => 30, 'category_id' => 3,'brand_id' => 1,
             'product_images_1' => 'applewatchlse_1.jpg','product_images_2' => 'applewatchlse_2.jpg','product_images_3' => 'applewatchlse_3.jpg',
             'product_description' => '
             Thiết kế trẻ trung, năng động - Viền nhôm sang trọng, màn hình Oled hiển thị tốt kể
             Thao tác mượt mà - Tích hợp chip S8 SiP cùng hệ điều hành WatchOS 9 mới nhất
             Phát hiện va chạm - Tự động phát cảnh báo và gửi vị trí cho người thân khi phát hiện tai nạn
             Sức khoẻ được theo dõi liên tục - Cảm biến nhịp tim thế hệ 2, tính năng theo dõi thuốc
             Pin lên đến 18 giờ cho 1 lần sạc, cùng chế độ tiết kiệm pin cho phép sử dụng lâu hơn
             Apple Watch SE 2022 44mm GPS viền nhôm chính là siêu phẩm với đầy sự tinh tế, hiện đại và đẳng cấp sẽ được nhà Táo cho ra mắt vào tháng 9 năm nay. Với nhiều cập nhật nổi bật về thiết kế, nhiều công nghệ màn hình hiện đại hơn và nhiều tiện ích mở rộng hơn được đưa ra thì đây chắc chắn chính là chiếc đồng hồ bạn nên lựa chọn. Hãy tham khảo thêm cho mình một vài thông tin về chiếc đồng hồ này ngay sau đây để có thể hiểu thêm về nó và các đặc tính nổi bật của nó nhé.
             Đánh giá tổng quan về Apple Watch SE 2022 44mm GPS
             Dù được nhận định rằng sẽ lại là một siêu phẩm trong dòng đồng hồ thông minh nhưng Apple Watch SE 2022 44mm GPS vẫn được kỳ vọng sẽ có được nhiều hơn những cải tiến nổi bật hơn về thiết kế, tính năng và tiện ích để tạo được điểm nhấn so với các dòng Apple Watch đã quá nổi trước đó của nhà Táo.
             Điểm qua một vài thông tin và đánh giá tổng quan về các khía cạnh của chiếc đồng hồ thông minh này của Apple để có cái nhìn đúng và chân thực hơn về nó nhé.
             Thiết kế khung nhôm sang trọng
             Apple Watch SE 2022 44mm GPS lần này vẫn là một tái thiết kế mang đầy nét riêng và quen thuộc vốn có của những chiếc Apple Watch nhà Táo – “Planet in mind- Thiết kế mặt lưng ”.
             ', 
             'product_status' => 'Active', 
             'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Apple Watch Ultra 49MM (4G)','product_price' => 23990000,'product_qty' => 30, 'category_id' => 3,'brand_id' => 1,
             'product_images_1' => 'applewatchultra_1.jpg','product_images_2' => 'applewatchultra_2.jpg','product_images_3' => 'applewatchultra_3.jpg',
             'product_description' => '
             Bền bỉ trước mọi thử thách - Khung viền titan, mặt kính Sapphire mang lại độ bền chuẩn quân đội MIL-STD 810H
             Trợ lý sức khoẻ 24/24 - Cảm biến nhịp tim, cảm biến nhiệt, nhận diện va chạm xe
             Tập luyện chuyên nghiệp - Tích hợp nhiều chế độ thể thao đo như lặn, bơi, đạp xe
             Lặn sâu đến 40m, chống bụi xâm nhập - Đạt chứng nhận EN13319, IPX6
             Pin lên đến 36 giờ khi sử dụng thông thường, 60 giờ ở chế độ tiết kiệm pin
             Nhiều tính năng tiện lợi - Nghe nhạc trên đồng hồ, trợ lý ảo
             Apple Watch Ultra 49mm (4G) - Viền Titan - Dây vải cỡ nhỏ - Cá tính, bền bỉ và chuyên nghiệp
             Apple Watch Ultra 49mm (4G) viền Titan - dây vải cỡ nhỏ là dòng smartwatch được Apple trình làng mới nhất trong sự kiện ra mắt sản phẩm thường niên. Sản phẩm Apple Watch Ultra được hãng dành riêng cho các tín đồ yêu thích sự mạo hiểm, thể thao, khám phá.
             Thiết kế cá tính cùng độ bền bỉ cao
             Với phiên bản Ultra, Apple đã trang bị thêm cho dòng sản phẩm smartwatch của mình khung viền Titanium. Đồng thời, mặt kính cũng được trang bị với chất liệu Sapphire cao cấp không những tăng thêm độ sang trọng mà còn giúp cho thiết bị có thể bền bỉ hơn.
             Cạnh đó, Apple Watch Ultra 49mm (4G) viền Titan - dây vải cỡ nhỏ cũng đã được kiểm tra độ bền trước khi ra mắt thị trường. Kết quả đạt độ bền chuẩn quân đội khẳng định độ bền bỉ của chiếc đồng hồ và còn có thể hạn chế mọi hư hỏng.
             ', 
             'product_status' => 'Active', 
             'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Đồng hồ Samsung Galaxy Fit 3','product_price' => 1390000,'product_qty' => 30, 'category_id' => 3,'brand_id' => 2,
             'product_images_1' => 'samsungfit3_1.jpg','product_images_2' => 'samsungfit3_2.jpg','product_images_3' => 'samsungfit3_3.jpg',
             'product_description' => '
             Thời lượng pin bền bỉ lên đến 13 ngày sử dụng
             Màn hình lớn 1.6 inch Amoled dễ dàng theo dõi thông tin
             Tự động phát hiện té ngã và gửi trợ giúp ngay trong những tình huống khẩn cấp
             Theo dõi giấc ngủ và hơn 100 chế độ luyện tập được tích hợp sẵn
             Đồng hồ Samsung Galaxy Fit 3 thiết kế thanh mảnh, gọn gàng, màn hình AMOLED 1.6 inch, trọng lượng chỉ 36.8g, kháng nước 5ATM và bụi IP68 cùng viên pin 208mAh kéo dài dến 13 ngày ấn tượng tích hợp sạc không dây.
             Thiết kế gọn nhẹ, tinh giản và khả năng kháng nước 5ATM, kháng bụi IP68
             Đồng hồ Galaxy Fit 3 có sự thay đổi về mặt thiết kế khi sở hữu mặt đồng hồ dạng chữ nhật, màn hình  1.6 inch cùng trọng lượng chỉ 36.8g. Với thiết kế thanh mảnh, gọn gàng đồng hồ Galaxy Fit 3 cũng chính là một món phụ kiện hiện đại.
             ', 
             'product_status' => 'Active', 
             'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Samsung Galaxy Watch 4 Classic','product_price' => 4190000,'product_qty' => 30, 'category_id' => 3,'brand_id' => 2,
             'product_images_1' => 'samsungwatch4_1.jpg','product_images_2' => 'samsungwatch4_2.jpg','product_images_3' => 'samsungwatch4_3.jpg',
             'product_description' => '
             ĐẶC ĐIỂM NỔI BẬT
             Thiết kế sắc nét, vòng bezel xoay tiện lợi, phần mềm thông minh và cảm biến sức khỏe nổi bật của Galaxy Watch 4 Classic 46mm đã giúp nó trở thành chiếc đồng hồ cần thiết với nhiều người. 
             Galaxy Watch 4 Classic tích hợp cảm biến sức khỏe 3 trong 1 để đo nhịp tim, lấy điện tâm đồ và đọc thành phần cơ thể. Với những tính năng này, không còn nghi ngờ gì khi sản phẩm từ Samsung xứng đáng là đồng hồ thông minh tốt nhất.
             Thiết kế Galaxy Watch Classic 46mm
             Sản phẩm có khung được thiết kế lại cho phép chuyển đổi dễ dàng hơn. Bộ nút bấm đồng nhất cũng có hình dạng thuôn dài, thay vì một núm tròn nhô ra đi kèm với một nút bên phẳng.
             Galaxy Watch 4 Classic 46mm có khung bezel xoay, vừa là công cụ điều hướng tiện dụng vừa là con quay fidget spinner tuyệt vời. Kể từ khi chiếc Samsung Galaxy Watch ban đầu ra mắt khung bezel, nó đã trở thành biểu tượng cho sản phẩm - tương tự như bút S Pen trên Galaxy Note.
             Hoạt động trên hệ điều hành One UI Watch
             Phần mềm của đồng hồ thông minh Samsung năm nay cung cấp trải nghiệm tốt nhất mà bạn từng có khi sử dụng One UI Watch. Phần mềm vẫn mang lại cảm giác rất Tizen-esque, nhưng đó là một điều tốt. Nó cho phép bạn tìm kiếm và chuyển đổi giữa các ứng dụng và menu và thiết lập các trang một cách liền mạch.
             Việc bổ sung One UI Watch làm cho Galaxy Watch 4 Classic trở thành một thành viên tích cực hơn trong hệ sinh thái thiết bị Samsung. One UI Watch cũng có sẵn một thư viện mặt đồng hồ khổng lồ, từ đơn giản đến hoạt ảnh động vật và các biến thể phối hợp nhiều màu sắc. Điều đó giúp bạn thỏa sức thay đổi mặt đồng hồ mỗi ngày.
             Tính năng mới: Phân tích thành phần cơ thể
             Samsung đã phát triển một cảm biến sức khỏe mới cho Galaxy Watch năm nay. Nó kết hợp theo dõi nhịp tim (PPG), một đầu đọc điện tâm đồ (ECG) và phân tích trở kháng điện sinh học (BIA) cho một cảm biến 3 trong 1 đặt gần da hơn cảm biến sức khỏe cá nhân trong Galaxy Watch trước đó.
             Trong số đó, BIA là nâng cấp lớn. Nó hoạt động tương tự như những gì bạn tìm thấy trên cân thông minh tốt nhất. BIA gửi một dòng điện yếu qua cơ thể của bạn để phân tích tỷ lệ phần trăm chất béo cơ thể, chỉ số khối cơ thể (BMI), khối lượng cơ, khối lượng xương, tỷ lệ phần trăm nước trong cơ thể và hơn thế nữa.
             Khi được sử dụng đúng cách, phân tích thành phần cơ thể có thể giúp bạn hiểu những thay đổi đối với chế độ ăn uống hoặc hoạt động ảnh hưởng như thế nào đến sức khỏe bên trong - không chỉ là cân nặng của bạn. 
             ', 
             'product_status' => 'Active', 
             'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Samsung Galaxy Watch6 40mm LTE SM-R935F','product_price' => 7490000,'product_qty' => 30, 'category_id' => 3,'brand_id' => 2,
             'product_images_1' => 'samsungwatch6_1.jpg','product_images_2' => 'samsungwatch6_2.jpg','product_images_3' => 'samsungwatch6_3.jpg',
             'product_description' => '
             Samsung Galaxy Watch6 được nâng cấp với nhiều tính năng nổi bật như: Theo dõi giấc ngủ chính xác hơn, theo dõi sức khỏe người dùng, đo và cảnh báo bất thường nhịp tim, thiết kế mới với viền benzel mỏng hơn, màn hình hiển thị của đồng hồ tăng đến 20%. Đặc biệt, Galaxy Watch6 có thời lượng pin lên đến 40 giờ và có thể sạc nhanh đạt đến 45% chỉ trong vòng 30 phút. Phiên bản LTE cho phép kết nối nghe gọi trực tiếp
             Sản phẩm chính hãng Samsung Việt Nam, bảo hành theo đúng chính sách của hãng.
             Tình trạng: Máy mới 100% full box nguyên seal đầy đủ phụ kiện
             Màu sắc: Đen
             ', 
             'product_status' => 'Active', 
             'created_at' => now(),'updated_at' => now()],
        //them

            ['product_name' => 'Tai nghe Gaming Xiaomi Black Shark JoyBuds SE','product_price' => 1150000,'product_qty' => 30, 'category_id' => 4,'brand_id' => 3,
            'product_images_1' => 'tainghexiaomse_1.jpg','product_images_2' => 'tainghexiaomse_2.jpg','product_images_3' => 'tainghexiaomse_3.jpg',
            'product_description' => '
            Tai nghe Gaming Xiaomi Black Shark JoyBuds SE có độ trễ cực thấp dành riêng cho Game thủ. Với thiết kế cool ngầu, đậm chất gaming mang đến trải nghiệm đàm thoại ổn định, cùng thời lượng pin lên tới 24 giờ khi sử dụng kèm dock sạc. Một lựa chọn hoàn hảo với mức giá phổ thông mà các tín đồ công nghệ không nên bỏ lỡ.
            Thông số kỹ thuật
            Kết nối: Bluetooth 5.3 
            Chuẩn âm thanh: SBC, AAC
            Phạm vi kết nối: 10m 
            Kháng nước: IPX4 
            Dung lượng pin: 45mAh( Tai nghe) / 400mAh( Hộp sạc)
            ', 
            'product_status' => 'Active', 
            'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Tai nghe Gaming Xiaomi Black Shark JoyBuds','product_price' => 1150000,'product_qty' => 30, 'category_id' => 4,'brand_id' => 3,
            'product_images_1' => 'tainghexiaomibsj_1.jpg','product_images_2' => 'tainghexiaomibsj_2.jpg','product_images_3' => 'tainghexiaomibsj_3.jpg',
            'product_description' => '
            Tai nghe Gaming Xiaomi Black Shark JoyBuds- Phiên bản tai nghe Bluetooth có độ trễ cực thấp dành riêng cho Game thủ. Với thiết kế cool ngầu, đậm chất gaming, hỗ trợ giảm tiếng ồn cuộc gọi ENC, mang đến trải nghiệm đàm thoại ổn định, cùng thời lượng pin lên tới 28 giờ khi sử dụng kèm dock sạc. Một lựa chọn hoàn hảo với mức giá phổ thông mà các tín đồ công nghệ không nên bỏ lỡ.
            Thiết kế nhỏ gọn, cho cảm giác đeo thoải mái
            Bên cạnh đường nét mượt mà trên thiết kế, tai nghe chống ồn Black Shark còn thu hút người dùng bởi sự nhỏ nhắn và linh hoạt với kích thước được tối giản, trọng lượng chỉ khoảng 4.5g. Kết cấu tai nghe với thiết kế bán trong tai, không ép chặt ống tai, khéo léo vừa vặn với đường viền của tai, sẽ giúp giải phóng áp lực cho đôi tai để bạn có được trải nghiệm đeo êm ái hơn khi sử dụng trong thời gian dài.
            Kết nối Bluetooth 5.2 - độ trễ cực thấp
            Tai nghe Black Shark JoyBuds sử dụng giao thức Bluetooth 5.2 mới nhất, kết hợp cùng công nghệ độ trễ thấp do hãng phát triển, giúp âm thanh truyền tải nhanh chóng và ổn định hơn. Hỗ trợ độ trễ thấp tới 30ms, khi ghép nối với điện thoại thì độ trễ là 85ms, mang đến trải nghiệm xem video và chơi game nhập vai thú vị hơn, nhờ vào khả năng đồng bộ mượt mà giữa âm thanh và hình ảnh.
            Âm thanh cân bằng, ổn định
            Tai nghe chơi game JoyBuds lần này cũng được trang bị màng loa composite mạ titan có độ nhạy cao với kích thước 14.2mm, mang lại độ động và chi tiết âm thanh phong phú. Thiết kế đi kèm ống bass chuyên nghiệp, giúp tái tạo âm thanh để đạt được độ trầm bổng đẹp đẽ với sự cân bằng của ba dải âm.
            Chống ồn ENC, đàm thoại rõ ràng
            Ngoài ra, mỗi bên tai nghe còn được trang bị hai micro đa hướng, kết hợp với thuật toán giảm tiếng ồn xung quanh ENC để lọc tiếng ồn bên ngoài một cách thông minh. Từ đó khi thực hiện các cuộc gọi đàm thoại, giọng nói của bạn sẽ được khôi phục một cách trung thực để người bên kia có thể nghe rõ hơn ngay cả khi đang di chuyển trên đường, trạm xe bus,... nơi có nhiều tiếng ồn.
            Pin 28 giờ, chống nước IPX4
            Tai nghe Bluetooth Xiaomi được trang bị dock sạc dung lượng 400mAh, cung cấp thời gian sử dụng lên tới 6 giờ. Đặc biệt, khi đi kèm với dock sạc thì thời lượng pin của tai nghe có thể kéo dài đến 28 giờ. Thiết kế cổng sạc Type-C, giúp sạc đầy pin chỉ với 1.5 giờ.
            Ngoài ra, mẫu tai nghe gaming của tai nghe Bluetooth Xiaomi Black Shark còn được tích hợp chuẩn chống nước IPX4, hỗ trợ chống nước nhẹ khi tiếp xúc với mồ hôi, giúp người dùng an tâm hơn khi đi mưa, tập luyện thể thao.
            ', 
            'product_status' => 'Active', 
            'created_at' => now(),'updated_at' => now()],
        //them
            ['product_name' => 'Tai nghe TWS Redmi AirDots 3 Pro WSEJ01ZM','product_price' => 1390000,'product_qty' => 30, 'category_id' => 4,'brand_id' => 3,
            'product_images_1' => 'tainghetwsredmi3pro_1.jpg','product_images_2' => 'tainghetwsredmi3pro_2.jpg','product_images_3' => 'tainghetwsredmi3pro_3.jpg',
            'product_description' => '
            Nếu như Redmi AirDots 3 bản tiêu chuẩn có thiết kế tương đối phổ thông và giống với đa số các mẫu tai nghe không dây TWS trên thị trường thì bản Pro đi theo một phong cách riêng khá mới mẻ. Phiên bản Pro lần này mang tới một sự thay đổi hoàn toàn về thiết kế.
            Thiết kế
            Ngoại hình của Redmi AirDots 3 Pro khá giống với mẫu tai nghe không dây TWS Pixel Buds tới từ Google. Chiếc tai nghe này đi kèm driver âm thanh 9mm cùng 3 microphone thu âm hỗ trợ tối ưu hoá chất giọng của người nói cũng như hỗ trợ cho khả năng chống ồn chủ động ANC. Theo Redmi quảng cáo, AirDots 3 Pro cho khả năng khử ồn tới 35dB.
            Redmi AirDots 3 Pro hỗ trợ công nghệ Bluetooth 5.2 mới cho phép kết nối tới nhiều thiết bị cùng lúc, được tối ưu hoá khi sử dụng cùng với các thiết bị smartphone chạy MIUI, giảm thiểu độ trễ khi sử dụng với các thiết bị của Xiaomi.
            Thời lượng pin
            Redmi AirDots 3 Pro trang bị viên pin dung lượng 35mAh cho mỗi tai, cho phép người dùng có thể nghe nhạc liên tục trong vòng 6 giờ liên tục, hoặc 3 giờ liên tục nếu có bật chống ồn ANC. Đây là một thời lượng pin ở mức trung bình khá. Ngoài ra, case sạc của tai nghe có viên pin 470mAh có thể cung cấp tổng cộng 28 giờ nghe nhạc liên tục. Sản phẩm sử dụng cổng sạc USB-C và có hỗ trợ sạc không dây chuẩn Qi, tương thích với công nghệ sạc ngược không dây hiện có trên nhiều smartphone hiện nay.
            Thông số kỹ thuật
            Model: WSEJ01ZM
            Chuẩn kết nối: BT 5.2
            Trọng lượng 1 tai: ~4.9g
            Kích thước tai nghe: 25.4*20.3*21.3mm
            Tổng trọng lượng: ~ 55g
            Kích thước hộp sạc: 65*48*26mm
            Thời gian sạc tai nghe: ~ 1 tiếng
            Thời gian sạc hộp: ~2,5 tiếng
            Thời gian đàm thoại: ~3 tiếng (tắt noise reduction, 50% volume, AAC encoding)
            Thời gian nghe nhạc: ~6 tiếng (tắt noise reduction, 50% volume, AAC encoding)
            Thời gian chờ: ~28 tiếng (tắt noise reduction, 50% volume, AAC encoding), sử dụng kèm hộp
            Input hộp sạc: 5V=0.5A MAX (wired)
            Dung lượng tai nghe (đơn): 35mAh/0.13Wh
            Dung lượng pin hộp: 470mAh/1.78Wh
            Trở kháng: 32Ω
            ', 
            'product_status' => 'Active', 
            'created_at' => now(),'updated_at' => now()],
        //kết thúc    
    ]);
    }
}
