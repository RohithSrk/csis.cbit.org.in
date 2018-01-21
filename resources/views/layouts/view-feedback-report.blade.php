@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">

            @include ('partials.alerts')

            <div class="page-header">
                <h1 class="page-title ">Feedback Report</h1>
            </div><!-- .page-header -->

            <div class="page-content">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Select Feedback</h4>
                            </div>
                            {{ Form::open(['action' => 'FeedbackController@viewReport', 'method' => 'post']) }}

                            <div class="panel-body admin-form">
                                <div class="col-md-4">
                                    <div class="section">
                                        <label for="select_feedback" class="field-label">Select Feedback</label>
                                        <label for="select_feedback" class="field">
                                            {{  Form::select('feedback', $feedback_arr, $feedback_id ?? '' , [
                                                'class' => 'form-control select',
                                                'id' => 'select_feedback' ]) }}
                                        </label>
                                    </div><!-- section -->
                                </div><!-- col-md-4 -->

                                <div class="col-md-4">
                                    <div class="section">
                                        <label for="select_faculty" class="field-label">Select Faculty</label>
                                        <label for="select_faculty" class="field">
                                            {{  Form::select('faculty[]', $faculty_arr, $faculty_id ?? '' , [
                                                'class' => 'form-control select faculty-selector report',
                                                'id' => 'select_faculty',
                                                'multiple' => 'multiple' ]) }}
                                        </label>
                                    </div><!-- section -->
                                </div><!-- col-md-4 -->

                                {{--<div class="col-md-4">--}}
                                    {{--<div class="section">--}}
                                        {{--<label for="select_subject" class="field-label">Select Course</label>--}}
                                        {{--<label for="select_subject" class="field">--}}
                                            {{--{{  Form::select('subject', $subjects_arr, $subject_id ?? '' , [--}}
                                                {{--'class' => 'form-control course-selector report select',--}}
                                                {{--'id' => 'select_subject',--}}
                                                {{--'multiple' => 'multiple']) }}--}}
                                        {{--</label>--}}
                                    {{--</div><!-- section -->--}}
                                {{--</div><!-- col-md-4 -->--}}

                            </div><!-- .panel-body -->

                            <div class="panel-footer admin-form" align="right">
                                <input type="submit" class="btn btn-sm btn-primary" value="Get Report">
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div><!-- .col-lg-12 -->
                </div><!-- .row -->

                @if( ! empty( $criteria ))
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        {{ $feedback_arr[$feedback_id] }} Report.
                                    </h4>
                                </div>

                                <div class="panel-body marks-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0 th-bb-n" id="feedback-report">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Faculty Name</th>
                                                <th>Subject</th>
                                                <th>Year/Section</th>
                                                @foreach( $criteria as $criterion )
                                                    <th title="{{ $criterion->criterion }}">{{ $criterion->code }}</th>
                                                @endforeach
                                                <th>Percentage</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach( $feedback_data as $i => $feedback_datum )
                                                <tr>
                                                    <td class="width-50">{{ $i+1 }}</td>
                                                    <td >{{ $employees_arr[ $feedback_datum['employee_id']] }}</td>
                                                    <td >{{ $subjects_arr[ $feedback_datum['subject_id']] }}</td>
                                                    <td >{{ sectionGetYearSectionName( $feedback_datum['section_id'] ) }}</td>
                                                    @foreach( $criteria as $criterion )
                                                        <td title="{{ $criterion->criterion }}">{{ round(($feedback_datum[$criterion->code] / 5) * 100, 2) }}</td>
                                                    @endforeach
                                                    <td >{{ round($feedback_datum['percentage'], 2) }}</td>
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

        </div>
    </div><!-- .page -->
@endsection