<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngredientInfo extends Model
{

    protected $table = 'ingredients_info';

    //
    protected $fillable = [
        'ingredient_fk',
        'recipe_fk'
    ];
}
