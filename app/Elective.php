<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elective extends Model
{
	public function subjects(){
		return $this->belongsToMany(Subject::class);
	}

	public function semester(){
		return $this->belongsTo(Semester::class);
	}
}
