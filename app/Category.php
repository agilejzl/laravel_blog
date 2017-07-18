<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function user(){
        return $this->hasOne('App\User');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }
}
