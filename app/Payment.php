<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    //
    protected $fillable = [
        'payment_gateway',
        'payment_method',
        'payment_status',
        'amount',
        'error'
    ];
}
