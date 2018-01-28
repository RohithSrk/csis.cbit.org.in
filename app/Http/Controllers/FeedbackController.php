<?php

namespace App\Http\Controllers;

use App\Criterion;
use App\Employee;
use App\Feedback;
use App\FeedbackDatum;
use App\Section;
use App\Subject;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use JavaScript;

class FeedbackController extends Controller
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
		auth()->user()->authorizeRoles( [ 'Editor', 'HOD' ] );

		$title = "Available Feedback";

		$feedback_items = Feedback::all();

		return view( 'layouts.list-feedback', compact( 'title', 'feedback_items' ) );
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function create() {
		auth()->user()->authorizeRoles( [ 'Editor', 'HOD', 'Principal' ] );

		$title      = "Create Feedback";
		$start_date = Carbon::now()->format( 'd/m/Y' );
		$end_date   = Carbon::now()->addMonths( 3 )->format( 'd/m/Y' );

		return view( 'layouts.create-feedback', compact( 'title', 'start_date', 'end_date' ) );
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store( Request $request ) {
		auth()->user()->authorizeRoles( [ 'Editor', 'HOD' ] );

		$title = "Create Feedback";

		$start_date = $request->get( 'start-date' );
		$end_date   = $request->get( 'end-date' );

		$feedback             = new Feedback();
		$feedback->name       = $request->get( 'feedback-name' );
		$feedback->start_date = Carbon::createFromFormat( 'd/m/Y', $start_date );
		$feedback->end_date   = Carbon::createFromFormat( 'd/m/Y', $end_date );
		$feedback->feedback_type   = $request->get( 'feedback-type' );
		$feedback->save();

		$start_date = Carbon::now()->format( 'd/m/Y' );
		$end_date   = Carbon::now()->addMonths( 3 )->format( 'd/m/Y' );

		session()->flash( 'success', 'Feedback created successfully.' );

		return view( 'layouts.create-feedback', compact( 'title', 'start_date', 'end_date' ) );
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {

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

    public function viewResult(){
	    auth()->user()->authorizeRoles( [ 'Faculty' ] );

    	$title = "View Feedback";

    	// TODO: create flat colors generation function
	    $colors = [
		    [ 'solid' => 'rgba(54, 162, 235, 1)', 'transparent' => 'rgba(54, 162, 235, .2)' ],
		    [ 'solid' => 'rgba(75, 192, 192, 1)', 'transparent' => 'rgba(75, 192, 192, .2)' ],
		    [ 'solid' => 'rgba(153, 102, 255, 1)','transparent' => 'rgba(153, 102, 255, .2)'],
		    [ 'solid' => 'rgba(255, 159, 64, 1)', 'transparent' => 'rgba(255, 159, 64, .2)' ],
		    [ 'solid' => 'rgba(255, 99, 132, 1)', 'transparent' => 'rgba(255, 99, 132, .2)' ],
	    ];

    	$employee_id = auth()->user()->employee()->first()->id;

	    $datasets = [];

	    $feedback_items = Feedback::all();

	    foreach ( $feedback_items as $feedback ){
		    $dataset = [];

	    	$feedback_data = DB::table( 'feedback_data' )
		                       ->where( 'employee_id', $employee_id )
		                       ->where( 'feedback_id', $feedback->id )
		                       ->select( DB::raw( 'avg(percentage) as percentage, avg(X1) as X1, avg(X2) as X2, avg(X3) as X3, avg(X4) as X4, subject_id, section_id' ) )
		                       ->groupBy( 'subject_id', 'section_id' )->get()->toArray();

		    $feedback_data = collect( $feedback_data )->map( function ( $x ) {
			    return (array) $x;
		    } )->toArray();

		    foreach ($feedback_data as $i => $feedback_datum){
			    $section = Section::find( $feedback_datum['section_id'] );
			    $subject = Subject::find( $feedback_datum['subject_id'] );
			    $year    = $section->semester()->first()->year()->first();

			    $dataset['label'] = "{$year->name} {$section->name} - {$subject->name} ($subject->code)";
			    $dataset['data']  = [
				    round( ($feedback_datum['X1'] / 5) * 100, 2 ),
				    round( ($feedback_datum['X2'] / 5) * 100, 2 ),
				    round( ($feedback_datum['X3'] / 5) * 100, 2 ),
				    round( ($feedback_datum['X4'] / 5) * 100, 2 ),
				    round( $feedback_datum['percentage'], 2 )
			    ];
			    $dataset['borderWidth'] = 1;
			    $dataset['backgroundColor'] = [
				    $colors[ $i % count( $colors ) ]['transparent'],
				    $colors[ $i % count( $colors ) ]['transparent'],
				    $colors[ $i % count( $colors ) ]['transparent'],
				    $colors[ $i % count( $colors ) ]['transparent'],
				    $colors[ $i % count( $colors ) ]['solid'],
			    ];
			    $dataset['borderColor']  = [
				    $colors[ $i % count( $colors ) ]['solid'],
				    $colors[ $i % count( $colors ) ]['solid'],
				    $colors[ $i % count( $colors ) ]['solid'],
				    $colors[ $i % count( $colors ) ]['solid'],
				    $colors[ $i % count( $colors ) ]['solid'],
			    ];
			    $datasets[ $feedback->id ][] = $dataset;
		    }
	    }

	    $criteria = Criterion::all()->pluck('criterion', 'code')->toArray();
	    JavaScript::put([
	    	'chartjsFacultyDSLabels' => [ $criteria['X1'], $criteria['X2'], $criteria['X3'], $criteria['X4'], 'Avg. Percentage' ],
		    'chartjsFacultyDatasets' => $datasets
	    ]);

    	return view('layouts.view-feedback-result', compact( 'title', 'feedback_items' ) );
    }

    public function selectFeedback(){
	    auth()->user()->authorizeRoles( [ 'Editor', 'HOD', 'Principal' ] );

    	$title = "Feedback Report";

	    $feedback_arr = Feedback::all()->pluck('name', 'id')->toArray();

	    $faculty_arr = User::whereHas('roles', function($q){ $q->where('name', 'Faculty'); })
	                       ->with('employee')->get()->pluck('employee.name', 'employee.id')->toArray();

	    $subjects_arr = User::whereHas('roles', function($q){ $q->where('name', 'Faculty'); })
	                        ->first()->employee()->first()->subjects()
	                        ->select( 'id', DB::raw( "concat(name, ' (', code,')') as name_code" ) )
	                        ->pluck( 'name_code', 'id' )->toArray();

	    return view('layouts.view-feedback-report', compact( 'title', 'feedback_arr',
		    'faculty_arr', 'subjects_arr') );
    }

	public function viewReport() {
		auth()->user()->authorizeRoles( [ 'Editor', 'HOD', 'Principal' ] );

		$title = "Feedback Report";

		$this->validate( request(), [
			'faculty' => 'required',
		] );

		$facutly_ids = request()->get( 'faculty' );
		$feedback_id = request()->get( 'feedback' );

		$feedback_arr = Feedback::all()->pluck( 'name', 'id' )->toArray();

		$faculty_arr = User::whereHas( 'roles', function ( $q ) {
			$q->where( 'name', 'Faculty' );
		} )->with( 'employee' )->get()->pluck( 'employee.name', 'employee.id' )->toArray();

		$feedback_data = DB::table( 'feedback_data' )
		                   ->where( 'feedback_id', $feedback_id )
		                   ->whereIn( 'employee_id', $facutly_ids )
		                   ->select( DB::raw( 'avg(percentage) as percentage, avg(X1) as X1, avg(X2) as X2, avg(X3) as X3, avg(X4) as X4, subject_id, section_id, employee_id' ) )
		                   ->groupBy( 'subject_id', 'section_id', 'employee_id' )->get()->toArray();

		$feedback_data = collect( $feedback_data )->map( function ( $x ) {
			return (array) $x;
		} )->toArray();

		$employees_arr = Employee::all()->pluck( 'name', 'id' )->toArray();
		$subjects_arr  = Subject::all()->pluck( 'name', 'id' )->toArray();

		$criteria = Criterion::all();

		return view( 'layouts.view-feedback-report', compact( 'title', 'feedback_arr', 'feedback_id',
			'faculty_arr', 'facutly_ids', 'criteria', 'feedback_data', 'subjects_arr', 'employees_arr' ) );
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
	public function destroy( Feedback $feedback ) {
		auth()->user()->authorizeRoles( [ 'Editor', 'HOD' ] );

		FeedbackDatum::where( 'feedback_id', $feedback->id )->delete();

		if( $feedback->delete() ){
			session()->flash( 'success', 'Feedback deleted successfully.' );
		}

		return Redirect::action( 'FeedbackController@index' );
	}
}
