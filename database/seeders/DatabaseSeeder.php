<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\Product\ProductSeeder;
use Database\Seeders\Product\VariantSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AdminProfileSeeder::class,
            SliderSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
            ChildCategorySeeder::class,
            BrandSeeder::class,

            // product relared seeders
            ProductSeeder::class,
            VariantSeeder::class,

            // vendor related seeders
            VendorShopProfileSeeder::class,
        ]);
    }
}
