<div class="bg0 m-t-23 p-b-140">
	<div class="container">
		<div class="flex-w flex-sb-m p-b-52">
			<div class="flex-w flex-l-m filter-tope-group m-tb-10" id='category'>
				<form action="{{ route('page',['page'=>'']) }}#category" method="GET">
					<button id="0" name="all" type="submit" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 {{ Request::is('All Products') ? 'how-active1' : '' }} list_category">
						Tất cả
					</button>
				</form>
				@foreach($category as $row)
					<form action="{{ route('pages.fillterCategory', $row->category_id) }}#category" method="GET">
						<button id="{{ isset($categoryID) ? $categoryID : ''  }}" type="submit" href="#category" name="{{ $row->category_id}}" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 list_category">
							{{ $row->category_name}}
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
							@csrf
							<form action="{{ route('page',['page'=>'']) }}#pos" method="GET">
								<button type="submit" href="#pos" name="0" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 list_price">
									Tất cả	
								</button>
							</form>	
							<form action="{{ route('pages.fillterSort') }}#pos" method="GET">
								<button type="submit" href="#" name="Asc" value="Giá tiền từ thấp đến cao" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5">Giá từ thấp đến cao</button><br>
								<button type="submit" href="#" name="Desc" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5">Giá từ cao đến thấp</button>
							</form>		
						</div>
					<div class="filter-col2 p-r-15 p-b-27">
						<div class="mtext-102 cl2 p-b-15">
							Giá tiền
						</div>
						@csrf
						<form action="{{ route('page',['page'=>'']) }}#pos" method="GET">
							<button type="submit" href="#pos" name="0" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 list_price">
							Tất cả		
							</button>
						</form>		
						@foreach($price as $row)
							<form action="{{ route('pages.fillterPrice', $row->price_id) }}#pos" method="GET">	
								<button type="submit" href="#pos" name="{{ $row->price_id}}" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 list_price">
									{{ $row->price_name}}
								</button>
							</form>	
						@endforeach
					</div>
					<div class="filter-col3 p-r-15 p-b-27">
						<div class="mtext-102 cl2 p-b-15">
							Thương hiệu
						</div>
						@csrf
						<form action="{{ route('page',['page'=>'']) }}#pos" method="GET">
							<button type="submit" href="#pos" name="0" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 list_brand">
								Tất cả		
							</button>
						</form>		
						@foreach($brands as $row)
							<form action="{{ route('pages.fillterBrand', $row->brand_id) }}#pos" method="GET">	
								<button type="submit" href="#pos" name="{{ $row->brand_id}}" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 list_brand">
									{{ $row->brand_name}}
								</button>
							</form>	
						@endforeach
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
		
		@if(isset($sortName))
			<h5 style="padding-bottom : 5px;">{{ isset($sortName) ? $sortName : ''  }}</b></h5>
		@endif
		@if(isset($sortPriceName))
			<h5 style="padding-bottom : 5px; text-transform: lowercase;">Sản phẩm {{ isset($sortPriceName) ? $sortPriceName : ''  }}</b></h5>
		@endif
		@if(isset($sortBrandName))
			<h5 style="padding-bottom : 5px; text-transform: lowercase;">Sản phẩm thuộc thương hiệu {{ isset($sortBrandName) ? $sortBrandName : ''  }}</b></h5>
		@endif
		<div class="row isotope-grid" id="pos">
			<!-- product -->
			@foreach($dataProduct as $row)
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
				<div class="block2">
					<div class="block2-pic hov-img0" style="border: 1px solid #d7ebd7; ">
						<img src="{{ asset('assets/images/products/'. $row->product_images_1) }}" alt="IMG-PRODUCT">
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
								{{ number_format($row->product_price) }} VND
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
		<!-- Paginator -->
		{{ $dataProduct->links() }}
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
		