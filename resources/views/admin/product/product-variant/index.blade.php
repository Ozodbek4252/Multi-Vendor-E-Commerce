@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Variant</h1>
        </div>

        <div class="mb-3">
            <a class="btn btn-primary" href="{{ route('admin.products.index') }}">
                Back
            </a>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Product: {{ $product->name }}</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.products-variant.create', ['product_id' => $product->id]) }}"
                                    class="btn btn-primary"><i class="fas fa-plus"></i> Create New</a>
                            </div>
                        </div>
                        <div class="card-body">

                        </div>
                        <div class="card-footer text-right">
                            {{ $dataTable->table(['style' => 'text-align: left;']) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
