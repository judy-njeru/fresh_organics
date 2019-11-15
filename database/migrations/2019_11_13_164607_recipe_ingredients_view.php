<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecipeIngredientsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement("
            CREATE VIEW recipe_ingredients
            AS
            SELECT 
                rc.id as recipe_id, ing.name as ingredient, description, ingr.image as ingredient_image 
            FROM 
                ingredients_info 
            INNER JOIN ingredients ing on ing.id = ingredients_info.ingredient_fk
            INNER JOIN ingredients ingr on ingr.id = ingredients_info.ingredient_fk
            INNER JOIN meal_recipes rc on rc.id = ingredients_info.recipe_fk
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::statement("DROP VIEW recipe_ingredients");
    }
}
