<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    //
    protected $fillable = [
        'name',
        'image',
    ];

    /**
     * Get the recipe that owns the ingredient.
     */

    public function meal_recipes()
    {
        // return $this->belongsToMany('App\MealRecipe', 'recipe_ingredients', 'recipe_fk', 'ingredient_fk');
        return $this->belongsToMany('App\MealRecipe', 'recipe_ingredients', 'recipe_fk', 'ingredient_fk');
    }
}
