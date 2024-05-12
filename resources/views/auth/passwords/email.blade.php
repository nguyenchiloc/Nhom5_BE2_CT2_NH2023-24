@extends('layouts.user-auth')

@section('content')
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                    <!-- Register Form -->
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card mt-5">
                            <div class="card-header text-start pt-4 ms-1">
                                <h3 class="font-weight-bolder text-primary text-gradient">Reset Password</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('password.email') }}" role="form text-left">
                                    @csrf
                                    <label class="text-primary text-gradient">Email</label>
                                    <div class="mb-3">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" aria-label="Email" aria-describedby="email-addon">
                                        @error('email')
                                        <span class="invalid-feedback text-xs" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-check form-check-info text-left">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Tôi đồng ý với các <a href="javascript:;" class=" bg-gradient-info font-weight-bolder">Điều khoản và Điều kiện</a>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
