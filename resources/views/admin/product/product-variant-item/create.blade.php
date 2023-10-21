@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Variant Items</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Variant Item</h4>

                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.products-variant-item.store') }}" method="POST">
                                @csrf

                                <input type="hidden" name="variant_id" value="{{ $variant->id }}">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">

                                <div class="form-group">
                                    <label for="variant_name">Variant Name</label>
                                    <input type="text" id="variant_name" class="form-control"
                                        value="{{ $variant->name }}" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">Item Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label for="price">Price <code>(Set 0 for make it free)</code></label>
                                    <input type="text" name="price" id="price" class="form-control" value="">
                                </div>

                                <div class="form-group">
                                    <label for="is_default">Is Default</label>
                                    <select name="is_default" id="is_default" class="form-control">
                                        <option value="">Select</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
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
