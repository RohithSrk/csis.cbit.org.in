@extends('layouts.app')

@section('content')
    <div class="site-wrap login">
        <div id="login-form">
            <div class="col-md-4" align="center">
                <div class="panel panel-default">
                    <div class="panel-header">
                        <div class="logo">
                            <h2>Login</h2>
                        </div>
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="panel-body" align="left">
                            <p class="mg-btm-15">Enter your email and password to login</p>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-group-email">
                                <label for="email" class="col-md-4 hidden control-label">E-Mail Address</label>

                                <div class="col-md-6-">
                                    <input id="email" type="email" class="form-control" name="email" placeholder="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-group-password">
                                <label for="password" class="col-md-4 hidden control-label">Password</label>

                                <div class="col-md-6-">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
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
