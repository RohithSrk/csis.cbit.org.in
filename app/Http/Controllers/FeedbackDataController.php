<?php

namespace App\Http\Controllers;

use App\Criterion;
use App\Feedback;
use App\FeedbackDatum;
use App\Semester;
use App\Student;
use App\Subject;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use JavaScript;

class FeedbackDataController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index( Feedback $feedback ) {

		$title = 'Add Feedback';

		$semesters = Semester::whereIN( 'year_id', auth()->user()->firstDepartment()->years()->pluck( 'id' )->toArray() );

		$semesters_arr = $semesters->pluck( 'name', 'id' )->toArray();

		$subjects = $semesters->first()->subjects();

		$subjects_arr = $subjects->select( 'id', DB::raw( "concat(name, ' (', code,')') as name_code" ) )
		                         ->pluck( 'name_code', 'id' )->toArray();

		$sections     = $semesters->first()->sections();
		$sections_arr = $sections->pluck( 'name', 'id' )->toArray();

		$faculty_arr = Subject::find($subjects->first()->id)->getAssignedFacultyNames($sections->first()->id);

		return view( 'layouts.add-feedback', compact( 'title', 'feedback', 'semesters_arr',
			'subjects_arr', 'sections_arr', 'faculty_arr' ) );
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Feedback $feedback)
    {
	    $title = 'Add Feedback';

	    $this->validate(request(), [
		    'semester' => 'required',
		    'subject' => 'required',
		    'section' => 'required',
		    'faculty' => 'required',
	    ]);

	    $semester_id = request( 'semester' );
	    $subject_id  = request( 'subject' );
	    $section_id  = request( 'section' );
	    $faculty_id  = request( 'faculty' );

	    $count = FeedbackDatum::where( 'feedback_id', $feedback->id )
	                          ->where( 'employee_id', $faculty_id )
	                          ->where( 'section_id', $section_id )
	                          ->where( 'subject_id', $subject_id )
	                          ->count();

	    if ( $count > 0 ) {
		    return Redirect::action( 'FeedbackDataController@index', [ 'feedback' => $feedback->id ] )
		                   ->withErrors( [ 'message' => "Feedback submitted already." ] );
	    }


	    $semesters = Semester::whereIN( 'year_id', auth()->user()->firstDepartment()->years()->pluck( 'id' )->toArray() );

	    $semesters_arr = $semesters->pluck( 'name', 'id' )->toArray();

	    $semester = Semester::find( $semester_id );

	    $subjects     = $semester->subjects();
	    $subjects_arr = $subjects->select( 'id', DB::raw( "concat(name, ' (', code,')') as name_code" ) )
	                             ->pluck( 'name_code', 'id' )->toArray();

	    $sections     = $semester->sections();
	    $sections_arr = $sections->pluck( 'name', 'id' )->toArray();

	    $faculty_arr = Subject::find( $subject_id )->getAssignedFacultyNames( $section_id );

	    $criteria = Criterion::all();

	    $year = $semester->year()->first();

	    return view( 'layouts.add-feedback', compact( 'title', 'feedback', 'semesters_arr',
		    'subjects_arr', 'sections_arr', 'faculty_arr', 'semester_id', 'subject_id', 'section_id', 'faculty_id', 'criteria', 'year' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//	    dd(\request()->all());
		$title = "Add Feedback";

	    $this->validate(request(), [
		    'semester' => 'required',
		    'subject' => 'required',
		    'section' => 'required',
		    'faculty' => 'required',
		    'feedback' => 'required',
		    'feedback_data' => 'required',
	    ]);

	    $semester_id = $request->get( 'semester' );
	    $subject_id  = $request->get( 'subject' );
	    $section_id  = $request->get( 'section' );
	    $faculty_id  = $request->get( 'faculty' );
	    $feedback_id = $request->get( 'feedback' );
	    $fdbk_data   = $request->get( 'feedback_data' );

	    $feedback = Feedback::find($feedback_id);

	    foreach ($fdbk_data as $fdbk_datum){

	    	if( ! empty( $fdbk_datum['rollnum'] )){

	    		$student = Student::where('rollnum', $fdbk_datum['rollnum'])->first();

	    		//TODO: check if student belongs to section_id
	    		//TODO: check if already submitted

			    if(! empty( $student )){

			        $feedback_datum = FeedbackDatum::where('feedback_id', $feedback_id)
				                                   ->where('student_id', $student->id)
				                                   ->where('employee_id', $faculty_id)
				                                   ->where('section_id', $section_id)
				                                   ->where('subject_id', $subject_id)
				                                   ->first();

				    if ( empty( $feedback_datum ) ) {
					    $feedback_datum              = new FeedbackDatum();
					    $feedback_datum->feedback_id = $feedback_id;
					    $feedback_datum->student_id  = $student->id;
					    $feedback_datum->section_id  = $section_id;
					    $feedback_datum->subject_id  = $subject_id;
					    $feedback_datum->employee_id = $faculty_id;
				    }

				    $feedback_datum->X1          = $fdbk_datum['X1'];
				    $feedback_datum->X2          = $fdbk_datum['X2'];
				    $feedback_datum->X3          = $fdbk_datum['X3'];
				    $feedback_datum->X4          = $fdbk_datum['X4'];
				    $feedback_datum->X4          = $fdbk_datum['X4'];
				    $feedback_datum->percentage = ((($feedback_datum->X1 + $feedback_datum->X2 + $feedback_datum->X3 + $feedback_datum->X4) / 4) / 5) * 100;
				    $feedback_datum->save();

				    session()->flash( 'success', "Feedback submitted successfully." );
			    }
		    }
	    }


	    $semesters = Semester::whereIN( 'year_id', auth()->user()->firstDepartment()->years()->pluck( 'id' )->toArray() );

	    $semesters_arr = $semesters->pluck( 'name', 'id' )->toArray();

	    $semester = Semester::find($semester_id);
	    $subjects = $semester->subjects();
	    $subjects_arr = $subjects->select( 'id', DB::raw( "concat(name, ' (', code,')') as name_code" ) )
	                             ->pluck( 'name_code', 'id' )->toArray();

	    $sections     = $semester->sections();
	    $sections_arr = $sections->pluck( 'name', 'id' )->toArray();

	    $faculty_arr = Subject::find($subject_id)->getAssignedFacultyNames($section_id);

	    $year = $semester->year()->first();

	    return view( 'layouts.add-feedback', compact( 'title', 'feedback', 'semesters_arr',
		    'subjects_arr', 'sections_arr', 'faculty_arr', 'semester_id', 'subject_id', 'section_id', 'faculty_id', 'year' ) );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
