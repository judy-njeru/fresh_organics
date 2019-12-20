<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('accompaniment');
            $table->text('description');
            $table->string('image');
            $table->bigInteger('meal_boxes_fk')->unsigned();
            $table->string('time');
            $table->string('servings');
            $table->timestamps();
        });

        Schema::table('meal_recipes', function (Blueprint $table) {
            $table->foreign('meal_boxes_fk')->references('id')->on('meal_boxes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_recipes');
    }
}
