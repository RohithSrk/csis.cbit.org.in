<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

    public function index(){
	    $title      = "Dashboard - Home";

	    $subjects = DB::table('employee_subject')
					      ->select(['employees.id as employee_id', 'sections.id as section_id', 'subjects.code', 'subjects.name'])
					      ->leftJoin('employees', 'employees.id', '=', 'employee_subject.employee_id')
					      ->leftJoin('subjects', 'subjects.id', '=', 'employee_subject.subject_id')
					      ->leftJoin('sections', 'sections.id', '=', 'employee_subject.section_id')
					      ->where('employees.id', auth()->user()->employee()->first()->id)->get();

	    $subjects = collect( $subjects )->map( function ( $x ) {
		    return (array) $x;
	    } )->toArray();

	    return view( 'layouts.home', compact( 'title', 'subjects' ) );
    }
}
