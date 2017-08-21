<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\answer;

class AnswersController extends Controller
{
    public function store(Request $request, $id){
    	$answer = new answer();
    	$answer->description = $request->answer;
    	$answer->user_id = \Auth::user()->id;
    	$answer->question_id = $id;
    	$answer->vote_count = 0;
    	$answer->save();

    	return redirect('/question/'.$id);
    }
    public function edit(answer $answer){
    	return view('forum.answeredit',compact('answer'));
    }
    public function update(Request $r, answer $answer){
    	$answer->description = $r->description;
    	$answer->update();
    	return back();
    }
    public function destroy(answer $answer){
    	$answer->delete();
    	return back();
    }
}
