<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cart.css') }}">
    <!--===============================================================================================-->
</head>
<style>
    .fa-times:hover{
            color: red;
        }
</style>
<!--Header/Footer/css-->
@extends('layouts.master')
@section('title')
E - Sunshine
@endsection
@section('custom-css')
@endsection

@section('main-content')
<div class="card">
    <div class="row">
        <div class="col-md-10 cart">
            <div class="title">
                <div class="row">
                    <div class="col"><h4><b>Giỏ hàng</b></h4></div>
                    @if(!Auth::check())
                        <div class="col align-self-center text-right text-muted"> 0 items</div>
                    @else
                    <div class="col align-self-center text-right text-muted"> {{  Auth::user()->getUserCarts->count() }} items</div>
                    @endif
                </div>
            </div>   
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-1" style="text-align :center;"></div>
                    <div class="col-1" style="text-align :center;"></div>
                    <div class="col-3" style="text-align :center;">Sản phẩm</div>
                    <div class="col-2" >Số lượng</div>
                    <div class="col-2" style="text-align :center;">Giá</div> 
                    <div class="col-2" style="text-align :center;">Tổng</div> 
                    <div class="col-1" style="text-align :center;"></div> 
                </div>
            </div>
            @php
                $total_price = 0;
                $count_cart = 0;
            @endphp
            @if(count($carts))
                @foreach($carts as $cart) 
                <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-1">
                            <!-- <input style="width: 100%" type="checkbox" value="false" name="checkbox" id="checkbox"> -->
                        </div>
                        <div class="col-1">
                            <img src="{{ asset('assets/images/products/'. $cart->getCartProduct->product_images_1) }}" class="avatar avatar-sm me-3" alt="avatar">
                        </div>
                        <div class="col-3" style="text-align :start;">{{ $cart->getCartProduct->product_name }}
                        </div>
                        <div class="col-2" style="text-align :center;">
                            <form method="POST" action="{{ route('cart.update_cart', $cart->cart_id) }}">
                                @method('patch')
                                @csrf
                                <div class="cart_quantity_button" style="display: flex;width: 60%;" >
                                    <button type="submit" class="cart_quantity_down"  style="padding-right: 15px;" name="cart_qty_status" value="cart_quantity_down"> - </button>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="{{$cart->quantity}}" autocomplete="off" size="2" width="50%" style="text-align :center;" readonly>
                                    <button type="submit" class="cart_quantity_up" style="padding-left: 15px;" name="cart_qty_status" value="cart_quantity_up"> + </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-2" style="text-align :center;">{{ number_format($cart->getCartProduct->product_price) }} VND</div>
                        <div class="col-2" style="text-align :center; font-weight: 600">{{ number_format($cart->getCartProduct->product_price * $cart->quantity) }} VND</div>
                        <div class="col-1 cart_delete">
                            <form id="cartDelete" action="{{ route('cart.destroy', $cart->cart_id) }}" method="post" role="form text-left" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button class="cursor-pointer fa fa-times" style="border: none; background: no-repeat;" data-bs-toggle="tooltip" data-bs-original-title="Delete" onclick="return confirm('Are you sure?')"></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- tính tổng -->
                @php
                    $total_price += $cart->getCartProduct->product_price * $cart->quantity;
                    $count_cart = count($carts);
                @endphp
                @endforeach
            @else    
            <p>Giỏ hàng của bạn chưa có sản phẩm</p>
            @endif
            <div class="back-to-shop"onclick="window.location='{{ route('home') }}'"><a href="/">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
        </div>
        <div class="col-md-2 summary">
            <div><h5 style="text-align: center;"><b>Tổng</b></h5></div>
         
            <div class="row" style="margin:0 5px;">
                <div class="col" style="padding-left:0;"></div>
                <div class="col text-right"></div>
            </div>
            <!-- <form>
                <p>SHIPPING</p>
                    <select>
                        <option class="text-muted"></option>
                    </select>
                <p>GIVE CODE</p>
                <input id="code" placeholder="Enter your code">
            </form> -->
           
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 10vh 0; font-weight: 900;">
                <div class="col text-right">{{ number_format($total_price) }} VND</div>
            </div>
            <!-- <form action="{{ route('cart.getCheckOut') }}" method="post">
                @csrf
                <button type="submit" class="btn"
                    @if ($carts->isEmpty()) disabled @endif>CHECKOUT</button>
            </form> -->
            <a href="{{ route('cart.getCheckOut') }}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                Check Out
            </a>
        </div>
    </div>
    
</div>
@endsection
<!-- --------scripts-------------- -->
    
@section('custom-scripts')
@endsection