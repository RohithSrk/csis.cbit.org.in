@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">

            @include ('partials.alerts')

            @if( ! empty( $qp_arr ) )
                <div class="page-header">
                    <h1 class="page-title ">Add Mid Exam Marks</h1>
                </div>

                <!-- .page-header -->
                <div class="page-content">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Select Students & Exam</h4>
                                </div>
                                <form class="form-horizontal" action="/exam/add-marks" method="post">

                                    {{ csrf_field() }}

                                    <div class="panel-body admin-form">

                                        <div class="col-md-3">
                                            <div class="section">
                                                <label for="select_semester" class="field-label">Select Semester</label>
                                                <label for="select_semester" class="field">
                                                    {{  Form::select('semester', $semesters_arr, $semester_id ?? '' , [
                                                        'class' => 'form-control select',
                                                        'id' => 'select_semester' ]) }}
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="section">
                                                <label for="select_section" class="field-label">Select Section</label>
                                                <label for="select_section" class="field">
                                                    {{  Form::select('section',$sections_arr, $section_id ?? '' , [
                                                        'class' => 'form-control select',
                                                        'id' => 'select_section' ]) }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="section">
                                                <label for="select_qp" class="field-label">Select Question Paper</label>
                                                <label for="select_qp" class="field">
                                                    {{  Form::select('question-paper', $qp_arr, $qp_id ?? '' , [
                                                        'class' => 'form-control select',
                                                        'id' => 'select_qp' ]) }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer admin-form" align="right">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Get Students">
                                    </div>
                                </form>
                            </div>
                        </div><!-- .col-lg-12 -->
                    </div><!-- .row -->

                    @if( ! empty( $students ) )

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Student Exam Marks for ( {{ $qp_arr[ $qp_id ] }} )</h4>
                                    </div>
                                    {{ Form::open(array('action' => 'ExamMarksController@store', 'method' => 'put')) }}
                                    {{ Form::hidden('question-paper', $qp_id) }}
                                    {{ Form::hidden('section', $section_id) }}

                                    <div class="panel-body marks-table">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0 th-bb-n" id="student-lab-marks-entry">
                                                <thead>
                                                <tr>
                                                    <th>Roll Number</th>
                                                    <th>Name</th>
                                                    @foreach( $questions as $question )
                                                        <th>{{ $question->question }}</th>
                                                        @if( $question->subQuestions()->count() )
                                                            @foreach( $question->subQuestions()->get() as $squestion )
                                                                <th>{{ $squestion->question }}</th>
                                                            @endforeach
                                                        @endif
                                                    @endforeach

                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach( $students as $student )
                                                        <tr>
                                                            <td class="width-100">{{ $student->rollnum }}</td>
                                                            <td>{{ strtoupper($student->name) }}</td>
                                                            @foreach( $questions as $question )
                                                                <td style="width: 75px">
                                                                    {{Form::number( 'emarks[' . $student->rollnum . '][' . $question->id . ']',
                                                                      0,
                                                                      array('min' => 0, 'max' => $question->max_marks, 'class' => 'form-control'))}}
                                                                </td>
                                                                @if( $question->subQuestions()->count() )
                                                                    @foreach( $question->subQuestions()->get() as $squestion )
                                                                        <td style="width: 75px">
                                                                        {{Form::number( 'emarks[' . $student->rollnum . ']['. $question->id .'][subquestion][' . $squestion->id . ']', 0,
                                                                          array('min' => 0, 'max' => $squestion->max_marks, 'class' => 'form-control'))}}
                                                                        </td>
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div><!-- .table-responsive -->
                                    </div>
                                    <div class="panel-footer admin-form" align="right">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Submit Marks">
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