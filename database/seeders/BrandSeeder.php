<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'logo' => '/uploads/brands/Specialized.jpeg',
            'name' => "Specialized",
            'slug' => 'specialized',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Category::create([
            'logo' => '/uploads/brands/Pinarello.png',
            'name' => "Pinarello",
            'slug' => 'pinarello',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Category::create([
            'logo' => '/uploads/brands/SCOTT.png',
            'name' => "SCOTT",
            'slug' => 'scott',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Category::create([
            'logo' => '/uploads/brands/Cervélo.png',
            'name' => "Cervélo",
            'slug' => 'cervélo',
            'is_featured' => 1,
            'status' => 1,
        ]);

        Category::create([
            'logo' => '/uploads/brands/Deli_logo.png',
            'name' => "Deli",
            'slug' => 'deli',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Category::create([
            'logo' => '/uploads/brands/cello.png',
            'name' => "Cello",
            'slug' => 'cello',
            'is_featured' => 1,
            'status' => 1,
        ]);

        Category::create([
            'logo' => '/uploads/brands/vans.jpeg',
            'name' => "Vans",
            'slug' => 'vans',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Category::create([
            'logo' => '/uploads/brands/adidas.jpeg',
            'name' => 'Adidas',
            'slug' => 'adidas',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Category::create([
            'logo' => '/uploads/brands/puma.jpeg',
            'name' => 'Puma',
            'slug' => 'puma',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Category::create([
            'logo' => '/uploads/brands/li-ning.png',
            'name' => 'Li-Ning',
            'slug' => 'li-ning',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Category::create([
            'logo' => '/uploads/brands/nike.png',
            'name' => 'Nike',
            'slug' => 'nike',
            'is_featured' => 1,
            'status' => 1,
        ]);

        Category::create([
            'logo' => '/uploads/brands/startbucks.png',
            'name' => 'Startbucks',
            'slug' => 'startbucks',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Category::create([
            'logo' => '/uploads/brands/dunkin-donuts-logo-1.jpg',
            'name' => "Dunkin'",
            'slug' => 'dunkin',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Category::create([
            'logo' => '/uploads/brands/coca-cola.png',
            'name' => 'Coca-Cola',
            'slug' => 'coca-cola',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Category::create([
            'logo' => '/uploads/brands/pepsi.png',
            'name' => 'Pepsi',
            'slug' => 'pepsi',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Category::create([
            'logo' => '/uploads/brands/vinut.jpg',
            'name' => 'Vinut',
            'slug' => 'vinut',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Category::create([
            'logo' => '/uploads/brands/ahmad-tea.png',
            'name' => 'Ahmad Tea',
            'slug' => 'ahmad-tea',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Category::create([
            'logo' => '/uploads/brands/lipton.jpeg',
            'name' => 'Lipton',
            'slug' => 'lipton',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Category::create([
            'logo' => '/uploads/brands/twinings.png',
            'name' => 'Twinings',
            'slug' => 'twinings',
            'is_featured' => 1,
            'status' => 1,
        ]);
        Category::create([
            'logo' => '/uploads/brands/nestle-pure-life.png',
            'name' => 'Nestle Pure Life',
            'slug' => 'nestle-pure-life',
            'is_featured' => 1,
            'status' => 1,
        ]);
    }
}
