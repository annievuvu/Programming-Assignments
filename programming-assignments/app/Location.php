<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
   public function stories(){
    	return $this->hasMany('App\Story');
    }
}
