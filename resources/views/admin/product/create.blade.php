@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ old('name') }}">
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <select name="category_id" id="category" class="form-control main-category">
                                                <option value="">Select</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="sub_category">Sub Category</label>
                                            <select name="sub_category_id" id="sub_category"
                                                class="form-control sub-category">
                                                <option value="">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="child_category">Child Category</label>
                                            <select name="child_category_id" id="child_category"
                                                class="form-control child-category">
                                                <option value="">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="brand">Brand</label>
                                    <select name="brand_id" id="brand" class="form-control">
                                        <option value="">Select</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="sku">SKU</label>
                                    <input type="text" name="sku" id="sku" class="form-control"
                                        value="{{ old('sku') }}">
                                </div>

                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" id="price" class="form-control"
                                        value="{{ old('price') }}">
                                </div>

                                <div class="form-group">
                                    <label for="offer_price">Offer Price</label>
                                    <input type="text" name="offer_price" id="offer_price" class="form-control"
                                        value="{{ old('offer_price') }}">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="offer_start_date">Offer Start Date</label>
                                            <input type="text" name="offer_start_date" id="offer_start_date"
                                                class="form-control datepicker" value="{{ old('offer_start_date') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="offer_end_date">Offer End Date</label>
                                            <input type="text" name="offer_end_date" id="offer_end_date"
                                                class="form-control datepicker" value="{{ old('offer_end_date') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="qty">Stock Quantity</label>
                                    <input type="number" min="0" name="qty" id="qty" class="form-control"
                                        value="{{ old('qty') }}">
                                </div>

                                <div class="form-group">
                                    <label for="video_link">Video Link</label>
                                    <input type="text" name="video_link" id="video_link" class="form-control"
                                        value="{{ old('video_link') }}">
                                </div>

                                <div class="form-group">
                                    <label for="short_description">Short Description</label>
                                    <textarea name="short_description" id="short_description" class="form-control summernote">{{ old('short_description') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="long_description">Long Description</label>
                                    <textarea name="long_description" id="long_description" class="form-control summernote">{{ old('long_description') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="product_type">Product Type</label>
                                    <select name="product_type" id="product_type" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="new_arrival">New Arrival</option>
                                        <option value="featured_product">Featured</option>
                                        <option value="top_product">Top Product</option>
                                        <option value="best_product">Best Product</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="seo_title">SEO Title</label>
                                    <input type="text" name="seo_title" id="seo_title" class="form-control"
                                        value="{{ old('seo_title') }}">
                                </div>
                                <div class="form-group">
                                    <label for="seo_description">SEO Description</label>
                                    <textarea name="seo_description" id="seo_description" class="form-control summernote">{{ old('seo_description') }}</textarea>
                                </div>



                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('body').on('change', '.main-category, .sub-category', function(e) {
                const id = $(this).val();
                const targetClass = $(this).hasClass('main-category') ? 'sub-category' : 'child-category';
                const targetSelect = $('.' + targetClass);

                $.ajax({
                    method: 'GET',
                    url: targetClass === 'sub-category' ?
                        "{{ route('admin.product.get-subcategories') }}" :
                        "{{ route('admin.product.get-child-categories') }}",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        targetSelect.html('<option value="">Select</option>');

                        $.each(data, function(i, item) {
                            targetSelect.append(
                                `<option value="${item.id}">${item.name}</option>`);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endpush
