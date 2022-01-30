<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('order_product')->insert([[
            // 1
            'Order_Id'=> '1',
            'P_Id' => '1',
            'Order_Quantity'=> '1',
            'Order_Price' => '4.50',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-01-01 05:20:55.000000',
            'updated_at' => '2021-01-01 05:20:55.000000'
        ],
        [
            // 2
            'Order_Id'=> '2',
            'P_Id' => '2',
            'Order_Quantity'=> '1',
            'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-01-02 05:20:55.000000',
            'updated_at' => '2021-01-02 05:20:55.000000'
        ],
        [   
            // 3
            'Order_Id'=> '3',
            'P_Id' => '3',
            'Order_Quantity'=> '1',
            'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-01-03 05:20:55.000000',
            'updated_at' => '2021-01-03 05:20:55.000000'
        ],
        [
            // 4
            'Order_Id'=> '4',
            'P_Id' => '4',
            'Order_Quantity'=> '1',
            'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-02-01 05:20:55.000000',
            'updated_at' => '2021-02-01 05:20:55.000000'
        ],
        [
            'Order_Id'=> '5',
            'P_Id' => '5',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-02-02 05:20:55.000000',
            'updated_at' => '2021-02-02 05:20:55.000000'
        ],
        [
            'Order_Id'=> '6',
            'P_Id' => '6',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-02-03 05:20:55.000000',
            'updated_at' => '2021-02-03 05:20:55.000000'
        ],
        [
            'Order_Id'=> '7',
            'P_Id' => '7',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-03-01 05:20:55.000000',
            'updated_at' => '2021-03-01 05:20:55.000000'
        ],
        [
            'Order_Id'=> '8',
            'P_Id' => '8',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-03-02 05:20:55.000000',
            'updated_at' => '2021-03-02 05:20:55.000000'
        ],
        [
            'Order_Id'=> '9',
            'P_Id' => '8',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-03-03 05:20:55.000000',
            'updated_at' => '2021-03-03 05:20:55.000000'
        ],
        [
            'Order_Id'=> '10',
            'P_Id' => '9',
            'Order_Quantity'=> '1',
           'Order_Price' => '4.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-04-01 05:20:55.000000',
            'updated_at' => '2021-04-01 05:20:55.000000'
        ],
        [
            'Order_Id'=> '11',
            'P_Id' => '10',
            'Order_Quantity'=> '1',
           'Order_Price' => '3.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-04-02 05:20:55.000000',
            'updated_at' => '2021-04-02 05:20:55.000000'
        ],
        [
            'Order_Id'=> '12',
            'P_Id' => '11',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.50',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-04-03 05:20:55.000000',
            'updated_at' => '2021-04-03 05:20:55.000000'
        ],
        [
            'Order_Id'=> '13',
            'P_Id' => '12',
            'Order_Quantity'=> '1',
           'Order_Price' => '7.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-05-01 05:20:55.000000',
            'updated_at' => '2021-05-01 05:20:55.000000'
        ],
        [
            'Order_Id'=> '14',
            'P_Id' => '13',
            'Order_Quantity'=> '1',
           'Order_Price' => '4.50',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-05-02 05:20:55.000000',
            'updated_at' => '2021-05-02 05:20:55.000000'
        ],
        [
            'Order_Id'=> '15',
            'P_Id' => '14',
            'Order_Quantity'=> '1',
           'Order_Price' => '6.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-05-03 05:20:55.000000',
            'updated_at' => '2021-05-03 05:20:55.000000'
        ],
        [
            'Order_Id'=> '16',
            'P_Id' => '15',
            'Order_Quantity'=> '1',
           'Order_Price' => '6.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-06-01 05:20:55.000000',
            'updated_at' => '2021-06-01 05:20:55.000000'
        ],
        [
            'Order_Id'=> '17',
            'P_Id' => '1',
            'Order_Quantity'=> '1',
           'Order_Price' => '4.50',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-06-02 05:20:55.000000',
            'updated_at' => '2021-06-02 05:20:55.000000'
        ],
        [
            'Order_Id'=> '18',
            'P_Id' => '2',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-06-03 05:20:55.000000',
            'updated_at' => '2021-06-03 05:20:55.000000'
        ],
        [
            'Order_Id'=> '19',
            'P_Id' => '3',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-07-01 05:20:55.000000',
            'updated_at' => '2021-07-01 05:20:55.000000'
        ],
        [
            'Order_Id'=> '20',
            'P_Id' => '4',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-07-02 05:20:55.000000',
            'updated_at' => '2021-07-02 05:20:55.000000'
        ],
        [
            'Order_Id'=> '21',
            'P_Id' => '5',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-07-03 05:20:55.000000',
            'updated_at' => '2021-07-03 05:20:55.000000'
        ],
        [
            'Order_Id'=> '22',
            'P_Id' => '6',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-08-01 05:20:55.000000',
            'updated_at' => '2021-08-01 05:20:55.000000'
        ],
        [
            'Order_Id'=> '23',
            'P_Id' => '7',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-08-02 05:20:55.000000',
            'updated_at' => '2021-08-02 05:20:55.000000'
        ],
        [
            'Order_Id'=> '24',
            'P_Id' => '8',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-08-03 05:20:55.000000',
            'updated_at' => '2021-08-03 05:20:55.000000'
        ],
        [
            'Order_Id'=> '25',
            'P_Id' => '9',
            'Order_Quantity'=> '1',
           'Order_Price' => '4.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-09-01 05:20:55.000000',
            'updated_at' => '2021-09-01 05:20:55.000000'
        ],
        [
            'Order_Id'=> '26',
            'P_Id' => '10',
            'Order_Quantity'=> '1',
           'Order_Price' => '3.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-09-02 05:20:55.000000',
            'updated_at' => '2021-09-02 05:20:55.000000'
        ],
        [
            'Order_Id'=> '27',
            'P_Id' => '1',
            'Order_Quantity'=> '1',
           'Order_Price' => '4.50',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-09-03 05:20:55.000000',
            'updated_at' => '2021-09-03 05:20:55.000000'
        ],
        [
            'Order_Id'=> '28',
            'P_Id' => '2',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-10-01 05:20:55.000000',
            'updated_at' => '2021-10-01 05:20:55.000000'
        ],
        [
            'Order_Id'=> '29',
            'P_Id' => '3',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-10-02 05:20:55.000000',
            'updated_at' => '2021-10-02 05:20:55.000000'
        ],
        [
            'Order_Id'=> '30',
            'P_Id' => '4',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-10-03 05:20:55.000000',
            'updated_at' => '2021-10-03 05:20:55.000000'
        ],
        [
            'Order_Id'=> '31',
            'P_Id' => '5',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-11-01 05:20:55.000000',
            'updated_at' => '2021-11-01 05:20:55.000000'
        ],
        [
            'Order_Id'=> '32',
            'P_Id' => '6',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-11-02 05:20:55.000000',
            'updated_at' => '2021-11-02 05:20:55.000000'
        ],
        [
            'Order_Id'=> '33',
            'P_Id' => '7',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-11-03 05:20:55.000000',
            'updated_at' => '2021-11-03 05:20:55.000000'
        ],
        [
            'Order_Id'=> '34',
            'P_Id' => '8',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-12-01 05:20:55.000000',
            'updated_at' => '2021-12-01 05:20:55.000000'
        ],
        [
            'Order_Id'=> '35',
            'P_Id' => '9',
            'Order_Quantity'=> '1',
           'Order_Price' => '4.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-12-02 05:20:55.000000',
            'updated_at' => '2021-12-02 05:20:55.000000'
        ],
        [
            'Order_Id'=> '36',
            'P_Id' => '10',
            'Order_Quantity'=> '1',
           'Order_Price' => '3.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-12-03 05:20:55.000000',
            'updated_at' => '2021-12-03 05:20:55.000000'
        ],
        [
            'Order_Id'=> '37',
            'P_Id' => '1',
            'Order_Quantity'=> '1',
           'Order_Price' => '4.50',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-12-04 05:20:55.000000',
            'updated_at' => '2021-12-04 05:20:55.000000'
        ],
        [
            'Order_Id'=> '38',
            'P_Id' => '2',
            'Order_Quantity'=> '1',
           'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-12-05 05:20:55.000000',
            'updated_at' => '2021-12-05 05:20:55.000000'
        ],
        [
            'Order_Id'=> '39',
            'P_Id' => '3',
            'Order_Quantity'=> '1',
            'Order_Price' => '5.00',
            'rStatus'=> '0',
            'Od_Type' => 'dineIn',
            'created_at'=> '2021-02-06 05:20:55.000000',
            'updated_at' => '2021-02-06 05:20:55.000000'
        ]]);
    }
}
