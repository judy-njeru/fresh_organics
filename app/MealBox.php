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

    public function mealrecipes()
    {
        return $this->hasMany('App\MealRecipes');
    }

    public function orders()
    {
        return $this->hasMany('App\Orders');
    }

    // public function orderdetails()
    // {
    //     return $this->belongsToMany('App\OrderDetails');
    // }
}
