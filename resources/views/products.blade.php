<!-- {{-- View này sẽ kế thừa giao diện từ layout->master --}} -->
@extends('layouts.master')
@section('title')
E - Sunshine
@endsection
@section('custom-css')
@endsection
@section('layouts.cart')
@endsection
@section('main-content')
<!-- Product -->
@include('pages.products_list')
@endsection
@section('custom-scripts')
@endsection