<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function scopeByBrand(Builder $query, $brand)
    {
        return $query->where('brand_id', '=', $brand);
    }

    public function scopeBySlug(Builder $query, $slug)
    {
        return $query->where('slug', '=', $slug);
    }

}
