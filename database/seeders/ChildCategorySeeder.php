<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class ChildCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Coffee')->first()->id,
            'name' => "Cappuccino",
            'slug' => "cappuccino",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Coffee')->first()->id,
            'name' => "Latte",
            'slug' => "latte",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Coffee')->first()->id,
            'name' => "Mocha",
            'slug' => "mocha",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Coffee')->first()->id,
            'name' => "Americano",
            'slug' => "americano",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Coffee')->first()->id,
            'name' => "Turkish Coffee",
            'slug' => "turkish-coffee",
            'status' => 1,
        ]);

        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Juice')->first()->id,
            'name' => "Watermelon Juice",
            'slug' => "watermelon-juice",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Juice')->first()->id,
            'name' => "Apple Juice",
            'slug' => "apple-juice",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Juice')->first()->id,
            'name' => "Orange Juice",
            'slug' => "orange-juice",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Juice')->first()->id,
            'name' => "Kivi Juice",
            'slug' => "kivi-juice",
            'status' => 1,
        ]);

        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Tea')->first()->id,
            'name' => "Green Tea",
            'slug' => "green-tea",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Tea')->first()->id,
            'name' => "Black Tea",
            'slug' => "black-tea",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Tea')->first()->id,
            'name' => "Chai",
            'slug' => "chai-tea",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Tea')->first()->id,
            'name' => "Oolong Tea",
            'slug' => "oolong-tea",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Tea')->first()->id,
            'name' => "Peppermint Tea",
            'slug' => "peppermint-tea",
            'status' => 1,
        ]);

        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Soda')->first()->id,
            'name' => "Sprite",
            'slug' => "sprite",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Soda')->first()->id,
            'name' => "Coca-Cola",
            'slug' => "coca-cola",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Soda')->first()->id,
            'name' => "Fanta",
            'slug' => "fanta",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Soda')->first()->id,
            'name' => "Flash",
            'slug' => "flash",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Soda')->first()->id,
            'name' => "Pepsi",
            'slug' => "pepsi",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Soda')->first()->id,
            'name' => "Dr Pepper",
            'slug' => "dr-pepper",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Soda')->first()->id,
            'name' => "Mohito",
            'slug' => "mohito",
            'status' => 1,
        ]);

        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Milk')->first()->id,
            'name' => "Skim Milk",
            'slug' => "skim-milk",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Milk')->first()->id,
            'name' => "1% Milk",
            'slug' => "1%-milk",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Milk')->first()->id,
            'name' => "2% Milk",
            'slug' => "2%-milk",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Milk')->first()->id,
            'name' => "Whole Milk",
            'slug' => "whole-milk",
            'status' => 1,
        ]);

        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Water')->first()->id,
            'name' => "Still Water",
            'slug' => "still-water",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Water')->first()->id,
            'name' => "Sparkling Water",
            'slug' => "sparkling-water",
            'status' => 1,
        ]);

        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Lemonade')->first()->id,
            'name' => "Tropical",
            'slug' => "tropical",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Lemonade')->first()->id,
            'name' => "Classic",
            'slug' => "classic",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Lemonade')->first()->id,
            'name' => "Extract",
            'slug' => "extract",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Drinks')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Lemonade')->first()->id,
            'name' => "Blender",
            'slug' => "blender",
            'status' => 1,
        ]);


        ChildCategory::create([
            'category_id' => Category::where('name', 'Sport')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Skateboards')->first()->id,
            'name' => "Longboards",
            'slug' => "longboards",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Sport')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Skateboards')->first()->id,
            'name' => "Shortboards",
            'slug' => "shortboards",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Sport')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Skateboards')->first()->id,
            'name' => "E-boards",
            'slug' => "e-boards",
            'status' => 1,
        ]);

        ChildCategory::create([
            'category_id' => Category::where('name', 'Sport')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Balls')->first()->id,
            'name' => "Tennis Balls",
            'slug' => "tennis-balls",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Sport')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Balls')->first()->id,
            'name' => "Football Balls",
            'slug' => "football-balls",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Sport')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Balls')->first()->id,
            'name' => "Golf Balls",
            'slug' => "golf-balls",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Sport')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Balls')->first()->id,
            'name' => "Volleyball Balls",
            'slug' => "volleyball-balls",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Sport')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Balls')->first()->id,
            'name' => "Basketball Balls",
            'slug' => "basketball-balls",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Sport')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Balls')->first()->id,
            'name' => "Hockey Puck Balls",
            'slug' => "hockey-puck-balls",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Sport')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Balls')->first()->id,
            'name' => "Bowling Balls",
            'slug' => "bowling-balls",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Sport')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Balls')->first()->id,
            'name' => "Cricket Balls",
            'slug' => "cricket-balls",
            'status' => 1,
        ]);

        ChildCategory::create([
            'category_id' => Category::where('name', 'Stationery')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Pen')->first()->id,
            'name' => "Monoline",
            'slug' => "monoline",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Stationery')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Pen')->first()->id,
            'name' => "Pointed",
            'slug' => "pointed",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Stationery')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Pen')->first()->id,
            'name' => "Brush Pen",
            'slug' => "brush-pen",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Stationery')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Pen')->first()->id,
            'name' => "Board Edge Pen",
            'slug' => "board-edge-pen",
            'status' => 1,
        ]);
    }
}
