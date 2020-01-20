<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    protected $fillable = [
        'user_fk', 'billing_fk', 'order_total'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function billing()
    {
        return $this->belongsToOne('App\Billing');
    }

    public function orderdetails()
    {
        return $this->belongsTo('App\OrderDetails', 'id');
    }
}
