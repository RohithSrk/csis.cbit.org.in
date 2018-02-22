<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubQuestion extends Model
{
    public function mainQuestion(){
    	return $this->belongsTo(ExamQuestion::class);
    }
}
