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


        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Men\'s Clothing')->first()->id,
            'name' => "T-Shirts",
            'slug' => "t-shirts",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Men\'s Clothing')->first()->id,
            'name' => "T-Shirts",
            'slug' => "t-shirts",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Men\'s Clothing')->first()->id,
            'name' => "Shirts",
            'slug' => "shirts",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Men\'s Clothing')->first()->id,
            'name' => "Jeans",
            'slug' => "jeans",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Men\'s Clothing')->first()->id,
            'name' => "Jackets",
            'slug' => "jackets",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Men\'s Clothing')->first()->id,
            'name' => "Suits",
            'slug' => "suits",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Men\'s Clothing')->first()->id,
            'name' => "Activewear",
            'slug' => "activewear",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Women\'s Clothing')->first()->id,
            'name' => "Dresses",
            'slug' => "dresses",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Women\'s Clothing')->first()->id,
            'name' => "Tops",
            'slug' => "tops",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Women\'s Clothing')->first()->id,
            'name' => "Skirts",
            'slug' => "skirts",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Women\'s Clothing')->first()->id,
            'name' => "Pants",
            'slug' => "pants",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Women\'s Clothing')->first()->id,
            'name' => "Outerwear",
            'slug' => "outerwear",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Women\'s Clothing')->first()->id,
            'name' => "Lingerie",
            'slug' => "lingerie",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Kids\' Clothing')->first()->id,
            'name' => "Boys' Apparel",
            'slug' => "boys'-apparel",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Kids\' Clothing')->first()->id,
            'name' => "Girls' Apparel",
            'slug' => "girls'-apparel",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Kids\' Clothing')->first()->id,
            'name' => "Baby Clothing",
            'slug' => "baby-clothing",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Footwear')->first()->id,
            'name' => "Men's Shoes",
            'slug' => "men's-shoes",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Footwear')->first()->id,
            'name' => "Women's Shoes",
            'slug' => "women's-shoes",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Footwear')->first()->id,
            'name' => "Kids' Shoes",
            'slug' => "kids'-shoes",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Footwear')->first()->id,
            'name' => "Sneakers",
            'slug' => "sneakers",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Footwear')->first()->id,
            'name' => "Boots",
            'slug' => "boots",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Accessories')->first()->id,
            'name' => "Bags & Purses",
            'slug' => "bags-&-purses",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Accessories')->first()->id,
            'name' => "Watches",
            'slug' => "watches",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Accessories')->first()->id,
            'name' => "Jewelry",
            'slug' => "jewelry",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Accessories')->first()->id,
            'name' => "Sunglasses",
            'slug' => "sunglasses",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Accessories')->first()->id,
            'name' => "Hats",
            'slug' => "hats",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Beauty & Cosmetics')->first()->id,
            'name' => "Makeup",
            'slug' => "makeup",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Beauty & Cosmetics')->first()->id,
            'name' => "Skincare",
            'slug' => "skincare",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Beauty & Cosmetics')->first()->id,
            'name' => "Fragrances",
            'slug' => "fragrances",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Beauty & Cosmetics')->first()->id,
            'name' => "Haircare",
            'slug' => "haircare",
            'status' => 1,
        ]);

        ChildCategory::create([
            'category_id' => Category::where('name', 'Electronics')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Smartphones & Accessories')->first()->id,
            'name' => "Smartphones",
            'slug' => "smartphones",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Electronics')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Smartphones & Accessories')->first()->id,
            'name' => "Phone Cases",
            'slug' => "phone-cases",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Electronics')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Smartphones & Accessories')->first()->id,
            'name' => "Chargers & Cables",
            'slug' => "chargers-&-cables",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Electronics')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Smartphones & Accessories')->first()->id,
            'name' => "Screen Protectors",
            'slug' => "screen-protectors",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Electronics')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Computers & Laptops')->first()->id,
            'name' => "Laptops",
            'slug' => "laptops",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Electronics')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Computers & Laptops')->first()->id,
            'name' => "Desktop Computers",
            'slug' => "desktop-computers",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Electronics')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Computers & Laptops')->first()->id,
            'name' => "Computer Accessories",
            'slug' => "computer-accessories",
            'status' => 1,
        ]);
        ChildCategory::create([
            'category_id' => Category::where('name', 'Electronics')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Computers & Laptops')->first()->id,
            'name' => "Printers & Scanners",
            'slug' => "printers-&-scanners",
            'status' => 1,
        ]);
    }
}
