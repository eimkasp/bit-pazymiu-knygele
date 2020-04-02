<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    //
	protected $table = 'grades';


	public function lecture() {
		return $this->hasOne('App\Lecture', 'id' , 'lecture_id');
	}

	public function user() {
		return $this->hasOne('App\User', 'id', 'user_id');
	}

	public function student() {
		// aprasyti relationship
	}
}
