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
            'R_Comment'=> '43300',
            'R_Sentiment'=> 'Selangor',
            'created_at'=> 'lydia@gmail.com',
            'updated_at'=> '0104031234',
            ]
            
        ]);
        
    }
}
