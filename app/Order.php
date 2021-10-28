<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //fillable
    protected $fillable = [
        'name',
        'town',
        'email',
        'phone',
        'bike_id'
    ];
}
