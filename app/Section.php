<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function batches(){
    	return $this->hasMany(Batch::class);
    }

    public function year(){
//    	return $this->belongsTo(Year::class);
    }

    public function semester(){
    	return $this->belongsTo(Semester::class);
    }

//    public function subjects(){
//    	return $this->belongsToMany( Subject::class, 'employee_subject');
//    }

	public static function getYearSectionName( $section_id ){

		$year_name = Section::find( $section_id )->semester()->first()->year()->first()->name;

		$section_name = Section::find( $section_id )->name;

		return $year_name . ' ' . $section_name;
	}
}
