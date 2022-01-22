<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaptchaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('captcha')->insert([[
            'Name'=>'Customer & Manager',
            'Status'=> '1',
            'Type'=> '0',
        ],
        [
            'Name'=>'Admin',
            'Status'=> '1',
            'Type'=> '1',
        ],]);
    }
}
