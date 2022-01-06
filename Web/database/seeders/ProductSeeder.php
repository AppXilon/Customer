<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([[
            'P_Id'=> '1',
            'Cat_id'=> '1',
            'P_Name'=> 'Kampung Fried Rice',
            'P_Price'=> '5.00',
            'P_Disc_Price'=> '0',
            'S_Description'=> 'This sauteed Asian rice lunch is relatively mealy with a crispy texture.',
            'L_Description'=> 'This sauteed Asian rice lunch is relatively mealy with a crispy texture. It is similar to mangosteen with pumpkin spice and has a touch of marjoram. It smells like fish with a touch of pumpkin leaves. It is universal and aesthetic. You can really feel how high in iron and how high in nutrients it is.',
            'P_Duration'=> '10',
            'P_Image'=> '1639246967-.jpg',
            'P_Status'=> '1',
        ],
        [
            'P_Id'=> '2',
            'Cat_id'=> '2',
            'P_Name'=> 'French Fries',
            'P_Price'=> '5.00',
            'P_Disc_Price'=> '0',
            'S_Description'=> 'This sauteed Asian rice lunch is relatively mealy with a crispy texture.',
            'L_Description'=> 'This sauteed Asian rice lunch is relatively mealy with a crispy texture. It is similar to mangosteen with pumpkin spice and has a touch of marjoram. It smells like fish with a touch of pumpkin leaves. It is universal and aesthetic. You can really feel how high in iron and how high in nutrients it is.',
            'P_Duration'=> '10',
            'P_Image'=> '1639246967-.jpg',
            'P_Status'=> '1',
        ],
        [
            'P_Id'=> '3',
            'Cat_id'=> '3',
            'P_Name'=> 'Milo Ice',
            'P_Price'=> '5.00',
            'P_Disc_Price'=> '0',
            'S_Description'=> 'This sauteed Asian rice lunch is relatively mealy with a crispy texture.',
            'L_Description'=> 'This sauteed Asian rice lunch is relatively mealy with a crispy texture. It is similar to mangosteen with pumpkin spice and has a touch of marjoram. It smells like fish with a touch of pumpkin leaves. It is universal and aesthetic. You can really feel how high in iron and how high in nutrients it is.',
            'P_Duration'=> '10',
            'P_Image'=> '1639246967-.jpg',
            'P_Status'=> '1',
        ]
    ]);
    }
}