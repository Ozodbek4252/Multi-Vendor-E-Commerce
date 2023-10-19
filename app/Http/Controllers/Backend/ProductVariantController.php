<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\ProductVariantDataTable;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class ProductVariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, ProductVariantDataTable $dataTable)
    {
        $product = Product::findOrFail($request->product_id);
        return $dataTable->render('admin.product.product-variant.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.product-variant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'name' => 'required|max:200',
            'status' => 'required',
        ]);

        ProductVariant::create($request->only(['product_id', 'name', 'status']));

        toastr('Created successfully', 'success', 'success');

        return redirect()->route('admin.products-variant.index', ['product_id' => $request->product_id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $productVariant = ProductVariant::findOrFail($id);
        return view('admin.product.product-variant.edit', compact('productVariant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'name' => 'required|max:200',
            'status' => 'required',
        ]);

        $productVariant = ProductVariant::findOrFail($id);
        $productVariant->update($request->only(['product_id', 'name', 'status']));

        toastr('Updated successfully', 'success', 'success');

        return redirect()->route('admin.products-variant.index', ['product_id' => $request->product_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productVariant = ProductVariant::findOrFail($id);
        $productVariant->delete();

        return response([
            'status' => 'success',
            'message' => 'Deleted successfully',
        ]);
    }

    public function changeStatus(Request $request)
    {
        $productVariant = ProductVariant ::findOrFail($request->id);
        $productVariant->status = $request->status == 'true' ? 1 : 0;
        $productVariant->save();

        return response(['message' => 'Status has been updated!']);
    }
}
