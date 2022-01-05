<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('P_Id');
            $table->string('P_Name');
            $table->unsignedBigInteger('Cat_Id');
            $table->foreign('Cat_Id')->references('P_Cat_Id')->on('product_category')->onDelete('cascade');
            $table->unsignedBigInteger('P_Shop')->nullable();
            $table->foreign('P_Shop')->references('shop_id')->on('shop')->onDelete('cascade');
            $table->string('P_Duration');
            $table->string('S_Description');
            $table->string('L_Description', 500)->nullable();
            $table->double('P_Price');
            $table->double('P_Disc_Price')->nullable();
            $table->string('P_Image')->nullable();
            $table->integer('P_Status')->nullable();
            $table->integer('P_Quantity')->nullable();
            $table->string('P_Slug')->nullable();
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
        Schema::dropIfExists('product');
    }
}

