<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeIngredients extends Model
{
    //
    protected $table = 'recipe_ingredients';

    protected $fillable = [
        'ingredient_fk',
        'recipe_fk',
    ];
    public $timestamps = false;
}
