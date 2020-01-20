<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_fk')->unsigned();
            $table->bigInteger('user_fk')->unsigned();
            $table->bigInteger('meal_box_fk')->unsigned();
            $table->integer('quantity');
            $table->timestamps();
        });

        Schema::table('order_details', function (Blueprint $table) {
            $table->foreign('order_fk')->references('id')->on('orders')->onUpdate('cascade');
            $table->foreign('user_fk')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('meal_box_fk')->references('id')->on('meal_boxes')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('order_details');
        Schema::enableForeignKeyConstraints();
    }
}
