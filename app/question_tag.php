<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question_tag extends Model
{
    protected $fillable =[
    	'question_id',
    	'tag_id',
    ];

    protected $table = 'question_tag';
    public $timestamps = false;
}
