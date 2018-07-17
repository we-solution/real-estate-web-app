<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','name_en','image'];

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function user() {
        return $this->belongsTo('App\\User', 'user_id');
    }

    public function products() {
        return $this->hasMany(Product::class);
    }
}
