<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** Bicycle **/
        Brand::create([
            'logo' => '/uploads/brands/Specialized.jpeg',
            'name' => "Specialized", // Bicycle
            'slug' => 'specialized',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/Pinarello.png',
            'name' => "Pinarello", // Bicycle
            'slug' => 'pinarello',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/SCOTT.png',
            'name' => "SCOTT", // Bicycle
            'slug' => 'scott',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/Cervélo.png',
            'name' => "Cervélo", // Bicycle
            'slug' => 'cervélo',
            'is_featured' => 1,
            'status' => 1,
        ]);

        /** Stationery **/
        Brand::create([
            'logo' => '/uploads/brands/Deli_logo.png',
            'name' => "Deli", // Stationery
            'slug' => 'deli',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/cello.png',
            'name' => "Cello", // Stationery
            'slug' => 'cello',
            'is_featured' => 1,
            'status' => 1,
        ]);

        /** Fashion and Sport **/
        Brand::create([
            'logo' => '/uploads/brands/vans.jpeg',
            'name' => "Vans", // Fashion, Sport
            'slug' => 'vans',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/adidas.jpeg',
            'name' => 'Adidas', // Fashion, Sport
            'slug' => 'adidas',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/puma.jpeg',
            'name' => 'Puma', // Fashion, Sport
            'slug' => 'puma',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/li-ning.png',
            'name' => 'Li-Ning', // Fashion, Sport
            'slug' => 'li-ning',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/nike.png',
            'name' => 'Nike', // Fashion, Sport
            'slug' => 'nike',
            'is_featured' => 1,
            'status' => 1,
        ]);

        /** Drinks **/
        Brand::create([
            'logo' => '/uploads/brands/starbucks.png',
            'name' => 'Starbucks', // Drinks
            'slug' => 'starbucks',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/dunkin-donuts-logo-1.jpg',
            'name' => "Dunkin'", // Drinks
            'slug' => 'dunkin',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/coca-cola.png',
            'name' => 'Coca-Cola', // Drinks
            'slug' => 'coca-cola',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/pepsi.png',
            'name' => 'Pepsi', // Drinks
            'slug' => 'pepsi',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/vinut.jpg',
            'name' => 'Vinut', // Drinks
            'slug' => 'vinut',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/ahmad-tea.png',
            'name' => 'Ahmad Tea', // Drinks
            'slug' => 'ahmad-tea',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/lipton.jpeg',
            'name' => 'Lipton', // Drinks
            'slug' => 'lipton',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/twinings.png',
            'name' => 'Twinings', // Drinks
            'slug' => 'twinings',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/nestle-pure-life.png',
            'name' => 'Nestle Pure Life', // Drinks
            'slug' => 'nestle-pure-life',
            'is_featured' => 1,
            'status' => 1,
        ]);

        /** Electronics **/
        Brand::create([
            'logo' => '/uploads/brands/apple.png',
            'name' => 'Apple Inc.', // Electronics
            'slug' => 'apple-inc.',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/hp.png',
            'name' => 'HP Inc.', // Electronics
            'slug' => 'hp-inc.',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Brand::create([
            'logo' => '/uploads/brands/dell.png',
            'name' => 'Dell Inc.', // Electronics
            'slug' => 'dell-inc.',
            'is_featured' => 1,
            'status' => 1,
        ]);
    }
}
