<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_vote extends Model
{
	protected $fillable = [
		'user_id',
		'question_id',
		'answer_id',
	];
    protected $table = 'user_vote';
    public $timestamps = false;
}
