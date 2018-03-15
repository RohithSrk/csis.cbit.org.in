@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">

            @include ('partials.alerts')

            @if( ! empty( $exams_arr ) )
                <div class="page-header">
                    <h1 class="page-title">Add Mid Exam Question Paper Template</h1>
                </div>

                <!-- .page-header -->
                <div class="page-content">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Get Question Paper Template</h4>
                                </div>
                                {{ Form::open( array('action' => 'QuestionPaperController@create', 'method' => 'post',
                                    'class' => 'form-horizontal' ) ) }}

                                <div class="panel-body admin-form">

                                    <div class="col-lg-3">
                                        <div class="section">
                                            <label for="select_exam" class="field-label">Select Mid Exam</label>
                                            <label for="select_exam" class="field">
                                                {{  Form::select('exam', $exams_arr, $exam_id ?? '' , [
                                                    'class' => 'form-control select',
                                                    'id' => 'select_exam' ]) }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="section">
                                            <label for="select_semester" class="field-label">Select Semester</label>
                                            <label for="select_semester" class="field">
                                                {{  Form::select('semester', $semesters_arr, $semester_id ?? '' , [
                                                    'class' => 'form-control select',
                                                    'id' => 'select_semester' ]) }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="section">
                                            <label for="select_subject" class="field-label">Select Subject</label>
                                            <label for="select_subject" class="field">
                                                {{  Form::select('subject', $subjects_arr, $subject_id ?? '' , [
                                                    'class' => 'form-control select',
                                                    'id' => 'select_subject' ]) }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <hr>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="section">
                                            <label for="question-paper-name" class="field-label">Question Paper Name</label>
                                            <label for="question-paper-name" class="field">
                                                {{  Form::text("question-paper-name", $questionPaperName ?? '', [
                                                    'class' => 'form-control select',
                                                    'id' => 'question-paper-name', 'required' ]) }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="section">
                                            <label for="date" class="field-label">Select Date</label>
                                            <label for="date" class="field">
                                                <div class="input-group date ">
                                                <span class="input-group-addon cursor">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                    <input type="text" id="date" name="date" value=""
                                                           class="form-control gui-input datetimepicker" placeholder="dd/mm/yyyy" required>
                                                </div>
                                            </label>
                                        </div>
                                    </div>


                                    <div class="col-lg-3">
                                        <div class="section">
                                            <label for="max-marks" class="field-label">Max Marks</label>
                                            <label for="max-marks" class="field">
                                                {{  Form::number("max-marks", $maxMarks ?? 20, [
                                                    'class' => 'form-control select',
                                                    'id' => 'max-marks', 'min' => 0 ]) }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <hr>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="section">
                                            <label for="max_questions_part-1" class="field-label">Max No. of Questions in Part A</label>
                                            <label for="max_questions_part-1" class="field">
                                                {{  Form::number("parts[1][max_questions]", $parts[1]['max_questions'] ?? 3, [
                                                    'class' => 'form-control select',
                                                    'id' => 'rollnum', 'min' => 0 ]) }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="section">
                                            <label for="questions_to_attempt_part-1" class="field-label">Questions to Attempt in Part A</label>
                                            <label for="questions_to_attempt_part-1" class="field">
                                                {{  Form::number("parts[1][questions_to_attempt]",  $parts[1]['questions_to_attempt']  ?? 3, [
                                                    'class' => 'form-control select',
                                                    'id' => 'rollnum', 'min' => 0, 'required' ]) }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="section">
                                            <label for="max_questions_part-2" class="field-label">Max No. of Questions in Part B</label>
                                            <label for="max_questions_part-2" class="field">
                                                {{  Form::number("parts[2][max_questions]", $parts[2]['max_questions'] ?? 3, [
                                                    'class' => 'form-control select',
                                                    'id' => 'rollnum', 'min' => 0 ]) }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="section">
                                            <label for="questions_to_attempt_part-2" class="field-label">Questions to Attempt in Part B</label>
                                            <label for="questions_to_attempt_part-2" class="field">
                                                {{  Form::number("parts[2][questions_to_attempt]", $parts[2]['questions_to_attempt'] ?? 2, [
                                                    'class' => 'form-control select',
                                                    'id' => 'rollnum', 'min' => 0 ]) }}
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="panel-footer admin-form" align="right">
                                    <input type="submit" class="btn btn-sm btn-primary" value="Get Template">
                                </div>
                                {{ Form::close() }}
                            </div>
                        </div><!-- .col-lg-12 -->
                    </div><!-- .row -->

                    @if( ! empty( $parts ) )

                        <div class="row">
                            <div class="col-lg-9">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">{{ $exams_arr[ $exam_id ] }} - Question Paper Template for {{ $subjects_arr[ $subject_id ] }}</h4>
                                    </div>
                                    {{ Form::open(array('action' => 'QuestionPaperController@store', 'method' => 'put')) }}

                                    <div class="panel-body marks-table">
                                        <div class="table-responsive">
                                            <div class="col-lg-12">
                                                <h2>Part A Questions</h2>
                                            </div>
                                            <table class="table table-bordered mb-0 th-bb-n" id="qp-questions">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Question</th>
                                                        <th>Max Marks</th>
                                                        <th>Sub Question</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @for( $i = 1; $i <= $parts[1]['max_questions']; $i++ )
                                                    <tr data-sq="{{ $i }}" data-part="1">
                                                        <td>{{ $i }}</td>
                                                        <td>
                                                            {{ Form::text( "questions[1][{$i}][question]"  , 'Q' . $i,
                                                            array('class' => 'form-control', 'required')) }}
                                                        </td>
                                                        <td class="width-100">
                                                            {{Form::number(  "questions[1][{$i}][max_marks]"  , '',
                                                              array('class' => 'form-control', 'required', 'step' => 0.5))}}
                                                        </td>
                                                        <td class="width-150">
                                                            <button class="btn btn-sm btn-default add-sub-question">Add Sub Question</button>
                                                        </td>
                                                    </tr>
                                                @endfor
                                                </tbody>
                                            </table>
                                            <div class="col-lg-12">
                                                <h2>Part B Questions</h2>
                                            </div>
                                            <table class="table table-bordered mb-0 th-bb-n">
                                                <tbody>
                                                @for( $j = $i; $j <= ($parts[2]['max_questions'] + $i-1); $j++ )
                                                    <tr  data-sq="{{ $j }}" data-part="2">
                                                        <td>{{ $j }}</td>
                                                        <td>
                                                            {{ Form::text( "questions[2][{$j}][question]"  , 'Q' . $j,
                                                            array('class' => 'form-control' )) }}
                                                        </td>
                                                        <td class="width-100">
                                                            {{ Form::number(  "questions[2][{$j}][max_marks]"  , '',
                                                              array('class' => 'form-control', 'step' => 0.5 )) }}
                                                        </td>
                                                        <td class="width-150">
                                                            <button class="btn btn-sm btn-default add-sub-question">Add Sub Question</button>
                                                        </td>
                                                    </tr>
                                                @endfor
                                                </tbody>
                                            </table>
                                        </div><!-- .table-responsive -->
                                    </div>
                                    <div class="panel-footer admin-form" align="right">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Submit">
                                    </div>
                                    {{ Form::close() }}
                                </div>
                            </div><!-- .col-lg-12 -->
                        </div><!-- .row -->
                    @endif

                </div><!-- .page-content -->
            @else
                <div class="alert alert-danger mg-top-15 text-left">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    No Exams available. Please create an exam by clicking <a href="{{ action('ExamController@create') }}">here</a>
                </div>
            @endif

        </div>
    </div><!-- .page -->
@endsection