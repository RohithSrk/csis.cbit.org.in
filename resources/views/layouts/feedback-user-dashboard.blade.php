@extends('layouts.app')

@section('content')

    <div class="site-wrap feedback-dashboard dashboard">

        @include ( 'partials.feedback-navbar' )

        <div class="page">
            <div class="page-main">

                @include ('partials.alerts')

                @if( ! empty( $criteria ) )

                <div class="page-header">
                    <h1 class="page-title hidden"></h1>
                </div>

                <div class="page-content">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        {{$year->name}} {{ $section->name }} Feedback
                                    </h4>
                                </div>

                                {{ Form::open( ['action' => 'FeedbackUserController@store', 'method' => 'post' ] ) }}
                                {{ Form::hidden('feedback', $feedback->id) }}
                                {{ Form::hidden('section', $section->id) }}

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
                                            @foreach( $subjects_arr as $subject_id => $subject_name_code )
                                                @php
                                                    $faculty_arr = \App\Subject::find( $subject_id )->getAssignedFacultyNames( $section->id );
                                                @endphp
                                                @foreach( $faculty_arr as $faculty_id =>  $faculty_name )
                                                    <tr>
                                                        <td class="width-50">{{ ++$i }}</td>
                                                        <td>{{ $subject_name_code }}</td>
                                                        <td>{{ $faculty_name }}</td>
                                                        @foreach( $criteria as $criterion )
                                                            <td class="width-100">{{Form::number( 'feedback_data[' . $subject_id . ']['. $faculty_id .' ][' . $criterion->code . ']' , '',
                                                           array('min' => 0, 'max' => 4, 'class' => 'form-control', 'title' => $criterion->criterion ))}}</td>
                                                        @endforeach
                                                    </tr>
                                                @endforeach
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
                </div>

                @endif
            </div>
        </div>

        @include ( 'partials.footer' )

    </div>

    @include('partials.js-data')

@endsection
