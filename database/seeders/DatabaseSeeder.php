<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\ExpensesSeeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Data::factory(10)->create();
        $this->call(UsersSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(Product_CategorySeeder::class);
        $this->call(ShopCategorySeeder::class);
        $this->call(ShopInfoSeeder::class);
        $this->call(ManagerSeeder::class);
        $this->call(BusinessHourSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(TermSeeder::class);
        $this->call(CaptchaSeeder::class);
        $this->call(BizHourSeeder::class);
        $this->call(TableSeeder::class);
        $this->call(PaymentTypeSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderProductSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(ExpensesSeeder::class);
        $this->call(ReminderSeeder::class);

        $seed = new ExpensesSeeder();
        $seed->run();

    }
}
