<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = ['title','title_en','image','desc','desc_en'];

    public function user() {
        return $this->belongsTo('App\\User','user_id');
    }
}
