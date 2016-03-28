<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
   public function index(){
   		// $locations = Location::all();
   		// return view('locations',['locations'=>$locations]);
   		$locations = Location::with('stories')->get();
   		return view('locations',['locations'=>$locations]);
   }
}
