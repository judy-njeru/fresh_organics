<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $fillable = [
        'id',
        'zip',
        'city',
    ];

    public function Users()
    {
        return $this->hasMany('App\Users');
    }
}
