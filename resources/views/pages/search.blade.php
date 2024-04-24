<!-- {{-- View này sẽ kế thừa giao diện từ layout->master --}} -->
@extends('layouts.master')
@section('title')
E - Sunshine
@endsection
@section('custom-css')
@endsection
@section('layouts.cart')
@endsection
@section('main-content')
<!-- Product -->
<div class="bg0 m-t-23 p-b-140">
	<div class="container">
		<!-- product -->
		@if(isset($searchProducts))
			@if ($searchProducts-> isEmpty())
				<h5 style="padding-top : 5%">Không tìm thấy sản phẩm <b>"{{ $searchterm }}"</b>.</h5>
			@else
			<div class="row isotope-grid">
				<h5 style="padding-top : 5%">
					Tìm thấy {{ $searchProducts->count() }} sản phẩm <b>"{{ $searchterm }}"</b>
				</h5>
				<hr />
				@foreach($searchProducts as $searchResult)
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 p-t-120 isotope-item">
						<div class="block2">
							<div class="block2-pic hov-img0">
								<img src="{{ asset('assets/images/products/'. $searchResult->product_images_1) }}" alt="IMG-PRODUCT">
								<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
									Quick View
								</a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										{{ $searchResult->product_name}}
									</a>
									<span class="stext-105 cl3">
										{{ $searchResult->product_price}} VND
									</span>
								</div>
								<div class="block2-txt-child2 flex-r p-t-3">
									<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
										<img class="icon-heart1 dis-block trans-04" src="{{ asset('assets/images/icons/icon-heart-01.png') }}" alt="ICON">
										<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('assets/images/icons/icon-heart-02.png') }}" alt="ICON">
									</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
				<!-- product -->
			</div>
			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div>
			@endif
		@endif
	</div>
</div>
@endsection
@section('custom-scripts')
@endsection