<?php

namespace App\Http\Controllers;

use App\Elective;
use App\Jobs\SendEmailJob;
use App\Mail\ElectiveSelected;
use App\Mail\ElectiveSelection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use App\User;
use App\Subject;
use App\Semester;
use Illuminate\Notifications\Messages\MailMessage;

class ElectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $msg = 'Please check your URL!';
	    return view('layouts.msg', compact('msg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
	    if ( ! $request->hasValidSignature() || is_null( $request->get( 'user_id' ) ) ) {
		    abort( 401 );
	    }

	    $user_id = $request->get( 'user_id' );
	    $user    = User::find( $user_id );

	    $user->authorizeRoles( [ 'Student' ] );

	    $title = "Elective-2018";

	    $student  = $user->student;
	    $semester = $student->batch->section->semester;
	    $year     = $semester->year;
		$elective = Semester::find( $semester->id + 1 )->electives->first();
	    $subjects_arr = $elective->subjects->pluck( 'name', 'id' );

	    $student_subjects = $student->subjects->pluck('id')->toArray();
	    $elective_subjects = $elective->subjects->pluck('id')->toArray();

	    $selected_subjects = array_intersect( $elective_subjects, $student_subjects );

	    if(count($selected_subjects)){
		    $selected_subject_id = array_values($selected_subjects)[0];

		    foreach ($subjects_arr as $sub_id => $sub_name ){
		    	if($sub_id == $selected_subject_id){
		    		$subjects_arr[$sub_id] = $sub_name . ' (selected)';
			    }
		    }
	    }

//	    if( array_intersect( $elective_subjects, $student_subjects ) ){
//		    $msg = 'You have already chosen an elective subject 😕';
//		    return view('layouts.msg', compact('msg'));
//	    }

	    return view( 'layouts.elective-selection',
		    compact( 'title', 'student', 'subjects_arr', 'year', 'elective', 'selected_subject_id' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    if ( ! $request->hasValidSignature()
	         || is_null( $request->get( 'user_id' ) )
	         || is_null( $request->get( 'subject' ) ) ) {
		    abort( 401 );
        }

	    $subject_id = $request->get( 'subject' );
	    $user_id = $request->get( 'user_id' );
	    $user    = User::find( $user_id );

	    $user->authorizeRoles( [ 'Student' ] );
		$subject = Subject::find($subject_id);
	    $student  = $user->student;

	    $semester = $student->batch->section->semester;
	    $elective = Semester::find( $semester->id + 1 )->electives->first();


	    $subject_ids = $elective->subjects->pluck('id')->toArray();
	    $subjects_arr = $elective->subjects->pluck( 'name', 'id' );
	    $student_subjects = $student->subjects->pluck('id')->toArray();
	    $elective_subjects = $elective->subjects->pluck('id')->toArray();
	    $selected_subjects = array_intersect( $elective_subjects, $student_subjects );

	    if(count($selected_subjects)){
		    $prev_subject_id = array_values($selected_subjects)[0];
	    }

	    DB::table('student_subject')->where('student_id', $student->id)->whereIN('subject_id', $subject_ids)->delete();

	    $student->subjects()->attach([$subject_id => [
	    	'section_id' => $student->batch->section->id,
	    ]]);

	    $name = ucwords( strtolower( $student->name ) );
	    $electiveName = $elective->name;
	    $subjectName = $subject->name;
	    $subjectCode = $subject->code;

//	    Mail::to($user)->send(new ElectiveSelected($name, $electiveName, $subjectName, $subjectCode));

	    dispatch(new SendEmailJob($user, $name, $electiveName, $subjectName, $subjectCode));

	    if(isset($prev_subject_id) && $prev_subject_id != $subject_id){
		    $msg = 'Success 😊 ! You have changed your selection from '. $subjects_arr[$prev_subject_id] .' to '.
		            $subjects_arr[$subject_id] . '. You will now receive an email confirming your selection.';
	    } else {
		    $msg = 'Success 😊 ! You will now receive an email confirming your selection.';
	    }

	    return view('layouts.msg', compact('msg'));
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
