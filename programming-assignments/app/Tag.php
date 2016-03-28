<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public stories(){
    	return $this->belongsToMany('App\Story','story_tag')
    }
}
