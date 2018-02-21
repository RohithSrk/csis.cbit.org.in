<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionPaperPart extends Model
{
    public function questionPaper(){
    	return $this->belongsTo(QuestionPaper::class);
    }

	public function questions(){
		return $this->hasMany( ExamQuestion::class);
	}
}
