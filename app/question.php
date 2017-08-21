<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
  protected $fillable = [
  	'title',
  	'description',
  	'vote_count',
  	'user_id',
  ];
  public function tags(){
  	return $this->belongsToMany('\App\tag');
  }
  public function user(){
  	return $this->belongsTo('\App\User');
  }
  public function answers(){
  	return $this->hasMany('\App\answer');
  }
}
