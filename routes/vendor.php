<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\VendorProductController;
use App\Http\Controllers\Backend\VendorProductImageGalleryController;
use App\Http\Controllers\Backend\VendorProductVariantController;
use App\Http\Controllers\Backend\VendorProfileController;
use App\Http\Controllers\Backend\VendorShopProfileController;

/** Vendor Routes */

Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashboard');
Route::get('profile', [VendorProfileController::class, 'index'])->name('profile');
Route::put('profile', [VendorProfileController::class, 'updateProfile'])->name('profile.update');
Route::post('profile', [VendorProfileController::class, 'updatePassword'])->name('profile.update.password');

/** Vendor Shop Profile Routes */
Route::resource('shop-profile', VendorShopProfileController::class);

/** Product Routes */
Route::put('product/change-status', [VendorProductController::class, 'changeStatus'])->name('product.change-status');
Route::get('product/get-subcategories', [VendorProductController::class, 'getSubCategories'])->name('product.get-subcategories');
Route::get('product/get-child-categories', [VendorProductController::class, 'getChildCategories'])->name('product.get-child-categories');
Route::resource('products', VendorProductController::class);

/** Product Image Gallery Routes */
Route::resource('products-image-gallery', VendorProductImageGalleryController::class);

/** Product Variant Routes */
Route::put('products-variant/change-status', [VendorProductVariantController::class, 'changeStatus'])->name('products-variant.change-status');
Route::resource('products-variant', VendorProductVariantController::class);

/** Product Variant Item Routes */
// Route::put('products-variant-item-change-status', [ProductVariantItemController::class, 'changeStatus'])->name('products-variant-item.change-status');
// Route::get('/products-variant-item/{productId}/{variantId}', [ProductVariantItemController::class, 'index'])->name('products-variant-item.index');
// Route::get('/products-variant-item/create/{productId}/{variantId}', [ProductVariantItemController::class, 'create'])->name('products-variant-item.create');
// Route::post('/products-variant-item', [ProductVariantItemController::class, 'store'])->name('products-variant-item.store');
// Route::get('/products-variant-item-edit/{variantItemId}', [ProductVariantItemController::class, 'edit'])->name('products-variant-item.edit');
// Route::put('/products-variant-item-update/{variantItemId}', [ProductVariantItemController::class, 'update'])->name('products-variant-item.update');
// Route::delete('/products-variant-item/{variantItemId}', [ProductVariantItemController::class, 'destroy'])->name('products-variant-item.destroy');
