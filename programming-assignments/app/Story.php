<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    public function tagss(){
    	return $this->hasMany('App\Tag');
    }
}
