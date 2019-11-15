<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    //
    protected $fillable = [
        'name',
        'image',
        'recipe_id'
    ];

     /**
     * Get the recipe that owns the ingredient.
     */

    public function ingredients()
    {
        return $this->belongsToMany('App\Recipe', 'meal_recipe');
    }
}
