<?php

namespace App\Http\Controllers;

use App\Semester;
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
//		if(! auth()->check()) return redirect()->route('login');


		auth()->user()->authorizeRoles( [ 'HOD', 'Principal', 'Admin' ] );

		$title = "Assign Courses";

//		$employees        = auth()->user()->employee()->first()->departments()->first()->employees()->get();
//		$practicalCourses = auth()->user()->employee()->first()->departments()->first()
//								  ->subjects()->where( 'type', 'Practical' )->pluck('name', 'code');
//		$theoreticalCourses = auth()->user()->employee()->first()->departments()->first()
//		                          ->subjects()->where( 'type', 'Theory' )->pluck('name', 'code');

		$semesters = Semester::whereIN( 'year_id', auth()->user()->firstDepartment()->years()->pluck( 'id' )->toArray() );
		$semesters_arr = $semesters->pluck( 'name', 'id' )->toArray();
		$sections     = $semesters->first()->sections();
		$sections_arr = $sections->pluck( 'name', 'id' )->toArray();



		return view( 'layouts.select-courses', compact( 'title', 'semesters_arr', 'sections_arr' ) );
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function create() {

		auth()->user()->authorizeRoles( [ 'HOD', 'Principal', 'Admin' ] );

		$this->validate(request(), [
			'section' => 'required|integer|min:1',
			'semester' => 'required|integer|min:1'
		]);

		$title = "Assign Courses";

//		dd(\request()->all());

		$semester_id    = request( 'semester' );
		$section_id = request( 'section' );

		$semester = Semester::find( $semester_id );
		$sections     = $semester->sections();

		$sections_arr = $sections->pluck( 'name', 'id' )->toArray();

		$semesters = Semester::whereIN( 'year_id', auth()->user()->firstDepartment()->years()->pluck( 'id' )->toArray() );

		$semesters_arr = $semesters->pluck( 'name', 'id' )->toArray();

		//TODO: get only faculty

		$employees        = auth()->user()->employee()->first()->departments()->first()->employees()->pluck('name', 'id')->toArray();

//		$subjects = Subject::whereHas( 'curriculum', function ( $query ) use ( $year_id ) {
//			$query->where( 'year_id', $year_id );
//		} )->get();

		$subjects     = $semester->subjects()->get();



		return view( 'layouts.select-courses', compact( 'title', 'semesters_arr',
			'sections_arr', 'semester_id', 'section_id', 'subjects' , 'employees' ) );
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    auth()->user()->authorizeRoles(['HOD', 'Principal']);
	    $title = "Assign Courses";

//
//	    $employees        = auth()->user()->employee()->first()->departments()->first()->employees()->get();
//	    $practicalCourses = auth()->user()->employee()->first()->departments()->first()
//	                              ->subjects()->where( 'type', 'Practical' )->pluck('name', 'code');
//	    $theoreticalCourses = auth()->user()->employee()->first()->departments()->first()
//	                                ->subjects()->where( 'type', 'Theory' )->pluck('name', 'code');

	    $subjects_req = $request->get( 'subjects' );
	    $section_id = request( 'section' );
	    $semester_id    = request( 'semester' );

//	    dd(empty($subjects_req));

	    if( empty($subjects_req )){
	    	$subjects_req = [];
	    }

	    $subjects = Subject::all();

	    foreach ($subjects as $subject){
		    $subject->assignedFaculty( $section_id )->detach();
	    }

	    foreach ($subjects_req as $subject_code => $employee_ids){

		    $subject = Subject::where('code', $subject_code)->first();

	        foreach ( $employee_ids as $employee_id ){
		        Employee::find($employee_id)->subjects()->attach($subject, ['section_id' => $section_id]);
	        }

        }

	    $semester = Semester::find( $semester_id );
	    $semesters = Semester::whereIN( 'year_id', auth()->user()->firstDepartment()->years()->pluck( 'id' )->toArray() );
	    $semesters_arr = $semesters->pluck( 'name', 'id' )->toArray();
	    $sections     = $semester->sections();
	    $sections_arr = $sections->pluck( 'name', 'id' )->toArray();

//	    $subjects = Subject::whereHas( 'curriculum', function ( $query ) use ( $year_id ) {
//		    $query->where( 'year_id', $year_id );
//	    } )->get();

	    $subjects     = $semester->subjects()->get();

	    $employees        = auth()->user()->employee()->first()->departments()->first()->employees()->pluck('name', 'id')->toArray();

	    session()->flash('success', "Courses submitted successfully.");

	    return view( 'layouts.select-courses', compact( 'title', 'semesters_arr',
		    'sections_arr', 'semester_id', 'section_id', 'subjects' , 'employees' ) );
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
