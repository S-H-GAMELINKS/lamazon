<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;
use Kyslik\ColumnSortable\Sortable;

class Product extends Model
{
    use CanBeFavorited, Sortable;

    public $sortable = [
        'price', 
        'updated_at'
    ];

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
