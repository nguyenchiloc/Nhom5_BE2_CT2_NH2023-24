<!-- Header -->
<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
					<div class="right-top-bar flex-w h-full">
						@method('POST')
						@if (Route::has('login'))
								@auth
								@foreach($user as $user) 
									<a href="{{ route('profile.index') }}" class="flex-c-m trans-04 p-lr-25"> {{ $user->full_name}}</a>
									@if ($user->level_id == '1')
										<a href="{{ route('product.index') }}" class="flex-c-m trans-04 p-lr-25">
											Admin
										</a>
									@endif
								@endforeach
									<a href="{{ route('home') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex-c-m trans-04 p-lr-25">Log Out</a> 
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								@else
									<a href="{{ route('login') }}" class="flex-c-m trans-04 p-lr-25">
										Log in
									</a>
									@if (Route::has('register'))
										<a href="{{ route('register') }}" class="flex-c-m trans-04 p-lr-25">
											Register
										</a>
									@endif
								@endauth
						@endif
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					<!-- Logo desktop -->	
					<div class="col-md-3 col-sm-8 col-6 cf-title-09">
                            <h5><span>Best Store</span></h5>
                    </div>	
					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="{{ Request::is('/') ? 'active-menu' : '' }}">
								<a href="{{ route('page',['page'=>'']) }}">Home</a>
							</li>
							<li class="{{ Request::is('products') ? 'active-menu' : '' }}">
								<a href="{{ route('page',['page'=>'products']) }}">Products</a>
							</li>
							<li class="{{ Request::is('blog') ? 'active-menu' : '' }}">
								<a href="{{ route('page',['page'=>'blog']) }}">Blog</a>
							</li>
							<li class="{{ Request::is('about') ? 'active-menu' : '' }}">
								<a href="{{ route('page',['page'=>'about']) }}">About</a>
							</li>
							<li class="{{ Request::is('contact') ? 'active-menu' : '' }}">
								<a href="{{ route('page',['page'=>'contact']) }}">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div>
				</nav>
			</div>	
		</div>
		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="{{ asset('assets/images/icons/logo-01.png') }}" alt="IMG-LOGO"></a>
			</div>
			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>
		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>
			<ul class="main-menu-m">
				<li class="{{ Request::is('/') ? 'active-menu' : '' }}">
					<a href="{{ route('page',['page'=>'index']) }}">Home</a>
				</li>
				<li class="{{ Request::is('products') ? 'active-menu' : '' }}">
					<a href="{{ route('page',['page'=>'products']) }}">Products</a>
				</li>
				<li class="{{ Request::is('blog') ? 'active-menu' : '' }}">
					<a href="{{ route('page',['page'=>'blog']) }}">Blog</a>
				</li>
				<li class="{{ Request::is('about') ? 'active-menu' : '' }}">
					<a href="{{ route('page',['page'=>'about']) }}">About</a>
				</li>
				<li class="{{ Request::is('contact') ? 'active-menu' : '' }}">
					<a href="{{ route('page',['page'=>'contact']) }}">Contact</a>
				</li>
			</ul>
		</div> 
		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="{{ asset('assets/images/icons/icon-close2.png') }}" alt="CLOSE">
				</button>
				<form action="{{ route('pages.search') }}" method="GET" class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" value="{{ isset($searchterm) ? $searchterm : ''  }}" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>


	