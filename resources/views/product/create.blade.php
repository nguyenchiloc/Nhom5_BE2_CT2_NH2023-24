@extends('layouts.user-auth')
    @section('breadcrumb')
            <style>
                .text-back-index{
                    color: #67748e;
                }
                .text-back-index:hover{
                    color: #109525;
                }
                .breadcrumb-item.active {
                    color: #109525;
                }
            </style>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="text-back-index" href="{{ route('product.index') }}">Back</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Create products</li>
                </ol>
            </nav>

            @section('content')
            <!-- Tabs -->
            <div class="tab-content" id="pills-tabContent">
                <div class="container-fluid py-4 tab-pane fade show active" id="pills-details" role="tabpanel">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header pb-0 px-3">
                                    <h5 class="mb-0">{{ __('Create Product') }}</h5>
                                </div>
                                <div class="card-body pt-4 p-3">
                                    <form action="{{ route('product.store') }}" method="post" role="form text-left" enctype="multipart/form-data">
                                    @csrf    
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="product_name" class="form-control-label">{{ __('Product Name') }}</label>
                                                    <div class="@error('product_name')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="text" placeholder="Input name...." id="product_name" value="" name="product_name">
                                                        @error('product_name')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="product_price" class="form-control-label">{{ __('Price') }}</label>
                                                    <div class="@error('product_price')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="text" placeholder="Input price" id="product_price" value="" name="product_price">
                                                        @error('product_price')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="product_qty" class="form-control-label">{{ __('Product Qty') }}</label>
                                                    <div class="@error('product_qty')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="text" placeholder="Input Qty" id="product_qty" value="" name="product_qty">
                                                        @error('product_qty')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="category_id" class="form-control-label">{{ __('Select Category') }}</label>
                                                    <div class="@error('category_id')border border-danger rounded-3 @enderror">
                                                        <select class="form-control" id="category_id" name="category_id">
                                                            @foreach($category as $category)
                                                                <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('category_id')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="brand_id" class="form-control-label">{{ __('Select Brand') }}</label>
                                                    <div class="@error('brand_id')border border-danger rounded-3 @enderror">
                                                        <select class="form-control" id="brand_id" name="brand_id">
                                                            @foreach($brands as $brand)
                                                                <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('brand_id')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description" class="form-control-label">{{  __('Description') }}</label>
                                            <div class="@error('description')border border-danger rounded-3 @enderror">
                                                <textarea class="form-control" id="description" rows="3" placeholder="Input description..."  name="product_description"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="img-product-1" class="form-control-label">{{ __('Product Img 1') }}</label>
                                                    <div class="@error('img-product-1')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="file" placeholder="Choose File" id="img-product-1" name="product_images" onchange="previewImg1()">
                                                        @error('img-product-1')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="img-product-2" class="form-control-label">{{ __('Product Img 2') }}</label>
                                                    <div class="@error('img-product-2')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="file" placeholder="Choose File" id="img-product-2" name="img-product-2" onchange="previewImg2()">
                                                        @error('img-product-2')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="img-product-1" class="form-control-label">{{ __('Product Img 3') }}</label>
                                                    <div class="@error('img-product-3')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="file" placeholder="Choose File" id="img-product-3" name="img-product-3" onchange="previewImg3()">
                                                        @error('img-product-3')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label for="product_status" class="form-control-label">{{ __('Active') }}</label>
                                                    <div class="@error('product_status')border border-danger rounded-3 @enderror">
                                                        <select class="form-control" id="product_status" name="product_status">
                                                            <option value="InActive" >InActive</option>
                                                            <option value="Active" selected>Active</option>
                                                        </select>
                                                        @error('is_active')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"> ---img
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-xl position-relative">
                                                            <img id="uploadImg1" alt="no avt" class="w-100 border-radius-lg shadow-sm" width="100" height="90">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-xl position-relative">
                                                            <img id="uploadImg2" alt="no avt" class="w-100 border-radius-lg shadow-sm" width="100" height="90">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-xl position-relative">
                                                            <img id="uploadImg3" alt="no avt" class="w-100 border-radius-lg shadow-sm" width="100" height="90">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4 ml-5 mr-5"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;{{ 'Submit' }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <!-- End Of Tabs -->
    <script>
        function previewImg1() {
            var imgPreview1 = document.getElementById('uploadImg1');
            imgPreview1.src = window.URL.createObjectURL(event.target.files[0]);
        }
        function previewImg2() {
            var imgPreview2 = document.getElementById('uploadImg2');
            imgPreview2.src = window.URL.createObjectURL(event.target.files[0]);
        }
        function previewImg3() {
            var imgPreview3 = document.getElementById('uploadImg3');
            imgPreview3.src = window.URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection
