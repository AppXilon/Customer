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
        DB:: table('users')->insert ([[
            'id' => '1',
            'Name' => 'Nurul Lydia',
            'Email' => 'lydia@gmail.com',
            'Password' => Hash::make('lydia12345'),
            'occupation' => 'Student',
            'gender' => 'Female',
            'birthdate' => '1997-09-18',
            'race'=> 'Malay',
            'marital' => 'Single',
            'Street_1' => 'No 313, Blok Salak',
            'Postcode' => '31350',
            'City' => 'Serdang',
            'State' => 'Selangor',
            'Phone' => '013-3879380',

        ],
        [
            'id' => '2',
            'Name' => 'Lim Chong Heng',
            'Email' => 'chonghg89@gmail.com',
            'Password' => Hash::make('chong12345'),
            'occupation' => 'Auditor',
            'gender' => 'Female',
            'birthdate' => '1989-10-18',
            'race'=> 'Chinese',
            'marital' => 'Married',
            'Street_1' => 'KM 3, Jalan Kebun',
            'Postcode' => '43650',
            'City' => 'Kajang',
            'State' => 'Selangor',
            'Phone' => '014-3456777',
        ],
        [
            'id' => '3',
            'Name' => 'Avinesh A/L Veloo',
            'Email' => 'avi9@gmail.com',
            'Password' => Hash::make('luthfi12345'),
            'occupation' => 'Student',
            'gender' => 'Male',
            'birthdate' => '1999-01-27',
            'race'=> 'Indian',
            'marital' => 'Single',
            'Street_1' => '13, Taman Dahlia, Taman Universiti',
            'Postcode' => '40000',
            'City' => 'Kajang',
            'State' => 'Selangor',
            'Phone' => '018-3346769',
        ],

        ]);
    }
}
