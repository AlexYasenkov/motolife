<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //fillable
    protected $fillable = [
        'name',
        'email',
        'comment'
    ];
}
