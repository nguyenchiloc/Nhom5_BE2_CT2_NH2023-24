<!-- {{-- View này sẽ kế thừa giao diện từ layout->masternnhhh ,,--}} -->
@extends('layouts.master')

@section('title')
E - Sunshine
@endsection

@section('custom-css')
@endsection

@section('main-content')
<!-- Slider -->
@include('pages.home_slide_banner')
<!-- Banner -->
<!-- Product -->
@include('pages.products_list')
@endsection
@section('custom-scripts')
@endsection