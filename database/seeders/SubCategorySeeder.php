<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubCategory::create([
            'category_id' => Category::where('name', 'Bike')->first()->id,
            'name' => "Mountain bike",
            'slug' => "mountain-bike",
            'status' => 1,
        ]);
        SubCategory::create([
            'category_id' => Category::where('name', 'Bike')->first()->id,
            'name' => "Folding bicycle",
            'slug' => "folding-bicycle",
            'status' => 1,
        ]);
        SubCategory::create([
            'category_id' => Category::where('name', 'Bike')->first()->id,
            'name' => "Road bicycle",
            'slug' => "road-bicycle",
            'status' => 1,
        ]);

        SubCategory::create([
            'category_id' => Category::where('name', 'Stationery')->first()->id,
            'name' => "Paper",
            'slug' => "paper",
            'status' => 1,
        ]);
        SubCategory::create([
            'category_id' => Category::where('name', 'Stationery')->first()->id,
            'name' => "Highlighter",
            'slug' => "highlighter",
            'status' => 1,
        ]);
        SubCategory::create([
            'category_id' => Category::where('name', 'Stationery')->first()->id,
            'name' => "Notebook",
            'slug' => "notebook",
            'status' => 1,
        ]);
        SubCategory::create([
            'category_id' => Category::where('name', 'Stationery')->first()->id,
            'name' => "Pen",
            'slug' => "pen",
            'status' => 1,
        ]);

        SubCategory::create([
            'category_id' => Category::where('name', 'Sport')->first()->id,
            'name' => "Balls",
            'slug' => "balls",
            'status' => 1,
        ]);
        SubCategory::create([
            'category_id' => Category::where('name', 'Sport')->first()->id,
            'name' => "Skateboards",
            'slug' => "skateboards",
            'status' => 1,
        ]);
        SubCategory::create([
            'category_id' => Category::where('name', 'Sport')->first()->id,
            'name' => "Gym",
            'slug' => "gym",
            'status' => 1,
        ]);
        SubCategory::create([
            'category_id' => Category::where('name', 'Sport')->first()->id,
            'name' => "Footwear",
            'slug' => "footwear",
            'status' => 1,
        ]);

        SubCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'name' => "Coffee",
            'slug' => "coffee",
            'status' => 1,
        ]);
        SubCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'name' => "Juice",
            'slug' => "juice",
            'status' => 1,
        ]);
        SubCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'name' => "Tea",
            'slug' => "tea",
            'status' => 1,
        ]);
        SubCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'name' => "Soda",
            'slug' => "soda",
            'status' => 1,
        ]);
        SubCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'name' => "Milk",
            'slug' => "milk",
            'status' => 1,
        ]);
        SubCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'name' => "Water",
            'slug' => "water",
            'status' => 1,
        ]);
        SubCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'name' => "Cocktail",
            'slug' => "cocktail",
            'status' => 1,
        ]);
        SubCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'name' => "Lemonade",
            'slug' => "lemonade",
            'status' => 1,
        ]);
    }
}
