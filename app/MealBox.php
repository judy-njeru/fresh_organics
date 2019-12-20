<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealBox extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'price',
        'image'
    ];

    public function mealRecipes()
    {
        return $this->hasMany('App\MealRecipes');
    }
}
