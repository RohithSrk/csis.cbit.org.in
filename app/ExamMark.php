<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QuestionPaper;
use App\Student;

class ExamMark extends Model
{
	public function question(){
		return $this->belongsTo(ExamQuestion::class);
	}


	public static function getMarks( $student_id, $question_paper_id ) {
		$marks = [];

		$questionPaper = QuestionPaper::find( $question_paper_id );

		$question_ids = $questionPaper->questions()->pluck( 'id' )->toArray();
		$emarks       = Student::find( $student_id )->examMarks()->whereIN( 'question_id', $question_ids )->get();

		$questions = $questionPaper->questions;

		foreach ( $questions as $question ){
			if( $question->has_sub_questions ){
				$sqs = $question->subQuestions;

				foreach ( $sqs as $sq ){
					$marks[$question->id][$sq->id] = $emarks->where('question_id', $question->id )
					                                         ->where( 'sub_question_id', $sq->id )
					                                         ->first()->marks_scored ?? 0;
				}

			} else {
				$marks[$question->id] = $emarks->where('question_id', $question->id )->first()->marks_scored ?? 0;
			}
		}

		$qp_parts = $questionPaper->questionPaperParts;

		$total_marks = 0;

		foreach ( $qp_parts as $qp_part ) {
			$pMarks = [];
			$qids   = $qp_part->questions->pluck( 'id' )->toArray();

			foreach ( $qids as $qid ) {

				if ( ! is_array( $marks[ $qid ] ) ) {
					$pMarks[ $qid ] = $marks[ $qid ];
				} else {
					$pMarks[ $qid ] = array_sum( $marks[ $qid ] );
				}
			}

			$qta = $qp_part->questions_to_attempt;

			rsort( $pMarks );

			$total_marks += array_sum( array_slice( $pMarks, 0, $qta ) );
		}

		$marks['total_marks'] = $total_marks;

		return $marks;
	}
}
