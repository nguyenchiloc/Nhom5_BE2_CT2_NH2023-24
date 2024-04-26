@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-back-index" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Category</li>
                </ol>
                <h5 class="font-weight-bolder mb-0">Category Management</h5>
            </nav>
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-2 d-flex align-items-center">
                            <h6>All Category</h6>
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
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $index => $category)
                                <tr class="text-center">
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold text-center">{{ $index + 1 }}</span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $category->category_name }}</span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $category->category_description }}</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        @if($category->category_status == 'InActive')
                                            <span class="badge badge-sm bg-gradient-secondary">InActive</span>
                                        @else
                                            <span class="badge badge-sm bg-gradient-success">ACTIVE</span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <form id="adminDelete" action="{{ route('category.destroy', $category->category_id) }}" method="post" role="form text-left" enctype="multipart/form-data">
                                            <a href="#create" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Create">
                                                <i class="fa fa-plus "></i>
                                            </a>
                                            @csrf
                                            @method('PATCH')
                                            <a href="#edit"  class="mx-3 edit-category" data-bs-toggle="tooltip" data-bs-original-title="Edit" onclick="window.location=' {{ route('category.edit', $category->category_id) }}#edit'">
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
            </div>
            <!-- Create -->
            <div class="tab-content" id="create">
                <div class="py-4 tab-pane fade show active" id="pills-details" role="tabpanel">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header pb-0 px-3">
                                    <h5 class="mb-0">{{ __('Create') }}</h5>
                                </div>
                                <div class="card-body pt-4 p-3">
                                    <form action="{{ route('category.store') }}" method="post" role="form text-left" enctype="multipart/form-data">
                                    @csrf    
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="category_name" class="form-control-label">{{ __('Name') }}</label>
                                                    <div class="@error('category_name')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="text" placeholder="Input name...." id="category_name" value="" name="category_name">
                                                        @error('category_name')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="category_description" class="form-control-label">{{ __('Description') }}</label>
                                                    <div class="@error('category_description')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="text" placeholder="Input description..." id="category_description" value="" name="category_description">
                                                        @error('category_description')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label for="category_status" class="form-control-label">{{ __('Status') }}</label>
                                                    <div class="@error('category_status')border border-danger rounded-3 @enderror">
                                                        <select class="form-control" id="category_status" name="category_status">
                                                            <option value="InActive" >InActive</option>
                                                            <option value="Active" selected>Active</option>
                                                        </select>
                                                        @error('category_status')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4 ml-5 mr-5"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;{{ 'Create' }}</button>
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
            <div class="tab-content" id="edit">
                <div class="py-4 tab-pane fade show active" id="pills-details" role="tabpanel">
                    @if(isset($category_data_old))
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header pb-0 px-3">
                                    <h5 class="mb-0">{{ __('Edit') }}</h5>
                                </div>
                                    <div class="card-body pt-4 p-3">
                                        <form action="{{ route('category.update', $category_data_old->category_id) }}" method="post" role="form text-left" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')    
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label for="category_id" class="form-control-label">{{ __('Category ID') }}</label>
                                                        <div class="@error('category_id')border border-danger rounded-3 @enderror">
                                                            <input class="form-control" type="text" id="category_id" value="{{ $category_data_old->category_id }}" name="category_id"  disabled>
                                                            @error('category_id')
                                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>`
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="category_name" class="form-control-label">{{ __('Category Name') }}</label>
                                                        <div class="@error('category_name')border border-danger rounded-3 @enderror">
                                                            <input class="form-control" type="text" placeholder="Input name...." id="category_name" value="{{ $category_data_old->category_name }}" name="category_name">
                                                            @error('category_name')
                                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="category_description" class="form-control-label">{{ __('Price') }}</label>
                                                        <div class="@error('category_description')border border-danger rounded-3 @enderror">
                                                            <input class="form-control" type="text" placeholder="Input price" id="category_description" value="{{ $category_data_old->category_description }}" name="category_description">
                                                            @error('category_description')
                                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 text-end">
                                                    <div class="form-group">
                                                        <label for="category_status" class="form-control-label">{{ __('Active') }}</label>
                                                        <div class="@error('category_status')border border-danger rounded-3 @enderror">
                                                            <select class="form-control" id="category_status" name="category_status">
                                                                <option value="InActive"  @if( $category_data_old->category_status  == "InActive") selected @endif>InActive</option>
                                                                <option value="Active" @if( $category_data_old->category_status  == "Active") selected @endif>Active</option>
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
                                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4 ml-5 mr-5"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;{{ 'Update' }}</button>
                                            </div>
                                        </form>
                                    </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- End Edit -->
            
        </div>
    </div>
@stop
<script>
   
   // {{ route('category.edit', $category->category_id) }}
</script>