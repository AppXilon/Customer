<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReminderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('notifications')->insert ([
            [
                'id' => '1',
                'status' => '0',
                'subject' => 'AppXilon- Booking Reminder',
                'data' => 'You have made a booking on TAF Bistro.',
                'footer' => 'Thank You For Ordering With AppXilon',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            ]
        );
        //
    }
}
