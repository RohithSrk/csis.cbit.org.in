<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Subject;
use App\LabWeek;
use App\LabMark;
use App\LabReMark;
use App\LabMarkType;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;

class AbsenteeLabMarksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index() {
		auth()->user()->authorizeRoles( [ 'Faculty' ] );

		$title     = "Add Absentee Lab Marks";
		$subjects  = auth()->user()->getAssignedLabSubjectsArray();
		$lab_weeks = LabWeek::pluck( 'label', 'id' )->toArray();
		$date      = date( 'd/m/Y' );

		if ( ! ( count( $subjects ) >= 1 ) ) {
			return view( 'layouts.add-absentee-lab-marks', compact( 'title' ) )->withErrors( [ 'message' => 'No courses assigned for you.' ] );
		}

		return view( 'layouts.add-absentee-lab-marks', compact( 'title', 'subjects',
			'lab_weeks', 'date' ) );
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function create() {
		auth()->user()->authorizeRoles( [ 'Faculty' ] );

		$this->validate( request(), [
			'date'    => 'required',
			'rollnum' => 'required',
			'subject' => 'required',
			'labweek' => 'required'
		] );

		$title = "Add Absentee Lab Marks";

		$date           = request( 'date' );
		$rollnum        = request( 'rollnum' );
		$subject_id     = request( 'subject' );
		$lab_week_id    = request( 'labweek' );
		$date_formatted = Carbon::createFromFormat( 'd/m/Y', $date )->format( 'Y-m-d' );

		$lab_weeks = LabWeek::pluck( 'label', 'id' )->toArray();

		$subjects = auth()->user()->getAssignedLabSubjectsArray();

		$mark_types = Subject::find( $subject_id )->labMarkTypes()->get()->toArray();

		$students = Student::where( 'rollnum', $rollnum )->get();

		$mark_type_names = Subject::find( 1 )->labMarkTypes()->pluck( 'name', 'id' )->toArray();

		$subject_name = Subject::find( $subject_id )->name;

		foreach ( $mark_type_names as $mark_type_id => $mark_type_name ) {

			if ( strtolower( $mark_type_name ) == 'attendance' ) {

				$absent = Student::where( 'rollnum', $rollnum )->first()->labMarks()
				                 ->where( 'mark_type_id', $mark_type_id )->where( 'date', $date_formatted )
				                 ->where( 'marks_scored', 0 )->count();

				if ( $absent != 0 ) {
					return view( 'layouts.add-absentee-lab-marks', compact( 'title', 'subjects',
						'subject_id', 'rollnum', 'date', 'date_formatted', 'mark_types', 'lab_weeks',
						'lab_week_id' ) )->withErrors( [
						'message' => "{$rollnum} was not absent on {$date_formatted} for {$subject_name}"
					] );
				}

			}
		}

		return view( 'layouts.add-absentee-lab-marks', compact( 'title', 'subjects',
			'subject_id', 'students', 'rollnum', 'date', 'date_formatted', 'mark_types', 'lab_weeks', 'lab_week_id' ) );
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store( Request $request ) {
		auth()->user()->authorizeRoles( [ 'Faculty' ] );

		$this->validate( request(), [
			'date'    => 'required',
			'rollnum' => 'required',
			'subject' => 'required',
			'labweek' => 'required',
			'marks'   => 'required'
		] );

		$title = "Add Absentee Lab Marks";

		$date           = $request->get( 'date' );
		$rollnum        = $request->get( 'rollnum' );
		$subject_id     = $request->get( 'subject' );
		$lab_week_id    = $request->get( 'labweek' );
		$marks          = $request->get( 'marks' );
		$date_formatted = Carbon::createFromFormat( 'd/m/Y', $date )->format( 'Y-m-d' );
		$mark_types     = Subject::find( $subject_id )->labMarkTypes()->get()->toArray();

		$lab_weeks = LabWeek::pluck( 'label', 'id' )->toArray();

		$subjects = auth()->user()->getAssignedLabSubjectsArray();

		foreach ( $marks as $roll_num => $mark_types ) {

			foreach ( $mark_types as $mark_type_name => $value ) {

				if ( $value != null ) {

					$student = Student::where( 'rollnum', $roll_num )->first();

					if ( $mark_type_name != 'remark' ) {
						$mark_types       = LabMarkType::where( 'name', $mark_type_name )->
						where( 'subject_id', $subject_id )->get()->first()->toArray();
						$lm               = LabMark::where( 'mark_type_id', $mark_types['id'] )->
						where( 'date', $date_formatted )->where( 'student_id', $student->id )->first();
						$lm->marks_scored = $value;

						if (  $lm->save()  ) {
							session()->flash( 'success', "Marks submitted successfully." );
						} else {
							App::abort( 500, 'Error' );
						}

					} else {
						$lr              = new LabRemark();
						$lr->student_id  = $student->id;
						$lr->subject_id  = $subject_id;
						$lr->description = $value;
						$lr->lab_week_id = $lab_week_id;
						$lr->date        = Carbon::now();

						if (  $lr->save()  ) {
							session()->flash( 'success', "Marks submitted successfully." );
						} else {
							App::abort( 500, 'Error' );
						}
					}

				}
			}
		}

		return view( 'layouts.add-absentee-lab-marks', compact( 'title', 'subjects',
			'subject_id', 'rollnum', 'date', 'date_formatted', 'mark_types', 'lab_weeks', 'lab_week_id' ) );
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
