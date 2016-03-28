<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story;
use App\Tag;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
}
