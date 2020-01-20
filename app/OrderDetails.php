<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    //
    protected $table = 'order_details';

    protected $fillable = [
        'order_fk',
        'user_fk',
        'meal_box_fk',
        'quantity'
    ];


    public function order()
    {
        return $this->hasMany('App\Order', 'id')->with('orderdetails');
    }

    public function mealBoxes()
    {
        return $this->hasMany('App\MealBox',  'id');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
