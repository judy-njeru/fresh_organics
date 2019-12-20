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
     * Define relationship to the ingredient table.
     */
    public function ingredients()
    {
        return $this->hasMany('App\Ingredient');
    }

    public function mealBoxes()
    {
        return $this->belongsToMany('App\MealBoxes');
    }
}
