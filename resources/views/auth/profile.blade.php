@extends('layouts.user-auth')
    @section('breadcrumb')
            <style>
                .text-dark-1{
                    color: #fff;
                }
                .text-dark-1:hover{
                    color: #109525;
                }
                .breadcrumb-item.active {
                    color: #109525;
                }
            </style>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="text-dark-1" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-sm text-dark-1 active test" aria-current="page">Edit User</li>
                </ol>
            </nav>

            @section('content')
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img id="uploadImg" alt="no avt" class="w-100 border-radius-lg shadow-sm" width="100" height="90">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{ $user->full_name }}
                            </h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist" id="pills-tab">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active" id="pills-details-tab" data-bs-toggle="pill" data-bs-target="#pills-details" href="" role="tab" aria-selected="true">
                                        <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(603.000000, 0.000000)">
                                                            <path  class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                                                            <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                                                            <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ms-1">Details</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" id="pills-update-tab" data-bs-toggle="pill" data-bs-target="#pills-update" href="" role="tab" aria-selected="false">
                                        <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>settings</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(304.000000, 151.000000)">
                                                            <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                            </polygon>
                                                            <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                                                            <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ms-1">Update</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tabs -->
            <div class="tab-content" id="pills-tabContent">
                <div class="container-fluid py-4 tab-pane fade show active" id="pills-details" role="tabpanel" aria-labelledby="details-tab">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header pb-0 px-3">
                                    <h5 class="mb-0">{{ __('Profile') }}</h5>
                                </div>
                                <div class="card-body pt-4 p-3">
                                    <form action="{{ route('profile.update', $user->user_id) }}" method="post" role="form text-left" enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        @if($errors->any())
                                            <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                                                <span class="alert-text text-white">
                                                {{$errors->first()}}</span>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                                    <i class="fa fa-close" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="avatar" class="form-control-label">{{ __('Profile Avatar') }}</label>
                                                    <div class="@error('avatar')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="file" placeholder="Choose File" id="avatar" name="avatar" onchange="previewImg()">
                                                        @error('avatar')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email" class="form-control-label">{{ __('Email') }}</label>
                                                    <div class="@error('email')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="email" placeholder="@example.com" value="{{ $user->email }}" id="email" name="email" disabled>
                                                        @error('email')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="form-control-label">{{ __('Full Name') }}</label>
                                                    <div class="@error('full_name')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="text" placeholder="name" id="user-name" value="{{ $user->full_name }}" name="full_name">
                                                        @error('full_name')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="gender" class="form-control-label">{{ __('Gender') }}</label>
                                                    <div class="@error('gender')border border-danger rounded-3 @enderror">
                                                        <select class="form-control" id="gender" name="gender">
                                                            <option value="0"  @if( $user->gender  == 0) selected @endif>Không xác định</option>
                                                            <option value="1" @if( $user->gender  == 1) selected @endif>Nữ</option>
                                                            <option value="2" @if( $user->gender  == 2) selected @endif>Nam</option>
                                                        </select>
                                                        @error('gender')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone" class="form-control-label">{{ __('Phone') }}</label>
                                                    <div class="@error('phone')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="tel" value="{{ $user->phone }}" placeholder="+84" id="number" name="phone">
                                                        @error('phone')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="date" class="form-control-label">{{ __('Date of Birth') }}</label>
                                                    <div class="@error('date') border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="date" value="{{ $user->date }}" placeholder="date" id="date" name="date">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="address" class="form-control-label">{{ __('Address') }}</label>
                                                    <div class="@error('address') border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="text" value="{{ $user->address }}" placeholder="address" id="address" name="address">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="about">{{ 'About Me' }}</label>
                                            <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                                <textarea class="form-control" id="about" rows="3" placeholder="Say something about user!!!"  name="about">{{ $user->about }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="is_active" class="form-control-label">{{ __('Active') }}</label>
                                                    <div class="@error('is_active')border border-danger rounded-3 @enderror">
                                                        <select class="form-control" id="is_active" name="is_active">
                                                            <option value="0" @if($user->is_active == 0) selected @endif>Not Active</option>
                                                            <option value="1"  @if($user->is_active != 0) selected @endif>Active</option>
                                                        </select>
                                                        @error('is_active')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;{{ 'Update Profile' }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid py-4 tab-pane fade" id="pills-update" role="tabpanel" aria-labelledby="details-tab">
                <div class="row mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header pb-0 px-3">
                                    <h5 class="mb-0">{{ __('Update Password') }}</h5>
                                </div>
                                <div class="card-body pt-4 p-3">
                                    <form action="{{ route('profile.changePassword', $user->user_id) }}" method="POST" role="form text-left" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="old_password" class="form-control-label">{{ __('Password Current') }}</label>
                                                    <div class="@error('old_password') border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="old_password" placeholder="current password" id="old_password" name="old_password">
                                                        @error('old_password')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password" class="form-control-label">{{ __('Password') }}</label>
                                                    <div class="@error('password') border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="password" placeholder="Password" id="password" name="password">
                                                        @error('password')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password_confirmation" class="form-control-label">{{ __('Re-Enter Password') }}</label>
                                                    <div class="@error('password_confirmation')border border-danger rounded-3 @enderror">
                                                        <input class="form-control" type="text" placeholder="Re-Enter Password" id="password_confirmation" name="password_confirmation">
                                                        @error('password_confirmation')
                                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start">
                                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;{{ 'Update Password' }}</button>
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
        function previewImg() {
            var imgPreview = document.getElementById('uploadImg');
            imgPreview.src = window.URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection
