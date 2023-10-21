<?php

namespace Database\Seeders\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop Dell XPS 13',
            'slug' => 'laptop-dell-xps-13',
            'thumb_image' => '/uploads/products/Laptop_Dell_XPS_13.jpeg',
            'vendor_id' => 1,
            'category_id' => Category::where('name', 'Electronics')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Computers & Laptops')->first()->id,
            'child_category_id' => ChildCategory::where('name', 'Laptops')->first()->id,
            'brand_id' => Brand::where('name', 'Dell Inc.')->first()->id,
            'qty' => 50,
            'short_description' => 'Powerful and ultra-slim laptop for professionals.',
            'long_description' => 'The Dell XPS 13 is a top-of-the-line laptop with a sleek design and outstanding performance. It features a high-resolution display, powerful processor, and long battery life, making it an ideal choice for professionals and students.',
            'video_link' => 'https://www.example.com/dell-xps-13-video',
            'sku' => 'DXPS13500',
            'price' => 1499.99,
            'offer_price' => 1399.99,
            'offer_start_date' => '2023-10-01',
            'offer_end_date' => '2023-10-31',
            'product_type' => 'top_product',
            'status' => 1,
            'is_approved' => true,
            'seo_title' => 'Dell XPS 13 Laptop - Ultra-slim Performance',
            'seo_description' => 'The Dell XPS 13 is a powerful and ultra-slim laptop designed for professionals. Buy it now and enjoy high-performance computing on the go.',
        ]);

        Product::create([
            'name' => 'Apple iPhone 13 Pro',
            'slug' => 'apple-iphone-13-pro',
            'thumb_image' => '/uploads/products/Apple_iPhone13_Pro.jpg',
            'vendor_id' => 1,
            'category_id' => Category::where('name', 'Electronics')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Smartphones & Accessories')->first()->id,
            'child_category_id' => ChildCategory::where('name', 'Smartphones')->first()->id,
            'brand_id' => Brand::where('name', 'Apple Inc.')->first()->id,
            'qty' => 100,
            'short_description' => 'The latest iPhone with an amazing camera and performance.',
            'long_description' => 'The Apple iPhone 13 Pro is a flagship smartphone that offers a stunning camera system, a powerful A15 Bionic chip, and a beautiful Super Retina XDR display.',
            'video_link' => 'https://www.example.com/iphone-13-pro-video',
            'sku' => 'IP13PRO256',
            'price' => 1099.99,
            'offer_price' => 999.99,
            'offer_start_date' => '2023-09-15',
            'offer_end_date' => '2023-09-30',
            'product_type' => 'featured_product',
            'status' => 1,
            'is_approved' => true,
            'seo_title' => 'Apple iPhone 13 Pro - Pro Photography, Pro Performance',
            'seo_description' => 'Experience the power of the Apple iPhone 13 Pro with its stunning camera system and high-performance capabilities.'
        ]);

        Product::create([
            'name' => 'HP Pavilion x360',
            'slug' => 'hp-pavilion-x360',
            'thumb_image' => '/uploads/products/HP_Pavilion_x360.jpeg',
            'vendor_id' => 1,
            'category_id' => Category::where('name', 'Electronics')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Computers & Laptops')->first()->id,
            'child_category_id' => ChildCategory::where('name', 'Laptops')->first()->id,
            'brand_id' => Brand::where('name', 'HP Inc.')->first()->id,
            'qty' => 75,
            'short_description' => 'A versatile 2-in-1 laptop for productivity and entertainment.',
            'long_description' => 'The HP Pavilion x360 is a 2-in-1 laptop that can transform into a tablet. It\'s perfect for work, play, and creative projects, with a touchscreen display and long battery life.',
            'video_link' => 'https://www.example.com/hp-pavilion-x360-video',
            'sku' => 'HPX360512',
            'price' => 799.99,
            'offer_price' => 699.99,
            'offer_start_date' => '2023-09-20',
            'offer_end_date' => '2023-10-10',
            'product_type' => 'best_product',
            'status' => 1,
            'is_approved' => true,
            'seo_title' => 'HP Pavilion x360 - Versatile 2-in-1 Laptop for Work and Play',
            'seo_description' => 'Discover the flexibility of the HP Pavilion x360, a 2-in-1 laptop that adapts to your needs.'
        ]);


        Product::create([
            'name' => 'Mountain Bike - Premium Edition',
            'slug' => 'mountain-bike-premium',
            'thumb_image' => '/uploads/products/Reeb-Payson.png',
            'vendor_id' => 1, // Replace with the vendor's ID
            'category_id' => Category::where('name', 'Bike')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Mountain bike')->first()->id,
            'brand_id' => Brand::where('name', 'Specialized')->first()->id,
            'qty' => 50,
            'short_description' => 'High-quality mountain bike for adventurous riders.',
            'long_description' => 'This premium mountain bike is designed for off-road enthusiasts who seek the ultimate riding experience.',
            'video_link' => 'https://www.example.com/mountain-bike-premium',
            'sku' => 'MB1001',
            'price' => 1499.99,
            'offer_price' => 1299.99,
            'offer_start_date' => now(),
            'offer_end_date' => now()->addDays(30),
            'product_type' => 'new_arrival',
            'status' => 1,
            'is_approved' => 1,
            'seo_title' => 'Premium Mountain Bike',
            'seo_description' => 'Discover the best mountain biking experience with our premium mountain bike.',
        ]);

        Product::create([
            'name' => 'Classic Leather Shoes',
            'slug' => 'classic-leather-shoes',
            'thumb_image' => '/uploads/products/Bristol-3.jpg',
            'vendor_id' => 1, // Replace with the vendor's ID
            'category_id' => Category::where('name', 'Fashion')->first()->id,
            'sub_category_id' => SubCategory::where('name', 'Footwear')->first()->id,
            'child_category_id' => ChildCategory::where('name', 'Men\'s Shoes')->first()->id,
            'brand_id' => Brand::where('name', 'Vans')->first()->id,
            'qty' => 100,
            'short_description' => 'Timeless classic leather shoes for style and comfort.',
            'long_description' => 'These classic leather shoes from Vans offer both style and comfort, making them a must-have for your footwear collection.',
            'video_link' => 'https://www.example.com/classic-leather-shoes',
            'sku' => 'LS2001',
            'price' => 89.99,
            'offer_price' => 69.99,
            'offer_start_date' => now(),
            'offer_end_date' => now()->addDays(15),
            'product_type' => 'new_arrival',
            'status' => 1,
            'is_approved' => 1,
            'seo_title' => 'Classic Leather Shoes',
            'seo_description' => 'Step out in style with our classic leather shoes from Vans.'
        ]);
    }
}
