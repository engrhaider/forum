<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tag;
class TagsController extends Controller
{
    public function show(tag $tag){
    	$tagquestions = $tag->questions;
    	return view('forum.tagsquestion',compact('tagquestions'));
    }
}
