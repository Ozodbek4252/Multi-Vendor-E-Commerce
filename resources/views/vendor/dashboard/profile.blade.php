@extends('vendor.dashboard.layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
            <div class="dashboard_content mt-2 mt-md-0">
                <h3><i class="far fa-user"></i> profile</h3>
                <div class="wsus__dashboard_profile">
                    <div class="wsus__dash_pro_area">
                        <h4>basic information</h4>

                        <form action="{{ route('vendor.profile.update') }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="col-md-12">
                                <div class="col-md-2">
                                    <div class="wsus__dash_pro_img">
                                        <img src="{{ auth()->user()->image ? asset(auth()->user()->image) : asset('backend/assets/img/avatar/avatar-1.png') }}"
                                            alt="img" class="img-fluid w-100">
                                        <input name="image" type="file">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-5">
                                    <div class="wsus__dash_pro_single">
                                        <i class="fas fa-user-tie"></i>
                                        <input name="name" type="text" value="{{ auth()->user()->name }}"
                                            placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="wsus__dash_pro_single">
                                        <i class="fal fa-envelope-open"></i>
                                        <input name="email" type="email" value="{{ auth()->user()->email }}"
                                            placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <button class="common_btn mb-4 mt-2" type="submit">upload</button>
                            </div>
                        </form>

                        <div class="wsus__dash_pass_change mt-2">
                            <form action="{{ route('vendor.profile.update.password') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <h4>Update Password</h4>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="wsus__dash_pro_single">
                                            <i class="fas fa-unlock-alt"></i>
                                            <input name="current_password" type="password" placeholder="Current Password">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="wsus__dash_pro_single">
                                            <i class="fas fa-lock-alt"></i>
                                            <input name="password" type="password" placeholder="New Password">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="wsus__dash_pro_single">
                                            <i class="fas fa-lock-alt"></i>
                                            <input name="password_confirmation" type="password"
                                                placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <button class="common_btn" type="submit">upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
