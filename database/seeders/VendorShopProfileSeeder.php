<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorShopProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'vendor@gmail.com')->first();

        $vendor = new Vendor();
        $vendor->shop_name = 'SwiftMart';
        $vendor->banner = '/uploads/vendors/vendor-shop-1.jpg';
        $vendor->phone = '998944424252';
        $vendor->email = $user->email;
        $vendor->address = 'Tashkent, Uzbekistan';
        $vendor->description = 'Welcome to SwiftMart, your trusted destination for premium products and exceptional service. With a curated selection of top-quality items, we strive to bring you the best in fashion, electronics, home goods, and more. Our mission is to provide a seamless shopping experience, from browsing our extensive catalog to swift and secure delivery to your doorstep. Discover convenience, quality, and style with SwiftMart, your go-to online shopping destination.';
        $vendor->user_id = $user->id;
        $vendor->save();
    }
}
