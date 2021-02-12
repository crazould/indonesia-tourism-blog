<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    function article(){
        return $this->belongsTo(Article::class);
    }

}
