<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_table', function (Blueprint $table) {
            $table->bigIncrements('T_Id');
            $table->bigInteger('Shop_Id')->unsigned();
            $table->foreign('Shop_Id')->references('Shop_Id')->on('shop')
            ->onDelete('cascade');
            $table->integer('T_Pax');
            $table->string('T_Status');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant_table');
    }
}

