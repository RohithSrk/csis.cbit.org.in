@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">

            @include ('partials.alerts')

            <div class="page-header">
                <h1 class="page-title ">Add Consolidated Feedback</h1>
            </div><!-- .page-header -->

            <div class="page-content">

                <div class="row">
                    <div class="col-lg-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Create Feedback Form</h4>
                            </div>
                            {{ Form::open(['action' => ['FeedbackDataController@create', $feedback->id], 'method' => 'post']) }}

                            <div class="panel-body admin-form">
                                <div class="col-md-3">
                                    <div class="section">
                                        <label for="select_semester" class="field-label">Select Semester</label>
                                        <label for="select_semester" class="field">
                                            {{  Form::select('semester', $semesters_arr, isset($semester_id)? $semester_id : '' , [
                                                'class' => 'form-control select',
                                                'id' => 'select_semester' ]) }}
                                        </label>
                                    </div><!-- section -->
                                </div><!-- col-md-4 -->

                                <div class="col-md-3">
                                    <div class="section">
                                        <label for="select_section" class="field-label">Select Section</label>
                                        <label for="select_section" class="field">
                                            {{  Form::select('section',$sections_arr, isset($section_id)? $section_id : '' , [
                                                'class' => 'form-control select',
                                                'id' => 'select_section' ]) }}
                                        </label>
                                    </div><!-- .section -->
                                </div><!-- .col-md-4 -->

                            </div><!-- .panel-body -->

                            <div class="panel-footer admin-form" align="right">
                                <input type="submit" class="btn btn-sm btn-primary" value="Get Form">
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
                                       {{$year->name}} {{ $sections_arr[$section_id] }} Feedback.
                                    </h4>
                                </div>
                                {{ Form::open(array('action' => ['FeedbackDataController@store', $feedback->id], 'method' => 'put')) }}
                                {{ Form::hidden('section', $section_id) }}
                                {{ Form::hidden('semester', $semester_id) }}
                                {{ Form::hidden('feedback', $feedback->id) }}

                                <div class="panel-body marks-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0 th-bb-n">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Subject</th>
                                                <th>Faculty</th>
                                                @foreach( $criteria as $criterion )
                                                    <th title="{{ $criterion->code }}">{{ $criterion->criterion }}</th>
                                                @endforeach
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $i = 0 @endphp
                                            @foreach( $subjects_arr as $subject )
                                                @php
                                                    $faculty_arr = Subject::find( $subject->id )->getAssignedFacultyNames( $section_id );
                                                @endphp
                                                <tr>
                                                    <td class="width-50">{{ ++$i }}</td>
                                                    <td>$subject->name</td>
                                                    <td>
                                                        {{  Form::select('faculty[]', $faculty_arr, $faculty_id ?? '' , [
                                                            'class' => 'form-control select faculty-selector report',
                                                            'id' => 'select_faculty',
                                                            'multiple' => 'multiple' ]) }}
                                                    </td>
                                                    @foreach( $criteria as $criterion )
                                                    <td class="width-100">{{ Form::number( 'feedback_data[' . $i . '][' . $criterion->code . ']' , '',
                                                           array('min' => 0, 'max' => 4, 'class' => 'form-control', 'title' => $criterion->criterion ))}}</td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div><!-- .table-responsive -->
                                </div>
                                <div class="panel-footer admin-form" align="right">
                                    <input type="submit" class="btn btn-sm btn-primary" value="Submit Feedback">
                                </div>
                                {{ Form::close() }}
                            </div>
                        </div><!-- .col-lg-12 -->
                    </div><!-- .row -->
                @endif

            </div><!-- .page-content -->


        </div>
    </div><!-- .page -->
@endsection