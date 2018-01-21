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
	public function index() {
		auth()->user()->authorizeRoles( [ 'Faculty' ] );

		$title = "Manage Lab Mark Types";

		$subjects = auth()->user()->getAssignedLabSubjectsArray();

		if ( ! ( count( $subjects ) >= 1 ) ) {
			return view( 'layouts.lab-marks-division', compact( 'title' ) )->withErrors( [ 'message' => 'No courses assigned for you.' ] );
		}

		return view( 'layouts.lab-marks-division', compact( 'title', 'subjects' ) );
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function create() {
		auth()->user()->authorizeRoles( [ 'Faculty' ] );

		$title = "Manage Lab Mark Types";

		$subject_id = request( 'subject' );

		$subjects = auth()->user()->getAssignedLabSubjectsArray();

		$subject = Subject::find( $subject_id );

		$labMarkTypes = $subject->labMarkTypes()->get();

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
		auth()->user()->authorizeRoles( [ 'Faculty' ] );

		$title = "Manage Lab Mark Types";

		$labMarkTypes = $request->get( 'labMarkType' );
		$subject_id   = $request->get( 'subject' );

		$subject = Subject::find( $subject_id );

		$subject->labMarkTypes()->delete();

		$subjects = auth()->user()->getAssignedLabSubjectsArray();

		if ( ! empty( $labMarkTypes ) ) {

			foreach ( $labMarkTypes as $labMarkType ) {
				if ( ! empty( $labMarkType[0] ) && ! empty( $labMarkType[1] ) ) {
					$lmt             = new LabMarkType();
					$lmt->name       = $labMarkType[0];
					$lmt->subject_id = $subject_id;
					$lmt->max_marks  = $labMarkType[1];

					if ( $lmt->save() ) {
						session()->flash( 'success', 'Mark Types submitted successfully.' );
					} else {
						App::abort( 500, 'Error' );
					}
				}
			}
		}

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
