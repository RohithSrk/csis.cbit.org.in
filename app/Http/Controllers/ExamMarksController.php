<?php

namespace App\Http\Controllers;

use App\Exam;
use App\ExamMark;
use App\QuestionPaper;
use App\Semester;
use Illuminate\Http\Request;

class ExamMarksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Add Mid Exam Marks';

	    $qp_arr = QuestionPaper::all()->pluck('name', 'id')->toArray();
	    $semesters_arr = Semester::all()->pluck( 'name', 'id' )->toArray();
	    $sections_arr = Semester::find(4)->sections->pluck('name', 'id')->toArray();

    	return view( 'layouts.add-exam-marks', compact( 'title', 'qp_arr', 'sections_arr', 'semesters_arr' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        dd($request->all());
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
     * @param  \App\ExamMark  $examMark
     * @return \Illuminate\Http\Response
     */
    public function show(ExamMark $examMark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExamMark  $examMark
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamMark $examMark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExamMark  $examMark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExamMark $examMark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExamMark  $examMark
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamMark $examMark)
    {
        //
    }
}
