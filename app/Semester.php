<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    function year(){
    	return $this->belongsTo(Year::class );
    }

    function subjects(){
    	return $this->hasMany( Subject::class );
    }

    function sections(){
    	return $this->hasMany( Section::class );
    }
}
