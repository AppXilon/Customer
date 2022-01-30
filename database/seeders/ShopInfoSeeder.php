<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('shop')->insert([[
            'Shop_Id'=> '1',
            'S_Category'=> 'Food and Beverage',
            'S_Name'=> 'Taf Bistro',
            'S_Image'=> '1642650758-.jpg',
            'S_Banner'=> '-.png',
            'S_Description'=> 'OFFER BEST DISH ANYTIME ANYWHERE',
            'Dine_In'=> '1',
            'Delivery'=> '1',
            'Pick_Up'=> '1',
        ],
       ]); 
    }
}