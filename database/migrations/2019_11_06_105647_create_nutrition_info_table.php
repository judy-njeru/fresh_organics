<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutritionInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutrition_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('meal_recipe_fk')->unsigned();
            $table->bigInteger('nutrition_fk')->unsigned();
            $table->string('amount');
            $table->timestamps();
        });

        Schema::table('nutrition_info', function(Blueprint $table) {
            $table->foreign('meal_recipe_fk')->references('id')->on('meal_recipes')->onDelete('restrict');
            $table->foreign('nutrition_fk')->references('id')->on('nutrition')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nutrition_info');
    }
}
