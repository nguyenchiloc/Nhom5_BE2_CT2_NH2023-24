
<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>
		@if(!Auth::check())
		@else
		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
					<span class="mtext-103 cl2">
						Your Cart - {{ Auth::user()->getUserCarts->count() }} items
					</span>
					<div class="col align-self-center text-right text-muted"> {{  Auth::user()->getUserCarts->count() }} items</div>
				
				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			@php
                $total_price = 0;
            @endphp
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					@if(Auth::user()->getUserCarts->count())
						@foreach(Auth::user()->getUserCarts as $index => $cart) 
						<li class="header-cart-item flex-w flex-t m-b-12">
							<div class="header-cart-item-img">
								<img src="{{ asset('assets/images/products/'. $cart->getCartProduct->product_images_1) }}"  alt="IMG">
							</div>
							<div class="header-cart-item-txt p-t-8">
								<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
									{{ $cart->getCartProduct->product_name }}
								</a>
								<span class="header-cart-item-info">
									{{ number_format($cart->getCartProduct->product_price) }} VND
								</span>
							</div>
						</li>
						<!-- tính tổng -->
						@php
							$total_price += $cart->getCartProduct->product_price * $cart->quantity;
						@endphp
						@endforeach
					@else    
					<p>You have no items in the shopping cart</p>
					@endif
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: {{ number_format($total_price) }} VND
						<!-- tính tổng -->
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="{{ route('cart.show_cart') }}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
		@endif
	</div>