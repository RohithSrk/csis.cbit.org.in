<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamQuestion extends Model
{
    public function subQuestions(){
    	return $this->hasMany(SubQuestion::class );
    }
}
