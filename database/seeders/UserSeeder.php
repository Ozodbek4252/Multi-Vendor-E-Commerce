<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ozodbek',
            'username' => 'adminuser',
            // 'image' => '',
            'phone' => '+998944424252',
            'email' => 'ozodbek1111@gmail.com',
            'role' => 'admin',
            'status' => 'active',
            'password' => Hash::make('ozodbek1111')
        ]);

        User::create([
            'name' => 'Vendor',
            'username' => 'vendoruser',
            // 'image' => '',
            'phone' => '+998944424252',
            'email' => 'vendor@gmail.com',
            'role' => 'vendor',
            'status' => 'active',
            'password' => Hash::make('password')
        ]);
 
        User::create([
            'name' => 'User',
            'username' => 'user',
            // 'image' => '',
            'phone' => '+998944424252',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'status' => 'active',
            'password' => Hash::make('password')
        ]);
    }
}
