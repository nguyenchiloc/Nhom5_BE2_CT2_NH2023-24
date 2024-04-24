@extends('layouts.admin')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ route('product.index') }}">Back</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Detail products</li>
        </ol>
    </nav>
@stop
<style>
	.page_edit{
		text-align: end;
	}
	.page_edit a{
		background-color: #fff;
	}
	.page_edit a:hover{
		background-color:  #80f392;
	}
</style>
@section('content')
	<!-- DataTales Example -->
	<div class="container">
		<div class="row clearfix page_edit">
				<form id="product_edit" action="/product/{{$product->product_id}}" method="POST" class="inline">@csrf
					@csrf
					@method('PATCH')
					<div class="col-md-12">
						<a class="btn btn-primary-1" href="{{ route('product.update', $product->product_id) }}"> <i class="fa fa-edit" aria-hidden="true"></i> Edit </a>
					</div>
				</form>
		</div>
		<div class="card shadow mb-4">
			<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary"> {{ $product->title }} </h6>
			</div>
			<div class="card-body">
				<div class="row clearfix justify-content-md-center">
					<div class="col-md-12">
						<div style="text-align: center; padding-bottom:20px;">
							<img src="{{ asset('assets/images/products/'. $product->product_images_1) }}" class="avatar avatar-sm-1 me-3" alt="avatar" style="height:200px; width:120px" ></td>
						</div>
						<table class="table table-borderless table-striped">
							<tr>
								<th class="text-right">Brand :</th>
								<td> {{ $product->getBrandProduct->brand_name }} </td>
							</tr>
							<tr>
								<th class="text-right">Category :</th>
								<td> {{ $product->getCategoryProduct->category_name }} </td>
							</tr>
							<tr>
								<th class="text-right">Name : </th>
								<td> {{ $product->product_name }} </td>
							</tr>
							<tr>
								<th class="text-right">Price : </th>
								<td> {{ number_format($product->product_price) }} </td>
							</tr>
							<tr>
								<th class="text-right">Qty : </th>
								<td> {{ $product->product_qty ?  $product->product_qty : 0 }} </td>
							</tr>
							<tr>
								<th class="text-right">Description: </th>
								<td> {{ $product->product_description }} </td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop	  
