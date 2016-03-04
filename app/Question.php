<?php

namespace App;

use \Esensi\Model\Model;

class Question Extends Model
{
	protected $rules = [
    	'title' => ['required'],
    	'description' => ['required']
     
	];

}