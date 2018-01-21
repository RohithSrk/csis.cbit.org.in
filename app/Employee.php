<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

	public function departments() {
		return $this->belongsToMany( Department::class );
	}

	public function subjects() {
		return $this->belongsToMany( Subject::class );
	}

	public function user() {
		return $this->hasOne( User::class );
	}

	public function getAssignedSubjectCodes() {
		return $this->subjects()->pluck( 'code' )->toArray();
	}

	public function firstDepartment(){
		return $this->departments()->first();
	}
}
