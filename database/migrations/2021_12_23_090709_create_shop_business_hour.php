<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateShopBusinessHour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_business_hour', function (Blueprint $table) {
            $table->bigInteger('Shop_Id')->unsigned();
            $table->foreign('Shop_Id')->references('Shop_Id')->on('shop')
            ->onDelete('cascade');
 $table->integer('Day_Id');
            $table->string('Day_Of_Week');
            $table->time('Start_Time');
            $table->time('End_Time');
            $table->string('Status')->nullable();
            $table->timestamps();
            $table->primary(['Shop_Id','Day_Id']);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_business_hour');
    }
}

