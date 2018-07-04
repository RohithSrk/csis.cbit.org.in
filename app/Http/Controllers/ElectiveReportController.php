<?php

namespace App\Http\Controllers;

use App\Elective;
use App\Exports\ElectiveReportExport;
use App\Student;
use App\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use JavaScript;

class ElectiveReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Elective Report';

        $electives = Elective::all();
		$subjects = $electives->first()->subjects;
		$sections = Semester::find( $electives->first()->semester_id - 1 )->sections;

	    $electives_arr = $electives->pluck( 'name', 'id' )->toArray();

	    foreach ( $electives_arr as $id => $elective ){
	    	$electives_arr[$id] = $elective . ' (' . Elective::find($id)->semester->name . ')';
	    }

	    $subjects_arr  = $subjects->pluck( 'name', 'id' )->toArray();
	    $sections_arr = $sections->pluck('name', 'id')->toArray();

        return view( 'layouts.elective-report',
	        compact('title', 'electives_arr', 'subjects_arr', 'sections_arr'));
    }

    public function viewReport(Request $request){

		$elective_id = $request->get('elective');
		$subject_ids = $request->get('subject');
		$section_ids = $request->get('section');

	    $electives = Elective::all();
	    $subjects = Elective::find($elective_id)->subjects;
	    $sections = Semester::find( Elective::find($elective_id)->semester_id - 1 )->sections;

	    $electives_arr = $electives->pluck( 'name', 'id' )->toArray();

	    foreach ( $electives_arr as $id => $elective ){
		    $electives_arr[$id] = $elective . ' (' . Elective::find($id)->semester->name . ')';
	    }

	    $subjects_arr  = $subjects->pluck( 'name', 'id' )->toArray();
	    $sections_arr = $sections->pluck('name', 'id')->toArray();

	    $student_ids = DB::table('student_subject')
	      ->whereIn('subject_id', $subject_ids)
	      ->whereIn('section_id', $section_ids)
	      ->pluck('student_id')->toArray();

	    $students = Student::whereIn('id', $student_ids)->get();

	    return view( 'layouts.elective-report',
		    compact('title', 'electives_arr', 'subjects_arr', 'sections_arr', 'elective_id', 'students'));
    }

    public function export(Request $request){

	    $elective_id = $request->get('elective');
	    $subject_ids = $request->get('subject');
	    $section_ids = $request->get('section');

	    $student_ids = DB::table('student_subject')
	                     ->whereIn('subject_id', $subject_ids)
	                     ->whereIn('section_id', $section_ids)
	                     ->pluck('student_id')->toArray();

	    $students = Student::whereIn('id', $student_ids)->get();

	    return Excel::download(new ElectiveReportExport($elective_id, $students), 'elective_report.xlsx');
    }

    public function viewGraphs(){
		$title = 'Elective Statistics';

	    // TODO: create flat colors generation function
	    $colors = [
		    [ 'solid' => 'rgba(54, 162, 235, 1)', 'transparent' => 'rgba(54, 162, 235, .2)' ],
		    [ 'solid' => 'rgba(75, 192, 192, 1)', 'transparent' => 'rgba(75, 192, 192, .2)' ],
		    [ 'solid' => 'rgba(153, 102, 255, 1)','transparent' => 'rgba(153, 102, 255, .2)'],
		    [ 'solid' => 'rgba(255, 159, 64, 1)', 'transparent' => 'rgba(255, 159, 64, .2)' ],
		    [ 'solid' => 'rgba(255, 99, 132, 1)', 'transparent' => 'rgba(255, 99, 132, .2)' ],
	    ];

	    $electives = Elective::all();

	    $labelsets = [];
	    $datasets = [];

	    foreach ($electives as $elective){


		    $subjects = $elective->subjects;
		    $subjects_arr = $subjects->pluck('name')->toArray();
		    $labelsets[ $elective->id ] = $subjects_arr;
//	    	$labelsets[ $elective->id ] = array_merge( [ $subjects_arr, 'Not Selected' ] );

		    $sections = Semester::find( Elective::find($elective->id)->semester_id - 1 )->sections;



		    foreach ($sections as $i => $section){

			    $dataset['label'] = $section->name;

			    foreach ($subjects as $subject){

				    $dataset['data'][] =  DB::table('student_subject')
				                            ->whereIn('section_id', [ $section->id ])
				                            ->whereIn('subject_id', [ $subject->id ])->count();
				    $dataset['backgroundColor'][] = $colors[ $i % 5  ]['transparent'];
				    $dataset['borderColor'][] = $colors[ $i % 5  ]['solid'];
				    $dataset['borderWidth'] = 1;
			    }

			    $datasets[ $elective->id ][] = $dataset;
			    $dataset = [];
		    }



	    }


	    JavaScript::put([
		    'chartjsElectiveDSLabels' => $labelsets,
		    'chartjsElectiveDatasets' => $datasets
	    ]);


	    return view('layouts.elective-report-stats', compact( 'title', 'electives' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
