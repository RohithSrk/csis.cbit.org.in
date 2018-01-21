<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    public function sections(){
    	return $this->hasMany(Section::class);
    }

    public function semesters(){
    	return $this->hasMany( Semester::class );
    }

    public static function getAllYears(){
    	return Year::all()->pluck('name', 'id')->toArray();
    }

    public static function getSections( $year_id ){
	    return Year::find( $year_id )->sections()->pluck('name', 'id')->toArray();
    }

    public function department(){
    	return $this->belongsTo(Department::class);
    }
}
