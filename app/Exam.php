<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function questionPapers(){
    	return $this->hasMany( QuestionPaper::class);
    }
}
