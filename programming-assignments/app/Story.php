<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    public function tags(){
    	return $this->belongsToMany('App\Tag','story_tag');
    }

    public function location(){
    	return $this->belongsTo('App\Location');
    }
}
