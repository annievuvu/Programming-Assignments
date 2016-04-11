<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story;
use App\Tag;
use App\Location;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class StoryController extends Controller
{
    public function index(){
   		$stories = Story::where('published',1)->get();
   		return view('stories',['stories'=>$stories]);
   	}
   	
   	public function tags(){
   		$tags = Tag::all();
   		return view('tags',['tags'=>$tags]);
   	}

   	public function create(){
   		$locations = Location::all();
   		return view('story.create',['locations'=>$locations]);

   	}

   	public function store(Request $request){


   		DB::table('stories')->insert([ //,
        	'location_id' => $request->location_id,
        	'title' => $request->title,
        	'story' => $request->story,
        	'published' => $request->published,
    	]);

        return redirect('/stories');

   	}
}
