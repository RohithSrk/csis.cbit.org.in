<?php

namespace App\Http\Controllers;

use App\Exam;
use App\QuestionPaper;
use App\Semester;
use Illuminate\Http\Request;

class QuestionPaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Add Question Paper';

        $exams_arr = Exam::all()->pluck('name', 'id')->toArray();
//        $exam_id = Exam::find(1)->id;
        $semesters_arr = Semester::all()->pluck( 'name', 'id' )->toArray();
//        $semester_id = Semester::find( 1 )->id;
        $subjects_arr = Semester::find(4)->subjects()->where('type', 'theory')->pluck('name', 'id')->toArray();

        return view( 'layouts.create-question-paper', compact( 'title',
            'semesters_arr', 'subjects_arr', 'exams_arr' ) );
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
     * @param  \App\QuestionPaper  $questionPaper
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionPaper $questionPaper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuestionPaper  $questionPaper
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionPaper $questionPaper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuestionPaper  $questionPaper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuestionPaper $questionPaper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuestionPaper  $questionPaper
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionPaper $questionPaper)
    {
        //
    }
}
