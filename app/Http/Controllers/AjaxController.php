<?php

namespace App\Http\Controllers;

use App\Batch;
use App\Employee;
use App\LabWeek;
use App\Section;
use App\Semester;
use App\Subject;
use App\LabMark;
use App\Student;
use App\Year;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getSectionBatches(Section $section){
    	return $section->batches()->get();
    }

    public function getSubjectSections(Subject $subject){
    	return $subject->assignedSections( auth()->user()->employee()->first()->id )->get();
    }

    public function getYearSections(Year $year){
	    return $year->sections()->get();
    }

	public function getLabWeekDate(Subject $subject, Batch $batch, LabWeek $labWeek){
		$date = LabMark::whereIn('student_id', Student::where('batch_id', $batch->id)->pluck('id') )
		               ->where('lab_week_id', $labWeek->id)
		               ->whereIn('mark_type_id', $subject->labMarkTypes()->pluck('id'))
		               ->pluck('date')->first();

		if( empty( $date) ){
			$date_formatted = '';
		} else {
			$date_formatted = Carbon::createFromFormat('Y-m-d', $date)->format('d/m/Y');
		}

		$date_arr = [ 'date' => $date_formatted ];

		return json_encode( $date_arr );
	}

	public function getStudentBatchId(Student $student){
		return json_encode( [ 'batch_id' => $student->batch_id  ]);
	}

	public function getSemesterSubjects(Semester $semester){
		return $semester->subjects()->get();
	}

	public function getSemesterTheorySubjects(Semester $semester){
		return $semester->subjects()->where('type', 'theory')->get();
	}

	public function getSubjectFaculty(Section $section, Subject $subject){
		return $subject->getAssignedFacultyNames($section->id);
	}

	public function getSemesterSections(Semester $semester){
		return $semester->sections()->get();
	}

	public function getFacultySubjects(Employee $employee){
    	return $employee->subjects()->get();
	}
}
