<div class="bg0 m-t-23 p-b-140">
	<div class="container">
		<div class="flex-w flex-sb-m p-b-52">
			<div class="flex-w flex-l-m filter-tope-group m-tb-10">
				<form action="{{ route('page',['page'=>'']) }}#pos" method="GET">
					<button name="all" type="submit" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 {{ Request::is('All Products') ? 'how-active1' : '' }} list_category">
						All Products
					</button>
				</form>
				@foreach($category as $row)
					<form action="{{ route('page',['page'=>'']) }}#pos" method="GET">
						<button id="{{ $return_fillter}}" name="category" type="submit" value="{{ $row->category_id}}"  class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5  list_category">{{ $row->category_name}}
						</button>
					</form>
				@endforeach
			</div>
			<div class="flex-w flex-c-m m-tb-10">
				<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
					<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
					<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Filter
				</div>
				
				<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
					<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
					<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
					Search
				</div>
			</div>
			<!-- Search product -->
			<div class="dis-none panel-search w-full p-t-10 p-b-15">
				<form action="{{ route('pages.search') }}" method="GET">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>
						<input class="mtext-107 cl2 size-114 plh2 p-r-15" value="{{ isset($searchterm) ? $searchterm : ''  }}"  type="text" name="search"  placeholder="Search">
					</div>
				</form>
			</div>
			<!-- Filter -->
			<div class="dis-none panel-filter w-full p-t-10">
				<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
					<div class="filter-col1 p-r-15 p-b-27">
						<div class="mtext-102 cl2 p-b-15">
							Sort By
						</div>
						<ul>
							<li class="p-b-6">
								<a href="#" class="filter-link stext-106 trans-04">
									Default
								</a>
							</li>

							<li class="p-b-6">
								<a href="#" class="filter-link stext-106 trans-04">
									Popularity
								</a>
							</li>

							<li class="p-b-6">
								<a href="#" class="filter-link stext-106 trans-04">
									Average rating
								</a>
							</li>

							<li class="p-b-6">
								<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
									Newness
								</a>
							</li>

							<li class="p-b-6">
								<a href="#" class="filter-link stext-106 trans-04">
									Price: Low to High
								</a>
							</li>

							<li class="p-b-6">
								<a href="#" class="filter-link stext-106 trans-04">
									Price: High to Low
								</a>
							</li>
						</ul>
					</div>

					<div class="filter-col2 p-r-15 p-b-27">
						<div class="mtext-102 cl2 p-b-15">
							Price
						</div>

						<ul>
							<li class="p-b-6">
								<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
									All
								</a>
							</li>

							<li class="p-b-6">
								<a href="#" class="filter-link stext-106 trans-04">
									$0.00 - $50.00
								</a>
							</li>

							<li class="p-b-6">
								<a href="#" class="filter-link stext-106 trans-04">
									$50.00 - $100.00
								</a>
							</li>

							<li class="p-b-6">
								<a href="#" class="filter-link stext-106 trans-04">
									$100.00 - $150.00
								</a>
							</li>

							<li class="p-b-6">
								<a href="#" class="filter-link stext-106 trans-04">
									$150.00 - $200.00
								</a>
							</li>

							<li class="p-b-6">
								<a href="#" class="filter-link stext-106 trans-04">
									$200.00+
								</a>
							</li>
						</ul>
					</div>

					<div class="filter-col3 p-r-15 p-b-27">
						<div class="mtext-102 cl2 p-b-15">
							Brand
						</div>
						<ul>
							@foreach($brands as $row)
							<li class="p-b-6">
								<span class="fs-15 lh-12 m-r-6" style="color: #222;">
									<i class="zmdi zmdi-circle"></i>
								</span>
								<a href="#" class="filter-link stext-106 trans-04">
									{{ $row->brand_name}}
								</a>
							</li>
							@endforeach
						</ul>
					</div>

					<div class="filter-col4 p-b-27">
						<div class="mtext-102 cl2 p-b-15">
							Tags
						</div>
						<div class="flex-w p-t-4 m-r--5">
							@foreach($category as $row)
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									{{ $row->category_name}}
								</a>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row isotope-grid" id="pos">
			<!-- product -->
			@foreach($dataProduct as $row)
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
				<div class="block2">
					<div class="block2-pic hov-img0">
						<img src="{{ asset('assets/images/products/'. $row->product_images) }}" alt="IMG-PRODUCT">
						<a href="{{ route('pages.products_detail', $row->product_id)}}" target="_self" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
							Quick View
						</a>
					</div>
					<div class="block2-txt flex-w flex-t p-t-14">
						<div class="block2-txt-child1 flex-col-l ">
							<a href="{{ route('pages.products_detail', $row->product_id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								{{ $row->getCategoryProduct->categorie_name}} {{ $row->product_name}}
							</a>
							<span class="stext-105 cl3">
								{{ $row->product_price}} VND
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
	</div>
</div>
<script>
	//list category hover
	const numList_category = document.querySelectorAll(".list_category");
	var numCategory  = Number(numList_category[1].id)
	numList_category.forEach(element => {
		element.addEventListener('click', function(){
			for (i = 0; i < numList_category.length; i++) {
				numList_category[i].classList.remove('how-active1');
			}
		})
		numList_category[numCategory].classList.add('how-active1');
});
	
</script>
		