<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	public function user(){
		return $this->belongsTo(User::class);
	}

    public function labMarks(){
    	return $this->hasMany(LabMark::class);
    }

    public function batch(){
    	return $this->belongsTo(Batch::class);
    }

	public function subjects(){
		return $this->belongsToMany(Subject::class);
	}

    public function getLabMarks( $subject_id, $date ){
	    return Student::join('lab_marks', 'lab_marks.student_id', '=', 'students.id')
	           ->join('lab_mark_types', 'lab_marks.mark_type_id', '=','lab_mark_types.id')
	           ->where('student_id', $this->id)->where('subject_id', $subject_id)
	           ->where('date', $date)->pluck('marks_scored', 'lab_mark_types.name')->toArray();
	}

	public function getAvgLabMarks( $subject_id ){
    	$lab_mark_types =  Subject::find($subject_id)->labMarkTypes()->pluck('name', 'id');

    	$avg = array();

    	foreach ($lab_mark_types as $lab_mark_type_id => $lab_mark_type_name ){
		   $avg[$lab_mark_type_name] = round(Student::find($this->id)->labMarks()->where('mark_type_id', $lab_mark_type_id)->avg('marks_scored'), 2);
	    }

	    $avg['Total'] = array_sum($avg);

		return $avg;
	}

	public function examMarks(){
		return $this->hasMany(ExamMark::class);
	}

	public function getSemester(){
		return $this->batch->section->semester;
	}

	public function getElectiveSubject( $elective_id ){
		$elective = Elective::find($elective_id);
		$subject_ids = $elective->subjects->pluck('id')->toArray();

		return $this->subjects->whereIn('id', $subject_ids)->first()->name;
	}
}
