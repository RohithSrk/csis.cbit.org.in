<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    public function section(){
    	return $this->belongsTo(Section::class);
    }

    public function students(){
    	return $this->hasMany( Student::class);
    }
}
