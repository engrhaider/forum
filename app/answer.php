<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\answer;

class answer extends Model
{
	protected $fillable = [
	'description',
	'user_id',
	'question_id',
	];

	public function user(){
		return $this->belongsTo('\App\User');
	}
}
