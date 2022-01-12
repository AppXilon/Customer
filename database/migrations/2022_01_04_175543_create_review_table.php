<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->bigIncrements('Review_Id');
            $table->bigInteger('User_Id')->unsigned();
            $table->foreign('User_Id')->references('id')->on('users')->onDelete('cascade');
            // $table->bigInteger('Order_Id')->unsigned();
            // $table->foreign('Order_Id')->references('Order_Id')->on('order_product')->onDelete('cascade');
            $table->bigInteger('P_Id')->unsigned();
            $table->foreign('P_Id')->references('P_Id')->on('order_product')->onDelete('cascade');
            $table->integer('R_Rating');
            $table->string('R_Comment');
            $table->string('R_Image') ->nullable();
            $table->string('R_Sentiment') ->nullable();
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
        Schema::dropIfExists('review');
    }
}

