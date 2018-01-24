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
                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-group-email">
                            <label for="email" hidden class="col-md-4 control-label">E-Mail Address</label>

                            <div class="">
                                <input id="email" type="email" placeholder="E-Mail Address" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div><!-- .panel-body -->
                    <div class="panel-footer" align="right">
                        <input type="submit" class="btn btn-primary" value="Send Password Reset Link">
                    </div><!-- .panel-footer -->
                </form>
            </div><!-- .panel -->
        </div><!-- .col-md-4 -->
    </div><!-- #login-form -->
    </div><!-- .site-wrap -->
@endsection

