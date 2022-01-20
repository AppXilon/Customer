<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faq')->insert(
            [
            'Faq_id' => '1',
            'Faq_Category' => 'General',
            'Faq_Question' => 'What is AppXilon?',
            'Faq_Answer' => 'AppXilon is an online shopping platform based in Malaysia that gather many shops from various industry backgrounds.'
            ],

            [
                'Faq_id' => '2',
                'Faq_Category' => 'Order',
                'Faq_Question' => 'Can I cancel my order?',
                'Faq_Answer' => 'Once you have completed the payment for the order, you can not cancel the order.'
                ],
    
        );
    }
}