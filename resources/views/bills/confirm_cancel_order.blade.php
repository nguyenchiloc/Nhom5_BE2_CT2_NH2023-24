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
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15" style="background-image: url('{{ asset('themes/cozastore/images/bg-01.jpg') }}');">
    <h2 class="ltext-105 cl0 txt-center">
        Hủy đơn hàng hoàn tất
    </h2>
</section>
<!-- Content page -->
<section class="bg0 p-t-75">
    <div class="container">
        <div class="row p-b-148">
            <div class="col-md-7 col-lg-8">
                <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Hủy đơn hàng hoàn tất
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                        Chúng tôi rất buồn !!!
                    </p>

                    <p class="stext-113 cl6 p-b-26">
                        Nếu cần hỗ trợ, vui lòng gọi đến đường dây nóng của chúng tôi để được hỗ trợ khi cần thiết:<br />
                        TEL: +1 800 1236879
                    </p>
                </div>
            </div>

            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <img class="how-pos4 pointer-none" style="width:70%" src="{{ asset('assets/images/icons/cry.png') }}" alt="ICON">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- --------scripts-------------- -->
    
@section('custom-scripts')
@endsection