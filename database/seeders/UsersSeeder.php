<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('users')->insert ([
            'id' => '1',
            'Name' => 'nurul lydia',
            'Email' => 'lydia@gmail.com',
            'Password' => Hash::make('lydia12345'),
            'Street_1' => 'No 313, Blok Salak',
            'Postcode' => '31350',
            'City' => 'Serdang',
            'State' => 'Selangor',
            'Phone' => '013-3879380',

        ]

    );
    }
}
