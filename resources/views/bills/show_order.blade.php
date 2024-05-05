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
                            <div class="col"><h4><b>Your Order</b></h4></div>
                            @if(!Auth::check())
                                <div class="col align-self-center text-right text-muted"> 0 items</div>
                            @else
                            <div class="col align-self-center text-right text-muted"> {{  Auth::user()->getUserBill->count() }} items</div>
                            @endif
                        </div>
                    </div>   
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-3" style="text-align :center;">ID Order</div>
                            <div class="col-2" style="text-align :center;">Date</div>
                            <div class="col-2" style="text-align :center;">Status</div> 
                            <div class="col-2" style="text-align :center;">Detail</div> 
                            <div class="col-3" style="text-align :center;">Total</div> 
                        </div>
                    </div>
                    @if(count($bills))
                        @foreach($bills as $index => $bill) 
                        <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-3" style="text-align :center;">{{ $index + 1 }}.{{ Auth::user()->user_id }}-{{ $bill->bill_id }}-{{ date('Ymd', strtotime($bill->date_invoice)) }}
                                </div>
                                <div class="col-2" style="text-align :center;">{{  date('d/m/Y', strtotime($bill->date_invoice)) }}
                                </div>
                                <div class="col-2" style="text-align :center;">{{ $bill->status}}</div>
                                <div class="col-2" style="text-align :center;">
                                    <form method="POST" action="{{ route('bills.show_detail', $bill->bill_id) }}">
                                        @csrf
                                            <input type="text" name="bill_id" value="{{ $bill->bill_id }}" hidden>
                                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4 ml-3 mr-3"></i>{{ 'Detail' }}</button>
                                    </form>
                                </div>
                                <div class="col-3" style="text-align :center">{{ number_format($bill->total_amount) }} VND</div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Paginator -->
                        {{ $bills->links() }}
                    @else    
                    <p>You have no items in the shopping cart</p>
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
                            <div class="col-10"><h5><b>Detail order: {{ Auth::user()->user_id }}-{{ $bill->bill_id }}-{{ date('Ymd', strtotime($bill->date_invoice)) }}</b></h5></div>
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
                                <div class="col-2" style="text-align :center;"> {{ $bill_detail->quantily}}</div>
                                <div class="col-3" style="text-align :center;"> {{ number_format($bill_detail->price) }}</div>
                                <div class="col-3" style="text-align :center;"> {{ number_format($bill_detail->price * $bill_detail->quantily) }}</div>
                            </div>
                        </div>
                        @endforeach
                        <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-12" style="text-align :center; font-weight: 900;">Total: {{ number_format($bill->total_amount) }} VND</div>
                            </div>
                        </div>
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


@endsection
<!-- --------scripts-------------- -->
    
@section('custom-scripts')
@endsection