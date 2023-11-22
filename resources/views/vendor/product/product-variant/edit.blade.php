@extends('vendor.layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
            <div class="dashboard_content mt-2 mt-md-0">
                <h3><i class="far fa-user"></i> Edit Variant</h3>
                <a href="{{ route('vendor.products-variant.index', ['product_id' => $product->id]) }}"
                    class="btn btn-secondary mb-4">
                    <i class="fas fa-long-arrow-left"></i> Back
                </a>
                <div class="wsus__dashboard_profile">
                    <div class="wsus__dash_pro_area">

                        <form action="{{ route('vendor.products-variant.update', $productVariant->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="product_id" value="{{ $product->id }}">

                            <div class="form-group wsus__input">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $productVariant->name }}">
                            </div>
                            <div class="form-group wsus__input">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option {{ $productVariant->status == '1' ? 'selected' : '' }} value="1">
                                        Active
                                    </option>
                                    <option {{ $productVariant->status == '0' ? 'selected' : '' }} value="0">
                                        Inactive
                                    </option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
