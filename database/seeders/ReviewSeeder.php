<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('review')->insert([
            [
            'Review_Id'=> '1',
            'User_Id'=> '21',
            'P_Id'=> '16',
            'R_Rating'=> '4',
            'R_Comment'=> 'This is so delicious. I love it',
            'R_Sentiment'=> 'Positive',
            'created_at'=> '2021-01-01 05:20:55.000000',
            'updated_at'=> '2021-01-01 05:20:55.000000',
            ]
            
        ]);
        
    }
}
