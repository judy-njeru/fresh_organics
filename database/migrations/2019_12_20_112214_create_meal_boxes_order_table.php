<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealBoxesOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_boxes_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_fk')->unsigned();
            $table->bigInteger('meal_box_fk')->unsigned();
            $table->bigInteger('quantity');
            $table->timestamps();
        });

        Schema::table('meal_boxes_order', function (Blueprint $table) {
            $table->foreign('order_fk')->references('id')->on('orders')->onUpdate('cascade');
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
        Schema::dropIfExists('meal_boxes_order');
        Schema::enableForeignKeyConstraints();
    }
}
