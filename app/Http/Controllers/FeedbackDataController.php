<?php

namespace App\Http\Controllers;

use App\Criterion;
use App\Feedback;
use App\FeedbackDatum;
use App\FeedbackUser;
use App\Section;
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
		auth()->user()->authorizeRoles( [ 'Editor', 'HOD' ] );

		$title = 'Add Feedback';

		$semesters = Semester::whereIN( 'year_id', auth()->user()->firstDepartment()->years()->pluck( 'id' )->toArray() );

		$semesters_arr = $semesters->pluck( 'name', 'id' )->toArray();

		$subjects = $semesters->first()->subjects();

		$subjects_arr = $subjects->select( 'id', DB::raw( "concat(name, ' (', code,')') as name_code" ) )
		                         ->pluck( 'name_code', 'id' )->toArray();

		$sections     = $semesters->first()->sections();
		$sections_arr = $sections->pluck( 'name', 'id' )->toArray();

		$faculty_arr = Subject::find( $subjects->first()->id )->getAssignedFacultyNames( $sections->first()->id );

		return view( 'layouts.add-feedback', compact( 'title', 'feedback', 'semesters_arr', 'sections_arr' ) );
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function create( Feedback $feedback ) {
		auth()->user()->authorizeRoles( [ 'Editor', 'HOD' ] );

		$title = 'Add Feedback';

		$this->validate( request(), [
			'semester' => 'required',
			'section'  => 'required',
		] );

		$semester_id = request( 'semester' );
		$section_id  = request( 'section' );

		$count = FeedbackDatum::where( 'feedback_id', $feedback->id )
		                      ->where( 'section_id', $section_id )
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

//		$faculty_arr = Subject::find( $subject_id )->getAssignedFacultyNames( $section_id );

		$criteria = Criterion::all();

		$year = $semester->year()->first();

		return view( 'layouts.add-feedback', compact( 'title', 'feedback', 'semesters_arr',
			'subjects_arr', 'sections_arr', 'semester_id', 'section_id', 'criteria', 'year' ) );
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store( Request $request ) {
		auth()->user()->authorizeRoles( [ 'Editor', 'HOD' ] );
		$title = "Add Feedback";

		$this->validate( request(), [
			'semester'      => 'required',
			'section'       => 'required',
			'feedback'      => 'required',
			'feedback_data' => 'required',
		] );

		$semester_id = $request->get( 'semester' );
		$section_id  = $request->get( 'section' );
		$feedback_id = $request->get( 'feedback' );
		$fdbk_data   = $request->get( 'feedback_data' );

		$feedback = Feedback::find( $feedback_id );

//		dd($fdbk_data);
		//TODO: check if already submitted

		foreach ( $fdbk_data as $subject_id => $fdbk_datum ) {

			foreach( $fdbk_datum as $faculty_id => $criteria ){

				$feedback_datum = FeedbackDatum::where( 'feedback_id', $feedback_id )
				                               ->where( 'employee_id', $faculty_id )
				                               ->where( 'section_id', $section_id )
				                               ->where( 'subject_id', $subject_id )
				                               ->first();

				if ( empty( $feedback_datum ) ) {
					$feedback_datum              = new FeedbackDatum();
					$feedback_datum->feedback_id = $feedback_id;
					$feedback_datum->section_id  = $section_id;
					$feedback_datum->subject_id  = $subject_id;
					$feedback_datum->employee_id = $faculty_id;
				}

				$feedback_datum->X1         = $criteria['X1'];
				$feedback_datum->X2         = $criteria['X2'];
				$feedback_datum->X3         = $criteria['X3'];
				$feedback_datum->X4         = $criteria['X4'];
				$feedback_datum->student    = 'All';
				$feedback_datum->percentage = ( ( ( $feedback_datum->X1 + (2 * $feedback_datum->X2) + $feedback_datum->X3 + $feedback_datum->X4 ) / 5 ) / 4 ) * 100;

				if ( $feedback_datum->save() ) {
					session()->flash( 'success', "Feedback submitted successfully." );
				} else {
					App::abort( 500, 'Error' );
				}
			}
		}

		$semesters = Semester::whereIN( 'year_id', auth()->user()->firstDepartment()->years()->pluck( 'id' )->toArray() );

		$semesters_arr = $semesters->pluck( 'name', 'id' )->toArray();

		$semester     = Semester::find( $semester_id );
		$subjects     = $semester->subjects();
		$subjects_arr = $subjects->select( 'id', DB::raw( "concat(name, ' (', code,')') as name_code" ) )
		                         ->pluck( 'name_code', 'id' )->toArray();

		$sections     = $semester->sections();
		$sections_arr = $sections->pluck( 'name', 'id' )->toArray();

		return view( 'layouts.add-feedback', compact( 'title', 'feedback', 'semesters_arr',
			'sections_arr', 'semester_id', 'section_id' ) );
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

    public function selectFeedbackUsers(Feedback $feedback){
	    $title = "Select Feedback Users";

	    $semester = Semester::find( 1 );
	    $semesters_arr = Semester::all()->pluck( 'name', 'id' )->toArray();
	    $sections     = $semester->sections();
	    $sections_arr = $sections->pluck( 'name', 'id' )->toArray();

	    return view( 'layouts.select-feedback-users', compact( 'title', 'semesters_arr', 'sections_arr',
		    'feedback' ));
    }

    public function listFeedbackUsers(Feedback $feedback){
	    $title = "Select Feedback Users";
	    $semester_id = request()->get('semester');
	    $section_id = request()->get('section');
	    $semesters_arr = Semester::all()->pluck( 'name', 'id' )->toArray();
	    $semester = Semester::find($semester_id);
	    $sections = $semester->sections();
	    $sections_arr = $sections->pluck( 'name', 'id' )->toArray();
	    $year         = $semester->year()->first();
	    $feedback_users = FeedbackUser::where('feedback_id', $feedback->id)->where('section_id', $section_id)->get();
	    return view( 'layouts.select-feedback-users', compact( 'title', 'semesters_arr', 'sections_arr',
		    'feedback', 'feedback_users', 'semester_id', 'section_id', 'year' ));
    }

    public function printFeedbackUsers( Feedback $feedback, Section $section ){
    	$title = "CBIT Anonymous Feedback System";
	    $year = $section->semester->year;
	    $feedback_users = FeedbackUser::where('feedback_id', $feedback->id)->where('section_id', $section->id)->get();
	    return view( 'layouts.print-feedback-users', compact( 'title', 'year', 'feedback', 'section', 'feedback_users') );
    }
}
