<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_category')->insert([[
            'P_Cat_Id'=> '1',
            'P_Cat_Name' => 'Fried Rice'
        ],
        [
            'P_Cat_Id'=> '2',
            'P_Cat_Name'=> 'Western',
        ],
        [
            'P_Cat_Id'=> '3',
            'P_Cat_Name'=> 'Beverage',
        ]]);
    }
}