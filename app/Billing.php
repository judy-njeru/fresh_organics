<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    protected $table = 'billing';
    //
    protected $fillable = [
        'user_fk', 'payment_fk',  'billing_name', 'billing_email',  'billing_address', 'billing_city',
        'billing_province', 'billing_postalcode', 'billing_phone',  'billing_total'
    ];

    public function user()
    {
        return $this->belongsToOne('App\User');
    }
}
