@extends('layouts.app')

@section('content')
    <div class="site-wrap login">
        <div id="reset-password-form">
            <div class="col-md-4" align="center">
                <div class="panel panel-default">
                    <div class="panel-header">
                        <div class="logo">
                            <h2>Reset Password</h2>
                        </div>
                    </div>

                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}
                    <div class="panel-body">

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-group-email">
                            <label for="email" class="col-md-4 hidden control-label">E-Mail Address</label>

                            <div class="">
                                <input id="email" type="email" placeholder="E-Mail Address" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-group-password">
                            <label for="password" class="col-md-4 hidden control-label">Password</label>

                            <div class="">
                                <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} form-group-password">
                            <label for="password-confirm" class="col-md-4 hidden control-label">Confirm Password</label>
                            <div class="">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer" align="right">
                        <input type="submit" class="btn btn-primary" value="Reset Password">
                    </div><!-- .panel-footer -->
                    </form>
                </div><!-- .panel -->
            </div><!-- .col-md-4 -->
        </div><!-- #reset-password-form -->
    </div><!-- .site-wrap -->
@endsection

