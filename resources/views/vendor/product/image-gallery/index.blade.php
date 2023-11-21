@extends('vendor.layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
            <a href="{{ route('vendor.products.index') }}" class="btn btn-secondary mb-4">
                <i class="fas fa-long-arrow-left"></i> Back
            </a>
            <div class="dashboard_content mt-2 mt-md-0">
                <h3><i class="fas fa-images"></i> Product: {{$product->name}}</h3>
                <div class="wsus__dashboard_profile">
                    <div class="wsus__dash_pro_area">

                        <form action="{{ route('vendor.products-image-gallery.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="form-group wsus__input">
                                <label for="image">Image <code>(Multiple images supported!)</code></label>
                                <input type="file" name="image[]" id="image" class="form-control" multiple>
                            </div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
            <div class="dashboard_content mt-2 mt-md-0">
                <h3><i class="fas fa-images"></i> Product Images</h3>
                <div class="wsus__dashboard_profile">
                    <div class="wsus__dash_pro_area">

                        {{ $dataTable->table(['style' => 'text-align: left;']) }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
