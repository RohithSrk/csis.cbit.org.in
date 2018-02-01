<?php

namespace App\Http\Controllers;

use App\Criterion;
use App\FeedbackDatum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FeedbackUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:feedbackUser');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	public function index() {
		$title        = 'Anonymous Feedback System';
		$user         = auth()->user();
		$username     = $user->username;
		$feedback     = $user->feedback;

		//TODO: logic for already submitted.

		$section      = $user->section;
		$semester     = $section->semester;
		$subjects     = $semester->subjects();
		$subjects_arr = $subjects->select( 'id', DB::raw( "concat(name, ' (', code,')') as name_code" ) )
		                         ->pluck( 'name_code', 'id' )->toArray();
		$year         = $semester->year()->first();
		$criteria     = Criterion::all();

		return view( 'layouts.feedback-user-dashboard', compact( 'title', 'username', 'feedback',
			'subjects_arr', 'year', 'criteria', 'section' ) );
	}

    public function store(Request $request){
	    $title        = 'Anonymous Feedback System';
	    $section_id  = $request->get( 'section' );
	    $feedback_id = $request->get( 'feedback' );
	    $fdbk_data   = $request->get( 'feedback_data' );
	    $user         = auth()->user();
	    $username     = $user->username;

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
			    $feedback_datum->student    = $username;
			    $feedback_datum->percentage = ( ( ( $feedback_datum->X1 + (2 * $feedback_datum->X2) + $feedback_datum->X3 + $feedback_datum->X4 ) / 5 ) / 4 ) * 100;

			    if ( $feedback_datum->save() ) {
				    session()->flash( 'success', "Feedback submitted successfully." );
			    } else {
				    App::abort( 500, 'Error' );
			    }
		    }
	    }

	    return view( 'layouts.feedback-user-dashboard', compact( 'title', 'username' ) );
    }

}
