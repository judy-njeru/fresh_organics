<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeNutritions extends Model
{
    //
    protected $table = 'recipe_nutritions';

    protected $fillable = [
        'meal_recipe_fk',
        'nutrition_fk',
        'amount'
    ];
}
