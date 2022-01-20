<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('admin')->insert (
            [
                'Admin_Id' => '1',
                'Name' => 'Admin',
                'Email' => 'admin@gmail.com',
                'Password' => Hash::make('12345678'),
                'Phone' => '013-3879380',
                // 'isBanned' => '0',
                'Street_1' => 'No 313, Blok Salak',
                'Postcode' => '31350',
                'City' => 'Serdang',
                'State' => 'Selangor',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                

            ]);

    }
}
