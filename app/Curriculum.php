<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    public function year(){
    	return $this->belongsTo( Year::class);
    }
}
