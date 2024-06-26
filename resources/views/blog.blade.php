<!--Header/Footer/css-->
@extends('layouts.master')
@section('title')
E - Sunshine
@endsection
@section('custom-css')
@endsection
<!-- --------Title page-------------- -->
@section('main-content')
<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url({{ asset('assets/images/bg-02.jpg') }});">
		<h2 class="ltext-105 cl0 txt-center">
			Blog
		</h2>
	</section>	
	<!-- Content page -->
	<section class="bg0 p-t-62 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<!-- item blog -->
						<div class="p-b-63">
							<a href="#" class="hov-img0 how-pos5-parent">
								<img src="{{ asset('assets/images/blog-01.jpg') }}" alt="IMG-BLOG">

								<div class="flex-col-c-m size-123 bg9 how-pos5">
									<span class="ltext-107 cl2 txt-center">
										14
									</span>
									<span class="stext-109 cl3 txt-center">
										May 2024
									</span>
								</div>
							</a>

							<div class="p-t-32">
								<h4 class="p-b-15">
									<a href="#" class="ltext-108 cl2 hov-cl1 trans-04">
										Khám phá bất ngờ về công nghệ Trung Quốc có trên Huawei Pura 70 Pro
									</a>
								</h4>

								<p class="stext-117 cl6">
									Bản phân tích Pura 70 Pro tiết lộ rằng phần lớn linh kiện trên mẫu smartphone mới của Huawei được sản xuất tại Trung Quốc.
								</p>

								<div class="flex-w flex-sb-m p-t-18">
									<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
										<span>
											<span class="cl4">By</span> Admin  
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>
									</span>

									<a href="https://www.24h.com.vn/thoi-trang-hi-tech/kham-pha-bat-ngo-ve-cong-nghe-trung-quoc-co-tren-huawei-pura-70-pro-c407a1566767.html" target="_blank" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
										Continue Reading

										<i class="fa fa-long-arrow-right m-l-9"></i>
									</a>
								</div>
							</div>
						</div>

						<!-- item blog -->
						<div class="p-b-63">
							<a href="#" class="hov-img0 how-pos5-parent">
								<img src="{{ asset('assets/images/blog-02.jpg') }}" alt="IMG-BLOG">

								<div class="flex-col-c-m size-123 bg9 how-pos5">
									<span class="ltext-107 cl2 txt-center">
										10
									</span>
									<span class="stext-109 cl3 txt-center">
										May 2024
									</span>
								</div>
							</a>

							<div class="p-t-32">
								<h4 class="p-b-15">
									<a href="#" class="ltext-108 cl2 hov-cl1 trans-04">
										Hàng triệu người dùng điện thoại Galaxy cũ bắt đầu đón nhận “trí tuệ nhân tạo”
									</a>
								</h4>

								<p class="stext-117 cl6">
								Nhật ký thay đổi của những điện thoại này chỉ đề cập đến tính năng Circle to Search như một phần của bản cập nhật One UI 6.1. Trong khi đó, Galaxy Z Fold 3 dường như sẽ nhận được nhiều tính năng AI hơn, bao gồm hình nền do AI tạo và chỉnh sửa hình ảnh AI tạo sinh.
								</p>

								<div class="flex-w flex-sb-m p-t-18">
									<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
										<span>
											<span class="cl4">By</span> Admin  
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>
									</span>

									<a href="https://www.24h.com.vn/thoi-trang-hi-tech/hang-trieu-nguoi-dung-dien-thoai-galaxy-cu-bat-dau-don-nhan-tri-tue-nhan-tao-c407a1564727.html" target="_blank"  class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
										Continue Reading
										<i class="fa fa-long-arrow-right m-l-9"></i>
									</a>
								</div>
							</div>
						</div>

						<!-- item blog -->
						<div class="p-b-63">
							<a href="#" class="hov-img0 how-pos5-parent">
								<img src="{{ asset('assets/images/blog-03.jpg') }}" alt="IMG-BLOG">
								<div class="flex-col-c-m size-123 bg9 how-pos5">
									<span class="ltext-107 cl2 txt-center">
										08
									</span>

									<span class="stext-109 cl3 txt-center">
										May 2024
									</span>
								</div>
							</a>

							<div class="p-t-32">
								<h4 class="p-b-15">
									<a href="#" class="ltext-108 cl2 hov-cl1 trans-04">
									iPhone 17 series sẽ mang đến điều bất ngờ
									</a>
								</h4>
								<p class="stext-117 cl6">
									Chủ đề “Lộ diện iPhone 17 sẽ ra mắt mẫu Slim” trên Weibo đã lập tức đứng đầu danh sách tìm kiếm nóng, thu hút sự chú ý.
								</p>	
								<div class="flex-w flex-sb-m p-t-18">
									<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
										<span>
											<span class="cl4">By</span> Admin  
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>
									</span>	
									<a href="https://www.24h.com.vn/thoi-trang-hi-tech/iphone-17-series-se-mang-den-dieu-bat-ngo-c407a1565578.html" target="_blank" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
										Continue Reading

										<i class="fa fa-long-arrow-right m-l-9"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- Pagination -->
						<div class="flex-l-m flex-w w-full p-t-10 m-lr--7">
							<a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
								1
							</a>
							<a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7">
								2
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="side-menu">
						<div class="bor17 of-hidden pos-relative">
							<input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Search">

							<button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>
						</div>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-33">
								Loại sản phẩm
							</h4>
							<ul>
								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Laptop
									</a>
								</li>
								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Mobile Phones
									</a>
								</li>
								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Smart Watches
									</a>
								</li>
								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Headphones
									</a>
								</li>
								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Accessories
									</a>
								</li>
							</ul>
						</div>

						<div class="p-t-65">
							<h4 class="mtext-112 cl2 p-b-33">
								New Products
							</h4>
							<ul>
								@foreach($product_news as $row)
									<li class="flex-w flex-t p-b-30">
										<a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
											<img style="width: 50px;" src="{{ asset('assets/images/products/'. $row->product_images_1) }}" alt="PRODUCT">
										</a>
										<div class="size-215 flex-col-t p-t-8">
											<a href="#" class="stext-116 cl8 hov-cl1 trans-04">
												{{ $row->getCategoryProduct->category_name}} {{ $row->product_name}}
											</a>
											<span class="stext-116 cl6 p-t-20">
												{{ $row->product_price}} VND
											</span>
										</div>
									</li>
								@endforeach
							</ul>
						</div>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-20">
								Archive
							</h4>

							<ul>
								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											July 2024
										</span>

										<span>
											(9)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											June 2024
										</span>

										<span>
											(39)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											May 2024
										</span>

										<span>
											(29)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											April  2024
										</span>

										<span>
											(35)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											March 2024
										</span>

										<span>
											(22)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											February 2024
										</span>

										<span>
											(32)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											January 2024
										</span>

										<span>
											(21)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											December 2017
										</span>

										<span>
											(26)
										</span>
									</a>
								</li>
							</ul>
						</div>

						<div class="p-t-50">
							<h4 class="mtext-112 cl2 p-b-27">
								Tags
							</h4>

							<div class="flex-w m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Mobile Phones
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Lifestyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Denim
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Crafts
								</a>
							</div>
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