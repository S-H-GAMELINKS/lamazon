<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;

class Product extends Model
{
    use CanBeFavorited;

    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id'
    ];

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
