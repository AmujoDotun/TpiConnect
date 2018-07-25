<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //accessing user data relation
    public function user(){
        return $this->belongsTo('App\User');
    }
}
