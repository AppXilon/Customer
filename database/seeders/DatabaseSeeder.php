<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersSeeder::class);
        $this->call(Product_CategorySeeder::class);
        $this->call(ShopCategorySeeder::class);
        $this->call(ShopInfoSeeder::class);
        $this->call(BusinessHourSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(TermSeeder::class);
        $this->call(CaptchaSeeder::class);
        $this->call(BizHourSeeder::class);
    }
}
