<!--Header/Footer/css-->
@extends('layouts.master')
@section('title')
E - Sunshine
@endsection
@section('custom-css')
@endsection
@section('main-content')
<!-- --------Title page-------------- -->
@section('main-content')
@section('main-content')
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15" style="background-image: url('{{ asset('themes/cozastore/images/bg-01.jpg') }}');">
    <h2 class="ltext-105 cl0 txt-center">
        Đặt hàng hoàn tất
    </h2>
</section>
<!-- Content page -->
<section class="bg0 p-t-75">
    <div class="container">
        <div class="row p-b-148">
            <div class="col-md-7 col-lg-8">
                <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Đặt hàng hoàn tất
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                        Chúng tôi đã gởi email xác nhận đơn hàng cho Quý khách. Quý khách vui vòng kiểm tra hộp thư.
                        Xin cám ơn Quý khách đã tin tưởng sản phẩm của chúng tôi.
                    </p>

                    <p class="stext-113 cl6 p-b-26">
                        Nếu cần hỗ trợ, vui lòng gọi đến đường dây nóng của chúng tôi để được hỗ trợ khi cần thiết:<br />
                        TEL: +1 800 1236879
                    </p>
                </div>
            </div>

            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <img class="how-pos4 pointer-none" src="{{ asset('assets/images/icons/love.gif') }}" alt="ICON">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection	
<!-- --------scripts-------------- -->

@section('custom-scripts')
@endsection

