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
    public function index()
    {

	    $title      = "Add Lab Marks";

//	    auth()->user()->authorizeRoles(['Faculty', 'HOD', 'Principal']);


	    $subjects = auth()->user()->getAssignedLabSubjectsArray();


	    if( ! (count( $subjects ) >= 1)){
		    return view( 'layouts.add-lab-marks', compact('title') )->withErrors([ 'message' => 'No courses assigned for you.' ]);
	    }

	    $sections = auth()->user()->employee()->first()->subjects()->first()
	                      ->assignedSections( auth()->user()->employee()->first()->id )->pluck('name', 'id')->toArray();

	    $batches  = auth()->user()->employee()->first()->subjects()->first()
	                      ->assignedSections( auth()->user()->employee()->first()->id )
	                      ->first()->batches()->pluck( 'name', 'id' )->toArray();

	    $lab_weeks = LabWeek::pluck('label', 'id')->toArray();

//	    $sections = auth()->user()->employee()->first()->subjects()->first()->curriculum()->first()->year()->first()
//	                              ->sections()->pluck( 'name', 'id' )->toArray();

//
//	    $batches  = auth()->user()->employee()->first()->subjects()->first()->curriculum()->first()->year()->first()
//	                                ->sections()->first()->batches()->pluck( 'name', 'id' )->toArray();


//		dd($subjects, $sections, $batches);

	    //		auth()->user()->isBelongsToMultipleDeps()

	    // if belongs to multiple deps
	    //display dep selection

	    $date = date( 'd/m/Y' );

//	    session()->flash('success', 'Successfully done the operation.');

	    return view( 'layouts.add-lab-marks', compact( 'title',
		    'department', 'name', 'date', 'subjects', 'sections', 'batches', 'lab_weeks' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function create() {

//		auth()->user()->authorizeRoles(['Faculty', 'HOD', 'Principal']);

		// if req has dep, use it
//		dd(request()->all());

		$title      = "Add Lab Marks";

		$this->validate(request(), [
			'date' => 'required',
		]);

		$date       = request( 'date' );
		$batch_id = request( 'batch' );
		$section_id = Batch::find($batch_id)->section()->pluck('id')->first();
		$subject_id = request( 'subject' );
		$lab_week_id = request( 'lab_week' );

		$students = Batch::find($batch_id)->students()->get();

		$date_formatted = Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');

		$mark_types = Subject::find( $subject_id )->labMarkTypes()->get()->toArray();

		$subjects = auth()->user()->getAssignedLabSubjectsArray();


//		$sections = Subject::find($subject_id)->curriculum()->first()->year()->first()
//		                  ->sections()->pluck( 'name', 'id' )->toArray();
//
//		$batches  = Batch::find($batch_id)->section()->first()->batches()->pluck( 'name', 'id' )->toArray();

		$sections = Subject::find($subject_id)->assignedSections( auth()->user()->employee()->first()->id )->pluck('name', 'id')->toArray();

		$batches  = Batch::find($batch_id)->section()->first()->batches()->pluck( 'name', 'id' )->toArray();

		$lab_weeks = LabWeek::pluck('label', 'id')->toArray();


//		Student::join('lab_marks', 'lab_marks.student_id', '=', 'students.id')
//		       ->join('lab_mark_types', 'lab_marks.mark_type_id', '=','lab_mark_types.id')
//		       ->where('student_id', 1)->where('subject_id', 1)
//		       ->where('date', "2019-03-12")->get()->toArray();
//
//		Student::find( 1 )->labMarks()->where( 'date', '2019-03-12' )->with( [
//			'markType' => function ( $query ) {
//				$query->where( 'subject_id', 1 );
//			}
//		] )->get();



//		$batch   = request( 'student_batch' );
//		$section = request( 'student_section' );
//		$year    = request( 'student_year' );

//		$students = Student::where( 'batch', $batch )
//		                   ->where( 'year', $year )
//		                   ->where( 'section', $section )
//		                   ->get()->toArray();



		return view( 'layouts.add-lab-marks', compact( 'title', 'date', 'subjects', 'sections', 'batches',
			'subject_id', 'batch_id', 'section_id', 'students', 'mark_types', 'date_formatted', 'lab_weeks', 'lab_week_id' ) );
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    auth()->user()->authorizeRoles(['Faculty', 'HOD', 'Principal']);

//	    dd($request->all());

	    $title      = "Add Lab Marks";

	    $date        = $request->get( 'date' );
	    $subject_id  = $request->get( 'subject' );
	    $batch_id    = $request->get( 'batch' );
	    $section_id  = $request->get( 'section' );
	    $subjects    = auth()->user()->getAssignedLabSubjectsArray();
	    $marks       = $request->get( 'marks', [] );
	    $lab_week_id = $request->get( 'labweek' );


//	    $sections = Subject::find($subject_id)->curriculum()->first()->year()->first()
//	                       ->sections()->pluck( 'name', 'id' )->toArray();
//	    $batches  = Batch::find($batch_id)->section()->first()->batches()->pluck( 'name', 'id' )->toArray();

	    $sections = Subject::find($subject_id)->assignedSections( auth()->user()->employee()->first()->id )->pluck('name', 'id')->toArray();

	    $batches  = Batch::find($batch_id)->section()->first()->batches()->pluck( 'name', 'id' )->toArray();



	    $date_formatted = Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');

	    foreach ( $marks as $roll_num => $mark_types ) {

		    foreach ( $mark_types as $mark_type_name => $marks_scored ) {
			    if ( $marks_scored != null ) {

				    $student = Student::where( 'rollnum', $roll_num )->first();

				    $mark_type = LabMarkType::where( 'name', $mark_type_name )->
				    where( 'subject_id', $subject_id )->get()->first()->toArray();

				    $lm = LabMark::where( 'mark_type_id', $mark_type['id'] )->
				    where( 'date', $date_formatted )->where( 'student_id', $student->id )->first();

				    if ( empty( $lm ) ) {
					    $labMark               = new LabMark();
					    $labMark->mark_type_id = $mark_type['id'];
					    $labMark->student_id   = $student->id;
					    $labMark->marks_scored = $marks_scored;
					    $labMark->date         = Carbon::createFromFormat( 'd/m/Y', $date );
					    $labMark->lab_week_id  = $lab_week_id;
					    $labMark->save();
				    } else {
					    $lm->marks_scored = $marks_scored;
					    $lm->save();
				    }
				    session()->flash( 'success', "Marks submitted successfully." );
			    }
		    }
	    }

	    $lab_weeks = LabWeek::pluck('label', 'id')->toArray();

	    return view( 'layouts.add-lab-marks', compact( 'title','date_formatted',
		    'department', 'subjects', 'name', 'date', 'section', 'batch', 'year', 'subject_id',
		    'batch_id', 'section_id', 'sections', 'batches', 'lab_weeks', 'lab_week_id') );
    }

	public function indexLabMarks(){
		$title      = "View Lab Marks";
		$subjects = auth()->user()->getAssignedLabSubjectsArray();

		if( ! (count( $subjects ) >= 1)){
			return view( 'layouts.view-lab-marks', compact('title') )->withErrors([ 'message' => 'No courses assigned for you.' ]);
		}

		$sections = auth()->user()->employee()->first()->subjects()->first()->curriculum()->first()->year()->first()
		                  ->sections()->pluck( 'name', 'id' )->toArray();
		$batches  = auth()->user()->employee()->first()->subjects()->first()->curriculum()->first()->year()->first()
		                  ->sections()->first()->batches()->pluck( 'name', 'id' )->toArray();


		return view( 'layouts.view-lab-marks', compact( 'title',
			'department', 'name', 'date', 'subjects', 'sections', 'batches' ) );
	}

    public function viewLabMarks(){
//		dd(\request()->all());
	    $title      = "View Lab Marks";
	    $subject_id = request( 'subject' );
	    $batch_id = request( 'batch' );
	    $section_id = request( 'section' );

	    $mark_types = Subject::find( $subject_id )->labMarkTypes()->get()->toArray();

	    $subjects = auth()->user()->getAssignedLabSubjectsArray();
	    $sections = Subject::find($subject_id)->curriculum()->first()->year()->first()
	                       ->sections()->pluck( 'name', 'id' )->toArray();
	    $batches  = Batch::find($batch_id)->section()->first()->batches()->pluck( 'name', 'id' )->toArray();
	    $students = Batch::find($batch_id)->students()->get();

	    return view( 'layouts.view-lab-marks', compact( 'title', 'subjects', 'sections', 'batches',
		    'subject_id', 'batch_id', 'section_id', 'students', 'mark_types' ) );
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
