<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

    public function index(Request $request){

	    $title      = "Dashboard - Home";

	    $subjects_raw = auth()->user()->employee()->first()->subjects()->get()->toArray();
//	    $subjects_raw = auth()->user()->employee()->first()->subjects()->with('sections.year')->distinct()->get()->toArray();
	    $subjects = [];

	    $i = 0;
	    foreach ( $subjects_raw as $subject_raw ){

		    $subjects[ ++$i ]['name'] = $subject_raw['name'];
		    $subjects[ $i ]['code'] = $subject_raw['code'];

//		    foreach ($subject_raw['sections'] as $subject_section){
//			    $subjects[ $i ]['year_sec'] = $subject_section['year']['name'] . ' ' . $subject_section['name'];
//		    }
	    }

	    return view( 'layouts.home', compact( 'title', 'subjects' ) );
    }
}
