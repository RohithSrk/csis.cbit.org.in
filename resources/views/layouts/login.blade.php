@extends('layouts.app1')

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
                    {{ Form::open(array('action' => 'AuthController@doLogin', 'method' => 'post')) }}
                    <div class="panel-body" align="left">
                        <p class="mg-btm-15">Enter your email and password to login</p>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="checkbox inline-block mg-top-10">
                            <label>
                                <input type="checkbox" name="keep_session"> Keep Me Signed In
                            </label>
                        </div>
                        <div class="pull-right mg-top-10">
                            <a href="">Forgot Password?</a>
                        </div>

                        @if( count( $errors->all() ) )
                        <ul class="alert alert-danger mg-top-15 text-left">
                            @foreach( $errors->all() as $error )
                                <li style="margin-left: 18px;">{{$error}}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div><!-- .panel-body -->
                    <div class="panel-footer" align="right">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div><!-- .panel-footer -->
                    {{ Form::close() }}
                </div><!-- .panel -->
            </div><!-- .col-md-4 -->
        </div><!-- #login-form -->
    </div><!-- .site-wrap -->
@endsection