<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\question;
use App\tag;
use App\question_tag;
use App\user_vote;

class QuestionsController extends Controller
{
    public function index(){
        $questions = question::latest()->paginate(7);
        return view('forum.index',compact('questions'));
    }
    public function create(){
    	return view('forum.createquestion');
    }
    public function store(Request $r){
    	$data = [
      'user_id' => \Auth::user()->id,
      'title' => $r->title,
      'description' => $r->description,
      'vote_count' => '0',
      ];

      $question = question::create($data);
      $qid = $question->id;

      $tags = explode(',',$r->tags);
      $tagsnotfound = [];
    
       // checking if tags doesn't exist insert it. if exist don't do it
      $tagsids =[];
      foreach($tags as $tag){
        $res = tag::where('tag_name',$tag)->get();
        if($res->first()){
            $tagsids[]=$res->first()->id;
        }
        else { 
           $tagsnotfound[] = $tag;
        }   
      }
      
      //populating tags and pivot_table (question_tag)
      foreach($tagsnotfound as $tag){
          $itag = tag::create([
            'tag_name' => $tag,
            ]);
          $tagsids[] = $itag->id;
      }

     // filling up the pivot table
      foreach($tagsids as $tagid){
          question_tag::create([
             'question_id' => $qid,
             'tag_id' => $tagid,
            ]);
      }
      return "Question posted succesfully!";
  }
  public function show(question $question){
     return view('forum.question',compact('question'));
  }

  public function voteIncrement(Request $r, question $question){

     $userid = \Auth::user()->id;
     $votestate = user_vote::where('user_id',$userid)->where('question_id',$question->id)->get();
     if($votestate->first()){
       echo "You already voted"; 
     }
     else {
       $question->vote_count+=1;
       $question->save();

       user_vote::create([
            'user_id' => $userid,
            'question_id' => $question->id,
            'answer_id' => 1,
        ]);
       return back();
     }
     
  }
}
