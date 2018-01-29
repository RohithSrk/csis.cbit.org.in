@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">

            @include ('partials.alerts')

            @if( ! empty( $subjects_arr ) )
                <div class="page-header">
                    <h1 class="page-title ">My Lab Marks</h1>
                </div>

                <!-- .page-header -->
                <div class="page-content">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Select Course</h4>
                                </div>
                                {{ Form::open(array('action' => 'LabMarksController@studentViewLabMarks', 'method' => 'post')) }}

                                    <div class="panel-body admin-form">

                                        <div class="col-md-8">
                                            <div class="section">
                                                <label for="select_subject" class="field-label">Select Course</label>
                                                <label for="select_subject" class="field">
                                                    {{  Form::select('subject', $subjects_arr, $subject_id ?? '' , [
                                                        'class' => 'form-control select',
                                                        'id' => 'select_subject' ]) }}
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="section">
                                                <label for="select_labweek3" class="field-label">Select Week</label>
                                                <label for="select_labweek3" class="field">
                                                    {{  Form::select('labweeks[]', $lab_weeks_arr, $lab_week_id ?? '' , [
                                                        'class' => 'form-control labweek-selector select',
                                                        'id' => 'select_labweek3', 'multiple' => 'multiple' ]) }}
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="panel-footer admin-form" align="right">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Get Marks">
                                    </div>
                                {{ Form::close() }}
                            </div>
                        </div><!-- .col-lg-12 -->
                    </div><!-- .row -->

                    @if( ! empty( $mark_types ) )

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Average Student Lab Marks</h4>
                                    </div>

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
                                                    <th>Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach( $students as $student )
                                                    <tr>
                                                        <td class="width-150">{{ $student->rollnum }}</td>
                                                        <td>{{ $student->name }}</td>

                                                        @php
                                                            $stdAvgLabMarks = $student->getAvgLabMarks( $subject_id );
                                                        @endphp

                                                        @foreach( $mark_types as $mark_type )
                                                            <td class="width-100">
                                                                {{ $stdAvgLabMarks[$mark_type['name']] }}
                                                            </td>
                                                        @endforeach
                                                        <td class="width-100">
                                                            {{ $stdAvgLabMarks['Total'] }}
                                                        </td>

                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div><!-- .table-responsive -->
                                    </div>
                                </div>
                            </div><!-- .col-lg-12 -->
                        </div><!-- .row -->
                    @endif

                </div><!-- .page-content -->
            @endif
        </div>
    </div><!-- .page -->
@endsection