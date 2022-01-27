<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_logs', function (Blueprint $table) {
            $table->bigIncrements('PL_Id');
            $table->string('PL_Type')->nullable();
            $table->double('PL_Total_Price');
            $table->unsignedBigInteger('Cust_Id');
            $table->foreign('Cust_Id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('pay_logs');
    }
}
