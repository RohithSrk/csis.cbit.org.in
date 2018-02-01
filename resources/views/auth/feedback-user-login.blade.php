@extends('layouts.app')

@section('content')
    <div class="site-wrap login">
        <div id="login-form">
            <div class="col-md-4" align="center">
                <div class="panel panel-default">
                    <div class="panel-header">
                        <div class="logo">
                            <h2>Feedback User Login</h2>
                        </div>
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ route('feedback-user.login.submit') }}">
                        {{ csrf_field() }}
                        <div class="panel-body" align="left">
                            <p class="mg-btm-15">Enter your Feedback User Id and password to login</p>

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} form-group-email">
                                <label for="username" class="col-md-4 hidden control-label">Feedback User Id</label>

                                <div class="col-md-6-">
                                    <input id="username" type="text" class="form-control" name="username" placeholder="Feedback User Id" value="{{ old('username') }}" required autofocus>

                                    {{--@if ($errors->has('username'))--}}
                                        {{--<span class="help-block">--}}
                                            {{--<strong>{{ $errors->first('username') }}</strong>--}}
                                        {{--</span>--}}
                                    {{--@endif--}}
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-group-password">
                                <label for="password" class="col-md-4 hidden control-label">Password</label>

                                <div class="col-md-6-">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                    {{--@if ($errors->has('password'))--}}
                                        {{--<span class="help-block">--}}
                                            {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                        {{--</span>--}}
                                    {{--@endif--}}
                                </div>
                            </div>

                            <div class="checkbox inline-block mg-top-10">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Keep Me Signed In
                                </label>
                            </div>

                            <div class="pull-right mg-top-10">
                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                            </div>

                            @if( count( $errors->all() ) )
                                <ul class="alert alert-danger mg-top-15 text-left">
                                    @foreach( $errors->all() as $error )
                                        <li style="margin-left: 18px;">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div><!-- .panel-body -->
                        <div class="panel-footer" align="right">
                            <input type="submit" class="btn btn-primary" value="Login">
                        </div><!-- .panel-footer -->
                    </form>
                </div><!-- .panel -->
            </div><!-- .col-md-4 -->
        </div><!-- #login-form -->
    </div><!-- .site-wrap -->
@endsection
