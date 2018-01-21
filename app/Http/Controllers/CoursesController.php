<?php

namespace App\Http\Controllers;

use App\Semester;
use App\User;
use Illuminate\Http\Request;
use App\Year;
use App\Subject;
use App\Employee;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index() {
		auth()->user()->authorizeRoles( [ 'HOD', 'Principal', 'Admin', 'Editor' ] );

		$title = "Assign Courses";

		$semesters     = Semester::whereIN( 'year_id', auth()->user()->getDepartmentYearIdsArray() );
		$semesters_arr = $semesters->pluck( 'name', 'id' )->toArray();
		$sections      = $semesters->first()->sections();
		$sections_arr  = $sections->pluck( 'name', 'id' )->toArray();

		return view( 'layouts.select-courses', compact( 'title', 'semesters_arr', 'sections_arr' ) );
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function create() {
		auth()->user()->authorizeRoles( [ 'HOD', 'Principal', 'Admin', 'Editor' ] );

		$this->validate( request(), [
			'section'  => 'required|integer|min:1',
			'semester' => 'required|integer|min:1'
		] );

		$title = "Assign Courses";

		$semester_id = request( 'semester' );
		$section_id  = request( 'section' );

		$semester      = Semester::find( $semester_id );
		$semesters_arr = Semester::whereIN( 'year_id', auth()->user()->getDepartmentYearIdsArray() )
		                         ->pluck( 'name', 'id' )->toArray();

		$sections     = $semester->sections();
		$sections_arr = $sections->pluck( 'name', 'id' )->toArray();

		$subjects = $semester->subjects()->get();

		$faculty_arr = User::whereHas( 'roles', function ( $q ) {
			$q->where( 'name', 'Faculty' );
		} )->with( 'employee' )->get()->pluck( 'employee.name', 'employee.id' )->toArray();

		return view( 'layouts.select-courses', compact( 'title', 'semesters_arr',
			'sections_arr', 'semester_id', 'section_id', 'subjects', 'faculty_arr' ) );
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    auth()->user()->authorizeRoles( [ 'HOD', 'Principal', 'Admin', 'Editor' ] );

	    $this->validate( request(), [
		    'section'  => 'required',
		    'semester' => 'required',
		    'subjects' => 'required'
	    ] );

	    $title = "Assign Courses";

	    $subjects_req = $request->get( 'subjects' );
	    $section_id   = $request->get( 'section' );
	    $semester_id  = $request->get( 'semester' );

	    if( empty($subjects_req )) $subjects_req = [];

	    $subjects = Subject::all();

	    foreach ($subjects as $subject) $subject->assignedFaculty( $section_id )->detach();

	    foreach ( $subjects_req as $subject_code => $employee_ids ) {

		    $subject = Subject::where( 'code', $subject_code )->first();

		    foreach ( $employee_ids as $employee_id ) {
			    Employee::find( $employee_id )->subjects()->attach( $subject, [ 'section_id' => $section_id ] );
		    }
	    }

	    $semester = Semester::find( $semester_id );
	    $semesters_arr = Semester::whereIN( 'year_id', auth()->user()->getDepartmentYearIdsArray() )
	                             ->pluck( 'name', 'id' )->toArray();

	    $sections     = $semester->sections();
	    $sections_arr = $sections->pluck( 'name', 'id' )->toArray();

	    $subjects     = $semester->subjects()->get();

	    $faculty_arr = User::whereHas( 'roles', function ( $q ) {
		    $q->where( 'name', 'Faculty' );
	    } )->with( 'employee' )->get()->pluck( 'employee.name', 'employee.id' )->toArray();

	    session()->flash('success', "Courses submitted successfully.");

	    return view( 'layouts.select-courses', compact( 'title', 'semesters_arr',
		    'sections_arr', 'semester_id', 'section_id', 'subjects' , 'faculty_arr' ) );
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
