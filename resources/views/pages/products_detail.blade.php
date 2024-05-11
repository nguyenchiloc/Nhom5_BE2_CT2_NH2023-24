@extends('layouts.master')
@section('title')
E - Sunshine
@endsection
@section('custom-css')
@endsection
@section('layouts.cart')
@endsection
@section('main-content')
<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-90 p-b-60">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-7 p-b-30">
				<div class="p-l-25 p-r-30 p-lr-0-lg">
					<div class="wrap-slick3 flex-sb flex-w">
						<div class="wrap-slick3-dots"></div>
						<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
						<div class="slick3 gallery-lb">
							<div class="item-slick3" data-thumb="{{ asset('assets/images/products/'. $product_detail->product_images_1) }}">
								<div class="wrap-pic-w pos-relative">
									<img src="{{ asset('assets/images/products/'. $product_detail->product_images_1) }}" alt="IMG-PRODUCT">

									<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
										<i class="fa fa-expand"></i>
									</a>
								</div>
							</div>

							<div class="item-slick3" data-thumb="{{ asset('assets/images/products/'. $product_detail->product_images_1) }}">
								<div class="wrap-pic-w pos-relative">
									<img src="{{ asset('assets/images/products/'. $product_detail->product_images_1) }}" alt="IMG-PRODUCT">

									<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset('assets/images/products/'. $product_detail->product_images_1) }}">
										<i class="fa fa-expand"></i>
									</a>
								</div>
							</div>

							<div class="item-slick3" data-thumb="{{ asset('assets/images/products/'. $product_detail->product_images_1) }}">
								<div class="wrap-pic-w pos-relative">
									<img src="{{ asset('assets/images/products/'. $product_detail->product_images_1) }}" alt="IMG-PRODUCT">

									<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset('assets/images/products/'. $product_detail->product_images_1) }}">
										<i class="fa fa-expand"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				
			<div class="col-md-6 col-lg-5 p-b-30">
				<div class="p-r-50 p-t-5 p-lr-0-lg">
					<h4 class="mtext-105 cl2 js-name-detail p-b-14">
						{{$product_detail->product_name}}
					</h4>
					<span class="mtext-106 cl2">
						{{ number_format($product_detail->product_price) }} VND
					</span>
					<!--  -->
					<div class="p-t-33">
						<div class="flex-w flex-r-m p-b-10">
							<div class="size-203 flex-c-m respon6">
								Size
							</div>
							<div class="size-204 respon6-next">
								<div class="rs1-select2 bor8 bg0">
									<select class="js-select2" name="time">
										<option>Choose an option</option>
										<option>16GB</option>
										<option>32GB</option>
										<option>64GB</option>
										<option>128GB</option>
									</select>
									<div class="dropDownSelect2"></div>
								</div>
							</div>
						</div>
						<div class="flex-w flex-r-m p-b-10">
							<div class="size-203 flex-c-m respon6">
								Color
							</div>

							<div class="size-204 respon6-next">
								<div class="rs1-select2 bor8 bg0">
									<select class="js-select2" name="time">
										<option>Choose an option</option>
										<option>Red</option>
										<option>Blue</option>
										<option>White</option>
										<option>Grey</option>
									</select>
									<div class="dropDownSelect2"></div>
								</div>
							</div>
						</div>
								
						<div class="flex-w flex-r-m p-b-10">
							<form action="{{ route('cart.add_to_cart', $product_detail->product_id) }}" method="post">
								<div class="flex-w flex-m respon6-next">
										@csrf
										<input class="mtext-104 cl3 txt-center num-product" type="number" value="{{$product_detail->product_id}}" name="product_id" hidden>
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="quantity" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" type="submit">
											Add to cart
										</button>
								</div>
							</form>
						</div>
					</div>
					<!--  -->
					<div class="flex-w flex-m p-l-100 p-t-40 respon7">
						<div class="flex-m bor9 p-r-10 m-r-11">
							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
								<i class="zmdi zmdi-favorite"></i>
							</a>
						</div>

						<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
							<i class="fa fa-google-plus"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="bor10 m-t-10">
			<h5 style="text-align: center;font-weight: bold;margin-top: 10px;">Thông tin sản phẩm</h5>	
			<p class="stext-102 cl3 p-t-0" style="height: 250px;margin: 20px; overflow-y:auto;">
				{{$product_detail->product_description}}
			</p>
		</div>	
		
		
		<div class="bor10 m-t-50 p-t-43 p-b-40">
			<!-- Tab01 -->
			<div class="tab01">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item p-b-10">
						<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
					</li>

					<li class="nav-item p-b-10">
						<a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
					</li>

					<li class="nav-item p-b-10">
						<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews ({{ $product_detail->getProdReview->count() }})
				</ul>

				<!-- Tab panes -->
				<div class="tab-content p-t-43">
					<!-- - -->
					<div class="tab-pane fade show active" id="description" role="tabpanel">
						<div class="how-pos2 p-lr-15-md">
							<p class="stext-102 cl6">
								Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.
							</p>
							<a href=""></a>
						</div>
					</div>

					<!-- - -->
					<div class="tab-pane fade" id="information" role="tabpanel">
						<div class="row">
							<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
								<ul class="p-lr-28 p-lr-15-sm">
									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Weight
										</span>

										<span class="stext-102 cl6 size-206">
											0.79 kg
										</span>
									</li>

									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Dimensions
										</span>

										<span class="stext-102 cl6 size-206">
											110 x 33 x 100 cm
										</span>
									</li>

									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Materials
										</span>

										<span class="stext-102 cl6 size-206">
											60% cotton
										</span>
									</li>

									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Color
										</span>

										<span class="stext-102 cl6 size-206">
											Black, Blue, Grey, Green, Red, White
										</span>
									</li>

									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Size
										</span>

										<span class="stext-102 cl6 size-206">
											XL, L, M, S
										</span>
									</li>
								</ul>
								<a href=""></a>
							</div>
						</div>
					</div>

					<!-- - -->
					<div class="tab-pane fade" id="reviews" role="tabpanel">
						<div class="row">
							<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
								<div class="p-b-30 m-lr-15-sm">
									<!-- Review -->
									@php 
										$avgrating = 0;
									@endphp
									@foreach($product_detail->getProdReview as $review)
										<div class="flex-w flex-t p-b-68">
											<div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
												<img src="{{ asset('assets/images/avt/'. $review->getReviewUser->avatar) }}" class="avatar avatar-sm me-3" alt="avatar">
											</div>
												{{ $review->getReviewUser->full_name }}
											<div class="size-207">
												<div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20"></span>
													@php 
														$avgrating = $review->rating;
													@endphp
													<span class="fs-18 cl11">
														@for($i = 1; $i <= 5; $i++)
															@if($i <= $avgrating)
															<i class="zmdi zmdi-star"></i>
															@else
																<i class="item-rating pointer zmdi zmdi-star-outline"></i>
															@endif
														@endfor
													</span> 
												</div>
												<p class="stext-102 cl6">
													{{ $review->comment}}
												</p>
												<div style="text-align: end; display: ruby-text;">
													<button type="submit" class="stext-106 cl6 hov1 bor3 trans-04 m-r-5 m-tb-5" onclick="clickEditComment(this)" value="{{ $review->review_id }}">
														Edit
													</button>
													<form id="Detele" action="{{ route('review.destroy', $review->review_id) }}" method="post" role="form text-left" enctype="multipart/form-data">
                                          				@csrf
														@method('DELETE')
														<button type="submit" class="stext-106 cl6 hov1 bor3 trans-04 m-r-5 m-tb-5" onclick="return confirm('Are you sure?')">
															Delete
														</button>
													</form>
												</div>
												
											</div>
											<!-- @if($review->getReviewUser->user_id == Auth::user()->user_id)   -->
											<div id="{{$review->review_id}}" style="display: none;">
												<form action="{{ route('review.update', $review->review_id) }}#comment" method="post" role="form text-left" enctype="multipart/form-data">
													@csrf
                                            		@method('PATCH')
													<div class="form-group" style="width: 100%;" id="#comment">
														<label for="new_comment">{{ 'Comment' }}</label>
														<div class="@error('new_comment')border border-danger rounded-3 @enderror">
															<textarea class="form-control" id="new_comment" rows="3" name="new_comment">{{ $review->comment }}</textarea>
														</div>
													</div>
													<div class="flex-w flex-m p-b-23">
														<span class="stext-102 cl3 m-r-16">
															Your Rating
														</span>
														<div class="flex-w flex-sb-m p-b-17">
															@php 
																$avgrating = $review->rating;
															@endphp
															<span class="wrap-rating fs-18 cl11 pointer">
																@for($i = 1; $i <= 5; $i++)
																	@if($i <= $avgrating)
																	<i class="item-rating pointer zmdi zmdi-star"></i>
																	@else
																		<i class="item-rating pointer zmdi zmdi-star-outline"></i>
																	@endif
																@endfor	
																<input class="dis-none" type="number" name="rating">
															</span>
														</div>
													</div>
													<div class="d-flex justify-content-end">
														<button type="submit" class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn2 p-lr-15 trans-04 m-b-10" style="border: 1px soild gray"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;{{ 'Update' }}</button>
													</div>
                                       			 </form>
											</div>
											<!-- @endif -->
										</div>
									@endforeach
									
									<!-- Add review -->
									<form class="w-full" action="{{ route('review.create', $product_detail->product_id) }}" method="post" role="form text-left" enctype="multipart/form-data">
										@csrf
										<h5 class="mtext-108 cl2 p-b-7">
											Add a review
										</h5>
										<p class="stext-102 cl6">
											Your email address will not be published. Required fields are marked *
										</p>

										<div class="flex-w flex-m p-t-50 p-b-23">
											<span class="stext-102 cl3 m-r-16">
												Your Rating
											</span>
											<span class="wrap-rating fs-18 cl11 pointer">
												<i class="item-rating pointer zmdi zmdi-star-outline"></i>
												<i class="item-rating pointer zmdi zmdi-star-outline"></i>
												<i class="item-rating pointer zmdi zmdi-star-outline"></i>
												<i class="item-rating pointer zmdi zmdi-star-outline"></i>
												<i class="item-rating pointer zmdi zmdi-star-outline"></i>
												<input class="dis-none" type="number" name="rating">
											</span>
										</div>

										<div class="row p-b-25">
											<div class="col-12 p-b-5">
												<label class="stext-102 cl3" for="review">Your review</label>
												<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="comment"></textarea>
											</div>
										</div>

										<button type="submit" class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
											Submit
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Related Products -->
<section class="sec-relate-product bg0 p-t-45 p-b-105">
	<div class="container">
		<div class="p-b-45">
			<h3 class="ltext-106 cl5 txt-center">
				Related Products
			</h3>
		</div>
		<!-- Slide2 -->
		<div class="wrap-slick2">
			<div class="slick2">
				@foreach($dataProduct as $row)
					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<img src="{{ asset('assets/images/products/'. $row->product_images_1) }}" alt="IMG-PRODUCT">
								<a href="{{ route('pages.products_detail', $row->product_id)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
									Quick View
								</a>
							</div>

							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="{{ route('pages.products_detail', $row->product_id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										{{ $row->product_name}}
									</a>
									<span class="stext-105 cl3">
										{{ $row->product_price}} VND
									</span>
								</div>

								<div class="block2-txt-child2 flex-r p-t-3">
									<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
										<img class="icon-heart1 dis-block trans-04" src="{{ asset('assets/images/icons/icon-heart-01.png') }}" alt="ICON">
										<img class="icon-heart1 dis-block trans-04" src="{{ asset('assets/images/icons/icon-heart-02.png') }}" alt="ICON">
									</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</section>

@endsection
@section('custom-scripts')
@endsection		
<script>
	function clickEditComment(id) {
		var id = event.target.value;
		var x = document.getElementById(id);
		if (x.style.display === "none") {
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}
	}
</script>