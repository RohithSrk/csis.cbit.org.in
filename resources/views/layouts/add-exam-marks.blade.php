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
                                        <h4 class="panel-title">Student Lab Marks for {{ $date }} ( {{ $lab_weeks[ $lab_week_id ] }} )</h4>
                                    </div>
                                    {{ Form::open(array('action' => 'LabMarksController@store', 'method' => 'put')) }}
                                    {{ Form::hidden('date', $date) }}
                                    {{ Form::hidden('subject', $subject_id) }}
                                    {{ Form::hidden('batch', $batch_id) }}
                                    {{ Form::hidden('section', $section_id) }}
                                    {{ Form::hidden('labweek', $lab_week_id) }}

                                    <div class="panel-body marks-table">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0 th-bb-n" id="student-lab-marks-entry">
                                                <thead>
                                                <tr>
                                                    <th>Roll Number</th>
                                                    <th>Name</th>
                                                    @foreach( $mark_types as $mark_type )
                                                        <th>{{ $mark_type['name'] }}</th>
                                                    @endforeach
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach( $students as $student )
                                                    <tr>
                                                        <td class="width-150">{{ $student->rollnum }}</td>
                                                        <td>{{ strtoupper($student->name) }}</td>

                                                        @php
                                                            $stdLabMarks = $student->getLabMarks( $subject_id, $date_formatted );
                                                        @endphp

                                                        @foreach( $mark_types as $mark_type )
                                                            @if(strtolower($mark_type['name']) == 'attendance')
                                                                <td class="width-150">
                                                                    {{  Form::select('attendance', [ $mark_type['max_marks'] => 'Present', 0 => 'Absent' ],
                                                                        $stdLabMarks[ $mark_type['name'] ]?? $mark_type['max_marks'] ,
                                                                        ['class' => 'form-control attendance select' ]) }}
                                                                    {{Form::number( 'marks[' . $student->rollnum . '][' . $mark_type['name'] . ']',
                                                                      $mark_type['max_marks'],
                                                                      array('min' => 0, 'max' => $mark_type['max_marks'], 'class' => 'form-control hidden'))}}
                                                                </td>
                                                            @else
                                                                <td class="width-150">
                                                                {{Form::number( 'marks[' . $student->rollnum . '][' . $mark_type['name'] . ']'  ,
                                                                  $stdLabMarks[ $mark_type['name'] ] ?? '',
                                                                  array('min' => 0, 'max' => $mark_type['max_marks'], 'class' => 'form-control', 'required'))}}
                                                                </td>
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