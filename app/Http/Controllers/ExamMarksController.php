<?php

namespace App\Http\Controllers;

use App\Exam;
use App\ExamMark;
use App\Section;
use App\ExamQuestion;
use App\QuestionPaper;
use App\Semester;
use Illuminate\Http\Request;

class ExamMarksController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    auth()->user()->authorizeRoles( [ 'Editor' ] );
        $title = 'Add Mid Exam Marks';

        //TODO: Get Question Papers by semester.

	    $qp_arr = QuestionPaper::all()->pluck('name', 'id')->toArray();
	    $semesters_arr = Semester::all()->pluck( 'name', 'id' )->toArray();
	    $sections_arr = Semester::find(1)->sections->pluck('name', 'id')->toArray();

    	return view( 'layouts.add-exam-marks', compact( 'title', 'qp_arr', 'sections_arr', 'semesters_arr' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
	    $semester_id = $request->get( 'semester' );
	    $section_id  = $request->get( 'section' );
	    $qp_id       = $request->get( 'question-paper' );

	    $semesters_arr = Semester::all()->pluck( 'name', 'id' )->toArray();
	    $sections_arr = Semester::find($semester_id)->sections->pluck('name', 'id')->toArray();
	    $qp_arr = QuestionPaper::all()->pluck('name', 'id')->toArray();

	    $questions = ExamQuestion::where('question_paper_id', $qp_id)->get();
		$students = Section::find($section_id)->students()->get();

    	return view( 'layouts.add-exam-marks', compact( 'title', 'qp_arr', 'sections_arr', 'section_id' ,
		    'semesters_arr', 'section_id', 'questions', 'students', 'qp_id', 'semester_id' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $semester_id   = $request->get( 'semester' );
	    $section_id    = $request->get( 'section' );
	    $qp_id         = $request->get( 'question-paper' );
	    $stds_emarks   = $request->get( 'emarks' );
	    $questionPaper = QuestionPaper::find( $qp_id );
	    $question_ids  = $questionPaper->questions()->pluck( 'id' )->toArray();

	    foreach ($stds_emarks as $std_id => $std_emarks){

		    ExamMark::where('student_id', $std_id)->whereIN('question_id', $question_ids)->delete();

	    	foreach ($std_emarks as $qid => $emarks){
	    		if( is_array( $emarks ) ){
	    			foreach ( $emarks as $sq_id => $sq_emark ){
					    $em = new ExamMark();
					    $em->student_id = $std_id;
					    $em->sub_question_id = $sq_id;
					    $em->question_id = $qid;
					    $em->marks_scored = $sq_emark;
					    $em->save();
				    }
			    } else {
	    			$em = new ExamMark();
	    			$em->student_id = $std_id;
	    			$em->sub_question_id = null;
	    			$em->question_id = $qid;
	    			$em->marks_scored = $emarks;
				    $em->save();
			    }
		    }
	    }

	    session()->flash( 'success', "Marks submitted successfully." );

	    $semesters_arr = Semester::all()->pluck( 'name', 'id' )->toArray();
	    $sections_arr = Semester::find($semester_id)->sections->pluck('name', 'id')->toArray();
	    $qp_arr = QuestionPaper::all()->pluck('name', 'id')->toArray();

	    $questions = ExamQuestion::where('question_paper_id', $qp_id)->get();
	    $students = Section::find($section_id)->students()->get();

	    return view( 'layouts.add-exam-marks', compact( 'title', 'qp_arr', 'sections_arr', 'section_id' ,
		    'semesters_arr', 'section_id', 'questions', 'students', 'qp_id', 'semester_id' ) );
    }

	public function showSelectionForm()
	{
		auth()->user()->authorizeRoles( [ 'Editor' ] );
		$title = 'View Mid Exam Marks';

		//TODO: Get Question Papers by semester.

		$qp_arr = QuestionPaper::all()->pluck('name', 'id')->toArray();
		$semesters_arr = Semester::all()->pluck( 'name', 'id' )->toArray();
		$sections_arr = Semester::find(1)->sections->pluck('name', 'id')->toArray();

		return view( 'layouts.view-exam-marks', compact( 'title', 'qp_arr', 'sections_arr', 'semesters_arr' ) );
	}

	public function showMarks(Request $request)
	{
		$semester_id = $request->get( 'semester' );
		$section_id  = $request->get( 'section' );
		$qp_id       = $request->get( 'question-paper' );

		$semesters_arr = Semester::all()->pluck( 'name', 'id' )->toArray();
		$sections_arr = Semester::find($semester_id)->sections->pluck('name', 'id')->toArray();
		$qp_arr = QuestionPaper::all()->pluck('name', 'id')->toArray();

		$questions = ExamQuestion::where('question_paper_id', $qp_id)->get();
		$students = Section::find($section_id)->students()->get();

		return view( 'layouts.view-exam-marks', compact( 'title', 'qp_arr', 'sections_arr', 'section_id' ,
			'semesters_arr', 'section_id', 'questions', 'students', 'qp_id', 'semester_id' ) );
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\ExamMark  $examMark
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
	    auth()->user()->authorizeRoles( [ 'Student' ] );

	    $title = 'Mid Exam Marks';
	    $exams = Exam::all();
	    $student_id = auth()->user()->student()->first()->id;
	    $subject_ids = auth()->user()->student()->first()->getSemester()->subjects->where('type', 'theory')->pluck('id')->toArray();

		return view('layouts.student-view-exam-marks', compact( 'title', 'exams', 'subject_ids', 'student_id' ));
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
