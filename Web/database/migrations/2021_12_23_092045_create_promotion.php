<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreatePromotion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion', function (Blueprint $table) {
            $table->bigIncrements('Promotion_Id');
            $table->string('Promo_Name');
            $table->string('Promo_Descr');
            $table->string('Promo_Status');
            $table->dateTime('Promo_Start');
            $table->dateTime('Promo_End');
            $table->bigInteger('Manager_id')->unsigned();
            $table->foreign('Manager_id')->references('Manager_id')->on('manager')->onDelete('cascade');
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
        Schema::dropIfExists('promotion');
    }
}

