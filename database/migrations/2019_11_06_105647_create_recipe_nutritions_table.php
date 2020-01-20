<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeNutritionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_nutritions', function (Blueprint $table) {
            $table->bigInteger('meal_recipe_fk')->unsigned();
            $table->bigInteger('nutrition_fk')->unsigned();
            $table->string('amount');
            $table->timestamps();
        });

        Schema::table('recipe_nutritions', function (Blueprint $table) {
            $table->foreign('meal_recipe_fk')->references('id')->on('meal_recipes')->onDelete('cascade');
            $table->foreign('nutrition_fk')->references('id')->on('nutrition')->onDelete('cascade');
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
        Schema::dropIfExists('recipe_nutritions');
        Schema::enableForeignKeyConstraints();
    }
}
