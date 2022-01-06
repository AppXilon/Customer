<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('User_Id')->unsigned();
            $table->foreign('User_Id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('T_Id')->nullable();
            $table->foreign('T_Id')->references('T_Id')->on('restaurant_table')->onDelete('cascade');
            $table->unsignedBigInteger('D_Id')->nullable();
            $table->foreign('D_Id')->references('D_Id')->on('delivery')->onDelete('cascade');
            $table->string('O_Name');
            $table->string('O_Street_1');
            $table->string('O_Postcode');
            $table->string('O_City');
            $table->string('O_State');
            $table->string('O_Email');
            $table->string('O_Phone');
            $table->string('O_Payment');
            $table->dateTime('Dine_Datetime')->nullable();
            $table->double('O_Total_Price');
            $table->string('O_Type')->nullable();
            $table->string('O_Status')->default('1');;
		    $table->string('Tracking_No');
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
        Schema::dropIfExists('order');
    }
}

