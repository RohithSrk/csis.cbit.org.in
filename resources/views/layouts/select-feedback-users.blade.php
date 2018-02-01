@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">

            @include ('partials.alerts')

            <div class="page-header">
                <h1 class="page-title ">Dummy Feedback Users</h1>
            </div><!-- .page-header -->

            <div class="page-content">

                <div class="row">
                    <div class="col-lg-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Get Feedback Users</h4>
                            </div>
                            {{ Form::open(['action' => ['FeedbackDataController@listFeedbackUsers', $feedback->id], 'method' => 'post']) }}

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
                                <input type="submit" class="btn btn-sm btn-primary" value="Get Users">
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div><!-- .col-lg-12 -->
                </div><!-- .row -->

                @if( ! empty( $feedback_users ))
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title left">
                                       {{$year->name}} {{ $sections_arr[$section_id] }} Feedback.
                                    </h4>
                                    <a href="/feedback-new/{{$feedback->id}}/{{$section_id}}/print-users" target="_blank" class="btn btn-sm btn-primary right">Print users</a>
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
                                                <th>Username</th>
                                                <th>Password</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $i = 0 @endphp
                                            @foreach( $feedback_users as $feedback_user )
                                                <tr>
                                                    <td class="width-50">{{ ++$i }}</td>
                                                    <td>{{ $feedback_user->username }}</td>
                                                    <td>{{ $feedback_user->plain_password }}</td>
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