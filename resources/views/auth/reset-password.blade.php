@extends('frontend.layouts.master')
@section('content')
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>change password</h4>
                        <ul>
                            <li><a href="#">login</a></li>
                            <li><a href="#">change password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="wsus__login_register">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-10 col-lg-7 m-auto">
                    <form action="{{ route('password.store') }}" method="POST">
                        @csrf
                        <div class="wsus__change_password">
                            <h4>reset password</h4>
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <div class="wsus__single_pass">
                                <label>Email</label>
                                <input name="email" id="email" value="{{old('email', $request->email)}}" type="email" placeholder="Email">
                            </div>
                            <div class="wsus__single_pass">
                                <label>new password</label>
                                <input name="password" id="password" type="password" placeholder="New Password">
                            </div>
                            <div class="wsus__single_pass">
                                <label>confirm password</label>
                                <input name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirm Password">
                            </div>
                            <button class="common_btn" type="submit">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
