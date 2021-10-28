<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    public function bikes()
    {
        return $this->hasMany('App\Bike');
    }

    public function scopeBySlug(Builder $query, $slug)
    {
        return $query->where('slug', '=', $slug);
    }

}
