@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">

            @include ('partials.alerts')

            @if( ! empty( $subjects ) )
                <div class="page-header">
                    <h1 class="page-title ">Add Lab Marks for Absentee</h1>
                </div>

                <!-- .page-header -->
                <div class="page-content">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Select Student</h4>
                                </div>
                                {{ Form::open( [ 'action' => 'AbsenteeLabMarksController@create', 'method' => 'post' ] ) }}

                                <div class="panel-body admin-form">

                                    <div class="col-md-6">
                                        <div class="section">
                                            <label for="select_subject" class="field-label">Select Course</label>
                                            <label for="select_subject" class="field">
                                                {{  Form::select('subject', $subjects, $subject_id ?? '' , [
                                                    'class' => 'form-control select',
                                                    'id' => 'select_subject' ]) }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="section">
                                            <label for="rollnum" class="field-label">Roll Number</label>
                                            <label for="rollnum" class="field">
                                                {{  Form::text('rollnum', $rollnum ?? '', [
                                                    'class' => 'form-control select',
                                                    'id' => 'rollnum' ]) }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="section">
                                            <label for="select_labweek2" class="field-label">Select Week</label>
                                            <label for="select_labweek2" class="field">
                                                {{  Form::select('labweek',$lab_weeks, $lab_week_id ?? '' , [
                                                    'class' => 'form-control select',
                                                    'id' => 'select_labweek2' ]) }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer admin-form clearfix">
                                    <input type="submit" class="btn btn-primary right" value="Get Student">
                                    <div class="section col-sm-3 right">
                                        <label for="date" class="field-label hidden">Select Date</label>
                                        <label for="date" class="field">
                                            <div class="input-group date ">
                                                <span class="input-group-addon cursor">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <input type="text" id="date" name="date" value="{{ $date }}"
                                                       class="form-control gui-input datetimepicker" placeholder="dd/mm/yyyy" readonly>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                {{ Form::close() }}
                            </div>
                        </div><!-- .col-lg-12 -->
                    </div><!-- .row -->

                    @if( ! empty( $students ) )

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Student Lab Marks for {{ $date }}</h4>
                                    </div>
                                    {{ Form::open(array('action' => 'AbsenteeLabMarksController@store', 'method' => 'put')) }}
                                    {{ Form::hidden('date', $date) }}
                                    {{ Form::hidden('subject', $subject_id) }}
                                    {{ Form::hidden('labweek', $lab_week_id) }}
                                    {{ Form::hidden('rollnum', $rollnum) }}

                                    <div class="panel-body marks-table">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0 th-bb-n">
                                                <thead>
                                                <tr>
                                                    <th>Roll Number</th>
                                                    <th>Name</th>
                                                    @foreach( $mark_types as $mark_type )
                                                        <th>{{ $mark_type['name'] }}</th>
                                                    @endforeach
                                                    <th>Remarks</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach( $students as $student )
                                                    <tr>
                                                        <td class="width-100">{{ $student->rollnum }}</td>
                                                        <td>{{ $student->name }}</td>

                                                        @php
                                                            $stdLabMarks = $student->getLabMarks( $subject_id, $date_formatted );
                                                        @endphp

                                                        @foreach( $mark_types as $mark_type )
                                                            <td class="width-100">
                                                                @php $readonly = (strtolower($mark_type['name']) == 'attendance')? 'readonly' : '' @endphp

                                                                {{Form::number( 'marks[' . $student->rollnum . '][' . $mark_type['name'] . ']'   ,
                                                                  (isset($stdLabMarks[ $mark_type['name'] ]))? $stdLabMarks[ $mark_type['name'] ] : '',
                                                                  ['min' => 0, 'max' => $mark_type['max_marks'], 'class' => 'form-control', $readonly ])}}
                                                            </td>
                                                        @endforeach

                                                        <td>
                                                            {{ Form::textarea( 'marks[' . $student->rollnum . '][remark]',
                                                            isset($stdLabMarks[ 'remark' ])? $stdLabMarks[ 'remark' ] : '' ,
                                                            [ 'class' => 'form-control', 'rows' => 2, 'cols' => 3, 'required' ]) }}
                                                        </td>
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
            @endif
        </div>
    </div><!-- .page -->
@endsection