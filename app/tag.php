<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $fillable =[
    	'tag_name',
    ];

    public $timestamps = false;
    
    public function questions(){
    	return $this->belongsToMany('\App\question');
    }
}
