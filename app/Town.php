<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{

    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

    public function scopeByTown(Builder $query, $town)
    {
        return $query->where('slug', '=', $town);
    }

}
