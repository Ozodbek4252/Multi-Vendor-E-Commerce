<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => "Bike",
            'slug' => "bike",
            'icon' => 'fas fa-bicycle',
            'status' => 1,
        ]);
        Category::create([
            'name' => "Stationery",
            'slug' => "stationery",
            'icon' => 'fas fa-book',
            'status' => 1,
        ]);
        Category::create([
            'name' => "Sport",
            'slug' => "sport",
            'icon' => 'fas fa-baseball-ball',
            'status' => 1,
        ]);
        Category::create([
            'name' => "Drinks",
            'slug' => "drinks",
            'icon' => 'fas fa-glass-martini-alt',
            'status' => 1,
        ]);
    }
}
