<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batch;
use App\LabMark;
use App\Student;
use App\Subject;
use App\LabWeek;
use Carbon\Carbon;
use App\LabMarkType;


class LabMarksController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index() {
		auth()->user()->authorizeRoles( [ 'Faculty' ] );

		$title = "Add Lab Marks";

		$subjects = auth()->user()->getAssignedLabSubjectsArray();

		if ( ! ( count( $subjects ) >= 1 ) ) {
			return view( 'layouts.add-lab-marks', compact( 'title' ) )
				->withErrors( [ 'message' => 'No courses assigned for you.' ] );
		}

		$sections = auth()->user()->employee()->first()->subjects()->first()
		                  ->assignedSections( auth()->user()->employee()->first()->id )
		                  ->pluck( 'name', 'id' )->toArray();

		$batches = auth()->user()->employee()->first()->subjects()->first()
		                 ->assignedSections( auth()->user()->employee()->first()->id )
		                 ->first()->batches()->pluck( 'name', 'id' )->toArray();

		$lab_weeks = LabWeek::pluck( 'label', 'id' )->toArray();

		$date = date( 'd/m/Y' );

		return view( 'layouts.add-lab-marks', compact( 'title',
			'department', 'name', 'date', 'subjects', 'sections', 'batches', 'lab_weeks' ) );
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function create() {
		auth()->user()->authorizeRoles( [ 'Faculty' ] );

		$title = "Add Lab Marks";

		$this->validate( request(), [
			'date'     => 'required',
			'batch'    => 'required',
			'section'  => 'required',
			'subject'  => 'required',
			'lab_week' => 'required',
		] );

		$date        = request( 'date' );
		$batch_id    = request( 'batch' );
		$subject_id  = request( 'subject' );
		$lab_week_id = request( 'lab_week' );
		$section_id  = Batch::find( $batch_id )->section()->pluck( 'id' )->first();

		$students = Batch::find( $batch_id )->students()->get();

		$date_formatted = Carbon::createFromFormat( 'd/m/Y', $date )->format( 'Y-m-d' );

		$mark_types = Subject::find( $subject_id )->labMarkTypes()->get()->toArray();

		$subjects = auth()->user()->getAssignedLabSubjectsArray();

		$sections = Subject::find( $subject_id )
		                   ->assignedSections( auth()->user()->employee()->first()->id )
		                   ->pluck( 'name', 'id' )->toArray();

		$batches = Batch::find( $batch_id )->section()->first()->batches()->pluck( 'name', 'id' )->toArray();

		$lab_weeks = LabWeek::pluck( 'label', 'id' )->toArray();

		return view( 'layouts.add-lab-marks', compact( 'title', 'date', 'subjects', 'sections', 'batches',
			'subject_id', 'batch_id', 'section_id', 'students', 'mark_types', 'date_formatted', 'lab_weeks', 'lab_week_id' ) );
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
			'batch'   => 'required',
			'section' => 'required',
			'subject' => 'required',
			'marks'   => 'required',
			'labweek' => 'required',
		] );

		$title = "Add Lab Marks";

		$date        = $request->get( 'date' );
		$subject_id  = $request->get( 'subject' );
		$batch_id    = $request->get( 'batch' );
		$section_id  = $request->get( 'section' );
		$marks       = $request->get( 'marks', [] );
		$lab_week_id = $request->get( 'labweek' );
		$subjects    = auth()->user()->getAssignedLabSubjectsArray();
		$lab_weeks   = LabWeek::pluck( 'label', 'id' )->toArray();

		$sections = Subject::find( $subject_id )->assignedSections( auth()->user()->employee()->first()->id )
		                   ->pluck( 'name', 'id' )->toArray();

		$batches = Batch::find( $batch_id )->section()->first()->batches()->pluck( 'name', 'id' )->toArray();

		$date_formatted = Carbon::createFromFormat( 'd/m/Y', $date )->format( 'Y-m-d' );

		foreach ( $marks as $roll_num => $mark_types ) {

			foreach ( $mark_types as $mark_type_name => $marks_scored ) {

				if ( $marks_scored != null ) {

					$student = Student::where( 'rollnum', $roll_num )->first();

					$mark_type = LabMarkType::where( 'name', $mark_type_name )->
					where( 'subject_id', $subject_id )->get()->first()->toArray();

					$labMark = LabMark::where( 'mark_type_id', $mark_type['id'] )->
					where( 'date', $date_formatted )->where( 'student_id', $student->id )->first();

					if ( empty( $labMark ) ) {
						$labMark               = new LabMark();
						$labMark->mark_type_id = $mark_type['id'];
						$labMark->student_id   = $student->id;
						$labMark->date         = Carbon::createFromFormat( 'd/m/Y', $date );
						$labMark->lab_week_id  = $lab_week_id;
					}

					$labMark->marks_scored = $marks_scored;

					if ( $labMark->save() ) {
						session()->flash( 'success', "Marks submitted successfully." );
					} else {
						App::abort( 500, 'Error' );
					}
				}
			}
		}

		return view( 'layouts.add-lab-marks', compact( 'title', 'date_formatted',
			'department', 'subjects', 'name', 'date', 'section', 'batch', 'year', 'subject_id',
			'batch_id', 'section_id', 'sections', 'batches', 'lab_weeks', 'lab_week_id' ) );
	}

	public function indexLabMarks() {
		auth()->user()->authorizeRoles( [ 'Faculty' ] );

		$title      = "View Lab Marks";

		$subjects = auth()->user()->getAssignedLabSubjectsArray();

		if( ! (count( $subjects ) >= 1)){
			return view( 'layouts.view-lab-marks', compact('title') )->withErrors([ 'message' => 'No courses assigned for you.' ]);
		}

		$sections = auth()->user()->employee()->first()->subjects()->first()
		                  ->assignedSections( auth()->user()->employee()->first()->id )
		                  ->pluck( 'name', 'id' )->toArray();

		$batches = auth()->user()->employee()->first()->subjects()->first()
		                 ->assignedSections( auth()->user()->employee()->first()->id )
		                 ->first()->batches()->pluck( 'name', 'id' )->toArray();


		return view( 'layouts.view-lab-marks', compact( 'title',
			'department', 'name', 'date', 'subjects', 'sections', 'batches' ) );
	}

	public function viewLabMarks() {
		auth()->user()->authorizeRoles( [ 'Faculty' ] );

		$title = "View Lab Marks";

		$subject_id = request( 'subject' );
		$batch_id   = request( 'batch' );
		$section_id = request( 'section' );

		$mark_types = Subject::find( $subject_id )->labMarkTypes()->get()->toArray();

		$subjects = auth()->user()->getAssignedLabSubjectsArray();

		$batches = Batch::find( $batch_id )->section()->first()->batches()->pluck( 'name', 'id' )->toArray();

		$students = Batch::find( $batch_id )->students()->get();

		$sections = Subject::find( $subject_id )->assignedSections( auth()->user()->employee()->first()->id )
		                   ->pluck( 'name', 'id' )->toArray();

		return view( 'layouts.view-lab-marks', compact( 'title', 'subjects', 'sections', 'batches',
			'subject_id', 'batch_id', 'section_id', 'students', 'mark_types' ) );
	}

	public function studentIndexLabMarks(){
		auth()->user()->authorizeRoles( [ 'Student' ] );

		$title = "My Lab Marks";

		$subjects_arr = auth()->user()->student()->first()->batch()->first()->section()->first()->semester()->first()
		                  ->subjects()->where('type', 'practical')->get()->pluck('name', 'id')->toArray();

		return view( 'layouts.student-view-lab-marks', compact( 'title', 'subjects_arr') );
	}

	public function studentViewLabMarks(){
		auth()->user()->authorizeRoles( [ 'Student' ] );

		$this->validate( request(), [
			'subject'  => 'required|integer|min:1',
		] );

		$title = "My Lab Marks";
		$subject_id = request()->get( 'subject' );

        $subjects_arr = auth()->user()->student()->first()->batch()->first()->section()->first()->semester()->first()
            ->subjects()->where('type', 'practical')->get()->pluck('name', 'id')->toArray();

		$lab_mark_types = Subject::find( $subject_id )->labMarkTypes();
		$lab_mark_types_arr = $lab_mark_types->pluck('name', 'id')->toArray();

		$lab_marks = auth()->user()->student()->first()->labMarks()->with('markType')
		                   ->whereIn('mark_type_id', $lab_mark_types->pluck('id')->toArray())->get()->groupBy('date')->toArray();

        $lab_marks_data = [];

        foreach( $lab_marks as $date => $lab_mark ){

            $lab_mark_data = [];

            $lw_id = null;

            foreach( $lab_mark as $lm ){
                $lab_mark_data[ $lm[ 'mark_type' ]['id'] ] =  $lm[ 'marks_scored' ];
                $lw_id = $lm['lab_week_id'];
            }

            $lab_marks_data[LabWeek::find($lw_id)->label] =  [$date, $lab_mark_data];
        }

        return view( 'layouts.student-view-lab-marks', compact( 'title', 'lab_marks_data',
            'lab_mark_types_arr', 'subjects_arr', 'subject_id' ) );
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\LabMark  $labMark
     * @return \Illuminate\Http\Response
     */
    public function show(LabMark $labMark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LabMark  $labMark
     * @return \Illuminate\Http\Response
     */
    public function edit(LabMark $labMark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LabMark  $labMark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LabMark $labMark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LabMark  $labMark
     * @return \Illuminate\Http\Response
     */
    public function destroy(LabMark $labMark)
    {
        //
    }
}
