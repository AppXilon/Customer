<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('shop_category')->insert([[
            'S_Cat_Name'=> 'Food and Beverage',
            'S_Cat_Slug' => 'food and beverage'
        ],
        [
            'S_Cat_Name'=> 'OffShore',
            'S_Cat_Slug' => 'OffShore'
        ],
        [
            'S_Cat_Name'=> 'Chain Mart',
            'S_Cat_Slug' => 'Chain Mart'
        ]]);
    }
}
