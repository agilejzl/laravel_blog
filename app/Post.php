<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->hasOne('App\User');
    }

    public function category(){
        return $this->hasOne('App\Category');
    }
}
