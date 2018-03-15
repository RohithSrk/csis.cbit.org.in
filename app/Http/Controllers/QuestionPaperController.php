<?php

namespace App\Http\Controllers;

use App\Exam;
use App\ExamQuestion;
use App\QuestionPaper;
use App\QuestionPaperPart;
use App\Semester;
use App\SubQuestion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionPaperController extends Controller
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
        $title = 'Add Question Paper';

        $exams_arr = Exam::all()->pluck('name', 'id')->toArray();
//        $exam_id = Exam::find(1)->id;
        $semesters_arr = Semester::all()->pluck( 'name', 'id' )->toArray();
        $semester_id = Semester::find( 1 )->id;
        $subjects_arr = Semester::find( 1 )->subjects()->where('type', 'theory')->pluck('name', 'id')->toArray();

        return view( 'layouts.create-question-paper', compact( 'title',
            'semesters_arr', 'subjects_arr', 'exams_arr', 'semester_id' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
	    auth()->user()->authorizeRoles( [ 'Editor' ] );

	    $title = 'Add Question Paper';

	    $exam_id     = $request->get( 'exam' );
	    $semester_id = $request->get( 'semester' );
	    $subject_id  = $request->get( 'subject' );
	    $parts       = $request->get( 'parts' );
	    $date        = $request->get( 'date' );
	    $qp_name     = $request->get( 'question-paper-name' );
	    $max_marks   = $request->get( 'max-marks' );

	    $exams_arr     = Exam::all()->pluck( 'name', 'id' )->toArray();
	    $semesters_arr = Semester::all()->pluck( 'name', 'id' )->toArray();
	    $subjects_arr  = Semester::find( $semester_id )->subjects()->where( 'type', 'theory' )->pluck( 'name', 'id' )->toArray();

	    Session::put( 'exam', $exam_id );
	    Session::put( 'semester', $semester_id );
	    Session::put( 'subject', $subject_id );
	    Session::put( 'parts', $parts );
	    Session::put( 'question-paper-name', $qp_name );
	    Session::put( 'date', $date );
	    Session::put( 'max-marks', $max_marks );

	    return view( 'layouts.create-question-paper', compact( 'title',
		    'exams_arr', 'exam_id', 'semesters_arr', 'semester_id', 'subjects_arr', 'subject_id', 'parts' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    auth()->user()->authorizeRoles( [ 'Editor' ] );

	    $title = 'Add Question Paper';

	    $exam_id     = Session::get( 'exam' );
	    $semester_id = Session::get( 'semester' );
	    $subject_id  = Session::get( 'subject' );
	    $parts       = Session::get( 'parts' );
	    $date        = Session::get( 'date' );
	    $qp_name     = Session::get( 'question-paper-name' );
	    $max_marks   = Session::get( 'max-marks' );

	    $questions     = $request->get( 'questions' );

	    $qp = new QuestionPaper();
	    $qp->name = $qp_name;
	    $qp->subject_id = $subject_id;
	    $qp->exam_id = $exam_id;
	    $qp->max_marks = $max_marks;
	    $qp->exam_date = Carbon::createFromFormat( 'd/m/Y', $date );

	    if (  $qp->save()  ) {

	    	$partAId = 0;
	    	$partBId = 0;

	    	foreach ($parts as $qi => $qp_part){
			    $qpPart                       = new QuestionPaperPart();
			    $qpPart->name                 = ( $qi == 1 ) ? 'Part A' : 'Part B';
			    $qpPart->questions_count      = $qp_part['max_questions'];
			    $qpPart->questions_to_attempt = $qp_part['questions_to_attempt'];
			    $qpPart->question_paper_id    = $qp->id;
				if($qpPart->save()){
					if( $qi == 1 )
						$partAId = $qpPart->id;
					else
						$partBId = $qpPart->id;
				}
		    }

		    foreach ($questions as $qi => $part_questions){

				foreach ($part_questions as $question){

					$eq = new ExamQuestion();
					$eq->question = $question['question'];
					$eq->max_marks = $question['max_marks'];
					$eq->question_paper_id = $qp->id;
					$eq->question_paper_part_id = ( $qi == 1 )? $partAId : $partBId;
					$eq->has_sub_questions = false;
					$eq->CO = '';

					if(isset($question['sub_questions'])){
						$eq->has_sub_questions = true;
					}

					if( $eq->save() ){
						if(isset($question['sub_questions'])){
							$sub_questions = $question['sub_questions'];

							foreach ($sub_questions as $sub_question){
								$sq = new SubQuestion();
								$sq->question = $sub_question['question'];
								$sq->max_marks = $sub_question['max_marks'];
								$sq->co = '';
								$sq->exam_question_id = $eq->id;
								$sq->save();
							}
						}
					}
				}
		    }

		    session()->flash( 'success', "Question Paper created successfully." );

	    } else {
		    App::abort( 500, 'Error' );
	    }

	    $exams_arr     = Exam::all()->pluck( 'name', 'id' )->toArray();
	    $semesters_arr = Semester::all()->pluck( 'name', 'id' )->toArray();
	    $subjects_arr  = Semester::find( $semester_id )->subjects()->where( 'type', 'theory' )->pluck( 'name', 'id' )->toArray();

	    return view( 'layouts.create-question-paper', compact( 'title',
		    'exams_arr', 'exam_id', 'semesters_arr', 'semester_id', 'subjects_arr', 'subject_id' ) );
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
