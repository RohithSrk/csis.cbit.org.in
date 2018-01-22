<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//use App\Subject;

class LabMark extends Model
{
    public function student(){
    	return $this->belongsTo(Student::class);
    }

    public function markType(){
    	return $this->belongsTo( LabMarkType::class);
    }
}
