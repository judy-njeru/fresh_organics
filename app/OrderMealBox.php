<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderMealBox extends Model
{
    //
    protected $table = 'order_meal_boxes';
    protected $fillable = ['order_id', 'meal_id', 'quantity'];
}
  
