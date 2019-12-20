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
        return $this->belongsToMany('App\MealRecipe', 'meal_recipes_ingredients');
    }
}
