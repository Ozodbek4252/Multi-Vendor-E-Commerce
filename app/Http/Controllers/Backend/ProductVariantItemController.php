<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\ProductVariantItemDataTable;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ProductVariantItem;
use Illuminate\Http\Request;

class ProductVariantItemController extends Controller
{
    public function index(ProductVariantItemDataTable $datatable, $productId, $variantId)
    {
        $product = Product::findOrFail($productId);
        $variant = ProductVariant::findOrFail($variantId);

        return $datatable->render('admin.product.product-variant-item.index', compact('product', 'variant'));
    }

    public function create(int $productId, int $variantId)
    {
        $product = Product::findOrFail($productId);
        $variant = ProductVariant::findOrFail($variantId);

        return view('admin.product.product-variant-item.create', compact('product', 'variant'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'variant_id' => 'required|int',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'is_default' => 'required|boolean',
            'status' => 'required|boolean',
        ]);

        $variantItem = new ProductVariantItem();
        $variantItem->product_variant_id = $request->variant_id;
        $variantItem->name = $request->name;
        $variantItem->price = $request->price;
        $variantItem->is_default = $request->is_default;
        $variantItem->status = $request->status;
        $variantItem->save();

        toastr('Created successfully', 'success', 'success');

        return redirect()->route('admin.products-variant-item.index', ['productId' => $request->product_id, 'variantId' => $request->variant_id]);
    }

    public function edit(int $id)
    {
        $variantItem = ProductVariantItem::findOrFail($id);
        $variant = ProductVariant::findOrFail($variantItem->product_variant_id);

        return view('admin.product.product-variant-item.edit', compact('variantItem', 'variant'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'is_default' => 'required|boolean',
            'status' => 'required|boolean',
        ]);

        $variantItem = ProductVariantItem::findOrFail($id);
        $variantItem->name = $request->name;
        $variantItem->price = $request->price;
        $variantItem->is_default = $request->is_default;
        $variantItem->status = $request->status;
        $variantItem->save();

        toastr('Updated successfully', 'success', 'success');

        return redirect()->route('admin.products-variant-item.index', ['productId' => $variantItem->productVariant->product_id, 'variantId' => $variantItem->product_variant_id]);
    }

    public function destroy(int $id)
    {
        $variantItem = ProductVariantItem::findOrFail($id);
        $variantItem->delete();

        return response([
            'status' => 'success',
            'message' => 'Deleted successfully',
        ]);
    }

    public function changeStatus(Request $request)
    {
        $variantItem = ProductVariantItem::findOrFail($request->id);
        $variantItem->status = $request->status == 'true' ? 1 : 0;
        $variantItem->save();

        return response(['message' => 'Status has been updated!']);
    }
}
