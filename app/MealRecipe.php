<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealRecipe extends Model
{
    //
    protected $table = 'meal_recipes';

    protected $fillable = [
        'name',
        'accompaniment',
        'description',
        'image',
        'meal_boxes_fk',
        'time',
    ];

    /**
     * Define relationship to the ingredient table.
     */
    public function ingredients()
    {
        // return $this->hasMany('App\Ingredient')->withPivot('recipe_ingredients', 'ingredient_fk', 'recipe_fk');
        return $this->belongsToMany('App\Ingredient', 'recipe_ingredients', 'recipe_fk', 'ingredient_fk');
    }

    public function mealBoxes()
    {
        return $this->belongsToMany('App\MealBox');
    }

    public function nutrition()
    {
        return $this->belongsToMany('App\Nutrition', 'recipe_nutritions', 'meal_recipe_fk', 'nutrition_fk')->withPivot('amount');
    }
}
