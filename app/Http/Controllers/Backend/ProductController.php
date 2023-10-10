<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\ProductDataTable;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Product;
use App\Models\SubCategory;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(ProductDataTable $dataTable)
    {
        return $dataTable->render('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.product.create', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $request->validate(
                [
                    'image' => 'required|image|max:3000',
                    'name' => 'required|unique:products|max:200',
                    'category_id' => 'required',
                    'brand_id' => 'required',
                    'price' => 'required',
                    'qty' => 'required',
                    'short_description' => 'required|max:600',
                    'long_description' => 'required',
                    'seo_title' => 'nullable|max:200',
                    'seo_description' => 'nullable|max:300',
                    'status' => 'required',
                ]
            );

            // Handdle image
            $imagePath = $this->uploadImage($request, 'image', 'uploads/products/');

            $product = new Product();
            $product->thumb_image = $imagePath;
            $product->name = $request->name;
            $product->slug = Str::slug($request->name);
            $product->vendor_id = auth()->user()->vendor->id;
            $product->category_id = $request->category_id;
            $product->sub_category_id = $request->sub_category_id;
            $product->child_category_id = $request->child_category_id;
            $product->brand_id = $request->brand_id;
            $product->sku = $request->sku;
            $product->price = $request->price;
            $product->video_link = $request->video_link;
            $product->offer_price = $request->offer_price;
            $product->offer_start_date = $request->offer_start_date;
            $product->offer_end_date = $request->offer_end_date;
            $product->qty = $request->qty;
            $product->short_description = $request->short_description;
            $product->long_description = $request->long_description;
            $product->is_top = $request->is_top;
            $product->is_best = $request->is_best;
            $product->is_featured = $request->is_featured;
            $product->status = $request->status;
            $product->is_approved = 1;
            $product->seo_title = $request->seo_title;
            $product->seo_description = $request->seo_description;
            $product->save();

            toastr('Product created successfully', 'success');

            DB::commit();
            return redirect()->route('admin.products.index');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getSubCategories(Request $request)
    {
        $subCategories = SubCategory::where('category_id', $request->id)->get();
        return response()->json($subCategories);
    }

    public function getChildCategories(Request $request)
    {
        $childCategories = ChildCategory::where('sub_category_id', $request->id)->get();
        return response()->json($childCategories);
    }
}
