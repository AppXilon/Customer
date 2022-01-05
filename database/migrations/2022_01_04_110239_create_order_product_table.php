<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->bigIncrements('Order_Product_Id');
            $table->bigInteger('Order_Id')->unsigned();
            $table->foreign('Order_Id')->references('id')->on('order')->onDelete('cascade');
            $table->unsignedBigInteger('U_Id');
            $table->foreign('U_Id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('P_Id')->unsigned();
            $table->foreign('P_Id')->references('P_Id')->on('product')->onDelete('cascade');
            $table->bigInteger('Order_Quantity');
            $table->double('Order_Price');
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
        Schema::dropIfExists('order_product');
    }
}
