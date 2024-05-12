<!--Header/Footer/css-->
@extends('layouts.master')
@section('title')
E - Sunshine
@endsection
@section('custom-css')
@endsection
@section('main-content')
<!-- --------Title page-------------- -->
@section('main-content')
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url({{ asset('assets/images/bg-01.jpg') }});">
		<h2 class="ltext-105 cl0 txt-center">
			Dịch vụ bảo hành
		</h2>
	</section>	
	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-11 cl2 p-b-16" style="font-weight: bold">
							CHI TIẾT CÁC GÓI DỊCH VỤ BẢO HÀNH MỞ RỘNG
						</h3>
						<p class="stext-113 cl6 p-t-10 p-b-26">
							Các sản phẩm tại E - Sunshine là hàng chính hãng và được bảo hành theo tiêu chuẩn của hãng - xem chi tiết thông tin bảo hành các hãng tại đây. <br>
							Ngoài ra, nhằm mang đến sự an tâm và tiện lợi hơn cho Quý khách hàng trong quá trình sử dụng sản phẩm, E - Sunshine còn cung cấp các gói dịch vụ bảo hành mở rộng thêm ngoài chính sách bảo hành tiêu chuẩn của các hãng
						</p>
						<h6 style="font-weight: bold">I. BẢO HÀNH 1 ĐỔI 1 VIP :</h6>
						<p class="stext-113 cl6 p-t-10 p-b-26">
							Sản phẩm áp dụng: Điện thoại, máy tính bảng mới/cũ, tai nghe cao cấp mới, đồng hồ thông minh Apple/Samsung mới. Thời gian tham gia: 6 tháng / 12 tháng 
						</p>
						<ul><span class="p-b-26">Quyền lợi và dịch vụ bảo hành:</span> 
							<li class="stext-113 cl6 p-t-10 p-b-10">
								<i class="zmdi zmdi-plus"></i>
								<span>Bao test 1 đổi 1 toàn bộ linh kiện phần cứng của máy ( Bao gồm lỗi phím bấm vật lý - Lỗi pin dưới 70%).</span>
							</li>
							<li class="stext-113 cl6 p-b-10">
								<i class="zmdi zmdi-plus"></i>
								<span>Không giới hạn số lần bảo hành đổi máy nếu phát sinh lỗi (trong phạm vi bảo hành) trong thời gian tham gia.</span>
							</li>
							<li class="stext-113 cl6 p-b-10">
								<i class="zmdi zmdi-plus"></i>
								<span>Đổi máy tương đương sản phẩm bảo hành.</span>
							</li>
							<li class="stext-113 cl6 p-b-10">
								<i class="zmdi zmdi-plus"></i>
								<span>Được chuyển nhượng quyền sở hữu của sản phẩm và gói bảo hành trong thời gian tham gia.</span>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="{{ asset('assets/images/about-01.jpg') }}" alt="IMG">
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-11 cl2 p-b-16" style="font-weight: bold">
							II. BẢO HÀNH RƠI VỠ, RƠI NƯỚC ( BHRV-NN)
						</h3>

						<p class="stext-113 cl6 p-b-26">
							Sản phẩm áp dụng: Điện thoại/ máy tính bảng mới/ cũ. <br> Thời gian tham gia: 12 tháng.
						</p>
						<ul><span class="p-b-26">Quyền lợi và dịch vụ bảo hành:</span> 
							<li class="stext-113 cl6 p-t-10 p-b-10">
								<i class="zmdi zmdi-plus"></i>
								<span>24 tháng đến 36 tháng bao gồm 12 tháng bảo hành từ nhà sản xuất.</span>
							</li>
							<li class="stext-113 cl6 p-b-10">
								<i class="zmdi zmdi-plus"></i>
								<span>Sau khi hết bảo hành chính hãng, sản phẩm vẫn được CellphoneS tiếp tục bảo hành các lỗi nhà sản xuất, thời gian bảo hành theo gói bảo hành mà khách hàng lựa chọn.</span>
							</li>
							<li class="stext-113 cl6 p-b-10">
								<i class="zmdi zmdi-plus"></i>
								<span>Khách hàng được miễn phí chi phí sửa chữa và thay thế linh kiện.</span>
							</li>
							<li class="stext-113 cl6 p-b-10">
								<i class="zmdi zmdi-plus"></i>
								<span>Được đổi sản phẩm tương đương nếu máy hư hỏng nặng không sửa chữa được.</span>
							</li>
							<li class="stext-113 cl6 p-b-10">
								<i class="zmdi zmdi-plus"></i>
								<span>Được trợ giá nhập lại sản phẩm bị hỏng để lên đời nếu không có sản phẩm để đổi.</span>
							</li>
							<li class="stext-113 cl6 p-b-10">
								<i class="zmdi zmdi-plus"></i>
								<span>Quỹ bảo hành sửa chữa tính trên giá Niêm Yết sản phẩm.</span>
							</li>
						</ul>
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="{{ asset('assets/images/about-02.jpg') }}" alt="IMG">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
@endsection	
<!-- --------scripts-------------- -->

@section('custom-scripts')
@endsection