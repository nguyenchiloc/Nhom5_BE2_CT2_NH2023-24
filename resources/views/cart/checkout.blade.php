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
                                    <h5 class="mb-0">{{ __('Information oder') }}</h5> <hr>
                                </div>
                                <div class="card-body pt-4 p-3"> 
                                        <div class="row">
                                            <input class="form-control" type="text"  value="{{ Auth::user()->user_id}}" name="user_id" hidden>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="user_name" class="form-control-label">{{ __('Full Name') }}</label>
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
                                                    <label for="phone" class="form-control-label">{{ __('Phone') }}</label>
                                                    <div class="@error('phone')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="email"  value="{{ Auth::user()->phone}}" name="phone" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label for="address" class="form-control-label">{{ __('Address') }}</label>
                                                    <div class="@error('address')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="address"  value="{{ Auth::user()->address}}" name="address" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <label for="about">{{ 'Note' }}</label>
                                            <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                                <textarea class="form-control" id="about" rows="2" placeholder="Notes !!!" name="note"></textarea>
                                            </div>
                                        </div>
                                </div>
                                <!-- Product view -->
                                <div class="card-header-2 px-3">
                                    <h5 class="mb-0">{{ __('Product') }} - {{  Auth::user()->getUserCarts->count() }} items</h5> <hr>
                                </div>
                                <div class="card-body pt-2 p-3">
                                <div class="border-top border">
                                    <div class="row main align-items-center" style="font-weight: bold;">
                                        <div class="col-1" style="text-align :center;">No</div>
                                        <div class="col-1" style="text-align :center;">Image</div>
                                        <div class="col-3" style="text-align :center;">Product</div>
                                        <div class="col-1" style="text-align :center;">Qty</div>
                                        <div class="col-2" style="text-align :center;">Price</div> 
                                        <div class="col-2" style="text-align :center;">Total</div> 
                                    </div>
                                </div>
                                    @php
                                        $total_price = 0;
                                        $total_qty = 0;
                                    @endphp
                                    @if(count($carts))
                                        @foreach($carts as $index => $cart) 
                                        <div class="border">
                                            <div class="row main align-items-center" style="padding: 3px;">
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
                                        <div>
                                            <input class="form-control" type="text"  value="{{ $total_qty }}" name="total_qty" hidden>
                                            <input class="form-control" type="text"  value="{{ $total_price }}" name="total_price" hidden>
                                        </div>
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4 ml-5 mr-5"></i>&nbsp;&nbsp;&nbsp;{{ 'Confirm Order' }}</button>
                                        </div>
                                    @else
                                </form>    
                                <p>You have no items in the shopping cart</p>
                                @endif
                                <div class="back-to-shop pt-5" onclick="window.location='{{ route('home') }}'"><a href="/">&leftarrow;</a><span class="text-muted-1">Back to shop</span></div>
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