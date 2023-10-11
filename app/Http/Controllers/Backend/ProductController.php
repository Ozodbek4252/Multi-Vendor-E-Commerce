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
use Illuminate\Http\RedirectResponse;
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
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
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

            // Upload and handle the product image
            $imagePath = $this->uploadImage($request, 'image', '/uploads/products/');

            Product::create([
                'thumb_image' => $imagePath,
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'vendor_id' => auth()->user()->vendor->id,
                'category_id' => $request->category_id,
                'sub_category_id' => $request->sub_category_id,
                'child_category_id' => $request->child_category_id,
                'brand_id' => $request->brand_id,
                'sku' => $request->sku,
                'price' => $request->price,
                'video_link' => $request->video_link,
                'offer_price' => $request->offer_price,
                'offer_start_date' => $request->offer_start_date,
                'offer_end_date' => $request->offer_end_date,
                'qty' => $request->qty,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'product_type' => $request->product_type,
                'status' => $request->status,
                'is_approved' => 1,
                'seo_title' => $request->seo_title,
                'seo_description' => $request->seo_description,
            ]);

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
