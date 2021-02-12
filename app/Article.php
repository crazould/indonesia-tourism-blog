<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    function user(){
        return $this->belongsTo(User::class);
    }

    function categories(){
        return $this->hasMany(Category::class);
    }
}
