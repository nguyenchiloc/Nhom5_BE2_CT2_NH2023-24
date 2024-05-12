@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-back-index" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Products</li>
                </ol>
                <h5 class="font-weight-bolder mb-0">Product Management</h5>
            </nav>
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-2 d-flex align-items-center">
                            <h6>Tất cả</h6>
                        </div>
                        <div class="col-8 text-end">
                            @include('admin.admin-navhead')
                        </div>
                       
                        <div class="col-2 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('product.create') }}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm sản phẩm</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ảnh</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-8">Tên</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Giá</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-1">Số lượng</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">Loại</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">Thương hiệu</th> 
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng thái</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dataProduct as $Product)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <!-- If Product as Image it show up if not then a random picture will be displayed -->
                                            <img src="{{ asset('assets/images/products/'. $Product->product_images_1) }}" class="avatar avatar-sm me-3" alt="avatar">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">{{ $Product->product_name }}</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">{{ number_format($Product->product_price) }} VND</span>
                                </td>
                                <td> 
                                    <span class="text-secondary text-xs font-weight-bold">{{ $Product->product_qty ?  $Product->product_qty : 0 }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $Product->getCategoryProduct->category_name }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $Product->getBrandProduct->brand_name }}</span>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    @if($Product->product_status == 'InActive')
                                        <span class="badge badge-sm bg-gradient-secondary">InActive</span>
                                    @else
                                        <span class="badge badge-sm bg-gradient-success">ACTIVE</span>
                                    @endif
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <form id="adminDelete" action="{{ route('product.destroy', $Product->product_id) }}" method="post" role="form text-left" enctype="multipart/form-data">
                                            @csrf
                                            @method('post')
                                            <a href="{{ route('product.show', $Product->product_id) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Show">
                                                <i class="fas fa fa-eye "></i>
                                            </a>
                                            @csrf
                                            @method('PATCH')
                                            <a href="{{ route('product.edit', $Product->product_id) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            @method('DELETE')
                                            <button class="cursor-pointer fas fa-trash" style="border: none; background: no-repeat;" data-bs-toggle="tooltip" data-bs-original-title="Delete" onclick="return confirm('Are you sure?')"></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Paginator -->
                {{ $dataProduct->links() }}
            </div>
        </div>
    </div>
@stop