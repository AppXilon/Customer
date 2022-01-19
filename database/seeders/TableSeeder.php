<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurant_table')->insert(
            [
            'T_Id' => '1',
            'Shop_Id' => '1',
            'T_Pax' => '3',
            ],
            [
            'T_Id' => '2',
            'Shop_Id' => '1',
            'T_Pax' => '5',
            ]
        );
    }
}
