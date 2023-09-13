<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'banner' => '/frontend/images/slider_1.jpg',
            'type' => 'New Arrivals',
            'title' => 'Men\'s Fashion',
            'starting_price' => '$99.00',
            'btn_url' => 'https://www.amazon.in/London-Hills-Solid-Sleeve-T-Shirt/dp/B07L58T74J?ref_=ast_sto_dp&th=1&psc=1',
            'serial' => 1,
            'status' => 1,
        ]);
        Slider::create([
            'banner' => '/frontend/images/slider_2.jpg',
            'type' => 'New Arrivals',
            'title' => 'Kid\'s Fashion',
            'starting_price' => '$49.00',
            'btn_url' => 'https://www.amazon.in/kids-fashion/b?ie=UTF8&node=9361420031',
            'serial' => 2,
            'status' => 1,
        ]);
        Slider::create([
            'banner' => '/frontend/images/slider_3.jpg',
            'type' => 'New Arrivals',
            'title' => 'Winter Collection',
            'starting_price' => '$99.00',
            'btn_url' => 'https://www.amazon.in/Boldfit-Winter-Clothing-Mufflers-Clothes/dp/B0BJZ5QYFV/ref=sr_1_1?keywords=winter+collection&qid=1694582089&s=apparel&sr=1-1',
            'serial' => 3,
            'status' => 1,
        ]);
        Slider::create([
            'banner' => '/frontend/images/slider_4.jpg',
            'type' => 'New Arrivals',
            'title' => 'Women\'s Fashion',
            'starting_price' => '$129.00',
            'btn_url' => 'https://www.amazon.in/SIRIL-Womens-Causal-Regular-397TK7222-S_Mehndi/dp/B0BVM3BHC8/ref=sr_1_5?crid=3K3PGPJ3XQNA8&keywords=women%2Bwear&qid=1694582108&s=apparel&sprefix=women%2Bwear%2Capparel%2C287&sr=1-5&th=1&psc=1',
            'serial' => 4,
            'status' => 1,
        ]);
        Slider::create([
            'banner' => '/frontend/images/slider_5.jpg',
            'type' => 'New Arrivals',
            'title' => 'Spring Collection',
            'starting_price' => '$119.00',
            'btn_url' => 'https://www.amazon.in/Campus-Sutra-Stylish-Dresses-SUSU22_CSWSSDR5108_S/dp/B09X1DBSYB/ref=sr_1_25?crid=1KBD23IUWTVJL&keywords=spring%2Bwear&qid=1694582124&s=apparel&sprefix=spring%2Bwear%2Capparel%2C253&sr=1-25&th=1&psc=1',
            'serial' => 5,
            'status' => 0,
        ]);
    }
}
