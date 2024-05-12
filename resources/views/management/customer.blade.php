@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-back-index" href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tài khoản</li>
                </ol>
                <h5 class="font-weight-bolder mb-0">Quản lý tài khoản</h5>
            </nav>
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-2 d-flex align-items-center">
                            <h6>Tất cả tài khoản</h6>
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
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ảnh</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Số điện thoại</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Giới tính</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ngày sinh</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Địa chỉ</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quyền</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng thái</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customer as $user)
                                <tr class="text-center">
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold text-center">
                                             <img src="{{ asset('assets/images/products/'. $user->avatar) }}" class="avatar avatar-sm me-3" alt="avatar">
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $user->full_name }}</span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $user->email }}</span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $user->phone }}</span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $user->gender }}</span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $user->date }}</span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $user->address }}</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        @if($user->status == 'InActive')
                                            <span class="badge badge-sm bg-gradient-faded-light">InActive</span>
                                        @else
                                            <span class="badge badge-sm bg-gradient-success">ACTIVE</span>
                                        @endif
                                    </td>
                                    <form id="adminUpdate" onsubmit="chk(this);" action="{{ route('customer.update',  $user->user_id) }}" method="post" role="form text-left" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <td class="align-middle text-center text-sm">
                                            <div class="@error('customer_level')border border-danger rounded-3 @enderror">
                                                <select class="form-control" id="level_id" onchange="deptSelector()" name="customer_level">
                                                    <option value="1"  @if( $user->level_id  == 1) selected @endif>Admin</option>
                                                    <option value="2" @if( $user->level_id  == 2) selected @endif>User</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <button class="cursor-pointer fas fa-save" style="border: none; background: no-repeat;font-size:24px" data-bs-toggle="tooltip" data-bs-original-title="Cập nhật" onclick="return confirm('Are you sure?')"></button>
                                        </td>  
                                    </form>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
</style>
 <script language="JavaScript">


        // function deptSelector() {
        //     var val = event.target.value;  
        //     console.log(val);

        // }
        // function chk(level_id) {
        //     var opt = document.getElementById("level_id").value;
        //     level_id.level_id.value = opt;
        //     level_id.submit;
        // }
</script>