<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_ingredients', function (Blueprint $table) {
            $table->bigInteger('ingredient_fk')->unsigned();
            $table->bigInteger('recipe_fk')->unsigned();
        });

        Schema::table('recipe_ingredients', function (Blueprint $table) {
            $table->foreign('ingredient_fk')->references('id')->on('ingredients')->onDelete('cascade');
            $table->foreign('recipe_fk')->references('id')->on('meal_recipes')->onDelete('cascade'); //test this
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
        Schema::dropIfExists('recipe_ingredients');
        Schema::enableForeignKeyConstraints();
    }
}
