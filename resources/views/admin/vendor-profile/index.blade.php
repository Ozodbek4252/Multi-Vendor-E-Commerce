@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Vendor Profile</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Vendor Profile</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.vendor-profile.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="banner">Banner</label>
                                    <input type="file" name="banner" id="banner" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone')}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control" value="{{old('address')}}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="summernote" id="description" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="fb_link">Facebook</label>
                                    <input type="text" name="fb_link" id="fb_link" class="form-control" value="{{old('fb_link')}}">
                                </div>
                                <div class="form-group">
                                    <label for="x_link">X (former <a href="https://twitter.com/home">Twitter</a>)</label>
                                    <input type="text" name="x_link" id="x_link" class="form-control" value="{{old('x_link')}}">
                                </div>
                                <div class="form-group">
                                    <label for="insta_link">Insagram</label>
                                    <input type="text" name="insta_link" id="insta_link" class="form-control" value="{{old('insta_link')}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
