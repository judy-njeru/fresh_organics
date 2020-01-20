<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nutrition extends Model
{
    //
    protected $fillable = [
        'name'
    ];


    public function mealRecipe()
    {
        return $this->belongsToMany('App\MealRecipe', 'recipe_nutritions', 'meal_recipe_fk', 'nutrition_fk');
    }
}
