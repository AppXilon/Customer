<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateCreditCardInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_card_info', function (Blueprint $table) {
            $table->integer('cc_Number');
            $table->string('cc_Bank');
            $table->string('cc_Type');
            $table->bigInteger('User_Id')->unsigned();
            $table->timestamps();
            $table->primary(['cc_Number', 'User_Id']);
            $table->foreign('User_Id')->references('id')->on('users')
            ->onDelete('cascade');
            
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit_card_info');
    }
}

