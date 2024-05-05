@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-back-index" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Bill/Order</li>
                </ol>
                <h5 class="font-weight-bolder mb-0">Bill/Order Management</h5>
            </nav>
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-2 d-flex align-items-center">
                            <h6>All Order</h6>
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
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID Order</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Customer</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date Invoice</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            @foreach($bills as $index => $bill)
                                <tr class="text-center">
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold text-center">
                                            {{ $index +1 }}.{{ $bill->getBillUser->user_id }}-{{ $bill->bill_id }}-{{ date('Ymd', strtotime($bill->date_invoice)) }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $bill->getBillUser->full_name }}</span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $bill->getBillUser->email }}</span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $bill->date_invoice }}</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $bill->status }}</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <form id="admin" action="#" method="post" role="form text-left" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <a href="#confirm"  class="mx-3 edit-brand" data-bs-toggle="tooltip" data-bs-original-title="Confirm" onclick="window.location=' {{ route('bills.edit', $bill->bill_id) }}#confirm'">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Update -->
            <div class="tab-content" id="confirm">
                <div class="py-4 tab-pane fade show active" id="pills-details" role="tabpanel">
                    <div class="row">
                        @if(isset($bills_data_old))
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header pb-0 px-3">
                                    <h5 class="mb-0">{{ __('Infomation Detail') }}</h5>
                                </div>
                                    <div class="card-body pt-4 p-3">
                                        <form action="{{ route('bills.update', $bills_data_old->bill_id) }}" method="post" role="form text-left" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')   
                                            <input class="form-control" type="text" id="bill_id" value="{{ $bills_data_old->bill_id }}" name="bill_id"  hidden> 
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group"> {{ __('Customer name') }} : </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group"> {{ $bills_data_old->getBillUser->full_name }}</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group"> {{ __('Mail') }} : </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group"> {{ $bills_data_old->getBillUser->email }}</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group"> {{ __('Phone') }} : </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group"> {{ $bills_data_old->getBillUser->phone }}</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group"> {{ __('Address') }} : </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group"> {{ $bills_data_old->getBillUser->address }}</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group"> {{ __('Note') }} : </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group"> {{ $bills_data_old->note }}</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group"> {{ __('Total') }} : </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group"> {{  number_format($bills_data_old->total_amount) }} VND</div>
                                                </div>
                                            </div>
                                            <div class="card-body px-0 pt-0 pb-2">
                                            <div class="table-responsive p-0">
                                                <table class="table align-items-center mb-0" id="detailTable">
                                                    <thead>
                                                    <tr class="text-center">
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >Product Name</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Qty</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    
                                                    @foreach($bills_detail as $index => $bills_detail)
                                                        <tr class="text-center">
                                                            <td>
                                                                <span class="text-secondary text-xs font-weight-bold text-center">
                                                                    {{ $index +1 }}
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="text-secondary text-xs font-weight-bold">{{ $bills_detail->getDetailProduct->product_name }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-secondary text-xs font-weight-bold">{{ $bills_detail->quantily }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-secondary text-xs font-weight-bold">{{  number_format($bills_detail->price) }} VND</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <label for="status" class="form-control-label">{{ __('Order status') }}</label>
                                                <div class="@error('status')border border-danger rounded-3 @enderror">
                                                    <select class="form-control" id="status" name="status">
                                                        <option value="unconfirm"  @if( $bills_data_old->status  == "unconfirm") selected @endif>UnConfirm</option>
                                                        <option value="confirm" @if( $bills_data_old->status  == "confirm") selected @endif>Confirm</option>
                                                        <option value="cancel" @if( $bills_data_old->status  == "cancel") selected @endif>Cancel</option>
                                                    </select>
                                                    @error('status')
                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                    @enderror
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