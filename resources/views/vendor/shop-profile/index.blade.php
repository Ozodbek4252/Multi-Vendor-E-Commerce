@extends('vendor.layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
            <div class="dashboard_content mt-2 mt-md-0">
                <h3><i class="far fa-user"></i> Shop profile</h3>
                <div class="wsus__dashboard_profile">
                    <div class="wsus__dash_pro_area">

                        <form action="{{ route('vendor.shop-profile.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group wsus__input">
                                <label for="banner">Preview</label>
                                <br>
                                <img width="200px" src="{{ asset($profile->banner) }}" alt="banner"
                                    class="img-fluid img-thumbnail">
                            </div>
                            <div class="form-group wsus__input">
                                <label for="banner">Banner</label>
                                <input type="file" name="banner" id="banner" class="form-control">
                            </div>
                            <div class="form-group wsus__input">
                                <label for="shop_name">Shop Name</label>
                                <input type="text" name="shop_name" id="shop_name" class="form-control"
                                    value="{{ $profile->shop_name }}">
                            </div>
                            <div class="form-group wsus__input">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    value="{{ $profile->phone }}">
                            </div>
                            <div class="form-group wsus__input">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control"
                                    value="{{ $profile->email }}">
                            </div>
                            <div class="form-group wsus__input">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" class="form-control"
                                    value="{{ $profile->address }}">
                            </div>
                            <div class="form-group wsus__input">
                                <label for="description">Description</label>
                                <textarea name="description" class="summernote" id="description" cols="30" rows="10">
                                        {{ $profile->description }}
                                    </textarea>
                            </div>
                            <div class="form-group wsus__input">
                                <label for="fb_link">Facebook</label>
                                <input type="text" name="fb_link" id="fb_link" class="form-control"
                                    value="{{ $profile->fb_link }}">
                            </div>
                            <div class="form-group wsus__input">
                                <label for="x_link">X (former <a href="https://twitter.com/home">Twitter</a>)</label>
                                <input type="text" name="x_link" id="x_link" class="form-control"
                                    value="{{ $profile->x_link }}">
                            </div>
                            <div class="form-group wsus__input">
                                <label for="insta_link">Insagram</label>
                                <input type="text" name="insta_link" id="insta_link" class="form-control"
                                    value="{{ $profile->insta_link }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
