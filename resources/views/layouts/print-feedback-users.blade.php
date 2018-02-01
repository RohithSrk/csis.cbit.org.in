@extends('layouts.app')

@section('content')

    <div class="site-wrap feedback-dashboard" >

        <div class="page" style="background-color: white">
            <div class="page-main">

                @include ('partials.alerts')

                @if( ! empty( $feedback_users ) )

                    <div class="page-header text-center">
                        <h1 class="page-title">{{ $year->name }} {{ $section->name }} Feedback Users</h1>
                    </div>

                    <div class="page-content">

                        <div class="row">
                            <div class="col-lg-8 col-lg-push-2">

                                @foreach( $feedback_users as $feedback_user )

                                <div class="col-md-4 col-print-4 mb-25">
                                    <table class="table table-bordered mb-0 th-bb-n">
                                        <tr>
                                            <th style="text-align:  center">{{ $feedback_user->student }}</th>
                                        </tr>
                                        <tr>
                                            <td style="text-align:  center">Username: {{ $feedback_user->username }}</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:  center">Password: {{ $feedback_user->plain_password }}</td>
                                        </tr>
                                    </table>
                                </div>

                                @endforeach

                            </div><!-- .col-lg-12 -->
                        </div><!-- .row -->
                    </div>

                @endif
            </div>
        </div>

    </div>

    @include('partials.js-data')

@endsection
