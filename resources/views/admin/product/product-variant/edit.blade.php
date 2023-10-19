@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Variant</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Variant</h4>

                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.products-variant.update', $productVariant->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <input type="hidden" name="product_id" value="{{ $productVariant->product_id }}">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $productVariant->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option {{ $productVariant->status == 1 ? 'selected' : '' }} value="1">
                                            Active
                                        </option>
                                        <option {{ $productVariant->status == 0 ? 'selected' : '' }} value="0">
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
    </section>
@endsection
