<?php

namespace Database\Seeders\Product;

use App\Models\ProductVariant;
use Illuminate\Database\Seeder;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // For Laptop Dell XPS 13
        ProductVariant::create([
            'name' => 'Color',
            'product_id' => 1,
            'status' => true,
        ]);

        ProductVariant::create([
            'name' => 'Size',
            'product_id' => 1,
            'status' => true,
        ]);


        // For Apple iPhone 13 Pro
        ProductVariant::create([
            'name' => 'Color',
            'product_id' => 2,
            'status' => true,
        ]);

        ProductVariant::create([
            'name' => 'Size',
            'product_id' => 2,
            'status' => true,
        ]);


        // For HP Pavilion x360
        ProductVariant::create([
            'name' => 'Color',
            'product_id' => 3,
            'status' => true,
        ]);

        ProductVariant::create([
            'name' => 'Size',
            'product_id' => 3,
            'status' => true,
        ]);


        // For Mountain Bike - Premium Edition
        ProductVariant::create([
            'name' => 'Color',
            'product_id' => 4,
            'status' => true,
        ]);

        ProductVariant::create([
            'name' => 'Size',
            'product_id' => 4,
            'status' => true,
        ]);


        // For Classic Leather Shoes
        ProductVariant::create([
            'name' => 'Color',
            'product_id' => 5,
            'status' => true,
        ]);

        ProductVariant::create([
            'name' => 'Size',
            'product_id' => 5,
            'status' => true,
        ]);
    }
}
