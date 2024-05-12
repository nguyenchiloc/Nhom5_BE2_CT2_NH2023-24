<style>
    .text-muted-1:hover {
        color: #109525;
    }
</style>
@extends('layouts.user-auth')
@section('content')
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-back-index" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Checkout</li>
                </ol>
            </nav> 
            <div class="tab-content">
                <div class="py-4 tab-pane fade show active" id="pills-details" role="tabpanel">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="card">
                                <form action="{{ route('cart.postCheckOut') }}" method="post" role="form text-left" enctype="multipart/form-data">
                                @csrf   
                                <div class="card-header pb-0 px-3">
                                    <h5 class="mb-0">{{ __('Thông tin đơn hàng') }}</h5> <hr>
                                </div>
                                <div class="card-body pt-4 p-3"> 
                                    <div class="row">
                                        <input class="form-control" type="text"  value="{{ Auth::user()->user_id}}" name="user_id" hidden>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="user_name" class="form-control-label">{{ __('Tên khác hàng') }}</label>
                                                <div class="@error('user_name')border border-danger rounded-3 @enderror">
                                                    <input class="form-control" type="text"  value="{{ Auth::user()->full_name}}" name="full_name" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email" class="form-control-label">{{ __('Email') }}</label>
                                                <div class="@error('email')border border-danger rounded-3 @enderror">
                                                    <input class="form-control" type="email"  value="{{ Auth::user()->email}}" name="email" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="phone" class="form-control-label">{{ __('Số điện thoại') }}</label>
                                                <div class="@error('phone')border border-danger rounded-3 @enderror">
                                                    <input class="form-control" type="email"  value="{{ Auth::user()->phone}}" name="phone" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label for="address" class="form-control-label">{{ __('Địa chỉ') }}</label>
                                                <div class="@error('address')border border-danger rounded-3 @enderror">
                                                    <input class="form-control" type="address"  value="{{ Auth::user()->address}}" name="address" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <label for="about">{{ 'Ghi chú' }}</label>
                                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                            <textarea class="form-control" id="about" rows="2" placeholder="Ghi chú thêm !!!" name="note"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product view -->
                                <div class="card-header-2 px-3">
                                    <h5 class="mb-0">{{  Auth::user()->getUserCarts->count() }} {{ __('sản phẩm') }} </h5> <hr>
                                </div>
                                <div class="card-body pt-2 p-3">
                                    <div class="border-top border">
                                        <div class="row main align-items-center" style="font-weight: bold;  font-size: .875rem;">
                                            <div class="col-1" style="text-align :center;">No</div>
                                            <div class="col-1" style="text-align :center;">Ảnh</div>
                                            <div class="col-3" style="text-align :center;">Sản phẩm</div>
                                            <div class="col-1" style="text-align :center;">Số lượng</div>
                                            <div class="col-2" style="text-align :center;">Giá</div> 
                                            <div class="col-2" style="text-align :center;">Tổng tiền</div> 
                                        </div>
                                    </div>
                                    @php
                                        $total_price = 0;
                                        $total_qty = 0;
                                    @endphp
                                    @if(count($carts))
                                        @foreach($carts as $index => $cart) 
                                        <div class="border">
                                            <div class="row main align-items-center" style="padding: 3px;font-size: .875rem;">
                                                <input class="form-control" type="text"  value="{{ $cart->cart_id }}" name="cart_id" hidden>
                                                <div class="col-1" style="text-align :center;">{{ $index + 1 }} </div>
                                                <div class="col-1" style="text-align :center;">
                                                    <img src="{{ asset('assets/images/products/'. $cart->getCartProduct->product_images_1) }}" class="avatar avatar-sm me-3" alt="avatar">
                                                </div>
                                                <div class="col-3" style="text-align :start;">{{ $cart->getCartProduct->product_name }}
                                                </div>
                                                <div class="col-1" style="text-align :center;">{{ $cart->quantity }}
                                                </div>
                                                <div class="col-2" style="text-align :center;">{{ number_format($cart->getCartProduct->product_price) }} VND</div>
                                                <div class="col-2" style="text-align :center;">{{ number_format($cart->getCartProduct->product_price * $cart->quantity) }} VND</div>
                                            </div>
                                        </div>
                                        <!-- tính tổng -->
                                        @php
                                            $total_price += $cart->getCartProduct->product_price * $cart->quantity;
                                            $total_qty   += $cart->quantity;
                                        @endphp
                                        @endforeach
                                        <div class="border-top border">
                                            <div class="row main align-items-center" style="font-weight: bold;  font-size: .875rem;">
                                                <div class="col-1" style="text-align :center;"></div>
                                                <div class="col-1" style="text-align :center;"></div>
                                                <div class="col-3" style="text-align :center;"></div>
                                                <div class="col-1" style="text-align :center;"></div>
                                                <div class="col-2" style="text-align :center;">Tổng tiền</div> 
                                                <div class="col-2" style="text-align :center;">{{ number_format($total_price) }} VND</div> 
                                            </div>
                                        </div>
                                        @php
                                            $voucher_price = 0;
                                            $total_amt = 0;
                                            $voucher_type = "";
                                        @endphp
                                        <div class="border-top border">
                                            <div class="row main align-items-center" style="font-weight: bold;  font-size: .875rem;">
                                                <div class="col-1" style="text-align :center;"></div>
                                                <div class="col-1" style="text-align :center;"></div>
                                                <div class="col-3" style="text-align :center;"></div>
                                                <div class="col-1" style="text-align :center;"></div>
                                                <div class="col-2" style="text-align :center;">Mã giảm</div> 
                                                @if($total_price > 0 && $total_price <= 5000000) 
                                                    <div class="col-2" style="text-align :center;">{{ number_format(5000000) }} VND</div> 
                                                    @php
                                                        $voucher_price = 0;
                                                        $total_amt = $total_price - $voucher_price;
                                                    @endphp
                                                <!-- Đơn hàng từ 5 triệu đến 20 triệu giảm 200k -->
                                                @elseif($total_price >5000000  && $total_price <= 20000000) 
                                                    <div class="col-2" style="text-align :center;">{{ number_format(500000) }} VND</div> 
                                                    @php
                                                        $voucher_price = 200000;
                                                        $total_amt = $total_price - $voucher_price; 
                                                        $voucher_type = "Giảm 200k vnd với đơn hàng từ 5 triệu đến 20 triệu vnd"
                                                    @endphp
                                                <!-- Đơn hàng từ 20 triệu đến 50 triệu giảm 500k -->
                                                @elseif($total_price > 20000000  && $total_price <= 50000000) 
                                                    <div class="col-2" style="text-align :center;">{{ number_format(500000) }} VND</div> 
                                                    @php
                                                        $voucher_price = 50000000;
                                                        $total_amt = $total_price - $voucher_price; 
                                                        $voucher_type = "Giảm 500k vnd với đơn hàng từ 20 triệu đến 50 triệu vnd"
                                                    @endphp
                                                <!-- Đơn hàng từ 50 triệu trở lên giảm 500k -->
                                                @else
                                                    <div class="col-2" style="text-align :center;">{{ number_format(1000000) }} VND</div> 
                                                    @php
                                                        $voucher_price = 1000000;
                                                        $total_amt = $total_price - $voucher_price;
                                                        $voucher_type = "Giảm 1 triệu vnd với đơn hàng trên 50 triệu vnd"
                                                    @endphp
                                                @endif
                                            </div>
                                        </div>
                                        <div class="border-top border">
                                            <div class="row main align-items-center" style="font-weight: bold;  font-size: .875rem;">
                                                <div class="col-1" style="text-align :center;"></div>
                                                <div class="col-1" style="text-align :center;"></div>
                                                <div class="col-3" style="text-align :center;"></div>
                                                <div class="col-1" style="text-align :center;"></div>
                                                <div class="col-2" style="text-align :center;">Tổng tiền thanh toán</div> 
                                                <div class="col-2" style="text-align :center;">{{ number_format($total_amt)}} VND</div> 
                                            </div>
                                        </div>
                                        <div> 
                                            <input class="form-control" type="text"  value="{{ $total_qty }}" name="total_qty" hidden>
                                            <input class="form-control" type="text"  value="{{ $total_amt }}" name="total_amt" hidden >
                                        </div>
                                        <div> 
                                            <p>(*){{ $voucher_type}}</p>
                                        </div>
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4 ml-5 mr-5"></i>&nbsp;&nbsp;&nbsp;{{ 'Xác nhận đặt hàng' }}</button>
                                        </div>
                                    @else
                                </form>    
                                <p>Giỏ hàng của bạn chưa có sản phẩm</p>
                                @endif
                                <div class="back-to-shop" onclick="window.location='{{ route('home') }}'"><a href="/">&leftarrow;</a><span class="text-muted-1">Back to shop</span></div>
                                </div>
                                <!-- Product view -->
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
@stop