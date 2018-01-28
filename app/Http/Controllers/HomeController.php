<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $title      = "Dashboard - Home";

	    if ( auth()->user()->hasRole( 'Student' ) ) {

		    $subjects = auth()->user()->student()->first()->batch()->first()->section()
		                      ->first()->semester()->first()->subjects()->get();

		    return view( 'layouts.student-home', compact( 'title', 'subjects' ) );
	    }

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

    public function showChangePasswordForm(){
    	$title = 'Change Password';

    	return view( 'layouts.change-password', compact( 'title' ) );
    }

	public function changePassword( Request $request ) {
//    	dd($request->all());

		if ( ! ( Hash::check( $request->get( 'current-password' ), Auth::user()->password ) ) ) {
			// The passwords matches
			return redirect()->back()->with( "error", "Your current password does not matches with the password you provided. Please try again." );
		}
		if ( strcmp( $request->get( 'current-password' ), $request->get( 'new-password' ) ) == 0 ) {
			//Current password and new password are same
			return redirect()->back()->with( "error", "New Password cannot be same as your current password. Please choose a different password." );
		}

		$validatedData = $request->validate( [
			'current-password' => 'required',
			'new-password'     => 'required|string|min:6|confirmed',
		] );

		//Change Password
		$user           = Auth::user();
		$user->password = bcrypt( $request->get( 'new-password' ) );
		$user->save();

		return redirect()->back()->with( "success", "Password changed successfully !" );
	}

}
