@extends('vendor.layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
            <a href="{{ route('vendor.products-variant.index', ['product_id' => $product->id]) }}"
                class="btn btn-secondary mb-4">
                <i class="fas fa-long-arrow-left"></i> Back
            </a>
            <div class="dashboard_content mt-2 mt-md-0">
                <h3><i class="far fa-user"></i> Product Variant Items</h3>
                <h6>Variant: {{ $variant->name }}</h6>
                <div class="create_button">
                    <a href="{{ route('vendor.products-variant-item.create', ['product_id' => $product->id, 'variant_id' => $variant->id]) }}"
                        class="btn btn-primary">
                        <i class="fas fa-plus"></i> Create Variant Item
                    </a>
                </div>
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

    <script>
        $(document).ready(function() {
            $('body').on('click', '.change-status', function() {
                let isChecked = $(this).is(':checked');
                let id = $(this).data('id');

                $.ajax({
                    url: "{{ route('vendor.products-variant.change-status') }}",
                    method: 'PUT',
                    data: {
                        status: isChecked,
                        id: id
                    },
                    success: function(data) {
                        toastr.success(data.message);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            })
        });
    </script>
@endpush
