<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product_category')->insert([[
            'P_Cat_Id'=> '1',
            'P_Cat_Name' => 'Nasi Goreng'
        ],
        [
            'P_Cat_Id'=> '2',
            'P_Cat_Name'=> 'Western',
        ],
        [
            'P_Cat_Id'=> '3',
            'P_Cat_Name'=> 'Mee / Kuey Teow / Bihun',
        ],
        [
            'P_Cat_Id'=> '4',
            'P_Cat_Name'=> 'Minuman',
        ],
    ]);
    }
}
