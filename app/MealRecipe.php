<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealRecipe extends Model
{
    //
    protected $fillable = [
        'name', 
        'accompaniment',
        'description', 
        'image',
        'meal_boxes_fk', 
        'time', 
        'servings'
    ];

     /**
     * Get the ingredients for the recipe.
     */
    public function ingredients()
    {
        return $this->hasMany('App\Ingredient', 'meal_recipe_id');
    }
}
