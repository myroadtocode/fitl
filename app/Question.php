<?php

namespace App;

use \Esensi\Model\Model;

class Question Extends Model
{
	protected $rules = [
    	'title' => ['required'],
    	'description' => ['required']
     
	];
// access comments using e.g $question->comments
	public function comments(){
        
		return $this->hasMany('App\Comment')->orderBy('created_at', 'desc');
	}

}