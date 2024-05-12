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
<div class="container">
    <div class="col-md-12 row">
        <div class="col-md-7 card">
            <div class="row">
                <div class="col-md-12 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Đơn hàng của bạn</b></h4></div>
                            @if(!Auth::check())
                                <div class="col align-self-center text-right text-muted"> 0 items</div>
                            @else
                            <div class="col align-self-center text-right text-muted"> {{  Auth::user()->getUserBill->count() }} items</div>
                            @endif
                        </div>
                    </div>   
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-3" style="text-align :center;">Mã đơn</div>
                            <div class="col-2" style="text-align :center;">Ngày đặt</div>
                            <div class="col-2" style="text-align :center;">Trạng thái</div> 
                            <div class="col-2" style="text-align :center;">Chi tiết</div> 
                            <div class="col-3" style="text-align :center;">Tiền</div> 
                        </div>
                    </div>
                    @if(count($bills))
                        @foreach($bills as $index => $bill) 
                        <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-3" style="text-align :center;" id="showIDOrder">
                                    {{ Auth::user()->user_id }}-{{ $bill->bill_id }}-{{ date('Ymd', strtotime($bill->date_invoice)) }}
                                </div>
                                <div class="col-2" style="text-align :center;">{{  date('d/m/Y', strtotime($bill->date_invoice)) }}
                                </div>
                                <div class="col-2" style="text-align :center;">
                                    @if($bill->status == 'unconfirm')
                                        <span>Chờ xác nhận</span>
                                    @elseif($bill->status == 'confirm')
                                        <span>Đã xác nhận</span>
                                    @elseif($bill->status == 'cancel')
                                        <span>Đã hủy</span>
                                    @else
                                        <span>Không xác nhận</span>
                                    @endif
                                </div>
                                <div class="col-2" style="text-align :center;">
                                    <form method="POST" action="{{ route('bills.show_detail', $bill->bill_id) }}">
                                        @csrf
                                            <button type="submit" class="btn bg-gradient-dark btn-md mt-1 mb-1"></i>{{ 'Chi tiết' }}</button>
                                    </form>
                                </div>
                                <div class="col-3" style="text-align :center">{{ number_format($bill->total_amount) }} VND</div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Paginator -->
                        {{ $bills->links() }}
                    @else    
                    <p>Giỏ hàng của bạn chưa có sản phẩm</p>
                    @endif
                </div>
            </div>
        </div>
        @if(isset($bills_detail))
        <div class="col-md-5 card">
            <div class="row">
                <div class="col-md-12 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col-10"><b>Chi tiết đơn hàng: {{ Auth::user()->user_id }}-{{ $bills_info->bill_id }}-{{ date('Ymd', strtotime($bills_info->date_invoice)) }}</b></div>
                            <div class="col align-self-center text-right text-muted"> {{  $bills_detail->count() }} items</div>
                        </div>
                    </div>   
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-4" style="text-align :center;">Product</div>
                            <div class="col-2" style="text-align :center;">Qty</div>
                            <div class="col-3" style="text-align :center;">Price (VND)</div> 
                            <div class="col-3" style="text-align :center;">Tổng (VND)</div> 
                        </div>
                    </div>
                    @if(count($bills_detail))
                        @foreach($bills_detail as $index => $bill_detail) 
                        <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-4" style="text-align :start;"> {{ $index +1 }}.{{ $bill_detail->getDetailProduct->product_name }}</div>
                                <div class="col-2" style="text-align :center;"> {{ $bill_detail->quantity}}</div>
                                <div class="col-3" style="text-align :center;"> {{ number_format($bill_detail->price) }}</div>
                                <div class="col-3" style="text-align :center;"> {{ number_format($bill_detail->price * $bill_detail->quantity) }}</div>
                            </div>
                        </div>
                        @endforeach
                        <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-12" style="text-align :center; font-weight: 900;">Total: {{ number_format($bills_info->total_amount) }} VND</div>
                            </div>
                        </div>
                        @if ($bills_info->status == 'confirm')
                            <p>Đơn hàng của bạn đã được xác nhận. <br>
                                Vui lòng chờ vận chuyển và nhận hàng!</p>
                        @endif
                        <form action="{{ route('bills.getCancelOrder', $bills_info->bill_id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn" @if ($bills_info->status == 'confirm' || $bills_info->status == 'cancel') disabled @endif onclick="return confirm('Are you sure cancel?')">Cancel</button>
                        </form>
                        <!-- Paginator -->
                    @else    
                    <p>You have no items</p>
                    @endif
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
<script>
</script>

@endsection
<!-- --------scripts-------------- -->
    
@section('custom-scripts')
@endsection