<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'content',
        'product_id',
    ];

    protected function product()
    {
        return $this->belongsTo('App\Product');
    }
}
