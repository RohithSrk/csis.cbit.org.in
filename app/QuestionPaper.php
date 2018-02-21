<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionPaper extends Model
{
    public function exam(){
    	return $this->belongsTo( Exam::class);
    }

    public function subject(){
    	return $this->belongsTo( Subject::class);
    }

    public function questionPaperParts(){
    	return $this->hasMany( QuestionPaperPart::class);
    }

    public function questions(){
    	return $this->hasMany( ExamQuestion::class);
    }
}
