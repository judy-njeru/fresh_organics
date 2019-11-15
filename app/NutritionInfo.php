<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NutritionInfo extends Model
{
    //
    protected $table = 'nutrition_info';
    
    protected $fillable = [
        'meal_recipe_fk',
        'nutrition_fk',
        'amount'
    ];

}
