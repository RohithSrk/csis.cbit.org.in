<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	public function employees(){
		return $this->belongsToMany(Employee::class);
	}

	public function years(){
		return $this->hasMany(Year::class);
	}

	public function subjects(){
		return $this->hasMany( Subject::class);
	}
}
