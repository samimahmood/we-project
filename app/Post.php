<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }



}
