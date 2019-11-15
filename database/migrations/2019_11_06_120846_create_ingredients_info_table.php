<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ingredient_fk')->unsigned();
            $table->bigInteger('recipe_fk')->unsigned();
            $table->timestamps();
        });

        Schema::table('ingredients_info', function(Blueprint $table) {
            $table->foreign('ingredient_fk')->references('id')->on('ingredients')->onDelete('restrict');
            $table->foreign('recipe_fk')->references('id')->on('meal_recipes')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients_info');
    }
}
