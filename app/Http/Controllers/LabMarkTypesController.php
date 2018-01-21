<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject;
use App\LabMarkType;

class LabMarkTypesController extends Controller
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
	    $title      = "Manage Lab Mark Types";

	    $subjects = auth()->user()->getAssignedLabSubjectsArray();

//	    var_dump( count( $subjects ) );

	    if( ! (count( $subjects ) >= 1)){
		    return view( 'layouts.lab-marks-division', compact('title') )->withErrors([ 'message' => 'No courses assigned for you.' ]);
	    }



//	    session()->flash('success', 'Successfully done the operation.');

	    return view( 'layouts.lab-marks-division', compact( 'title', 'subjects' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        dd( request()->all() );

	    $title      = "Manage Lab Mark Types";
	    $subject_id = request('subject');
	    $subjects = auth()->user()->getAssignedLabSubjectsArray();

	    $subject = Subject::find( $subject_id );

	    $labMarkTypes = $subject->labMarkTypes()->get();




//	    session()->flash('success', 'Successfully done the operation.');

	    return view( 'layouts.lab-marks-division', compact( 'title',
		    'subjects', 'subject', 'subject_id', 'labMarkTypes' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store( Request $request ) {
//		dd( $request->all() );

		$labMarkTypes = $request->get( 'labMarkType' );
		$subject_id = $request->get( 'subject' );

		$subject = Subject::find( $subject_id );

		$subject->labMarkTypes()->delete();

		if ( ! empty( $labMarkTypes ) ) {

			foreach ( $labMarkTypes as $labMarkType ) {
				if( ! empty($labMarkType[0]) && ! empty($labMarkType[1]) ) {
					$lmt = new LabMarkType();
					$lmt->name = $labMarkType[0];
					$lmt->subject_id = $subject_id;
					$lmt->max_marks = $labMarkType[1];
					$lmt->save();
				}
			}
		}

		$title      = "Manage Lab Mark Types";
		$subjects = auth()->user()->getAssignedLabSubjectsArray();

		session()->flash('success', 'Mark Types submitted successfully.');

		return view( 'layouts.lab-marks-division', compact( 'title',
			'subjects', 'subject', 'subject_id' ) );
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
