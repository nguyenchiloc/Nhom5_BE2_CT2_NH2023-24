@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-back-index" href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Thương hiệu</li>
                </ol>
                <h5 class="font-weight-bolder mb-0">Quản lý thương hiệu</h5>
            </nav>
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-2 d-flex align-items-center">
                            <h6>Tất cả thương hiệu</h6>
                        </div>
                        <div class="col-8 text-end">
                            @include('admin.admin-navhead')
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" id="detailTable">
                            <thead>
                            <tr class="text-center">
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mô tả</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng thái</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brand as $index => $brand)
                                <tr class="text-center">
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold text-center">{{ $index + 1 }}</span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $brand->brand_name }}</span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $brand->brand_description }}</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        @if($brand->brand_status == 'InActive')
                                            <span class="badge badge-sm bg-gradient-secondary">InActive</span>
                                        @else
                                            <span class="badge badge-sm bg-gradient-success">ACTIVE</span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <form id="adminDelete" action="{{ route('brand.destroy', $brand->brand_id) }}" method="post" role="form text-left" enctype="multipart/form-data">
                                            <a href="#create" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Tạo">
                                                <i class="fa fa-plus "></i>
                                            </a>
                                            @csrf
                                            @method('PATCH')
                                            <a href="#edit"  class="mx-3 edit-brand" data-bs-toggle="tooltip" data-bs-original-title="Chỉnh sửa" onclick="window.location=' {{ route('brand.edit', $brand->brand_id) }}#edit'">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            @method('DELETE')
                                            <button class="cursor-pointer fas fa-trash" style="border: none; background: no-repeat;" data-bs-toggle="tooltip" data-bs-original-title="Xóa" onclick="return confirm('Are you sure?')"></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Create -->
            <div class="tab-content" id="create">
                <div class="py-4 tab-pane fade show active" id="pills-details" role="tabpanel">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header pb-0 px-3">
                                    <h5 class="mb-0">{{ __('Tạo') }}</h5>
                                </div>
                                <div class="card-body pt-4 p-3">
                                    <form action="{{ route('brand.create') }}" method="post" role="form text-left" enctype="multipart/form-data">
                                    @csrf    
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="brand_name" class="form-control-label">{{ __('Tên') }}</label>
                                                    <div class="@error('brand_name')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="text" placeholder="Nhập tên...." id="brand_name" value="" name="brand_name" required>
                                                        @error('brand_name')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="brand_description" class="form-control-label">{{ __('Mô tả') }}</label>
                                                    <div class="@error('brand_description')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="text" placeholder="Nhập mô tả...." id="brand_description" value="" name="brand_description">
                                                        @error('brand_description')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label for="brand_status" class="form-control-label">{{ __('Trạng thái') }}</label>
                                                    <div class="@error('brand_status')border border-danger rounded-3 @enderror">
                                                        <select class="form-control" id="brand_status" name="brand_status">
                                                            <option value="InActive" >InActive</option>
                                                            <option value="Active" selected>Active</option>
                                                        </select>
                                                        @error('brand_status')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4 ml-5 mr-5"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;{{ 'Tạo' }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- End Create -->
            <!-- Edit -->
            @if(isset($brand_data_old))
            <div class="tab-content" id="edit">
                <div class="py-4 tab-pane fade show active" id="pills-details" role="tabpanel">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header pb-0 px-3">
                                    <h5 class="mb-0">{{ __('Edit') }}</h5>
                                </div>
                                <div class="card-body pt-4 p-3">
                                    <form action="{{ route('brand.update', $brand_data_old->brand_id) }}" method="post" role="form text-left" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')    
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label for="brand_id" class="form-control-label">{{ __('Brand ID') }}</label>
                                                    <div class="@error('brand_id')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="text" id="brand_id" value="{{ $brand_data_old->brand_id }}" name="brand_id"  disabled>
                                                        @error('brand_id')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="brand_name" class="form-control-label">{{ __('Brand Name') }}</label>
                                                    <div class="@error('brand_name')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="text" placeholder="Nhập tên...." id="brand_name" value="{{ $brand_data_old->brand_name }}" name="brand_name">
                                                        @error('brand_name')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="brand_description" class="form-control-label">{{ __('Mô tả') }}</label>
                                                    <div class="@error('brand_description')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="text" placeholder="Input price" id="brand_description" value="{{ $brand_data_old->brand_description }}" name="brand_description">
                                                        @error('brand_description')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1 text-end">
                                                <div class="form-group">
                                                    <label for="brand_status" class="form-control-label">{{ __('Active') }}</label>
                                                    <div class="@error('brand_status')border border-danger rounded-3 @enderror">
                                                        <select class="form-control" id="brand_status" name="brand_status">
                                                            <option value="InActive"  @if( $brand_data_old->brand_status  == "InActive") selected @endif>InActive</option>
                                                            <option value="Active" @if( $brand_data_old->brand_status  == "Active") selected @endif>Active</option>
                                                        </select>
                                                        </select>
                                                        @error('is_active')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4 ml-5 mr-5"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;{{ 'Cập nhật' }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            @endif
            <!-- End Edit -->
            
        </div>
    </div>
@stop
<script>
   
   // {{ route('brand.edit', $brand->brand_id) }}
</script>