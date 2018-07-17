<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','title_en','images','desc','desc_en','price','phones','latitude','longitude','cat_id'];

    public function user() {
        return $this->belongsTo('App\\User');
    }

    public function category()
    {
        return $this->belongsTo('App\\Category');
    }

    protected $casts = [
        'images' => 'array',
        'phones' => 'array',
    ];
}
