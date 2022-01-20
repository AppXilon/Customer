<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('manager')->insert ([
            [
                'Manager_Id' => '1',
                'Shop_Id' => '1',
                'Name' => 'Abu',
                'Email' => 'managerAbu@gmail.com',
                'Password' => Hash::make('12345678'),
                'Phone' => '013-3879380',
                'isBanned' => '0',
                'Ban' => '0',
                'Reason' => 'unactive',
                'Street_1' => 'No 313, Blok Salak',
                'Postcode' => '31350',
                'City' => 'Serdang',
                'State' => 'Selangor',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                

            ],

            [
                'Manager_id' => '2',
                'Shop_Id' => '1',
                'Name' => 'ali',
                'Email' => 'managerAli@gmail.com',
                'Password' => Hash::make('12345678'),
                'Phone' => '013-3879380',
                'isBanned' => '0',
                'Ban' => '0',
                'Reason' => 'unactive',
                'Street_1' => 'No 313, Blok Salak',
                'Postcode' => '31350',
                'City' => 'Serdang',
                'State' => 'Selangor',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                

            ],
            
            [
                'Manager_id' => '3',
                'Shop_Id' => '1',
                'Name' => 'Hazimah',
                'Email' => 'managerHazimah@gmail.com',
                'Password' => Hash::make('12345678'),
                'Phone' => '013-3879380',
                'isBanned' => '0',
                'Ban' => '0',
                'Reason' => 'unactive',
                'Street_1' => 'No 313, Blok Salak',
                'Postcode' => '31350',
                'City' => 'Serdang',
                'State' => 'Selangor',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                

            ],

    ]);
    }
}
